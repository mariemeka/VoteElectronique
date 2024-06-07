<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_57a68c640be26f8e2ab331e3cb38c32e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <title>Vote Electronique</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        yield "\" rel=\"icon\">
    <link href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        yield "\" rel=\"apple-touch-icon\">

    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap\"
        rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- Main CSS File -->
    <link href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
</head>

<body class=\"index-page\">

    <header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
        <div class=\"container-fluid container-xl position-relative d-flex align-items-center\">
            <a href=\"#\" class=\"logo d-flex align-items-center me-auto\">
                <img src=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        yield "\" alt=\"\">
                <h1 class=\"sitename\">Vote Electronique</h1>
            </a>
            <nav id=\"navmenu\" class=\"navmenu\">
                <ul>
                    <li><a href=\"#\" class=\"\">Acceuil</a></li>
                    <li><a href=\"#about\">A Propos</a></li>
                    <li><a href=\"#faq\">Fonctionnalités</a></li>
                    <li><a href=\"#contact\">Contact</a></li>
                </ul>
                <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
            </nav>
            <a class=\"btn-getstarted\" href=\"#features\">Se connecter</a>
        </div>
    </header>

    <main class=\"main\">
        
        <!-- Hero Section -->
        <section id=\"hero\" class=\"hero section\">
            <div class=\"hero-bg\">
                <img src=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/hero-bg-light.webp"), "html", null, true);
        yield "\" alt=\"\">
            </div>
            <div class=\"container text-center\">
                <div class=\"d-flex flex-column justify-content-center align-items-center\">
                    <h1 data-aos=\"fade-up\" class=\"\">Bienvenue sur
                        <span>Vote Électronique</span>
                    </h1>
                    <p data-aos=\"fade-up\" data-aos-delay=\"100\" class=\"\">Nous sommes ravis de vous accueillir pour voter en toute sécurité.<br></p>
                    <div class=\"d-flex\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                        <a href=\"#features\" class=\"btn-get-started\">se connecter</a>
                        <a href=\"https://www.youtube.com\" class=\"glightbox btn-watch-video d-flex align-items-center\"><i class=\"bi bi-play-circle\"></i><span>Guide pour voter</span></a>
                    </div> <br>
                    <img src=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/voteE.jpg"), "html", null, true);
        yield "\" class=\"img-fluid hero-img\" alt=\"\" data-aos=\"zoom-out\" data-aos-delay=\"300\">
                </div>
            </div>
        </section>
        <!-- /Hero Section -->

        <!-- About Section -->
        <section id=\"about\" class=\"about section\">
            <div class=\"container\">
                <div class=\"row gy-4\">
                    <div class=\"col-lg-6 content\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                        <p class=\"who-we-are\">QUI NOUS SOMMES</p>
                        <h3>Groupe JMM</h3>
                        <p class=\"fst-italic\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <ul>
                            <li><i class=\"bi bi-check-circle\"></i><span>Lorem ipsum Lorem ipsum Lorem ipsum</span></li>
                            <li><i class=\"bi bi-check-circle\"></i><span>Lorem ipsum Lorem ipsum Lorem ipsum.</span></li>
                            <li><i class=\"bi bi-check-circle\"></i><span>Lorem ipsum Lorem ipsum Lorem ipsum.</span></li>
                        </ul>
                        <a href=\"#\" class=\"read-more\"><span>Read More</span><i class=\"bi bi-arrow-right\"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Section -->

       

        <!-- Features Section -->
  
        <section id=\"features\" class=\"features section\">
            <div class=\"container section-title\" data-aos=\"fade-up\">
                <h2 class=\"\">Se Connecter</h2>
                <p>Veillez renseigner votre numero electeur et votre mot de passe afin d'acceder à la page de vote. </p>
            </div>

            <div class=\"container\">
                <div class=\"row gy-4\">
                    <div class=\"col-lg-6\">
                        <form action=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" method=\"POST\" class=\"php-email-form\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                            <div class=\"row gy-4\">
                                <div class=\"col-md-12\">
                                    <label for=\"idelecteur\">ID Electeur&nbsp;:</label>
                                    <input type=\"text\" id=\"idelecteur\" name=\"idelecteur\"  class=\"form-control\" required=\"\">
                               
    

                                </div>
                                <div class=\"col-md-12\">
                                    <label for=\"password\">Password&nbsp;:</label>
                                    <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" required>
                                </div>
                                <div class=\"col-md-12 text-center\">
                                    <button type=\"submit\">se connecter</button>
                                </div>
";
        // line 125
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 125, $this->source); })())) {
            // line 126
            yield "                                    <div class=\"col-md-12 text-center\">
                                        <p>";
            // line 127
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 127, $this->source); })()), "messageKey", [], "any", false, false, false, 127), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 127, $this->source); })()), "messageData", [], "any", false, false, false, 127), "security"), "html", null, true);
            yield "</p>
                                    </div>
                                ";
        }
        // line 130
        yield "                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
 
        <!-- /Features Section -->

        

       <br><br><br><br><br><br> <br><br><br><br><br><br>
        <!-- Faq Section -->
        <section id=\"faq\" class=\"faq section\">
            <div class=\"container section-title\" data-aos=\"fade-up\">
                <h2>Fonctionnalité</h2>
            </div>
            <div>
                <p>Le processus électoral français est bien établi, mais le vote électronique nécessite des garanties de sécurité et de confidentialité similaires à celles d’un bureau de vote traditionnel. Pour les élections législatives de 2022, les ressortissants français résidant à l’étranger ont utilisé le vote électronique à distance. Cependant, des vulnérabilités ont été identifiées dans le protocole existant.</p>
            </div>
        </section>
        <!-- /Faq Section -->

      

        <!-- Contact Section -->
        <section id=\"contact\" class=\"contact section\">
            <!-- Add contact form or details here if needed -->
        </section>
        <!-- /Contact Section -->
    </main>

    <footer id=\"footer\" class=\"footer position-relative\">
        <div class=\"container footer-top\">
            <div class=\"row gy-4\">
                <div class=\"col-lg-4 col-md-6 footer-about\">
                    <a href=\"#\" class=\"logo d-flex align-items-center\">
                        <span class=\"sitename\">Vote Electronique</span>
                    </a>
                    <div class=\"footer-contact pt-3\">
                        <p>33 rue St-Leu</p>
                        <p>Amiens, 80000</p>
                        <p class=\"mt-3\"><strong>Phone:</strong> <span>+33 00 00 00 00 00</span></p>
                        <p><strong>Email:</strong> <span>groupeJMM@example.com</span></p>
                    </div>
                    <div class=\"social-links d-flex mt-4\">
                        <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                        <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                        <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                        <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 footer-links\">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">About us</a></li>
                        <li><a href=\"#\">Features</a></li>
                        <li><a href=\"#\">Contact</a></li>
                    </ul>
                </div>
                <div class=\"col-lg-4 col-md-12 footer-newsletter\">
                    <h4>Our Newsletter</h4>
                    <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                    <form action=\"forms/newsletter.php\" method=\"post\" class=\"php-email-form\">
                        <div class=\"newsletter-form\">
                            <input type=\"email\" name=\"email\">
                            <input type=\"submit\" value=\"Subscribe\">
                        </div>
                        <div class=\"loading\">Loading</div>
                        <div class=\"error-message\"></div>
                        <div class=\"sent-message\">Your subscription request has been sent. Thank you!</div>
                    </form>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript Files -->
    <script src=\"";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 210
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/main.js"), "html", null, true);
        yield "\"></script>
</body>
</html>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  314 => 213,  310 => 212,  306 => 211,  302 => 210,  298 => 209,  217 => 130,  211 => 127,  208 => 126,  206 => 125,  187 => 109,  145 => 70,  130 => 58,  106 => 37,  95 => 29,  89 => 26,  85 => 25,  81 => 24,  77 => 23,  73 => 22,  61 => 13,  57 => 12,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <title>Vote Electronique</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"{{ asset('assets/img/favicon.png') }}\" rel=\"icon\">
    <link href=\"{{ asset('assets/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap\"
        rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/aos/aos.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">

    <!-- Main CSS File -->
    <link href=\"{{ asset('assets/css/main.css') }}\" rel=\"stylesheet\">
</head>

<body class=\"index-page\">

    <header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
        <div class=\"container-fluid container-xl position-relative d-flex align-items-center\">
            <a href=\"#\" class=\"logo d-flex align-items-center me-auto\">
                <img src=\"{{ asset('assets/img/logo.png') }}\" alt=\"\">
                <h1 class=\"sitename\">Vote Electronique</h1>
            </a>
            <nav id=\"navmenu\" class=\"navmenu\">
                <ul>
                    <li><a href=\"#\" class=\"\">Acceuil</a></li>
                    <li><a href=\"#about\">A Propos</a></li>
                    <li><a href=\"#faq\">Fonctionnalités</a></li>
                    <li><a href=\"#contact\">Contact</a></li>
                </ul>
                <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
            </nav>
            <a class=\"btn-getstarted\" href=\"#features\">Se connecter</a>
        </div>
    </header>

    <main class=\"main\">
        
        <!-- Hero Section -->
        <section id=\"hero\" class=\"hero section\">
            <div class=\"hero-bg\">
                <img src=\"{{ asset('assets/img/hero-bg-light.webp') }}\" alt=\"\">
            </div>
            <div class=\"container text-center\">
                <div class=\"d-flex flex-column justify-content-center align-items-center\">
                    <h1 data-aos=\"fade-up\" class=\"\">Bienvenue sur
                        <span>Vote Électronique</span>
                    </h1>
                    <p data-aos=\"fade-up\" data-aos-delay=\"100\" class=\"\">Nous sommes ravis de vous accueillir pour voter en toute sécurité.<br></p>
                    <div class=\"d-flex\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                        <a href=\"#features\" class=\"btn-get-started\">se connecter</a>
                        <a href=\"https://www.youtube.com\" class=\"glightbox btn-watch-video d-flex align-items-center\"><i class=\"bi bi-play-circle\"></i><span>Guide pour voter</span></a>
                    </div> <br>
                    <img src=\"{{ asset('assets/img/voteE.jpg') }}\" class=\"img-fluid hero-img\" alt=\"\" data-aos=\"zoom-out\" data-aos-delay=\"300\">
                </div>
            </div>
        </section>
        <!-- /Hero Section -->

        <!-- About Section -->
        <section id=\"about\" class=\"about section\">
            <div class=\"container\">
                <div class=\"row gy-4\">
                    <div class=\"col-lg-6 content\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                        <p class=\"who-we-are\">QUI NOUS SOMMES</p>
                        <h3>Groupe JMM</h3>
                        <p class=\"fst-italic\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <ul>
                            <li><i class=\"bi bi-check-circle\"></i><span>Lorem ipsum Lorem ipsum Lorem ipsum</span></li>
                            <li><i class=\"bi bi-check-circle\"></i><span>Lorem ipsum Lorem ipsum Lorem ipsum.</span></li>
                            <li><i class=\"bi bi-check-circle\"></i><span>Lorem ipsum Lorem ipsum Lorem ipsum.</span></li>
                        </ul>
                        <a href=\"#\" class=\"read-more\"><span>Read More</span><i class=\"bi bi-arrow-right\"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /About Section -->

       

        <!-- Features Section -->
  
        <section id=\"features\" class=\"features section\">
            <div class=\"container section-title\" data-aos=\"fade-up\">
                <h2 class=\"\">Se Connecter</h2>
                <p>Veillez renseigner votre numero electeur et votre mot de passe afin d'acceder à la page de vote. </p>
            </div>

            <div class=\"container\">
                <div class=\"row gy-4\">
                    <div class=\"col-lg-6\">
                        <form action=\"{{ path('home') }}\" method=\"POST\" class=\"php-email-form\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                            <div class=\"row gy-4\">
                                <div class=\"col-md-12\">
                                    <label for=\"idelecteur\">ID Electeur&nbsp;:</label>
                                    <input type=\"text\" id=\"idelecteur\" name=\"idelecteur\"  class=\"form-control\" required=\"\">
                               
    

                                </div>
                                <div class=\"col-md-12\">
                                    <label for=\"password\">Password&nbsp;:</label>
                                    <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" required>
                                </div>
                                <div class=\"col-md-12 text-center\">
                                    <button type=\"submit\">se connecter</button>
                                </div>
{% if error %}
                                    <div class=\"col-md-12 text-center\">
                                        <p>{{ error.messageKey|trans(error.messageData, 'security') }}</p>
                                    </div>
                                {% endif %}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
 
        <!-- /Features Section -->

        

       <br><br><br><br><br><br> <br><br><br><br><br><br>
        <!-- Faq Section -->
        <section id=\"faq\" class=\"faq section\">
            <div class=\"container section-title\" data-aos=\"fade-up\">
                <h2>Fonctionnalité</h2>
            </div>
            <div>
                <p>Le processus électoral français est bien établi, mais le vote électronique nécessite des garanties de sécurité et de confidentialité similaires à celles d’un bureau de vote traditionnel. Pour les élections législatives de 2022, les ressortissants français résidant à l’étranger ont utilisé le vote électronique à distance. Cependant, des vulnérabilités ont été identifiées dans le protocole existant.</p>
            </div>
        </section>
        <!-- /Faq Section -->

      

        <!-- Contact Section -->
        <section id=\"contact\" class=\"contact section\">
            <!-- Add contact form or details here if needed -->
        </section>
        <!-- /Contact Section -->
    </main>

    <footer id=\"footer\" class=\"footer position-relative\">
        <div class=\"container footer-top\">
            <div class=\"row gy-4\">
                <div class=\"col-lg-4 col-md-6 footer-about\">
                    <a href=\"#\" class=\"logo d-flex align-items-center\">
                        <span class=\"sitename\">Vote Electronique</span>
                    </a>
                    <div class=\"footer-contact pt-3\">
                        <p>33 rue St-Leu</p>
                        <p>Amiens, 80000</p>
                        <p class=\"mt-3\"><strong>Phone:</strong> <span>+33 00 00 00 00 00</span></p>
                        <p><strong>Email:</strong> <span>groupeJMM@example.com</span></p>
                    </div>
                    <div class=\"social-links d-flex mt-4\">
                        <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                        <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                        <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                        <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
                    </div>
                </div>
                <div class=\"col-lg-2 col-md-3 footer-links\">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"#\">About us</a></li>
                        <li><a href=\"#\">Features</a></li>
                        <li><a href=\"#\">Contact</a></li>
                    </ul>
                </div>
                <div class=\"col-lg-4 col-md-12 footer-newsletter\">
                    <h4>Our Newsletter</h4>
                    <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                    <form action=\"forms/newsletter.php\" method=\"post\" class=\"php-email-form\">
                        <div class=\"newsletter-form\">
                            <input type=\"email\" name=\"email\">
                            <input type=\"submit\" value=\"Subscribe\">
                        </div>
                        <div class=\"loading\">Loading</div>
                        <div class=\"error-message\"></div>
                        <div class=\"sent-message\">Your subscription request has been sent. Thank you!</div>
                    </form>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript Files -->
    <script src=\"{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/aos/aos.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}\"></script>
    <script src=\"{{ asset('assets/js/main.js') }}\"></script>
</body>
</html>

", "home/index.html.twig", "/home/marieme/VoteElectronique/templates/home/index.html.twig");
    }
}
