<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\Course;

class CourseController extends Controller
{
    /**
     * @Route("/course", name="course_home")
     */
    public function indexAction()
    {
        return $this->render('course/index.html.twig');
    }

    /**
     * @Route("/course/create", name="course_create")
     */
    public function courseCreateAction(Request $request)
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_type') && ($session->get('user_type') == 'admin')){
        $data = [];
        $data['mode'] = 'new';

        $form = $this ->createFormBuilder()
                      ->add('course_code')
                      ->add('course_name')
                      ->add('course_credit_hour')
                      ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $form_data = $form->getData();
          $data['form'] = $form_data;

          $em = $this->getDoctrine()->getManager();
          $course = new Course();
          $course->setCourseCode($form_data['course_code']);
          $course->setCourseName($form_data['course_name']);
          $course->setCourseCreditHour($form_data['course_credit_hour']);


          $course->setCreatedBy($session->get('user_id'));

          $em->persist($course);

          $em->flush();
          return $this->redirectToRoute('course_view');
        }

        return $this->render('course/form.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Create a Course.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/course/edit/{course_id}", name="course_edit")
     */
    public function courseEditAction(Request $request, $course_id)
    {
      $data = [];
      $data['mode'] = 'edit';

      $form = $this ->createFormBuilder()
                    ->add('course_code')
                    ->add('course_name')
                    ->add('course_credit_hour')
                    ->getForm();

      $course = $this->getDoctrine()
                          ->getRepository('AppBundle:Course')
                          ->findOneById($course_id);

      $course_data['course_code'] = $course->getCourseCode();
      $course_data['course_name'] = $course->getCourseName();
      $course_data['course_credit_hour'] = $course->getCourseCreditHour();
      $course_data['created_by'] = $course->getCreatedBy();

      $session = new Session();

      if($session->get('user_name') && ($session->get('user_type') == 'admin') && ($session->get('user_id') == $course_data['created_by'])){
        $data['form'] = $course_data;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $data['form'] = [];
          $course_data = $form->getData();
          $data['form'] = $course_data;

          $course->setCourseCode($course_data['course_code']);
          $course->setCourseName($course_data['course_name']);
          $course->setCourseCreditHour($course_data['course_credit_hour']);

          $em = $this->getDoctrine()->getManager();
          $em->persist($course);
          $em->flush();

          return $this->redirectToRoute('course_view');
        }
        return $this->render('course/form.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Edit This Course.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/course/delete/{course_id}", name="course_delete")
     */
    public function courseDeleteAction(Request $request, $course_id)
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_id') && ($session->get('user_type') == 'admin')){
        $course = $this->getDoctrine()
                            ->getRepository('AppBundle:Course')
                            ->findOneById($course_id);

        $em = $this->getDoctrine()->getManager();

        $em->remove($course);
        $em->flush();

        return $this->redirectToRoute('course_view');
      } else {
        $data['message'] = 'You Are Not Qualified to Delete This Course.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/course/view", name="course_view")
     */
    public function courseViewAction()
    {
      $session = new Session();

      if($session->get('user_id') && ($session->get('user_type') == 'admin' || $session->get('user_type') == 'teacher')){
        $data = [];
        $data['courses'] = [];

        $course = $this->getDoctrine()
                            ->getRepository('AppBundle:Course')
                            ->findAll();

        $data['courses'] = $course;

        return $this->render('course/view.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View Courses.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/course/view_one/{course_id}", name="course_view_one")
     */
    public function courseViewOneAction(Request $request, $course_id)
    {
      $session = new Session();

      if($session->get('user_id') && ($session->get('user_type') == 'admin' || $session->get('user_type') == 'teacher')){
        $data = [];

        $course = $this->getDoctrine()
                            ->getRepository('AppBundle:Course')
                            ->findOneById($course_id);

        $data['course'] = $course;

        return $this->render('course/view_one.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View This Course.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }
}
