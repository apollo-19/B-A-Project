<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\Department;

class DepartmentController extends Controller
{
    /**
     * @Route("/department", name="department_home")
     */
    public function indexAction()
    {
      return $this->render('department/index.html.twig');
    }

    /**
     * @Route("/department/create", name="department_create")
     */
    public function departmentHireAction(Request $request)
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_type') && ($session->get('user_type') == 'admin')){
        $data = [];
        $data['mode'] = 'new';
        $data['form'] = [];

        $form = $this ->createFormBuilder()
                      ->add('department_code')
                      ->add('department_name')
                      ->add('department_school')
                      ->getForm();

        $school = $this->getDoctrine()
                            ->getRepository('AppBundle:School')
                            ->findAll();

        $data['schools'] = $school;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $form_data = $form->getData();
          $data['form'] = $form_data;

          $em = $this->getDoctrine()->getManager();
          $department = new Department();
          $department->setDepartmentCode($form_data['department_code']);
          $department->setDepartmentName($form_data['department_name']);
          $department->setSchoolId($form_data['department_school']);
          $department->setCreatedBy($session->get('user_id'));

          $em->persist($department);

          $em->flush();
          return $this->redirectToRoute('department_view');
        }

        return $this->render('department/form.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Hire a Department.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/department/edit/{department_id}", name="department_edit")
     */
    public function departmentEditAction(Request $request, $department_id)
    {
      $data = [];
      $data['mode'] = 'edit';
      $data['form'] = [];
      $data['school'] = [];

      $form = $this ->createFormBuilder()
                    ->add('department_code')
                    ->add('department_name')
                    ->add('department_school')
                    ->getForm();

      $department = $this->getDoctrine()
                          ->getRepository('AppBundle:Department')
                          ->findOneById($department_id);

      $department_data['department_code'] = $department->getDepartmentCode();
      $department_data['department_name'] = $department->getDepartmentName();
      $department_data['department_school'] = $department->getSchoolId();
      $department_data['created_by'] = $department->getCreatedBy();

      $schools = $this->getDoctrine()
                          ->getRepository('AppBundle:School')
                          ->findAll();

      $data['schools'] = $schools;

      $school = $this->getDoctrine()
                          ->getRepository('AppBundle:School')
                          ->findOneById($department_data['department_school']);

      $data['mySchool'] = $school;

      $session = new Session();

      if($session->get('user_name') && ($session->get('user_type') == 'admin') && ($session->get('user_id') == $department_data['created_by'])){
        $data['form'] = $department_data;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $data['form'] = [];
          $department_data = $form->getData();
          $data['form'] = $department_data;

          $department->setDepartmentCode($department_data['department_code']);
          $department->setDepartmentName($department_data['department_name']);
          $department->setSchoolId($department_data['department_school']);

          $em = $this->getDoctrine()->getManager();
          $em->persist($department);
          $em->flush();

          return $this->redirectToRoute('department_view');
        }
        return $this->render('department/form.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Edit This Department.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/department/delete/{department_id}", name="department_delete")
     */
    public function departmentDeleteAction(Request $request, $department_id)
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_id') && ($session->get('user_type') == 'admin')){
        $department = $this->getDoctrine()
                            ->getRepository('AppBundle:Department')
                            ->findOneById($department_id);

        $em = $this->getDoctrine()->getManager();

        $em->remove($department);
        $em->flush();

        return $this->redirectToRoute('department_view');
      } else {
        $data['message'] = 'You Are Not Qualified to Delete This Department.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/department/view", name="department_view")
     */
    public function departmentViewAction()
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_id') && ($session->get('user_type') == 'admin')){
        $data = [];
        $data['departments'] = [];

        $department = $this->getDoctrine()
                            ->getRepository('AppBundle:Department')
                            ->findAll();

        $data['departments'] = $department;

        $school = $this->getDoctrine()
                            ->getRepository('AppBundle:School')
                            ->findAll();

        $data['schools'] = $school;

        return $this->render('department/view.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View Departments.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/department/view_one/{department_id}", name="department_view_one")
     */
    public function departmentViewOneAction(Request $request, $department_id)
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_id') && ($session->get('user_type') == 'admin')){
        $data = [];
        $data['departments'] = [];

        $department = $this->getDoctrine()
                            ->getRepository('AppBundle:Department')
                            ->findOneById($department_id);

        $department_school = $department->getSchoolId();

        $school = $this->getDoctrine()
                            ->getRepository('AppBundle:School')
                            ->findOneById($department_school);

        $data['department'] = $department;

        $data['school'] = $school;

        return $this->render('department/view_one.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View This Department.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }
}
