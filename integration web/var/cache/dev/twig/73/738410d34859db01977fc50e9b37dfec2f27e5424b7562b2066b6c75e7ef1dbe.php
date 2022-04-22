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

/* equipement/listE */
class __TwigTemplate_697469d61a27b7b0ae32d0555a8f9fbf730ee7ad46ec4a8db5ac0b7d82a9f789 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'equi' => [$this, 'block_equi'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baserec.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipement/listE"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipement/listE"));

        $this->parent = $this->loadTemplate("baserec.html.twig", "equipement/listE", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_equi($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "equi"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "equi"));

        // line 3
        echo "<div ";
        echo ">
<div ";
        // line 4
        echo ">

    <div class=\"header-left\">

        <div align=\"center\">
            <h2>Liste des Equipements </h2>
        </div>

        <table>
            <tr>
                <td>
                    <div width=\"200%\">
                        <form method=\"post\" id=\"contactForm\" action=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rechercherec");
        echo "\" id=\"search_form_1\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                        <div class=\"search_item\">
                            <div style='align-content: center'>
                                <div class=\"col-md-8 col-sm-8\">
                                    prix d'entrée 1 :
                                    <input type=\"number\" placeholder=\"Search1...\" required=\"\" name=\"search1\"></br>

                                    prix d'entrée 2 :
                                    <input type=\"number\" placeholder=\"Search2...\" required=\"\" name=\"search2\">

                                    <input type=\"submit\" value=\"rechercherrec\"  class=\"btn btn-success\">
                                </div>
                            </div>
                        </div>
                        </form>
                        ";
        // line 35
        echo "                    </div><!--//end-search-box-->
                </td>
                <td>
                    <form  action=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("triE");
        echo "\">
                        <button>
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"50\" height=\"40\" fill=\"currentColor\" class=\"bi bi-sort-down-alt\" viewBox=\"0 0 16 16\" >
                                <path d=\"M3.5 3.5a.5.5 0 0 0-1 0v8.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L3.5 12.293V3.5zm4 .5a.5.5 0 0 1 0-1h1a.5.5 0 0 1 0 1h-1zm0 3a.5.5 0 0 1 0-1h3a.5.5 0 0 1 0 1h-3zm0 3a.5.5 0 0 1 0-1h5a.5.5 0 0 1 0 1h-5zM7 12.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5z\"/>
                            </svg>
                        </button>
                    </form>
                    <div class=\"clearfix\"> </div>

                </td>
            </tr>
        </table>
        <div  class=\"table-responsive\" style=\"width: 200%\">
            <table class=\"table table-hover\" style=\"width: 200%\" >
                <thead>
                <tr>
                    <th >Reference</th>
                    <th>Nom Equipement  </th>
                    <th>Prix Equipement  </th>
                    <th>Equipement date  </th>
                    <th >Num Salle Cinema</th>
                    <th >Resto</th>
                    <th class=\"column-title no-link last\"><span class=\"nobr\">Update</span></th>
                    <th class=\"column-title no-link last\"><span class=\"nobr\">Delete</span></th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["equipement"]) || array_key_exists("equipement", $context) ? $context["equipement"] : (function () { throw new RuntimeError('Variable "equipement" does not exist.', 65, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 66
            echo "                    <tr>
                        <td> ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "ref", [], "any", false, false, false, 67), "html", null, true);
            echo " </td>
                        <td> ";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "nome", [], "any", false, false, false, 68), "html", null, true);
            echo " </td>
                        <td> ";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "prix", [], "any", false, false, false, 69), "html", null, true);
            echo " </td>
                        <td> ";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "dates", [], "any", false, false, false, 70), "d/m/y"), "html", null, true);
            echo " </td>
                        <td> ";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "cinema", [], "any", false, false, false, 71), "html", null, true);
            echo " </td>
                        <td> ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "resto", [], "any", false, false, false, 72), "html", null, true);
            echo " </td>
                        <td><a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update", ["id" => twig_get_attribute($this->env, $this->source, $context["x"], "id", [], "any", false, false, false, 73)]), "html", null, true);
            echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" fill=\"currentColor\" class=\"bi bi-menu-up\" viewBox=\"0 0 16 16\">
                                    <path d=\"M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z\"/>
                                </svg></a></td>
                        <td><a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("suppe", ["id" => twig_get_attribute($this->env, $this->source, $context["x"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" fill=\"currentColor\" class=\"bi bi-basket\" viewBox=\"0 0 16 16\">
                                    <path d=\"M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z\"/>
                                </svg></a></td>


                    </tr>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "                </tbody>
            </table>
        </div>

    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "equipement/listE";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 84,  176 => 76,  170 => 73,  166 => 72,  162 => 71,  158 => 70,  154 => 69,  150 => 68,  146 => 67,  143 => 66,  139 => 65,  109 => 38,  104 => 35,  86 => 16,  72 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baserec.html.twig' %}
{% block equi %}
<div {# class=\"chit-chat-layer1\" #}>
<div {# class=\"col-md-6 chit-chat-layer1-left\"#}>

    <div class=\"header-left\">

        <div align=\"center\">
            <h2>Liste des Equipements </h2>
        </div>

        <table>
            <tr>
                <td>
                    <div width=\"200%\">
                        <form method=\"post\" id=\"contactForm\" action=\"{{ path('rechercherec') }}\" id=\"search_form_1\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                        <div class=\"search_item\">
                            <div style='align-content: center'>
                                <div class=\"col-md-8 col-sm-8\">
                                    prix d'entrée 1 :
                                    <input type=\"number\" placeholder=\"Search1...\" required=\"\" name=\"search1\"></br>

                                    prix d'entrée 2 :
                                    <input type=\"number\" placeholder=\"Search2...\" required=\"\" name=\"search2\">

                                    <input type=\"submit\" value=\"rechercherrec\"  class=\"btn btn-success\">
                                </div>
                            </div>
                        </div>
                        </form>
                        {#  <form  method=\"post\" action=\"{{ path('search') }}\">
                        <input type=\"text\" placeholder=\"Search...\" required=\"\" name=\"search\">
                        <input type=\"submit\" value=\"Search\">
                       </form>#}
                    </div><!--//end-search-box-->
                </td>
                <td>
                    <form  action=\"{{ path('triE') }}\">
                        <button>
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"50\" height=\"40\" fill=\"currentColor\" class=\"bi bi-sort-down-alt\" viewBox=\"0 0 16 16\" >
                                <path d=\"M3.5 3.5a.5.5 0 0 0-1 0v8.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L3.5 12.293V3.5zm4 .5a.5.5 0 0 1 0-1h1a.5.5 0 0 1 0 1h-1zm0 3a.5.5 0 0 1 0-1h3a.5.5 0 0 1 0 1h-3zm0 3a.5.5 0 0 1 0-1h5a.5.5 0 0 1 0 1h-5zM7 12.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5z\"/>
                            </svg>
                        </button>
                    </form>
                    <div class=\"clearfix\"> </div>

                </td>
            </tr>
        </table>
        <div  class=\"table-responsive\" style=\"width: 200%\">
            <table class=\"table table-hover\" style=\"width: 200%\" >
                <thead>
                <tr>
                    <th >Reference</th>
                    <th>Nom Equipement  </th>
                    <th>Prix Equipement  </th>
                    <th>Equipement date  </th>
                    <th >Num Salle Cinema</th>
                    <th >Resto</th>
                    <th class=\"column-title no-link last\"><span class=\"nobr\">Update</span></th>
                    <th class=\"column-title no-link last\"><span class=\"nobr\">Delete</span></th>
                </tr>
                </thead>
                <tbody>
                {% for x in equipement %}
                    <tr>
                        <td> {{ x.ref}} </td>
                        <td> {{ x.nome }} </td>
                        <td> {{ x.prix }} </td>
                        <td> {{ x.dates|date(\"d/m/y\") }} </td>
                        <td> {{ x.cinema }} </td>
                        <td> {{ x.resto }} </td>
                        <td><a href=\"{{ path(\"update\", {'id':x.id}) }}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" fill=\"currentColor\" class=\"bi bi-menu-up\" viewBox=\"0 0 16 16\">
                                    <path d=\"M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793l1.853 1.854zM1 9V6h14v3H1zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2h14zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5zm0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5z\"/>
                                </svg></a></td>
                        <td><a href=\"{{ path(\"suppe\", {'id':x.id}) }}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" fill=\"currentColor\" class=\"bi bi-basket\" viewBox=\"0 0 16 16\">
                                    <path d=\"M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z\"/>
                                </svg></a></td>


                    </tr>

                {% endfor %}
                </tbody>
            </table>
        </div>

    </div>



{% endblock %}", "equipement/listE", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\equipement\\listE");
    }
}
