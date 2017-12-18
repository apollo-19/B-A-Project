<?php

/* :grade:view.html.twig */
class __TwigTemplate_e46cb12535cd3193694591b7be62fe17546d90353030eb328101f501cf599d46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":grade:view.html.twig", 1);
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
        $__internal_b528ffa93e7af6904bee47ff06e634f0060e4ccd728e6acd275f5c5d97279702 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b528ffa93e7af6904bee47ff06e634f0060e4ccd728e6acd275f5c5d97279702->enter($__internal_b528ffa93e7af6904bee47ff06e634f0060e4ccd728e6acd275f5c5d97279702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":grade:view.html.twig"));

        $__internal_7cbee1971255ba8f1b453580fecbe61a7c373af1e3179ae05b0c7c5d873d1b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cbee1971255ba8f1b453580fecbe61a7c373af1e3179ae05b0c7c5d873d1b26->enter($__internal_7cbee1971255ba8f1b453580fecbe61a7c373af1e3179ae05b0c7c5d873d1b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":grade:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b528ffa93e7af6904bee47ff06e634f0060e4ccd728e6acd275f5c5d97279702->leave($__internal_b528ffa93e7af6904bee47ff06e634f0060e4ccd728e6acd275f5c5d97279702_prof);

        
        $__internal_7cbee1971255ba8f1b453580fecbe61a7c373af1e3179ae05b0c7c5d873d1b26->leave($__internal_7cbee1971255ba8f1b453580fecbe61a7c373af1e3179ae05b0c7c5d873d1b26_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c50e62f31d9c2d327a6b133411b47960160712620e73f869dd1c6aee29633cc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c50e62f31d9c2d327a6b133411b47960160712620e73f869dd1c6aee29633cc0->enter($__internal_c50e62f31d9c2d327a6b133411b47960160712620e73f869dd1c6aee29633cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_14c4a6a6a49cbc271b5d3db231dc471a4961b203712c6f1a71c37f273dc1eeb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14c4a6a6a49cbc271b5d3db231dc471a4961b203712c6f1a71c37f273dc1eeb3->enter($__internal_14c4a6a6a49cbc271b5d3db231dc471a4961b203712c6f1a71c37f273dc1eeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Grade View
";
        
        $__internal_14c4a6a6a49cbc271b5d3db231dc471a4961b203712c6f1a71c37f273dc1eeb3->leave($__internal_14c4a6a6a49cbc271b5d3db231dc471a4961b203712c6f1a71c37f273dc1eeb3_prof);

        
        $__internal_c50e62f31d9c2d327a6b133411b47960160712620e73f869dd1c6aee29633cc0->leave($__internal_c50e62f31d9c2d327a6b133411b47960160712620e73f869dd1c6aee29633cc0_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_1457b12ca8b531d660e44f7e8607347f3ef6d3d2fece29cff74ac64832a2989e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1457b12ca8b531d660e44f7e8607347f3ef6d3d2fece29cff74ac64832a2989e->enter($__internal_1457b12ca8b531d660e44f7e8607347f3ef6d3d2fece29cff74ac64832a2989e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_a275d88b51a621ac767e127c3ba93d79d8fddb678379243a4476abe70d2f1e01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a275d88b51a621ac767e127c3ba93d79d8fddb678379243a4476abe70d2f1e01->enter($__internal_a275d88b51a621ac767e127c3ba93d79d8fddb678379243a4476abe70d2f1e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_a275d88b51a621ac767e127c3ba93d79d8fddb678379243a4476abe70d2f1e01->leave($__internal_a275d88b51a621ac767e127c3ba93d79d8fddb678379243a4476abe70d2f1e01_prof);

        
        $__internal_1457b12ca8b531d660e44f7e8607347f3ef6d3d2fece29cff74ac64832a2989e->leave($__internal_1457b12ca8b531d660e44f7e8607347f3ef6d3d2fece29cff74ac64832a2989e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d9578a1eadd3393dd260c12da7202b42a2537f0d0d0c50d5e3408bf84bd425a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d9578a1eadd3393dd260c12da7202b42a2537f0d0d0c50d5e3408bf84bd425a->enter($__internal_4d9578a1eadd3393dd260c12da7202b42a2537f0d0d0c50d5e3408bf84bd425a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf954928dc8e0d63e68c8311cef8ea61024b5da0fe6ead57fba0cc8b258a28b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf954928dc8e0d63e68c8311cef8ea61024b5da0fe6ead57fba0cc8b258a28b9->enter($__internal_cf954928dc8e0d63e68c8311cef8ea61024b5da0fe6ead57fba0cc8b258a28b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grade_create");
        echo "\">New Grade</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Range (%)</th>
          <th>Grade</th>
          <th>Grading System</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["grades"] ?? $this->getContext($context, "grades")));
        foreach ($context['_seq'] as $context["_key"] => $context["grade"]) {
            // line 26
            echo "          <tr>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, (((("(" . $this->getAttribute($context["grade"], "startPoint", array())) . " - ") . $this->getAttribute($context["grade"], "endPoint", array())) . ")"), "html", null, true);
            echo "</td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["grade"], "grade", array()), "html", null, true);
            echo "</td>
            <td>
              ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["grade_systems"] ?? $this->getContext($context, "grade_systems")));
            foreach ($context['_seq'] as $context["_key"] => $context["grade_system"]) {
                // line 31
                echo "                ";
                if (($this->getAttribute($context["grade_system"], "id", array()) == $this->getAttribute($context["grade"], "gradeSystemId", array()))) {
                    // line 32
                    echo "                  ";
                    echo twig_escape_filter($this->env, (((twig_upper_filter($this->env, $this->getAttribute($context["grade_system"], "gradeSystemCode", array())) . " (") . $this->getAttribute($context["grade_system"], "gradeSystemName", array())) . ")"), "html", null, true);
                    echo "
                ";
                }
                // line 34
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grade_system'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            </td>

            <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grade_edit", array("grade_id" => $this->getAttribute($context["grade"], "id", array()))), "html", null, true);
            echo "\" id=\"editBtn\">edit</button></td>
            <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("grade_delete", array("grade_id" => $this->getAttribute($context["grade"], "id", array()))), "html", null, true);
            echo "\" id=\"deleteBtn\"
                  onclick=\"return confirm('Are You Sure You Want To Delete Grade ";
            // line 39
            echo twig_escape_filter($this->env, ((((($this->getAttribute($context["grade"], "startPoint", array()) . " - ") . $this->getAttribute($context["grade"], "endPoint", array())) . " (") . $this->getAttribute($context["grade"], "grade", array())) . ")"), "html", null, true);
            echo "?') \">delete</button></td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grade'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_cf954928dc8e0d63e68c8311cef8ea61024b5da0fe6ead57fba0cc8b258a28b9->leave($__internal_cf954928dc8e0d63e68c8311cef8ea61024b5da0fe6ead57fba0cc8b258a28b9_prof);

        
        $__internal_4d9578a1eadd3393dd260c12da7202b42a2537f0d0d0c50d5e3408bf84bd425a->leave($__internal_4d9578a1eadd3393dd260c12da7202b42a2537f0d0d0c50d5e3408bf84bd425a_prof);

    }

    public function getTemplateName()
    {
        return ":grade:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 42,  157 => 39,  153 => 38,  149 => 37,  145 => 35,  139 => 34,  133 => 32,  130 => 31,  126 => 30,  121 => 28,  117 => 27,  114 => 26,  110 => 25,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  Grade View
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container\" id=\"view_container\">
    <a href=\"{{ path('grade_create') }}\">New Grade</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Range (%)</th>
          <th>Grade</th>
          <th>Grading System</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        {% for grade in grades %}
          <tr>
            <td>{{ '(' ~ grade.startPoint ~ ' - ' ~ grade.endPoint ~')' }}</td>
            <td>{{ grade.grade }}</td>
            <td>
              {% for grade_system in grade_systems %}
                {% if grade_system.id == grade.gradeSystemId %}
                  {{ grade_system.gradeSystemCode | upper ~ ' (' ~ grade_system.gradeSystemName ~ ')' }}
                {% endif %}
              {% endfor %}
            </td>

            <td><a href=\"{{ path('grade_edit', {'grade_id': grade.id}) }}\" id=\"editBtn\">edit</button></td>
            <td><a href=\"{{ path('grade_delete', {'grade_id': grade.id}) }}\" id=\"deleteBtn\"
                  onclick=\"return confirm('Are You Sure You Want To Delete Grade {{ grade.startPoint ~ ' - ' ~ grade.endPoint ~ ' (' ~ grade.grade ~ ')' }}?') \">delete</button></td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", ":grade:view.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/grade/view.html.twig");
    }
}
