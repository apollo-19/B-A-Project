<?php

/* :teacher:view.html.twig */
class __TwigTemplate_a6b74296f96a50a67450699b516a3493c4972e0369c5a309d167844fd78bd78d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":teacher:view.html.twig", 1);
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
        $__internal_d39e47c1d4324583e1d95927418ed753f69b833e22701478a803d0522c686b0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d39e47c1d4324583e1d95927418ed753f69b833e22701478a803d0522c686b0f->enter($__internal_d39e47c1d4324583e1d95927418ed753f69b833e22701478a803d0522c686b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":teacher:view.html.twig"));

        $__internal_ad011ba2c3edc71b05d973c3b3628630ae637843f2ffd5a36171a335ce10f1a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad011ba2c3edc71b05d973c3b3628630ae637843f2ffd5a36171a335ce10f1a8->enter($__internal_ad011ba2c3edc71b05d973c3b3628630ae637843f2ffd5a36171a335ce10f1a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":teacher:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d39e47c1d4324583e1d95927418ed753f69b833e22701478a803d0522c686b0f->leave($__internal_d39e47c1d4324583e1d95927418ed753f69b833e22701478a803d0522c686b0f_prof);

        
        $__internal_ad011ba2c3edc71b05d973c3b3628630ae637843f2ffd5a36171a335ce10f1a8->leave($__internal_ad011ba2c3edc71b05d973c3b3628630ae637843f2ffd5a36171a335ce10f1a8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0c0ec184bba6773cd5295535b9e30d86f67fcd1a52d5348224fc8a622caed9da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c0ec184bba6773cd5295535b9e30d86f67fcd1a52d5348224fc8a622caed9da->enter($__internal_0c0ec184bba6773cd5295535b9e30d86f67fcd1a52d5348224fc8a622caed9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_965bbeee46acf6ead273948cf9cd7eb42c0dca2ff5836db27caabd3093000233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_965bbeee46acf6ead273948cf9cd7eb42c0dca2ff5836db27caabd3093000233->enter($__internal_965bbeee46acf6ead273948cf9cd7eb42c0dca2ff5836db27caabd3093000233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Teachers View
";
        
        $__internal_965bbeee46acf6ead273948cf9cd7eb42c0dca2ff5836db27caabd3093000233->leave($__internal_965bbeee46acf6ead273948cf9cd7eb42c0dca2ff5836db27caabd3093000233_prof);

        
        $__internal_0c0ec184bba6773cd5295535b9e30d86f67fcd1a52d5348224fc8a622caed9da->leave($__internal_0c0ec184bba6773cd5295535b9e30d86f67fcd1a52d5348224fc8a622caed9da_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_83091865bfcfc229adc85a3b112bb8433a2c01c69d63533e4357b9512ee9259c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83091865bfcfc229adc85a3b112bb8433a2c01c69d63533e4357b9512ee9259c->enter($__internal_83091865bfcfc229adc85a3b112bb8433a2c01c69d63533e4357b9512ee9259c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_d59f46c225366153b5b3360ef02715655e9c2971066e9b302affeda59186c35a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d59f46c225366153b5b3360ef02715655e9c2971066e9b302affeda59186c35a->enter($__internal_d59f46c225366153b5b3360ef02715655e9c2971066e9b302affeda59186c35a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_d59f46c225366153b5b3360ef02715655e9c2971066e9b302affeda59186c35a->leave($__internal_d59f46c225366153b5b3360ef02715655e9c2971066e9b302affeda59186c35a_prof);

        
        $__internal_83091865bfcfc229adc85a3b112bb8433a2c01c69d63533e4357b9512ee9259c->leave($__internal_83091865bfcfc229adc85a3b112bb8433a2c01c69d63533e4357b9512ee9259c_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa5f138c798400da1aec4c6da53a5539798e0e78ac5fbcfdaf359c9f52b852be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa5f138c798400da1aec4c6da53a5539798e0e78ac5fbcfdaf359c9f52b852be->enter($__internal_fa5f138c798400da1aec4c6da53a5539798e0e78ac5fbcfdaf359c9f52b852be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_060dd99470948ae4eee90e9dcc3c653746c4c25d67cca635de2bbbf021c83f9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_060dd99470948ae4eee90e9dcc3c653746c4c25d67cca635de2bbbf021c83f9a->enter($__internal_060dd99470948ae4eee90e9dcc3c653746c4c25d67cca635de2bbbf021c83f9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("teacher_hire");
        echo "\">New Teacher</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Name</th>
          <th>Sex</th>
          <th>Mobile Number</th>
          <th>Email Address</th>
          <th>Department</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["teachers"] ?? $this->getContext($context, "teachers")));
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 28
            echo "          <tr>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, (((($this->getAttribute($context["teacher"], "firstName", array()) . " ") . $this->getAttribute($context["teacher"], "middleName", array())) . " ") . $this->getAttribute($context["teacher"], "lastName", array())), "html", null, true);
            echo "</a></td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["teacher"], "sex", array())), "html", null, true);
            echo "</td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "mobileNumber", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "emailAddress", array()), "html", null, true);
            echo "</td>
            <td>
              ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["departments"] ?? $this->getContext($context, "departments")));
            foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
                // line 35
                echo "                ";
                if (($this->getAttribute($context["teacher"], "departmentId", array()) == $this->getAttribute($context["department"], "id", array()))) {
                    // line 36
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["department"], "departmentName", array()), "html", null, true);
                    echo "
                ";
                }
                // line 38
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "            </td>

            <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("teacher_view_one", array("teacher_id" => $this->getAttribute($context["teacher"], "id", array()))), "html", null, true);
            echo "\">view</a></td>
            <td><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("teacher_edit", array("teacher_id" => $this->getAttribute($context["teacher"], "id", array()))), "html", null, true);
            echo "\">edit</a></td>
            <td><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("teacher_delete", array("teacher_id" => $this->getAttribute($context["teacher"], "id", array()))), "html", null, true);
            echo "\" id=\"deleteBtn\"
                  onclick=\"return confirm('Are You Sure You Want To Delete ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "middleName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "lastName", array()), "html", null, true);
            echo "?') \">delete</a></td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_060dd99470948ae4eee90e9dcc3c653746c4c25d67cca635de2bbbf021c83f9a->leave($__internal_060dd99470948ae4eee90e9dcc3c653746c4c25d67cca635de2bbbf021c83f9a_prof);

        
        $__internal_fa5f138c798400da1aec4c6da53a5539798e0e78ac5fbcfdaf359c9f52b852be->leave($__internal_fa5f138c798400da1aec4c6da53a5539798e0e78ac5fbcfdaf359c9f52b852be_prof);

    }

    public function getTemplateName()
    {
        return ":teacher:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 47,  171 => 44,  167 => 43,  163 => 42,  159 => 41,  155 => 39,  149 => 38,  143 => 36,  140 => 35,  136 => 34,  131 => 32,  127 => 31,  123 => 30,  119 => 29,  116 => 28,  112 => 27,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  Teachers View
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container\" id=\"view_container\">
    <a href=\"{{ path('teacher_hire') }}\">New Teacher</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Name</th>
          <th>Sex</th>
          <th>Mobile Number</th>
          <th>Email Address</th>
          <th>Department</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        {% for teacher in teachers %}
          <tr>
            <td>{{ teacher.firstName ~ ' ' ~ teacher.middleName ~ ' ' ~ teacher.lastName }}</a></td>
            <td>{{ teacher.sex | capitalize }}</td>
            <td>{{ teacher.mobileNumber }}</td>
            <td>{{ teacher.emailAddress }}</td>
            <td>
              {% for department in departments %}
                {% if(teacher.departmentId == department.id) %}
                  {{ department.departmentName }}
                {% endif %}
              {% endfor %}
            </td>

            <td><a href=\"{{ path('teacher_view_one', {'teacher_id': teacher.id}) }}\">view</a></td>
            <td><a href=\"{{ path('teacher_edit', {'teacher_id': teacher.id}) }}\">edit</a></td>
            <td><a href=\"{{ path('teacher_delete', {'teacher_id': teacher.id}) }}\" id=\"deleteBtn\"
                  onclick=\"return confirm('Are You Sure You Want To Delete {{ teacher.firstName }} {{ teacher.middleName }} {{ teacher.lastName }}?') \">delete</a></td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", ":teacher:view.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/teacher/view.html.twig");
    }
}
