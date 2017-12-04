<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/admin')) {
            // admin_home
            if ('/admin' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin_home',);
            }

            // admin_create
            if ('/admin/create' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\AdminController::adminCreateAction',  '_route' => 'admin_create',);
            }

            // admin_edit
            if (0 === strpos($pathinfo, '/admin/edit') && preg_match('#^/admin/edit/(?P<admin_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_edit')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::adminEditAction',));
            }

            // admin_delete
            if (0 === strpos($pathinfo, '/admin/delete') && preg_match('#^/admin/delete/(?P<admin_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_delete')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::adminDeleteAction',));
            }

            if (0 === strpos($pathinfo, '/admin/view')) {
                // admin_view
                if ('/admin/view' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\AdminController::adminViewAction',  '_route' => 'admin_view',);
                }

                // admin_view_one
                if (0 === strpos($pathinfo, '/admin/view_one') && preg_match('#^/admin/view_one/(?P<admin_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_view_one')), array (  '_controller' => 'AppBundle\\Controller\\AdminController::adminViewOneAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/batch')) {
            // batch_home
            if ('/batch' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\BatchController::indexAction',  '_route' => 'batch_home',);
            }

            // batch_create
            if ('/batch/create' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\BatchController::batchCreateAction',  '_route' => 'batch_create',);
            }

            // batch_edit
            if (0 === strpos($pathinfo, '/batch/edit') && preg_match('#^/batch/edit/(?P<batch_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'batch_edit')), array (  '_controller' => 'AppBundle\\Controller\\BatchController::batchEditAction',));
            }

            // batch_delete
            if (0 === strpos($pathinfo, '/batch/delete') && preg_match('#^/batch/delete/(?P<batch_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'batch_delete')), array (  '_controller' => 'AppBundle\\Controller\\BatchController::batchDeleteAction',));
            }

            if (0 === strpos($pathinfo, '/batch/view')) {
                // batch_view
                if ('/batch/view' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\BatchController::batchViewAction',  '_route' => 'batch_view',);
                }

                // batch_view_one
                if (0 === strpos($pathinfo, '/batch/view_one') && preg_match('#^/batch/view_one/(?P<batch_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'batch_view_one')), array (  '_controller' => 'AppBundle\\Controller\\BatchController::batchViewOneAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/course')) {
            // course_home
            if ('/course' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CourseController::indexAction',  '_route' => 'course_home',);
            }

            // course_create
            if ('/course/create' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CourseController::courseCreateAction',  '_route' => 'course_create',);
            }

            // course_edit
            if (0 === strpos($pathinfo, '/course/edit') && preg_match('#^/course/edit/(?P<course_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_edit')), array (  '_controller' => 'AppBundle\\Controller\\CourseController::courseEditAction',));
            }

            // course_delete
            if (0 === strpos($pathinfo, '/course/delete') && preg_match('#^/course/delete/(?P<course_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_delete')), array (  '_controller' => 'AppBundle\\Controller\\CourseController::courseDeleteAction',));
            }

            if (0 === strpos($pathinfo, '/course/view')) {
                // course_view
                if ('/course/view' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\CourseController::courseViewAction',  '_route' => 'course_view',);
                }

                // course_view_one
                if (0 === strpos($pathinfo, '/course/view_one') && preg_match('#^/course/view_one/(?P<course_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'course_view_one')), array (  '_controller' => 'AppBundle\\Controller\\CourseController::courseViewOneAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/curriculum')) {
            // curriculum_home
            if ('/curriculum' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CurriculumController::indexAction',  '_route' => 'curriculum_home',);
            }

            // curriculum_create
            if ('/curriculum/create' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\CurriculumController::curriculumCreateAction',  '_route' => 'curriculum_create',);
            }

            // curriculum_edit
            if (0 === strpos($pathinfo, '/curriculum/edit') && preg_match('#^/curriculum/edit/(?P<curriculum_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'curriculum_edit')), array (  '_controller' => 'AppBundle\\Controller\\CurriculumController::curriculumEditAction',));
            }

            // curriculum_struct
            if (0 === strpos($pathinfo, '/curriculum/struct') && preg_match('#^/curriculum/struct/(?P<curriculum_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'curriculum_struct')), array (  '_controller' => 'AppBundle\\Controller\\CurriculumController::curriculumStructAction',));
            }

            // curriculum_delete
            if (0 === strpos($pathinfo, '/curriculum/delete') && preg_match('#^/curriculum/delete/(?P<curriculum_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'curriculum_delete')), array (  '_controller' => 'AppBundle\\Controller\\CurriculumController::curriculumDeleteAction',));
            }

            if (0 === strpos($pathinfo, '/curriculum/view')) {
                // curriculum_view
                if ('/curriculum/view' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\CurriculumController::curriculumViewAction',  '_route' => 'curriculum_view',);
                }

                // curriculum_view_one
                if (0 === strpos($pathinfo, '/curriculum/view_one') && preg_match('#^/curriculum/view_one/(?P<curriculum_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'curriculum_view_one')), array (  '_controller' => 'AppBundle\\Controller\\CurriculumController::curriculumViewOneAction',));
                }

            }

        }

        // default_home
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'default_home');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'default_home',);
        }

        // dashboard
        if ('/dashboard' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::dashboardAction',  '_route' => 'dashboard',);
        }

        if (0 === strpos($pathinfo, '/department')) {
            // department_home
            if ('/department' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DepartmentController::indexAction',  '_route' => 'department_home',);
            }

            // department_create
            if ('/department/create' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DepartmentController::departmentHireAction',  '_route' => 'department_create',);
            }

            // department_edit
            if (0 === strpos($pathinfo, '/department/edit') && preg_match('#^/department/edit/(?P<department_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'department_edit')), array (  '_controller' => 'AppBundle\\Controller\\DepartmentController::departmentEditAction',));
            }

            // department_delete
            if (0 === strpos($pathinfo, '/department/delete') && preg_match('#^/department/delete/(?P<department_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'department_delete')), array (  '_controller' => 'AppBundle\\Controller\\DepartmentController::departmentDeleteAction',));
            }

            if (0 === strpos($pathinfo, '/department/view')) {
                // department_view
                if ('/department/view' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DepartmentController::departmentViewAction',  '_route' => 'department_view',);
                }

                // department_view_one
                if (0 === strpos($pathinfo, '/department/view_one') && preg_match('#^/department/view_one/(?P<department_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'department_view_one')), array (  '_controller' => 'AppBundle\\Controller\\DepartmentController::departmentViewOneAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/s')) {
            // user_signin
            if ('/signin' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_signin');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::signinAction',  '_route' => 'user_signin',);
            }

            // user_signout
            if ('/signout' === $trimmedPathinfo) {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user_signout');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::signOutAction',  '_route' => 'user_signout',);
            }

            if (0 === strpos($pathinfo, '/school')) {
                // school_home
                if ('/school' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SchoolController::indexAction',  '_route' => 'school_home',);
                }

                // school_create
                if ('/school/create' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SchoolController::schoolCreateAction',  '_route' => 'school_create',);
                }

                // school_edit
                if (0 === strpos($pathinfo, '/school/edit') && preg_match('#^/school/edit/(?P<school_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'school_edit')), array (  '_controller' => 'AppBundle\\Controller\\SchoolController::schoolEditAction',));
                }

                // school_delete
                if (0 === strpos($pathinfo, '/school/delete') && preg_match('#^/school/delete/(?P<school_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'school_delete')), array (  '_controller' => 'AppBundle\\Controller\\SchoolController::schoolDeleteAction',));
                }

                if (0 === strpos($pathinfo, '/school/view')) {
                    // school_view
                    if ('/school/view' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\SchoolController::schoolViewAction',  '_route' => 'school_view',);
                    }

                    // school_view_one
                    if (0 === strpos($pathinfo, '/school/view_one') && preg_match('#^/school/view_one/(?P<school_id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'school_view_one')), array (  '_controller' => 'AppBundle\\Controller\\SchoolController::schoolViewOneAction',));
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/section')) {
                // section_home
                if ('/section' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SectionController::indexAction',  '_route' => 'section_home',);
                }

                // section_create
                if ('/section/create' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SectionController::sectionCreateAction',  '_route' => 'section_create',);
                }

                // section_edit
                if (0 === strpos($pathinfo, '/section/edit') && preg_match('#^/section/edit/(?P<section_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'section_edit')), array (  '_controller' => 'AppBundle\\Controller\\SectionController::sectionEditAction',));
                }

                // section_delete
                if (0 === strpos($pathinfo, '/section/delete') && preg_match('#^/section/delete/(?P<section_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'section_delete')), array (  '_controller' => 'AppBundle\\Controller\\SectionController::sectionDeleteAction',));
                }

                if (0 === strpos($pathinfo, '/section/view')) {
                    // section_view
                    if ('/section/view' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\SectionController::sectionViewAction',  '_route' => 'section_view',);
                    }

                    // section_view_one
                    if (0 === strpos($pathinfo, '/section/view_one') && preg_match('#^/section/view_one/(?P<section_id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'section_view_one')), array (  '_controller' => 'AppBundle\\Controller\\SectionController::sectionViewOneAction',));
                    }

                }

            }

            elseif (0 === strpos($pathinfo, '/semester')) {
                // semester_home
                if ('/semester' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SemesterController::indexAction',  '_route' => 'semester_home',);
                }

                // semester_create
                if ('/semester/create' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SemesterController::semesterCreateAction',  '_route' => 'semester_create',);
                }

                // semester_edit
                if (0 === strpos($pathinfo, '/semester/edit') && preg_match('#^/semester/edit/(?P<semester_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'semester_edit')), array (  '_controller' => 'AppBundle\\Controller\\SemesterController::semesterEditAction',));
                }

                // semester_delete
                if (0 === strpos($pathinfo, '/semester/delete') && preg_match('#^/semester/delete/(?P<semester_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'semester_delete')), array (  '_controller' => 'AppBundle\\Controller\\SemesterController::semesterDeleteAction',));
                }

                // semester_view
                if ('/semester/view' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\SemesterController::semesterViewAction',  '_route' => 'semester_view',);
                }

            }

            elseif (0 === strpos($pathinfo, '/student')) {
                // student_home
                if ('/student' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\StudentController::indexAction',  '_route' => 'student_home',);
                }

                // student_register
                if ('/student/register' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\StudentController::studentCreateAction',  '_route' => 'student_register',);
                }

                // student_edit
                if (0 === strpos($pathinfo, '/student/edit') && preg_match('#^/student/edit/(?P<student_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_edit')), array (  '_controller' => 'AppBundle\\Controller\\StudentController::studentEditAction',));
                }

                // student_delete
                if (0 === strpos($pathinfo, '/student/delete') && preg_match('#^/student/delete/(?P<student_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_delete')), array (  '_controller' => 'AppBundle\\Controller\\StudentController::studentDeleteAction',));
                }

                if (0 === strpos($pathinfo, '/student/view')) {
                    // student_view
                    if ('/student/view' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\StudentController::studentViewAction',  '_route' => 'student_view',);
                    }

                    // student_view_one
                    if (0 === strpos($pathinfo, '/student/view_one') && preg_match('#^/student/view_one/(?P<student_id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'student_view_one')), array (  '_controller' => 'AppBundle\\Controller\\StudentController::studentViewOneAction',));
                    }

                }

            }

        }

        elseif (0 === strpos($pathinfo, '/module')) {
            // module_home
            if ('/module' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ModuleController::indexAction',  '_route' => 'module_home',);
            }

            // module_create
            if ('/module/create' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\ModuleController::moduleCreateAction',  '_route' => 'module_create',);
            }

            // module_edit
            if (0 === strpos($pathinfo, '/module/edit') && preg_match('#^/module/edit/(?P<module_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'module_edit')), array (  '_controller' => 'AppBundle\\Controller\\ModuleController::moduleEditAction',));
            }

            // module_delete
            if (0 === strpos($pathinfo, '/module/delete') && preg_match('#^/module/delete/(?P<module_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'module_delete')), array (  '_controller' => 'AppBundle\\Controller\\ModuleController::moduleDeleteAction',));
            }

            if (0 === strpos($pathinfo, '/module/view')) {
                // module_view
                if ('/module/view' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\ModuleController::moduleViewAction',  '_route' => 'module_view',);
                }

                // module_view_one
                if (0 === strpos($pathinfo, '/module/view_one') && preg_match('#^/module/view_one/(?P<module_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'module_view_one')), array (  '_controller' => 'AppBundle\\Controller\\ModuleController::moduleViewOneAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/prerequisite')) {
            // prerequisite_home
            if ('/prerequisite' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\PrerequisiteController::indexAction',  '_route' => 'prerequisite_home',);
            }

            // prerequisite_create
            if ('/prerequisite/create' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\PrerequisiteController::prerequisiteCreateAction',  '_route' => 'prerequisite_create',);
            }

            // prerequisite_edit
            if (0 === strpos($pathinfo, '/prerequisite/edit') && preg_match('#^/prerequisite/edit/(?P<prerequisite_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'prerequisite_edit')), array (  '_controller' => 'AppBundle\\Controller\\PrerequisiteController::prerequisiteEditAction',));
            }

            // prerequisite_delete
            if (0 === strpos($pathinfo, '/prerequisite/delete') && preg_match('#^/prerequisite/delete/(?P<prerequisite_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'prerequisite_delete')), array (  '_controller' => 'AppBundle\\Controller\\PrerequisiteController::prerequisiteDeleteAction',));
            }

            if (0 === strpos($pathinfo, '/prerequisite/view')) {
                // prerequisite_view
                if ('/prerequisite/view' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PrerequisiteController::prerequisiteViewAction',  '_route' => 'prerequisite_view',);
                }

                // prerequisite_view_one
                if (0 === strpos($pathinfo, '/prerequisite/view_one') && preg_match('#^/prerequisite/view_one/(?P<prerequisite_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'prerequisite_view_one')), array (  '_controller' => 'AppBundle\\Controller\\PrerequisiteController::prerequisiteViewOneAction',));
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/teacher')) {
            // teacher_home
            if ('/teacher' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\TeacherController::indexAction',  '_route' => 'teacher_home',);
            }

            // teacher_hire
            if ('/teacher/hire' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\TeacherController::teacherHireAction',  '_route' => 'teacher_hire',);
            }

            // teacher_edit
            if (0 === strpos($pathinfo, '/teacher/edit') && preg_match('#^/teacher/edit/(?P<teacher_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'teacher_edit')), array (  '_controller' => 'AppBundle\\Controller\\TeacherController::teacherEditAction',));
            }

            // teacher_delete
            if (0 === strpos($pathinfo, '/teacher/delete') && preg_match('#^/teacher/delete/(?P<teacher_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'teacher_delete')), array (  '_controller' => 'AppBundle\\Controller\\TeacherController::teacherDeleteAction',));
            }

            if (0 === strpos($pathinfo, '/teacher/view')) {
                // teacher_view
                if ('/teacher/view' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\TeacherController::teacherViewAction',  '_route' => 'teacher_view',);
                }

                // teacher_view_one
                if (0 === strpos($pathinfo, '/teacher/view_one') && preg_match('#^/teacher/view_one/(?P<teacher_id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'teacher_view_one')), array (  '_controller' => 'AppBundle\\Controller\\TeacherController::teacherViewOneAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
