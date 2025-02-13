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

/* admin/chapitre/edit.html.twig */
class __TwigTemplate_e489df0a67bd13044668bb539488d09f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'pageTitle' => [$this, 'block_pageTitle'],
            'cardTitle' => [$this, 'block_cardTitle'],
            'cardFooter' => [$this, 'block_cardFooter'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/chapitre/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/chapitre/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/chapitre/edit.html.twig", 1);
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

        echo " | Chapitres";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_pageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "Chapitres";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_cardTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cardTitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cardTitle"));

        echo "Editer";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_cardFooter($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cardFooter"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "cardFooter"));

        // line 10
        echo "    <a class=\"btn btn-app\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chapitre_index", ["coursId" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 10, $this->source); })()), "cours", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\">
        <i class=\"fas fa-plus\"></i> Liste
    </a>
    ";
        // line 13
        echo twig_include($this->env, $context, "includes/_delete_form.html.twig", ["path" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chapitre_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13))), "classes" => "btn-danger"]);
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "
    <div class=\"row\">
        <div class=\"col-md-8\">
            ";
        // line 20
        echo twig_include($this->env, $context, "chapitre/_form.html.twig", ["button_label" => "Update"]);
        echo "
        </div>
        <div class=\"md-col-4\">
            <h5>Liste des leçons</h5>
            <ul>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 25, $this->source); })()), "lessons", [], "any", false, false, false, 25));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
            // line 26
            echo "                    <li>
                        <a href=\"\">
                            ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lesson"], "title", [], "any", false, false, false, 28), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "                    <li>
                        Aucune leçon trouvée !
                    </li>    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </ul>
            <a href=\"\" class=\"btn btn-outline-primary\">Ajouter une leçon</a>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/chapitre/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 36,  189 => 32,  180 => 28,  176 => 26,  171 => 25,  163 => 20,  158 => 17,  148 => 16,  136 => 13,  129 => 10,  119 => 9,  100 => 7,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %} | Chapitres{% endblock %}

{% block pageTitle %}Chapitres{% endblock %}

{% block cardTitle %}Editer{% endblock %}

{% block cardFooter %}
    <a class=\"btn btn-app\" href=\"{{ path('app_chapitre_index', {coursId: chapitre.cours.id}) }}\">
        <i class=\"fas fa-plus\"></i> Liste
    </a>
    {{ include('includes/_delete_form.html.twig', {path: path('app_chapitre_delete', {'id': chapitre.id}), token: csrf_token('delete' ~ chapitre.id), classes: 'btn-danger'}) }}
{% endblock %}

{% block body %}

    <div class=\"row\">
        <div class=\"col-md-8\">
            {{ include('chapitre/_form.html.twig', {'button_label': 'Update'}) }}
        </div>
        <div class=\"md-col-4\">
            <h5>Liste des leçons</h5>
            <ul>
                {% for lesson in chapitre.lessons %}
                    <li>
                        <a href=\"\">
                            {{ lesson.title }}
                        </a>
                    </li>
                {% else %}
                    <li>
                        Aucune leçon trouvée !
                    </li>    
                {% endfor %}
            </ul>
            <a href=\"\" class=\"btn btn-outline-primary\">Ajouter une leçon</a>
        </div>
    </div>

{% endblock %}
", "admin/chapitre/edit.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\chapitre\\edit.html.twig");
    }
}
