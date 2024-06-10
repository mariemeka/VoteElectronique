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

/* security/welcome.html.twig */
class __TwigTemplate_38ce270b03b7d5db570d6aabc362e9a9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/welcome.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/welcome.html.twig"));

        // line 2
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
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/favicon.png"), "html", null, true);
        yield "\" rel=\"icon\">
    <link href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/apple-touch-icon.png"), "html", null, true);
        yield "\" rel=\"apple-touch-icon\">

    <!-- Fonts -->
    <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
    <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap\"
        rel=\"stylesheet\">

    <!-- Vendor CSS Files -->
    <link href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

    <!-- Main CSS File -->
    <link href=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/main.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
</head>

<body class=\"index-page\">

    <header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
        <div class=\"container-fluid container-xl position-relative d-flex align-items-center\">
            <a href=\"#\" class=\"logo d-flex align-items-center me-auto\">
                <img src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        yield "\" alt=\"\">
                <h1 class=\"sitename\">Vote Electronique</h1>
            </a>
            <nav id=\"navmenu\" class=\"navmenu\">
                <ul>
                    <li><a href=\"#\" class=\"\">Acceuil</a></li>
                    <li><a href=\"#\">A Propos</a></li>
                    <li><a href=\"#\">Fonctionnalités</a></li>
                    <li><a href=\"#contact\">Contact</a></li>
                </ul>
                <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
            </nav>
          
 <a class=\"btn-getstarted\" href=\"/\">Deconnexion</a>

        </div>
    </header>

    <main class=\"main\">
        
        <!-- Hero Section -->
        <section id=\"hero\" class=\"hero section\">
            <div class=\"hero-bg\">
                <img src=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/hero-bg-light.webp"), "html", null, true);
        yield "\" alt=\"\">
            </div>
            <div class=\"container text-center\">
                <div class=\"d-flex flex-column justify-content-center align-items-center\">
                    
                       <h1> <span>Espace Personnel</span><h1>
                    </h1>
                    <br><br><br> <br><br><br>
                    <div class=\"d-flex\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                      <br><br><br>   <a href=\"#about\" class=\"btn-get-started\">Voter</a>
                        <a href=\"https://www.youtube.com\" class=\"glightbox btn-watch-video d-flex align-items-center\"><i class=\"bi bi-play-circle\"></i><span>Comment Voter ?</span></a>
                    </div> <br>
                   
                 <!-- Information de l'utilisateur -->
                <div class=\"user-info mt-5\">
                    <h2>Bienvenue, ";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 76, $this->source); })()), "nom", [], "any", false, false, false, 76), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 76, $this->source); })()), "prenom", [], "any", false, false, false, 76), "html", null, true);
        yield "</h2> <br>
                    <p>Identifiant électeur: ";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 77, $this->source); })()), "idelecteur", [], "any", false, false, false, 77), "html", null, true);
        yield "</p>
                    <p>Date de naissance: ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 78, $this->source); })()), "datenaiss", [], "any", false, false, false, 78), "d/m/Y"), "html", null, true);
        yield "</p>
                     <p>Email: ";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 79, $this->source); })()), "email", [], "any", false, false, false, 79), "html", null, true);
        yield "</p>
                    <p>Adresse: ";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 80, $this->source); })()), "adresse", [], "any", false, false, false, 80), "html", null, true);
        yield "</p>
                   
                </div>
            </div>
        </section>
        <!-- /Hero Section -->

   <section id=\"about\" class=\"about section\">
            <!-- Photos des Candidats -->
<div class=\"candidate-photos mt-5\">
    <h2>Les Candidats de l'election </h2>
    <div class=\"row\">
        ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["candidate_links"]) || array_key_exists("candidate_links", $context) ? $context["candidate_links"] : (function () { throw new RuntimeError('Variable "candidate_links" does not exist.', 92, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 93
            yield "            <div class=\"col-md-2\">
                <a href=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["link"], "html", null, true);
            yield "\">
                    <img src=\"";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/candidate1.jpeg"), "html", null, true);
            yield "\" alt=\"Candidate ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 95), "html", null, true);
            yield "\" class=\"img-fluid\">
               
                </a>
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        yield "    </div>
</div>

        </section>
      


      <br><br><br>

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
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        yield "\"></script>
    <script src=\"";
        // line 167
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
        return "security/welcome.html.twig";
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
        return array (  309 => 167,  305 => 166,  301 => 165,  297 => 164,  293 => 163,  228 => 100,  207 => 95,  203 => 94,  200 => 93,  183 => 92,  168 => 80,  164 => 79,  160 => 78,  156 => 77,  150 => 76,  132 => 61,  106 => 38,  95 => 30,  89 => 27,  85 => 26,  81 => 25,  77 => 24,  73 => 23,  61 => 14,  57 => 13,  44 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/security/welcome.html.twig #}
<!DOCTYPE html>
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
                    <li><a href=\"#\">A Propos</a></li>
                    <li><a href=\"#\">Fonctionnalités</a></li>
                    <li><a href=\"#contact\">Contact</a></li>
                </ul>
                <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
            </nav>
          
 <a class=\"btn-getstarted\" href=\"/\">Deconnexion</a>

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
                    
                       <h1> <span>Espace Personnel</span><h1>
                    </h1>
                    <br><br><br> <br><br><br>
                    <div class=\"d-flex\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                      <br><br><br>   <a href=\"#about\" class=\"btn-get-started\">Voter</a>
                        <a href=\"https://www.youtube.com\" class=\"glightbox btn-watch-video d-flex align-items-center\"><i class=\"bi bi-play-circle\"></i><span>Comment Voter ?</span></a>
                    </div> <br>
                   
                 <!-- Information de l'utilisateur -->
                <div class=\"user-info mt-5\">
                    <h2>Bienvenue, {{ user.nom }} {{ user.prenom }}</h2> <br>
                    <p>Identifiant électeur: {{ user.idelecteur }}</p>
                    <p>Date de naissance: {{ user.datenaiss|date('d/m/Y') }}</p>
                     <p>Email: {{ user.email }}</p>
                    <p>Adresse: {{ user.adresse }}</p>
                   
                </div>
            </div>
        </section>
        <!-- /Hero Section -->

   <section id=\"about\" class=\"about section\">
            <!-- Photos des Candidats -->
<div class=\"candidate-photos mt-5\">
    <h2>Les Candidats de l'election </h2>
    <div class=\"row\">
        {% for link in candidate_links %}
            <div class=\"col-md-2\">
                <a href=\"{{ link }}\">
                    <img src=\"{{ asset('assets/img/candidate1.jpeg') }}\" alt=\"Candidate {{ loop.index }}\" class=\"img-fluid\">
               
                </a>
            </div>
        {% endfor %}
    </div>
</div>

        </section>
      


      <br><br><br>

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
", "security/welcome.html.twig", "/home/marieme/VoteElectronique/templates/security/welcome.html.twig");
    }
}
