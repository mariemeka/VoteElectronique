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

/* vote_confirmation.html.twig */
class __TwigTemplate_4140388cd5247702c186d21109df1845 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vote_confirmation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vote_confirmation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vote_confirmation.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        yield "    <h1>Vote Confirmation</h1>
    ";
        // line 6
        if ((isset($context["hasJustVoted"]) || array_key_exists("hasJustVoted", $context) ? $context["hasJustVoted"] : (function () { throw new RuntimeError('Variable "hasJustVoted" does not exist.', 6, $this->source); })())) {
            // line 7
            yield "        <p>Votre vote a été soumis avec succès.</p>
    ";
        } elseif (        // line 8
(isset($context["hasVoted"]) || array_key_exists("hasVoted", $context) ? $context["hasVoted"] : (function () { throw new RuntimeError('Variable "hasVoted" does not exist.', 8, $this->source); })())) {
            // line 9
            yield "        <p>Vous avez déjà voté.</p>
    ";
        } else {
            // line 11
            yield "        <p>Il semble que vous n'ayez pas voté encore.</p>
    ";
        }
        // line 13
        yield "    <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("election_results");
        yield "\">View Election Results</a>

    <a class=\"btn-getstarted\" href=\"/\"> | Deconnexion</a>

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
        return "vote_confirmation.html.twig";
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
        return array (  87 => 13,  83 => 11,  79 => 9,  77 => 8,  74 => 7,  72 => 6,  69 => 5,  59 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/vote_confirmation.html.twig #}
{% extends 'base.html.twig' %}

{% block body %}
    <h1>Vote Confirmation</h1>
    {% if hasJustVoted %}
        <p>Votre vote a été soumis avec succès.</p>
    {% elseif hasVoted %}
        <p>Vous avez déjà voté.</p>
    {% else %}
        <p>Il semble que vous n'ayez pas voté encore.</p>
    {% endif %}
    <a href=\"{{ path('election_results') }}\">View Election Results</a>

    <a class=\"btn-getstarted\" href=\"/\"> | Deconnexion</a>

{% endblock %}

", "vote_confirmation.html.twig", "/home/marieme/VoteElectronique/templates/vote_confirmation.html.twig");
    }
}
