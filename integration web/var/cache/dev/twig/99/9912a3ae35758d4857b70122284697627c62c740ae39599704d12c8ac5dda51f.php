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

/* conge/afficherc3.html.twig */
class __TwigTemplate_98a6d2097b00fcdf5f48c25c4fdf094e471f62079b035d2b74064aadd9a86c7b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conge/afficherc3.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conge/afficherc3.html.twig"));

        // line 1
        echo "
<table border=\"2\">
<div class=\"chit-chat-heading\">liste conges</div>
    <tr>
        <td>reference conge</td>
        <td>date conge</td>
        <td>motif conge</td>
        <td>nombre jours conge</td>
        <td>id employe correspondant</td>


    </tr>


    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listconge"]) || array_key_exists("listconge", $context) ? $context["listconge"] : (function () { throw new RuntimeError('Variable "listconge" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 16
            echo "
        <tr>


            <td> ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "idconge", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
            <td> ";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "dateconge", [], "any", false, false, false, 21), "Y-m-d"), "html", null, true);
            echo "</td>
            <td> ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "motifconge", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
            <td> ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "nbjourconge", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
            <td> ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "employe", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>





        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
</table>




";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "conge/afficherc3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 33,  85 => 24,  81 => 23,  77 => 22,  73 => 21,  69 => 20,  63 => 16,  59 => 15,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<table border=\"2\">
<div class=\"chit-chat-heading\">liste conges</div>
    <tr>
        <td>reference conge</td>
        <td>date conge</td>
        <td>motif conge</td>
        <td>nombre jours conge</td>
        <td>id employe correspondant</td>


    </tr>


    {% for x in listconge %}

        <tr>


            <td> {{x.idconge}}</td>
            <td> {{x.dateconge|date('Y-m-d')}}</td>
            <td> {{x.motifconge}}</td>
            <td> {{x.nbjourconge}}</td>
            <td> {{x.employe}}</td>





        </tr>

    {% endfor %}

</table>




", "conge/afficherc3.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\conge\\afficherc3.html.twig");
    }
}
