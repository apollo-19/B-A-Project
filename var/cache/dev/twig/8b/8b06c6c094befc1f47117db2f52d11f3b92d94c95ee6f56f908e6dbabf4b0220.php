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
        $__internal_c543a72d9554eea91d234068098f6b52522612ac916099a057ef7b785b268e82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c543a72d9554eea91d234068098f6b52522612ac916099a057ef7b785b268e82->enter($__internal_c543a72d9554eea91d234068098f6b52522612ac916099a057ef7b785b268e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_4c4967ffbc9bff6b43ed6a1e20660b04af945175be3b876b22926a236a638188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c4967ffbc9bff6b43ed6a1e20660b04af945175be3b876b22926a236a638188->enter($__internal_4c4967ffbc9bff6b43ed6a1e20660b04af945175be3b876b22926a236a638188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c543a72d9554eea91d234068098f6b52522612ac916099a057ef7b785b268e82->leave($__internal_c543a72d9554eea91d234068098f6b52522612ac916099a057ef7b785b268e82_prof);

        
        $__internal_4c4967ffbc9bff6b43ed6a1e20660b04af945175be3b876b22926a236a638188->leave($__internal_4c4967ffbc9bff6b43ed6a1e20660b04af945175be3b876b22926a236a638188_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb6d82e2566978b753dea1f853f2a85c704b41a985b56938737608b4cc83829e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb6d82e2566978b753dea1f853f2a85c704b41a985b56938737608b4cc83829e->enter($__internal_cb6d82e2566978b753dea1f853f2a85c704b41a985b56938737608b4cc83829e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_95f9386cf99814b6390850214ac92bde2e95bf60db1e0a51be5590784603bc0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95f9386cf99814b6390850214ac92bde2e95bf60db1e0a51be5590784603bc0f->enter($__internal_95f9386cf99814b6390850214ac92bde2e95bf60db1e0a51be5590784603bc0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Administrator
";
        
        $__internal_95f9386cf99814b6390850214ac92bde2e95bf60db1e0a51be5590784603bc0f->leave($__internal_95f9386cf99814b6390850214ac92bde2e95bf60db1e0a51be5590784603bc0f_prof);

        
        $__internal_cb6d82e2566978b753dea1f853f2a85c704b41a985b56938737608b4cc83829e->leave($__internal_cb6d82e2566978b753dea1f853f2a85c704b41a985b56938737608b4cc83829e_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_fed4ea4a799336b6789a374e57f43face443d6feb9f27a299433746fa343e195 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fed4ea4a799336b6789a374e57f43face443d6feb9f27a299433746fa343e195->enter($__internal_fed4ea4a799336b6789a374e57f43face443d6feb9f27a299433746fa343e195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_445d5ef6c59ddceab91be2679133469d5f6a0b1069ecab465619f5479d6c35b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_445d5ef6c59ddceab91be2679133469d5f6a0b1069ecab465619f5479d6c35b4->enter($__internal_445d5ef6c59ddceab91be2679133469d5f6a0b1069ecab465619f5479d6c35b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_445d5ef6c59ddceab91be2679133469d5f6a0b1069ecab465619f5479d6c35b4->leave($__internal_445d5ef6c59ddceab91be2679133469d5f6a0b1069ecab465619f5479d6c35b4_prof);

        
        $__internal_fed4ea4a799336b6789a374e57f43face443d6feb9f27a299433746fa343e195->leave($__internal_fed4ea4a799336b6789a374e57f43face443d6feb9f27a299433746fa343e195_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_27a16e6552a75521c9d6d27aefaa27253b6af4a2ecfe64aea75e6509c575ee3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27a16e6552a75521c9d6d27aefaa27253b6af4a2ecfe64aea75e6509c575ee3d->enter($__internal_27a16e6552a75521c9d6d27aefaa27253b6af4a2ecfe64aea75e6509c575ee3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6c0bc40d1d21cde5f3ba143e1d63ad8dd9470439735d21930a01fabe4dae7fcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c0bc40d1d21cde5f3ba143e1d63ad8dd9470439735d21930a01fabe4dae7fcb->enter($__internal_6c0bc40d1d21cde5f3ba143e1d63ad8dd9470439735d21930a01fabe4dae7fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_view");
        echo "\">
        <img src=\"images/icons/module.png\" draggable=\"false\" /><br />Modules
      </a></div>

      <div><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_view");
        echo "\">
        <img src=\"images/icons/course.png\" draggable=\"false\" /><br />Courses
      </a></div>


      <div><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("prerequisite_view");
        echo "\">
        <img src=\"images/icons/prerequisite.png\" draggable=\"false\" /><br />Prerequisites
      </a></div>

      <div><a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("batch_view");
        echo "\">
        <img src=\"images/icons/batch.png\" draggable=\"false\" /><br />Batches
      </a></div>

      <div><a href=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_view");
        echo "\">
        <img src=\"images/icons/student.png\" draggable=\"false\" /><br />Students
      </a></div>

      <div><a href=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("section_view");
        echo "\">
        <img src=\"images/icons/section.png\" draggable=\"false\" /><br />Sections
      </a></div>

      <div><a href=\"";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("section_view");
        echo "\">
        <img src=\"images/icons/session.png\" draggable=\"false\" /><br />Sessions
      </a></div>

      <div><a href=\" ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_signout");
        echo " \" onclick=\"return confirm('Are You Sure You Want To Sign Out?') \">
        <img src=\"images/icons/signout.png\" draggable=\"false\" /><br />Sign Out
      </a></div>
    </article>
    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_6c0bc40d1d21cde5f3ba143e1d63ad8dd9470439735d21930a01fabe4dae7fcb->leave($__internal_6c0bc40d1d21cde5f3ba143e1d63ad8dd9470439735d21930a01fabe4dae7fcb_prof);

        
        $__internal_27a16e6552a75521c9d6d27aefaa27253b6af4a2ecfe64aea75e6509c575ee3d->leave($__internal_27a16e6552a75521c9d6d27aefaa27253b6af4a2ecfe64aea75e6509c575ee3d_prof);

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
        return array (  187 => 66,  180 => 62,  173 => 58,  166 => 54,  159 => 50,  152 => 46,  144 => 41,  137 => 37,  130 => 33,  123 => 29,  116 => 25,  109 => 21,  102 => 17,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
", "admin/index.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/admin/index.html.twig");
    }
}
