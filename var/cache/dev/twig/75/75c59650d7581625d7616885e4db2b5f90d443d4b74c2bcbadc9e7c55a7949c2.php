<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_cd665b4961e8ff189fad7ba52230790b95be514d9def5f1d7c72958f14873073 extends Twig_Template
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
        $__internal_5a3ad31a685cf15d1367a6d24fe58b2d23342bc2c3c12d80b5038b6b22f1aa6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a3ad31a685cf15d1367a6d24fe58b2d23342bc2c3c12d80b5038b6b22f1aa6f->enter($__internal_5a3ad31a685cf15d1367a6d24fe58b2d23342bc2c3c12d80b5038b6b22f1aa6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_391687b79c96941c12041049de7ee84862bb58b0f3e3fe342f7f4e8885258c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391687b79c96941c12041049de7ee84862bb58b0f3e3fe342f7f4e8885258c4a->enter($__internal_391687b79c96941c12041049de7ee84862bb58b0f3e3fe342f7f4e8885258c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_5a3ad31a685cf15d1367a6d24fe58b2d23342bc2c3c12d80b5038b6b22f1aa6f->leave($__internal_5a3ad31a685cf15d1367a6d24fe58b2d23342bc2c3c12d80b5038b6b22f1aa6f_prof);

        
        $__internal_391687b79c96941c12041049de7ee84862bb58b0f3e3fe342f7f4e8885258c4a->leave($__internal_391687b79c96941c12041049de7ee84862bb58b0f3e3fe342f7f4e8885258c4a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
