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

/* film/afficherfb11.html.twig */
class __TwigTemplate_7306c2552c697e0894a1deaa0bfdf3118c48e4b2e49219e6300837014d15cae5 extends Template
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
        return "film_base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "film/afficherfb11.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "film/afficherfb11.html.twig"));

        $this->parent = $this->loadTemplate("film_base1.html.twig", "film/afficherfb11.html.twig", 1);
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

    <input type=\"text\" id=\"search\" name=\"search\" class=\"form-control\" placeholder=\"recherche film\">
    <div class=\"card\">
        <div class=\"card-body\">
            <table id=\"tableac\" class=\"table table-striped table-bordered\">
                <thead>

        <tr>

            <th>nom</th>
            <th>Description</th>
            <th>date sortie</th>
            <th>categorie</th>
            <th>Lien image</th>
            <th>Update</th>
            <th>Delete</th>
        </tr></thead>
        <tbody>
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listfilm"]) || array_key_exists("listfilm", $context) ? $context["listfilm"] : (function () { throw new RuntimeError('Variable "listfilm" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 50
            echo "            <tr>


                <td> ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "nomFilm", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                <td> ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "descriptionf", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
                <td> ";
            // line 55
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "datesortie", [], "any", false, false, false, 55), "d/m/Y"), "html", null, true);
            echo "</td>
                <td> ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "categorie", [], "any", false, false, false, 56), "html", null, true);
            echo "</td>
                <td>  <img src=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/images1/" . twig_get_attribute($this->env, $this->source, $context["x"], "filename", [], "any", false, false, false, 57))), "html", null, true);
            echo "\" height=\"50px\" width=\"50px\"></td>
                <td><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateFilm", ["id_film" => twig_get_attribute($this->env, $this->source, $context["x"], "id_film", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\"><i class=\"fa fa-edit\" style=\"font-size:18px\"></i>modifier</a></td>
                <td><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletef", ["id_film" => twig_get_attribute($this->env, $this->source, $context["x"], "id_film", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\"><i class=\"fa fa-trash\" style=\"font-size:18px\"></i>EFFACER</a></td>
            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo " </tbody>
    </table>
    </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "film/afficherfb11.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 62,  151 => 59,  147 => 58,  143 => 57,  139 => 56,  135 => 55,  131 => 54,  127 => 53,  122 => 50,  118 => 49,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'film_base1.html.twig' %}
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

    <input type=\"text\" id=\"search\" name=\"search\" class=\"form-control\" placeholder=\"recherche film\">
    <div class=\"card\">
        <div class=\"card-body\">
            <table id=\"tableac\" class=\"table table-striped table-bordered\">
                <thead>

        <tr>

            <th>nom</th>
            <th>Description</th>
            <th>date sortie</th>
            <th>categorie</th>
            <th>Lien image</th>
            <th>Update</th>
            <th>Delete</th>
        </tr></thead>
        <tbody>
        {% for x in listfilm %}
            <tr>


                <td> {{x.nomFilm}}</td>
                <td> {{x.descriptionf}}</td>
                <td> {{ x.datesortie | date('d/m/Y') }}</td>
                <td> {{x.categorie}}</td>
                <td>  <img src=\"{{ asset('/images1/' ~ x.filename) }}\" height=\"50px\" width=\"50px\"></td>
                <td><a href=\"{{ path('updateFilm',{'id_film':x.id_film}) }}\"><i class=\"fa fa-edit\" style=\"font-size:18px\"></i>modifier</a></td>
                <td><a href=\"{{ path('deletef',{'id_film':x.id_film}) }}\"><i class=\"fa fa-trash\" style=\"font-size:18px\"></i>EFFACER</a></td>
            </tr>

        {% endfor %} </tbody>
    </table>
    </div>
    </div>
{% endblock %}", "film/afficherfb11.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\film\\afficherfb11.html.twig");
    }
}
