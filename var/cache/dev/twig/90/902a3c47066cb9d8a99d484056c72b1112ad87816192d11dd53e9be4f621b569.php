<?php

/* :assessment:index.html.twig */
class __TwigTemplate_2bc6f3594fac2544eebfbd38c32ab8c6a9052d6e9ea7ae61bdb80c73a5c98b13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":assessment:index.html.twig", 1);
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
        $__internal_d53ec5cf6184e7b96dfabe99c529e25b26a9137fbfe8d73683337e0ab1e58ae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d53ec5cf6184e7b96dfabe99c529e25b26a9137fbfe8d73683337e0ab1e58ae5->enter($__internal_d53ec5cf6184e7b96dfabe99c529e25b26a9137fbfe8d73683337e0ab1e58ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":assessment:index.html.twig"));

        $__internal_052352a7303f1d6e57fc077146af6fbc23f46be551abd5b5e771cab543ddb472 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_052352a7303f1d6e57fc077146af6fbc23f46be551abd5b5e771cab543ddb472->enter($__internal_052352a7303f1d6e57fc077146af6fbc23f46be551abd5b5e771cab543ddb472_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":assessment:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d53ec5cf6184e7b96dfabe99c529e25b26a9137fbfe8d73683337e0ab1e58ae5->leave($__internal_d53ec5cf6184e7b96dfabe99c529e25b26a9137fbfe8d73683337e0ab1e58ae5_prof);

        
        $__internal_052352a7303f1d6e57fc077146af6fbc23f46be551abd5b5e771cab543ddb472->leave($__internal_052352a7303f1d6e57fc077146af6fbc23f46be551abd5b5e771cab543ddb472_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd500df7bec35fcaf657e2ad2d3734ea6c13672bdccf4eff0b46142adc213312 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd500df7bec35fcaf657e2ad2d3734ea6c13672bdccf4eff0b46142adc213312->enter($__internal_cd500df7bec35fcaf657e2ad2d3734ea6c13672bdccf4eff0b46142adc213312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_08f7cce40321e24bd66c8f5f67028ca288d31addb73f344036ccac93c424ae3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08f7cce40321e24bd66c8f5f67028ca288d31addb73f344036ccac93c424ae3a->enter($__internal_08f7cce40321e24bd66c8f5f67028ca288d31addb73f344036ccac93c424ae3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Teacher
";
        
        $__internal_08f7cce40321e24bd66c8f5f67028ca288d31addb73f344036ccac93c424ae3a->leave($__internal_08f7cce40321e24bd66c8f5f67028ca288d31addb73f344036ccac93c424ae3a_prof);

        
        $__internal_cd500df7bec35fcaf657e2ad2d3734ea6c13672bdccf4eff0b46142adc213312->leave($__internal_cd500df7bec35fcaf657e2ad2d3734ea6c13672bdccf4eff0b46142adc213312_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_96c8b3a193e39df1a95ee600dd872b00f395bd68530bc4215c1f090f67b2f2c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96c8b3a193e39df1a95ee600dd872b00f395bd68530bc4215c1f090f67b2f2c1->enter($__internal_96c8b3a193e39df1a95ee600dd872b00f395bd68530bc4215c1f090f67b2f2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_3f1c21191814ec5338e1ed3fb52012b9f05bc64a4017b4666581fc4f77853575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f1c21191814ec5338e1ed3fb52012b9f05bc64a4017b4666581fc4f77853575->enter($__internal_3f1c21191814ec5338e1ed3fb52012b9f05bc64a4017b4666581fc4f77853575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_3f1c21191814ec5338e1ed3fb52012b9f05bc64a4017b4666581fc4f77853575->leave($__internal_3f1c21191814ec5338e1ed3fb52012b9f05bc64a4017b4666581fc4f77853575_prof);

        
        $__internal_96c8b3a193e39df1a95ee600dd872b00f395bd68530bc4215c1f090f67b2f2c1->leave($__internal_96c8b3a193e39df1a95ee600dd872b00f395bd68530bc4215c1f090f67b2f2c1_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_1a75bccc7ebfd03ebdb2eb0c3dbff03f9415205eee3d9e8dbb0b0b1404b3ce61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a75bccc7ebfd03ebdb2eb0c3dbff03f9415205eee3d9e8dbb0b0b1404b3ce61->enter($__internal_1a75bccc7ebfd03ebdb2eb0c3dbff03f9415205eee3d9e8dbb0b0b1404b3ce61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e699d2fd3547549a342cd71946e18493d06caba4c9f8c4c4974b9564e3021145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e699d2fd3547549a342cd71946e18493d06caba4c9f8c4c4974b9564e3021145->enter($__internal_e699d2fd3547549a342cd71946e18493d06caba4c9f8c4c4974b9564e3021145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\">
    <article class=\"tasks\">
      <div>
        <a href=\"\"><img src=\"images/icons/.png\" draggable=\"false\" /></a>

        <a href=\"\">Schools</a>
      </div>
    </article>
    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_e699d2fd3547549a342cd71946e18493d06caba4c9f8c4c4974b9564e3021145->leave($__internal_e699d2fd3547549a342cd71946e18493d06caba4c9f8c4c4974b9564e3021145_prof);

        
        $__internal_1a75bccc7ebfd03ebdb2eb0c3dbff03f9415205eee3d9e8dbb0b0b1404b3ce61->leave($__internal_1a75bccc7ebfd03ebdb2eb0c3dbff03f9415205eee3d9e8dbb0b0b1404b3ce61_prof);

    }

    public function getTemplateName()
    {
        return ":assessment:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  Teacher
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container\">
    <article class=\"tasks\">
      <div>
        <a href=\"\"><img src=\"images/icons/.png\" draggable=\"false\" /></a>

        <a href=\"\">Schools</a>
      </div>
    </article>
    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", ":assessment:index.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/assessment/index.html.twig");
    }
}
