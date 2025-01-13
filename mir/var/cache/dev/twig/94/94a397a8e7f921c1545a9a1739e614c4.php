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

/* admin/forum/index.html.twig */
class __TwigTemplate_868ae67855b648c74a184f7dd1116a66 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageTitle' => [$this, 'block_pageTitle'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/forum/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/forum/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/forum/index.html.twig", 1);
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

        echo "Forum";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_mainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        // line 6
        echo "
    <div class=\"row\">
        <!-- Main content START -->
        <div class=\"col-lg-12\">
            <div class=\"card shadow rounded-2 p-0\">

                <!-- Tab contents START -->
                <div class=\"card-body p-4\">
                    <h5>Questions Asked</h5>
                    <hr>
                    <div class=\"h-500px overflow-hidden custom-scroolbar\">
                        <ul class=\"list-unstyled\">
                            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (isset($context["forums"]) || array_key_exists("forums", $context) ? $context["forums"] : (function () { throw new RuntimeError('Variable "forums" does not exist.', 18, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 18, $this->source); })()), "createdAt", [], "any", false, false, false, 18) <=> twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 18, $this->source); })()), "createdAt", [], "any", false, false, false, 18)); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sujet"]) {
            // line 19
            echo "                                
                                <li>
                                    <h6 class=\"";
            // line 21
            echo ((twig_get_attribute($this->env, $this->source, $context["sujet"], "isSolved", [], "any", false, false, false, 21)) ? ("text-success") : ("text-danger"));
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sujet"], "forum", [], "any", false, false, false, 21), "cours", [], "any", false, false, false, 21), "intitule", [], "any", false, false, false, 21), "html", null, true);
            echo "</h6>
                                    <div  class=\"d-flex mb-4 mt-3\">
                                        <div class=\"avatar avatar-sm flex-shrink-0 me-2\">
                                            <a href=\"#\"> <img class=\"avatar-img rounded-circle\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sujet"], "membre", [], "any", false, false, false, 24), "utilisateur", [], "any", false, false, false, 24), "personne", [], "any", false, false, false, 24), "avatarPath", [], "any", false, false, false, 24)), "html", null, true);
            echo "\" alt=\"\"> </a>
                                        </div>

                                        <div class=\"w-100 d-flex\">
                                            <p>
                                                ";
            // line 29
            echo twig_get_attribute($this->env, $this->source, $context["sujet"], "content", [], "any", false, false, false, 29);
            echo "
                                                <br>
                                                <span class=\"badge ";
            // line 31
            echo ((twig_get_attribute($this->env, $this->source, $context["sujet"], "isSolved", [], "any", false, false, false, 31)) ? ("btn-success-soft") : ("btn-danger-soft"));
            echo "\">";
            echo ((twig_get_attribute($this->env, $this->source, $context["sujet"], "isSolved", [], "any", false, false, false, 31)) ? ("Resolved") : ("Unresolved"));
            echo "</span> |
                                                <i class=\"badge btn-info-soft\">";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sujet"], "createdAt", [], "any", false, false, false, 32), "d M, Y - H:i:s"), "html", null, true);
            echo "</i>
                                                | <span class=\"badge btn-warning-soft\">";
            // line 33
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sujet"], "forumMessages", [], "any", false, false, false, 33)), "html", null, true);
            echo " comments</span>
                                                | <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_forum_message_index", ["reference" => twig_get_attribute($this->env, $this->source, $context["sujet"], "reference", [], "any", false, false, false, 34)]), "html", null, true);
            echo "\" class=\"btn btn-primary-soft\">Show comment</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <hr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 41
            echo "                                <h3 class=\"text-danger\">No topics found! Be the first to ask a problem</h3>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sujet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content END -->

    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/forum/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 43,  158 => 41,  146 => 34,  142 => 33,  138 => 32,  132 => 31,  127 => 29,  119 => 24,  111 => 21,  107 => 19,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block pageTitle %}Forum{% endblock %}

{% block mainContent %}

    <div class=\"row\">
        <!-- Main content START -->
        <div class=\"col-lg-12\">
            <div class=\"card shadow rounded-2 p-0\">

                <!-- Tab contents START -->
                <div class=\"card-body p-4\">
                    <h5>Questions Asked</h5>
                    <hr>
                    <div class=\"h-500px overflow-hidden custom-scroolbar\">
                        <ul class=\"list-unstyled\">
                            {% for sujet in forums|sort((a, b) => b.createdAt <=> a.createdAt) %}
                                
                                <li>
                                    <h6 class=\"{{ sujet.isSolved ? 'text-success' : 'text-danger' }}\">{{ sujet.forum.cours.intitule }}</h6>
                                    <div  class=\"d-flex mb-4 mt-3\">
                                        <div class=\"avatar avatar-sm flex-shrink-0 me-2\">
                                            <a href=\"#\"> <img class=\"avatar-img rounded-circle\" src=\"{{ asset(sujet.membre.utilisateur.personne.avatarPath) }}\" alt=\"\"> </a>
                                        </div>

                                        <div class=\"w-100 d-flex\">
                                            <p>
                                                {{ sujet.content|raw }}
                                                <br>
                                                <span class=\"badge {{ sujet.isSolved ? \"btn-success-soft\" : 'btn-danger-soft' }}\">{{ sujet.isSolved ? \"Resolved\" : \"Unresolved\" }}</span> |
                                                <i class=\"badge btn-info-soft\">{{ sujet.createdAt|date('d M, Y - H:i:s') }}</i>
                                                | <span class=\"badge btn-warning-soft\">{{ sujet.forumMessages|length }} comments</span>
                                                | <a href=\"{{ url(\"app_forum_message_index\", {reference: sujet.reference}) }}\" class=\"btn btn-primary-soft\">Show comment</a>
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <hr>
                            {% else %}
                                <h3 class=\"text-danger\">No topics found! Be the first to ask a problem</h3>
                            {% endfor %}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main content END -->

    </div>

{% endblock %}", "admin/forum/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\forum\\index.html.twig");
    }
}
