<?php

/* :default:index.html.twig */
class __TwigTemplate_e685ed4c5a9afa01fadd57a24b9e0c01697ea83a14d199d73fc764e51ec3b70f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
        $this->blocks = array(
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
        $__internal_b5eabd06bfae073b255d622494848b2dea74ea3681c594ad4d327398859fdc64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5eabd06bfae073b255d622494848b2dea74ea3681c594ad4d327398859fdc64->enter($__internal_b5eabd06bfae073b255d622494848b2dea74ea3681c594ad4d327398859fdc64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_b3eea907afd67e5ac55a6b586943c174342efa3626ed781c1f3c0b5e16728c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3eea907afd67e5ac55a6b586943c174342efa3626ed781c1f3c0b5e16728c00->enter($__internal_b3eea907afd67e5ac55a6b586943c174342efa3626ed781c1f3c0b5e16728c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5eabd06bfae073b255d622494848b2dea74ea3681c594ad4d327398859fdc64->leave($__internal_b5eabd06bfae073b255d622494848b2dea74ea3681c594ad4d327398859fdc64_prof);

        
        $__internal_b3eea907afd67e5ac55a6b586943c174342efa3626ed781c1f3c0b5e16728c00->leave($__internal_b3eea907afd67e5ac55a6b586943c174342efa3626ed781c1f3c0b5e16728c00_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_9d70faad6a8b28aa14e8fd3dd613bfdc4bf7302ba5fc6ba41ae0c738e5061e49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d70faad6a8b28aa14e8fd3dd613bfdc4bf7302ba5fc6ba41ae0c738e5061e49->enter($__internal_9d70faad6a8b28aa14e8fd3dd613bfdc4bf7302ba5fc6ba41ae0c738e5061e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_50b7fdfa1cba47cd25a69eedebea5c88f81e110acb7b25528dc78639b2d8e629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50b7fdfa1cba47cd25a69eedebea5c88f81e110acb7b25528dc78639b2d8e629->enter($__internal_50b7fdfa1cba47cd25a69eedebea5c88f81e110acb7b25528dc78639b2d8e629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 4
        echo "<style>
#frontPageArticle {
  width: inherit;
  height: 60vh;
  background-image: url(\"../images/frontPageArticle.jpg\");
  background-position: auto auto;
  background-repeat: no-repeat;
\tbackground-size: cover;
}

</style>
";
        
        $__internal_50b7fdfa1cba47cd25a69eedebea5c88f81e110acb7b25528dc78639b2d8e629->leave($__internal_50b7fdfa1cba47cd25a69eedebea5c88f81e110acb7b25528dc78639b2d8e629_prof);

        
        $__internal_9d70faad6a8b28aa14e8fd3dd613bfdc4bf7302ba5fc6ba41ae0c738e5061e49->leave($__internal_9d70faad6a8b28aa14e8fd3dd613bfdc4bf7302ba5fc6ba41ae0c738e5061e49_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_aead9413d30504ec9f6e57e6a69c31f25fae3b16da003eff23dd7eb34df21814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aead9413d30504ec9f6e57e6a69c31f25fae3b16da003eff23dd7eb34df21814->enter($__internal_aead9413d30504ec9f6e57e6a69c31f25fae3b16da003eff23dd7eb34df21814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9c185c6f9754eb260dc7b342a4980440cef411617c580c7ed4682ca312c6dadb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c185c6f9754eb260dc7b342a4980440cef411617c580c7ed4682ca312c6dadb->enter($__internal_9c185c6f9754eb260dc7b342a4980440cef411617c580c7ed4682ca312c6dadb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "  <article id=\"frontPageArticle\"></article>

  <div class=\"container\">
    <article class=\"tasks\">
      <div>
        <img src=\"images/icons/admin.png\" draggable=\"false\" />

        <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_signin", array("user_type" => "admin"));
        echo "\">Administrator</a>
        <p>
          Administrator page here the administration have a power to register course teacher , students and other staffs.
        </p>
      </div>

      <div>
        <img src=\"images/icons/teacher.png\" />

        <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_signin", array("user_type" => "teacher"));
        echo "\">Teacher</a>
        <p>
          Teachers teach the student and are registered here to there respective departments.
        </p>
      </div>

      <div>
        <img src=\"images/icons/student.png\" />

        <a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_signin", array("user_type" => "student"));
        echo "\">Student</a>
        <p>
          These is a student page all students ared registed here and can see there marks as well there registration form.
        </p>
      </div>

      <div>
        <img src=\"images/icons/school.png\" />

        <a href=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_signin", array("user_type" => 1));
        echo "\">School</a>
        <p>
          Shows avaliable school and modules/programs in the school.
        </p>
      </div>

      <div>
        <img src=\"images/icons/news.png\" />

        <a href=\"";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_signin", array("user_type" => "admin"));
        echo "\">News</a>
        <p>
          This link takes you to the main hospital's dirctory and to show you the latest news from the school.
        </p>
      </div>

      <hr class=\"clear\" width=\"0\" />
    </article>
  </div>

";
        
        $__internal_9c185c6f9754eb260dc7b342a4980440cef411617c580c7ed4682ca312c6dadb->leave($__internal_9c185c6f9754eb260dc7b342a4980440cef411617c580c7ed4682ca312c6dadb_prof);

        
        $__internal_aead9413d30504ec9f6e57e6a69c31f25fae3b16da003eff23dd7eb34df21814->leave($__internal_aead9413d30504ec9f6e57e6a69c31f25fae3b16da003eff23dd7eb34df21814_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 61,  125 => 52,  113 => 43,  101 => 34,  89 => 25,  80 => 18,  71 => 17,  50 => 4,  41 => 3,  11 => 1,);
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

{% block stylesheet %}
<style>
#frontPageArticle {
  width: inherit;
  height: 60vh;
  background-image: url(\"../images/frontPageArticle.jpg\");
  background-position: auto auto;
  background-repeat: no-repeat;
\tbackground-size: cover;
}

</style>
{% endblock %}

{% block body %}
  <article id=\"frontPageArticle\"></article>

  <div class=\"container\">
    <article class=\"tasks\">
      <div>
        <img src=\"images/icons/admin.png\" draggable=\"false\" />

        <a href=\"{{ path('user_signin', {'user_type': 'admin'}) }}\">Administrator</a>
        <p>
          Administrator page here the administration have a power to register course teacher , students and other staffs.
        </p>
      </div>

      <div>
        <img src=\"images/icons/teacher.png\" />

        <a href=\"{{ path('user_signin', {'user_type': 'teacher'}) }}\">Teacher</a>
        <p>
          Teachers teach the student and are registered here to there respective departments.
        </p>
      </div>

      <div>
        <img src=\"images/icons/student.png\" />

        <a href=\"{{ path('user_signin', {'user_type': 'student'}) }}\">Student</a>
        <p>
          These is a student page all students ared registed here and can see there marks as well there registration form.
        </p>
      </div>

      <div>
        <img src=\"images/icons/school.png\" />

        <a href=\"{{ path('user_signin', {'user_type': 1}) }}\">School</a>
        <p>
          Shows avaliable school and modules/programs in the school.
        </p>
      </div>

      <div>
        <img src=\"images/icons/news.png\" />

        <a href=\"{{ path('user_signin', {'user_type': 'admin'}) }}\">News</a>
        <p>
          This link takes you to the main hospital's dirctory and to show you the latest news from the school.
        </p>
      </div>

      <hr class=\"clear\" width=\"0\" />
    </article>
  </div>

{% endblock %}
", ":default:index.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/default/index.html.twig");
    }
}
