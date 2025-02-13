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

/* front/courses/index.html.twig */
class __TwigTemplate_2cfd7fcb5347be9bc2474371454c0e1e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'script' => [$this, 'block_script'],
            'mainContent' => [$this, 'block_mainContent'],
            'pageContent' => [$this, 'block_pageContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/courses/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/courses/index.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/courses/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " - Courses";
        
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
        echo "\t
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
        echo "    
    <!-- ======================= Page Banner START -->
\t<section class=\"py-4\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"bg-light p-4 text-center rounded-3\">
\t\t\t\t\t\t<h1 class=\"m-0\">";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("COURSES_KEY", [], "messages");
        echo "</h1>
\t\t\t\t\t\t<!-- Breadcrumb -->
\t\t\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t\t\t<ol class=\"breadcrumb breadcrumb-dots mb-0\">
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("HOME_KEY", [], "messages");
        echo "</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("COURSES_KEY", [], "messages");
        echo "</li>
\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- ======================= Page Banner END -->
\t
\t<section class=\"pt-0\">
\t\t<div class=\"container\">

\t\t\t<!-- Filter bar START -->
\t\t\t<form method=\"get\" action=\"";
        // line 38
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_courses");
        echo "\" class=\"bg-light border p-4 rounded-3 my-4 z-index-9 position-relative\">
\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t<!-- Input -->
\t\t\t\t\t<div class=\"col-xl-3\">
\t\t\t\t\t\t<input name=\"search\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control me-1\" type=\"search\" placeholder=\"Enter keyword\">
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Select item -->
\t\t\t\t\t<div class=\"col-xl-8\">
\t\t\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t\t\t<!-- Select items -->
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 pb-2 pb-md-0\">
\t\t\t\t\t\t\t\t<select data-response=\"#search_specialites\" name=\"filiere\" id=\"select-filieres\" data-element=\"#select-filieres\" class=\"form-select form-select-sm js-choice find-data-with-ajax\" aria-label=\".form-select-sm example\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SECTORS_KEY", [], "messages");
        echo "</option>
\t\t\t\t\t\t\t\t\t";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["filieres"]) || array_key_exists("filieres", $context) ? $context["filieres"] : (function () { throw new RuntimeError('Variable "filieres" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 53
            echo "\t\t\t\t\t\t\t\t\t\t<option ";
            echo ((( !((isset($context["searchFiliere"]) || array_key_exists("searchFiliere", $context) ? $context["searchFiliere"] : (function () { throw new RuntimeError('Variable "searchFiliere" does not exist.', 53, $this->source); })()) === null) && ((isset($context["searchFiliere"]) || array_key_exists("searchFiliere", $context) ? $context["searchFiliere"] : (function () { throw new RuntimeError('Variable "searchFiliere" does not exist.', 53, $this->source); })()) === $context["f"]))) ? ("selected") : (""));
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "slug", [], "any", false, false, false, 53), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "name", [], "any", false, false, false, 53), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Select items -->
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 pb-2 pb-md-0\">
\t\t\t\t\t\t\t\t<select data-response=\"#search_classes\" id=\"search_specialites\"  id=\"select-filieres\" data-element=\"#search_specialites\" name=\"specialite\" class=\"form-select form-select-sm js-choice find-data-with-ajax\" aria-label=\".form-select-sm example\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SPECIALTIES_KEY", [], "messages");
        echo "</option>
\t\t\t\t\t\t\t\t\t";
        // line 63
        echo "\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["specialites"]) || array_key_exists("specialites", $context) ? $context["specialites"] : (function () { throw new RuntimeError('Variable "specialites" does not exist.', 63, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 64
            echo "\t\t\t\t\t\t\t\t\t\t\t<option ";
            echo ((( !((isset($context["searchSpecialite"]) || array_key_exists("searchSpecialite", $context) ? $context["searchSpecialite"] : (function () { throw new RuntimeError('Variable "searchSpecialite" does not exist.', 64, $this->source); })()) === null) && ((isset($context["searchSpecialite"]) || array_key_exists("searchSpecialite", $context) ? $context["searchSpecialite"] : (function () { throw new RuntimeError('Variable "searchSpecialite" does not exist.', 64, $this->source); })()) === $context["s"]))) ? ("selected") : (""));
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "slug", [], "any", false, false, false, 64), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 64), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "\t\t\t\t\t\t\t\t\t";
        // line 67
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Select items -->
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 pb-2 pb-md-0\">
\t\t\t\t\t\t\t\t<select id=\"search_classes\" name=\"classe\" class=\"form-select form-select-sm js-choice\" aria-label=\".form-select-sm example\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CLASSES_KEY", [], "messages");
        echo "</option>
\t\t\t\t\t\t\t\t\t";
        // line 75
        echo "\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 75, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 76
            echo "\t\t\t\t\t\t\t\t\t\t<option ";
            echo ((( !((isset($context["searchClasse"]) || array_key_exists("searchClasse", $context) ? $context["searchClasse"] : (function () { throw new RuntimeError('Variable "searchClasse" does not exist.', 76, $this->source); })()) === null) && ((isset($context["searchClasse"]) || array_key_exists("searchClasse", $context) ? $context["searchClasse"] : (function () { throw new RuntimeError('Variable "searchClasse" does not exist.', 76, $this->source); })()) === $context["c"]))) ? ("selected") : (""));
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "slug", [], "any", false, false, false, 76), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 76), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "\t\t\t\t\t\t\t\t\t";
        // line 79
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Select items -->
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-3 pb-2 pb-md-0\">
\t\t\t\t\t\t\t\t<select name=\"category\" class=\"form-select form-select-sm js-choice\" aria-label=\".form-select-sm example\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CATEGORIES_KEY", [], "messages");
        echo "</option>
\t\t\t\t\t\t\t\t\t";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 87
            echo "\t\t\t\t\t\t\t\t\t\t<option ";
            echo ((( !((isset($context["searchCategory"]) || array_key_exists("searchCategory", $context) ? $context["searchCategory"] : (function () { throw new RuntimeError('Variable "searchCategory" does not exist.', 87, $this->source); })()) === null) && (twig_get_attribute($this->env, $this->source, (isset($context["searchCategory"]) || array_key_exists("searchCategory", $context) ? $context["searchCategory"] : (function () { throw new RuntimeError('Variable "searchCategory" does not exist.', 87, $this->source); })()), "id", [], "any", false, false, false, 87) === twig_get_attribute($this->env, $this->source, $context["cat"], "id", [], "any", false, false, false, 87)))) ? ("selected") : (""));
            echo " value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "slug", [], "any", false, false, false, 87), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 87), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Search item -->
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-3 pb-2 pb-md-0\">
\t\t\t\t\t\t\t\t<select name=\"price\" class=\"form-select form-select-sm js-choice\" aria-label=\".form-select-sm example\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ALL_KEY", [], "messages");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option ";
        // line 96
        echo ((((isset($context["searchPrice"]) || array_key_exists("searchPrice", $context) ? $context["searchPrice"] : (function () { throw new RuntimeError('Variable "searchPrice" does not exist.', 96, $this->source); })()) === "free")) ? ("selected") : (""));
        echo " value=\"free\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("FREE_KEY", [], "messages");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option ";
        // line 97
        echo ((((isset($context["searchPrice"]) || array_key_exists("searchPrice", $context) ? $context["searchPrice"] : (function () { throw new RuntimeError('Variable "searchPrice" does not exist.', 97, $this->source); })()) === "paid")) ? ("selected") : (""));
        echo " value=\"paid\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PAID_KEY", [], "messages");
        echo "</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Search item -->
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-3 pb-2 pb-md-0\">
\t\t\t\t\t\t\t\t<select name=\"level\" class=\"form-select form-select-sm js-choice\" aria-label=\".form-select-sm example\">
\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t<option ";
        // line 105
        echo ((((isset($context["searchLevel"]) || array_key_exists("searchLevel", $context) ? $context["searchLevel"] : (function () { throw new RuntimeError('Variable "searchLevel" does not exist.', 105, $this->source); })()) === "Tout Niveau")) ? ("selected") : (""));
        echo " value=\"Tout Niveau\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ALLLEVEL_KEY", [], "messages");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option ";
        // line 106
        echo ((((isset($context["searchLevel"]) || array_key_exists("searchLevel", $context) ? $context["searchLevel"] : (function () { throw new RuntimeError('Variable "searchLevel" does not exist.', 106, $this->source); })()) === "Facile")) ? ("selected") : (""));
        echo " value=\"Facile\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("EASY_KEY", [], "messages");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option ";
        // line 107
        echo ((((isset($context["searchLevel"]) || array_key_exists("searchLevel", $context) ? $context["searchLevel"] : (function () { throw new RuntimeError('Variable "searchLevel" does not exist.', 107, $this->source); })()) === "Intermédiaire")) ? ("selected") : (""));
        echo " value=\"Intermédiaire\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("INTERMEDIATE_KEY", [], "messages");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option ";
        // line 108
        echo ((((isset($context["searchLevel"]) || array_key_exists("searchLevel", $context) ? $context["searchLevel"] : (function () { throw new RuntimeError('Variable "searchLevel" does not exist.', 108, $this->source); })()) === "Difficile")) ? ("selected") : (""));
        echo " value=\"Difficile\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("DIFFICULT_KEY", [], "messages");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option ";
        // line 109
        echo ((((isset($context["searchLevel"]) || array_key_exists("searchLevel", $context) ? $context["searchLevel"] : (function () { throw new RuntimeError('Variable "searchLevel" does not exist.', 109, $this->source); })()) === "Très difficile")) ? ("selected") : (""));
        echo " value=\"Très difficile\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("VERYDIFFICULT_KEY", [], "messages");
        echo "</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Search item -->
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-3 pb-2 pb-md-0\">
\t\t\t\t\t\t\t\t<select name=\"language\" class=\"form-select form-select-sm js-choice\" aria-label=\".form-select-sm example\">
\t\t\t\t\t\t\t\t\t<option value=\"\">";
        // line 116
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("LANGUAGE_KEY", [], "messages");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"English\">";
        // line 117
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ENGLISH_KEY", [], "messages");
        echo "</option>
\t\t\t\t\t\t\t\t\t<option value=\"French\">";
        // line 118
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("FRENCH_KEY", [], "messages");
        echo "</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> <!-- Row END -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Button -->
\t\t\t\t\t<div class=\"col-xl-1\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary mb-0 rounded z-index-1 w-100\"><i class=\"fas fa-search\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</div> <!-- Row END -->
\t\t\t</form>
\t\t\t<!-- Filter bar END -->

\t\t\t<div class=\"row mt-3\">
\t\t\t\t<!-- Main content START -->
\t\t\t\t";
        // line 133
        $this->displayBlock('pageContent', $context, $blocks);
        // line 161
        echo "\t\t\t\t<!-- Main content END -->
\t\t\t</div><!-- Row END -->
\t\t</div>
\t</section>

\t<!-- ======================= Newsletter START -->
\t<section class=\"pt-0\">
\t\t<div class=\"container position-relative overflow-hidden\">
\t\t\t<!-- SVG decoration -->
\t\t\t<figure class=\"position-absolute top-50 start-50 translate-middle ms-3\">
\t\t\t\t<svg>
\t\t\t\t\t<path class=\"fill-white opacity-2\" d=\"m496 22.999c0 10.493-8.506 18.999-18.999 18.999s-19-8.506-19-18.999 8.507-18.999 19-18.999 18.999 8.506 18.999 18.999z\"/>
\t\t\t\t\t<path class=\"fill-white opacity-2\" d=\"m775 102.5c0 5.799-4.701 10.5-10.5 10.5-5.798 0-10.499-4.701-10.499-10.5 0-5.798 4.701-10.499 10.499-10.499 5.799 0 10.5 4.701 10.5 10.499z\"/>
\t\t\t\t\t<path class=\"fill-white opacity-2\" d=\"m192 102c0 6.626-5.373 11.999-12 11.999s-11.999-5.373-11.999-11.999c0-6.628 5.372-12 11.999-12s12 5.372 12 12z\"/>
\t\t\t\t\t<path class=\"fill-white opacity-2\" d=\"m20.499 10.25c0 5.66-4.589 10.249-10.25 10.249-5.66 0-10.249-4.589-10.249-10.249-0-5.661 4.589-10.25 10.249-10.25 5.661-0 10.25 4.589 10.25 10.25z\"/>
\t\t\t\t</svg>
\t\t\t</figure>
\t\t\t<!-- Svg decoration -->
\t\t\t<figure class=\"position-absolute bottom-0 end-0 mb-5 d-none d-sm-block\">
\t\t\t\t<svg class=\"rotate-130\" width=\"258.7px\" height=\"86.9px\" viewBox=\"0 0 258.7 86.9\">
\t\t\t\t\t<path stroke=\"white\" fill=\"none\" stroke-width=\"2\" d=\"M0,7.2c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5 c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5s16-25.5,31.9-25.5\"/>
\t\t\t\t\t<path stroke=\"white\" fill=\"none\" stroke-width=\"2\" d=\"M0,57c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5 c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5s16-25.5,31.9-25.5\"/>
\t\t\t\t</svg>
\t\t\t</figure>
\t\t\t
\t\t\t<div class=\"bg-grad-blue p-3 p-sm-5 rounded-3\">
\t\t\t\t<div class=\"row justify-content-center position-relative\">
\t\t\t\t\t<!-- SVG decoration -->
\t\t\t\t\t<figure class=\"position-absolute top-50 start-0 translate-middle-y\">
\t\t\t\t\t\t<svg width=\"141px\" height=\"141px\">
\t\t\t\t\t\t\t<path class=\"fill-white opacity-1\" d=\"M140.520,70.258 C140.520,109.064 109.062,140.519 70.258,140.519 C31.454,140.519 -0.004,109.064 -0.004,70.258 C-0.004,31.455 31.454,-0.003 70.258,-0.003 C109.062,-0.003 140.520,31.455 140.520,70.258 Z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</figure>
\t\t\t\t\t<!-- Newsletter -->
\t\t\t\t\t<div class=\"col-12 position-relative my-2 my-sm-3\">
\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<h3 class=\"text-white mb-3 mb-lg-0\">";
        // line 199
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("AREYOUREADYFORCONVERSATION_KEY", [], "messages");
        echo "</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Input item -->
\t\t\t\t\t\t\t<div class=\"col-lg-6 text-lg-end\">
\t\t\t\t\t\t\t\t<form class=\"bg-body rounded p-2\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control border-0 me-1\" type=\"email\" placeholder=\"";
        // line 205
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("TYPEEMAILHERE_KEY", [], "messages");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-dark mb-0 rounded\">";
        // line 206
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SUBSCRIBE_KEY", [], "messages");
        echo "</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> <!-- Row END -->
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- =======================
\tNewsletter END -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 133
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        // line 134
        echo "\t\t\t\t\t<div class=\"col-12\">

\t\t\t\t\t\t<!-- Course Grid START -->
\t\t\t\t\t\t<div class=\"row g-4\">
\t\t\t\t\t\t\t";
        // line 138
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 138, $this->source); })()));
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
            // line 139
            echo "\t\t\t\t\t\t\t\t<!-- Card item START -->
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-lg-4 col-xl-3\">
\t\t\t\t\t\t\t\t\t";
            // line 141
            echo twig_include($this->env, $context, "front/includes/courses/_course_item.html.twig");
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card item END -->
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
            // line 145
            echo "\t\t\t\t\t\t\t\t<div class=\"text-center p-4 mb-5 mt-5\">
\t\t\t\t\t\t\t\t\t<h2>";
            // line 146
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("NORESULTS_KEY", [], "messages");
            echo "</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Course Grid END -->

\t\t\t\t\t\t<!-- Pagination START -->
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div class=\"pagination-container\">
\t\t\t\t\t\t\t\t";
        // line 155
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 155, $this->source); })()));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Pagination END -->
\t\t\t\t\t</div>
\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/courses/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  532 => 155,  524 => 149,  515 => 146,  512 => 145,  495 => 141,  491 => 139,  473 => 138,  467 => 134,  457 => 133,  433 => 206,  429 => 205,  420 => 199,  380 => 161,  378 => 133,  360 => 118,  356 => 117,  352 => 116,  340 => 109,  334 => 108,  328 => 107,  322 => 106,  316 => 105,  303 => 97,  297 => 96,  293 => 95,  285 => 89,  272 => 87,  268 => 86,  264 => 85,  256 => 79,  254 => 78,  241 => 76,  236 => 75,  232 => 73,  224 => 67,  222 => 66,  209 => 64,  204 => 63,  200 => 61,  192 => 55,  179 => 53,  175 => 52,  171 => 51,  159 => 42,  152 => 38,  134 => 23,  128 => 22,  120 => 17,  111 => 10,  101 => 9,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"front/base.html.twig\" %}

{% block title %} - Courses{% endblock %}

{% block script %}
\t
{% endblock %}

{% block mainContent %}
    
    <!-- ======================= Page Banner START -->
\t<section class=\"py-4\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"bg-light p-4 text-center rounded-3\">
\t\t\t\t\t\t<h1 class=\"m-0\">{% trans %}COURSES_KEY{% endtrans %}</h1>
\t\t\t\t\t\t<!-- Breadcrumb -->
\t\t\t\t\t\t<div class=\"d-flex justify-content-center\">
\t\t\t\t\t\t\t<nav aria-label=\"breadcrumb\">
\t\t\t\t\t\t\t\t<ol class=\"breadcrumb breadcrumb-dots mb-0\">
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item\"><a href=\"{{ path('app_front') }}\">{% trans %}HOME_KEY{% endtrans %}</a></li>
\t\t\t\t\t\t\t\t\t<li class=\"breadcrumb-item active\" aria-current=\"page\">{% trans %}COURSES_KEY{% endtrans %}</li>
\t\t\t\t\t\t\t\t</ol>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- ======================= Page Banner END -->
\t
\t<section class=\"pt-0\">
\t\t<div class=\"container\">

\t\t\t<!-- Filter bar START -->
\t\t\t<form method=\"get\" action=\"{{ url(\"app_front_courses\") }}\" class=\"bg-light border p-4 rounded-3 my-4 z-index-9 position-relative\">
\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t<!-- Input -->
\t\t\t\t\t<div class=\"col-xl-3\">
\t\t\t\t\t\t<input name=\"search\" value=\"{{search}}\" class=\"form-control me-1\" type=\"search\" placeholder=\"Enter keyword\">
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Select item -->
\t\t\t\t\t<div class=\"col-xl-8\">
\t\t\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t\t\t<!-- Select items -->
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 pb-2 pb-md-0\">
\t\t\t\t\t\t\t\t<select data-response=\"#search_specialites\" name=\"filiere\" id=\"select-filieres\" data-element=\"#select-filieres\" class=\"form-select form-select-sm js-choice find-data-with-ajax\" aria-label=\".form-select-sm example\">
\t\t\t\t\t\t\t\t\t<option value=\"\">{% trans %}SECTORS_KEY{% endtrans %}</option>
\t\t\t\t\t\t\t\t\t{% for f in filieres %}
\t\t\t\t\t\t\t\t\t\t<option {{ searchFiliere is not same as null and searchFiliere is same as f ? 'selected' : '' }} value=\"{{ f.slug }}\">{{ f.name }}</option>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Select items -->
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 pb-2 pb-md-0\">
\t\t\t\t\t\t\t\t<select data-response=\"#search_classes\" id=\"search_specialites\"  id=\"select-filieres\" data-element=\"#search_specialites\" name=\"specialite\" class=\"form-select form-select-sm js-choice find-data-with-ajax\" aria-label=\".form-select-sm example\">
\t\t\t\t\t\t\t\t\t<option value=\"\">{% trans %}SPECIALTIES_KEY{% endtrans %}</option>
\t\t\t\t\t\t\t\t\t{# {% if searchFiliere is not same as null %} #}
\t\t\t\t\t\t\t\t\t\t{% for s in specialites %}
\t\t\t\t\t\t\t\t\t\t\t<option {{ searchSpecialite is not same as null and searchSpecialite is same as s ? 'selected' : '' }} value=\"{{ s.slug }}\">{{ s.name }}</option>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t{# {% endif %} #}
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Select items -->
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-4 pb-2 pb-md-0\">
\t\t\t\t\t\t\t\t<select id=\"search_classes\" name=\"classe\" class=\"form-select form-select-sm js-choice\" aria-label=\".form-select-sm example\">
\t\t\t\t\t\t\t\t\t<option value=\"\">{% trans %}CLASSES_KEY{% endtrans %}</option>
\t\t\t\t\t\t\t\t\t{# {% if searchSpecialite is not same as null %} #}
\t\t\t\t\t\t\t\t\t{% for c in classes %}
\t\t\t\t\t\t\t\t\t\t<option {{ searchClasse is not same as null and searchClasse is same as c ? 'selected' : '' }} value=\"{{ c.slug }}\">{{ c.name }}</option>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t{# {% endif %} #}
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Select items -->
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-3 pb-2 pb-md-0\">
\t\t\t\t\t\t\t\t<select name=\"category\" class=\"form-select form-select-sm js-choice\" aria-label=\".form-select-sm example\">
\t\t\t\t\t\t\t\t\t<option value=\"\">{% trans %}CATEGORIES_KEY{% endtrans %}</option>
\t\t\t\t\t\t\t\t\t{% for cat in categories %}
\t\t\t\t\t\t\t\t\t\t<option {{ searchCategory is not same as null and searchCategory.id is same as cat.id ? 'selected' : '' }} value=\"{{ cat.slug }}\">{{ cat.name }}</option>
\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Search item -->
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-3 pb-2 pb-md-0\">
\t\t\t\t\t\t\t\t<select name=\"price\" class=\"form-select form-select-sm js-choice\" aria-label=\".form-select-sm example\">
\t\t\t\t\t\t\t\t\t<option value=\"\">{% trans %}ALL_KEY{% endtrans %}</option>
\t\t\t\t\t\t\t\t\t<option {{ searchPrice is same as 'free' ? 'selected' : '' }} value=\"free\">{% trans %}FREE_KEY{% endtrans %}</option>
\t\t\t\t\t\t\t\t\t<option {{ searchPrice is same as 'paid' ? 'selected' : '' }} value=\"paid\">{% trans %}PAID_KEY{% endtrans %}</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Search item -->
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-3 pb-2 pb-md-0\">
\t\t\t\t\t\t\t\t<select name=\"level\" class=\"form-select form-select-sm js-choice\" aria-label=\".form-select-sm example\">
\t\t\t\t\t\t\t\t\t<option value=\"\"></option>
\t\t\t\t\t\t\t\t\t<option {{ searchLevel is same as 'Tout Niveau' ? 'selected' : '' }} value=\"Tout Niveau\">{% trans %}ALLLEVEL_KEY{% endtrans %}</option>
\t\t\t\t\t\t\t\t\t<option {{ searchLevel is same as 'Facile' ? 'selected' : '' }} value=\"Facile\">{% trans %}EASY_KEY{% endtrans %}</option>
\t\t\t\t\t\t\t\t\t<option {{ searchLevel is same as 'Intermédiaire' ? 'selected' : '' }} value=\"Intermédiaire\">{% trans %}INTERMEDIATE_KEY{% endtrans %}</option>
\t\t\t\t\t\t\t\t\t<option {{ searchLevel is same as 'Difficile' ? 'selected' : '' }} value=\"Difficile\">{% trans %}DIFFICULT_KEY{% endtrans %}</option>
\t\t\t\t\t\t\t\t\t<option {{ searchLevel is same as 'Très difficile' ? 'selected' : '' }} value=\"Très difficile\">{% trans %}VERYDIFFICULT_KEY{% endtrans %}</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Search item -->
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-md-3 pb-2 pb-md-0\">
\t\t\t\t\t\t\t\t<select name=\"language\" class=\"form-select form-select-sm js-choice\" aria-label=\".form-select-sm example\">
\t\t\t\t\t\t\t\t\t<option value=\"\">{% trans %}LANGUAGE_KEY{% endtrans %}</option>
\t\t\t\t\t\t\t\t\t<option value=\"English\">{% trans %}ENGLISH_KEY{% endtrans %}</option>
\t\t\t\t\t\t\t\t\t<option value=\"French\">{% trans %}FRENCH_KEY{% endtrans %}</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> <!-- Row END -->
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Button -->
\t\t\t\t\t<div class=\"col-xl-1\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary mb-0 rounded z-index-1 w-100\"><i class=\"fas fa-search\"></i></button>
\t\t\t\t\t</div>
\t\t\t\t</div> <!-- Row END -->
\t\t\t</form>
\t\t\t<!-- Filter bar END -->

\t\t\t<div class=\"row mt-3\">
\t\t\t\t<!-- Main content START -->
\t\t\t\t{% block pageContent %}
\t\t\t\t\t<div class=\"col-12\">

\t\t\t\t\t\t<!-- Course Grid START -->
\t\t\t\t\t\t<div class=\"row g-4\">
\t\t\t\t\t\t\t{% for course in courses %}
\t\t\t\t\t\t\t\t<!-- Card item START -->
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 col-lg-4 col-xl-3\">
\t\t\t\t\t\t\t\t\t{{ include('front/includes/courses/_course_item.html.twig') }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Card item END -->
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<div class=\"text-center p-4 mb-5 mt-5\">
\t\t\t\t\t\t\t\t\t<h2>{% trans %}NORESULTS_KEY{% endtrans %}</h2>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Course Grid END -->

\t\t\t\t\t\t<!-- Pagination START -->
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<div class=\"pagination-container\">
\t\t\t\t\t\t\t\t{{ knp_pagination_render(courses) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Pagination END -->
\t\t\t\t\t</div>
\t\t\t\t{% endblock %}
\t\t\t\t<!-- Main content END -->
\t\t\t</div><!-- Row END -->
\t\t</div>
\t</section>

\t<!-- ======================= Newsletter START -->
\t<section class=\"pt-0\">
\t\t<div class=\"container position-relative overflow-hidden\">
\t\t\t<!-- SVG decoration -->
\t\t\t<figure class=\"position-absolute top-50 start-50 translate-middle ms-3\">
\t\t\t\t<svg>
\t\t\t\t\t<path class=\"fill-white opacity-2\" d=\"m496 22.999c0 10.493-8.506 18.999-18.999 18.999s-19-8.506-19-18.999 8.507-18.999 19-18.999 18.999 8.506 18.999 18.999z\"/>
\t\t\t\t\t<path class=\"fill-white opacity-2\" d=\"m775 102.5c0 5.799-4.701 10.5-10.5 10.5-5.798 0-10.499-4.701-10.499-10.5 0-5.798 4.701-10.499 10.499-10.499 5.799 0 10.5 4.701 10.5 10.499z\"/>
\t\t\t\t\t<path class=\"fill-white opacity-2\" d=\"m192 102c0 6.626-5.373 11.999-12 11.999s-11.999-5.373-11.999-11.999c0-6.628 5.372-12 11.999-12s12 5.372 12 12z\"/>
\t\t\t\t\t<path class=\"fill-white opacity-2\" d=\"m20.499 10.25c0 5.66-4.589 10.249-10.25 10.249-5.66 0-10.249-4.589-10.249-10.249-0-5.661 4.589-10.25 10.249-10.25 5.661-0 10.25 4.589 10.25 10.25z\"/>
\t\t\t\t</svg>
\t\t\t</figure>
\t\t\t<!-- Svg decoration -->
\t\t\t<figure class=\"position-absolute bottom-0 end-0 mb-5 d-none d-sm-block\">
\t\t\t\t<svg class=\"rotate-130\" width=\"258.7px\" height=\"86.9px\" viewBox=\"0 0 258.7 86.9\">
\t\t\t\t\t<path stroke=\"white\" fill=\"none\" stroke-width=\"2\" d=\"M0,7.2c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5 c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5s16-25.5,31.9-25.5\"/>
\t\t\t\t\t<path stroke=\"white\" fill=\"none\" stroke-width=\"2\" d=\"M0,57c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5 c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5s16-25.5,31.9-25.5\"/>
\t\t\t\t</svg>
\t\t\t</figure>
\t\t\t
\t\t\t<div class=\"bg-grad-blue p-3 p-sm-5 rounded-3\">
\t\t\t\t<div class=\"row justify-content-center position-relative\">
\t\t\t\t\t<!-- SVG decoration -->
\t\t\t\t\t<figure class=\"position-absolute top-50 start-0 translate-middle-y\">
\t\t\t\t\t\t<svg width=\"141px\" height=\"141px\">
\t\t\t\t\t\t\t<path class=\"fill-white opacity-1\" d=\"M140.520,70.258 C140.520,109.064 109.062,140.519 70.258,140.519 C31.454,140.519 -0.004,109.064 -0.004,70.258 C-0.004,31.455 31.454,-0.003 70.258,-0.003 C109.062,-0.003 140.520,31.455 140.520,70.258 Z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</figure>
\t\t\t\t\t<!-- Newsletter -->
\t\t\t\t\t<div class=\"col-12 position-relative my-2 my-sm-3\">
\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<h3 class=\"text-white mb-3 mb-lg-0\">{% trans %}AREYOUREADYFORCONVERSATION_KEY{% endtrans %}</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Input item -->
\t\t\t\t\t\t\t<div class=\"col-lg-6 text-lg-end\">
\t\t\t\t\t\t\t\t<form class=\"bg-body rounded p-2\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control border-0 me-1\" type=\"email\" placeholder=\"{% trans %}TYPEEMAILHERE_KEY{% endtrans %}\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-dark mb-0 rounded\">{% trans %}SUBSCRIBE_KEY{% endtrans %}</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> <!-- Row END -->
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- =======================
\tNewsletter END -->

{% endblock %}
", "front/courses/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\courses\\index.html.twig");
    }
}
