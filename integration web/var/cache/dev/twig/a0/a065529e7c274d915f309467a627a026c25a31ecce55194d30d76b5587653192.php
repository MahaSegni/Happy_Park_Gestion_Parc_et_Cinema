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

/* film/updateFilm.html.twig */
class __TwigTemplate_11b51ee6baf6f7a2a07fca4e0fcc381511ca409b173b04cf28080ff0925b5e1b extends Template
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
        return "film_base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "film/updateFilm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "film/updateFilm.html.twig"));

        $this->parent = $this->loadTemplate("film_base1.html.twig", "film/updateFilm.html.twig", 1);
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

    <div class=\"section-title\">
        <h2>Ajouter un film </h2>
        <table>
            ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFilm"]) || array_key_exists("formFilm", $context) ? $context["formFilm"] : (function () { throw new RuntimeError('Variable "formFilm" does not exist.', 8, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
            <tr><div>
                    <td>";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFilm"]) || array_key_exists("formFilm", $context) ? $context["formFilm"] : (function () { throw new RuntimeError('Variable "formFilm" does not exist.', 10, $this->source); })()), "nomFilm", [], "any", false, false, false, 10), 'label', ["label" => "Film "]);
        echo "</td>
                    <td>";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFilm"]) || array_key_exists("formFilm", $context) ? $context["formFilm"] : (function () { throw new RuntimeError('Variable "formFilm" does not exist.', 11, $this->source); })()), "nomFilm", [], "any", false, false, false, 11), 'errors');
        echo "
                        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFilm"]) || array_key_exists("formFilm", $context) ? $context["formFilm"] : (function () { throw new RuntimeError('Variable "formFilm" does not exist.', 12, $this->source); })()), "nomFilm", [], "any", false, false, false, 12), 'widget');
        echo "</td>
                </div></tr>
            <tr><div>
                    <td>";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFilm"]) || array_key_exists("formFilm", $context) ? $context["formFilm"] : (function () { throw new RuntimeError('Variable "formFilm" does not exist.', 15, $this->source); })()), "descriptionf", [], "any", false, false, false, 15), 'label', ["label" => "Description"]);
        echo "</td>
                    <td>";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFilm"]) || array_key_exists("formFilm", $context) ? $context["formFilm"] : (function () { throw new RuntimeError('Variable "formFilm" does not exist.', 16, $this->source); })()), "descriptionf", [], "any", false, false, false, 16), 'errors');
        echo "
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFilm"]) || array_key_exists("formFilm", $context) ? $context["formFilm"] : (function () { throw new RuntimeError('Variable "formFilm" does not exist.', 17, $this->source); })()), "descriptionf", [], "any", false, false, false, 17), 'widget');
        echo "</td>
                </div></tr>

            <tr><div>
                    <td> ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFilm"]) || array_key_exists("formFilm", $context) ? $context["formFilm"] : (function () { throw new RuntimeError('Variable "formFilm" does not exist.', 21, $this->source); })()), "dateSortie", [], "any", false, false, false, 21), 'label');
        echo "</td>
                    <td>";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFilm"]) || array_key_exists("formFilm", $context) ? $context["formFilm"] : (function () { throw new RuntimeError('Variable "formFilm" does not exist.', 22, $this->source); })()), "dateSortie", [], "any", false, false, false, 22), 'errors');
        echo "
                        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFilm"]) || array_key_exists("formFilm", $context) ? $context["formFilm"] : (function () { throw new RuntimeError('Variable "formFilm" does not exist.', 23, $this->source); })()), "dateSortie", [], "any", false, false, false, 23), 'widget');
        echo "</td>
                </div></tr>
            <tr> <div>
                    <td>";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFilm"]) || array_key_exists("formFilm", $context) ? $context["formFilm"] : (function () { throw new RuntimeError('Variable "formFilm" does not exist.', 26, $this->source); })()), "categorie", [], "any", false, false, false, 26), 'label');
        echo "</td>
                    <td>";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFilm"]) || array_key_exists("formFilm", $context) ? $context["formFilm"] : (function () { throw new RuntimeError('Variable "formFilm" does not exist.', 27, $this->source); })()), "categorie", [], "any", false, false, false, 27), 'errors');
        echo "
                        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFilm"]) || array_key_exists("formFilm", $context) ? $context["formFilm"] : (function () { throw new RuntimeError('Variable "formFilm" does not exist.', 28, $this->source); })()), "categorie", [], "any", false, false, false, 28), 'widget');
        echo "</td>
                </div></tr>
            <tr> <div>

                    <td>
                        ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formFilm"]) || array_key_exists("formFilm", $context) ? $context["formFilm"] : (function () { throw new RuntimeError('Variable "formFilm" does not exist.', 33, $this->source); })()), "Enregistrer", [], "array", false, false, false, 33), 'widget');
        echo "</td>
                </div></tr>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formFilm"]) || array_key_exists("formFilm", $context) ? $context["formFilm"] : (function () { throw new RuntimeError('Variable "formFilm" does not exist.', 35, $this->source); })()), 'form_end');
        echo " </table>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "film/updateFilm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 35,  139 => 33,  131 => 28,  127 => 27,  123 => 26,  117 => 23,  113 => 22,  109 => 21,  102 => 17,  98 => 16,  94 => 15,  88 => 12,  84 => 11,  80 => 10,  75 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'film_base1.html.twig' %}
{% block title %}


    <div class=\"section-title\">
        <h2>Ajouter un film </h2>
        <table>
            {{ form_start(formFilm,{'attr':{'novalidate' : 'novalidate'}}) }}
            <tr><div>
                    <td>{{ form_label(formFilm.nomFilm,'Film ') }}</td>
                    <td>{{ form_errors(formFilm.nomFilm) }}
                        {{ form_widget(formFilm.nomFilm) }}</td>
                </div></tr>
            <tr><div>
                    <td>{{ form_label(formFilm.descriptionf,'Description') }}</td>
                    <td>{{ form_errors(formFilm.descriptionf) }}
                        {{ form_widget(formFilm.descriptionf) }}</td>
                </div></tr>

            <tr><div>
                    <td> {{ form_label(formFilm.dateSortie) }}</td>
                    <td>{{ form_errors(formFilm.dateSortie) }}
                        {{ form_widget(formFilm.dateSortie) }}</td>
                </div></tr>
            <tr> <div>
                    <td>{{ form_label(formFilm.categorie) }}</td>
                    <td>{{ form_errors(formFilm.categorie) }}
                        {{ form_widget(formFilm.categorie) }}</td>
                </div></tr>
            <tr> <div>

                    <td>
                        {{ form_widget(formFilm['Enregistrer']) }}</td>
                </div></tr>
            {{ form_end(formFilm) }} </table>

    </div>

{% endblock %}", "film/updateFilm.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\film\\updateFilm.html.twig");
    }
}
