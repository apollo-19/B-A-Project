<?php

/* :student:index.html.twig */
class __TwigTemplate_b39f38ed6d76b57f0e980462de8605d72bfda51c6debb48fdc3cd08718f992ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":student:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1cb06cab6aee56fea39bf1385af85576719b84361ee2c4b783a620116a79e1b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cb06cab6aee56fea39bf1385af85576719b84361ee2c4b783a620116a79e1b2->enter($__internal_1cb06cab6aee56fea39bf1385af85576719b84361ee2c4b783a620116a79e1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":student:index.html.twig"));

        $__internal_14f43723a22dfab4f70a2cd7927bb6194b28ae7d3bffc591d3982aab9c121896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f43723a22dfab4f70a2cd7927bb6194b28ae7d3bffc591d3982aab9c121896->enter($__internal_14f43723a22dfab4f70a2cd7927bb6194b28ae7d3bffc591d3982aab9c121896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":student:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cb06cab6aee56fea39bf1385af85576719b84361ee2c4b783a620116a79e1b2->leave($__internal_1cb06cab6aee56fea39bf1385af85576719b84361ee2c4b783a620116a79e1b2_prof);

        
        $__internal_14f43723a22dfab4f70a2cd7927bb6194b28ae7d3bffc591d3982aab9c121896->leave($__internal_14f43723a22dfab4f70a2cd7927bb6194b28ae7d3bffc591d3982aab9c121896_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_27202f9f05682a53e44a771ac4bde48a138cc4f848843784360ffe91d1249658 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27202f9f05682a53e44a771ac4bde48a138cc4f848843784360ffe91d1249658->enter($__internal_27202f9f05682a53e44a771ac4bde48a138cc4f848843784360ffe91d1249658_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7c71c8ce296c63572178dd1f013de4a2034adbd61466179c8a0bb6c1ec2d56e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c71c8ce296c63572178dd1f013de4a2034adbd61466179c8a0bb6c1ec2d56e1->enter($__internal_7c71c8ce296c63572178dd1f013de4a2034adbd61466179c8a0bb6c1ec2d56e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Student
";
        
        $__internal_7c71c8ce296c63572178dd1f013de4a2034adbd61466179c8a0bb6c1ec2d56e1->leave($__internal_7c71c8ce296c63572178dd1f013de4a2034adbd61466179c8a0bb6c1ec2d56e1_prof);

        
        $__internal_27202f9f05682a53e44a771ac4bde48a138cc4f848843784360ffe91d1249658->leave($__internal_27202f9f05682a53e44a771ac4bde48a138cc4f848843784360ffe91d1249658_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_de8076488b9e87b2536a9f55971d52a36f412ad83ff29bd22138146c7a8da9d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de8076488b9e87b2536a9f55971d52a36f412ad83ff29bd22138146c7a8da9d7->enter($__internal_de8076488b9e87b2536a9f55971d52a36f412ad83ff29bd22138146c7a8da9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dfad8735e1b61cce0d906b06ab7e68749b3d342d8c00bb06ae70c4002491dfd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfad8735e1b61cce0d906b06ab7e68749b3d342d8c00bb06ae70c4002491dfd0->enter($__internal_dfad8735e1b61cce0d906b06ab7e68749b3d342d8c00bb06ae70c4002491dfd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "  <div id=\"wrapper\">
      <div id=\"container\">
          <div id=\"welcome\">
              
          </div>
        </div>
      </div>
";
        
        $__internal_dfad8735e1b61cce0d906b06ab7e68749b3d342d8c00bb06ae70c4002491dfd0->leave($__internal_dfad8735e1b61cce0d906b06ab7e68749b3d342d8c00bb06ae70c4002491dfd0_prof);

        
        $__internal_de8076488b9e87b2536a9f55971d52a36f412ad83ff29bd22138146c7a8da9d7->leave($__internal_de8076488b9e87b2536a9f55971d52a36f412ad83ff29bd22138146c7a8da9d7_prof);

    }

    public function getTemplateName()
    {
        return ":student:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 7,  61 => 6,  50 => 3,  41 => 2,  11 => 1,);
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
  Student
{% endblock %}

{% block body %}
  <div id=\"wrapper\">
      <div id=\"container\">
          <div id=\"welcome\">
              
          </div>
        </div>
      </div>
{% endblock %}
", ":student:index.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/student/index.html.twig");
    }
}
