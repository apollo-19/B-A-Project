<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_589da9bf4712d58ce229ce2f01c52a7859f00baa0fb140d7796a05f5af2b0683 extends Twig_Template
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
        $__internal_3ac72bc98c615be3f04619ef1f169900f0d4828c242c3bfd99bf00bd79624965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ac72bc98c615be3f04619ef1f169900f0d4828c242c3bfd99bf00bd79624965->enter($__internal_3ac72bc98c615be3f04619ef1f169900f0d4828c242c3bfd99bf00bd79624965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_1430776a17b0b44c0441d54588df7d39003b9f1581b9b64551cc738108e27648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1430776a17b0b44c0441d54588df7d39003b9f1581b9b64551cc738108e27648->enter($__internal_1430776a17b0b44c0441d54588df7d39003b9f1581b9b64551cc738108e27648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_3ac72bc98c615be3f04619ef1f169900f0d4828c242c3bfd99bf00bd79624965->leave($__internal_3ac72bc98c615be3f04619ef1f169900f0d4828c242c3bfd99bf00bd79624965_prof);

        
        $__internal_1430776a17b0b44c0441d54588df7d39003b9f1581b9b64551cc738108e27648->leave($__internal_1430776a17b0b44c0441d54588df7d39003b9f1581b9b64551cc738108e27648_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
