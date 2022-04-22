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

/* reclamation/listrec */
class __TwigTemplate_5c49b0fdfa1ffb4e6957a1f0541c860a866793107e9acf9e1021ef3b375ee668 extends Template
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
        return "baserec.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/listrec"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/listrec"));

        $this->parent = $this->loadTemplate("baserec.html.twig", "reclamation/listrec", 1);
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
    <div ";
        // line 4
        echo ">
        <div ";
        // line 5
        echo ">

                <div class=\"header-left\">

                    <div align=\"center\">
                    <h2>Liste des Reclamations </h2>
                        </div>
                    <table>
                <tr>
                    <td>

                        <div class=\"search-box\"  style=\"width: 50%\">

                    <form  method=\"post\" action=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("search");
        echo "\">
                        <input type=\"text\" placeholder=\"Search...\" required=\"\" name=\"search\">
                        <input type=\"submit\" value=\"\" >
                    </form>
                </div><!--//end-search-box-->
                    </td>
                    <td>
                    <form  action=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("trirec");
        echo "\">
                        <button>
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"50\" height=\"40\" fill=\"currentColor\" class=\"bi bi-sort-down-alt\" viewBox=\"0 0 16 16\" >
                            <path d=\"M3.5 3.5a.5.5 0 0 0-1 0v8.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L3.5 12.293V3.5zm4 .5a.5.5 0 0 1 0-1h1a.5.5 0 0 1 0 1h-1zm0 3a.5.5 0 0 1 0-1h3a.5.5 0 0 1 0 1h-3zm0 3a.5.5 0 0 1 0-1h5a.5.5 0 0 1 0 1h-5zM7 12.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5z\"/>
                        </svg>
                        </button>
                    </form>
                    <div class=\"clearfix\"> </div>

                 </td>
                </tr>
                </table>
                <div  class=\"table-responsive\" style=\"width: 200%\">
                    <table class=\"table table-hover\" style=\"width: 200%\" >
                        <thead>
                        <tr>
                            <th >ID Reclamation</th>
                            <th>Description </th>
                            <th >Date Reclamation</th>
                            <th >Field</th>
                            <th >Abonne</th>
                            <th >Rate</th>
                            <th class=\"column-title no-link last\"><span class=\"nobr\">Delete</span></th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 51, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Reclamation"]) {
            // line 52
            echo "                            <tr>
                                <td> ";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Reclamation"], "idrec", [], "any", false, false, false, 53), "html", null, true);
            echo " </td>
                                <td> ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Reclamation"], "description", [], "any", false, false, false, 54), "html", null, true);
            echo " </td>
                                <td> ";
            // line 55
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Reclamation"], "datee", [], "any", false, false, false, 55), "d-m-Y-H-m-s"), "html", null, true);
            echo " </td>
                                <td> ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Reclamation"], "field", [], "any", false, false, false, 56), "html", null, true);
            echo " </td>
                                <td> ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Reclamation"], "abonne", [], "any", false, false, false, 57), "html", null, true);
            echo " </td>
                                <td> ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Reclamation"], "rate", [], "any", false, false, false, 58), "html", null, true);
            echo " </td>
                                <td><a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprec", ["idrec" => twig_get_attribute($this->env, $this->source, $context["Reclamation"], "idrec", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" fill=\"currentColor\" class=\"bi bi-basket\" viewBox=\"0 0 16 16\">
                                            <path d=\"M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z\"/>
                                        </svg></a></td>

                            </tr>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "                        </tbody>
                    </table>
                </div>

        </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "reclamation/listrec";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 66,  159 => 59,  155 => 58,  151 => 57,  147 => 56,  143 => 55,  139 => 54,  135 => 53,  132 => 52,  128 => 51,  99 => 25,  89 => 18,  74 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baserec.html.twig' %}
{% block title %}

    <div {# class=\"chit-chat-layer1\" #}>
        <div {# class=\"col-md-6 chit-chat-layer1-left\"#}>

                <div class=\"header-left\">

                    <div align=\"center\">
                    <h2>Liste des Reclamations </h2>
                        </div>
                    <table>
                <tr>
                    <td>

                        <div class=\"search-box\"  style=\"width: 50%\">

                    <form  method=\"post\" action=\"{{ path('search') }}\">
                        <input type=\"text\" placeholder=\"Search...\" required=\"\" name=\"search\">
                        <input type=\"submit\" value=\"\" >
                    </form>
                </div><!--//end-search-box-->
                    </td>
                    <td>
                    <form  action=\"{{ path('trirec') }}\">
                        <button>
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"50\" height=\"40\" fill=\"currentColor\" class=\"bi bi-sort-down-alt\" viewBox=\"0 0 16 16\" >
                            <path d=\"M3.5 3.5a.5.5 0 0 0-1 0v8.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L3.5 12.293V3.5zm4 .5a.5.5 0 0 1 0-1h1a.5.5 0 0 1 0 1h-1zm0 3a.5.5 0 0 1 0-1h3a.5.5 0 0 1 0 1h-3zm0 3a.5.5 0 0 1 0-1h5a.5.5 0 0 1 0 1h-5zM7 12.5a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7a.5.5 0 0 0-.5.5z\"/>
                        </svg>
                        </button>
                    </form>
                    <div class=\"clearfix\"> </div>

                 </td>
                </tr>
                </table>
                <div  class=\"table-responsive\" style=\"width: 200%\">
                    <table class=\"table table-hover\" style=\"width: 200%\" >
                        <thead>
                        <tr>
                            <th >ID Reclamation</th>
                            <th>Description </th>
                            <th >Date Reclamation</th>
                            <th >Field</th>
                            <th >Abonne</th>
                            <th >Rate</th>
                            <th class=\"column-title no-link last\"><span class=\"nobr\">Delete</span></th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for Reclamation in reclamation %}
                            <tr>
                                <td> {{ Reclamation.idrec}} </td>
                                <td> {{ Reclamation.description }} </td>
                                <td> {{ Reclamation.datee |date(\"d-m-Y-H-m-s\") }} </td>
                                <td> {{ Reclamation.field }} </td>
                                <td> {{ Reclamation.abonne}} </td>
                                <td> {{ Reclamation.rate}} </td>
                                <td><a href=\"{{ path(\"supprec\", {'idrec':Reclamation.idrec}) }}\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"40\" height=\"40\" fill=\"currentColor\" class=\"bi bi-basket\" viewBox=\"0 0 16 16\">
                                            <path d=\"M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1v4.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 13.5V9a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h1.217L5.07 1.243a.5.5 0 0 1 .686-.172zM2 9v4.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9H2zM1 7v1h14V7H1zm3 3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 4 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 6 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3A.5.5 0 0 1 8 10zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 1 .5-.5z\"/>
                                        </svg></a></td>

                            </tr>

                        {% endfor %}
                        </tbody>
                    </table>
                </div>

        </div>



{% endblock %}", "reclamation/listrec", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\reclamation\\listrec");
    }
}
