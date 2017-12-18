<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e6342a1f73361c9ac04ec31f753d13a30e7133a91be4fe72e146dc47514a08b5 extends Twig_Template
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
        $__internal_2895ef73498872c43a3b5c7b8110d2c75593ee7aebd97b5d3c3378e9ff10645d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2895ef73498872c43a3b5c7b8110d2c75593ee7aebd97b5d3c3378e9ff10645d->enter($__internal_2895ef73498872c43a3b5c7b8110d2c75593ee7aebd97b5d3c3378e9ff10645d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_948ea5bf913a03e1a789e7180c247c1a5d5cbaeca5ceeee2b86136cdc123c29a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_948ea5bf913a03e1a789e7180c247c1a5d5cbaeca5ceeee2b86136cdc123c29a->enter($__internal_948ea5bf913a03e1a789e7180c247c1a5d5cbaeca5ceeee2b86136cdc123c29a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_2895ef73498872c43a3b5c7b8110d2c75593ee7aebd97b5d3c3378e9ff10645d->leave($__internal_2895ef73498872c43a3b5c7b8110d2c75593ee7aebd97b5d3c3378e9ff10645d_prof);

        
        $__internal_948ea5bf913a03e1a789e7180c247c1a5d5cbaeca5ceeee2b86136cdc123c29a->leave($__internal_948ea5bf913a03e1a789e7180c247c1a5d5cbaeca5ceeee2b86136cdc123c29a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
