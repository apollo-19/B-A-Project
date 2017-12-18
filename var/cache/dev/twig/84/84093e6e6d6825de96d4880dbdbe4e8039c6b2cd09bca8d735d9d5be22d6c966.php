<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b790b556d58827420fdcc2bef1b5d2eca9c8fb56c50a3e391e0f0475be3dd7f4 extends Twig_Template
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
        $__internal_a143dab19772d177ec0d02336c0a77b89d7164da7bbda0e75a9580f037984214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a143dab19772d177ec0d02336c0a77b89d7164da7bbda0e75a9580f037984214->enter($__internal_a143dab19772d177ec0d02336c0a77b89d7164da7bbda0e75a9580f037984214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_81bf8f50a0a83db576185f8d69cf78e0fe684df6f0ba7826386199c9ed9009bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81bf8f50a0a83db576185f8d69cf78e0fe684df6f0ba7826386199c9ed9009bd->enter($__internal_81bf8f50a0a83db576185f8d69cf78e0fe684df6f0ba7826386199c9ed9009bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a143dab19772d177ec0d02336c0a77b89d7164da7bbda0e75a9580f037984214->leave($__internal_a143dab19772d177ec0d02336c0a77b89d7164da7bbda0e75a9580f037984214_prof);

        
        $__internal_81bf8f50a0a83db576185f8d69cf78e0fe684df6f0ba7826386199c9ed9009bd->leave($__internal_81bf8f50a0a83db576185f8d69cf78e0fe684df6f0ba7826386199c9ed9009bd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
