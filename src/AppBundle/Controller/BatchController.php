<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\Batch;

class BatchController extends Controller
{
  /**
   * @Route("/batch/create", name="batch_create")
   */
  public function batchCreateAction(Request $request)
  {
    $session = new Session();

    if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
      $data = [];
      $data['mode'] = 'new';
      $data['form'] = [];

      $form = $this ->createFormBuilder()
                    ->add('batch_code')
                    ->add('batch_name')
                    ->add('batch_year')
                    ->add('batch_school')
                    ->getForm();

      $school = $this->getDoctrine()
                          ->getRepository('AppBundle:School')
                          ->findAll();

      $data['schools'] = $school;

      $form->handleRequest($request);

      if($form->isSubmitted()){
        $form_data = $form->getData();
        $data['form'] = $form_data;
        $myschool = $this->getDoctrine()
                         ->getRepository('AppBundle:School')
                         ->findOneById($form_data['batch_school']);

        $em = $this->getDoctrine()->getManager();
        $batch = new Batch();
        $batch->setBatchCode($form_data['batch_code']);
        $batch->setBatchName($form_data['batch_name']);
        $batch->setBatchYear($form_data['batch_year']);
        $batch->setSchoolId($myschool);
        $batch->setCreatedBy($session->get('user_id'));

        $em->persist($batch);

        $em->flush();
        return $this->redirectToRoute('batch_view');
      }

      return $this->render('batch/form.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to Hire a Batch.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/batch/edit/{batch_id}", name="batch_edit")
   */
  public function batchEditAction(Request $request, $batch_id)
  {
    $data = [];
    $data['mode'] = 'edit';
    $data['form'] = [];
    $data['school'] = [];

    $session = new Session();

    if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
      $form = $this ->createFormBuilder()
                    ->add('batch_code')
                    ->add('batch_name')
                    ->add('batch_year')
                    ->add('batch_school')
                    ->getForm();

      $batch = $this->getDoctrine()
                          ->getRepository('AppBundle:Batch')
                          ->findOneById($batch_id);

      $batch_data['batch_code'] = $batch->getBatchCode();
      $batch_data['batch_name'] = $batch->getBatchName();
      $batch_data['batch_year'] = $batch->getBatchYear();
      $batch_data['batch_school'] = $batch->getSchoolId();
      $batch_data['created_by'] = $batch->getCreatedBy();

      $schools = $this->getDoctrine()
                          ->getRepository('AppBundle:School')
                          ->findAll();

      $data['schools'] = $schools;

      $data['form'] = $batch_data;

      $form->handleRequest($request);

      if($form->isSubmitted()){
        $data['form'] = [];
        $batch_data = $form->getData();
        $data['form'] = $batch_data;
        $myschool = $this->getDoctrine()
                          ->getRepository('AppBundle:School')
                          ->findOneById($batch_data['batch_school']);

        $batch->setBatchCode($batch_data['batch_code']);
        $batch->setBatchName($batch_data['batch_name']);
        $batch->setBatchYear($batch_data['batch_year']);
        $batch->setSchoolId($myschool);

        $em = $this->getDoctrine()->getManager();
        $em->persist($batch);
        $em->flush();

        return $this->redirectToRoute('batch_view');
      }
      return $this->render('batch/form.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to Edit This Batch.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/batch/delete/{batch_id}", name="batch_delete")
   */
  public function batchDeleteAction(Request $request, $batch_id)
  {
    $session = new Session();

    if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
      $batch = $this->getDoctrine()
                          ->getRepository('AppBundle:Batch')
                          ->findOneById($batch_id);

      $em = $this->getDoctrine()->getManager();

      $em->remove($batch);
      $em->flush();

      return $this->redirectToRoute('batch_view');
    } else {
      $data['message'] = 'You Are Not Qualified to Delete This Batch.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/batch/view", name="batch_view")
   */
  public function batchViewAction()
  {
    $session = new Session();

    if($session->get('user_id')){
      $data = [];
      $data['batchs'] = [];

      $batch = $this->getDoctrine()
                          ->getRepository('AppBundle:Batch')
                          ->findAll();

      $data['batchs'] = $batch;

      $school = $this->getDoctrine()
                          ->getRepository('AppBundle:School')
                          ->findAll();

      $data['schools'] = $school;

      return $this->render('batch/view.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to View Batches.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/batch/view_one/{batch_id}", name="batch_view_one")
   */
  public function batchViewOneAction(Request $request, $batch_id)
  {
    $session = new Session();

    if($session->get('user_id')){
      $data = [];
      $data['batchs'] = [];

      $batch = $this->getDoctrine()
                          ->getRepository('AppBundle:Batch')
                          ->findOneById($batch_id);

      $batch_school = $batch->getSchoolId();

      $school = $this->getDoctrine()
                          ->getRepository('AppBundle:School')
                          ->findOneById($batch_school);

      $data['batch'] = $batch;

      $data['school'] = $school;

      return $this->render('batch/view_one.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to View This Batch.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }
}
