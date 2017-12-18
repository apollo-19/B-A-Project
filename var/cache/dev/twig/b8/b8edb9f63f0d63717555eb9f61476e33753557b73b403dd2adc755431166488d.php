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
        $__internal_6d4cbc2df31a881d5ff9c77b52a9b77b334544cf7171d7e4dca6e1d94c108735 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d4cbc2df31a881d5ff9c77b52a9b77b334544cf7171d7e4dca6e1d94c108735->enter($__internal_6d4cbc2df31a881d5ff9c77b52a9b77b334544cf7171d7e4dca6e1d94c108735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_ae4cdb95c6b902f9b7d00e2114d263d55944518de3ef066fefa21dce46aeef21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae4cdb95c6b902f9b7d00e2114d263d55944518de3ef066fefa21dce46aeef21->enter($__internal_ae4cdb95c6b902f9b7d00e2114d263d55944518de3ef066fefa21dce46aeef21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d4cbc2df31a881d5ff9c77b52a9b77b334544cf7171d7e4dca6e1d94c108735->leave($__internal_6d4cbc2df31a881d5ff9c77b52a9b77b334544cf7171d7e4dca6e1d94c108735_prof);

        
        $__internal_ae4cdb95c6b902f9b7d00e2114d263d55944518de3ef066fefa21dce46aeef21->leave($__internal_ae4cdb95c6b902f9b7d00e2114d263d55944518de3ef066fefa21dce46aeef21_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_0dfaacbefe085ead25c25931a45c1659d4049452ebe21aaca9ba19265ef4dd63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dfaacbefe085ead25c25931a45c1659d4049452ebe21aaca9ba19265ef4dd63->enter($__internal_0dfaacbefe085ead25c25931a45c1659d4049452ebe21aaca9ba19265ef4dd63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_1480b9a75443bd2c4b79e95e22156e0386c915fa3cfe0c3cee9aebc0c0aa97ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1480b9a75443bd2c4b79e95e22156e0386c915fa3cfe0c3cee9aebc0c0aa97ad->enter($__internal_1480b9a75443bd2c4b79e95e22156e0386c915fa3cfe0c3cee9aebc0c0aa97ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_1480b9a75443bd2c4b79e95e22156e0386c915fa3cfe0c3cee9aebc0c0aa97ad->leave($__internal_1480b9a75443bd2c4b79e95e22156e0386c915fa3cfe0c3cee9aebc0c0aa97ad_prof);

        
        $__internal_0dfaacbefe085ead25c25931a45c1659d4049452ebe21aaca9ba19265ef4dd63->leave($__internal_0dfaacbefe085ead25c25931a45c1659d4049452ebe21aaca9ba19265ef4dd63_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_408bb1e7f6c178b08bef16ef37c68e43db4efd2469837a084d3ea76cad1b929c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408bb1e7f6c178b08bef16ef37c68e43db4efd2469837a084d3ea76cad1b929c->enter($__internal_408bb1e7f6c178b08bef16ef37c68e43db4efd2469837a084d3ea76cad1b929c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_45470143c383ff29d150501bea7d6692f1049d8be73481ab4a34a81129bf279d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45470143c383ff29d150501bea7d6692f1049d8be73481ab4a34a81129bf279d->enter($__internal_45470143c383ff29d150501bea7d6692f1049d8be73481ab4a34a81129bf279d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_45470143c383ff29d150501bea7d6692f1049d8be73481ab4a34a81129bf279d->leave($__internal_45470143c383ff29d150501bea7d6692f1049d8be73481ab4a34a81129bf279d_prof);

        
        $__internal_408bb1e7f6c178b08bef16ef37c68e43db4efd2469837a084d3ea76cad1b929c->leave($__internal_408bb1e7f6c178b08bef16ef37c68e43db4efd2469837a084d3ea76cad1b929c_prof);

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
", "WebProfilerBundle:Profiler:info.html.twig", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
