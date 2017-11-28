<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9c85e1c6dc6cd7fd4d29b0657daf3d563e349ecb6f696cf03a9b48e4804332a5 extends Twig_Template
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
        $__internal_1e07ec46fc676d1301f3b2dddea20b38f7058abdd7cf1702cb9613f68800649a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e07ec46fc676d1301f3b2dddea20b38f7058abdd7cf1702cb9613f68800649a->enter($__internal_1e07ec46fc676d1301f3b2dddea20b38f7058abdd7cf1702cb9613f68800649a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_f2761fe2c36a3c67105a0bc0e07347832bb23a37bfb7e02b26986f167bdbc20b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2761fe2c36a3c67105a0bc0e07347832bb23a37bfb7e02b26986f167bdbc20b->enter($__internal_f2761fe2c36a3c67105a0bc0e07347832bb23a37bfb7e02b26986f167bdbc20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1e07ec46fc676d1301f3b2dddea20b38f7058abdd7cf1702cb9613f68800649a->leave($__internal_1e07ec46fc676d1301f3b2dddea20b38f7058abdd7cf1702cb9613f68800649a_prof);

        
        $__internal_f2761fe2c36a3c67105a0bc0e07347832bb23a37bfb7e02b26986f167bdbc20b->leave($__internal_f2761fe2c36a3c67105a0bc0e07347832bb23a37bfb7e02b26986f167bdbc20b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
