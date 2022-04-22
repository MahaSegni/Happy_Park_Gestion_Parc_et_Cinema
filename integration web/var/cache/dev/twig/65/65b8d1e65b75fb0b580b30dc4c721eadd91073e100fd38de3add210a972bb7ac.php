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

/* calendar/new.html.twig */
class __TwigTemplate_16e6bf11016909fe2555f6b3a986e08a1bade533fa4e6b6669f6a0b8d81e1534 extends Template
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
        return "listeCellule.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "calendar/new.html.twig"));

        $this->parent = $this->loadTemplate("listeCellule.html.twig", "calendar/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "
    <h1>Create new Calendar</h1>
    <form  action=\"\" method=\"post\" id=\"contactForm\" novalidate=\"novalidate\" id=\"search_form_1\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
        <div class=\"search_item\">
            <div style='align-content: center'>
            <div class=\"col-md-8 col-sm-8\">
                ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                <div>title</div>

                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "title", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div>start</div>
                ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "start", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div>end</div>
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "end", [], "any", false, false, false, 18), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div>description</div>
                ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div>Background Color</div>
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "background_color", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div>Border Color</div>
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "border_color", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                <div>Text Color</div>
                ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "text_color", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                <button type=\"submit\" class=\"btn btn-success\">Create</button>
                <button type=\"submit\" class=\"btn btn-success\"><a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("calendar_index");
        echo "\">back to list</a></button>

                ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_end');
        echo "
            </div>
            </div>
        </div>
    </form>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "calendar/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 31,  118 => 29,  112 => 26,  107 => 24,  102 => 22,  97 => 20,  92 => 18,  87 => 16,  82 => 14,  76 => 11,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'listeCellule.html.twig' %}


{% block title %}

    <h1>Create new Calendar</h1>
    <form  action=\"\" method=\"post\" id=\"contactForm\" novalidate=\"novalidate\" id=\"search_form_1\" class=\"search_panel_content d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-lg-between justify-content-start\">
        <div class=\"search_item\">
            <div style='align-content: center'>
            <div class=\"col-md-8 col-sm-8\">
                {{ form_start(form,{'attr': {'novalidate': 'novalidate'}}) }}
                <div>title</div>

                {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}
                <div>start</div>
                {{ form_widget(form.start, {'attr': {'class': 'form-control'}}) }}
                <div>end</div>
                {{ form_widget(form.end, {'attr': {'class': 'form-control'}}) }}
                <div>description</div>
                {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
                <div>Background Color</div>
                {{ form_widget(form.background_color, {'attr': {'class': 'form-control'}}) }}
                <div>Border Color</div>
                {{ form_widget(form.border_color, {'attr': {'class': 'form-control'}}) }}
                <div>Text Color</div>
                {{ form_widget(form.text_color, {'attr': {'class': 'form-control'}}) }}

                <button type=\"submit\" class=\"btn btn-success\">Create</button>
                <button type=\"submit\" class=\"btn btn-success\"><a href=\"{{ path('calendar_index') }}\">back to list</a></button>

                {{ form_end(form) }}
            </div>
            </div>
        </div>
    </form>




{% endblock %}
", "calendar/new.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\calendar\\new.html.twig");
    }
}
