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

/* addRes_front.html.twig */
class __TwigTemplate_bff06e0b1f952e4118ba3f4e970c4f8f226950962e8379224b71ae2f721f1ca7 extends Template
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
        return "Reservation.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "addRes_front.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "addRes_front.html.twig"));

        $this->parent = $this->loadTemplate("Reservation.html.twig", "addRes_front.html.twig", 1);
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

    <div class=\"super_container\">


        <div class=\"contact_form_section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col\">

                        <!-- Contact Form -->
                        <div  class=\"contact_form_container\"  >

                            <div class=\"contact_title text-center\">Reservation Parking</div>
                            ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                            <div>matricule</div>
                            ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "matricule", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <div>date d'entrée</div>
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "dated", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <div>date de sortie</div>
                            ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "datef", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <div>place à réserver</div>
                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "idCell", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                            <br>


                            <button type=\"submit\" id=\"form_submit_button\" class=\"form_submit_button button trans_200\" >submit<span></span><span></span><span></span></button>

                            ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_end');
        echo "
                            <br><br>







                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>









    </div>

    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js1/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles1/bootstrap4/popper.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles1/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles1/bootstrap4/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js1/contact_custom.js"), "html", null, true);
        echo "\"></script>


    </body>

    </html>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "addRes_front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 83,  187 => 81,  183 => 80,  179 => 79,  175 => 78,  143 => 49,  133 => 42,  128 => 40,  123 => 38,  118 => 36,  113 => 34,  91 => 15,  87 => 14,  83 => 13,  79 => 12,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Reservation.html.twig' %}
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

    <div class=\"super_container\">


        <div class=\"contact_form_section\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col\">

                        <!-- Contact Form -->
                        <div  class=\"contact_form_container\"  >

                            <div class=\"contact_title text-center\">Reservation Parking</div>
                            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                            <div>matricule</div>
                            {{ form_widget(form.matricule, {'attr': {'class': 'form-control'}}) }}
                            <div>date d'entrée</div>
                            {{ form_widget(form.dated, {'attr': {'class': 'form-control'}}) }}
                            <div>date de sortie</div>
                            {{ form_widget(form.datef, {'attr': {'class': 'form-control'}}) }}
                            <div>place à réserver</div>
                            {{ form_widget(form.idCell, {'attr': {'class': 'form-control'}}) }}

                            <br>


                            <button type=\"submit\" id=\"form_submit_button\" class=\"form_submit_button button trans_200\" >submit<span></span><span></span><span></span></button>

                            {{ form_end(form) }}
                            <br><br>







                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>









    </div>

    <script src=\"{{ asset('js1/jquery-3.2.1.min.js') }}\"></script>
    <script src=\"{{ asset('styles1/bootstrap4/popper.js') }}\"></script>
    <script src=\"{{ asset('styles1/bootstrap4/bootstrap.min.js') }}\"></script>
    <script src=\"{{ asset('styles1/bootstrap4/bootstrap.min.js') }}\"></script>
    <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA\"></script>
    <script src=\"{{ asset('js1/contact_custom.js') }}\"></script>


    </body>

    </html>

{% endblock %}", "addRes_front.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\addRes_front.html.twig");
    }
}
