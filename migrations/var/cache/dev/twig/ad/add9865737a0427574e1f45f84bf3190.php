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

/* admin/abonnement/index.html.twig */
class __TwigTemplate_7bf79287e3cb42e42073e5327da5e934 extends Template
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
            'script' => [$this, 'block_script'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/abonnement/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/abonnement/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/abonnement/index.html.twig", 1);
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

        echo "Abonnements";
        
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_admin_abonnement_new");
        echo "\" class=\"btn btn-sm btn-primary mb-0\">Add new plan</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 10
        echo "    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_mainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        // line 14
        echo "

    <!-- Pricing START -->
    <div class=\"row g-4\">

        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plans"]) || array_key_exists("plans", $context) ? $context["plans"] : (function () { throw new RuntimeError('Variable "plans" does not exist.', 19, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 20
            echo "            
            <!-- Pricing item START -->
            <div class=\"col-md-6 col-xl-4\">
                <div class=\"card border rounded-3 p-2 p-sm-4 h-100\">
                    <!-- Card Header -->
                    <div class=\"card-header p-0\">
                        <!-- Price and Info -->
                        <div class=\"d-flex justify-content-between align-items-center p-3 bg-light rounded-2\">
                            <!-- Info -->
                            <div>
                                <h5 class=\"mb-0\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plan"], "label", [], "any", false, false, false, 30), "html", null, true);
            echo "</h5>
                                ";
            // line 31
            if (twig_get_attribute($this->env, $this->source, $context["plan"], "isRecommended", [], "any", false, false, false, 31)) {
                // line 32
                echo "                                    <div class=\"badge bg-grad mb-0 rounded-pill\">Recommended</div>
                                ";
            }
            // line 34
            echo "                            </div>
                            <!-- Price -->
                            <div>
                                <h4 class=\"text-success mb-0 plan-price\" data-monthly-price=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plan"], "montant", [], "any", false, false, false, 37), "html", null, true);
            echo " XAF\" data-annual-price=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plan"], "montant", [], "any", false, false, false, 37), "html", null, true);
            echo " XAF\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plan"], "montant", [], "any", false, false, false, 37), "html", null, true);
            echo " XAF</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class=\"position-relative my-3 text-center\">
                        <hr>
                        <p class=\"small position-absolute top-50 start-50 translate-middle bg-body px-3\">All plans included</p>
                    </div>

                    <!-- Card Body -->
                    <div class=\"card-body pt-0\">
                        <ul class=\"list-unstyled mt-2 mb-0\">
                            ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["abonnementItems"]) || array_key_exists("abonnementItems", $context) ? $context["abonnementItems"] : (function () { throw new RuntimeError('Variable "abonnementItems" does not exist.', 51, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 52
                echo "                                ";
                if (twig_in_filter($context["item"], twig_get_attribute($this->env, $this->source, $context["plan"], "items", [], "any", false, false, false, 52))) {
                    // line 53
                    echo "                                    <li class=\"mb-3 h6 fw-light\"><i class=\"bi bi-patch-check-fill text-success me-2\"></i>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 53), "html", null, true);
                    echo "</li>
                                ";
                } else {
                    // line 55
                    echo "                                    <li class=\"mb-3 h6 fw-light\"><i class=\"bi bi-x-octagon-fill text-danger me-2\"></i>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 55), "html", null, true);
                    echo "</li>
                                ";
                }
                // line 57
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                        </ul>
                    </div>
                    <!-- Card Footer -->
                    <div class=\"card-footer text-center d-grid pb-0\">
                        <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_admin_abonnement_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 62)]), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-dark mb-0\">Edit</a>
                        ";
            // line 63
            echo twig_include($this->env, $context, "admin/abonnement/_delete_form.html.twig", ["abonnement" => $context["plan"]]);
            echo "
                    </div>
                </div>
            </div>
            <!-- Pricing item END -->

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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        
    </div>\t<!-- Row END -->
    <!-- Pricing END -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/abonnement/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 70,  241 => 63,  237 => 62,  231 => 58,  225 => 57,  219 => 55,  213 => 53,  210 => 52,  206 => 51,  185 => 37,  180 => 34,  176 => 32,  174 => 31,  170 => 30,  158 => 20,  141 => 19,  134 => 14,  124 => 13,  113 => 10,  103 => 9,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block pageTitle %}Abonnements{% endblock %}

{% block actionBtn %}
\t<a href=\"{{ url(\"app_admin_abonnement_new\") }}\" class=\"btn btn-sm btn-primary mb-0\">Add new plan</a>
{% endblock %}

{% block script %}
    
{% endblock %}

{% block mainContent %}


    <!-- Pricing START -->
    <div class=\"row g-4\">

        {% for plan in plans %}
            
            <!-- Pricing item START -->
            <div class=\"col-md-6 col-xl-4\">
                <div class=\"card border rounded-3 p-2 p-sm-4 h-100\">
                    <!-- Card Header -->
                    <div class=\"card-header p-0\">
                        <!-- Price and Info -->
                        <div class=\"d-flex justify-content-between align-items-center p-3 bg-light rounded-2\">
                            <!-- Info -->
                            <div>
                                <h5 class=\"mb-0\">{{ plan.label }}</h5>
                                {% if plan.isRecommended %}
                                    <div class=\"badge bg-grad mb-0 rounded-pill\">Recommended</div>
                                {% endif %}
                            </div>
                            <!-- Price -->
                            <div>
                                <h4 class=\"text-success mb-0 plan-price\" data-monthly-price=\"{{ plan.montant }} XAF\" data-annual-price=\"{{ plan.montant }} XAF\">{{ plan.montant }} XAF</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class=\"position-relative my-3 text-center\">
                        <hr>
                        <p class=\"small position-absolute top-50 start-50 translate-middle bg-body px-3\">All plans included</p>
                    </div>

                    <!-- Card Body -->
                    <div class=\"card-body pt-0\">
                        <ul class=\"list-unstyled mt-2 mb-0\">
                            {% for item in abonnementItems %}
                                {% if item in plan.items %}
                                    <li class=\"mb-3 h6 fw-light\"><i class=\"bi bi-patch-check-fill text-success me-2\"></i>{{ item.label }}</li>
                                {% else %}
                                    <li class=\"mb-3 h6 fw-light\"><i class=\"bi bi-x-octagon-fill text-danger me-2\"></i>{{ item.label }}</li>
                                {% endif %}
                            {% endfor %}
                        </ul>
                    </div>
                    <!-- Card Footer -->
                    <div class=\"card-footer text-center d-grid pb-0\">
                        <a href=\"{{ url(\"app_admin_abonnement_edit\", {id: plan.id}) }}\" type=\"button\" class=\"btn btn-dark mb-0\">Edit</a>
                        {{ include('admin/abonnement/_delete_form.html.twig', {abonnement: plan}) }}
                    </div>
                </div>
            </div>
            <!-- Pricing item END -->

        {% endfor %}
        
    </div>\t<!-- Row END -->
    <!-- Pricing END -->

{% endblock %}", "admin/abonnement/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\abonnement\\index.html.twig");
    }
}
