<?php

/* :school:form.html.twig */
class __TwigTemplate_e5c2be6258ae8551a49b54715f88fbb3b9c69da20d9c2672dd20a814ce555e01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":school:form.html.twig", 1);
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
        $__internal_a0e6dec161e1c700d246ebada773248e8b435ed2081161b0f37f623a63581f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0e6dec161e1c700d246ebada773248e8b435ed2081161b0f37f623a63581f44->enter($__internal_a0e6dec161e1c700d246ebada773248e8b435ed2081161b0f37f623a63581f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":school:form.html.twig"));

        $__internal_0f0f10db555d3499fe6f4015f38da6a1689a8d38ff4d2396d4a5dd77b84207e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f0f10db555d3499fe6f4015f38da6a1689a8d38ff4d2396d4a5dd77b84207e0->enter($__internal_0f0f10db555d3499fe6f4015f38da6a1689a8d38ff4d2396d4a5dd77b84207e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":school:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0e6dec161e1c700d246ebada773248e8b435ed2081161b0f37f623a63581f44->leave($__internal_a0e6dec161e1c700d246ebada773248e8b435ed2081161b0f37f623a63581f44_prof);

        
        $__internal_0f0f10db555d3499fe6f4015f38da6a1689a8d38ff4d2396d4a5dd77b84207e0->leave($__internal_0f0f10db555d3499fe6f4015f38da6a1689a8d38ff4d2396d4a5dd77b84207e0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_0b10a0f7c28312c16d1babadc697d72b273c6e7f73159dc345fdf210c86f0f33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b10a0f7c28312c16d1babadc697d72b273c6e7f73159dc345fdf210c86f0f33->enter($__internal_0b10a0f7c28312c16d1babadc697d72b273c6e7f73159dc345fdf210c86f0f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b213a326d198e5b7ea781ee5bb18db25e08c2673e418755ee15c4c85d626b656 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b213a326d198e5b7ea781ee5bb18db25e08c2673e418755ee15c4c85d626b656->enter($__internal_b213a326d198e5b7ea781ee5bb18db25e08c2673e418755ee15c4c85d626b656_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New School") : ("Edit School"));
        echo "
";
        
        $__internal_b213a326d198e5b7ea781ee5bb18db25e08c2673e418755ee15c4c85d626b656->leave($__internal_b213a326d198e5b7ea781ee5bb18db25e08c2673e418755ee15c4c85d626b656_prof);

        
        $__internal_0b10a0f7c28312c16d1babadc697d72b273c6e7f73159dc345fdf210c86f0f33->leave($__internal_0b10a0f7c28312c16d1babadc697d72b273c6e7f73159dc345fdf210c86f0f33_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_a0632428aa66d2644ab7157df548e25ee653e91c8704fcb0d6008f60f652cfe7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0632428aa66d2644ab7157df548e25ee653e91c8704fcb0d6008f60f652cfe7->enter($__internal_a0632428aa66d2644ab7157df548e25ee653e91c8704fcb0d6008f60f652cfe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_b6cf93ec7654fc82e8662e1f3242f1ba6a998a3d2d2ef4774ab9e50a35b7b3cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6cf93ec7654fc82e8662e1f3242f1ba6a998a3d2d2ef4774ab9e50a35b7b3cc->enter($__internal_b6cf93ec7654fc82e8662e1f3242f1ba6a998a3d2d2ef4774ab9e50a35b7b3cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_b6cf93ec7654fc82e8662e1f3242f1ba6a998a3d2d2ef4774ab9e50a35b7b3cc->leave($__internal_b6cf93ec7654fc82e8662e1f3242f1ba6a998a3d2d2ef4774ab9e50a35b7b3cc_prof);

        
        $__internal_a0632428aa66d2644ab7157df548e25ee653e91c8704fcb0d6008f60f652cfe7->leave($__internal_a0632428aa66d2644ab7157df548e25ee653e91c8704fcb0d6008f60f652cfe7_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_d2392b0b99e484a558f6329e606d28bb3e5f39e9a0e1b08ba99421254722c5eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2392b0b99e484a558f6329e606d28bb3e5f39e9a0e1b08ba99421254722c5eb->enter($__internal_d2392b0b99e484a558f6329e606d28bb3e5f39e9a0e1b08ba99421254722c5eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aac528d15c2e7b258781a979482f4ceb81bedb504c7ca1caa51129efc7f2dcbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aac528d15c2e7b258781a979482f4ceb81bedb504c7ca1caa51129efc7f2dcbf->enter($__internal_aac528d15c2e7b258781a979482f4ceb81bedb504c7ca1caa51129efc7f2dcbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New School") : ("Edit School"));
        echo "</h1>
      <h2>";
        // line 16
        echo twig_escape_filter($this->env, ((array_key_exists("result_message", $context)) ? (($context["result_message"] ?? $this->getContext($context, "result_message"))) : ("")), "html", null, true);
        echo "</h2>

      <label for=\"form[first_name]\">School Code</label>
      <input type=\"text\" name=\"form[school_code]\" placeholder=\"MD1221\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "school_code", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "school_code", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[middle_name]\">School Name</label>
      <input type=\"text\" name=\"form[school_name]\" placeholder=\"School of Medicine\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "school_name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "school_name", array())) : ("")), "html", null, true);
        echo "\" required />

      <button>";
        // line 24
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Create School") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_aac528d15c2e7b258781a979482f4ceb81bedb504c7ca1caa51129efc7f2dcbf->leave($__internal_aac528d15c2e7b258781a979482f4ceb81bedb504c7ca1caa51129efc7f2dcbf_prof);

        
        $__internal_d2392b0b99e484a558f6329e606d28bb3e5f39e9a0e1b08ba99421254722c5eb->leave($__internal_d2392b0b99e484a558f6329e606d28bb3e5f39e9a0e1b08ba99421254722c5eb_prof);

    }

    public function getTemplateName()
    {
        return ":school:form.html.twig";
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
  {{ (mode == 'new') ? 'New School' : 'Edit School' }}
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">{{ (mode == 'new') ? 'New School' : 'Edit School' }}</h1>
      <h2>{{ result_message is defined ? result_message : '' }}</h2>

      <label for=\"form[first_name]\">School Code</label>
      <input type=\"text\" name=\"form[school_code]\" placeholder=\"MD1221\" value=\"{{ form.school_code is defined ? form.school_code : '' }}\" required />

      <label for=\"form[middle_name]\">School Name</label>
      <input type=\"text\" name=\"form[school_name]\" placeholder=\"School of Medicine\" value=\"{{ form.school_name is defined ? form.school_name : '' }}\" required />

      <button>{{ (mode == 'new') ? 'Create School' : 'Save Changes' }}</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", ":school:form.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/school/form.html.twig");
    }
}
