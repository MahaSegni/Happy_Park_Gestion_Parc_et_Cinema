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

/* baseb1.html.twig */
class __TwigTemplate_5a61dc325636afa158a5d03d604efbfc0b9dcca781a96b7f833866ba6ed12645 extends Template
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
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseb1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseb1.html.twig"));

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
                    <h1 style=\"color: #a46a1f\">Happy Park</h1>
                    <!--<img id=\"logo\" src=\"\" alt=\"Logo\"/>-->

                    <!--search-box-->

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
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/p4.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                            <div class=\"notification_desc\">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </a></li>
                                    <li class=\"odd\"><a href=\"#\">
                                            <div class=\"user_img\"><img src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/p2.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                            <div class=\"notification_desc\">
                                                <p>Lorem ipsum dolor </p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </a></li>
                                    <li><a href=\"#\">
                                            <div class=\"user_img\"><img src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/p3.png"), "html", null, true);
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
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/p5.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                            <div class=\"notification_desc\">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </a></li>
                                    <li class=\"odd\"><a href=\"#\">
                                            <div class=\"user_img\"><img src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/p6.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                                            <div class=\"notification_desc\">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </a></li>
                                    <li><a href=\"#\">
                                            <div class=\"user_img\"><img src=\"";
        // line 310
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/p7.png"), "html", null, true);
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
        // line 384
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/p1.png"), "html", null, true);
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
                                    <li> <a href=\"";
        // line 397
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><i class=\"fa fa-sign-out\"></i> Logout</a> </li>
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
            <!--inner block start here-->
            <div class=\"inner-block\">
                <!--market updates updates-->
                <div class=\"market-updates\">
                    <div class=\"col-md-4 market-update-gd\">
                        <div class=\"market-update-block clr-block-1\">
                            <div class=\"col-md-8 market-update-left\">

                                <h4><a href=\"";
        // line 431
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affichercin");
        echo "\">Afficher liste des salles du Cinema </a></h4>

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
        // line 444
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addCinema");
        echo "\">ajouter une nouvelle salle</a> </h4>

                            </div>
                            <div class=\"col-md-4 market-update-right\">
                                <i class=\"fa fa-eye\"> </i>
                            </div>
                            <div class=\"clearfix\"> </div>
                        </div>
                    </div>
                    ";
        // line 466
        echo "                    <div class=\"clearfix\"> </div>
                </div>
                <!--market updates end here-->
                <!--mainpage chit-chating-->
                <div class=\"chit-chat-layer1\">

                    <div class=\"work-progres\">
                        <div class=\"chit-chat-heading\">
                            <!--liste des films-->
                        </div>
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover\">
                                ";
        // line 478
        $this->displayBlock('title', $context, $blocks);
        // line 479
        echo "
                            </table>
                        </div>

                    </div>
                    ";
        // line 643
        echo "
                    <div class=\"clearfix\"> </div>
                </div>
                <!--climate end here-->
            </div>
            <!--inner block end here-->
            <!--copy rights start here-->
            <div class=\"copyrights\">
                <p>© 2021 Happy Park. All Rights Reserved </p>
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
        // line 663
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cal");
        echo "\"><i class=\"fa fa-tachometer\"></i><span>Agenda</span></a></li>
                <li><a href=\"#\"><i class=\"fa fa-cogs\"></i><span>Components</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul>
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"";
        // line 666
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_new");
        echo "\">Ajouter rendez-vous</a></li>
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"";
        // line 667
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_index");
        echo "\">liste des rendez-vous</a></li>
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"";
        // line 668
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cal");
        echo "\">consulter agenda</a></li>

                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-cogs\"></i><span>Cinema</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul>
                        ";
        // line 675
        echo "                        <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affichercin");
        echo "\">Cinema   </a></li>
                        <li><a href=\"";
        // line 676
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherf");
        echo "\">Film   </a></li>
                        ";
        // line 678
        echo "                        <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherRa");
        echo "\">les avis </a></li>
                        ";
        // line 681
        echo "
                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-cogs\"></i><span>Employe</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul>
                        ";
        // line 689
        echo "                        <li id=\"menu-arquivos\" ><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher");
        echo "\">Afficher Employes</a></li>
                        ";
        // line 691
        echo "
                        ";
        // line 694
        echo "
                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-cogs\"></i><span>Conge</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul>
                        <li><a href=\"";
        // line 699
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherc");
        echo "\">Afficher Conges</a></li>
                        <li><a href=\"";
        // line 700
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addConge");
        echo "\">Ajouter Conge</a></li>


                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-car\"></i><span>Parking</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"";
        // line 707
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affReservation");
        echo "\">Reservation</a></li>
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"";
        // line 708
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ListeCellule");
        echo "\">cellule</a></li>



                    </ul>
                </li>
                <li id=\"menu-academico\" ><a href=\"#\"><i class=\"fa fa-file-text\"></i><span>Equipement</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li id=\"menu-academico-boletim\" ><a href=\"";
        // line 716
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listE");
        echo "\">Afficher Equipement</a></li>
                        <li id=\"menu-academico-boletim\" ><a href=\"";
        // line 717
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addE");
        echo "\">Ajouter Equipement</a></li>
                    </ul>
                </li>

                <li><a href=\"#\"><i class=\"fa fa-envelope\"></i><span>Reclamation</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li><a href=\"";
        // line 723
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listrec");
        echo "\">Afficher Reclamation</a></li>
                        <li><a href=\"";
        // line 724
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("statistiques");
        echo "\">Statistique Reclamation</a></li>
                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-envelope\"></i><span>Categorie & Plat</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li><a href=\"";
        // line 729
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherCat");
        echo "\">Categorie </a></li>
                        <li><a href=\"";
        // line 730
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addCategorie");
        echo "\">Ajouter une categorie</a></li>
                        <li><a href=\"";
        // line 731
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherPlat");
        echo "\">Plat </a></li>
                        <li><a href=\"";
        // line 732
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addPlat");
        echo "\">Ajouter un plat</a></li>
                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-envelope\"></i><span>Abonnement</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li><a href=\"";
        // line 737
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Afficheabo");
        echo "\">Abonne </a></li>
                        <li><a href=\"";
        // line 738
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficheTypeAbonnement");
        echo "\">Type abonnement</a></li>
                        <li><a href=\"";
        // line 739
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AddTypeAbonnement");
        echo "\">Ajout Type abonnement</a></li>
                        <li><a href=\"";
        // line 740
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_abonnement");
        echo "\">Abonnement</a></li>

                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-cogs\"></i><span>Evenement</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul>
                        <li><a href=\"";
        // line 746
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventBack");
        echo "\" >Liste des Evenement</a></li>
                        <li><a href=\"";
        // line 747
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AjoutEvent");
        echo "\" >ajouter des Evenement</a></li>

                    </ul>
                </li>
                ";
        // line 786
        echo "            </ul>
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

    // line 478
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

    public function getTemplateName()
    {
        return "baseb1.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  857 => 478,  839 => 786,  832 => 747,  828 => 746,  819 => 740,  815 => 739,  811 => 738,  807 => 737,  799 => 732,  795 => 731,  791 => 730,  787 => 729,  779 => 724,  775 => 723,  766 => 717,  762 => 716,  751 => 708,  747 => 707,  737 => 700,  733 => 699,  726 => 694,  723 => 691,  718 => 689,  711 => 681,  706 => 678,  702 => 676,  697 => 675,  688 => 668,  684 => 667,  680 => 666,  674 => 663,  652 => 643,  645 => 479,  643 => 478,  629 => 466,  617 => 444,  601 => 431,  564 => 397,  548 => 384,  471 => 310,  460 => 302,  449 => 294,  423 => 271,  412 => 263,  401 => 255,  365 => 230,  271 => 144,  248 => 124,  243 => 122,  239 => 121,  214 => 99,  143 => 31,  133 => 24,  128 => 22,  125 => 21,  115 => 20,  99 => 13,  94 => 11,  89 => 9,  86 => 8,  76 => 7,  66 => 230,  62 => 228,  60 => 20,  57 => 19,  55 => 7,  47 => 1,);
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
                    <h1 style=\"color: #a46a1f\">Happy Park</h1>
                    <!--<img id=\"logo\" src=\"\" alt=\"Logo\"/>-->

                    <!--search-box-->

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
                                            <div class=\"user_img\"><img src=\"{{ asset( 'images1/p4.png')}}\" alt=\"\"></div>
                                            <div class=\"notification_desc\">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </a></li>
                                    <li class=\"odd\"><a href=\"#\">
                                            <div class=\"user_img\"><img src=\"{{ asset( 'images1/p2.png')}}\" alt=\"\"></div>
                                            <div class=\"notification_desc\">
                                                <p>Lorem ipsum dolor </p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </a></li>
                                    <li><a href=\"#\">
                                            <div class=\"user_img\"><img src=\"{{ asset( 'images1/p3.png')}}\" alt=\"\"></div>
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
                                            <div class=\"user_img\"><img src=\"{{ asset( 'images1/p5.png')}}\" alt=\"\"></div>
                                            <div class=\"notification_desc\">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </a></li>
                                    <li class=\"odd\"><a href=\"#\">
                                            <div class=\"user_img\"><img src=\"{{ asset( 'images1/p6.png')}}\" alt=\"\"></div>
                                            <div class=\"notification_desc\">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </a></li>
                                    <li><a href=\"#\">
                                            <div class=\"user_img\"><img src=\"{{ asset( 'images1/p7.png')}}\" alt=\"\"></div>
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
                                        <span class=\"prfil-img\"><img src=\"{{ asset( 'images1/p1.png')}}\" alt=\"\"> </span>
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
                                    <li> <a href=\"{{ path('app_logout') }}\"><i class=\"fa fa-sign-out\"></i> Logout</a> </li>
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
            <!--inner block start here-->
            <div class=\"inner-block\">
                <!--market updates updates-->
                <div class=\"market-updates\">
                    <div class=\"col-md-4 market-update-gd\">
                        <div class=\"market-update-block clr-block-1\">
                            <div class=\"col-md-8 market-update-left\">

                                <h4><a href=\"{{ path ('affichercin')}}\">Afficher liste des salles du Cinema </a></h4>

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

                                <h4><a href=\"{{ path ('addCinema')}}\">ajouter une nouvelle salle</a> </h4>

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
                </div>
                <!--market updates end here-->
                <!--mainpage chit-chating-->
                <div class=\"chit-chat-layer1\">

                    <div class=\"work-progres\">
                        <div class=\"chit-chat-heading\">
                            <!--liste des films-->
                        </div>
                        <div class=\"table-responsive\">
                            <table class=\"table table-hover\">
                                {% block title %} {% endblock %}

                            </table>
                        </div>

                    </div>
                    {# <div class=\"col-md-6 chart-layer1-left\">
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
                </div>
                <!--main page chart layer2-->
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
                </div>

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
                    </div>#}

                    <div class=\"clearfix\"> </div>
                </div>
                <!--climate end here-->
            </div>
            <!--inner block end here-->
            <!--copy rights start here-->
            <div class=\"copyrights\">
                <p>© 2021 Happy Park. All Rights Reserved </p>
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
                {# <li id=\"menu-comunicacao\" ><a href=\"#\"><i class=\"fa fa-book nav_icon\"></i><span>Element</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-comunicacao-sub\" >
                        <li id=\"menu-mensagens\" style=\"width: 120px\" ><a href=\"buttons.html\">Buttons</a>
                        </li>
                        <li id=\"menu-arquivos\" ><a href=\"typography.html\">Typography</a></li>
                        <li id=\"menu-arquivos\" ><a href=\"icons.html\">Icons</a></li>
                    </ul>
                </li>
                <li><a href=\"maps.html\"><i class=\"fa fa-map-marker\"></i><span>Maps</span></a></li>
                <li id=\"menu-academico\" ><a href=\"#\"><i class=\"fa fa-file-text\"></i><span>Pages</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li id=\"menu-academico-boletim\" ><a href=\"login.html\">Login</a></li>
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"signup.html\">Sign Up</a></li>
                    </ul>
                </li>

                <li><a href=\"charts.html\"><i class=\"fa fa-bar-chart\"></i><span>Charts</span></a></li>
                <li><a href=\"#\"><i class=\"fa fa-envelope\"></i><span>Mailbox</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"inbox.html\">Inbox</a></li>
                        <li id=\"menu-academico-boletim\" ><a href=\"inbox-details.html\">Compose email</a></li>
                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-cog\"></i><span>System</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"404.html\">404</a></li>
                        <li id=\"menu-academico-boletim\" ><a href=\"blank.html\">Blank</a></li>
                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-shopping-cart\"></i><span>E-Commerce</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"product.html\">Product</a></li>
                        <li id=\"menu-academico-boletim\" ><a href=\"price.html\">Price</a></li>
                    </ul>
                </li>#}
            </ul>
        </div>
    </div>
    <div class=\"clearfix\"> </div>
</div>

</body>
</html>
{% endblock %}", "baseb1.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\baseb1.html.twig");
    }
}
