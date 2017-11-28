<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_42c2d72bbd734b582b3b64ecd5fe8ba889ec8845c3c70bd605f68e03ed8a4238 extends Twig_Template
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
        $__internal_93c50b56f133966780fd73ac19f2175197d04d7f3e3c16eccbe09aab118af6ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93c50b56f133966780fd73ac19f2175197d04d7f3e3c16eccbe09aab118af6ae->enter($__internal_93c50b56f133966780fd73ac19f2175197d04d7f3e3c16eccbe09aab118af6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_4d103ff4e6afa46f7d284a5e024eb70dcddd341835e38e37fccdbcc0b6d817e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d103ff4e6afa46f7d284a5e024eb70dcddd341835e38e37fccdbcc0b6d817e3->enter($__internal_4d103ff4e6afa46f7d284a5e024eb70dcddd341835e38e37fccdbcc0b6d817e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_93c50b56f133966780fd73ac19f2175197d04d7f3e3c16eccbe09aab118af6ae->leave($__internal_93c50b56f133966780fd73ac19f2175197d04d7f3e3c16eccbe09aab118af6ae_prof);

        
        $__internal_4d103ff4e6afa46f7d284a5e024eb70dcddd341835e38e37fccdbcc0b6d817e3->leave($__internal_4d103ff4e6afa46f7d284a5e024eb70dcddd341835e38e37fccdbcc0b6d817e3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
