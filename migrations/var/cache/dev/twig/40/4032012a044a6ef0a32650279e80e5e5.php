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

/* front/evaluation/epreuve.html.twig */
class __TwigTemplate_eeee67d49f2a9f7fa8bdd1a5ecd8a1da extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'mainBarnner' => [$this, 'block_mainBarnner'],
            'mainContent' => [$this, 'block_mainContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/evaluation/epreuve.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/evaluation/epreuve.html.twig"));

        // line 1
        $context["dontShowAnnonces"] = true;
        // line 2
        $this->parent = $this->loadTemplate("front/base.html.twig", "front/evaluation/epreuve.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " - Test de connaissance";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_mainBarnner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainBarnner"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainBarnner"));

        // line 7
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 10
    public function block_mainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        // line 11
        echo "
     <!-- =======================
    Page content START -->
    <section class=\"pt-0\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Main content START -->
                <div class=\"col-12 alert alert-success\">
                    <h3>";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 19, $this->source); })()), "titre", [], "any", false, false, false, 19), "html", null, true);
        echo "</h3>
                    <p>";
        // line 20
        echo twig_get_attribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 20, $this->source); })()), "description", [], "any", false, false, false, 20);
        echo "</p>
                    <div class=\"d-flex\">
                        <p>Matière : ";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 22, $this->source); })()), "matiere", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22), "html", null, true);
        echo "</p>
                        <p>Durée : ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 23, $this->source); })()), "duree", [], "any", false, false, false, 23), "html", null, true);
        echo " heures</p>
                        <p>Temps Restant : <b>01h : 55min</b></p>
                    </div>
                </div>
                <div class=\"col-xl-12\">
                    <!-- Course item START -->
                    <div class=\"card border\">
                        <div class=\"card-body\">
                            
                            ";
        // line 32
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 32, $this->source); })()), "isGeneratedRandomQuestions", [], "any", false, false, false, 32)) {
            // line 33
            echo "                                ";
            echo twig_include($this->env, $context, "front/evaluation/_epreuve_unique.html.twig", ["epreuve" => (isset($context["epreuve"]) || array_key_exists("epreuve", $context) ? $context["epreuve"] : (function () { throw new RuntimeError('Variable "epreuve" does not exist.', 33, $this->source); })())]);
            echo "
                            ";
        } else {
            // line 35
            echo "                                ";
            echo twig_include($this->env, $context, "front/evaluation/_epreuve_random.html.twig", ["epreuve" => (isset($context["epreuve"]) || array_key_exists("epreuve", $context) ? $context["epreuve"] : (function () { throw new RuntimeError('Variable "epreuve" does not exist.', 35, $this->source); })())]);
            echo "
                            ";
        }
        // line 37
        echo "
                        </div>
                        
                    </div>
                    <!-- Course item END -->

                </div>
                <!-- Main content END -->

            </div> <!-- Row END -->
        </div>\t
    </section>
    <!-- =======================
    Page content END -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/evaluation/epreuve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 37,  156 => 35,  150 => 33,  148 => 32,  136 => 23,  132 => 22,  127 => 20,  123 => 19,  113 => 11,  103 => 10,  92 => 7,  82 => 6,  63 => 4,  52 => 2,  50 => 1,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{% set dontShowAnnonces = true %}
{% extends \"front/base.html.twig\" %}

{% block title %} - Test de connaissance{% endblock %}

{% block mainBarnner %}

{% endblock %}

{% block mainContent %}

     <!-- =======================
    Page content START -->
    <section class=\"pt-0\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Main content START -->
                <div class=\"col-12 alert alert-success\">
                    <h3>{{ evaluation.titre }}</h3>
                    <p>{{ evaluation.description|raw }}</p>
                    <div class=\"d-flex\">
                        <p>Matière : {{ evaluation.matiere.name }}</p>
                        <p>Durée : {{ evaluation.duree }} heures</p>
                        <p>Temps Restant : <b>01h : 55min</b></p>
                    </div>
                </div>
                <div class=\"col-xl-12\">
                    <!-- Course item START -->
                    <div class=\"card border\">
                        <div class=\"card-body\">
                            
                            {% if not evaluation.isGeneratedRandomQuestions %}
                                {{ include('front/evaluation/_epreuve_unique.html.twig', {'epreuve': epreuve}) }}
                            {% else %}
                                {{ include('front/evaluation/_epreuve_random.html.twig', {'epreuve': epreuve}) }}
                            {% endif %}

                        </div>
                        
                    </div>
                    <!-- Course item END -->

                </div>
                <!-- Main content END -->

            </div> <!-- Row END -->
        </div>\t
    </section>
    <!-- =======================
    Page content END -->

{% endblock %}", "front/evaluation/epreuve.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\evaluation\\epreuve.html.twig");
    }
}
