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

/* instructor/courses/quiz/_edit_quiz_modal.html.twig */
class __TwigTemplate_3a368b48dcaea900a52a271a31b5ebb1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/courses/quiz/_edit_quiz_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/courses/quiz/_edit_quiz_modal.html.twig"));

        // line 1
        echo "<!-- Edit course modal START -->
<div class=\"modal fade\" id=\"editQuestion";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2), "html", null, true);
        echo "\" tabindex=\"-1\" aria-labelledby=\"editQuestionLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<form class=\"modal-content\" method=\"post\" action=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instructor_courses_quiz_edit", ["reference" => twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 4, $this->source); })()), "reference", [], "any", false, false, false, 4)]), "html", null, true);
        echo "\">
\t\t\t<div class=\"modal-header bg-dark\">
\t\t\t\t<h5 class=\"modal-title text-white\" id=\"editQuestionLabel\">Edit Question</h5>
\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"row text-start g-3\">
                    
\t\t\t\t\t<!-- Question -->
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<label class=\"form-label\">Question</label>
\t\t\t\t\t\t<input name=\"question\" class=\"form-control\" type=\"text\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 15, $this->source); })()), "question", [], "any", false, false, false, 15), "html", null, true);
        echo "\" placeholder=\"Write a question\">
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Answer options START -->
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<label class=\"form-label\">Proposition 1</label>
\t\t\t\t\t\t<input name=\"proposition1\" class=\"form-control\" type=\"text\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 21, $this->source); })()), "proposition1", [], "any", false, false, false, 21), "html", null, true);
        echo "\" placeholder=\"Write a option\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<label class=\"form-label\">Option 2</label>
\t\t\t\t\t\t<input name=\"proposition2\" class=\"form-control\" type=\"text\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 26, $this->source); })()), "proposition2", [], "any", false, false, false, 26), "html", null, true);
        echo "\" placeholder=\"Write a option\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<label class=\"form-label\">Option 3</label>
\t\t\t\t\t\t<input name=\"proposition3\" class=\"form-control\" type=\"text\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 31, $this->source); })()), "proposition3", [], "any", false, false, false, 31), "html", null, true);
        echo "\" placeholder=\"Write a option\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<label class=\"form-label\">Option 4</label>
\t\t\t\t\t\t<input name=\"proposition4\" class=\"form-control\" type=\"text\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 36, $this->source); })()), "proposition4", [], "any", false, false, false, 36), "html", null, true);
        echo "\" placeholder=\"Write a option\">
\t\t\t\t\t</div>

                    <div class=\"col-12\">
\t\t\t\t\t\t<label class=\"form-label\">Proposition justes </label>
\t\t\t\t\t\t<select name=\"propositionJuste\" multiple class=\"form-control js-choice\">
                            <option value=\"1\">1</option>
                            <option value=\"2\">2</option>
                            <option value=\"3\">3</option>
                            <option value=\"4\">4</option>
                        </select>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Answer options END -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t\t<button type=\"submit\" class=\"btn btn-success my-0\">Save change</button>
\t\t\t</div>
\t\t</form>
\t</div>
</div>
<!-- Edit course modal START -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "instructor/courses/quiz/_edit_quiz_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  90 => 31,  82 => 26,  74 => 21,  65 => 15,  51 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Edit course modal START -->
<div class=\"modal fade\" id=\"editQuestion{{ quiz.id }}\" tabindex=\"-1\" aria-labelledby=\"editQuestionLabel\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<form class=\"modal-content\" method=\"post\" action=\"{{ path('app_instructor_courses_quiz_edit', {reference: quiz.reference}) }}\">
\t\t\t<div class=\"modal-header bg-dark\">
\t\t\t\t<h5 class=\"modal-title text-white\" id=\"editQuestionLabel\">Edit Question</h5>
\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t<div class=\"row text-start g-3\">
                    
\t\t\t\t\t<!-- Question -->
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t<label class=\"form-label\">Question</label>
\t\t\t\t\t\t<input name=\"question\" class=\"form-control\" type=\"text\" value=\"{{ quiz.question }}\" placeholder=\"Write a question\">
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Answer options START -->
\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<label class=\"form-label\">Proposition 1</label>
\t\t\t\t\t\t<input name=\"proposition1\" class=\"form-control\" type=\"text\" value=\"{{ quiz.proposition1 }}\" placeholder=\"Write a option\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<label class=\"form-label\">Option 2</label>
\t\t\t\t\t\t<input name=\"proposition2\" class=\"form-control\" type=\"text\" value=\"{{ quiz.proposition2 }}\" placeholder=\"Write a option\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<label class=\"form-label\">Option 3</label>
\t\t\t\t\t\t<input name=\"proposition3\" class=\"form-control\" type=\"text\" value=\"{{ quiz.proposition3 }}\" placeholder=\"Write a option\">
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t<label class=\"form-label\">Option 4</label>
\t\t\t\t\t\t<input name=\"proposition4\" class=\"form-control\" type=\"text\" value=\"{{ quiz.proposition4 }}\" placeholder=\"Write a option\">
\t\t\t\t\t</div>

                    <div class=\"col-12\">
\t\t\t\t\t\t<label class=\"form-label\">Proposition justes </label>
\t\t\t\t\t\t<select name=\"propositionJuste\" multiple class=\"form-control js-choice\">
                            <option value=\"1\">1</option>
                            <option value=\"2\">2</option>
                            <option value=\"3\">3</option>
                            <option value=\"4\">4</option>
                        </select>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Answer options END -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t\t<button type=\"submit\" class=\"btn btn-success my-0\">Save change</button>
\t\t\t</div>
\t\t</form>
\t</div>
</div>
<!-- Edit course modal START -->", "instructor/courses/quiz/_edit_quiz_modal.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\instructor\\courses\\quiz\\_edit_quiz_modal.html.twig");
    }
}
