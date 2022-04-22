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

/* abonnement/index.html.twig */
class __TwigTemplate_3ae0d95cd2b10104ba505c82a53af1be2230fb78d862db371d090bd617e9776d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/index.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "abonnement/index.html.twig", 1);
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
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js1/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles1/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles1/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins1/Isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins1/easing/easing.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins1/parallax-js-master/parallax.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js1/offers_custom.js"), "html", null, true);
        echo "\"></script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
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
        // line 36
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
        // line 45
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45)) {
            // line 46
            echo "                                        <li class=\"main_nav_item\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">Connexion</a></li>
                                    ";
        } else {
            // line 48
            echo "                                        <li class=\"main_nav_item\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">Deconnexion</a></li>
                                    ";
        }
        // line 50
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





    <!-- -------------------------------------------------------------------------------------------->

    <br><br>
    <center>
    <h2>";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["message_conf"]) || array_key_exists("message_conf", $context) ? $context["message_conf"] : (function () { throw new RuntimeError('Variable "message_conf" does not exist.', 122, $this->source); })()), "html", null, true);
        echo "</h2>



    <button type=\"submit\" id=\"form_submit_button\" class=\"form_submit_button button\" ><a href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mesabonnements");
        echo "\">Mes abonnements</a> <span></span><span></span><span></span></button>
    <button type=\"submit\" id=\"form_submit_button\" class=\"form_submit_button button\" ><a href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ListTypeAbonnement");
        echo "\">Services disponibles</a> <span></span><span></span><span></span></button>


</center>
    <!-- ---------------------------------------------------------------------------- -->















    </div>
    </body>


    </html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "abonnement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 127,  248 => 126,  241 => 122,  167 => 50,  161 => 48,  155 => 46,  153 => 45,  141 => 36,  123 => 20,  113 => 19,  99 => 13,  95 => 12,  91 => 11,  87 => 10,  83 => 9,  79 => 8,  75 => 7,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front.html.twig' %}


{% block javascripts %}
    {{parent() }}

    <script src=\"{{ asset('js1/jquery-3.2.1.min.js')}}\"></script>
    <script src=\"{{ asset('styles1/bootstrap4/popper.js')}}\"></script>
    <script src=\"{{ asset('styles1/bootstrap4/bootstrap.min.js')}}\"></script>
    <script src=\"{{ asset('plugins1/Isotope/isotope.pkgd.min.js')}}\"></script>
    <script src=\"{{ asset('plugins1/easing/easing.js')}}\"></script>
    <script src=\"{{ asset('plugins1/parallax-js-master/parallax.min.js')}}\"></script>
    <script src=\"{{ asset('js1/offers_custom.js')}}\"></script>


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





    <!-- -------------------------------------------------------------------------------------------->

    <br><br>
    <center>
    <h2>{{ message_conf }}</h2>



    <button type=\"submit\" id=\"form_submit_button\" class=\"form_submit_button button\" ><a href=\"{{ path('mesabonnements')}}\">Mes abonnements</a> <span></span><span></span><span></span></button>
    <button type=\"submit\" id=\"form_submit_button\" class=\"form_submit_button button\" ><a href=\"{{ path('ListTypeAbonnement')}}\">Services disponibles</a> <span></span><span></span><span></span></button>


</center>
    <!-- ---------------------------------------------------------------------------- -->















    </div>
    </body>


    </html>
{% endblock %}



", "abonnement/index.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\abonnement\\index.html.twig");
    }
}
