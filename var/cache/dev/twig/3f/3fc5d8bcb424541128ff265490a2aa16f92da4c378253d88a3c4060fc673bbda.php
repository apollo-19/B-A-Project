<?php

/* course/form.html.twig */
class __TwigTemplate_5e38e97ad05f9e463c2d29b456cc27048ab06bf9ff3e684a36a755784b8d03e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "course/form.html.twig", 1);
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
        $__internal_948546fd275873ef45285a7e183eb1304a4d6a2564d8e0398c681f1a93d639e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_948546fd275873ef45285a7e183eb1304a4d6a2564d8e0398c681f1a93d639e2->enter($__internal_948546fd275873ef45285a7e183eb1304a4d6a2564d8e0398c681f1a93d639e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/form.html.twig"));

        $__internal_063b954263dd2aac84ab7592330f28257c1ba4daaaaeee30e4abbc6cb2df2ef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_063b954263dd2aac84ab7592330f28257c1ba4daaaaeee30e4abbc6cb2df2ef4->enter($__internal_063b954263dd2aac84ab7592330f28257c1ba4daaaaeee30e4abbc6cb2df2ef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "course/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_948546fd275873ef45285a7e183eb1304a4d6a2564d8e0398c681f1a93d639e2->leave($__internal_948546fd275873ef45285a7e183eb1304a4d6a2564d8e0398c681f1a93d639e2_prof);

        
        $__internal_063b954263dd2aac84ab7592330f28257c1ba4daaaaeee30e4abbc6cb2df2ef4->leave($__internal_063b954263dd2aac84ab7592330f28257c1ba4daaaaeee30e4abbc6cb2df2ef4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ceacba9847f02b56dc5bddf51778dbc6917983c6196c182230e1beb4efaa5bee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceacba9847f02b56dc5bddf51778dbc6917983c6196c182230e1beb4efaa5bee->enter($__internal_ceacba9847f02b56dc5bddf51778dbc6917983c6196c182230e1beb4efaa5bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_826ef982d5ff63ce854190c76ad3664a81b6bece43c5b07bdce7471653643230 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_826ef982d5ff63ce854190c76ad3664a81b6bece43c5b07bdce7471653643230->enter($__internal_826ef982d5ff63ce854190c76ad3664a81b6bece43c5b07bdce7471653643230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Course") : ("Edit Course"));
        echo "
";
        
        $__internal_826ef982d5ff63ce854190c76ad3664a81b6bece43c5b07bdce7471653643230->leave($__internal_826ef982d5ff63ce854190c76ad3664a81b6bece43c5b07bdce7471653643230_prof);

        
        $__internal_ceacba9847f02b56dc5bddf51778dbc6917983c6196c182230e1beb4efaa5bee->leave($__internal_ceacba9847f02b56dc5bddf51778dbc6917983c6196c182230e1beb4efaa5bee_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_4d1d4967491c5082e353625f6a594ed67034a9b572bd02004e18d9e65b8455fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d1d4967491c5082e353625f6a594ed67034a9b572bd02004e18d9e65b8455fb->enter($__internal_4d1d4967491c5082e353625f6a594ed67034a9b572bd02004e18d9e65b8455fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_10863b1a980be11f145c72dca24ddd1b65041d8d3e52cf520efbbbff8abb1782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10863b1a980be11f145c72dca24ddd1b65041d8d3e52cf520efbbbff8abb1782->enter($__internal_10863b1a980be11f145c72dca24ddd1b65041d8d3e52cf520efbbbff8abb1782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_10863b1a980be11f145c72dca24ddd1b65041d8d3e52cf520efbbbff8abb1782->leave($__internal_10863b1a980be11f145c72dca24ddd1b65041d8d3e52cf520efbbbff8abb1782_prof);

        
        $__internal_4d1d4967491c5082e353625f6a594ed67034a9b572bd02004e18d9e65b8455fb->leave($__internal_4d1d4967491c5082e353625f6a594ed67034a9b572bd02004e18d9e65b8455fb_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_78c4461e9e04923cbbd29d55c1640a837f0a325af551e4757404d579a9cf8c61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c4461e9e04923cbbd29d55c1640a837f0a325af551e4757404d579a9cf8c61->enter($__internal_78c4461e9e04923cbbd29d55c1640a837f0a325af551e4757404d579a9cf8c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_28f8366cf98394d5e8c9aee5a46797493b50a182c1e292bca00b302525c47a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28f8366cf98394d5e8c9aee5a46797493b50a182c1e292bca00b302525c47a37->enter($__internal_28f8366cf98394d5e8c9aee5a46797493b50a182c1e292bca00b302525c47a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Course") : ("Edit Course"));
        echo "</h1>
      <h2>";
        // line 16
        echo twig_escape_filter($this->env, ((array_key_exists("result_message", $context)) ? (($context["result_message"] ?? $this->getContext($context, "result_message"))) : ("")), "html", null, true);
        echo "</h2>

      <label for=\"form[course_code]\">Course Code</label>
      <input type=\"text\" name=\"form[course_code]\" placeholder=\"IM101\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "course_code", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "course_code", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[course_name]\">Course Name</label>
      <input type=\"text\" name=\"form[course_name]\" placeholder=\"Introduction to Internal Medicine\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "course_name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "course_name", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[course_credit_hour]\">Course Credit Hour</label>
      <input type=\"number\" min=\"1\" max=\"50\" name=\"form[course_credit_hour]\" placeholder=\"3\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "course_credit_hour", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "course_credit_hour", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[curriculum_id]\">Course Curriculum</label>
      <select name=\"form[curriculum_id]\">
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["curriculums"] ?? $this->getContext($context, "curriculums")));
        foreach ($context['_seq'] as $context["_key"] => $context["curriculum"]) {
            // line 30
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["curriculum"], "id", array()), "html", null, true);
            echo "\" ";
            echo ((($this->getAttribute(($context["form"] ?? null), "curriculum_id", array(), "any", true, true) && ($this->getAttribute($context["curriculum"], "id", array()) == $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "curriculum_id", array())))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["curriculum"], "curriculumName", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curriculum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "      </select>

      <label for=\"form[module_id]\">Course Module</label>
      <select name=\"form[module_id]\">
        <option value=\"\">No Module</option>
        ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? $this->getContext($context, "modules")));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 38
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
            echo "\" ";
            echo ((($this->getAttribute(($context["form"] ?? null), "module_id", array(), "any", true, true) && ($this->getAttribute($context["module"], "id", array()) == $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "module_id", array())))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "moduleName", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "      </select>

      <button>";
        // line 42
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Create Course") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_28f8366cf98394d5e8c9aee5a46797493b50a182c1e292bca00b302525c47a37->leave($__internal_28f8366cf98394d5e8c9aee5a46797493b50a182c1e292bca00b302525c47a37_prof);

        
        $__internal_78c4461e9e04923cbbd29d55c1640a837f0a325af551e4757404d579a9cf8c61->leave($__internal_78c4461e9e04923cbbd29d55c1640a837f0a325af551e4757404d579a9cf8c61_prof);

    }

    public function getTemplateName()
    {
        return "course/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 42,  169 => 40,  156 => 38,  152 => 37,  145 => 32,  132 => 30,  128 => 29,  121 => 25,  115 => 22,  109 => 19,  103 => 16,  99 => 15,  95 => 13,  86 => 12,  73 => 7,  64 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  {{ (mode == 'new') ? 'New Course' : 'Edit Course' }}
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">{{ (mode == 'new') ? 'New Course' : 'Edit Course' }}</h1>
      <h2>{{ result_message is defined ? result_message : '' }}</h2>

      <label for=\"form[course_code]\">Course Code</label>
      <input type=\"text\" name=\"form[course_code]\" placeholder=\"IM101\" value=\"{{ form.course_code is defined ? form.course_code : '' }}\" required />

      <label for=\"form[course_name]\">Course Name</label>
      <input type=\"text\" name=\"form[course_name]\" placeholder=\"Introduction to Internal Medicine\" value=\"{{ form.course_name is defined ? form.course_name : '' }}\" required />

      <label for=\"form[course_credit_hour]\">Course Credit Hour</label>
      <input type=\"number\" min=\"1\" max=\"50\" name=\"form[course_credit_hour]\" placeholder=\"3\" value=\"{{ form.course_credit_hour is defined ? form.course_credit_hour : '' }}\" required />

      <label for=\"form[curriculum_id]\">Course Curriculum</label>
      <select name=\"form[curriculum_id]\">
        {% for curriculum in curriculums %}
          <option value=\"{{ curriculum.id }}\" {{ (form.curriculum_id is defined and curriculum.id == form.curriculum_id) ? 'selected' : '' }}>{{ curriculum.curriculumName }}</option>
        {% endfor %}
      </select>

      <label for=\"form[module_id]\">Course Module</label>
      <select name=\"form[module_id]\">
        <option value=\"\">No Module</option>
        {% for module in modules %}
          <option value=\"{{ module.id }}\" {{ (form.module_id is defined and module.id == form.module_id) ? 'selected' : '' }}>{{ module.moduleName }}</option>
        {% endfor %}
      </select>

      <button>{{ (mode == 'new') ? 'Create Course' : 'Save Changes' }}</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", "course/form.html.twig", "/home/apollo-19/github/B-A-Project/app/Resources/views/course/form.html.twig");
    }
}
