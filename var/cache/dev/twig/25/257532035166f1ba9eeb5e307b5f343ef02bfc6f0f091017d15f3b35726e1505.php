<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_2911652c367fa8c463fb5e758f16f977e427495afe595ef7f817423d0a9174a9 extends Twig_Template
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
        $__internal_0cf2639343f7b894118cb81023a0e40a7280ee7acee588d6f0350939cdf251df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cf2639343f7b894118cb81023a0e40a7280ee7acee588d6f0350939cdf251df->enter($__internal_0cf2639343f7b894118cb81023a0e40a7280ee7acee588d6f0350939cdf251df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_9767c11d4b38f85fd10711f0519d84bcfe00a8821aa3c91f12b309ebf659ae52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9767c11d4b38f85fd10711f0519d84bcfe00a8821aa3c91f12b309ebf659ae52->enter($__internal_9767c11d4b38f85fd10711f0519d84bcfe00a8821aa3c91f12b309ebf659ae52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_0cf2639343f7b894118cb81023a0e40a7280ee7acee588d6f0350939cdf251df->leave($__internal_0cf2639343f7b894118cb81023a0e40a7280ee7acee588d6f0350939cdf251df_prof);

        
        $__internal_9767c11d4b38f85fd10711f0519d84bcfe00a8821aa3c91f12b309ebf659ae52->leave($__internal_9767c11d4b38f85fd10711f0519d84bcfe00a8821aa3c91f12b309ebf659ae52_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
