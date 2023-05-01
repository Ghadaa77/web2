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
class __TwigTemplate_d17868fa10c5040d97ec6939c4b8bcf5 extends Template
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
    <!-- code du bouton de traduction -->
        <div id=\"google_translate_element\"></div>
        <script type=\"text/javascript\">
          function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'fr'}, 'google_translate_element');
          }
        </script>
        <script type=\"text/javascript\" src=\"//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\"></script>
        <!-- fin du code du bouton de traduction -->

   

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
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["livraison"]) {
            // line 31
            echo "            <tr>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livraison"], "idLivraison", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            ((twig_get_attribute($this->env, $this->source, $context["livraison"], "dateLivraison", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livraison"], "dateLivraison", [], "any", false, false, false, 33), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livraison"], "prixLivraison", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livraison"], "adresseLivraison", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["livraison"], "etatLivraison", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["livraison"], "fkIdLivreur", [], "any", false, false, false, 37), "nom", [], "any", false, false, false, 37), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["livraison"], "fkIdLivreur", [], "any", false, false, false, 37), "prenom", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_show", ["idLivraison" => twig_get_attribute($this->env, $this->source, $context["livraison"], "idLivraison", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_edit", ["idLivraison" => twig_get_attribute($this->env, $this->source, $context["livraison"], "idLivraison", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "            <tr>
                <td colspan=\"5\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livraison'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "       ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 48, $this->source); })()), "getPageCount", [], "method", false, false, false, 48) > 1)) {
            // line 49
            echo "    <nav aria-label=\"...\">
        <ul class=\"pagination\">
        
            ";
            // line 52
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 52, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 52) != 1)) {
                // line 53
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_index", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 54, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 54) - 1)]), "html", null, true);
                echo "\">Précédent</a>
                </li>
            ";
            }
            // line 57
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 57, $this->source); })()), "getPageCount", [], "method", false, false, false, 57)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 58
                echo "                ";
                if (($context["page"] <= 10)) {
                    // line 59
                    echo "                <li class=\"page-item ";
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 59, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 59) == $context["page"])) {
                        echo "active";
                    }
                    echo "\">
                    <a class=\"page-link\" href=\"";
                    // line 60
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_index", ["page" => $context["page"]]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                </li>
                ";
                }
                // line 63
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 64, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 64) != twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 64, $this->source); })()), "getPageCount", [], "method", false, false, false, 64))) {
                // line 65
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_index", ["page" => (twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 66, $this->source); })()), "getCurrentPageNumber", [], "method", false, false, false, 66) + 1)]), "html", null, true);
                echo "\">Suivant</a>
                </li>
            ";
            }
            // line 69
            echo "        </ul>
    </nav>
";
        }
        // line 72
        echo "        </tbody>
    </table>

    <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_new");
        echo "\">Create new</a>


    <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_index", ["sortBy" => "adresseLivraison"]);
        echo "\" class=\"btn btn-sm btn-primary\">Trier </a>


    <a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("generator_service");
        echo "\"><button type=\"button\" class=\"btn btn-primary mb-3\">PDF</button></a>

    
    
    <form action=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_index");
        echo "\" method=\"GET\">
    <label for=\"searchAdresse\">Recherche par :</label>
    <input type=\"text\" id=\"searchAdresse\" name=\"adresseLivraison\" placeholder=\"Adresse de livraison...\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "request", [], "any", false, false, false, 89), "query", [], "any", false, false, false, 89), "get", [0 => "adresseLivraison"], "method", false, false, false, 89), "html", null, true);
        echo "\">
    <label for=\"selectEtat\">Etat :</label>
    <select id=\"selectEtat\" name=\"etatLivraison\">
        <option value=\"\">-- Choisir un état --</option>
        <option value=\"annulle\" ";
        // line 93
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "request", [], "any", false, false, false, 93), "query", [], "any", false, false, false, 93), "get", [0 => "etatLivraison"], "method", false, false, false, 93) == "annulle")) {
            echo "selected";
        }
        echo ">annulle</option>
        <option value=\"en cours\" ";
        // line 94
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "request", [], "any", false, false, false, 94), "query", [], "any", false, false, false, 94), "get", [0 => "etatLivraison"], "method", false, false, false, 94) == "en cours")) {
            echo "selected";
        }
        echo ">en cours</option>
        <option value=\"livree\" ";
        // line 95
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "request", [], "any", false, false, false, 95), "query", [], "any", false, false, false, 95), "get", [0 => "etatLivraison"], "method", false, false, false, 95) == "livree")) {
            echo "selected";
        }
        echo ">livree</option>
    </select>
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
        return array (  271 => 95,  265 => 94,  259 => 93,  252 => 89,  247 => 87,  240 => 83,  234 => 80,  229 => 78,  223 => 75,  218 => 72,  213 => 69,  207 => 66,  204 => 65,  201 => 64,  195 => 63,  187 => 60,  180 => 59,  177 => 58,  172 => 57,  166 => 54,  163 => 53,  161 => 52,  156 => 49,  153 => 48,  144 => 44,  135 => 40,  131 => 39,  124 => 37,  120 => 36,  116 => 35,  112 => 34,  108 => 33,  104 => 32,  101 => 31,  96 => 30,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseBack.html.twig' %}

{% block body %}
<h1>Liste des livraisons</h1>
    <!-- code du bouton de traduction -->
        <div id=\"google_translate_element\"></div>
        <script type=\"text/javascript\">
          function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'fr'}, 'google_translate_element');
          }
        </script>
        <script type=\"text/javascript\" src=\"//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit\"></script>
        <!-- fin du code du bouton de traduction -->

   

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


    <a href=\"{{ path('app_livraison_index') }}\">back to list</a>

    <a href=\"{{ path('app_livraison_index', {'sortBy': 'adresseLivraison'}) }}\" class=\"btn btn-sm btn-primary\">Trier </a>


    <a href=\"{{ path('generator_service') }}\"><button type=\"button\" class=\"btn btn-primary mb-3\">PDF</button></a>

    
    
    <form action=\"{{ path('app_livraison_index') }}\" method=\"GET\">
    <label for=\"searchAdresse\">Recherche par :</label>
    <input type=\"text\" id=\"searchAdresse\" name=\"adresseLivraison\" placeholder=\"Adresse de livraison...\" value=\"{{ app.request.query.get('adresseLivraison') }}\">
    <label for=\"selectEtat\">Etat :</label>
    <select id=\"selectEtat\" name=\"etatLivraison\">
        <option value=\"\">-- Choisir un état --</option>
        <option value=\"annulle\" {% if app.request.query.get('etatLivraison') == 'annulle' %}selected{% endif %}>annulle</option>
        <option value=\"en cours\" {% if app.request.query.get('etatLivraison') == 'en cours' %}selected{% endif %}>en cours</option>
        <option value=\"livree\" {% if app.request.query.get('etatLivraison') == 'livree' %}selected{% endif %}>livree</option>
    </select>
    <button type=\"submit\">Rechercher</button>
</form>

    
    
{% endblock %}
", "livraison/index.html.twig", "C:\\Users\\hp\\OneDrive\\Bureau\\final-master\\templates\\livraison\\index.html.twig");
    }
}
