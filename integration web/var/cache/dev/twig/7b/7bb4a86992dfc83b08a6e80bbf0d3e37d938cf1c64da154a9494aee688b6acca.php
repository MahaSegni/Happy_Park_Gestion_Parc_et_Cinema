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

/* cart/List_Panier.html.twig */
class __TwigTemplate_e430583acfc794400dab508f1497a353d185dd5645d9fbb0e1be0408b0ec5ea6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/List_Panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/List_Panier.html.twig"));

        $this->parent = $this->loadTemplate("front.html.twig", "cart/List_Panier.html.twig", 1);
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
        echo "   ";
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
                                    <li class=\"main_nav_item\"><a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("mesabonnements");
        echo "\">Mes abonnements</a></li>

                                    ";
        // line 46
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46)) {
            // line 47
            echo "                                        <li class=\"main_nav_item\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">Connexion</a></li>
                                    ";
        } else {
            // line 49
            echo "                                        <li class=\"main_nav_item\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">Deconnexion</a></li>
                                    ";
        }
        // line 51
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
    <div class=\"col-lg-12\">
        <!-- Offers Grid -->

        <br><br><br><br>
        ";
        // line 124
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 124, $this->source); })())), 0))) {
            // line 125
            echo "            <h2>  Mon Panier : ";
            echo twig_escape_filter($this->env, (isset($context["total_quantity"]) || array_key_exists("total_quantity", $context) ? $context["total_quantity"] : (function () { throw new RuntimeError('Variable "total_quantity" does not exist.', 125, $this->source); })()), "html", null, true);
            echo " choix!</h2>
            ";
            // line 126
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 126, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 127
                echo "<br><br>
            <!-- Offers Item -->



                <div class=\"row\">
                    <div class=\"col-lg-1 temp_col\"></div>
                    <div class=\"col-lg-3 col-1680-4\">
                        <div class=\"offers_image_container\">
                            <!-- Image by https://unsplash.com/@kensuarez -->
                            <div class=\"offers_image_background\" style=\"background-image:url(";
                // line 137
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/images/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "ta", [], "any", false, false, false, 137), "image", [], "any", false, false, false, 137))), "html", null, true);
                echo ")\"></div>
                            <div class=\"offer_name\"><a href=\"single_listing.html\">";
                // line 138
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "ta", [], "any", false, false, false, 138), "type", [], "any", false, false, false, 138), "html", null, true);
                echo "</a></div>
                        </div>
                    </div>
                    <div class=\"col-lg-8\">
                        <div class=\"offers_content\">
                            <div class=\"offers_price\">";
                // line 143
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 143) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "ta", [], "any", false, false, false, 143), "prix", [], "any", false, false, false, 143)), "html", null, true);
                echo " DT<span>par mois</span></div>
                            <p class=\"offers_text\">Prix unitaire : ";
                // line 144
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "ta", [], "any", false, false, false, 144), "prix", [], "any", false, false, false, 144), "html", null, true);
                echo " DT, Nombre : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 144), "html", null, true);
                echo "</p>


                            <p class=\"offers_text\">";
                // line 147
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "ta", [], "any", false, false, false, 147), "description", [], "any", false, false, false, 147), "html", null, true);
                echo "</p>
                            <a href=\"";
                // line 148
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "ta", [], "any", false, false, false, 148), "id", [], "any", false, false, false, 148)]), "html", null, true);
                echo "\"><font color=\"red\" face = \"Comic sans MS\" size =\"3\" >Exclure du panier</font> </a> <span></span><span></span><span></span></button>
                            <div class=\"offer_reviews\">

                            </div>

                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "            <!-- Offers Item -->
            <br><br>


            <div class=\"offers_price\" id=\"totalapayer\"><h2>&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    Total à payer : ";
            // line 171
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 171, $this->source); })()), "html", null, true);
            echo " DT  </h2></div>
       &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;

            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;

            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;






            <button type=\"submit\" id=\"form_submit_button\" class=\"form_submit_button button\" ><a href=\"";
            // line 185
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ListTypeAbonnement");
            echo "\">Services</a> <span></span><span></span><span></span></button>

            <button type=\"submit\" id=\"form_submit_button\" class=\"form_submit_button button\" ><a href=\"";
            // line 187
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addabonnement");
            echo "\">Enregitrer</a> <span></span><span></span><span></span></button>
<br>
            <br><br><br><br><br><br><br><br><br>

        ";
        } else {
            // line 192
            echo "            <h2> Mon panier est Vide </h2>
            <button type=\"submit\" id=\"form_submit_button\" class=\"form_submit_button button\" ><a href=\"";
            // line 193
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ListTypeAbonnement");
            echo "\">Ajouter au panier</a> <span></span><span></span><span></span></button>


        ";
        }
        // line 197
        echo "

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
        return "cart/List_Panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  368 => 197,  361 => 193,  358 => 192,  350 => 187,  345 => 185,  328 => 171,  319 => 164,  297 => 148,  293 => 147,  285 => 144,  281 => 143,  273 => 138,  269 => 137,  257 => 127,  253 => 126,  248 => 125,  246 => 124,  171 => 51,  165 => 49,  159 => 47,  157 => 46,  152 => 44,  141 => 36,  123 => 20,  113 => 19,  99 => 13,  95 => 12,  91 => 11,  87 => 10,  83 => 9,  79 => 8,  75 => 7,  69 => 5,  59 => 4,  36 => 1,);
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
                                    <li class=\"main_nav_item\"><a href=\"{{ path('mesabonnements') }}\">Mes abonnements</a></li>

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
    <div class=\"col-lg-12\">
        <!-- Offers Grid -->

        <br><br><br><br>
        {% if items|length>0 %}
            <h2>  Mon Panier : {{ total_quantity }} choix!</h2>
            {%  for item in items %}
<br><br>
            <!-- Offers Item -->



                <div class=\"row\">
                    <div class=\"col-lg-1 temp_col\"></div>
                    <div class=\"col-lg-3 col-1680-4\">
                        <div class=\"offers_image_container\">
                            <!-- Image by https://unsplash.com/@kensuarez -->
                            <div class=\"offers_image_background\" style=\"background-image:url({{ asset('/images/' ~ item.ta.image) }})\"></div>
                            <div class=\"offer_name\"><a href=\"single_listing.html\">{{ item.ta.type }}</a></div>
                        </div>
                    </div>
                    <div class=\"col-lg-8\">
                        <div class=\"offers_content\">
                            <div class=\"offers_price\">{{ item.quantity * item.ta.prix }} DT<span>par mois</span></div>
                            <p class=\"offers_text\">Prix unitaire : {{ item.ta.prix }} DT, Nombre : {{ item.quantity }}</p>


                            <p class=\"offers_text\">{{ item.ta.description }}</p>
                            <a href=\"{{ path('cart_remove',{'id':item.ta.id})}}\"><font color=\"red\" face = \"Comic sans MS\" size =\"3\" >Exclure du panier</font> </a> <span></span><span></span><span></span></button>
                            <div class=\"offer_reviews\">

                            </div>

                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
            {% endfor %}
            <!-- Offers Item -->
            <br><br>


            <div class=\"offers_price\" id=\"totalapayer\"><h2>&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                    Total à payer : {{ total}} DT  </h2></div>
       &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;

            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;

            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
            &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;






            <button type=\"submit\" id=\"form_submit_button\" class=\"form_submit_button button\" ><a href=\"{{ path('ListTypeAbonnement')}}\">Services</a> <span></span><span></span><span></span></button>

            <button type=\"submit\" id=\"form_submit_button\" class=\"form_submit_button button\" ><a href=\"{{ path('addabonnement')}}\">Enregitrer</a> <span></span><span></span><span></span></button>
<br>
            <br><br><br><br><br><br><br><br><br>

        {% else  %}
            <h2> Mon panier est Vide </h2>
            <button type=\"submit\" id=\"form_submit_button\" class=\"form_submit_button button\" ><a href=\"{{ path('ListTypeAbonnement')}}\">Ajouter au panier</a> <span></span><span></span><span></span></button>


        {% endif %}


    <!-- ---------------------------------------------------------------------------- -->















    </div>
    </body>


    </html>
{% endblock %}



", "cart/List_Panier.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\cart\\List_Panier.html.twig");
    }
}
