<?php

/* :batch:form.html.twig */
class __TwigTemplate_b107eeb96232d9f1952d3cbf12187e031fcbba5735c7709ad6b328b031b06929 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":batch:form.html.twig", 1);
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
        $__internal_42ce5356179bc01a1bc23828e991b48950eb82ff9f30b40b7de39bf5d02515db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42ce5356179bc01a1bc23828e991b48950eb82ff9f30b40b7de39bf5d02515db->enter($__internal_42ce5356179bc01a1bc23828e991b48950eb82ff9f30b40b7de39bf5d02515db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":batch:form.html.twig"));

        $__internal_a5f3287bbe299435ddacd4f13a03006266a85a02604b28b9338466726eb76b2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5f3287bbe299435ddacd4f13a03006266a85a02604b28b9338466726eb76b2a->enter($__internal_a5f3287bbe299435ddacd4f13a03006266a85a02604b28b9338466726eb76b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":batch:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42ce5356179bc01a1bc23828e991b48950eb82ff9f30b40b7de39bf5d02515db->leave($__internal_42ce5356179bc01a1bc23828e991b48950eb82ff9f30b40b7de39bf5d02515db_prof);

        
        $__internal_a5f3287bbe299435ddacd4f13a03006266a85a02604b28b9338466726eb76b2a->leave($__internal_a5f3287bbe299435ddacd4f13a03006266a85a02604b28b9338466726eb76b2a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_245d2747e009a97b308abb267b4c80e16779c1b87361a54eeb66a596596b54eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_245d2747e009a97b308abb267b4c80e16779c1b87361a54eeb66a596596b54eb->enter($__internal_245d2747e009a97b308abb267b4c80e16779c1b87361a54eeb66a596596b54eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3336916369e2204bc71b25849459df8cd96719b8b48ae82dd867ee71065002c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3336916369e2204bc71b25849459df8cd96719b8b48ae82dd867ee71065002c6->enter($__internal_3336916369e2204bc71b25849459df8cd96719b8b48ae82dd867ee71065002c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Batch") : ("Edit Batch"));
        echo "
";
        
        $__internal_3336916369e2204bc71b25849459df8cd96719b8b48ae82dd867ee71065002c6->leave($__internal_3336916369e2204bc71b25849459df8cd96719b8b48ae82dd867ee71065002c6_prof);

        
        $__internal_245d2747e009a97b308abb267b4c80e16779c1b87361a54eeb66a596596b54eb->leave($__internal_245d2747e009a97b308abb267b4c80e16779c1b87361a54eeb66a596596b54eb_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_cb7b03a38cd0628ce50a217dda25c02466a7fe3f3f1e9fdc6170869bad3f92cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb7b03a38cd0628ce50a217dda25c02466a7fe3f3f1e9fdc6170869bad3f92cf->enter($__internal_cb7b03a38cd0628ce50a217dda25c02466a7fe3f3f1e9fdc6170869bad3f92cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_fb990c68f59672dc4ff409433e0614a27e0c279a5322988181e83a908bdc9ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb990c68f59672dc4ff409433e0614a27e0c279a5322988181e83a908bdc9ad5->enter($__internal_fb990c68f59672dc4ff409433e0614a27e0c279a5322988181e83a908bdc9ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_fb990c68f59672dc4ff409433e0614a27e0c279a5322988181e83a908bdc9ad5->leave($__internal_fb990c68f59672dc4ff409433e0614a27e0c279a5322988181e83a908bdc9ad5_prof);

        
        $__internal_cb7b03a38cd0628ce50a217dda25c02466a7fe3f3f1e9fdc6170869bad3f92cf->leave($__internal_cb7b03a38cd0628ce50a217dda25c02466a7fe3f3f1e9fdc6170869bad3f92cf_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9263ca08d2458bbed50ed05b2fcbec06c5c033d5aab67d78da4e43cdc6c48cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9263ca08d2458bbed50ed05b2fcbec06c5c033d5aab67d78da4e43cdc6c48cc->enter($__internal_f9263ca08d2458bbed50ed05b2fcbec06c5c033d5aab67d78da4e43cdc6c48cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa3726c98c53b39d0c31bec1de0ff5277405a809995bf2f9e5a83940897257be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa3726c98c53b39d0c31bec1de0ff5277405a809995bf2f9e5a83940897257be->enter($__internal_fa3726c98c53b39d0c31bec1de0ff5277405a809995bf2f9e5a83940897257be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fa3726c98c53b39d0c31bec1de0ff5277405a809995bf2f9e5a83940897257be->leave($__internal_fa3726c98c53b39d0c31bec1de0ff5277405a809995bf2f9e5a83940897257be_prof);

        
        $__internal_f9263ca08d2458bbed50ed05b2fcbec06c5c033d5aab67d78da4e43cdc6c48cc->leave($__internal_f9263ca08d2458bbed50ed05b2fcbec06c5c033d5aab67d78da4e43cdc6c48cc_prof);

    }

    public function getTemplateName()
    {
        return ":batch:form.html.twig";
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
", ":batch:form.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/batch/form.html.twig");
    }
}
