<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_2ec95887635f7f9e31f0aed95da2f95113b36e08e59ea8c0977b6c95cb537bd6 extends Twig_Template
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
        $__internal_b9a1ad5dcbc0de4e8876b9a859477bb9b5ccddeaa6a63d851ec68a0e6d939699 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9a1ad5dcbc0de4e8876b9a859477bb9b5ccddeaa6a63d851ec68a0e6d939699->enter($__internal_b9a1ad5dcbc0de4e8876b9a859477bb9b5ccddeaa6a63d851ec68a0e6d939699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_20177479e84d9b248f4b7fedd08281f395eaa241ea4c77ac3fd1e89546b28990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20177479e84d9b248f4b7fedd08281f395eaa241ea4c77ac3fd1e89546b28990->enter($__internal_20177479e84d9b248f4b7fedd08281f395eaa241ea4c77ac3fd1e89546b28990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b9a1ad5dcbc0de4e8876b9a859477bb9b5ccddeaa6a63d851ec68a0e6d939699->leave($__internal_b9a1ad5dcbc0de4e8876b9a859477bb9b5ccddeaa6a63d851ec68a0e6d939699_prof);

        
        $__internal_20177479e84d9b248f4b7fedd08281f395eaa241ea4c77ac3fd1e89546b28990->leave($__internal_20177479e84d9b248f4b7fedd08281f395eaa241ea4c77ac3fd1e89546b28990_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
