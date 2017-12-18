<?php

/* :module:index.html.twig */
class __TwigTemplate_a8e0762b18e5122ae8c4451a86d52467a6ebabe95234622bbbe9eac89ad79a01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":module:index.html.twig", 1);
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
        $__internal_2b09f8db9777017bb58528c163ccde7cde9a83da730d8301d62a91f67e234923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b09f8db9777017bb58528c163ccde7cde9a83da730d8301d62a91f67e234923->enter($__internal_2b09f8db9777017bb58528c163ccde7cde9a83da730d8301d62a91f67e234923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":module:index.html.twig"));

        $__internal_f5b06d7b042b6e9a99e593fb80327ac40d43f608d67bc376437f184ad3236de8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5b06d7b042b6e9a99e593fb80327ac40d43f608d67bc376437f184ad3236de8->enter($__internal_f5b06d7b042b6e9a99e593fb80327ac40d43f608d67bc376437f184ad3236de8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":module:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b09f8db9777017bb58528c163ccde7cde9a83da730d8301d62a91f67e234923->leave($__internal_2b09f8db9777017bb58528c163ccde7cde9a83da730d8301d62a91f67e234923_prof);

        
        $__internal_f5b06d7b042b6e9a99e593fb80327ac40d43f608d67bc376437f184ad3236de8->leave($__internal_f5b06d7b042b6e9a99e593fb80327ac40d43f608d67bc376437f184ad3236de8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_193ecf31e762379f90a6c046b7bdd162c11d789f8bc97ac3f5af97e86e639cfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_193ecf31e762379f90a6c046b7bdd162c11d789f8bc97ac3f5af97e86e639cfb->enter($__internal_193ecf31e762379f90a6c046b7bdd162c11d789f8bc97ac3f5af97e86e639cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_75725e2a83172345a8e96ad25db0b4e9186313c1e910b805c45594a77eae8ff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75725e2a83172345a8e96ad25db0b4e9186313c1e910b805c45594a77eae8ff7->enter($__internal_75725e2a83172345a8e96ad25db0b4e9186313c1e910b805c45594a77eae8ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Teacher
";
        
        $__internal_75725e2a83172345a8e96ad25db0b4e9186313c1e910b805c45594a77eae8ff7->leave($__internal_75725e2a83172345a8e96ad25db0b4e9186313c1e910b805c45594a77eae8ff7_prof);

        
        $__internal_193ecf31e762379f90a6c046b7bdd162c11d789f8bc97ac3f5af97e86e639cfb->leave($__internal_193ecf31e762379f90a6c046b7bdd162c11d789f8bc97ac3f5af97e86e639cfb_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_6b03cb88a24cd30b1bfbb77d7562f857bb3720901ede264f46c7d96569313c81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b03cb88a24cd30b1bfbb77d7562f857bb3720901ede264f46c7d96569313c81->enter($__internal_6b03cb88a24cd30b1bfbb77d7562f857bb3720901ede264f46c7d96569313c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_39cab959795ea0224464ebfe6253245ee9ab640aa2d6d57f87c6503206654e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39cab959795ea0224464ebfe6253245ee9ab640aa2d6d57f87c6503206654e35->enter($__internal_39cab959795ea0224464ebfe6253245ee9ab640aa2d6d57f87c6503206654e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_39cab959795ea0224464ebfe6253245ee9ab640aa2d6d57f87c6503206654e35->leave($__internal_39cab959795ea0224464ebfe6253245ee9ab640aa2d6d57f87c6503206654e35_prof);

        
        $__internal_6b03cb88a24cd30b1bfbb77d7562f857bb3720901ede264f46c7d96569313c81->leave($__internal_6b03cb88a24cd30b1bfbb77d7562f857bb3720901ede264f46c7d96569313c81_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_99a1a75045d143bdf41e5cc8d5f46f57083c66fe0b5aa28050565370c95fecf5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99a1a75045d143bdf41e5cc8d5f46f57083c66fe0b5aa28050565370c95fecf5->enter($__internal_99a1a75045d143bdf41e5cc8d5f46f57083c66fe0b5aa28050565370c95fecf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_464fd947ea94685f3593dd63b208497d2a6957f48b2d38c9e75661fe170c4f04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_464fd947ea94685f3593dd63b208497d2a6957f48b2d38c9e75661fe170c4f04->enter($__internal_464fd947ea94685f3593dd63b208497d2a6957f48b2d38c9e75661fe170c4f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_464fd947ea94685f3593dd63b208497d2a6957f48b2d38c9e75661fe170c4f04->leave($__internal_464fd947ea94685f3593dd63b208497d2a6957f48b2d38c9e75661fe170c4f04_prof);

        
        $__internal_99a1a75045d143bdf41e5cc8d5f46f57083c66fe0b5aa28050565370c95fecf5->leave($__internal_99a1a75045d143bdf41e5cc8d5f46f57083c66fe0b5aa28050565370c95fecf5_prof);

    }

    public function getTemplateName()
    {
        return ":module:index.html.twig";
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
", ":module:index.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/module/index.html.twig");
    }
}
