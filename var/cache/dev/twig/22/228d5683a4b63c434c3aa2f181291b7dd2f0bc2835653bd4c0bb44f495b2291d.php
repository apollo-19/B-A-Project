<?php

/* :student:view.html.twig */
class __TwigTemplate_f752d08d30fe1c48fdeecca79d996b676f81f220388693c37092c6ae2910c6dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":student:view.html.twig", 1);
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
        $__internal_0b3932cfe0ed33fd4bc5a04541c27f9677d9b8dc4ca085ce2e515fd552ffb7ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b3932cfe0ed33fd4bc5a04541c27f9677d9b8dc4ca085ce2e515fd552ffb7ed->enter($__internal_0b3932cfe0ed33fd4bc5a04541c27f9677d9b8dc4ca085ce2e515fd552ffb7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":student:view.html.twig"));

        $__internal_6432a5de821f0eabdd662276595b16d68041daa395f8a76013bae0826ec6693a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6432a5de821f0eabdd662276595b16d68041daa395f8a76013bae0826ec6693a->enter($__internal_6432a5de821f0eabdd662276595b16d68041daa395f8a76013bae0826ec6693a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":student:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b3932cfe0ed33fd4bc5a04541c27f9677d9b8dc4ca085ce2e515fd552ffb7ed->leave($__internal_0b3932cfe0ed33fd4bc5a04541c27f9677d9b8dc4ca085ce2e515fd552ffb7ed_prof);

        
        $__internal_6432a5de821f0eabdd662276595b16d68041daa395f8a76013bae0826ec6693a->leave($__internal_6432a5de821f0eabdd662276595b16d68041daa395f8a76013bae0826ec6693a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_eab630cb0cc756ee89c9584453ac1383df2828249c7d92f904bab6c0250a2979 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eab630cb0cc756ee89c9584453ac1383df2828249c7d92f904bab6c0250a2979->enter($__internal_eab630cb0cc756ee89c9584453ac1383df2828249c7d92f904bab6c0250a2979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d2d1b4a2681157fd6a5ba0d6792ade3d869484bd1816896c38a6d300bc6c68a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2d1b4a2681157fd6a5ba0d6792ade3d869484bd1816896c38a6d300bc6c68a4->enter($__internal_d2d1b4a2681157fd6a5ba0d6792ade3d869484bd1816896c38a6d300bc6c68a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Student View
";
        
        $__internal_d2d1b4a2681157fd6a5ba0d6792ade3d869484bd1816896c38a6d300bc6c68a4->leave($__internal_d2d1b4a2681157fd6a5ba0d6792ade3d869484bd1816896c38a6d300bc6c68a4_prof);

        
        $__internal_eab630cb0cc756ee89c9584453ac1383df2828249c7d92f904bab6c0250a2979->leave($__internal_eab630cb0cc756ee89c9584453ac1383df2828249c7d92f904bab6c0250a2979_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_ab896ca1ccfd337ef77c38f697eeb221c1377f75f56f951fab31cc56a603694a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab896ca1ccfd337ef77c38f697eeb221c1377f75f56f951fab31cc56a603694a->enter($__internal_ab896ca1ccfd337ef77c38f697eeb221c1377f75f56f951fab31cc56a603694a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_51c114524e09df3fa39c8c65a3070008a58fabc5d1dd4bf245b9a1a6c7881449 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51c114524e09df3fa39c8c65a3070008a58fabc5d1dd4bf245b9a1a6c7881449->enter($__internal_51c114524e09df3fa39c8c65a3070008a58fabc5d1dd4bf245b9a1a6c7881449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_51c114524e09df3fa39c8c65a3070008a58fabc5d1dd4bf245b9a1a6c7881449->leave($__internal_51c114524e09df3fa39c8c65a3070008a58fabc5d1dd4bf245b9a1a6c7881449_prof);

        
        $__internal_ab896ca1ccfd337ef77c38f697eeb221c1377f75f56f951fab31cc56a603694a->leave($__internal_ab896ca1ccfd337ef77c38f697eeb221c1377f75f56f951fab31cc56a603694a_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_72807f1597abd5d1f5575939e47845fcbed9da271ae8c8852e5c604875c597be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72807f1597abd5d1f5575939e47845fcbed9da271ae8c8852e5c604875c597be->enter($__internal_72807f1597abd5d1f5575939e47845fcbed9da271ae8c8852e5c604875c597be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ad7f130dee1cc7ebaea5133940cad32de7906a5f417bc864a90d2cb208287d0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad7f130dee1cc7ebaea5133940cad32de7906a5f417bc864a90d2cb208287d0d->enter($__internal_ad7f130dee1cc7ebaea5133940cad32de7906a5f417bc864a90d2cb208287d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_register");
        echo "\">New Student</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Student Name</th>
          <th>Sex</th>
          <th>Email Address</th>
          <th>User Name</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["students"] ?? $this->getContext($context, "students")));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 27
            echo "          <tr>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "firstNameEn", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "middleNameEn", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "lastNameEn", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["student"], "sex", array())), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "emailAddress", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "userName", array()), "html", null, true);
            echo "</td>

            <td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_view_one", array("student_id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
            echo "\">view</button></td>

            ";
            // line 35
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_type"), "method") == "admin")) {
                // line 36
                echo "              <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_edit", array("student_id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
                echo "\" id=\"editBtn\">edit</button></td>
              <td><a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_delete", array("student_id" => $this->getAttribute($context["student"], "id", array()))), "html", null, true);
                echo "\" id=\"deleteBtn\"
                    onclick=\"return confirm('Are You Sure You Want To Delete ";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "firstNameEn", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "middleNameEn", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "lastNameEn", array()), "html", null, true);
                echo "?') \">delete</button></td>
            ";
            }
            // line 40
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_ad7f130dee1cc7ebaea5133940cad32de7906a5f417bc864a90d2cb208287d0d->leave($__internal_ad7f130dee1cc7ebaea5133940cad32de7906a5f417bc864a90d2cb208287d0d_prof);

        
        $__internal_72807f1597abd5d1f5575939e47845fcbed9da271ae8c8852e5c604875c597be->leave($__internal_72807f1597abd5d1f5575939e47845fcbed9da271ae8c8852e5c604875c597be_prof);

    }

    public function getTemplateName()
    {
        return ":student:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 42,  164 => 40,  155 => 38,  151 => 37,  146 => 36,  144 => 35,  139 => 33,  134 => 31,  130 => 30,  126 => 29,  118 => 28,  115 => 27,  111 => 26,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  Student View
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container\" id=\"view_container\">
    <a href=\"{{ path('student_register') }}\">New Student</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Student Name</th>
          <th>Sex</th>
          <th>Email Address</th>
          <th>User Name</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        {% for student in students %}
          <tr>
            <td>{{ student.firstNameEn }} {{ student.middleNameEn }} {{ student.lastNameEn }}</td>
            <td>{{ student.sex | capitalize }}</td>
            <td>{{ student.emailAddress}}</td>
            <td>{{ student.userName }}</td>

            <td><a href=\"{{ path('student_view_one', {'student_id': student.id}) }}\">view</button></td>

            {% if(app.session.get('user_type') == 'admin') %}
              <td><a href=\"{{ path('student_edit', {'student_id': student.id}) }}\" id=\"editBtn\">edit</button></td>
              <td><a href=\"{{ path('student_delete', {'student_id': student.id}) }}\" id=\"deleteBtn\"
                    onclick=\"return confirm('Are You Sure You Want To Delete {{ student.firstNameEn }} {{ student.middleNameEn }} {{ student.lastNameEn}}?') \">delete</button></td>
            {% endif %}
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", ":student:view.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/student/view.html.twig");
    }
}
