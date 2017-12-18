<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_40d17f889cda0e9198fdd0de6a45002f4e95d20d7f1dda71b6e52967dec960e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7cd4020155c2092247429f82d541390873f1eb55521130dec20573e992ca7fe8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7cd4020155c2092247429f82d541390873f1eb55521130dec20573e992ca7fe8->enter($__internal_7cd4020155c2092247429f82d541390873f1eb55521130dec20573e992ca7fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_1f04550def60b7ab0b488d8d59157c99e3c0dead2ff5e66ce39d30b5903220c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f04550def60b7ab0b488d8d59157c99e3c0dead2ff5e66ce39d30b5903220c1->enter($__internal_1f04550def60b7ab0b488d8d59157c99e3c0dead2ff5e66ce39d30b5903220c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_7cd4020155c2092247429f82d541390873f1eb55521130dec20573e992ca7fe8->leave($__internal_7cd4020155c2092247429f82d541390873f1eb55521130dec20573e992ca7fe8_prof);

        
        $__internal_1f04550def60b7ab0b488d8d59157c99e3c0dead2ff5e66ce39d30b5903220c1->leave($__internal_1f04550def60b7ab0b488d8d59157c99e3c0dead2ff5e66ce39d30b5903220c1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1a0dc4df2db22f57771d2324f6d24abbe0036778c2a1beeb1044afbf3bcd760 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1a0dc4df2db22f57771d2324f6d24abbe0036778c2a1beeb1044afbf3bcd760->enter($__internal_e1a0dc4df2db22f57771d2324f6d24abbe0036778c2a1beeb1044afbf3bcd760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4f94bafbfd8ce87b15c336e7cd633a8927f16cb2281f98013aa56048bc4730bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f94bafbfd8ce87b15c336e7cd633a8927f16cb2281f98013aa56048bc4730bf->enter($__internal_4f94bafbfd8ce87b15c336e7cd633a8927f16cb2281f98013aa56048bc4730bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4f94bafbfd8ce87b15c336e7cd633a8927f16cb2281f98013aa56048bc4730bf->leave($__internal_4f94bafbfd8ce87b15c336e7cd633a8927f16cb2281f98013aa56048bc4730bf_prof);

        
        $__internal_e1a0dc4df2db22f57771d2324f6d24abbe0036778c2a1beeb1044afbf3bcd760->leave($__internal_e1a0dc4df2db22f57771d2324f6d24abbe0036778c2a1beeb1044afbf3bcd760_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_11f69b0ee29e7a2b017a4597a2c5935589041d273292fd76e30e5886b3aee5d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11f69b0ee29e7a2b017a4597a2c5935589041d273292fd76e30e5886b3aee5d9->enter($__internal_11f69b0ee29e7a2b017a4597a2c5935589041d273292fd76e30e5886b3aee5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bd959f9f75ce4e002c696a916220cedcc4ffb34a027cda7445f7fc5fe44f9666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd959f9f75ce4e002c696a916220cedcc4ffb34a027cda7445f7fc5fe44f9666->enter($__internal_bd959f9f75ce4e002c696a916220cedcc4ffb34a027cda7445f7fc5fe44f9666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_bd959f9f75ce4e002c696a916220cedcc4ffb34a027cda7445f7fc5fe44f9666->leave($__internal_bd959f9f75ce4e002c696a916220cedcc4ffb34a027cda7445f7fc5fe44f9666_prof);

        
        $__internal_11f69b0ee29e7a2b017a4597a2c5935589041d273292fd76e30e5886b3aee5d9->leave($__internal_11f69b0ee29e7a2b017a4597a2c5935589041d273292fd76e30e5886b3aee5d9_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_a46bbb2ff17f20bef08767e98027f773a714e9879eb5c8456fc026732b28a9fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a46bbb2ff17f20bef08767e98027f773a714e9879eb5c8456fc026732b28a9fc->enter($__internal_a46bbb2ff17f20bef08767e98027f773a714e9879eb5c8456fc026732b28a9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8a6e61b594c43ef73077239a0635755868bbff0cace4a0430b16e62f8c7ab365 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6e61b594c43ef73077239a0635755868bbff0cace4a0430b16e62f8c7ab365->enter($__internal_8a6e61b594c43ef73077239a0635755868bbff0cace4a0430b16e62f8c7ab365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8a6e61b594c43ef73077239a0635755868bbff0cace4a0430b16e62f8c7ab365->leave($__internal_8a6e61b594c43ef73077239a0635755868bbff0cace4a0430b16e62f8c7ab365_prof);

        
        $__internal_a46bbb2ff17f20bef08767e98027f773a714e9879eb5c8456fc026732b28a9fc->leave($__internal_a46bbb2ff17f20bef08767e98027f773a714e9879eb5c8456fc026732b28a9fc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
