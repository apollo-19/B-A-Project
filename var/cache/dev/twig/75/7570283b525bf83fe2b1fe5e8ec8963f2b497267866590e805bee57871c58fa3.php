<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_39452b50f6ce2f90ce7e24558ebe75bdd1004890a919d234276f6f358c845606 extends Twig_Template
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
        $__internal_a0ab68375c9a00db9bd157e1c3404bb930c228e6796d3cc6c8e278639664f392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0ab68375c9a00db9bd157e1c3404bb930c228e6796d3cc6c8e278639664f392->enter($__internal_a0ab68375c9a00db9bd157e1c3404bb930c228e6796d3cc6c8e278639664f392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_0b4ccb9900b573f63aa5920c038a38aac3ebeddf23a9ca426be959ab8357fa2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b4ccb9900b573f63aa5920c038a38aac3ebeddf23a9ca426be959ab8357fa2e->enter($__internal_0b4ccb9900b573f63aa5920c038a38aac3ebeddf23a9ca426be959ab8357fa2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a0ab68375c9a00db9bd157e1c3404bb930c228e6796d3cc6c8e278639664f392->leave($__internal_a0ab68375c9a00db9bd157e1c3404bb930c228e6796d3cc6c8e278639664f392_prof);

        
        $__internal_0b4ccb9900b573f63aa5920c038a38aac3ebeddf23a9ca426be959ab8357fa2e->leave($__internal_0b4ccb9900b573f63aa5920c038a38aac3ebeddf23a9ca426be959ab8357fa2e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
