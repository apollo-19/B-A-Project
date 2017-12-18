<?php

/* :assessment:result_form.html.twig */
class __TwigTemplate_d04486fe17e345c3a61e0f22471aa7e0bba82e9f02f7575174e19620315ca12e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":assessment:result_form.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c666268ab3f00fa2e4b438f20b718cb13f4a3810375bdad08252cdc29d29486 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c666268ab3f00fa2e4b438f20b718cb13f4a3810375bdad08252cdc29d29486->enter($__internal_9c666268ab3f00fa2e4b438f20b718cb13f4a3810375bdad08252cdc29d29486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":assessment:result_form.html.twig"));

        $__internal_a50f145581115aec478e6faab7962018fc8844fc217f2fcd85425ca584514e25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a50f145581115aec478e6faab7962018fc8844fc217f2fcd85425ca584514e25->enter($__internal_a50f145581115aec478e6faab7962018fc8844fc217f2fcd85425ca584514e25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":assessment:result_form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c666268ab3f00fa2e4b438f20b718cb13f4a3810375bdad08252cdc29d29486->leave($__internal_9c666268ab3f00fa2e4b438f20b718cb13f4a3810375bdad08252cdc29d29486_prof);

        
        $__internal_a50f145581115aec478e6faab7962018fc8844fc217f2fcd85425ca584514e25->leave($__internal_a50f145581115aec478e6faab7962018fc8844fc217f2fcd85425ca584514e25_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b83855680e914953fa99bbf8badc85252b491a65f24e23388f9bbafa24e27da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b83855680e914953fa99bbf8badc85252b491a65f24e23388f9bbafa24e27da->enter($__internal_6b83855680e914953fa99bbf8badc85252b491a65f24e23388f9bbafa24e27da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8d6cd6986f8d0a8f3cf512b14df56f5965410da95dfe3d61a8c2705278f2b4ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d6cd6986f8d0a8f3cf512b14df56f5965410da95dfe3d61a8c2705278f2b4ca->enter($__internal_8d6cd6986f8d0a8f3cf512b14df56f5965410da95dfe3d61a8c2705278f2b4ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Assessment Type") : ("Edit Assessment Type"));
        echo "
";
        
        $__internal_8d6cd6986f8d0a8f3cf512b14df56f5965410da95dfe3d61a8c2705278f2b4ca->leave($__internal_8d6cd6986f8d0a8f3cf512b14df56f5965410da95dfe3d61a8c2705278f2b4ca_prof);

        
        $__internal_6b83855680e914953fa99bbf8badc85252b491a65f24e23388f9bbafa24e27da->leave($__internal_6b83855680e914953fa99bbf8badc85252b491a65f24e23388f9bbafa24e27da_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_9d66ee49c8a83e134ca14556dc40512d0a90e1cc34a4be7b3ace08d27ef31005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d66ee49c8a83e134ca14556dc40512d0a90e1cc34a4be7b3ace08d27ef31005->enter($__internal_9d66ee49c8a83e134ca14556dc40512d0a90e1cc34a4be7b3ace08d27ef31005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_77144a01f9c74b375a4819228b32d7d3a22ba1f016434ea9d6dc03272de23420 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77144a01f9c74b375a4819228b32d7d3a22ba1f016434ea9d6dc03272de23420->enter($__internal_77144a01f9c74b375a4819228b32d7d3a22ba1f016434ea9d6dc03272de23420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_77144a01f9c74b375a4819228b32d7d3a22ba1f016434ea9d6dc03272de23420->leave($__internal_77144a01f9c74b375a4819228b32d7d3a22ba1f016434ea9d6dc03272de23420_prof);

        
        $__internal_9d66ee49c8a83e134ca14556dc40512d0a90e1cc34a4be7b3ace08d27ef31005->leave($__internal_9d66ee49c8a83e134ca14556dc40512d0a90e1cc34a4be7b3ace08d27ef31005_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_8098b06eb425acc7bc12d0a129bdcdcc8a7a84a7499c612f7e397c0414a06da9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8098b06eb425acc7bc12d0a129bdcdcc8a7a84a7499c612f7e397c0414a06da9->enter($__internal_8098b06eb425acc7bc12d0a129bdcdcc8a7a84a7499c612f7e397c0414a06da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_33243f2a175ed55fb32fe8cfb3a6f776a577ca9032cd60ffde12a21ad7ce4a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33243f2a175ed55fb32fe8cfb3a6f776a577ca9032cd60ffde12a21ad7ce4a3c->enter($__internal_33243f2a175ed55fb32fe8cfb3a6f776a577ca9032cd60ffde12a21ad7ce4a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Assessment Type") : ("Edit Assessment Type"));
        echo "</h1>
      <h2>";
        // line 16
        echo twig_escape_filter($this->env, ((array_key_exists("result_message", $context)) ? (($context["result_message"] ?? $this->getContext($context, "result_message"))) : ("")), "html", null, true);
        echo "</h2>

      <label>School Session</label>
      <h2>";
        // line 19
        echo twig_escape_filter($this->env, ((($this->getAttribute(($context["school_session"] ?? $this->getContext($context, "school_session")), "sessionName", array()) . "(") . twig_upper_filter($this->env, $this->getAttribute(($context["school_session"] ?? $this->getContext($context, "school_session")), "sessionCode", array()))) . ")"), "html", null, true);
        echo "</h2>

      <label for=\"form[assessment_session]\">Assessment Session</label>
      <select name=\"form[assessment_session]\">
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["assessment_sessions"] ?? $this->getContext($context, "assessment_sessions")));
        foreach ($context['_seq'] as $context["_key"] => $context["assessment_session"]) {
            // line 24
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["assessment_types"] ?? $this->getContext($context, "assessment_types")));
            foreach ($context['_seq'] as $context["_key"] => $context["assessment_type"]) {
                // line 25
                echo "            ";
                if (($this->getAttribute($context["assessment_type"], "id", array()) == $this->getAttribute($context["assessment_session"], "assessmentId", array()))) {
                    // line 26
                    echo "              <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["assessment_session"], "id", array()), "html", null, true);
                    echo "\" ";
                    echo ((($this->getAttribute(($context["form"] ?? null), "assessment_id", array(), "any", true, true) && ($this->getAttribute($context["assessment_session"], "id", array()) == $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "assessment_id", array())))) ? ("selected") : (""));
                    echo ">";
                    echo twig_escape_filter($this->env, ((($this->getAttribute($context["assessment_type"], "assessmentName", array()) . " (") . $this->getAttribute($context["assessment_type"], "assessmentWorth", array())) . "%)"), "html", null, true);
                    echo "</option>
            ";
                }
                // line 28
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assessment_type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assessment_session'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "      </select>

      <label for=\"form[student_id]\">Assessment Result Student</label>
      <select name=\"form[student_id]\">
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["students"] ?? $this->getContext($context, "students")));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 35
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "id", array()), "html", null, true);
            echo "\" ";
            echo ((($this->getAttribute(($context["form"] ?? null), "student_id", array(), "any", true, true) && ($this->getAttribute($context["student"], "id", array()) == $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "student_id", array())))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, ((((((($this->getAttribute($context["student"], "firstNameEn", array()) . " ") . $this->getAttribute($context["student"], "middleNameEn", array())) . " ") . $this->getAttribute($context["student"], "lastNameEn", array())) . " (") . $this->getAttribute($context["student"], "userName", array())) . ")"), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "      </select>

      <label for=\"form[result_value]\">Assessment Result</label>
      <input type=\"text\" name=\"form[result_value]\" placeholder=\"\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "result_value", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "result_value", array())) : ("")), "html", null, true);
        echo "\" required />

      <button>";
        // line 42
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Create Assessment Type") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_33243f2a175ed55fb32fe8cfb3a6f776a577ca9032cd60ffde12a21ad7ce4a3c->leave($__internal_33243f2a175ed55fb32fe8cfb3a6f776a577ca9032cd60ffde12a21ad7ce4a3c_prof);

        
        $__internal_8098b06eb425acc7bc12d0a129bdcdcc8a7a84a7499c612f7e397c0414a06da9->leave($__internal_8098b06eb425acc7bc12d0a129bdcdcc8a7a84a7499c612f7e397c0414a06da9_prof);

    }

    // line 49
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_1b3202c8a97da3d7fccb3c04e6188e513a6220914301fe13c515bd98a9663b30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b3202c8a97da3d7fccb3c04e6188e513a6220914301fe13c515bd98a9663b30->enter($__internal_1b3202c8a97da3d7fccb3c04e6188e513a6220914301fe13c515bd98a9663b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_98397356d1d6d6f8853ad601a179a007ca38337d99e7ba97c067b206a51c1d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98397356d1d6d6f8853ad601a179a007ca38337d99e7ba97c067b206a51c1d3d->enter($__internal_98397356d1d6d6f8853ad601a179a007ca38337d99e7ba97c067b206a51c1d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 50
        echo "  <script type=\"text/javascript\">
    function TypeDiff() {
      (\$('#courseModuleType').val() == 'course') ? \$('#modules').hide() : \$('#courses').hide();
      \$('#' + \$('#courseModuleType').val() + 's').show();
    }

    \$(document).ready(function(){
      TypeDiff();

      \$('#courseModuleType').on(\"change\", function() {
        TypeDiff();
      });
    });
  </script>
";
        
        $__internal_98397356d1d6d6f8853ad601a179a007ca38337d99e7ba97c067b206a51c1d3d->leave($__internal_98397356d1d6d6f8853ad601a179a007ca38337d99e7ba97c067b206a51c1d3d_prof);

        
        $__internal_1b3202c8a97da3d7fccb3c04e6188e513a6220914301fe13c515bd98a9663b30->leave($__internal_1b3202c8a97da3d7fccb3c04e6188e513a6220914301fe13c515bd98a9663b30_prof);

    }

    public function getTemplateName()
    {
        return ":assessment:result_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 50,  200 => 49,  184 => 42,  179 => 40,  174 => 37,  161 => 35,  157 => 34,  151 => 30,  145 => 29,  139 => 28,  129 => 26,  126 => 25,  121 => 24,  117 => 23,  110 => 19,  104 => 16,  100 => 15,  96 => 13,  87 => 12,  74 => 7,  65 => 6,  52 => 3,  43 => 2,  11 => 1,);
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
  {{ (mode == 'new') ? 'New Assessment Type' : 'Edit Assessment Type' }}
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">{{ (mode == 'new') ? 'New Assessment Type' : 'Edit Assessment Type' }}</h1>
      <h2>{{ result_message is defined ? result_message : '' }}</h2>

      <label>School Session</label>
      <h2>{{ school_session.sessionName ~ '(' ~ school_session.sessionCode | upper ~ ')'}}</h2>

      <label for=\"form[assessment_session]\">Assessment Session</label>
      <select name=\"form[assessment_session]\">
        {% for assessment_session in assessment_sessions %}
          {% for assessment_type in assessment_types %}
            {% if assessment_type.id == assessment_session.assessmentId %}
              <option value=\"{{ assessment_session.id }}\" {{ (form.assessment_id is defined and assessment_session.id == form.assessment_id) ? 'selected' : '' }}>{{ assessment_type.assessmentName ~ ' (' ~ assessment_type.assessmentWorth ~ '%)' }}</option>
            {% endif %}
          {% endfor %}
        {% endfor %}
      </select>

      <label for=\"form[student_id]\">Assessment Result Student</label>
      <select name=\"form[student_id]\">
        {% for student in students %}
          <option value=\"{{ student.id }}\" {{ (form.student_id is defined and student.id == form.student_id) ? 'selected' : '' }}>{{ student.firstNameEn ~ ' ' ~ student.middleNameEn ~ ' ' ~ student.lastNameEn ~ ' (' ~ student.userName ~')' }}</option>
        {% endfor %}
      </select>

      <label for=\"form[result_value]\">Assessment Result</label>
      <input type=\"text\" name=\"form[result_value]\" placeholder=\"\" value=\"{{ form.result_value is defined ? form.result_value : '' }}\" required />

      <button>{{ (mode == 'new') ? 'Create Assessment Type' : 'Save Changes' }}</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}

{% block javascript %}
  <script type=\"text/javascript\">
    function TypeDiff() {
      (\$('#courseModuleType').val() == 'course') ? \$('#modules').hide() : \$('#courses').hide();
      \$('#' + \$('#courseModuleType').val() + 's').show();
    }

    \$(document).ready(function(){
      TypeDiff();

      \$('#courseModuleType').on(\"change\", function() {
        TypeDiff();
      });
    });
  </script>
{% endblock %}
", ":assessment:result_form.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/assessment/result_form.html.twig");
    }
}
