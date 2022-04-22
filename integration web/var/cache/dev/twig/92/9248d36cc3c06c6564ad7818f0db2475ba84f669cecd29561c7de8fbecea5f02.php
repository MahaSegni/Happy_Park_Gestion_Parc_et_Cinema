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

/* abonnement/Admin_abonnement.html.twig */
class __TwigTemplate_2b21d94d806612e91a867730774b13005c23a2706d2ee24746cd7cf4c288da97 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'zero' => [$this, 'block_zero'],
            'one' => [$this, 'block_one'],
            'two' => [$this, 'block_two'],
            'three' => [$this, 'block_three'],
            'four' => [$this, 'block_four'],
            'five' => [$this, 'block_five'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/Admin_abonnement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/Admin_abonnement.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "abonnement/Admin_abonnement.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_zero($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zero"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "zero"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_one($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "one"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "one"));

        // line 5
        echo "    <div class=\"work-progres\">
        <div class=\"chit-chat-heading\">
            Demandes d'abonnement récentes (depuis 2 jours)
        </div>
        <br>
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom et prénom</th>

                    <th>Type d'abonnement</th>
                    <th>Date demande</th>

                    <th>Situation</th>
                    <th>action</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 26
            echo "                <tr>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo " </td>
                    <td>      ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "abonne", [], "any", false, false, false, 28), "nomabonne", [], "any", false, false, false, 28), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "abonne", [], "any", false, false, false, 28), "prenomabonne", [], "any", false, false, false, 28), "html", null, true);
            echo "     </td>
                    <td>      ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "typeabonnement", [], "any", false, false, false, 29), "type", [], "any", false, false, false, 29), "html", null, true);
            echo "   </td>

                    <td> ";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "datedemande", [], "any", false, false, false, 31), "d/m/Y"), "html", null, true);
            echo "</td>
                    ";
            // line 32
            if (twig_get_attribute($this->env, $this->source, $context["a"], "valide", [], "any", false, false, false, 32)) {
                // line 33
                echo "                    <td><span class=\"label label-success\">Validé</span></td>
";
            } else {
                // line 35
                echo "                    <td><span class=\"label label-warning\">En attente</span></td>
    <td> <a href=\" ";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validerAbo", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                echo "\" >Valider </a> </td>

                    ";
            }
            // line 39
            echo "                    <td> <a href=\"\" > </a> </td>


                </tr>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                </tbody>
            </table>
        </div>
    </div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 53
    public function block_two($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "two"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "two"));

        echo " <!-- Pie chart -->

    <div class=\"chart-other\">
        <h3>Abonnement Validé vs en attente (depuis 2 jours)</h3>
        <canvas id=\"pie\" height=\"270\" width=\"415\" style=\"width: 415px; height: 270px;\"></canvas>
        <script>
            var pieData = [

                {
                    value : ";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["nbEnAttente"]) || array_key_exists("nbEnAttente", $context) ? $context["nbEnAttente"] : (function () { throw new RuntimeError('Variable "nbEnAttente" does not exist.', 62, $this->source); })()), "html", null, true);
        echo " ,
                    color : \"#FC8213\"
                },
                {
                    value : ";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["nbValide"]) || array_key_exists("nbValide", $context) ? $context["nbValide"] : (function () { throw new RuntimeError('Variable "nbValide" does not exist.', 66, $this->source); })()), "html", null, true);
        echo " ,
                    color : \"#8BC34A\"
                }

            ];
            new Chart(document.getElementById(\"pie\").getContext(\"2d\")).Pie(pieData);
        </script>
    </div>





";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_three($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "three"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "three"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_four($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "four"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "four"));

        // line 84
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 86
    public function block_five($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "five"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "five"));

        // line 87
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "abonnement/Admin_abonnement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 87,  271 => 86,  261 => 84,  251 => 83,  233 => 80,  209 => 66,  202 => 62,  182 => 53,  165 => 45,  154 => 39,  148 => 36,  145 => 35,  141 => 33,  139 => 32,  135 => 31,  130 => 29,  124 => 28,  120 => 27,  117 => 26,  113 => 25,  91 => 5,  81 => 4,  63 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block zero %}{% endblock %}

{% block one  %}
    <div class=\"work-progres\">
        <div class=\"chit-chat-heading\">
            Demandes d'abonnement récentes (depuis 2 jours)
        </div>
        <br>
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom et prénom</th>

                    <th>Type d'abonnement</th>
                    <th>Date demande</th>

                    <th>Situation</th>
                    <th>action</th>
                </tr>
                </thead>
                <tbody>
                {%  for a in abonnement %}
                <tr>
                    <td>{{a.id }} </td>
                    <td>      {{a.abonne.nomabonne }} {{a.abonne.prenomabonne }}     </td>
                    <td>      {{a.typeabonnement.type}}   </td>

                    <td> {{a.datedemande |date('d/m/Y')}}</td>
                    {% if a.valide %}
                    <td><span class=\"label label-success\">Validé</span></td>
{% else %}
                    <td><span class=\"label label-warning\">En attente</span></td>
    <td> <a href=\" {{ path('validerAbo',{'id':a.id}) }}\" >Valider </a> </td>

                    {% endif %}
                    <td> <a href=\"\" > </a> </td>


                </tr>

{% endfor %}
                </tbody>
            </table>
        </div>
    </div>



{% endblock %}
{% block two %} <!-- Pie chart -->

    <div class=\"chart-other\">
        <h3>Abonnement Validé vs en attente (depuis 2 jours)</h3>
        <canvas id=\"pie\" height=\"270\" width=\"415\" style=\"width: 415px; height: 270px;\"></canvas>
        <script>
            var pieData = [

                {
                    value : {{ nbEnAttente }} ,
                    color : \"#FC8213\"
                },
                {
                    value : {{ nbValide }} ,
                    color : \"#8BC34A\"
                }

            ];
            new Chart(document.getElementById(\"pie\").getContext(\"2d\")).Pie(pieData);
        </script>
    </div>





{% endblock %}
{% block three %}
{% endblock %}

    {% block four %}
    {% endblock %}

    {% block five %}
    {% endblock %}", "abonnement/Admin_abonnement.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\abonnement\\Admin_abonnement.html.twig");
    }
}
