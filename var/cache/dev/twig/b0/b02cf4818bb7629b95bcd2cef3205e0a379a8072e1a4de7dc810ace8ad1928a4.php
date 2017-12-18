<?php

/* :assessment:form.html.twig */
class __TwigTemplate_ebd4ca767832ed81b53932fe7093367332226d41eb49b2355356a2bcd67d8a68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":assessment:form.html.twig", 1);
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
        $__internal_d8f14289ec1258361cd0727b24a5ce437041db3cc8336ccb244147d89d114b52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8f14289ec1258361cd0727b24a5ce437041db3cc8336ccb244147d89d114b52->enter($__internal_d8f14289ec1258361cd0727b24a5ce437041db3cc8336ccb244147d89d114b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":assessment:form.html.twig"));

        $__internal_eec4aef48e624939c6c2e27ec2fdbb370c190b8f32164fa7f94f79b5fb129114 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eec4aef48e624939c6c2e27ec2fdbb370c190b8f32164fa7f94f79b5fb129114->enter($__internal_eec4aef48e624939c6c2e27ec2fdbb370c190b8f32164fa7f94f79b5fb129114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":assessment:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d8f14289ec1258361cd0727b24a5ce437041db3cc8336ccb244147d89d114b52->leave($__internal_d8f14289ec1258361cd0727b24a5ce437041db3cc8336ccb244147d89d114b52_prof);

        
        $__internal_eec4aef48e624939c6c2e27ec2fdbb370c190b8f32164fa7f94f79b5fb129114->leave($__internal_eec4aef48e624939c6c2e27ec2fdbb370c190b8f32164fa7f94f79b5fb129114_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_d5b618e5b3b02a85cd3b62b0f30e2e534bfda1d5705f58009a85d446618e516b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5b618e5b3b02a85cd3b62b0f30e2e534bfda1d5705f58009a85d446618e516b->enter($__internal_d5b618e5b3b02a85cd3b62b0f30e2e534bfda1d5705f58009a85d446618e516b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_80f830e949cef00518c4bbab34899bb110d4759cf68ff566c0903b8e3642edc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f830e949cef00518c4bbab34899bb110d4759cf68ff566c0903b8e3642edc3->enter($__internal_80f830e949cef00518c4bbab34899bb110d4759cf68ff566c0903b8e3642edc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New School Session") : ("Edit School Session"));
        echo "
";
        
        $__internal_80f830e949cef00518c4bbab34899bb110d4759cf68ff566c0903b8e3642edc3->leave($__internal_80f830e949cef00518c4bbab34899bb110d4759cf68ff566c0903b8e3642edc3_prof);

        
        $__internal_d5b618e5b3b02a85cd3b62b0f30e2e534bfda1d5705f58009a85d446618e516b->leave($__internal_d5b618e5b3b02a85cd3b62b0f30e2e534bfda1d5705f58009a85d446618e516b_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_e590d3f26a927e9d7f2e9f0520f6293841f8c773245e61d1b8e94c858f396c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e590d3f26a927e9d7f2e9f0520f6293841f8c773245e61d1b8e94c858f396c77->enter($__internal_e590d3f26a927e9d7f2e9f0520f6293841f8c773245e61d1b8e94c858f396c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_73b463ed083d5819031c24051047f4256a9426bf2514d2d1962b9d228ee62810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73b463ed083d5819031c24051047f4256a9426bf2514d2d1962b9d228ee62810->enter($__internal_73b463ed083d5819031c24051047f4256a9426bf2514d2d1962b9d228ee62810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_73b463ed083d5819031c24051047f4256a9426bf2514d2d1962b9d228ee62810->leave($__internal_73b463ed083d5819031c24051047f4256a9426bf2514d2d1962b9d228ee62810_prof);

        
        $__internal_e590d3f26a927e9d7f2e9f0520f6293841f8c773245e61d1b8e94c858f396c77->leave($__internal_e590d3f26a927e9d7f2e9f0520f6293841f8c773245e61d1b8e94c858f396c77_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_c738384e69860c486208b4c5b87e917b5792c9265c97d34ec4c85185f7b696ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c738384e69860c486208b4c5b87e917b5792c9265c97d34ec4c85185f7b696ef->enter($__internal_c738384e69860c486208b4c5b87e917b5792c9265c97d34ec4c85185f7b696ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9d5e34b68ad545c59813171a16eb4cf15cf775ec481a55181eefba0036a5d2d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5e34b68ad545c59813171a16eb4cf15cf775ec481a55181eefba0036a5d2d3->enter($__internal_9d5e34b68ad545c59813171a16eb4cf15cf775ec481a55181eefba0036a5d2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New School Session") : ("Edit School Session"));
        echo "</h1>
      <h2>";
        // line 16
        echo twig_escape_filter($this->env, ((array_key_exists("result_message", $context)) ? (($context["result_message"] ?? $this->getContext($context, "result_message"))) : ("")), "html", null, true);
        echo "</h2>

      <label for=\"form[session_code]\">Session Code</label>
      <input type=\"text\" name=\"form[session_code]\" placeholder=\"DoIM\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "session_code", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "session_code", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[session_name]\">Session Name</label>
      <input type=\"text\" name=\"form[session_name]\" placeholder=\"session One\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "session_name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "session_name", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[session_section]\">Session Section</label>
      <select name=\"form[session_section]\">
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sections"] ?? $this->getContext($context, "sections")));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 27
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "id", array()), "html", null, true);
            echo "\" ";
            echo ((($this->getAttribute(($context["form"] ?? null), "session_section", array(), "any", true, true) && ($this->getAttribute($context["section"], "id", array()) == $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "session_section", array())))) ? ("selected") : (""));
            echo " >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "sectionName", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "      </select>

      <label for=\"form[session_teacher]\">Session Teacher</label>
      <select name=\"form[session_teacher]\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["teachers"] ?? $this->getContext($context, "teachers")));
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 34
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "id", array()), "html", null, true);
            echo "\" ";
            echo ((($this->getAttribute(($context["form"] ?? null), "session_teacher", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "session_teacher", array()) == $this->getAttribute($context["teacher"], "id", array())))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "userName", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "middleName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "lastName", array()), "html", null, true);
            echo ")</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "      </select>

      <label for=\"form[course_module_type]\">Session Course/Module Type</label>
      <select name=\"form[course_module_type]\" id=\"courseModuleType\">
        <option value=\"course\" ";
        // line 40
        echo ((($this->getAttribute(($context["form"] ?? null), "course_module_type", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "course_module_type", array()) == "course"))) ? ("selected") : (""));
        echo ">Course</option>
        <option value=\"module\" ";
        // line 41
        echo ((($this->getAttribute(($context["form"] ?? null), "course_module_type", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "course_module_type", array()) == "module"))) ? ("selected") : (""));
        echo ">Module</option>
      </select>

      <label for=\"form[course_module_id]\">Session Course/Module</label>
      <select name=\"form[course_module_id]\" id=\"courseModuleId\">
        <optgroup label=\"Modules\" id=\"modules\">
          ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? $this->getContext($context, "modules")));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 48
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
            echo "\" ";
            echo (((((($this->getAttribute(($context["form"] ?? null), "course_module_id", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "course_module_id", array()) == "module"))) ? ($this->getAttribute($context["module"], "id", array())) : (0)) == (($this->getAttribute(($context["form"] ?? null), "course_module_id", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "course_module_id", array())) : ("")))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "moduleName", array()), "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </optgroup>

        <optgroup label=\"Courses\" id=\"courses\">
          ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 54
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\" ";
            echo (((((($this->getAttribute(($context["form"] ?? null), "course_module_id", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "course_module_id", array()) == "course"))) ? ($this->getAttribute($context["course"], "id", array())) : (0)) == (($this->getAttribute(($context["form"] ?? null), "course_module_id", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "course_module_id", array())) : ("")))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "courseName", array()), "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </optgroup>
      </select>

      <label for=\"form[session_start_date]\">Session Start Date</label>
      <input type=\"date\" name=\"form[session_start_date]\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "session_start_date", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "session_start_date", array())) : ("")), "html", null, true);
        echo "\">

      <label for=\"form[session_end_date]\">Session End Date</label>
      <input type=\"date\" name=\"form[session_end_date]\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "session_end_date", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "session_end_date", array())) : ("")), "html", null, true);
        echo "\">

      <button>";
        // line 65
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Create School Section") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_9d5e34b68ad545c59813171a16eb4cf15cf775ec481a55181eefba0036a5d2d3->leave($__internal_9d5e34b68ad545c59813171a16eb4cf15cf775ec481a55181eefba0036a5d2d3_prof);

        
        $__internal_c738384e69860c486208b4c5b87e917b5792c9265c97d34ec4c85185f7b696ef->leave($__internal_c738384e69860c486208b4c5b87e917b5792c9265c97d34ec4c85185f7b696ef_prof);

    }

    // line 72
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c7829b6e0020c0972aac07d858f92c84dc4ec294af6c8b1776b1f1f171eabc5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7829b6e0020c0972aac07d858f92c84dc4ec294af6c8b1776b1f1f171eabc5f->enter($__internal_c7829b6e0020c0972aac07d858f92c84dc4ec294af6c8b1776b1f1f171eabc5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_41b3896205a3b4c19824ca080274a3da3df98e165cf66c508bdb20b85f6d920a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41b3896205a3b4c19824ca080274a3da3df98e165cf66c508bdb20b85f6d920a->enter($__internal_41b3896205a3b4c19824ca080274a3da3df98e165cf66c508bdb20b85f6d920a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 73
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
        
        $__internal_41b3896205a3b4c19824ca080274a3da3df98e165cf66c508bdb20b85f6d920a->leave($__internal_41b3896205a3b4c19824ca080274a3da3df98e165cf66c508bdb20b85f6d920a_prof);

        
        $__internal_c7829b6e0020c0972aac07d858f92c84dc4ec294af6c8b1776b1f1f171eabc5f->leave($__internal_c7829b6e0020c0972aac07d858f92c84dc4ec294af6c8b1776b1f1f171eabc5f_prof);

    }

    public function getTemplateName()
    {
        return ":assessment:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 73,  260 => 72,  244 => 65,  239 => 63,  233 => 60,  227 => 56,  214 => 54,  210 => 53,  205 => 50,  192 => 48,  188 => 47,  179 => 41,  175 => 40,  169 => 36,  150 => 34,  146 => 33,  140 => 29,  127 => 27,  123 => 26,  116 => 22,  110 => 19,  104 => 16,  100 => 15,  96 => 13,  87 => 12,  74 => 7,  65 => 6,  52 => 3,  43 => 2,  11 => 1,);
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
  {{ (mode == 'new') ? 'New School Session' : 'Edit School Session' }}
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">{{ (mode == 'new') ? 'New School Session' : 'Edit School Session' }}</h1>
      <h2>{{ result_message is defined ? result_message : '' }}</h2>

      <label for=\"form[session_code]\">Session Code</label>
      <input type=\"text\" name=\"form[session_code]\" placeholder=\"DoIM\" value=\"{{ form.session_code is defined ? form.session_code : '' }}\" required />

      <label for=\"form[session_name]\">Session Name</label>
      <input type=\"text\" name=\"form[session_name]\" placeholder=\"session One\" value=\"{{ form.session_name is defined ? form.session_name : '' }}\" required />

      <label for=\"form[session_section]\">Session Section</label>
      <select name=\"form[session_section]\">
        {% for section in sections %}
          <option value=\"{{ section.id }}\" {{ (form.session_section is defined and section.id == form.session_section) ? 'selected' : '' }} >{{ section.sectionName }}</option>
        {% endfor %}
      </select>

      <label for=\"form[session_teacher]\">Session Teacher</label>
      <select name=\"form[session_teacher]\">
        {% for teacher in teachers %}
          <option value=\"{{ teacher.id }}\" {{ (form.session_teacher is defined and form.session_teacher == teacher.id) ? 'selected' : '' }}>{{ teacher.userName }} ({{ teacher.firstName }} {{ teacher.middleName }} {{ teacher.lastName }})</option>
        {% endfor %}
      </select>

      <label for=\"form[course_module_type]\">Session Course/Module Type</label>
      <select name=\"form[course_module_type]\" id=\"courseModuleType\">
        <option value=\"course\" {{ (form.course_module_type is defined and form.course_module_type == 'course') ? 'selected' : '' }}>Course</option>
        <option value=\"module\" {{ (form.course_module_type is defined and form.course_module_type == 'module') ? 'selected' : '' }}>Module</option>
      </select>

      <label for=\"form[course_module_id]\">Session Course/Module</label>
      <select name=\"form[course_module_id]\" id=\"courseModuleId\">
        <optgroup label=\"Modules\" id=\"modules\">
          {% for module in modules %}
            <option value=\"{{ module.id }}\" {{ ((form.course_module_id is defined and form.course_module_id == 'module' ? module.id : 0) == (form.course_module_id is defined ? form.course_module_id : '')) ? 'selected' : '' }}>{{ module.moduleName }}</option>
          {% endfor %}
        </optgroup>

        <optgroup label=\"Courses\" id=\"courses\">
          {% for course in courses %}
            <option value=\"{{ course.id }}\" {{ ((form.course_module_id is defined and form.course_module_id == 'course' ? course.id : 0) == (form.course_module_id is defined ? form.course_module_id : '')) ? 'selected' : '' }}>{{ course.courseName }}</option>
          {% endfor %}
        </optgroup>
      </select>

      <label for=\"form[session_start_date]\">Session Start Date</label>
      <input type=\"date\" name=\"form[session_start_date]\" value=\"{{ form.session_start_date is defined ? form.session_start_date : '' }}\">

      <label for=\"form[session_end_date]\">Session End Date</label>
      <input type=\"date\" name=\"form[session_end_date]\" value=\"{{ form.session_end_date is defined ? form.session_end_date : '' }}\">

      <button>{{ (mode == 'new') ? 'Create School Section' : 'Save Changes' }}</button>
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
", ":assessment:form.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/assessment/form.html.twig");
    }
}
