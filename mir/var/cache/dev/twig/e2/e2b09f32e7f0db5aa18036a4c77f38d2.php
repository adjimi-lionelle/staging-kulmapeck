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

/* front/exam/index.html.twig */
class __TwigTemplate_188ea8d39a24c602096024bb3e621552 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/exam/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/exam/index.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/exam/index.html.twig", 1);
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
    <section class=\"bg-dark align-items-center d-flex\" style=\"background:url(";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pattern/04.png"), "html", null, true);
        echo ") no-repeat center center; background-size:cover;\">
        <!-- Main banner background image -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <!-- Title -->
                    <h1 class=\"text-white\">";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("EXAMS_KEY", [], "messages");
        echo "</h1>
                    <!-- Breadcrumb -->
                    <div class=\"d-flex\">
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb breadcrumb-dark breadcrumb-dots mb-0\">
                                <li class=\"breadcrumb-item\"><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("HOME_KEY", [], "messages");
        echo "</a></li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("EXAMS_KEY", [], "messages");
        echo "</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
\t
\t<!-- Page content START -->
\t<section class=\"pb-0 py-sm-5\">
\t\t<div class=\"container\">
\t\t\t<!-- Title and select START -->
\t\t\t<div class=\"row g-3 align-items-center mb-4\">
                ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, (isset($context["exams"]) || array_key_exists("exams", $context) ? $context["exams"] : (function () { throw new RuntimeError('Variable "exams" does not exist.', 37, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 37)) {
            // line 38
            echo "\t\t\t\t<!-- Content -->
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<h4 class=\"mb-0\">Showing ";
            // line 40
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["exams"]) || array_key_exists("exams", $context) ? $context["exams"] : (function () { throw new RuntimeError('Variable "exams" does not exist.', 40, $this->source); })()), "getCurrentPageNumber", [], "any", false, false, false, 40) - 1) * twig_get_attribute($this->env, $this->source, (isset($context["exams"]) || array_key_exists("exams", $context) ? $context["exams"] : (function () { throw new RuntimeError('Variable "exams" does not exist.', 40, $this->source); })()), "getItemNumberPerPage", [], "any", false, false, false, 40)) + 1), "html", null, true);
            echo " to ";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["exams"]) || array_key_exists("exams", $context) ? $context["exams"] : (function () { throw new RuntimeError('Variable "exams" does not exist.', 40, $this->source); })()), "getItemNumberPerPage", [], "any", false, false, false, 40) * twig_get_attribute($this->env, $this->source, (isset($context["exams"]) || array_key_exists("exams", $context) ? $context["exams"] : (function () { throw new RuntimeError('Variable "exams" does not exist.', 40, $this->source); })()), "getCurrentPageNumber", [], "any", false, false, false, 40)), "html", null, true);
            echo " of ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exams"]) || array_key_exists("exams", $context) ? $context["exams"] : (function () { throw new RuntimeError('Variable "exams" does not exist.', 40, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 40), "html", null, true);
            echo " result</h4>
\t\t\t\t</div>
                ";
        }
        // line 43
        echo "
\t\t\t\t<!-- Select option -->
\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t<div class=\"row g-3 align-items-center justify-content-md-end me-auto\">

\t\t\t\t\t\t<!-- Advanced filter responsive toggler START -->
\t\t\t\t\t\t<div class=\"col-4 text-md-end\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary mb-0 d-xl-none\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasSidebar\" aria-controls=\"offcanvasSidebar\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-sliders-h me-1\"></i> ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SHOWFILTER_KEY", [], "messages");
        // line 52
        echo "\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Advanced filter responsive toggler END -->

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<!-- Title and select END -->

\t\t\t<div class=\"row\">
\t\t\t\t<!-- Main content START -->
\t\t\t\t<div class=\"col-xl-9 col-xxl-8\">
\t\t\t\t\t<!-- Course list START -->
\t\t\t\t\t<div class=\"row g-4\">
                        ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exams"]) || array_key_exists("exams", $context) ? $context["exams"] : (function () { throw new RuntimeError('Variable "exams" does not exist.', 67, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["exam"]) {
            // line 68
            echo "\t\t\t\t\t\t<!-- Card list START -->
\t\t\t\t\t\t";
            // line 69
            echo twig_include($this->env, $context, "front/exam/_item.html.twig");
            echo "
\t\t\t\t\t\t<!-- Card list END -->
                        ";
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
            // line 72
            echo "                            <div class=\"text-center p-4 mb-5 mt-5\">
                                <h2>";
            // line 73
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("EMPTY_KEY", [], "messages");
            echo "</h2>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exam'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<!-- Course list END -->
\t\t\t\t\t<!-- Pagination START -->
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t";
        // line 80
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["exams"]) || array_key_exists("exams", $context) ? $context["exams"] : (function () { throw new RuntimeError('Variable "exams" does not exist.', 80, $this->source); })()));
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Pagination END -->
\t\t\t\t</div>
\t\t\t\t<!-- Main content END -->

\t\t\t\t<!-- Right sidebar START -->
\t\t\t\t<div class=\"col-lg-3 col-xxl-4\">
\t\t\t\t\t<!-- Responsive offcanvas body START -->
\t\t\t\t\t<div class=\"offcanvas-xl offcanvas-end\" tabindex=\"-1\" id=\"offcanvasSidebar\">
\t\t\t\t\t\t<div class=\"offcanvas-header bg-light\">
\t\t\t\t\t\t\t<h5 class=\"offcanvas-title\" id=\"offcanvasNavbarLabel\">";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ADVANCEFILTER_KEY", [], "messages");
        echo "</h5>
\t\t\t\t\t\t\t<button  type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" data-bs-target=\"#offcanvasSidebar\" aria-label=\"Close\"></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"offcanvas-body p-3 p-xl-0\">
\t\t\t\t\t\t\t<form id=\"filter-form\">
\t\t\t\t\t\t\t\t<!-- Category START -->
\t\t\t\t\t\t\t\t<div class=\"card card-body shadow p-4 mb-4\">
\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t<h4 class=\"mb-4\">";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CATEGORY_KEY", [], "messages");
        echo "</h4>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<!-- Category group -->
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t<input ";
        // line 104
        echo ((((isset($context["sCategory"]) || array_key_exists("sCategory", $context) ? $context["sCategory"] : (function () { throw new RuntimeError('Variable "sCategory" does not exist.', 104, $this->source); })()) === null)) ? ("checked") : (""));
        echo " required name=\"category\" class=\"form-check-input\" type=\"radio\" value=\"all\" id=\"flexCheckDefaultall\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"flexCheckDefaultall\">";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ALL_KEY", [], "messages");
        echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 107
        $context["i"] = 1;
        // line 108
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 108, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 109
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            if (((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 109, $this->source); })()) <= (twig_length_filter($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 109, $this->source); })())) / 2))) {
                // line 110
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input ";
                // line 111
                echo ((((isset($context["sCategory"]) || array_key_exists("sCategory", $context) ? $context["sCategory"] : (function () { throw new RuntimeError('Variable "sCategory" does not exist.', 111, $this->source); })()) === $context["category"])) ? ("checked") : (""));
                echo " name=\"category\" required data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-original-title='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 111), "html", null, true);
                echo "' class=\"form-check-input\" type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 111), "html", null, true);
                echo "\" id=\"flexCheckDefault";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 111), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-original-title='";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 112), "html", null, true);
                echo "' class=\"form-check-label\" for=\"flexCheckDefault";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 112), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 112), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 115
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 115, $this->source); })()) + 1);
            // line 116
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t
\t\t\t\t\t\t\t\t\t\t<!-- Category group -->
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-6\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 121
        $context["i"] = 1;
        // line 122
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 122, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 123
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            if (((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 123, $this->source); })()) > (twig_length_filter($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 123, $this->source); })())) / 2))) {
                // line 124
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input ";
                // line 125
                echo ((((isset($context["sCategory"]) || array_key_exists("sCategory", $context) ? $context["sCategory"] : (function () { throw new RuntimeError('Variable "sCategory" does not exist.', 125, $this->source); })()) === $context["category"])) ? ("checked") : (""));
                echo " name=\"category\" required data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-original-title='";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 125), "html", null, true);
                echo "' class=\"form-check-input\" type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 125), "html", null, true);
                echo "\" id=\"flexCheckDefault";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 125), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-original-title='";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 126), "html", null, true);
                echo "' title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 126), "html", null, true);
                echo "\" class=\"form-check-label\" for=\"flexCheckDefault";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 126), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 126)), "truncate", [13], "method", false, false, false, 126), "html", null, true);
                echo "</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 129
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 129, $this->source); })()) + 1);
            // line 130
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        echo "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div><!-- Row END -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Category END -->

\t\t\t\t\t\t\t\t<!-- Price START -->
\t\t\t\t\t\t\t\t<div class=\"card card-body shadow p-4 mb-4\">
\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t<h4 class=\"mb-3\">";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SKILLLEVEL_KEY", [], "messages");
        echo "</h4>
\t\t\t\t\t\t\t\t\t<ul class=\"list-inline mb-0\">
\t\t\t\t\t\t\t\t\t\t<!-- Price item -->
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t<input ";
        // line 143
        echo ((((isset($context["skillLevel"]) || array_key_exists("skillLevel", $context) ? $context["skillLevel"] : (function () { throw new RuntimeError('Variable "skillLevel" does not exist.', 143, $this->source); })()) === null)) ? ("checked") : (""));
        echo " type=\"radio\" value=\"all\" class=\"btn-check\" name=\"skill\" id=\"skill\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-light btn-primary-soft-check\" for=\"skill\">";
        // line 144
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ALL_KEY", [], "messages");
        echo "</label>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["skillLevels"]) || array_key_exists("skillLevels", $context) ? $context["skillLevels"] : (function () { throw new RuntimeError('Variable "skillLevels" does not exist.', 146, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["skill"]) {
            // line 147
            echo "\t\t\t\t\t\t\t\t\t\t\t<!-- Price item -->
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<input ";
            // line 149
            echo ((((isset($context["skillLevel"]) || array_key_exists("skillLevel", $context) ? $context["skillLevel"] : (function () { throw new RuntimeError('Variable "skillLevel" does not exist.', 149, $this->source); })()) === $context["skill"])) ? ("checked") : (""));
            echo " type=\"radio\" class=\"btn-check\" name=\"skill\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "slug", [], "any", false, false, false, 149), "html", null, true);
            echo "\" id=\"skill";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 149), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-light btn-primary-soft-check\" for=\"skill";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 150), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["skill"], "name", [], "any", false, false, false, 150), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['skill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Price END -->
\t\t
\t\t\t\t\t\t\t\t<!-- Price START -->
\t\t\t\t\t\t\t\t<div class=\"card card-body shadow p-4 mb-4\">
\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t<h4 class=\"mb-3\">";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CLASSES_KEY", [], "messages");
        echo "</h4>
\t\t\t\t\t\t\t\t\t<ul class=\"list-inline mb-0\">
\t\t\t\t\t\t\t\t\t\t<!-- Price item -->
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t<input ";
        // line 164
        echo ((((isset($context["sClasse"]) || array_key_exists("sClasse", $context) ? $context["sClasse"] : (function () { throw new RuntimeError('Variable "sClasse" does not exist.', 164, $this->source); })()) === null)) ? ("checked") : (""));
        echo " checked type=\"radio\" value=\"all\" class=\"btn-check\" name=\"classe\" id=\"option\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-light btn-primary-soft-check\" for=\"option\">";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ALL_KEY", [], "messages");
        echo "</label>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 167, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 168
            echo "\t\t\t\t\t\t\t\t\t\t\t<!-- Price item -->
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<input ";
            // line 170
            echo ((((isset($context["sClasse"]) || array_key_exists("sClasse", $context) ? $context["sClasse"] : (function () { throw new RuntimeError('Variable "sClasse" does not exist.', 170, $this->source); })()) === $context["classe"])) ? ("checked") : (""));
            echo " type=\"radio\" class=\"btn-check\" name=\"classe\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classe"], "slug", [], "any", false, false, false, 170), "html", null, true);
            echo "\" id=\"option";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 170), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-light btn-primary-soft-check\" for=\"option";
            // line 171
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 171), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classe"], "name", [], "any", false, false, false, 171), "html", null, true);
            echo "</label>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Price END -->
\t\t
\t\t\t\t\t\t\t\t<!-- Language START -->
\t\t\t\t\t\t\t\t<div class=\"card card-body shadow p-4 mb-4\">
\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t<h4 class=\"mb-3\">";
        // line 181
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("LANGUAGE_KEY", [], "messages");
        echo "</h4>
\t\t\t\t\t\t\t\t\t<ul class=\"list-inline mb-0 g-3\">
\t\t\t\t\t\t\t\t\t\t<!-- Item -->
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<input ";
        // line 185
        echo ((((isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 185, $this->source); })()) === null)) ? ("checked") : (""));
        echo " value=\"all\" checked type=\"radio\" name=\"language\" class=\"btn-check\" id=\"btn-check-2\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-light btn-primary-soft-check\" for=\"btn-check-2\">";
        // line 186
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ALL_KEY", [], "messages");
        echo "</label>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<!-- Item -->
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<input  ";
        // line 190
        echo (((twig_upper_filter($this->env, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 190, $this->source); })())) === "FRENCH")) ? ("checked") : (""));
        echo " name=\"language\" value=\"French\" type=\"radio\" class=\"btn-check\" id=\"btn-check-3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-light btn-primary-soft-check\" for=\"btn-check-3\">";
        // line 191
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("FRENCH_KEY", [], "messages");
        echo "</label>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<!-- Item -->
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<input ";
        // line 195
        echo (((twig_upper_filter($this->env, (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 195, $this->source); })())) === "ENGLISH")) ? ("checked") : (""));
        echo " value=\"English\" name=\"language\" type=\"radio\" class=\"btn-check\" id=\"btn-check-4\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-light btn-primary-soft-check\" for=\"btn-check-4\">";
        // line 196
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ENGLISH_KEY", [], "messages");
        echo "</label>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Language END -->
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<!-- Form End -->
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t<div class=\"d-grid p-2 p-xl-0 bg-body text-center\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary mb-0\" type=\"button\" onclick=\"\$('#filter-form').submit()\">";
        // line 207
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("FILTERRESULTS_KEY", [], "messages");
        echo "</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Responsive offcanvas body END -->
\t\t\t\t</div>
\t\t\t\t<!-- Right sidebar END -->
\t\t\t</div><!-- Row END -->
\t\t</div>
\t</section>
\t<!-- Page content END -->

\t";
        // line 218
        echo twig_include($this->env, $context, "front/includes/_newsletterorange.html.twig");
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/exam/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  604 => 218,  590 => 207,  576 => 196,  572 => 195,  565 => 191,  561 => 190,  554 => 186,  550 => 185,  543 => 181,  534 => 174,  515 => 171,  507 => 170,  503 => 168,  486 => 167,  481 => 165,  477 => 164,  470 => 160,  461 => 153,  442 => 150,  434 => 149,  430 => 147,  413 => 146,  408 => 144,  404 => 143,  397 => 139,  387 => 131,  381 => 130,  378 => 129,  366 => 126,  356 => 125,  353 => 124,  350 => 123,  345 => 122,  343 => 121,  337 => 117,  331 => 116,  328 => 115,  318 => 112,  308 => 111,  305 => 110,  302 => 109,  297 => 108,  295 => 107,  290 => 105,  286 => 104,  278 => 99,  267 => 91,  253 => 80,  247 => 76,  238 => 73,  235 => 72,  219 => 69,  216 => 68,  198 => 67,  181 => 52,  179 => 51,  169 => 43,  159 => 40,  155 => 38,  153 => 37,  136 => 23,  130 => 22,  122 => 17,  113 => 11,  110 => 10,  100 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"front/base.html.twig\" %}

{% block title %} - Courses{% endblock %}

{% block script %}
\t
{% endblock %}

{% block mainContent %}
    
    <section class=\"bg-dark align-items-center d-flex\" style=\"background:url({{ asset('assets/images/pattern/04.png') }}) no-repeat center center; background-size:cover;\">
        <!-- Main banner background image -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <!-- Title -->
                    <h1 class=\"text-white\">{% trans %}EXAMS_KEY{% endtrans %}</h1>
                    <!-- Breadcrumb -->
                    <div class=\"d-flex\">
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb breadcrumb-dark breadcrumb-dots mb-0\">
                                <li class=\"breadcrumb-item\"><a href=\"{{ url(\"app_front\") }}\">{% trans %}HOME_KEY{% endtrans %}</a></li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">{% trans %}EXAMS_KEY{% endtrans %}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
\t
\t<!-- Page content START -->
\t<section class=\"pb-0 py-sm-5\">
\t\t<div class=\"container\">
\t\t\t<!-- Title and select START -->
\t\t\t<div class=\"row g-3 align-items-center mb-4\">
                {% if exams.getTotalItemCount %}
\t\t\t\t<!-- Content -->
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<h4 class=\"mb-0\">Showing {{ ((exams.getCurrentPageNumber - 1) * exams.getItemNumberPerPage) + 1 }} to {{ exams.getItemNumberPerPage * exams.getCurrentPageNumber }} of {{exams.getTotalItemCount}} result</h4>
\t\t\t\t</div>
                {% endif %}

\t\t\t\t<!-- Select option -->
\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t<div class=\"row g-3 align-items-center justify-content-md-end me-auto\">

\t\t\t\t\t\t<!-- Advanced filter responsive toggler START -->
\t\t\t\t\t\t<div class=\"col-4 text-md-end\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary mb-0 d-xl-none\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasSidebar\" aria-controls=\"offcanvasSidebar\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-sliders-h me-1\"></i> {% trans %}SHOWFILTER_KEY{% endtrans %}
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Advanced filter responsive toggler END -->

\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t<!-- Title and select END -->

\t\t\t<div class=\"row\">
\t\t\t\t<!-- Main content START -->
\t\t\t\t<div class=\"col-xl-9 col-xxl-8\">
\t\t\t\t\t<!-- Course list START -->
\t\t\t\t\t<div class=\"row g-4\">
                        {% for exam in exams %}
\t\t\t\t\t\t<!-- Card list START -->
\t\t\t\t\t\t{{ include('front/exam/_item.html.twig') }}
\t\t\t\t\t\t<!-- Card list END -->
                        {% else %}
                            <div class=\"text-center p-4 mb-5 mt-5\">
                                <h2>{% trans %}EMPTY_KEY{% endtrans %}</h2>
                            </div>
                        {% endfor %}
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Course list END -->
\t\t\t\t\t<!-- Pagination START -->
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t{{ knp_pagination_render(exams) }}
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Pagination END -->
\t\t\t\t</div>
\t\t\t\t<!-- Main content END -->

\t\t\t\t<!-- Right sidebar START -->
\t\t\t\t<div class=\"col-lg-3 col-xxl-4\">
\t\t\t\t\t<!-- Responsive offcanvas body START -->
\t\t\t\t\t<div class=\"offcanvas-xl offcanvas-end\" tabindex=\"-1\" id=\"offcanvasSidebar\">
\t\t\t\t\t\t<div class=\"offcanvas-header bg-light\">
\t\t\t\t\t\t\t<h5 class=\"offcanvas-title\" id=\"offcanvasNavbarLabel\">{% trans %}ADVANCEFILTER_KEY{% endtrans %}</h5>
\t\t\t\t\t\t\t<button  type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" data-bs-target=\"#offcanvasSidebar\" aria-label=\"Close\"></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"offcanvas-body p-3 p-xl-0\">
\t\t\t\t\t\t\t<form id=\"filter-form\">
\t\t\t\t\t\t\t\t<!-- Category START -->
\t\t\t\t\t\t\t\t<div class=\"card card-body shadow p-4 mb-4\">
\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t<h4 class=\"mb-4\">{% trans %}CATEGORY_KEY{% endtrans %}</h4>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<!-- Category group -->
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t<input {{ sCategory is same as null ? 'checked' : '' }} required name=\"category\" class=\"form-check-input\" type=\"radio\" value=\"all\" id=\"flexCheckDefaultall\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"flexCheckDefaultall\">{% trans %}ALL_KEY{% endtrans %}</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t{% set i = 1 %}
\t\t\t\t\t\t\t\t\t\t\t{% for category in categories %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if i <= (categories|length) / 2 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input {{ sCategory is same as category ? 'checked' :'' }} name=\"category\" required data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-original-title='{{ category.name }}' class=\"form-check-input\" type=\"radio\" value=\"{{ category.slug }}\" id=\"flexCheckDefault{{ category.id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-original-title='{{ category.name }}' class=\"form-check-label\" for=\"flexCheckDefault{{ category.id }}\">{{ category.name }}</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% set i = i + 1 %}
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</div>
\t
\t\t\t\t\t\t\t\t\t\t<!-- Category group -->
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xxl-6\">
\t\t\t\t\t\t\t\t\t\t\t{% set i = 1 %}
\t\t\t\t\t\t\t\t\t\t\t{% for category in categories %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if i > (categories|length) / 2 %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input {{ sCategory is same as category ? 'checked' : '' }} name=\"category\" required data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-original-title='{{ category.name }}' class=\"form-check-input\" type=\"radio\" value=\"{{ category.slug }}\" id=\"flexCheckDefault{{ category.id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-original-title='{{ category.name }}' title=\"{{ category.name }}\" class=\"form-check-label\" for=\"flexCheckDefault{{ category.id }}\">{{ category.name|u.truncate(13) }}</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% set i = i + 1 %}
\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div><!-- Row END -->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Category END -->

\t\t\t\t\t\t\t\t<!-- Price START -->
\t\t\t\t\t\t\t\t<div class=\"card card-body shadow p-4 mb-4\">
\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t<h4 class=\"mb-3\">{% trans %}SKILLLEVEL_KEY{% endtrans %}</h4>
\t\t\t\t\t\t\t\t\t<ul class=\"list-inline mb-0\">
\t\t\t\t\t\t\t\t\t\t<!-- Price item -->
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t<input {{ skillLevel is same as null ? 'checked' : '' }} type=\"radio\" value=\"all\" class=\"btn-check\" name=\"skill\" id=\"skill\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-light btn-primary-soft-check\" for=\"skill\">{% trans %}ALL_KEY{% endtrans %}</label>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t{% for skill in skillLevels %}
\t\t\t\t\t\t\t\t\t\t\t<!-- Price item -->
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<input {{ skillLevel is same as skill ? 'checked' : '' }} type=\"radio\" class=\"btn-check\" name=\"skill\" value=\"{{ skill.slug }}\" id=\"skill{{ loop.index }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-light btn-primary-soft-check\" for=\"skill{{ loop.index }}\">{{ skill.name }}</label>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Price END -->
\t\t
\t\t\t\t\t\t\t\t<!-- Price START -->
\t\t\t\t\t\t\t\t<div class=\"card card-body shadow p-4 mb-4\">
\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t<h4 class=\"mb-3\">{% trans %}CLASSES_KEY{% endtrans %}</h4>
\t\t\t\t\t\t\t\t\t<ul class=\"list-inline mb-0\">
\t\t\t\t\t\t\t\t\t\t<!-- Price item -->
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t<input {{ sClasse is same as null ? 'checked' : '' }} checked type=\"radio\" value=\"all\" class=\"btn-check\" name=\"classe\" id=\"option\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-light btn-primary-soft-check\" for=\"option\">{% trans %}ALL_KEY{% endtrans %}</label>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t{% for classe in classes %}
\t\t\t\t\t\t\t\t\t\t\t<!-- Price item -->
\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\">
\t\t\t\t\t\t\t\t\t\t\t\t<input {{ sClasse is same as classe ? 'checked' : '' }} type=\"radio\" class=\"btn-check\" name=\"classe\" value=\"{{ classe.slug }}\" id=\"option{{ loop.index }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-light btn-primary-soft-check\" for=\"option{{ loop.index }}\">{{ classe.name }}</label>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Price END -->
\t\t
\t\t\t\t\t\t\t\t<!-- Language START -->
\t\t\t\t\t\t\t\t<div class=\"card card-body shadow p-4 mb-4\">
\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t<h4 class=\"mb-3\">{% trans %}LANGUAGE_KEY{% endtrans %}</h4>
\t\t\t\t\t\t\t\t\t<ul class=\"list-inline mb-0 g-3\">
\t\t\t\t\t\t\t\t\t\t<!-- Item -->
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<input {{ language is same as null ? 'checked' : '' }} value=\"all\" checked type=\"radio\" name=\"language\" class=\"btn-check\" id=\"btn-check-2\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-light btn-primary-soft-check\" for=\"btn-check-2\">{% trans %}ALL_KEY{% endtrans %}</label>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<!-- Item -->
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<input  {{ language|upper is same as 'FRENCH' ? 'checked' : '' }} name=\"language\" value=\"French\" type=\"radio\" class=\"btn-check\" id=\"btn-check-3\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-light btn-primary-soft-check\" for=\"btn-check-3\">{% trans %}FRENCH_KEY{% endtrans %}</label>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<!-- Item -->
\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item mb-2\">
\t\t\t\t\t\t\t\t\t\t\t<input {{ language|upper is same as 'ENGLISH' ? 'checked' : '' }} value=\"English\" name=\"language\" type=\"radio\" class=\"btn-check\" id=\"btn-check-4\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"btn btn-light btn-primary-soft-check\" for=\"btn-check-4\">{% trans %}ENGLISH_KEY{% endtrans %}</label>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Language END -->
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<!-- Form End -->
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t<div class=\"d-grid p-2 p-xl-0 bg-body text-center\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary mb-0\" type=\"button\" onclick=\"\$('#filter-form').submit()\">{% trans %}FILTERRESULTS_KEY{% endtrans %}</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Responsive offcanvas body END -->
\t\t\t\t</div>
\t\t\t\t<!-- Right sidebar END -->
\t\t\t</div><!-- Row END -->
\t\t</div>
\t</section>
\t<!-- Page content END -->

\t{{ include('front/includes/_newsletterorange.html.twig') }}

{% endblock %}
", "front/exam/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\exam\\index.html.twig");
    }
}
