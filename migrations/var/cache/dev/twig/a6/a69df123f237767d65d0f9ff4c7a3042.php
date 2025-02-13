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

/* instructor/courses/index.html.twig */
class __TwigTemplate_8221c70e8eb7120cadc8d0695815d271 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'subTitle' => [$this, 'block_subTitle'],
            'script' => [$this, 'block_script'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/courses/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/courses/index.html.twig"));

        $this->parent = $this->loadTemplate("instructor/base.html.twig", "instructor/courses/index.html.twig", 1);
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

        echo " - Courses ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 6
        echo "\t<script>
\t\t\$('#instructor_filter_select_courses').on('change', (e) => {
\t\t\twindow.location.href = \$(e.currentTarget).val()
\t\t})
\t</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        // line 14
        echo "    
    <!-- Card START -->
\t<div class=\"card border bg-transparent rounded-3\">
\t\t<!-- Card header START -->
\t\t<div class=\"card-header bg-transparent border-bottom\">
\t\t\t<h3 class=\"mb-0\">My Courses List</h3>
\t\t</div>
\t\t<!-- Card header END -->

\t\t<!-- Card body START -->
\t\t<div class=\"card-body\">

\t\t\t<!-- Search and select START -->
\t\t\t<div class=\"row g-3 align-items-center justify-content-between mb-4\">
\t\t\t\t<!-- Search -->
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<form class=\"rounded position-relative\" method=\"get\">
\t\t\t\t\t\t<input class=\"form-control pe-5 bg-transparent\" name=\"search\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t<button class=\"bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset\" type=\"submit\">
\t\t\t\t\t<i class=\"fas fa-search fs-6 \"></i>
\t\t\t\t</button>
\t\t\t\t\t</form>
\t\t\t\t</div>

\t\t\t\t<!-- Select option -->
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<!-- Short by filter -->
\t\t\t\t\t<form>
\t\t\t\t\t\t<select name=\"filter\" id=\"instructor_filter_select_courses\" class=\"form-select js-choice border-0 z-index-9 bg-transparent\" aria-label=\".form-select-sm\">
\t\t\t\t\t\t\t<option value=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instructor_courses");
        echo "\">Sort by</option>
\t\t\t\t\t\t\t<option ";
        // line 44
        echo (((array_key_exists("filter", $context) && ((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 44, $this->source); })()) === "free"))) ? ("selected") : (""));
        echo " value=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instructor_courses", ["filter" => "free"]);
        echo "\">Free</option>
\t\t\t\t\t\t\t<option ";
        // line 45
        echo (((array_key_exists("filter", $context) && ((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 45, $this->source); })()) === "newest"))) ? ("selected") : (""));
        echo " value=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instructor_courses", ["filter" => "newest"]);
        echo "\">Newest</option>
\t\t\t\t\t\t\t<option ";
        // line 46
        echo (((array_key_exists("filter", $context) && ((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 46, $this->source); })()) === "premium"))) ? ("selected") : (""));
        echo " value=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instructor_courses", ["filter" => "premium"]);
        echo "\">Premium</option>
\t\t\t\t\t\t\t<option ";
        // line 47
        echo (((array_key_exists("filter", $context) && ((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 47, $this->source); })()) === "viewed"))) ? ("selected") : (""));
        echo " value=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instructor_courses", ["filter" => "viewed"]);
        echo "\">Most Viewed</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Search and select END -->

\t\t\t<!-- Course list table START -->
\t\t\t<div class=\"table-responsive border-0\">
\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start ";
        // line 60
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 60, $this->source); })()), "isSorted", ["intitule"], "method", false, false, false, 60)) ? ("sorting") : (""));
        echo "\">";
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->sortable($this->env, (isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 60, $this->source); })()), "Course Title", "intitule");
        echo "</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Students</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Status</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Price</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>

\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<!-- Table item -->
\t\t\t\t\t\t";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 71, $this->source); })()));
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
            // line 72
            echo "\t\t\t\t\t\t\t";
            echo twig_include($this->env, $context, "instructor/courses/include/_table_course_item.html.twig");
            echo "
\t\t\t\t\t\t\t";
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
            // line 74
            echo "\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"5\">No data found</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t\t\t\t\t</tbody>
\t\t\t\t\t<!-- Table body END -->
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<!-- Course list table END -->

\t\t\t<!-- Pagination START -->
\t\t\t<div class=\"d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3 pagination-container\">
\t\t\t\t";
        // line 86
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 86, $this->source); })()));
        echo "
\t\t\t</div>
\t\t\t<!-- Pagination END -->
\t\t</div>
\t\t<!-- Card body START -->
\t</div>
\t<!-- Card END -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "instructor/courses/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 86,  247 => 78,  238 => 74,  222 => 72,  204 => 71,  188 => 60,  170 => 47,  164 => 46,  158 => 45,  152 => 44,  148 => 43,  133 => 31,  114 => 14,  104 => 13,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"instructor/base.html.twig\" %}

{% block subTitle %} - Courses {% endblock %}

{% block script %}
\t<script>
\t\t\$('#instructor_filter_select_courses').on('change', (e) => {
\t\t\twindow.location.href = \$(e.currentTarget).val()
\t\t})
\t</script>
{% endblock %}

{% block pageContent %}
    
    <!-- Card START -->
\t<div class=\"card border bg-transparent rounded-3\">
\t\t<!-- Card header START -->
\t\t<div class=\"card-header bg-transparent border-bottom\">
\t\t\t<h3 class=\"mb-0\">My Courses List</h3>
\t\t</div>
\t\t<!-- Card header END -->

\t\t<!-- Card body START -->
\t\t<div class=\"card-body\">

\t\t\t<!-- Search and select START -->
\t\t\t<div class=\"row g-3 align-items-center justify-content-between mb-4\">
\t\t\t\t<!-- Search -->
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<form class=\"rounded position-relative\" method=\"get\">
\t\t\t\t\t\t<input class=\"form-control pe-5 bg-transparent\" name=\"search\" value=\"{{ search }}\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t<button class=\"bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset\" type=\"submit\">
\t\t\t\t\t<i class=\"fas fa-search fs-6 \"></i>
\t\t\t\t</button>
\t\t\t\t\t</form>
\t\t\t\t</div>

\t\t\t\t<!-- Select option -->
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<!-- Short by filter -->
\t\t\t\t\t<form>
\t\t\t\t\t\t<select name=\"filter\" id=\"instructor_filter_select_courses\" class=\"form-select js-choice border-0 z-index-9 bg-transparent\" aria-label=\".form-select-sm\">
\t\t\t\t\t\t\t<option value=\"{{ path('app_instructor_courses') }}\">Sort by</option>
\t\t\t\t\t\t\t<option {{ filter is defined and filter is same as 'free' ? 'selected' : '' }} value=\"{{ path('app_instructor_courses', {filter: 'free'}) }}\">Free</option>
\t\t\t\t\t\t\t<option {{ filter is defined and filter is same as 'newest' ? 'selected' : '' }} value=\"{{ path('app_instructor_courses', {filter: 'newest'}) }}\">Newest</option>
\t\t\t\t\t\t\t<option {{ filter is defined and filter is same as 'premium' ? 'selected' : '' }} value=\"{{ path('app_instructor_courses', {filter: 'premium'}) }}\">Premium</option>
\t\t\t\t\t\t\t<option {{ filter is defined and filter is same as 'viewed' ? 'selected' : '' }} value=\"{{ path('app_instructor_courses', {filter: 'viewed'}) }}\">Most Viewed</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Search and select END -->

\t\t\t<!-- Course list table START -->
\t\t\t<div class=\"table-responsive border-0\">
\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start {{ courses.isSorted('intitule') ? 'sorting' : '' }}\">{{ knp_pagination_sortable(courses, 'Course Title', 'intitule') }}</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Students</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Status</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Price</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>

\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t<tbody>
\t\t\t\t\t\t<!-- Table item -->
\t\t\t\t\t\t{% for course in courses %}
\t\t\t\t\t\t\t{{ include('instructor/courses/include/_table_course_item.html.twig') }}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"5\">No data found</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t\t<!-- Table body END -->
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<!-- Course list table END -->

\t\t\t<!-- Pagination START -->
\t\t\t<div class=\"d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3 pagination-container\">
\t\t\t\t{{ knp_pagination_render(courses) }}
\t\t\t</div>
\t\t\t<!-- Pagination END -->
\t\t</div>
\t\t<!-- Card body START -->
\t</div>
\t<!-- Card END -->

{% endblock %}", "instructor/courses/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\instructor\\courses\\index.html.twig");
    }
}
