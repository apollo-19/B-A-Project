<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_1878275fdbc32b660cfbee6afea5d6e15c55adb100b0dbddcb4be415750c22a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db354eb57e0dce79756fedc7cd14664d3c0181cb0d2b9304eb5be4cfc453f9e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db354eb57e0dce79756fedc7cd14664d3c0181cb0d2b9304eb5be4cfc453f9e7->enter($__internal_db354eb57e0dce79756fedc7cd14664d3c0181cb0d2b9304eb5be4cfc453f9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_77218e59612575f0e473d42bbec48c34f220fa9241134f632a284ba1d20382fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77218e59612575f0e473d42bbec48c34f220fa9241134f632a284ba1d20382fb->enter($__internal_77218e59612575f0e473d42bbec48c34f220fa9241134f632a284ba1d20382fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db354eb57e0dce79756fedc7cd14664d3c0181cb0d2b9304eb5be4cfc453f9e7->leave($__internal_db354eb57e0dce79756fedc7cd14664d3c0181cb0d2b9304eb5be4cfc453f9e7_prof);

        
        $__internal_77218e59612575f0e473d42bbec48c34f220fa9241134f632a284ba1d20382fb->leave($__internal_77218e59612575f0e473d42bbec48c34f220fa9241134f632a284ba1d20382fb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1dbaa1ea1b9de2ad5646817a42f7b3e21fed281a3cc7b88bd9f54db174d731b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dbaa1ea1b9de2ad5646817a42f7b3e21fed281a3cc7b88bd9f54db174d731b7->enter($__internal_1dbaa1ea1b9de2ad5646817a42f7b3e21fed281a3cc7b88bd9f54db174d731b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9b2b3174f3a8d71c88338e01a9fd95a2e7df931fc680b86615c00061e7b24b8d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b2b3174f3a8d71c88338e01a9fd95a2e7df931fc680b86615c00061e7b24b8d->enter($__internal_9b2b3174f3a8d71c88338e01a9fd95a2e7df931fc680b86615c00061e7b24b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_9b2b3174f3a8d71c88338e01a9fd95a2e7df931fc680b86615c00061e7b24b8d->leave($__internal_9b2b3174f3a8d71c88338e01a9fd95a2e7df931fc680b86615c00061e7b24b8d_prof);

        
        $__internal_1dbaa1ea1b9de2ad5646817a42f7b3e21fed281a3cc7b88bd9f54db174d731b7->leave($__internal_1dbaa1ea1b9de2ad5646817a42f7b3e21fed281a3cc7b88bd9f54db174d731b7_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6f1c2e9c9857ea7f7bb8512acf8ccf4ca919258184fdd057fa4e93ecea0995c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6f1c2e9c9857ea7f7bb8512acf8ccf4ca919258184fdd057fa4e93ecea0995c->enter($__internal_f6f1c2e9c9857ea7f7bb8512acf8ccf4ca919258184fdd057fa4e93ecea0995c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_00450c00657dddb448bbf6605a9d27e593c20f90d80cf92a8335c2d5d9f2a1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00450c00657dddb448bbf6605a9d27e593c20f90d80cf92a8335c2d5d9f2a1b0->enter($__internal_00450c00657dddb448bbf6605a9d27e593c20f90d80cf92a8335c2d5d9f2a1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_00450c00657dddb448bbf6605a9d27e593c20f90d80cf92a8335c2d5d9f2a1b0->leave($__internal_00450c00657dddb448bbf6605a9d27e593c20f90d80cf92a8335c2d5d9f2a1b0_prof);

        
        $__internal_f6f1c2e9c9857ea7f7bb8512acf8ccf4ca919258184fdd057fa4e93ecea0995c->leave($__internal_f6f1c2e9c9857ea7f7bb8512acf8ccf4ca919258184fdd057fa4e93ecea0995c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_255c231ab0e9a0e89d88154c4015bac3280e7123b7edf9af679783c5823a90ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_255c231ab0e9a0e89d88154c4015bac3280e7123b7edf9af679783c5823a90ee->enter($__internal_255c231ab0e9a0e89d88154c4015bac3280e7123b7edf9af679783c5823a90ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d6d86671c709eac07d2215db67ee229834b11e75df99857904d4f810d10e4d0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6d86671c709eac07d2215db67ee229834b11e75df99857904d4f810d10e4d0b->enter($__internal_d6d86671c709eac07d2215db67ee229834b11e75df99857904d4f810d10e4d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_d6d86671c709eac07d2215db67ee229834b11e75df99857904d4f810d10e4d0b->leave($__internal_d6d86671c709eac07d2215db67ee229834b11e75df99857904d4f810d10e4d0b_prof);

        
        $__internal_255c231ab0e9a0e89d88154c4015bac3280e7123b7edf9af679783c5823a90ee->leave($__internal_255c231ab0e9a0e89d88154c4015bac3280e7123b7edf9af679783c5823a90ee_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/home/amanuel/Documents/projects/B-A-Project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
