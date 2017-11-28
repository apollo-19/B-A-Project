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
        $__internal_7b0495f3e0c3adef4967b981d2232ce39c40424a14b5723f26203126e6f19cae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b0495f3e0c3adef4967b981d2232ce39c40424a14b5723f26203126e6f19cae->enter($__internal_7b0495f3e0c3adef4967b981d2232ce39c40424a14b5723f26203126e6f19cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":section:view.html.twig"));

        $__internal_d3f273343e3c1517bc4affa360cac3449a138b64d6e2f32b6afe70ffec115437 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3f273343e3c1517bc4affa360cac3449a138b64d6e2f32b6afe70ffec115437->enter($__internal_d3f273343e3c1517bc4affa360cac3449a138b64d6e2f32b6afe70ffec115437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":section:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b0495f3e0c3adef4967b981d2232ce39c40424a14b5723f26203126e6f19cae->leave($__internal_7b0495f3e0c3adef4967b981d2232ce39c40424a14b5723f26203126e6f19cae_prof);

        
        $__internal_d3f273343e3c1517bc4affa360cac3449a138b64d6e2f32b6afe70ffec115437->leave($__internal_d3f273343e3c1517bc4affa360cac3449a138b64d6e2f32b6afe70ffec115437_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_279ab961c779ef43c2f9730f795ff7ea007a782c53acfce04195d1fd8c1c3e8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_279ab961c779ef43c2f9730f795ff7ea007a782c53acfce04195d1fd8c1c3e8c->enter($__internal_279ab961c779ef43c2f9730f795ff7ea007a782c53acfce04195d1fd8c1c3e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3e00894872fcba5b525b371d8116ec4592c1fc6cde16880cbbc11d7498b09378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e00894872fcba5b525b371d8116ec4592c1fc6cde16880cbbc11d7498b09378->enter($__internal_3e00894872fcba5b525b371d8116ec4592c1fc6cde16880cbbc11d7498b09378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Section View
";
        
        $__internal_3e00894872fcba5b525b371d8116ec4592c1fc6cde16880cbbc11d7498b09378->leave($__internal_3e00894872fcba5b525b371d8116ec4592c1fc6cde16880cbbc11d7498b09378_prof);

        
        $__internal_279ab961c779ef43c2f9730f795ff7ea007a782c53acfce04195d1fd8c1c3e8c->leave($__internal_279ab961c779ef43c2f9730f795ff7ea007a782c53acfce04195d1fd8c1c3e8c_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_f4eef66aa42e869fbb53f62d447c5907648486131ecd0ae1c5553271552deef3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4eef66aa42e869fbb53f62d447c5907648486131ecd0ae1c5553271552deef3->enter($__internal_f4eef66aa42e869fbb53f62d447c5907648486131ecd0ae1c5553271552deef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_7ac4f94561988268b4f5419b5c6b8fb245d995bdd7f161bc43d976681b606bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ac4f94561988268b4f5419b5c6b8fb245d995bdd7f161bc43d976681b606bce->enter($__internal_7ac4f94561988268b4f5419b5c6b8fb245d995bdd7f161bc43d976681b606bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_7ac4f94561988268b4f5419b5c6b8fb245d995bdd7f161bc43d976681b606bce->leave($__internal_7ac4f94561988268b4f5419b5c6b8fb245d995bdd7f161bc43d976681b606bce_prof);

        
        $__internal_f4eef66aa42e869fbb53f62d447c5907648486131ecd0ae1c5553271552deef3->leave($__internal_f4eef66aa42e869fbb53f62d447c5907648486131ecd0ae1c5553271552deef3_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfe24fe0d5783aba160e2dcde374160641489c895851ab30dfc43d72ba43fae5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfe24fe0d5783aba160e2dcde374160641489c895851ab30dfc43d72ba43fae5->enter($__internal_bfe24fe0d5783aba160e2dcde374160641489c895851ab30dfc43d72ba43fae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_431f7ea956dae7a92bedec1cb118b2364e8b8e604edddae9601f8a3f315cf8e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_431f7ea956dae7a92bedec1cb118b2364e8b8e604edddae9601f8a3f315cf8e9->enter($__internal_431f7ea956dae7a92bedec1cb118b2364e8b8e604edddae9601f8a3f315cf8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("section_create");
        echo "\">Create a New Section</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Section Code</th>
          <th>Section Name</th>
          <th>Section Batch</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sections"] ?? $this->getContext($context, "sections")));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 26
            echo "          <tr>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "sectionCode", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "sectionName", array()), "html", null, true);
            echo "</td>
            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["batches"] ?? $this->getContext($context, "batches")));
            foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
                // line 30
                echo "              ";
                if (($this->getAttribute($context["section"], "batchId", array()) == $this->getAttribute($context["batch"], "id", array()))) {
                    // line 31
                    echo "                <td> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["batch"], "batchName", array()), "html", null, true);
                    echo " </td>
              ";
                }
                // line 33
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['batch'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "
            <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("section_view_one", array("section_id" => $this->getAttribute($context["section"], "id", array()))), "html", null, true);
            echo "\">view</button></td>

            ";
            // line 37
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_type"), "method") == "admin")) {
                // line 38
                echo "              <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("section_edit", array("section_id" => $this->getAttribute($context["section"], "id", array()))), "html", null, true);
                echo "\" id=\"editBtn\">edit</button></td>
              <td><a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("section_delete", array("section_id" => $this->getAttribute($context["section"], "id", array()))), "html", null, true);
                echo "\" id=\"deleteBtn\"
                    onclick=\"return confirm('Are You Sure You Want To Delete ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "sectionName", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "sectionCode", array()), "html", null, true);
                echo ")?') \">delete</button></td>
            ";
            }
            // line 42
            echo "          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_431f7ea956dae7a92bedec1cb118b2364e8b8e604edddae9601f8a3f315cf8e9->leave($__internal_431f7ea956dae7a92bedec1cb118b2364e8b8e604edddae9601f8a3f315cf8e9_prof);

        
        $__internal_bfe24fe0d5783aba160e2dcde374160641489c895851ab30dfc43d72ba43fae5->leave($__internal_bfe24fe0d5783aba160e2dcde374160641489c895851ab30dfc43d72ba43fae5_prof);

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
        return array (  177 => 44,  170 => 42,  163 => 40,  159 => 39,  154 => 38,  152 => 37,  147 => 35,  144 => 34,  138 => 33,  132 => 31,  129 => 30,  125 => 29,  121 => 28,  117 => 27,  114 => 26,  110 => 25,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
    <a href=\"{{ path('section_create') }}\">Create a New Section</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Section Code</th>
          <th>Section Name</th>
          <th>Section Batch</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        {% for section in sections %}
          <tr>
            <td>{{ section.sectionCode }}</td>
            <td>{{ section.sectionName }}</td>
            {% for batch in batches %}
              {% if(section.batchId == batch.id) %}
                <td> {{ batch.batchName }} </td>
              {% endif %}
            {% endfor %}

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
", ":section:view.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/section/view.html.twig");
    }
}
