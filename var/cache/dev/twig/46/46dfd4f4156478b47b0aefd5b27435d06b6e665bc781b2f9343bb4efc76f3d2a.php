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
        $__internal_2d4c048d47190ae1f0532bd940b3bd57797be1369a418ed528bc3da9834f2f65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d4c048d47190ae1f0532bd940b3bd57797be1369a418ed528bc3da9834f2f65->enter($__internal_2d4c048d47190ae1f0532bd940b3bd57797be1369a418ed528bc3da9834f2f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_bcaa3f4499fd91f7a6844d2ea750395c69c57cb79960affcd6a6a9bdf6305c6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcaa3f4499fd91f7a6844d2ea750395c69c57cb79960affcd6a6a9bdf6305c6c->enter($__internal_bcaa3f4499fd91f7a6844d2ea750395c69c57cb79960affcd6a6a9bdf6305c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

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
        
        $__internal_2d4c048d47190ae1f0532bd940b3bd57797be1369a418ed528bc3da9834f2f65->leave($__internal_2d4c048d47190ae1f0532bd940b3bd57797be1369a418ed528bc3da9834f2f65_prof);

        
        $__internal_bcaa3f4499fd91f7a6844d2ea750395c69c57cb79960affcd6a6a9bdf6305c6c->leave($__internal_bcaa3f4499fd91f7a6844d2ea750395c69c57cb79960affcd6a6a9bdf6305c6c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d7add394a2315dea1f61f8136771abf90562559db5398b2bdfa4ec78b8d218f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7add394a2315dea1f61f8136771abf90562559db5398b2bdfa4ec78b8d218f8->enter($__internal_d7add394a2315dea1f61f8136771abf90562559db5398b2bdfa4ec78b8d218f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_375755c685a29abda09f4a9c8c37af836499a885fc161ca86827d1dab22d4b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_375755c685a29abda09f4a9c8c37af836499a885fc161ca86827d1dab22d4b27->enter($__internal_375755c685a29abda09f4a9c8c37af836499a885fc161ca86827d1dab22d4b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_375755c685a29abda09f4a9c8c37af836499a885fc161ca86827d1dab22d4b27->leave($__internal_375755c685a29abda09f4a9c8c37af836499a885fc161ca86827d1dab22d4b27_prof);

        
        $__internal_d7add394a2315dea1f61f8136771abf90562559db5398b2bdfa4ec78b8d218f8->leave($__internal_d7add394a2315dea1f61f8136771abf90562559db5398b2bdfa4ec78b8d218f8_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_2b15884a0260b28e4b206227cca14b641e102be5cb52fa3994154d1d956c3ad7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b15884a0260b28e4b206227cca14b641e102be5cb52fa3994154d1d956c3ad7->enter($__internal_2b15884a0260b28e4b206227cca14b641e102be5cb52fa3994154d1d956c3ad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4108db40fad9f83beb2f63564aa28449b1f325bebc22ab186ab430141619d00d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4108db40fad9f83beb2f63564aa28449b1f325bebc22ab186ab430141619d00d->enter($__internal_4108db40fad9f83beb2f63564aa28449b1f325bebc22ab186ab430141619d00d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_4108db40fad9f83beb2f63564aa28449b1f325bebc22ab186ab430141619d00d->leave($__internal_4108db40fad9f83beb2f63564aa28449b1f325bebc22ab186ab430141619d00d_prof);

        
        $__internal_2b15884a0260b28e4b206227cca14b641e102be5cb52fa3994154d1d956c3ad7->leave($__internal_2b15884a0260b28e4b206227cca14b641e102be5cb52fa3994154d1d956c3ad7_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_cbb077a1a1eda215a67cdf2c79757eaf69a8ede6fda613a41ed876b2ba6e1ed8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbb077a1a1eda215a67cdf2c79757eaf69a8ede6fda613a41ed876b2ba6e1ed8->enter($__internal_cbb077a1a1eda215a67cdf2c79757eaf69a8ede6fda613a41ed876b2ba6e1ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_5d8c2d7eb2c1b6b00e0c39d9a62fec64d34937dbd7ff9124c6c043284f1fac1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d8c2d7eb2c1b6b00e0c39d9a62fec64d34937dbd7ff9124c6c043284f1fac1b->enter($__internal_5d8c2d7eb2c1b6b00e0c39d9a62fec64d34937dbd7ff9124c6c043284f1fac1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5d8c2d7eb2c1b6b00e0c39d9a62fec64d34937dbd7ff9124c6c043284f1fac1b->leave($__internal_5d8c2d7eb2c1b6b00e0c39d9a62fec64d34937dbd7ff9124c6c043284f1fac1b_prof);

        
        $__internal_cbb077a1a1eda215a67cdf2c79757eaf69a8ede6fda613a41ed876b2ba6e1ed8->leave($__internal_cbb077a1a1eda215a67cdf2c79757eaf69a8ede6fda613a41ed876b2ba6e1ed8_prof);

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
", "TwigBundle::layout.html.twig", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
