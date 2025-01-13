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

/* admin/registration/index.html.twig */
class __TwigTemplate_3afd2e37dae85f59fd2fec052825161e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageTitle' => [$this, 'block_pageTitle'],
            'actionBtn' => [$this, 'block_actionBtn'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/registration/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/registration/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/registration/index.html.twig", 1);
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

        echo "Users";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_actionBtn($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actionBtn"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actionBtn"));

        // line 6
        echo "\t<a data-bs-toggle=\"modal\" data-bs-target=\"#addModal\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_registration_register");
        echo "\" class=\"btn btn-sm btn-primary mb-0\">Add New User</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 10
        echo "    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_mainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        // line 14
        echo "
    <!-- Card START -->
\t<div class=\"card bg-transparent border\">

\t\t<!-- Card header START -->
\t\t<div class=\"card-header bg-light border-bottom\">
\t\t\t<!-- Search and select START -->
\t\t\t<div class=\"row g-3 align-items-center justify-content-between\">
\t\t\t\t<!-- Search bar -->
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<form class=\"rounded position-relative\" method=\"get\">
\t\t\t\t\t\t<input value=\"";
        // line 25
        echo twig_escape_filter($this->env, ((array_key_exists("search", $context)) ? (_twig_default_filter((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 25, $this->source); })()), "")) : ("")), "html", null, true);
        echo "\" class=\"form-control bg-body\" type=\"search\" name=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t<button class=\"bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset\" type=\"submit\">
\t\t\t\t\t\t\t<i class=\"fas fa-search fs-6 \"></i>
\t\t\t\t\t\t</button>
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
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Name</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Email</th>
                            <th scope=\"col\" class=\"border-0\">Phone</th>
                            <th scope=\"col\" class=\"border-0\">Pseudo</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t
\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 55, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 56
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center position-relative\">
\t\t\t\t\t\t\t\t\t\t<!-- Image -->
\t\t\t\t\t\t\t\t\t\t<div class=\"w-60px\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "personne", [], "any", false, false, false, 62), "avatarPath", [], "any", false, false, false, 62)), "html", null, true);
            echo "\" class=\"rounded\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h6 class=\"table-responsive-title mb-0 ms-2\">\t
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"stretched-link\">";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "personne", [], "any", false, false, false, 66), "nomComplet", [], "any", false, false, false, 66), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
                                    ";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 73), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</td>
                                <!-- Table data -->
\t\t\t\t\t\t\t\t<td>
                                    ";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "personne", [], "any", false, false, false, 77), "telephone", [], "any", false, false, false, 77), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</td>
                                <!-- Table data -->
\t\t\t\t\t\t\t\t<td>
                                    ";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["user"], "personne", [], "any", false, false, false, 81), "pseudo", [], "any", false, false, false, 81), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</td>
                                
\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_registration_edit_register", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 86)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-success-soft me-1 mb-1 mb-md-0\">Edit</a>
\t\t\t\t\t\t\t\t\t";
            // line 87
            if ( !twig_get_attribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 87)) {
                // line 88
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context["token"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("active" . twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 88)));
                // line 89
                echo "\t\t\t\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_registration_active_user", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 89), "_token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 89, $this->source); })())]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0\">activer</a>
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 91
                echo "\t\t\t\t\t\t\t\t\t\t";
                if ( !twig_get_attribute($this->env, $this->source, $context["user"], "isBlocked", [], "any", false, false, false, 91)) {
                    // line 92
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_registration_block", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 92)]), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-warning-soft me-1 mb-1 mb-md-0\">Block</a>
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 94
                    echo "\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_registration_unblock", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 94)]), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-warning-soft me-1 mb-1 mb-md-0\">Open</a>    
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 96
                echo "\t\t\t\t\t\t\t\t\t";
            }
            // line 97
            echo "                                    
                                    ";
            // line 98
            echo twig_include($this->env, $context, "admin/includes/_delete_form.html.twig", ["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_registration_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 98)]), "token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 98))), "classes" => "btn btn-danger-soft btn-sm"]);
            echo "
\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
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
            // line 102
            echo "\t\t\t\t\t\t\t<tr><td colspan=\"7\">No data found</td></tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
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
\t\t\t<div class=\"d-sm-flex justify-content-sm-between align-items-sm-center\">

\t\t\t</div>
\t\t\t<!-- Pagination END -->
\t\t</div>
\t\t<!-- Card footer END -->
\t</div>
    <!-- Card END -->
 

    <!-- Popup modal for reviwe START -->
    <div class=\"modal fade\" id=\"addModal\" tabindex=\"-1\" aria-labelledby=\"viewReviewLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            ";
        // line 129
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 129, $this->source); })()), 'form_start');
        echo "
                <div class=\"modal-content\">
                    <!-- Modal header -->
                    <div class=\"modal-header bg-dark\">
                        <h5 class=\"modal-title text-white\" id=\"viewReviewLabel\">Add</h5>
                        <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
                    </div>
                    <!-- Modal body -->
                    <div class=\"modal-body\">
                        ";
        // line 138
        echo twig_include($this->env, $context, "admin/registration/_form.html.twig", ["registrationForm" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })())]);
        echo "
                    </div>
                    <!-- Modal footer -->
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
                        <button type=\"submit\" class=\"btn btn-success-soft my-0\">Add</button>
                    </div>
                </div>
            ";
        // line 146
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
    <!-- Popup modal for reviwe END --> 

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/registration/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 146,  344 => 138,  332 => 129,  305 => 104,  298 => 102,  281 => 98,  278 => 97,  275 => 96,  269 => 94,  263 => 92,  260 => 91,  254 => 89,  251 => 88,  249 => 87,  245 => 86,  237 => 81,  230 => 77,  223 => 73,  213 => 66,  206 => 62,  198 => 56,  180 => 55,  147 => 25,  134 => 14,  124 => 13,  113 => 10,  103 => 9,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block pageTitle %}Users{% endblock %}

{% block actionBtn %}
\t<a data-bs-toggle=\"modal\" data-bs-target=\"#addModal\" href=\"{{ path('app_admin_registration_register') }}\" class=\"btn btn-sm btn-primary mb-0\">Add New User</a>
{% endblock %}

{% block script %}
    
{% endblock %}

{% block mainContent %}

    <!-- Card START -->
\t<div class=\"card bg-transparent border\">

\t\t<!-- Card header START -->
\t\t<div class=\"card-header bg-light border-bottom\">
\t\t\t<!-- Search and select START -->
\t\t\t<div class=\"row g-3 align-items-center justify-content-between\">
\t\t\t\t<!-- Search bar -->
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<form class=\"rounded position-relative\" method=\"get\">
\t\t\t\t\t\t<input value=\"{{ search|default('') }}\" class=\"form-control bg-body\" type=\"search\" name=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t<button class=\"bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset\" type=\"submit\">
\t\t\t\t\t\t\t<i class=\"fas fa-search fs-6 \"></i>
\t\t\t\t\t\t</button>
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
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Name</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Email</th>
                            <th scope=\"col\" class=\"border-0\">Phone</th>
                            <th scope=\"col\" class=\"border-0\">Pseudo</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t
\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for user in users %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center position-relative\">
\t\t\t\t\t\t\t\t\t\t<!-- Image -->
\t\t\t\t\t\t\t\t\t\t<div class=\"w-60px\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset(user.personne.avatarPath) }}\" class=\"rounded\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h6 class=\"table-responsive-title mb-0 ms-2\">\t
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"stretched-link\">{{ user.personne.nomComplet }}</a>
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
                                    {{ user.email }}
\t\t\t\t\t\t\t\t</td>
                                <!-- Table data -->
\t\t\t\t\t\t\t\t<td>
                                    {{ user.personne.telephone }}
\t\t\t\t\t\t\t\t</td>
                                <!-- Table data -->
\t\t\t\t\t\t\t\t<td>
                                    {{ user.personne.pseudo }}
\t\t\t\t\t\t\t\t</td>
                                
\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_admin_registration_edit_register', {id: user.id}) }}\" class=\"btn btn-sm btn-success-soft me-1 mb-1 mb-md-0\">Edit</a>
\t\t\t\t\t\t\t\t\t{% if not user.isVerified %}
\t\t\t\t\t\t\t\t\t\t{% set token = csrf_token('active' ~ user.id) %}
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_admin_registration_active_user', {id: user.id, _token: token}) }}\" class=\"btn btn-sm btn-primary-soft me-1 mb-1 mb-md-0\">activer</a>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t{% if not user.isBlocked %}
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_admin_registration_block', {id: user.id}) }}\" class=\"btn btn-sm btn-warning-soft me-1 mb-1 mb-md-0\">Block</a>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_admin_registration_unblock', {id: user.id}) }}\" class=\"btn btn-sm btn-warning-soft me-1 mb-1 mb-md-0\">Open</a>    
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endif %}
                                    
                                    {{ include('admin/includes/_delete_form.html.twig', {path: path('app_admin_registration_delete', {id: user.id}) , token: csrf_token('delete' ~ user.id), classes: 'btn btn-danger-soft btn-sm'}) }}
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
\t\t\t<div class=\"d-sm-flex justify-content-sm-between align-items-sm-center\">

\t\t\t</div>
\t\t\t<!-- Pagination END -->
\t\t</div>
\t\t<!-- Card footer END -->
\t</div>
    <!-- Card END -->
 

    <!-- Popup modal for reviwe START -->
    <div class=\"modal fade\" id=\"addModal\" tabindex=\"-1\" aria-labelledby=\"viewReviewLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            {{ form_start(form) }}
                <div class=\"modal-content\">
                    <!-- Modal header -->
                    <div class=\"modal-header bg-dark\">
                        <h5 class=\"modal-title text-white\" id=\"viewReviewLabel\">Add</h5>
                        <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
                    </div>
                    <!-- Modal body -->
                    <div class=\"modal-body\">
                        {{ include('admin/registration/_form.html.twig', {registrationForm: form}) }}
                    </div>
                    <!-- Modal footer -->
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
                        <button type=\"submit\" class=\"btn btn-success-soft my-0\">Add</button>
                    </div>
                </div>
            {{ form_end(form) }}
        </div>
    </div>
    <!-- Popup modal for reviwe END --> 

{% endblock %}", "admin/registration/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\registration\\index.html.twig");
    }
}
