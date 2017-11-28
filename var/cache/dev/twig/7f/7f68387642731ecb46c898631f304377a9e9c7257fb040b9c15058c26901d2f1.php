<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e526a4760453f6c6676b5d80c638a6194d6338df4b7c9d318dd80806995a51e6 extends Twig_Template
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
        $__internal_a0fea512da35dc629269365ee2b12f9db26bdcb7a1c5bed1f1b770b0dc0933b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0fea512da35dc629269365ee2b12f9db26bdcb7a1c5bed1f1b770b0dc0933b2->enter($__internal_a0fea512da35dc629269365ee2b12f9db26bdcb7a1c5bed1f1b770b0dc0933b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_5b037748a0b97e5d896bbe46aaf9596b9f6ae389ea5533421e7f2fa61dda9c7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b037748a0b97e5d896bbe46aaf9596b9f6ae389ea5533421e7f2fa61dda9c7f->enter($__internal_5b037748a0b97e5d896bbe46aaf9596b9f6ae389ea5533421e7f2fa61dda9c7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a0fea512da35dc629269365ee2b12f9db26bdcb7a1c5bed1f1b770b0dc0933b2->leave($__internal_a0fea512da35dc629269365ee2b12f9db26bdcb7a1c5bed1f1b770b0dc0933b2_prof);

        
        $__internal_5b037748a0b97e5d896bbe46aaf9596b9f6ae389ea5533421e7f2fa61dda9c7f->leave($__internal_5b037748a0b97e5d896bbe46aaf9596b9f6ae389ea5533421e7f2fa61dda9c7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
