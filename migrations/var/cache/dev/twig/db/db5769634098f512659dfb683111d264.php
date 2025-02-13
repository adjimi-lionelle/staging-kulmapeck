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

/* lesson/show.html.twig */
class __TwigTemplate_90c3e9ab0cafa1a073a0c23e86114899 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesson/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "lesson/show.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<title>Lesson</title>

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
        echo "    <h1>Lesson</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Slug</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 20, $this->source); })()), "slug", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 24, $this->source); })()), "content", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>VideoLink</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 28, $this->source); })()), "videoLink", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Numero</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 32, $this->source); })()), "numero", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Poster</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 36, $this->source); })()), "poster", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>UpdatedAt</th>
                <td>";
        // line 40
        ((twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 40, $this->source); })()), "updatedAt", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 40, $this->source); })()), "updatedAt", [], "any", false, false, false, 40), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lesson_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lesson_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 49
        echo twig_include($this->env, $context, "lesson/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "lesson/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  144 => 49,  139 => 47,  134 => 45,  126 => 40,  119 => 36,  112 => 32,  105 => 28,  98 => 24,  91 => 20,  84 => 16,  77 => 12,  69 => 6,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<title>Lesson</title>

{% block body %}
    <h1>Lesson</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ lesson.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ lesson.title }}</td>
            </tr>
            <tr>
                <th>Slug</th>
                <td>{{ lesson.slug }}</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>{{ lesson.content }}</td>
            </tr>
            <tr>
                <th>VideoLink</th>
                <td>{{ lesson.videoLink }}</td>
            </tr>
            <tr>
                <th>Numero</th>
                <td>{{ lesson.numero }}</td>
            </tr>
            <tr>
                <th>Poster</th>
                <td>{{ lesson.poster }}</td>
            </tr>
            <tr>
                <th>UpdatedAt</th>
                <td>{{ lesson.updatedAt ? lesson.updatedAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_lesson_index') }}\">back to list</a>

    <a href=\"{{ path('app_lesson_edit', {'id': lesson.id}) }}\">edit</a>

    {{ include('lesson/_delete_form.html.twig') }}
{% endblock %}
", "lesson/show.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\lesson\\show.html.twig");
    }
}
