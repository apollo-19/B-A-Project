<?php

/* :semester:view.html.twig */
class __TwigTemplate_12be2bf43f73904e9cc9221d6c664fefd14497ec51822dc1c9bdcda6468c98d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":semester:view.html.twig", 1);
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
        $__internal_06c6c67d0a368b670477e88d09f8b561f11b6bc998fa0c4abcbf6d29144ef47b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06c6c67d0a368b670477e88d09f8b561f11b6bc998fa0c4abcbf6d29144ef47b->enter($__internal_06c6c67d0a368b670477e88d09f8b561f11b6bc998fa0c4abcbf6d29144ef47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":semester:view.html.twig"));

        $__internal_676ab5433a4d4aee6540cf1b10e3e04fcc699e5af636d4478dff1c63929ad99c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_676ab5433a4d4aee6540cf1b10e3e04fcc699e5af636d4478dff1c63929ad99c->enter($__internal_676ab5433a4d4aee6540cf1b10e3e04fcc699e5af636d4478dff1c63929ad99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":semester:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06c6c67d0a368b670477e88d09f8b561f11b6bc998fa0c4abcbf6d29144ef47b->leave($__internal_06c6c67d0a368b670477e88d09f8b561f11b6bc998fa0c4abcbf6d29144ef47b_prof);

        
        $__internal_676ab5433a4d4aee6540cf1b10e3e04fcc699e5af636d4478dff1c63929ad99c->leave($__internal_676ab5433a4d4aee6540cf1b10e3e04fcc699e5af636d4478dff1c63929ad99c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4d9e06b21a1a54824259eb92799fa07cabda83c6f4a7ae37033c94356768dd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4d9e06b21a1a54824259eb92799fa07cabda83c6f4a7ae37033c94356768dd6->enter($__internal_f4d9e06b21a1a54824259eb92799fa07cabda83c6f4a7ae37033c94356768dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c16d858797a585225cd2fd970018edf421e5b8ac4454260c375072198810b366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16d858797a585225cd2fd970018edf421e5b8ac4454260c375072198810b366->enter($__internal_c16d858797a585225cd2fd970018edf421e5b8ac4454260c375072198810b366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Semester View
";
        
        $__internal_c16d858797a585225cd2fd970018edf421e5b8ac4454260c375072198810b366->leave($__internal_c16d858797a585225cd2fd970018edf421e5b8ac4454260c375072198810b366_prof);

        
        $__internal_f4d9e06b21a1a54824259eb92799fa07cabda83c6f4a7ae37033c94356768dd6->leave($__internal_f4d9e06b21a1a54824259eb92799fa07cabda83c6f4a7ae37033c94356768dd6_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_89e6be77332b4f58265b0c5845f00300f6f47a49dca570823a53f117847b4e62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89e6be77332b4f58265b0c5845f00300f6f47a49dca570823a53f117847b4e62->enter($__internal_89e6be77332b4f58265b0c5845f00300f6f47a49dca570823a53f117847b4e62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_861eeab1edea0e989f60f2da1de8e2d987042a14ea0958b8e29d1f7c4d4b1145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_861eeab1edea0e989f60f2da1de8e2d987042a14ea0958b8e29d1f7c4d4b1145->enter($__internal_861eeab1edea0e989f60f2da1de8e2d987042a14ea0958b8e29d1f7c4d4b1145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_861eeab1edea0e989f60f2da1de8e2d987042a14ea0958b8e29d1f7c4d4b1145->leave($__internal_861eeab1edea0e989f60f2da1de8e2d987042a14ea0958b8e29d1f7c4d4b1145_prof);

        
        $__internal_89e6be77332b4f58265b0c5845f00300f6f47a49dca570823a53f117847b4e62->leave($__internal_89e6be77332b4f58265b0c5845f00300f6f47a49dca570823a53f117847b4e62_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe5e1690ec8df611aaac4f55e91d2f2f76fe36aaed58b7861ee8028338c18bd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe5e1690ec8df611aaac4f55e91d2f2f76fe36aaed58b7861ee8028338c18bd4->enter($__internal_fe5e1690ec8df611aaac4f55e91d2f2f76fe36aaed58b7861ee8028338c18bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_493085b82b7cbfa8e337bc9d8cf77f96e955e22c6a872f45d766d7f9f958da71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_493085b82b7cbfa8e337bc9d8cf77f96e955e22c6a872f45d766d7f9f958da71->enter($__internal_493085b82b7cbfa8e337bc9d8cf77f96e955e22c6a872f45d766d7f9f958da71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("semester_create");
        echo "\">New semester</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Semester</th>
          <th>Year</th>
          <th>Curriculum</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["semesters"] ?? $this->getContext($context, "semesters")));
        foreach ($context['_seq'] as $context["_key"] => $context["semester"]) {
            // line 26
            echo "          <tr>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["semester"], "semester", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["semester"], "year", array()), "html", null, true);
            echo "</td>
            <td>
              ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["curriculums"] ?? $this->getContext($context, "curriculums")));
            foreach ($context['_seq'] as $context["_key"] => $context["curriculum"]) {
                // line 31
                echo "                ";
                if (($this->getAttribute($context["semester"], "curriculumId", array()) == $this->getAttribute($context["curriculum"], "id", array()))) {
                    // line 32
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["curriculum"], "curriculumName", array()), "html", null, true);
                    echo "
                ";
                }
                // line 34
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curriculum'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            </td>

            ";
            // line 37
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_type"), "method") == "admin")) {
                // line 38
                echo "              <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("semester_edit", array("semester_id" => $this->getAttribute($context["semester"], "id", array()))), "html", null, true);
                echo "\" id=\"editBtn\">edit</button></td>
              <td><a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("semester_delete", array("semester_id" => $this->getAttribute($context["semester"], "id", array()))), "html", null, true);
                echo "\" id=\"deleteBtn\"
                    onclick=\"return confirm('Are You Sure You Want To Delete ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["semester"], "semester", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["semester"], "year", array()), "html", null, true);
                echo ")?') \">delete</button></td>
            ";
            }
            // line 42
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['semester'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_493085b82b7cbfa8e337bc9d8cf77f96e955e22c6a872f45d766d7f9f958da71->leave($__internal_493085b82b7cbfa8e337bc9d8cf77f96e955e22c6a872f45d766d7f9f958da71_prof);

        
        $__internal_fe5e1690ec8df611aaac4f55e91d2f2f76fe36aaed58b7861ee8028338c18bd4->leave($__internal_fe5e1690ec8df611aaac4f55e91d2f2f76fe36aaed58b7861ee8028338c18bd4_prof);

    }

    public function getTemplateName()
    {
        return ":semester:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 44,  167 => 42,  160 => 40,  156 => 39,  151 => 38,  149 => 37,  145 => 35,  139 => 34,  133 => 32,  130 => 31,  126 => 30,  121 => 28,  117 => 27,  114 => 26,  110 => 25,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  Semester View
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container\" id=\"view_container\">
    <a href=\"{{ path('semester_create') }}\">New semester</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Semester</th>
          <th>Year</th>
          <th>Curriculum</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        {% for semester in semesters %}
          <tr>
            <td>{{ semester.semester }}</td>
            <td>{{ semester.year }}</td>
            <td>
              {% for curriculum in curriculums %}
                {% if(semester.curriculumId == curriculum.id) %}
                  {{ curriculum.curriculumName }}
                {% endif %}
              {% endfor %}
            </td>

            {% if(app.session.get('user_type') == 'admin') %}
              <td><a href=\"{{ path('semester_edit', {'semester_id': semester.id}) }}\" id=\"editBtn\">edit</button></td>
              <td><a href=\"{{ path('semester_delete', {'semester_id': semester.id}) }}\" id=\"deleteBtn\"
                    onclick=\"return confirm('Are You Sure You Want To Delete {{ semester.semester }} ({{ semester.year }})?') \">delete</button></td>
            {% endif %}
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", ":semester:view.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/semester/view.html.twig");
    }
}
