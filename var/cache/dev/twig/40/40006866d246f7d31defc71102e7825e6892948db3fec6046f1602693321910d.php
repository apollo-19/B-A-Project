<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_19dfb68d851ddd05e5bd3f446c5cecc8ca30befd0bb86cee9a5c57f648f371d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6cecc9248843d70f785c9ff39f22c20b86f70008b2d3e5f896c2c60e8f4db794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cecc9248843d70f785c9ff39f22c20b86f70008b2d3e5f896c2c60e8f4db794->enter($__internal_6cecc9248843d70f785c9ff39f22c20b86f70008b2d3e5f896c2c60e8f4db794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_1ff60d5155248148e072962e48e69381bdf4c3c17cc6a9caf09be142e52c0581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff60d5155248148e072962e48e69381bdf4c3c17cc6a9caf09be142e52c0581->enter($__internal_1ff60d5155248148e072962e48e69381bdf4c3c17cc6a9caf09be142e52c0581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cecc9248843d70f785c9ff39f22c20b86f70008b2d3e5f896c2c60e8f4db794->leave($__internal_6cecc9248843d70f785c9ff39f22c20b86f70008b2d3e5f896c2c60e8f4db794_prof);

        
        $__internal_1ff60d5155248148e072962e48e69381bdf4c3c17cc6a9caf09be142e52c0581->leave($__internal_1ff60d5155248148e072962e48e69381bdf4c3c17cc6a9caf09be142e52c0581_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_12ac3fbfec25edb77163c8a136b5f2a440206edfec0930a7f1be116133c315d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12ac3fbfec25edb77163c8a136b5f2a440206edfec0930a7f1be116133c315d8->enter($__internal_12ac3fbfec25edb77163c8a136b5f2a440206edfec0930a7f1be116133c315d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_008a6d66a40e81b915082776131a462b19916a9af58282f461e85c7f3d7b605f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_008a6d66a40e81b915082776131a462b19916a9af58282f461e85c7f3d7b605f->enter($__internal_008a6d66a40e81b915082776131a462b19916a9af58282f461e85c7f3d7b605f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_008a6d66a40e81b915082776131a462b19916a9af58282f461e85c7f3d7b605f->leave($__internal_008a6d66a40e81b915082776131a462b19916a9af58282f461e85c7f3d7b605f_prof);

        
        $__internal_12ac3fbfec25edb77163c8a136b5f2a440206edfec0930a7f1be116133c315d8->leave($__internal_12ac3fbfec25edb77163c8a136b5f2a440206edfec0930a7f1be116133c315d8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_432d69452c452fb159c455dbc7ae05ae843e67217a71f943c89800163a0d0147 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_432d69452c452fb159c455dbc7ae05ae843e67217a71f943c89800163a0d0147->enter($__internal_432d69452c452fb159c455dbc7ae05ae843e67217a71f943c89800163a0d0147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c8d57add636360b3471fbd70b1041495fc0775880aec1ffc5b4a9d0d3a5cb938 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8d57add636360b3471fbd70b1041495fc0775880aec1ffc5b4a9d0d3a5cb938->enter($__internal_c8d57add636360b3471fbd70b1041495fc0775880aec1ffc5b4a9d0d3a5cb938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_c8d57add636360b3471fbd70b1041495fc0775880aec1ffc5b4a9d0d3a5cb938->leave($__internal_c8d57add636360b3471fbd70b1041495fc0775880aec1ffc5b4a9d0d3a5cb938_prof);

        
        $__internal_432d69452c452fb159c455dbc7ae05ae843e67217a71f943c89800163a0d0147->leave($__internal_432d69452c452fb159c455dbc7ae05ae843e67217a71f943c89800163a0d0147_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
