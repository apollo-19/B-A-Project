<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\SessionResult;

class SessionResultController extends Controller
{
    /**
     * @Route("/session_result", name="session_result_home")
     */
    public function indexAction()
    {
      $session_result = new SessionResult();

      if($session_result->get('user_name') && $session_result->get('user_type')){
        return $this->render('assessment/session_result_index.html.twig', $data);
      } else
        return $this->redirectToRoute('user_signin');
    }

    /**
     * @Route("/session_result/view/{school_session_id}", name="session_result_view")
     */
    public function sessionResultViewAction($school_session_id)
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

        $assessment_session = $this->getDoctrine()
                            ->getRepository('AppBundle:AssessmentSession')
                            ->findBy(
                              array('assessmentSession' => $school_session_id)
                            );

        $data['assessment_sessions'] = $assessment_session;

        $assessment_session_id = $session->getId();
        $assessment_result = $this->getDoctrine()
                            ->getRepository('AppBundle:AssessmentResult')
                            ->findAll();

        $data['assessment_results'] = $assessment_result;

        $students = $this->getDoctrine()
                            ->getRepository('AppBundle:Student')
                            ->findBy(
                              array('sectionId' => $school_session->getSectionId())
                            );

        $data['students'] = $students;

        $assessment_type = $this->getDoctrine()
                            ->getRepository('AppBundle:AssessmentType')
                            ->findAll();

        $data['assessment_types'] = $assessment_type;

        $gradeSystemId = $curriculum->getGradeSystemId();

        $grade = $this->getDoctrine()
                            ->getRepository('AppBundle:Grade')
                            ->findBy(
                              array('gradeSystemId' => $gradeSystemId)
                            );

        $data['grades'] = $grade;
        $data['school_session_id'] = $school_session_id;

        return $this->render('session/result_view.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View Assessment Types.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }
}
