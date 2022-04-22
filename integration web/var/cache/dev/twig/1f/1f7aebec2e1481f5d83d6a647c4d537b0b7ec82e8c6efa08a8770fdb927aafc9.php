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

/* basefilm12.html.twig */
class __TwigTemplate_fb6066b459f992d00521ffc4ba3f6ed4e3eb548b36311627aeb27b33a7178ed4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basefilm12.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "basefilm12.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>

    <meta charset=\"UTF-8\">
    <title> Welcome! </title>

    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "
    ";
        // line 20
        $this->displayBlock('javascripts', $context, $blocks);
        // line 29
        echo "</head>
<body>
";
        // line 31
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
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles1/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins1/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins1/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins1/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins1/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles1/main_styles.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles1/responsive.css"), "html", null, true);
        echo "\">

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
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles1/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles1/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins1/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins1/easing/easing.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 32
        echo "<div class=\"super_container\">

    <!-- Header -->

    <header class=\"header\">

        <!-- Top Bar -->

        <div class=\"top_bar\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col d-flex flex-row\">
                        <div class=\"phone\">26304693</div>
                        <div class=\"search_tabs_container\">
                            <div class=\"search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                                <div class=\"search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/bus.png"), "html", null, true);
        echo "\" alt=\"\"><a  href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addResrvation");
        echo "\"> <span>Parking</span></a></div>
                                <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/bus.png"), "html", null, true);
        echo "\" alt=\"\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherr");
        echo "\"> Film</a></div>
                                <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/departure.png"), "html", null, true);
        echo "\" alt=\"\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addrec");
        echo "\">Reclamation</a></div>
                                <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/island.png"), "html", null, true);
        echo "\"a alt=\"\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherPlatFront");
        echo "\">Plat</a></div>
                                <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/cruise.png"), "html", null, true);
        echo "\" alt=\"\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventIndex");
        echo "\">Abonnement</a></div>
                                <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/diving.png"), "html", null, true);
        echo "\" alt=\"\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ListTypeAbonnement");
        echo "\">Evenement</a></div>
                            </div>
                        </div>
                        <div class=\"user_box ml-auto\">
                            <div class=\"user_box_login user_box_link\"><a href=\"";
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">login</a></div>
                            <div class=\"user_box_register user_box_link\"><a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\">register</a></div>
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
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/logo.png"), "html", null, true);
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
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherr");
        echo "\"> Films Disponibles</a></li>

                            </ul>
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
        // line 98
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


    <!-- Home


        <div class=\"home\">
            <div class=\"home_background parallax-window\" data-parallax=\"scroll\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/contact_background.jpg"), "html", null, true);
        echo "\"></div>
            <div class=\"home_content\">
                <div class=\"home_title\">contact</div>
            </div>
        </div>-->




    <!-- Slider Item
                    <div class=\"owl-item home_slider_item\">
                        <div class=\"home_slider_background\"style=\"background-image:url(";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/home_slider.jpg"), "html", null, true);
        echo ")\" ></div>

                    </div>-->

    <!-- Slider Item
                    <div class=\"owl-item home_slider_item\">
                        <div class=\"home_slider_background\" style=\"background-image:url(";
        // line 132
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/home_slider.jpg"), "html", null, true);
        echo ")\"></div>

                        <div class=\"home_slider_content text-center\">
                            <div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
                                <h1>discover</h1>
                                <h1>the world</h1>
                                <div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"#\">explore now<span></span><span></span><span></span></a></div>
                            </div>
                        </div>
                    </div>
-->
    <!-- Slider Item
                    <div class=\"owl-item home_slider_item\">
                        <div class=\"home_slider_background\" style=\"background-image:url(";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/home_slider.jpg"), "html", null, true);
        echo ")\"></div>

                        <div class=\"home_slider_content text-center\">
                            <div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
                                <h1>discover</h1>
                                <h1>the world</h1>
                                <div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"#\">explore now<span></span><span></span><span></span></a></div>
                            </div>
                        </div>
                    </div>

                </div>
-->
    <!-- Home Slider Nav - Prev -->
    <!--   <div class=\"home_slider_nav home_slider_prev\">
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
      </div>-->

    <!-- Home Slider Nav - Next -->
    <!-- <div class=\"home_slider_nav home_slider_next\">
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



</div>

</div>-->


    Intro -->

    <div class=\"intro\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">

                </div>
            </div>
            <div  style=\"display: block;
                      margin-left: auto;
                      margin-right: auto;
                      height: 500%;\">
                <div style=\"width:800px; margin:20px auto; display: block;\">
                    <div class=\"row\">
                        <div class=\"col-lg-5\">
                            <div class=\"contact_image\">

                            </div>
                        </div>
                        <div ><br></div>
                        <div ";
        // line 222
        echo " style=\"width:800px; margin:20px auto;\">
                            <div class=\"contact_form_container\">

                                ";
        // line 225
        $this->displayBlock('title', $context, $blocks);
        // line 226
        echo "                            </div>
                        </div>
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
        // line 255
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
                                    <div class=\"footer_blog_image\"><img src=\"";
        // line 277
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/footer_blog_1.jpg"), "html", null, true);
        echo "\" alt=\"https://unsplash.com/@avidenov\"></div>
                                    <div class=\"footer_blog_content\">
                                        <!-- <div class=\"footer_blog_title\"><a href=\"blog.html\">Travel with us this year</a></div>
                                        --> <div class=\"footer_blog_date\">Nov 29, 2017</div>
                                    </div>
                                </div>

                                <!-- Footer blog item -->
                                <div class=\"footer_blog_item clearfix\">
                                    <div class=\"footer_blog_image\"><img src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/footer_blog_2.jpg"), "html", null, true);
        echo "\" alt=\"https://unsplash.com/@deannaritchie\"></div>
                                    <div class=\"footer_blog_content\">
                                        <!-- <div class=\"footer_blog_title\"><a href=\"blog.html\">New destinations for you</a></div>
                                        --> <div class=\"footer_blog_date\">Nov 29, 2017</div>
                                    </div>
                                </div>

                                <!-- Footer blog item -->
                                <div class=\"footer_blog_item clearfix\">
                                    <div class=\"footer_blog_image\"><img src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/footer_blog_3.jpg"), "html", null, true);
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
        // line 316
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/placeholder.svg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                                        <div class=\"contact_info_text\">4127 Raoul Wallenber 45b-c Gibraltar</div>
                                    </li>
                                    <li class=\"contact_info_item d-flex flex-row\">
                                        <div><div class=\"contact_info_icon\"><img src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/phone-call.svg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                                        <div class=\"contact_info_text\">2556-808-8613</div>
                                    </li>
                                    <li class=\"contact_info_item d-flex flex-row\">
                                        <div><div class=\"contact_info_icon\"><img src=\"";
        // line 324
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/message.svg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                                        <div class=\"contact_info_text\"><a href=\"mailto:contactme@gmail.com?Subject=Hello\" target=\"_top\">contactme@gmail.com</a></div>
                                    </li>
                                    <li class=\"contact_info_item d-flex flex-row\">
                                        <div><div class=\"contact_info_icon\"><img src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/planet-earth.svg"), "html", null, true);
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

    // line 225
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
        return "basefilm12.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  620 => 225,  562 => 328,  555 => 324,  548 => 320,  541 => 316,  517 => 295,  505 => 286,  493 => 277,  468 => 255,  437 => 226,  435 => 225,  430 => 222,  350 => 145,  334 => 132,  325 => 126,  311 => 115,  291 => 98,  271 => 81,  258 => 71,  241 => 57,  237 => 56,  228 => 52,  222 => 51,  216 => 50,  210 => 49,  204 => 48,  198 => 47,  181 => 32,  171 => 31,  158 => 26,  154 => 25,  150 => 24,  146 => 23,  142 => 22,  137 => 21,  127 => 20,  114 => 16,  110 => 15,  106 => 14,  102 => 13,  98 => 12,  94 => 11,  90 => 10,  87 => 9,  77 => 8,  67 => 31,  63 => 29,  61 => 20,  58 => 19,  56 => 8,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>

    <meta charset=\"UTF-8\">
    <title> Welcome! </title>

    {% block stylesheets %}

        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles1/bootstrap4/bootstrap.min.css') }}\">
        <link href=\"{{ asset('plugins1/font-awesome-4.7.0/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins1/OwlCarousel2-2.2.1/owl.carousel.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins1/OwlCarousel2-2.2.1/owl.theme.default.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins1/OwlCarousel2-2.2.1/animate.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles1/main_styles.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles1/responsive.css') }}\">

    {% endblock %}

    {% block javascripts %}
        <script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>
        <script src=\"{{ asset('styles1/bootstrap4/popper.js') }}\"></script>
        <script src=\"{{ asset('styles1/bootstrap4/bootstrap.min.js') }}\"></script>
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
                        <div class=\"phone\">26304693</div>
                        <div class=\"search_tabs_container\">
                            <div class=\"search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                                <div class=\"search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"{{ asset('images1/bus.png') }}\" alt=\"\"><a  href=\"{{ path(\"addResrvation\") }}\"> <span>Parking</span></a></div>
                                <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"{{ asset('images1/bus.png') }}\" alt=\"\"><a href=\"{{ path(\"afficherr\") }}\"> Film</a></div>
                                <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"{{ asset('images1/departure.png') }}\" alt=\"\"><a href=\"{{ path(\"addrec\") }}\">Reclamation</a></div>
                                <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"{{ asset('images1/island.png') }}\"a alt=\"\"><a href=\"{{ path(\"afficherPlatFront\") }}\">Plat</a></div>
                                <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"{{ asset('images1/cruise.png') }}\" alt=\"\"><a href=\"{{ path(\"eventIndex\") }}\">Abonnement</a></div>
                                <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"{{ asset('images1/diving.png') }}\" alt=\"\"><a href=\"{{ path(\"ListTypeAbonnement\") }}\">Evenement</a></div>
                            </div>
                        </div>
                        <div class=\"user_box ml-auto\">
                            <div class=\"user_box_login user_box_link\"><a href=\"{{ path(\"app_login\") }}\">login</a></div>
                            <div class=\"user_box_register user_box_link\"><a href=\"{{path(\"app_register\")}}\">register</a></div>
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
                            <div class=\"logo\"><a href=\"#\"><img src=\"{{ asset('images1/logo.png') }}\" alt=\"\">HappyPark</a></div>
                        </div>
                        <div class=\"main_nav_container ml-auto\">
                            <ul class=\"main_nav_list\">
                                <li class=\"main_nav_item\"><a href=\"#\">home</a></li>
                                <li class=\"main_nav_item\"><a href=\"about.html\">about us</a></li>
                                <li class=\"main_nav_item\"><a href=\"offers.html\">offers</a></li>
                                <li class=\"main_nav_item\"><a href=\"blog.html\">news</a></li>
                                <li class=\"main_nav_item\"><a href=\"\">contact</a></li>

                                <li class=\"main_nav_item\"><a href=\"{{ path(\"afficherr\") }}\"> Films Disponibles</a></li>

                            </ul>
                        </div>



                    </div>
                </div>
            </div>
        </nav>

    </header>

    <div class=\"menu trans_500\">
        <div class=\"menu_content d-flex flex-column align-items-center justify-content-center text-center\">
            <div class=\"menu_close_container\"><div class=\"menu_close\"></div></div>
            <div class=\"logo menu_logo\"><a href=\"#\"><img src=\"{{ asset('images1/logo.png') }}\" alt=\"\"></a></div>
            <ul>
                <li class=\"menu_item\"><a href=\"#\">home</a></li>
                <li class=\"menu_item\"><a href=\"about.html\">about us</a></li>
                <li class=\"menu_item\"><a href=\"offers.html\">offers</a></li>
                <li class=\"menu_item\"><a href=\"blog.html\">news</a></li>
                <li class=\"menu_item\"><a href=\"contact.html\">contact</a></li>

            </ul>
        </div>
    </div>


    <!-- Home


        <div class=\"home\">
            <div class=\"home_background parallax-window\" data-parallax=\"scroll\" src=\"{{ asset('images1/contact_background.jpg')}}\"></div>
            <div class=\"home_content\">
                <div class=\"home_title\">contact</div>
            </div>
        </div>-->




    <!-- Slider Item
                    <div class=\"owl-item home_slider_item\">
                        <div class=\"home_slider_background\"style=\"background-image:url({{ asset('images1/home_slider.jpg') }})\" ></div>

                    </div>-->

    <!-- Slider Item
                    <div class=\"owl-item home_slider_item\">
                        <div class=\"home_slider_background\" style=\"background-image:url({{ asset('images1/home_slider.jpg') }})\"></div>

                        <div class=\"home_slider_content text-center\">
                            <div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
                                <h1>discover</h1>
                                <h1>the world</h1>
                                <div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"#\">explore now<span></span><span></span><span></span></a></div>
                            </div>
                        </div>
                    </div>
-->
    <!-- Slider Item
                    <div class=\"owl-item home_slider_item\">
                        <div class=\"home_slider_background\" style=\"background-image:url({{ asset('images1/home_slider.jpg') }})\"></div>

                        <div class=\"home_slider_content text-center\">
                            <div class=\"home_slider_content_inner\" data-animation-in=\"flipInX\" data-animation-out=\"animate-out fadeOut\">
                                <h1>discover</h1>
                                <h1>the world</h1>
                                <div class=\"button home_slider_button\"><div class=\"button_bcg\"></div><a href=\"#\">explore now<span></span><span></span><span></span></a></div>
                            </div>
                        </div>
                    </div>

                </div>
-->
    <!-- Home Slider Nav - Prev -->
    <!--   <div class=\"home_slider_nav home_slider_prev\">
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
      </div>-->

    <!-- Home Slider Nav - Next -->
    <!-- <div class=\"home_slider_nav home_slider_next\">
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



</div>

</div>-->


    Intro -->

    <div class=\"intro\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">

                </div>
            </div>
            <div  style=\"display: block;
                      margin-left: auto;
                      margin-right: auto;
                      height: 500%;\">
                <div style=\"width:800px; margin:20px auto; display: block;\">
                    <div class=\"row\">
                        <div class=\"col-lg-5\">
                            <div class=\"contact_image\">

                            </div>
                        </div>
                        <div ><br></div>
                        <div {# class=\"col-lg-7\" #} style=\"width:800px; margin:20px auto;\">
                            <div class=\"contact_form_container\">

                                {% block title %} {% endblock %}
                            </div>
                        </div>
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
                                    <div class=\"footer_blog_image\"><img src=\"{{ asset('images1/footer_blog_1.jpg') }}\" alt=\"https://unsplash.com/@avidenov\"></div>
                                    <div class=\"footer_blog_content\">
                                        <!-- <div class=\"footer_blog_title\"><a href=\"blog.html\">Travel with us this year</a></div>
                                        --> <div class=\"footer_blog_date\">Nov 29, 2017</div>
                                    </div>
                                </div>

                                <!-- Footer blog item -->
                                <div class=\"footer_blog_item clearfix\">
                                    <div class=\"footer_blog_image\"><img src=\"{{ asset('images1/footer_blog_2.jpg') }}\" alt=\"https://unsplash.com/@deannaritchie\"></div>
                                    <div class=\"footer_blog_content\">
                                        <!-- <div class=\"footer_blog_title\"><a href=\"blog.html\">New destinations for you</a></div>
                                        --> <div class=\"footer_blog_date\">Nov 29, 2017</div>
                                    </div>
                                </div>

                                <!-- Footer blog item -->
                                <div class=\"footer_blog_item clearfix\">
                                    <div class=\"footer_blog_image\"><img src=\"{{ asset('images1/footer_blog_3.jpg') }}\" alt=\"https://unsplash.com/@bergeryap87\"></div>
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
                                        <div><div class=\"contact_info_icon\"><img src=\"{{ asset('images1/placeholder.svg') }}\" alt=\"\"></div></div>
                                        <div class=\"contact_info_text\">4127 Raoul Wallenber 45b-c Gibraltar</div>
                                    </li>
                                    <li class=\"contact_info_item d-flex flex-row\">
                                        <div><div class=\"contact_info_icon\"><img src=\"{{ asset('images1/phone-call.svg') }}\" alt=\"\"></div></div>
                                        <div class=\"contact_info_text\">2556-808-8613</div>
                                    </li>
                                    <li class=\"contact_info_item d-flex flex-row\">
                                        <div><div class=\"contact_info_icon\"><img src=\"{{ asset('images1/message.svg') }}\" alt=\"\"></div></div>
                                        <div class=\"contact_info_text\"><a href=\"mailto:contactme@gmail.com?Subject=Hello\" target=\"_top\">contactme@gmail.com</a></div>
                                    </li>
                                    <li class=\"contact_info_item d-flex flex-row\">
                                        <div><div class=\"contact_info_icon\"><img src=\"{{ asset('images1/planet-earth.svg') }}\" alt=\"\"></div></div>
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
", "basefilm12.html.twig", "F:\\pesonnel\\parcour\\3A\\copie pidev\\integration-web\\projet\\templates\\basefilm12.html.twig");
    }
}
