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

/* instructor/exam/edit.html.twig */
class __TwigTemplate_b5e0d7725300532386d07620b54b2739 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/exam/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/exam/edit.html.twig"));

        $this->parent = $this->loadTemplate("instructor/base.html.twig", "instructor/exam/edit.html.twig", 1);
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
\t\t\t<h3 class=\"mb-0\">Exam Form</h3>
\t\t</div>
\t\t<!-- Card header END -->

\t\t<!-- Card body START -->
\t\t<div class=\"card-body\">
            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["examForm"]) || array_key_exists("examForm", $context) ? $context["examForm"] : (function () { throw new RuntimeError('Variable "examForm" does not exist.', 19, $this->source); })()), 'form_start');
        echo "
                <div class=\"row g-3\">
\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["examForm"]) || array_key_exists("examForm", $context) ? $context["examForm"] : (function () { throw new RuntimeError('Variable "examForm" does not exist.', 22, $this->source); })()), "category", [], "any", false, false, false, 22), 'row');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["examForm"]) || array_key_exists("examForm", $context) ? $context["examForm"] : (function () { throw new RuntimeError('Variable "examForm" does not exist.', 25, $this->source); })()), "classe", [], "any", false, false, false, 25), 'row');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["examForm"]) || array_key_exists("examForm", $context) ? $context["examForm"] : (function () { throw new RuntimeError('Variable "examForm" does not exist.', 28, $this->source); })()), "language", [], "any", false, false, false, 28), 'row');
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["examForm"]) || array_key_exists("examForm", $context) ? $context["examForm"] : (function () { throw new RuntimeError('Variable "examForm" does not exist.', 31, $this->source); })()), "duration", [], "any", false, false, false, 31), 'row');
        echo "
\t\t\t\t\t</div>
                    <div class=\"col-md-9\">
                        <div class=\"row g-2\">
\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["examForm"]) || array_key_exists("examForm", $context) ? $context["examForm"] : (function () { throw new RuntimeError('Variable "examForm" does not exist.', 36, $this->source); })()), "title", [], "any", false, false, false, 36), 'row');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["examForm"]) || array_key_exists("examForm", $context) ? $context["examForm"] : (function () { throw new RuntimeError('Variable "examForm" does not exist.', 39, $this->source); })()), "description", [], "any", false, false, false, 39), 'row', ["attr" => ["rows" => "1"]]);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                    </div>
\t\t\t\t\t<div class=\"col-md-3\">
                        <div class=\"d-none\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["examForm"]) || array_key_exists("examForm", $context) ? $context["examForm"] : (function () { throw new RuntimeError('Variable "examForm" does not exist.', 44, $this->source); })()), "image", [], "any", false, false, false, 44), 'row');
        echo "</div>
\t\t\t\t\t\t<label title=\"Upload exam image file\" for=\"exam_form_image\" style=\"font-size: 6em;cursor: pointer;\">
\t\t\t\t\t\t\t<img src=\"";
        // line 46
        echo twig_escape_filter($this->env, ((((isset($context["exam"]) || array_key_exists("exam", $context) ? $context["exam"] : (function () { throw new RuntimeError('Variable "exam" does not exist.', 46, $this->source); })()) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["exam"]) || array_key_exists("exam", $context) ? $context["exam"] : (function () { throw new RuntimeError('Variable "exam" does not exist.', 46, $this->source); })()), "imageFile", [], "any", false, false, false, 46) === null))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/exams/files/" . twig_get_attribute($this->env, $this->source, (isset($context["exam"]) || array_key_exists("exam", $context) ? $context["exam"] : (function () { throw new RuntimeError('Variable "exam" does not exist.', 46, $this->source); })()), "imageFile", [], "any", false, false, false, 46)))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/courses/4by3/11.jpg"))), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</label>
                    </div>
                    
                    <div class=\"col-md-6\">
                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["examForm"]) || array_key_exists("examForm", $context) ? $context["examForm"] : (function () { throw new RuntimeError('Variable "examForm" does not exist.', 51, $this->source); })()), "sujetFile", [], "any", false, false, false, 51), 'row');
        echo "
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["examForm"]) || array_key_exists("examForm", $context) ? $context["examForm"] : (function () { throw new RuntimeError('Variable "examForm" does not exist.', 54, $this->source); })()), "correctionFile", [], "any", false, false, false, 54), 'row');
        echo "
                    </div>
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["examForm"]) || array_key_exists("examForm", $context) ? $context["examForm"] : (function () { throw new RuntimeError('Variable "examForm" does not exist.', 57, $this->source); })()), 'rest');
        echo "
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary-soft\">Submit</button>
\t\t\t\t\t</div>
                </div>
            ";
        // line 62
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["examForm"]) || array_key_exists("examForm", $context) ? $context["examForm"] : (function () { throw new RuntimeError('Variable "examForm" does not exist.', 62, $this->source); })()), 'form_end');
        echo "
\t\t</div>
\t\t<!-- Card body START -->
\t</div>
\t<!--Card END  -->

    <!-- Card START -->
\t<div class=\"card border bg-transparent rounded-3 mt-3\">
\t\t<!-- Card header START -->
\t\t<div class=\"card-header bg-transparent border-bottom\">
\t\t\t<h3 class=\"mb-0\">Last exams added</h3>
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
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["exams"]) || array_key_exists("exams", $context) ? $context["exams"] : (function () { throw new RuntimeError('Variable "exams" does not exist.', 96, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["exam"]) {
            // line 97
            echo "\t\t\t\t\t\t\t<tr>
                                <td>";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exam"], "title", [], "any", false, false, false, 98), "html", null, true);
            echo "</td>
                                <td>";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exam"], "description", [], "any", false, false, false, 99), "html", null, true);
            echo "</td>
                                <td>
                                    <a href=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/exams/files/" . twig_get_attribute($this->env, $this->source, $context["exam"], "sujet", [], "any", false, false, false, 101))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary-soft\"><i class=\"fas fa-file-download\"></i> Download</a>
                                </td>
                                <td>
                                    <a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/exams/files/" . twig_get_attribute($this->env, $this->source, $context["exam"], "correction", [], "any", false, false, false, 104))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-success-soft\"><i class=\"fas fa-file-download\"></i> Download</a>
                                </td>
                                <td class=\"text-center\">
                                    ";
            // line 107
            if ( !twig_get_attribute($this->env, $this->source, $context["exam"], "isPublished", [], "any", false, false, false, 107)) {
                // line 108
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_instructor_exam_published", ["reference" => twig_get_attribute($this->env, $this->source, $context["exam"], "reference", [], "any", false, false, false, 108), "_token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("published" . twig_get_attribute($this->env, $this->source, $context["exam"], "id", [], "any", false, false, false, 108)))]), "html", null, true);
                echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-original-title='Published' class=\"btn btn-sm btn-success-soft btn-round\"><i class=\"fas fa-paper-plane\"></i></a>
                                        <a href=\"";
                // line 109
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_instructor_exam_edit", ["reference" => twig_get_attribute($this->env, $this->source, $context["exam"], "reference", [], "any", false, false, false, 109)]), "html", null, true);
                echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-original-title='Edit' class=\"btn btn-sm btn-warning-soft btn-round\"><i class=\"fas fa-edit\"></i></a>
                                        <a onclick=\"return confirm('Are you sure that you want to delete this exam?')\" href=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_instructor_exam_delete", ["reference" => twig_get_attribute($this->env, $this->source, $context["exam"], "reference", [], "any", false, false, false, 110), "_token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("remove" . twig_get_attribute($this->env, $this->source, $context["exam"], "id", [], "any", false, false, false, 110)))]), "html", null, true);
                echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-original-title='Remove' class=\"btn btn-sm btn-danger-soft btn-round\"><i class=\"fas fa-trash-alt\"></i></a>
                                    ";
            } elseif ( !twig_get_attribute($this->env, $this->source,             // line 111
$context["exam"], "isValidated", [], "any", false, false, false, 111)) {
                // line 112
                echo "                                        <i class=\"badge badge-warning\">Waiting vatidation</i>
                                    ";
            } else {
                // line 114
                echo "                                        <i class=\"badge badge-success\">Published</i>
                                    ";
            }
            // line 116
            echo "                                </td>
                            </tr>
\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 119
            echo "\t\t\t\t\t\t\t<tr><td colspan=\"5\">No Exam's found</td></tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exam'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        echo "
\t\t\t\t\t</tbody>
\t\t\t\t\t<!-- Table body END -->
\t\t\t\t</table>
\t\t\t\t<!-- Table END -->
\t\t\t</div>
\t\t\t<!-- Order list table END -->

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
        return "instructor/exam/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 121,  282 => 119,  275 => 116,  271 => 114,  267 => 112,  265 => 111,  261 => 110,  257 => 109,  252 => 108,  250 => 107,  244 => 104,  238 => 101,  233 => 99,  229 => 98,  226 => 97,  221 => 96,  184 => 62,  176 => 57,  170 => 54,  164 => 51,  156 => 46,  151 => 44,  143 => 39,  137 => 36,  129 => 31,  123 => 28,  117 => 25,  111 => 22,  105 => 19,  92 => 8,  82 => 7,  69 => 4,  59 => 3,  36 => 1,);
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
\t\t\t<h3 class=\"mb-0\">Exam Form</h3>
\t\t</div>
\t\t<!-- Card header END -->

\t\t<!-- Card body START -->
\t\t<div class=\"card-body\">
            {{ form_start(examForm) }}
                <div class=\"row g-3\">
\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t{{ form_row(examForm.category) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t{{ form_row(examForm.classe) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t{{ form_row(examForm.language) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3\">
\t\t\t\t\t\t{{ form_row(examForm.duration) }}
\t\t\t\t\t</div>
                    <div class=\"col-md-9\">
                        <div class=\"row g-2\">
\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t{{ form_row(examForm.title) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t{{ form_row(examForm.description, {'attr': {'rows': '1'}}) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                    </div>
\t\t\t\t\t<div class=\"col-md-3\">
                        <div class=\"d-none\">{{ form_row(examForm.image) }}</div>
\t\t\t\t\t\t<label title=\"Upload exam image file\" for=\"exam_form_image\" style=\"font-size: 6em;cursor: pointer;\">
\t\t\t\t\t\t\t<img src=\"{{ exam and exam.imageFile is not same as null ? asset('uploads/media/exams/files/' ~ exam.imageFile) : asset('assets/images/courses/4by3/11.jpg') }}\" alt=\"\">
\t\t\t\t\t\t</label>
                    </div>
                    
                    <div class=\"col-md-6\">
                        {{ form_row(examForm.sujetFile) }}
                    </div>
                    <div class=\"col-md-6\">
                        {{ form_row(examForm.correctionFile) }}
                    </div>
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t{{ form_rest(examForm) }}
\t\t\t\t\t\t<hr>
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary-soft\">Submit</button>
\t\t\t\t\t</div>
                </div>
            {{ form_end(examForm) }}
\t\t</div>
\t\t<!-- Card body START -->
\t</div>
\t<!--Card END  -->

    <!-- Card START -->
\t<div class=\"card border bg-transparent rounded-3 mt-3\">
\t\t<!-- Card header START -->
\t\t<div class=\"card-header bg-transparent border-bottom\">
\t\t\t<h3 class=\"mb-0\">Last exams added</h3>
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

\t\t</div>
\t\t<!-- Card body START -->
\t</div>
\t<!--Card END  -->

{% endblock %}", "instructor/exam/edit.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\instructor\\exam\\edit.html.twig");
    }
}
