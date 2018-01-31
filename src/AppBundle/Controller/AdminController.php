<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\Admin;
use AppBundle\Entity\LogInTable;

class AdminController extends Controller
{
  /**
   * @Route("/admin", name="admin_home")
   */
  public function indexAction()
  {
    $session = new Session();

    if($session->get('user_id') && ($session->get('user_type') == 'admin')){
      $data['si_user_name'] = ucwords($session->get('user_name'));
      $data['si_user_type'] = $session->get('user_type');

      return $this->render('admin/index.html.twig', $data);
    } else
      return $this->redirectToRoute('user_signin');
  }

  /**
   * @Route("/admin/create", name="admin_create")
   */
  public function adminCreateAction(Request $request)
  {
    $session = new Session();

    if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
      $data = [];
      $data['mode'] = 'new';

      $form = $this ->createFormBuilder()
                    ->add('admin_user_photo', FileType::class)
                    ->add('first_name')
                    ->add('middle_name')
                    ->add('last_name')
                    ->add('mobile_number')
                    ->add('email_address')
                    ->add('admin_type')
                    ->add('admin_class')
                    ->add('user_name')
                    ->add('password')
                    ->add('confirm_password')
                    ->getForm();

      $form->handleRequest($request);

      if($form->isSubmitted()){
        $data['form'] = [];
        $admin_data = $form->getData();
        $data['form'] = $admin_data;

        $admin_user_photo = $admin_data['admin_user_photo'];
        $admin_user_photo_name = $admin_data['admin_type'] . '_' . $admin_data['user_name'] . '.' . $admin_user_photo->guessExtension();

        if($admin_data['password'] != $admin_data['confirm_password'])
          $data['resultMessage'] = 'Passwords Must Match!';
        else {
          $em = $this->getDoctrine()->getManager();

          $passwordLIT = new LogInTable();
          $passwordLIT->setUserName($admin_data['user_name']);
          $passwordLIT->setPassword(md5($admin_data['password']));
          $passwordLIT->setUserType('admin');

          $admin = new Admin();
          $admin->setUserPhoto($admin_user_photo_name);
          $admin_user_photo->move('img/user_photos/', $admin_user_photo_name);

          $admin->setFirstName($admin_data['first_name']);
          $admin->setMiddleName($admin_data['middle_name']);
          $admin->setLastName($admin_data['last_name']);
          $admin->setMobileNumber($admin_data['mobile_number']);
          $admin->setEmailAddress($admin_data['email_address']);
          $admin->setAdminType($admin_data['admin_type']);
          $admin->setAdminClass($admin_data['admin_class']);
          $admin->setUserName($admin_data['user_name']);
          $admin->setCreatedBy($session->get('user_id'));

          $em->persist($admin);
          $em->persist($passwordLIT);
          $em->flush();

          return $this->redirectToRoute('admin_view');
        }
      }

      return $this->render('admin/form.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to Create an Admin.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/admin/edit/{admin_id}", name="admin_edit")
   */
  public function adminEditAction(Request $request, $admin_id)
  {
    $data = [];
    $data['mode'] = 'edit';

    $form = $this ->createFormBuilder()
                  ->add('admin_user_photo', FileType::class)
                  ->add('first_name')
                  ->add('middle_name')
                  ->add('last_name')
                  ->add('mobile_number')
                  ->add('email_address')
                  ->add('admin_type')
                  ->add('admin_class')
                  ->getForm();

    $admin = $this->getDoctrine()
                  ->getRepository('AppBundle:Admin')
                  ->findOneById($admin_id);

    $data['admin'] = $admin;

    $user_lit = $this->getDoctrine()
                      ->getRepository('AppBundle:LogInTable')
                      ->findOneByUserName($admin->getUserName());

    $data['user_lit'] = $user_lit;

    $admin_data['first_name'] = $admin->getFirstName();
    $admin_data['middle_name'] = $admin->getMiddleName();
    $admin_data['last_name'] = $admin->getLastName();
    $admin_data['mobile_number'] = $admin->getMobileNumber();
    $admin_data['email_address'] = $admin->getEmailAddress();
    $admin_data['admin_type'] = $admin->getAdminType();
    $admin_data['admin_class'] = $admin->getAdminClass();
    $admin_data['created_by'] = $admin->getCreatedBy();
    $admin_data['user_name'] = $admin->getUserName();

    $session = new Session();

    if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
      $data['form'] = $admin_data;

      $form->handleRequest($request);

      if($form->isSubmitted()){
        $data['form'] = [];
        $admin_data = $form->getData();
        $data['form'] = $admin_data;

        if($admin_data['admin_user_photo']){
          $admin_user_photo = $admin_data['admin_user_photo'];
          $admin_user_photo_name = $admin->getAdminType() . '_' . $admin->getUserName() . '.' . $admin_user_photo->guessExtension();
          $admin->setUserPhoto($admin_user_photo_name);
          $admin_user_photo->move('img/user_photos/', $admin_user_photo_name);
        }

        $admin->setFirstName($admin_data['first_name']);
        $admin->setMiddleName($admin_data['middle_name']);
        $admin->setLastName($admin_data['last_name']);
        $admin->setMobileNumber($admin_data['mobile_number']);
        $admin->setEmailAddress($admin_data['email_address']);
        $admin->setAdminType($admin_data['admin_type']);
        $admin->setAdminClass($admin_data['admin_class']);

        $em = $this->getDoctrine()->getManager();
        $em->persist($admin);
        $em->flush();

        return $this->redirect( $this->generateUrl('admin_view_one', array('admin_id' => $admin->getId()) ) );
      }
      return $this->render('admin/form.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to Edit Admins.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/admin/delete/{admin_id}", name="admin_delete")
   */
  public function adminDeleteAction(Request $request, $admin_id)
  {
    $session = new Session();
    $admin_data = [];

    $admin = $this->getDoctrine()
                        ->getRepository('AppBundle:Admin')
                        ->findOneById($admin_id);
    $admin_data['created_by'] = $admin->getCreatedBy();

    if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
      $admin = $this->getDoctrine()
                          ->getRepository('AppBundle:Admin')
                          ->findOneById($admin_id);

      $admin_user_name = $admin->getUserName();

      $admin_log_in_info = $this->getDoctrine()
                          ->getRepository('AppBundle:LogInTable')
                          ->findOneByUserName($admin_user_name);

      $em = $this->getDoctrine()->getManager();

      $em->remove($admin);
      $em->remove($admin_log_in_info);
      $em->flush();

      return $this->redirectToRoute('admin_view');
    } else {
      $data['message'] = 'You Are Not Qualified to Delete This Admin.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/admin/view", name="admin_view")
   */
  public function adminViewAction()
  {
    $session = new Session();

    if($session->get('user_id') && ($session->get('user_type') == 'admin' || $session->get('user_type') == 'teacher')){
      $data = [];
      $data['admins'] = [];

      $admin = $this->getDoctrine()
                          ->getRepository('AppBundle:Admin')
                          ->findAll();

      $data['admins'] = $admin;

      return $this->render('admin/view.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to View Admins.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/admin/view_one/{admin_id}", name="admin_view_one")
   */
  public function adminViewOneAction(Request $request, $admin_id)
  {
    $session = new Session();

    if($session->get('user_id') && ($session->get('user_type') == 'admin' || $session->get('user_type') == 'teacher')){
      $data = [];

      $admin = $this->getDoctrine()
                    ->getRepository('AppBundle:Admin')
                    ->findOneById($admin_id);

      $data['admin'] = $admin;

      $user_lit = $this->getDoctrine()
                        ->getRepository('AppBundle:LogInTable')
                        ->findOneByUserName($admin->getUserName());

      $data['user_lit'] = $user_lit;

      return $this->render('admin/view_one.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to View This Admin.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }
}
