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

/* film/afficherf.html.twig */
class __TwigTemplate_e555c7aa6833e3410d72afd7c5a882512777b810148f7e84500052f4413cf3bc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "film_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "film/afficherf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "film/afficherf.html.twig"));

        $this->parent = $this->loadTemplate("film_base.html.twig", "film/afficherf.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    <script>
        \$(document).ready(function(){
            \$(\"#myInput\").on(\"keyup\", function() {
                var value = \$(this).val().toLowerCase();
                \$(\"#myTable tr\").filter(function() {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
    <div class=\"card-block table-border-style\">
    <div class=\"table-responsive\">
    <table class=\"table table-hover\">

    <tr>
        <td>id film</td>
        <td>nom</td>
        <td>Description</td>
        <td>date sortie</td>
        <td>categorie</td>
        <td>Update</td>
        <td>Delete</td>
</tr>

    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listfilm"]) || array_key_exists("listfilm", $context) ? $context["listfilm"] : (function () { throw new RuntimeError('Variable "listfilm" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 28
            echo "        <tr>
            <td> ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "id_film", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
            <td> ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "nomfilm", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
            <td> ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "descriptionf", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
            <td> ";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "datesortie", [], "any", false, false, false, 32), "d/m/Y"), "html", null, true);
            echo "</td>
            <td> ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "categorie", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateFilm", ["id_film" => twig_get_attribute($this->env, $this->source, $context["x"], "id_film", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\"><i class=\"fa fa-edit\" style=\"font-size:18px\"></i>modifier</a></td>
            <td><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletef", ["id_film" => twig_get_attribute($this->env, $this->source, $context["x"], "id_film", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\"><i class=\"fa fa-trash\" style=\"font-size:18px\"></i>EFFACER</a></td>
        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "</table>
    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "film/afficherf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 39,  125 => 35,  121 => 34,  117 => 33,  113 => 32,  109 => 31,  105 => 30,  101 => 29,  98 => 28,  94 => 27,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'film_base.html.twig' %}
{% block title %}
    <script>
        \$(document).ready(function(){
            \$(\"#myInput\").on(\"keyup\", function() {
                var value = \$(this).val().toLowerCase();
                \$(\"#myTable tr\").filter(function() {
                    \$(this).toggle(\$(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
    <div class=\"card-block table-border-style\">
    <div class=\"table-responsive\">
    <table class=\"table table-hover\">

    <tr>
        <td>id film</td>
        <td>nom</td>
        <td>Description</td>
        <td>date sortie</td>
        <td>categorie</td>
        <td>Update</td>
        <td>Delete</td>
</tr>

    {% for x in listfilm %}
        <tr>
            <td> {{x.id_film}}</td>
            <td> {{x.nomfilm}}</td>
            <td> {{x.descriptionf}}</td>
            <td> {{ x.datesortie | date('d/m/Y') }}</td>
            <td> {{x.categorie}}</td>
            <td><a href=\"{{ path('updateFilm',{'id_film':x.id_film}) }}\"><i class=\"fa fa-edit\" style=\"font-size:18px\"></i>modifier</a></td>
            <td><a href=\"{{ path('deletef',{'id_film':x.id_film}) }}\"><i class=\"fa fa-trash\" style=\"font-size:18px\"></i>EFFACER</a></td>
        </tr>

    {% endfor %}
</table>
    </div>
    </div>
{% endblock %}", "film/afficherf.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\film\\afficherf.html.twig");
    }
}
