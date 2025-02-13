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

/* instructor/courses/include/_faq_item.html.twig */
class __TwigTemplate_a3ce7788ace39b9e5c701b5121d270be extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/courses/include/_faq_item.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/courses/include/_faq_item.html.twig"));

        // line 1
        echo "<div class=\"col-12\" id=\"faq-";
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "\">
    <div class=\"bg-body p-3 p-sm-4 border rounded\">
        <!-- Item 1 -->
        <div class=\"d-sm-flex justify-content-sm-between align-items-center mb-2\">
            <!-- Question -->
            <h6 class=\"mb-0 question\">";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "</h6>
            <!-- Button -->
            <div class=\"align-middle\">
                <a href=\"#\" data-index=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "\" data-bs-toggle=\"modal\" data-bs-target=\"#addQuestion\" class=\"btn btn-sm btn-success-soft btn-round me-1 mb-1 mb-md-0 edit-faq\"><i class=\"far fa-fw fa-edit\"></i></a>
                <button type=\"button\" data-delete-url=\"";
        // line 10
        ((twig_get_attribute($this->env, $this->source, ($context["faq"] ?? null), "id", [], "any", true, true, false, 10)) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instructor_delete_faq", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["faq"]) || array_key_exists("faq", $context) ? $context["faq"] : (function () { throw new RuntimeError('Variable "faq" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true))) : (print ("")));
        echo "\" data-index=\"";
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "\" data-id=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["faq"] ?? null), "id", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["faq"] ?? null), "id", [], "any", false, false, false, 10), "")) : ("")), "html", null, true);
        echo "\" class=\"btn btn-sm btn-danger-soft btn-round mb-0 delete-faq\"><i class=\"fas fa-fw fa-times\"></i></button>
            </div>
        </div>
        <!-- Content -->
        <p class=\"answer\">";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["answer"]) || array_key_exists("answer", $context) ? $context["answer"] : (function () { throw new RuntimeError('Variable "answer" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "</p>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "instructor/courses/include/_faq_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 14,  62 => 10,  58 => 9,  52 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-12\" id=\"faq-{{ index }}\">
    <div class=\"bg-body p-3 p-sm-4 border rounded\">
        <!-- Item 1 -->
        <div class=\"d-sm-flex justify-content-sm-between align-items-center mb-2\">
            <!-- Question -->
            <h6 class=\"mb-0 question\">{{ question }}</h6>
            <!-- Button -->
            <div class=\"align-middle\">
                <a href=\"#\" data-index=\"{{ index }}\" data-bs-toggle=\"modal\" data-bs-target=\"#addQuestion\" class=\"btn btn-sm btn-success-soft btn-round me-1 mb-1 mb-md-0 edit-faq\"><i class=\"far fa-fw fa-edit\"></i></a>
                <button type=\"button\" data-delete-url=\"{{ faq.id is defined ? path('app_instructor_delete_faq', {id: faq.id}) : '' }}\" data-index=\"{{ index }}\" data-id=\"{{ faq.id|default('') }}\" class=\"btn btn-sm btn-danger-soft btn-round mb-0 delete-faq\"><i class=\"fas fa-fw fa-times\"></i></button>
            </div>
        </div>
        <!-- Content -->
        <p class=\"answer\">{{ answer }}</p>
    </div>
</div>", "instructor/courses/include/_faq_item.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\instructor\\courses\\include\\_faq_item.html.twig");
    }
}
