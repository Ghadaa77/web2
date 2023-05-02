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

/* livraison/index.html.twig */
class __TwigTemplate_9ff2925dbde3c2d61f2b6f66648c85c1 extends Template
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
        return "baseBack.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livraison/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "livraison/index.html.twig"));

        $this->parent = $this->loadTemplate("baseBack.html.twig", "livraison/index.html.twig", 1);
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
        echo "<h1>Liste des livraisons</h1>
   

   

    <table class=\"table\">
        <thead>
            <tr>
                <th>IdLivraison</th>
                <th>DateLivraison</th>
                <th>PrixLivraison</th>
                <th>AdresseLivraison</th>
                <th>EtatLivraison</th>
                <th>Livreur</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 22, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["livraison"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livraison"], "idLivraison", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            ((twig_get_attribute($this->env, $this->source, $context["livraison"], "dateLivraison", [], "any", false, false, false, 25)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livraison"], "dateLivraison", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livraison"], "prixLivraison", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livraison"], "adresseLivraison", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livraison"], "etatLivraison", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["livraison"], "fkIdLivreur", [], "any", false, false, false, 29), "nom", [], "any", false, false, false, 29), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["livraison"], "fkIdLivreur", [], "any", false, false, false, 29), "prenom", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_show", ["idLivraison" => twig_get_attribute($this->env, $this->source, $context["livraison"], "idLivraison", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_edit", ["idLivraison" => twig_get_attribute($this->env, $this->source, $context["livraison"], "idLivraison", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livraison'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "       ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 40, $this->source); })()), "getPageCount", [], "method", false, false, false, 40) > 1)) {
            // line 41
            echo "    <nav aria-label=\"...\">
        <ul class=\"pagination\">
        
            ";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 44, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 44) != 1)) {
                // line 45
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_index", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 46, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 46) - 1)]), "html", null, true);
                echo "\">Précédent</a>
                </li>
            ";
            }
            // line 49
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 49, $this->source); })()), "getPageCount", [], "method", false, false, false, 49)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 50
                echo "                ";
                if (($context["page"] <= 10)) {
                    // line 51
                    echo "                <li class=\"page-item ";
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 51, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 51) == $context["page"])) {
                        echo "active";
                    }
                    echo "\">
                    <a class=\"page-link\" href=\"";
                    // line 52
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_index", ["page" => $context["page"]]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </li>
                ";
                }
                // line 55
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 56, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 56) != twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 56, $this->source); })()), "getPageCount", [], "method", false, false, false, 56))) {
                // line 57
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_index", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 58, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 58) + 1)]), "html", null, true);
                echo "\">Suivant</a>
                </li>
            ";
            }
            // line 61
            echo "        </ul>
    </nav>
";
        }
        // line 64
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_new");
        echo "\">Create new</a>

    <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_index", ["sortBy" => "adresseLivraison"]);
        echo "\" class=\"btn btn-sm btn-primary\">Trier </a>
    
    <form action=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_index");
        echo "\" method=\"GET\">
        <label for=\"search\">Recherche par adresse de livraison :</label>
        <input type=\"text\" id=\"search\" name=\"q\" placeholder=\"Adresse de livraison...\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "request", [], "any", false, false, false, 73), "query", [], "any", false, false, false, 73), "get", [0 => "q"], "method", false, false, false, 73), "html", null, true);
        echo "\">
        <button type=\"submit\">Rechercher</button>
    </form>

    
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "livraison/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 73,  225 => 71,  220 => 69,  215 => 67,  210 => 64,  205 => 61,  199 => 58,  196 => 57,  193 => 56,  187 => 55,  179 => 52,  172 => 51,  169 => 50,  164 => 49,  158 => 46,  155 => 45,  153 => 44,  148 => 41,  145 => 40,  136 => 36,  127 => 32,  123 => 31,  116 => 29,  112 => 28,  108 => 27,  104 => 26,  100 => 25,  96 => 24,  93 => 23,  88 => 22,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block body %}
<h1>Liste des livraisons</h1>
   

   

    <table class=\"table\">
        <thead>
            <tr>
                <th>IdLivraison</th>
                <th>DateLivraison</th>
                <th>PrixLivraison</th>
                <th>AdresseLivraison</th>
                <th>EtatLivraison</th>
                <th>Livreur</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for livraison in pagination %}
            <tr>
                <td>{{ livraison.idLivraison }}</td>
                <td>{{ livraison.dateLivraison ? livraison.dateLivraison|date('Y-m-d') : '' }}</td>
                <td>{{ livraison.prixLivraison }}</td>
                <td>{{ livraison.adresseLivraison }}</td>
                <td>{{ livraison.etatLivraison }}</td>
                <td>{{ livraison.fkIdLivreur.nom }} {{ livraison.fkIdLivreur.prenom }}</td>
                <td>
                    <a href=\"{{ path('app_livraison_show', {'idLivraison': livraison.idLivraison}) }}\">show</a>
                    <a href=\"{{ path('app_livraison_edit', {'idLivraison': livraison.idLivraison}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        {% endfor %}
       {% if pagination.getPageCount() > 1 %}
    <nav aria-label=\"...\">
        <ul class=\"pagination\">
        
            {% if pagination.getCurrentPageNumber() != 1 %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path('app_livraison_index', {'page': pagination.getCurrentPageNumber() - 1}) }}\">Précédent</a>
                </li>
            {% endif %}
            {% for page in 1..pagination.getPageCount() %}
                {% if page <= 10 %}
                <li class=\"page-item {% if pagination.getCurrentPageNumber() == page %}active{% endif %}\">
                    <a class=\"page-link\" href=\"{{ path('app_livraison_index', {'page': page}) }}\">{{ page }}</a>
                </li>
                {% endif %}
            {% endfor %}
            {% if pagination.getCurrentPageNumber() != pagination.getPageCount() %}
                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"{{ path('app_livraison_index', {'page': pagination.getCurrentPageNumber() + 1}) }}\">Suivant</a>
                </li>
            {% endif %}
        </ul>
    </nav>
{% endif %}
        </tbody>
    </table>

    <a href=\"{{ path('app_livraison_new') }}\">Create new</a>

    <a href=\"{{ path('app_livraison_index', {'sortBy': 'adresseLivraison'}) }}\" class=\"btn btn-sm btn-primary\">Trier </a>
    
    <form action=\"{{ path('app_livraison_index') }}\" method=\"GET\">
        <label for=\"search\">Recherche par adresse de livraison :</label>
        <input type=\"text\" id=\"search\" name=\"q\" placeholder=\"Adresse de livraison...\" value=\"{{ app.request.query.get('q') }}\">
        <button type=\"submit\">Rechercher</button>
    </form>

    
    
{% endblock %}
", "livraison/index.html.twig", "C:\\Users\\hp\\OneDrive\\Bureau\\final-master\\templates\\livraison\\index.html.twig");
    }
}
