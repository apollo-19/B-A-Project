<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_102b9f0600ae7dffa1e6cfef2661902e0f33827312a7b37369632ebb95f503d5 extends Twig_Template
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
        $__internal_8e9b514d80f28f7e6396e898e5d326347a8c4a9e95554e0334bca8d0d260b248 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e9b514d80f28f7e6396e898e5d326347a8c4a9e95554e0334bca8d0d260b248->enter($__internal_8e9b514d80f28f7e6396e898e5d326347a8c4a9e95554e0334bca8d0d260b248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_b655ba45702e03ea072ab5330149976f34528eba1010c5a051cd164b8af43088 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b655ba45702e03ea072ab5330149976f34528eba1010c5a051cd164b8af43088->enter($__internal_b655ba45702e03ea072ab5330149976f34528eba1010c5a051cd164b8af43088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_8e9b514d80f28f7e6396e898e5d326347a8c4a9e95554e0334bca8d0d260b248->leave($__internal_8e9b514d80f28f7e6396e898e5d326347a8c4a9e95554e0334bca8d0d260b248_prof);

        
        $__internal_b655ba45702e03ea072ab5330149976f34528eba1010c5a051cd164b8af43088->leave($__internal_b655ba45702e03ea072ab5330149976f34528eba1010c5a051cd164b8af43088_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
