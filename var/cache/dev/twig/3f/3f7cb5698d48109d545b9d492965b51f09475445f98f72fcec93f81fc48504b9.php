<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_0c33a369ff4379e84e79ca047a9bd0f8d25a0a2094943a9e180983137ce969ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59e2833b0eb9309e8e8b7348dedac401d64df2c3efbd64f04b4ab6da070a01c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59e2833b0eb9309e8e8b7348dedac401d64df2c3efbd64f04b4ab6da070a01c7->enter($__internal_59e2833b0eb9309e8e8b7348dedac401d64df2c3efbd64f04b4ab6da070a01c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_5170420e750d3a23de97ceaa5f4119711dfa73ca78d8812b66cbed9c545f3410 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5170420e750d3a23de97ceaa5f4119711dfa73ca78d8812b66cbed9c545f3410->enter($__internal_5170420e750d3a23de97ceaa5f4119711dfa73ca78d8812b66cbed9c545f3410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_59e2833b0eb9309e8e8b7348dedac401d64df2c3efbd64f04b4ab6da070a01c7->leave($__internal_59e2833b0eb9309e8e8b7348dedac401d64df2c3efbd64f04b4ab6da070a01c7_prof);

        
        $__internal_5170420e750d3a23de97ceaa5f4119711dfa73ca78d8812b66cbed9c545f3410->leave($__internal_5170420e750d3a23de97ceaa5f4119711dfa73ca78d8812b66cbed9c545f3410_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_33e4058fdd5edbd3b93b44e90be38e2edc09150f40b15303e40f85780bc9cb43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33e4058fdd5edbd3b93b44e90be38e2edc09150f40b15303e40f85780bc9cb43->enter($__internal_33e4058fdd5edbd3b93b44e90be38e2edc09150f40b15303e40f85780bc9cb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f7adf63739baffe13e4dfefc6a59c5a5bfee251e1dc126c292fdc89002b2da24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7adf63739baffe13e4dfefc6a59c5a5bfee251e1dc126c292fdc89002b2da24->enter($__internal_f7adf63739baffe13e4dfefc6a59c5a5bfee251e1dc126c292fdc89002b2da24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f7adf63739baffe13e4dfefc6a59c5a5bfee251e1dc126c292fdc89002b2da24->leave($__internal_f7adf63739baffe13e4dfefc6a59c5a5bfee251e1dc126c292fdc89002b2da24_prof);

        
        $__internal_33e4058fdd5edbd3b93b44e90be38e2edc09150f40b15303e40f85780bc9cb43->leave($__internal_33e4058fdd5edbd3b93b44e90be38e2edc09150f40b15303e40f85780bc9cb43_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_14f3cabfe423185c5c83759eaa769b279468dbeb67cde2feaced2f7f15a1c6da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14f3cabfe423185c5c83759eaa769b279468dbeb67cde2feaced2f7f15a1c6da->enter($__internal_14f3cabfe423185c5c83759eaa769b279468dbeb67cde2feaced2f7f15a1c6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_827578cf144c20c610c1c0d12f82d7ba28af6d9cf292a54fea28dd131481ef6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_827578cf144c20c610c1c0d12f82d7ba28af6d9cf292a54fea28dd131481ef6b->enter($__internal_827578cf144c20c610c1c0d12f82d7ba28af6d9cf292a54fea28dd131481ef6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_827578cf144c20c610c1c0d12f82d7ba28af6d9cf292a54fea28dd131481ef6b->leave($__internal_827578cf144c20c610c1c0d12f82d7ba28af6d9cf292a54fea28dd131481ef6b_prof);

        
        $__internal_14f3cabfe423185c5c83759eaa769b279468dbeb67cde2feaced2f7f15a1c6da->leave($__internal_14f3cabfe423185c5c83759eaa769b279468dbeb67cde2feaced2f7f15a1c6da_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
