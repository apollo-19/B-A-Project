<?php

/* base.html.twig */
class __TwigTemplate_e7512925d8fb00307cc049a1006d437f3028b1723b810d6e2acede88a13e1891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8944a009707738a0f1821e277a3cbccb46942bcb78582c725dfeafd150f50417 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8944a009707738a0f1821e277a3cbccb46942bcb78582c725dfeafd150f50417->enter($__internal_8944a009707738a0f1821e277a3cbccb46942bcb78582c725dfeafd150f50417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c97c9fdc36a08bde6498d8ae5e22bb1a75176c7cca9a3cf83b82f0dffb117cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c97c9fdc36a08bde6498d8ae5e22bb1a75176c7cca9a3cf83b82f0dffb117cef->enter($__internal_c97c9fdc36a08bde6498d8ae5e22bb1a75176c7cca9a3cf83b82f0dffb117cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<html lang=\"am\">
  <head>
    <meta charset=\"UTF-8\" />
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\">
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "    ";
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 12
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.png"), "html", null, true);
        echo "\" />
  </head>

  <body>

    <header class=\"clear\" id=\"#home\">
      <div>
        <img alt=\"St. Paul's Hospital\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/main_logo.png"), "html", null, true);
        echo "\" draggable=\"false\" />
      </div>

      <table border=\"0\">
        <tr valign=\"middle\">
          <td><a href=\" ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("default_home");
        echo " \">home</a></td>
          ";
        // line 25
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_name"), "method") && $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_type"), "method"))) {
            // line 26
            echo "            <td><a href=\" ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
            echo " \">dashboard</a></td>
            <td><a href=\" ";
            // line 27
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_signout");
            echo " \"
                onclick=\"return confirm('Are You Sure You Want To Sign Out?') \">sign out</a></td>
          ";
        } else {
            // line 30
            echo "            <td><a href=\" ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_signin");
            echo " \">sign in</a></td>
          ";
        }
        // line 32
        echo "        </tr>
      </table>
    </header>

    ";
        // line 36
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "
    <footer>
      <div>
        &copy; St. Paul's Hospital Mellenium Medical College
      </div>
    </footer>

    ";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "
    ";
        // line 49
        $this->displayBlock('javascript', $context, $blocks);
        // line 50
        echo "
  </body>
</html>
</html>
";
        
        $__internal_8944a009707738a0f1821e277a3cbccb46942bcb78582c725dfeafd150f50417->leave($__internal_8944a009707738a0f1821e277a3cbccb46942bcb78582c725dfeafd150f50417_prof);

        
        $__internal_c97c9fdc36a08bde6498d8ae5e22bb1a75176c7cca9a3cf83b82f0dffb117cef->leave($__internal_c97c9fdc36a08bde6498d8ae5e22bb1a75176c7cca9a3cf83b82f0dffb117cef_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_07abe06e43470f46804ccde4fe7fa80e1c4536b00d7bbdb47f05008127ebbd56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07abe06e43470f46804ccde4fe7fa80e1c4536b00d7bbdb47f05008127ebbd56->enter($__internal_07abe06e43470f46804ccde4fe7fa80e1c4536b00d7bbdb47f05008127ebbd56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8f384d5629049ad72323ad42c20fcee97030c1bc89890c573000ffe030b0a0ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f384d5629049ad72323ad42c20fcee97030c1bc89890c573000ffe030b0a0ed->enter($__internal_8f384d5629049ad72323ad42c20fcee97030c1bc89890c573000ffe030b0a0ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "St. Paul's Hospital Mellinium Medical College";
        
        $__internal_8f384d5629049ad72323ad42c20fcee97030c1bc89890c573000ffe030b0a0ed->leave($__internal_8f384d5629049ad72323ad42c20fcee97030c1bc89890c573000ffe030b0a0ed_prof);

        
        $__internal_07abe06e43470f46804ccde4fe7fa80e1c4536b00d7bbdb47f05008127ebbd56->leave($__internal_07abe06e43470f46804ccde4fe7fa80e1c4536b00d7bbdb47f05008127ebbd56_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e3ee48b8bc378959b668f8ef375fa0c280f630fd20084aa10b6777f2be8290b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3ee48b8bc378959b668f8ef375fa0c280f630fd20084aa10b6777f2be8290b0->enter($__internal_e3ee48b8bc378959b668f8ef375fa0c280f630fd20084aa10b6777f2be8290b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_7279c48af6e41fbe2878529003df94708e8e41a6a86d88f8607b22189121234b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7279c48af6e41fbe2878529003df94708e8e41a6a86d88f8607b22189121234b->enter($__internal_7279c48af6e41fbe2878529003df94708e8e41a6a86d88f8607b22189121234b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/stylesheet.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_7279c48af6e41fbe2878529003df94708e8e41a6a86d88f8607b22189121234b->leave($__internal_7279c48af6e41fbe2878529003df94708e8e41a6a86d88f8607b22189121234b_prof);

        
        $__internal_e3ee48b8bc378959b668f8ef375fa0c280f630fd20084aa10b6777f2be8290b0->leave($__internal_e3ee48b8bc378959b668f8ef375fa0c280f630fd20084aa10b6777f2be8290b0_prof);

    }

    // line 11
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_4448eb90494be6c706d5124ffef144c4d6a717be38f6bffdc5fe9d983942da97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4448eb90494be6c706d5124ffef144c4d6a717be38f6bffdc5fe9d983942da97->enter($__internal_4448eb90494be6c706d5124ffef144c4d6a717be38f6bffdc5fe9d983942da97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_cf789279ad3786171b6f4851859ddb2a54087ff5a65730782bd91e8a49fc684e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf789279ad3786171b6f4851859ddb2a54087ff5a65730782bd91e8a49fc684e->enter($__internal_cf789279ad3786171b6f4851859ddb2a54087ff5a65730782bd91e8a49fc684e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_cf789279ad3786171b6f4851859ddb2a54087ff5a65730782bd91e8a49fc684e->leave($__internal_cf789279ad3786171b6f4851859ddb2a54087ff5a65730782bd91e8a49fc684e_prof);

        
        $__internal_4448eb90494be6c706d5124ffef144c4d6a717be38f6bffdc5fe9d983942da97->leave($__internal_4448eb90494be6c706d5124ffef144c4d6a717be38f6bffdc5fe9d983942da97_prof);

    }

    // line 36
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d1b50518050a20e191f7ca09c740d4653d8b3a501f3ece78eb7e2fe14d90751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d1b50518050a20e191f7ca09c740d4653d8b3a501f3ece78eb7e2fe14d90751->enter($__internal_0d1b50518050a20e191f7ca09c740d4653d8b3a501f3ece78eb7e2fe14d90751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e413079bb1b89832fbeebc13f2ed72a622a51570e1d566f104861bb8b013cadd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e413079bb1b89832fbeebc13f2ed72a622a51570e1d566f104861bb8b013cadd->enter($__internal_e413079bb1b89832fbeebc13f2ed72a622a51570e1d566f104861bb8b013cadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e413079bb1b89832fbeebc13f2ed72a622a51570e1d566f104861bb8b013cadd->leave($__internal_e413079bb1b89832fbeebc13f2ed72a622a51570e1d566f104861bb8b013cadd_prof);

        
        $__internal_0d1b50518050a20e191f7ca09c740d4653d8b3a501f3ece78eb7e2fe14d90751->leave($__internal_0d1b50518050a20e191f7ca09c740d4653d8b3a501f3ece78eb7e2fe14d90751_prof);

    }

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9df2e06b24dba6d7d2f73fcf445c0837bc1539dcad59d031233be16328fbe9d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9df2e06b24dba6d7d2f73fcf445c0837bc1539dcad59d031233be16328fbe9d9->enter($__internal_9df2e06b24dba6d7d2f73fcf445c0837bc1539dcad59d031233be16328fbe9d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d1d54dd7349b779b9ae8a0cb83c5dae60d7d57084ae6ce643919bc847c2e593d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d54dd7349b779b9ae8a0cb83c5dae60d7d57084ae6ce643919bc847c2e593d->enter($__internal_d1d54dd7349b779b9ae8a0cb83c5dae60d7d57084ae6ce643919bc847c2e593d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 45
        echo "      <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/javascript.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_d1d54dd7349b779b9ae8a0cb83c5dae60d7d57084ae6ce643919bc847c2e593d->leave($__internal_d1d54dd7349b779b9ae8a0cb83c5dae60d7d57084ae6ce643919bc847c2e593d_prof);

        
        $__internal_9df2e06b24dba6d7d2f73fcf445c0837bc1539dcad59d031233be16328fbe9d9->leave($__internal_9df2e06b24dba6d7d2f73fcf445c0837bc1539dcad59d031233be16328fbe9d9_prof);

    }

    // line 49
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_2938be8d0ce7df0bd039a5fb36494d9178774a611e6e525a0feb79c78e93f11e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2938be8d0ce7df0bd039a5fb36494d9178774a611e6e525a0feb79c78e93f11e->enter($__internal_2938be8d0ce7df0bd039a5fb36494d9178774a611e6e525a0feb79c78e93f11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_61d68d9c35e61ad1b363cf2f465ed51ed8b3374b2a6222be1aeffabc65a694c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61d68d9c35e61ad1b363cf2f465ed51ed8b3374b2a6222be1aeffabc65a694c5->enter($__internal_61d68d9c35e61ad1b363cf2f465ed51ed8b3374b2a6222be1aeffabc65a694c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_61d68d9c35e61ad1b363cf2f465ed51ed8b3374b2a6222be1aeffabc65a694c5->leave($__internal_61d68d9c35e61ad1b363cf2f465ed51ed8b3374b2a6222be1aeffabc65a694c5_prof);

        
        $__internal_2938be8d0ce7df0bd039a5fb36494d9178774a611e6e525a0feb79c78e93f11e->leave($__internal_2938be8d0ce7df0bd039a5fb36494d9178774a611e6e525a0feb79c78e93f11e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 49,  216 => 46,  211 => 45,  202 => 44,  185 => 36,  168 => 11,  155 => 9,  146 => 8,  128 => 6,  114 => 50,  112 => 49,  109 => 48,  107 => 44,  98 => 37,  96 => 36,  90 => 32,  84 => 30,  78 => 27,  73 => 26,  71 => 25,  67 => 24,  59 => 19,  48 => 12,  45 => 11,  43 => 8,  38 => 6,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<html lang=\"am\">
  <head>
    <meta charset=\"UTF-8\" />
    <title>{% block title %}St. Paul's Hospital Mellinium Medical College{% endblock %}</title>
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans\" rel=\"stylesheet\">
    {% block stylesheets %}
      <link rel=\"stylesheet\" href=\"{{ asset('css/stylesheet.css') }}\">
    {% endblock %}
    {% block stylesheet %}{% endblock %}
    <link rel=\"shortcut icon\" href=\"{{ asset('favicon.png') }}\" />
  </head>

  <body>

    <header class=\"clear\" id=\"#home\">
      <div>
        <img alt=\"St. Paul's Hospital\" src=\"{{ asset('images/main_logo.png') }}\" draggable=\"false\" />
      </div>

      <table border=\"0\">
        <tr valign=\"middle\">
          <td><a href=\" {{ path('default_home') }} \">home</a></td>
          {% if(app.session.get('user_name') and app.session.get('user_type')) %}
            <td><a href=\" {{ path('dashboard') }} \">dashboard</a></td>
            <td><a href=\" {{ path('user_signout') }} \"
                onclick=\"return confirm('Are You Sure You Want To Sign Out?') \">sign out</a></td>
          {% else %}
            <td><a href=\" {{ path('user_signin') }} \">sign in</a></td>
          {% endif %}
        </tr>
      </table>
    </header>

    {% block body %}{% endblock %}

    <footer>
      <div>
        &copy; St. Paul's Hospital Mellenium Medical College
      </div>
    </footer>

    {% block javascripts %}
      <script type=\"text/javascript\" src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>
      <script type=\"text/javascript\" src=\"{{ asset('js/javascript.js') }}\"></script>
    {% endblock %}

    {% block javascript %}{% endblock %}

  </body>
</html>
</html>
", "base.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/base.html.twig");
    }
}
