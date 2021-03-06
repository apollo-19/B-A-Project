<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\AssessmentSession;

class AssessmentSessionController extends Controller
{
    /**
     * @Route("/assessment_session/create/{school_session_id}", name="assessment_session_create")
     */
    public function assessmentSessionCreateAction(Request $request, $school_session_id)
    {
      $session = new Session();

      if($session->get('user_id') && ($session->get('user_type') == 'admin')){
        $data = [];
        $data['mode'] = 'new';

        $form = $this ->createFormBuilder()
                      ->add('assessment_id')
                      ->add('assessment_session')
                      ->getForm();

        $assessment_session = $this->getDoctrine()
                            ->getRepository('AppBundle:Schoolsession')
                            ->findOneById($school_session_id);

        $data['school_session'] = $assessment_session;

        $assessment_type = $this->getDoctrine()
                            ->getRepository('AppBundle:AssessmentTypeSystem')
                            ->findAll();

        $data['assessment_types'] = $assessment_type;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $data['form'] = [];
          $assessment_session_data = $form->getData();
          $data['form'] = $assessment_session_data;

          $assessment_session = new Assessmentsession();
          $assessment_session->setAssessmentId($assessment_session_data['assessment_id']);
          $assessment_session->setAssessmentSession($school_session_id);

          $assessment_session->setCreatedBy($session->get('user_id'));

          $em = $this->getDoctrine()->getManager();
          $em->persist($assessment_session);
          $em->flush();

          return $this->redirectToRoute('session_view');
        }

        return $this->render('assessment/session_form.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Create an Assessment Session.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/assessment_session/edit/{assessment_session_id}", name="assessment_session_edit")
     */
    public function assessmentSessionEditAction(Request $request, $assessment_session_id)
    {
      $data = [];
      $data['mode'] = 'edit';

      $form = $this ->createFormBuilder()
                    ->add('assessment_id')
                    ->add('assessment_session')
                    ->getForm();

      $assessment_session = $this->getDoctrine()
                          ->getRepository('AppBundle:AssessmentSession')
                          ->findOneById($assessment_session_id);

      $assessment_session_data['assessment_id'] = $assessment_session->getAssessmentId();
      $assessment_session_data['assessment_session'] = $assessment_session->getAssessmentSession();

      $session = new Session();

      if($session->get('user_name') && ($session->get('user_type') == 'admin')){
        $data['form'] = $assessment_session_data;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $data['form'] = [];
          $assessment_session_data = $form->getData();
          $data['form'] = $assessment_session_data;

          $assessment_session->setAssessmentId($assessment_session_data['assessment_id']);
          $assessment_session->setAssessmentSession($assessment_session_data['assessment_session']);

          $em = $this->getDoctrine()->getManager();
          $em->persist($assessment_session);
          $em->flush();

          return $this->redirectToRoute('assessment_session_view');
        }
        return $this->render('assessment/session_form.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Edit This Assessment Session.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/assessment_session/delete/{assessment_session_id}", name="assessment_session_delete")
     */
    public function assessmentSessionDeleteAction(Request $request, $assessment_session_id)
    {
      $session = new Session();

      if($session->get('user_name') && ($session->get('user_type') == 'admin')){
        $assessment_session = $this->getDoctrine()
                            ->getRepository('AppBundle:AssessmentSession')
                            ->findOneById($assessment_session_id);

        $em = $this->getDoctrine()->getManager();

        $em->remove($assessment_session);
        $em->flush();

        return $this->redirectToRoute('assessment_session_view');
      } else {
        $data['message'] = 'You Are Not Qualified to Delete This Assessment Session.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/assessment_session/view", name="assessment_session_view")
     */
    public function assessmentSessionViewAction()
    {
      $session = new Session();

      if($session->get('user_name') && ($session->get('user_type') == 'admin')){
        $data = [];

        $assessment_session = $this->getDoctrine()
                            ->getRepository('AppBundle:AssessmentSession')
                            ->findAll();

        $data['assessment_sessions'] = $assessment_session;

        return $this->render('assessment/session_view.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View Assessment Sessions.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }
}
