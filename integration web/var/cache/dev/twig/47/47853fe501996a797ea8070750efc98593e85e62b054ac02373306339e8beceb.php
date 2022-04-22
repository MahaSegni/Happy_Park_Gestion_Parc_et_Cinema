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

/* conge/search.html.twig */
class __TwigTemplate_828dff53d22f2a4a45a094118cb3f9618aed5a76ebc66371ebc1f4227cb28fc1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base4.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conge/search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conge/search.html.twig"));

        $this->parent = $this->loadTemplate("base4.html.twig", "conge/search.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"card-block table-border-style\">
    <div class=\"table-responsive\">
    <table class=\"table table-hover\">
<div class=\"chit-chat-heading\">liste conges</div>
    <tr>

        <td>date conge</td>
        <td>motif conge</td>
        <td>nombre jours conge</td>
        <td>id employe correspondant</td>


    </tr>
    <form method=\"post\" action=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tricon");
        echo "\">
        <label>trier par date</label>
       <input type=\"submit\" value=\"tri\" class=\"btn btn-success\">
    </form>
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listconge"]) || array_key_exists("listconge", $context) ? $context["listconge"] : (function () { throw new RuntimeError('Variable "listconge" does not exist.', 20, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 21
            echo "
        <tr>



            <td> ";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "dateconge", [], "any", false, false, false, 26), "Y-m-d"), "html", null, true);
            echo "</td>
            <td> ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "motifconge", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
            <td> ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "nbjourconge", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
            <td> ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "employe", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>








           <html>
             <head>
               <!--Load the AJAX API-->
               <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
               <script type=\"text/javascript\">

                 // Load the Visualization API and the corechart package.
                 google.charts.load('current', {'packages':['corechart']});

                 // Set a callback to run when the Google Visualization API is loaded.
                 google.charts.setOnLoadCallback(drawChart);

                 // Callback that creates and populates a data table,
                 // instantiates the pie chart, passes in the data and
                 // draws it.
                 function drawChart() {

                   // Create the data table.
                   var data = new google.visualization.DataTable();
                   data.addColumn('string', 'Topping');
                   data.addColumn('number', 'Slices');
                   ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listconge"]) || array_key_exists("listconge", $context) ? $context["listconge"] : (function () { throw new RuntimeError('Variable "listconge" does not exist.', 59, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                echo "data.addRows([
                                       ['nombrede jours de conges demandés pour l employe qui a une reference ";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "employe", [], "any", false, false, false, 60), "html", null, true);
                echo "',";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "nbjourconge", [], "any", false, false, false, 60), "html", null, true);
                echo "],
                                         ['nombre de jours limites permis ',60  ]
                                         ]);";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "
                   // Set chart options
                   var options = {'title':'statistique des jours de conges de maternité pour l employe qui a une reference ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "employe", [], "any", false, false, false, 65), "html", null, true);
            echo " : il faut que le nombre de jours de dépasse pas la moitié du diagramme! refusé sinon',
                                  'width':400,
                                  'height':300};

                   // Instantiate and draw our chart, passing in some options.
                   var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                   chart.draw(data, options);
                 }
               </script>


                  <!--Load the AJAX API-->
                              <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
                              <script type=\"text/javascript\">

                                // Load the Visualization API and the corechart package.
                                google.charts.load('current', {'packages':['corechart']});

                                // Set a callback to run when the Google Visualization API is loaded.
                                google.charts.setOnLoadCallback(drawChart);

                                // Callback that creates and populates a data table,
                                // instantiates the pie chart, passes in the data and
                                // draws it.
                                function drawChart() {

                                  // Create the data table.
                                  var data = new google.visualization.DataTable();
                                  data.addColumn('string', 'Topping');
                                  data.addColumn('number', 'Slices');
                                  ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listconge"]) || array_key_exists("listconge", $context) ? $context["listconge"] : (function () { throw new RuntimeError('Variable "listconge" does not exist.', 95, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
                echo "data.addRows([
                                                      ['statistiques des jours de conges pour l employe qui a une reference ";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "employe", [], "any", false, false, false, 96), "html", null, true);
                echo "',";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "nbjourconge", [], "any", false, false, false, 96), "html", null, true);
                echo "],
                                                        ['nbs de jours limites permis ', 30  ]
                                                        ]);";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "
                                  // Set chart options
                                  var options = {'title':'statistique des jours de conge annuel pour l employe qui a une reference ";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "employe", [], "any", false, false, false, 101), "html", null, true);
            echo " dans happy park: il faut que le nombre de jours de dépasse pas la moitié du diagramme! refusé sinon',
                                                 'width':400,
                                                 'height':300};

                                  // Instantiate and draw our chart, passing in some options.
                                  var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
                                  chart.draw(data, options);
                                }
                              </script>




             </head>

             <body>

               <!--Div that will hold the pie chart-->
            ";
            // line 122
            echo "                              <TABLE> <br><br><br><Td id=\"chart_div\"></Td>
                              <Td id=\"chart_div2\"></Td>
                              </TABLE>

             </body>
           </html>


















        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "

";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listconge"]) || array_key_exists("listconge", $context) ? $context["listconge"] : (function () { throw new RuntimeError('Variable "listconge" does not exist.', 151, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 152
            echo "<div>la reference du conge est ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "idconge", [], "any", false, false, false, 152), "html", null, true);
            echo "</div>    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "<form method=\"post\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contactautoconf");
        echo "\">
        <label>confirmer conge</label>
       <input type=\"submit\" value=\"confirmer\" class=\"btn btn-success\">
    </form>
    <form method=\"post\" action=\"";
        // line 157
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contactautoref");
        echo "\">
            <label>refuser conge</label>
           <input type=\"submit\" value=\"refuser\" class=\"btn btn-success\">
        </form>
    </table>
    </div></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "conge/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 157,  290 => 153,  282 => 152,  278 => 151,  274 => 149,  242 => 122,  221 => 101,  217 => 99,  206 => 96,  200 => 95,  167 => 65,  163 => 63,  152 => 60,  146 => 59,  113 => 29,  109 => 28,  105 => 27,  101 => 26,  94 => 21,  90 => 20,  83 => 16,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base4.html.twig' %}
{% block body %}
    <div class=\"card-block table-border-style\">
    <div class=\"table-responsive\">
    <table class=\"table table-hover\">
<div class=\"chit-chat-heading\">liste conges</div>
    <tr>

        <td>date conge</td>
        <td>motif conge</td>
        <td>nombre jours conge</td>
        <td>id employe correspondant</td>


    </tr>
    <form method=\"post\" action=\"{{ path ('tricon') }}\">
        <label>trier par date</label>
       <input type=\"submit\" value=\"tri\" class=\"btn btn-success\">
    </form>
    {% for x in listconge %}

        <tr>



            <td> {{x.dateconge|date('Y-m-d')}}</td>
            <td> {{x.motifconge}}</td>
            <td> {{x.nbjourconge}}</td>
            <td> {{x.employe}}</td>








           <html>
             <head>
               <!--Load the AJAX API-->
               <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
               <script type=\"text/javascript\">

                 // Load the Visualization API and the corechart package.
                 google.charts.load('current', {'packages':['corechart']});

                 // Set a callback to run when the Google Visualization API is loaded.
                 google.charts.setOnLoadCallback(drawChart);

                 // Callback that creates and populates a data table,
                 // instantiates the pie chart, passes in the data and
                 // draws it.
                 function drawChart() {

                   // Create the data table.
                   var data = new google.visualization.DataTable();
                   data.addColumn('string', 'Topping');
                   data.addColumn('number', 'Slices');
                   {% for x in listconge %}data.addRows([
                                       ['nombrede jours de conges demandés pour l employe qui a une reference {{x.employe}}',{{ x.nbjourconge  }}],
                                         ['nombre de jours limites permis ',60  ]
                                         ]);{% endfor %}

                   // Set chart options
                   var options = {'title':'statistique des jours de conges de maternité pour l employe qui a une reference {{x.employe}} : il faut que le nombre de jours de dépasse pas la moitié du diagramme! refusé sinon',
                                  'width':400,
                                  'height':300};

                   // Instantiate and draw our chart, passing in some options.
                   var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
                   chart.draw(data, options);
                 }
               </script>


                  <!--Load the AJAX API-->
                              <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
                              <script type=\"text/javascript\">

                                // Load the Visualization API and the corechart package.
                                google.charts.load('current', {'packages':['corechart']});

                                // Set a callback to run when the Google Visualization API is loaded.
                                google.charts.setOnLoadCallback(drawChart);

                                // Callback that creates and populates a data table,
                                // instantiates the pie chart, passes in the data and
                                // draws it.
                                function drawChart() {

                                  // Create the data table.
                                  var data = new google.visualization.DataTable();
                                  data.addColumn('string', 'Topping');
                                  data.addColumn('number', 'Slices');
                                  {% for x in listconge %}data.addRows([
                                                      ['statistiques des jours de conges pour l employe qui a une reference {{x.employe}}',{{ x.nbjourconge  }}],
                                                        ['nbs de jours limites permis ', 30  ]
                                                        ]);{% endfor %}

                                  // Set chart options
                                  var options = {'title':'statistique des jours de conge annuel pour l employe qui a une reference {{x.employe}} dans happy park: il faut que le nombre de jours de dépasse pas la moitié du diagramme! refusé sinon',
                                                 'width':400,
                                                 'height':300};

                                  // Instantiate and draw our chart, passing in some options.
                                  var chart = new google.visualization.PieChart(document.getElementById('chart_div2'));
                                  chart.draw(data, options);
                                }
                              </script>




             </head>

             <body>

               <!--Div that will hold the pie chart-->
            {#<div id=\"chart_div\" aligh=left ></div>
                   <!--Div that will hold the pie chart-->
                              <div id=\"chart_div2\" align=right ></div>#}
                              <TABLE> <br><br><br><Td id=\"chart_div\"></Td>
                              <Td id=\"chart_div2\"></Td>
                              </TABLE>

             </body>
           </html>


















        </tr>

    {% endfor %}


{% for x in listconge %}
<div>la reference du conge est {{x.idconge}}</div>    {% endfor %}
<form method=\"post\" action=\"{{ path ('contactautoconf') }}\">
        <label>confirmer conge</label>
       <input type=\"submit\" value=\"confirmer\" class=\"btn btn-success\">
    </form>
    <form method=\"post\" action=\"{{ path ('contactautoref') }}\">
            <label>refuser conge</label>
           <input type=\"submit\" value=\"refuser\" class=\"btn btn-success\">
        </form>
    </table>
    </div></div>
{% endblock  %}", "conge/search.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\conge\\search.html.twig");
    }
}
