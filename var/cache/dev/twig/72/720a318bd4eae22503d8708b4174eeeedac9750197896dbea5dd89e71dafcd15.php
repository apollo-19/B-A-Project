<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_1006cb356c07f1270455ea1e1f243123479d73ba3df7307a9bf992308f1c868f extends Twig_Template
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
        $__internal_75104955a39804d7bedccacfd55bb2e4537f2f85959e3e445f598d0f7f24c9dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75104955a39804d7bedccacfd55bb2e4537f2f85959e3e445f598d0f7f24c9dd->enter($__internal_75104955a39804d7bedccacfd55bb2e4537f2f85959e3e445f598d0f7f24c9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_27f02443e119bc92035249c892561502fec9a0da9e5da063aa4890471b83a067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27f02443e119bc92035249c892561502fec9a0da9e5da063aa4890471b83a067->enter($__internal_27f02443e119bc92035249c892561502fec9a0da9e5da063aa4890471b83a067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_75104955a39804d7bedccacfd55bb2e4537f2f85959e3e445f598d0f7f24c9dd->leave($__internal_75104955a39804d7bedccacfd55bb2e4537f2f85959e3e445f598d0f7f24c9dd_prof);

        
        $__internal_27f02443e119bc92035249c892561502fec9a0da9e5da063aa4890471b83a067->leave($__internal_27f02443e119bc92035249c892561502fec9a0da9e5da063aa4890471b83a067_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/range_widget.html.php");
    }
}
