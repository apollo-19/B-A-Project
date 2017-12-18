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
        $__internal_de3ce292e1629b87a3aaf6ec8f34787d0476154bef71b4b1f8ed69d27c76ed43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de3ce292e1629b87a3aaf6ec8f34787d0476154bef71b4b1f8ed69d27c76ed43->enter($__internal_de3ce292e1629b87a3aaf6ec8f34787d0476154bef71b4b1f8ed69d27c76ed43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_61160f64a5d5cde537d7fe0122a6daf62165422e17b9f26b675e9245274b1221 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61160f64a5d5cde537d7fe0122a6daf62165422e17b9f26b675e9245274b1221->enter($__internal_61160f64a5d5cde537d7fe0122a6daf62165422e17b9f26b675e9245274b1221_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_de3ce292e1629b87a3aaf6ec8f34787d0476154bef71b4b1f8ed69d27c76ed43->leave($__internal_de3ce292e1629b87a3aaf6ec8f34787d0476154bef71b4b1f8ed69d27c76ed43_prof);

        
        $__internal_61160f64a5d5cde537d7fe0122a6daf62165422e17b9f26b675e9245274b1221->leave($__internal_61160f64a5d5cde537d7fe0122a6daf62165422e17b9f26b675e9245274b1221_prof);

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
", "@Framework/Form/integer_widget.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
