<?php

/* :prerequisite:form.html.twig */
class __TwigTemplate_2248973630f818502cabe467865dd3322530d49377260254316ab6dbf5f61926 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":prerequisite:form.html.twig", 1);
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
        $__internal_bc50743b3849c23b148ccda500d2981b55a56c228ec21647dae56c80997b0218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc50743b3849c23b148ccda500d2981b55a56c228ec21647dae56c80997b0218->enter($__internal_bc50743b3849c23b148ccda500d2981b55a56c228ec21647dae56c80997b0218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":prerequisite:form.html.twig"));

        $__internal_05b4aeb9e8aa77cf2ebe62bb79182d7a7f26e851beb67cb729693b7dfe5d1bb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05b4aeb9e8aa77cf2ebe62bb79182d7a7f26e851beb67cb729693b7dfe5d1bb0->enter($__internal_05b4aeb9e8aa77cf2ebe62bb79182d7a7f26e851beb67cb729693b7dfe5d1bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":prerequisite:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc50743b3849c23b148ccda500d2981b55a56c228ec21647dae56c80997b0218->leave($__internal_bc50743b3849c23b148ccda500d2981b55a56c228ec21647dae56c80997b0218_prof);

        
        $__internal_05b4aeb9e8aa77cf2ebe62bb79182d7a7f26e851beb67cb729693b7dfe5d1bb0->leave($__internal_05b4aeb9e8aa77cf2ebe62bb79182d7a7f26e851beb67cb729693b7dfe5d1bb0_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_75a5a336ef8c44b33de4a16792f148b2ac7c0495ceec04855c5d898fe0893630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75a5a336ef8c44b33de4a16792f148b2ac7c0495ceec04855c5d898fe0893630->enter($__internal_75a5a336ef8c44b33de4a16792f148b2ac7c0495ceec04855c5d898fe0893630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f39ca8c4006b4b56f81b60bd687b01ac7417d32790d12097bc182772906cced0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f39ca8c4006b4b56f81b60bd687b01ac7417d32790d12097bc182772906cced0->enter($__internal_f39ca8c4006b4b56f81b60bd687b01ac7417d32790d12097bc182772906cced0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Prerequisite") : ("Edit Prerequisite"));
        echo "
";
        
        $__internal_f39ca8c4006b4b56f81b60bd687b01ac7417d32790d12097bc182772906cced0->leave($__internal_f39ca8c4006b4b56f81b60bd687b01ac7417d32790d12097bc182772906cced0_prof);

        
        $__internal_75a5a336ef8c44b33de4a16792f148b2ac7c0495ceec04855c5d898fe0893630->leave($__internal_75a5a336ef8c44b33de4a16792f148b2ac7c0495ceec04855c5d898fe0893630_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_ac5957606a8f889040e25731957767855789462d8788001875056f471e6c7a8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac5957606a8f889040e25731957767855789462d8788001875056f471e6c7a8c->enter($__internal_ac5957606a8f889040e25731957767855789462d8788001875056f471e6c7a8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_8e0b3cd10b6b28668f0420296b29d44a48e50517d2046211e99eb120ed49402e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e0b3cd10b6b28668f0420296b29d44a48e50517d2046211e99eb120ed49402e->enter($__internal_8e0b3cd10b6b28668f0420296b29d44a48e50517d2046211e99eb120ed49402e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_8e0b3cd10b6b28668f0420296b29d44a48e50517d2046211e99eb120ed49402e->leave($__internal_8e0b3cd10b6b28668f0420296b29d44a48e50517d2046211e99eb120ed49402e_prof);

        
        $__internal_ac5957606a8f889040e25731957767855789462d8788001875056f471e6c7a8c->leave($__internal_ac5957606a8f889040e25731957767855789462d8788001875056f471e6c7a8c_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f4fe657b6d18a1c734f6c0ba0d4a83e4e4bf00402a8c4b8d83cf1272055dc00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f4fe657b6d18a1c734f6c0ba0d4a83e4e4bf00402a8c4b8d83cf1272055dc00->enter($__internal_0f4fe657b6d18a1c734f6c0ba0d4a83e4e4bf00402a8c4b8d83cf1272055dc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1082d34576016977835261938532301c465d79d0c7ac5d633c7c94b93413f92f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1082d34576016977835261938532301c465d79d0c7ac5d633c7c94b93413f92f->enter($__internal_1082d34576016977835261938532301c465d79d0c7ac5d633c7c94b93413f92f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Prerequisite") : ("Edit Prerequisite"));
        echo "</h1>
      <h2>";
        // line 16
        echo twig_escape_filter($this->env, ((array_key_exists("result_message", $context)) ? (($context["result_message"] ?? $this->getContext($context, "result_message"))) : ("")), "html", null, true);
        echo "</h2>

      <label for=\"form[course_module_type]\">Course or Module?</label>
      <select name=\"form[course_module_type]\" id=\"courseModuleType\">
        <option value=\"course\" ";
        // line 20
        echo ((($this->getAttribute(($context["form"] ?? null), "courseModuleType", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "courseModuleType", array()) == "course"))) ? ("selected") : (""));
        echo ">Course</option>
        <option value=\"module\" ";
        // line 21
        echo ((($this->getAttribute(($context["form"] ?? null), "courseModuleType", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "courseModuleType", array()) == "module"))) ? ("selected") : (""));
        echo ">Module</option>
      </select>

      <label for=\"form[course_module_id]\">Course/Module Name</label>
      <select name=\"form[course_module_id]\" id=\"modules1\">
        <optgroup label=\"Modules\">
          ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? $this->getContext($context, "modules")));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 28
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
            echo "\" ";
            echo (((((($this->getAttribute(($context["form"] ?? null), "courseModuleType", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "courseModuleType", array()) == "module"))) ? ($this->getAttribute($context["module"], "id", array())) : (0)) == (($this->getAttribute(($context["form"] ?? null), "courseModuleType", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "courseModuleType", array())) : ("")))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "moduleName", array()), "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </optgroup>
      </select>

      <select name=\"form[course_module_id]\" id=\"courses1\">
        <optgroup label=\"Courses\">
          ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 36
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\" ";
            echo (((((($this->getAttribute(($context["form"] ?? null), "courseModuleType", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "courseModuleType", array()) == "course"))) ? ($this->getAttribute($context["course"], "id", array())) : (0)) == (($this->getAttribute(($context["form"] ?? null), "courseModuleType", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "courseModuleType", array())) : ("")))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "courseName", array()), "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        </optgroup>
      </select>

      <label for=\"form[prerequisite_type]\">Prerequisite Type</label>
      <select name=\"form[prerequisite_type]\" id=\"prerequisiteType\">
        <option value=\"course\" ";
        // line 43
        echo ((($this->getAttribute(($context["form"] ?? null), "prerequisiteType", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prerequisiteType", array()) == "course"))) ? ("selected") : (""));
        echo ">Course</option>
        <option value=\"module\" ";
        // line 44
        echo ((($this->getAttribute(($context["form"] ?? null), "prerequisiteType", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prerequisiteType", array()) == "module"))) ? ("selected") : (""));
        echo ">Module</option>
      </select>

      <label for=\"form[prerequisite_id]\">Prerequisite</label>
      <select name=\"form[prerequisite_id]\" id=\"modules2\">
        <optgroup label=\"Modules\">
          ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? $this->getContext($context, "modules")));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 51
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
            echo "\" ";
            echo (((((($this->getAttribute(($context["form"] ?? null), "prerequisiteType", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prerequisiteType", array()) == "module"))) ? ($this->getAttribute($context["module"], "id", array())) : (0)) == (($this->getAttribute(($context["form"] ?? null), "prerequisiteType", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prerequisiteType", array())) : ("")))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "moduleName", array()), "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "        </optgroup>
      </select>

      <select name=\"form[prerequisite_id]\" id=\"courses2\">
        <optgroup label=\"Courses\" id=\"courses2\">
          ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 59
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\" ";
            echo (((((($this->getAttribute(($context["form"] ?? null), "prerequisiteType", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prerequisiteType", array()) == "course"))) ? ($this->getAttribute($context["course"], "id", array())) : (0)) == (($this->getAttribute(($context["form"] ?? null), "prerequisiteType", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prerequisiteType", array())) : ("")))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "courseName", array()), "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </optgroup>
      </select>

      <button>";
        // line 64
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Create Prerequisite") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_1082d34576016977835261938532301c465d79d0c7ac5d633c7c94b93413f92f->leave($__internal_1082d34576016977835261938532301c465d79d0c7ac5d633c7c94b93413f92f_prof);

        
        $__internal_0f4fe657b6d18a1c734f6c0ba0d4a83e4e4bf00402a8c4b8d83cf1272055dc00->leave($__internal_0f4fe657b6d18a1c734f6c0ba0d4a83e4e4bf00402a8c4b8d83cf1272055dc00_prof);

    }

    // line 71
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_23439d7340ff18e5f1c109671c14d2307c2fa54f93a1f3722c0b393909cbf06c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23439d7340ff18e5f1c109671c14d2307c2fa54f93a1f3722c0b393909cbf06c->enter($__internal_23439d7340ff18e5f1c109671c14d2307c2fa54f93a1f3722c0b393909cbf06c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_9a8af75685c0a7de36c16b698c8342c5d90d391070e4268c9cf99bab9dd969ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a8af75685c0a7de36c16b698c8342c5d90d391070e4268c9cf99bab9dd969ba->enter($__internal_9a8af75685c0a7de36c16b698c8342c5d90d391070e4268c9cf99bab9dd969ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 72
        echo "  <script type=\"text/javascript\">
    function TypeDiff(whch, num) {
      var courseModulePrerequisiteType = \$('#' + whch).val();
      (courseModulePrerequisiteType == 'course') ? \$('#modules' + num).hide() : \$('#courses' + num).hide();
      \$('#' + courseModulePrerequisiteType + 's' + num).show();
    }

    \$(document).ready(function(){
      TypeDiff('courseModuleType', '1');
      TypeDiff('prerequisiteType', '2');

      \$('#courseModuleType').on(\"change\", function() {
        TypeDiff('courseModuleType', '1');
      });

      \$('#prerequisiteType').on(\"change\", function() {
        TypeDiff('prerequisiteType', '2');
      });
    });
  </script>
";
        
        $__internal_9a8af75685c0a7de36c16b698c8342c5d90d391070e4268c9cf99bab9dd969ba->leave($__internal_9a8af75685c0a7de36c16b698c8342c5d90d391070e4268c9cf99bab9dd969ba_prof);

        
        $__internal_23439d7340ff18e5f1c109671c14d2307c2fa54f93a1f3722c0b393909cbf06c->leave($__internal_23439d7340ff18e5f1c109671c14d2307c2fa54f93a1f3722c0b393909cbf06c_prof);

    }

    public function getTemplateName()
    {
        return ":prerequisite:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 72,  247 => 71,  231 => 64,  226 => 61,  213 => 59,  209 => 58,  202 => 53,  189 => 51,  185 => 50,  176 => 44,  172 => 43,  165 => 38,  152 => 36,  148 => 35,  141 => 30,  128 => 28,  124 => 27,  115 => 21,  111 => 20,  104 => 16,  100 => 15,  96 => 13,  87 => 12,  74 => 7,  65 => 6,  52 => 3,  43 => 2,  11 => 1,);
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
  {{ (mode == 'new') ? 'New Prerequisite' : 'Edit Prerequisite' }}
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">{{ (mode == 'new') ? 'New Prerequisite' : 'Edit Prerequisite' }}</h1>
      <h2>{{ result_message is defined ? result_message : '' }}</h2>

      <label for=\"form[course_module_type]\">Course or Module?</label>
      <select name=\"form[course_module_type]\" id=\"courseModuleType\">
        <option value=\"course\" {{ (form.courseModuleType is defined and form.courseModuleType == 'course') ? 'selected' : '' }}>Course</option>
        <option value=\"module\" {{ (form.courseModuleType is defined and form.courseModuleType == 'module') ? 'selected' : '' }}>Module</option>
      </select>

      <label for=\"form[course_module_id]\">Course/Module Name</label>
      <select name=\"form[course_module_id]\" id=\"modules1\">
        <optgroup label=\"Modules\">
          {% for module in modules %}
            <option value=\"{{ module.id }}\" {{ ((form.courseModuleType is defined and form.courseModuleType == 'module' ? module.id : 0) == (form.courseModuleType is defined ? form.courseModuleType : '')) ? 'selected' : '' }}>{{ module.moduleName }}</option>
          {% endfor %}
        </optgroup>
      </select>

      <select name=\"form[course_module_id]\" id=\"courses1\">
        <optgroup label=\"Courses\">
          {% for course in courses %}
            <option value=\"{{ course.id }}\" {{ ((form.courseModuleType is defined and form.courseModuleType == 'course' ? course.id : 0) == (form.courseModuleType is defined ? form.courseModuleType : '')) ? 'selected' : '' }}>{{ course.courseName }}</option>
          {% endfor %}
        </optgroup>
      </select>

      <label for=\"form[prerequisite_type]\">Prerequisite Type</label>
      <select name=\"form[prerequisite_type]\" id=\"prerequisiteType\">
        <option value=\"course\" {{ (form.prerequisiteType is defined and form.prerequisiteType == 'course') ? 'selected' : '' }}>Course</option>
        <option value=\"module\" {{ (form.prerequisiteType is defined and form.prerequisiteType == 'module') ? 'selected' : '' }}>Module</option>
      </select>

      <label for=\"form[prerequisite_id]\">Prerequisite</label>
      <select name=\"form[prerequisite_id]\" id=\"modules2\">
        <optgroup label=\"Modules\">
          {% for module in modules %}
            <option value=\"{{ module.id }}\" {{ ((form.prerequisiteType is defined and form.prerequisiteType == 'module' ? module.id : 0) == (form.prerequisiteType is defined ? form.prerequisiteType : '')) ? 'selected' : '' }}>{{ module.moduleName }}</option>
          {% endfor %}
        </optgroup>
      </select>

      <select name=\"form[prerequisite_id]\" id=\"courses2\">
        <optgroup label=\"Courses\" id=\"courses2\">
          {% for course in courses %}
            <option value=\"{{ course.id }}\" {{ ((form.prerequisiteType is defined and form.prerequisiteType == 'course' ? course.id : 0) == (form.prerequisiteType is defined ? form.prerequisiteType : '')) ? 'selected' : '' }}>{{ course.courseName }}</option>
          {% endfor %}
        </optgroup>
      </select>

      <button>{{ (mode == 'new') ? 'Create Prerequisite' : 'Save Changes' }}</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}

{% block javascript %}
  <script type=\"text/javascript\">
    function TypeDiff(whch, num) {
      var courseModulePrerequisiteType = \$('#' + whch).val();
      (courseModulePrerequisiteType == 'course') ? \$('#modules' + num).hide() : \$('#courses' + num).hide();
      \$('#' + courseModulePrerequisiteType + 's' + num).show();
    }

    \$(document).ready(function(){
      TypeDiff('courseModuleType', '1');
      TypeDiff('prerequisiteType', '2');

      \$('#courseModuleType').on(\"change\", function() {
        TypeDiff('courseModuleType', '1');
      });

      \$('#prerequisiteType').on(\"change\", function() {
        TypeDiff('prerequisiteType', '2');
      });
    });
  </script>
{% endblock %}
", ":prerequisite:form.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/prerequisite/form.html.twig");
    }
}
