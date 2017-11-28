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
        $__internal_9798c21b52ff0871556895bad7d6a3ed47626721740e69f624c86f59a093848f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9798c21b52ff0871556895bad7d6a3ed47626721740e69f624c86f59a093848f->enter($__internal_9798c21b52ff0871556895bad7d6a3ed47626721740e69f624c86f59a093848f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:view_one.html.twig"));

        $__internal_4dde9261374166689744555385fbb47f885b83abc542997828eb67e187193346 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dde9261374166689744555385fbb47f885b83abc542997828eb67e187193346->enter($__internal_4dde9261374166689744555385fbb47f885b83abc542997828eb67e187193346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:view_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9798c21b52ff0871556895bad7d6a3ed47626721740e69f624c86f59a093848f->leave($__internal_9798c21b52ff0871556895bad7d6a3ed47626721740e69f624c86f59a093848f_prof);

        
        $__internal_4dde9261374166689744555385fbb47f885b83abc542997828eb67e187193346->leave($__internal_4dde9261374166689744555385fbb47f885b83abc542997828eb67e187193346_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b728f2977a06574bf1a9ec4a0422359ba60e13f509d821dd3f362cf01a0a0a96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b728f2977a06574bf1a9ec4a0422359ba60e13f509d821dd3f362cf01a0a0a96->enter($__internal_b728f2977a06574bf1a9ec4a0422359ba60e13f509d821dd3f362cf01a0a0a96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0e0f7523ba495a511dfbaadc99d5f22af249af9d2781c85903708e9a2b300752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e0f7523ba495a511dfbaadc99d5f22af249af9d2781c85903708e9a2b300752->enter($__internal_0e0f7523ba495a511dfbaadc99d5f22af249af9d2781c85903708e9a2b300752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "middleName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "lastName", array()), "html", null, true);
        echo "
";
        
        $__internal_0e0f7523ba495a511dfbaadc99d5f22af249af9d2781c85903708e9a2b300752->leave($__internal_0e0f7523ba495a511dfbaadc99d5f22af249af9d2781c85903708e9a2b300752_prof);

        
        $__internal_b728f2977a06574bf1a9ec4a0422359ba60e13f509d821dd3f362cf01a0a0a96->leave($__internal_b728f2977a06574bf1a9ec4a0422359ba60e13f509d821dd3f362cf01a0a0a96_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_bb68af932e323b8f3e70b50be2ddd1f112764a5dda762a5c9f773b11da501bb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb68af932e323b8f3e70b50be2ddd1f112764a5dda762a5c9f773b11da501bb4->enter($__internal_bb68af932e323b8f3e70b50be2ddd1f112764a5dda762a5c9f773b11da501bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_70b0b267fcc0582275adc3ef9183259b25df1871c7e01a2bcc7575b0f21267da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b0b267fcc0582275adc3ef9183259b25df1871c7e01a2bcc7575b0f21267da->enter($__internal_70b0b267fcc0582275adc3ef9183259b25df1871c7e01a2bcc7575b0f21267da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>
</style>
";
        
        $__internal_70b0b267fcc0582275adc3ef9183259b25df1871c7e01a2bcc7575b0f21267da->leave($__internal_70b0b267fcc0582275adc3ef9183259b25df1871c7e01a2bcc7575b0f21267da_prof);

        
        $__internal_bb68af932e323b8f3e70b50be2ddd1f112764a5dda762a5c9f773b11da501bb4->leave($__internal_bb68af932e323b8f3e70b50be2ddd1f112764a5dda762a5c9f773b11da501bb4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_524b4718b94cd15da5e7d25921f5ca8d93b6c6beeb0df67dfda8bb8d7923a896 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_524b4718b94cd15da5e7d25921f5ca8d93b6c6beeb0df67dfda8bb8d7923a896->enter($__internal_524b4718b94cd15da5e7d25921f5ca8d93b6c6beeb0df67dfda8bb8d7923a896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6a4a8d222a0b6d095ab412c4ebb060856947f173260958362a5b885b7694d8bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a4a8d222a0b6d095ab412c4ebb060856947f173260958362a5b885b7694d8bc->enter($__internal_6a4a8d222a0b6d095ab412c4ebb060856947f173260958362a5b885b7694d8bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6a4a8d222a0b6d095ab412c4ebb060856947f173260958362a5b885b7694d8bc->leave($__internal_6a4a8d222a0b6d095ab412c4ebb060856947f173260958362a5b885b7694d8bc_prof);

        
        $__internal_524b4718b94cd15da5e7d25921f5ca8d93b6c6beeb0df67dfda8bb8d7923a896->leave($__internal_524b4718b94cd15da5e7d25921f5ca8d93b6c6beeb0df67dfda8bb8d7923a896_prof);

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
", ":admin:view_one.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/admin/view_one.html.twig");
    }
}
