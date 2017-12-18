<?php

/* :batch:view_one.html.twig */
class __TwigTemplate_830314a746c0b4195ede6b1066d0bfd5a67c0bc21e6cb6e214cd3e479909826c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":batch:view_one.html.twig", 1);
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
        $__internal_39daefcd58874c15160978fc0239558a31181f67e871ce926662b2eb7092047a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39daefcd58874c15160978fc0239558a31181f67e871ce926662b2eb7092047a->enter($__internal_39daefcd58874c15160978fc0239558a31181f67e871ce926662b2eb7092047a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":batch:view_one.html.twig"));

        $__internal_6b05adef92b79c31a154fd80580b5ddcad4db9d8360edf3215b1b1a98db42376 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b05adef92b79c31a154fd80580b5ddcad4db9d8360edf3215b1b1a98db42376->enter($__internal_6b05adef92b79c31a154fd80580b5ddcad4db9d8360edf3215b1b1a98db42376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":batch:view_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39daefcd58874c15160978fc0239558a31181f67e871ce926662b2eb7092047a->leave($__internal_39daefcd58874c15160978fc0239558a31181f67e871ce926662b2eb7092047a_prof);

        
        $__internal_6b05adef92b79c31a154fd80580b5ddcad4db9d8360edf3215b1b1a98db42376->leave($__internal_6b05adef92b79c31a154fd80580b5ddcad4db9d8360edf3215b1b1a98db42376_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f2412c668dd354c5cddce166dc674945ffccda08d4defd8fbcf7abbd6cd9748d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2412c668dd354c5cddce166dc674945ffccda08d4defd8fbcf7abbd6cd9748d->enter($__internal_f2412c668dd354c5cddce166dc674945ffccda08d4defd8fbcf7abbd6cd9748d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_33f6f258afecf886d9b18eed1c3785ae4e696af40efaab5764de5dfdc6ef8334 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f6f258afecf886d9b18eed1c3785ae4e696af40efaab5764de5dfdc6ef8334->enter($__internal_33f6f258afecf886d9b18eed1c3785ae4e696af40efaab5764de5dfdc6ef8334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["batch"] ?? $this->getContext($context, "batch")), "batchCode", array()), "html", null, true);
        echo "
";
        
        $__internal_33f6f258afecf886d9b18eed1c3785ae4e696af40efaab5764de5dfdc6ef8334->leave($__internal_33f6f258afecf886d9b18eed1c3785ae4e696af40efaab5764de5dfdc6ef8334_prof);

        
        $__internal_f2412c668dd354c5cddce166dc674945ffccda08d4defd8fbcf7abbd6cd9748d->leave($__internal_f2412c668dd354c5cddce166dc674945ffccda08d4defd8fbcf7abbd6cd9748d_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_6bb2d19f0a5c8ee1ecd050c741b1165e9a7ee268d7c85cb132d195506a5aab9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bb2d19f0a5c8ee1ecd050c741b1165e9a7ee268d7c85cb132d195506a5aab9e->enter($__internal_6bb2d19f0a5c8ee1ecd050c741b1165e9a7ee268d7c85cb132d195506a5aab9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_c8870e5f430626da1c92644ea593abacaef6eb8f5e923af09ed973899bd2a5e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8870e5f430626da1c92644ea593abacaef6eb8f5e923af09ed973899bd2a5e7->enter($__internal_c8870e5f430626da1c92644ea593abacaef6eb8f5e923af09ed973899bd2a5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>
</style>
";
        
        $__internal_c8870e5f430626da1c92644ea593abacaef6eb8f5e923af09ed973899bd2a5e7->leave($__internal_c8870e5f430626da1c92644ea593abacaef6eb8f5e923af09ed973899bd2a5e7_prof);

        
        $__internal_6bb2d19f0a5c8ee1ecd050c741b1165e9a7ee268d7c85cb132d195506a5aab9e->leave($__internal_6bb2d19f0a5c8ee1ecd050c741b1165e9a7ee268d7c85cb132d195506a5aab9e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f46bef33864be1925565acb4ddf21f6022c83ddeb1bb2a1f1caf5e1b3e812c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f46bef33864be1925565acb4ddf21f6022c83ddeb1bb2a1f1caf5e1b3e812c6->enter($__internal_3f46bef33864be1925565acb4ddf21f6022c83ddeb1bb2a1f1caf5e1b3e812c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0451b27edeb1690d7b9eafe90a15b96803ca9f0381f342ee60689f609d9c03c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0451b27edeb1690d7b9eafe90a15b96803ca9f0381f342ee60689f609d9c03c8->enter($__internal_0451b27edeb1690d7b9eafe90a15b96803ca9f0381f342ee60689f609d9c03c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["batch"] ?? $this->getContext($context, "batch")), "batchName", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["batch"] ?? $this->getContext($context, "batch")), "batchCode", array()), "html", null, true);
        echo ")</h1>

      <table>
        <tr>
          <td>Batch Code:</td>
          <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["batch"] ?? $this->getContext($context, "batch")), "batchCode", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Batch Name:</td>
          <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["batch"] ?? $this->getContext($context, "batch")), "batchName", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Batch Year:</td>
          <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["batch"] ?? $this->getContext($context, "batch")), "batchYear", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Batch School:</td>
          <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["school"] ?? $this->getContext($context, "school")), "schoolName", array()), "html", null, true);
        echo "</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
";
        
        $__internal_0451b27edeb1690d7b9eafe90a15b96803ca9f0381f342ee60689f609d9c03c8->leave($__internal_0451b27edeb1690d7b9eafe90a15b96803ca9f0381f342ee60689f609d9c03c8_prof);

        
        $__internal_3f46bef33864be1925565acb4ddf21f6022c83ddeb1bb2a1f1caf5e1b3e812c6->leave($__internal_3f46bef33864be1925565acb4ddf21f6022c83ddeb1bb2a1f1caf5e1b3e812c6_prof);

    }

    public function getTemplateName()
    {
        return ":batch:view_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 35,  125 => 30,  117 => 25,  109 => 20,  99 => 15,  94 => 12,  85 => 11,  73 => 7,  64 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  {{ batch.batchCode }}
{% endblock %}

{% block stylesheet %}
<style>
</style>
{% endblock %}

{% block body %}
  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">{{ batch.batchName }} ({{ batch.batchCode }})</h1>

      <table>
        <tr>
          <td>Batch Code:</td>
          <td>{{ batch.batchCode }}</td>
        </tr>

        <tr>
          <td>Batch Name:</td>
          <td>{{ batch.batchName }}</td>
        </tr>

        <tr>
          <td>Batch Year:</td>
          <td>{{ batch.batchYear }}</td>
        </tr>

        <tr>
          <td>Batch School:</td>
          <td>{{ school.schoolName }}</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
{% endblock %}
", ":batch:view_one.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/batch/view_one.html.twig");
    }
}
