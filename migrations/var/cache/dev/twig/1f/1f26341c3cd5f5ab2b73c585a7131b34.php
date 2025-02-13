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

/* admin/setting/_general_setting.html.twig */
class __TwigTemplate_cd3e269e44e7fb9a855513ed2c04a0cf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/_general_setting.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/_general_setting.html.twig"));

        // line 1
        echo "<!-- General Settings content START -->
\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-2\">

\t\t\t\t\t\t<div class=\"card shadow\">

\t\t\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t\t\t<div class=\"card-header border-bottom\">
\t\t\t\t\t\t\t\t<h5 class=\"card-header-title\">General Settings</h5>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Card body START -->
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["generalSettingForm"]) || array_key_exists("generalSettingForm", $context) ? $context["generalSettingForm"] : (function () { throw new RuntimeError('Variable "generalSettingForm" does not exist.', 13, $this->source); })()), 'form_start');
        echo "

\t\t\t\t\t\t\t\t\t<!-- Input item -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["generalSettingForm"]) || array_key_exists("generalSettingForm", $context) ? $context["generalSettingForm"] : (function () { throw new RuntimeError('Variable "generalSettingForm" does not exist.', 17, $this->source); })()), "mainSiteUrl", [], "any", false, false, false, 17), 'row');
        echo "
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Switch item -->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Maintainance mode</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-switch form-check-lg mb-0\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["generalSettingForm"]) || array_key_exists("generalSettingForm", $context) ? $context["generalSettingForm"] : (function () { throw new RuntimeError('Variable "generalSettingForm" does not exist.', 24, $this->source); })()), "isMaintenanceMode", [], "any", false, false, false, 24), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["generalSettingForm"]) || array_key_exists("generalSettingForm", $context) ? $context["generalSettingForm"] : (function () { throw new RuntimeError('Variable "generalSettingForm" does not exist.', 25, $this->source); })()), "isMaintenanceMode", [], "any", false, false, false, 25), 'label');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t\t\t\t\t<!-- Textarea item -->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["generalSettingForm"]) || array_key_exists("generalSettingForm", $context) ? $context["generalSettingForm"] : (function () { throw new RuntimeError('Variable "generalSettingForm" does not exist.', 31, $this->source); })()), "maintenanceText", [], "any", false, false, false, 31), 'row');
        echo "\t
\t\t\t\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t\t\t\t\t<!-- Save button -->
\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-end\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary mb-0\">Update</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["generalSettingForm"]) || array_key_exists("generalSettingForm", $context) ? $context["generalSettingForm"] : (function () { throw new RuntimeError('Variable "generalSettingForm" does not exist.', 38, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Card body END -->

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- General Settings content END -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/setting/_general_setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 38,  87 => 31,  78 => 25,  74 => 24,  64 => 17,  57 => 13,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- General Settings content START -->
\t\t\t\t\t<div class=\"tab-pane\" id=\"tab-2\">

\t\t\t\t\t\t<div class=\"card shadow\">

\t\t\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t\t\t<div class=\"card-header border-bottom\">
\t\t\t\t\t\t\t\t<h5 class=\"card-header-title\">General Settings</h5>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Card body START -->
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t{{ form_start(generalSettingForm) }}

\t\t\t\t\t\t\t\t\t<!-- Input item -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t{{ form_row(generalSettingForm.mainSiteUrl) }}
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Switch item -->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Maintainance mode</label>
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-switch form-check-lg mb-0\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(generalSettingForm.isMaintenanceMode) }}
\t\t\t\t\t\t\t\t\t\t\t{{ form_label(generalSettingForm.isMaintenanceMode) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t\t\t\t\t<!-- Textarea item -->
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t\t\t\t\t{{ form_row(generalSettingForm.maintenanceText) }}\t
\t\t\t\t\t\t\t\t\t</div>
\t\t
\t\t\t\t\t\t\t\t\t<!-- Save button -->
\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-end\">
\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary mb-0\">Update</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{{ form_end(generalSettingForm) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Card body END -->

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- General Settings content END -->", "admin/setting/_general_setting.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\setting\\_general_setting.html.twig");
    }
}
