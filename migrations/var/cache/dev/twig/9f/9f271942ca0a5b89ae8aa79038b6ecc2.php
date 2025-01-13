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

/* instructor/network/index.html.twig */
class __TwigTemplate_006aec8267fd5cfebc4d4ea537cb7177 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/network/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/network/index.html.twig"));

        $this->parent = $this->loadTemplate("instructor/base.html.twig", "instructor/network/index.html.twig", 1);
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
\t<div class=\"row g-4 mb-5\">
\t\t<!-- Counter item -->
\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t<div class=\"d-flex justify-content-center align-items-center p-4 bg-warning bg-opacity-15 rounded-3\">
\t\t\t\t<span class=\"display-6 text-warning mb-0\"><i class=\"fas fa-tv fa-fw\"></i></span>
\t\t\t\t<div class=\"ms-4\">
\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t<h5 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 13, $this->source); })()), "utilisateur", [], "any", false, false, false, 13), "points", [], "any", false, false, false, 13), "html", null, true);
        echo "\"\tdata-purecounter-delay=\"200\">0</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"mb-0 h6 fw-light\">Total Des points</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Counter item -->
\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t<div class=\"d-flex justify-content-center align-items-center p-4 bg-purple bg-opacity-10 rounded-3\">
\t\t\t\t<span class=\"display-6 text-purple mb-0\"><i class=\"fas fa-dollar-sign fa-fw\"></i></span>
\t\t\t\t<div class=\"ms-4\">
\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t<h5 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 25, $this->source); })()), "utilisateur", [], "any", false, false, false, 25), "especes", [], "any", false, false, false, 25), "html", null, true);
        echo "\"\tdata-purecounter-delay=\"200\">0</h5>
\t\t\t\t\t\t";
        // line 27
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"mb-0 h6 fw-light\">Montant en espèce</span>
\t\t\t\t\t<br>
\t\t\t\t\t<a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_instructor_network_retrait");
        echo "\">Faire le retrait</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t</div>

    <div class=\"card bg-transparent border rounded-3\">
\t\t<!-- Card header START -->
\t\t<div class=\"card-header bg-transparent border-bottom\">
\t\t\t<h3 class=\"mb-0\">My Network</h3>
\t\t\t<tr>
\t\t\t\t<td colspan=\"4\">
\t\t\t\t\t<b>Invitez les enseignants via le lien : <i class=\"text-primary\">";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 43, $this->source); })()), "utilisateur", [], "any", false, false, false, 43), "personne", [], "any", false, false, false, 43), "invitationLink", [], "any", false, false, false, 43), "trainer", [], "any", false, false, false, 43), "html", null, true);
        echo "</i></b> <br>
\t\t\t\t\t<b>Invitez les élèves via le lien : <i class=\"text-primary\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 44, $this->source); })()), "utilisateur", [], "any", false, false, false, 44), "personne", [], "any", false, false, false, 44), "invitationLink", [], "any", false, false, false, 44), "student", [], "any", false, false, false, 44), "html", null, true);
        echo "</i></b> <br>
\t\t\t\t\t<b>Ou partagez le code suivant : <i class=\"text-primary\">";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 45, $this->source); })()), "utilisateur", [], "any", false, false, false, 45), "personne", [], "any", false, false, false, 45), "invitationCode", [], "any", false, false, false, 45), "html", null, true);
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
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["network"]) || array_key_exists("network", $context) ? $context["network"] : (function () { throw new RuntimeError('Variable "network" does not exist.', 68, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["personne"]) {
            // line 69
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t<!-- Image -->
\t\t\t\t\t\t\t\t\t\t<div class=\"w-100px\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["personne"], "avatarPath", [], "any", false, false, false, 75)), "html", null, true);
            echo "\" class=\"rounded\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"mb-0 ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t\t\t\t<h6><a href=\"\">";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "nomComplet", [], "any", false, false, false, 79), "html", null, true);
            echo "</a></h6>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["personne"], "utilisateur", [], "any", false, false, false, 85), "email", [], "any", false, false, false, 85), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "telephone", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>";
            // line 91
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["personne"], "invites", [], "any", false, false, false, 91)), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t
\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 95
            echo "\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<td colspan=\"4\">
                                    <h5>You haven't invited anyone. use the following code or links to invite teachers and students</h5>
                                    <b>Invitez les enseignants via le lien : <i class=\"text-primary\">";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 98, $this->source); })()), "utilisateur", [], "any", false, false, false, 98), "personne", [], "any", false, false, false, 98), "invitationLink", [], "any", false, false, false, 98), "trainer", [], "any", false, false, false, 98), "html", null, true);
            echo "</i></b> <br>
                                    <b>Invitez les élèves via le lien : <i class=\"text-primary\">";
            // line 99
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 99, $this->source); })()), "utilisateur", [], "any", false, false, false, 99), "personne", [], "any", false, false, false, 99), "invitationLink", [], "any", false, false, false, 99), "student", [], "any", false, false, false, 99), "html", null, true);
            echo "</i></b> 
                                </td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['personne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "\t\t\t\t\t</tbody>
\t\t\t\t\t<!-- Table body END -->
\t\t\t\t</table>
\t\t\t</div>
\t\t\t<!-- Course list table END -->

\t\t\t<!-- Pagination START -->
\t\t\t<div class=\"d-sm-flex justify-content-sm-between pagination-container align-items-sm-center mt-4 mt-sm-3\">
\t\t\t\t";
        // line 111
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["network"]) || array_key_exists("network", $context) ? $context["network"] : (function () { throw new RuntimeError('Variable "network" does not exist.', 111, $this->source); })()));
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
        return "instructor/network/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 111,  221 => 103,  211 => 99,  207 => 98,  202 => 95,  193 => 91,  187 => 88,  181 => 85,  172 => 79,  165 => 75,  157 => 69,  152 => 68,  126 => 45,  122 => 44,  118 => 43,  102 => 30,  97 => 27,  93 => 25,  78 => 13,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"instructor/base.html.twig\" %}


{% block pageContent %}

\t<div class=\"row g-4 mb-5\">
\t\t<!-- Counter item -->
\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t<div class=\"d-flex justify-content-center align-items-center p-4 bg-warning bg-opacity-15 rounded-3\">
\t\t\t\t<span class=\"display-6 text-warning mb-0\"><i class=\"fas fa-tv fa-fw\"></i></span>
\t\t\t\t<div class=\"ms-4\">
\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t<h5 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"{{ enseignant.utilisateur.points }}\"\tdata-purecounter-delay=\"200\">0</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"mb-0 h6 fw-light\">Total Des points</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!-- Counter item -->
\t\t<div class=\"col-sm-6 col-lg-4\">
\t\t\t<div class=\"d-flex justify-content-center align-items-center p-4 bg-purple bg-opacity-10 rounded-3\">
\t\t\t\t<span class=\"display-6 text-purple mb-0\"><i class=\"fas fa-dollar-sign fa-fw\"></i></span>
\t\t\t\t<div class=\"ms-4\">
\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t<h5 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"{{ enseignant.utilisateur.especes }}\"\tdata-purecounter-delay=\"200\">0</h5>
\t\t\t\t\t\t{# <span class=\"mb-0 h5\">K+</span> #}
\t\t\t\t\t</div>
\t\t\t\t\t<span class=\"mb-0 h6 fw-light\">Montant en espèce</span>
\t\t\t\t\t<br>
\t\t\t\t\t<a href=\"{{ url(\"app_instructor_network_retrait\") }}\">Faire le retrait</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t
\t</div>

    <div class=\"card bg-transparent border rounded-3\">
\t\t<!-- Card header START -->
\t\t<div class=\"card-header bg-transparent border-bottom\">
\t\t\t<h3 class=\"mb-0\">My Network</h3>
\t\t\t<tr>
\t\t\t\t<td colspan=\"4\">
\t\t\t\t\t<b>Invitez les enseignants via le lien : <i class=\"text-primary\">{{ enseignant.utilisateur.personne.invitationLink.trainer }}</i></b> <br>
\t\t\t\t\t<b>Invitez les élèves via le lien : <i class=\"text-primary\">{{ enseignant.utilisateur.personne.invitationLink.student }}</i></b> <br>
\t\t\t\t\t<b>Ou partagez le code suivant : <i class=\"text-primary\">{{ enseignant.utilisateur.personne.invitationCode }}</i></b> 
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
\t\t\t\t\t\t\t\t\t\t<div class=\"w-100px\">
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
                                    <b>Invitez les enseignants via le lien : <i class=\"text-primary\">{{ enseignant.utilisateur.personne.invitationLink.trainer }}</i></b> <br>
                                    <b>Invitez les élèves via le lien : <i class=\"text-primary\">{{ enseignant.utilisateur.personne.invitationLink.student }}</i></b> 
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


", "instructor/network/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\instructor\\network\\index.html.twig");
    }
}
