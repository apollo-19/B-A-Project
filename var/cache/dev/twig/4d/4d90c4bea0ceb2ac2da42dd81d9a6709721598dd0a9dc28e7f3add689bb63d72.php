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
        $__internal_f4a8eaf976224ebda818c61dbcd56e59c316259199d7ea5e99f068fd4c2a74ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4a8eaf976224ebda818c61dbcd56e59c316259199d7ea5e99f068fd4c2a74ed->enter($__internal_f4a8eaf976224ebda818c61dbcd56e59c316259199d7ea5e99f068fd4c2a74ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":course:index.html.twig"));

        $__internal_42a023406b1bf5d05ab3464ec96db09769f11f0b7a6aa96c6b63acb6b442e41d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a023406b1bf5d05ab3464ec96db09769f11f0b7a6aa96c6b63acb6b442e41d->enter($__internal_42a023406b1bf5d05ab3464ec96db09769f11f0b7a6aa96c6b63acb6b442e41d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":course:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4a8eaf976224ebda818c61dbcd56e59c316259199d7ea5e99f068fd4c2a74ed->leave($__internal_f4a8eaf976224ebda818c61dbcd56e59c316259199d7ea5e99f068fd4c2a74ed_prof);

        
        $__internal_42a023406b1bf5d05ab3464ec96db09769f11f0b7a6aa96c6b63acb6b442e41d->leave($__internal_42a023406b1bf5d05ab3464ec96db09769f11f0b7a6aa96c6b63acb6b442e41d_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_60f4cf834acb99bf44431f03c99037af60775729bdb1b034434a4ef66b5c5a1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60f4cf834acb99bf44431f03c99037af60775729bdb1b034434a4ef66b5c5a1e->enter($__internal_60f4cf834acb99bf44431f03c99037af60775729bdb1b034434a4ef66b5c5a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_be5e6eba0fbb1794e97e4a596e7f792fcb77de42d703778d0b44ca85e471da7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be5e6eba0fbb1794e97e4a596e7f792fcb77de42d703778d0b44ca85e471da7e->enter($__internal_be5e6eba0fbb1794e97e4a596e7f792fcb77de42d703778d0b44ca85e471da7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Teacher
";
        
        $__internal_be5e6eba0fbb1794e97e4a596e7f792fcb77de42d703778d0b44ca85e471da7e->leave($__internal_be5e6eba0fbb1794e97e4a596e7f792fcb77de42d703778d0b44ca85e471da7e_prof);

        
        $__internal_60f4cf834acb99bf44431f03c99037af60775729bdb1b034434a4ef66b5c5a1e->leave($__internal_60f4cf834acb99bf44431f03c99037af60775729bdb1b034434a4ef66b5c5a1e_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_9bdad70812da5c3c8d0b2b9e35ee6a626aae253b6c27ed41a094c5fb23614631 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bdad70812da5c3c8d0b2b9e35ee6a626aae253b6c27ed41a094c5fb23614631->enter($__internal_9bdad70812da5c3c8d0b2b9e35ee6a626aae253b6c27ed41a094c5fb23614631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_698180cd5279f773fc57081bdd88c358321f62b511a7290008f666e614129a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_698180cd5279f773fc57081bdd88c358321f62b511a7290008f666e614129a2e->enter($__internal_698180cd5279f773fc57081bdd88c358321f62b511a7290008f666e614129a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_698180cd5279f773fc57081bdd88c358321f62b511a7290008f666e614129a2e->leave($__internal_698180cd5279f773fc57081bdd88c358321f62b511a7290008f666e614129a2e_prof);

        
        $__internal_9bdad70812da5c3c8d0b2b9e35ee6a626aae253b6c27ed41a094c5fb23614631->leave($__internal_9bdad70812da5c3c8d0b2b9e35ee6a626aae253b6c27ed41a094c5fb23614631_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_220b257983e0347d6004a56083085d6e934b4f58c63876adeca32887036e1038 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_220b257983e0347d6004a56083085d6e934b4f58c63876adeca32887036e1038->enter($__internal_220b257983e0347d6004a56083085d6e934b4f58c63876adeca32887036e1038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_595a4628e6ed6adb8d4289c93517d2578b4cdbf5983cd47444120f969560ec3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_595a4628e6ed6adb8d4289c93517d2578b4cdbf5983cd47444120f969560ec3e->enter($__internal_595a4628e6ed6adb8d4289c93517d2578b4cdbf5983cd47444120f969560ec3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_595a4628e6ed6adb8d4289c93517d2578b4cdbf5983cd47444120f969560ec3e->leave($__internal_595a4628e6ed6adb8d4289c93517d2578b4cdbf5983cd47444120f969560ec3e_prof);

        
        $__internal_220b257983e0347d6004a56083085d6e934b4f58c63876adeca32887036e1038->leave($__internal_220b257983e0347d6004a56083085d6e934b4f58c63876adeca32887036e1038_prof);

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
", ":course:index.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/course/index.html.twig");
    }
}
