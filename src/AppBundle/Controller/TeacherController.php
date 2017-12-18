<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\Teacher;
use AppBundle\Entity\LogInTable;
use AppBundle\Entity\Department;

class TeacherController extends Controller
{
    /**
     * @Route("/teacher", name="teacher_home")
     */
    public function indexAction()
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_type') && ($session->get('user_type') == 'teacher')){
        $data['si_user_name'] = ucwords($session->get('user_name'));
        $data['si_user_type'] = $session->get('user_type');

        return $this->render('teacher/index.html.twig', $data);
      } else
        return $this->redirectToRoute('user_signin');
    }

    /**
     * @Route("/teacher/hire", name="teacher_hire")
     */
    public function teacherHireAction(Request $request)
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_type') && ($session->get('user_type') == 'admin')){
        $data = [];
        $data['mode'] = 'new';
        $data['form'] = [];

        $form = $this ->createFormBuilder()
                      ->add('first_name')
                      ->add('middle_name')
                      ->add('last_name')
                      ->add('sex')
                      ->add('mobile_number')
                      ->add('email_address')
                      ->add('user_name')
                      ->add('password')
                      ->add('confirm_password')
                      ->add('teacher_department')
                      ->getForm();

        $department = $this->getDoctrine()
                            ->getRepository('AppBundle:Department')
                            ->findAll();

        $data['departments'] = $department;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $form_data = $form->getData();
          $data['form'] = $form_data;

          if($form_data['password'] != $form_data['confirm_password'])
            $data['resultMessage'] = 'Passwords Must Match!';
          else {
            $mydepartment = $this->getDoctrine()
                             ->getRepository('AppBundle:Department')
                             ->findOneById($form_data['teacher_department']);
            $em = $this->getDoctrine()->getManager();

            $passwordLIT = new LogInTable();
            $passwordLIT->setUserName($form_data['user_name']);
            $passwordLIT->setPassword($form_data['password']);
            $passwordLIT->setUserType('teacher');

            $teacher = new Teacher();
            $teacher->setRegisteredBy($session->get('user_id'));
            $teacher->setFirstName($form_data['first_name']);
            $teacher->setMiddleName($form_data['middle_name']);
            $teacher->setLastName($form_data['last_name']);
            $teacher->setSex($form_data['sex']);
            $teacher->setMobileNumber($form_data['mobile_number']);
            $teacher->setEmailAddress($form_data['email_address']);
            $teacher->setUserName($form_data['user_name']);
            $teacher->setDepartment($form_data['teacher_department']);

            $em->persist($teacher);
            $em->persist($passwordLIT);

            $em->flush();
            return $this->redirectToRoute('teacher_view');
          }
        }

        return $this->render('teacher/form.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Hire a Teacher.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/teacher/edit/{teacher_id}", name="teacher_edit")
     */
    public function teacherEditAction(Request $request, $teacher_id)
    {
      $data = [];
      $data['mode'] = 'edit';
      $data['form'] = [];

      $form = $this ->createFormBuilder()
                    ->add('first_name')
                    ->add('middle_name')
                    ->add('last_name')
                    ->add('sex')
                    ->add('mobile_number')
                    ->add('email_address')
                    ->add('teacher_department')
                    ->getForm();

      $teacher = $this->getDoctrine()
                          ->getRepository('AppBundle:Teacher')
                          ->findOneById($teacher_id);
      if($teacher){
        $teacher_data['first_name'] = $teacher->getFirstName();
        $teacher_data['middle_name'] = $teacher->getMiddleName();
        $teacher_data['last_name'] = $teacher->getLastName();
        $teacher_data['sex'] = $teacher->getSex();
        $teacher_data['mobile_number'] = $teacher->getMobileNumber();
        $teacher_data['email_address'] = $teacher->getEmailAddress();
        $teacher_data['user_name'] = $teacher->getUserName();
        $teacher_data['registered_by'] = $teacher->getRegisteredBy();
        $teacher_data['teacher_department'] = $teacher->getDepartmentId();


        $departments = $this->getDoctrine()
                            ->getRepository('AppBundle:Department')
                            ->findAll();

        $data['departments'] = $departments;

        $session = new Session();

        if($session->get('user_name') && ($session->get('user_type') == 'admin') && ($session->get('user_id') == $teacher_data['registered_by'])){
          $data['form'] = $teacher_data;

          $form->handleRequest($request);

          if($form->isSubmitted()){
            $data['form'] = [];
            $teacher_data = $form->getData();
            $data['form'] = $teacher_data;

            $teacher->setFirstName($teacher_data['first_name']);
            $teacher->setMiddleName($teacher_data['middle_name']);
            $teacher->setLastName($teacher_data['last_name']);
            $teacher->setSex($teacher_data['sex']);
            $teacher->setMobileNumber($teacher_data['mobile_number']);
            $teacher->setEmailAddress($teacher_data['email_address']);
            $teacher->setDepartmentId($teacher_data['teacher_department']);

            $em = $this->getDoctrine()->getManager();
            $em->persist($teacher);
            $em->flush();

            return $this->redirectToRoute('teacher_view');
          }
          return $this->render('teacher/form.html.twig', $data);
        } else {
          $data['message'] = 'You Are Not Qualified to Edit This Teacher.';
          return $this->render('accessDenied.html.twig', $data);
        }
      } else {
        $data['message'] = 'There\'s No Teacher With This ID (' . $teacher_id . ').';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/teacher/delete/{teacher_id}", name="teacher_delete")
     */
    public function teacherDeleteAction(Request $request, $teacher_id)
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_id') && ($session->get('user_type') == 'admin')){
        $teacher = $this->getDoctrine()
                            ->getRepository('AppBundle:Teacher')
                            ->findOneById($teacher_id);

        $teacher_user_name = $teacher->getUserName();

        $teacher_log_in_info = $this->getDoctrine()
                            ->getRepository('AppBundle:LogInTable')
                            ->findOneByUserName($teacher_user_name);

        $em = $this->getDoctrine()->getManager();

        $em->remove($teacher);
        $em->remove($teacher_log_in_info);
        $em->flush();

        return $this->redirectToRoute('teacher_view');
      } else {
        $data['message'] = 'You Are Not Qualified to Delete This Teacher.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/teacher/view", name="teacher_view")
     */
    public function teacherViewAction()
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_id') && ($session->get('user_type') == 'admin')){
        $data = [];
        $data['teachers'] = [];

        $teacher = $this->getDoctrine()
                            ->getRepository('AppBundle:Teacher')
                            ->findAll();

        $department = $this->getDoctrine()
                            ->getRepository('AppBundle:Department')
                            ->findAll();

        $data['departments'] = $department;

        $data['teachers'] = $teacher;

        return $this->render('teacher/view.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View Teachers.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/teacher/view_one/{teacher_id}", name="teacher_view_one")
     */
    public function teacherViewOneAction(Request $request, $teacher_id)
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_id') && ($session->get('user_type') == 'admin')){
        $data = [];
        $data['teachers'] = [];

        $teacher = $this->getDoctrine()
                            ->getRepository('AppBundle:Teacher')
                            ->findOneById($teacher_id);

        $teacher_department = $teacher->getDepartmentId();

        $department = $this->getDoctrine()
                            ->getRepository('AppBundle:Department')
                            ->findOneById($teacher_department);

        $data['department'] = $department;

        $data['teacher'] = $teacher;

        return $this->render('teacher/view_one.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View This Teacher.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }
}
