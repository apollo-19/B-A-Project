<?php

/* :batch:view.html.twig */
class __TwigTemplate_77442b98a5e7f1560ab7d1fd2b0185913e8b6a92a9abe5077f27b57a3d01beca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":batch:view.html.twig", 1);
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
        $__internal_f220e860f09c905d791d70bcf062e2305921aa2cac5555b98ca84db97219710b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f220e860f09c905d791d70bcf062e2305921aa2cac5555b98ca84db97219710b->enter($__internal_f220e860f09c905d791d70bcf062e2305921aa2cac5555b98ca84db97219710b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":batch:view.html.twig"));

        $__internal_5bb5033a3d79b9fb7fbd4b7db192a2e54c340d7323d32a1c182be74bfea39acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bb5033a3d79b9fb7fbd4b7db192a2e54c340d7323d32a1c182be74bfea39acb->enter($__internal_5bb5033a3d79b9fb7fbd4b7db192a2e54c340d7323d32a1c182be74bfea39acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":batch:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f220e860f09c905d791d70bcf062e2305921aa2cac5555b98ca84db97219710b->leave($__internal_f220e860f09c905d791d70bcf062e2305921aa2cac5555b98ca84db97219710b_prof);

        
        $__internal_5bb5033a3d79b9fb7fbd4b7db192a2e54c340d7323d32a1c182be74bfea39acb->leave($__internal_5bb5033a3d79b9fb7fbd4b7db192a2e54c340d7323d32a1c182be74bfea39acb_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_74ffc4677a5a35c966dc9b3ddbda4f62950ea6bc5151cd286da529f64fea83aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74ffc4677a5a35c966dc9b3ddbda4f62950ea6bc5151cd286da529f64fea83aa->enter($__internal_74ffc4677a5a35c966dc9b3ddbda4f62950ea6bc5151cd286da529f64fea83aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bf4724dec0b8948d4a350b44322f7bcc4866473d62b6f7af20f936994e0ce3d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4724dec0b8948d4a350b44322f7bcc4866473d62b6f7af20f936994e0ce3d7->enter($__internal_bf4724dec0b8948d4a350b44322f7bcc4866473d62b6f7af20f936994e0ce3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Batch View
";
        
        $__internal_bf4724dec0b8948d4a350b44322f7bcc4866473d62b6f7af20f936994e0ce3d7->leave($__internal_bf4724dec0b8948d4a350b44322f7bcc4866473d62b6f7af20f936994e0ce3d7_prof);

        
        $__internal_74ffc4677a5a35c966dc9b3ddbda4f62950ea6bc5151cd286da529f64fea83aa->leave($__internal_74ffc4677a5a35c966dc9b3ddbda4f62950ea6bc5151cd286da529f64fea83aa_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_57214f2d15e16c8a2e301739cd6456d1dc93e3239ee9ffb38f48fd676c7310f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57214f2d15e16c8a2e301739cd6456d1dc93e3239ee9ffb38f48fd676c7310f1->enter($__internal_57214f2d15e16c8a2e301739cd6456d1dc93e3239ee9ffb38f48fd676c7310f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_354b71a8578a5cc25c292e525b6151ed7b619708f1fd59f947ff1ba4d9bed817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354b71a8578a5cc25c292e525b6151ed7b619708f1fd59f947ff1ba4d9bed817->enter($__internal_354b71a8578a5cc25c292e525b6151ed7b619708f1fd59f947ff1ba4d9bed817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_354b71a8578a5cc25c292e525b6151ed7b619708f1fd59f947ff1ba4d9bed817->leave($__internal_354b71a8578a5cc25c292e525b6151ed7b619708f1fd59f947ff1ba4d9bed817_prof);

        
        $__internal_57214f2d15e16c8a2e301739cd6456d1dc93e3239ee9ffb38f48fd676c7310f1->leave($__internal_57214f2d15e16c8a2e301739cd6456d1dc93e3239ee9ffb38f48fd676c7310f1_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc1f0a3a475fd0085433a9777f64cda9c2f80d225981044875f94b4d9b32421e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc1f0a3a475fd0085433a9777f64cda9c2f80d225981044875f94b4d9b32421e->enter($__internal_fc1f0a3a475fd0085433a9777f64cda9c2f80d225981044875f94b4d9b32421e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cea871ffcc2cb1102c8dd92d1e4f192bbf487d963ff61d8a2dc63c5d3c558944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea871ffcc2cb1102c8dd92d1e4f192bbf487d963ff61d8a2dc63c5d3c558944->enter($__internal_cea871ffcc2cb1102c8dd92d1e4f192bbf487d963ff61d8a2dc63c5d3c558944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("batch_create");
        echo "\">Create a New Batch</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Batch Code</th>
          <th>Batch Name</th>
          <th>Batch Year</th>
          <th>Batch School</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["batchs"] ?? $this->getContext($context, "batchs")));
        foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
            // line 27
            echo "          <tr>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["batch"], "batchCode", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["batch"], "batchName", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["batch"], "batchYear", array()), "html", null, true);
            echo "</td>
            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["schools"] ?? $this->getContext($context, "schools")));
            foreach ($context['_seq'] as $context["_key"] => $context["school"]) {
                // line 32
                echo "              ";
                if (($this->getAttribute($context["batch"], "schoolId", array()) == $this->getAttribute($context["school"], "id", array()))) {
                    // line 33
                    echo "                <td> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["school"], "schoolName", array()), "html", null, true);
                    echo " </td>
              ";
                }
                // line 35
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['school'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "
            <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("batch_view_one", array("batch_id" => $this->getAttribute($context["batch"], "id", array()))), "html", null, true);
            echo "\">view</button></td>
            <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("batch_edit", array("batch_id" => $this->getAttribute($context["batch"], "id", array()))), "html", null, true);
            echo "\" id=\"editBtn\">edit</button></td>
            <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("batch_delete", array("batch_id" => $this->getAttribute($context["batch"], "id", array()))), "html", null, true);
            echo "\" id=\"deleteBtn\"
                  onclick=\"return confirm('Are You Sure You Want To Delete ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["batch"], "batchName", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["batch"], "batchCode", array()), "html", null, true);
            echo ")?') \">delete</button></td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['batch'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_cea871ffcc2cb1102c8dd92d1e4f192bbf487d963ff61d8a2dc63c5d3c558944->leave($__internal_cea871ffcc2cb1102c8dd92d1e4f192bbf487d963ff61d8a2dc63c5d3c558944_prof);

        
        $__internal_fc1f0a3a475fd0085433a9777f64cda9c2f80d225981044875f94b4d9b32421e->leave($__internal_fc1f0a3a475fd0085433a9777f64cda9c2f80d225981044875f94b4d9b32421e_prof);

    }

    public function getTemplateName()
    {
        return ":batch:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 43,  164 => 40,  160 => 39,  156 => 38,  152 => 37,  149 => 36,  143 => 35,  137 => 33,  134 => 32,  130 => 31,  126 => 30,  122 => 29,  118 => 28,  115 => 27,  111 => 26,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  Batch View
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container\" id=\"view_container\">
    <a href=\"{{ path('batch_create') }}\">Create a New Batch</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Batch Code</th>
          <th>Batch Name</th>
          <th>Batch Year</th>
          <th>Batch School</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        {% for batch in batchs %}
          <tr>
            <td>{{ batch.batchCode }}</td>
            <td>{{ batch.batchName }}</td>
            <td>{{ batch.batchYear }}</td>
            {% for school in schools %}
              {% if(batch.schoolId == school.id) %}
                <td> {{ school.schoolName }} </td>
              {% endif %}
            {% endfor %}

            <td><a href=\"{{ path('batch_view_one', {'batch_id': batch.id}) }}\">view</button></td>
            <td><a href=\"{{ path('batch_edit', {'batch_id': batch.id}) }}\" id=\"editBtn\">edit</button></td>
            <td><a href=\"{{ path('batch_delete', {'batch_id': batch.id}) }}\" id=\"deleteBtn\"
                  onclick=\"return confirm('Are You Sure You Want To Delete {{ batch.batchName }} ({{ batch.batchCode }})?') \">delete</button></td>
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", ":batch:view.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/batch/view.html.twig");
    }
}
