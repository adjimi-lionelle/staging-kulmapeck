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

/* admin/classe/index.html.twig */
class __TwigTemplate_e5b06b040d5f15453793b14723f24c6f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/classe/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/classe/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/classe/index.html.twig", 1);
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

        echo "Sous-systèmes scolaire";
        
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
        echo "\t<a data-bs-toggle=\"modal\" data-bs-target=\"#addModal\" href=\"#\" class=\"btn btn-sm btn-primary mb-0\">Add Class</a>
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
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Class Name</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Speciality</th>
                            <th scope=\"col\" class=\"border-0\">Courses</th>
                            <th scope=\"col\" class=\"border-0\">Students</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t
\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 55, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 56
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center position-relative\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h6 class=\"table-responsive-title mb-0 ms-2\">\t
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"stretched-link\">";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classe"], "name", [], "any", false, false, false, 63), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
                                    ";
            // line 70
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["classe"], "specialite", [], "any", false, true, false, 70), "name", [], "any", true, true, false, 70)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["classe"], "specialite", [], "any", false, true, false, 70), "name", [], "any", false, false, false, 70), "-")) : ("-")), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</td>
                                <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classe"], "cours", [], "any", false, false, false, 72)), "html", null, true);
            echo "</td>
                                <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classe"], "eleves", [], "any", false, false, false, 73)), "html", null, true);
            echo "</td>
                                
\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a data-url=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_classe_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["classe"], "id", [], "any", false, false, false, 77)]), "html", null, true);
            echo "\" href=\"#\" class=\"btn btn-sm btn-success-soft edit_with_modal_btn me-1 mb-1 mb-md-0\">Edit</a>
                                    ";
            // line 78
            echo twig_include($this->env, $context, "admin/classe/_delete_form.html.twig");
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
            // line 82
            echo "\t\t\t\t\t\t\t<tr><td colspan=\"7\">No data found</td></tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
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
\t\t<!-- Card END -->



        <!-- Popup modal for reviwe START -->
\t\t<div class=\"modal fade\" id=\"addModal\" tabindex=\"-1\" aria-labelledby=\"viewReviewLabel\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\">
                ";
        // line 110
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), 'form_start');
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
        // line 119
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), 'row');
        echo "
                        </div>
                        <!-- Modal footer -->
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
                            <button type=\"submit\" class=\"btn btn-success-soft my-0\">Add</button>
                        </div>
                    </div>
                ";
        // line 127
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<!-- Popup modal for reviwe END --> 

        

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/classe/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 127,  299 => 119,  287 => 110,  259 => 84,  252 => 82,  235 => 78,  231 => 77,  224 => 73,  220 => 72,  215 => 70,  205 => 63,  196 => 56,  178 => 55,  145 => 25,  132 => 14,  122 => 13,  111 => 10,  101 => 9,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block pageTitle %}Sous-systèmes scolaire{% endblock %}

{% block actionBtn %}
\t<a data-bs-toggle=\"modal\" data-bs-target=\"#addModal\" href=\"#\" class=\"btn btn-sm btn-primary mb-0\">Add Class</a>
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
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Class Name</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Speciality</th>
                            <th scope=\"col\" class=\"border-0\">Courses</th>
                            <th scope=\"col\" class=\"border-0\">Students</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t
\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for classe in classes %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center position-relative\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h6 class=\"table-responsive-title mb-0 ms-2\">\t
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"stretched-link\">{{ classe.name }}</a>
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
                                    {{ classe.specialite.name|default('-') }}
\t\t\t\t\t\t\t\t</td>
                                <td>{{ classe.cours|length }}</td>
                                <td>{{ classe.eleves|length }}</td>
                                
\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<a data-url=\"{{ path('app_admin_classe_edit', {id: classe.id}) }}\" href=\"#\" class=\"btn btn-sm btn-success-soft edit_with_modal_btn me-1 mb-1 mb-md-0\">Edit</a>
                                    {{ include('admin/classe/_delete_form.html.twig') }}
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
\t\t<!-- Card END -->



        <!-- Popup modal for reviwe START -->
\t\t<div class=\"modal fade\" id=\"addModal\" tabindex=\"-1\" aria-labelledby=\"viewReviewLabel\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\">
                {{ form_start(form) }}
                    <div class=\"modal-content\">
                        <!-- Modal header -->
                        <div class=\"modal-header bg-dark\">
                            <h5 class=\"modal-title text-white\" id=\"viewReviewLabel\">Add</h5>
                            <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
                        </div>
                        <!-- Modal body -->
                        <div class=\"modal-body\">
                            {{ form_row(form) }}
                        </div>
                        <!-- Modal footer -->
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
                            <button type=\"submit\" class=\"btn btn-success-soft my-0\">Add</button>
                        </div>
                    </div>
                {{ form_end(form) }}
\t\t\t</div>
\t\t</div>
\t\t<!-- Popup modal for reviwe END --> 

        

{% endblock %}", "admin/classe/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\classe\\index.html.twig");
    }
}
