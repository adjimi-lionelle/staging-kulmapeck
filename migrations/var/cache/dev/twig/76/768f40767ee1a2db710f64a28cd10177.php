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

/* front/plan/index.html.twig */
class __TwigTemplate_c772dc7d3adb176967b270b4072d1e41 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/plan/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/plan/index.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/plan/index.html.twig", 1);
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

        echo " - Plan";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_mainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        // line 7
        echo "
    <!-- =======================
    Page Banner START -->
    <section class=\"py-5 price-wrap\">
        <div class=\"container\">
            <div class=\"row g-4 position-relative mb-4\">
                <!-- SVG decoration -->
                <figure class=\"position-absolute top-0 start-0 d-none d-sm-block\">\t
                    <svg width=\"22px\" height=\"22px\" viewBox=\"0 0 22 22\">
                    <polygon class=\"fill-purple\" points=\"22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 \"></polygon>
                    </svg>
                </figure>
        
                <!-- Title and Search -->
                <div class=\"col-lg-10 mx-auto text-center position-relative\">
                    <!-- SVG decoration -->
                    <figure class=\"position-absolute top-50 end-0 translate-middle-y d-none d-md-block\">
                        <svg width=\"27px\" height=\"27px\">
                            <path class=\"fill-orange\" d=\"M13.122,5.946 L17.679,-0.001 L17.404,7.528 L24.661,5.946 L19.683,11.533 L26.244,15.056 L18.891,16.089 L21.686,23.068 L15.400,19.062 L13.122,26.232 L10.843,19.062 L4.557,23.068 L7.352,16.089 L-0.000,15.056 L6.561,11.533 L1.582,5.946 L8.839,7.528 L8.565,-0.001 L13.122,5.946 Z\"></path>
                        </svg>
                    </figure>
                    <!-- Title -->
                    <h1>Affordable Pricing Packages</h1>
                    <p class=\"mb-4 pb-1\">Perceived end knowledge certainly day sweetness why cordially</p>

                    <!-- Switch START -->
                    <form class=\"d-flex align-items-center justify-content-center\">
                    <!-- Label -->
                    <span class=\"h6 mb-0 fw-bold\">Monthly</span>
                    <!-- Switch -->
                    <div class=\"form-check form-switch form-check-lg mx-3 mb-0\">
                        <input class=\"form-check-input mt-0 price-toggle\" type=\"checkbox\" id=\"flexSwitchCheckDefault\">
                    </div>
                    <!-- Label -->
                    <div class=\"position-relative\">
                        <span class=\"h6 mb-0 fw-bold\">Yearly</span>
                        <span class=\"badge bg-danger bg-opacity-10 text-danger ms-1 position-absolute top-0 start-100 translate-middle mt-n2 ms-2 ms-md-5\">10% discount</span>
                    </div>
                    </form>
                    <!-- Switch END -->
                </div>
            </div>\t
            <!-- Pricing START -->
            <div class=\"row g-4\">

                ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plans"]) || array_key_exists("plans", $context) ? $context["plans"] : (function () { throw new RuntimeError('Variable "plans" does not exist.', 52, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 53
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
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plan"], "label", [], "any", false, false, false, 63), "html", null, true);
            echo "</h5>
                                        ";
            // line 64
            if (twig_get_attribute($this->env, $this->source, $context["plan"], "isRecommended", [], "any", false, false, false, 64)) {
                // line 65
                echo "                                            <div class=\"badge bg-grad mb-0 rounded-pill\">Recommended</div>
                                        ";
            }
            // line 67
            echo "                                    </div>
                                    <!-- Price -->
                                    <div>
                                        <h4 class=\"text-success mb-0 plan-price\" data-monthly-price=\"";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plan"], "montant", [], "any", false, false, false, 70), "html", null, true);
            echo " XAF\" data-annual-price=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plan"], "montant", [], "any", false, false, false, 70), "html", null, true);
            echo " XAF\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plan"], "montant", [], "any", false, false, false, 70), "html", null, true);
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
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["abonnementItems"]) || array_key_exists("abonnementItems", $context) ? $context["abonnementItems"] : (function () { throw new RuntimeError('Variable "abonnementItems" does not exist.', 84, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 85
                echo "                                        ";
                if (twig_in_filter($context["item"], twig_get_attribute($this->env, $this->source, $context["plan"], "items", [], "any", false, false, false, 85))) {
                    // line 86
                    echo "                                            <li class=\"mb-3 h6 fw-light\"><i class=\"bi bi-patch-check-fill text-success me-2\"></i>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 86), "html", null, true);
                    echo "</li>
                                        ";
                } else {
                    // line 88
                    echo "                                            <li class=\"mb-3 h6 fw-light\"><i class=\"bi bi-x-octagon-fill text-danger me-2\"></i>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 88), "html", null, true);
                    echo "</li>
                                        ";
                }
                // line 90
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo "                                </ul>
                            </div>
                            <!-- Card Footer -->
                            <div class=\"card-footer text-center d-grid pb-0\">
                                <a type=\"button\" href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_payment_buy_plan", ["slug" => twig_get_attribute($this->env, $this->source, $context["plan"], "slug", [], "any", false, false, false, 95)]), "html", null, true);
            echo "\" class=\"btn ";
            echo ((twig_get_attribute($this->env, $this->source, $context["plan"], "isRecommended", [], "any", false, false, false, 95)) ? ("btn-dark") : ("btn-light"));
            echo " btn-danger-soft-hover mb-0\">Subscribe</a>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing item END -->

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                
            </div>\t<!-- Row END -->
            <!-- Pricing END -->
        </div>
    </section>
    <!-- =======================
    Page Banner END -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/plan/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 102,  218 => 95,  212 => 91,  206 => 90,  200 => 88,  194 => 86,  191 => 85,  187 => 84,  166 => 70,  161 => 67,  157 => 65,  155 => 64,  151 => 63,  139 => 53,  135 => 52,  88 => 7,  78 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"front/base.html.twig\" %}

{% block title %} - Plan{% endblock %}


{% block mainContent %}

    <!-- =======================
    Page Banner START -->
    <section class=\"py-5 price-wrap\">
        <div class=\"container\">
            <div class=\"row g-4 position-relative mb-4\">
                <!-- SVG decoration -->
                <figure class=\"position-absolute top-0 start-0 d-none d-sm-block\">\t
                    <svg width=\"22px\" height=\"22px\" viewBox=\"0 0 22 22\">
                    <polygon class=\"fill-purple\" points=\"22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 \"></polygon>
                    </svg>
                </figure>
        
                <!-- Title and Search -->
                <div class=\"col-lg-10 mx-auto text-center position-relative\">
                    <!-- SVG decoration -->
                    <figure class=\"position-absolute top-50 end-0 translate-middle-y d-none d-md-block\">
                        <svg width=\"27px\" height=\"27px\">
                            <path class=\"fill-orange\" d=\"M13.122,5.946 L17.679,-0.001 L17.404,7.528 L24.661,5.946 L19.683,11.533 L26.244,15.056 L18.891,16.089 L21.686,23.068 L15.400,19.062 L13.122,26.232 L10.843,19.062 L4.557,23.068 L7.352,16.089 L-0.000,15.056 L6.561,11.533 L1.582,5.946 L8.839,7.528 L8.565,-0.001 L13.122,5.946 Z\"></path>
                        </svg>
                    </figure>
                    <!-- Title -->
                    <h1>Affordable Pricing Packages</h1>
                    <p class=\"mb-4 pb-1\">Perceived end knowledge certainly day sweetness why cordially</p>

                    <!-- Switch START -->
                    <form class=\"d-flex align-items-center justify-content-center\">
                    <!-- Label -->
                    <span class=\"h6 mb-0 fw-bold\">Monthly</span>
                    <!-- Switch -->
                    <div class=\"form-check form-switch form-check-lg mx-3 mb-0\">
                        <input class=\"form-check-input mt-0 price-toggle\" type=\"checkbox\" id=\"flexSwitchCheckDefault\">
                    </div>
                    <!-- Label -->
                    <div class=\"position-relative\">
                        <span class=\"h6 mb-0 fw-bold\">Yearly</span>
                        <span class=\"badge bg-danger bg-opacity-10 text-danger ms-1 position-absolute top-0 start-100 translate-middle mt-n2 ms-2 ms-md-5\">10% discount</span>
                    </div>
                    </form>
                    <!-- Switch END -->
                </div>
            </div>\t
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
                                <a type=\"button\" href=\"{{ url(\"app_front_payment_buy_plan\", {slug: plan.slug}) }}\" class=\"btn {{ plan.isRecommended ? 'btn-dark' : 'btn-light' }} btn-danger-soft-hover mb-0\">Subscribe</a>
                            </div>
                        </div>
                    </div>
                    <!-- Pricing item END -->

                {% endfor %}
                
            </div>\t<!-- Row END -->
            <!-- Pricing END -->
        </div>
    </section>
    <!-- =======================
    Page Banner END -->

{% endblock %}", "front/plan/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\plan\\index.html.twig");
    }
}
