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

/* vote/vote_page.html.twig */
class __TwigTemplate_ddcd028d2ddc22e2b25390d50f3eb769 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vote/vote_page.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vote/vote_page.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vote/vote_page.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
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
        yield "    <h1>Vote</h1>
    <form id=\"voteForm\" method=\"post\" action=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("submitvote");
        yield "\">
        <label for=\"candidate\">Confirmer votre candidat :</label>
        <select name=\"candidate\" id=\"candidate\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["candidates"]) || array_key_exists("candidates", $context) ? $context["candidates"] : (function () { throw new RuntimeError('Variable "candidates" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["candidate"]) {
            // line 9
            yield "                <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "id", [], "any", false, false, false, 9), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "name", [], "any", false, false, false, 9), "html", null, true);
            yield "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "        </select>
        <input type=\"hidden\" name=\"encryptedVote\" id=\"encryptedVote\">
        <input type=\"hidden\" name=\"signature\" id=\"signature\">
        <button type=\"button\" class=\"btn btn-success\" onclick=\"submitVote()\">Voter</button>
    </form>

    <script>
        function submitVote() {
            var candidateId = document.getElementById('candidate').value;
            encryptAndSign(candidateId);
        }

        function encryptAndSign(data) {
            encrypt(data).then(function(encryptedData) {
                document.getElementById('encryptedVote').value = encryptedData;
                sign(encryptedData).then(function(signature) {
                    document.getElementById('signature').value = signature;
                    document.getElementById('voteForm').submit();
                });
            });
        }

        function encrypt(data) {
            // Convertir la chaîne de données en ArrayBuffer
            const dataBuffer = new TextEncoder().encode(data);

            // Générer une clé de chiffrement RSA
            return crypto.subtle.generateKey(
                {
                    name: \"RSA-OAEP\",
                    modulusLength: 2048,
                    publicExponent: new Uint8Array([0x01, 0x00, 0x01]),
                    hash: { name: \"SHA-256\" },
                },
                true,
                [\"encrypt\", \"decrypt\"]
            ).then((keyPair) => {
                // Chiffrer les données avec la clé publique RSA
                return crypto.subtle.encrypt(
                    {
                        name: \"RSA-OAEP\"
                    },
                    keyPair.publicKey,
                    dataBuffer
                );
            }).then((encryptedData) => {
                // Convertir le résultat chiffré en base64
                return btoa(String.fromCharCode.apply(null, new Uint8Array(encryptedData)));
            }).catch((error) => {
                console.error(\"Erreur de chiffrement :\", error);
            });
        }

        function sign(data) {
            // Convertir la chaîne de données en ArrayBuffer
            const dataBuffer = new TextEncoder().encode(data);

            // Générer une clé de signature RSA
            return crypto.subtle.generateKey(
                {
                    name: \"RSASSA-PKCS1-v1_5\",
                    modulusLength: 2048,
                    publicExponent: new Uint8Array([0x01, 0x00, 0x01]),
                    hash: { name: \"SHA-256\" },
                },
                true,
                [\"sign\", \"verify\"]
            ).then((keyPair) => {
                // Signer les données avec la clé privée RSA
                return crypto.subtle.sign(
                    {
                        name: \"RSASSA-PKCS1-v1_5\",
                        hash: { name: \"SHA-256\" },
                    },
                    keyPair.privateKey,
                    dataBuffer
                );
            }).then((signature) => {
                // Convertir la signature en base64
                return btoa(String.fromCharCode.apply(null, new Uint8Array(signature)));
            }).catch((error) => {
                console.error(\"Erreur de signature :\", error);
            });
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "vote/vote_page.html.twig";
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
        return array (  93 => 11,  82 => 9,  78 => 8,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Vote</h1>
    <form id=\"voteForm\" method=\"post\" action=\"{{ path('submitvote') }}\">
        <label for=\"candidate\">Confirmer votre candidat :</label>
        <select name=\"candidate\" id=\"candidate\">
            {% for candidate in candidates %}
                <option value=\"{{ candidate.id }}\">{{ candidate.name }}</option>
            {% endfor %}
        </select>
        <input type=\"hidden\" name=\"encryptedVote\" id=\"encryptedVote\">
        <input type=\"hidden\" name=\"signature\" id=\"signature\">
        <button type=\"button\" class=\"btn btn-success\" onclick=\"submitVote()\">Voter</button>
    </form>

    <script>
        function submitVote() {
            var candidateId = document.getElementById('candidate').value;
            encryptAndSign(candidateId);
        }

        function encryptAndSign(data) {
            encrypt(data).then(function(encryptedData) {
                document.getElementById('encryptedVote').value = encryptedData;
                sign(encryptedData).then(function(signature) {
                    document.getElementById('signature').value = signature;
                    document.getElementById('voteForm').submit();
                });
            });
        }

        function encrypt(data) {
            // Convertir la chaîne de données en ArrayBuffer
            const dataBuffer = new TextEncoder().encode(data);

            // Générer une clé de chiffrement RSA
            return crypto.subtle.generateKey(
                {
                    name: \"RSA-OAEP\",
                    modulusLength: 2048,
                    publicExponent: new Uint8Array([0x01, 0x00, 0x01]),
                    hash: { name: \"SHA-256\" },
                },
                true,
                [\"encrypt\", \"decrypt\"]
            ).then((keyPair) => {
                // Chiffrer les données avec la clé publique RSA
                return crypto.subtle.encrypt(
                    {
                        name: \"RSA-OAEP\"
                    },
                    keyPair.publicKey,
                    dataBuffer
                );
            }).then((encryptedData) => {
                // Convertir le résultat chiffré en base64
                return btoa(String.fromCharCode.apply(null, new Uint8Array(encryptedData)));
            }).catch((error) => {
                console.error(\"Erreur de chiffrement :\", error);
            });
        }

        function sign(data) {
            // Convertir la chaîne de données en ArrayBuffer
            const dataBuffer = new TextEncoder().encode(data);

            // Générer une clé de signature RSA
            return crypto.subtle.generateKey(
                {
                    name: \"RSASSA-PKCS1-v1_5\",
                    modulusLength: 2048,
                    publicExponent: new Uint8Array([0x01, 0x00, 0x01]),
                    hash: { name: \"SHA-256\" },
                },
                true,
                [\"sign\", \"verify\"]
            ).then((keyPair) => {
                // Signer les données avec la clé privée RSA
                return crypto.subtle.sign(
                    {
                        name: \"RSASSA-PKCS1-v1_5\",
                        hash: { name: \"SHA-256\" },
                    },
                    keyPair.privateKey,
                    dataBuffer
                );
            }).then((signature) => {
                // Convertir la signature en base64
                return btoa(String.fromCharCode.apply(null, new Uint8Array(signature)));
            }).catch((error) => {
                console.error(\"Erreur de signature :\", error);
            });
        }
    </script>
{% endblock %}

", "vote/vote_page.html.twig", "/home/marieme/VoteElectronique/templates/vote/vote_page.html.twig");
    }
}
