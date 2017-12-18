<?php

/* :session:form.html.twig */
class __TwigTemplate_97919e6a8a7f8c744f4529ea4d5db3fa64bbfbcfad2f3ca59db139968cd67c05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":session:form.html.twig", 1);
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
        $__internal_c4b8d001d9d2eed87d0678c526f27d6996dc42cd04ab098eb27bac7711551b8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4b8d001d9d2eed87d0678c526f27d6996dc42cd04ab098eb27bac7711551b8e->enter($__internal_c4b8d001d9d2eed87d0678c526f27d6996dc42cd04ab098eb27bac7711551b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":session:form.html.twig"));

        $__internal_6d41c77f500a11151304daac92ac70096a193bf96a3540d0a5628a6f8b7eb672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d41c77f500a11151304daac92ac70096a193bf96a3540d0a5628a6f8b7eb672->enter($__internal_6d41c77f500a11151304daac92ac70096a193bf96a3540d0a5628a6f8b7eb672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":session:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4b8d001d9d2eed87d0678c526f27d6996dc42cd04ab098eb27bac7711551b8e->leave($__internal_c4b8d001d9d2eed87d0678c526f27d6996dc42cd04ab098eb27bac7711551b8e_prof);

        
        $__internal_6d41c77f500a11151304daac92ac70096a193bf96a3540d0a5628a6f8b7eb672->leave($__internal_6d41c77f500a11151304daac92ac70096a193bf96a3540d0a5628a6f8b7eb672_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9ced50bb6a364fbb5b06b56feecd071042733ae893cbf7eb15feae5d8435b71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9ced50bb6a364fbb5b06b56feecd071042733ae893cbf7eb15feae5d8435b71->enter($__internal_e9ced50bb6a364fbb5b06b56feecd071042733ae893cbf7eb15feae5d8435b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_60e754de50863b05fe4f1eadb6f10882bfd432de3a96890de8d8f55fb032ad8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60e754de50863b05fe4f1eadb6f10882bfd432de3a96890de8d8f55fb032ad8d->enter($__internal_60e754de50863b05fe4f1eadb6f10882bfd432de3a96890de8d8f55fb032ad8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New School Session") : ("Edit School Session"));
        echo "
";
        
        $__internal_60e754de50863b05fe4f1eadb6f10882bfd432de3a96890de8d8f55fb032ad8d->leave($__internal_60e754de50863b05fe4f1eadb6f10882bfd432de3a96890de8d8f55fb032ad8d_prof);

        
        $__internal_e9ced50bb6a364fbb5b06b56feecd071042733ae893cbf7eb15feae5d8435b71->leave($__internal_e9ced50bb6a364fbb5b06b56feecd071042733ae893cbf7eb15feae5d8435b71_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_dda4f13b30fefc1c7d26090364462a81bbfd37517cf39b71eacbc5e0a236fb73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dda4f13b30fefc1c7d26090364462a81bbfd37517cf39b71eacbc5e0a236fb73->enter($__internal_dda4f13b30fefc1c7d26090364462a81bbfd37517cf39b71eacbc5e0a236fb73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_06efcb4e4ab9f344eb8d67e509581179c9eda3ee14c48cbc85dfa71e21ae49cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06efcb4e4ab9f344eb8d67e509581179c9eda3ee14c48cbc85dfa71e21ae49cd->enter($__internal_06efcb4e4ab9f344eb8d67e509581179c9eda3ee14c48cbc85dfa71e21ae49cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_06efcb4e4ab9f344eb8d67e509581179c9eda3ee14c48cbc85dfa71e21ae49cd->leave($__internal_06efcb4e4ab9f344eb8d67e509581179c9eda3ee14c48cbc85dfa71e21ae49cd_prof);

        
        $__internal_dda4f13b30fefc1c7d26090364462a81bbfd37517cf39b71eacbc5e0a236fb73->leave($__internal_dda4f13b30fefc1c7d26090364462a81bbfd37517cf39b71eacbc5e0a236fb73_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_d08e99ea702c9851ef43365c43f8bd8afb3ed26172fd612bd555845a4df02817 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d08e99ea702c9851ef43365c43f8bd8afb3ed26172fd612bd555845a4df02817->enter($__internal_d08e99ea702c9851ef43365c43f8bd8afb3ed26172fd612bd555845a4df02817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2039a45ecac048c309ec6a0a3086ac540ca6387b00a58a5e2d1e73f4360cf5c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2039a45ecac048c309ec6a0a3086ac540ca6387b00a58a5e2d1e73f4360cf5c1->enter($__internal_2039a45ecac048c309ec6a0a3086ac540ca6387b00a58a5e2d1e73f4360cf5c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
      <select name=\"form[course_module_id]\" id=\"modules\">
        <optgroup label=\"Modules\">
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
      </select>

      <select name=\"form[course_module_id]\" id=\"courses\">
        <optgroup label=\"Courses\">
          ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 56
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
        // line 58
        echo "        </optgroup>
      </select>

      <label for=\"form[session_start_date]\">Session Start Date</label>
      <input type=\"date\" name=\"form[session_start_date]\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "session_start_date", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "session_start_date", array())) : ("")), "html", null, true);
        echo "\">

      <label for=\"form[session_end_date]\">Session End Date</label>
      <input type=\"date\" name=\"form[session_end_date]\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "session_end_date", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "session_end_date", array())) : ("")), "html", null, true);
        echo "\">

      <button>";
        // line 67
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Create School Section") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_2039a45ecac048c309ec6a0a3086ac540ca6387b00a58a5e2d1e73f4360cf5c1->leave($__internal_2039a45ecac048c309ec6a0a3086ac540ca6387b00a58a5e2d1e73f4360cf5c1_prof);

        
        $__internal_d08e99ea702c9851ef43365c43f8bd8afb3ed26172fd612bd555845a4df02817->leave($__internal_d08e99ea702c9851ef43365c43f8bd8afb3ed26172fd612bd555845a4df02817_prof);

    }

    // line 74
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_f9c1e655fff61e56cc983998e318b9959022b6ee2aea4f06f07fa606d6d069c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9c1e655fff61e56cc983998e318b9959022b6ee2aea4f06f07fa606d6d069c4->enter($__internal_f9c1e655fff61e56cc983998e318b9959022b6ee2aea4f06f07fa606d6d069c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_4caf8ee31aa459f36a6c085d644414ed9fecf15e66e542627a446ec43e414408 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4caf8ee31aa459f36a6c085d644414ed9fecf15e66e542627a446ec43e414408->enter($__internal_4caf8ee31aa459f36a6c085d644414ed9fecf15e66e542627a446ec43e414408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 75
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
        
        $__internal_4caf8ee31aa459f36a6c085d644414ed9fecf15e66e542627a446ec43e414408->leave($__internal_4caf8ee31aa459f36a6c085d644414ed9fecf15e66e542627a446ec43e414408_prof);

        
        $__internal_f9c1e655fff61e56cc983998e318b9959022b6ee2aea4f06f07fa606d6d069c4->leave($__internal_f9c1e655fff61e56cc983998e318b9959022b6ee2aea4f06f07fa606d6d069c4_prof);

    }

    public function getTemplateName()
    {
        return ":session:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 75,  262 => 74,  246 => 67,  241 => 65,  235 => 62,  229 => 58,  216 => 56,  212 => 55,  205 => 50,  192 => 48,  188 => 47,  179 => 41,  175 => 40,  169 => 36,  150 => 34,  146 => 33,  140 => 29,  127 => 27,  123 => 26,  116 => 22,  110 => 19,  104 => 16,  100 => 15,  96 => 13,  87 => 12,  74 => 7,  65 => 6,  52 => 3,  43 => 2,  11 => 1,);
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
      <select name=\"form[course_module_id]\" id=\"modules\">
        <optgroup label=\"Modules\">
          {% for module in modules %}
            <option value=\"{{ module.id }}\" {{ ((form.course_module_id is defined and form.course_module_id == 'module' ? module.id : 0) == (form.course_module_id is defined ? form.course_module_id : '')) ? 'selected' : '' }}>{{ module.moduleName }}</option>
          {% endfor %}
        </optgroup>
      </select>

      <select name=\"form[course_module_id]\" id=\"courses\">
        <optgroup label=\"Courses\">
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
", ":session:form.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/session/form.html.twig");
    }
}
