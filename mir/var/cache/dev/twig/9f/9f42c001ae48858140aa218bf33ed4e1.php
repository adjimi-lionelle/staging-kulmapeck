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

/* admin/personne/show.html.twig */
class __TwigTemplate_ace0600a0b8fdd5bba59048fb39aa1f2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/personne/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/personne/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/personne/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Personne";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Personne</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>LastName</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 16, $this->source); })()), "lastName", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>FirstName</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 20, $this->source); })()), "firstName", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pseudo</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 24, $this->source); })()), "pseudo", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>BornAt</th>
                <td>";
        // line 28
        ((twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 28, $this->source); })()), "bornAt", [], "any", false, false, false, 28)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 28, $this->source); })()), "bornAt", [], "any", false, false, false, 28), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>LieuNaissance</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 32, $this->source); })()), "lieuNaissance", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Sexe</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 36, $this->source); })()), "sexe", [], "any", false, false, false, 36), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Avatar</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 40, $this->source); })()), "avatar", [], "any", false, false, false, 40), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 44, $this->source); })()), "adresse", [], "any", false, false, false, 44), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 48, $this->source); })()), "telephone", [], "any", false, false, false, 48), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>InvitationCode</th>
                <td>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 52, $this->source); })()), "invitationCode", [], "any", false, false, false, 52), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>InvitationLink</th>
                <td>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 56, $this->source); })()), "invitationLink", [], "any", false, false, false, 56), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_personne_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_personne_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 63, $this->source); })()), "id", [], "any", false, false, false, 63)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 65
        echo twig_include($this->env, $context, "personne/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/personne/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 65,  186 => 63,  181 => 61,  173 => 56,  166 => 52,  159 => 48,  152 => 44,  145 => 40,  138 => 36,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Personne{% endblock %}

{% block body %}
    <h1>Personne</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ personne.id }}</td>
            </tr>
            <tr>
                <th>LastName</th>
                <td>{{ personne.lastName }}</td>
            </tr>
            <tr>
                <th>FirstName</th>
                <td>{{ personne.firstName }}</td>
            </tr>
            <tr>
                <th>Pseudo</th>
                <td>{{ personne.pseudo }}</td>
            </tr>
            <tr>
                <th>BornAt</th>
                <td>{{ personne.bornAt ? personne.bornAt|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>LieuNaissance</th>
                <td>{{ personne.lieuNaissance }}</td>
            </tr>
            <tr>
                <th>Sexe</th>
                <td>{{ personne.sexe }}</td>
            </tr>
            <tr>
                <th>Avatar</th>
                <td>{{ personne.avatar }}</td>
            </tr>
            <tr>
                <th>Adresse</th>
                <td>{{ personne.adresse }}</td>
            </tr>
            <tr>
                <th>Telephone</th>
                <td>{{ personne.telephone }}</td>
            </tr>
            <tr>
                <th>InvitationCode</th>
                <td>{{ personne.invitationCode }}</td>
            </tr>
            <tr>
                <th>InvitationLink</th>
                <td>{{ personne.invitationLink }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_personne_index') }}\">back to list</a>

    <a href=\"{{ path('app_personne_edit', {'id': personne.id}) }}\">edit</a>

    {{ include('personne/_delete_form.html.twig') }}
{% endblock %}
", "admin/personne/show.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\personne\\show.html.twig");
    }
}
