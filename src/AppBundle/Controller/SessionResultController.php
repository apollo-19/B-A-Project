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
  public function sessionResultCreateAction($school_session_id)
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
        $sessionWeightTotal=0; $assessmentResultTotal=0; $resultInAlphabet=''; $sessionResultRemark='';

        foreach ($assessment_types as $assessment_type){
          foreach ($assessment_results as $assessment_result){
            if ($assessment_result->getAssessmentTypeId() == $assessment_type->getId() && $assessment_result->getStudentId() == $student->getId()){
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

        $session_result = new SessionResult();

        $session_result->setSessionId($school_session);
        $session_result->setStudentId($student);
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
