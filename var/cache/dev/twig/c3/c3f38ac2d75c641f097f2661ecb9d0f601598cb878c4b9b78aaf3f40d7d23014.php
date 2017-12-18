<?php

/* :course:view_one.html.twig */
class __TwigTemplate_1a370b0c136cf2893de907e896bbacd8919f794fd1a816b5a03b146600dc87b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":course:view_one.html.twig", 1);
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
        $__internal_8189efe365d543827d55f44d6e92a40af0e4e0e0f075ef0ddd628ec68a83bd53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8189efe365d543827d55f44d6e92a40af0e4e0e0f075ef0ddd628ec68a83bd53->enter($__internal_8189efe365d543827d55f44d6e92a40af0e4e0e0f075ef0ddd628ec68a83bd53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":course:view_one.html.twig"));

        $__internal_8148fd08a941008ede952ca5ab461a2f9a1ca05c4782a7a36da0c63029ee81fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8148fd08a941008ede952ca5ab461a2f9a1ca05c4782a7a36da0c63029ee81fd->enter($__internal_8148fd08a941008ede952ca5ab461a2f9a1ca05c4782a7a36da0c63029ee81fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":course:view_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8189efe365d543827d55f44d6e92a40af0e4e0e0f075ef0ddd628ec68a83bd53->leave($__internal_8189efe365d543827d55f44d6e92a40af0e4e0e0f075ef0ddd628ec68a83bd53_prof);

        
        $__internal_8148fd08a941008ede952ca5ab461a2f9a1ca05c4782a7a36da0c63029ee81fd->leave($__internal_8148fd08a941008ede952ca5ab461a2f9a1ca05c4782a7a36da0c63029ee81fd_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ca24ab49ab486b19a4ce13cb7ae0d02d604753d1cc0bd015a212ec6fdab71d04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca24ab49ab486b19a4ce13cb7ae0d02d604753d1cc0bd015a212ec6fdab71d04->enter($__internal_ca24ab49ab486b19a4ce13cb7ae0d02d604753d1cc0bd015a212ec6fdab71d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a7b164eb545ac378122eaad75da559344fc25f77cba478a7523fff03d5590644 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7b164eb545ac378122eaad75da559344fc25f77cba478a7523fff03d5590644->enter($__internal_a7b164eb545ac378122eaad75da559344fc25f77cba478a7523fff03d5590644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "courseCode", array()), "html", null, true);
        echo "
";
        
        $__internal_a7b164eb545ac378122eaad75da559344fc25f77cba478a7523fff03d5590644->leave($__internal_a7b164eb545ac378122eaad75da559344fc25f77cba478a7523fff03d5590644_prof);

        
        $__internal_ca24ab49ab486b19a4ce13cb7ae0d02d604753d1cc0bd015a212ec6fdab71d04->leave($__internal_ca24ab49ab486b19a4ce13cb7ae0d02d604753d1cc0bd015a212ec6fdab71d04_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_de1bfdfdd0421f67021ebcf6f3b366ba0c27ca6ce53986fb3c4a184aade78aff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de1bfdfdd0421f67021ebcf6f3b366ba0c27ca6ce53986fb3c4a184aade78aff->enter($__internal_de1bfdfdd0421f67021ebcf6f3b366ba0c27ca6ce53986fb3c4a184aade78aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_00701a0b6cf5f7de42260fe58454a1223c4b2026619efb81ebd9cdb78ff30922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00701a0b6cf5f7de42260fe58454a1223c4b2026619efb81ebd9cdb78ff30922->enter($__internal_00701a0b6cf5f7de42260fe58454a1223c4b2026619efb81ebd9cdb78ff30922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>
</style>
";
        
        $__internal_00701a0b6cf5f7de42260fe58454a1223c4b2026619efb81ebd9cdb78ff30922->leave($__internal_00701a0b6cf5f7de42260fe58454a1223c4b2026619efb81ebd9cdb78ff30922_prof);

        
        $__internal_de1bfdfdd0421f67021ebcf6f3b366ba0c27ca6ce53986fb3c4a184aade78aff->leave($__internal_de1bfdfdd0421f67021ebcf6f3b366ba0c27ca6ce53986fb3c4a184aade78aff_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_845ba8f7513c86fadcab205530c7c8a48c01dd646841c90d7cf8ed7308d95d69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_845ba8f7513c86fadcab205530c7c8a48c01dd646841c90d7cf8ed7308d95d69->enter($__internal_845ba8f7513c86fadcab205530c7c8a48c01dd646841c90d7cf8ed7308d95d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_edca371a2dc68aae90d78abc3213f4725fdb89208de32ac856746c51f7555b03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edca371a2dc68aae90d78abc3213f4725fdb89208de32ac856746c51f7555b03->enter($__internal_edca371a2dc68aae90d78abc3213f4725fdb89208de32ac856746c51f7555b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "courseName", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "courseCode", array()), "html", null, true);
        echo ")</h1>

      <table>
        <tr>
          <td>Course Code:</td>
          <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "courseCode", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Course Name:</td>
          <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "courseName", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Course Credit Hour:</td>
          <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "courseCreditHour", array()), "html", null, true);
        echo "</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
";
        
        $__internal_edca371a2dc68aae90d78abc3213f4725fdb89208de32ac856746c51f7555b03->leave($__internal_edca371a2dc68aae90d78abc3213f4725fdb89208de32ac856746c51f7555b03_prof);

        
        $__internal_845ba8f7513c86fadcab205530c7c8a48c01dd646841c90d7cf8ed7308d95d69->leave($__internal_845ba8f7513c86fadcab205530c7c8a48c01dd646841c90d7cf8ed7308d95d69_prof);

    }

    public function getTemplateName()
    {
        return ":course:view_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 30,  117 => 25,  109 => 20,  99 => 15,  94 => 12,  85 => 11,  73 => 7,  64 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  {{ course.courseCode }}
{% endblock %}

{% block stylesheet %}
<style>
</style>
{% endblock %}

{% block body %}
  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">{{ course.courseName }} ({{ course.courseCode }})</h1>

      <table>
        <tr>
          <td>Course Code:</td>
          <td>{{ course.courseCode }}</td>
        </tr>

        <tr>
          <td>Course Name:</td>
          <td>{{ course.courseName }}</td>
        </tr>

        <tr>
          <td>Course Credit Hour:</td>
          <td>{{ course.courseCreditHour }}</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
{% endblock %}
", ":course:view_one.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/course/view_one.html.twig");
    }
}
