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

/* front/includes/category/_item.html.twig */
class __TwigTemplate_59e19a91d3fcef6942f1807897b17b87 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/category/_item.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/category/_item.html.twig"));

        // line 1
        echo "<div class=\"card card-body ";
        echo twig_escape_filter($this->env, ((array_key_exists("bg_classes", $context)) ? (_twig_default_filter((isset($context["bg_classes"]) || array_key_exists("bg_classes", $context) ? $context["bg_classes"] : (function () { throw new RuntimeError('Variable "bg_classes" does not exist.', 1, $this->source); })()), twig_random($this->env, ["bg-success", "bg-danger", "bg-warning", "bg-primary", "bg-secondary", "bg-blue", "bg-cyan", "bg-orange", "bg-dark"]))) : (twig_random($this->env, ["bg-success", "bg-danger", "bg-warning", "bg-primary", "bg-secondary", "bg-blue", "bg-cyan", "bg-orange", "bg-dark"]))), "html", null, true);
        echo " bg-opacity-10 text-center position-relative btn-transition p-4\">
\t\t\t\t\t<!-- Image -->
    <div class=\"icon-xl bg-body mx-auto rounded-circle mb-3\">
        <img style=\"width: 55px; height: 59px;border-radius: 50%;\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/courses/categories/" . twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 4, $this->source); })()), "imageFile", [], "any", false, false, false, 4))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 4, $this->source); })()), "name", [], "any", false, false, false, 4)), "truncate", [1], "method", false, false, false, 4), "html", null, true);
        echo "\">
    </div>
    <!-- Title -->
    <h5 class=\"mb-2\"><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_category_courses", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 7, $this->source); })()), "slug", [], "any", false, false, false, 7)]), "html", null, true);
        echo "\" class=\"stretched-link\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), "html", null, true);
        echo "</a></h5>
    <h6 class=\"mb-0\">15 ";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("COURSES_KEY", [], "messages");
        echo "</h6>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/includes/category/_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 8,  58 => 7,  50 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card card-body {{ bg_classes|default(random(['bg-success', 'bg-danger', 'bg-warning', 'bg-primary', 'bg-secondary', 'bg-blue', 'bg-cyan', 'bg-orange', 'bg-dark'])) }} bg-opacity-10 text-center position-relative btn-transition p-4\">
\t\t\t\t\t<!-- Image -->
    <div class=\"icon-xl bg-body mx-auto rounded-circle mb-3\">
        <img style=\"width: 55px; height: 59px;border-radius: 50%;\" src=\"{{ asset('uploads/media/courses/categories/' ~ category.imageFile) }}\" alt=\"{{ category.name|u.truncate(1) }}\">
    </div>
    <!-- Title -->
    <h5 class=\"mb-2\"><a href=\"{{ url(\"app_front_category_courses\", {slug: category.slug}) }}\" class=\"stretched-link\">{{ category.name }}</a></h5>
    <h6 class=\"mb-0\">15 {% trans %}COURSES_KEY{% endtrans %}</h6>
</div>", "front/includes/category/_item.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\includes\\category\\_item.html.twig");
    }
}
