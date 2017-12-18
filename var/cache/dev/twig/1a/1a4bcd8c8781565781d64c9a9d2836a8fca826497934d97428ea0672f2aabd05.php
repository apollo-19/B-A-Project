<?php

/* :assessment:result_view.html.twig */
class __TwigTemplate_e8a85f2dc5861ea2521851f4c5ce8d85002f22281aa3c6581bce6857bc9c5e5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":assessment:result_view.html.twig", 1);
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
        $__internal_7e0e5741d02987af205c0c68030584f5910baab5869c7bcf0a1221e0271cb74c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e0e5741d02987af205c0c68030584f5910baab5869c7bcf0a1221e0271cb74c->enter($__internal_7e0e5741d02987af205c0c68030584f5910baab5869c7bcf0a1221e0271cb74c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":assessment:result_view.html.twig"));

        $__internal_29e3398447fcdf1717779720ad41988dec9634f4bd92ba23133cc9d148378d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e3398447fcdf1717779720ad41988dec9634f4bd92ba23133cc9d148378d6a->enter($__internal_29e3398447fcdf1717779720ad41988dec9634f4bd92ba23133cc9d148378d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":assessment:result_view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e0e5741d02987af205c0c68030584f5910baab5869c7bcf0a1221e0271cb74c->leave($__internal_7e0e5741d02987af205c0c68030584f5910baab5869c7bcf0a1221e0271cb74c_prof);

        
        $__internal_29e3398447fcdf1717779720ad41988dec9634f4bd92ba23133cc9d148378d6a->leave($__internal_29e3398447fcdf1717779720ad41988dec9634f4bd92ba23133cc9d148378d6a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_97770ac1e79e9371dbb5016a1a44370da8991354fd4751f8179383c02dce4cfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97770ac1e79e9371dbb5016a1a44370da8991354fd4751f8179383c02dce4cfa->enter($__internal_97770ac1e79e9371dbb5016a1a44370da8991354fd4751f8179383c02dce4cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_27591d38de06255139f3506c9a441883084f3d13064d0af25805e98fa71d6208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27591d38de06255139f3506c9a441883084f3d13064d0af25805e98fa71d6208->enter($__internal_27591d38de06255139f3506c9a441883084f3d13064d0af25805e98fa71d6208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  School Assessments View
";
        
        $__internal_27591d38de06255139f3506c9a441883084f3d13064d0af25805e98fa71d6208->leave($__internal_27591d38de06255139f3506c9a441883084f3d13064d0af25805e98fa71d6208_prof);

        
        $__internal_97770ac1e79e9371dbb5016a1a44370da8991354fd4751f8179383c02dce4cfa->leave($__internal_97770ac1e79e9371dbb5016a1a44370da8991354fd4751f8179383c02dce4cfa_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_2515240629f75e336597f567bec95d1d97fd1fed0e56d010c0aba6e90cfd8a26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2515240629f75e336597f567bec95d1d97fd1fed0e56d010c0aba6e90cfd8a26->enter($__internal_2515240629f75e336597f567bec95d1d97fd1fed0e56d010c0aba6e90cfd8a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_b8959a14d628f93255fd8d801693f08f3059cf402f16d1240e7d60dcaf3f2574 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8959a14d628f93255fd8d801693f08f3059cf402f16d1240e7d60dcaf3f2574->enter($__internal_b8959a14d628f93255fd8d801693f08f3059cf402f16d1240e7d60dcaf3f2574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_b8959a14d628f93255fd8d801693f08f3059cf402f16d1240e7d60dcaf3f2574->leave($__internal_b8959a14d628f93255fd8d801693f08f3059cf402f16d1240e7d60dcaf3f2574_prof);

        
        $__internal_2515240629f75e336597f567bec95d1d97fd1fed0e56d010c0aba6e90cfd8a26->leave($__internal_2515240629f75e336597f567bec95d1d97fd1fed0e56d010c0aba6e90cfd8a26_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_f06d1faad5468831d40ab281a2155b6abeb7be019cec5b2eaa576d7e3cdc5346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f06d1faad5468831d40ab281a2155b6abeb7be019cec5b2eaa576d7e3cdc5346->enter($__internal_f06d1faad5468831d40ab281a2155b6abeb7be019cec5b2eaa576d7e3cdc5346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b314aeb928ec8a8b4eeb47ffb2b760d92377a24c2bc6d974baedd152d37ce04b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b314aeb928ec8a8b4eeb47ffb2b760d92377a24c2bc6d974baedd152d37ce04b->enter($__internal_b314aeb928ec8a8b4eeb47ffb2b760d92377a24c2bc6d974baedd152d37ce04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("assessment_result_create", array("school_session_id" => ($context["school_session_id"] ?? $this->getContext($context, "school_session_id")))), "html", null, true);
        echo "\">Add Student Result</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Assessment Result Student</th>

          ";
        // line 20
        $context["assessmentWorthTotal"] = 0;
        // line 21
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["assessment_sessions"] ?? $this->getContext($context, "assessment_sessions")));
        foreach ($context['_seq'] as $context["_key"] => $context["assessment_session"]) {
            // line 22
            echo "            <th>
              ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["assessment_types"] ?? $this->getContext($context, "assessment_types")));
            foreach ($context['_seq'] as $context["_key"] => $context["assessment_type"]) {
                // line 24
                echo "                ";
                if (($this->getAttribute($context["assessment_type"], "id", array()) == $this->getAttribute($context["assessment_session"], "assessmentId", array()))) {
                    // line 25
                    echo "                  ";
                    $context["assessmentWorthTotal"] = (($context["assessmentWorthTotal"] ?? $this->getContext($context, "assessmentWorthTotal")) + $this->getAttribute($context["assessment_type"], "assessmentWorth", array()));
                    // line 26
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["assessment_type"], "assessmentName", array()), "html", null, true);
                    echo "  ";
                    echo twig_escape_filter($this->env, (("(" . $this->getAttribute($context["assessment_type"], "assessmentWorth", array())) . "%)"), "html", null, true);
                    echo "
                ";
                }
                // line 28
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assessment_type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            </th>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assessment_session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
          <th>
            Total ( ";
        // line 33
        echo twig_escape_filter($this->env, ($context["assessmentWorthTotal"] ?? $this->getContext($context, "assessmentWorthTotal")), "html", null, true);
        echo " %)
          </th>

          <th>
            Grade
          </th>
        </tr>
      </thead>

      <tbody>
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["students"] ?? $this->getContext($context, "students")));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 44
            echo "          <tr>
            <td>
              ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["students"] ?? $this->getContext($context, "students")));
            foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                // line 47
                echo "                ";
                echo twig_escape_filter($this->env, (((($this->getAttribute($context["student"], "firstNameEn", array()) . " ") . $this->getAttribute($context["student"], "middleNameEn", array())) . " ") . $this->getAttribute($context["student"], "lastNameEn", array())), "html", null, true);
                echo "
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "            </td>

            ";
            // line 51
            $context["assessmentResultTotal"] = 0;
            // line 52
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["assessment_sessions"] ?? $this->getContext($context, "assessment_sessions")));
            foreach ($context['_seq'] as $context["_key"] => $context["assessment_session"]) {
                // line 53
                echo "              <td>
                ";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["assessment_results"] ?? $this->getContext($context, "assessment_results")));
                foreach ($context['_seq'] as $context["_key"] => $context["assessment_result"]) {
                    // line 55
                    echo "                  ";
                    if ((($this->getAttribute($context["student"], "id", array()) == $this->getAttribute($context["assessment_result"], "studentId", array())) && ($this->getAttribute($context["assessment_result"], "assessmentId", array()) == $this->getAttribute($context["assessment_session"], "id", array())))) {
                        // line 56
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["assessment_result"], "resultValue", array()), "html", null, true);
                        echo "
                    ";
                        // line 57
                        $context["assessmentResultTotal"] = (($context["assessmentResultTotal"] ?? $this->getContext($context, "assessmentResultTotal")) + $this->getAttribute($context["assessment_result"], "resultValue", array()));
                        // line 58
                        echo "                  ";
                    }
                    // line 59
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assessment_result'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "              </td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assessment_session'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "
            <td>
              ";
            // line 64
            echo twig_escape_filter($this->env, ($context["assessmentResultTotal"] ?? $this->getContext($context, "assessmentResultTotal")), "html", null, true);
            echo "
            </td>

            <td>
              ";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["grades"] ?? $this->getContext($context, "grades")));
            foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
                // line 69
                echo "                ";
                if (((($context["assessmentResultTotal"] ?? $this->getContext($context, "assessmentResultTotal")) >= $this->getAttribute($context["grade"], "startPoint", array())) && (($context["assessmentResultTotal"] ?? $this->getContext($context, "assessmentResultTotal")) <= $this->getAttribute($context["grade"], "endPoint", array())))) {
                    // line 70
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["grade"], "grade", array()), "html", null, true);
                    echo "
                ";
                }
                // line 72
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grade'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_b314aeb928ec8a8b4eeb47ffb2b760d92377a24c2bc6d974baedd152d37ce04b->leave($__internal_b314aeb928ec8a8b4eeb47ffb2b760d92377a24c2bc6d974baedd152d37ce04b_prof);

        
        $__internal_f06d1faad5468831d40ab281a2155b6abeb7be019cec5b2eaa576d7e3cdc5346->leave($__internal_f06d1faad5468831d40ab281a2155b6abeb7be019cec5b2eaa576d7e3cdc5346_prof);

    }

    public function getTemplateName()
    {
        return ":assessment:result_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 76,  258 => 73,  252 => 72,  246 => 70,  243 => 69,  239 => 68,  232 => 64,  228 => 62,  221 => 60,  215 => 59,  212 => 58,  210 => 57,  205 => 56,  202 => 55,  198 => 54,  195 => 53,  190 => 52,  188 => 51,  184 => 49,  175 => 47,  171 => 46,  167 => 44,  163 => 43,  150 => 33,  146 => 31,  139 => 29,  133 => 28,  125 => 26,  122 => 25,  119 => 24,  115 => 23,  112 => 22,  107 => 21,  105 => 20,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
    <a href=\"{{ path('assessment_result_create', {'school_session_id': school_session_id}) }}\">Add Student Result</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Assessment Result Student</th>

          {% set assessmentWorthTotal = 0 %}
          {% for assessment_session in assessment_sessions %}
            <th>
              {% for assessment_type in assessment_types %}
                {% if assessment_type.id == assessment_session.assessmentId %}
                  {% set assessmentWorthTotal = assessmentWorthTotal + assessment_type.assessmentWorth %}
                  {{ assessment_type.assessmentName }}  {{ '('~ assessment_type.assessmentWorth ~'%)'}}
                {% endif %}
              {% endfor %}
            </th>
          {% endfor %}

          <th>
            Total ( {{ assessmentWorthTotal }} %)
          </th>

          <th>
            Grade
          </th>
        </tr>
      </thead>

      <tbody>
        {% for student in students %}
          <tr>
            <td>
              {% for student in students %}
                {{ student.firstNameEn ~ ' ' ~ student.middleNameEn ~ ' ' ~ student.lastNameEn }}
              {% endfor %}
            </td>

            {% set assessmentResultTotal = 0 %}
            {% for assessment_session in assessment_sessions %}
              <td>
                {% for assessment_result in assessment_results %}
                  {% if student.id == assessment_result.studentId and assessment_result.assessmentId == assessment_session.id %}
                    {{ assessment_result.resultValue }}
                    {% set assessmentResultTotal = assessmentResultTotal + assessment_result.resultValue  %}
                  {% endif %}
                {% endfor %}
              </td>
            {% endfor %}

            <td>
              {{ assessmentResultTotal }}
            </td>

            <td>
              {% for grade in grades %}
                {% if assessmentResultTotal >= grade.startPoint and assessmentResultTotal <= grade.endPoint %}
                  {{ grade.grade }}
                {% endif %}
              {% endfor %}
            </td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", ":assessment:result_view.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/assessment/result_view.html.twig");
    }
}
