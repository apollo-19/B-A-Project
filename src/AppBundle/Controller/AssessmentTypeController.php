<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\AssessmentType;

class AssessmentTypeController extends Controller
{
    /**
     * @Route("/assessment", name="assessment_home")
     */
    public function indexAction()
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_type')){
        return $this->render('assessment/index.html.twig', $data);
      } else
        return $this->redirectToRoute('user_signin');
    }

    /**
     * @Route("/assessment_type/create/{assessment_type_system_id}", name="assessment_type_create")
     */
    public function assessmentTypeCreateAction(Request $request, $assessment_type_system_id)
    {
      $session = new Session();

      if($session->get('user_id') && ($session->get('user_type') == 'admin')){
        $data = [];
        $data['mode'] = 'new';

        $form = $this ->createFormBuilder()
                      ->add('assessment_name')
                      ->add('assessment_worth')
                      ->getForm();

        $assessment_type_system = $this->getDoctrine()
                            ->getRepository('AppBundle:AssessmentTypeSystem')
                            ->findOneById($assessment_type_system_id);

        $data['assessment_type_system'] = $assessment_type_system;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $data['form'] = [];
          $assessment_type_data = $form->getData();
          $data['form'] = $assessment_type_data;

          $assessment_type = new AssessmentType();
          $assessment_type->setAssessmentName($assessment_type_data['assessment_name']);
          $assessment_type->setAssessmentWorth($assessment_type_data['assessment_worth']);
          $assessment_type->setAssessmentTypeSystemId($assessment_type_system_id);

          $assessment_type->setCreatedBy($session->get('user_id'));

          $em = $this->getDoctrine()->getManager();
          $em->persist($assessment_type);
          $em->flush();

          return $this->redirect($this->generateUrl('assessment_type_view', array('assessment_type_system_id' => $assessment_type_system_id)));
        }

        return $this->render('assessment/type_form.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Create an Assessment Type.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/assessment_type/edit/{assessment_type_id}", name="assessment_type_edit")
     */
    public function assessmentTypeEditAction(Request $request, $assessment_type_id)
    {
      $data = [];
      $data['mode'] = 'edit';

      $form = $this ->createFormBuilder()
                    ->add('assessment_name')
                    ->add('assessment_worth')
                    ->add('assessment_type_system')
                    ->getForm();

      $assessment_type_system = $this->getDoctrine()
                          ->getRepository('AppBundle:AssessmentTypeSystem')
                          ->findAll();

      $data['assessment_type_systems'] = $assessment_type_system;

      $assessment_type = $this->getDoctrine()
                          ->getRepository('AppBundle:AssessmentType')
                          ->findOneById($assessment_type_id);

      $assessment_type_data['assessment_name'] = $assessment_type->getAssessmentName();
      $assessment_type_data['assessment_worth'] = $assessment_type->getAssessmentWorth();
      $assessment_type_data['assessment_type_system'] = $assessment_type->getAssessmentTypeSystemId();

      $session = new Session();

      if($session->get('user_name') && ($session->get('user_type') == 'admin')){
        $data['form'] = $assessment_type_data;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $data['form'] = [];
          $assessment_type_data = $form->getData();
          $data['form'] = $assessment_type_data;

          $assessment_type->setAssessmentName($assessment_type_data['assessment_name']);
          $assessment_type->setAssessmentWorth($assessment_type_data['assessment_worth']);
          $assessment_type->setAssessmentTypeSystemId($assessment_type_data['assessment_type_system']);

          $em = $this->getDoctrine()->getManager();
          $em->persist($assessment_type);
          $em->flush();

          return $this->redirect($this->generateUrl('assessment_type_view', array('assessment_type_system_id' => $assessment_type_data['assessment_type_system'])));
        }
        return $this->render('assessment/type_form.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Edit This Assessment Type.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/assessment_type/delete/{assessment_type_id}", name="assessment_type_delete")
     */
    public function assessmentTypeDeleteAction(Request $request, $assessment_type_id)
    {
      $session = new Session();

      if($session->get('user_name') && ($session->get('user_type') == 'admin')){
        $assessment_type = $this->getDoctrine()
                            ->getRepository('AppBundle:AssessmentType')
                            ->findOneById($assessment_type_id);

        $em = $this->getDoctrine()->getManager();

        $em->remove($assessment_type);
        $em->flush();

        return $this->redirectToRoute('assessment_type_view');
      } else {
        $data['message'] = 'You Are Not Qualified to Delete This Assessment Type.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/assessment_type/view/{assessment_type_system_id}", name="assessment_type_view")
     */
    public function assessmentTypeViewAction($assessment_type_system_id)
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_type') && ($session->get('user_type') == 'admin')){
        $data = [];

        $assessment_type = $this->getDoctrine()
                            ->getRepository('AppBundle:AssessmentType')
                            ->findBy(
                              array('assessmentTypeSystemId' => $assessment_type_system_id)
                            );

        $data['assessment_types'] = $assessment_type;

        $assessment_type_system = $this->getDoctrine()
                            ->getRepository('AppBundle:AssessmentTypeSystem')
                            ->findOneById($assessment_type_system_id);

        $data['assessment_type_system'] = $assessment_type_system;

        return $this->render('assessment/type_view.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View Assessment Types.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }
}
