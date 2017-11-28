<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_bd261761b9df5032b9aa3cb8b0af94d0d155b6dd5a02f66fcea2fc15316666b1 extends Twig_Template
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
        $__internal_0ee8074536942ac176f389107ae031a47800516c38902c9cde48d07722dd45d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ee8074536942ac176f389107ae031a47800516c38902c9cde48d07722dd45d1->enter($__internal_0ee8074536942ac176f389107ae031a47800516c38902c9cde48d07722dd45d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_d648381b4a40c4d43d60c8be98565aaa466825ef202ffe4220fb86ef35bfe9bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d648381b4a40c4d43d60c8be98565aaa466825ef202ffe4220fb86ef35bfe9bc->enter($__internal_d648381b4a40c4d43d60c8be98565aaa466825ef202ffe4220fb86ef35bfe9bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_0ee8074536942ac176f389107ae031a47800516c38902c9cde48d07722dd45d1->leave($__internal_0ee8074536942ac176f389107ae031a47800516c38902c9cde48d07722dd45d1_prof);

        
        $__internal_d648381b4a40c4d43d60c8be98565aaa466825ef202ffe4220fb86ef35bfe9bc->leave($__internal_d648381b4a40c4d43d60c8be98565aaa466825ef202ffe4220fb86ef35bfe9bc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
