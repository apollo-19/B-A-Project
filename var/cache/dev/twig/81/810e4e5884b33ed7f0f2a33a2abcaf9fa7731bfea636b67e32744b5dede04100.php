<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_23d2a24170420de7d4c3e5aed4a2f763687bcaa704969614733b72bfc477a56d extends Twig_Template
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
        $__internal_1a05cd9bcd776f2a2452c98a99bad652f93cf60c3eb07ecdb8e351dc834c7028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a05cd9bcd776f2a2452c98a99bad652f93cf60c3eb07ecdb8e351dc834c7028->enter($__internal_1a05cd9bcd776f2a2452c98a99bad652f93cf60c3eb07ecdb8e351dc834c7028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_b76da756366ffd0f780cbc6fdbcb7b60045c0200daec5dd15019f12862349132 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b76da756366ffd0f780cbc6fdbcb7b60045c0200daec5dd15019f12862349132->enter($__internal_b76da756366ffd0f780cbc6fdbcb7b60045c0200daec5dd15019f12862349132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_1a05cd9bcd776f2a2452c98a99bad652f93cf60c3eb07ecdb8e351dc834c7028->leave($__internal_1a05cd9bcd776f2a2452c98a99bad652f93cf60c3eb07ecdb8e351dc834c7028_prof);

        
        $__internal_b76da756366ffd0f780cbc6fdbcb7b60045c0200daec5dd15019f12862349132->leave($__internal_b76da756366ffd0f780cbc6fdbcb7b60045c0200daec5dd15019f12862349132_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
