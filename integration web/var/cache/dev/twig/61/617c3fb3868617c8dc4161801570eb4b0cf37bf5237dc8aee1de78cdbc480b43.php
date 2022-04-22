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

/* Event/Back/afficher.html.twig */
class __TwigTemplate_b977ca3a6cfc32c94ffe08d47f9acbeba0920c35461a93a4e0e2b7f23fbd2798 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'Event' => [$this, 'block_Event'],
            'Comment' => [$this, 'block_Comment'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseEvent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Event/Back/afficher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Event/Back/afficher.html.twig"));

        $this->parent = $this->loadTemplate("baseEvent.html.twig", "Event/Back/afficher.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_Event($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Event"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Event"));

        // line 3
        echo "
    <script src=\"";
        // line 4
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



<br/>
    <div class=\"content mt-3\">
        <div class=\"animated fadeIn\">
            <div class=\"row\">

                <input type=\"text\" id=\"search\" name=\"search\" class=\"form-control\" placeholder=\"Search\">
                <div class=\"col-md-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <table id=\"tableac\" class=\"table table-striped table-bordered\">
                                <thead>
                                <tr>
                                    <th>event name</th>
                                    <th>start date</th>
                                    <th>end date</th>
                                    <th>capacity</th>
                                    <th>place</th>
                                    <th>update</th>
                                    <th>delete</th>
                                    <th>print</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listevenement"]) || array_key_exists("listevenement", $context) ? $context["listevenement"] : (function () { throw new RuntimeError('Variable "listevenement" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 59
            echo "
                                <tr>
                                    <td> ";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "NomEvent", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                                    <td> ";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "DateEvent", [], "any", false, false, false, 62), "Y-m-d"), "html", null, true);
            echo "</td>
                                    <td> ";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "DateEventFin", [], "any", false, false, false, 63), "Y-m-d"), "html", null, true);
            echo "</td>
                                    <td> ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "Capacite", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                                    <td> ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "Emplacement", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>
                                    <td> <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateEvenement", ["id" => twig_get_attribute($this->env, $this->source, $context["x"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\"><button style=\"border-radius: 25px;\" type=\"button\" class=\"btn btn-success\">
                                                <i class=\"fa fa-pencil-square\"></i> </button></a></td>
                                    <td> <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteEvenement", ["id" => twig_get_attribute($this->env, $this->source, $context["x"], "id", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\"><button style=\"border-radius: 25px;\" type=\"button\" class=\"btn btn-danger\">
                                                <i class=\"fa fa-trash\"></i> </button></a></td>
                                    <td><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_pdf", ["nom" => twig_get_attribute($this->env, $this->source, $context["x"], "NomEvent", [], "any", false, false, false, 70), "Date" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "DateEvent", [], "any", false, false, false, 70), "Y-m-d"), "Date_Fin" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "DateEventFin", [], "any", false, false, false, 70), "Y-m-d"), "capacite" => twig_get_attribute($this->env, $this->source, $context["x"], "capacite", [], "any", false, false, false, 70), "emplacement" => twig_get_attribute($this->env, $this->source, $context["x"], "emplacement", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\"class=\"btn btn-outline-secondary btn-sm\"><i class=\"fa fa-download\"></i></a></td>



                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AjoutEvent");
        echo "\"><button type=\"button\" class=\"btn btn-primary\"> <i class=\"fa fa-plus-square\"></i> Add Event</button></a>

                </div>


            </div>
        </div><!-- .animated -->
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_Comment($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Comment"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Comment"));

        // line 91
        echo "



    <br/>
    <div class=\"content mt-3\">
        <div class=\"animated fadeIn\">
            <div class=\"row\">


                <div class=\"col-md-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <table id=\"bootstrap-data-table-export\" class=\"table table-striped table-bordered\">
                                <thead>
                                <tr>
                                    <th>nom User</th>
                                    <th>nom Event</th>
                                    <th>Content</th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listcomment"]) || array_key_exists("listcomment", $context) ? $context["listcomment"] : (function () { throw new RuntimeError('Variable "listcomment" does not exist.', 113, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 114
            echo "                                <tr>
                                    <td> ";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "user", [], "any", false, false, false, 115), "nom", [], "any", false, false, false, 115), "html", null, true);
            echo "</td>
                                    <td> ";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "event", [], "any", false, false, false, 116), "nomEvent", [], "any", false, false, false, 116), "html", null, true);
            echo "</td>
                                    <td> ";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "content", [], "any", false, false, false, 117), "html", null, true);
            echo "</td>
                                    <td> <a href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteComment", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 118)]), "html", null, true);
            echo "\"><button style=\"border-radius: 25px;\" type=\"button\" class=\"btn btn-danger\">
                                                <i class=\"fa fa-trash\"></i> </button></a></td>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Event/Back/afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 121,  257 => 118,  253 => 117,  249 => 116,  245 => 115,  242 => 114,  238 => 113,  214 => 91,  204 => 90,  185 => 80,  178 => 75,  167 => 70,  162 => 68,  157 => 66,  153 => 65,  149 => 64,  145 => 63,  141 => 62,  137 => 61,  133 => 59,  129 => 58,  72 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseEvent.html.twig' %}
{% block Event %}

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



<br/>
    <div class=\"content mt-3\">
        <div class=\"animated fadeIn\">
            <div class=\"row\">

                <input type=\"text\" id=\"search\" name=\"search\" class=\"form-control\" placeholder=\"Search\">
                <div class=\"col-md-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <table id=\"tableac\" class=\"table table-striped table-bordered\">
                                <thead>
                                <tr>
                                    <th>event name</th>
                                    <th>start date</th>
                                    <th>end date</th>
                                    <th>capacity</th>
                                    <th>place</th>
                                    <th>update</th>
                                    <th>delete</th>
                                    <th>print</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for x in listevenement %}

                                <tr>
                                    <td> {{x.NomEvent}}</td>
                                    <td> {{x.DateEvent|date('Y-m-d')}}</td>
                                    <td> {{x.DateEventFin|date('Y-m-d')}}</td>
                                    <td> {{x.Capacite}}</td>
                                    <td> {{x.Emplacement}}</td>
                                    <td> <a href=\"{{ path('updateEvenement',{'id':x.id}) }}\"><button style=\"border-radius: 25px;\" type=\"button\" class=\"btn btn-success\">
                                                <i class=\"fa fa-pencil-square\"></i> </button></a></td>
                                    <td> <a href=\"{{ path('deleteEvenement',{'id':x.id}) }}\"><button style=\"border-radius: 25px;\" type=\"button\" class=\"btn btn-danger\">
                                                <i class=\"fa fa-trash\"></i> </button></a></td>
                                    <td><a href=\"{{ path('event_pdf',{'nom':x.NomEvent,'Date':x.DateEvent|date('Y-m-d'),'Date_Fin':x.DateEventFin|date('Y-m-d'),'capacite':x.capacite,'emplacement':x.emplacement}) }}\"class=\"btn btn-outline-secondary btn-sm\"><i class=\"fa fa-download\"></i></a></td>



                                    {% endfor %}
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <a href=\"{{ path('AjoutEvent') }}\"><button type=\"button\" class=\"btn btn-primary\"> <i class=\"fa fa-plus-square\"></i> Add Event</button></a>

                </div>


            </div>
        </div><!-- .animated -->
    </div>
{% endblock  %}

{% block Comment %}




    <br/>
    <div class=\"content mt-3\">
        <div class=\"animated fadeIn\">
            <div class=\"row\">


                <div class=\"col-md-12\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <table id=\"bootstrap-data-table-export\" class=\"table table-striped table-bordered\">
                                <thead>
                                <tr>
                                    <th>nom User</th>
                                    <th>nom Event</th>
                                    <th>Content</th>
                                </tr>
                                </thead>
                                <tbody>
                                {% for c in listcomment %}
                                <tr>
                                    <td> {{c.user.nom}}</td>
                                    <td> {{c.event.nomEvent}}</td>
                                    <td> {{c.content}}</td>
                                    <td> <a href=\"{{ path('deleteComment',{'id':c.id}) }}\"><button style=\"border-radius: 25px;\" type=\"button\" class=\"btn btn-danger\">
                                                <i class=\"fa fa-trash\"></i> </button></a></td>
                                    {% endfor %}
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div><!-- .animated -->
    </div>


{% endblock  %}", "Event/Back/afficher.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\Event\\Back\\afficher.html.twig");
    }
}
