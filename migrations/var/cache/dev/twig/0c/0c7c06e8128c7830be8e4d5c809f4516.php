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

/* front/evaluation/_annonces.html.twig */
class __TwigTemplate_52769c83ceefe6a039e516517073fd6f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/evaluation/_annonces.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/evaluation/_annonces.html.twig"));

        // line 1
        if (array_key_exists("isForPrommedTest", $context)) {
            // line 2
            echo "<div class=\"alert alert-dismissible sticky-element fade show bg-dark text-white rounded-3 shadow p-4 ms-3 mb-3 col-10 col-md-4 col-lg-3 col-xl-2 d-none d-lg-block sticky-element-sticked\" role=\"alert\">
\t<div class=\"d-sm-flex align-items-center mb-3\">
\t\t<!-- Avatar -->
\t\t<div>
\t\t\t<div class=\"icon-lg bg-purple rounded-circle text-white\">
\t\t\t\t<img class=\"p-3\" src=\"assets/images/client/aftereffect.sv\" alt=\"T\">
\t\t\t</div>
\t\t</div>
\t\t<!-- Info -->
\t\t<div class=\"ms-sm-2 mt-2 mt-sm-0\">
\t\t\t<h6 class=\"mb-0 text-white\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 12, $this->source); })()), "evaluation", [], "any", false, false, false, 12), "titre", [], "any", false, false, false, 12), "html", null, true);
            echo "</h6>
\t\t\t<span class=\"small mb-0 me-3\"><i class=\"far fa-clock text-danger me-2\"></i>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 13, $this->source); })()), "evaluation", [], "any", false, false, false, 13), "duree", [], "any", false, false, false, 13), "html", null, true);
            echo " heures</span>
\t\t\t<span class=\"small mb-0 me-1\"><i class=\"fas fa-circle fw-bold text-success small me-2\"></i>";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 14, $this->source); })()), "evaluation", [], "any", false, false, false, 14), "startAt", [], "any", false, false, false, 14), "d/m/Y à H:i:s"), "html", null, true);
            echo "</span>
\t\t</div>
\t</div>
\t<p class=\"mb-0 small\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 17, $this->source); })()), "evaluation", [], "any", false, false, false, 17), "description", [], "any", false, false, false, 17), "html", null, true);
            echo "</p>

\t<!-- Avatar group -->
\t<div class=\"d-sm-flex justify-content-between mt-4\">
\t\t<ul class=\"avatar-group mb-2 mb-sm-0\">
\t\t\t";
            // line 22
            if (twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "eleves", [], "any", true, true, false, 22)) {
                // line 23
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 23, $this->source); })()), "eleves", [], "any", false, false, false, 23));
                foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
                    // line 24
                    echo "                    <li class=\"avatar avatar-xs\">
                        <img class=\"avatar-img rounded-circle\" src=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["eleve"]), "html", null, true);
                    echo "\" alt=\"avatar\">
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 28
                echo "            ";
            }
            // line 29
            echo "\t\t</ul>

\t\t<!-- Button -->
\t\t<a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_evaluation_inscription", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 32, $this->source); })()), "evaluation", [], "any", false, false, false, 32), "slug", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-success btn-sm mb-0\">
\t\t\t<span aria-hidden=\"true\">S'inscrire !</span>
\t\t</a>
\t</div>
\t<!-- Close button -->
\t<div class=\"position-absolute end-0 top-0 mt-n3 me-n3\">
\t\t<a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_evaluation_hide_annonce", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 38, $this->source); })()), "evaluation", [], "any", false, false, false, 38), "slug", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-danger btn-round btn-sm mb-0\">
\t\t\t<span aria-hidden=\"true\"><i class=\"bi bi-x-lg\"></i></span>
\t\t</a>
\t</div>
</div>
";
        }
        // line 44
        echo "
";
        // line 45
        if (array_key_exists("isForCurrentTest", $context)) {
            // line 46
            echo "<div style=\"right:50px;position:fixed;bottom:50px;width:300px;z-index:1000;bottom:50px;transition: all 0.3s ease-in-out\" class=\"alert alert-dismissible fade show bg-success text-white rounded-3 shadow p-4 ms-3 mb-3 col-10 col-md-4 col-lg-3 col-xl-2 d-none d-lg-block sticky-element-sticked\" role=\"alert\">
\t<div class=\"d-sm-flex align-items-center mb-3\">
\t\t<!-- Avatar -->
\t\t<div>
\t\t\t<div class=\"icon-lg bg-purple rounded-circle text-white\">
\t\t\t\t<img class=\"p-3\" src=\"assets/images/client/aftereffect.sv\" alt=\"T\">
\t\t\t</div>
\t\t</div>
\t\t<!-- Info -->
\t\t<div class=\"ms-sm-2 mt-2 mt-sm-0\">
\t\t\t<h6 class=\"mb-0 text-white\">";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 56, $this->source); })()), "evaluation", [], "any", false, false, false, 56), "titre", [], "any", false, false, false, 56), "html", null, true);
            echo "</h6>
\t\t\t<span class=\"small mb-0 me-3\"><i class=\"far fa-clock text-danger me-2\"></i>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 57, $this->source); })()), "evaluation", [], "any", false, false, false, 57), "duree", [], "any", false, false, false, 57), "html", null, true);
            echo " heures</span>
\t\t\t<span class=\"small mb-0 me-1\"><i class=\"fas fa-circle fw-bold text-success small me-2\"></i>";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 58, $this->source); })()), "evaluation", [], "any", false, false, false, 58), "startAt", [], "any", false, false, false, 58), "d/m/Y à H:i:s"), "html", null, true);
            echo "</span>
\t\t</div>
\t</div>
\t<p class=\"mb-0 small\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 61, $this->source); })()), "evaluation", [], "any", false, false, false, 61), "description", [], "any", false, false, false, 61), "html", null, true);
            echo "</p>

\t<!-- Avatar group -->
\t<div class=\"d-sm-flex justify-content-between mt-4\">
\t\t<ul class=\"avatar-group mb-2 mb-sm-0\">
\t\t\t";
            // line 66
            if (twig_get_attribute($this->env, $this->source, ($context["annonce"] ?? null), "eleves", [], "any", true, true, false, 66)) {
                // line 67
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 67, $this->source); })()), "eleves", [], "any", false, false, false, 67));
                foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
                    // line 68
                    echo "                    <li class=\"avatar avatar-xs\">
                        <img class=\"avatar-img rounded-circle\" src=\"";
                    // line 69
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["eleve"]), "html", null, true);
                    echo "\" alt=\"avatar\">
                    </li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 72
                echo "            ";
            }
            // line 73
            echo "\t\t</ul>

\t\t<!-- Button -->
\t\t<a href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_evaluation_begin", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["annonce"]) || array_key_exists("annonce", $context) ? $context["annonce"] : (function () { throw new RuntimeError('Variable "annonce" does not exist.', 76, $this->source); })()), "evaluation", [], "any", false, false, false, 76), "slug", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-primary-soft btn-sm mb-0\">
\t\t\t<span aria-hidden=\"true\">Commencer !</span>
\t\t</a>
\t</div>
\t<!-- Close button -->
\t<div class=\"position-absolute end-0 top-0 mt-n3 me-n3\">
\t\t<button type=\"button\" data-bs-dismiss=\"alert\" aria-label=\"close\" class=\"btn btn-danger btn-round btn-sm mb-0\">
\t\t\t<span aria-hidden=\"true\"><i class=\"bi bi-x-lg\"></i></span>
\t\t</button>
\t</div>
</div>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/evaluation/_annonces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 76,  185 => 73,  182 => 72,  173 => 69,  170 => 68,  165 => 67,  163 => 66,  155 => 61,  149 => 58,  145 => 57,  141 => 56,  129 => 46,  127 => 45,  124 => 44,  115 => 38,  106 => 32,  101 => 29,  98 => 28,  89 => 25,  86 => 24,  81 => 23,  79 => 22,  71 => 17,  65 => 14,  61 => 13,  57 => 12,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if isForPrommedTest is defined %}
<div class=\"alert alert-dismissible sticky-element fade show bg-dark text-white rounded-3 shadow p-4 ms-3 mb-3 col-10 col-md-4 col-lg-3 col-xl-2 d-none d-lg-block sticky-element-sticked\" role=\"alert\">
\t<div class=\"d-sm-flex align-items-center mb-3\">
\t\t<!-- Avatar -->
\t\t<div>
\t\t\t<div class=\"icon-lg bg-purple rounded-circle text-white\">
\t\t\t\t<img class=\"p-3\" src=\"assets/images/client/aftereffect.sv\" alt=\"T\">
\t\t\t</div>
\t\t</div>
\t\t<!-- Info -->
\t\t<div class=\"ms-sm-2 mt-2 mt-sm-0\">
\t\t\t<h6 class=\"mb-0 text-white\">{{ annonce.evaluation.titre }}</h6>
\t\t\t<span class=\"small mb-0 me-3\"><i class=\"far fa-clock text-danger me-2\"></i>{{ annonce.evaluation.duree }} heures</span>
\t\t\t<span class=\"small mb-0 me-1\"><i class=\"fas fa-circle fw-bold text-success small me-2\"></i>{{ annonce.evaluation.startAt|date('d/m/Y à H:i:s') }}</span>
\t\t</div>
\t</div>
\t<p class=\"mb-0 small\">{{ annonce.evaluation.description }}</p>

\t<!-- Avatar group -->
\t<div class=\"d-sm-flex justify-content-between mt-4\">
\t\t<ul class=\"avatar-group mb-2 mb-sm-0\">
\t\t\t{% if annonce.eleves is defined %}
                {% for eleve in annonce.eleves %}
                    <li class=\"avatar avatar-xs\">
                        <img class=\"avatar-img rounded-circle\" src=\"{{ asset(eleve) }}\" alt=\"avatar\">
                    </li>
                {% endfor %}
            {% endif %}
\t\t</ul>

\t\t<!-- Button -->
\t\t<a href=\"{{ url('app_front_evaluation_inscription', {'slug': annonce.evaluation.slug}) }}\" type=\"button\" class=\"btn btn-success btn-sm mb-0\">
\t\t\t<span aria-hidden=\"true\">S'inscrire !</span>
\t\t</a>
\t</div>
\t<!-- Close button -->
\t<div class=\"position-absolute end-0 top-0 mt-n3 me-n3\">
\t\t<a href=\"{{ url('app_front_evaluation_hide_annonce', {'slug': annonce.evaluation.slug}) }}\" type=\"button\" class=\"btn btn-danger btn-round btn-sm mb-0\">
\t\t\t<span aria-hidden=\"true\"><i class=\"bi bi-x-lg\"></i></span>
\t\t</a>
\t</div>
</div>
{% endif %}

{% if isForCurrentTest is defined %}
<div style=\"right:50px;position:fixed;bottom:50px;width:300px;z-index:1000;bottom:50px;transition: all 0.3s ease-in-out\" class=\"alert alert-dismissible fade show bg-success text-white rounded-3 shadow p-4 ms-3 mb-3 col-10 col-md-4 col-lg-3 col-xl-2 d-none d-lg-block sticky-element-sticked\" role=\"alert\">
\t<div class=\"d-sm-flex align-items-center mb-3\">
\t\t<!-- Avatar -->
\t\t<div>
\t\t\t<div class=\"icon-lg bg-purple rounded-circle text-white\">
\t\t\t\t<img class=\"p-3\" src=\"assets/images/client/aftereffect.sv\" alt=\"T\">
\t\t\t</div>
\t\t</div>
\t\t<!-- Info -->
\t\t<div class=\"ms-sm-2 mt-2 mt-sm-0\">
\t\t\t<h6 class=\"mb-0 text-white\">{{ annonce.evaluation.titre }}</h6>
\t\t\t<span class=\"small mb-0 me-3\"><i class=\"far fa-clock text-danger me-2\"></i>{{ annonce.evaluation.duree }} heures</span>
\t\t\t<span class=\"small mb-0 me-1\"><i class=\"fas fa-circle fw-bold text-success small me-2\"></i>{{ annonce.evaluation.startAt|date('d/m/Y à H:i:s') }}</span>
\t\t</div>
\t</div>
\t<p class=\"mb-0 small\">{{ annonce.evaluation.description }}</p>

\t<!-- Avatar group -->
\t<div class=\"d-sm-flex justify-content-between mt-4\">
\t\t<ul class=\"avatar-group mb-2 mb-sm-0\">
\t\t\t{% if annonce.eleves is defined %}
                {% for eleve in annonce.eleves %}
                    <li class=\"avatar avatar-xs\">
                        <img class=\"avatar-img rounded-circle\" src=\"{{ asset(eleve) }}\" alt=\"avatar\">
                    </li>
                {% endfor %}
            {% endif %}
\t\t</ul>

\t\t<!-- Button -->
\t\t<a href=\"{{ url('app_front_evaluation_begin', {'slug': annonce.evaluation.slug}) }}\" type=\"button\" class=\"btn btn-primary-soft btn-sm mb-0\">
\t\t\t<span aria-hidden=\"true\">Commencer !</span>
\t\t</a>
\t</div>
\t<!-- Close button -->
\t<div class=\"position-absolute end-0 top-0 mt-n3 me-n3\">
\t\t<button type=\"button\" data-bs-dismiss=\"alert\" aria-label=\"close\" class=\"btn btn-danger btn-round btn-sm mb-0\">
\t\t\t<span aria-hidden=\"true\"><i class=\"bi bi-x-lg\"></i></span>
\t\t</button>
\t</div>
</div>
{% endif %}
", "front/evaluation/_annonces.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\evaluation\\_annonces.html.twig");
    }
}
