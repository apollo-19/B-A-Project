<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b02dfd81140eb2a24a8fb18cd6332cff44805b1d92cb2302754604add0b319f9 extends Twig_Template
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
        $__internal_8eca6362fa4483fc51bec283a09d08af75d34c3ef44a43ae48cf8aa81f3827a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8eca6362fa4483fc51bec283a09d08af75d34c3ef44a43ae48cf8aa81f3827a5->enter($__internal_8eca6362fa4483fc51bec283a09d08af75d34c3ef44a43ae48cf8aa81f3827a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_6ad4a8457188f096bc52685f8c0ed32f53f1f675ac62377147a77f08f5270081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ad4a8457188f096bc52685f8c0ed32f53f1f675ac62377147a77f08f5270081->enter($__internal_6ad4a8457188f096bc52685f8c0ed32f53f1f675ac62377147a77f08f5270081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_8eca6362fa4483fc51bec283a09d08af75d34c3ef44a43ae48cf8aa81f3827a5->leave($__internal_8eca6362fa4483fc51bec283a09d08af75d34c3ef44a43ae48cf8aa81f3827a5_prof);

        
        $__internal_6ad4a8457188f096bc52685f8c0ed32f53f1f675ac62377147a77f08f5270081->leave($__internal_6ad4a8457188f096bc52685f8c0ed32f53f1f675ac62377147a77f08f5270081_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
