<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_2c98d7dda513a28e40954cf0fe4f994038abd57bf1c7e44dd11bb7e023e5e1e0 extends Twig_Template
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
        $__internal_b54c2c6ee0e2ed611fe73bb1abcb4751faa62d8c4515785f88873e7e3b2d83c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b54c2c6ee0e2ed611fe73bb1abcb4751faa62d8c4515785f88873e7e3b2d83c3->enter($__internal_b54c2c6ee0e2ed611fe73bb1abcb4751faa62d8c4515785f88873e7e3b2d83c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_7d1d9b2fefd8be0079e15bc0133a7318dd11b02f15e80950f26420736d8e151e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d1d9b2fefd8be0079e15bc0133a7318dd11b02f15e80950f26420736d8e151e->enter($__internal_7d1d9b2fefd8be0079e15bc0133a7318dd11b02f15e80950f26420736d8e151e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_b54c2c6ee0e2ed611fe73bb1abcb4751faa62d8c4515785f88873e7e3b2d83c3->leave($__internal_b54c2c6ee0e2ed611fe73bb1abcb4751faa62d8c4515785f88873e7e3b2d83c3_prof);

        
        $__internal_7d1d9b2fefd8be0079e15bc0133a7318dd11b02f15e80950f26420736d8e151e->leave($__internal_7d1d9b2fefd8be0079e15bc0133a7318dd11b02f15e80950f26420736d8e151e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
