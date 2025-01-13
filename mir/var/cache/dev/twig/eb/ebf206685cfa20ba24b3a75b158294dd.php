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

/* front/faq/index.html.twig */
class __TwigTemplate_9323b8a114e262a4272dc738a0ec664e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/faq/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/faq/index.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/faq/index.html.twig", 1);
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

        echo " - Frequenly Asks Questions";
        
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
                    <h1 class=\"text-white\">FAQ</h1>
                    <!-- Breadcrumb -->
                    <div class=\"d-flex\">
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb breadcrumb-dark breadcrumb-dots mb-0\">
                                <li class=\"breadcrumb-item\"><a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("HOME_KEY", [], "messages");
        echo "</a></li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">Frequenly Asks Questions</li>
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
        if (twig_test_empty((isset($context["faqs"]) || array_key_exists("faqs", $context) ? $context["faqs"] : (function () { throw new RuntimeError('Variable "faqs" does not exist.', 35, $this->source); })()))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["faqs"]) || array_key_exists("faqs", $context) ? $context["faqs"] : (function () { throw new RuntimeError('Variable "faqs" does not exist.', 40, $this->source); })()));
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["term"], "question", [], "any", false, false, false, 44), "html", null, true);
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
                echo twig_get_attribute($this->env, $this->source, $context["term"], "answer", [], "any", false, false, false, 49);
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
            echo "                    <div class=\"col-12\">
                        <div class=\"pagination-container\">
                            ";
            // line 56
            echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["faqs"]) || array_key_exists("faqs", $context) ? $context["faqs"] : (function () { throw new RuntimeError('Variable "faqs" does not exist.', 56, $this->source); })()));
            echo "
                        </div>
                    </div>
                </div>

            ";
        }
        // line 62
        echo "        </div>
    </section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/faq/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 62,  227 => 56,  223 => 54,  204 => 49,  195 => 47,  189 => 44,  179 => 43,  175 => 42,  172 => 41,  155 => 40,  151 => 38,  147 => 36,  145 => 35,  127 => 22,  113 => 11,  110 => 10,  100 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"front/base.html.twig\" %}

{% block title %} - Frequenly Asks Questions{% endblock %}

{% block mainBarnner %}

{% endblock %}

{% block mainContent %}

    <section class=\"bg-dark align-items-center d-flex\" style=\"background:url({{ asset('assets/images/pattern/04.png') }}) no-repeat center center; background-size:cover;\">
        <!-- Main banner background image -->
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <!-- Title -->
                    <h1 class=\"text-white\">FAQ</h1>
                    <!-- Breadcrumb -->
                    <div class=\"d-flex\">
                        <nav aria-label=\"breadcrumb\">
                            <ol class=\"breadcrumb breadcrumb-dark breadcrumb-dots mb-0\">
                                <li class=\"breadcrumb-item\"><a href=\"{{ url(\"app_front\") }}\">{% trans %}HOME_KEY{% endtrans %}</a></li>
                                <li class=\"breadcrumb-item active\" aria-current=\"page\">Frequenly Asks Questions</li>
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
            {% if (faqs is empty) %}
                <h1 class=\"text-center mt-5 mb-5\">Coming Soon... <i class=\"fas fa-sync fa-spin\"></i></h1>
            {% else %}

                <div class=\"accordion accordion-icon accordion-bg-light\" id=\"accordionExample2\">
                    {% for term in faqs %}
                        <div class=\"accordion-item mb-3\">
                            <h6 class=\"accordion-header font-base\" id=\"heading-{{ term.id }}\">
                                <a class=\"accordion-button fw-bold rounded d-block\" href=\"#collapse-{{ term.id }}\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-{{ term.id }}\" aria-expanded=\"{{ loop.first ? 'true' : 'false' }}\" aria-controls=\"collapse-{{ term.id }}\">
                                    <span class=\"mb-0\">{{ term.question }}</span>
                                </a>
                            </h6>
                            <div id=\"collapse-{{ term.id }}\" class=\"accordion-collapse collapse {{ loop.first ? 'show' : '' }}\" aria-labelledby=\"heading-{{ term.id }}\" data-bs-parent=\"#accordionExample2\" style=\"\">
                                <div class=\"accordion-body mt-3\">
                                    {{ term.answer|raw }}
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                    <div class=\"col-12\">
                        <div class=\"pagination-container\">
                            {{ knp_pagination_render(faqs) }}
                        </div>
                    </div>
                </div>

            {% endif %}
        </div>
    </section>

{% endblock %}", "front/faq/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\faq\\index.html.twig");
    }
}
