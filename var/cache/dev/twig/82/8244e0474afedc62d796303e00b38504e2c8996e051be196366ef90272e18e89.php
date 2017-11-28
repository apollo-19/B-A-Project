<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_103e10cc104c0b40daf4b4fe99961f77bd9645f170ff7cb7bad7d4b8e86ad26c extends Twig_Template
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
        $__internal_d6d61005496232ab8c960908e71773c35142661720a217cf02a464935de176d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6d61005496232ab8c960908e71773c35142661720a217cf02a464935de176d5->enter($__internal_d6d61005496232ab8c960908e71773c35142661720a217cf02a464935de176d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_a5fbac188739e94cd4eaaf1a5a5d131225fd8e63782a56cfee4a9b96ab5da604 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5fbac188739e94cd4eaaf1a5a5d131225fd8e63782a56cfee4a9b96ab5da604->enter($__internal_a5fbac188739e94cd4eaaf1a5a5d131225fd8e63782a56cfee4a9b96ab5da604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_d6d61005496232ab8c960908e71773c35142661720a217cf02a464935de176d5->leave($__internal_d6d61005496232ab8c960908e71773c35142661720a217cf02a464935de176d5_prof);

        
        $__internal_a5fbac188739e94cd4eaaf1a5a5d131225fd8e63782a56cfee4a9b96ab5da604->leave($__internal_a5fbac188739e94cd4eaaf1a5a5d131225fd8e63782a56cfee4a9b96ab5da604_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
