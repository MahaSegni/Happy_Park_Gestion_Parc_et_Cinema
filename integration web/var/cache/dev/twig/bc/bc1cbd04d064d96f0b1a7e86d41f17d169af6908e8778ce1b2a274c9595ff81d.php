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

/* plat/afficherPlatFront.html.twig */
class __TwigTemplate_873ad542f7ae90366a2606d127a1a1b266b675cc00234f5d6a879a5a9d0ff0cc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyContainer' => [$this, 'block_bodyContainer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseFront.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plat/afficherPlatFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plat/afficherPlatFront.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "plat/afficherPlatFront.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_bodyContainer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyContainer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bodyContainer"));

        // line 3
        echo "


    <div class=\"offers\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"search_tabs_container\">
                <div class=\"search_tabs_container\">
                    <div class=\"search_tabs d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
                        <div class=\"search_tab active d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/bus.png"), "html", null, true);
        echo "\" alt=\"\"><a  href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addResrvation");
        echo "\"> <span>Parking</span></a></div>
                        <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/bus.png"), "html", null, true);
        echo "\" alt=\"\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherr");
        echo "\"> Film</a></div>
                        <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/departure.png"), "html", null, true);
        echo "\" alt=\"\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addrec");
        echo "\">Reclamation</a></div>
                        <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/island.png"), "html", null, true);
        echo "\"a alt=\"\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherPlatFront");
        echo "\">Plat</a></div>
                        <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/cruise.png"), "html", null, true);
        echo "\" alt=\"\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("eventIndex");
        echo "\">Evenement</a></div>
                        <div class=\"search_tab d-flex flex-row align-items-center justify-content-lg-center justify-content-start\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/diving.png"), "html", null, true);
        echo "\" alt=\"\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ListTypeAbonnement");
        echo "\">Abonnement</a></div>
                    </div>
                </div>
                <br>
            </div>
            <div class=\"col text-center\">

                <h2 class=\"section_title\">Menu</h2>
            </div>
        </div>


        <div class=\"float-left\">
            <br><br<br><br><br<br><br><br<br><br><br<br>
            <!--------------------------------------Tri par categorie stats here------------------------------------------->
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listcategorie"]) || array_key_exists("listcategorie", $context) ? $context["listcategorie"] : (function () { throw new RuntimeError('Variable "listcategorie" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 33
            echo "                <ul class=\"list-group\">
                    <li class=\"list-group-item d-flex justify-content-between align-items-center\" style=\"color:purple;\">

                        <a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("TriParategorie", ["idc" => twig_get_attribute($this->env, $this->source, $context["categorie"], "idc", [], "any", false, false, false, 36)]), "html", null, true);
            echo "\" >
                            ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "nomc", [], "any", false, false, false, 37), "html", null, true);
            echo "
                            <!--
                           <span class=\"badge badge-primary badge-pill\"> 4 </span>
                            -->
                        </a>
                    </li>
                </ul>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "            <!--------------------------------------Tri par categorie ends here-------------------------------------------->

            <!----------------------------------Button for All categories stats here--------------------------------------->
            <ul class=\"list-group\">
                <li class=\"list-group-item d-flex justify-content-between align-items-center\" style=\"color:purple;\">

                    <a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherPlatFront");
        echo "\" >
                        All Categories
                        <!--
                       <span class=\"badge badge-primary badge-pill\"> 4 </span>
                        -->
                    </a>
                </li>
            </ul>
            <!----------------------------------Button for All categories ends here---------------------------------------->
        </div>




        <div class=\"row offers_items\">
            <!------------------------------Affichage des plats starts here---------------------------------------->
            ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listplat"]) || array_key_exists("listplat", $context) ? $context["listplat"] : (function () { throw new RuntimeError('Variable "listplat" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 68
            echo "                <!-- Offers Item -->
                <div class=\"col-lg-6 offers_col\">
                    <div class=\"offers_item\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"offers_image_container\">
                                    <div class=\"offers_image_background\" ><img src=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/images/productImageUploads/" . twig_get_attribute($this->env, $this->source, $context["plat"], "imagep", [], "any", false, false, false, 74))), "html", null, true);
            echo "\" height=\"170px\" width=\"200px\" ></div>
                                </div>
                            </div>

                            <div class=\"col-lg-6\">
                                <div class=\"offers_content\">

                                    <div class=\"offers_price\">";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "prixp", [], "any", false, false, false, 81), "html", null, true);
            echo "<span>DT</span></div>
                                    <div class=\"rating_r rating_r_4 offers_rating\">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <div class=\"offer_name\"><a href=\"#\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plat"], "nomp", [], "any", false, false, false, 89), "html", null, true);
            echo "</a></div>
                                    <p class=\"offers_text\"></p>
                                    <div class=\"offers_icons\">
                                        <ul class=\"offers_icons_list\">
                                            <li class=\"offers_icons_item\"><img src=\"images/post.png\" alt=\"\"></li>
                                            <li class=\"offers_icons_item\"><img src=\"images/compass.png\" alt=\"\"></li>
                                            <li class=\"offers_icons_item\"><img src=\"images/bicycle.png\" alt=\"\"></li>
                                            <li class=\"offers_icons_item\"><img src=\"images/sailboat.png\" alt=\"\"></li>
                                        </ul>
                                    </div>


                                    <a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("showFront", ["idp" => twig_get_attribute($this->env, $this->source, $context["plat"], "idp", [], "any", false, false, false, 101)]), "html", null, true);
            echo "\">read more</a>



                                </div>
                            </div>
                        </div>
                    </div><br><br>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        echo "            <!--------------------------------Affichage des plats ends here---------------------------------------->
        </div>
    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "plat/afficherPlatFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 111,  231 => 101,  216 => 89,  205 => 81,  195 => 74,  187 => 68,  183 => 67,  164 => 51,  156 => 45,  142 => 37,  138 => 36,  133 => 33,  129 => 32,  109 => 17,  103 => 16,  97 => 15,  91 => 14,  85 => 13,  79 => 12,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}
{% block bodyContainer %}



    <div class=\"offers\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"search_tabs_container\">
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
                <br>
            </div>
            <div class=\"col text-center\">

                <h2 class=\"section_title\">Menu</h2>
            </div>
        </div>


        <div class=\"float-left\">
            <br><br<br><br><br<br><br><br<br><br><br<br>
            <!--------------------------------------Tri par categorie stats here------------------------------------------->
            {% for categorie in listcategorie %}
                <ul class=\"list-group\">
                    <li class=\"list-group-item d-flex justify-content-between align-items-center\" style=\"color:purple;\">

                        <a href=\"{{ path(\"TriParategorie\",{'idc':categorie.idc}) }}\" >
                            {{ categorie.nomc }}
                            <!--
                           <span class=\"badge badge-primary badge-pill\"> 4 </span>
                            -->
                        </a>
                    </li>
                </ul>
            {% endfor %}
            <!--------------------------------------Tri par categorie ends here-------------------------------------------->

            <!----------------------------------Button for All categories stats here--------------------------------------->
            <ul class=\"list-group\">
                <li class=\"list-group-item d-flex justify-content-between align-items-center\" style=\"color:purple;\">

                    <a href=\"{{ path(\"afficherPlatFront\") }}\" >
                        All Categories
                        <!--
                       <span class=\"badge badge-primary badge-pill\"> 4 </span>
                        -->
                    </a>
                </li>
            </ul>
            <!----------------------------------Button for All categories ends here---------------------------------------->
        </div>




        <div class=\"row offers_items\">
            <!------------------------------Affichage des plats starts here---------------------------------------->
            {% for plat in listplat %}
                <!-- Offers Item -->
                <div class=\"col-lg-6 offers_col\">
                    <div class=\"offers_item\">
                        <div class=\"row\">
                            <div class=\"col-lg-6\">
                                <div class=\"offers_image_container\">
                                    <div class=\"offers_image_background\" ><img src=\"{{ asset('/images/productImageUploads/' ~ plat.imagep) }}\" height=\"170px\" width=\"200px\" ></div>
                                </div>
                            </div>

                            <div class=\"col-lg-6\">
                                <div class=\"offers_content\">

                                    <div class=\"offers_price\">{{ plat.prixp }}<span>DT</span></div>
                                    <div class=\"rating_r rating_r_4 offers_rating\">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <div class=\"offer_name\"><a href=\"#\">{{ plat.nomp }}</a></div>
                                    <p class=\"offers_text\"></p>
                                    <div class=\"offers_icons\">
                                        <ul class=\"offers_icons_list\">
                                            <li class=\"offers_icons_item\"><img src=\"images/post.png\" alt=\"\"></li>
                                            <li class=\"offers_icons_item\"><img src=\"images/compass.png\" alt=\"\"></li>
                                            <li class=\"offers_icons_item\"><img src=\"images/bicycle.png\" alt=\"\"></li>
                                            <li class=\"offers_icons_item\"><img src=\"images/sailboat.png\" alt=\"\"></li>
                                        </ul>
                                    </div>


                                    <a href=\"{{ path('showFront',{'idp':plat.idp}) }}\">read more</a>



                                </div>
                            </div>
                        </div>
                    </div><br><br>
                </div>
            {% endfor %}
            <!--------------------------------Affichage des plats ends here---------------------------------------->
        </div>
    </div>



{% endblock  %}", "plat/afficherPlatFront.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\plat\\afficherPlatFront.html.twig");
    }
}
