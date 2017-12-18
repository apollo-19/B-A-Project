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
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b0ce47c67cee0b2adac842ab4584d0f7c42c749493362dcb99f2d93e89d65057 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0ce47c67cee0b2adac842ab4584d0f7c42c749493362dcb99f2d93e89d65057->enter($__internal_b0ce47c67cee0b2adac842ab4584d0f7c42c749493362dcb99f2d93e89d65057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":course:form.html.twig"));

        $__internal_aeb1861facabe3d0ac96bd26a1c8cb53167f6e1ce7562ed44425b47419efe422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeb1861facabe3d0ac96bd26a1c8cb53167f6e1ce7562ed44425b47419efe422->enter($__internal_aeb1861facabe3d0ac96bd26a1c8cb53167f6e1ce7562ed44425b47419efe422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":course:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b0ce47c67cee0b2adac842ab4584d0f7c42c749493362dcb99f2d93e89d65057->leave($__internal_b0ce47c67cee0b2adac842ab4584d0f7c42c749493362dcb99f2d93e89d65057_prof);

        
        $__internal_aeb1861facabe3d0ac96bd26a1c8cb53167f6e1ce7562ed44425b47419efe422->leave($__internal_aeb1861facabe3d0ac96bd26a1c8cb53167f6e1ce7562ed44425b47419efe422_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9d83356bc49203cd04711f475042271cd8d45df757d566e1161d3199deb7241e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d83356bc49203cd04711f475042271cd8d45df757d566e1161d3199deb7241e->enter($__internal_9d83356bc49203cd04711f475042271cd8d45df757d566e1161d3199deb7241e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dbe7bb4734e436b7f8ad0a96b77025b6334cc7fe1c1d037f002ae44002343c82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbe7bb4734e436b7f8ad0a96b77025b6334cc7fe1c1d037f002ae44002343c82->enter($__internal_dbe7bb4734e436b7f8ad0a96b77025b6334cc7fe1c1d037f002ae44002343c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Course") : ("Edit Course"));
        echo "
";
        
        $__internal_dbe7bb4734e436b7f8ad0a96b77025b6334cc7fe1c1d037f002ae44002343c82->leave($__internal_dbe7bb4734e436b7f8ad0a96b77025b6334cc7fe1c1d037f002ae44002343c82_prof);

        
        $__internal_9d83356bc49203cd04711f475042271cd8d45df757d566e1161d3199deb7241e->leave($__internal_9d83356bc49203cd04711f475042271cd8d45df757d566e1161d3199deb7241e_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_0dc4fc82e2ab0a1fcdb2503192fa109473448a81f54ae916b60f93c32c50ffb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0dc4fc82e2ab0a1fcdb2503192fa109473448a81f54ae916b60f93c32c50ffb0->enter($__internal_0dc4fc82e2ab0a1fcdb2503192fa109473448a81f54ae916b60f93c32c50ffb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_a2dc4ad526a98fe6a9941ff25c19493eb88577cab5141c11ceb50c38d6ec1536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2dc4ad526a98fe6a9941ff25c19493eb88577cab5141c11ceb50c38d6ec1536->enter($__internal_a2dc4ad526a98fe6a9941ff25c19493eb88577cab5141c11ceb50c38d6ec1536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_a2dc4ad526a98fe6a9941ff25c19493eb88577cab5141c11ceb50c38d6ec1536->leave($__internal_a2dc4ad526a98fe6a9941ff25c19493eb88577cab5141c11ceb50c38d6ec1536_prof);

        
        $__internal_0dc4fc82e2ab0a1fcdb2503192fa109473448a81f54ae916b60f93c32c50ffb0->leave($__internal_0dc4fc82e2ab0a1fcdb2503192fa109473448a81f54ae916b60f93c32c50ffb0_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_09e3b3f53e8885ff12fde57a8edb8d38df7c7aa1d6732161cae56157e7410f15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09e3b3f53e8885ff12fde57a8edb8d38df7c7aa1d6732161cae56157e7410f15->enter($__internal_09e3b3f53e8885ff12fde57a8edb8d38df7c7aa1d6732161cae56157e7410f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fb61677aab417aaf98fc188e2e93e79cd0eefe0e65e1ddeefb117cb09205b27a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb61677aab417aaf98fc188e2e93e79cd0eefe0e65e1ddeefb117cb09205b27a->enter($__internal_fb61677aab417aaf98fc188e2e93e79cd0eefe0e65e1ddeefb117cb09205b27a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
      <select name=\"form[curriculum_id]\" id=\"courseCurriculum\">
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["curriculums"] ?? $this->getContext($context, "curriculums")));
        foreach ($context['_seq'] as $context["_key"] => $context["curriculum"]) {
            // line 30
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["curriculum"], "id", array()), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["curriculum"], "curriculumType", array()), "html", null, true);
            echo "\" ";
            echo ((($this->getAttribute(($context["form"] ?? null), "curriculum_id", array(), "any", true, true) && ($this->getAttribute($context["curriculum"], "id", array()) == $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "curriculum_id", array())))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, ((($this->getAttribute($context["curriculum"], "curriculumName", array()) . " (") . twig_capitalize_string_filter($this->env, $this->getAttribute($context["curriculum"], "curriculumType", array()))) . ")"), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curriculum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "      </select>

      <label for=\"form[module_id]\" class=\"courseModules\">Course Module</label>
      <select name=\"form[module_id]\" class=\"courseModules\">
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

      <label for=\"form[semester_id]\" class=\"courseSemesters\">Course Semester</label>
      <select name=\"form[semester_id]\" class=\"courseSemesters\">
        <option value=\"\">No Semester</option>
        ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["semesters"] ?? $this->getContext($context, "semesters")));
        foreach ($context['_seq'] as $context["_key"] => $context["semester"]) {
            // line 46
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["semester"], "id", array()), "html", null, true);
            echo "\" ";
            echo ((($this->getAttribute(($context["form"] ?? null), "semester_id", array(), "any", true, true) && ($this->getAttribute($context["semester"], "id", array()) == $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "semester_id", array())))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["semester"], "semester", array()) . "/") . $this->getAttribute($context["semester"], "year", array())), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['semester'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "      </select>

      <button>";
        // line 50
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Create Course") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_fb61677aab417aaf98fc188e2e93e79cd0eefe0e65e1ddeefb117cb09205b27a->leave($__internal_fb61677aab417aaf98fc188e2e93e79cd0eefe0e65e1ddeefb117cb09205b27a_prof);

        
        $__internal_09e3b3f53e8885ff12fde57a8edb8d38df7c7aa1d6732161cae56157e7410f15->leave($__internal_09e3b3f53e8885ff12fde57a8edb8d38df7c7aa1d6732161cae56157e7410f15_prof);

    }

    // line 57
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_bf74b26a136883159be96d254e37b621bd23b4fe2a9d0393ddd9b81b25d88bd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf74b26a136883159be96d254e37b621bd23b4fe2a9d0393ddd9b81b25d88bd3->enter($__internal_bf74b26a136883159be96d254e37b621bd23b4fe2a9d0393ddd9b81b25d88bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_cf2eee4e26dd9a88944d238a9f0863597ce9febdb0be73dba37ee907797a5a7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf2eee4e26dd9a88944d238a9f0863597ce9febdb0be73dba37ee907797a5a7a->enter($__internal_cf2eee4e26dd9a88944d238a9f0863597ce9febdb0be73dba37ee907797a5a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 58
        echo "  <script type=\"text/javascript\">
    function TypeDiff() {
      if(\$('#courseCurriculum option:selected').attr(\"title\") == 'semester') {
        \$('.courseModules').hide();
        \$('.courseSemesters').show();
      } else if (\$('#courseCurriculum option:selected').attr(\"title\") == 'modularized') {
        \$('.courseSemesters').hide();
        \$('.courseModules').show();
      }
    }

    \$(document).ready(function(){
      TypeDiff();

      \$('#courseCurriculum').on(\"change\", function() {
        TypeDiff();
      });
    });
  </script>
";
        
        $__internal_cf2eee4e26dd9a88944d238a9f0863597ce9febdb0be73dba37ee907797a5a7a->leave($__internal_cf2eee4e26dd9a88944d238a9f0863597ce9febdb0be73dba37ee907797a5a7a_prof);

        
        $__internal_bf74b26a136883159be96d254e37b621bd23b4fe2a9d0393ddd9b81b25d88bd3->leave($__internal_bf74b26a136883159be96d254e37b621bd23b4fe2a9d0393ddd9b81b25d88bd3_prof);

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
        return array (  225 => 58,  216 => 57,  200 => 50,  196 => 48,  183 => 46,  179 => 45,  172 => 40,  159 => 38,  155 => 37,  148 => 32,  133 => 30,  129 => 29,  122 => 25,  116 => 22,  110 => 19,  104 => 16,  100 => 15,  96 => 13,  87 => 12,  74 => 7,  65 => 6,  52 => 3,  43 => 2,  11 => 1,);
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
      <select name=\"form[curriculum_id]\" id=\"courseCurriculum\">
        {% for curriculum in curriculums %}
          <option value=\"{{ curriculum.id }}\" title=\"{{ curriculum.curriculumType }}\" {{ (form.curriculum_id is defined and curriculum.id == form.curriculum_id) ? 'selected' : '' }}>{{ curriculum.curriculumName ~ ' (' ~ curriculum.curriculumType | capitalize ~ ')' }}</option>
        {% endfor %}
      </select>

      <label for=\"form[module_id]\" class=\"courseModules\">Course Module</label>
      <select name=\"form[module_id]\" class=\"courseModules\">
        <option value=\"\">No Module</option>
        {% for module in modules %}
          <option value=\"{{ module.id }}\" {{ (form.module_id is defined and module.id == form.module_id) ? 'selected' : '' }}>{{ module.moduleName }}</option>
        {% endfor %}
      </select>

      <label for=\"form[semester_id]\" class=\"courseSemesters\">Course Semester</label>
      <select name=\"form[semester_id]\" class=\"courseSemesters\">
        <option value=\"\">No Semester</option>
        {% for semester in semesters %}
          <option value=\"{{ semester.id }}\" {{ (form.semester_id is defined and semester.id == form.semester_id) ? 'selected' : '' }}>{{ semester.semester ~ '/' ~ semester.year }}</option>
        {% endfor %}
      </select>

      <button>{{ (mode == 'new') ? 'Create Course' : 'Save Changes' }}</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}

{% block javascript %}
  <script type=\"text/javascript\">
    function TypeDiff() {
      if(\$('#courseCurriculum option:selected').attr(\"title\") == 'semester') {
        \$('.courseModules').hide();
        \$('.courseSemesters').show();
      } else if (\$('#courseCurriculum option:selected').attr(\"title\") == 'modularized') {
        \$('.courseSemesters').hide();
        \$('.courseModules').show();
      }
    }

    \$(document).ready(function(){
      TypeDiff();

      \$('#courseCurriculum').on(\"change\", function() {
        TypeDiff();
      });
    });
  </script>
{% endblock %}
", ":course:form.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/course/form.html.twig");
    }
}
