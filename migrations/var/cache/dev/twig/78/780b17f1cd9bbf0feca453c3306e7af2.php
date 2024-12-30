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

/* admin/formation/show.html.twig */
class __TwigTemplate_e0bf15d6669aa0fc49cf29cce5b2bbb0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageTitle' => [$this, 'block_pageTitle'],
            'actionBtn' => [$this, 'block_actionBtn'],
            'mainContent' => [$this, 'block_mainContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/formation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/formation/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/formation/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "Exams";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_actionBtn($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actionBtn"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actionBtn"));

        // line 6
        echo "\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_formation_new");
        echo "\" class=\"btn btn-sm btn-primary mb-0\">Add new formation</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_mainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        // line 10
        echo "    <div class=\"card bg-transparent border\">
        <!-- Card body START -->
        <div class=\"card-body\">
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Slug</th>
                        <td>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 21, $this->source); })()), "slug", [], "any", false, false, false, 21), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Durée</th>
                        <td>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 25, $this->source); })()), "duree", [], "any", false, false, false, 25), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Niveau de difficulté</th>
                        <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 29, $this->source); })()), "niveauDifficulte", [], "any", false, false, false, 29), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Formation Gratuite</th>
                        <td>";
        // line 33
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 33, $this->source); })()), "isFree", [], "any", false, false, false, 33)) ? ("Yes") : ("No"));
        echo "</td>
                    </tr>
                    <tr>
                        <th>Date de création</th>
                        <td>";
        // line 37
        ((twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 37, $this->source); })()), "createdAt", [], "any", false, false, false, 37)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 37, $this->source); })()), "createdAt", [], "any", false, false, false, 37), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
                    </tr>
                    <tr>
                        <th>Déjà publiée</th>
                        <td>";
        // line 41
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 41, $this->source); })()), "isPublished", [], "any", false, false, false, 41)) ? ("Yes") : ("No"));
        echo "</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td colspan=\"2\">";
        // line 47
        echo twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 47, $this->source); })()), "description", [], "any", false, false, false, 47);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Liste des cours associés</th>
                    </tr>
                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["formation"]) || array_key_exists("formation", $context) ? $context["formation"] : (function () { throw new RuntimeError('Variable "formation" does not exist.', 52, $this->source); })()), "cours", [], "any", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
            // line 53
            echo "                        <tr>
                            <td colspan=\"2\">
                                <h5><a href=\"\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "intitule", [], "any", false, false, false, 55), "html", null, true);
            echo "</a></h5>
                                <b class=\"badge badge-info\">Prof : ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "prof", [], "any", false, false, false, 56), "html", null, true);
            echo "</b>
                                <b class=\"badge badge-danger\">Niveau de difficulté : ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "niveauDifficulte", [], "any", false, false, false, 57), "html", null, true);
            echo "</b>
                                <b class=\"badge badge-success\">Durée d'apprentissage: ";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cours"], "dureeApprentissage", [], "any", false, false, false, 58), "html", null, true);
            echo "</b>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cours'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                </tbody>
            </table>    
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/formation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 62,  200 => 58,  196 => 57,  192 => 56,  188 => 55,  184 => 53,  180 => 52,  172 => 47,  163 => 41,  156 => 37,  149 => 33,  142 => 29,  135 => 25,  128 => 21,  121 => 17,  112 => 10,  102 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block pageTitle %}Exams{% endblock %}

{% block actionBtn %}
\t<a href=\"{{ path('app_admin_formation_new') }}\" class=\"btn btn-sm btn-primary mb-0\">Add new formation</a>
{% endblock %}

{% block mainContent %}
    <div class=\"card bg-transparent border\">
        <!-- Card body START -->
        <div class=\"card-body\">
            <table class=\"table\">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td>{{ formation.name }}</td>
                    </tr>
                    <tr>
                        <th>Slug</th>
                        <td>{{ formation.slug }}</td>
                    </tr>
                    <tr>
                        <th>Durée</th>
                        <td>{{ formation.duree }}</td>
                    </tr>
                    <tr>
                        <th>Niveau de difficulté</th>
                        <td>{{ formation.niveauDifficulte }}</td>
                    </tr>
                    <tr>
                        <th>Formation Gratuite</th>
                        <td>{{ formation.isFree ? 'Yes' : 'No' }}</td>
                    </tr>
                    <tr>
                        <th>Date de création</th>
                        <td>{{ formation.createdAt ? formation.createdAt|date('Y-m-d H:i:s') : '' }}</td>
                    </tr>
                    <tr>
                        <th>Déjà publiée</th>
                        <td>{{ formation.isPublished ? 'Yes' : 'No' }}</td>
                    </tr>
                    <tr>
                        <th>Description</th>
                    </tr>
                    <tr>
                        <td colspan=\"2\">{{ formation.description|raw }}</td>
                    </tr>
                    <tr>
                        <th>Liste des cours associés</th>
                    </tr>
                    {% for cours in formation.cours %}
                        <tr>
                            <td colspan=\"2\">
                                <h5><a href=\"\">{{ cours.intitule }}</a></h5>
                                <b class=\"badge badge-info\">Prof : {{ cours.prof }}</b>
                                <b class=\"badge badge-danger\">Niveau de difficulté : {{ cours.niveauDifficulte }}</b>
                                <b class=\"badge badge-success\">Durée d'apprentissage: {{ cours.dureeApprentissage }}</b>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>    
        </div>
    </div>

{% endblock %}
", "admin/formation/show.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\formation\\show.html.twig");
    }
}
