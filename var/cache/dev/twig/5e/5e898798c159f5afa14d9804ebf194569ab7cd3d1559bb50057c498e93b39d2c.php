<?php

/* :result:index.html.twig */
class __TwigTemplate_df7f2a5c013e346dd79c930599fa8d551c7d79300786a653570c67cf98c524bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":result:index.html.twig", 1);
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
        $__internal_0ca2ff053ec381c0bb4f441f5a5195078387a6dcbf3d0bc9b405f2406a084b78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ca2ff053ec381c0bb4f441f5a5195078387a6dcbf3d0bc9b405f2406a084b78->enter($__internal_0ca2ff053ec381c0bb4f441f5a5195078387a6dcbf3d0bc9b405f2406a084b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":result:index.html.twig"));

        $__internal_27b6f7bf74820e3a9bff179ade965e09d705ab27192c2c5426884ac9cea335c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b6f7bf74820e3a9bff179ade965e09d705ab27192c2c5426884ac9cea335c3->enter($__internal_27b6f7bf74820e3a9bff179ade965e09d705ab27192c2c5426884ac9cea335c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":result:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ca2ff053ec381c0bb4f441f5a5195078387a6dcbf3d0bc9b405f2406a084b78->leave($__internal_0ca2ff053ec381c0bb4f441f5a5195078387a6dcbf3d0bc9b405f2406a084b78_prof);

        
        $__internal_27b6f7bf74820e3a9bff179ade965e09d705ab27192c2c5426884ac9cea335c3->leave($__internal_27b6f7bf74820e3a9bff179ade965e09d705ab27192c2c5426884ac9cea335c3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c215d82a570f7a2f92dfadc5a5a42f1e0000663fa0da40ad54de8c04b178c9f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c215d82a570f7a2f92dfadc5a5a42f1e0000663fa0da40ad54de8c04b178c9f0->enter($__internal_c215d82a570f7a2f92dfadc5a5a42f1e0000663fa0da40ad54de8c04b178c9f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3e380796f4534efef806edea1a646001193c63139e27717f8dd446e5cbe74cc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e380796f4534efef806edea1a646001193c63139e27717f8dd446e5cbe74cc6->enter($__internal_3e380796f4534efef806edea1a646001193c63139e27717f8dd446e5cbe74cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Teacher
";
        
        $__internal_3e380796f4534efef806edea1a646001193c63139e27717f8dd446e5cbe74cc6->leave($__internal_3e380796f4534efef806edea1a646001193c63139e27717f8dd446e5cbe74cc6_prof);

        
        $__internal_c215d82a570f7a2f92dfadc5a5a42f1e0000663fa0da40ad54de8c04b178c9f0->leave($__internal_c215d82a570f7a2f92dfadc5a5a42f1e0000663fa0da40ad54de8c04b178c9f0_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_52b6ff16f14e516796a749e26ee2e1308415b9ea515e35947970fa0ae97e9598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52b6ff16f14e516796a749e26ee2e1308415b9ea515e35947970fa0ae97e9598->enter($__internal_52b6ff16f14e516796a749e26ee2e1308415b9ea515e35947970fa0ae97e9598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_e606e3d45452fb420e999302df1e09f623a78305bbcdec4b5ebddf43c9080cfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e606e3d45452fb420e999302df1e09f623a78305bbcdec4b5ebddf43c9080cfd->enter($__internal_e606e3d45452fb420e999302df1e09f623a78305bbcdec4b5ebddf43c9080cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_e606e3d45452fb420e999302df1e09f623a78305bbcdec4b5ebddf43c9080cfd->leave($__internal_e606e3d45452fb420e999302df1e09f623a78305bbcdec4b5ebddf43c9080cfd_prof);

        
        $__internal_52b6ff16f14e516796a749e26ee2e1308415b9ea515e35947970fa0ae97e9598->leave($__internal_52b6ff16f14e516796a749e26ee2e1308415b9ea515e35947970fa0ae97e9598_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_05fb76fddf63acf3b72491f141142348a138d38a23fe53e4b4a99ec630bf7b0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05fb76fddf63acf3b72491f141142348a138d38a23fe53e4b4a99ec630bf7b0e->enter($__internal_05fb76fddf63acf3b72491f141142348a138d38a23fe53e4b4a99ec630bf7b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a91e20f180cd2edf5a3aec1556e158147a080431257f7e36fb5e61e180a5ed15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a91e20f180cd2edf5a3aec1556e158147a080431257f7e36fb5e61e180a5ed15->enter($__internal_a91e20f180cd2edf5a3aec1556e158147a080431257f7e36fb5e61e180a5ed15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a91e20f180cd2edf5a3aec1556e158147a080431257f7e36fb5e61e180a5ed15->leave($__internal_a91e20f180cd2edf5a3aec1556e158147a080431257f7e36fb5e61e180a5ed15_prof);

        
        $__internal_05fb76fddf63acf3b72491f141142348a138d38a23fe53e4b4a99ec630bf7b0e->leave($__internal_05fb76fddf63acf3b72491f141142348a138d38a23fe53e4b4a99ec630bf7b0e_prof);

    }

    public function getTemplateName()
    {
        return ":result:index.html.twig";
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
", ":result:index.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/result/index.html.twig");
    }
}
