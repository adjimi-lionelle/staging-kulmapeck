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

/* front/contact/index.html.twig */
class __TwigTemplate_6d90534573c87ee4184a26fabc35c563 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/contact/index.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/contact/index.html.twig", 1);
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

        echo " - Contact us";
        
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
    <!-- =======================
Page Banner START -->
    <section class=\"pt-5 pb-0\" style=\"background-image:url(";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/element/map.svg"), "html", null, true);
        echo "); background-position: center left; background-size: cover;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-xl-6 text-center mx-auto\">
                    <!-- Title -->
                    <h6 class=\"text-primary\">";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CONTACTUS_KEY", [], "messages");
        echo "</h6>
                    <h1 class=\"mb-4\">";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CONTACTPAGE_HELP_KEY", [], "messages");
        echo "</h1>
                </div>
            </div>

            <!-- Contact info box -->
            <div class=\"row g-4 g-md-5 mt-0 mt-lg-3\">
                <!-- Box item -->
                <div class=\"col-lg-4 mt-lg-0\">
                    <div class=\"card card-body bg-primary shadow py-5 text-center h-100\">
                        <!-- Title -->
                        <h5 class=\"text-white mb-3\">";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CONTACTPAGE_WHATSAPP_KEY", [], "messages");
        echo "</h5>
                        <ul class=\"list-inline mb-0\">
                            <!-- Address -->
                            <li class=\"list-item mb-3\">
                                <a href=\"#\" class=\"text-white\"> <i class=\"fas fa-fw fa-map-marker-alt me-2 mt-1\"></i>Douala-Akwa / Carrefour Equinox TV, face Beneficial Assurance</a>
                            </li>
                            <!-- Phone number -->
                            <li class=\"list-item mb-3\">
                                <a href=\"#\" class=\"text-white\"> <i class=\"fas fa-fw fa-phone-alt me-2\"></i>(+237) 698809093 </a>
                            </li>
                            <!-- Email id -->
                            <li class=\"list-item mb-0\">
                                <a href=\"#\" class=\"text-white\"> <i class=\"far fa-fw fa-envelope me-2\"></i>kulmapeckcontact@gmail.com </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Box item -->
                <div class=\"col-lg-4 mt-lg-0\">
                    <div class=\"card card-body shadow py-5 text-center h-100\">
                        <!-- Title -->
                        <h5 class=\"mb-3\">";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CONTACTPAGE_MTN_KEY", [], "messages");
        echo "</h5>
                        <ul class=\"list-inline mb-0\">
                            <!-- Address -->
                            <li class=\"list-item mb-3 h6 fw-light\">
                                <a href=\"#\"> <i class=\"fas fa-fw fa-map-marker-alt me-2 mt-1\"></i>Douala-Akwa / Carrefour Equinox TV, face Beneficial Assurance</a>
                            </li>
                            <!-- Phone number -->
                            <li class=\"list-item mb-3 h6 fw-light\">
                                <a href=\"#\"> <i class=\"fas fa-fw fa-phone-alt me-2\"></i>+237 678507398 </a>
                            </li>
                            <!-- Email id -->
                            <li class=\"list-item mb-0 h6 fw-light\">
                                <a href=\"#\"> <i class=\"far fa-fw fa-envelope me-2\"></i>kulmapeckcontact@gmail.com </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Box item -->
                <div class=\"col-lg-4 mt-lg-0\">
                    <div class=\"card card-body shadow py-5 text-center h-100\">
                        <!-- Title -->
                        <h5 class=\"mb-3\">";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CONTACTPAGE_ORANGE_KEY", [], "messages");
        echo "</h5>
                        <ul class=\"list-inline mb-0\">
                            <!-- Address -->
                            <li class=\"list-item mb-3 h6 fw-light\">
                                <a href=\"#\"> <i class=\"fas fa-fw fa-map-marker-alt me-2 mt-1\"></i>Douala-Akwa / Carrefour Equinox TV, face Beneficial Assurance </a>
                            </li>
                            <!-- Phone number -->
                            <li class=\"list-item mb-3 h6 fw-light\">
                                <a href=\"#\"> <i class=\"fas fa-fw fa-phone-alt me-2\"></i>+237 698809093 </a>
                            </li>
                            <!-- Email id -->
                            <li class=\"list-item mb-0 h6 fw-light\">
                                <a href=\"#\"> <i class=\"far fa-fw fa-envelope me-2\"></i>kulmapeckcontact@gmail.com </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Page Banner END -->

    <!-- =======================
    Image and contact form START -->
    <section >
        <div class=\"container\">
            <div class=\"row g-4 g-lg-0 align-items-center\">
                ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "flashes", ["messageSend"], "method", false, false, false, 101));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 102
            echo "                    <div class=\"col-12\">
                        <div class=\"alert alert-success text-center\">
                            ";
            // line 104
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "
                <div class=\"col-md-6 align-items-center text-center\">
                    <!-- Image -->
                    <img src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/element/contact.svg"), "html", null, true);
        echo "\" class=\"h-400px\" alt=\"\">

                    <!-- Social media button -->
                    ";
        // line 114
        if ((array_key_exists("socialsSettings", $context) &&  !((isset($context["socialsSettings"]) || array_key_exists("socialsSettings", $context) ? $context["socialsSettings"] : (function () { throw new RuntimeError('Variable "socialsSettings" does not exist.', 114, $this->source); })()) === null))) {
            // line 115
            echo "                        <div class=\"d-sm-flex align-items-center justify-content-center mt-2 mt-sm-4\">
                            <h5 class=\"mb-0\">";
            // line 116
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CONTACTPAGE_FOLLOWUS_KEY", [], "messages");
            echo ":</h5>
                            <ul class=\"list-inline mb-0 ms-sm-2\">
                                ";
            // line 118
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["socialsSettings"]) || array_key_exists("socialsSettings", $context) ? $context["socialsSettings"] : (function () { throw new RuntimeError('Variable "socialsSettings" does not exist.', 118, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 119
                echo "                                    ";
                if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 119)) === "fa-facebook-f")) {
                    // line 120
                    echo "                                        <li class=\"list-inline-item\"> <a target=\"_blank\" class=\"btn btn-white btn-sm shadow px-2 text-facebook\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 120), "html", null, true);
                    echo "\"><i class=\"fab fa-fw fa-facebook-f\"></i></a> </li>
                                    ";
                } elseif ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 121
$context["item"], "icon", [], "any", false, false, false, 121)) === "fa-instagram")) {
                    // line 122
                    echo "                                        <li class=\"list-inline-item\"> <a target=\"_blank\" class=\"btn btn-white btn-sm shadow px-2 text-instagram\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 122), "html", null, true);
                    echo "\"><i class=\"fab fa-fw fa-instagram\"></i></a> </li>
                                    ";
                } elseif ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 123
$context["item"], "icon", [], "any", false, false, false, 123)) === "fa-fw fa-twitter")) {
                    // line 124
                    echo "                                        <li class=\"list-inline-item\"> <a target=\"_blank\" class=\"btn btn-white btn-sm shadow px-2 text-twitter\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 124), "html", null, true);
                    echo "\"><i class=\"fab fa-fw fa-twitter\"></i></a> </li>
                                    ";
                } elseif ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 125
$context["item"], "icon", [], "any", false, false, false, 125)) === "fa-linkedin-in")) {
                    // line 126
                    echo "                                        <li class=\"list-inline-item\"> <a target=\"_blank\" class=\"btn btn-white btn-sm shadow px-2 text-linkedin\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 126), "html", null, true);
                    echo "\"><i class=\"fab fa-fw fa-linkedin-in\"></i></a> </li>
                                    ";
                } elseif ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source,                 // line 127
$context["item"], "icon", [], "any", false, false, false, 127)) === "fa-youtube")) {
                    // line 128
                    echo "                                        <li class=\"list-inline-item\"> <a target=\"_blank\" class=\"btn btn-white btn-sm shadow px-2 text-danger\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 128), "html", null, true);
                    echo "\"><i class=\"fab fa-fw fa-youtube\"></i></a> </li>
                                    ";
                }
                // line 130
                echo "                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "    
                            </ul>
                        </div>
                    ";
        }
        // line 134
        echo "                </div>

                <!-- Contact form START -->
                <div class=\"col-md-6\">
                    <!-- Title -->
                    <h2 class=\"mt-4 mt-md-0\">";
        // line 139
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CONTACTPAGE_LETSTALK_KEY", [], "messages");
        echo "</h2>
                    <p>";
        // line 140
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CONTACTPAGE_LETSTALKDESCRIPTION_KEY", [], "messages");
        echo "</p>

                    ";
        // line 142
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 142, $this->source); })()), 'form_start');
        echo "
                    <!-- Name -->
                    <div class=\"mb-4 bg-light-input\">
                        ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 145, $this->source); })()), "name", [], "any", false, false, false, 145), 'label');
        echo "
                        ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 146, $this->source); })()), "name", [], "any", false, false, false, 146), 'widget');
        echo "
                    </div>
                    <!-- Email -->
                    <div class=\"mb-4 bg-light-input\">
                        ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 150, $this->source); })()), "email", [], "any", false, false, false, 150), 'label');
        echo "
                        ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 151, $this->source); })()), "email", [], "any", false, false, false, 151), 'widget');
        echo "
                    </div>
                    <!-- Message -->
                    <div class=\"mb-4 bg-light-input\">
                        ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 155, $this->source); })()), "message", [], "any", false, false, false, 155), 'label');
        echo "
                        ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 156, $this->source); })()), "message", [], "any", false, false, false, 156), 'widget');
        echo "
                    </div>
                    <!-- Button -->
                    <div class=\"d-grid\">
                        <button class=\"btn btn-lg btn-primary mb-0\" type=\"submit\">";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CONTACTPAGE_SENDMESSAGEBTN_KEY", [], "messages");
        echo "</button>
                    </div>
                    ";
        // line 162
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 162, $this->source); })()), 'form_end');
        echo "
                </div>
                <!-- Contact form END -->
            </div>
        </div>
    </section>
    <!-- =======================
    Image and contact form END -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  372 => 162,  367 => 160,  360 => 156,  356 => 155,  349 => 151,  345 => 150,  338 => 146,  334 => 145,  328 => 142,  323 => 140,  319 => 139,  312 => 134,  301 => 130,  295 => 128,  293 => 127,  288 => 126,  286 => 125,  281 => 124,  279 => 123,  274 => 122,  272 => 121,  267 => 120,  264 => 119,  260 => 118,  255 => 116,  252 => 115,  250 => 114,  244 => 111,  239 => 108,  229 => 104,  225 => 102,  221 => 101,  190 => 73,  165 => 51,  140 => 29,  127 => 19,  123 => 18,  115 => 13,  110 => 10,  100 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"front/base.html.twig\" %}

{% block title %} - Contact us{% endblock %}

{% block mainBarnner %}

{% endblock %}

{% block mainContent %}

    <!-- =======================
Page Banner START -->
    <section class=\"pt-5 pb-0\" style=\"background-image:url({{ asset('assets/images/element/map.svg') }}); background-position: center left; background-size: cover;\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-xl-6 text-center mx-auto\">
                    <!-- Title -->
                    <h6 class=\"text-primary\">{% trans %}CONTACTUS_KEY{% endtrans %}</h6>
                    <h1 class=\"mb-4\">{% trans %}CONTACTPAGE_HELP_KEY{% endtrans %}</h1>
                </div>
            </div>

            <!-- Contact info box -->
            <div class=\"row g-4 g-md-5 mt-0 mt-lg-3\">
                <!-- Box item -->
                <div class=\"col-lg-4 mt-lg-0\">
                    <div class=\"card card-body bg-primary shadow py-5 text-center h-100\">
                        <!-- Title -->
                        <h5 class=\"text-white mb-3\">{% trans %}CONTACTPAGE_WHATSAPP_KEY{% endtrans %}</h5>
                        <ul class=\"list-inline mb-0\">
                            <!-- Address -->
                            <li class=\"list-item mb-3\">
                                <a href=\"#\" class=\"text-white\"> <i class=\"fas fa-fw fa-map-marker-alt me-2 mt-1\"></i>Douala-Akwa / Carrefour Equinox TV, face Beneficial Assurance</a>
                            </li>
                            <!-- Phone number -->
                            <li class=\"list-item mb-3\">
                                <a href=\"#\" class=\"text-white\"> <i class=\"fas fa-fw fa-phone-alt me-2\"></i>(+237) 698809093 </a>
                            </li>
                            <!-- Email id -->
                            <li class=\"list-item mb-0\">
                                <a href=\"#\" class=\"text-white\"> <i class=\"far fa-fw fa-envelope me-2\"></i>kulmapeckcontact@gmail.com </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Box item -->
                <div class=\"col-lg-4 mt-lg-0\">
                    <div class=\"card card-body shadow py-5 text-center h-100\">
                        <!-- Title -->
                        <h5 class=\"mb-3\">{% trans %}CONTACTPAGE_MTN_KEY{% endtrans %}</h5>
                        <ul class=\"list-inline mb-0\">
                            <!-- Address -->
                            <li class=\"list-item mb-3 h6 fw-light\">
                                <a href=\"#\"> <i class=\"fas fa-fw fa-map-marker-alt me-2 mt-1\"></i>Douala-Akwa / Carrefour Equinox TV, face Beneficial Assurance</a>
                            </li>
                            <!-- Phone number -->
                            <li class=\"list-item mb-3 h6 fw-light\">
                                <a href=\"#\"> <i class=\"fas fa-fw fa-phone-alt me-2\"></i>+237 678507398 </a>
                            </li>
                            <!-- Email id -->
                            <li class=\"list-item mb-0 h6 fw-light\">
                                <a href=\"#\"> <i class=\"far fa-fw fa-envelope me-2\"></i>kulmapeckcontact@gmail.com </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Box item -->
                <div class=\"col-lg-4 mt-lg-0\">
                    <div class=\"card card-body shadow py-5 text-center h-100\">
                        <!-- Title -->
                        <h5 class=\"mb-3\">{% trans %}CONTACTPAGE_ORANGE_KEY{% endtrans %}</h5>
                        <ul class=\"list-inline mb-0\">
                            <!-- Address -->
                            <li class=\"list-item mb-3 h6 fw-light\">
                                <a href=\"#\"> <i class=\"fas fa-fw fa-map-marker-alt me-2 mt-1\"></i>Douala-Akwa / Carrefour Equinox TV, face Beneficial Assurance </a>
                            </li>
                            <!-- Phone number -->
                            <li class=\"list-item mb-3 h6 fw-light\">
                                <a href=\"#\"> <i class=\"fas fa-fw fa-phone-alt me-2\"></i>+237 698809093 </a>
                            </li>
                            <!-- Email id -->
                            <li class=\"list-item mb-0 h6 fw-light\">
                                <a href=\"#\"> <i class=\"far fa-fw fa-envelope me-2\"></i>kulmapeckcontact@gmail.com </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Page Banner END -->

    <!-- =======================
    Image and contact form START -->
    <section >
        <div class=\"container\">
            <div class=\"row g-4 g-lg-0 align-items-center\">
                {% for msg in app.flashes('messageSend') %}
                    <div class=\"col-12\">
                        <div class=\"alert alert-success text-center\">
                            {{ msg }}
                        </div>
                    </div>
                {% endfor %}

                <div class=\"col-md-6 align-items-center text-center\">
                    <!-- Image -->
                    <img src=\"{{ asset('assets/images/element/contact.svg') }}\" class=\"h-400px\" alt=\"\">

                    <!-- Social media button -->
                    {% if socialsSettings is defined and socialsSettings is not same as null %}
                        <div class=\"d-sm-flex align-items-center justify-content-center mt-2 mt-sm-4\">
                            <h5 class=\"mb-0\">{% trans %}CONTACTPAGE_FOLLOWUS_KEY{% endtrans %}:</h5>
                            <ul class=\"list-inline mb-0 ms-sm-2\">
                                {% for item in socialsSettings %}
                                    {% if item.icon|lower is same as 'fa-facebook-f' %}
                                        <li class=\"list-inline-item\"> <a target=\"_blank\" class=\"btn btn-white btn-sm shadow px-2 text-facebook\" href=\"{{ item.link }}\"><i class=\"fab fa-fw fa-facebook-f\"></i></a> </li>
                                    {% elseif item.icon|lower is same as 'fa-instagram' %}
                                        <li class=\"list-inline-item\"> <a target=\"_blank\" class=\"btn btn-white btn-sm shadow px-2 text-instagram\" href=\"{{ item.link }}\"><i class=\"fab fa-fw fa-instagram\"></i></a> </li>
                                    {% elseif item.icon|lower is same as 'fa-fw fa-twitter' %}
                                        <li class=\"list-inline-item\"> <a target=\"_blank\" class=\"btn btn-white btn-sm shadow px-2 text-twitter\" href=\"{{ item.link }}\"><i class=\"fab fa-fw fa-twitter\"></i></a> </li>
                                    {% elseif item.icon|lower is same as 'fa-linkedin-in' %}
                                        <li class=\"list-inline-item\"> <a target=\"_blank\" class=\"btn btn-white btn-sm shadow px-2 text-linkedin\" href=\"{{ item.link }}\"><i class=\"fab fa-fw fa-linkedin-in\"></i></a> </li>
                                    {% elseif item.icon|lower is same as 'fa-youtube' %}
                                        <li class=\"list-inline-item\"> <a target=\"_blank\" class=\"btn btn-white btn-sm shadow px-2 text-danger\" href=\"{{ item.link }}\"><i class=\"fab fa-fw fa-youtube\"></i></a> </li>
                                    {% endif %}
                                {% endfor %}    
                            </ul>
                        </div>
                    {% endif %}
                </div>

                <!-- Contact form START -->
                <div class=\"col-md-6\">
                    <!-- Title -->
                    <h2 class=\"mt-4 mt-md-0\">{% trans %}CONTACTPAGE_LETSTALK_KEY{% endtrans %}</h2>
                    <p>{% trans %}CONTACTPAGE_LETSTALKDESCRIPTION_KEY{% endtrans %}</p>

                    {{ form_start(contactForm) }}
                    <!-- Name -->
                    <div class=\"mb-4 bg-light-input\">
                        {{ form_label(contactForm.name) }}
                        {{ form_widget(contactForm.name) }}
                    </div>
                    <!-- Email -->
                    <div class=\"mb-4 bg-light-input\">
                        {{ form_label(contactForm.email) }}
                        {{ form_widget(contactForm.email) }}
                    </div>
                    <!-- Message -->
                    <div class=\"mb-4 bg-light-input\">
                        {{ form_label(contactForm.message) }}
                        {{ form_widget(contactForm.message) }}
                    </div>
                    <!-- Button -->
                    <div class=\"d-grid\">
                        <button class=\"btn btn-lg btn-primary mb-0\" type=\"submit\">{% trans %}CONTACTPAGE_SENDMESSAGEBTN_KEY{% endtrans %}</button>
                    </div>
                    {{ form_end(contactForm) }}
                </div>
                <!-- Contact form END -->
            </div>
        </div>
    </section>
    <!-- =======================
    Image and contact form END -->

{% endblock %}", "front/contact/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\contact\\index.html.twig");
    }
}
