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
        $__internal_8f91dbe5b75fdf111ee2f01476c5b73a52a17cab862304ed08a2118ac486758e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f91dbe5b75fdf111ee2f01476c5b73a52a17cab862304ed08a2118ac486758e->enter($__internal_8f91dbe5b75fdf111ee2f01476c5b73a52a17cab862304ed08a2118ac486758e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_5cdf548be341271e78e5902b98d7bfe731dbf12fe05f7ead635a13410cd3ba31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cdf548be341271e78e5902b98d7bfe731dbf12fe05f7ead635a13410cd3ba31->enter($__internal_5cdf548be341271e78e5902b98d7bfe731dbf12fe05f7ead635a13410cd3ba31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8f91dbe5b75fdf111ee2f01476c5b73a52a17cab862304ed08a2118ac486758e->leave($__internal_8f91dbe5b75fdf111ee2f01476c5b73a52a17cab862304ed08a2118ac486758e_prof);

        
        $__internal_5cdf548be341271e78e5902b98d7bfe731dbf12fe05f7ead635a13410cd3ba31->leave($__internal_5cdf548be341271e78e5902b98d7bfe731dbf12fe05f7ead635a13410cd3ba31_prof);

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
", "TwigBundle:Exception:error.json.twig", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
