<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_90c515f661ba0957029f62e7816d6064d95afb900007341e45d52ce01e9b60ac extends Twig_Template
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
        $__internal_f9e6fa46634e05b00333182935a819e5f0c9916d56192944350f03267fc50f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9e6fa46634e05b00333182935a819e5f0c9916d56192944350f03267fc50f00->enter($__internal_f9e6fa46634e05b00333182935a819e5f0c9916d56192944350f03267fc50f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_37cd026ba98f3d555181a1ae9246b4758f3b697564192c091adadf466cb7b2ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37cd026ba98f3d555181a1ae9246b4758f3b697564192c091adadf466cb7b2ba->enter($__internal_37cd026ba98f3d555181a1ae9246b4758f3b697564192c091adadf466cb7b2ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_f9e6fa46634e05b00333182935a819e5f0c9916d56192944350f03267fc50f00->leave($__internal_f9e6fa46634e05b00333182935a819e5f0c9916d56192944350f03267fc50f00_prof);

        
        $__internal_37cd026ba98f3d555181a1ae9246b4758f3b697564192c091adadf466cb7b2ba->leave($__internal_37cd026ba98f3d555181a1ae9246b4758f3b697564192c091adadf466cb7b2ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
