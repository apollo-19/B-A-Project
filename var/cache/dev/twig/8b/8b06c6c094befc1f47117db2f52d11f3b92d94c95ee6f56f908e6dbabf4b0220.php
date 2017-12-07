<?php

/* admin/index.html.twig */
class __TwigTemplate_c3491efebf70b2dbfa64201af7c460a916b9ec48a4f790eb5e6afa75202997db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
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
        $__internal_b22a7163eb6050bb420ff3cf7d7426654b646020c80b5355ac984b68e0c725f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b22a7163eb6050bb420ff3cf7d7426654b646020c80b5355ac984b68e0c725f9->enter($__internal_b22a7163eb6050bb420ff3cf7d7426654b646020c80b5355ac984b68e0c725f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_39197721cd604aa8435642c40773d17833dd0952dd58f2e8240b67d42570068f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39197721cd604aa8435642c40773d17833dd0952dd58f2e8240b67d42570068f->enter($__internal_39197721cd604aa8435642c40773d17833dd0952dd58f2e8240b67d42570068f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b22a7163eb6050bb420ff3cf7d7426654b646020c80b5355ac984b68e0c725f9->leave($__internal_b22a7163eb6050bb420ff3cf7d7426654b646020c80b5355ac984b68e0c725f9_prof);

        
        $__internal_39197721cd604aa8435642c40773d17833dd0952dd58f2e8240b67d42570068f->leave($__internal_39197721cd604aa8435642c40773d17833dd0952dd58f2e8240b67d42570068f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_79b7baecfe26e67f90f7a8cb56dccd542d3795af045c297c69b3b7e9902a7a73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79b7baecfe26e67f90f7a8cb56dccd542d3795af045c297c69b3b7e9902a7a73->enter($__internal_79b7baecfe26e67f90f7a8cb56dccd542d3795af045c297c69b3b7e9902a7a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_45020f0eeb2c876434f279466a5d3b9c68f781c3d739a007b0e8df50a72907e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45020f0eeb2c876434f279466a5d3b9c68f781c3d739a007b0e8df50a72907e6->enter($__internal_45020f0eeb2c876434f279466a5d3b9c68f781c3d739a007b0e8df50a72907e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Administrator
";
        
        $__internal_45020f0eeb2c876434f279466a5d3b9c68f781c3d739a007b0e8df50a72907e6->leave($__internal_45020f0eeb2c876434f279466a5d3b9c68f781c3d739a007b0e8df50a72907e6_prof);

        
        $__internal_79b7baecfe26e67f90f7a8cb56dccd542d3795af045c297c69b3b7e9902a7a73->leave($__internal_79b7baecfe26e67f90f7a8cb56dccd542d3795af045c297c69b3b7e9902a7a73_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_bf4249eb7ce094f691590695f286f6490d2091bfdbe6d269351feefbaa37de6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf4249eb7ce094f691590695f286f6490d2091bfdbe6d269351feefbaa37de6e->enter($__internal_bf4249eb7ce094f691590695f286f6490d2091bfdbe6d269351feefbaa37de6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_c7a6933b6c9b06a36e2245df519a001c567c289136f7b213e42a5d0af9d7f726 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7a6933b6c9b06a36e2245df519a001c567c289136f7b213e42a5d0af9d7f726->enter($__internal_c7a6933b6c9b06a36e2245df519a001c567c289136f7b213e42a5d0af9d7f726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_c7a6933b6c9b06a36e2245df519a001c567c289136f7b213e42a5d0af9d7f726->leave($__internal_c7a6933b6c9b06a36e2245df519a001c567c289136f7b213e42a5d0af9d7f726_prof);

        
        $__internal_bf4249eb7ce094f691590695f286f6490d2091bfdbe6d269351feefbaa37de6e->leave($__internal_bf4249eb7ce094f691590695f286f6490d2091bfdbe6d269351feefbaa37de6e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_3a0677cdc581b656af002628677b245b3721397e56a40e5e10fdaea377abe5b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a0677cdc581b656af002628677b245b3721397e56a40e5e10fdaea377abe5b4->enter($__internal_3a0677cdc581b656af002628677b245b3721397e56a40e5e10fdaea377abe5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a62bb6254ccd9633c31b499732b06c595a436109704cc4a7253f42eb384da84b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a62bb6254ccd9633c31b499732b06c595a436109704cc4a7253f42eb384da84b->enter($__internal_a62bb6254ccd9633c31b499732b06c595a436109704cc4a7253f42eb384da84b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("department_view");
        echo "\">
        <img src=\"images/icons/department.png\" draggable=\"false\" /><br />Departments
      </a></div>

      <div><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("curriculum_view");
        echo "\">
        <img src=\"images/icons/curriculum.svg\" draggable=\"false\" /><br />Curriculums
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
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("prerequisite_view");
        echo "\">
        <img src=\"images/icons/prerequisite.png\" draggable=\"false\" /><br />Prerequisites
      </a></div>

      <div><a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("batch_view");
        echo "\">
        <img src=\"images/icons/batch.png\" draggable=\"false\" /><br />Batches
      </a></div>

      <div><a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_view");
        echo "\">
        <img src=\"images/icons/student.png\" draggable=\"false\" /><br />Students
      </a></div>

      <div><a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("section_view");
        echo "\">
        <img src=\"images/icons/section.png\" draggable=\"false\" /><br />Sections
      </a></div>

      <div><a href=\"";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("section_view");
        echo "\">
        <img src=\"images/icons/session.png\" draggable=\"false\" /><br />Sessions
      </a></div>

      <div><a href=\" ";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_signout");
        echo " \" onclick=\"return confirm('Are You Sure You Want To Sign Out?') \">
        <img src=\"images/icons/signout.png\" draggable=\"false\" /><br />Sign Out
      </a></div>
    </article>
    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_a62bb6254ccd9633c31b499732b06c595a436109704cc4a7253f42eb384da84b->leave($__internal_a62bb6254ccd9633c31b499732b06c595a436109704cc4a7253f42eb384da84b_prof);

        
        $__internal_3a0677cdc581b656af002628677b245b3721397e56a40e5e10fdaea377abe5b4->leave($__internal_3a0677cdc581b656af002628677b245b3721397e56a40e5e10fdaea377abe5b4_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 70,  187 => 66,  180 => 62,  173 => 58,  166 => 54,  159 => 50,  151 => 45,  144 => 41,  137 => 37,  130 => 33,  123 => 29,  116 => 25,  109 => 21,  102 => 17,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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

      <div><a href=\"{{ path('department_view') }}\">
        <img src=\"images/icons/department.png\" draggable=\"false\" /><br />Departments
      </a></div>

      <div><a href=\"{{ path('curriculum_view') }}\">
        <img src=\"images/icons/curriculum.svg\" draggable=\"false\" /><br />Curriculums
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


      <div><a href=\"{{ path('prerequisite_view') }}\">
        <img src=\"images/icons/prerequisite.png\" draggable=\"false\" /><br />Prerequisites
      </a></div>

      <div><a href=\"{{ path('batch_view') }}\">
        <img src=\"images/icons/batch.png\" draggable=\"false\" /><br />Batches
      </a></div>

      <div><a href=\"{{ path('student_view') }}\">
        <img src=\"images/icons/student.png\" draggable=\"false\" /><br />Students
      </a></div>

      <div><a href=\"{{ path('section_view') }}\">
        <img src=\"images/icons/section.png\" draggable=\"false\" /><br />Sections
      </a></div>

      <div><a href=\"{{ path('section_view') }}\">
        <img src=\"images/icons/session.png\" draggable=\"false\" /><br />Sessions
      </a></div>

      <div><a href=\" {{ path('user_signout') }} \" onclick=\"return confirm('Are You Sure You Want To Sign Out?') \">
        <img src=\"images/icons/signout.png\" draggable=\"false\" /><br />Sign Out
      </a></div>
    </article>
    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", "admin/index.html.twig", "/home/apollo-19/github/B-A-Project/app/Resources/views/admin/index.html.twig");
    }
}
