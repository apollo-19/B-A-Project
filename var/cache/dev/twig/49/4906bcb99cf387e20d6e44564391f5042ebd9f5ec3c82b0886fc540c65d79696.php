<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_cf81ec3092be0f0084facd9830a10688cc18b459082fade1c92fda720aeace07 extends Twig_Template
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
        $__internal_cea1ee8ffc7bae26673527ef18783d7338bf085fb468d5f56f8136f54e74fa2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cea1ee8ffc7bae26673527ef18783d7338bf085fb468d5f56f8136f54e74fa2d->enter($__internal_cea1ee8ffc7bae26673527ef18783d7338bf085fb468d5f56f8136f54e74fa2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_a006668c8a8a14be43c7f41b113967f352a07643375085d7f7d1a0b264938886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a006668c8a8a14be43c7f41b113967f352a07643375085d7f7d1a0b264938886->enter($__internal_a006668c8a8a14be43c7f41b113967f352a07643375085d7f7d1a0b264938886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_cea1ee8ffc7bae26673527ef18783d7338bf085fb468d5f56f8136f54e74fa2d->leave($__internal_cea1ee8ffc7bae26673527ef18783d7338bf085fb468d5f56f8136f54e74fa2d_prof);

        
        $__internal_a006668c8a8a14be43c7f41b113967f352a07643375085d7f7d1a0b264938886->leave($__internal_a006668c8a8a14be43c7f41b113967f352a07643375085d7f7d1a0b264938886_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
