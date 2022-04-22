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

/* Event/Front/afficher.html.twig */
class __TwigTemplate_f049c8994b094d9f2240e15d0db1b46ead8a06e9918feee7e7ef57457a110213 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'event' => [$this, 'block_event'],
            'Comment' => [$this, 'block_Comment'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "indexEvent.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Event/Front/afficher.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Event/Front/afficher.html.twig"));

        $this->parent = $this->loadTemplate("indexEvent.html.twig", "Event/Front/afficher.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_event($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "event"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "event"));

        // line 3
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listevenement"]) || array_key_exists("listevenement", $context) ? $context["listevenement"] : (function () { throw new RuntimeError('Variable "listevenement" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["x"]) {
            // line 4
            echo "
            <div class=\"col-lg-4 intro_col\">
                <div class=\"intro_item\">
                    <div class=\"intro_item_overlay\"></div>
                    <!-- Image by https://unsplash.com/@dnevozhai -->
                    <div class=\"intro_item_background\" ></div>
                    <div class=\"intro_item_content d-flex flex-column align-items-center justify-content-center\">
                        <div class=\"intro_date\">";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "DateEvent", [], "any", false, false, false, 11), "Y-m-d"), "html", null, true);
            echo "</div>
                        <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("QuitterEv", ["id" => twig_get_attribute($this->env, $this->source, $context["x"], "id", [], "any", false, false, false, 12)]), "html", null, true);
            echo "\" onclick=\"alert('Vous Allez Quitter l event ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "nomEvent", [], "any", false, false, false, 12), "html", null, true);
            echo "')\"><p class=\"text-danger\"><i
                                        class=\"fa fa-minus text-danger\"></i> Quitter</p></a>
                        ";
            // line 14
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["x"], "capacite", [], "any", false, false, false, 14), 0))) {
                // line 15
                echo "                        <div class=\"button intro_button\">
                            <div class=\"card-text text-sm-center\">


                            <div class=\"button_bcg\"></div>
                            <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ParticiperEv", ["id" => twig_get_attribute($this->env, $this->source, $context["x"], "id", [], "any", false, false, false, 20)]), "html", null, true);
                echo "\" onclick=\"alert('participation avec success a l`evenement : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "nomEvent", [], "any", false, false, false, 20), "html", null, true);
                echo " ')\">
                                <p class=\"text-success\"><i class=\"fa fa-plus text-success\"></i> Participer</p></a></div>
                        </div>
                            ";
            } else {
                // line 24
                echo "

                            <p><span  class=\"badge badge-danger\">Complet </span></p>
                        ";
            }
            // line 28
            echo "
                        <div class=\"intro_center text-center\">
                            <h1>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "NomEvent", [], "any", false, false, false, 30), "html", null, true);
            echo "</h1>
                            <div class=\"intro_price\">Capacite : ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "Capacite", [], "any", false, false, false, 31), "html", null, true);
            echo "</div>
                            <div class=\"intro_price\">Emplacement : ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["x"], "Emplacement", [], "any", false, false, false, 32), "html", null, true);
            echo "</div>
                        </div>
                    </div>
                </div>
               <br>
               <br>
            </div>


        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['x'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_Comment($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Comment"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Comment"));

        // line 45
        echo "    <section>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-5 col-md-6 col-12 pb-4\">
                    <h1>Comments</h1>
                    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listcomment"]) || array_key_exists("listcomment", $context) ? $context["listcomment"] : (function () { throw new RuntimeError('Variable "listcomment" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 51
            echo "                    <div class=\"comment mt-4 text-justify float-left\" style=\"background-color: white ;padding: 20px; border-radius: 10px; width: 500px\"> <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images1/fares.jpg"), "html", null, true);
            echo "\" alt=\"\" class=\"rounded-circle\" width=\"40\" height=\"40\">
                        <h4>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "user", [], "any", false, false, false, 52), "nom", [], "any", false, false, false, 52), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "user", [], "any", false, false, false, 52), "prenom", [], "any", false, false, false, 52), "html", null, true);
            echo " </h4> <p>Event Name : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "event", [], "any", false, false, false, 52), "nomEvent", [], "any", false, false, false, 52), "html", null, true);
            echo "</p> <br>
                        <p>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "content", [], "any", false, false, false, 53), "html", null, true);
            echo "</p>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
                </div>
                <div class=\"col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4\">
                    ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formcomment"]) || array_key_exists("formcomment", $context) ? $context["formcomment"] : (function () { throw new RuntimeError('Variable "formcomment" does not exist.', 59, $this->source); })()), 'form_start');
        echo "
                    <form id=\"algin-form\">
                        <div class=\"form-group\">
                            <h4>Leave a comment</h4> ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formcomment"]) || array_key_exists("formcomment", $context) ? $context["formcomment"] : (function () { throw new RuntimeError('Variable "formcomment" does not exist.', 62, $this->source); })()), "content", [], "any", false, false, false, 62), 'widget', ["attr" => ["placeholder" => "Message"]]);
        echo "
                        </div>
                        <div class=\"form-group\"> <label for=\"name\">Event Name</label>
                            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formcomment"]) || array_key_exists("formcomment", $context) ? $context["formcomment"] : (function () { throw new RuntimeError('Variable "formcomment" does not exist.', 65, $this->source); })()), "event", [], "any", false, false, false, 65), 'widget');
        echo "

                        </div>
                            
                        ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formcomment"]) || array_key_exists("formcomment", $context) ? $context["formcomment"] : (function () { throw new RuntimeError('Variable "formcomment" does not exist.', 69, $this->source); })()), 'form_end');
        echo "
                    </form>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Event/Front/afficher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 69,  214 => 65,  208 => 62,  202 => 59,  197 => 56,  188 => 53,  180 => 52,  175 => 51,  171 => 50,  164 => 45,  154 => 44,  130 => 32,  126 => 31,  122 => 30,  118 => 28,  112 => 24,  103 => 20,  96 => 15,  94 => 14,  87 => 12,  83 => 11,  74 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'indexEvent.html.twig' %}
{% block event %}
        {% for x in listevenement %}

            <div class=\"col-lg-4 intro_col\">
                <div class=\"intro_item\">
                    <div class=\"intro_item_overlay\"></div>
                    <!-- Image by https://unsplash.com/@dnevozhai -->
                    <div class=\"intro_item_background\" ></div>
                    <div class=\"intro_item_content d-flex flex-column align-items-center justify-content-center\">
                        <div class=\"intro_date\">{{x.DateEvent|date('Y-m-d')}}</div>
                        <a href=\"{{ path('QuitterEv', { 'id': x.id }) }}\" onclick=\"alert('Vous Allez Quitter l event {{ x.nomEvent }}')\"><p class=\"text-danger\"><i
                                        class=\"fa fa-minus text-danger\"></i> Quitter</p></a>
                        {% if (x.capacite >0) %}
                        <div class=\"button intro_button\">
                            <div class=\"card-text text-sm-center\">


                            <div class=\"button_bcg\"></div>
                            <a href=\"{{ path('ParticiperEv', { 'id': x.id }) }}\" onclick=\"alert('participation avec success a l`evenement : {{ x.nomEvent }} ')\">
                                <p class=\"text-success\"><i class=\"fa fa-plus text-success\"></i> Participer</p></a></div>
                        </div>
                            {% else %}


                            <p><span  class=\"badge badge-danger\">Complet </span></p>
                        {% endif %}

                        <div class=\"intro_center text-center\">
                            <h1>{{x.NomEvent}}</h1>
                            <div class=\"intro_price\">Capacite : {{x.Capacite}}</div>
                            <div class=\"intro_price\">Emplacement : {{x.Emplacement}}</div>
                        </div>
                    </div>
                </div>
               <br>
               <br>
            </div>


        {% endfor %}
{% endblock  %}

{% block Comment %}
    <section>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-5 col-md-6 col-12 pb-4\">
                    <h1>Comments</h1>
                    {% for c in listcomment %}
                    <div class=\"comment mt-4 text-justify float-left\" style=\"background-color: white ;padding: 20px; border-radius: 10px; width: 500px\"> <img src=\"{{ asset('images1/fares.jpg') }}\" alt=\"\" class=\"rounded-circle\" width=\"40\" height=\"40\">
                        <h4>{{c.user.nom}} {{ c.user.prenom}} </h4> <p>Event Name : {{c.event.nomEvent}}</p> <br>
                        <p>{{c.content}}</p>
                    </div>
                    {% endfor %}

                </div>
                <div class=\"col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4\">
                    {{ form_start(formcomment) }}
                    <form id=\"algin-form\">
                        <div class=\"form-group\">
                            <h4>Leave a comment</h4> {{ form_widget(formcomment.content,{ 'attr': {'placeholder': 'Message'} }) }}
                        </div>
                        <div class=\"form-group\"> <label for=\"name\">Event Name</label>
                            {{ form_widget(formcomment.event) }}

                        </div>
                            
                        {{ form_end(formcomment) }}
                    </form>
                </div>
            </div>
        </div>
    </section>
{% endblock  %}", "Event/Front/afficher.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\Event\\Front\\afficher.html.twig");
    }
}
