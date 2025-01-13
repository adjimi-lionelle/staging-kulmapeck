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

/* terms/index.html.twig */
class __TwigTemplate_5441d3f6f98fd70d5b955d018021ce40 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'mainBarnner' => [$this, 'block_mainBarnner'],
            'mainContent' => [$this, 'block_mainContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "terms/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "terms/index.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "terms/index.html.twig", 1);
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

        echo " - Terms and Condition";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_mainBarnner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainBarnner"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainBarnner"));

        // line 6
        echo "
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
        echo "
    <section class=\"bg-dark align-items-center d-flex\" style=\"background:url(";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pattern/04.png"), "html", null, true);
        echo ") no-repeat center center; background-size:cover;\">
        <!-- Main banner background image -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <!-- Title -->
                    <h1 class=\"text-white\">Terms and conditions</h1>
                    <!-- Breadcrumb -->
                    <div class=\"d-flex\">
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb breadcrumb-dark breadcrumb-dots mb-0\">
                                <li class=\"breadcrumb-item\"><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front");
        echo "\">Home</a></li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">Terms & conditions</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Page content START -->
    <section class=\"pb-0 py-sm-5\">
        <div class=\"container\">
            ";
        // line 35
        if (twig_test_empty((isset($context["terms"]) || array_key_exists("terms", $context) ? $context["terms"] : (function () { throw new RuntimeError('Variable "terms" does not exist.', 35, $this->source); })()))) {
            // line 36
            echo "                <h1 class=\"text-center mt-5 mb-5\">Coming Soon... <i class=\"fas fa-sync fa-spin\"></i></h1>
            ";
        } else {
            // line 38
            echo "
                <div class=\"accordion accordion-icon accordion-bg-light\" id=\"accordionExample2\">
                    ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["terms"]) || array_key_exists("terms", $context) ? $context["terms"] : (function () { throw new RuntimeError('Variable "terms" does not exist.', 40, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["term"]) {
                // line 41
                echo "                        <div class=\"accordion-item mb-3\">
                            <h6 class=\"accordion-header font-base\" id=\"heading-";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["term"], "id", [], "any", false, false, false, 42), "html", null, true);
                echo "\">
                                <a class=\"accordion-button fw-bold rounded d-block\" href=\"#collapse-";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["term"], "id", [], "any", false, false, false, 43), "html", null, true);
                echo "\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["term"], "id", [], "any", false, false, false, 43), "html", null, true);
                echo "\" aria-expanded=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 43)) ? ("true") : ("false"));
                echo "\" aria-controls=\"collapse-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["term"], "id", [], "any", false, false, false, 43), "html", null, true);
                echo "\">
                                    <span class=\"mb-0\">";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["term"], "title", [], "any", false, false, false, 44), "html", null, true);
                echo "</span>
                                </a>
                            </h6>
                            <div id=\"collapse-";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["term"], "id", [], "any", false, false, false, 47), "html", null, true);
                echo "\" class=\"accordion-collapse collapse ";
                echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 47)) ? ("show") : (""));
                echo "\" aria-labelledby=\"heading-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["term"], "id", [], "any", false, false, false, 47), "html", null, true);
                echo "\" data-bs-parent=\"#accordionExample2\" style=\"\">
                                <div class=\"accordion-body mt-3\">
                                    ";
                // line 49
                echo twig_get_attribute($this->env, $this->source, $context["term"], "content", [], "any", false, false, false, 49);
                echo "
                                </div>
                            </div>
                        </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['term'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "
                </div>

            ";
        }
        // line 58
        echo "        </div>
    </section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "terms/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 58,  221 => 54,  202 => 49,  193 => 47,  187 => 44,  177 => 43,  173 => 42,  170 => 41,  153 => 40,  149 => 38,  145 => 36,  143 => 35,  127 => 22,  113 => 11,  110 => 10,  100 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"front/base.html.twig\" %}

{% block title %} - Terms and Condition{% endblock %}

{% block mainBarnner %}

{% endblock %}

{% block mainContent %}

    <section class=\"bg-dark align-items-center d-flex\" style=\"background:url({{ asset('assets/images/pattern/04.png') }}) no-repeat center center; background-size:cover;\">
        <!-- Main banner background image -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <!-- Title -->
                    <h1 class=\"text-white\">Terms and conditions</h1>
                    <!-- Breadcrumb -->
                    <div class=\"d-flex\">
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb breadcrumb-dark breadcrumb-dots mb-0\">
                                <li class=\"breadcrumb-item\"><a href=\"{{ url(\"app_front\") }}\">Home</a></li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">Terms & conditions</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Page content START -->
    <section class=\"pb-0 py-sm-5\">
        <div class=\"container\">
            {% if (terms is empty) %}
                <h1 class=\"text-center mt-5 mb-5\">Coming Soon... <i class=\"fas fa-sync fa-spin\"></i></h1>
            {% else %}

                <div class=\"accordion accordion-icon accordion-bg-light\" id=\"accordionExample2\">
                    {% for term in terms %}
                        <div class=\"accordion-item mb-3\">
                            <h6 class=\"accordion-header font-base\" id=\"heading-{{ term.id }}\">
                                <a class=\"accordion-button fw-bold rounded d-block\" href=\"#collapse-{{ term.id }}\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-{{ term.id }}\" aria-expanded=\"{{ loop.first ? 'true' : 'false' }}\" aria-controls=\"collapse-{{ term.id }}\">
                                    <span class=\"mb-0\">{{ term.title }}</span>
                                </a>
                            </h6>
                            <div id=\"collapse-{{ term.id }}\" class=\"accordion-collapse collapse {{ loop.first ? 'show' : '' }}\" aria-labelledby=\"heading-{{ term.id }}\" data-bs-parent=\"#accordionExample2\" style=\"\">
                                <div class=\"accordion-body mt-3\">
                                    {{ term.content|raw }}
                                </div>
                            </div>
                        </div>
                    {% endfor %}

                </div>

            {% endif %}
        </div>
    </section>

{% endblock %}", "terms/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\terms\\index.html.twig");
    }
}
