<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_22b1ee51354d38bbec455b13ce2f0c8f15d791a7a7830730ca0c6e67d5856847 extends Twig_Template
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
        $__internal_4f00bb195a43dbbb366df538a09ef5e1335c3c60336fa81f0ae58a4af1c7f3aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f00bb195a43dbbb366df538a09ef5e1335c3c60336fa81f0ae58a4af1c7f3aa->enter($__internal_4f00bb195a43dbbb366df538a09ef5e1335c3c60336fa81f0ae58a4af1c7f3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_a9fa88062ac5ae4765afbf028b5b0e124ee6e4d7fc968cba03bc7c9b4250c137 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9fa88062ac5ae4765afbf028b5b0e124ee6e4d7fc968cba03bc7c9b4250c137->enter($__internal_a9fa88062ac5ae4765afbf028b5b0e124ee6e4d7fc968cba03bc7c9b4250c137_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_4f00bb195a43dbbb366df538a09ef5e1335c3c60336fa81f0ae58a4af1c7f3aa->leave($__internal_4f00bb195a43dbbb366df538a09ef5e1335c3c60336fa81f0ae58a4af1c7f3aa_prof);

        
        $__internal_a9fa88062ac5ae4765afbf028b5b0e124ee6e4d7fc968cba03bc7c9b4250c137->leave($__internal_a9fa88062ac5ae4765afbf028b5b0e124ee6e4d7fc968cba03bc7c9b4250c137_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
