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

/* cinema/affichers.html.twig */
class __TwigTemplate_207bb6fd11850ae29b55a88ba033afed2a350e5db9af1af80b5b93c3b7b29196 extends Template
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
        return "reclamation1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cinema/affichers.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cinema/affichers.html.twig"));

        $this->parent = $this->loadTemplate("reclamation1.html.twig", "cinema/affichers.html.twig", 1);
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
        echo "    <div align=\"right\">
        <form method=\"post\" action=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recherchecinema");
        echo "\"  align=\"left\">
            <label style=\"color: black\">Rechercher</label>
            <input type=\"text\" name=\"search\" style=\"background-color: #6f42c1\"><input type=\"submit\"  style=\" background-color : #6f42c1\" value=\"Recherche\" class=\"btn btn-default\">
        </form> <form method=\"post\" action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recherche_film_date");
        echo "\" align=\"right\">
            <input type=\"submit\" value=\"Par Date \"  style=\" background-color : #6f42c1\" class=\"btn btn-default\" >
        </form>
        <form method=\"post\" id=\"contactForm\" action=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recherche_cin");
        echo "\" id=\"search_form_1\" >
            <div class=\"search_item\">
                <div style='align-content: center'>
                    <div class=\"col-md-8 col-sm-8\">
                        Date début :
                        <input type=\"datetime-local\" placeholder=\"Search1...\" required=\"\" name=\"search1\" style=\" background-color : #6f42c1\"> </br>

                        Date Fin :
                        <input type=\"datetime-local\" placeholder=\"Search2...\" required=\"\" name=\"search2\" style=\" background-color : #6f42c1\">

                        <input type=\"submit\" value=\"rechercher\" style=\" background-color : #6f42c1\" class=\"btn btn-default\" >
                    </div>
                </div>
            </div>
        </form>
        <div><br></div>


    </div>
    <table>

        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liststudent"]) || array_key_exists("liststudent", $context) ? $context["liststudent"] : (function () { throw new RuntimeError('Variable "liststudent" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 32
            echo "            <tr><td>
                    <img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/images1/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["x"], "film", [], "any", false, false, false, 33), "filename", [], "any", false, false, false, 33))), "html", null, true);
            echo "\"width=\"150\" height=\"200\">
                    <br></td></tr>
            <tr>

                <td style=\"color: black\">salle  ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "num", [], "any", false, false, false, 37), "html", null, true);
            echo "<br>
                    Nom film : ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["x"], "film", [], "any", false, false, false, 38), "nomfilm", [], "any", false, false, false, 38), "html", null, true);
            echo "<br>
                    Description : ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["x"], "film", [], "any", false, false, false, 39), "descriptionf", [], "any", false, false, false, 39), "html", null, true);
            echo "<br>
                    date :  ";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "date", [], "any", false, false, false, 40), "d/m/Y"), "html", null, true);
            echo "<br>
                    heure : ";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "heurep", [], "any", false, false, false, 41), "H:i"), "html", null, true);
            echo "<br>

                    <button style=\"background-color: #1f0733\" class=\"btn btn-default\">   <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addrese", ["num" => twig_get_attribute($this->env, $this->source, $context["x"], "num", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">Réserver</a></button> <br>
                    <hr noshade  size=\"3\"  width=\"700\">
                    <br>

                </td>

            </tr>


        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
    </table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cinema/affichers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 53,  142 => 43,  137 => 41,  133 => 40,  129 => 39,  125 => 38,  121 => 37,  114 => 33,  111 => 32,  107 => 31,  83 => 10,  77 => 7,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'reclamation1.html.twig' %}
{% block title %}
    <div align=\"right\">
        <form method=\"post\" action=\"{{ path ('recherchecinema') }}\"  align=\"left\">
            <label style=\"color: black\">Rechercher</label>
            <input type=\"text\" name=\"search\" style=\"background-color: #6f42c1\"><input type=\"submit\"  style=\" background-color : #6f42c1\" value=\"Recherche\" class=\"btn btn-default\">
        </form> <form method=\"post\" action=\"{{ path('recherche_film_date') }}\" align=\"right\">
            <input type=\"submit\" value=\"Par Date \"  style=\" background-color : #6f42c1\" class=\"btn btn-default\" >
        </form>
        <form method=\"post\" id=\"contactForm\" action=\"{{ path('recherche_cin') }}\" id=\"search_form_1\" >
            <div class=\"search_item\">
                <div style='align-content: center'>
                    <div class=\"col-md-8 col-sm-8\">
                        Date début :
                        <input type=\"datetime-local\" placeholder=\"Search1...\" required=\"\" name=\"search1\" style=\" background-color : #6f42c1\"> </br>

                        Date Fin :
                        <input type=\"datetime-local\" placeholder=\"Search2...\" required=\"\" name=\"search2\" style=\" background-color : #6f42c1\">

                        <input type=\"submit\" value=\"rechercher\" style=\" background-color : #6f42c1\" class=\"btn btn-default\" >
                    </div>
                </div>
            </div>
        </form>
        <div><br></div>


    </div>
    <table>

        {% for x in liststudent %}
            <tr><td>
                    <img src=\"{{ asset('/images1/' ~ x.film.filename )}}\"width=\"150\" height=\"200\">
                    <br></td></tr>
            <tr>

                <td style=\"color: black\">salle  {{x.num}}<br>
                    Nom film : {{ x.film.nomfilm}}<br>
                    Description : {{ x.film.descriptionf}}<br>
                    date :  {{ x.date |date('d/m/Y') }}<br>
                    heure : {{ x.heurep |date('H:i') }}<br>

                    <button style=\"background-color: #1f0733\" class=\"btn btn-default\">   <a href=\"{{ path('addrese',{'num':x.num}) }}\">Réserver</a></button> <br>
                    <hr noshade  size=\"3\"  width=\"700\">
                    <br>

                </td>

            </tr>


        {% endfor %}

    </table>

{% endblock %}", "cinema/affichers.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\cinema\\affichers.html.twig");
    }
}
