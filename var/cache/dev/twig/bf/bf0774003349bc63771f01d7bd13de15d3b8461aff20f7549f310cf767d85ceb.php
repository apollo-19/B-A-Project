<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_1ba13413b4ed4f06f8ac2c03afa72d1213546ef5b2ae1d318b812ffacc9119d1 extends Twig_Template
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
        $__internal_06e9b59ccc4986a869fe35491cf832948e9ca3415b79e28f2ef247c102f32c06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e9b59ccc4986a869fe35491cf832948e9ca3415b79e28f2ef247c102f32c06->enter($__internal_06e9b59ccc4986a869fe35491cf832948e9ca3415b79e28f2ef247c102f32c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_82cf134865112285480a6f3810e4fc03e808d466daa0522254a0bc8f542114ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82cf134865112285480a6f3810e4fc03e808d466daa0522254a0bc8f542114ec->enter($__internal_82cf134865112285480a6f3810e4fc03e808d466daa0522254a0bc8f542114ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_06e9b59ccc4986a869fe35491cf832948e9ca3415b79e28f2ef247c102f32c06->leave($__internal_06e9b59ccc4986a869fe35491cf832948e9ca3415b79e28f2ef247c102f32c06_prof);

        
        $__internal_82cf134865112285480a6f3810e4fc03e808d466daa0522254a0bc8f542114ec->leave($__internal_82cf134865112285480a6f3810e4fc03e808d466daa0522254a0bc8f542114ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
