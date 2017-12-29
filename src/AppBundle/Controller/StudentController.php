<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\LogInTable;
use AppBundle\Entity\Student;

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
                      ->add('admission_number')
                      ->add('first_name_en')
                      ->add('middle_name_en')
                      ->add('last_name_en')
                      ->add('first_name_am')
                      ->add('middle_name_am')
                      ->add('last_name_am')
                      ->add('section_id')

                      ->add('user_name')
                      ->add('password')
                      ->add('confirm_password')
                      ->getForm();

        $section = $this->getDoctrine()
                            ->getRepository('AppBundle:Section')
                            ->findAll();

        $data['sections'] = $section;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $student_data = $form->getData();
          $data['form'] = $student_data;

          if($student_data['password'] != $student_data['confirm_password'])
            $data['resultMessage'] = 'Passwords Must Match!';
          else {
            $em = $this->getDoctrine()->getManager();
            $mysection = $this->getDoctrine()
                                ->getRepository('AppBundle:Section')
                                ->findOneById($student_data['section_id']);

            $passwordLIT = new LogInTable();
            $passwordLIT->setUserName($student_data['user_name']);
            $passwordLIT->setPassword(md5($student_data['password']));
            $passwordLIT->setUserType('student');

            $student = new Student();
            $student->setAdmissionNumber($student_data['admission_number']);
            $student->setFirstNameEn($student_data['first_name_en']);
            $student->setMiddleNameEn($student_data['middle_name_en']);
            $student->setLastNameEn($student_data['last_name_en']);
            $student->setFirstNameAm($student_data['first_name_am']);
            $student->setMiddleNameAm($student_data['middle_name_am']);
            $student->setLastNameAm($student_data['last_name_am']);
            $student->setUserName($student_data['user_name']);

            $student->setSectionId($mysection);
            $student->setRegisteredBy($session->get('user_id'));

            $em->persist($student);
            $em->persist($passwordLIT);

            $em->flush();
            return $this->redirectToRoute('student_view');
          }
        }

        return $this->render('student/form.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Hire a Student.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/student/edit/{student_id}", name="student_edit")
     */
    public function studentEditAction(Request $request, $student_id)
    {
      $data = [];
      $data['mode'] = 'edit';

      $form = $this ->createFormBuilder()
                    ->add('admission_number')
                    ->add('first_name_en')
                    ->add('middle_name_en')
                    ->add('last_name_en')
                    ->add('first_name_am')
                    ->add('middle_name_am')
                    ->add('last_name_am')
                    ->add('section_id')

                    ->add('user_name')
                    ->add('password')
                    ->add('confirm_password')
                    ->getForm();

      $student = $this->getDoctrine()
                          ->getRepository('AppBundle:Student')
                          ->findOneById($student_id);

      $student_data['admission_number'] = $student->getAdmissionNumber();
      $student_data['first_name_en'] = $student->getFirstNameEn();
      $student_data['middle_name_en'] = $student->getMiddleNameEn();
      $student_data['last_name_en'] = $student->getLastNameEn();
      $student_data['first_name_am'] = $student->getFirstNameAm();
      $student_data['middle_name_am'] = $student->getMiddleNameAm();
      $student_data['last_name_am'] = $student->getLastNameAm();

      $student_data['section_id'] = $student->getSectionId();
      $student_data['registered_by'] = $student->getRegisteredBy();

      $section = $this->getDoctrine()
                          ->getRepository('AppBundle:Section')
                          ->findAll();

      $data['sections'] = $section;

      $session = new Session();

      if($session->get('user_name') && ($session->get('user_type') == 'admin')){
        $data['form'] = $student_data;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $data['form'] = [];
          $student_data = $form->getData();
          $data['form'] = $student_data;

          $mysection = $this->getDoctrine()
                              ->getRepository('AppBundle:Section')
                              ->findOneById($student_data['section_id']);

          $student->setAdmissionNumber($student_data['admission_number']);
          $student->setFirstNameEn($student_data['first_name_en']);
          $student->setMiddleNameEn($student_data['middle_name_en']);
          $student->setLastNameEn($student_data['last_name_en']);
          $student->setFirstNameAm($student_data['first_name_am']);
          $student->setMiddleNameAm($student_data['middle_name_am']);
          $student->setLastNameAm($student_data['last_name_am']);

          $student->setSectionId($mysection);

          $em = $this->getDoctrine()->getManager();
          $em->persist($student);
          $em->flush();

          return $this->redirectToRoute('student_view');
        }
        return $this->render('student/form.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Edit This Student.';
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

        $student_log_in_info = $this->getDoctrine()
                                    ->getRepository('AppBundle:LogInTable')
                                    ->findOneByUserName($student->getUserName());

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

        $school = $this->getDoctrine()
                            ->getRepository('AppBundle:School')
                            ->findAll();

        $data['schools'] = $school;

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

        $student_section = $student->getSectionId();

        $section = $this->getDoctrine()
                            ->getRepository('AppBundle:Section')
                            ->findOneById($student_section);

        $data['section'] = $section;

        $data['student'] = $student;

        return $this->render('student/view_one.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View This Student.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

}
