<?php

/* course/view.html.twig */
class __TwigTemplate_a250f29aecf99f4d9d01da205ce6a1caeb1e53d14d0a5c68c3df515c985a35da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "course/view.html.twig", 1);
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
        $__internal_3aa8696e4a3b8188f1e634882eb1c8b3a47a5906f182cedb5a3ee49f4ad4f94c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aa8696e4a3b8188f1e634882eb1c8b3a47a5906f182cedb5a3ee49f4ad4f94c->enter($__internal_3aa8696e4a3b8188f1e634882eb1c8b3a47a5906f182cedb5a3ee49f4ad4f94c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/view.html.twig"));

        $__internal_8f383c4011f35276dbdc9edf6d0dd070d174cf97945516c072470973c299c674 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f383c4011f35276dbdc9edf6d0dd070d174cf97945516c072470973c299c674->enter($__internal_8f383c4011f35276dbdc9edf6d0dd070d174cf97945516c072470973c299c674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3aa8696e4a3b8188f1e634882eb1c8b3a47a5906f182cedb5a3ee49f4ad4f94c->leave($__internal_3aa8696e4a3b8188f1e634882eb1c8b3a47a5906f182cedb5a3ee49f4ad4f94c_prof);

        
        $__internal_8f383c4011f35276dbdc9edf6d0dd070d174cf97945516c072470973c299c674->leave($__internal_8f383c4011f35276dbdc9edf6d0dd070d174cf97945516c072470973c299c674_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3bc8d73a1cdc96baafc76244d43be12b39340f6104f426670c9bfec428d7ac3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bc8d73a1cdc96baafc76244d43be12b39340f6104f426670c9bfec428d7ac3b->enter($__internal_3bc8d73a1cdc96baafc76244d43be12b39340f6104f426670c9bfec428d7ac3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9c7d96409ef231b5d3f6e89961d0fa3a50060867813f0e19a2d838b1920a189b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c7d96409ef231b5d3f6e89961d0fa3a50060867813f0e19a2d838b1920a189b->enter($__internal_9c7d96409ef231b5d3f6e89961d0fa3a50060867813f0e19a2d838b1920a189b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Course View
";
        
        $__internal_9c7d96409ef231b5d3f6e89961d0fa3a50060867813f0e19a2d838b1920a189b->leave($__internal_9c7d96409ef231b5d3f6e89961d0fa3a50060867813f0e19a2d838b1920a189b_prof);

        
        $__internal_3bc8d73a1cdc96baafc76244d43be12b39340f6104f426670c9bfec428d7ac3b->leave($__internal_3bc8d73a1cdc96baafc76244d43be12b39340f6104f426670c9bfec428d7ac3b_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_d15cc5f054899ca39bcbfc31ded05b6a95bb9877019b8538423b0e75c0bf7ad1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d15cc5f054899ca39bcbfc31ded05b6a95bb9877019b8538423b0e75c0bf7ad1->enter($__internal_d15cc5f054899ca39bcbfc31ded05b6a95bb9877019b8538423b0e75c0bf7ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_3ee128858d7a0be25ff787e04f27a14a3d644ffab817e31595003edfb8d5cea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ee128858d7a0be25ff787e04f27a14a3d644ffab817e31595003edfb8d5cea4->enter($__internal_3ee128858d7a0be25ff787e04f27a14a3d644ffab817e31595003edfb8d5cea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_3ee128858d7a0be25ff787e04f27a14a3d644ffab817e31595003edfb8d5cea4->leave($__internal_3ee128858d7a0be25ff787e04f27a14a3d644ffab817e31595003edfb8d5cea4_prof);

        
        $__internal_d15cc5f054899ca39bcbfc31ded05b6a95bb9877019b8538423b0e75c0bf7ad1->leave($__internal_d15cc5f054899ca39bcbfc31ded05b6a95bb9877019b8538423b0e75c0bf7ad1_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_72ddf42eeaaed45b24637a947c0231f41ef17c78fc7c745cb74bcefd19bdfc42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72ddf42eeaaed45b24637a947c0231f41ef17c78fc7c745cb74bcefd19bdfc42->enter($__internal_72ddf42eeaaed45b24637a947c0231f41ef17c78fc7c745cb74bcefd19bdfc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fd5f0454977121602989390d17520a7bab319256238f94ceffbb046d2ff9a46c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd5f0454977121602989390d17520a7bab319256238f94ceffbb046d2ff9a46c->enter($__internal_fd5f0454977121602989390d17520a7bab319256238f94ceffbb046d2ff9a46c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_create");
        echo "\">Create a New Course</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Course Code</th>
          <th>Course Name</th>
          <th>Course Credit Hour</th>
          <th>Course Curriculum</th>
          <th>Course Module</th>
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
            echo "          <tr>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "courseCode", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "courseName", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "courseCreditHour", array()), "html", null, true);
            echo "</td>
            <td>
              ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["curriculums"] ?? $this->getContext($context, "curriculums")));
            foreach ($context['_seq'] as $context["_key"] => $context["curriculum"]) {
                // line 34
                echo "                ";
                if (($this->getAttribute($context["course"], "curriculumId", array()) == $this->getAttribute($context["curriculum"], "id", array()))) {
                    // line 35
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["curriculum"], "curriculumName", array()), "html", null, true);
                    echo "
                ";
                }
                // line 37
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curriculum'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "            </td>
            <td>
              ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? $this->getContext($context, "modules")));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 41
                echo "                ";
                if (($this->getAttribute($context["course"], "moduleId", array()) == $this->getAttribute($context["module"], "id", array()))) {
                    // line 42
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "moduleName", array()), "html", null, true);
                    echo "
                ";
                }
                // line 44
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "            </td>

            <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_view_one", array("course_id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">view</a></td>

            ";
            // line 49
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_type"), "method") == "admin")) {
                // line 50
                echo "              <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_edit", array("course_id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" id=\"editBtn\">edit</button></td>
              <td><a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_delete", array("course_id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" id=\"deleteBtn\"
                    onclick=\"return confirm('Are You Sure You Want To Delete ";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "courseName", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "courseCode", array()), "html", null, true);
                echo ")?') \">delete</button></td>
            ";
            }
            // line 54
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_fd5f0454977121602989390d17520a7bab319256238f94ceffbb046d2ff9a46c->leave($__internal_fd5f0454977121602989390d17520a7bab319256238f94ceffbb046d2ff9a46c_prof);

        
        $__internal_72ddf42eeaaed45b24637a947c0231f41ef17c78fc7c745cb74bcefd19bdfc42->leave($__internal_72ddf42eeaaed45b24637a947c0231f41ef17c78fc7c745cb74bcefd19bdfc42_prof);

    }

    public function getTemplateName()
    {
        return "course/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 56,  201 => 54,  194 => 52,  190 => 51,  185 => 50,  183 => 49,  178 => 47,  174 => 45,  168 => 44,  162 => 42,  159 => 41,  155 => 40,  151 => 38,  145 => 37,  139 => 35,  136 => 34,  132 => 33,  127 => 31,  123 => 30,  119 => 29,  116 => 28,  112 => 27,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
    <a href=\"{{ path('course_create') }}\">Create a New Course</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Course Code</th>
          <th>Course Name</th>
          <th>Course Credit Hour</th>
          <th>Course Curriculum</th>
          <th>Course Module</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        {% for course in courses %}
          <tr>
            <td>{{ course.courseCode }}</td>
            <td>{{ course.courseName }}</td>
            <td>{{ course.courseCreditHour }}</td>
            <td>
              {% for curriculum in curriculums %}
                {% if(course.curriculumId == curriculum.id) %}
                  {{ curriculum.curriculumName }}
                {% endif %}
              {% endfor %}
            </td>
            <td>
              {% for module in modules %}
                {% if(course.moduleId == module.id) %}
                  {{ module.moduleName }}
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
", "course/view.html.twig", "/home/apollo-19/github/B-A-Project/app/Resources/views/course/view.html.twig");
    }
}
