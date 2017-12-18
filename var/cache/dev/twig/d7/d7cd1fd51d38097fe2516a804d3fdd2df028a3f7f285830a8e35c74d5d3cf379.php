<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_3caf6e65f122c85d80570a97d8460867e5eab2af60bd6b4a0da35d6c33fadfda extends Twig_Template
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
        $__internal_1f344d387d4a718e10186bf3eba13b716d0703f5559bc2d68093990d269c828e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f344d387d4a718e10186bf3eba13b716d0703f5559bc2d68093990d269c828e->enter($__internal_1f344d387d4a718e10186bf3eba13b716d0703f5559bc2d68093990d269c828e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_c8521c3977090b072c8e139495ea21e8d0fa03655759667fab8e96e8564df4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8521c3977090b072c8e139495ea21e8d0fa03655759667fab8e96e8564df4a0->enter($__internal_c8521c3977090b072c8e139495ea21e8d0fa03655759667fab8e96e8564df4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1f344d387d4a718e10186bf3eba13b716d0703f5559bc2d68093990d269c828e->leave($__internal_1f344d387d4a718e10186bf3eba13b716d0703f5559bc2d68093990d269c828e_prof);

        
        $__internal_c8521c3977090b072c8e139495ea21e8d0fa03655759667fab8e96e8564df4a0->leave($__internal_c8521c3977090b072c8e139495ea21e8d0fa03655759667fab8e96e8564df4a0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
