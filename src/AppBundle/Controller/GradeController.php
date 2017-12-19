<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\Grade;

class GradeController extends Controller
{
    /**
     * @Route("/grade", name="grade_home")
     */
    public function indexAction()
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_type')){
        return $this->render('grade/index.html.twig', $data);
      } else
        return $this->redirectToRoute('user_signin');
    }

    /**
     * @Route("/grade/create/{grade_system_id}", name="grade_create")
     */
    public function createAction(Request $request, $grade_system_id)
    {
      $session = new Session();

      if($session->get('user_id') && ($session->get('user_type') == 'admin')){
        $data = [];
        $data['mode'] = 'new';

        $form = $this ->createFormBuilder()
                      ->add('start_point')
                      ->add('end_point')
                      ->add('grade')
                      ->add('grade_system')
                      ->getForm();

        $grade_system = $this->getDoctrine()
                            ->getRepository('AppBundle:GradeSystem')
                            ->findOneById($grade_system_id);

        $data['grade_system'] = $grade_system;
        $grade_system_id = $grade_system->getId();

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $data['form'] = [];
          $grade_data = $form->getData();
          $data['form'] = $grade_data;

          $grade = new Grade();
          $grade->setStartPoint($grade_data['start_point']);
          $grade->setEndPoint($grade_data['end_point']);
          $grade->setGrade($grade_data['grade']);
          $grade->setGradeSystemId($grade_system_id);

          //$grade->setCreatedBy($session->get('user_id'));

          $em = $this->getDoctrine()->getManager();
          $em->persist($grade);
          $em->flush();

          return $this->redirect($this->generateUrl('grade_view', array('grade_system_id' => $grade_system_id)));
        }

        return $this->render('grade/form.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Create an Grade System.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/grade/edit/{grade_id}", name="grade_edit")
     */
    public function editAction(Request $request, $grade_id)
    {
      $data = [];
      $data['mode'] = 'edit';

      $form = $this ->createFormBuilder()

                    ->add('start_point')
                    ->add('end_point')
                    ->add('grade')
                    ->add('grade_system')
                    ->getForm();

      $grade = $this->getDoctrine()
                          ->getRepository('AppBundle:Grade')
                          ->findOneById($grade_id);

      $grade_data['start_point'] = $grade->getStartPoint();
      $grade_data['end_point'] = $grade->getEndPoint();
      $grade_data['grade'] = $grade->getGrade();
      $grade_data['grade_system'] = $grade->getGradeSystemId();

      $grade_system = $this->getDoctrine()
                          ->getRepository('AppBundle:GradeSystem')
                          ->findOneById($grade_data['grade_system']);

      $data['grade_system'] = $grade_system;


      $session = new Session();

      if($session->get('user_name') && ($session->get('user_type') == 'admin')){
        $data['form'] = $grade_data;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $data['form'] = [];

          $grade_data = $form->getData();
          $data['form'] = $grade_data;

          $grade->setStartPoint($grade_data['start_point']);
          $grade->setEndPoint($grade_data['end_point']);
          $grade->setGrade($grade_data['grade']);
          $grade->setGradeSystemId($grade_data['grade_system']);

          $em = $this->getDoctrine()->getManager();
          $em->persist($grade);

          $em->flush();

          return $this->redirect($this->generateUrl('grade_view', array('grade_system_id' => $grade_data['grade_system'])));
        }
        return $this->render('grade/form.html.twig', $data);

      } else {
        $data['message'] = 'You Are Not Qualified to Edit This Assessment Result.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/grade/delete/{grade_id}", name="grade_delete")
     */
    public function deleteAction(Request $request, $grade_id)
    {
      $session = new Session();

      if($session->get('user_name') && ($session->get('user_type') == 'admin')){

        $grade = $this->getDoctrine()
                            ->getRepository('AppBundle:Grade')
                            ->findOneById($grade_id);

        $grade_system_id = $grade->getGradeSystemId();

        $em = $this->getDoctrine()->getManager();

        $em->remove($grade);

        $em->flush();

        return $this->redirect($this->generateUrl('grade_view', array('grade_system_id' => $grade_system_id)));
      } else {
        $data['message'] = 'You Are Not Qualified to Delete This Assessment Type.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/grade/view/{grade_system_id}", name="grade_view")
     */
    public function viewAction(Request $request, $grade_system_id)
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_type') && ($session->get('user_type') == 'admin')){
        $em = $this->getDoctrine()->getManager();

        $grade = $em->getRepository('AppBundle:Grade')
                    ->createQueryBuilder('e')
                    ->andWhere('e.gradeSystemId = ' . $grade_system_id)
                    ->addOrderBy('e.startPoint', 'DESC')
                    ->getQuery()
                    ->execute();

        $data['grades'] = $grade;

        $grade_system = $this->getDoctrine()
                              ->getRepository('AppBundle:GradeSystem')
                              ->findOneById($grade_system_id);

        $data['grade_system'] = $grade_system;

        return $this->render('grade/view.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View Grade Systems.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }
}
