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

/* instructor/courses/include/_lesson_item.html.twig */
class __TwigTemplate_672d5e690aa3ad62f0eaa3e753ab2d08 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/courses/include/_lesson_item.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/courses/include/_lesson_item.html.twig"));

        // line 1
        echo "<div class=\"d-flex justify-content-between align-items-center\">
    <div class=\"position-relative\">
        <a href=\"#\" class=\"btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static\">
            ";
        // line 4
        if (((isset($context["videoLink"]) || array_key_exists("videoLink", $context) ? $context["videoLink"] : (function () { throw new RuntimeError('Variable "videoLink" does not exist.', 4, $this->source); })()) === "")) {
            // line 5
            echo "                <i class=\"fas fa-file\"></i>
            ";
        } else {
            // line 7
            echo "                <i class=\"fas fa-play\"></i>
            ";
        }
        // line 9
        echo "        </a>
        <span id=\"lesson_";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "_chapitre_";
        echo twig_escape_filter($this->env, (isset($context["chapIndex"]) || array_key_exists("chapIndex", $context) ? $context["chapIndex"] : (function () { throw new RuntimeError('Variable "chapIndex" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "_title\" class=\"ms-2 mb-0 h6 fw-light\"> Lesson ";
        echo twig_escape_filter($this->env, (isset($context["numero"]) || array_key_exists("numero", $context) ? $context["numero"] : (function () { throw new RuntimeError('Variable "numero" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "</span>
    </div>
    <!-- Edit and cancel button -->
    <div>
        <a data-bs-toggle=\"modal\" data-bs-target=\"#addTopic\" href=\"#\" data-index=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "\" data-id=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14), "html", null, true);
        echo " data-title-reference=\"lesson_";
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "_chapitre_";
        echo twig_escape_filter($this->env, (isset($context["chapIndex"]) || array_key_exists("chapIndex", $context) ? $context["chapIndex"] : (function () { throw new RuntimeError('Variable "chapIndex" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "_title\" data-chap-index=\"";
        echo twig_escape_filter($this->env, (isset($context["chapIndex"]) || array_key_exists("chapIndex", $context) ? $context["chapIndex"] : (function () { throw new RuntimeError('Variable "chapIndex" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-sm btn-success-soft btn-round me-1 mb-1 mb-md-0 edit-lesson-btn\"><i class=\"far fa-fw fa-edit\"></i></a>
        <button type=\"button\" data-delete-url=\"";
        // line 15
        ((twig_get_attribute($this->env, $this->source, ($context["lesson"] ?? null), "id", [], "any", true, true, false, 15)) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instructor_delete_lesson", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true))) : (print ("")));
        echo "\" data-id=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["lesson"] ?? null), "id", [], "any", true, true, false, 15)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["lesson"] ?? null), "id", [], "any", false, false, false, 15), "")) : ("")), "html", null, true);
        echo "\" data-index=\"";
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\" data-title-reference=\"lesson_";
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "_chapitre_";
        echo twig_escape_filter($this->env, (isset($context["chapIndex"]) || array_key_exists("chapIndex", $context) ? $context["chapIndex"] : (function () { throw new RuntimeError('Variable "chapIndex" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "_title\" data-chap-index=\"";
        echo twig_escape_filter($this->env, (isset($context["chapIndex"]) || array_key_exists("chapIndex", $context) ? $context["chapIndex"] : (function () { throw new RuntimeError('Variable "chapIndex" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-sm btn-danger-soft btn-round mb-0 delete-lesson-btn\"><i class=\"fas fa-fw fa-times\"></i></button>
    </div>
</div>
<hr>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "instructor/courses/include/_lesson_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 15,  74 => 14,  61 => 10,  58 => 9,  54 => 7,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"d-flex justify-content-between align-items-center\">
    <div class=\"position-relative\">
        <a href=\"#\" class=\"btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static\">
            {% if videoLink is same as '' %}
                <i class=\"fas fa-file\"></i>
            {% else %}
                <i class=\"fas fa-play\"></i>
            {% endif %}
        </a>
        <span id=\"lesson_{{ index }}_chapitre_{{ chapIndex }}_title\" class=\"ms-2 mb-0 h6 fw-light\"> Lesson {{ numero }} : {{ title }}</span>
    </div>
    <!-- Edit and cancel button -->
    <div>
        <a data-bs-toggle=\"modal\" data-bs-target=\"#addTopic\" href=\"#\" data-index=\"{{ index }}\" data-id={{lesson.id}} data-title-reference=\"lesson_{{ index }}_chapitre_{{ chapIndex }}_title\" data-chap-index=\"{{ chapIndex }}\" class=\"btn btn-sm btn-success-soft btn-round me-1 mb-1 mb-md-0 edit-lesson-btn\"><i class=\"far fa-fw fa-edit\"></i></a>
        <button type=\"button\" data-delete-url=\"{{ lesson.id is defined ? path('app_instructor_delete_lesson', {id: lesson.id}) : '' }}\" data-id=\"{{ lesson.id|default('') }}\" data-index=\"{{ index }}\" data-title-reference=\"lesson_{{ index }}_chapitre_{{ chapIndex }}_title\" data-chap-index=\"{{ chapIndex }}\" class=\"btn btn-sm btn-danger-soft btn-round mb-0 delete-lesson-btn\"><i class=\"fas fa-fw fa-times\"></i></button>
    </div>
</div>
<hr>
", "instructor/courses/include/_lesson_item.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\instructor\\courses\\include\\_lesson_item.html.twig");
    }
}
