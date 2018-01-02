<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\SessionResult;

class SessionResultController extends Controller
{
  /**
   * @Route("/session_result/create/{school_session_id}", name="session_result_create")
   */
  public function sessionResultCreateAction()
  {
    $school_session = $this->getDoctrine()
                            ->getRepository('AppBundle:Prerequisite')
                            ->findOneById($school_session_id);
    $mycourse = $this->getDoctrine()
                            ->getRepository('AppBundle:Course')
                            ->findOneById($school_session->getCourseId());
    $mymodule = $this->getDoctrine()
                      ->getRepository('AppBundle:Module')
                      ->findOneById($school_session->getModuleId());
    //
    /* add session result for each student */
    if ($school_session->getCourseModuleType() == 'course'){
      $prerequisites = $this->getDoctrine()
                            ->getRepository('AppBundle:Prerequisite')
                            ->findBy(
                              array('courseId' => $mycourse)
                            );
    } else {
      $prerequisites = $this->getDoctrine()
                            ->getRepository('AppBundle:Prerequisite')
                            ->findBy(
                              array('moduleId' => $mymodule)
                            );
    }

    $data['prerequisites'] = $prerequisites;

    $students = $this->getDoctrine()
                        ->getRepository('AppBundle:Student')
                        ->findBy(
                          array('sectionId' => $school_session->getSectionId())
                        );

    $data['students'] = $students;

    if(!$prerequisites){
      foreach ($students as $student){
        $session_result = new SessionResult();

        $session_result->setSessionId($school_session);
        $session_result->setStudentId($student);

        $session_result->setCreatedBy($session->get('user_id'));

        $em = $this->getDoctrine()->getManager();
        $em->persist($session_result);
        $em->flush();
      }
    } else {
      foreach ($students as $student){
        foreach ($prerequisites as $prerequisite){
          if ($school_session->getCourseModuleType() == 'course'){
            $prerequisite_school_session = $this->getDoctrine()
                                                ->getRepository('AppBundle:Schoolsession')
                                                ->findOneBy(
                                                  array('courseId' => $prerequisite->getCourseId())
                                                );
          } else {
            $prerequisite_school_session = $this->getDoctrine()
                                                ->getRepository('AppBundle:Schoolsession')
                                                ->findOneBy(
                                                  array('moduleId' => $prerequisite->getModuleId())
                                                );
          }

          $session_results = $this->getDoctrine()
                                  ->getRepository('AppBundle:SessionResult')
                                  ->findBy(
                                    array('sessionId' => $prerequisite_school_session, 'studentId' => $student)
                                  );

          $passed = true;
          foreach ($session_results as $session_result){
            if( ($session_result->getSessionResultRemark() == 'fail') ){
              $passed = false;
              break;
            }
          }
        }

        if( $passed ){
          $session_result = new SessionResult();

          $session_result->setSessionId($school_session);
          $session_result->setStudentId($student);

          $session_result->setCreatedBy($session->get('user_id'));

          $em = $this->getDoctrine()->getManager();
          $em->persist($session_result);
          $em->flush();
        }
      }
    }
    /* end session result */
  }

  /**
   * @Route("/session_result/publish/{school_session_id}", name="session_result_publish")
   */
  public function sessionResultPublishAction($school_session_id)
  {
    $session = new Session();

    if($session->get('user_id')){
      $school_session = $this->getDoctrine()
                          ->getRepository('AppBundle:Schoolsession')
                          ->findOneById($school_session_id);

      $section = $this->getDoctrine()
                          ->getRepository('AppBundle:Section')
                          ->findOneById($school_session->getSectionId());

      $curriculum = $this->getDoctrine()
                          ->getRepository('AppBundle:Curriculum')
                          ->findOneById($section->getCurriculumId());

      $assessment_results = $this->getDoctrine()
                                ->getRepository('AppBundle:AssessmentResult')
                                ->findBy(
                                  array('sessionId' => $school_session_id)
                                );

      $students = $this->getDoctrine()
                        ->getRepository('AppBundle:Student')
                        ->findBy(
                          array('sectionId' => $school_session->getSectionId())
                        );

      $assessment_types = $this->getDoctrine()
                              ->getRepository('AppBundle:AssessmentType')
                              ->findBy(
                                array('assessmentTypeSystemId' => $school_session->getAssessmentTypeSystemId())
                              );

      $grades = $this->getDoctrine()
                    ->getRepository('AppBundle:Grade')
                    ->findBy(
                      array('gradeSystemId' => $curriculum->getGradeSystemId())
                    );

      foreach ($students as $student){
        $session_result = $this->getDoctrine()
                                    ->getRepository('AppBundle:SessionResult')
                                    ->findOneBy(
                                      array('studentId' => $student->getId(), 'sessionId' => $school_session->getId())
                                    );

        $sessionWeightTotal=0; $assessmentResultTotal=0; $resultInAlphabet=''; $sessionResultRemark='';

        foreach ($assessment_types as $assessment_type){
          foreach ($assessment_results as $assessment_result){
            if ($assessment_result->getAssessmentTypeId() == $assessment_type && $assessment_result->getStudentId() == $student){
              $assessmentResultTotal += $assessment_result->getResultValue();
            }
          }
        }

        foreach ($grades as $grade){
          if ($assessmentResultTotal >= $grade->getStartPoint() && $assessmentResultTotal < $grade->getEndPoint()){
            $resultInAlphabet = $grade->getGrade();
            $sessionResultRemark = $grade->getGradeRemark();
          }
        }

        $session_result->setResultInNumber($assessmentResultTotal);
        $session_result->setResultInAlphabet($resultInAlphabet);
        $session_result->setSessionResultRemark($sessionResultRemark);

        $session_result->setCreatedBy($session->get('user_id'));

        $em = $this->getDoctrine()->getManager();
        $em->persist($session_result);
        $em->flush();
      }

      return $this->redirect($this->generateUrl('session_result_view', array('school_session_id' => $school_session_id)));

    } else {
      $data['message'] = 'You Are Not Qualified to View Assessment Types.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/session_result/view/{school_session_id}", name="session_result_view")
   */
  public function sessionResultViewAction($school_session_id)
  {
    $session = new Session();

    if($session->get('user_name') && $session->get('user_type') && ($session->get('user_type') == 'admin')){
      $em = $this->getDoctrine()->getManager();

      $session_results = $em->getRepository('AppBundle:SessionResult')
                              ->createQueryBuilder('sr')
                              ->addOrderBy('sr.studentId', 'ASC')
                              ->andWhere('sr.sessionId = ' . $school_session_id)
                              ->getQuery()
                              ->execute();

      $data['session_results'] = $session_results;

      $school_session = $this->getDoctrine()
                          ->getRepository('AppBundle:Schoolsession')
                          ->findOneById($school_session_id);

      $data['school_session'] = $school_session;

      if ($school_session->getCourseModuleType() == 'course'){
        $prerequisite = $this->getDoctrine()
        ->getRepository('AppBundle:Prerequisite')
        ->findBy(
          array('courseId' => $school_session->getCourseId())
        );
      } else {
        $prerequisite = $this->getDoctrine()
        ->getRepository('AppBundle:Prerequisite')
        ->findBy(
          array('moduleId' => $school_session->getModuleId())
        );
      }

      $data['prerequisites'] = $prerequisite;

      $assessment_types = $this->getDoctrine()
                              ->getRepository('AppBundle:AssessmentType')
                              ->findBy(
                                array('assessmentTypeSystemId' => $school_session->getAssessmentTypeSystemId())
                              );

      $data['assessment_types'] = $assessment_types;

      return $this->render('session/result_view.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to View Assessment Types.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }
}
