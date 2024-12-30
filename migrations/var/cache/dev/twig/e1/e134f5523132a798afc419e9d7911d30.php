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

/* student/network/index.html.twig */
class __TwigTemplate_0c429b907b52418c409f496f03061751 extends Template
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
        return "student/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/network/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/network/index.html.twig"));

        $this->parent = $this->loadTemplate("student/base.html.twig", "student/network/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        // line 5
        echo "
    <div class=\"card bg-transparent border rounded-3\">
\t\t<!-- Card header START -->
\t\t<div class=\"card-header bg-transparent border-bottom\">
\t\t\t<h3 class=\"mb-0\">My Network</h3>
\t\t\t<tr>
\t\t\t\t<td colspan=\"4\">
\t\t\t\t\t<b>Invitez les enseignants via le lien : <i class=\"text-primary\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 12, $this->source); })()), "utilisateur", [], "any", false, false, false, 12), "personne", [], "any", false, false, false, 12), "invitationLink", [], "any", false, false, false, 12), "trainer", [], "any", false, false, false, 12), "html", null, true);
        echo "</i></b> <br>
\t\t\t\t\t<b>Invitez les élèves via le lien : <i class=\"text-primary\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 13, $this->source); })()), "utilisateur", [], "any", false, false, false, 13), "personne", [], "any", false, false, false, 13), "invitationLink", [], "any", false, false, false, 13), "student", [], "any", false, false, false, 13), "html", null, true);
        echo "</i></b> <br>
\t\t\t\t\t<b>Ou partagez le code suivant : <i class=\"text-primary\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 14, $this->source); })()), "utilisateur", [], "any", false, false, false, 14), "personne", [], "any", false, false, false, 14), "invitationCode", [], "any", false, false, false, 14), "html", null, true);
        echo "</i></b>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</div>
\t\t<!-- Card header END -->

\t\t<!-- Card body START -->
\t\t<div class=\"card-body\">

\t\t\t<!-- Course list table START -->
\t\t\t<div class=\"table-responsive border-0\">
\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Name</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">email</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Mobile</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Network</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>

\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["network"]) || array_key_exists("network", $context) ? $context["network"] : (function () { throw new RuntimeError('Variable "network" does not exist.', 38, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
            // line 39
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<!-- Image -->
\t\t\t\t\t\t\t\t\t\t<div class=\"w-50px\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["personne"], "avatarPath", [], "any", false, false, false, 45)), "html", null, true);
            echo "\" class=\"rounded\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t\t<h6><a href=\"\">";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "nomComplet", [], "any", false, false, false, 49), "html", null, true);
            echo "</a></h6>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["personne"], "utilisateur", [], "any", false, false, false, 55), "email", [], "any", false, false, false, 55), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "telephone", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>";
            // line 61
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "invites", [], "any", false, false, false, 61)), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 65
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"4\">
                                    <h5>You haven't invited anyone. use the following code or links to invite teachers and students</h5>
\t\t\t\t\t\t\t\t\t<b>Invitez les enseignants via le lien : <i class=\"text-primary\">";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 68, $this->source); })()), "utilisateur", [], "any", false, false, false, 68), "personne", [], "any", false, false, false, 68), "invitationLink", [], "any", false, false, false, 68), "trainer", [], "any", false, false, false, 68), "html", null, true);
            echo "</i></b> <br>
\t\t\t\t\t\t\t\t\t<b>Invitez les enseignants via le lien : <i class=\"text-primary\">";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 69, $this->source); })()), "utilisateur", [], "any", false, false, false, 69), "personne", [], "any", false, false, false, 69), "invitationLink", [], "any", false, false, false, 69), "trainer", [], "any", false, false, false, 69), "html", null, true);
            echo "</i></b> <br>
                                    <b>Invitez les élèves via le lien : <i class=\"text-primary\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 70, $this->source); })()), "utilisateur", [], "any", false, false, false, 70), "personne", [], "any", false, false, false, 70), "invitationLink", [], "any", false, false, false, 70), "student", [], "any", false, false, false, 70), "html", null, true);
            echo "</i></b> 
                                </td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "\t\t\t\t\t</tbody>
\t\t\t\t\t<!-- Table body END -->
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<!-- Course list table END -->

\t\t\t<!-- Pagination START -->
\t\t\t<div class=\"d-sm-flex justify-content-sm-between pagination-container align-items-sm-center mt-4 mt-sm-3\">
\t\t\t\t";
        // line 82
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["network"]) || array_key_exists("network", $context) ? $context["network"] : (function () { throw new RuntimeError('Variable "network" does not exist.', 82, $this->source); })()));
        echo "
\t\t\t</div>
\t\t\t<!-- Pagination END -->
\t\t</div>
\t\t<!-- Card body START -->
\t</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "student/network/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 82,  185 => 74,  175 => 70,  171 => 69,  167 => 68,  162 => 65,  153 => 61,  147 => 58,  141 => 55,  132 => 49,  125 => 45,  117 => 39,  112 => 38,  85 => 14,  81 => 13,  77 => 12,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"student/base.html.twig\" %}


{% block pageContent %}

    <div class=\"card bg-transparent border rounded-3\">
\t\t<!-- Card header START -->
\t\t<div class=\"card-header bg-transparent border-bottom\">
\t\t\t<h3 class=\"mb-0\">My Network</h3>
\t\t\t<tr>
\t\t\t\t<td colspan=\"4\">
\t\t\t\t\t<b>Invitez les enseignants via le lien : <i class=\"text-primary\">{{ student.utilisateur.personne.invitationLink.trainer }}</i></b> <br>
\t\t\t\t\t<b>Invitez les élèves via le lien : <i class=\"text-primary\">{{ student.utilisateur.personne.invitationLink.student }}</i></b> <br>
\t\t\t\t\t<b>Ou partagez le code suivant : <i class=\"text-primary\">{{ student.utilisateur.personne.invitationCode }}</i></b>
\t\t\t\t</td>
\t\t\t</tr>
\t\t</div>
\t\t<!-- Card header END -->

\t\t<!-- Card body START -->
\t\t<div class=\"card-body\">

\t\t\t<!-- Course list table START -->
\t\t\t<div class=\"table-responsive border-0\">
\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Name</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">email</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Mobile</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Network</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>

\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for personne in network %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<!-- Image -->
\t\t\t\t\t\t\t\t\t\t<div class=\"w-50px\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{asset(personne.avatarPath)}}\" class=\"rounded\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t\t<h6><a href=\"\">{{ personne.nomComplet }}</a></h6>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>{{ personne.utilisateur.email }}</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>{{ personne.telephone }}</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>{{ personne.invites|length }}</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"4\">
                                    <h5>You haven't invited anyone. use the following code or links to invite teachers and students</h5>
\t\t\t\t\t\t\t\t\t<b>Invitez les enseignants via le lien : <i class=\"text-primary\">{{ student.utilisateur.personne.invitationLink.trainer }}</i></b> <br>
\t\t\t\t\t\t\t\t\t<b>Invitez les enseignants via le lien : <i class=\"text-primary\">{{ student.utilisateur.personne.invitationLink.trainer }}</i></b> <br>
                                    <b>Invitez les élèves via le lien : <i class=\"text-primary\">{{ student.utilisateur.personne.invitationLink.student }}</i></b> 
                                </td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t\t<!-- Table body END -->
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<!-- Course list table END -->

\t\t\t<!-- Pagination START -->
\t\t\t<div class=\"d-sm-flex justify-content-sm-between pagination-container align-items-sm-center mt-4 mt-sm-3\">
\t\t\t\t{{ knp_pagination_render(network) }}
\t\t\t</div>
\t\t\t<!-- Pagination END -->
\t\t</div>
\t\t<!-- Card body START -->
\t</div>

{% endblock %}


", "student/network/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\student\\network\\index.html.twig");
    }
}
