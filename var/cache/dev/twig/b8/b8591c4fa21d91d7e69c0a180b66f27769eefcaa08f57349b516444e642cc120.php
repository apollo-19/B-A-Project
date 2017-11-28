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
        $__internal_155894386e2a3969d40bfbe29dc7b5e80f5b4c74056b87b5111cbeb3eade88d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_155894386e2a3969d40bfbe29dc7b5e80f5b4c74056b87b5111cbeb3eade88d9->enter($__internal_155894386e2a3969d40bfbe29dc7b5e80f5b4c74056b87b5111cbeb3eade88d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_f146c8931206f482a8280eb925fa2418a8553047860b6fba01e3c79dbe84f581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f146c8931206f482a8280eb925fa2418a8553047860b6fba01e3c79dbe84f581->enter($__internal_f146c8931206f482a8280eb925fa2418a8553047860b6fba01e3c79dbe84f581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_155894386e2a3969d40bfbe29dc7b5e80f5b4c74056b87b5111cbeb3eade88d9->leave($__internal_155894386e2a3969d40bfbe29dc7b5e80f5b4c74056b87b5111cbeb3eade88d9_prof);

        
        $__internal_f146c8931206f482a8280eb925fa2418a8553047860b6fba01e3c79dbe84f581->leave($__internal_f146c8931206f482a8280eb925fa2418a8553047860b6fba01e3c79dbe84f581_prof);

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
", "TwigBundle:Exception:error.atom.twig", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
