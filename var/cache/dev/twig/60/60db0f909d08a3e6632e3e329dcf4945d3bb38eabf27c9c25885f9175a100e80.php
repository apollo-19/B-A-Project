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
        $__internal_c4bf1188ae8f5c3215d18e553258874c000455cb094174674522d88c8d6b28b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4bf1188ae8f5c3215d18e553258874c000455cb094174674522d88c8d6b28b3->enter($__internal_c4bf1188ae8f5c3215d18e553258874c000455cb094174674522d88c8d6b28b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":department:view.html.twig"));

        $__internal_d63439065777cfe729dba63ebd97361448038c6de925af5c972044452be4113e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63439065777cfe729dba63ebd97361448038c6de925af5c972044452be4113e->enter($__internal_d63439065777cfe729dba63ebd97361448038c6de925af5c972044452be4113e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":department:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4bf1188ae8f5c3215d18e553258874c000455cb094174674522d88c8d6b28b3->leave($__internal_c4bf1188ae8f5c3215d18e553258874c000455cb094174674522d88c8d6b28b3_prof);

        
        $__internal_d63439065777cfe729dba63ebd97361448038c6de925af5c972044452be4113e->leave($__internal_d63439065777cfe729dba63ebd97361448038c6de925af5c972044452be4113e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1b2354befab6917c497f9b41d89613ee90a164e834ed562eaa8f5355d3f23d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b2354befab6917c497f9b41d89613ee90a164e834ed562eaa8f5355d3f23d4a->enter($__internal_1b2354befab6917c497f9b41d89613ee90a164e834ed562eaa8f5355d3f23d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_761ccbb3ef581ba4987c1f888b8de5bff2c39d032fabd10a0630a7271189a98a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_761ccbb3ef581ba4987c1f888b8de5bff2c39d032fabd10a0630a7271189a98a->enter($__internal_761ccbb3ef581ba4987c1f888b8de5bff2c39d032fabd10a0630a7271189a98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Department View
";
        
        $__internal_761ccbb3ef581ba4987c1f888b8de5bff2c39d032fabd10a0630a7271189a98a->leave($__internal_761ccbb3ef581ba4987c1f888b8de5bff2c39d032fabd10a0630a7271189a98a_prof);

        
        $__internal_1b2354befab6917c497f9b41d89613ee90a164e834ed562eaa8f5355d3f23d4a->leave($__internal_1b2354befab6917c497f9b41d89613ee90a164e834ed562eaa8f5355d3f23d4a_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_d9ef035691cc03b5eb5ad6e4c8abf6601c8add323ff63e9e4515454255e0709c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9ef035691cc03b5eb5ad6e4c8abf6601c8add323ff63e9e4515454255e0709c->enter($__internal_d9ef035691cc03b5eb5ad6e4c8abf6601c8add323ff63e9e4515454255e0709c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_f408867424211b68890c75317549644fc40bb2015a8e75950429dd6e208fa4a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f408867424211b68890c75317549644fc40bb2015a8e75950429dd6e208fa4a8->enter($__internal_f408867424211b68890c75317549644fc40bb2015a8e75950429dd6e208fa4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_f408867424211b68890c75317549644fc40bb2015a8e75950429dd6e208fa4a8->leave($__internal_f408867424211b68890c75317549644fc40bb2015a8e75950429dd6e208fa4a8_prof);

        
        $__internal_d9ef035691cc03b5eb5ad6e4c8abf6601c8add323ff63e9e4515454255e0709c->leave($__internal_d9ef035691cc03b5eb5ad6e4c8abf6601c8add323ff63e9e4515454255e0709c_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_687d817db9726a8a85ce68c9f0a139defe27f462ded603b922f0960ec83897a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_687d817db9726a8a85ce68c9f0a139defe27f462ded603b922f0960ec83897a9->enter($__internal_687d817db9726a8a85ce68c9f0a139defe27f462ded603b922f0960ec83897a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eae6e7057057c798e5e471f4460519d478e927dd9d52ffc8ae2095d3da833ebd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae6e7057057c798e5e471f4460519d478e927dd9d52ffc8ae2095d3da833ebd->enter($__internal_eae6e7057057c798e5e471f4460519d478e927dd9d52ffc8ae2095d3da833ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("department_create");
        echo "\">New Department</a>
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
        
        $__internal_eae6e7057057c798e5e471f4460519d478e927dd9d52ffc8ae2095d3da833ebd->leave($__internal_eae6e7057057c798e5e471f4460519d478e927dd9d52ffc8ae2095d3da833ebd_prof);

        
        $__internal_687d817db9726a8a85ce68c9f0a139defe27f462ded603b922f0960ec83897a9->leave($__internal_687d817db9726a8a85ce68c9f0a139defe27f462ded603b922f0960ec83897a9_prof);

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
    <a href=\"{{ path('department_create') }}\">New Department</a>
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
", ":department:view.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/department/view.html.twig");
    }
}
