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
        $__internal_2504449cbfc519fe3e9ba8f8eb9a311fc468c43416eff5d81d20b95e4fe40b5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2504449cbfc519fe3e9ba8f8eb9a311fc468c43416eff5d81d20b95e4fe40b5a->enter($__internal_2504449cbfc519fe3e9ba8f8eb9a311fc468c43416eff5d81d20b95e4fe40b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_dfd7a294c70dfe62b262940ff31638923e094db15db9542d809a192abe783c64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfd7a294c70dfe62b262940ff31638923e094db15db9542d809a192abe783c64->enter($__internal_dfd7a294c70dfe62b262940ff31638923e094db15db9542d809a192abe783c64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_2504449cbfc519fe3e9ba8f8eb9a311fc468c43416eff5d81d20b95e4fe40b5a->leave($__internal_2504449cbfc519fe3e9ba8f8eb9a311fc468c43416eff5d81d20b95e4fe40b5a_prof);

        
        $__internal_dfd7a294c70dfe62b262940ff31638923e094db15db9542d809a192abe783c64->leave($__internal_dfd7a294c70dfe62b262940ff31638923e094db15db9542d809a192abe783c64_prof);

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
", "TwigBundle:Exception:error.rdf.twig", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
