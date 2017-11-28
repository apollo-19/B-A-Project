<?php

/* prerequisite/form.html.twig */
class __TwigTemplate_2248973630f818502cabe467865dd3322530d49377260254316ab6dbf5f61926 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "prerequisite/form.html.twig", 1);
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
        $__internal_bead320e0468298c846b733915f3e4e285a4448bcc2b57b8966661e4b51eb776 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bead320e0468298c846b733915f3e4e285a4448bcc2b57b8966661e4b51eb776->enter($__internal_bead320e0468298c846b733915f3e4e285a4448bcc2b57b8966661e4b51eb776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "prerequisite/form.html.twig"));

        $__internal_2c3dd7681d337ecb07f51d1cfe69d53ed03f7b0f472331ea58c8dbc7c876fd20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c3dd7681d337ecb07f51d1cfe69d53ed03f7b0f472331ea58c8dbc7c876fd20->enter($__internal_2c3dd7681d337ecb07f51d1cfe69d53ed03f7b0f472331ea58c8dbc7c876fd20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "prerequisite/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bead320e0468298c846b733915f3e4e285a4448bcc2b57b8966661e4b51eb776->leave($__internal_bead320e0468298c846b733915f3e4e285a4448bcc2b57b8966661e4b51eb776_prof);

        
        $__internal_2c3dd7681d337ecb07f51d1cfe69d53ed03f7b0f472331ea58c8dbc7c876fd20->leave($__internal_2c3dd7681d337ecb07f51d1cfe69d53ed03f7b0f472331ea58c8dbc7c876fd20_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_a312370a446cbf1523ae5985f27899a09e903c89ca31de66225d794c9986fd14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a312370a446cbf1523ae5985f27899a09e903c89ca31de66225d794c9986fd14->enter($__internal_a312370a446cbf1523ae5985f27899a09e903c89ca31de66225d794c9986fd14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_76685f1119a4cc77a968fdab4403cd270668dbc06c600abb1d7d1b4fbe20d8a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76685f1119a4cc77a968fdab4403cd270668dbc06c600abb1d7d1b4fbe20d8a8->enter($__internal_76685f1119a4cc77a968fdab4403cd270668dbc06c600abb1d7d1b4fbe20d8a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Prerequisite") : ("Edit Prerequisite"));
        echo "
";
        
        $__internal_76685f1119a4cc77a968fdab4403cd270668dbc06c600abb1d7d1b4fbe20d8a8->leave($__internal_76685f1119a4cc77a968fdab4403cd270668dbc06c600abb1d7d1b4fbe20d8a8_prof);

        
        $__internal_a312370a446cbf1523ae5985f27899a09e903c89ca31de66225d794c9986fd14->leave($__internal_a312370a446cbf1523ae5985f27899a09e903c89ca31de66225d794c9986fd14_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_0143dadff87be4dde0be707e3b4bc2c0ce9c40e5783b833d9fd5cff5c5d06766 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0143dadff87be4dde0be707e3b4bc2c0ce9c40e5783b833d9fd5cff5c5d06766->enter($__internal_0143dadff87be4dde0be707e3b4bc2c0ce9c40e5783b833d9fd5cff5c5d06766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_0eee6ff18fcd96ae6a196c734c5ba3e78565d27ff3ac037d6f56db4f719d2d32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eee6ff18fcd96ae6a196c734c5ba3e78565d27ff3ac037d6f56db4f719d2d32->enter($__internal_0eee6ff18fcd96ae6a196c734c5ba3e78565d27ff3ac037d6f56db4f719d2d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_0eee6ff18fcd96ae6a196c734c5ba3e78565d27ff3ac037d6f56db4f719d2d32->leave($__internal_0eee6ff18fcd96ae6a196c734c5ba3e78565d27ff3ac037d6f56db4f719d2d32_prof);

        
        $__internal_0143dadff87be4dde0be707e3b4bc2c0ce9c40e5783b833d9fd5cff5c5d06766->leave($__internal_0143dadff87be4dde0be707e3b4bc2c0ce9c40e5783b833d9fd5cff5c5d06766_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_c57530cae713c7529544486bee9de0d30c764b6becd81e055329020a262698e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c57530cae713c7529544486bee9de0d30c764b6becd81e055329020a262698e3->enter($__internal_c57530cae713c7529544486bee9de0d30c764b6becd81e055329020a262698e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2d9a241a31d7e17893203132e9777945ec84d3e8a375483bd3f3d94ee051cda4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d9a241a31d7e17893203132e9777945ec84d3e8a375483bd3f3d94ee051cda4->enter($__internal_2d9a241a31d7e17893203132e9777945ec84d3e8a375483bd3f3d94ee051cda4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo ((((($this->getAttribute(($context["myCourse"] ?? null), "course_module_id", array(), "any", true, true)) ? ($this->getAttribute(($context["myCourse"] ?? $this->getContext($context, "myCourse")), "course_module_id", array())) : ("")) == "course")) ? ("selected") : (""));
        echo ">Course</option>
        <option value=\"module\" ";
        // line 21
        echo ((((($this->getAttribute(($context["myCourse"] ?? null), "course_module_id", array(), "any", true, true)) ? ($this->getAttribute(($context["myCourse"] ?? $this->getContext($context, "myCourse")), "course_module_id", array())) : ("")) == "module")) ? ("selected") : (""));
        echo ">Module</option>
      </select>

      <label for=\"form[course_module_id]\">Course/Module Name</label>
      <select name=\"form[course_module_id]\" id=\"courseModuleId\">
        <optgroup label=\"Courses\" id=\"courses1\">
          ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 28
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\" ";
            echo ((($this->getAttribute($context["course"], "id", array()) == (($this->getAttribute(($context["myCourse"] ?? null), "id", array(), "any", true, true)) ? ($this->getAttribute(($context["myCourse"] ?? $this->getContext($context, "myCourse")), "id", array())) : ("")))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "courseName", array()), "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "        </optgroup>

        <optgroup label=\"Modules\" id=\"modules1\">
          ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? $this->getContext($context, "modules")));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 34
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
            echo "\" ";
            echo ((($this->getAttribute($context["module"], "id", array()) == (($this->getAttribute(($context["myModule"] ?? null), "id", array(), "any", true, true)) ? ($this->getAttribute(($context["myModule"] ?? $this->getContext($context, "myModule")), "id", array())) : ("")))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "moduleName", array()), "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "        </optgroup>
      </select>

      <label for=\"form[prerequisite_type]\">Prerequisite Type</label>
      <select name=\"form[prerequisite_type]\" id=\"prerequisiteType\">
        <option value=\"course\" ";
        // line 41
        echo ((((($this->getAttribute(($context["myCourse"] ?? null), "course_module_id", array(), "any", true, true)) ? ($this->getAttribute(($context["myCourse"] ?? $this->getContext($context, "myCourse")), "course_module_id", array())) : ("")) == "course")) ? ("selected") : (""));
        echo ">Course</option>
        <option value=\"module\" ";
        // line 42
        echo ((((($this->getAttribute(($context["myCourse"] ?? null), "course_module_id", array(), "any", true, true)) ? ($this->getAttribute(($context["myCourse"] ?? $this->getContext($context, "myCourse")), "course_module_id", array())) : ("")) == "module")) ? ("selected") : (""));
        echo ">Module</option>
      </select>

      <label for=\"form[prerequisite_id]\">Prerequisite</label>
      <select name=\"form[prerequisite_id]\" id=\"prerequisiteId\">
        <optgroup label=\"Courses\" id=\"courses2\">
          ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 49
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\" ";
            echo ((($this->getAttribute($context["course"], "id", array()) == (($this->getAttribute(($context["myCourse"] ?? null), "id", array(), "any", true, true)) ? ($this->getAttribute(($context["myCourse"] ?? $this->getContext($context, "myCourse")), "id", array())) : ("")))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "courseName", array()), "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </optgroup>

        <optgroup label=\"Modules\" id=\"modules2\">
          ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? $this->getContext($context, "modules")));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 55
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "id", array()), "html", null, true);
            echo "\" ";
            echo ((($this->getAttribute($context["module"], "id", array()) == (($this->getAttribute(($context["myModule"] ?? null), "id", array(), "any", true, true)) ? ($this->getAttribute(($context["myModule"] ?? $this->getContext($context, "myModule")), "id", array())) : ("")))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "moduleName", array()), "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </optgroup>
      </select>

      <button>";
        // line 60
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Create Prerequisite") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_2d9a241a31d7e17893203132e9777945ec84d3e8a375483bd3f3d94ee051cda4->leave($__internal_2d9a241a31d7e17893203132e9777945ec84d3e8a375483bd3f3d94ee051cda4_prof);

        
        $__internal_c57530cae713c7529544486bee9de0d30c764b6becd81e055329020a262698e3->leave($__internal_c57530cae713c7529544486bee9de0d30c764b6becd81e055329020a262698e3_prof);

    }

    // line 67
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_0964ab7cb65fbe0ea9e3e053fb820ccad8aab89f506107eb028404c75d746e91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0964ab7cb65fbe0ea9e3e053fb820ccad8aab89f506107eb028404c75d746e91->enter($__internal_0964ab7cb65fbe0ea9e3e053fb820ccad8aab89f506107eb028404c75d746e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_ca0cca42bad8bb8c9734c8ef8d74a2c110a67ee1d80234a7ec6ba2794e3c5e68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca0cca42bad8bb8c9734c8ef8d74a2c110a67ee1d80234a7ec6ba2794e3c5e68->enter($__internal_ca0cca42bad8bb8c9734c8ef8d74a2c110a67ee1d80234a7ec6ba2794e3c5e68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 68
        echo "  <script type=\"text/javascript\">
    function TypeDiff() {
      var courseModuleType = \$('#courseModuleType').val();
      (courseModuleType == 'course') ? \$('#module1').hide() : \$('#course1').hide();

      \$('#' + courseModuleType + 's').show();
    }

    \$(document).ready(function(){
      \$('#course1').hide();
      //TypeDiff();
      \$('#courseModuleType').on(\"change\", function() {
        TypeDiff();
      });
    });
  </script>
";
        
        $__internal_ca0cca42bad8bb8c9734c8ef8d74a2c110a67ee1d80234a7ec6ba2794e3c5e68->leave($__internal_ca0cca42bad8bb8c9734c8ef8d74a2c110a67ee1d80234a7ec6ba2794e3c5e68_prof);

        
        $__internal_0964ab7cb65fbe0ea9e3e053fb820ccad8aab89f506107eb028404c75d746e91->leave($__internal_0964ab7cb65fbe0ea9e3e053fb820ccad8aab89f506107eb028404c75d746e91_prof);

    }

    public function getTemplateName()
    {
        return "prerequisite/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 68,  243 => 67,  227 => 60,  222 => 57,  209 => 55,  205 => 54,  200 => 51,  187 => 49,  183 => 48,  174 => 42,  170 => 41,  163 => 36,  150 => 34,  146 => 33,  141 => 30,  128 => 28,  124 => 27,  115 => 21,  111 => 20,  104 => 16,  100 => 15,  96 => 13,  87 => 12,  74 => 7,  65 => 6,  52 => 3,  43 => 2,  11 => 1,);
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
        <option value=\"course\" {{ ((myCourse.course_module_id is defined ? myCourse.course_module_id : '') == 'course') ? 'selected' : '' }}>Course</option>
        <option value=\"module\" {{ ((myCourse.course_module_id is defined ? myCourse.course_module_id : '') == 'module') ? 'selected' : '' }}>Module</option>
      </select>

      <label for=\"form[course_module_id]\">Course/Module Name</label>
      <select name=\"form[course_module_id]\" id=\"courseModuleId\">
        <optgroup label=\"Courses\" id=\"courses1\">
          {% for course in courses %}
            <option value=\"{{ course.id }}\" {{ (course.id == (myCourse.id is defined ? myCourse.id : '')) ? 'selected' : '' }}>{{ course.courseName }}</option>
          {% endfor %}
        </optgroup>

        <optgroup label=\"Modules\" id=\"modules1\">
          {% for module in modules %}
            <option value=\"{{ module.id }}\" {{ (module.id == (myModule.id is defined ? myModule.id : '')) ? 'selected' : '' }}>{{ module.moduleName }}</option>
          {% endfor %}
        </optgroup>
      </select>

      <label for=\"form[prerequisite_type]\">Prerequisite Type</label>
      <select name=\"form[prerequisite_type]\" id=\"prerequisiteType\">
        <option value=\"course\" {{ ((myCourse.course_module_id is defined ? myCourse.course_module_id : '') == 'course') ? 'selected' : '' }}>Course</option>
        <option value=\"module\" {{ ((myCourse.course_module_id is defined ? myCourse.course_module_id : '') == 'module') ? 'selected' : '' }}>Module</option>
      </select>

      <label for=\"form[prerequisite_id]\">Prerequisite</label>
      <select name=\"form[prerequisite_id]\" id=\"prerequisiteId\">
        <optgroup label=\"Courses\" id=\"courses2\">
          {% for course in courses %}
            <option value=\"{{ course.id }}\" {{ (course.id == (myCourse.id is defined ? myCourse.id : '')) ? 'selected' : '' }}>{{ course.courseName }}</option>
          {% endfor %}
        </optgroup>

        <optgroup label=\"Modules\" id=\"modules2\">
          {% for module in modules %}
            <option value=\"{{ module.id }}\" {{ (module.id == (myModule.id is defined ? myModule.id : '')) ? 'selected' : '' }}>{{ module.moduleName }}</option>
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
    function TypeDiff() {
      var courseModuleType = \$('#courseModuleType').val();
      (courseModuleType == 'course') ? \$('#module1').hide() : \$('#course1').hide();

      \$('#' + courseModuleType + 's').show();
    }

    \$(document).ready(function(){
      \$('#course1').hide();
      //TypeDiff();
      \$('#courseModuleType').on(\"change\", function() {
        TypeDiff();
      });
    });
  </script>
{% endblock %}
", "prerequisite/form.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/prerequisite/form.html.twig");
    }
}
