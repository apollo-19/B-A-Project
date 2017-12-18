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
        $__internal_ea7274a7a33695b6b92ad3ca18bae52f5a82cfc7b84df9b6fc431b3b8a9d66d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea7274a7a33695b6b92ad3ca18bae52f5a82cfc7b84df9b6fc431b3b8a9d66d2->enter($__internal_ea7274a7a33695b6b92ad3ca18bae52f5a82cfc7b84df9b6fc431b3b8a9d66d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_d4726d4ef1fe385732e803ece7e2ea7c57a12ddd249ee06f4f0593be22f14443 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4726d4ef1fe385732e803ece7e2ea7c57a12ddd249ee06f4f0593be22f14443->enter($__internal_d4726d4ef1fe385732e803ece7e2ea7c57a12ddd249ee06f4f0593be22f14443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_ea7274a7a33695b6b92ad3ca18bae52f5a82cfc7b84df9b6fc431b3b8a9d66d2->leave($__internal_ea7274a7a33695b6b92ad3ca18bae52f5a82cfc7b84df9b6fc431b3b8a9d66d2_prof);

        
        $__internal_d4726d4ef1fe385732e803ece7e2ea7c57a12ddd249ee06f4f0593be22f14443->leave($__internal_d4726d4ef1fe385732e803ece7e2ea7c57a12ddd249ee06f4f0593be22f14443_prof);

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
", "TwigBundle:Exception:error.txt.twig", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
