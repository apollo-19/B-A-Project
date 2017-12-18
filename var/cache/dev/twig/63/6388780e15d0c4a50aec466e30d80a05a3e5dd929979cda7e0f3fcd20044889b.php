<?php

/* :section:index.html.twig */
class __TwigTemplate_e2e9b9ff3763c613304f2e18d3a7d30d7ae4191612259e4338dcc5f83bf3199d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":section:index.html.twig", 1);
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
        $__internal_ccfbc9e02e99b169adb1dd2725e7cf782e95e88ae6a04f20e353e80119b7c566 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccfbc9e02e99b169adb1dd2725e7cf782e95e88ae6a04f20e353e80119b7c566->enter($__internal_ccfbc9e02e99b169adb1dd2725e7cf782e95e88ae6a04f20e353e80119b7c566_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":section:index.html.twig"));

        $__internal_80b671ffbda434ac7d02ed9b65ad48a5435471148cc63447cef618ea331d670b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80b671ffbda434ac7d02ed9b65ad48a5435471148cc63447cef618ea331d670b->enter($__internal_80b671ffbda434ac7d02ed9b65ad48a5435471148cc63447cef618ea331d670b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":section:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccfbc9e02e99b169adb1dd2725e7cf782e95e88ae6a04f20e353e80119b7c566->leave($__internal_ccfbc9e02e99b169adb1dd2725e7cf782e95e88ae6a04f20e353e80119b7c566_prof);

        
        $__internal_80b671ffbda434ac7d02ed9b65ad48a5435471148cc63447cef618ea331d670b->leave($__internal_80b671ffbda434ac7d02ed9b65ad48a5435471148cc63447cef618ea331d670b_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3e653fed92abae9b08bd37506ff3e61594d1aa931edee6f1bb51e0622b0dece = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3e653fed92abae9b08bd37506ff3e61594d1aa931edee6f1bb51e0622b0dece->enter($__internal_f3e653fed92abae9b08bd37506ff3e61594d1aa931edee6f1bb51e0622b0dece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e33d746c681d1411c1a012cdfbd5ddabfda9993a4cb3532f72c6df5e191a194d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e33d746c681d1411c1a012cdfbd5ddabfda9993a4cb3532f72c6df5e191a194d->enter($__internal_e33d746c681d1411c1a012cdfbd5ddabfda9993a4cb3532f72c6df5e191a194d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Teacher
";
        
        $__internal_e33d746c681d1411c1a012cdfbd5ddabfda9993a4cb3532f72c6df5e191a194d->leave($__internal_e33d746c681d1411c1a012cdfbd5ddabfda9993a4cb3532f72c6df5e191a194d_prof);

        
        $__internal_f3e653fed92abae9b08bd37506ff3e61594d1aa931edee6f1bb51e0622b0dece->leave($__internal_f3e653fed92abae9b08bd37506ff3e61594d1aa931edee6f1bb51e0622b0dece_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_02a5343ce7290348e41d608645d6b52179b820064998c528808dae0af50fef88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02a5343ce7290348e41d608645d6b52179b820064998c528808dae0af50fef88->enter($__internal_02a5343ce7290348e41d608645d6b52179b820064998c528808dae0af50fef88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_5a6917f5b03fbf14d7f42e660e56993dddc061d55552ada9abfd6bd80f6da1fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a6917f5b03fbf14d7f42e660e56993dddc061d55552ada9abfd6bd80f6da1fe->enter($__internal_5a6917f5b03fbf14d7f42e660e56993dddc061d55552ada9abfd6bd80f6da1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_5a6917f5b03fbf14d7f42e660e56993dddc061d55552ada9abfd6bd80f6da1fe->leave($__internal_5a6917f5b03fbf14d7f42e660e56993dddc061d55552ada9abfd6bd80f6da1fe_prof);

        
        $__internal_02a5343ce7290348e41d608645d6b52179b820064998c528808dae0af50fef88->leave($__internal_02a5343ce7290348e41d608645d6b52179b820064998c528808dae0af50fef88_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_38806463ef8141fbde6a30954f904f72000057b4ab8c927bd4fa55d664c0eccd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38806463ef8141fbde6a30954f904f72000057b4ab8c927bd4fa55d664c0eccd->enter($__internal_38806463ef8141fbde6a30954f904f72000057b4ab8c927bd4fa55d664c0eccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1bd52756408d6b6feebe069d4b5acb9bc5cbc1b808cad0e2983bf6460781a8e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd52756408d6b6feebe069d4b5acb9bc5cbc1b808cad0e2983bf6460781a8e5->enter($__internal_1bd52756408d6b6feebe069d4b5acb9bc5cbc1b808cad0e2983bf6460781a8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1bd52756408d6b6feebe069d4b5acb9bc5cbc1b808cad0e2983bf6460781a8e5->leave($__internal_1bd52756408d6b6feebe069d4b5acb9bc5cbc1b808cad0e2983bf6460781a8e5_prof);

        
        $__internal_38806463ef8141fbde6a30954f904f72000057b4ab8c927bd4fa55d664c0eccd->leave($__internal_38806463ef8141fbde6a30954f904f72000057b4ab8c927bd4fa55d664c0eccd_prof);

    }

    public function getTemplateName()
    {
        return ":section:index.html.twig";
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
", ":section:index.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/section/index.html.twig");
    }
}
