<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\SessionResult;
use AppBundle\Entity\SessionResultAdd;
use AppBundle\Entity\AssessmentResult;
use AppBundle\Controller\StudentTasksController;
use AppBundle\Controller\AssessmentResultController;
use Symfony\Component\HttpFoundation\JsonResponse;

class SessionResultController extends Controller
{
  /**
   * @Route("/session_result/create/{school_session_id}", name="session_result_create")
   */
  public function sessionResultCreateAction(Request $request, $school_session_id)
  {
    $session = new Session();

    $school_session = $this->getDoctrine()
                            ->getRepository('AppBundle:Schoolsession')
                            ->findOneById($school_session_id);

    if ($school_session->getCourseModuleType() == 'course'){
      $mycourse = $this->getDoctrine()
                        ->getRepository('AppBundle:Course')
                        ->findOneById($school_session->getCourseId());
    } else {
      $mymodule = $this->getDoctrine()
                        ->getRepository('AppBundle:Module')
                        ->findOneById($school_session->getModuleId());
    }

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

    if( ($session->get('user_type') == 'teacher') && ($session->get('user_id') == $school_session->getTeacherId()->getId()) ){
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
                                                    array('courseId' => $prerequisite->getPrerequisiteCourseId())
                                                  );
            } else {
              $prerequisite_school_session = $this->getDoctrine()
                                                  ->getRepository('AppBundle:Schoolsession')
                                                  ->findOneBy(
                                                    array('moduleId' => $prerequisite->getPrerequisiteModuleId())
                                                  );
            }

            $session_results = $this->getDoctrine()
                                    ->getRepository('AppBundle:SessionResult')
                                    ->findBy(
                                      array('sessionId' => $prerequisite_school_session, 'studentId' => $student)
                                    );

            $passed = true;
            if ( $session_results == NULL ){
              $passed = false;
              break;
            } else {
              foreach ( $session_results as $session_result ){
                if( ($session_result->getSessionResultRemark() == 'fail') || ($session_result->getSessionResultRemark() == '') ){
                  $passed = false;
                  break;
                }
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
      return $this->redirect($this->generateUrl('assessment_result_view', array('school_session_id' => $school_session_id)));
    } else {
      $data['message'] = 'You Are Not Qualified to Start Session Result.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/session_result_student/create/", name="session_result_student_create")
   */
  public function sessionResultCreateForStudentAction(Request $request)
  {
    $session = new Session();

    if( $session->get('user_type') == 'admin' ){
      $student_id = $request->request->get('student_id');
      $school_session_id = $request->request->get('school_session_id');
      $prev_school_session_id = $request->request->get('prev_school_session_id');

      $school_session = $this->getDoctrine()
                              ->getRepository('AppBundle:Schoolsession')
                              ->findOneById($school_session_id);

      $student = $this->getDoctrine()
                              ->getRepository('AppBundle:Student')
                              ->findOneById($student_id);

      $prev_school_session = $this->getDoctrine()
                              ->getRepository('AppBundle:Schoolsession')
                              ->findOneById($prev_school_session_id);

      $session_result = new SessionResultAdd();

      $session_result->setSessionId($school_session);
      $session_result->setStudentId($student);
      $session_result->setPrevSessionId($prev_school_session);

      $session_result->setCreatedBy($session->get('user_id'));

      $em = $this->getDoctrine()->getManager();
      $em->persist($session_result);
      // $em->flush();

      $assessment_types = $em->getRepository('AppBundle:AssessmentType')
                              ->createQueryBuilder('e')
                              ->addOrderBy('e.assessmentWorth', 'ASC')
                              ->andWhere('e.assessmentTypeSystemId = ' . $school_session->getAssessmentTypeSystemId()->getId())
                              ->getQuery()
                              ->execute();

      foreach ($assessment_types as $assessment_type){
        $session_result = new AssessmentResult();

        $session_result->setSessionId($school_session);
        $session_result->setStudentId($student);
        $session_result->setAssessmentTypeId($assessment_type);

        $session_result->setCreatedBy($session->get('user_id'));

        $em = $this->getDoctrine()->getManager();
        $em->persist($session_result);
      }
      $em->flush();

      return new JsonResponse('Student Added to Session.');
    }
  }

  /**
   * @Route("/session_result/publish/{school_session_id}", name="session_result_publish")
   */
  public function sessionResultPublishAction($school_session_id)
  {
    $session = new Session();

    $school_session = $this->getDoctrine()
                            ->getRepository('AppBundle:Schoolsession')
                            ->findOneById($school_session_id);

    if( ($session->get('user_type') == 'teacher') && ($session->get('user_id') == $school_session->getTeacherId()->getId()) ){
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

        if($session_result == null)
          continue;

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
            $resultInAlphabetValue = $grade->getGradeValue();
            $sessionResultRemark = $grade->getGradeRemark();
          }
        }

        $session_result->setResultInNumber($assessmentResultTotal);
        $session_result->setResultInAlphabet($resultInAlphabet);
        $session_result->setResultInAlphabetValue($resultInAlphabetValue);
        $session_result->setSessionResultRemark($sessionResultRemark);
        $session_result->setSessionPublished(true);

        $session_result->setCreatedBy($session->get('user_id'));

        $em = $this->getDoctrine()->getManager();
        $em->persist($session_result);
        $em->flush();
      }

      // Publish Add Students
      $session_result_adds = $this->getDoctrine()
                                  ->getRepository('AppBundle:SessionResultAdd')
                                  ->findBy(
                                    array('sessionId' => $school_session->getId())
                                  );

      foreach ($session_result_adds as $session_result_add){
        $sessionWeightTotal=0; $assessmentResultTotal=0; $resultInAlphabet=''; $sessionResultRemark='';

        foreach ($assessment_types as $assessment_type){
          foreach ($assessment_results as $assessment_result){
            if ($assessment_result->getAssessmentTypeId() == $assessment_type && $assessment_result->getStudentId() == $session_result_add->getStudentId()){
              $assessmentResultTotal += $assessment_result->getResultValue();
            }
          }
        }

        foreach ($grades as $grade){
          if ($assessmentResultTotal >= $grade->getStartPoint() && $assessmentResultTotal < $grade->getEndPoint()){
            $resultInAlphabet = $grade->getGrade();
            $resultInAlphabetValue = $grade->getGradeValue();
            $sessionResultRemark = $grade->getGradeRemark();
          }
        }

        $session_result_add->setResultInNumber($assessmentResultTotal);
        $session_result_add->setResultInAlphabet($resultInAlphabet);
        $session_result_add->setResultInAlphabetValue($resultInAlphabetValue);
        $session_result_add->setSessionResultRemark($sessionResultRemark);
        $session_result_add->setSessionPublished(true);

        $session_result_add->setCreatedBy($session->get('user_id'));

        $em = $this->getDoctrine()->getManager();
        $em->persist($session_result_add);
        $em->flush();
      }
      // End Publish Add Students

      return $this->redirect($this->generateUrl('session_result_view', array('school_session_id' => $school_session->getId())));
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

    $school_session = $this->getDoctrine()
                            ->getRepository('AppBundle:Schoolsession')
                            ->findOneById($school_session_id);

    $data['school_session'] = $school_session;

    if( ($session->get('user_type') == 'admin') || ($session->get('user_type') == 'teacher') ){
      $em = $this->getDoctrine()->getManager();

      $session_results = $em->getRepository('AppBundle:SessionResult')
                              ->createQueryBuilder('sr')
                              ->addOrderBy('sr.studentId', 'ASC')
                              ->andWhere('sr.sessionId = ' . $school_session_id)
                              ->getQuery()
                              ->execute();

      $data['session_results'] = $session_results;

      $session_result_adds = $em->getRepository('AppBundle:SessionResultAdd')
                              ->createQueryBuilder('sr')
                              ->addOrderBy('sr.studentId', 'ASC')
                              ->andWhere('sr.sessionId = ' . $school_session_id)
                              ->getQuery()
                              ->execute();

      $data['session_result_adds'] = $session_result_adds;

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
      $data['message'] = 'You Are Not Qualified to View Session Result.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }
}
