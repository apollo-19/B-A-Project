<?php

/* :section:view_one.html.twig */
class __TwigTemplate_d8afb7126b0195a5b3b08c03174a58cd8c9a83e4e0e97327c3ca951a316b85f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":section:view_one.html.twig", 1);
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
        $__internal_6783596f2a351f309d2e65c124af122def6c035971ffc0564a2e7960a59ab0c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6783596f2a351f309d2e65c124af122def6c035971ffc0564a2e7960a59ab0c5->enter($__internal_6783596f2a351f309d2e65c124af122def6c035971ffc0564a2e7960a59ab0c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":section:view_one.html.twig"));

        $__internal_337515366a208b29b79f235998b2435ad8d8b0297d8b4f8843bdfa9e00a53db2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337515366a208b29b79f235998b2435ad8d8b0297d8b4f8843bdfa9e00a53db2->enter($__internal_337515366a208b29b79f235998b2435ad8d8b0297d8b4f8843bdfa9e00a53db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":section:view_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6783596f2a351f309d2e65c124af122def6c035971ffc0564a2e7960a59ab0c5->leave($__internal_6783596f2a351f309d2e65c124af122def6c035971ffc0564a2e7960a59ab0c5_prof);

        
        $__internal_337515366a208b29b79f235998b2435ad8d8b0297d8b4f8843bdfa9e00a53db2->leave($__internal_337515366a208b29b79f235998b2435ad8d8b0297d8b4f8843bdfa9e00a53db2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0046d465fe8a5ae1f01c60e9255c91be846915abd7ed71d54cd8797ebaf9c57c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0046d465fe8a5ae1f01c60e9255c91be846915abd7ed71d54cd8797ebaf9c57c->enter($__internal_0046d465fe8a5ae1f01c60e9255c91be846915abd7ed71d54cd8797ebaf9c57c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_68f10a3efa4a6df108732db74a1aee49c4e4caeb245120960d3fa321109b3ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68f10a3efa4a6df108732db74a1aee49c4e4caeb245120960d3fa321109b3ff9->enter($__internal_68f10a3efa4a6df108732db74a1aee49c4e4caeb245120960d3fa321109b3ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "sectionCode", array()), "html", null, true);
        echo "
";
        
        $__internal_68f10a3efa4a6df108732db74a1aee49c4e4caeb245120960d3fa321109b3ff9->leave($__internal_68f10a3efa4a6df108732db74a1aee49c4e4caeb245120960d3fa321109b3ff9_prof);

        
        $__internal_0046d465fe8a5ae1f01c60e9255c91be846915abd7ed71d54cd8797ebaf9c57c->leave($__internal_0046d465fe8a5ae1f01c60e9255c91be846915abd7ed71d54cd8797ebaf9c57c_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_35439381a4d9c814fa3ee3766846711b6debe2e3c5990c414430c5c4c9817cdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35439381a4d9c814fa3ee3766846711b6debe2e3c5990c414430c5c4c9817cdf->enter($__internal_35439381a4d9c814fa3ee3766846711b6debe2e3c5990c414430c5c4c9817cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6ef27efc545009b3e1a748c47fda4037efe8cc3ec848d171a1fbb32feec58265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef27efc545009b3e1a748c47fda4037efe8cc3ec848d171a1fbb32feec58265->enter($__internal_6ef27efc545009b3e1a748c47fda4037efe8cc3ec848d171a1fbb32feec58265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>
</style>
";
        
        $__internal_6ef27efc545009b3e1a748c47fda4037efe8cc3ec848d171a1fbb32feec58265->leave($__internal_6ef27efc545009b3e1a748c47fda4037efe8cc3ec848d171a1fbb32feec58265_prof);

        
        $__internal_35439381a4d9c814fa3ee3766846711b6debe2e3c5990c414430c5c4c9817cdf->leave($__internal_35439381a4d9c814fa3ee3766846711b6debe2e3c5990c414430c5c4c9817cdf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_387a6632b9bebc5fe214f252c9743c6ebe06d53cb1c83136b52d8c3b0b05fec3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_387a6632b9bebc5fe214f252c9743c6ebe06d53cb1c83136b52d8c3b0b05fec3->enter($__internal_387a6632b9bebc5fe214f252c9743c6ebe06d53cb1c83136b52d8c3b0b05fec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b2de15dea833dd32ecb5cd31f28a11d7ad05cd9c0185d00e09950eef21d38d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2de15dea833dd32ecb5cd31f28a11d7ad05cd9c0185d00e09950eef21d38d10->enter($__internal_b2de15dea833dd32ecb5cd31f28a11d7ad05cd9c0185d00e09950eef21d38d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "sectionName", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "sectionCode", array()), "html", null, true);
        echo ")</h1>

      <table>
        <tr>
          <td>Section Code:</td>
          <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "sectionCode", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Section Name:</td>
          <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "sectionName", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Section Batch:</td>
          <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["batch"] ?? $this->getContext($context, "batch")), "batchName", array()), "html", null, true);
        echo "</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
";
        
        $__internal_b2de15dea833dd32ecb5cd31f28a11d7ad05cd9c0185d00e09950eef21d38d10->leave($__internal_b2de15dea833dd32ecb5cd31f28a11d7ad05cd9c0185d00e09950eef21d38d10_prof);

        
        $__internal_387a6632b9bebc5fe214f252c9743c6ebe06d53cb1c83136b52d8c3b0b05fec3->leave($__internal_387a6632b9bebc5fe214f252c9743c6ebe06d53cb1c83136b52d8c3b0b05fec3_prof);

    }

    public function getTemplateName()
    {
        return ":section:view_one.html.twig";
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
  {{ section.sectionCode }}
{% endblock %}

{% block stylesheet %}
<style>
</style>
{% endblock %}

{% block body %}
  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">{{ section.sectionName }} ({{ section.sectionCode }})</h1>

      <table>
        <tr>
          <td>Section Code:</td>
          <td>{{ section.sectionCode }}</td>
        </tr>

        <tr>
          <td>Section Name:</td>
          <td>{{ section.sectionName }}</td>
        </tr>

        <tr>
          <td>Section Batch:</td>
          <td>{{ batch.batchName }}</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
{% endblock %}
", ":section:view_one.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/section/view_one.html.twig");
    }
}
