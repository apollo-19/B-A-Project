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
        $__internal_362c2a00a2e6852aca49a033f73542614b6fda2b6159e73835071693ef7bfc48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_362c2a00a2e6852aca49a033f73542614b6fda2b6159e73835071693ef7bfc48->enter($__internal_362c2a00a2e6852aca49a033f73542614b6fda2b6159e73835071693ef7bfc48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_a15d435efdebaf4e20a1205d8aacaac5d4490367c7499f17a9425f4affce2455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a15d435efdebaf4e20a1205d8aacaac5d4490367c7499f17a9425f4affce2455->enter($__internal_a15d435efdebaf4e20a1205d8aacaac5d4490367c7499f17a9425f4affce2455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_362c2a00a2e6852aca49a033f73542614b6fda2b6159e73835071693ef7bfc48->leave($__internal_362c2a00a2e6852aca49a033f73542614b6fda2b6159e73835071693ef7bfc48_prof);

        
        $__internal_a15d435efdebaf4e20a1205d8aacaac5d4490367c7499f17a9425f4affce2455->leave($__internal_a15d435efdebaf4e20a1205d8aacaac5d4490367c7499f17a9425f4affce2455_prof);

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
", "@Framework/Form/url_widget.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
