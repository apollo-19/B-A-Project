<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_2dfd8aa918acdb0aa52d5b841fa5ef084d9174251fd0f26610a58ce9eca8d635 extends Twig_Template
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
        $__internal_f075c72c921c6105b5f5f9395747a7733a37d90108d7ccfebedf2cc77f5a3979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f075c72c921c6105b5f5f9395747a7733a37d90108d7ccfebedf2cc77f5a3979->enter($__internal_f075c72c921c6105b5f5f9395747a7733a37d90108d7ccfebedf2cc77f5a3979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_ee5814bef2a2b27290c660ab203eac03221a21c8afa34cf8e64007d6380a2d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee5814bef2a2b27290c660ab203eac03221a21c8afa34cf8e64007d6380a2d5f->enter($__internal_ee5814bef2a2b27290c660ab203eac03221a21c8afa34cf8e64007d6380a2d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_f075c72c921c6105b5f5f9395747a7733a37d90108d7ccfebedf2cc77f5a3979->leave($__internal_f075c72c921c6105b5f5f9395747a7733a37d90108d7ccfebedf2cc77f5a3979_prof);

        
        $__internal_ee5814bef2a2b27290c660ab203eac03221a21c8afa34cf8e64007d6380a2d5f->leave($__internal_ee5814bef2a2b27290c660ab203eac03221a21c8afa34cf8e64007d6380a2d5f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
