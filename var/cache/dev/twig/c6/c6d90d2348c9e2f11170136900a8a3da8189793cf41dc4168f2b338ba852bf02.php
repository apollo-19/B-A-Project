<?php

/* ::delete.html.twig */
class __TwigTemplate_4f405e4266e45c982b3fbe57cf82cbb54c61dd031eb19f39e1016e97a995e3cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::delete.html.twig", 1);
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
        $__internal_8038240d9ab6a2061253a49c26ab0caee75e66b4b5e52cda1673a94482336aed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8038240d9ab6a2061253a49c26ab0caee75e66b4b5e52cda1673a94482336aed->enter($__internal_8038240d9ab6a2061253a49c26ab0caee75e66b4b5e52cda1673a94482336aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::delete.html.twig"));

        $__internal_2ba1ba92ca9cb1df8a02df7918f50d5f71b7a81eef0e3c8df1ab10fad85d3195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba1ba92ca9cb1df8a02df7918f50d5f71b7a81eef0e3c8df1ab10fad85d3195->enter($__internal_2ba1ba92ca9cb1df8a02df7918f50d5f71b7a81eef0e3c8df1ab10fad85d3195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8038240d9ab6a2061253a49c26ab0caee75e66b4b5e52cda1673a94482336aed->leave($__internal_8038240d9ab6a2061253a49c26ab0caee75e66b4b5e52cda1673a94482336aed_prof);

        
        $__internal_2ba1ba92ca9cb1df8a02df7918f50d5f71b7a81eef0e3c8df1ab10fad85d3195->leave($__internal_2ba1ba92ca9cb1df8a02df7918f50d5f71b7a81eef0e3c8df1ab10fad85d3195_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d381902d28fcc95f953df3c841cd353529c72cadf65af9ed5f6bef9607f0ee46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d381902d28fcc95f953df3c841cd353529c72cadf65af9ed5f6bef9607f0ee46->enter($__internal_d381902d28fcc95f953df3c841cd353529c72cadf65af9ed5f6bef9607f0ee46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fc4b0a15a3f1e60bb751fb0457923688d6688f0589c951b69d0dd4d4fb0060eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc4b0a15a3f1e60bb751fb0457923688d6688f0589c951b69d0dd4d4fb0060eb->enter($__internal_fc4b0a15a3f1e60bb751fb0457923688d6688f0589c951b69d0dd4d4fb0060eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Teacher Register
";
        
        $__internal_fc4b0a15a3f1e60bb751fb0457923688d6688f0589c951b69d0dd4d4fb0060eb->leave($__internal_fc4b0a15a3f1e60bb751fb0457923688d6688f0589c951b69d0dd4d4fb0060eb_prof);

        
        $__internal_d381902d28fcc95f953df3c841cd353529c72cadf65af9ed5f6bef9607f0ee46->leave($__internal_d381902d28fcc95f953df3c841cd353529c72cadf65af9ed5f6bef9607f0ee46_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_a2eea366e24d8d49c4dba7b87fe820e070aff06d09435b579aca8d8f52417cf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2eea366e24d8d49c4dba7b87fe820e070aff06d09435b579aca8d8f52417cf2->enter($__internal_a2eea366e24d8d49c4dba7b87fe820e070aff06d09435b579aca8d8f52417cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_1d3a69521c2b6c2221aff6b0189530bd34aaeb8a3ab538776c422104efaef7bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d3a69521c2b6c2221aff6b0189530bd34aaeb8a3ab538776c422104efaef7bf->enter($__internal_1d3a69521c2b6c2221aff6b0189530bd34aaeb8a3ab538776c422104efaef7bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>
.form {
  border: 1px solid #FF0000;
  width: 100%;
}

h1 {
  font-size: 25px;
  color:#FF0000;
  padding: 20px;
  width: auto;
}

button[name=yes] {
  background-color: #E00;
  border: 1px solid #FF0000;
}

button[name=yes]:hover {
  background-color: #F00;
  border-color: #F00;
}

button[name=no] {
  background-color: #F5F5F5;
  border: 1px solid #F5F5F5;
}

button[name=no]:hover {
  background-color: #F5F5F5;
  border-color: #000;
  color: #000;
}
</style>
";
        
        $__internal_1d3a69521c2b6c2221aff6b0189530bd34aaeb8a3ab538776c422104efaef7bf->leave($__internal_1d3a69521c2b6c2221aff6b0189530bd34aaeb8a3ab538776c422104efaef7bf_prof);

        
        $__internal_a2eea366e24d8d49c4dba7b87fe820e070aff06d09435b579aca8d8f52417cf2->leave($__internal_a2eea366e24d8d49c4dba7b87fe820e070aff06d09435b579aca8d8f52417cf2_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_a3c1774b099bf80b1a71e3afaad4c8f0d2c56804e8e70e857ffa65c5047b00ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3c1774b099bf80b1a71e3afaad4c8f0d2c56804e8e70e857ffa65c5047b00ad->enter($__internal_a3c1774b099bf80b1a71e3afaad4c8f0d2c56804e8e70e857ffa65c5047b00ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e81af7598328fe6e7854d5b26d574a084577e07fbb17c660fab71925b0ff2d69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e81af7598328fe6e7854d5b26d574a084577e07fbb17c660fab71925b0ff2d69->enter($__internal_e81af7598328fe6e7854d5b26d574a084577e07fbb17c660fab71925b0ff2d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1>";
        // line 46
        echo twig_escape_filter($this->env, ($context["warningMessage"] ?? $this->getContext($context, "warningMessage")), "html", null, true);
        echo "</h1>
      <button name=\"yes\">Delete</button>
      <button name=\"no\">No</button>
    </form>
    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_e81af7598328fe6e7854d5b26d574a084577e07fbb17c660fab71925b0ff2d69->leave($__internal_e81af7598328fe6e7854d5b26d574a084577e07fbb17c660fab71925b0ff2d69_prof);

        
        $__internal_a3c1774b099bf80b1a71e3afaad4c8f0d2c56804e8e70e857ffa65c5047b00ad->leave($__internal_a3c1774b099bf80b1a71e3afaad4c8f0d2c56804e8e70e857ffa65c5047b00ad_prof);

    }

    public function getTemplateName()
    {
        return "::delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 46,  124 => 44,  115 => 43,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  Teacher Register
{% endblock %}

{% block stylesheet %}
<style>
.form {
  border: 1px solid #FF0000;
  width: 100%;
}

h1 {
  font-size: 25px;
  color:#FF0000;
  padding: 20px;
  width: auto;
}

button[name=yes] {
  background-color: #E00;
  border: 1px solid #FF0000;
}

button[name=yes]:hover {
  background-color: #F00;
  border-color: #F00;
}

button[name=no] {
  background-color: #F5F5F5;
  border: 1px solid #F5F5F5;
}

button[name=no]:hover {
  background-color: #F5F5F5;
  border-color: #000;
  color: #000;
}
</style>
{% endblock %}

{% block body %}
  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1>{{ warningMessage }}</h1>
      <button name=\"yes\">Delete</button>
      <button name=\"no\">No</button>
    </form>
    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", "::delete.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/delete.html.twig");
    }
}
