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

/* baseEvent.html.twig */
class __TwigTemplate_eff54c98f4f951cdf396477a2255295255966eb325f1c6eee023053afc179104 extends Template
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
            'Event' => [$this, 'block_Event'],
            'Comment' => [$this, 'block_Comment'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseEvent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseEvent.html.twig"));

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
        // line 229
        echo "

";
        // line 231
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
        <!--scrolling js-->
        <script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/scripts.js"), "html", null, true);
        echo "\"></script>
        <!--//scrolling js-->
        <script src=\"";
        // line 125
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
        // line 145
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

    // line 231
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
                        <a href=\"index.html.twig\"> <h1>PARK</h1>
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
        // line 263
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
        // line 271
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
        // line 279
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
        // line 302
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
        // line 310
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
        // line 318
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
        // line 392
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("mages/p1.png"), "html", null, true);
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
                    <div class=\" chit-chat-layer1-left\" style=\"width: 1280px\">
                        <div class=\"work-progres\">
                            <div class=\"chit-chat-heading\">
                                liste des Evenements
                            </div>
                            <div >
                                    ";
        // line 485
        $this->displayBlock('Event', $context, $blocks);
        // line 486
        echo "                                    ";
        $this->displayBlock('Comment', $context, $blocks);
        // line 487
        echo "                            </div>
                        </div>
                    </div>

                    <div class=\"clearfix\"> </div>
                </div>
                <!--main page chit chating end here-->
                <!--main page chart start here-->


            </div>
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
        // line 508
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cal");
        echo "\"><i class=\"fa fa-tachometer\"></i><span>Agenda</span></a></li>
                <li><a href=\"#\"><i class=\"fa fa-cogs\"></i><span>Components</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul>
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"";
        // line 511
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_new");
        echo "\">Ajouter rendez-vous</a></li>
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"";
        // line 512
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_index");
        echo "\">liste des rendez-vous</a></li>
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"";
        // line 513
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cal");
        echo "\">consulter agenda</a></li>

                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-cogs\"></i><span>Cinema</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul>
                        ";
        // line 520
        echo "                        <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affichercin");
        echo "\">Cinema   </a></li>
                        <li><a href=\"";
        // line 521
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherf");
        echo "\">Film   </a></li>
                        ";
        // line 523
        echo "                        <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherRa");
        echo "\">les avis </a></li>
                        ";
        // line 526
        echo "
                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-cogs\"></i><span>Employe</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul>
                        ";
        // line 534
        echo "                        <li id=\"menu-arquivos\" ><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher");
        echo "\">Afficher Employes</a></li>
                        ";
        // line 536
        echo "
                        ";
        // line 539
        echo "
                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-cogs\"></i><span>Conge</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul>
                        <li><a href=\"";
        // line 544
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherc");
        echo "\">Afficher Conges</a></li>
                        <li><a href=\"";
        // line 545
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addConge");
        echo "\">Ajouter Conge</a></li>


                    </ul>
                </li>
                ";
        // line 559
        echo "                <li><a href=\"#\"><i class=\"fa fa-car\"></i><span>Parking</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"";
        // line 561
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affReservation");
        echo "\">Reservation</a></li>
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"";
        // line 562
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ListeCellule");
        echo "\">cellule</a></li>



                    </ul>
                </li>
                <li id=\"menu-academico\" ><a href=\"#\"><i class=\"fa fa-file-text\"></i><span>Equipement</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li id=\"menu-academico-boletim\" ><a href=\"";
        // line 570
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listE");
        echo "\">Afficher Equipement</a></li>
                        <li id=\"menu-academico-boletim\" ><a href=\"";
        // line 571
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addE");
        echo "\">Ajouter Equipement</a></li>
                    </ul>
                </li>

                <li><a href=\"#\"><i class=\"fa fa-envelope\"></i><span>Reclamation</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li><a href=\"";
        // line 577
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listrec");
        echo "\">Afficher Reclamation</a></li>
                        <li><a href=\"";
        // line 578
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("statistiques");
        echo "\">Statistique Reclamation</a></li>
                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-envelope\"></i><span>Categorie & Plat</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li><a href=\"";
        // line 583
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherCat");
        echo "\">Categorie </a></li>
                        <li><a href=\"";
        // line 584
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addCategorie");
        echo "\">Ajouter une categorie</a></li>
                        <li><a href=\"";
        // line 585
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherPlat");
        echo "\">Plat </a></li>
                        <li><a href=\"";
        // line 586
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addPlat");
        echo "\">Ajouter un plat</a></li>
                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-envelope\"></i><span>Abonnement</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li><a href=\"";
        // line 591
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Afficheabo");
        echo "\">Abonne </a></li>
                        <li><a href=\"";
        // line 592
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficheTypeAbonnement");
        echo "\">Type abonnement</a></li>
                        <li><a href=\"";
        // line 593
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_abonnement");
        echo "\">Abonnement</a></li>

                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-cogs\"></i><span>Evenement</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul>
                        <li><a href=\"";
        // line 599
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventBack");
        echo "\" >Liste des Evenement</a></li>
                        <li><a href=\"";
        // line 600
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

    // line 485
    public function block_Event($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Event"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Event"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 486
    public function block_Comment($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Comment"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Comment"));

        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseEvent.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  880 => 486,  861 => 485,  837 => 600,  833 => 599,  824 => 593,  820 => 592,  816 => 591,  808 => 586,  804 => 585,  800 => 584,  796 => 583,  788 => 578,  784 => 577,  775 => 571,  771 => 570,  760 => 562,  756 => 561,  752 => 559,  744 => 545,  740 => 544,  733 => 539,  730 => 536,  725 => 534,  718 => 526,  713 => 523,  709 => 521,  704 => 520,  695 => 513,  691 => 512,  687 => 511,  681 => 508,  658 => 487,  655 => 486,  653 => 485,  557 => 392,  480 => 318,  469 => 310,  458 => 302,  432 => 279,  421 => 271,  410 => 263,  367 => 231,  273 => 145,  250 => 125,  245 => 123,  241 => 122,  215 => 99,  144 => 31,  134 => 24,  129 => 22,  126 => 21,  116 => 20,  100 => 13,  95 => 11,  90 => 9,  87 => 8,  77 => 7,  67 => 231,  63 => 229,  61 => 20,  58 => 19,  56 => 7,  48 => 1,);
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
                        <a href=\"index.html.twig\"> <h1>PARK</h1>
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
                                            <div class=\"user_img\"><img src=\"{{ asset('images/p4.png')}}\" alt=\"\"></div>
                                            <div class=\"notification_desc\">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </a></li>
                                    <li class=\"odd\"><a href=\"#\">
                                            <div class=\"user_img\"><img src=\"{{ asset('images/p2.png')}}\" alt=\"\"></div>
                                            <div class=\"notification_desc\">
                                                <p>Lorem ipsum dolor </p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </a></li>
                                    <li><a href=\"#\">
                                            <div class=\"user_img\"><img src=\"{{ asset('images/p3.png')}}\" alt=\"\"></div>
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
                                            <div class=\"user_img\"><img src=\"{{ asset('images/p5.png')}}\" alt=\"\"></div>
                                            <div class=\"notification_desc\">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </a></li>
                                    <li class=\"odd\"><a href=\"#\">
                                            <div class=\"user_img\"><img src=\"{{ asset('images/p6.png')}}\" alt=\"\"></div>
                                            <div class=\"notification_desc\">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </a></li>
                                    <li><a href=\"#\">
                                            <div class=\"user_img\"><img src=\"{{ asset('images/p7.png')}}\" alt=\"\"></div>
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
                                        <span class=\"prfil-img\"><img src=\"{{ asset('mages/p1.png')}}\" alt=\"\"> </span>
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
                    <div class=\" chit-chat-layer1-left\" style=\"width: 1280px\">
                        <div class=\"work-progres\">
                            <div class=\"chit-chat-heading\">
                                liste des Evenements
                            </div>
                            <div >
                                    {% block Event %} {% endblock %}
                                    {% block Comment %} {% endblock %}
                            </div>
                        </div>
                    </div>

                    <div class=\"clearfix\"> </div>
                </div>
                <!--main page chit chating end here-->
                <!--main page chart start here-->


            </div>
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
                {# <li><a href=\"{{ path(\"main\")}}\"><i class=\"fa fa-book nav_icon\"></i><span>Agenda</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"{{ path(\"calendar_new\")}}\">Ajouter rendez-vous</a></li>
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"{{ path(\"calendar_index\")}}\">liste des rendez-vous</a></li>
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"{{ path(\"main\")}}\">consulter agenda</a></li>


                    </ul>
                </li>#}
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
{% endblock %}", "baseEvent.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\baseEvent.html.twig");
    }
}
