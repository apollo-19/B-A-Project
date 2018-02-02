<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\Section;
use AppBundle\Entity\ModuleGPA;
use AppBundle\Entity\CourseGPA;
use AppBundle\Entity\SemesterGPA;
use AppBundle\Entity\CGPA;
use Symfony\Component\HttpFoundation\JsonResponse;

class SectionController extends Controller
{
  /**
   * @Route("/section/create", name="section_create")
   */
  public function sectionCreateAction(Request $request)
  {
    $session = new Session();

    if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
      $data = [];
      $data['mode'] = 'new';
      $data['form'] = [];

      $form = $this ->createFormBuilder()
                    ->add('section_code')
                    ->add('section_name')
                    ->add('section_batch')
                    ->add('section_curriculum')
                    ->getForm();

      $batch = $this->getDoctrine()
                          ->getRepository('AppBundle:Batch')
                          ->findAll();

      $data['batches'] = $batch;

      $curriculum = $this->getDoctrine()
                    ->getRepository('AppBundle:Curriculum')
                    ->findAll();

      $data['curriculums'] = $curriculum;

      $form->handleRequest($request);

      if($form->isSubmitted()){
        $section_data = $form->getData();
        $data['form'] = $section_data;
        $mybatch = $this->getDoctrine()
                            ->getRepository('AppBundle:Batch')
                            ->findOneById($section_data['section_batch']);

        $mycurriculum = $this->getDoctrine()
                      ->getRepository('AppBundle:Curriculum')
                      ->findOneById($section_data['section_curriculum']);

        $em = $this->getDoctrine()->getManager();
        $section = new Section();
        $section->setSectionCode($section_data['section_code']);
        $section->setSectionName($section_data['section_name']);
        $section->setBatchId($mybatch);
        $section->setCurriculumId($mycurriculum);
        $section->setCreatedBy($session->get('user_id'));

        $em->persist($section);

        $em->flush();
        return $this->redirectToRoute('section_view');
      }

      return $this->render('section/form.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to Create a Section.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/section/edit/{section_id}", name="section_edit")
   */
  public function sectionEditAction(Request $request, $section_id)
  {
    $data = [];
    $data['mode'] = 'edit';
    $data['form'] = [];
    $data['batch'] = [];

    $session = new Session();

    if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
      $form = $this ->createFormBuilder()
                    ->add('section_code')
                    ->add('section_name')
                    ->add('section_batch')
                    ->add('section_curriculum')
                    ->getForm();

      $section = $this->getDoctrine()
                          ->getRepository('AppBundle:Section')
                          ->findOneById($section_id);

      $curriculum = $this->getDoctrine()
                          ->getRepository('AppBundle:Curriculum')
                          ->findAll();

      $data['curriculums'] = $curriculum;

      $section_data['section_code'] = $section->getSectionCode();
      $section_data['section_name'] = $section->getSectionName();
      $section_data['section_batch'] = $section->getBatchId();
      $section_data['section_curriculum'] = $section->getCurriculumId();

      $section_data['created_by'] = $section->getCreatedBy();

      $batches = $this->getDoctrine()
                          ->getRepository('AppBundle:Batch')
                          ->findAll();

      $data['batches'] = $batches;

      $data['form'] = $section_data;

      $form->handleRequest($request);

      if($form->isSubmitted()){
        $data['form'] = [];
        $section_data = $form->getData();
        $data['form'] = $section_data;
        $mybatch = $this->getDoctrine()
                            ->getRepository('AppBundle:Batch')
                            ->findOneById($section_data['section_batch']);

        $mycurriculum = $this->getDoctrine()
                      ->getRepository('AppBundle:Curriculum')
                      ->findOneById($section_data['section_curriculum']);

        $section->setSectionCode($section_data['section_code']);
        $section->setSectionName($section_data['section_name']);
        $section->setbatchId($mybatch);
        $section->setCurriculumId($mycurriculum);

        $em = $this->getDoctrine()->getManager();
        $em->persist($section);
        $em->flush();

        return $this->redirectToRoute('section_view');
      }
      return $this->render('section/form.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to Edit This Section.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/section/delete/{section_id}", name="section_delete")
   */
  public function sectionDeleteAction(Request $request, $section_id)
  {
    $session = new Session();

    if((($session->get('user_type') == 'admin') ? ($session->get('admin_class') == 'registrar head' || $session->get('admin_class') == 'registrar officer') : false )){
      $section = $this->getDoctrine()
                          ->getRepository('AppBundle:Section')
                          ->findOneById($section_id);

      $em = $this->getDoctrine()->getManager();

      $em->remove($section);
      $em->flush();

      return $this->redirectToRoute('section_view');
    } else {
      $data['message'] = 'You Are Not Qualified to Delete This Section.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/section/view", name="section_view")
   */
  public function sectionViewAction()
  {
    $session = new Session();

    if( ($session->get('user_type') == 'admin') || ($session->get('user_type') == 'teacher') ){
      $data = [];
      $data['sections'] = [];

      $section = $this->getDoctrine()
                          ->getRepository('AppBundle:Section')
                          ->findAll();

      $data['sections'] = $section;

      $batch = $this->getDoctrine()
                          ->getRepository('AppBundle:Batch')
                          ->findAll();

      $data['batches'] = $batch;

      $curriculum = $this->getDoctrine()
                          ->getRepository('AppBundle:Curriculum')
                          ->findAll();

      $data['curriculums'] = $curriculum;

      return $this->render('section/view.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to View Sections.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/section/view_one/{section_id}", name="section_view_one")
   */
  public function sectionViewOneAction(Request $request, $section_id)
  {
    $session = new Session();

    if( ($session->get('user_type') == 'admin') || ($session->get('user_type') == 'teacher') ){
      $data = [];
      $data['sections'] = [];
      $data['mode'] = 'section';

      $section = $this->getDoctrine()
                          ->getRepository('AppBundle:Section')
                          ->findOneById($section_id);

      $data['section'] = $section;

      $students = $this->getDoctrine()
                          ->getRepository('AppBundle:Student')
                          ->findBySectionId($section);

      $data['students'] = $students;

      return $this->render('student/view.html.twig', $data);
    } else {
      $data['message'] = 'You Are Not Qualified to View This Section.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }

  /**
   * @Route("/section/publish_gpas/{section_id}", name="section_publish_gpas")
   */
  public function sectionPublishGPAsAction(Request $request, $section_id)
  {
    $session = new Session();

    if( ($session->get('user_type') == 'admin') ){
      $section = $this->getDoctrine()
                      ->getRepository('AppBundle:Section')
                      ->findOneById( $section_id );

      $students = $this->getDoctrine()
                      ->getRepository('AppBundle:Student')
                      ->findBy(
                        array('sectionId' => $section_id)
                      );
      $schoolsessions = $this->getDoctrine()
                              ->getRepository('AppBundle:Schoolsession')
                              ->findBy(
                                array('sectionId' => $section_id)
                              );

      $gpa = $this->getDoctrine()
                    ->getRepository('AppBundle:GPA')
                    ->findOneById( $section->getCurriculumId()->getGpaSystemId() );

      // return new JsonResponse();

      $currentModSem = '';
      $currentModSemArray = [];
      $session_results_all = [];
      foreach ($schoolsessions as $schoolsession) {
        // Get All Results
        $session_results = $this->getDoctrine()
                                ->getRepository('AppBundle:SessionResult')
                                ->findBy(
                                  array('sessionId' => $schoolsession->getId())
                                );

        $session_add_results = $this->getDoctrine()
                                    ->getRepository('AppBundle:SessionResultAdd')
                                    ->findBy(
                                      array('sessionId' => $schoolsession->getId())
                                    );

        array_push($session_results_all, $session_results);
        array_push($session_results_all, $session_add_results);

        // Get Modules/Semesters/Courses
        if( $schoolsession->getCourseId()->getCurriculumId()->getCurriculumType() == 'modularized' ) {
          if ($schoolsession->getCourseModuleType() == 'course' && $schoolsession->getCourseId()->getModuleId() != null)
            $currentModSem = array( 'name' => $schoolsession->getCourseId()->getModuleId()->getModuleName(), 'type' => 'course', 'id' => $schoolsession->getCourseId()->getModuleId() );
          elseif ($schoolsession->getCourseModuleType() == 'module' && $schoolsession->getModuleId() != null)
            $currentModSem = array( 'name' => $schoolsession->getModuleId()->getModuleName(), 'type' => 'module', 'id' => $schoolsession->getModuleId() );
          else
            $currentModSem = array( 'name' => "Independent Courses", 'type' => 'course', 'id' => $schoolsession->getCourseId() );
        } else if( $curriculumtype == 'semester' ) {
          if ($schoolsession->getCourseId()->getSemesterId() != null)
            $currentModSem = array( 'name' => $schoolsession->getCourseId()->getSemesterId()->getSemesterName(), 'type' => 'semester_course', 'id' => $schoolsession->getCourseId()->getSemesterId() );
          else
            $currentModSem = array( 'name' => "Independent Courses", 'type' => 'course', 'id' => $schoolsession->getCourseId() );
        }

        if ( !( in_array($currentModSem, $currentModSemArray) ) )
          array_push($currentModSemArray, $currentModSem);
        // End Get Modules/Semesters/Courses
      }

      foreach ($students as $student) {
        foreach ( $currentModSemArray as $currentModSemArr ) {
          $totalCreditHours = 0;
          $totalResultValues = 0;
          foreach ($session_results_all as $session_results) {
            foreach ( $session_results as $session_result ) {
              if ( ( $session_result->getStudentId() == $student ) ) {
                if( !(method_exists($session_result, 'getPrevSessionId')) ){
                  $totalResultValues += $session_result->getResultInAlphabetValue() * $session_result->getSessionId()->getCourseId()->getCourseCreditHour();
                  $totalCreditHours += $session_result->getSessionId()->getCourseId()->getCourseCreditHour();
                }
              }
            }
          }

          $studentGPA = ($totalCreditHours != 0) ? ($totalResultValues / $totalCreditHours) : 0;
          $em = $this->getDoctrine()->getManager();
          if( (($currentModSemArr['type'] == 'course') || ($currentModSemArr['type'] == 'module')) && ($currentModSemArr['name'] != 'Independent Courses') ) {
            $module_gpas_old = $this->getDoctrine()
                                        ->getRepository('AppBundle:ModuleGPA')
                                        ->findBy(
                                          array( 'moduleId' => $currentModSemArr['id'], 'studentId' => $student )
                                        );

            if( sizeof($module_gpas_old) == 0 ){
              $module_GPA = new ModuleGPA();

              $module_GPA->setStudentId( $student );
              $module_GPA->setModuleId( $currentModSemArr['id'] );
              $module_GPA->setGPAValue( $studentGPA );
              $module_GPA->setCreditHour( $totalCreditHours );
              $module_GPA->setTotalSum( $totalResultValues );

              $em->persist($module_GPA);
              $em->flush();
            } else {
              foreach ($module_gpas_old as $module_gpas_ol) {
                $module_gpas_ol->setStudentId( $student );
                $module_gpas_ol->setModuleId( $currentModSemArr['id'] );
                $module_gpas_ol->setGPAValue( $studentGPA );
                $module_gpas_ol->setCreditHour( $totalCreditHours );
                $module_gpas_ol->setTotalSum( $totalResultValues );

                $em->persist($module_gpas_ol);
                $em->flush();
              }
            }
          }  else if( ($currentModSemArr['type'] == 'semester_course') && ($currentModSemArr['name'] != 'Independent Courses') ) {
            $semester_gpas_old = $this->getDoctrine()
                                        ->getRepository('AppBundle:SemesterGPA')
                                        ->findBy(
                                          array( 'semesterId' => $currentModSemArr['id'], 'studentId' => $student )
                                        );

            if( sizeof($semester_gpas_old) == 0 ){
              $semester_GPA = new SemesterGPA();

              $semester_GPA->setStudentId( $student );
              $semester_GPA->setSemesterId( $currentModSemArr['id'] );
              $semester_GPA->setGPAValue( $studentGPA );
              $semester_GPA->setCreditHour( $totalCreditHours );
              $semester_GPA->setTotalSum( $totalResultValues );

              $em->persist($semester_GPA);
              $em->flush();
            } else {
              foreach ($semester_gpas_old as $semester_gpas_ol) {
                $semester_gpas_ol->setStudentId( $student );
                $semester_gpas_ol->setSemesterId( $currentModSemArr['id'] );
                $semester_gpas_ol->setGPAValue( $studentGPA );
                $semester_gpas_ol->setCreditHour( $totalCreditHours );
                $semester_gpas_ol->setTotalSum( $totalResultValues );

                $em->persist($semester_gpas_ol);
                $em->flush();
              }
            }
          } else if( ($currentModSemArr['type'] == 'course') && ($currentModSemArr['name'] == 'Independent Courses') ) {
            $course_gpas_old = $this->getDoctrine()
                                        ->getRepository('AppBundle:CourseGPA')
                                        ->findBy(
                                          array( 'courseId' => $currentModSemArr['id'], 'studentId' => $student )
                                        );

            if( sizeof($course_gpas_old) == 0 ){
              $course_GPA = new CourseGPA();

              $course_GPA->setStudentId( $student );
              $course_GPA->setCourseId( $currentModSemArr['id'] );
              $course_GPA->setGPAValue( $studentGPA );
              $course_GPA->setCreditHour( $totalCreditHours );
              $course_GPA->setTotalSum( $totalResultValues );

              $em->persist($course_GPA);
              $em->flush();
            } else {
              foreach ($course_gpas_old as $course_gpas_ol) {
                $course_gpas_ol->setStudentId( $student );
                $course_gpas_ol->setCourseId( $currentModSemArr['id'] );
                $course_gpas_ol->setGPAValue( $studentGPA );
                $course_gpas_ol->setCreditHour( $totalCreditHours );
                $course_gpas_ol->setTotalSum( $totalResultValues );

                $em->persist($course_gpas_ol);
                $em->flush();
              }
            }
          }
        }

        $gpas_all = [];
        $module_gpas_old = $this->getDoctrine()
                                    ->getRepository('AppBundle:ModuleGPA')
                                    ->findBy(
                                      array( 'studentId' => $student )
                                    );
        $semester_gpas_old = $this->getDoctrine()
                                            ->getRepository('AppBundle:SemesterGPA')
                                            ->findBy(
                                              array( 'studentId' => $student )
                                            );
        $course_gpas_old = $this->getDoctrine()
                                            ->getRepository('AppBundle:CourseGPA')
                                            ->findBy(
                                              array( 'studentId' => $student )
                                            );
        //
        array_push($gpas_all, $module_gpas_old);
        array_push($gpas_all, $semester_gpas_old);
        array_push($gpas_all, $course_gpas_old);

        $CGPATotalCreditHours = 0;
        $CGPAtotalResultValues = 0;
        foreach ($gpas_all as $gpas) {
          foreach ($gpas as $gpa) {
            $CGPATotalCreditHours += $gpa->getCreditHour();
            $CGPAtotalResultValues += $gpa->getTotalSum();
          }
        }

        $CGPA_Value = ($CGPATotalCreditHours != 0) ? ($CGPAtotalResultValues / $CGPATotalCreditHours) : 0;

        $c_gpas_old = $this->getDoctrine()
                                    ->getRepository('AppBundle:CGPA')
                                    ->findBy(
                                      array( 'studentId' => $student )
                                    );

        if( sizeof($c_gpas_old) == 0 ){
          $CGPA = new CGPA();
          $CGPA->setStudentId( $student );
          $CGPA->setGPAValue( $CGPA_Value );

          $em->persist($CGPA);
          $em->flush();
        } else {
          $c_gpas_old->setStudentId( $student );
          $c_gpas_old->setGPAValue( $CGPA_Value );

          $em->persist($c_gpas_old);
          $em->flush();
        }
      }

      return $this->redirectToRoute('section_view_one', array('section_id' => $schoolsession->getSectionId()->getId()));

    } else {
      $data['message'] = 'You Are Not Qualified to This Section GPAs.';
      return $this->render('accessDenied.html.twig', $data);
    }
  }
}

//
