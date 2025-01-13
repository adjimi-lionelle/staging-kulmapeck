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

/* student/home/index.html.twig */
class __TwigTemplate_ebac0b61f3d7a4b57632e85205a35089 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/home/index.html.twig"));

        $this->parent = $this->loadTemplate("student/base.html.twig", "student/home/index.html.twig", 1);
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

        echo " - Dashboard";
        
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
    <!-- Counter boxes START -->
\t\t\t\t<div class=\"row mb-4\">
\t\t\t\t\t<!-- Counter item -->
\t\t\t\t\t<div class=\"col-sm-6 col-lg-4 mb-3 mb-lg-0\">
\t\t\t\t\t\t<div class=\"d-flex justify-content-center align-items-center p-4 bg-orange bg-opacity-15 rounded-3\">
\t\t\t\t\t\t\t<span class=\"display-6 lh-1 text-orange mb-0\"><i class=\"fas fa-tv fa-fw\"></i></span>
\t\t\t\t\t\t\t<div class=\"ms-4\">
\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<h5 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 15, $this->source); })()), "cours", [], "any", false, false, false, 15)), "html", null, true);
        echo "\" data-purecounter-delay=\"200\">0</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"mb-0 h6 fw-light\">Total Courses</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Counter item -->
\t\t\t\t\t<div class=\"col-sm-6 col-lg-4 mb-3 mb-lg-0\">
\t\t\t\t\t\t<div class=\"d-flex justify-content-center align-items-center p-4 bg-purple bg-opacity-15 rounded-3\">
\t\t\t\t\t\t\t<span class=\"display-6 lh-1 text-purple mb-0\"><i class=\"fas fa-clipboard-check fa-fw\"></i></span>
\t\t\t\t\t\t\t<div class=\"ms-4\">
\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<h5 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 27, $this->source); })()), "lectures", [], "any", false, false, false, 27)), "html", null, true);
        echo "\"\tdata-purecounter-delay=\"200\">0</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"mb-0 h6 fw-light\">Complete lessons</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Counter item -->
\t\t\t\t\t<div class=\"col-sm-6 col-lg-4 mb-3 mb-lg-0\">
\t\t\t\t\t\t<div class=\"d-flex justify-content-center align-items-center p-4 bg-success bg-opacity-10 rounded-3\">
\t\t\t\t\t\t\t<span class=\"display-6 lh-1 text-success mb-0\"><i class=\"fas fa-medal fa-fw\"></i></span>
\t\t\t\t\t\t\t<div class=\"ms-4\">
\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<h5 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"8\" data-purecounter-delay=\"300\">0</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"mb-0 h6 fw-light\">Achieved Certificates</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Counter boxes END -->

\t\t\t\t<div class=\"card bg-transparent border rounded-3\">
\t\t\t\t\t<!-- Card header START -->
\t\t\t\t\t<div class=\"card-header bg-transparent border-bottom\">
\t\t\t\t\t\t<h3 class=\"mb-0\">My Courses List</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Card header END -->

\t\t\t\t\t<!-- Card body START -->
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<!-- Search and select START -->
\t\t\t\t\t\t<div class=\"row g-3 align-items-center justify-content-between mb-4\">
\t\t\t\t\t\t\t<!-- Content -->
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<form class=\"rounded position-relative\" action=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_student_courses");
        echo "\">
\t\t\t\t\t\t\t\t\t<input name=\"search\" required class=\"form-control pe-5 bg-transparent\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t\t\t\t<button class=\"bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-search fs-6 \"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Select option -->
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Search and select END -->

\t\t\t\t\t\t<!-- Course list table START -->
\t\t\t\t\t\t<div class=\"table-responsive border-0\">
\t\t\t\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
\t\t\t\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Course Title</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Total Lessons</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Completed Lessons</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t\t<!-- Table body START -->
                                ";
        // line 90
        $context["break"] = false;
        // line 91
        echo "\t\t\t\t\t\t\t\t<tbody>
                                    ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 92, $this->source); })()), "cours", [], "any", false, false, false, 92));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 93
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context["leconTerminees"] = 0;
            // line 94
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 94, $this->source); })()), "lectures", [], "any", false, false, false, 94));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 95
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if (((twig_get_attribute($this->env, $this->source, $context["l"], "isFinished", [], "any", false, false, false, 95) &&  !(twig_get_attribute($this->env, $this->source, $context["l"], "lesson", [], "any", false, false, false, 95) === null)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["l"], "lesson", [], "any", false, false, false, 95), "chapitre", [], "any", false, false, false, 95), "cours", [], "any", false, false, false, 95) === $context["course"]))) {
                    // line 96
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context["leconTerminees"] = ((isset($context["leconTerminees"]) || array_key_exists("leconTerminees", $context) ? $context["leconTerminees"] : (function () { throw new RuntimeError('Variable "leconTerminees" does not exist.', 96, $this->source); })()) + 1);
                    // line 97
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 98
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context["numberOfLessons"] = (((twig_get_attribute($this->env, $this->source, $context["course"], "numberOfLessons", [], "any", false, false, false, 99) > 0)) ? (twig_get_attribute($this->env, $this->source, $context["course"], "numberOfLessons", [], "any", false, false, false, 99)) : (1));
            // line 100
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context["percent"] = (((isset($context["leconTerminees"]) || array_key_exists("leconTerminees", $context) ? $context["leconTerminees"] : (function () { throw new RuntimeError('Variable "leconTerminees" does not exist.', 100, $this->source); })()) * 100) / (isset($context["numberOfLessons"]) || array_key_exists("numberOfLessons", $context) ? $context["numberOfLessons"] : (function () { throw new RuntimeError('Variable "numberOfLessons" does not exist.', 100, $this->source); })()));
            // line 101
            echo "                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <div class=\"d-flex align-items-center\">
                                                    <!-- Image -->
                                                    <div class=\"w-100px\">
                                                        <img src=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/courses/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["course"], "media", [], "any", false, false, false, 107), "imageFile", [], "any", false, false, false, 107))), "html", null, true);
            echo "\" class=\"rounded\" alt=\"\">
                                                    </div>
                                                    <div class=\"mb-0 ms-2\">
                                                        <!-- Title -->
                                                        <h6><a href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_course_start", ["slug" => twig_get_attribute($this->env, $this->source, $context["course"], "slug", [], "any", false, false, false, 111)], "http", false), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "intitule", [], "any", false, false, false, 111), "html", null, true);
            echo "</a></h6>
                                                        <!-- Info -->
                                                        <div class=\"overflow-hidden\">
                                                            <h6 class=\"mb-0 text-end\">";
            // line 114
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 114, $this->source); })()), 0), "html", null, true);
            echo "%</h6>
                                                            <div class=\"progress progress-sm bg-primary bg-opacity-10\">
                                                                <div class=\"progress-bar bg-primary aos\" role=\"progressbar\" data-aos=\"slide-right\" data-aos-delay=\"200\" data-aos-duration=\"1000\" data-aos-easing=\"ease-in-out\" style=\"width: ";
            // line 116
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 116, $this->source); })()), 0), "html", null, true);
            echo "%\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 116, $this->source); })()), 0), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            <!-- Table data -->
                                            <td>";
            // line 125
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "numberOfLessons", [], "any", false, false, false, 125), "html", null, true);
            echo "</td>

                                            <!-- Table data -->
                                            <td>";
            // line 128
            echo twig_escape_filter($this->env, (isset($context["leconTerminees"]) || array_key_exists("leconTerminees", $context) ? $context["leconTerminees"] : (function () { throw new RuntimeError('Variable "leconTerminees" does not exist.', 128, $this->source); })()), "html", null, true);
            echo "</td>

                                            <!-- Table data -->
                                            <td>
                                                <a title=\"Continue\" href=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_course_start", ["slug" => twig_get_attribute($this->env, $this->source, $context["course"], "slug", [], "any", false, false, false, 132)], "http", false), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0\"><i class=\"bi bi-play-circle me-1\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 133
            if (twig_get_attribute($this->env, $this->source, $context["course"], "isFree", [], "any", false, false, false, 133)) {
                // line 134
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"return confirm('Etes-vous sure de vouloir supprimer ce cours de votre liste de lecture')\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_course_start", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 134, $this->source); })()), "reference", [], "any", false, false, false, 134), "slug" => twig_get_attribute($this->env, $this->source, $context["course"], "slug", [], "any", false, false, false, 134)], "http", false), "html", null, true);
                echo "\" class=\"btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0\"><i class=\"bi bi-trash me-1\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 136
            echo "                                            </td>
                                        </tr>
                                        
                                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 140
            echo "                                        <tr>
                                            <td colspan=\"4\">No Courses found</td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t<!-- Table body END -->
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Course list table END -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Card body START -->
\t\t\t\t</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "student/home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 144,  297 => 140,  289 => 136,  283 => 134,  281 => 133,  277 => 132,  270 => 128,  264 => 125,  250 => 116,  245 => 114,  237 => 111,  230 => 107,  222 => 101,  219 => 100,  216 => 99,  210 => 98,  207 => 97,  204 => 96,  201 => 95,  196 => 94,  193 => 93,  188 => 92,  185 => 91,  183 => 90,  151 => 61,  114 => 27,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"student/base.html.twig\" %}

{% block subTitle %} - Dashboard{% endblock %}

{% block pageContent %}

    <!-- Counter boxes START -->
\t\t\t\t<div class=\"row mb-4\">
\t\t\t\t\t<!-- Counter item -->
\t\t\t\t\t<div class=\"col-sm-6 col-lg-4 mb-3 mb-lg-0\">
\t\t\t\t\t\t<div class=\"d-flex justify-content-center align-items-center p-4 bg-orange bg-opacity-15 rounded-3\">
\t\t\t\t\t\t\t<span class=\"display-6 lh-1 text-orange mb-0\"><i class=\"fas fa-tv fa-fw\"></i></span>
\t\t\t\t\t\t\t<div class=\"ms-4\">
\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<h5 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"{{ student.cours|length }}\" data-purecounter-delay=\"200\">0</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"mb-0 h6 fw-light\">Total Courses</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Counter item -->
\t\t\t\t\t<div class=\"col-sm-6 col-lg-4 mb-3 mb-lg-0\">
\t\t\t\t\t\t<div class=\"d-flex justify-content-center align-items-center p-4 bg-purple bg-opacity-15 rounded-3\">
\t\t\t\t\t\t\t<span class=\"display-6 lh-1 text-purple mb-0\"><i class=\"fas fa-clipboard-check fa-fw\"></i></span>
\t\t\t\t\t\t\t<div class=\"ms-4\">
\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<h5 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"{{ student.lectures|length }}\"\tdata-purecounter-delay=\"200\">0</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"mb-0 h6 fw-light\">Complete lessons</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Counter item -->
\t\t\t\t\t<div class=\"col-sm-6 col-lg-4 mb-3 mb-lg-0\">
\t\t\t\t\t\t<div class=\"d-flex justify-content-center align-items-center p-4 bg-success bg-opacity-10 rounded-3\">
\t\t\t\t\t\t\t<span class=\"display-6 lh-1 text-success mb-0\"><i class=\"fas fa-medal fa-fw\"></i></span>
\t\t\t\t\t\t\t<div class=\"ms-4\">
\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<h5 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"8\" data-purecounter-delay=\"300\">0</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<p class=\"mb-0 h6 fw-light\">Achieved Certificates</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Counter boxes END -->

\t\t\t\t<div class=\"card bg-transparent border rounded-3\">
\t\t\t\t\t<!-- Card header START -->
\t\t\t\t\t<div class=\"card-header bg-transparent border-bottom\">
\t\t\t\t\t\t<h3 class=\"mb-0\">My Courses List</h3>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Card header END -->

\t\t\t\t\t<!-- Card body START -->
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<!-- Search and select START -->
\t\t\t\t\t\t<div class=\"row g-3 align-items-center justify-content-between mb-4\">
\t\t\t\t\t\t\t<!-- Content -->
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<form class=\"rounded position-relative\" action=\"{{ url(\"app_student_courses\") }}\">
\t\t\t\t\t\t\t\t\t<input name=\"search\" required class=\"form-control pe-5 bg-transparent\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t\t\t\t<button class=\"bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-search fs-6 \"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Select option -->
\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Search and select END -->

\t\t\t\t\t\t<!-- Course list table START -->
\t\t\t\t\t\t<div class=\"table-responsive border-0\">
\t\t\t\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
\t\t\t\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Course Title</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Total Lessons</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Completed Lessons</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t\t<!-- Table body START -->
                                {% set break = false %}
\t\t\t\t\t\t\t\t<tbody>
                                    {% for course in student.cours %}
\t\t\t\t\t\t\t\t\t\t{% set leconTerminees = 0 %}
\t\t\t\t\t\t\t\t\t\t{% for l in student.lectures %}
\t\t\t\t\t\t\t\t\t\t\t{% if l.isFinished and l.lesson is not same as null and l.lesson.chapitre.cours is same as course %}
\t\t\t\t\t\t\t\t\t\t\t\t{% set leconTerminees = leconTerminees + 1 %}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t{% set numberOfLessons = course.numberOfLessons > 0 ? course.numberOfLessons : 1 %}
\t\t\t\t\t\t\t\t\t\t{% set percent = (leconTerminees * 100 ) / numberOfLessons %}
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <div class=\"d-flex align-items-center\">
                                                    <!-- Image -->
                                                    <div class=\"w-100px\">
                                                        <img src=\"{{asset('uploads/media/courses/' ~ course.media.imageFile)}}\" class=\"rounded\" alt=\"\">
                                                    </div>
                                                    <div class=\"mb-0 ms-2\">
                                                        <!-- Title -->
                                                        <h6><a href=\"{{ url(\"app_front_course_start\", {slug: course.slug}, \"http\", false) }}\">{{ course.intitule }}</a></h6>
                                                        <!-- Info -->
                                                        <div class=\"overflow-hidden\">
                                                            <h6 class=\"mb-0 text-end\">{{ percent|number_format(0) }}%</h6>
                                                            <div class=\"progress progress-sm bg-primary bg-opacity-10\">
                                                                <div class=\"progress-bar bg-primary aos\" role=\"progressbar\" data-aos=\"slide-right\" data-aos-delay=\"200\" data-aos-duration=\"1000\" data-aos-easing=\"ease-in-out\" style=\"width: {{ percent|number_format(0) }}%\" aria-valuenow=\"{{ percent|number_format(0) }}\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>

                                            <!-- Table data -->
                                            <td>{{ course.numberOfLessons }}</td>

                                            <!-- Table data -->
                                            <td>{{ leconTerminees }}</td>

                                            <!-- Table data -->
                                            <td>
                                                <a title=\"Continue\" href=\"{{ url(\"app_front_course_start\", {slug: course.slug}, \"http\", false) }}\" class=\"btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0\"><i class=\"bi bi-play-circle me-1\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t{% if course.isFree %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"return confirm('Etes-vous sure de vouloir supprimer ce cours de votre liste de lecture')\" href=\"{{ url(\"app_front_course_start\", {id: student.reference, slug: course.slug}, \"http\", false) }}\" class=\"btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0\"><i class=\"bi bi-trash me-1\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
                                            </td>
                                        </tr>
                                        
                                    {% else %}
                                        <tr>
                                            <td colspan=\"4\">No Courses found</td>
                                        </tr>
                                    {% endfor %}
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t<!-- Table body END -->
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Course list table END -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Card body START -->
\t\t\t\t</div>

{% endblock %}
", "student/home/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\student\\home\\index.html.twig");
    }
}
