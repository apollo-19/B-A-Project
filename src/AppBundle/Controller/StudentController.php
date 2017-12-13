<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\LogInTable;
use AppBundle\Entity\Student;

class StudentController extends Controller
{
    /**
     * @Route("/student", name="student_home")
     */
    public function indexAction()
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_type') && ($session->get('user_type') == 'student'))
        return $this->render('student/index.html.twig');
      else
        return $this->redirectToRoute('user_signin');
    }

    /**
     * @Route("/student/register", name="student_register")
     */
    public function studentCreateAction(Request $request)
    {
      $session = new Session();

      if($session->get('user_name') && $session->get('user_type') && ($session->get('user_type') == 'admin')){
        $data = [];
        $data['mode'] = 'new';
        $data['form'] = [];

        $form = $this ->createFormBuilder()
                      ->add('admission_number')
                      ->add('first_name_en')
                      ->add('middle_name_en')
                      ->add('last_name_en')
                      ->add('first_name_am')
                      ->add('middle_name_am')
                      ->add('last_name_am')
                      ->add('sex')
                      ->add('nationality')
                      ->add('place_of_birth_town')
                      ->add('place_of_birth_region')
                      ->add('date_of_birth_gc')
                      ->add('date_of_birth_ec')
                      ->add('house_number')
                      ->add('kebele')
                      ->add('woreda_subcity')
                      ->add('town')
                      ->add('zone')
                      ->add('region')
                      ->add('po_box')
                      ->add('telephone_home')
                      ->add('telephone_mobile')
                      ->add('email_address')
                      ->add('native_language')
                      ->add('marital_status')
                      ->add('section_id')

                      ->add('pce_full_name')
                      ->add('pce_relationship')
                      ->add('pce_other')
                      ->add('pce_telephone_home')
                      ->add('pce_telephone_office')
                      ->add('pce_house_number')
                      ->add('pce_kebele')
                      ->add('pce_woreda_subcity')
                      ->add('pce_town')
                      ->add('pce_zone')
                      ->add('pce_region')

                      ->add('father_full_name')
                      ->add('father_occupation')
                      ->add('father_educational_level')
                      ->add('father_telephone_home')
                      ->add('father_telephone_office')
                      ->add('father_house_number')
                      ->add('father_kebele')
                      ->add('father_woreda_subcity')
                      ->add('father_town')
                      ->add('father_zone')
                      ->add('father_region')

                      ->add('mother_full_name')
                      ->add('mother_occupation')
                      ->add('mother_educational_level')
                      ->add('mother_telephone_home')
                      ->add('mother_telephone_office')
                      ->add('mother_house_number')
                      ->add('mother_kebele')
                      ->add('mother_woreda_subcity')
                      ->add('mother_town')
                      ->add('mother_zone')
                      ->add('mother_region')

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

          if($student_data['password'] != $student_data['confirm_password'])
            $data['resultMessage'] = 'Passwords Must Match!';
          else {
            $em = $this->getDoctrine()->getManager();

            $passwordLIT = new LogInTable();
            $passwordLIT->setUserName($student_data['user_name']);
            $passwordLIT->setPassword($student_data['password']);
            $passwordLIT->setUserType('student');

            $student = new Student();
            $student->setAdmissionNumber($student_data['admission_number']);
            $student->setFirstNameEn($student_data['first_name_en']);
            $student->setMiddleNameEn($student_data['middle_name_en']);
            $student->setLastNameEn($student_data['last_name_en']);
            $student->setFirstNameAm($student_data['first_name_am']);
            $student->setMiddleNameAm($student_data['middle_name_am']);
            $student->setLastNameAm($student_data['last_name_am']);
            $student->setSex($student_data['sex']);
            $student->setNationality($student_data['nationality']);
            $student->setPlaceOfBirthTown($student_data['place_of_birth_town']);
            $student->setPlaceOfBirthRegion($student_data['place_of_birth_region']);
            $student->setDateOfBirthGc($student_data['date_of_birth_gc']);
            $student->setDateOfBirthEc($student_data['date_of_birth_ec']);
            $student->setHouseNumber($student_data['house_number']);
            $student->setKebele($student_data['kebele']);
            $student->setWoredaSubcity($student_data['woreda_subcity']);
            $student->setTown($student_data['town']);
            $student->setZone($student_data['zone']);
            $student->setRegion($student_data['region']);
            $student->setPoBox($student_data['po_box']);
            $student->setTelephoneHome($student_data['telephone_home']);
            $student->setTelephoneMobile($student_data['telephone_mobile']);
            $student->setEmailAddress($student_data['email_address']);
            $student->setNativeLanguage($student_data['native_language']);
            $student->setMaritalStatus($student_data['marital_status']);

            $student->setPceFullName($student_data['pce_full_name']);
            $student->setPceRelationship($student_data['pce_relationship']);
            $student->setPceOther($student_data['pce_other']);
            $student->setPceTelephoneHome($student_data['pce_telephone_home']);
            $student->setPceTelephoneOffice($student_data['pce_telephone_office']);
            $student->setPceHouseNumber($student_data['pce_house_number']);
            $student->setPceKebele($student_data['pce_kebele']);
            $student->setPceWoredaSubcity($student_data['pce_woreda_subcity']);
            $student->setPceTown($student_data['pce_town']);
            $student->setPceZone($student_data['pce_zone']);
            $student->setPceRegion($student_data['pce_region']);

            $student->setFatherFullName($student_data['father_full_name']);
            $student->setFatherOccupation($student_data['father_occupation']);
            $student->setFatherEducationalLevel($student_data['father_educational_level']);
            $student->setFatherTelephoneHome($student_data['father_telephone_home']);
            $student->setFatherTelephoneOffice($student_data['father_telephone_office']);
            $student->setFatherHouseNumber($student_data['father_house_number']);
            $student->setFatherKebele($student_data['father_kebele']);
            $student->setFatherWoredaSubcity($student_data['father_woreda_subcity']);
            $student->setFatherTown($student_data['father_town']);
            $student->setFatherZone($student_data['father_zone']);
            $student->setFatherRegion($student_data['father_region']);

            $student->setMotherFullName($student_data['mother_full_name']);
            $student->setMotherOccupation($student_data['mother_occupation']);
            $student->setMotherEducationalLevel($student_data['mother_educational_level']);
            $student->setMotherTelephoneHome($student_data['mother_telephone_home']);
            $student->setMotherTelephoneOffice($student_data['mother_telephone_office']);
            $student->setMotherHouseNumber($student_data['mother_house_number']);
            $student->setMotherKebele($student_data['mother_kebele']);
            $student->setMotherWoredaSubcity($student_data['mother_woreda_subcity']);
            $student->setMotherTown($student_data['mother_town']);
            $student->setMotherZone($student_data['mother_zone']);
            $student->setMotherRegion($student_data['mother_region']);

            $student->setRegisteredBy($session->get('user_id'));
            $student->setUserName($student_data['user_name']);
            $student->setSectionId($student_data['section_id']);

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

      $form = $this ->createFormBuilder()
                    ->add('admission_number')
                    ->add('first_name_en')
                    ->add('middle_name_en')
                    ->add('last_name_en')
                    ->add('first_name_am')
                    ->add('middle_name_am')
                    ->add('last_name_am')
                    ->add('sex')
                    ->add('nationality')
                    ->add('place_of_birth_town')
                    ->add('place_of_birth_region')
                    ->add('date_of_birth_gc')
                    ->add('date_of_birth_ec')
                    ->add('house_number')
                    ->add('kebele')
                    ->add('woreda_subcity')
                    ->add('town')
                    ->add('zone')
                    ->add('region')
                    ->add('po_box')
                    ->add('telephone_home')
                    ->add('telephone_mobile')
                    ->add('email_address')
                    ->add('native_language')
                    ->add('marital_status')
                    ->add('section_id')

                    ->add('pce_full_name')
                    ->add('pce_relationship')
                    ->add('pce_other')
                    ->add('pce_telephone_home')
                    ->add('pce_telephone_office')
                    ->add('pce_house_number')
                    ->add('pce_kebele')
                    ->add('pce_woreda_subcity')
                    ->add('pce_town')
                    ->add('pce_zone')
                    ->add('pce_region')

                    ->add('father_full_name')
                    ->add('father_occupation')
                    ->add('father_educational_level')
                    ->add('father_telephone_home')
                    ->add('father_telephone_office')
                    ->add('father_house_number')
                    ->add('father_kebele')
                    ->add('father_woreda_subcity')
                    ->add('father_town')
                    ->add('father_zone')
                    ->add('father_region')

                    ->add('mother_full_name')
                    ->add('mother_occupation')
                    ->add('mother_educational_level')
                    ->add('mother_telephone_home')
                    ->add('mother_telephone_office')
                    ->add('mother_house_number')
                    ->add('mother_kebele')
                    ->add('mother_woreda_subcity')
                    ->add('mother_town')
                    ->add('mother_zone')
                    ->add('mother_region')

                    ->add('user_name')
                    ->add('password')
                    ->add('confirm_password')
                    ->getForm();

      $section = $this->getDoctrine()
                          ->getRepository('AppBundle:Section')
                          ->findAll();

      $data['sections'] = $section;

      $student = $this->getDoctrine()
                          ->getRepository('AppBundle:Student')
                          ->findOneById($student_id);

      $student_data['admission_number'] = $student->getAdmissionNumber();
      $student_data['first_name_en'] = $student->getFirstNameEn();
      $student_data['middle_name_en'] = $student->getMiddleNameEn();
      $student_data['last_name_en'] = $student->getLastNameEn();
      $student_data['first_name_am'] = $student->getFirstNameAm();
      $student_data['middle_name_am'] = $student->getMiddleNameAm();
      $student_data['last_name_am'] = $student->getLastNameAm();
      $student_data['sex'] = $student->getSex();
      $student_data['nationality'] = $student->getNationality();
      $student_data['place_of_birth_town'] = $student->getPlaceOfBirthTown();
      $student_data['place_of_birth_region'] = $student->getPlaceOfBirthRegion();
      $student_data['date_of_birth_gc'] = $student->getDateOfBirthGc();
      $student_data['date_of_birth_ec'] = $student->getDateOfBirthEc();
      $student_data['house_number'] = $student->getHouseNumber();
      $student_data['kebele'] = $student->getKebele();
      $student_data['woreda_subcity'] = $student->getWoredaSubcity();
      $student_data['town'] = $student->getTown();
      $student_data['zone'] = $student->getZone();
      $student_data['region'] = $student->getRegion();
      $student_data['po_box'] = $student->getPoBox();
      $student_data['telephone_home'] = $student->getTelephoneHome();
      $student_data['telephone_mobile'] = $student->getTelephoneMobile();
      $student_data['email_address'] = $student->getEmailAddress();
      $student_data['native_language'] = $student->getNativeLanguage();
      $student_data['marital_status'] = $student->getMaritalStatus();

      $student_data['pce_full_name'] = $student->getPceFullName();
      $student_data['pce_relationship'] = $student->getPceRelationship();
      $student_data['pce_other'] = $student->getPceOther();
      $student_data['pce_telephone_home'] = $student->getPceTelephoneHome();
      $student_data['pce_telephone_office'] = $student->getPceTelephoneOffice();
      $student_data['pce_house_number'] = $student->getPceHouseNumber();
      $student_data['pce_kebele'] = $student->getPceKebele();
      $student_data['pce_woreda_subcity'] = $student->getPceWoredaSubcity();
      $student_data['pce_town'] = $student->getPceTown();
      $student_data['pce_zone'] = $student->getPceZone();
      $student_data['pce_region'] = $student->getPceRegion();

      $student_data['father_full_name'] = $student->getFatherFullName();
      $student_data['father_occupation'] = $student->getFatherOccupation();
      $student_data['father_educational_level'] = $student->getFatherEducationalLevel();
      $student_data['father_telephone_home'] = $student->getFatherTelephoneHome();
      $student_data['father_telephone_office'] = $student->getFatherTelephoneOffice();
      $student_data['father_house_number'] = $student->getFatherHouseNumber();
      $student_data['father_kebele'] = $student->getFatherKebele();
      $student_data['father_woreda_subcity'] = $student->getFatherWoredaSubcity();
      $student_data['father_town'] = $student->getFatherTown();
      $student_data['father_zone'] = $student->getFatherZone();
      $student_data['father_region'] = $student->getFatherRegion();

      $student_data['mother_full_name'] = $student->getMotherFullName();
      $student_data['mother_occupation'] = $student->getMotherOccupation();
      $student_data['mother_educational_level'] = $student->getMotherEducationalLevel();
      $student_data['mother_telephone_home'] = $student->getMotherTelephoneHome();
      $student_data['mother_telephone_office'] = $student->getMotherTelephoneOffice();
      $student_data['mother_house_number'] = $student->getMotherHouseNumber();
      $student_data['mother_kebele'] = $student->getMotherKebele();
      $student_data['mother_woreda_subcity'] = $student->getMotherWoredaSubcity();
      $student_data['mother_town'] = $student->getMotherTown();
      $student_data['mother_zone'] = $student->getMotherZone();
      $student_data['mother_region'] = $student->getMotherRegion();

      $student_data['registered_by'] = $student->getRegisteredBy();
      $student_data['section_id'] = $student->getSectionId();

      $session = new Session();

      if($session->get('user_name') && ($session->get('user_type') == 'admin')){
        $data['form'] = $student_data;

        $form->handleRequest($request);

        if($form->isSubmitted()){
          $data['form'] = [];
          $student_data = $form->getData();
          $data['form'] = $student_data;

          $student->setAdmissionNumber($student_data['admission_number']);
          $student->setFirstNameEn($student_data['first_name_en']);
          $student->setMiddleNameEn($student_data['middle_name_en']);
          $student->setLastNameEn($student_data['last_name_en']);
          $student->setFirstNameAm($student_data['first_name_am']);
          $student->setMiddleNameAm($student_data['middle_name_am']);
          $student->setLastNameAm($student_data['last_name_am']);
          $student->setSex($student_data['sex']);
          $student->setNationality($student_data['nationality']);
          $student->setPlaceOfBirthTown($student_data['place_of_birth_town']);
          $student->setPlaceOfBirthRegion($student_data['place_of_birth_region']);
          $student->setDateOfBirthGc($student_data['date_of_birth_gc']);
          $student->setDateOfBirthEc($student_data['date_of_birth_ec']);
          $student->setHouseNumber($student_data['house_number']);
          $student->setKebele($student_data['kebele']);
          $student->setWoredaSubcity($student_data['woreda_subcity']);
          $student->setTown($student_data['town']);
          $student->setZone($student_data['zone']);
          $student->setRegion($student_data['region']);
          $student->setPoBox($student_data['po_box']);
          $student->setTelephoneHome($student_data['telephone_home']);
          $student->setTelephoneMobile($student_data['telephone_mobile']);
          $student->setEmailAddress($student_data['email_address']);
          $student->setNativeLanguage($student_data['native_language']);
          $student->setMaritalStatus($student_data['marital_status']);

          $student->setPceFullName($student_data['pce_full_name']);
          $student->setPceRelationship($student_data['pce_relationship']);
          $student->setPceOther($student_data['pce_other']);
          $student->setPceTelephoneHome($student_data['pce_telephone_home']);
          $student->setPceTelephoneOffice($student_data['pce_telephone_office']);
          $student->setPceHouseNumber($student_data['pce_house_number']);
          $student->setPceKebele($student_data['pce_kebele']);
          $student->setPceWoredaSubcity($student_data['pce_woreda_subcity']);
          $student->setPceTown($student_data['pce_town']);
          $student->setPceZone($student_data['pce_zone']);
          $student->setPceRegion($student_data['pce_region']);

          $student->setFatherFullName($student_data['father_full_name']);
          $student->setFatherOccupation($student_data['father_occupation']);
          $student->setFatherEducationalLevel($student_data['father_educational_level']);
          $student->setFatherTelephoneHome($student_data['father_telephone_home']);
          $student->setFatherTelephoneOffice($student_data['father_telephone_office']);
          $student->setFatherHouseNumber($student_data['father_house_number']);
          $student->setFatherKebele($student_data['father_kebele']);
          $student->setFatherWoredaSubcity($student_data['father_woreda_subcity']);
          $student->setFatherTown($student_data['father_town']);
          $student->setFatherZone($student_data['father_zone']);
          $student->setFatherRegion($student_data['father_region']);

          $student->setMotherFullName($student_data['mother_full_name']);
          $student->setMotherOccupation($student_data['mother_occupation']);
          $student->setMotherEducationalLevel($student_data['mother_educational_level']);
          $student->setMotherTelephoneHome($student_data['mother_telephone_home']);
          $student->setMotherTelephoneOffice($student_data['mother_telephone_office']);
          $student->setMotherHouseNumber($student_data['mother_house_number']);
          $student->setMotherKebele($student_data['mother_kebele']);
          $student->setMotherWoredaSubcity($student_data['mother_woreda_subcity']);
          $student->setMotherTown($student_data['mother_town']);
          $student->setMotherZone($student_data['mother_zone']);
          $student->setMotherRegion($student_data['mother_region']);

          $student->setSectionId($student_data['section_id']);

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

      if($session->get('user_name') && $session->get('user_id') && ($session->get('user_type') == 'admin')){
        $student = $this->getDoctrine()
                            ->getRepository('AppBundle:Student')
                            ->findOneById($student_id);

        $student_user_name = $student->getUserName();

        $student_log_in_info = $this->getDoctrine()
                            ->getRepository('AppBundle:LogInTable')
                            ->findOneByUserName($student_user_name);

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

      if($session->get('user_name') && $session->get('user_id') && ($session->get('user_type') == 'admin')){
        $data = [];
        $data['students'] = [];

        $student = $this->getDoctrine()
                            ->getRepository('AppBundle:Student')
                            ->findAll();

        $school = $this->getDoctrine()
                            ->getRepository('AppBundle:School')
                            ->findAll();

        $data['schools'] = $school;

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

      if($session->get('user_name') && $session->get('user_id') && ($session->get('user_type') == 'admin')){
        $data = [];
        $data['students'] = [];

        $student = $this->getDoctrine()
                            ->getRepository('AppBundle:Student')
                            ->findOneById($student_id);

        $student_section = $student->getSectionId();

        $section = $this->getDoctrine()
                            ->getRepository('AppBundle:Section')
                            ->findOneById($student_section);

        $data['section'] = $section;

        $data['student'] = $student;

        return $this->render('student/view_one.html.twig', $data);
      } else {
        $data['message'] = 'You Are Not Qualified to View This Student.';
        return $this->render('accessDenied.html.twig', $data);
      }
    }

}
