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
        $__internal_6f19599655f3c9da49359b20d3edf88048ae1bd362bf3ed37209a26a891205ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f19599655f3c9da49359b20d3edf88048ae1bd362bf3ed37209a26a891205ea->enter($__internal_6f19599655f3c9da49359b20d3edf88048ae1bd362bf3ed37209a26a891205ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":module:view.html.twig"));

        $__internal_59f8dc4462eb91f63c9138a9819d5871a8d018978cbe83cb04c579d6a9eae28b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59f8dc4462eb91f63c9138a9819d5871a8d018978cbe83cb04c579d6a9eae28b->enter($__internal_59f8dc4462eb91f63c9138a9819d5871a8d018978cbe83cb04c579d6a9eae28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":module:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f19599655f3c9da49359b20d3edf88048ae1bd362bf3ed37209a26a891205ea->leave($__internal_6f19599655f3c9da49359b20d3edf88048ae1bd362bf3ed37209a26a891205ea_prof);

        
        $__internal_59f8dc4462eb91f63c9138a9819d5871a8d018978cbe83cb04c579d6a9eae28b->leave($__internal_59f8dc4462eb91f63c9138a9819d5871a8d018978cbe83cb04c579d6a9eae28b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_7db194e5addb954e0140b743748133e8eb0d6c34950a0ba2e3ee905c06b881fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7db194e5addb954e0140b743748133e8eb0d6c34950a0ba2e3ee905c06b881fb->enter($__internal_7db194e5addb954e0140b743748133e8eb0d6c34950a0ba2e3ee905c06b881fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d11521d55e1692466825c361ef6ff090af275b1e6ebba5874ebe9a8282a53ee0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d11521d55e1692466825c361ef6ff090af275b1e6ebba5874ebe9a8282a53ee0->enter($__internal_d11521d55e1692466825c361ef6ff090af275b1e6ebba5874ebe9a8282a53ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Module View
";
        
        $__internal_d11521d55e1692466825c361ef6ff090af275b1e6ebba5874ebe9a8282a53ee0->leave($__internal_d11521d55e1692466825c361ef6ff090af275b1e6ebba5874ebe9a8282a53ee0_prof);

        
        $__internal_7db194e5addb954e0140b743748133e8eb0d6c34950a0ba2e3ee905c06b881fb->leave($__internal_7db194e5addb954e0140b743748133e8eb0d6c34950a0ba2e3ee905c06b881fb_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_14614129afe02a13e31b5ba00a6f8710106bd519e40da8ecdb450d97d477d75a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14614129afe02a13e31b5ba00a6f8710106bd519e40da8ecdb450d97d477d75a->enter($__internal_14614129afe02a13e31b5ba00a6f8710106bd519e40da8ecdb450d97d477d75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_15a0132352365399707e473025ee228696614aab8a7678903480e3cf08dc803e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15a0132352365399707e473025ee228696614aab8a7678903480e3cf08dc803e->enter($__internal_15a0132352365399707e473025ee228696614aab8a7678903480e3cf08dc803e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_15a0132352365399707e473025ee228696614aab8a7678903480e3cf08dc803e->leave($__internal_15a0132352365399707e473025ee228696614aab8a7678903480e3cf08dc803e_prof);

        
        $__internal_14614129afe02a13e31b5ba00a6f8710106bd519e40da8ecdb450d97d477d75a->leave($__internal_14614129afe02a13e31b5ba00a6f8710106bd519e40da8ecdb450d97d477d75a_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_efd4650fb223f55cd9cbda846afae8cc60b0a7e019e8481aa7b7061d832f1ad1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efd4650fb223f55cd9cbda846afae8cc60b0a7e019e8481aa7b7061d832f1ad1->enter($__internal_efd4650fb223f55cd9cbda846afae8cc60b0a7e019e8481aa7b7061d832f1ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5140bd1a8a7a8d036c4d6190f365580837ed1ea7cdcbfe98838bb1677a292481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5140bd1a8a7a8d036c4d6190f365580837ed1ea7cdcbfe98838bb1677a292481->enter($__internal_5140bd1a8a7a8d036c4d6190f365580837ed1ea7cdcbfe98838bb1677a292481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_create");
        echo "\">New Module</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Module Code</th>
          <th>Module Name</th>
          <th>Module School</th>
          <th>Module Credit Hour</th>
          <th>Module Curriculum</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? $this->getContext($context, "modules")));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 28
            echo "          <tr>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "moduleCode", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "moduleName", array()), "html", null, true);
            echo "</td>
            <td>
              ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["schools"] ?? $this->getContext($context, "schools")));
            foreach ($context['_seq'] as $context["_key"] => $context["school"]) {
                // line 33
                echo "                ";
                if (($this->getAttribute($context["module"], "schoolId", array()) == $this->getAttribute($context["school"], "id", array()))) {
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
            <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "moduleCreditHour", array()), "html", null, true);
            echo "</td>
            <td>
              ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["curriculums"] ?? $this->getContext($context, "curriculums")));
            foreach ($context['_seq'] as $context["_key"] => $context["curriculum"]) {
                // line 41
                echo "                ";
                if (($this->getAttribute($context["module"], "curriculumId", array()) == $this->getAttribute($context["curriculum"], "id", array()))) {
                    // line 42
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["curriculum"], "curriculumName", array()), "html", null, true);
                    echo "
                ";
                }
                // line 44
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curriculum'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "            </td>

            <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_view_one", array("module_id" => $this->getAttribute($context["module"], "id", array()))), "html", null, true);
            echo "\">view</a></td>

            ";
            // line 49
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_type"), "method") == "admin")) {
                // line 50
                echo "              <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_edit", array("module_id" => $this->getAttribute($context["module"], "id", array()))), "html", null, true);
                echo "\" id=\"editBtn\">edit</button></td>
              <td><a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_delete", array("module_id" => $this->getAttribute($context["module"], "id", array()))), "html", null, true);
                echo "\" id=\"deleteBtn\"
                    onclick=\"return confirm('Are You Sure You Want To Delete ";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "moduleName", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "moduleCode", array()), "html", null, true);
                echo ")?') \">delete</button></td>
            ";
            }
            // line 54
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_5140bd1a8a7a8d036c4d6190f365580837ed1ea7cdcbfe98838bb1677a292481->leave($__internal_5140bd1a8a7a8d036c4d6190f365580837ed1ea7cdcbfe98838bb1677a292481_prof);

        
        $__internal_efd4650fb223f55cd9cbda846afae8cc60b0a7e019e8481aa7b7061d832f1ad1->leave($__internal_efd4650fb223f55cd9cbda846afae8cc60b0a7e019e8481aa7b7061d832f1ad1_prof);

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
        return array (  208 => 56,  201 => 54,  194 => 52,  190 => 51,  185 => 50,  183 => 49,  178 => 47,  174 => 45,  168 => 44,  162 => 42,  159 => 41,  155 => 40,  150 => 38,  147 => 37,  141 => 36,  135 => 34,  132 => 33,  128 => 32,  123 => 30,  119 => 29,  116 => 28,  112 => 27,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
    <a href=\"{{ path('module_create') }}\">New Module</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Module Code</th>
          <th>Module Name</th>
          <th>Module School</th>
          <th>Module Credit Hour</th>
          <th>Module Curriculum</th>
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
            <td>
              {% for curriculum in curriculums %}
                {% if(module.curriculumId == curriculum.id) %}
                  {{ curriculum.curriculumName }}
                {% endif %}
              {% endfor %}
            </td>

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
", ":module:view.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/module/view.html.twig");
    }
}
