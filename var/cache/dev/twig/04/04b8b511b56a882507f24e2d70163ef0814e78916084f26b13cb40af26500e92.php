<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_693ce7bb96d9146ba67ab268f7a81cdf4f1608e56b661641748f705c7b7a2e1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fab3a4dcfab1576921ffa7d13617c7cf142a5044f9701b4f5d8130037d4a547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fab3a4dcfab1576921ffa7d13617c7cf142a5044f9701b4f5d8130037d4a547->enter($__internal_5fab3a4dcfab1576921ffa7d13617c7cf142a5044f9701b4f5d8130037d4a547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_f176f712658118cd8fc5bcdda31ddb5c04e05dc39a9ff28b8dd38f43748c111d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f176f712658118cd8fc5bcdda31ddb5c04e05dc39a9ff28b8dd38f43748c111d->enter($__internal_f176f712658118cd8fc5bcdda31ddb5c04e05dc39a9ff28b8dd38f43748c111d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5fab3a4dcfab1576921ffa7d13617c7cf142a5044f9701b4f5d8130037d4a547->leave($__internal_5fab3a4dcfab1576921ffa7d13617c7cf142a5044f9701b4f5d8130037d4a547_prof);

        
        $__internal_f176f712658118cd8fc5bcdda31ddb5c04e05dc39a9ff28b8dd38f43748c111d->leave($__internal_f176f712658118cd8fc5bcdda31ddb5c04e05dc39a9ff28b8dd38f43748c111d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cc2760535a3316e82a9b2800678a298388e6c2a26371ace5a7547863841f89fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc2760535a3316e82a9b2800678a298388e6c2a26371ace5a7547863841f89fe->enter($__internal_cc2760535a3316e82a9b2800678a298388e6c2a26371ace5a7547863841f89fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b849004f8f47d7a74cdedcd1437bce128ebc8f3408725d74fd237c3770a26996 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b849004f8f47d7a74cdedcd1437bce128ebc8f3408725d74fd237c3770a26996->enter($__internal_b849004f8f47d7a74cdedcd1437bce128ebc8f3408725d74fd237c3770a26996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b849004f8f47d7a74cdedcd1437bce128ebc8f3408725d74fd237c3770a26996->leave($__internal_b849004f8f47d7a74cdedcd1437bce128ebc8f3408725d74fd237c3770a26996_prof);

        
        $__internal_cc2760535a3316e82a9b2800678a298388e6c2a26371ace5a7547863841f89fe->leave($__internal_cc2760535a3316e82a9b2800678a298388e6c2a26371ace5a7547863841f89fe_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
