<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_32e3a8b09ed4e8b9ee90d157b50a9da3e653fb7ae8b7dc69517f72419dbfecd7 extends Twig_Template
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
        $__internal_19d886c9dd3fe44126313e075dcdb284fb4be4f28aae3f3537e0c0c8dce2f0c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19d886c9dd3fe44126313e075dcdb284fb4be4f28aae3f3537e0c0c8dce2f0c6->enter($__internal_19d886c9dd3fe44126313e075dcdb284fb4be4f28aae3f3537e0c0c8dce2f0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_7eab660be9a3bf27c186ca18bcfe76b774e74022fe6bc48f363a918a48bde8fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eab660be9a3bf27c186ca18bcfe76b774e74022fe6bc48f363a918a48bde8fb->enter($__internal_7eab660be9a3bf27c186ca18bcfe76b774e74022fe6bc48f363a918a48bde8fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_19d886c9dd3fe44126313e075dcdb284fb4be4f28aae3f3537e0c0c8dce2f0c6->leave($__internal_19d886c9dd3fe44126313e075dcdb284fb4be4f28aae3f3537e0c0c8dce2f0c6_prof);

        
        $__internal_7eab660be9a3bf27c186ca18bcfe76b774e74022fe6bc48f363a918a48bde8fb->leave($__internal_7eab660be9a3bf27c186ca18bcfe76b774e74022fe6bc48f363a918a48bde8fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
