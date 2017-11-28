<?php

/* :result:view.html.twig */
class __TwigTemplate_e1ed3ed4d10dc6ebd90a2258e3a6c7c6b556303b49d9701e40f594f24004c63b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":result:view.html.twig", 1);
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
        $__internal_420c6f6f5d66e8c91d9de716016b643ad665584ec202931ecdf52fccb22c511f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_420c6f6f5d66e8c91d9de716016b643ad665584ec202931ecdf52fccb22c511f->enter($__internal_420c6f6f5d66e8c91d9de716016b643ad665584ec202931ecdf52fccb22c511f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":result:view.html.twig"));

        $__internal_df45c979defdebd7f71d104e4a4871f615dd4bbcfca567a3bcf4472de3a665d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df45c979defdebd7f71d104e4a4871f615dd4bbcfca567a3bcf4472de3a665d3->enter($__internal_df45c979defdebd7f71d104e4a4871f615dd4bbcfca567a3bcf4472de3a665d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":result:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_420c6f6f5d66e8c91d9de716016b643ad665584ec202931ecdf52fccb22c511f->leave($__internal_420c6f6f5d66e8c91d9de716016b643ad665584ec202931ecdf52fccb22c511f_prof);

        
        $__internal_df45c979defdebd7f71d104e4a4871f615dd4bbcfca567a3bcf4472de3a665d3->leave($__internal_df45c979defdebd7f71d104e4a4871f615dd4bbcfca567a3bcf4472de3a665d3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e922f4c699c74c53a423619213e880a812feadcb08a8da554ee8582fff370f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e922f4c699c74c53a423619213e880a812feadcb08a8da554ee8582fff370f7d->enter($__internal_e922f4c699c74c53a423619213e880a812feadcb08a8da554ee8582fff370f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c07afa3456530633f676e97e1240ed6d304ed5464a10884633bba63bc9d04253 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c07afa3456530633f676e97e1240ed6d304ed5464a10884633bba63bc9d04253->enter($__internal_c07afa3456530633f676e97e1240ed6d304ed5464a10884633bba63bc9d04253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Teachers View
";
        
        $__internal_c07afa3456530633f676e97e1240ed6d304ed5464a10884633bba63bc9d04253->leave($__internal_c07afa3456530633f676e97e1240ed6d304ed5464a10884633bba63bc9d04253_prof);

        
        $__internal_e922f4c699c74c53a423619213e880a812feadcb08a8da554ee8582fff370f7d->leave($__internal_e922f4c699c74c53a423619213e880a812feadcb08a8da554ee8582fff370f7d_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_01d08211e6bd121fa73804a124c98dd70e6d2ee6d260174efd2085cc6c22c415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01d08211e6bd121fa73804a124c98dd70e6d2ee6d260174efd2085cc6c22c415->enter($__internal_01d08211e6bd121fa73804a124c98dd70e6d2ee6d260174efd2085cc6c22c415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_5e9b268aef6846f50c8ac6f9f491ff822fd2404c0fe0defb79a4bc96c042225d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e9b268aef6846f50c8ac6f9f491ff822fd2404c0fe0defb79a4bc96c042225d->enter($__internal_5e9b268aef6846f50c8ac6f9f491ff822fd2404c0fe0defb79a4bc96c042225d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_5e9b268aef6846f50c8ac6f9f491ff822fd2404c0fe0defb79a4bc96c042225d->leave($__internal_5e9b268aef6846f50c8ac6f9f491ff822fd2404c0fe0defb79a4bc96c042225d_prof);

        
        $__internal_01d08211e6bd121fa73804a124c98dd70e6d2ee6d260174efd2085cc6c22c415->leave($__internal_01d08211e6bd121fa73804a124c98dd70e6d2ee6d260174efd2085cc6c22c415_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_d895967892830025b041cf4b8443089742757b04ef0ae4eac8df8e53e64d5632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d895967892830025b041cf4b8443089742757b04ef0ae4eac8df8e53e64d5632->enter($__internal_d895967892830025b041cf4b8443089742757b04ef0ae4eac8df8e53e64d5632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b9bf846f718489901c55740ce405542428f46b35c563539a8fcf6e15d53c58ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9bf846f718489901c55740ce405542428f46b35c563539a8fcf6e15d53c58ee->enter($__internal_b9bf846f718489901c55740ce405542428f46b35c563539a8fcf6e15d53c58ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\">

  </div>
";
        
        $__internal_b9bf846f718489901c55740ce405542428f46b35c563539a8fcf6e15d53c58ee->leave($__internal_b9bf846f718489901c55740ce405542428f46b35c563539a8fcf6e15d53c58ee_prof);

        
        $__internal_d895967892830025b041cf4b8443089742757b04ef0ae4eac8df8e53e64d5632->leave($__internal_d895967892830025b041cf4b8443089742757b04ef0ae4eac8df8e53e64d5632_prof);

    }

    public function getTemplateName()
    {
        return ":result:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  <div class=\"container\">

  </div>
{% endblock %}
", ":result:view.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/result/view.html.twig");
    }
}
