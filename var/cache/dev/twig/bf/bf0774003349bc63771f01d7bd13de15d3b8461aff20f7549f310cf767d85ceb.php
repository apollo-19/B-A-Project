<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_1ba13413b4ed4f06f8ac2c03afa72d1213546ef5b2ae1d318b812ffacc9119d1 extends Twig_Template
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
        $__internal_ab9631b0851444f02ada1478c83ca5b57e71da46123bdcf016f59fef067a77ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab9631b0851444f02ada1478c83ca5b57e71da46123bdcf016f59fef067a77ad->enter($__internal_ab9631b0851444f02ada1478c83ca5b57e71da46123bdcf016f59fef067a77ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_c2abf89e72ed025d7dca7932ab8db9d9587f80e8339b0d94b1a9fa53442fb640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2abf89e72ed025d7dca7932ab8db9d9587f80e8339b0d94b1a9fa53442fb640->enter($__internal_c2abf89e72ed025d7dca7932ab8db9d9587f80e8339b0d94b1a9fa53442fb640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_ab9631b0851444f02ada1478c83ca5b57e71da46123bdcf016f59fef067a77ad->leave($__internal_ab9631b0851444f02ada1478c83ca5b57e71da46123bdcf016f59fef067a77ad_prof);

        
        $__internal_c2abf89e72ed025d7dca7932ab8db9d9587f80e8339b0d94b1a9fa53442fb640->leave($__internal_c2abf89e72ed025d7dca7932ab8db9d9587f80e8339b0d94b1a9fa53442fb640_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
