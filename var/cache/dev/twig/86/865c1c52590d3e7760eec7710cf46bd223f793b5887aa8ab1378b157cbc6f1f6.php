<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_3af4a99c1cb655a4825f0a6e01551d674b52d52b622e47d73e3845cb1496152a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_d480951a14fd9f9310fd525987a523763b0b6b7454e70249baac5d48189ae5a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d480951a14fd9f9310fd525987a523763b0b6b7454e70249baac5d48189ae5a0->enter($__internal_d480951a14fd9f9310fd525987a523763b0b6b7454e70249baac5d48189ae5a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_21f6bebc120c0e8b1e1222340bf07609914fc94e44f218bfa23b0e0e142ccf27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21f6bebc120c0e8b1e1222340bf07609914fc94e44f218bfa23b0e0e142ccf27->enter($__internal_21f6bebc120c0e8b1e1222340bf07609914fc94e44f218bfa23b0e0e142ccf27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d480951a14fd9f9310fd525987a523763b0b6b7454e70249baac5d48189ae5a0->leave($__internal_d480951a14fd9f9310fd525987a523763b0b6b7454e70249baac5d48189ae5a0_prof);

        
        $__internal_21f6bebc120c0e8b1e1222340bf07609914fc94e44f218bfa23b0e0e142ccf27->leave($__internal_21f6bebc120c0e8b1e1222340bf07609914fc94e44f218bfa23b0e0e142ccf27_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f9e34274c42cf1489537c6c886ddc03d0712353133ed3c812ad22531465acdd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9e34274c42cf1489537c6c886ddc03d0712353133ed3c812ad22531465acdd4->enter($__internal_f9e34274c42cf1489537c6c886ddc03d0712353133ed3c812ad22531465acdd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_df641eadcabdce8f6ce8d6bda5e5c360a952f01d0f0d766e3704d84114ec75af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df641eadcabdce8f6ce8d6bda5e5c360a952f01d0f0d766e3704d84114ec75af->enter($__internal_df641eadcabdce8f6ce8d6bda5e5c360a952f01d0f0d766e3704d84114ec75af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_df641eadcabdce8f6ce8d6bda5e5c360a952f01d0f0d766e3704d84114ec75af->leave($__internal_df641eadcabdce8f6ce8d6bda5e5c360a952f01d0f0d766e3704d84114ec75af_prof);

        
        $__internal_f9e34274c42cf1489537c6c886ddc03d0712353133ed3c812ad22531465acdd4->leave($__internal_f9e34274c42cf1489537c6c886ddc03d0712353133ed3c812ad22531465acdd4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5d39537d6697c9128ec7ca3b752268c6a6d8ca8b6b781e4e880eb6eb8dc0d213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d39537d6697c9128ec7ca3b752268c6a6d8ca8b6b781e4e880eb6eb8dc0d213->enter($__internal_5d39537d6697c9128ec7ca3b752268c6a6d8ca8b6b781e4e880eb6eb8dc0d213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b65a397c9ae93cf32e28e1c9c2bc51f348c59089aeda5ce6d16bf7e6d94b4da2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b65a397c9ae93cf32e28e1c9c2bc51f348c59089aeda5ce6d16bf7e6d94b4da2->enter($__internal_b65a397c9ae93cf32e28e1c9c2bc51f348c59089aeda5ce6d16bf7e6d94b4da2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b65a397c9ae93cf32e28e1c9c2bc51f348c59089aeda5ce6d16bf7e6d94b4da2->leave($__internal_b65a397c9ae93cf32e28e1c9c2bc51f348c59089aeda5ce6d16bf7e6d94b4da2_prof);

        
        $__internal_5d39537d6697c9128ec7ca3b752268c6a6d8ca8b6b781e4e880eb6eb8dc0d213->leave($__internal_5d39537d6697c9128ec7ca3b752268c6a6d8ca8b6b781e4e880eb6eb8dc0d213_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b0a3d13ac9b62d6c9235db3ff9326af44451a501ed96829a31c21707703671f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0a3d13ac9b62d6c9235db3ff9326af44451a501ed96829a31c21707703671f9->enter($__internal_b0a3d13ac9b62d6c9235db3ff9326af44451a501ed96829a31c21707703671f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_161e79451efbc780d370eff64b15c16046b43cfefbf4141cf776f2170fcc948c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_161e79451efbc780d370eff64b15c16046b43cfefbf4141cf776f2170fcc948c->enter($__internal_161e79451efbc780d370eff64b15c16046b43cfefbf4141cf776f2170fcc948c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_161e79451efbc780d370eff64b15c16046b43cfefbf4141cf776f2170fcc948c->leave($__internal_161e79451efbc780d370eff64b15c16046b43cfefbf4141cf776f2170fcc948c_prof);

        
        $__internal_b0a3d13ac9b62d6c9235db3ff9326af44451a501ed96829a31c21707703671f9->leave($__internal_b0a3d13ac9b62d6c9235db3ff9326af44451a501ed96829a31c21707703671f9_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
