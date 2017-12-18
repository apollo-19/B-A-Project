<?php

/* :teacher:form.html.twig */
class __TwigTemplate_7008e46fb2224c516530a2484a2e7963b459993a535dbb76d8a15c10eca363fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":teacher:form.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_4ec1cebe6708bfd419f774d11e294b8257d7e526a1ba9569192d3529b589d3b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ec1cebe6708bfd419f774d11e294b8257d7e526a1ba9569192d3529b589d3b0->enter($__internal_4ec1cebe6708bfd419f774d11e294b8257d7e526a1ba9569192d3529b589d3b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":teacher:form.html.twig"));

        $__internal_bf0c7f184ac3a15b697383a63beffc8ceeb4989f1666558292186acefb8aaea5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0c7f184ac3a15b697383a63beffc8ceeb4989f1666558292186acefb8aaea5->enter($__internal_bf0c7f184ac3a15b697383a63beffc8ceeb4989f1666558292186acefb8aaea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":teacher:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ec1cebe6708bfd419f774d11e294b8257d7e526a1ba9569192d3529b589d3b0->leave($__internal_4ec1cebe6708bfd419f774d11e294b8257d7e526a1ba9569192d3529b589d3b0_prof);

        
        $__internal_bf0c7f184ac3a15b697383a63beffc8ceeb4989f1666558292186acefb8aaea5->leave($__internal_bf0c7f184ac3a15b697383a63beffc8ceeb4989f1666558292186acefb8aaea5_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a0533bb913dbd44551a88431bfe65f6f3e1f078b378c46b4aa102f6750e81cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a0533bb913dbd44551a88431bfe65f6f3e1f078b378c46b4aa102f6750e81cb->enter($__internal_3a0533bb913dbd44551a88431bfe65f6f3e1f078b378c46b4aa102f6750e81cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bad711a69e6de0dad958c5371da6c7d4c75a84b1ca7afd0bffd7bc796fcff31a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bad711a69e6de0dad958c5371da6c7d4c75a84b1ca7afd0bffd7bc796fcff31a->enter($__internal_bad711a69e6de0dad958c5371da6c7d4c75a84b1ca7afd0bffd7bc796fcff31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Teacher") : ("Edit Teacher"));
        echo "
";
        
        $__internal_bad711a69e6de0dad958c5371da6c7d4c75a84b1ca7afd0bffd7bc796fcff31a->leave($__internal_bad711a69e6de0dad958c5371da6c7d4c75a84b1ca7afd0bffd7bc796fcff31a_prof);

        
        $__internal_3a0533bb913dbd44551a88431bfe65f6f3e1f078b378c46b4aa102f6750e81cb->leave($__internal_3a0533bb913dbd44551a88431bfe65f6f3e1f078b378c46b4aa102f6750e81cb_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_701e91e80aa645eecfd8f8d6d5a52e5788a679a7c6e937558c806f96d5ded6b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_701e91e80aa645eecfd8f8d6d5a52e5788a679a7c6e937558c806f96d5ded6b2->enter($__internal_701e91e80aa645eecfd8f8d6d5a52e5788a679a7c6e937558c806f96d5ded6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_ae9c80c8dc6048201df382ff8de1bc520c2d74fe751bac5295438c05f6a38a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae9c80c8dc6048201df382ff8de1bc520c2d74fe751bac5295438c05f6a38a39->enter($__internal_ae9c80c8dc6048201df382ff8de1bc520c2d74fe751bac5295438c05f6a38a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_ae9c80c8dc6048201df382ff8de1bc520c2d74fe751bac5295438c05f6a38a39->leave($__internal_ae9c80c8dc6048201df382ff8de1bc520c2d74fe751bac5295438c05f6a38a39_prof);

        
        $__internal_701e91e80aa645eecfd8f8d6d5a52e5788a679a7c6e937558c806f96d5ded6b2->leave($__internal_701e91e80aa645eecfd8f8d6d5a52e5788a679a7c6e937558c806f96d5ded6b2_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c0b4aed79c65f66270569e2ffac1e9ec868bf93f562abc2cdb5394c6d41ec51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c0b4aed79c65f66270569e2ffac1e9ec868bf93f562abc2cdb5394c6d41ec51->enter($__internal_6c0b4aed79c65f66270569e2ffac1e9ec868bf93f562abc2cdb5394c6d41ec51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2735d38eba494085d7c12d26bc4ebdfbff865286f64e5dfecab4351fe71760b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2735d38eba494085d7c12d26bc4ebdfbff865286f64e5dfecab4351fe71760b5->enter($__internal_2735d38eba494085d7c12d26bc4ebdfbff865286f64e5dfecab4351fe71760b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">";
        // line 15
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Teacher") : ("Edit Teacher"));
        echo "</h1>
      <h2>";
        // line 16
        echo twig_escape_filter($this->env, ((array_key_exists("result_message", $context)) ? (($context["result_message"] ?? $this->getContext($context, "result_message"))) : ("")), "html", null, true);
        echo "</h2>

      <label for=\"form[first_name]\">First Name</label>
      <input type=\"text\" name=\"form[first_name]\" placeholder=\"Given Name\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "first_name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "first_name", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[middle_name]\">Middle Name</label>
      <input type=\"text\" name=\"form[middle_name]\" placeholder=\"Father's Name\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "middle_name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "middle_name", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[last_name]\">Last Name</label>
      <input type=\"text\" name=\"form[last_name]\" placeholder=\"Grand Father's Name\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "last_name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "last_name", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[sex]\">Sex</label>
      <select name=\"form[sex]\" placeholder=\"Sex\">
        <option value=\"male\" ";
        // line 29
        echo ((($this->getAttribute(($context["form"] ?? null), "sex", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sex", array()) == "male"))) ? ("selected") : (""));
        echo ">Male</option>
        <option value=\"female\" ";
        // line 30
        echo ((($this->getAttribute(($context["form"] ?? null), "sex", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sex", array()) == "female"))) ? ("selected") : (""));
        echo ">Female</option>
      </select>

      <label for=\"form[mobile_number]\">Mobile Number</label>
      <input type=\"tel\" name=\"form[mobile_number]\" placeholder=\"+251 900 000 000\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "mobile_number", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mobile_number", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[email_address]\">Email Address</label>
      <input type=\"email\" name=\"form[email_address]\" placeholder=\"email@example.com\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "email_address", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email_address", array())) : ("")), "html", null, true);
        echo "\" required />

      <label for=\"form[teacher_department]\">Teacher Department</label>
      <select name=\"form[teacher_department]\">
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["departments"] ?? $this->getContext($context, "departments")));
        foreach ($context['_seq'] as $context["_key"] => $context["department"]) {
            // line 42
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["department"], "id", array()), "html", null, true);
            echo "\" ";
            echo ((($this->getAttribute($context["department"], "id", array()) == (($this->getAttribute(($context["form"] ?? null), "teacher_department", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "teacher_department", array())) : ("")))) ? ("selected") : (""));
            echo " >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["department"], "departmentName", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['department'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "      </select>

      ";
        // line 46
        if ((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) {
            // line 47
            echo "        <label for=\"form[user_name]\">User Name</label>
        <input type=\"text\" name=\"form[user_name]\" placeholder=\"user_21\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "user_name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "user_name", array())) : ("")), "html", null, true);
            echo "\" required />

        <label for=\"form[password]\">Password</label>
        <input type=\"password\" name=\"form[password]\" placeholder=\"A minimum of 6 characters\" required />

        <label for=\"form[confirm_password]\">Confirm Password</label>
        <input type=\"password\" name=\"form[confirm_password]\" placeholder=\"A minimum of 6 characters\" required />
      ";
        }
        // line 56
        echo "
      <button>";
        // line 57
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Hire Teacher") : ("Save Changes"));
        echo "</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_2735d38eba494085d7c12d26bc4ebdfbff865286f64e5dfecab4351fe71760b5->leave($__internal_2735d38eba494085d7c12d26bc4ebdfbff865286f64e5dfecab4351fe71760b5_prof);

        
        $__internal_6c0b4aed79c65f66270569e2ffac1e9ec868bf93f562abc2cdb5394c6d41ec51->leave($__internal_6c0b4aed79c65f66270569e2ffac1e9ec868bf93f562abc2cdb5394c6d41ec51_prof);

    }

    public function getTemplateName()
    {
        return ":teacher:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 57,  189 => 56,  178 => 48,  175 => 47,  173 => 46,  169 => 44,  156 => 42,  152 => 41,  145 => 37,  139 => 34,  132 => 30,  128 => 29,  121 => 25,  115 => 22,  109 => 19,  103 => 16,  99 => 15,  95 => 13,  86 => 12,  73 => 7,  64 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  {{ (mode == 'new') ? 'New Teacher' : 'Edit Teacher' }}
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container taright\">
    <form class=\"form fright\" method=\"post\">
      <h1 class=\"welcomeText tacenter\">{{ (mode == 'new') ? 'New Teacher' : 'Edit Teacher' }}</h1>
      <h2>{{ result_message is defined ? result_message : '' }}</h2>

      <label for=\"form[first_name]\">First Name</label>
      <input type=\"text\" name=\"form[first_name]\" placeholder=\"Given Name\" value=\"{{ form.first_name is defined ? form.first_name : '' }}\" required />

      <label for=\"form[middle_name]\">Middle Name</label>
      <input type=\"text\" name=\"form[middle_name]\" placeholder=\"Father's Name\" value=\"{{ form.middle_name is defined ? form.middle_name : '' }}\" required />

      <label for=\"form[last_name]\">Last Name</label>
      <input type=\"text\" name=\"form[last_name]\" placeholder=\"Grand Father's Name\" value=\"{{ form.last_name is defined ? form.last_name : '' }}\" required />

      <label for=\"form[sex]\">Sex</label>
      <select name=\"form[sex]\" placeholder=\"Sex\">
        <option value=\"male\" {{ (form.sex is defined and form.sex == 'male') ? 'selected' : '' }}>Male</option>
        <option value=\"female\" {{ (form.sex is defined and form.sex == 'female') ? 'selected' : '' }}>Female</option>
      </select>

      <label for=\"form[mobile_number]\">Mobile Number</label>
      <input type=\"tel\" name=\"form[mobile_number]\" placeholder=\"+251 900 000 000\" value=\"{{ form.mobile_number is defined ? form.mobile_number : '' }}\" required />

      <label for=\"form[email_address]\">Email Address</label>
      <input type=\"email\" name=\"form[email_address]\" placeholder=\"email@example.com\" value=\"{{ form.email_address is defined ? form.email_address : '' }}\" required />

      <label for=\"form[teacher_department]\">Teacher Department</label>
      <select name=\"form[teacher_department]\">
        {% for department in departments %}
          <option value=\"{{ department.id }}\" {{ (department.id == (form.teacher_department is defined ? form.teacher_department : '')) ? 'selected' : '' }} >{{ department.departmentName }}</option>
        {% endfor %}
      </select>

      {% if(mode == 'new') %}
        <label for=\"form[user_name]\">User Name</label>
        <input type=\"text\" name=\"form[user_name]\" placeholder=\"user_21\" value=\"{{ form.user_name is defined ? form.user_name : '' }}\" required />

        <label for=\"form[password]\">Password</label>
        <input type=\"password\" name=\"form[password]\" placeholder=\"A minimum of 6 characters\" required />

        <label for=\"form[confirm_password]\">Confirm Password</label>
        <input type=\"password\" name=\"form[confirm_password]\" placeholder=\"A minimum of 6 characters\" required />
      {% endif %}

      <button>{{ (mode == 'new') ? 'Hire Teacher' : 'Save Changes' }}</button>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}
", ":teacher:form.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/teacher/form.html.twig");
    }
}
