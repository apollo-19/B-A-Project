<?php

/* :module:view.html.twig */
class __TwigTemplate_454299c5094e047a9624936fc1bc95ba79ddac59f6720ee075289d6e981bce20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":module:view.html.twig", 1);
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
        $__internal_f5dacfdab19b7f85e4d4996e19980d0e50b38eb709fdbe516b6620ec392ad89c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5dacfdab19b7f85e4d4996e19980d0e50b38eb709fdbe516b6620ec392ad89c->enter($__internal_f5dacfdab19b7f85e4d4996e19980d0e50b38eb709fdbe516b6620ec392ad89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":module:view.html.twig"));

        $__internal_0fdcd2339bd39dd11321a86e32ce977c5afbb1f64d3ad2d712b2191b5db1425c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fdcd2339bd39dd11321a86e32ce977c5afbb1f64d3ad2d712b2191b5db1425c->enter($__internal_0fdcd2339bd39dd11321a86e32ce977c5afbb1f64d3ad2d712b2191b5db1425c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":module:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5dacfdab19b7f85e4d4996e19980d0e50b38eb709fdbe516b6620ec392ad89c->leave($__internal_f5dacfdab19b7f85e4d4996e19980d0e50b38eb709fdbe516b6620ec392ad89c_prof);

        
        $__internal_0fdcd2339bd39dd11321a86e32ce977c5afbb1f64d3ad2d712b2191b5db1425c->leave($__internal_0fdcd2339bd39dd11321a86e32ce977c5afbb1f64d3ad2d712b2191b5db1425c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e138c3b91a02f9d0c10403a0c697cf7e5ac61156f9820da39065db85e4c66b23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e138c3b91a02f9d0c10403a0c697cf7e5ac61156f9820da39065db85e4c66b23->enter($__internal_e138c3b91a02f9d0c10403a0c697cf7e5ac61156f9820da39065db85e4c66b23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f415d04c8ff159a73854f716e555cd3f60aadbf7dfa4b66b7ab11f53ce44e0b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f415d04c8ff159a73854f716e555cd3f60aadbf7dfa4b66b7ab11f53ce44e0b5->enter($__internal_f415d04c8ff159a73854f716e555cd3f60aadbf7dfa4b66b7ab11f53ce44e0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Module View
";
        
        $__internal_f415d04c8ff159a73854f716e555cd3f60aadbf7dfa4b66b7ab11f53ce44e0b5->leave($__internal_f415d04c8ff159a73854f716e555cd3f60aadbf7dfa4b66b7ab11f53ce44e0b5_prof);

        
        $__internal_e138c3b91a02f9d0c10403a0c697cf7e5ac61156f9820da39065db85e4c66b23->leave($__internal_e138c3b91a02f9d0c10403a0c697cf7e5ac61156f9820da39065db85e4c66b23_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_f7174837cdc97ff255bc52676719184b25e60373d2bce0d6db226358a5b9ff61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7174837cdc97ff255bc52676719184b25e60373d2bce0d6db226358a5b9ff61->enter($__internal_f7174837cdc97ff255bc52676719184b25e60373d2bce0d6db226358a5b9ff61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_d33918e4c1e301aad408d549752feda970c5b1122a9a6f83df2fa565b9f1dea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d33918e4c1e301aad408d549752feda970c5b1122a9a6f83df2fa565b9f1dea7->enter($__internal_d33918e4c1e301aad408d549752feda970c5b1122a9a6f83df2fa565b9f1dea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_d33918e4c1e301aad408d549752feda970c5b1122a9a6f83df2fa565b9f1dea7->leave($__internal_d33918e4c1e301aad408d549752feda970c5b1122a9a6f83df2fa565b9f1dea7_prof);

        
        $__internal_f7174837cdc97ff255bc52676719184b25e60373d2bce0d6db226358a5b9ff61->leave($__internal_f7174837cdc97ff255bc52676719184b25e60373d2bce0d6db226358a5b9ff61_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_0df46c88b56374640cb0b187b47338f48dee0e64a23bc74ae30dfd040d874682 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0df46c88b56374640cb0b187b47338f48dee0e64a23bc74ae30dfd040d874682->enter($__internal_0df46c88b56374640cb0b187b47338f48dee0e64a23bc74ae30dfd040d874682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a177fb4649f838c9409833640dd59f72195bc827484c373ddc5300f4831aecf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a177fb4649f838c9409833640dd59f72195bc827484c373ddc5300f4831aecf8->enter($__internal_a177fb4649f838c9409833640dd59f72195bc827484c373ddc5300f4831aecf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_create");
        echo "\">Create a New Module</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Module Code</th>
          <th>Module Name</th>
          <th>Module School</th>
          <th>Module Credit Hour</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? $this->getContext($context, "modules")));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 27
            echo "          <tr>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "moduleCode", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "moduleName", array()), "html", null, true);
            echo "</td>
            <td>
              ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["schools"] ?? $this->getContext($context, "schools")));
            foreach ($context['_seq'] as $context["_key"] => $context["school"]) {
                // line 32
                echo "                ";
                if (($this->getAttribute($context["module"], "schoolId", array()) == $this->getAttribute($context["school"], "id", array()))) {
                    // line 33
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "schoolName", array()), "html", null, true);
                    echo "
                ";
                }
                // line 35
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['school'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "            </td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "moduleCreditHour", array()), "html", null, true);
            echo "</td>

            <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_view_one", array("module_id" => $this->getAttribute($context["module"], "id", array()))), "html", null, true);
            echo "\">view</a></td>

            ";
            // line 41
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_type"), "method") == "admin")) {
                // line 42
                echo "              <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_edit", array("module_id" => $this->getAttribute($context["module"], "id", array()))), "html", null, true);
                echo "\" id=\"editBtn\">edit</button></td>
              <td><a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_delete", array("module_id" => $this->getAttribute($context["module"], "id", array()))), "html", null, true);
                echo "\" id=\"deleteBtn\"
                    onclick=\"return confirm('Are You Sure You Want To Delete ";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "moduleName", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "moduleCode", array()), "html", null, true);
                echo ")?') \">delete</button></td>
            ";
            }
            // line 46
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_a177fb4649f838c9409833640dd59f72195bc827484c373ddc5300f4831aecf8->leave($__internal_a177fb4649f838c9409833640dd59f72195bc827484c373ddc5300f4831aecf8_prof);

        
        $__internal_0df46c88b56374640cb0b187b47338f48dee0e64a23bc74ae30dfd040d874682->leave($__internal_0df46c88b56374640cb0b187b47338f48dee0e64a23bc74ae30dfd040d874682_prof);

    }

    public function getTemplateName()
    {
        return ":module:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 48,  177 => 46,  170 => 44,  166 => 43,  161 => 42,  159 => 41,  154 => 39,  149 => 37,  146 => 36,  140 => 35,  134 => 33,  131 => 32,  127 => 31,  122 => 29,  118 => 28,  115 => 27,  111 => 26,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  Module View
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container\" id=\"view_container\">
    <a href=\"{{ path('module_create') }}\">Create a New Module</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Module Code</th>
          <th>Module Name</th>
          <th>Module School</th>
          <th>Module Credit Hour</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        {% for module in modules %}
          <tr>
            <td>{{ module.moduleCode }}</td>
            <td>{{ module.moduleName }}</td>
            <td>
              {% for school in schools %}
                {% if(module.schoolId == school.id) %}
                  {{ school.schoolName }}
                {% endif %}
              {% endfor %}
            </td>
            <td>{{ module.moduleCreditHour }}</td>

            <td><a href=\"{{ path('module_view_one', {'module_id': module.id}) }}\">view</a></td>

            {% if(app.session.get('user_type') == 'admin') %}
              <td><a href=\"{{ path('module_edit', {'module_id': module.id}) }}\" id=\"editBtn\">edit</button></td>
              <td><a href=\"{{ path('module_delete', {'module_id': module.id}) }}\" id=\"deleteBtn\"
                    onclick=\"return confirm('Are You Sure You Want To Delete {{ module.moduleName }} ({{ module.moduleCode }})?') \">delete</button></td>
            {% endif %}
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", ":module:view.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/module/view.html.twig");
    }
}
