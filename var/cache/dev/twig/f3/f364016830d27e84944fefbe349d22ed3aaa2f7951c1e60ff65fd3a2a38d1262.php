<?php

/* :session:view.html.twig */
class __TwigTemplate_7d24f838ecfc09236a4ac3a7a155b88d5310f4e59d7742435f967828f32d74a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":session:view.html.twig", 1);
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
        $__internal_a55e928f55ada774e8b2e0921c3dd80ead3e178d89793a737a7043bffbf4e6a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a55e928f55ada774e8b2e0921c3dd80ead3e178d89793a737a7043bffbf4e6a2->enter($__internal_a55e928f55ada774e8b2e0921c3dd80ead3e178d89793a737a7043bffbf4e6a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":session:view.html.twig"));

        $__internal_fcb41fd3b4386433e1e0984f3094af018d9779a3be7780d3a9bd7ddbbdce61d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb41fd3b4386433e1e0984f3094af018d9779a3be7780d3a9bd7ddbbdce61d0->enter($__internal_fcb41fd3b4386433e1e0984f3094af018d9779a3be7780d3a9bd7ddbbdce61d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":session:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a55e928f55ada774e8b2e0921c3dd80ead3e178d89793a737a7043bffbf4e6a2->leave($__internal_a55e928f55ada774e8b2e0921c3dd80ead3e178d89793a737a7043bffbf4e6a2_prof);

        
        $__internal_fcb41fd3b4386433e1e0984f3094af018d9779a3be7780d3a9bd7ddbbdce61d0->leave($__internal_fcb41fd3b4386433e1e0984f3094af018d9779a3be7780d3a9bd7ddbbdce61d0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5e71124909c3bd5213d0136ab2b22eb0e3143270f527363285490d8498502f3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e71124909c3bd5213d0136ab2b22eb0e3143270f527363285490d8498502f3f->enter($__internal_5e71124909c3bd5213d0136ab2b22eb0e3143270f527363285490d8498502f3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ee0c61cf157c403312bdf259afc21a89334a8a8c5f42347a179c2434863834d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee0c61cf157c403312bdf259afc21a89334a8a8c5f42347a179c2434863834d1->enter($__internal_ee0c61cf157c403312bdf259afc21a89334a8a8c5f42347a179c2434863834d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  School Sessions View
";
        
        $__internal_ee0c61cf157c403312bdf259afc21a89334a8a8c5f42347a179c2434863834d1->leave($__internal_ee0c61cf157c403312bdf259afc21a89334a8a8c5f42347a179c2434863834d1_prof);

        
        $__internal_5e71124909c3bd5213d0136ab2b22eb0e3143270f527363285490d8498502f3f->leave($__internal_5e71124909c3bd5213d0136ab2b22eb0e3143270f527363285490d8498502f3f_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_05539be8cb473c154e61b2f33ddab7522155f8323582a754ddc77753807083c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05539be8cb473c154e61b2f33ddab7522155f8323582a754ddc77753807083c9->enter($__internal_05539be8cb473c154e61b2f33ddab7522155f8323582a754ddc77753807083c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_70417651f3cd8a1dacd7423d43ac20622fda4c9ce3ba0b7e13b97716c7547e4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70417651f3cd8a1dacd7423d43ac20622fda4c9ce3ba0b7e13b97716c7547e4f->enter($__internal_70417651f3cd8a1dacd7423d43ac20622fda4c9ce3ba0b7e13b97716c7547e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_70417651f3cd8a1dacd7423d43ac20622fda4c9ce3ba0b7e13b97716c7547e4f->leave($__internal_70417651f3cd8a1dacd7423d43ac20622fda4c9ce3ba0b7e13b97716c7547e4f_prof);

        
        $__internal_05539be8cb473c154e61b2f33ddab7522155f8323582a754ddc77753807083c9->leave($__internal_05539be8cb473c154e61b2f33ddab7522155f8323582a754ddc77753807083c9_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_66244f3e6b2a47d7d03e6bfae1c7b141666d09903af9da26f030c94a60b16b3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66244f3e6b2a47d7d03e6bfae1c7b141666d09903af9da26f030c94a60b16b3b->enter($__internal_66244f3e6b2a47d7d03e6bfae1c7b141666d09903af9da26f030c94a60b16b3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b38aeb7834a6e1800f543d770c15e76283b2aaace4fbed573a71e6e1b20c722a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b38aeb7834a6e1800f543d770c15e76283b2aaace4fbed573a71e6e1b20c722a->enter($__internal_b38aeb7834a6e1800f543d770c15e76283b2aaace4fbed573a71e6e1b20c722a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("session_view_one", array("session_id" => $this->getAttribute($context["session"], "id", array()))), "html", null, true);
                echo "\" id=\"editBtn\">view</a></td>
              <td><a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("session_edit", array("session_id" => $this->getAttribute($context["session"], "id", array()))), "html", null, true);
                echo "\" id=\"editBtn\">edit</a></td>
              <td><a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("session_delete", array("session_id" => $this->getAttribute($context["session"], "id", array()))), "html", null, true);
                echo "\" id=\"deleteBtn\"
                    onclick=\"return confirm('Are You Sure You Want To Delete ";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "sessionName", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["session"], "sessionCode", array()), "html", null, true);
                echo ")?') \">delete</a></td>
            ";
            }
            // line 73
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_b38aeb7834a6e1800f543d770c15e76283b2aaace4fbed573a71e6e1b20c722a->leave($__internal_b38aeb7834a6e1800f543d770c15e76283b2aaace4fbed573a71e6e1b20c722a_prof);

        
        $__internal_66244f3e6b2a47d7d03e6bfae1c7b141666d09903af9da26f030c94a60b16b3b->leave($__internal_66244f3e6b2a47d7d03e6bfae1c7b141666d09903af9da26f030c94a60b16b3b_prof);

    }

    public function getTemplateName()
    {
        return ":session:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 75,  260 => 73,  253 => 71,  249 => 70,  245 => 69,  240 => 68,  238 => 67,  234 => 65,  231 => 64,  225 => 63,  219 => 61,  216 => 60,  211 => 59,  209 => 58,  206 => 57,  200 => 56,  193 => 53,  190 => 52,  185 => 51,  183 => 50,  179 => 49,  174 => 46,  168 => 45,  160 => 43,  157 => 42,  153 => 41,  148 => 38,  142 => 37,  136 => 35,  133 => 34,  129 => 33,  123 => 30,  119 => 29,  116 => 28,  112 => 27,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
              <td><a href=\"{{ path('session_view_one', {'session_id': session.id}) }}\" id=\"editBtn\">view</a></td>
              <td><a href=\"{{ path('session_edit', {'session_id': session.id}) }}\" id=\"editBtn\">edit</a></td>
              <td><a href=\"{{ path('session_delete', {'session_id': session.id}) }}\" id=\"deleteBtn\"
                    onclick=\"return confirm('Are You Sure You Want To Delete {{ session.sessionName }} ({{ session.sessionCode }})?') \">delete</a></td>
            {% endif %}
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", ":session:view.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/session/view.html.twig");
    }
}
