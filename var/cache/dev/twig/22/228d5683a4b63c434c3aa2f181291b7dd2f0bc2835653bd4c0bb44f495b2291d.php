<?php

/* student/view.html.twig */
class __TwigTemplate_f752d08d30fe1c48fdeecca79d996b676f81f220388693c37092c6ae2910c6dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "student/view.html.twig", 1);
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
        $__internal_527047d119506c2838b9fe2e390579c657cc8d6792b8afdb6eed87d810566795 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_527047d119506c2838b9fe2e390579c657cc8d6792b8afdb6eed87d810566795->enter($__internal_527047d119506c2838b9fe2e390579c657cc8d6792b8afdb6eed87d810566795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/view.html.twig"));

        $__internal_207361bbd2ab31c332d0393d020a046bb28c4741439863c02fd676f95625327f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_207361bbd2ab31c332d0393d020a046bb28c4741439863c02fd676f95625327f->enter($__internal_207361bbd2ab31c332d0393d020a046bb28c4741439863c02fd676f95625327f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_527047d119506c2838b9fe2e390579c657cc8d6792b8afdb6eed87d810566795->leave($__internal_527047d119506c2838b9fe2e390579c657cc8d6792b8afdb6eed87d810566795_prof);

        
        $__internal_207361bbd2ab31c332d0393d020a046bb28c4741439863c02fd676f95625327f->leave($__internal_207361bbd2ab31c332d0393d020a046bb28c4741439863c02fd676f95625327f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bfd595d52e183f9d038ec8bdac383c28015f7298dd0f7c1742ee5b84393a8f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bfd595d52e183f9d038ec8bdac383c28015f7298dd0f7c1742ee5b84393a8f8->enter($__internal_2bfd595d52e183f9d038ec8bdac383c28015f7298dd0f7c1742ee5b84393a8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6ce32b1cf91c7ad29705ea0aef4f89d010815db8540b3cf9d94fee0c0465513d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ce32b1cf91c7ad29705ea0aef4f89d010815db8540b3cf9d94fee0c0465513d->enter($__internal_6ce32b1cf91c7ad29705ea0aef4f89d010815db8540b3cf9d94fee0c0465513d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Student View
";
        
        $__internal_6ce32b1cf91c7ad29705ea0aef4f89d010815db8540b3cf9d94fee0c0465513d->leave($__internal_6ce32b1cf91c7ad29705ea0aef4f89d010815db8540b3cf9d94fee0c0465513d_prof);

        
        $__internal_2bfd595d52e183f9d038ec8bdac383c28015f7298dd0f7c1742ee5b84393a8f8->leave($__internal_2bfd595d52e183f9d038ec8bdac383c28015f7298dd0f7c1742ee5b84393a8f8_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_2cca98a00ddd69cab51298be6639d089e3b38c1087dd2b73b2cf4d070a05c304 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cca98a00ddd69cab51298be6639d089e3b38c1087dd2b73b2cf4d070a05c304->enter($__internal_2cca98a00ddd69cab51298be6639d089e3b38c1087dd2b73b2cf4d070a05c304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_e3c59215e8e30339b35d0df8d966edea80573c156f96547ce031b10b345d9872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c59215e8e30339b35d0df8d966edea80573c156f96547ce031b10b345d9872->enter($__internal_e3c59215e8e30339b35d0df8d966edea80573c156f96547ce031b10b345d9872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_e3c59215e8e30339b35d0df8d966edea80573c156f96547ce031b10b345d9872->leave($__internal_e3c59215e8e30339b35d0df8d966edea80573c156f96547ce031b10b345d9872_prof);

        
        $__internal_2cca98a00ddd69cab51298be6639d089e3b38c1087dd2b73b2cf4d070a05c304->leave($__internal_2cca98a00ddd69cab51298be6639d089e3b38c1087dd2b73b2cf4d070a05c304_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6b0cf4ed3fb3d9630f1b278f191d397a01c950f84f2d3a30ffc55a4b00c6b33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6b0cf4ed3fb3d9630f1b278f191d397a01c950f84f2d3a30ffc55a4b00c6b33->enter($__internal_f6b0cf4ed3fb3d9630f1b278f191d397a01c950f84f2d3a30ffc55a4b00c6b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_00c784f94dab8ee3379eda237610137a49a2a0889566e675146544f42cf69dbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00c784f94dab8ee3379eda237610137a49a2a0889566e675146544f42cf69dbc->enter($__internal_00c784f94dab8ee3379eda237610137a49a2a0889566e675146544f42cf69dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_register");
        echo "\">Create a New Student</a>
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
            echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "sex", array()), "html", null, true);
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
        
        $__internal_00c784f94dab8ee3379eda237610137a49a2a0889566e675146544f42cf69dbc->leave($__internal_00c784f94dab8ee3379eda237610137a49a2a0889566e675146544f42cf69dbc_prof);

        
        $__internal_f6b0cf4ed3fb3d9630f1b278f191d397a01c950f84f2d3a30ffc55a4b00c6b33->leave($__internal_f6b0cf4ed3fb3d9630f1b278f191d397a01c950f84f2d3a30ffc55a4b00c6b33_prof);

    }

    public function getTemplateName()
    {
        return "student/view.html.twig";
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
    <a href=\"{{ path('student_register') }}\">Create a New Student</a>
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
            <td>{{ student.sex }}</td>
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
", "student/view.html.twig", "/home/apollo-19/github/B-A-Project/app/Resources/views/student/view.html.twig");
    }
}
