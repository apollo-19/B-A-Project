<?php

/* :student:view.html.twig */
class __TwigTemplate_f752d08d30fe1c48fdeecca79d996b676f81f220388693c37092c6ae2910c6dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":student:view.html.twig", 1);
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
        $__internal_5c5e35fcbaee185f04ca2604780681358103325935babf43efaba3567e8a57ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c5e35fcbaee185f04ca2604780681358103325935babf43efaba3567e8a57ef->enter($__internal_5c5e35fcbaee185f04ca2604780681358103325935babf43efaba3567e8a57ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":student:view.html.twig"));

        $__internal_3bc653cf7e69c5d73d269058e3ef7a9a4275ce84da928a6dc00b878457c84a69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bc653cf7e69c5d73d269058e3ef7a9a4275ce84da928a6dc00b878457c84a69->enter($__internal_3bc653cf7e69c5d73d269058e3ef7a9a4275ce84da928a6dc00b878457c84a69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":student:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c5e35fcbaee185f04ca2604780681358103325935babf43efaba3567e8a57ef->leave($__internal_5c5e35fcbaee185f04ca2604780681358103325935babf43efaba3567e8a57ef_prof);

        
        $__internal_3bc653cf7e69c5d73d269058e3ef7a9a4275ce84da928a6dc00b878457c84a69->leave($__internal_3bc653cf7e69c5d73d269058e3ef7a9a4275ce84da928a6dc00b878457c84a69_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_273416ff6f4437d66145b8032af900a4b6cbb2b117faa51922e4786101ccc4c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_273416ff6f4437d66145b8032af900a4b6cbb2b117faa51922e4786101ccc4c7->enter($__internal_273416ff6f4437d66145b8032af900a4b6cbb2b117faa51922e4786101ccc4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_22d9b999d639baf710604610c979183e739deb3a33b7f8c8a943048826a71311 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d9b999d639baf710604610c979183e739deb3a33b7f8c8a943048826a71311->enter($__internal_22d9b999d639baf710604610c979183e739deb3a33b7f8c8a943048826a71311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "  Student View
";
        
        $__internal_22d9b999d639baf710604610c979183e739deb3a33b7f8c8a943048826a71311->leave($__internal_22d9b999d639baf710604610c979183e739deb3a33b7f8c8a943048826a71311_prof);

        
        $__internal_273416ff6f4437d66145b8032af900a4b6cbb2b117faa51922e4786101ccc4c7->leave($__internal_273416ff6f4437d66145b8032af900a4b6cbb2b117faa51922e4786101ccc4c7_prof);

    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_0b58a3bf1b50efde9bc6a223711f4baa17eef37831e0a4711a0508e27f8659d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b58a3bf1b50efde9bc6a223711f4baa17eef37831e0a4711a0508e27f8659d2->enter($__internal_0b58a3bf1b50efde9bc6a223711f4baa17eef37831e0a4711a0508e27f8659d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_7dc5c8afb598b082efc79870a9a90fa661ac40400c68c811dc6663b70394e7a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7dc5c8afb598b082efc79870a9a90fa661ac40400c68c811dc6663b70394e7a4->enter($__internal_7dc5c8afb598b082efc79870a9a90fa661ac40400c68c811dc6663b70394e7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 7
        echo "<style>

.container table {
\twidth: 800px;
  margin-left:50px;
\tborder-collapse: collapse;
\toverflow: hidden;
\tbox-shadow: 0 0 20px rgba(0,0,0,0.1);
}
.container th, .container td {
\tpadding: 15px;
\tbackground-color: #EDF7F8;
\tcolor: #blue;
}
.container th {
\ttext-align: left;
}
.container thead th {
\t\tbackground-color: #2573B4;
\t}



</style>
";
        
        $__internal_7dc5c8afb598b082efc79870a9a90fa661ac40400c68c811dc6663b70394e7a4->leave($__internal_7dc5c8afb598b082efc79870a9a90fa661ac40400c68c811dc6663b70394e7a4_prof);

        
        $__internal_0b58a3bf1b50efde9bc6a223711f4baa17eef37831e0a4711a0508e27f8659d2->leave($__internal_0b58a3bf1b50efde9bc6a223711f4baa17eef37831e0a4711a0508e27f8659d2_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_ba5bf0c77f7b6ecb802572604afa69b80e782492b72f37f875ae76e045300ffd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba5bf0c77f7b6ecb802572604afa69b80e782492b72f37f875ae76e045300ffd->enter($__internal_ba5bf0c77f7b6ecb802572604afa69b80e782492b72f37f875ae76e045300ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_21cfb80bc83b03028ce668ac061644b5bf41a02e73368371ee3efc237d7da409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21cfb80bc83b03028ce668ac061644b5bf41a02e73368371ee3efc237d7da409->enter($__internal_21cfb80bc83b03028ce668ac061644b5bf41a02e73368371ee3efc237d7da409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "  <div class=\"container\">
    <table>
  <thead>
    <tr>
      <th>First Name </th>
      <th>Middle Name</th>
      <th>Last Name</th>
      <th>Sex</th>
      <th>School</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>ell</td>
      <td>Cell</td>
      <td>sskf</td>
      <td>Cell</td>
      <td>Cell</td>
      <td>Cell</td>
      <td><button class=\"editbtn\">edit</button></td>
    </tr>
    <tr>
      <td>Cell 1</td>
      <td>Cell 2</td>
      <td>Cell 3</td>
      <td>Cell 4</td>
      <td>Cell 5</td>
      <td>Cell 5</td>
    </tr>
    <tr>
      <td>Cell 1</td>
      <td>Cell 2</td>
      <td>Cell 3</td>
      <td>Cell 4</td>
      <td>Cell 5</td>
      <td>Cell 5</td>
    </tr>
    <tr>
      <td>Cell 1</td>
      <td>Cell 2</td>
      <td>Cell 3</td>
      <td>Cell 4</td>
      <td>Cell 5</td>
      <td>Cell 5</td>
    </tr>
    <tr>
      <td>Cell 1</td>
      <td>Cell 2</td>
      <td>Cell 3</td>
      <td>Cell 4</td>
      <td>Cell 5</td>
      <td>Cell 5</td>
    </tr>

  </tbody>
</table>

  </div>
";
        
        $__internal_21cfb80bc83b03028ce668ac061644b5bf41a02e73368371ee3efc237d7da409->leave($__internal_21cfb80bc83b03028ce668ac061644b5bf41a02e73368371ee3efc237d7da409_prof);

        
        $__internal_ba5bf0c77f7b6ecb802572604afa69b80e782492b72f37f875ae76e045300ffd->leave($__internal_ba5bf0c77f7b6ecb802572604afa69b80e782492b72f37f875ae76e045300ffd_prof);

    }

    public function getTemplateName()
    {
        return ":student:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  105 => 33,  71 => 7,  62 => 6,  51 => 3,  42 => 2,  11 => 1,);
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
  Student View
{% endblock %}

{% block stylesheet %}
<style>

.container table {
\twidth: 800px;
  margin-left:50px;
\tborder-collapse: collapse;
\toverflow: hidden;
\tbox-shadow: 0 0 20px rgba(0,0,0,0.1);
}
.container th, .container td {
\tpadding: 15px;
\tbackground-color: #EDF7F8;
\tcolor: #blue;
}
.container th {
\ttext-align: left;
}
.container thead th {
\t\tbackground-color: #2573B4;
\t}



</style>
{% endblock %}

{% block body %}
  <div class=\"container\">
    <table>
  <thead>
    <tr>
      <th>First Name </th>
      <th>Middle Name</th>
      <th>Last Name</th>
      <th>Sex</th>
      <th>School</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>ell</td>
      <td>Cell</td>
      <td>sskf</td>
      <td>Cell</td>
      <td>Cell</td>
      <td>Cell</td>
      <td><button class=\"editbtn\">edit</button></td>
    </tr>
    <tr>
      <td>Cell 1</td>
      <td>Cell 2</td>
      <td>Cell 3</td>
      <td>Cell 4</td>
      <td>Cell 5</td>
      <td>Cell 5</td>
    </tr>
    <tr>
      <td>Cell 1</td>
      <td>Cell 2</td>
      <td>Cell 3</td>
      <td>Cell 4</td>
      <td>Cell 5</td>
      <td>Cell 5</td>
    </tr>
    <tr>
      <td>Cell 1</td>
      <td>Cell 2</td>
      <td>Cell 3</td>
      <td>Cell 4</td>
      <td>Cell 5</td>
      <td>Cell 5</td>
    </tr>
    <tr>
      <td>Cell 1</td>
      <td>Cell 2</td>
      <td>Cell 3</td>
      <td>Cell 4</td>
      <td>Cell 5</td>
      <td>Cell 5</td>
    </tr>

  </tbody>
</table>

  </div>
{% endblock %}
", ":student:view.html.twig", "/home/amanuel/Documents/projects/A-Bnew/app/Resources/views/student/view.html.twig");
    }
}
