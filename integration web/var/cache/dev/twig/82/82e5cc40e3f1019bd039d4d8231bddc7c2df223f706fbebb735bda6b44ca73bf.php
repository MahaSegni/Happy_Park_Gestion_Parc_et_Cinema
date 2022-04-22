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

/* indexEvent.html.twig */
class __TwigTemplate_05cf691a8e5d91ec0b306323791dea8dd70ce42a36f3b529b7681f882080f1b2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
            'event' => [$this, 'block_event'],
            'Comment' => [$this, 'block_Comment'],
            'commentaire' => [$this, 'block_commentaire'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "indexEvent.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "indexEvent.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>


    ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "
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
        // line 538
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "<title>Welcome!</title>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles1/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins1/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins1/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins1/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins1/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles1/main_styles.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles1/responsive.css"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins1/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins1/easing/easing.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
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
                                <div class=\"logo\"><a href=\"#\"><img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/logo.png"), "html", null, true);
        echo "\" alt=\"\">Happy PARK</a></div>
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
\t\t\t\t\t\t\t\t<g>
                                    <g>
                                        <g>

                                            <path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
\t\t\t\t\t\t\t\t\t\t\ts112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
\t\t\t\t\t\t\t\t\t\t\tC407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
\t\t\t\t\t\t\t\t\t\t\tM119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
\t\t\t\t\t\t\t\t\t\t\tc0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z\"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
\t\t\t\t\t\t\t\t\t\t\tc8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
\t\t\t\t\t\t\t\t\t\t\tC-2.019,484.77-2.019,497.865,6.057,505.942z\"/>
                                        </g>
                                    </g>
                                </g>
\t\t\t\t\t\t\t</svg>
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/logo.png"), "html", null, true);
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

                <div class=\"owl-carousel owl-theme home_slider\">

                    <!-- Slider Item -->
                    <div class=\"owl-item home_slider_item\">
                        <!-- Image by https://unsplash.com/@anikindimitry -->
                        <div class=\"home_slider_background\" style=\"background-image:url(";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/home_slider.jpg"), "html", null, true);
        echo "\"></div>

                        <div class=\"home_slider_content text-center\">
                            <div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
                                <h1>discover</h1>
                                <h1>the world</h1>
                                <div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"#\">explore now<span></span><span></span><span></span></a></div>
                            </div>
                        </div>
                    </div>

                    <!-- Slider Item -->
                    <div class=\"owl-item home_slider_item\">
                        <div class=\"home_slider_background\" style=\"background-image:url(";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home_slider.jpg"), "html", null, true);
        echo "\"></div>

                        <div class=\"home_slider_content text-center\">
                            <div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
                                <h1>discover</h1>
                                <h1>the world</h1>
                                <div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"#\">explore now<span></span><span></span><span></span></a></div>
                            </div>
                        </div>
                    </div>

                    <!-- Slider Item -->
                    <div class=\"owl-item home_slider_item\">
                        <div class=\"home_slider_background\" style=\"background-image:url(";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/home_slider.jpg"), "html", null, true);
        echo "\"></div>

                        <div class=\"home_slider_content text-center\">
                            <div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
                                <h1>discover</h1>
                                <h1>the world</h1>
                                <div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"#\">explore now<span></span><span></span><span></span></a></div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Home Slider Nav - Prev -->
                <div class=\"home_slider_nav home_slider_prev\">
                    <svg version=\"1.1\" id=\"Layer_2\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                         width=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t<defs>
                        <linearGradient id='home_grad_prev'>
                            <stop offset='0%' stop-color='#fa9e1b'/>
                            <stop offset='100%' stop-color='#8d4fff'/>
                        </linearGradient>
                    </defs>
                        <path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
                        <polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
\t\t\t\t\t11.042,18.219 \"/>
\t\t\t\t</svg>
                </div>

                <!-- Home Slider Nav - Next -->
                <div class=\"home_slider_nav home_slider_next\">
                    <svg version=\"1.1\" id=\"Layer_3\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                         width=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t<defs>
                        <linearGradient id='home_grad_next'>
                            <stop offset='0%' stop-color='#fa9e1b'/>
                            <stop offset='100%' stop-color='#8d4fff'/>
                        </linearGradient>
                    </defs>
                        <path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
                        <polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
\t\t\t\t17.046,15.554 \"/>
\t\t\t\t</svg>
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
        // line 262
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/bus.png"), "html", null, true);
        echo "\" alt=\"\"><a  href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addResrvation");
        echo "\"> <span>Parking</span></a></div>
                                <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/bus.png"), "html", null, true);
        echo "\" alt=\"\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherr");
        echo "\"> Film</a></div>
                                <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"";
        // line 264
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/departure.png"), "html", null, true);
        echo "\" alt=\"\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addrec");
        echo "\">Reclamation</a></div>
                                <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/island.png"), "html", null, true);
        echo "\"a alt=\"\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherPlatFront");
        echo "\">Plat</a></div>
                                <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/cruise.png"), "html", null, true);
        echo "\" alt=\"\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventIndex");
        echo "\">Evenement</a></div>
                                <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/diving.png"), "html", null, true);
        echo "\" alt=\"\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ListTypeAbonnement");
        echo "\">Abonnement</a></div>
                            </div>
                        </div>

                        <!-- Search Panel -->



                        <!-- Search Panel -->


                        <!-- Search Panel -->


                        <!-- Search Panel -->


                        <!-- Search Panel -->

                        <div class=\"search_panel\">
                            <form action=\"#\" id=\"search_form_5\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                                <div class=\"search_item\">
                                    <div>destination</div>
                                    <input type=\"text\" class=\"destination search_input\" required=\"required\">
                                </div>
                                <div class=\"search_item\">
                                    <div>check in</div>
                                    <input type=\"text\" class=\"check_in search_input\" placeholder=\"YYYY-MM-DD\">
                                </div>
                                <div class=\"search_item\">
                                    <div>check out</div>
                                    <input type=\"text\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\">
                                </div>
                                <div class=\"search_item\">
                                    <div>adults</div>
                                    <select name=\"adults\" id=\"adults_5\" class=\"dropdown_item_select search_input\">
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                    </select>
                                </div>
                                <div class=\"search_item\">
                                    <div>children</div>
                                    <select name=\"children\" id=\"children_5\" class=\"dropdown_item_select search_input\">
                                        <option>0</option>
                                        <option>02</option>
                                        <option>03</option>
                                    </select>
                                </div>
                                <button class=\"button search_button\">search<span></span><span></span><span></span></button>
                            </form>
                        </div>

                        <!-- Search Panel -->

                        <div class=\"search_panel\">
                            <form action=\"#\" id=\"search_form_6\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                                <div class=\"search_item\">
                                    <div>destination</div>
                                    <input type=\"text\" class=\"destination search_input\" required=\"required\">
                                </div>
                                <div class=\"search_item\">
                                    <div>check in</div>
                                    <input type=\"text\" class=\"check_in search_input\" placeholder=\"YYYY-MM-DD\">
                                </div>
                                <div class=\"search_item\">
                                    <div>check out</div>
                                    <input type=\"text\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\">
                                </div>
                                <div class=\"search_item\">
                                    <div>adults</div>
                                    <select name=\"adults\" id=\"adults_6\" class=\"dropdown_item_select search_input\">
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                    </select>
                                </div>
                                <div class=\"search_item\">
                                    <div>children</div>
                                    <select name=\"children\" id=\"children_6\" class=\"dropdown_item_select search_input\">
                                        <option>0</option>
                                        <option>02</option>
                                        <option>03</option>
                                    </select>
                                </div>
                                <button class=\"button search_button\">search<span></span><span></span><span></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Intro -->

        <div class=\"intro\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col\">
                        <h2 class=\"intro_title text-center\">We have the best tours</h2>
                    </div>
                </div>


                <div class=\"row intro_items\">
                ";
        // line 372
        $this->displayBlock('event', $context, $blocks);
        // line 373
        echo "                </div>

        <div class=\"cta\">
            <!-- Image by https://unsplash.com/@thanni -->
            <div class=\"cta_background\" ></div>
                        ";
        // line 378
        $this->displayBlock('Comment', $context, $blocks);
        // line 379
        echo "        </div></div>

        <!-- Offers -->

                </div>

            </div>
        </div>

        <div class=\"trending\">
            <div class=\"container\">


            </div>
        </div>

        <div class=\"contact\">

            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-7\">

                            ";
        // line 402
        $this->displayBlock('commentaire', $context, $blocks);
        // line 403
        echo "
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
                                    <div class=\"logo\"><a href=\"#\"><img src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/logo.png"), "html", null, true);
        echo "\" alt=\"\">Happy Park</a></div>
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

    // line 372
    public function block_event($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "event"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "event"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 378
    public function block_Comment($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Comment"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Comment"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 402
    public function block_commentaire($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "commentaire"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "commentaire"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "indexEvent.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  817 => 402,  799 => 378,  781 => 372,  653 => 420,  634 => 403,  632 => 402,  607 => 379,  605 => 378,  598 => 373,  596 => 372,  486 => 267,  480 => 266,  474 => 265,  468 => 264,  462 => 263,  456 => 262,  376 => 185,  360 => 172,  344 => 159,  317 => 135,  261 => 82,  220 => 43,  210 => 42,  197 => 37,  193 => 36,  189 => 35,  185 => 34,  181 => 33,  176 => 32,  166 => 31,  141 => 15,  137 => 14,  133 => 13,  129 => 12,  125 => 11,  121 => 10,  116 => 9,  106 => 8,  87 => 6,  75 => 538,  73 => 42,  69 => 40,  67 => 31,  64 => 30,  62 => 8,  59 => 7,  57 => 6,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>


    {% block title %}<title>Welcome!</title>{% endblock %}

    {% block stylesheets %}
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles1/bootstrap4/bootstrap.min.css') }}\">
        <link href=\"{{ asset('plugins1/font-awesome-4.7.0/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins1/OwlCarousel2-2.2.1/owl.carousel.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins1/OwlCarousel2-2.2.1/owl.theme.default.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins1/OwlCarousel2-2.2.1/animate.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles1/main_styles.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles1/responsive.css') }}\">

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
        <script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>
        <script src=\"{{ asset('styles/bootstrap4/popper.js') }}\"></script>
        <script src=\"{{ asset('styles/bootstrap4/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('plugins1/OwlCarousel2-2.2.1/owl.carousel.js') }}\"></script>
        <script src=\"{{ asset('plugins1/easing/easing.js') }}\"></script>
        <script src=\"{{ asset('js/custom.js') }}\"></script>

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
                                <div class=\"logo\"><a href=\"#\"><img src=\"{{ asset('images1/logo.png') }}\" alt=\"\">Happy PARK</a></div>
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
\t\t\t\t\t\t\t\t<g>
                                    <g>
                                        <g>

                                            <path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M78.438,216.78c0,57.906,22.55,112.343,63.493,153.287c40.945,40.944,95.383,63.494,153.287,63.494
\t\t\t\t\t\t\t\t\t\t\ts112.344-22.55,153.287-63.494C489.451,329.123,512,274.686,512,216.78c0-57.904-22.549-112.342-63.494-153.286
\t\t\t\t\t\t\t\t\t\t\tC407.563,22.549,353.124,0,295.219,0c-57.904,0-112.342,22.549-153.287,63.494C100.988,104.438,78.439,158.876,78.438,216.78z
\t\t\t\t\t\t\t\t\t\t\tM119.804,216.78c0-96.725,78.69-175.416,175.415-175.416s175.418,78.691,175.418,175.416
\t\t\t\t\t\t\t\t\t\t\tc0,96.725-78.691,175.416-175.416,175.416C198.495,392.195,119.804,313.505,119.804,216.78z\"/>
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path class=\"mag_glass\" fill=\"#FFFFFF\" d=\"M6.057,505.942c4.038,4.039,9.332,6.058,14.625,6.058s10.587-2.019,14.625-6.058L171.268,369.98
\t\t\t\t\t\t\t\t\t\t\tc8.076-8.076,8.076-21.172,0-29.248c-8.076-8.078-21.172-8.078-29.249,0L6.057,476.693
\t\t\t\t\t\t\t\t\t\t\tC-2.019,484.77-2.019,497.865,6.057,505.942z\"/>
                                        </g>
                                    </g>
                                </g>
\t\t\t\t\t\t\t</svg>
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
                <div class=\"logo menu_logo\"><a href=\"#\"><img src=\" {{ asset('images1/logo.png') }}\" alt=\"\"></a></div>
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

                <div class=\"owl-carousel owl-theme home_slider\">

                    <!-- Slider Item -->
                    <div class=\"owl-item home_slider_item\">
                        <!-- Image by https://unsplash.com/@anikindimitry -->
                        <div class=\"home_slider_background\" style=\"background-image:url({{ asset('images1/home_slider.jpg')}}\"></div>

                        <div class=\"home_slider_content text-center\">
                            <div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
                                <h1>discover</h1>
                                <h1>the world</h1>
                                <div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"#\">explore now<span></span><span></span><span></span></a></div>
                            </div>
                        </div>
                    </div>

                    <!-- Slider Item -->
                    <div class=\"owl-item home_slider_item\">
                        <div class=\"home_slider_background\" style=\"background-image:url({{ asset('images/home_slider.jpg')}}\"></div>

                        <div class=\"home_slider_content text-center\">
                            <div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
                                <h1>discover</h1>
                                <h1>the world</h1>
                                <div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"#\">explore now<span></span><span></span><span></span></a></div>
                            </div>
                        </div>
                    </div>

                    <!-- Slider Item -->
                    <div class=\"owl-item home_slider_item\">
                        <div class=\"home_slider_background\" style=\"background-image:url({{ asset('images/home_slider.jpg')}}\"></div>

                        <div class=\"home_slider_content text-center\">
                            <div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
                                <h1>discover</h1>
                                <h1>the world</h1>
                                <div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"#\">explore now<span></span><span></span><span></span></a></div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Home Slider Nav - Prev -->
                <div class=\"home_slider_nav home_slider_prev\">
                    <svg version=\"1.1\" id=\"Layer_2\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                         width=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t<defs>
                        <linearGradient id='home_grad_prev'>
                            <stop offset='0%' stop-color='#fa9e1b'/>
                            <stop offset='100%' stop-color='#8d4fff'/>
                        </linearGradient>
                    </defs>
                        <path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
                        <polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
\t\t\t\t\t11.042,18.219 \"/>
\t\t\t\t</svg>
                </div>

                <!-- Home Slider Nav - Next -->
                <div class=\"home_slider_nav home_slider_next\">
                    <svg version=\"1.1\" id=\"Layer_3\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" x=\"0px\" y=\"0px\"
                         width=\"28px\" height=\"33px\" viewBox=\"0 0 28 33\" enable-background=\"new 0 0 28 33\" xml:space=\"preserve\">
\t\t\t\t\t<defs>
                        <linearGradient id='home_grad_next'>
                            <stop offset='0%' stop-color='#fa9e1b'/>
                            <stop offset='100%' stop-color='#8d4fff'/>
                        </linearGradient>
                    </defs>
                        <path class=\"nav_path\" fill=\"#F3F6F9\" d=\"M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
\t\t\t\tM26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
\t\t\t\tC22.545,2,26,5.541,26,9.909V23.091z\"/>
                        <polygon class=\"nav_arrow\" fill=\"#F3F6F9\" points=\"13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
\t\t\t\t17.046,15.554 \"/>
\t\t\t\t</svg>
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

                        <!-- Search Panel -->



                        <!-- Search Panel -->


                        <!-- Search Panel -->


                        <!-- Search Panel -->


                        <!-- Search Panel -->

                        <div class=\"search_panel\">
                            <form action=\"#\" id=\"search_form_5\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                                <div class=\"search_item\">
                                    <div>destination</div>
                                    <input type=\"text\" class=\"destination search_input\" required=\"required\">
                                </div>
                                <div class=\"search_item\">
                                    <div>check in</div>
                                    <input type=\"text\" class=\"check_in search_input\" placeholder=\"YYYY-MM-DD\">
                                </div>
                                <div class=\"search_item\">
                                    <div>check out</div>
                                    <input type=\"text\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\">
                                </div>
                                <div class=\"search_item\">
                                    <div>adults</div>
                                    <select name=\"adults\" id=\"adults_5\" class=\"dropdown_item_select search_input\">
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                    </select>
                                </div>
                                <div class=\"search_item\">
                                    <div>children</div>
                                    <select name=\"children\" id=\"children_5\" class=\"dropdown_item_select search_input\">
                                        <option>0</option>
                                        <option>02</option>
                                        <option>03</option>
                                    </select>
                                </div>
                                <button class=\"button search_button\">search<span></span><span></span><span></span></button>
                            </form>
                        </div>

                        <!-- Search Panel -->

                        <div class=\"search_panel\">
                            <form action=\"#\" id=\"search_form_6\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                                <div class=\"search_item\">
                                    <div>destination</div>
                                    <input type=\"text\" class=\"destination search_input\" required=\"required\">
                                </div>
                                <div class=\"search_item\">
                                    <div>check in</div>
                                    <input type=\"text\" class=\"check_in search_input\" placeholder=\"YYYY-MM-DD\">
                                </div>
                                <div class=\"search_item\">
                                    <div>check out</div>
                                    <input type=\"text\" class=\"check_out search_input\" placeholder=\"YYYY-MM-DD\">
                                </div>
                                <div class=\"search_item\">
                                    <div>adults</div>
                                    <select name=\"adults\" id=\"adults_6\" class=\"dropdown_item_select search_input\">
                                        <option>01</option>
                                        <option>02</option>
                                        <option>03</option>
                                    </select>
                                </div>
                                <div class=\"search_item\">
                                    <div>children</div>
                                    <select name=\"children\" id=\"children_6\" class=\"dropdown_item_select search_input\">
                                        <option>0</option>
                                        <option>02</option>
                                        <option>03</option>
                                    </select>
                                </div>
                                <button class=\"button search_button\">search<span></span><span></span><span></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Intro -->

        <div class=\"intro\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col\">
                        <h2 class=\"intro_title text-center\">We have the best tours</h2>
                    </div>
                </div>


                <div class=\"row intro_items\">
                {% block event %}{% endblock  %}
                </div>

        <div class=\"cta\">
            <!-- Image by https://unsplash.com/@thanni -->
            <div class=\"cta_background\" ></div>
                        {% block Comment %}{% endblock  %}
        </div></div>

        <!-- Offers -->

                </div>

            </div>
        </div>

        <div class=\"trending\">
            <div class=\"container\">


            </div>
        </div>

        <div class=\"contact\">

            <div class=\"container\">
                <div class=\"row\">

                    <div class=\"col-lg-7\">

                            {% block commentaire %}{% endblock %}

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
                                    <div class=\"logo\"><a href=\"#\"><img src=\"{{ asset('images1/logo.png') }}\" alt=\"\">Happy Park</a></div>
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
</html>
", "indexEvent.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\indexEvent.html.twig");
    }
}
