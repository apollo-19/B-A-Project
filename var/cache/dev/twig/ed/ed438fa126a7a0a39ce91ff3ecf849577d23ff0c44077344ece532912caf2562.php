<?php

/* department/form.html.twig */
class __TwigTemplate_0af5127acf7f364fee6d90ddcee2247071dfae4d5688e062f6c21fe5d08b0a9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "department/form.html.twig", 1);
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
        $__internal_5cab4b5590f29bcd1c4c6c6486341abe69e2d4e4907dc317d2ebdf24f6306b24 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5cab4b5590f29bcd1c4c6c6486341abe69e2d4e4907dc317d2ebdf24f6306b24->enter($__internal_5cab4b5590f29bcd1c4c6c6486341abe69e2d4e4907dc317d2ebdf24f6306b24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "department/form.html.twig"));

        $__internal_81a04f339c5e96d3dbbb0c520ffb51aa50454fd1b99e40970ef47de4a615c273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81a04f339c5e96d3dbbb0c520ffb51aa50454fd1b99e40970ef47de4a615c273->enter($__internal_81a04f339c5e96d3dbbb0c520ffb51aa50454fd1b99e40970ef47de4a615c273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "department/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5cab4b5590f29bcd1c4c6c6486341abe69e2d4e4907dc317d2ebdf24f6306b24->leave($__internal_5cab4b5590f29bcd1c4c6c6486341abe69e2d4e4907dc317d2ebdf24f6306b24_prof);

        
        $__internal_81a04f339c5e96d3dbbb0c520ffb51aa50454fd1b99e40970ef47de4a615c273->leave($__internal_81a04f339c5e96d3dbbb0c520ffb51aa50454fd1b99e40970ef47de4a615c273_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8b99be1a66391734ebed1b186c3826f16df2165618669fa5bcb9813b76df278d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b99be1a66391734ebed1b186c3826f16df2165618669fa5bcb9813b76df278d->enter($__internal_8b99be1a66391734ebed1b186c3826f16df2165618669fa5bcb9813b76df278d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6782399fb2156eda59196561b37dd268bcbbbb256fba9bd340d540ea8cf0c90d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6782399fb2156eda59196561b37dd268bcbbbb256fba9bd340d540ea8cf0c90d->enter($__internal_6782399fb2156eda59196561b37dd268bcbbbb256fba9bd340d540ea8cf0c90d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Department") : ("Edit Department"));
        echo "
";
        
        $__internal_6782399fb2156eda59196561b37dd268bcbbbb256fba9bd340d540ea8cf0c90d->leave($__internal_6782399fb2156eda59196561b37dd268bcbbbb256fba9bd340d540ea8cf0c90d_prof);

        
        $__internal_8b99be1a66391734ebed1b186c3826f16df2165618669fa5bcb9813b76df278d->leave($__internal_8b99be1a66391734ebed1b186c3826f16df2165618669fa5bcb9813b76df278d_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_383eb41bd061b05ee4bcd631309390ab79b79c297cf4a24d2e80edcc213eb814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_383eb41bd061b05ee4bcd631309390ab79b79c297cf4a24d2e80edcc213eb814->enter($__internal_383eb41bd061b05ee4bcd631309390ab79b79c297cf4a24d2e80edcc213eb814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_a1e078c36f1f5a7bbde399aadaef95db825cae4a087bc400033313156dbafad1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1e078c36f1f5a7bbde399aadaef95db825cae4a087bc400033313156dbafad1->enter($__internal_a1e078c36f1f5a7bbde399aadaef95db825cae4a087bc400033313156dbafad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_a1e078c36f1f5a7bbde399aadaef95db825cae4a087bc400033313156dbafad1->leave($__internal_a1e078c36f1f5a7bbde399aadaef95db825cae4a087bc400033313156dbafad1_prof);

        
        $__internal_383eb41bd061b05ee4bcd631309390ab79b79c297cf4a24d2e80edcc213eb814->leave($__internal_383eb41bd061b05ee4bcd631309390ab79b79c297cf4a24d2e80edcc213eb814_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_eed73d290971233bec532c5f4530c4235d11f542ef95c9d1e5f5f59342be5b52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eed73d290971233bec532c5f4530c4235d11f542ef95c9d1e5f5f59342be5b52->enter($__internal_eed73d290971233bec532c5f4530c4235d11f542ef95c9d1e5f5f59342be5b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0879b82a0f39ff2b9a0a2fe3bfc8be637f1d9525806e6376a148b24d36924e0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0879b82a0f39ff2b9a0a2fe3bfc8be637f1d9525806e6376a148b24d36924e0a->enter($__internal_0879b82a0f39ff2b9a0a2fe3bfc8be637f1d9525806e6376a148b24d36924e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Department") : ("Edit Department"));
        echo "</h1>
      <h2>";
        // line 16
        echo twig_escape_filter($this->env, ((array_key_exists("result_message", $context)) ? (($context["result_message"] ?? $this->getContext($context, "result_message"))) : ("")), "html", null, true);
        echo "</h2>

      <label for=\"form[department_code]\">Department Code</label>
      <input type=\"text\" name=\"form[department_code]\" placeholder=\"DoIM\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "department_code", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "department_code", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[department_name]\">Department Name</label>
      <input type=\"text\" name=\"form[department_name]\" placeholder=\"Department One\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "department_name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "department_name", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[department_school]\">Department School</label>
      <select name=\"form[department_school]\">
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["schools"] ?? $this->getContext($context, "schools")));
        foreach ($context['_seq'] as $context["_key"] => $context["school"]) {
            // line 27
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "id", array()), "html", null, true);
            echo "\" ";
            echo ((($this->getAttribute($context["school"], "id", array()) == (($this->getAttribute(($context["form"] ?? null), "department_school", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "department_school", array())) : ("")))) ? ("selected") : (""));
            echo " >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "schoolName", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['school'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "      </select>

      <button>";
        // line 31
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Create Department") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_0879b82a0f39ff2b9a0a2fe3bfc8be637f1d9525806e6376a148b24d36924e0a->leave($__internal_0879b82a0f39ff2b9a0a2fe3bfc8be637f1d9525806e6376a148b24d36924e0a_prof);

        
        $__internal_eed73d290971233bec532c5f4530c4235d11f542ef95c9d1e5f5f59342be5b52->leave($__internal_eed73d290971233bec532c5f4530c4235d11f542ef95c9d1e5f5f59342be5b52_prof);

    }

    public function getTemplateName()
    {
        return "department/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 31,  139 => 29,  126 => 27,  122 => 26,  115 => 22,  109 => 19,  103 => 16,  99 => 15,  95 => 13,  86 => 12,  73 => 7,  64 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  {{ (mode == 'new') ? 'New Department' : 'Edit Department' }}
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">{{ (mode == 'new') ? 'New Department' : 'Edit Department' }}</h1>
      <h2>{{ result_message is defined ? result_message : '' }}</h2>

      <label for=\"form[department_code]\">Department Code</label>
      <input type=\"text\" name=\"form[department_code]\" placeholder=\"DoIM\" value=\"{{ form.department_code is defined ? form.department_code : '' }}\" required />

      <label for=\"form[department_name]\">Department Name</label>
      <input type=\"text\" name=\"form[department_name]\" placeholder=\"Department One\" value=\"{{ form.department_name is defined ? form.department_name : '' }}\" required />

      <label for=\"form[department_school]\">Department School</label>
      <select name=\"form[department_school]\">
        {% for school in schools %}
          <option value=\"{{ school.id }}\" {{ (school.id == (form.department_school is defined ? form.department_school : '')) ? 'selected' : '' }} >{{ school.schoolName }}</option>
        {% endfor %}
      </select>

      <button>{{ (mode == 'new') ? 'Create Department' : 'Save Changes' }}</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", "department/form.html.twig", "/home/apollo-19/github/B-A-Project/app/Resources/views/department/form.html.twig");
    }
}
