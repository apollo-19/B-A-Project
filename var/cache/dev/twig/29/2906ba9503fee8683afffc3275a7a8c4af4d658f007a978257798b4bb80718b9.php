<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_2c98d7dda513a28e40954cf0fe4f994038abd57bf1c7e44dd11bb7e023e5e1e0 extends Twig_Template
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
        $__internal_7938e845e18b2d336ac9e217166767c78abc283cc55860567c3f565e01bc5c71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7938e845e18b2d336ac9e217166767c78abc283cc55860567c3f565e01bc5c71->enter($__internal_7938e845e18b2d336ac9e217166767c78abc283cc55860567c3f565e01bc5c71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_a6e6768f8f2f9c127de037a469255441fecc8535bccb317d85c31bf6da0bf1f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6e6768f8f2f9c127de037a469255441fecc8535bccb317d85c31bf6da0bf1f1->enter($__internal_a6e6768f8f2f9c127de037a469255441fecc8535bccb317d85c31bf6da0bf1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_7938e845e18b2d336ac9e217166767c78abc283cc55860567c3f565e01bc5c71->leave($__internal_7938e845e18b2d336ac9e217166767c78abc283cc55860567c3f565e01bc5c71_prof);

        
        $__internal_a6e6768f8f2f9c127de037a469255441fecc8535bccb317d85c31bf6da0bf1f1->leave($__internal_a6e6768f8f2f9c127de037a469255441fecc8535bccb317d85c31bf6da0bf1f1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
