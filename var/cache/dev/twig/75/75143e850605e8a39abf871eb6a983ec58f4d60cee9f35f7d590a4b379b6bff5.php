<?php

/* :default:signin.html.twig */
class __TwigTemplate_aa819ff7403ce37efe2fdf6accb929f285c9ed3fd5be8e39a550e30d69b4d4a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:signin.html.twig", 1);
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
        $__internal_01909db36872cefc971a8ba11123617c53e2b783ec0607fd4f431ce57c4c4264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01909db36872cefc971a8ba11123617c53e2b783ec0607fd4f431ce57c4c4264->enter($__internal_01909db36872cefc971a8ba11123617c53e2b783ec0607fd4f431ce57c4c4264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:signin.html.twig"));

        $__internal_07b8ae2b521fd3ea4f698f38359182f9d9fc533e83a64e4571dcd5ddb530d2c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b8ae2b521fd3ea4f698f38359182f9d9fc533e83a64e4571dcd5ddb530d2c5->enter($__internal_07b8ae2b521fd3ea4f698f38359182f9d9fc533e83a64e4571dcd5ddb530d2c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:signin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01909db36872cefc971a8ba11123617c53e2b783ec0607fd4f431ce57c4c4264->leave($__internal_01909db36872cefc971a8ba11123617c53e2b783ec0607fd4f431ce57c4c4264_prof);

        
        $__internal_07b8ae2b521fd3ea4f698f38359182f9d9fc533e83a64e4571dcd5ddb530d2c5->leave($__internal_07b8ae2b521fd3ea4f698f38359182f9d9fc533e83a64e4571dcd5ddb530d2c5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d3952a6bf17cca041b4ce968d291677bc753478e503122c6e86132bb23b3d595 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3952a6bf17cca041b4ce968d291677bc753478e503122c6e86132bb23b3d595->enter($__internal_d3952a6bf17cca041b4ce968d291677bc753478e503122c6e86132bb23b3d595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4fe13e23d516bd4d8af72eae6b4ed4028e17b0be8617bf2009093a09d03ce32c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fe13e23d516bd4d8af72eae6b4ed4028e17b0be8617bf2009093a09d03ce32c->enter($__internal_4fe13e23d516bd4d8af72eae6b4ed4028e17b0be8617bf2009093a09d03ce32c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Sign In
";
        
        $__internal_4fe13e23d516bd4d8af72eae6b4ed4028e17b0be8617bf2009093a09d03ce32c->leave($__internal_4fe13e23d516bd4d8af72eae6b4ed4028e17b0be8617bf2009093a09d03ce32c_prof);

        
        $__internal_d3952a6bf17cca041b4ce968d291677bc753478e503122c6e86132bb23b3d595->leave($__internal_d3952a6bf17cca041b4ce968d291677bc753478e503122c6e86132bb23b3d595_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_0fa7cf0f1b5257b2c590f318d79539bdd76b66279e5fd65a88f7016398ca5f08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fa7cf0f1b5257b2c590f318d79539bdd76b66279e5fd65a88f7016398ca5f08->enter($__internal_0fa7cf0f1b5257b2c590f318d79539bdd76b66279e5fd65a88f7016398ca5f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_5d3d5927bdc24cc045a03f0f09ee90b9af97cccc4b8e4a61f6d27acb24350de6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d3d5927bdc24cc045a03f0f09ee90b9af97cccc4b8e4a61f6d27acb24350de6->enter($__internal_5d3d5927bdc24cc045a03f0f09ee90b9af97cccc4b8e4a61f6d27acb24350de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>
.form input {
  width: 325px;
}

.form select {
  width: 350px;
}

.form button {
  width: 150px;
  float: right;
}
</style>
";
        
        $__internal_5d3d5927bdc24cc045a03f0f09ee90b9af97cccc4b8e4a61f6d27acb24350de6->leave($__internal_5d3d5927bdc24cc045a03f0f09ee90b9af97cccc4b8e4a61f6d27acb24350de6_prof);

        
        $__internal_0fa7cf0f1b5257b2c590f318d79539bdd76b66279e5fd65a88f7016398ca5f08->leave($__internal_0fa7cf0f1b5257b2c590f318d79539bdd76b66279e5fd65a88f7016398ca5f08_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_d02425cb4405fda21cbf2f4cf7e622b68236ccb276fe708c46c6f403da51e728 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d02425cb4405fda21cbf2f4cf7e622b68236ccb276fe708c46c6f403da51e728->enter($__internal_d02425cb4405fda21cbf2f4cf7e622b68236ccb276fe708c46c6f403da51e728_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1e99f928b1aae521a324eef4ea10e1366455ae1acda5ff3a07b03d3b975ef928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e99f928b1aae521a324eef4ea10e1366455ae1acda5ff3a07b03d3b975ef928->enter($__internal_1e99f928b1aae521a324eef4ea10e1366455ae1acda5ff3a07b03d3b975ef928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText taright\">Sign In</h1>
      <h2 id=\"resultMessage\">";
        // line 27
        echo twig_escape_filter($this->env, ((array_key_exists("result_message", $context)) ? (($context["result_message"] ?? $this->getContext($context, "result_message"))) : ("")), "html", null, true);
        echo "</h2>

      <input type=\"text\" name=\"form[user_name]\" placeholder=\"User Name\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "user_name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "user_name", array())) : ("")), "html", null, true);
        echo "\" required />
      <input type=\"password\" name=\"form[password]\" placeholder=\"Password\" required />

      <button>Sign In</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_1e99f928b1aae521a324eef4ea10e1366455ae1acda5ff3a07b03d3b975ef928->leave($__internal_1e99f928b1aae521a324eef4ea10e1366455ae1acda5ff3a07b03d3b975ef928_prof);

        
        $__internal_d02425cb4405fda21cbf2f4cf7e622b68236ccb276fe708c46c6f403da51e728->leave($__internal_d02425cb4405fda21cbf2f4cf7e622b68236ccb276fe708c46c6f403da51e728_prof);

    }

    public function getTemplateName()
    {
        return ":default:signin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 29,  109 => 27,  104 => 24,  95 => 23,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  Sign In
{% endblock %}

{% block stylesheet %}
<style>
.form input {
  width: 325px;
}

.form select {
  width: 350px;
}

.form button {
  width: 150px;
  float: right;
}
</style>
{% endblock %}

{% block body %}
  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText taright\">Sign In</h1>
      <h2 id=\"resultMessage\">{{ result_message is defined ? result_message : '' }}</h2>

      <input type=\"text\" name=\"form[user_name]\" placeholder=\"User Name\" value=\"{{ form.user_name is defined ? form.user_name : '' }}\" required />
      <input type=\"password\" name=\"form[password]\" placeholder=\"Password\" required />

      <button>Sign In</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", ":default:signin.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/default/signin.html.twig");
    }
}
