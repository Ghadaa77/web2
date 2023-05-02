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

/* @KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig */
class __TwigTemplate_7827689e42180acdb03c96df9d53421e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig"));

        // line 1
        if (((isset($context["pageCount"]) || array_key_exists("pageCount", $context) ? $context["pageCount"] : (function () { throw new RuntimeError('Variable "pageCount" does not exist.', 1, $this->source); })()) > 1)) {
            // line 2
            echo "    <nav>
        <ul class=\"pagination\">
            ";
            // line 4
            if ((array_key_exists("first", $context) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 4, $this->source); })()) != (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 4, $this->source); })())))) {
                // line 5
                echo "                <li class=\"page-item\">
                    <a href=\"";
                // line 6
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 6, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 6, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 6, $this->source); })()) => (isset($context["first"]) || array_key_exists("first", $context) ? $context["first"] : (function () { throw new RuntimeError('Variable "first" does not exist.', 6, $this->source); })())])), "html", null, true);
                echo "\" class=\"page-link\" aria-label=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("First", [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 6, $this->source); })())), "html", null, true);
                echo "\">
                        <span aria-hidden=\"true\">&laquo;</span>
                        <span class=\"sr-only\">";
                // line 8
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("First", [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 8, $this->source); })())), "html", null, true);
                echo "</span>
                    </a>
                </li>
            ";
            }
            // line 12
            echo "
            ";
            // line 13
            if (array_key_exists("previous", $context)) {
                // line 14
                echo "                <li class=\"page-item\">
                    <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 15, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 15, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 15, $this->source); })()) => (isset($context["previous"]) || array_key_exists("previous", $context) ? $context["previous"] : (function () { throw new RuntimeError('Variable "previous" does not exist.', 15, $this->source); })())])), "html", null, true);
                echo "\" class=\"page-link\" aria-label=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Previous", [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 15, $this->source); })())), "html", null, true);
                echo "\">
                        <span aria-hidden=\"true\">&lsaquo;</span>
                        <span class=\"sr-only\">";
                // line 17
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Previous", [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 17, $this->source); })())), "html", null, true);
                echo "</span>
                    </a>
                </li>
            ";
            }
            // line 21
            echo "
            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) || array_key_exists("pagesInRange", $context) ? $context["pagesInRange"] : (function () { throw new RuntimeError('Variable "pagesInRange" does not exist.', 22, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 23
                echo "                ";
                if (($context["page"] == (isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 23, $this->source); })()))) {
                    // line 24
                    echo "                    <li class=\"page-item active\"><span class=\"page-link\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span></li>
                ";
                } else {
                    // line 26
                    echo "                    <li class=\"page-item\"><a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 26, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 26, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 26, $this->source); })()) => $context["page"]])), "html", null, true);
                    echo "\" class=\"page-link\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
                ";
                }
                // line 28
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "
            ";
            // line 30
            if (array_key_exists("next", $context)) {
                // line 31
                echo "                <li class=\"page-item\">
                    <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 32, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 32, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 32, $this->source); })()) => (isset($context["next"]) || array_key_exists("next", $context) ? $context["next"] : (function () { throw new RuntimeError('Variable "next" does not exist.', 32, $this->source); })())])), "html", null, true);
                echo "\" class=\"page-link\" aria-label=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next", [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 32, $this->source); })())), "html", null, true);
                echo "\">
                        <span aria-hidden=\"true\">&rsaquo;</span>
                        <span class=\"sr-only\">";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Next", [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 34, $this->source); })())), "html", null, true);
                echo "</span>
                    </a>
                </li>
            ";
            }
            // line 38
            echo "
            ";
            // line 39
            if ((array_key_exists("last", $context) && ((isset($context["current"]) || array_key_exists("current", $context) ? $context["current"] : (function () { throw new RuntimeError('Variable "current" does not exist.', 39, $this->source); })()) != (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 39, $this->source); })())))) {
                // line 40
                echo "                <li class=\"page-item\">
                    <a href=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 41, $this->source); })()), twig_array_merge((isset($context["query"]) || array_key_exists("query", $context) ? $context["query"] : (function () { throw new RuntimeError('Variable "query" does not exist.', 41, $this->source); })()), [(isset($context["pageParameterName"]) || array_key_exists("pageParameterName", $context) ? $context["pageParameterName"] : (function () { throw new RuntimeError('Variable "pageParameterName" does not exist.', 41, $this->source); })()) => (isset($context["last"]) || array_key_exists("last", $context) ? $context["last"] : (function () { throw new RuntimeError('Variable "last" does not exist.', 41, $this->source); })())])), "html", null, true);
                echo "\" class=\"page-link\" aria-label=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last", [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 41, $this->source); })())), "html", null, true);
                echo "\">
                        <span aria-hidden=\"true\">&raquo;</span>
                        <span class=\"sr-only\">";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Last", [], (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 43, $this->source); })())), "html", null, true);
                echo "</span>
                    </a>
                </li>
            ";
            }
            // line 47
            echo "        </ul>
    </nav>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 47,  157 => 43,  150 => 41,  147 => 40,  145 => 39,  142 => 38,  135 => 34,  128 => 32,  125 => 31,  123 => 30,  120 => 29,  114 => 28,  106 => 26,  100 => 24,  97 => 23,  93 => 22,  90 => 21,  83 => 17,  76 => 15,  73 => 14,  71 => 13,  68 => 12,  61 => 8,  54 => 6,  51 => 5,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if pageCount > 1 %}
    <nav>
        <ul class=\"pagination\">
            {% if first is defined and current != first %}
                <li class=\"page-item\">
                    <a href=\"{{ path(route, query|merge({(pageParameterName): first})) }}\" class=\"page-link\" aria-label=\"{{ 'First'|trans({}, translation_domain) }}\">
                        <span aria-hidden=\"true\">&laquo;</span>
                        <span class=\"sr-only\">{{ 'First'|trans({}, translation_domain) }}</span>
                    </a>
                </li>
            {% endif %}

            {% if previous is defined %}
                <li class=\"page-item\">
                    <a href=\"{{ path(route, query|merge({(pageParameterName): previous})) }}\" class=\"page-link\" aria-label=\"{{ 'Previous'|trans({}, translation_domain) }}\">
                        <span aria-hidden=\"true\">&lsaquo;</span>
                        <span class=\"sr-only\">{{ 'Previous'|trans({}, translation_domain) }}</span>
                    </a>
                </li>
            {% endif %}

            {% for page in pagesInRange %}
                {% if page == current %}
                    <li class=\"page-item active\"><span class=\"page-link\">{{ page }}</span></li>
                {% else %}
                    <li class=\"page-item\"><a href=\"{{ path(route, query|merge({(pageParameterName): page})) }}\" class=\"page-link\">{{ page }}</a></li>
                {% endif %}
            {% endfor %}

            {% if next is defined %}
                <li class=\"page-item\">
                    <a href=\"{{ path(route, query|merge({(pageParameterName): next})) }}\" class=\"page-link\" aria-label=\"{{ 'Next'|trans({}, translation_domain) }}\">
                        <span aria-hidden=\"true\">&rsaquo;</span>
                        <span class=\"sr-only\">{{ 'Next'|trans({}, translation_domain) }}</span>
                    </a>
                </li>
            {% endif %}

            {% if last is defined and current != last %}
                <li class=\"page-item\">
                    <a href=\"{{ path(route, query|merge({(pageParameterName): last})) }}\" class=\"page-link\" aria-label=\"{{ 'Last'|trans({}, translation_domain) }}\">
                        <span aria-hidden=\"true\">&raquo;</span>
                        <span class=\"sr-only\">{{ 'Last'|trans({}, translation_domain) }}</span>
                    </a>
                </li>
            {% endif %}
        </ul>
    </nav>
{% endif %}", "@KnpPaginator/Pagination/twitter_bootstrap_v4_pagination.html.twig", "C:\\Users\\hp\\OneDrive\\Bureau\\final-master\\templates\\bundles\\KnpPaginatorBundle\\Pagination\\twitter_bootstrap_v4_pagination.html.twig");
    }
}
