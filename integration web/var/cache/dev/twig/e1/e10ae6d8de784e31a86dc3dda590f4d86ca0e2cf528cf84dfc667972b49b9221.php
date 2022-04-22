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

/* cinema/add.html.twig */
class __TwigTemplate_fa757e10457723c86628b55c59dcac940a2bdf85e5b058636097100e29cc5c90 extends Template
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
        return "baseb1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cinema/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cinema/add.html.twig"));

        $this->parent = $this->loadTemplate("baseb1.html.twig", "cinema/add.html.twig", 1);
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

        <h2>Ajouter une salle de cinema</h2>
        <table>
            ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCinema"]) || array_key_exists("formCinema", $context) ? $context["formCinema"] : (function () { throw new RuntimeError('Variable "formCinema" does not exist.', 8, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
            <tr><div>
                    <td>";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCinema"]) || array_key_exists("formCinema", $context) ? $context["formCinema"] : (function () { throw new RuntimeError('Variable "formCinema" does not exist.', 10, $this->source); })()), "date", [], "any", false, false, false, 10), 'label');
        echo "</td>
                    <td>";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCinema"]) || array_key_exists("formCinema", $context) ? $context["formCinema"] : (function () { throw new RuntimeError('Variable "formCinema" does not exist.', 11, $this->source); })()), "date", [], "any", false, false, false, 11), 'errors');
        echo "
                        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCinema"]) || array_key_exists("formCinema", $context) ? $context["formCinema"] : (function () { throw new RuntimeError('Variable "formCinema" does not exist.', 12, $this->source); })()), "date", [], "any", false, false, false, 12), 'widget');
        echo "</td>
                </div></tr>
            <tr><div>
                    <td>";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCinema"]) || array_key_exists("formCinema", $context) ? $context["formCinema"] : (function () { throw new RuntimeError('Variable "formCinema" does not exist.', 15, $this->source); })()), "heure_p", [], "any", false, false, false, 15), 'label');
        echo "</td>
                    <td>";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCinema"]) || array_key_exists("formCinema", $context) ? $context["formCinema"] : (function () { throw new RuntimeError('Variable "formCinema" does not exist.', 16, $this->source); })()), "heure_p", [], "any", false, false, false, 16), 'errors');
        echo "
                        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCinema"]) || array_key_exists("formCinema", $context) ? $context["formCinema"] : (function () { throw new RuntimeError('Variable "formCinema" does not exist.', 17, $this->source); })()), "heure_p", [], "any", false, false, false, 17), 'widget');
        echo "</td>
                </div></tr>
            <tr> <div>
                    <td>";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCinema"]) || array_key_exists("formCinema", $context) ? $context["formCinema"] : (function () { throw new RuntimeError('Variable "formCinema" does not exist.', 20, $this->source); })()), "film", [], "any", false, false, false, 20), 'label', ["label" => "Film"]);
        echo "</td>
                    <td>";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCinema"]) || array_key_exists("formCinema", $context) ? $context["formCinema"] : (function () { throw new RuntimeError('Variable "formCinema" does not exist.', 21, $this->source); })()), "film", [], "any", false, false, false, 21), 'errors');
        echo "
                        ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCinema"]) || array_key_exists("formCinema", $context) ? $context["formCinema"] : (function () { throw new RuntimeError('Variable "formCinema" does not exist.', 22, $this->source); })()), "film", [], "any", false, false, false, 22), 'widget');
        echo "</td>
                </div></tr>
            <tr><div>
                    <td> ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCinema"]) || array_key_exists("formCinema", $context) ? $context["formCinema"] : (function () { throw new RuntimeError('Variable "formCinema" does not exist.', 25, $this->source); })()), "nbr", [], "any", false, false, false, 25), 'label', ["label" => "nombre de places disponibles"]);
        echo "</td>
                    <td>";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCinema"]) || array_key_exists("formCinema", $context) ? $context["formCinema"] : (function () { throw new RuntimeError('Variable "formCinema" does not exist.', 26, $this->source); })()), "nbr", [], "any", false, false, false, 26), 'errors');
        echo "
                        ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCinema"]) || array_key_exists("formCinema", $context) ? $context["formCinema"] : (function () { throw new RuntimeError('Variable "formCinema" does not exist.', 27, $this->source); })()), "nbr", [], "any", false, false, false, 27), 'widget');
        echo "</td>
                </div></tr>
            <tr> <div>

                    <td>
                        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formCinema"]) || array_key_exists("formCinema", $context) ? $context["formCinema"] : (function () { throw new RuntimeError('Variable "formCinema" does not exist.', 32, $this->source); })()), "Enregistrer", [], "array", false, false, false, 32), 'widget');
        echo "</td>
                </div></tr>
            ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formCinema"]) || array_key_exists("formCinema", $context) ? $context["formCinema"] : (function () { throw new RuntimeError('Variable "formCinema" does not exist.', 34, $this->source); })()), 'form_end');
        echo " </table>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "cinema/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 34,  138 => 32,  130 => 27,  126 => 26,  122 => 25,  116 => 22,  112 => 21,  108 => 20,  102 => 17,  98 => 16,  94 => 15,  88 => 12,  84 => 11,  80 => 10,  75 => 8,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseb1.html.twig' %}
{% block title %}

    <div class=\"section-title\">

        <h2>Ajouter une salle de cinema</h2>
        <table>
            {{ form_start(formCinema,{'attr':{'novalidate' : 'novalidate'}}) }}
            <tr><div>
                    <td>{{ form_label(formCinema.date) }}</td>
                    <td>{{ form_errors(formCinema.date) }}
                        {{ form_widget(formCinema.date) }}</td>
                </div></tr>
            <tr><div>
                    <td>{{ form_label(formCinema.heure_p) }}</td>
                    <td>{{ form_errors(formCinema.heure_p) }}
                        {{ form_widget(formCinema.heure_p) }}</td>
                </div></tr>
            <tr> <div>
                    <td>{{ form_label(formCinema.film,'Film') }}</td>
                    <td>{{ form_errors(formCinema.film) }}
                        {{ form_widget(formCinema.film) }}</td>
                </div></tr>
            <tr><div>
                    <td> {{ form_label(formCinema.nbr,'nombre de places disponibles') }}</td>
                    <td>{{ form_errors(formCinema.nbr ) }}
                        {{ form_widget(formCinema.nbr) }}</td>
                </div></tr>
            <tr> <div>

                    <td>
                        {{ form_widget(formCinema['Enregistrer']) }}</td>
                </div></tr>
            {{ form_end(formCinema) }} </table>
    </div>
{% endblock %}", "cinema/add.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\cinema\\add.html.twig");
    }
}
