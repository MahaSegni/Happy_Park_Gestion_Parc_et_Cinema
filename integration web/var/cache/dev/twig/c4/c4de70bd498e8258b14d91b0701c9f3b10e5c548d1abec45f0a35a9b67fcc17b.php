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

/* base2.html.twig */
class __TwigTemplate_51d08a0ca5d8d477e21f804c79520a9f40de43ff8e5dc7f9ff913f156607f914 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base2.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
     <title>Admin  | Home </title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
        ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 228
        echo "

<body><div class=\"page-container\">
    <div class=\"left-content\">
        <div class=\"mother-grid-inner\">
            <!--header start here-->
            <div class=\"header-main\">
                <div class=\"header-left\">
                    <div class=\"logo-name\">
                        <a href=\"index.html.twig\"> <h1>Happy Park</h1>
                            <!--<img id=\"logo\" src=\"\" alt=\"Logo\"/>-->
                        </a>
                    </div>

                    <div class=\"clearfix\"> </div>
                </div>
                <div class=\"header-right\">
                    <div class=\"profile_details_left\"><!--notifications of menu start -->

                        <div class=\"clearfix\"> </div>
                    </div>
                    <!--notification menu end -->

                    <div class=\"clearfix\"> </div>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
            <!--heder end here-->
            <!-- script-for sticky-nav -->
            <script>
                \$(document).ready(function() {
                    var navoffeset=\$(\".header-main\").offset().top;
                    \$(window).scroll(function(){
                        var scrollpos=\$(window).scrollTop();
                        if(scrollpos >=navoffeset){
                            \$(\".header-main\").addClass(\"fixed\");
                        }else{
                            \$(\".header-main\").removeClass(\"fixed\");
                        }
                    });

                });
            </script>
            <!-- /script-for sticky-nav -->
            <!--inner block start here-->
            <div class=\"inner-block\">
                <!--market updates updates-->
                <div class=\"market-updates\">
                    <div class=\"col-md-4 market-update-gd\">
                        <div class=\"market-update-block clr-block-1\">
                            <div class=\"col-md-8 market-update-left\">
                                <h3>83</h3>
                                <h4>Registered User</h4>
                                <p>Other hand, we denounce</p>
                            </div>
                            <div class=\"col-md-4 market-update-right\">
                                <i class=\"fa fa-file-text-o\"> </i>
                            </div>
                            <div class=\"clearfix\"> </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 market-update-gd\">
                        <div class=\"market-update-block clr-block-2\">
                            <div class=\"col-md-8 market-update-left\">
                                <h3>135</h3>
                                <h4>Daily Visitors</h4>
                                <p>Other hand, we denounce</p>
                            </div>
                            <div class=\"col-md-4 market-update-right\">
                                <i class=\"fa fa-eye\"> </i>
                            </div>
                            <div class=\"clearfix\"> </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 market-update-gd\">
                        <div class=\"market-update-block clr-block-3\">
                            <div class=\"col-md-8 market-update-left\">
                                <h3>23</h3>
                                <h4>New Messages</h4>
                                <p>Other hand, we denounce</p>
                            </div>
                            <div class=\"col-md-4 market-update-right\">
                                <i class=\"fa fa-envelope-o\"> </i>
                            </div>
                            <div class=\"clearfix\"> </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <!--market updates end here-->
                <!--mainpage chit-chating-->
                <div class=\"chit-chat-layer1\">
                    <div class=\"col-md-6 chit-chat-layer1-left\">
                        <div class=\"work-progres\">
                            <div class=\"chit-chat-heading\">

                            </div>
                            <div class=\"table-responsive\">
                                <table class=\"table table-hover\">

                                    ";
        // line 328
        $this->displayBlock('title', $context, $blocks);
        // line 329
        echo "                                    ";
        $this->displayBlock('body', $context, $blocks);
        // line 330
        echo "

                                </table>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 chit-chat-layer1-rit\">
                        <div class=\"geo-chart\">
                            <section id=\"charts1\" class=\"charts\">
                                <div class=\"wrapper-flex\">

                                    <table id=\"myTable\" class=\"geoChart tableChart data-table col-table\" style=\"display:none;\">
                                        <caption>Student Nationalities Table</caption>
                                        <tr>
                                            <th scope=\"col\" data-type=\"string\">Country</th>
                                            <th scope=\"col\" data-type=\"number\">Number of Students</th>
                                            <th scope=\"col\" data-role=\"annotation\">Annotation</th>
                                        </tr>
                                        <tr>
                                            <td>China</td>
                                            <td align=\"right\">20</td>
                                            <td align=\"right\">20</td>
                                        </tr>
                                        <tr>
                                            <td>Colombia</td>
                                            <td align=\"right\">5</td>
                                            <td align=\"right\">5</td>
                                        </tr>
                                        <tr>
                                            <td>France</td>
                                            <td align=\"right\">3</td>
                                            <td align=\"right\">3</td>
                                        </tr>
                                        <tr>
                                            <td>Italy</td>
                                            <td align=\"right\">1</td>
                                            <td align=\"right\">1</td>
                                        </tr>
                                        <tr>
                                            <td>Japan</td>
                                            <td align=\"right\">18</td>
                                            <td align=\"right\">18</td>
                                        </tr>
                                        <tr>
                                            <td>Kazakhstan</td>
                                            <td align=\"right\">1</td>
                                            <td align=\"right\">1</td>
                                        </tr>
                                        <tr>
                                            <td>Mexico</td>
                                            <td align=\"right\">1</td>
                                            <td align=\"right\">1</td>
                                        </tr>
                                        <tr>
                                            <td>Poland</td>
                                            <td align=\"right\">1</td>
                                            <td align=\"right\">1</td>
                                        </tr>
                                        <tr>
                                            <td>Russia</td>
                                            <td align=\"right\">11</td>
                                            <td align=\"right\">11</td>
                                        </tr>
                                        <tr>
                                            <td>Spain</td>
                                            <td align=\"right\">2</td>
                                            <td align=\"right\">2</td>
                                        </tr>
                                        <tr>
                                            <td>Tanzania</td>
                                            <td align=\"right\">1</td>
                                            <td align=\"right\">1</td>
                                        </tr>
                                        <tr>
                                            <td>Turkey</td>
                                            <td align=\"right\">2</td>
                                            <td align=\"right\">2</td>
                                        </tr>

                                    </table>

                                    <div class=\"col geo_main\">
                                        <h3 id=\"geoChartTitle\">World Market</h3>
                                        <div id=\"geoChart\" class=\"chart\"> </div>
                                    </div>


                                </div><!-- .wrapper-flex -->
                            </section>
                        </div>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <!--main page chit chating end here-->
                <!--main page chart start here-->

                <!--main page chart layer2-->


                <!--climate start here-->
                <div class=\"climate\">
                    <div class=\"col-md-4 climate-grids\">
                        <div class=\"climate-grid1\">
                            <div class=\"climate-gd1-top\">
                                <div class=\"col-md-6 climate-gd1top-left\">
                                    <h4>Aprill 6-wed</h4>
                                    <h3>12:30<span class=\"timein-pms\">PM</span></h3>
                                    <p>Humidity:</p>
                                    <p>Sunset:</p>
                                    <p>Sunrise:</p>
                                </div>
                                <div class=\"col-md-6 climate-gd1top-right\">
\t\t\t\t\t  <span class=\"clime-icon\">
\t\t\t\t\t  \t<figure class=\"icons\">
\t\t\t\t\t\t\t\t<canvas id=\"partly-cloudy-day\" width=\"64\" height=\"64\">
\t\t\t\t\t\t\t\t</canvas>
\t\t\t\t\t\t\t</figure>

\t\t\t\t   </span>
                                    <p>88%</p>
                                    <p>5:40PM</p>
                                    <p>6:30AM</p>
                                </div>
                                <div class=\"clearfix\"> </div>
                            </div>
                            <div class=\"climate-gd1-bottom\">
                                <div class=\"col-md-4 cloudy1\">
                                    <h4>Hongkong</h4>
                                    <figure class=\"icons\">
                                        <canvas id=\"sleet\" width=\"58\" height=\"58\">
                                        </canvas>
                                    </figure>

                                    <h3>10c</h3>
                                </div>
                                <div class=\"col-md-4 cloudy1\">
                                    <h4>UK</h4>
                                    <figure class=\"icons\">
                                        <canvas id=\"cloudy\" width=\"58\" height=\"58\"></canvas>
                                    </figure>

                                    <h3>6c</h3>
                                </div>
                                <div class=\"col-md-4 cloudy1\">
                                    <h4>USA</h4>
                                    <figure class=\"icons\">
                                        <canvas id=\"snow\" width=\"58\" height=\"58\">
                                        </canvas>
                                    </figure>

                                    <h3>10c</h3>
                                </div>
                                <div class=\"clearfix\"> </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 climate-grids\">
                        <div class=\"climate-grid2\">
                            <span class=\"shoppy-rate\"><h4>\$180</h4></span>
                            <ul>
                                <li> <i class=\"fa fa-credit-card\"> </i> </li>
                                <li> <i class=\"fa fa-usd\"> </i> </li>
                            </ul>
                        </div>
                        <div class=\"shoppy\">
                            <h3>Those Who Hate Shopping?</h3>
                        </div>
                    </div>
                    <div class=\"col-md-4 climate-grids\">
                        <div class=\"climate-grid3\">
                            <div class=\"popular-brand\">
                                <div class=\"col-md-6 popular-bran-left\">
                                    <h3>Popular</h3>
                                    <h4>Brand of this month</h4>
                                    <p> Duis aute irure  in reprehenderit.</p>
                                </div>
                                <div class=\"col-md-6 popular-bran-right\">
                                    <h3>Polo</h3>
                                </div>
                                <div class=\"clearfix\"> </div>
                            </div>
                            <div class=\"popular-follow\">
                                <div class=\"col-md-6 popular-follo-left\">
                                    <p>Lorem ipsum dolor sit amet, adipiscing elit.</p>
                                </div>
                                <div class=\"col-md-6 popular-follo-right\">
                                    <h4>Follower</h4>
                                    <h5>2892</h5>
                                </div>
                                <div class=\"clearfix\"> </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <!--climate end here-->
            </div>
            <!--inner block end here-->
            <!--copy rights start here-->
            <div class=\"copyrights\">
                <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href=\"http://w3layouts.com/\" target=\"_blank\">W3layouts</a> </p>
            </div>
            <!--COPY rights end here-->
        </div>
    </div>
    <!--slider menu-->

</div>

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "    <head>
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        <!-- Custom Theme files -->
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
        <!--icons-css-->
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--Google Fonts-->
        <link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        echo "        <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\"></script>
        <!--static chart-->
        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/Chart.min.js"), "html", null, true);
        echo "\"></script>
        <!--//charts-->
        <!-- geo chart -->
        <!-- <script src=\"//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js\" type=\"text/javascript\"></script>
         <script>window.modernizr || document.write('<script src=\"lib/modernizr/modernizr-custom.js\"><\\/script>')</script>-->
        <!--<script src=\"lib/html5shiv/html5shiv.js\"></script>-->
        <!-- Chartinator  -->
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/chartinator.js"), "html", null, true);
        echo "\" ></script>
        <script type=\"text/javascript\">
            jQuery(function (\$) {

                const chart3 = \$('#geoChart').chartinator({
                    tableSel: '.geoChart',

                    columns: [{role: 'tooltip', type: 'string'}],

                    colIndexes: [2],

                    rows: [
                        ['China - 2015'],
                        ['Colombia - 2015'],
                        ['France - 2015'],
                        ['Italy - 2015'],
                        ['Japan - 2015'],
                        ['Kazakhstan - 2015'],
                        ['Mexico - 2015'],
                        ['Poland - 2015'],
                        ['Russia - 2015'],
                        ['Spain - 2015'],
                        ['Tanzania - 2015'],
                        ['Turkey - 2015']],

                    ignoreCol: [2],

                    chartType: 'GeoChart',

                    chartAspectRatio: 1.5,

                    chartZoom: 1.75,

                    chartOffset: [-12,0],

                    chartOptions: {

                        width: null,

                        backgroundColor: '#fff',

                        datalessRegionColor: '#F5F5F5',

                        region: 'world',

                        resolution: 'countries',

                        legend: 'none',

                        colorAxis: {

                            colors: ['#679CCA', '#337AB7']
                        },
                        tooltip: {

                            trigger: 'focus',

                            isHtml: true
                        }
                    }


                });
            });
        </script>
        <!--geo chart-->

        <!--skycons-icons-->
        <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/skycons.js"), "html", null, true);
        echo "\"></script>
        <!--//skycons-icons-->
        <script>
            let toggle = true;

            \$(\".sidebar-icon\").click(function() {
                if (toggle)
                {
                    \$(\".page-container\").addClass(\"sidebar-collapsed\").removeClass(\"sidebar-collapsed-back\");
                    \$(\"#menu span\").css({\"position\":\"absolute\"});
                }
                else
                {
                    \$(\".page-container\").removeClass(\"sidebar-collapsed\").addClass(\"sidebar-collapsed-back\");
                    setTimeout(function() {
                        \$(\"#menu span\").css({\"position\":\"relative\"});
                    }, 400);
                }
                toggle = !toggle;
            });
        </script>
        <!--scrolling js-->
        <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
        <!--//scrolling js-->
        <script src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"> </script>
        <!-- mother grid end here-->
        <script>
            var barChartData = {
                labels : [\"Jan\",\"Feb\",\"Mar\",\"Apr\",\"May\",\"Jun\",\"jul\"],
                datasets : [
                    {
                        fillColor : \"#FC8213\",
                        data : [65,59,90,81,56,55,40]
                    },
                    {
                        fillColor : \"#337AB7\",
                        data : [28,48,40,19,96,27,100]
                    }
                ]

            };
            new Chart(document.getElementById(\"bar\").getContext(\"2d\")).Bar(barChartData);

        </script>
        <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bars.js"), "html", null, true);
        echo "\"></script>
        <script>
            var radarChartData = {
                labels : [\"\",\"\",\"\",\"\",\"\",\"\",\"\"],
                datasets : [
                    {
                        fillColor : \"rgba(104, 174, 0, 0.83)\",
                        strokeColor : \"#68ae00\",
                        pointColor : \"#68ae00\",
                        pointStrokeColor : \"#fff\",
                        data : [65,59,90,81,56,55,40]
                    },
                    {
                        fillColor : \"rgba(236, 133, 38, 0.82)\",
                        strokeColor : \"#ec8526\",
                        pointColor : \"#ec8526\",
                        pointStrokeColor : \"#fff\",
                        data : [28,48,40,19,96,27,100]
                    }
                ]

            };
            new Chart(document.getElementById(\"radar\").getContext(\"2d\")).Radar(radarChartData);
        </script>
        <script>
            var icons = new Skycons({\"color\": \"#fff\"}),
                list  = [
                    \"clear-night\", \"partly-cloudy-day\",
                    \"partly-cloudy-night\", \"cloudy\", \"rain\", \"sleet\", \"snow\", \"wind\",
                    \"fog\"
                ],
                i;

            for(i = list.length; i--; )
                icons.set(list[i], list[i]);

            icons.play();
        </script>
        <script>
            var icons = new Skycons({\"color\": \"#fff\"}),
                list  = [
                    \"clear-night\", \"clear-day\",
                    \"partly-cloudy-night\", \"cloudy\", \"rain\", \"sleet\", \"snow\", \"wind\",
                    \"fog\"
                ],
                i;

            for(i = list.length; i--; )
                icons.set(list[i], list[i]);

            icons.play();
        </script>
        <script>
            var icons = new Skycons({\"color\": \"#fff\"}),
                list  = [
                    \"clear-night\", \"cloudy\",
                    \"partly-cloudy-night\", \"cloudy\", \"rain\", \"sleet\", \"snow\", \"wind\",
                    \"fog\"
                ],
                i;

            for(i = list.length; i--; )
                icons.set(list[i], list[i]);

            icons.play();
        </script>
        <script>
            var icons = new Skycons({\"color\": \"#fff\"}),
                list  = [
                    \"clear-night\", \"clear-day\",
                    \"partly-cloudy-night\", \"cloudy\", \"rain\", \"sleet\", \"snow\", \"wind\",
                    \"fog\"
                ],
                i;

            for(i = list.length; i--; )
                icons.set(list[i], list[i]);

            icons.play();
        </script>
        <title></title>


    </head> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 328
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 329
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  698 => 329,  679 => 328,  585 => 144,  562 => 124,  557 => 122,  553 => 121,  528 => 99,  457 => 31,  447 => 24,  442 => 22,  439 => 21,  429 => 20,  413 => 13,  408 => 11,  403 => 9,  400 => 8,  390 => 7,  169 => 330,  166 => 329,  164 => 328,  62 => 228,  60 => 20,  57 => 19,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
     <title>Admin  | Home </title>
    {% block stylesheets %}
    <head>
        <link href=\"{{ asset( 'css/bootstrap.css')}}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        <!-- Custom Theme files -->
        <link href=\"{{ asset( 'css/style.css')}}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
        <!--icons-css-->
        <link href=\"{{ asset( 'css/font-awesome.css')}}\" rel=\"stylesheet\">
        <!--Google Fonts-->
        <link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>

        {% endblock %}

        {% block javascripts %}
        <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script src=\"{{ asset( 'js/jquery-2.1.1.min.js')}}\"></script>
        <!--static chart-->
        <script src=\"{{ asset( 'js/Chart.min.js')}}\"></script>
        <!--//charts-->
        <!-- geo chart -->
        <!-- <script src=\"//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js\" type=\"text/javascript\"></script>
         <script>window.modernizr || document.write('<script src=\"lib/modernizr/modernizr-custom.js\"><\\/script>')</script>-->
        <!--<script src=\"lib/html5shiv/html5shiv.js\"></script>-->
        <!-- Chartinator  -->
        <script src=\"{{ asset( 'js/chartinator.js')}}\" ></script>
        <script type=\"text/javascript\">
            jQuery(function (\$) {

                const chart3 = \$('#geoChart').chartinator({
                    tableSel: '.geoChart',

                    columns: [{role: 'tooltip', type: 'string'}],

                    colIndexes: [2],

                    rows: [
                        ['China - 2015'],
                        ['Colombia - 2015'],
                        ['France - 2015'],
                        ['Italy - 2015'],
                        ['Japan - 2015'],
                        ['Kazakhstan - 2015'],
                        ['Mexico - 2015'],
                        ['Poland - 2015'],
                        ['Russia - 2015'],
                        ['Spain - 2015'],
                        ['Tanzania - 2015'],
                        ['Turkey - 2015']],

                    ignoreCol: [2],

                    chartType: 'GeoChart',

                    chartAspectRatio: 1.5,

                    chartZoom: 1.75,

                    chartOffset: [-12,0],

                    chartOptions: {

                        width: null,

                        backgroundColor: '#fff',

                        datalessRegionColor: '#F5F5F5',

                        region: 'world',

                        resolution: 'countries',

                        legend: 'none',

                        colorAxis: {

                            colors: ['#679CCA', '#337AB7']
                        },
                        tooltip: {

                            trigger: 'focus',

                            isHtml: true
                        }
                    }


                });
            });
        </script>
        <!--geo chart-->

        <!--skycons-icons-->
        <script src=\"{{ asset( 'js/skycons.js')}}\"></script>
        <!--//skycons-icons-->
        <script>
            let toggle = true;

            \$(\".sidebar-icon\").click(function() {
                if (toggle)
                {
                    \$(\".page-container\").addClass(\"sidebar-collapsed\").removeClass(\"sidebar-collapsed-back\");
                    \$(\"#menu span\").css({\"position\":\"absolute\"});
                }
                else
                {
                    \$(\".page-container\").removeClass(\"sidebar-collapsed\").addClass(\"sidebar-collapsed-back\");
                    setTimeout(function() {
                        \$(\"#menu span\").css({\"position\":\"relative\"});
                    }, 400);
                }
                toggle = !toggle;
            });
        </script>
        <!--scrolling js-->
        <script src=\"{{ asset( 'js/jquery.nicescroll.js')}}\"></script>
        <script src=\"{{ asset( 'js/scripts.js')}}\"></script>
        <!--//scrolling js-->
        <script src=\"{{ asset( 'js/bootstrap.js')}}\"> </script>
        <!-- mother grid end here-->
        <script>
            var barChartData = {
                labels : [\"Jan\",\"Feb\",\"Mar\",\"Apr\",\"May\",\"Jun\",\"jul\"],
                datasets : [
                    {
                        fillColor : \"#FC8213\",
                        data : [65,59,90,81,56,55,40]
                    },
                    {
                        fillColor : \"#337AB7\",
                        data : [28,48,40,19,96,27,100]
                    }
                ]

            };
            new Chart(document.getElementById(\"bar\").getContext(\"2d\")).Bar(barChartData);

        </script>
        <script src=\"{{ asset( 'js/bars.js')}}\"></script>
        <script>
            var radarChartData = {
                labels : [\"\",\"\",\"\",\"\",\"\",\"\",\"\"],
                datasets : [
                    {
                        fillColor : \"rgba(104, 174, 0, 0.83)\",
                        strokeColor : \"#68ae00\",
                        pointColor : \"#68ae00\",
                        pointStrokeColor : \"#fff\",
                        data : [65,59,90,81,56,55,40]
                    },
                    {
                        fillColor : \"rgba(236, 133, 38, 0.82)\",
                        strokeColor : \"#ec8526\",
                        pointColor : \"#ec8526\",
                        pointStrokeColor : \"#fff\",
                        data : [28,48,40,19,96,27,100]
                    }
                ]

            };
            new Chart(document.getElementById(\"radar\").getContext(\"2d\")).Radar(radarChartData);
        </script>
        <script>
            var icons = new Skycons({\"color\": \"#fff\"}),
                list  = [
                    \"clear-night\", \"partly-cloudy-day\",
                    \"partly-cloudy-night\", \"cloudy\", \"rain\", \"sleet\", \"snow\", \"wind\",
                    \"fog\"
                ],
                i;

            for(i = list.length; i--; )
                icons.set(list[i], list[i]);

            icons.play();
        </script>
        <script>
            var icons = new Skycons({\"color\": \"#fff\"}),
                list  = [
                    \"clear-night\", \"clear-day\",
                    \"partly-cloudy-night\", \"cloudy\", \"rain\", \"sleet\", \"snow\", \"wind\",
                    \"fog\"
                ],
                i;

            for(i = list.length; i--; )
                icons.set(list[i], list[i]);

            icons.play();
        </script>
        <script>
            var icons = new Skycons({\"color\": \"#fff\"}),
                list  = [
                    \"clear-night\", \"cloudy\",
                    \"partly-cloudy-night\", \"cloudy\", \"rain\", \"sleet\", \"snow\", \"wind\",
                    \"fog\"
                ],
                i;

            for(i = list.length; i--; )
                icons.set(list[i], list[i]);

            icons.play();
        </script>
        <script>
            var icons = new Skycons({\"color\": \"#fff\"}),
                list  = [
                    \"clear-night\", \"clear-day\",
                    \"partly-cloudy-night\", \"cloudy\", \"rain\", \"sleet\", \"snow\", \"wind\",
                    \"fog\"
                ],
                i;

            for(i = list.length; i--; )
                icons.set(list[i], list[i]);

            icons.play();
        </script>
        <title></title>


    </head> {% endblock %}


<body><div class=\"page-container\">
    <div class=\"left-content\">
        <div class=\"mother-grid-inner\">
            <!--header start here-->
            <div class=\"header-main\">
                <div class=\"header-left\">
                    <div class=\"logo-name\">
                        <a href=\"index.html.twig\"> <h1>Happy Park</h1>
                            <!--<img id=\"logo\" src=\"\" alt=\"Logo\"/>-->
                        </a>
                    </div>

                    <div class=\"clearfix\"> </div>
                </div>
                <div class=\"header-right\">
                    <div class=\"profile_details_left\"><!--notifications of menu start -->

                        <div class=\"clearfix\"> </div>
                    </div>
                    <!--notification menu end -->

                    <div class=\"clearfix\"> </div>
                </div>
                <div class=\"clearfix\"> </div>
            </div>
            <!--heder end here-->
            <!-- script-for sticky-nav -->
            <script>
                \$(document).ready(function() {
                    var navoffeset=\$(\".header-main\").offset().top;
                    \$(window).scroll(function(){
                        var scrollpos=\$(window).scrollTop();
                        if(scrollpos >=navoffeset){
                            \$(\".header-main\").addClass(\"fixed\");
                        }else{
                            \$(\".header-main\").removeClass(\"fixed\");
                        }
                    });

                });
            </script>
            <!-- /script-for sticky-nav -->
            <!--inner block start here-->
            <div class=\"inner-block\">
                <!--market updates updates-->
                <div class=\"market-updates\">
                    <div class=\"col-md-4 market-update-gd\">
                        <div class=\"market-update-block clr-block-1\">
                            <div class=\"col-md-8 market-update-left\">
                                <h3>83</h3>
                                <h4>Registered User</h4>
                                <p>Other hand, we denounce</p>
                            </div>
                            <div class=\"col-md-4 market-update-right\">
                                <i class=\"fa fa-file-text-o\"> </i>
                            </div>
                            <div class=\"clearfix\"> </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 market-update-gd\">
                        <div class=\"market-update-block clr-block-2\">
                            <div class=\"col-md-8 market-update-left\">
                                <h3>135</h3>
                                <h4>Daily Visitors</h4>
                                <p>Other hand, we denounce</p>
                            </div>
                            <div class=\"col-md-4 market-update-right\">
                                <i class=\"fa fa-eye\"> </i>
                            </div>
                            <div class=\"clearfix\"> </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 market-update-gd\">
                        <div class=\"market-update-block clr-block-3\">
                            <div class=\"col-md-8 market-update-left\">
                                <h3>23</h3>
                                <h4>New Messages</h4>
                                <p>Other hand, we denounce</p>
                            </div>
                            <div class=\"col-md-4 market-update-right\">
                                <i class=\"fa fa-envelope-o\"> </i>
                            </div>
                            <div class=\"clearfix\"> </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <!--market updates end here-->
                <!--mainpage chit-chating-->
                <div class=\"chit-chat-layer1\">
                    <div class=\"col-md-6 chit-chat-layer1-left\">
                        <div class=\"work-progres\">
                            <div class=\"chit-chat-heading\">

                            </div>
                            <div class=\"table-responsive\">
                                <table class=\"table table-hover\">

                                    {% block title %} {% endblock %}
                                    {% block body %} {% endblock %}


                                </table>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6 chit-chat-layer1-rit\">
                        <div class=\"geo-chart\">
                            <section id=\"charts1\" class=\"charts\">
                                <div class=\"wrapper-flex\">

                                    <table id=\"myTable\" class=\"geoChart tableChart data-table col-table\" style=\"display:none;\">
                                        <caption>Student Nationalities Table</caption>
                                        <tr>
                                            <th scope=\"col\" data-type=\"string\">Country</th>
                                            <th scope=\"col\" data-type=\"number\">Number of Students</th>
                                            <th scope=\"col\" data-role=\"annotation\">Annotation</th>
                                        </tr>
                                        <tr>
                                            <td>China</td>
                                            <td align=\"right\">20</td>
                                            <td align=\"right\">20</td>
                                        </tr>
                                        <tr>
                                            <td>Colombia</td>
                                            <td align=\"right\">5</td>
                                            <td align=\"right\">5</td>
                                        </tr>
                                        <tr>
                                            <td>France</td>
                                            <td align=\"right\">3</td>
                                            <td align=\"right\">3</td>
                                        </tr>
                                        <tr>
                                            <td>Italy</td>
                                            <td align=\"right\">1</td>
                                            <td align=\"right\">1</td>
                                        </tr>
                                        <tr>
                                            <td>Japan</td>
                                            <td align=\"right\">18</td>
                                            <td align=\"right\">18</td>
                                        </tr>
                                        <tr>
                                            <td>Kazakhstan</td>
                                            <td align=\"right\">1</td>
                                            <td align=\"right\">1</td>
                                        </tr>
                                        <tr>
                                            <td>Mexico</td>
                                            <td align=\"right\">1</td>
                                            <td align=\"right\">1</td>
                                        </tr>
                                        <tr>
                                            <td>Poland</td>
                                            <td align=\"right\">1</td>
                                            <td align=\"right\">1</td>
                                        </tr>
                                        <tr>
                                            <td>Russia</td>
                                            <td align=\"right\">11</td>
                                            <td align=\"right\">11</td>
                                        </tr>
                                        <tr>
                                            <td>Spain</td>
                                            <td align=\"right\">2</td>
                                            <td align=\"right\">2</td>
                                        </tr>
                                        <tr>
                                            <td>Tanzania</td>
                                            <td align=\"right\">1</td>
                                            <td align=\"right\">1</td>
                                        </tr>
                                        <tr>
                                            <td>Turkey</td>
                                            <td align=\"right\">2</td>
                                            <td align=\"right\">2</td>
                                        </tr>

                                    </table>

                                    <div class=\"col geo_main\">
                                        <h3 id=\"geoChartTitle\">World Market</h3>
                                        <div id=\"geoChart\" class=\"chart\"> </div>
                                    </div>


                                </div><!-- .wrapper-flex -->
                            </section>
                        </div>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <!--main page chit chating end here-->
                <!--main page chart start here-->

                <!--main page chart layer2-->


                <!--climate start here-->
                <div class=\"climate\">
                    <div class=\"col-md-4 climate-grids\">
                        <div class=\"climate-grid1\">
                            <div class=\"climate-gd1-top\">
                                <div class=\"col-md-6 climate-gd1top-left\">
                                    <h4>Aprill 6-wed</h4>
                                    <h3>12:30<span class=\"timein-pms\">PM</span></h3>
                                    <p>Humidity:</p>
                                    <p>Sunset:</p>
                                    <p>Sunrise:</p>
                                </div>
                                <div class=\"col-md-6 climate-gd1top-right\">
\t\t\t\t\t  <span class=\"clime-icon\">
\t\t\t\t\t  \t<figure class=\"icons\">
\t\t\t\t\t\t\t\t<canvas id=\"partly-cloudy-day\" width=\"64\" height=\"64\">
\t\t\t\t\t\t\t\t</canvas>
\t\t\t\t\t\t\t</figure>

\t\t\t\t   </span>
                                    <p>88%</p>
                                    <p>5:40PM</p>
                                    <p>6:30AM</p>
                                </div>
                                <div class=\"clearfix\"> </div>
                            </div>
                            <div class=\"climate-gd1-bottom\">
                                <div class=\"col-md-4 cloudy1\">
                                    <h4>Hongkong</h4>
                                    <figure class=\"icons\">
                                        <canvas id=\"sleet\" width=\"58\" height=\"58\">
                                        </canvas>
                                    </figure>

                                    <h3>10c</h3>
                                </div>
                                <div class=\"col-md-4 cloudy1\">
                                    <h4>UK</h4>
                                    <figure class=\"icons\">
                                        <canvas id=\"cloudy\" width=\"58\" height=\"58\"></canvas>
                                    </figure>

                                    <h3>6c</h3>
                                </div>
                                <div class=\"col-md-4 cloudy1\">
                                    <h4>USA</h4>
                                    <figure class=\"icons\">
                                        <canvas id=\"snow\" width=\"58\" height=\"58\">
                                        </canvas>
                                    </figure>

                                    <h3>10c</h3>
                                </div>
                                <div class=\"clearfix\"> </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-4 climate-grids\">
                        <div class=\"climate-grid2\">
                            <span class=\"shoppy-rate\"><h4>\$180</h4></span>
                            <ul>
                                <li> <i class=\"fa fa-credit-card\"> </i> </li>
                                <li> <i class=\"fa fa-usd\"> </i> </li>
                            </ul>
                        </div>
                        <div class=\"shoppy\">
                            <h3>Those Who Hate Shopping?</h3>
                        </div>
                    </div>
                    <div class=\"col-md-4 climate-grids\">
                        <div class=\"climate-grid3\">
                            <div class=\"popular-brand\">
                                <div class=\"col-md-6 popular-bran-left\">
                                    <h3>Popular</h3>
                                    <h4>Brand of this month</h4>
                                    <p> Duis aute irure  in reprehenderit.</p>
                                </div>
                                <div class=\"col-md-6 popular-bran-right\">
                                    <h3>Polo</h3>
                                </div>
                                <div class=\"clearfix\"> </div>
                            </div>
                            <div class=\"popular-follow\">
                                <div class=\"col-md-6 popular-follo-left\">
                                    <p>Lorem ipsum dolor sit amet, adipiscing elit.</p>
                                </div>
                                <div class=\"col-md-6 popular-follo-right\">
                                    <h4>Follower</h4>
                                    <h5>2892</h5>
                                </div>
                                <div class=\"clearfix\"> </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"clearfix\"> </div>
                </div>
                <!--climate end here-->
            </div>
            <!--inner block end here-->
            <!--copy rights start here-->
            <div class=\"copyrights\">
                <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href=\"http://w3layouts.com/\" target=\"_blank\">W3layouts</a> </p>
            </div>
            <!--COPY rights end here-->
        </div>
    </div>
    <!--slider menu-->

</div>

</body>
</html>
", "base2.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\base2.html.twig");
    }
}
