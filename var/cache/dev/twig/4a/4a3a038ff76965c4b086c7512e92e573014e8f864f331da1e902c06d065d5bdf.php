<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b02dfd81140eb2a24a8fb18cd6332cff44805b1d92cb2302754604add0b319f9 extends Twig_Template
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
        $__internal_6c54fa2117864934bcb97d2df956dd7dc9c0ee38c93acd64da0e77b421d784ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c54fa2117864934bcb97d2df956dd7dc9c0ee38c93acd64da0e77b421d784ce->enter($__internal_6c54fa2117864934bcb97d2df956dd7dc9c0ee38c93acd64da0e77b421d784ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_47e7545aa7e1c624ef2270080df339f22f9d5420ae79d2b135116d7c4201fdea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47e7545aa7e1c624ef2270080df339f22f9d5420ae79d2b135116d7c4201fdea->enter($__internal_47e7545aa7e1c624ef2270080df339f22f9d5420ae79d2b135116d7c4201fdea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_6c54fa2117864934bcb97d2df956dd7dc9c0ee38c93acd64da0e77b421d784ce->leave($__internal_6c54fa2117864934bcb97d2df956dd7dc9c0ee38c93acd64da0e77b421d784ce_prof);

        
        $__internal_47e7545aa7e1c624ef2270080df339f22f9d5420ae79d2b135116d7c4201fdea->leave($__internal_47e7545aa7e1c624ef2270080df339f22f9d5420ae79d2b135116d7c4201fdea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
