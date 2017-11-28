<?php

/* :course:view.html.twig */
class __TwigTemplate_a250f29aecf99f4d9d01da205ce6a1caeb1e53d14d0a5c68c3df515c985a35da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":course:view.html.twig", 1);
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
        $__internal_215743b417ab4ea4a78c82da70c5aa1fcfa58c1ef042fff81d6fed32cab964c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_215743b417ab4ea4a78c82da70c5aa1fcfa58c1ef042fff81d6fed32cab964c1->enter($__internal_215743b417ab4ea4a78c82da70c5aa1fcfa58c1ef042fff81d6fed32cab964c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":course:view.html.twig"));

        $__internal_f476baecd23d6cb331b32af8ce767319eae7b3fbb8a73da928b682c87fd50ca6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f476baecd23d6cb331b32af8ce767319eae7b3fbb8a73da928b682c87fd50ca6->enter($__internal_f476baecd23d6cb331b32af8ce767319eae7b3fbb8a73da928b682c87fd50ca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":course:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_215743b417ab4ea4a78c82da70c5aa1fcfa58c1ef042fff81d6fed32cab964c1->leave($__internal_215743b417ab4ea4a78c82da70c5aa1fcfa58c1ef042fff81d6fed32cab964c1_prof);

        
        $__internal_f476baecd23d6cb331b32af8ce767319eae7b3fbb8a73da928b682c87fd50ca6->leave($__internal_f476baecd23d6cb331b32af8ce767319eae7b3fbb8a73da928b682c87fd50ca6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_22566bbf9d8cd5682da31b0861d0ce2cd60e78670991bc0adf38de08f379accd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22566bbf9d8cd5682da31b0861d0ce2cd60e78670991bc0adf38de08f379accd->enter($__internal_22566bbf9d8cd5682da31b0861d0ce2cd60e78670991bc0adf38de08f379accd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3f68777b6d582a54df1d5c14a4acafd37e520e9ec51376ea7938222e2b74448f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f68777b6d582a54df1d5c14a4acafd37e520e9ec51376ea7938222e2b74448f->enter($__internal_3f68777b6d582a54df1d5c14a4acafd37e520e9ec51376ea7938222e2b74448f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Course View
";
        
        $__internal_3f68777b6d582a54df1d5c14a4acafd37e520e9ec51376ea7938222e2b74448f->leave($__internal_3f68777b6d582a54df1d5c14a4acafd37e520e9ec51376ea7938222e2b74448f_prof);

        
        $__internal_22566bbf9d8cd5682da31b0861d0ce2cd60e78670991bc0adf38de08f379accd->leave($__internal_22566bbf9d8cd5682da31b0861d0ce2cd60e78670991bc0adf38de08f379accd_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_4fe2ec0f42bc145309abdf3417aea253f855345116b84324f07d0716017628c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fe2ec0f42bc145309abdf3417aea253f855345116b84324f07d0716017628c3->enter($__internal_4fe2ec0f42bc145309abdf3417aea253f855345116b84324f07d0716017628c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_7e1955f26fd6cbb770fa68a0b3d1bfcb2e00b69982848556c60a33399ecec017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e1955f26fd6cbb770fa68a0b3d1bfcb2e00b69982848556c60a33399ecec017->enter($__internal_7e1955f26fd6cbb770fa68a0b3d1bfcb2e00b69982848556c60a33399ecec017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

</style>
";
        
        $__internal_7e1955f26fd6cbb770fa68a0b3d1bfcb2e00b69982848556c60a33399ecec017->leave($__internal_7e1955f26fd6cbb770fa68a0b3d1bfcb2e00b69982848556c60a33399ecec017_prof);

        
        $__internal_4fe2ec0f42bc145309abdf3417aea253f855345116b84324f07d0716017628c3->leave($__internal_4fe2ec0f42bc145309abdf3417aea253f855345116b84324f07d0716017628c3_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_23424b6186f3dac33ca4d2e2c8c83f745a9305211b558f571bbad962468fd277 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23424b6186f3dac33ca4d2e2c8c83f745a9305211b558f571bbad962468fd277->enter($__internal_23424b6186f3dac33ca4d2e2c8c83f745a9305211b558f571bbad962468fd277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_740ee633b89408045fa3e222a8df0c4be0549c7558b50f0c1d949e1e0913ada7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_740ee633b89408045fa3e222a8df0c4be0549c7558b50f0c1d949e1e0913ada7->enter($__internal_740ee633b89408045fa3e222a8df0c4be0549c7558b50f0c1d949e1e0913ada7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "  <div class=\"container\" id=\"view_container\">
    <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_create");
        echo "\">Create a New Course</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Course Code</th>
          <th>Course Name</th>
          <th>Course Credit Hour</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["courses"] ?? $this->getContext($context, "courses")));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 26
            echo "          <tr>
            <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "courseCode", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "courseName", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "courseCreditHour", array()), "html", null, true);
            echo "</td>

            <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_view_one", array("course_id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">view</a></td>

            ";
            // line 33
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "get", array(0 => "user_type"), "method") == "admin")) {
                // line 34
                echo "              <td><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_edit", array("course_id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" id=\"editBtn\">edit</button></td>
              <td><a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_delete", array("course_id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" id=\"deleteBtn\"
                    onclick=\"return confirm('Are You Sure You Want To Delete ";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "courseName", array()), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "courseCode", array()), "html", null, true);
                echo ")?') \">delete</button></td>
            ";
            }
            // line 37
            echo "  
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "      </tbody>
    </table>
  </div>
";
        
        $__internal_740ee633b89408045fa3e222a8df0c4be0549c7558b50f0c1d949e1e0913ada7->leave($__internal_740ee633b89408045fa3e222a8df0c4be0549c7558b50f0c1d949e1e0913ada7_prof);

        
        $__internal_23424b6186f3dac33ca4d2e2c8c83f745a9305211b558f571bbad962468fd277->leave($__internal_23424b6186f3dac33ca4d2e2c8c83f745a9305211b558f571bbad962468fd277_prof);

    }

    public function getTemplateName()
    {
        return ":course:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 40,  153 => 37,  146 => 36,  142 => 35,  137 => 34,  135 => 33,  130 => 31,  125 => 29,  121 => 28,  117 => 27,  114 => 26,  110 => 25,  96 => 14,  93 => 13,  84 => 12,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  Course View
{% endblock %}

{% block stylesheet %}
<style>

</style>
{% endblock %}

{% block body %}
  <div class=\"container\" id=\"view_container\">
    <a href=\"{{ path('course_create') }}\">Create a New Course</a>
    <table border=\"0\">
      <thead>
        <tr>
          <th>Course Code</th>
          <th>Course Name</th>
          <th>Course Credit Hour</th>
          <th colspan=\"3\">Actions</th>
        </tr>
      </thead>
      <tbody>
        {% for course in courses %}
          <tr>
            <td>{{ course.courseCode }}</td>
            <td>{{ course.courseName }}</td>
            <td>{{ course.courseCreditHour }}</td>

            <td><a href=\"{{ path('course_view_one', {'course_id': course.id}) }}\">view</a></td>

            {% if(app.session.get('user_type') == 'admin') %}
              <td><a href=\"{{ path('course_edit', {'course_id': course.id}) }}\" id=\"editBtn\">edit</button></td>
              <td><a href=\"{{ path('course_delete', {'course_id': course.id}) }}\" id=\"deleteBtn\"
                    onclick=\"return confirm('Are You Sure You Want To Delete {{ course.courseName }} ({{ course.courseCode }})?') \">delete</button></td>
            {% endif %}  
          </tr>
        {% endfor %}
      </tbody>
    </table>
  </div>
{% endblock %}
", ":course:view.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/course/view.html.twig");
    }
}
