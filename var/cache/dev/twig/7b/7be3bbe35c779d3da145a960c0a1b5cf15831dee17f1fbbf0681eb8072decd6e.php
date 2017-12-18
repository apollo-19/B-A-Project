<?php

/* :session:view_one.html.twig */
class __TwigTemplate_1cfc197228f44d65e7db67e4fa18f470672692307c01b7f7e3549e057a753ae4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":session:view_one.html.twig", 1);
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
        $__internal_48e9d5d834919b7cf8cdb77467e4064f7a43fa21108099626dda25121a02f4d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48e9d5d834919b7cf8cdb77467e4064f7a43fa21108099626dda25121a02f4d9->enter($__internal_48e9d5d834919b7cf8cdb77467e4064f7a43fa21108099626dda25121a02f4d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":session:view_one.html.twig"));

        $__internal_40915b12ca03815fbd95fd310130e9f62476369acc9e43a88785aca10a75e6a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40915b12ca03815fbd95fd310130e9f62476369acc9e43a88785aca10a75e6a2->enter($__internal_40915b12ca03815fbd95fd310130e9f62476369acc9e43a88785aca10a75e6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":session:view_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48e9d5d834919b7cf8cdb77467e4064f7a43fa21108099626dda25121a02f4d9->leave($__internal_48e9d5d834919b7cf8cdb77467e4064f7a43fa21108099626dda25121a02f4d9_prof);

        
        $__internal_40915b12ca03815fbd95fd310130e9f62476369acc9e43a88785aca10a75e6a2->leave($__internal_40915b12ca03815fbd95fd310130e9f62476369acc9e43a88785aca10a75e6a2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_92ac80d83efd3878438c9801528901a85ae3a8cd2f7be1148dc73029e5db5d8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92ac80d83efd3878438c9801528901a85ae3a8cd2f7be1148dc73029e5db5d8d->enter($__internal_92ac80d83efd3878438c9801528901a85ae3a8cd2f7be1148dc73029e5db5d8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cb72809498c57f1fe60ec6281b391d76fddb7580b6acd20b0726edfa93d83375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb72809498c57f1fe60ec6281b391d76fddb7580b6acd20b0726edfa93d83375->enter($__internal_cb72809498c57f1fe60ec6281b391d76fddb7580b6acd20b0726edfa93d83375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute(($context["session"] ?? $this->getContext($context, "session")), "sessionCode", array())), "html", null, true);
        echo "
";
        
        $__internal_cb72809498c57f1fe60ec6281b391d76fddb7580b6acd20b0726edfa93d83375->leave($__internal_cb72809498c57f1fe60ec6281b391d76fddb7580b6acd20b0726edfa93d83375_prof);

        
        $__internal_92ac80d83efd3878438c9801528901a85ae3a8cd2f7be1148dc73029e5db5d8d->leave($__internal_92ac80d83efd3878438c9801528901a85ae3a8cd2f7be1148dc73029e5db5d8d_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_38b61f6492b0659fddf174c5974e6594fd993ce373b0f76b63f1dba5d6cb76f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38b61f6492b0659fddf174c5974e6594fd993ce373b0f76b63f1dba5d6cb76f6->enter($__internal_38b61f6492b0659fddf174c5974e6594fd993ce373b0f76b63f1dba5d6cb76f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_2d26eefda2ca4b2122c231d0e4c3620ce46b0d484db17e00f8cc35cd2a45098b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d26eefda2ca4b2122c231d0e4c3620ce46b0d484db17e00f8cc35cd2a45098b->enter($__internal_2d26eefda2ca4b2122c231d0e4c3620ce46b0d484db17e00f8cc35cd2a45098b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>
</style>
";
        
        $__internal_2d26eefda2ca4b2122c231d0e4c3620ce46b0d484db17e00f8cc35cd2a45098b->leave($__internal_2d26eefda2ca4b2122c231d0e4c3620ce46b0d484db17e00f8cc35cd2a45098b_prof);

        
        $__internal_38b61f6492b0659fddf174c5974e6594fd993ce373b0f76b63f1dba5d6cb76f6->leave($__internal_38b61f6492b0659fddf174c5974e6594fd993ce373b0f76b63f1dba5d6cb76f6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_239efcfe44596f6c62226c977c5e1182d523d1416bf7a420d4ab1c0fcebaf684 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_239efcfe44596f6c62226c977c5e1182d523d1416bf7a420d4ab1c0fcebaf684->enter($__internal_239efcfe44596f6c62226c977c5e1182d523d1416bf7a420d4ab1c0fcebaf684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_554d5bb7a9e329fb0555f7837b28f0521f2f8331769ae6aa5f57dd7752434596 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_554d5bb7a9e329fb0555f7837b28f0521f2f8331769ae6aa5f57dd7752434596->enter($__internal_554d5bb7a9e329fb0555f7837b28f0521f2f8331769ae6aa5f57dd7752434596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["session"] ?? $this->getContext($context, "session")), "sessionName", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["session"] ?? $this->getContext($context, "session")), "sessionCode", array()), "html", null, true);
        echo ")</h1>

      <table>
        <tr>
          <td>Session Code:</td>
          <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["session"] ?? $this->getContext($context, "session")), "sessionCode", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Session Name:</td>
          <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["session"] ?? $this->getContext($context, "session")), "sessionName", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Session Section:</td>
          <td>
            ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "sectionName", array()), "html", null, true);
        echo "
          </td>
        </tr>

        <tr>
          <td>Session Teacher:</td>
          <td>
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["teachers"] ?? $this->getContext($context, "teachers")));
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 39
            echo "              ";
            if (($this->getAttribute(($context["session"] ?? $this->getContext($context, "session")), "teacherId", array()) == $this->getAttribute($context["teacher"], "id", array()))) {
                // line 40
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "middleName", array()), "html", null, true);
                echo "
              ";
            }
            // line 42
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "          </td>
        </tr>

        <tr>
          <td>Session Grade System:</td>
          <td>
              ";
        // line 49
        echo twig_escape_filter($this->env, ((($this->getAttribute(($context["grade_system"] ?? $this->getContext($context, "grade_system")), "gradeSystemCode", array()) . " (") . $this->getAttribute(($context["grade_system"] ?? $this->getContext($context, "grade_system")), "gradeSystemName", array())) . ")"), "html", null, true);
        echo "
          </td>
        </tr>

        <tr>
          <td>Session Course/Module:</td>
          <td>
            (";
        // line 56
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute(($context["session"] ?? $this->getContext($context, "session")), "courseModuleType", array())), "html", null, true);
        echo ") -
            ";
        // line 57
        if (($this->getAttribute(($context["session"] ?? $this->getContext($context, "session")), "courseModuleType", array()) == "course")) {
            // line 58
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? $this->getContext($context, "courses")));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 59
                echo "                ";
                if (($this->getAttribute(($context["session"] ?? $this->getContext($context, "session")), "courseModuleId", array()) == $this->getAttribute($context["course"], "id", array()))) {
                    // line 60
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "courseName", array()), "html", null, true);
                    echo "

                ";
                }
                // line 63
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "
            ";
        } elseif (($this->getAttribute(        // line 65
($context["session"] ?? $this->getContext($context, "session")), "courseModuleType", array()) == "module")) {
            // line 66
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? $this->getContext($context, "modules")));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 67
                echo "                ";
                if (($this->getAttribute(($context["session"] ?? $this->getContext($context, "session")), "courseModuleId", array()) == $this->getAttribute($context["module"], "id", array()))) {
                    // line 68
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "moduleName", array()), "html", null, true);
                    echo "
                ";
                }
                // line 70
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "            ";
        }
        // line 72
        echo "          </td>
        </tr>

        <tr>
          <td>Session Assessment:</td>
          <td>
            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["assessment_sessions"] ?? $this->getContext($context, "assessment_sessions")));
        foreach ($context['_seq'] as $context["_key"] => $context["assessment_session"]) {
            // line 79
            echo "              ";
            if (($this->getAttribute(($context["session"] ?? $this->getContext($context, "session")), "id", array()) == $this->getAttribute($context["assessment_session"], "assessmentSession", array()))) {
                // line 80
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["assessment_types"] ?? $this->getContext($context, "assessment_types")));
                foreach ($context['_seq'] as $context["_key"] => $context["assessment_type"]) {
                    // line 81
                    echo "                  ";
                    if (($this->getAttribute($context["assessment_type"], "id", array()) == $this->getAttribute($context["assessment_session"], "assessmentId", array()))) {
                        // line 82
                        echo "                    <p> ";
                        echo twig_escape_filter($this->env, ((($this->getAttribute($context["assessment_type"], "assessmentName", array()) . " (") . $this->getAttribute($context["assessment_type"], "assessmentWorth", array())) . "%) "), "html", null, true);
                        echo " </p>
                  ";
                    }
                    // line 84
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assessment_type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "              ";
            }
            // line 86
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assessment_session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "          </td>
        </tr>

        <tr>
          <td>Session Assessment Total:</td>
          <td>
            ";
        // line 93
        $context["assessmentWorthTotal"] = 0;
        // line 94
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["assessment_sessions"] ?? $this->getContext($context, "assessment_sessions")));
        foreach ($context['_seq'] as $context["_key"] => $context["assessment_session"]) {
            // line 95
            echo "              ";
            if (($this->getAttribute(($context["session"] ?? $this->getContext($context, "session")), "id", array()) == $this->getAttribute($context["assessment_session"], "assessmentSession", array()))) {
                // line 96
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["assessment_types"] ?? $this->getContext($context, "assessment_types")));
                foreach ($context['_seq'] as $context["_key"] => $context["assessment_type"]) {
                    // line 97
                    echo "                  ";
                    if (($this->getAttribute($context["assessment_type"], "id", array()) == $this->getAttribute($context["assessment_session"], "assessmentId", array()))) {
                        // line 98
                        echo "                  ";
                        $context["assessmentWorthTotal"] = (($context["assessmentWorthTotal"] ?? $this->getContext($context, "assessmentWorthTotal")) + $this->getAttribute($context["assessment_type"], "assessmentWorth", array()));
                        // line 99
                        echo "                  ";
                    }
                    // line 100
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assessment_type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "              ";
            }
            // line 102
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assessment_session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "
            ";
        // line 104
        echo twig_escape_filter($this->env, (($context["assessmentWorthTotal"] ?? $this->getContext($context, "assessmentWorthTotal")) . "%"), "html", null, true);
        echo "
          </td>
        </tr>

        <tr>
          <td colspan=\"2\">
            <p class=\"clear fright\"><a href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("assessment_session_create", array("school_session_id" => $this->getAttribute(($context["session"] ?? $this->getContext($context, "session")), "id", array()))), "html", null, true);
        echo "\" id=\"editBtn\"> + add assessment type</a></p>
            <p class=\"clear fright\"><a href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("assessment_result_view", array("school_session_id" => $this->getAttribute(($context["session"] ?? $this->getContext($context, "session")), "id", array()))), "html", null, true);
        echo "\" id=\"editBtn\"> + view assessment results</a></p>
            <p class=\"clear fright\"><a href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("session_result_view", array("school_session_id" => $this->getAttribute(($context["session"] ?? $this->getContext($context, "session")), "id", array()))), "html", null, true);
        echo "\" id=\"editBtn\"> + view session results</a></p>
          </td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
";
        
        $__internal_554d5bb7a9e329fb0555f7837b28f0521f2f8331769ae6aa5f57dd7752434596->leave($__internal_554d5bb7a9e329fb0555f7837b28f0521f2f8331769ae6aa5f57dd7752434596_prof);

        
        $__internal_239efcfe44596f6c62226c977c5e1182d523d1416bf7a420d4ab1c0fcebaf684->leave($__internal_239efcfe44596f6c62226c977c5e1182d523d1416bf7a420d4ab1c0fcebaf684_prof);

    }

    public function getTemplateName()
    {
        return ":session:view_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 112,  337 => 111,  333 => 110,  324 => 104,  321 => 103,  315 => 102,  312 => 101,  306 => 100,  303 => 99,  300 => 98,  297 => 97,  292 => 96,  289 => 95,  284 => 94,  282 => 93,  274 => 87,  268 => 86,  265 => 85,  259 => 84,  253 => 82,  250 => 81,  245 => 80,  242 => 79,  238 => 78,  230 => 72,  227 => 71,  221 => 70,  215 => 68,  212 => 67,  207 => 66,  205 => 65,  202 => 64,  196 => 63,  189 => 60,  186 => 59,  181 => 58,  179 => 57,  175 => 56,  165 => 49,  157 => 43,  151 => 42,  143 => 40,  140 => 39,  136 => 38,  126 => 31,  117 => 25,  109 => 20,  99 => 15,  94 => 12,  85 => 11,  73 => 7,  64 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  {{ session.sessionCode | upper }}
{% endblock %}

{% block stylesheet %}
<style>
</style>
{% endblock %}

{% block body %}
  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">{{ session.sessionName }} ({{ session.sessionCode }})</h1>

      <table>
        <tr>
          <td>Session Code:</td>
          <td>{{ session.sessionCode }}</td>
        </tr>

        <tr>
          <td>Session Name:</td>
          <td>{{ session.sessionName }}</td>
        </tr>

        <tr>
          <td>Session Section:</td>
          <td>
            {{ section.sectionName }}
          </td>
        </tr>

        <tr>
          <td>Session Teacher:</td>
          <td>
            {% for teacher in teachers %}
              {% if(session.teacherId == teacher.id) %}
                {{ teacher.firstName }} {{ teacher.middleName }}
              {% endif %}
            {% endfor %}
          </td>
        </tr>

        <tr>
          <td>Session Grade System:</td>
          <td>
              {{ grade_system.gradeSystemCode ~ ' (' ~ grade_system.gradeSystemName ~ ')' }}
          </td>
        </tr>

        <tr>
          <td>Session Course/Module:</td>
          <td>
            ({{ session.courseModuleType | capitalize }}) -
            {% if (session.courseModuleType == 'course') %}
              {% for course in courses %}
                {% if ( session.courseModuleId == course.id ) %}
                  {{ course.courseName }}

                {% endif %}
              {% endfor %}

            {% elseif (session.courseModuleType == 'module') %}
              {% for module in modules %}
                {% if ( session.courseModuleId == module.id ) %}
                  {{ module.moduleName }}
                {% endif %}
              {% endfor %}
            {% endif %}
          </td>
        </tr>

        <tr>
          <td>Session Assessment:</td>
          <td>
            {% for assessment_session in assessment_sessions %}
              {% if(session.id == assessment_session.assessmentSession) %}
                {% for assessment_type in assessment_types %}
                  {% if assessment_type.id == assessment_session.assessmentId %}
                    <p> {{ assessment_type.assessmentName ~ ' (' ~ assessment_type.assessmentWorth ~ '%) ' }} </p>
                  {% endif %}
                {% endfor %}
              {% endif %}
            {% endfor %}
          </td>
        </tr>

        <tr>
          <td>Session Assessment Total:</td>
          <td>
            {% set assessmentWorthTotal = 0 %}
            {% for assessment_session in assessment_sessions %}
              {% if(session.id == assessment_session.assessmentSession) %}
                {% for assessment_type in assessment_types %}
                  {% if assessment_type.id == assessment_session.assessmentId %}
                  {% set assessmentWorthTotal = assessmentWorthTotal + assessment_type.assessmentWorth  %}
                  {% endif %}
                {% endfor %}
              {% endif %}
            {% endfor %}

            {{ assessmentWorthTotal ~ '%' }}
          </td>
        </tr>

        <tr>
          <td colspan=\"2\">
            <p class=\"clear fright\"><a href=\"{{ path('assessment_session_create', {'school_session_id': session.id}) }}\" id=\"editBtn\"> + add assessment type</a></p>
            <p class=\"clear fright\"><a href=\"{{ path('assessment_result_view', {'school_session_id': session.id}) }}\" id=\"editBtn\"> + view assessment results</a></p>
            <p class=\"clear fright\"><a href=\"{{ path('session_result_view', {'school_session_id': session.id}) }}\" id=\"editBtn\"> + view session results</a></p>
          </td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
{% endblock %}
", ":session:view_one.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/session/view_one.html.twig");
    }
}
