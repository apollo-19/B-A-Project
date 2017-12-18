<?php

/* :semester:form.html.twig */
class __TwigTemplate_2360298406bc07bd8861d4efb6e1d3963317b4b4290ba3081d47c129d450fa1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":semester:form.html.twig", 1);
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
        $__internal_d01ea3baf1dec354ac2a1e27e867d2f5f9e490ba0e1bff42e5ec2af1b9471f99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d01ea3baf1dec354ac2a1e27e867d2f5f9e490ba0e1bff42e5ec2af1b9471f99->enter($__internal_d01ea3baf1dec354ac2a1e27e867d2f5f9e490ba0e1bff42e5ec2af1b9471f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":semester:form.html.twig"));

        $__internal_505715bbff9c633b96711fd0be0f23e3895d8ee51a76b62348664c99d00d1de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_505715bbff9c633b96711fd0be0f23e3895d8ee51a76b62348664c99d00d1de2->enter($__internal_505715bbff9c633b96711fd0be0f23e3895d8ee51a76b62348664c99d00d1de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":semester:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d01ea3baf1dec354ac2a1e27e867d2f5f9e490ba0e1bff42e5ec2af1b9471f99->leave($__internal_d01ea3baf1dec354ac2a1e27e867d2f5f9e490ba0e1bff42e5ec2af1b9471f99_prof);

        
        $__internal_505715bbff9c633b96711fd0be0f23e3895d8ee51a76b62348664c99d00d1de2->leave($__internal_505715bbff9c633b96711fd0be0f23e3895d8ee51a76b62348664c99d00d1de2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7932c5fee7303742afcbc76a00f4bd6028dab98e36db3449a3751339c914f691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7932c5fee7303742afcbc76a00f4bd6028dab98e36db3449a3751339c914f691->enter($__internal_7932c5fee7303742afcbc76a00f4bd6028dab98e36db3449a3751339c914f691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_97c38efcda7b272434faed8be0ebeef0bb2aed592f07c3d77a791db680dffa59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97c38efcda7b272434faed8be0ebeef0bb2aed592f07c3d77a791db680dffa59->enter($__internal_97c38efcda7b272434faed8be0ebeef0bb2aed592f07c3d77a791db680dffa59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Semester") : ("Edit Semester"));
        echo "
";
        
        $__internal_97c38efcda7b272434faed8be0ebeef0bb2aed592f07c3d77a791db680dffa59->leave($__internal_97c38efcda7b272434faed8be0ebeef0bb2aed592f07c3d77a791db680dffa59_prof);

        
        $__internal_7932c5fee7303742afcbc76a00f4bd6028dab98e36db3449a3751339c914f691->leave($__internal_7932c5fee7303742afcbc76a00f4bd6028dab98e36db3449a3751339c914f691_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_a578a74a18e8adf0e1d5223a24a8e38c9e873bdd140fbd56e362dd20dc71ed1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a578a74a18e8adf0e1d5223a24a8e38c9e873bdd140fbd56e362dd20dc71ed1d->enter($__internal_a578a74a18e8adf0e1d5223a24a8e38c9e873bdd140fbd56e362dd20dc71ed1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_8975c6066e69e853bf3468cfc941289d2b2548b2ab8094695b83d09a89589c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8975c6066e69e853bf3468cfc941289d2b2548b2ab8094695b83d09a89589c3f->enter($__internal_8975c6066e69e853bf3468cfc941289d2b2548b2ab8094695b83d09a89589c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_8975c6066e69e853bf3468cfc941289d2b2548b2ab8094695b83d09a89589c3f->leave($__internal_8975c6066e69e853bf3468cfc941289d2b2548b2ab8094695b83d09a89589c3f_prof);

        
        $__internal_a578a74a18e8adf0e1d5223a24a8e38c9e873bdd140fbd56e362dd20dc71ed1d->leave($__internal_a578a74a18e8adf0e1d5223a24a8e38c9e873bdd140fbd56e362dd20dc71ed1d_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf9cb32bdf687f1a6d1094cc77f13c1080e070ddb88396ffbca2e7fad0260f9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf9cb32bdf687f1a6d1094cc77f13c1080e070ddb88396ffbca2e7fad0260f9c->enter($__internal_cf9cb32bdf687f1a6d1094cc77f13c1080e070ddb88396ffbca2e7fad0260f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a3e96adc6b9ccf87d0102030c2b4d169b46375e37ecf20824210ef1d649b34b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3e96adc6b9ccf87d0102030c2b4d169b46375e37ecf20824210ef1d649b34b3->enter($__internal_a3e96adc6b9ccf87d0102030c2b4d169b46375e37ecf20824210ef1d649b34b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Semester") : ("Edit Semester"));
        echo "</h1>
      <h2>";
        // line 16
        echo twig_escape_filter($this->env, ((array_key_exists("result_message", $context)) ? (($context["result_message"] ?? $this->getContext($context, "result_message"))) : ("")), "html", null, true);
        echo "</h2>

      <label for=\"form[semester]\">Semester</label>
      <input type=\"text\" name=\"form[semester]\" placeholder=\"IM101\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "semester", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "semester", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[year]\">Year</label>
      <input type=\"text\" name=\"form[year]\" placeholder=\"Introduction to Internal Medicine\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "year", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[semester_curriculum]\">Semester Curriculum</label>
      <select name=\"form[semester_curriculum]\">
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["curriculums"] ?? $this->getContext($context, "curriculums")));
        foreach ($context['_seq'] as $context["_key"] => $context["curriculum"]) {
            // line 27
            echo "          ";
            if (($this->getAttribute($context["curriculum"], "curriculumType", array()) == "semester")) {
                // line 28
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["curriculum"], "id", array()), "html", null, true);
                echo "\" ";
                echo ((($this->getAttribute(($context["form"] ?? null), "semester_curriculum", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "semester_curriculum", array()) == $this->getAttribute($context["curriculum"], "id", array())))) ? ("selected") : (""));
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["curriculum"], "curriculumName", array()), "html", null, true);
                echo "</option>
          ";
            }
            // line 30
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curriculum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "      </select>

      <button>";
        // line 33
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Create Semester") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_a3e96adc6b9ccf87d0102030c2b4d169b46375e37ecf20824210ef1d649b34b3->leave($__internal_a3e96adc6b9ccf87d0102030c2b4d169b46375e37ecf20824210ef1d649b34b3_prof);

        
        $__internal_cf9cb32bdf687f1a6d1094cc77f13c1080e070ddb88396ffbca2e7fad0260f9c->leave($__internal_cf9cb32bdf687f1a6d1094cc77f13c1080e070ddb88396ffbca2e7fad0260f9c_prof);

    }

    public function getTemplateName()
    {
        return ":semester:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 33,  145 => 31,  139 => 30,  129 => 28,  126 => 27,  122 => 26,  115 => 22,  109 => 19,  103 => 16,  99 => 15,  95 => 13,  86 => 12,  73 => 7,  64 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  {{ (mode == 'new') ? 'New Semester' : 'Edit Semester' }}
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">{{ (mode == 'new') ? 'New Semester' : 'Edit Semester' }}</h1>
      <h2>{{ result_message is defined ? result_message : '' }}</h2>

      <label for=\"form[semester]\">Semester</label>
      <input type=\"text\" name=\"form[semester]\" placeholder=\"IM101\" value=\"{{ form.semester is defined ? form.semester : '' }}\" required />

      <label for=\"form[year]\">Year</label>
      <input type=\"text\" name=\"form[year]\" placeholder=\"Introduction to Internal Medicine\" value=\"{{ form.year is defined ? form.year : '' }}\" required />

      <label for=\"form[semester_curriculum]\">Semester Curriculum</label>
      <select name=\"form[semester_curriculum]\">
        {% for curriculum in curriculums %}
          {% if (curriculum.curriculumType == 'semester') %}
            <option value=\"{{ curriculum.id }}\" {{ (form.semester_curriculum is defined and form.semester_curriculum == curriculum.id) ? 'selected' : '' }}>{{ curriculum.curriculumName }}</option>
          {% endif %}
        {% endfor %}
      </select>

      <button>{{ (mode == 'new') ? 'Create Semester' : 'Save Changes' }}</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", ":semester:form.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/semester/form.html.twig");
    }
}
