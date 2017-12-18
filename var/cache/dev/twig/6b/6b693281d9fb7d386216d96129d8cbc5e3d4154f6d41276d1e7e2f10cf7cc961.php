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
        $__internal_854a3b53a01527bb36b329c9eb452c044202ff1a1eeea962b5f65e7cb229ef8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_854a3b53a01527bb36b329c9eb452c044202ff1a1eeea962b5f65e7cb229ef8d->enter($__internal_854a3b53a01527bb36b329c9eb452c044202ff1a1eeea962b5f65e7cb229ef8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $__internal_ae6e3523389f786f4b2d4a7232025002e5e7cc5bace1f0b9e51c7cd6d63de0b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae6e3523389f786f4b2d4a7232025002e5e7cc5bace1f0b9e51c7cd6d63de0b5->enter($__internal_ae6e3523389f786f4b2d4a7232025002e5e7cc5bace1f0b9e51c7cd6d63de0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_854a3b53a01527bb36b329c9eb452c044202ff1a1eeea962b5f65e7cb229ef8d->leave($__internal_854a3b53a01527bb36b329c9eb452c044202ff1a1eeea962b5f65e7cb229ef8d_prof);

        
        $__internal_ae6e3523389f786f4b2d4a7232025002e5e7cc5bace1f0b9e51c7cd6d63de0b5->leave($__internal_ae6e3523389f786f4b2d4a7232025002e5e7cc5bace1f0b9e51c7cd6d63de0b5_prof);

    }

    // line 3
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_49909c4f3979573d9b00dc61e5134f5e626a2cb56d09b106f000401a0df3adaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49909c4f3979573d9b00dc61e5134f5e626a2cb56d09b106f000401a0df3adaa->enter($__internal_49909c4f3979573d9b00dc61e5134f5e626a2cb56d09b106f000401a0df3adaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_0f5e62ed2b72bc9b6aec1752b924da472a0fe0e9abc832b2907d6f9082051305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f5e62ed2b72bc9b6aec1752b924da472a0fe0e9abc832b2907d6f9082051305->enter($__internal_0f5e62ed2b72bc9b6aec1752b924da472a0fe0e9abc832b2907d6f9082051305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

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

.container {
  min-height: 0vh;
}
</style>
";
        
        $__internal_0f5e62ed2b72bc9b6aec1752b924da472a0fe0e9abc832b2907d6f9082051305->leave($__internal_0f5e62ed2b72bc9b6aec1752b924da472a0fe0e9abc832b2907d6f9082051305_prof);

        
        $__internal_49909c4f3979573d9b00dc61e5134f5e626a2cb56d09b106f000401a0df3adaa->leave($__internal_49909c4f3979573d9b00dc61e5134f5e626a2cb56d09b106f000401a0df3adaa_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee72912abea6c44b38fa658bdf12648db2bb2fe725f71aa98631aeb1df022537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee72912abea6c44b38fa658bdf12648db2bb2fe725f71aa98631aeb1df022537->enter($__internal_ee72912abea6c44b38fa658bdf12648db2bb2fe725f71aa98631aeb1df022537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0d9c7def4a18161efd632f15f38fd705bedf01253d1c0693311e4608379ab2a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d9c7def4a18161efd632f15f38fd705bedf01253d1c0693311e4608379ab2a9->enter($__internal_0d9c7def4a18161efd632f15f38fd705bedf01253d1c0693311e4608379ab2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "  <article id=\"frontPageArticle\"></article>

  <div class=\"container\">
    <article class=\"tasks\">
      <div>
        <img src=\"images/icons/admin.png\" draggable=\"false\" />

        <a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_signin", array("user_type" => "admin"));
        echo "\">Administrator</a>
        <p>
          Administrator page here the administration have a power to register course teacher , students and other staffs.
        </p>
      </div>

      <div>
        <img src=\"images/icons/teacher.png\" />

        <a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_signin", array("user_type" => "teacher"));
        echo "\">Teacher</a>
        <p>
          Teachers teach the student and are registered here to there respective departments.
        </p>
      </div>

      <div>
        <img src=\"images/icons/student.png\" />

        <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_signin", array("user_type" => "student"));
        echo "\">Student</a>
        <p>
          These is a student page all students ared registed here and can see there marks as well there registration form.
        </p>
      </div>

      <div>
        <img src=\"images/icons/school.png\" />

        <a href=\"";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_signin", array("user_type" => 1));
        echo "\">School</a>
        <p>
          Shows avaliable school and modules/programs in the school.
        </p>
      </div>

      <div>
        <img src=\"images/icons/news.png\" />

        <a href=\"";
        // line 64
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
        
        $__internal_0d9c7def4a18161efd632f15f38fd705bedf01253d1c0693311e4608379ab2a9->leave($__internal_0d9c7def4a18161efd632f15f38fd705bedf01253d1c0693311e4608379ab2a9_prof);

        
        $__internal_ee72912abea6c44b38fa658bdf12648db2bb2fe725f71aa98631aeb1df022537->leave($__internal_ee72912abea6c44b38fa658bdf12648db2bb2fe725f71aa98631aeb1df022537_prof);

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
        return array (  140 => 64,  128 => 55,  116 => 46,  104 => 37,  92 => 28,  83 => 21,  74 => 20,  50 => 4,  41 => 3,  11 => 1,);
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

.container {
  min-height: 0vh;
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
", ":default:index.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/default/index.html.twig");
    }
}
