<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\Curriculum;

class CurriculumController extends Controller
{
    /**
     * @Route("/curriculum", name="curriculum_home")
     */
    public function indexAction()
    {
        return $this->render('curriculum/index.html.twig');
    }

    /**
     * @Route("/curriculum/create", name="curriculum_create")
     */
    public function curriculumCreateAction(Request $request)
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_type') && ($session->get('user_type') == 'admin')){
        $data = [];
        $data['mode'] = 'new';
        $data['form'] = [];
        $data['school'] = [];

        $form = $this ->createFormBuilder()
                      ->add('curriculum_code')
                      ->add('curriculum_name')
                      ->add('curriculum_school')
                      ->getForm();

        $school = $this->getDoctrine()
                            ->getRepository('AppBundle:School')
                            ->findAll();

        $data['schools'] = $school;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $form_data = $form->getData();
          $data['form'] = $form_data;

          $em = $this->getDoctrine()->getManager();
          $curriculum = new Curriculum();
          $curriculum->setCurriculumCode($form_data['curriculum_code']);
          $curriculum->setCurriculumName($form_data['curriculum_name']);
          $curriculum->setSchoolId($form_data['curriculum_school']);

          $curriculum->setCreatedBy($session->get('user_id'));

          $em->persist($curriculum);

          $em->flush();
          return $this->redirectToRoute('curriculum_view');
        }

        return $this->render('curriculum/form.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Create a Curriculum.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/curriculum/edit/{curriculum_id}", name="curriculum_edit")
     */
    public function curriculumEditAction(Request $request, $curriculum_id)
    {
      $data = [];
      $data['mode'] = 'edit';
      $data['form'] = [];
      $data['school'] = [];

      $form = $this ->createFormBuilder()
                    ->add('curriculum_code')
                    ->add('curriculum_name')
                    ->add('curriculum_school')
                    ->getForm();

      $curriculum = $this->getDoctrine()
                          ->getRepository('AppBundle:Curriculum')
                          ->findOneById($curriculum_id);

      $curriculum_data['curriculum_code'] = $curriculum->getCurriculumCode();
      $curriculum_data['curriculum_name'] = $curriculum->getCurriculumName();
      $curriculum_data['curriculum_school'] = $curriculum->getSchoolId();
      $curriculum_data['created_by'] = $curriculum->getCreatedBy();

      $schools = $this->getDoctrine()
                          ->getRepository('AppBundle:School')
                          ->findAll();

      $data['schools'] = $schools;

      $school = $this->getDoctrine()
                          ->getRepository('AppBundle:School')
                          ->findOneById($curriculum_data['curriculum_school']);

      $data['mySchool'] = $school;

      $session = new Session();

      if($session->get('user_name') && ($session->get('user_type') == 'admin') && ($session->get('user_id') == $curriculum_data['created_by'])){
        $data['form'] = $curriculum_data;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $data['form'] = [];
          $curriculum_data = $form->getData();
          $data['form'] = $curriculum_data;

          $curriculum->setCurriculumCode($curriculum_data['curriculum_code']);
          $curriculum->setCurriculumName($curriculum_data['curriculum_name']);
          $curriculum->setSchoolId($curriculum_data['curriculum_school']);

          $em = $this->getDoctrine()->getManager();
          $em->persist($curriculum);
          $em->flush();

          return $this->redirectToRoute('curriculum_view');
        }
        return $this->render('curriculum/form.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Edit This Curriculum.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/curriculum/delete/{curriculum_id}", name="curriculum_delete")
     */
    public function curriculumDeleteAction(Request $request, $curriculum_id)
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_id') && ($session->get('user_type') == 'admin')){
        $curriculum = $this->getDoctrine()
                            ->getRepository('AppBundle:Curriculum')
                            ->findOneById($curriculum_id);

        $em = $this->getDoctrine()->getManager();

        $em->remove($curriculum);
        $em->flush();

        return $this->redirectToRoute('curriculum_view');
      } else {
        $data['message'] = 'You Are Not Qualified to Delete This Curriculum.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/curriculum/view", name="curriculum_view")
     */
    public function curriculumViewAction()
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_id') && ($session->get('user_type') == 'admin')){
        $data = [];
        $data['curriculums'] = [];

        $curriculum = $this->getDoctrine()
                            ->getRepository('AppBundle:Curriculum')
                            ->findAll();

        $data['curriculums'] = $curriculum;

        $school = $this->getDoctrine()
                            ->getRepository('AppBundle:School')
                            ->findAll();

        $data['schools'] = $school;

        return $this->render('curriculum/view.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View Curriculums.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/curriculum/view_one/{curriculum_id}", name="curriculum_view_one")
     */
    public function curriculumViewOneAction(Request $request, $curriculum_id)
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_id') && ($session->get('user_type') == 'admin')){
        $data = [];

        $curriculum = $this->getDoctrine()
                            ->getRepository('AppBundle:Curriculum')
                            ->findOneById($curriculum_id);

        $school = $this->getDoctrine()
                            ->getRepository('AppBundle:School')
                            ->findOneById($curriculum->getSchoolId());

        $data['school'] = $school;

        $data['curriculum'] = $curriculum;

        return $this->render('curriculum/view_one.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View This Curriculum.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }
}
