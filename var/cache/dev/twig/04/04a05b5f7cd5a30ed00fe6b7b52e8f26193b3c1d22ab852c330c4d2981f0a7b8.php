<?php

/* :department:view_one.html.twig */
class __TwigTemplate_5741b720ff014631b8f5f1ead16e9c753e604dd2e33e40d6a2c97e33720e494b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":department:view_one.html.twig", 1);
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
        $__internal_f648a4661eea4537046dccb1cbe735c01df5093eef8e3c5d4141df479e39bd7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f648a4661eea4537046dccb1cbe735c01df5093eef8e3c5d4141df479e39bd7c->enter($__internal_f648a4661eea4537046dccb1cbe735c01df5093eef8e3c5d4141df479e39bd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":department:view_one.html.twig"));

        $__internal_9a900599016742aec96241683367f1bf0dfd68ecb87bef68d59c09ed1ccffbe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a900599016742aec96241683367f1bf0dfd68ecb87bef68d59c09ed1ccffbe4->enter($__internal_9a900599016742aec96241683367f1bf0dfd68ecb87bef68d59c09ed1ccffbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":department:view_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f648a4661eea4537046dccb1cbe735c01df5093eef8e3c5d4141df479e39bd7c->leave($__internal_f648a4661eea4537046dccb1cbe735c01df5093eef8e3c5d4141df479e39bd7c_prof);

        
        $__internal_9a900599016742aec96241683367f1bf0dfd68ecb87bef68d59c09ed1ccffbe4->leave($__internal_9a900599016742aec96241683367f1bf0dfd68ecb87bef68d59c09ed1ccffbe4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d8fba6c7d61be218078c77f720937b1d9418348f38602e75b487fa43567cea45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8fba6c7d61be218078c77f720937b1d9418348f38602e75b487fa43567cea45->enter($__internal_d8fba6c7d61be218078c77f720937b1d9418348f38602e75b487fa43567cea45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_33039fa3f06fc5c577a7d5254c9419cd01a5f68644881a104d65619bc3af54ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33039fa3f06fc5c577a7d5254c9419cd01a5f68644881a104d65619bc3af54ab->enter($__internal_33039fa3f06fc5c577a7d5254c9419cd01a5f68644881a104d65619bc3af54ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["department"] ?? $this->getContext($context, "department")), "departmentCode", array()), "html", null, true);
        echo "
";
        
        $__internal_33039fa3f06fc5c577a7d5254c9419cd01a5f68644881a104d65619bc3af54ab->leave($__internal_33039fa3f06fc5c577a7d5254c9419cd01a5f68644881a104d65619bc3af54ab_prof);

        
        $__internal_d8fba6c7d61be218078c77f720937b1d9418348f38602e75b487fa43567cea45->leave($__internal_d8fba6c7d61be218078c77f720937b1d9418348f38602e75b487fa43567cea45_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_cf4dc14a588326ad696e9af75c7f6cfd4b4f553c43e05dbb276401fe034d4130 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf4dc14a588326ad696e9af75c7f6cfd4b4f553c43e05dbb276401fe034d4130->enter($__internal_cf4dc14a588326ad696e9af75c7f6cfd4b4f553c43e05dbb276401fe034d4130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_3a47284a4ef904059828121ec55f5a297d7567938048ac298a875d180ca74d6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a47284a4ef904059828121ec55f5a297d7567938048ac298a875d180ca74d6d->enter($__internal_3a47284a4ef904059828121ec55f5a297d7567938048ac298a875d180ca74d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>
</style>
";
        
        $__internal_3a47284a4ef904059828121ec55f5a297d7567938048ac298a875d180ca74d6d->leave($__internal_3a47284a4ef904059828121ec55f5a297d7567938048ac298a875d180ca74d6d_prof);

        
        $__internal_cf4dc14a588326ad696e9af75c7f6cfd4b4f553c43e05dbb276401fe034d4130->leave($__internal_cf4dc14a588326ad696e9af75c7f6cfd4b4f553c43e05dbb276401fe034d4130_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_46c92ec28c13adeca3194385e45ad899356af39f3373f2deef27cb3982d78f9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46c92ec28c13adeca3194385e45ad899356af39f3373f2deef27cb3982d78f9c->enter($__internal_46c92ec28c13adeca3194385e45ad899356af39f3373f2deef27cb3982d78f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_36ad40fa5a69ae6a6528611382626a187e2c822badcda7db5b8c9258c3054b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36ad40fa5a69ae6a6528611382626a187e2c822badcda7db5b8c9258c3054b7e->enter($__internal_36ad40fa5a69ae6a6528611382626a187e2c822badcda7db5b8c9258c3054b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["department"] ?? $this->getContext($context, "department")), "departmentName", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["department"] ?? $this->getContext($context, "department")), "departmentCode", array()), "html", null, true);
        echo ")</h1>

      <table>
        <tr>
          <td>Department Code:</td>
          <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["department"] ?? $this->getContext($context, "department")), "departmentCode", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Department Name:</td>
          <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["department"] ?? $this->getContext($context, "department")), "departmentName", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Department School:</td>
          <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["school"] ?? $this->getContext($context, "school")), "schoolName", array()), "html", null, true);
        echo "</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
";
        
        $__internal_36ad40fa5a69ae6a6528611382626a187e2c822badcda7db5b8c9258c3054b7e->leave($__internal_36ad40fa5a69ae6a6528611382626a187e2c822badcda7db5b8c9258c3054b7e_prof);

        
        $__internal_46c92ec28c13adeca3194385e45ad899356af39f3373f2deef27cb3982d78f9c->leave($__internal_46c92ec28c13adeca3194385e45ad899356af39f3373f2deef27cb3982d78f9c_prof);

    }

    public function getTemplateName()
    {
        return ":department:view_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 30,  117 => 25,  109 => 20,  99 => 15,  94 => 12,  85 => 11,  73 => 7,  64 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  {{ department.departmentCode }}
{% endblock %}

{% block stylesheet %}
<style>
</style>
{% endblock %}

{% block body %}
  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">{{ department.departmentName }} ({{ department.departmentCode }})</h1>

      <table>
        <tr>
          <td>Department Code:</td>
          <td>{{ department.departmentCode }}</td>
        </tr>

        <tr>
          <td>Department Name:</td>
          <td>{{ department.departmentName }}</td>
        </tr>

        <tr>
          <td>Department School:</td>
          <td>{{ school.schoolName }}</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
{% endblock %}
", ":department:view_one.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/department/view_one.html.twig");
    }
}
