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

/* avisclient/addRating.html.twig */
class __TwigTemplate_60b2c554a9843838a2947f868c145c3ce24fc419e1194d6086d884969359d7dd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "reclamation1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avisclient/addRating.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "avisclient/addRating.html.twig"));

        $this->parent = $this->loadTemplate("reclamation1.html.twig", "avisclient/addRating.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "
    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <title>Reclamation</title>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"description\" content=\"Travelix Project\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles1/bootstrap4/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins1/font-awesome-4.7.0/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles1/contact_styles.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles1/contact_responsive.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css\" integrity=\"sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css\">
    </head>

    <body>

    <div class=\"home_title\" style=\"font-sizesize: 20px\" align=\"center\">Avis</div>
                    <div class=\"col\">


                            ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

                            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "idRclient", [], "any", false, false, false, 28), 'row', ["attr" => ["class" => "form-control"]]);
        echo "


                            ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "descR", [], "any", false, false, false, 31), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

                            <br>
                            <div action=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("AvisAdd");
        echo "\" method=\"post\">
                                <div class=\"rateyo\" id= \"rating\"
                                     data-rateyo-rating=\"1\"
                                     data-rateyo-num-stars=\"5\"
                                     data-rateyo-score=\"3\">
                                </div>

                                <span class='result'>0</span>
                                <input type=\"hidden\" name=\"rating\">

                            </div>


                            <button type=\"submit\" id=\"form_submit_button\" class=\"form_submit_button button trans_200\">send message<span></span><span></span><span></span></button>

                            ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_end');
        echo "
                            <br><br>







                        </div>

    <script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles1/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles1/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles1/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA\"></script>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/contact_custom.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js\"></script>

    <script>


        \$(function () {
            \$(\".rateyo\").rateYo().on(\"rateyo.change\", function (e, data) {
                var rating = data.rating;
                \$(this).parent().find('.score').text('score :'+ \$(this).attr('data-rateyo-score'));
                \$(this).parent().find('.result').text('rating :'+ rating);
                \$(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
            });
        });

    </script>

    </body>

    </html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "avisclient/addRating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 65,  166 => 63,  162 => 62,  158 => 61,  154 => 60,  140 => 49,  122 => 34,  116 => 31,  110 => 28,  105 => 26,  91 => 15,  87 => 14,  83 => 13,  79 => 12,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'reclamation1.html.twig' %}
{% block title %}

    <!DOCTYPE html>
    <html lang=\"en\">
    <head>
        <title>Reclamation</title>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"description\" content=\"Travelix Project\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles1/bootstrap4/bootstrap.min.css') }}\">
        <link href=\"{{ asset('plugins1/font-awesome-4.7.0/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles1/contact_styles.css') }}\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles1/contact_responsive.css') }}\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css\" integrity=\"sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css\">
    </head>

    <body>

    <div class=\"home_title\" style=\"font-sizesize: 20px\" align=\"center\">Avis</div>
                    <div class=\"col\">


                            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

                            {{ form_row(form.idRclient, {'attr': {'class': 'form-control'}}) }}


                            {{ form_row(form.descR, {'attr': {'class': 'form-control'}}) }}

                            <br>
                            <div action=\"{{ path('AvisAdd') }}\" method=\"post\">
                                <div class=\"rateyo\" id= \"rating\"
                                     data-rateyo-rating=\"1\"
                                     data-rateyo-num-stars=\"5\"
                                     data-rateyo-score=\"3\">
                                </div>

                                <span class='result'>0</span>
                                <input type=\"hidden\" name=\"rating\">

                            </div>


                            <button type=\"submit\" id=\"form_submit_button\" class=\"form_submit_button button trans_200\">send message<span></span><span></span><span></span></button>

                            {{ form_end(form) }}
                            <br><br>







                        </div>

    <script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>
    <script src=\"{{ asset('styles1/bootstrap4/popper.js') }}\"></script>
    <script src=\"{{ asset('styles1/bootstrap4/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('styles1/bootstrap4/bootstrap.min.js') }}\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA\"></script>
    <script src=\"{{ asset('js/contact_custom.js') }}\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js\"></script>

    <script>


        \$(function () {
            \$(\".rateyo\").rateYo().on(\"rateyo.change\", function (e, data) {
                var rating = data.rating;
                \$(this).parent().find('.score').text('score :'+ \$(this).attr('data-rateyo-score'));
                \$(this).parent().find('.result').text('rating :'+ rating);
                \$(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
            });
        });

    </script>

    </body>

    </html>

{% endblock %}", "avisclient/addRating.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\avisclient\\addRating.html.twig");
    }
}
