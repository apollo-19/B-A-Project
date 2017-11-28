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
        $__internal_2e9abfaf092fca901a24aa8d216908e95b5c94db0ad80b7f2b60974ac4e06272 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e9abfaf092fca901a24aa8d216908e95b5c94db0ad80b7f2b60974ac4e06272->enter($__internal_2e9abfaf092fca901a24aa8d216908e95b5c94db0ad80b7f2b60974ac4e06272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":teacher:form.html.twig"));

        $__internal_dde8a8358c223d05b61fa9dc429f5dc88ab55e64549ddb97d64e0de03356b287 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde8a8358c223d05b61fa9dc429f5dc88ab55e64549ddb97d64e0de03356b287->enter($__internal_dde8a8358c223d05b61fa9dc429f5dc88ab55e64549ddb97d64e0de03356b287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":teacher:form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e9abfaf092fca901a24aa8d216908e95b5c94db0ad80b7f2b60974ac4e06272->leave($__internal_2e9abfaf092fca901a24aa8d216908e95b5c94db0ad80b7f2b60974ac4e06272_prof);

        
        $__internal_dde8a8358c223d05b61fa9dc429f5dc88ab55e64549ddb97d64e0de03356b287->leave($__internal_dde8a8358c223d05b61fa9dc429f5dc88ab55e64549ddb97d64e0de03356b287_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_119b20b1bfe09d742bd1b2b35e4ab9167464622950f89f4a9b951664d49b874a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_119b20b1bfe09d742bd1b2b35e4ab9167464622950f89f4a9b951664d49b874a->enter($__internal_119b20b1bfe09d742bd1b2b35e4ab9167464622950f89f4a9b951664d49b874a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8a06903df835c61b3c243ad99b4a3cc85352a158d8c1e955143c79ac01c09735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a06903df835c61b3c243ad99b4a3cc85352a158d8c1e955143c79ac01c09735->enter($__internal_8a06903df835c61b3c243ad99b4a3cc85352a158d8c1e955143c79ac01c09735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("New Teacher") : ("Edit Teacher"));
        echo "
";
        
        $__internal_8a06903df835c61b3c243ad99b4a3cc85352a158d8c1e955143c79ac01c09735->leave($__internal_8a06903df835c61b3c243ad99b4a3cc85352a158d8c1e955143c79ac01c09735_prof);

        
        $__internal_119b20b1bfe09d742bd1b2b35e4ab9167464622950f89f4a9b951664d49b874a->leave($__internal_119b20b1bfe09d742bd1b2b35e4ab9167464622950f89f4a9b951664d49b874a_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_b405bec4ce8dd20f2224e41184642010d419459629a2dda5013b6ea433035dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b405bec4ce8dd20f2224e41184642010d419459629a2dda5013b6ea433035dea->enter($__internal_b405bec4ce8dd20f2224e41184642010d419459629a2dda5013b6ea433035dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_ed256951eeba199821afa3c90da658e305d2b16f37b99d42cd6b901a91742f4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed256951eeba199821afa3c90da658e305d2b16f37b99d42cd6b901a91742f4c->enter($__internal_ed256951eeba199821afa3c90da658e305d2b16f37b99d42cd6b901a91742f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_ed256951eeba199821afa3c90da658e305d2b16f37b99d42cd6b901a91742f4c->leave($__internal_ed256951eeba199821afa3c90da658e305d2b16f37b99d42cd6b901a91742f4c_prof);

        
        $__internal_b405bec4ce8dd20f2224e41184642010d419459629a2dda5013b6ea433035dea->leave($__internal_b405bec4ce8dd20f2224e41184642010d419459629a2dda5013b6ea433035dea_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_893ec81991d38de0cc7361b2a12a8312f29d3619a4ec9ec41838d5fb3ebc0dcb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_893ec81991d38de0cc7361b2a12a8312f29d3619a4ec9ec41838d5fb3ebc0dcb->enter($__internal_893ec81991d38de0cc7361b2a12a8312f29d3619a4ec9ec41838d5fb3ebc0dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fed841de6e4f6e423b3a289c574b6addaa1ad8dc96b887de01ecb1f98dead662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed841de6e4f6e423b3a289c574b6addaa1ad8dc96b887de01ecb1f98dead662->enter($__internal_fed841de6e4f6e423b3a289c574b6addaa1ad8dc96b887de01ecb1f98dead662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            echo ((($this->getAttribute($context["department"], "id", array()) == (($this->getAttribute(($context["myDepartment"] ?? null), "id", array(), "any", true, true)) ? ($this->getAttribute(($context["myDepartment"] ?? $this->getContext($context, "myDepartment")), "id", array())) : ("")))) ? ("selected") : (""));
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
        
        $__internal_fed841de6e4f6e423b3a289c574b6addaa1ad8dc96b887de01ecb1f98dead662->leave($__internal_fed841de6e4f6e423b3a289c574b6addaa1ad8dc96b887de01ecb1f98dead662_prof);

        
        $__internal_893ec81991d38de0cc7361b2a12a8312f29d3619a4ec9ec41838d5fb3ebc0dcb->leave($__internal_893ec81991d38de0cc7361b2a12a8312f29d3619a4ec9ec41838d5fb3ebc0dcb_prof);

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
          <option value=\"{{ department.id }}\" {{ (department.id == (myDepartment.id is defined ? myDepartment.id : '')) ? 'selected' : '' }} >{{ department.departmentName }}</option>
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
", ":teacher:form.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/teacher/form.html.twig");
    }
}
