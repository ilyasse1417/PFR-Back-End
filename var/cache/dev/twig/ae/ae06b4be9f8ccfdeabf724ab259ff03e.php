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

/* profession/index.html.twig */
class __TwigTemplate_8ee69290cc7f73bba053d173b5b70835 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profession/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profession/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Profession
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
        echo "
\t<div class=\"container-fluid my-3\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header d-flex justify-content-between\">
\t\t\t\t\t\t<h5>Profession</h5>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profession_new");
        echo "\" class=\"btn btn-primary\">Add</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t\t\t<th>CreatedAt</th>
\t\t\t\t\t\t\t\t\t<th>UpdatedAt</th>
\t\t\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["professions"]) || array_key_exists("professions", $context) ? $context["professions"] : (function () { throw new RuntimeError('Variable "professions" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["profession"]) {
            // line 33
            echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profession"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profession"], "name", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profession"], "status", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profession"], "description", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 38
            ((twig_get_attribute($this->env, $this->source, $context["profession"], "createdAt", [], "any", false, false, false, 38)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profession"], "createdAt", [], "any", false, false, false, 38), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>";
            // line 39
            ((twig_get_attribute($this->env, $this->source, $context["profession"], "updatedAt", [], "any", false, false, false, 39)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["profession"], "updatedAt", [], "any", false, false, false, 39), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profession_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["profession"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-outline-primary btn-sm\">Edit</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 48
            echo twig_include($this->env, $context, "profession/_delete_form.html.twig");
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 54
            echo "\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"7\">No records found</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['profession'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
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
        return "profession/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 58,  179 => 54,  160 => 48,  152 => 43,  145 => 39,  141 => 38,  137 => 37,  133 => 36,  129 => 35,  125 => 34,  122 => 33,  104 => 32,  84 => 15,  74 => 7,  67 => 6,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profession
{% endblock %}

{% block body %}

\t<div class=\"container-fluid my-3\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col\">
\t\t\t\t<div class=\"card\">
\t\t\t\t\t<div class=\"card-header d-flex justify-content-between\">
\t\t\t\t\t\t<h5>Profession</h5>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"{{ path('app_profession_new') }}\" class=\"btn btn-primary\">Add</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<table class=\"table table-bordered\">
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<th>Id</th>
\t\t\t\t\t\t\t\t\t<th>Name</th>
\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t\t\t<th>CreatedAt</th>
\t\t\t\t\t\t\t\t\t<th>UpdatedAt</th>
\t\t\t\t\t\t\t\t\t<th>actions</th>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t{% for profession in professions %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>{{ profession.id }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ profession.name }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ profession.status }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ profession.description }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ profession.createdAt ? profession.createdAt|date('Y-m-d H:i:s') : '' }}</td>
\t\t\t\t\t\t\t\t\t\t<td>{{ profession.updatedAt ? profession.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_profession_edit', {'id': profession.id}) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-outline-primary btn-sm\">Edit</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ include('profession/_delete_form.html.twig') }}
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td colspan=\"7\">No records found</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t</table>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}
", "profession/index.html.twig", "/Users/ilyasse/7rayfi/templates/profession/index.html.twig");
    }
}
