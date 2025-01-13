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

/* admin/cours/index.html.twig */
class __TwigTemplate_854a7f330438944793a73538175a1e1f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageTitle' => [$this, 'block_pageTitle'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/cours/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/cours/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/cours/index.html.twig", 1);
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

        echo "Cours";
        
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
        echo "    <script>
\t\tconst showRejectedFormModal = (e) => {
\t\t\tconst action = e.currentTarget.dataset.uri;
\t\t\t\$('#RejectedCourseForumMessage form').attr('action', action)
\t\t\t\$('#RejectedCourseForumMessage form').attr('method', 'POST')

\t\t\t\$('#RejectedCourseForumMessage').modal(\"show\")
\t\t}

\t\t\$('#admin_filter_select_courses').on('change', (e) => {
\t\t\twindow.location.href = \$(e.currentTarget).val()
\t\t})

\t\tdocument.querySelectorAll('.reject-course-btn').forEach(btn => {
\t\t\tbtn.addEventListener(\"click\", showRejectedFormModal)
\t\t})

\t</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 26
    public function block_mainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        // line 27
        echo "
    <!-- Course boxes START -->
\t<div class=\"row g-4 mb-4\">
\t\t<!-- Course item -->
\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t<div class=\"text-center p-4 bg-primary bg-opacity-10 border border-primary rounded-3\">
\t\t\t\t<h6>Total Courses</h6>
\t\t\t\t<h2 class=\"mb-0 fs-1 text-primary\">";
        // line 34
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 34, $this->source); })())), "html", null, true);
        echo "</h2>
\t\t\t</div>
\t\t</div>

\t\t<!-- Course item -->
\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t<div class=\"text-center p-4 bg-success bg-opacity-10 border border-success rounded-3\">
\t\t\t\t<h6>Activated Courses</h6>
\t\t\t\t<h2 class=\"mb-0 fs-1 text-success\">";
        // line 42
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["activatedCourses"]) || array_key_exists("activatedCourses", $context) ? $context["activatedCourses"] : (function () { throw new RuntimeError('Variable "activatedCourses" does not exist.', 42, $this->source); })())), "html", null, true);
        echo "</h2>
\t\t\t</div>
\t\t</div>

\t\t<!-- Course item -->
\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t<div class=\"text-center p-4  bg-warning bg-opacity-15 border border-warning rounded-3\">
\t\t\t\t<h6>Pending Courses</h6>
\t\t\t\t<h2 class=\"mb-0 fs-1 text-warning\">";
        // line 50
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["pendingCourses"]) || array_key_exists("pendingCourses", $context) ? $context["pendingCourses"] : (function () { throw new RuntimeError('Variable "pendingCourses" does not exist.', 50, $this->source); })())), "html", null, true);
        echo "</h2>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Course boxes END -->

\t<!-- Card START -->
\t<div class=\"card bg-transparent border\">

\t\t<!-- Card header START -->
\t\t<div class=\"card-header bg-light border-bottom\">
\t\t\t<!-- Search and select START -->
\t\t\t<div class=\"row g-3 align-items-center justify-content-between\">
\t\t\t\t<!-- Search bar -->
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<form class=\"rounded position-relative\" method=\"get\">
\t\t\t\t\t\t<input value=\"";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control bg-body\" type=\"search\" name=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t<button class=\"bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset\" type=\"submit\">
\t\t\t\t\t\t\t<i class=\"fas fa-search fs-6 \"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</form>
\t\t\t\t</div>

\t\t\t\t<!-- Select option -->
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<!-- Short by filter -->
\t\t\t\t\t<form>
\t\t\t\t\t\t<select id=\"admin_filter_select_courses\" class=\"form-select js-choice border-0 z-index-9\" aria-label=\".form-select-sm\">
\t\t\t\t\t\t\t<option  value=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_cours_index");
        echo "\">Sort by</option>
\t\t\t\t\t\t\t<option ";
        // line 79
        echo ((((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 79, $this->source); })()) === "newest")) ? ("selected") : (""));
        echo " value=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_cours_index", ["filter" => "newest"]);
        echo "\">Newest</option>
\t\t\t\t\t\t\t<option ";
        // line 80
        echo ((((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 80, $this->source); })()) === "oldest")) ? ("selected") : (""));
        echo " value=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_cours_index", ["filter" => "oldest"]);
        echo "\">Oldest</option>
\t\t\t\t\t\t\t<option ";
        // line 81
        echo ((((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 81, $this->source); })()) === "accepted")) ? ("selected") : (""));
        echo " value=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_cours_index", ["filter" => "accepted"]);
        echo "\">Accepted</option>
\t\t\t\t\t\t\t<option ";
        // line 82
        echo ((((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 82, $this->source); })()) === "rejected")) ? ("selected") : (""));
        echo " value=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_cours_index", ["filter" => "rejected"]);
        echo "\">Rejected</option>
\t\t\t\t\t\t\t<option ";
        // line 83
        echo ((((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 83, $this->source); })()) === "free")) ? ("selected") : (""));
        echo " value=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_cours_index", ["filter" => "free"]);
        echo "\">Free</option>
\t\t\t\t\t\t\t<option ";
        // line 84
        echo ((((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 84, $this->source); })()) === "premium")) ? ("selected") : (""));
        echo " value=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_cours_index", ["filter" => "premium"]);
        echo "\">Premium</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Search and select END -->
\t\t</div>
\t\t<!-- Card header END -->

\t\t<!-- Card body START -->
\t\t<div class=\"card-body\">
\t\t\t<!-- Course table START -->
\t\t\t<div class=\"table-responsive border-0 rounded-3\">
\t\t\t\t<!-- Table START -->
\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Course Name</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Instructor</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Added Date</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Type</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Price</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Status</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t
\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 114, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 115
            echo "\t\t\t\t\t\t\t<tr class=\"text-center\">
\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center position-relative\">
\t\t\t\t\t\t\t\t\t\t<!-- Image -->
\t\t\t\t\t\t\t\t\t\t<div class=\"w-60px\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/courses/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["course"], "media", [], "any", false, false, false, 121), "imageFile", [], "any", false, false, false, 121))), "html", null, true);
            echo "\" class=\"rounded\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h6 class=\"table-responsive-title mb-0 ms-2\">\t
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_cours_show", ["slug" => twig_get_attribute($this->env, $this->source, $context["course"], "slug", [], "any", false, false, false, 125)]), "html", null, true);
            echo "\" class=\"stretched-link\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["course"], "intitule", [], "any", false, false, false, 125)), "truncate", [40, "..."], "method", false, false, false, 125), "html", null, true);
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
            // line 135
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["course"], "enseignant", [], "any", false, false, false, 135), "utilisateur", [], "any", false, false, false, 135), "personne", [], "any", false, false, false, 135), "avatarPath", [], "any", false, false, false, 135)), "html", null, true);
            echo "\" alt=\"avatar\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0 fw-light\">";
            // line 139
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["course"], "enseignant", [], "any", false, false, false, 139), "utilisateur", [], "any", false, false, false, 139), "personne", [], "any", false, false, false, 139), "nomComplet", [], "any", false, false, false, 139)), "truncate", [15, "..."], "method", false, false, false, 139), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>";
            // line 145
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "createdAt", [], "any", false, false, false, 145), "d/m/Y"), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td> <span class=\"badge text-bg-primary\">";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "niveauDifficulte", [], "any", false, false, false, 148), "html", null, true);
            echo "</span> </td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>";
            // line 151
            ((twig_get_attribute($this->env, $this->source, $context["course"], "isFree", [], "any", false, false, false, 151)) ? (print ("Free")) : (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "montantAbonnement", [], "any", false, false, false, 151), "html", null, true))));
            echo "</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t";
            // line 155
            if (twig_get_attribute($this->env, $this->source, $context["course"], "isValidated", [], "any", false, false, false, 155)) {
                // line 156
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success bg-opacity-15 text-success\">Pulished</span>
\t\t\t\t\t\t\t\t\t";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 157
$context["course"], "isRejected", [], "any", false, false, false, 157)) {
                // line 158
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger bg-opacity-15 text-danger\">Rejected</span>
\t\t\t\t\t\t\t\t\t";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 159
$context["course"], "isPublished", [], "any", false, false, false, 159)) {
                // line 160
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-warning bg-opacity-15 text-warning\">Pending</span>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 162
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary bg-opacity-15 text-primary\">Creating</span>
\t\t\t\t\t\t\t\t\t";
            }
            // line 164
            echo "\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-round btn-primary-soft btn-sm\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"Preview\" href=\"";
            // line 168
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_course_details", ["slug" => twig_get_attribute($this->env, $this->source, $context["course"], "slug", [], "any", false, false, false, 168)]), "html", null, true);
            echo "\"><i class=\"fas fa-eye\"></i></a>
\t\t\t\t\t\t\t\t\t";
            // line 169
            if ( !twig_get_attribute($this->env, $this->source, $context["course"], "isValidated", [], "any", false, false, false, 169)) {
                // line 170
                echo "\t\t\t\t\t\t\t\t\t\t";
                if (twig_get_attribute($this->env, $this->source, $context["course"], "isPublished", [], "any", false, false, false, 170)) {
                    // line 171
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_admin_cours_approve", ["slug" => twig_get_attribute($this->env, $this->source, $context["course"], "slug", [], "any", false, false, false, 171)]), "html", null, true);
                    echo "\" onclick=\"return confirm('You are going to approve this course. Are you sure that you want to continue ?')\" data-bs-toggle=\"tooltip\" title=\"Approve\" class=\"btn btn-sm btn-round btn-success-soft\"><i class=\"fas fa-check-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<button data-bs-toggle=\"tooltip\" data-uri=\"";
                    // line 172
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_admin_cours_rejected", ["slug" => twig_get_attribute($this->env, $this->source, $context["course"], "slug", [], "any", false, false, false, 172)]), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-danger-soft btn-round reject-course-btn\" title=\"Rejected\"><i class=\"fas fa-times\"></i></button>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 175
                echo "\t\t\t\t\t\t\t\t\t";
            }
            // line 176
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 179
            echo "\t\t\t\t\t\t\t<tr><td colspan=\"7\">No data found</td></tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 181
        echo "\t\t\t\t\t</tbody>
\t\t\t\t\t<!-- Table body END -->
\t\t\t\t</table>
\t\t\t\t<!-- Table END -->
\t\t\t</div>
\t\t\t<!-- Course table END -->
\t\t</div>
\t\t<!-- Card body END -->

\t\t<!-- Card footer START -->
\t\t<div class=\"card-footer bg-transparent pt-0\">
\t\t\t<!-- Pagination START -->
\t\t\t<div class=\"d-sm-flex justify-content-sm-between align-items-sm-center pagination-container\">
\t\t\t\t<p class=\"mb-0 text-center text-sm-start\"></p>
\t\t\t\t";
        // line 195
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 195, $this->source); })()));
        echo "
\t\t\t</div>
\t\t\t<!-- Pagination END -->
\t\t</div>
\t\t<!-- Card footer END -->
\t</div>
\t<!-- Card END --> 
\t

\t<!-- Modal START -->
\t<div class=\"modal fade\" id=\"RejectedCourseForumMessage\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header border-0\">
\t\t\t\t\t<!-- Close button -->
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<!-- Modal body -->
\t\t\t\t<div class=\"modal-body px-5 pb-5 position-relative overflow-hidden\">
                    <div class=\"d-flex mb-4 mt-3\">
                        <form onsubmit=\"return confirm('Confirm the reject of this course')\" class=\"w-100 d-flex\" method=\"POST\" action=\"\">
                            <textarea name=\"message\" required class=\"one form-control pe-4 bg-light\" placeholder=\"Add a comment...\" rows=\"4\"></textarea>
                            <button class=\"btn btn-primary ms-2 mb-0\" type=\"submit\"><i class=\"fas fa-paper-plane\"></i></button>
                        </form>
                    </div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>  
\t<!-- Modal END -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/cours/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  410 => 195,  394 => 181,  387 => 179,  380 => 176,  377 => 175,  371 => 172,  366 => 171,  363 => 170,  361 => 169,  357 => 168,  351 => 164,  347 => 162,  343 => 160,  341 => 159,  338 => 158,  336 => 157,  333 => 156,  331 => 155,  324 => 151,  318 => 148,  312 => 145,  303 => 139,  296 => 135,  281 => 125,  274 => 121,  266 => 115,  261 => 114,  226 => 84,  220 => 83,  214 => 82,  208 => 81,  202 => 80,  196 => 79,  192 => 78,  177 => 66,  158 => 50,  147 => 42,  136 => 34,  127 => 27,  117 => 26,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block pageTitle %}Cours{% endblock %}

{% block script %}
    <script>
\t\tconst showRejectedFormModal = (e) => {
\t\t\tconst action = e.currentTarget.dataset.uri;
\t\t\t\$('#RejectedCourseForumMessage form').attr('action', action)
\t\t\t\$('#RejectedCourseForumMessage form').attr('method', 'POST')

\t\t\t\$('#RejectedCourseForumMessage').modal(\"show\")
\t\t}

\t\t\$('#admin_filter_select_courses').on('change', (e) => {
\t\t\twindow.location.href = \$(e.currentTarget).val()
\t\t})

\t\tdocument.querySelectorAll('.reject-course-btn').forEach(btn => {
\t\t\tbtn.addEventListener(\"click\", showRejectedFormModal)
\t\t})

\t</script>
{% endblock %}

{% block mainContent %}

    <!-- Course boxes START -->
\t<div class=\"row g-4 mb-4\">
\t\t<!-- Course item -->
\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t<div class=\"text-center p-4 bg-primary bg-opacity-10 border border-primary rounded-3\">
\t\t\t\t<h6>Total Courses</h6>
\t\t\t\t<h2 class=\"mb-0 fs-1 text-primary\">{{ cours|length }}</h2>
\t\t\t</div>
\t\t</div>

\t\t<!-- Course item -->
\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t<div class=\"text-center p-4 bg-success bg-opacity-10 border border-success rounded-3\">
\t\t\t\t<h6>Activated Courses</h6>
\t\t\t\t<h2 class=\"mb-0 fs-1 text-success\">{{ activatedCourses|length }}</h2>
\t\t\t</div>
\t\t</div>

\t\t<!-- Course item -->
\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t<div class=\"text-center p-4  bg-warning bg-opacity-15 border border-warning rounded-3\">
\t\t\t\t<h6>Pending Courses</h6>
\t\t\t\t<h2 class=\"mb-0 fs-1 text-warning\">{{ pendingCourses|length }}</h2>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Course boxes END -->

\t<!-- Card START -->
\t<div class=\"card bg-transparent border\">

\t\t<!-- Card header START -->
\t\t<div class=\"card-header bg-light border-bottom\">
\t\t\t<!-- Search and select START -->
\t\t\t<div class=\"row g-3 align-items-center justify-content-between\">
\t\t\t\t<!-- Search bar -->
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<form class=\"rounded position-relative\" method=\"get\">
\t\t\t\t\t\t<input value=\"{{ search }}\" class=\"form-control bg-body\" type=\"search\" name=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t<button class=\"bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset\" type=\"submit\">
\t\t\t\t\t\t\t<i class=\"fas fa-search fs-6 \"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</form>
\t\t\t\t</div>

\t\t\t\t<!-- Select option -->
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t<!-- Short by filter -->
\t\t\t\t\t<form>
\t\t\t\t\t\t<select id=\"admin_filter_select_courses\" class=\"form-select js-choice border-0 z-index-9\" aria-label=\".form-select-sm\">
\t\t\t\t\t\t\t<option  value=\"{{ path('app_admin_cours_index') }}\">Sort by</option>
\t\t\t\t\t\t\t<option {{ filter is same as 'newest' ? 'selected' : '' }} value=\"{{ path('app_admin_cours_index', {filter: 'newest'}) }}\">Newest</option>
\t\t\t\t\t\t\t<option {{ filter is same as 'oldest' ? 'selected' : '' }} value=\"{{ path('app_admin_cours_index', {filter: 'oldest'}) }}\">Oldest</option>
\t\t\t\t\t\t\t<option {{ filter is same as 'accepted' ? 'selected' : '' }} value=\"{{ path('app_admin_cours_index', {filter: 'accepted'}) }}\">Accepted</option>
\t\t\t\t\t\t\t<option {{ filter is same as 'rejected' ? 'selected' : '' }} value=\"{{ path('app_admin_cours_index', {filter: 'rejected'}) }}\">Rejected</option>
\t\t\t\t\t\t\t<option {{ filter is same as 'free' ? 'selected' : '' }} value=\"{{ path('app_admin_cours_index', {filter: 'free'}) }}\">Free</option>
\t\t\t\t\t\t\t<option {{ filter is same as 'premium' ? 'selected' : '' }} value=\"{{ path('app_admin_cours_index', {filter: 'premium'}) }}\">Premium</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Search and select END -->
\t\t</div>
\t\t<!-- Card header END -->

\t\t<!-- Card body START -->
\t\t<div class=\"card-body\">
\t\t\t<!-- Course table START -->
\t\t\t<div class=\"table-responsive border-0 rounded-3\">
\t\t\t\t<!-- Table START -->
\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Course Name</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Instructor</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Added Date</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Type</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Price</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Status</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t
\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for course in courses %}
\t\t\t\t\t\t\t<tr class=\"text-center\">
\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center position-relative\">
\t\t\t\t\t\t\t\t\t\t<!-- Image -->
\t\t\t\t\t\t\t\t\t\t<div class=\"w-60px\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/media/courses/' ~ course.media.imageFile) }}\" class=\"rounded\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h6 class=\"table-responsive-title mb-0 ms-2\">\t
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_admin_cours_show', {slug: course.slug}) }}\" class=\"stretched-link\">{{ course.intitule|u.truncate(40, '...') }}</a>
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-3\">
\t\t\t\t\t\t\t\t\t\t<!-- Avatar -->
\t\t\t\t\t\t\t\t\t\t<div class=\"avatar avatar-xs flex-shrink-0\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle\" src=\"{{ asset(course.enseignant.utilisateur.personne.avatarPath) }}\" alt=\"avatar\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0 fw-light\">{{ course.enseignant.utilisateur.personne.nomComplet|u.truncate(15, '...') }}</h6>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>{{ course.createdAt|date('d/m/Y') }}</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td> <span class=\"badge text-bg-primary\">{{ course.niveauDifficulte }}</span> </td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>{{ course.isFree ? 'Free' : course.montantAbonnement }}</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t{% if course.isValidated %}
\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success bg-opacity-15 text-success\">Pulished</span>
\t\t\t\t\t\t\t\t\t{% elseif course.isRejected %}
\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger bg-opacity-15 text-danger\">Rejected</span>
\t\t\t\t\t\t\t\t\t{% elseif course.isPublished %}
\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-warning bg-opacity-15 text-warning\">Pending</span>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary bg-opacity-15 text-primary\">Creating</span>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a class=\"btn btn-round btn-primary-soft btn-sm\" target=\"_blank\" data-bs-toggle=\"tooltip\" title=\"Preview\" href=\"{{ url(\"app_front_course_details\", {slug: course.slug}) }}\"><i class=\"fas fa-eye\"></i></a>
\t\t\t\t\t\t\t\t\t{% if not course.isValidated %}
\t\t\t\t\t\t\t\t\t\t{% if course.isPublished %}
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ url(\"app_admin_cours_approve\", {slug: course.slug}) }}\" onclick=\"return confirm('You are going to approve this course. Are you sure that you want to continue ?')\" data-bs-toggle=\"tooltip\" title=\"Approve\" class=\"btn btn-sm btn-round btn-success-soft\"><i class=\"fas fa-check-circle\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<button data-bs-toggle=\"tooltip\" data-uri=\"{{ url(\"app_admin_cours_rejected\", {slug: course.slug}) }}\" class=\"btn btn-sm btn-danger-soft btn-round reject-course-btn\" title=\"Rejected\"><i class=\"fas fa-times\"></i></button>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endif %}
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

\t\t<!-- Card footer START -->
\t\t<div class=\"card-footer bg-transparent pt-0\">
\t\t\t<!-- Pagination START -->
\t\t\t<div class=\"d-sm-flex justify-content-sm-between align-items-sm-center pagination-container\">
\t\t\t\t<p class=\"mb-0 text-center text-sm-start\"></p>
\t\t\t\t{{ knp_pagination_render(courses) }}
\t\t\t</div>
\t\t\t<!-- Pagination END -->
\t\t</div>
\t\t<!-- Card footer END -->
\t</div>
\t<!-- Card END --> 
\t

\t<!-- Modal START -->
\t<div class=\"modal fade\" id=\"RejectedCourseForumMessage\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header border-0\">
\t\t\t\t\t<!-- Close button -->
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<!-- Modal body -->
\t\t\t\t<div class=\"modal-body px-5 pb-5 position-relative overflow-hidden\">
                    <div class=\"d-flex mb-4 mt-3\">
                        <form onsubmit=\"return confirm('Confirm the reject of this course')\" class=\"w-100 d-flex\" method=\"POST\" action=\"\">
                            <textarea name=\"message\" required class=\"one form-control pe-4 bg-light\" placeholder=\"Add a comment...\" rows=\"4\"></textarea>
                            <button class=\"btn btn-primary ms-2 mb-0\" type=\"submit\"><i class=\"fas fa-paper-plane\"></i></button>
                        </form>
                    </div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>  
\t<!-- Modal END -->

{% endblock %}
", "admin/cours/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\cours\\index.html.twig");
    }
}
