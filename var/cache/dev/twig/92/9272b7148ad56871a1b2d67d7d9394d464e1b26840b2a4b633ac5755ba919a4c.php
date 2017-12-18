<?php

/* :module:view_one.html.twig */
class __TwigTemplate_9dd54548fd46f62b9274c02e93ad07b5d971c56e8cfbcc0996c6b2c34d03bc9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":module:view_one.html.twig", 1);
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
        $__internal_8d199cba759169f383bae6569d0da2bb51f8d4af80dbf0bc3274181b897e6e6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d199cba759169f383bae6569d0da2bb51f8d4af80dbf0bc3274181b897e6e6e->enter($__internal_8d199cba759169f383bae6569d0da2bb51f8d4af80dbf0bc3274181b897e6e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":module:view_one.html.twig"));

        $__internal_4e8290eb5c6c2ab8942314a3fbb80f15a0b4b3c6fb3bb281ed12e2a39a50ac9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e8290eb5c6c2ab8942314a3fbb80f15a0b4b3c6fb3bb281ed12e2a39a50ac9a->enter($__internal_4e8290eb5c6c2ab8942314a3fbb80f15a0b4b3c6fb3bb281ed12e2a39a50ac9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":module:view_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d199cba759169f383bae6569d0da2bb51f8d4af80dbf0bc3274181b897e6e6e->leave($__internal_8d199cba759169f383bae6569d0da2bb51f8d4af80dbf0bc3274181b897e6e6e_prof);

        
        $__internal_4e8290eb5c6c2ab8942314a3fbb80f15a0b4b3c6fb3bb281ed12e2a39a50ac9a->leave($__internal_4e8290eb5c6c2ab8942314a3fbb80f15a0b4b3c6fb3bb281ed12e2a39a50ac9a_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c50a77ce8fce51fe5707a63007be85aaf4431fe3cf90a99fddab68bb84896c03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c50a77ce8fce51fe5707a63007be85aaf4431fe3cf90a99fddab68bb84896c03->enter($__internal_c50a77ce8fce51fe5707a63007be85aaf4431fe3cf90a99fddab68bb84896c03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_244fdebd7159b89145d3145f456192653ac1920a0ffc201e8d0e7621f72b1d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_244fdebd7159b89145d3145f456192653ac1920a0ffc201e8d0e7621f72b1d0c->enter($__internal_244fdebd7159b89145d3145f456192653ac1920a0ffc201e8d0e7621f72b1d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "moduleCode", array()), "html", null, true);
        echo "
";
        
        $__internal_244fdebd7159b89145d3145f456192653ac1920a0ffc201e8d0e7621f72b1d0c->leave($__internal_244fdebd7159b89145d3145f456192653ac1920a0ffc201e8d0e7621f72b1d0c_prof);

        
        $__internal_c50a77ce8fce51fe5707a63007be85aaf4431fe3cf90a99fddab68bb84896c03->leave($__internal_c50a77ce8fce51fe5707a63007be85aaf4431fe3cf90a99fddab68bb84896c03_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_d00036263539d7a6e6605974df417971e11b9bd8d4cb29589dc22e33d6467f57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d00036263539d7a6e6605974df417971e11b9bd8d4cb29589dc22e33d6467f57->enter($__internal_d00036263539d7a6e6605974df417971e11b9bd8d4cb29589dc22e33d6467f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_567bc0417a314ae6f29a7419e356756bb771a090ec8a63ace1ce852b41573c01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_567bc0417a314ae6f29a7419e356756bb771a090ec8a63ace1ce852b41573c01->enter($__internal_567bc0417a314ae6f29a7419e356756bb771a090ec8a63ace1ce852b41573c01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>
</style>
";
        
        $__internal_567bc0417a314ae6f29a7419e356756bb771a090ec8a63ace1ce852b41573c01->leave($__internal_567bc0417a314ae6f29a7419e356756bb771a090ec8a63ace1ce852b41573c01_prof);

        
        $__internal_d00036263539d7a6e6605974df417971e11b9bd8d4cb29589dc22e33d6467f57->leave($__internal_d00036263539d7a6e6605974df417971e11b9bd8d4cb29589dc22e33d6467f57_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_03f143c068e35fe84da5d91bece926aa00457a8ca8970a5b8f4f314eb57d06ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03f143c068e35fe84da5d91bece926aa00457a8ca8970a5b8f4f314eb57d06ba->enter($__internal_03f143c068e35fe84da5d91bece926aa00457a8ca8970a5b8f4f314eb57d06ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3a090645da59c57610220675e45f79552e13a3aec2650d76a0ee7b78cb0ede3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a090645da59c57610220675e45f79552e13a3aec2650d76a0ee7b78cb0ede3f->enter($__internal_3a090645da59c57610220675e45f79552e13a3aec2650d76a0ee7b78cb0ede3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "moduleName", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "moduleCode", array()), "html", null, true);
        echo ")</h1>

      <table>
        <tr>
          <td>Module Code:</td>
          <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "moduleCode", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Module Name:</td>
          <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "moduleName", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Module Credit Hour:</td>
          <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "moduleCreditHour", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Module Duration:</td>
          <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "moduleDuration", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Module School:</td>
          <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["school"] ?? $this->getContext($context, "school")), "schoolName", array()), "html", null, true);
        echo "</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
";
        
        $__internal_3a090645da59c57610220675e45f79552e13a3aec2650d76a0ee7b78cb0ede3f->leave($__internal_3a090645da59c57610220675e45f79552e13a3aec2650d76a0ee7b78cb0ede3f_prof);

        
        $__internal_03f143c068e35fe84da5d91bece926aa00457a8ca8970a5b8f4f314eb57d06ba->leave($__internal_03f143c068e35fe84da5d91bece926aa00457a8ca8970a5b8f4f314eb57d06ba_prof);

    }

    public function getTemplateName()
    {
        return ":module:view_one.html.twig";
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
  {{ module.moduleCode }}
{% endblock %}

{% block stylesheet %}
<style>
</style>
{% endblock %}

{% block body %}
  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">{{ module.moduleName }} ({{ module.moduleCode }})</h1>

      <table>
        <tr>
          <td>Module Code:</td>
          <td>{{ module.moduleCode }}</td>
        </tr>

        <tr>
          <td>Module Name:</td>
          <td>{{ module.moduleName }}</td>
        </tr>

        <tr>
          <td>Module Credit Hour:</td>
          <td>{{ module.moduleCreditHour }}</td>
        </tr>

        <tr>
          <td>Module Duration:</td>
          <td>{{ module.moduleDuration }}</td>
        </tr>

        <tr>
          <td>Module School:</td>
          <td>{{ school.schoolName }}</td>
        </tr>
      </table>
    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
{% endblock %}
", ":module:view_one.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/module/view_one.html.twig");
    }
}
