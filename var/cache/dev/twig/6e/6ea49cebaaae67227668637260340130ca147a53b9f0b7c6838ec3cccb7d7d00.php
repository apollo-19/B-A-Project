<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_f52bdca62a5473a7fd94aa25b31fb4737d0bb6c811af47339e502ba9f8d44684 extends Twig_Template
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
        $__internal_a90d6c263b2f44d4a9c4c3aaf79fc86a957253a77eef0b45900d3d905d0fb240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a90d6c263b2f44d4a9c4c3aaf79fc86a957253a77eef0b45900d3d905d0fb240->enter($__internal_a90d6c263b2f44d4a9c4c3aaf79fc86a957253a77eef0b45900d3d905d0fb240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_6ec36108b7cc741629b9a19f1ef0f8701ff82b92c670a491f51010bd9c0443d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec36108b7cc741629b9a19f1ef0f8701ff82b92c670a491f51010bd9c0443d5->enter($__internal_6ec36108b7cc741629b9a19f1ef0f8701ff82b92c670a491f51010bd9c0443d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_a90d6c263b2f44d4a9c4c3aaf79fc86a957253a77eef0b45900d3d905d0fb240->leave($__internal_a90d6c263b2f44d4a9c4c3aaf79fc86a957253a77eef0b45900d3d905d0fb240_prof);

        
        $__internal_6ec36108b7cc741629b9a19f1ef0f8701ff82b92c670a491f51010bd9c0443d5->leave($__internal_6ec36108b7cc741629b9a19f1ef0f8701ff82b92c670a491f51010bd9c0443d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
