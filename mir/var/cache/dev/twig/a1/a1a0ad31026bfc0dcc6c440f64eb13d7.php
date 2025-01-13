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

/* front/exam/_item.html.twig */
class __TwigTemplate_6bfe3bb2f526e6affb29cf7cefa694f8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/exam/_item.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/exam/_item.html.twig"));

        // line 1
        echo "<div class=\"col-12\">
    <div class=\"card shadow overflow-hidden p-2\">
        <div class=\"row g-0\">
            <div class=\"col-md-5 overflow-hidden\">
                <img style=\"max-height: 230px;\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/exams/files/" . twig_get_attribute($this->env, $this->source, (isset($context["exam"]) || array_key_exists("exam", $context) ? $context["exam"] : (function () { throw new RuntimeError('Variable "exam" does not exist.', 5, $this->source); })()), "imageFile", [], "any", false, false, false, 5))), "html", null, true);
        echo "\" class=\"rounded-2\" alt=\"Card image\">
            </div>
            <div class=\"col-md-7\">
                <div class=\"card-body\">

                    <!-- Title -->
                    <h5 class=\"card-title\"><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_exam_show", ["reference" => twig_get_attribute($this->env, $this->source, (isset($context["exam"]) || array_key_exists("exam", $context) ? $context["exam"] : (function () { throw new RuntimeError('Variable "exam" does not exist.', 11, $this->source); })()), "reference", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exam"]) || array_key_exists("exam", $context) ? $context["exam"] : (function () { throw new RuntimeError('Variable "exam" does not exist.', 11, $this->source); })()), "title", [], "any", false, false, false, 11), "html", null, true);
        echo "</a></h5>
                    <p class=\"text-truncate-2 d-none d-lg-block\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, (isset($context["exam"]) || array_key_exists("exam", $context) ? $context["exam"] : (function () { throw new RuntimeError('Variable "exam" does not exist.', 12, $this->source); })()), "description", [], "any", false, false, false, 12)), "truncate", [120], "method", false, false, false, 12), "html", null, true);
        echo "</p>

                    <!-- Info -->
                    <ul class=\"list-inline\">
                        <li class=\"list-inline-item h6 fw-light mb-1 mb-sm-0\"><i class=\"far fa-clock text-danger me-2\"></i>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exam"]) || array_key_exists("exam", $context) ? $context["exam"] : (function () { throw new RuntimeError('Variable "exam" does not exist.', 16, $this->source); })()), "duration", [], "any", false, false, false, 16), "html", null, true);
        echo "</li>
                        <li class=\"list-inline-item h6 fw-light mb-1 mb-sm-0\"><i class=\"fas fa-table text-orange me-2\"></i>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["exam"]) || array_key_exists("exam", $context) ? $context["exam"] : (function () { throw new RuntimeError('Variable "exam" does not exist.', 17, $this->source); })()), "classe", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "</li>
                        <li class=\"list-inline-item h6 fw-light\"><i class=\"fas fa-signal text-success me-2\"></i>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["exam"]) || array_key_exists("exam", $context) ? $context["exam"] : (function () { throw new RuntimeError('Variable "exam" does not exist.', 18, $this->source); })()), "category", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
        echo "</li>
                    </ul>

                    <!-- Price and avatar -->
                    <div class=\"d-sm-flex justify-content-sm-between align-items-center\">
                        <!-- Avatar -->
                        <div class=\"d-flex align-items-center\">
                            <div class=\"avatar\">
                                <img class=\"avatar-img rounded-circle\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["exam"]) || array_key_exists("exam", $context) ? $context["exam"] : (function () { throw new RuntimeError('Variable "exam" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "personne", [], "any", false, false, false, 26), "avatarPath", [], "any", false, false, false, 26)), "html", null, true);
        echo "\" alt=\"avatar\">
                            </div>
                            <p class=\"mb-0 ms-2\"><a href=\"#\" class=\"h6 fw-light\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["exam"]) || array_key_exists("exam", $context) ? $context["exam"] : (function () { throw new RuntimeError('Variable "exam" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "personne", [], "any", false, false, false, 28), "nomComplet", [], "any", false, false, false, 28), "html", null, true);
        echo "</a></p>
                        </div>
                        <!-- Price -->
                        <div class=\"mt-3 mt-sm-0\">
                            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_exam_show", ["reference" => twig_get_attribute($this->env, $this->source, (isset($context["exam"]) || array_key_exists("exam", $context) ? $context["exam"] : (function () { throw new RuntimeError('Variable "exam" does not exist.', 32, $this->source); })()), "reference", [], "any", false, false, false, 32)]), "html", null, true);
        echo "\" class=\"btn btn-dark\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("VIEMORE_KEY", [], "messages");
        echo "</a>    
                        </div>                  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/exam/_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 32,  95 => 28,  90 => 26,  79 => 18,  75 => 17,  71 => 16,  64 => 12,  58 => 11,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-12\">
    <div class=\"card shadow overflow-hidden p-2\">
        <div class=\"row g-0\">
            <div class=\"col-md-5 overflow-hidden\">
                <img style=\"max-height: 230px;\" src=\"{{ asset('uploads/media/exams/files/' ~ exam.imageFile) }}\" class=\"rounded-2\" alt=\"Card image\">
            </div>
            <div class=\"col-md-7\">
                <div class=\"card-body\">

                    <!-- Title -->
                    <h5 class=\"card-title\"><a href=\"{{ url(\"app_front_exam_show\", {reference: exam.reference}) }}\">{{ exam.title }}</a></h5>
                    <p class=\"text-truncate-2 d-none d-lg-block\">{{ exam.description|u.truncate(120) }}</p>

                    <!-- Info -->
                    <ul class=\"list-inline\">
                        <li class=\"list-inline-item h6 fw-light mb-1 mb-sm-0\"><i class=\"far fa-clock text-danger me-2\"></i>{{ exam.duration }}</li>
                        <li class=\"list-inline-item h6 fw-light mb-1 mb-sm-0\"><i class=\"fas fa-table text-orange me-2\"></i>{{ exam.classe.name }}</li>
                        <li class=\"list-inline-item h6 fw-light\"><i class=\"fas fa-signal text-success me-2\"></i>{{ exam.category.name }}</li>
                    </ul>

                    <!-- Price and avatar -->
                    <div class=\"d-sm-flex justify-content-sm-between align-items-center\">
                        <!-- Avatar -->
                        <div class=\"d-flex align-items-center\">
                            <div class=\"avatar\">
                                <img class=\"avatar-img rounded-circle\" src=\"{{ asset(exam.user.personne.avatarPath) }}\" alt=\"avatar\">
                            </div>
                            <p class=\"mb-0 ms-2\"><a href=\"#\" class=\"h6 fw-light\">{{ exam.user.personne.nomComplet }}</a></p>
                        </div>
                        <!-- Price -->
                        <div class=\"mt-3 mt-sm-0\">
                            <a href=\"{{ url(\"app_front_exam_show\", {reference: exam.reference}) }}\" class=\"btn btn-dark\">{% trans %}VIEMORE_KEY{% endtrans %}</a>    
                        </div>                  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "front/exam/_item.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\exam\\_item.html.twig");
    }
}
