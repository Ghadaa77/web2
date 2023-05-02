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
class __TwigTemplate_2cf989a1c29020707f84d094e32bb023 extends Template
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
            'css' => [$this, 'block_css'],
            'js' => [$this, 'block_js'],
            'style' => [$this, 'block_style'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/img/favicon.png"), "html", null, true);
        echo "\" rel=\"icon\">
  <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/img/apple-touch-icon.png"), "html", null, true);
        echo "\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
 ";
        // line 18
        $this->displayBlock('css', $context, $blocks);
        // line 32
        echo "

";
        // line 34
        $this->displayBlock('js', $context, $blocks);
        // line 47
        $this->displayBlock('style', $context, $blocks);
        // line 48
        echo " 
</head>

<body>

";
        // line 53
        $this->displayBlock('header', $context, $blocks);
        // line 92
        echo "

<div class=\"container\">
";
        // line 95
        $this->displayBlock('body', $context, $blocks);
        // line 97
        echo "
</div>

";
        // line 100
        $this->displayBlock('footer', $context, $blocks);
        // line 167
        echo " 


</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Pidev swap ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 18
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 19
        echo "  <!-- Vendor CSS Files -->
  <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("public/front-office/css/formstyle.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 34
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 35
        echo "<!-- Vendor JS Files -->
  <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor/waypoints/noframework.waypoints.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

  <!-- Template Main JS File -->
  <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/main.js"), "html", null, true);
        echo "\"></script>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 47
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 53
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 54
        echo "

  
    <!-- ======= Header ======= -->
    <header id=\"header\" class=\"d-flex align-items-center\">
      <div class=\"container d-flex align-items-center justify-content-between\">
  
        <h1 class=\"logo\"><a href=\"index.html\">SWA<span>P</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=\"index.html\" class=\"logo\"><img src=\"assets/img/logo.png\" alt=\"\"></a>-->
  
        <nav id=\"navbar\" class=\"navbar\">
          <ul>
        
              <li><a class=\"nav-link scrollto\" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointderelais_new");
        echo "\">Acceuil</a></li>
            <li><a class=\"nav-link scrollto\" href=\"#about\">A propos</a></li>
            <li><a class=\"nav-link scrollto\" href=\"\">Produits</a></li>

            <li class=\"dropdown\"><a href=\"#\"><span>Service</span> <i class=\"bi bi-chevron-down\"></i></a>
              <ul>
                <li><a href=\"#\">Echange</a></li>
                <li><a href=\"\">Produit</a></li>
               
              </ul>
            </li>
            <li><a class=\"nav-link scrollto\" href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_pointderelais_front_new");
        echo "\">Livraison</a></li>
            <li><a class=\"nav-link scrollto\" href=\"\">Réclamation</a></li>


            <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
          </ul>
          <i class=\"bi bi-list mobile-nav-toggle\"></i>
        </nav><!-- .navbar -->
  
      </div>
    </header><!-- End Header -->
  
   ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 95
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 96
        echo "          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 100
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 101
        echo "  <!-- ======= Footer ======= -->
  <footer id=\"footer\">



    <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6 footer-contact\">
            <h3>SWAP</h3>
            <p>
              United Coders <br>
              Esprit Ingénieur <br>
              Ariana, Tunisie <br><br>
              <strong>Téléphone:</strong> +216 55666495<br>
              <strong>Email:</strong> shop@swap.com<br>
            </p>
          </div>

          <div class=\"col-lg-3 col-md-6 footer-links\">
            <h4>Consulter</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("index.html"), "html", null, true);
        echo "\">Acceuil</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">A propos</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"\">Produits </a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Services </a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Echange</a></li>
            </ul>
          </div>

          <div class=\"col-lg-3 col-md-6 footer-links\">
            <h4>Consulter</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"\">Produits</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Réclamation</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Livraison</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Compte</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Contact</a></li>
            </ul>
          </div>

          <div class=\"col-lg-3 col-md-6 footer-links\">
            <h4>Réseaux Sociaux</h4>
            <p>Pour plus d'informations contactez nous à nos pages sur les réseaux sociaux :</p>
            <div class=\"social-links mt-3\">
              <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
              <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
              <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
              <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
              <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class=\"container footer-bottom clearfix\">
      <div class=\"copyright\">
        &copy; Copyright <strong><span>SWAP</span></strong>. With LOVE 
      </div>
      
    </div>
  </footer><!-- End Footer -->
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

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
        return array (  396 => 124,  371 => 101,  361 => 100,  351 => 96,  341 => 95,  318 => 79,  304 => 68,  288 => 54,  278 => 53,  259 => 47,  247 => 45,  241 => 42,  237 => 41,  233 => 40,  229 => 39,  225 => 38,  221 => 37,  217 => 36,  214 => 35,  204 => 34,  192 => 30,  188 => 29,  182 => 26,  178 => 25,  174 => 24,  170 => 23,  166 => 22,  162 => 21,  158 => 20,  155 => 19,  145 => 18,  126 => 8,  111 => 167,  109 => 100,  104 => 97,  102 => 95,  97 => 92,  95 => 53,  88 => 48,  86 => 47,  84 => 34,  80 => 32,  78 => 18,  71 => 14,  67 => 13,  59 => 8,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

  <title>{% block title %} Pidev swap {% endblock %}</title>
  <meta content=\"\" name=\"description\">
  <meta content=\"\" name=\"keywords\">

  <!-- Favicons -->
  <link href=\"{{asset('front-office/img/favicon.png')}}\" rel=\"icon\">
  <link href=\"{{asset('front-office/img/apple-touch-icon.png')}}\" rel=\"apple-touch-icon\">

  <!-- Google Fonts -->
  <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">
 {% block css%}
  <!-- Vendor CSS Files -->
  <link href=\"{{asset('front-office/vendor/aos/aos.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('front-office/vendor/bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('front-office/vendor/bootstrap-icons/bootstrap-icons.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('front-office/vendor/boxicons/css/boxicons.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('front-office/vendor/glightbox/css/glightbox.min.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('front-office/vendor/remixicon/remixicon.css')}}\" rel=\"stylesheet\">
  <link href=\"{{asset('front-office/vendor/swiper/swiper-bundle.min.css')}}\" rel=\"stylesheet\">

  <!-- Template Main CSS File -->
  <link href=\"{{asset('front-office/css/style.css')}}\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('public/front-office/css/formstyle.css')}}\">
{% endblock %}


{% block js %}
<!-- Vendor JS Files -->
  <script src=\"{{asset('front-office/vendor/aos/aos.js')}}\"></script>
  <script src=\"{{asset('front-office/vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
  <script src=\"{{asset('front-office/vendor/glightbox/js/glightbox.min.js')}}\"></script>
  <script src=\"{{asset('front-office/vendor/isotope-layout/isotope.pkgd.min.js')}}\"></script>
  <script src=\"{{asset('front-office/vendor/swiper/swiper-bundle.min.js')}}\"></script>
  <script src=\"{{asset('front-office/vendor/waypoints/noframework.waypoints.js')}}\"></script>
  <script src=\"{{asset('front-office/vendor/php-email-form/validate.js')}}\"></script>

  <!-- Template Main JS File -->
  <script src=\"{{asset('front-office/js/main.js')}}\"></script>
  {% endblock %}
{%block style%} {%endblock%}
 
</head>

<body>

{% block header %}


  
    <!-- ======= Header ======= -->
    <header id=\"header\" class=\"d-flex align-items-center\">
      <div class=\"container d-flex align-items-center justify-content-between\">
  
        <h1 class=\"logo\"><a href=\"index.html\">SWA<span>P</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=\"index.html\" class=\"logo\"><img src=\"assets/img/logo.png\" alt=\"\"></a>-->
  
        <nav id=\"navbar\" class=\"navbar\">
          <ul>
        
              <li><a class=\"nav-link scrollto\" href=\"{{path('app_pointderelais_new')}}\">Acceuil</a></li>
            <li><a class=\"nav-link scrollto\" href=\"#about\">A propos</a></li>
            <li><a class=\"nav-link scrollto\" href=\"\">Produits</a></li>

            <li class=\"dropdown\"><a href=\"#\"><span>Service</span> <i class=\"bi bi-chevron-down\"></i></a>
              <ul>
                <li><a href=\"#\">Echange</a></li>
                <li><a href=\"\">Produit</a></li>
               
              </ul>
            </li>
            <li><a class=\"nav-link scrollto\" href=\"{{path('app_pointderelais_front_new')}}\">Livraison</a></li>
            <li><a class=\"nav-link scrollto\" href=\"\">Réclamation</a></li>


            <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
          </ul>
          <i class=\"bi bi-list mobile-nav-toggle\"></i>
        </nav><!-- .navbar -->
  
      </div>
    </header><!-- End Header -->
  
   {% endblock %}


<div class=\"container\">
{% block body %}
          {% endblock %}

</div>

{% block footer %}
  <!-- ======= Footer ======= -->
  <footer id=\"footer\">



    <div class=\"footer-top\">
      <div class=\"container\">
        <div class=\"row\">

          <div class=\"col-lg-3 col-md-6 footer-contact\">
            <h3>SWAP</h3>
            <p>
              United Coders <br>
              Esprit Ingénieur <br>
              Ariana, Tunisie <br><br>
              <strong>Téléphone:</strong> +216 55666495<br>
              <strong>Email:</strong> shop@swap.com<br>
            </p>
          </div>

          <div class=\"col-lg-3 col-md-6 footer-links\">
            <h4>Consulter</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"{{asset('index.html')}}\">Acceuil</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">A propos</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"\">Produits </a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Services </a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Echange</a></li>
            </ul>
          </div>

          <div class=\"col-lg-3 col-md-6 footer-links\">
            <h4>Consulter</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"\">Produits</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Réclamation</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Livraison</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Compte</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Contact</a></li>
            </ul>
          </div>

          <div class=\"col-lg-3 col-md-6 footer-links\">
            <h4>Réseaux Sociaux</h4>
            <p>Pour plus d'informations contactez nous à nos pages sur les réseaux sociaux :</p>
            <div class=\"social-links mt-3\">
              <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
              <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
              <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
              <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
              <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class=\"container footer-bottom clearfix\">
      <div class=\"copyright\">
        &copy; Copyright <strong><span>SWAP</span></strong>. With LOVE 
      </div>
      
    </div>
  </footer><!-- End Footer -->
  {% endblock %}
 


</body>

</html>", "base.html.twig", "C:\\Users\\hp\\OneDrive\\Bureau\\livraison-master\\templates\\base.html.twig");
    }
}
