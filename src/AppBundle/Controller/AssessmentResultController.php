<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\AssessmentResult;
use Symfony\Component\HttpFoundation\JsonResponse;

class AssessmentResultController extends Controller
{
    /**
     * @Route("/assessment_result/create/{school_session_id}", name="assessment_result_create")
     */
    public function assessmentResultGetAction(Request $request, $school_session_id)
    {
      $session = new Session();

      $school_session = $this->getDoctrine()
                              ->getRepository('AppBundle:Schoolsession')
                              ->findOneById($school_session_id);
      if ($school_session->getCourseModuleType() == 'course'){
        $mycourse = $this->getDoctrine()
                          ->getRepository('AppBundle:Course')
                          ->findOneById($school_session->getCourseId());
      } else {
        $mymodule = $this->getDoctrine()
                          ->getRepository('AppBundle:Module')
                          ->findOneById($school_session->getModuleId());
      }

      if( ($session->get('user_type') == 'teacher') && ($session->get('user_id') == $school_session->getTeacherId()->getId()) ){
        /* add assessment result for each student */
        $em = $this->getDoctrine()->getManager();

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

        if($prerequisites == NULL){
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
                                                    array('courseId' => $prerequisite->getPrerequisiteCourseId())
                                                    );
              } else {
                $prerequisite_school_session = $this->getDoctrine()
                                                    ->getRepository('AppBundle:Schoolsession')
                                                    ->findOneBy(
                                                    array('moduleId' => $prerequisite->getPrerequisiteModuleId())
                                                    );
              }

              $session_results = $this->getDoctrine()
                                      ->getRepository('AppBundle:SessionResult')
                                      ->findBy(
                                      array('sessionId' => $prerequisite_school_session, 'studentId' => $student)
                                      );

              $passed = true;
              if ( $session_results == NULL ){
                $passed = false;
                break;
              } else {
                foreach ( $session_results as $session_result ){
                  if( ($session_result->getSessionResultRemark() == 'fail') || ($session_result->getSessionResultRemark() == '') ){
                    $passed = false;
                    break;
                  }
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
        return $this->redirect($this->generateUrl('session_result_create', array('school_session_id' => $school_session->getId())));
      } else {
        $data['message'] = 'You Are Not Qualified to Start Assessment Result.';
        return $this->render('accessDenied.html.twig', $data);
      }

    }

    /**
     * @Route("/assessment_result/edit/{assessment_result_id}", name="assessment_result_edit")
     */
    public function assessmentResultEditAction(Request $request, $assessment_result_id)
    {
      $session = new Session();

      $assessment_result = $this->getDoctrine()
                                ->getRepository('AppBundle:AssessmentResult')
                                ->findOneById($assessment_result_id);

      $school_session = $this->getDoctrine()
                          ->getRepository('AppBundle:Schoolsession')
                          ->findOneById($assessment_result->getSessionId());

      if( ($session->get('user_type') == 'teacher' && $session->get('user_id') == $school_session->getTeacherId()->getId()) ){
        /* set result */
        $result_value = $request->request->get('result_value');

        $assessment_result->setResultValue( floatval($result_value) );

        $em = $this->getDoctrine()->getManager();
        $em->persist($assessment_result);
        $em->flush();
        /* end set result */

        /* get total result */
        $student_id = $assessment_result->getStudentId()->getId();
        $session_id = $assessment_result->getSessionId()->getId();

        $assessment_results = $this->getDoctrine()
                                    ->getRepository('AppBundle:AssessmentResult')
                                    ->findBy(
                                      array('studentId' => $student_id, 'sessionId' => $session_id)
                                    );
        $total_result = 0;
        foreach ($assessment_results as $value) {
          $total_result = $total_result + floatval($value->getResultValue());
        }
        /* end get total result */

        $data = array('student' => $student_id, 'result' => $total_result);
        return new JsonResponse($data);
      } else {
        $data['message'] = 'You Are Not Qualified to Fill This Assessment Result.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/assessment_result/view/{school_session_id}", name="assessment_result_view")
     */
    public function assessmentTypeViewAction(Request $request, $school_session_id)
    {
      $session = new Session();
      $data['today'] = date("Y-m-d");

      $school_session = $this->getDoctrine()
                          ->getRepository('AppBundle:Schoolsession')
                          ->findOneById($school_session_id);

      $data['school_session'] = $school_session;

      if( ($session->get('user_type') == 'admin') || ($session->get('user_type') == 'teacher' && $session->get('user_id') == $school_session->getTeacherId()->getId()) ){
        $section = $this->getDoctrine()
                            ->getRepository('AppBundle:Section')
                            ->findOneById($school_session->getSectionId());

        $data['section'] = $section;

        $curriculum = $this->getDoctrine()
                            ->getRepository('AppBundle:Curriculum')
                            ->findOneById($section->getCurriculumId());

        $data['curriculum'] = $curriculum;

        if ($school_session->getCourseModuleType() == 'course'){
          $prerequisite = $this->getDoctrine()
                                ->getRepository('AppBundle:Prerequisite')
                                ->findBy(
                                  array('courseId' => $school_session->getCourseId())
                                );
        } else {
          $prerequisite = $this->getDoctrine()
                                ->getRepository('AppBundle:Prerequisite')
                                ->findBy(
                                  array('moduleId' => $school_session->getModuleId())
                                );
        }

        $data['prerequisites'] = $prerequisite;

        $em = $this->getDoctrine()->getManager();

        $students = $em->getRepository('AppBundle:Student')
                        ->createQueryBuilder('e')
                        ->addOrderBy('e.admissionNumber', 'ASC')
                        ->getQuery()
                        ->execute();

        $data['students'] = $students;

        $assessment_result = $em->getRepository('AppBundle:AssessmentResult')
                                ->createQueryBuilder('e')
                                ->addOrderBy('e.assessmentTypeId', 'DESC')
                                ->andWhere('e.sessionId = ' . $school_session_id)
                                ->getQuery()
                                ->execute();

        $data['assessment_results'] = $assessment_result;

        // Add Student to Session
        if ($school_session->getCourseModuleType() == 'course'){
          $school_sessions = $em->getRepository('AppBundle:Schoolsession')
                                ->createQueryBuilder('ss')
                                ->andWhere('ss.courseId = ' . $school_session->getCourseId()->getId())
                                ->andWhere('ss.id != ' . $school_session->getId())
                                ->getQuery()
                                ->execute();
        } else {
          $school_sessions = $em->getRepository('AppBundle:Schoolsession')
                                ->createQueryBuilder('ss')
                                ->andWhere('ss.moduleId = ' . $school_session->getModuleId()->getId())
                                ->andWhere('ss.id != ' . $school_session->getId())
                                ->getQuery()
                                ->execute();
        }

        $session_results = [];
        foreach ($school_sessions as $school_session) {
          $session_result = $em->getRepository('AppBundle:SessionResult')
                                ->createQueryBuilder('sr')
                                ->addOrderBy('sr.studentId', 'ASC')
                                ->andWhere('sr.sessionId = ' . $school_session->getId())
                                ->andWhere("sr.sessionResultRemark = 'fail'")
                                ->getQuery()
                                ->execute();

          if( $session_result != null )
            array_push($session_results, $session_result);
        }

        $session_result_adds = [];
        foreach ($school_sessions as $school_session) {
          $session_result_add = $em->getRepository('AppBundle:SessionResultAdd')
                                ->createQueryBuilder('sr')
                                ->addOrderBy('sr.studentId', 'ASC')
                                ->getQuery()
                                ->execute();

          if( $session_result_add != null )
            array_push($session_result_adds, $session_result_add);
        }

        $results = [];
        foreach ($session_results as $session_result_array){
          foreach ($session_result_array as $session_result){
            array_push($results, $session_result);
          }
        }

        foreach ($results as $key => $session_results) {
          foreach ($session_result_adds as $session_result_add_array){
            foreach ($session_result_add_array as $session_result_add){
              if( ($session_result_add->getStudentId() == $session_results->getStudentId()) ){
                unset($results[$key]);
              }
            }
          }
        }
        $data['results'] = $results;
        // End Add Student to Session

        $assessment_type = $em->getRepository('AppBundle:AssessmentType')
                                ->createQueryBuilder('at')
                                ->addOrderBy('at.assessmentWorth', 'ASC')
                                ->andWhere('at.assessmentTypeSystemId = ' . $school_session->getAssessmentTypeSystemId()->getId())
                                ->getQuery()
                                ->execute();

        $data['assessment_types'] = $assessment_type;

        $grade = $em->getRepository('AppBundle:Grade')
                                ->createQueryBuilder('gr')
                                ->addOrderBy('gr.startPoint', 'DESC')
                                ->andWhere('gr.gradeSystemId = ' . $curriculum->getGradeSystemId()->getId())
                                ->getQuery()
                                ->execute();

        $data['grades'] = $grade;
        $data['school_session_id'] = $school_session_id;

        return $this->render('assessment/result_view.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View Assessment Result.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }
}
