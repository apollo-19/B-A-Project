<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_5a3f6cf6086d484b923836b0a12f513cb56c7628150a5bb964f028a5858c76b5 extends Twig_Template
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
        $__internal_82603770efafef3ace2801fc337b6318b774248cea8d40888891cd368d7ede71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82603770efafef3ace2801fc337b6318b774248cea8d40888891cd368d7ede71->enter($__internal_82603770efafef3ace2801fc337b6318b774248cea8d40888891cd368d7ede71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_67438fd51d7c8d101a4e6caa5a8b4302b47789a009cc4894d0d91180c0108841 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67438fd51d7c8d101a4e6caa5a8b4302b47789a009cc4894d0d91180c0108841->enter($__internal_67438fd51d7c8d101a4e6caa5a8b4302b47789a009cc4894d0d91180c0108841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_82603770efafef3ace2801fc337b6318b774248cea8d40888891cd368d7ede71->leave($__internal_82603770efafef3ace2801fc337b6318b774248cea8d40888891cd368d7ede71_prof);

        
        $__internal_67438fd51d7c8d101a4e6caa5a8b4302b47789a009cc4894d0d91180c0108841->leave($__internal_67438fd51d7c8d101a4e6caa5a8b4302b47789a009cc4894d0d91180c0108841_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
