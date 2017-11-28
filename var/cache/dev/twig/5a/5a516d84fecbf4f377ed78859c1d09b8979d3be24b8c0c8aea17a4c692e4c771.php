<?php

/* :curriculum:view_one.html.twig */
class __TwigTemplate_f2b751133a085fdf9fc32141f99b6a2e74a1cbdd9cd8238837fcc614e150e673 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":curriculum:view_one.html.twig", 1);
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
        $__internal_9a0aa1e4757bfae5eeb37fd5d2a7eb2fe5f81a8e63889a56dd99e627969059c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a0aa1e4757bfae5eeb37fd5d2a7eb2fe5f81a8e63889a56dd99e627969059c1->enter($__internal_9a0aa1e4757bfae5eeb37fd5d2a7eb2fe5f81a8e63889a56dd99e627969059c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":curriculum:view_one.html.twig"));

        $__internal_d0c63639078b6a12ebbb9bd05dd8d045ebe59a7a682aec3beb759625ce2eb05c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0c63639078b6a12ebbb9bd05dd8d045ebe59a7a682aec3beb759625ce2eb05c->enter($__internal_d0c63639078b6a12ebbb9bd05dd8d045ebe59a7a682aec3beb759625ce2eb05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":curriculum:view_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a0aa1e4757bfae5eeb37fd5d2a7eb2fe5f81a8e63889a56dd99e627969059c1->leave($__internal_9a0aa1e4757bfae5eeb37fd5d2a7eb2fe5f81a8e63889a56dd99e627969059c1_prof);

        
        $__internal_d0c63639078b6a12ebbb9bd05dd8d045ebe59a7a682aec3beb759625ce2eb05c->leave($__internal_d0c63639078b6a12ebbb9bd05dd8d045ebe59a7a682aec3beb759625ce2eb05c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_13a7ece2131ca893dfa5df91e807caea41caa97ed414fbb959271b7a3df0c797 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13a7ece2131ca893dfa5df91e807caea41caa97ed414fbb959271b7a3df0c797->enter($__internal_13a7ece2131ca893dfa5df91e807caea41caa97ed414fbb959271b7a3df0c797_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f9eb03f925f5b466af2437471093eb944e69b42722f3f712d390fade3dfd1fd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9eb03f925f5b466af2437471093eb944e69b42722f3f712d390fade3dfd1fd6->enter($__internal_f9eb03f925f5b466af2437471093eb944e69b42722f3f712d390fade3dfd1fd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["curriculum"] ?? $this->getContext($context, "curriculum")), "curriculumCode", array()), "html", null, true);
        echo "
";
        
        $__internal_f9eb03f925f5b466af2437471093eb944e69b42722f3f712d390fade3dfd1fd6->leave($__internal_f9eb03f925f5b466af2437471093eb944e69b42722f3f712d390fade3dfd1fd6_prof);

        
        $__internal_13a7ece2131ca893dfa5df91e807caea41caa97ed414fbb959271b7a3df0c797->leave($__internal_13a7ece2131ca893dfa5df91e807caea41caa97ed414fbb959271b7a3df0c797_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_9a5ec6fcc406cdf3441a64e1aad3ca4f25b66eac50230f3e4f837fb1cea36fbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a5ec6fcc406cdf3441a64e1aad3ca4f25b66eac50230f3e4f837fb1cea36fbb->enter($__internal_9a5ec6fcc406cdf3441a64e1aad3ca4f25b66eac50230f3e4f837fb1cea36fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_2b00e8bc5170aff1cb86e8fbbc7218323b32d7a86e8cd2d761ef29d70b23aa34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b00e8bc5170aff1cb86e8fbbc7218323b32d7a86e8cd2d761ef29d70b23aa34->enter($__internal_2b00e8bc5170aff1cb86e8fbbc7218323b32d7a86e8cd2d761ef29d70b23aa34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>
</style>
";
        
        $__internal_2b00e8bc5170aff1cb86e8fbbc7218323b32d7a86e8cd2d761ef29d70b23aa34->leave($__internal_2b00e8bc5170aff1cb86e8fbbc7218323b32d7a86e8cd2d761ef29d70b23aa34_prof);

        
        $__internal_9a5ec6fcc406cdf3441a64e1aad3ca4f25b66eac50230f3e4f837fb1cea36fbb->leave($__internal_9a5ec6fcc406cdf3441a64e1aad3ca4f25b66eac50230f3e4f837fb1cea36fbb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e83c508ece589702532ec58418bac594b653536ffacc1643952f40e077279424 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e83c508ece589702532ec58418bac594b653536ffacc1643952f40e077279424->enter($__internal_e83c508ece589702532ec58418bac594b653536ffacc1643952f40e077279424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eca6734a3bd7f419f731cb70bb2768a823545970dc5764cec8fb6e348f76fc07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eca6734a3bd7f419f731cb70bb2768a823545970dc5764cec8fb6e348f76fc07->enter($__internal_eca6734a3bd7f419f731cb70bb2768a823545970dc5764cec8fb6e348f76fc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["curriculum"] ?? $this->getContext($context, "curriculum")), "curriculumName", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["curriculum"] ?? $this->getContext($context, "curriculum")), "curriculumCode", array()), "html", null, true);
        echo ")</h1>

      <table>
        <tr>
          <td>Curriculum Code:</td>
          <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["curriculum"] ?? $this->getContext($context, "curriculum")), "curriculumCode", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Curriculum Name:</td>
          <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["curriculum"] ?? $this->getContext($context, "curriculum")), "curriculumName", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Curriculum School:</td>
          <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["school"] ?? $this->getContext($context, "school")), "schoolName", array()), "html", null, true);
        echo "</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
";
        
        $__internal_eca6734a3bd7f419f731cb70bb2768a823545970dc5764cec8fb6e348f76fc07->leave($__internal_eca6734a3bd7f419f731cb70bb2768a823545970dc5764cec8fb6e348f76fc07_prof);

        
        $__internal_e83c508ece589702532ec58418bac594b653536ffacc1643952f40e077279424->leave($__internal_e83c508ece589702532ec58418bac594b653536ffacc1643952f40e077279424_prof);

    }

    public function getTemplateName()
    {
        return ":curriculum:view_one.html.twig";
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
  {{ curriculum.curriculumCode }}
{% endblock %}

{% block stylesheet %}
<style>
</style>
{% endblock %}

{% block body %}
  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">{{ curriculum.curriculumName }} ({{ curriculum.curriculumCode }})</h1>

      <table>
        <tr>
          <td>Curriculum Code:</td>
          <td>{{ curriculum.curriculumCode }}</td>
        </tr>

        <tr>
          <td>Curriculum Name:</td>
          <td>{{ curriculum.curriculumName }}</td>
        </tr>

        <tr>
          <td>Curriculum School:</td>
          <td>{{ school.schoolName }}</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
{% endblock %}
", ":curriculum:view_one.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/curriculum/view_one.html.twig");
    }
}
