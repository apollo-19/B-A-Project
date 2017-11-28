<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_dc877f7ddd8612200a865db254dea07957d021e8dc53252cc566674c569806b6 extends Twig_Template
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
        $__internal_0eb793f489a281f630f5fc289198a694f7ed3de0b8e360bde18b3c0f563eb51a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eb793f489a281f630f5fc289198a694f7ed3de0b8e360bde18b3c0f563eb51a->enter($__internal_0eb793f489a281f630f5fc289198a694f7ed3de0b8e360bde18b3c0f563eb51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_24d57c9d86ea5cee8e98594f46f76c9718127c1ac72672446d60d0614b70e3a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24d57c9d86ea5cee8e98594f46f76c9718127c1ac72672446d60d0614b70e3a7->enter($__internal_24d57c9d86ea5cee8e98594f46f76c9718127c1ac72672446d60d0614b70e3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0eb793f489a281f630f5fc289198a694f7ed3de0b8e360bde18b3c0f563eb51a->leave($__internal_0eb793f489a281f630f5fc289198a694f7ed3de0b8e360bde18b3c0f563eb51a_prof);

        
        $__internal_24d57c9d86ea5cee8e98594f46f76c9718127c1ac72672446d60d0614b70e3a7->leave($__internal_24d57c9d86ea5cee8e98594f46f76c9718127c1ac72672446d60d0614b70e3a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
