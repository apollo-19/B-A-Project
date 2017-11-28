<?php

/* :prerequisite:view_one.html.twig */
class __TwigTemplate_642e093bad90c1c63d45c4f14e98143cc009efd022bca8e661a1eb66d8cb6e29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":prerequisite:view_one.html.twig", 1);
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
        $__internal_91cd4d55194c20fb3ea4abecdea41aa7262ebd2e79aefff1dbee26c452f2ce4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91cd4d55194c20fb3ea4abecdea41aa7262ebd2e79aefff1dbee26c452f2ce4f->enter($__internal_91cd4d55194c20fb3ea4abecdea41aa7262ebd2e79aefff1dbee26c452f2ce4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":prerequisite:view_one.html.twig"));

        $__internal_3c67ea788670323246235cba591f128c7cf78ad1290f7686e86a91986f2a1633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c67ea788670323246235cba591f128c7cf78ad1290f7686e86a91986f2a1633->enter($__internal_3c67ea788670323246235cba591f128c7cf78ad1290f7686e86a91986f2a1633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":prerequisite:view_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91cd4d55194c20fb3ea4abecdea41aa7262ebd2e79aefff1dbee26c452f2ce4f->leave($__internal_91cd4d55194c20fb3ea4abecdea41aa7262ebd2e79aefff1dbee26c452f2ce4f_prof);

        
        $__internal_3c67ea788670323246235cba591f128c7cf78ad1290f7686e86a91986f2a1633->leave($__internal_3c67ea788670323246235cba591f128c7cf78ad1290f7686e86a91986f2a1633_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_b456f3d3926def1e9d7b07032bc72b45f6889b71304323027e5d8cce36cb2e84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b456f3d3926def1e9d7b07032bc72b45f6889b71304323027e5d8cce36cb2e84->enter($__internal_b456f3d3926def1e9d7b07032bc72b45f6889b71304323027e5d8cce36cb2e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a62f2433f2d181a876b52b3e1fa8010433ee8b6044991ae0b661bd342073daf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a62f2433f2d181a876b52b3e1fa8010433ee8b6044991ae0b661bd342073daf1->enter($__internal_a62f2433f2d181a876b52b3e1fa8010433ee8b6044991ae0b661bd342073daf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["course"] ?? $this->getContext($context, "course")), "courseCode", array()), "html", null, true);
        echo "
";
        
        $__internal_a62f2433f2d181a876b52b3e1fa8010433ee8b6044991ae0b661bd342073daf1->leave($__internal_a62f2433f2d181a876b52b3e1fa8010433ee8b6044991ae0b661bd342073daf1_prof);

        
        $__internal_b456f3d3926def1e9d7b07032bc72b45f6889b71304323027e5d8cce36cb2e84->leave($__internal_b456f3d3926def1e9d7b07032bc72b45f6889b71304323027e5d8cce36cb2e84_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_a740a585920262b86152e369c05e2233e17f538deecd5336ee419376b533eefe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a740a585920262b86152e369c05e2233e17f538deecd5336ee419376b533eefe->enter($__internal_a740a585920262b86152e369c05e2233e17f538deecd5336ee419376b533eefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_3680fa244eccaa8de5d714ea656e5971396052041b44880e74f0fcd5ad6f28c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3680fa244eccaa8de5d714ea656e5971396052041b44880e74f0fcd5ad6f28c9->enter($__internal_3680fa244eccaa8de5d714ea656e5971396052041b44880e74f0fcd5ad6f28c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>
</style>
";
        
        $__internal_3680fa244eccaa8de5d714ea656e5971396052041b44880e74f0fcd5ad6f28c9->leave($__internal_3680fa244eccaa8de5d714ea656e5971396052041b44880e74f0fcd5ad6f28c9_prof);

        
        $__internal_a740a585920262b86152e369c05e2233e17f538deecd5336ee419376b533eefe->leave($__internal_a740a585920262b86152e369c05e2233e17f538deecd5336ee419376b533eefe_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_09189ae086021fb9a6727b2b75ae7288c0269fed85743ca94ac4122ce09acf4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09189ae086021fb9a6727b2b75ae7288c0269fed85743ca94ac4122ce09acf4d->enter($__internal_09189ae086021fb9a6727b2b75ae7288c0269fed85743ca94ac4122ce09acf4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c3074b77e60e810f0c0648795b72f2b1e55170f799dfa64283452b2269d20699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3074b77e60e810f0c0648795b72f2b1e55170f799dfa64283452b2269d20699->enter($__internal_c3074b77e60e810f0c0648795b72f2b1e55170f799dfa64283452b2269d20699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c3074b77e60e810f0c0648795b72f2b1e55170f799dfa64283452b2269d20699->leave($__internal_c3074b77e60e810f0c0648795b72f2b1e55170f799dfa64283452b2269d20699_prof);

        
        $__internal_09189ae086021fb9a6727b2b75ae7288c0269fed85743ca94ac4122ce09acf4d->leave($__internal_09189ae086021fb9a6727b2b75ae7288c0269fed85743ca94ac4122ce09acf4d_prof);

    }

    public function getTemplateName()
    {
        return ":prerequisite:view_one.html.twig";
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
", ":prerequisite:view_one.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/prerequisite/view_one.html.twig");
    }
}
