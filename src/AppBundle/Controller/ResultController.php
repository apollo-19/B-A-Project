<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\Result;

class ResultController extends Controller
{
    /**
     * @Route("/result", name="result_home")
     */
    public function indexAction()
    {
      $result = new Result();

      if($result->get('user_name') && $result->get('user_type')){
        return $this->render('result/index.html.twig', $data);
      } else
        return $this->redirectToRoute('user_signin');
    }

    /**
     * @Route("/result/delete/{result_id}", name="result_delete")
     */
    public function resultDeleteAction(Request $request, $result_id)
    {
      $result = new Result();

      if($result->get('user_name') && ($result->get('user_type') == 'admin')){
        $result = $this->getDoctrine()
                            ->getRepository('AppBundle:Result')
                            ->findOneById($result_id);

        $em = $this->getDoctrine()->getManager();

        $em->remove($result);
        $em->flush();

        return $this->redirectToRoute('result_view');
      } else {
        $data['message'] = 'You Are Not Qualified to Delete This Result.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/result/view", name="result_view")
     */
    public function resultViewAction()
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_type') && ($session->get('user_type') == 'admin')){
        $data = [];
        $data['results'] = [];

        $result = $this->getDoctrine()
                            ->getRepository('AppBundle:Result')
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
