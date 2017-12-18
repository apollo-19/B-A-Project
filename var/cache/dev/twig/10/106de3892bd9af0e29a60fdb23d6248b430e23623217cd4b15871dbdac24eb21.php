<?php

/* :course:view.html.twig */
class __TwigTemplate_a250f29aecf99f4d9d01da205ce6a1caeb1e53d14d0a5c68c3df515c985a35da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":course:view.html.twig", 1);
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
        $__internal_437b50f8bbd03790cea9c0ec1654b9ce9fcdecd0ee4727d2ffbc830a125f8cf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_437b50f8bbd03790cea9c0ec1654b9ce9fcdecd0ee4727d2ffbc830a125f8cf8->enter($__internal_437b50f8bbd03790cea9c0ec1654b9ce9fcdecd0ee4727d2ffbc830a125f8cf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":course:view.html.twig"));

        $__internal_f73433a459f45945879e15c2e9d3f77406d0e11fba8d2b0114d2ef336f207edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f73433a459f45945879e15c2e9d3f77406d0e11fba8d2b0114d2ef336f207edc->enter($__internal_f73433a459f45945879e15c2e9d3f77406d0e11fba8d2b0114d2ef336f207edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":course:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_437b50f8bbd03790cea9c0ec1654b9ce9fcdecd0ee4727d2ffbc830a125f8cf8->leave($__internal_437b50f8bbd03790cea9c0ec1654b9ce9fcdecd0ee4727d2ffbc830a125f8cf8_prof);

        
        $__internal_f73433a459f45945879e15c2e9d3f77406d0e11fba8d2b0114d2ef336f207edc->leave($__internal_f73433a459f45945879e15c2e9d3f77406d0e11fba8d2b0114d2ef336f207edc_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_94a546378b9be6e20c3bfe7406103773e4bedf74181020d75eb08015c6d4ec3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94a546378b9be6e20c3bfe7406103773e4bedf74181020d75eb08015c6d4ec3c->enter($__internal_94a546378b9be6e20c3bfe7406103773e4bedf74181020d75eb08015c6d4ec3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_948c5c10cff46caab25cce934f41a1020143d28a417eee8bcca720b4ed062a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_948c5c10cff46caab25cce934f41a1020143d28a417eee8bcca720b4ed062a6d->enter($__internal_948c5c10cff46caab25cce934f41a1020143d28a417eee8bcca720b4ed062a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Course View
";
        
        $__internal_948c5c10cff46caab25cce934f41a1020143d28a417eee8bcca720b4ed062a6d->leave($__internal_948c5c10cff46caab25cce934f41a1020143d28a417eee8bcca720b4ed062a6d_prof);

        
        $__internal_94a546378b9be6e20c3bfe7406103773e4bedf74181020d75eb08015c6d4ec3c->leave($__internal_94a546378b9be6e20c3bfe7406103773e4bedf74181020d75eb08015c6d4ec3c_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_0fe3517b5f3cca84611b8150f8a946a6255742bd581bd57d3273a245bad278df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fe3517b5f3cca84611b8150f8a946a6255742bd581bd57d3273a245bad278df->enter($__internal_0fe3517b5f3cca84611b8150f8a946a6255742bd581bd57d3273a245bad278df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_b6aba7eaab1f0719f333a4965a16094b15a0daa4752e52ec0ce6574ce26a1e80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6aba7eaab1f0719f333a4965a16094b15a0daa4752e52ec0ce6574ce26a1e80->enter($__internal_b6aba7eaab1f0719f333a4965a16094b15a0daa4752e52ec0ce6574ce26a1e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_b6aba7eaab1f0719f333a4965a16094b15a0daa4752e52ec0ce6574ce26a1e80->leave($__internal_b6aba7eaab1f0719f333a4965a16094b15a0daa4752e52ec0ce6574ce26a1e80_prof);

        
        $__internal_0fe3517b5f3cca84611b8150f8a946a6255742bd581bd57d3273a245bad278df->leave($__internal_0fe3517b5f3cca84611b8150f8a946a6255742bd581bd57d3273a245bad278df_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_4504d5cdeb124119c2700d684c74870218c8681826e1d62343a360e25f75362a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4504d5cdeb124119c2700d684c74870218c8681826e1d62343a360e25f75362a->enter($__internal_4504d5cdeb124119c2700d684c74870218c8681826e1d62343a360e25f75362a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6b9823184bcbfb7a16435c0444719321a015b16806263caccaa972514663b295 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b9823184bcbfb7a16435c0444719321a015b16806263caccaa972514663b295->enter($__internal_6b9823184bcbfb7a16435c0444719321a015b16806263caccaa972514663b295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_create");
        echo "\">New Course</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Course Code</th>
          <th>Course Name</th>
          <th>Course Credit Hour</th>
          <th>Course Curriculum</th>
          <th>Course Module/Semester</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 28
            echo "          ";
            $context["currCurriculumType"] = "";
            // line 29
            echo "          <tr>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "courseCode", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "courseName", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "courseCreditHour", array()), "html", null, true);
            echo "</td>
            <td>
              ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["curriculums"] ?? $this->getContext($context, "curriculums")));
            foreach ($context['_seq'] as $context["_key"] => $context["curriculum"]) {
                // line 35
                echo "                ";
                if (($this->getAttribute($context["course"], "curriculumId", array()) == $this->getAttribute($context["curriculum"], "id", array()))) {
                    // line 36
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["curriculum"], "curriculumName", array()), "html", null, true);
                    echo "
                  ";
                    // line 37
                    $context["currCurriculumType"] = $this->getAttribute($context["curriculum"], "curriculumType", array());
                    // line 38
                    echo "                ";
                }
                // line 39
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curriculum'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "            </td>
            <td>
              ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? $this->getContext($context, "modules")));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 43
                echo "                ";
                if ((($this->getAttribute($context["course"], "moduleId", array()) == $this->getAttribute($context["module"], "id", array())) && (($context["currCurriculumType"] ?? $this->getContext($context, "currCurriculumType")) == "modularized"))) {
                    // line 44
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "moduleName", array()), "html", null, true);
                    echo " Module
                ";
                }
                // line 46
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "
              ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["semesters"] ?? $this->getContext($context, "semesters")));
            foreach ($context['_seq'] as $context["_key"] => $context["semester"]) {
                // line 49
                echo "                ";
                if ((($this->getAttribute($context["course"], "semesterId", array()) == $this->getAttribute($context["semester"], "id", array())) && (($context["currCurriculumType"] ?? $this->getContext($context, "currCurriculumType")) == "semester"))) {
                    // line 50
                    echo "                  ";
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["semester"], "semester", array()) . " ") . $this->getAttribute($context["semester"], "year", array())), "html", null, true);
                    echo " Semester
                ";
                }
                // line 52
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['semester'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "            </td>

            <td><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_view_one", array("course_id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">view</a></td>

            ";
            // line 57
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_type"), "method") == "admin")) {
                // line 58
                echo "              <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_edit", array("course_id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" id=\"editBtn\">edit</button></td>
              <td><a href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_delete", array("course_id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" id=\"deleteBtn\"
                    onclick=\"return confirm('Are You Sure You Want To Delete ";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "courseName", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "courseCode", array()), "html", null, true);
                echo ")?') \">delete</button></td>
            ";
            }
            // line 62
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_6b9823184bcbfb7a16435c0444719321a015b16806263caccaa972514663b295->leave($__internal_6b9823184bcbfb7a16435c0444719321a015b16806263caccaa972514663b295_prof);

        
        $__internal_4504d5cdeb124119c2700d684c74870218c8681826e1d62343a360e25f75362a->leave($__internal_4504d5cdeb124119c2700d684c74870218c8681826e1d62343a360e25f75362a_prof);

    }

    public function getTemplateName()
    {
        return ":course:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 64,  230 => 62,  223 => 60,  219 => 59,  214 => 58,  212 => 57,  207 => 55,  203 => 53,  197 => 52,  191 => 50,  188 => 49,  184 => 48,  181 => 47,  175 => 46,  169 => 44,  166 => 43,  162 => 42,  158 => 40,  152 => 39,  149 => 38,  147 => 37,  142 => 36,  139 => 35,  135 => 34,  130 => 32,  126 => 31,  122 => 30,  119 => 29,  116 => 28,  112 => 27,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  Course View
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container\" id=\"view_container\">
    <a href=\"{{ path('course_create') }}\">New Course</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Course Code</th>
          <th>Course Name</th>
          <th>Course Credit Hour</th>
          <th>Course Curriculum</th>
          <th>Course Module/Semester</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        {% for course in courses %}
          {% set currCurriculumType = '' %}
          <tr>
            <td>{{ course.courseCode }}</td>
            <td>{{ course.courseName }}</td>
            <td>{{ course.courseCreditHour }}</td>
            <td>
              {% for curriculum in curriculums %}
                {% if(course.curriculumId == curriculum.id) %}
                  {{ curriculum.curriculumName }}
                  {% set currCurriculumType = curriculum.curriculumType %}
                {% endif %}
              {% endfor %}
            </td>
            <td>
              {% for module in modules %}
                {% if(course.moduleId == module.id and currCurriculumType == 'modularized') %}
                  {{ module.moduleName }} Module
                {% endif %}
              {% endfor %}

              {% for semester in semesters %}
                {% if(course.semesterId == semester.id and currCurriculumType == 'semester') %}
                  {{ semester.semester ~ ' ' ~ semester.year }} Semester
                {% endif %}
              {% endfor %}
            </td>

            <td><a href=\"{{ path('course_view_one', {'course_id': course.id}) }}\">view</a></td>

            {% if(app.session.get('user_type') == 'admin') %}
              <td><a href=\"{{ path('course_edit', {'course_id': course.id}) }}\" id=\"editBtn\">edit</button></td>
              <td><a href=\"{{ path('course_delete', {'course_id': course.id}) }}\" id=\"deleteBtn\"
                    onclick=\"return confirm('Are You Sure You Want To Delete {{ course.courseName }} ({{ course.courseCode }})?') \">delete</button></td>
            {% endif %}
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", ":course:view.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/course/view.html.twig");
    }
}
