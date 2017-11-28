<?php

/* :admin:view.html.twig */
class __TwigTemplate_bd71abe898635be640a515d94c4cc489ea376c799e51895ff56b7dece905444c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":admin:view.html.twig", 1);
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
        $__internal_763b2406d8ec6f0f103ba0a32df6dc4f854e7dd4fb62e86de147d2884d56a5c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_763b2406d8ec6f0f103ba0a32df6dc4f854e7dd4fb62e86de147d2884d56a5c3->enter($__internal_763b2406d8ec6f0f103ba0a32df6dc4f854e7dd4fb62e86de147d2884d56a5c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:view.html.twig"));

        $__internal_382b189df4faa793d8859ae01ade3101d82b32e643216dd7954d6f1bd5e0a620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_382b189df4faa793d8859ae01ade3101d82b32e643216dd7954d6f1bd5e0a620->enter($__internal_382b189df4faa793d8859ae01ade3101d82b32e643216dd7954d6f1bd5e0a620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_763b2406d8ec6f0f103ba0a32df6dc4f854e7dd4fb62e86de147d2884d56a5c3->leave($__internal_763b2406d8ec6f0f103ba0a32df6dc4f854e7dd4fb62e86de147d2884d56a5c3_prof);

        
        $__internal_382b189df4faa793d8859ae01ade3101d82b32e643216dd7954d6f1bd5e0a620->leave($__internal_382b189df4faa793d8859ae01ade3101d82b32e643216dd7954d6f1bd5e0a620_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_268372e8496fc49671143c56ad46bf80e810cf71af3ab4a1408404cdff2cbc5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_268372e8496fc49671143c56ad46bf80e810cf71af3ab4a1408404cdff2cbc5b->enter($__internal_268372e8496fc49671143c56ad46bf80e810cf71af3ab4a1408404cdff2cbc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_326062796849f5286750ee3a855d0978e738f9b19305b83f9b3726f6259e89f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_326062796849f5286750ee3a855d0978e738f9b19305b83f9b3726f6259e89f1->enter($__internal_326062796849f5286750ee3a855d0978e738f9b19305b83f9b3726f6259e89f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Admin View
";
        
        $__internal_326062796849f5286750ee3a855d0978e738f9b19305b83f9b3726f6259e89f1->leave($__internal_326062796849f5286750ee3a855d0978e738f9b19305b83f9b3726f6259e89f1_prof);

        
        $__internal_268372e8496fc49671143c56ad46bf80e810cf71af3ab4a1408404cdff2cbc5b->leave($__internal_268372e8496fc49671143c56ad46bf80e810cf71af3ab4a1408404cdff2cbc5b_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_c20c29949d08bc1f02ad43e2661d214762c0af8ca5ac37fe283cfff02d49b7b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c20c29949d08bc1f02ad43e2661d214762c0af8ca5ac37fe283cfff02d49b7b9->enter($__internal_c20c29949d08bc1f02ad43e2661d214762c0af8ca5ac37fe283cfff02d49b7b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_27d58ef4194f4ebe5f0c9f71a3efc63af89288d1ce5bee1b654e82baf5db5ab6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d58ef4194f4ebe5f0c9f71a3efc63af89288d1ce5bee1b654e82baf5db5ab6->enter($__internal_27d58ef4194f4ebe5f0c9f71a3efc63af89288d1ce5bee1b654e82baf5db5ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_27d58ef4194f4ebe5f0c9f71a3efc63af89288d1ce5bee1b654e82baf5db5ab6->leave($__internal_27d58ef4194f4ebe5f0c9f71a3efc63af89288d1ce5bee1b654e82baf5db5ab6_prof);

        
        $__internal_c20c29949d08bc1f02ad43e2661d214762c0af8ca5ac37fe283cfff02d49b7b9->leave($__internal_c20c29949d08bc1f02ad43e2661d214762c0af8ca5ac37fe283cfff02d49b7b9_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_00fe7d17dbef6ff12f6a2e607955166ddba65f4e5bb0198c7a8cb663ca9ba17e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00fe7d17dbef6ff12f6a2e607955166ddba65f4e5bb0198c7a8cb663ca9ba17e->enter($__internal_00fe7d17dbef6ff12f6a2e607955166ddba65f4e5bb0198c7a8cb663ca9ba17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_18bd0648b598c9ff05a416d5f51cb8928af6ef8b15afe32d0586b8aedd20c911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18bd0648b598c9ff05a416d5f51cb8928af6ef8b15afe32d0586b8aedd20c911->enter($__internal_18bd0648b598c9ff05a416d5f51cb8928af6ef8b15afe32d0586b8aedd20c911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_create");
        echo "\">Create a New Admin</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>First Name</th>
          <th>Middle Name</th>
          <th>Last Name</th>
          <th>Mobile Number</th>
          <th>Email Address</th>
          <th>Admin Class</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["admins"] ?? $this->getContext($context, "admins")));
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 29
            echo "          <tr>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "firstName", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "middleName", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "lastName", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "mobileNumber", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "emailAddress", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["admin"], "adminClass", array())), "html", null, true);
            echo "</td>

            <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_view_one", array("admin_id" => $this->getAttribute($context["admin"], "id", array()))), "html", null, true);
            echo "\">view</a></td>

            ";
            // line 39
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_type"), "method") == "admin")) {
                // line 40
                echo "              <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edit", array("admin_id" => $this->getAttribute($context["admin"], "id", array()))), "html", null, true);
                echo "\" id=\"editBtn\">edit</button></td>
              <td><a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_delete", array("admin_id" => $this->getAttribute($context["admin"], "id", array()))), "html", null, true);
                echo "\" id=\"deleteBtn\"
                  onclick=\"return confirm('Are You Sure You Want To Delete ";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "middleName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "lastName", array()), "html", null, true);
                echo "?') \">delete</button></td>
            ";
            }
            // line 44
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_18bd0648b598c9ff05a416d5f51cb8928af6ef8b15afe32d0586b8aedd20c911->leave($__internal_18bd0648b598c9ff05a416d5f51cb8928af6ef8b15afe32d0586b8aedd20c911_prof);

        
        $__internal_00fe7d17dbef6ff12f6a2e607955166ddba65f4e5bb0198c7a8cb663ca9ba17e->leave($__internal_00fe7d17dbef6ff12f6a2e607955166ddba65f4e5bb0198c7a8cb663ca9ba17e_prof);

    }

    public function getTemplateName()
    {
        return ":admin:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 46,  170 => 44,  161 => 42,  157 => 41,  152 => 40,  150 => 39,  145 => 37,  140 => 35,  136 => 34,  132 => 33,  128 => 32,  124 => 31,  120 => 30,  117 => 29,  113 => 28,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  Admin View
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container\" id=\"view_container\">
    <a href=\"{{ path('admin_create') }}\">Create a New Admin</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>First Name</th>
          <th>Middle Name</th>
          <th>Last Name</th>
          <th>Mobile Number</th>
          <th>Email Address</th>
          <th>Admin Class</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        {% for admin in admins %}
          <tr>
            <td>{{ admin.firstName }}</td>
            <td>{{ admin.middleName }}</td>
            <td>{{ admin.lastName }}</td>
            <td>{{ admin.mobileNumber }}</td>
            <td>{{ admin.emailAddress }}</td>
            <td>{{ admin.adminClass | capitalize }}</td>

            <td><a href=\"{{ path('admin_view_one', {'admin_id': admin.id}) }}\">view</a></td>

            {% if(app.session.get('user_type') == 'admin') %}
              <td><a href=\"{{ path('admin_edit', {'admin_id': admin.id}) }}\" id=\"editBtn\">edit</button></td>
              <td><a href=\"{{ path('admin_delete', {'admin_id': admin.id}) }}\" id=\"deleteBtn\"
                  onclick=\"return confirm('Are You Sure You Want To Delete {{ admin.firstName }} {{ admin.middleName }} {{ admin.lastName }}?') \">delete</button></td>
            {% endif %}
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", ":admin:view.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/admin/view.html.twig");
    }
}
