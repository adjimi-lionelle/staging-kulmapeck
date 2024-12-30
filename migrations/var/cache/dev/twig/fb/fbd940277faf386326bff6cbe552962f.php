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

/* front/payment/subscribe_abonnement.html.twig */
class __TwigTemplate_582119b91f8ec22ecc49634cd12ea999 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/payment/subscribe_abonnement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/payment/subscribe_abonnement.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/payment/subscribe_abonnement.html.twig", 1);
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

        echo " - Subscribe Plan";
        
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
        echo "    <section class=\"mb-9 position-relative\" style=\"background-image:url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/bg/07.jpg"), "html", null, true);
        echo "); background-position: center left; background-size: cover;\">
        <!-- Background dark overlay -->
        <div class=\"bg-overlay bg-blue opacity-9\"></div>
        <div class=\"container z-index-9 position-relative\">
            <div class=\"row g-4 justify-content-between align-items-center\">
                <!-- Form -->
                <div class=\"col-lg-6 col-xl-6 mb-n9\">
                    <div class=\"card card-body shadow p-4 p-sm-5\">
                        <!-- Title -->
                        <h2 class=\"mb-0 h3\">Payment form</h2>
                        <p class=\"mb-0\">Please complete the form to initiate payment</p>
                        <!-- Form START -->
                        <form method=\"POST\" class=\"mt-3 mt-sm-4 text-start\">
                            <!-- Email -->
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Plan amount</label>
                                <input name=\"price\" type=\"text\" disabled class=\"form-control\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 22, $this->source); })()), "montant", [], "any", false, false, false, 22), "html", null, true);
        echo " XAF\">
                            </div>
                            <!-- Password -->
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Select a payment method</label>
                                <select required name=\"payment_method\" id=\"\" class=\"form-control js-choice\">
                                    <option value=\"\">Select payment method</option>
                                    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 29, $this->source); })()), "paymentMethods", [], "any", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["pm"]) {
            // line 30
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pm"], "code", [], "any", false, false, false, 30), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pm"], "label", [], "any", false, false, false, 30), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                                </select>
                            </div>
                            <!-- Phone -->
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Paiement Number</label>
                                <input required name=\"phone\" type=\"text\" class=\"form-control\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 37, $this->source); })()), "utilisateur", [], "any", false, false, false, 37), "personne", [], "any", false, false, false, 37), "telephone", [], "any", false, false, false, 37), "html", null, true);
        echo "\">
                            </div>
                            <!-- Password -->
                            <!-- Remember me -->
                            <div class=\"mb-3 d-sm-flex justify-content-between\">
                                <div>
                                    <input required type=\"checkbox\" class=\"form-check-input\" id=\"rememberCheck\">
                                    <label class=\"form-check-label\" for=\"rememberCheck\">I accept the <a href=\"\">terms</a></label>
                                </div>
                                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("payment" . twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46))), "html", null, true);
        echo "\">
                            </div>
                            <!-- Button -->
                            <div class=\"d-grid\"><button type=\"submit\" name=\"initiate_payment\" value=\"true\" class=\"btn btn-dark mb-0\">Initiate Payment</button></div>
                        </form>
                        <!-- Form END -->
                    </div>
                </div>

                <!-- Content -->
                <div class=\"col-lg-6\">
                    <div class=\"card border rounded-3 p-2 p-sm-4 h-100\">
                            <!-- Card Header -->
                            <div class=\"card-header p-0\">
                                <!-- Price and Info -->
                                <div class=\"d-flex justify-content-between align-items-center p-3 bg-light rounded-2\">
                                    <!-- Info -->
                                    <div>
                                        <h5 class=\"mb-0\">";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 64, $this->source); })()), "label", [], "any", false, false, false, 64), "html", null, true);
        echo "</h5>
                                        ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 65, $this->source); })()), "isRecommended", [], "any", false, false, false, 65)) {
            // line 66
            echo "                                            <div class=\"badge bg-grad mb-0 rounded-pill\">Recommended</div>
                                        ";
        }
        // line 68
        echo "                                    </div>
                                    <!-- Price -->
                                    <div>
                                        <h4 class=\"text-success mb-0 plan-price\" data-monthly-price=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 71, $this->source); })()), "montant", [], "any", false, false, false, 71), "html", null, true);
        echo " XAF\" data-annual-price=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 71, $this->source); })()), "montant", [], "any", false, false, false, 71), "html", null, true);
        echo " XAF\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 71, $this->source); })()), "montant", [], "any", false, false, false, 71), "html", null, true);
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
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["abonnementItems"]) || array_key_exists("abonnementItems", $context) ? $context["abonnementItems"] : (function () { throw new RuntimeError('Variable "abonnementItems" does not exist.', 85, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 86
            echo "                                        ";
            if (twig_in_filter($context["item"], twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 86, $this->source); })()), "items", [], "any", false, false, false, 86))) {
                // line 87
                echo "                                            <li class=\"mb-3 h6 fw-light\"><i class=\"bi bi-patch-check-fill text-success me-2\"></i>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 87), "html", null, true);
                echo "</li>
                                        ";
            } else {
                // line 89
                echo "                                            <li class=\"mb-3 h6 fw-light\"><i class=\"bi bi-x-octagon-fill text-danger me-2\"></i>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "label", [], "any", false, false, false, 89), "html", null, true);
                echo "</li>
                                        ";
            }
            // line 91
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                                </ul>
                            </div>
                            <!-- Card Footer -->
                            <div class=\"card-footer text-center d-grid pb-0\">
                            </div>
                        </div>
                </div>

            </div> <!-- Row END -->
        </div>
\t</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/payment/subscribe_abonnement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 92,  228 => 91,  222 => 89,  216 => 87,  213 => 86,  209 => 85,  188 => 71,  183 => 68,  179 => 66,  177 => 65,  173 => 64,  152 => 46,  140 => 37,  133 => 32,  122 => 30,  118 => 29,  108 => 22,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"front/base.html.twig\" %}

{% block title %} - Subscribe Plan{% endblock %}

{% block mainContent %}
    <section class=\"mb-9 position-relative\" style=\"background-image:url({{ asset('assets/images/bg/07.jpg') }}); background-position: center left; background-size: cover;\">
        <!-- Background dark overlay -->
        <div class=\"bg-overlay bg-blue opacity-9\"></div>
        <div class=\"container z-index-9 position-relative\">
            <div class=\"row g-4 justify-content-between align-items-center\">
                <!-- Form -->
                <div class=\"col-lg-6 col-xl-6 mb-n9\">
                    <div class=\"card card-body shadow p-4 p-sm-5\">
                        <!-- Title -->
                        <h2 class=\"mb-0 h3\">Payment form</h2>
                        <p class=\"mb-0\">Please complete the form to initiate payment</p>
                        <!-- Form START -->
                        <form method=\"POST\" class=\"mt-3 mt-sm-4 text-start\">
                            <!-- Email -->
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Plan amount</label>
                                <input name=\"price\" type=\"text\" disabled class=\"form-control\" value=\"{{ plan.montant }} XAF\">
                            </div>
                            <!-- Password -->
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Select a payment method</label>
                                <select required name=\"payment_method\" id=\"\" class=\"form-control js-choice\">
                                    <option value=\"\">Select payment method</option>
                                    {% for pm in plan.paymentMethods %}
                                        <option value=\"{{ pm.code }}\">{{ pm.label }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <!-- Phone -->
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Paiement Number</label>
                                <input required name=\"phone\" type=\"text\" class=\"form-control\" value=\"{{ student.utilisateur.personne.telephone }}\">
                            </div>
                            <!-- Password -->
                            <!-- Remember me -->
                            <div class=\"mb-3 d-sm-flex justify-content-between\">
                                <div>
                                    <input required type=\"checkbox\" class=\"form-check-input\" id=\"rememberCheck\">
                                    <label class=\"form-check-label\" for=\"rememberCheck\">I accept the <a href=\"\">terms</a></label>
                                </div>
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('payment' ~ plan.id) }}\">
                            </div>
                            <!-- Button -->
                            <div class=\"d-grid\"><button type=\"submit\" name=\"initiate_payment\" value=\"true\" class=\"btn btn-dark mb-0\">Initiate Payment</button></div>
                        </form>
                        <!-- Form END -->
                    </div>
                </div>

                <!-- Content -->
                <div class=\"col-lg-6\">
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
                            </div>
                        </div>
                </div>

            </div> <!-- Row END -->
        </div>
\t</section>
{% endblock %}
", "front/payment/subscribe_abonnement.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\payment\\subscribe_abonnement.html.twig");
    }
}
