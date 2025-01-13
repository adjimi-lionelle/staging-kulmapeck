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

/* admin/evaluation/index.html.twig */
class __TwigTemplate_1104c583e16edf9ad7b9a95548d8f2d1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageTitle' => [$this, 'block_pageTitle'],
            'actionBtn' => [$this, 'block_actionBtn'],
            'script' => [$this, 'block_script'],
            'mainContent' => [$this, 'block_mainContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/evaluation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/evaluation/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/evaluation/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "Evaluations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_actionBtn($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actionBtn"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actionBtn"));

        // line 6
        echo "\t<a class=\"btn btn-primary-soft\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_evaluation_new");
        echo "\">Create new</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 10
        echo "    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_mainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        // line 14
        echo "
    <div class=\"table-responsive border-0 rounded-3\">
        <!-- Table START -->
        <table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Début</th>
                    <th>Fin</th>
                    <th>Duree</th>
                    <th>Type de questionnaire</th>
                    <th>Nombre de questions</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evaluations"]) || array_key_exists("evaluations", $context) ? $context["evaluations"] : (function () { throw new RuntimeError('Variable "evaluations" does not exist.', 31, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
            // line 32
            echo "                <tr class='";
            echo ((twig_get_attribute($this->env, $this->source, $context["evaluation"], "isPassed", [], "any", false, false, false, 32)) ? ("bg-danger") : (""));
            echo "'>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["evaluation"], "titre", [], "any", false, false, false, 33)), "truncate", [45, "..."], "method", false, false, false, 33), "html", null, true);
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["evaluation"], "description", [], "any", false, false, false, 34)), "truncate", [50, "..."], "method", false, false, false, 34), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            ((twig_get_attribute($this->env, $this->source, $context["evaluation"], "startAt", [], "any", false, false, false, 35)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evaluation"], "startAt", [], "any", false, false, false, 35), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                    <td>";
            // line 36
            ((twig_get_attribute($this->env, $this->source, $context["evaluation"], "endAt", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evaluation"], "endAt", [], "any", false, false, false, 36), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evaluation"], "duree", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                    <td>";
            // line 38
            echo ((twig_get_attribute($this->env, $this->source, $context["evaluation"], "isGeneratedRandomQuestions", [], "any", false, false, false, 38)) ? ("Aléatoire") : ("Epreuve Unique"));
            echo "</td>
                    <td>
                        ";
            // line 40
            if ( !twig_get_attribute($this->env, $this->source, $context["evaluation"], "isGeneratedRandomQuestions", [], "any", false, false, false, 40)) {
                // line 41
                echo "                            ";
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evaluation"], "evaluationQuestions", [], "any", false, false, false, 41)), "html", null, true);
                echo "
                            <a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_admin_evaluation_question_index", ["slug" => twig_get_attribute($this->env, $this->source, $context["evaluation"], "slug", [], "any", false, false, false, 42)]), "html", null, true);
                echo "\" class=\"\">Questions</a>
                        ";
            } else {
                // line 44
                echo "                            <span>Aléatoire</span>
                        ";
            }
            // line 46
            echo "                    </td>
                    <td>
                        <a class=\"btn btn-sm btn-primary\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_evaluation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["evaluation"], "id", [], "any", false, false, false, 48)]), "html", null, true);
            echo "\">Voir</a>
                        ";
            // line 49
            if ( !twig_get_attribute($this->env, $this->source, $context["evaluation"], "isPassed", [], "any", false, false, false, 49)) {
                // line 50
                echo "                            <a class=\"btn btn-sm btn-primary\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_evaluation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["evaluation"], "id", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\">Modifier</a>
                        ";
            }
            // line 52
            echo "                        
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 56
            echo "                <tr>
                    <td colspan=\"8\">Liste vide</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evaluation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "            </tbody>
        </table>
    </div>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/evaluation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 60,  228 => 56,  220 => 52,  214 => 50,  212 => 49,  208 => 48,  204 => 46,  200 => 44,  195 => 42,  190 => 41,  188 => 40,  183 => 38,  179 => 37,  175 => 36,  171 => 35,  167 => 34,  163 => 33,  158 => 32,  153 => 31,  134 => 14,  124 => 13,  113 => 10,  103 => 9,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block pageTitle %}Evaluations{% endblock %}

{% block actionBtn %}
\t<a class=\"btn btn-primary-soft\" href=\"{{ path('app_admin_evaluation_new') }}\">Create new</a>
{% endblock %}

{% block script %}
    
{% endblock %}

{% block mainContent %}

    <div class=\"table-responsive border-0 rounded-3\">
        <!-- Table START -->
        <table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Début</th>
                    <th>Fin</th>
                    <th>Duree</th>
                    <th>Type de questionnaire</th>
                    <th>Nombre de questions</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
            {% for evaluation in evaluations %}
                <tr class='{{ evaluation.isPassed ? \"bg-danger\" : \"\" }}'>
                    <td>{{ evaluation.titre|u.truncate(45, '...') }}</td>
                    <td>{{ evaluation.description|u.truncate(50, '...') }}</td>
                    <td>{{ evaluation.startAt ? evaluation.startAt|date('Y-m-d H:i:s') : '' }}</td>
                    <td>{{ evaluation.endAt ? evaluation.endAt|date('Y-m-d H:i:s') : '' }}</td>
                    <td>{{ evaluation.duree }}</td>
                    <td>{{ evaluation.isGeneratedRandomQuestions ? 'Aléatoire' : 'Epreuve Unique' }}</td>
                    <td>
                        {% if not evaluation.isGeneratedRandomQuestions %}
                            {{ evaluation.evaluationQuestions|length }}
                            <a href=\"{{ url('app_admin_evaluation_question_index', {'slug': evaluation.slug}) }}\" class=\"\">Questions</a>
                        {% else %}
                            <span>Aléatoire</span>
                        {% endif %}
                    </td>
                    <td>
                        <a class=\"btn btn-sm btn-primary\" href=\"{{ path('app_admin_evaluation_show', {'id': evaluation.id}) }}\">Voir</a>
                        {% if not evaluation.isPassed %}
                            <a class=\"btn btn-sm btn-primary\" href=\"{{ path('app_admin_evaluation_edit', {'id': evaluation.id}) }}\">Modifier</a>
                        {% endif %}
                        
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"8\">Liste vide</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
    
{% endblock %}
", "admin/evaluation/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\evaluation\\index.html.twig");
    }
}
