<?php

/* module/view.html.twig */
class __TwigTemplate_454299c5094e047a9624936fc1bc95ba79ddac59f6720ee075289d6e981bce20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "module/view.html.twig", 1);
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
        $__internal_618bf565e41440d4f9a6a4732130caf863f4100ebe0ad73622b16f84fefabdaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_618bf565e41440d4f9a6a4732130caf863f4100ebe0ad73622b16f84fefabdaa->enter($__internal_618bf565e41440d4f9a6a4732130caf863f4100ebe0ad73622b16f84fefabdaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "module/view.html.twig"));

        $__internal_43d48618e077cafe05184468d149723de4c8da9986a561e9906acf778abda332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d48618e077cafe05184468d149723de4c8da9986a561e9906acf778abda332->enter($__internal_43d48618e077cafe05184468d149723de4c8da9986a561e9906acf778abda332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "module/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_618bf565e41440d4f9a6a4732130caf863f4100ebe0ad73622b16f84fefabdaa->leave($__internal_618bf565e41440d4f9a6a4732130caf863f4100ebe0ad73622b16f84fefabdaa_prof);

        
        $__internal_43d48618e077cafe05184468d149723de4c8da9986a561e9906acf778abda332->leave($__internal_43d48618e077cafe05184468d149723de4c8da9986a561e9906acf778abda332_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_680ff9ad93c65d55208bae2d1add5e599d1eac3336e51490505545f4829bfeac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_680ff9ad93c65d55208bae2d1add5e599d1eac3336e51490505545f4829bfeac->enter($__internal_680ff9ad93c65d55208bae2d1add5e599d1eac3336e51490505545f4829bfeac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_95368ceb3543bfd988ebbda285c843567c6fc921722226d0582a69f51ca102e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95368ceb3543bfd988ebbda285c843567c6fc921722226d0582a69f51ca102e9->enter($__internal_95368ceb3543bfd988ebbda285c843567c6fc921722226d0582a69f51ca102e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Module View
";
        
        $__internal_95368ceb3543bfd988ebbda285c843567c6fc921722226d0582a69f51ca102e9->leave($__internal_95368ceb3543bfd988ebbda285c843567c6fc921722226d0582a69f51ca102e9_prof);

        
        $__internal_680ff9ad93c65d55208bae2d1add5e599d1eac3336e51490505545f4829bfeac->leave($__internal_680ff9ad93c65d55208bae2d1add5e599d1eac3336e51490505545f4829bfeac_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_ba29276470084ebea4b9669154b1a000e9dc135c22e5ab8ef227cf66ec8c80b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba29276470084ebea4b9669154b1a000e9dc135c22e5ab8ef227cf66ec8c80b1->enter($__internal_ba29276470084ebea4b9669154b1a000e9dc135c22e5ab8ef227cf66ec8c80b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_8964ade05f0f2de972a95c1cd2788a8965cd6c022d4c40c74d2a5691219a47d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8964ade05f0f2de972a95c1cd2788a8965cd6c022d4c40c74d2a5691219a47d3->enter($__internal_8964ade05f0f2de972a95c1cd2788a8965cd6c022d4c40c74d2a5691219a47d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_8964ade05f0f2de972a95c1cd2788a8965cd6c022d4c40c74d2a5691219a47d3->leave($__internal_8964ade05f0f2de972a95c1cd2788a8965cd6c022d4c40c74d2a5691219a47d3_prof);

        
        $__internal_ba29276470084ebea4b9669154b1a000e9dc135c22e5ab8ef227cf66ec8c80b1->leave($__internal_ba29276470084ebea4b9669154b1a000e9dc135c22e5ab8ef227cf66ec8c80b1_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3c9316935038edb6b31ffee5ac4bda392ef938735226e1556e6a737c0ff201c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3c9316935038edb6b31ffee5ac4bda392ef938735226e1556e6a737c0ff201c->enter($__internal_f3c9316935038edb6b31ffee5ac4bda392ef938735226e1556e6a737c0ff201c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_389b9619b3a51fd88d389656d92a72b1aa0a38c291d10001450948e568f69188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389b9619b3a51fd88d389656d92a72b1aa0a38c291d10001450948e568f69188->enter($__internal_389b9619b3a51fd88d389656d92a72b1aa0a38c291d10001450948e568f69188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_create");
        echo "\">Create a New Module</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Module Code</th>
          <th>Module Name</th>
          <th>Module School</th>
          <th>Module Credit Hour</th>
          <th>Module Curriculum</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? $this->getContext($context, "modules")));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 28
            echo "          <tr>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "moduleCode", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "moduleName", array()), "html", null, true);
            echo "</td>
            <td>
              ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["schools"] ?? $this->getContext($context, "schools")));
            foreach ($context['_seq'] as $context["_key"] => $context["school"]) {
                // line 33
                echo "                ";
                if (($this->getAttribute($context["module"], "schoolId", array()) == $this->getAttribute($context["school"], "id", array()))) {
                    // line 34
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "schoolName", array()), "html", null, true);
                    echo "
                ";
                }
                // line 36
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['school'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            </td>
            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "moduleCreditHour", array()), "html", null, true);
            echo "</td>
            <td>
              ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["curriculums"] ?? $this->getContext($context, "curriculums")));
            foreach ($context['_seq'] as $context["_key"] => $context["curriculum"]) {
                // line 41
                echo "                ";
                if (($this->getAttribute($context["module"], "curriculumId", array()) == $this->getAttribute($context["curriculum"], "id", array()))) {
                    // line 42
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["curriculum"], "curriculumName", array()), "html", null, true);
                    echo "
                ";
                }
                // line 44
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curriculum'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "            </td>

            <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_view_one", array("module_id" => $this->getAttribute($context["module"], "id", array()))), "html", null, true);
            echo "\">view</a></td>

            ";
            // line 49
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_type"), "method") == "admin")) {
                // line 50
                echo "              <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_edit", array("module_id" => $this->getAttribute($context["module"], "id", array()))), "html", null, true);
                echo "\" id=\"editBtn\">edit</button></td>
              <td><a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_delete", array("module_id" => $this->getAttribute($context["module"], "id", array()))), "html", null, true);
                echo "\" id=\"deleteBtn\"
                    onclick=\"return confirm('Are You Sure You Want To Delete ";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "moduleName", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "moduleCode", array()), "html", null, true);
                echo ")?') \">delete</button></td>
            ";
            }
            // line 54
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_389b9619b3a51fd88d389656d92a72b1aa0a38c291d10001450948e568f69188->leave($__internal_389b9619b3a51fd88d389656d92a72b1aa0a38c291d10001450948e568f69188_prof);

        
        $__internal_f3c9316935038edb6b31ffee5ac4bda392ef938735226e1556e6a737c0ff201c->leave($__internal_f3c9316935038edb6b31ffee5ac4bda392ef938735226e1556e6a737c0ff201c_prof);

    }

    public function getTemplateName()
    {
        return "module/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 56,  201 => 54,  194 => 52,  190 => 51,  185 => 50,  183 => 49,  178 => 47,  174 => 45,  168 => 44,  162 => 42,  159 => 41,  155 => 40,  150 => 38,  147 => 37,  141 => 36,  135 => 34,  132 => 33,  128 => 32,  123 => 30,  119 => 29,  116 => 28,  112 => 27,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  Module View
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container\" id=\"view_container\">
    <a href=\"{{ path('module_create') }}\">Create a New Module</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Module Code</th>
          <th>Module Name</th>
          <th>Module School</th>
          <th>Module Credit Hour</th>
          <th>Module Curriculum</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        {% for module in modules %}
          <tr>
            <td>{{ module.moduleCode }}</td>
            <td>{{ module.moduleName }}</td>
            <td>
              {% for school in schools %}
                {% if(module.schoolId == school.id) %}
                  {{ school.schoolName }}
                {% endif %}
              {% endfor %}
            </td>
            <td>{{ module.moduleCreditHour }}</td>
            <td>
              {% for curriculum in curriculums %}
                {% if(module.curriculumId == curriculum.id) %}
                  {{ curriculum.curriculumName }}
                {% endif %}
              {% endfor %}
            </td>

            <td><a href=\"{{ path('module_view_one', {'module_id': module.id}) }}\">view</a></td>

            {% if(app.session.get('user_type') == 'admin') %}
              <td><a href=\"{{ path('module_edit', {'module_id': module.id}) }}\" id=\"editBtn\">edit</button></td>
              <td><a href=\"{{ path('module_delete', {'module_id': module.id}) }}\" id=\"deleteBtn\"
                    onclick=\"return confirm('Are You Sure You Want To Delete {{ module.moduleName }} ({{ module.moduleCode }})?') \">delete</button></td>
            {% endif %}
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", "module/view.html.twig", "/home/apollo-19/github/B-A-Project/app/Resources/views/module/view.html.twig");
    }
}
