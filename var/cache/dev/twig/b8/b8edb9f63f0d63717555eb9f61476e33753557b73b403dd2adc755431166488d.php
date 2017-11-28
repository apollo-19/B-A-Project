<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_5fc722d62ca28f285b606fe786535b6a2c11de849e5659f523da67b1533eb6bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a497863961b90d594c9fbbc9c3483113eb1d7c88089ae158090d3d4cfe875d16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a497863961b90d594c9fbbc9c3483113eb1d7c88089ae158090d3d4cfe875d16->enter($__internal_a497863961b90d594c9fbbc9c3483113eb1d7c88089ae158090d3d4cfe875d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_a09d58b80cb81947c0d0fcbff4a43d1dfe0d8afdd4f3bf77a9a7b21216839884 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09d58b80cb81947c0d0fcbff4a43d1dfe0d8afdd4f3bf77a9a7b21216839884->enter($__internal_a09d58b80cb81947c0d0fcbff4a43d1dfe0d8afdd4f3bf77a9a7b21216839884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a497863961b90d594c9fbbc9c3483113eb1d7c88089ae158090d3d4cfe875d16->leave($__internal_a497863961b90d594c9fbbc9c3483113eb1d7c88089ae158090d3d4cfe875d16_prof);

        
        $__internal_a09d58b80cb81947c0d0fcbff4a43d1dfe0d8afdd4f3bf77a9a7b21216839884->leave($__internal_a09d58b80cb81947c0d0fcbff4a43d1dfe0d8afdd4f3bf77a9a7b21216839884_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_69b8661e5747f87fa1d101573170e59643854c2fffff4bc5fdf0a33e2406644c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69b8661e5747f87fa1d101573170e59643854c2fffff4bc5fdf0a33e2406644c->enter($__internal_69b8661e5747f87fa1d101573170e59643854c2fffff4bc5fdf0a33e2406644c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_8bd2f1a51faf19866cbbadab4c4e6e4a2db55d8fd3eae6f618355b30a74f1b7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bd2f1a51faf19866cbbadab4c4e6e4a2db55d8fd3eae6f618355b30a74f1b7a->enter($__internal_8bd2f1a51faf19866cbbadab4c4e6e4a2db55d8fd3eae6f618355b30a74f1b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_8bd2f1a51faf19866cbbadab4c4e6e4a2db55d8fd3eae6f618355b30a74f1b7a->leave($__internal_8bd2f1a51faf19866cbbadab4c4e6e4a2db55d8fd3eae6f618355b30a74f1b7a_prof);

        
        $__internal_69b8661e5747f87fa1d101573170e59643854c2fffff4bc5fdf0a33e2406644c->leave($__internal_69b8661e5747f87fa1d101573170e59643854c2fffff4bc5fdf0a33e2406644c_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0a19baa28c6339a225e369669644530151c3e34537edbae50476cca0626e9d5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a19baa28c6339a225e369669644530151c3e34537edbae50476cca0626e9d5a->enter($__internal_0a19baa28c6339a225e369669644530151c3e34537edbae50476cca0626e9d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_77e57e1bbc7e54ca37121cd96901b8ba8b821cb2e86ab0f46aae73aa044dd00e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77e57e1bbc7e54ca37121cd96901b8ba8b821cb2e86ab0f46aae73aa044dd00e->enter($__internal_77e57e1bbc7e54ca37121cd96901b8ba8b821cb2e86ab0f46aae73aa044dd00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_77e57e1bbc7e54ca37121cd96901b8ba8b821cb2e86ab0f46aae73aa044dd00e->leave($__internal_77e57e1bbc7e54ca37121cd96901b8ba8b821cb2e86ab0f46aae73aa044dd00e_prof);

        
        $__internal_0a19baa28c6339a225e369669644530151c3e34537edbae50476cca0626e9d5a->leave($__internal_0a19baa28c6339a225e369669644530151c3e34537edbae50476cca0626e9d5a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
