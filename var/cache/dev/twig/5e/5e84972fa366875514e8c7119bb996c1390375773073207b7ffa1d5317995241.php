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
        $__internal_99dfbc9bb9f9a5db3e1c129f6e4c5339e396a1e5f78d61f4646768fd8fa014ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99dfbc9bb9f9a5db3e1c129f6e4c5339e396a1e5f78d61f4646768fd8fa014ce->enter($__internal_99dfbc9bb9f9a5db3e1c129f6e4c5339e396a1e5f78d61f4646768fd8fa014ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_e92d1a189ce2771d5eacc4c0b3d277ab1d08cdeb3ecc86418fe119e2ed6c8f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e92d1a189ce2771d5eacc4c0b3d277ab1d08cdeb3ecc86418fe119e2ed6c8f58->enter($__internal_e92d1a189ce2771d5eacc4c0b3d277ab1d08cdeb3ecc86418fe119e2ed6c8f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_99dfbc9bb9f9a5db3e1c129f6e4c5339e396a1e5f78d61f4646768fd8fa014ce->leave($__internal_99dfbc9bb9f9a5db3e1c129f6e4c5339e396a1e5f78d61f4646768fd8fa014ce_prof);

        
        $__internal_e92d1a189ce2771d5eacc4c0b3d277ab1d08cdeb3ecc86418fe119e2ed6c8f58->leave($__internal_e92d1a189ce2771d5eacc4c0b3d277ab1d08cdeb3ecc86418fe119e2ed6c8f58_prof);

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
", "@Framework/Form/number_widget.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
