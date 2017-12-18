<?php

/* :admin:view_one.html.twig */
class __TwigTemplate_eadc06311ab7bb76fe22ee6765c3d1e7f9b4ce2dfd607b771eef6cbb513e2545 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":admin:view_one.html.twig", 1);
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
        $__internal_39ff0d60964cab7aeeeac869bbc1e7ba1014dcc623e08c6480f43fbbfbe9a2ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39ff0d60964cab7aeeeac869bbc1e7ba1014dcc623e08c6480f43fbbfbe9a2ee->enter($__internal_39ff0d60964cab7aeeeac869bbc1e7ba1014dcc623e08c6480f43fbbfbe9a2ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:view_one.html.twig"));

        $__internal_5c86a5e8b2dbb6f6209f08decce401d79dceb2d5ff34123e5f2212854b32aff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c86a5e8b2dbb6f6209f08decce401d79dceb2d5ff34123e5f2212854b32aff7->enter($__internal_5c86a5e8b2dbb6f6209f08decce401d79dceb2d5ff34123e5f2212854b32aff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:view_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39ff0d60964cab7aeeeac869bbc1e7ba1014dcc623e08c6480f43fbbfbe9a2ee->leave($__internal_39ff0d60964cab7aeeeac869bbc1e7ba1014dcc623e08c6480f43fbbfbe9a2ee_prof);

        
        $__internal_5c86a5e8b2dbb6f6209f08decce401d79dceb2d5ff34123e5f2212854b32aff7->leave($__internal_5c86a5e8b2dbb6f6209f08decce401d79dceb2d5ff34123e5f2212854b32aff7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_774939e3a48e5d274d01199bf4a3909c9cfe880140d9b81767ac9406ac2c89f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_774939e3a48e5d274d01199bf4a3909c9cfe880140d9b81767ac9406ac2c89f0->enter($__internal_774939e3a48e5d274d01199bf4a3909c9cfe880140d9b81767ac9406ac2c89f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_78fad5d22d16316c0cf7226222ba0530847cf87fc7d3e53b3635a7daf1bde4b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78fad5d22d16316c0cf7226222ba0530847cf87fc7d3e53b3635a7daf1bde4b2->enter($__internal_78fad5d22d16316c0cf7226222ba0530847cf87fc7d3e53b3635a7daf1bde4b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "middleName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "lastName", array()), "html", null, true);
        echo "
";
        
        $__internal_78fad5d22d16316c0cf7226222ba0530847cf87fc7d3e53b3635a7daf1bde4b2->leave($__internal_78fad5d22d16316c0cf7226222ba0530847cf87fc7d3e53b3635a7daf1bde4b2_prof);

        
        $__internal_774939e3a48e5d274d01199bf4a3909c9cfe880140d9b81767ac9406ac2c89f0->leave($__internal_774939e3a48e5d274d01199bf4a3909c9cfe880140d9b81767ac9406ac2c89f0_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_e2432f7c4bf3aed83055eab1135a9ab7bb86398572ca8bec9b5d000afbe69f99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2432f7c4bf3aed83055eab1135a9ab7bb86398572ca8bec9b5d000afbe69f99->enter($__internal_e2432f7c4bf3aed83055eab1135a9ab7bb86398572ca8bec9b5d000afbe69f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_2808ab03ff03359ff9cac72f57434e4890a6605a8ffb24fcf64edfbff8e04271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2808ab03ff03359ff9cac72f57434e4890a6605a8ffb24fcf64edfbff8e04271->enter($__internal_2808ab03ff03359ff9cac72f57434e4890a6605a8ffb24fcf64edfbff8e04271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>
</style>
";
        
        $__internal_2808ab03ff03359ff9cac72f57434e4890a6605a8ffb24fcf64edfbff8e04271->leave($__internal_2808ab03ff03359ff9cac72f57434e4890a6605a8ffb24fcf64edfbff8e04271_prof);

        
        $__internal_e2432f7c4bf3aed83055eab1135a9ab7bb86398572ca8bec9b5d000afbe69f99->leave($__internal_e2432f7c4bf3aed83055eab1135a9ab7bb86398572ca8bec9b5d000afbe69f99_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_56ee479c33c612f67dcdcaa3e8e63ad52899ffdd5f31cd319a1f6b9d31b31023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56ee479c33c612f67dcdcaa3e8e63ad52899ffdd5f31cd319a1f6b9d31b31023->enter($__internal_56ee479c33c612f67dcdcaa3e8e63ad52899ffdd5f31cd319a1f6b9d31b31023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_33b8aec087d72cd8a5a7fa2185a20a7c72bbf03af21f8fef368fce4b41320bbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b8aec087d72cd8a5a7fa2185a20a7c72bbf03af21f8fef368fce4b41320bbb->enter($__internal_33b8aec087d72cd8a5a7fa2185a20a7c72bbf03af21f8fef368fce4b41320bbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "middleName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "lastName", array()), "html", null, true);
        echo "</h1>

      <table>
        <tr>
          <td>First Name:</td>
          <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "firstName", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Middle Name</td>
          <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "middleName", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Last Name</td>
          <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "lastName", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Mobile Number</td>
          <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "mobileNumber", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Email Address</td>
          <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "emailAddress", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Admin Type</td>
          <td>";
        // line 45
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "adminType", array())), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Admin Class</td>
          <td>";
        // line 50
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "adminClass", array())), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>User Name</td>
          <td>";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "userName", array()), "html", null, true);
        echo "</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
";
        
        $__internal_33b8aec087d72cd8a5a7fa2185a20a7c72bbf03af21f8fef368fce4b41320bbb->leave($__internal_33b8aec087d72cd8a5a7fa2185a20a7c72bbf03af21f8fef368fce4b41320bbb_prof);

        
        $__internal_56ee479c33c612f67dcdcaa3e8e63ad52899ffdd5f31cd319a1f6b9d31b31023->leave($__internal_56ee479c33c612f67dcdcaa3e8e63ad52899ffdd5f31cd319a1f6b9d31b31023_prof);

    }

    public function getTemplateName()
    {
        return ":admin:view_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 55,  163 => 50,  155 => 45,  147 => 40,  139 => 35,  131 => 30,  123 => 25,  115 => 20,  103 => 15,  98 => 12,  89 => 11,  77 => 7,  68 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  {{ admin.firstName }} {{ admin.middleName }} {{ admin.lastName }}
{% endblock %}

{% block stylesheet %}
<style>
</style>
{% endblock %}

{% block body %}
  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">{{ admin.firstName }} {{ admin.middleName }} {{ admin.lastName }}</h1>

      <table>
        <tr>
          <td>First Name:</td>
          <td>{{ admin.firstName }}</td>
        </tr>

        <tr>
          <td>Middle Name</td>
          <td>{{ admin.middleName }}</td>
        </tr>

        <tr>
          <td>Last Name</td>
          <td>{{ admin.lastName }}</td>
        </tr>

        <tr>
          <td>Mobile Number</td>
          <td>{{ admin.mobileNumber }}</td>
        </tr>

        <tr>
          <td>Email Address</td>
          <td>{{ admin.emailAddress }}</td>
        </tr>

        <tr>
          <td>Admin Type</td>
          <td>{{ admin.adminType | capitalize }}</td>
        </tr>

        <tr>
          <td>Admin Class</td>
          <td>{{ admin.adminClass | capitalize }}</td>
        </tr>

        <tr>
          <td>User Name</td>
          <td>{{ admin.userName }}</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
{% endblock %}
", ":admin:view_one.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/admin/view_one.html.twig");
    }
}
