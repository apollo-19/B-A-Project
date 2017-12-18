<?php

/* :grade_system:form.html.twig */
class __TwigTemplate_d417e3f507bead52efb93cac1e2c6e263a92997f78a40b20ef6bfd2f20fc8df4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":grade_system:form.html.twig", 1);
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
        $__internal_f731b91a7cc86a1255359163c1ddec629535ea2f441ff9c24c9dde7f09f8bb8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f731b91a7cc86a1255359163c1ddec629535ea2f441ff9c24c9dde7f09f8bb8f->enter($__internal_f731b91a7cc86a1255359163c1ddec629535ea2f441ff9c24c9dde7f09f8bb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":grade_system:form.html.twig"));

        $__internal_ea96f9737f980024429144bdaad1935525a92cd808d22f0d58d3a007ec041fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea96f9737f980024429144bdaad1935525a92cd808d22f0d58d3a007ec041fa5->enter($__internal_ea96f9737f980024429144bdaad1935525a92cd808d22f0d58d3a007ec041fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":grade_system:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f731b91a7cc86a1255359163c1ddec629535ea2f441ff9c24c9dde7f09f8bb8f->leave($__internal_f731b91a7cc86a1255359163c1ddec629535ea2f441ff9c24c9dde7f09f8bb8f_prof);

        
        $__internal_ea96f9737f980024429144bdaad1935525a92cd808d22f0d58d3a007ec041fa5->leave($__internal_ea96f9737f980024429144bdaad1935525a92cd808d22f0d58d3a007ec041fa5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f4209ab0611c559cf46bf98f6f3424fbec5f45bf8a7edfc73ec0c42c9cb359bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4209ab0611c559cf46bf98f6f3424fbec5f45bf8a7edfc73ec0c42c9cb359bf->enter($__internal_f4209ab0611c559cf46bf98f6f3424fbec5f45bf8a7edfc73ec0c42c9cb359bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_989923ffe3fad28aef4a5eea25d0142428bfb80ad75135e3004798fb7e7ca893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_989923ffe3fad28aef4a5eea25d0142428bfb80ad75135e3004798fb7e7ca893->enter($__internal_989923ffe3fad28aef4a5eea25d0142428bfb80ad75135e3004798fb7e7ca893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Grade System") : ("Edit Grade System"));
        echo "
";
        
        $__internal_989923ffe3fad28aef4a5eea25d0142428bfb80ad75135e3004798fb7e7ca893->leave($__internal_989923ffe3fad28aef4a5eea25d0142428bfb80ad75135e3004798fb7e7ca893_prof);

        
        $__internal_f4209ab0611c559cf46bf98f6f3424fbec5f45bf8a7edfc73ec0c42c9cb359bf->leave($__internal_f4209ab0611c559cf46bf98f6f3424fbec5f45bf8a7edfc73ec0c42c9cb359bf_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_68cfb9db7e785cf646ea164061a5ad600737f52a6723ed45fb0dfd845148b242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68cfb9db7e785cf646ea164061a5ad600737f52a6723ed45fb0dfd845148b242->enter($__internal_68cfb9db7e785cf646ea164061a5ad600737f52a6723ed45fb0dfd845148b242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_dc02e1641c6048a4b27a355974d36e2a53d9b91981fe170fbf34a0a70842afeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc02e1641c6048a4b27a355974d36e2a53d9b91981fe170fbf34a0a70842afeb->enter($__internal_dc02e1641c6048a4b27a355974d36e2a53d9b91981fe170fbf34a0a70842afeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_dc02e1641c6048a4b27a355974d36e2a53d9b91981fe170fbf34a0a70842afeb->leave($__internal_dc02e1641c6048a4b27a355974d36e2a53d9b91981fe170fbf34a0a70842afeb_prof);

        
        $__internal_68cfb9db7e785cf646ea164061a5ad600737f52a6723ed45fb0dfd845148b242->leave($__internal_68cfb9db7e785cf646ea164061a5ad600737f52a6723ed45fb0dfd845148b242_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_da408a88f7b2db8656eb5f08bd979d60bec183136136ff41c417964d4447ff6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da408a88f7b2db8656eb5f08bd979d60bec183136136ff41c417964d4447ff6b->enter($__internal_da408a88f7b2db8656eb5f08bd979d60bec183136136ff41c417964d4447ff6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7d7b1eb0d01cfbc967c27529657f3f8e8d376bcc68f7c5b5875f98c6268e0787 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d7b1eb0d01cfbc967c27529657f3f8e8d376bcc68f7c5b5875f98c6268e0787->enter($__internal_7d7b1eb0d01cfbc967c27529657f3f8e8d376bcc68f7c5b5875f98c6268e0787_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Grade System") : ("Edit Grade System"));
        echo "</h1>
      <h2>";
        // line 16
        echo twig_escape_filter($this->env, ((array_key_exists("result_message", $context)) ? (($context["result_message"] ?? $this->getContext($context, "result_message"))) : ("")), "html", null, true);
        echo "</h2>

      <label for=\"form[grade_system_code]\">Grade System Code</label>
      <input type=\"text\" name=\"form[grade_system_code]\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "grade_system_code", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "grade_system_code", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[grade_system_name]\">Grade System Name</label>
      <input type=\"text\" name=\"form[grade_system_name]\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "grade_system_name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "grade_system_name", array())) : ("")), "html", null, true);
        echo "\" required />

      <button>";
        // line 24
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Create Grade System") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_7d7b1eb0d01cfbc967c27529657f3f8e8d376bcc68f7c5b5875f98c6268e0787->leave($__internal_7d7b1eb0d01cfbc967c27529657f3f8e8d376bcc68f7c5b5875f98c6268e0787_prof);

        
        $__internal_da408a88f7b2db8656eb5f08bd979d60bec183136136ff41c417964d4447ff6b->leave($__internal_da408a88f7b2db8656eb5f08bd979d60bec183136136ff41c417964d4447ff6b_prof);

    }

    public function getTemplateName()
    {
        return ":grade_system:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 24,  115 => 22,  109 => 19,  103 => 16,  99 => 15,  95 => 13,  86 => 12,  73 => 7,  64 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  {{ (mode == 'new') ? 'New Grade System' : 'Edit Grade System' }}
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">{{ (mode == 'new') ? 'New Grade System' : 'Edit Grade System' }}</h1>
      <h2>{{ result_message is defined ? result_message : '' }}</h2>

      <label for=\"form[grade_system_code]\">Grade System Code</label>
      <input type=\"text\" name=\"form[grade_system_code]\" value=\"{{ form.grade_system_code is defined ? form.grade_system_code : '' }}\" required />

      <label for=\"form[grade_system_name]\">Grade System Name</label>
      <input type=\"text\" name=\"form[grade_system_name]\" value=\"{{ form.grade_system_name is defined ? form.grade_system_name : '' }}\" required />

      <button>{{ (mode == 'new') ? 'Create Grade System' : 'Save Changes' }}</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", ":grade_system:form.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/grade_system/form.html.twig");
    }
}
