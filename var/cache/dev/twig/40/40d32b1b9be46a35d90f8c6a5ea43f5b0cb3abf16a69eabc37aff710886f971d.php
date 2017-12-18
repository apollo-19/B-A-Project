<?php

/* :result:view.html.twig */
class __TwigTemplate_e1ed3ed4d10dc6ebd90a2258e3a6c7c6b556303b49d9701e40f594f24004c63b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":result:view.html.twig", 1);
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
        $__internal_a99fe6c57991c54fc04626cfd678fd8a8faf89a9b21c3d2ef98541e09e796345 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a99fe6c57991c54fc04626cfd678fd8a8faf89a9b21c3d2ef98541e09e796345->enter($__internal_a99fe6c57991c54fc04626cfd678fd8a8faf89a9b21c3d2ef98541e09e796345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":result:view.html.twig"));

        $__internal_dadd1b80ffe178f09f65b90078eebdfdbde599c6fb5cafb4cee0c30e90fdf88e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dadd1b80ffe178f09f65b90078eebdfdbde599c6fb5cafb4cee0c30e90fdf88e->enter($__internal_dadd1b80ffe178f09f65b90078eebdfdbde599c6fb5cafb4cee0c30e90fdf88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":result:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a99fe6c57991c54fc04626cfd678fd8a8faf89a9b21c3d2ef98541e09e796345->leave($__internal_a99fe6c57991c54fc04626cfd678fd8a8faf89a9b21c3d2ef98541e09e796345_prof);

        
        $__internal_dadd1b80ffe178f09f65b90078eebdfdbde599c6fb5cafb4cee0c30e90fdf88e->leave($__internal_dadd1b80ffe178f09f65b90078eebdfdbde599c6fb5cafb4cee0c30e90fdf88e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_93b01e6991bca49bf23842092752ca6297e8d682c9eb852804c986ce8eb1f771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93b01e6991bca49bf23842092752ca6297e8d682c9eb852804c986ce8eb1f771->enter($__internal_93b01e6991bca49bf23842092752ca6297e8d682c9eb852804c986ce8eb1f771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8d87ebb90f4955167f40ebb75ffee492d9821749b65ebe09d21a1c5a357ff18f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d87ebb90f4955167f40ebb75ffee492d9821749b65ebe09d21a1c5a357ff18f->enter($__internal_8d87ebb90f4955167f40ebb75ffee492d9821749b65ebe09d21a1c5a357ff18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Results View
";
        
        $__internal_8d87ebb90f4955167f40ebb75ffee492d9821749b65ebe09d21a1c5a357ff18f->leave($__internal_8d87ebb90f4955167f40ebb75ffee492d9821749b65ebe09d21a1c5a357ff18f_prof);

        
        $__internal_93b01e6991bca49bf23842092752ca6297e8d682c9eb852804c986ce8eb1f771->leave($__internal_93b01e6991bca49bf23842092752ca6297e8d682c9eb852804c986ce8eb1f771_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_1d59bf5d3ba0909903ae54f543277e7ac7b38eefc7a1a0a58e9fe8be0e41bf04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d59bf5d3ba0909903ae54f543277e7ac7b38eefc7a1a0a58e9fe8be0e41bf04->enter($__internal_1d59bf5d3ba0909903ae54f543277e7ac7b38eefc7a1a0a58e9fe8be0e41bf04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_f58e93ea2764a3d5a5d250b60d16458a7293015ee12e7a7b5a66182b8b04167a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f58e93ea2764a3d5a5d250b60d16458a7293015ee12e7a7b5a66182b8b04167a->enter($__internal_f58e93ea2764a3d5a5d250b60d16458a7293015ee12e7a7b5a66182b8b04167a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_f58e93ea2764a3d5a5d250b60d16458a7293015ee12e7a7b5a66182b8b04167a->leave($__internal_f58e93ea2764a3d5a5d250b60d16458a7293015ee12e7a7b5a66182b8b04167a_prof);

        
        $__internal_1d59bf5d3ba0909903ae54f543277e7ac7b38eefc7a1a0a58e9fe8be0e41bf04->leave($__internal_1d59bf5d3ba0909903ae54f543277e7ac7b38eefc7a1a0a58e9fe8be0e41bf04_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_268711d57d68316da4f6c1d3413f96bc5425f39727450350c21a5289a1f8a3a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_268711d57d68316da4f6c1d3413f96bc5425f39727450350c21a5289a1f8a3a4->enter($__internal_268711d57d68316da4f6c1d3413f96bc5425f39727450350c21a5289a1f8a3a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a0d0bffaf496829cdac1d841a918c3df2898c6feef0fbc4640c100aff7edd926 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0d0bffaf496829cdac1d841a918c3df2898c6feef0fbc4640c100aff7edd926->enter($__internal_a0d0bffaf496829cdac1d841a918c3df2898c6feef0fbc4640c100aff7edd926_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <table border=\"0\">
      <thead>
        <tr>
          <th>Session Code</th>
          <th>Student</th>
          <th>Result</th>
          <th>Grade</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["results"] ?? $this->getContext($context, "results")));
        foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
            // line 26
            echo "          <tr>
            <td>
              ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["school_sessions"] ?? $this->getContext($context, "school_sessions")));
            foreach ($context['_seq'] as $context["_key"] => $context["school_session"]) {
                // line 29
                echo "                ";
                if (($this->getAttribute($context["result"], "sessionId", array()) == $this->getAttribute($context["school_session"], "id", array()))) {
                    // line 30
                    echo "                  ";
                    echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["school_session"], "sessionCode", array())), "html", null, true);
                    echo "
                ";
                }
                // line 32
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['school_session'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </td>

            <td>
              ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["students"] ?? $this->getContext($context, "students")));
            foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                // line 37
                echo "                ";
                if (($this->getAttribute($context["result"], "studentId", array()) == $this->getAttribute($context["student"], "id", array()))) {
                    // line 38
                    echo "                  ";
                    echo twig_escape_filter($this->env, (((($this->getAttribute($context["student"], "firstNameEn", array()) . " ") . $this->getAttribute($context["student"], "middleNameEn", array())) . " ") . $this->getAttribute($context["student"], "lastNameEn", array())), "html", null, true);
                    echo "
                ";
                }
                // line 40
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "            </td>

            <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "resultInNumber", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["result"], "resultInAlphabet", array()), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("session_view", array("result_id" => $this->getAttribute($context["result"], "id", array()))), "html", null, true);
            echo "\" id=\"editBtn\">assessement</button></td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_a0d0bffaf496829cdac1d841a918c3df2898c6feef0fbc4640c100aff7edd926->leave($__internal_a0d0bffaf496829cdac1d841a918c3df2898c6feef0fbc4640c100aff7edd926_prof);

        
        $__internal_268711d57d68316da4f6c1d3413f96bc5425f39727450350c21a5289a1f8a3a4->leave($__internal_268711d57d68316da4f6c1d3413f96bc5425f39727450350c21a5289a1f8a3a4_prof);

    }

    public function getTemplateName()
    {
        return ":result:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 48,  170 => 45,  166 => 44,  162 => 43,  158 => 41,  152 => 40,  146 => 38,  143 => 37,  139 => 36,  134 => 33,  128 => 32,  122 => 30,  119 => 29,  115 => 28,  111 => 26,  107 => 25,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  Results View
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
          <th>Session Code</th>
          <th>Student</th>
          <th>Result</th>
          <th>Grade</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        {% for result in results %}
          <tr>
            <td>
              {% for school_session in school_sessions %}
                {% if(result.sessionId == school_session.id) %}
                  {{ school_session.sessionCode | upper }}
                {% endif %}
              {% endfor %}
            </td>

            <td>
              {% for student in students %}
                {% if(result.studentId == student.id) %}
                  {{ student.firstNameEn ~ ' ' ~ student.middleNameEn ~ ' ' ~ student.lastNameEn }}
                {% endif %}
              {% endfor %}
            </td>

            <td>{{ result.resultInNumber }}</td>
            <td>{{ result.resultInAlphabet }}</td>
            <td><a href=\"{{ path('session_view', {'result_id': result.id}) }}\" id=\"editBtn\">assessement</button></td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", ":result:view.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/result/view.html.twig");
    }
}
