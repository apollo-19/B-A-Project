<?php

/* :department:form.html.twig */
class __TwigTemplate_0af5127acf7f364fee6d90ddcee2247071dfae4d5688e062f6c21fe5d08b0a9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":department:form.html.twig", 1);
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
        $__internal_2c3905822df4222dbcdaaef436a49e5c84e40eb5279b9c906bb6aa4576da2db9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c3905822df4222dbcdaaef436a49e5c84e40eb5279b9c906bb6aa4576da2db9->enter($__internal_2c3905822df4222dbcdaaef436a49e5c84e40eb5279b9c906bb6aa4576da2db9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":department:form.html.twig"));

        $__internal_8e98e1b618da91572e7a30a64f0d8a105e959b23e1363365216e1a0597704151 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e98e1b618da91572e7a30a64f0d8a105e959b23e1363365216e1a0597704151->enter($__internal_8e98e1b618da91572e7a30a64f0d8a105e959b23e1363365216e1a0597704151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":department:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c3905822df4222dbcdaaef436a49e5c84e40eb5279b9c906bb6aa4576da2db9->leave($__internal_2c3905822df4222dbcdaaef436a49e5c84e40eb5279b9c906bb6aa4576da2db9_prof);

        
        $__internal_8e98e1b618da91572e7a30a64f0d8a105e959b23e1363365216e1a0597704151->leave($__internal_8e98e1b618da91572e7a30a64f0d8a105e959b23e1363365216e1a0597704151_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_56bd59ba5615bfbe10224e0525e98579aa4434627ee236f3cefed2e49ac4404a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56bd59ba5615bfbe10224e0525e98579aa4434627ee236f3cefed2e49ac4404a->enter($__internal_56bd59ba5615bfbe10224e0525e98579aa4434627ee236f3cefed2e49ac4404a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_066e181ca1e9dafe47ef6787de8203e6cfc715828e8acab5b5587ac0c857c9a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_066e181ca1e9dafe47ef6787de8203e6cfc715828e8acab5b5587ac0c857c9a7->enter($__internal_066e181ca1e9dafe47ef6787de8203e6cfc715828e8acab5b5587ac0c857c9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Department") : ("Edit Department"));
        echo "
";
        
        $__internal_066e181ca1e9dafe47ef6787de8203e6cfc715828e8acab5b5587ac0c857c9a7->leave($__internal_066e181ca1e9dafe47ef6787de8203e6cfc715828e8acab5b5587ac0c857c9a7_prof);

        
        $__internal_56bd59ba5615bfbe10224e0525e98579aa4434627ee236f3cefed2e49ac4404a->leave($__internal_56bd59ba5615bfbe10224e0525e98579aa4434627ee236f3cefed2e49ac4404a_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_6081569dda7119470d4fb78e35080f4be4b5651123b371974b85b647dbdd1bcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6081569dda7119470d4fb78e35080f4be4b5651123b371974b85b647dbdd1bcd->enter($__internal_6081569dda7119470d4fb78e35080f4be4b5651123b371974b85b647dbdd1bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_b13807eee4d7e25dee23ffebdbc6b20ced131dd6656ede8b5a297cf0f8fd54eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13807eee4d7e25dee23ffebdbc6b20ced131dd6656ede8b5a297cf0f8fd54eb->enter($__internal_b13807eee4d7e25dee23ffebdbc6b20ced131dd6656ede8b5a297cf0f8fd54eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_b13807eee4d7e25dee23ffebdbc6b20ced131dd6656ede8b5a297cf0f8fd54eb->leave($__internal_b13807eee4d7e25dee23ffebdbc6b20ced131dd6656ede8b5a297cf0f8fd54eb_prof);

        
        $__internal_6081569dda7119470d4fb78e35080f4be4b5651123b371974b85b647dbdd1bcd->leave($__internal_6081569dda7119470d4fb78e35080f4be4b5651123b371974b85b647dbdd1bcd_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_b929e3a497c2340c65511914be162ec931fe45827686885147732c43acf1f072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b929e3a497c2340c65511914be162ec931fe45827686885147732c43acf1f072->enter($__internal_b929e3a497c2340c65511914be162ec931fe45827686885147732c43acf1f072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bb1868c773a916001c0da3688ab8c200a97f15dd3daab7b63709de322b55cca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb1868c773a916001c0da3688ab8c200a97f15dd3daab7b63709de322b55cca7->enter($__internal_bb1868c773a916001c0da3688ab8c200a97f15dd3daab7b63709de322b55cca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Department") : ("Edit Department"));
        echo "</h1>
      <h2>";
        // line 16
        echo twig_escape_filter($this->env, ((array_key_exists("result_message", $context)) ? (($context["result_message"] ?? $this->getContext($context, "result_message"))) : ("")), "html", null, true);
        echo "</h2>

      <label for=\"form[department_code]\">Department Code</label>
      <input type=\"text\" name=\"form[department_code]\" placeholder=\"DoIM\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "department_code", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "department_code", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[department_name]\">Department Name</label>
      <input type=\"text\" name=\"form[department_name]\" placeholder=\"Department One\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "department_name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "department_name", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[department_school]\">Department School</label>
      <select name=\"form[department_school]\">
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["schools"] ?? $this->getContext($context, "schools")));
        foreach ($context['_seq'] as $context["_key"] => $context["school"]) {
            // line 27
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "id", array()), "html", null, true);
            echo "\" ";
            echo ((($this->getAttribute($context["school"], "id", array()) == (($this->getAttribute(($context["form"] ?? null), "department_school", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "department_school", array())) : ("")))) ? ("selected") : (""));
            echo " >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "schoolName", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['school'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "      </select>

      <button>";
        // line 31
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Create Department") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_bb1868c773a916001c0da3688ab8c200a97f15dd3daab7b63709de322b55cca7->leave($__internal_bb1868c773a916001c0da3688ab8c200a97f15dd3daab7b63709de322b55cca7_prof);

        
        $__internal_b929e3a497c2340c65511914be162ec931fe45827686885147732c43acf1f072->leave($__internal_b929e3a497c2340c65511914be162ec931fe45827686885147732c43acf1f072_prof);

    }

    public function getTemplateName()
    {
        return ":department:form.html.twig";
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
  {{ (mode == 'new') ? 'New Department' : 'Edit Department' }}
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">{{ (mode == 'new') ? 'New Department' : 'Edit Department' }}</h1>
      <h2>{{ result_message is defined ? result_message : '' }}</h2>

      <label for=\"form[department_code]\">Department Code</label>
      <input type=\"text\" name=\"form[department_code]\" placeholder=\"DoIM\" value=\"{{ form.department_code is defined ? form.department_code : '' }}\" required />

      <label for=\"form[department_name]\">Department Name</label>
      <input type=\"text\" name=\"form[department_name]\" placeholder=\"Department One\" value=\"{{ form.department_name is defined ? form.department_name : '' }}\" required />

      <label for=\"form[department_school]\">Department School</label>
      <select name=\"form[department_school]\">
        {% for school in schools %}
          <option value=\"{{ school.id }}\" {{ (school.id == (form.department_school is defined ? form.department_school : '')) ? 'selected' : '' }} >{{ school.schoolName }}</option>
        {% endfor %}
      </select>

      <button>{{ (mode == 'new') ? 'Create Department' : 'Save Changes' }}</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", ":department:form.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/department/form.html.twig");
    }
}
