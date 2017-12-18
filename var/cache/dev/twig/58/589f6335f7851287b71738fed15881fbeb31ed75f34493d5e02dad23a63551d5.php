<?php

/* :grade_system:view.html.twig */
class __TwigTemplate_e73678542f43b0038d1f83f15c0e499f0c69909fc804d8c9a7e4070c1c724090 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":grade_system:view.html.twig", 1);
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
        $__internal_57ba6e0a48c744e9ede2bcedeb7ffc1fe59a9409302689c97e2db4baae34c287 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57ba6e0a48c744e9ede2bcedeb7ffc1fe59a9409302689c97e2db4baae34c287->enter($__internal_57ba6e0a48c744e9ede2bcedeb7ffc1fe59a9409302689c97e2db4baae34c287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":grade_system:view.html.twig"));

        $__internal_d076ca35c4c331583803a85856a9e10f7c1e8c9dd64453e95ab1fb45c9df511d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d076ca35c4c331583803a85856a9e10f7c1e8c9dd64453e95ab1fb45c9df511d->enter($__internal_d076ca35c4c331583803a85856a9e10f7c1e8c9dd64453e95ab1fb45c9df511d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":grade_system:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57ba6e0a48c744e9ede2bcedeb7ffc1fe59a9409302689c97e2db4baae34c287->leave($__internal_57ba6e0a48c744e9ede2bcedeb7ffc1fe59a9409302689c97e2db4baae34c287_prof);

        
        $__internal_d076ca35c4c331583803a85856a9e10f7c1e8c9dd64453e95ab1fb45c9df511d->leave($__internal_d076ca35c4c331583803a85856a9e10f7c1e8c9dd64453e95ab1fb45c9df511d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_209f3744416033460e4f47c9a1e952d57a95610955bcfcc7bea6198e6942315e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_209f3744416033460e4f47c9a1e952d57a95610955bcfcc7bea6198e6942315e->enter($__internal_209f3744416033460e4f47c9a1e952d57a95610955bcfcc7bea6198e6942315e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b81b714ee37521468223709e13442cab1b62afa10f252ee358dd5ea181ddecc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b81b714ee37521468223709e13442cab1b62afa10f252ee358dd5ea181ddecc0->enter($__internal_b81b714ee37521468223709e13442cab1b62afa10f252ee358dd5ea181ddecc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "
  Grade System View

";
        
        $__internal_b81b714ee37521468223709e13442cab1b62afa10f252ee358dd5ea181ddecc0->leave($__internal_b81b714ee37521468223709e13442cab1b62afa10f252ee358dd5ea181ddecc0_prof);

        
        $__internal_209f3744416033460e4f47c9a1e952d57a95610955bcfcc7bea6198e6942315e->leave($__internal_209f3744416033460e4f47c9a1e952d57a95610955bcfcc7bea6198e6942315e_prof);

    }

    // line 8
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_c006f75a3da2acbf6ac7287e791714ec5480a182ccc1cbd48797a0404c7b51f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c006f75a3da2acbf6ac7287e791714ec5480a182ccc1cbd48797a0404c7b51f3->enter($__internal_c006f75a3da2acbf6ac7287e791714ec5480a182ccc1cbd48797a0404c7b51f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_b3dd6ddff5f1b55ad742d70a66fc2698ea62117a76d788fe64ac36cc4a90218c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3dd6ddff5f1b55ad742d70a66fc2698ea62117a76d788fe64ac36cc4a90218c->enter($__internal_b3dd6ddff5f1b55ad742d70a66fc2698ea62117a76d788fe64ac36cc4a90218c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 9
        echo "<style>

</style>
";
        
        $__internal_b3dd6ddff5f1b55ad742d70a66fc2698ea62117a76d788fe64ac36cc4a90218c->leave($__internal_b3dd6ddff5f1b55ad742d70a66fc2698ea62117a76d788fe64ac36cc4a90218c_prof);

        
        $__internal_c006f75a3da2acbf6ac7287e791714ec5480a182ccc1cbd48797a0404c7b51f3->leave($__internal_c006f75a3da2acbf6ac7287e791714ec5480a182ccc1cbd48797a0404c7b51f3_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_a5ad9ccc4d23b55651f1c839c8a00501d92aef70c9aa21e4d156606ff5a95e06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a5ad9ccc4d23b55651f1c839c8a00501d92aef70c9aa21e4d156606ff5a95e06->enter($__internal_a5ad9ccc4d23b55651f1c839c8a00501d92aef70c9aa21e4d156606ff5a95e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a12a3a95ba318d71cd2bfd6d4833fd9f46ea9f0e8d9a49fbc8291bfa594ccf89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a12a3a95ba318d71cd2bfd6d4833fd9f46ea9f0e8d9a49fbc8291bfa594ccf89->enter($__internal_a12a3a95ba318d71cd2bfd6d4833fd9f46ea9f0e8d9a49fbc8291bfa594ccf89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "  <div class=\"container\" id=\"view_container\">

    <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grade_system_create");
        echo "\">New Grade System</a>

    <table border=\"0\">
      <thead>
        <tr>
          <th>Grade System Code</th>
          <th>Grade System Name</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["grade_systems"] ?? $this->getContext($context, "grade_systems")));
        foreach ($context['_seq'] as $context["_key"] => $context["grade_system"]) {
            // line 29
            echo "          <tr>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["grade_system"], "gradeSystemCode", array())), "html", null, true);
            echo "</td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["grade_system"], "gradeSystemName", array()), "html", null, true);
            echo "</td>


            <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grade_view", array("grade_system_id" => $this->getAttribute($context["grade_system"], "id", array()))), "html", null, true);
            echo "\" id=\"editBtn\">Grades</button></td>

            <td><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grade_system_edit", array("grade_system_id" => $this->getAttribute($context["grade_system"], "id", array()))), "html", null, true);
            echo "\" id=\"editBtn\">edit</button></td>
            <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grade_system_delete", array("grade_system_id" => $this->getAttribute($context["grade_system"], "id", array()))), "html", null, true);
            echo "\" id=\"deleteBtn\"
                  onclick=\"return confirm('Are You Sure You Want To Delete Grade ";
            // line 38
            echo twig_escape_filter($this->env, (((twig_upper_filter($this->env, $this->getAttribute($context["grade_system"], "gradeSystemCode", array())) . " (") . $this->getAttribute($context["grade_system"], "gradeSystemName", array())) . ")"), "html", null, true);
            echo "?') \">delete</button></td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grade_system'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_a12a3a95ba318d71cd2bfd6d4833fd9f46ea9f0e8d9a49fbc8291bfa594ccf89->leave($__internal_a12a3a95ba318d71cd2bfd6d4833fd9f46ea9f0e8d9a49fbc8291bfa594ccf89_prof);

        
        $__internal_a5ad9ccc4d23b55651f1c839c8a00501d92aef70c9aa21e4d156606ff5a95e06->leave($__internal_a5ad9ccc4d23b55651f1c839c8a00501d92aef70c9aa21e4d156606ff5a95e06_prof);

    }

    public function getTemplateName()
    {
        return ":grade_system:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 41,  143 => 38,  139 => 37,  135 => 36,  130 => 34,  124 => 31,  120 => 30,  117 => 29,  113 => 28,  99 => 17,  95 => 15,  86 => 14,  73 => 9,  64 => 8,  51 => 3,  42 => 2,  11 => 1,);
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

  Grade System View

{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container\" id=\"view_container\">

    <a href=\"{{ path('grade_system_create') }}\">New Grade System</a>

    <table border=\"0\">
      <thead>
        <tr>
          <th>Grade System Code</th>
          <th>Grade System Name</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        {% for grade_system in grade_systems %}
          <tr>
            <td>{{ grade_system.gradeSystemCode | upper }}</td>
            <td>{{ grade_system.gradeSystemName }}</td>


            <td><a href=\"{{ path('grade_view', {'grade_system_id': grade_system.id}) }}\" id=\"editBtn\">Grades</button></td>

            <td><a href=\"{{ path('grade_system_edit', {'grade_system_id': grade_system.id}) }}\" id=\"editBtn\">edit</button></td>
            <td><a href=\"{{ path('grade_system_delete', {'grade_system_id': grade_system.id}) }}\" id=\"deleteBtn\"
                  onclick=\"return confirm('Are You Sure You Want To Delete Grade {{ grade_system.gradeSystemCode | upper ~ ' (' ~ grade_system.gradeSystemName ~ ')' }}?') \">delete</button></td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", ":grade_system:view.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/grade_system/view.html.twig");
    }
}
