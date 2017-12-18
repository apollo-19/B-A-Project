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
        $__internal_7563be54677757d4a913b3f96376b1b1131eca2b3901c44d7315d797139c76e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7563be54677757d4a913b3f96376b1b1131eca2b3901c44d7315d797139c76e4->enter($__internal_7563be54677757d4a913b3f96376b1b1131eca2b3901c44d7315d797139c76e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":teacher:view_one.html.twig"));

        $__internal_51133b5ac3b9a8ff67748f5ca5d48272a7ee4eea56e10cc69a7e69e5fa69b7bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51133b5ac3b9a8ff67748f5ca5d48272a7ee4eea56e10cc69a7e69e5fa69b7bc->enter($__internal_51133b5ac3b9a8ff67748f5ca5d48272a7ee4eea56e10cc69a7e69e5fa69b7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":teacher:view_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7563be54677757d4a913b3f96376b1b1131eca2b3901c44d7315d797139c76e4->leave($__internal_7563be54677757d4a913b3f96376b1b1131eca2b3901c44d7315d797139c76e4_prof);

        
        $__internal_51133b5ac3b9a8ff67748f5ca5d48272a7ee4eea56e10cc69a7e69e5fa69b7bc->leave($__internal_51133b5ac3b9a8ff67748f5ca5d48272a7ee4eea56e10cc69a7e69e5fa69b7bc_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec8f79d9afc919cc2e79e00a5cdeccd92e3855bef1126c41dcc4e29abec84af5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec8f79d9afc919cc2e79e00a5cdeccd92e3855bef1126c41dcc4e29abec84af5->enter($__internal_ec8f79d9afc919cc2e79e00a5cdeccd92e3855bef1126c41dcc4e29abec84af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f1561a81e131b565dce8af70dc01035a15d6b907d37ff3ddc6e1873aacc096af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1561a81e131b565dce8af70dc01035a15d6b907d37ff3ddc6e1873aacc096af->enter($__internal_f1561a81e131b565dce8af70dc01035a15d6b907d37ff3ddc6e1873aacc096af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "middleName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["teacher"] ?? $this->getContext($context, "teacher")), "lastName", array()), "html", null, true);
        echo "
";
        
        $__internal_f1561a81e131b565dce8af70dc01035a15d6b907d37ff3ddc6e1873aacc096af->leave($__internal_f1561a81e131b565dce8af70dc01035a15d6b907d37ff3ddc6e1873aacc096af_prof);

        
        $__internal_ec8f79d9afc919cc2e79e00a5cdeccd92e3855bef1126c41dcc4e29abec84af5->leave($__internal_ec8f79d9afc919cc2e79e00a5cdeccd92e3855bef1126c41dcc4e29abec84af5_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_8ab34f47a76a1e2b7273cd69dbb06dc329bd65075788d6550b9c1a7da4636eab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ab34f47a76a1e2b7273cd69dbb06dc329bd65075788d6550b9c1a7da4636eab->enter($__internal_8ab34f47a76a1e2b7273cd69dbb06dc329bd65075788d6550b9c1a7da4636eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_4fa15da96237a4b2f0891406a82fcf6fd70cea66082054b4d5768601e1ac777c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fa15da96237a4b2f0891406a82fcf6fd70cea66082054b4d5768601e1ac777c->enter($__internal_4fa15da96237a4b2f0891406a82fcf6fd70cea66082054b4d5768601e1ac777c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>
</style>
";
        
        $__internal_4fa15da96237a4b2f0891406a82fcf6fd70cea66082054b4d5768601e1ac777c->leave($__internal_4fa15da96237a4b2f0891406a82fcf6fd70cea66082054b4d5768601e1ac777c_prof);

        
        $__internal_8ab34f47a76a1e2b7273cd69dbb06dc329bd65075788d6550b9c1a7da4636eab->leave($__internal_8ab34f47a76a1e2b7273cd69dbb06dc329bd65075788d6550b9c1a7da4636eab_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f0b224dde7ea8b9d527f8ad19f12289703cbe358f9be345ce8e0fb2157b04ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f0b224dde7ea8b9d527f8ad19f12289703cbe358f9be345ce8e0fb2157b04ea->enter($__internal_8f0b224dde7ea8b9d527f8ad19f12289703cbe358f9be345ce8e0fb2157b04ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_07477d32dd40470569e2fd51293d49a1ed00830619a99ad27bd7c4895e332458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07477d32dd40470569e2fd51293d49a1ed00830619a99ad27bd7c4895e332458->enter($__internal_07477d32dd40470569e2fd51293d49a1ed00830619a99ad27bd7c4895e332458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_07477d32dd40470569e2fd51293d49a1ed00830619a99ad27bd7c4895e332458->leave($__internal_07477d32dd40470569e2fd51293d49a1ed00830619a99ad27bd7c4895e332458_prof);

        
        $__internal_8f0b224dde7ea8b9d527f8ad19f12289703cbe358f9be345ce8e0fb2157b04ea->leave($__internal_8f0b224dde7ea8b9d527f8ad19f12289703cbe358f9be345ce8e0fb2157b04ea_prof);

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
", ":teacher:view_one.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/teacher/view_one.html.twig");
    }
}
