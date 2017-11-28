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
        $__internal_3f1ee8143b644163b6b3aa57501f430fdabc1778c2aa89f2231f0ba735539e09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f1ee8143b644163b6b3aa57501f430fdabc1778c2aa89f2231f0ba735539e09->enter($__internal_3f1ee8143b644163b6b3aa57501f430fdabc1778c2aa89f2231f0ba735539e09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_d04e473a2c1bf04bb083bf629b765bb9d1c4d131a313d0f0756620ad2735195f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d04e473a2c1bf04bb083bf629b765bb9d1c4d131a313d0f0756620ad2735195f->enter($__internal_d04e473a2c1bf04bb083bf629b765bb9d1c4d131a313d0f0756620ad2735195f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3f1ee8143b644163b6b3aa57501f430fdabc1778c2aa89f2231f0ba735539e09->leave($__internal_3f1ee8143b644163b6b3aa57501f430fdabc1778c2aa89f2231f0ba735539e09_prof);

        
        $__internal_d04e473a2c1bf04bb083bf629b765bb9d1c4d131a313d0f0756620ad2735195f->leave($__internal_d04e473a2c1bf04bb083bf629b765bb9d1c4d131a313d0f0756620ad2735195f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1d46470f917715bb550780e6f2549350c1454e5f2e44a2939c30cedde363603d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d46470f917715bb550780e6f2549350c1454e5f2e44a2939c30cedde363603d->enter($__internal_1d46470f917715bb550780e6f2549350c1454e5f2e44a2939c30cedde363603d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_98b6cd799ec185d68e78420bd348574dda6220122e7708d126b53ed99906f70a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98b6cd799ec185d68e78420bd348574dda6220122e7708d126b53ed99906f70a->enter($__internal_98b6cd799ec185d68e78420bd348574dda6220122e7708d126b53ed99906f70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_98b6cd799ec185d68e78420bd348574dda6220122e7708d126b53ed99906f70a->leave($__internal_98b6cd799ec185d68e78420bd348574dda6220122e7708d126b53ed99906f70a_prof);

        
        $__internal_1d46470f917715bb550780e6f2549350c1454e5f2e44a2939c30cedde363603d->leave($__internal_1d46470f917715bb550780e6f2549350c1454e5f2e44a2939c30cedde363603d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3ee93e87e3cec7e707670b4ac344fd0009b3020c3870b4d51027ae78ed7b45e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ee93e87e3cec7e707670b4ac344fd0009b3020c3870b4d51027ae78ed7b45e1->enter($__internal_3ee93e87e3cec7e707670b4ac344fd0009b3020c3870b4d51027ae78ed7b45e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7cc0ef91d7480376fc41c9179e515016219a2b02ef0bb40893cf4dfd786813ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cc0ef91d7480376fc41c9179e515016219a2b02ef0bb40893cf4dfd786813ac->enter($__internal_7cc0ef91d7480376fc41c9179e515016219a2b02ef0bb40893cf4dfd786813ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7cc0ef91d7480376fc41c9179e515016219a2b02ef0bb40893cf4dfd786813ac->leave($__internal_7cc0ef91d7480376fc41c9179e515016219a2b02ef0bb40893cf4dfd786813ac_prof);

        
        $__internal_3ee93e87e3cec7e707670b4ac344fd0009b3020c3870b4d51027ae78ed7b45e1->leave($__internal_3ee93e87e3cec7e707670b4ac344fd0009b3020c3870b4d51027ae78ed7b45e1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bbf502fd55ecaf3a283b299cd57a2068b1fc4fc56ef219d250ca7e9b183cb1eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbf502fd55ecaf3a283b299cd57a2068b1fc4fc56ef219d250ca7e9b183cb1eb->enter($__internal_bbf502fd55ecaf3a283b299cd57a2068b1fc4fc56ef219d250ca7e9b183cb1eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4735146502c911885a1ffd73e31753260b605c741074f7c4eb99d10533642419 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4735146502c911885a1ffd73e31753260b605c741074f7c4eb99d10533642419->enter($__internal_4735146502c911885a1ffd73e31753260b605c741074f7c4eb99d10533642419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4735146502c911885a1ffd73e31753260b605c741074f7c4eb99d10533642419->leave($__internal_4735146502c911885a1ffd73e31753260b605c741074f7c4eb99d10533642419_prof);

        
        $__internal_bbf502fd55ecaf3a283b299cd57a2068b1fc4fc56ef219d250ca7e9b183cb1eb->leave($__internal_bbf502fd55ecaf3a283b299cd57a2068b1fc4fc56ef219d250ca7e9b183cb1eb_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
