<?php

/* :student:form_2.html.twig */
class __TwigTemplate_bfdbb4daabc67068ff55288ecf2c6d8d1df0bf00e770ba3e44fd055b7ca80342 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":student:form_2.html.twig", 1);
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
        $__internal_9c7be6743bc2c6d4d4c8fa50a23b1e497fa082ad249c38e6e2998bb6b5ec7e0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c7be6743bc2c6d4d4c8fa50a23b1e497fa082ad249c38e6e2998bb6b5ec7e0b->enter($__internal_9c7be6743bc2c6d4d4c8fa50a23b1e497fa082ad249c38e6e2998bb6b5ec7e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":student:form_2.html.twig"));

        $__internal_79d7499c5f757c1b7485927ca32c9852c10aa717ecf6b720406d3d23dc955e12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79d7499c5f757c1b7485927ca32c9852c10aa717ecf6b720406d3d23dc955e12->enter($__internal_79d7499c5f757c1b7485927ca32c9852c10aa717ecf6b720406d3d23dc955e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":student:form_2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c7be6743bc2c6d4d4c8fa50a23b1e497fa082ad249c38e6e2998bb6b5ec7e0b->leave($__internal_9c7be6743bc2c6d4d4c8fa50a23b1e497fa082ad249c38e6e2998bb6b5ec7e0b_prof);

        
        $__internal_79d7499c5f757c1b7485927ca32c9852c10aa717ecf6b720406d3d23dc955e12->leave($__internal_79d7499c5f757c1b7485927ca32c9852c10aa717ecf6b720406d3d23dc955e12_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_90cd0c0baa8cca814b4c6e2d98483940b59df01f392932cdaea53d8c0e9e0fec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90cd0c0baa8cca814b4c6e2d98483940b59df01f392932cdaea53d8c0e9e0fec->enter($__internal_90cd0c0baa8cca814b4c6e2d98483940b59df01f392932cdaea53d8c0e9e0fec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_59c246dd4067e6ee708757220350e0f2395c1658c6f58f32a1d5ba272302108f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59c246dd4067e6ee708757220350e0f2395c1658c6f58f32a1d5ba272302108f->enter($__internal_59c246dd4067e6ee708757220350e0f2395c1658c6f58f32a1d5ba272302108f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Student  Register
";
        
        $__internal_59c246dd4067e6ee708757220350e0f2395c1658c6f58f32a1d5ba272302108f->leave($__internal_59c246dd4067e6ee708757220350e0f2395c1658c6f58f32a1d5ba272302108f_prof);

        
        $__internal_90cd0c0baa8cca814b4c6e2d98483940b59df01f392932cdaea53d8c0e9e0fec->leave($__internal_90cd0c0baa8cca814b4c6e2d98483940b59df01f392932cdaea53d8c0e9e0fec_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_45633b6ae709ea8e568fe30807f26b8e5157a5ba234bfaf3eaf3b1c7599e86e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45633b6ae709ea8e568fe30807f26b8e5157a5ba234bfaf3eaf3b1c7599e86e6->enter($__internal_45633b6ae709ea8e568fe30807f26b8e5157a5ba234bfaf3eaf3b1c7599e86e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_496d9ff5ef7ddaf41328e90818f3808b9fd24ea4fad9f06811a895006097ee49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_496d9ff5ef7ddaf41328e90818f3808b9fd24ea4fad9f06811a895006097ee49->enter($__internal_496d9ff5ef7ddaf41328e90818f3808b9fd24ea4fad9f06811a895006097ee49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>
*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type=\"text\"],
input[type=\"date\"],
input[type=\"datetime\"],
input[type=\"email\"],
input[type=\"number\"],
input[type=\"search\"],
input[type=\"tel\"],
input[type=\"time\"],
input[type=\"url\"],
textarea {

  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 18px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 5px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 10;
}

input[type=\"radio\"],
input[type=\"checkbox\"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #5282ED;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #5282ED;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color:#4887F0 ;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 800px;
  }

}

</style>
";
        
        $__internal_496d9ff5ef7ddaf41328e90818f3808b9fd24ea4fad9f06811a895006097ee49->leave($__internal_496d9ff5ef7ddaf41328e90818f3808b9fd24ea4fad9f06811a895006097ee49_prof);

        
        $__internal_45633b6ae709ea8e568fe30807f26b8e5157a5ba234bfaf3eaf3b1c7599e86e6->leave($__internal_45633b6ae709ea8e568fe30807f26b8e5157a5ba234bfaf3eaf3b1c7599e86e6_prof);

    }

    // line 128
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9bfd5a44ed06e788ceff19372a2914d46c671d798b05d281c7652783fefacd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9bfd5a44ed06e788ceff19372a2914d46c671d798b05d281c7652783fefacd6->enter($__internal_f9bfd5a44ed06e788ceff19372a2914d46c671d798b05d281c7652783fefacd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_62cf8fafc5135e1296795bde9fb79d9de0440bab7b9af5856fc4a8798b6440b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62cf8fafc5135e1296795bde9fb79d9de0440bab7b9af5856fc4a8798b6440b3->enter($__internal_62cf8fafc5135e1296795bde9fb79d9de0440bab7b9af5856fc4a8798b6440b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 129
        echo "  <div class=\"container\">
    <form action=\"index.html\" method=\"post\">

      <h1>Sign Up</h1>


      <fieldset>
        <legend><span class=\"number\">2</span>Family Background</legend>
      <hr>
      <p><b>Father's Information</b></p>
        <label for=\"father_name\">Father's Full Name: </label>
        <input type=\"text\" id=\"father_name\" name=\"user_father_name\">
        <label for=\"father_Occupation\">Occupation: </label>
        <input type=\"text\" id=\"father_occupation\" name=\"user_father_occupation\">
        <label for=\"father_education_level\">Education level:</label>
        <input type=\"text\" id=\"father_education_level\" name=\"user_father_education_level\">
        <p>Telephone</p>
        <label for=\"father_telephone_home\">Office:</label>
        <input type=\"tel\" name=\"father_contact_tele_office\" id=\"user_father_tele_office\">
        <label for=\"father_telephone_mobile\">Mobile:</label>
        <input type=\"tel\" name=\"user_contact_tele_mobile\" id=\"user_mobile\">

        <label for=\"father_town\">Town:  </label>
        <input type=\"text\" id=\"father_town_name\" name=\"user_father_town\">
        <label for =\"father_region\">Region: </label>
        <input type=\"text\" id = \"father_region_name\" name=\"user_father_region\">
        <label for=\"father_place_zone\">Zone:</label>
        <input type=\"text\" id=\"father_zone_name\"name=\"user_father_zone\" >
        <label for=\"father_woreda/subcity\">Woreda / Subcity:</label>
        <input type=\"text\" name=\"father_woreda_name\" id=\"user_father_woreda\">
        <label for=\"father_kebele\">Kebele:</label>
        <input type=\"text\" name=\"father_kebele_name\" id=\"user_father_kebele\">
        <label for=\"father_house_number\">House Number:</label>
        <input type=\"number\" name=\"father_house_nubmer\" id=\"user_father_house_number\">
     <hr>
     <p><b>Mother's Information</b></p>
         <label for=\"mother_name\">Mother's Full Name: </label>
         <input type=\"text\" id=\"mother_name\" name=\"user_mother_name\">
         <label for=\"mother_Occupation\">Occupation: </label>
         <input type=\"text\" id=\"mother_occupation\" name=\"user_mother_occupation\">
         <label for=\"mother_education_level\">Education level:</label>
         <input type=\"text\" id=\"mother_education_level\" name=\"user_mother_education_level\">
         <p>Telephone</p>
         <label for=\"mother_telephone_office\">Office:</label>
         <input type=\"tel\" name=\"mother_contact_tele_office\" id=\"user_mother_tele_office\">
         <label for=\"mother_telephone_mobile\">Mobile:</label>
         <input type=\"tel\" name=\"mother_contact_tele_mobile\" id=\"user_mother_tele_mobile\">

         <label for=\"mother_town\">Town:  </label>
         <input type=\"text\" id=\"mother_town_name\" name=\"user_mother_town\">
         <label for =\"mother_region\">Region: </label>
         <input type=\"text\" id = \"mother_region_name\" name=\"user_mother_region\">
         <label for=\"mother_place_zone\">Zone:</label>
         <input type=\"text\" id=\"mother_zone_name\"name=\"user_mother_zone\" >
         <label for=\"mother_woreda/subcity\">Woreda / Subcity:</label>
         <input type=\"text\" name=\"mother_woreda_name\" id=\"user_mother_woreda\">
         <label for=\"mother_kebele\">Kebele:</label>
         <input type=\"text\" name=\"mother_kebele_name\" id=\"user_mother_kebele\">
         <label for=\"mother_house_number\">House Number:</label>
         <input type=\"number\" name=\"mother_house_nubmer\" id=\"user_mother_house_number\">






    </form>



  </div>
";
        
        $__internal_62cf8fafc5135e1296795bde9fb79d9de0440bab7b9af5856fc4a8798b6440b3->leave($__internal_62cf8fafc5135e1296795bde9fb79d9de0440bab7b9af5856fc4a8798b6440b3_prof);

        
        $__internal_f9bfd5a44ed06e788ceff19372a2914d46c671d798b05d281c7652783fefacd6->leave($__internal_f9bfd5a44ed06e788ceff19372a2914d46c671d798b05d281c7652783fefacd6_prof);

    }

    public function getTemplateName()
    {
        return ":student:form_2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 129,  200 => 128,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  Student  Register
{% endblock %}

{% block stylesheet %}
<style>
*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type=\"text\"],
input[type=\"date\"],
input[type=\"datetime\"],
input[type=\"email\"],
input[type=\"number\"],
input[type=\"search\"],
input[type=\"tel\"],
input[type=\"time\"],
input[type=\"url\"],
textarea {

  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 18px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 5px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 10;
}

input[type=\"radio\"],
input[type=\"checkbox\"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: #5282ED;
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #5282ED;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color:#4887F0 ;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 800px;
  }

}

</style>
{% endblock %}

{% block body %}
  <div class=\"container\">
    <form action=\"index.html\" method=\"post\">

      <h1>Sign Up</h1>


      <fieldset>
        <legend><span class=\"number\">2</span>Family Background</legend>
      <hr>
      <p><b>Father's Information</b></p>
        <label for=\"father_name\">Father's Full Name: </label>
        <input type=\"text\" id=\"father_name\" name=\"user_father_name\">
        <label for=\"father_Occupation\">Occupation: </label>
        <input type=\"text\" id=\"father_occupation\" name=\"user_father_occupation\">
        <label for=\"father_education_level\">Education level:</label>
        <input type=\"text\" id=\"father_education_level\" name=\"user_father_education_level\">
        <p>Telephone</p>
        <label for=\"father_telephone_home\">Office:</label>
        <input type=\"tel\" name=\"father_contact_tele_office\" id=\"user_father_tele_office\">
        <label for=\"father_telephone_mobile\">Mobile:</label>
        <input type=\"tel\" name=\"user_contact_tele_mobile\" id=\"user_mobile\">

        <label for=\"father_town\">Town:  </label>
        <input type=\"text\" id=\"father_town_name\" name=\"user_father_town\">
        <label for =\"father_region\">Region: </label>
        <input type=\"text\" id = \"father_region_name\" name=\"user_father_region\">
        <label for=\"father_place_zone\">Zone:</label>
        <input type=\"text\" id=\"father_zone_name\"name=\"user_father_zone\" >
        <label for=\"father_woreda/subcity\">Woreda / Subcity:</label>
        <input type=\"text\" name=\"father_woreda_name\" id=\"user_father_woreda\">
        <label for=\"father_kebele\">Kebele:</label>
        <input type=\"text\" name=\"father_kebele_name\" id=\"user_father_kebele\">
        <label for=\"father_house_number\">House Number:</label>
        <input type=\"number\" name=\"father_house_nubmer\" id=\"user_father_house_number\">
     <hr>
     <p><b>Mother's Information</b></p>
         <label for=\"mother_name\">Mother's Full Name: </label>
         <input type=\"text\" id=\"mother_name\" name=\"user_mother_name\">
         <label for=\"mother_Occupation\">Occupation: </label>
         <input type=\"text\" id=\"mother_occupation\" name=\"user_mother_occupation\">
         <label for=\"mother_education_level\">Education level:</label>
         <input type=\"text\" id=\"mother_education_level\" name=\"user_mother_education_level\">
         <p>Telephone</p>
         <label for=\"mother_telephone_office\">Office:</label>
         <input type=\"tel\" name=\"mother_contact_tele_office\" id=\"user_mother_tele_office\">
         <label for=\"mother_telephone_mobile\">Mobile:</label>
         <input type=\"tel\" name=\"mother_contact_tele_mobile\" id=\"user_mother_tele_mobile\">

         <label for=\"mother_town\">Town:  </label>
         <input type=\"text\" id=\"mother_town_name\" name=\"user_mother_town\">
         <label for =\"mother_region\">Region: </label>
         <input type=\"text\" id = \"mother_region_name\" name=\"user_mother_region\">
         <label for=\"mother_place_zone\">Zone:</label>
         <input type=\"text\" id=\"mother_zone_name\"name=\"user_mother_zone\" >
         <label for=\"mother_woreda/subcity\">Woreda / Subcity:</label>
         <input type=\"text\" name=\"mother_woreda_name\" id=\"user_mother_woreda\">
         <label for=\"mother_kebele\">Kebele:</label>
         <input type=\"text\" name=\"mother_kebele_name\" id=\"user_mother_kebele\">
         <label for=\"mother_house_number\">House Number:</label>
         <input type=\"number\" name=\"mother_house_nubmer\" id=\"user_mother_house_number\">






    </form>



  </div>
{% endblock %}
", ":student:form_2.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/student/form_2.html.twig");
    }
}
