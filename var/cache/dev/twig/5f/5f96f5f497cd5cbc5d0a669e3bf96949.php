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

/* candidate/show.html.twig */
class __TwigTemplate_b5f4b02ee0196619bcffddd23c8da148 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidate/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidate/show.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <title>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        yield " - Détails du candidat</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        yield "\" rel=\"icon\">
    <link href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        yield "\" rel=\"apple-touch-icon\">

    <!-- Vendor CSS Files -->
    <link href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- Main CSS File -->
    <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
</head>

<body>
<br><br><br><br><br><br>    <br><br><br>
    <header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
        <div class=\"container-fluid container-xl position-relative d-flex align-items-center\">
            <a href=\"#\" class=\"logo d-flex align-items-center me-auto\">
                <img src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        yield "\" alt=\"\">
                <h1 class=\"sitename\">Vote Electronique</h1>
            </a>
            
            <nav id=\"navmenu\" class=\"navmenu\">
                <ul>
                    <li><a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("welcome");
        yield "\" class=\"\">Accueil</a></li>
                    <li><a href=\"#\">A Propos</a></li>
                    <li><a href=\"#\">Fonctionnalités</a></li>
                    <li><a href=\"#contact\">Contact</a></li>
                </ul>
                <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
            </nav>
        </div>
    </header>

    <main class=\"main\">
        <!-- Candidate Details Section -->
        <section id=\"candidate-details\" class=\"candidate-details section\">
            <div class=\"container\" data-aos=\"fade-up\">
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <img src=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/candidate1.jpeg"), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 54, $this->source); })()), "name", [], "any", false, false, false, 54), "html", null, true);
        yield "\" class=\"img-fluid\">
                    </div>
                    <div class=\"col-lg-8\">
                        <h2>";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 57, $this->source); })()), "name", [], "any", false, false, false, 57), "html", null, true);
        yield "</h2>
                        <p><strong>Âge :</strong> ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 58, $this->source); })()), "age", [], "any", false, false, false, 58), "html", null, true);
        yield "</p>
                        <p><strong>Parti :</strong> ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 59, $this->source); })()), "party", [], "any", false, false, false, 59), "html", null, true);
        yield "</p>
                        <p><strong>Programme :</strong> ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["candidate"]) || array_key_exists("candidate", $context) ? $context["candidate"] : (function () { throw new RuntimeError('Variable "candidate" does not exist.', 60, $this->source); })()), "program", [], "any", false, false, false, 60), "html", null, true);
        yield "</p>
                    </div>
                </div>
            </div>
        </section>
        
                <div class=\"container\" style=\"margin-top: 20px;\">
            <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("welcome");
        yield "\" class=\"btn btn-primary\">Retour à la page d'accueil</a>
         
        </div>
 <form method=\"post\" action=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("submitvote");
        yield "\">
    <button type=\"submit\" class=\"btn btn-success\">Voter</button>
</form>
        
        
        <!-- /Candidate Details Section -->

<br><br><br><br><br><br>    <br><br><br>
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
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 136
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
        return "candidate/show.html.twig";
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
        return array (  248 => 136,  244 => 135,  240 => 134,  236 => 133,  232 => 132,  167 => 70,  161 => 67,  151 => 60,  147 => 59,  143 => 58,  139 => 57,  131 => 54,  112 => 38,  103 => 32,  92 => 24,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  64 => 14,  60 => 13,  52 => 8,  44 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/candidate/show.html.twig #}
<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <title>{{ candidate.name }} - Détails du candidat</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"{{ asset('assets/img/favicon.png') }}\" rel=\"icon\">
    <link href=\"{{ asset('assets/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

    <!-- Vendor CSS Files -->
    <link href=\"{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/aos/aos.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}\" rel=\"stylesheet\">
    <link href=\"{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">

    <!-- Main CSS File -->
    <link href=\"{{ asset('assets/css/main.css') }}\" rel=\"stylesheet\">
</head>

<body>
<br><br><br><br><br><br>    <br><br><br>
    <header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
        <div class=\"container-fluid container-xl position-relative d-flex align-items-center\">
            <a href=\"#\" class=\"logo d-flex align-items-center me-auto\">
                <img src=\"{{ asset('assets/img/logo.png') }}\" alt=\"\">
                <h1 class=\"sitename\">Vote Electronique</h1>
            </a>
            
            <nav id=\"navmenu\" class=\"navmenu\">
                <ul>
                    <li><a href=\"{{ path('welcome') }}\" class=\"\">Accueil</a></li>
                    <li><a href=\"#\">A Propos</a></li>
                    <li><a href=\"#\">Fonctionnalités</a></li>
                    <li><a href=\"#contact\">Contact</a></li>
                </ul>
                <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
            </nav>
        </div>
    </header>

    <main class=\"main\">
        <!-- Candidate Details Section -->
        <section id=\"candidate-details\" class=\"candidate-details section\">
            <div class=\"container\" data-aos=\"fade-up\">
                <div class=\"row\">
                    <div class=\"col-lg-4\">
                        <img src=\"{{ asset('assets/img/candidate1.jpeg') }}\" alt=\"{{ candidate.name }}\" class=\"img-fluid\">
                    </div>
                    <div class=\"col-lg-8\">
                        <h2>{{ candidate.name }}</h2>
                        <p><strong>Âge :</strong> {{ candidate.age }}</p>
                        <p><strong>Parti :</strong> {{ candidate.party }}</p>
                        <p><strong>Programme :</strong> {{ candidate.program }}</p>
                    </div>
                </div>
            </div>
        </section>
        
                <div class=\"container\" style=\"margin-top: 20px;\">
            <a href=\"{{ path('welcome') }}\" class=\"btn btn-primary\">Retour à la page d'accueil</a>
         
        </div>
 <form method=\"post\" action=\"{{ path('submitvote') }}\">
    <button type=\"submit\" class=\"btn btn-success\">Voter</button>
</form>
        
        
        <!-- /Candidate Details Section -->

<br><br><br><br><br><br>    <br><br><br>
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



", "candidate/show.html.twig", "/home/marieme/VoteElectronique/templates/candidate/show.html.twig");
    }
}
