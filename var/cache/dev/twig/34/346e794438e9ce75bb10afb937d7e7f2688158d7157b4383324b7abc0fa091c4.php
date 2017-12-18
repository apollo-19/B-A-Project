<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_152be14bf245dde0993fee44ab57b03b6f71fae4ee64224036a160eba6407aa6 extends Twig_Template
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
        $__internal_8e8304b2b9daddc3e0dea2d3c4482ebb2bea82d39420d85a473c72258dc4767f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e8304b2b9daddc3e0dea2d3c4482ebb2bea82d39420d85a473c72258dc4767f->enter($__internal_8e8304b2b9daddc3e0dea2d3c4482ebb2bea82d39420d85a473c72258dc4767f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_32f52d935654abbea6348a95211eb870ecff4983190498c8ad21d27d217cd003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32f52d935654abbea6348a95211eb870ecff4983190498c8ad21d27d217cd003->enter($__internal_32f52d935654abbea6348a95211eb870ecff4983190498c8ad21d27d217cd003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_8e8304b2b9daddc3e0dea2d3c4482ebb2bea82d39420d85a473c72258dc4767f->leave($__internal_8e8304b2b9daddc3e0dea2d3c4482ebb2bea82d39420d85a473c72258dc4767f_prof);

        
        $__internal_32f52d935654abbea6348a95211eb870ecff4983190498c8ad21d27d217cd003->leave($__internal_32f52d935654abbea6348a95211eb870ecff4983190498c8ad21d27d217cd003_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
