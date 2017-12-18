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
        $__internal_936b2a7b9220a31870748423a45503bf994fdaef12519e285e8412fbf1314072 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_936b2a7b9220a31870748423a45503bf994fdaef12519e285e8412fbf1314072->enter($__internal_936b2a7b9220a31870748423a45503bf994fdaef12519e285e8412fbf1314072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":school:view_one.html.twig"));

        $__internal_0bf0ac01fbc1a5c889ccbad5d17b95eecab7725e562dadf8f32a5fac96cd3c5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf0ac01fbc1a5c889ccbad5d17b95eecab7725e562dadf8f32a5fac96cd3c5d->enter($__internal_0bf0ac01fbc1a5c889ccbad5d17b95eecab7725e562dadf8f32a5fac96cd3c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":school:view_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_936b2a7b9220a31870748423a45503bf994fdaef12519e285e8412fbf1314072->leave($__internal_936b2a7b9220a31870748423a45503bf994fdaef12519e285e8412fbf1314072_prof);

        
        $__internal_0bf0ac01fbc1a5c889ccbad5d17b95eecab7725e562dadf8f32a5fac96cd3c5d->leave($__internal_0bf0ac01fbc1a5c889ccbad5d17b95eecab7725e562dadf8f32a5fac96cd3c5d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ecb873a272128c2eded701dfeec2cdee9a93dbd90fce4b0758592ac3aa50596f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecb873a272128c2eded701dfeec2cdee9a93dbd90fce4b0758592ac3aa50596f->enter($__internal_ecb873a272128c2eded701dfeec2cdee9a93dbd90fce4b0758592ac3aa50596f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a64898887b2855b6fc05a3700bb66ee333d916637a1558da0c922617a2a565a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a64898887b2855b6fc05a3700bb66ee333d916637a1558da0c922617a2a565a2->enter($__internal_a64898887b2855b6fc05a3700bb66ee333d916637a1558da0c922617a2a565a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["school"] ?? $this->getContext($context, "school")), "schoolCode", array()), "html", null, true);
        echo "
";
        
        $__internal_a64898887b2855b6fc05a3700bb66ee333d916637a1558da0c922617a2a565a2->leave($__internal_a64898887b2855b6fc05a3700bb66ee333d916637a1558da0c922617a2a565a2_prof);

        
        $__internal_ecb873a272128c2eded701dfeec2cdee9a93dbd90fce4b0758592ac3aa50596f->leave($__internal_ecb873a272128c2eded701dfeec2cdee9a93dbd90fce4b0758592ac3aa50596f_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_a705bc22f43768a254668869fea73b5518d4bb3a6f1089ec7ce03334a7205423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a705bc22f43768a254668869fea73b5518d4bb3a6f1089ec7ce03334a7205423->enter($__internal_a705bc22f43768a254668869fea73b5518d4bb3a6f1089ec7ce03334a7205423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_f303f638f9ffe7d554206ec7a24e0d084fcd1d6537103b0da9871d545fb939cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f303f638f9ffe7d554206ec7a24e0d084fcd1d6537103b0da9871d545fb939cf->enter($__internal_f303f638f9ffe7d554206ec7a24e0d084fcd1d6537103b0da9871d545fb939cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>
</style>
";
        
        $__internal_f303f638f9ffe7d554206ec7a24e0d084fcd1d6537103b0da9871d545fb939cf->leave($__internal_f303f638f9ffe7d554206ec7a24e0d084fcd1d6537103b0da9871d545fb939cf_prof);

        
        $__internal_a705bc22f43768a254668869fea73b5518d4bb3a6f1089ec7ce03334a7205423->leave($__internal_a705bc22f43768a254668869fea73b5518d4bb3a6f1089ec7ce03334a7205423_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a54fef4ac34e6dcfa39089eaeb3357872805577a80947b331faa24675dec22fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a54fef4ac34e6dcfa39089eaeb3357872805577a80947b331faa24675dec22fe->enter($__internal_a54fef4ac34e6dcfa39089eaeb3357872805577a80947b331faa24675dec22fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd257b31d94b1849c2d5988dd04d6e0f6940d7c1408aed7700f856929d319229 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd257b31d94b1849c2d5988dd04d6e0f6940d7c1408aed7700f856929d319229->enter($__internal_bd257b31d94b1849c2d5988dd04d6e0f6940d7c1408aed7700f856929d319229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_bd257b31d94b1849c2d5988dd04d6e0f6940d7c1408aed7700f856929d319229->leave($__internal_bd257b31d94b1849c2d5988dd04d6e0f6940d7c1408aed7700f856929d319229_prof);

        
        $__internal_a54fef4ac34e6dcfa39089eaeb3357872805577a80947b331faa24675dec22fe->leave($__internal_a54fef4ac34e6dcfa39089eaeb3357872805577a80947b331faa24675dec22fe_prof);

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
", ":school:view_one.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/school/view_one.html.twig");
    }
}
