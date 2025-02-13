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

/* front/evaluation/resultat.html.twig */
class __TwigTemplate_0ebce899df4ff586c1a21ccefc309e9d extends Template
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
        // line 1
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/evaluation/resultat.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/evaluation/resultat.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/evaluation/resultat.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

    // line 5
    public function block_mainBarnner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainBarnner"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainBarnner"));

        // line 6
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_mainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        // line 10
        echo "
    <section class=\"pt-0\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", ["infoEvaluation"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 16
            echo "                        <div class=\"col-12\">
                            <div class=\"alert alert-info text-center\">
                                ";
            // line 18
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                </div>
                <div class=\"col-12 alert alert-success\">
                    <div class=\"d-flex\">
                        <div style=\"width: 100%\">
                            <h2>Correction</h2>
                            <h3>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 27, $this->source); })()), "titre", [], "any", false, false, false, 27), "html", null, true);
        echo "</h3>
                            <p>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 28, $this->source); })()), "description", [], "any", false, false, false, 28), "html", null, true);
        echo "</p>
                            <div class=\"d-flex\">
                                <p>Matière : ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 30, $this->source); })()), "matiere", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
        echo "</p>
                                <p>Durée : ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 31, $this->source); })()), "duree", [], "any", false, false, false, 31), "html", null, true);
        echo " heures</p>
                                <p>Temps Restant : <b>01h : 55min</b></p>
                            </div>
                        </div>
                        <div>
                            <div class=\"bg-danger text-white\" style=\"width: 150px;height:150px;border-radius:50%;text-align:center;padding-top:30px;font-size:2em\">
                                <span>";
        // line 37
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["noteObtenue"]) || array_key_exists("noteObtenue", $context) ? $context["noteObtenue"] : (function () { throw new RuntimeError('Variable "noteObtenue" does not exist.', 37, $this->source); })()), "2", ","), "html", null, true);
        echo "</span>
                                <hr style=\"width:70%;margin:auto\">
                                <span>20</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-12\">
                    <!-- Course item START -->
                    <div class=\"card border\">
                        <div class=\"card-body\">
                            ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultats"]) || array_key_exists("resultats", $context) ? $context["resultats"] : (function () { throw new RuntimeError('Variable "resultats" does not exist.', 48, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 49
            echo "                                <div class=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "isCorrect", [], "any", false, false, false, 49)) ? ("border-success") : ("bg-danger text-white"));
            echo " p-2 mb-2\">
                                    <div class=\"d-flex\">
                                        <h5 style=\"margin-right: 10px\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 51), "html", null, true);
            echo " - </h5>
                                        <div>";
            // line 52
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "quiz", [], "any", false, false, false, 52), "question", [], "any", false, false, false, 52);
            echo "</div>
                                    </div>
                                    <ul>
                                        <li class=\"d-flex\">
                                            <div class=\"m-2\">
                                                ";
            // line 57
            $context["value"] = 1;
            // line 58
            echo "                                                ";
            if (twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 58, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "quiz", [], "any", false, false, false, 58), "propositionJuste", [], "any", false, false, false, 58))) {
                // line 59
                echo "                                                    <span class=\"fas fa-check text-success\"></span>
                                                ";
            } else {
                // line 61
                echo "                                                    ";
                if (twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 61, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["item"], "reponses", [], "any", false, false, false, 61))) {
                    // line 62
                    echo "                                                        <span class=\"fas fa-times text-red\"></span>
                                                    ";
                }
                // line 64
                echo "                                                ";
            }
            // line 65
            echo "                                                
                                                <input ";
            // line 66
            echo ((twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 66, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["item"], "reponses", [], "any", false, false, false, 66))) ? ("checked") : (""));
            echo " type=\"";
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "quiz", [], "any", false, false, false, 66), "propositionJuste", [], "any", false, false, false, 66)) > 1)) ? ("checkbox") : ("radio"));
            echo "\" disabled=\"true\">
                                            </div>
                                            <div class=\"m-2\">";
            // line 68
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "quiz", [], "any", false, false, false, 68), "proposition1", [], "any", false, false, false, 68);
            echo "</div>
                                        </li>
                                        <li class=\"d-flex\">
                                            <div class=\"m-2\">
                                                ";
            // line 72
            $context["value"] = 2;
            // line 73
            echo "                                                ";
            if (twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 73, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "quiz", [], "any", false, false, false, 73), "propositionJuste", [], "any", false, false, false, 73))) {
                // line 74
                echo "                                                    <span class=\"fas fa-check text-success\"></span>
                                                ";
            } else {
                // line 76
                echo "                                                    ";
                if (twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 76, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["item"], "reponses", [], "any", false, false, false, 76))) {
                    // line 77
                    echo "                                                        <span class=\"fas fa-times text-red\"></span>
                                                    ";
                }
                // line 79
                echo "                                                ";
            }
            // line 80
            echo "                                                <input ";
            echo ((twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 80, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["item"], "reponses", [], "any", false, false, false, 80))) ? ("checked") : (""));
            echo " type=\"";
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "quiz", [], "any", false, false, false, 80), "propositionJuste", [], "any", false, false, false, 80)) > 1)) ? ("checkbox") : ("radio"));
            echo "\" disabled=\"true\">
                                            </div>
                                            <div class=\"m-2\">";
            // line 82
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "quiz", [], "any", false, false, false, 82), "proposition2", [], "any", false, false, false, 82);
            echo "</div>
                                        </li>
                                        <li class=\"d-flex\">
                                            <div class=\"m-2\">
                                                ";
            // line 86
            $context["value"] = 3;
            // line 87
            echo "                                                ";
            if (twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 87, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "quiz", [], "any", false, false, false, 87), "propositionJuste", [], "any", false, false, false, 87))) {
                // line 88
                echo "                                                    <span class=\"fas fa-check text-success\"></span>
                                                ";
            } else {
                // line 90
                echo "                                                    ";
                if (twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 90, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["item"], "reponses", [], "any", false, false, false, 90))) {
                    // line 91
                    echo "                                                        <span class=\"fas fa-times text-red\"></span>
                                                    ";
                }
                // line 93
                echo "                                                ";
            }
            // line 94
            echo "                                                <input ";
            echo ((twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 94, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["item"], "reponses", [], "any", false, false, false, 94))) ? ("checked") : (""));
            echo " type=\"";
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "quiz", [], "any", false, false, false, 94), "propositionJuste", [], "any", false, false, false, 94)) > 1)) ? ("checkbox") : ("radio"));
            echo "\" disabled=\"true\">
                                            </div>
                                            <div class=\"m-2\">";
            // line 96
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "quiz", [], "any", false, false, false, 96), "proposition3", [], "any", false, false, false, 96);
            echo "</div>
                                        </li>
                                        <li class=\"d-flex\">
                                            <div class=\"m-2\">
                                                ";
            // line 100
            $context["value"] = 4;
            // line 101
            echo "                                                ";
            if (twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 101, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "quiz", [], "any", false, false, false, 101), "propositionJuste", [], "any", false, false, false, 101))) {
                // line 102
                echo "                                                    <span class=\"fas fa-check text-success\"></span>
                                                ";
            } else {
                // line 104
                echo "                                                    ";
                if (twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 104, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["item"], "reponses", [], "any", false, false, false, 104))) {
                    // line 105
                    echo "                                                        <span class=\"fas fa-times text-red\"></span>
                                                    ";
                }
                // line 107
                echo "                                                ";
            }
            // line 108
            echo "                                                <input ";
            echo ((twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 108, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["item"], "reponses", [], "any", false, false, false, 108))) ? ("checked") : (""));
            echo " type=\"";
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "quiz", [], "any", false, false, false, 108), "propositionJuste", [], "any", false, false, false, 108)) > 1)) ? ("checkbox") : ("radio"));
            echo "\" disabled=\"true\">
                                            </div>
                                            <div class=\"m-2\">";
            // line 110
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "quiz", [], "any", false, false, false, 110), "proposition4", [], "any", false, false, false, 110);
            echo "</div>
                                        </li>
                                    </ul>
                                </div>
                            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 115
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/evaluation/resultat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  363 => 115,  344 => 110,  336 => 108,  333 => 107,  329 => 105,  326 => 104,  322 => 102,  319 => 101,  317 => 100,  310 => 96,  302 => 94,  299 => 93,  295 => 91,  292 => 90,  288 => 88,  285 => 87,  283 => 86,  276 => 82,  268 => 80,  265 => 79,  261 => 77,  258 => 76,  254 => 74,  251 => 73,  249 => 72,  242 => 68,  235 => 66,  232 => 65,  229 => 64,  225 => 62,  222 => 61,  218 => 59,  215 => 58,  213 => 57,  205 => 52,  201 => 51,  195 => 49,  178 => 48,  164 => 37,  155 => 31,  151 => 30,  146 => 28,  142 => 27,  135 => 22,  125 => 18,  121 => 16,  117 => 15,  110 => 10,  100 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"front/base.html.twig\" %}

{% block title %} - Test de connaissance{% endblock %}

{% block mainBarnner %}

{% endblock %}

{% block mainContent %}

    <section class=\"pt-0\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    {% for msg in app.flashes('infoEvaluation') %}
                        <div class=\"col-12\">
                            <div class=\"alert alert-info text-center\">
                                {{ msg }}
                            </div>
                        </div>
                    {% endfor %}
                </div>
                <div class=\"col-12 alert alert-success\">
                    <div class=\"d-flex\">
                        <div style=\"width: 100%\">
                            <h2>Correction</h2>
                            <h3>{{ evaluation.titre }}</h3>
                            <p>{{ evaluation.description }}</p>
                            <div class=\"d-flex\">
                                <p>Matière : {{ evaluation.matiere.name }}</p>
                                <p>Durée : {{ evaluation.duree }} heures</p>
                                <p>Temps Restant : <b>01h : 55min</b></p>
                            </div>
                        </div>
                        <div>
                            <div class=\"bg-danger text-white\" style=\"width: 150px;height:150px;border-radius:50%;text-align:center;padding-top:30px;font-size:2em\">
                                <span>{{ noteObtenue|number_format('2', ',') }}</span>
                                <hr style=\"width:70%;margin:auto\">
                                <span>20</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-12\">
                    <!-- Course item START -->
                    <div class=\"card border\">
                        <div class=\"card-body\">
                            {% for item in resultats %}
                                <div class=\"{{ item.isCorrect ? 'border-success' : 'bg-danger text-white' }} p-2 mb-2\">
                                    <div class=\"d-flex\">
                                        <h5 style=\"margin-right: 10px\">{{ loop.index }} - </h5>
                                        <div>{{ item.quiz.question|raw }}</div>
                                    </div>
                                    <ul>
                                        <li class=\"d-flex\">
                                            <div class=\"m-2\">
                                                {% set value = 1 %}
                                                {% if value in item.quiz.propositionJuste %}
                                                    <span class=\"fas fa-check text-success\"></span>
                                                {% else %}
                                                    {% if value in item.reponses %}
                                                        <span class=\"fas fa-times text-red\"></span>
                                                    {% endif %}
                                                {% endif %}
                                                
                                                <input {{ value in item.reponses ? 'checked' : '' }} type=\"{{ item.quiz.propositionJuste|length > 1 ? 'checkbox' : 'radio' }}\" disabled=\"true\">
                                            </div>
                                            <div class=\"m-2\">{{ item.quiz.proposition1|raw }}</div>
                                        </li>
                                        <li class=\"d-flex\">
                                            <div class=\"m-2\">
                                                {% set value = 2 %}
                                                {% if value in item.quiz.propositionJuste %}
                                                    <span class=\"fas fa-check text-success\"></span>
                                                {% else %}
                                                    {% if value in item.reponses %}
                                                        <span class=\"fas fa-times text-red\"></span>
                                                    {% endif %}
                                                {% endif %}
                                                <input {{ value in item.reponses ? 'checked' : '' }} type=\"{{ item.quiz.propositionJuste|length > 1 ? 'checkbox' : 'radio' }}\" disabled=\"true\">
                                            </div>
                                            <div class=\"m-2\">{{ item.quiz.proposition2|raw }}</div>
                                        </li>
                                        <li class=\"d-flex\">
                                            <div class=\"m-2\">
                                                {% set value = 3 %}
                                                {% if value in item.quiz.propositionJuste %}
                                                    <span class=\"fas fa-check text-success\"></span>
                                                {% else %}
                                                    {% if value in item.reponses %}
                                                        <span class=\"fas fa-times text-red\"></span>
                                                    {% endif %}
                                                {% endif %}
                                                <input {{ value in item.reponses ? 'checked' : '' }} type=\"{{ item.quiz.propositionJuste|length > 1 ? 'checkbox' : 'radio' }}\" disabled=\"true\">
                                            </div>
                                            <div class=\"m-2\">{{ item.quiz.proposition3|raw }}</div>
                                        </li>
                                        <li class=\"d-flex\">
                                            <div class=\"m-2\">
                                                {% set value = 4 %}
                                                {% if value in item.quiz.propositionJuste %}
                                                    <span class=\"fas fa-check text-success\"></span>
                                                {% else %}
                                                    {% if value in item.reponses %}
                                                        <span class=\"fas fa-times text-red\"></span>
                                                    {% endif %}
                                                {% endif %}
                                                <input {{ value in item.reponses ? 'checked' : '' }} type=\"{{ item.quiz.propositionJuste|length > 1 ? 'checkbox' : 'radio' }}\" disabled=\"true\">
                                            </div>
                                            <div class=\"m-2\">{{ item.quiz.proposition4|raw }}</div>
                                        </li>
                                    </ul>
                                </div>
                            {% endfor %}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{% endblock %}", "front/evaluation/resultat.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\evaluation\\resultat.html.twig");
    }
}
