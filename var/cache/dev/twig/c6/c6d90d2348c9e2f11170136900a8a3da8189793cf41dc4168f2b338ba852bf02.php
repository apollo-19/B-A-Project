<?php

/* ::delete.html.twig */
class __TwigTemplate_4f405e4266e45c982b3fbe57cf82cbb54c61dd031eb19f39e1016e97a995e3cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::delete.html.twig", 1);
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
        $__internal_8e859bf72fe65f351b405286f0a4fb3dc991e1bd1af1983b3d3cfe2b783875ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e859bf72fe65f351b405286f0a4fb3dc991e1bd1af1983b3d3cfe2b783875ef->enter($__internal_8e859bf72fe65f351b405286f0a4fb3dc991e1bd1af1983b3d3cfe2b783875ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::delete.html.twig"));

        $__internal_ecfc1bc5da55ee8703925ce25c54f579b3e2aa4ba87e75d016f4e947e86efbe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecfc1bc5da55ee8703925ce25c54f579b3e2aa4ba87e75d016f4e947e86efbe4->enter($__internal_ecfc1bc5da55ee8703925ce25c54f579b3e2aa4ba87e75d016f4e947e86efbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e859bf72fe65f351b405286f0a4fb3dc991e1bd1af1983b3d3cfe2b783875ef->leave($__internal_8e859bf72fe65f351b405286f0a4fb3dc991e1bd1af1983b3d3cfe2b783875ef_prof);

        
        $__internal_ecfc1bc5da55ee8703925ce25c54f579b3e2aa4ba87e75d016f4e947e86efbe4->leave($__internal_ecfc1bc5da55ee8703925ce25c54f579b3e2aa4ba87e75d016f4e947e86efbe4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8bdf60526e7333464f3323e9898b914bc24383d9c517858378952db866bd2c99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bdf60526e7333464f3323e9898b914bc24383d9c517858378952db866bd2c99->enter($__internal_8bdf60526e7333464f3323e9898b914bc24383d9c517858378952db866bd2c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0ad0c4054fb5e948161a2661d0267616f4860c9ea5a3c182cfc0f89b48fff710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ad0c4054fb5e948161a2661d0267616f4860c9ea5a3c182cfc0f89b48fff710->enter($__internal_0ad0c4054fb5e948161a2661d0267616f4860c9ea5a3c182cfc0f89b48fff710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Teacher Register
";
        
        $__internal_0ad0c4054fb5e948161a2661d0267616f4860c9ea5a3c182cfc0f89b48fff710->leave($__internal_0ad0c4054fb5e948161a2661d0267616f4860c9ea5a3c182cfc0f89b48fff710_prof);

        
        $__internal_8bdf60526e7333464f3323e9898b914bc24383d9c517858378952db866bd2c99->leave($__internal_8bdf60526e7333464f3323e9898b914bc24383d9c517858378952db866bd2c99_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_55d053499b8987ccf3fbda960f2762dc17cb59361ede27295a4c4a0875b50328 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55d053499b8987ccf3fbda960f2762dc17cb59361ede27295a4c4a0875b50328->enter($__internal_55d053499b8987ccf3fbda960f2762dc17cb59361ede27295a4c4a0875b50328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_f043b265505600f632356c280198a28458bec6a485abcf0ddd75a8ed9cd07689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f043b265505600f632356c280198a28458bec6a485abcf0ddd75a8ed9cd07689->enter($__internal_f043b265505600f632356c280198a28458bec6a485abcf0ddd75a8ed9cd07689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>
.form {
  border: 1px solid #FF0000;
  width: 100%;
}

h1 {
  font-size: 25px;
  color:#FF0000;
  padding: 20px;
  width: auto;
}

button[name=yes] {
  background-color: #E00;
  border: 1px solid #FF0000;
}

button[name=yes]:hover {
  background-color: #F00;
  border-color: #F00;
}

button[name=no] {
  background-color: #F5F5F5;
  border: 1px solid #F5F5F5;
}

button[name=no]:hover {
  background-color: #F5F5F5;
  border-color: #000;
  color: #000;
}
</style>
";
        
        $__internal_f043b265505600f632356c280198a28458bec6a485abcf0ddd75a8ed9cd07689->leave($__internal_f043b265505600f632356c280198a28458bec6a485abcf0ddd75a8ed9cd07689_prof);

        
        $__internal_55d053499b8987ccf3fbda960f2762dc17cb59361ede27295a4c4a0875b50328->leave($__internal_55d053499b8987ccf3fbda960f2762dc17cb59361ede27295a4c4a0875b50328_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc03df871b263b9d91bb4c1a431a98c8e186fd86f1ebdc518ca3136d3e78243a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc03df871b263b9d91bb4c1a431a98c8e186fd86f1ebdc518ca3136d3e78243a->enter($__internal_dc03df871b263b9d91bb4c1a431a98c8e186fd86f1ebdc518ca3136d3e78243a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eae471af76480d453d538352a42eff861cc09d3e671cf1a6cc7f638ac3749073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eae471af76480d453d538352a42eff861cc09d3e671cf1a6cc7f638ac3749073->enter($__internal_eae471af76480d453d538352a42eff861cc09d3e671cf1a6cc7f638ac3749073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1>";
        // line 46
        echo twig_escape_filter($this->env, ($context["warningMessage"] ?? $this->getContext($context, "warningMessage")), "html", null, true);
        echo "</h1>
      <button name=\"yes\">Delete</button>
      <button name=\"no\">No</button>
    </form>
    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_eae471af76480d453d538352a42eff861cc09d3e671cf1a6cc7f638ac3749073->leave($__internal_eae471af76480d453d538352a42eff861cc09d3e671cf1a6cc7f638ac3749073_prof);

        
        $__internal_dc03df871b263b9d91bb4c1a431a98c8e186fd86f1ebdc518ca3136d3e78243a->leave($__internal_dc03df871b263b9d91bb4c1a431a98c8e186fd86f1ebdc518ca3136d3e78243a_prof);

    }

    public function getTemplateName()
    {
        return "::delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 46,  124 => 44,  115 => 43,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  Teacher Register
{% endblock %}

{% block stylesheet %}
<style>
.form {
  border: 1px solid #FF0000;
  width: 100%;
}

h1 {
  font-size: 25px;
  color:#FF0000;
  padding: 20px;
  width: auto;
}

button[name=yes] {
  background-color: #E00;
  border: 1px solid #FF0000;
}

button[name=yes]:hover {
  background-color: #F00;
  border-color: #F00;
}

button[name=no] {
  background-color: #F5F5F5;
  border: 1px solid #F5F5F5;
}

button[name=no]:hover {
  background-color: #F5F5F5;
  border-color: #000;
  color: #000;
}
</style>
{% endblock %}

{% block body %}
  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1>{{ warningMessage }}</h1>
      <button name=\"yes\">Delete</button>
      <button name=\"no\">No</button>
    </form>
    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", "::delete.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/delete.html.twig");
    }
}
