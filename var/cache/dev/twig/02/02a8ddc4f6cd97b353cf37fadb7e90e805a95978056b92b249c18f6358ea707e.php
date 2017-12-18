<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_8ef342efd341b9db32993075d5f34bd1be00e59b5df52a881af64cf6a9c6b9dd extends Twig_Template
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
        $__internal_1e6d6e1738725f54c55c4b9ea64e9d5d0ed9fd88d9abb0b039b7c87a649951c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e6d6e1738725f54c55c4b9ea64e9d5d0ed9fd88d9abb0b039b7c87a649951c3->enter($__internal_1e6d6e1738725f54c55c4b9ea64e9d5d0ed9fd88d9abb0b039b7c87a649951c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_d34504ebd87e9ec72945ac387c3e373df91e58de1544988ee941cff358579e0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d34504ebd87e9ec72945ac387c3e373df91e58de1544988ee941cff358579e0e->enter($__internal_d34504ebd87e9ec72945ac387c3e373df91e58de1544988ee941cff358579e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_1e6d6e1738725f54c55c4b9ea64e9d5d0ed9fd88d9abb0b039b7c87a649951c3->leave($__internal_1e6d6e1738725f54c55c4b9ea64e9d5d0ed9fd88d9abb0b039b7c87a649951c3_prof);

        
        $__internal_d34504ebd87e9ec72945ac387c3e373df91e58de1544988ee941cff358579e0e->leave($__internal_d34504ebd87e9ec72945ac387c3e373df91e58de1544988ee941cff358579e0e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
