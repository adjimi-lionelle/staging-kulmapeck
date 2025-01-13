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

/* instructor/courses/include/_table_course_item.html.twig */
class __TwigTemplate_77877d39a7a0037c2150603348c8ad07 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/courses/include/_table_course_item.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/courses/include/_table_course_item.html.twig"));

        // line 1
        echo "<tr>
    <!-- Course item -->
    <td>
        <div class=\"d-flex align-items-center\">
            <!-- Image -->
            <div class=\"w-60px\">
                <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/courses/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 7, $this->source); })()), "media", [], "any", false, false, false, 7), "imageFile", [], "any", false, false, false, 7))), "html", null, true);
        echo "\" class=\"rounded\" alt=\"\">
            </div>
            <div class=\"mb-0 ms-2\">
                <!-- Title -->
                <h6><a target=\"_blank\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_course_details", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 11, $this->source); })()), "slug", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 11, $this->source); })()), "intitule", [], "any", false, false, false, 11), "html", null, true);
        echo "</a></h6>
                <!-- Info -->
                <div class=\"d-sm-flex\">
                    <p class=\"h6 fw-light mb-0 small me-3\"><i class=\"fas fa-table text-orange me-2\"></i>";
        // line 14
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 14, $this->source); })()), "numberOfLessons", [], "any", false, false, false, 14) . "lessons"), "html", null, true);
        echo "</p>
                    <p class=\"h6 fw-light mb-0 small\"><i class=\"fas fa-check-circle text-success me-2\"></i>";
        // line 15
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 15, $this->source); })()), "chapitres", [], "any", false, false, false, 15)) . "chapitre"), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
    </td>
    <!-- Enrolled item -->
    <td class=\"text-center text-sm-start\">";
        // line 21
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 21, $this->source); })()), "eleves", [], "any", false, false, false, 21)), "html", null, true);
        echo "</td>
    <!-- Status item -->
    <td>
        ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 24, $this->source); })()), "isValidated", [], "any", false, false, false, 24)) {
            // line 25
            echo "            <div class=\"badge bg-success bg-opacity-10 text-success\">published and validated</div>
        ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 26
(isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 26, $this->source); })()), "isPublished", [], "any", false, false, false, 26)) {
            // line 27
            echo "            <div class=\"badge bg-danger bg-opacity-10 text-danger\">Waiting for validation</div>
        ";
        } else {
            // line 29
            echo "            <div class=\"badge bg-primary bg-opacity-10 text-primary\">On going redaction</div>\t
        ";
        }
        // line 31
        echo "    </td>
    <!-- Price item -->
    <td>
        ";
        // line 34
        if ((twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 34, $this->source); })()), "montantAbonnement", [], "any", false, false, false, 34) > 0)) {
            // line 35
            echo "            \$";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 35, $this->source); })()), "montantAbonnement", [], "any", false, false, false, 35), "html", null, true);
            echo "
        ";
        } else {
            // line 37
            echo "            <div class=\"badge badge-info bg-opacity-10 text-primary\">Free</div>
        ";
        }
        // line 39
        echo "    </td>
    <!-- Action item -->
    <td class=\"text-center\">
        <a data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-original-title=\"Preview\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instructor_courses_preview", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 42, $this->source); })()), "slug", [], "any", false, false, false, 42)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-primary-soft btn-round me-1 mb-0\"><i class=\"far fa-fw fa-eye\"></i></a>
        ";
        // line 43
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 43, $this->source); })()), "chapitres", [], "any", false, false, false, 43)) > 0)) {
            // line 44
            echo "            <div class=\"dropdown text-end\" style=\"float: right;\">
                <a title=\"Quizzes\" href=\"#\" class=\"btn btn-sm btn-light btn-round small mb-0\" role=\"button\" id=\"dropdownShare2\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    <i class=\"bi bi-three-dots fa-fw\"></i>
                </a>
                <!-- dropdown button -->
                <ul class=\"dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded\" aria-labelledby=\"dropdownShare2\">
                    <li class=\"title\">Quizzes</li>
                    ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 51, $this->source); })()), "chapitres", [], "any", false, false, false, 51), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 51, $this->source); })()), "numero", [], "any", false, false, false, 51) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 51, $this->source); })()), "numero", [], "any", false, false, false, 51)); }));
            foreach ($context['_seq'] as $context["_key"] => $context["chapitre"]) {
                // line 52
                echo "                        <li>
                            <a data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-original-title=\"";
                // line 53
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapitre"], "title", [], "any", false, false, false, 53), "html", null, true);
                echo ": Click to add quizzes\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapitre"], "title", [], "any", false, false, false, 53), "html", null, true);
                echo ": Click to add quizzes\" class=\"dropdown-item\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instructor_courses_quizzes", ["slug" => twig_get_attribute($this->env, $this->source, $context["chapitre"], "slug", [], "any", false, false, false, 53)]), "html", null, true);
                echo "\">
                                <i class=\"fas fa-arrow-right fa-fw me-2\"></i>
                                Chapter ";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapitre"], "numero", [], "any", false, false, false, 55), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chapitre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                    <hr>
                    <li>
                        <a data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-original-title=\"";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 61, $this->source); })()), "intitule", [], "any", false, false, false, 61), "html", null, true);
            echo ": Click to add quizzes\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 61, $this->source); })()), "intitule", [], "any", false, false, false, 61), "html", null, true);
            echo ": Click to add quizzes\" class=\"dropdown-item\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instructor_courses_quizzes_final", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 61, $this->source); })()), "slug", [], "any", false, false, false, 61)]), "html", null, true);
            echo "\">
                            <i class=\"fas fa-arrow-right fa-fw me-2\"></i>
                            Evaluation finale
                        </a>
                    </li>
                    ";
            // line 66
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 66, $this->source); })()), "isValidated", [], "any", false, false, false, 66)) {
                // line 67
                echo "                        <hr>
                        <li>
                            <a href=\"";
                // line 69
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instructor_courses_delete", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 69, $this->source); })()), "slug", [], "any", false, false, false, 69)]), "html", null, true);
                echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-original-title=\"Delete\" title=\"Delete\" class=\"d-block bg-danger-soft-hover p-2 delete-item\"><i class=\"fas fa-fw fa-trash-alt\"></i> Remove</a>
                        </li>
                    ";
            }
            // line 72
            echo "                </ul>
            </div>
        ";
        }
        // line 75
        echo "        ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 75, $this->source); })()), "isPublished", [], "any", false, false, false, 75)) {
            // line 76
            echo "            <a data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-original-title=\"published\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instructor_courses_published", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 76, $this->source); })()), "slug", [], "any", false, false, false, 76), "_token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("published" . twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76)))]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-success-soft btn-round me-1 mb-0\"><i class=\"far fa-fw fa-paper-plane\"></i></a>
        ";
        }
        // line 78
        echo "        ";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 78, $this->source); })()), "isPublished", [], "any", false, false, false, 78)) {
            // line 79
            echo "            <a data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-original-title=\"Edit\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instructor_courses_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 79, $this->source); })()), "slug", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-warning-soft btn-round me-1 mb-0\"><i class=\"far fa-fw fa-edit\"></i></a>
        ";
        }
        // line 81
        echo "    </td>
</tr>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "instructor/courses/include/_table_course_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 81,  208 => 79,  205 => 78,  199 => 76,  196 => 75,  191 => 72,  185 => 69,  181 => 67,  179 => 66,  167 => 61,  163 => 59,  153 => 55,  144 => 53,  141 => 52,  137 => 51,  128 => 44,  126 => 43,  122 => 42,  117 => 39,  113 => 37,  107 => 35,  105 => 34,  100 => 31,  96 => 29,  92 => 27,  90 => 26,  87 => 25,  85 => 24,  79 => 21,  70 => 15,  66 => 14,  58 => 11,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr>
    <!-- Course item -->
    <td>
        <div class=\"d-flex align-items-center\">
            <!-- Image -->
            <div class=\"w-60px\">
                <img src=\"{{ asset('uploads/media/courses/' ~ course.media.imageFile) }}\" class=\"rounded\" alt=\"\">
            </div>
            <div class=\"mb-0 ms-2\">
                <!-- Title -->
                <h6><a target=\"_blank\" href=\"{{ path('app_front_course_details', {slug: course.slug}) }}\">{{ course.intitule }}</a></h6>
                <!-- Info -->
                <div class=\"d-sm-flex\">
                    <p class=\"h6 fw-light mb-0 small me-3\"><i class=\"fas fa-table text-orange me-2\"></i>{{ course.numberOfLessons ~ 'lessons' }}</p>
                    <p class=\"h6 fw-light mb-0 small\"><i class=\"fas fa-check-circle text-success me-2\"></i>{{ course.chapitres|length ~ 'chapitre' }}</p>
                </div>
            </div>
        </div>
    </td>
    <!-- Enrolled item -->
    <td class=\"text-center text-sm-start\">{{ course.eleves|length }}</td>
    <!-- Status item -->
    <td>
        {% if course.isValidated %}
            <div class=\"badge bg-success bg-opacity-10 text-success\">published and validated</div>
        {% elseif course.isPublished %}
            <div class=\"badge bg-danger bg-opacity-10 text-danger\">Waiting for validation</div>
        {% else %}
            <div class=\"badge bg-primary bg-opacity-10 text-primary\">On going redaction</div>\t
        {% endif %}
    </td>
    <!-- Price item -->
    <td>
        {% if course.montantAbonnement > 0 %}
            \${{ course.montantAbonnement }}
        {% else %}
            <div class=\"badge badge-info bg-opacity-10 text-primary\">Free</div>
        {% endif %}
    </td>
    <!-- Action item -->
    <td class=\"text-center\">
        <a data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-original-title=\"Preview\" href=\"{{ path('app_instructor_courses_preview', {slug: course.slug}) }}\" class=\"btn btn-sm btn-primary-soft btn-round me-1 mb-0\"><i class=\"far fa-fw fa-eye\"></i></a>
        {% if course.chapitres|length > 0 %}
            <div class=\"dropdown text-end\" style=\"float: right;\">
                <a title=\"Quizzes\" href=\"#\" class=\"btn btn-sm btn-light btn-round small mb-0\" role=\"button\" id=\"dropdownShare2\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                    <i class=\"bi bi-three-dots fa-fw\"></i>
                </a>
                <!-- dropdown button -->
                <ul class=\"dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded\" aria-labelledby=\"dropdownShare2\">
                    <li class=\"title\">Quizzes</li>
                    {% for chapitre in course.chapitres|sort((a, b) => a.numero <=> b.numero) %}
                        <li>
                            <a data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-original-title=\"{{chapitre.title}}: Click to add quizzes\" title=\"{{chapitre.title}}: Click to add quizzes\" class=\"dropdown-item\" href=\"{{ path('app_instructor_courses_quizzes', {slug: chapitre.slug}) }}\">
                                <i class=\"fas fa-arrow-right fa-fw me-2\"></i>
                                Chapter {{ chapitre.numero}}
                            </a>
                        </li>
                    {% endfor %}
                    <hr>
                    <li>
                        <a data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-original-title=\"{{course.intitule}}: Click to add quizzes\" title=\"{{course.intitule}}: Click to add quizzes\" class=\"dropdown-item\" href=\"{{ path('app_instructor_courses_quizzes_final', {slug: course.slug}) }}\">
                            <i class=\"fas fa-arrow-right fa-fw me-2\"></i>
                            Evaluation finale
                        </a>
                    </li>
                    {% if not course.isValidated %}
                        <hr>
                        <li>
                            <a href=\"{{ path('app_instructor_courses_delete', {slug: course.slug}) }}\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-original-title=\"Delete\" title=\"Delete\" class=\"d-block bg-danger-soft-hover p-2 delete-item\"><i class=\"fas fa-fw fa-trash-alt\"></i> Remove</a>
                        </li>
                    {% endif %}
                </ul>
            </div>
        {% endif %}
        {% if not course.isPublished %}
            <a data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-original-title=\"published\" href=\"{{ path('app_instructor_courses_published', {slug: course.slug, _token: csrf_token('published' ~ course.id)}) }}\" class=\"btn btn-sm btn-success-soft btn-round me-1 mb-0\"><i class=\"far fa-fw fa-paper-plane\"></i></a>
        {% endif %}
        {% if not course.isPublished %}
            <a data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-original-title=\"Edit\" href=\"{{ path('app_instructor_courses_edit', {slug: course.slug}) }}\" class=\"btn btn-sm btn-warning-soft btn-round me-1 mb-0\"><i class=\"far fa-fw fa-edit\"></i></a>
        {% endif %}
    </td>
</tr>
", "instructor/courses/include/_table_course_item.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\instructor\\courses\\include\\_table_course_item.html.twig");
    }
}
