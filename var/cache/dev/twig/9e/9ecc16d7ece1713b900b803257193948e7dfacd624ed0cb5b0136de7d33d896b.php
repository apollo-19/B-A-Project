<?php

/* :teacher:view.html.twig */
class __TwigTemplate_a6b74296f96a50a67450699b516a3493c4972e0369c5a309d167844fd78bd78d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":teacher:view.html.twig", 1);
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
        $__internal_7c85fa69003f142c73007657e94622e82295d6e5e0a2ba601dc925b1c93521e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c85fa69003f142c73007657e94622e82295d6e5e0a2ba601dc925b1c93521e1->enter($__internal_7c85fa69003f142c73007657e94622e82295d6e5e0a2ba601dc925b1c93521e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":teacher:view.html.twig"));

        $__internal_db65b0fa035aae34070d72a964cc45ee03347629419de6b165244093dca8a446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db65b0fa035aae34070d72a964cc45ee03347629419de6b165244093dca8a446->enter($__internal_db65b0fa035aae34070d72a964cc45ee03347629419de6b165244093dca8a446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":teacher:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c85fa69003f142c73007657e94622e82295d6e5e0a2ba601dc925b1c93521e1->leave($__internal_7c85fa69003f142c73007657e94622e82295d6e5e0a2ba601dc925b1c93521e1_prof);

        
        $__internal_db65b0fa035aae34070d72a964cc45ee03347629419de6b165244093dca8a446->leave($__internal_db65b0fa035aae34070d72a964cc45ee03347629419de6b165244093dca8a446_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_41f1670454c523c62b498d4f1deb973555ba10b9fd1787aff257b032d72adc9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41f1670454c523c62b498d4f1deb973555ba10b9fd1787aff257b032d72adc9e->enter($__internal_41f1670454c523c62b498d4f1deb973555ba10b9fd1787aff257b032d72adc9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0d64ff9f0b17bd9196eb01ea823eb7ff6ca53ab524250ac7b06ed759fbd955b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d64ff9f0b17bd9196eb01ea823eb7ff6ca53ab524250ac7b06ed759fbd955b8->enter($__internal_0d64ff9f0b17bd9196eb01ea823eb7ff6ca53ab524250ac7b06ed759fbd955b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Teachers View
";
        
        $__internal_0d64ff9f0b17bd9196eb01ea823eb7ff6ca53ab524250ac7b06ed759fbd955b8->leave($__internal_0d64ff9f0b17bd9196eb01ea823eb7ff6ca53ab524250ac7b06ed759fbd955b8_prof);

        
        $__internal_41f1670454c523c62b498d4f1deb973555ba10b9fd1787aff257b032d72adc9e->leave($__internal_41f1670454c523c62b498d4f1deb973555ba10b9fd1787aff257b032d72adc9e_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_aa4dbf6b1fc6b53d84b964b7a0acd069542c29fe2a64d987699dbbb0eb4392af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa4dbf6b1fc6b53d84b964b7a0acd069542c29fe2a64d987699dbbb0eb4392af->enter($__internal_aa4dbf6b1fc6b53d84b964b7a0acd069542c29fe2a64d987699dbbb0eb4392af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_53998f98c637e52850b3e1937dcd101182536ea8f84463cfb0adcc15191988b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53998f98c637e52850b3e1937dcd101182536ea8f84463cfb0adcc15191988b4->enter($__internal_53998f98c637e52850b3e1937dcd101182536ea8f84463cfb0adcc15191988b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_53998f98c637e52850b3e1937dcd101182536ea8f84463cfb0adcc15191988b4->leave($__internal_53998f98c637e52850b3e1937dcd101182536ea8f84463cfb0adcc15191988b4_prof);

        
        $__internal_aa4dbf6b1fc6b53d84b964b7a0acd069542c29fe2a64d987699dbbb0eb4392af->leave($__internal_aa4dbf6b1fc6b53d84b964b7a0acd069542c29fe2a64d987699dbbb0eb4392af_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_53a6ffe01a27518d38c89766871a5f6fb642aab1d81a28ce0da9372335d1dfac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53a6ffe01a27518d38c89766871a5f6fb642aab1d81a28ce0da9372335d1dfac->enter($__internal_53a6ffe01a27518d38c89766871a5f6fb642aab1d81a28ce0da9372335d1dfac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5e631219f158c602dc41a9a0305e3e54512c4933808c4670c1a721a3ee8c12e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e631219f158c602dc41a9a0305e3e54512c4933808c4670c1a721a3ee8c12e2->enter($__internal_5e631219f158c602dc41a9a0305e3e54512c4933808c4670c1a721a3ee8c12e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("teacher_hire");
        echo "\">Hire a New Teacher</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Name</th>
          <th>Sex</th>
          <th>Mobile Number</th>
          <th>Email Address</th>
          <th>Department</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["teachers"] ?? $this->getContext($context, "teachers")));
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 28
            echo "          <tr>
            <td><a id=\"view_one_link\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("teacher_edit", array("teacher_id" => $this->getAttribute($context["teacher"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "middleName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "lastName", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["teacher"], "sex", array())), "html", null, true);
            echo "</td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "mobileNumber", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "emailAddress", array()), "html", null, true);
            echo "</td>
            <td>
              ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["departments"] ?? $this->getContext($context, "departments")));
            foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
                // line 35
                echo "                ";
                if (($this->getAttribute($context["teacher"], "departmentId", array()) == $this->getAttribute($context["department"], "id", array()))) {
                    // line 36
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["department"], "departmentName", array()), "html", null, true);
                    echo "
                ";
                }
                // line 38
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "            </td>

            <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("teacher_view_one", array("teacher_id" => $this->getAttribute($context["teacher"], "id", array()))), "html", null, true);
            echo "\">view</a></td>
            <td><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("teacher_edit", array("teacher_id" => $this->getAttribute($context["teacher"], "id", array()))), "html", null, true);
            echo "\">edit</a></td>
            <td><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("teacher_delete", array("teacher_id" => $this->getAttribute($context["teacher"], "id", array()))), "html", null, true);
            echo "\" id=\"deleteBtn\"
                  onclick=\"return confirm('Are You Sure You Want To Delete ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "firstName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "middleName", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["teacher"], "lastName", array()), "html", null, true);
            echo "?') \">delete</a></td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_5e631219f158c602dc41a9a0305e3e54512c4933808c4670c1a721a3ee8c12e2->leave($__internal_5e631219f158c602dc41a9a0305e3e54512c4933808c4670c1a721a3ee8c12e2_prof);

        
        $__internal_53a6ffe01a27518d38c89766871a5f6fb642aab1d81a28ce0da9372335d1dfac->leave($__internal_53a6ffe01a27518d38c89766871a5f6fb642aab1d81a28ce0da9372335d1dfac_prof);

    }

    public function getTemplateName()
    {
        return ":teacher:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 47,  177 => 44,  173 => 43,  169 => 42,  165 => 41,  161 => 39,  155 => 38,  149 => 36,  146 => 35,  142 => 34,  137 => 32,  133 => 31,  129 => 30,  119 => 29,  116 => 28,  112 => 27,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  Teachers View
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container\" id=\"view_container\">
    <a href=\"{{ path('teacher_hire') }}\">Hire a New Teacher</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Name</th>
          <th>Sex</th>
          <th>Mobile Number</th>
          <th>Email Address</th>
          <th>Department</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        {% for teacher in teachers %}
          <tr>
            <td><a id=\"view_one_link\" href=\"{{ path('teacher_edit', {'teacher_id': teacher.id}) }}\">{{ teacher.firstName }} {{ teacher.middleName }} {{ teacher.lastName }}</a></td>
            <td>{{ teacher.sex | capitalize }}</td>
            <td>{{ teacher.mobileNumber }}</td>
            <td>{{ teacher.emailAddress }}</td>
            <td>
              {% for department in departments %}
                {% if(teacher.departmentId == department.id) %}
                  {{ department.departmentName }}
                {% endif %}
              {% endfor %}
            </td>

            <td><a href=\"{{ path('teacher_view_one', {'teacher_id': teacher.id}) }}\">view</a></td>
            <td><a href=\"{{ path('teacher_edit', {'teacher_id': teacher.id}) }}\">edit</a></td>
            <td><a href=\"{{ path('teacher_delete', {'teacher_id': teacher.id}) }}\" id=\"deleteBtn\"
                  onclick=\"return confirm('Are You Sure You Want To Delete {{ teacher.firstName }} {{ teacher.middleName }} {{ teacher.lastName }}?') \">delete</a></td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", ":teacher:view.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/teacher/view.html.twig");
    }
}
