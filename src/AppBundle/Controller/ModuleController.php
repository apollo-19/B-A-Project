<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\Module;

class ModuleController extends Controller
{
    /**
     * @Route("/module", name="module_home")
     */
    public function indexAction()
    {
        return $this->render('module/index.html.twig');
    }

    /**
     * @Route("/module/create", name="module_create")
     */
    public function moduleCreateAction(Request $request)
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_type') && ($session->get('user_type') == 'admin')){
        $data = [];
        $data['mode'] = 'new';
        $data['form'] = [];
        $data['school'] = [];

        $form = $this ->createFormBuilder()
                      ->add('module_code')
                      ->add('module_name')
                      ->add('module_credit_hour')
                      ->add('module_duration')
                      ->add('module_school')
                      ->add('module_curriculum')
                      ->getForm();

        $curriculum = $this->getDoctrine()
                            ->getRepository('AppBundle:Curriculum')
                            ->findAll();

        $data['curriculums'] = $curriculum;

        $school = $this->getDoctrine()
                            ->getRepository('AppBundle:School')
                            ->findAll();

        $data['schools'] = $school;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $module_data = $form->getData();
          $data['form'] = $module_data;

          $em = $this->getDoctrine()->getManager();
          $module = new Module();
          $module->setModuleCode($module_data['module_code']);
          $module->setModuleName($module_data['module_name']);
          $module->setModuleCreditHour($module_data['module_credit_hour']);
          $module->setModuleDuration($module_data['module_duration']);
          $module->setSchoolId($module_data['module_school']);
          $module->setCurriculumId($module_data['module_curriculum']);

          $module->setCreatedBy($session->get('user_id'));

          $em->persist($module);

          $em->flush();
          return $this->redirectToRoute('module_view');
        }

        return $this->render('module/form.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Create a Module.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/module/edit/{module_id}", name="module_edit")
     */
    public function moduleEditAction(Request $request, $module_id)
    {
      $data = [];
      $data['mode'] = 'edit';
      $data['form'] = [];
      $data['school'] = [];

      $form = $this ->createFormBuilder()
                    ->add('module_code')
                    ->add('module_name')
                    ->add('module_credit_hour')
                    ->add('module_duration')
                    ->add('module_school')
                    ->add('module_curriculum')
                    ->getForm();

      $module = $this->getDoctrine()
                          ->getRepository('AppBundle:Module')
                          ->findOneById($module_id);

      $curriculum = $this->getDoctrine()
                          ->getRepository('AppBundle:Curriculum')
                          ->findAll();

      $data['curriculums'] = $curriculum;

      $module_data['module_code'] = $module->getModuleCode();
      $module_data['module_name'] = $module->getModuleName();
      $module_data['module_credit_hour'] = $module->getModuleCreditHour();
      $module_data['module_duration'] = $module->getModuleDuration();
      $module_data['module_school'] = $module->getSchoolId();
      $module_data['module_curriculum'] = $module->getCurriculumId();
      $module_data['created_by'] = $module->getCreatedBy();

      $schools = $this->getDoctrine()
                          ->getRepository('AppBundle:School')
                          ->findAll();

      $data['schools'] = $schools;

      $session = new Session();

      if($session->get('user_name') && ($session->get('user_type') == 'admin') && ($session->get('user_id') == $module_data['created_by'])){
        $data['form'] = $module_data;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $data['form'] = [];
          $module_data = $form->getData();
          $data['form'] = $module_data;

          $module->setModuleCode($module_data['module_code']);
          $module->setModuleName($module_data['module_name']);
          $module->setModuleCreditHour($module_data['module_credit_hour']);
          $module->setModuleDuration($module_data['module_duration']);
          $module->setSchoolId($module_data['module_school']);
          $module->setCurriculumId($module_data['module_curriculum']);

          $em = $this->getDoctrine()->getManager();
          $em->persist($module);
          $em->flush();

          return $this->redirectToRoute('module_view');
        }
        return $this->render('module/form.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Edit This Module.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/module/delete/{module_id}", name="module_delete")
     */
    public function moduleDeleteAction(Request $request, $module_id)
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_id') && ($session->get('user_type') == 'admin')){
        $module = $this->getDoctrine()
                            ->getRepository('AppBundle:Module')
                            ->findOneById($module_id);

        $em = $this->getDoctrine()->getManager();

        $em->remove($module);
        $em->flush();

        return $this->redirectToRoute('module_view');
      } else {
        $data['message'] = 'You Are Not Qualified to Delete This Module.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/module/view", name="module_view")
     */
    public function moduleViewAction()
    {
      $session = new Session();

      if($session->get('user_id') && ($session->get('user_type') == 'admin' || $session->get('user_type') == 'teacher')){
        $data = [];
        $data['modules'] = [];

        $module = $this->getDoctrine()
                            ->getRepository('AppBundle:Module')
                            ->findAll();

        $data['modules'] = $module;

        $school = $this->getDoctrine()
                            ->getRepository('AppBundle:School')
                            ->findAll();

        $data['schools'] = $school;

        $curriculum = $this->getDoctrine()
                            ->getRepository('AppBundle:Curriculum')
                            ->findAll();

        $data['curriculums'] = $curriculum;

        return $this->render('module/view.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View Modules.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/module/view_one/{module_id}", name="module_view_one")
     */
    public function moduleViewOneAction(Request $request, $module_id)
    {
      $session = new Session();

      if($session->get('user_id') && ($session->get('user_type') == 'admin' || $session->get('user_type') == 'teacher')){
        $data = [];

        $module = $this->getDoctrine()
                            ->getRepository('AppBundle:Module')
                            ->findOneById($module_id);

        $module_school = $module->getSchoolId();

        $school = $this->getDoctrine()
                            ->getRepository('AppBundle:School')
                            ->findOneById($module_school);

        $data['school'] = $school;

        $data['module'] = $module;

        return $this->render('module/view_one.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View This Module.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }
}
