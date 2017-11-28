<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_aa83498be161242a9f91d6a22df145b34e65dacd1633e3e28a2baeb8081b4468 extends Twig_Template
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
        $__internal_b6dfa09cb91d0c5df4dcf603a1877856e32b65ec7c6485db38805bf1f30b75ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6dfa09cb91d0c5df4dcf603a1877856e32b65ec7c6485db38805bf1f30b75ea->enter($__internal_b6dfa09cb91d0c5df4dcf603a1877856e32b65ec7c6485db38805bf1f30b75ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_f08c482e00a8158d41994aa6a292f9ad54fe34ce3c3274b27e715246dcb47c8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f08c482e00a8158d41994aa6a292f9ad54fe34ce3c3274b27e715246dcb47c8b->enter($__internal_f08c482e00a8158d41994aa6a292f9ad54fe34ce3c3274b27e715246dcb47c8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_b6dfa09cb91d0c5df4dcf603a1877856e32b65ec7c6485db38805bf1f30b75ea->leave($__internal_b6dfa09cb91d0c5df4dcf603a1877856e32b65ec7c6485db38805bf1f30b75ea_prof);

        
        $__internal_f08c482e00a8158d41994aa6a292f9ad54fe34ce3c3274b27e715246dcb47c8b->leave($__internal_f08c482e00a8158d41994aa6a292f9ad54fe34ce3c3274b27e715246dcb47c8b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
