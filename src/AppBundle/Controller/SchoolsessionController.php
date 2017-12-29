<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\Schoolsession;
use AppBundle\Entity\SessionResult;
use AppBundle\Entity\AssessmentResult;

class SchoolsessionController extends Controller
{
    /**
     * @Route("/session/create", name="session_create")
     */
    public function sessionCreateAction(Request $request)
    {
      $session = new Session();

      if($session->get('user_id') && ($session->get('user_type') == 'admin')){
        $data = [];
        $data['mode'] = 'new';

        $form = $this ->createFormBuilder()
                      ->add('session_code')
                      ->add('session_name')
                      ->add('session_section')
                      ->add('session_teacher')
                      ->add('course_module_type')
                      ->add('course_id')
                      ->add('module_id')
                      ->add('assessment_type_system_id')
                      ->add('session_start_date')
                      ->add('session_end_date')
                      ->getForm();

        $section = $this->getDoctrine()
                            ->getRepository('AppBundle:Section')
                            ->findAll();

        $data['sections'] = $section;

        $teacher = $this->getDoctrine()
                            ->getRepository('AppBundle:Teacher')
                            ->findAll();

        $data['teachers'] = $teacher;

        $module = $this->getDoctrine()
                            ->getRepository('AppBundle:Module')
                            ->findAll();

        $data['modules'] = $module;

        $course = $this->getDoctrine()
                            ->getRepository('AppBundle:Course')
                            ->findAll();

        $data['courses'] = $course;

        $assessment_type_system = $this->getDoctrine()
                            ->getRepository('AppBundle:AssessmentTypeSystem')
                            ->findAll();

        $data['assessment_type_systems'] = $assessment_type_system;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $data['form'] = [];
          $school_session_data = $form->getData();
          $data['form'] = $school_session_data;

          $school_session = new Schoolsession();
          $mysection = $this->getDoctrine()
                              ->getRepository('AppBundle:Section')
                              ->findOneById($school_session_data['session_section']);
          $myteacher = $this->getDoctrine()
                              ->getRepository('AppBundle:Teacher')
                              ->findOneById($school_session_data['session_teacher']);
          $mymodule = $this->getDoctrine()
                              ->getRepository('AppBundle:Module')
                              ->findOneById($school_session_data['module_id']);
          $mycourse = $this->getDoctrine()
                              ->getRepository('AppBundle:Course')
                              ->findOneById($school_session_data['course_id']);
          $assessment_type_system_id = $this->getDoctrine()
                                            ->getRepository('AppBundle:AssessmentTypeSystem')
                                            ->findOneById($school_session_data['assessment_type_system_id']);

          $school_session->setSessionCode($school_session_data['session_code']);
          $school_session->setSessionName($school_session_data['session_name']);
          $school_session->setSectionId($mysection);
          $school_session->setTeacherId($myteacher);
          $school_session->setCourseModuleType($school_session_data['course_module_type']);
          $school_session->setCourseId($mycourse);
          $school_session->setModuleId($mymodule);
          $school_session->setAssessmentTypeSystemId($assessment_type_system_id);
          $school_session->setSessionStartDate($school_session_data['session_start_date']);
          $school_session->setSessionEndDate($school_session_data['session_end_date']);
          $school_session->setCreatedBy($session->get('user_id'));

          $em = $this->getDoctrine()->getManager();
          $em->persist($school_session);
          $em->flush();

          /* add session result for each student */
          if ($school_session->getCourseModuleType() == 'course'){
            $prerequisites = $this->getDoctrine()
                                  ->getRepository('AppBundle:Prerequisite')
                                  ->findBy(
                                    array('courseId' => $mycourse)
                                  );
          } else {
            $prerequisites = $this->getDoctrine()
                                  ->getRepository('AppBundle:Prerequisite')
                                  ->findBy(
                                    array('moduleId' => $mymodule)
                                  );
          }

          $data['prerequisites'] = $prerequisites;

          $students = $this->getDoctrine()
                              ->getRepository('AppBundle:Student')
                              ->findBy(
                                array('sectionId' => $school_session->getSectionId())
                              );

          $data['students'] = $students;

          if(!$prerequisites){
            foreach ($students as $student){
              $session_result = new SessionResult();

              $session_result->setSessionId($school_session);
              $session_result->setStudentId($student);

              $session_result->setCreatedBy($session->get('user_id'));

              $em = $this->getDoctrine()->getManager();
              $em->persist($session_result);
              $em->flush();
            }
          } else {
            foreach ($students as $student){
              foreach ($prerequisites as $prerequisite){
                if ($school_session->getCourseModuleType() == 'course'){
                  $prerequisite_school_session = $this->getDoctrine()
                                                      ->getRepository('AppBundle:Schoolsession')
                                                      ->findOneBy(
                                                        array('courseId' => $prerequisite->getCourseId())
                                                      );
                } else {
                  $prerequisite_school_session = $this->getDoctrine()
                                                      ->getRepository('AppBundle:Schoolsession')
                                                      ->findOneBy(
                                                        array('moduleId' => $prerequisite->getModuleId())
                                                      );
                }

                $session_results = $this->getDoctrine()
                                        ->getRepository('AppBundle:SessionResult')
                                        ->findBy(
                                          array('sessionId' => $prerequisite_school_session, 'studentId' => $student)
                                        );

                $passed = true;
                foreach ($session_results as $session_result){
                  if( ($session_result->getSessionResultRemark() == 'fail') ){
                    $passed = false;
                    break;
                  }
                }
              }

              if( $passed ){
                $session_result = new SessionResult();

                $session_result->setSessionId($school_session);
                $session_result->setStudentId($student);

                $session_result->setCreatedBy($session->get('user_id'));

                $em = $this->getDoctrine()->getManager();
                $em->persist($session_result);
                $em->flush();
              }
            }
          }
          /* end session result */

          /* add assessment result for each student */
          $assessment_types = $em->getRepository('AppBundle:AssessmentType')
                                  ->createQueryBuilder('e')
                                  ->addOrderBy('e.assessmentWorth', 'ASC')
                                  ->andWhere('e.assessmentTypeSystemId = ' . $school_session->getAssessmentTypeSystemId()->getId())
                                  ->getQuery()
                                  ->execute();

          if ($school_session->getCourseModuleType() == 'course'){
            $prerequisites = $this->getDoctrine()
                                  ->getRepository('AppBundle:Prerequisite')
                                  ->findBy(
                                    array('courseId' => $mycourse)
                                  );
          } else {
            $prerequisites = $this->getDoctrine()
                                  ->getRepository('AppBundle:Prerequisite')
                                  ->findBy(
                                    array('moduleId' => $mymodule)
                                  );
          }

          $data['prerequisites'] = $prerequisites;

          $students = $this->getDoctrine()
                              ->getRepository('AppBundle:Student')
                              ->findBy(
                                array('sectionId' => $school_session->getSectionId())
                              );

          $data['students'] = $students;

          if(!$prerequisites){
            foreach ($students as $student){
              foreach ($assessment_types as $assessment_type){
                $session_result = new AssessmentResult();

                $session_result->setSessionId($school_session);
                $session_result->setStudentId($student);
                $session_result->setAssessmentTypeId($assessment_type);

                $session_result->setCreatedBy($session->get('user_id'));

                $em = $this->getDoctrine()->getManager();
                $em->persist($session_result);
              }
              $em->flush();
            }
          } else {
            foreach ($students as $student){
              foreach ($prerequisites as $prerequisite){
                if ($school_session->getCourseModuleType() == 'course'){
                  $prerequisite_school_session = $this->getDoctrine()
                                                      ->getRepository('AppBundle:Schoolsession')
                                                      ->findOneBy(
                                                        array('courseId' => $prerequisite->getCourseId())
                                                      );
                } else {
                  $prerequisite_school_session = $this->getDoctrine()
                                                      ->getRepository('AppBundle:Schoolsession')
                                                      ->findOneBy(
                                                        array('moduleId' => $prerequisite->getModuleId())
                                                      );
                }

                $session_results = $this->getDoctrine()
                                        ->getRepository('AppBundle:SessionResult')
                                        ->findBy(
                                          array('sessionId' => $prerequisite_school_session, 'studentId' => $student)
                                        );

                $passed = true;
                foreach ( $session_results as $session_result ){
                  if( ($session_result->getSessionResultRemark() == 'fail') ){
                    $passed = false;
                    break;
                  }
                }
              }

              if( $passed ){
                foreach ($assessment_types as $assessment_type){
                  $session_result = new AssessmentResult();

                  $session_result->setSessionId($school_session);
                  $session_result->setStudentId($student);
                  $session_result->setAssessmentTypeId($assessment_type);

                  $session_result->setCreatedBy($session->get('user_id'));

                  $em = $this->getDoctrine()->getManager();
                  $em->persist($session_result);
                }
                $em->flush();
              }
            }
          }
          /* end assessment result */

          return $this->redirectToRoute('session_view');
        }

        return $this->render('session/form.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Create a Session.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/session/edit/{session_id}", name="session_edit")
     */
    public function sessionEditAction(Request $request, $session_id)
    {
      $data = [];
      $data['mode'] = 'edit';

      $form = $this ->createFormBuilder()
                    ->add('session_code')
                    ->add('session_name')
                    ->add('session_section')
                    ->add('session_teacher')
                    ->add('course_module_type')
                    ->add('course_id')
                    ->add('module_id')
                    ->add('session_start_date')
                    ->add('session_end_date')
                    ->getForm();

      $school_session = $this->getDoctrine()
                          ->getRepository('AppBundle:Schoolsession')
                          ->findOneById($session_id);

      $section = $this->getDoctrine()
                          ->getRepository('AppBundle:Section')
                          ->findAll();

      $data['sections'] = $section;

      $teacher = $this->getDoctrine()
                          ->getRepository('AppBundle:Teacher')
                          ->findAll();

      $data['teachers'] = $teacher;

      $module = $this->getDoctrine()
                          ->getRepository('AppBundle:Module')
                          ->findAll();

      $data['modules'] = $module;

      $course = $this->getDoctrine()
                          ->getRepository('AppBundle:Course')
                          ->findAll();

      $data['courses'] = $course;

      $school_session_data['session_code'] = $school_session->getSessionCode();
      $school_session_data['session_name'] = $school_session->getSessionName();
      $school_session_data['session_section'] = $school_session->getSectionId();
      $school_session_data['session_teacher'] = $school_session->getTeacherId();
      $school_session_data['course_module_type'] = $school_session->getCourseModuleType();
      $school_session_data['course_id'] = $school_session->getCourseId();
      $school_session_data['module_id'] = $school_session->getModuleId();
      $school_session_data['session_start_date'] = $school_session->getSessionStartDate();
      $school_session_data['session_end_date'] = $school_session->getSessionEndDate();

      $session = new Session();

      if($session->get('user_name') && ($session->get('user_type') == 'admin')){
        $data['form'] = $school_session_data;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $data['form'] = [];
          $school_session_data = $form->getData();
          $data['form'] = $school_session_data;

          $mysection = $this->getDoctrine()
                              ->getRepository('AppBundle:Section')
                              ->findOneById($school_session_data['session_section']);
          $myteacher = $this->getDoctrine()
                              ->getRepository('AppBundle:Teacher')
                              ->findOneById($school_session_data['session_teacher']);

          $mymodule = $this->getDoctrine()
                            ->getRepository('AppBundle:Module')
                            ->findOneById($school_session_data['module_id']);

          $mycourse = $this->getDoctrine()
                            ->getRepository('AppBundle:Course')
                            ->findOneById($school_session_data['course_id']);

          $school_session->setSessionCode($school_session_data['session_code']);
          $school_session->setSessionName($school_session_data['session_name']);
          $school_session->setSectionId($mysection);
          $school_session->setTeacherId($myteacher);
          $school_session->setCourseModuleType($school_session_data['course_module_type']);
          $school_session->setCourseId($mymodule);
          $school_session->setModuleId($mycourse);
          $school_session->setSessionStartDate($school_session_data['session_start_date']);
          $school_session->setSessionEndDate($school_session_data['session_end_date']);

          $em = $this->getDoctrine()->getManager();
          $em->persist($school_session);
          $em->flush();

          return $this->redirectToRoute('session_view');
        }
        return $this->render('session/form.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Edit This Session.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/session/delete/{session_id}", name="session_delete")
     */
    public function sessionDeleteAction(Request $request, $session_id)
    {
      $session = new Session();

      if($session->get('user_name') && ($session->get('user_type') == 'admin')){
        $session = $this->getDoctrine()
                            ->getRepository('AppBundle:Schoolsession')
                            ->findOneById($session_id);

        $em = $this->getDoctrine()->getManager();

        $em->remove($session);
        $em->flush();

        return $this->redirectToRoute('session_view');
      } else {
        $data['message'] = 'You Are Not Qualified to Delete This Session.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/session/view", name="session_view")
     */
    public function sessionViewAction()
    {
      $session = new Session();

      if($session->get('user_name') && (($session->get('user_type') == 'admin') || ($session->get('user_type') == 'teacher') || ($session->get('user_type') == 'student'))){
        $data = [];
        $data['sessions'] = [];

        $session = $this->getDoctrine()
                            ->getRepository('AppBundle:Schoolsession')
                            ->findAll();

        $data['school_sessions'] = $session;

        $section = $this->getDoctrine()
                            ->getRepository('AppBundle:Section')
                            ->findAll();

        $data['sections'] = $section;

        $teacher = $this->getDoctrine()
                            ->getRepository('AppBundle:Teacher')
                            ->findAll();

        $data['teachers'] = $teacher;

        $module = $this->getDoctrine()
                            ->getRepository('AppBundle:Module')
                            ->findAll();

        $data['modules'] = $module;

        $course = $this->getDoctrine()
                            ->getRepository('AppBundle:Course')
                            ->findAll();

        $data['courses'] = $course;

        return $this->render('session/view.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View Sessions.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/session/view_one/{session_id}", name="session_view_one")
     */
    public function sessionViewOneAction(Request $request, $session_id)
    {
      $session = new Session();

      if($session->get('user_name') && (($session->get('user_type') == 'admin') || ($session->get('user_type') == 'teacher') || ($session->get('user_type') == 'student'))){
        $data = [];
        $data['sessions'] = [];

        $session = $this->getDoctrine()
                            ->getRepository('AppBundle:Schoolsession')
                            ->findOneById($session_id);

        $data['session'] = $session;

        $section = $this->getDoctrine()
                            ->getRepository('AppBundle:Section')
                            ->findOneById($session->getSectionId());

        $data['section'] = $section;

        $curriculum = $this->getDoctrine()
                            ->getRepository('AppBundle:Curriculum')
                            ->findOneById($section->getCurriculumId());

        $data['curriculum'] = $curriculum;

        $course = $this->getDoctrine()
                            ->getRepository('AppBundle:Course')
                            ->findAll();

        $data['courses'] = $course;

        $module = $this->getDoctrine()
                            ->getRepository('AppBundle:Module')
                            ->findAll();

        $data['modules'] = $module;

        $teacher = $this->getDoctrine()
                            ->getRepository('AppBundle:Teacher')
                            ->findAll();

        $data['teachers'] = $teacher;

        $assessment_type_system = $this->getDoctrine()
                            ->getRepository('AppBundle:AssessmentTypeSystem')
                            ->findOneById($session->getAssessmentTypeSystemId());

        $data['assessment_type_system'] = $assessment_type_system;

        $assessment_type = $this->getDoctrine()
                            ->getRepository('AppBundle:AssessmentType')
                            ->findBy(
                              array('assessmentTypeSystemId' => $assessment_type_system->getId())
                            );

        $data['assessment_types'] = $assessment_type;

        $grade_system = $this->getDoctrine()
                            ->getRepository('AppBundle:GradeSystem')
                            ->findOneById($curriculum->getGradeSystemId());

        $data['grade_system'] = $grade_system;

        return $this->render('session/view_one.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View This Session.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }
}
