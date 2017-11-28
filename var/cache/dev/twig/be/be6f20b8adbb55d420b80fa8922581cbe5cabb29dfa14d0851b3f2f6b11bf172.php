<?php

/* :teacher:view_one.html.twig */
class __TwigTemplate_9973b3b86d976ce0181967fbfb546e448325557e3c5ec88a4676a58e338bbcdb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":teacher:view_one.html.twig", 1);
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
        $__internal_3c59fd61d958d5e5a4588cd31f3f48fc6f5b38b79a31c3f5ad6bf8c1a30a17c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c59fd61d958d5e5a4588cd31f3f48fc6f5b38b79a31c3f5ad6bf8c1a30a17c8->enter($__internal_3c59fd61d958d5e5a4588cd31f3f48fc6f5b38b79a31c3f5ad6bf8c1a30a17c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":teacher:view_one.html.twig"));

        $__internal_42afafd9bd6c1f0f8565027d45fa0043f3f19fbfeea0c09525f084dd3c4a2974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42afafd9bd6c1f0f8565027d45fa0043f3f19fbfeea0c09525f084dd3c4a2974->enter($__internal_42afafd9bd6c1f0f8565027d45fa0043f3f19fbfeea0c09525f084dd3c4a2974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":teacher:view_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c59fd61d958d5e5a4588cd31f3f48fc6f5b38b79a31c3f5ad6bf8c1a30a17c8->leave($__internal_3c59fd61d958d5e5a4588cd31f3f48fc6f5b38b79a31c3f5ad6bf8c1a30a17c8_prof);

        
        $__internal_42afafd9bd6c1f0f8565027d45fa0043f3f19fbfeea0c09525f084dd3c4a2974->leave($__internal_42afafd9bd6c1f0f8565027d45fa0043f3f19fbfeea0c09525f084dd3c4a2974_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_bef67d3df207eb1bbc8d57fd39101b675a269e804468899f203327bbdf61e11b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bef67d3df207eb1bbc8d57fd39101b675a269e804468899f203327bbdf61e11b->enter($__internal_bef67d3df207eb1bbc8d57fd39101b675a269e804468899f203327bbdf61e11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3f448dd58c4afae79262c371067ba0f8e2565fff28d2bcbf58c82f4a49b5ced5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f448dd58c4afae79262c371067ba0f8e2565fff28d2bcbf58c82f4a49b5ced5->enter($__internal_3f448dd58c4afae79262c371067ba0f8e2565fff28d2bcbf58c82f4a49b5ced5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "middleName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "lastName", array()), "html", null, true);
        echo "
";
        
        $__internal_3f448dd58c4afae79262c371067ba0f8e2565fff28d2bcbf58c82f4a49b5ced5->leave($__internal_3f448dd58c4afae79262c371067ba0f8e2565fff28d2bcbf58c82f4a49b5ced5_prof);

        
        $__internal_bef67d3df207eb1bbc8d57fd39101b675a269e804468899f203327bbdf61e11b->leave($__internal_bef67d3df207eb1bbc8d57fd39101b675a269e804468899f203327bbdf61e11b_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_90917e71b66a0015e78fd92c5dc8c86ba896c96212a123547d4d77ed7e85fc76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90917e71b66a0015e78fd92c5dc8c86ba896c96212a123547d4d77ed7e85fc76->enter($__internal_90917e71b66a0015e78fd92c5dc8c86ba896c96212a123547d4d77ed7e85fc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_b58f7bfe769fbb59bb3e4963a66799ff3b15a3f02bdac40c41cde1c9e3aa2195 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b58f7bfe769fbb59bb3e4963a66799ff3b15a3f02bdac40c41cde1c9e3aa2195->enter($__internal_b58f7bfe769fbb59bb3e4963a66799ff3b15a3f02bdac40c41cde1c9e3aa2195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>
</style>
";
        
        $__internal_b58f7bfe769fbb59bb3e4963a66799ff3b15a3f02bdac40c41cde1c9e3aa2195->leave($__internal_b58f7bfe769fbb59bb3e4963a66799ff3b15a3f02bdac40c41cde1c9e3aa2195_prof);

        
        $__internal_90917e71b66a0015e78fd92c5dc8c86ba896c96212a123547d4d77ed7e85fc76->leave($__internal_90917e71b66a0015e78fd92c5dc8c86ba896c96212a123547d4d77ed7e85fc76_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_539f0824774550be9e9fa9642bda69db62d196dfd45990525d141046692a5002 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_539f0824774550be9e9fa9642bda69db62d196dfd45990525d141046692a5002->enter($__internal_539f0824774550be9e9fa9642bda69db62d196dfd45990525d141046692a5002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_98c5fd4dac16426463adb4c2edf89e40945512f39bc8b2c0e1bbdab4bcb5a366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98c5fd4dac16426463adb4c2edf89e40945512f39bc8b2c0e1bbdab4bcb5a366->enter($__internal_98c5fd4dac16426463adb4c2edf89e40945512f39bc8b2c0e1bbdab4bcb5a366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "middleName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "lastName", array()), "html", null, true);
        echo "</h1>

      <table>
        <tr>
          <td colspan=\"3\"><a class=\"fright\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("teacher_edit", array("teacher_id" => $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "id", array()))), "html", null, true);
        echo "\">Edit Teacher</a></td>
        </tr>

        <tr>
          <td>First Name:</td>
          <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "firstName", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Middle Name:</td>
          <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "middleName", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Last Name:</td>
          <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "lastName", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Sex:</td>
          <td>";
        // line 39
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "sex", array())), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Mobile Number:</td>
          <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "mobileNumber", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Email Address:</td>
          <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "emailAddress", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Teacher Department:</td>
          <td>";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute(($context["department"] ?? $this->getContext($context, "department")), "departmentName", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>User Name:</td>
          <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "userName", array()), "html", null, true);
        echo "</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
";
        
        $__internal_98c5fd4dac16426463adb4c2edf89e40945512f39bc8b2c0e1bbdab4bcb5a366->leave($__internal_98c5fd4dac16426463adb4c2edf89e40945512f39bc8b2c0e1bbdab4bcb5a366_prof);

        
        $__internal_539f0824774550be9e9fa9642bda69db62d196dfd45990525d141046692a5002->leave($__internal_539f0824774550be9e9fa9642bda69db62d196dfd45990525d141046692a5002_prof);

    }

    public function getTemplateName()
    {
        return ":teacher:view_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 59,  170 => 54,  162 => 49,  154 => 44,  146 => 39,  138 => 34,  130 => 29,  122 => 24,  114 => 19,  103 => 15,  98 => 12,  89 => 11,  77 => 7,  68 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  {{ teacher.firstName }} {{ teacher.middleName }} {{ teacher.lastName }}
{% endblock %}

{% block stylesheet %}
<style>
</style>
{% endblock %}

{% block body %}
  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">{{ teacher.firstName }} {{ teacher.middleName }} {{ teacher.lastName }}</h1>

      <table>
        <tr>
          <td colspan=\"3\"><a class=\"fright\" href=\"{{ path('teacher_edit', {'teacher_id': teacher.id}) }}\">Edit Teacher</a></td>
        </tr>

        <tr>
          <td>First Name:</td>
          <td>{{ teacher.firstName }}</td>
        </tr>

        <tr>
          <td>Middle Name:</td>
          <td>{{ teacher.middleName }}</td>
        </tr>

        <tr>
          <td>Last Name:</td>
          <td>{{ teacher.lastName }}</td>
        </tr>

        <tr>
          <td>Sex:</td>
          <td>{{ teacher.sex | capitalize }}</td>
        </tr>

        <tr>
          <td>Mobile Number:</td>
          <td>{{ teacher.mobileNumber }}</td>
        </tr>

        <tr>
          <td>Email Address:</td>
          <td>{{ teacher.emailAddress }}</td>
        </tr>

        <tr>
          <td>Teacher Department:</td>
          <td>{{ department.departmentName }}</td>
        </tr>

        <tr>
          <td>User Name:</td>
          <td>{{ teacher.userName }}</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
{% endblock %}
", ":teacher:view_one.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/teacher/view_one.html.twig");
    }
}
