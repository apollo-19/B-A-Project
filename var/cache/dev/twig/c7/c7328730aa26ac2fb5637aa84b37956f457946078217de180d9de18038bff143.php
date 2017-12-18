<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_440052636673501027f2ccee8006eb2f949d3bfff4de277fc05e94b3b877842d extends Twig_Template
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
        $__internal_c48a06e03f6cda33363652e64ea2fe5b8f7e61eec5a11849f55c91f66792162f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c48a06e03f6cda33363652e64ea2fe5b8f7e61eec5a11849f55c91f66792162f->enter($__internal_c48a06e03f6cda33363652e64ea2fe5b8f7e61eec5a11849f55c91f66792162f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_0ba7f670519a66d76d20a4caae43e19f9c91ac4e50c841423bd1b21ce9634882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ba7f670519a66d76d20a4caae43e19f9c91ac4e50c841423bd1b21ce9634882->enter($__internal_0ba7f670519a66d76d20a4caae43e19f9c91ac4e50c841423bd1b21ce9634882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c48a06e03f6cda33363652e64ea2fe5b8f7e61eec5a11849f55c91f66792162f->leave($__internal_c48a06e03f6cda33363652e64ea2fe5b8f7e61eec5a11849f55c91f66792162f_prof);

        
        $__internal_0ba7f670519a66d76d20a4caae43e19f9c91ac4e50c841423bd1b21ce9634882->leave($__internal_0ba7f670519a66d76d20a4caae43e19f9c91ac4e50c841423bd1b21ce9634882_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
