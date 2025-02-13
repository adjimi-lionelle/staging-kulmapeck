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

/* admin/formation/index.html.twig */
class __TwigTemplate_48106af981c1f180c0e828b58f5aac3b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/formation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/formation/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/formation/index.html.twig", 1);
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

        echo "Exams";
        
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
        echo "\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_formation_new");
        echo "\" class=\"btn btn-sm btn-primary mb-0\">Add new formation</a>
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
        echo "    <!-- Card START -->
\t<div class=\"card bg-transparent border\">
        <!-- Card body START -->
\t\t<div class=\"card-body\">
\t\t\t<!-- Course table START -->
\t\t\t<div class=\"table-responsive border-0 rounded-3\">

                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>Intitulé</th>
                            <th>Durée</th>
                            <th>Niveau de difficulté</th>
                            <th>Gratuite</th>
                            <th>Date de création</th>
                            <th>Publié</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) || array_key_exists("formations", $context) ? $context["formations"] : (function () { throw new RuntimeError('Variable "formations" does not exist.', 30, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 31
            echo "                        <tr>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "name", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "duree", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
                            <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "niveauDifficulte", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                            <td>";
            // line 35
            echo ((twig_get_attribute($this->env, $this->source, $context["formation"], "isFree", [], "any", false, false, false, 35)) ? ("Yes") : ("No"));
            echo "</td>
                            <td>";
            // line 36
            ((twig_get_attribute($this->env, $this->source, $context["formation"], "createdAt", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["formation"], "createdAt", [], "any", false, false, false, 36), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
            echo "</td>
                            <td>";
            // line 37
            echo ((twig_get_attribute($this->env, $this->source, $context["formation"], "isPublished", [], "any", false, false, false, 37)) ? ("Yes") : ("No"));
            echo "</td>
                            <td>
                                <a class=\"btn btn-xs btn-primary\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_formation_show", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">détails</a>
                                <a class=\"btn btn-xs btn-warning\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_formation_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["formation"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\">éditer</a>
                            </td>
                        </tr>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "                        <tr>
                            <td colspan=\"10\">no records found</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                    </tbody>
                </table>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/formation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 48,  180 => 44,  171 => 40,  167 => 39,  162 => 37,  158 => 36,  154 => 35,  150 => 34,  146 => 33,  142 => 32,  139 => 31,  134 => 30,  112 => 10,  102 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block pageTitle %}Exams{% endblock %}

{% block actionBtn %}
\t<a href=\"{{ path('app_admin_formation_new') }}\" class=\"btn btn-sm btn-primary mb-0\">Add new formation</a>
{% endblock %}

{% block mainContent %}
    <!-- Card START -->
\t<div class=\"card bg-transparent border\">
        <!-- Card body START -->
\t\t<div class=\"card-body\">
\t\t\t<!-- Course table START -->
\t\t\t<div class=\"table-responsive border-0 rounded-3\">

                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>Intitulé</th>
                            <th>Durée</th>
                            <th>Niveau de difficulté</th>
                            <th>Gratuite</th>
                            <th>Date de création</th>
                            <th>Publié</th>
                            <th>actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    {% for formation in formations %}
                        <tr>
                            <td>{{ formation.name }}</td>
                            <td>{{ formation.duree }}</td>
                            <td>{{ formation.niveauDifficulte }}</td>
                            <td>{{ formation.isFree ? 'Yes' : 'No' }}</td>
                            <td>{{ formation.createdAt ? formation.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                            <td>{{ formation.isPublished ? 'Yes' : 'No' }}</td>
                            <td>
                                <a class=\"btn btn-xs btn-primary\" href=\"{{ path('app_admin_formation_show', {'id': formation.id}) }}\">détails</a>
                                <a class=\"btn btn-xs btn-warning\" href=\"{{ path('app_admin_formation_edit', {'id': formation.id}) }}\">éditer</a>
                            </td>
                        </tr>
                    {% else %}
                        <tr>
                            <td colspan=\"10\">no records found</td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{% endblock %}
", "admin/formation/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\formation\\index.html.twig");
    }
}
