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
        $__internal_727e9acd61234cf31384c19f6e4032fc0c5ed91b0edbf65c6646d188873300a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_727e9acd61234cf31384c19f6e4032fc0c5ed91b0edbf65c6646d188873300a5->enter($__internal_727e9acd61234cf31384c19f6e4032fc0c5ed91b0edbf65c6646d188873300a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_1462d220bb3608265300644573f1abc8a8b812830ebcdd97a11051ed1fe90d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1462d220bb3608265300644573f1abc8a8b812830ebcdd97a11051ed1fe90d71->enter($__internal_1462d220bb3608265300644573f1abc8a8b812830ebcdd97a11051ed1fe90d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_727e9acd61234cf31384c19f6e4032fc0c5ed91b0edbf65c6646d188873300a5->leave($__internal_727e9acd61234cf31384c19f6e4032fc0c5ed91b0edbf65c6646d188873300a5_prof);

        
        $__internal_1462d220bb3608265300644573f1abc8a8b812830ebcdd97a11051ed1fe90d71->leave($__internal_1462d220bb3608265300644573f1abc8a8b812830ebcdd97a11051ed1fe90d71_prof);

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
", "TwigBundle:Exception:error.js.twig", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
