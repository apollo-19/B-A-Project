<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_2dcdedd223b97c9b17621841959cc93fc1c3e8c8571995ae49a8abacd3fa01cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71909474bc06ed8cd5316d3225ccc5dae2446dd52ea3eecfb7c0a574de7b5382 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71909474bc06ed8cd5316d3225ccc5dae2446dd52ea3eecfb7c0a574de7b5382->enter($__internal_71909474bc06ed8cd5316d3225ccc5dae2446dd52ea3eecfb7c0a574de7b5382_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_9568a08a00028ae3a727b51e274da9a98ec222538c33df5559606c04ecbff414 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9568a08a00028ae3a727b51e274da9a98ec222538c33df5559606c04ecbff414->enter($__internal_9568a08a00028ae3a727b51e274da9a98ec222538c33df5559606c04ecbff414_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_71909474bc06ed8cd5316d3225ccc5dae2446dd52ea3eecfb7c0a574de7b5382->leave($__internal_71909474bc06ed8cd5316d3225ccc5dae2446dd52ea3eecfb7c0a574de7b5382_prof);

        
        $__internal_9568a08a00028ae3a727b51e274da9a98ec222538c33df5559606c04ecbff414->leave($__internal_9568a08a00028ae3a727b51e274da9a98ec222538c33df5559606c04ecbff414_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/home/amanuel/Documents/projects/A-Bnew/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
