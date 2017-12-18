<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_8a862fb6d30ff5910b1b3bef696c4f28b770c900dd3f91037dd793d5bcc44567 extends Twig_Template
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
        $__internal_b6cf96da5147598167a989c63a399bf123dfa0aac75509aed5f6a8b06fb8be44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6cf96da5147598167a989c63a399bf123dfa0aac75509aed5f6a8b06fb8be44->enter($__internal_b6cf96da5147598167a989c63a399bf123dfa0aac75509aed5f6a8b06fb8be44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_6ee91ffea3e2631da386442ee2658c01d2df05f5e53a6a006625e07be0ea6eae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ee91ffea3e2631da386442ee2658c01d2df05f5e53a6a006625e07be0ea6eae->enter($__internal_6ee91ffea3e2631da386442ee2658c01d2df05f5e53a6a006625e07be0ea6eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_b6cf96da5147598167a989c63a399bf123dfa0aac75509aed5f6a8b06fb8be44->leave($__internal_b6cf96da5147598167a989c63a399bf123dfa0aac75509aed5f6a8b06fb8be44_prof);

        
        $__internal_6ee91ffea3e2631da386442ee2658c01d2df05f5e53a6a006625e07be0ea6eae->leave($__internal_6ee91ffea3e2631da386442ee2658c01d2df05f5e53a6a006625e07be0ea6eae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
