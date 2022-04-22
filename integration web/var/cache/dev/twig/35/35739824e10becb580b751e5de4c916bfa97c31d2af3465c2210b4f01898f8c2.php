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

/* addCellule.html.twig */
class __TwigTemplate_00ff26abbba91db3d7e726932903a81249387257a3383421b30fa02630bed1bc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "addCellule.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "addCellule.html.twig"));

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
        // line 18
        echo "
    ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "</head>
<body>
";
        // line 80
        $this->displayBlock('body', $context, $blocks);
        // line 435
        echo "</body>
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
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        <!-- Custom Theme files -->
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
        <!--icons-css-->
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--Google Fonts-->
        <link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "        <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-2.1.1.min.js"), "html", null, true);
        echo "\"></script>
        <!--static chart-->
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/Chart.min.js"), "html", null, true);
        echo "\"></script>
        <!--//charts-->
        <!-- geo chart -->
        <!-- <script src=\"//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js\" type=\"text/javascript\"></script>
         <script>window.modernizr || document.write('<script src=\"lib/modernizr/modernizr-custom.js\"><\\/script>')</script>-->
        <!--<script src=\"lib/html5shiv/html5shiv.js\"></script>-->
        <!-- Chartinator  -->
        <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/chartinator.js"), "html", null, true);
        echo "\" ></script>
        <script type=\"text/javascript\"></script>

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
    \$(function () {
        \$(\"#savbundle_reclamation_create\").click(function () {
            \$valid = true;
            if (\$(\"#typeReclamation\").val() == \"\") {
                \$(\"#typeReclamation\").next(\".error-message\").fadeIn().text(\"Choisi un type\");
                valid = false;
            }
            if (\$(\"#dateAchat\").val() == \"\") {
                \$(\"#dateAchat\").next(\".error-message\").fadeIn().text(\"Tappez une date\");
                valid = false;
            }
            if (\$(\"#description\").val() == \"\") {
                \$(\"#description\").next(\".error-message\").fadeIn().text(\"Tappez une description\");
                valid = false;
            }
            if (\$(\"#email\").val() == \"\") {
                \$(\"#email\").next(\".error-message\").fadeIn().text(\"Tappez un mail valide\");
                valid = false;
            }
            if (\$(\"#email\").val().indexOf(\"@gmail.com\",0)<0) {
                \$(\"#email\").next(\".error-message\").fadeIn().text(\"Tappez un mail valide\");
                valid = false;
            }
            return valid;
        });
    });
</script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo "<div class=\"page-container\">
    <div class=\"left-content\">
        <div class=\"mother-grid-inner\">
            <!--header start here-->
            <div class=\"header-main\">
                <div class=\"header-left\">
                    <div class=\"logo-name\">
                        <a href=\"index.html\"> <h1>Happy Park</h1>
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
        // line 112
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
        // line 120
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
        // line 128
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
        // line 151
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
        // line 159
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
        // line 167
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
        // line 241
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/p1.png"), "html", null, true);
        echo "\" alt=\"\"> </span>
                                        <div class=\"user-name\">
                                            <p>Slimi Sarra</p>
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

                    <div class=\"market-update-block clr-block-1\"  >
                        <div class=\"col-md-8 market-update-left\" >

                            <div class=\"work-progres\"  >

                                <div class=\"table-responsive\">


                                    ";
        // line 293
        $this->displayBlock('title', $context, $blocks);
        // line 305
        echo "
                                </div>
                            </div>


                        </div>

                        <div class=\"clearfix\"> </div>
                    </div>

                </div>
                <!--market updates end here-->



                <div class=\"clearfix\"> </div>

        </div>
        <!--inner block end here-->
        <!--copy rights start here-->
        <div class=\"copyrights\">
            <p>© 2021 Happy Park. All Rights Reserved | Design by  <a href=\"http://w3layouts.com/\" target=\"_blank\">W3layouts</a> </p>
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
                <li><a href=\"";
        // line 338
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cal");
        echo "\"><i class=\"fa fa-book nav_icon\"></i><span>Agenda</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"";
        // line 340
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_new");
        echo "\">Ajouter rendez-vous</a></li>
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"";
        // line 341
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_index");
        echo "\">liste des rendez-vous</a></li>
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"";
        // line 342
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cal");
        echo "\">consulter agenda</a></li>



                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-cogs\"></i><span>Cinema</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul>
                        ";
        // line 351
        echo "                        <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affichercin");
        echo "\">Cinema   </a></li>
                        <li><a href=\"";
        // line 352
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherf");
        echo "\">Film   </a></li>
                        ";
        // line 354
        echo "                        <li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherRa");
        echo "\">les avis </a></li>
                        ";
        // line 357
        echo "
                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-cogs\"></i><span>Employe</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul>
                        ";
        // line 365
        echo "                        <li id=\"menu-arquivos\" ><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficher");
        echo "\">Afficher Employes</a></li>
                        ";
        // line 367
        echo "
                        ";
        // line 370
        echo "
                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-cogs\"></i><span>Conge</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul>
                        <li><a href=\"";
        // line 375
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherc");
        echo "\">Afficher Conges</a></li>
                        <li><a href=\"";
        // line 376
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addConge");
        echo "\">Ajouter Conge</a></li>


                    </ul>
                </li>
               ";
        // line 391
        echo "                <li><a href=\"#\"><i class=\"fa fa-car\"></i><span>Parking</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"";
        // line 393
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affReservation");
        echo "\">Reservation</a></li>
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"";
        // line 394
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ListeCellule");
        echo "\">cellule</a></li>



                    </ul>
                </li>
                <li id=\"menu-academico\" ><a href=\"#\"><i class=\"fa fa-file-text\"></i><span>Equipement</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li id=\"menu-academico-boletim\" ><a href=\"";
        // line 402
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listE");
        echo "\">Afficher Equipement</a></li>
                        <li id=\"menu-academico-boletim\" ><a href=\"";
        // line 403
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addE");
        echo "\">Ajouter Equipement</a></li>
                    </ul>
                </li>

                <li><a href=\"#\"><i class=\"fa fa-envelope\"></i><span>Reclamation</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li><a href=\"";
        // line 409
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("listrec");
        echo "\">Afficher Reclamation</a></li>
                        <li><a href=\"";
        // line 410
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("statistiques");
        echo "\">Statistique Reclamation</a></li>
                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-envelope\"></i><span>Abonnement</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li><a href=\"";
        // line 415
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Afficheabo");
        echo "\">Abonne </a></li>
                        <li><a href=\"";
        // line 416
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AfficheTypeAbonnement");
        echo "\">Type abonnement</a></li>
                        <li><a href=\"";
        // line 417
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AddTypeAbonnement");
        echo "\">Ajout Type abonnement</a></li>
                        <li><a href=\"";
        // line 418
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_abonnement");
        echo "\">Abonnement</a></li>

                    </ul>
                </li>
                <li><a href=\"#\"><i class=\"fa fa-cogs\"></i><span>Evenement</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul>
                        <li><a href=\"";
        // line 424
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventBack");
        echo "\" >Liste des Evenement</a></li>
                        <li><a href=\"";
        // line 425
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AjoutEvent");
        echo "\" >ajouter des Evenement</a></li>

                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class=\"clearfix\"> </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 293
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 294
        echo "                                                    <div class=\"work-progres\">
                                                        <div class=\"chit-chat-heading\">
                                                            formulaire d'ajout des cellules
                                                        </div>
                                                        <div class=\"table-responsive\" style=\"width:300px\">
                                                            <table class=\"table table-hover\">
                                                                 ";
        // line 300
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCellule"]) || array_key_exists("formCellule", $context) ? $context["formCellule"] : (function () { throw new RuntimeError('Variable "formCellule" does not exist.', 300, $this->source); })()), 'form');
        echo "
                                                            </table>
                                                        </div>
                                                    </div>
                                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "addCellule.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  666 => 300,  658 => 294,  648 => 293,  628 => 425,  624 => 424,  615 => 418,  611 => 417,  607 => 416,  603 => 415,  595 => 410,  591 => 409,  582 => 403,  578 => 402,  567 => 394,  563 => 393,  559 => 391,  551 => 376,  547 => 375,  540 => 370,  537 => 367,  532 => 365,  525 => 357,  520 => 354,  516 => 352,  511 => 351,  500 => 342,  496 => 341,  492 => 340,  487 => 338,  452 => 305,  450 => 293,  395 => 241,  318 => 167,  307 => 159,  296 => 151,  270 => 128,  259 => 120,  248 => 112,  205 => 80,  147 => 30,  137 => 23,  132 => 21,  129 => 20,  119 => 19,  103 => 12,  98 => 10,  92 => 8,  82 => 7,  68 => 435,  66 => 80,  62 => 78,  60 => 19,  57 => 18,  55 => 7,  47 => 1,);
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
        <link href=\"{{ asset('css/bootstrap.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\">
        <!-- Custom Theme files -->
        <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\"/>
        <!--icons-css-->
        <link href=\"{{ asset('css/font-awesome.css') }}\" rel=\"stylesheet\">
        <!--Google Fonts-->
        <link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>

    {% endblock %}

    {% block javascripts %}
        <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <script src=\"{{ asset('js/jquery-2.1.1.min.js') }}\"></script>
        <!--static chart-->
        <script src=\"{{ asset('js/Chart.min.js') }}\"></script>
        <!--//charts-->
        <!-- geo chart -->
        <!-- <script src=\"//cdn.jsdelivr.net/modernizr/2.8.3/modernizr.min.js\" type=\"text/javascript\"></script>
         <script>window.modernizr || document.write('<script src=\"lib/modernizr/modernizr-custom.js\"><\\/script>')</script>-->
        <!--<script src=\"lib/html5shiv/html5shiv.js\"></script>-->
        <!-- Chartinator  -->
        <script src=\"{{ asset('js/chartinator.js') }}\" ></script>
        <script type=\"text/javascript\"></script>

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
    \$(function () {
        \$(\"#savbundle_reclamation_create\").click(function () {
            \$valid = true;
            if (\$(\"#typeReclamation\").val() == \"\") {
                \$(\"#typeReclamation\").next(\".error-message\").fadeIn().text(\"Choisi un type\");
                valid = false;
            }
            if (\$(\"#dateAchat\").val() == \"\") {
                \$(\"#dateAchat\").next(\".error-message\").fadeIn().text(\"Tappez une date\");
                valid = false;
            }
            if (\$(\"#description\").val() == \"\") {
                \$(\"#description\").next(\".error-message\").fadeIn().text(\"Tappez une description\");
                valid = false;
            }
            if (\$(\"#email\").val() == \"\") {
                \$(\"#email\").next(\".error-message\").fadeIn().text(\"Tappez un mail valide\");
                valid = false;
            }
            if (\$(\"#email\").val().indexOf(\"@gmail.com\",0)<0) {
                \$(\"#email\").next(\".error-message\").fadeIn().text(\"Tappez un mail valide\");
                valid = false;
            }
            return valid;
        });
    });
</script>

    {% endblock %}
</head>
<body>
{% block body %}<div class=\"page-container\">
    <div class=\"left-content\">
        <div class=\"mother-grid-inner\">
            <!--header start here-->
            <div class=\"header-main\">
                <div class=\"header-left\">
                    <div class=\"logo-name\">
                        <a href=\"index.html\"> <h1>Happy Park</h1>
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
                                            <div class=\"user_img\"><img src=\"{{ asset('images/p4.png') }}\" alt=\"\"></div>
                                            <div class=\"notification_desc\">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </a></li>
                                    <li class=\"odd\"><a href=\"#\">
                                            <div class=\"user_img\"><img src=\"{{ asset('images/p2.png') }}\" alt=\"\"></div>
                                            <div class=\"notification_desc\">
                                                <p>Lorem ipsum dolor </p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </a></li>
                                    <li><a href=\"#\">
                                            <div class=\"user_img\"><img src=\"{{ asset('images/p3.png') }}\" alt=\"\"></div>
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
                                            <div class=\"user_img\"><img src=\"{{ asset('images/p5.png') }}\" alt=\"\"></div>
                                            <div class=\"notification_desc\">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </a></li>
                                    <li class=\"odd\"><a href=\"#\">
                                            <div class=\"user_img\"><img src=\"{{ asset('images/p6.png') }}\" alt=\"\"></div>
                                            <div class=\"notification_desc\">
                                                <p>Lorem ipsum dolor</p>
                                                <p><span>1 hour ago</span></p>
                                            </div>
                                            <div class=\"clearfix\"></div>
                                        </a></li>
                                    <li><a href=\"#\">
                                            <div class=\"user_img\"><img src=\"{{ asset('images/p7.png') }}\" alt=\"\"></div>
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
                                        <span class=\"prfil-img\"><img src=\"{{ asset('images/p1.png') }}\" alt=\"\"> </span>
                                        <div class=\"user-name\">
                                            <p>Slimi Sarra</p>
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

                    <div class=\"market-update-block clr-block-1\"  >
                        <div class=\"col-md-8 market-update-left\" >

                            <div class=\"work-progres\"  >

                                <div class=\"table-responsive\">


                                    {% block title %}
                                                    <div class=\"work-progres\">
                                                        <div class=\"chit-chat-heading\">
                                                            formulaire d'ajout des cellules
                                                        </div>
                                                        <div class=\"table-responsive\" style=\"width:300px\">
                                                            <table class=\"table table-hover\">
                                                                 {{ form(formCellule) }}
                                                            </table>
                                                        </div>
                                                    </div>
                                    {% endblock %}

                                </div>
                            </div>


                        </div>

                        <div class=\"clearfix\"> </div>
                    </div>

                </div>
                <!--market updates end here-->



                <div class=\"clearfix\"> </div>

        </div>
        <!--inner block end here-->
        <!--copy rights start here-->
        <div class=\"copyrights\">
            <p>© 2021 Happy Park. All Rights Reserved | Design by  <a href=\"http://w3layouts.com/\" target=\"_blank\">W3layouts</a> </p>
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
                <li><a href=\"{{ path(\"cal\")}}\"><i class=\"fa fa-book nav_icon\"></i><span>Agenda</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
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
               {#  <li><a href=\"{{ path(\"main\")}}\"><i class=\"fa fa-book nav_icon\"></i><span>Agenda</span><span class=\"fa fa-angle-right\" style=\"float: right\"></span></a>
                    <ul id=\"menu-academico-sub\" >
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"{{ path(\"calendar_new\")}}\">Ajouter rendez-vous</a></li>
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"{{ path(\"calendar_index\")}}\">liste des rendez-vous</a></li>
                        <li id=\"menu-academico-avaliacoes\" ><a href=\"{{ path(\"main\")}}\">consulter agenda</a></li>



                    </ul>
                </li> #}
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
{% endblock %}
</body>
</html>


", "addCellule.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\addCellule.html.twig");
    }
}
