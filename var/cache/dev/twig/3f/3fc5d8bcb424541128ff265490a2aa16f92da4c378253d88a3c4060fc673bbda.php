<?php

/* :course:form.html.twig */
class __TwigTemplate_5e38e97ad05f9e463c2d29b456cc27048ab06bf9ff3e684a36a755784b8d03e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":course:form.html.twig", 1);
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
        $__internal_6a2e4db240391b52d96706cd048006a4a4054e01ce900a6e37ecee6e3e16825f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a2e4db240391b52d96706cd048006a4a4054e01ce900a6e37ecee6e3e16825f->enter($__internal_6a2e4db240391b52d96706cd048006a4a4054e01ce900a6e37ecee6e3e16825f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":course:form.html.twig"));

        $__internal_d0d5890bbe501a5462ae3db12ea408cd227f362f8ba411ba25d1257f5af9869d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0d5890bbe501a5462ae3db12ea408cd227f362f8ba411ba25d1257f5af9869d->enter($__internal_d0d5890bbe501a5462ae3db12ea408cd227f362f8ba411ba25d1257f5af9869d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":course:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a2e4db240391b52d96706cd048006a4a4054e01ce900a6e37ecee6e3e16825f->leave($__internal_6a2e4db240391b52d96706cd048006a4a4054e01ce900a6e37ecee6e3e16825f_prof);

        
        $__internal_d0d5890bbe501a5462ae3db12ea408cd227f362f8ba411ba25d1257f5af9869d->leave($__internal_d0d5890bbe501a5462ae3db12ea408cd227f362f8ba411ba25d1257f5af9869d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_84a2b7ccf996e8b89a728b9c6d495b1484c40511430cd875f903ad1d20976212 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84a2b7ccf996e8b89a728b9c6d495b1484c40511430cd875f903ad1d20976212->enter($__internal_84a2b7ccf996e8b89a728b9c6d495b1484c40511430cd875f903ad1d20976212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8a6d32ac7915ba2796a1f8017e3457346a60769067416ee17664424af34816be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6d32ac7915ba2796a1f8017e3457346a60769067416ee17664424af34816be->enter($__internal_8a6d32ac7915ba2796a1f8017e3457346a60769067416ee17664424af34816be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Course") : ("Edit Course"));
        echo "
";
        
        $__internal_8a6d32ac7915ba2796a1f8017e3457346a60769067416ee17664424af34816be->leave($__internal_8a6d32ac7915ba2796a1f8017e3457346a60769067416ee17664424af34816be_prof);

        
        $__internal_84a2b7ccf996e8b89a728b9c6d495b1484c40511430cd875f903ad1d20976212->leave($__internal_84a2b7ccf996e8b89a728b9c6d495b1484c40511430cd875f903ad1d20976212_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_ba7ffb0a9148feee202ffdffc4166fc32eb09ac25ae1edb72db77d30137eefd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba7ffb0a9148feee202ffdffc4166fc32eb09ac25ae1edb72db77d30137eefd2->enter($__internal_ba7ffb0a9148feee202ffdffc4166fc32eb09ac25ae1edb72db77d30137eefd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_2c0c6349ead0eddebc7fb6c823348283321d7bca408575380960b8ee5ebbb4e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c0c6349ead0eddebc7fb6c823348283321d7bca408575380960b8ee5ebbb4e9->enter($__internal_2c0c6349ead0eddebc7fb6c823348283321d7bca408575380960b8ee5ebbb4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_2c0c6349ead0eddebc7fb6c823348283321d7bca408575380960b8ee5ebbb4e9->leave($__internal_2c0c6349ead0eddebc7fb6c823348283321d7bca408575380960b8ee5ebbb4e9_prof);

        
        $__internal_ba7ffb0a9148feee202ffdffc4166fc32eb09ac25ae1edb72db77d30137eefd2->leave($__internal_ba7ffb0a9148feee202ffdffc4166fc32eb09ac25ae1edb72db77d30137eefd2_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_b00472932b8164e808818a9e291fae090f1a53e3c5e4d994dc4a91bbdd99ea59 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b00472932b8164e808818a9e291fae090f1a53e3c5e4d994dc4a91bbdd99ea59->enter($__internal_b00472932b8164e808818a9e291fae090f1a53e3c5e4d994dc4a91bbdd99ea59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1b800f16f020e610332c6c42b4546d5be12ec198c81e66df3044534c728ce1b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b800f16f020e610332c6c42b4546d5be12ec198c81e66df3044534c728ce1b3->enter($__internal_1b800f16f020e610332c6c42b4546d5be12ec198c81e66df3044534c728ce1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

      <button>";
        // line 27
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Create Course") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_1b800f16f020e610332c6c42b4546d5be12ec198c81e66df3044534c728ce1b3->leave($__internal_1b800f16f020e610332c6c42b4546d5be12ec198c81e66df3044534c728ce1b3_prof);

        
        $__internal_b00472932b8164e808818a9e291fae090f1a53e3c5e4d994dc4a91bbdd99ea59->leave($__internal_b00472932b8164e808818a9e291fae090f1a53e3c5e4d994dc4a91bbdd99ea59_prof);

    }

    public function getTemplateName()
    {
        return ":course:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 27,  121 => 25,  115 => 22,  109 => 19,  103 => 16,  99 => 15,  95 => 13,  86 => 12,  73 => 7,  64 => 6,  51 => 3,  42 => 2,  11 => 1,);
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

      <button>{{ (mode == 'new') ? 'Create Course' : 'Save Changes' }}</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", ":course:form.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/course/form.html.twig");
    }
}
