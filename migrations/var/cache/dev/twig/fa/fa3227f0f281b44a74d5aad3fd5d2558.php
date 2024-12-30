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

/* student/payment/index.html.twig */
class __TwigTemplate_d103285c62ae61ca67f456496a726693 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/payment/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/payment/index.html.twig"));

        $this->parent = $this->loadTemplate("student/base.html.twig", "student/payment/index.html.twig", 1);
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

        // line 4
        echo "    - Payments
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        // line 8
        echo "
    <div class=\"card bg-transparent border rounded-3\">
\t\t<!-- Card header START -->
\t\t<div class=\"card-header bg-transparent border-bottom\">
\t\t\t<h3 class=\"mb-0\">My Payments</h3>
\t\t</div>
\t\t<!-- Card header END -->

\t\t<!-- Card body START -->
\t\t<div class=\"card-body\">

\t\t\t<!-- Search and select START -->
\t\t\t<div class=\"row g-3 align-items-center justify-content-between mb-4\">
\t\t\t\t<!-- Content -->
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<form name=\"search\"   action=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_student_courses");
        echo "\" class=\"rounded position-relative\">
\t\t\t\t\t\t<input name=\"search\" required class=\"form-control pe-5 bg-transparent\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t<button class=\"bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset\" type=\"submit\">
\t\t\t\t\t<i class=\"fas fa-search fs-6 \"></i>
\t\t\t\t</button>
\t\t\t\t\t</form>
\t\t\t\t</div>

\t\t\t\t<!-- Select option -->
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Search and select END -->

\t\t\t<!-- Course list table START -->
\t\t\t<div class=\"table-responsive border-0\">
\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
                    <!-- Table head -->
                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"border-0 rounded-start\">Payment Label</th>
                            <th scope=\"col\" class=\"border-0\">Order ID</th>
                            <th scope=\"col\" class=\"border-0\">Date</th>
                            <th scope=\"col\" class=\"border-0\">Amount</th>
                            <th scope=\"col\" class=\"border-0 rounded-end\">Payment</th>
                        </tr>
                    </thead>

                    <!-- Table body START -->
                    <tbody>
                        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 54, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["payment"]) {
            // line 55
            echo "                            <!-- Table item -->
                            <tr>
                                <!-- Table data -->
                                <td>
                                    <h6 class=\"table-responsive-title mt-2 mt-lg-0 mb-0\">
                                        ";
            // line 60
            if ( !(twig_get_attribute($this->env, $this->source, $context["payment"], "abonnement", [], "any", false, false, false, 60) === null)) {
                // line 61
                echo "                                            <a href=\"#\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["payment"], "abonnement", [], "any", false, false, false, 61), "label", [], "any", false, false, false, 61), "html", null, true);
                echo "</a>
                                        ";
            } elseif ( !(twig_get_attribute($this->env, $this->source,             // line 62
$context["payment"], "cours", [], "any", false, false, false, 62) === null)) {
                // line 63
                echo "                                            <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_course_details", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["payment"], "cours", [], "any", false, false, false, 63), "slug", [], "any", false, false, false, 63)], "http", false), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["payment"], "cours", [], "any", false, false, false, 63), "intitule", [], "any", false, false, false, 63), "html", null, true);
                echo "</a>
                                        ";
            } else {
                // line 65
                echo "                                            undefined
                                        ";
            }
            // line 67
            echo "                                    </h6>
                                </td>

                                <!-- Table data -->
                                <td class=\"text-center text-sm-start text-primary-hover\">
                                    <a href=\"#\" class=\"text-body\"><u>#";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payment"], "reference", [], "any", false, false, false, 72), "html", null, true);
            echo "</u></a>
                                </td>

                                <!-- Table data -->
                                <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["payment"], "paidAt", [], "any", false, false, false, 76), "d/m/Y - H:i:s"), "html", null, true);
            echo "</td>

                                <!-- Table data -->
                                <td>
                                    ";
            // line 80
            if ( !(twig_get_attribute($this->env, $this->source, $context["payment"], "abonnement", [], "any", false, false, false, 80) === null)) {
                // line 81
                echo "                                        ";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["payment"], "abonnement", [], "any", false, false, false, 81), "montant", [], "any", false, false, false, 81) . "XAF"), "html", null, true);
                echo "
                                    ";
            } elseif ( !(twig_get_attribute($this->env, $this->source,             // line 82
$context["payment"], "cours", [], "any", false, false, false, 82) === null)) {
                // line 83
                echo "                                        ";
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["payment"], "cours", [], "any", false, false, false, 83), "montantAbonnement", [], "any", false, false, false, 83) . "XAF"), "html", null, true);
                echo "
                                    ";
            } else {
                // line 85
                echo "                                        undefined
                                    ";
            }
            // line 87
            echo "                                </td>

                                <!-- Table data -->
                                <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["payment"], "paymentMethod", [], "any", false, false, false, 90), "code", [], "any", false, false, false, 90), "html", null, true);
            echo "</td>
                            </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 92
            echo "  
                            <tr><td colspan=\"5\"><h5 class=\"text-center\">No payments found</h5></td></tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "                    </tbody>
                    <!-- Table body END -->
                </table>
\t\t\t</div>
\t\t\t<!-- Course list table END -->

\t\t\t<!-- Pagination START -->
\t\t\t<div class=\"d-sm-flex justify-content-sm-between pagination-container align-items-sm-center mt-4 mt-sm-3\">
\t\t\t\t";
        // line 103
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 103, $this->source); })()));
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
        return "student/payment/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 103,  235 => 95,  227 => 92,  219 => 90,  214 => 87,  210 => 85,  204 => 83,  202 => 82,  197 => 81,  195 => 80,  188 => 76,  181 => 72,  174 => 67,  170 => 65,  162 => 63,  160 => 62,  155 => 61,  153 => 60,  146 => 55,  141 => 54,  107 => 23,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"student/base.html.twig\" %}

{% block title %}
    - Payments
{% endblock %}

{% block pageContent %}

    <div class=\"card bg-transparent border rounded-3\">
\t\t<!-- Card header START -->
\t\t<div class=\"card-header bg-transparent border-bottom\">
\t\t\t<h3 class=\"mb-0\">My Payments</h3>
\t\t</div>
\t\t<!-- Card header END -->

\t\t<!-- Card body START -->
\t\t<div class=\"card-body\">

\t\t\t<!-- Search and select START -->
\t\t\t<div class=\"row g-3 align-items-center justify-content-between mb-4\">
\t\t\t\t<!-- Content -->
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<form name=\"search\"   action=\"{{ url(\"app_student_courses\") }}\" class=\"rounded position-relative\">
\t\t\t\t\t\t<input name=\"search\" required class=\"form-control pe-5 bg-transparent\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
\t\t\t\t\t\t<button class=\"bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset\" type=\"submit\">
\t\t\t\t\t<i class=\"fas fa-search fs-6 \"></i>
\t\t\t\t</button>
\t\t\t\t\t</form>
\t\t\t\t</div>

\t\t\t\t<!-- Select option -->
\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<!-- Search and select END -->

\t\t\t<!-- Course list table START -->
\t\t\t<div class=\"table-responsive border-0\">
\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
                    <!-- Table head -->
                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"border-0 rounded-start\">Payment Label</th>
                            <th scope=\"col\" class=\"border-0\">Order ID</th>
                            <th scope=\"col\" class=\"border-0\">Date</th>
                            <th scope=\"col\" class=\"border-0\">Amount</th>
                            <th scope=\"col\" class=\"border-0 rounded-end\">Payment</th>
                        </tr>
                    </thead>

                    <!-- Table body START -->
                    <tbody>
                        {% for payment in payments %}
                            <!-- Table item -->
                            <tr>
                                <!-- Table data -->
                                <td>
                                    <h6 class=\"table-responsive-title mt-2 mt-lg-0 mb-0\">
                                        {% if payment.abonnement is not same as null %}
                                            <a href=\"#\">{{ payment.abonnement.label }}</a>
                                        {% elseif payment.cours is not same as null %}
                                            <a href=\"{{ url(\"app_front_course_details\", {slug: payment.cours.slug}, \"http\", false) }}\">{{ payment.cours.intitule }}</a>
                                        {% else %}
                                            undefined
                                        {% endif %}
                                    </h6>
                                </td>

                                <!-- Table data -->
                                <td class=\"text-center text-sm-start text-primary-hover\">
                                    <a href=\"#\" class=\"text-body\"><u>#{{ payment.reference }}</u></a>
                                </td>

                                <!-- Table data -->
                                <td>{{ payment.paidAt|date('d/m/Y - H:i:s') }}</td>

                                <!-- Table data -->
                                <td>
                                    {% if payment.abonnement is not same as null %}
                                        {{ payment.abonnement.montant ~ 'XAF' }}
                                    {% elseif payment.cours is not same as null %}
                                        {{ payment.cours.montantAbonnement ~ 'XAF' }}
                                    {% else %}
                                        undefined
                                    {% endif %}
                                </td>

                                <!-- Table data -->
                                <td>{{ payment.paymentMethod.code }}</td>
                            </tr>
                        {% else %}  
                            <tr><td colspan=\"5\"><h5 class=\"text-center\">No payments found</h5></td></tr>
                        {% endfor %}
                    </tbody>
                    <!-- Table body END -->
                </table>
\t\t\t</div>
\t\t\t<!-- Course list table END -->

\t\t\t<!-- Pagination START -->
\t\t\t<div class=\"d-sm-flex justify-content-sm-between pagination-container align-items-sm-center mt-4 mt-sm-3\">
\t\t\t\t{{ knp_pagination_render(payments) }}
\t\t\t</div>
\t\t\t<!-- Pagination END -->
\t\t</div>
\t\t<!-- Card body START -->
\t</div>

{% endblock %}
", "student/payment/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\student\\payment\\index.html.twig");
    }
}
