<?php

/* :result:index.html.twig */
class __TwigTemplate_df7f2a5c013e346dd79c930599fa8d551c7d79300786a653570c67cf98c524bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":result:index.html.twig", 1);
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
        $__internal_a6d3d5c7feb82ee5f15801cbef71b66b76a154e41be1d56c8e9dedeb51a39d4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6d3d5c7feb82ee5f15801cbef71b66b76a154e41be1d56c8e9dedeb51a39d4d->enter($__internal_a6d3d5c7feb82ee5f15801cbef71b66b76a154e41be1d56c8e9dedeb51a39d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":result:index.html.twig"));

        $__internal_d17a41f70dbfebb00456271229751604c694a205ac857f75396a411919344d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17a41f70dbfebb00456271229751604c694a205ac857f75396a411919344d04->enter($__internal_d17a41f70dbfebb00456271229751604c694a205ac857f75396a411919344d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":result:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6d3d5c7feb82ee5f15801cbef71b66b76a154e41be1d56c8e9dedeb51a39d4d->leave($__internal_a6d3d5c7feb82ee5f15801cbef71b66b76a154e41be1d56c8e9dedeb51a39d4d_prof);

        
        $__internal_d17a41f70dbfebb00456271229751604c694a205ac857f75396a411919344d04->leave($__internal_d17a41f70dbfebb00456271229751604c694a205ac857f75396a411919344d04_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_683cad3ef7042a2975e4b86cd1bd50c29ae269dd8bca2662171c80a1608071e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_683cad3ef7042a2975e4b86cd1bd50c29ae269dd8bca2662171c80a1608071e2->enter($__internal_683cad3ef7042a2975e4b86cd1bd50c29ae269dd8bca2662171c80a1608071e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_89dce95c29cc46d27ca85295eab2eb1a911e2e26279a2a3f5d590c7c8e2b8a93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89dce95c29cc46d27ca85295eab2eb1a911e2e26279a2a3f5d590c7c8e2b8a93->enter($__internal_89dce95c29cc46d27ca85295eab2eb1a911e2e26279a2a3f5d590c7c8e2b8a93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Teacher
";
        
        $__internal_89dce95c29cc46d27ca85295eab2eb1a911e2e26279a2a3f5d590c7c8e2b8a93->leave($__internal_89dce95c29cc46d27ca85295eab2eb1a911e2e26279a2a3f5d590c7c8e2b8a93_prof);

        
        $__internal_683cad3ef7042a2975e4b86cd1bd50c29ae269dd8bca2662171c80a1608071e2->leave($__internal_683cad3ef7042a2975e4b86cd1bd50c29ae269dd8bca2662171c80a1608071e2_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_8a361d8ab60a962c195b5bef4127bb505ca3376ce9ec6420340d88c0f4fca38d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a361d8ab60a962c195b5bef4127bb505ca3376ce9ec6420340d88c0f4fca38d->enter($__internal_8a361d8ab60a962c195b5bef4127bb505ca3376ce9ec6420340d88c0f4fca38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_582547e0e29e91736bd35557d5830904c4dd662846350499e4d3d6f653bd45c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_582547e0e29e91736bd35557d5830904c4dd662846350499e4d3d6f653bd45c6->enter($__internal_582547e0e29e91736bd35557d5830904c4dd662846350499e4d3d6f653bd45c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_582547e0e29e91736bd35557d5830904c4dd662846350499e4d3d6f653bd45c6->leave($__internal_582547e0e29e91736bd35557d5830904c4dd662846350499e4d3d6f653bd45c6_prof);

        
        $__internal_8a361d8ab60a962c195b5bef4127bb505ca3376ce9ec6420340d88c0f4fca38d->leave($__internal_8a361d8ab60a962c195b5bef4127bb505ca3376ce9ec6420340d88c0f4fca38d_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_63c95ce244562a1e117c74d922fb7bd0814847c14c9396dabd2cc135d8a4cf97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63c95ce244562a1e117c74d922fb7bd0814847c14c9396dabd2cc135d8a4cf97->enter($__internal_63c95ce244562a1e117c74d922fb7bd0814847c14c9396dabd2cc135d8a4cf97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7f72729c80f7d8a4ffe885b88d51af6e97e549db2a490479a91e7dd1fcb4d543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f72729c80f7d8a4ffe885b88d51af6e97e549db2a490479a91e7dd1fcb4d543->enter($__internal_7f72729c80f7d8a4ffe885b88d51af6e97e549db2a490479a91e7dd1fcb4d543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7f72729c80f7d8a4ffe885b88d51af6e97e549db2a490479a91e7dd1fcb4d543->leave($__internal_7f72729c80f7d8a4ffe885b88d51af6e97e549db2a490479a91e7dd1fcb4d543_prof);

        
        $__internal_63c95ce244562a1e117c74d922fb7bd0814847c14c9396dabd2cc135d8a4cf97->leave($__internal_63c95ce244562a1e117c74d922fb7bd0814847c14c9396dabd2cc135d8a4cf97_prof);

    }

    public function getTemplateName()
    {
        return ":result:index.html.twig";
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
", ":result:index.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/result/index.html.twig");
    }
}
