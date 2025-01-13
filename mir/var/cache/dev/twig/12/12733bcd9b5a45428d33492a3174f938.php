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

/* registration/success.html.twig */
class __TwigTemplate_c1ffcbd2a6d10a77e73e4f270e19d4b5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/success.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/success.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "registration/success.html.twig", 1);
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

        echo "Confirmation de création de compte !";
        
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
<section class=\"pt-4 pt-sm-5\">
<div class=\"container\">
    <div class=\"row g-4 g-md-5 justify-content-between\">

        <div class=\"col-lg-12 mb-5\">
            ";
        // line 16
        if (( !array_key_exists("activatedConfirmation", $context) || (null === (isset($context["activatedConfirmation"]) || array_key_exists("activatedConfirmation", $context) ? $context["activatedConfirmation"] : (function () { throw new RuntimeError('Variable "activatedConfirmation" does not exist.', 16, $this->source); })())))) {
            // line 17
            echo "                <div>
                    <h3 class=\"mb-5 mt-3 text-white text-center\">Confirmation de création de compte !</h3>
                    <p>
                        Félicitation ! 
                    </p>
                    <p>
                        Nous vous informons que votre compte a été créé avec succès. <br>
                        Pour confirmer la creation de compte, veuillez cliquer sur le lien qui vous a
                        été envoyé par mail.
                    </p>
                    <p>
                        Une fois que vous aurez cliqué sur le lien, votre compte sera activé et vous 
                        pourrez vous connecter.
                    </p>
                </div>
            ";
        } else {
            // line 33
            echo "            <div>
                <h3 class=\"mb-5 mt-3 text-white text-center\">Confirmation : compte activé</h3>
                <p>
                    Félicitation ! 
                </p>
                <p>
                    Votre compte a bien été activé. Vous pouvez dès lors vous connecter et profiter de 
                    notre plateforme.
                </p>
                <p>Merci de votre confiance et surtout bonne lecture.</p>
            </div>
            ";
        }
        // line 45
        echo "        </div>
    </div>
</div>
</section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "registration/success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 45,  116 => 33,  98 => 17,  96 => 16,  88 => 10,  78 => 9,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Confirmation de création de compte !{% endblock %}

{# {% block header %}{% endblock %}

{% block footer %}{% endblock %} #}

{% block mainContent %}

<section class=\"pt-4 pt-sm-5\">
<div class=\"container\">
    <div class=\"row g-4 g-md-5 justify-content-between\">

        <div class=\"col-lg-12 mb-5\">
            {% if not activatedConfirmation is defined or activatedConfirmation is null  %}
                <div>
                    <h3 class=\"mb-5 mt-3 text-white text-center\">Confirmation de création de compte !</h3>
                    <p>
                        Félicitation ! 
                    </p>
                    <p>
                        Nous vous informons que votre compte a été créé avec succès. <br>
                        Pour confirmer la creation de compte, veuillez cliquer sur le lien qui vous a
                        été envoyé par mail.
                    </p>
                    <p>
                        Une fois que vous aurez cliqué sur le lien, votre compte sera activé et vous 
                        pourrez vous connecter.
                    </p>
                </div>
            {% else %}
            <div>
                <h3 class=\"mb-5 mt-3 text-white text-center\">Confirmation : compte activé</h3>
                <p>
                    Félicitation ! 
                </p>
                <p>
                    Votre compte a bien été activé. Vous pouvez dès lors vous connecter et profiter de 
                    notre plateforme.
                </p>
                <p>Merci de votre confiance et surtout bonne lecture.</p>
            </div>
            {% endif %}
        </div>
    </div>
</div>
</section>

{% endblock %}", "registration/success.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\registration\\success.html.twig");
    }
}
