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
        $__internal_1a19b05261ee9c0b67a176dfe015a7e15be8b7b49546966bf18fab8cc2b630c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a19b05261ee9c0b67a176dfe015a7e15be8b7b49546966bf18fab8cc2b630c9->enter($__internal_1a19b05261ee9c0b67a176dfe015a7e15be8b7b49546966bf18fab8cc2b630c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":student:index.html.twig"));

        $__internal_620414f2a6607519800687f8dc05b1befb9589217c60abc9602cbde32eaf3870 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_620414f2a6607519800687f8dc05b1befb9589217c60abc9602cbde32eaf3870->enter($__internal_620414f2a6607519800687f8dc05b1befb9589217c60abc9602cbde32eaf3870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":student:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a19b05261ee9c0b67a176dfe015a7e15be8b7b49546966bf18fab8cc2b630c9->leave($__internal_1a19b05261ee9c0b67a176dfe015a7e15be8b7b49546966bf18fab8cc2b630c9_prof);

        
        $__internal_620414f2a6607519800687f8dc05b1befb9589217c60abc9602cbde32eaf3870->leave($__internal_620414f2a6607519800687f8dc05b1befb9589217c60abc9602cbde32eaf3870_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_aff23187c449fb97e227d2678cbe1023c9ab3c07aab5e4a733b7c49ca4225387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aff23187c449fb97e227d2678cbe1023c9ab3c07aab5e4a733b7c49ca4225387->enter($__internal_aff23187c449fb97e227d2678cbe1023c9ab3c07aab5e4a733b7c49ca4225387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1e963afda37e8fab92afb188bfd524251aa36961397a043a005b3d6df7c93561 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e963afda37e8fab92afb188bfd524251aa36961397a043a005b3d6df7c93561->enter($__internal_1e963afda37e8fab92afb188bfd524251aa36961397a043a005b3d6df7c93561_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Student
";
        
        $__internal_1e963afda37e8fab92afb188bfd524251aa36961397a043a005b3d6df7c93561->leave($__internal_1e963afda37e8fab92afb188bfd524251aa36961397a043a005b3d6df7c93561_prof);

        
        $__internal_aff23187c449fb97e227d2678cbe1023c9ab3c07aab5e4a733b7c49ca4225387->leave($__internal_aff23187c449fb97e227d2678cbe1023c9ab3c07aab5e4a733b7c49ca4225387_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_a74856cc1efd26da750b958b1ed59c51658d896a740bd2349190ba255671f2f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a74856cc1efd26da750b958b1ed59c51658d896a740bd2349190ba255671f2f2->enter($__internal_a74856cc1efd26da750b958b1ed59c51658d896a740bd2349190ba255671f2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6771a2b70b00ed10340179062b8f8323e99be14358220dc5874980232e6f822e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6771a2b70b00ed10340179062b8f8323e99be14358220dc5874980232e6f822e->enter($__internal_6771a2b70b00ed10340179062b8f8323e99be14358220dc5874980232e6f822e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "  <div id=\"wrapper\">
      <div id=\"container\">
          <div id=\"welcome\">
              
          </div>
        </div>
      </div>
";
        
        $__internal_6771a2b70b00ed10340179062b8f8323e99be14358220dc5874980232e6f822e->leave($__internal_6771a2b70b00ed10340179062b8f8323e99be14358220dc5874980232e6f822e_prof);

        
        $__internal_a74856cc1efd26da750b958b1ed59c51658d896a740bd2349190ba255671f2f2->leave($__internal_a74856cc1efd26da750b958b1ed59c51658d896a740bd2349190ba255671f2f2_prof);

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
", ":student:index.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/student/index.html.twig");
    }
}
