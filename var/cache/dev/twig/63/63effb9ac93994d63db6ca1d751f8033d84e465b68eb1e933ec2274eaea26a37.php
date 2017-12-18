<?php

/* :student:view_one.html.twig */
class __TwigTemplate_aa019ce80eff0e930144d3eb765b453f2815a2da946318a3820c9f74da5068a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":student:view_one.html.twig", 1);
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
        $__internal_748d120fddb128568273d958e3d6ef82f7c440bda9992a14e71d08eb825a07fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_748d120fddb128568273d958e3d6ef82f7c440bda9992a14e71d08eb825a07fe->enter($__internal_748d120fddb128568273d958e3d6ef82f7c440bda9992a14e71d08eb825a07fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":student:view_one.html.twig"));

        $__internal_1c64d04698c752ca5d7704d068e3abb32d4ea679d9f5110369722b77a64e5162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c64d04698c752ca5d7704d068e3abb32d4ea679d9f5110369722b77a64e5162->enter($__internal_1c64d04698c752ca5d7704d068e3abb32d4ea679d9f5110369722b77a64e5162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":student:view_one.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_748d120fddb128568273d958e3d6ef82f7c440bda9992a14e71d08eb825a07fe->leave($__internal_748d120fddb128568273d958e3d6ef82f7c440bda9992a14e71d08eb825a07fe_prof);

        
        $__internal_1c64d04698c752ca5d7704d068e3abb32d4ea679d9f5110369722b77a64e5162->leave($__internal_1c64d04698c752ca5d7704d068e3abb32d4ea679d9f5110369722b77a64e5162_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0ea906e2262b12be551b52e2bb73be3cb915115e3b346d5d620eec15a1c8e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0ea906e2262b12be551b52e2bb73be3cb915115e3b346d5d620eec15a1c8e1a->enter($__internal_e0ea906e2262b12be551b52e2bb73be3cb915115e3b346d5d620eec15a1c8e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8463534d192db3308dc24ae73159b0894640c5da9bfea40a122e2ad130250bf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8463534d192db3308dc24ae73159b0894640c5da9bfea40a122e2ad130250bf9->enter($__internal_8463534d192db3308dc24ae73159b0894640c5da9bfea40a122e2ad130250bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "firstNameEn", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "middleNameEn", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "lastNameEn", array()), "html", null, true);
        echo "
";
        
        $__internal_8463534d192db3308dc24ae73159b0894640c5da9bfea40a122e2ad130250bf9->leave($__internal_8463534d192db3308dc24ae73159b0894640c5da9bfea40a122e2ad130250bf9_prof);

        
        $__internal_e0ea906e2262b12be551b52e2bb73be3cb915115e3b346d5d620eec15a1c8e1a->leave($__internal_e0ea906e2262b12be551b52e2bb73be3cb915115e3b346d5d620eec15a1c8e1a_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_4b1ab9662e59c1c13e76ca60641f6acfa3939ac00653f014d852ca27bf176df4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b1ab9662e59c1c13e76ca60641f6acfa3939ac00653f014d852ca27bf176df4->enter($__internal_4b1ab9662e59c1c13e76ca60641f6acfa3939ac00653f014d852ca27bf176df4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_0822176950302e11e867db3c3b222e3d6de1c32f2d7528b016c2472031ecc8bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0822176950302e11e867db3c3b222e3d6de1c32f2d7528b016c2472031ecc8bf->enter($__internal_0822176950302e11e867db3c3b222e3d6de1c32f2d7528b016c2472031ecc8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>
.form {
  width: 500px;
}
</style>
";
        
        $__internal_0822176950302e11e867db3c3b222e3d6de1c32f2d7528b016c2472031ecc8bf->leave($__internal_0822176950302e11e867db3c3b222e3d6de1c32f2d7528b016c2472031ecc8bf_prof);

        
        $__internal_4b1ab9662e59c1c13e76ca60641f6acfa3939ac00653f014d852ca27bf176df4->leave($__internal_4b1ab9662e59c1c13e76ca60641f6acfa3939ac00653f014d852ca27bf176df4_prof);

    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        $__internal_eec9183240007e63e4f1e3b1a4b824bbfb9494b9a51b8d0b3b0783d6f162fe0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eec9183240007e63e4f1e3b1a4b824bbfb9494b9a51b8d0b3b0783d6f162fe0d->enter($__internal_eec9183240007e63e4f1e3b1a4b824bbfb9494b9a51b8d0b3b0783d6f162fe0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2552a9ddc349d11709725f9e080142f7789a9632dd10eb15b51b16ef66071b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2552a9ddc349d11709725f9e080142f7789a9632dd10eb15b51b16ef66071b1a->enter($__internal_2552a9ddc349d11709725f9e080142f7789a9632dd10eb15b51b16ef66071b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 15
        echo "  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "firstNameEn", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "middleNameEn", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "lastNameEn", array()), "html", null, true);
        echo "</h1>
      <table>
        <tr>
          <td class=\"taright\"><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("student_edit", array("student_id" => $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "id", array()))), "html", null, true);
        echo "\">Edit Student</a></td>
        </tr>
      </table>

      <table id=\"form1\">
        <tr>
          <td>Admission Number:</td>
          <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "admissionNumber", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>First Name:</td>
          <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "firstNameEn", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Middle Name:</td>
          <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "middleNameEn", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Last Name</td>
          <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "lastNameEn", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>የመጀመሪያ ስም:</td>
          <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "firstNameAm", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>የአባት ስም</td>
          <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "middleNameAm", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>የአያት ሥም</td>
          <td>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "lastNameAm", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Sex</td>
          <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "sex", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Nationality</td>
          <td>";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "nationality", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Place of Birth Town</td>
          <td>";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "placeOfBirthTown", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Place of Birth Region</td>
          <td>";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "placeOfBirthRegion", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Date of Birth (GC)</td>
          <td>";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "dateOfBirthGc", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Date of Birth (EC)</td>
          <td>";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "dateOfBirthEc", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>House Number</td>
          <td>";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "houseNumber", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Kebele</td>
          <td>";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "kebele", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Woreda/Subcity</td>
          <td>";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "woredaSubcity", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Town</td>
          <td>";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "town", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Zone</td>
          <td>";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "zone", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Region</td>
          <td>";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "region", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>P.O. Box</td>
          <td>";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "poBox", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Telephone Home</td>
          <td>";
        // line 128
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "telephoneHome", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Telephone Mobile</td>
          <td>";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "telephoneMobile", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Email Address</td>
          <td>";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "emailAddress", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Native Language</td>
          <td>";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "nativeLanguage", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Marital Status</td>
          <td>";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "maritalStatus", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td colspan=\"3\"><button id=\"form1Next\"> Next (2/3) >> </button></td>
        </tr>
      </table>

      <table id=\"form2\">
        <tr>
          <td>Full Name:</td>
          <td>";
        // line 159
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "pceFullName", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Relationship:</td>
          <td>";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "pceRelationship", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Other:</td>
          <td>";
        // line 169
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "pceOther", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Telephone Home:</td>
          <td>";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "pceTelephoneHome", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Telephone Office:</td>
          <td>";
        // line 179
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "pceTelephoneOffice", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>House Number:</td>
          <td>";
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "pceHouseNumber", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Kebele:</td>
          <td>";
        // line 189
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "pceKebele", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Woreda/Subcity:</td>
          <td>";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "pceWoredaSubcity", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Town:</td>
          <td>";
        // line 199
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "pceTown", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Zone:</td>
          <td>";
        // line 204
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "pceZone", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Region:</td>
          <td>";
        // line 209
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "pceRegion", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td><button id=\"form2Prev\"><< Prev (1/3)</button></td>
          <td><button id=\"form2Next\">Next (3/3) >></button></td>
        </tr>
      </table>

      <table id=\"form3\">
        <tr>
          <td colspan=\"2\" align=\"center\">Father</td>
        </tr>

        <tr>
          <td>Full Name:</td>
          <td>";
        // line 225
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "fatherFullName", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Occupation:</td>
          <td>";
        // line 230
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "fatherOccupation", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Educational Level:</td>
          <td>";
        // line 235
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "fatherEducationalLevel", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td colspan=\"2\" align=\"center\">Telephone</td>
        </tr>

        <tr>
          <td>Home Number:</td>
          <td>";
        // line 244
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "fatherTelephoneHome", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Office Number:</td>
          <td>";
        // line 249
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "fatherTelephoneHome", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td colspan=\"2\" align=\"center\">Residence Address</td>
        </tr>

        <tr>
          <td>House Number:</td>
          <td>";
        // line 258
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "fatherHouseNumber", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Kebele:</td>
          <td>";
        // line 263
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "fatherKebele", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Woreda/Subcity:</td>
          <td>";
        // line 268
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "fatherWoredaSubcity", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Town:</td>
          <td>";
        // line 273
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "fatherTown", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Zone:</td>
          <td>";
        // line 278
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "fatherZone", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Region:</td>
          <td>";
        // line 283
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "fatherRegion", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td colspan=\"2\" align=\"center\">Mother:</td>
        </tr>

        <tr>
          <td>Full Name:</td>
          <td>";
        // line 292
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "motherFullName", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Occupation:</td>
          <td>";
        // line 297
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "motherOccupation", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Educational Level:</td>
          <td>";
        // line 302
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "motherEducationalLevel", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td colspan=\"2\" align=\"center\">Telephone</td>
        </tr>

        <tr>
          <td>Home Number:</td>
          <td>";
        // line 311
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "motherTelephoneHome", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Office Number:</td>
          <td>";
        // line 316
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "motherTelephoneHome", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td colspan=\"2\" align=\"center\">Residence Address</td>
        </tr>

        <tr>
          <td>House Number:</td>
          <td>";
        // line 325
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "motherHouseNumber", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Kebele:</td>
          <td>";
        // line 330
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "motherKebele", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Woreda/Subcity:</td>
          <td>";
        // line 335
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "motherWoredaSubcity", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Town:</td>
          <td>";
        // line 340
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "motherTown", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Zone:</td>
          <td>";
        // line 345
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "motherZone", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td>Region:</td>
          <td>";
        // line 350
        echo twig_escape_filter($this->env, $this->getAttribute(($context["student"] ?? $this->getContext($context, "student")), "motherRegion", array()), "html", null, true);
        echo "</td>
        </tr>

        <tr>
          <td><button id=\"form3Prev\"><< Prev (2/3)</button></td>
          <td></td>
        </tr>
      </table>

    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
";
        
        $__internal_2552a9ddc349d11709725f9e080142f7789a9632dd10eb15b51b16ef66071b1a->leave($__internal_2552a9ddc349d11709725f9e080142f7789a9632dd10eb15b51b16ef66071b1a_prof);

        
        $__internal_eec9183240007e63e4f1e3b1a4b824bbfb9494b9a51b8d0b3b0783d6f162fe0d->leave($__internal_eec9183240007e63e4f1e3b1a4b824bbfb9494b9a51b8d0b3b0783d6f162fe0d_prof);

    }

    // line 365
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_c55af336dd03b94304f92edf4dd40e7b306306689df44af1dd7d85aa66c7c966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c55af336dd03b94304f92edf4dd40e7b306306689df44af1dd7d85aa66c7c966->enter($__internal_c55af336dd03b94304f92edf4dd40e7b306306689df44af1dd7d85aa66c7c966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_2fed175a370e925f1df50a829d38559b1848656e100055f47aada80af8adaa18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fed175a370e925f1df50a829d38559b1848656e100055f47aada80af8adaa18->enter($__internal_2fed175a370e925f1df50a829d38559b1848656e100055f47aada80af8adaa18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 366
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
        
        $__internal_2fed175a370e925f1df50a829d38559b1848656e100055f47aada80af8adaa18->leave($__internal_2fed175a370e925f1df50a829d38559b1848656e100055f47aada80af8adaa18_prof);

        
        $__internal_c55af336dd03b94304f92edf4dd40e7b306306689df44af1dd7d85aa66c7c966->leave($__internal_c55af336dd03b94304f92edf4dd40e7b306306689df44af1dd7d85aa66c7c966_prof);

    }

    public function getTemplateName()
    {
        return ":student:view_one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  653 => 366,  644 => 365,  620 => 350,  612 => 345,  604 => 340,  596 => 335,  588 => 330,  580 => 325,  568 => 316,  560 => 311,  548 => 302,  540 => 297,  532 => 292,  520 => 283,  512 => 278,  504 => 273,  496 => 268,  488 => 263,  480 => 258,  468 => 249,  460 => 244,  448 => 235,  440 => 230,  432 => 225,  413 => 209,  405 => 204,  397 => 199,  389 => 194,  381 => 189,  373 => 184,  365 => 179,  357 => 174,  349 => 169,  341 => 164,  333 => 159,  319 => 148,  311 => 143,  303 => 138,  295 => 133,  287 => 128,  279 => 123,  271 => 118,  263 => 113,  255 => 108,  247 => 103,  239 => 98,  231 => 93,  223 => 88,  215 => 83,  207 => 78,  199 => 73,  191 => 68,  183 => 63,  175 => 58,  167 => 53,  159 => 48,  151 => 43,  143 => 38,  135 => 33,  127 => 28,  117 => 21,  107 => 18,  102 => 15,  93 => 14,  78 => 7,  69 => 6,  52 => 3,  43 => 2,  11 => 1,);
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
  {{ student.firstNameEn }} {{ student.middleNameEn }} {{ student.lastNameEn }}
{% endblock %}

{% block stylesheet %}
<style>
.form {
  width: 500px;
}
</style>
{% endblock %}

{% block body %}
  <article class=\"container taleft\">
    <div class=\"form fright\">

      <h1 class=\"welcomeText tacenter\">{{ student.firstNameEn }} {{ student.middleNameEn }} {{ student.lastNameEn }}</h1>
      <table>
        <tr>
          <td class=\"taright\"><a href=\"{{ path('student_edit', {'student_id': student.id}) }}\">Edit Student</a></td>
        </tr>
      </table>

      <table id=\"form1\">
        <tr>
          <td>Admission Number:</td>
          <td>{{ student.admissionNumber }}</td>
        </tr>

        <tr>
          <td>First Name:</td>
          <td>{{ student.firstNameEn }}</td>
        </tr>

        <tr>
          <td>Middle Name:</td>
          <td>{{ student.middleNameEn }}</td>
        </tr>

        <tr>
          <td>Last Name</td>
          <td>{{ student.lastNameEn }}</td>
        </tr>

        <tr>
          <td>የመጀመሪያ ስም:</td>
          <td>{{ student.firstNameAm }}</td>
        </tr>

        <tr>
          <td>የአባት ስም</td>
          <td>{{ student.middleNameAm }}</td>
        </tr>

        <tr>
          <td>የአያት ሥም</td>
          <td>{{ student.lastNameAm }}</td>
        </tr>

        <tr>
          <td>Sex</td>
          <td>{{ student.sex }}</td>
        </tr>

        <tr>
          <td>Nationality</td>
          <td>{{ student.nationality }}</td>
        </tr>

        <tr>
          <td>Place of Birth Town</td>
          <td>{{ student.placeOfBirthTown }}</td>
        </tr>

        <tr>
          <td>Place of Birth Region</td>
          <td>{{ student.placeOfBirthRegion }}</td>
        </tr>

        <tr>
          <td>Date of Birth (GC)</td>
          <td>{{ student.dateOfBirthGc }}</td>
        </tr>

        <tr>
          <td>Date of Birth (EC)</td>
          <td>{{ student.dateOfBirthEc }}</td>
        </tr>

        <tr>
          <td>House Number</td>
          <td>{{ student.houseNumber }}</td>
        </tr>

        <tr>
          <td>Kebele</td>
          <td>{{ student.kebele }}</td>
        </tr>

        <tr>
          <td>Woreda/Subcity</td>
          <td>{{ student.woredaSubcity }}</td>
        </tr>

        <tr>
          <td>Town</td>
          <td>{{ student.town }}</td>
        </tr>

        <tr>
          <td>Zone</td>
          <td>{{ student.zone }}</td>
        </tr>

        <tr>
          <td>Region</td>
          <td>{{ student.region }}</td>
        </tr>

        <tr>
          <td>P.O. Box</td>
          <td>{{ student.poBox }}</td>
        </tr>

        <tr>
          <td>Telephone Home</td>
          <td>{{ student.telephoneHome }}</td>
        </tr>

        <tr>
          <td>Telephone Mobile</td>
          <td>{{ student.telephoneMobile }}</td>
        </tr>

        <tr>
          <td>Email Address</td>
          <td>{{ student.emailAddress }}</td>
        </tr>

        <tr>
          <td>Native Language</td>
          <td>{{ student.nativeLanguage }}</td>
        </tr>

        <tr>
          <td>Marital Status</td>
          <td>{{ student.maritalStatus }}</td>
        </tr>

        <tr>
          <td colspan=\"3\"><button id=\"form1Next\"> Next (2/3) >> </button></td>
        </tr>
      </table>

      <table id=\"form2\">
        <tr>
          <td>Full Name:</td>
          <td>{{ student.pceFullName }}</td>
        </tr>

        <tr>
          <td>Relationship:</td>
          <td>{{ student.pceRelationship }}</td>
        </tr>

        <tr>
          <td>Other:</td>
          <td>{{ student.pceOther }}</td>
        </tr>

        <tr>
          <td>Telephone Home:</td>
          <td>{{ student.pceTelephoneHome }}</td>
        </tr>

        <tr>
          <td>Telephone Office:</td>
          <td>{{ student.pceTelephoneOffice }}</td>
        </tr>

        <tr>
          <td>House Number:</td>
          <td>{{ student.pceHouseNumber }}</td>
        </tr>

        <tr>
          <td>Kebele:</td>
          <td>{{ student.pceKebele }}</td>
        </tr>

        <tr>
          <td>Woreda/Subcity:</td>
          <td>{{ student.pceWoredaSubcity }}</td>
        </tr>

        <tr>
          <td>Town:</td>
          <td>{{ student.pceTown }}</td>
        </tr>

        <tr>
          <td>Zone:</td>
          <td>{{ student.pceZone }}</td>
        </tr>

        <tr>
          <td>Region:</td>
          <td>{{ student.pceRegion }}</td>
        </tr>

        <tr>
          <td><button id=\"form2Prev\"><< Prev (1/3)</button></td>
          <td><button id=\"form2Next\">Next (3/3) >></button></td>
        </tr>
      </table>

      <table id=\"form3\">
        <tr>
          <td colspan=\"2\" align=\"center\">Father</td>
        </tr>

        <tr>
          <td>Full Name:</td>
          <td>{{ student.fatherFullName }}</td>
        </tr>

        <tr>
          <td>Occupation:</td>
          <td>{{ student.fatherOccupation }}</td>
        </tr>

        <tr>
          <td>Educational Level:</td>
          <td>{{ student.fatherEducationalLevel }}</td>
        </tr>

        <tr>
          <td colspan=\"2\" align=\"center\">Telephone</td>
        </tr>

        <tr>
          <td>Home Number:</td>
          <td>{{ student.fatherTelephoneHome }}</td>
        </tr>

        <tr>
          <td>Office Number:</td>
          <td>{{ student.fatherTelephoneHome }}</td>
        </tr>

        <tr>
          <td colspan=\"2\" align=\"center\">Residence Address</td>
        </tr>

        <tr>
          <td>House Number:</td>
          <td>{{ student.fatherHouseNumber }}</td>
        </tr>

        <tr>
          <td>Kebele:</td>
          <td>{{ student.fatherKebele }}</td>
        </tr>

        <tr>
          <td>Woreda/Subcity:</td>
          <td>{{ student.fatherWoredaSubcity }}</td>
        </tr>

        <tr>
          <td>Town:</td>
          <td>{{ student.fatherTown }}</td>
        </tr>

        <tr>
          <td>Zone:</td>
          <td>{{ student.fatherZone }}</td>
        </tr>

        <tr>
          <td>Region:</td>
          <td>{{ student.fatherRegion }}</td>
        </tr>

        <tr>
          <td colspan=\"2\" align=\"center\">Mother:</td>
        </tr>

        <tr>
          <td>Full Name:</td>
          <td>{{ student.motherFullName }}</td>
        </tr>

        <tr>
          <td>Occupation:</td>
          <td>{{ student.motherOccupation }}</td>
        </tr>

        <tr>
          <td>Educational Level:</td>
          <td>{{ student.motherEducationalLevel }}</td>
        </tr>

        <tr>
          <td colspan=\"2\" align=\"center\">Telephone</td>
        </tr>

        <tr>
          <td>Home Number:</td>
          <td>{{ student.motherTelephoneHome }}</td>
        </tr>

        <tr>
          <td>Office Number:</td>
          <td>{{ student.motherTelephoneHome }}</td>
        </tr>

        <tr>
          <td colspan=\"2\" align=\"center\">Residence Address</td>
        </tr>

        <tr>
          <td>House Number:</td>
          <td>{{ student.motherHouseNumber }}</td>
        </tr>

        <tr>
          <td>Kebele:</td>
          <td>{{ student.motherKebele }}</td>
        </tr>

        <tr>
          <td>Woreda/Subcity:</td>
          <td>{{ student.motherWoredaSubcity }}</td>
        </tr>

        <tr>
          <td>Town:</td>
          <td>{{ student.motherTown }}</td>
        </tr>

        <tr>
          <td>Zone:</td>
          <td>{{ student.motherZone }}</td>
        </tr>

        <tr>
          <td>Region:</td>
          <td>{{ student.motherRegion }}</td>
        </tr>

        <tr>
          <td><button id=\"form3Prev\"><< Prev (2/3)</button></td>
          <td></td>
        </tr>
      </table>

    </div>

    <hr class=\"clear\" width=\"0\" />
  </article>
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
", ":student:view_one.html.twig", "/home/amanuel/Documents/projects/B-A-Project/app/Resources/views/student/view_one.html.twig");
    }
}
