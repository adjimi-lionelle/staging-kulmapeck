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

/* admin/network_config/show.html.twig */
class __TwigTemplate_624182e980cde3f53c679d51d421138b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/network_config/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/network_config/show.html.twig"));

        // line 1
        echo "<!DOCTYPE html>

<title>NetworkConfig</title>

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
        echo "    <h1>NetworkConfig</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["network_config"]) || array_key_exists("network_config", $context) ? $context["network_config"] : (function () { throw new RuntimeError('Variable "network_config" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>NombreDePointsParInvitaton</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["network_config"]) || array_key_exists("network_config", $context) ? $context["network_config"] : (function () { throw new RuntimeError('Variable "network_config" does not exist.', 16, $this->source); })()), "nombreDePointsParInvitaton", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>PourcentageDistributionEnseignant</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["network_config"]) || array_key_exists("network_config", $context) ? $context["network_config"] : (function () { throw new RuntimeError('Variable "network_config" does not exist.', 20, $this->source); })()), "pourcentageDistributionEnseignant", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>PourcentageDistributionEleve</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["network_config"]) || array_key_exists("network_config", $context) ? $context["network_config"] : (function () { throw new RuntimeError('Variable "network_config" does not exist.', 24, $this->source); })()), "pourcentageDistributionEleve", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_network_config_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_network_config_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["network_config"]) || array_key_exists("network_config", $context) ? $context["network_config"] : (function () { throw new RuntimeError('Variable "network_config" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 33
        echo twig_include($this->env, $context, "admin/network_config/_delete_form.html.twig");
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/network_config/show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  116 => 33,  111 => 31,  106 => 29,  98 => 24,  91 => 20,  84 => 16,  77 => 12,  69 => 6,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>

<title>NetworkConfig</title>

{% block body %}
    <h1>NetworkConfig</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ network_config.id }}</td>
            </tr>
            <tr>
                <th>NombreDePointsParInvitaton</th>
                <td>{{ network_config.nombreDePointsParInvitaton }}</td>
            </tr>
            <tr>
                <th>PourcentageDistributionEnseignant</th>
                <td>{{ network_config.pourcentageDistributionEnseignant }}</td>
            </tr>
            <tr>
                <th>PourcentageDistributionEleve</th>
                <td>{{ network_config.pourcentageDistributionEleve }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_admin_network_config_index') }}\">back to list</a>

    <a href=\"{{ path('app_admin_network_config_edit', {'id': network_config.id}) }}\">edit</a>

    {{ include('admin/network_config/_delete_form.html.twig') }}
{% endblock %}
", "admin/network_config/show.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\network_config\\show.html.twig");
    }
}
