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
        $__internal_ba71c179ade0051f80749f4cf9cf508ba16043b14605c258ab15b1ae9a579fc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba71c179ade0051f80749f4cf9cf508ba16043b14605c258ab15b1ae9a579fc2->enter($__internal_ba71c179ade0051f80749f4cf9cf508ba16043b14605c258ab15b1ae9a579fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":department:form.html.twig"));

        $__internal_66d55b52013c45ff9206d03596883646d5b756b28e47abb5b4ab525ccfb4acfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66d55b52013c45ff9206d03596883646d5b756b28e47abb5b4ab525ccfb4acfa->enter($__internal_66d55b52013c45ff9206d03596883646d5b756b28e47abb5b4ab525ccfb4acfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":department:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba71c179ade0051f80749f4cf9cf508ba16043b14605c258ab15b1ae9a579fc2->leave($__internal_ba71c179ade0051f80749f4cf9cf508ba16043b14605c258ab15b1ae9a579fc2_prof);

        
        $__internal_66d55b52013c45ff9206d03596883646d5b756b28e47abb5b4ab525ccfb4acfa->leave($__internal_66d55b52013c45ff9206d03596883646d5b756b28e47abb5b4ab525ccfb4acfa_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed3c9b96d2cbb51ed0074c73ade31ae38bc06204b28215300b2b4766e46e13ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed3c9b96d2cbb51ed0074c73ade31ae38bc06204b28215300b2b4766e46e13ab->enter($__internal_ed3c9b96d2cbb51ed0074c73ade31ae38bc06204b28215300b2b4766e46e13ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_12a723e1830fe5069a74a3d65520d8070019cf9d77e793f9eaba5c821ce4bd87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12a723e1830fe5069a74a3d65520d8070019cf9d77e793f9eaba5c821ce4bd87->enter($__internal_12a723e1830fe5069a74a3d65520d8070019cf9d77e793f9eaba5c821ce4bd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Department") : ("Edit Department"));
        echo "
";
        
        $__internal_12a723e1830fe5069a74a3d65520d8070019cf9d77e793f9eaba5c821ce4bd87->leave($__internal_12a723e1830fe5069a74a3d65520d8070019cf9d77e793f9eaba5c821ce4bd87_prof);

        
        $__internal_ed3c9b96d2cbb51ed0074c73ade31ae38bc06204b28215300b2b4766e46e13ab->leave($__internal_ed3c9b96d2cbb51ed0074c73ade31ae38bc06204b28215300b2b4766e46e13ab_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_ef39ccade87fa7ae8aa0fea07b666f24355961340d2f38f9261d7c6cb8820696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef39ccade87fa7ae8aa0fea07b666f24355961340d2f38f9261d7c6cb8820696->enter($__internal_ef39ccade87fa7ae8aa0fea07b666f24355961340d2f38f9261d7c6cb8820696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_a9ef8e8f90fcf244d438641c0bdbefa87ad6bf09d6024fd3b1d1ac2949b7662a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ef8e8f90fcf244d438641c0bdbefa87ad6bf09d6024fd3b1d1ac2949b7662a->enter($__internal_a9ef8e8f90fcf244d438641c0bdbefa87ad6bf09d6024fd3b1d1ac2949b7662a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_a9ef8e8f90fcf244d438641c0bdbefa87ad6bf09d6024fd3b1d1ac2949b7662a->leave($__internal_a9ef8e8f90fcf244d438641c0bdbefa87ad6bf09d6024fd3b1d1ac2949b7662a_prof);

        
        $__internal_ef39ccade87fa7ae8aa0fea07b666f24355961340d2f38f9261d7c6cb8820696->leave($__internal_ef39ccade87fa7ae8aa0fea07b666f24355961340d2f38f9261d7c6cb8820696_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfdd90caf024377049f78dc227abee2e7650e50cb74771bc7a40c50e2cb3796d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfdd90caf024377049f78dc227abee2e7650e50cb74771bc7a40c50e2cb3796d->enter($__internal_bfdd90caf024377049f78dc227abee2e7650e50cb74771bc7a40c50e2cb3796d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1c5b0119927b24e4bba91aad6ec56c1c7d441e6d07f43b065f0371e3f8201a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1c5b0119927b24e4bba91aad6ec56c1c7d441e6d07f43b065f0371e3f8201a1->enter($__internal_f1c5b0119927b24e4bba91aad6ec56c1c7d441e6d07f43b065f0371e3f8201a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Create Department") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_f1c5b0119927b24e4bba91aad6ec56c1c7d441e6d07f43b065f0371e3f8201a1->leave($__internal_f1c5b0119927b24e4bba91aad6ec56c1c7d441e6d07f43b065f0371e3f8201a1_prof);

        
        $__internal_bfdd90caf024377049f78dc227abee2e7650e50cb74771bc7a40c50e2cb3796d->leave($__internal_bfdd90caf024377049f78dc227abee2e7650e50cb74771bc7a40c50e2cb3796d_prof);

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
          <option value=\"{{ school.id }}\" {{ (school.id == (mySchool.id is defined ? mySchool.id : '')) ? 'selected' : '' }} >{{ school.schoolName }}</option>
        {% endfor %}
      </select>

      <button>{{ (mode == 'new') ? 'Create Department' : 'Save Changes' }}</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", ":department:form.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/department/form.html.twig");
    }
}
