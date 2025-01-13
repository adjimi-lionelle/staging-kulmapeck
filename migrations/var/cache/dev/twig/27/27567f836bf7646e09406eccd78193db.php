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

/* admin/eleve/show.html.twig */
class __TwigTemplate_c74639189aaf37b36b23177f49cf8924 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/eleve/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/eleve/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/eleve/show.html.twig", 1);
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

        echo "Student details";
        
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
        echo "\t";
        $context["student"] = (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 6, $this->source); })());
        // line 7
        echo "    <div class=\"row g-4\">

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
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<div class=\"avatar mb-3\" style=\"min-width: 14rem;height: 14rem;\">
\t\t\t\t\t\t\t\t<img class=\"avatar-img border border-white border-3 shadow\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 23, $this->source); })()), "utilisateur", [], "any", false, false, false, 23), "personne", [], "any", false, false, false, 23), "avatarPath", [], "any", false, false, false, 23)), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"p-4 pt-2\">
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Title:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 29
        echo (((twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 29, $this->source); })()), "utilisateur", [], "any", false, false, false, 29), "personne", [], "any", false, false, false, 29), "sexe", [], "any", false, false, false, 29)) === "MASCULIN")) ? ("Mr") : ("Miss"));
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Full Name:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 34, $this->source); })()), "utilisateur", [], "any", false, false, false, 34), "personne", [], "any", false, false, false, 34), "nomComplet", [], "any", false, false, false, 34), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>User Name:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 39, $this->source); })()), "utilisateur", [], "any", false, false, false, 39), "personne", [], "any", false, false, false, 39), "pseudo", [], "any", false, false, false, 39), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Mobile Number:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 44, $this->source); })()), "utilisateur", [], "any", false, false, false, 44), "personne", [], "any", false, false, false, 44), "telephone", [], "any", false, false, false, 44), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Email ID:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 48, $this->source); })()), "utilisateur", [], "any", false, false, false, 48), "email", [], "any", false, false, false, 48), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Location:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 53, $this->source); })()), "utilisateur", [], "any", false, false, false, 53), "personne", [], "any", false, false, false, 53), "adresse", [], "any", false, false, false, 53), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Information START -->
\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t<!-- Information item -->
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Sous system:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 68
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eleve"] ?? null), "classe", [], "any", false, true, false, 68), "sousSystme", [], "any", false, true, false, 68), "name", [], "any", true, true, false, 68)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eleve"] ?? null), "classe", [], "any", false, true, false, 68), "sousSystme", [], "any", false, true, false, 68), "name", [], "any", false, false, false, 68), "Undefined")) : ("Undefined")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Type of :</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 72
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eleve"] ?? null), "classe", [], "any", false, true, false, 72), "specialite", [], "any", false, true, false, 72), "filiere", [], "any", false, true, false, 72), "typeEnseignement", [], "any", false, true, false, 72), "name", [], "any", true, true, false, 72)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eleve"] ?? null), "classe", [], "any", false, true, false, 72), "specialite", [], "any", false, true, false, 72), "filiere", [], "any", false, true, false, 72), "typeEnseignement", [], "any", false, true, false, 72), "name", [], "any", false, false, false, 72), "Undefined")) : ("Undefined")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Filière</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 76
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eleve"] ?? null), "classe", [], "any", false, true, false, 76), "specialite", [], "any", false, true, false, 76), "filiere", [], "any", false, true, false, 76), "name", [], "any", true, true, false, 76)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eleve"] ?? null), "classe", [], "any", false, true, false, 76), "specialite", [], "any", false, true, false, 76), "filiere", [], "any", false, true, false, 76), "name", [], "any", false, false, false, 76), "Undefined")) : ("Undefined")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Joining Date:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 80
        echo twig_escape_filter($this->env, _twig_default_filter(twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 80, $this->source); })()), "joinAt", [], "any", false, false, false, 80), "d/m/Y"), ""), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Spécialité:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 89
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eleve"] ?? null), "classe", [], "any", false, true, false, 89), "specialite", [], "any", false, true, false, 89), "name", [], "any", true, true, false, 89)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eleve"] ?? null), "classe", [], "any", false, true, false, 89), "specialite", [], "any", false, true, false, 89), "name", [], "any", false, false, false, 89), "Undefined")) : ("Undefined")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Classe:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 93
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eleve"] ?? null), "classe", [], "any", false, true, false, 93), "name", [], "any", true, true, false, 93)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eleve"] ?? null), "classe", [], "any", false, true, false, 93), "name", [], "any", false, false, false, 93), "Undefined")) : ("Undefined")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Ecole:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 97
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eleve"] ?? null), "etablissement", [], "any", false, true, false, 97), "name", [], "any", true, true, false, 97)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["eleve"] ?? null), "etablissement", [], "any", false, true, false, 97), "name", [], "any", false, false, false, 97), "Undefined")) : ("Undefined")), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

                            <div class=\"col-md-4\">
                                <ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Birthday:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 106
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 106, $this->source); })()), "utilisateur", [], "any", false, false, false, 106), "personne", [], "any", false, false, false, 106), "bornAt", [], "any", false, false, false, 106), "d/m/Y"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
                            </div>

                            <div class=\"col-md-4\">
                                <ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Born at:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 115, $this->source); })()), "utilisateur", [], "any", false, false, false, 115), "personne", [], "any", false, false, false, 115), "lieuNaissance", [], "any", false, false, false, 115), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
                            </div>

                            <div class=\"col-md-4\">
                                <ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Country:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 124
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 124, $this->source); })()), "utilisateur", [], "any", false, false, false, 124), "personne", [], "any", false, false, false, 124), "pays", [], "any", false, false, false, 124), "name", [], "any", false, false, false, 124), "html", null, true);
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
        // line 134
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 134, $this->source); })()), "utilisateur", [], "any", false, false, false, 134), "personne", [], "any", false, false, false, 134), "invitationCode", [], "any", false, false, false, 134), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
                            <div class=\"col-12\">
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Link for instructors:</span> 
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 142, $this->source); })()), "utilisateur", [], "any", false, false, false, 142), "personne", [], "any", false, false, false, 142), "invitationLink", [], "any", false, false, false, 142), "trainer", [], "any", false, false, false, 142), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

                            <div class=\"col-12\">
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Link for students:</span> 
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">";
        // line 151
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 151, $this->source); })()), "utilisateur", [], "any", false, false, false, 151), "personne", [], "any", false, false, false, 151), "invitationLink", [], "any", false, false, false, 151), "student", [], "any", false, false, false, 151), "html", null, true);
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
        // line 161
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["eleve"] ?? null), "details", [], "any", true, true, false, 161)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["eleve"] ?? null), "details", [], "any", false, false, false, 161), "")) : ("")), "html", null, true);
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
\t\t\t\t\t\t\t\t<h5 class=\"card-header-title mb-0\">Payments</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between p-4\">
\t\t\t\t\t\t\t\t\t";
        // line 186
        $context["totalAmount"] = 0;
        // line 187
        echo "\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 187, $this->source); })()), "payments", [], "any", false, false, false, 187));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 188
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context["totalAmount"] = ((isset($context["totalAmount"]) || array_key_exists("totalAmount", $context) ? $context["totalAmount"] : (function () { throw new RuntimeError('Variable "totalAmount" does not exist.', 188, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["p"], "amount", [], "any", false, false, false, 188));
            // line 189
            echo "\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "\t\t\t\t\t\t\t\t\t<h4 class=\"text-blue mb-0\">";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalAmount"]) || array_key_exists("totalAmount", $context) ? $context["totalAmount"] : (function () { throw new RuntimeError('Variable "totalAmount" does not exist.', 190, $this->source); })()), 2), "html", null, true);
        echo " XAF</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"table-responsive border-0\" style=\"max-height: 250px;overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">

\t\t\t\t\t\t\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Date</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Type</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Amount</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 205
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 205, $this->source); })()), "payments", [], "any", false, false, false, 205));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 206
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 207
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payment"], "paidAt", [], "any", false, false, false, 207), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 208
            echo ((twig_get_attribute($this->env, $this->source, $context["payment"], "cours", [], "any", false, false, false, 208)) ? ("Buy Course") : ("Plan"));
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 209
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payment"], "amount", [], "any", false, false, false, 209), 2), "html", null, true);
            echo " XAF</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 215
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"3\">Empty</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 219
        echo "\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Active student END -->

\t\t\t\t\t<!-- Enrolled START -->
\t\t\t\t\t<div class=\"col-md-6 col-xxl-12\">
\t\t\t\t\t\t<div class=\"card bg-transparent border overflow-hidden\">
\t\t\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t\t\t<div class=\"card-header bg-light border-bottom\">
\t\t\t\t\t\t\t\t<h5 class=\"card-header-title mb-0\">Network</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between p-4\">
\t\t\t\t\t\t\t\t\t<h4 class=\"text-blue mb-0\">";
        // line 237
        echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 237, $this->source); })()), "utilisateur", [], "any", false, false, false, 237), "personne", [], "any", false, false, false, 237), "invites", [], "any", false, false, false, 237)) < 10)) ? (("0" . twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 237, $this->source); })()), "utilisateur", [], "any", false, false, false, 237), "personne", [], "any", false, false, false, 237), "invites", [], "any", false, false, false, 237)))) : (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 237, $this->source); })()), "utilisateur", [], "any", false, false, false, 237), "personne", [], "any", false, false, false, 237), "invites", [], "any", false, false, false, 237)))), "html", null, true);
        echo "</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"table-responsive border-0\" style=\"max-height: 250px;overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">

\t\t\t\t\t\t\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Name</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Joining date</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Network</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 252
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 252, $this->source); })()), "utilisateur", [], "any", false, false, false, 252), "personne", [], "any", false, false, false, 252), "invites", [], "any", false, false, false, 252));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["inv"]) {
            // line 253
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"w-50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 258
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["inv"], "avatarPath", [], "any", false, false, false, 258)), "html", null, true);
            echo "\" class=\"rounded\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><a href=\"#\">";
            // line 262
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inv"], "nomComplet", [], "any", false, false, false, 262), "html", null, true);
            echo "</a></h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 267
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inv"], "joinAt", [], "any", false, false, false, 267), "d/m/Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 269
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["inv"], "invites", [], "any", false, false, false, 269)), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 272
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"3\">Empty</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inv'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 276
        echo "\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Enrolled END -->

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Student status chart END -->
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
\t\t\t\t\t\t<div class=\"table-responsive border-0\" style=\"max-height: 500px;overflow: auto;\">
\t\t\t\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
\t\t\t\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Course Title</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Total Lectures</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Completed Lecture</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t";
        // line 315
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 315, $this->source); })()), "cours", [], "any", false, false, false, 315));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 316
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context["leconTerminees"] = 0;
            // line 317
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 317, $this->source); })()), "lectures", [], "any", false, false, false, 317));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 318
                echo "\t\t\t\t\t\t\t\t\t\t\t";
                if (((twig_get_attribute($this->env, $this->source, $context["l"], "isFinished", [], "any", false, false, false, 318) &&  !(twig_get_attribute($this->env, $this->source, $context["l"], "lesson", [], "any", false, false, false, 318) === null)) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["l"], "lesson", [], "any", false, false, false, 318), "chapitre", [], "any", false, false, false, 318), "cours", [], "any", false, false, false, 318) === $context["course"]))) {
                    // line 319
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                    $context["leconTerminees"] = ((isset($context["leconTerminees"]) || array_key_exists("leconTerminees", $context) ? $context["leconTerminees"] : (function () { throw new RuntimeError('Variable "leconTerminees" does not exist.', 319, $this->source); })()) + 1);
                    // line 320
                    echo "\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 321
                echo "\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 322
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context["numberOfLessons"] = (((twig_get_attribute($this->env, $this->source, $context["course"], "numberOfLessons", [], "any", false, false, false, 322) > 0)) ? (twig_get_attribute($this->env, $this->source, $context["course"], "numberOfLessons", [], "any", false, false, false, 322)) : (1));
            // line 323
            echo "\t\t\t\t\t\t\t\t\t\t";
            $context["percent"] = (((isset($context["leconTerminees"]) || array_key_exists("leconTerminees", $context) ? $context["leconTerminees"] : (function () { throw new RuntimeError('Variable "leconTerminees" does not exist.', 323, $this->source); })()) * 100) / (isset($context["numberOfLessons"]) || array_key_exists("numberOfLessons", $context) ? $context["numberOfLessons"] : (function () { throw new RuntimeError('Variable "numberOfLessons" does not exist.', 323, $this->source); })()));
            // line 324
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"w-100px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 330
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/courses/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["course"], "media", [], "any", false, false, false, 330), "imageFile", [], "any", false, false, false, 330))), "html", null, true);
            echo "\" class=\"rounded\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><a href=\"";
            // line 334
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_course_start", ["slug" => twig_get_attribute($this->env, $this->source, $context["course"], "slug", [], "any", false, false, false, 334)], "http", false), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "intitule", [], "any", false, false, false, 334), "html", null, true);
            echo "</a></h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0 text-end\">";
            // line 337
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 337, $this->source); })()), 0), "html", null, true);
            echo "%</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-sm bg-primary bg-opacity-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary aos\" role=\"progressbar\" data-aos=\"slide-right\" data-aos-delay=\"200\" data-aos-duration=\"1000\" data-aos-easing=\"ease-in-out\" style=\"width: ";
            // line 339
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 339, $this->source); })()), 0), "html", null, true);
            echo "%\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 339, $this->source); })()), 0), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 348
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "numberOfLessons", [], "any", false, false, false, 348), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t\t\t\t<td>";
            // line 351
            echo twig_escape_filter($this->env, (isset($context["leconTerminees"]) || array_key_exists("leconTerminees", $context) ? $context["leconTerminees"] : (function () { throw new RuntimeError('Variable "leconTerminees" does not exist.', 351, $this->source); })()), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 355
            if (((isset($context["leconTerminees"]) || array_key_exists("leconTerminees", $context) ? $context["leconTerminees"] : (function () { throw new RuntimeError('Variable "leconTerminees" does not exist.', 355, $this->source); })()) === twig_get_attribute($this->env, $this->source, $context["course"], "numberOfLessons", [], "any", false, false, false, 355))) {
                // line 356
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-success me-1 mb-1 mb-x\"><i class=\"bi bi-check me-1\"></i>Complete</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-light me-1\"><i class=\"bi bi-arrow-repeat me-1\"></i>Restart</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 359
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"Continue\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_course_start", ["slug" => twig_get_attribute($this->env, $this->source, $context["course"], "slug", [], "any", false, false, false, 359)], "http", false), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0\"><i class=\"bi bi-play-circle me-1\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 361
            echo "\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 362
            if (twig_get_attribute($this->env, $this->source, $context["course"], "isFree", [], "any", false, false, false, 362)) {
                // line 363
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"return confirm('Etes-vous sure de vouloir supprimer ce cours de votre liste de lecture')\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_course_start", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 363, $this->source); })()), "reference", [], "any", false, false, false, 363), "slug" => twig_get_attribute($this->env, $this->source, $context["course"], "slug", [], "any", false, false, false, 363)], "http", false), "html", null, true);
                echo "\" class=\"btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0\"><i class=\"bi bi-trash me-1\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 365
            echo "\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 369
            echo "\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\">No Courses found</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 373
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

\t\t</div> 

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/eleve/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  664 => 373,  655 => 369,  647 => 365,  641 => 363,  639 => 362,  636 => 361,  630 => 359,  625 => 356,  623 => 355,  616 => 351,  610 => 348,  596 => 339,  591 => 337,  583 => 334,  576 => 330,  568 => 324,  565 => 323,  562 => 322,  556 => 321,  553 => 320,  550 => 319,  547 => 318,  542 => 317,  539 => 316,  534 => 315,  493 => 276,  484 => 272,  476 => 269,  471 => 267,  463 => 262,  456 => 258,  449 => 253,  444 => 252,  426 => 237,  406 => 219,  397 => 215,  386 => 209,  382 => 208,  378 => 207,  375 => 206,  370 => 205,  351 => 190,  345 => 189,  342 => 188,  337 => 187,  335 => 186,  307 => 161,  294 => 151,  282 => 142,  271 => 134,  258 => 124,  246 => 115,  234 => 106,  222 => 97,  215 => 93,  208 => 89,  196 => 80,  189 => 76,  182 => 72,  175 => 68,  157 => 53,  149 => 48,  142 => 44,  134 => 39,  126 => 34,  118 => 29,  109 => 23,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block pageTitle %}Student details{% endblock %}

{% block mainContent %}
\t{% set student = eleve %}
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
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<div class=\"avatar mb-3\" style=\"min-width: 14rem;height: 14rem;\">
\t\t\t\t\t\t\t\t<img class=\"avatar-img border border-white border-3 shadow\" src=\"{{ asset(eleve.utilisateur.personne.avatarPath) }}\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"p-4 pt-2\">
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Title:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ eleve.utilisateur.personne.sexe|upper is same as 'MASCULIN' ? 'Mr' : 'Miss' }}</span>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Full Name:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ eleve.utilisateur.personne.nomComplet }}</span>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>User Name:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ eleve.utilisateur.personne.pseudo }}</span>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Mobile Number:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ eleve.utilisateur.personne.telephone }}</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Email ID:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ eleve.utilisateur.email }}</span>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Location:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ eleve.utilisateur.personne.adresse }}</span>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Information START -->
\t\t\t\t\t\t<div class=\"row\">

\t\t\t\t\t\t\t<!-- Information item -->
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Sous system:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ eleve.classe.sousSystme.name|default('Undefined') }}</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Type of :</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ eleve.classe.specialite.filiere.typeEnseignement.name|default('Undefined') }}</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Filière</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ eleve.classe.specialite.filiere.name|default('Undefined') }}</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Joining Date:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ eleve.joinAt|date('d/m/Y')|default('') }}</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Spécialité:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ eleve.classe.specialite.name|default('Undefined') }}</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Classe:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ eleve.classe.name|default('Undefined') }}</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Ecole:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ eleve.etablissement.name|default('Undefined') }}</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

                            <div class=\"col-md-4\">
                                <ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Birthday:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ eleve.utilisateur.personne.bornAt|date('d/m/Y') }}</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
                            </div>

                            <div class=\"col-md-4\">
                                <ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Born at:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ eleve.utilisateur.personne.lieuNaissance }}</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
                            </div>

                            <div class=\"col-md-4\">
                                <ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Country:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ eleve.utilisateur.personne.pays.name }}</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
                            </div>

\t\t\t\t\t\t\t<!-- Information item -->
\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Code & link:</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ eleve.utilisateur.personne.invitationCode }}</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
                            <div class=\"col-12\">
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Link for instructors:</span> 
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ eleve.utilisateur.personne.invitationLink.trainer }}</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

                            <div class=\"col-12\">
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item\">
\t\t\t\t\t\t\t\t\t\t<span>Link for students:</span> 
\t\t\t\t\t\t\t\t\t\t<span class=\"h6 mb-0\">{{ eleve.utilisateur.personne.invitationLink.student }}</span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Information item -->
\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t<ul class=\"list-group list-group-borderless\">
\t\t\t\t\t\t\t\t\t<li class=\"list-group-item d-flex\">
\t\t\t\t\t\t\t\t\t\t<span>Description:</span>
\t\t\t\t\t\t\t\t\t\t<p class=\"h6 mb-0\">{{ eleve.details|default('') }}</p>
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
\t\t\t\t\t\t\t\t<h5 class=\"card-header-title mb-0\">Payments</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between p-4\">
\t\t\t\t\t\t\t\t\t{% set totalAmount = 0 %}
\t\t\t\t\t\t\t\t\t{% for p in eleve.payments %}
\t\t\t\t\t\t\t\t\t\t{% set totalAmount = totalAmount + p.amount %}
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t<h4 class=\"text-blue mb-0\">{{ totalAmount|number_format(2) }} XAF</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"table-responsive border-0\" style=\"max-height: 250px;overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">

\t\t\t\t\t\t\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Date</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Type</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Amount</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t{% for payment in eleve.payments %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ payment.paidAt|date('d/m/Y') }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ payment.cours ? 'Buy Course' : 'Plan' }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ payment.amount|number_format(2) }} XAF</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"3\">Empty</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Active student END -->

\t\t\t\t\t<!-- Enrolled START -->
\t\t\t\t\t<div class=\"col-md-6 col-xxl-12\">
\t\t\t\t\t\t<div class=\"card bg-transparent border overflow-hidden\">
\t\t\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t\t\t<div class=\"card-header bg-light border-bottom\">
\t\t\t\t\t\t\t\t<h5 class=\"card-header-title mb-0\">Network</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Card body -->
\t\t\t\t\t\t\t<div class=\"card-body p-0\">
\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-between p-4\">
\t\t\t\t\t\t\t\t\t<h4 class=\"text-blue mb-0\">{{ eleve.utilisateur.personne.invites|length < 10 ? '0' ~ eleve.utilisateur.personne.invites|length : eleve.utilisateur.personne.invites|length }}</h4>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<div class=\"table-responsive border-0\" style=\"max-height: 250px;overflow: auto;\">
\t\t\t\t\t\t\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">

\t\t\t\t\t\t\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th scope=\"col\">Name</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Joining date</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t<th>Network</th>
\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t{% for inv in eleve.utilisateur.personne.invites %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"w-50px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset(inv.avatarPath) }}\" class=\"rounded\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><a href=\"#\">{{ inv.nomComplet }}</a></h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ inv.joinAt|date('d/m/Y') }}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>{{ inv.invites|length }}</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"3\">Empty</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Enrolled END -->

\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Student status chart END -->
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
\t\t\t\t\t\t<div class=\"table-responsive border-0\" style=\"max-height: 500px;overflow: auto;\">
\t\t\t\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
\t\t\t\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Course Title</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Total Lectures</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Completed Lecture</th>
\t\t\t\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t{% for course in student.cours %}
\t\t\t\t\t\t\t\t\t\t{% set leconTerminees = 0 %}
\t\t\t\t\t\t\t\t\t\t{% for l in student.lectures %}
\t\t\t\t\t\t\t\t\t\t\t{% if l.isFinished and l.lesson is not same as null and l.lesson.chapitre.cours is same as course %}
\t\t\t\t\t\t\t\t\t\t\t\t{% set leconTerminees = leconTerminees + 1 %}
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t{% set numberOfLessons = course.numberOfLessons > 0 ? course.numberOfLessons : 1 %}
\t\t\t\t\t\t\t\t\t\t{% set percent = (leconTerminees * 100 ) / numberOfLessons %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Image -->
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"w-100px\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset('uploads/media/courses/' ~ course.media.imageFile)}}\" class=\"rounded\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6><a href=\"{{ url(\"app_front_course_start\", {slug: course.slug}, \"http\", false) }}\">{{ course.intitule }}</a></h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!-- Info -->
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"overflow-hidden\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0 text-end\">{{ percent|number_format(0) }}%</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-sm bg-primary bg-opacity-10\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-primary aos\" role=\"progressbar\" data-aos=\"slide-right\" data-aos-delay=\"200\" data-aos-duration=\"1000\" data-aos-easing=\"ease-in-out\" style=\"width: {{ percent|number_format(0) }}%\" aria-valuenow=\"{{ percent|number_format(0) }}\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t\t\t\t<td>{{ course.numberOfLessons }}</td>

\t\t\t\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t\t\t\t<td>{{ leconTerminees }}</td>

\t\t\t\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t{% if leconTerminees is same as course.numberOfLessons %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-success me-1 mb-1 mb-x\"><i class=\"bi bi-check me-1\"></i>Complete</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-light me-1\"><i class=\"bi bi-arrow-repeat me-1\"></i>Restart</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a title=\"Continue\" href=\"{{ url(\"app_front_course_start\", {slug: course.slug}, \"http\", false) }}\" class=\"btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0\"><i class=\"bi bi-play-circle me-1\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t{% if course.isFree %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"return confirm('Etes-vous sure de vouloir supprimer ce cours de votre liste de lecture')\" href=\"{{ url(\"app_front_course_start\", {id: student.reference, slug: course.slug}, \"http\", false) }}\" class=\"btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0\"><i class=\"bi bi-trash me-1\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"4\">No Courses found</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t{% endfor %}
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

\t\t</div> 

{% endblock %}
", "admin/eleve/show.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\eleve\\show.html.twig");
    }
}
