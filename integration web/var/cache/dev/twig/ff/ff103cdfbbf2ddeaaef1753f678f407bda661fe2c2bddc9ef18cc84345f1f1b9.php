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

/* abonne/login.html.twig */
class __TwigTemplate_8ffecc9df005184c7c1489f9eca92e2aa0c5e3739be6217232b1178b62056172 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonne/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonne/login.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "abonne/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "    <style>
        .label {
            color: white;
            padding: 0px;
            font-family: Arial;
        }
        .success {background-color: #4CAF50;} /* Green */
        .info {background-color: #2196F3;} /* Blue */
        .warning {background-color: #ff9800;} /* Orange */
        .danger {background-color: #f44336;} /* Red */
        .other {background-color: #e7e7e7; color: black;} /* Gray */
    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 22
        echo "    <div class=\"super_container\">

        <!-- Header -->

        <header class=\"header\">

            <!-- Top Bar -->


            <!-- Main Navigation -->

            <nav class=\"main_nav\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col main_nav_col d-flex flex-row align-items-center justify-content-start\">
                            <div class=\"logo_container\">
                                <div class=\"logo\"><a href=\"#\"><img src=\"";
        // line 38
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
                                    ";
        // line 47
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47)) {
            // line 48
            echo "                                        <li class=\"main_nav_item\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">Connexion</a></li>
                                    ";
        } else {
            // line 50
            echo "                                        <li class=\"main_nav_item\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">Deconnexion</a></li>
                                    ";
        }
        // line 52
        echo "                                </ul>
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
        // line 95
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




        <!-- Home Slider -->



    </div>


    <!-- Intro -->
    <br>
    <br>

    <br>
    <br>
    <br>
    <br>
    <br>












    <div class=\"contact_form_section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">

                    <!-- Contact Form -->
                        <center> <div class=\"col-lg-7\">
                                <div class=\"contact_form_container\">
                                    <div class=\"contact_title\">Connexion</div>
                                    <form action=\"";
        // line 149
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
        echo "\" method=\"post\" class=\"contact_form\">
                                        <input type=\"text\" name=\"_username\" value=\"";
        // line 150
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 150, $this->source); })()), "html", null, true);
        echo "\" class=\"contact_form_email input_field\" placeholder=\"E-mail\" required=\"required\" >
                                  <br>

                                        <input type=\"password\" name=\"_password\" class=\"contact_form_email input_field\" placeholder=\"Mot de passe\" required=\"required\" >
                                 <br>
                                        <div>";
        // line 155
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 155, $this->source); })())) {
            echo " <p class=\"label\">Vous avez saisi incorrectement L\\'email ou le mot de passe </p></div>
                                        ";
        }
        // line 157
        echo "
                                        <button type=\"submit\" id=\"form_submit_button\" class=\"form_submit_button button\">Se connecter<span></span><span></span><span></span></button>
                                   <br><br>
                                    </form>
                                    <br>
                                    <br><a href=\"";
        // line 162
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Addabonne");
        echo "\"><font color=\"white\" size=\"4\">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                         S'inscrire</font></a>

                                    <br>
                                    <br>
                                </div>

                            </div>


                        </center>
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

    public function getTemplateName()
    {
        return "abonne/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 162,  264 => 157,  259 => 155,  251 => 150,  247 => 149,  190 => 95,  145 => 52,  139 => 50,  133 => 48,  131 => 47,  119 => 38,  101 => 22,  91 => 21,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}


{% block javascripts %}
    <style>
        .label {
            color: white;
            padding: 0px;
            font-family: Arial;
        }
        .success {background-color: #4CAF50;} /* Green */
        .info {background-color: #2196F3;} /* Blue */
        .warning {background-color: #ff9800;} /* Orange */
        .danger {background-color: #f44336;} /* Red */
        .other {background-color: #e7e7e7; color: black;} /* Gray */
    </style>
{% endblock %}



{% block body %}
    <div class=\"super_container\">

        <!-- Header -->

        <header class=\"header\">

            <!-- Top Bar -->


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
                                    {% if not app.user %}
                                        <li class=\"main_nav_item\"><a href=\"{{ path('security_login') }}\">Connexion</a></li>
                                    {% else %}
                                        <li class=\"main_nav_item\"><a href=\"{{ path('security_logout') }}\">Deconnexion</a></li>
                                    {% endif %}
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
                <div class=\"logo menu_logo\"><a href=\"#\"><img src=\"{{ asset('images/logo.png') }}\" alt=\"\"></a></div>
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




        <!-- Home Slider -->



    </div>


    <!-- Intro -->
    <br>
    <br>

    <br>
    <br>
    <br>
    <br>
    <br>












    <div class=\"contact_form_section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col\">

                    <!-- Contact Form -->
                        <center> <div class=\"col-lg-7\">
                                <div class=\"contact_form_container\">
                                    <div class=\"contact_title\">Connexion</div>
                                    <form action=\"{{ path('security_login') }}\" method=\"post\" class=\"contact_form\">
                                        <input type=\"text\" name=\"_username\" value=\"{{ email }}\" class=\"contact_form_email input_field\" placeholder=\"E-mail\" required=\"required\" >
                                  <br>

                                        <input type=\"password\" name=\"_password\" class=\"contact_form_email input_field\" placeholder=\"Mot de passe\" required=\"required\" >
                                 <br>
                                        <div>{% if error %} <p class=\"label\">Vous avez saisi incorrectement L\\'email ou le mot de passe </p></div>
                                        {% endif %}

                                        <button type=\"submit\" id=\"form_submit_button\" class=\"form_submit_button button\">Se connecter<span></span><span></span><span></span></button>
                                   <br><br>
                                    </form>
                                    <br>
                                    <br><a href=\"{{ path('Addabonne') }}\"><font color=\"white\" size=\"4\">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                                         S'inscrire</font></a>

                                    <br>
                                    <br>
                                </div>

                            </div>


                        </center>
                    </div>

                </div>
            </div>
        </div>
    </div>

















    </div>
    </body>


    </html>
{% endblock %}



", "abonne/login.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\abonne\\login.html.twig");
    }
}
