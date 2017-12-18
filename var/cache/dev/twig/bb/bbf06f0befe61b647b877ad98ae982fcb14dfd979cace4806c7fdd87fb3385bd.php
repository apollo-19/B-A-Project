<?php

/* :assessment:view.html.twig */
class __TwigTemplate_66e8993dd943dbd40fa1fca8138d7bbd619cb1cf247fe1f613638790c8ec8a43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":assessment:view.html.twig", 1);
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
        $__internal_b31da8065058a6103bad467bc8b9be669624280f376772cc7e370996131d4c6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b31da8065058a6103bad467bc8b9be669624280f376772cc7e370996131d4c6c->enter($__internal_b31da8065058a6103bad467bc8b9be669624280f376772cc7e370996131d4c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":assessment:view.html.twig"));

        $__internal_b3f2f383f23d462c03fa84419048fc77292006c0b2419c6b2c2a92ff1d6fbf45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3f2f383f23d462c03fa84419048fc77292006c0b2419c6b2c2a92ff1d6fbf45->enter($__internal_b3f2f383f23d462c03fa84419048fc77292006c0b2419c6b2c2a92ff1d6fbf45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":assessment:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b31da8065058a6103bad467bc8b9be669624280f376772cc7e370996131d4c6c->leave($__internal_b31da8065058a6103bad467bc8b9be669624280f376772cc7e370996131d4c6c_prof);

        
        $__internal_b3f2f383f23d462c03fa84419048fc77292006c0b2419c6b2c2a92ff1d6fbf45->leave($__internal_b3f2f383f23d462c03fa84419048fc77292006c0b2419c6b2c2a92ff1d6fbf45_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_eb37d1e22d8fc6a1b9887688570c5d04eb773af937e0a742dc9b52df484c3e7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb37d1e22d8fc6a1b9887688570c5d04eb773af937e0a742dc9b52df484c3e7e->enter($__internal_eb37d1e22d8fc6a1b9887688570c5d04eb773af937e0a742dc9b52df484c3e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c608c02ca06a6fd322dc0d39903b1fd98aa2182d3f97b8da3da0280afbea9927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c608c02ca06a6fd322dc0d39903b1fd98aa2182d3f97b8da3da0280afbea9927->enter($__internal_c608c02ca06a6fd322dc0d39903b1fd98aa2182d3f97b8da3da0280afbea9927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  School Sessions View
";
        
        $__internal_c608c02ca06a6fd322dc0d39903b1fd98aa2182d3f97b8da3da0280afbea9927->leave($__internal_c608c02ca06a6fd322dc0d39903b1fd98aa2182d3f97b8da3da0280afbea9927_prof);

        
        $__internal_eb37d1e22d8fc6a1b9887688570c5d04eb773af937e0a742dc9b52df484c3e7e->leave($__internal_eb37d1e22d8fc6a1b9887688570c5d04eb773af937e0a742dc9b52df484c3e7e_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_d07d5d3c06e84cbf2e3c3c3866b0f967e90f99287a19da18c37955ae7f95ad72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d07d5d3c06e84cbf2e3c3c3866b0f967e90f99287a19da18c37955ae7f95ad72->enter($__internal_d07d5d3c06e84cbf2e3c3c3866b0f967e90f99287a19da18c37955ae7f95ad72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_2474b5ca8d7a10dfa3dccab719cf9286a8006c70319ea6f1edda751bcc2b509b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2474b5ca8d7a10dfa3dccab719cf9286a8006c70319ea6f1edda751bcc2b509b->enter($__internal_2474b5ca8d7a10dfa3dccab719cf9286a8006c70319ea6f1edda751bcc2b509b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_2474b5ca8d7a10dfa3dccab719cf9286a8006c70319ea6f1edda751bcc2b509b->leave($__internal_2474b5ca8d7a10dfa3dccab719cf9286a8006c70319ea6f1edda751bcc2b509b_prof);

        
        $__internal_d07d5d3c06e84cbf2e3c3c3866b0f967e90f99287a19da18c37955ae7f95ad72->leave($__internal_d07d5d3c06e84cbf2e3c3c3866b0f967e90f99287a19da18c37955ae7f95ad72_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ea7c959945e2e14305319a2da21611b37bf634f2ce87cc0690a65d22b1d951e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ea7c959945e2e14305319a2da21611b37bf634f2ce87cc0690a65d22b1d951e->enter($__internal_7ea7c959945e2e14305319a2da21611b37bf634f2ce87cc0690a65d22b1d951e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e4d54599ada532b2930e37bda77cebed00f1b24abb3e53dc704a3b6bcd2521c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e4d54599ada532b2930e37bda77cebed00f1b24abb3e53dc704a3b6bcd2521c->enter($__internal_4e4d54599ada532b2930e37bda77cebed00f1b24abb3e53dc704a3b6bcd2521c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("session_create");
        echo "\">New School Session</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Session Code</th>
          <th>Session Name</th>
          <th>Session Section</th>
          <th>Session Teacher</th>
          <th>Session Course/Module</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["school_sessions"] ?? $this->getContext($context, "school_sessions")));
        foreach ($context['_seq'] as $context["_key"] => $context["session"]) {
            // line 28
            echo "          <tr>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "sessionCode", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "sessionName", array()), "html", null, true);
            echo "</td>

            <td>
              ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sections"] ?? $this->getContext($context, "sections")));
            foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
                // line 34
                echo "                ";
                if (($this->getAttribute($context["session"], "sectionId", array()) == $this->getAttribute($context["section"], "id", array()))) {
                    // line 35
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "sectionName", array()), "html", null, true);
                    echo "
                ";
                }
                // line 37
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "            </td>

            <td>
              ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["teachers"] ?? $this->getContext($context, "teachers")));
            foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
                // line 42
                echo "                ";
                if (($this->getAttribute($context["session"], "teacherId", array()) == $this->getAttribute($context["teacher"], "id", array()))) {
                    // line 43
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "firstName", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "middleName", array()), "html", null, true);
                    echo "
                ";
                }
                // line 45
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "            </td>

            <td>
              (";
            // line 49
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["session"], "courseModuleType", array())), "html", null, true);
            echo ") -
              ";
            // line 50
            if (($this->getAttribute($context["session"], "courseModuleType", array()) == "course")) {
                // line 51
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? $this->getContext($context, "courses")));
                foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                    // line 52
                    echo "                  ";
                    if (($this->getAttribute($context["session"], "courseModuleId", array()) == $this->getAttribute($context["course"], "id", array()))) {
                        // line 53
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "courseName", array()), "html", null, true);
                        echo "

                  ";
                    }
                    // line 56
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                echo "
              ";
            } elseif (($this->getAttribute(            // line 58
$context["session"], "courseModuleType", array()) == "module")) {
                // line 59
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? $this->getContext($context, "modules")));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 60
                    echo "                  ";
                    if (($this->getAttribute($context["session"], "courseModuleId", array()) == $this->getAttribute($context["module"], "id", array()))) {
                        // line 61
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "moduleName", array()), "html", null, true);
                        echo "
                  ";
                    }
                    // line 63
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 64
                echo "              ";
            }
            // line 65
            echo "            </td>

            ";
            // line 67
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_type"), "method") == "admin")) {
                // line 68
                echo "              <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("session_edit", array("session_id" => $this->getAttribute($context["session"], "id", array()))), "html", null, true);
                echo "\" id=\"editBtn\">edit</button></td>
              <td><a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("session_delete", array("session_id" => $this->getAttribute($context["session"], "id", array()))), "html", null, true);
                echo "\" id=\"deleteBtn\"
                    onclick=\"return confirm('Are You Sure You Want To Delete ";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "sessionName", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "sessionCode", array()), "html", null, true);
                echo ")?') \">delete</button></td>
            ";
            }
            // line 72
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_4e4d54599ada532b2930e37bda77cebed00f1b24abb3e53dc704a3b6bcd2521c->leave($__internal_4e4d54599ada532b2930e37bda77cebed00f1b24abb3e53dc704a3b6bcd2521c_prof);

        
        $__internal_7ea7c959945e2e14305319a2da21611b37bf634f2ce87cc0690a65d22b1d951e->leave($__internal_7ea7c959945e2e14305319a2da21611b37bf634f2ce87cc0690a65d22b1d951e_prof);

    }

    public function getTemplateName()
    {
        return ":assessment:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 74,  256 => 72,  249 => 70,  245 => 69,  240 => 68,  238 => 67,  234 => 65,  231 => 64,  225 => 63,  219 => 61,  216 => 60,  211 => 59,  209 => 58,  206 => 57,  200 => 56,  193 => 53,  190 => 52,  185 => 51,  183 => 50,  179 => 49,  174 => 46,  168 => 45,  160 => 43,  157 => 42,  153 => 41,  148 => 38,  142 => 37,  136 => 35,  133 => 34,  129 => 33,  123 => 30,  119 => 29,  116 => 28,  112 => 27,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  School Sessions View
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container\" id=\"view_container\">
    <a href=\"{{ path('session_create') }}\">New School Session</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Session Code</th>
          <th>Session Name</th>
          <th>Session Section</th>
          <th>Session Teacher</th>
          <th>Session Course/Module</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        {% for session in school_sessions %}
          <tr>
            <td>{{ session.sessionCode }}</td>
            <td>{{ session.sessionName }}</td>

            <td>
              {% for section in sections %}
                {% if(session.sectionId == section.id) %}
                  {{ section.sectionName }}
                {% endif %}
              {% endfor %}
            </td>

            <td>
              {% for teacher in teachers %}
                {% if(session.teacherId == teacher.id) %}
                  {{ teacher.firstName }} {{ teacher.middleName }}
                {% endif %}
              {% endfor %}
            </td>

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

            {% if(app.session.get('user_type') == 'admin') %}
              <td><a href=\"{{ path('session_edit', {'session_id': session.id}) }}\" id=\"editBtn\">edit</button></td>
              <td><a href=\"{{ path('session_delete', {'session_id': session.id}) }}\" id=\"deleteBtn\"
                    onclick=\"return confirm('Are You Sure You Want To Delete {{ session.sessionName }} ({{ session.sessionCode }})?') \">delete</button></td>
            {% endif %}
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", ":assessment:view.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/assessment/view.html.twig");
    }
}
