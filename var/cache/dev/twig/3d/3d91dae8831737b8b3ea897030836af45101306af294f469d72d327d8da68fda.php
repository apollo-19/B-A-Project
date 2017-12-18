<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_47253a0760319c2c9cf444bba706c07dc8eabaf3256444a8438258b724cc385c extends Twig_Template
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
        $__internal_b056bdc6fb76aa1290541d1fca25d53ade118fa6d3fb23b2b03fca851c24165d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b056bdc6fb76aa1290541d1fca25d53ade118fa6d3fb23b2b03fca851c24165d->enter($__internal_b056bdc6fb76aa1290541d1fca25d53ade118fa6d3fb23b2b03fca851c24165d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_fbdb007beaad40c7c5aaba8bbdd8c41f79b86bdf735c284f3beedc723d79a1f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbdb007beaad40c7c5aaba8bbdd8c41f79b86bdf735c284f3beedc723d79a1f7->enter($__internal_fbdb007beaad40c7c5aaba8bbdd8c41f79b86bdf735c284f3beedc723d79a1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_b056bdc6fb76aa1290541d1fca25d53ade118fa6d3fb23b2b03fca851c24165d->leave($__internal_b056bdc6fb76aa1290541d1fca25d53ade118fa6d3fb23b2b03fca851c24165d_prof);

        
        $__internal_fbdb007beaad40c7c5aaba8bbdd8c41f79b86bdf735c284f3beedc723d79a1f7->leave($__internal_fbdb007beaad40c7c5aaba8bbdd8c41f79b86bdf735c284f3beedc723d79a1f7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
