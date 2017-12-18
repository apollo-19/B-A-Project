<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_2dfd8aa918acdb0aa52d5b841fa5ef084d9174251fd0f26610a58ce9eca8d635 extends Twig_Template
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
        $__internal_f057ddc91c434d7adafe1d29f5524c81567ca3078daa09f02c0745709b67aa94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f057ddc91c434d7adafe1d29f5524c81567ca3078daa09f02c0745709b67aa94->enter($__internal_f057ddc91c434d7adafe1d29f5524c81567ca3078daa09f02c0745709b67aa94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_b07c3be770e9620e823914fddb2c8cb01efd7deb810337568ded63b80a33fc03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b07c3be770e9620e823914fddb2c8cb01efd7deb810337568ded63b80a33fc03->enter($__internal_b07c3be770e9620e823914fddb2c8cb01efd7deb810337568ded63b80a33fc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_f057ddc91c434d7adafe1d29f5524c81567ca3078daa09f02c0745709b67aa94->leave($__internal_f057ddc91c434d7adafe1d29f5524c81567ca3078daa09f02c0745709b67aa94_prof);

        
        $__internal_b07c3be770e9620e823914fddb2c8cb01efd7deb810337568ded63b80a33fc03->leave($__internal_b07c3be770e9620e823914fddb2c8cb01efd7deb810337568ded63b80a33fc03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
