<?php

/* :school:view_one.html.twig */
class __TwigTemplate_8c726b6c8d31c628b51215c24d4dcf4799613440f87701c42aa3d60cdfdf6209 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":school:view_one.html.twig", 1);
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
        $__internal_64aa61edc15851351399c07760b64ffd664d1092ae319855ff5b9e1bbd1a0147 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64aa61edc15851351399c07760b64ffd664d1092ae319855ff5b9e1bbd1a0147->enter($__internal_64aa61edc15851351399c07760b64ffd664d1092ae319855ff5b9e1bbd1a0147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":school:view_one.html.twig"));

        $__internal_53ef10874029fc1bb0e0c68727d40c057e09176a162cc552a73deada293af826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ef10874029fc1bb0e0c68727d40c057e09176a162cc552a73deada293af826->enter($__internal_53ef10874029fc1bb0e0c68727d40c057e09176a162cc552a73deada293af826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":school:view_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64aa61edc15851351399c07760b64ffd664d1092ae319855ff5b9e1bbd1a0147->leave($__internal_64aa61edc15851351399c07760b64ffd664d1092ae319855ff5b9e1bbd1a0147_prof);

        
        $__internal_53ef10874029fc1bb0e0c68727d40c057e09176a162cc552a73deada293af826->leave($__internal_53ef10874029fc1bb0e0c68727d40c057e09176a162cc552a73deada293af826_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ef0b702a90c98d2ed197f179a9c271a35028004c3ffe260f2c2212f4b9d768e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ef0b702a90c98d2ed197f179a9c271a35028004c3ffe260f2c2212f4b9d768e->enter($__internal_1ef0b702a90c98d2ed197f179a9c271a35028004c3ffe260f2c2212f4b9d768e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_31a306317559c5ccbb7c21e1627618a1f5e06beb14261b445e5d37954a256975 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31a306317559c5ccbb7c21e1627618a1f5e06beb14261b445e5d37954a256975->enter($__internal_31a306317559c5ccbb7c21e1627618a1f5e06beb14261b445e5d37954a256975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["school"] ?? $this->getContext($context, "school")), "schoolCode", array()), "html", null, true);
        echo "
";
        
        $__internal_31a306317559c5ccbb7c21e1627618a1f5e06beb14261b445e5d37954a256975->leave($__internal_31a306317559c5ccbb7c21e1627618a1f5e06beb14261b445e5d37954a256975_prof);

        
        $__internal_1ef0b702a90c98d2ed197f179a9c271a35028004c3ffe260f2c2212f4b9d768e->leave($__internal_1ef0b702a90c98d2ed197f179a9c271a35028004c3ffe260f2c2212f4b9d768e_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_26725383e6ffde112df86924287d2709c805bb312789a8a3258ff0c9d44b0216 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26725383e6ffde112df86924287d2709c805bb312789a8a3258ff0c9d44b0216->enter($__internal_26725383e6ffde112df86924287d2709c805bb312789a8a3258ff0c9d44b0216_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_2d60c820bd004bcaec5a2902a3bfc5a330dea6c03cf68db346c6e5063bf74629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d60c820bd004bcaec5a2902a3bfc5a330dea6c03cf68db346c6e5063bf74629->enter($__internal_2d60c820bd004bcaec5a2902a3bfc5a330dea6c03cf68db346c6e5063bf74629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>
</style>
";
        
        $__internal_2d60c820bd004bcaec5a2902a3bfc5a330dea6c03cf68db346c6e5063bf74629->leave($__internal_2d60c820bd004bcaec5a2902a3bfc5a330dea6c03cf68db346c6e5063bf74629_prof);

        
        $__internal_26725383e6ffde112df86924287d2709c805bb312789a8a3258ff0c9d44b0216->leave($__internal_26725383e6ffde112df86924287d2709c805bb312789a8a3258ff0c9d44b0216_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec6cecd8c44354a79911273aa6fdc5af1744e658826d5d577fdb7728d3c645a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec6cecd8c44354a79911273aa6fdc5af1744e658826d5d577fdb7728d3c645a2->enter($__internal_ec6cecd8c44354a79911273aa6fdc5af1744e658826d5d577fdb7728d3c645a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8e66a93300e296a941aa4e91a89dade0f0574439d9bd856a65eac1a73cf541d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e66a93300e296a941aa4e91a89dade0f0574439d9bd856a65eac1a73cf541d4->enter($__internal_8e66a93300e296a941aa4e91a89dade0f0574439d9bd856a65eac1a73cf541d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["school"] ?? $this->getContext($context, "school")), "schoolName", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["school"] ?? $this->getContext($context, "school")), "schoolCode", array()), "html", null, true);
        echo ")</h1>

      <table>
        <tr>
          <td>School Code:</td>
          <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["school"] ?? $this->getContext($context, "school")), "schoolCode", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>School Name:</td>
          <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["school"] ?? $this->getContext($context, "school")), "schoolName", array()), "html", null, true);
        echo "</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
";
        
        $__internal_8e66a93300e296a941aa4e91a89dade0f0574439d9bd856a65eac1a73cf541d4->leave($__internal_8e66a93300e296a941aa4e91a89dade0f0574439d9bd856a65eac1a73cf541d4_prof);

        
        $__internal_ec6cecd8c44354a79911273aa6fdc5af1744e658826d5d577fdb7728d3c645a2->leave($__internal_ec6cecd8c44354a79911273aa6fdc5af1744e658826d5d577fdb7728d3c645a2_prof);

    }

    public function getTemplateName()
    {
        return ":school:view_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 25,  109 => 20,  99 => 15,  94 => 12,  85 => 11,  73 => 7,  64 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  {{ school.schoolCode }}
{% endblock %}

{% block stylesheet %}
<style>
</style>
{% endblock %}

{% block body %}
  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">{{ school.schoolName }} ({{ school.schoolCode }})</h1>

      <table>
        <tr>
          <td>School Code:</td>
          <td>{{ school.schoolCode }}</td>
        </tr>

        <tr>
          <td>School Name:</td>
          <td>{{ school.schoolName }}</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
{% endblock %}
", ":school:view_one.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/school/view_one.html.twig");
    }
}
