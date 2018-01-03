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
   * @Route("/module/create", name="module_create")
   */
  public function moduleCreateAction(Request $request)
  {
    $session = new Session();

    if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
      $data = [];
      $data['mode'] = 'new';

      $form = $this ->createFormBuilder()
                    ->add('module_code')
                    ->add('module_name')
                    ->add('module_credit_hour')
                    ->add('module_duration')
                    ->add('module_curriculum')
                    ->getForm();

      $curriculum = $this->getDoctrine()
                          ->getRepository('AppBundle:Curriculum')
                          ->findAll();

      $data['curriculums'] = $curriculum;

      $form->handleRequest($request);

      if($form->isSubmitted()){
        $module_data = $form->getData();
        $data['form'] = $module_data;

        $mycurriculum = $this->getDoctrine()
                        ->getRepository('AppBundle:Curriculum')
                        ->findOneById($module_data['module_curriculum']);

        $em = $this->getDoctrine()->getManager();
        $module = new Module();
        $module->setModuleCode($module_data['module_code']);
        $module->setModuleName($module_data['module_name']);
        $module->setModuleCreditHour($module_data['module_credit_hour']);
        $module->setModuleDuration($module_data['module_duration']);
        $module->setCurriculumId($mycurriculum);

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

    $session = new Session();

    if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
    $form = $this ->createFormBuilder()
                  ->add('module_code')
                  ->add('module_name')
                  ->add('module_credit_hour')
                  ->add('module_duration')
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
    $module_data['module_curriculum'] = $module->getCurriculumId();
    $module_data['created_by'] = $module->getCreatedBy();

      $data['form'] = $module_data;

      $form->handleRequest($request);

      if($form->isSubmitted()){
        $data['form'] = [];
        $module_data = $form->getData();
        $data['form'] = $module_data;

        $mycurriculum = $this->getDoctrine()
                            ->getRepository('AppBundle:Curriculum')
                            ->findOneById($module_data['module_curriculum']);

        $module->setModuleCode($module_data['module_code']);
        $module->setModuleName($module_data['module_name']);
        $module->setModuleCreditHour($module_data['module_credit_hour']);
        $module->setModuleDuration($module_data['module_duration']);
        $module->setCurriculumId($mycurriculum);

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

    if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
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

    if($session->get('user_id')){
      $data = [];
      $data['modules'] = [];

      $module = $this->getDoctrine()
                          ->getRepository('AppBundle:Module')
                          ->findAll();

      $data['modules'] = $module;

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

    if($session->get('user_id')){
      $data = [];

      $module = $this->getDoctrine()
                          ->getRepository('AppBundle:Module')
                          ->findOneById($module_id);

      $data['module'] = $module;
      
      return $this->render('module/view_one.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to View This Module.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }
}
