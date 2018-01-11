<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\JsonResponse;

class StudentTasksController extends Controller
{
  /**
  * @Route("/student_sessions/view/", name="student_sessions_view")
  */
  public function studentSessionsViewAction()
  {
    $data = [];
    $data['viewer'] = 'student';
    $session = new Session();

    if( $session->get('user_id') && ($session->get('user_type') == 'student') ){
      $em = $this->getDoctrine()->getManager();

      $student = $this->getDoctrine()->getManager()
      ->getRepository('AppBundle:Student')
      ->findOneById( $session->get('user_id') );

      $data['student'] = $student;

      $school_sessions = $em->getRepository('AppBundle:Schoolsession')
                            ->createQueryBuilder('e')
                            ->addOrderBy('e.sessionEndDate', 'DESC')
                            ->andWhere('e.sectionId = ' . $student->getSectionId()->getId())
                            ->getQuery()
                            ->execute();

      $data['school_sessions'] = $school_sessions;

      $data['today'] = date("Y-m-d");

      return $this->render('session/minor_view.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to View Courses.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
  * @Route("/student_modules/view/", name="student_modules_view")
  */
  public function studentModulesViewAction()
  {
    $type = "module";
    $data = [];
    $data['viewer'] = 'student';
    $session = new Session();

    if( $session->get('user_id') && ($session->get('user_type') == 'student') ){
      $em = $this->getDoctrine()->getManager();

      $student = $this->getDoctrine()->getManager()
                              ->getRepository('AppBundle:Student')
                              ->findOneById( $session->get('user_id') );

      $data['student'] = $student;

      $school_sessions = $em->getRepository('AppBundle:Schoolsession')
                            ->createQueryBuilder('e')
                            ->addOrderBy('e.sessionEndDate', 'DESC')
                            ->andWhere('e.sectionId = ' . $student->getSectionId()->getId())
                            ->andWhere("e.courseModuleType = 'module'")
                            ->getQuery()
                            ->execute();

      $data['school_sessions'] = $school_sessions;

      $data['today'] = date("Y-m-d");

      return $this->render('module/minor_view.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to View Courses.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/student_courses/view/", name="student_courses_view")
   */
  public function studentCoursesViewAction()
  {
    $data = [];
    $data['viewer'] = 'student';
    $session = new Session();

    if( $session->get('user_id') && ($session->get('user_type') == 'student') ){
      $em = $this->getDoctrine()->getManager();

      $student = $this->getDoctrine()->getManager()
                              ->getRepository('AppBundle:Student')
                              ->findOneById( $session->get('user_id') );

      $data['student'] = $student;

      $school_sessions = $em->getRepository('AppBundle:Schoolsession')
                            ->createQueryBuilder('e')
                            ->addOrderBy('e.sessionEndDate', 'DESC')
                            ->andWhere('e.sectionId = ' . $student->getSectionId()->getId())
                            ->andWhere("e.courseModuleType = 'course'")
                            ->getQuery()
                            ->execute();

      $data['school_sessions'] = $school_sessions;

      $data['today'] = date("Y-m-d");

      return $this->render('course/minor_view.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to View Courses.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/student/results/", name="student_results")
   */
  public function studentResultsViewAction()
  {
    $session = new Session();

    if($session->get('user_id') && ($session->get('user_type') == 'student')){
      $data = [];
      $data['students'] = [];

      $student = $this->getDoctrine()
                          ->getRepository('AppBundle:Student')
                          ->findOneById($session->get('user_id'));

      $data['student'] = $student;

      $session_results = $this->getDoctrine()
                          ->getRepository('AppBundle:SessionResult')
                          ->findBy(
                            array('studentId' => $student)
                          );

      $data['session_results'] = $session_results;

      $assessment_results = $this->getDoctrine()
                          ->getRepository('AppBundle:AssessmentResult')
                          ->findBy(
                            array('studentId' => $student)
                          );

      $data['assessment_results'] = $assessment_results;


      return $this->render('student/result_view.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to View Student\'s Results.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/student/assessment_results/{session_id}", name="student_assessment_results")
   */
  public function studentAssessmentResultsViewAction($session_id)
  {
    $session = new Session();

    if($session->get('user_id') && ($session->get('user_type') == 'student')){
      $em = $this->getDoctrine()->getManager();

      $assessment_results = $em->getRepository('AppBundle:AssessmentResult')
                                ->createQueryBuilder('ar')
                                ->andWhere('ar.sessionId = ' . $session_id)
                                ->andWhere('ar.studentId = ' . $session->get('user_id'))
                                ->getQuery()
                                ->execute();

      $data['assessment_results'] = $assessment_results;

      $student = $this->getDoctrine()
                          ->getRepository('AppBundle:Student')
                          ->findOneById($session->get('user_id'));

      $data['student'] = $student;

      return $this->render('student/assessment_result_view.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to View Student\'s Results.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }
}
