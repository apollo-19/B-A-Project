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
        $__internal_c2d1deca2305da6677cf4085f56ffad3c9f6d3029f75f051e23cdd9cbcb1a5e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2d1deca2305da6677cf4085f56ffad3c9f6d3029f75f051e23cdd9cbcb1a5e0->enter($__internal_c2d1deca2305da6677cf4085f56ffad3c9f6d3029f75f051e23cdd9cbcb1a5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_f13a2d81ed8543b8273c4cb3500b735013df4e75555e68aea37b8e36cad296c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f13a2d81ed8543b8273c4cb3500b735013df4e75555e68aea37b8e36cad296c3->enter($__internal_f13a2d81ed8543b8273c4cb3500b735013df4e75555e68aea37b8e36cad296c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c2d1deca2305da6677cf4085f56ffad3c9f6d3029f75f051e23cdd9cbcb1a5e0->leave($__internal_c2d1deca2305da6677cf4085f56ffad3c9f6d3029f75f051e23cdd9cbcb1a5e0_prof);

        
        $__internal_f13a2d81ed8543b8273c4cb3500b735013df4e75555e68aea37b8e36cad296c3->leave($__internal_f13a2d81ed8543b8273c4cb3500b735013df4e75555e68aea37b8e36cad296c3_prof);

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
", "@Framework/Form/hidden_widget.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
