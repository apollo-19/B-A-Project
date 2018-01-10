<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class TeacherTasksController extends Controller
{
  /**
   * @Route("/teacher_sessions/view/", name="teacher_sessions_view")
   */
  public function teacherSessionsViewAction()
  {
    $session = new Session();

    if( $session->get('user_id') && ($session->get('user_type') == 'teacher') ){
      $data = [];
      $data['viewer'] = 'teacher';
      $em = $this->getDoctrine()->getManager();

      $school_sessions = $em->getRepository('AppBundle:Schoolsession')
                            ->createQueryBuilder('e')
                            ->addOrderBy('e.sessionStartDate', 'ASC')
                            ->andWhere('e.teacherId = ' . $session->get('user_id'))
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
   * @Route("/teacher_module/view/", name="teacher_modules_view")
   */
  public function teacherModuleViewAction()
  {
    $session = new Session();

    if( $session->get('user_id') && ($session->get('user_type') == 'teacher') ){
      $data = [];
      $data['viewer'] = 'teacher';
      $em = $this->getDoctrine()->getManager();

      $school_sessions = $em->getRepository('AppBundle:Schoolsession')
                            ->createQueryBuilder('e')
                            ->addOrderBy('e.sessionStartDate', 'ASC')
                            ->andWhere('e.teacherId = ' . $session->get('user_id'))
                            ->andWhere('e.courseModuleType =' . '"module"')
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
  * @Route("/teacher_courses/view/", name="teacher_courses_view")
  */
  public function teacherCoursesViewAction()
  {
    $session = new Session();

    if( $session->get('user_id') && ($session->get('user_type') == 'teacher') ){
      $data = [];
      $data['viewer'] = 'teacher';
      $em = $this->getDoctrine()->getManager();

      $school_sessions = $em->getRepository('AppBundle:Schoolsession')
                            ->createQueryBuilder('e')
                            ->addOrderBy('e.sessionStartDate', 'ASC')
                            ->andWhere('e.teacherId = ' . $session->get('user_id'))
                            ->andWhere('e.courseModuleType = course')
                            ->getQuery()
                            ->execute();

      $data['school_sessions'] = $school_sessions;

      return $this->render('course/teacher_view.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to View Courses.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }
}
