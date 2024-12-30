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

/* instructor/orders/index.html.twig */
class __TwigTemplate_abc26663c680cea8141a217b5d1a9422 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/orders/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/orders/index.html.twig"));

        $this->parent = $this->loadTemplate("instructor/base.html.twig", "instructor/orders/index.html.twig", 1);
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
    <!-- Card START -->
\t<div class=\"card border bg-transparent rounded-3\">
\t\t<!-- Card header START -->
\t\t<div class=\"card-header bg-transparent border-bottom\">
\t\t\t<h3 class=\"mb-0\">Order List</h3>
\t\t</div>
\t\t<!-- Card header END -->

\t\t<!-- Card body START -->
\t\t<div class=\"card-body\">

\t\t\t<!-- Order list table START -->
\t\t\t<div class=\"table-responsive border-0\">
\t\t\t\t<!-- Table START -->
\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Course name</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Order ID</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Date</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Amount</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Payment</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>

\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t<tbody>
\t\t\t\t\t\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 34, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 35
            echo "\t\t\t\t\t\t\t<!-- Table item -->
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h6 class=\"table-responsive-title mt-2 mt-lg-0 mb-0\"><a href=\"#\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "cours", [], "any", false, false, false, 39), "intitule", [], "any", false, false, false, 39), "html", null, true);
            echo "</a></h6>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td class=\"text-center text-sm-start text-primary-hover\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\"><u>#";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 44), "html", null, true);
            echo "</u></a>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>";
            // line 48
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["order"], "paidAt", [], "any", false, false, false, 48), "d/m/Y - H:i:s"), "html", null, true);
            echo "</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "cours", [], "any", false, false, false, 51), "montantAbonnement", [], "any", false, false, false, 51), "html", null, true);
            echo " XAF</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["order"], "paymentMethod", [], "any", false, false, false, 54), "label", [], "any", false, false, false, 54), "html", null, true);
            echo "</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            echo "\t\t\t\t\t\t\t<tr><td colspan=\"5\">No order's found</td></tr>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
\t\t\t\t\t</tbody>
\t\t\t\t\t<!-- Table body END -->
\t\t\t\t</table>
\t\t\t\t<!-- Table END -->
\t\t\t</div>
\t\t\t<!-- Order list table END -->

\t\t\t<!-- Pagination START -->
\t\t\t<div class=\"d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3\">
\t\t\t\t<!-- Content -->
\t\t\t\t<p class=\"mb-0 text-center text-sm-start\">Showing ";
        // line 70
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 70, $this->source); })()), "getCurrentPageNumber", [], "any", false, false, false, 70) - 1) * twig_get_attribute($this->env, $this->source, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 70, $this->source); })()), "getItemNumberPerPage", [], "any", false, false, false, 70)) + 1), "html", null, true);
        echo " to ";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 70, $this->source); })()), "getItemNumberPerPage", [], "any", false, false, false, 70) * twig_get_attribute($this->env, $this->source, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 70, $this->source); })()), "getCurrentPageNumber", [], "any", false, false, false, 70)), "html", null, true);
        echo " of ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 70, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 70), "html", null, true);
        echo " entries</p>
\t\t\t\t<!-- Pagination -->
\t\t\t\t";
        // line 72
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 72, $this->source); })()));
        echo "
\t\t\t</div>
\t\t\t<!-- Pagination END -->
\t\t</div>
\t\t<!-- Card body START -->
\t</div>
\t<!--Card END  -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "instructor/orders/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 72,  165 => 70,  152 => 59,  145 => 57,  137 => 54,  131 => 51,  125 => 48,  118 => 44,  110 => 39,  104 => 35,  99 => 34,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"instructor/base.html.twig\" %}


{% block pageContent %}

    <!-- Card START -->
\t<div class=\"card border bg-transparent rounded-3\">
\t\t<!-- Card header START -->
\t\t<div class=\"card-header bg-transparent border-bottom\">
\t\t\t<h3 class=\"mb-0\">Order List</h3>
\t\t</div>
\t\t<!-- Card header END -->

\t\t<!-- Card body START -->
\t\t<div class=\"card-body\">

\t\t\t<!-- Order list table START -->
\t\t\t<div class=\"table-responsive border-0\">
\t\t\t\t<!-- Table START -->
\t\t\t\t<table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
\t\t\t\t\t<!-- Table head -->
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-start\">Course name</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Order ID</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Date</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0\">Amount</th>
\t\t\t\t\t\t\t<th scope=\"col\" class=\"border-0 rounded-end\">Payment</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>

\t\t\t\t\t<!-- Table body START -->
\t\t\t\t\t<tbody>
\t\t\t\t\t\t{% for order in orders %}
\t\t\t\t\t\t\t<!-- Table item -->
\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t<h6 class=\"table-responsive-title mt-2 mt-lg-0 mb-0\"><a href=\"#\">{{ order.cours.intitule }}</a></h6>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td class=\"text-center text-sm-start text-primary-hover\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\"><u>#{{ order.reference }}</u></a>
\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>{{ order.paidAt|date('d/m/Y - H:i:s') }}</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>{{ order.cours.montantAbonnement }} XAF</td>

\t\t\t\t\t\t\t\t<!-- Table data -->
\t\t\t\t\t\t\t\t<td>{{ order.paymentMethod.label }}</td>
\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<tr><td colspan=\"5\">No order's found</td></tr>
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t</tbody>
\t\t\t\t\t<!-- Table body END -->
\t\t\t\t</table>
\t\t\t\t<!-- Table END -->
\t\t\t</div>
\t\t\t<!-- Order list table END -->

\t\t\t<!-- Pagination START -->
\t\t\t<div class=\"d-sm-flex justify-content-sm-between align-items-sm-center mt-4 mt-sm-3\">
\t\t\t\t<!-- Content -->
\t\t\t\t<p class=\"mb-0 text-center text-sm-start\">Showing {{ ((orders.getCurrentPageNumber - 1) * orders.getItemNumberPerPage) + 1 }} to {{ orders.getItemNumberPerPage * orders.getCurrentPageNumber }} of {{orders.getTotalItemCount}} entries</p>
\t\t\t\t<!-- Pagination -->
\t\t\t\t{{ knp_pagination_render(orders) }}
\t\t\t</div>
\t\t\t<!-- Pagination END -->
\t\t</div>
\t\t<!-- Card body START -->
\t</div>
\t<!--Card END  -->

{% endblock %}", "instructor/orders/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\instructor\\orders\\index.html.twig");
    }
}
