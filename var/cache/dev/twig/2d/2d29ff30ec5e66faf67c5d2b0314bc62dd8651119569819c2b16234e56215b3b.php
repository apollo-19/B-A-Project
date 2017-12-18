<?php

/* :assessment:session_form.html.twig */
class __TwigTemplate_1ef2e70a91845ce02593a251f0db1f6c7db16dd665caf566ce27b5e41e70b966 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":assessment:session_form.html.twig", 1);
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
        $__internal_439a29212aabf70168b85d89d8648ddf1cc954b8519ba5a7d029527cf88314e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_439a29212aabf70168b85d89d8648ddf1cc954b8519ba5a7d029527cf88314e1->enter($__internal_439a29212aabf70168b85d89d8648ddf1cc954b8519ba5a7d029527cf88314e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":assessment:session_form.html.twig"));

        $__internal_8d3b2ef9a4e94ac54a87e5cc9659f0e936184a2c0dbf2795f77a7ddfd17d6bac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d3b2ef9a4e94ac54a87e5cc9659f0e936184a2c0dbf2795f77a7ddfd17d6bac->enter($__internal_8d3b2ef9a4e94ac54a87e5cc9659f0e936184a2c0dbf2795f77a7ddfd17d6bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":assessment:session_form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_439a29212aabf70168b85d89d8648ddf1cc954b8519ba5a7d029527cf88314e1->leave($__internal_439a29212aabf70168b85d89d8648ddf1cc954b8519ba5a7d029527cf88314e1_prof);

        
        $__internal_8d3b2ef9a4e94ac54a87e5cc9659f0e936184a2c0dbf2795f77a7ddfd17d6bac->leave($__internal_8d3b2ef9a4e94ac54a87e5cc9659f0e936184a2c0dbf2795f77a7ddfd17d6bac_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8254d68f7c8e65d112ee2755471a50761d884c163ba4487bdbf54c189fd7669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8254d68f7c8e65d112ee2755471a50761d884c163ba4487bdbf54c189fd7669->enter($__internal_c8254d68f7c8e65d112ee2755471a50761d884c163ba4487bdbf54c189fd7669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6060f4a22117c95b346145e365f34fc6185d4a720767d0118253c3dbb99a8664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6060f4a22117c95b346145e365f34fc6185d4a720767d0118253c3dbb99a8664->enter($__internal_6060f4a22117c95b346145e365f34fc6185d4a720767d0118253c3dbb99a8664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Assessment Session") : ("Edit Assessment Session"));
        echo "
";
        
        $__internal_6060f4a22117c95b346145e365f34fc6185d4a720767d0118253c3dbb99a8664->leave($__internal_6060f4a22117c95b346145e365f34fc6185d4a720767d0118253c3dbb99a8664_prof);

        
        $__internal_c8254d68f7c8e65d112ee2755471a50761d884c163ba4487bdbf54c189fd7669->leave($__internal_c8254d68f7c8e65d112ee2755471a50761d884c163ba4487bdbf54c189fd7669_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_58610dde2a4ad971d64feb21acc87a70ac65baf9ed486abba75d5521c88cdb5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58610dde2a4ad971d64feb21acc87a70ac65baf9ed486abba75d5521c88cdb5d->enter($__internal_58610dde2a4ad971d64feb21acc87a70ac65baf9ed486abba75d5521c88cdb5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_148826fb420d090d1ff0e7e6e30dd0c5e3aafef63469697e15d28b41dc08e3f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_148826fb420d090d1ff0e7e6e30dd0c5e3aafef63469697e15d28b41dc08e3f4->enter($__internal_148826fb420d090d1ff0e7e6e30dd0c5e3aafef63469697e15d28b41dc08e3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_148826fb420d090d1ff0e7e6e30dd0c5e3aafef63469697e15d28b41dc08e3f4->leave($__internal_148826fb420d090d1ff0e7e6e30dd0c5e3aafef63469697e15d28b41dc08e3f4_prof);

        
        $__internal_58610dde2a4ad971d64feb21acc87a70ac65baf9ed486abba75d5521c88cdb5d->leave($__internal_58610dde2a4ad971d64feb21acc87a70ac65baf9ed486abba75d5521c88cdb5d_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e6a3bb16cfc0e878ae1be37963819d857335f225956bd20909ced58a574c045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e6a3bb16cfc0e878ae1be37963819d857335f225956bd20909ced58a574c045->enter($__internal_1e6a3bb16cfc0e878ae1be37963819d857335f225956bd20909ced58a574c045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_58ca1ba2f7eb8ced14886784c965a14d31bb9ec9d397da205141b80ec87bece6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ca1ba2f7eb8ced14886784c965a14d31bb9ec9d397da205141b80ec87bece6->enter($__internal_58ca1ba2f7eb8ced14886784c965a14d31bb9ec9d397da205141b80ec87bece6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Assessment Session") : ("Edit Assessment Session"));
        echo "</h1>
      <h2>";
        // line 16
        echo twig_escape_filter($this->env, ((array_key_exists("result_message", $context)) ? (($context["result_message"] ?? $this->getContext($context, "result_message"))) : ("")), "html", null, true);
        echo "</h2>

      <label>Assessment Session</label>
      <h2>";
        // line 19
        echo twig_escape_filter($this->env, ((($this->getAttribute(($context["school_session"] ?? $this->getContext($context, "school_session")), "sessionName", array()) . "(") . twig_upper_filter($this->env, $this->getAttribute(($context["school_session"] ?? $this->getContext($context, "school_session")), "sessionCode", array()))) . ")"), "html", null, true);
        echo "</h2>

      <label for=\"form[assessment_id]\">Assessment Name</label>
      <select name=\"form[assessment_id]\">
        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["assessment_types"] ?? $this->getContext($context, "assessment_types")));
        foreach ($context['_seq'] as $context["_key"] => $context["assessment_type"]) {
            // line 24
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["assessment_type"], "id", array()), "html", null, true);
            echo "\" ";
            echo ((($this->getAttribute(($context["form"] ?? null), "assessment_id", array(), "any", true, true) && ($this->getAttribute($context["assessment_type"], "id", array()) == $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "assessment_id", array())))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, ((($this->getAttribute($context["assessment_type"], "assessmentName", array()) . "(") . $this->getAttribute($context["assessment_type"], "assessmentWorth", array())) . "%)"), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['assessment_type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "      </select>

      <button>";
        // line 28
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Add Assessment Session") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_58ca1ba2f7eb8ced14886784c965a14d31bb9ec9d397da205141b80ec87bece6->leave($__internal_58ca1ba2f7eb8ced14886784c965a14d31bb9ec9d397da205141b80ec87bece6_prof);

        
        $__internal_1e6a3bb16cfc0e878ae1be37963819d857335f225956bd20909ced58a574c045->leave($__internal_1e6a3bb16cfc0e878ae1be37963819d857335f225956bd20909ced58a574c045_prof);

    }

    public function getTemplateName()
    {
        return ":assessment:session_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 28,  133 => 26,  120 => 24,  116 => 23,  109 => 19,  103 => 16,  99 => 15,  95 => 13,  86 => 12,  73 => 7,  64 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  {{ (mode == 'new') ? 'New Assessment Session' : 'Edit Assessment Session' }}
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">{{ (mode == 'new') ? 'New Assessment Session' : 'Edit Assessment Session' }}</h1>
      <h2>{{ result_message is defined ? result_message : '' }}</h2>

      <label>Assessment Session</label>
      <h2>{{ school_session.sessionName ~ '(' ~ school_session.sessionCode | upper ~ ')'}}</h2>

      <label for=\"form[assessment_id]\">Assessment Name</label>
      <select name=\"form[assessment_id]\">
        {% for assessment_type in assessment_types %}
          <option value=\"{{ assessment_type.id }}\" {{ (form.assessment_id is defined and assessment_type.id == form.assessment_id) ? 'selected' : '' }}>{{ assessment_type.assessmentName ~ '(' ~ assessment_type.assessmentWorth ~'%)' }}</option>
        {% endfor %}
      </select>

      <button>{{ (mode == 'new') ? 'Add Assessment Session' : 'Save Changes' }}</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", ":assessment:session_form.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/assessment/session_form.html.twig");
    }
}
