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

/* cinema/afficherb1.html.twig */
class __TwigTemplate_389bf695637c30a7e3eb0640a3b3016539d6cd4753be342bc85275c6075eb225 extends Template
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
        return "baseb1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cinema/afficherb1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cinema/afficherb1.html.twig"));

        $this->parent = $this->loadTemplate("baseb1.html.twig", "cinema/afficherb1.html.twig", 1);
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
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(document).ready(function(){
            \$('#search').keyup(function(){
                search_table(\$(this).val());
            });
            function search_table(value){
                \$('#tableac tbody tr').each(function(){
                    var found = 'false';
                    \$(this).each(function(){
                        if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                        {
                            found = 'true';
                        }
                    });
                    if(found == 'true')
                    {
                        \$(this).show();
                    }
                    else
                    {
                        \$(this).hide();

                    }
                });
            }
        });
    </script>

    <input type=\"text\" id=\"search\" name=\"search\" class=\"form-control\" placeholder=\"recherche salle cinema\">
    <div class=\"card\">
        <div class=\"card-body\">
            <table id=\"tableac\" class=\"table table-striped table-bordered\">
                <thead>
        <tr>
            <th>salle</th>
            <th>date</th>
            <th>heure</th>
            <th>film</th>
            <th>Nombre de place</th>
            <th>delete</th>
            <th>update</th>
        </tr>
                </thead>
                <tbody>
        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liststudent"]) || array_key_exists("liststudent", $context) ? $context["liststudent"] : (function () { throw new RuntimeError('Variable "liststudent" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 49
            echo "            <tr>
                <td> ";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "num", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                <td> ";
            // line 51
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "date", [], "any", false, false, false, 51), "d/m/Y"), "html", null, true);
            echo "</td>
                <td> ";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "heurep", [], "any", false, false, false, 52), "H:i"), "html", null, true);
            echo "</td>
                <td> ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["x"], "film", [], "any", false, false, false, 53), "nomFilm", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                <td> ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "nbr", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateCinema", ["num" => twig_get_attribute($this->env, $this->source, $context["x"], "num", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\"><i class=\"fa fa-edit\" style=\"font-size:18px\"></i>modifier</a></td>
                <td><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteCinema", ["num" => twig_get_attribute($this->env, $this->source, $context["x"], "num", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\"><i class=\"fa fa-trash\" style=\"font-size:18px\"></i>EFFACER</a></td>

            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "</tbody>
    </table>
    </div></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cinema/afficherb1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 60,  148 => 56,  144 => 55,  140 => 54,  136 => 53,  132 => 52,  128 => 51,  124 => 50,  121 => 49,  117 => 48,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseb1.html.twig' %}
{% block title %}
    <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
    <script>
        \$(document).ready(function(){
            \$('#search').keyup(function(){
                search_table(\$(this).val());
            });
            function search_table(value){
                \$('#tableac tbody tr').each(function(){
                    var found = 'false';
                    \$(this).each(function(){
                        if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                        {
                            found = 'true';
                        }
                    });
                    if(found == 'true')
                    {
                        \$(this).show();
                    }
                    else
                    {
                        \$(this).hide();

                    }
                });
            }
        });
    </script>

    <input type=\"text\" id=\"search\" name=\"search\" class=\"form-control\" placeholder=\"recherche salle cinema\">
    <div class=\"card\">
        <div class=\"card-body\">
            <table id=\"tableac\" class=\"table table-striped table-bordered\">
                <thead>
        <tr>
            <th>salle</th>
            <th>date</th>
            <th>heure</th>
            <th>film</th>
            <th>Nombre de place</th>
            <th>delete</th>
            <th>update</th>
        </tr>
                </thead>
                <tbody>
        {% for x in liststudent %}
            <tr>
                <td> {{x.num}}</td>
                <td> {{ x.date |date('d/m/Y') }}</td>
                <td> {{ x.heurep |date('H:i') }}</td>
                <td> {{ x.film.nomFilm}}</td>
                <td> {{ x.nbr}}</td>
                <td><a href=\"{{ path('updateCinema',{'num':x.num}) }}\"><i class=\"fa fa-edit\" style=\"font-size:18px\"></i>modifier</a></td>
                <td><a href=\"{{ path('deleteCinema',{'num':x.num}) }}\"><i class=\"fa fa-trash\" style=\"font-size:18px\"></i>EFFACER</a></td>

            </tr>

        {% endfor %}</tbody>
    </table>
    </div></div>
{% endblock %}", "cinema/afficherb1.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\cinema\\afficherb1.html.twig");
    }
}
