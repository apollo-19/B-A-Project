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
        $__internal_5d372cdad25deb62f24668c3c9d5da5a04d34e1a56bb69297d4f46270b6f2485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d372cdad25deb62f24668c3c9d5da5a04d34e1a56bb69297d4f46270b6f2485->enter($__internal_5d372cdad25deb62f24668c3c9d5da5a04d34e1a56bb69297d4f46270b6f2485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_495b5feaaf9f32c125311d76eeb1c32095701f790fbcdd4970211268fefcbaa4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_495b5feaaf9f32c125311d76eeb1c32095701f790fbcdd4970211268fefcbaa4->enter($__internal_495b5feaaf9f32c125311d76eeb1c32095701f790fbcdd4970211268fefcbaa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_5d372cdad25deb62f24668c3c9d5da5a04d34e1a56bb69297d4f46270b6f2485->leave($__internal_5d372cdad25deb62f24668c3c9d5da5a04d34e1a56bb69297d4f46270b6f2485_prof);

        
        $__internal_495b5feaaf9f32c125311d76eeb1c32095701f790fbcdd4970211268fefcbaa4->leave($__internal_495b5feaaf9f32c125311d76eeb1c32095701f790fbcdd4970211268fefcbaa4_prof);

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
", "@Framework/Form/form_rest.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
