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

/* equipement/addE */
class __TwigTemplate_3770d63134d4d95432582956d8988ba4e72ecbf64e2af22e5922dd573d1a0f3e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            't' => [$this, 'block_t'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipement/addE"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "equipement/addE"));

        $this->parent = $this->loadTemplate("baserec.html.twig", "equipement/addE", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_t($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "t"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "t"));

        // line 3
        echo "  <div class=\"inner-block\">
                <!--market updates updates-->
                <div class=\"market-updates\">

                    <div class=\"market-update-block clr-block-1\"  >
                        <div class=\"col-md-8 market-update-left\" >

                            <div class=\"work-progres\"  >

                                <div class=\"table-responsive\">



                                                    <div class=\"work-progres\">
                                                        <div class=\"chit-chat-heading\">
                                                            formulaire d'ajout des equipements
                                                        </div>
                                                        <div class=\"table-responsive\" style=\"width:300px\">
                                                            <table class=\"table table-hover\">
                                                                 ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formE"]) || array_key_exists("formE", $context) ? $context["formE"] : (function () { throw new RuntimeError('Variable "formE" does not exist.', 22, $this->source); })()), 'form');
        echo "
                                                            </table>
                                                        </div>
                                                    </div>


                                </div>
                            </div>


                        </div>

                        <div class=\"clearfix\"> </div>
                    </div>

                </div>
                <!--market updates end here-->



                <div class=\"clearfix\"> </div>

        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "equipement/addE";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 22,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baserec.html.twig' %}
{% block t %}
  <div class=\"inner-block\">
                <!--market updates updates-->
                <div class=\"market-updates\">

                    <div class=\"market-update-block clr-block-1\"  >
                        <div class=\"col-md-8 market-update-left\" >

                            <div class=\"work-progres\"  >

                                <div class=\"table-responsive\">



                                                    <div class=\"work-progres\">
                                                        <div class=\"chit-chat-heading\">
                                                            formulaire d'ajout des equipements
                                                        </div>
                                                        <div class=\"table-responsive\" style=\"width:300px\">
                                                            <table class=\"table table-hover\">
                                                                 {{ form(formE) }}
                                                            </table>
                                                        </div>
                                                    </div>


                                </div>
                            </div>


                        </div>

                        <div class=\"clearfix\"> </div>
                    </div>

                </div>
                <!--market updates end here-->



                <div class=\"clearfix\"> </div>

        </div>
{% endblock %}", "equipement/addE", "C:\\xampp\\htdocs\\integration\\integration\\projet\\projet\\projet\\templates\\equipement\\addE");
    }
}
