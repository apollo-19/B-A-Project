<?php

/* prerequisite/view.html.twig */
class __TwigTemplate_896fc44b91fbfb5ec5a224ebc6b52c92d55b0426bd763712925248dfd867a71d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "prerequisite/view.html.twig", 1);
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
        $__internal_159c06b5f055327bf1947d83e0def286a6815708875a8f81eee0c9740098f76c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_159c06b5f055327bf1947d83e0def286a6815708875a8f81eee0c9740098f76c->enter($__internal_159c06b5f055327bf1947d83e0def286a6815708875a8f81eee0c9740098f76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "prerequisite/view.html.twig"));

        $__internal_3e75e57e49e5ba12cbcc4fc367df468eaa65991d917e25cb8fdf78be2f2d1c07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e75e57e49e5ba12cbcc4fc367df468eaa65991d917e25cb8fdf78be2f2d1c07->enter($__internal_3e75e57e49e5ba12cbcc4fc367df468eaa65991d917e25cb8fdf78be2f2d1c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "prerequisite/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_159c06b5f055327bf1947d83e0def286a6815708875a8f81eee0c9740098f76c->leave($__internal_159c06b5f055327bf1947d83e0def286a6815708875a8f81eee0c9740098f76c_prof);

        
        $__internal_3e75e57e49e5ba12cbcc4fc367df468eaa65991d917e25cb8fdf78be2f2d1c07->leave($__internal_3e75e57e49e5ba12cbcc4fc367df468eaa65991d917e25cb8fdf78be2f2d1c07_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_db2e1c6c3fcf91880af1b8c782459290167ad152d223c5feaec779548d6f6963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db2e1c6c3fcf91880af1b8c782459290167ad152d223c5feaec779548d6f6963->enter($__internal_db2e1c6c3fcf91880af1b8c782459290167ad152d223c5feaec779548d6f6963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6bc78a28c5449a53e09ac33203914efcaec28b70d68b0297380ddf38d4fcaf73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bc78a28c5449a53e09ac33203914efcaec28b70d68b0297380ddf38d4fcaf73->enter($__internal_6bc78a28c5449a53e09ac33203914efcaec28b70d68b0297380ddf38d4fcaf73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Prerequisite View
";
        
        $__internal_6bc78a28c5449a53e09ac33203914efcaec28b70d68b0297380ddf38d4fcaf73->leave($__internal_6bc78a28c5449a53e09ac33203914efcaec28b70d68b0297380ddf38d4fcaf73_prof);

        
        $__internal_db2e1c6c3fcf91880af1b8c782459290167ad152d223c5feaec779548d6f6963->leave($__internal_db2e1c6c3fcf91880af1b8c782459290167ad152d223c5feaec779548d6f6963_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_581fa5420448be45791b10a8915bc81f389f0631cf3dbce1e4ff18c9898f9a7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_581fa5420448be45791b10a8915bc81f389f0631cf3dbce1e4ff18c9898f9a7e->enter($__internal_581fa5420448be45791b10a8915bc81f389f0631cf3dbce1e4ff18c9898f9a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_e7123018d8b5191d79f1453a9253ac5fe0752f10066f964294e01897173ddef4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7123018d8b5191d79f1453a9253ac5fe0752f10066f964294e01897173ddef4->enter($__internal_e7123018d8b5191d79f1453a9253ac5fe0752f10066f964294e01897173ddef4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_e7123018d8b5191d79f1453a9253ac5fe0752f10066f964294e01897173ddef4->leave($__internal_e7123018d8b5191d79f1453a9253ac5fe0752f10066f964294e01897173ddef4_prof);

        
        $__internal_581fa5420448be45791b10a8915bc81f389f0631cf3dbce1e4ff18c9898f9a7e->leave($__internal_581fa5420448be45791b10a8915bc81f389f0631cf3dbce1e4ff18c9898f9a7e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a0a49b13f57205eef88ff45d5c67bd50a84c20d3ac244dc349d30d391e6cdec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a0a49b13f57205eef88ff45d5c67bd50a84c20d3ac244dc349d30d391e6cdec->enter($__internal_4a0a49b13f57205eef88ff45d5c67bd50a84c20d3ac244dc349d30d391e6cdec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0585a298fcac7bde50076eaa31d465706b472164bb7152bbecaaeb998cf9a1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0585a298fcac7bde50076eaa31d465706b472164bb7152bbecaaeb998cf9a1f->enter($__internal_c0585a298fcac7bde50076eaa31d465706b472164bb7152bbecaaeb998cf9a1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("prerequisite_create");
        echo "\">Create a New Prerequisite</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Type</th>
          <th>Name</th>
          <th>Prerequisited Type</th>
          <th>Prerequisited Name</th>
          <th colspan=\"3\">Action</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["prerequisites"] ?? $this->getContext($context, "prerequisites")));
        foreach ($context['_seq'] as $context["_key"] => $context["prerequisite"]) {
            // line 27
            echo "          <tr>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["prerequisite"], "courseModuleType", array())), "html", null, true);
            echo " </td>

            <td>
              ";
            // line 31
            if (($this->getAttribute($context["prerequisite"], "courseModuleType", array()) == "course")) {
                // line 32
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? $this->getContext($context, "courses")));
                foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                    // line 33
                    echo "                  ";
                    if (($this->getAttribute($context["prerequisite"], "courseModuleId", array()) == $this->getAttribute($context["course"], "id", array()))) {
                        // line 34
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "courseName", array()), "html", null, true);
                        echo "
                  ";
                    }
                    // line 36
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "
              ";
            } elseif (($this->getAttribute(            // line 38
$context["prerequisite"], "courseModuleType", array()) == "module")) {
                // line 39
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? $this->getContext($context, "modules")));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 40
                    echo "                  ";
                    if (($this->getAttribute($context["prerequisite"], "courseModuleId", array()) == $this->getAttribute($context["module"], "id", array()))) {
                        // line 41
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "moduleName", array()), "html", null, true);
                        echo "
                  ";
                    }
                    // line 43
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 44
                echo "              ";
            }
            // line 45
            echo "            </td>

            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["prerequisite"], "prerequisiteType", array())), "html", null, true);
            echo "</td>

            <td>
              ";
            // line 50
            if (($this->getAttribute($context["prerequisite"], "prerequisiteType", array()) == "course")) {
                // line 51
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? $this->getContext($context, "courses")));
                foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                    // line 52
                    echo "                  ";
                    if (($this->getAttribute($context["prerequisite"], "prerequisiteId", array()) == $this->getAttribute($context["course"], "id", array()))) {
                        // line 53
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "courseName", array()), "html", null, true);
                        echo "
                  ";
                    }
                    // line 55
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
                echo "
              ";
            } elseif (($this->getAttribute(            // line 57
$context["prerequisite"], "prerequisiteType", array()) == "module")) {
                // line 58
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? $this->getContext($context, "modules")));
                foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                    // line 59
                    echo "                  ";
                    if (($this->getAttribute($context["prerequisite"], "prerequisiteId", array()) == $this->getAttribute($context["module"], "id", array()))) {
                        // line 60
                        echo "                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["module"], "moduleName", array()), "html", null, true);
                        echo "
                  ";
                    }
                    // line 62
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "              ";
            }
            // line 64
            echo "            </td>

            <td><a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("prerequisite_view_one", array("prerequisite_id" => $this->getAttribute($context["prerequisite"], "id", array()))), "html", null, true);
            echo "\">view</a></td>

            ";
            // line 68
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_type"), "method") == "admin")) {
                // line 69
                echo "              <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("prerequisite_edit", array("prerequisite_id" => $this->getAttribute($context["prerequisite"], "id", array()))), "html", null, true);
                echo "\" id=\"editBtn\">edit</button></td>
              <td><a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("prerequisite_delete", array("prerequisite_id" => $this->getAttribute($context["prerequisite"], "id", array()))), "html", null, true);
                echo "\" id=\"deleteBtn\"
                    onclick=\"return confirm('Are You Sure You Want To Delete ?') \">delete</button></td>
            ";
            }
            // line 73
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prerequisite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_c0585a298fcac7bde50076eaa31d465706b472164bb7152bbecaaeb998cf9a1f->leave($__internal_c0585a298fcac7bde50076eaa31d465706b472164bb7152bbecaaeb998cf9a1f_prof);

        
        $__internal_4a0a49b13f57205eef88ff45d5c67bd50a84c20d3ac244dc349d30d391e6cdec->leave($__internal_4a0a49b13f57205eef88ff45d5c67bd50a84c20d3ac244dc349d30d391e6cdec_prof);

    }

    public function getTemplateName()
    {
        return "prerequisite/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 75,  256 => 73,  250 => 70,  245 => 69,  243 => 68,  238 => 66,  234 => 64,  231 => 63,  225 => 62,  219 => 60,  216 => 59,  211 => 58,  209 => 57,  206 => 56,  200 => 55,  194 => 53,  191 => 52,  186 => 51,  184 => 50,  178 => 47,  174 => 45,  171 => 44,  165 => 43,  159 => 41,  156 => 40,  151 => 39,  149 => 38,  146 => 37,  140 => 36,  134 => 34,  131 => 33,  126 => 32,  124 => 31,  118 => 28,  115 => 27,  111 => 26,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
    <a href=\"{{ path('prerequisite_create') }}\">Create a New Prerequisite</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Type</th>
          <th>Name</th>
          <th>Prerequisited Type</th>
          <th>Prerequisited Name</th>
          <th colspan=\"3\">Action</th>
        </tr>
      </thead>
      <tbody>
        {% for prerequisite in prerequisites %}
          <tr>
            <td>{{ prerequisite.courseModuleType | capitalize }} </td>

            <td>
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

            <td>{{ prerequisite.prerequisiteType | capitalize }}</td>

            <td>
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

            <td><a href=\"{{ path('prerequisite_view_one', {'prerequisite_id': prerequisite.id}) }}\">view</a></td>

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
", "prerequisite/view.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/prerequisite/view.html.twig");
    }
}
