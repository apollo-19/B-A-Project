<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_682a6f2685a1f9a57c3913a162d4f951d6bb029b0554f223078fa00bc8307222 extends Twig_Template
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
        $__internal_386b9390ec399fff8b3d8eaaf1dc08bcf3c36920f427396a534f4bbe564b0af8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_386b9390ec399fff8b3d8eaaf1dc08bcf3c36920f427396a534f4bbe564b0af8->enter($__internal_386b9390ec399fff8b3d8eaaf1dc08bcf3c36920f427396a534f4bbe564b0af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_64f281543dd9fbeb8d6227895d531214bef206b3191a8da473d9d34296de7257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64f281543dd9fbeb8d6227895d531214bef206b3191a8da473d9d34296de7257->enter($__internal_64f281543dd9fbeb8d6227895d531214bef206b3191a8da473d9d34296de7257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_386b9390ec399fff8b3d8eaaf1dc08bcf3c36920f427396a534f4bbe564b0af8->leave($__internal_386b9390ec399fff8b3d8eaaf1dc08bcf3c36920f427396a534f4bbe564b0af8_prof);

        
        $__internal_64f281543dd9fbeb8d6227895d531214bef206b3191a8da473d9d34296de7257->leave($__internal_64f281543dd9fbeb8d6227895d531214bef206b3191a8da473d9d34296de7257_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
