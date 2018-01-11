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
     * @Route("/grade/create/{grade_system_id}", name="grade_create")
     */
    public function gradeSystemCreateAction(Request $request, $grade_system_id)
    {
      $session = new Session();

      if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
        $data = [];
        $data['mode'] = 'new';

        $form = $this ->createFormBuilder()
                      ->add('start_point')
                      ->add('end_point')
                      ->add('grade')
                      ->add('grade_value')
                      ->add('grade_remark')
                      ->getForm();

        $grade_system = $this->getDoctrine()
                            ->getRepository('AppBundle:GradeSystem')
                            ->findOneById($grade_system_id);

        $data['grade_system'] = $grade_system;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $data['form'] = [];
          $grade_data = $form->getData();
          $data['form'] = $grade_data;

          $grade = new Grade();
          $grade->setStartPoint($grade_data['start_point']);
          $grade->setEndPoint($grade_data['end_point']);
          $grade->setGrade($grade_data['grade']);
          $grade->setGradeValue($grade_data['grade_value']);
          $grade->setGradeSystemId($grade_system);
          $grade->setGradeRemark($grade_data['grade_remark']);
          $grade->setCreatedBy($session->get('user_id'));

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
    public function gradeSystemEditAction(Request $request, $grade_id)
    {
      $data = [];
      $data['mode'] = 'edit';

      $session = new Session();

      if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
        $form = $this ->createFormBuilder()

                      ->add('start_point')
                      ->add('end_point')
                      ->add('grade')
                      ->add('grade_value')
                      ->add('grade_system')
                      ->add('grade_remark')
                      ->getForm();

        $grade = $this->getDoctrine()
                            ->getRepository('AppBundle:Grade')
                            ->findOneById($grade_id);

        $grade_data['start_point'] = $grade->getStartPoint();
        $grade_data['end_point'] = $grade->getEndPoint();
        $grade_data['grade'] = $grade->getGrade();
        $grade_data['grade_value'] = $grade->getGradeValue();
        $grade_data['grade_system'] = $grade->getGradeSystemId();
        $grade_data['grade_remark'] = $grade->getGradeRemark();

        $grade_system = $this->getDoctrine()
                            ->getRepository('AppBundle:GradeSystem')
                            ->findAll();

        $data['grade_systems'] = $grade_system;

        $data['form'] = $grade_data;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $data['form'] = [];

          $grade_data = $form->getData();
          $data['form'] = $grade_data;

          $grade_system = $this->getDoctrine()
                              ->getRepository('AppBundle:GradeSystem')
                              ->findOneById($grade_data['grade_system']);

          $grade->setStartPoint($grade_data['start_point']);
          $grade->setEndPoint($grade_data['end_point']);
          $grade->setGrade($grade_data['grade']);
          $grade->setGradeValue($grade_data['grade_value']);
          $grade->setGradeSystemId($grade_system);
          $grade->setGradeRemark($grade_data['grade_remark']);
          $grade->setCreatedBy($session->get('user_id'));

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
    public function gradeDeleteAction(Request $request, $grade_id)
    {
      $session = new Session();

      if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
        $grade = $this->getDoctrine()
                            ->getRepository('AppBundle:Grade')
                            ->findOneById($grade_id);

        $grade_data['grade_system'] = $grade->getGradeSystemId()->getId();

        $em = $this->getDoctrine()->getManager();
        $em->remove($grade);
        $em->flush();

        return $this->redirect($this->generateUrl('grade_view', array('grade_system_id' => $grade_data['grade_system'])));
      } else {
        $data['message'] = 'You Are Not Qualified to Delete This Assessment Type.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/grade/view/{grade_system_id}", name="grade_view")
     */
    public function gradeViewAction(Request $request, $grade_system_id)
    {
      $session = new Session();

      if(($session->get('user_type') == 'admin') || ($session->get('user_type') == 'teacher')){
        $em = $this->getDoctrine()->getManager();

        $grade = $em->getRepository('AppBundle:Grade')
                    ->createQueryBuilder('e')
                    ->addOrderBy('e.startPoint', 'DESC')
                    ->andWhere('e.gradeSystemId = ' . $grade_system_id)
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
