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

/* city/new.html.twig */
class __TwigTemplate_665cd550006a6b4774f7954a2e76dfcf extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "city/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "city/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "New City
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
\t\t\t\t\t\t<h5>Add city</h5>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_city_index");
        echo "\" class=\"btn btn-outline-secondary\">Cancel</a>
\t\t\t\t\t\t\t<a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_city_new");
        echo "\" class=\"btn btn-primary\" id=\"save\">Add</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t";
        // line 19
        echo twig_include($this->env, $context, "city/_form.html.twig");
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
        return "city/new.html.twig";
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

{% block title %}New City
{% endblock %}

{% block body %}
\t<div class=\"container-fluid my-3\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header d-flex justify-content-between\">
\t\t\t\t\t\t<h5>Add city</h5>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"{{ path('app_city_index') }}\" class=\"btn btn-outline-secondary\">Cancel</a>
\t\t\t\t\t\t\t<a href=\"{{ path('app_city_new') }}\" class=\"btn btn-primary\" id=\"save\">Add</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t{{ include('city/_form.html.twig') }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "city/new.html.twig", "/Users/ilyasse/7rayfi/templates/city/new.html.twig");
    }
}
