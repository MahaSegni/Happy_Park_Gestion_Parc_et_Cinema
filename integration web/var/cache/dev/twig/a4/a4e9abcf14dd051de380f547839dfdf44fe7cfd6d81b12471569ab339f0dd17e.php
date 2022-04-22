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

/* reservationf.html.twig */
class __TwigTemplate_2a938940068426df709bd8dd8064811b96e81daf8143357b204365bcafd34bad extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservationf.html.twig"));

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
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("affichers");
        echo "\">Films Disponibles</a></li>
                                <li class=\"main_nav_item\"><a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherr");
        echo "\">liste Films Disponibles</a></li>

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
        // line 131
        echo " style=\"width:800px; margin:20px auto;\">
                            <div class=\"contact_form_container\">

                                ";
        // line 134
        $this->displayBlock('title', $context, $blocks);
        // line 135
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
        // line 164
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
        // line 186
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
        // line 195
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
        // line 204
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
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/placeholder.svg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                                        <div class=\"contact_info_text\">4127 Raoul Wallenber 45b-c Gibraltar</div>
                                    </li>
                                    <li class=\"contact_info_item d-flex flex-row\">
                                        <div><div class=\"contact_info_icon\"><img src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/phone-call.svg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                                        <div class=\"contact_info_text\">2556-808-8613</div>
                                    </li>
                                    <li class=\"contact_info_item d-flex flex-row\">
                                        <div><div class=\"contact_info_icon\"><img src=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/message.svg"), "html", null, true);
        echo "\" alt=\"\"></div></div>
                                        <div class=\"contact_info_text\"><a href=\"mailto:contactme@gmail.com?Subject=Hello\" target=\"_top\">contactme@gmail.com</a></div>
                                    </li>
                                    <li class=\"contact_info_item d-flex flex-row\">
                                        <div><div class=\"contact_info_icon\"><img src=\"";
        // line 237
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

    // line 134
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
        return "reservationf.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  478 => 134,  432 => 237,  425 => 233,  418 => 229,  411 => 225,  387 => 204,  375 => 195,  363 => 186,  338 => 164,  307 => 135,  305 => 134,  300 => 131,  264 => 98,  244 => 81,  240 => 80,  228 => 71,  211 => 57,  207 => 56,  181 => 32,  171 => 31,  158 => 26,  154 => 25,  150 => 24,  146 => 23,  142 => 22,  137 => 21,  127 => 20,  114 => 16,  110 => 15,  106 => 14,  102 => 13,  98 => 12,  94 => 11,  90 => 10,  87 => 9,  77 => 8,  67 => 31,  63 => 29,  61 => 20,  58 => 19,  56 => 8,  47 => 1,);
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
                                <li class=\"main_nav_item\"><a href=\"{{ path(\"affichers\") }}\">Films Disponibles</a></li>
                                <li class=\"main_nav_item\"><a href=\"{{ path(\"afficherr\") }}\">liste Films Disponibles</a></li>

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

                </div>
            </div>
        </div>

    </div>
</div>
</body>


</html>
{% endblock %}
", "reservationf.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\reservationf.html.twig");
    }
}
