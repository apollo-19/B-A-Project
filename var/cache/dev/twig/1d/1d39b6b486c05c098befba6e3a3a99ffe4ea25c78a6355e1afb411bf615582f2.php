<?php

/* ::accessDenied.html.twig */
class __TwigTemplate_90798104e738c82dc5416d541dc7221241a0e2a0c9593f15ea542d22920b9b17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "::accessDenied.html.twig", 1);
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
        $__internal_b13365bcd8328eaaa666f99945c9a297a99365a1ae45db5bcbedbd4a91090129 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b13365bcd8328eaaa666f99945c9a297a99365a1ae45db5bcbedbd4a91090129->enter($__internal_b13365bcd8328eaaa666f99945c9a297a99365a1ae45db5bcbedbd4a91090129_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::accessDenied.html.twig"));

        $__internal_0c244af5a204eef381651a53916d92473458a1fbcfd517db29839a0833351b92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c244af5a204eef381651a53916d92473458a1fbcfd517db29839a0833351b92->enter($__internal_0c244af5a204eef381651a53916d92473458a1fbcfd517db29839a0833351b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::accessDenied.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b13365bcd8328eaaa666f99945c9a297a99365a1ae45db5bcbedbd4a91090129->leave($__internal_b13365bcd8328eaaa666f99945c9a297a99365a1ae45db5bcbedbd4a91090129_prof);

        
        $__internal_0c244af5a204eef381651a53916d92473458a1fbcfd517db29839a0833351b92->leave($__internal_0c244af5a204eef381651a53916d92473458a1fbcfd517db29839a0833351b92_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff802a0ad2b37cb301402e4e493092a4fd1ecd46aae5a8e2f90414869363f7d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff802a0ad2b37cb301402e4e493092a4fd1ecd46aae5a8e2f90414869363f7d0->enter($__internal_ff802a0ad2b37cb301402e4e493092a4fd1ecd46aae5a8e2f90414869363f7d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4f594b5265b1885b1b1ea1ff641d2cbd6f49d5206570bbe0b62d3903380dbdf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f594b5265b1885b1b1ea1ff641d2cbd6f49d5206570bbe0b62d3903380dbdf9->enter($__internal_4f594b5265b1885b1b1ea1ff641d2cbd6f49d5206570bbe0b62d3903380dbdf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Access Denied!
";
        
        $__internal_4f594b5265b1885b1b1ea1ff641d2cbd6f49d5206570bbe0b62d3903380dbdf9->leave($__internal_4f594b5265b1885b1b1ea1ff641d2cbd6f49d5206570bbe0b62d3903380dbdf9_prof);

        
        $__internal_ff802a0ad2b37cb301402e4e493092a4fd1ecd46aae5a8e2f90414869363f7d0->leave($__internal_ff802a0ad2b37cb301402e4e493092a4fd1ecd46aae5a8e2f90414869363f7d0_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_21dc79aa0df431e49994ef3bb1201307b8dd1cadbcd92bf904027f75504d6583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21dc79aa0df431e49994ef3bb1201307b8dd1cadbcd92bf904027f75504d6583->enter($__internal_21dc79aa0df431e49994ef3bb1201307b8dd1cadbcd92bf904027f75504d6583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_abfcae5e855e622ec95939c1e2ffd37564f950e17b634496f4dd0255ac0a3f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abfcae5e855e622ec95939c1e2ffd37564f950e17b634496f4dd0255ac0a3f64->enter($__internal_abfcae5e855e622ec95939c1e2ffd37564f950e17b634496f4dd0255ac0a3f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>
#container {
  text-align: center;
  padding: 50px;
}

h1 {
  border: 1px solid #FF0000;
  font-size: 25px;
  color:#FF0000;
  padding: 20px;
  width: auto;
}
</style>
";
        
        $__internal_abfcae5e855e622ec95939c1e2ffd37564f950e17b634496f4dd0255ac0a3f64->leave($__internal_abfcae5e855e622ec95939c1e2ffd37564f950e17b634496f4dd0255ac0a3f64_prof);

        
        $__internal_21dc79aa0df431e49994ef3bb1201307b8dd1cadbcd92bf904027f75504d6583->leave($__internal_21dc79aa0df431e49994ef3bb1201307b8dd1cadbcd92bf904027f75504d6583_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0fd3a8a3e4c208a84c70608ad974aa13f205c931a972a887f10acf358999b05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0fd3a8a3e4c208a84c70608ad974aa13f205c931a972a887f10acf358999b05->enter($__internal_d0fd3a8a3e4c208a84c70608ad974aa13f205c931a972a887f10acf358999b05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_db5192cac0b544908ecfe8e2024a84416d1ca4bc8bb879bf2fc9b7f4663abec1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5192cac0b544908ecfe8e2024a84416d1ca4bc8bb879bf2fc9b7f4663abec1->enter($__internal_db5192cac0b544908ecfe8e2024a84416d1ca4bc8bb879bf2fc9b7f4663abec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "  <div id=\"wrapper\">
      <div id=\"container\">
          <h1>
            ";
        // line 27
        echo twig_escape_filter($this->env, ($context["message"] ?? $this->getContext($context, "message")), "html", null, true);
        echo "
          </h1>
        </div>
      </div>
";
        
        $__internal_db5192cac0b544908ecfe8e2024a84416d1ca4bc8bb879bf2fc9b7f4663abec1->leave($__internal_db5192cac0b544908ecfe8e2024a84416d1ca4bc8bb879bf2fc9b7f4663abec1_prof);

        
        $__internal_d0fd3a8a3e4c208a84c70608ad974aa13f205c931a972a887f10acf358999b05->leave($__internal_d0fd3a8a3e4c208a84c70608ad974aa13f205c931a972a887f10acf358999b05_prof);

    }

    public function getTemplateName()
    {
        return "::accessDenied.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 27,  104 => 24,  95 => 23,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  Access Denied!
{% endblock %}

{% block stylesheet %}
<style>
#container {
  text-align: center;
  padding: 50px;
}

h1 {
  border: 1px solid #FF0000;
  font-size: 25px;
  color:#FF0000;
  padding: 20px;
  width: auto;
}
</style>
{% endblock %}

{% block body %}
  <div id=\"wrapper\">
      <div id=\"container\">
          <h1>
            {{ message }}
          </h1>
        </div>
      </div>
{% endblock %}
", "::accessDenied.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/accessDenied.html.twig");
    }
}
