<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\Semester;

class SemesterController extends Controller
{
    /**
     * @Route("/semester/create", name="semester_create")
     */
    public function semesterCreateAction(Request $request)
    {
      $session = new Session();

      if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
        $data = [];
        $data['mode'] = 'new';

        $form = $this ->createFormBuilder()
                      ->add('semester')
                      ->add('year')
                      ->add('semester_curriculum')
                      ->getForm();

        $curriculum = $this->getDoctrine()
                            ->getRepository('AppBundle:Curriculum')
                            ->findAll();

        $data['curriculums'] = $curriculum;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $data['form'] = [];
          $semester_data = $form->getData();
          $data['form'] = $semester_data;
          $mycurriculum = $this->getDoctrine()
                              ->getRepository('AppBundle:Curriculum')
                              ->findOneById($semester_data['semester_curriculum']);

          $semester = new Semester();
          $semester->setSemester($semester_data['semester']);
          $semester->setYear($semester_data['year']);
          $semester->setCurriculumId($mycurriculum);
          $semester->setCreatedBy($session->get('user_id'));

          $em = $this->getDoctrine()->getManager();
          $em->persist($semester);
          $em->flush();

          return $this->redirectToRoute('semester_view');
        }

        return $this->render('semester/form.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Create a Semester.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/semester/edit/{semester_id}", name="semester_edit")
     */
    public function semesterEditAction(Request $request, $semester_id)
    {
      $data = [];
      $data['mode'] = 'edit';

      $session = new Session();

      if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
        $form = $this ->createFormBuilder()
                      ->add('semester')
                      ->add('year')
                      ->add('semester_curriculum')
                      ->getForm();

        $semester = $this->getDoctrine()
                            ->getRepository('AppBundle:Semester')
                            ->findOneById($semester_id);

        $curriculum = $this->getDoctrine()
                            ->getRepository('AppBundle:Curriculum')
                            ->findAll();

        $data['curriculums'] = $curriculum;

        $semester_data['semester'] = $semester->getSemester();
        $semester_data['year'] = $semester->getYear();
        $semester_data['semester_curriculum'] = $semester->getCurriculumId();

        $data['form'] = $semester_data;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $data['form'] = [];
          $semester_data = $form->getData();
          $data['form'] = $semester_data;
          $mycurriculum = $this->getDoctrine()
                               ->getRepository('AppBundle:Curriculum')
                               ->findOneById($semester_data['semester_curriculum']);


          $semester->setSemester($semester_data['semester']);
          $semester->setYear($semester_data['year']);
          $semester->setCurriculumId($mycurriculum);


          $em = $this->getDoctrine()->getManager();
          $em->persist($semester);
          $em->flush();

          return $this->redirectToRoute('semester_view');
        }
        return $this->render('semester/form.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Edit This Semester.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/semester/delete/{semester_id}", name="semester_delete")
     */
    public function semesterDeleteAction(Request $request, $semester_id)
    {
      $session = new Session();

      if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
        $semester = $this->getDoctrine()
                            ->getRepository('AppBundle:Semester')
                            ->findOneById($semester_id);
        $semester_data['created_by'] = $semester->getCreatedBy();

        $semester = $this->getDoctrine()
                            ->getRepository('AppBundle:Semester')
                            ->findOneById($semester_id);

        $em = $this->getDoctrine()->getManager();

        $em->remove($semester);
        $em->flush();

        return $this->redirectToRoute('semester_view');
      } else {
        $data['message'] = 'You Are Not Qualified to Delete This Semester.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/semester/view", name="semester_view")
     */
    public function semesterViewAction()
    {
      $session = new Session();

      if($session->get('user_id')){
        $data = [];
        $data['semesters'] = [];

        $semester = $this->getDoctrine()
                            ->getRepository('AppBundle:Semester')
                            ->findAll();

        $data['semesters'] = $semester;

        $curriculum = $this->getDoctrine()
                            ->getRepository('AppBundle:Curriculum')
                            ->findAll();

        $data['curriculums'] = $curriculum;

        return $this->render('semester/view.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View Semesters.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }
}
