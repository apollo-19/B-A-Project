<?php

/* admin/form.html.twig */
class __TwigTemplate_010c403c7733ef925304a692fcef098f115b5c00747731c9b0e4db9b4a039a42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "admin/form.html.twig", 1);
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
        $__internal_e2ba3461654b75d006e08598facefce1cd0139e8300781e61066dfc5661929d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2ba3461654b75d006e08598facefce1cd0139e8300781e61066dfc5661929d1->enter($__internal_e2ba3461654b75d006e08598facefce1cd0139e8300781e61066dfc5661929d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/form.html.twig"));

        $__internal_553fe18dec9159f13d499f1c3e29a231fa2b39671271d7d93b74ad7778e91c37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_553fe18dec9159f13d499f1c3e29a231fa2b39671271d7d93b74ad7778e91c37->enter($__internal_553fe18dec9159f13d499f1c3e29a231fa2b39671271d7d93b74ad7778e91c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e2ba3461654b75d006e08598facefce1cd0139e8300781e61066dfc5661929d1->leave($__internal_e2ba3461654b75d006e08598facefce1cd0139e8300781e61066dfc5661929d1_prof);

        
        $__internal_553fe18dec9159f13d499f1c3e29a231fa2b39671271d7d93b74ad7778e91c37->leave($__internal_553fe18dec9159f13d499f1c3e29a231fa2b39671271d7d93b74ad7778e91c37_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b408fd821f0f0e70b94fef0057ca8b4de7e3be78af55bbf44272f415643eb911 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b408fd821f0f0e70b94fef0057ca8b4de7e3be78af55bbf44272f415643eb911->enter($__internal_b408fd821f0f0e70b94fef0057ca8b4de7e3be78af55bbf44272f415643eb911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2c551b8b4ffb0401c8b208d3ee9be566a6185e43b88db2a5e04379bc4bbce2d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c551b8b4ffb0401c8b208d3ee9be566a6185e43b88db2a5e04379bc4bbce2d5->enter($__internal_2c551b8b4ffb0401c8b208d3ee9be566a6185e43b88db2a5e04379bc4bbce2d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Admin") : ("Edit Admin"));
        echo "
";
        
        $__internal_2c551b8b4ffb0401c8b208d3ee9be566a6185e43b88db2a5e04379bc4bbce2d5->leave($__internal_2c551b8b4ffb0401c8b208d3ee9be566a6185e43b88db2a5e04379bc4bbce2d5_prof);

        
        $__internal_b408fd821f0f0e70b94fef0057ca8b4de7e3be78af55bbf44272f415643eb911->leave($__internal_b408fd821f0f0e70b94fef0057ca8b4de7e3be78af55bbf44272f415643eb911_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e538fb256cb5751a0df499d3f7712f1397db74868bd048e5c4364ab3261ff60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e538fb256cb5751a0df499d3f7712f1397db74868bd048e5c4364ab3261ff60->enter($__internal_2e538fb256cb5751a0df499d3f7712f1397db74868bd048e5c4364ab3261ff60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1d029a342fc80e1a0d3d8daef343c018bf881b96f51464ff6a2152bd5a46016d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d029a342fc80e1a0d3d8daef343c018bf881b96f51464ff6a2152bd5a46016d->enter($__internal_1d029a342fc80e1a0d3d8daef343c018bf881b96f51464ff6a2152bd5a46016d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <optgroup label=\"\" id=\"registrar\">
          <option value=\"registrar head\" ";
        // line 38
        echo ((($this->getAttribute(($context["form"] ?? null), "admin_class", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "admin_class", array()) == "registrar head"))) ? ("selected") : (""));
        echo ">Registrar Head</option>
          <option value=\"registrar officer\" ";
        // line 39
        echo ((($this->getAttribute(($context["form"] ?? null), "admin_class", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "admin_class", array()) == "registrar officer"))) ? ("selected") : (""));
        echo ">Registrar Officer</option>
        </optgroup>

        <optgroup label=\"\" id=\"academics\">
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

      <label for=\"form[user_name]\">User Name</label>
      <input type=\"text\" name=\"form[user_name]\" placeholder=\"\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "user_name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "user_name", array())) : ("")), "html", null, true);
        echo "\" required />

      <button>";
        // line 52
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Create Admin") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_1d029a342fc80e1a0d3d8daef343c018bf881b96f51464ff6a2152bd5a46016d->leave($__internal_1d029a342fc80e1a0d3d8daef343c018bf881b96f51464ff6a2152bd5a46016d_prof);

        
        $__internal_2e538fb256cb5751a0df499d3f7712f1397db74868bd048e5c4364ab3261ff60->leave($__internal_2e538fb256cb5751a0df499d3f7712f1397db74868bd048e5c4364ab3261ff60_prof);

    }

    // line 59
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_cd9f83fa7539ce9b630e6570cfbbf19b0f3ad6e2047bd1c8e11e635a0b8b07f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd9f83fa7539ce9b630e6570cfbbf19b0f3ad6e2047bd1c8e11e635a0b8b07f9->enter($__internal_cd9f83fa7539ce9b630e6570cfbbf19b0f3ad6e2047bd1c8e11e635a0b8b07f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_2168bb297cfca90adece6b1f0ef90cffcd0b3b0bc25ff76437996855908a91b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2168bb297cfca90adece6b1f0ef90cffcd0b3b0bc25ff76437996855908a91b5->enter($__internal_2168bb297cfca90adece6b1f0ef90cffcd0b3b0bc25ff76437996855908a91b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 60
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
        
        $__internal_2168bb297cfca90adece6b1f0ef90cffcd0b3b0bc25ff76437996855908a91b5->leave($__internal_2168bb297cfca90adece6b1f0ef90cffcd0b3b0bc25ff76437996855908a91b5_prof);

        
        $__internal_cd9f83fa7539ce9b630e6570cfbbf19b0f3ad6e2047bd1c8e11e635a0b8b07f9->leave($__internal_cd9f83fa7539ce9b630e6570cfbbf19b0f3ad6e2047bd1c8e11e635a0b8b07f9_prof);

    }

    public function getTemplateName()
    {
        return "admin/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 60,  180 => 59,  164 => 52,  159 => 50,  151 => 45,  147 => 44,  143 => 43,  136 => 39,  132 => 38,  122 => 31,  118 => 30,  111 => 26,  105 => 23,  99 => 20,  93 => 17,  87 => 14,  81 => 11,  77 => 10,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
        <optgroup label=\"\" id=\"registrar\">
          <option value=\"registrar head\" {{ (form.admin_class is defined and form.admin_class == 'registrar head') ? 'selected' : '' }}>Registrar Head</option>
          <option value=\"registrar officer\" {{ (form.admin_class is defined and form.admin_class == 'registrar officer') ? 'selected' : '' }}>Registrar Officer</option>
        </optgroup>

        <optgroup label=\"\" id=\"academics\">
          <option value=\"integrated coordinator\" {{ (form.admin_class is defined and form.admin_class == 'integrated coordinator') ? 'selected' : '' }}>Integrated Coordinator</option>
          <option value=\"module coordinator\" {{ (form.admin_class is defined and form.admin_class == 'module coordinator') ? 'selected' : '' }}>Module Coordinator</option>
          <option value=\"minor coordinator\" {{ (form.admin_class is defined and form.admin_class == 'minor coordinator') ? 'selected' : '' }}>Minor Coordinator</option>
        </optgroup>
      </select>

      <label for=\"form[user_name]\">User Name</label>
      <input type=\"text\" name=\"form[user_name]\" placeholder=\"\" value=\"{{ form.user_name is defined ? form.user_name : '' }}\" required />

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
", "admin/form.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/admin/form.html.twig");
    }
}
