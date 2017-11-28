<?php

/* :batch:form.html.twig */
class __TwigTemplate_b107eeb96232d9f1952d3cbf12187e031fcbba5735c7709ad6b328b031b06929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":batch:form.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f178e377c3d0889a02598d3b2383fd8c94841e2036b03f0b207fc02173d34f21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f178e377c3d0889a02598d3b2383fd8c94841e2036b03f0b207fc02173d34f21->enter($__internal_f178e377c3d0889a02598d3b2383fd8c94841e2036b03f0b207fc02173d34f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":batch:form.html.twig"));

        $__internal_52e068faec55355b2bb09b37d2c9970dcbfe51896727ee726f22f500565b4daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e068faec55355b2bb09b37d2c9970dcbfe51896727ee726f22f500565b4daa->enter($__internal_52e068faec55355b2bb09b37d2c9970dcbfe51896727ee726f22f500565b4daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":batch:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f178e377c3d0889a02598d3b2383fd8c94841e2036b03f0b207fc02173d34f21->leave($__internal_f178e377c3d0889a02598d3b2383fd8c94841e2036b03f0b207fc02173d34f21_prof);

        
        $__internal_52e068faec55355b2bb09b37d2c9970dcbfe51896727ee726f22f500565b4daa->leave($__internal_52e068faec55355b2bb09b37d2c9970dcbfe51896727ee726f22f500565b4daa_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9d39110c3b7331f25563172dd2d5686e3953ac6de7c5ae2e2244a64a0e46623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9d39110c3b7331f25563172dd2d5686e3953ac6de7c5ae2e2244a64a0e46623->enter($__internal_f9d39110c3b7331f25563172dd2d5686e3953ac6de7c5ae2e2244a64a0e46623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_02de5ebb776b91b6cf656e743db11ddb771f8ddb65d5a3ca7f39a82032588399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02de5ebb776b91b6cf656e743db11ddb771f8ddb65d5a3ca7f39a82032588399->enter($__internal_02de5ebb776b91b6cf656e743db11ddb771f8ddb65d5a3ca7f39a82032588399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Batch") : ("Edit Batch"));
        echo "
";
        
        $__internal_02de5ebb776b91b6cf656e743db11ddb771f8ddb65d5a3ca7f39a82032588399->leave($__internal_02de5ebb776b91b6cf656e743db11ddb771f8ddb65d5a3ca7f39a82032588399_prof);

        
        $__internal_f9d39110c3b7331f25563172dd2d5686e3953ac6de7c5ae2e2244a64a0e46623->leave($__internal_f9d39110c3b7331f25563172dd2d5686e3953ac6de7c5ae2e2244a64a0e46623_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_9861e3210ae3474e08363c2506ce0cc7ec797181f48eea1bd33968ed665f1079 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9861e3210ae3474e08363c2506ce0cc7ec797181f48eea1bd33968ed665f1079->enter($__internal_9861e3210ae3474e08363c2506ce0cc7ec797181f48eea1bd33968ed665f1079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_5c7c11f6f299e59222f656e5d9c3071be83b253fdc0964a6af7d88dad721b49f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7c11f6f299e59222f656e5d9c3071be83b253fdc0964a6af7d88dad721b49f->enter($__internal_5c7c11f6f299e59222f656e5d9c3071be83b253fdc0964a6af7d88dad721b49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_5c7c11f6f299e59222f656e5d9c3071be83b253fdc0964a6af7d88dad721b49f->leave($__internal_5c7c11f6f299e59222f656e5d9c3071be83b253fdc0964a6af7d88dad721b49f_prof);

        
        $__internal_9861e3210ae3474e08363c2506ce0cc7ec797181f48eea1bd33968ed665f1079->leave($__internal_9861e3210ae3474e08363c2506ce0cc7ec797181f48eea1bd33968ed665f1079_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e2d9d4dd9f7edb6df444400bd33ab5c5b1830122f95e9c447fec4705f54102e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e2d9d4dd9f7edb6df444400bd33ab5c5b1830122f95e9c447fec4705f54102e->enter($__internal_1e2d9d4dd9f7edb6df444400bd33ab5c5b1830122f95e9c447fec4705f54102e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_03dddc8bbca22b40cf1394d0965b29d128ada2c60e2bfa59b416a3515ca8c851 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03dddc8bbca22b40cf1394d0965b29d128ada2c60e2bfa59b416a3515ca8c851->enter($__internal_03dddc8bbca22b40cf1394d0965b29d128ada2c60e2bfa59b416a3515ca8c851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Batch") : ("Edit Batch"));
        echo "</h1>
      <h2>";
        // line 16
        echo twig_escape_filter($this->env, ((array_key_exists("result_message", $context)) ? (($context["result_message"] ?? $this->getContext($context, "result_message"))) : ("")), "html", null, true);
        echo "</h2>

      <label for=\"form[batch_code]\">Batch Code</label>
      <input type=\"text\" name=\"form[batch_code]\" placeholder=\"DoIM\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "batch_code", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "batch_code", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[batch_name]\">Batch Name</label>
      <input type=\"text\" name=\"form[batch_name]\" placeholder=\"Batch One\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "batch_name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "batch_name", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[batch_year]\">Batch Year</label>
      <input type=\"text\" name=\"form[batch_year]\" placeholder=\"Batch One\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "batch_year", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "batch_year", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[batch_school]\">Batch School</label>
      <select name=\"form[batch_school]\">
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["schools"] ?? $this->getContext($context, "schools")));
        foreach ($context['_seq'] as $context["_key"] => $context["school"]) {
            // line 30
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "id", array()), "html", null, true);
            echo "\" ";
            echo ((($this->getAttribute($context["school"], "id", array()) == (($this->getAttribute(($context["mySchool"] ?? null), "id", array(), "any", true, true)) ? ($this->getAttribute(($context["mySchool"] ?? $this->getContext($context, "mySchool")), "id", array())) : ("")))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "schoolName", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['school'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "      </select>

      <button>";
        // line 34
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Create Batch") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_03dddc8bbca22b40cf1394d0965b29d128ada2c60e2bfa59b416a3515ca8c851->leave($__internal_03dddc8bbca22b40cf1394d0965b29d128ada2c60e2bfa59b416a3515ca8c851_prof);

        
        $__internal_1e2d9d4dd9f7edb6df444400bd33ab5c5b1830122f95e9c447fec4705f54102e->leave($__internal_1e2d9d4dd9f7edb6df444400bd33ab5c5b1830122f95e9c447fec4705f54102e_prof);

    }

    public function getTemplateName()
    {
        return ":batch:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 34,  145 => 32,  132 => 30,  128 => 29,  121 => 25,  115 => 22,  109 => 19,  103 => 16,  99 => 15,  95 => 13,  86 => 12,  73 => 7,  64 => 6,  51 => 3,  42 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}
  {{ (mode == 'new') ? 'New Batch' : 'Edit Batch' }}
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">{{ (mode == 'new') ? 'New Batch' : 'Edit Batch' }}</h1>
      <h2>{{ result_message is defined ? result_message : '' }}</h2>

      <label for=\"form[batch_code]\">Batch Code</label>
      <input type=\"text\" name=\"form[batch_code]\" placeholder=\"DoIM\" value=\"{{ form.batch_code is defined ? form.batch_code : '' }}\" required />

      <label for=\"form[batch_name]\">Batch Name</label>
      <input type=\"text\" name=\"form[batch_name]\" placeholder=\"Batch One\" value=\"{{ form.batch_name is defined ? form.batch_name : '' }}\" required />

      <label for=\"form[batch_year]\">Batch Year</label>
      <input type=\"text\" name=\"form[batch_year]\" placeholder=\"Batch One\" value=\"{{ form.batch_year is defined ? form.batch_year : '' }}\" required />

      <label for=\"form[batch_school]\">Batch School</label>
      <select name=\"form[batch_school]\">
        {% for school in schools %}
          <option value=\"{{ school.id }}\" {{ (school.id == (mySchool.id is defined ? mySchool.id : '')) ? 'selected' : '' }}>{{ school.schoolName }}</option>
        {% endfor %}
      </select>

      <button>{{ (mode == 'new') ? 'Create Batch' : 'Save Changes' }}</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", ":batch:form.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/batch/form.html.twig");
    }
}
