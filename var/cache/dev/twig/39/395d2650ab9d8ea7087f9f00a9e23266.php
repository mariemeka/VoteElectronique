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

/* vote/machine_vote_page.html.twig */
class __TwigTemplate_9a26e6b223722287e13bfee85a9088d7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vote/machine_vote_page.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vote/machine_vote_page.html.twig"));

        // line 1
        yield "<!-- templates/vote/machine_vote_page.html.twig -->

<!DOCTYPE html>
<html>
<head>
    <title>Machine de Vote</title>
</head>
<body>
    <h1>Votez pour votre candidat</h1>
    <form action=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("machine_submitvote");
        yield "\" method=\"POST\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["candidates"]) || array_key_exists("candidates", $context) ? $context["candidates"] : (function () { throw new RuntimeError('Variable "candidates" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["candidate"]) {
            // line 12
            yield "            <div>
                <input type=\"radio\" id=\"candidate_";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "id", [], "any", false, false, false, 13), "html", null, true);
            yield "\" name=\"candidate\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "id", [], "any", false, false, false, 13), "html", null, true);
            yield "\">
                <label for=\"candidate_";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "id", [], "any", false, false, false, 14), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["candidate"], "name", [], "any", false, false, false, 14), "html", null, true);
            yield "</label>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidate'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "        <button type=\"submit\">Votez</button>
    </form>
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
        return "vote/machine_vote_page.html.twig";
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
        return array (  83 => 17,  72 => 14,  66 => 13,  63 => 12,  59 => 11,  55 => 10,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- templates/vote/machine_vote_page.html.twig -->

<!DOCTYPE html>
<html>
<head>
    <title>Machine de Vote</title>
</head>
<body>
    <h1>Votez pour votre candidat</h1>
    <form action=\"{{ path('machine_submitvote') }}\" method=\"POST\">
        {% for candidate in candidates %}
            <div>
                <input type=\"radio\" id=\"candidate_{{ candidate.id }}\" name=\"candidate\" value=\"{{ candidate.id }}\">
                <label for=\"candidate_{{ candidate.id }}\">{{ candidate.name }}</label>
            </div>
        {% endfor %}
        <button type=\"submit\">Votez</button>
    </form>
</body>
</html>

", "vote/machine_vote_page.html.twig", "/home/marieme/VoteElectronique/templates/vote/machine_vote_page.html.twig");
    }
}
