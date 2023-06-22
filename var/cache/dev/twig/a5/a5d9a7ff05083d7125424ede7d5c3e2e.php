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

/* base.html.twig */
class __TwigTemplate_ecdd0bde0932ba184ac4924f98e87de9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "
\t\t";
        // line 13
        $this->displayBlock('javascripts', $context, $blocks);
        // line 16
        echo "\t</head>
\t<body>
\t\t<nav class=\"navbar navbar-expand-lg bg-success\">
\t\t\t<div class=\"container-fluid text-light\">
\t\t\t\t<a class=\"navbar-brand  text-white\" href=\"#\">Artisan - Admin</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarText\" aria-controls=\"navbarText\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarText\">
\t\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-white-50\" href=\"#\">Dashboard</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-white-50\" href=\"#\">Employés</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-white-50\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profession_index");
        echo "\">Professions</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-white-50\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_craftsman_index");
        echo "\">Artisans</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-white-50\" href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_city_index");
        echo "\">Villes</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-white-50\" href=\"#\">Utilisateurs</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"nav navbar-nav ml-auto\">
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle text-white-50\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-person\" style=\"font-size : 25px;\"></i>
\t\t\t\t\t\t\t\tuser@email.ma
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Log in</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Log out
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t<main>
\t\t\t<!-- Main -->
\t\t\t";
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "\t\t</main>
\t\t<footer class=\"py-3 my-4\">
\t\t\t<ul class=\"nav justify-content-center border-bottom pb-3 mb-3\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"#\" class=\"nav-link px-2 text-muted\">Mentions légales</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"#\" class=\"nav-link px-2 text-muted\">Politique de confidentialité</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<span class=\"nav-link px-2 text-muted\">support@exemple.com</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<p class=\"text-center text-muted\">© www.artisan.com</p>
\t\t</footer>
\t</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("app");
        echo "
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "\t\t\t";
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("app");
        echo "
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 67
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 67,  189 => 14,  182 => 13,  172 => 10,  165 => 9,  151 => 6,  127 => 68,  125 => 67,  94 => 39,  88 => 36,  82 => 33,  63 => 16,  61 => 13,  58 => 12,  56 => 9,  53 => 8,  51 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}Welcome!
\t\t\t{% endblock %}
\t\t</title>
\t\t{% block stylesheets %}
\t\t\t{{ encore_entry_link_tags('app') }}
\t\t{% endblock %}

\t\t{% block javascripts %}
\t\t\t{{ encore_entry_script_tags('app') }}
\t\t{% endblock %}
\t</head>
\t<body>
\t\t<nav class=\"navbar navbar-expand-lg bg-success\">
\t\t\t<div class=\"container-fluid text-light\">
\t\t\t\t<a class=\"navbar-brand  text-white\" href=\"#\">Artisan - Admin</a>
\t\t\t\t<button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarText\" aria-controls=\"navbarText\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbarText\">
\t\t\t\t\t<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-white-50\" href=\"#\">Dashboard</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-white-50\" href=\"#\">Employés</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-white-50\" href=\"{{ path('app_profession_index')}}\">Professions</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-white-50\" href=\"{{ path('app_craftsman_index')}}\">Artisans</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-white-50\" href=\"{{ path('app_city_index')}}\">Villes</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a class=\"nav-link text-white-50\" href=\"#\">Utilisateurs</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<ul class=\"nav navbar-nav ml-auto\">
\t\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle text-white-50\" href=\"#\" role=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-person\" style=\"font-size : 25px;\"></i>
\t\t\t\t\t\t\t\tuser@email.ma
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Log in</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Log out
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t<main>
\t\t\t<!-- Main -->
\t\t\t{% block body %}{% endblock %}
\t\t</main>
\t\t<footer class=\"py-3 my-4\">
\t\t\t<ul class=\"nav justify-content-center border-bottom pb-3 mb-3\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"#\" class=\"nav-link px-2 text-muted\">Mentions légales</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"#\" class=\"nav-link px-2 text-muted\">Politique de confidentialité</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<span class=\"nav-link px-2 text-muted\">support@exemple.com</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t<p class=\"text-center text-muted\">© www.artisan.com</p>
\t\t</footer>
\t</body>
</html>
", "base.html.twig", "/Users/ilyasse/7rayfi/templates/base.html.twig");
    }
}
