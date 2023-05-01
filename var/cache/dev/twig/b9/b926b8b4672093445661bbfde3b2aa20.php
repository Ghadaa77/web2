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

/* pdf/index.html.twig */
class __TwigTemplate_24d57bb92acdc46a59b1b3ca87280837 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/index.html.twig"));

        // line 1
        echo "<table >
        <thead>
            <tr>
                <th>IdLivraison</th>
                <th>DateLivraison</th>
                <th>PrixLivraison</th>
                <th>AdresseLivraison</th>
                <th>EtatLivraison</th>
                <th>Livreur</th>
                
            </tr>
        </thead>
        <tbody>
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new RuntimeError('Variable "livraison" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["liv"]) {
            // line 15
            echo "            <tr>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["liv"], "idLivraison", [], "any", false, false, false, 16), "html", null, true);
            echo "</td>
                <td>";
            // line 17
            ((twig_get_attribute($this->env, $this->source, $context["liv"], "dateLivraison", [], "any", false, false, false, 17)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["liv"], "dateLivraison", [], "any", false, false, false, 17), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["liv"], "prixLivraison", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["liv"], "adresseLivraison", [], "any", false, false, false, 19), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["liv"], "etatLivraison", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["liv"], "fkIdLivreur", [], "any", false, false, false, 21), "nom", [], "any", false, false, false, 21), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["liv"], "fkIdLivreur", [], "any", false, false, false, 21), "prenom", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['liv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
    </table>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "pdf/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 25,  85 => 21,  81 => 20,  77 => 19,  73 => 18,  69 => 17,  65 => 16,  62 => 15,  58 => 14,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table >
        <thead>
            <tr>
                <th>IdLivraison</th>
                <th>DateLivraison</th>
                <th>PrixLivraison</th>
                <th>AdresseLivraison</th>
                <th>EtatLivraison</th>
                <th>Livreur</th>
                
            </tr>
        </thead>
        <tbody>
        {% for liv in livraison %}
            <tr>
                <td>{{ liv.idLivraison }}</td>
                <td>{{ liv.dateLivraison ? liv.dateLivraison|date('Y-m-d') : '' }}</td>
                <td>{{ liv.prixLivraison }}</td>
                <td>{{ liv.adresseLivraison }}</td>
                <td>{{ liv.etatLivraison }}</td>
                <td>{{ liv.fkIdLivreur.nom }} {{ liv.fkIdLivreur.prenom }}</td>
                
            </tr>
        {% endfor %}
        </tbody>
    </table>", "pdf/index.html.twig", "C:\\Users\\hp\\OneDrive\\Bureau\\final-master\\templates\\pdf\\index.html.twig");
    }
}
