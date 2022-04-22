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

/* Event/Back/pdf.html.twig */
class __TwigTemplate_24b328e145991dca8fe5b61e0e4fc44f55fd5f6b9680d37a9dc130a5e64fa6bb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Event/Back/pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Event/Back/pdf.html.twig"));

        // line 1
        echo "<head>
    <title>Event ";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new RuntimeError('Variable "nom" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "</title>
</head>
<h1> Event Name: ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new RuntimeError('Variable "nom" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</h1>
<h1> Start Date: ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["Date"]) || array_key_exists("Date", $context) ? $context["Date"] : (function () { throw new RuntimeError('Variable "Date" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "</h1>
<h1> End Date: ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["Date_Fin"]) || array_key_exists("Date_Fin", $context) ? $context["Date_Fin"] : (function () { throw new RuntimeError('Variable "Date_Fin" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</h1>
<h1> Capacity: ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["capacite"]) || array_key_exists("capacite", $context) ? $context["capacite"] : (function () { throw new RuntimeError('Variable "capacite" does not exist.', 7, $this->source); })()), "html", null, true);
        echo "</h1>
<h1> Placement: ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["emplacement"]) || array_key_exists("emplacement", $context) ? $context["emplacement"] : (function () { throw new RuntimeError('Variable "emplacement" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "</h1>

<p style=\"color:red;\">Tout droit reserve avec HappyLand.</p>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Event/Back/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 8,  63 => 7,  59 => 6,  55 => 5,  51 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    <title>Event {{ nom }}</title>
</head>
<h1> Event Name: {{nom}}</h1>
<h1> Start Date: {{Date}}</h1>
<h1> End Date: {{Date_Fin}}</h1>
<h1> Capacity: {{capacite}}</h1>
<h1> Placement: {{emplacement}}</h1>

<p style=\"color:red;\">Tout droit reserve avec HappyLand.</p>", "Event/Back/pdf.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\Event\\Back\\pdf.html.twig");
    }
}
