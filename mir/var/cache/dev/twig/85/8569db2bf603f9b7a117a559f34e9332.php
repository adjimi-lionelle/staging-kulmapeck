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

/* front/includes/_newsletterorange.html.twig */
class __TwigTemplate_6ab6ac313a307515d3b74d740de53d9e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/_newsletterorange.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/_newsletterorange.html.twig"));

        // line 1
        echo "<!-- Newsletter START -->
\t<section class=\"pt-5 pt-lg-0\">
\t\t<div class=\"container position-relative overflow-hidden\">
\t\t\t<!-- SVG decoration -->
\t\t\t<figure class=\"position-absolute top-50 start-50 translate-middle ms-3\">
\t\t\t\t<svg>
\t\t\t\t\t<path class=\"fill-white opacity-3\" d=\"m496 22.999c0 10.493-8.506 18.999-18.999 18.999s-19-8.506-19-18.999 8.507-18.999 19-18.999 18.999 8.506 18.999 18.999z\"/>
\t\t\t\t\t<path class=\"fill-white opacity-3\" d=\"m775 102.5c0 5.799-4.701 10.5-10.5 10.5-5.798 0-10.499-4.701-10.499-10.5 0-5.798 4.701-10.499 10.499-10.499 5.799 0 10.5 4.701 10.5 10.499z\"/>
\t\t\t\t\t<path class=\"fill-white opacity-3\" d=\"m192 102c0 6.626-5.373 11.999-12 11.999s-11.999-5.373-11.999-11.999c0-6.628 5.372-12 11.999-12s12 5.372 12 12z\"/>
\t\t\t\t\t<path class=\"fill-white opacity-3\" d=\"m20.499 10.25c0 5.66-4.589 10.249-10.25 10.249-5.66 0-10.249-4.589-10.249-10.249-0-5.661 4.589-10.25 10.249-10.25 5.661-0 10.25 4.589 10.25 10.25z\"/>
\t\t\t\t</svg>
\t\t\t</figure>
\t\t\t<!-- Svg decoration -->
\t\t\t<figure class=\"position-absolute bottom-0 end-0 mb-5 d-none d-sm-block\">
\t\t\t\t<svg class=\"rotate-130\" width=\"258.7px\" height=\"86.9px\" viewBox=\"0 0 258.7 86.9\">
\t\t\t\t\t<path stroke=\"white\" fill=\"none\" stroke-width=\"2\" d=\"M0,7.2c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5 c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5s16-25.5,31.9-25.5\"/>
\t\t\t\t\t<path stroke=\"white\" fill=\"none\" stroke-width=\"2\" d=\"M0,57c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5 c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5s16-25.5,31.9-25.5\"/>
\t\t\t\t</svg>
\t\t\t</figure>
\t\t\t
\t\t\t<div class=\"bg-grad p-3 p-sm-5 rounded-3\">
\t\t\t\t<div class=\"row justify-content-center position-relative\">
\t\t\t\t\t<!-- SVG decoration -->
\t\t\t\t\t<figure class=\"fill-white opacity-1 position-absolute top-50 start-0 translate-middle-y\">
\t\t\t\t\t\t<svg width=\"141px\" height=\"141px\">
\t\t\t\t\t\t\t<path d=\"M140.520,70.258 C140.520,109.064 109.062,140.519 70.258,140.519 C31.454,140.519 -0.004,109.064 -0.004,70.258 C-0.004,31.455 31.454,-0.003 70.258,-0.003 C109.062,-0.003 140.520,31.455 140.520,70.258 Z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</figure>
\t\t\t\t\t<!-- Newsletter -->
\t\t\t\t\t<div class=\"col-12 position-relative my-2 my-sm-3\">
\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<h3 class=\"text-white mb-3 mb-lg-0\">";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("AREYOUREADYFORCONVERSATION_KEY", [], "messages");
        echo "</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Input item -->
\t\t\t\t\t\t\t<div class=\"col-lg-6 text-lg-end\">
\t\t\t\t\t\t\t\t<form class=\"bg-body rounded p-2\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control border-0 me-1\" type=\"email\" placeholder=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("TYPEEMAILHERE_KEY", [], "messages");
        echo "\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-dark mb-0 rounded\">";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SUBSCRIBE_KEY", [], "messages");
        echo "</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> <!-- Row END -->
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Newsletter END -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/includes/_newsletterorange.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 41,  87 => 40,  78 => 34,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Newsletter START -->
\t<section class=\"pt-5 pt-lg-0\">
\t\t<div class=\"container position-relative overflow-hidden\">
\t\t\t<!-- SVG decoration -->
\t\t\t<figure class=\"position-absolute top-50 start-50 translate-middle ms-3\">
\t\t\t\t<svg>
\t\t\t\t\t<path class=\"fill-white opacity-3\" d=\"m496 22.999c0 10.493-8.506 18.999-18.999 18.999s-19-8.506-19-18.999 8.507-18.999 19-18.999 18.999 8.506 18.999 18.999z\"/>
\t\t\t\t\t<path class=\"fill-white opacity-3\" d=\"m775 102.5c0 5.799-4.701 10.5-10.5 10.5-5.798 0-10.499-4.701-10.499-10.5 0-5.798 4.701-10.499 10.499-10.499 5.799 0 10.5 4.701 10.5 10.499z\"/>
\t\t\t\t\t<path class=\"fill-white opacity-3\" d=\"m192 102c0 6.626-5.373 11.999-12 11.999s-11.999-5.373-11.999-11.999c0-6.628 5.372-12 11.999-12s12 5.372 12 12z\"/>
\t\t\t\t\t<path class=\"fill-white opacity-3\" d=\"m20.499 10.25c0 5.66-4.589 10.249-10.25 10.249-5.66 0-10.249-4.589-10.249-10.249-0-5.661 4.589-10.25 10.249-10.25 5.661-0 10.25 4.589 10.25 10.25z\"/>
\t\t\t\t</svg>
\t\t\t</figure>
\t\t\t<!-- Svg decoration -->
\t\t\t<figure class=\"position-absolute bottom-0 end-0 mb-5 d-none d-sm-block\">
\t\t\t\t<svg class=\"rotate-130\" width=\"258.7px\" height=\"86.9px\" viewBox=\"0 0 258.7 86.9\">
\t\t\t\t\t<path stroke=\"white\" fill=\"none\" stroke-width=\"2\" d=\"M0,7.2c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5 c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5s16-25.5,31.9-25.5\"/>
\t\t\t\t\t<path stroke=\"white\" fill=\"none\" stroke-width=\"2\" d=\"M0,57c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5 c16,0,16,25.5,31.9,25.5c16,0,16-25.5,31.9-25.5c16,0,16,25.5,31.9,25.5s16-25.5,31.9-25.5\"/>
\t\t\t\t</svg>
\t\t\t</figure>
\t\t\t
\t\t\t<div class=\"bg-grad p-3 p-sm-5 rounded-3\">
\t\t\t\t<div class=\"row justify-content-center position-relative\">
\t\t\t\t\t<!-- SVG decoration -->
\t\t\t\t\t<figure class=\"fill-white opacity-1 position-absolute top-50 start-0 translate-middle-y\">
\t\t\t\t\t\t<svg width=\"141px\" height=\"141px\">
\t\t\t\t\t\t\t<path d=\"M140.520,70.258 C140.520,109.064 109.062,140.519 70.258,140.519 C31.454,140.519 -0.004,109.064 -0.004,70.258 C-0.004,31.455 31.454,-0.003 70.258,-0.003 C109.062,-0.003 140.520,31.455 140.520,70.258 Z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</figure>
\t\t\t\t\t<!-- Newsletter -->
\t\t\t\t\t<div class=\"col-12 position-relative my-2 my-sm-3\">
\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t<h3 class=\"text-white mb-3 mb-lg-0\">{% trans %}AREYOUREADYFORCONVERSATION_KEY{% endtrans %}</h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Input item -->
\t\t\t\t\t\t\t<div class=\"col-lg-6 text-lg-end\">
\t\t\t\t\t\t\t\t<form class=\"bg-body rounded p-2\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input class=\"form-control border-0 me-1\" type=\"email\" placeholder=\"{% trans %}TYPEEMAILHERE_KEY{% endtrans %}\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-dark mb-0 rounded\">{% trans %}SUBSCRIBE_KEY{% endtrans %}</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> <!-- Row END -->
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- Newsletter END -->", "front/includes/_newsletterorange.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\includes\\_newsletterorange.html.twig");
    }
}
