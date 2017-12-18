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
        $__internal_a82b7f28dce5ed8440f70e0ccd54fc4053eccd6c0cff65d240790535d2497cbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a82b7f28dce5ed8440f70e0ccd54fc4053eccd6c0cff65d240790535d2497cbf->enter($__internal_a82b7f28dce5ed8440f70e0ccd54fc4053eccd6c0cff65d240790535d2497cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":module:form.html.twig"));

        $__internal_f5435cc17a760cedb5734ea47fa598994126c406b4db1a5596989ddd950c3c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5435cc17a760cedb5734ea47fa598994126c406b4db1a5596989ddd950c3c75->enter($__internal_f5435cc17a760cedb5734ea47fa598994126c406b4db1a5596989ddd950c3c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":module:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a82b7f28dce5ed8440f70e0ccd54fc4053eccd6c0cff65d240790535d2497cbf->leave($__internal_a82b7f28dce5ed8440f70e0ccd54fc4053eccd6c0cff65d240790535d2497cbf_prof);

        
        $__internal_f5435cc17a760cedb5734ea47fa598994126c406b4db1a5596989ddd950c3c75->leave($__internal_f5435cc17a760cedb5734ea47fa598994126c406b4db1a5596989ddd950c3c75_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_32ce5409a67a5dbef8eadee75d264db4ed025bcec8e996bb9d19e11ef8c0704e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32ce5409a67a5dbef8eadee75d264db4ed025bcec8e996bb9d19e11ef8c0704e->enter($__internal_32ce5409a67a5dbef8eadee75d264db4ed025bcec8e996bb9d19e11ef8c0704e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7a4e926b1f35d23fc09fd9320741fd365accc5ff9f80ab8b2c0af7e8d39fec43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a4e926b1f35d23fc09fd9320741fd365accc5ff9f80ab8b2c0af7e8d39fec43->enter($__internal_7a4e926b1f35d23fc09fd9320741fd365accc5ff9f80ab8b2c0af7e8d39fec43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Module") : ("Edit Module"));
        echo "
";
        
        $__internal_7a4e926b1f35d23fc09fd9320741fd365accc5ff9f80ab8b2c0af7e8d39fec43->leave($__internal_7a4e926b1f35d23fc09fd9320741fd365accc5ff9f80ab8b2c0af7e8d39fec43_prof);

        
        $__internal_32ce5409a67a5dbef8eadee75d264db4ed025bcec8e996bb9d19e11ef8c0704e->leave($__internal_32ce5409a67a5dbef8eadee75d264db4ed025bcec8e996bb9d19e11ef8c0704e_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_48cb4dbbe21f0cef45c55c64a8e2f62a5d64a0cac7ff515e5037204a0137ef11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48cb4dbbe21f0cef45c55c64a8e2f62a5d64a0cac7ff515e5037204a0137ef11->enter($__internal_48cb4dbbe21f0cef45c55c64a8e2f62a5d64a0cac7ff515e5037204a0137ef11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_329b8dd7616988c413713c6ab18d5f3c5043bc84cf05d3f532dbce1078abd1e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_329b8dd7616988c413713c6ab18d5f3c5043bc84cf05d3f532dbce1078abd1e4->enter($__internal_329b8dd7616988c413713c6ab18d5f3c5043bc84cf05d3f532dbce1078abd1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_329b8dd7616988c413713c6ab18d5f3c5043bc84cf05d3f532dbce1078abd1e4->leave($__internal_329b8dd7616988c413713c6ab18d5f3c5043bc84cf05d3f532dbce1078abd1e4_prof);

        
        $__internal_48cb4dbbe21f0cef45c55c64a8e2f62a5d64a0cac7ff515e5037204a0137ef11->leave($__internal_48cb4dbbe21f0cef45c55c64a8e2f62a5d64a0cac7ff515e5037204a0137ef11_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_c2ba5d1e43ddb72bd8c20eb4b700df35d0c1928e7694c6c50063a0224cf8ff75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2ba5d1e43ddb72bd8c20eb4b700df35d0c1928e7694c6c50063a0224cf8ff75->enter($__internal_c2ba5d1e43ddb72bd8c20eb4b700df35d0c1928e7694c6c50063a0224cf8ff75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ff5b732ce4a9556ab058467b8dd613e0aeeb7e2838496d01ca25bda3d438e2cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff5b732ce4a9556ab058467b8dd613e0aeeb7e2838496d01ca25bda3d438e2cc->enter($__internal_ff5b732ce4a9556ab058467b8dd613e0aeeb7e2838496d01ca25bda3d438e2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

      <label for=\"form[module_curriculum]\">Module Curriculum</label>
      <select name=\"form[module_curriculum]\">
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["curriculums"] ?? $this->getContext($context, "curriculums")));
        foreach ($context['_seq'] as $context["_key"] => $context["curriculum"]) {
            // line 33
            echo "          ";
            if (($this->getAttribute($context["curriculum"], "curriculumType", array()) == "modularized")) {
                // line 34
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["curriculum"], "id", array()), "html", null, true);
                echo "\" ";
                echo ((($this->getAttribute(($context["form"] ?? null), "module_curriculum", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "module_curriculum", array()) == $this->getAttribute($context["curriculum"], "id", array())))) ? ("selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["curriculum"], "curriculumName", array()), "html", null, true);
                echo "</option>
          ";
            }
            // line 36
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curriculum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "      </select>

      <label for=\"form[module_school]\">Module School</label>
      <select name=\"form[module_school]\">
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["schools"] ?? $this->getContext($context, "schools")));
        foreach ($context['_seq'] as $context["_key"] => $context["school"]) {
            // line 42
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "id", array()), "html", null, true);
            echo "\" ";
            echo ((($this->getAttribute(($context["form"] ?? null), "module_school", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "module_school", array()) == $this->getAttribute($context["school"], "id", array())))) ? ("selected") : (""));
            echo " >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "schoolName", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['school'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "      </select>

      <button>";
        // line 46
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Create Module") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_ff5b732ce4a9556ab058467b8dd613e0aeeb7e2838496d01ca25bda3d438e2cc->leave($__internal_ff5b732ce4a9556ab058467b8dd613e0aeeb7e2838496d01ca25bda3d438e2cc_prof);

        
        $__internal_c2ba5d1e43ddb72bd8c20eb4b700df35d0c1928e7694c6c50063a0224cf8ff75->leave($__internal_c2ba5d1e43ddb72bd8c20eb4b700df35d0c1928e7694c6c50063a0224cf8ff75_prof);

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
        return array (  184 => 46,  180 => 44,  167 => 42,  163 => 41,  157 => 37,  151 => 36,  141 => 34,  138 => 33,  134 => 32,  127 => 28,  121 => 25,  115 => 22,  109 => 19,  103 => 16,  99 => 15,  95 => 13,  86 => 12,  73 => 7,  64 => 6,  51 => 3,  42 => 2,  11 => 1,);
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

      <label for=\"form[module_curriculum]\">Module Curriculum</label>
      <select name=\"form[module_curriculum]\">
        {% for curriculum in curriculums %}
          {% if (curriculum.curriculumType == 'modularized') %}
            <option value=\"{{ curriculum.id }}\" {{ (form.module_curriculum is defined and form.module_curriculum == curriculum.id) ? 'selected' : '' }}>{{ curriculum.curriculumName }}</option>
          {% endif %}
        {% endfor %}
      </select>

      <label for=\"form[module_school]\">Module School</label>
      <select name=\"form[module_school]\">
        {% for school in schools %}
          <option value=\"{{ school.id }}\" {{ (form.module_school is defined and form.module_school == school.id) ? 'selected' : '' }} >{{ school.schoolName }}</option>
        {% endfor %}
      </select>

      <button>{{ (mode == 'new') ? 'Create Module' : 'Save Changes' }}</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", ":module:form.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/module/form.html.twig");
    }
}
