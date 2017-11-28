<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_775d9db8afc98a86adcf98226ce6e6b6996eacc4b800f5c411bd915966d82200 extends Twig_Template
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
        $__internal_b52c7e8f42e787e8c971b368924fc5af146a1b6c1ef09d4a84dda680f5c7746b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b52c7e8f42e787e8c971b368924fc5af146a1b6c1ef09d4a84dda680f5c7746b->enter($__internal_b52c7e8f42e787e8c971b368924fc5af146a1b6c1ef09d4a84dda680f5c7746b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_a594c4b5668b3a2b2f5826feff1ca76f141b852e98ae272f106a2ae27a8b1780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a594c4b5668b3a2b2f5826feff1ca76f141b852e98ae272f106a2ae27a8b1780->enter($__internal_a594c4b5668b3a2b2f5826feff1ca76f141b852e98ae272f106a2ae27a8b1780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_b52c7e8f42e787e8c971b368924fc5af146a1b6c1ef09d4a84dda680f5c7746b->leave($__internal_b52c7e8f42e787e8c971b368924fc5af146a1b6c1ef09d4a84dda680f5c7746b_prof);

        
        $__internal_a594c4b5668b3a2b2f5826feff1ca76f141b852e98ae272f106a2ae27a8b1780->leave($__internal_a594c4b5668b3a2b2f5826feff1ca76f141b852e98ae272f106a2ae27a8b1780_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
