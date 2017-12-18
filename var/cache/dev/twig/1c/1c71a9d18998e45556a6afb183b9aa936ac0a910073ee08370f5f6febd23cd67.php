<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e929bec2e6a149b6930b05325c178490343a7a918507da619e91abbae1879c4e extends Twig_Template
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
        $__internal_eff895c3488ff38df995894335b56af212eedf0a03fcebe0c4c074f7a58f834f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eff895c3488ff38df995894335b56af212eedf0a03fcebe0c4c074f7a58f834f->enter($__internal_eff895c3488ff38df995894335b56af212eedf0a03fcebe0c4c074f7a58f834f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_1252271a93cfd01a8ddd07d2c0e7a60550f9043e56957dd6edfb2c2fb9286e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1252271a93cfd01a8ddd07d2c0e7a60550f9043e56957dd6edfb2c2fb9286e91->enter($__internal_1252271a93cfd01a8ddd07d2c0e7a60550f9043e56957dd6edfb2c2fb9286e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_eff895c3488ff38df995894335b56af212eedf0a03fcebe0c4c074f7a58f834f->leave($__internal_eff895c3488ff38df995894335b56af212eedf0a03fcebe0c4c074f7a58f834f_prof);

        
        $__internal_1252271a93cfd01a8ddd07d2c0e7a60550f9043e56957dd6edfb2c2fb9286e91->leave($__internal_1252271a93cfd01a8ddd07d2c0e7a60550f9043e56957dd6edfb2c2fb9286e91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
