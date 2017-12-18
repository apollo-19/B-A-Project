<?php

/* :section:view.html.twig */
class __TwigTemplate_a97748a3314655b141ea191cc23df059df6186c1473bb785bcaa8665faa8c600 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":section:view.html.twig", 1);
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
        $__internal_7a26cc5ef539b62739eeb667ee27109ba15803ce54dc31a31e56994b903844d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a26cc5ef539b62739eeb667ee27109ba15803ce54dc31a31e56994b903844d9->enter($__internal_7a26cc5ef539b62739eeb667ee27109ba15803ce54dc31a31e56994b903844d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":section:view.html.twig"));

        $__internal_ff59719e7ea25c82141b235a276afc4366aaf238cb6ee17bfe54230370181ec2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff59719e7ea25c82141b235a276afc4366aaf238cb6ee17bfe54230370181ec2->enter($__internal_ff59719e7ea25c82141b235a276afc4366aaf238cb6ee17bfe54230370181ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":section:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a26cc5ef539b62739eeb667ee27109ba15803ce54dc31a31e56994b903844d9->leave($__internal_7a26cc5ef539b62739eeb667ee27109ba15803ce54dc31a31e56994b903844d9_prof);

        
        $__internal_ff59719e7ea25c82141b235a276afc4366aaf238cb6ee17bfe54230370181ec2->leave($__internal_ff59719e7ea25c82141b235a276afc4366aaf238cb6ee17bfe54230370181ec2_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_03d87bcc87d5834c507130264774031c1bac75dd64057bd18ac3fab2b7be34ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03d87bcc87d5834c507130264774031c1bac75dd64057bd18ac3fab2b7be34ab->enter($__internal_03d87bcc87d5834c507130264774031c1bac75dd64057bd18ac3fab2b7be34ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dd08fbea62579d7e2e580dda4b56d7e74e5eace53b1965fb49ce5b9c80087109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd08fbea62579d7e2e580dda4b56d7e74e5eace53b1965fb49ce5b9c80087109->enter($__internal_dd08fbea62579d7e2e580dda4b56d7e74e5eace53b1965fb49ce5b9c80087109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Section View
";
        
        $__internal_dd08fbea62579d7e2e580dda4b56d7e74e5eace53b1965fb49ce5b9c80087109->leave($__internal_dd08fbea62579d7e2e580dda4b56d7e74e5eace53b1965fb49ce5b9c80087109_prof);

        
        $__internal_03d87bcc87d5834c507130264774031c1bac75dd64057bd18ac3fab2b7be34ab->leave($__internal_03d87bcc87d5834c507130264774031c1bac75dd64057bd18ac3fab2b7be34ab_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_95c10db967b88ab2d044b1bd75abea8dd39c0947d50b4503c5d3db45d1736ab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95c10db967b88ab2d044b1bd75abea8dd39c0947d50b4503c5d3db45d1736ab0->enter($__internal_95c10db967b88ab2d044b1bd75abea8dd39c0947d50b4503c5d3db45d1736ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_d94d61dcb1bab7e9f1a8f985a9da66d3e61ea735c3d56087be5b659000298bc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d94d61dcb1bab7e9f1a8f985a9da66d3e61ea735c3d56087be5b659000298bc2->enter($__internal_d94d61dcb1bab7e9f1a8f985a9da66d3e61ea735c3d56087be5b659000298bc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_d94d61dcb1bab7e9f1a8f985a9da66d3e61ea735c3d56087be5b659000298bc2->leave($__internal_d94d61dcb1bab7e9f1a8f985a9da66d3e61ea735c3d56087be5b659000298bc2_prof);

        
        $__internal_95c10db967b88ab2d044b1bd75abea8dd39c0947d50b4503c5d3db45d1736ab0->leave($__internal_95c10db967b88ab2d044b1bd75abea8dd39c0947d50b4503c5d3db45d1736ab0_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e7c52c69e814221949f278e9ab5149d384cdd8f11c7e773490d6d2a4621ad54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e7c52c69e814221949f278e9ab5149d384cdd8f11c7e773490d6d2a4621ad54->enter($__internal_0e7c52c69e814221949f278e9ab5149d384cdd8f11c7e773490d6d2a4621ad54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_829ddab398a12d947d3e19497abb67e84926d808a7b779f94eb843d92cbeb08c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_829ddab398a12d947d3e19497abb67e84926d808a7b779f94eb843d92cbeb08c->enter($__internal_829ddab398a12d947d3e19497abb67e84926d808a7b779f94eb843d92cbeb08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("section_create");
        echo "\">New Section</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Section Code</th>
          <th>Section Name</th>
          <th>Section Batch</th>
          <th>Section Curriculum</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sections"] ?? $this->getContext($context, "sections")));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 27
            echo "          <tr>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "sectionCode", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "sectionName", array()), "html", null, true);
            echo "</td>
            <td>
              ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["batches"] ?? $this->getContext($context, "batches")));
            foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
                // line 32
                echo "                ";
                if (($this->getAttribute($context["section"], "batchId", array()) == $this->getAttribute($context["batch"], "id", array()))) {
                    // line 33
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["batch"], "batchName", array()), "html", null, true);
                    echo "
                ";
                }
                // line 35
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['batch'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "            </td>

            <td>
              ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["curriculums"] ?? $this->getContext($context, "curriculums")));
            foreach ($context['_seq'] as $context["_key"] => $context["curriculum"]) {
                // line 40
                echo "                ";
                if (($this->getAttribute($context["section"], "curriculumId", array()) == $this->getAttribute($context["curriculum"], "id", array()))) {
                    // line 41
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["curriculum"], "curriculumName", array()), "html", null, true);
                    echo "
                ";
                }
                // line 43
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['curriculum'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </td>

            <td><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("section_view_one", array("section_id" => $this->getAttribute($context["section"], "id", array()))), "html", null, true);
            echo "\">view</button></td>

            ";
            // line 48
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_type"), "method") == "admin")) {
                // line 49
                echo "              <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("section_edit", array("section_id" => $this->getAttribute($context["section"], "id", array()))), "html", null, true);
                echo "\" id=\"editBtn\">edit</button></td>
              <td><a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("section_delete", array("section_id" => $this->getAttribute($context["section"], "id", array()))), "html", null, true);
                echo "\" id=\"deleteBtn\"
                    onclick=\"return confirm('Are You Sure You Want To Delete ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "sectionName", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "sectionCode", array()), "html", null, true);
                echo ")?') \">delete</button></td>
            ";
            }
            // line 53
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_829ddab398a12d947d3e19497abb67e84926d808a7b779f94eb843d92cbeb08c->leave($__internal_829ddab398a12d947d3e19497abb67e84926d808a7b779f94eb843d92cbeb08c_prof);

        
        $__internal_0e7c52c69e814221949f278e9ab5149d384cdd8f11c7e773490d6d2a4621ad54->leave($__internal_0e7c52c69e814221949f278e9ab5149d384cdd8f11c7e773490d6d2a4621ad54_prof);

    }

    public function getTemplateName()
    {
        return ":section:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 55,  197 => 53,  190 => 51,  186 => 50,  181 => 49,  179 => 48,  174 => 46,  170 => 44,  164 => 43,  158 => 41,  155 => 40,  151 => 39,  146 => 36,  140 => 35,  134 => 33,  131 => 32,  127 => 31,  122 => 29,  118 => 28,  115 => 27,  111 => 26,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  Section View
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container\" id=\"view_container\">
    <a href=\"{{ path('section_create') }}\">New Section</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Section Code</th>
          <th>Section Name</th>
          <th>Section Batch</th>
          <th>Section Curriculum</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        {% for section in sections %}
          <tr>
            <td>{{ section.sectionCode }}</td>
            <td>{{ section.sectionName }}</td>
            <td>
              {% for batch in batches %}
                {% if(section.batchId == batch.id) %}
                  {{ batch.batchName }}
                {% endif %}
              {% endfor %}
            </td>

            <td>
              {% for curriculum in curriculums %}
                {% if(section.curriculumId == curriculum.id) %}
                  {{ curriculum.curriculumName }}
                {% endif %}
              {% endfor %}
            </td>

            <td><a href=\"{{ path('section_view_one', {'section_id': section.id}) }}\">view</button></td>

            {% if(app.session.get('user_type') == 'admin') %}
              <td><a href=\"{{ path('section_edit', {'section_id': section.id}) }}\" id=\"editBtn\">edit</button></td>
              <td><a href=\"{{ path('section_delete', {'section_id': section.id}) }}\" id=\"deleteBtn\"
                    onclick=\"return confirm('Are You Sure You Want To Delete {{ section.sectionName }} ({{ section.sectionCode }})?') \">delete</button></td>
            {% endif %}
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", ":section:view.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/section/view.html.twig");
    }
}
