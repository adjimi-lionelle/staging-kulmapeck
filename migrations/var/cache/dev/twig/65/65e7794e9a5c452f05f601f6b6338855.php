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

/* front/payment/buy_course.html.twig */
class __TwigTemplate_67651d614e7d2fcc1a6e87fa2c2a1240 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/payment/buy_course.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/payment/buy_course.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/payment/buy_course.html.twig", 1);
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

        echo " - Buy Course";
        
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
                <!-- Content -->
                <div class=\"col-lg-6\">
                    <h1 class=\"text-white\">Payment</h1>
                    <hr>
                    <h2 class=\"text-white\">";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 15, $this->source); })()), "intitule", [], "any", false, false, false, 15), "html", null, true);
        echo "</h2>
                    <p class=\"text-white mb-3\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 16, $this->source); })()), "description", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
                    <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_course_details", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 17, $this->source); })()), "slug", [], "any", false, false, false, 17)], "http", false), "html", null, true);
        echo "\" class=\"btn btn-white mb-0\">More course details<i class=\"bi bi-arrow-right ms-2\"></i></a>
                </div>

                <!-- Form -->
                <div class=\"col-lg-6 col-xl-5 mb-n9\">
                    <div class=\"card card-body shadow p-4 p-sm-5\">
                        <!-- Title -->
                        <h2 class=\"mb-0 h3\">Payment form</h2>
                        <p class=\"mb-0\">Please complete the form to initiate payment</p>
                        <!-- Form START -->
                        <form method=\"POST\" class=\"mt-3 mt-sm-4 text-start\">
                            <!-- Email -->
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Course price</label>
                                <input name=\"price\" type=\"text\" disabled class=\"form-control\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 31, $this->source); })()), "montantAbonnement", [], "any", false, false, false, 31), "html", null, true);
        echo " XAF\">
                            </div>
                            <!-- Password -->
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Select a payment method</label>
                                <select required name=\"payment_method\" id=\"\" class=\"form-control js-choice\">
                                    <option value=\"\"></option>
                                    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paymentMethods"]) || array_key_exists("paymentMethods", $context) ? $context["paymentMethods"] : (function () { throw new RuntimeError('Variable "paymentMethods" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pm"]) {
            // line 39
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pm"], "code", [], "any", false, false, false, 39), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pm"], "label", [], "any", false, false, false, 39), "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                                </select>
                            </div>
                            <!-- Phone -->
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Phone Number</label>
                                <input required name=\"phone\" type=\"text\" class=\"form-control\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 46, $this->source); })()), "utilisateur", [], "any", false, false, false, 46), "personne", [], "any", false, false, false, 46), "telephone", [], "any", false, false, false, 46), "html", null, true);
        echo "\">
                            </div>
                            <!-- Password -->
                            <!-- Remember me -->
                            <div class=\"mb-3 d-sm-flex justify-content-between\">
                                <div>
                                    <input required type=\"checkbox\" class=\"form-check-input\" id=\"rememberCheck\">
                                    <label class=\"form-check-label\" for=\"rememberCheck\">I accept the terms</label>
                                </div>
                                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("payment" . twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55))), "html", null, true);
        echo "\">
                            </div>
                            <!-- Button -->
                            <div class=\"d-grid\"><button type=\"submit\" name=\"initiate_payment\" value=\"true\" class=\"btn btn-dark mb-0\">Initiate Payment</button></div>
                        </form>
                        <!-- Form END -->
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
        return "front/payment/buy_course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 55,  158 => 46,  151 => 41,  140 => 39,  136 => 38,  126 => 31,  109 => 17,  105 => 16,  101 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"front/base.html.twig\" %}

{% block title %} - Buy Course{% endblock %}

{% block mainContent %}
    <section class=\"mb-9 position-relative\" style=\"background-image:url({{ asset('assets/images/bg/07.jpg') }}); background-position: center left; background-size: cover;\">
        <!-- Background dark overlay -->
        <div class=\"bg-overlay bg-blue opacity-9\"></div>
        <div class=\"container z-index-9 position-relative\">
            <div class=\"row g-4 justify-content-between align-items-center\">
                <!-- Content -->
                <div class=\"col-lg-6\">
                    <h1 class=\"text-white\">Payment</h1>
                    <hr>
                    <h2 class=\"text-white\">{{ course.intitule }}</h2>
                    <p class=\"text-white mb-3\">{{ course.description }}</p>
                    <a href=\"{{ url(\"app_front_course_details\", {slug: course.slug}, \"http\", false) }}\" class=\"btn btn-white mb-0\">More course details<i class=\"bi bi-arrow-right ms-2\"></i></a>
                </div>

                <!-- Form -->
                <div class=\"col-lg-6 col-xl-5 mb-n9\">
                    <div class=\"card card-body shadow p-4 p-sm-5\">
                        <!-- Title -->
                        <h2 class=\"mb-0 h3\">Payment form</h2>
                        <p class=\"mb-0\">Please complete the form to initiate payment</p>
                        <!-- Form START -->
                        <form method=\"POST\" class=\"mt-3 mt-sm-4 text-start\">
                            <!-- Email -->
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Course price</label>
                                <input name=\"price\" type=\"text\" disabled class=\"form-control\" value=\"{{ course.montantAbonnement }} XAF\">
                            </div>
                            <!-- Password -->
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Select a payment method</label>
                                <select required name=\"payment_method\" id=\"\" class=\"form-control js-choice\">
                                    <option value=\"\"></option>
                                    {% for pm in paymentMethods %}
                                        <option value=\"{{ pm.code }}\">{{ pm.label }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                            <!-- Phone -->
                            <div class=\"mb-3\">
                                <label class=\"form-label\">Phone Number</label>
                                <input required name=\"phone\" type=\"text\" class=\"form-control\" value=\"{{ student.utilisateur.personne.telephone }}\">
                            </div>
                            <!-- Password -->
                            <!-- Remember me -->
                            <div class=\"mb-3 d-sm-flex justify-content-between\">
                                <div>
                                    <input required type=\"checkbox\" class=\"form-check-input\" id=\"rememberCheck\">
                                    <label class=\"form-check-label\" for=\"rememberCheck\">I accept the terms</label>
                                </div>
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('payment' ~ course.id) }}\">
                            </div>
                            <!-- Button -->
                            <div class=\"d-grid\"><button type=\"submit\" name=\"initiate_payment\" value=\"true\" class=\"btn btn-dark mb-0\">Initiate Payment</button></div>
                        </form>
                        <!-- Form END -->
                    </div>
                </div>

            </div> <!-- Row END -->
        </div>
\t</section>
{% endblock %}
", "front/payment/buy_course.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\payment\\buy_course.html.twig");
    }
}
