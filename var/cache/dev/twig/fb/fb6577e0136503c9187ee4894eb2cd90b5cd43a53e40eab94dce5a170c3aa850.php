<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_dc877f7ddd8612200a865db254dea07957d021e8dc53252cc566674c569806b6 extends Twig_Template
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
        $__internal_832c9cc60e3eb7df2fdbd519515fd38bc3a71b0290ae308c09d3003b47f54c08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_832c9cc60e3eb7df2fdbd519515fd38bc3a71b0290ae308c09d3003b47f54c08->enter($__internal_832c9cc60e3eb7df2fdbd519515fd38bc3a71b0290ae308c09d3003b47f54c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_870c443e664e724e896e4cb5cd8bb48b0e450dd9c0c959b07068e777e7e181c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_870c443e664e724e896e4cb5cd8bb48b0e450dd9c0c959b07068e777e7e181c8->enter($__internal_870c443e664e724e896e4cb5cd8bb48b0e450dd9c0c959b07068e777e7e181c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_832c9cc60e3eb7df2fdbd519515fd38bc3a71b0290ae308c09d3003b47f54c08->leave($__internal_832c9cc60e3eb7df2fdbd519515fd38bc3a71b0290ae308c09d3003b47f54c08_prof);

        
        $__internal_870c443e664e724e896e4cb5cd8bb48b0e450dd9c0c959b07068e777e7e181c8->leave($__internal_870c443e664e724e896e4cb5cd8bb48b0e450dd9c0c959b07068e777e7e181c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
