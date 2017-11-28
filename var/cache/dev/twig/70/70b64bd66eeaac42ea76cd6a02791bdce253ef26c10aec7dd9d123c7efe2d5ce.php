<?php

/* :curriculum:view.html.twig */
class __TwigTemplate_b864079b73d85d6f72dc122b99ee6511575ba166e9204725dfed9f73d49c4475 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":curriculum:view.html.twig", 1);
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
        $__internal_dc467df07b9bf6938a97fab63409a59ae205491b5b1a430103e33c0a529ed13b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc467df07b9bf6938a97fab63409a59ae205491b5b1a430103e33c0a529ed13b->enter($__internal_dc467df07b9bf6938a97fab63409a59ae205491b5b1a430103e33c0a529ed13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":curriculum:view.html.twig"));

        $__internal_3601f2d310ca779a44b7affcdcb50bfdfbdc3740e00eb18682282e13099e7ad7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3601f2d310ca779a44b7affcdcb50bfdfbdc3740e00eb18682282e13099e7ad7->enter($__internal_3601f2d310ca779a44b7affcdcb50bfdfbdc3740e00eb18682282e13099e7ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":curriculum:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc467df07b9bf6938a97fab63409a59ae205491b5b1a430103e33c0a529ed13b->leave($__internal_dc467df07b9bf6938a97fab63409a59ae205491b5b1a430103e33c0a529ed13b_prof);

        
        $__internal_3601f2d310ca779a44b7affcdcb50bfdfbdc3740e00eb18682282e13099e7ad7->leave($__internal_3601f2d310ca779a44b7affcdcb50bfdfbdc3740e00eb18682282e13099e7ad7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e4918f2490cea49e5350a55d57f748e88a2da4888d399cf90ef9c1e7be93b7e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4918f2490cea49e5350a55d57f748e88a2da4888d399cf90ef9c1e7be93b7e2->enter($__internal_e4918f2490cea49e5350a55d57f748e88a2da4888d399cf90ef9c1e7be93b7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_447b89770d777fb5025c1f6d38a8a7ae3b74201fc43765cfd71f6dfa191e12a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_447b89770d777fb5025c1f6d38a8a7ae3b74201fc43765cfd71f6dfa191e12a1->enter($__internal_447b89770d777fb5025c1f6d38a8a7ae3b74201fc43765cfd71f6dfa191e12a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Curriculum View
";
        
        $__internal_447b89770d777fb5025c1f6d38a8a7ae3b74201fc43765cfd71f6dfa191e12a1->leave($__internal_447b89770d777fb5025c1f6d38a8a7ae3b74201fc43765cfd71f6dfa191e12a1_prof);

        
        $__internal_e4918f2490cea49e5350a55d57f748e88a2da4888d399cf90ef9c1e7be93b7e2->leave($__internal_e4918f2490cea49e5350a55d57f748e88a2da4888d399cf90ef9c1e7be93b7e2_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_e9c816f3dc884d9a571b8ebee6d18f568fce5cde1586da5541e9248d5cb97dd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9c816f3dc884d9a571b8ebee6d18f568fce5cde1586da5541e9248d5cb97dd9->enter($__internal_e9c816f3dc884d9a571b8ebee6d18f568fce5cde1586da5541e9248d5cb97dd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_184bffd0410430876f57e4202d25419f6ec6409aea66ed62885b34c122357431 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_184bffd0410430876f57e4202d25419f6ec6409aea66ed62885b34c122357431->enter($__internal_184bffd0410430876f57e4202d25419f6ec6409aea66ed62885b34c122357431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_184bffd0410430876f57e4202d25419f6ec6409aea66ed62885b34c122357431->leave($__internal_184bffd0410430876f57e4202d25419f6ec6409aea66ed62885b34c122357431_prof);

        
        $__internal_e9c816f3dc884d9a571b8ebee6d18f568fce5cde1586da5541e9248d5cb97dd9->leave($__internal_e9c816f3dc884d9a571b8ebee6d18f568fce5cde1586da5541e9248d5cb97dd9_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b96c75b5057ea5b46204d91bf5526b21a7bc1b3b2065900291020fa7f7464a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b96c75b5057ea5b46204d91bf5526b21a7bc1b3b2065900291020fa7f7464a0->enter($__internal_8b96c75b5057ea5b46204d91bf5526b21a7bc1b3b2065900291020fa7f7464a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd7ff1dc0a342b1eef3516667d3f78ec0b11a5ae53235d722c1664f13039675d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd7ff1dc0a342b1eef3516667d3f78ec0b11a5ae53235d722c1664f13039675d->enter($__internal_bd7ff1dc0a342b1eef3516667d3f78ec0b11a5ae53235d722c1664f13039675d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("curriculum_create");
        echo "\">Create a New Curriculum</a>
    <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("curriculum_create");
        echo "\">Structure Curriculum</a>

    <table border=\"0\">
      <thead>
        <tr>
          <th>Curriculum Code</th>
          <th>Curriculum Name</th>
          <th>Curriculum School</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["curriculums"] ?? $this->getContext($context, "curriculums")));
        foreach ($context['_seq'] as $context["_key"] => $context["curriculum"]) {
            // line 28
            echo "          <tr>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["curriculum"], "curriculumCode", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["curriculum"], "curriculumName", array()), "html", null, true);
            echo "</td>
            <td>
              ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["schools"] ?? $this->getContext($context, "schools")));
            foreach ($context['_seq'] as $context["_key"] => $context["school"]) {
                // line 33
                echo "                ";
                if (($this->getAttribute($context["curriculum"], "schoolId", array()) == $this->getAttribute($context["school"], "id", array()))) {
                    // line 34
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "schoolName", array()), "html", null, true);
                    echo "
                ";
                }
                // line 36
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['school'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            </td>

            <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("curriculum_view_one", array("curriculum_id" => $this->getAttribute($context["curriculum"], "id", array()))), "html", null, true);
            echo "\">view</a></td>
            <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("curriculum_edit", array("curriculum_id" => $this->getAttribute($context["curriculum"], "id", array()))), "html", null, true);
            echo "\" id=\"editBtn\">edit</button></td>
            <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("curriculum_delete", array("curriculum_id" => $this->getAttribute($context["curriculum"], "id", array()))), "html", null, true);
            echo "\" id=\"deleteBtn\"
                  onclick=\"return confirm('Are You Sure You Want To Delete ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["curriculum"], "curriculumName", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["curriculum"], "curriculumCode", array()), "html", null, true);
            echo ")?') \">delete</button></td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curriculum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_bd7ff1dc0a342b1eef3516667d3f78ec0b11a5ae53235d722c1664f13039675d->leave($__internal_bd7ff1dc0a342b1eef3516667d3f78ec0b11a5ae53235d722c1664f13039675d_prof);

        
        $__internal_8b96c75b5057ea5b46204d91bf5526b21a7bc1b3b2065900291020fa7f7464a0->leave($__internal_8b96c75b5057ea5b46204d91bf5526b21a7bc1b3b2065900291020fa7f7464a0_prof);

    }

    public function getTemplateName()
    {
        return ":curriculum:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 45,  166 => 42,  162 => 41,  158 => 40,  154 => 39,  150 => 37,  144 => 36,  138 => 34,  135 => 33,  131 => 32,  126 => 30,  122 => 29,  119 => 28,  115 => 27,  100 => 15,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  Curriculum View
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container\" id=\"view_container\">
    <a href=\"{{ path('curriculum_create') }}\">Create a New Curriculum</a>
    <a href=\"{{ path('curriculum_create') }}\">Structure Curriculum</a>

    <table border=\"0\">
      <thead>
        <tr>
          <th>Curriculum Code</th>
          <th>Curriculum Name</th>
          <th>Curriculum School</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        {% for curriculum in curriculums %}
          <tr>
            <td>{{ curriculum.curriculumCode }}</td>
            <td>{{ curriculum.curriculumName }}</td>
            <td>
              {% for school in schools %}
                {% if(curriculum.schoolId == school.id) %}
                  {{ school.schoolName }}
                {% endif %}
              {% endfor %}
            </td>

            <td><a href=\"{{ path('curriculum_view_one', {'curriculum_id': curriculum.id}) }}\">view</a></td>
            <td><a href=\"{{ path('curriculum_edit', {'curriculum_id': curriculum.id}) }}\" id=\"editBtn\">edit</button></td>
            <td><a href=\"{{ path('curriculum_delete', {'curriculum_id': curriculum.id}) }}\" id=\"deleteBtn\"
                  onclick=\"return confirm('Are You Sure You Want To Delete {{ curriculum.curriculumName }} ({{ curriculum.curriculumCode }})?') \">delete</button></td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", ":curriculum:view.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/curriculum/view.html.twig");
    }
}
