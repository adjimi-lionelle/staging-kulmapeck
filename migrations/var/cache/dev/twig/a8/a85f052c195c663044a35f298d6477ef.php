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

/* student/evaluation/index.html.twig */
class __TwigTemplate_de8731ddad0f25406982918365375dd9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageContent' => [$this, 'block_pageContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "student/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/evaluation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/evaluation/index.html.twig"));

        $this->parent = $this->loadTemplate("student/base.html.twig", "student/evaluation/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        // line 4
        echo "
    
    <div class=\"card bg-transparent border rounded-3\">
\t\t<!-- Card body START -->
\t\t<div class=\"card-body\">
\t\t\t<!-- Course list table START -->
\t\t\t<div class=\"table-responsive border-0\">
\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Titre</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Matière</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Durée</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Date début</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Date fin</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Satut</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>

\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 27, $this->source); })()), "evaluations", [], "any", false, false, false, 27));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["evaluation"]) {
            // line 28
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evaluation"], "titre", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evaluation"], "matiere", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evaluation"], "duree", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evaluation"], "startAt", [], "any", false, false, false, 39), "d/m/Y  à H:i:s"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evaluation"], "endAt", [], "any", false, false, false, 40), "d/m/Y à H:i:s"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
                                    ";
            // line 42
            $context["status"] = "en attente...";
            // line 43
            echo "                                    ";
            $context["hasDone"] = false;
            // line 44
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 44, $this->source); })()), "evaluationResultats", [], "any", false, false, false, 44));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 45
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "evaluation", [], "any", false, false, false, 45) === $context["evaluation"])) {
                    // line 46
                    echo "                                            ";
                    $context["status"] = "déjà";
                    // line 47
                    echo "                                            ";
                    $context["hasDone"] = true;
                    // line 48
                    echo "                                        ";
                }
                // line 49
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                                    ";
            echo twig_escape_filter($this->env, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 50, $this->source); })()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td>
                                    ";
            // line 52
            if ( !(isset($context["hasDone"]) || array_key_exists("hasDone", $context) ? $context["hasDone"] : (function () { throw new RuntimeError('Variable "hasDone" does not exist.', 52, $this->source); })())) {
                // line 53
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_evaluation_begin", ["slug" => twig_get_attribute($this->env, $this->source, $context["evaluation"], "slug", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\" class=\"btn btn-success-soft btn-xs\">commencer</a>
                                    ";
            } else {
                // line 55
                echo "                                        <a class=\"btn btn-primary-soft btn-xs\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_evaluation_result", ["slug" => twig_get_attribute($this->env, $this->source, $context["evaluation"], "slug", [], "any", false, false, false, 55)]), "html", null, true);
                echo "\">resultat</a>
                                    ";
            }
            // line 57
            echo "                                </td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 61
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"4\">Liste vide</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evaluation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "\t\t\t\t\t</tbody>
\t\t\t\t\t<!-- Table body END -->
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<!-- Course list table END -->

\t\t\t<!-- Pagination START -->
\t\t\t<div class=\"d-sm-flex justify-content-sm-between pagination-container align-items-sm-center mt-4 mt-sm-3\">
\t\t\t\t
\t\t\t</div>
\t\t\t<!-- Pagination END -->
\t\t</div>
\t\t<!-- Card body START -->
\t</div>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "student/evaluation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 65,  185 => 61,  177 => 57,  171 => 55,  165 => 53,  163 => 52,  157 => 50,  151 => 49,  148 => 48,  145 => 47,  142 => 46,  139 => 45,  134 => 44,  131 => 43,  129 => 42,  124 => 40,  120 => 39,  114 => 36,  108 => 33,  102 => 30,  98 => 28,  93 => 27,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"student/base.html.twig\" %}

{% block pageContent %}

    
    <div class=\"card bg-transparent border rounded-3\">
\t\t<!-- Card body START -->
\t\t<div class=\"card-body\">
\t\t\t<!-- Course list table START -->
\t\t\t<div class=\"table-responsive border-0\">
\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Titre</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Matière</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Durée</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Date début</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Date fin</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Satut</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>

\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for evaluation in student.evaluations %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>{{ evaluation.titre }}</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>{{ evaluation.matiere.name }}</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>{{ evaluation.duree }}</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>{{ evaluation.startAt|date(\"d/m/Y  à H:i:s\") }}</td>
\t\t\t\t\t\t\t\t<td>{{ evaluation.endAt|date(\"d/m/Y à H:i:s\") }}</td>
\t\t\t\t\t\t\t\t<td>
                                    {% set status = 'en attente...' %}
                                    {% set hasDone = false %}
                                    {% for item in student.evaluationResultats %}
                                        {% if item.evaluation is same as evaluation %}
                                            {% set status = 'déjà' %}
                                            {% set hasDone = true %}
                                        {% endif %}
                                    {% endfor %}
                                    {{ status }}</td>
\t\t\t\t\t\t\t\t<td>
                                    {% if not hasDone %}
                                        <a href=\"{{ url('app_front_evaluation_begin', {'slug': evaluation.slug}) }}\" class=\"btn btn-success-soft btn-xs\">commencer</a>
                                    {% else %}
                                        <a class=\"btn btn-primary-soft btn-xs\" href=\"{{ url('app_front_evaluation_result', {'slug': evaluation.slug}) }}\">resultat</a>
                                    {% endif %}
                                </td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"4\">Liste vide</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t\t<!-- Table body END -->
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<!-- Course list table END -->

\t\t\t<!-- Pagination START -->
\t\t\t<div class=\"d-sm-flex justify-content-sm-between pagination-container align-items-sm-center mt-4 mt-sm-3\">
\t\t\t\t
\t\t\t</div>
\t\t\t<!-- Pagination END -->
\t\t</div>
\t\t<!-- Card body START -->
\t</div>


{% endblock %}
", "student/evaluation/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\student\\evaluation\\index.html.twig");
    }
}
