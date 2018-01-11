<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\GPASystem;

class GPASystemController extends Controller
{
  /**
   * @Route("/gpa_system/create/", name="gpa_system_create")
   */
  public function createAction(Request $request)
  {
    $session = new Session();

    if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
      $data = [];
      $data['mode'] = 'new';

      $form = $this ->createFormBuilder()
                    ->add('gpa_system_code')
                    ->add('gpa_system_name')
                    ->getForm();

      $form->handleRequest($request);

      if($form->isSubmitted()){
        $data['form'] = [];
        $gpa_system_data = $form->getData();
        $data['form'] = $gpa_system_data;

        $gpa_system = new GPASystem();
        $gpa_system->setGpaSystemCode($gpa_system_data['gpa_system_code']);
        $gpa_system->setGpaSystemName($gpa_system_data['gpa_system_name']);

        $gpa_system->setCreatedBy($session->get('user_id'));

        $em = $this->getDoctrine()->getManager();
        $em->persist($gpa_system);
        $em->flush();

        return $this->redirectToRoute('gpa_system_view');
      }

      return $this->render('gpa_system/form.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to Create an GPA System.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/gpa_system/edit/{gpa_system_id}", name="gpa_system_edit")
   */
  public function editAction(Request $request, $gpa_system_id)
  {
    $data = [];
    $data['mode'] = 'edit';

    $session = new Session();

    if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
      $form = $this ->createFormBuilder()
                    ->add('gpa_system_code')
                    ->add('gpa_system_name')
                    ->getForm();

      $gpa_system = $this->getDoctrine()
                          ->getRepository('AppBundle:GPASystem')
                          ->findOneById($gpa_system_id);

      $data['gpa_system'] = $gpa_system;

      $gpa_system_data['gpa_system_code'] = $gpa_system->getGpaSystemCode();
      $gpa_system_data['gpa_system_name'] = $gpa_system->getGpaSystemName();

      $data['form'] = $gpa_system_data;

      $form->handleRequest($request);

      if($form->isSubmitted()){
        $data['form'] = [];
        $gpa_system_data = $form->getData();
        $data['form'] = $gpa_system_data;

        $gpa_system->setGpaSystemCode($gpa_system_data['gpa_system_code']);
        $gpa_system->setGpaSystemName($gpa_system_data['gpa_system_name']);

        $em = $this->getDoctrine()->getManager();
        $em->persist($gpa_system);
        $em->flush();

        return $this->redirect($this->generateUrl('gpa_system_view'));
      }
      return $this->render('gpa_system/form.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to Edit This GPA System.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/gpa_system/delete/{gpa_system_id}", name="gpa_system_delete")
   */
  public function deleteAction(Request $request, $gpa_system_id)
  {
    $session = new Session();

    if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
      $gpa_system = $this->getDoctrine()
                          ->getRepository('AppBundle:GPASystem')
                          ->findOneById($gpa_system_id);

      $em = $this->getDoctrine()->getManager();

      $em->remove($gpa_system);

      $em->flush();

      return $this->redirectToRoute('gpa_system_view');
    } else {
      $data['message'] = 'You Are Not Qualified to Delete This Assessment Type.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/gpa_system/view", name="gpa_system_view")
   */
  public function viewAction(Request $request)
  {
    $session = new Session();

    if(($session->get('user_type') == 'admin') || ($session->get('user_type') == 'teacher')){
      $gpa_system = $this->getDoctrine()
                          ->getRepository('AppBundle:GPASystem')
                          ->findAll();

      $data['gpa_systems'] = $gpa_system;

      return $this->render('gpa_system/view.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to View GPA Systems.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }
}
