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
        $__internal_95b093eb73ab76a27259cc5a8abf30bd486c13f6f4a11e53e1f7db2525d1a679 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95b093eb73ab76a27259cc5a8abf30bd486c13f6f4a11e53e1f7db2525d1a679->enter($__internal_95b093eb73ab76a27259cc5a8abf30bd486c13f6f4a11e53e1f7db2525d1a679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":curriculum:form.html.twig"));

        $__internal_c97c79c2052fa8e76a46ff0a00dfcdb2ccb3741aa80fe6081212ed1556e726d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c97c79c2052fa8e76a46ff0a00dfcdb2ccb3741aa80fe6081212ed1556e726d4->enter($__internal_c97c79c2052fa8e76a46ff0a00dfcdb2ccb3741aa80fe6081212ed1556e726d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":curriculum:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95b093eb73ab76a27259cc5a8abf30bd486c13f6f4a11e53e1f7db2525d1a679->leave($__internal_95b093eb73ab76a27259cc5a8abf30bd486c13f6f4a11e53e1f7db2525d1a679_prof);

        
        $__internal_c97c79c2052fa8e76a46ff0a00dfcdb2ccb3741aa80fe6081212ed1556e726d4->leave($__internal_c97c79c2052fa8e76a46ff0a00dfcdb2ccb3741aa80fe6081212ed1556e726d4_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_273510e95aa04a1a0245d4ee59e67ee70faa3a613cf2f90fcc7a90b8da784ac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_273510e95aa04a1a0245d4ee59e67ee70faa3a613cf2f90fcc7a90b8da784ac2->enter($__internal_273510e95aa04a1a0245d4ee59e67ee70faa3a613cf2f90fcc7a90b8da784ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_69626948fba7c6098a94d028a5315c069a96c2f3bcf917c63ecc245c1febdc65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69626948fba7c6098a94d028a5315c069a96c2f3bcf917c63ecc245c1febdc65->enter($__internal_69626948fba7c6098a94d028a5315c069a96c2f3bcf917c63ecc245c1febdc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Curriculum") : ("Edit Curriculum"));
        echo "
";
        
        $__internal_69626948fba7c6098a94d028a5315c069a96c2f3bcf917c63ecc245c1febdc65->leave($__internal_69626948fba7c6098a94d028a5315c069a96c2f3bcf917c63ecc245c1febdc65_prof);

        
        $__internal_273510e95aa04a1a0245d4ee59e67ee70faa3a613cf2f90fcc7a90b8da784ac2->leave($__internal_273510e95aa04a1a0245d4ee59e67ee70faa3a613cf2f90fcc7a90b8da784ac2_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_4b94bc209379ee637661bef5cfa6befd32430497f2c74bf8799b45f61ea11f02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b94bc209379ee637661bef5cfa6befd32430497f2c74bf8799b45f61ea11f02->enter($__internal_4b94bc209379ee637661bef5cfa6befd32430497f2c74bf8799b45f61ea11f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_b3c312db63f534b878a307188fb2104c00cfcef01e523b0525449bbbf4802d35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3c312db63f534b878a307188fb2104c00cfcef01e523b0525449bbbf4802d35->enter($__internal_b3c312db63f534b878a307188fb2104c00cfcef01e523b0525449bbbf4802d35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_b3c312db63f534b878a307188fb2104c00cfcef01e523b0525449bbbf4802d35->leave($__internal_b3c312db63f534b878a307188fb2104c00cfcef01e523b0525449bbbf4802d35_prof);

        
        $__internal_4b94bc209379ee637661bef5cfa6befd32430497f2c74bf8799b45f61ea11f02->leave($__internal_4b94bc209379ee637661bef5cfa6befd32430497f2c74bf8799b45f61ea11f02_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef5de48225988b8507be7606d43ccf2b601349aba3d59cf308c73bac289682f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef5de48225988b8507be7606d43ccf2b601349aba3d59cf308c73bac289682f2->enter($__internal_ef5de48225988b8507be7606d43ccf2b601349aba3d59cf308c73bac289682f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7dff3a1a02aac60aaa95b676168bbbb485e07f1407cf35179015e6cf72a7c239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dff3a1a02aac60aaa95b676168bbbb485e07f1407cf35179015e6cf72a7c239->enter($__internal_7dff3a1a02aac60aaa95b676168bbbb485e07f1407cf35179015e6cf72a7c239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

      <label for=\"form[curriculum_school]\">Curriculum School</label>
      <select name=\"form[curriculum_school]\">
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["schools"] ?? $this->getContext($context, "schools")));
        foreach ($context['_seq'] as $context["_key"] => $context["school"]) {
            // line 27
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "id", array()), "html", null, true);
            echo "\" ";
            echo ((($this->getAttribute($context["school"], "id", array()) == (($this->getAttribute(($context["mySchool"] ?? null), "id", array(), "any", true, true)) ? ($this->getAttribute(($context["mySchool"] ?? $this->getContext($context, "mySchool")), "id", array())) : ("")))) ? ("selected") : (""));
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
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Create Curriculum") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_7dff3a1a02aac60aaa95b676168bbbb485e07f1407cf35179015e6cf72a7c239->leave($__internal_7dff3a1a02aac60aaa95b676168bbbb485e07f1407cf35179015e6cf72a7c239_prof);

        
        $__internal_ef5de48225988b8507be7606d43ccf2b601349aba3d59cf308c73bac289682f2->leave($__internal_ef5de48225988b8507be7606d43ccf2b601349aba3d59cf308c73bac289682f2_prof);

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

      <label for=\"form[curriculum_school]\">Curriculum School</label>
      <select name=\"form[curriculum_school]\">
        {% for school in schools %}
          <option value=\"{{ school.id }}\" {{ (school.id == (mySchool.id is defined ? mySchool.id : '')) ? 'selected' : '' }} >{{ school.schoolName }}</option>
        {% endfor %}
      </select>

      <button>{{ (mode == 'new') ? 'Create Curriculum' : 'Save Changes' }}</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", ":curriculum:form.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/curriculum/form.html.twig");
    }
}
