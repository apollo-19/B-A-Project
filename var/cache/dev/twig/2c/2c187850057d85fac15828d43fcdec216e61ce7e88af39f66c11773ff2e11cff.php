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
        $__internal_3a6031eceaceec8e0ef0ed02a1de5844586b65de327216612c07132343278c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a6031eceaceec8e0ef0ed02a1de5844586b65de327216612c07132343278c8c->enter($__internal_3a6031eceaceec8e0ef0ed02a1de5844586b65de327216612c07132343278c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_ecb103012092a5ed03f00adb0b5aa689a0fbb8c9ee4c4d5a852362ecc95f4819 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb103012092a5ed03f00adb0b5aa689a0fbb8c9ee4c4d5a852362ecc95f4819->enter($__internal_ecb103012092a5ed03f00adb0b5aa689a0fbb8c9ee4c4d5a852362ecc95f4819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_3a6031eceaceec8e0ef0ed02a1de5844586b65de327216612c07132343278c8c->leave($__internal_3a6031eceaceec8e0ef0ed02a1de5844586b65de327216612c07132343278c8c_prof);

        
        $__internal_ecb103012092a5ed03f00adb0b5aa689a0fbb8c9ee4c4d5a852362ecc95f4819->leave($__internal_ecb103012092a5ed03f00adb0b5aa689a0fbb8c9ee4c4d5a852362ecc95f4819_prof);

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
", "@Framework/Form/hidden_row.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
