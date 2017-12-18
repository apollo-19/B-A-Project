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
        $__internal_1ed8dbf61a583a49b25010293bf99e212bbe18a634004cb9bba8a98c490d9f8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed8dbf61a583a49b25010293bf99e212bbe18a634004cb9bba8a98c490d9f8c->enter($__internal_1ed8dbf61a583a49b25010293bf99e212bbe18a634004cb9bba8a98c490d9f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:view.html.twig"));

        $__internal_292200e781eafcd1b374a0e4401ab0a48cf80e017d71c2597b3720f1b53550ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_292200e781eafcd1b374a0e4401ab0a48cf80e017d71c2597b3720f1b53550ca->enter($__internal_292200e781eafcd1b374a0e4401ab0a48cf80e017d71c2597b3720f1b53550ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ed8dbf61a583a49b25010293bf99e212bbe18a634004cb9bba8a98c490d9f8c->leave($__internal_1ed8dbf61a583a49b25010293bf99e212bbe18a634004cb9bba8a98c490d9f8c_prof);

        
        $__internal_292200e781eafcd1b374a0e4401ab0a48cf80e017d71c2597b3720f1b53550ca->leave($__internal_292200e781eafcd1b374a0e4401ab0a48cf80e017d71c2597b3720f1b53550ca_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a62956bd98cda8df60f1eeb5b74acffd80ea44a75a67cca2a1a25fea2ac964fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a62956bd98cda8df60f1eeb5b74acffd80ea44a75a67cca2a1a25fea2ac964fa->enter($__internal_a62956bd98cda8df60f1eeb5b74acffd80ea44a75a67cca2a1a25fea2ac964fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7daaabf657e62bfccca80c27f9c1973859cb43413ce7082c567da1b3c5d4a95e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7daaabf657e62bfccca80c27f9c1973859cb43413ce7082c567da1b3c5d4a95e->enter($__internal_7daaabf657e62bfccca80c27f9c1973859cb43413ce7082c567da1b3c5d4a95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Admin View
";
        
        $__internal_7daaabf657e62bfccca80c27f9c1973859cb43413ce7082c567da1b3c5d4a95e->leave($__internal_7daaabf657e62bfccca80c27f9c1973859cb43413ce7082c567da1b3c5d4a95e_prof);

        
        $__internal_a62956bd98cda8df60f1eeb5b74acffd80ea44a75a67cca2a1a25fea2ac964fa->leave($__internal_a62956bd98cda8df60f1eeb5b74acffd80ea44a75a67cca2a1a25fea2ac964fa_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_ef0be9eeb0f42395020fc54eb614ccb32c36aae809815d4fd25b940818d1562f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef0be9eeb0f42395020fc54eb614ccb32c36aae809815d4fd25b940818d1562f->enter($__internal_ef0be9eeb0f42395020fc54eb614ccb32c36aae809815d4fd25b940818d1562f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_171961388b2f8165db73935433d4cb33e8ce0fcce7a9b5e2559f2d25fe51c6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_171961388b2f8165db73935433d4cb33e8ce0fcce7a9b5e2559f2d25fe51c6b4->enter($__internal_171961388b2f8165db73935433d4cb33e8ce0fcce7a9b5e2559f2d25fe51c6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_171961388b2f8165db73935433d4cb33e8ce0fcce7a9b5e2559f2d25fe51c6b4->leave($__internal_171961388b2f8165db73935433d4cb33e8ce0fcce7a9b5e2559f2d25fe51c6b4_prof);

        
        $__internal_ef0be9eeb0f42395020fc54eb614ccb32c36aae809815d4fd25b940818d1562f->leave($__internal_ef0be9eeb0f42395020fc54eb614ccb32c36aae809815d4fd25b940818d1562f_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_bee26a5b0875c4724ba57f669f298dae712044b469b246d5b950549931a68a22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bee26a5b0875c4724ba57f669f298dae712044b469b246d5b950549931a68a22->enter($__internal_bee26a5b0875c4724ba57f669f298dae712044b469b246d5b950549931a68a22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_145a8040d45f2687a96e23f9ab25a792f5cb53ecc2f48cec711ee3ca311143c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_145a8040d45f2687a96e23f9ab25a792f5cb53ecc2f48cec711ee3ca311143c6->enter($__internal_145a8040d45f2687a96e23f9ab25a792f5cb53ecc2f48cec711ee3ca311143c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_create");
        echo "\">New Admin</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Name</th>
          <th>Mobile Number</th>
          <th>Email Address</th>
          <th>Admin Class</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["admins"] ?? $this->getContext($context, "admins")));
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 27
            echo "          <tr>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, (((($this->getAttribute($context["admin"], "firstName", array()) . " ") . $this->getAttribute($context["admin"], "middleName", array())) . " ") . $this->getAttribute($context["admin"], "lastName", array())), "html", null, true);
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "mobileNumber", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "emailAddress", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["admin"], "adminClass", array())), "html", null, true);
            echo "</td>

            <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_view_one", array("admin_id" => $this->getAttribute($context["admin"], "id", array()))), "html", null, true);
            echo "\">view</a></td>

            ";
            // line 35
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_type"), "method") == "admin")) {
                // line 36
                echo "              <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edit", array("admin_id" => $this->getAttribute($context["admin"], "id", array()))), "html", null, true);
                echo "\" id=\"editBtn\">edit</button></td>
              <td><a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_delete", array("admin_id" => $this->getAttribute($context["admin"], "id", array()))), "html", null, true);
                echo "\" id=\"deleteBtn\"
                  onclick=\"return confirm('Are You Sure You Want To Delete ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "middleName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "lastName", array()), "html", null, true);
                echo "?') \">delete</button></td>
            ";
            }
            // line 40
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_145a8040d45f2687a96e23f9ab25a792f5cb53ecc2f48cec711ee3ca311143c6->leave($__internal_145a8040d45f2687a96e23f9ab25a792f5cb53ecc2f48cec711ee3ca311143c6_prof);

        
        $__internal_bee26a5b0875c4724ba57f669f298dae712044b469b246d5b950549931a68a22->leave($__internal_bee26a5b0875c4724ba57f669f298dae712044b469b246d5b950549931a68a22_prof);

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
        return array (  167 => 42,  160 => 40,  151 => 38,  147 => 37,  142 => 36,  140 => 35,  135 => 33,  130 => 31,  126 => 30,  122 => 29,  118 => 28,  115 => 27,  111 => 26,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
    <a href=\"{{ path('admin_create') }}\">New Admin</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Name</th>
          <th>Mobile Number</th>
          <th>Email Address</th>
          <th>Admin Class</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        {% for admin in admins %}
          <tr>
            <td>{{ admin.firstName ~ ' ' ~ admin.middleName ~ ' ' ~ admin.lastName }}</td>
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
", ":admin:view.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/admin/view.html.twig");
    }
}
