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
      ->addOrderBy('e.sessionStartDate', 'ASC')
      ->andWhere('e.sectionId = ' . $student->getSectionId()->getId())
      ->getQuery()
      ->execute();

      $data['school_sessions'] = $school_sessions;

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

      // $school_sessions = $em->getRepository('AppBundle:Schoolsession')
      //                       ->createQueryBuilder('e')
      //                       ->addOrderBy('e.sessionStartDate', 'ASC')
      //                       ->andWhere('e.sectionId = ' . $student->getSectionId()->getId())
      //                       ->andWhere('e.courseModuleType = module')
      //                       ->getQuery()
      //                       ->execute();

      $school_sessions = $this->getDoctrine()->getManager()
                              ->getRepository('AppBundle:Schoolsession')
                              ->findBy(
                                array('courseModuleType' => 'module', 'sectionId' => $student->getSectionId()->getId())
                              );

      $data['school_sessions'] = $school_sessions;

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
      $course = '\'course\'';

      // return new JSONResponse($course);

      $school_sessions = $em->getRepository('AppBundle:Schoolsession')
                            ->createQueryBuilder('e')
                            ->addOrderBy('e.sessionStartDate', 'ASC')
                            ->andWhere('e.sectionId = ' . $student->getSectionId()->getId())
                            ->andWhere('e.courseModuleType = ' . $course)
                            ->getQuery()
                            ->execute();

      $data['school_sessions'] = $school_sessions;

      return $this->render('course/minor_view.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to View Courses.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }
}
