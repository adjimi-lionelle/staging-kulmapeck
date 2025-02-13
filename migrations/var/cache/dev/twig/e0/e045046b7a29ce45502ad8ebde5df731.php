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

/* front/includes/courses/_course_item.html.twig */
class __TwigTemplate_3e85630cab3145f22593db0d5744e208 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/courses/_course_item.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/courses/_course_item.html.twig"));

        // line 1
        echo "<div class=\"card shadow h-100\">
    <!-- Image -->
    <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/courses/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 3, $this->source); })()), "media", [], "any", false, false, false, 3), "imageFile", [], "any", false, false, false, 3))), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"course image\">
    <!-- Card body -->
    <div class=\"card-body pb-0\">
        <!-- Badge and favorite -->
        <div class=\"d-flex justify-content-between mb-2\">
            <a href=\"#\" class=\"badge bg-purple bg-opacity-10 text-purple\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 8, $this->source); })()), "niveauDifficulte", [], "any", false, false, false, 8), "html", null, true);
        echo "</a>
            <a href=\"#\" class=\"h6 mb-0\"><i class=\"far fa-heart\"></i></a>
        </div>
        <!-- Title -->
        <h5 class=\"card-title fw-normal\"><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_course_details", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 12, $this->source); })()), "slug", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 12, $this->source); })()), "intitule", [], "any", false, false, false, 12)), "truncate", [48, "..."], "method", false, false, false, 12), "html", null, true);
        echo "</a></h5>
        <p class=\"mb-2 text-truncate-2\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 13, $this->source); })()), "description", [], "any", false, false, false, 13)), "truncate", [100], "method", false, false, false, 13), "html", null, true);
        echo "</p>
        <!-- Rating star -->
        <ul class=\"list-inline mb-0\">
            <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
            <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
            <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
            <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
            <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
            <li class=\"list-inline-item ms-2 h6 fw-light mb-0\">4.0/5.0</li>
        </ul>
    </div>
    <!-- Card footer -->
    <div class=\"card-footer pt-0 pb-3\">
        <hr>
        <div class=\"d-flex justify-content-between\">
            <span class=\"h6 fw-light mb-0\"><i class=\"far fa-clock text-danger me-2\"></i>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 28, $this->source); })()), "dureeApprentissage", [], "any", false, false, false, 28), "html", null, true);
        echo "</span>
            <span class=\"h6 fw-light mb-0\"><i class=\"fas fa-table text-orange me-2\"></i>";
        // line 29
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 29, $this->source); })()), "numberOfLessons", [], "any", false, false, false, 29) >= 10)) ? (twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 29, $this->source); })()), "numberOfLessons", [], "any", false, false, false, 29)) : (("0" . twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 29, $this->source); })()), "numberOfLessons", [], "any", false, false, false, 29)))), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("LESSONS_KEY", [], "messages");
        echo "</span>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/includes/courses/_course_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 29,  86 => 28,  68 => 13,  62 => 12,  55 => 8,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card shadow h-100\">
    <!-- Image -->
    <img src=\"{{ asset('uploads/media/courses/' ~ course.media.imageFile) }}\" class=\"card-img-top\" alt=\"course image\">
    <!-- Card body -->
    <div class=\"card-body pb-0\">
        <!-- Badge and favorite -->
        <div class=\"d-flex justify-content-between mb-2\">
            <a href=\"#\" class=\"badge bg-purple bg-opacity-10 text-purple\">{{ course.niveauDifficulte }}</a>
            <a href=\"#\" class=\"h6 mb-0\"><i class=\"far fa-heart\"></i></a>
        </div>
        <!-- Title -->
        <h5 class=\"card-title fw-normal\"><a href=\"{{ path('app_front_course_details', {slug: course.slug}) }}\">{{ course.intitule|u.truncate(48, '...') }}</a></h5>
        <p class=\"mb-2 text-truncate-2\">{{ course.description|raw|u.truncate(100) }}</p>
        <!-- Rating star -->
        <ul class=\"list-inline mb-0\">
            <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
            <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
            <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
            <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
            <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
            <li class=\"list-inline-item ms-2 h6 fw-light mb-0\">4.0/5.0</li>
        </ul>
    </div>
    <!-- Card footer -->
    <div class=\"card-footer pt-0 pb-3\">
        <hr>
        <div class=\"d-flex justify-content-between\">
            <span class=\"h6 fw-light mb-0\"><i class=\"far fa-clock text-danger me-2\"></i>{{ course.dureeApprentissage }}</span>
            <span class=\"h6 fw-light mb-0\"><i class=\"fas fa-table text-orange me-2\"></i>{{ course.numberOfLessons >= 10 ? course.numberOfLessons : '0' ~ course.numberOfLessons }} {% trans %}LESSONS_KEY{% endtrans %}</span>
        </div>
    </div>
</div>", "front/includes/courses/_course_item.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\includes\\courses\\_course_item.html.twig");
    }
}
