<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_175b6ce867f5a90d57d065b2e25b22389265e3d6d895c4b5f249ac7ce76d5f66 extends Twig_Template
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
        $__internal_3120f83bac803866dc0e15df3b52067bcaae7699bad0ccbd828e770e9a18d01b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3120f83bac803866dc0e15df3b52067bcaae7699bad0ccbd828e770e9a18d01b->enter($__internal_3120f83bac803866dc0e15df3b52067bcaae7699bad0ccbd828e770e9a18d01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_1de89a90d4e5d1718346acf09ce7657c39bb87691e16d75bdc6480f8852d38be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de89a90d4e5d1718346acf09ce7657c39bb87691e16d75bdc6480f8852d38be->enter($__internal_1de89a90d4e5d1718346acf09ce7657c39bb87691e16d75bdc6480f8852d38be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_3120f83bac803866dc0e15df3b52067bcaae7699bad0ccbd828e770e9a18d01b->leave($__internal_3120f83bac803866dc0e15df3b52067bcaae7699bad0ccbd828e770e9a18d01b_prof);

        
        $__internal_1de89a90d4e5d1718346acf09ce7657c39bb87691e16d75bdc6480f8852d38be->leave($__internal_1de89a90d4e5d1718346acf09ce7657c39bb87691e16d75bdc6480f8852d38be_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
