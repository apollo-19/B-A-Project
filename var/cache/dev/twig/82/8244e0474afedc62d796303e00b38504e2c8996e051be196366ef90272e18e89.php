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
        $__internal_b6511417a5bb44d5b3ca081006d148ebb370465184e2a8a0ab551af1016b4d62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6511417a5bb44d5b3ca081006d148ebb370465184e2a8a0ab551af1016b4d62->enter($__internal_b6511417a5bb44d5b3ca081006d148ebb370465184e2a8a0ab551af1016b4d62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_c2ce7bab7c5e0152e1603ff06e50ae2eb90398d498b202b0837d44d9237236dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2ce7bab7c5e0152e1603ff06e50ae2eb90398d498b202b0837d44d9237236dd->enter($__internal_c2ce7bab7c5e0152e1603ff06e50ae2eb90398d498b202b0837d44d9237236dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b6511417a5bb44d5b3ca081006d148ebb370465184e2a8a0ab551af1016b4d62->leave($__internal_b6511417a5bb44d5b3ca081006d148ebb370465184e2a8a0ab551af1016b4d62_prof);

        
        $__internal_c2ce7bab7c5e0152e1603ff06e50ae2eb90398d498b202b0837d44d9237236dd->leave($__internal_c2ce7bab7c5e0152e1603ff06e50ae2eb90398d498b202b0837d44d9237236dd_prof);

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
", "@Framework/Form/form_errors.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
