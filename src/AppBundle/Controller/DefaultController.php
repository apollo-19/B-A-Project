<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\JsonResponse;

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
     * @Route("/dashboard/visibility/{shide}/{gest}", name="dashboard_visibility")
     */
    public function dashboardVisibilityAction($shide, $gest)
    {
      $session = new Session();

      if( $gest == 'set' ){
        if( $shide == 'show' ){
          $session->set('shide', 'show');
        } else {
          $session->set('shide', 'hide');
        }
      }

      $shide_actl = $session->get('shide');
      return new JsonResponse($shide_actl);
    }

    /**
     * @Route("/signin/", name="user_signin")
     */
    public function signinAction(Request $request)
    {
      $data = [];

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
          array('userName' => $user_name, 'password' => md5($password))
        );

        if($user){
          $user_id_lit = $user->getId();
          $user_name_actl = $user->getUserName();
          $user_type_actl = $user->getUserType();

          $user_ary = $this->getDoctrine()
                              ->getRepository('AppBundle:' . ucfirst($user_type_actl))
                              ->findOneByUserName($user_name_actl);

          $user_id_actl = $user_ary->getId();

          $session = new Session();

          $session->remove('user_id_lit');
          $session->remove('user_id');
          $session->remove('user_name');
          $session->remove('user_type');
          $session->remove('user_photo');

          $session->set('user_id_lit', $user_id_lit);
          $session->set('user_id', $user_id_actl);
          $session->set('user_name', $user_name_actl);
          $session->set('user_type', $user_type_actl);
          $session->set('user_photo', $user_ary->getUserPhoto());
          $session->set('shide', 'hide');
          if($user_type_actl == 'admin') {
            $admin_class = $user_ary->getAdminClass();
            $session->remove('admin_class');
            $session->set('admin_class', $admin_class);
          }
          return $this->redirectToRoute('default_home');
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
      $session->remove('user_id_lit');
      $session->remove('user_id');
      $session->remove('user_name');
      $session->remove('user_type');
      $session->set('shide', 'hide');

      return $this->redirect('/signin');
    }

    /**
     * @Route("/settings/account/", name="account_settings")
     */
    public function accountSettingsAction(Request $request)
    {
      $data = [];
      $session = new Session();

      if($session->get('user_id')){

        $data['user_id_lit'] = $session->get('user_id_lit');
        $data['user_id'] = $session->get('user_id');
        $data['user_name'] = $session->get('user_name');
        $data['user_type'] = $session->get('user_type');

        $form = $this ->createFormBuilder()
                      ->add('user_name')
                      ->add('new_password')
                      ->add('confirm_new_password')
                      ->add('old_password')
                      ->getForm();

        $user_details = $this->getDoctrine()
                            ->getRepository('AppBundle:' . ucwords($data['user_type']))
                            ->findOneById($data['user_id']);

        $data['user_details'] = $user_details;

        $user_details_lit = $this->getDoctrine()
                            ->getRepository('AppBundle:LogInTable')
                            ->findOneById($data['user_id_lit']);

        $user_details_lit_data['user_name'] = $user_details_lit->getUserName();
        $user_details_lit_data['password'] = $user_details_lit->getPassword();

        $data['form'] = $user_details_lit_data;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $data['form'] = [];
          $user_details_lit_data = $form->getData();
          $data['form'] = $user_details_lit_data;

          if(md5($user_details_lit_data['old_password']) == $user_details_lit->getPassword()){
            if($user_details_lit_data['new_password'] == $user_details_lit_data['confirm_new_password']){
              if(!($user_details_lit_data['user_name'] == '')){
                $user_details_lit->setUserName($user_details_lit_data['user_name']);
                $user_details->setUserName($user_details_lit_data['user_name']);
              }

              if(!($user_details_lit_data['new_password'] == ''))
                $user_details_lit->setPassword(md5($user_details_lit_data['new_password']));

              $em = $this->getDoctrine()->getManager();
              $em->persist($user_details_lit);
              $em->persist($user_details);
              $em->flush();

              $session->remove('user_name');
              $session->set('user_name', $user_details_lit_data['user_name']);

              return $this->redirectToRoute('default_home');
            } else
              $data['result_message'] = 'New Passwords Don\'t Match.';
          } else
            $data['result_message'] = 'Wrong Old Password.';
        }

        return $this->render('default/account_settings.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Signed In.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }
}
