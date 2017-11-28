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
        $__internal_7189f16f4281c5b82a51496da4e46bda3ba082e41313dbded9e3de8ef096550a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7189f16f4281c5b82a51496da4e46bda3ba082e41313dbded9e3de8ef096550a->enter($__internal_7189f16f4281c5b82a51496da4e46bda3ba082e41313dbded9e3de8ef096550a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_f6d84326ebd898f5ce767b264a6d5cec506bd3a0303faf1e9e441331ad845ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d84326ebd898f5ce767b264a6d5cec506bd3a0303faf1e9e441331ad845ee2->enter($__internal_f6d84326ebd898f5ce767b264a6d5cec506bd3a0303faf1e9e441331ad845ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7189f16f4281c5b82a51496da4e46bda3ba082e41313dbded9e3de8ef096550a->leave($__internal_7189f16f4281c5b82a51496da4e46bda3ba082e41313dbded9e3de8ef096550a_prof);

        
        $__internal_f6d84326ebd898f5ce767b264a6d5cec506bd3a0303faf1e9e441331ad845ee2->leave($__internal_f6d84326ebd898f5ce767b264a6d5cec506bd3a0303faf1e9e441331ad845ee2_prof);

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
", "@Framework/Form/password_widget.html.php", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
