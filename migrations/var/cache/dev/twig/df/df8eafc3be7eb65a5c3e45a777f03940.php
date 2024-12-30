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

/* admin/media/show.html.twig */
class __TwigTemplate_ff9f492579e7478bae1eb9587ec3b7af extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/media/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/media/show.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<title>Media</title>

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
        echo "    <h1>Media</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medium"]) || array_key_exists("medium", $context) ? $context["medium"] : (function () { throw new RuntimeError('Variable "medium" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>VideoUrl</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medium"]) || array_key_exists("medium", $context) ? $context["medium"] : (function () { throw new RuntimeError('Variable "medium" does not exist.', 16, $this->source); })()), "videoUrl", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mp4File</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medium"]) || array_key_exists("medium", $context) ? $context["medium"] : (function () { throw new RuntimeError('Variable "medium" does not exist.', 20, $this->source); })()), "mp4File", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>WebMFile</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medium"]) || array_key_exists("medium", $context) ? $context["medium"] : (function () { throw new RuntimeError('Variable "medium" does not exist.', 24, $this->source); })()), "webMFile", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>OggFile</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medium"]) || array_key_exists("medium", $context) ? $context["medium"] : (function () { throw new RuntimeError('Variable "medium" does not exist.', 28, $this->source); })()), "oggFile", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>ImageFile</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["medium"]) || array_key_exists("medium", $context) ? $context["medium"] : (function () { throw new RuntimeError('Variable "medium" does not exist.', 32, $this->source); })()), "imageFile", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_media_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_media_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["medium"]) || array_key_exists("medium", $context) ? $context["medium"] : (function () { throw new RuntimeError('Variable "medium" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 41
        echo twig_include($this->env, $context, "media/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/media/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  130 => 41,  125 => 39,  120 => 37,  112 => 32,  105 => 28,  98 => 24,  91 => 20,  84 => 16,  77 => 12,  69 => 6,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<title>Media</title>

{% block body %}
    <h1>Media</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ medium.id }}</td>
            </tr>
            <tr>
                <th>VideoUrl</th>
                <td>{{ medium.videoUrl }}</td>
            </tr>
            <tr>
                <th>Mp4File</th>
                <td>{{ medium.mp4File }}</td>
            </tr>
            <tr>
                <th>WebMFile</th>
                <td>{{ medium.webMFile }}</td>
            </tr>
            <tr>
                <th>OggFile</th>
                <td>{{ medium.oggFile }}</td>
            </tr>
            <tr>
                <th>ImageFile</th>
                <td>{{ medium.imageFile }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_media_index') }}\">back to list</a>

    <a href=\"{{ path('app_media_edit', {'id': medium.id}) }}\">edit</a>

    {{ include('media/_delete_form.html.twig') }}
{% endblock %}
", "admin/media/show.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\media\\show.html.twig");
    }
}
