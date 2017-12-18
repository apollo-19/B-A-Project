<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_ac4d899aa45c8e04f11a0a37f3a572a06d5eda37db28656b55197b0a03d66249 extends Twig_Template
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
        $__internal_dcf75cedc811bd4c8f9864e7fa3c8478b6b191b94200221c9a3da2a82ea09695 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcf75cedc811bd4c8f9864e7fa3c8478b6b191b94200221c9a3da2a82ea09695->enter($__internal_dcf75cedc811bd4c8f9864e7fa3c8478b6b191b94200221c9a3da2a82ea09695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_3021e141f1ea3dffc9c03c6a05a51a0ba06f2e216f3b0e8ea138fc45682854b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3021e141f1ea3dffc9c03c6a05a51a0ba06f2e216f3b0e8ea138fc45682854b3->enter($__internal_3021e141f1ea3dffc9c03c6a05a51a0ba06f2e216f3b0e8ea138fc45682854b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_dcf75cedc811bd4c8f9864e7fa3c8478b6b191b94200221c9a3da2a82ea09695->leave($__internal_dcf75cedc811bd4c8f9864e7fa3c8478b6b191b94200221c9a3da2a82ea09695_prof);

        
        $__internal_3021e141f1ea3dffc9c03c6a05a51a0ba06f2e216f3b0e8ea138fc45682854b3->leave($__internal_3021e141f1ea3dffc9c03c6a05a51a0ba06f2e216f3b0e8ea138fc45682854b3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
