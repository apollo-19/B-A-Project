<?php

/* curriculum/form.html.twig */
class __TwigTemplate_beb68fc8fbf8b3bb4348c2d81ca3566d1d038984b2581dad77b0fa40176a0892 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "curriculum/form.html.twig", 1);
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
        $__internal_94aaf6d520e96578e9a5419670bebd36226555d06c7972441ae90435186e1316 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94aaf6d520e96578e9a5419670bebd36226555d06c7972441ae90435186e1316->enter($__internal_94aaf6d520e96578e9a5419670bebd36226555d06c7972441ae90435186e1316_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "curriculum/form.html.twig"));

        $__internal_5fc331c5e0d0ca0c0b33fe4604999b5579eca744a6bb07313174ff0eae8ddf1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fc331c5e0d0ca0c0b33fe4604999b5579eca744a6bb07313174ff0eae8ddf1a->enter($__internal_5fc331c5e0d0ca0c0b33fe4604999b5579eca744a6bb07313174ff0eae8ddf1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "curriculum/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94aaf6d520e96578e9a5419670bebd36226555d06c7972441ae90435186e1316->leave($__internal_94aaf6d520e96578e9a5419670bebd36226555d06c7972441ae90435186e1316_prof);

        
        $__internal_5fc331c5e0d0ca0c0b33fe4604999b5579eca744a6bb07313174ff0eae8ddf1a->leave($__internal_5fc331c5e0d0ca0c0b33fe4604999b5579eca744a6bb07313174ff0eae8ddf1a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_94893c202721ac66b82ea44a6f641f0950f5e5d5006c54f97fe3f7bba89efa6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94893c202721ac66b82ea44a6f641f0950f5e5d5006c54f97fe3f7bba89efa6f->enter($__internal_94893c202721ac66b82ea44a6f641f0950f5e5d5006c54f97fe3f7bba89efa6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_644a7c6d14c90beddb17c88eba1c60444f501943249fa587a331ee951d6c194e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_644a7c6d14c90beddb17c88eba1c60444f501943249fa587a331ee951d6c194e->enter($__internal_644a7c6d14c90beddb17c88eba1c60444f501943249fa587a331ee951d6c194e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Curriculum") : ("Edit Curriculum"));
        echo "
";
        
        $__internal_644a7c6d14c90beddb17c88eba1c60444f501943249fa587a331ee951d6c194e->leave($__internal_644a7c6d14c90beddb17c88eba1c60444f501943249fa587a331ee951d6c194e_prof);

        
        $__internal_94893c202721ac66b82ea44a6f641f0950f5e5d5006c54f97fe3f7bba89efa6f->leave($__internal_94893c202721ac66b82ea44a6f641f0950f5e5d5006c54f97fe3f7bba89efa6f_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_918db83061ed1a7ae96a16b5d5b7dc919d08cc7ebca5eb1c549251e92966bbb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_918db83061ed1a7ae96a16b5d5b7dc919d08cc7ebca5eb1c549251e92966bbb4->enter($__internal_918db83061ed1a7ae96a16b5d5b7dc919d08cc7ebca5eb1c549251e92966bbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_cf7972fb2149efb1818036fb8fbb484cca49655c03e6f194f576e2e90d54a208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf7972fb2149efb1818036fb8fbb484cca49655c03e6f194f576e2e90d54a208->enter($__internal_cf7972fb2149efb1818036fb8fbb484cca49655c03e6f194f576e2e90d54a208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_cf7972fb2149efb1818036fb8fbb484cca49655c03e6f194f576e2e90d54a208->leave($__internal_cf7972fb2149efb1818036fb8fbb484cca49655c03e6f194f576e2e90d54a208_prof);

        
        $__internal_918db83061ed1a7ae96a16b5d5b7dc919d08cc7ebca5eb1c549251e92966bbb4->leave($__internal_918db83061ed1a7ae96a16b5d5b7dc919d08cc7ebca5eb1c549251e92966bbb4_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ea5548c2c5d9a642ae1e9ff0e7fa31b913f179f8f218e15f2be926f6e77ffca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ea5548c2c5d9a642ae1e9ff0e7fa31b913f179f8f218e15f2be926f6e77ffca->enter($__internal_3ea5548c2c5d9a642ae1e9ff0e7fa31b913f179f8f218e15f2be926f6e77ffca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d436cdced6a286d90f17f8487e3544e0e1659453ac18cc710047e7b21a529c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d436cdced6a286d90f17f8487e3544e0e1659453ac18cc710047e7b21a529c19->enter($__internal_d436cdced6a286d90f17f8487e3544e0e1659453ac18cc710047e7b21a529c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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

      <button>";
        // line 37
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Create Curriculum") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_d436cdced6a286d90f17f8487e3544e0e1659453ac18cc710047e7b21a529c19->leave($__internal_d436cdced6a286d90f17f8487e3544e0e1659453ac18cc710047e7b21a529c19_prof);

        
        $__internal_3ea5548c2c5d9a642ae1e9ff0e7fa31b913f179f8f218e15f2be926f6e77ffca->leave($__internal_3ea5548c2c5d9a642ae1e9ff0e7fa31b913f179f8f218e15f2be926f6e77ffca_prof);

    }

    public function getTemplateName()
    {
        return "curriculum/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 37,  151 => 35,  138 => 33,  134 => 32,  126 => 27,  122 => 26,  115 => 22,  109 => 19,  103 => 16,  99 => 15,  95 => 13,  86 => 12,  73 => 7,  64 => 6,  51 => 3,  42 => 2,  11 => 1,);
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

      <button>{{ (mode == 'new') ? 'Create Curriculum' : 'Save Changes' }}</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", "curriculum/form.html.twig", "/home/apollo-19/github/B-A-Project/app/Resources/views/curriculum/form.html.twig");
    }
}
