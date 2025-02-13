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

/* student/payment/subscriptions.html.twig */
class __TwigTemplate_7ff0d2b21e8ef5cc1f89c7b52fe78f0e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/payment/subscriptions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/payment/subscriptions.html.twig"));

        $this->parent = $this->loadTemplate("student/base.html.twig", "student/payment/subscriptions.html.twig", 1);
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
        echo "    - Subscriptions
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
    ";
        // line 9
        if ((isset($context["activePlan"]) || array_key_exists("activePlan", $context) ? $context["activePlan"] : (function () { throw new RuntimeError('Variable "activePlan" does not exist.', 9, $this->source); })())) {
            // line 10
            echo "        <div class=\"card card-body bg-transparent border rounded-3\">
            <!-- Update plan START -->
            <div class=\"row g-4\">
                <!-- Update plan item -->
                <div class=\"col-6 col-lg-3\">
                    <span>Active Plan</span>
                    <h4>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activePlan"]) || array_key_exists("activePlan", $context) ? $context["activePlan"] : (function () { throw new RuntimeError('Variable "activePlan" does not exist.', 16, $this->source); })()), "abonnement", [], "any", false, false, false, 16), "label", [], "any", false, false, false, 16), "html", null, true);
            echo "</h4>
                </div>
                <!-- Update plan item -->
                <div class=\"col-6 col-lg-3\">
                    <span>Monthly limit</span>
                    <h4>Unlimited</h4>
                </div>
                <!-- Update plan item -->
                <div class=\"col-6 col-lg-3\">
                    <span>Cost</span>
                    <h4>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activePlan"]) || array_key_exists("activePlan", $context) ? $context["activePlan"] : (function () { throw new RuntimeError('Variable "activePlan" does not exist.', 26, $this->source); })()), "amount", [], "any", false, false, false, 26), "html", null, true);
            echo " XAF</h4>
                </div>

                <!-- Update plan item -->
                <div class=\"col-6 col-lg-3\">
                    <span>Renewal Date</span>
                    <h4>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["activePlan"]) || array_key_exists("activePlan", $context) ? $context["activePlan"] : (function () { throw new RuntimeError('Variable "activePlan" does not exist.', 32, $this->source); })()), "expiredAt", [], "any", false, false, false, 32), "M d, Y"), "html", null, true);
            echo "</h4>
                </div>
            </div>
            <!-- Update plan END -->

            <!-- Progress bar -->
            <div class=\"overflow-hidden my-4\">
                <h6 class=\"mb-0\">";
            // line 39
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (100 - ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activePlan"]) || array_key_exists("activePlan", $context) ? $context["activePlan"] : (function () { throw new RuntimeError('Variable "activePlan" does not exist.', 39, $this->source); })()), "abonnement", [], "any", false, false, false, 39), "duree", [], "any", false, false, false, 39) - (isset($context["nbJoursEcoules"]) || array_key_exists("nbJoursEcoules", $context) ? $context["nbJoursEcoules"] : (function () { throw new RuntimeError('Variable "nbJoursEcoules" does not exist.', 39, $this->source); })())) / 100)), 2), "html", null, true);
            echo "%</h6>
                <div class=\"progress progress-sm bg-primary bg-opacity-10\">
                    <div class=\"progress-bar bg-primary aos\" role=\"progressbar\" data-aos=\"slide-right\" data-aos-delay=\"200\" data-aos-duration=\"1000\" data-aos-easing=\"ease-in-out\" style=\"width: ";
            // line 41
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (100 - ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activePlan"]) || array_key_exists("activePlan", $context) ? $context["activePlan"] : (function () { throw new RuntimeError('Variable "activePlan" does not exist.', 41, $this->source); })()), "abonnement", [], "any", false, false, false, 41), "duree", [], "any", false, false, false, 41) - (isset($context["nbJoursEcoules"]) || array_key_exists("nbJoursEcoules", $context) ? $context["nbJoursEcoules"] : (function () { throw new RuntimeError('Variable "nbJoursEcoules" does not exist.', 41, $this->source); })())) / 100)), 2), "html", null, true);
            echo "%\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (100 - ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activePlan"]) || array_key_exists("activePlan", $context) ? $context["activePlan"] : (function () { throw new RuntimeError('Variable "activePlan" does not exist.', 41, $this->source); })()), "abonnement", [], "any", false, false, false, 41), "duree", [], "any", false, false, false, 41) - (isset($context["nbJoursEcoules"]) || array_key_exists("nbJoursEcoules", $context) ? $context["nbJoursEcoules"] : (function () { throw new RuntimeError('Variable "nbJoursEcoules" does not exist.', 41, $this->source); })())) / 100)), 2), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                    </div>
                </div>
            </div>

            <!-- Button -->
            ";
            // line 64
            echo "
            <!-- Divider -->
            <hr>

            <!-- Plan Benefits -->
            <div class=\"row\">
                <h6 class=\"mb-3\">The plan includes</h6>
                <div class=\"col-md-12\">
                    <ul class=\"list-unstyled row\">
                        ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["activePlan"]) || array_key_exists("activePlan", $context) ? $context["activePlan"] : (function () { throw new RuntimeError('Variable "activePlan" does not exist.', 73, $this->source); })()), "abonnement", [], "any", false, false, false, 73), "items", [], "any", false, false, false, 73));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 74
                echo "                            <div class=\"col-md-6\">
                                <li class=\"mb-3 h6 fw-light\"><i class=\"bi bi-patch-check-fill text-success me-2\"></i>";
                // line 75
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 75), "html", null, true);
                echo "</li>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "                    </ul>
                </div>
            </div>
        </div>
    ";
        }
        // line 83
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "student/payment/subscriptions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 83,  178 => 78,  169 => 75,  166 => 74,  162 => 73,  151 => 64,  140 => 41,  135 => 39,  125 => 32,  116 => 26,  103 => 16,  95 => 10,  93 => 9,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"student/base.html.twig\" %}

{% block title %}
    - Subscriptions
{% endblock %}

{% block pageContent %}

    {% if activePlan %}
        <div class=\"card card-body bg-transparent border rounded-3\">
            <!-- Update plan START -->
            <div class=\"row g-4\">
                <!-- Update plan item -->
                <div class=\"col-6 col-lg-3\">
                    <span>Active Plan</span>
                    <h4>{{ activePlan.abonnement.label }}</h4>
                </div>
                <!-- Update plan item -->
                <div class=\"col-6 col-lg-3\">
                    <span>Monthly limit</span>
                    <h4>Unlimited</h4>
                </div>
                <!-- Update plan item -->
                <div class=\"col-6 col-lg-3\">
                    <span>Cost</span>
                    <h4>{{ activePlan.amount }} XAF</h4>
                </div>

                <!-- Update plan item -->
                <div class=\"col-6 col-lg-3\">
                    <span>Renewal Date</span>
                    <h4>{{ activePlan.expiredAt|date('M d, Y') }}</h4>
                </div>
            </div>
            <!-- Update plan END -->

            <!-- Progress bar -->
            <div class=\"overflow-hidden my-4\">
                <h6 class=\"mb-0\">{{ (100 - ((activePlan.abonnement.duree - nbJoursEcoules) / 100))|number_format(2) }}%</h6>
                <div class=\"progress progress-sm bg-primary bg-opacity-10\">
                    <div class=\"progress-bar bg-primary aos\" role=\"progressbar\" data-aos=\"slide-right\" data-aos-delay=\"200\" data-aos-duration=\"1000\" data-aos-easing=\"ease-in-out\" style=\"width: {{ (100 - ((activePlan.abonnement.duree - nbJoursEcoules) / 100))|number_format(2) }}%\" aria-valuenow=\"{{ (100 - ((activePlan.abonnement.duree - nbJoursEcoules) / 100))|number_format(2) }}\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                    </div>
                </div>
            </div>

            <!-- Button -->
            {# <div class=\"d-sm-flex justify-content-sm-between align-items-center\">
                <div>
                <!-- Switch Content -->
                    <div class=\"d-sm-flex\">
                        <div class=\"form-check form-switch form-check-md\">
                            <input class=\"form-check-input\" type=\"checkbox\" id=\"checkPrivacy1\" checked=\"\">
                            <label class=\"form-check-label\" for=\"checkPrivacy1\">Auto Renewal</label>
                        </div>
                    </div>
                    <p class=\"mb-0 small\">Your plan will automatically renew on: 02/17/2023. Payment Amount: USD250</p>
                </div>\t
                <!-- Buttons -->
                <div class=\"mt-2 mt-sm-0\">
                    <button type=\"button\" class=\"btn btn-sm btn-danger-soft me-2 mb-0\">Cancel plan</button>
                    <a href=\"#\" class=\"btn btn-sm btn-success mb-0\">Upgrade plan</a>
                </div>
            </div> #}

            <!-- Divider -->
            <hr>

            <!-- Plan Benefits -->
            <div class=\"row\">
                <h6 class=\"mb-3\">The plan includes</h6>
                <div class=\"col-md-12\">
                    <ul class=\"list-unstyled row\">
                        {% for item in activePlan.abonnement.items %}
                            <div class=\"col-md-6\">
                                <li class=\"mb-3 h6 fw-light\"><i class=\"bi bi-patch-check-fill text-success me-2\"></i>{{ item.label }}</li>
                            </div>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
    {% endif %}

{% endblock %}", "student/payment/subscriptions.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\student\\payment\\subscriptions.html.twig");
    }
}
