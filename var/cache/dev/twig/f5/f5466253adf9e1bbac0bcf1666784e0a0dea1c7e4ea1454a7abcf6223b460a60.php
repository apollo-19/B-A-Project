<?php

/* :assessment:session_view.html.twig */
class __TwigTemplate_b7da82aec1e644c9fa3bfea6a436cb77ef0f8a848007c69e87eb210e4f2eb91a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":assessment:session_view.html.twig", 1);
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
        $__internal_03315f7f203df0a30cc84d029e26760700d676f0bbae323a3fcf2b03279fb64b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03315f7f203df0a30cc84d029e26760700d676f0bbae323a3fcf2b03279fb64b->enter($__internal_03315f7f203df0a30cc84d029e26760700d676f0bbae323a3fcf2b03279fb64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":assessment:session_view.html.twig"));

        $__internal_09ef8290c39801d377ba779686153a93f26642e8255c81c72657df61dbfa9c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ef8290c39801d377ba779686153a93f26642e8255c81c72657df61dbfa9c86->enter($__internal_09ef8290c39801d377ba779686153a93f26642e8255c81c72657df61dbfa9c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":assessment:session_view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03315f7f203df0a30cc84d029e26760700d676f0bbae323a3fcf2b03279fb64b->leave($__internal_03315f7f203df0a30cc84d029e26760700d676f0bbae323a3fcf2b03279fb64b_prof);

        
        $__internal_09ef8290c39801d377ba779686153a93f26642e8255c81c72657df61dbfa9c86->leave($__internal_09ef8290c39801d377ba779686153a93f26642e8255c81c72657df61dbfa9c86_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_35368312a11f0a856db4111c6fcd85b92c5e73b4be70119347c04a09e9502769 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35368312a11f0a856db4111c6fcd85b92c5e73b4be70119347c04a09e9502769->enter($__internal_35368312a11f0a856db4111c6fcd85b92c5e73b4be70119347c04a09e9502769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5ab7a6b4db41dc248e109fe07324ef21e79de90efff03b2afd52d3a4df3c1142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ab7a6b4db41dc248e109fe07324ef21e79de90efff03b2afd52d3a4df3c1142->enter($__internal_5ab7a6b4db41dc248e109fe07324ef21e79de90efff03b2afd52d3a4df3c1142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  School Assessments View
";
        
        $__internal_5ab7a6b4db41dc248e109fe07324ef21e79de90efff03b2afd52d3a4df3c1142->leave($__internal_5ab7a6b4db41dc248e109fe07324ef21e79de90efff03b2afd52d3a4df3c1142_prof);

        
        $__internal_35368312a11f0a856db4111c6fcd85b92c5e73b4be70119347c04a09e9502769->leave($__internal_35368312a11f0a856db4111c6fcd85b92c5e73b4be70119347c04a09e9502769_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_0b59923592897afa968b86f9af272108df3aa1920df06c0759ed05fa936938f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b59923592897afa968b86f9af272108df3aa1920df06c0759ed05fa936938f0->enter($__internal_0b59923592897afa968b86f9af272108df3aa1920df06c0759ed05fa936938f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_45ed4f594dd0dd9f2dda2c8abdf89d6f05ca876caa9c804ae2021847ca4b9105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45ed4f594dd0dd9f2dda2c8abdf89d6f05ca876caa9c804ae2021847ca4b9105->enter($__internal_45ed4f594dd0dd9f2dda2c8abdf89d6f05ca876caa9c804ae2021847ca4b9105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_45ed4f594dd0dd9f2dda2c8abdf89d6f05ca876caa9c804ae2021847ca4b9105->leave($__internal_45ed4f594dd0dd9f2dda2c8abdf89d6f05ca876caa9c804ae2021847ca4b9105_prof);

        
        $__internal_0b59923592897afa968b86f9af272108df3aa1920df06c0759ed05fa936938f0->leave($__internal_0b59923592897afa968b86f9af272108df3aa1920df06c0759ed05fa936938f0_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_a000377dd1228cc0d866c20e5d9933e16ffe2a34deac0146eef5a8a0904666ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a000377dd1228cc0d866c20e5d9933e16ffe2a34deac0146eef5a8a0904666ed->enter($__internal_a000377dd1228cc0d866c20e5d9933e16ffe2a34deac0146eef5a8a0904666ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a86bebdbc0fd73f4bd7d675e25caaf5b2f5b095ad4ced700bedc61c9c710ba1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a86bebdbc0fd73f4bd7d675e25caaf5b2f5b095ad4ced700bedc61c9c710ba1->enter($__internal_9a86bebdbc0fd73f4bd7d675e25caaf5b2f5b095ad4ced700bedc61c9c710ba1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <table border=\"0\">
      <thead>
        <tr>
          <th>Assessment Name</th>
          <th>Assessment Session</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["assessment_sessions"] ?? $this->getContext($context, "assessment_sessions")));
        foreach ($context['_seq'] as $context["_key"] => $context["assessment"]) {
            // line 24
            echo "          <tr>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["assessment"], "assessmentId", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["assessment"], "assessmentSession", array()), "html", null, true);
            echo "</td>

            ";
            // line 28
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_type"), "method") == "admin")) {
                // line 29
                echo "              <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("assessment_session_edit", array("assessment_session_id" => $this->getAttribute($context["assessment"], "id", array()))), "html", null, true);
                echo "\" id=\"editBtn\">edit</button></td>
              <td><a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("assessment_session_delete", array("assessment_session_id" => $this->getAttribute($context["assessment"], "id", array()))), "html", null, true);
                echo "\" id=\"deleteBtn\"
                    onclick=\"return confirm('Are You Sure You Want To Delete Assessment?') \">delete</button></td>
            ";
            }
            // line 33
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assessment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_9a86bebdbc0fd73f4bd7d675e25caaf5b2f5b095ad4ced700bedc61c9c710ba1->leave($__internal_9a86bebdbc0fd73f4bd7d675e25caaf5b2f5b095ad4ced700bedc61c9c710ba1_prof);

        
        $__internal_a000377dd1228cc0d866c20e5d9933e16ffe2a34deac0146eef5a8a0904666ed->leave($__internal_a000377dd1228cc0d866c20e5d9933e16ffe2a34deac0146eef5a8a0904666ed_prof);

    }

    public function getTemplateName()
    {
        return ":assessment:session_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 35,  134 => 33,  128 => 30,  123 => 29,  121 => 28,  116 => 26,  112 => 25,  109 => 24,  105 => 23,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  School Assessments View
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container\" id=\"view_container\">
    <table border=\"0\">
      <thead>
        <tr>
          <th>Assessment Name</th>
          <th>Assessment Session</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        {% for assessment in assessment_sessions %}
          <tr>
            <td>{{ assessment.assessmentId }}</td>
            <td>{{ assessment.assessmentSession }}</td>

            {% if(app.session.get('user_type') == 'admin') %}
              <td><a href=\"{{ path('assessment_session_edit', {'assessment_session_id': assessment.id}) }}\" id=\"editBtn\">edit</button></td>
              <td><a href=\"{{ path('assessment_session_delete', {'assessment_session_id': assessment.id}) }}\" id=\"deleteBtn\"
                    onclick=\"return confirm('Are You Sure You Want To Delete Assessment?') \">delete</button></td>
            {% endif %}
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", ":assessment:session_view.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/assessment/session_view.html.twig");
    }
}
