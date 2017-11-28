<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_c90bb60ee7e39ceadc9027a4f93417cf1e414564460c46b6079701f480f248d6 extends Twig_Template
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
        $__internal_68d1a550358d5424acdb7f979ea87a6d1daf7aeeccd7672e7f28fecc709a6466 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68d1a550358d5424acdb7f979ea87a6d1daf7aeeccd7672e7f28fecc709a6466->enter($__internal_68d1a550358d5424acdb7f979ea87a6d1daf7aeeccd7672e7f28fecc709a6466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_c25b790d4208471d0f0a359ad57d4978f146f809aecf5517ed5bb5602a14f5e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c25b790d4208471d0f0a359ad57d4978f146f809aecf5517ed5bb5602a14f5e0->enter($__internal_c25b790d4208471d0f0a359ad57d4978f146f809aecf5517ed5bb5602a14f5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_68d1a550358d5424acdb7f979ea87a6d1daf7aeeccd7672e7f28fecc709a6466->leave($__internal_68d1a550358d5424acdb7f979ea87a6d1daf7aeeccd7672e7f28fecc709a6466_prof);

        
        $__internal_c25b790d4208471d0f0a359ad57d4978f146f809aecf5517ed5bb5602a14f5e0->leave($__internal_c25b790d4208471d0f0a359ad57d4978f146f809aecf5517ed5bb5602a14f5e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
