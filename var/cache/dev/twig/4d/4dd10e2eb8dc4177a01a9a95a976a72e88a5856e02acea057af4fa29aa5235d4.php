<?php

/* :batch:view.html.twig */
class __TwigTemplate_77442b98a5e7f1560ab7d1fd2b0185913e8b6a92a9abe5077f27b57a3d01beca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":batch:view.html.twig", 1);
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
        $__internal_a81a36ae941b536144c40d7524537ae5fa9194317faf91a6677fad8a3d1b3db9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a81a36ae941b536144c40d7524537ae5fa9194317faf91a6677fad8a3d1b3db9->enter($__internal_a81a36ae941b536144c40d7524537ae5fa9194317faf91a6677fad8a3d1b3db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":batch:view.html.twig"));

        $__internal_afa38692f60628a98e486ce2ceb6ca38d4855a636133a2b391f3c678af9856bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa38692f60628a98e486ce2ceb6ca38d4855a636133a2b391f3c678af9856bb->enter($__internal_afa38692f60628a98e486ce2ceb6ca38d4855a636133a2b391f3c678af9856bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":batch:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a81a36ae941b536144c40d7524537ae5fa9194317faf91a6677fad8a3d1b3db9->leave($__internal_a81a36ae941b536144c40d7524537ae5fa9194317faf91a6677fad8a3d1b3db9_prof);

        
        $__internal_afa38692f60628a98e486ce2ceb6ca38d4855a636133a2b391f3c678af9856bb->leave($__internal_afa38692f60628a98e486ce2ceb6ca38d4855a636133a2b391f3c678af9856bb_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f85c33a8a94e4950b5efce0e804eec4b156a773a5d3cac5b18adf504aa4b1b41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f85c33a8a94e4950b5efce0e804eec4b156a773a5d3cac5b18adf504aa4b1b41->enter($__internal_f85c33a8a94e4950b5efce0e804eec4b156a773a5d3cac5b18adf504aa4b1b41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_de5f8896c70c24a5dd6645502c8368f0f9c3857a10098088c8cb73ffbf4a1548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de5f8896c70c24a5dd6645502c8368f0f9c3857a10098088c8cb73ffbf4a1548->enter($__internal_de5f8896c70c24a5dd6645502c8368f0f9c3857a10098088c8cb73ffbf4a1548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Batch View
";
        
        $__internal_de5f8896c70c24a5dd6645502c8368f0f9c3857a10098088c8cb73ffbf4a1548->leave($__internal_de5f8896c70c24a5dd6645502c8368f0f9c3857a10098088c8cb73ffbf4a1548_prof);

        
        $__internal_f85c33a8a94e4950b5efce0e804eec4b156a773a5d3cac5b18adf504aa4b1b41->leave($__internal_f85c33a8a94e4950b5efce0e804eec4b156a773a5d3cac5b18adf504aa4b1b41_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_83cb63ad9b09150a740374b7667c5f6b2a81e8970862955bf2fc6dcba08c9ecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83cb63ad9b09150a740374b7667c5f6b2a81e8970862955bf2fc6dcba08c9ecf->enter($__internal_83cb63ad9b09150a740374b7667c5f6b2a81e8970862955bf2fc6dcba08c9ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_64da2f15fc8b874d59b35f97fdd0ec8d3cec1eef674f49d39bb1b2691bfdce3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64da2f15fc8b874d59b35f97fdd0ec8d3cec1eef674f49d39bb1b2691bfdce3a->enter($__internal_64da2f15fc8b874d59b35f97fdd0ec8d3cec1eef674f49d39bb1b2691bfdce3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_64da2f15fc8b874d59b35f97fdd0ec8d3cec1eef674f49d39bb1b2691bfdce3a->leave($__internal_64da2f15fc8b874d59b35f97fdd0ec8d3cec1eef674f49d39bb1b2691bfdce3a_prof);

        
        $__internal_83cb63ad9b09150a740374b7667c5f6b2a81e8970862955bf2fc6dcba08c9ecf->leave($__internal_83cb63ad9b09150a740374b7667c5f6b2a81e8970862955bf2fc6dcba08c9ecf_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_709f5d369d40700891cb028f51a56e10ebd883507c8acc6db8bd17345a1d1a01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_709f5d369d40700891cb028f51a56e10ebd883507c8acc6db8bd17345a1d1a01->enter($__internal_709f5d369d40700891cb028f51a56e10ebd883507c8acc6db8bd17345a1d1a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_381669c5b354bece0f8880e4db45994f3c6190673a28a7e65d504f80009499d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_381669c5b354bece0f8880e4db45994f3c6190673a28a7e65d504f80009499d1->enter($__internal_381669c5b354bece0f8880e4db45994f3c6190673a28a7e65d504f80009499d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("batch_create");
        echo "\">New Batch</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Batch Code</th>
          <th>Batch Name</th>
          <th>Batch Year</th>
          <th>Batch School</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["batchs"] ?? $this->getContext($context, "batchs")));
        foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
            // line 27
            echo "          <tr>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["batch"], "batchCode", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["batch"], "batchName", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["batch"], "batchYear", array()), "html", null, true);
            echo "</td>
            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["schools"] ?? $this->getContext($context, "schools")));
            foreach ($context['_seq'] as $context["_key"] => $context["school"]) {
                // line 32
                echo "              ";
                if (($this->getAttribute($context["batch"], "schoolId", array()) == $this->getAttribute($context["school"], "id", array()))) {
                    // line 33
                    echo "                <td> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "schoolName", array()), "html", null, true);
                    echo " </td>
              ";
                }
                // line 35
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['school'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "
            <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("batch_view_one", array("batch_id" => $this->getAttribute($context["batch"], "id", array()))), "html", null, true);
            echo "\">view</button></td>
            <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("batch_edit", array("batch_id" => $this->getAttribute($context["batch"], "id", array()))), "html", null, true);
            echo "\" id=\"editBtn\">edit</button></td>
            <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("batch_delete", array("batch_id" => $this->getAttribute($context["batch"], "id", array()))), "html", null, true);
            echo "\" id=\"deleteBtn\"
                  onclick=\"return confirm('Are You Sure You Want To Delete ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["batch"], "batchName", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["batch"], "batchCode", array()), "html", null, true);
            echo ")?') \">delete</button></td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['batch'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_381669c5b354bece0f8880e4db45994f3c6190673a28a7e65d504f80009499d1->leave($__internal_381669c5b354bece0f8880e4db45994f3c6190673a28a7e65d504f80009499d1_prof);

        
        $__internal_709f5d369d40700891cb028f51a56e10ebd883507c8acc6db8bd17345a1d1a01->leave($__internal_709f5d369d40700891cb028f51a56e10ebd883507c8acc6db8bd17345a1d1a01_prof);

    }

    public function getTemplateName()
    {
        return ":batch:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 43,  164 => 40,  160 => 39,  156 => 38,  152 => 37,  149 => 36,  143 => 35,  137 => 33,  134 => 32,  130 => 31,  126 => 30,  122 => 29,  118 => 28,  115 => 27,  111 => 26,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  Batch View
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container\" id=\"view_container\">
    <a href=\"{{ path('batch_create') }}\">New Batch</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Batch Code</th>
          <th>Batch Name</th>
          <th>Batch Year</th>
          <th>Batch School</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        {% for batch in batchs %}
          <tr>
            <td>{{ batch.batchCode }}</td>
            <td>{{ batch.batchName }}</td>
            <td>{{ batch.batchYear }}</td>
            {% for school in schools %}
              {% if(batch.schoolId == school.id) %}
                <td> {{ school.schoolName }} </td>
              {% endif %}
            {% endfor %}

            <td><a href=\"{{ path('batch_view_one', {'batch_id': batch.id}) }}\">view</button></td>
            <td><a href=\"{{ path('batch_edit', {'batch_id': batch.id}) }}\" id=\"editBtn\">edit</button></td>
            <td><a href=\"{{ path('batch_delete', {'batch_id': batch.id}) }}\" id=\"deleteBtn\"
                  onclick=\"return confirm('Are You Sure You Want To Delete {{ batch.batchName }} ({{ batch.batchCode }})?') \">delete</button></td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", ":batch:view.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/batch/view.html.twig");
    }
}
