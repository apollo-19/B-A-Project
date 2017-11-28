<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_ed3b3db883f01d8d6fe5df2e879bf1fde8ffd89a675275dc3c1b18da7a4ee2df extends Twig_Template
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
        $__internal_899d1d9252c64386efec94cecf20f8225bc3d7fdcec71e3ebb326a207da33043 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_899d1d9252c64386efec94cecf20f8225bc3d7fdcec71e3ebb326a207da33043->enter($__internal_899d1d9252c64386efec94cecf20f8225bc3d7fdcec71e3ebb326a207da33043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_2bdb9e84537f0ce466d925eaf69a270a118c4fca8b79384df504d007746a2fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bdb9e84537f0ce466d925eaf69a270a118c4fca8b79384df504d007746a2fa6->enter($__internal_2bdb9e84537f0ce466d925eaf69a270a118c4fca8b79384df504d007746a2fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_899d1d9252c64386efec94cecf20f8225bc3d7fdcec71e3ebb326a207da33043->leave($__internal_899d1d9252c64386efec94cecf20f8225bc3d7fdcec71e3ebb326a207da33043_prof);

        
        $__internal_2bdb9e84537f0ce466d925eaf69a270a118c4fca8b79384df504d007746a2fa6->leave($__internal_2bdb9e84537f0ce466d925eaf69a270a118c4fca8b79384df504d007746a2fa6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
