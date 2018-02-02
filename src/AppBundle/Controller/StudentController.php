<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\Student;
use AppBundle\Entity\LogInTable;

class StudentController extends Controller
{
  /**
   * @Route("/student/register", name="student_register")
   */
  public function studentCreateAction(Request $request)
  {
    $session = new Session();

    if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
      $data = [];
      $data['mode'] = 'new';
      $data['form'] = [];

      $form = $this ->createFormBuilder()
                    ->add('student_user_photo', FileType::class)
                    ->add('admission_number')
                    ->add('first_name_en')
                    ->add('middle_name_en')
                    ->add('last_name_en')
                    ->add('first_name_am')
                    ->add('middle_name_am')
                    ->add('last_name_am')
                    ->add('section_id')

                    ->add('user_name')
                    ->add('password')
                    ->add('confirm_password')
                    ->getForm();

      $section = $this->getDoctrine()
                          ->getRepository('AppBundle:Section')
                          ->findAll();

      $data['sections'] = $section;

      $form->handleRequest($request);

      if($form->isSubmitted()){
        $student_data = $form->getData();
        $data['form'] = $student_data;

        $student_user_photo = $student_data['student_user_photo'];
        $student_user_photo_name = 'student_' . $student_data['user_name'] . '.' . $student_user_photo->guessExtension();

        if($student_data['password'] != $student_data['confirm_password'])
          $data['resultMessage'] = 'Passwords Must Match!';
        else {
          $em = $this->getDoctrine()->getManager();
          $mysection = $this->getDoctrine()
                              ->getRepository('AppBundle:Section')
                              ->findOneById($student_data['section_id']);

          $passwordLIT = new LogInTable();
          $passwordLIT->setUserName($student_data['user_name']);
          $passwordLIT->setPassword(md5($student_data['password']));
          $passwordLIT->setUserType('student');

          $student = new Student();
          $student->setUserPhoto($student_user_photo_name);
          $student_user_photo->move('img/user_photos/', $student_user_photo_name);

          $student->setAdmissionNumber($student_data['admission_number']);
          $student->setFirstNameEn($student_data['first_name_en']);
          $student->setMiddleNameEn($student_data['middle_name_en']);
          $student->setLastNameEn($student_data['last_name_en']);
          $student->setFirstNameAm($student_data['first_name_am']);
          $student->setMiddleNameAm($student_data['middle_name_am']);
          $student->setLastNameAm($student_data['last_name_am']);
          $student->setUserName($student_data['user_name']);
          $student->setStudentStartYear($mysection->getBatchId()->getBatchStartYear());
          $student->setStudentEndYear($mysection->getBatchId()->getBatchEndYear());

          $student->setSectionId($mysection);
          $student->setRegisteredBy($session->get('user_id'));

          $em->persist($student);
          $em->persist($passwordLIT);

          $em->flush();
          return $this->redirectToRoute('student_view');
        }
      }

      return $this->render('student/form.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to Hire a Student.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/student/edit/{student_id}", name="student_edit")
   */
  public function studentEditAction(Request $request, $student_id)
  {
    $data = [];
    $data['mode'] = 'edit';

    $session = new Session();

    if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
      $form = $this ->createFormBuilder()
                    ->add('student_user_photo', FileType::class)
                    ->add('admission_number')
                    ->add('first_name_en')
                    ->add('middle_name_en')
                    ->add('last_name_en')
                    ->add('first_name_am')
                    ->add('middle_name_am')
                    ->add('last_name_am')
                    ->add('section_id')

                    ->add('student_start_year')
                    ->add('student_end_year')
                    ->getForm();

      $student = $this->getDoctrine()
                          ->getRepository('AppBundle:Student')
                          ->findOneById($student_id);

      $data['student'] = $student;

      $student_data['admission_number'] = $student->getAdmissionNumber();
      $student_data['first_name_en'] = $student->getFirstNameEn();
      $student_data['middle_name_en'] = $student->getMiddleNameEn();
      $student_data['last_name_en'] = $student->getLastNameEn();
      $student_data['first_name_am'] = $student->getFirstNameAm();
      $student_data['middle_name_am'] = $student->getMiddleNameAm();
      $student_data['last_name_am'] = $student->getLastNameAm();
      $student_data['student_start_year'] = $student->getStudentStartYear();
      $student_data['student_end_year'] = $student->getStudentEndYear();

      $student_data['section_id'] = $student->getSectionId();
      $student_data['registered_by'] = $student->getRegisteredBy();

      $section = $this->getDoctrine()
                          ->getRepository('AppBundle:Section')
                          ->findAll();

      $data['sections'] = $section;
      $data['form'] = $student_data;

      $form->handleRequest($request);

      if($form->isSubmitted()){
        $data['form'] = [];
        $student_data = $form->getData();
        $data['form'] = $student_data;

        if($student_data['student_user_photo']){
          $student_user_photo = $student_data['student_user_photo'];
          $student_user_photo_name = 'student_' . $student->getUserName() . '.' . $student_user_photo->guessExtension();
          $student->setUserPhoto($student_user_photo_name);
          $student_user_photo->move('img/user_photos/', $student_user_photo_name);
        }

        $mysection = $this->getDoctrine()
                            ->getRepository('AppBundle:Section')
                            ->findOneById($student_data['section_id']);

        $student->setAdmissionNumber($student_data['admission_number']);
        $student->setFirstNameEn($student_data['first_name_en']);
        $student->setMiddleNameEn($student_data['middle_name_en']);
        $student->setLastNameEn($student_data['last_name_en']);
        $student->setFirstNameAm($student_data['first_name_am']);
        $student->setMiddleNameAm($student_data['middle_name_am']);
        $student->setLastNameAm($student_data['last_name_am']);

        $student->setStudentStartYear($student_data['student_start_year']);
        $student->setStudentEndYear($student_data['student_end_year']);

        $student->setSectionId($mysection);

        $em = $this->getDoctrine()->getManager();
        $em->persist($student);
        $em->flush();

        return $this->redirectToRoute('student_view');
      }
      return $this->render('student/form.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to Edit This Student.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/student/delete/{student_id}", name="student_delete")
   */
  public function studentDeleteAction(Request $request, $student_id)
  {
    $session = new Session();

    if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
      $student = $this->getDoctrine()
                          ->getRepository('AppBundle:Student')
                          ->findOneById($student_id);

      $student_log_in_info = $this->getDoctrine()
                                  ->getRepository('AppBundle:LogInTable')
                                  ->findOneByUserName($student->getUserName());

      $em = $this->getDoctrine()->getManager();

      $em->remove($student);
      $em->remove($student_log_in_info);
      $em->flush();

      return $this->redirectToRoute('student_view');
    } else {
      $data['message'] = 'You Are Not Qualified to Delete This Student.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/student/view", name="student_view")
   */
  public function studentViewAction()
  {
    $session = new Session();

    if($session->get('user_type') == 'admin' || $session->get('user_type') == 'teacher'){
      $data = [];
      $data['students'] = [];
      $data['mode'] = 'student';

      $em = $this->getDoctrine()->getManager();

      $student = $em->getRepository('AppBundle:Student')
                              ->createQueryBuilder('e')
                              ->addOrderBy('e.admissionNumber', 'ASC')
                              ->getQuery()
                              ->execute();

      $data['students'] = $student;

      return $this->render('student/view.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to View Students.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/student/view_one/{student_id}", name="student_view_one")
   */
  public function studentViewOneAction(Request $request, $student_id)
  {
    $session = new Session();

    if($session->get('user_type') == 'admin' || $session->get('user_type') == 'teacher'){
      $data = [];
      $data['students'] = [];

      $student = $this->getDoctrine()
                          ->getRepository('AppBundle:Student')
                          ->findOneById($student_id);

      $student_section = $student->getSectionId();
      $data['student'] = $student;

      $section = $this->getDoctrine()
                          ->getRepository('AppBundle:Section')
                          ->findOneById($student_section);

      $data['section'] = $section;

      $user_lit = $this->getDoctrine()
                        ->getRepository('AppBundle:LogInTable')
                        ->findOneByUserName($student->getUserName());

      $data['user_lit'] = $user_lit;
      return $this->render('student/view_one.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to View This Student.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/student/view_results/{student_id}", name="student_results")
   */
  public function studentResultsViewAction(Request $request, $student_id)
  {
    $session = new Session();

    if($session->get('user_id') && ($session->get('user_type') == 'admin')){
      $data = [];
      $gpas_all = [];

      $student = $this->getDoctrine()
                          ->getRepository('AppBundle:Student')
                          ->findOneById( $student_id );

      $data['student'] = $student;

      $module_gpas_old = $this->getDoctrine()
                                  ->getRepository('AppBundle:ModuleGPA')
                                  ->findBy(
                                    array( 'studentId' => $student )
                                  );
      //
      $semester_gpas_old = $this->getDoctrine()
                                  ->getRepository('AppBundle:SemesterGPA')
                                  ->findBy(
                                    array( 'semesterId' => $currentModSemArr['id'], 'studentId' => $student )
                                  );
      //
      $course_gpas_old = $this->getDoctrine()
                                  ->getRepository('AppBundle:CourseGPA')
                                  ->findBy(
                                    array( 'courseId' => $currentModSemArr['id'], 'studentId' => $student )
                                  );
      //

      array_push($gpas_all, $module_gpas_old);
      array_push($gpas_all, $semester_gpas_old);
      array_push($gpas_all, $course_gpas_old);

      $data['gpas_all'] = $gpas_all;

      return $this->render('student/result_view.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to View Student\'s Results.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/student/gpa/{student_id}", name="student_gpa")
   */
  public function studentGPAViewAction(Request $request, $student_id)
  {
    $session = new Session();

    if(($session->get('user_type') == 'admin')){
      if (($session->get('user_type') == 'registrar head') && ($session->get('user_type') == 'registrar officer')) {
        $data = [];
        $data['students'] = [];

        $student = $this->getDoctrine()
                        ->getRepository('AppBundle:Student')
                        ->findOneById($student_id);

        $data['student'] = $student;

        $session_results = $this->getDoctrine()
                                ->getRepository('AppBundle:SessionResult')
                                ->findBy(
                                  array('studentId' => $student, 'sessionPublished' => true)
                                );

        $session_result_adds = $this->getDoctrine()
                                    ->getRepository('AppBundle:SessionResultAdd')
                                    ->findBy(
                                      array('studentId' => $student, 'sessionPublished' => true)
                                    );

        $session_results_final = array_merge($session_results, $session_result_adds);
        $data['session_results'] = $session_results_final;
        $data['session_result_adds'] = $session_result_adds;

        $gpas = $this->getDoctrine()
                      ->getRepository('AppBundle:GPA')
                      ->findAll();

        $data['gpas'] = $gpas;

        $assessment_results = $this->getDoctrine()
                                    ->getRepository('AppBundle:AssessmentResult')
                                    ->findBy(
                                      array('studentId' => $student)
                                    );

        $data['assessment_results'] = $assessment_results;

        return $this->render('student/result_view.html.twig', $data);
      }
    }

    $data['message'] = 'You Are Not Qualified to View Student\'s Results.';
    return $this->render('accessDenied.html.twig', $data);
  }
}
