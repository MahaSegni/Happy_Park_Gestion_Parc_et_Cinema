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

/* Abonnement\MesAbonnements.html.twig */
class __TwigTemplate_583db26e23830e4d013880e29092e5652d573b23ed52d60d655ee669504766f6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Abonnement\\MesAbonnements.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Abonnement\\MesAbonnements.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "Abonnement\\MesAbonnements.html.twig", 1);
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
                                    <li class=\"main_nav_item\"><a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ListTypeAbonnement");
        echo "\">Services</a></li>

                                    ";
        // line 49
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49)) {
            // line 50
            echo "                                        <li class=\"main_nav_item\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">Connexion</a></li>
                                    ";
        } else {
            // line 52
            echo "                                        <li class=\"main_nav_item\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">Deconnexion</a></li>
                                    ";
        }
        // line 54
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








    <!-- ---------------------------------------------------------------------------- -->




    <div class=\"offers\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col text-center\">
                    <h2 class=\"section_title\">Mes Abonnements</h2>
                </div>
            </div>
            <div class=\"row offers_items\">

                <!-- Offers Item -->
                ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mes"]) || array_key_exists("mes", $context) ? $context["mes"] : (function () { throw new RuntimeError('Variable "mes" does not exist.', 140, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["ta"]) {
            // line 141
            echo "                    <div class=\"col-lg-6 offers_col\" >
                        <div class=\"offers_item\">
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <div class=\"offers_image_container\">
                                        <!-- Image by https://unsplash.com/@kensuarez -->
                                        <div class=\"offers_image_background\" style=\"background-image:url(";
            // line 147
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ta"], "typeabonnement", [], "any", false, false, false, 147), "image", [], "any", false, false, false, 147))), "html", null, true);
            echo ")\"></div>
                                   </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"offers_content\">
                                        <div class=\"offers_price\">";
            // line 152
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ta"], "typeabonnement", [], "any", false, false, false, 152), "prix", [], "any", false, false, false, 152), "html", null, true);
            echo " DT<span>par mois</span></div>

                                        <p class=\"offers_text\">";
            // line 154
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ta"], "typeabonnement", [], "any", false, false, false, 154), "description", [], "any", false, false, false, 154), "html", null, true);
            echo "</p>
                                        ";
            // line 156
            echo "                                        ";
            $context["difference_days_1"] = twig_get_attribute($this->env, $this->source, twig_date_converter($this->env, "now"), "diff", [0 => twig_date_converter($this->env, twig_get_attribute($this->env, $this->source, $context["ta"], "datedemande", [], "any", false, false, false, 156))], "method", false, false, false, 156);
            // line 157
            echo "                                        ";
            $context["leftDays"] = twig_get_attribute($this->env, $this->source, (isset($context["difference_days_1"]) || array_key_exists("difference_days_1", $context) ? $context["difference_days_1"] : (function () { throw new RuntimeError('Variable "difference_days_1" does not exist.', 157, $this->source); })()), "days", [], "any", false, false, false, 157);
            // line 158
            echo "                                        ";
            $context["difference_days_2"] = twig_get_attribute($this->env, $this->source, twig_date_converter($this->env, twig_date_converter($this->env, "now")), "diff", [0 => twig_get_attribute($this->env, $this->source, $context["ta"], "datedebut", [], "any", false, false, false, 158)], "method", false, false, false, 158);
            // line 159
            echo "                                        ";
            $context["left_days_expire"] = twig_get_attribute($this->env, $this->source, (isset($context["difference_days_2"]) || array_key_exists("difference_days_2", $context) ? $context["difference_days_2"] : (function () { throw new RuntimeError('Variable "difference_days_2" does not exist.', 159, $this->source); })()), "days", [], "any", false, false, false, 159);
            // line 160
            echo "
                                        ";
            // line 161
            if (((1 === twig_compare((isset($context["left_days_expire"]) || array_key_exists("left_days_expire", $context) ? $context["left_days_expire"] : (function () { throw new RuntimeError('Variable "left_days_expire" does not exist.', 161, $this->source); })()), 0)) && twig_get_attribute($this->env, $this->source, $context["ta"], "valide", [], "any", false, false, false, 161))) {
                // line 162
                echo "                                        <h3><font  color=\"red\">Abonnement expiré</font> </h3>
";
            } else {
                // line 164
                echo "                                        ";
                if (((1 === twig_compare((isset($context["leftDays"]) || array_key_exists("leftDays", $context) ? $context["leftDays"] : (function () { throw new RuntimeError('Variable "leftDays" does not exist.', 164, $this->source); })()), 2)) &&  !twig_get_attribute($this->env, $this->source, $context["ta"], "valide", [], "any", false, false, false, 164))) {
                    // line 165
                    echo "                                            <h3><font  color=\"red\">Date de paiement dépassée</font> </h3>
                                        ";
                } else {
                    // line 167
                    echo "
                                        ";
                    // line 168
                    if (twig_get_attribute($this->env, $this->source, $context["ta"], "valide", [], "any", false, false, false, 168)) {
                        // line 169
                        echo "                                        <p class=\"offers_text\">Du ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ta"], "datedebut", [], "any", false, false, false, 169), "Y-m-d"), "html", null, true);
                        echo " au ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ta"], "datefin", [], "any", false, false, false, 169), "Y-m-d"), "html", null, true);
                        echo "</p>


                                        <h3><font  color=\"#2e8b57\">Validé</font> </h3>
";
                    } else {
                        // line 173
                        echo "                                           <h3><font  color=\"red\">En attente de paiement</font> </h3>
";
                    }
                    // line 175
                    echo "                                        ";
                }
                // line 176
                echo "    ";
            }
            // line 177
            echo "
                                        <div class=\"offers_link\"><a href=\"";
            // line 178
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("DeleteAbonnement", ["id" => twig_get_attribute($this->env, $this->source, $context["ta"], "id", [], "any", false, false, false, 178)]), "html", null, true);
            echo "\">Annuler l'abonnement</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        echo "

                <!-- Offers Item -->


            </div>
        </div>
    </div>
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
        return "Abonnement\\MesAbonnements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 185,  324 => 178,  321 => 177,  318 => 176,  315 => 175,  311 => 173,  300 => 169,  298 => 168,  295 => 167,  291 => 165,  288 => 164,  284 => 162,  282 => 161,  279 => 160,  276 => 159,  273 => 158,  270 => 157,  267 => 156,  263 => 154,  258 => 152,  250 => 147,  242 => 141,  238 => 140,  150 => 54,  144 => 52,  138 => 50,  136 => 49,  131 => 47,  119 => 38,  101 => 22,  91 => 21,  69 => 5,  59 => 4,  36 => 1,);
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
                                    <li class=\"main_nav_item\"><a href=\"{{ path('ListTypeAbonnement')}}\">Services</a></li>

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








    <!-- ---------------------------------------------------------------------------- -->




    <div class=\"offers\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col text-center\">
                    <h2 class=\"section_title\">Mes Abonnements</h2>
                </div>
            </div>
            <div class=\"row offers_items\">

                <!-- Offers Item -->
                {%  for ta in mes %}
                    <div class=\"col-lg-6 offers_col\" >
                        <div class=\"offers_item\">
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <div class=\"offers_image_container\">
                                        <!-- Image by https://unsplash.com/@kensuarez -->
                                        <div class=\"offers_image_background\" style=\"background-image:url({{ asset('/images/' ~ ta.typeabonnement.image) }})\"></div>
                                   </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"offers_content\">
                                        <div class=\"offers_price\">{{ ta.typeabonnement.prix }} DT<span>par mois</span></div>

                                        <p class=\"offers_text\">{{ ta.typeabonnement.description }}</p>
                                        {# endDate and startDate are strings or DateTime objects #}
                                        {% set difference_days_1 = date( 'now' ).diff(date(ta.datedemande)) %}
                                        {% set leftDays = difference_days_1.days %}
                                        {% set difference_days_2 = date(date( 'now' )).diff(ta.datedebut) %}
                                        {% set left_days_expire = difference_days_2.days %}

                                        {% if left_days_expire > 0 and  ta.valide %}
                                        <h3><font  color=\"red\">Abonnement expiré</font> </h3>
{% else %}
                                        {% if leftDays > 2 and not ta.valide %}
                                            <h3><font  color=\"red\">Date de paiement dépassée</font> </h3>
                                        {% else %}

                                        {% if ta.valide %}
                                        <p class=\"offers_text\">Du {{ ta.datedebut|date('Y-m-d') }} au {{ ta.datefin|date('Y-m-d') }}</p>


                                        <h3><font  color=\"#2e8b57\">Validé</font> </h3>
{% else %}                                           <h3><font  color=\"red\">En attente de paiement</font> </h3>
{% endif %}
                                        {% endif %}
    {% endif %}

                                        <div class=\"offers_link\"><a href=\"{{ path('DeleteAbonnement',{'id': ta.id })}}\">Annuler l'abonnement</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                {% endfor %}


                <!-- Offers Item -->


            </div>
        </div>
    </div>
    <!-- ---------------------------------------------------------------------------- -->















    </div>
    </body>


    </html>
{% endblock %}



", "Abonnement\\MesAbonnements.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\abonnement\\MesAbonnements.html.twig");
    }
}
