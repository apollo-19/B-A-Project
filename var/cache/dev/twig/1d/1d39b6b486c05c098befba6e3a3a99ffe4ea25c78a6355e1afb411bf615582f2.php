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
        $__internal_6c05defb3bff1ca8edca1647b457e12d3c631128c6e64ef6732a4fcd4efc75f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c05defb3bff1ca8edca1647b457e12d3c631128c6e64ef6732a4fcd4efc75f8->enter($__internal_6c05defb3bff1ca8edca1647b457e12d3c631128c6e64ef6732a4fcd4efc75f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::accessDenied.html.twig"));

        $__internal_aab10eb572ea79697fa8396d15dfc6496a5de6e34709d57fda99f7e8d371b9ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aab10eb572ea79697fa8396d15dfc6496a5de6e34709d57fda99f7e8d371b9ba->enter($__internal_aab10eb572ea79697fa8396d15dfc6496a5de6e34709d57fda99f7e8d371b9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::accessDenied.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c05defb3bff1ca8edca1647b457e12d3c631128c6e64ef6732a4fcd4efc75f8->leave($__internal_6c05defb3bff1ca8edca1647b457e12d3c631128c6e64ef6732a4fcd4efc75f8_prof);

        
        $__internal_aab10eb572ea79697fa8396d15dfc6496a5de6e34709d57fda99f7e8d371b9ba->leave($__internal_aab10eb572ea79697fa8396d15dfc6496a5de6e34709d57fda99f7e8d371b9ba_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_8369ae104887d30e3a1f5e791047b17b0ce0ff8606dc50d2b9f5f22f48ab76b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8369ae104887d30e3a1f5e791047b17b0ce0ff8606dc50d2b9f5f22f48ab76b7->enter($__internal_8369ae104887d30e3a1f5e791047b17b0ce0ff8606dc50d2b9f5f22f48ab76b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a653c79e88b55940eaa7af2bb63882381bc960fade7f85aca04e25351ef79abd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a653c79e88b55940eaa7af2bb63882381bc960fade7f85aca04e25351ef79abd->enter($__internal_a653c79e88b55940eaa7af2bb63882381bc960fade7f85aca04e25351ef79abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Access Denied!
";
        
        $__internal_a653c79e88b55940eaa7af2bb63882381bc960fade7f85aca04e25351ef79abd->leave($__internal_a653c79e88b55940eaa7af2bb63882381bc960fade7f85aca04e25351ef79abd_prof);

        
        $__internal_8369ae104887d30e3a1f5e791047b17b0ce0ff8606dc50d2b9f5f22f48ab76b7->leave($__internal_8369ae104887d30e3a1f5e791047b17b0ce0ff8606dc50d2b9f5f22f48ab76b7_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_a530a73683117980c4b574bcec2e196a8bbf419b3f6ef02779cdc8817d3ff745 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a530a73683117980c4b574bcec2e196a8bbf419b3f6ef02779cdc8817d3ff745->enter($__internal_a530a73683117980c4b574bcec2e196a8bbf419b3f6ef02779cdc8817d3ff745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_826a5b29114374153e7e200937d8880e443cd380d4341647dd2f8537fbc6a2e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_826a5b29114374153e7e200937d8880e443cd380d4341647dd2f8537fbc6a2e5->enter($__internal_826a5b29114374153e7e200937d8880e443cd380d4341647dd2f8537fbc6a2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_826a5b29114374153e7e200937d8880e443cd380d4341647dd2f8537fbc6a2e5->leave($__internal_826a5b29114374153e7e200937d8880e443cd380d4341647dd2f8537fbc6a2e5_prof);

        
        $__internal_a530a73683117980c4b574bcec2e196a8bbf419b3f6ef02779cdc8817d3ff745->leave($__internal_a530a73683117980c4b574bcec2e196a8bbf419b3f6ef02779cdc8817d3ff745_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_67cfaf92ac76a795aab3a4ac26736b9ae27d99edb3eefd4bedcdc089332eab5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67cfaf92ac76a795aab3a4ac26736b9ae27d99edb3eefd4bedcdc089332eab5a->enter($__internal_67cfaf92ac76a795aab3a4ac26736b9ae27d99edb3eefd4bedcdc089332eab5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_af49c568c076ef35e252e892129144f6100c31e410bc0f170482a1a353e039b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af49c568c076ef35e252e892129144f6100c31e410bc0f170482a1a353e039b1->enter($__internal_af49c568c076ef35e252e892129144f6100c31e410bc0f170482a1a353e039b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_af49c568c076ef35e252e892129144f6100c31e410bc0f170482a1a353e039b1->leave($__internal_af49c568c076ef35e252e892129144f6100c31e410bc0f170482a1a353e039b1_prof);

        
        $__internal_67cfaf92ac76a795aab3a4ac26736b9ae27d99edb3eefd4bedcdc089332eab5a->leave($__internal_67cfaf92ac76a795aab3a4ac26736b9ae27d99edb3eefd4bedcdc089332eab5a_prof);

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
", "::accessDenied.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/accessDenied.html.twig");
    }
}
