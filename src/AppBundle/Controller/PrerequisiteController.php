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
     * @Route("/prerequisite/create", name="prerequisite_create")
     */
    public function prerequisiteCreateAction(Request $request)
    {
      $session = new Session();

      if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
        $data = [];
        $data['mode'] = 'new';

        $form = $this ->createFormBuilder()
                      ->add('course_module_type')
                      ->add('course_id')
                      ->add('module_id')
                      ->add('prerequisite_type')
                      ->add('prerequisite_course_id')
                      ->add('prerequisite_module_id')
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

          $mycourse = $this->getDoctrine()
                              ->getRepository('AppBundle:Course')
                              ->findOneById($form_data['course_id']);
          $mymodule = $this->getDoctrine()
                              ->getRepository('AppBundle:Module')
                              ->findOneById($form_data['module_id']);

          $myprerequisitecourse = $this->getDoctrine()
                                        ->getRepository('AppBundle:Course')
                                        ->findOneById($form_data['prerequisite_course_id']);
          $myprerequisitemodule = $this->getDoctrine()
                                        ->getRepository('AppBundle:Module')
                                        ->findOneById($form_data['prerequisite_module_id']);

          $em = $this->getDoctrine()->getManager();
          $prerequisite = new Prerequisite();
          $prerequisite->setCourseModuleType($form_data['course_module_type']);
          $prerequisite->setCourseId($mycourse);
          $prerequisite->setModuleId($mymodule);
          $prerequisite->setPrerequisiteType($form_data['prerequisite_type']);
          $prerequisite->setPrerequisiteCourseId($myprerequisitecourse);
          $prerequisite->setPrerequisiteModuleId($myprerequisitemodule);

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

      $session = new Session();

      if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
        $form = $this ->createFormBuilder()
                      ->add('course_module_type')
                      ->add('course_id')
                      ->add('module_id')
                      ->add('prerequisite_type')
                      ->add('prerequisite_course_id')
                      ->add('prerequisite_module_id')
                      ->getForm();

        $prerequisite = $this->getDoctrine()
                            ->getRepository('AppBundle:Prerequisite')
                            ->findOneById($prerequisite_id);

        $prerequisite_data['course_module_type'] = $prerequisite->getCourseModuleType();
        $prerequisite_data['course_id'] = $prerequisite->getCourseId();
        $prerequisite_data['module_id'] = $prerequisite->getModuleId();
        $prerequisite_data['prerequisite_type'] = $prerequisite->getPrerequisiteType();
        $prerequisite_data['prerequisite_course_id'] = $prerequisite->getPrerequisiteCourseId();
        $prerequisite_data['prerequisite_module_id'] = $prerequisite->getPrerequisiteModuleId();

        $module = $this->getDoctrine()
                            ->getRepository('AppBundle:Module')
                            ->findAll();

        $data['modules'] = $module;

        $course = $this->getDoctrine()
                            ->getRepository('AppBundle:Course')
                            ->findAll();

        $data['courses'] = $course;

        $data['form'] = $prerequisite;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $data['form'] = [];
          $form_data = $form->getData();
          $data['form'] = $form_data;

          $mycourse = $this->getDoctrine()
                              ->getRepository('AppBundle:Course')
                              ->findOneById($form_data['course_id']);
          $mymodule = $this->getDoctrine()
                              ->getRepository('AppBundle:Module')
                              ->findOneById($form_data['module_id']);

          $myprerequisitecourse = $this->getDoctrine()
                                        ->getRepository('AppBundle:Course')
                                        ->findOneById($form_data['prerequisite_course_id']);
          $myprerequisitemodule = $this->getDoctrine()
                                        ->getRepository('AppBundle:Module')
                                        ->findOneById($form_data['prerequisite_module_id']);

          $prerequisite->setCourseModuleType($form_data['course_module_type']);
          $prerequisite->setCourseId($mycourse);
          $prerequisite->setModuleId($mymodule);
          $prerequisite->setPrerequisiteType($form_data['prerequisite_type']);
          $prerequisite->setPrerequisiteCourseId($myprerequisitecourse);
          $prerequisite->setPrerequisiteModuleId($myprerequisitemodule);

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

      if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
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

      if( $session->get('user_type') == 'admin' ){
        $data = [];

        $prerequisite = $this->getDoctrine()
                            ->getRepository('AppBundle:Prerequisite')
                            ->findAll();

        $data['prerequisites'] = $prerequisite;

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

      if( $session->get('user_type') == 'admin' ){
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
