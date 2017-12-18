<?php

/* :curriculum:view.html.twig */
class __TwigTemplate_b864079b73d85d6f72dc122b99ee6511575ba166e9204725dfed9f73d49c4475 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":curriculum:view.html.twig", 1);
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
        $__internal_0b8e0d4a50a39a5c725119e5a3e91fd6e5e991a097e06e732b53d44f7f51940b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b8e0d4a50a39a5c725119e5a3e91fd6e5e991a097e06e732b53d44f7f51940b->enter($__internal_0b8e0d4a50a39a5c725119e5a3e91fd6e5e991a097e06e732b53d44f7f51940b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":curriculum:view.html.twig"));

        $__internal_7ab49d9f825f1ca87473383e94121302cf6f87748df7af6e0dbb8249f4e3c1c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ab49d9f825f1ca87473383e94121302cf6f87748df7af6e0dbb8249f4e3c1c3->enter($__internal_7ab49d9f825f1ca87473383e94121302cf6f87748df7af6e0dbb8249f4e3c1c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":curriculum:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b8e0d4a50a39a5c725119e5a3e91fd6e5e991a097e06e732b53d44f7f51940b->leave($__internal_0b8e0d4a50a39a5c725119e5a3e91fd6e5e991a097e06e732b53d44f7f51940b_prof);

        
        $__internal_7ab49d9f825f1ca87473383e94121302cf6f87748df7af6e0dbb8249f4e3c1c3->leave($__internal_7ab49d9f825f1ca87473383e94121302cf6f87748df7af6e0dbb8249f4e3c1c3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_360b2da7cc13a19d8eab4acc94b3c220ed72828a44b4f51302c0a895d182575d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_360b2da7cc13a19d8eab4acc94b3c220ed72828a44b4f51302c0a895d182575d->enter($__internal_360b2da7cc13a19d8eab4acc94b3c220ed72828a44b4f51302c0a895d182575d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9a7f05a4a7b1c74d68f849f9b7d47df961e3488e8687b82c9fedb151e7de9ad6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a7f05a4a7b1c74d68f849f9b7d47df961e3488e8687b82c9fedb151e7de9ad6->enter($__internal_9a7f05a4a7b1c74d68f849f9b7d47df961e3488e8687b82c9fedb151e7de9ad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Curriculum View
";
        
        $__internal_9a7f05a4a7b1c74d68f849f9b7d47df961e3488e8687b82c9fedb151e7de9ad6->leave($__internal_9a7f05a4a7b1c74d68f849f9b7d47df961e3488e8687b82c9fedb151e7de9ad6_prof);

        
        $__internal_360b2da7cc13a19d8eab4acc94b3c220ed72828a44b4f51302c0a895d182575d->leave($__internal_360b2da7cc13a19d8eab4acc94b3c220ed72828a44b4f51302c0a895d182575d_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_5789c0b1ad272484943486438bd8bebc6abaa4109be9feaeb6179892a3454d18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5789c0b1ad272484943486438bd8bebc6abaa4109be9feaeb6179892a3454d18->enter($__internal_5789c0b1ad272484943486438bd8bebc6abaa4109be9feaeb6179892a3454d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_48a54b95a7312d94b5ca14d353ff5d66b27275f5a6109e70d9d85a085fd4d0ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48a54b95a7312d94b5ca14d353ff5d66b27275f5a6109e70d9d85a085fd4d0ce->enter($__internal_48a54b95a7312d94b5ca14d353ff5d66b27275f5a6109e70d9d85a085fd4d0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_48a54b95a7312d94b5ca14d353ff5d66b27275f5a6109e70d9d85a085fd4d0ce->leave($__internal_48a54b95a7312d94b5ca14d353ff5d66b27275f5a6109e70d9d85a085fd4d0ce_prof);

        
        $__internal_5789c0b1ad272484943486438bd8bebc6abaa4109be9feaeb6179892a3454d18->leave($__internal_5789c0b1ad272484943486438bd8bebc6abaa4109be9feaeb6179892a3454d18_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_8809b8163a6286de87b10ffd3a8293efb26e408605930488b3a060c2caab8d2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8809b8163a6286de87b10ffd3a8293efb26e408605930488b3a060c2caab8d2a->enter($__internal_8809b8163a6286de87b10ffd3a8293efb26e408605930488b3a060c2caab8d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_423271eb99397c51a8b9f5d4af5b7da53b098d2a7010964233d6e533264e4ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_423271eb99397c51a8b9f5d4af5b7da53b098d2a7010964233d6e533264e4ba8->enter($__internal_423271eb99397c51a8b9f5d4af5b7da53b098d2a7010964233d6e533264e4ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("curriculum_create");
        echo "\">New Curriculum</a>

    <table border=\"0\">
      <thead>
        <tr>
          <th>Curriculum Code</th>
          <th>Curriculum Name</th>
          <th>Curriculum Type</th>
          <th>Curriculum School</th>
          <th>Curriculum Grade System</th>
          <th colspan=\"4\">Actions</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["curriculums"] ?? $this->getContext($context, "curriculums")));
        foreach ($context['_seq'] as $context["_key"] => $context["curriculum"]) {
            // line 29
            echo "          <tr>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["curriculum"], "curriculumCode", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["curriculum"], "curriculumName", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["curriculum"], "curriculumType", array())), "html", null, true);
            echo "</td>
            <td>
              ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["schools"] ?? $this->getContext($context, "schools")));
            foreach ($context['_seq'] as $context["_key"] => $context["school"]) {
                // line 35
                echo "                ";
                if (($this->getAttribute($context["curriculum"], "schoolId", array()) == $this->getAttribute($context["school"], "id", array()))) {
                    // line 36
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "schoolName", array()), "html", null, true);
                    echo "
                ";
                }
                // line 38
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['school'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "            </td>
            <td>
              ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["grade_systems"] ?? $this->getContext($context, "grade_systems")));
            foreach ($context['_seq'] as $context["_key"] => $context["grade_system"]) {
                // line 42
                echo "                ";
                if (($this->getAttribute($context["curriculum"], "gradeSystemId", array()) == $this->getAttribute($context["grade_system"], "id", array()))) {
                    // line 43
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["grade_system"], "gradeSystemName", array()), "html", null, true);
                    echo "
                ";
                }
                // line 45
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grade_system'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "            </td>

            <td><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("curriculum_view_one", array("curriculum_id" => $this->getAttribute($context["curriculum"], "id", array()))), "html", null, true);
            echo "\">view</a></td>
            <td><a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("curriculum_edit", array("curriculum_id" => $this->getAttribute($context["curriculum"], "id", array()))), "html", null, true);
            echo "\" id=\"editBtn\">edit</button></td>
            <td><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("curriculum_delete", array("curriculum_id" => $this->getAttribute($context["curriculum"], "id", array()))), "html", null, true);
            echo "\" id=\"deleteBtn\"
                  onclick=\"return confirm('Are You Sure You Want To Delete ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["curriculum"], "curriculumName", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["curriculum"], "curriculumCode", array()), "html", null, true);
            echo ")?') \">delete</button></td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curriculum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_423271eb99397c51a8b9f5d4af5b7da53b098d2a7010964233d6e533264e4ba8->leave($__internal_423271eb99397c51a8b9f5d4af5b7da53b098d2a7010964233d6e533264e4ba8_prof);

        
        $__internal_8809b8163a6286de87b10ffd3a8293efb26e408605930488b3a060c2caab8d2a->leave($__internal_8809b8163a6286de87b10ffd3a8293efb26e408605930488b3a060c2caab8d2a_prof);

    }

    public function getTemplateName()
    {
        return ":curriculum:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 54,  191 => 51,  187 => 50,  183 => 49,  179 => 48,  175 => 46,  169 => 45,  163 => 43,  160 => 42,  156 => 41,  152 => 39,  146 => 38,  140 => 36,  137 => 35,  133 => 34,  128 => 32,  124 => 31,  120 => 30,  117 => 29,  113 => 28,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  Curriculum View
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container\" id=\"view_container\">
    <a href=\"{{ path('curriculum_create') }}\">New Curriculum</a>

    <table border=\"0\">
      <thead>
        <tr>
          <th>Curriculum Code</th>
          <th>Curriculum Name</th>
          <th>Curriculum Type</th>
          <th>Curriculum School</th>
          <th>Curriculum Grade System</th>
          <th colspan=\"4\">Actions</th>
        </tr>
      </thead>
      <tbody>
        {% for curriculum in curriculums %}
          <tr>
            <td>{{ curriculum.curriculumCode }}</td>
            <td>{{ curriculum.curriculumName }}</td>
            <td>{{ curriculum.curriculumType | capitalize }}</td>
            <td>
              {% for school in schools %}
                {% if(curriculum.schoolId == school.id) %}
                  {{ school.schoolName }}
                {% endif %}
              {% endfor %}
            </td>
            <td>
              {% for grade_system in grade_systems %}
                {% if(curriculum.gradeSystemId == grade_system.id) %}
                  {{ grade_system.gradeSystemName }}
                {% endif %}
              {% endfor %}
            </td>

            <td><a href=\"{{ path('curriculum_view_one', {'curriculum_id': curriculum.id}) }}\">view</a></td>
            <td><a href=\"{{ path('curriculum_edit', {'curriculum_id': curriculum.id}) }}\" id=\"editBtn\">edit</button></td>
            <td><a href=\"{{ path('curriculum_delete', {'curriculum_id': curriculum.id}) }}\" id=\"deleteBtn\"
                  onclick=\"return confirm('Are You Sure You Want To Delete {{ curriculum.curriculumName }} ({{ curriculum.curriculumCode }})?') \">delete</button></td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", ":curriculum:view.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/curriculum/view.html.twig");
    }
}
