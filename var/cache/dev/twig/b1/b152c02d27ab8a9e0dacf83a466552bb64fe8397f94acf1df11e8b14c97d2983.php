<?php

/* :batch:view_one.html.twig */
class __TwigTemplate_830314a746c0b4195ede6b1066d0bfd5a67c0bc21e6cb6e214cd3e479909826c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":batch:view_one.html.twig", 1);
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
        $__internal_6608a04127226ef362e7b284eae3c20b60f686dc1ad6d122666c2c76a6d71a8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6608a04127226ef362e7b284eae3c20b60f686dc1ad6d122666c2c76a6d71a8c->enter($__internal_6608a04127226ef362e7b284eae3c20b60f686dc1ad6d122666c2c76a6d71a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":batch:view_one.html.twig"));

        $__internal_70066319a5e34a3720d951c321987e145a09ac156a6aaf729cc8040b390fd6eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70066319a5e34a3720d951c321987e145a09ac156a6aaf729cc8040b390fd6eb->enter($__internal_70066319a5e34a3720d951c321987e145a09ac156a6aaf729cc8040b390fd6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":batch:view_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6608a04127226ef362e7b284eae3c20b60f686dc1ad6d122666c2c76a6d71a8c->leave($__internal_6608a04127226ef362e7b284eae3c20b60f686dc1ad6d122666c2c76a6d71a8c_prof);

        
        $__internal_70066319a5e34a3720d951c321987e145a09ac156a6aaf729cc8040b390fd6eb->leave($__internal_70066319a5e34a3720d951c321987e145a09ac156a6aaf729cc8040b390fd6eb_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b0b5c51fb71e48f700a92324e4e9534c05181bb22f54c16c840a3a69d805cad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b0b5c51fb71e48f700a92324e4e9534c05181bb22f54c16c840a3a69d805cad->enter($__internal_9b0b5c51fb71e48f700a92324e4e9534c05181bb22f54c16c840a3a69d805cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8947e4a04e83c46ba072db3dad9391074272fd1d1fca18d603660022234f1243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8947e4a04e83c46ba072db3dad9391074272fd1d1fca18d603660022234f1243->enter($__internal_8947e4a04e83c46ba072db3dad9391074272fd1d1fca18d603660022234f1243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["batch"] ?? $this->getContext($context, "batch")), "batchCode", array()), "html", null, true);
        echo "
";
        
        $__internal_8947e4a04e83c46ba072db3dad9391074272fd1d1fca18d603660022234f1243->leave($__internal_8947e4a04e83c46ba072db3dad9391074272fd1d1fca18d603660022234f1243_prof);

        
        $__internal_9b0b5c51fb71e48f700a92324e4e9534c05181bb22f54c16c840a3a69d805cad->leave($__internal_9b0b5c51fb71e48f700a92324e4e9534c05181bb22f54c16c840a3a69d805cad_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_f8d5f5900d9529f7cd31a0d890350b1e27148d94c691615493a05e5f4c5365dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f8d5f5900d9529f7cd31a0d890350b1e27148d94c691615493a05e5f4c5365dc->enter($__internal_f8d5f5900d9529f7cd31a0d890350b1e27148d94c691615493a05e5f4c5365dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_b163cc4ea1182daff08c042ffef5e61bacaf8e08cedf119ad9f09e18228c3fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b163cc4ea1182daff08c042ffef5e61bacaf8e08cedf119ad9f09e18228c3fd7->enter($__internal_b163cc4ea1182daff08c042ffef5e61bacaf8e08cedf119ad9f09e18228c3fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>
</style>
";
        
        $__internal_b163cc4ea1182daff08c042ffef5e61bacaf8e08cedf119ad9f09e18228c3fd7->leave($__internal_b163cc4ea1182daff08c042ffef5e61bacaf8e08cedf119ad9f09e18228c3fd7_prof);

        
        $__internal_f8d5f5900d9529f7cd31a0d890350b1e27148d94c691615493a05e5f4c5365dc->leave($__internal_f8d5f5900d9529f7cd31a0d890350b1e27148d94c691615493a05e5f4c5365dc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_17745c3736d1a76261bdcfd375ef1f35f47cae711699b4db088c2f31b72d3aab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17745c3736d1a76261bdcfd375ef1f35f47cae711699b4db088c2f31b72d3aab->enter($__internal_17745c3736d1a76261bdcfd375ef1f35f47cae711699b4db088c2f31b72d3aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8c179e87c292f1333f808e43026eb3732408b16bf095ecdc5c393d000d55803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8c179e87c292f1333f808e43026eb3732408b16bf095ecdc5c393d000d55803->enter($__internal_b8c179e87c292f1333f808e43026eb3732408b16bf095ecdc5c393d000d55803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["batch"] ?? $this->getContext($context, "batch")), "batchName", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["batch"] ?? $this->getContext($context, "batch")), "batchCode", array()), "html", null, true);
        echo ")</h1>

      <table>
        <tr>
          <td>Batch Code:</td>
          <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["batch"] ?? $this->getContext($context, "batch")), "batchCode", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Batch Name:</td>
          <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["batch"] ?? $this->getContext($context, "batch")), "batchName", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Batch Year:</td>
          <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["batch"] ?? $this->getContext($context, "batch")), "batchYear", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Batch School:</td>
          <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["school"] ?? $this->getContext($context, "school")), "schoolName", array()), "html", null, true);
        echo "</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
";
        
        $__internal_b8c179e87c292f1333f808e43026eb3732408b16bf095ecdc5c393d000d55803->leave($__internal_b8c179e87c292f1333f808e43026eb3732408b16bf095ecdc5c393d000d55803_prof);

        
        $__internal_17745c3736d1a76261bdcfd375ef1f35f47cae711699b4db088c2f31b72d3aab->leave($__internal_17745c3736d1a76261bdcfd375ef1f35f47cae711699b4db088c2f31b72d3aab_prof);

    }

    public function getTemplateName()
    {
        return ":batch:view_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 35,  125 => 30,  117 => 25,  109 => 20,  99 => 15,  94 => 12,  85 => 11,  73 => 7,  64 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  {{ batch.batchCode }}
{% endblock %}

{% block stylesheet %}
<style>
</style>
{% endblock %}

{% block body %}
  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">{{ batch.batchName }} ({{ batch.batchCode }})</h1>

      <table>
        <tr>
          <td>Batch Code:</td>
          <td>{{ batch.batchCode }}</td>
        </tr>

        <tr>
          <td>Batch Name:</td>
          <td>{{ batch.batchName }}</td>
        </tr>

        <tr>
          <td>Batch Year:</td>
          <td>{{ batch.batchYear }}</td>
        </tr>

        <tr>
          <td>Batch School:</td>
          <td>{{ school.schoolName }}</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
{% endblock %}
", ":batch:view_one.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/batch/view_one.html.twig");
    }
}
