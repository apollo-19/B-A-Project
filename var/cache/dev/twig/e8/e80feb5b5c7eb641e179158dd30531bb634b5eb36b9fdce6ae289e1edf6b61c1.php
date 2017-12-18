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
        $__internal_762491e3a8ebdd2c08e9631f05f233ab0cb064c9c7712e3f3b73bfc870ac0f2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_762491e3a8ebdd2c08e9631f05f233ab0cb064c9c7712e3f3b73bfc870ac0f2b->enter($__internal_762491e3a8ebdd2c08e9631f05f233ab0cb064c9c7712e3f3b73bfc870ac0f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_39d0e9742066c884b8129d84f39fd028538fb9794b690466551d2c91940bc77e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39d0e9742066c884b8129d84f39fd028538fb9794b690466551d2c91940bc77e->enter($__internal_39d0e9742066c884b8129d84f39fd028538fb9794b690466551d2c91940bc77e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_762491e3a8ebdd2c08e9631f05f233ab0cb064c9c7712e3f3b73bfc870ac0f2b->leave($__internal_762491e3a8ebdd2c08e9631f05f233ab0cb064c9c7712e3f3b73bfc870ac0f2b_prof);

        
        $__internal_39d0e9742066c884b8129d84f39fd028538fb9794b690466551d2c91940bc77e->leave($__internal_39d0e9742066c884b8129d84f39fd028538fb9794b690466551d2c91940bc77e_prof);

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
", "TwigBundle:Exception:exception.atom.twig", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
