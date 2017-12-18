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
        $__internal_02db06beb181cd694ecadd8b0862a279c42e075a400ba99d74a82176a5aaee7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02db06beb181cd694ecadd8b0862a279c42e075a400ba99d74a82176a5aaee7c->enter($__internal_02db06beb181cd694ecadd8b0862a279c42e075a400ba99d74a82176a5aaee7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_0ff571ff46f47ad6f4fcb79e1c17c9f8dc025687a9f3ae8a535307b09b433273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff571ff46f47ad6f4fcb79e1c17c9f8dc025687a9f3ae8a535307b09b433273->enter($__internal_0ff571ff46f47ad6f4fcb79e1c17c9f8dc025687a9f3ae8a535307b09b433273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02db06beb181cd694ecadd8b0862a279c42e075a400ba99d74a82176a5aaee7c->leave($__internal_02db06beb181cd694ecadd8b0862a279c42e075a400ba99d74a82176a5aaee7c_prof);

        
        $__internal_0ff571ff46f47ad6f4fcb79e1c17c9f8dc025687a9f3ae8a535307b09b433273->leave($__internal_0ff571ff46f47ad6f4fcb79e1c17c9f8dc025687a9f3ae8a535307b09b433273_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e260d933ece76584048b28ae89faa2bf73dee9f2c6ac143f7797b77cb510701d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e260d933ece76584048b28ae89faa2bf73dee9f2c6ac143f7797b77cb510701d->enter($__internal_e260d933ece76584048b28ae89faa2bf73dee9f2c6ac143f7797b77cb510701d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f6ce62b6d7072dfe7b570956f9178e233fa70d4f8b6e25bcff59b4f264fd90f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ce62b6d7072dfe7b570956f9178e233fa70d4f8b6e25bcff59b4f264fd90f2->enter($__internal_f6ce62b6d7072dfe7b570956f9178e233fa70d4f8b6e25bcff59b4f264fd90f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_f6ce62b6d7072dfe7b570956f9178e233fa70d4f8b6e25bcff59b4f264fd90f2->leave($__internal_f6ce62b6d7072dfe7b570956f9178e233fa70d4f8b6e25bcff59b4f264fd90f2_prof);

        
        $__internal_e260d933ece76584048b28ae89faa2bf73dee9f2c6ac143f7797b77cb510701d->leave($__internal_e260d933ece76584048b28ae89faa2bf73dee9f2c6ac143f7797b77cb510701d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_91caf7c4753d0dd02a86414e557e9275bd0bbd0187694a85371d130e32e13cf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91caf7c4753d0dd02a86414e557e9275bd0bbd0187694a85371d130e32e13cf0->enter($__internal_91caf7c4753d0dd02a86414e557e9275bd0bbd0187694a85371d130e32e13cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d368b405db60b2a5a08da778172fc96256ee1425cf3325fae896f0ce7c9a158 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d368b405db60b2a5a08da778172fc96256ee1425cf3325fae896f0ce7c9a158->enter($__internal_3d368b405db60b2a5a08da778172fc96256ee1425cf3325fae896f0ce7c9a158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3d368b405db60b2a5a08da778172fc96256ee1425cf3325fae896f0ce7c9a158->leave($__internal_3d368b405db60b2a5a08da778172fc96256ee1425cf3325fae896f0ce7c9a158_prof);

        
        $__internal_91caf7c4753d0dd02a86414e557e9275bd0bbd0187694a85371d130e32e13cf0->leave($__internal_91caf7c4753d0dd02a86414e557e9275bd0bbd0187694a85371d130e32e13cf0_prof);

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
", "WebProfilerBundle:Profiler:open.html.twig", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
