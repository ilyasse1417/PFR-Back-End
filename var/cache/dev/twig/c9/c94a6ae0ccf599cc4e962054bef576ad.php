<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* city/edit.html.twig */
class __TwigTemplate_82db2784a7b2409d72e519390575c942 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "city/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "city/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Edit City
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"container-fluid my-3\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header d-flex justify-content-between\">
\t\t\t\t\t\t<h5>Edit city</h5>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_city_index");
        echo "\" class=\"btn btn-outline-secondary\">Cancel</a>
\t\t\t\t\t\t\t<a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_city_new");
        echo "\" class=\"btn btn-primary\" id=\"save\">Save</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t";
        // line 19
        echo twig_include($this->env, $context, "city/_form.html.twig", ["button_label" => "Update"]);
        echo "

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "city/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 19,  87 => 15,  83 => 14,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Edit City
{% endblock %}

{% block body %}
\t<div class=\"container-fluid my-3\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header d-flex justify-content-between\">
\t\t\t\t\t\t<h5>Edit city</h5>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"{{ path('app_city_index') }}\" class=\"btn btn-outline-secondary\">Cancel</a>
\t\t\t\t\t\t\t<a href=\"{{ path('app_city_new') }}\" class=\"btn btn-primary\" id=\"save\">Save</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t{{ include('city/_form.html.twig', {'button_label': 'Update'}) }}

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "city/edit.html.twig", "/Users/ilyasse/7rayfi/templates/city/edit.html.twig");
    }
}
