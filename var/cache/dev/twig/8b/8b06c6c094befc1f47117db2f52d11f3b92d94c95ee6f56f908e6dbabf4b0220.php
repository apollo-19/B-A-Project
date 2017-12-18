<?php

/* :admin:index.html.twig */
class __TwigTemplate_c3491efebf70b2dbfa64201af7c460a916b9ec48a4f790eb5e6afa75202997db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":admin:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7af4d51f95d45f09ed37736985342fd11862928efd19c895bd9435610ae7f903 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7af4d51f95d45f09ed37736985342fd11862928efd19c895bd9435610ae7f903->enter($__internal_7af4d51f95d45f09ed37736985342fd11862928efd19c895bd9435610ae7f903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:index.html.twig"));

        $__internal_0d6b35524d2918fbd73a51c94c90ff5a37a5dd66cb5b0b0a180f6523f7a6ca13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d6b35524d2918fbd73a51c94c90ff5a37a5dd66cb5b0b0a180f6523f7a6ca13->enter($__internal_0d6b35524d2918fbd73a51c94c90ff5a37a5dd66cb5b0b0a180f6523f7a6ca13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7af4d51f95d45f09ed37736985342fd11862928efd19c895bd9435610ae7f903->leave($__internal_7af4d51f95d45f09ed37736985342fd11862928efd19c895bd9435610ae7f903_prof);

        
        $__internal_0d6b35524d2918fbd73a51c94c90ff5a37a5dd66cb5b0b0a180f6523f7a6ca13->leave($__internal_0d6b35524d2918fbd73a51c94c90ff5a37a5dd66cb5b0b0a180f6523f7a6ca13_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ce6f0921f45946c7667192c272e48c54ce3dc0e9db117ab39fb04d52ba45e22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ce6f0921f45946c7667192c272e48c54ce3dc0e9db117ab39fb04d52ba45e22->enter($__internal_8ce6f0921f45946c7667192c272e48c54ce3dc0e9db117ab39fb04d52ba45e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_105ba5c9b9649013b01b0501208fd97f6e1ea7f7a8882c41cc7436d13703c3c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_105ba5c9b9649013b01b0501208fd97f6e1ea7f7a8882c41cc7436d13703c3c4->enter($__internal_105ba5c9b9649013b01b0501208fd97f6e1ea7f7a8882c41cc7436d13703c3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Administrator
";
        
        $__internal_105ba5c9b9649013b01b0501208fd97f6e1ea7f7a8882c41cc7436d13703c3c4->leave($__internal_105ba5c9b9649013b01b0501208fd97f6e1ea7f7a8882c41cc7436d13703c3c4_prof);

        
        $__internal_8ce6f0921f45946c7667192c272e48c54ce3dc0e9db117ab39fb04d52ba45e22->leave($__internal_8ce6f0921f45946c7667192c272e48c54ce3dc0e9db117ab39fb04d52ba45e22_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_83b5df7a6bc3dd73a2459795ca5755d429e01f0688cd281f91ebd818b578da38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83b5df7a6bc3dd73a2459795ca5755d429e01f0688cd281f91ebd818b578da38->enter($__internal_83b5df7a6bc3dd73a2459795ca5755d429e01f0688cd281f91ebd818b578da38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_83c5e327d85b74a34a187d0b63773761be6a84a2bc506c51de0996de321aa4a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c5e327d85b74a34a187d0b63773761be6a84a2bc506c51de0996de321aa4a6->enter($__internal_83c5e327d85b74a34a187d0b63773761be6a84a2bc506c51de0996de321aa4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_83c5e327d85b74a34a187d0b63773761be6a84a2bc506c51de0996de321aa4a6->leave($__internal_83c5e327d85b74a34a187d0b63773761be6a84a2bc506c51de0996de321aa4a6_prof);

        
        $__internal_83b5df7a6bc3dd73a2459795ca5755d429e01f0688cd281f91ebd818b578da38->leave($__internal_83b5df7a6bc3dd73a2459795ca5755d429e01f0688cd281f91ebd818b578da38_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_66260062bd16367f8b66bd9e51137331732179abcb88b65c6af592c4c329e689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66260062bd16367f8b66bd9e51137331732179abcb88b65c6af592c4c329e689->enter($__internal_66260062bd16367f8b66bd9e51137331732179abcb88b65c6af592c4c329e689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dea099d6d6719c71122a02ec6fb15e68d6ab3539cd30db9568aa26188a32404b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea099d6d6719c71122a02ec6fb15e68d6ab3539cd30db9568aa26188a32404b->enter($__internal_dea099d6d6719c71122a02ec6fb15e68d6ab3539cd30db9568aa26188a32404b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\">
    <h1 class=\"welcomeText aright taright\">Welcome ";
        // line 14
        echo twig_escape_filter($this->env, ($context["si_user_name"] ?? $this->getContext($context, "si_user_name")), "html", null, true);
        echo ".</h1>

    <article class=\"tasks\">
      <div><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_view");
        echo "\">
        <img src=\"images/icons/admin.png\" draggable=\"false\" /><br />Admins
      </a></div>

      <div><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("school_view");
        echo "\">
        <img src=\"images/icons/school.png\" draggable=\"false\" /><br />Schools
      </a></div>

      <div><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("curriculum_view");
        echo "\">
        <img src=\"images/icons/curriculum.svg\" draggable=\"false\" /><br />Curriculums
      </a></div>

      <div><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("department_view");
        echo "\">
        <img src=\"images/icons/department.png\" draggable=\"false\" /><br />Departments
      </a></div>

      <div><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("teacher_view");
        echo "\">
        <img src=\"images/icons/teacher.png\" draggable=\"false\" /><br />Teachers
      </a></div>

      <div><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("semester_view");
        echo "\">
        <img src=\"images/icons/semester.png\" draggable=\"false\" /><br />Semesters
      </a></div>

      <div><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_view");
        echo "\">
        <img src=\"images/icons/module.png\" draggable=\"false\" /><br />Modules
      </a></div>

      <div><a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_view");
        echo "\">
        <img src=\"images/icons/course.png\" draggable=\"false\" /><br />Courses
      </a></div>

      <div><a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grade_system_view");
        echo "\">
        <img src=\"images/icons/grade.png\" draggable=\"false\" /><br />Grade Systems
      </a></div>

      <div><a href=\"";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("prerequisite_view");
        echo "\">
        <img src=\"images/icons/prerequisite.png\" draggable=\"false\" /><br />Prerequisites
      </a></div>

      <div><a href=\"";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("batch_view");
        echo "\">
        <img src=\"images/icons/batch.png\" draggable=\"false\" /><br />Batches
      </a></div>

      <div><a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("section_view");
        echo "\">
        <img src=\"images/icons/section.png\" draggable=\"false\" /><br />Sections
      </a></div>

      <div><a href=\"";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_view");
        echo "\">
        <img src=\"images/icons/student.png\" draggable=\"false\" /><br />Students
      </a></div>

      <div><a href=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("session_view");
        echo "\">
        <img src=\"images/icons/session.png\" draggable=\"false\" /><br />School Sessions
      </a></div>

      <div><a href=\"";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("assessment_type_view");
        echo "\">
        <img src=\"images/icons/assessment.png\" draggable=\"false\" /><br />Assessment Types
      </a></div>

      <div><a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("assessment_session_view");
        echo "\">
        <img src=\"images/icons/assessment.png\" draggable=\"false\" /><br />Assessment Sessions
      </a></div>

      <div><a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_settings", array("user_id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_id_lit"), "method"))), "html", null, true);
        echo "\">
        <img src=\"images/icons/account_settings.png\" draggable=\"false\" /><br />Account Settings
      </a></div>

      <div><a href=\" ";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_signout");
        echo " \" onclick=\"return confirm('Are You Sure You Want To Sign Out?') \">
        <img src=\"images/icons/signout.png\" draggable=\"false\" /><br />Sign Out
      </a></div>
    </article>
    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_dea099d6d6719c71122a02ec6fb15e68d6ab3539cd30db9568aa26188a32404b->leave($__internal_dea099d6d6719c71122a02ec6fb15e68d6ab3539cd30db9568aa26188a32404b_prof);

        
        $__internal_66260062bd16367f8b66bd9e51137331732179abcb88b65c6af592c4c329e689->leave($__internal_66260062bd16367f8b66bd9e51137331732179abcb88b65c6af592c4c329e689_prof);

    }

    public function getTemplateName()
    {
        return ":admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 85,  214 => 81,  207 => 77,  200 => 73,  193 => 69,  186 => 65,  179 => 61,  172 => 57,  165 => 53,  158 => 49,  151 => 45,  144 => 41,  137 => 37,  130 => 33,  123 => 29,  116 => 25,  109 => 21,  102 => 17,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}
  Administrator
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container\">
    <h1 class=\"welcomeText aright taright\">Welcome {{ si_user_name }}.</h1>

    <article class=\"tasks\">
      <div><a href=\"{{ path('admin_view') }}\">
        <img src=\"images/icons/admin.png\" draggable=\"false\" /><br />Admins
      </a></div>

      <div><a href=\"{{ path('school_view') }}\">
        <img src=\"images/icons/school.png\" draggable=\"false\" /><br />Schools
      </a></div>

      <div><a href=\"{{ path('curriculum_view') }}\">
        <img src=\"images/icons/curriculum.svg\" draggable=\"false\" /><br />Curriculums
      </a></div>

      <div><a href=\"{{ path('department_view') }}\">
        <img src=\"images/icons/department.png\" draggable=\"false\" /><br />Departments
      </a></div>

      <div><a href=\"{{ path('teacher_view') }}\">
        <img src=\"images/icons/teacher.png\" draggable=\"false\" /><br />Teachers
      </a></div>

      <div><a href=\"{{ path('semester_view') }}\">
        <img src=\"images/icons/semester.png\" draggable=\"false\" /><br />Semesters
      </a></div>

      <div><a href=\"{{ path('module_view') }}\">
        <img src=\"images/icons/module.png\" draggable=\"false\" /><br />Modules
      </a></div>

      <div><a href=\"{{ path('course_view') }}\">
        <img src=\"images/icons/course.png\" draggable=\"false\" /><br />Courses
      </a></div>

      <div><a href=\"{{ path('grade_system_view') }}\">
        <img src=\"images/icons/grade.png\" draggable=\"false\" /><br />Grade Systems
      </a></div>

      <div><a href=\"{{ path('prerequisite_view') }}\">
        <img src=\"images/icons/prerequisite.png\" draggable=\"false\" /><br />Prerequisites
      </a></div>

      <div><a href=\"{{ path('batch_view') }}\">
        <img src=\"images/icons/batch.png\" draggable=\"false\" /><br />Batches
      </a></div>

      <div><a href=\"{{ path('section_view') }}\">
        <img src=\"images/icons/section.png\" draggable=\"false\" /><br />Sections
      </a></div>

      <div><a href=\"{{ path('student_view') }}\">
        <img src=\"images/icons/student.png\" draggable=\"false\" /><br />Students
      </a></div>

      <div><a href=\"{{ path('session_view') }}\">
        <img src=\"images/icons/session.png\" draggable=\"false\" /><br />School Sessions
      </a></div>

      <div><a href=\"{{ path('assessment_type_view') }}\">
        <img src=\"images/icons/assessment.png\" draggable=\"false\" /><br />Assessment Types
      </a></div>

      <div><a href=\"{{ path('assessment_session_view') }}\">
        <img src=\"images/icons/assessment.png\" draggable=\"false\" /><br />Assessment Sessions
      </a></div>

      <div><a href=\"{{ path('account_settings', {'user_id': app.session.get('user_id_lit')} ) }}\">
        <img src=\"images/icons/account_settings.png\" draggable=\"false\" /><br />Account Settings
      </a></div>

      <div><a href=\" {{ path('user_signout') }} \" onclick=\"return confirm('Are You Sure You Want To Sign Out?') \">
        <img src=\"images/icons/signout.png\" draggable=\"false\" /><br />Sign Out
      </a></div>
    </article>
    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", ":admin:index.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/admin/index.html.twig");
    }
}
