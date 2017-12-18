<?php

/* :curriculum:index.html.twig */
class __TwigTemplate_f0d545536740eaf48a4fec7b7bd89003aaac31b19214382ec365200ec6262de2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":curriculum:index.html.twig", 1);
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
        $__internal_7f1deff92fcda5260f5131e16916c5b505518c56851b43c347251529cba53115 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f1deff92fcda5260f5131e16916c5b505518c56851b43c347251529cba53115->enter($__internal_7f1deff92fcda5260f5131e16916c5b505518c56851b43c347251529cba53115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":curriculum:index.html.twig"));

        $__internal_b8e0e13013ecfec7280a828793738324b933dfedec77e956f0e0481b8397f5b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e0e13013ecfec7280a828793738324b933dfedec77e956f0e0481b8397f5b7->enter($__internal_b8e0e13013ecfec7280a828793738324b933dfedec77e956f0e0481b8397f5b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":curriculum:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f1deff92fcda5260f5131e16916c5b505518c56851b43c347251529cba53115->leave($__internal_7f1deff92fcda5260f5131e16916c5b505518c56851b43c347251529cba53115_prof);

        
        $__internal_b8e0e13013ecfec7280a828793738324b933dfedec77e956f0e0481b8397f5b7->leave($__internal_b8e0e13013ecfec7280a828793738324b933dfedec77e956f0e0481b8397f5b7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_5780ee15f8e859c9681ae5cd4d66f1f9c81448fabf7de04b440ecba1ef4ad85b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5780ee15f8e859c9681ae5cd4d66f1f9c81448fabf7de04b440ecba1ef4ad85b->enter($__internal_5780ee15f8e859c9681ae5cd4d66f1f9c81448fabf7de04b440ecba1ef4ad85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_04815b7660cd16a645234a609bfb21b3ea250bd87abd85b3ea47d8f6d49c05e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04815b7660cd16a645234a609bfb21b3ea250bd87abd85b3ea47d8f6d49c05e9->enter($__internal_04815b7660cd16a645234a609bfb21b3ea250bd87abd85b3ea47d8f6d49c05e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Teacher
";
        
        $__internal_04815b7660cd16a645234a609bfb21b3ea250bd87abd85b3ea47d8f6d49c05e9->leave($__internal_04815b7660cd16a645234a609bfb21b3ea250bd87abd85b3ea47d8f6d49c05e9_prof);

        
        $__internal_5780ee15f8e859c9681ae5cd4d66f1f9c81448fabf7de04b440ecba1ef4ad85b->leave($__internal_5780ee15f8e859c9681ae5cd4d66f1f9c81448fabf7de04b440ecba1ef4ad85b_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_d7bb97954ade1da264deaeb1042e35131899a64e2015f7bf70f4cb8e27875bf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7bb97954ade1da264deaeb1042e35131899a64e2015f7bf70f4cb8e27875bf2->enter($__internal_d7bb97954ade1da264deaeb1042e35131899a64e2015f7bf70f4cb8e27875bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_636c935e1f63dc2908dc501e6cda46ad9a3cbc4225232a715e50092a3d904a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_636c935e1f63dc2908dc501e6cda46ad9a3cbc4225232a715e50092a3d904a6b->enter($__internal_636c935e1f63dc2908dc501e6cda46ad9a3cbc4225232a715e50092a3d904a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_636c935e1f63dc2908dc501e6cda46ad9a3cbc4225232a715e50092a3d904a6b->leave($__internal_636c935e1f63dc2908dc501e6cda46ad9a3cbc4225232a715e50092a3d904a6b_prof);

        
        $__internal_d7bb97954ade1da264deaeb1042e35131899a64e2015f7bf70f4cb8e27875bf2->leave($__internal_d7bb97954ade1da264deaeb1042e35131899a64e2015f7bf70f4cb8e27875bf2_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e067b6de9a68ed1939862333e00f66289aa61c5b8e6022533769b0bea2ccb04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e067b6de9a68ed1939862333e00f66289aa61c5b8e6022533769b0bea2ccb04->enter($__internal_5e067b6de9a68ed1939862333e00f66289aa61c5b8e6022533769b0bea2ccb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa411e25f047f3b71184a7505b04917d1d8356d4db1ed7eff3f402af3ab4abcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa411e25f047f3b71184a7505b04917d1d8356d4db1ed7eff3f402af3ab4abcf->enter($__internal_fa411e25f047f3b71184a7505b04917d1d8356d4db1ed7eff3f402af3ab4abcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\">
    <article class=\"tasks\">
      <div>
        <a href=\"\"><img src=\"images/icons/.png\" draggable=\"false\" /></a>

        <a href=\"\">Schools</a>
      </div>
    </article>
    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_fa411e25f047f3b71184a7505b04917d1d8356d4db1ed7eff3f402af3ab4abcf->leave($__internal_fa411e25f047f3b71184a7505b04917d1d8356d4db1ed7eff3f402af3ab4abcf_prof);

        
        $__internal_5e067b6de9a68ed1939862333e00f66289aa61c5b8e6022533769b0bea2ccb04->leave($__internal_5e067b6de9a68ed1939862333e00f66289aa61c5b8e6022533769b0bea2ccb04_prof);

    }

    public function getTemplateName()
    {
        return ":curriculum:index.html.twig";
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
  Teacher
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container\">
    <article class=\"tasks\">
      <div>
        <a href=\"\"><img src=\"images/icons/.png\" draggable=\"false\" /></a>

        <a href=\"\">Schools</a>
      </div>
    </article>
    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", ":curriculum:index.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/curriculum/index.html.twig");
    }
}
