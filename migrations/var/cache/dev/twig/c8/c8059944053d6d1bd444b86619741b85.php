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

/* front/courses_category/index.html.twig */
class __TwigTemplate_ad0272fd1b8e507315f8db7c9781f9df extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/courses_category/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/courses_category/index.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/courses_category/index.html.twig", 1);
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

        echo " - Courses Categpries";
        
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
        echo "    
    
\t<!-- =======================
\tPage Banner START -->
\t<section class=\"bg-light position-relative\">

\t\t<!-- Svg decoration -->
\t\t<figure class=\"position-absolute bottom-0 start-0 d-none d-lg-block\">
\t\t\t<svg width=\"822.2px\" height=\"301.9px\" viewBox=\"0 0 822.2 301.9\">
\t\t\t\t<path class=\"fill-warning opacity-5\" d=\"M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z\"></path>
\t\t\t</svg>
\t\t</figure>

\t\t<div class=\"container position-relative\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"row align-items-center\">

\t\t\t\t\t\t<!-- Image -->
\t\t\t\t\t\t<div class=\"col-6 col-md-3 text-center order-1\">
\t\t\t\t\t\t\t<img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/element/category-1.svg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Content -->
\t\t\t\t\t\t<div class=\"col-md-6 px-md-5 text-center position-relative order-md-2 mb-5 mb-md-0\">

\t\t\t\t\t\t\t<!-- Svg decoration -->
\t\t\t\t\t\t\t<figure class=\"position-absolute top-0 start-0\">\t
\t\t\t\t\t\t\t\t<svg width=\"22px\" height=\"22px\" viewBox=\"0 0 22 22\">
\t\t\t\t\t\t\t\t\t<polygon class=\"fill-orange\" points=\"22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 \"></polygon>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</figure>

\t\t\t\t\t\t\t<!-- Svg decoration -->
\t\t\t\t\t\t\t<figure class=\"position-absolute top-0 start-50 translate-middle mt-n6 d-none d-md-block\">
\t\t\t\t\t\t\t\t<svg width=\"27px\" height=\"27px\">
\t\t\t\t\t\t\t\t\t<path class=\"fill-purple\" d=\"M13.122,5.946 L17.679,-0.001 L17.404,7.528 L24.661,5.946 L19.683,11.533 L26.244,15.056 L18.891,16.089 L21.686,23.068 L15.400,19.062 L13.122,26.232 L10.843,19.062 L4.557,23.068 L7.352,16.089 L-0.000,15.056 L6.561,11.533 L1.582,5.946 L8.839,7.528 L8.565,-0.001 L13.122,5.946 Z\"></path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</figure>


\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t<h1 class=\"mb-3\">";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("WHATDOYOUWATTOLEARN_KEY", [], "messages");
        echo "</h1>
\t\t\t\t\t\t\t<p class=\"mb-3\">";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("WHATDOYOUWATTOLEARNDESCRIPTION_KEY", [], "messages");
        echo "</p>

\t\t\t\t\t\t\t<!-- Search -->
\t\t\t\t\t\t\t<form class=\"bg-body rounded p-2\" action=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_courses");
        echo "\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input required class=\"form-control border-0 me-1\" name=\"search\" type=\"search\" placeholder=\"";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SEARCHCOURSES_KEY", [], "messages");
        echo "\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-dark mb-0 rounded\">";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SEARCH_KEY", [], "messages");
        echo "</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Image -->
\t\t\t\t\t\t<div class=\"col-6 col-md-3 text-center order-3\">
\t\t\t\t\t\t\t<img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/element/category-2.svg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div> <!-- Row END -->
\t\t\t\t</div>
\t\t\t</div> <!-- Row END -->
\t\t</div>
\t</section>
\t<!-- =======================
\tPage Banner END -->

\t<!-- =======================
\tCategories START -->
\t<section>
\t\t<div class=\"container\">
\t\t\t<!-- Title -->
\t\t\t<div class=\"row mb-4\">
\t\t\t\t<div class=\"col-lg-8 mx-auto text-center\">
\t\t\t\t\t<h2>";
        // line 80
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CHOOSECATEGORY_KEY", [], "messages");
        echo "</h2>
\t\t\t\t\t<p class=\"mb-0\">";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CATEGORYDESCRIPTION_KEY", [], "messages");
        echo "</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row g-4\">
\t\t\t\t";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 86, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 87
            echo "\t\t\t\t\t<!-- Item -->
\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-xl-3\">
\t\t\t\t\t\t";
            // line 89
            echo twig_include($this->env, $context, "front/includes/category/_item.html.twig");
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- =======================
\tCategories END -->

\t<!-- =======================
\tAction box START -->
\t<section>
\t\t<div class=\"container\">
\t\t\t<div class=\"row g-4\">
\t\t\t\t<!-- Action box item -->
\t\t\t\t<div class=\"col-lg-6 position-relative overflow-hidden\">
\t\t\t\t\t<div class=\"bg-primary bg-opacity-10 rounded-3 p-5 h-100\">
\t\t\t\t\t\t<!-- Image -->
\t\t\t\t\t\t<div class=\"position-absolute bottom-0 end-0 me-3\">
\t\t\t\t\t\t\t<img src=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/element/08.svg"), "html", null, true);
        echo "\" class=\"h-100px h-sm-200px\" alt=\"\">
\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t<!-- Content -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-8 position-relative\">
\t\t\t\t\t\t\t\t<h3 class=\"mb-1\">";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("EARNCERTIFICATE_KEY", [], "messages");
        echo "</h3>
\t\t\t\t\t\t\t\t<p class=\"mb-3 h5 fw-light lead\">";
        // line 114
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("EARNCERTIFICATEDESCRIPTION_KEY", [], "messages");
        echo "</p>
\t\t\t\t\t\t\t\t";
        // line 116
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Action box item -->
\t\t\t\t<div class=\"col-lg-6 position-relative overflow-hidden\">
\t\t\t\t\t<div class=\"bg-secondary rounded-3 bg-opacity-10 p-5 h-100\">
\t\t\t\t\t\t<!-- Image -->
\t\t\t\t\t\t<div class=\"position-absolute bottom-0 end-0 me-3\">
\t\t\t\t\t\t\t<img src=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/element/15.svg"), "html", null, true);
        echo "\" class=\"h-100px h-sm-200px\" alt=\"\">
\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t<!-- Content -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-8 position-relative\">
\t\t\t\t\t\t\t\t<h3 class=\"mb-1\">";
        // line 131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("BESTRATEDCOURSES_KEY", [], "messages");
        echo "</h3>
\t\t\t\t\t\t\t\t<p class=\"mb-3 h5 fw-light lead\">";
        // line 132
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("BESTRATEDCOURSESDESCRIPTION_KEY", [], "messages");
        echo "</p>
\t\t\t\t\t\t\t\t";
        // line 134
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- =======================
\tAction box END -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/courses_category/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 134,  293 => 132,  289 => 131,  281 => 126,  269 => 116,  265 => 114,  261 => 113,  253 => 108,  235 => 92,  218 => 89,  214 => 87,  197 => 86,  189 => 81,  185 => 80,  164 => 62,  154 => 55,  150 => 54,  145 => 52,  139 => 49,  135 => 48,  110 => 26,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"front/base.html.twig\" %}

{% block title %} - Courses Categpries{% endblock %}

{% block mainContent %}
    
    
\t<!-- =======================
\tPage Banner START -->
\t<section class=\"bg-light position-relative\">

\t\t<!-- Svg decoration -->
\t\t<figure class=\"position-absolute bottom-0 start-0 d-none d-lg-block\">
\t\t\t<svg width=\"822.2px\" height=\"301.9px\" viewBox=\"0 0 822.2 301.9\">
\t\t\t\t<path class=\"fill-warning opacity-5\" d=\"M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z\"></path>
\t\t\t</svg>
\t\t</figure>

\t\t<div class=\"container position-relative\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"row align-items-center\">

\t\t\t\t\t\t<!-- Image -->
\t\t\t\t\t\t<div class=\"col-6 col-md-3 text-center order-1\">
\t\t\t\t\t\t\t<img src=\"{{ asset('assets/images/element/category-1.svg') }}\" alt=\"\">
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Content -->
\t\t\t\t\t\t<div class=\"col-md-6 px-md-5 text-center position-relative order-md-2 mb-5 mb-md-0\">

\t\t\t\t\t\t\t<!-- Svg decoration -->
\t\t\t\t\t\t\t<figure class=\"position-absolute top-0 start-0\">\t
\t\t\t\t\t\t\t\t<svg width=\"22px\" height=\"22px\" viewBox=\"0 0 22 22\">
\t\t\t\t\t\t\t\t\t<polygon class=\"fill-orange\" points=\"22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 \"></polygon>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</figure>

\t\t\t\t\t\t\t<!-- Svg decoration -->
\t\t\t\t\t\t\t<figure class=\"position-absolute top-0 start-50 translate-middle mt-n6 d-none d-md-block\">
\t\t\t\t\t\t\t\t<svg width=\"27px\" height=\"27px\">
\t\t\t\t\t\t\t\t\t<path class=\"fill-purple\" d=\"M13.122,5.946 L17.679,-0.001 L17.404,7.528 L24.661,5.946 L19.683,11.533 L26.244,15.056 L18.891,16.089 L21.686,23.068 L15.400,19.062 L13.122,26.232 L10.843,19.062 L4.557,23.068 L7.352,16.089 L-0.000,15.056 L6.561,11.533 L1.582,5.946 L8.839,7.528 L8.565,-0.001 L13.122,5.946 Z\"></path>
\t\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t\t</figure>


\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t<h1 class=\"mb-3\">{% trans %}WHATDOYOUWATTOLEARN_KEY{% endtrans %}</h1>
\t\t\t\t\t\t\t<p class=\"mb-3\">{% trans %}WHATDOYOUWATTOLEARNDESCRIPTION_KEY{% endtrans %}</p>

\t\t\t\t\t\t\t<!-- Search -->
\t\t\t\t\t\t\t<form class=\"bg-body rounded p-2\" action=\"{{ url(\"app_front_courses\") }}\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<input required class=\"form-control border-0 me-1\" name=\"search\" type=\"search\" placeholder=\"{% trans %}SEARCHCOURSES_KEY{% endtrans %}\">
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-dark mb-0 rounded\">{% trans %}SEARCH_KEY{% endtrans %}</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Image -->
\t\t\t\t\t\t<div class=\"col-6 col-md-3 text-center order-3\">
\t\t\t\t\t\t\t<img src=\"{{ asset('assets/images/element/category-2.svg') }}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div> <!-- Row END -->
\t\t\t\t</div>
\t\t\t</div> <!-- Row END -->
\t\t</div>
\t</section>
\t<!-- =======================
\tPage Banner END -->

\t<!-- =======================
\tCategories START -->
\t<section>
\t\t<div class=\"container\">
\t\t\t<!-- Title -->
\t\t\t<div class=\"row mb-4\">
\t\t\t\t<div class=\"col-lg-8 mx-auto text-center\">
\t\t\t\t\t<h2>{% trans %}CHOOSECATEGORY_KEY{% endtrans %}</h2>
\t\t\t\t\t<p class=\"mb-0\">{% trans %}CATEGORYDESCRIPTION_KEY{% endtrans %}</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row g-4\">
\t\t\t\t{% for category in categories %}
\t\t\t\t\t<!-- Item -->
\t\t\t\t\t<div class=\"col-sm-6 col-md-4 col-xl-3\">
\t\t\t\t\t\t{{ include('front/includes/category/_item.html.twig') }}
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- =======================
\tCategories END -->

\t<!-- =======================
\tAction box START -->
\t<section>
\t\t<div class=\"container\">
\t\t\t<div class=\"row g-4\">
\t\t\t\t<!-- Action box item -->
\t\t\t\t<div class=\"col-lg-6 position-relative overflow-hidden\">
\t\t\t\t\t<div class=\"bg-primary bg-opacity-10 rounded-3 p-5 h-100\">
\t\t\t\t\t\t<!-- Image -->
\t\t\t\t\t\t<div class=\"position-absolute bottom-0 end-0 me-3\">
\t\t\t\t\t\t\t<img src=\"{{ asset('assets/images/element/08.svg') }}\" class=\"h-100px h-sm-200px\" alt=\"\">
\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t<!-- Content -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-8 position-relative\">
\t\t\t\t\t\t\t\t<h3 class=\"mb-1\">{% trans %}EARNCERTIFICATE_KEY{% endtrans %}</h3>
\t\t\t\t\t\t\t\t<p class=\"mb-3 h5 fw-light lead\">{% trans %}EARNCERTIFICATEDESCRIPTION_KEY{% endtrans %}</p>
\t\t\t\t\t\t\t\t{# <a href=\"#\" class=\"btn btn-primary mb-0\">{% trans %}VIEWPROGRAMS_KEY{% endtrans %}</a> #}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Action box item -->
\t\t\t\t<div class=\"col-lg-6 position-relative overflow-hidden\">
\t\t\t\t\t<div class=\"bg-secondary rounded-3 bg-opacity-10 p-5 h-100\">
\t\t\t\t\t\t<!-- Image -->
\t\t\t\t\t\t<div class=\"position-absolute bottom-0 end-0 me-3\">
\t\t\t\t\t\t\t<img src=\"{{ asset('assets/images/element/15.svg') }}\" class=\"h-100px h-sm-200px\" alt=\"\">
\t\t\t\t\t\t</div>\t
\t\t\t\t\t\t<!-- Content -->
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-sm-8 position-relative\">
\t\t\t\t\t\t\t\t<h3 class=\"mb-1\">{% trans %}BESTRATEDCOURSES_KEY{% endtrans %}</h3>
\t\t\t\t\t\t\t\t<p class=\"mb-3 h5 fw-light lead\">{% trans %}BESTRATEDCOURSESDESCRIPTION_KEY{% endtrans %}</p>
\t\t\t\t\t\t\t\t{# <a href=\"#\" class=\"btn btn-warning mb-0\">{% trans %}BESTRATEDCOURSESBTN_KEY{% endtrans %}</a> #}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- =======================
\tAction box END -->

{% endblock %}
", "front/courses_category/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\courses_category\\index.html.twig");
    }
}
