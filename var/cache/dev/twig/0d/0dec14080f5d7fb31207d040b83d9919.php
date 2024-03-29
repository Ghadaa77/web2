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

/* baseFront.html.twig */
class __TwigTemplate_bbd6087c6161654b49f2094935518b5c extends Template
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
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

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
        // line 31
        echo "

";
        // line 33
        $this->displayBlock('js', $context, $blocks);
        // line 46
        echo "
 
</head>

<body>

";
        // line 52
        $this->displayBlock('header', $context, $blocks);
        // line 97
        echo "<!-- End Hero -->
<!-- ======= Tabs Section ======= -->
    <section id=\"tabs\" class=\"tabs\">
      <div class=\"section-title\">
        <h2>A propos</h2>
      </div>
      <div class=\"container\" data-aos=\"fade-up\">
        
        <ul class=\"nav nav-tabs row d-flex\">
          <li class=\"nav-item col-3\">
            <a class=\"nav-link active show\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-1\">
              <i class=\"bi bi-houses-fill\"></i>
              <h4 class=\"d-none d-lg-block\">Livraison à domicille</h4>
            </a>
          </li>
          <li class=\"nav-item col-3\">
            <a class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-2\">
              <i class=\"bi bi-cart3\"></i>
              <h4 class=\"d-none d-lg-block\">Large sélection produits</h4>
            </a>
          </li>
          <li class=\"nav-item col-3\">
            <a class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-3\">
              <i class=\"bi bi-arrow-repeat\"></i>
              <h4 class=\"d-none d-lg-block\">Echange des produits</h4>
            </a>
          </li>
          <li class=\"nav-item col-3\">
            <a class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-4\">
              <i class=\"bi bi-brightness-high-fill\"></i>
              <h4 class=\"d-none d-lg-block\">Bonne qualité produits</h4>
            </a>
          </li>
        </ul>

        <div class=\"tab-content\">
          <div class=\"tab-pane active show\" id=\"tab-1\">
            <div class=\"row\">
              <div class=\"col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                <h3>SWAP une application troc qui met à ces clients une large sélection des produits et des services :</h3>
                <p class=\"fst-italic\">
                  En faite à travers notre application, tout utilisateur peut profiter de nos services tel que : 
                </p>
                <ul>
                  <li><i class=\"ri-check-double-line\"></i> Mettre un produit sur site pour le vendre en ajoutant tous ces informations nécessaire pour faciliter
                  la compréhension de l'utilité du produit.</li>
                  <li><i class=\"ri-check-double-line\"></i> Faire un échange avec un autre produit ou bien un autre service.</li>
                  <li><i class=\"ri-check-double-line\"></i> Nous sommes à vos disposition pour faire tous réclamations et nous avons ravis de vous répondre à tous 
                  vos questions.</li>
                </ul>
                <p>
                 N'hésitez pas de mettre vos produits en vente et partagez avec nous des choses que vous souhaite l'échanger.Nous assurons que vos produits sont 
                 livrer en un temps opportun.N'oubliez pas de créer un compte pour récu tous les nouveautés. 
                </p>
              </div>
              <div class=\"col-lg-6 order-1 order-lg-2 text-center\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <img src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/img/im.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                
              </div>
            </div>
          </div>
          <div class=\"tab-pane\" id=\"tab-2\">
            <div class=\"row\">
              <div class=\"col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0\">
                <h3>SWAP une application troc qui met à ces clients une large sélection des produits et des services :</h3>
                
                <p class=\"fst-italic\">
                  En faite à travers notre application, tout utilisateur peut profiter de nos services tel que : 
                </p>
            <ul>
                  <li><i class=\"ri-check-double-line\"></i> Mettre un produit sur site pour le vendre en ajoutant tous ces informations nécessaire pour faciliter
                  la compréhension de l'utilité du produit.</li>
                  <li><i class=\"ri-check-double-line\"></i> Faire un échange avec un autre produit ou bien un autre service.</li>
                  <li><i class=\"ri-check-double-line\"></i> Nous sommes à vos disposition pour faire tous réclamations et nous avons ravis de vous répondre à tous 
                  vos questions.</li>
                </ul>
                <p>
                 N'hésitez pas de mettre vos produits en vente et partagez avec nous des choses que vous souhaite l'échanger.Nous assurons que vos produits sont 
                 livrer en un temps opportun.N'oubliez pas de créer un compte pour récu tous les nouveautés. 
                </p>
              </div>
              <div class=\"col-lg-6 order-1 order-lg-2 text-center\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/img/im.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              </div>
            </div>
          </div>
          <div class=\"tab-pane\" id=\"tab-3\">
            <div class=\"row\">
              <div class=\"col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0\">
                <h3>SWAP une application troc qui met à ces clients une large sélection des produits et des services :</h3>
                <p>
                  En faite à travers notre application, tout utilisateur peut profiter de nos services tel que : 
                </p>
              <ul>
                  <li><i class=\"ri-check-double-line\"></i> Mettre un produit sur site pour le vendre en ajoutant tous ces informations nécessaire pour faciliter
                  la compréhension de l'utilité du produit.</li>
                  <li><i class=\"ri-check-double-line\"></i> Faire un échange avec un autre produit ou bien un autre service.</li>
                  <li><i class=\"ri-check-double-line\"></i> Nous sommes à vos disposition pour faire tous réclamations et nous avons ravis de vous répondre à tous 
                  vos questions.</li>
                </ul>
                <p>
                 N'hésitez pas de mettre vos produits en vente et partagez avec nous des choses que vous souhaite l'échanger.Nous assurons que vos produits sont 
                 livrer en un temps opportun.N'oubliez pas de créer un compte pour récu tous les nouveautés. 
                </p>
              </div>
              <div class=\"col-lg-6 order-1 order-lg-2 text-center\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/img/im.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              </div>
            </div>
          </div>
          <div class=\"tab-pane\" id=\"tab-4\">
            <div class=\"row\">
              <div class=\"col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0\">
                <h3>SWAP une application troc qui met à ces clients une large sélection des produits et des services :</h3>
               
                <p class=\"fst-italic\">
                 En faite à travers notre application, tout utilisateur peut profiter de nos services tel que : 
                </p>
              <ul>
                  <li><i class=\"ri-check-double-line\"></i> Mettre un produit sur site pour le vendre en ajoutant tous ces informations nécessaire pour faciliter
                  la compréhension de l'utilité du produit.</li>
                  <li><i class=\"ri-check-double-line\"></i> Faire un échange avec un autre produit ou bien un autre service.</li>
                  <li><i class=\"ri-check-double-line\"></i> Nous sommes à vos disposition pour faire tous réclamations et nous avons ravis de vous répondre à tous 
                  vos questions.</li>
                </ul>
                <p>
                 N'hésitez pas de mettre vos produits en vente et partagez avec nous des choses que vous souhaite l'échanger.Nous assurons que vos produits sont 
                 livrer en un temps opportun.N'oubliez pas de créer un compte pour récu tous les nouveautés. 
                </p>
              </div>
              <div class=\"col-lg-6 order-1 order-lg-2 text-center\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/img/im.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Tabs Section -->

  <main id=\"main\">

    

   
  


    

    <!-- ======= Services Section ======= -->
    <section id=\"services\" class=\"services section-bg\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"section-title\">
          <h2>Reclamations</h2>
          <p> </p>
          ";
        // line 254
        $this->displayBlock('body', $context, $blocks);
        // line 256
        echo "        </div>

        <div class=\"row\">
          <div class=\"col-xl-3 col-md-6 d-flex align-items-stretch\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
            
             
          </div>

          

          

         

      </div>
    </section><!-- End Services Section -->


      <section id=\"team\" class=\"team section-bg\">
  <div class=\"container\" data-aos=\"fade-up\">

    <div class=\"section-title\">
      <h2>Livraison</h2>
      <p>Choisissez votre option de livraison :</p>
    </div>

    <div class=\"row\">

      <div class=\"col-lg-6\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
        <div class=\"member d-flex align-items-start\">
          <div class=\"member-info\">
            <h4>Point de relais </h4>
            <span>24 heures</span>
            <p>Retirez votre commande dans l'un de nos points de relais.</p>
           <a href=\"#\" class=\"btn-get-started btn-outline\">Choisir cette option</a>

          </div>
        </div>
      </div>

      <div class=\"col-lg-6\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
        <div class=\"member d-flex align-items-start\">
          <div class=\"member-info\">
            <h4>Livraison standard</h4>
            <span>3-5 jours ouvrables</span>
            <p>Recevez votre commande en 3 à 5 jours ouvrables.</p>
          <a href=\"#\" class=\"btn-get-started btn-outline\">Choisir cette option</a>

          </div>
        </div>
      </div>

    </div>
  </div>
</section>

    

    


  </main><!-- End #main -->

";
        // line 319
        $this->displayBlock('footer', $context, $blocks);
        // line 386
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
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 33
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 34
        echo "<!-- Vendor JS Files -->
  <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor/waypoints/noframework.waypoints.js"), "html", null, true);
        echo "\"></script>
  <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>

  <!-- Template Main JS File -->
  <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front-office/js/main.js"), "html", null, true);
        echo "\"></script>
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 52
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 53
        echo " <!-- ======= Header ======= -->
    <header id=\"header\" class=\"d-flex align-items-center\">
      <div class=\"container d-flex align-items-center justify-content-between\">
  
        <h1 class=\"logo\"><a href=\"index.html\">SWA<span>P</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=\"index.html\" class=\"logo\"><img src=\"assets/img/logo.png\" alt=\"\"></a>-->
  
        <nav id=\"navbar\" class=\"navbar\">
          <ul>
            <li><a class=\"nav-link scrollto active\" href=\"#hero\">Acceuil</a></li>
            <li><a class=\"nav-link scrollto\" href=\"#about\">A propos</a></li>
            <li><a class=\"nav-link scrollto\" href=\"\">Produits</a></li>

            <li class=\"dropdown\"><a href=\"#\"><span>Service</span> <i class=\"bi bi-chevron-down\"></i></a>
              <ul>
                <li><a href=\"#\">Echange</a></li>
                <li><a href=\"#\">Produit</a></li>
               
              </ul>
            </li>
            <li><a class=\"nav-link scrollto\" href=\"\">Livraison</a></li>
            <li><a class=\"nav-link scrollto\" href=\"#services\">Réclamation</a></li>


            <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
          </ul>
          <a href=\"#about\" class=\"btn-get-started scrollto\">compte </a>
          <i class=\"bi bi-list mobile-nav-toggle\"></i>
        </nav><!-- .navbar -->
  
      </div>
    </header><!-- End Header -->

  
    <!-- ======= Hero Section ======= -->
    <section id=\"hero\" class=\"d-flex align-items-center\">
      <div class=\"container\" data-aos=\"zoom-out\" data-aos-delay=\"100\">
       <h1>Bienvenue la famille SWAP</h1><br>
    <h2>Vous trouvez tout les nouveautés chez nous .<br>Une application qui offres une large sélection<br>
       des produits avec un livraison à domicille en <br>un temps opportun .</h2>
    <a href=\"#about\" class=\"btn-get-started scrollto\">Voir plus </a>
        </div>
      </div>
    </section>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 254
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 255
        echo "          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 319
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 320
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
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Acceuil</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">A propos</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Produits </a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Services </a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Echange</a></li>
            </ul>
          </div>

          <div class=\"col-lg-3 col-md-6 footer-links\">
            <h4>Consulter</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Produits</a></li>
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
        return "baseFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  573 => 320,  563 => 319,  553 => 255,  543 => 254,  489 => 53,  479 => 52,  467 => 44,  461 => 41,  457 => 40,  453 => 39,  449 => 38,  445 => 37,  441 => 36,  437 => 35,  434 => 34,  424 => 33,  412 => 29,  406 => 26,  402 => 25,  398 => 24,  394 => 23,  390 => 22,  386 => 21,  382 => 20,  379 => 19,  369 => 18,  350 => 8,  335 => 386,  333 => 319,  268 => 256,  266 => 254,  237 => 228,  209 => 203,  182 => 179,  153 => 153,  95 => 97,  93 => 52,  85 => 46,  83 => 33,  79 => 31,  77 => 18,  70 => 14,  66 => 13,  58 => 8,  49 => 1,);
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
            <li><a class=\"nav-link scrollto active\" href=\"#hero\">Acceuil</a></li>
            <li><a class=\"nav-link scrollto\" href=\"#about\">A propos</a></li>
            <li><a class=\"nav-link scrollto\" href=\"\">Produits</a></li>

            <li class=\"dropdown\"><a href=\"#\"><span>Service</span> <i class=\"bi bi-chevron-down\"></i></a>
              <ul>
                <li><a href=\"#\">Echange</a></li>
                <li><a href=\"#\">Produit</a></li>
               
              </ul>
            </li>
            <li><a class=\"nav-link scrollto\" href=\"\">Livraison</a></li>
            <li><a class=\"nav-link scrollto\" href=\"#services\">Réclamation</a></li>


            <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
          </ul>
          <a href=\"#about\" class=\"btn-get-started scrollto\">compte </a>
          <i class=\"bi bi-list mobile-nav-toggle\"></i>
        </nav><!-- .navbar -->
  
      </div>
    </header><!-- End Header -->

  
    <!-- ======= Hero Section ======= -->
    <section id=\"hero\" class=\"d-flex align-items-center\">
      <div class=\"container\" data-aos=\"zoom-out\" data-aos-delay=\"100\">
       <h1>Bienvenue la famille SWAP</h1><br>
    <h2>Vous trouvez tout les nouveautés chez nous .<br>Une application qui offres une large sélection<br>
       des produits avec un livraison à domicille en <br>un temps opportun .</h2>
    <a href=\"#about\" class=\"btn-get-started scrollto\">Voir plus </a>
        </div>
      </div>
    </section>{% endblock %}<!-- End Hero -->
<!-- ======= Tabs Section ======= -->
    <section id=\"tabs\" class=\"tabs\">
      <div class=\"section-title\">
        <h2>A propos</h2>
      </div>
      <div class=\"container\" data-aos=\"fade-up\">
        
        <ul class=\"nav nav-tabs row d-flex\">
          <li class=\"nav-item col-3\">
            <a class=\"nav-link active show\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-1\">
              <i class=\"bi bi-houses-fill\"></i>
              <h4 class=\"d-none d-lg-block\">Livraison à domicille</h4>
            </a>
          </li>
          <li class=\"nav-item col-3\">
            <a class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-2\">
              <i class=\"bi bi-cart3\"></i>
              <h4 class=\"d-none d-lg-block\">Large sélection produits</h4>
            </a>
          </li>
          <li class=\"nav-item col-3\">
            <a class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-3\">
              <i class=\"bi bi-arrow-repeat\"></i>
              <h4 class=\"d-none d-lg-block\">Echange des produits</h4>
            </a>
          </li>
          <li class=\"nav-item col-3\">
            <a class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#tab-4\">
              <i class=\"bi bi-brightness-high-fill\"></i>
              <h4 class=\"d-none d-lg-block\">Bonne qualité produits</h4>
            </a>
          </li>
        </ul>

        <div class=\"tab-content\">
          <div class=\"tab-pane active show\" id=\"tab-1\">
            <div class=\"row\">
              <div class=\"col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                <h3>SWAP une application troc qui met à ces clients une large sélection des produits et des services :</h3>
                <p class=\"fst-italic\">
                  En faite à travers notre application, tout utilisateur peut profiter de nos services tel que : 
                </p>
                <ul>
                  <li><i class=\"ri-check-double-line\"></i> Mettre un produit sur site pour le vendre en ajoutant tous ces informations nécessaire pour faciliter
                  la compréhension de l'utilité du produit.</li>
                  <li><i class=\"ri-check-double-line\"></i> Faire un échange avec un autre produit ou bien un autre service.</li>
                  <li><i class=\"ri-check-double-line\"></i> Nous sommes à vos disposition pour faire tous réclamations et nous avons ravis de vous répondre à tous 
                  vos questions.</li>
                </ul>
                <p>
                 N'hésitez pas de mettre vos produits en vente et partagez avec nous des choses que vous souhaite l'échanger.Nous assurons que vos produits sont 
                 livrer en un temps opportun.N'oubliez pas de créer un compte pour récu tous les nouveautés. 
                </p>
              </div>
              <div class=\"col-lg-6 order-1 order-lg-2 text-center\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <img src=\"{{asset('front-office/img/im.jpg')}}\" class=\"img-fluid\" alt=\"\">
                
              </div>
            </div>
          </div>
          <div class=\"tab-pane\" id=\"tab-2\">
            <div class=\"row\">
              <div class=\"col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0\">
                <h3>SWAP une application troc qui met à ces clients une large sélection des produits et des services :</h3>
                
                <p class=\"fst-italic\">
                  En faite à travers notre application, tout utilisateur peut profiter de nos services tel que : 
                </p>
            <ul>
                  <li><i class=\"ri-check-double-line\"></i> Mettre un produit sur site pour le vendre en ajoutant tous ces informations nécessaire pour faciliter
                  la compréhension de l'utilité du produit.</li>
                  <li><i class=\"ri-check-double-line\"></i> Faire un échange avec un autre produit ou bien un autre service.</li>
                  <li><i class=\"ri-check-double-line\"></i> Nous sommes à vos disposition pour faire tous réclamations et nous avons ravis de vous répondre à tous 
                  vos questions.</li>
                </ul>
                <p>
                 N'hésitez pas de mettre vos produits en vente et partagez avec nous des choses que vous souhaite l'échanger.Nous assurons que vos produits sont 
                 livrer en un temps opportun.N'oubliez pas de créer un compte pour récu tous les nouveautés. 
                </p>
              </div>
              <div class=\"col-lg-6 order-1 order-lg-2 text-center\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <img src=\"{{asset('front-office/img/im.jpg')}}\" class=\"img-fluid\" alt=\"\">
              </div>
            </div>
          </div>
          <div class=\"tab-pane\" id=\"tab-3\">
            <div class=\"row\">
              <div class=\"col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0\">
                <h3>SWAP une application troc qui met à ces clients une large sélection des produits et des services :</h3>
                <p>
                  En faite à travers notre application, tout utilisateur peut profiter de nos services tel que : 
                </p>
              <ul>
                  <li><i class=\"ri-check-double-line\"></i> Mettre un produit sur site pour le vendre en ajoutant tous ces informations nécessaire pour faciliter
                  la compréhension de l'utilité du produit.</li>
                  <li><i class=\"ri-check-double-line\"></i> Faire un échange avec un autre produit ou bien un autre service.</li>
                  <li><i class=\"ri-check-double-line\"></i> Nous sommes à vos disposition pour faire tous réclamations et nous avons ravis de vous répondre à tous 
                  vos questions.</li>
                </ul>
                <p>
                 N'hésitez pas de mettre vos produits en vente et partagez avec nous des choses que vous souhaite l'échanger.Nous assurons que vos produits sont 
                 livrer en un temps opportun.N'oubliez pas de créer un compte pour récu tous les nouveautés. 
                </p>
              </div>
              <div class=\"col-lg-6 order-1 order-lg-2 text-center\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <img src=\"{{asset('front-office/img/im.jpg')}}\" class=\"img-fluid\" alt=\"\">
              </div>
            </div>
          </div>
          <div class=\"tab-pane\" id=\"tab-4\">
            <div class=\"row\">
              <div class=\"col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0\">
                <h3>SWAP une application troc qui met à ces clients une large sélection des produits et des services :</h3>
               
                <p class=\"fst-italic\">
                 En faite à travers notre application, tout utilisateur peut profiter de nos services tel que : 
                </p>
              <ul>
                  <li><i class=\"ri-check-double-line\"></i> Mettre un produit sur site pour le vendre en ajoutant tous ces informations nécessaire pour faciliter
                  la compréhension de l'utilité du produit.</li>
                  <li><i class=\"ri-check-double-line\"></i> Faire un échange avec un autre produit ou bien un autre service.</li>
                  <li><i class=\"ri-check-double-line\"></i> Nous sommes à vos disposition pour faire tous réclamations et nous avons ravis de vous répondre à tous 
                  vos questions.</li>
                </ul>
                <p>
                 N'hésitez pas de mettre vos produits en vente et partagez avec nous des choses que vous souhaite l'échanger.Nous assurons que vos produits sont 
                 livrer en un temps opportun.N'oubliez pas de créer un compte pour récu tous les nouveautés. 
                </p>
              </div>
              <div class=\"col-lg-6 order-1 order-lg-2 text-center\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <img src=\"{{asset('front-office/img/im.jpg')}}\" class=\"img-fluid\" alt=\"\">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Tabs Section -->

  <main id=\"main\">

    

   
  


    

    <!-- ======= Services Section ======= -->
    <section id=\"services\" class=\"services section-bg\">
      <div class=\"container\" data-aos=\"fade-up\">

        <div class=\"section-title\">
          <h2>Reclamations</h2>
          <p> </p>
          {% block body %}
          {% endblock %}
        </div>

        <div class=\"row\">
          <div class=\"col-xl-3 col-md-6 d-flex align-items-stretch\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
            
             
          </div>

          

          

         

      </div>
    </section><!-- End Services Section -->


      <section id=\"team\" class=\"team section-bg\">
  <div class=\"container\" data-aos=\"fade-up\">

    <div class=\"section-title\">
      <h2>Livraison</h2>
      <p>Choisissez votre option de livraison :</p>
    </div>

    <div class=\"row\">

      <div class=\"col-lg-6\" data-aos=\"zoom-in\" data-aos-delay=\"100\">
        <div class=\"member d-flex align-items-start\">
          <div class=\"member-info\">
            <h4>Point de relais </h4>
            <span>24 heures</span>
            <p>Retirez votre commande dans l'un de nos points de relais.</p>
           <a href=\"#\" class=\"btn-get-started btn-outline\">Choisir cette option</a>

          </div>
        </div>
      </div>

      <div class=\"col-lg-6\" data-aos=\"zoom-in\" data-aos-delay=\"200\">
        <div class=\"member d-flex align-items-start\">
          <div class=\"member-info\">
            <h4>Livraison standard</h4>
            <span>3-5 jours ouvrables</span>
            <p>Recevez votre commande en 3 à 5 jours ouvrables.</p>
          <a href=\"#\" class=\"btn-get-started btn-outline\">Choisir cette option</a>

          </div>
        </div>
      </div>

    </div>
  </div>
</section>

    

    


  </main><!-- End #main -->

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
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Acceuil</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">A propos</a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Produits </a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Services </a></li>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Echange</a></li>
            </ul>
          </div>

          <div class=\"col-lg-3 col-md-6 footer-links\">
            <h4>Consulter</h4>
            <ul>
              <li><i class=\"bx bx-chevron-right\"></i> <a href=\"#\">Produits</a></li>
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

</html>", "baseFront.html.twig", "C:\\Users\\hp\\OneDrive\\Bureau\\final-master\\templates\\baseFront.html.twig");
    }
}
