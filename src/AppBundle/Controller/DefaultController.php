<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="default_home")
     */
    public function indexAction()
    {
      return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function dashboardAction()
    {
      $session = new Session();
      if($session->get('user_name') && $session->get('user_type')){
        $data['si_user_name'] = ucwords($session->get('user_name'));
        $data['si_user_type'] = $session->get('user_type');

        return $this->render( $data['si_user_type'] . '/index.html.twig', $data);
      } else
        return $this->render('default/index.html.twig');
    }

    /**
     * @Route("/signin/", name="user_signin")
     */
    public function signinAction(Request $request)
    {
      $data = [];
      $data['form'] = [];

      $form = $this ->createFormBuilder()
                    ->add('user_name')
                    ->add('password')
                    ->getForm();

      $form->handleRequest($request);

      if($form->isSubmitted()){
        $form_data = $form->getData();
        $data['form'] = $form_data;

        $user_name = $form_data['user_name'];
        $password = $form_data['password'];

        $user = $this->getDoctrine()
                      ->getRepository('AppBundle:LogInTable')
                      ->findOneBy(
          array('userName' => $user_name, 'password' => $password)
        );

        if($user){
          $user_name_actl = $user->getUserName();
          $password_actl = $user->getPassword();
          $user_type_actl = $user->getUserType();

          $user_id_ary = $this->getDoctrine()
                        ->getRepository('AppBundle:' . ucfirst($user_type_actl))
                        ->findOneByUserName($user_name_actl);

          $user_id_actl = $user_id_ary->getId();

          $session = new Session();

          $session->remove('user_id');
          $session->remove('user_name');
          $session->remove('user_type');

          $session->set('user_id', $user_id_actl);
          $session->set('user_name', $user_name_actl);
          $session->set('user_type', $user_type_actl);

          return $this->redirect('/' . $user_type_actl);
        } else
          $data['result_message'] = 'Sign In Failed!';
      }

      return $this->render('default/signin.html.twig', $data);
    }

    /**
     * @Route("/signout/", name="user_signout")
     */
    public function signOutAction()
    {
      $session = new Session();
      $session->remove('user_name');
      $session->remove('user_type');

      return $this->redirect('/signin');
    }
}
