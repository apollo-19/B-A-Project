<?php

/* :teacher:index.html.twig */
class __TwigTemplate_309740a7682028a7351ed4c87f95071665c204745c2c339aba1e51a6363a905e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":teacher:index.html.twig", 1);
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
        $__internal_fdbf4f1219900eaed8d199bc0a2525040a097a9b9aafc26e108e196e93a2df1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fdbf4f1219900eaed8d199bc0a2525040a097a9b9aafc26e108e196e93a2df1c->enter($__internal_fdbf4f1219900eaed8d199bc0a2525040a097a9b9aafc26e108e196e93a2df1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":teacher:index.html.twig"));

        $__internal_53ce15d61f59728380b44063cd4a41559743200b6441b695f31a497e7c52a8a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53ce15d61f59728380b44063cd4a41559743200b6441b695f31a497e7c52a8a9->enter($__internal_53ce15d61f59728380b44063cd4a41559743200b6441b695f31a497e7c52a8a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":teacher:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdbf4f1219900eaed8d199bc0a2525040a097a9b9aafc26e108e196e93a2df1c->leave($__internal_fdbf4f1219900eaed8d199bc0a2525040a097a9b9aafc26e108e196e93a2df1c_prof);

        
        $__internal_53ce15d61f59728380b44063cd4a41559743200b6441b695f31a497e7c52a8a9->leave($__internal_53ce15d61f59728380b44063cd4a41559743200b6441b695f31a497e7c52a8a9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_afb00d90a556ac033eab071f1917c532ca9b3fb212d6f5bfbd2a6a72a3ccd21b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afb00d90a556ac033eab071f1917c532ca9b3fb212d6f5bfbd2a6a72a3ccd21b->enter($__internal_afb00d90a556ac033eab071f1917c532ca9b3fb212d6f5bfbd2a6a72a3ccd21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cc8db7fbed08d6b9a99b731435e47e275f13e5b1bc64ec09b4b40131f3acf863 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc8db7fbed08d6b9a99b731435e47e275f13e5b1bc64ec09b4b40131f3acf863->enter($__internal_cc8db7fbed08d6b9a99b731435e47e275f13e5b1bc64ec09b4b40131f3acf863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Teacher
";
        
        $__internal_cc8db7fbed08d6b9a99b731435e47e275f13e5b1bc64ec09b4b40131f3acf863->leave($__internal_cc8db7fbed08d6b9a99b731435e47e275f13e5b1bc64ec09b4b40131f3acf863_prof);

        
        $__internal_afb00d90a556ac033eab071f1917c532ca9b3fb212d6f5bfbd2a6a72a3ccd21b->leave($__internal_afb00d90a556ac033eab071f1917c532ca9b3fb212d6f5bfbd2a6a72a3ccd21b_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_f7227d36266252c40a80b270a37e3ea3beb822e9f3524818a884c713731ef82b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7227d36266252c40a80b270a37e3ea3beb822e9f3524818a884c713731ef82b->enter($__internal_f7227d36266252c40a80b270a37e3ea3beb822e9f3524818a884c713731ef82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_b1b94ae45f2b3c6f592f85ad1bd1b67ee990467cb3399b5a6532ad1b465f1586 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b94ae45f2b3c6f592f85ad1bd1b67ee990467cb3399b5a6532ad1b465f1586->enter($__internal_b1b94ae45f2b3c6f592f85ad1bd1b67ee990467cb3399b5a6532ad1b465f1586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_b1b94ae45f2b3c6f592f85ad1bd1b67ee990467cb3399b5a6532ad1b465f1586->leave($__internal_b1b94ae45f2b3c6f592f85ad1bd1b67ee990467cb3399b5a6532ad1b465f1586_prof);

        
        $__internal_f7227d36266252c40a80b270a37e3ea3beb822e9f3524818a884c713731ef82b->leave($__internal_f7227d36266252c40a80b270a37e3ea3beb822e9f3524818a884c713731ef82b_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_13544a44e7426c533460d77075135cb8beb92764f4e41f838d2b59cc2aa71648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13544a44e7426c533460d77075135cb8beb92764f4e41f838d2b59cc2aa71648->enter($__internal_13544a44e7426c533460d77075135cb8beb92764f4e41f838d2b59cc2aa71648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b89f1d83377a499e0f74c9e42210ae405ab9f6d6f703e8d2379ccfa5378e3873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b89f1d83377a499e0f74c9e42210ae405ab9f6d6f703e8d2379ccfa5378e3873->enter($__internal_b89f1d83377a499e0f74c9e42210ae405ab9f6d6f703e8d2379ccfa5378e3873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\">
    <h1 class=\"welcomeText aright taright\">Welcome ";
        // line 14
        echo twig_escape_filter($this->env, ($context["si_user_name"] ?? $this->getContext($context, "si_user_name")), "html", null, true);
        echo ".</h1>

    <article class=\"tasks\">
      <div><a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("school_view");
        echo "\">
        <img src=\"images/icons/school.png\" draggable=\"false\" /><br />Schools
      </a></div>

      <div><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("module_view");
        echo "\">
        <img src=\"images/icons/module.png\" draggable=\"false\" /><br />Modules
      </a></div>

      <div><a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_view");
        echo "\">
        <img src=\"images/icons/course.png\" draggable=\"false\" /><br />Courses
      </a></div>

      <div><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("section_view");
        echo "\">
        <img src=\"images/icons/session.png\" draggable=\"false\" /><br />My Sessions
      </a></div>

      <div><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("section_view");
        echo "\">
        <img src=\"images/icons/result.png\" draggable=\"false\" /><br />Results
      </a></div>

      <div><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("section_view");
        echo "\">
        <img src=\"images/icons/assessment.png\" draggable=\"false\" /><br />Assessment
      </a></div>

      <div><a href=\" ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_signout");
        echo " \" onclick=\"return confirm('Are You Sure You Want To Sign Out?') \">
        <img src=\"images/icons/signout.png\" draggable=\"false\" /><br />Sign Out
      </a></div>
    </article>
    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_b89f1d83377a499e0f74c9e42210ae405ab9f6d6f703e8d2379ccfa5378e3873->leave($__internal_b89f1d83377a499e0f74c9e42210ae405ab9f6d6f703e8d2379ccfa5378e3873_prof);

        
        $__internal_13544a44e7426c533460d77075135cb8beb92764f4e41f838d2b59cc2aa71648->leave($__internal_13544a44e7426c533460d77075135cb8beb92764f4e41f838d2b59cc2aa71648_prof);

    }

    public function getTemplateName()
    {
        return ":teacher:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 41,  137 => 37,  130 => 33,  123 => 29,  116 => 25,  109 => 21,  102 => 17,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
    <h1 class=\"welcomeText aright taright\">Welcome {{ si_user_name }}.</h1>

    <article class=\"tasks\">
      <div><a href=\"{{ path('school_view') }}\">
        <img src=\"images/icons/school.png\" draggable=\"false\" /><br />Schools
      </a></div>

      <div><a href=\"{{ path('module_view') }}\">
        <img src=\"images/icons/module.png\" draggable=\"false\" /><br />Modules
      </a></div>

      <div><a href=\"{{ path('course_view') }}\">
        <img src=\"images/icons/course.png\" draggable=\"false\" /><br />Courses
      </a></div>

      <div><a href=\"{{ path('section_view') }}\">
        <img src=\"images/icons/session.png\" draggable=\"false\" /><br />My Sessions
      </a></div>

      <div><a href=\"{{ path('section_view') }}\">
        <img src=\"images/icons/result.png\" draggable=\"false\" /><br />Results
      </a></div>

      <div><a href=\"{{ path('section_view') }}\">
        <img src=\"images/icons/assessment.png\" draggable=\"false\" /><br />Assessment
      </a></div>

      <div><a href=\" {{ path('user_signout') }} \" onclick=\"return confirm('Are You Sure You Want To Sign Out?') \">
        <img src=\"images/icons/signout.png\" draggable=\"false\" /><br />Sign Out
      </a></div>
    </article>
    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", ":teacher:index.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/teacher/index.html.twig");
    }
}
