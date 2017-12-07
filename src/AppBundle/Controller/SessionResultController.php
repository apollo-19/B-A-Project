<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\SessionResult;

class SessionResultController extends Controller
{
    /**
     * @Route("/session_result", name="session_result_home")
     */
    public function indexAction()
    {
      $session_result = new SessionResult();

      if($session_result->get('user_name') && $session_result->get('user_type')){
        return $this->render('assessment/session_result_index.html.twig', $data);
      } else
        return $this->redirectToRoute('user_signin');
    }

    /**
     * @Route("/session_result/delete/{session_result_id}", name="session_result_delete")
     */
    public function resultDeleteAction(Request $request, $session_result_id)
    {
      $session = new Session();

      if($session->get('user_name') && ($session->get('user_type') == 'admin')){
        $session_result = $this->getDoctrine()
                            ->getRepository('AppBundle:SessionResult')
                            ->findOneById($session_result_id);

        $em = $this->getDoctrine()->getManager();

        $em->remove($session_result);
        $em->flush();

        return $this->redirectToRoute('session_result_view');
      } else {
        $data['message'] = 'You Are Not Qualified to Delete This Session Result.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/session_result/view", name="session_result_view")
     */
    public function sessionResultViewAction()
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_type') && ($session->get('user_type') == 'admin')){
        $data = [];
        $data['results'] = [];

        $result = $this->getDoctrine()
                            ->getRepository('AppBundle:SessionResult')
                            ->findAll();

        $data['results'] = $result;

        $session = $this->getDoctrine()
                            ->getRepository('AppBundle:Schoolsession')
                            ->findAll();

        $data['school_sessions'] = $session;

        $student = $this->getDoctrine()
                            ->getRepository('AppBundle:Student')
                            ->findAll();

        $data['students'] = $student;

        return $this->render('result/view.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View Results.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }
}
