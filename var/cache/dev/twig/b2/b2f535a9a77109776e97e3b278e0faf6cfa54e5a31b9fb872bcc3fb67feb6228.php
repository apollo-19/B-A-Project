<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_aa4e046203d82a171b92ce211624f241cfb9255a0de7f5bd844d80448d086128 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da3ce2f7cbfee38d3d81f1f4dcf25dc1e9b5566486f987e9ee493e0a0ca8e5a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da3ce2f7cbfee38d3d81f1f4dcf25dc1e9b5566486f987e9ee493e0a0ca8e5a6->enter($__internal_da3ce2f7cbfee38d3d81f1f4dcf25dc1e9b5566486f987e9ee493e0a0ca8e5a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_31e2c26c49773a681dcc44dbdd4007dc8b6cc405c4e3e0fb63e6f2de154ea05f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e2c26c49773a681dcc44dbdd4007dc8b6cc405c4e3e0fb63e6f2de154ea05f->enter($__internal_31e2c26c49773a681dcc44dbdd4007dc8b6cc405c4e3e0fb63e6f2de154ea05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_da3ce2f7cbfee38d3d81f1f4dcf25dc1e9b5566486f987e9ee493e0a0ca8e5a6->leave($__internal_da3ce2f7cbfee38d3d81f1f4dcf25dc1e9b5566486f987e9ee493e0a0ca8e5a6_prof);

        
        $__internal_31e2c26c49773a681dcc44dbdd4007dc8b6cc405c4e3e0fb63e6f2de154ea05f->leave($__internal_31e2c26c49773a681dcc44dbdd4007dc8b6cc405c4e3e0fb63e6f2de154ea05f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
