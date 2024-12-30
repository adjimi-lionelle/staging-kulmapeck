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

/* admin/enseignant/show.html.twig */
class __TwigTemplate_bc515ff92c69dc53edf7a95085ba95e6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/enseignant/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/enseignant/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/enseignant/show.html.twig", 1);
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

        echo "Instructor details";
        
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
\t\t\$('#admin_filter_select_courses').on('change', (e) => {
\t\t\twindow.location.href = \$(e.currentTarget).val()
\t\t})
\t</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_actionBtn($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actionBtn"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actionBtn"));

        // line 14
        echo "\t<p class=\"text-right\">
        ";
        // line 15
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 15, $this->source); })()), "isValidated", [], "any", false, false, false, 15)) {
            // line 16
            echo "            ";
            echo twig_include($this->env, $context, "admin/enseignant/_accept.html.twig", ["e" => (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 16, $this->source); })())]);
            echo "
        ";
        }
        // line 18
        echo "        ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 18, $this->source); })()), "isRejected", [], "any", false, false, false, 18)) {
            // line 19
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_enseignant_reject_request", ["reference" => twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 19, $this->source); })()), "reference", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\" class=\"btn btn-secondary-soft btn-sm me-1 mb-1 mb-lg-0\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-reject-request-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19), "html", null, true);
            echo "\">Reject</a>
        ";
        }
        // line 21
        echo "    </p>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 24
    public function block_mainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        // line 25
        echo "
    <div class=\"row g-4\">

\t\t\t<!-- Personal information START -->
\t\t\t<div class=\"col-xxl-7\">
\t\t\t\t<div class=\"card bg-transparent border rounded-3 h-100\">

\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t<div class=\"card-header bg-light border-bottom\">
\t\t\t\t\t\t<h5 class=\"card-header-title mb-0\">Personal Information</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Card body START -->
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<!-- Profile picture -->
\t\t\t\t\t\t<div class=\"avatar avatar-xl mb-3\">
\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle border border-white border-3 shadow\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/enseignants/kyc/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 41, $this->source); })()), "utilisateur", [], "any", false, false, false, 41), "personne", [], "any", false, false, false, 41), "avatar", [], "any", false, false, false, 41))), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Information START -->
\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t<!-- Information item -->
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Title:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 52
        echo (((twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 52, $this->source); })()), "utilisateur", [], "any", false, false, false, 52), "personne", [], "any", false, false, false, 52), "sexe", [], "any", false, false, false, 52)) === "MASCULIN")) ? ("Mr") : ("Miss"));
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Full Name:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 57, $this->source); })()), "utilisateur", [], "any", false, false, false, 57), "personne", [], "any", false, false, false, 57), "nomComplet", [], "any", false, false, false, 57), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>User Name:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 62, $this->source); })()), "utilisateur", [], "any", false, false, false, 62), "personne", [], "any", false, false, false, 62), "pseudo", [], "any", false, false, false, 62), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Mobile Number:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 67, $this->source); })()), "utilisateur", [], "any", false, false, false, 67), "personne", [], "any", false, false, false, 67), "telephone", [], "any", false, false, false, 67), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Information item -->
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Email ID:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 77, $this->source); })()), "utilisateur", [], "any", false, false, false, 77), "email", [], "any", false, false, false, 77), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Location:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 82, $this->source); })()), "utilisateur", [], "any", false, false, false, 82), "personne", [], "any", false, false, false, 82), "adresse", [], "any", false, false, false, 82), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Joining Date:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 87
        echo twig_escape_filter($this->env, _twig_default_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 87, $this->source); })()), "joinAt", [], "any", false, false, false, 87), "d/m/Y"), ""), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

                            <div class=\"col-md-4\">
                                <ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Birthday:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 96
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 96, $this->source); })()), "utilisateur", [], "any", false, false, false, 96), "personne", [], "any", false, false, false, 96), "bornAt", [], "any", false, false, false, 96), "d/m/Y"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
                            </div>

                            <div class=\"col-md-4\">
                                <ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Born at:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 105, $this->source); })()), "utilisateur", [], "any", false, false, false, 105), "personne", [], "any", false, false, false, 105), "lieuNaissance", [], "any", false, false, false, 105), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
                            </div>

                            <div class=\"col-md-4\">
                                <ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Country:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 114, $this->source); })()), "utilisateur", [], "any", false, false, false, 114), "personne", [], "any", false, false, false, 114), "pays", [], "any", false, false, false, 114), "name", [], "any", false, false, false, 114), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
                            </div>

\t\t\t\t\t\t\t<!-- Information item -->
\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Code & link:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 124, $this->source); })()), "utilisateur", [], "any", false, false, false, 124), "personne", [], "any", false, false, false, 124), "invitationCode", [], "any", false, false, false, 124), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
                            <div class=\"col-12\">
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Link for instructors:</span> 
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 132, $this->source); })()), "utilisateur", [], "any", false, false, false, 132), "personne", [], "any", false, false, false, 132), "invitationLink", [], "any", false, false, false, 132), "trainer", [], "any", false, false, false, 132), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

                            <div class=\"col-12\">
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Link for students:</span> 
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 141, $this->source); })()), "utilisateur", [], "any", false, false, false, 141), "personne", [], "any", false, false, false, 141), "invitationLink", [], "any", false, false, false, 141), "student", [], "any", false, false, false, 141), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Information item -->
\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item d-flex\">
\t\t\t\t\t\t\t\t\t\t<span>Description:</span>
\t\t\t\t\t\t\t\t\t\t<p class=\"h6 mb-0\">";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 151, $this->source); })()), "details", [], "any", false, false, false, 151), "html", null, true);
        echo "</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Information END -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Card body END -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Personal information END -->

\t\t\t<!-- Student status chart START -->
\t\t\t<div class=\"col-xxl-5\">
\t\t\t\t<div class=\"row g-4\">
\t\t\t\t\t<!-- Active student START -->
\t\t\t\t\t<div class=\"col-md-6 col-xxl-12\">
\t\t\t\t\t\t<div class=\"card bg-transparent border overflow-hidden\">
\t\t\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t\t\t<div class=\"card-header bg-light border-bottom\">
\t\t\t\t\t\t\t\t<h5 class=\"card-header-title mb-0\">Active Students</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between p-4\">
\t\t\t\t\t\t\t\t\t<h4 class=\"text-blue mb-0\">984</h4>
\t\t\t\t\t\t\t\t\t<p class=\"mb-0\"><span class=\"text-success me-1\">0.20%<i class=\"bi bi-arrow-up\"></i></span>vs last Week</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Apex chart -->
\t\t\t\t\t\t\t\t<div id=\"activeChartstudent\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Active student END -->

\t\t\t\t\t<!-- Enrolled START -->
\t\t\t\t\t<div class=\"col-md-6 col-xxl-12\">
\t\t\t\t\t\t<div class=\"card bg-transparent border overflow-hidden\">
\t\t\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t\t\t<div class=\"card-header bg-light border-bottom\">
\t\t\t\t\t\t\t\t<h5 class=\"card-header-title mb-0\">New Enrollment</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between p-4\">
\t\t\t\t\t\t\t\t\t<h4 class=\"text-blue mb-0\">140</h4>
\t\t\t\t\t\t\t\t\t<p class=\"mb-0\"><span class=\"text-success me-1\">0.35%<i class=\"bi bi-arrow-up\"></i></span>vs last Week</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Apex chart -->
\t\t\t\t\t\t\t\t<div id=\"activeChartstudent2\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Enrolled END -->

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Student status chart END -->

            <!-- Instructor Files list START -->
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"card bg-transparent border h-100\">

\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t<div class=\"card-header bg-light border-bottom\">
\t\t\t\t\t\t<h5 class=\"mb-0\">KYC</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Card body START -->
\t\t\t\t\t<div class=\"card-body pb-0\">
                        <!-- Image START -->
\t\t\t\t\t\t<div class=\"row g-4 mt-4\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/enseignants/kyc/" . twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 224, $this->source); })()), "diplome", [], "any", false, false, false, 224))), "html", null, true);
        echo "\" data-glightbox data-gallery=\"image-popup\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/enseignants/kyc/" . twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 225, $this->source); })()), "diplome", [], "any", false, false, false, 225))), "html", null, true);
        echo "\" class=\"rounded-3\" alt=\"\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/enseignants/kyc/" . twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 230, $this->source); })()), "emploiDuTemps", [], "any", false, false, false, 230))), "html", null, true);
        echo "\" data-glightbox data-gallery=\"image-popup\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/enseignants/kyc/" . twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 231, $this->source); })()), "emploiDuTemps", [], "any", false, false, false, 231))), "html", null, true);
        echo "\" class=\"rounded-3\" alt=\"\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/enseignants/kyc/" . twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 236, $this->source); })()), "selfieCNI", [], "any", false, false, false, 236))), "html", null, true);
        echo "\" data-glightbox data-gallery=\"image-popup\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/enseignants/kyc/" . twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 237, $this->source); })()), "selfieCNI", [], "any", false, false, false, 237))), "html", null, true);
        echo "\" class=\"rounded-3\" alt=\"\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 242
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/enseignants/kyc/" . twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 242, $this->source); })()), "rectoCNI", [], "any", false, false, false, 242))), "html", null, true);
        echo "\" data-glightbox data-gallery=\"image-popup\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/enseignants/kyc/" . twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 243, $this->source); })()), "rectoCNI", [], "any", false, false, false, 243))), "html", null, true);
        echo "\" class=\"rounded-3\" alt=\"\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/enseignants/kyc/" . twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 248, $this->source); })()), "versoCNI", [], "any", false, false, false, 248))), "html", null, true);
        echo "\" data-glightbox data-gallery=\"image-popup\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 249
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/enseignants/kyc/" . twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 249, $this->source); })()), "versoCNI", [], "any", false, false, false, 249))), "html", null, true);
        echo "\" class=\"rounded-3\" alt=\"\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t<!-- Image END -->
                    </div>
                </div>
            </div>
\t\t
\t\t\t<!-- Instructor course list START -->
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"card bg-transparent border h-100\">

\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t<div class=\"card-header bg-light border-bottom\">
\t\t\t\t\t\t<h5 class=\"mb-0\">Courses List</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Card body START -->
\t\t\t\t\t<div class=\"card-body pb-0\">
\t\t\t\t\t\t<!-- Table START -->
\t\t\t\t\t\t<div class=\"table-responsive border-0\" style=\"max-height: 600px;overflow: auto;\">
\t\t\t\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">

\t\t\t\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Course Name</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Enrolled</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Status</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 285
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 285, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 286
            echo "                                        
                                        <tr>
                                            <!-- Table data -->
                                            <td class=\"d-flex align-items-center position-relative\">
                                                <div class=\"w-60px\"><img src=\"";
            // line 290
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/courses/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["course"], "media", [], "any", false, false, false, 290), "imageFile", [], "any", false, false, false, 290))), "html", null, true);
            echo "\" class=\"rounded\" alt=\"\"></div>
                                                <h6 class=\"table-responsive-title mb-0 ms-2\"><a target=\"_blank\" href=\"";
            // line 291
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_course_details", ["slug" => twig_get_attribute($this->env, $this->source, $context["course"], "slug", [], "any", false, false, false, 291)]), "html", null, true);
            echo "\" class=\"stretched-link\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "intitule", [], "any", false, false, false, 291), "html", null, true);
            echo "</a></h6>
                                            </td>

                                            <!-- Table data -->
                                            <td>";
            // line 295
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "eleves", [], "any", false, false, false, 295)) < 10)) ? (("0" . twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "eleves", [], "any", false, false, false, 295)))) : (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "eleves", [], "any", false, false, false, 295)))), "html", null, true);
            echo "</td>

                                            <!-- Table data -->
                                            <td>
                                                ";
            // line 299
            if (twig_get_attribute($this->env, $this->source, $context["course"], "isValidated", [], "any", false, false, false, 299)) {
                // line 300
                echo "                                                    <span class=\"badge bg-success bg-opacity-15 text-success\">Live</span>
                                                ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 301
$context["course"], "isRejected", [], "any", false, false, false, 301)) {
                // line 302
                echo "                                                    <span class=\"badge bg-danger bg-opacity-15 text-danger\">Rejected</span>
                                                ";
            } elseif (twig_get_attribute($this->env, $this->source,             // line 303
$context["course"], "isPublished", [], "any", false, false, false, 303)) {
                // line 304
                echo "                                                    <span class=\"badge bg-warning bg-opacity-15 text-warning\">Pending</span>
                                                ";
            } else {
                // line 306
                echo "                                                    <span class=\"badge bg-primary bg-opacity-15 text-primary\">Creating</span>
                                                ";
            }
            // line 308
            echo "                                            </td>

                                            <!-- Table data -->
                                            <td>
                                                <a href=\"";
            // line 312
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_course_details", ["slug" => twig_get_attribute($this->env, $this->source, $context["course"], "slug", [], "any", false, false, false, 312)]), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-sm btn-info-soft mb-0\">View</a>
                                            </td>
                                        </tr>

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 317
        echo "\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t<!-- Table body END -->
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Table END -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Card body END -->

\t\t\t\t\t<!-- Card footer START -->
\t\t\t\t\t<div class=\"card-footer bg-transparent\">
\t\t\t\t\t\t<!-- Pagination START -->
\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-sm-between align-items-sm-center\">
                            
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Pagination END -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Card footer END -->
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<!-- Instructor course list END -->

\t\t\t<!-- Student review START -->
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"card bg-transparent border\">

\t\t\t\t\t<!-- Card header START -->
\t\t\t\t\t<div class=\"card-header border-bottom bg-light\">
\t\t\t\t\t\t<h5 class=\"mb-0\">All Reviews</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Card header END -->
\t\t
\t\t\t\t\t<!-- Card body START -->
\t\t\t\t\t<div class=\"card-body pb-0\">
\t\t\t\t\t\t<!-- Table START -->
\t\t\t\t\t\t<div class=\"table-responsive border-0\">
\t\t\t\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
\t\t\t\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Student Name</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Course Name</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Rating</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t
\t\t\t\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 367
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 367, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 368
            echo "                                        <!-- Table row -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <div class=\"d-flex align-items-center position-relative\">
                                                    <!-- Image -->
                                                    <div class=\"avatar avatar-xs mb-2 mb-md-0\">
                                                        <img src=\"";
            // line 375
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/eleves/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["review"], "eleve", [], "any", false, false, false, 375), "utilisateur", [], "any", false, false, false, 375), "personne", [], "any", false, false, false, 375), "avatar", [], "any", false, false, false, 375))), "html", null, true);
            echo "\" class=\"rounded-circle\" alt=\"\">
                                                    </div>
                                                    <div class=\"mb-0 ms-2\">
                                                        <!-- Title -->
                                                        <h6 class=\"mb-0\"><a href=\"#\" class=\"stretched-link\">";
            // line 379
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["review"], "eleve", [], "any", false, false, false, 379), "utilisateur", [], "any", false, false, false, 379), "personne", [], "any", false, false, false, 379), "nomComplet", [], "any", false, false, false, 379), "html", null, true);
            echo "</a></h6>
                                                    </div>
                                                </div>
                                            </td>
            
                                            <!-- Table data -->
                                            <td>
                                                <h6 class=\"table-responsive-title mb-0\"><a href=\"#\">";
            // line 386
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["review"], "cours", [], "any", false, false, false, 386), "intitule", [], "any", false, false, false, 386), "html", null, true);
            echo "</a></h6>
                                            </td>
            
                                            <!-- Table data -->
                                            <td>
                                                <ul class=\"list-inline mb-0\">
                                                    ";
            // line 392
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 392)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 393
                echo "                                                        <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 395
            echo "                                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 395) < 5)) {
                // line 396
                echo "                                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 396), 4));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 397
                    echo "                                                            <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 399
                echo "                                                    ";
            }
            // line 400
            echo "                                                </ul>
                                            </td>
            
                                            <!-- Table data -->
                                            <td>
                                                <a href=\"#\" class=\"btn btn-sm btn-info-soft mb-0\" data-bs-toggle=\"modal\" data-bs-target=\"#viewReview";
            // line 405
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 405), "html", null, true);
            echo "\">View</a>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 409
        echo "
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t<!-- Table body END -->
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Table END -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Card body END -->
\t\t
\t\t\t\t\t<!-- Card footer START -->
\t\t\t\t\t<div class=\"card-footer bg-transparent\">
\t\t\t\t\t\t<!-- Pagination START -->
\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-sm-between align-items-sm-center\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Pagination END -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Card footer END -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Student review END -->

\t\t</div> 


    ";
        // line 434
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 434, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 435
            echo "        <!-- Popup modal for reviwe START -->
        <div class=\"modal fade\" id=\"viewReview";
            // line 436
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 436), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"viewReviewLabel";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 436), "html", null, true);
            echo "\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                    <!-- Modal header -->
                    <div class=\"modal-header bg-dark\">
                        <h5 class=\"modal-title text-white\" id=\"viewReviewLabel\">Review</h5>
                        <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
                    </div>
                    <!-- Modal body -->
                    <div class=\"modal-body\">
                        <div class=\"d-md-flex\">
                            <!-- Avatar -->
                            <div class=\"avatar avatar-md me-4 flex-shrink-0\">
                                <img class=\"avatar-img rounded-circle\" src=\"";
            // line 449
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/eleves/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["review"], "eleve", [], "any", false, false, false, 449), "utilisateur", [], "any", false, false, false, 449), "personne", [], "any", false, false, false, 449), "avatar", [], "any", false, false, false, 449))), "html", null, true);
            echo "\" alt=\"avatar\">
                            </div>
                            <!-- Text -->
                            <div>
                                <div class=\"d-sm-flex mt-1 mt-md-0 align-items-center\">
                                    <h5 class=\"me-3 mb-0\">";
            // line 454
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["review"], "eleve", [], "any", false, false, false, 454), "utilisateur", [], "any", false, false, false, 454), "personne", [], "any", false, false, false, 454), "nomComplet", [], "any", false, false, false, 454), "html", null, true);
            echo "</h5>
                                    <!-- Review star -->
                                    <ul class=\"list-inline mb-0\">
                                        ";
            // line 457
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 457)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 458
                echo "                                            <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 460
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 460) < 5)) {
                // line 461
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 461), 4));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 462
                    echo "                                                <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 464
                echo "                                        ";
            }
            // line 465
            echo "                                    </ul>
                                </div>
                                <!-- Info -->
                                <p class=\"small mb-2\">";
            // line 468
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "createdAt", [], "any", false, false, false, 468), "d/m/Y"), "html", null, true);
            echo "</p>
                                <p class=\"mb-2\">";
            // line 469
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "message", [], "any", false, false, false, 469), "html", null, true);
            echo "</p>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popup modal for reviwe END -->
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 481
        echo "    
\t";
        // line 482
        echo twig_include($this->env, $context, "admin/enseignant/_reject_modal.html.twig", ["e" => (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 482, $this->source); })())]);
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/enseignant/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  824 => 482,  821 => 481,  803 => 469,  799 => 468,  794 => 465,  791 => 464,  784 => 462,  779 => 461,  776 => 460,  769 => 458,  765 => 457,  759 => 454,  751 => 449,  733 => 436,  730 => 435,  726 => 434,  699 => 409,  689 => 405,  682 => 400,  679 => 399,  672 => 397,  667 => 396,  664 => 395,  657 => 393,  653 => 392,  644 => 386,  634 => 379,  627 => 375,  618 => 368,  614 => 367,  562 => 317,  551 => 312,  545 => 308,  541 => 306,  537 => 304,  535 => 303,  532 => 302,  530 => 301,  527 => 300,  525 => 299,  518 => 295,  509 => 291,  505 => 290,  499 => 286,  495 => 285,  456 => 249,  452 => 248,  444 => 243,  440 => 242,  432 => 237,  428 => 236,  420 => 231,  416 => 230,  408 => 225,  404 => 224,  328 => 151,  315 => 141,  303 => 132,  292 => 124,  279 => 114,  267 => 105,  255 => 96,  243 => 87,  235 => 82,  227 => 77,  214 => 67,  206 => 62,  198 => 57,  190 => 52,  176 => 41,  158 => 25,  148 => 24,  137 => 21,  129 => 19,  126 => 18,  120 => 16,  118 => 15,  115 => 14,  105 => 13,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block pageTitle %}Instructor details{% endblock %}

{% block script %}
    <script>
\t\t\$('#admin_filter_select_courses').on('change', (e) => {
\t\t\twindow.location.href = \$(e.currentTarget).val()
\t\t})
\t</script>
{% endblock %}

{% block actionBtn %}
\t<p class=\"text-right\">
        {% if not enseignant.isValidated %}
            {{ include(\"admin/enseignant/_accept.html.twig\", {e: enseignant}) }}
        {% endif %}
        {% if not enseignant.isRejected %}
            <a href=\"{{ path('app_admin_enseignant_reject_request', {reference: enseignant.reference}) }}\" class=\"btn btn-secondary-soft btn-sm me-1 mb-1 mb-lg-0\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-reject-request-{{ enseignant.id }}\">Reject</a>
        {% endif %}
    </p>
{% endblock %}

{% block mainContent %}

    <div class=\"row g-4\">

\t\t\t<!-- Personal information START -->
\t\t\t<div class=\"col-xxl-7\">
\t\t\t\t<div class=\"card bg-transparent border rounded-3 h-100\">

\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t<div class=\"card-header bg-light border-bottom\">
\t\t\t\t\t\t<h5 class=\"card-header-title mb-0\">Personal Information</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Card body START -->
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<!-- Profile picture -->
\t\t\t\t\t\t<div class=\"avatar avatar-xl mb-3\">
\t\t\t\t\t\t\t<img class=\"avatar-img rounded-circle border border-white border-3 shadow\" src=\"{{ asset('uploads/images/enseignants/kyc/' ~ enseignant.utilisateur.personne.avatar) }}\" alt=\"\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Information START -->
\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t<!-- Information item -->
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Title:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ enseignant.utilisateur.personne.sexe|upper is same as 'MASCULIN' ? 'Mr' : 'Miss' }}</span>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Full Name:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ enseignant.utilisateur.personne.nomComplet }}</span>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>User Name:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ enseignant.utilisateur.personne.pseudo }}</span>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Mobile Number:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ enseignant.utilisateur.personne.telephone }}</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Information item -->
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Email ID:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ enseignant.utilisateur.email }}</span>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Location:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ enseignant.utilisateur.personne.adresse }}</span>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Joining Date:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ enseignant.joinAt|date('d/m/Y')|default('') }}</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

                            <div class=\"col-md-4\">
                                <ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Birthday:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ enseignant.utilisateur.personne.bornAt|date('d/m/Y') }}</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
                            </div>

                            <div class=\"col-md-4\">
                                <ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Born at:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ enseignant.utilisateur.personne.lieuNaissance }}</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
                            </div>

                            <div class=\"col-md-4\">
                                <ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Country:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ enseignant.utilisateur.personne.pays.name }}</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
                            </div>

\t\t\t\t\t\t\t<!-- Information item -->
\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Code & link:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ enseignant.utilisateur.personne.invitationCode }}</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
                            <div class=\"col-12\">
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Link for instructors:</span> 
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ enseignant.utilisateur.personne.invitationLink.trainer }}</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

                            <div class=\"col-12\">
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Link for students:</span> 
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ enseignant.utilisateur.personne.invitationLink.student }}</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Information item -->
\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item d-flex\">
\t\t\t\t\t\t\t\t\t\t<span>Description:</span>
\t\t\t\t\t\t\t\t\t\t<p class=\"h6 mb-0\">{{ enseignant.details }}</p>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Information END -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Card body END -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Personal information END -->

\t\t\t<!-- Student status chart START -->
\t\t\t<div class=\"col-xxl-5\">
\t\t\t\t<div class=\"row g-4\">
\t\t\t\t\t<!-- Active student START -->
\t\t\t\t\t<div class=\"col-md-6 col-xxl-12\">
\t\t\t\t\t\t<div class=\"card bg-transparent border overflow-hidden\">
\t\t\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t\t\t<div class=\"card-header bg-light border-bottom\">
\t\t\t\t\t\t\t\t<h5 class=\"card-header-title mb-0\">Active Students</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between p-4\">
\t\t\t\t\t\t\t\t\t<h4 class=\"text-blue mb-0\">984</h4>
\t\t\t\t\t\t\t\t\t<p class=\"mb-0\"><span class=\"text-success me-1\">0.20%<i class=\"bi bi-arrow-up\"></i></span>vs last Week</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Apex chart -->
\t\t\t\t\t\t\t\t<div id=\"activeChartstudent\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Active student END -->

\t\t\t\t\t<!-- Enrolled START -->
\t\t\t\t\t<div class=\"col-md-6 col-xxl-12\">
\t\t\t\t\t\t<div class=\"card bg-transparent border overflow-hidden\">
\t\t\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t\t\t<div class=\"card-header bg-light border-bottom\">
\t\t\t\t\t\t\t\t<h5 class=\"card-header-title mb-0\">New Enrollment</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between p-4\">
\t\t\t\t\t\t\t\t\t<h4 class=\"text-blue mb-0\">140</h4>
\t\t\t\t\t\t\t\t\t<p class=\"mb-0\"><span class=\"text-success me-1\">0.35%<i class=\"bi bi-arrow-up\"></i></span>vs last Week</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Apex chart -->
\t\t\t\t\t\t\t\t<div id=\"activeChartstudent2\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Enrolled END -->

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Student status chart END -->

            <!-- Instructor Files list START -->
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"card bg-transparent border h-100\">

\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t<div class=\"card-header bg-light border-bottom\">
\t\t\t\t\t\t<h5 class=\"mb-0\">KYC</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Card body START -->
\t\t\t\t\t<div class=\"card-body pb-0\">
                        <!-- Image START -->
\t\t\t\t\t\t<div class=\"row g-4 mt-4\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/images/enseignants/kyc/' ~ enseignant.diplome) }}\" data-glightbox data-gallery=\"image-popup\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/images/enseignants/kyc/' ~ enseignant.diplome) }}\" class=\"rounded-3\" alt=\"\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-6\">
\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/images/enseignants/kyc/' ~ enseignant.emploiDuTemps) }}\" data-glightbox data-gallery=\"image-popup\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/images/enseignants/kyc/' ~ enseignant.emploiDuTemps) }}\" class=\"rounded-3\" alt=\"\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/images/enseignants/kyc/' ~ enseignant.selfieCNI) }}\" data-glightbox data-gallery=\"image-popup\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/images/enseignants/kyc/' ~ enseignant.selfieCNI) }}\" class=\"rounded-3\" alt=\"\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/images/enseignants/kyc/' ~ enseignant.rectoCNI) }}\" data-glightbox data-gallery=\"image-popup\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/images/enseignants/kyc/' ~ enseignant.rectoCNI) }}\" class=\"rounded-3\" alt=\"\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4\">
\t\t\t\t\t\t\t\t<a href=\"{{ asset('uploads/images/enseignants/kyc/' ~ enseignant.versoCNI) }}\" data-glightbox data-gallery=\"image-popup\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/images/enseignants/kyc/' ~ enseignant.versoCNI) }}\" class=\"rounded-3\" alt=\"\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t<!-- Image END -->
                    </div>
                </div>
            </div>
\t\t
\t\t\t<!-- Instructor course list START -->
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"card bg-transparent border h-100\">

\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t<div class=\"card-header bg-light border-bottom\">
\t\t\t\t\t\t<h5 class=\"mb-0\">Courses List</h5>
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Card body START -->
\t\t\t\t\t<div class=\"card-body pb-0\">
\t\t\t\t\t\t<!-- Table START -->
\t\t\t\t\t\t<div class=\"table-responsive border-0\" style=\"max-height: 600px;overflow: auto;\">
\t\t\t\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">

\t\t\t\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Course Name</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Enrolled</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Status</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for course in courses %}
                                        
                                        <tr>
                                            <!-- Table data -->
                                            <td class=\"d-flex align-items-center position-relative\">
                                                <div class=\"w-60px\"><img src=\"{{ asset('uploads/media/courses/' ~ course.media.imageFile) }}\" class=\"rounded\" alt=\"\"></div>
                                                <h6 class=\"table-responsive-title mb-0 ms-2\"><a target=\"_blank\" href=\"{{ path('app_front_course_details', {slug: course.slug}) }}\" class=\"stretched-link\">{{ course.intitule }}</a></h6>
                                            </td>

                                            <!-- Table data -->
                                            <td>{{ course.eleves|length < 10 ? '0' ~ course.eleves|length : course.eleves|length }}</td>

                                            <!-- Table data -->
                                            <td>
                                                {% if course.isValidated %}
                                                    <span class=\"badge bg-success bg-opacity-15 text-success\">Live</span>
                                                {% elseif course.isRejected %}
                                                    <span class=\"badge bg-danger bg-opacity-15 text-danger\">Rejected</span>
                                                {% elseif course.isPublished %}
                                                    <span class=\"badge bg-warning bg-opacity-15 text-warning\">Pending</span>
                                                {% else %}
                                                    <span class=\"badge bg-primary bg-opacity-15 text-primary\">Creating</span>
                                                {% endif %}
                                            </td>

                                            <!-- Table data -->
                                            <td>
                                                <a href=\"{{ path('app_front_course_details', {slug: course.slug}) }}\" target=\"_blank\" class=\"btn btn-sm btn-info-soft mb-0\">View</a>
                                            </td>
                                        </tr>

                                    {% endfor %}
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t<!-- Table body END -->
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Table END -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Card body END -->

\t\t\t\t\t<!-- Card footer START -->
\t\t\t\t\t<div class=\"card-footer bg-transparent\">
\t\t\t\t\t\t<!-- Pagination START -->
\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-sm-between align-items-sm-center\">
                            
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Pagination END -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Card footer END -->
\t\t\t\t</div>
\t\t\t</div>


\t\t\t<!-- Instructor course list END -->

\t\t\t<!-- Student review START -->
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"card bg-transparent border\">

\t\t\t\t\t<!-- Card header START -->
\t\t\t\t\t<div class=\"card-header border-bottom bg-light\">
\t\t\t\t\t\t<h5 class=\"mb-0\">All Reviews</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Card header END -->
\t\t
\t\t\t\t\t<!-- Card body START -->
\t\t\t\t\t<div class=\"card-body pb-0\">
\t\t\t\t\t\t<!-- Table START -->
\t\t\t\t\t\t<div class=\"table-responsive border-0\">
\t\t\t\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
\t\t\t\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Student Name</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Course Name</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Rating</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t
\t\t\t\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for review in reviews %}
                                        <!-- Table row -->
                                        <tr>
                                            <!-- Table data -->
                                            <td>
                                                <div class=\"d-flex align-items-center position-relative\">
                                                    <!-- Image -->
                                                    <div class=\"avatar avatar-xs mb-2 mb-md-0\">
                                                        <img src=\"{{ asset('uploads/images/eleves/' ~ review.eleve.utilisateur.personne.avatar) }}\" class=\"rounded-circle\" alt=\"\">
                                                    </div>
                                                    <div class=\"mb-0 ms-2\">
                                                        <!-- Title -->
                                                        <h6 class=\"mb-0\"><a href=\"#\" class=\"stretched-link\">{{ review.eleve.utilisateur.personne.nomComplet }}</a></h6>
                                                    </div>
                                                </div>
                                            </td>
            
                                            <!-- Table data -->
                                            <td>
                                                <h6 class=\"table-responsive-title mb-0\"><a href=\"#\">{{ review.cours.intitule }}</a></h6>
                                            </td>
            
                                            <!-- Table data -->
                                            <td>
                                                <ul class=\"list-inline mb-0\">
                                                    {% for i in 1..review.rating %}
                                                        <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                                    {% endfor %}
                                                    {% if review.rating < 5 %}
                                                        {% for i in review.rating..4 %}
                                                            <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                                                        {% endfor %}
                                                    {% endif %}
                                                </ul>
                                            </td>
            
                                            <!-- Table data -->
                                            <td>
                                                <a href=\"#\" class=\"btn btn-sm btn-info-soft mb-0\" data-bs-toggle=\"modal\" data-bs-target=\"#viewReview{{ review.id }}\">View</a>
                                            </td>
                                        </tr>
                                    {% endfor %}

\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t<!-- Table body END -->
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Table END -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Card body END -->
\t\t
\t\t\t\t\t<!-- Card footer START -->
\t\t\t\t\t<div class=\"card-footer bg-transparent\">
\t\t\t\t\t\t<!-- Pagination START -->
\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-sm-between align-items-sm-center\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Pagination END -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Card footer END -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Student review END -->

\t\t</div> 


    {% for review in reviews %}
        <!-- Popup modal for reviwe START -->
        <div class=\"modal fade\" id=\"viewReview{{ review.id }}\" tabindex=\"-1\" aria-labelledby=\"viewReviewLabel{{ review.id }}\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                    <!-- Modal header -->
                    <div class=\"modal-header bg-dark\">
                        <h5 class=\"modal-title text-white\" id=\"viewReviewLabel\">Review</h5>
                        <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
                    </div>
                    <!-- Modal body -->
                    <div class=\"modal-body\">
                        <div class=\"d-md-flex\">
                            <!-- Avatar -->
                            <div class=\"avatar avatar-md me-4 flex-shrink-0\">
                                <img class=\"avatar-img rounded-circle\" src=\"{{ asset('uploads/images/eleves/' ~ review.eleve.utilisateur.personne.avatar) }}\" alt=\"avatar\">
                            </div>
                            <!-- Text -->
                            <div>
                                <div class=\"d-sm-flex mt-1 mt-md-0 align-items-center\">
                                    <h5 class=\"me-3 mb-0\">{{ review.eleve.utilisateur.personne.nomComplet }}</h5>
                                    <!-- Review star -->
                                    <ul class=\"list-inline mb-0\">
                                        {% for i in 1..review.rating %}
                                            <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                        {% endfor %}
                                        {% if review.rating < 5 %}
                                            {% for i in review.rating..4 %}
                                                <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                                            {% endfor %}
                                        {% endif %}
                                    </ul>
                                </div>
                                <!-- Info -->
                                <p class=\"small mb-2\">{{ review.createdAt|date('d/m/Y') }}</p>
                                <p class=\"mb-2\">{{ review.message }}</p>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Popup modal for reviwe END -->
    {% endfor %}
    
\t{{ include(\"admin/enseignant/_reject_modal.html.twig\", {e: enseignant}) }}

{% endblock %}
", "admin/enseignant/show.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\enseignant\\show.html.twig");
    }
}
