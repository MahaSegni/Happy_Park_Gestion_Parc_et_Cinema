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

/* base.html.twig */
class __TwigTemplate_2939541f4168a52c71a5008c1aa951f1193f9c193c7b07ad88bac00fa1653df0 extends Template
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
            'body' => [$this, 'block_body'],
            'inner_block' => [$this, 'block_inner_block'],
            'zero' => [$this, 'block_zero'],
            'one' => [$this, 'block_one'],
            'two' => [$this, 'block_two'],
            'four' => [$this, 'block_four'],
            'three' => [$this, 'block_three'],
            'five' => [$this, 'block_five'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

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

";
        // line 230
        $this->displayBlock('body', $context, $blocks);
        
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



    </head> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 230
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "<body><div class=\"page-container\">
    <div class=\"left-content\">
        <div class=\"mother-grid-inner\">
            <!--header start here-->
            <div class=\"header-main\">
                <div class=\"header-left\">
                    <div class=\"logo-name\">
                        <a href=\"index.html.twig\"> <h1>Shoppy</h1>
                            <!--<img id=\"logo\" src=\"\" alt=\"Logo\"/>-->
                        </a>
                    </div>
                    <!--search-box-->
                    <div class=\"search-box\">
                        <form>
                            <input type=\"text\" placeholder=\"Search...\" required=\"\">
                            <input type=\"submit\" value=\"\">
                        </form>
                    </div><!--//end-search-box-->
                    <div class=\"clearfix\"> </div>
                </div>
                <div class=\"header-right\">
                    <div class=\"profile_details_left\"><!--notifications of menu start -->
                        <ul class=\"nofitications-dropdown\">
                            <li class=\"dropdown head-dpdn\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fa fa-envelope\"></i><span class=\"badge\">3</span></a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <div class=\"notification_header\">
                                            <h3>You have 3 new messages</h3>
                                        </div>
                                    </li>
                                    <li><a href=\"#\">
                                            <div class=\"user_img\"><img src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/p4.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                            <div class=\"notification_desc\">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </a></li>
                                    <li class=\"odd\"><a href=\"#\">
                                            <div class=\"user_img\"><img src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/p2.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                            <div class=\"notification_desc\">
                                                <p>Lorem ipsum dolor </p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </a></li>
                                    <li><a href=\"#\">
                                            <div class=\"user_img\"><img src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/p3.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                            <div class=\"notification_desc\">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </a></li>
                                    <li>
                                        <div class=\"notification_bottom\">
                                            <a href=\"#\">See all messages</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"dropdown head-dpdn\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fa fa-bell\"></i><span class=\"badge blue\">3</span></a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <div class=\"notification_header\">
                                            <h3>You have 3 new notification</h3>
                                        </div>
                                    </li>
                                    <li><a href=\"#\">
                                            <div class=\"user_img\"><img src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/p5.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                            <div class=\"notification_desc\">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </a></li>
                                    <li class=\"odd\"><a href=\"#\">
                                            <div class=\"user_img\"><img src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/p6.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                            <div class=\"notification_desc\">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </a></li>
                                    <li><a href=\"#\">
                                            <div class=\"user_img\"><img src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/p7.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                            <div class=\"notification_desc\">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </a></li>
                                    <li>
                                        <div class=\"notification_bottom\">
                                            <a href=\"#\">See all notifications</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"dropdown head-dpdn\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fa fa-tasks\"></i><span class=\"badge blue1\">9</span></a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <div class=\"notification_header\">
                                            <h3>You have 8 pending task</h3>
                                        </div>
                                    </li>
                                    <li><a href=\"#\">
                                            <div class=\"task-info\">
                                                <span class=\"task-desc\">Database update</span><span class=\"percentage\">40%</span>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                            <div class=\"progress progress-striped active\">
                                                <div class=\"bar yellow\" style=\"width:40%;\"></div>
                                            </div>
                                        </a></li>
                                    <li><a href=\"#\">
                                            <div class=\"task-info\">
                                                <span class=\"task-desc\">Dashboard done</span><span class=\"percentage\">90%</span>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                            <div class=\"progress progress-striped active\">
                                                <div class=\"bar green\" style=\"width:90%;\"></div>
                                            </div>
                                        </a></li>
                                    <li><a href=\"#\">
                                            <div class=\"task-info\">
                                                <span class=\"task-desc\">Mobile App</span><span class=\"percentage\">33%</span>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                            <div class=\"progress progress-striped active\">
                                                <div class=\"bar red\" style=\"width: 33%;\"></div>
                                            </div>
                                        </a></li>
                                    <li><a href=\"#\">
                                            <div class=\"task-info\">
                                                <span class=\"task-desc\">Issues fixed</span><span class=\"percentage\">80%</span>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                            <div class=\"progress progress-striped active\">
                                                <div class=\"bar  blue\" style=\"width: 80%;\"></div>
                                            </div>
                                        </a></li>
                                    <li>
                                        <div class=\"notification_bottom\">
                                            <a href=\"#\">See all pending tasks</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class=\"clearfix\"> </div>
                    </div>
                    <!--notification menu end -->
                    <div class=\"profile_details\">
                        <ul>
                            <li class=\"dropdown profile_details_drop\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <div class=\"profile_img\">
                                        <span class=\"prfil-img\"><img src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/p1.png"), "html", null, true);
        echo "\" alt=\"\"> </span>
                                        <div class=\"user-name\">
                                            <p>Malorum</p>
                                            <span>Administrator</span>
                                        </div>
                                        <i class=\"fa fa-angle-down lnr\"></i>
                                        <i class=\"fa fa-angle-up lnr\"></i>
                                        <div class=\"clearfix\"></div>
                                    </div>
                                </a>
                                <ul class=\"dropdown-menu drp-mnu\">
                                    <li> <a href=\"#\"><i class=\"fa fa-cog\"></i> Settings</a> </li>
                                    <li> <a href=\"#\"><i class=\"fa fa-user\"></i> Profile</a> </li>
                                    <li> <a href=\"#\"><i class=\"fa fa-sign-out\"></i> Logout</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
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
            ";
        // line 430
        $this->displayBlock('inner_block', $context, $blocks);
        // line 753
        echo "            <!--inner block end here-->
            <!--copy rights start here-->
            <div class=\"copyrights\">
                <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href=\"http://w3layouts.com/\" target=\"_blank\">W3layouts</a> </p>
            </div>
            <!--COPY rights end here-->
        </div>
    </div>
    <!--slider menu-->

    <div class=\"sidebar-menu\">
        <div class=\"logo\"> <a href=\"#\" class=\"sidebar-icon\"> <span class=\"fa fa-bars\"></span> </a> <a href=\"#\"> <span id=\"logo\" ></span>
                <!--<img id=\"logo\" src=\"\" alt=\"Logo\"/>-->
            </a> </div>
        <div class=\"menu\">
            <ul id=\"menu\" >
                <li id=\"menu-home\" ><a href=\"";
        // line 769
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cal");
        echo "\"><i class=\"fa fa-tachometer\"></i><span>Agenda</span></a></li>
                <li><a href=\"#\"><i class=\"fa fa-cogs\"></i><span>Components</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul>
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"";
        // line 772
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_new");
        echo "\">Ajouter rendez-vous</a></li>
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"";
        // line 773
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_index");
        echo "\">liste des rendez-vous</a></li>
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"";
        // line 774
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cal");
        echo "\">consulter agenda</a></li>

                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-cogs\"></i><span>Cinema</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul>
                        ";
        // line 781
        echo "                        <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affichercin");
        echo "\">Cinema   </a></li>
                        <li><a href=\"";
        // line 782
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherf");
        echo "\">Film   </a></li>
                        ";
        // line 784
        echo "                        <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherRa");
        echo "\">les avis </a></li>
                        ";
        // line 787
        echo "
                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-cogs\"></i><span>Employe</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul>
                        ";
        // line 795
        echo "                        <li id=\"menu-arquivos\" ><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher");
        echo "\">Afficher Employes</a></li>
                        ";
        // line 797
        echo "
                        ";
        // line 800
        echo "
                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-cogs\"></i><span>Conge</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul>
                        <li><a href=\"";
        // line 805
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherc");
        echo "\">Afficher Conges</a></li>
                        <li><a href=\"";
        // line 806
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addConge");
        echo "\">Ajouter Conge</a></li>


                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-car\"></i><span>Parking</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"";
        // line 813
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affReservation");
        echo "\">Reservation</a></li>
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"";
        // line 814
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ListeCellule");
        echo "\">cellule</a></li>



                    </ul>
                </li>
                <li id=\"menu-academico\" ><a href=\"#\"><i class=\"fa fa-file-text\"></i><span>Equipement</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li id=\"menu-academico-boletim\" ><a href=\"";
        // line 822
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listE");
        echo "\">Afficher Equipement</a></li>
                        <li id=\"menu-academico-boletim\" ><a href=\"";
        // line 823
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addE");
        echo "\">Ajouter Equipement</a></li>
                    </ul>
                </li>

                <li><a href=\"#\"><i class=\"fa fa-envelope\"></i><span>Reclamation</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li><a href=\"";
        // line 829
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listrec");
        echo "\">Afficher Reclamation</a></li>
                        <li><a href=\"";
        // line 830
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("statistiques");
        echo "\">Statistique Reclamation</a></li>
                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-envelope\"></i><span>Categorie & Plat</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li><a href=\"";
        // line 835
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherCat");
        echo "\">Categorie </a></li>
                        <li><a href=\"";
        // line 836
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addCategorie");
        echo "\">Ajouter une categorie</a></li>
                        <li><a href=\"";
        // line 837
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherPlat");
        echo "\">Plat </a></li>
                        <li><a href=\"";
        // line 838
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addPlat");
        echo "\">Ajouter un plat</a></li>
                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-envelope\"></i><span>Abonnement</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li><a href=\"";
        // line 843
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Afficheabo");
        echo "\">Abonne </a></li>
                        <li><a href=\"";
        // line 844
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficheTypeAbonnement");
        echo "\">Type abonnement</a></li>
                        <li><a href=\"";
        // line 845
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AddTypeAbonnement");
        echo "\">Ajout Type abonnement</a></li>
                        <li><a href=\"";
        // line 846
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_abonnement");
        echo "\">Abonnement</a></li>

                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-cogs\"></i><span>Evenement</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul>
                        <li><a href=\"";
        // line 852
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventBack");
        echo "\" >Liste des Evenement</a></li>
                        <li><a href=\"";
        // line 853
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AjoutEvent");
        echo "\" >ajouter des Evenement</a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class=\"clearfix\"> </div>
</div>

</body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 430
    public function block_inner_block($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inner_block"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "inner_block"));

        // line 431
        echo "                <!--inner block start here-->
                <div class=\"inner-block\">
                    <!--market updates updates-->
                    ";
        // line 434
        $this->displayBlock('zero', $context, $blocks);
        // line 476
        echo "                    <!--market updates end here-->
                    <!--mainpage chit-chating-->
                    <div class=\"chit-chat-layer1\">
                        <div class=\"col-md-6 chit-chat-layer1-left\">
                            ";
        // line 480
        $this->displayBlock('one', $context, $blocks);
        // line 493
        echo "                        </div>

                        <div class=\"col-md-6 chit-chat-layer1-rit\">
                            ";
        // line 496
        $this->displayBlock('two', $context, $blocks);
        // line 580
        echo "                        </div>
                        <div class=\"clearfix\"> </div>
                    </div>
                    <!--main page chit chating end here-->
                    <!--main page chart start here-->
                    ";
        // line 585
        $this->displayBlock('four', $context, $blocks);
        // line 623
        echo "                    <!--main page chart layer2-->
                    ";
        // line 624
        $this->displayBlock('three', $context, $blocks);
        // line 653
        echo "
                    <!--climate start here-->
                    ";
        // line 655
        $this->displayBlock('five', $context, $blocks);
        // line 751
        echo "                    <!--climate end here-->
                </div>  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 434
    public function block_zero($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zero"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zero"));

        // line 435
        echo "                        <div class=\"market-updates\">
                            <div class=\"col-md-4 market-update-gd\">
                                <div class=\"market-update-block clr-block-1\">
                                    <div class=\"col-md-8 market-update-left\">


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

                                        <h4><a href=\"";
        // line 452
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Afficheabo");
        echo "\">Abonne</a> </h4>

                                    </div>
                                    <div class=\"col-md-4 market-update-right\">
                                        <i class=\"fa fa-eye\"> </i>
                                    </div>
                                    <div class=\"clearfix\"> </div>
                                </div>
                            </div>
                            ";
        // line 474
        echo "                            <div class=\"clearfix\"> </div>
                        </div> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 480
    public function block_one($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "one"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "one"));

        // line 481
        echo "                                <div class=\"work-progres\">
                                    <div class=\"chit-chat-heading\">
                                        <!--liste des films-->
                                    </div>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-hover\">


                                        </table>
                                    </div>
                                </div>
                            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 496
    public function block_two($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "two"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "two"));

        // line 497
        echo "                                <div class=\"geo-chart\">
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
                                </div>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 585
    public function block_four($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "four"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "four"));

        // line 586
        echo "                        <div class=\"main-page-charts\">
                            <div class=\"main-page-chart-layer1\">
                                <div class=\"col-md-6 chart-layer1-left\">
                                    <div class=\"glocy-chart\">
                                        <div class=\"span-2c\">
                                            <h3 class=\"tlt\">Sales Analytics</h3>
                                            <canvas id=\"bar\" height=\"300\" width=\"400\" style=\"width: 400px; height: 300px;\"></canvas>

                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 chart-layer1-right\">
                                    <div class=\"user-marorm\">
                                        <div class=\"malorum-top\">
                                        </div>
                                        <div class=\"malorm-bottom\">
                                            <span class=\"malorum-pro\"> </span>
                                            <h4>unde omnis iste</h4>
                                            <h2>Melorum</h2>
                                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising.</p>
                                            <ul class=\"malorum-icons\">
                                                <li><a href=\"#\"><i class=\"fa fa-facebook\"> </i>
                                                        <div class=\"tooltip\"><span>Facebook</span></div>
                                                    </a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-twitter\"> </i>
                                                        <div class=\"tooltip\"><span>Twitter</span></div>
                                                    </a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-google-plus\"> </i>
                                                        <div class=\"tooltip\"><span>Google</span></div>
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"clearfix\"> </div>
                            </div>
                        </div> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 624
    public function block_three($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "three"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "three"));

        // line 625
        echo "                        <div class=\"chart-layer-2\">

                            <div class=\"col-md-6 chart-layer2-right\">
                                <div class=\"prograc-blocks\">
                                    <!--Progress bars-->
                                    <div class=\"home-progres-main\">
                                        <h3>Total Sales</h3>
                                    </div>
                                    <div class='bar_group'>
                                        <div class='bar_group__bar thin' label='Rating' show_values='true' tooltip='true' value='343'></div>
                                        <div class='bar_group__bar thin' label='Quality' show_values='true' tooltip='true' value='235'></div>
                                        <div class='bar_group__bar thin' label='Amount' show_values='true' tooltip='true' value='550'></div>
                                        <div class='bar_group__bar thin' label='Farming' show_values='true' tooltip='true' value='456'></div>
                                    </div>


                                    <!--//Progress bars-->
                                </div>
                            </div>
                            <div class=\"col-md-6 chart-layer2-left\">
                                <div class=\"content-main revenue\">
                                    <h3>Total Revenue</h3>
                                    <canvas id=\"radar\" height=\"300\" width=\"300\" style=\"width: 300px; height: 300px;\"></canvas>

                                </div>
                            </div>
                            <div class=\"clearfix\"> </div>
                        </div> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 655
    public function block_five($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "five"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "five"));

        echo "<div class=\"climate\">
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
                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1155 => 655,  1118 => 625,  1108 => 624,  1062 => 586,  1052 => 585,  960 => 497,  950 => 496,  929 => 481,  919 => 480,  908 => 474,  896 => 452,  877 => 435,  867 => 434,  856 => 751,  854 => 655,  850 => 653,  848 => 624,  845 => 623,  843 => 585,  836 => 580,  834 => 496,  829 => 493,  827 => 480,  821 => 476,  819 => 434,  814 => 431,  804 => 430,  781 => 853,  777 => 852,  768 => 846,  764 => 845,  760 => 844,  756 => 843,  748 => 838,  744 => 837,  740 => 836,  736 => 835,  728 => 830,  724 => 829,  715 => 823,  711 => 822,  700 => 814,  696 => 813,  686 => 806,  682 => 805,  675 => 800,  672 => 797,  667 => 795,  660 => 787,  655 => 784,  651 => 782,  646 => 781,  637 => 774,  633 => 773,  629 => 772,  623 => 769,  605 => 753,  603 => 430,  561 => 391,  484 => 317,  473 => 309,  462 => 301,  436 => 278,  425 => 270,  414 => 262,  371 => 230,  277 => 144,  254 => 124,  249 => 122,  245 => 121,  220 => 99,  149 => 31,  139 => 24,  134 => 22,  131 => 21,  121 => 20,  105 => 13,  100 => 11,  95 => 9,  92 => 8,  82 => 7,  72 => 230,  68 => 228,  66 => 20,  63 => 19,  61 => 7,  53 => 1,);
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



    </head> {% endblock %}


{% block body %}<body><div class=\"page-container\">
    <div class=\"left-content\">
        <div class=\"mother-grid-inner\">
            <!--header start here-->
            <div class=\"header-main\">
                <div class=\"header-left\">
                    <div class=\"logo-name\">
                        <a href=\"index.html.twig\"> <h1>Shoppy</h1>
                            <!--<img id=\"logo\" src=\"\" alt=\"Logo\"/>-->
                        </a>
                    </div>
                    <!--search-box-->
                    <div class=\"search-box\">
                        <form>
                            <input type=\"text\" placeholder=\"Search...\" required=\"\">
                            <input type=\"submit\" value=\"\">
                        </form>
                    </div><!--//end-search-box-->
                    <div class=\"clearfix\"> </div>
                </div>
                <div class=\"header-right\">
                    <div class=\"profile_details_left\"><!--notifications of menu start -->
                        <ul class=\"nofitications-dropdown\">
                            <li class=\"dropdown head-dpdn\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fa fa-envelope\"></i><span class=\"badge\">3</span></a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <div class=\"notification_header\">
                                            <h3>You have 3 new messages</h3>
                                        </div>
                                    </li>
                                    <li><a href=\"#\">
                                            <div class=\"user_img\"><img src=\"{{ asset( 'images/p4.png')}}\" alt=\"\"></div>
                                            <div class=\"notification_desc\">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </a></li>
                                    <li class=\"odd\"><a href=\"#\">
                                            <div class=\"user_img\"><img src=\"{{ asset( 'images/p2.png')}}\" alt=\"\"></div>
                                            <div class=\"notification_desc\">
                                                <p>Lorem ipsum dolor </p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </a></li>
                                    <li><a href=\"#\">
                                            <div class=\"user_img\"><img src=\"{{ asset( 'images/p3.png')}}\" alt=\"\"></div>
                                            <div class=\"notification_desc\">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </a></li>
                                    <li>
                                        <div class=\"notification_bottom\">
                                            <a href=\"#\">See all messages</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"dropdown head-dpdn\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fa fa-bell\"></i><span class=\"badge blue\">3</span></a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <div class=\"notification_header\">
                                            <h3>You have 3 new notification</h3>
                                        </div>
                                    </li>
                                    <li><a href=\"#\">
                                            <div class=\"user_img\"><img src=\"{{ asset( 'images/p5.png')}}\" alt=\"\"></div>
                                            <div class=\"notification_desc\">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </a></li>
                                    <li class=\"odd\"><a href=\"#\">
                                            <div class=\"user_img\"><img src=\"{{ asset( 'images/p6.png')}}\" alt=\"\"></div>
                                            <div class=\"notification_desc\">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </a></li>
                                    <li><a href=\"#\">
                                            <div class=\"user_img\"><img src=\"{{ asset( 'images/p7.png')}}\" alt=\"\"></div>
                                            <div class=\"notification_desc\">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </a></li>
                                    <li>
                                        <div class=\"notification_bottom\">
                                            <a href=\"#\">See all notifications</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"dropdown head-dpdn\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fa fa-tasks\"></i><span class=\"badge blue1\">9</span></a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <div class=\"notification_header\">
                                            <h3>You have 8 pending task</h3>
                                        </div>
                                    </li>
                                    <li><a href=\"#\">
                                            <div class=\"task-info\">
                                                <span class=\"task-desc\">Database update</span><span class=\"percentage\">40%</span>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                            <div class=\"progress progress-striped active\">
                                                <div class=\"bar yellow\" style=\"width:40%;\"></div>
                                            </div>
                                        </a></li>
                                    <li><a href=\"#\">
                                            <div class=\"task-info\">
                                                <span class=\"task-desc\">Dashboard done</span><span class=\"percentage\">90%</span>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                            <div class=\"progress progress-striped active\">
                                                <div class=\"bar green\" style=\"width:90%;\"></div>
                                            </div>
                                        </a></li>
                                    <li><a href=\"#\">
                                            <div class=\"task-info\">
                                                <span class=\"task-desc\">Mobile App</span><span class=\"percentage\">33%</span>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                            <div class=\"progress progress-striped active\">
                                                <div class=\"bar red\" style=\"width: 33%;\"></div>
                                            </div>
                                        </a></li>
                                    <li><a href=\"#\">
                                            <div class=\"task-info\">
                                                <span class=\"task-desc\">Issues fixed</span><span class=\"percentage\">80%</span>
                                                <div class=\"clearfix\"></div>
                                            </div>
                                            <div class=\"progress progress-striped active\">
                                                <div class=\"bar  blue\" style=\"width: 80%;\"></div>
                                            </div>
                                        </a></li>
                                    <li>
                                        <div class=\"notification_bottom\">
                                            <a href=\"#\">See all pending tasks</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class=\"clearfix\"> </div>
                    </div>
                    <!--notification menu end -->
                    <div class=\"profile_details\">
                        <ul>
                            <li class=\"dropdown profile_details_drop\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                                    <div class=\"profile_img\">
                                        <span class=\"prfil-img\"><img src=\"{{ asset( 'images/p1.png')}}\" alt=\"\"> </span>
                                        <div class=\"user-name\">
                                            <p>Malorum</p>
                                            <span>Administrator</span>
                                        </div>
                                        <i class=\"fa fa-angle-down lnr\"></i>
                                        <i class=\"fa fa-angle-up lnr\"></i>
                                        <div class=\"clearfix\"></div>
                                    </div>
                                </a>
                                <ul class=\"dropdown-menu drp-mnu\">
                                    <li> <a href=\"#\"><i class=\"fa fa-cog\"></i> Settings</a> </li>
                                    <li> <a href=\"#\"><i class=\"fa fa-user\"></i> Profile</a> </li>
                                    <li> <a href=\"#\"><i class=\"fa fa-sign-out\"></i> Logout</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
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
            {% block inner_block %}
                <!--inner block start here-->
                <div class=\"inner-block\">
                    <!--market updates updates-->
                    {% block zero %}
                        <div class=\"market-updates\">
                            <div class=\"col-md-4 market-update-gd\">
                                <div class=\"market-update-block clr-block-1\">
                                    <div class=\"col-md-8 market-update-left\">


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

                                        <h4><a href=\"{{ path ('Afficheabo')}}\">Abonne</a> </h4>

                                    </div>
                                    <div class=\"col-md-4 market-update-right\">
                                        <i class=\"fa fa-eye\"> </i>
                                    </div>
                                    <div class=\"clearfix\"> </div>
                                </div>
                            </div>
                            {#<div class=\"col-md-4 market-update-gd\">
                        <div class=\"market-update-block clr-block-3\">
                            <div class=\"col-md-8 market-update-left\">

                                 <h4><a href=\"{{ path ('updateCinema')}}\">Modifier une salle</a></h4>

                            </div>
                            <div class=\"col-md-4 market-update-right\">
                                <i class=\"fa fa-envelope-o\"> </i>
                            </div>
                            <div class=\"clearfix\"> </div>
                        </div>
                    </div>#}
                            <div class=\"clearfix\"> </div>
                        </div> {% endblock %}
                    <!--market updates end here-->
                    <!--mainpage chit-chating-->
                    <div class=\"chit-chat-layer1\">
                        <div class=\"col-md-6 chit-chat-layer1-left\">
                            {% block one %}
                                <div class=\"work-progres\">
                                    <div class=\"chit-chat-heading\">
                                        <!--liste des films-->
                                    </div>
                                    <div class=\"table-responsive\">
                                        <table class=\"table table-hover\">


                                        </table>
                                    </div>
                                </div>
                            {% endblock %}
                        </div>

                        <div class=\"col-md-6 chit-chat-layer1-rit\">
                            {% block two %}
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
                                </div>{% endblock  %}
                        </div>
                        <div class=\"clearfix\"> </div>
                    </div>
                    <!--main page chit chating end here-->
                    <!--main page chart start here-->
                    {% block four %}
                        <div class=\"main-page-charts\">
                            <div class=\"main-page-chart-layer1\">
                                <div class=\"col-md-6 chart-layer1-left\">
                                    <div class=\"glocy-chart\">
                                        <div class=\"span-2c\">
                                            <h3 class=\"tlt\">Sales Analytics</h3>
                                            <canvas id=\"bar\" height=\"300\" width=\"400\" style=\"width: 400px; height: 300px;\"></canvas>

                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6 chart-layer1-right\">
                                    <div class=\"user-marorm\">
                                        <div class=\"malorum-top\">
                                        </div>
                                        <div class=\"malorm-bottom\">
                                            <span class=\"malorum-pro\"> </span>
                                            <h4>unde omnis iste</h4>
                                            <h2>Melorum</h2>
                                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising.</p>
                                            <ul class=\"malorum-icons\">
                                                <li><a href=\"#\"><i class=\"fa fa-facebook\"> </i>
                                                        <div class=\"tooltip\"><span>Facebook</span></div>
                                                    </a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-twitter\"> </i>
                                                        <div class=\"tooltip\"><span>Twitter</span></div>
                                                    </a></li>
                                                <li><a href=\"#\"><i class=\"fa fa-google-plus\"> </i>
                                                        <div class=\"tooltip\"><span>Google</span></div>
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"clearfix\"> </div>
                            </div>
                        </div> {% endblock %}
                    <!--main page chart layer2-->
                    {% block three %}
                        <div class=\"chart-layer-2\">

                            <div class=\"col-md-6 chart-layer2-right\">
                                <div class=\"prograc-blocks\">
                                    <!--Progress bars-->
                                    <div class=\"home-progres-main\">
                                        <h3>Total Sales</h3>
                                    </div>
                                    <div class='bar_group'>
                                        <div class='bar_group__bar thin' label='Rating' show_values='true' tooltip='true' value='343'></div>
                                        <div class='bar_group__bar thin' label='Quality' show_values='true' tooltip='true' value='235'></div>
                                        <div class='bar_group__bar thin' label='Amount' show_values='true' tooltip='true' value='550'></div>
                                        <div class='bar_group__bar thin' label='Farming' show_values='true' tooltip='true' value='456'></div>
                                    </div>


                                    <!--//Progress bars-->
                                </div>
                            </div>
                            <div class=\"col-md-6 chart-layer2-left\">
                                <div class=\"content-main revenue\">
                                    <h3>Total Revenue</h3>
                                    <canvas id=\"radar\" height=\"300\" width=\"300\" style=\"width: 300px; height: 300px;\"></canvas>

                                </div>
                            </div>
                            <div class=\"clearfix\"> </div>
                        </div> {% endblock %}

                    <!--climate start here-->
                    {% block five %}<div class=\"climate\">
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
                    {% endblock %}
                    <!--climate end here-->
                </div>  {% endblock %}
            <!--inner block end here-->
            <!--copy rights start here-->
            <div class=\"copyrights\">
                <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href=\"http://w3layouts.com/\" target=\"_blank\">W3layouts</a> </p>
            </div>
            <!--COPY rights end here-->
        </div>
    </div>
    <!--slider menu-->

    <div class=\"sidebar-menu\">
        <div class=\"logo\"> <a href=\"#\" class=\"sidebar-icon\"> <span class=\"fa fa-bars\"></span> </a> <a href=\"#\"> <span id=\"logo\" ></span>
                <!--<img id=\"logo\" src=\"\" alt=\"Logo\"/>-->
            </a> </div>
        <div class=\"menu\">
            <ul id=\"menu\" >
                <li id=\"menu-home\" ><a href=\"{{ path(\"cal\")}}\"><i class=\"fa fa-tachometer\"></i><span>Agenda</span></a></li>
                <li><a href=\"#\"><i class=\"fa fa-cogs\"></i><span>Components</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul>
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"{{ path(\"calendar_new\")}}\">Ajouter rendez-vous</a></li>
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"{{ path(\"calendar_index\")}}\">liste des rendez-vous</a></li>
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"{{ path(\"cal\")}}\">consulter agenda</a></li>

                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-cogs\"></i><span>Cinema</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul>
                        {#  <li><a href=\"{{ path ('afficher')}}\">Afficher la liste des salles</a></li>#}
                        <li><a href=\"{{ path ('affichercin')}}\">Cinema   </a></li>
                        <li><a href=\"{{ path ('afficherf')}}\">Film   </a></li>
                        {#  <li><a href=\"{{ path ('afficherres')}}\">les reservations </a></li> #}
                        <li><a href=\"{{ path ('afficherRa')}}\">les avis </a></li>
                        {# <li><a href=\"{{ path ('updateEmploye')}}\">Modifier Employes</a></li>
                        <li><a href=\"{{ path ('delete')}}\">Supprimer Employes</a></li> #}

                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-cogs\"></i><span>Employe</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul>
                        {#  <li><a href=\"{{ path ('afficher')}}\">Afficher la liste des salles</a></li>
                        <li><a href=\"{{ path ('afficherc')}}\">Cinema   </a></li>
                        <li><a href=\"{{ path ('afficherf')}}\">Film   </a></li>#}
                        <li id=\"menu-arquivos\" ><a href=\"{{ path ('afficher')}}\">Afficher Employes</a></li>
                        {#  <li><a href=\"{{ path ('afficherres')}}\">les reservations </a></li> #}

                        {# <li><a href=\"{{ path ('updateEmploye')}}\">Modifier Employes</a></li>
                        <li><a href=\"{{ path ('delete')}}\">Supprimer Employes</a></li> #}

                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-cogs\"></i><span>Conge</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul>
                        <li><a href=\"{{ path ('afficherc')}}\">Afficher Conges</a></li>
                        <li><a href=\"{{ path ('addConge')}}\">Ajouter Conge</a></li>


                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-car\"></i><span>Parking</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"{{ path(\"affReservation\")}}\">Reservation</a></li>
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"{{ path(\"ListeCellule\")}}\">cellule</a></li>



                    </ul>
                </li>
                <li id=\"menu-academico\" ><a href=\"#\"><i class=\"fa fa-file-text\"></i><span>Equipement</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li id=\"menu-academico-boletim\" ><a href=\"{{ path('listE') }}\">Afficher Equipement</a></li>
                        <li id=\"menu-academico-boletim\" ><a href=\"{{ path('addE') }}\">Ajouter Equipement</a></li>
                    </ul>
                </li>

                <li><a href=\"#\"><i class=\"fa fa-envelope\"></i><span>Reclamation</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li><a href=\"{{ path ('listrec')}}\">Afficher Reclamation</a></li>
                        <li><a href=\"{{ path ('statistiques')}}\">Statistique Reclamation</a></li>
                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-envelope\"></i><span>Categorie & Plat</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li><a href=\"{{ path ('afficherCat')}}\">Categorie </a></li>
                        <li><a href=\"{{ path ('addCategorie')}}\">Ajouter une categorie</a></li>
                        <li><a href=\"{{ path ('afficherPlat')}}\">Plat </a></li>
                        <li><a href=\"{{ path ('addPlat')}}\">Ajouter un plat</a></li>
                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-envelope\"></i><span>Abonnement</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li><a href=\"{{ path ('Afficheabo')}}\">Abonne </a></li>
                        <li><a href=\"{{ path ('AfficheTypeAbonnement')}}\">Type abonnement</a></li>
                        <li><a href=\"{{ path ('AddTypeAbonnement')}}\">Ajout Type abonnement</a></li>
                        <li><a href=\"{{ path ('admin_abonnement')}}\">Abonnement</a></li>

                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-cogs\"></i><span>Evenement</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul>
                        <li><a href=\"{{ path ('eventBack')}}\" >Liste des Evenement</a></li>
                        <li><a href=\"{{ path ('AjoutEvent')}}\" >ajouter des Evenement</a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class=\"clearfix\"> </div>
</div>

</body>
</html>
{% endblock %}", "base.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\base.html.twig");
    }
}
