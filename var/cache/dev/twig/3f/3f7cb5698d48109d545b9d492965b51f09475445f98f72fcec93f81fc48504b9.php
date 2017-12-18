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
        $__internal_d8192ae79356faa3946b172ba87a6659391073a8c2d0db439319365b09cededd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8192ae79356faa3946b172ba87a6659391073a8c2d0db439319365b09cededd->enter($__internal_d8192ae79356faa3946b172ba87a6659391073a8c2d0db439319365b09cededd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_f943c45cee300f66e7bb8cea6484af8a765277b943479971b97fe88d5a09e195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f943c45cee300f66e7bb8cea6484af8a765277b943479971b97fe88d5a09e195->enter($__internal_f943c45cee300f66e7bb8cea6484af8a765277b943479971b97fe88d5a09e195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8192ae79356faa3946b172ba87a6659391073a8c2d0db439319365b09cededd->leave($__internal_d8192ae79356faa3946b172ba87a6659391073a8c2d0db439319365b09cededd_prof);

        
        $__internal_f943c45cee300f66e7bb8cea6484af8a765277b943479971b97fe88d5a09e195->leave($__internal_f943c45cee300f66e7bb8cea6484af8a765277b943479971b97fe88d5a09e195_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_77f7fa74cde03628f4a0258f6d4bbb304ded3bbb7b5ba314570598b586a56c74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77f7fa74cde03628f4a0258f6d4bbb304ded3bbb7b5ba314570598b586a56c74->enter($__internal_77f7fa74cde03628f4a0258f6d4bbb304ded3bbb7b5ba314570598b586a56c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a010a208e4586edcb7ecfbe649a11305d14953cb1aa77d0ecbc1e70b51a1af31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a010a208e4586edcb7ecfbe649a11305d14953cb1aa77d0ecbc1e70b51a1af31->enter($__internal_a010a208e4586edcb7ecfbe649a11305d14953cb1aa77d0ecbc1e70b51a1af31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a010a208e4586edcb7ecfbe649a11305d14953cb1aa77d0ecbc1e70b51a1af31->leave($__internal_a010a208e4586edcb7ecfbe649a11305d14953cb1aa77d0ecbc1e70b51a1af31_prof);

        
        $__internal_77f7fa74cde03628f4a0258f6d4bbb304ded3bbb7b5ba314570598b586a56c74->leave($__internal_77f7fa74cde03628f4a0258f6d4bbb304ded3bbb7b5ba314570598b586a56c74_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7224558bbef8f5941532b65516e79f72e67bee74bf7d75ee1b274e20eaad915a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7224558bbef8f5941532b65516e79f72e67bee74bf7d75ee1b274e20eaad915a->enter($__internal_7224558bbef8f5941532b65516e79f72e67bee74bf7d75ee1b274e20eaad915a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_95f3b5952d8c3a452f46b1f1f8298ad1a3c1cd66951113ca7cc596124561ac57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95f3b5952d8c3a452f46b1f1f8298ad1a3c1cd66951113ca7cc596124561ac57->enter($__internal_95f3b5952d8c3a452f46b1f1f8298ad1a3c1cd66951113ca7cc596124561ac57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_95f3b5952d8c3a452f46b1f1f8298ad1a3c1cd66951113ca7cc596124561ac57->leave($__internal_95f3b5952d8c3a452f46b1f1f8298ad1a3c1cd66951113ca7cc596124561ac57_prof);

        
        $__internal_7224558bbef8f5941532b65516e79f72e67bee74bf7d75ee1b274e20eaad915a->leave($__internal_7224558bbef8f5941532b65516e79f72e67bee74bf7d75ee1b274e20eaad915a_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
