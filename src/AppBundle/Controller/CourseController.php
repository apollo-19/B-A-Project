<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\Course;

class CourseController extends Controller
{
  /**
   * @Route("/course/create", name="course_create")
   */
  public function courseCreateAction(Request $request)
  {
    $session = new Session();

    if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
      $data = [];
      $data['mode'] = 'new';

      $form = $this ->createFormBuilder()
                    ->add('course_code')
                    ->add('course_name')
                    ->add('course_credit_hour')
                    ->add('course_year')
                    ->add('curriculum_id')
                    ->add('module_id')
                    ->add('semester_id')
                    ->getForm();

      $curriculum = $this->getDoctrine()
                          ->getRepository('AppBundle:Curriculum')
                          ->findAll();

      $data['curriculums'] = $curriculum;

      $module = $this->getDoctrine()
                          ->getRepository('AppBundle:Module')
                          ->findAll();

      $data['modules'] = $module;

      $semester = $this->getDoctrine()
                          ->getRepository('AppBundle:Semester')
                          ->findAll();

      $data['semesters'] = $semester;

      $form->handleRequest($request);

      if($form->isSubmitted()){
        $course_data = $form->getData();
        $data['form'] = $course_data;
        $mysemester = $this->getDoctrine()
                            ->getRepository('AppBundle:Semester')
                            ->findOneById($course_data['semester_id']);
        $mymodule = $this->getDoctrine()
                          ->getRepository('AppBundle:Module')
                          ->findOneById($course_data['module_id']);
        $mycurriculum = $this->getDoctrine()
                              ->getRepository('AppBundle:Curriculum')
                              ->findOneById($course_data['curriculum_id']);

        $em = $this->getDoctrine()->getManager();
        $course = new Course();
        $course->setCourseCode($course_data['course_code']);
        $course->setCourseName($course_data['course_name']);
        $course->setCourseCreditHour($course_data['course_credit_hour']);
        $course->setCourseYear($course_data['course_year']);
        $course->setCurriculumId($mycurriculum);
        $course->setModuleId($mymodule);
        $course->setSemesterId($mysemester);

        $course->setCreatedBy($session->get('user_id'));

        $em->persist($course);

        $em->flush();
        return $this->redirectToRoute('course_view');
      }

      return $this->render('course/form.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to Create a Course.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/course/edit/{course_id}", name="course_edit")
   */
  public function courseEditAction(Request $request, $course_id)
  {
    $data = [];
    $data['mode'] = 'edit';

    $session = new Session();

    if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
      $form = $this ->createFormBuilder()
                    ->add('course_code')
                    ->add('course_name')
                    ->add('course_credit_hour')
                    ->add('course_year')
                    ->add('module_id')
                    ->add('semester_id')
                    ->add('curriculum_id')
                    ->getForm();

      $course = $this->getDoctrine()
                          ->getRepository('AppBundle:Course')
                          ->findOneById($course_id);

      $curriculum_id = $course->getCurriculumId();

      $curriculum = $this->getDoctrine()
                          ->getRepository('AppBundle:Curriculum')
                          ->findAll();

      $data['curriculums'] = $curriculum;

      $module = $this->getDoctrine()
                          ->getRepository('AppBundle:Module')
                          ->findAll();

      $data['modules'] = $module;

      $semester = $this->getDoctrine()
                          ->getRepository('AppBundle:Semester')
                          ->findAll();

      $data['semesters'] = $semester;

      $course_data['course_code'] = $course->getCourseCode();
      $course_data['course_name'] = $course->getCourseName();
      $course_data['course_credit_hour'] = $course->getCourseCreditHour();
      $course_data['course_year'] = $course->getCourseYear();
      $course_data['module_id'] = $course->getModuleId();
      $course_data['semester_id'] = $course->getSemesterId();
      $course_data['curriculum_id'] = $course->getCurriculumId();
      $course_data['created_by'] = $course->getCreatedBy();

      $data['form'] = $course_data;

      $form->handleRequest($request);

      if($form->isSubmitted()){
        $data['form'] = [];
        $course_data = $form->getData();
        $data['form'] = $course_data;
        $mysemester = $this->getDoctrine()
                            ->getRepository('AppBundle:Semester')
                            ->findOneById($course_data['semester_id']);
        $mymodule = $this->getDoctrine()
                            ->getRepository('AppBundle:Module')
                            ->findOneById($course_data['module_id']);
       $mycurriculum = $this->getDoctrine()
                           ->getRepository('AppBundle:Curriculum')
                           ->findOneById($course_data['curriculum_id']);

        $course->setCourseCode($course_data['course_code']);
        $course->setCourseName($course_data['course_name']);
        $course->setModuleId($mymodule);
        $course->setSemesterId($mysemester);
        $course->setCourseCreditHour($course_data['course_credit_hour']);
        $course->setCourseYear($course_data['course_year']);
        $course->setCurriculumId( $mycurriculum);

        $em = $this->getDoctrine()->getManager();
        $em->persist($course);
        $em->flush();

        return $this->redirectToRoute('course_view');
      }
      return $this->render('course/form.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to Edit This Course.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/course/delete/{course_id}", name="course_delete")
   */
  public function courseDeleteAction(Request $request, $course_id)
  {
    $session = new Session();

    if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
      $course = $this->getDoctrine()
                          ->getRepository('AppBundle:Course')
                          ->findOneById($course_id);

      $em = $this->getDoctrine()->getManager();

      $em->remove($course);
      $em->flush();

      return $this->redirectToRoute('course_view');
    } else {
      $data['message'] = 'You Are Not Qualified to Delete This Course.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/course/view", name="course_view")
   */
  public function courseViewAction()
  {
    $session = new Session();

    if($session->get('user_id')){
      $data = [];
      $data['courses'] = [];

      $em = $this->getDoctrine()->getManager();

      $course = $em->getRepository('AppBundle:Course')
                    ->createQueryBuilder('c')
                    ->addOrderBy('c.courseYear', 'ASC')
                    ->addOrderBy('c.courseName', 'ASC')
                    ->getQuery()
                    ->execute();

      $data['courses'] = $course;

      return $this->render('course/view.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to View Courses.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/course/view_one/{course_id}", name="course_view_one")
   */
  public function courseViewOneAction(Request $request, $course_id)
  {
    $session = new Session();

    if($session->get('user_id')){
      $data = [];

      $course = $this->getDoctrine()
                          ->getRepository('AppBundle:Course')
                          ->findOneById($course_id);

      $data['course'] = $course;

      return $this->render('course/view_one.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to View This Course.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }
}
