<?php

/* :teacher:index.html.twig */
class __TwigTemplate_309740a7682028a7351ed4c87f95071665c204745c2c339aba1e51a6363a905e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":teacher:index.html.twig", 1);
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
        $__internal_40866f95aa0bd3a0d7983d2a6af361ebb8f3471f19f3647592101278873d33cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40866f95aa0bd3a0d7983d2a6af361ebb8f3471f19f3647592101278873d33cd->enter($__internal_40866f95aa0bd3a0d7983d2a6af361ebb8f3471f19f3647592101278873d33cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":teacher:index.html.twig"));

        $__internal_c23f78bd0edafe8a44a48bd5bacc13b3b836c6b7d7f942c5b71d76ccfec80c6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23f78bd0edafe8a44a48bd5bacc13b3b836c6b7d7f942c5b71d76ccfec80c6b->enter($__internal_c23f78bd0edafe8a44a48bd5bacc13b3b836c6b7d7f942c5b71d76ccfec80c6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":teacher:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40866f95aa0bd3a0d7983d2a6af361ebb8f3471f19f3647592101278873d33cd->leave($__internal_40866f95aa0bd3a0d7983d2a6af361ebb8f3471f19f3647592101278873d33cd_prof);

        
        $__internal_c23f78bd0edafe8a44a48bd5bacc13b3b836c6b7d7f942c5b71d76ccfec80c6b->leave($__internal_c23f78bd0edafe8a44a48bd5bacc13b3b836c6b7d7f942c5b71d76ccfec80c6b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6f539030fe4744d7ccb85f44f850a4061cd41201584e0befe65798e5d7fc0110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f539030fe4744d7ccb85f44f850a4061cd41201584e0befe65798e5d7fc0110->enter($__internal_6f539030fe4744d7ccb85f44f850a4061cd41201584e0befe65798e5d7fc0110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e0646f056b0cc1079afe6afe39b31f8cc7e2ad3919519645904c0c527a627743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0646f056b0cc1079afe6afe39b31f8cc7e2ad3919519645904c0c527a627743->enter($__internal_e0646f056b0cc1079afe6afe39b31f8cc7e2ad3919519645904c0c527a627743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Teacher
";
        
        $__internal_e0646f056b0cc1079afe6afe39b31f8cc7e2ad3919519645904c0c527a627743->leave($__internal_e0646f056b0cc1079afe6afe39b31f8cc7e2ad3919519645904c0c527a627743_prof);

        
        $__internal_6f539030fe4744d7ccb85f44f850a4061cd41201584e0befe65798e5d7fc0110->leave($__internal_6f539030fe4744d7ccb85f44f850a4061cd41201584e0befe65798e5d7fc0110_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_aef6e2982c386849126b62d1cf813e56561762653347f51d547d1a5ebdeeaab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aef6e2982c386849126b62d1cf813e56561762653347f51d547d1a5ebdeeaab8->enter($__internal_aef6e2982c386849126b62d1cf813e56561762653347f51d547d1a5ebdeeaab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_dec6c3b53dc67bb608c38d490192e0e17cecfdce9ff651682b2b3ed7230a87f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dec6c3b53dc67bb608c38d490192e0e17cecfdce9ff651682b2b3ed7230a87f3->enter($__internal_dec6c3b53dc67bb608c38d490192e0e17cecfdce9ff651682b2b3ed7230a87f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_dec6c3b53dc67bb608c38d490192e0e17cecfdce9ff651682b2b3ed7230a87f3->leave($__internal_dec6c3b53dc67bb608c38d490192e0e17cecfdce9ff651682b2b3ed7230a87f3_prof);

        
        $__internal_aef6e2982c386849126b62d1cf813e56561762653347f51d547d1a5ebdeeaab8->leave($__internal_aef6e2982c386849126b62d1cf813e56561762653347f51d547d1a5ebdeeaab8_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_758958474603f32fa6bae84e4279f3e6e6e112c9786743ba94b9029e9a10082e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_758958474603f32fa6bae84e4279f3e6e6e112c9786743ba94b9029e9a10082e->enter($__internal_758958474603f32fa6bae84e4279f3e6e6e112c9786743ba94b9029e9a10082e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1f51759229a11ad99d3b3766b8ecce3dfb2798aa2ba520c376b4d875928649e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f51759229a11ad99d3b3766b8ecce3dfb2798aa2ba520c376b4d875928649e6->enter($__internal_1f51759229a11ad99d3b3766b8ecce3dfb2798aa2ba520c376b4d875928649e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\">
    <h1 class=\"welcomeText aright taright\">Welcome ";
        // line 14
        echo twig_escape_filter($this->env, ($context["si_user_name"] ?? $this->getContext($context, "si_user_name")), "html", null, true);
        echo ".</h1>

    <article class=\"tasks\">
      <div><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("school_view");
        echo "\">
        <img src=\"images/icons/school.png\" draggable=\"false\" /><br />Schools
      </a></div>

      <div><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_view");
        echo "\">
        <img src=\"images/icons/module.png\" draggable=\"false\" /><br />Modules
      </a></div>

      <div><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_view");
        echo "\">
        <img src=\"images/icons/course.png\" draggable=\"false\" /><br />Courses
      </a></div>

      <div><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("section_view");
        echo "\">
        <img src=\"images/icons/session.png\" draggable=\"false\" /><br />My Sessions
      </a></div>

      <div><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("section_view");
        echo "\">
        <img src=\"images/icons/result.png\" draggable=\"false\" /><br />Results
      </a></div>

      <div><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("section_view");
        echo "\">
        <img src=\"images/icons/assessment.png\" draggable=\"false\" /><br />Assessment
      </a></div>

      <div><a href=\" ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_signout");
        echo " \" onclick=\"return confirm('Are You Sure You Want To Sign Out?') \">
        <img src=\"images/icons/signout.png\" draggable=\"false\" /><br />Sign Out
      </a></div>
    </article>
    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_1f51759229a11ad99d3b3766b8ecce3dfb2798aa2ba520c376b4d875928649e6->leave($__internal_1f51759229a11ad99d3b3766b8ecce3dfb2798aa2ba520c376b4d875928649e6_prof);

        
        $__internal_758958474603f32fa6bae84e4279f3e6e6e112c9786743ba94b9029e9a10082e->leave($__internal_758958474603f32fa6bae84e4279f3e6e6e112c9786743ba94b9029e9a10082e_prof);

    }

    public function getTemplateName()
    {
        return ":teacher:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 41,  137 => 37,  130 => 33,  123 => 29,  116 => 25,  109 => 21,  102 => 17,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  Teacher
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container\">
    <h1 class=\"welcomeText aright taright\">Welcome {{ si_user_name }}.</h1>

    <article class=\"tasks\">
      <div><a href=\"{{ path('school_view') }}\">
        <img src=\"images/icons/school.png\" draggable=\"false\" /><br />Schools
      </a></div>

      <div><a href=\"{{ path('module_view') }}\">
        <img src=\"images/icons/module.png\" draggable=\"false\" /><br />Modules
      </a></div>

      <div><a href=\"{{ path('course_view') }}\">
        <img src=\"images/icons/course.png\" draggable=\"false\" /><br />Courses
      </a></div>

      <div><a href=\"{{ path('section_view') }}\">
        <img src=\"images/icons/session.png\" draggable=\"false\" /><br />My Sessions
      </a></div>

      <div><a href=\"{{ path('section_view') }}\">
        <img src=\"images/icons/result.png\" draggable=\"false\" /><br />Results
      </a></div>

      <div><a href=\"{{ path('section_view') }}\">
        <img src=\"images/icons/assessment.png\" draggable=\"false\" /><br />Assessment
      </a></div>

      <div><a href=\" {{ path('user_signout') }} \" onclick=\"return confirm('Are You Sure You Want To Sign Out?') \">
        <img src=\"images/icons/signout.png\" draggable=\"false\" /><br />Sign Out
      </a></div>
    </article>
    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", ":teacher:index.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/teacher/index.html.twig");
    }
}
