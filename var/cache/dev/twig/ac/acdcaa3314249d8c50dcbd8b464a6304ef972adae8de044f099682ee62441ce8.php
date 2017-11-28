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
        $__internal_6d9ffe0325ffce539c9979c6225eee0ed9e3ff312332d8345aea3d31634be2e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d9ffe0325ffce539c9979c6225eee0ed9e3ff312332d8345aea3d31634be2e4->enter($__internal_6d9ffe0325ffce539c9979c6225eee0ed9e3ff312332d8345aea3d31634be2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":section:form.html.twig"));

        $__internal_905b8160de407c0b1aea6760f1c72669f0d826dcbe8ecd823e3093677d4c0829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_905b8160de407c0b1aea6760f1c72669f0d826dcbe8ecd823e3093677d4c0829->enter($__internal_905b8160de407c0b1aea6760f1c72669f0d826dcbe8ecd823e3093677d4c0829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":section:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d9ffe0325ffce539c9979c6225eee0ed9e3ff312332d8345aea3d31634be2e4->leave($__internal_6d9ffe0325ffce539c9979c6225eee0ed9e3ff312332d8345aea3d31634be2e4_prof);

        
        $__internal_905b8160de407c0b1aea6760f1c72669f0d826dcbe8ecd823e3093677d4c0829->leave($__internal_905b8160de407c0b1aea6760f1c72669f0d826dcbe8ecd823e3093677d4c0829_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_42b11f401167feea7e1637a1bc8dac93060ff8871cef76c43efd333b6691fb94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42b11f401167feea7e1637a1bc8dac93060ff8871cef76c43efd333b6691fb94->enter($__internal_42b11f401167feea7e1637a1bc8dac93060ff8871cef76c43efd333b6691fb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_78e27489ef37afaeff66693e0179f49d8e7777e4e8e9037cbb33ebff502beb03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78e27489ef37afaeff66693e0179f49d8e7777e4e8e9037cbb33ebff502beb03->enter($__internal_78e27489ef37afaeff66693e0179f49d8e7777e4e8e9037cbb33ebff502beb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Section") : ("Edit Section"));
        echo "
";
        
        $__internal_78e27489ef37afaeff66693e0179f49d8e7777e4e8e9037cbb33ebff502beb03->leave($__internal_78e27489ef37afaeff66693e0179f49d8e7777e4e8e9037cbb33ebff502beb03_prof);

        
        $__internal_42b11f401167feea7e1637a1bc8dac93060ff8871cef76c43efd333b6691fb94->leave($__internal_42b11f401167feea7e1637a1bc8dac93060ff8871cef76c43efd333b6691fb94_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_4b49f3a3125c7de4546e249e8a0647c6bbf1d1211918f385d4da201d03ab24ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b49f3a3125c7de4546e249e8a0647c6bbf1d1211918f385d4da201d03ab24ca->enter($__internal_4b49f3a3125c7de4546e249e8a0647c6bbf1d1211918f385d4da201d03ab24ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_9d4212fa69c72251cf2d8d30e3fb64250fd273ae3ed063c1c62813db8e5853f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d4212fa69c72251cf2d8d30e3fb64250fd273ae3ed063c1c62813db8e5853f9->enter($__internal_9d4212fa69c72251cf2d8d30e3fb64250fd273ae3ed063c1c62813db8e5853f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_9d4212fa69c72251cf2d8d30e3fb64250fd273ae3ed063c1c62813db8e5853f9->leave($__internal_9d4212fa69c72251cf2d8d30e3fb64250fd273ae3ed063c1c62813db8e5853f9_prof);

        
        $__internal_4b49f3a3125c7de4546e249e8a0647c6bbf1d1211918f385d4da201d03ab24ca->leave($__internal_4b49f3a3125c7de4546e249e8a0647c6bbf1d1211918f385d4da201d03ab24ca_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5729eed74488bbf123312d7484d91b1ece5748b407a5afcc6c7a5b003d6e76a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5729eed74488bbf123312d7484d91b1ece5748b407a5afcc6c7a5b003d6e76a->enter($__internal_a5729eed74488bbf123312d7484d91b1ece5748b407a5afcc6c7a5b003d6e76a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7ea14ab3e3cd799a14cb5c28e600aafac1d796ed30417ae7a584573749e00bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea14ab3e3cd799a14cb5c28e600aafac1d796ed30417ae7a584573749e00bf4->enter($__internal_7ea14ab3e3cd799a14cb5c28e600aafac1d796ed30417ae7a584573749e00bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo ((($this->getAttribute($context["batch"], "id", array()) == (($this->getAttribute(($context["myBatch"] ?? null), "id", array(), "any", true, true)) ? ($this->getAttribute(($context["myBatch"] ?? $this->getContext($context, "myBatch")), "id", array())) : ("")))) ? ("selected") : (""));
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

      <button>";
        // line 31
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Create Batch") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_7ea14ab3e3cd799a14cb5c28e600aafac1d796ed30417ae7a584573749e00bf4->leave($__internal_7ea14ab3e3cd799a14cb5c28e600aafac1d796ed30417ae7a584573749e00bf4_prof);

        
        $__internal_a5729eed74488bbf123312d7484d91b1ece5748b407a5afcc6c7a5b003d6e76a->leave($__internal_a5729eed74488bbf123312d7484d91b1ece5748b407a5afcc6c7a5b003d6e76a_prof);

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
        return array (  143 => 31,  139 => 29,  126 => 27,  122 => 26,  115 => 22,  109 => 19,  103 => 16,  99 => 15,  95 => 13,  86 => 12,  73 => 7,  64 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
          <option value=\"{{ batch.id }}\" {{ (batch.id == (myBatch.id is defined ? myBatch.id : '')) ? 'selected' : '' }} >{{ batch.batchName }}</option>
        {% endfor %}
      </select>

      <button>{{ (mode == 'new') ? 'Create Batch' : 'Save Changes' }}</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", ":section:form.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/section/form.html.twig");
    }
}
