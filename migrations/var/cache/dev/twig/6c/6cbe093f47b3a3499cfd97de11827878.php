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

/* instructor/home/index.html.twig */
class __TwigTemplate_899814c73b777e81877f0d7159f45af1 extends Template
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
        return "instructor/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/home/index.html.twig"));

        $this->parent = $this->loadTemplate("instructor/base.html.twig", "instructor/home/index.html.twig", 1);
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

        echo " - Dashboard ";
        
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
\t\t\t\t<div class=\"row g-4\">
\t\t\t\t\t<!-- Counter item -->
\t\t\t\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t\t\t\t<div class=\"d-flex justify-content-center align-items-center p-4 bg-warning bg-opacity-15 rounded-3\">
\t\t\t\t\t\t\t<span class=\"display-6 text-warning mb-0\"><i class=\"fas fa-tv fa-fw\"></i></span>
\t\t\t\t\t\t\t<div class=\"ms-4\">
\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<h5 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 15, $this->source); })()), "cours", [], "any", false, false, false, 15)), "html", null, true);
        echo "\"\tdata-purecounter-delay=\"200\">0</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"mb-0 h6 fw-light\">Total Courses</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Counter item -->
\t\t\t\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t\t\t\t<div class=\"d-flex justify-content-center align-items-center p-4 bg-purple bg-opacity-10 rounded-3\">
\t\t\t\t\t\t\t<span class=\"display-6 text-purple mb-0\"><i class=\"fas fa-user-graduate fa-fw\"></i></span>
\t\t\t\t\t\t\t<div class=\"ms-4\">
\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<h5 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["premiumCourses"]) || array_key_exists("premiumCourses", $context) ? $context["premiumCourses"] : (function () { throw new RuntimeError('Variable "premiumCourses" does not exist.', 27, $this->source); })())), "html", null, true);
        echo "\"\tdata-purecounter-delay=\"200\">0</h5>
\t\t\t\t\t\t\t\t\t";
        // line 29
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"mb-0 h6 fw-light\">Premium courses</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Counter item -->
\t\t\t\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t\t\t\t<div class=\"d-flex justify-content-center align-items-center p-4 bg-info bg-opacity-10 rounded-3\">
\t\t\t\t\t\t\t<span class=\"display-6 text-info mb-0\"><i class=\"fas fa-gem fa-fw\"></i></span>
\t\t\t\t\t\t\t<div class=\"ms-4\">
\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<h5 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["freeCourses"]) || array_key_exists("freeCourses", $context) ? $context["freeCourses"] : (function () { throw new RuntimeError('Variable "freeCourses" does not exist.', 40, $this->source); })())), "html", null, true);
        echo "\" data-purecounter-delay=\"300\">0</h5>
\t\t\t\t\t\t\t\t\t";
        // line 42
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"mb-0 h6 fw-light\">Free courses</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Counter boxes END -->

\t\t\t\t<!-- Chart START -->
\t\t\t\t<div class=\"row mt-5\">
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<div class=\"card card-body bg-transparent border p-4 h-100\">
\t\t\t\t\t\t\t<div class=\"row g-4\">
\t\t\t\t\t\t\t\t<!-- Content -->
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t\t\t\t\t<span class=\"badge text-bg-dark\">Current Month</span>
\t\t\t\t\t\t\t\t\t<h4 class=\"text-primary my-2\">\$35000</h4>
\t\t\t\t\t\t\t\t\t<p class=\"mb-0\"><span class=\"text-success me-1\">0.20%<i class=\"bi bi-arrow-up\"></i></span>vs last month</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Content -->
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t\t\t\t\t<span class=\"badge text-bg-dark\">Last Month</span>
\t\t\t\t\t\t\t\t\t<h4 class=\"my-2\">\$28000</h4>
\t\t\t\t\t\t\t\t\t<p class=\"mb-0\"><span class=\"text-danger me-1\">0.10%<i class=\"bi bi-arrow-down\"></i></span>Then last month</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Apex chart -->
\t\t\t\t\t\t\t<div id=\"ChartPayout\"></div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Chart END -->

\t\t\t\t<!-- Course List table START -->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<div class=\"card border bg-transparent rounded-3 mt-5\">
\t\t\t\t\t\t\t<!-- Card header START -->
\t\t\t\t\t\t\t<div class=\"card-header bg-transparent border-bottom\">
\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-sm-between align-items-center\">
\t\t\t\t\t\t\t\t\t<h3 class=\"mb-2 mb-sm-0\">Last courses</h3>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instructor_courses");
        echo "\" class=\"btn btn-sm btn-primary-soft mb-0\">View all</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Card header END -->

\t\t\t\t\t\t\t<!-- Card body START -->
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"table-responsive border-0 rounded-3\">
\t\t\t\t\t\t\t\t\t<!-- Table START -->
\t\t\t\t\t\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0\">
\t\t\t\t\t\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t\t\t\t\t\t<head>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Course Title</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Students</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Status</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Price</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<!-- Table item -->
\t\t\t\t\t\t\t\t\t\t\t";
        // line 109
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lastCourses"]) || array_key_exists("lastCourses", $context) ? $context["lastCourses"] : (function () { throw new RuntimeError('Variable "lastCourses" does not exist.', 109, $this->source); })()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 110
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            echo twig_include($this->env, $context, "instructor/courses/include/_table_course_item.html.twig");
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 112
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"5\">No data found</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t<!-- Table body END -->
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t<!-- Table END -->
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Card body START -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Course List table END -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "instructor/home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 116,  241 => 112,  225 => 110,  207 => 109,  180 => 85,  135 => 42,  131 => 40,  118 => 29,  114 => 27,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"instructor/base.html.twig\" %}

{% block subTitle %} - Dashboard {% endblock %}

{% block pageContent %}
    
    <!-- Counter boxes START -->
\t\t\t\t<div class=\"row g-4\">
\t\t\t\t\t<!-- Counter item -->
\t\t\t\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t\t\t\t<div class=\"d-flex justify-content-center align-items-center p-4 bg-warning bg-opacity-15 rounded-3\">
\t\t\t\t\t\t\t<span class=\"display-6 text-warning mb-0\"><i class=\"fas fa-tv fa-fw\"></i></span>
\t\t\t\t\t\t\t<div class=\"ms-4\">
\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<h5 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"{{ enseignant.cours|length }}\"\tdata-purecounter-delay=\"200\">0</h5>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"mb-0 h6 fw-light\">Total Courses</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Counter item -->
\t\t\t\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t\t\t\t<div class=\"d-flex justify-content-center align-items-center p-4 bg-purple bg-opacity-10 rounded-3\">
\t\t\t\t\t\t\t<span class=\"display-6 text-purple mb-0\"><i class=\"fas fa-user-graduate fa-fw\"></i></span>
\t\t\t\t\t\t\t<div class=\"ms-4\">
\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<h5 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"{{ premiumCourses|length }}\"\tdata-purecounter-delay=\"200\">0</h5>
\t\t\t\t\t\t\t\t\t{# <span class=\"mb-0 h5\">K+</span> #}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"mb-0 h6 fw-light\">Premium courses</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Counter item -->
\t\t\t\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t\t\t\t<div class=\"d-flex justify-content-center align-items-center p-4 bg-info bg-opacity-10 rounded-3\">
\t\t\t\t\t\t\t<span class=\"display-6 text-info mb-0\"><i class=\"fas fa-gem fa-fw\"></i></span>
\t\t\t\t\t\t\t<div class=\"ms-4\">
\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t<h5 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"{{ freeCourses|length }}\" data-purecounter-delay=\"300\">0</h5>
\t\t\t\t\t\t\t\t\t{# <span class=\"mb-0 h5\">K</span> #}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span class=\"mb-0 h6 fw-light\">Free courses</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Counter boxes END -->

\t\t\t\t<!-- Chart START -->
\t\t\t\t<div class=\"row mt-5\">
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<div class=\"card card-body bg-transparent border p-4 h-100\">
\t\t\t\t\t\t\t<div class=\"row g-4\">
\t\t\t\t\t\t\t\t<!-- Content -->
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t\t\t\t\t<span class=\"badge text-bg-dark\">Current Month</span>
\t\t\t\t\t\t\t\t\t<h4 class=\"text-primary my-2\">\$35000</h4>
\t\t\t\t\t\t\t\t\t<p class=\"mb-0\"><span class=\"text-success me-1\">0.20%<i class=\"bi bi-arrow-up\"></i></span>vs last month</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Content -->
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t\t\t\t\t<span class=\"badge text-bg-dark\">Last Month</span>
\t\t\t\t\t\t\t\t\t<h4 class=\"my-2\">\$28000</h4>
\t\t\t\t\t\t\t\t\t<p class=\"mb-0\"><span class=\"text-danger me-1\">0.10%<i class=\"bi bi-arrow-down\"></i></span>Then last month</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Apex chart -->
\t\t\t\t\t\t\t<div id=\"ChartPayout\"></div>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Chart END -->

\t\t\t\t<!-- Course List table START -->
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<div class=\"card border bg-transparent rounded-3 mt-5\">
\t\t\t\t\t\t\t<!-- Card header START -->
\t\t\t\t\t\t\t<div class=\"card-header bg-transparent border-bottom\">
\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-sm-between align-items-center\">
\t\t\t\t\t\t\t\t\t<h3 class=\"mb-2 mb-sm-0\">Last courses</h3>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_instructor_courses') }}\" class=\"btn btn-sm btn-primary-soft mb-0\">View all</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Card header END -->

\t\t\t\t\t\t\t<!-- Card body START -->
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"table-responsive border-0 rounded-3\">
\t\t\t\t\t\t\t\t\t<!-- Table START -->
\t\t\t\t\t\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0\">
\t\t\t\t\t\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t\t\t\t\t\t<head>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Course Title</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Students</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Status</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Price</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<!-- Table item -->
\t\t\t\t\t\t\t\t\t\t\t{% for course in lastCourses %}
\t\t\t\t\t\t\t\t\t\t\t\t{{ include('instructor/courses/include/_table_course_item.html.twig') }}
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"5\">No data found</td>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t<!-- Table body END -->
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t<!-- Table END -->
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Card body START -->
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- Course List table END -->

{% endblock %}", "instructor/home/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\instructor\\home\\index.html.twig");
    }
}
