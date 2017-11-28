<?php

/* :module:view_one.html.twig */
class __TwigTemplate_9dd54548fd46f62b9274c02e93ad07b5d971c56e8cfbcc0996c6b2c34d03bc9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":module:view_one.html.twig", 1);
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
        $__internal_396cb3c37d7bdeb53cddbff2ac8343879c0085d1d9b62c40b29b3d992f856bdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_396cb3c37d7bdeb53cddbff2ac8343879c0085d1d9b62c40b29b3d992f856bdd->enter($__internal_396cb3c37d7bdeb53cddbff2ac8343879c0085d1d9b62c40b29b3d992f856bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":module:view_one.html.twig"));

        $__internal_cd30227b8abc68c6b2c4d947ddd2410bfa37136077895d8717abdfa84f3eac02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd30227b8abc68c6b2c4d947ddd2410bfa37136077895d8717abdfa84f3eac02->enter($__internal_cd30227b8abc68c6b2c4d947ddd2410bfa37136077895d8717abdfa84f3eac02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":module:view_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_396cb3c37d7bdeb53cddbff2ac8343879c0085d1d9b62c40b29b3d992f856bdd->leave($__internal_396cb3c37d7bdeb53cddbff2ac8343879c0085d1d9b62c40b29b3d992f856bdd_prof);

        
        $__internal_cd30227b8abc68c6b2c4d947ddd2410bfa37136077895d8717abdfa84f3eac02->leave($__internal_cd30227b8abc68c6b2c4d947ddd2410bfa37136077895d8717abdfa84f3eac02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_84a49cbf379f96ef24ecc51a8184eafa9cf552adc78729e63c465058e78c459d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84a49cbf379f96ef24ecc51a8184eafa9cf552adc78729e63c465058e78c459d->enter($__internal_84a49cbf379f96ef24ecc51a8184eafa9cf552adc78729e63c465058e78c459d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8241bf88100233a2367fedced833e4b45d3775591f63e79691028daee2626ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8241bf88100233a2367fedced833e4b45d3775591f63e79691028daee2626ae5->enter($__internal_8241bf88100233a2367fedced833e4b45d3775591f63e79691028daee2626ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "moduleCode", array()), "html", null, true);
        echo "
";
        
        $__internal_8241bf88100233a2367fedced833e4b45d3775591f63e79691028daee2626ae5->leave($__internal_8241bf88100233a2367fedced833e4b45d3775591f63e79691028daee2626ae5_prof);

        
        $__internal_84a49cbf379f96ef24ecc51a8184eafa9cf552adc78729e63c465058e78c459d->leave($__internal_84a49cbf379f96ef24ecc51a8184eafa9cf552adc78729e63c465058e78c459d_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_93c3f0cf4e714e627da95b5ae270093275687304b226159dcdfedb8e7ae9e571 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c3f0cf4e714e627da95b5ae270093275687304b226159dcdfedb8e7ae9e571->enter($__internal_93c3f0cf4e714e627da95b5ae270093275687304b226159dcdfedb8e7ae9e571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_24ee071dcb9dab6bac81c1ed0a2fce965696665ce5ffdab26e3f8447549ecfcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24ee071dcb9dab6bac81c1ed0a2fce965696665ce5ffdab26e3f8447549ecfcd->enter($__internal_24ee071dcb9dab6bac81c1ed0a2fce965696665ce5ffdab26e3f8447549ecfcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>
</style>
";
        
        $__internal_24ee071dcb9dab6bac81c1ed0a2fce965696665ce5ffdab26e3f8447549ecfcd->leave($__internal_24ee071dcb9dab6bac81c1ed0a2fce965696665ce5ffdab26e3f8447549ecfcd_prof);

        
        $__internal_93c3f0cf4e714e627da95b5ae270093275687304b226159dcdfedb8e7ae9e571->leave($__internal_93c3f0cf4e714e627da95b5ae270093275687304b226159dcdfedb8e7ae9e571_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_de721186a21e1bd0d7cbd9dc1945e42857f1b918f3d7ba66a33fb084f45a4737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de721186a21e1bd0d7cbd9dc1945e42857f1b918f3d7ba66a33fb084f45a4737->enter($__internal_de721186a21e1bd0d7cbd9dc1945e42857f1b918f3d7ba66a33fb084f45a4737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e7aae72ec70cb0a334a9408224ee120068f33550a33ba0461d0e324d0879a1ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7aae72ec70cb0a334a9408224ee120068f33550a33ba0461d0e324d0879a1ea->enter($__internal_e7aae72ec70cb0a334a9408224ee120068f33550a33ba0461d0e324d0879a1ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "moduleName", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "moduleCode", array()), "html", null, true);
        echo ")</h1>

      <table>
        <tr>
          <td>Module Code:</td>
          <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "moduleCode", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Module Name:</td>
          <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "moduleName", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Module Credit Hour:</td>
          <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "moduleCreditHour", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Module Duration:</td>
          <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "moduleDuration", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Module School:</td>
          <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["school"] ?? $this->getContext($context, "school")), "schoolName", array()), "html", null, true);
        echo "</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
";
        
        $__internal_e7aae72ec70cb0a334a9408224ee120068f33550a33ba0461d0e324d0879a1ea->leave($__internal_e7aae72ec70cb0a334a9408224ee120068f33550a33ba0461d0e324d0879a1ea_prof);

        
        $__internal_de721186a21e1bd0d7cbd9dc1945e42857f1b918f3d7ba66a33fb084f45a4737->leave($__internal_de721186a21e1bd0d7cbd9dc1945e42857f1b918f3d7ba66a33fb084f45a4737_prof);

    }

    public function getTemplateName()
    {
        return ":module:view_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 40,  133 => 35,  125 => 30,  117 => 25,  109 => 20,  99 => 15,  94 => 12,  85 => 11,  73 => 7,  64 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  {{ module.moduleCode }}
{% endblock %}

{% block stylesheet %}
<style>
</style>
{% endblock %}

{% block body %}
  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">{{ module.moduleName }} ({{ module.moduleCode }})</h1>

      <table>
        <tr>
          <td>Module Code:</td>
          <td>{{ module.moduleCode }}</td>
        </tr>

        <tr>
          <td>Module Name:</td>
          <td>{{ module.moduleName }}</td>
        </tr>

        <tr>
          <td>Module Credit Hour:</td>
          <td>{{ module.moduleCreditHour }}</td>
        </tr>

        <tr>
          <td>Module Duration:</td>
          <td>{{ module.moduleDuration }}</td>
        </tr>

        <tr>
          <td>Module School:</td>
          <td>{{ school.schoolName }}</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
{% endblock %}
", ":module:view_one.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/module/view_one.html.twig");
    }
}
