<?php

/* :prerequisite:index.html.twig */
class __TwigTemplate_960c670198828a69a9afd82bd0b26d113e6ab19dfe1076635cff744b73af137d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":prerequisite:index.html.twig", 1);
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
        $__internal_394d6067f248efbf57fdda82bd3905b0598c8a4aa23425851c00be7f121cbb4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_394d6067f248efbf57fdda82bd3905b0598c8a4aa23425851c00be7f121cbb4a->enter($__internal_394d6067f248efbf57fdda82bd3905b0598c8a4aa23425851c00be7f121cbb4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":prerequisite:index.html.twig"));

        $__internal_0f92af015fb5392f742325cfe3bb5941f0482834ad9414451af6376be87874f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f92af015fb5392f742325cfe3bb5941f0482834ad9414451af6376be87874f7->enter($__internal_0f92af015fb5392f742325cfe3bb5941f0482834ad9414451af6376be87874f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":prerequisite:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_394d6067f248efbf57fdda82bd3905b0598c8a4aa23425851c00be7f121cbb4a->leave($__internal_394d6067f248efbf57fdda82bd3905b0598c8a4aa23425851c00be7f121cbb4a_prof);

        
        $__internal_0f92af015fb5392f742325cfe3bb5941f0482834ad9414451af6376be87874f7->leave($__internal_0f92af015fb5392f742325cfe3bb5941f0482834ad9414451af6376be87874f7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ba0bd0d71571eec65e603aa2a08a1051a43582f0bc90588c7dbd5cf912a9328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ba0bd0d71571eec65e603aa2a08a1051a43582f0bc90588c7dbd5cf912a9328->enter($__internal_6ba0bd0d71571eec65e603aa2a08a1051a43582f0bc90588c7dbd5cf912a9328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9adc8dd26a4c3a2c39a6f2c3890e5fe714ae46d5ed61fe3382ed9f81033566a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9adc8dd26a4c3a2c39a6f2c3890e5fe714ae46d5ed61fe3382ed9f81033566a4->enter($__internal_9adc8dd26a4c3a2c39a6f2c3890e5fe714ae46d5ed61fe3382ed9f81033566a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Teacher
";
        
        $__internal_9adc8dd26a4c3a2c39a6f2c3890e5fe714ae46d5ed61fe3382ed9f81033566a4->leave($__internal_9adc8dd26a4c3a2c39a6f2c3890e5fe714ae46d5ed61fe3382ed9f81033566a4_prof);

        
        $__internal_6ba0bd0d71571eec65e603aa2a08a1051a43582f0bc90588c7dbd5cf912a9328->leave($__internal_6ba0bd0d71571eec65e603aa2a08a1051a43582f0bc90588c7dbd5cf912a9328_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_c394708bb796c0018d44ba62799df9099564db69170f961f8a3b2523e257d486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c394708bb796c0018d44ba62799df9099564db69170f961f8a3b2523e257d486->enter($__internal_c394708bb796c0018d44ba62799df9099564db69170f961f8a3b2523e257d486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_2ec5d95bf393171f6be66a5786ff7261d745312a1f511f179ac84d18c3f554a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ec5d95bf393171f6be66a5786ff7261d745312a1f511f179ac84d18c3f554a3->enter($__internal_2ec5d95bf393171f6be66a5786ff7261d745312a1f511f179ac84d18c3f554a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_2ec5d95bf393171f6be66a5786ff7261d745312a1f511f179ac84d18c3f554a3->leave($__internal_2ec5d95bf393171f6be66a5786ff7261d745312a1f511f179ac84d18c3f554a3_prof);

        
        $__internal_c394708bb796c0018d44ba62799df9099564db69170f961f8a3b2523e257d486->leave($__internal_c394708bb796c0018d44ba62799df9099564db69170f961f8a3b2523e257d486_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_b628fe4326b2996d72afb25932abcfcc07dbdc05da71513e9220eff0d2029052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b628fe4326b2996d72afb25932abcfcc07dbdc05da71513e9220eff0d2029052->enter($__internal_b628fe4326b2996d72afb25932abcfcc07dbdc05da71513e9220eff0d2029052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0e007747ef46de877b73296806e7fdefba64f29a6f8bdaed30858ed8e1b9c2d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e007747ef46de877b73296806e7fdefba64f29a6f8bdaed30858ed8e1b9c2d3->enter($__internal_0e007747ef46de877b73296806e7fdefba64f29a6f8bdaed30858ed8e1b9c2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\">
    <article class=\"tasks\">
      <div>
        <a href=\"\"><img src=\"images/icons/.png\" draggable=\"false\" /></a>

        <a href=\"\">Schools</a>
      </div>
    </article>
    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_0e007747ef46de877b73296806e7fdefba64f29a6f8bdaed30858ed8e1b9c2d3->leave($__internal_0e007747ef46de877b73296806e7fdefba64f29a6f8bdaed30858ed8e1b9c2d3_prof);

        
        $__internal_b628fe4326b2996d72afb25932abcfcc07dbdc05da71513e9220eff0d2029052->leave($__internal_b628fe4326b2996d72afb25932abcfcc07dbdc05da71513e9220eff0d2029052_prof);

    }

    public function getTemplateName()
    {
        return ":prerequisite:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
    <article class=\"tasks\">
      <div>
        <a href=\"\"><img src=\"images/icons/.png\" draggable=\"false\" /></a>

        <a href=\"\">Schools</a>
      </div>
    </article>
    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", ":prerequisite:index.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/prerequisite/index.html.twig");
    }
}
