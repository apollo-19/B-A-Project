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
        $__internal_4801d47b3d62a7fff5d895cc670122d3f449993642f255462d147fae0dca8349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4801d47b3d62a7fff5d895cc670122d3f449993642f255462d147fae0dca8349->enter($__internal_4801d47b3d62a7fff5d895cc670122d3f449993642f255462d147fae0dca8349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_142b6672e2f232eb02fc24240953bb9dcfa94f805227de3382a353a0f113cbbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_142b6672e2f232eb02fc24240953bb9dcfa94f805227de3382a353a0f113cbbc->enter($__internal_142b6672e2f232eb02fc24240953bb9dcfa94f805227de3382a353a0f113cbbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 26
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_name"), "method") && $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_type"), "method"))) {
            // line 27
            echo "            <td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("account_settings", array("user_id" => $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_id_lit"), "method"))), "html", null, true);
            echo "\">profile</a></td>
            <td><a href=\" ";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dashboard");
            echo " \">dashboard</a></td>
            <td><a href=\" ";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_signout");
            echo " \"
                onclick=\"return confirm('Are You Sure You Want To Sign Out?') \">sign out</a></td>
          ";
        } else {
            // line 32
            echo "            <td><a href=\" ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_signin");
            echo " \">sign in</a></td>
          ";
        }
        // line 34
        echo "        </tr>
      </table>
    </header>

    ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "
    <footer>
      <div>
        &copy; St. Paul's Hospital Mellenium Medical College
      </div>
    </footer>

    ";
        // line 46
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "
    ";
        // line 51
        $this->displayBlock('javascript', $context, $blocks);
        // line 52
        echo "
  </body>
</html>
</html>
";
        
        $__internal_4801d47b3d62a7fff5d895cc670122d3f449993642f255462d147fae0dca8349->leave($__internal_4801d47b3d62a7fff5d895cc670122d3f449993642f255462d147fae0dca8349_prof);

        
        $__internal_142b6672e2f232eb02fc24240953bb9dcfa94f805227de3382a353a0f113cbbc->leave($__internal_142b6672e2f232eb02fc24240953bb9dcfa94f805227de3382a353a0f113cbbc_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_6c553b7f0e74770892bc7bac4c515a5c67ce6730bb85dfc4f5ba2ad508a35b42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c553b7f0e74770892bc7bac4c515a5c67ce6730bb85dfc4f5ba2ad508a35b42->enter($__internal_6c553b7f0e74770892bc7bac4c515a5c67ce6730bb85dfc4f5ba2ad508a35b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cf50b4978a8cdc783de3a05e11baa6374ce29229001c1fef52d2d0bed0643669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf50b4978a8cdc783de3a05e11baa6374ce29229001c1fef52d2d0bed0643669->enter($__internal_cf50b4978a8cdc783de3a05e11baa6374ce29229001c1fef52d2d0bed0643669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "St. Paul's Hospital Mellinium Medical College";
        
        $__internal_cf50b4978a8cdc783de3a05e11baa6374ce29229001c1fef52d2d0bed0643669->leave($__internal_cf50b4978a8cdc783de3a05e11baa6374ce29229001c1fef52d2d0bed0643669_prof);

        
        $__internal_6c553b7f0e74770892bc7bac4c515a5c67ce6730bb85dfc4f5ba2ad508a35b42->leave($__internal_6c553b7f0e74770892bc7bac4c515a5c67ce6730bb85dfc4f5ba2ad508a35b42_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_411bacf056b95094e105249ef68cb7a69b55db0f236221abb121c8ef71d283b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_411bacf056b95094e105249ef68cb7a69b55db0f236221abb121c8ef71d283b2->enter($__internal_411bacf056b95094e105249ef68cb7a69b55db0f236221abb121c8ef71d283b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e2b08b44d7b24d8ca11e5268eb32ada0e0d5b30bb481b637f9044b437a83bbd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2b08b44d7b24d8ca11e5268eb32ada0e0d5b30bb481b637f9044b437a83bbd3->enter($__internal_e2b08b44d7b24d8ca11e5268eb32ada0e0d5b30bb481b637f9044b437a83bbd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/stylesheet.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_e2b08b44d7b24d8ca11e5268eb32ada0e0d5b30bb481b637f9044b437a83bbd3->leave($__internal_e2b08b44d7b24d8ca11e5268eb32ada0e0d5b30bb481b637f9044b437a83bbd3_prof);

        
        $__internal_411bacf056b95094e105249ef68cb7a69b55db0f236221abb121c8ef71d283b2->leave($__internal_411bacf056b95094e105249ef68cb7a69b55db0f236221abb121c8ef71d283b2_prof);

    }

    // line 11
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_651ab3c5e28ce2e4e82db8c9742d33169b611fb2d4d3c7ae09e0f0f97426dae8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_651ab3c5e28ce2e4e82db8c9742d33169b611fb2d4d3c7ae09e0f0f97426dae8->enter($__internal_651ab3c5e28ce2e4e82db8c9742d33169b611fb2d4d3c7ae09e0f0f97426dae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_3ca288b3a2b89a2e9aaba6defe71bb27b9e2742c2899a568f70dfd100d2eaca1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ca288b3a2b89a2e9aaba6defe71bb27b9e2742c2899a568f70dfd100d2eaca1->enter($__internal_3ca288b3a2b89a2e9aaba6defe71bb27b9e2742c2899a568f70dfd100d2eaca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_3ca288b3a2b89a2e9aaba6defe71bb27b9e2742c2899a568f70dfd100d2eaca1->leave($__internal_3ca288b3a2b89a2e9aaba6defe71bb27b9e2742c2899a568f70dfd100d2eaca1_prof);

        
        $__internal_651ab3c5e28ce2e4e82db8c9742d33169b611fb2d4d3c7ae09e0f0f97426dae8->leave($__internal_651ab3c5e28ce2e4e82db8c9742d33169b611fb2d4d3c7ae09e0f0f97426dae8_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_c50892d88ecdfc78c07050b03881af1dc64ed45320211fb88eeac8afafb2b335 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c50892d88ecdfc78c07050b03881af1dc64ed45320211fb88eeac8afafb2b335->enter($__internal_c50892d88ecdfc78c07050b03881af1dc64ed45320211fb88eeac8afafb2b335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c0dd51cb96f6f9c5516fb49c8375917fe52344b18ae8909b1f5ae8058c834242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0dd51cb96f6f9c5516fb49c8375917fe52344b18ae8909b1f5ae8058c834242->enter($__internal_c0dd51cb96f6f9c5516fb49c8375917fe52344b18ae8909b1f5ae8058c834242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c0dd51cb96f6f9c5516fb49c8375917fe52344b18ae8909b1f5ae8058c834242->leave($__internal_c0dd51cb96f6f9c5516fb49c8375917fe52344b18ae8909b1f5ae8058c834242_prof);

        
        $__internal_c50892d88ecdfc78c07050b03881af1dc64ed45320211fb88eeac8afafb2b335->leave($__internal_c50892d88ecdfc78c07050b03881af1dc64ed45320211fb88eeac8afafb2b335_prof);

    }

    // line 46
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2a11cc325744df63590d1c243e96959107299811d971667aa6b0b4db9129b8f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a11cc325744df63590d1c243e96959107299811d971667aa6b0b4db9129b8f1->enter($__internal_2a11cc325744df63590d1c243e96959107299811d971667aa6b0b4db9129b8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fa9c9be838d22da705b702ef123090dcbb2d6cb5c9d9c0f0df5e0eec2f942266 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa9c9be838d22da705b702ef123090dcbb2d6cb5c9d9c0f0df5e0eec2f942266->enter($__internal_fa9c9be838d22da705b702ef123090dcbb2d6cb5c9d9c0f0df5e0eec2f942266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 47
        echo "      <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
      <script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/javascript.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_fa9c9be838d22da705b702ef123090dcbb2d6cb5c9d9c0f0df5e0eec2f942266->leave($__internal_fa9c9be838d22da705b702ef123090dcbb2d6cb5c9d9c0f0df5e0eec2f942266_prof);

        
        $__internal_2a11cc325744df63590d1c243e96959107299811d971667aa6b0b4db9129b8f1->leave($__internal_2a11cc325744df63590d1c243e96959107299811d971667aa6b0b4db9129b8f1_prof);

    }

    // line 51
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_4ed30929a0f435311101dfc1be2de3934995ed435bfc32a26409f01824dd74e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ed30929a0f435311101dfc1be2de3934995ed435bfc32a26409f01824dd74e7->enter($__internal_4ed30929a0f435311101dfc1be2de3934995ed435bfc32a26409f01824dd74e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_9a2a11c31d3af9924b729b23efbc64cbb1dd500f6440d889894be069f3081e1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a2a11c31d3af9924b729b23efbc64cbb1dd500f6440d889894be069f3081e1d->enter($__internal_9a2a11c31d3af9924b729b23efbc64cbb1dd500f6440d889894be069f3081e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_9a2a11c31d3af9924b729b23efbc64cbb1dd500f6440d889894be069f3081e1d->leave($__internal_9a2a11c31d3af9924b729b23efbc64cbb1dd500f6440d889894be069f3081e1d_prof);

        
        $__internal_4ed30929a0f435311101dfc1be2de3934995ed435bfc32a26409f01824dd74e7->leave($__internal_4ed30929a0f435311101dfc1be2de3934995ed435bfc32a26409f01824dd74e7_prof);

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
        return array (  233 => 51,  221 => 48,  216 => 47,  207 => 46,  190 => 38,  173 => 11,  160 => 9,  151 => 8,  133 => 6,  119 => 52,  117 => 51,  114 => 50,  112 => 46,  103 => 39,  101 => 38,  95 => 34,  89 => 32,  83 => 29,  79 => 28,  74 => 27,  72 => 26,  67 => 24,  59 => 19,  48 => 12,  45 => 11,  43 => 8,  38 => 6,  31 => 1,);
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
            <td><a href=\"{{ path('account_settings', {'user_id': app.session.get('user_id_lit')} ) }}\">profile</a></td>
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
", "base.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/base.html.twig");
    }
}
