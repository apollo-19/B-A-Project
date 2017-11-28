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
        $__internal_aa200b30e4e45e51addf7eac05a9c9386f82ceb1ad6b66fb4f107bd1ee818ce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa200b30e4e45e51addf7eac05a9c9386f82ceb1ad6b66fb4f107bd1ee818ce8->enter($__internal_aa200b30e4e45e51addf7eac05a9c9386f82ceb1ad6b66fb4f107bd1ee818ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_bf87adfb22bcea4e5ca5eeb2497188a987ada18bf4bfd4c9f45714c8e2e97dfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf87adfb22bcea4e5ca5eeb2497188a987ada18bf4bfd4c9f45714c8e2e97dfc->enter($__internal_bf87adfb22bcea4e5ca5eeb2497188a987ada18bf4bfd4c9f45714c8e2e97dfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa200b30e4e45e51addf7eac05a9c9386f82ceb1ad6b66fb4f107bd1ee818ce8->leave($__internal_aa200b30e4e45e51addf7eac05a9c9386f82ceb1ad6b66fb4f107bd1ee818ce8_prof);

        
        $__internal_bf87adfb22bcea4e5ca5eeb2497188a987ada18bf4bfd4c9f45714c8e2e97dfc->leave($__internal_bf87adfb22bcea4e5ca5eeb2497188a987ada18bf4bfd4c9f45714c8e2e97dfc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_362dbef1ab447c4a858c3ae5b2976b67f83a3d069a424dbe4f8c8b8d10278182 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_362dbef1ab447c4a858c3ae5b2976b67f83a3d069a424dbe4f8c8b8d10278182->enter($__internal_362dbef1ab447c4a858c3ae5b2976b67f83a3d069a424dbe4f8c8b8d10278182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6557cc9196e61cbce93e4a2a1d03632dfab2ee2ec35b5de8f7d102c8a9f11cac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6557cc9196e61cbce93e4a2a1d03632dfab2ee2ec35b5de8f7d102c8a9f11cac->enter($__internal_6557cc9196e61cbce93e4a2a1d03632dfab2ee2ec35b5de8f7d102c8a9f11cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6557cc9196e61cbce93e4a2a1d03632dfab2ee2ec35b5de8f7d102c8a9f11cac->leave($__internal_6557cc9196e61cbce93e4a2a1d03632dfab2ee2ec35b5de8f7d102c8a9f11cac_prof);

        
        $__internal_362dbef1ab447c4a858c3ae5b2976b67f83a3d069a424dbe4f8c8b8d10278182->leave($__internal_362dbef1ab447c4a858c3ae5b2976b67f83a3d069a424dbe4f8c8b8d10278182_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_119f384f70fd80e7b20b8e5945828a9728b2b6c66a9012ba675d0b152d94bd27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_119f384f70fd80e7b20b8e5945828a9728b2b6c66a9012ba675d0b152d94bd27->enter($__internal_119f384f70fd80e7b20b8e5945828a9728b2b6c66a9012ba675d0b152d94bd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c5ae13041839ae6d19f17fbfaecec4dc4c39860494852256f805d6ea77ae8b91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ae13041839ae6d19f17fbfaecec4dc4c39860494852256f805d6ea77ae8b91->enter($__internal_c5ae13041839ae6d19f17fbfaecec4dc4c39860494852256f805d6ea77ae8b91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c5ae13041839ae6d19f17fbfaecec4dc4c39860494852256f805d6ea77ae8b91->leave($__internal_c5ae13041839ae6d19f17fbfaecec4dc4c39860494852256f805d6ea77ae8b91_prof);

        
        $__internal_119f384f70fd80e7b20b8e5945828a9728b2b6c66a9012ba675d0b152d94bd27->leave($__internal_119f384f70fd80e7b20b8e5945828a9728b2b6c66a9012ba675d0b152d94bd27_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_779aff6c496fbefb08de4cc5e262d3fe71f728eb2a56d48a7c64843830fafce9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_779aff6c496fbefb08de4cc5e262d3fe71f728eb2a56d48a7c64843830fafce9->enter($__internal_779aff6c496fbefb08de4cc5e262d3fe71f728eb2a56d48a7c64843830fafce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3b25ff8792a287e23699a49755cd09080bb766bd5c678a01df18d760c431351c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b25ff8792a287e23699a49755cd09080bb766bd5c678a01df18d760c431351c->enter($__internal_3b25ff8792a287e23699a49755cd09080bb766bd5c678a01df18d760c431351c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_3b25ff8792a287e23699a49755cd09080bb766bd5c678a01df18d760c431351c->leave($__internal_3b25ff8792a287e23699a49755cd09080bb766bd5c678a01df18d760c431351c_prof);

        
        $__internal_779aff6c496fbefb08de4cc5e262d3fe71f728eb2a56d48a7c64843830fafce9->leave($__internal_779aff6c496fbefb08de4cc5e262d3fe71f728eb2a56d48a7c64843830fafce9_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
