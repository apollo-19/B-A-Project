<?php

/* teacher/form.html.twig */
class __TwigTemplate_7008e46fb2224c516530a2484a2e7963b459993a535dbb76d8a15c10eca363fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "teacher/form.html.twig", 1);
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
        $__internal_72d02c6a5fa505a9a0d096e369491746ab04afd566884858379cdea51caa194a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72d02c6a5fa505a9a0d096e369491746ab04afd566884858379cdea51caa194a->enter($__internal_72d02c6a5fa505a9a0d096e369491746ab04afd566884858379cdea51caa194a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "teacher/form.html.twig"));

        $__internal_0e9e544a0af92c1419ee893dc48fd9c0d9458c9873a84ed0bfee465198ff44a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e9e544a0af92c1419ee893dc48fd9c0d9458c9873a84ed0bfee465198ff44a6->enter($__internal_0e9e544a0af92c1419ee893dc48fd9c0d9458c9873a84ed0bfee465198ff44a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "teacher/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72d02c6a5fa505a9a0d096e369491746ab04afd566884858379cdea51caa194a->leave($__internal_72d02c6a5fa505a9a0d096e369491746ab04afd566884858379cdea51caa194a_prof);

        
        $__internal_0e9e544a0af92c1419ee893dc48fd9c0d9458c9873a84ed0bfee465198ff44a6->leave($__internal_0e9e544a0af92c1419ee893dc48fd9c0d9458c9873a84ed0bfee465198ff44a6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_240c9bb3ac8826d1cf759ce3f9f5b58bdfb53e36e2e414b3e49222ffba6c048c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_240c9bb3ac8826d1cf759ce3f9f5b58bdfb53e36e2e414b3e49222ffba6c048c->enter($__internal_240c9bb3ac8826d1cf759ce3f9f5b58bdfb53e36e2e414b3e49222ffba6c048c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_1c5a976211819a9992b3f0313c4d7e467eb1f2eabd3e4de8a916eaac670e79f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c5a976211819a9992b3f0313c4d7e467eb1f2eabd3e4de8a916eaac670e79f4->enter($__internal_1c5a976211819a9992b3f0313c4d7e467eb1f2eabd3e4de8a916eaac670e79f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Teacher") : ("Edit Teacher"));
        echo "
";
        
        $__internal_1c5a976211819a9992b3f0313c4d7e467eb1f2eabd3e4de8a916eaac670e79f4->leave($__internal_1c5a976211819a9992b3f0313c4d7e467eb1f2eabd3e4de8a916eaac670e79f4_prof);

        
        $__internal_240c9bb3ac8826d1cf759ce3f9f5b58bdfb53e36e2e414b3e49222ffba6c048c->leave($__internal_240c9bb3ac8826d1cf759ce3f9f5b58bdfb53e36e2e414b3e49222ffba6c048c_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_2b365493bdf0497644e04f2bf245305f637c750089cba5ce8b81c8c33fbb7160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b365493bdf0497644e04f2bf245305f637c750089cba5ce8b81c8c33fbb7160->enter($__internal_2b365493bdf0497644e04f2bf245305f637c750089cba5ce8b81c8c33fbb7160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_4b21b4c76d315032009900bd21f1db6ed4104d9af922e876dc87027e449cd908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b21b4c76d315032009900bd21f1db6ed4104d9af922e876dc87027e449cd908->enter($__internal_4b21b4c76d315032009900bd21f1db6ed4104d9af922e876dc87027e449cd908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_4b21b4c76d315032009900bd21f1db6ed4104d9af922e876dc87027e449cd908->leave($__internal_4b21b4c76d315032009900bd21f1db6ed4104d9af922e876dc87027e449cd908_prof);

        
        $__internal_2b365493bdf0497644e04f2bf245305f637c750089cba5ce8b81c8c33fbb7160->leave($__internal_2b365493bdf0497644e04f2bf245305f637c750089cba5ce8b81c8c33fbb7160_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_132b709037fbaaa3809e660a8cc6fbf563f00565aa3b2239c153254c0e08a4e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_132b709037fbaaa3809e660a8cc6fbf563f00565aa3b2239c153254c0e08a4e5->enter($__internal_132b709037fbaaa3809e660a8cc6fbf563f00565aa3b2239c153254c0e08a4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7428d4948320634797e5f5962b1f287fe96ebc0235fb2ed168299aae71008554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7428d4948320634797e5f5962b1f287fe96ebc0235fb2ed168299aae71008554->enter($__internal_7428d4948320634797e5f5962b1f287fe96ebc0235fb2ed168299aae71008554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7428d4948320634797e5f5962b1f287fe96ebc0235fb2ed168299aae71008554->leave($__internal_7428d4948320634797e5f5962b1f287fe96ebc0235fb2ed168299aae71008554_prof);

        
        $__internal_132b709037fbaaa3809e660a8cc6fbf563f00565aa3b2239c153254c0e08a4e5->leave($__internal_132b709037fbaaa3809e660a8cc6fbf563f00565aa3b2239c153254c0e08a4e5_prof);

    }

    public function getTemplateName()
    {
        return "teacher/form.html.twig";
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
", "teacher/form.html.twig", "/home/apollo-19/github/B-A-Project/app/Resources/views/teacher/form.html.twig");
    }
}
