<?php

/* :assessment:type_form.html.twig */
class __TwigTemplate_95fd032d64f3a63abe6b83a90bc55b10a8e30df6abc16c35721259975312b8d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":assessment:type_form.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_253210caca4f6a7a8198db87bf451ef0127c191fe52046b072f681c0038bf64c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_253210caca4f6a7a8198db87bf451ef0127c191fe52046b072f681c0038bf64c->enter($__internal_253210caca4f6a7a8198db87bf451ef0127c191fe52046b072f681c0038bf64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":assessment:type_form.html.twig"));

        $__internal_51e1e6ea4e100343821fc77f2df60a3a0cf6b79ff4dfa923c39ea0d721aea00f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51e1e6ea4e100343821fc77f2df60a3a0cf6b79ff4dfa923c39ea0d721aea00f->enter($__internal_51e1e6ea4e100343821fc77f2df60a3a0cf6b79ff4dfa923c39ea0d721aea00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":assessment:type_form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_253210caca4f6a7a8198db87bf451ef0127c191fe52046b072f681c0038bf64c->leave($__internal_253210caca4f6a7a8198db87bf451ef0127c191fe52046b072f681c0038bf64c_prof);

        
        $__internal_51e1e6ea4e100343821fc77f2df60a3a0cf6b79ff4dfa923c39ea0d721aea00f->leave($__internal_51e1e6ea4e100343821fc77f2df60a3a0cf6b79ff4dfa923c39ea0d721aea00f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4aee52c29fd1f725e17137b7c87bd00605246cc7703c0931e3f2ab4437efe60c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4aee52c29fd1f725e17137b7c87bd00605246cc7703c0931e3f2ab4437efe60c->enter($__internal_4aee52c29fd1f725e17137b7c87bd00605246cc7703c0931e3f2ab4437efe60c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e807e0df8a53f6c13f5e64f65e1bf29fdd072df1a1fd106710b3cd448ab93234 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e807e0df8a53f6c13f5e64f65e1bf29fdd072df1a1fd106710b3cd448ab93234->enter($__internal_e807e0df8a53f6c13f5e64f65e1bf29fdd072df1a1fd106710b3cd448ab93234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Assessment Type") : ("Edit Assessment Type"));
        echo "
";
        
        $__internal_e807e0df8a53f6c13f5e64f65e1bf29fdd072df1a1fd106710b3cd448ab93234->leave($__internal_e807e0df8a53f6c13f5e64f65e1bf29fdd072df1a1fd106710b3cd448ab93234_prof);

        
        $__internal_4aee52c29fd1f725e17137b7c87bd00605246cc7703c0931e3f2ab4437efe60c->leave($__internal_4aee52c29fd1f725e17137b7c87bd00605246cc7703c0931e3f2ab4437efe60c_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_cbad73bd80bf09aa72225c75e0933ecf367db9256452e5f7f0d8172ab95ede49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbad73bd80bf09aa72225c75e0933ecf367db9256452e5f7f0d8172ab95ede49->enter($__internal_cbad73bd80bf09aa72225c75e0933ecf367db9256452e5f7f0d8172ab95ede49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_9763e1bc161c1e89041a9352b95491beadfd9215316b939a3460c20f1076aff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9763e1bc161c1e89041a9352b95491beadfd9215316b939a3460c20f1076aff0->enter($__internal_9763e1bc161c1e89041a9352b95491beadfd9215316b939a3460c20f1076aff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_9763e1bc161c1e89041a9352b95491beadfd9215316b939a3460c20f1076aff0->leave($__internal_9763e1bc161c1e89041a9352b95491beadfd9215316b939a3460c20f1076aff0_prof);

        
        $__internal_cbad73bd80bf09aa72225c75e0933ecf367db9256452e5f7f0d8172ab95ede49->leave($__internal_cbad73bd80bf09aa72225c75e0933ecf367db9256452e5f7f0d8172ab95ede49_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfd04a803d37e60434f6fc13de965befae3e37e59f6e69cd7f9dcf38627506d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfd04a803d37e60434f6fc13de965befae3e37e59f6e69cd7f9dcf38627506d5->enter($__internal_cfd04a803d37e60434f6fc13de965befae3e37e59f6e69cd7f9dcf38627506d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cc986d57b880af3d7afcdd42270bd099abc519304518a033eb6d6e3440d4bc82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc986d57b880af3d7afcdd42270bd099abc519304518a033eb6d6e3440d4bc82->enter($__internal_cc986d57b880af3d7afcdd42270bd099abc519304518a033eb6d6e3440d4bc82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Assessment Type") : ("Edit Assessment Type"));
        echo "</h1>
      <h2>";
        // line 16
        echo twig_escape_filter($this->env, ((array_key_exists("result_message", $context)) ? (($context["result_message"] ?? $this->getContext($context, "result_message"))) : ("")), "html", null, true);
        echo "</h2>

      <label for=\"form[assessment_name]\">Assessment Name</label>
      <input type=\"text\" name=\"form[assessment_name]\" placeholder=\"\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "assessment_name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "assessment_name", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[assessment_worth]\">Assessment Worth</label>
      <input type=\"number\" name=\"form[assessment_worth]\" placeholder=\"\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "assessment_worth", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "assessment_worth", array())) : ("")), "html", null, true);
        echo "\" required />

      <button>";
        // line 24
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Create Assessment Type") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_cc986d57b880af3d7afcdd42270bd099abc519304518a033eb6d6e3440d4bc82->leave($__internal_cc986d57b880af3d7afcdd42270bd099abc519304518a033eb6d6e3440d4bc82_prof);

        
        $__internal_cfd04a803d37e60434f6fc13de965befae3e37e59f6e69cd7f9dcf38627506d5->leave($__internal_cfd04a803d37e60434f6fc13de965befae3e37e59f6e69cd7f9dcf38627506d5_prof);

    }

    // line 31
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_f3ac100d0b78415834806ec2db45e41ed4f89496b1d63a4672599b3a19c73233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3ac100d0b78415834806ec2db45e41ed4f89496b1d63a4672599b3a19c73233->enter($__internal_f3ac100d0b78415834806ec2db45e41ed4f89496b1d63a4672599b3a19c73233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_f0052f2cd40059210ca4491977da624c1edd7082eb9908932dc2307077e5cc33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0052f2cd40059210ca4491977da624c1edd7082eb9908932dc2307077e5cc33->enter($__internal_f0052f2cd40059210ca4491977da624c1edd7082eb9908932dc2307077e5cc33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 32
        echo "  <script type=\"text/javascript\">
    function TypeDiff() {
      (\$('#courseModuleType').val() == 'course') ? \$('#modules').hide() : \$('#courses').hide();
      \$('#' + \$('#courseModuleType').val() + 's').show();
    }

    \$(document).ready(function(){
      TypeDiff();

      \$('#courseModuleType').on(\"change\", function() {
        TypeDiff();
      });
    });
  </script>
";
        
        $__internal_f0052f2cd40059210ca4491977da624c1edd7082eb9908932dc2307077e5cc33->leave($__internal_f0052f2cd40059210ca4491977da624c1edd7082eb9908932dc2307077e5cc33_prof);

        
        $__internal_f3ac100d0b78415834806ec2db45e41ed4f89496b1d63a4672599b3a19c73233->leave($__internal_f3ac100d0b78415834806ec2db45e41ed4f89496b1d63a4672599b3a19c73233_prof);

    }

    public function getTemplateName()
    {
        return ":assessment:type_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 32,  137 => 31,  121 => 24,  116 => 22,  110 => 19,  104 => 16,  100 => 15,  96 => 13,  87 => 12,  74 => 7,  65 => 6,  52 => 3,  43 => 2,  11 => 1,);
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
  {{ (mode == 'new') ? 'New Assessment Type' : 'Edit Assessment Type' }}
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">{{ (mode == 'new') ? 'New Assessment Type' : 'Edit Assessment Type' }}</h1>
      <h2>{{ result_message is defined ? result_message : '' }}</h2>

      <label for=\"form[assessment_name]\">Assessment Name</label>
      <input type=\"text\" name=\"form[assessment_name]\" placeholder=\"\" value=\"{{ form.assessment_name is defined ? form.assessment_name : '' }}\" required />

      <label for=\"form[assessment_worth]\">Assessment Worth</label>
      <input type=\"number\" name=\"form[assessment_worth]\" placeholder=\"\" value=\"{{ form.assessment_worth is defined ? form.assessment_worth : '' }}\" required />

      <button>{{ (mode == 'new') ? 'Create Assessment Type' : 'Save Changes' }}</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}

{% block javascript %}
  <script type=\"text/javascript\">
    function TypeDiff() {
      (\$('#courseModuleType').val() == 'course') ? \$('#modules').hide() : \$('#courses').hide();
      \$('#' + \$('#courseModuleType').val() + 's').show();
    }

    \$(document).ready(function(){
      TypeDiff();

      \$('#courseModuleType').on(\"change\", function() {
        TypeDiff();
      });
    });
  </script>
{% endblock %}
", ":assessment:type_form.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/assessment/type_form.html.twig");
    }
}
