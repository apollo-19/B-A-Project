<?php

/* :course:index.html.twig */
class __TwigTemplate_302bc83633573d59a6265da2a0047a58f92236a2674db799cceb21cde603f56e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":course:index.html.twig", 1);
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
        $__internal_ca30c3a6447327f4ff4c1405faa813f777ed5c2871e5a4d299f7fd91ca7875bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca30c3a6447327f4ff4c1405faa813f777ed5c2871e5a4d299f7fd91ca7875bc->enter($__internal_ca30c3a6447327f4ff4c1405faa813f777ed5c2871e5a4d299f7fd91ca7875bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":course:index.html.twig"));

        $__internal_12fcf464937b56eb6b31fae162e4f76f97e2a35fc48324d7836b073abdeae174 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12fcf464937b56eb6b31fae162e4f76f97e2a35fc48324d7836b073abdeae174->enter($__internal_12fcf464937b56eb6b31fae162e4f76f97e2a35fc48324d7836b073abdeae174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":course:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca30c3a6447327f4ff4c1405faa813f777ed5c2871e5a4d299f7fd91ca7875bc->leave($__internal_ca30c3a6447327f4ff4c1405faa813f777ed5c2871e5a4d299f7fd91ca7875bc_prof);

        
        $__internal_12fcf464937b56eb6b31fae162e4f76f97e2a35fc48324d7836b073abdeae174->leave($__internal_12fcf464937b56eb6b31fae162e4f76f97e2a35fc48324d7836b073abdeae174_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9049f35be24ee50da5c36e39833cc2eb5a35869d7ce0e01a954927e9a8cba771 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9049f35be24ee50da5c36e39833cc2eb5a35869d7ce0e01a954927e9a8cba771->enter($__internal_9049f35be24ee50da5c36e39833cc2eb5a35869d7ce0e01a954927e9a8cba771_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cdcf4f3f251046500499ffd4189bb1cf86cc4229d600d231fc136fc6dadfa03d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdcf4f3f251046500499ffd4189bb1cf86cc4229d600d231fc136fc6dadfa03d->enter($__internal_cdcf4f3f251046500499ffd4189bb1cf86cc4229d600d231fc136fc6dadfa03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Teacher
";
        
        $__internal_cdcf4f3f251046500499ffd4189bb1cf86cc4229d600d231fc136fc6dadfa03d->leave($__internal_cdcf4f3f251046500499ffd4189bb1cf86cc4229d600d231fc136fc6dadfa03d_prof);

        
        $__internal_9049f35be24ee50da5c36e39833cc2eb5a35869d7ce0e01a954927e9a8cba771->leave($__internal_9049f35be24ee50da5c36e39833cc2eb5a35869d7ce0e01a954927e9a8cba771_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_704c129ce539aee489d9279d707baf7c87dd562b84b88df700bf023c8a1dfaa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_704c129ce539aee489d9279d707baf7c87dd562b84b88df700bf023c8a1dfaa1->enter($__internal_704c129ce539aee489d9279d707baf7c87dd562b84b88df700bf023c8a1dfaa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_5980d757ade8c6bfa2c41cdbda949d944ca7e1a5e0064d5080afda83e8cac00d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5980d757ade8c6bfa2c41cdbda949d944ca7e1a5e0064d5080afda83e8cac00d->enter($__internal_5980d757ade8c6bfa2c41cdbda949d944ca7e1a5e0064d5080afda83e8cac00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_5980d757ade8c6bfa2c41cdbda949d944ca7e1a5e0064d5080afda83e8cac00d->leave($__internal_5980d757ade8c6bfa2c41cdbda949d944ca7e1a5e0064d5080afda83e8cac00d_prof);

        
        $__internal_704c129ce539aee489d9279d707baf7c87dd562b84b88df700bf023c8a1dfaa1->leave($__internal_704c129ce539aee489d9279d707baf7c87dd562b84b88df700bf023c8a1dfaa1_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_27849b5a92935445efc961875e423884ad4871d6bf7a19d0fd7dfe49ad9d24f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27849b5a92935445efc961875e423884ad4871d6bf7a19d0fd7dfe49ad9d24f8->enter($__internal_27849b5a92935445efc961875e423884ad4871d6bf7a19d0fd7dfe49ad9d24f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f1ad99362d8f96b0cdb8b183d74ae4474b4c7faac8345519449b5597500ff790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ad99362d8f96b0cdb8b183d74ae4474b4c7faac8345519449b5597500ff790->enter($__internal_f1ad99362d8f96b0cdb8b183d74ae4474b4c7faac8345519449b5597500ff790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\">
    <article class=\"tasks\">
      <div>
        <a href=\"\"><img src=\"images/icons/.png\" draggable=\"false\" /></a>

        <a href=\"\">Schools</a>
      </div>
    </article>
    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_f1ad99362d8f96b0cdb8b183d74ae4474b4c7faac8345519449b5597500ff790->leave($__internal_f1ad99362d8f96b0cdb8b183d74ae4474b4c7faac8345519449b5597500ff790_prof);

        
        $__internal_27849b5a92935445efc961875e423884ad4871d6bf7a19d0fd7dfe49ad9d24f8->leave($__internal_27849b5a92935445efc961875e423884ad4871d6bf7a19d0fd7dfe49ad9d24f8_prof);

    }

    public function getTemplateName()
    {
        return ":course:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  Teacher
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container\">
    <article class=\"tasks\">
      <div>
        <a href=\"\"><img src=\"images/icons/.png\" draggable=\"false\" /></a>

        <a href=\"\">Schools</a>
      </div>
    </article>
    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", ":course:index.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/course/index.html.twig");
    }
}
