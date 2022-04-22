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

/* employe/afficher2.html.twig */
class __TwigTemplate_48c768321bfb82cb84edb283f60987c9380521807216c7d74a510eedb3b7ac02 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/afficher2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/afficher2.html.twig"));

        // line 1
        echo "

<table border=\"2\">
<div class=\"chit-chat-heading\">liste des employes</div>
    <tr>
        <td>reference employe</td>
        <td>nom employe</td>
        <td>prenom employe</td>
        <td>numero telephone employe</td>
        <td>adresse mail employe</td>
        <td>sa reference conge</td>

    </tr>



    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listemploye"]) || array_key_exists("listemploye", $context) ? $context["listemploye"] : (function () { throw new RuntimeError('Variable "listemploye" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 18
            echo "
        <tr>

            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "idemp", [], "any", false, false, false, 21), "html", null, true);
            echo "</a></td>
            <td> ";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "nomemp", [], "any", false, false, false, 22), "html", null, true);
            echo "</td>
            <td> ";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "prenomemp", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
            <td> ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "numtelemp", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
            <td> ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "adresseemp", [], "any", false, false, false, 25), "html", null, true);
            echo "</td>
           <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["x"], "conges", [], "any", false, false, false, 26)), "html", null, true);
            echo " </td>



        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "employe/afficher2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 33,  90 => 26,  86 => 25,  82 => 24,  78 => 23,  74 => 22,  70 => 21,  65 => 18,  61 => 17,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<table border=\"2\">
<div class=\"chit-chat-heading\">liste des employes</div>
    <tr>
        <td>reference employe</td>
        <td>nom employe</td>
        <td>prenom employe</td>
        <td>numero telephone employe</td>
        <td>adresse mail employe</td>
        <td>sa reference conge</td>

    </tr>



    {% for x in listemploye %}

        <tr>

            <td>{{x.idemp}}</a></td>
            <td> {{x.nomemp}}</td>
            <td> {{x.prenomemp}}</td>
            <td> {{x.numtelemp}}</td>
            <td> {{x.adresseemp}}</td>
           <td>{{ x.conges |join  }} </td>



        </tr>

    {% endfor %}
</table>
", "employe/afficher2.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\employe\\afficher2.html.twig");
    }
}
