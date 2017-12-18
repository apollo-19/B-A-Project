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
        $__internal_1be7fa9565fc9476a071cb66a52aa71462965875ca3adfb202dead98092f4cde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1be7fa9565fc9476a071cb66a52aa71462965875ca3adfb202dead98092f4cde->enter($__internal_1be7fa9565fc9476a071cb66a52aa71462965875ca3adfb202dead98092f4cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:signin.html.twig"));

        $__internal_f429a805989cbeed7108b808a629fa1e8f555376882abd88ac8649931bb7e522 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f429a805989cbeed7108b808a629fa1e8f555376882abd88ac8649931bb7e522->enter($__internal_f429a805989cbeed7108b808a629fa1e8f555376882abd88ac8649931bb7e522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:signin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1be7fa9565fc9476a071cb66a52aa71462965875ca3adfb202dead98092f4cde->leave($__internal_1be7fa9565fc9476a071cb66a52aa71462965875ca3adfb202dead98092f4cde_prof);

        
        $__internal_f429a805989cbeed7108b808a629fa1e8f555376882abd88ac8649931bb7e522->leave($__internal_f429a805989cbeed7108b808a629fa1e8f555376882abd88ac8649931bb7e522_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_35412ff0100acf11382971e6882f00f228457cb91877d733245782bc416b7422 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35412ff0100acf11382971e6882f00f228457cb91877d733245782bc416b7422->enter($__internal_35412ff0100acf11382971e6882f00f228457cb91877d733245782bc416b7422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d08db6ede9850755c862d527f4ef80c06d2962fe19657f1e5d7c5239a2059cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d08db6ede9850755c862d527f4ef80c06d2962fe19657f1e5d7c5239a2059cbe->enter($__internal_d08db6ede9850755c862d527f4ef80c06d2962fe19657f1e5d7c5239a2059cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Sign In
";
        
        $__internal_d08db6ede9850755c862d527f4ef80c06d2962fe19657f1e5d7c5239a2059cbe->leave($__internal_d08db6ede9850755c862d527f4ef80c06d2962fe19657f1e5d7c5239a2059cbe_prof);

        
        $__internal_35412ff0100acf11382971e6882f00f228457cb91877d733245782bc416b7422->leave($__internal_35412ff0100acf11382971e6882f00f228457cb91877d733245782bc416b7422_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_1fa9d4efbc201d5236770f54fbfeebe2c68492e8c866728c87119ded721f50f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa9d4efbc201d5236770f54fbfeebe2c68492e8c866728c87119ded721f50f4->enter($__internal_1fa9d4efbc201d5236770f54fbfeebe2c68492e8c866728c87119ded721f50f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_f1c4b630c2387afb1ae9d6006322c1708ed90da7fcc6df6dd429684a349e855e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c4b630c2387afb1ae9d6006322c1708ed90da7fcc6df6dd429684a349e855e->enter($__internal_f1c4b630c2387afb1ae9d6006322c1708ed90da7fcc6df6dd429684a349e855e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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
        
        $__internal_f1c4b630c2387afb1ae9d6006322c1708ed90da7fcc6df6dd429684a349e855e->leave($__internal_f1c4b630c2387afb1ae9d6006322c1708ed90da7fcc6df6dd429684a349e855e_prof);

        
        $__internal_1fa9d4efbc201d5236770f54fbfeebe2c68492e8c866728c87119ded721f50f4->leave($__internal_1fa9d4efbc201d5236770f54fbfeebe2c68492e8c866728c87119ded721f50f4_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd2159cfbc10479a0872bdd55851619d62be62dc03ba1947f472374fcc49e623 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd2159cfbc10479a0872bdd55851619d62be62dc03ba1947f472374fcc49e623->enter($__internal_cd2159cfbc10479a0872bdd55851619d62be62dc03ba1947f472374fcc49e623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_977177d45ba443c353e3d530d48c5e536afb828473315ccadc51d59effb9295c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_977177d45ba443c353e3d530d48c5e536afb828473315ccadc51d59effb9295c->enter($__internal_977177d45ba443c353e3d530d48c5e536afb828473315ccadc51d59effb9295c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_977177d45ba443c353e3d530d48c5e536afb828473315ccadc51d59effb9295c->leave($__internal_977177d45ba443c353e3d530d48c5e536afb828473315ccadc51d59effb9295c_prof);

        
        $__internal_cd2159cfbc10479a0872bdd55851619d62be62dc03ba1947f472374fcc49e623->leave($__internal_cd2159cfbc10479a0872bdd55851619d62be62dc03ba1947f472374fcc49e623_prof);

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
", ":default:signin.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/default/signin.html.twig");
    }
}
