<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\School;

class SchoolController extends Controller
{
    /**
     * @Route("/school", name="school_home")
     */
    public function indexAction()
    {
        return $this->render('school/index.html.twig');
    }

    /**
     * @Route("/school/create", name="school_create")
     */
    public function schoolCreateAction(Request $request)
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_type') && ($session->get('user_type') == 'admin')){
        $data = [];
        $data['mode'] = 'new';
        $data['form'] = [];

        $form = $this ->createFormBuilder()
                      ->add('school_code')
                      ->add('school_name')
                      ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $form_data = $form->getData();
          $data['form'] = $form_data;

          $em = $this->getDoctrine()->getManager();
          $school = new School();
          $school->setSchoolCode($form_data['school_code']);
          $school->setSchoolName($form_data['school_name']);

          $school->setCreatedBy($session->get('user_id'));

          $em->persist($school);

          $em->flush();
          return $this->redirectToRoute('school_view');
        }

        return $this->render('school/form.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Create a School.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/school/edit/{school_id}", name="school_edit")
     */
    public function schoolEditAction(Request $request, $school_id)
    {
      $data = [];
      $data['mode'] = 'edit';
      $data['form'] = [];

      $form = $this ->createFormBuilder()
                    ->add('school_code')
                    ->add('school_name')
                    ->getForm();

      $school = $this->getDoctrine()
                          ->getRepository('AppBundle:School')
                          ->findOneById($school_id);

      $school_data['school_code'] = $school->getSchoolCode();
      $school_data['school_name'] = $school->getSchoolName();
      $school_data['created_by'] = $school->getCreatedBy();

      $session = new Session();

      if($session->get('user_name') && ($session->get('user_type') == 'admin') && ($session->get('user_id') == $school_data['created_by'])){
        $data['form'] = $school_data;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $data['form'] = [];
          $school_data = $form->getData();
          $data['form'] = $school_data;

          $school->setSchoolCode($school_data['school_code']);
          $school->setSchoolName($school_data['school_name']);

          $em = $this->getDoctrine()->getManager();
          $em->persist($school);
          $em->flush();

          return $this->redirectToRoute('school_view');
        }
        return $this->render('school/form.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Edit This School.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/school/delete/{school_id}", name="school_delete")
     */
    public function schoolDeleteAction(Request $request, $school_id)
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_id') && ($session->get('user_type') == 'admin')){
        $school = $this->getDoctrine()
                            ->getRepository('AppBundle:School')
                            ->findOneById($school_id);

        $em = $this->getDoctrine()->getManager();

        $em->remove($school);
        $em->flush();

        return $this->redirectToRoute('school_view');
      } else {
        $data['message'] = 'You Are Not Qualified to Delete This School.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/school/view", name="school_view")
     */
    public function schoolViewAction()
    {
      $session = new Session();

      if($session->get('user_id') && ($session->get('user_type') == 'admin' || $session->get('user_type') == 'teacher')){
        $data = [];
        $data['schools'] = [];

        $school = $this->getDoctrine()
                            ->getRepository('AppBundle:School')
                            ->findAll();

        $data['schools'] = $school;

        return $this->render('school/view.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View Schools.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/school/view_one/{school_id}", name="school_view_one")
     */
    public function schoolViewOneAction(Request $request, $school_id)
    {
      $session = new Session();

      if($session->get('user_id') && ($session->get('user_type') == 'admin' || $session->get('user_type') == 'teacher')){
        $em = $this->getDoctrine()->getManager();

        $school = $school = $this->getDoctrine()
                            ->getRepository('AppBundle:School')
                            ->findOneById($school_id);

        $data['school'] = $school;

        $curriculum = $em->getRepository('AppBundle:Curriculum')
                          ->createQueryBuilder('e')
                          ->andWhere('e.schoolId = ' . $school_id)
                          ->addOrderBy('e.curriculumCode', 'ASC')
                          ->getQuery()
                          ->execute();

        $data['curriculums'] = $curriculum;

        $department = $em->getRepository('AppBundle:Department')
                          ->createQueryBuilder('e')
                          ->andWhere('e.schoolId = ' . $school_id)
                          ->addOrderBy('e.departmentCode', 'ASC')
                          ->getQuery()
                          ->execute();

        $data['departments'] = $department;

        return $this->render('school/view_one.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View This School.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }
}
