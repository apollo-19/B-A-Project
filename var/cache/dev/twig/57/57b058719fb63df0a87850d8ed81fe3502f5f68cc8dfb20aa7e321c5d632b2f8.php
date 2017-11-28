<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_a2b079f00ea46b0ca523b1c68a813c5faf2b958c961375da2754bf79afa549a0 extends Twig_Template
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
        $__internal_a1df55028a847a89160e78eab16cf1115bd3c36db4bf475f48154c30453b622e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1df55028a847a89160e78eab16cf1115bd3c36db4bf475f48154c30453b622e->enter($__internal_a1df55028a847a89160e78eab16cf1115bd3c36db4bf475f48154c30453b622e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_2cb64e45783c6ea5992ae9b0829dca740bbc9559104fdfd2b68fdf3990a98ae4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb64e45783c6ea5992ae9b0829dca740bbc9559104fdfd2b68fdf3990a98ae4->enter($__internal_2cb64e45783c6ea5992ae9b0829dca740bbc9559104fdfd2b68fdf3990a98ae4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_a1df55028a847a89160e78eab16cf1115bd3c36db4bf475f48154c30453b622e->leave($__internal_a1df55028a847a89160e78eab16cf1115bd3c36db4bf475f48154c30453b622e_prof);

        
        $__internal_2cb64e45783c6ea5992ae9b0829dca740bbc9559104fdfd2b68fdf3990a98ae4->leave($__internal_2cb64e45783c6ea5992ae9b0829dca740bbc9559104fdfd2b68fdf3990a98ae4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
