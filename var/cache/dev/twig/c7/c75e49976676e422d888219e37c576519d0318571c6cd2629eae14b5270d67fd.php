<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_c4d66944aea51659b6b00039ae5048a9ac015d831b9ceab291319131e0ef243d extends Twig_Template
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
        $__internal_6f2a677bfefcd59feab79fdbd0d5029c9375ff3d406b8709efd83c681f1d2c7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f2a677bfefcd59feab79fdbd0d5029c9375ff3d406b8709efd83c681f1d2c7b->enter($__internal_6f2a677bfefcd59feab79fdbd0d5029c9375ff3d406b8709efd83c681f1d2c7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_95ef702f568e8ac25a447ba04015f3ddb70e2b35abdd5586fd5d68450b180bf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95ef702f568e8ac25a447ba04015f3ddb70e2b35abdd5586fd5d68450b180bf3->enter($__internal_95ef702f568e8ac25a447ba04015f3ddb70e2b35abdd5586fd5d68450b180bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_6f2a677bfefcd59feab79fdbd0d5029c9375ff3d406b8709efd83c681f1d2c7b->leave($__internal_6f2a677bfefcd59feab79fdbd0d5029c9375ff3d406b8709efd83c681f1d2c7b_prof);

        
        $__internal_95ef702f568e8ac25a447ba04015f3ddb70e2b35abdd5586fd5d68450b180bf3->leave($__internal_95ef702f568e8ac25a447ba04015f3ddb70e2b35abdd5586fd5d68450b180bf3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
