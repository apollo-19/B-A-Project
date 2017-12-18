<?php

/* :curriculum:form.html.twig */
class __TwigTemplate_beb68fc8fbf8b3bb4348c2d81ca3566d1d038984b2581dad77b0fa40176a0892 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":curriculum:form.html.twig", 1);
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
        $__internal_bf9670568ae1e6235be250e6d5eedd2040d850cbd1607051de47faf998a7a1a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf9670568ae1e6235be250e6d5eedd2040d850cbd1607051de47faf998a7a1a0->enter($__internal_bf9670568ae1e6235be250e6d5eedd2040d850cbd1607051de47faf998a7a1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":curriculum:form.html.twig"));

        $__internal_89eb78c52ef660933a621869bf354d3263b705ba512f0086e4fbdb057e7137a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89eb78c52ef660933a621869bf354d3263b705ba512f0086e4fbdb057e7137a7->enter($__internal_89eb78c52ef660933a621869bf354d3263b705ba512f0086e4fbdb057e7137a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":curriculum:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf9670568ae1e6235be250e6d5eedd2040d850cbd1607051de47faf998a7a1a0->leave($__internal_bf9670568ae1e6235be250e6d5eedd2040d850cbd1607051de47faf998a7a1a0_prof);

        
        $__internal_89eb78c52ef660933a621869bf354d3263b705ba512f0086e4fbdb057e7137a7->leave($__internal_89eb78c52ef660933a621869bf354d3263b705ba512f0086e4fbdb057e7137a7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_617df58f11b07a94525c0d7f8201333482a40f288196a2a02a355660fd1edaa3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_617df58f11b07a94525c0d7f8201333482a40f288196a2a02a355660fd1edaa3->enter($__internal_617df58f11b07a94525c0d7f8201333482a40f288196a2a02a355660fd1edaa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f6d1064d3406b39123b6ac06746da2e39e94356690a50b4c8a09a9e55b57ff73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6d1064d3406b39123b6ac06746da2e39e94356690a50b4c8a09a9e55b57ff73->enter($__internal_f6d1064d3406b39123b6ac06746da2e39e94356690a50b4c8a09a9e55b57ff73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Curriculum") : ("Edit Curriculum"));
        echo "
";
        
        $__internal_f6d1064d3406b39123b6ac06746da2e39e94356690a50b4c8a09a9e55b57ff73->leave($__internal_f6d1064d3406b39123b6ac06746da2e39e94356690a50b4c8a09a9e55b57ff73_prof);

        
        $__internal_617df58f11b07a94525c0d7f8201333482a40f288196a2a02a355660fd1edaa3->leave($__internal_617df58f11b07a94525c0d7f8201333482a40f288196a2a02a355660fd1edaa3_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_c9c2439bc04b3e273bbdb02bacfb6e8ec8d5c26f3e73720a7e93b8143e3efaa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9c2439bc04b3e273bbdb02bacfb6e8ec8d5c26f3e73720a7e93b8143e3efaa8->enter($__internal_c9c2439bc04b3e273bbdb02bacfb6e8ec8d5c26f3e73720a7e93b8143e3efaa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_f7dc4c474d0429222d3a5c507cfeedc6b9ae762f0c27ce2883ab984aafa001a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7dc4c474d0429222d3a5c507cfeedc6b9ae762f0c27ce2883ab984aafa001a0->enter($__internal_f7dc4c474d0429222d3a5c507cfeedc6b9ae762f0c27ce2883ab984aafa001a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_f7dc4c474d0429222d3a5c507cfeedc6b9ae762f0c27ce2883ab984aafa001a0->leave($__internal_f7dc4c474d0429222d3a5c507cfeedc6b9ae762f0c27ce2883ab984aafa001a0_prof);

        
        $__internal_c9c2439bc04b3e273bbdb02bacfb6e8ec8d5c26f3e73720a7e93b8143e3efaa8->leave($__internal_c9c2439bc04b3e273bbdb02bacfb6e8ec8d5c26f3e73720a7e93b8143e3efaa8_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_e086609d712c8058a8509341a19acb8ba8b6b1d4483ebe15fd83db7649ea7240 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e086609d712c8058a8509341a19acb8ba8b6b1d4483ebe15fd83db7649ea7240->enter($__internal_e086609d712c8058a8509341a19acb8ba8b6b1d4483ebe15fd83db7649ea7240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_927efa5cc5562785b0fb4031eb3d60f279136b0064704805027e80d6653b775d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_927efa5cc5562785b0fb4031eb3d60f279136b0064704805027e80d6653b775d->enter($__internal_927efa5cc5562785b0fb4031eb3d60f279136b0064704805027e80d6653b775d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Curriculum") : ("Edit Curriculum"));
        echo "</h1>
      <h2>";
        // line 16
        echo twig_escape_filter($this->env, ((array_key_exists("result_message", $context)) ? (($context["result_message"] ?? $this->getContext($context, "result_message"))) : ("")), "html", null, true);
        echo "</h2>

      <label for=\"form[curriculum_code]\">Curriculum Code</label>
      <input type=\"text\" name=\"form[curriculum_code]\" placeholder=\"IM101\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "curriculum_code", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "curriculum_code", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[curriculum_name]\">Curriculum Name</label>
      <input type=\"text\" name=\"form[curriculum_name]\" placeholder=\"Introduction to Internal Medicine\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "curriculum_name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "curriculum_name", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[curriculum_type]\">Curriculum Type</label>
      <select name=\"form[curriculum_type]\">
        <option value=\"modularized\" ";
        // line 26
        echo ((($this->getAttribute(($context["form"] ?? null), "curriculumType", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "curriculumType", array()) == "modularized"))) ? ("selected") : (""));
        echo " >Modularized</option>
        <option value=\"semester\" ";
        // line 27
        echo ((($this->getAttribute(($context["form"] ?? null), "curriculumType", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "curriculumType", array()) == "semester"))) ? ("selected") : (""));
        echo " >Semester</option>
      </select>

      <label for=\"form[curriculum_school]\">Curriculum School</label>
      <select name=\"form[curriculum_school]\">
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["schools"] ?? $this->getContext($context, "schools")));
        foreach ($context['_seq'] as $context["_key"] => $context["school"]) {
            // line 33
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "id", array()), "html", null, true);
            echo "\" ";
            echo ((($this->getAttribute($context["school"], "id", array()) == (($this->getAttribute(($context["form"] ?? null), "curriculum_school", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "curriculum_school", array())) : ("")))) ? ("selected") : (""));
            echo " >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "schoolName", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['school'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "      </select>

      <label for=\"form[curriculum_grade_system]\">Curriculum Grade System</label>
      <select name=\"form[curriculum_grade_system]\">
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["grade_systems"] ?? $this->getContext($context, "grade_systems")));
        foreach ($context['_seq'] as $context["_key"] => $context["grade_system"]) {
            // line 40
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["grade_system"], "id", array()), "html", null, true);
            echo "\" ";
            echo ((($this->getAttribute($context["grade_system"], "id", array()) == (($this->getAttribute(($context["form"] ?? null), "curriculum_grade_system", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "curriculum_grade_system", array())) : ("")))) ? ("selected") : (""));
            echo " >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["grade_system"], "gradeSystemName", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grade_system'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "      </select>

      <button>";
        // line 44
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Create Curriculum") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_927efa5cc5562785b0fb4031eb3d60f279136b0064704805027e80d6653b775d->leave($__internal_927efa5cc5562785b0fb4031eb3d60f279136b0064704805027e80d6653b775d_prof);

        
        $__internal_e086609d712c8058a8509341a19acb8ba8b6b1d4483ebe15fd83db7649ea7240->leave($__internal_e086609d712c8058a8509341a19acb8ba8b6b1d4483ebe15fd83db7649ea7240_prof);

    }

    public function getTemplateName()
    {
        return ":curriculum:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 44,  174 => 42,  161 => 40,  157 => 39,  151 => 35,  138 => 33,  134 => 32,  126 => 27,  122 => 26,  115 => 22,  109 => 19,  103 => 16,  99 => 15,  95 => 13,  86 => 12,  73 => 7,  64 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  {{ (mode == 'new') ? 'New Curriculum' : 'Edit Curriculum' }}
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">{{ (mode == 'new') ? 'New Curriculum' : 'Edit Curriculum' }}</h1>
      <h2>{{ result_message is defined ? result_message : '' }}</h2>

      <label for=\"form[curriculum_code]\">Curriculum Code</label>
      <input type=\"text\" name=\"form[curriculum_code]\" placeholder=\"IM101\" value=\"{{ form.curriculum_code is defined ? form.curriculum_code : '' }}\" required />

      <label for=\"form[curriculum_name]\">Curriculum Name</label>
      <input type=\"text\" name=\"form[curriculum_name]\" placeholder=\"Introduction to Internal Medicine\" value=\"{{ form.curriculum_name is defined ? form.curriculum_name : '' }}\" required />

      <label for=\"form[curriculum_type]\">Curriculum Type</label>
      <select name=\"form[curriculum_type]\">
        <option value=\"modularized\" {{ (form.curriculumType is defined and form.curriculumType == 'modularized') ? 'selected' : '' }} >Modularized</option>
        <option value=\"semester\" {{ (form.curriculumType is defined and form.curriculumType == 'semester') ? 'selected' : '' }} >Semester</option>
      </select>

      <label for=\"form[curriculum_school]\">Curriculum School</label>
      <select name=\"form[curriculum_school]\">
        {% for school in schools %}
          <option value=\"{{ school.id }}\" {{ (school.id == (form.curriculum_school is defined ? form.curriculum_school : '')) ? 'selected' : '' }} >{{ school.schoolName }}</option>
        {% endfor %}
      </select>

      <label for=\"form[curriculum_grade_system]\">Curriculum Grade System</label>
      <select name=\"form[curriculum_grade_system]\">
        {% for grade_system in grade_systems %}
          <option value=\"{{ grade_system.id }}\" {{ (grade_system.id == (form.curriculum_grade_system is defined ? form.curriculum_grade_system : '')) ? 'selected' : '' }} >{{ grade_system.gradeSystemName }}</option>
        {% endfor %}
      </select>

      <button>{{ (mode == 'new') ? 'Create Curriculum' : 'Save Changes' }}</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", ":curriculum:form.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/curriculum/form.html.twig");
    }
}
