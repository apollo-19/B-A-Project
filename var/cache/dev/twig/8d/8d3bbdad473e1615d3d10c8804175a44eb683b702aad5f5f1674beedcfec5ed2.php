<?php

/* :grade:form.html.twig */
class __TwigTemplate_fabcfd07de3442426b2dcb94c34cffd68d08465823e06452aa28a89772ee79c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":grade:form.html.twig", 1);
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
        $__internal_4c9583705dd80e277a7dde68e457c9e99edce4f49f82926e755ce863ed9bdb69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c9583705dd80e277a7dde68e457c9e99edce4f49f82926e755ce863ed9bdb69->enter($__internal_4c9583705dd80e277a7dde68e457c9e99edce4f49f82926e755ce863ed9bdb69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":grade:form.html.twig"));

        $__internal_3236d87fd9735b10793d44f946b38b60bc0ca14b63a2d55eaedb7ee916b50cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3236d87fd9735b10793d44f946b38b60bc0ca14b63a2d55eaedb7ee916b50cc3->enter($__internal_3236d87fd9735b10793d44f946b38b60bc0ca14b63a2d55eaedb7ee916b50cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":grade:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c9583705dd80e277a7dde68e457c9e99edce4f49f82926e755ce863ed9bdb69->leave($__internal_4c9583705dd80e277a7dde68e457c9e99edce4f49f82926e755ce863ed9bdb69_prof);

        
        $__internal_3236d87fd9735b10793d44f946b38b60bc0ca14b63a2d55eaedb7ee916b50cc3->leave($__internal_3236d87fd9735b10793d44f946b38b60bc0ca14b63a2d55eaedb7ee916b50cc3_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_cecc2a57e693ccb2fdc3c8b819c9f0972474a531445be675bd05406426333b38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cecc2a57e693ccb2fdc3c8b819c9f0972474a531445be675bd05406426333b38->enter($__internal_cecc2a57e693ccb2fdc3c8b819c9f0972474a531445be675bd05406426333b38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_87dec246d66f553d099596a7778d5288e836a2675bc218c162ac2db0fb4fbe24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87dec246d66f553d099596a7778d5288e836a2675bc218c162ac2db0fb4fbe24->enter($__internal_87dec246d66f553d099596a7778d5288e836a2675bc218c162ac2db0fb4fbe24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Grade") : ("Edit Grade"));
        echo "
";
        
        $__internal_87dec246d66f553d099596a7778d5288e836a2675bc218c162ac2db0fb4fbe24->leave($__internal_87dec246d66f553d099596a7778d5288e836a2675bc218c162ac2db0fb4fbe24_prof);

        
        $__internal_cecc2a57e693ccb2fdc3c8b819c9f0972474a531445be675bd05406426333b38->leave($__internal_cecc2a57e693ccb2fdc3c8b819c9f0972474a531445be675bd05406426333b38_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_41ed5305c630064e8c0f560cba1866268970e8fe4149f64d9c0ac102809a55d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41ed5305c630064e8c0f560cba1866268970e8fe4149f64d9c0ac102809a55d6->enter($__internal_41ed5305c630064e8c0f560cba1866268970e8fe4149f64d9c0ac102809a55d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_75049601530ac22627da55f31c869ade6af76ca16d873efaf1ffbca54fa26e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75049601530ac22627da55f31c869ade6af76ca16d873efaf1ffbca54fa26e6c->enter($__internal_75049601530ac22627da55f31c869ade6af76ca16d873efaf1ffbca54fa26e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_75049601530ac22627da55f31c869ade6af76ca16d873efaf1ffbca54fa26e6c->leave($__internal_75049601530ac22627da55f31c869ade6af76ca16d873efaf1ffbca54fa26e6c_prof);

        
        $__internal_41ed5305c630064e8c0f560cba1866268970e8fe4149f64d9c0ac102809a55d6->leave($__internal_41ed5305c630064e8c0f560cba1866268970e8fe4149f64d9c0ac102809a55d6_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ac79b6fc8005cb52b900b751a77dc0bce5ed57bcd3461038c8118ef4c28ebd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ac79b6fc8005cb52b900b751a77dc0bce5ed57bcd3461038c8118ef4c28ebd9->enter($__internal_7ac79b6fc8005cb52b900b751a77dc0bce5ed57bcd3461038c8118ef4c28ebd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_621462123e6e1d1a2c055d83a6db9d9c958ca9da8905c21729e6120b00e987ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_621462123e6e1d1a2c055d83a6db9d9c958ca9da8905c21729e6120b00e987ba->enter($__internal_621462123e6e1d1a2c055d83a6db9d9c958ca9da8905c21729e6120b00e987ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Grade") : ("Edit Grade"));
        echo "</h1>
      <h2>";
        // line 16
        echo twig_escape_filter($this->env, ((array_key_exists("result_message", $context)) ? (($context["result_message"] ?? $this->getContext($context, "result_message"))) : ("")), "html", null, true);
        echo "</h2>

      <label for=\"form[start_point]\">Starting Point</label>
      <input type=\"text\" name=\"form[start_point]\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "start_point", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "start_point", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[end_point]\">Ending Point</label>
      <input type=\"text\" name=\"form[end_point]\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "end_point", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "end_point", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[grade]\">Grade</label>
      <input type=\"text\" name=\"form[grade]\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "grade", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "grade", array())) : ("")), "html", null, true);
        echo "\" required />


      <label for=\"form[grade_system]\">Grade System</label>
      <select name=\"form[grade_system]\">
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["grade_systems"] ?? $this->getContext($context, "grade_systems")));
        foreach ($context['_seq'] as $context["_key"] => $context["grade_system"]) {
            // line 31
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["grade_system"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (((twig_upper_filter($this->env, $this->getAttribute($context["grade_system"], "gradeSystemCode", array())) . " (") . $this->getAttribute($context["grade_system"], "gradeSystemName", array())) . ")"), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grade_system'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "      </select>

      <button>";
        // line 35
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Create Grade") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_621462123e6e1d1a2c055d83a6db9d9c958ca9da8905c21729e6120b00e987ba->leave($__internal_621462123e6e1d1a2c055d83a6db9d9c958ca9da8905c21729e6120b00e987ba_prof);

        
        $__internal_7ac79b6fc8005cb52b900b751a77dc0bce5ed57bcd3461038c8118ef4c28ebd9->leave($__internal_7ac79b6fc8005cb52b900b751a77dc0bce5ed57bcd3461038c8118ef4c28ebd9_prof);

    }

    public function getTemplateName()
    {
        return ":grade:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 35,  144 => 33,  133 => 31,  129 => 30,  121 => 25,  115 => 22,  109 => 19,  103 => 16,  99 => 15,  95 => 13,  86 => 12,  73 => 7,  64 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  {{ (mode == 'new') ? 'New Grade' : 'Edit Grade' }}
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">{{ (mode == 'new') ? 'New Grade' : 'Edit Grade' }}</h1>
      <h2>{{ result_message is defined ? result_message : '' }}</h2>

      <label for=\"form[start_point]\">Starting Point</label>
      <input type=\"text\" name=\"form[start_point]\" value=\"{{ form.start_point is defined ? form.start_point : '' }}\" required />

      <label for=\"form[end_point]\">Ending Point</label>
      <input type=\"text\" name=\"form[end_point]\" value=\"{{ form.end_point is defined ? form.end_point : '' }}\" required />

      <label for=\"form[grade]\">Grade</label>
      <input type=\"text\" name=\"form[grade]\" value=\"{{ form.grade is defined ? form.grade : '' }}\" required />


      <label for=\"form[grade_system]\">Grade System</label>
      <select name=\"form[grade_system]\">
        {% for grade_system in grade_systems %}
          <option value=\"{{ grade_system.id }}\">{{ grade_system.gradeSystemCode | upper ~ ' (' ~ grade_system.gradeSystemName ~ ')' }}</option>
        {% endfor %}
      </select>

      <button>{{ (mode == 'new') ? 'Create Grade' : 'Save Changes' }}</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", ":grade:form.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/grade/form.html.twig");
    }
}
