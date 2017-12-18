<?php

/* :curriculum:view_one.html.twig */
class __TwigTemplate_f2b751133a085fdf9fc32141f99b6a2e74a1cbdd9cd8238837fcc614e150e673 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":curriculum:view_one.html.twig", 1);
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
        $__internal_2808b87816f2289a7657792d8f8bc1612f935569fc5760b5428b311980e21294 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2808b87816f2289a7657792d8f8bc1612f935569fc5760b5428b311980e21294->enter($__internal_2808b87816f2289a7657792d8f8bc1612f935569fc5760b5428b311980e21294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":curriculum:view_one.html.twig"));

        $__internal_2da56668bfc6d781745b706a3779bcb21a3379f7103bd0b856799a70d186118f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2da56668bfc6d781745b706a3779bcb21a3379f7103bd0b856799a70d186118f->enter($__internal_2da56668bfc6d781745b706a3779bcb21a3379f7103bd0b856799a70d186118f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":curriculum:view_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2808b87816f2289a7657792d8f8bc1612f935569fc5760b5428b311980e21294->leave($__internal_2808b87816f2289a7657792d8f8bc1612f935569fc5760b5428b311980e21294_prof);

        
        $__internal_2da56668bfc6d781745b706a3779bcb21a3379f7103bd0b856799a70d186118f->leave($__internal_2da56668bfc6d781745b706a3779bcb21a3379f7103bd0b856799a70d186118f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd9a23d5d11c12495c4da2765dfa5cb3d312fb0d8fce24e522a5f716807418dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd9a23d5d11c12495c4da2765dfa5cb3d312fb0d8fce24e522a5f716807418dd->enter($__internal_dd9a23d5d11c12495c4da2765dfa5cb3d312fb0d8fce24e522a5f716807418dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4986f646b882117a5dc729aa2b60d04045641a303261ab7edfd5ce23a8a504a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4986f646b882117a5dc729aa2b60d04045641a303261ab7edfd5ce23a8a504a4->enter($__internal_4986f646b882117a5dc729aa2b60d04045641a303261ab7edfd5ce23a8a504a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["curriculum"] ?? $this->getContext($context, "curriculum")), "curriculumCode", array()), "html", null, true);
        echo "
";
        
        $__internal_4986f646b882117a5dc729aa2b60d04045641a303261ab7edfd5ce23a8a504a4->leave($__internal_4986f646b882117a5dc729aa2b60d04045641a303261ab7edfd5ce23a8a504a4_prof);

        
        $__internal_dd9a23d5d11c12495c4da2765dfa5cb3d312fb0d8fce24e522a5f716807418dd->leave($__internal_dd9a23d5d11c12495c4da2765dfa5cb3d312fb0d8fce24e522a5f716807418dd_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_23995440d081b6e83002ed65af19880082b10245c6ecd8a9eecde29fd6a72bc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23995440d081b6e83002ed65af19880082b10245c6ecd8a9eecde29fd6a72bc0->enter($__internal_23995440d081b6e83002ed65af19880082b10245c6ecd8a9eecde29fd6a72bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_614b72cf725d50b69f4dc0865b9b90199b463b7eecfb9db960559cff91757609 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_614b72cf725d50b69f4dc0865b9b90199b463b7eecfb9db960559cff91757609->enter($__internal_614b72cf725d50b69f4dc0865b9b90199b463b7eecfb9db960559cff91757609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>
</style>
";
        
        $__internal_614b72cf725d50b69f4dc0865b9b90199b463b7eecfb9db960559cff91757609->leave($__internal_614b72cf725d50b69f4dc0865b9b90199b463b7eecfb9db960559cff91757609_prof);

        
        $__internal_23995440d081b6e83002ed65af19880082b10245c6ecd8a9eecde29fd6a72bc0->leave($__internal_23995440d081b6e83002ed65af19880082b10245c6ecd8a9eecde29fd6a72bc0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_510ab7bdbe8195e14c20311ac658ee4b39d9c94e41ffbaf8e9391551c49c6bc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_510ab7bdbe8195e14c20311ac658ee4b39d9c94e41ffbaf8e9391551c49c6bc7->enter($__internal_510ab7bdbe8195e14c20311ac658ee4b39d9c94e41ffbaf8e9391551c49c6bc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_28f0a5877e047bed243cdec7f5175acc90ade72b6a57b748fd0c595c365119fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28f0a5877e047bed243cdec7f5175acc90ade72b6a57b748fd0c595c365119fb->enter($__internal_28f0a5877e047bed243cdec7f5175acc90ade72b6a57b748fd0c595c365119fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["curriculum"] ?? $this->getContext($context, "curriculum")), "curriculumName", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["curriculum"] ?? $this->getContext($context, "curriculum")), "curriculumCode", array()), "html", null, true);
        echo ")</h1>

      <table>
        <tr>
          <td>Curriculum Code:</td>
          <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["curriculum"] ?? $this->getContext($context, "curriculum")), "curriculumCode", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Curriculum Name:</td>
          <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["curriculum"] ?? $this->getContext($context, "curriculum")), "curriculumName", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Curriculum Type:</td>
          <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute(($context["curriculum"] ?? $this->getContext($context, "curriculum")), "curriculumType", array())), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Curriculum School:</td>
          <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["school"] ?? $this->getContext($context, "school")), "schoolName", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Curriculum Grade System:</td>
          <td>";
        // line 40
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["grade_system"] ?? null), "gradeSystemName", array(), "any", true, true)) ? ($this->getAttribute(($context["grade_system"] ?? $this->getContext($context, "grade_system")), "gradeSystemName", array())) : ("")), "html", null, true);
        echo "</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
";
        
        $__internal_28f0a5877e047bed243cdec7f5175acc90ade72b6a57b748fd0c595c365119fb->leave($__internal_28f0a5877e047bed243cdec7f5175acc90ade72b6a57b748fd0c595c365119fb_prof);

        
        $__internal_510ab7bdbe8195e14c20311ac658ee4b39d9c94e41ffbaf8e9391551c49c6bc7->leave($__internal_510ab7bdbe8195e14c20311ac658ee4b39d9c94e41ffbaf8e9391551c49c6bc7_prof);

    }

    public function getTemplateName()
    {
        return ":curriculum:view_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 40,  133 => 35,  125 => 30,  117 => 25,  109 => 20,  99 => 15,  94 => 12,  85 => 11,  73 => 7,  64 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  {{ curriculum.curriculumCode }}
{% endblock %}

{% block stylesheet %}
<style>
</style>
{% endblock %}

{% block body %}
  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">{{ curriculum.curriculumName }} ({{ curriculum.curriculumCode }})</h1>

      <table>
        <tr>
          <td>Curriculum Code:</td>
          <td>{{ curriculum.curriculumCode }}</td>
        </tr>

        <tr>
          <td>Curriculum Name:</td>
          <td>{{ curriculum.curriculumName }}</td>
        </tr>

        <tr>
          <td>Curriculum Type:</td>
          <td>{{ curriculum.curriculumType | capitalize }}</td>
        </tr>

        <tr>
          <td>Curriculum School:</td>
          <td>{{ school.schoolName }}</td>
        </tr>

        <tr>
          <td>Curriculum Grade System:</td>
          <td>{{ grade_system.gradeSystemName is defined ? grade_system.gradeSystemName : '' }}</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
{% endblock %}
", ":curriculum:view_one.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/curriculum/view_one.html.twig");
    }
}
