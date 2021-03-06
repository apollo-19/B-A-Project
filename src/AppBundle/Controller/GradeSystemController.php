<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\GradeSystem;

class GradeSystemController extends Controller
{
  /**
   * @Route("/grade_system/create/", name="grade_system_create")
   */
  public function gradeSystemCreateAction(Request $request)
  {
    $session = new Session();

    if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
      $data = [];
      $data['mode'] = 'new';

      $form = $this ->createFormBuilder()
                    ->add('grade_system_code')
                    ->add('grade_system_name')
                    ->getForm();

      $form->handleRequest($request);

      if($form->isSubmitted()){
        $data['form'] = [];
        $grade_system_data = $form->getData();
        $data['form'] = $grade_system_data;

        $grade_system = new GradeSystem();
        $grade_system->setGradeSystemCode($grade_system_data['grade_system_code']);
        $grade_system->setGradeSystemName($grade_system_data['grade_system_name']);

        $grade_system->setCreatedBy($session->get('user_id'));

        $em = $this->getDoctrine()->getManager();
        $em->persist($grade_system);
        $em->flush();

        return $this->redirect($this->generateUrl('grade_system_view'));
      }

      return $this->render('grade_system/form.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to Create an Grade System.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/grade_system/edit/{grade_system_id}", name="grade_system_edit")
   */
  public function gradeSystemEditAction(Request $request, $grade_system_id)
  {
    $data = [];
    $data['mode'] = 'edit';

    $session = new Session();

    if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
      $form = $this ->createFormBuilder()
                    ->add('grade_system_code')
                    ->add('grade_system_name')
                    ->getForm();

      $grade_system = $this->getDoctrine()
                          ->getRepository('AppBundle:GradeSystem')
                          ->findOneById($grade_system_id);

      $data['grade_system'] = $grade_system;

      $grade_system_data['grade_system_code'] = $grade_system->getGradeSystemCode();
      $grade_system_data['grade_system_name'] = $grade_system->getGradeSystemName();

      $data['form'] = $grade_system_data;

      $form->handleRequest($request);

      if($form->isSubmitted()){
        $data['form'] = [];
        $grade_system_data = $form->getData();
        $data['form'] = $grade_system_data;

        $grade_system->setGradeSystemCode($grade_system_data['grade_system_code']);
        $grade_system->setGradeSystemName($grade_system_data['grade_system_name']);

        $em = $this->getDoctrine()->getManager();
        $em->persist($grade_system);
        $em->flush();

        return $this->redirect($this->generateUrl('grade_system_view'));
      }
      return $this->render('grade_system/form.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to Edit This Assessment Result.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/grade_system/delete/{grade_system_id}", name="grade_system_delete")
   */
  public function assessmentTypeDeleteAction(Request $request, $grade_system_id)
  {
    $session = new Session();

    if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
      $grade_system = $this->getDoctrine()
                          ->getRepository('AppBundle:GradeSystem')
                          ->findOneById($grade_system_id);

      $em = $this->getDoctrine()->getManager();

      $em->remove($grade_system);

      $em->flush();

      return $this->redirectToRoute('grade_system_view');
    } else {
      $data['message'] = 'You Are Not Qualified to Delete This Assessment Type.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/grade_system/view", name="grade_system_view")
   */
  public function assessmentTypeViewAction(Request $request)
  {
    $session = new Session();

    if(($session->get('user_type') == 'admin') || ($session->get('user_type') == 'teacher')){
      $grade_system = $this->getDoctrine()
                          ->getRepository('AppBundle:GradeSystem')
                          ->findAll();

      $data['grade_systems'] = $grade_system;

      return $this->render('grade_system/view.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to View Grade Systems.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }
}
