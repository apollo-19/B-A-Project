<?php

/* module/form.html.twig */
class __TwigTemplate_b105a703af4b5374d071e6101eaf302ac357e59ef80dabb0d729bcd90ef71f39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "module/form.html.twig", 1);
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
        $__internal_abde5cfee3b417b42ece715dd05f661bc0c0530a17b42ede478488dcb6053a85 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abde5cfee3b417b42ece715dd05f661bc0c0530a17b42ede478488dcb6053a85->enter($__internal_abde5cfee3b417b42ece715dd05f661bc0c0530a17b42ede478488dcb6053a85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "module/form.html.twig"));

        $__internal_c6aaa317183002c17e0af40fd64ba61b4bb01dc1c45129bfd8fe599c89e237af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6aaa317183002c17e0af40fd64ba61b4bb01dc1c45129bfd8fe599c89e237af->enter($__internal_c6aaa317183002c17e0af40fd64ba61b4bb01dc1c45129bfd8fe599c89e237af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "module/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abde5cfee3b417b42ece715dd05f661bc0c0530a17b42ede478488dcb6053a85->leave($__internal_abde5cfee3b417b42ece715dd05f661bc0c0530a17b42ede478488dcb6053a85_prof);

        
        $__internal_c6aaa317183002c17e0af40fd64ba61b4bb01dc1c45129bfd8fe599c89e237af->leave($__internal_c6aaa317183002c17e0af40fd64ba61b4bb01dc1c45129bfd8fe599c89e237af_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_90f99cc75ab416a8f94d0056445ed6332fb6b2ff8e291304a2386227db0f102b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90f99cc75ab416a8f94d0056445ed6332fb6b2ff8e291304a2386227db0f102b->enter($__internal_90f99cc75ab416a8f94d0056445ed6332fb6b2ff8e291304a2386227db0f102b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_df501261f4acb3976256fc90fe1d2b95ada6bba8a8d56e9526b8ae1fb58bc0fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df501261f4acb3976256fc90fe1d2b95ada6bba8a8d56e9526b8ae1fb58bc0fe->enter($__internal_df501261f4acb3976256fc90fe1d2b95ada6bba8a8d56e9526b8ae1fb58bc0fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Module") : ("Edit Module"));
        echo "
";
        
        $__internal_df501261f4acb3976256fc90fe1d2b95ada6bba8a8d56e9526b8ae1fb58bc0fe->leave($__internal_df501261f4acb3976256fc90fe1d2b95ada6bba8a8d56e9526b8ae1fb58bc0fe_prof);

        
        $__internal_90f99cc75ab416a8f94d0056445ed6332fb6b2ff8e291304a2386227db0f102b->leave($__internal_90f99cc75ab416a8f94d0056445ed6332fb6b2ff8e291304a2386227db0f102b_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_298be50141cfefc1c46faf425d5d06e5ca4826992888ad8166469de4bb088150 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_298be50141cfefc1c46faf425d5d06e5ca4826992888ad8166469de4bb088150->enter($__internal_298be50141cfefc1c46faf425d5d06e5ca4826992888ad8166469de4bb088150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_e7a21976d99cafb746e3e5ed775e8edd94b7cf5782ee124b6f1f16ae51afb336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7a21976d99cafb746e3e5ed775e8edd94b7cf5782ee124b6f1f16ae51afb336->enter($__internal_e7a21976d99cafb746e3e5ed775e8edd94b7cf5782ee124b6f1f16ae51afb336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_e7a21976d99cafb746e3e5ed775e8edd94b7cf5782ee124b6f1f16ae51afb336->leave($__internal_e7a21976d99cafb746e3e5ed775e8edd94b7cf5782ee124b6f1f16ae51afb336_prof);

        
        $__internal_298be50141cfefc1c46faf425d5d06e5ca4826992888ad8166469de4bb088150->leave($__internal_298be50141cfefc1c46faf425d5d06e5ca4826992888ad8166469de4bb088150_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_d73f821152d4f642c73c6f0209559184c258390489445b72ca35706bf0724eca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d73f821152d4f642c73c6f0209559184c258390489445b72ca35706bf0724eca->enter($__internal_d73f821152d4f642c73c6f0209559184c258390489445b72ca35706bf0724eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b2e901481cd3f87ce9d7c231a3d244fca92424a4e8f56f11d478e2449935cbbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2e901481cd3f87ce9d7c231a3d244fca92424a4e8f56f11d478e2449935cbbc->enter($__internal_b2e901481cd3f87ce9d7c231a3d244fca92424a4e8f56f11d478e2449935cbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["curriculum"], "id", array()), "html", null, true);
            echo "\" ";
            echo ((($this->getAttribute(($context["form"] ?? null), "module_curriculum", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "module_curriculum", array()) == $this->getAttribute($context["curriculum"], "id", array())))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["curriculum"], "curriculumName", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curriculum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "      </select>

      <label for=\"form[module_school]\">Module School</label>
      <select name=\"form[module_school]\">
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["schools"] ?? $this->getContext($context, "schools")));
        foreach ($context['_seq'] as $context["_key"] => $context["school"]) {
            // line 40
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
        // line 42
        echo "      </select>

      <button>";
        // line 44
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Create Module") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_b2e901481cd3f87ce9d7c231a3d244fca92424a4e8f56f11d478e2449935cbbc->leave($__internal_b2e901481cd3f87ce9d7c231a3d244fca92424a4e8f56f11d478e2449935cbbc_prof);

        
        $__internal_d73f821152d4f642c73c6f0209559184c258390489445b72ca35706bf0724eca->leave($__internal_d73f821152d4f642c73c6f0209559184c258390489445b72ca35706bf0724eca_prof);

    }

    public function getTemplateName()
    {
        return "module/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 44,  174 => 42,  161 => 40,  157 => 39,  151 => 35,  138 => 33,  134 => 32,  127 => 28,  121 => 25,  115 => 22,  109 => 19,  103 => 16,  99 => 15,  95 => 13,  86 => 12,  73 => 7,  64 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
          <option value=\"{{ curriculum.id }}\" {{ (form.module_curriculum is defined and form.module_curriculum == curriculum.id) ? 'selected' : '' }}>{{ curriculum.curriculumName }}</option>
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
", "module/form.html.twig", "/home/apollo-19/github/B-A-Project/app/Resources/views/module/form.html.twig");
    }
}
