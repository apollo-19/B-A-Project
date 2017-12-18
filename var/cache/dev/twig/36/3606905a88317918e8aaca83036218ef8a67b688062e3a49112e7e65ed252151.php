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
        $__internal_b642622e2e79bcfce533c27f5e6b4c0002ae22ce3fb6c2b2ee64ae63a827fb9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b642622e2e79bcfce533c27f5e6b4c0002ae22ce3fb6c2b2ee64ae63a827fb9f->enter($__internal_b642622e2e79bcfce533c27f5e6b4c0002ae22ce3fb6c2b2ee64ae63a827fb9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_68b5b53ea105369996881213fad00adc8642a5a253f0f4a46772d026db6a9094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68b5b53ea105369996881213fad00adc8642a5a253f0f4a46772d026db6a9094->enter($__internal_68b5b53ea105369996881213fad00adc8642a5a253f0f4a46772d026db6a9094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b642622e2e79bcfce533c27f5e6b4c0002ae22ce3fb6c2b2ee64ae63a827fb9f->leave($__internal_b642622e2e79bcfce533c27f5e6b4c0002ae22ce3fb6c2b2ee64ae63a827fb9f_prof);

        
        $__internal_68b5b53ea105369996881213fad00adc8642a5a253f0f4a46772d026db6a9094->leave($__internal_68b5b53ea105369996881213fad00adc8642a5a253f0f4a46772d026db6a9094_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b6a1be6d10092ac0757d2fd4ed7138a8f70db89562427dc59604cc6e33d23175 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6a1be6d10092ac0757d2fd4ed7138a8f70db89562427dc59604cc6e33d23175->enter($__internal_b6a1be6d10092ac0757d2fd4ed7138a8f70db89562427dc59604cc6e33d23175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c8bf77ae610a032317a8553fef2cebb3e9469c3c2828d55007bc7035e2d400fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8bf77ae610a032317a8553fef2cebb3e9469c3c2828d55007bc7035e2d400fa->enter($__internal_c8bf77ae610a032317a8553fef2cebb3e9469c3c2828d55007bc7035e2d400fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c8bf77ae610a032317a8553fef2cebb3e9469c3c2828d55007bc7035e2d400fa->leave($__internal_c8bf77ae610a032317a8553fef2cebb3e9469c3c2828d55007bc7035e2d400fa_prof);

        
        $__internal_b6a1be6d10092ac0757d2fd4ed7138a8f70db89562427dc59604cc6e33d23175->leave($__internal_b6a1be6d10092ac0757d2fd4ed7138a8f70db89562427dc59604cc6e33d23175_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2a52b9cb5325737b3de0b8cdd5523a4ee07d77274174408063b5af7eff657f03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a52b9cb5325737b3de0b8cdd5523a4ee07d77274174408063b5af7eff657f03->enter($__internal_2a52b9cb5325737b3de0b8cdd5523a4ee07d77274174408063b5af7eff657f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_34e4948cc94679844f704ee8c775b73e689e49018605814e1895c484c6c2fb36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34e4948cc94679844f704ee8c775b73e689e49018605814e1895c484c6c2fb36->enter($__internal_34e4948cc94679844f704ee8c775b73e689e49018605814e1895c484c6c2fb36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_34e4948cc94679844f704ee8c775b73e689e49018605814e1895c484c6c2fb36->leave($__internal_34e4948cc94679844f704ee8c775b73e689e49018605814e1895c484c6c2fb36_prof);

        
        $__internal_2a52b9cb5325737b3de0b8cdd5523a4ee07d77274174408063b5af7eff657f03->leave($__internal_2a52b9cb5325737b3de0b8cdd5523a4ee07d77274174408063b5af7eff657f03_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_03fad21fcf6b2e405544b29881f96ab1efed5c3fdf3fba1749a0249dba920f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03fad21fcf6b2e405544b29881f96ab1efed5c3fdf3fba1749a0249dba920f8d->enter($__internal_03fad21fcf6b2e405544b29881f96ab1efed5c3fdf3fba1749a0249dba920f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7f902a0e87c45afd6056a45fce9f4845ee91be8062d75015a228bef75c5f8acd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f902a0e87c45afd6056a45fce9f4845ee91be8062d75015a228bef75c5f8acd->enter($__internal_7f902a0e87c45afd6056a45fce9f4845ee91be8062d75015a228bef75c5f8acd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7f902a0e87c45afd6056a45fce9f4845ee91be8062d75015a228bef75c5f8acd->leave($__internal_7f902a0e87c45afd6056a45fce9f4845ee91be8062d75015a228bef75c5f8acd_prof);

        
        $__internal_03fad21fcf6b2e405544b29881f96ab1efed5c3fdf3fba1749a0249dba920f8d->leave($__internal_03fad21fcf6b2e405544b29881f96ab1efed5c3fdf3fba1749a0249dba920f8d_prof);

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
", "WebProfilerBundle:Collector:exception.html.twig", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
