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
        $__internal_f3f80ffcbbc10578bc1411e50fb2de51afaa4205c39320f8c06d589ed598d46f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3f80ffcbbc10578bc1411e50fb2de51afaa4205c39320f8c06d589ed598d46f->enter($__internal_f3f80ffcbbc10578bc1411e50fb2de51afaa4205c39320f8c06d589ed598d46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_9cb6a1aa43da073ac3d7fb89e9856924cc05f0b36692c73cb41e1aee154f4b9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cb6a1aa43da073ac3d7fb89e9856924cc05f0b36692c73cb41e1aee154f4b9a->enter($__internal_9cb6a1aa43da073ac3d7fb89e9856924cc05f0b36692c73cb41e1aee154f4b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_f3f80ffcbbc10578bc1411e50fb2de51afaa4205c39320f8c06d589ed598d46f->leave($__internal_f3f80ffcbbc10578bc1411e50fb2de51afaa4205c39320f8c06d589ed598d46f_prof);

        
        $__internal_9cb6a1aa43da073ac3d7fb89e9856924cc05f0b36692c73cb41e1aee154f4b9a->leave($__internal_9cb6a1aa43da073ac3d7fb89e9856924cc05f0b36692c73cb41e1aee154f4b9a_prof);

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
", "@Framework/Form/form.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
