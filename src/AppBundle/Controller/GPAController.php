<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\GPA;

class GPAController extends Controller
{
    /**
     * @Route("/gpa/create/{gpa_system_id}", name="gpa_create")
     */
    public function createAction(Request $request, $gpa_system_id)
    {
      $session = new Session();

      if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
        $data = [];
        $data['mode'] = 'new';

        $form = $this ->createFormBuilder()
                      ->add('start_gpa')
                      ->add('end_gpa')
                      ->add('gpa_remark')
                      ->add('gpa_pf')
                      ->getForm();

        $gpa_system = $this->getDoctrine()
                            ->getRepository('AppBundle:GPASystem')
                            ->findOneById($gpa_system_id);

        $data['gpa_system'] = $gpa_system;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $data['form'] = [];
          $gpa_data = $form->getData();
          $data['form'] = $gpa_data;

          $gpa = new GPA();
          $gpa->setStartGpa($gpa_data['start_gpa']);
          $gpa->setEndGpa($gpa_data['end_gpa']);
          $gpa->setGpaSystemId($gpa_system);
          $gpa->setGpaRemark($gpa_data['gpa_remark']);
          $gpa->setGpaPF($gpa_data['gpa_pf']);
          $gpa->setCreatedBy($session->get('user_id'));

          $em = $this->getDoctrine()->getManager();
          $em->persist($gpa);
          $em->flush();

          return $this->redirect($this->generateUrl('gpa_view', array('gpa_system_id' => $gpa_system_id)));
        }

        return $this->render('gpa/form.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Create an Gpa System.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/gpa/edit/{gpa_id}", name="gpa_edit")
     */
    public function editAction(Request $request, $gpa_id)
    {
      $data = [];
      $data['mode'] = 'edit';

      $session = new Session();

      if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
        $form = $this ->createFormBuilder()
                      ->add('start_gpa')
                      ->add('end_gpa')
                      ->add('gpa_system')
                      ->add('gpa_remark')
                      ->add('gpa_pf')
                      ->getForm();

        $gpa = $this->getDoctrine()
                            ->getRepository('AppBundle:GPA')
                            ->findOneById($gpa_id);

        $gpa_data['start_gpa'] = $gpa->getStartGpa();
        $gpa_data['end_gpa'] = $gpa->getEndGpa();
        $gpa_data['gpa_system'] = $gpa->getGpaSystemId();
        $gpa_data['gpa_remark'] = $gpa->getGpaRemark();
        $gpa_data['gpa_pf'] = $gpa->getGpaPF();

        $gpa_system = $this->getDoctrine()
                            ->getRepository('AppBundle:GPASystem')
                            ->findAll();

        $data['gpa_systems'] = $gpa_system;

        $data['form'] = $gpa_data;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $data['form'] = [];

          $gpa_data = $form->getData();
          $data['form'] = $gpa_data;

          $gpa_system = $this->getDoctrine()
                              ->getRepository('AppBundle:GPASystem')
                              ->findOneById($gpa_data['gpa_system']);

          $gpa->setStartGpa($gpa_data['start_gpa']);
          $gpa->setEndGpa($gpa_data['end_gpa']);
          $gpa->setGpaRemark($gpa_data['gpa_remark']);
          $gpa->setGpaPF($gpa_data['gpa_pf']);
          $gpa->setGpaSystemId($gpa_system);

          $em = $this->getDoctrine()->getManager();
          $em->persist($gpa);

          $em->flush();

          return $this->redirect($this->generateUrl('gpa_view', array('gpa_system_id' => $gpa_data['gpa_system'])));
        }
        return $this->render('gpa/form.html.twig', $data);

      } else {
        $data['message'] = 'You Are Not Qualified to Edit This GPA.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/gpa/delete/{gpa_id}", name="gpa_delete")
     */
    public function deleteAction(Request $request, $gpa_id)
    {
      $session = new Session();

      if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
        $gpa = $this->getDoctrine()
                      ->getRepository('AppBundle:GPA')
                      ->findOneById($gpa_id);

        $gpa_system_id = $gpa->getGpaSystemId()->getId();

        $em = $this->getDoctrine()->getManager();

        $em->remove($gpa);

        $em->flush();

        return $this->redirect($this->generateUrl('gpa_view', array('gpa_system_id' => $gpa_system_id)));
      } else {
        $data['message'] = 'You Are Not Qualified to Delete This Assessment Type.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/gpa/view/{gpa_system_id}", name="gpa_view")
     */
    public function viewAction(Request $request, $gpa_system_id)
    {
      $session = new Session();

      if(($session->get('user_type') == 'admin') || ($session->get('user_type') == 'teacher')){
        $em = $this->getDoctrine()->getManager();

        $gpa = $em->getRepository('AppBundle:GPA')
                    ->createQueryBuilder('e')
                    ->addOrderBy('e.startGpa', 'DESC')
                    ->andWhere('e.gpaSystemId = ' . $gpa_system_id)
                    ->getQuery()
                    ->execute();

        $data['gpas'] = $gpa;

        $gpa_system = $this->getDoctrine()
                            ->getRepository('AppBundle:GPASystem')
                            ->findOneById($gpa_system_id);

        $data['gpa_system'] = $gpa_system;

        return $this->render('gpa/view.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View GPA Systems.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }
}
