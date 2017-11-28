<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_5f485990e19975f2fc49879b76b3dbef14e71bbc44366a68a96b2e5ff040571b extends Twig_Template
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
        $__internal_ccb86c8abd02a8ac8075b24962f4f84c70e557e813a55ae5fc0654fcf305edc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccb86c8abd02a8ac8075b24962f4f84c70e557e813a55ae5fc0654fcf305edc2->enter($__internal_ccb86c8abd02a8ac8075b24962f4f84c70e557e813a55ae5fc0654fcf305edc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_a170b313c30fd31f269c4e982c6813895e9078f6e0c8c8e5c7756935ab5dcb38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a170b313c30fd31f269c4e982c6813895e9078f6e0c8c8e5c7756935ab5dcb38->enter($__internal_a170b313c30fd31f269c4e982c6813895e9078f6e0c8c8e5c7756935ab5dcb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ccb86c8abd02a8ac8075b24962f4f84c70e557e813a55ae5fc0654fcf305edc2->leave($__internal_ccb86c8abd02a8ac8075b24962f4f84c70e557e813a55ae5fc0654fcf305edc2_prof);

        
        $__internal_a170b313c30fd31f269c4e982c6813895e9078f6e0c8c8e5c7756935ab5dcb38->leave($__internal_a170b313c30fd31f269c4e982c6813895e9078f6e0c8c8e5c7756935ab5dcb38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
