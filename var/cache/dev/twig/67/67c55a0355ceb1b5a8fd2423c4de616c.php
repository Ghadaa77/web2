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

/* pointderelais/search.html.twig */
class __TwigTemplate_26ace52f5ff856c49275611641a9eb9e extends Template
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
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointderelais/search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pointderelais/search.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "pointderelais/search.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Rechercher un pointderelais ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Rechercher un pointderelais </h1>

    <form action=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointderelais_search");
        echo "\" method=\"GET\">
        <div class=\"form-group\">
            <label for=\"searchTerm\">Rechercher</label>
            <input type=\"text\" name=\"q\" id=\"searchTerm\" class=\"form-control\" placeholder=\"\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
    </form>

    ";
        // line 16
        if ( !twig_test_empty((isset($context["pointderelais"]) || array_key_exists("pointderelais", $context) ? $context["pointderelais"] : (function () { throw new RuntimeError('Variable "pointderelais" does not exist.', 16, $this->source); })()))) {
            // line 17
            echo "        <h2>Résultats de la recherche pour \"";
            echo twig_escape_filter($this->env, (isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 17, $this->source); })()), "html", null, true);
            echo "\" :</h2>

        <table class=\"table\">
            <thead>
                <tr>
                <th>IdPointderelais</th>
                <th>AdressePointderelais</th>
                <th>Region</th>
                <th>Horaire</th>
               
                </tr>
            </thead>
            <tbody>
                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pointderelaiss"]) || array_key_exists("pointderelaiss", $context) ? $context["pointderelaiss"] : (function () { throw new RuntimeError('Variable "pointderelaiss" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pointderelais"]) {
                // line 31
                echo "            <tr>
                        
                <td>";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pointderelais"], "idPointderelais", [], "any", false, false, false, 33), "html", null, true);
                echo "</td>
                <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pointderelais"], "adressePointderelais", [], "any", false, false, false, 34), "html", null, true);
                echo "</td>
                <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pointderelais"], "region", [], "any", false, false, false, 35), "html", null, true);
                echo "</td>
                <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pointderelais"], "horaire", [], "any", false, false, false, 36), "html", null, true);
                echo "</td>
<td>
                            <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointderelais_front_show", ["idPointderelais " => twig_get_attribute($this->env, $this->source, (isset($context["pointderelai"]) || array_key_exists("pointderelai", $context) ? $context["pointderelai"] : (function () { throw new RuntimeError('Variable "pointderelai" does not exist.', 38, $this->source); })()), "idPointderelais", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">
                                Afficher
                            </a>
                            <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointderelais_front_edit", ["idPointderelais " => twig_get_attribute($this->env, $this->source, (isset($context["pointderelai"]) || array_key_exists("pointderelai", $context) ? $context["pointderelai"] : (function () { throw new RuntimeError('Variable "pointderelai" does not exist.', 41, $this->source); })()), "idPointderelais", [], "any", false, false, false, 41)]), "html", null, true);
                echo "\" class=\"btn btn-secondary\">
                                Modifier
                            </a>
                            <form action=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointderelais_front_delete", ["idPointderelais " => twig_get_attribute($this->env, $this->source, (isset($context["pointderelai"]) || array_key_exists("pointderelai", $context) ? $context["pointderelai"] : (function () { throw new RuntimeError('Variable "pointderelai" does not exist.', 44, $this->source); })()), "idPointderelais", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\" method=\"POST\" style=\"display: inline-block;\">
                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["pointderelai"]) || array_key_exists("pointderelai", $context) ? $context["pointderelai"] : (function () { throw new RuntimeError('Variable "pointderelai" does not exist.', 46, $this->source); })()), "idPointderelais", [], "any", false, false, false, 46))), "html", null, true);
                echo "\">
                                <button type=\"submit\" class=\"btn btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer  ?')\">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pointderelais'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "            </tbody>
        </table>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "pointderelais/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 52,  164 => 46,  159 => 44,  153 => 41,  147 => 38,  142 => 36,  138 => 35,  134 => 34,  130 => 33,  126 => 31,  122 => 30,  105 => 17,  103 => 16,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block title %}Rechercher un pointderelais {% endblock %}

{% block body %}
    <h1>Rechercher un pointderelais </h1>

    <form action=\"{{ path('app_pointderelais_search') }}\" method=\"GET\">
        <div class=\"form-group\">
            <label for=\"searchTerm\">Rechercher</label>
            <input type=\"text\" name=\"q\" id=\"searchTerm\" class=\"form-control\" placeholder=\"\">
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
    </form>

    {% if pointderelais  is not empty %}
        <h2>Résultats de la recherche pour \"{{ searchTerm }}\" :</h2>

        <table class=\"table\">
            <thead>
                <tr>
                <th>IdPointderelais</th>
                <th>AdressePointderelais</th>
                <th>Region</th>
                <th>Horaire</th>
               
                </tr>
            </thead>
            <tbody>
                {% for pointderelais in pointderelaiss %}
            <tr>
                        
                <td>{{ pointderelais.idPointderelais }}</td>
                <td>{{ pointderelais.adressePointderelais }}</td>
                <td>{{ pointderelais.region }}</td>
                <td>{{ pointderelais.horaire }}</td>
<td>
                            <a href=\"{{ path('app_pointderelais_front_show', {'idPointderelais ': pointderelai.idPointderelais}) }}\" class=\"btn btn-primary\">
                                Afficher
                            </a>
                            <a href=\"{{ path('app_pointderelais_front_edit', {'idPointderelais ': pointderelai.idPointderelais}) }}\" class=\"btn btn-secondary\">
                                Modifier
                            </a>
                            <form action=\"{{ path('app_pointderelais_front_delete', {'idPointderelais ': pointderelai.idPointderelais}) }}\" method=\"POST\" style=\"display: inline-block;\">
                                <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ pointderelai.idPointderelais) }}\">
                                <button type=\"submit\" class=\"btn btn-danger\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer  ?')\">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock %}", "pointderelais/search.html.twig", "C:\\Users\\hp\\OneDrive\\Bureau\\final-master\\templates\\pointderelais\\search.html.twig");
    }
}
