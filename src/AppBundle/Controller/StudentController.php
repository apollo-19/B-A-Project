<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class StudentController extends Controller
{
    /**
     * @Route("/student", name="student_home")
     */
    public function indexAction()
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_type') && ($session->get('user_type') == 'student'))
        return $this->render('student/index.html.twig');
      else
        return $this->redirectToRoute('user_signin');
    }

    /**
     * @Route("/student/register", name="student_register")
     */
    public function studentCreateAction(Request $request)
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_type') && ($session->get('user_type') == 'admin')){
        $data = [];
        $data['mode'] = 'new';
        $data['form'] = [];

        $form = $this ->createFormBuilder()
                      ->add('first_name_en')
                      ->add('middle_name_en')
                      ->add('last_name_en')
                      ->add('first_name_am')
                      ->add('middle_name_am')
                      ->add('last_name_am')
                      ->add('sex')
                      ->add('nationality')
                      ->add('place_of_birth_town')
                      ->add('place_of_birth_region')
                      ->add('date_of_birth_gc')
                      ->add('date_of_birth_ec')
                      ->add('house_number')
                      ->add('kebele')
                      ->add('woreda_subcity')
                      ->add('town')
                      ->add('zone')
                      ->add('region')
                      ->add('po_box')
                      ->add('telephone_home')
                      ->add('telephone_mobile')
                      ->add('email_address')
                      ->add('native_language')
                      ->add('marital_status')

                      /*
                      ->add('')
                      ->add('')
                      ->add('')
                      ->add('')
                      ->add('')
                      ->add('')
                      */
                      ->getForm();

        $section = $this->getDoctrine()
                            ->getRepository('AppBundle:Section')
                            ->findAll();

        $data['sections'] = $section;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $form_data = $form->getData();
          $data['form'] = $form_data;

          if($form_data['password'] != $form_data['confirm_password'])
            $data['resultMessage'] = 'Passwords Must Match!';
          else {
            $em = $this->getDoctrine()->getManager();

            $passwordLIT = new LogInTable();
            $passwordLIT->setUserName($form_data['user_name']);
            $passwordLIT->setPassword($form_data['password']);
            $passwordLIT->setUserType('student');

            $student = new Student();
            $student->setRegisteredBy($session->get('user_id'));
            $student->setFirstName($form_data['first_name']);
            $student->setMiddleName($form_data['middle_name']);
            $student->setLastName($form_data['last_name']);
            $student->setSex($form_data['sex']);
            $student->setMobileNumber($form_data['mobile_number']);
            $student->setEmailAddress($form_data['email_address']);
            $student->setUserName($form_data['user_name']);
            $student->setDepartmentId($form_data['teacher_department']);

            $em->persist($teacher);
            $em->persist($passwordLIT);

            $em->flush();
            return $this->redirectToRoute('teacher_view');
          }
        }

        return $this->render('student/form_1.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Hire a Teacher.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }






    /**
     * @Route("/student/delete/{student_id}", name="student_delete")
     */
    public function studentDeleteAction(Request $request, $student_id)
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_id') && ($session->get('user_type') == 'admin')){
        $student = $this->getDoctrine()
                            ->getRepository('AppBundle:Student')
                            ->findOneById($student_id);

        $student_user_name = $student->getUserName();

        $student_log_in_info = $this->getDoctrine()
                            ->getRepository('AppBundle:LogInTable')
                            ->findOneByUserName($student_user_name);

        $em = $this->getDoctrine()->getManager();

        $em->remove($student);
        $em->remove($student_log_in_info);
        $em->flush();

        return $this->redirectToRoute('student_view');
      } else {
        $data['message'] = 'You Are Not Qualified to Delete This Student.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/student/view", name="student_view")
     */
    public function studentViewAction()
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_id') && ($session->get('user_type') == 'admin')){
        $data = [];
        $data['students'] = [];

        $student = $this->getDoctrine()
                            ->getRepository('AppBundle:Student')
                            ->findAll();

        $department = $this->getDoctrine()
                            ->getRepository('AppBundle:Department')
                            ->findAll();

        $data['departments'] = $department;

        $data['students'] = $student;

        return $this->render('student/view.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View Students.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/student/view_one/{student_id}", name="student_view_one")
     */
    public function studentViewOneAction(Request $request, $student_id)
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_id') && ($session->get('user_type') == 'admin')){
        $data = [];
        $data['students'] = [];

        $student = $this->getDoctrine()
                            ->getRepository('AppBundle:Student')
                            ->findOneById($student_id);

        $student_department = $student->getDepartmentId();

        $department = $this->getDoctrine()
                            ->getRepository('AppBundle:Department')
                            ->findOneById($student_department);

        $data['department'] = $department;

        $data['student'] = $student;

        return $this->render('student/view_one.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View This Student.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

}
