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

/* avisclient/afficherRa.html.twig */
class __TwigTemplate_3f826d87ad4a42d1ed24bce2efeeaa04e1162216c16d15044fa1806efd4a58b8 extends Template
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
        return "base4.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avisclient/afficherRa.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avisclient/afficherRa.html.twig"));

        $this->parent = $this->loadTemplate("base4.html.twig", "avisclient/afficherRa.html.twig", 1);
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
        echo "



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

            data.addColumn('number', 'id');
            data.addColumn('number', 'avis');

            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            echo "data.addRows([
                [";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "rating", [], "any", false, false, false, 29), "html", null, true);
            echo "]
            ]);

            // Set chart options
            var options = {
                title: \"list des avis selon id abonnee  \",
                width: 800,
                height: 400,

                bars: 'horizontal', // Required for Material Bar Charts.
                series: {
                    0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
                    1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
                },
                axes: {
                    x: {
                        distance: {label: 'parsecs'}, // Bottom x-axis.
                        brightness: {side: 'top', label: 'apparent magnitude'} // Top x-axis.
                    }
                }

            };
            /* var options = {
                 title: \"List des avis selon id abonnee\",
                 width: 800,
                 chart: {
                     title: 'Nearby galaxies',
                     subtitle: 'distance on the left, brightness on the right'
                 },
                 bars: 'horizontal', // Required for Material Bar Charts.
                 series: {
                     0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
                     1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
                 },
                 axes: {
                     x: {
                         distance: {label: 'parsecs'}, // Bottom x-axis.
                         brightness: {side: 'top', label: 'apparent magnitude'} // Top x-axis.
                     }
                 }
             };*/

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>



<body>
<div class=\"card-block table-border-style\">
    <div class=\"table-responsive\">
        <table class=\"table table-hover\"><thead>
    <tr>
        <th>client</th>
        <th>description</th>
        <th>note</th>

    </tr>
            </thead><tbody>
    ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["list"]) || array_key_exists("list", $context) ? $context["list"] : (function () { throw new RuntimeError('Variable "list" does not exist.', 91, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 92
            echo "        <tr>
            <td> ";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "id", [], "any", false, false, false, 93), "html", null, true);
            echo "</td>
            <td> ";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "desc_r", [], "any", false, false, false, 94), "html", null, true);
            echo "</td>
            <td> ";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "rating", [], "any", false, false, false, 95), "html", null, true);
            echo "</td>

        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "</tbody>
</table>
<!--Div that will hold the pie chart-->
";
        // line 105
        echo "        <div id=\"chart_div\" style=\"weight:1000%\"></div>
    </div></div>
</body>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "avisclient/afficherRa.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 105,  199 => 99,  188 => 95,  184 => 94,  180 => 93,  177 => 92,  173 => 91,  152 => 72,  101 => 29,  95 => 28,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base4.html.twig' %}
{% block title %}




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

            data.addColumn('number', 'id');
            data.addColumn('number', 'avis');

            {% for x in list %}data.addRows([
                [{{x.id}}, {{ x.rating}}]
            ]);

            // Set chart options
            var options = {
                title: \"list des avis selon id abonnee  \",
                width: 800,
                height: 400,

                bars: 'horizontal', // Required for Material Bar Charts.
                series: {
                    0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
                    1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
                },
                axes: {
                    x: {
                        distance: {label: 'parsecs'}, // Bottom x-axis.
                        brightness: {side: 'top', label: 'apparent magnitude'} // Top x-axis.
                    }
                }

            };
            /* var options = {
                 title: \"List des avis selon id abonnee\",
                 width: 800,
                 chart: {
                     title: 'Nearby galaxies',
                     subtitle: 'distance on the left, brightness on the right'
                 },
                 bars: 'horizontal', // Required for Material Bar Charts.
                 series: {
                     0: { axis: 'distance' }, // Bind series 0 to an axis named 'distance'.
                     1: { axis: 'brightness' } // Bind series 1 to an axis named 'brightness'.
                 },
                 axes: {
                     x: {
                         distance: {label: 'parsecs'}, // Bottom x-axis.
                         brightness: {side: 'top', label: 'apparent magnitude'} // Top x-axis.
                     }
                 }
             };*/

            {% endfor %}
            // Instantiate and draw our chart, passing in some options.
            var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>



<body>
<div class=\"card-block table-border-style\">
    <div class=\"table-responsive\">
        <table class=\"table table-hover\"><thead>
    <tr>
        <th>client</th>
        <th>description</th>
        <th>note</th>

    </tr>
            </thead><tbody>
    {% for x in list %}
        <tr>
            <td> {{ x.id}}</td>
            <td> {{ x.desc_r}}</td>
            <td> {{ x.rating}}</td>

        </tr>

    {% endfor %}</tbody>
</table>
<!--Div that will hold the pie chart-->
{#<div id=\"chart_div\" aligh=left ></div>
                   <!--Div that will hold the pie chart-->
                              <div id=\"chart_div2\" align=right ></div>#}
        <div id=\"chart_div\" style=\"weight:1000%\"></div>
    </div></div>
</body>

{% endblock %}", "avisclient/afficherRa.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\avisclient\\afficherRa.html.twig");
    }
}
