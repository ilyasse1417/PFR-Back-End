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

/* @Autocomplete/autocomplete_form_theme.html.twig */
class __TwigTemplate_23f02a9e674af0de7798c5fd5229aa36 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'ux_entity_autocomplete_widget' => [$this, 'block_ux_entity_autocomplete_widget'],
            'ux_entity_autocomplete_label' => [$this, 'block_ux_entity_autocomplete_label'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Autocomplete/autocomplete_form_theme.html.twig"));

        // line 2
        $this->displayBlock('ux_entity_autocomplete_widget', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('ux_entity_autocomplete_label', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_ux_entity_autocomplete_widget($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ux_entity_autocomplete_widget"));

        // line 3
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "autocomplete", [], "any", false, false, false, 3), 'widget', ["attr" => twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "autocomplete", [], "any", false, false, false, 3), "vars", [], "any", false, false, false, 3), "attr", [], "any", false, false, false, 3), ["required" => (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 3, $this->source); })())])]);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_ux_entity_autocomplete_label($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ux_entity_autocomplete_label"));

        // line 7
        echo "    ";
        $context["id"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "autocomplete", [], "any", false, false, false, 7), "vars", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7);
        // line 8
        echo "    ";
        $this->displayBlock("form_label", $context, $blocks);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@Autocomplete/autocomplete_form_theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  81 => 8,  78 => 7,  71 => 6,  61 => 3,  54 => 2,  47 => 6,  44 => 5,  42 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# EasyAdminAutocomplete form type #}
{% block ux_entity_autocomplete_widget %}
    {{ form_widget(form.autocomplete, { attr: form.autocomplete.vars.attr|merge({ required: required }) }) }}
{% endblock ux_entity_autocomplete_widget %}

{% block ux_entity_autocomplete_label %}
    {% set id = form.autocomplete.vars.id %}
    {{ block('form_label') }}
{% endblock ux_entity_autocomplete_label %}
", "@Autocomplete/autocomplete_form_theme.html.twig", "/Users/ilyasse/7rayfi/vendor/symfony/ux-autocomplete/templates/autocomplete_form_theme.html.twig");
    }
}
