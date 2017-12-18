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
        $__internal_1af0f9a143bf1489d8964506849c5c098920c88cda3a2aa372e780fd1f2da20c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1af0f9a143bf1489d8964506849c5c098920c88cda3a2aa372e780fd1f2da20c->enter($__internal_1af0f9a143bf1489d8964506849c5c098920c88cda3a2aa372e780fd1f2da20c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_8b34180097be3112d28a86cdea4679f0d055ea49522eb10eb13fda789c0e4e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b34180097be3112d28a86cdea4679f0d055ea49522eb10eb13fda789c0e4e5d->enter($__internal_8b34180097be3112d28a86cdea4679f0d055ea49522eb10eb13fda789c0e4e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1af0f9a143bf1489d8964506849c5c098920c88cda3a2aa372e780fd1f2da20c->leave($__internal_1af0f9a143bf1489d8964506849c5c098920c88cda3a2aa372e780fd1f2da20c_prof);

        
        $__internal_8b34180097be3112d28a86cdea4679f0d055ea49522eb10eb13fda789c0e4e5d->leave($__internal_8b34180097be3112d28a86cdea4679f0d055ea49522eb10eb13fda789c0e4e5d_prof);

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
", "@Framework/Form/widget_container_attributes.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
