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
        $__internal_280eab1a06aec36392e84c70827f64857bf55a2d6f2f87dc2558e69f06fbe88a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_280eab1a06aec36392e84c70827f64857bf55a2d6f2f87dc2558e69f06fbe88a->enter($__internal_280eab1a06aec36392e84c70827f64857bf55a2d6f2f87dc2558e69f06fbe88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_df8ec66c2c815cecd0dcf2fa172365caeb542081569d69bd6183bb1803fe88f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df8ec66c2c815cecd0dcf2fa172365caeb542081569d69bd6183bb1803fe88f2->enter($__internal_df8ec66c2c815cecd0dcf2fa172365caeb542081569d69bd6183bb1803fe88f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_280eab1a06aec36392e84c70827f64857bf55a2d6f2f87dc2558e69f06fbe88a->leave($__internal_280eab1a06aec36392e84c70827f64857bf55a2d6f2f87dc2558e69f06fbe88a_prof);

        
        $__internal_df8ec66c2c815cecd0dcf2fa172365caeb542081569d69bd6183bb1803fe88f2->leave($__internal_df8ec66c2c815cecd0dcf2fa172365caeb542081569d69bd6183bb1803fe88f2_prof);

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
", "@Framework/Form/button_row.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
