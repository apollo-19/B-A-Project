<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e6342a1f73361c9ac04ec31f753d13a30e7133a91be4fe72e146dc47514a08b5 extends Twig_Template
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
        $__internal_fa20bf3c729ae1a0cefa05a17174ef83b48a035a0b7ee05599d74550ddbc1f76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa20bf3c729ae1a0cefa05a17174ef83b48a035a0b7ee05599d74550ddbc1f76->enter($__internal_fa20bf3c729ae1a0cefa05a17174ef83b48a035a0b7ee05599d74550ddbc1f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_005230933c1fc9d913073ffcdc3321666a58088ca84051f6e5130530808a5b15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_005230933c1fc9d913073ffcdc3321666a58088ca84051f6e5130530808a5b15->enter($__internal_005230933c1fc9d913073ffcdc3321666a58088ca84051f6e5130530808a5b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_fa20bf3c729ae1a0cefa05a17174ef83b48a035a0b7ee05599d74550ddbc1f76->leave($__internal_fa20bf3c729ae1a0cefa05a17174ef83b48a035a0b7ee05599d74550ddbc1f76_prof);

        
        $__internal_005230933c1fc9d913073ffcdc3321666a58088ca84051f6e5130530808a5b15->leave($__internal_005230933c1fc9d913073ffcdc3321666a58088ca84051f6e5130530808a5b15_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
