<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_b790b556d58827420fdcc2bef1b5d2eca9c8fb56c50a3e391e0f0475be3dd7f4 extends Twig_Template
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
        $__internal_f22b74c5479d8a132daba209c9e959655477b28f88b550b7b933f4617268d84f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f22b74c5479d8a132daba209c9e959655477b28f88b550b7b933f4617268d84f->enter($__internal_f22b74c5479d8a132daba209c9e959655477b28f88b550b7b933f4617268d84f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_46e684b8d9bb05ef727e7fce99c6959c95af4c6258b9e682d7d326236bda0773 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46e684b8d9bb05ef727e7fce99c6959c95af4c6258b9e682d7d326236bda0773->enter($__internal_46e684b8d9bb05ef727e7fce99c6959c95af4c6258b9e682d7d326236bda0773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f22b74c5479d8a132daba209c9e959655477b28f88b550b7b933f4617268d84f->leave($__internal_f22b74c5479d8a132daba209c9e959655477b28f88b550b7b933f4617268d84f_prof);

        
        $__internal_46e684b8d9bb05ef727e7fce99c6959c95af4c6258b9e682d7d326236bda0773->leave($__internal_46e684b8d9bb05ef727e7fce99c6959c95af4c6258b9e682d7d326236bda0773_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
