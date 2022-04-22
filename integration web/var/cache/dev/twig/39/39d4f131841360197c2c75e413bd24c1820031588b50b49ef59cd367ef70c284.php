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

/* reclamation/search */
class __TwigTemplate_45b6253459d119270920a5c2b21f33d4d3df22c6b15bfa9c1f4b39bcf9aea27a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'search' => [$this, 'block_search'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/search"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/search"));

        $this->parent = $this->loadTemplate("baserec.html.twig", "reclamation/search", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_search($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 3
        echo "
    <!-- page content -->
    <div class=\"right_col\" role=\"main\">
        <div class=\"\">
            <div class=\"page-title\">
                <div class=\"clearfix\"></div>
                <div class=\"col-md-12 col-sm-12  \">
                    <div class=\"x_panel\">
                        <div class=\"x_title\">
                            <h2>Liste de Reclamation </h2>
                            <ul class=\"nav navbar-right panel_toolbox\">
                                <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                                </li>
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                        <a class=\"dropdown-item\" href=\"#\">Settings 1</a>
                                        <a class=\"dropdown-item\" href=\"#\">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                                </li>
                            </ul>
                            <div class=\"clearfix\"></div>
                        </div>

                        <div class=\"x_content\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped jambo_table bulk_action\">
                                    <thead>
                                    <tr class=\"headings\">
                                        <th class=\"column-title\">ID Reclamation</th>
                                        <th class=\"column-title\">Description </th>
                                        <th class=\"column-title\">Date Reclamation</th>
                                        <th class=\"column-title\">Field</th>
                                        <th class=\"column-title no-link last\"><span class=\"nobr\">Supprimer</span></th>
                                        <th class=\"bulk-actions\" colspan=\"7\">
                                            <a class=\"antoo\" style=\"color:#fff; font-weight:500;\">Bulk Actions ( <span class=\"action-cnt\"> </span> ) <i class=\"fa fa-chevron-down\"></i></a>
                                        </th>
                                    </tr>
                                    </thead>
                                    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamation"]) || array_key_exists("reclamation", $context) ? $context["reclamation"] : (function () { throw new RuntimeError('Variable "reclamation" does not exist.', 44, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Reclamation"]) {
            // line 45
            echo "                                        <tr>
                                            <td> ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Reclamation"], "idrev", [], "any", false, false, false, 46), "html", null, true);
            echo " </td>
                                            <td> ";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Reclamation"], "description", [], "any", false, false, false, 47), "html", null, true);
            echo " </td>
                                            <td> ";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Reclamation"], "date", [], "any", false, false, false, 48), "d/m/y"), "html", null, true);
            echo " </td>
                                            <td> ";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Reclamation"], "field", [], "any", false, false, false, 49), "html", null, true);
            echo " </td>
                                            <td><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("supprec", ["idrec" => twig_get_attribute($this->env, $this->source, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 50, $this->source); })()), "idrec", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\">Delete</a></td>

                                        </tr>

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Reclamation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
                                </table>
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
        return "reclamation/search";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 55,  134 => 50,  130 => 49,  126 => 48,  122 => 47,  118 => 46,  115 => 45,  111 => 44,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baserec.html.twig' %}
{% block search %}

    <!-- page content -->
    <div class=\"right_col\" role=\"main\">
        <div class=\"\">
            <div class=\"page-title\">
                <div class=\"clearfix\"></div>
                <div class=\"col-md-12 col-sm-12  \">
                    <div class=\"x_panel\">
                        <div class=\"x_title\">
                            <h2>Liste de Reclamation </h2>
                            <ul class=\"nav navbar-right panel_toolbox\">
                                <li><a class=\"collapse-link\"><i class=\"fa fa-chevron-up\"></i></a>
                                </li>
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\"><i class=\"fa fa-wrench\"></i></a>
                                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdownMenuButton\">
                                        <a class=\"dropdown-item\" href=\"#\">Settings 1</a>
                                        <a class=\"dropdown-item\" href=\"#\">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class=\"close-link\"><i class=\"fa fa-close\"></i></a>
                                </li>
                            </ul>
                            <div class=\"clearfix\"></div>
                        </div>

                        <div class=\"x_content\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-striped jambo_table bulk_action\">
                                    <thead>
                                    <tr class=\"headings\">
                                        <th class=\"column-title\">ID Reclamation</th>
                                        <th class=\"column-title\">Description </th>
                                        <th class=\"column-title\">Date Reclamation</th>
                                        <th class=\"column-title\">Field</th>
                                        <th class=\"column-title no-link last\"><span class=\"nobr\">Supprimer</span></th>
                                        <th class=\"bulk-actions\" colspan=\"7\">
                                            <a class=\"antoo\" style=\"color:#fff; font-weight:500;\">Bulk Actions ( <span class=\"action-cnt\"> </span> ) <i class=\"fa fa-chevron-down\"></i></a>
                                        </th>
                                    </tr>
                                    </thead>
                                    {% for Reclamation in reclamation %}
                                        <tr>
                                            <td> {{ Reclamation.idrev}} </td>
                                            <td> {{ Reclamation.description }} </td>
                                            <td> {{ Reclamation.date |date(\"d/m/y\") }} </td>
                                            <td> {{ Reclamation.field }} </td>
                                            <td><a href=\"{{ path(\"supprec\", {'idrec':i.idrec}) }}\">Delete</a></td>

                                        </tr>

                                    {% endfor %}

                                </table>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "reclamation/search", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\reclamation\\search");
    }
}
