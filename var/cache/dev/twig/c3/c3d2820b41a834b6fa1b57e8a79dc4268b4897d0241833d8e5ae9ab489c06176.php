<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5c060836cae49a47269375db264f99d66a38d16e07ebf891f345d4cc2de7bff2 extends Twig_Template
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
        $__internal_b0d1e996315448ceb879399ee4e0693d778b9a991aa28301a4f80c7b0150dc35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0d1e996315448ceb879399ee4e0693d778b9a991aa28301a4f80c7b0150dc35->enter($__internal_b0d1e996315448ceb879399ee4e0693d778b9a991aa28301a4f80c7b0150dc35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_3124659b83a2c74d96b74099f2aa6f279ddb6977712b9a724546dba71df2cb1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3124659b83a2c74d96b74099f2aa6f279ddb6977712b9a724546dba71df2cb1b->enter($__internal_3124659b83a2c74d96b74099f2aa6f279ddb6977712b9a724546dba71df2cb1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_b0d1e996315448ceb879399ee4e0693d778b9a991aa28301a4f80c7b0150dc35->leave($__internal_b0d1e996315448ceb879399ee4e0693d778b9a991aa28301a4f80c7b0150dc35_prof);

        
        $__internal_3124659b83a2c74d96b74099f2aa6f279ddb6977712b9a724546dba71df2cb1b->leave($__internal_3124659b83a2c74d96b74099f2aa6f279ddb6977712b9a724546dba71df2cb1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
