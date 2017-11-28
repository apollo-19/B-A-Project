<?php

/* :department:view.html.twig */
class __TwigTemplate_093540904ba77df4eead568de399e58ecd4a5dac8d4193cdecb067ed69333839 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":department:view.html.twig", 1);
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
        $__internal_1b6a7cc580a8ddf653188b7a5c0a785b80fb7fa14ac956898d274df4c840eba6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b6a7cc580a8ddf653188b7a5c0a785b80fb7fa14ac956898d274df4c840eba6->enter($__internal_1b6a7cc580a8ddf653188b7a5c0a785b80fb7fa14ac956898d274df4c840eba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":department:view.html.twig"));

        $__internal_4c6aa2d625a5d0e5a94532642c719fb2990c7fd360d6e247e9232f4b4933dc48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c6aa2d625a5d0e5a94532642c719fb2990c7fd360d6e247e9232f4b4933dc48->enter($__internal_4c6aa2d625a5d0e5a94532642c719fb2990c7fd360d6e247e9232f4b4933dc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":department:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b6a7cc580a8ddf653188b7a5c0a785b80fb7fa14ac956898d274df4c840eba6->leave($__internal_1b6a7cc580a8ddf653188b7a5c0a785b80fb7fa14ac956898d274df4c840eba6_prof);

        
        $__internal_4c6aa2d625a5d0e5a94532642c719fb2990c7fd360d6e247e9232f4b4933dc48->leave($__internal_4c6aa2d625a5d0e5a94532642c719fb2990c7fd360d6e247e9232f4b4933dc48_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_05c985a56f5e06920f06922fe40827964f9a884deaaa4aee8b8707fabf51f051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05c985a56f5e06920f06922fe40827964f9a884deaaa4aee8b8707fabf51f051->enter($__internal_05c985a56f5e06920f06922fe40827964f9a884deaaa4aee8b8707fabf51f051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d0b1e8c38a271bfb3797d78ee2afc13a317f12228400005cfb660931e51f683b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0b1e8c38a271bfb3797d78ee2afc13a317f12228400005cfb660931e51f683b->enter($__internal_d0b1e8c38a271bfb3797d78ee2afc13a317f12228400005cfb660931e51f683b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Department View
";
        
        $__internal_d0b1e8c38a271bfb3797d78ee2afc13a317f12228400005cfb660931e51f683b->leave($__internal_d0b1e8c38a271bfb3797d78ee2afc13a317f12228400005cfb660931e51f683b_prof);

        
        $__internal_05c985a56f5e06920f06922fe40827964f9a884deaaa4aee8b8707fabf51f051->leave($__internal_05c985a56f5e06920f06922fe40827964f9a884deaaa4aee8b8707fabf51f051_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_cd2494ab253880ad572b8490df17a149e4302bfdcf589c1aa17781b2a84e3cfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd2494ab253880ad572b8490df17a149e4302bfdcf589c1aa17781b2a84e3cfc->enter($__internal_cd2494ab253880ad572b8490df17a149e4302bfdcf589c1aa17781b2a84e3cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_e6b56c31030f88766d6574ea08226aa353bcba5f085b1d67c5ecbdb723b293ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6b56c31030f88766d6574ea08226aa353bcba5f085b1d67c5ecbdb723b293ae->enter($__internal_e6b56c31030f88766d6574ea08226aa353bcba5f085b1d67c5ecbdb723b293ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_e6b56c31030f88766d6574ea08226aa353bcba5f085b1d67c5ecbdb723b293ae->leave($__internal_e6b56c31030f88766d6574ea08226aa353bcba5f085b1d67c5ecbdb723b293ae_prof);

        
        $__internal_cd2494ab253880ad572b8490df17a149e4302bfdcf589c1aa17781b2a84e3cfc->leave($__internal_cd2494ab253880ad572b8490df17a149e4302bfdcf589c1aa17781b2a84e3cfc_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_4c123ca2a722c7dc6274edb0435f12e5e3fc631c5620e0752d988f1616a18669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c123ca2a722c7dc6274edb0435f12e5e3fc631c5620e0752d988f1616a18669->enter($__internal_4c123ca2a722c7dc6274edb0435f12e5e3fc631c5620e0752d988f1616a18669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b65e23c36c20ff59094ffad75c49e2eeb8c565d2fc5332101e657eac24cb064f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b65e23c36c20ff59094ffad75c49e2eeb8c565d2fc5332101e657eac24cb064f->enter($__internal_b65e23c36c20ff59094ffad75c49e2eeb8c565d2fc5332101e657eac24cb064f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("department_create");
        echo "\">Create a New Department</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Department Code</th>
          <th>Department Name</th>
          <th>Department School</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["departments"] ?? $this->getContext($context, "departments")));
        foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
            // line 26
            echo "          <tr>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["department"], "departmentCode", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["department"], "departmentName", array()), "html", null, true);
            echo "</td>
            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["schools"] ?? $this->getContext($context, "schools")));
            foreach ($context['_seq'] as $context["_key"] => $context["school"]) {
                // line 30
                echo "              ";
                if (($this->getAttribute($context["department"], "schoolId", array()) == $this->getAttribute($context["school"], "id", array()))) {
                    // line 31
                    echo "                <td> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "schoolName", array()), "html", null, true);
                    echo " </td>
              ";
                }
                // line 33
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['school'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "
            <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("department_view_one", array("department_id" => $this->getAttribute($context["department"], "id", array()))), "html", null, true);
            echo "\">view</button></td>
            <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("department_edit", array("department_id" => $this->getAttribute($context["department"], "id", array()))), "html", null, true);
            echo "\" id=\"editBtn\">edit</button></td>
            <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("department_delete", array("department_id" => $this->getAttribute($context["department"], "id", array()))), "html", null, true);
            echo "\" id=\"deleteBtn\"
                  onclick=\"return confirm('Are You Sure You Want To Delete ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["department"], "departmentName", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["department"], "departmentCode", array()), "html", null, true);
            echo ")?') \">delete</button></td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_b65e23c36c20ff59094ffad75c49e2eeb8c565d2fc5332101e657eac24cb064f->leave($__internal_b65e23c36c20ff59094ffad75c49e2eeb8c565d2fc5332101e657eac24cb064f_prof);

        
        $__internal_4c123ca2a722c7dc6274edb0435f12e5e3fc631c5620e0752d988f1616a18669->leave($__internal_4c123ca2a722c7dc6274edb0435f12e5e3fc631c5620e0752d988f1616a18669_prof);

    }

    public function getTemplateName()
    {
        return ":department:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 41,  159 => 38,  155 => 37,  151 => 36,  147 => 35,  144 => 34,  138 => 33,  132 => 31,  129 => 30,  125 => 29,  121 => 28,  117 => 27,  114 => 26,  110 => 25,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  Department View
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container\" id=\"view_container\">
    <a href=\"{{ path('department_create') }}\">Create a New Department</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Department Code</th>
          <th>Department Name</th>
          <th>Department School</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        {% for department in departments %}
          <tr>
            <td>{{ department.departmentCode }}</td>
            <td>{{ department.departmentName }}</td>
            {% for school in schools %}
              {% if(department.schoolId == school.id) %}
                <td> {{ school.schoolName }} </td>
              {% endif %}
            {% endfor %}

            <td><a href=\"{{ path('department_view_one', {'department_id': department.id}) }}\">view</button></td>
            <td><a href=\"{{ path('department_edit', {'department_id': department.id}) }}\" id=\"editBtn\">edit</button></td>
            <td><a href=\"{{ path('department_delete', {'department_id': department.id}) }}\" id=\"deleteBtn\"
                  onclick=\"return confirm('Are You Sure You Want To Delete {{ department.departmentName }} ({{ department.departmentCode }})?') \">delete</button></td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", ":department:view.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/department/view.html.twig");
    }
}
