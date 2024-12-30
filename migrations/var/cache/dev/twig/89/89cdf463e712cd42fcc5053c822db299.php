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

/* instructor/exam/index.html.twig */
class __TwigTemplate_4fb3a99ef753af32cc71d406fbc8bf65 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'btnAction' => [$this, 'block_btnAction'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/exam/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/exam/index.html.twig"));

        $this->parent = $this->loadTemplate("instructor/base.html.twig", "instructor/exam/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_btnAction($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btnAction"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btnAction"));

        // line 4
        echo "    <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instructor_exam_new");
        echo "\" class=\"btn btn-success mb-0\">add new exam</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        // line 8
        echo "
    <!-- Card START -->
\t<div class=\"card border bg-transparent rounded-3\">
\t\t<!-- Card header START -->
\t\t<div class=\"card-header bg-transparent border-bottom\">
\t\t\t<h3 class=\"mb-0\">Exam List</h3>
\t\t</div>
\t\t<!-- Card header END -->

\t\t<!-- Card body START -->
\t\t<div class=\"card-body\">

\t\t\t<!-- Order list table START -->
\t\t\t<div class=\"table-responsive border-0\">
\t\t\t\t<!-- Table START -->
\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Exam Title</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Description</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Subject</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Correction</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>

\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exams"]) || array_key_exists("exams", $context) ? $context["exams"] : (function () { throw new RuntimeError('Variable "exams" does not exist.', 37, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["exam"]) {
            // line 38
            echo "\t\t\t\t\t\t\t<tr>
                                <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exam"], "title", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                                <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exam"], "description", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/exams/files/" . twig_get_attribute($this->env, $this->source, $context["exam"], "sujet", [], "any", false, false, false, 42))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary-soft\"><i class=\"fas fa-file-download\"></i> Download</a>
                                </td>
                                <td>
                                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/exams/files/" . twig_get_attribute($this->env, $this->source, $context["exam"], "correction", [], "any", false, false, false, 45))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-success-soft\"><i class=\"fas fa-file-download\"></i> Download</a>
                                </td>
                                <td class=\"text-center\">
                                    ";
            // line 48
            if ( !twig_get_attribute($this->env, $this->source, $context["exam"], "isPublished", [], "any", false, false, false, 48)) {
                // line 49
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_instructor_exam_published", ["reference" => twig_get_attribute($this->env, $this->source, $context["exam"], "reference", [], "any", false, false, false, 49), "_token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("published" . twig_get_attribute($this->env, $this->source, $context["exam"], "id", [], "any", false, false, false, 49)))]), "html", null, true);
                echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-original-title='Published' class=\"btn btn-sm btn-success-soft btn-round\"><i class=\"fas fa-paper-plane\"></i></a>
                                        <a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_instructor_exam_edit", ["reference" => twig_get_attribute($this->env, $this->source, $context["exam"], "reference", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-original-title='Edit' class=\"btn btn-sm btn-warning-soft btn-round\"><i class=\"fas fa-edit\"></i></a>
                                        <a onclick=\"return confirm('Are you sure that you want to delete this exam?')\" href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_instructor_exam_delete", ["reference" => twig_get_attribute($this->env, $this->source, $context["exam"], "reference", [], "any", false, false, false, 51), "_token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("remove" . twig_get_attribute($this->env, $this->source, $context["exam"], "id", [], "any", false, false, false, 51)))]), "html", null, true);
                echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-original-title='Remove' class=\"btn btn-sm btn-danger-soft btn-round\"><i class=\"fas fa-trash-alt\"></i></a>
                                    ";
            } elseif ( !twig_get_attribute($this->env, $this->source,             // line 52
$context["exam"], "isValidated", [], "any", false, false, false, 52)) {
                // line 53
                echo "                                        <i class=\"badge badge-warning\">Waiting vatidation</i>
                                    ";
            } else {
                // line 55
                echo "                                        <i class=\"badge badge-success\">Published</i>
                                    ";
            }
            // line 57
            echo "                                </td>
                            </tr>
\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 60
            echo "\t\t\t\t\t\t\t<tr><td colspan=\"5\">No Exam's found</td></tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exam'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
\t\t\t\t\t</tbody>
\t\t\t\t\t<!-- Table body END -->
\t\t\t\t</table>
\t\t\t\t<!-- Table END -->
\t\t\t</div>
\t\t\t<!-- Order list table END -->

\t\t\t<!-- Pagination START -->
\t\t\t<div class=\"d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3\">
\t\t\t\t<!-- Content -->
\t\t\t\t<p class=\"mb-0 text-center text-sm-start\">Showing ";
        // line 73
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["exams"]) || array_key_exists("exams", $context) ? $context["exams"] : (function () { throw new RuntimeError('Variable "exams" does not exist.', 73, $this->source); })()), "getCurrentPageNumber", [], "any", false, false, false, 73) - 1) * twig_get_attribute($this->env, $this->source, (isset($context["exams"]) || array_key_exists("exams", $context) ? $context["exams"] : (function () { throw new RuntimeError('Variable "exams" does not exist.', 73, $this->source); })()), "getItemNumberPerPage", [], "any", false, false, false, 73)) + 1), "html", null, true);
        echo " to ";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["exams"]) || array_key_exists("exams", $context) ? $context["exams"] : (function () { throw new RuntimeError('Variable "exams" does not exist.', 73, $this->source); })()), "getItemNumberPerPage", [], "any", false, false, false, 73) * twig_get_attribute($this->env, $this->source, (isset($context["exams"]) || array_key_exists("exams", $context) ? $context["exams"] : (function () { throw new RuntimeError('Variable "exams" does not exist.', 73, $this->source); })()), "getCurrentPageNumber", [], "any", false, false, false, 73)), "html", null, true);
        echo " of ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exams"]) || array_key_exists("exams", $context) ? $context["exams"] : (function () { throw new RuntimeError('Variable "exams" does not exist.', 73, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 73), "html", null, true);
        echo " entries</p>
\t\t\t\t<!-- Pagination -->
\t\t\t\t";
        // line 75
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["exams"]) || array_key_exists("exams", $context) ? $context["exams"] : (function () { throw new RuntimeError('Variable "exams" does not exist.', 75, $this->source); })()));
        echo "
\t\t\t</div>
\t\t\t<!-- Pagination END -->
\t\t</div>
\t\t<!-- Card body START -->
\t</div>
\t<!--Card END  -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "instructor/exam/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 75,  204 => 73,  191 => 62,  184 => 60,  177 => 57,  173 => 55,  169 => 53,  167 => 52,  163 => 51,  159 => 50,  154 => 49,  152 => 48,  146 => 45,  140 => 42,  135 => 40,  131 => 39,  128 => 38,  123 => 37,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"instructor/base.html.twig\" %}

{% block btnAction %}
    <a href=\"{{ path('app_instructor_exam_new') }}\" class=\"btn btn-success mb-0\">add new exam</a>
{% endblock %}

{% block pageContent %}

    <!-- Card START -->
\t<div class=\"card border bg-transparent rounded-3\">
\t\t<!-- Card header START -->
\t\t<div class=\"card-header bg-transparent border-bottom\">
\t\t\t<h3 class=\"mb-0\">Exam List</h3>
\t\t</div>
\t\t<!-- Card header END -->

\t\t<!-- Card body START -->
\t\t<div class=\"card-body\">

\t\t\t<!-- Order list table START -->
\t\t\t<div class=\"table-responsive border-0\">
\t\t\t\t<!-- Table START -->
\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Exam Title</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Description</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Subject</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Correction</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>

\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for exam in exams %}
\t\t\t\t\t\t\t<tr>
                                <td>{{ exam.title }}</td>
                                <td>{{ exam.description }}</td>
                                <td>
                                    <a href=\"{{ asset('uploads/media/exams/files/' ~ exam.sujet) }}\" class=\"btn btn-sm btn-primary-soft\"><i class=\"fas fa-file-download\"></i> Download</a>
                                </td>
                                <td>
                                    <a href=\"{{ asset('uploads/media/exams/files/' ~ exam.correction) }}\" class=\"btn btn-sm btn-success-soft\"><i class=\"fas fa-file-download\"></i> Download</a>
                                </td>
                                <td class=\"text-center\">
                                    {% if not exam.isPublished %}
                                        <a href=\"{{ url(\"app_instructor_exam_published\", {reference: exam.reference, _token: csrf_token('published' ~ exam.id)}) }}\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-original-title='Published' class=\"btn btn-sm btn-success-soft btn-round\"><i class=\"fas fa-paper-plane\"></i></a>
                                        <a href=\"{{ url(\"app_instructor_exam_edit\", {reference: exam.reference}) }}\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-original-title='Edit' class=\"btn btn-sm btn-warning-soft btn-round\"><i class=\"fas fa-edit\"></i></a>
                                        <a onclick=\"return confirm('Are you sure that you want to delete this exam?')\" href=\"{{ url(\"app_instructor_exam_delete\", {reference: exam.reference, _token: csrf_token('remove' ~ exam.id)}) }}\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-original-title='Remove' class=\"btn btn-sm btn-danger-soft btn-round\"><i class=\"fas fa-trash-alt\"></i></a>
                                    {% elseif not exam.isValidated %}
                                        <i class=\"badge badge-warning\">Waiting vatidation</i>
                                    {% else %}
                                        <i class=\"badge badge-success\">Published</i>
                                    {% endif %}
                                </td>
                            </tr>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<tr><td colspan=\"5\">No Exam's found</td></tr>
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t</tbody>
\t\t\t\t\t<!-- Table body END -->
\t\t\t\t</table>
\t\t\t\t<!-- Table END -->
\t\t\t</div>
\t\t\t<!-- Order list table END -->

\t\t\t<!-- Pagination START -->
\t\t\t<div class=\"d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3\">
\t\t\t\t<!-- Content -->
\t\t\t\t<p class=\"mb-0 text-center text-sm-start\">Showing {{ ((exams.getCurrentPageNumber - 1) * exams.getItemNumberPerPage) + 1 }} to {{ exams.getItemNumberPerPage * exams.getCurrentPageNumber }} of {{exams.getTotalItemCount}} entries</p>
\t\t\t\t<!-- Pagination -->
\t\t\t\t{{ knp_pagination_render(exams) }}
\t\t\t</div>
\t\t\t<!-- Pagination END -->
\t\t</div>
\t\t<!-- Card body START -->
\t</div>
\t<!--Card END  -->

{% endblock %}", "instructor/exam/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\instructor\\exam\\index.html.twig");
    }
}
