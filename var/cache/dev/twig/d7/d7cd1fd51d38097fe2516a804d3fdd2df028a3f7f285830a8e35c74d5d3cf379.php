<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_3caf6e65f122c85d80570a97d8460867e5eab2af60bd6b4a0da35d6c33fadfda extends Twig_Template
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
        $__internal_a25dd58e6ca23e82f6159e504b94477c41a10ecf490fe6ada68c529db38f37d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a25dd58e6ca23e82f6159e504b94477c41a10ecf490fe6ada68c529db38f37d9->enter($__internal_a25dd58e6ca23e82f6159e504b94477c41a10ecf490fe6ada68c529db38f37d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_caedf0c007fc22009fb689356137971c40ab5826819020a0e7107b19583ab85a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caedf0c007fc22009fb689356137971c40ab5826819020a0e7107b19583ab85a->enter($__internal_caedf0c007fc22009fb689356137971c40ab5826819020a0e7107b19583ab85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a25dd58e6ca23e82f6159e504b94477c41a10ecf490fe6ada68c529db38f37d9->leave($__internal_a25dd58e6ca23e82f6159e504b94477c41a10ecf490fe6ada68c529db38f37d9_prof);

        
        $__internal_caedf0c007fc22009fb689356137971c40ab5826819020a0e7107b19583ab85a->leave($__internal_caedf0c007fc22009fb689356137971c40ab5826819020a0e7107b19583ab85a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
