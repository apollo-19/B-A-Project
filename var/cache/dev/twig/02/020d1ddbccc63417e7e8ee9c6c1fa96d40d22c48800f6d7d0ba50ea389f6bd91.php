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
        $__internal_5fc82b18bef55d99b4376de17e7130bc208ce0e5a7f3918b7b133eb9913929e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fc82b18bef55d99b4376de17e7130bc208ce0e5a7f3918b7b133eb9913929e6->enter($__internal_5fc82b18bef55d99b4376de17e7130bc208ce0e5a7f3918b7b133eb9913929e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_44b2852feae8c2965b2782bd666ba839fb3bb55a05f0cd5b968bb4ad38b07223 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44b2852feae8c2965b2782bd666ba839fb3bb55a05f0cd5b968bb4ad38b07223->enter($__internal_44b2852feae8c2965b2782bd666ba839fb3bb55a05f0cd5b968bb4ad38b07223_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_5fc82b18bef55d99b4376de17e7130bc208ce0e5a7f3918b7b133eb9913929e6->leave($__internal_5fc82b18bef55d99b4376de17e7130bc208ce0e5a7f3918b7b133eb9913929e6_prof);

        
        $__internal_44b2852feae8c2965b2782bd666ba839fb3bb55a05f0cd5b968bb4ad38b07223->leave($__internal_44b2852feae8c2965b2782bd666ba839fb3bb55a05f0cd5b968bb4ad38b07223_prof);

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
", "@Framework/Form/email_widget.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
