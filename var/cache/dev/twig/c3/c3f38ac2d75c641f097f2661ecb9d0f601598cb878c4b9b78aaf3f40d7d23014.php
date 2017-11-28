<?php

/* :course:view_one.html.twig */
class __TwigTemplate_1a370b0c136cf2893de907e896bbacd8919f794fd1a816b5a03b146600dc87b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":course:view_one.html.twig", 1);
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
        $__internal_9572d67bd49ce60c6dcb35409715a4fe2e411324db08d5d89453e3d59ae6a029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9572d67bd49ce60c6dcb35409715a4fe2e411324db08d5d89453e3d59ae6a029->enter($__internal_9572d67bd49ce60c6dcb35409715a4fe2e411324db08d5d89453e3d59ae6a029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":course:view_one.html.twig"));

        $__internal_9b2a76af4c2938f1f6a0168d688d24c783b0922c5ff8a73a369de03538895dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b2a76af4c2938f1f6a0168d688d24c783b0922c5ff8a73a369de03538895dd5->enter($__internal_9b2a76af4c2938f1f6a0168d688d24c783b0922c5ff8a73a369de03538895dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":course:view_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9572d67bd49ce60c6dcb35409715a4fe2e411324db08d5d89453e3d59ae6a029->leave($__internal_9572d67bd49ce60c6dcb35409715a4fe2e411324db08d5d89453e3d59ae6a029_prof);

        
        $__internal_9b2a76af4c2938f1f6a0168d688d24c783b0922c5ff8a73a369de03538895dd5->leave($__internal_9b2a76af4c2938f1f6a0168d688d24c783b0922c5ff8a73a369de03538895dd5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_eeaeee2332df84ef5151bf2473a4a20339cf306e1c4664c1532c1b1b14ca6183 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eeaeee2332df84ef5151bf2473a4a20339cf306e1c4664c1532c1b1b14ca6183->enter($__internal_eeaeee2332df84ef5151bf2473a4a20339cf306e1c4664c1532c1b1b14ca6183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_714d6feb825550932a2d332a0ba45fa88b89091693bb5c6111832cf9bf90caee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_714d6feb825550932a2d332a0ba45fa88b89091693bb5c6111832cf9bf90caee->enter($__internal_714d6feb825550932a2d332a0ba45fa88b89091693bb5c6111832cf9bf90caee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "courseCode", array()), "html", null, true);
        echo "
";
        
        $__internal_714d6feb825550932a2d332a0ba45fa88b89091693bb5c6111832cf9bf90caee->leave($__internal_714d6feb825550932a2d332a0ba45fa88b89091693bb5c6111832cf9bf90caee_prof);

        
        $__internal_eeaeee2332df84ef5151bf2473a4a20339cf306e1c4664c1532c1b1b14ca6183->leave($__internal_eeaeee2332df84ef5151bf2473a4a20339cf306e1c4664c1532c1b1b14ca6183_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_f5dc1aee7f3f16e7ceab4beed55deb0706ed19a3e4322e9d295a94b2fedfdc0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5dc1aee7f3f16e7ceab4beed55deb0706ed19a3e4322e9d295a94b2fedfdc0e->enter($__internal_f5dc1aee7f3f16e7ceab4beed55deb0706ed19a3e4322e9d295a94b2fedfdc0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_47a60d13ce50f6a415caa4b8ec2b599a5cb83b3c3eec6e1e3d5e47cd8ea95480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47a60d13ce50f6a415caa4b8ec2b599a5cb83b3c3eec6e1e3d5e47cd8ea95480->enter($__internal_47a60d13ce50f6a415caa4b8ec2b599a5cb83b3c3eec6e1e3d5e47cd8ea95480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>
</style>
";
        
        $__internal_47a60d13ce50f6a415caa4b8ec2b599a5cb83b3c3eec6e1e3d5e47cd8ea95480->leave($__internal_47a60d13ce50f6a415caa4b8ec2b599a5cb83b3c3eec6e1e3d5e47cd8ea95480_prof);

        
        $__internal_f5dc1aee7f3f16e7ceab4beed55deb0706ed19a3e4322e9d295a94b2fedfdc0e->leave($__internal_f5dc1aee7f3f16e7ceab4beed55deb0706ed19a3e4322e9d295a94b2fedfdc0e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c4f94cb0aa8a8b457a01b1686a4ac6b1c70534e6df3d6318e5265854439b579f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4f94cb0aa8a8b457a01b1686a4ac6b1c70534e6df3d6318e5265854439b579f->enter($__internal_c4f94cb0aa8a8b457a01b1686a4ac6b1c70534e6df3d6318e5265854439b579f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8cb8e66a886345a2b24f1531a0b48c4ce4ddb6708146d8529e937ddbd01248c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cb8e66a886345a2b24f1531a0b48c4ce4ddb6708146d8529e937ddbd01248c4->enter($__internal_8cb8e66a886345a2b24f1531a0b48c4ce4ddb6708146d8529e937ddbd01248c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "courseName", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "courseCode", array()), "html", null, true);
        echo ")</h1>

      <table>
        <tr>
          <td>Course Code:</td>
          <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "courseCode", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Course Name:</td>
          <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "courseName", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Course Credit Hour:</td>
          <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "courseCreditHour", array()), "html", null, true);
        echo "</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
";
        
        $__internal_8cb8e66a886345a2b24f1531a0b48c4ce4ddb6708146d8529e937ddbd01248c4->leave($__internal_8cb8e66a886345a2b24f1531a0b48c4ce4ddb6708146d8529e937ddbd01248c4_prof);

        
        $__internal_c4f94cb0aa8a8b457a01b1686a4ac6b1c70534e6df3d6318e5265854439b579f->leave($__internal_c4f94cb0aa8a8b457a01b1686a4ac6b1c70534e6df3d6318e5265854439b579f_prof);

    }

    public function getTemplateName()
    {
        return ":course:view_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 30,  117 => 25,  109 => 20,  99 => 15,  94 => 12,  85 => 11,  73 => 7,  64 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  {{ course.courseCode }}
{% endblock %}

{% block stylesheet %}
<style>
</style>
{% endblock %}

{% block body %}
  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">{{ course.courseName }} ({{ course.courseCode }})</h1>

      <table>
        <tr>
          <td>Course Code:</td>
          <td>{{ course.courseCode }}</td>
        </tr>

        <tr>
          <td>Course Name:</td>
          <td>{{ course.courseName }}</td>
        </tr>

        <tr>
          <td>Course Credit Hour:</td>
          <td>{{ course.courseCreditHour }}</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
{% endblock %}
", ":course:view_one.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/course/view_one.html.twig");
    }
}
