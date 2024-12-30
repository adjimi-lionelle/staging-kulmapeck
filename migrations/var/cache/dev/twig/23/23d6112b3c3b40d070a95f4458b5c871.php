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

/* admin/setting/index.html.twig */
class __TwigTemplate_0acaef7869984d81e5d7ace64ee34f1b extends Template
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
            'mainPageContent' => [$this, 'block_mainPageContent'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/setting/index.html.twig", 1);
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

        echo "Users";
        
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
        echo "\t
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
    public function block_mainPageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainPageContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainPageContent"));

        // line 14
        echo "
    <!-- Page main content START -->
\t<div class=\"page-content-wrapper border\">

\t\t<!-- Title -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 mb-3\">
\t\t\t\t<h1 class=\"h3 mb-2 mb-sm-0\">Admin Settings</h1>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row g-4\">
\t\t\t<!-- Left side START -->
\t\t\t<div class=\"col-xl-3\">
\t\t\t\t<!-- Tab START -->
\t\t\t\t<ul class=\"nav nav-pills nav-tabs-bg-dark flex-column\">
\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#tab-1\"><i class=\"fas fa-globe fa-fw me-2\"></i>Website Settings</a> </li>
\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab-2\"><i class=\"fas fa-cog fa-fw me-2\"></i>General Settings</a> </li>
\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab-3\"><i class=\"fas fa-bell fa-fw me-2\"></i>Notification Settings</a> </li>
\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab-5\"><i class=\"fas fa-sliders-h fa-fw me-2\"></i>Social Settings</a> </li>
\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link mb-0\" data-bs-toggle=\"tab\" href=\"#tab-6\"><i class=\"fas fa-envelope-open-text fa-fw me-2\"></i>Email Settings</a> </li>
\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link mb-0\" href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_admin_network_config_index");
        echo "\"><i class=\"fas fa-globe fa-fw me-2\"></i>Network Settings</a> </li>
\t\t\t\t</ul>
\t\t\t\t<!-- Tab END -->
\t\t\t</div>
\t\t\t<!-- Left side END -->

\t\t\t<!-- Right side START -->
\t\t\t<div class=\"col-xl-9\">

\t\t\t\t<!-- Tab Content START -->
\t\t\t\t<div class=\"tab-content\">

\t\t\t\t\t";
        // line 47
        echo twig_include($this->env, $context, "admin/setting/_website_setting.html.twig");
        echo "

\t\t\t\t\t";
        // line 49
        echo twig_include($this->env, $context, "admin/setting/_general_setting.html.twig");
        echo "

\t\t\t\t\t";
        // line 51
        echo twig_include($this->env, $context, "admin/setting/_notification_setting.html.twig");
        echo "

                    ";
        // line 53
        echo twig_include($this->env, $context, "admin/setting/_social_setting.html.twig");
        echo "

                    ";
        // line 55
        echo twig_include($this->env, $context, "admin/setting/_email_setting.html.twig");
        echo "

\t\t\t\t</div>
\t\t\t\t<!-- Tab Content END -->
\t\t\t</div>
\t\t\t<!-- Right side END -->
\t\t</div> <!-- Row END -->\t\t
\t</div>
\t<!-- Page main content END -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/setting/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 55,  185 => 53,  180 => 51,  175 => 49,  170 => 47,  155 => 35,  132 => 14,  122 => 13,  111 => 10,  101 => 9,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block pageTitle %}Users{% endblock %}

{% block actionBtn %}
\t
{% endblock %}

{% block script %}
    
{% endblock %}

{% block mainPageContent %}

    <!-- Page main content START -->
\t<div class=\"page-content-wrapper border\">

\t\t<!-- Title -->
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12 mb-3\">
\t\t\t\t<h1 class=\"h3 mb-2 mb-sm-0\">Admin Settings</h1>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"row g-4\">
\t\t\t<!-- Left side START -->
\t\t\t<div class=\"col-xl-3\">
\t\t\t\t<!-- Tab START -->
\t\t\t\t<ul class=\"nav nav-pills nav-tabs-bg-dark flex-column\">
\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#tab-1\"><i class=\"fas fa-globe fa-fw me-2\"></i>Website Settings</a> </li>
\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab-2\"><i class=\"fas fa-cog fa-fw me-2\"></i>General Settings</a> </li>
\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab-3\"><i class=\"fas fa-bell fa-fw me-2\"></i>Notification Settings</a> </li>
\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#tab-5\"><i class=\"fas fa-sliders-h fa-fw me-2\"></i>Social Settings</a> </li>
\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link mb-0\" data-bs-toggle=\"tab\" href=\"#tab-6\"><i class=\"fas fa-envelope-open-text fa-fw me-2\"></i>Email Settings</a> </li>
\t\t\t\t\t<li class=\"nav-item\"> <a class=\"nav-link mb-0\" href=\"{{ url(\"app_admin_network_config_index\") }}\"><i class=\"fas fa-globe fa-fw me-2\"></i>Network Settings</a> </li>
\t\t\t\t</ul>
\t\t\t\t<!-- Tab END -->
\t\t\t</div>
\t\t\t<!-- Left side END -->

\t\t\t<!-- Right side START -->
\t\t\t<div class=\"col-xl-9\">

\t\t\t\t<!-- Tab Content START -->
\t\t\t\t<div class=\"tab-content\">

\t\t\t\t\t{{ include('admin/setting/_website_setting.html.twig') }}

\t\t\t\t\t{{ include('admin/setting/_general_setting.html.twig') }}

\t\t\t\t\t{{ include('admin/setting/_notification_setting.html.twig') }}

                    {{ include('admin/setting/_social_setting.html.twig') }}

                    {{ include('admin/setting/_email_setting.html.twig') }}

\t\t\t\t</div>
\t\t\t\t<!-- Tab Content END -->
\t\t\t</div>
\t\t\t<!-- Right side END -->
\t\t</div> <!-- Row END -->\t\t
\t</div>
\t<!-- Page main content END -->

{% endblock %}", "admin/setting/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\setting\\index.html.twig");
    }
}
