<?php

/* :section:form.html.twig */
class __TwigTemplate_669193717c23f4e33c249df6e08e7defa95859f69d1e98a5365bc6e99436b56d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":section:form.html.twig", 1);
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
        $__internal_4a509069b01af881ee2cec337ff51cc4fc986bc9e7b2eadf0a33e0c258095f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a509069b01af881ee2cec337ff51cc4fc986bc9e7b2eadf0a33e0c258095f8d->enter($__internal_4a509069b01af881ee2cec337ff51cc4fc986bc9e7b2eadf0a33e0c258095f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":section:form.html.twig"));

        $__internal_f095abc3430f4762e35f7c985c9a34eabb0227ff85d01748b7e4f18601195641 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f095abc3430f4762e35f7c985c9a34eabb0227ff85d01748b7e4f18601195641->enter($__internal_f095abc3430f4762e35f7c985c9a34eabb0227ff85d01748b7e4f18601195641_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":section:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a509069b01af881ee2cec337ff51cc4fc986bc9e7b2eadf0a33e0c258095f8d->leave($__internal_4a509069b01af881ee2cec337ff51cc4fc986bc9e7b2eadf0a33e0c258095f8d_prof);

        
        $__internal_f095abc3430f4762e35f7c985c9a34eabb0227ff85d01748b7e4f18601195641->leave($__internal_f095abc3430f4762e35f7c985c9a34eabb0227ff85d01748b7e4f18601195641_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_76c8a080fcbe55af7372e898098d93e461fcc05e0b07fd633e651a7fb221e93b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76c8a080fcbe55af7372e898098d93e461fcc05e0b07fd633e651a7fb221e93b->enter($__internal_76c8a080fcbe55af7372e898098d93e461fcc05e0b07fd633e651a7fb221e93b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2321d59106b0f86ff777e7be7cbfa3f96d54415f109cb2f8dc09d074d131d860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2321d59106b0f86ff777e7be7cbfa3f96d54415f109cb2f8dc09d074d131d860->enter($__internal_2321d59106b0f86ff777e7be7cbfa3f96d54415f109cb2f8dc09d074d131d860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Section") : ("Edit Section"));
        echo "
";
        
        $__internal_2321d59106b0f86ff777e7be7cbfa3f96d54415f109cb2f8dc09d074d131d860->leave($__internal_2321d59106b0f86ff777e7be7cbfa3f96d54415f109cb2f8dc09d074d131d860_prof);

        
        $__internal_76c8a080fcbe55af7372e898098d93e461fcc05e0b07fd633e651a7fb221e93b->leave($__internal_76c8a080fcbe55af7372e898098d93e461fcc05e0b07fd633e651a7fb221e93b_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_fb2e911ee59b6541e76e0799082fc2b44b7addcdd14d9c509791f9d6df412bd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb2e911ee59b6541e76e0799082fc2b44b7addcdd14d9c509791f9d6df412bd6->enter($__internal_fb2e911ee59b6541e76e0799082fc2b44b7addcdd14d9c509791f9d6df412bd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_e50b1a32bc66db9f303961176b45daa8946519e922c5db9bb1629524cac3a939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e50b1a32bc66db9f303961176b45daa8946519e922c5db9bb1629524cac3a939->enter($__internal_e50b1a32bc66db9f303961176b45daa8946519e922c5db9bb1629524cac3a939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_e50b1a32bc66db9f303961176b45daa8946519e922c5db9bb1629524cac3a939->leave($__internal_e50b1a32bc66db9f303961176b45daa8946519e922c5db9bb1629524cac3a939_prof);

        
        $__internal_fb2e911ee59b6541e76e0799082fc2b44b7addcdd14d9c509791f9d6df412bd6->leave($__internal_fb2e911ee59b6541e76e0799082fc2b44b7addcdd14d9c509791f9d6df412bd6_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_58e925ec13b2a1aff22509fc0acc4b61ccd2fdc40b58db5b02cabd9b62d8448c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58e925ec13b2a1aff22509fc0acc4b61ccd2fdc40b58db5b02cabd9b62d8448c->enter($__internal_58e925ec13b2a1aff22509fc0acc4b61ccd2fdc40b58db5b02cabd9b62d8448c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bc02040701571fb2d7fb4c86d1eb7a360fe95eefb99d8125747511e65450548a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc02040701571fb2d7fb4c86d1eb7a360fe95eefb99d8125747511e65450548a->enter($__internal_bc02040701571fb2d7fb4c86d1eb7a360fe95eefb99d8125747511e65450548a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Section") : ("Edit Section"));
        echo "</h1>
      <h2>";
        // line 16
        echo twig_escape_filter($this->env, ((array_key_exists("result_message", $context)) ? (($context["result_message"] ?? $this->getContext($context, "result_message"))) : ("")), "html", null, true);
        echo "</h2>

      <label for=\"form[section_code]\">Section Code</label>
      <input type=\"text\" name=\"form[section_code]\" placeholder=\"DoIM\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "section_code", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "section_code", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[section_name]\">Section Name</label>
      <input type=\"text\" name=\"form[section_name]\" placeholder=\"Section One\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "section_name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "section_name", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[section_batch]\">Section Batch</label>
      <select name=\"form[section_batch]\">
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["batches"] ?? $this->getContext($context, "batches")));
        foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
            // line 27
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["batch"], "id", array()), "html", null, true);
            echo "\" ";
            echo ((($this->getAttribute(($context["form"] ?? null), "section_batch", array(), "any", true, true) && ($this->getAttribute($context["batch"], "id", array()) == $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "section_batch", array())))) ? ("selected") : (""));
            echo " >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["batch"], "batchName", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['batch'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "      </select>

      <label for=\"form[section_curriculum]\">Section Curriculum</label>
      <select name=\"form[section_curriculum]\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["curriculums"] ?? $this->getContext($context, "curriculums")));
        foreach ($context['_seq'] as $context["_key"] => $context["curriculum"]) {
            // line 34
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["curriculum"], "id", array()), "html", null, true);
            echo "\" ";
            echo ((($this->getAttribute(($context["form"] ?? null), "section_curriculum", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "section_curriculum", array()) == $this->getAttribute($context["curriculum"], "id", array())))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["curriculum"], "curriculumName", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curriculum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "      </select>

      <button>";
        // line 38
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Create Batch") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_bc02040701571fb2d7fb4c86d1eb7a360fe95eefb99d8125747511e65450548a->leave($__internal_bc02040701571fb2d7fb4c86d1eb7a360fe95eefb99d8125747511e65450548a_prof);

        
        $__internal_58e925ec13b2a1aff22509fc0acc4b61ccd2fdc40b58db5b02cabd9b62d8448c->leave($__internal_58e925ec13b2a1aff22509fc0acc4b61ccd2fdc40b58db5b02cabd9b62d8448c_prof);

    }

    public function getTemplateName()
    {
        return ":section:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 38,  162 => 36,  149 => 34,  145 => 33,  139 => 29,  126 => 27,  122 => 26,  115 => 22,  109 => 19,  103 => 16,  99 => 15,  95 => 13,  86 => 12,  73 => 7,  64 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  {{ (mode == 'new') ? 'New Section' : 'Edit Section' }}
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">{{ (mode == 'new') ? 'New Section' : 'Edit Section' }}</h1>
      <h2>{{ result_message is defined ? result_message : '' }}</h2>

      <label for=\"form[section_code]\">Section Code</label>
      <input type=\"text\" name=\"form[section_code]\" placeholder=\"DoIM\" value=\"{{ form.section_code is defined ? form.section_code : '' }}\" required />

      <label for=\"form[section_name]\">Section Name</label>
      <input type=\"text\" name=\"form[section_name]\" placeholder=\"Section One\" value=\"{{ form.section_name is defined ? form.section_name : '' }}\" required />

      <label for=\"form[section_batch]\">Section Batch</label>
      <select name=\"form[section_batch]\">
        {% for batch in batches %}
          <option value=\"{{ batch.id }}\" {{ (form.section_batch is defined and batch.id == form.section_batch) ? 'selected' : '' }} >{{ batch.batchName }}</option>
        {% endfor %}
      </select>

      <label for=\"form[section_curriculum]\">Section Curriculum</label>
      <select name=\"form[section_curriculum]\">
        {% for curriculum in curriculums %}
          <option value=\"{{ curriculum.id }}\" {{ (form.section_curriculum is defined and form.section_curriculum == curriculum.id) ? 'selected' : '' }}>{{ curriculum.curriculumName }}</option>
        {% endfor %}
      </select>

      <button>{{ (mode == 'new') ? 'Create Batch' : 'Save Changes' }}</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", ":section:form.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/section/form.html.twig");
    }
}
