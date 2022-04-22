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

/* listeCellule.html.twig */
class __TwigTemplate_ba4e98b2e31459219a4c5bd802aa5cf9da5e7580d8998a3050f5a5aea0f99ca7 extends Template
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
        return "listeReservation.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "listeCellule.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "listeCellule.html.twig"));

        $this->parent = $this->loadTemplate("listeReservation.html.twig", "listeCellule.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "
                                        <h1> Liste des cellules</h1>

                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Cellule</th>
                                                <th>Disponibilité</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste"]) || array_key_exists("liste", $context) ? $context["liste"] : (function () { throw new RuntimeError('Variable "liste" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 17
            echo "                                                <tr>
                                                    <td> ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "idcellule", [], "any", false, false, false, 18), "html", null, true);
            echo "</td>
                                                    <td> ";
            // line 19
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["x"], "dispo", [], "any", false, false, false, 19), 0))) {
                // line 20
                echo "                                                            Full
                                                        ";
            } else {
                // line 22
                echo "                                                            Empty
                                                        ";
            }
            // line 24
            echo "                                                    </td>
                                                </tr>



                                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                                            </tbody>
                                        </table>

                                <form method=\"post\" action=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addCellule");
        echo "\">
                                    <button class=\"btn btn-success\">ajouter nouvelle cellule</button>
                                </form>
                                        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "listeCellule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 33,  114 => 30,  103 => 24,  99 => 22,  95 => 20,  93 => 19,  89 => 18,  86 => 17,  82 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'listeReservation.html.twig' %}

                            {% block title %}

                                        <h1> Liste des cellules</h1>

                                        <table class=\"table\">
                                            <thead>
                                            <tr>
                                                <th>Cellule</th>
                                                <th>Disponibilité</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            {% for x in liste %}
                                                <tr>
                                                    <td> {{ x.idcellule}}</td>
                                                    <td> {% if x.dispo ==0 %}
                                                            Full
                                                        {% else %}
                                                            Empty
                                                        {% endif %}
                                                    </td>
                                                </tr>



                                            {% endfor %}
                                            </tbody>
                                        </table>

                                <form method=\"post\" action=\"{{ path(\"addCellule\")}}\">
                                    <button class=\"btn btn-success\">ajouter nouvelle cellule</button>
                                </form>
                                        {% endblock %}
", "listeCellule.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\listeCellule.html.twig");
    }
}
