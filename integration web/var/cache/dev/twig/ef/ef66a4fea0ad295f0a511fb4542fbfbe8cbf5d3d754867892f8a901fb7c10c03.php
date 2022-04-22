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

/* abonnement/Afficheabonnement.html.twig */
class __TwigTemplate_d5f774828f2d0915d524621997df6076e19d34853a61b7e456789dd04cb0253f extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/Afficheabonnement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "abonnement/Afficheabonnement.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "abonnement/Afficheabonnement.html.twig", 1);
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
    <h1> Liste des abonnements </h1>
    <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\">

    </script> <form method=\"post\" action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tri");
        echo "\">
    <input type=\"submit\" value=\"Par Jour \">
</form>

    <table
            id=\"tableac\";

            border=\"1\">
        <tr>

            <th>ID</th>

            <th> Nom</th>
            <th>Prénom </th>


            <th> L'id du Type d'abonnement</th>
            <th> Date debut  </th>
            <th> Date fin </th>
            <th> Valide </th>
            <th> Date demande </th>



        </tr>
        <tr ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abonnement"]) || array_key_exists("abonnement", $context) ? $context["abonnement"] : (function () { throw new RuntimeError('Variable "abonnement" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            echo ">
            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo " </td>
            <td> ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "abonne", [], "any", false, false, false, 34), "nomabonne", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
            <td> ";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "abonne", [], "any", false, false, false, 35), "prenomabonne", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>

            <td> ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["a"], "typeabonnement", [], "any", false, false, false, 37), "type", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
            <td> ";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "datedebut", [], "any", false, false, false, 38), "d/m/Y"), "html", null, true);
            echo "</td>
            <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "datefin", [], "any", false, false, false, 39), "d/m/Y"), "html", null, true);
            echo "</td>

            <td> ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "valide", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
            <td> ";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["a"], "datedemande", [], "any", false, false, false, 42), "d/m/Y"), "html", null, true);
            echo "</td>




            <td> <a href=\" ";
            // line 47
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("da", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 47)]), "html", null, true);
            echo "\" >Delete </a> </td>
            <td> <a href=\" ";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("validerAbo", ["id" => twig_get_attribute($this->env, $this->source, $context["a"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\" >Valider </a> </td>


            <script>
                \$(document).ready(function(){
                    \$('#search').keyup(function(){
                        search_table(\$(this).val());
                    });
                    function search_table(value){
                        \$('#tableac tbody tr').each(function(){
                            var found = 'false';
                            \$(this).each(function(){
                                if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                                {
                                    found = 'true';
                                }
                            });
                            if(found == 'true')
                            {
                                \$(this).show();

                            }
                            else
                            {
                                \$(this).hide();

                            }
                        });
                    }
                });
            </script>

        </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo ">

        <input type=\"text\" id=\"search\" name=\"search\" class=\"form-control\" placeholder=\"Search\">




    </table>





    </body>



    </html>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "abonnement/Afficheabonnement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 80,  153 => 48,  149 => 47,  141 => 42,  137 => 41,  132 => 39,  128 => 38,  124 => 37,  119 => 35,  115 => 34,  111 => 33,  105 => 32,  77 => 7,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block title  %}

    <h1> Liste des abonnements </h1>
    <script src=\"{{ asset('js/jquery.min.js') }}\">

    </script> <form method=\"post\" action=\"{{ path('tri') }}\">
    <input type=\"submit\" value=\"Par Jour \">
</form>

    <table
            id=\"tableac\";

            border=\"1\">
        <tr>

            <th>ID</th>

            <th> Nom</th>
            <th>Prénom </th>


            <th> L'id du Type d'abonnement</th>
            <th> Date debut  </th>
            <th> Date fin </th>
            <th> Valide </th>
            <th> Date demande </th>



        </tr>
        <tr {%  for a in abonnement %}>
            <td>{{a.id }} </td>
            <td> {{a.abonne.nomabonne }}</td>
            <td> {{a.abonne.prenomabonne }}</td>

            <td> {{a.typeabonnement.type }}</td>
            <td> {{a.datedebut |date('d/m/Y') }}</td>
            <td>{{a.datefin |date('d/m/Y') }}</td>

            <td> {{a.valide  }}</td>
            <td> {{a.datedemande |date('d/m/Y')}}</td>




            <td> <a href=\" {{ path('da',{'id':a.id}) }}\" >Delete </a> </td>
            <td> <a href=\" {{ path('validerAbo',{'id':a.id}) }}\" >Valider </a> </td>


            <script>
                \$(document).ready(function(){
                    \$('#search').keyup(function(){
                        search_table(\$(this).val());
                    });
                    function search_table(value){
                        \$('#tableac tbody tr').each(function(){
                            var found = 'false';
                            \$(this).each(function(){
                                if(\$(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)
                                {
                                    found = 'true';
                                }
                            });
                            if(found == 'true')
                            {
                                \$(this).show();

                            }
                            else
                            {
                                \$(this).hide();

                            }
                        });
                    }
                });
            </script>

        </tr {% endfor %}>

        <input type=\"text\" id=\"search\" name=\"search\" class=\"form-control\" placeholder=\"Search\">




    </table>





    </body>



    </html>{% endblock %}", "abonnement/Afficheabonnement.html.twig", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\abonnement\\Afficheabonnement.html.twig");
    }
}
