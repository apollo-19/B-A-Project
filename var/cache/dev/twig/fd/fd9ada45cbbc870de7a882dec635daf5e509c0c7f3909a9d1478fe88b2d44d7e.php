<?php

/* :prerequisite:index.html.twig */
class __TwigTemplate_960c670198828a69a9afd82bd0b26d113e6ab19dfe1076635cff744b73af137d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":prerequisite:index.html.twig", 1);
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
        $__internal_c98f7a99121228eb2508666433ede1e8d94002c7dbc7dc4ed1248493e9d62425 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c98f7a99121228eb2508666433ede1e8d94002c7dbc7dc4ed1248493e9d62425->enter($__internal_c98f7a99121228eb2508666433ede1e8d94002c7dbc7dc4ed1248493e9d62425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":prerequisite:index.html.twig"));

        $__internal_d315b55e981d88bd7572e31300e890a93b3a4597b6d67260fdc2d63da366f896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d315b55e981d88bd7572e31300e890a93b3a4597b6d67260fdc2d63da366f896->enter($__internal_d315b55e981d88bd7572e31300e890a93b3a4597b6d67260fdc2d63da366f896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":prerequisite:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c98f7a99121228eb2508666433ede1e8d94002c7dbc7dc4ed1248493e9d62425->leave($__internal_c98f7a99121228eb2508666433ede1e8d94002c7dbc7dc4ed1248493e9d62425_prof);

        
        $__internal_d315b55e981d88bd7572e31300e890a93b3a4597b6d67260fdc2d63da366f896->leave($__internal_d315b55e981d88bd7572e31300e890a93b3a4597b6d67260fdc2d63da366f896_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_224d5080cdeb26d4a46aa0f6700fd93d7174764a611b6334fd6132fedf3e6229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_224d5080cdeb26d4a46aa0f6700fd93d7174764a611b6334fd6132fedf3e6229->enter($__internal_224d5080cdeb26d4a46aa0f6700fd93d7174764a611b6334fd6132fedf3e6229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_12d653fa7c73f48bc1ae81feb0b2276c4c32c47de6056b4eff576fb7b8a3224f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12d653fa7c73f48bc1ae81feb0b2276c4c32c47de6056b4eff576fb7b8a3224f->enter($__internal_12d653fa7c73f48bc1ae81feb0b2276c4c32c47de6056b4eff576fb7b8a3224f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Teacher
";
        
        $__internal_12d653fa7c73f48bc1ae81feb0b2276c4c32c47de6056b4eff576fb7b8a3224f->leave($__internal_12d653fa7c73f48bc1ae81feb0b2276c4c32c47de6056b4eff576fb7b8a3224f_prof);

        
        $__internal_224d5080cdeb26d4a46aa0f6700fd93d7174764a611b6334fd6132fedf3e6229->leave($__internal_224d5080cdeb26d4a46aa0f6700fd93d7174764a611b6334fd6132fedf3e6229_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_667d1ce76338992c75b526ddb9a2fd7a4ef1523981d3013ef5b3e9f6565133e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_667d1ce76338992c75b526ddb9a2fd7a4ef1523981d3013ef5b3e9f6565133e8->enter($__internal_667d1ce76338992c75b526ddb9a2fd7a4ef1523981d3013ef5b3e9f6565133e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_270328e60cd965fbd21c9fe821342e21f17e525bb9b3b0e7c2ab348440dd4f9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_270328e60cd965fbd21c9fe821342e21f17e525bb9b3b0e7c2ab348440dd4f9d->enter($__internal_270328e60cd965fbd21c9fe821342e21f17e525bb9b3b0e7c2ab348440dd4f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_270328e60cd965fbd21c9fe821342e21f17e525bb9b3b0e7c2ab348440dd4f9d->leave($__internal_270328e60cd965fbd21c9fe821342e21f17e525bb9b3b0e7c2ab348440dd4f9d_prof);

        
        $__internal_667d1ce76338992c75b526ddb9a2fd7a4ef1523981d3013ef5b3e9f6565133e8->leave($__internal_667d1ce76338992c75b526ddb9a2fd7a4ef1523981d3013ef5b3e9f6565133e8_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4ed495f84cfb9303ce4960c064dac71f24682a8d799dca7f15fa0d585945167 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4ed495f84cfb9303ce4960c064dac71f24682a8d799dca7f15fa0d585945167->enter($__internal_f4ed495f84cfb9303ce4960c064dac71f24682a8d799dca7f15fa0d585945167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_90e047b588d0b102b1980f8f2a577440df7d19d6cff795e10a389b7828d0ab48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90e047b588d0b102b1980f8f2a577440df7d19d6cff795e10a389b7828d0ab48->enter($__internal_90e047b588d0b102b1980f8f2a577440df7d19d6cff795e10a389b7828d0ab48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_90e047b588d0b102b1980f8f2a577440df7d19d6cff795e10a389b7828d0ab48->leave($__internal_90e047b588d0b102b1980f8f2a577440df7d19d6cff795e10a389b7828d0ab48_prof);

        
        $__internal_f4ed495f84cfb9303ce4960c064dac71f24682a8d799dca7f15fa0d585945167->leave($__internal_f4ed495f84cfb9303ce4960c064dac71f24682a8d799dca7f15fa0d585945167_prof);

    }

    public function getTemplateName()
    {
        return ":prerequisite:index.html.twig";
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
", ":prerequisite:index.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/prerequisite/index.html.twig");
    }
}
