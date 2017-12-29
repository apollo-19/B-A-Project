<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\AssessmentResult;

class AssessmentResultController extends Controller
{
    /**
     * @Route("/assessment_result/create/{school_session_id}", name="assessment_result_create")
     */
    public function assessmentResultCreateAction(Request $request, $school_session_id)
    {
      $session = new Session();

      if($session->get('user_id') && ($session->get('user_type') == 'admin')){
        $data = [];
        $data['mode'] = 'new';

        $form = $this ->createFormBuilder()
                      ->add('assessment_type')
                      ->add('student_id')
                      ->add('result_value')
                      ->getForm();

        $school_session = $this->getDoctrine()
                                ->getRepository('AppBundle:Schoolsession')
                                ->findOneById($school_session_id);

        $data['school_session'] = $school_session;

        if ($school_session->getCourseModuleType() == 'course'){
          $prerequisites = $this->getDoctrine()
                                ->getRepository('AppBundle:Prerequisite')
                                ->findBy(
                                  array('courseId' => $school_session->getCourseId())
                                );
        } else {
          $prerequisites = $this->getDoctrine()
                                ->getRepository('AppBundle:Prerequisite')
                                ->findBy(
                                  array('moduleId' => $school_session->getModuleId())
                                );
        }

        $data['prerequisites'] = $prerequisites;

        $students = $this->getDoctrine()
                            ->getRepository('AppBundle:Student')
                            ->findBy(
                              array('sectionId' => $school_session->getSectionId())
                            );

        $data['students'] = $students;

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
                                    array('sessionId' => $prerequisite_school_session)
                                  );

          foreach ($students as $student){
            foreach ($session_results as $session_result) {
              if( ($session_result->getStudentId() == $student) && ($session_result->getSessionResultRemark() == 'fail') ){

                $student->getId();
                $students->add($student);

                $students = $this->getDoctrine()
                                    ->getRepository('AppBundle:Student')
                                    ->findBy(
                                      array('sectionId' => $school_session->getSectionId())
                                    );

                $data['students'] = $students;
              }
            }
          }
        }









        $em = $this->getDoctrine()->getManager();

        $assessment_type = $em->getRepository('AppBundle:AssessmentType')
                                ->createQueryBuilder('e')
                                ->addOrderBy('e.assessmentWorth', 'ASC')
                                ->andWhere('e.assessmentTypeSystemId = ' . $school_session->getAssessmentTypeSystemId()->getId())
                                ->getQuery()
                                ->execute();

        $data['assessment_types'] = $assessment_type;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $data['form'] = [];
          $assessment_result_data = $form->getData();
          $data['form'] = $assessment_result_data;

          $assessment_result = new AssessmentResult();
          $assessment_result->setAssessmentTypeId($assessment_result_data['assessment_type']);
          $assessment_result->setSessionId($school_session->getId());
          $assessment_result->setStudentId($assessment_result_data['student_id']);
          $assessment_result->setResultValue($assessment_result_data['result_value']);

          $assessment_result->setCreatedBy($session->get('user_id'));

          $em = $this->getDoctrine()->getManager();
          $em->persist($assessment_result);
          $em->flush();

          return $this->redirect($this->generateUrl('assessment_result_view', array('school_session_id' => $school_session_id)));
        }

        return $this->render('assessment/result_form.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Create an Assessment Result.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/assessment_result/edit/{assessment_result_id}", name="assessment_result_edit")
     */
    public function assessmentResultEditAction(Request $request, $assessment_result_id)
    {
      $data = [];
      $data['mode'] = 'edit';

      $form = $this ->createFormBuilder()
                    ->add('assessment_session_id')
                    ->add('student_id')
                    ->add('result_value')
                    ->getForm();

      $assessment_session = $this->getDoctrine()
                          ->getRepository('AppBundle:AssessmentSession')
                          ->findAll();

      $data['assessment_sessions'] = $assessment_session;

      $student = $this->getDoctrine()
                          ->getRepository('AppBundle:Student')
                          ->findAll();

      $data['students'] = $student;
      $assessment_result = $this->getDoctrine()
                          ->getRepository('AppBundle:AssessmentResult')
                          ->findOneById($assessment_result_id);

      $assessment_result_data['assessment_id'] = $assessment_result->getAssessmentSessionId();
      $assessment_result_data['student_id'] = $assessment_result->getStudentId();
      $assessment_result_data['result_value'] = $assessment_result->getResultValue();

      $session = new Session();

      if($session->get('user_name') && ($session->get('user_type') == 'admin')){
        $data['form'] = $assessment_result_data;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $data['form'] = [];
          $assessment_result_data = $form->getData();
          $data['form'] = $assessment_result_data;

          $assessment_result->setAssessmentSessionId($assessment_result_data['assessment_session_id']);
          $assessment_result->setStudentId($assessment_result_data['student_id']);
          $assessment_result->setResultValue($assessment_result_data['result_value']);

          $em = $this->getDoctrine()->getManager();
          $em->persist($assessment_result);
          $em->flush();

          return $this->redirectToRoute('assessment_result_view');
        }
        return $this->render('assessment/result_form.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to Edit This Assessment Result.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/assessment_result/delete/{assessment_result_id}", name="assessment_result_delete")
     */
    public function assessmentTypeDeleteAction(Request $request, $assessment_result_id)
    {
      $session = new Session();

      if($session->get('user_name') && ($session->get('user_type') == 'admin')){
        $assessment_result = $this->getDoctrine()
                            ->getRepository('AppBundle:AssessmentResult')
                            ->findOneById($assessment_result_id);

        $em = $this->getDoctrine()->getManager();

        $em->remove($assessment_result);
        $em->flush();

        return $this->redirectToRoute('assessment_result_view');
      } else {
        $data['message'] = 'You Are Not Qualified to Delete This Assessment Type.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

    /**
     * @Route("/assessment_result/view/{school_session_id}", name="assessment_result_view")
     */
    public function assessmentTypeViewAction(Request $request, $school_session_id)
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_type') && ($session->get('user_type') == 'admin')){
        $school_session = $this->getDoctrine()
                            ->getRepository('AppBundle:Schoolsession')
                            ->findOneById($school_session_id);

        $data['school_session'] = $school_session;

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
                        ->andWhere('e.sectionId = ' . $school_session->getSectionId()->getId())
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
        $data['message'] = 'You Are Not Qualified to View Assessment Types.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }
}
