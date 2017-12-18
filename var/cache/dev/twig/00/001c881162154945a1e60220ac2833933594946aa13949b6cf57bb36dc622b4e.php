<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_295cf4d1232de5526216ca5e347ec33fadab247a9776f06a354337f61068f495 extends Twig_Template
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
        $__internal_6f5b7e5870b8abea54af7735652f630acc7581aa3bc393c36274cca3c68c5e74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f5b7e5870b8abea54af7735652f630acc7581aa3bc393c36274cca3c68c5e74->enter($__internal_6f5b7e5870b8abea54af7735652f630acc7581aa3bc393c36274cca3c68c5e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_bf4770e1291314bc1af784012a87a89cb2368acdea0bc4efba997432fdba9d94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4770e1291314bc1af784012a87a89cb2368acdea0bc4efba997432fdba9d94->enter($__internal_bf4770e1291314bc1af784012a87a89cb2368acdea0bc4efba997432fdba9d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_6f5b7e5870b8abea54af7735652f630acc7581aa3bc393c36274cca3c68c5e74->leave($__internal_6f5b7e5870b8abea54af7735652f630acc7581aa3bc393c36274cca3c68c5e74_prof);

        
        $__internal_bf4770e1291314bc1af784012a87a89cb2368acdea0bc4efba997432fdba9d94->leave($__internal_bf4770e1291314bc1af784012a87a89cb2368acdea0bc4efba997432fdba9d94_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
