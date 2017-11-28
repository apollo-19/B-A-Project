<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_cf162f25fa3b6f82cee69ba6f883fb7c82621dcf246f7c18429b115a3511835f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3857236699e4768d8c04b9d5fc8506ccdbf404fc20b2e47d45b7e85286a543e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3857236699e4768d8c04b9d5fc8506ccdbf404fc20b2e47d45b7e85286a543e->enter($__internal_a3857236699e4768d8c04b9d5fc8506ccdbf404fc20b2e47d45b7e85286a543e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_08656149706bc55d4ff29d2200292a96759532f1de90d27061f31171dc1e838c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08656149706bc55d4ff29d2200292a96759532f1de90d27061f31171dc1e838c->enter($__internal_08656149706bc55d4ff29d2200292a96759532f1de90d27061f31171dc1e838c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3857236699e4768d8c04b9d5fc8506ccdbf404fc20b2e47d45b7e85286a543e->leave($__internal_a3857236699e4768d8c04b9d5fc8506ccdbf404fc20b2e47d45b7e85286a543e_prof);

        
        $__internal_08656149706bc55d4ff29d2200292a96759532f1de90d27061f31171dc1e838c->leave($__internal_08656149706bc55d4ff29d2200292a96759532f1de90d27061f31171dc1e838c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d1f5497ac378f81b7648ea5d80edbf331e0fc199eba0e75662643e2412a35cff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1f5497ac378f81b7648ea5d80edbf331e0fc199eba0e75662643e2412a35cff->enter($__internal_d1f5497ac378f81b7648ea5d80edbf331e0fc199eba0e75662643e2412a35cff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_84f9b05f76d1e30e03798fc3a482df363c29ff5b56540490f3ac1ce14a9a64e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84f9b05f76d1e30e03798fc3a482df363c29ff5b56540490f3ac1ce14a9a64e1->enter($__internal_84f9b05f76d1e30e03798fc3a482df363c29ff5b56540490f3ac1ce14a9a64e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_84f9b05f76d1e30e03798fc3a482df363c29ff5b56540490f3ac1ce14a9a64e1->leave($__internal_84f9b05f76d1e30e03798fc3a482df363c29ff5b56540490f3ac1ce14a9a64e1_prof);

        
        $__internal_d1f5497ac378f81b7648ea5d80edbf331e0fc199eba0e75662643e2412a35cff->leave($__internal_d1f5497ac378f81b7648ea5d80edbf331e0fc199eba0e75662643e2412a35cff_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b3b982d6db03beaf182642502dc74a656757096729225282b6831a4e63fd3b93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3b982d6db03beaf182642502dc74a656757096729225282b6831a4e63fd3b93->enter($__internal_b3b982d6db03beaf182642502dc74a656757096729225282b6831a4e63fd3b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d5e3cf9c747e2e83bcfed284f1a47145335269fb7c1ffaab2377292d7d29ed93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e3cf9c747e2e83bcfed284f1a47145335269fb7c1ffaab2377292d7d29ed93->enter($__internal_d5e3cf9c747e2e83bcfed284f1a47145335269fb7c1ffaab2377292d7d29ed93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d5e3cf9c747e2e83bcfed284f1a47145335269fb7c1ffaab2377292d7d29ed93->leave($__internal_d5e3cf9c747e2e83bcfed284f1a47145335269fb7c1ffaab2377292d7d29ed93_prof);

        
        $__internal_b3b982d6db03beaf182642502dc74a656757096729225282b6831a4e63fd3b93->leave($__internal_b3b982d6db03beaf182642502dc74a656757096729225282b6831a4e63fd3b93_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1810730979bdee36ec6cee39cc0021e9fb0779f56fe0655595d5977dc9220e8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1810730979bdee36ec6cee39cc0021e9fb0779f56fe0655595d5977dc9220e8c->enter($__internal_1810730979bdee36ec6cee39cc0021e9fb0779f56fe0655595d5977dc9220e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_39ab7eef90efd2a1881231102f7108f91e90edcf37e3eae4d89a3212d5d7003c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39ab7eef90efd2a1881231102f7108f91e90edcf37e3eae4d89a3212d5d7003c->enter($__internal_39ab7eef90efd2a1881231102f7108f91e90edcf37e3eae4d89a3212d5d7003c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_39ab7eef90efd2a1881231102f7108f91e90edcf37e3eae4d89a3212d5d7003c->leave($__internal_39ab7eef90efd2a1881231102f7108f91e90edcf37e3eae4d89a3212d5d7003c_prof);

        
        $__internal_1810730979bdee36ec6cee39cc0021e9fb0779f56fe0655595d5977dc9220e8c->leave($__internal_1810730979bdee36ec6cee39cc0021e9fb0779f56fe0655595d5977dc9220e8c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
