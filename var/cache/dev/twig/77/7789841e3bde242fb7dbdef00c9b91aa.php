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

/* pointderelais_front/show.html.twig */
class __TwigTemplate_e37ceef2ae09cb98b7ad229e8b189b4c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointderelais_front/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointderelais_front/show.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "pointderelais_front/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pointderelais</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdPointderelais</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pointderelai"]) || array_key_exists("pointderelai", $context) ? $context["pointderelai"] : (function () { throw new RuntimeError('Variable "pointderelai" does not exist.', 10, $this->source); })()), "idPointderelais", [], "any", false, false, false, 10), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>AdressePointderelais</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pointderelai"]) || array_key_exists("pointderelai", $context) ? $context["pointderelai"] : (function () { throw new RuntimeError('Variable "pointderelai" does not exist.', 14, $this->source); })()), "adressePointderelais", [], "any", false, false, false, 14), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Region</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pointderelai"]) || array_key_exists("pointderelai", $context) ? $context["pointderelai"] : (function () { throw new RuntimeError('Variable "pointderelai" does not exist.', 18, $this->source); })()), "region", [], "any", false, false, false, 18), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Horaire</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pointderelai"]) || array_key_exists("pointderelai", $context) ? $context["pointderelai"] : (function () { throw new RuntimeError('Variable "pointderelai" does not exist.', 22, $this->source); })()), "horaire", [], "any", false, false, false, 22), "html", null, true);
        echo "</td>
            </tr>
            
        </tbody>
    </table>

    <a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointderelais_front_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointderelais_front_edit", ["idPointderelais" => twig_get_attribute($this->env, $this->source, (isset($context["pointderelai"]) || array_key_exists("pointderelai", $context) ? $context["pointderelai"] : (function () { throw new RuntimeError('Variable "pointderelai" does not exist.', 30, $this->source); })()), "idPointderelais", [], "any", false, false, false, 30)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 32
        echo twig_include($this->env, $context, "pointderelais_front/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pointderelais_front/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 32,  111 => 30,  106 => 28,  97 => 22,  90 => 18,  83 => 14,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}

{% block body %}
    <h1>Pointderelais</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>IdPointderelais</th>
                <td>{{ pointderelai.idPointderelais }}</td>
            </tr>
            <tr>
                <th>AdressePointderelais</th>
                <td>{{ pointderelai.adressePointderelais }}</td>
            </tr>
            <tr>
                <th>Region</th>
                <td>{{ pointderelai.region }}</td>
            </tr>
            <tr>
                <th>Horaire</th>
                <td>{{ pointderelai.horaire }}</td>
            </tr>
            
        </tbody>
    </table>

    <a href=\"{{ path('app_pointderelais_front_index') }}\">back to list</a>

    <a href=\"{{ path('app_pointderelais_front_edit', {'idPointderelais': pointderelai.idPointderelais}) }}\">edit</a>

    {{ include('pointderelais_front/_delete_form.html.twig') }}
{% endblock %}
", "pointderelais_front/show.html.twig", "C:\\Users\\hp\\OneDrive\\Bureau\\final-master\\templates\\pointderelais_front\\show.html.twig");
    }
}
