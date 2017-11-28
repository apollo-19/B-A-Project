<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_fd9884ea6e69926d08e06aa018a95bc85a683fa90791ffcd74a6d168addbfc0c extends Twig_Template
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
        $__internal_cb42970a74e6adc1a9eaf19dec7f7e0db5bb8c447b305e11965c3611d96ef558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb42970a74e6adc1a9eaf19dec7f7e0db5bb8c447b305e11965c3611d96ef558->enter($__internal_cb42970a74e6adc1a9eaf19dec7f7e0db5bb8c447b305e11965c3611d96ef558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_95cad5a390c18692df4620a8c8e67b794cd9f64513444b5a230a97ab6b3ecc06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95cad5a390c18692df4620a8c8e67b794cd9f64513444b5a230a97ab6b3ecc06->enter($__internal_95cad5a390c18692df4620a8c8e67b794cd9f64513444b5a230a97ab6b3ecc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_cb42970a74e6adc1a9eaf19dec7f7e0db5bb8c447b305e11965c3611d96ef558->leave($__internal_cb42970a74e6adc1a9eaf19dec7f7e0db5bb8c447b305e11965c3611d96ef558_prof);

        
        $__internal_95cad5a390c18692df4620a8c8e67b794cd9f64513444b5a230a97ab6b3ecc06->leave($__internal_95cad5a390c18692df4620a8c8e67b794cd9f64513444b5a230a97ab6b3ecc06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
