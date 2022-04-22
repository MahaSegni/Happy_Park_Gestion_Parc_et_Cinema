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

/* categorie/afficher.html.twig */
class __TwigTemplate_bad86b8b5cfda58b49e57de363293770929e4879e829400186648daae69102ca extends Template
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
        return "basebr.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/afficher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/afficher.html.twig"));

        $this->parent = $this->loadTemplate("basebr.html.twig", "categorie/afficher.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 6
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

    <div class=\"chit-chat-heading\">
        La liste des Categories
    </div>
    <!--
<table border=\"2\">

    <tr>
        <td>Id categorie</td>
        <td>Nom categorie</td>
        <td>Update</td>
        <td>Delete</td>


    </tr>

    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listcategorie"]) || array_key_exists("listcategorie", $context) ? $context["listcategorie"] : (function () { throw new RuntimeError('Variable "listcategorie" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 33
            echo "
        <tr>


            <td> ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "idc", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
            <td> ";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "nomc", [], "any", false, false, false, 38), "html", null, true);
            echo "</td>
            <td><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateCategorie", ["idc" => twig_get_attribute($this->env, $this->source, $context["x"], "idc", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">update</a></td>
            <td><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteCategorie", ["idc" => twig_get_attribute($this->env, $this->source, $context["x"], "idc", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">delete</a></td>
        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "</table>
-->
    <br>
    <input class=\"form-control\" id=\"myInput\" type=\"text\" placeholder=\"Rechercher..\">

    <div class=\"card\">

        <div class=\"card-block table-border-style\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <td>#</td>
                        <th>ID</th>
                        <th>Nom</th>
                        <th></th>
                    </tr>
                    </thead>
                    ";
        // line 62
        $context["count"] = 0;
        // line 63
        echo "                    <tbody id=\"myTable\">
                    ";
        // line 64
        $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 64, $this->source); })()) + 1);
        // line 65
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listcategorie"]) || array_key_exists("listcategorie", $context) ? $context["listcategorie"] : (function () { throw new RuntimeError('Variable "listcategorie" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 66
            echo "                        <tr>
                            <td>";
            // line 67
            echo twig_escape_filter($this->env, (isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 67, $this->source); })()), "html", null, true);
            echo "</td>
                            <td>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "idc", [], "any", false, false, false, 68), "html", null, true);
            echo "</td>
                            <td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nomc", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>

                            <td>
                                <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateCategorie", ["idc" => twig_get_attribute($this->env, $this->source, $context["categorie"], "idc", [], "any", false, false, false, 72)]), "html", null, true);
            echo "\" ><i class=\"fa fa-edit\" style=\"font-size:18px\"></i></a>
                                <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteCategorie", ["idc" => twig_get_attribute($this->env, $this->source, $context["categorie"], "idc", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\" ><i class=\"fa fa-trash\" style=\"font-size:18px\"></i></a>
                                ";
            // line 74
            $context["count"] = ((isset($context["count"]) || array_key_exists("count", $context) ? $context["count"] : (function () { throw new RuntimeError('Variable "count" does not exist.', 74, $this->source); })()) + 1);
            // line 75
            echo "
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "

                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "categorie/afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 79,  187 => 75,  185 => 74,  181 => 73,  177 => 72,  171 => 69,  167 => 68,  163 => 67,  160 => 66,  155 => 65,  153 => 64,  150 => 63,  148 => 62,  128 => 44,  118 => 40,  114 => 39,  110 => 38,  106 => 37,  100 => 33,  96 => 32,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'basebr.html.twig' %}



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

    <div class=\"chit-chat-heading\">
        La liste des Categories
    </div>
    <!--
<table border=\"2\">

    <tr>
        <td>Id categorie</td>
        <td>Nom categorie</td>
        <td>Update</td>
        <td>Delete</td>


    </tr>

    {% for x in listcategorie %}

        <tr>


            <td> {{x.idc}}</td>
            <td> {{x.nomc}}</td>
            <td><a href=\"{{ path('updateCategorie',{'idc':x.idc}) }}\">update</a></td>
            <td><a href=\"{{ path('deleteCategorie',{'idc':x.idc}) }}\">delete</a></td>
        </tr>

    {% endfor %}
</table>
-->
    <br>
    <input class=\"form-control\" id=\"myInput\" type=\"text\" placeholder=\"Rechercher..\">

    <div class=\"card\">

        <div class=\"card-block table-border-style\">
            <div class=\"table-responsive\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <td>#</td>
                        <th>ID</th>
                        <th>Nom</th>
                        <th></th>
                    </tr>
                    </thead>
                    {% set count = 0 %}
                    <tbody id=\"myTable\">
                    {% set count = count+1 %}
                    {% for categorie in listcategorie %}
                        <tr>
                            <td>{{ count }}</td>
                            <td>{{ categorie.idc }}</td>
                            <td>{{ categorie.nomc }}</td>

                            <td>
                                <a href=\"{{ path(\"updateCategorie\",{'idc':categorie.idc}) }}\" ><i class=\"fa fa-edit\" style=\"font-size:18px\"></i></a>
                                <a href=\"{{ path(\"deleteCategorie\",{'idc':categorie.idc}) }}\" ><i class=\"fa fa-trash\" style=\"font-size:18px\"></i></a>
                                {% set count = count+1 %}

                            </td>
                        </tr>
                    {% endfor %}


                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock  %}", "categorie/afficher.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\categorie\\afficher.html.twig");
    }
}
