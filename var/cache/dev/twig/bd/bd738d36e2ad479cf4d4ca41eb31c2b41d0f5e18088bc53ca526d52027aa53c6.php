<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_4c54f61988717b350e8df03ba01d18691275efdddf84462d85981f91b3ee8baa extends Twig_Template
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
        $__internal_298bcbcec0595a70e4f8ffb26f8472f41b5c5faa945b9fded4ad223fafc0c76f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_298bcbcec0595a70e4f8ffb26f8472f41b5c5faa945b9fded4ad223fafc0c76f->enter($__internal_298bcbcec0595a70e4f8ffb26f8472f41b5c5faa945b9fded4ad223fafc0c76f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_d8aef06f88c8d0f8a3cf0191bbec75395f12fa548097a297c570dcbb384465a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8aef06f88c8d0f8a3cf0191bbec75395f12fa548097a297c570dcbb384465a2->enter($__internal_d8aef06f88c8d0f8a3cf0191bbec75395f12fa548097a297c570dcbb384465a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_298bcbcec0595a70e4f8ffb26f8472f41b5c5faa945b9fded4ad223fafc0c76f->leave($__internal_298bcbcec0595a70e4f8ffb26f8472f41b5c5faa945b9fded4ad223fafc0c76f_prof);

        
        $__internal_d8aef06f88c8d0f8a3cf0191bbec75395f12fa548097a297c570dcbb384465a2->leave($__internal_d8aef06f88c8d0f8a3cf0191bbec75395f12fa548097a297c570dcbb384465a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
