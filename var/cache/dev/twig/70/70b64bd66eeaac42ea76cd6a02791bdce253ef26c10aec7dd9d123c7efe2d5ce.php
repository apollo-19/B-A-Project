<?php

/* curriculum/view.html.twig */
class __TwigTemplate_b864079b73d85d6f72dc122b99ee6511575ba166e9204725dfed9f73d49c4475 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "curriculum/view.html.twig", 1);
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
        $__internal_7c5de40f47b051ae88faac0a05b089521459ee1573082091a2f8ecb564120966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c5de40f47b051ae88faac0a05b089521459ee1573082091a2f8ecb564120966->enter($__internal_7c5de40f47b051ae88faac0a05b089521459ee1573082091a2f8ecb564120966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "curriculum/view.html.twig"));

        $__internal_ff30559641dd7789705690449c2ca9a947a7b37fea7cebb52050bc6a4398ce0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff30559641dd7789705690449c2ca9a947a7b37fea7cebb52050bc6a4398ce0b->enter($__internal_ff30559641dd7789705690449c2ca9a947a7b37fea7cebb52050bc6a4398ce0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "curriculum/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c5de40f47b051ae88faac0a05b089521459ee1573082091a2f8ecb564120966->leave($__internal_7c5de40f47b051ae88faac0a05b089521459ee1573082091a2f8ecb564120966_prof);

        
        $__internal_ff30559641dd7789705690449c2ca9a947a7b37fea7cebb52050bc6a4398ce0b->leave($__internal_ff30559641dd7789705690449c2ca9a947a7b37fea7cebb52050bc6a4398ce0b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_70d543cafc372d7bc604b446017fd9482f312ad644e9e444f06d08a9f6c6b26a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70d543cafc372d7bc604b446017fd9482f312ad644e9e444f06d08a9f6c6b26a->enter($__internal_70d543cafc372d7bc604b446017fd9482f312ad644e9e444f06d08a9f6c6b26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_71edf30f83bea8caf424fa0de57fedaafa5e0f67e71785eb2a6015125d3f63cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71edf30f83bea8caf424fa0de57fedaafa5e0f67e71785eb2a6015125d3f63cc->enter($__internal_71edf30f83bea8caf424fa0de57fedaafa5e0f67e71785eb2a6015125d3f63cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Curriculum View
";
        
        $__internal_71edf30f83bea8caf424fa0de57fedaafa5e0f67e71785eb2a6015125d3f63cc->leave($__internal_71edf30f83bea8caf424fa0de57fedaafa5e0f67e71785eb2a6015125d3f63cc_prof);

        
        $__internal_70d543cafc372d7bc604b446017fd9482f312ad644e9e444f06d08a9f6c6b26a->leave($__internal_70d543cafc372d7bc604b446017fd9482f312ad644e9e444f06d08a9f6c6b26a_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_03b149f886a09fb6e84f0fde069d2acac1fc36130ff3f0b91263ecfa93135ecf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b149f886a09fb6e84f0fde069d2acac1fc36130ff3f0b91263ecfa93135ecf->enter($__internal_03b149f886a09fb6e84f0fde069d2acac1fc36130ff3f0b91263ecfa93135ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_48805502769d75fc334bffb45fb89878b365c686fe37e10ae919df993e152d55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48805502769d75fc334bffb45fb89878b365c686fe37e10ae919df993e152d55->enter($__internal_48805502769d75fc334bffb45fb89878b365c686fe37e10ae919df993e152d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_48805502769d75fc334bffb45fb89878b365c686fe37e10ae919df993e152d55->leave($__internal_48805502769d75fc334bffb45fb89878b365c686fe37e10ae919df993e152d55_prof);

        
        $__internal_03b149f886a09fb6e84f0fde069d2acac1fc36130ff3f0b91263ecfa93135ecf->leave($__internal_03b149f886a09fb6e84f0fde069d2acac1fc36130ff3f0b91263ecfa93135ecf_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_98495b8abe47add357ed62035a7a37f4676b2c064a6ea37dea69019c4dd34ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98495b8abe47add357ed62035a7a37f4676b2c064a6ea37dea69019c4dd34ff2->enter($__internal_98495b8abe47add357ed62035a7a37f4676b2c064a6ea37dea69019c4dd34ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_875dd42018c5ce96af762d1e2a931a8ec2b95bbbbc61bf0efcf5e8c08c430b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_875dd42018c5ce96af762d1e2a931a8ec2b95bbbbc61bf0efcf5e8c08c430b80->enter($__internal_875dd42018c5ce96af762d1e2a931a8ec2b95bbbbc61bf0efcf5e8c08c430b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("curriculum_create");
        echo "\">Create a New Curriculum</a>

    <table border=\"0\">
      <thead>
        <tr>
          <th>Curriculum Code</th>
          <th>Curriculum Name</th>
          <th>Curriculum Type</th>
          <th>Curriculum School</th>
          <th colspan=\"4\">Actions</th>
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
            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["curriculum"], "curriculumType", array())), "html", null, true);
            echo "</td>
            <td>
              ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["schools"] ?? $this->getContext($context, "schools")));
            foreach ($context['_seq'] as $context["_key"] => $context["school"]) {
                // line 34
                echo "                ";
                if (($this->getAttribute($context["curriculum"], "schoolId", array()) == $this->getAttribute($context["school"], "id", array()))) {
                    // line 35
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "schoolName", array()), "html", null, true);
                    echo "
                ";
                }
                // line 37
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['school'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "            </td>

            <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("curriculum_view_one", array("curriculum_id" => $this->getAttribute($context["curriculum"], "id", array()))), "html", null, true);
            echo "\">view</a></td>
            <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("curriculum_edit", array("curriculum_id" => $this->getAttribute($context["curriculum"], "id", array()))), "html", null, true);
            echo "\" id=\"editBtn\">edit</button></td>
            <td><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("curriculum_struct", array("curriculum_id" => $this->getAttribute($context["curriculum"], "id", array()))), "html", null, true);
            echo "\">structure</a></td>
            <td><a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("curriculum_delete", array("curriculum_id" => $this->getAttribute($context["curriculum"], "id", array()))), "html", null, true);
            echo "\" id=\"deleteBtn\"
                  onclick=\"return confirm('Are You Sure You Want To Delete ";
            // line 44
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
        // line 47
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_875dd42018c5ce96af762d1e2a931a8ec2b95bbbbc61bf0efcf5e8c08c430b80->leave($__internal_875dd42018c5ce96af762d1e2a931a8ec2b95bbbbc61bf0efcf5e8c08c430b80_prof);

        
        $__internal_98495b8abe47add357ed62035a7a37f4676b2c064a6ea37dea69019c4dd34ff2->leave($__internal_98495b8abe47add357ed62035a7a37f4676b2c064a6ea37dea69019c4dd34ff2_prof);

    }

    public function getTemplateName()
    {
        return "curriculum/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 47,  171 => 44,  167 => 43,  163 => 42,  159 => 41,  155 => 40,  151 => 38,  145 => 37,  139 => 35,  136 => 34,  132 => 33,  127 => 31,  123 => 30,  119 => 29,  116 => 28,  112 => 27,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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

    <table border=\"0\">
      <thead>
        <tr>
          <th>Curriculum Code</th>
          <th>Curriculum Name</th>
          <th>Curriculum Type</th>
          <th>Curriculum School</th>
          <th colspan=\"4\">Actions</th>
        </tr>
      </thead>
      <tbody>
        {% for curriculum in curriculums %}
          <tr>
            <td>{{ curriculum.curriculumCode }}</td>
            <td>{{ curriculum.curriculumName }}</td>
            <td>{{ curriculum.curriculumType | capitalize }}</td>
            <td>
              {% for school in schools %}
                {% if(curriculum.schoolId == school.id) %}
                  {{ school.schoolName }}
                {% endif %}
              {% endfor %}
            </td>

            <td><a href=\"{{ path('curriculum_view_one', {'curriculum_id': curriculum.id}) }}\">view</a></td>
            <td><a href=\"{{ path('curriculum_edit', {'curriculum_id': curriculum.id}) }}\" id=\"editBtn\">edit</button></td>
            <td><a href=\"{{ path('curriculum_struct', {'curriculum_id': curriculum.id}) }}\">structure</a></td>
            <td><a href=\"{{ path('curriculum_delete', {'curriculum_id': curriculum.id}) }}\" id=\"deleteBtn\"
                  onclick=\"return confirm('Are You Sure You Want To Delete {{ curriculum.curriculumName }} ({{ curriculum.curriculumCode }})?') \">delete</button></td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", "curriculum/view.html.twig", "/home/apollo-19/github/B-A-Project/app/Resources/views/curriculum/view.html.twig");
    }
}
