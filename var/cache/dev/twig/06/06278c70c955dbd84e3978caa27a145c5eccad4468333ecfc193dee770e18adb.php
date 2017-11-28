<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_a6a635858d4bb3ab38b30071a9daa1b633dc74026ba4f0fa14d3c39eb77a4952 extends Twig_Template
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
        $__internal_d33159813660620e56fe97e86725c2d1f6a19ea4933c34b4b87febdfb583cb09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d33159813660620e56fe97e86725c2d1f6a19ea4933c34b4b87febdfb583cb09->enter($__internal_d33159813660620e56fe97e86725c2d1f6a19ea4933c34b4b87febdfb583cb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_3ed56856d20270e7ca8323ae0348979de656b678a8b1ab880aff1d80c49c1f20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ed56856d20270e7ca8323ae0348979de656b678a8b1ab880aff1d80c49c1f20->enter($__internal_3ed56856d20270e7ca8323ae0348979de656b678a8b1ab880aff1d80c49c1f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_d33159813660620e56fe97e86725c2d1f6a19ea4933c34b4b87febdfb583cb09->leave($__internal_d33159813660620e56fe97e86725c2d1f6a19ea4933c34b4b87febdfb583cb09_prof);

        
        $__internal_3ed56856d20270e7ca8323ae0348979de656b678a8b1ab880aff1d80c49c1f20->leave($__internal_3ed56856d20270e7ca8323ae0348979de656b678a8b1ab880aff1d80c49c1f20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
