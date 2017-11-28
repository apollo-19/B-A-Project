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
        $__internal_283f8d133c8595d0bad2f76de4ca1d4989e2c19a937a261e5e2651aec26b8ed6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_283f8d133c8595d0bad2f76de4ca1d4989e2c19a937a261e5e2651aec26b8ed6->enter($__internal_283f8d133c8595d0bad2f76de4ca1d4989e2c19a937a261e5e2651aec26b8ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_bb81c6b8eff55d6dec0d01825b91dacbef8be020b20f475479e4ae05093d12b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb81c6b8eff55d6dec0d01825b91dacbef8be020b20f475479e4ae05093d12b0->enter($__internal_bb81c6b8eff55d6dec0d01825b91dacbef8be020b20f475479e4ae05093d12b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_283f8d133c8595d0bad2f76de4ca1d4989e2c19a937a261e5e2651aec26b8ed6->leave($__internal_283f8d133c8595d0bad2f76de4ca1d4989e2c19a937a261e5e2651aec26b8ed6_prof);

        
        $__internal_bb81c6b8eff55d6dec0d01825b91dacbef8be020b20f475479e4ae05093d12b0->leave($__internal_bb81c6b8eff55d6dec0d01825b91dacbef8be020b20f475479e4ae05093d12b0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f2252cf0fb7a151d2e96167d20f39d571e2c9094d149c77c830cc46aa8eb1163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2252cf0fb7a151d2e96167d20f39d571e2c9094d149c77c830cc46aa8eb1163->enter($__internal_f2252cf0fb7a151d2e96167d20f39d571e2c9094d149c77c830cc46aa8eb1163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_bb4d8a9ef1240737ae6572c21b12c611cac222dbc066a3c89028b98b6c21eccd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4d8a9ef1240737ae6572c21b12c611cac222dbc066a3c89028b98b6c21eccd->enter($__internal_bb4d8a9ef1240737ae6572c21b12c611cac222dbc066a3c89028b98b6c21eccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_bb4d8a9ef1240737ae6572c21b12c611cac222dbc066a3c89028b98b6c21eccd->leave($__internal_bb4d8a9ef1240737ae6572c21b12c611cac222dbc066a3c89028b98b6c21eccd_prof);

        
        $__internal_f2252cf0fb7a151d2e96167d20f39d571e2c9094d149c77c830cc46aa8eb1163->leave($__internal_f2252cf0fb7a151d2e96167d20f39d571e2c9094d149c77c830cc46aa8eb1163_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
