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

/* admin/evaluation_question/show.html.twig */
class __TwigTemplate_0f8eb1da93b04183fc092ef928ff9441 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/evaluation_question/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/evaluation_question/show.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<title>EvaluationQuestion</title>

";
        // line 5
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>EvaluationQuestion</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evaluation_question"]) || array_key_exists("evaluation_question", $context) ? $context["evaluation_question"] : (function () { throw new RuntimeError('Variable "evaluation_question" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Question</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evaluation_question"]) || array_key_exists("evaluation_question", $context) ? $context["evaluation_question"] : (function () { throw new RuntimeError('Variable "evaluation_question" does not exist.', 16, $this->source); })()), "question", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Proposition1</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evaluation_question"]) || array_key_exists("evaluation_question", $context) ? $context["evaluation_question"] : (function () { throw new RuntimeError('Variable "evaluation_question" does not exist.', 20, $this->source); })()), "proposition1", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Propoition2</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evaluation_question"]) || array_key_exists("evaluation_question", $context) ? $context["evaluation_question"] : (function () { throw new RuntimeError('Variable "evaluation_question" does not exist.', 24, $this->source); })()), "propoition2", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Proposition3</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evaluation_question"]) || array_key_exists("evaluation_question", $context) ? $context["evaluation_question"] : (function () { throw new RuntimeError('Variable "evaluation_question" does not exist.', 28, $this->source); })()), "proposition3", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Proposition4</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evaluation_question"]) || array_key_exists("evaluation_question", $context) ? $context["evaluation_question"] : (function () { throw new RuntimeError('Variable "evaluation_question" does not exist.', 32, $this->source); })()), "proposition4", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>PropositionJuste</th>
                <td>";
        // line 36
        ((twig_get_attribute($this->env, $this->source, (isset($context["evaluation_question"]) || array_key_exists("evaluation_question", $context) ? $context["evaluation_question"] : (function () { throw new RuntimeError('Variable "evaluation_question" does not exist.', 36, $this->source); })()), "propositionJuste", [], "any", false, false, false, 36)) ? (print (twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, (isset($context["evaluation_question"]) || array_key_exists("evaluation_question", $context) ? $context["evaluation_question"] : (function () { throw new RuntimeError('Variable "evaluation_question" does not exist.', 36, $this->source); })()), "propositionJuste", [], "any", false, false, false, 36), ", "), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_evaluation_question_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_evaluation_question_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["evaluation_question"]) || array_key_exists("evaluation_question", $context) ? $context["evaluation_question"] : (function () { throw new RuntimeError('Variable "evaluation_question" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 45
        echo twig_include($this->env, $context, "admin/evaluation_question/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/evaluation_question/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  137 => 45,  132 => 43,  127 => 41,  119 => 36,  112 => 32,  105 => 28,  98 => 24,  91 => 20,  84 => 16,  77 => 12,  69 => 6,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<title>EvaluationQuestion</title>

{% block body %}
    <h1>EvaluationQuestion</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ evaluation_question.id }}</td>
            </tr>
            <tr>
                <th>Question</th>
                <td>{{ evaluation_question.question }}</td>
            </tr>
            <tr>
                <th>Proposition1</th>
                <td>{{ evaluation_question.proposition1 }}</td>
            </tr>
            <tr>
                <th>Propoition2</th>
                <td>{{ evaluation_question.propoition2 }}</td>
            </tr>
            <tr>
                <th>Proposition3</th>
                <td>{{ evaluation_question.proposition3 }}</td>
            </tr>
            <tr>
                <th>Proposition4</th>
                <td>{{ evaluation_question.proposition4 }}</td>
            </tr>
            <tr>
                <th>PropositionJuste</th>
                <td>{{ evaluation_question.propositionJuste ? evaluation_question.propositionJuste|join(', ') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_admin_evaluation_question_index') }}\">back to list</a>

    <a href=\"{{ path('app_admin_evaluation_question_edit', {'id': evaluation_question.id}) }}\">edit</a>

    {{ include('admin/evaluation_question/_delete_form.html.twig') }}
{% endblock %}
", "admin/evaluation_question/show.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\evaluation_question\\show.html.twig");
    }
}
