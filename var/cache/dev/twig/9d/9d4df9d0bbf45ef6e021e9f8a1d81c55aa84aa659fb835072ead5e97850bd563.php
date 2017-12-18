<?php

/* :school:view.html.twig */
class __TwigTemplate_922df6a38b20cee6cc0392f5ffeea32a184d34a752b5d35bbbd146efc471e513 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":school:view.html.twig", 1);
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
        $__internal_bd6aa1f37e76a77101929668b150b9d8cf80b4630f3192c8706be6517152b303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd6aa1f37e76a77101929668b150b9d8cf80b4630f3192c8706be6517152b303->enter($__internal_bd6aa1f37e76a77101929668b150b9d8cf80b4630f3192c8706be6517152b303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":school:view.html.twig"));

        $__internal_88ebf9748da5a9d1702e4d3fd6d7c296bc6106b5db7062b008e2fd85451ce5df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88ebf9748da5a9d1702e4d3fd6d7c296bc6106b5db7062b008e2fd85451ce5df->enter($__internal_88ebf9748da5a9d1702e4d3fd6d7c296bc6106b5db7062b008e2fd85451ce5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":school:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd6aa1f37e76a77101929668b150b9d8cf80b4630f3192c8706be6517152b303->leave($__internal_bd6aa1f37e76a77101929668b150b9d8cf80b4630f3192c8706be6517152b303_prof);

        
        $__internal_88ebf9748da5a9d1702e4d3fd6d7c296bc6106b5db7062b008e2fd85451ce5df->leave($__internal_88ebf9748da5a9d1702e4d3fd6d7c296bc6106b5db7062b008e2fd85451ce5df_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b4144dd2daaa109cf29f4af86923dd2e7c626a4239f7257d2c4ea12dc3ae17c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b4144dd2daaa109cf29f4af86923dd2e7c626a4239f7257d2c4ea12dc3ae17c->enter($__internal_2b4144dd2daaa109cf29f4af86923dd2e7c626a4239f7257d2c4ea12dc3ae17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d67a0bed1d78b577debeb9ce5c128e17b456d4415c24f72ea5a8ca76cbfd9c14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d67a0bed1d78b577debeb9ce5c128e17b456d4415c24f72ea5a8ca76cbfd9c14->enter($__internal_d67a0bed1d78b577debeb9ce5c128e17b456d4415c24f72ea5a8ca76cbfd9c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  School View
";
        
        $__internal_d67a0bed1d78b577debeb9ce5c128e17b456d4415c24f72ea5a8ca76cbfd9c14->leave($__internal_d67a0bed1d78b577debeb9ce5c128e17b456d4415c24f72ea5a8ca76cbfd9c14_prof);

        
        $__internal_2b4144dd2daaa109cf29f4af86923dd2e7c626a4239f7257d2c4ea12dc3ae17c->leave($__internal_2b4144dd2daaa109cf29f4af86923dd2e7c626a4239f7257d2c4ea12dc3ae17c_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_329bc1d93b3f283964dd2e8326ca8c6f4c9a84fb51538e7bcd80c3af0e2146f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_329bc1d93b3f283964dd2e8326ca8c6f4c9a84fb51538e7bcd80c3af0e2146f2->enter($__internal_329bc1d93b3f283964dd2e8326ca8c6f4c9a84fb51538e7bcd80c3af0e2146f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_2ff7a3e49b43c9a85983c948ed476095f717ce8ec293b012c7e1f6eb15e9288b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ff7a3e49b43c9a85983c948ed476095f717ce8ec293b012c7e1f6eb15e9288b->enter($__internal_2ff7a3e49b43c9a85983c948ed476095f717ce8ec293b012c7e1f6eb15e9288b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_2ff7a3e49b43c9a85983c948ed476095f717ce8ec293b012c7e1f6eb15e9288b->leave($__internal_2ff7a3e49b43c9a85983c948ed476095f717ce8ec293b012c7e1f6eb15e9288b_prof);

        
        $__internal_329bc1d93b3f283964dd2e8326ca8c6f4c9a84fb51538e7bcd80c3af0e2146f2->leave($__internal_329bc1d93b3f283964dd2e8326ca8c6f4c9a84fb51538e7bcd80c3af0e2146f2_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a7d00ea2e93fe1b65e8b803c8c3f4c38d50bcffe9a47f02019a08fde5579b57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a7d00ea2e93fe1b65e8b803c8c3f4c38d50bcffe9a47f02019a08fde5579b57->enter($__internal_5a7d00ea2e93fe1b65e8b803c8c3f4c38d50bcffe9a47f02019a08fde5579b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e71c15647290b27a315b49743742e606ba9540631d917a6e669ebec14286d68f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e71c15647290b27a315b49743742e606ba9540631d917a6e669ebec14286d68f->enter($__internal_e71c15647290b27a315b49743742e606ba9540631d917a6e669ebec14286d68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("school_create");
        echo "\">New School</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>School Code</th>
          <th>School Name</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["schools"] ?? $this->getContext($context, "schools")));
        foreach ($context['_seq'] as $context["_key"] => $context["school"]) {
            // line 25
            echo "          <tr>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "schoolCode", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "schoolName", array()), "html", null, true);
            echo "</td>

            <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("school_view_one", array("school_id" => $this->getAttribute($context["school"], "id", array()))), "html", null, true);
            echo "\">view</a></td>

            ";
            // line 31
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_type"), "method") == "admin")) {
                // line 32
                echo "              <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("school_edit", array("school_id" => $this->getAttribute($context["school"], "id", array()))), "html", null, true);
                echo "\" id=\"editBtn\">edit</button></td>
              <td><a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("school_delete", array("school_id" => $this->getAttribute($context["school"], "id", array()))), "html", null, true);
                echo "\" id=\"deleteBtn\"
                  onclick=\"return confirm('Are You Sure You Want To Delete ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "schoolName", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "schoolCode", array()), "html", null, true);
                echo ")?') \">delete</button></td>
            ";
            }
            // line 36
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['school'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_e71c15647290b27a315b49743742e606ba9540631d917a6e669ebec14286d68f->leave($__internal_e71c15647290b27a315b49743742e606ba9540631d917a6e669ebec14286d68f_prof);

        
        $__internal_5a7d00ea2e93fe1b65e8b803c8c3f4c38d50bcffe9a47f02019a08fde5579b57->leave($__internal_5a7d00ea2e93fe1b65e8b803c8c3f4c38d50bcffe9a47f02019a08fde5579b57_prof);

    }

    public function getTemplateName()
    {
        return ":school:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 38,  148 => 36,  141 => 34,  137 => 33,  132 => 32,  130 => 31,  125 => 29,  120 => 27,  116 => 26,  113 => 25,  109 => 24,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  School View
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container\" id=\"view_container\">
    <a href=\"{{ path('school_create') }}\">New School</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>School Code</th>
          <th>School Name</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        {% for school in schools %}
          <tr>
            <td>{{ school.schoolCode }}</td>
            <td>{{ school.schoolName }}</td>

            <td><a href=\"{{ path('school_view_one', {'school_id': school.id}) }}\">view</a></td>

            {% if(app.session.get('user_type') == 'admin') %}
              <td><a href=\"{{ path('school_edit', {'school_id': school.id}) }}\" id=\"editBtn\">edit</button></td>
              <td><a href=\"{{ path('school_delete', {'school_id': school.id}) }}\" id=\"deleteBtn\"
                  onclick=\"return confirm('Are You Sure You Want To Delete {{ school.schoolName }} ({{ school.schoolCode }})?') \">delete</button></td>
            {% endif %}
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", ":school:view.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/school/view.html.twig");
    }
}
