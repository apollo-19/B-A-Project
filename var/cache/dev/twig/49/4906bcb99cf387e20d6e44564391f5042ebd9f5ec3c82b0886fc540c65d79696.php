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
        $__internal_915ce122390641a7fdf6f81bb838472ad21de65c084ad4a8b0b8f42e91fec22e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_915ce122390641a7fdf6f81bb838472ad21de65c084ad4a8b0b8f42e91fec22e->enter($__internal_915ce122390641a7fdf6f81bb838472ad21de65c084ad4a8b0b8f42e91fec22e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ab3499a2aa8fdce5d1c8c160bd9b1edbf25dc4566a8795015942dc9c6e7bb78c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab3499a2aa8fdce5d1c8c160bd9b1edbf25dc4566a8795015942dc9c6e7bb78c->enter($__internal_ab3499a2aa8fdce5d1c8c160bd9b1edbf25dc4566a8795015942dc9c6e7bb78c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_915ce122390641a7fdf6f81bb838472ad21de65c084ad4a8b0b8f42e91fec22e->leave($__internal_915ce122390641a7fdf6f81bb838472ad21de65c084ad4a8b0b8f42e91fec22e_prof);

        
        $__internal_ab3499a2aa8fdce5d1c8c160bd9b1edbf25dc4566a8795015942dc9c6e7bb78c->leave($__internal_ab3499a2aa8fdce5d1c8c160bd9b1edbf25dc4566a8795015942dc9c6e7bb78c_prof);

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
", "@Framework/FormTable/button_row.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
