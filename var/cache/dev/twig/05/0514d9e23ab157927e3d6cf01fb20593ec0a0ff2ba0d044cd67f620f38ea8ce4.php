<?php

/* :module:form.html.twig */
class __TwigTemplate_b105a703af4b5374d071e6101eaf302ac357e59ef80dabb0d729bcd90ef71f39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":module:form.html.twig", 1);
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
        $__internal_525fb15bba89abe98e45a63f3ec1ec3b5dbfcd428da675d900ec81a5a697828c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_525fb15bba89abe98e45a63f3ec1ec3b5dbfcd428da675d900ec81a5a697828c->enter($__internal_525fb15bba89abe98e45a63f3ec1ec3b5dbfcd428da675d900ec81a5a697828c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":module:form.html.twig"));

        $__internal_251b3a52c4edc0753cdadf33ee62f21c77f88e79f93204c9769eebaa6943db99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_251b3a52c4edc0753cdadf33ee62f21c77f88e79f93204c9769eebaa6943db99->enter($__internal_251b3a52c4edc0753cdadf33ee62f21c77f88e79f93204c9769eebaa6943db99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":module:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_525fb15bba89abe98e45a63f3ec1ec3b5dbfcd428da675d900ec81a5a697828c->leave($__internal_525fb15bba89abe98e45a63f3ec1ec3b5dbfcd428da675d900ec81a5a697828c_prof);

        
        $__internal_251b3a52c4edc0753cdadf33ee62f21c77f88e79f93204c9769eebaa6943db99->leave($__internal_251b3a52c4edc0753cdadf33ee62f21c77f88e79f93204c9769eebaa6943db99_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2cb12e2bd685f71313ad5fa0a391955ef4fb55341a9b46639a250df17acac65b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cb12e2bd685f71313ad5fa0a391955ef4fb55341a9b46639a250df17acac65b->enter($__internal_2cb12e2bd685f71313ad5fa0a391955ef4fb55341a9b46639a250df17acac65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_423490ab006450a7d2e0baef34250467194c5b4bca696f1b213fb446b1cfb5a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_423490ab006450a7d2e0baef34250467194c5b4bca696f1b213fb446b1cfb5a5->enter($__internal_423490ab006450a7d2e0baef34250467194c5b4bca696f1b213fb446b1cfb5a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Module") : ("Edit Module"));
        echo "
";
        
        $__internal_423490ab006450a7d2e0baef34250467194c5b4bca696f1b213fb446b1cfb5a5->leave($__internal_423490ab006450a7d2e0baef34250467194c5b4bca696f1b213fb446b1cfb5a5_prof);

        
        $__internal_2cb12e2bd685f71313ad5fa0a391955ef4fb55341a9b46639a250df17acac65b->leave($__internal_2cb12e2bd685f71313ad5fa0a391955ef4fb55341a9b46639a250df17acac65b_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_e4e58dd648b537bd236707f22895c20ce889b54d0afd38eb96490b8ce1e324ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4e58dd648b537bd236707f22895c20ce889b54d0afd38eb96490b8ce1e324ee->enter($__internal_e4e58dd648b537bd236707f22895c20ce889b54d0afd38eb96490b8ce1e324ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_113a35261227da97a0d973199912439b75929eac65b6ae09b2640161bfc00492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_113a35261227da97a0d973199912439b75929eac65b6ae09b2640161bfc00492->enter($__internal_113a35261227da97a0d973199912439b75929eac65b6ae09b2640161bfc00492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_113a35261227da97a0d973199912439b75929eac65b6ae09b2640161bfc00492->leave($__internal_113a35261227da97a0d973199912439b75929eac65b6ae09b2640161bfc00492_prof);

        
        $__internal_e4e58dd648b537bd236707f22895c20ce889b54d0afd38eb96490b8ce1e324ee->leave($__internal_e4e58dd648b537bd236707f22895c20ce889b54d0afd38eb96490b8ce1e324ee_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ce0a9760e3c382e9e4e9cd6f2c81c35f52f60e2cec42f589699bd53841b8d94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ce0a9760e3c382e9e4e9cd6f2c81c35f52f60e2cec42f589699bd53841b8d94->enter($__internal_1ce0a9760e3c382e9e4e9cd6f2c81c35f52f60e2cec42f589699bd53841b8d94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6679c2fbeb41a796c847b72cc835182f6e5e99ca799191dac0a5d227b83677c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6679c2fbeb41a796c847b72cc835182f6e5e99ca799191dac0a5d227b83677c7->enter($__internal_6679c2fbeb41a796c847b72cc835182f6e5e99ca799191dac0a5d227b83677c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Module") : ("Edit Module"));
        echo "</h1>
      <h2>";
        // line 16
        echo twig_escape_filter($this->env, ((array_key_exists("result_message", $context)) ? (($context["result_message"] ?? $this->getContext($context, "result_message"))) : ("")), "html", null, true);
        echo "</h2>

      <label for=\"form[module_code]\">Module Code</label>
      <input type=\"text\" name=\"form[module_code]\" placeholder=\"MD1221\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "module_code", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "module_code", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[module_name]\">Module Name</label>
      <input type=\"text\" name=\"form[module_name]\" placeholder=\"Module of Medicine\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "module_name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "module_name", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[module_credit_hour]\">Module Credit Hour</label>
      <input type=\"number\" min=\"1\" max=\"50\" name=\"form[module_credit_hour]\" placeholder=\"3\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "module_credit_hour", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "module_credit_hour", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[module_duration]\">Module Duration</label>
      <input type=\"text\" min=\"1\" max=\"15\" name=\"form[module_duration]\" placeholder=\"3\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "module_duration", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "module_duration", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[module_school]\">Module School</label>
      <select name=\"form[module_school]\">
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["schools"] ?? $this->getContext($context, "schools")));
        foreach ($context['_seq'] as $context["_key"] => $context["school"]) {
            // line 33
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "id", array()), "html", null, true);
            echo "\" ";
            echo ((($this->getAttribute($context["school"], "id", array()) == (($this->getAttribute(($context["mySchool"] ?? null), "id", array(), "any", true, true)) ? ($this->getAttribute(($context["mySchool"] ?? $this->getContext($context, "mySchool")), "id", array())) : ("")))) ? ("selected") : (""));
            echo " >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "schoolName", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['school'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "      </select>


      <button>";
        // line 38
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Create Module") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_6679c2fbeb41a796c847b72cc835182f6e5e99ca799191dac0a5d227b83677c7->leave($__internal_6679c2fbeb41a796c847b72cc835182f6e5e99ca799191dac0a5d227b83677c7_prof);

        
        $__internal_1ce0a9760e3c382e9e4e9cd6f2c81c35f52f60e2cec42f589699bd53841b8d94->leave($__internal_1ce0a9760e3c382e9e4e9cd6f2c81c35f52f60e2cec42f589699bd53841b8d94_prof);

    }

    public function getTemplateName()
    {
        return ":module:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 38,  151 => 35,  138 => 33,  134 => 32,  127 => 28,  121 => 25,  115 => 22,  109 => 19,  103 => 16,  99 => 15,  95 => 13,  86 => 12,  73 => 7,  64 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  {{ (mode == 'new') ? 'New Module' : 'Edit Module' }}
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">{{ (mode == 'new') ? 'New Module' : 'Edit Module' }}</h1>
      <h2>{{ result_message is defined ? result_message : '' }}</h2>

      <label for=\"form[module_code]\">Module Code</label>
      <input type=\"text\" name=\"form[module_code]\" placeholder=\"MD1221\" value=\"{{ form.module_code is defined ? form.module_code : '' }}\" required />

      <label for=\"form[module_name]\">Module Name</label>
      <input type=\"text\" name=\"form[module_name]\" placeholder=\"Module of Medicine\" value=\"{{ form.module_name is defined ? form.module_name : '' }}\" required />

      <label for=\"form[module_credit_hour]\">Module Credit Hour</label>
      <input type=\"number\" min=\"1\" max=\"50\" name=\"form[module_credit_hour]\" placeholder=\"3\" value=\"{{ form.module_credit_hour is defined ? form.module_credit_hour : '' }}\" required />

      <label for=\"form[module_duration]\">Module Duration</label>
      <input type=\"text\" min=\"1\" max=\"15\" name=\"form[module_duration]\" placeholder=\"3\" value=\"{{ form.module_duration is defined ? form.module_duration : '' }}\" required />

      <label for=\"form[module_school]\">Module School</label>
      <select name=\"form[module_school]\">
        {% for school in schools %}
          <option value=\"{{ school.id }}\" {{ (school.id == (mySchool.id is defined ? mySchool.id : '')) ? 'selected' : '' }} >{{ school.schoolName }}</option>
        {% endfor %}
      </select>


      <button>{{ (mode == 'new') ? 'Create Module' : 'Save Changes' }}</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", ":module:form.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/module/form.html.twig");
    }
}
