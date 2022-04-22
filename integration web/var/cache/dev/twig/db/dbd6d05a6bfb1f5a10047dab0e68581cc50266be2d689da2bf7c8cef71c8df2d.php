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

/* baseFront.html.twig */
class __TwigTemplate_c7b6d03936495310e7ee720aec80a6f79bb46f145aed78f67aacccfdc605e6f5 extends Template
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
            'bodyContainer' => [$this, 'block_bodyContainer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseFront.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>

    <meta charset=\"UTF-8\">
    <title> Welcome! </title>

    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "
    ";
        // line 21
        $this->displayBlock('javascripts', $context, $blocks);
        // line 31
        echo "</head>
<body>
";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        
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
        echo "

        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/styles/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/plugins/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/plugins/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/plugins/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/styles/main_styles.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/styles/responsive.css"), "html", null, true);
        echo "\">

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/styles/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/styles/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/js/custom.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 34
        echo "<div class=\"super_container\">

    <!-- Header -->

    <header class=\"header\">

        <!-- Top Bar -->

        <div class=\"top_bar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col d-flex flex-row\">
                        <div class=\"phone\">26304693</div>
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
                            ";
        // line 60
        echo "</div>
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
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/images/logo.png"), "html", null, true);
        echo "\" alt=\"\">HappyPark</a></div>
                        </div>
                        <div class=\"main_nav_container ml-auto\">
                            <ul class=\"main_nav_list\">
                                <li class=\"main_nav_item\"><a href=\"#\">home</a></li>
                                <li class=\"main_nav_item\"><a href=\"about.html\">about us</a></li>
                                <li class=\"main_nav_item\"><a href=\"offers.html\">offers</a></li>
                                <li class=\"main_nav_item\"><a href=\"blog.html\">news</a></li>
                                <li class=\"main_nav_item\"><a href=\"\">contact</a></li>
                                <li class=\"main_nav_item\"><a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherr");
        echo "\">Films Disponibles</a></li>
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
            <div class=\"logo menu_logo\"><a href=\"#\"><img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/images/logo.png"), "html", null, true);
        echo "\" alt=\"\"></a></div>
            <ul>
                <li class=\"menu_item\"><a href=\"#\">home</a></li>
                <li class=\"menu_item\"><a href=\"about.html\">about us</a></li>
                <li class=\"menu_item\"><a href=\"offers.html\">offers</a></li>
                <li class=\"menu_item\"><a href=\"blog.html\">news</a></li>
                <li class=\"menu_item\"><a href=\"contact.html\">contact</a></li>
                <li class=\"menu_item\"><a href=\"afficher.html.twig\">Films Disponibles</a></li>
            </ul>
        </div>
    </div>

    <!-- Home -->


    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/contact_background.jpg"), "html", null, true);
        echo "\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">contact</div>
        </div>
    </div>

    <!-- Home Slider -->


    <div class=\"home_slider_container\">
        <div class=\"owl-carousel owl-theme home_slider\">

            <!-- Slider Item -->
            <div class=\"owl-item home_slider_item\">
                <div class=\"home_slider_background\" style=\"background-image:url(images/e.jpg)\"></div>

            </div>

            <!-- Slider Item -->
            <div class=\"owl-item home_slider_item\">
                <div class=\"home_slider_background\" style=\"background-image:url(../public/images/home_slider.jpg)\"></div>

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
                <div class=\"home_slider_background\" style=\"background-image:url(../public/images/home_slider.jpg)\"></div>

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



    </div>

</div>


";
        // line 231
        $this->displayBlock('bodyContainer', $context, $blocks);
        // line 234
        echo "







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
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/images/logo.png"), "html", null, true);
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
                            <div class=\"footer_blog_image\"><img src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/images/footer_blog_1.jpg"), "html", null, true);
        echo "\" alt=\"https://unsplash.com/@avidenov\"></div>
                            <div class=\"footer_blog_content\">
                                <!-- <div class=\"footer_blog_title\"><a href=\"blog.html\">Travel with us this year</a></div>
                                --> <div class=\"footer_blog_date\">Nov 29, 2017</div>
                            </div>
                        </div>

                        <!-- Footer blog item -->
                        <div class=\"footer_blog_item clearfix\">
                            <div class=\"footer_blog_image\"><img src=\"";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/images/footer_blog_2.jpg"), "html", null, true);
        echo "\" alt=\"https://unsplash.com/@deannaritchie\"></div>
                            <div class=\"footer_blog_content\">
                                <!-- <div class=\"footer_blog_title\"><a href=\"blog.html\">New destinations for you</a></div>
                                --> <div class=\"footer_blog_date\">Nov 29, 2017</div>
                            </div>
                        </div>

                        <!-- Footer blog item -->
                        <div class=\"footer_blog_item clearfix\">
                            <div class=\"footer_blog_image\"><img src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/images/footer_blog_3.jpg"), "html", null, true);
        echo "\" alt=\"https://unsplash.com/@bergeryap87\"></div>
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
                                <div><div class=\"contact_info_icon\"><img src=\"";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/images/placeholder.svg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                                <div class=\"contact_info_text\">4127 Raoul Wallenber 45b-c Gibraltar</div>
                            </li>
                            <li class=\"contact_info_item d-flex flex-row\">
                                <div><div class=\"contact_info_icon\"><img src=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/images/phone-call.svg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                                <div class=\"contact_info_text\">2556-808-8613</div>
                            </li>
                            <li class=\"contact_info_item d-flex flex-row\">
                                <div><div class=\"contact_info_icon\"><img src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/images/message.svg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                                <div class=\"contact_info_text\"><a href=\"mailto:contactme@gmail.com?Subject=Hello\" target=\"_top\">contactme@gmail.com</a></div>
                            </li>
                            <li class=\"contact_info_item d-flex flex-row\">
                                <div><div class=\"contact_info_icon\"><img src=\"";
        // line 326
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("frontStyle/images/planet-earth.svg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
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

</body>


</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 231
    public function block_bodyContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyContainer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyContainer"));

        // line 232
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseFront.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  581 => 232,  571 => 231,  512 => 326,  505 => 322,  498 => 318,  491 => 314,  467 => 293,  455 => 284,  443 => 275,  418 => 253,  397 => 234,  395 => 231,  303 => 142,  284 => 126,  237 => 82,  225 => 73,  210 => 60,  184 => 34,  174 => 33,  161 => 28,  157 => 27,  153 => 26,  149 => 25,  145 => 24,  141 => 23,  138 => 22,  128 => 21,  115 => 17,  111 => 16,  107 => 15,  103 => 14,  99 => 13,  95 => 12,  91 => 11,  87 => 9,  77 => 8,  67 => 33,  63 => 31,  61 => 21,  58 => 20,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>

    <meta charset=\"UTF-8\">
    <title> Welcome! </title>

    {% block stylesheets %}


        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('frontStyle/styles/bootstrap4/bootstrap.min.css') }}\">
        <link href=\"{{ asset('frontStyle/plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('frontStyle/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('frontStyle/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('frontStyle/plugins/OwlCarousel2-2.2.1/animate.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('frontStyle/styles/main_styles.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('frontStyle/styles/responsive.css') }}\">

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
                        <div class=\"phone\">26304693</div>
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
                            {#  <div class=\"user_box_login user_box_link\"><a href=\"{{ path(\"app_login\") }}\">login</a></div>
                            <div class=\"user_box_register user_box_link\"><a href=\"{{path(\"app_register\")}}\">register</a></div>
                            #}</div>
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
                            <div class=\"logo\"><a href=\"#\"><img src=\"{{ asset('frontStyle/images/logo.png') }}\" alt=\"\">HappyPark</a></div>
                        </div>
                        <div class=\"main_nav_container ml-auto\">
                            <ul class=\"main_nav_list\">
                                <li class=\"main_nav_item\"><a href=\"#\">home</a></li>
                                <li class=\"main_nav_item\"><a href=\"about.html\">about us</a></li>
                                <li class=\"main_nav_item\"><a href=\"offers.html\">offers</a></li>
                                <li class=\"main_nav_item\"><a href=\"blog.html\">news</a></li>
                                <li class=\"main_nav_item\"><a href=\"\">contact</a></li>
                                <li class=\"main_nav_item\"><a href=\"{{ path(\"afficherr\") }}\">Films Disponibles</a></li>
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
            <div class=\"logo menu_logo\"><a href=\"#\"><img src=\"{{ asset('frontStyle/images/logo.png') }}\" alt=\"\"></a></div>
            <ul>
                <li class=\"menu_item\"><a href=\"#\">home</a></li>
                <li class=\"menu_item\"><a href=\"about.html\">about us</a></li>
                <li class=\"menu_item\"><a href=\"offers.html\">offers</a></li>
                <li class=\"menu_item\"><a href=\"blog.html\">news</a></li>
                <li class=\"menu_item\"><a href=\"contact.html\">contact</a></li>
                <li class=\"menu_item\"><a href=\"afficher.html.twig\">Films Disponibles</a></li>
            </ul>
        </div>
    </div>

    <!-- Home -->


    <div class=\"home\">
        <div class=\"home_background parallax-window\" data-parallax=\"scroll\" src=\"{{ asset('frontStyle/contact_background.jpg')}}\"></div>
        <div class=\"home_content\">
            <div class=\"home_title\">contact</div>
        </div>
    </div>

    <!-- Home Slider -->


    <div class=\"home_slider_container\">
        <div class=\"owl-carousel owl-theme home_slider\">

            <!-- Slider Item -->
            <div class=\"owl-item home_slider_item\">
                <div class=\"home_slider_background\" style=\"background-image:url(images/e.jpg)\"></div>

            </div>

            <!-- Slider Item -->
            <div class=\"owl-item home_slider_item\">
                <div class=\"home_slider_background\" style=\"background-image:url(../public/images/home_slider.jpg)\"></div>

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
                <div class=\"home_slider_background\" style=\"background-image:url(../public/images/home_slider.jpg)\"></div>

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



    </div>

</div>


{% block bodyContainer %}

{% endblock %}








<!-- Footer -->

<footer class=\"footer\">
    <div class=\"container\">
        <div class=\"row\">

            <!-- Footer Column -->
            <div class=\"col-lg-3 footer_column\">
                <div class=\"footer_col\">
                    <div class=\"footer_content footer_about\">
                        <div class=\"logo_container footer_logo\">
                            <div class=\"logo\"><a href=\"#\"><img src=\"{{ asset('frontStyle/images/logo.png') }}\" alt=\"\">Happy Park</a></div>
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
                            <div class=\"footer_blog_image\"><img src=\"{{ asset('frontStyle/images/footer_blog_1.jpg') }}\" alt=\"https://unsplash.com/@avidenov\"></div>
                            <div class=\"footer_blog_content\">
                                <!-- <div class=\"footer_blog_title\"><a href=\"blog.html\">Travel with us this year</a></div>
                                --> <div class=\"footer_blog_date\">Nov 29, 2017</div>
                            </div>
                        </div>

                        <!-- Footer blog item -->
                        <div class=\"footer_blog_item clearfix\">
                            <div class=\"footer_blog_image\"><img src=\"{{ asset('frontStyle/images/footer_blog_2.jpg') }}\" alt=\"https://unsplash.com/@deannaritchie\"></div>
                            <div class=\"footer_blog_content\">
                                <!-- <div class=\"footer_blog_title\"><a href=\"blog.html\">New destinations for you</a></div>
                                --> <div class=\"footer_blog_date\">Nov 29, 2017</div>
                            </div>
                        </div>

                        <!-- Footer blog item -->
                        <div class=\"footer_blog_item clearfix\">
                            <div class=\"footer_blog_image\"><img src=\"{{ asset('frontStyle/images/footer_blog_3.jpg') }}\" alt=\"https://unsplash.com/@bergeryap87\"></div>
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
                                <div><div class=\"contact_info_icon\"><img src=\"{{ asset('frontStyle/images/placeholder.svg') }}\" alt=\"\"></div></div>
                                <div class=\"contact_info_text\">4127 Raoul Wallenber 45b-c Gibraltar</div>
                            </li>
                            <li class=\"contact_info_item d-flex flex-row\">
                                <div><div class=\"contact_info_icon\"><img src=\"{{ asset('frontStyle/images/phone-call.svg') }}\" alt=\"\"></div></div>
                                <div class=\"contact_info_text\">2556-808-8613</div>
                            </li>
                            <li class=\"contact_info_item d-flex flex-row\">
                                <div><div class=\"contact_info_icon\"><img src=\"{{ asset('frontStyle/images/message.svg') }}\" alt=\"\"></div></div>
                                <div class=\"contact_info_text\"><a href=\"mailto:contactme@gmail.com?Subject=Hello\" target=\"_top\">contactme@gmail.com</a></div>
                            </li>
                            <li class=\"contact_info_item d-flex flex-row\">
                                <div><div class=\"contact_info_icon\"><img src=\"{{ asset('frontStyle/images/planet-earth.svg') }}\" alt=\"\"></div></div>
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

</body>


</html>
{% endblock %}
", "baseFront.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\baseFront.html.twig");
    }
}
