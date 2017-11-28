<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_e929bec2e6a149b6930b05325c178490343a7a918507da619e91abbae1879c4e extends Twig_Template
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
        $__internal_7094c44d5b34d1b163ff5b55a99ecf3c37666443b624eac1feac1179ade032d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7094c44d5b34d1b163ff5b55a99ecf3c37666443b624eac1feac1179ade032d7->enter($__internal_7094c44d5b34d1b163ff5b55a99ecf3c37666443b624eac1feac1179ade032d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_6f97ec876b335b6af8fc8d264f2f52ca08cf5588d303404d6bb5bef953357c70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f97ec876b335b6af8fc8d264f2f52ca08cf5588d303404d6bb5bef953357c70->enter($__internal_6f97ec876b335b6af8fc8d264f2f52ca08cf5588d303404d6bb5bef953357c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_7094c44d5b34d1b163ff5b55a99ecf3c37666443b624eac1feac1179ade032d7->leave($__internal_7094c44d5b34d1b163ff5b55a99ecf3c37666443b624eac1feac1179ade032d7_prof);

        
        $__internal_6f97ec876b335b6af8fc8d264f2f52ca08cf5588d303404d6bb5bef953357c70->leave($__internal_6f97ec876b335b6af8fc8d264f2f52ca08cf5588d303404d6bb5bef953357c70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
