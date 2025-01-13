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

/* student/course/index.html.twig */
class __TwigTemplate_dda1c2a53534af2d05d568acf98a8b5b extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'subTitle' => [$this, 'block_subTitle'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/course/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/course/index.html.twig"));

        $this->parent = $this->loadTemplate("student/base.html.twig", "student/course/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_subTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subTitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subTitle"));

        echo " - COurses";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        // line 6
        echo "
    <div class=\"card bg-transparent border rounded-3\">
\t\t<!-- Card header START -->
\t\t<div class=\"card-header bg-transparent border-bottom\">
\t\t\t<h3 class=\"mb-0\">My Courses List</h3>
\t\t</div>
\t\t<!-- Card header END -->

\t\t<!-- Card body START -->
\t\t<div class=\"card-body\">

\t\t\t<!-- Search and select START -->
\t\t\t<div class=\"row g-3 align-items-center justify-content-between mb-4\">
\t\t\t\t<!-- Content -->
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<form name=\"search\"   action=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_student_courses");
        echo "\" class=\"rounded position-relative\">
\t\t\t\t\t\t<input name=\"search\" required class=\"form-control pe-5 bg-transparent\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t<button class=\"bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset\" type=\"submit\">
\t\t\t\t\t<i class=\"fas fa-search fs-6 \"></i>
\t\t\t\t</button>
\t\t\t\t\t</form>
\t\t\t\t</div>

\t\t\t\t<!-- Select option -->
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Search and select END -->

\t\t\t<!-- Course list table START -->
\t\t\t<div class=\"table-responsive border-0\">
\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Course Title</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Total Lectures</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Completed Lecture</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>

\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 51, $this->source); })()), "cours", [], "any", false, false, false, 51));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 52
            echo "\t\t\t\t\t\t\t";
            $context["leconTerminees"] = 0;
            // line 53
            echo "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 53, $this->source); })()), "lectures", [], "any", false, false, false, 53));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 54
                echo "\t\t\t\t\t\t\t\t";
                if (((twig_get_attribute($this->env, $this->source, $context["l"], "isFinished", [], "any", false, false, false, 54) &&  !(null === twig_get_attribute($this->env, $this->source, $context["l"], "lesson", [], "any", false, false, false, 54))) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["l"], "lesson", [], "any", false, false, false, 54), "chapitre", [], "any", false, false, false, 54), "cours", [], "any", false, false, false, 54) === $context["course"]))) {
                    // line 55
                    echo "\t\t\t\t\t\t\t\t\t";
                    $context["leconTerminees"] = ((isset($context["leconTerminees"]) || array_key_exists("leconTerminees", $context) ? $context["leconTerminees"] : (function () { throw new RuntimeError('Variable "leconTerminees" does not exist.', 55, $this->source); })()) + 1);
                    // line 56
                    echo "\t\t\t\t\t\t\t\t";
                }
                // line 57
                echo "\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t\t\t\t\t\t";
            $context["numberOfLessons"] = (((twig_get_attribute($this->env, $this->source, $context["course"], "numberOfLessons", [], "any", false, false, false, 58) > 0)) ? (twig_get_attribute($this->env, $this->source, $context["course"], "numberOfLessons", [], "any", false, false, false, 58)) : (1));
            // line 59
            echo "\t\t\t\t\t\t\t";
            $context["percent"] = (((isset($context["leconTerminees"]) || array_key_exists("leconTerminees", $context) ? $context["leconTerminees"] : (function () { throw new RuntimeError('Variable "leconTerminees" does not exist.', 59, $this->source); })()) * 100) / (isset($context["numberOfLessons"]) || array_key_exists("numberOfLessons", $context) ? $context["numberOfLessons"] : (function () { throw new RuntimeError('Variable "numberOfLessons" does not exist.', 59, $this->source); })()));
            // line 60
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<!-- Image -->
\t\t\t\t\t\t\t\t\t\t<div class=\"w-100px\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/courses/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["course"], "media", [], "any", false, false, false, 66), "imageFile", [], "any", false, false, false, 66))), "html", null, true);
            echo "\" class=\"rounded\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t\t<h6><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_course_start", ["slug" => twig_get_attribute($this->env, $this->source, $context["course"], "slug", [], "any", false, false, false, 70)], "http", false), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "intitule", [], "any", false, false, false, 70), "html", null, true);
            echo "</a></h6>
\t\t\t\t\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0 text-end\">";
            // line 73
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 73, $this->source); })()), 0), "html", null, true);
            echo "%</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-sm bg-primary bg-opacity-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary aos\" role=\"progressbar\" data-aos=\"slide-right\" data-aos-delay=\"200\" data-aos-duration=\"1000\" data-aos-easing=\"ease-in-out\" style=\"width: ";
            // line 75
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 75, $this->source); })()), 0), "html", null, true);
            echo "%\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 75, $this->source); })()), 0), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "numberOfLessons", [], "any", false, false, false, 84), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>";
            // line 87
            echo twig_escape_filter($this->env, (isset($context["leconTerminees"]) || array_key_exists("leconTerminees", $context) ? $context["leconTerminees"] : (function () { throw new RuntimeError('Variable "leconTerminees" does not exist.', 87, $this->source); })()), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 91
            if (((isset($context["leconTerminees"]) || array_key_exists("leconTerminees", $context) ? $context["leconTerminees"] : (function () { throw new RuntimeError('Variable "leconTerminees" does not exist.', 91, $this->source); })()) === twig_get_attribute($this->env, $this->source, $context["course"], "numberOfLessons", [], "any", false, false, false, 91))) {
                // line 92
                echo "\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-success me-1 mb-1 mb-x\"><i class=\"bi bi-check me-1\"></i>Complete</button>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-light me-1\"><i class=\"bi bi-arrow-repeat me-1\"></i>Restart</a>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 95
                echo "\t\t\t\t\t\t\t\t\t\t<a title=\"Continue\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_course_start", ["slug" => twig_get_attribute($this->env, $this->source, $context["course"], "slug", [], "any", false, false, false, 95)], "http", false), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0\"><i class=\"bi bi-play-circle me-1\"></i></a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 97
            echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            // line 98
            if (twig_get_attribute($this->env, $this->source, $context["course"], "isFree", [], "any", false, false, false, 98)) {
                // line 99
                echo "\t\t\t\t\t\t\t\t\t\t<a onclick=\"return confirm('Etes-vous sure de vouloir supprimer ce cours de votre liste de lecture')\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_course_start", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 99, $this->source); })()), "reference", [], "any", false, false, false, 99), "slug" => twig_get_attribute($this->env, $this->source, $context["course"], "slug", [], "any", false, false, false, 99)], "http", false), "html", null, true);
                echo "\" class=\"btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0\"><i class=\"bi bi-trash me-1\"></i></a>
\t\t\t\t\t\t\t\t\t";
            }
            // line 101
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 105
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"4\">No Courses found</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "\t\t\t\t\t</tbody>
\t\t\t\t\t<!-- Table body END -->
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<!-- Course list table END -->

\t\t\t<!-- Pagination START -->
\t\t\t<div class=\"d-sm-flex justify-content-sm-between pagination-container align-items-sm-center mt-4 mt-sm-3\">
\t\t\t\t";
        // line 117
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 117, $this->source); })()));
        echo "
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
        return "student/course/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 117,  268 => 109,  259 => 105,  251 => 101,  245 => 99,  243 => 98,  240 => 97,  234 => 95,  229 => 92,  227 => 91,  220 => 87,  214 => 84,  200 => 75,  195 => 73,  187 => 70,  180 => 66,  172 => 60,  169 => 59,  166 => 58,  160 => 57,  157 => 56,  154 => 55,  151 => 54,  146 => 53,  143 => 52,  138 => 51,  105 => 21,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"student/base.html.twig\" %}

{% block subTitle %} - COurses{% endblock %}

{% block pageContent %}

    <div class=\"card bg-transparent border rounded-3\">
\t\t<!-- Card header START -->
\t\t<div class=\"card-header bg-transparent border-bottom\">
\t\t\t<h3 class=\"mb-0\">My Courses List</h3>
\t\t</div>
\t\t<!-- Card header END -->

\t\t<!-- Card body START -->
\t\t<div class=\"card-body\">

\t\t\t<!-- Search and select START -->
\t\t\t<div class=\"row g-3 align-items-center justify-content-between mb-4\">
\t\t\t\t<!-- Content -->
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<form name=\"search\"   action=\"{{ url(\"app_student_courses\") }}\" class=\"rounded position-relative\">
\t\t\t\t\t\t<input name=\"search\" required class=\"form-control pe-5 bg-transparent\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t<button class=\"bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset\" type=\"submit\">
\t\t\t\t\t<i class=\"fas fa-search fs-6 \"></i>
\t\t\t\t</button>
\t\t\t\t\t</form>
\t\t\t\t</div>

\t\t\t\t<!-- Select option -->
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Search and select END -->

\t\t\t<!-- Course list table START -->
\t\t\t<div class=\"table-responsive border-0\">
\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Course Title</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Total Lectures</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Completed Lecture</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>

\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for course in student.cours %}
\t\t\t\t\t\t\t{% set leconTerminees = 0 %}
\t\t\t\t\t\t\t{% for l in student.lectures %}
\t\t\t\t\t\t\t\t{% if l.isFinished and l.lesson is not null and l.lesson.chapitre.cours is same as course %}
\t\t\t\t\t\t\t\t\t{% set leconTerminees = leconTerminees + 1 %}
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% set numberOfLessons = course.numberOfLessons > 0 ? course.numberOfLessons : 1 %}
\t\t\t\t\t\t\t{% set percent = (leconTerminees * 100 ) / numberOfLessons %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<!-- Image -->
\t\t\t\t\t\t\t\t\t\t<div class=\"w-100px\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('uploads/media/courses/' ~ course.media.imageFile)}}\" class=\"rounded\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t\t<h6><a href=\"{{ url(\"app_front_course_start\", {slug: course.slug}, \"http\", false) }}\">{{ course.intitule }}</a></h6>
\t\t\t\t\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0 text-end\">{{ percent|number_format(0) }}%</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-sm bg-primary bg-opacity-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary aos\" role=\"progressbar\" data-aos=\"slide-right\" data-aos-delay=\"200\" data-aos-duration=\"1000\" data-aos-easing=\"ease-in-out\" style=\"width: {{ percent|number_format(0) }}%\" aria-valuenow=\"{{ percent|number_format(0) }}\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>{{ course.numberOfLessons }}</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>{{ leconTerminees }}</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{% if leconTerminees is same as course.numberOfLessons %}
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-success me-1 mb-1 mb-x\"><i class=\"bi bi-check me-1\"></i>Complete</button>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-light me-1\"><i class=\"bi bi-arrow-repeat me-1\"></i>Restart</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<a title=\"Continue\" href=\"{{ url(\"app_front_course_start\", {slug: course.slug}, \"http\", false) }}\" class=\"btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0\"><i class=\"bi bi-play-circle me-1\"></i></a>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% if course.isFree %}
\t\t\t\t\t\t\t\t\t\t<a onclick=\"return confirm('Etes-vous sure de vouloir supprimer ce cours de votre liste de lecture')\" href=\"{{ url(\"app_front_course_start\", {id: student.reference, slug: course.slug}, \"http\", false) }}\" class=\"btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0\"><i class=\"bi bi-trash me-1\"></i></a>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"4\">No Courses found</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t\t<!-- Table body END -->
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<!-- Course list table END -->

\t\t\t<!-- Pagination START -->
\t\t\t<div class=\"d-sm-flex justify-content-sm-between pagination-container align-items-sm-center mt-4 mt-sm-3\">
\t\t\t\t{{ knp_pagination_render(courses) }}
\t\t\t</div>
\t\t\t<!-- Pagination END -->
\t\t</div>
\t\t<!-- Card body START -->
\t</div>

{% endblock %}", "student/course/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\student\\course\\index.html.twig");
    }
}
