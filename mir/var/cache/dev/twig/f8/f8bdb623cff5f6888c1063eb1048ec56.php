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

/* front/includes/courses/_trending_course.html.twig */
class __TwigTemplate_2f14ef82c0586a503d5f46497ecc0712 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/courses/_trending_course.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/courses/_trending_course.html.twig"));

        // line 1
        echo "<!-- Card item START -->
<div>
    <div class=\"card action-trigger-hover border bg-transparent\">
        <!-- Image -->
        <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/courses/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 5, $this->source); })()), "media", [], "any", false, false, false, 5), "imageFile", [], "any", false, false, false, 5))), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 5, $this->source); })()), "intitule", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
        <!-- Ribbon -->
        <div class=\"ribbon mt-3\"><span>";
        // line 7
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 7, $this->source); })()), "isFree", [], "any", false, false, false, 7)) ? ("Free") : ("Premium"));
        echo "</span></div>
        <!-- Card body -->
        <div class=\"card-body pb-0\">
            <!-- Badge and favorite -->
            <div class=\"d-flex justify-content-between mb-3\">
                <span class=\"hstack gap-2\">
                    <span class=\"badge bg-primary bg-opacity-10 text-primary\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 13, $this->source); })()), "niveauDifficulte", [], "any", false, false, false, 13), "html", null, true);
        echo "</span>
                </span>
                <a href=\"#\" class=\"h6 fw-light mb-0\"><i class=\"far fa-bookmark\"></i></a>
            </div>
            <!-- Title -->
            <h5 class=\"card-title\"><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_course_details", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 18, $this->source); })()), "slug", [], "any", false, false, false, 18)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 18, $this->source); })()), "intitule", [], "any", false, false, false, 18)), "truncate", [60, "..."], "method", false, false, false, 18), "html", null, true);
        echo "</a></h5>
            <!-- Rating -->
            <div class=\"d-flex justify-content-between mb-2\">
                <div class=\"hstack gap-2\">
                    <p class=\"text-warning m-0\">";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 22, $this->source); })()), "review", [], "any", false, false, false, 22), "html", null, true);
        echo "<i class=\"fas fa-star text-warning ms-1\"></i></p>
                    <span class=\"small\">(";
        // line 23
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 23, $this->source); })()), "reviews", [], "any", false, false, false, 23)), "html", null, true);
        echo ")</span>
                </div>
                <div class=\"hstack gap-2\">
                    <p class=\"h6 fw-light mb-0 m-0\">";
        // line 26
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 26, $this->source); })()), "eleves", [], "any", false, false, false, 26)), "html", null, true);
        echo "</p>
                    <span class=\"small\">(";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("STUDENT_KEY", [], "messages");
        echo ")</span>
                </div>
            </div>
            <!-- Time -->
            <div class=\"hstack gap-3\">
                <span class=\"h6 fw-light mb-0\"><i class=\"far fa-clock text-danger me-2\"></i>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 32, $this->source); })()), "dureeApprentissage", [], "any", false, false, false, 32), "html", null, true);
        echo "</span>
                <span class=\"h6 fw-light mb-0\"><i class=\"fas fa-table text-orange me-2\"></i>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 33, $this->source); })()), "numberOfLessons", [], "any", false, false, false, 33), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("LESSONS_KEY", [], "messages");
        echo "</span>
            </div>
        </div>
        <!-- Card footer -->
        <div class=\"card-footer pt-0 bg-transparent\">
            <hr>
            <!-- Avatar and Price -->
            <div class=\"d-flex justify-content-between align-items-center\">
                <!-- Avatar -->
                <div class=\"d-flex align-items-center\">
                    <div class=\"avatar avatar-sm\">
                        <img class=\"avatar-img rounded-1\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 44, $this->source); })()), "enseignant", [], "any", false, false, false, 44), "utilisateur", [], "any", false, false, false, 44), "personne", [], "any", false, false, false, 44), "avatarPath", [], "any", false, false, false, 44)), "html", null, true);
        echo "\" alt=\"avatar\">
                    </div>
                    <p class=\"mb-0 ms-2\"><a href=\"#\" class=\"h6 fw-light mb-0\">";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 46, $this->source); })()), "enseignant", [], "any", false, false, false, 46), "utilisateur", [], "any", false, false, false, 46), "personne", [], "any", false, false, false, 46), "firstName", [], "any", false, false, false, 46), "html", null, true);
        echo "</a></p>
                </div>
                <!-- Price -->
                <div>
                    <h4 class=\"text-success mb-0 item-show\">";
        // line 50
        ((twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 50, $this->source); })()), "isFree", [], "any", false, false, false, 50)) ? (print ("Free")) : (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 50, $this->source); })()), "montantAbonnement", [], "any", false, false, false, 50) . "XAF"), "html", null, true))));
        echo "</h4>
                    <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_course_details", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 51, $this->source); })()), "slug", [], "any", false, false, false, 51)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-success-soft item-show-hover\"><i class=\"fas fa-eye me-2\"></i>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("DETAILS_KEY", [], "messages");
        echo "</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Card item END -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/includes/courses/_trending_course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 51,  136 => 50,  129 => 46,  124 => 44,  108 => 33,  104 => 32,  96 => 27,  92 => 26,  86 => 23,  82 => 22,  73 => 18,  65 => 13,  56 => 7,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Card item START -->
<div>
    <div class=\"card action-trigger-hover border bg-transparent\">
        <!-- Image -->
        <img src=\"{{ asset('uploads/media/courses/' ~ course.media.imageFile) }}\" class=\"card-img-top\" alt=\"{{ course.intitule }}\">
        <!-- Ribbon -->
        <div class=\"ribbon mt-3\"><span>{{ course.isFree ? 'Free' : 'Premium' }}</span></div>
        <!-- Card body -->
        <div class=\"card-body pb-0\">
            <!-- Badge and favorite -->
            <div class=\"d-flex justify-content-between mb-3\">
                <span class=\"hstack gap-2\">
                    <span class=\"badge bg-primary bg-opacity-10 text-primary\">{{ course.niveauDifficulte }}</span>
                </span>
                <a href=\"#\" class=\"h6 fw-light mb-0\"><i class=\"far fa-bookmark\"></i></a>
            </div>
            <!-- Title -->
            <h5 class=\"card-title\"><a href=\"{{ url(\"app_front_course_details\", {slug: course.slug}) }}\">{{ course.intitule|u.truncate(60, '...') }}</a></h5>
            <!-- Rating -->
            <div class=\"d-flex justify-content-between mb-2\">
                <div class=\"hstack gap-2\">
                    <p class=\"text-warning m-0\">{{ course.review }}<i class=\"fas fa-star text-warning ms-1\"></i></p>
                    <span class=\"small\">({{ course.reviews|length }})</span>
                </div>
                <div class=\"hstack gap-2\">
                    <p class=\"h6 fw-light mb-0 m-0\">{{ course.eleves|length }}</p>
                    <span class=\"small\">({% trans %}STUDENT_KEY{% endtrans %})</span>
                </div>
            </div>
            <!-- Time -->
            <div class=\"hstack gap-3\">
                <span class=\"h6 fw-light mb-0\"><i class=\"far fa-clock text-danger me-2\"></i>{{ course.dureeApprentissage }}</span>
                <span class=\"h6 fw-light mb-0\"><i class=\"fas fa-table text-orange me-2\"></i>{{ course.numberOfLessons }} {% trans %}LESSONS_KEY{% endtrans %}</span>
            </div>
        </div>
        <!-- Card footer -->
        <div class=\"card-footer pt-0 bg-transparent\">
            <hr>
            <!-- Avatar and Price -->
            <div class=\"d-flex justify-content-between align-items-center\">
                <!-- Avatar -->
                <div class=\"d-flex align-items-center\">
                    <div class=\"avatar avatar-sm\">
                        <img class=\"avatar-img rounded-1\" src=\"{{ asset(course.enseignant.utilisateur.personne.avatarPath) }}\" alt=\"avatar\">
                    </div>
                    <p class=\"mb-0 ms-2\"><a href=\"#\" class=\"h6 fw-light mb-0\">{{ course.enseignant.utilisateur.personne.firstName }}</a></p>
                </div>
                <!-- Price -->
                <div>
                    <h4 class=\"text-success mb-0 item-show\">{{ course.isFree ? 'Free' : course.montantAbonnement ~ 'XAF' }}</h4>
                    <a href=\"{{ url(\"app_front_course_details\", {slug: course.slug}) }}\" class=\"btn btn-sm btn-success-soft item-show-hover\"><i class=\"fas fa-eye me-2\"></i>{% trans %}DETAILS_KEY{% endtrans %}</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Card item END -->", "front/includes/courses/_trending_course.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\includes\\courses\\_trending_course.html.twig");
    }
}
