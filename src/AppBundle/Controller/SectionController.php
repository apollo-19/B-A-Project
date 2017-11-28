<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\Section;

class SectionController extends Controller
{
    /**
     * @Route("/section", name="section_home")
     */
    public function indexAction()
    {
      return $this->render('section/index.html.twig');
    }

    /**
     * @Route("/section/create", name="section_create")
     */
    public function sectionCreateAction(Request $request)
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_type') && ($session->get('user_type') == 'admin')){
        $data = [];
        $data['mode'] = 'new';
        $data['form'] = [];

        $form = $this ->createFormBuilder()
                      ->add('section_code')
                      ->add('section_name')
                      ->add('section_batch')
                      ->getForm();

        $batch = $this->getDoctrine()
                            ->getRepository('AppBundle:Batch')
                            ->findAll();

        $data['batches'] = $batch;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $form_data = $form->getData();
          $data['form'] = $form_data;

          $em = $this->getDoctrine()->getManager();
          $section = new Section();
          $section->setSectionCode($form_data['section_code']);
          $section->setSectionName($form_data['section_name']);
          $section->setBatchId($form_data['section_batch']);
          $section->setCreatedBy($session->get('user_id'));

          $em->persist($section);

          $em->flush();
          return $this->redirectToRoute('section_view');
        }

        return $this->render('section/form.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Hire a Section.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/section/edit/{section_id}", name="section_edit")
     */
    public function sectionEditAction(Request $request, $section_id)
    {
      $data = [];
      $data['mode'] = 'edit';
      $data['form'] = [];
      $data['batch'] = [];

      $form = $this ->createFormBuilder()
                    ->add('section_code')
                    ->add('section_name')
                    ->add('section_batch')
                    ->getForm();

      $section = $this->getDoctrine()
                          ->getRepository('AppBundle:Section')
                          ->findOneById($section_id);

      $section_data['section_code'] = $section->getSectionCode();
      $section_data['section_name'] = $section->getSectionName();
      $section_data['section_batch'] = $section->getBatchId();

      $section_data['created_by'] = $section->getCreatedBy();

      $batches = $this->getDoctrine()
                          ->getRepository('AppBundle:Batch')
                          ->findAll();

      $data['batches'] = $batches;

      $batch = $this->getDoctrine()
                          ->getRepository('AppBundle:Batch')
                          ->findOneById($section_data['section_batch']);

      $data['myBatch'] = $batch;

      $session = new Session();

      if($session->get('user_name') && ($session->get('user_type') == 'admin') && ($session->get('user_id') == $section_data['created_by'])){
        $data['form'] = $section_data;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $data['form'] = [];
          $section_data = $form->getData();
          $data['form'] = $section_data;

          $section->setSectionCode($section_data['section_code']);
          $section->setSectionName($section_data['section_name']);
          $section->setbatchId($section_data['section_batch']);

          $em = $this->getDoctrine()->getManager();
          $em->persist($section);
          $em->flush();

          return $this->redirectToRoute('section_view');
        }
        return $this->render('section/form.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Edit This Section.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/section/delete/{section_id}", name="section_delete")
     */
    public function sectionDeleteAction(Request $request, $section_id)
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_id') && ($session->get('user_type') == 'admin')){
        $section = $this->getDoctrine()
                            ->getRepository('AppBundle:Section')
                            ->findOneById($section_id);

        $em = $this->getDoctrine()->getManager();

        $em->remove($section);
        $em->flush();

        return $this->redirectToRoute('section_view');
      } else {
        $data['message'] = 'You Are Not Qualified to Delete This Section.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/section/view", name="section_view")
     */
    public function sectionViewAction()
    {
      $session = new Session();

      if($session->get('user_id') && ($session->get('user_type') == 'admin' || $session->get('user_type') == 'teacher')){
        $data = [];
        $data['sections'] = [];

        $section = $this->getDoctrine()
                            ->getRepository('AppBundle:Section')
                            ->findAll();

        $data['sections'] = $section;

        $batch = $this->getDoctrine()
                            ->getRepository('AppBundle:Batch')
                            ->findAll();

        $data['batches'] = $batch;

        return $this->render('section/view.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View Sections.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/section/view_one/{section_id}", name="section_view_one")
     */
    public function sectionViewOneAction(Request $request, $section_id)
    {
      $session = new Session();

      if($session->get('user_id') && ($session->get('user_type') == 'admin' || $session->get('user_type') == 'teacher')){
        $data = [];
        $data['sections'] = [];

        $section = $this->getDoctrine()
                            ->getRepository('AppBundle:Section')
                            ->findOneById($section_id);

        $section_batch = $section->getBatchId();

        $batch = $this->getDoctrine()
                            ->getRepository('AppBundle:Batch')
                            ->findOneById($section_batch);

        $data['section'] = $section;

        $data['batch'] = $batch;

        return $this->render('section/view_one.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View This Section.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }
}
