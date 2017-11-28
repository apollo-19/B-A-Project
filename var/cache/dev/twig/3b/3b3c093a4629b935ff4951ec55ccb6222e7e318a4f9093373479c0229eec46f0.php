<?php

/* :school:form.html.twig */
class __TwigTemplate_e5c2be6258ae8551a49b54715f88fbb3b9c69da20d9c2672dd20a814ce555e01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":school:form.html.twig", 1);
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
        $__internal_77420fbdd1e9d779cb0da658dced8c056f1fd89d0e0844158b9917512012d016 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77420fbdd1e9d779cb0da658dced8c056f1fd89d0e0844158b9917512012d016->enter($__internal_77420fbdd1e9d779cb0da658dced8c056f1fd89d0e0844158b9917512012d016_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":school:form.html.twig"));

        $__internal_ab3cc586d807864e9d0f1e5159e8e17c2327187540eab69ceeec7a3d128d5163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab3cc586d807864e9d0f1e5159e8e17c2327187540eab69ceeec7a3d128d5163->enter($__internal_ab3cc586d807864e9d0f1e5159e8e17c2327187540eab69ceeec7a3d128d5163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":school:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77420fbdd1e9d779cb0da658dced8c056f1fd89d0e0844158b9917512012d016->leave($__internal_77420fbdd1e9d779cb0da658dced8c056f1fd89d0e0844158b9917512012d016_prof);

        
        $__internal_ab3cc586d807864e9d0f1e5159e8e17c2327187540eab69ceeec7a3d128d5163->leave($__internal_ab3cc586d807864e9d0f1e5159e8e17c2327187540eab69ceeec7a3d128d5163_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f7a893a3da64d2c312510b70c71b74285150c258e8082d7318f6817cce96455d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7a893a3da64d2c312510b70c71b74285150c258e8082d7318f6817cce96455d->enter($__internal_f7a893a3da64d2c312510b70c71b74285150c258e8082d7318f6817cce96455d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1ab3f0afa66512e7e42e7559977de14e1536e4553211bc08d96fa4469ec3eaea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab3f0afa66512e7e42e7559977de14e1536e4553211bc08d96fa4469ec3eaea->enter($__internal_1ab3f0afa66512e7e42e7559977de14e1536e4553211bc08d96fa4469ec3eaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New School") : ("Edit School"));
        echo "
";
        
        $__internal_1ab3f0afa66512e7e42e7559977de14e1536e4553211bc08d96fa4469ec3eaea->leave($__internal_1ab3f0afa66512e7e42e7559977de14e1536e4553211bc08d96fa4469ec3eaea_prof);

        
        $__internal_f7a893a3da64d2c312510b70c71b74285150c258e8082d7318f6817cce96455d->leave($__internal_f7a893a3da64d2c312510b70c71b74285150c258e8082d7318f6817cce96455d_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_7d1c550265d25dba6cc17ac0d3514e1dcdd617f518425235caabfad9add1c69c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d1c550265d25dba6cc17ac0d3514e1dcdd617f518425235caabfad9add1c69c->enter($__internal_7d1c550265d25dba6cc17ac0d3514e1dcdd617f518425235caabfad9add1c69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_ae8751b4264d931e6a1747ba22fd50055e7f7929f241ae65113af34169fa3469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae8751b4264d931e6a1747ba22fd50055e7f7929f241ae65113af34169fa3469->enter($__internal_ae8751b4264d931e6a1747ba22fd50055e7f7929f241ae65113af34169fa3469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_ae8751b4264d931e6a1747ba22fd50055e7f7929f241ae65113af34169fa3469->leave($__internal_ae8751b4264d931e6a1747ba22fd50055e7f7929f241ae65113af34169fa3469_prof);

        
        $__internal_7d1c550265d25dba6cc17ac0d3514e1dcdd617f518425235caabfad9add1c69c->leave($__internal_7d1c550265d25dba6cc17ac0d3514e1dcdd617f518425235caabfad9add1c69c_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff03fc46717b746887ff23fdef5795029a7b77ea280a9098e9271552a98226b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff03fc46717b746887ff23fdef5795029a7b77ea280a9098e9271552a98226b1->enter($__internal_ff03fc46717b746887ff23fdef5795029a7b77ea280a9098e9271552a98226b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a6acdb19e2b6916dc26fa421ce670906b984b8c800ce63d64a08bb4ee7c90faf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6acdb19e2b6916dc26fa421ce670906b984b8c800ce63d64a08bb4ee7c90faf->enter($__internal_a6acdb19e2b6916dc26fa421ce670906b984b8c800ce63d64a08bb4ee7c90faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New School") : ("Edit School"));
        echo "</h1>
      <h2>";
        // line 16
        echo twig_escape_filter($this->env, ((array_key_exists("result_message", $context)) ? (($context["result_message"] ?? $this->getContext($context, "result_message"))) : ("")), "html", null, true);
        echo "</h2>

      <label for=\"form[first_name]\">School Code</label>
      <input type=\"text\" name=\"form[school_code]\" placeholder=\"MD1221\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "school_code", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "school_code", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[middle_name]\">Middle Name</label>
      <input type=\"text\" name=\"form[school_name]\" placeholder=\"School of Medicine\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "school_name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "school_name", array())) : ("")), "html", null, true);
        echo "\" required />

      <button>";
        // line 24
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Create School") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_a6acdb19e2b6916dc26fa421ce670906b984b8c800ce63d64a08bb4ee7c90faf->leave($__internal_a6acdb19e2b6916dc26fa421ce670906b984b8c800ce63d64a08bb4ee7c90faf_prof);

        
        $__internal_ff03fc46717b746887ff23fdef5795029a7b77ea280a9098e9271552a98226b1->leave($__internal_ff03fc46717b746887ff23fdef5795029a7b77ea280a9098e9271552a98226b1_prof);

    }

    public function getTemplateName()
    {
        return ":school:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 24,  115 => 22,  109 => 19,  103 => 16,  99 => 15,  95 => 13,  86 => 12,  73 => 7,  64 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  {{ (mode == 'new') ? 'New School' : 'Edit School' }}
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">{{ (mode == 'new') ? 'New School' : 'Edit School' }}</h1>
      <h2>{{ result_message is defined ? result_message : '' }}</h2>

      <label for=\"form[first_name]\">School Code</label>
      <input type=\"text\" name=\"form[school_code]\" placeholder=\"MD1221\" value=\"{{ form.school_code is defined ? form.school_code : '' }}\" required />

      <label for=\"form[middle_name]\">Middle Name</label>
      <input type=\"text\" name=\"form[school_name]\" placeholder=\"School of Medicine\" value=\"{{ form.school_name is defined ? form.school_name : '' }}\" required />

      <button>{{ (mode == 'new') ? 'Create School' : 'Save Changes' }}</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", ":school:form.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/school/form.html.twig");
    }
}
