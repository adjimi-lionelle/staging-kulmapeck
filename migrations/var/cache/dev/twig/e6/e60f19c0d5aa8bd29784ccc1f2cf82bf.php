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

/* admin/exam/index.html.twig */
class __TwigTemplate_d5583cc1401d9e1da3ecff3053bc2ac8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageTitle' => [$this, 'block_pageTitle'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/exam/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/exam/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/exam/index.html.twig", 1);
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
    public function block_mainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        // line 6
        echo "    <!-- Card START -->
\t<div class=\"card bg-transparent border\">
        <!-- Card body START -->
\t\t<div class=\"card-body\">
\t\t\t<!-- Course table START -->
\t\t\t<div class=\"table-responsive border-0 rounded-3\">
\t\t\t\t<!-- Table START -->
\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Exam title</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Added By</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Added Date</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Duration</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Language</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Category</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t
\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exams"]) || array_key_exists("exams", $context) ? $context["exams"] : (function () { throw new RuntimeError('Variable "exams" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["exam"]) {
            // line 30
            echo "\t\t\t\t\t\t\t<tr class=\"text-center\">
\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center position-relative\">
\t\t\t\t\t\t\t\t\t\t<!-- Image -->
\t\t\t\t\t\t\t\t\t\t<div class=\"w-60px\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/exams/files/" . twig_get_attribute($this->env, $this->source, $context["exam"], "imageFile", [], "any", false, false, false, 36))), "html", null, true);
            echo "\" class=\"rounded\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h6 class=\"table-responsive-title mb-0 ms-2\">\t
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_cours_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["exam"], "reference", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\" class=\"stretched-link\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["exam"], "title", [], "any", false, false, false, 40)), "truncate", [40, "..."], "method", false, false, false, 40), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-3\">
\t\t\t\t\t\t\t\t\t\t<!-- Avatar -->
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-xs flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["exam"], "user", [], "any", false, false, false, 50), "personne", [], "any", false, false, false, 50), "avatarPath", [], "any", false, false, false, 50)), "html", null, true);
            echo "\" alt=\"avatar\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0 fw-light\">";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["exam"], "user", [], "any", false, false, false, 54), "personne", [], "any", false, false, false, 54), "nomComplet", [], "any", false, false, false, 54)), "truncate", [15, "..."], "method", false, false, false, 54), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>";
            // line 60
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exam"], "publishedAt", [], "any", false, false, false, 60), "d/m/Y"), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td> <span class=\"badge text-bg-primary\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exam"], "duration", [], "any", false, false, false, 63), "html", null, true);
            echo "</span> </td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exam"], "language", [], "any", false, false, false, 66), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["exam"], "category", [], "any", false, false, false, 69), "name", [], "any", false, false, false, 69), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 73
            if (twig_get_attribute($this->env, $this->source, $context["exam"], "isPublished", [], "any", false, false, false, 73)) {
                // line 74
                echo "                                        <a class=\"btn btn-round btn-primary-soft btn-sm\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"Preview\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_exam_show", ["reference" => twig_get_attribute($this->env, $this->source, $context["exam"], "reference", [], "any", false, false, false, 74)]), "html", null, true);
                echo "\"><i class=\"fas fa-eye\"></i></a>
                                        ";
                // line 75
                if ( !twig_get_attribute($this->env, $this->source, $context["exam"], "isValidated", [], "any", false, false, false, 75)) {
                    // line 76
                    echo "                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_admin_exam_approve", ["reference" => twig_get_attribute($this->env, $this->source, $context["exam"], "reference", [], "any", false, false, false, 76), "_token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("validated" . twig_get_attribute($this->env, $this->source, $context["exam"], "id", [], "any", false, false, false, 76)))]), "html", null, true);
                    echo "\" onclick=\"return confirm('Are you sure you want to approve this exam?')\" data-bs-toggle=\"tooltip\" title=\"Approve\" class=\"btn btn-sm btn-round btn-success-soft\"><i class=\"fas fa-check-circle\"></i></a>
                                        ";
                }
                // line 78
                echo "\t\t\t\t\t\t\t\t\t    <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_admin_exam_remove", ["reference" => twig_get_attribute($this->env, $this->source, $context["exam"], "id", [], "any", false, false, false, 78), "_token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["exam"], "reference", [], "any", false, false, false, 78)))]), "html", null, true);
                echo "\" onclick=\"return confirm('Are you sure you want to delete this exam?')\" data-bs-toggle=\"tooltip\" title=\"Delete\" class=\"btn btn-sm btn-round btn-danger-soft\"><i class=\"fas fa-trash\"></i></a>
                                    ";
            } else {
                // line 80
                echo "                                        <span class=\"badge bg-danger\">Waiting</span>
                                    ";
            }
            // line 82
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 85
            echo "\t\t\t\t\t\t\t<tr><td colspan=\"7\">No data found</td></tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exam'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "\t\t\t\t\t</tbody>
\t\t\t\t\t<!-- Table body END -->
\t\t\t\t</table>
\t\t\t\t<!-- Table END -->
\t\t\t</div>
\t\t\t<!-- Course table END -->
\t\t</div>
\t\t<!-- Card body END -->
        <div class=\"card-footer bg-transparent pt-0\">
\t\t\t<!-- Pagination START -->
\t\t\t<div class=\"d-sm-flex justify-content-sm-between align-items-sm-center\">
\t\t\t\t<p class=\"mb-0 text-center text-sm-start\"></p>
\t\t\t\t";
        // line 99
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["exams"]) || array_key_exists("exams", $context) ? $context["exams"] : (function () { throw new RuntimeError('Variable "exams" does not exist.', 99, $this->source); })()));
        echo "
\t\t\t</div>
\t\t\t<!-- Pagination END -->
\t\t</div>
\t\t<!-- Card footer END -->
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/exam/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 99,  228 => 87,  221 => 85,  214 => 82,  210 => 80,  204 => 78,  198 => 76,  196 => 75,  191 => 74,  189 => 73,  182 => 69,  176 => 66,  170 => 63,  164 => 60,  155 => 54,  148 => 50,  133 => 40,  126 => 36,  118 => 30,  113 => 29,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block pageTitle %}Exams{% endblock %}

{% block mainContent %}
    <!-- Card START -->
\t<div class=\"card bg-transparent border\">
        <!-- Card body START -->
\t\t<div class=\"card-body\">
\t\t\t<!-- Course table START -->
\t\t\t<div class=\"table-responsive border-0 rounded-3\">
\t\t\t\t<!-- Table START -->
\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Exam title</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Added By</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Added Date</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Duration</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Language</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Category</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t
\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for exam in exams %}
\t\t\t\t\t\t\t<tr class=\"text-center\">
\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center position-relative\">
\t\t\t\t\t\t\t\t\t\t<!-- Image -->
\t\t\t\t\t\t\t\t\t\t<div class=\"w-60px\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/media/exams/files/' ~ exam.imageFile) }}\" class=\"rounded\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h6 class=\"table-responsive-title mb-0 ms-2\">\t
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_admin_cours_show', {slug: exam.reference}) }}\" class=\"stretched-link\">{{ exam.title|u.truncate(40, '...') }}</a>
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-3\">
\t\t\t\t\t\t\t\t\t\t<!-- Avatar -->
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-xs flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"{{ asset(exam.user.personne.avatarPath) }}\" alt=\"avatar\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0 fw-light\">{{ exam.user.personne.nomComplet|u.truncate(15, '...') }}</h6>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>{{ exam.publishedAt|date('d/m/Y') }}</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td> <span class=\"badge text-bg-primary\">{{ exam.duration }}</span> </td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>{{ exam.language}}</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>{{ exam.category.name }}</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{% if exam.isPublished %}
                                        <a class=\"btn btn-round btn-primary-soft btn-sm\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"Preview\" href=\"{{ url(\"app_front_exam_show\", {reference: exam.reference}) }}\"><i class=\"fas fa-eye\"></i></a>
                                        {% if not exam.isValidated %}
                                            <a href=\"{{ url(\"app_admin_exam_approve\", {reference: exam.reference, _token: csrf_token('validated' ~ exam.id)}) }}\" onclick=\"return confirm('Are you sure you want to approve this exam?')\" data-bs-toggle=\"tooltip\" title=\"Approve\" class=\"btn btn-sm btn-round btn-success-soft\"><i class=\"fas fa-check-circle\"></i></a>
                                        {% endif %}
\t\t\t\t\t\t\t\t\t    <a href=\"{{ url(\"app_admin_exam_remove\", {reference: exam.id, _token: csrf_token('delete' ~ exam.reference)}) }}\" onclick=\"return confirm('Are you sure you want to delete this exam?')\" data-bs-toggle=\"tooltip\" title=\"Delete\" class=\"btn btn-sm btn-round btn-danger-soft\"><i class=\"fas fa-trash\"></i></a>
                                    {% else %}
                                        <span class=\"badge bg-danger\">Waiting</span>
                                    {% endif %}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<tr><td colspan=\"7\">No data found</td></tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t\t<!-- Table body END -->
\t\t\t\t</table>
\t\t\t\t<!-- Table END -->
\t\t\t</div>
\t\t\t<!-- Course table END -->
\t\t</div>
\t\t<!-- Card body END -->
        <div class=\"card-footer bg-transparent pt-0\">
\t\t\t<!-- Pagination START -->
\t\t\t<div class=\"d-sm-flex justify-content-sm-between align-items-sm-center\">
\t\t\t\t<p class=\"mb-0 text-center text-sm-start\"></p>
\t\t\t\t{{ knp_pagination_render(exams) }}
\t\t\t</div>
\t\t\t<!-- Pagination END -->
\t\t</div>
\t\t<!-- Card footer END -->
    </div>
{% endblock %}", "admin/exam/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\exam\\index.html.twig");
    }
}
