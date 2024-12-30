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

/* security/login.html.twig */
class __TwigTemplate_e16a7558e7a93314377489c0235a5430 extends Template
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
            'formBlock' => [$this, 'block_formBlock'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "security/login.html.twig", 1);
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

        echo " - LOGIN";
        
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
        echo "    <section class=\"mb-9 position-relative\" style=\"background-image:url(assets/images/bg/07.jpg); background-position: center left; background-size: cover;\">
\t<!-- Background dark overlay -->
\t<div class=\"bg-overlay bg-blue opacity-9\"></div>
\t<div class=\"container z-index-9 position-relative\">
\t\t<div class=\"row g-4 justify-content-between align-items-center\">
\t\t\t<!-- Content -->
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<h1 class=\"text-white\">";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("WELCOME_LOGIN_KEY", [], "messages");
        echo "</h1>
\t\t\t\t<p class=\"text-white mb-3\">Man children rejoiced yet uncommonly his ten who. Yet uncommonly his ten who diminution astonished. Yet uncommonly his ten who diminution astonished.</p>
\t\t\t\t<a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_courses");
        echo "\" class=\"btn btn-white mb-0\">Explore our courses<i class=\"bi bi-arrow-right ms-2\"></i></a>
\t\t\t</div>

\t\t\t<!-- Form -->
\t\t\t<div class=\"col-lg-6 col-xl-5 mb-n9\">
\t\t\t\t<div class=\"card card-body shadow p-4 p-sm-5\">
\t\t\t\t\t";
        // line 21
        $this->displayBlock('formBlock', $context, $blocks);
        // line 76
        echo "\t\t\t\t</div>
\t\t\t</div>

\t\t</div> <!-- Row END -->
\t</div>
\t</section>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 21
    public function block_formBlock($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formBlock"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formBlock"));

        // line 22
        echo "\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t<h2 class=\"mb-0 h3\">Welcome back</h2>
\t\t\t\t\t\t<p class=\"mb-0\">New here?<a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#coursePremium\"> Create an account</a></p>
\t\t\t\t\t\t";
        // line 25
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 25, $this->source); })())) {
            // line 26
            echo "\t\t\t\t\t\t\t<div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 26, $this->source); })()), "messageKey", [], "any", false, false, false, 26), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 26, $this->source); })()), "messageData", [], "any", false, false, false, 26), "security"), "html", null, true);
            echo "</div>
\t\t\t\t\t\t";
        }
        // line 28
        echo "
\t\t\t\t\t\t";
        // line 29
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29)) {
            // line 30
            echo "\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\tYou are logged in as ";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "userIdentifier", [], "any", false, false, false, 31), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 34
        echo "\t\t\t\t\t\t<!-- Form START -->
\t\t\t\t\t\t<form method=\"post\" class=\"mt-3 mt-sm-4 text-start\">
\t\t\t\t\t\t\t<!-- Email -->
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label class=\"form-label\">Enter email</label>
\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Password -->
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label class=\"form-label\">Enter password</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" name=\"password\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Remember me -->
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<div class=\"mb-3 d-sm-flex justify-content-between\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"  name=\"_remember_me\" class=\"form-check-input\" id=\"rememberCheck\">
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"rememberCheck\">Remember me?</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_forgot_password_request");
        echo "\" class=\"text-primary-hover\">Forgot password?</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t<div class=\"d-grid\"><button type=\"submit\" class=\"btn btn-dark mb-0\">Login</button></div>

\t\t\t\t\t\t\t<!-- Divider -->
\t\t\t\t\t\t\t<div class=\"position-relative my-4\">
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<p class=\"small position-absolute top-50 start-50 translate-middle bg-body px-2\">Or sign in with</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 d-grid\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-light mb-0\"><i class=\"fab fa-fw fa-google text-google-icon me-2\"></i>Google</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-sm-6 d-grid\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-light mb-0\"><i class=\"fab fa-fw fa-facebook-f text-facebook me-2\"></i>Facebook</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<!-- Form END -->
\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 53,  187 => 47,  176 => 39,  169 => 34,  161 => 31,  158 => 30,  156 => 29,  153 => 28,  147 => 26,  145 => 25,  140 => 22,  130 => 21,  114 => 76,  112 => 21,  103 => 15,  98 => 13,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"front/base.html.twig\" %}

{% block title %} - LOGIN{% endblock %}

{% block mainContent %}
    <section class=\"mb-9 position-relative\" style=\"background-image:url(assets/images/bg/07.jpg); background-position: center left; background-size: cover;\">
\t<!-- Background dark overlay -->
\t<div class=\"bg-overlay bg-blue opacity-9\"></div>
\t<div class=\"container z-index-9 position-relative\">
\t\t<div class=\"row g-4 justify-content-between align-items-center\">
\t\t\t<!-- Content -->
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<h1 class=\"text-white\">{% trans %}WELCOME_LOGIN_KEY{% endtrans %}</h1>
\t\t\t\t<p class=\"text-white mb-3\">Man children rejoiced yet uncommonly his ten who. Yet uncommonly his ten who diminution astonished. Yet uncommonly his ten who diminution astonished.</p>
\t\t\t\t<a href=\"{{ url(\"app_front_courses\") }}\" class=\"btn btn-white mb-0\">Explore our courses<i class=\"bi bi-arrow-right ms-2\"></i></a>
\t\t\t</div>

\t\t\t<!-- Form -->
\t\t\t<div class=\"col-lg-6 col-xl-5 mb-n9\">
\t\t\t\t<div class=\"card card-body shadow p-4 p-sm-5\">
\t\t\t\t\t{% block formBlock %}
\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t<h2 class=\"mb-0 h3\">Welcome back</h2>
\t\t\t\t\t\t<p class=\"mb-0\">New here?<a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#coursePremium\"> Create an account</a></p>
\t\t\t\t\t\t{% if error %}
\t\t\t\t\t\t\t<div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\tYou are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<!-- Form START -->
\t\t\t\t\t\t<form method=\"post\" class=\"mt-3 mt-sm-4 text-start\">
\t\t\t\t\t\t\t<!-- Email -->
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label class=\"form-label\">Enter email</label>
\t\t\t\t\t\t\t\t<input type=\"email\" name=\"email\" value=\"{{ last_username }}\" class=\"form-control\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Password -->
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label class=\"form-label\">Enter password</label>
\t\t\t\t\t\t\t\t<input class=\"form-control\" type=\"password\" name=\"password\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Remember me -->
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
\t\t\t\t\t\t\t<div class=\"mb-3 d-sm-flex justify-content-between\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\"  name=\"_remember_me\" class=\"form-check-input\" id=\"rememberCheck\">
\t\t\t\t\t\t\t\t\t<label class=\"form-check-label\" for=\"rememberCheck\">Remember me?</label>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<a href=\"{{ url(\"app_forgot_password_request\") }}\" class=\"text-primary-hover\">Forgot password?</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Button -->
\t\t\t\t\t\t\t<div class=\"d-grid\"><button type=\"submit\" class=\"btn btn-dark mb-0\">Login</button></div>

\t\t\t\t\t\t\t<!-- Divider -->
\t\t\t\t\t\t\t<div class=\"position-relative my-4\">
\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<p class=\"small position-absolute top-50 start-50 translate-middle bg-body px-2\">Or sign in with</p>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6 d-grid\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-light mb-0\"><i class=\"fab fa-fw fa-google text-google-icon me-2\"></i>Google</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-sm-6 d-grid\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-light mb-0\"><i class=\"fab fa-fw fa-facebook-f text-facebook me-2\"></i>Facebook</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<!-- Form END -->
\t\t\t\t\t{% endblock %}
\t\t\t\t</div>
\t\t\t</div>

\t\t</div> <!-- Row END -->
\t</div>
\t</section>
{% endblock %}
", "security/login.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\security\\login.html.twig");
    }
}
