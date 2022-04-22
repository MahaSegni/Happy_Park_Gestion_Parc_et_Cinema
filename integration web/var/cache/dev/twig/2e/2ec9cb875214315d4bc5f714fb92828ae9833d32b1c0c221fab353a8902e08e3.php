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

/* email/contact1.html.twig */
class __TwigTemplate_ab2fb80694169d49a19847c40a787f1dd568768cf0a56b5a5c50b91ce478bce5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/contact1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "email/contact1.html.twig"));

        // line 13
        echo "<h1 style=\"font-family: Georgia, serif; size: 11px\">Je voudrais vous remercier de la confiance que vous avez témoignée en choissisant notre park HAPPY PARK . vous trouverez ci-joint votre ticket <h1></h1>
<div style=\"width: 27em;margin: 3em auto;color: #fff; font-family: sans-serif;\">
    <div style=\"  background: linear-gradient(to bottom,#e84c3d 0%,#e84c3d 26%,#ecedef 26%, #ecedef 100%);height: 11em;float: left;position: relative;padding: 1em; margin-top: 100px;  width: 6.5em; border-top-left-radius: 8px; border-bottom-left-radius: 8px; width: 16em; \">
        <h1 style=\"font-size: 1.1em; margin-top: 0;\">
            Happy Park
            <span style=\"font-size: .7em; color: #a2aeae;\">
    Cinema           </span></h1>

        <div style=\"text-transform: uppercase; font-weight: normal;\">
            <h2 style=\"font-size: .9em; color: #525252; margin: 0;\">
                ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 23, $this->source); })()), "film", [], "any", false, false, false, 23), "html", null, true);
        echo "</h2>
            <span style=\"font-size: .7em; color: #a2aeae;\">
    Film         </span>
        </div>

        <div style=\"text-transform: uppercase; font-weight: normal;\">
            <h2 style=\"font-size: .9em; color: #525252; margin: 0;\">
                Maha Segni </h2>
            <span style=\"font-size: .7em; color: #a2aeae;\">
    nom  prénom </span>
        </div>
    </div>


    <div style=\" background: linear-gradient(to bottom,#e84c3d 0%,#e84c3d 26%,#ecedef 26%, #ecedef 100%);height: 11em;float: left;position: relative;padding: 1em; margin-top: 100px; border-top-right-radius: 8px; border-bottom-right-radius: 8px;
    width: 6.5em;
  border-left: .18em dashed #fff;
 \">
        <div><h2 style=\"font-size: .9em; color: #525252; margin: 0;\">QR Code </h2></div>
        <div>

        </div>
    </div>
</div>

";
        // line 50
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "email/contact1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 50,  55 => 23,  43 => 13,);
    }

    public function getSourceContext()
    {
        return new Source("{#<!doctype html>
<html lang=\"en\">
<head>
 {#  <link rel=\"stylesheet\" href=\"ticket.css\" />
</head>
<body>

<div>
 <div> <h1 style=\"color: #0c5460\">Confirmation Reservation</h1> <br><p>nbr: {{ reservation.nbrp }}</p>
  <p>Film: {{ reservation.num}}</p> <p>Message: </p>
  </div>
</div>#}
<h1 style=\"font-family: Georgia, serif; size: 11px\">Je voudrais vous remercier de la confiance que vous avez témoignée en choissisant notre park HAPPY PARK . vous trouverez ci-joint votre ticket <h1></h1>
<div style=\"width: 27em;margin: 3em auto;color: #fff; font-family: sans-serif;\">
    <div style=\"  background: linear-gradient(to bottom,#e84c3d 0%,#e84c3d 26%,#ecedef 26%, #ecedef 100%);height: 11em;float: left;position: relative;padding: 1em; margin-top: 100px;  width: 6.5em; border-top-left-radius: 8px; border-bottom-left-radius: 8px; width: 16em; \">
        <h1 style=\"font-size: 1.1em; margin-top: 0;\">
            Happy Park
            <span style=\"font-size: .7em; color: #a2aeae;\">
    Cinema           </span></h1>

        <div style=\"text-transform: uppercase; font-weight: normal;\">
            <h2 style=\"font-size: .9em; color: #525252; margin: 0;\">
                {{ reservation.film}}</h2>
            <span style=\"font-size: .7em; color: #a2aeae;\">
    Film         </span>
        </div>

        <div style=\"text-transform: uppercase; font-weight: normal;\">
            <h2 style=\"font-size: .9em; color: #525252; margin: 0;\">
                Maha Segni </h2>
            <span style=\"font-size: .7em; color: #a2aeae;\">
    nom  prénom </span>
        </div>
    </div>


    <div style=\" background: linear-gradient(to bottom,#e84c3d 0%,#e84c3d 26%,#ecedef 26%, #ecedef 100%);height: 11em;float: left;position: relative;padding: 1em; margin-top: 100px; border-top-right-radius: 8px; border-bottom-right-radius: 8px;
    width: 6.5em;
  border-left: .18em dashed #fff;
 \">
        <div><h2 style=\"font-size: .9em; color: #525252; margin: 0;\">QR Code </h2></div>
        <div>

        </div>
    </div>
</div>

{#</body>
</html>#}


", "email/contact1.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\email\\contact1.html.twig");
    }
}
