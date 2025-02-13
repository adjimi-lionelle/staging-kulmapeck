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

/* admin/categorie/index.html.twig */
class __TwigTemplate_6dbb04d123543354afb409c47c9f22ea extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categorie/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/categorie/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/categorie/index.html.twig", 1);
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

        echo "Catégories";
        
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
        echo "\t<a data-bs-toggle=\"modal\" data-bs-target=\"#addCategoryModal\" href=\"#\" class=\"btn btn-sm btn-primary mb-0\">Add category</a>
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
        echo "    <script>
        const showEditModal = (e) => {
            const url = e.currentTarget.dataset.url;
            \$.ajax({
                url: url,
                success: (response) => {
                    \$('#editCategoryModal').html(response)
                    \$('#editCategoryModal').modal('show')
                }
            })
        }

        document.querySelectorAll('.edit_category_btn').forEach(btn => { btn.addEventListener(\"click\", showEditModal) });
        
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 27
    public function block_mainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        // line 28
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
        // line 39
        echo twig_escape_filter($this->env, ((array_key_exists("search", $context)) ? (_twig_default_filter((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 39, $this->source); })()), "")) : ("")), "html", null, true);
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
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Category Name</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 text-center\">SubCategories</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 text-center\">Courses</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 text-center\">Exams</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end text-center\">Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t
\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 69, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 70
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center position-relative\">
\t\t\t\t\t\t\t\t\t\t<!-- Image -->
\t\t\t\t\t\t\t\t\t\t<div class=\"w-60px\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/courses/categories/" . twig_get_attribute($this->env, $this->source, $context["category"], "imageFile", [], "any", false, false, false, 76))), "html", null, true);
            echo "\" class=\"rounded\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h6 class=\"table-responsive-title mb-0 ms-2\">\t
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"stretched-link\">";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 80), "html", null, true);
            echo "</a>
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td >
\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 84
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "subCategories", [], "any", false, false, false, 84)), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 86
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "cours", [], "any", false, false, false, 86)), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">";
            // line 87
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "exams", [], "any", false, false, false, 87)), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t<a data-url=\"";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_categorie_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 90)]), "html", null, true);
            echo "\" href=\"#\" class=\"btn btn-sm btn-success-soft edit_with_modal_btn me-1 mb-1 mb-md-0\">Edit</a>
                                    ";
            // line 91
            echo twig_include($this->env, $context, "admin/categorie/_delete_form.html.twig", ["categorie" => $context["category"]]);
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
            // line 95
            echo "\t\t\t\t\t\t\t<tr><td colspan=\"7\">No data found</td></tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
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
\t\t\t\t<p class=\"mb-0 text-center text-sm-start\"></p>
\t\t\t\t";
        // line 111
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 111, $this->source); })()));
        echo "
\t\t\t</div>
\t\t\t<!-- Pagination END -->
\t\t</div>
\t\t<!-- Card footer END -->
\t</div>
\t\t<!-- Card END -->



        <!-- Popup modal for reviwe START -->
\t\t<div class=\"modal fade\" id=\"addCategoryModal\" tabindex=\"-1\" aria-labelledby=\"viewReviewLabel\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\">
                ";
        // line 124
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 124, $this->source); })()), 'form_start');
        echo "
                    <div class=\"modal-content\">
                        <!-- Modal header -->
                        <div class=\"modal-header bg-dark\">
                            <h5 class=\"modal-title text-white\" id=\"viewReviewLabel\">Add Category</h5>
                            <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
                        </div>
                        <!-- Modal body -->
                        <div class=\"modal-body g-3\">
                            <div class=\"row g-4\">
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 135, $this->source); })()), "name", [], "any", false, false, false, 135), 'row');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-12\">
                            \t\t";
        // line 138
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 138, $this->source); })()), "isSubCategory", [], "any", false, false, false, 138), 'row');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 141, $this->source); })()), "category", [], "any", false, false, false, 141), 'row');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 144, $this->source); })()), "image", [], "any", false, false, false, 144), 'row');
        echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                        </div>
                        <!-- Modal footer -->
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
                            <button type=\"submit\" class=\"btn btn-success-soft my-0\">Add Category</button>
                        </div>
                    </div>
                ";
        // line 154
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["categoryForm"]) || array_key_exists("categoryForm", $context) ? $context["categoryForm"] : (function () { throw new RuntimeError('Variable "categoryForm" does not exist.', 154, $this->source); })()), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<!-- Popup modal for reviwe END --> 

        <div class=\"modal fade\" id=\"editCategoryModal\" tabindex=\"-1\" aria-labelledby=\"viewReviewLabel\" aria-hidden=\"true\">

        </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/categorie/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 154,  339 => 144,  333 => 141,  327 => 138,  321 => 135,  307 => 124,  291 => 111,  275 => 97,  268 => 95,  251 => 91,  247 => 90,  241 => 87,  237 => 86,  232 => 84,  225 => 80,  218 => 76,  210 => 70,  192 => 69,  159 => 39,  146 => 28,  136 => 27,  111 => 10,  101 => 9,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block pageTitle %}Catégories{% endblock %}

{% block actionBtn %}
\t<a data-bs-toggle=\"modal\" data-bs-target=\"#addCategoryModal\" href=\"#\" class=\"btn btn-sm btn-primary mb-0\">Add category</a>
{% endblock %}

{% block script %}
    <script>
        const showEditModal = (e) => {
            const url = e.currentTarget.dataset.url;
            \$.ajax({
                url: url,
                success: (response) => {
                    \$('#editCategoryModal').html(response)
                    \$('#editCategoryModal').modal('show')
                }
            })
        }

        document.querySelectorAll('.edit_category_btn').forEach(btn => { btn.addEventListener(\"click\", showEditModal) });
        
    </script>
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
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Category Name</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 text-center\">SubCategories</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 text-center\">Courses</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 text-center\">Exams</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end text-center\">Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t
\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for category in categories %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center position-relative\">
\t\t\t\t\t\t\t\t\t\t<!-- Image -->
\t\t\t\t\t\t\t\t\t\t<div class=\"w-60px\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/media/courses/categories/' ~ category.imageFile) }}\" class=\"rounded\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t<h6 class=\"table-responsive-title mb-0 ms-2\">\t
\t\t\t\t\t\t\t\t\t\t\t<a href=\"\" class=\"stretched-link\">{{ category.name }}</a>
\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td >
\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ category.subCategories|length }}</td>
\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ category.cours|length }}</td>
\t\t\t\t\t\t\t\t<td class=\"text-center\">{{ category.exams|length }}</td>
\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t<a data-url=\"{{ path('app_admin_categorie_edit', {id: category.id}) }}\" href=\"#\" class=\"btn btn-sm btn-success-soft edit_with_modal_btn me-1 mb-1 mb-md-0\">Edit</a>
                                    {{ include('admin/categorie/_delete_form.html.twig', {categorie: category}) }}
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
\t\t\t\t<p class=\"mb-0 text-center text-sm-start\"></p>
\t\t\t\t{{ knp_pagination_render(categories) }}
\t\t\t</div>
\t\t\t<!-- Pagination END -->
\t\t</div>
\t\t<!-- Card footer END -->
\t</div>
\t\t<!-- Card END -->



        <!-- Popup modal for reviwe START -->
\t\t<div class=\"modal fade\" id=\"addCategoryModal\" tabindex=\"-1\" aria-labelledby=\"viewReviewLabel\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\">
                {{ form_start(categoryForm) }}
                    <div class=\"modal-content\">
                        <!-- Modal header -->
                        <div class=\"modal-header bg-dark\">
                            <h5 class=\"modal-title text-white\" id=\"viewReviewLabel\">Add Category</h5>
                            <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
                        </div>
                        <!-- Modal body -->
                        <div class=\"modal-body g-3\">
                            <div class=\"row g-4\">
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t{{ form_row(categoryForm.name) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-12\">
                            \t\t{{ form_row(categoryForm.isSubCategory) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t{{ form_row(categoryForm.category) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t{{ form_row(categoryForm.image) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
                        </div>
                        <!-- Modal footer -->
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
                            <button type=\"submit\" class=\"btn btn-success-soft my-0\">Add Category</button>
                        </div>
                    </div>
                {{ form_end(categoryForm) }}
\t\t\t</div>
\t\t</div>
\t\t<!-- Popup modal for reviwe END --> 

        <div class=\"modal fade\" id=\"editCategoryModal\" tabindex=\"-1\" aria-labelledby=\"viewReviewLabel\" aria-hidden=\"true\">

        </div>

{% endblock %}
", "admin/categorie/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\categorie\\index.html.twig");
    }
}
