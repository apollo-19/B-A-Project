<?php

/* :admin:form.html.twig */
class __TwigTemplate_010c403c7733ef925304a692fcef098f115b5c00747731c9b0e4db9b4a039a42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":admin:form.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c26b5633876676a7836b29924f97ac3501b9c21a9d9a5986b5f30780644f6139 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c26b5633876676a7836b29924f97ac3501b9c21a9d9a5986b5f30780644f6139->enter($__internal_c26b5633876676a7836b29924f97ac3501b9c21a9d9a5986b5f30780644f6139_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:form.html.twig"));

        $__internal_4825dbe674e282cb13f0c5b942a30ff0edaa38171e9918a4aba0793f416cf251 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4825dbe674e282cb13f0c5b942a30ff0edaa38171e9918a4aba0793f416cf251->enter($__internal_4825dbe674e282cb13f0c5b942a30ff0edaa38171e9918a4aba0793f416cf251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c26b5633876676a7836b29924f97ac3501b9c21a9d9a5986b5f30780644f6139->leave($__internal_c26b5633876676a7836b29924f97ac3501b9c21a9d9a5986b5f30780644f6139_prof);

        
        $__internal_4825dbe674e282cb13f0c5b942a30ff0edaa38171e9918a4aba0793f416cf251->leave($__internal_4825dbe674e282cb13f0c5b942a30ff0edaa38171e9918a4aba0793f416cf251_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f637fd30ccdfb1cba9b659a9109105f2a5e62b4e9e455f5f2dd8d269a183c5fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f637fd30ccdfb1cba9b659a9109105f2a5e62b4e9e455f5f2dd8d269a183c5fe->enter($__internal_f637fd30ccdfb1cba9b659a9109105f2a5e62b4e9e455f5f2dd8d269a183c5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dc39a07dead8176ef42ee49a362b4a3e5c20dbe21ff8b0d66464b6d0bf443deb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc39a07dead8176ef42ee49a362b4a3e5c20dbe21ff8b0d66464b6d0bf443deb->enter($__internal_dc39a07dead8176ef42ee49a362b4a3e5c20dbe21ff8b0d66464b6d0bf443deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Admin") : ("Edit Admin"));
        echo "
";
        
        $__internal_dc39a07dead8176ef42ee49a362b4a3e5c20dbe21ff8b0d66464b6d0bf443deb->leave($__internal_dc39a07dead8176ef42ee49a362b4a3e5c20dbe21ff8b0d66464b6d0bf443deb_prof);

        
        $__internal_f637fd30ccdfb1cba9b659a9109105f2a5e62b4e9e455f5f2dd8d269a183c5fe->leave($__internal_f637fd30ccdfb1cba9b659a9109105f2a5e62b4e9e455f5f2dd8d269a183c5fe_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f5a842daacd6ceee719b40df715bc62c897edd3090601f0da10f276453dd30f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f5a842daacd6ceee719b40df715bc62c897edd3090601f0da10f276453dd30f->enter($__internal_5f5a842daacd6ceee719b40df715bc62c897edd3090601f0da10f276453dd30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0abf16994e0725a0787f34784b303cf45d3e32b37c36c85473cafa5471ea825b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0abf16994e0725a0787f34784b303cf45d3e32b37c36c85473cafa5471ea825b->enter($__internal_0abf16994e0725a0787f34784b303cf45d3e32b37c36c85473cafa5471ea825b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">";
        // line 10
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Admin") : ("Edit Admin"));
        echo "</h1>
      <h2>";
        // line 11
        echo twig_escape_filter($this->env, ((array_key_exists("result_message", $context)) ? (($context["result_message"] ?? $this->getContext($context, "result_message"))) : ("")), "html", null, true);
        echo "</h2>

      <label for=\"form[first_name]\">First Name</label>
      <input type=\"text\" name=\"form[first_name]\" placeholder=\"\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "first_name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "first_name", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[middle_name]\">Middle Name</label>
      <input type=\"text\" name=\"form[middle_name]\" placeholder=\"\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "middle_name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "middle_name", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[last_name]\">Last Name</label>
      <input type=\"text\" name=\"form[last_name]\" placeholder=\"\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "last_name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "last_name", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[mobile_number]\">Mobile Number</label>
      <input type=\"text\" name=\"form[mobile_number]\" placeholder=\"\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "mobile_number", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mobile_number", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[email_address]\">Email Address</label>
      <input type=\"text\" name=\"form[email_address]\" placeholder=\"\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "email_address", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email_address", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[admin_type]\">Admin Type</label>
      <select name=\"form[admin_type]\" id=\"admin_type\">
        <option value=\"registrar\" ";
        // line 30
        echo ((($this->getAttribute(($context["form"] ?? null), "admin_type", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "admin_type", array()) == "registrar"))) ? ("selected") : (""));
        echo ">Registrar</option>
        <option value=\"academics\" ";
        // line 31
        echo ((($this->getAttribute(($context["form"] ?? null), "admin_type", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "admin_type", array()) == "academics"))) ? ("selected") : (""));
        echo ">Academics</option>
      </select>

      <label for=\"form[admin_class]\">Admin Class</label>
      <select name=\"form[admin_class]\" id=\"admin_class\">
        <option disabled></option>
        <optgroup label=\"Registrar\" id=\"registrar\">
          <option value=\"registrar head\" ";
        // line 38
        echo ((($this->getAttribute(($context["form"] ?? null), "admin_class", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "admin_class", array()) == "registrar head"))) ? ("selected") : (""));
        echo ">Registrar Head</option>
          <option value=\"registrar officer\" ";
        // line 39
        echo ((($this->getAttribute(($context["form"] ?? null), "admin_class", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "admin_class", array()) == "registrar officer"))) ? ("selected") : (""));
        echo ">Registrar Officer</option>
        </optgroup>

        <optgroup label=\"Academics\" id=\"academics\">
          <option value=\"integrated coordinator\" ";
        // line 43
        echo ((($this->getAttribute(($context["form"] ?? null), "admin_class", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "admin_class", array()) == "integrated coordinator"))) ? ("selected") : (""));
        echo ">Integrated Coordinator</option>
          <option value=\"module coordinator\" ";
        // line 44
        echo ((($this->getAttribute(($context["form"] ?? null), "admin_class", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "admin_class", array()) == "module coordinator"))) ? ("selected") : (""));
        echo ">Module Coordinator</option>
          <option value=\"minor coordinator\" ";
        // line 45
        echo ((($this->getAttribute(($context["form"] ?? null), "admin_class", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "admin_class", array()) == "minor coordinator"))) ? ("selected") : (""));
        echo ">Minor Coordinator</option>
        </optgroup>
      </select>

      ";
        // line 49
        if ((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) {
            // line 50
            echo "        <label for=\"form[user_name]\">User Name</label>
        <input type=\"text\" name=\"form[user_name]\" placeholder=\"user_21\" value=\"";
            // line 51
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "user_name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "user_name", array())) : ("")), "html", null, true);
            echo "\" required />

        <label for=\"form[password]\">Password</label>
        <input type=\"password\" name=\"form[password]\" placeholder=\"A minimum of 6 characters\" required />

        <label for=\"form[confirm_password]\">Confirm Password</label>
        <input type=\"password\" name=\"form[confirm_password]\" placeholder=\"A minimum of 6 characters\" required />
      ";
        }
        // line 59
        echo "
      <button>";
        // line 60
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Create Admin") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_0abf16994e0725a0787f34784b303cf45d3e32b37c36c85473cafa5471ea825b->leave($__internal_0abf16994e0725a0787f34784b303cf45d3e32b37c36c85473cafa5471ea825b_prof);

        
        $__internal_5f5a842daacd6ceee719b40df715bc62c897edd3090601f0da10f276453dd30f->leave($__internal_5f5a842daacd6ceee719b40df715bc62c897edd3090601f0da10f276453dd30f_prof);

    }

    // line 67
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_09ed68954c717c2a831252a395916b5226e53c30e14d1742625dcacb629e964d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09ed68954c717c2a831252a395916b5226e53c30e14d1742625dcacb629e964d->enter($__internal_09ed68954c717c2a831252a395916b5226e53c30e14d1742625dcacb629e964d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_0913c883e005b04af3d4a9b3005e12ea37efb66476e44a89f0781c71115510bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0913c883e005b04af3d4a9b3005e12ea37efb66476e44a89f0781c71115510bb->enter($__internal_0913c883e005b04af3d4a9b3005e12ea37efb66476e44a89f0781c71115510bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 68
        echo "  <script type=\"text/javascript\">
    function AdminType() {
      var admin_type = \$('#admin_type').val();
      (admin_type == 'registrar') ? \$('#academics').hide() : \$('#registrar').hide();

      \$('#' + admin_type).show();
    }

    \$(document).ready(function(){
      AdminType();
      \$('#admin_type').on(\"change\", function() {
        AdminType();
      });
    });
  </script>
";
        
        $__internal_0913c883e005b04af3d4a9b3005e12ea37efb66476e44a89f0781c71115510bb->leave($__internal_0913c883e005b04af3d4a9b3005e12ea37efb66476e44a89f0781c71115510bb_prof);

        
        $__internal_09ed68954c717c2a831252a395916b5226e53c30e14d1742625dcacb629e964d->leave($__internal_09ed68954c717c2a831252a395916b5226e53c30e14d1742625dcacb629e964d_prof);

    }

    public function getTemplateName()
    {
        return ":admin:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 68,  193 => 67,  177 => 60,  174 => 59,  163 => 51,  160 => 50,  158 => 49,  151 => 45,  147 => 44,  143 => 43,  136 => 39,  132 => 38,  122 => 31,  118 => 30,  111 => 26,  105 => 23,  99 => 20,  93 => 17,  87 => 14,  81 => 11,  77 => 10,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
  {{ (mode == 'new') ? 'New Admin' : 'Edit Admin' }}
{% endblock %}

{% block body %}
  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">{{ (mode == 'new') ? 'New Admin' : 'Edit Admin' }}</h1>
      <h2>{{ result_message is defined ? result_message : '' }}</h2>

      <label for=\"form[first_name]\">First Name</label>
      <input type=\"text\" name=\"form[first_name]\" placeholder=\"\" value=\"{{ form.first_name is defined ? form.first_name : '' }}\" required />

      <label for=\"form[middle_name]\">Middle Name</label>
      <input type=\"text\" name=\"form[middle_name]\" placeholder=\"\" value=\"{{ form.middle_name is defined ? form.middle_name : '' }}\" required />

      <label for=\"form[last_name]\">Last Name</label>
      <input type=\"text\" name=\"form[last_name]\" placeholder=\"\" value=\"{{ form.last_name is defined ? form.last_name : '' }}\" required />

      <label for=\"form[mobile_number]\">Mobile Number</label>
      <input type=\"text\" name=\"form[mobile_number]\" placeholder=\"\" value=\"{{ form.mobile_number is defined ? form.mobile_number : '' }}\" required />

      <label for=\"form[email_address]\">Email Address</label>
      <input type=\"text\" name=\"form[email_address]\" placeholder=\"\" value=\"{{ form.email_address is defined ? form.email_address : '' }}\" required />

      <label for=\"form[admin_type]\">Admin Type</label>
      <select name=\"form[admin_type]\" id=\"admin_type\">
        <option value=\"registrar\" {{ (form.admin_type is defined and form.admin_type == 'registrar') ? 'selected' : '' }}>Registrar</option>
        <option value=\"academics\" {{ (form.admin_type is defined and form.admin_type == 'academics') ? 'selected' : '' }}>Academics</option>
      </select>

      <label for=\"form[admin_class]\">Admin Class</label>
      <select name=\"form[admin_class]\" id=\"admin_class\">
        <option disabled></option>
        <optgroup label=\"Registrar\" id=\"registrar\">
          <option value=\"registrar head\" {{ (form.admin_class is defined and form.admin_class == 'registrar head') ? 'selected' : '' }}>Registrar Head</option>
          <option value=\"registrar officer\" {{ (form.admin_class is defined and form.admin_class == 'registrar officer') ? 'selected' : '' }}>Registrar Officer</option>
        </optgroup>

        <optgroup label=\"Academics\" id=\"academics\">
          <option value=\"integrated coordinator\" {{ (form.admin_class is defined and form.admin_class == 'integrated coordinator') ? 'selected' : '' }}>Integrated Coordinator</option>
          <option value=\"module coordinator\" {{ (form.admin_class is defined and form.admin_class == 'module coordinator') ? 'selected' : '' }}>Module Coordinator</option>
          <option value=\"minor coordinator\" {{ (form.admin_class is defined and form.admin_class == 'minor coordinator') ? 'selected' : '' }}>Minor Coordinator</option>
        </optgroup>
      </select>

      {% if(mode == 'new') %}
        <label for=\"form[user_name]\">User Name</label>
        <input type=\"text\" name=\"form[user_name]\" placeholder=\"user_21\" value=\"{{ form.user_name is defined ? form.user_name : '' }}\" required />

        <label for=\"form[password]\">Password</label>
        <input type=\"password\" name=\"form[password]\" placeholder=\"A minimum of 6 characters\" required />

        <label for=\"form[confirm_password]\">Confirm Password</label>
        <input type=\"password\" name=\"form[confirm_password]\" placeholder=\"A minimum of 6 characters\" required />
      {% endif %}

      <button>{{ (mode == 'new') ? 'Create Admin' : 'Save Changes' }}</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}

{% block javascript %}
  <script type=\"text/javascript\">
    function AdminType() {
      var admin_type = \$('#admin_type').val();
      (admin_type == 'registrar') ? \$('#academics').hide() : \$('#registrar').hide();

      \$('#' + admin_type).show();
    }

    \$(document).ready(function(){
      AdminType();
      \$('#admin_type').on(\"change\", function() {
        AdminType();
      });
    });
  </script>
{% endblock %}
", ":admin:form.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/admin/form.html.twig");
    }
}
