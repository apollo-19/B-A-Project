<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\Course;
use AppBundle\Entity\Prerequisite;

class PrerequisiteController extends Controller
{
    /**
     * @Route("/prerequisite", name="prerequisite_home")
     */
    public function indexAction()
    {
        return $this->render('prerequisite/index.html.twig');
    }

    /**
     * @Route("/prerequisite/create", name="prerequisite_create")
     */
    public function prerequisiteCreateAction(Request $request)
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_type') && ($session->get('user_type') == 'admin')){
        $data = [];
        $data['mode'] = 'new';

        $form = $this ->createFormBuilder()
                      ->add('course_module_type')
                      ->add('course_module_id')
                      ->add('prerequisite_type')
                      ->add('prerequisite_id')
                      ->getForm();

        $module = $this->getDoctrine()
                            ->getRepository('AppBundle:Module')
                            ->findAll();

        $data['modules'] = $module;

        $course = $this->getDoctrine()
                            ->getRepository('AppBundle:Course')
                            ->findAll();

        $data['courses'] = $course;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $form_data = $form->getData();
          $data['form'] = $form_data;

          $em = $this->getDoctrine()->getManager();
          $prerequisite = new Prerequisite();
          $prerequisite->setCourseModuleType($form_data['course_module_type']);
          $prerequisite->setCourseModuleId($form_data['course_module_id']);
          $prerequisite->setPrerequisiteType($form_data['prerequisite_type']);
          $prerequisite->setPrerequisiteId($form_data['prerequisite_id']);

          $em->persist($prerequisite);

          $em->flush();
          return $this->redirectToRoute('prerequisite_view');
        }

        return $this->render('prerequisite/form.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Add a Prerequisite.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/prerequisite/edit/{prerequisite_id}", name="prerequisite_edit")
     */
    public function prerequisiteEditAction(Request $request, $prerequisite_id)
    {
      $data = [];
      $data['mode'] = 'edit';

      $form = $this ->createFormBuilder()
                    ->add('course_module_type')
                    ->add('course_module_id')
                    ->add('prerequisite_type')
                    ->add('prerequisite_id')
                    ->getForm();

      $prerequisite = $this->getDoctrine()
                          ->getRepository('AppBundle:Prerequisite')
                          ->findOneById($prerequisite_id);

      $prerequisite_data['course_module_type'] = $prerequisite->getCourseModuleType();
      $prerequisite_data['course_module_id'] = $prerequisite->getCourseModuleId();
      $prerequisite_data['prerequisite_type'] = $prerequisite->getPrerequisiteType();
      $prerequisite_data['prerequisite_id'] = $prerequisite->getPrerequisiteId();

      $module = $this->getDoctrine()
                          ->getRepository('AppBundle:Module')
                          ->findAll();

      $data['modules'] = $module;

      $course = $this->getDoctrine()
                          ->getRepository('AppBundle:Course')
                          ->findAll();

      $data['courses'] = $course;

      $session = new Session();

      if($session->get('user_name') && ($session->get('user_type') == 'admin')){
        $data['form'] = $prerequisite;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $data['form'] = [];
          $form_data = $form->getData();
          $data['form'] = $form_data;

          $prerequisite->setCourseModuleType($form_data['course_module_type']);
          $prerequisite->setCourseModuleId($form_data['course_module_id']);
          $prerequisite->setPrerequisiteType($form_data['prerequisite_type']);
          $prerequisite->setPrerequisiteId($form_data['prerequisite_id']);

          $em = $this->getDoctrine()->getManager();
          $em->persist($prerequisite);
          $em->flush();

          return $this->redirectToRoute('prerequisite_view');
        }
        return $this->render('prerequisite/form.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Edit This Prerequisite.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/prerequisite/delete/{prerequisite_id}", name="prerequisite_delete")
     */
    public function prerequisiteDeleteAction(Request $request, $prerequisite_id)
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_id') && ($session->get('user_type') == 'admin')){
        $prerequisite = $this->getDoctrine()
                            ->getRepository('AppBundle:Prerequisite')
                            ->findOneById($prerequisite_id);

        $em = $this->getDoctrine()->getManager();

        $em->remove($prerequisite);
        $em->flush();

        return $this->redirectToRoute('prerequisite_view');
      } else {
        $data['message'] = 'You Are Not Qualified to Delete This Prerequisite.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/prerequisite/view", name="prerequisite_view")
     */
    public function prerequisiteViewAction()
    {
      $session = new Session();

      if($session->get('user_id') && ($session->get('user_type') == 'admin' || $session->get('user_type') == 'teacher')){
        $data = [];

        $prerequisite = $this->getDoctrine()
                            ->getRepository('AppBundle:Prerequisite')
                            ->findAll();

        $data['prerequisites'] = $prerequisite;

        $module = $this->getDoctrine()
                            ->getRepository('AppBundle:Module')
                            ->findAll();

        $data['modules'] = $module;

        $course = $this->getDoctrine()
                            ->getRepository('AppBundle:Course')
                            ->findAll();

        $data['courses'] = $course;

        return $this->render('prerequisite/view.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View Prerequisites.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/prerequisite/view_one/{prerequisite_id}", name="prerequisite_view_one")
     */
    public function prerequisiteViewOneAction(Request $request, $prerequisite_id)
    {
      $session = new Session();

      if($session->get('user_id') && ($session->get('user_type') == 'admin' || $session->get('user_type') == 'teacher')){
        $data = [];

        $prerequisite = $this->getDoctrine()
                            ->getRepository('AppBundle:Prerequisite')
                            ->findOneById($prerequisite_id);

        $data['prerequisite'] = $prerequisite;

        return $this->render('prerequisite/view_one.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View This Prerequisite.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }
}
