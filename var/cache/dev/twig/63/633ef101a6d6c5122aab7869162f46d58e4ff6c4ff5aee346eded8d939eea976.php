<?php

/* batch/form.html.twig */
class __TwigTemplate_b107eeb96232d9f1952d3cbf12187e031fcbba5735c7709ad6b328b031b06929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "batch/form.html.twig", 1);
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
        $__internal_280603e70a0048ebc3b831ce54653f11eb4bddb549912b56fd794f0afca785de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_280603e70a0048ebc3b831ce54653f11eb4bddb549912b56fd794f0afca785de->enter($__internal_280603e70a0048ebc3b831ce54653f11eb4bddb549912b56fd794f0afca785de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "batch/form.html.twig"));

        $__internal_2ac30b1737a6e3a68e4faba886b4446454005ae51b6956be82d998ff716409fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ac30b1737a6e3a68e4faba886b4446454005ae51b6956be82d998ff716409fc->enter($__internal_2ac30b1737a6e3a68e4faba886b4446454005ae51b6956be82d998ff716409fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "batch/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_280603e70a0048ebc3b831ce54653f11eb4bddb549912b56fd794f0afca785de->leave($__internal_280603e70a0048ebc3b831ce54653f11eb4bddb549912b56fd794f0afca785de_prof);

        
        $__internal_2ac30b1737a6e3a68e4faba886b4446454005ae51b6956be82d998ff716409fc->leave($__internal_2ac30b1737a6e3a68e4faba886b4446454005ae51b6956be82d998ff716409fc_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_bf6c7cf69ae8f341a0fb1a75433b95be28d216a5e604b045f4e6bf2bd44b1e9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf6c7cf69ae8f341a0fb1a75433b95be28d216a5e604b045f4e6bf2bd44b1e9a->enter($__internal_bf6c7cf69ae8f341a0fb1a75433b95be28d216a5e604b045f4e6bf2bd44b1e9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fcf28db28ed0b040eabf9faea292e2007c97a551e48f1eaa2380041b20535b0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf28db28ed0b040eabf9faea292e2007c97a551e48f1eaa2380041b20535b0d->enter($__internal_fcf28db28ed0b040eabf9faea292e2007c97a551e48f1eaa2380041b20535b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Batch") : ("Edit Batch"));
        echo "
";
        
        $__internal_fcf28db28ed0b040eabf9faea292e2007c97a551e48f1eaa2380041b20535b0d->leave($__internal_fcf28db28ed0b040eabf9faea292e2007c97a551e48f1eaa2380041b20535b0d_prof);

        
        $__internal_bf6c7cf69ae8f341a0fb1a75433b95be28d216a5e604b045f4e6bf2bd44b1e9a->leave($__internal_bf6c7cf69ae8f341a0fb1a75433b95be28d216a5e604b045f4e6bf2bd44b1e9a_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_27c9b697408a7132614a470cf52c663b1a91ab8af2c0fb491a1062ff1f242519 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27c9b697408a7132614a470cf52c663b1a91ab8af2c0fb491a1062ff1f242519->enter($__internal_27c9b697408a7132614a470cf52c663b1a91ab8af2c0fb491a1062ff1f242519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_799a5177debda85b462dc9752478ba1a96a0259781646694eb718eacffa654b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799a5177debda85b462dc9752478ba1a96a0259781646694eb718eacffa654b5->enter($__internal_799a5177debda85b462dc9752478ba1a96a0259781646694eb718eacffa654b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_799a5177debda85b462dc9752478ba1a96a0259781646694eb718eacffa654b5->leave($__internal_799a5177debda85b462dc9752478ba1a96a0259781646694eb718eacffa654b5_prof);

        
        $__internal_27c9b697408a7132614a470cf52c663b1a91ab8af2c0fb491a1062ff1f242519->leave($__internal_27c9b697408a7132614a470cf52c663b1a91ab8af2c0fb491a1062ff1f242519_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_c24fa0d0afc3daa085eeda8f4e1e13509c0a484d0c63bf021972a6a4b116277c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c24fa0d0afc3daa085eeda8f4e1e13509c0a484d0c63bf021972a6a4b116277c->enter($__internal_c24fa0d0afc3daa085eeda8f4e1e13509c0a484d0c63bf021972a6a4b116277c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eacd2f242f86b7043a6ffd7796b8239a9072b856e89b4cbdbeb0c9cf1f9b7071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eacd2f242f86b7043a6ffd7796b8239a9072b856e89b4cbdbeb0c9cf1f9b7071->enter($__internal_eacd2f242f86b7043a6ffd7796b8239a9072b856e89b4cbdbeb0c9cf1f9b7071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Batch") : ("Edit Batch"));
        echo "</h1>
      <h2>";
        // line 16
        echo twig_escape_filter($this->env, ((array_key_exists("result_message", $context)) ? (($context["result_message"] ?? $this->getContext($context, "result_message"))) : ("")), "html", null, true);
        echo "</h2>

      <label for=\"form[batch_code]\">Batch Code</label>
      <input type=\"text\" name=\"form[batch_code]\" placeholder=\"DoIM\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "batch_code", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "batch_code", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[batch_name]\">Batch Name</label>
      <input type=\"text\" name=\"form[batch_name]\" placeholder=\"Batch One\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "batch_name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "batch_name", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[batch_year]\">Batch Year</label>
      <input type=\"text\" name=\"form[batch_year]\" placeholder=\"Batch One\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "batch_year", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "batch_year", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[batch_school]\">Batch School</label>
      <select name=\"form[batch_school]\">
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["schools"] ?? $this->getContext($context, "schools")));
        foreach ($context['_seq'] as $context["_key"] => $context["school"]) {
            // line 30
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "id", array()), "html", null, true);
            echo "\" ";
            echo ((($this->getAttribute(($context["form"] ?? null), "batch_school", array(), "any", true, true) && ($this->getAttribute($context["school"], "id", array()) == $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "batch_school", array())))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "schoolName", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['school'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "      </select>

      <button>";
        // line 34
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Create Batch") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_eacd2f242f86b7043a6ffd7796b8239a9072b856e89b4cbdbeb0c9cf1f9b7071->leave($__internal_eacd2f242f86b7043a6ffd7796b8239a9072b856e89b4cbdbeb0c9cf1f9b7071_prof);

        
        $__internal_c24fa0d0afc3daa085eeda8f4e1e13509c0a484d0c63bf021972a6a4b116277c->leave($__internal_c24fa0d0afc3daa085eeda8f4e1e13509c0a484d0c63bf021972a6a4b116277c_prof);

    }

    public function getTemplateName()
    {
        return "batch/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 34,  145 => 32,  132 => 30,  128 => 29,  121 => 25,  115 => 22,  109 => 19,  103 => 16,  99 => 15,  95 => 13,  86 => 12,  73 => 7,  64 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  {{ (mode == 'new') ? 'New Batch' : 'Edit Batch' }}
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">{{ (mode == 'new') ? 'New Batch' : 'Edit Batch' }}</h1>
      <h2>{{ result_message is defined ? result_message : '' }}</h2>

      <label for=\"form[batch_code]\">Batch Code</label>
      <input type=\"text\" name=\"form[batch_code]\" placeholder=\"DoIM\" value=\"{{ form.batch_code is defined ? form.batch_code : '' }}\" required />

      <label for=\"form[batch_name]\">Batch Name</label>
      <input type=\"text\" name=\"form[batch_name]\" placeholder=\"Batch One\" value=\"{{ form.batch_name is defined ? form.batch_name : '' }}\" required />

      <label for=\"form[batch_year]\">Batch Year</label>
      <input type=\"text\" name=\"form[batch_year]\" placeholder=\"Batch One\" value=\"{{ form.batch_year is defined ? form.batch_year : '' }}\" required />

      <label for=\"form[batch_school]\">Batch School</label>
      <select name=\"form[batch_school]\">
        {% for school in schools %}
          <option value=\"{{ school.id }}\" {{ (form.batch_school is defined and school.id == form.batch_school) ? 'selected' : '' }}>{{ school.schoolName }}</option>
        {% endfor %}
      </select>

      <button>{{ (mode == 'new') ? 'Create Batch' : 'Save Changes' }}</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", "batch/form.html.twig", "/home/apollo-19/github/B-A-Project/app/Resources/views/batch/form.html.twig");
    }
}
