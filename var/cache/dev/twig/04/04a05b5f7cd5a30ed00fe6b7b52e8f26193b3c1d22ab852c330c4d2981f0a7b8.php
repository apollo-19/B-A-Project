<?php

/* :department:view_one.html.twig */
class __TwigTemplate_5741b720ff014631b8f5f1ead16e9c753e604dd2e33e40d6a2c97e33720e494b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":department:view_one.html.twig", 1);
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
        $__internal_79acfd350c59fadf7698a5c4e58da471fc9770893c16e7d52d6626377e61f30e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79acfd350c59fadf7698a5c4e58da471fc9770893c16e7d52d6626377e61f30e->enter($__internal_79acfd350c59fadf7698a5c4e58da471fc9770893c16e7d52d6626377e61f30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":department:view_one.html.twig"));

        $__internal_d3e906c028c3d0d7dda47b23d18d79fdc9af14ecb954f70192d58274210ff32d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3e906c028c3d0d7dda47b23d18d79fdc9af14ecb954f70192d58274210ff32d->enter($__internal_d3e906c028c3d0d7dda47b23d18d79fdc9af14ecb954f70192d58274210ff32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":department:view_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79acfd350c59fadf7698a5c4e58da471fc9770893c16e7d52d6626377e61f30e->leave($__internal_79acfd350c59fadf7698a5c4e58da471fc9770893c16e7d52d6626377e61f30e_prof);

        
        $__internal_d3e906c028c3d0d7dda47b23d18d79fdc9af14ecb954f70192d58274210ff32d->leave($__internal_d3e906c028c3d0d7dda47b23d18d79fdc9af14ecb954f70192d58274210ff32d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_802c1a941e5b67a3280e709c74590e491c3e805ce1fc869ac99838f6fda382e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_802c1a941e5b67a3280e709c74590e491c3e805ce1fc869ac99838f6fda382e8->enter($__internal_802c1a941e5b67a3280e709c74590e491c3e805ce1fc869ac99838f6fda382e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c4e26e67f463372f792fe32627c3737202edd905e9dbee3c7d418a089583546b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4e26e67f463372f792fe32627c3737202edd905e9dbee3c7d418a089583546b->enter($__internal_c4e26e67f463372f792fe32627c3737202edd905e9dbee3c7d418a089583546b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["department"] ?? $this->getContext($context, "department")), "departmentCode", array()), "html", null, true);
        echo "
";
        
        $__internal_c4e26e67f463372f792fe32627c3737202edd905e9dbee3c7d418a089583546b->leave($__internal_c4e26e67f463372f792fe32627c3737202edd905e9dbee3c7d418a089583546b_prof);

        
        $__internal_802c1a941e5b67a3280e709c74590e491c3e805ce1fc869ac99838f6fda382e8->leave($__internal_802c1a941e5b67a3280e709c74590e491c3e805ce1fc869ac99838f6fda382e8_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_e4825f926b9642b310cef2480908078a36a431140f48af7d707a56518e7e43b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4825f926b9642b310cef2480908078a36a431140f48af7d707a56518e7e43b2->enter($__internal_e4825f926b9642b310cef2480908078a36a431140f48af7d707a56518e7e43b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_ec0e5f3343a20c9be4a020a2d39f31dc5f9e1d232e67e200263072c3553add30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec0e5f3343a20c9be4a020a2d39f31dc5f9e1d232e67e200263072c3553add30->enter($__internal_ec0e5f3343a20c9be4a020a2d39f31dc5f9e1d232e67e200263072c3553add30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>
</style>
";
        
        $__internal_ec0e5f3343a20c9be4a020a2d39f31dc5f9e1d232e67e200263072c3553add30->leave($__internal_ec0e5f3343a20c9be4a020a2d39f31dc5f9e1d232e67e200263072c3553add30_prof);

        
        $__internal_e4825f926b9642b310cef2480908078a36a431140f48af7d707a56518e7e43b2->leave($__internal_e4825f926b9642b310cef2480908078a36a431140f48af7d707a56518e7e43b2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_21d1c2628a8006d04a60167505ef3e47bb172a2fa8c141236d89cd25f7eb3912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21d1c2628a8006d04a60167505ef3e47bb172a2fa8c141236d89cd25f7eb3912->enter($__internal_21d1c2628a8006d04a60167505ef3e47bb172a2fa8c141236d89cd25f7eb3912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_063eafad61a989b12de762dded293402eded5e8f0305cd3a99db225fbefd46c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_063eafad61a989b12de762dded293402eded5e8f0305cd3a99db225fbefd46c9->enter($__internal_063eafad61a989b12de762dded293402eded5e8f0305cd3a99db225fbefd46c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["department"] ?? $this->getContext($context, "department")), "departmentName", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["department"] ?? $this->getContext($context, "department")), "departmentCode", array()), "html", null, true);
        echo ")</h1>

      <table>
        <tr>
          <td>Department Code:</td>
          <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["department"] ?? $this->getContext($context, "department")), "departmentCode", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Department Name:</td>
          <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["department"] ?? $this->getContext($context, "department")), "departmentName", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Department School:</td>
          <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["school"] ?? $this->getContext($context, "school")), "schoolName", array()), "html", null, true);
        echo "</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
";
        
        $__internal_063eafad61a989b12de762dded293402eded5e8f0305cd3a99db225fbefd46c9->leave($__internal_063eafad61a989b12de762dded293402eded5e8f0305cd3a99db225fbefd46c9_prof);

        
        $__internal_21d1c2628a8006d04a60167505ef3e47bb172a2fa8c141236d89cd25f7eb3912->leave($__internal_21d1c2628a8006d04a60167505ef3e47bb172a2fa8c141236d89cd25f7eb3912_prof);

    }

    public function getTemplateName()
    {
        return ":department:view_one.html.twig";
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
  {{ department.departmentCode }}
{% endblock %}

{% block stylesheet %}
<style>
</style>
{% endblock %}

{% block body %}
  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">{{ department.departmentName }} ({{ department.departmentCode }})</h1>

      <table>
        <tr>
          <td>Department Code:</td>
          <td>{{ department.departmentCode }}</td>
        </tr>

        <tr>
          <td>Department Name:</td>
          <td>{{ department.departmentName }}</td>
        </tr>

        <tr>
          <td>Department School:</td>
          <td>{{ school.schoolName }}</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
{% endblock %}
", ":department:view_one.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/department/view_one.html.twig");
    }
}
