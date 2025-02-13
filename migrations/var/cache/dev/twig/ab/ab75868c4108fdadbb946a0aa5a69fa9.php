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

/* admin/faq/show.html.twig */
class __TwigTemplate_a8fea9ecade8f6966cbe41d5e4401442 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/faq/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/faq/show.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<title>FAQ</title>

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
        echo "    <h1>FAQ</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["f_a_q"]) || array_key_exists("f_a_q", $context) ? $context["f_a_q"] : (function () { throw new RuntimeError('Variable "f_a_q" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Question</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["f_a_q"]) || array_key_exists("f_a_q", $context) ? $context["f_a_q"] : (function () { throw new RuntimeError('Variable "f_a_q" does not exist.', 16, $this->source); })()), "question", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Answer</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["f_a_q"]) || array_key_exists("f_a_q", $context) ? $context["f_a_q"] : (function () { throw new RuntimeError('Variable "f_a_q" does not exist.', 20, $this->source); })()), "answer", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_f_a_q_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_f_a_q_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["f_a_q"]) || array_key_exists("f_a_q", $context) ? $context["f_a_q"] : (function () { throw new RuntimeError('Variable "f_a_q" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 29
        echo twig_include($this->env, $context, "faq/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/faq/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  109 => 29,  104 => 27,  99 => 25,  91 => 20,  84 => 16,  77 => 12,  69 => 6,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<title>FAQ</title>

{% block body %}
    <h1>FAQ</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ f_a_q.id }}</td>
            </tr>
            <tr>
                <th>Question</th>
                <td>{{ f_a_q.question }}</td>
            </tr>
            <tr>
                <th>Answer</th>
                <td>{{ f_a_q.answer }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_f_a_q_index') }}\">back to list</a>

    <a href=\"{{ path('app_f_a_q_edit', {'id': f_a_q.id}) }}\">edit</a>

    {{ include('faq/_delete_form.html.twig') }}
{% endblock %}
", "admin/faq/show.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\faq\\show.html.twig");
    }
}
