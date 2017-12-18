<?php

/* :prerequisite:view.html.twig */
class __TwigTemplate_896fc44b91fbfb5ec5a224ebc6b52c92d55b0426bd763712925248dfd867a71d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":prerequisite:view.html.twig", 1);
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
        $__internal_6598a48e2f5b800a436e180a5a48211958ea6a7eb6b10affac934bac1d5e3def = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6598a48e2f5b800a436e180a5a48211958ea6a7eb6b10affac934bac1d5e3def->enter($__internal_6598a48e2f5b800a436e180a5a48211958ea6a7eb6b10affac934bac1d5e3def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":prerequisite:view.html.twig"));

        $__internal_a2373a8753103d52aa6a44e0eec9b7ac7339fef29e4eea181daa06cbf71406af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2373a8753103d52aa6a44e0eec9b7ac7339fef29e4eea181daa06cbf71406af->enter($__internal_a2373a8753103d52aa6a44e0eec9b7ac7339fef29e4eea181daa06cbf71406af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":prerequisite:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6598a48e2f5b800a436e180a5a48211958ea6a7eb6b10affac934bac1d5e3def->leave($__internal_6598a48e2f5b800a436e180a5a48211958ea6a7eb6b10affac934bac1d5e3def_prof);

        
        $__internal_a2373a8753103d52aa6a44e0eec9b7ac7339fef29e4eea181daa06cbf71406af->leave($__internal_a2373a8753103d52aa6a44e0eec9b7ac7339fef29e4eea181daa06cbf71406af_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_bde91ce34b2ff27d45ca0b5fc2fc8bca22fc75c57b0e4c122b11ef5193a8867f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bde91ce34b2ff27d45ca0b5fc2fc8bca22fc75c57b0e4c122b11ef5193a8867f->enter($__internal_bde91ce34b2ff27d45ca0b5fc2fc8bca22fc75c57b0e4c122b11ef5193a8867f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_12f0bf4e1c93ec1445439efa51b867e40839247879c7ae098ffeda0d8944d6c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12f0bf4e1c93ec1445439efa51b867e40839247879c7ae098ffeda0d8944d6c6->enter($__internal_12f0bf4e1c93ec1445439efa51b867e40839247879c7ae098ffeda0d8944d6c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Prerequisite View
";
        
        $__internal_12f0bf4e1c93ec1445439efa51b867e40839247879c7ae098ffeda0d8944d6c6->leave($__internal_12f0bf4e1c93ec1445439efa51b867e40839247879c7ae098ffeda0d8944d6c6_prof);

        
        $__internal_bde91ce34b2ff27d45ca0b5fc2fc8bca22fc75c57b0e4c122b11ef5193a8867f->leave($__internal_bde91ce34b2ff27d45ca0b5fc2fc8bca22fc75c57b0e4c122b11ef5193a8867f_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_fa9442a7f791085b6cffb737372b2144dce091efcd185b95210ec7a80f0215a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa9442a7f791085b6cffb737372b2144dce091efcd185b95210ec7a80f0215a6->enter($__internal_fa9442a7f791085b6cffb737372b2144dce091efcd185b95210ec7a80f0215a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_761b05319fa7886bab77365277bab150c6d34405df255bfa95f52d1d6c3b142f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_761b05319fa7886bab77365277bab150c6d34405df255bfa95f52d1d6c3b142f->enter($__internal_761b05319fa7886bab77365277bab150c6d34405df255bfa95f52d1d6c3b142f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_761b05319fa7886bab77365277bab150c6d34405df255bfa95f52d1d6c3b142f->leave($__internal_761b05319fa7886bab77365277bab150c6d34405df255bfa95f52d1d6c3b142f_prof);

        
        $__internal_fa9442a7f791085b6cffb737372b2144dce091efcd185b95210ec7a80f0215a6->leave($__internal_fa9442a7f791085b6cffb737372b2144dce091efcd185b95210ec7a80f0215a6_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e519f65bcf0960403b3a89bd6115a2be6c710358fe0d707a19ca3f80e143b15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e519f65bcf0960403b3a89bd6115a2be6c710358fe0d707a19ca3f80e143b15->enter($__internal_2e519f65bcf0960403b3a89bd6115a2be6c710358fe0d707a19ca3f80e143b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d8a075b3912366bd101cf40e49de8ba1d888782961454febfa615606a401e77d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8a075b3912366bd101cf40e49de8ba1d888782961454febfa615606a401e77d->enter($__internal_d8a075b3912366bd101cf40e49de8ba1d888782961454febfa615606a401e77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("prerequisite_create");
        echo "\">New Prerequisite</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Course/Module</th>
          <th>Prerequisited Course/Module</th>
          <th colspan=\"3\">Action</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["prerequisites"] ?? $this->getContext($context, "prerequisites")));
        foreach ($context['_seq'] as $context["_key"] => $context["prerequisite"]) {
            // line 25
            echo "          <tr>
            <td>
              (";
            // line 27
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["prerequisite"], "courseModuleType", array())), "html", null, true);
            echo ") -
              ";
            // line 28
            if (($this->getAttribute($context["prerequisite"], "courseModuleType", array()) == "course")) {
                // line 29
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? $this->getContext($context, "courses")));
                foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                    // line 30
                    echo "                  ";
                    if (($this->getAttribute($context["prerequisite"], "courseModuleId", array()) == $this->getAttribute($context["course"], "id", array()))) {
                        // line 31
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "courseName", array()), "html", null, true);
                        echo "

                  ";
                    }
                    // line 34
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "
              ";
            } elseif (($this->getAttribute(            // line 36
$context["prerequisite"], "courseModuleType", array()) == "module")) {
                // line 37
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? $this->getContext($context, "modules")));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 38
                    echo "                  ";
                    if (($this->getAttribute($context["prerequisite"], "courseModuleId", array()) == $this->getAttribute($context["module"], "id", array()))) {
                        // line 39
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "moduleName", array()), "html", null, true);
                        echo "
                  ";
                    }
                    // line 41
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                echo "              ";
            }
            // line 43
            echo "            </td>

            <td>
              (";
            // line 46
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["prerequisite"], "prerequisiteType", array())), "html", null, true);
            echo ") -

              ";
            // line 48
            if (($this->getAttribute($context["prerequisite"], "prerequisiteType", array()) == "course")) {
                // line 49
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? $this->getContext($context, "courses")));
                foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                    // line 50
                    echo "                  ";
                    if (($this->getAttribute($context["prerequisite"], "prerequisiteId", array()) == $this->getAttribute($context["course"], "id", array()))) {
                        // line 51
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "courseName", array()), "html", null, true);
                        echo "
                  ";
                    }
                    // line 53
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "
              ";
            } elseif (($this->getAttribute(            // line 55
$context["prerequisite"], "prerequisiteType", array()) == "module")) {
                // line 56
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? $this->getContext($context, "modules")));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 57
                    echo "                  ";
                    if (($this->getAttribute($context["prerequisite"], "prerequisiteId", array()) == $this->getAttribute($context["module"], "id", array()))) {
                        // line 58
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "moduleName", array()), "html", null, true);
                        echo "
                  ";
                    }
                    // line 60
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "              ";
            }
            // line 62
            echo "            </td>

            ";
            // line 64
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_type"), "method") == "admin")) {
                // line 65
                echo "              <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("prerequisite_edit", array("prerequisite_id" => $this->getAttribute($context["prerequisite"], "id", array()))), "html", null, true);
                echo "\" id=\"editBtn\">edit</button></td>
              <td><a href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("prerequisite_delete", array("prerequisite_id" => $this->getAttribute($context["prerequisite"], "id", array()))), "html", null, true);
                echo "\" id=\"deleteBtn\"
                    onclick=\"return confirm('Are You Sure You Want To Delete ?') \">delete</button></td>
            ";
            }
            // line 69
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prerequisite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_d8a075b3912366bd101cf40e49de8ba1d888782961454febfa615606a401e77d->leave($__internal_d8a075b3912366bd101cf40e49de8ba1d888782961454febfa615606a401e77d_prof);

        
        $__internal_2e519f65bcf0960403b3a89bd6115a2be6c710358fe0d707a19ca3f80e143b15->leave($__internal_2e519f65bcf0960403b3a89bd6115a2be6c710358fe0d707a19ca3f80e143b15_prof);

    }

    public function getTemplateName()
    {
        return ":prerequisite:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 71,  249 => 69,  243 => 66,  238 => 65,  236 => 64,  232 => 62,  229 => 61,  223 => 60,  217 => 58,  214 => 57,  209 => 56,  207 => 55,  204 => 54,  198 => 53,  192 => 51,  189 => 50,  184 => 49,  182 => 48,  177 => 46,  172 => 43,  169 => 42,  163 => 41,  157 => 39,  154 => 38,  149 => 37,  147 => 36,  144 => 35,  138 => 34,  131 => 31,  128 => 30,  123 => 29,  121 => 28,  117 => 27,  113 => 25,  109 => 24,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  Prerequisite View
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container\" id=\"view_container\">
    <a href=\"{{ path('prerequisite_create') }}\">New Prerequisite</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Course/Module</th>
          <th>Prerequisited Course/Module</th>
          <th colspan=\"3\">Action</th>
        </tr>
      </thead>
      <tbody>
        {% for prerequisite in prerequisites %}
          <tr>
            <td>
              ({{ prerequisite.courseModuleType | capitalize }}) -
              {% if (prerequisite.courseModuleType == 'course') %}
                {% for course in courses %}
                  {% if ( prerequisite.courseModuleId == course.id ) %}
                    {{ course.courseName }}

                  {% endif %}
                {% endfor %}

              {% elseif (prerequisite.courseModuleType == 'module') %}
                {% for module in modules %}
                  {% if ( prerequisite.courseModuleId == module.id ) %}
                    {{ module.moduleName }}
                  {% endif %}
                {% endfor %}
              {% endif %}
            </td>

            <td>
              ({{ prerequisite.prerequisiteType | capitalize }}) -

              {% if (prerequisite.prerequisiteType == 'course') %}
                {% for course in courses %}
                  {% if ( prerequisite.prerequisiteId == course.id ) %}
                    {{ course.courseName }}
                  {% endif %}
                {% endfor %}

              {% elseif (prerequisite.prerequisiteType == 'module') %}
                {% for module in modules %}
                  {% if ( prerequisite.prerequisiteId == module.id ) %}
                    {{ module.moduleName }}
                  {% endif %}
                {% endfor %}
              {% endif %}
            </td>

            {% if(app.session.get('user_type') == 'admin') %}
              <td><a href=\"{{ path('prerequisite_edit', {'prerequisite_id': prerequisite.id}) }}\" id=\"editBtn\">edit</button></td>
              <td><a href=\"{{ path('prerequisite_delete', {'prerequisite_id': prerequisite.id}) }}\" id=\"deleteBtn\"
                    onclick=\"return confirm('Are You Sure You Want To Delete ?') \">delete</button></td>
            {% endif %}
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", ":prerequisite:view.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/prerequisite/view.html.twig");
    }
}
