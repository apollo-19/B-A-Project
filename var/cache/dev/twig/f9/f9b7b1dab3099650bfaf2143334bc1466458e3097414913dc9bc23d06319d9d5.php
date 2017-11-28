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
        $__internal_168d87ea782b36645a782709e7c24e11783c871868a8c0db6c81f0c47a8a1413 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_168d87ea782b36645a782709e7c24e11783c871868a8c0db6c81f0c47a8a1413->enter($__internal_168d87ea782b36645a782709e7c24e11783c871868a8c0db6c81f0c47a8a1413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":curriculum:index.html.twig"));

        $__internal_d6a41691abf4de7fa864749bd9e5fa38cb5a41194f2902ad00ce24a0670b29c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6a41691abf4de7fa864749bd9e5fa38cb5a41194f2902ad00ce24a0670b29c8->enter($__internal_d6a41691abf4de7fa864749bd9e5fa38cb5a41194f2902ad00ce24a0670b29c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":curriculum:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_168d87ea782b36645a782709e7c24e11783c871868a8c0db6c81f0c47a8a1413->leave($__internal_168d87ea782b36645a782709e7c24e11783c871868a8c0db6c81f0c47a8a1413_prof);

        
        $__internal_d6a41691abf4de7fa864749bd9e5fa38cb5a41194f2902ad00ce24a0670b29c8->leave($__internal_d6a41691abf4de7fa864749bd9e5fa38cb5a41194f2902ad00ce24a0670b29c8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b58307926e2b43c718e4dd0c5b1ff74ddda73b920666cd3fa8e0aba7fc0298f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b58307926e2b43c718e4dd0c5b1ff74ddda73b920666cd3fa8e0aba7fc0298f->enter($__internal_6b58307926e2b43c718e4dd0c5b1ff74ddda73b920666cd3fa8e0aba7fc0298f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7e36e376fa599ab7d4eff6f944ba7b7dab965b3290074bc4d42cf97e69393563 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e36e376fa599ab7d4eff6f944ba7b7dab965b3290074bc4d42cf97e69393563->enter($__internal_7e36e376fa599ab7d4eff6f944ba7b7dab965b3290074bc4d42cf97e69393563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Teacher
";
        
        $__internal_7e36e376fa599ab7d4eff6f944ba7b7dab965b3290074bc4d42cf97e69393563->leave($__internal_7e36e376fa599ab7d4eff6f944ba7b7dab965b3290074bc4d42cf97e69393563_prof);

        
        $__internal_6b58307926e2b43c718e4dd0c5b1ff74ddda73b920666cd3fa8e0aba7fc0298f->leave($__internal_6b58307926e2b43c718e4dd0c5b1ff74ddda73b920666cd3fa8e0aba7fc0298f_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_30666a3e624e42523a18f83d534260499b2ad78e6bd3245f52fc375bb91b83ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30666a3e624e42523a18f83d534260499b2ad78e6bd3245f52fc375bb91b83ad->enter($__internal_30666a3e624e42523a18f83d534260499b2ad78e6bd3245f52fc375bb91b83ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_f63a63324d046a15b7fb0288dc3fb9052d21b1df05dd33d590d4530bc5c47d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f63a63324d046a15b7fb0288dc3fb9052d21b1df05dd33d590d4530bc5c47d03->enter($__internal_f63a63324d046a15b7fb0288dc3fb9052d21b1df05dd33d590d4530bc5c47d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_f63a63324d046a15b7fb0288dc3fb9052d21b1df05dd33d590d4530bc5c47d03->leave($__internal_f63a63324d046a15b7fb0288dc3fb9052d21b1df05dd33d590d4530bc5c47d03_prof);

        
        $__internal_30666a3e624e42523a18f83d534260499b2ad78e6bd3245f52fc375bb91b83ad->leave($__internal_30666a3e624e42523a18f83d534260499b2ad78e6bd3245f52fc375bb91b83ad_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_7da683a2b58013df35ef6ec88e5eb9c8e8145553a098fc73a16cc9faf6cefefe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7da683a2b58013df35ef6ec88e5eb9c8e8145553a098fc73a16cc9faf6cefefe->enter($__internal_7da683a2b58013df35ef6ec88e5eb9c8e8145553a098fc73a16cc9faf6cefefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_93f1502471631fe4dabba67d910468d4574e39de8f9277b45628bc1fb8a95150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93f1502471631fe4dabba67d910468d4574e39de8f9277b45628bc1fb8a95150->enter($__internal_93f1502471631fe4dabba67d910468d4574e39de8f9277b45628bc1fb8a95150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_93f1502471631fe4dabba67d910468d4574e39de8f9277b45628bc1fb8a95150->leave($__internal_93f1502471631fe4dabba67d910468d4574e39de8f9277b45628bc1fb8a95150_prof);

        
        $__internal_7da683a2b58013df35ef6ec88e5eb9c8e8145553a098fc73a16cc9faf6cefefe->leave($__internal_7da683a2b58013df35ef6ec88e5eb9c8e8145553a098fc73a16cc9faf6cefefe_prof);

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
", ":curriculum:index.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/curriculum/index.html.twig");
    }
}
