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
        $__internal_abf58eedaf134e2ad449bb4db2edcf59ddf2cc7d7a67b0dfed1ed76310fa8e7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abf58eedaf134e2ad449bb4db2edcf59ddf2cc7d7a67b0dfed1ed76310fa8e7f->enter($__internal_abf58eedaf134e2ad449bb4db2edcf59ddf2cc7d7a67b0dfed1ed76310fa8e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_2cc4d518cf4232ad2183e2d6936d3598a4f2fecf939e7155ff058d2bc0ee2658 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cc4d518cf4232ad2183e2d6936d3598a4f2fecf939e7155ff058d2bc0ee2658->enter($__internal_2cc4d518cf4232ad2183e2d6936d3598a4f2fecf939e7155ff058d2bc0ee2658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_abf58eedaf134e2ad449bb4db2edcf59ddf2cc7d7a67b0dfed1ed76310fa8e7f->leave($__internal_abf58eedaf134e2ad449bb4db2edcf59ddf2cc7d7a67b0dfed1ed76310fa8e7f_prof);

        
        $__internal_2cc4d518cf4232ad2183e2d6936d3598a4f2fecf939e7155ff058d2bc0ee2658->leave($__internal_2cc4d518cf4232ad2183e2d6936d3598a4f2fecf939e7155ff058d2bc0ee2658_prof);

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
", "@Framework/Form/form_end.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
