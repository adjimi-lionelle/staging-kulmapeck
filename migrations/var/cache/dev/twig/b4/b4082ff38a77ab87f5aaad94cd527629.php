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

/* instructor/course_forum/subject_message.html.twig */
class __TwigTemplate_bd09ba6151a749b2c58727fb57bf2152 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/course_forum/subject_message.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/course_forum/subject_message.html.twig"));

        $this->parent = $this->loadTemplate("instructor/base.html.twig", "instructor/course_forum/subject_message.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        // line 4
        echo "
    <div class=\"d-flex justify-content-between mb-3\">
        <div>
            <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_instructor_courses_preview", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 7, $this->source); })()), "forum", [], "any", false, false, false, 7), "cours", [], "any", false, false, false, 7), "slug", [], "any", false, false, false, 7)]), "html", null, true);
        echo "\" class=\"btn btn-secondary-soft ml-2\">Back to course details</a>
        </div>
        <div>
            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_instructor_course_forum_index", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 10, $this->source); })()), "forum", [], "any", false, false, false, 10), "cours", [], "any", false, false, false, 10), "slug", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\" class=\"btn btn-primary-soft ml-2\">Back to Sujects List</a>
        </div>
        <form method=\"post\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instructor_course_forum_subject_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        echo "\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13))), "html", null, true);
        echo "\">
            <button class=\"btn btn-danger-soft\">Delete Subject</button>
        </form>
    </div>

    ";
        // line 18
        echo twig_include($this->env, $context, "front/course_forum/_messages.html.twig");
        echo "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "instructor/course_forum/subject_message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 18,  88 => 13,  84 => 12,  79 => 10,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"instructor/base.html.twig\" %}

{% block pageContent %}

    <div class=\"d-flex justify-content-between mb-3\">
        <div>
            <a href=\"{{ url(\"app_instructor_courses_preview\", {slug: sujet.forum.cours.slug}) }}\" class=\"btn btn-secondary-soft ml-2\">Back to course details</a>
        </div>
        <div>
            <a href=\"{{ url(\"app_instructor_course_forum_index\", {slug: sujet.forum.cours.slug}) }}\" class=\"btn btn-primary-soft ml-2\">Back to Sujects List</a>
        </div>
        <form method=\"post\" action=\"{{ path('app_instructor_course_forum_subject_delete', {'id': sujet.id}) }}\" onsubmit=\"return confirm('Are you sure you want to delete this item?');\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ sujet.id) }}\">
            <button class=\"btn btn-danger-soft\">Delete Subject</button>
        </form>
    </div>

    {{ include('front/course_forum/_messages.html.twig') }}

{% endblock %}", "instructor/course_forum/subject_message.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\instructor\\course_forum\\subject_message.html.twig");
    }
}
