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
        $__internal_e06adf87d466228e59e6c52fb2a56b10ca899e558dd3a41ff89d882e1af7d391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e06adf87d466228e59e6c52fb2a56b10ca899e558dd3a41ff89d882e1af7d391->enter($__internal_e06adf87d466228e59e6c52fb2a56b10ca899e558dd3a41ff89d882e1af7d391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_02a31a18a3f81c331f1815d24866f6056d2b68aa2d4a773a033a77823d7db4de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02a31a18a3f81c331f1815d24866f6056d2b68aa2d4a773a033a77823d7db4de->enter($__internal_02a31a18a3f81c331f1815d24866f6056d2b68aa2d4a773a033a77823d7db4de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_e06adf87d466228e59e6c52fb2a56b10ca899e558dd3a41ff89d882e1af7d391->leave($__internal_e06adf87d466228e59e6c52fb2a56b10ca899e558dd3a41ff89d882e1af7d391_prof);

        
        $__internal_02a31a18a3f81c331f1815d24866f6056d2b68aa2d4a773a033a77823d7db4de->leave($__internal_02a31a18a3f81c331f1815d24866f6056d2b68aa2d4a773a033a77823d7db4de_prof);

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
", "@Framework/Form/choice_widget.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
