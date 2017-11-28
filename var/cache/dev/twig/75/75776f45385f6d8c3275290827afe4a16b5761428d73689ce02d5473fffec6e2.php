<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_c23ca9f22ed00e48e7dc54bb4272e9abad87680fc001638199a83a6562b06463 extends Twig_Template
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
        $__internal_7dc9530987dd084e42856c77ab7bbe1a343659a95bdeacc197ee3a7deb982e63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc9530987dd084e42856c77ab7bbe1a343659a95bdeacc197ee3a7deb982e63->enter($__internal_7dc9530987dd084e42856c77ab7bbe1a343659a95bdeacc197ee3a7deb982e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_193fdfb13aa5c6d5967ac03f9c43f1bce8a42c08e518da9a7dff4d374f6bffab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_193fdfb13aa5c6d5967ac03f9c43f1bce8a42c08e518da9a7dff4d374f6bffab->enter($__internal_193fdfb13aa5c6d5967ac03f9c43f1bce8a42c08e518da9a7dff4d374f6bffab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_7dc9530987dd084e42856c77ab7bbe1a343659a95bdeacc197ee3a7deb982e63->leave($__internal_7dc9530987dd084e42856c77ab7bbe1a343659a95bdeacc197ee3a7deb982e63_prof);

        
        $__internal_193fdfb13aa5c6d5967ac03f9c43f1bce8a42c08e518da9a7dff4d374f6bffab->leave($__internal_193fdfb13aa5c6d5967ac03f9c43f1bce8a42c08e518da9a7dff4d374f6bffab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
