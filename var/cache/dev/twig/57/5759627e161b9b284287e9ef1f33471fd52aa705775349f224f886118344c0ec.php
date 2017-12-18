<?php

/* :session:result_view.html.twig */
class __TwigTemplate_b129d7f82b93fd57770932fe870678e7a0683cbeea9f91317e87aba5cab6d8c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":session:result_view.html.twig", 1);
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
        $__internal_b995a80831ef112b352d74fc9166aebc3266856c01f7e1a1e464faf833198d2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b995a80831ef112b352d74fc9166aebc3266856c01f7e1a1e464faf833198d2c->enter($__internal_b995a80831ef112b352d74fc9166aebc3266856c01f7e1a1e464faf833198d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":session:result_view.html.twig"));

        $__internal_2a40f202b9c7652b8d5fa18ab81d513497f4035565e70c016a774b1e09e438c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a40f202b9c7652b8d5fa18ab81d513497f4035565e70c016a774b1e09e438c7->enter($__internal_2a40f202b9c7652b8d5fa18ab81d513497f4035565e70c016a774b1e09e438c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":session:result_view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b995a80831ef112b352d74fc9166aebc3266856c01f7e1a1e464faf833198d2c->leave($__internal_b995a80831ef112b352d74fc9166aebc3266856c01f7e1a1e464faf833198d2c_prof);

        
        $__internal_2a40f202b9c7652b8d5fa18ab81d513497f4035565e70c016a774b1e09e438c7->leave($__internal_2a40f202b9c7652b8d5fa18ab81d513497f4035565e70c016a774b1e09e438c7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9930860a036992c0a66c30309032703b59bac27d282cdeed24624e8c8164e6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9930860a036992c0a66c30309032703b59bac27d282cdeed24624e8c8164e6c->enter($__internal_f9930860a036992c0a66c30309032703b59bac27d282cdeed24624e8c8164e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cf20e4a3f5da83bc82555c11146058a1ea46b3835a6a986216b0163fdfbabc8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf20e4a3f5da83bc82555c11146058a1ea46b3835a6a986216b0163fdfbabc8d->enter($__internal_cf20e4a3f5da83bc82555c11146058a1ea46b3835a6a986216b0163fdfbabc8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  School Assessments View
";
        
        $__internal_cf20e4a3f5da83bc82555c11146058a1ea46b3835a6a986216b0163fdfbabc8d->leave($__internal_cf20e4a3f5da83bc82555c11146058a1ea46b3835a6a986216b0163fdfbabc8d_prof);

        
        $__internal_f9930860a036992c0a66c30309032703b59bac27d282cdeed24624e8c8164e6c->leave($__internal_f9930860a036992c0a66c30309032703b59bac27d282cdeed24624e8c8164e6c_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_20df9bd5c4b992a4ca7de0b862a04d425c9bdea64391ba01b0c6db4d405a1061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20df9bd5c4b992a4ca7de0b862a04d425c9bdea64391ba01b0c6db4d405a1061->enter($__internal_20df9bd5c4b992a4ca7de0b862a04d425c9bdea64391ba01b0c6db4d405a1061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_d452bf57af08e6323616c70bb28526785901f6ac55dde00ead80d168185caf81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d452bf57af08e6323616c70bb28526785901f6ac55dde00ead80d168185caf81->enter($__internal_d452bf57af08e6323616c70bb28526785901f6ac55dde00ead80d168185caf81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_d452bf57af08e6323616c70bb28526785901f6ac55dde00ead80d168185caf81->leave($__internal_d452bf57af08e6323616c70bb28526785901f6ac55dde00ead80d168185caf81_prof);

        
        $__internal_20df9bd5c4b992a4ca7de0b862a04d425c9bdea64391ba01b0c6db4d405a1061->leave($__internal_20df9bd5c4b992a4ca7de0b862a04d425c9bdea64391ba01b0c6db4d405a1061_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_865e9609150129774de80aee6d8f17d1da51c7b2a7440089cab4c75ca0b56882 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_865e9609150129774de80aee6d8f17d1da51c7b2a7440089cab4c75ca0b56882->enter($__internal_865e9609150129774de80aee6d8f17d1da51c7b2a7440089cab4c75ca0b56882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a5c0dc4ce82eac5b695b5bd2234ad4a5994c14707f09e1ac3b525fccb57e7ed9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5c0dc4ce82eac5b695b5bd2234ad4a5994c14707f09e1ac3b525fccb57e7ed9->enter($__internal_a5c0dc4ce82eac5b695b5bd2234ad4a5994c14707f09e1ac3b525fccb57e7ed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <table border=\"0\">
      <thead>
        <tr>
          <th>Assessment Result Student</th>

          <th>
            ";
        // line 20
        $context["assessmentWorthTotal"] = 0;
        // line 21
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["assessment_sessions"] ?? $this->getContext($context, "assessment_sessions")));
        foreach ($context['_seq'] as $context["_key"] => $context["assessment_session"]) {
            // line 22
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["assessment_types"] ?? $this->getContext($context, "assessment_types")));
            foreach ($context['_seq'] as $context["_key"] => $context["assessment_type"]) {
                // line 23
                echo "                ";
                if (($this->getAttribute($context["assessment_type"], "id", array()) == $this->getAttribute($context["assessment_session"], "assessmentId", array()))) {
                    // line 24
                    echo "                  ";
                    $context["assessmentWorthTotal"] = (($context["assessmentWorthTotal"] ?? $this->getContext($context, "assessmentWorthTotal")) + $this->getAttribute($context["assessment_type"], "assessmentWorth", array()));
                    // line 25
                    echo "                ";
                }
                // line 26
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assessment_type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assessment_session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            Total ( ";
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
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["students"] ?? $this->getContext($context, "students")));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 39
            echo "          <tr>
            <td>
              ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["students"] ?? $this->getContext($context, "students")));
            foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                // line 42
                echo "                ";
                echo twig_escape_filter($this->env, (((($this->getAttribute($context["student"], "firstNameEn", array()) . " ") . $this->getAttribute($context["student"], "middleNameEn", array())) . " ") . $this->getAttribute($context["student"], "lastNameEn", array())), "html", null, true);
                echo "
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </td>

            <td>
              ";
            // line 47
            $context["assessmentResultTotal"] = 0;
            // line 48
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["assessment_sessions"] ?? $this->getContext($context, "assessment_sessions")));
            foreach ($context['_seq'] as $context["_key"] => $context["assessment_session"]) {
                // line 49
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["assessment_results"] ?? $this->getContext($context, "assessment_results")));
                foreach ($context['_seq'] as $context["_key"] => $context["assessment_result"]) {
                    // line 50
                    echo "                  ";
                    if ((($this->getAttribute($context["student"], "id", array()) == $this->getAttribute($context["assessment_result"], "studentId", array())) && ($this->getAttribute($context["assessment_result"], "assessmentId", array()) == $this->getAttribute($context["assessment_session"], "id", array())))) {
                        // line 51
                        echo "                    ";
                        $context["assessmentResultTotal"] = (($context["assessmentResultTotal"] ?? $this->getContext($context, "assessmentResultTotal")) + $this->getAttribute($context["assessment_result"], "resultValue", array()));
                        // line 52
                        echo "                  ";
                    }
                    // line 53
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assessment_result'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assessment_session'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo "              ";
            echo twig_escape_filter($this->env, ($context["assessmentResultTotal"] ?? $this->getContext($context, "assessmentResultTotal")), "html", null, true);
            echo "
            </td>

            <td>
              ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["grades"] ?? $this->getContext($context, "grades")));
            foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
                // line 60
                echo "                ";
                if (((($context["assessmentResultTotal"] ?? $this->getContext($context, "assessmentResultTotal")) >= $this->getAttribute($context["grade"], "startPoint", array())) && (($context["assessmentResultTotal"] ?? $this->getContext($context, "assessmentResultTotal")) <= $this->getAttribute($context["grade"], "endPoint", array())))) {
                    // line 61
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["grade"], "grade", array()), "html", null, true);
                    echo "
                ";
                }
                // line 63
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grade'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "            </td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_a5c0dc4ce82eac5b695b5bd2234ad4a5994c14707f09e1ac3b525fccb57e7ed9->leave($__internal_a5c0dc4ce82eac5b695b5bd2234ad4a5994c14707f09e1ac3b525fccb57e7ed9_prof);

        
        $__internal_865e9609150129774de80aee6d8f17d1da51c7b2a7440089cab4c75ca0b56882->leave($__internal_865e9609150129774de80aee6d8f17d1da51c7b2a7440089cab4c75ca0b56882_prof);

    }

    public function getTemplateName()
    {
        return ":session:result_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 67,  235 => 64,  229 => 63,  223 => 61,  220 => 60,  216 => 59,  208 => 55,  202 => 54,  196 => 53,  193 => 52,  190 => 51,  187 => 50,  182 => 49,  177 => 48,  175 => 47,  170 => 44,  161 => 42,  157 => 41,  153 => 39,  149 => 38,  135 => 28,  129 => 27,  123 => 26,  120 => 25,  117 => 24,  114 => 23,  109 => 22,  104 => 21,  102 => 20,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
          <th>Assessment Result Student</th>

          <th>
            {% set assessmentWorthTotal = 0 %}
            {% for assessment_session in assessment_sessions %}
              {% for assessment_type in assessment_types %}
                {% if assessment_type.id == assessment_session.assessmentId %}
                  {% set assessmentWorthTotal = assessmentWorthTotal + assessment_type.assessmentWorth %}
                {% endif %}
              {% endfor %}
            {% endfor %}
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

            <td>
              {% set assessmentResultTotal = 0 %}
              {% for assessment_session in assessment_sessions %}
                {% for assessment_result in assessment_results %}
                  {% if student.id == assessment_result.studentId and assessment_result.assessmentId == assessment_session.id %}
                    {% set assessmentResultTotal = assessmentResultTotal + assessment_result.resultValue  %}
                  {% endif %}
                {% endfor %}
              {% endfor %}
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
", ":session:result_view.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/session/result_view.html.twig");
    }
}
