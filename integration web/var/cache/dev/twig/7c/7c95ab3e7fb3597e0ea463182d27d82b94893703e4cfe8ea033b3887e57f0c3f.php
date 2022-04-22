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

/* plat/showFront.html.twig */
class __TwigTemplate_2f2997455853c5b2d735aa77bebd84e0e3acfee293f9fb64395cb3ac3758f8bd extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plat/showFront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "plat/showFront.html.twig"));

        $this->parent = $this->loadTemplate("baseFront.html.twig", "plat/showFront.html.twig", 1);
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
        echo "<!--
 <div class=\"container\">
     <div class=\"img-fluid\">
         ";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 6, $this->source); })()), "nomp", [], "any", false, false, false, 6), "html", null, true);
        echo "
     </div>
 </div>
-->

    <!-- Intro -->
    <div class=\"owl-item home_slider_item\">
        <div class=\"home_slider_background\" style=\"background-image:url(images/e.jpg)\"></div>

    </div>
    <div class=\"intro\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-7\">
                    <div class=\"intro_image\"><img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("/images/productImageUploads/" . twig_get_attribute($this->env, $this->source, (isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 20, $this->source); })()), "imagep", [], "any", false, false, false, 20))), "html", null, true);
        echo "\" alt=\"\" height=\"400px\" width=\"400px\"></div>
                    <div class=\"offer_name\"><a href=\"#\">";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 21, $this->source); })()), "nomp", [], "any", false, false, false, 21), "html", null, true);
        echo "</a></div>
                </div>
                <div class=\"col-lg-5\">



                    <div class=\"offers_content\">
                        <br><br<br><br>
                        <div class=\"offers_price\">";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 29, $this->source); })()), "prixp", [], "any", false, false, false, 29), "html", null, true);
        echo "<span>DT</span></div>
                        <div class=\"rating_r rating_r_3 offers_rating\" data-rating=\"3\">
                            <i></i>
                            <i></i>
                            <i></i>
                            <i></i>
                            <i></i>
                        </div>
                        <br><br<br>
                        <div class=\"blog_post_title\"><a href=\"#\">Description : </a></div>
                        <p class=\"offers_text\">";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plat"]) || array_key_exists("plat", $context) ? $context["plat"] : (function () { throw new RuntimeError('Variable "plat" does not exist.', 39, $this->source); })()), "description", [], "any", false, false, false, 39), "html", null, true);
        echo ", Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class=\"offer_reviews\">
                            <div class=\"offer_reviews_content\">
                                <div class=\"blog_post_title\"><a href=\"#\">100 reviews : </a></div>

                                <div class=\"offer_reviews_title\">very good</div>
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

    public function getTemplateName()
    {
        return "plat/showFront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 39,  105 => 29,  94 => 21,  90 => 20,  73 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseFront.html.twig' %}
{% block bodyContainer %}
<!--
 <div class=\"container\">
     <div class=\"img-fluid\">
         {{ plat.nomp }}
     </div>
 </div>
-->

    <!-- Intro -->
    <div class=\"owl-item home_slider_item\">
        <div class=\"home_slider_background\" style=\"background-image:url(images/e.jpg)\"></div>

    </div>
    <div class=\"intro\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-7\">
                    <div class=\"intro_image\"><img src=\"{{ asset('/images/productImageUploads/' ~ plat.imagep) }}\" alt=\"\" height=\"400px\" width=\"400px\"></div>
                    <div class=\"offer_name\"><a href=\"#\">{{ plat.nomp }}</a></div>
                </div>
                <div class=\"col-lg-5\">



                    <div class=\"offers_content\">
                        <br><br<br><br>
                        <div class=\"offers_price\">{{ plat.prixp }}<span>DT</span></div>
                        <div class=\"rating_r rating_r_3 offers_rating\" data-rating=\"3\">
                            <i></i>
                            <i></i>
                            <i></i>
                            <i></i>
                            <i></i>
                        </div>
                        <br><br<br>
                        <div class=\"blog_post_title\"><a href=\"#\">Description : </a></div>
                        <p class=\"offers_text\">{{ plat.description }}, Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet.</p>
                        </div>
                        <div class=\"offer_reviews\">
                            <div class=\"offer_reviews_content\">
                                <div class=\"blog_post_title\"><a href=\"#\">100 reviews : </a></div>

                                <div class=\"offer_reviews_title\">very good</div>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>




{% endblock  %}", "plat/showFront.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\plat\\showFront.html.twig");
    }
}
