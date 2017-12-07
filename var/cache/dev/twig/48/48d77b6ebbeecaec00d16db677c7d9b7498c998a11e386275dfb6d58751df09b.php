<?php

/* student/form.html.twig */
class __TwigTemplate_6af0ec2207339248e882f6c001ab77e796be5e96148438a797acb3775ef919c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "student/form.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheet' => array($this, 'block_stylesheet'),
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
        $__internal_e08f5ba3b1555f56f924070ec18c90cea7443cc9a02ae7c81ddf1f9abd504689 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e08f5ba3b1555f56f924070ec18c90cea7443cc9a02ae7c81ddf1f9abd504689->enter($__internal_e08f5ba3b1555f56f924070ec18c90cea7443cc9a02ae7c81ddf1f9abd504689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/form.html.twig"));

        $__internal_5b6cce7227b3f2442c60af3f95df95dfe24fdb3f955bfd785994924a8affa998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b6cce7227b3f2442c60af3f95df95dfe24fdb3f955bfd785994924a8affa998->enter($__internal_5b6cce7227b3f2442c60af3f95df95dfe24fdb3f955bfd785994924a8affa998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "student/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e08f5ba3b1555f56f924070ec18c90cea7443cc9a02ae7c81ddf1f9abd504689->leave($__internal_e08f5ba3b1555f56f924070ec18c90cea7443cc9a02ae7c81ddf1f9abd504689_prof);

        
        $__internal_5b6cce7227b3f2442c60af3f95df95dfe24fdb3f955bfd785994924a8affa998->leave($__internal_5b6cce7227b3f2442c60af3f95df95dfe24fdb3f955bfd785994924a8affa998_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_af6e86e6396972d4d5f3ff901ff9077d3e8f369e119e903e4ef4459fedc8032a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af6e86e6396972d4d5f3ff901ff9077d3e8f369e119e903e4ef4459fedc8032a->enter($__internal_af6e86e6396972d4d5f3ff901ff9077d3e8f369e119e903e4ef4459fedc8032a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b7eb901d1e7c7eb47c4ae676ad24d4621816c5b100e737ece7f13f77052e1f08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7eb901d1e7c7eb47c4ae676ad24d4621816c5b100e737ece7f13f77052e1f08->enter($__internal_b7eb901d1e7c7eb47c4ae676ad24d4621816c5b100e737ece7f13f77052e1f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Register Student") : ("Edit Student"));
        echo "
";
        
        $__internal_b7eb901d1e7c7eb47c4ae676ad24d4621816c5b100e737ece7f13f77052e1f08->leave($__internal_b7eb901d1e7c7eb47c4ae676ad24d4621816c5b100e737ece7f13f77052e1f08_prof);

        
        $__internal_af6e86e6396972d4d5f3ff901ff9077d3e8f369e119e903e4ef4459fedc8032a->leave($__internal_af6e86e6396972d4d5f3ff901ff9077d3e8f369e119e903e4ef4459fedc8032a_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_4f4383a6a821f7ff9c0456c7d14a875b3cec3ca748d7684dae22c916c8c7c257 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f4383a6a821f7ff9c0456c7d14a875b3cec3ca748d7684dae22c916c8c7c257->enter($__internal_4f4383a6a821f7ff9c0456c7d14a875b3cec3ca748d7684dae22c916c8c7c257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_7ea76c6bde8f27071ba54733177fff0c09c782cf2fffc34b0d4978b10fe1fdee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ea76c6bde8f27071ba54733177fff0c09c782cf2fffc34b0d4978b10fe1fdee->enter($__internal_7ea76c6bde8f27071ba54733177fff0c09c782cf2fffc34b0d4978b10fe1fdee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>
.form input {
  width: 500px;
}

.form select {
  width: 525px;
}

.form button {
  width: 150px;
  float: right;
}
</style>
";
        
        $__internal_7ea76c6bde8f27071ba54733177fff0c09c782cf2fffc34b0d4978b10fe1fdee->leave($__internal_7ea76c6bde8f27071ba54733177fff0c09c782cf2fffc34b0d4978b10fe1fdee_prof);

        
        $__internal_4f4383a6a821f7ff9c0456c7d14a875b3cec3ca748d7684dae22c916c8c7c257->leave($__internal_4f4383a6a821f7ff9c0456c7d14a875b3cec3ca748d7684dae22c916c8c7c257_prof);

    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
        $__internal_516bba45d8e89fcbe422481447da08ecde995e01a7ea29d03ec1735625b70e67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_516bba45d8e89fcbe422481447da08ecde995e01a7ea29d03ec1735625b70e67->enter($__internal_516bba45d8e89fcbe422481447da08ecde995e01a7ea29d03ec1735625b70e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9fcfbf217ee8151f4d98e9248225138ae117f326758009db3b19a7177de20eb9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fcfbf217ee8151f4d98e9248225138ae117f326758009db3b19a7177de20eb9->enter($__internal_9fcfbf217ee8151f4d98e9248225138ae117f326758009db3b19a7177de20eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 24
        echo "  <div class=\"container taright\">
    <form class=\"\" method=\"post\">
      <div class=\"form fright\" id=\"form1\">
        <h1 class=\"welcomeText tacenter\">";
        // line 27
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Register Student") : ("Edit Student"));
        echo "</h1>
        <h3 class=\"welcomeText2 tacenter\">(1/4) Personal Information</h3>
        <h2>";
        // line 29
        echo twig_escape_filter($this->env, ((array_key_exists("result_message", $context)) ? (($context["result_message"] ?? $this->getContext($context, "result_message"))) : ("")), "html", null, true);
        echo "</h2>

        <label for=\"form[first_name_en]\">First Name</label>
        <input type=\"text\" name=\"form[first_name_en]\" placeholder=\"\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "first_name_en", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "first_name_en", array())) : ("")), "html", null, true);
        echo "\" required />

        <label for=\"form[middle_name_en]\">Middle Name</label>
        <input type=\"text\" name=\"form[middle_name_en]\" placeholder=\"\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "middle_name_en", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "middle_name_en", array())) : ("")), "html", null, true);
        echo "\" required />

        <label for=\"form[last_name_en]\">Last Name</label>
        <input type=\"text\" name=\"form[last_name_en]\" placeholder=\"\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "last_name_en", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "last_name_en", array())) : ("")), "html", null, true);
        echo "\" required />

        <label for=\"form[first_name_am]\">የመጀመሪያ ስም</label>
        <input type=\"text\" name=\"form[first_name_am]\" placeholder=\"\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "first_name_am", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "first_name_am", array())) : ("")), "html", null, true);
        echo "\" required />

        <label for=\"form[middle_name_am]\">የአባት ስም</label>
        <input type=\"text\" name=\"form[middle_name_am]\" placeholder=\"\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "middle_name_am", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "middle_name_am", array())) : ("")), "html", null, true);
        echo "\" required />

        <label for=\"form[last_name_am]\">የአያት ሥም</label>
        <input type=\"text\" name=\"form[last_name_am]\" placeholder=\"\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "last_name_am", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "last_name_am", array())) : ("")), "html", null, true);
        echo "\" required />

        <label for=\"form[sex]\">Sex</label>
        <select name=\"form[sex]\">
          <option value=\"male\" ";
        // line 51
        echo ((($this->getAttribute(($context["form"] ?? null), "sex", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sex", array()) == "male"))) ? ("selected") : (""));
        echo ">Male</option>
          <option value=\"female\" ";
        // line 52
        echo ((($this->getAttribute(($context["form"] ?? null), "sex", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "sex", array()) == "female"))) ? ("selected") : (""));
        echo ">Female</option>
        </select>

        <label for=\"form[nationality]\">Nationality: </label>
        <input type=\"text\" name=\"form[nationality]\" placeholder=\"\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "nationality", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nationality", array())) : ("")), "html", null, true);
        echo "\" required />

        <label>Place of Birth</label>
        <hr />
          <label for=\"form[place_of_birth_town]\">Town</label>
          <input type=\"text\" name=\"form[place_of_birth_town]\" placeholder=\"\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "place_of_birth_town", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "place_of_birth_town", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[place_of_birth_region]\">Region</label>
          <input type=\"text\" name=\"form[place_of_birth_region]\" placeholder=\"\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "place_of_birth_region", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "place_of_birth_region", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[date_of_birth_gc]\">Date of Birth (GC)</label>
          <input type=\"date\" name=\"form[date_of_birth_gc]\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "date_of_birth_gc", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date_of_birth_gc", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[date_of_birth_ec]\">Date of Birth (EC)</label>
          <input type=\"date\" name=\"form[date_of_birth_ec]\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "date_of_birth_ec", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date_of_birth_ec", array())) : ("")), "html", null, true);
        echo "\" required />
        <hr />
        <label>Residence Address</label>
        <hr />
          <label for=\"form[house_number]\">House Number</label>
          <input type=\"text\" name=\"form[house_number]\" placeholder=\"\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "house_number", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "house_number", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[kebele]\">Kebele</label>
          <input type=\"number\" name=\"form[kebele]\" placeholder=\"\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "kebele", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "kebele", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[woreda_subcity]\">Woreda/Subcity</label>
          <input type=\"text\" name=\"form[woreda_subcity]\" placeholder=\"\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "woreda_subcity", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "woreda_subcity", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[town]\">Town</label>
          <input type=\"text\" name=\"form[town]\" placeholder=\"\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "town", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "town", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[zone]\">Zone</label>
          <input type=\"text\" name=\"form[zone]\" placeholder=\"\" value=\"";
        // line 87
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "zone", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "zone", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[region]\">Region</label>
          <input type=\"text\" name=\"form[region]\" placeholder=\"\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "region", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "region", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[po_box]\">P.O. Box</label>
          <input type=\"text\" name=\"form[po_box]\" placeholder=\"\" value=\"";
        // line 93
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "po_box", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "po_box", array())) : ("")), "html", null, true);
        echo "\" required />
        <hr />

        <label>Telephone</label>
        <hr />
          <label for=\"form[telephone_home]\">Home Number</label>
          <input type=\"tel\" name=\"form[telephone_home]\" placeholder=\"\" value=\"";
        // line 99
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "telephone_home", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone_home", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[telephone_mobile]\">Mobile Number</label>
          <input type=\"tel\" name=\"form[telephone_mobile]\" placeholder=\"\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "telephone_mobile", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "telephone_mobile", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[email_address]\">Email Address</label>
          <input type=\"email\" name=\"form[email_address]\" placeholder=\"\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "email_address", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "email_address", array())) : ("")), "html", null, true);
        echo "\" required />
        <hr />

        <label for=\"form[native_language]\">Native Language</label>
        <input type=\"text\" name=\"form[native_language]\" placeholder=\"\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "native_language", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "native_language", array())) : ("")), "html", null, true);
        echo "\" required />

        <label for=\"form[marital_status]\">Marital Status</label>
        <select name=\"form[marital_status]\">
          <option value=\"male\" ";
        // line 113
        echo ((($this->getAttribute(($context["form"] ?? null), "marital_status", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "marital_status", array()) == "single"))) ? ("selected") : (""));
        echo ">Single</option>
          <option value=\"male\" ";
        // line 114
        echo ((($this->getAttribute(($context["form"] ?? null), "marital_status", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "marital_status", array()) == "married"))) ? ("selected") : (""));
        echo ">Divorced</option>
          <option value=\"male\" ";
        // line 115
        echo ((($this->getAttribute(($context["form"] ?? null), "marital_status", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "marital_status", array()) == "divorced"))) ? ("selected") : (""));
        echo ">Married</option>
          <option value=\"male\" ";
        // line 116
        echo ((($this->getAttribute(($context["form"] ?? null), "marital_status", array(), "any", true, true) && ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "marital_status", array()) == "widow/widower"))) ? ("selected") : (""));
        echo ">Widow/Widower</option>
        </select>

        <label for=\"form[section_id]\">Student Section</label>
        <select name=\"form[section_id]\">
          ";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sections"] ?? $this->getContext($context, "sections")));
        foreach ($context['_seq'] as $context["_key"] => $context["section"]) {
            // line 122
            echo "            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "id", array()), "html", null, true);
            echo "\" ";
            echo ((($this->getAttribute($context["section"], "id", array()) == (($this->getAttribute(($context["mySection"] ?? null), "id", array(), "any", true, true)) ? ($this->getAttribute(($context["mySection"] ?? $this->getContext($context, "mySection")), "id", array())) : ("")))) ? ("selected") : (""));
            echo " >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["section"], "sectionName", array()), "html", null, true);
            echo "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        echo "        </select>

        <button id=\"form1Next\"> Next (2/4) >> </button>
      </div>

      <div class=\"form fright\" id=\"form2\">
        <h1 class=\"welcomeText tacenter\">";
        // line 130
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Register Student") : ("Edit Student"));
        echo "</h1>
        <h3 class=\"welcomeText2 tacenter\">(2/4) Person to be Contacted in Case of Emergency</h3>
        <h2>";
        // line 132
        echo twig_escape_filter($this->env, ((array_key_exists("result_message", $context)) ? (($context["result_message"] ?? $this->getContext($context, "result_message"))) : ("")), "html", null, true);
        echo "</h2>

        <label for=\"form[pce_full_name]\">Full Name</label>
        <input type=\"text\" name=\"form[pce_full_name]\" placeholder=\"\" value=\"";
        // line 135
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "pce_full_name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pce_full_name", array())) : ("")), "html", null, true);
        echo "\" required />

        <label for=\"form[pce_relationship]\">Relationship</label>
        <input type=\"text\" name=\"form[pce_relationship]\" placeholder=\"\" value=\"";
        // line 138
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "pce_relationship", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pce_relationship", array())) : ("")), "html", null, true);
        echo "\" required />

        <label for=\"form[pce_other]\">Other</label>
        <input type=\"text\" name=\"form[pce_other]\" placeholder=\"\" value=\"";
        // line 141
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "pce_other", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pce_other", array())) : ("")), "html", null, true);
        echo "\" required />

        <label for=\"form[pce_telephone_home]\">Telephone Home</label>
        <input type=\"text\" name=\"form[pce_telephone_home]\" placeholder=\"\" value=\"";
        // line 144
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "pce_telephone_home", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pce_telephone_home", array())) : ("")), "html", null, true);
        echo "\" required />

        <label for=\"form[pce_telephone_office]\">Telephone Office</label>
        <input type=\"text\" name=\"form[pce_telephone_office]\" placeholder=\"\" value=\"";
        // line 147
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "pce_telephone_office", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pce_telephone_office", array())) : ("")), "html", null, true);
        echo "\" required />

        <label for=\"form[pce_house_number]\">House Number</label>
        <input type=\"text\" name=\"form[pce_house_number]\" placeholder=\"\" value=\"";
        // line 150
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "pce_house_number", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pce_house_number", array())) : ("")), "html", null, true);
        echo "\" required />

        <label for=\"form[pce_kebele]\">Kebele</label>
        <input type=\"number\" name=\"form[pce_kebele]\" placeholder=\"\" value=\"";
        // line 153
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "pce_kebele", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pce_kebele", array())) : ("")), "html", null, true);
        echo "\" required />

        <label for=\"form[pce_woreda_subcity]\">Woreda/Subcity</label>
        <input type=\"text\" name=\"form[pce_woreda_subcity]\" placeholder=\"\" value=\"";
        // line 156
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "pce_woreda_subcity", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pce_woreda_subcity", array())) : ("")), "html", null, true);
        echo "\" required />

        <label for=\"form[pce_town]\">Town</label>
        <input type=\"text\" name=\"form[pce_town]\" placeholder=\"\" value=\"";
        // line 159
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "pce_town", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pce_town", array())) : ("")), "html", null, true);
        echo "\" required />

        <label for=\"form[pce_zone]\">Zone</label>
        <input type=\"text\" name=\"form[pce_zone]\" placeholder=\"\" value=\"";
        // line 162
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "pce_zone", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pce_zone", array())) : ("")), "html", null, true);
        echo "\" required />

        <label for=\"form[pce_region]\">Region</label>
        <input type=\"text\" name=\"form[pce_region]\" placeholder=\"\" value=\"";
        // line 165
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "pce_region", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "pce_region", array())) : ("")), "html", null, true);
        echo "\" required />

        <button id=\"form2Next\">Next (3/4) >></button>
        <button id=\"form2Prev\"><< Prev (1/4)</button>
      </div>

      <div class=\"form fright\" id=\"form3\">
        <h1 class=\"welcomeText tacenter\">";
        // line 172
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Register Student") : ("Edit Student"));
        echo "</h1>
        <h3 class=\"welcomeText2 tacenter\">(3/4) Family Background</h3>
        <h2>";
        // line 174
        echo twig_escape_filter($this->env, ((array_key_exists("result_message", $context)) ? (($context["result_message"] ?? $this->getContext($context, "result_message"))) : ("")), "html", null, true);
        echo "</h2>

        <label>Father</label>
        <hr />
          <label for=\"form[father_full_name]\">Full Name</label>
          <input type=\"text\" name=\"form[father_full_name]\" placeholder=\"\" value=\"";
        // line 179
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "father_full_name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "father_full_name", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[father_occupation]\">Occupation</label>
          <input type=\"text\" name=\"form[father_occupation]\" placeholder=\"\" value=\"";
        // line 182
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "father_occupation", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "father_occupation", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[father_educational_level]\">Educational Level</label>
          <input type=\"text\" name=\"form[father_educational_level]\" placeholder=\"\" value=\"";
        // line 185
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "father_educational_leventel", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "father_educational_leventel", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[father_telephone_home]\">Telephone Home Number</label>
          <input type=\"text\" name=\"form[father_telephone_home]\" placeholder=\"\" value=\"";
        // line 188
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "father_telephone_home", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "father_telephone_home", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[father_telephone_office]\">Telephone Office Number</label>
          <input type=\"text\" name=\"form[father_telephone_office]\" placeholder=\"\" value=\"";
        // line 191
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "father_telephone_office", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "father_telephone_office", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[father_house_number]\">Residence Address House Number</label>
          <input type=\"text\" name=\"form[father_house_number]\" placeholder=\"\" value=\"";
        // line 194
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "father_house_number", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "father_house_number", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[father_kebele]\">Kebele</label>
          <input type=\"number\" name=\"form[father_kebele]\" placeholder=\"\" value=\"";
        // line 197
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "father_kebele", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "father_kebele", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[father_woreda_subcity]\">Woreda/Subcity</label>
          <input type=\"text\" name=\"form[father_woreda_subcity]\" placeholder=\"\" value=\"";
        // line 200
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "father_woreda_subcity", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "father_woreda_subcity", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[father_town]\">Town</label>
          <input type=\"text\" name=\"form[father_town]\" placeholder=\"\" value=\"";
        // line 203
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "father_town", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "father_town", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[father_zone]\">Zone</label>
          <input type=\"text\" name=\"form[father_zone]\" placeholder=\"\" value=\"";
        // line 206
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "father_zone", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "father_zone", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[father_region]\">Region</label>
          <input type=\"text\" name=\"form[father_region]\" placeholder=\"\" value=\"";
        // line 209
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "father_region", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "father_region", array())) : ("")), "html", null, true);
        echo "\" required />
        <hr />

        <label>Mother</label>
        <hr />
          <label for=\"form[mother_full_name]\">Full Name</label>
          <input type=\"text\" name=\"form[mother_full_name]\" placeholder=\"\" value=\"";
        // line 215
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "mother_full_name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mother_full_name", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[mother_occupation]\">Occupation</label>
          <input type=\"text\" name=\"form[mother_occupation]\" placeholder=\"\" value=\"";
        // line 218
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "mother_occupation", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mother_occupation", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[mother_educational_level]\">Educational Level</label>
          <input type=\"text\" name=\"form[mother_educational_level]\" placeholder=\"\" value=\"";
        // line 221
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "mother_educational_leventel", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mother_educational_leventel", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[mother_telephone_home]\">Telephone Home Number</label>
          <input type=\"text\" name=\"form[mother_telephone_home]\" placeholder=\"\" value=\"";
        // line 224
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "mother_telephone_home", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mother_telephone_home", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[mother_telephone_office]\">Telephone Office Number</label>
          <input type=\"text\" name=\"form[mother_telephone_office]\" placeholder=\"\" value=\"";
        // line 227
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "mother_telephone_office", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mother_telephone_office", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[mother_house_number]\">Residence Address House Number</label>
          <input type=\"text\" name=\"form[mother_house_number]\" placeholder=\"\" value=\"";
        // line 230
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "mother_house_number", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mother_house_number", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[mother_kebele]\">Kebele</label>
          <input type=\"number\" name=\"form[mother_kebele]\" placeholder=\"\" value=\"";
        // line 233
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "mother_kebele", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mother_kebele", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[mother_woreda_subcity]\">Woreda/Subcity</label>
          <input type=\"text\" name=\"form[mother_woreda_subcity]\" placeholder=\"\" value=\"";
        // line 236
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "mother_woreda_subcity", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mother_woreda_subcity", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[mother_town]\">Town</label>
          <input type=\"text\" name=\"form[mother_town]\" placeholder=\"\" value=\"";
        // line 239
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "mother_town", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mother_town", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[mother_zone]\">Zone</label>
          <input type=\"text\" name=\"form[mother_zone]\" placeholder=\"\" value=\"";
        // line 242
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "mother_zone", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mother_zone", array())) : ("")), "html", null, true);
        echo "\" required />

          <label for=\"form[mother_region]\">Region</label>
          <input type=\"text\" name=\"form[mother_region]\" placeholder=\"\" value=\"";
        // line 245
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "mother_region", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "mother_region", array())) : ("")), "html", null, true);
        echo "\" required />
        <hr />

        <button id=\"form3Next\">Next (4/4) >></button>
        <button id=\"form3Prev\"><< Prev (2/4)</button>
      </div>

      <div class=\"form fright\" id=\"form4\">
        <h1 class=\"welcomeText tacenter\">";
        // line 253
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Register Student") : ("Edit Student"));
        echo "</h1>
        <h3 class=\"welcomeText2 tacenter\">(4/4) Sign In Information</h3>
        <h2>";
        // line 255
        echo twig_escape_filter($this->env, ((array_key_exists("result_message", $context)) ? (($context["result_message"] ?? $this->getContext($context, "result_message"))) : ("")), "html", null, true);
        echo "</h2>

        ";
        // line 257
        if ((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) {
            // line 258
            echo "          <label for=\"form[user_name]\">User Name</label>
          <input type=\"text\" name=\"form[user_name]\" placeholder=\"user_12\" value=\"";
            // line 259
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["form"] ?? null), "user_name", array(), "any", true, true)) ? ($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "user_name", array())) : ("")), "html", null, true);
            echo "\" required />

          <label for=\"form[password]\">Password</label>
          <input type=\"password\" name=\"form[password]\" placeholder=\"A minimum of 6 characters\" required />

          <label for=\"form[confirm_password]\">Confirm Password</label>
          <input type=\"password\" name=\"form[confirm_password]\" placeholder=\"A minimum of 6 characters\" required />
        ";
        }
        // line 267
        echo "
        <button>";
        // line 268
        echo (((($context["mode"] ?? $this->getContext($context, "mode")) == "new")) ? ("Register Student") : ("Save Changes"));
        echo "</button>
        <button id=\"form4Prev\"><< Prev (3/4)</button>
      </div>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
";
        
        $__internal_9fcfbf217ee8151f4d98e9248225138ae117f326758009db3b19a7177de20eb9->leave($__internal_9fcfbf217ee8151f4d98e9248225138ae117f326758009db3b19a7177de20eb9_prof);

        
        $__internal_516bba45d8e89fcbe422481447da08ecde995e01a7ea29d03ec1735625b70e67->leave($__internal_516bba45d8e89fcbe422481447da08ecde995e01a7ea29d03ec1735625b70e67_prof);

    }

    // line 277
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_18220cc6520884ab1947d8f223913d06fa76a0c766a4469cca402923acf31b4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18220cc6520884ab1947d8f223913d06fa76a0c766a4469cca402923acf31b4b->enter($__internal_18220cc6520884ab1947d8f223913d06fa76a0c766a4469cca402923acf31b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_2e48ba42c7bf5d97a8594a2512625f2d6f77039d60493ba406536f73c764ecd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e48ba42c7bf5d97a8594a2512625f2d6f77039d60493ba406536f73c764ecd2->enter($__internal_2e48ba42c7bf5d97a8594a2512625f2d6f77039d60493ba406536f73c764ecd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 278
        echo "  <script type=\"text/javascript\">
    \$(document).ready(function(){
      \$('#form2').hide();
      \$('#form3').hide();
      \$('#form4').hide();

      \$('#form1Next').on(\"click\", function(event) {
        event.preventDefault();
        \$('#form2').show();
        \$('#form1').hide();
        window.location = '#top';
      });

      \$('#form2Next').on(\"click\", function(event) {
        event.preventDefault();
        \$('#form3').show();
        \$('#form2').hide();
        window.location = '#top';
      });

      \$('#form2Prev').on(\"click\", function(event) {
        event.preventDefault();
        \$('#form1').show();
        \$('#form2').hide();
        window.location = '#top';
      });

      \$('#form3Next').on(\"click\", function(event) {
        event.preventDefault();
        \$('#form4').show();
        \$('#form3').hide();
        window.location = '#top';
      });

      \$('#form3Prev').on(\"click\", function(event) {
        event.preventDefault();
        \$('#form2').show();
        \$('#form3').hide();
        window.location = '#top';
      });

      \$('#form4Prev').on(\"click\", function(event) {
        event.preventDefault();
        \$('#form3').show();
        \$('#form4').hide();
        window.location = '#top';
      });
    });
  </script>
";
        
        $__internal_2e48ba42c7bf5d97a8594a2512625f2d6f77039d60493ba406536f73c764ecd2->leave($__internal_2e48ba42c7bf5d97a8594a2512625f2d6f77039d60493ba406536f73c764ecd2_prof);

        
        $__internal_18220cc6520884ab1947d8f223913d06fa76a0c766a4469cca402923acf31b4b->leave($__internal_18220cc6520884ab1947d8f223913d06fa76a0c766a4469cca402923acf31b4b_prof);

    }

    public function getTemplateName()
    {
        return "student/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  611 => 278,  602 => 277,  584 => 268,  581 => 267,  570 => 259,  567 => 258,  565 => 257,  560 => 255,  555 => 253,  544 => 245,  538 => 242,  532 => 239,  526 => 236,  520 => 233,  514 => 230,  508 => 227,  502 => 224,  496 => 221,  490 => 218,  484 => 215,  475 => 209,  469 => 206,  463 => 203,  457 => 200,  451 => 197,  445 => 194,  439 => 191,  433 => 188,  427 => 185,  421 => 182,  415 => 179,  407 => 174,  402 => 172,  392 => 165,  386 => 162,  380 => 159,  374 => 156,  368 => 153,  362 => 150,  356 => 147,  350 => 144,  344 => 141,  338 => 138,  332 => 135,  326 => 132,  321 => 130,  313 => 124,  300 => 122,  296 => 121,  288 => 116,  284 => 115,  280 => 114,  276 => 113,  269 => 109,  262 => 105,  256 => 102,  250 => 99,  241 => 93,  235 => 90,  229 => 87,  223 => 84,  217 => 81,  211 => 78,  205 => 75,  197 => 70,  191 => 67,  185 => 64,  179 => 61,  171 => 56,  164 => 52,  160 => 51,  153 => 47,  147 => 44,  141 => 41,  135 => 38,  129 => 35,  123 => 32,  117 => 29,  112 => 27,  107 => 24,  98 => 23,  74 => 7,  65 => 6,  52 => 3,  43 => 2,  11 => 1,);
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
  {{ (mode == 'new') ? 'Register Student' : 'Edit Student' }}
{% endblock %}

{% block stylesheet %}
<style>
.form input {
  width: 500px;
}

.form select {
  width: 525px;
}

.form button {
  width: 150px;
  float: right;
}
</style>
{% endblock %}

{% block body %}
  <div class=\"container taright\">
    <form class=\"\" method=\"post\">
      <div class=\"form fright\" id=\"form1\">
        <h1 class=\"welcomeText tacenter\">{{ (mode == 'new') ? 'Register Student' : 'Edit Student' }}</h1>
        <h3 class=\"welcomeText2 tacenter\">(1/4) Personal Information</h3>
        <h2>{{ result_message is defined ? result_message : '' }}</h2>

        <label for=\"form[first_name_en]\">First Name</label>
        <input type=\"text\" name=\"form[first_name_en]\" placeholder=\"\" value=\"{{ form.first_name_en is defined ? form.first_name_en : '' }}\" required />

        <label for=\"form[middle_name_en]\">Middle Name</label>
        <input type=\"text\" name=\"form[middle_name_en]\" placeholder=\"\" value=\"{{ form.middle_name_en is defined ? form.middle_name_en : '' }}\" required />

        <label for=\"form[last_name_en]\">Last Name</label>
        <input type=\"text\" name=\"form[last_name_en]\" placeholder=\"\" value=\"{{ form.last_name_en is defined ? form.last_name_en : '' }}\" required />

        <label for=\"form[first_name_am]\">የመጀመሪያ ስም</label>
        <input type=\"text\" name=\"form[first_name_am]\" placeholder=\"\" value=\"{{ form.first_name_am is defined ? form.first_name_am : '' }}\" required />

        <label for=\"form[middle_name_am]\">የአባት ስም</label>
        <input type=\"text\" name=\"form[middle_name_am]\" placeholder=\"\" value=\"{{ form.middle_name_am is defined ? form.middle_name_am : '' }}\" required />

        <label for=\"form[last_name_am]\">የአያት ሥም</label>
        <input type=\"text\" name=\"form[last_name_am]\" placeholder=\"\" value=\"{{ form.last_name_am is defined ? form.last_name_am : '' }}\" required />

        <label for=\"form[sex]\">Sex</label>
        <select name=\"form[sex]\">
          <option value=\"male\" {{ (form.sex is defined and form.sex == 'male') ? 'selected' : '' }}>Male</option>
          <option value=\"female\" {{ (form.sex is defined and form.sex == 'female') ? 'selected' : '' }}>Female</option>
        </select>

        <label for=\"form[nationality]\">Nationality: </label>
        <input type=\"text\" name=\"form[nationality]\" placeholder=\"\" value=\"{{ form.nationality is defined ? form.nationality : '' }}\" required />

        <label>Place of Birth</label>
        <hr />
          <label for=\"form[place_of_birth_town]\">Town</label>
          <input type=\"text\" name=\"form[place_of_birth_town]\" placeholder=\"\" value=\"{{ form.place_of_birth_town is defined ? form.place_of_birth_town : '' }}\" required />

          <label for=\"form[place_of_birth_region]\">Region</label>
          <input type=\"text\" name=\"form[place_of_birth_region]\" placeholder=\"\" value=\"{{ form.place_of_birth_region is defined ? form.place_of_birth_region : '' }}\" required />

          <label for=\"form[date_of_birth_gc]\">Date of Birth (GC)</label>
          <input type=\"date\" name=\"form[date_of_birth_gc]\" value=\"{{ form.date_of_birth_gc is defined ? form.date_of_birth_gc : '' }}\" required />

          <label for=\"form[date_of_birth_ec]\">Date of Birth (EC)</label>
          <input type=\"date\" name=\"form[date_of_birth_ec]\" value=\"{{ form.date_of_birth_ec is defined ? form.date_of_birth_ec : '' }}\" required />
        <hr />
        <label>Residence Address</label>
        <hr />
          <label for=\"form[house_number]\">House Number</label>
          <input type=\"text\" name=\"form[house_number]\" placeholder=\"\" value=\"{{ form.house_number is defined ? form.house_number : '' }}\" required />

          <label for=\"form[kebele]\">Kebele</label>
          <input type=\"number\" name=\"form[kebele]\" placeholder=\"\" value=\"{{ form.kebele is defined ? form.kebele : '' }}\" required />

          <label for=\"form[woreda_subcity]\">Woreda/Subcity</label>
          <input type=\"text\" name=\"form[woreda_subcity]\" placeholder=\"\" value=\"{{ form.woreda_subcity is defined ? form.woreda_subcity : '' }}\" required />

          <label for=\"form[town]\">Town</label>
          <input type=\"text\" name=\"form[town]\" placeholder=\"\" value=\"{{ form.town is defined ? form.town : '' }}\" required />

          <label for=\"form[zone]\">Zone</label>
          <input type=\"text\" name=\"form[zone]\" placeholder=\"\" value=\"{{ form.zone is defined ? form.zone : '' }}\" required />

          <label for=\"form[region]\">Region</label>
          <input type=\"text\" name=\"form[region]\" placeholder=\"\" value=\"{{ form.region is defined ? form.region : '' }}\" required />

          <label for=\"form[po_box]\">P.O. Box</label>
          <input type=\"text\" name=\"form[po_box]\" placeholder=\"\" value=\"{{ form.po_box is defined ? form.po_box : '' }}\" required />
        <hr />

        <label>Telephone</label>
        <hr />
          <label for=\"form[telephone_home]\">Home Number</label>
          <input type=\"tel\" name=\"form[telephone_home]\" placeholder=\"\" value=\"{{ form.telephone_home is defined ? form.telephone_home : '' }}\" required />

          <label for=\"form[telephone_mobile]\">Mobile Number</label>
          <input type=\"tel\" name=\"form[telephone_mobile]\" placeholder=\"\" value=\"{{ form.telephone_mobile is defined ? form.telephone_mobile : '' }}\" required />

          <label for=\"form[email_address]\">Email Address</label>
          <input type=\"email\" name=\"form[email_address]\" placeholder=\"\" value=\"{{ form.email_address is defined ? form.email_address : '' }}\" required />
        <hr />

        <label for=\"form[native_language]\">Native Language</label>
        <input type=\"text\" name=\"form[native_language]\" placeholder=\"\" value=\"{{ form.native_language is defined ? form.native_language : '' }}\" required />

        <label for=\"form[marital_status]\">Marital Status</label>
        <select name=\"form[marital_status]\">
          <option value=\"male\" {{ (form.marital_status is defined and form.marital_status == 'single') ? 'selected' : '' }}>Single</option>
          <option value=\"male\" {{ (form.marital_status is defined and form.marital_status == 'married') ? 'selected' : '' }}>Divorced</option>
          <option value=\"male\" {{ (form.marital_status is defined and form.marital_status == 'divorced') ? 'selected' : '' }}>Married</option>
          <option value=\"male\" {{ (form.marital_status is defined and form.marital_status == 'widow/widower') ? 'selected' : '' }}>Widow/Widower</option>
        </select>

        <label for=\"form[section_id]\">Student Section</label>
        <select name=\"form[section_id]\">
          {% for section in sections %}
            <option value=\"{{ section.id }}\" {{ (section.id == (mySection.id is defined ? mySection.id : '')) ? 'selected' : '' }} >{{ section.sectionName }}</option>
          {% endfor %}
        </select>

        <button id=\"form1Next\"> Next (2/4) >> </button>
      </div>

      <div class=\"form fright\" id=\"form2\">
        <h1 class=\"welcomeText tacenter\">{{ (mode == 'new') ? 'Register Student' : 'Edit Student' }}</h1>
        <h3 class=\"welcomeText2 tacenter\">(2/4) Person to be Contacted in Case of Emergency</h3>
        <h2>{{ result_message is defined ? result_message : '' }}</h2>

        <label for=\"form[pce_full_name]\">Full Name</label>
        <input type=\"text\" name=\"form[pce_full_name]\" placeholder=\"\" value=\"{{ form.pce_full_name is defined ? form.pce_full_name : '' }}\" required />

        <label for=\"form[pce_relationship]\">Relationship</label>
        <input type=\"text\" name=\"form[pce_relationship]\" placeholder=\"\" value=\"{{ form.pce_relationship is defined ? form.pce_relationship : '' }}\" required />

        <label for=\"form[pce_other]\">Other</label>
        <input type=\"text\" name=\"form[pce_other]\" placeholder=\"\" value=\"{{ form.pce_other is defined ? form.pce_other : '' }}\" required />

        <label for=\"form[pce_telephone_home]\">Telephone Home</label>
        <input type=\"text\" name=\"form[pce_telephone_home]\" placeholder=\"\" value=\"{{ form.pce_telephone_home is defined ? form.pce_telephone_home : '' }}\" required />

        <label for=\"form[pce_telephone_office]\">Telephone Office</label>
        <input type=\"text\" name=\"form[pce_telephone_office]\" placeholder=\"\" value=\"{{ form.pce_telephone_office is defined ? form.pce_telephone_office : '' }}\" required />

        <label for=\"form[pce_house_number]\">House Number</label>
        <input type=\"text\" name=\"form[pce_house_number]\" placeholder=\"\" value=\"{{ form.pce_house_number is defined ? form.pce_house_number : '' }}\" required />

        <label for=\"form[pce_kebele]\">Kebele</label>
        <input type=\"number\" name=\"form[pce_kebele]\" placeholder=\"\" value=\"{{ form.pce_kebele is defined ? form.pce_kebele : '' }}\" required />

        <label for=\"form[pce_woreda_subcity]\">Woreda/Subcity</label>
        <input type=\"text\" name=\"form[pce_woreda_subcity]\" placeholder=\"\" value=\"{{ form.pce_woreda_subcity is defined ? form.pce_woreda_subcity : '' }}\" required />

        <label for=\"form[pce_town]\">Town</label>
        <input type=\"text\" name=\"form[pce_town]\" placeholder=\"\" value=\"{{ form.pce_town is defined ? form.pce_town : '' }}\" required />

        <label for=\"form[pce_zone]\">Zone</label>
        <input type=\"text\" name=\"form[pce_zone]\" placeholder=\"\" value=\"{{ form.pce_zone is defined ? form.pce_zone : '' }}\" required />

        <label for=\"form[pce_region]\">Region</label>
        <input type=\"text\" name=\"form[pce_region]\" placeholder=\"\" value=\"{{ form.pce_region is defined ? form.pce_region : '' }}\" required />

        <button id=\"form2Next\">Next (3/4) >></button>
        <button id=\"form2Prev\"><< Prev (1/4)</button>
      </div>

      <div class=\"form fright\" id=\"form3\">
        <h1 class=\"welcomeText tacenter\">{{ (mode == 'new') ? 'Register Student' : 'Edit Student' }}</h1>
        <h3 class=\"welcomeText2 tacenter\">(3/4) Family Background</h3>
        <h2>{{ result_message is defined ? result_message : '' }}</h2>

        <label>Father</label>
        <hr />
          <label for=\"form[father_full_name]\">Full Name</label>
          <input type=\"text\" name=\"form[father_full_name]\" placeholder=\"\" value=\"{{ form.father_full_name is defined ? form.father_full_name : '' }}\" required />

          <label for=\"form[father_occupation]\">Occupation</label>
          <input type=\"text\" name=\"form[father_occupation]\" placeholder=\"\" value=\"{{ form.father_occupation is defined ? form.father_occupation : '' }}\" required />

          <label for=\"form[father_educational_level]\">Educational Level</label>
          <input type=\"text\" name=\"form[father_educational_level]\" placeholder=\"\" value=\"{{ form.father_educational_leventel is defined ? form.father_educational_leventel : '' }}\" required />

          <label for=\"form[father_telephone_home]\">Telephone Home Number</label>
          <input type=\"text\" name=\"form[father_telephone_home]\" placeholder=\"\" value=\"{{ form.father_telephone_home is defined ? form.father_telephone_home : '' }}\" required />

          <label for=\"form[father_telephone_office]\">Telephone Office Number</label>
          <input type=\"text\" name=\"form[father_telephone_office]\" placeholder=\"\" value=\"{{ form.father_telephone_office is defined ? form.father_telephone_office : '' }}\" required />

          <label for=\"form[father_house_number]\">Residence Address House Number</label>
          <input type=\"text\" name=\"form[father_house_number]\" placeholder=\"\" value=\"{{ form.father_house_number is defined ? form.father_house_number : '' }}\" required />

          <label for=\"form[father_kebele]\">Kebele</label>
          <input type=\"number\" name=\"form[father_kebele]\" placeholder=\"\" value=\"{{ form.father_kebele is defined ? form.father_kebele : '' }}\" required />

          <label for=\"form[father_woreda_subcity]\">Woreda/Subcity</label>
          <input type=\"text\" name=\"form[father_woreda_subcity]\" placeholder=\"\" value=\"{{ form.father_woreda_subcity is defined ? form.father_woreda_subcity : '' }}\" required />

          <label for=\"form[father_town]\">Town</label>
          <input type=\"text\" name=\"form[father_town]\" placeholder=\"\" value=\"{{ form.father_town is defined ? form.father_town : '' }}\" required />

          <label for=\"form[father_zone]\">Zone</label>
          <input type=\"text\" name=\"form[father_zone]\" placeholder=\"\" value=\"{{ form.father_zone is defined ? form.father_zone : '' }}\" required />

          <label for=\"form[father_region]\">Region</label>
          <input type=\"text\" name=\"form[father_region]\" placeholder=\"\" value=\"{{ form.father_region is defined ? form.father_region : '' }}\" required />
        <hr />

        <label>Mother</label>
        <hr />
          <label for=\"form[mother_full_name]\">Full Name</label>
          <input type=\"text\" name=\"form[mother_full_name]\" placeholder=\"\" value=\"{{ form.mother_full_name is defined ? form.mother_full_name : '' }}\" required />

          <label for=\"form[mother_occupation]\">Occupation</label>
          <input type=\"text\" name=\"form[mother_occupation]\" placeholder=\"\" value=\"{{ form.mother_occupation is defined ? form.mother_occupation : '' }}\" required />

          <label for=\"form[mother_educational_level]\">Educational Level</label>
          <input type=\"text\" name=\"form[mother_educational_level]\" placeholder=\"\" value=\"{{ form.mother_educational_leventel is defined ? form.mother_educational_leventel : '' }}\" required />

          <label for=\"form[mother_telephone_home]\">Telephone Home Number</label>
          <input type=\"text\" name=\"form[mother_telephone_home]\" placeholder=\"\" value=\"{{ form.mother_telephone_home is defined ? form.mother_telephone_home : '' }}\" required />

          <label for=\"form[mother_telephone_office]\">Telephone Office Number</label>
          <input type=\"text\" name=\"form[mother_telephone_office]\" placeholder=\"\" value=\"{{ form.mother_telephone_office is defined ? form.mother_telephone_office : '' }}\" required />

          <label for=\"form[mother_house_number]\">Residence Address House Number</label>
          <input type=\"text\" name=\"form[mother_house_number]\" placeholder=\"\" value=\"{{ form.mother_house_number is defined ? form.mother_house_number : '' }}\" required />

          <label for=\"form[mother_kebele]\">Kebele</label>
          <input type=\"number\" name=\"form[mother_kebele]\" placeholder=\"\" value=\"{{ form.mother_kebele is defined ? form.mother_kebele : '' }}\" required />

          <label for=\"form[mother_woreda_subcity]\">Woreda/Subcity</label>
          <input type=\"text\" name=\"form[mother_woreda_subcity]\" placeholder=\"\" value=\"{{ form.mother_woreda_subcity is defined ? form.mother_woreda_subcity : '' }}\" required />

          <label for=\"form[mother_town]\">Town</label>
          <input type=\"text\" name=\"form[mother_town]\" placeholder=\"\" value=\"{{ form.mother_town is defined ? form.mother_town : '' }}\" required />

          <label for=\"form[mother_zone]\">Zone</label>
          <input type=\"text\" name=\"form[mother_zone]\" placeholder=\"\" value=\"{{ form.mother_zone is defined ? form.mother_zone : '' }}\" required />

          <label for=\"form[mother_region]\">Region</label>
          <input type=\"text\" name=\"form[mother_region]\" placeholder=\"\" value=\"{{ form.mother_region is defined ? form.mother_region : '' }}\" required />
        <hr />

        <button id=\"form3Next\">Next (4/4) >></button>
        <button id=\"form3Prev\"><< Prev (2/4)</button>
      </div>

      <div class=\"form fright\" id=\"form4\">
        <h1 class=\"welcomeText tacenter\">{{ (mode == 'new') ? 'Register Student' : 'Edit Student' }}</h1>
        <h3 class=\"welcomeText2 tacenter\">(4/4) Sign In Information</h3>
        <h2>{{ result_message is defined ? result_message : '' }}</h2>

        {% if(mode == 'new') %}
          <label for=\"form[user_name]\">User Name</label>
          <input type=\"text\" name=\"form[user_name]\" placeholder=\"user_12\" value=\"{{ form.user_name is defined ? form.user_name : '' }}\" required />

          <label for=\"form[password]\">Password</label>
          <input type=\"password\" name=\"form[password]\" placeholder=\"A minimum of 6 characters\" required />

          <label for=\"form[confirm_password]\">Confirm Password</label>
          <input type=\"password\" name=\"form[confirm_password]\" placeholder=\"A minimum of 6 characters\" required />
        {% endif %}

        <button>{{ (mode == 'new') ? 'Register Student' : 'Save Changes' }}</button>
        <button id=\"form4Prev\"><< Prev (3/4)</button>
      </div>
    </form>

    <hr class=\"clear\" width=\"0\" />
  </div>
{% endblock %}

{% block javascript %}
  <script type=\"text/javascript\">
    \$(document).ready(function(){
      \$('#form2').hide();
      \$('#form3').hide();
      \$('#form4').hide();

      \$('#form1Next').on(\"click\", function(event) {
        event.preventDefault();
        \$('#form2').show();
        \$('#form1').hide();
        window.location = '#top';
      });

      \$('#form2Next').on(\"click\", function(event) {
        event.preventDefault();
        \$('#form3').show();
        \$('#form2').hide();
        window.location = '#top';
      });

      \$('#form2Prev').on(\"click\", function(event) {
        event.preventDefault();
        \$('#form1').show();
        \$('#form2').hide();
        window.location = '#top';
      });

      \$('#form3Next').on(\"click\", function(event) {
        event.preventDefault();
        \$('#form4').show();
        \$('#form3').hide();
        window.location = '#top';
      });

      \$('#form3Prev').on(\"click\", function(event) {
        event.preventDefault();
        \$('#form2').show();
        \$('#form3').hide();
        window.location = '#top';
      });

      \$('#form4Prev').on(\"click\", function(event) {
        event.preventDefault();
        \$('#form3').show();
        \$('#form4').hide();
        window.location = '#top';
      });
    });
  </script>
{% endblock %}
", "student/form.html.twig", "/home/apollo-19/github/B-A-Project/app/Resources/views/student/form.html.twig");
    }
}
