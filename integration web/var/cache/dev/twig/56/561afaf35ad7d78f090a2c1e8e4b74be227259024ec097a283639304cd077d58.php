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

/* reclamation.html.twig */
class __TwigTemplate_9a3255c80b14d867bdf044403735bb1caac7d4a9b9a9f81a2726487ab8035984 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>


    <title>Welcome!</title>

    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "
    ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 40
        echo "</head>
<body>
";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 418
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/plugins/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/plugins/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/plugins/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/styles/main_styles.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/styles/responsive.css"), "html", null, true);
        echo "\">

        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>


        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css\">
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat&display=swap\" rel=\"stylesheet\">

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 32
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/styles/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/styles/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/js/custom.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 43
        echo "    <div class=\"super_container\">

        <!-- Header -->

        <header class=\"header\">

            <!-- Top Bar -->

            <div class=\"top_bar\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col d-flex flex-row\">
                            <div class=\"phone\">+45 345 3324 56789</div>
                            <div class=\"social\">
                                <ul class=\"social_list\">
                                    <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                    <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                    <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                    <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                    <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></a></li>
                                    <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                </ul>
                            </div>
                            <div class=\"user_box ml-auto\">
                                <div class=\"user_box_login user_box_link\"><a href=\"#\">login</a></div>
                                <div class=\"user_box_register user_box_link\"><a href=\"#\">register</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Navigation -->

            <nav class=\"main_nav\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col main_nav_col d-flex flex-row align-items-center justify-content-start\">
                            <div class=\"logo_container\">
                                <div class=\"logo\"><a href=\"#\"><img src=\"../../public/images/logo.png\" alt=\"\">Happy_PARK</a></div>
                            </div>
                            <div class=\"main_nav_container ml-auto\">
                                <ul class=\"main_nav_list\">
                                    <li class=\"main_nav_item\"><a href=\"#\">home</a></li>
                                    <li class=\"main_nav_item\"><a href=\"about.html\">about us</a></li>
                                    <li class=\"main_nav_item\"><a href=\"offers.html\">offers</a></li>
                                    <li class=\"main_nav_item\"><a>add comment</a></li>
                                    <li class=\"main_nav_item\"><a href=\"contact.html\">contact</a></li>
                                </ul>
                            </div>
                            <div class=\"content_search ml-lg-0 ml-auto\">
                                <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                     width=\"17px\" height=\"17px\" viewBox=\"0 0 512 512\" enable-background=\"new 0 0 512 512\" xml:space=\"preserve\">
                        <g>
                            <g>
                                <g>

                                    <path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
                                 s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
                                 C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
                                 M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
                                 c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z\"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
                                 c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
                                 C-2.019,484.77-2.019,497.865,6.057,505.942z\"/>
                                </g>
                            </g>
                        </g>
                     </svg>
                            </div>

                            <form id=\"search_form\" class=\"search_form bez_1\">
                                <input type=\"search\" class=\"search_content_input bez_1\">
                            </form>

                            <div class=\"hamburger\">
                                <i class=\"fa fa-bars trans_200\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

        </header>

        <div class=\"menu trans_500\">
            <div class=\"menu_content d-flex flex-column align-items-center justify-content-center text-center\">
                <div class=\"menu_close_container\"><div class=\"menu_close\"></div></div>
                <div class=\"logo menu_logo\"><a href=\"#\"><img src=\" ";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a></div>
                <ul>
                    <li class=\"menu_item\"><a href=\"#\">home</a></li>
                    <li class=\"menu_item\"><a href=\"about.html\">about us</a></li>
                    <li class=\"menu_item\"><a href=\"offers.html\">offers</a></li>
                    <li class=\"menu_item\"><a href=\"blog.html\">news</a></li>
                    <li class=\"menu_item\"><a href=\"contact.html\">contact</a></li>
                </ul>
            </div>
        </div>

        <!-- Home -->

        <div class=\"home\">

            <!-- Home Slider -->

            <div class=\"home_slider_container\">



                <!-- Slider Item -->


                <div class=\"home\">
                    <div class=\"home_background parallax-window\" data-parallax=\"scroll\" ><img src=\"images1/about_background1.jpg\" style=\"width:100%\" > </div>
                    <div class=\"home_content\">
                        <div class=\"home_title\">Reclamation</div>
                    </div>
                </div>


            </div>

            <!-- Home Slider Nav - Prev -->
            <div class=\"home_slider_nav home_slider_prev\">
                <svg version=\"1.1\" id=\"Layer_2\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                     width=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
               <defs>
                   <linearGradient id='home_grad_prev'>
                       <stop offset='0%' stop-color='#fa9e1b'/>
                       <stop offset='100%' stop-color='#8d4fff'/>
                   </linearGradient>
               </defs>
                    <path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
               M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
               C22.545,2,26,5.541,26,9.909V23.091z\"/>
                    <polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
               11.042,18.219 \"/>
            </svg>
            </div>

            <!-- Home Slider Nav - Next -->
            <div class=\"home_slider_nav home_slider_next\">
                <svg version=\"1.1\" id=\"Layer_3\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                     width=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
               <defs>
                   <linearGradient id='home_grad_next'>
                       <stop offset='0%' stop-color='#fa9e1b'/>
                       <stop offset='100%' stop-color='#8d4fff'/>
                   </linearGradient>
               </defs>
                    <path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
            M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
            C22.545,2,26,5.541,26,9.909V23.091z\"/>
                    <polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
            17.046,15.554 \"/>
            </svg>
            </div>

            <!-- Home Slider Dots -->

            <div class=\"home_slider_dots\">
                <ul id=\"home_slider_custom_dots\" class=\"home_slider_custom_dots\">
                    <li class=\"home_slider_custom_dot active\"><div></div>01.</li>
                    <li class=\"home_slider_custom_dot\"><div></div>02.</li>
                    <li class=\"home_slider_custom_dot\"><div></div>03.</li>
                </ul>
            </div>

        </div>

    </div>

    <!-- Search -->

    <div class=\"search\">


        <!-- Search Contents -->

        <div class=\"container fill_height\">
            <div class=\"row fill_height\">
                <div class=\"col fill_height\">

                    <!-- Search Tabs -->
                    <div class=\"search_tabs_container\">
                        <div class=\"search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                            <div class=\"search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/bus.png"), "html", null, true);
        echo "\" alt=\"\"><a  href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addResrvation");
        echo "\"> <span>Parking</span></a></div>
                            <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/bus.png"), "html", null, true);
        echo "\" alt=\"\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherr");
        echo "\"> Film</a></div>
                            <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"";
        // line 235
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/departure.png"), "html", null, true);
        echo "\" alt=\"\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addrec");
        echo "\">Reclamation</a></div>
                            <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/island.png"), "html", null, true);
        echo "\"a alt=\"\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherPlatFront");
        echo "\">Plat</a></div>
                            <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/cruise.png"), "html", null, true);
        echo "\" alt=\"\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventIndex");
        echo "\">Evenement</a></div>
                            <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/diving.png"), "html", null, true);
        echo "\" alt=\"\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ListTypeAbonnement");
        echo "\">Abonnement</a></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- Intro -->
    <div class=\"intro\" style=\"background: linear-gradient(to right, #fa9e1b, #8d4fff);\">

        <div class=\"container\">



            <div class=\"row intro_items\">
                ";
        // line 256
        $this->displayBlock('title', $context, $blocks);
        // line 257
        echo "            </div>
        </div>
    </div>

    <!-- Offers -->



    </div>
    </div>

    <div class=\"trending\"  style=\"background: linear-gradient(to right, #fa9e1b, #8d4fff);\" >
        <div class=\"container\">


        </div>
    </div>

    <div class=\"contact\" style=\"background: linear-gradient(to right, #fa9e1b, #8d4fff);\">

        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-7\">



                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">

                <!-- Footer Column -->
                <div class=\"col-lg-3 footer_column\">
                    <div class=\"footer_col\">
                        <div class=\"footer_content footer_about\">
                            <div class=\"logo_container footer_logo\">
                                <div class=\"logo\"><a href=\"#\"><img src=\"../../public/images/logo.png\" alt=\"\">travelix</a></div>
                            </div>
                            <p class=\"footer_about_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
                            <ul class=\"footer_social_list\">
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-facebook-f\"></i></a></li>
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class=\"col-lg-3 footer_column\">
                    <div class=\"footer_col\">
                        <div class=\"footer_title\">blog posts</div>
                        <div class=\"footer_content footer_blog\">

                            <!-- Footer blog item -->
                            <div class=\"footer_blog_item clearfix\">
                                <div class=\"footer_blog_image\"><img src=\"../../public/images/footer_blog_1.jpg\" alt=\"https://unsplash.com/@avidenov\"></div>
                                <div class=\"footer_blog_content\">
                                    <!-- <div class=\"footer_blog_title\"><a href=\"blog.html\">Travel with us this year</a></div>
                                    --> <div class=\"footer_blog_date\">Nov 29, 2017</div>
                                </div>
                            </div>

                            <!-- Footer blog item -->
                            <div class=\"footer_blog_item clearfix\">
                                <div class=\"footer_blog_image\"><img src=\"../../public/images/footer_blog_2.jpg\" alt=\"https://unsplash.com/@deannaritchie\"></div>
                                <div class=\"footer_blog_content\">
                                    <!-- <div class=\"footer_blog_title\"><a href=\"blog.html\">New destinations for you</a></div>
                                    --> <div class=\"footer_blog_date\">Nov 29, 2017</div>
                                </div>
                            </div>

                            <!-- Footer blog item -->
                            <div class=\"footer_blog_item clearfix\">
                                <div class=\"footer_blog_image\"><img src=\"../../public/images/footer_blog_3.jpg\" alt=\"https://unsplash.com/@bergeryap87\"></div>
                                <div class=\"footer_blog_content\">
                                    <!-- <div class=\"footer_blog_title\"><a href=\"blog.html\">Travel with us this year</a></div>
                                     --><div class=\"footer_blog_date\">Nov 29, 2017</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Footer Column -->


                <!-- Footer Column -->
                <div class=\"col-lg-3 footer_column\">
                    <div class=\"footer_col\">
                        <div class=\"footer_title\">contact info</div>
                        <div class=\"footer_content footer_contact\">
                            <ul class=\"contact_info_list\">
                                <li class=\"contact_info_item d-flex flex-row\">
                                    <div><div class=\"contact_info_icon\"><img src=\"../../public/images/placeholder.svg\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\">4127 Raoul Wallenber 45b-c Gibraltar</div>
                                </li>
                                <li class=\"contact_info_item d-flex flex-row\">
                                    <div><div class=\"contact_info_icon\"><img src=\"../../public/images/phone-call.svg\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\">2556-808-8613</div>
                                </li>
                                <li class=\"contact_info_item d-flex flex-row\">
                                    <div><div class=\"contact_info_icon\"><img src=\"../../public/images/message.svg\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\"><a href=\"mailto:contactme@gmail.com?Subject=Hello\" target=\"_top\">contactme@gmail.com</a></div>
                                </li>
                                <li class=\"contact_info_item d-flex flex-row\">
                                    <div><div class=\"contact_info_icon\"><img src=\"../../public/images/planet-earth.svg\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\"><a href=\"https://colorlib.com\">www.colorlib.com</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <!-- Copyright -->

    <div class=\"copyright\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 order-lg-1 order-2  \">
                    <div class=\"copyright_content d-flex flex-row align-items-center\">
                        <div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>. Downloaded from <a href=\"https://themeslab.org/\" target=\"_blank\">Themeslab</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                    </div>
                </div>
                <div class=\"col-lg-9 order-lg-2 order-1\">
                    <div class=\"footer_nav_container d-flex flex-row align-items-center justify-content-lg-end\">
                        <div class=\"footer_nav\">
                            <ul class=\"footer_nav_list\">
                                <li class=\"footer_nav_item\"><a href=\"#\">home</a></li>
                                <!--<li class=\"footer_nav_item\"><a href=\"about.html\">about us</a></li>
                                <li class=\"footer_nav_item\"><a href=\"offers.html\">offers</a></li>
                                <li class=\"footer_nav_item\"><a href=\"blog.html\">news</a></li>
                                <li class=\"footer_nav_item\"><a href=\"contact.html\">contact</a></li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 256
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reclamation.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  614 => 256,  444 => 257,  442 => 256,  419 => 238,  413 => 237,  407 => 236,  401 => 235,  395 => 234,  389 => 233,  288 => 135,  194 => 43,  184 => 42,  171 => 37,  167 => 36,  163 => 35,  159 => 34,  155 => 33,  150 => 32,  140 => 31,  115 => 15,  111 => 14,  107 => 13,  103 => 12,  99 => 11,  95 => 10,  90 => 9,  80 => 8,  69 => 418,  67 => 42,  63 => 40,  61 => 31,  58 => 30,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>


    <title>Welcome!</title>

    {% block stylesheets %}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/bootstrap4/bootstrap.min.css') }}\">
        <link href=\"{{ asset('frontStyle/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('frontStyle/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('frontStyle/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('frontStyle/plugins/OwlCarousel2-2.2.1/animate.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('frontStyle/styles/main_styles.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('frontStyle/styles/responsive.css') }}\">

        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
        <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>


        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css\">
        <link href=\"https://fonts.googleapis.com/css?family=Montserrat&display=swap\" rel=\"stylesheet\">

    {% endblock %}

    {% block javascripts %}
        <script src=\"{{ asset('frontStyle/js/jquery-3.2.1.min.js') }}\"></script>
        <script src=\"{{ asset('frontStyle/styles/bootstrap4/popper.js') }}\"></script>
        <script src=\"{{ asset('frontStyle/styles/bootstrap4/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('frontStyle/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}\"></script>
        <script src=\"{{ asset('frontStyle/plugins/easing/easing.js') }}\"></script>
        <script src=\"{{ asset('frontStyle/js/custom.js') }}\"></script>

    {% endblock %}
</head>
<body>
{% block body %}
    <div class=\"super_container\">

        <!-- Header -->

        <header class=\"header\">

            <!-- Top Bar -->

            <div class=\"top_bar\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col d-flex flex-row\">
                            <div class=\"phone\">+45 345 3324 56789</div>
                            <div class=\"social\">
                                <ul class=\"social_list\">
                                    <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a></li>
                                    <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                                    <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                                    <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-dribbble\" aria-hidden=\"true\"></i></a></li>
                                    <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-behance\" aria-hidden=\"true\"></i></a></li>
                                    <li class=\"social_list_item\"><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                                </ul>
                            </div>
                            <div class=\"user_box ml-auto\">
                                <div class=\"user_box_login user_box_link\"><a href=\"#\">login</a></div>
                                <div class=\"user_box_register user_box_link\"><a href=\"#\">register</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Navigation -->

            <nav class=\"main_nav\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col main_nav_col d-flex flex-row align-items-center justify-content-start\">
                            <div class=\"logo_container\">
                                <div class=\"logo\"><a href=\"#\"><img src=\"../../public/images/logo.png\" alt=\"\">Happy_PARK</a></div>
                            </div>
                            <div class=\"main_nav_container ml-auto\">
                                <ul class=\"main_nav_list\">
                                    <li class=\"main_nav_item\"><a href=\"#\">home</a></li>
                                    <li class=\"main_nav_item\"><a href=\"about.html\">about us</a></li>
                                    <li class=\"main_nav_item\"><a href=\"offers.html\">offers</a></li>
                                    <li class=\"main_nav_item\"><a>add comment</a></li>
                                    <li class=\"main_nav_item\"><a href=\"contact.html\">contact</a></li>
                                </ul>
                            </div>
                            <div class=\"content_search ml-lg-0 ml-auto\">
                                <svg version=\"1.1\" id=\"Layer_1\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                                     width=\"17px\" height=\"17px\" viewBox=\"0 0 512 512\" enable-background=\"new 0 0 512 512\" xml:space=\"preserve\">
                        <g>
                            <g>
                                <g>

                                    <path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
                                 s112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
                                 C407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
                                 M119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
                                 c0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z\"/>
                                </g>
                            </g>
                            <g>
                                <g>
                                    <path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
                                 c8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
                                 C-2.019,484.77-2.019,497.865,6.057,505.942z\"/>
                                </g>
                            </g>
                        </g>
                     </svg>
                            </div>

                            <form id=\"search_form\" class=\"search_form bez_1\">
                                <input type=\"search\" class=\"search_content_input bez_1\">
                            </form>

                            <div class=\"hamburger\">
                                <i class=\"fa fa-bars trans_200\"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>

        </header>

        <div class=\"menu trans_500\">
            <div class=\"menu_content d-flex flex-column align-items-center justify-content-center text-center\">
                <div class=\"menu_close_container\"><div class=\"menu_close\"></div></div>
                <div class=\"logo menu_logo\"><a href=\"#\"><img src=\" {{ asset('images/logo.png') }}\" alt=\"\"></a></div>
                <ul>
                    <li class=\"menu_item\"><a href=\"#\">home</a></li>
                    <li class=\"menu_item\"><a href=\"about.html\">about us</a></li>
                    <li class=\"menu_item\"><a href=\"offers.html\">offers</a></li>
                    <li class=\"menu_item\"><a href=\"blog.html\">news</a></li>
                    <li class=\"menu_item\"><a href=\"contact.html\">contact</a></li>
                </ul>
            </div>
        </div>

        <!-- Home -->

        <div class=\"home\">

            <!-- Home Slider -->

            <div class=\"home_slider_container\">



                <!-- Slider Item -->


                <div class=\"home\">
                    <div class=\"home_background parallax-window\" data-parallax=\"scroll\" ><img src=\"images1/about_background1.jpg\" style=\"width:100%\" > </div>
                    <div class=\"home_content\">
                        <div class=\"home_title\">Reclamation</div>
                    </div>
                </div>


            </div>

            <!-- Home Slider Nav - Prev -->
            <div class=\"home_slider_nav home_slider_prev\">
                <svg version=\"1.1\" id=\"Layer_2\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                     width=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
               <defs>
                   <linearGradient id='home_grad_prev'>
                       <stop offset='0%' stop-color='#fa9e1b'/>
                       <stop offset='100%' stop-color='#8d4fff'/>
                   </linearGradient>
               </defs>
                    <path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
               M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
               C22.545,2,26,5.541,26,9.909V23.091z\"/>
                    <polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
               11.042,18.219 \"/>
            </svg>
            </div>

            <!-- Home Slider Nav - Next -->
            <div class=\"home_slider_nav home_slider_next\">
                <svg version=\"1.1\" id=\"Layer_3\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                     width=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
               <defs>
                   <linearGradient id='home_grad_next'>
                       <stop offset='0%' stop-color='#fa9e1b'/>
                       <stop offset='100%' stop-color='#8d4fff'/>
                   </linearGradient>
               </defs>
                    <path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
            M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
            C22.545,2,26,5.541,26,9.909V23.091z\"/>
                    <polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
            17.046,15.554 \"/>
            </svg>
            </div>

            <!-- Home Slider Dots -->

            <div class=\"home_slider_dots\">
                <ul id=\"home_slider_custom_dots\" class=\"home_slider_custom_dots\">
                    <li class=\"home_slider_custom_dot active\"><div></div>01.</li>
                    <li class=\"home_slider_custom_dot\"><div></div>02.</li>
                    <li class=\"home_slider_custom_dot\"><div></div>03.</li>
                </ul>
            </div>

        </div>

    </div>

    <!-- Search -->

    <div class=\"search\">


        <!-- Search Contents -->

        <div class=\"container fill_height\">
            <div class=\"row fill_height\">
                <div class=\"col fill_height\">

                    <!-- Search Tabs -->
                    <div class=\"search_tabs_container\">
                        <div class=\"search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                            <div class=\"search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"{{ asset('images1/bus.png') }}\" alt=\"\"><a  href=\"{{ path(\"addResrvation\") }}\"> <span>Parking</span></a></div>
                            <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"{{ asset('images1/bus.png') }}\" alt=\"\"><a href=\"{{ path(\"afficherr\") }}\"> Film</a></div>
                            <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"{{ asset('images1/departure.png') }}\" alt=\"\"><a href=\"{{ path(\"addrec\") }}\">Reclamation</a></div>
                            <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"{{ asset('images1/island.png') }}\"a alt=\"\"><a href=\"{{ path(\"afficherPlatFront\") }}\">Plat</a></div>
                            <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"{{ asset('images1/cruise.png') }}\" alt=\"\"><a href=\"{{ path(\"eventIndex\") }}\">Evenement</a></div>
                            <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"{{ asset('images1/diving.png') }}\" alt=\"\"><a href=\"{{ path(\"ListTypeAbonnement\") }}\">Abonnement</a></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- Intro -->
    <div class=\"intro\" style=\"background: linear-gradient(to right, #fa9e1b, #8d4fff);\">

        <div class=\"container\">



            <div class=\"row intro_items\">
                {% block title %}{% endblock  %}
            </div>
        </div>
    </div>

    <!-- Offers -->



    </div>
    </div>

    <div class=\"trending\"  style=\"background: linear-gradient(to right, #fa9e1b, #8d4fff);\" >
        <div class=\"container\">


        </div>
    </div>

    <div class=\"contact\" style=\"background: linear-gradient(to right, #fa9e1b, #8d4fff);\">

        <div class=\"container\">
            <div class=\"row\">

                <div class=\"col-lg-7\">



                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <footer class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">

                <!-- Footer Column -->
                <div class=\"col-lg-3 footer_column\">
                    <div class=\"footer_col\">
                        <div class=\"footer_content footer_about\">
                            <div class=\"logo_container footer_logo\">
                                <div class=\"logo\"><a href=\"#\"><img src=\"../../public/images/logo.png\" alt=\"\">travelix</a></div>
                            </div>
                            <p class=\"footer_about_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vu lputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer eleme ntum orci eu vehicula pretium.</p>
                            <ul class=\"footer_social_list\">
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-facebook-f\"></i></a></li>
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-dribbble\"></i></a></li>
                                <li class=\"footer_social_item\"><a href=\"#\"><i class=\"fa fa-behance\"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class=\"col-lg-3 footer_column\">
                    <div class=\"footer_col\">
                        <div class=\"footer_title\">blog posts</div>
                        <div class=\"footer_content footer_blog\">

                            <!-- Footer blog item -->
                            <div class=\"footer_blog_item clearfix\">
                                <div class=\"footer_blog_image\"><img src=\"../../public/images/footer_blog_1.jpg\" alt=\"https://unsplash.com/@avidenov\"></div>
                                <div class=\"footer_blog_content\">
                                    <!-- <div class=\"footer_blog_title\"><a href=\"blog.html\">Travel with us this year</a></div>
                                    --> <div class=\"footer_blog_date\">Nov 29, 2017</div>
                                </div>
                            </div>

                            <!-- Footer blog item -->
                            <div class=\"footer_blog_item clearfix\">
                                <div class=\"footer_blog_image\"><img src=\"../../public/images/footer_blog_2.jpg\" alt=\"https://unsplash.com/@deannaritchie\"></div>
                                <div class=\"footer_blog_content\">
                                    <!-- <div class=\"footer_blog_title\"><a href=\"blog.html\">New destinations for you</a></div>
                                    --> <div class=\"footer_blog_date\">Nov 29, 2017</div>
                                </div>
                            </div>

                            <!-- Footer blog item -->
                            <div class=\"footer_blog_item clearfix\">
                                <div class=\"footer_blog_image\"><img src=\"../../public/images/footer_blog_3.jpg\" alt=\"https://unsplash.com/@bergeryap87\"></div>
                                <div class=\"footer_blog_content\">
                                    <!-- <div class=\"footer_blog_title\"><a href=\"blog.html\">Travel with us this year</a></div>
                                     --><div class=\"footer_blog_date\">Nov 29, 2017</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Footer Column -->


                <!-- Footer Column -->
                <div class=\"col-lg-3 footer_column\">
                    <div class=\"footer_col\">
                        <div class=\"footer_title\">contact info</div>
                        <div class=\"footer_content footer_contact\">
                            <ul class=\"contact_info_list\">
                                <li class=\"contact_info_item d-flex flex-row\">
                                    <div><div class=\"contact_info_icon\"><img src=\"../../public/images/placeholder.svg\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\">4127 Raoul Wallenber 45b-c Gibraltar</div>
                                </li>
                                <li class=\"contact_info_item d-flex flex-row\">
                                    <div><div class=\"contact_info_icon\"><img src=\"../../public/images/phone-call.svg\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\">2556-808-8613</div>
                                </li>
                                <li class=\"contact_info_item d-flex flex-row\">
                                    <div><div class=\"contact_info_icon\"><img src=\"../../public/images/message.svg\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\"><a href=\"mailto:contactme@gmail.com?Subject=Hello\" target=\"_top\">contactme@gmail.com</a></div>
                                </li>
                                <li class=\"contact_info_item d-flex flex-row\">
                                    <div><div class=\"contact_info_icon\"><img src=\"../../public/images/planet-earth.svg\" alt=\"\"></div></div>
                                    <div class=\"contact_info_text\"><a href=\"https://colorlib.com\">www.colorlib.com</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <!-- Copyright -->

    <div class=\"copyright\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-3 order-lg-1 order-2  \">
                    <div class=\"copyright_content d-flex flex-row align-items-center\">
                        <div><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>. Downloaded from <a href=\"https://themeslab.org/\" target=\"_blank\">Themeslab</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
                    </div>
                </div>
                <div class=\"col-lg-9 order-lg-2 order-1\">
                    <div class=\"footer_nav_container d-flex flex-row align-items-center justify-content-lg-end\">
                        <div class=\"footer_nav\">
                            <ul class=\"footer_nav_list\">
                                <li class=\"footer_nav_item\"><a href=\"#\">home</a></li>
                                <!--<li class=\"footer_nav_item\"><a href=\"about.html\">about us</a></li>
                                <li class=\"footer_nav_item\"><a href=\"offers.html\">offers</a></li>
                                <li class=\"footer_nav_item\"><a href=\"blog.html\">news</a></li>
                                <li class=\"footer_nav_item\"><a href=\"contact.html\">contact</a></li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

    </div>
{% endblock %}
</body>
</html>", "reclamation.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\reclamation.html.twig");
    }
}
