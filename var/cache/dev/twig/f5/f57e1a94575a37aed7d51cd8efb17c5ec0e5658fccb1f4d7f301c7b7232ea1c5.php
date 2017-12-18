<?php

/* :section:view_one.html.twig */
class __TwigTemplate_d8afb7126b0195a5b3b08c03174a58cd8c9a83e4e0e97327c3ca951a316b85f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":section:view_one.html.twig", 1);
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
        $__internal_12b003b9a960785f8b6e93efaa0ccdbfdf2ede6922c568a4e93e82c8c5ea5927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12b003b9a960785f8b6e93efaa0ccdbfdf2ede6922c568a4e93e82c8c5ea5927->enter($__internal_12b003b9a960785f8b6e93efaa0ccdbfdf2ede6922c568a4e93e82c8c5ea5927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":section:view_one.html.twig"));

        $__internal_1d76fb04832de042820e31af5a24da1cc35e634c60f4a8bfaf11db6e4bfec25f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d76fb04832de042820e31af5a24da1cc35e634c60f4a8bfaf11db6e4bfec25f->enter($__internal_1d76fb04832de042820e31af5a24da1cc35e634c60f4a8bfaf11db6e4bfec25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":section:view_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12b003b9a960785f8b6e93efaa0ccdbfdf2ede6922c568a4e93e82c8c5ea5927->leave($__internal_12b003b9a960785f8b6e93efaa0ccdbfdf2ede6922c568a4e93e82c8c5ea5927_prof);

        
        $__internal_1d76fb04832de042820e31af5a24da1cc35e634c60f4a8bfaf11db6e4bfec25f->leave($__internal_1d76fb04832de042820e31af5a24da1cc35e634c60f4a8bfaf11db6e4bfec25f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_78751540c9703a1e121bd92a212f380ab5adee7705cd79c57d4bafce006fed0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78751540c9703a1e121bd92a212f380ab5adee7705cd79c57d4bafce006fed0a->enter($__internal_78751540c9703a1e121bd92a212f380ab5adee7705cd79c57d4bafce006fed0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c99e8bc15f979f09e325bd30301b9fed335ab48a5d1c364eb73af0723667ad3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c99e8bc15f979f09e325bd30301b9fed335ab48a5d1c364eb73af0723667ad3b->enter($__internal_c99e8bc15f979f09e325bd30301b9fed335ab48a5d1c364eb73af0723667ad3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "sectionCode", array()), "html", null, true);
        echo "
";
        
        $__internal_c99e8bc15f979f09e325bd30301b9fed335ab48a5d1c364eb73af0723667ad3b->leave($__internal_c99e8bc15f979f09e325bd30301b9fed335ab48a5d1c364eb73af0723667ad3b_prof);

        
        $__internal_78751540c9703a1e121bd92a212f380ab5adee7705cd79c57d4bafce006fed0a->leave($__internal_78751540c9703a1e121bd92a212f380ab5adee7705cd79c57d4bafce006fed0a_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_702336d944b5eb097b25145860ccbc9a9440255e0274982ac7fbf868bc6290b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_702336d944b5eb097b25145860ccbc9a9440255e0274982ac7fbf868bc6290b5->enter($__internal_702336d944b5eb097b25145860ccbc9a9440255e0274982ac7fbf868bc6290b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_f2cf8d6e8e54a95cb16999208135eb2990d2209c20572c10f6c9a9ba8f0c4e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2cf8d6e8e54a95cb16999208135eb2990d2209c20572c10f6c9a9ba8f0c4e15->enter($__internal_f2cf8d6e8e54a95cb16999208135eb2990d2209c20572c10f6c9a9ba8f0c4e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>
</style>
";
        
        $__internal_f2cf8d6e8e54a95cb16999208135eb2990d2209c20572c10f6c9a9ba8f0c4e15->leave($__internal_f2cf8d6e8e54a95cb16999208135eb2990d2209c20572c10f6c9a9ba8f0c4e15_prof);

        
        $__internal_702336d944b5eb097b25145860ccbc9a9440255e0274982ac7fbf868bc6290b5->leave($__internal_702336d944b5eb097b25145860ccbc9a9440255e0274982ac7fbf868bc6290b5_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_51578f9e74f29fbfb3140a0ccf6163cbc1ff7c124b34ab4c41579335476daa93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51578f9e74f29fbfb3140a0ccf6163cbc1ff7c124b34ab4c41579335476daa93->enter($__internal_51578f9e74f29fbfb3140a0ccf6163cbc1ff7c124b34ab4c41579335476daa93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_edba7c5a5b37ddca6bd28b55d4440799b5bda206a2c696df4494c64267f626dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edba7c5a5b37ddca6bd28b55d4440799b5bda206a2c696df4494c64267f626dd->enter($__internal_edba7c5a5b37ddca6bd28b55d4440799b5bda206a2c696df4494c64267f626dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "sectionName", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "sectionCode", array()), "html", null, true);
        echo ")</h1>

      <table>
        <tr>
          <td>Section Code:</td>
          <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "sectionCode", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Section Name:</td>
          <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["section"] ?? $this->getContext($context, "section")), "sectionName", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Section Batch:</td>
          <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["batch"] ?? $this->getContext($context, "batch")), "batchName", array()), "html", null, true);
        echo "</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
";
        
        $__internal_edba7c5a5b37ddca6bd28b55d4440799b5bda206a2c696df4494c64267f626dd->leave($__internal_edba7c5a5b37ddca6bd28b55d4440799b5bda206a2c696df4494c64267f626dd_prof);

        
        $__internal_51578f9e74f29fbfb3140a0ccf6163cbc1ff7c124b34ab4c41579335476daa93->leave($__internal_51578f9e74f29fbfb3140a0ccf6163cbc1ff7c124b34ab4c41579335476daa93_prof);

    }

    public function getTemplateName()
    {
        return ":section:view_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 30,  117 => 25,  109 => 20,  99 => 15,  94 => 12,  85 => 11,  73 => 7,  64 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  {{ section.sectionCode }}
{% endblock %}

{% block stylesheet %}
<style>
</style>
{% endblock %}

{% block body %}
  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">{{ section.sectionName }} ({{ section.sectionCode }})</h1>

      <table>
        <tr>
          <td>Section Code:</td>
          <td>{{ section.sectionCode }}</td>
        </tr>

        <tr>
          <td>Section Name:</td>
          <td>{{ section.sectionName }}</td>
        </tr>

        <tr>
          <td>Section Batch:</td>
          <td>{{ batch.batchName }}</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
{% endblock %}
", ":section:view_one.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/section/view_one.html.twig");
    }
}
