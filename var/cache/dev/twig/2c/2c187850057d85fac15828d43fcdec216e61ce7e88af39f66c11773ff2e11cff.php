<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_c8948eab21f13e8d1a5944c9aa6a68b35a475a21ebdbde87d9199569f7b41d48 extends Twig_Template
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
        $__internal_a76e7270d442c99509b154c7c3e211689f35125105c425ca54968e89ebeeca1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a76e7270d442c99509b154c7c3e211689f35125105c425ca54968e89ebeeca1d->enter($__internal_a76e7270d442c99509b154c7c3e211689f35125105c425ca54968e89ebeeca1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_8be82c85a8f37f5ffb68d0921b2209c072fe69e8389de56b322358dac5abed7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8be82c85a8f37f5ffb68d0921b2209c072fe69e8389de56b322358dac5abed7f->enter($__internal_8be82c85a8f37f5ffb68d0921b2209c072fe69e8389de56b322358dac5abed7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_a76e7270d442c99509b154c7c3e211689f35125105c425ca54968e89ebeeca1d->leave($__internal_a76e7270d442c99509b154c7c3e211689f35125105c425ca54968e89ebeeca1d_prof);

        
        $__internal_8be82c85a8f37f5ffb68d0921b2209c072fe69e8389de56b322358dac5abed7f->leave($__internal_8be82c85a8f37f5ffb68d0921b2209c072fe69e8389de56b322358dac5abed7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
