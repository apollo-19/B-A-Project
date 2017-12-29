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
     * @Route("/assessment_result/create/", name="assessment_result_create")
     */
    public function assessmentResultCreateAction(Request $request)
    {
        $var1 = $request->request->get('some_var_name');
        //make something curious, get some unbelieveable data
        $arrData = ['output' => 'here the result which will appear in div' . $var1];
        return new JsonResponse($arrData);

    }

    /**
     * @Route("/assessment_result/edit/{assessment_result_id}", name="assessment_result_edit")
     */
    public function assessmentResultEditAction(Request $request, $assessment_result_id)
    {
      $assessment_result = $this->getDoctrine()
                                ->getRepository('AppBundle:AssessmentResult')
                                ->findOneById($assessment_result_id);

      $result_value = $request->request->get('result_value');

      $assessment_result->setResultValue($result_value);

      $em = $this->getDoctrine()->getManager();
      $em->persist($assessment_result);
      $em->flush();

      $respo = array(
        'student' => $assessment_result->getStudentId()->getStudentFirstNameEn(),
        'session' => $assessment_result->getSessionId()->getSessionName(),
        'result' => $assessment_result->getResultValue()
      );

      return new JsonResponse($respo);
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

        $school_session = $assessment_result->getSessionId();
        $em = $this->getDoctrine()->getManager();

        $em->remove($assessment_result);
        $em->flush();

        return $this->redirectToRoute($this->generateUrl('assessment_result_view', array('school_session_id' => $school_session)));
      } else {
        $data['message'] = 'You Are Not Qualified to Delete This Assessment Result.';
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
