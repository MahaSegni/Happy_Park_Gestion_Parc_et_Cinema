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

/* conge/afficherc2.html.twig */
class __TwigTemplate_7fc9f72ae56216ce85ef3381aae7de341786d1a36ec7312bc0f075048c2925df extends Template
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
        return "base4.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conge/afficherc2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "conge/afficherc2.html.twig"));

        $this->parent = $this->loadTemplate("base4.html.twig", "conge/afficherc2.html.twig", 1);
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
        echo "<table border=\"2\">
<div class=\"chit-chat-heading\">liste conges</div>
    <tr>
        <td>reference conge</td>
        <td>date conge</td>
        <td>motif conge</td>
        <td>nombre jours conge</td>
        <td>id employe correspondant</td>


    </tr>
    ";
        // line 18
        echo "
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listconge"]) || array_key_exists("listconge", $context) ? $context["listconge"] : (function () { throw new RuntimeError('Variable "listconge" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 20
            echo "
        <tr>


            <td> ";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "idconge", [], "any", false, false, false, 24), "html", null, true);
            echo "</td>
            <td> ";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "dateconge", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true);
            echo "</td>
            <td> ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "motifconge", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
            <td> ";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "nbjourconge", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
            <td> ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "employe", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>



            <td> <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deletecs", ["idconge" => twig_get_attribute($this->env, $this->source, $context["x"], "idconge", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">Delete conge</a></td>

        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
</table>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "conge/afficherc2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 37,  117 => 32,  110 => 28,  106 => 27,  102 => 26,  98 => 25,  94 => 24,  88 => 20,  84 => 19,  81 => 18,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base4.html.twig' %}
{% block title %}
<table border=\"2\">
<div class=\"chit-chat-heading\">liste conges</div>
    <tr>
        <td>reference conge</td>
        <td>date conge</td>
        <td>motif conge</td>
        <td>nombre jours conge</td>
        <td>id employe correspondant</td>


    </tr>
    {# <form method=\"post\" action=\"{{ path ('tri') }}\">
        <label>trier par date</label>
       <input type=\"submit\" value=\"tri\">
    </form>#}

    {% for x in listconge %}

        <tr>


            <td> {{x.idconge}}</td>
            <td> {{x.dateconge|date('Y-m-d')}}</td>
            <td> {{x.motifconge}}</td>
            <td> {{x.nbjourconge}}</td>
            <td> {{x.employe}}</td>



            <td> <a href=\"{{ path('deletecs',{'idconge':x.idconge}) }}\">Delete conge</a></td>

        </tr>

    {% endfor %}

</table>

{% endblock  %}


", "conge/afficherc2.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\conge\\afficherc2.html.twig");
    }
}
