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

/* employe/afficher.html.twig */
class __TwigTemplate_cb12c206b07e8c51c583dec3a710f659e68620453e29c59fc723e4e13a0a9d3e extends Template
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
        return "base3.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/afficher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employe/afficher.html.twig"));

        $this->parent = $this->loadTemplate("base3.html.twig", "employe/afficher.html.twig", 1);
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
        echo "    <div class=\"card-block table-border-style\">
    <div class=\"table-responsive\">
    <table class=\"table table-hover\">
<div class=\"chit-chat-heading\">liste des employes</div>
    <tr>
        <td>reference employe</td>
        <td>nom employe</td>
        <td>prenom employe</td>
        <td>numero telephone employe</td>
        <td>adresse mail employe</td>
        <td>sa reference conge</td>

    </tr>
    <form method=\"post\" action=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("searchemp");
        echo "\">
        <label>Rechercher conge par id conge</label>
        <input type=\"text\" name=\"search\" class=\"form-control\" style=\"width: 25%\"><input type=\"submit\" value=\"Recherche\"  class=\"btn btn-success\">
    </form>


    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listemploye"]) || array_key_exists("listemploye", $context) ? $context["listemploye"] : (function () { throw new RuntimeError('Variable "listemploye" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 23
            echo "
        <tr>

            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "idemp", [], "any", false, false, false, 26), "html", null, true);
            echo "</a></td>
            <td> ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "nomemp", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
            <td> ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "prenomemp", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
            <td> ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "numtelemp", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
            <td> ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "adresseemp", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
           <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["x"], "conges", [], "any", false, false, false, 31)), "html", null, true);
            echo " </td>


            <td> <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateEmploye", ["idemp" => twig_get_attribute($this->env, $this->source, $context["x"], "idemp", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\"><i class=\"fa fa-edit\" style=\"font-size:18px\"></i>Update employe</a></td>
            <td> <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deleteem", ["idemp" => twig_get_attribute($this->env, $this->source, $context["x"], "idemp", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\"><i class=\"fa fa-trash\" style=\"font-size:18px\"></i>Delete employe</a></td>
        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </table></div></div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "employe/afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 39,  131 => 35,  127 => 34,  121 => 31,  117 => 30,  113 => 29,  109 => 28,  105 => 27,  101 => 26,  96 => 23,  92 => 22,  83 => 16,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base3.html.twig' %}
{% block title %}
    <div class=\"card-block table-border-style\">
    <div class=\"table-responsive\">
    <table class=\"table table-hover\">
<div class=\"chit-chat-heading\">liste des employes</div>
    <tr>
        <td>reference employe</td>
        <td>nom employe</td>
        <td>prenom employe</td>
        <td>numero telephone employe</td>
        <td>adresse mail employe</td>
        <td>sa reference conge</td>

    </tr>
    <form method=\"post\" action=\"{{ path ('searchemp') }}\">
        <label>Rechercher conge par id conge</label>
        <input type=\"text\" name=\"search\" class=\"form-control\" style=\"width: 25%\"><input type=\"submit\" value=\"Recherche\"  class=\"btn btn-success\">
    </form>


    {% for x in listemploye %}

        <tr>

            <td>{{x.idemp}}</a></td>
            <td> {{x.nomemp}}</td>
            <td> {{x.prenomemp}}</td>
            <td> {{x.numtelemp}}</td>
            <td> {{x.adresseemp}}</td>
           <td>{{ x.conges |join  }} </td>


            <td> <a href=\"{{ path('updateEmploye',{'idemp':x.idemp}) }}\"><i class=\"fa fa-edit\" style=\"font-size:18px\"></i>Update employe</a></td>
            <td> <a href=\"{{ path('deleteem',{'idemp':x.idemp}) }}\"><i class=\"fa fa-trash\" style=\"font-size:18px\"></i>Delete employe</a></td>
        </tr>

    {% endfor %}
    </table></div></div>
{% endblock  %}", "employe/afficher.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\employe\\afficher.html.twig");
    }
}
