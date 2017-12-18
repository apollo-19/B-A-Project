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
        $__internal_0bd6eeb6becb4d98ce2d43191b224f0d24cfd8a091159283acc1ff3ab0734496 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bd6eeb6becb4d98ce2d43191b224f0d24cfd8a091159283acc1ff3ab0734496->enter($__internal_0bd6eeb6becb4d98ce2d43191b224f0d24cfd8a091159283acc1ff3ab0734496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_8e0d0ea12b4fbea1368161aca1db8228d521e98288b0da8d0f4d7f7aaaa2d652 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e0d0ea12b4fbea1368161aca1db8228d521e98288b0da8d0f4d7f7aaaa2d652->enter($__internal_8e0d0ea12b4fbea1368161aca1db8228d521e98288b0da8d0f4d7f7aaaa2d652_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_0bd6eeb6becb4d98ce2d43191b224f0d24cfd8a091159283acc1ff3ab0734496->leave($__internal_0bd6eeb6becb4d98ce2d43191b224f0d24cfd8a091159283acc1ff3ab0734496_prof);

        
        $__internal_8e0d0ea12b4fbea1368161aca1db8228d521e98288b0da8d0f4d7f7aaaa2d652->leave($__internal_8e0d0ea12b4fbea1368161aca1db8228d521e98288b0da8d0f4d7f7aaaa2d652_prof);

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
", "@Framework/Form/percent_widget.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
