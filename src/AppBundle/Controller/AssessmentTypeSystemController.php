<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\AssessmentTypeSystem;

class AssessmentTypeSystemController extends Controller
{
  /**
   * @Route("/assessment_type_system/create", name="assessment_type_system_create")
   */
  public function AssessmentTypeSystemCreateAction(Request $request)
  {
    $session = new Session();

    if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
      $data = [];
      $data['mode'] = 'new';

      $form = $this ->createFormBuilder()
                    ->add('assessment_type_system_code')
                    ->add('assessment_type_system_name')
                    ->getForm();

      $form->handleRequest($request);

      if($form->isSubmitted()){
        $data['form'] = [];
        $assessment_type_system_data = $form->getData();
        $data['form'] = $assessment_type_system_data;

        $assessment_type_system = new AssessmentTypeSystem();
        $assessment_type_system->setAssessmentTypeSystemCode($assessment_type_system_data['assessment_type_system_code']);
        $assessment_type_system->setAssessmentTypeSystemName($assessment_type_system_data['assessment_type_system_name']);

        $assessment_type_system->setCreatedBy($session->get('user_id'));

        $em = $this->getDoctrine()->getManager();
        $em->persist($assessment_type_system);
        $em->flush();

        return $this->redirectToRoute('assessment_type_system_view');
      }

      return $this->render('assessment/type_system_form.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to Create an Assessment Type.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/assessment_type_system/edit/{assessment_type_system_id}", name="assessment_type_system_edit")
   */
  public function AssessmentTypeSystemEditAction(Request $request, $assessment_type_system_id)
  {
    $data = [];
    $data['mode'] = 'edit';

    $session = new Session();

    if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
    $form = $this ->createFormBuilder()
                  ->add('assessment_type_system_code')
                  ->add('assessment_type_system_name')
                  ->getForm();

    $assessment_type_system = $this->getDoctrine()
                        ->getRepository('AppBundle:AssessmentTypeSystem')
                        ->findOneById($assessment_type_system_id);

    $assessment_type_system_data['assessment_type_system_code'] = $assessment_type_system->getAssessmentTypeSystemCode();
    $assessment_type_system_data['assessment_type_system_name'] = $assessment_type_system->getAssessmentTypeSystemName();

      $data['form'] = $assessment_type_system_data;

      $form->handleRequest($request);

      if($form->isSubmitted()){
        $data['form'] = [];
        $assessment_type_system_data = $form->getData();
        $data['form'] = $assessment_type_system_data;

        $assessment_type_system->setAssessmentTypeSystemCode($assessment_type_system_data['assessment_type_system_code']);
        $assessment_type_system->setAssessmentTypeSystemName($assessment_type_system_data['assessment_type_system_name']);

        $em = $this->getDoctrine()->getManager();
        $em->persist($assessment_type_system);
        $em->flush();

        return $this->redirectToRoute('assessment_type_system_view');
      }
      return $this->render('assessment/type_system_form.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to Edit This Assessment Type.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/assessment_type_system/delete/{assessment_type_system_id}", name="assessment_type_system_delete")
   */
  public function AssessmentTypeSystemDeleteAction(Request $request, $assessment_type_system_id)
  {
    $session = new Session();

    if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
      $assessment_type_system = $this->getDoctrine()
                          ->getRepository('AppBundle:AssessmentTypeSystem')
                          ->findOneById($assessment_type_system_id);

      $em = $this->getDoctrine()->getManager();

      $em->remove($assessment_type_system);
      $em->flush();

      return $this->redirectToRoute('assessment_type_system_view');
    } else {
      $data['message'] = 'You Are Not Qualified to Delete This Assessment Type.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/assessment_type_system/view", name="assessment_type_system_view")
   */
  public function AssessmentTypeSystemViewAction()
  {
    $session = new Session();

    if( ($session->get('user_type') == 'admin') ){
      $data = [];

      $assessment_type_system = $this->getDoctrine()
                          ->getRepository('AppBundle:AssessmentTypeSystem')
                          ->findAll();

      $data['assessment_type_systems'] = $assessment_type_system;

      return $this->render('assessment/type_system_view.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to View Assessment Types.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }
}
