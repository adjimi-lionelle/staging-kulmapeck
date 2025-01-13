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

/* admin/setting/_website_setting.html.twig */
class __TwigTemplate_3dff1d57e9a466308d2e067d6c774f1f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/_website_setting.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/_website_setting.html.twig"));

        // line 1
        echo "<!-- Personal Information content START -->
<div class=\"tab-pane show active\" id=\"tab-1\">
    <div class=\"card shadow\">

        <!-- Card header -->
        <div class=\"card-header border-bottom\">
            <h5 class=\"card-header-title\">Website Settings</h5>
        </div>

        <!-- Card body START -->
        <div class=\"card-body\">
            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["siteSettingForm"]) || array_key_exists("siteSettingForm", $context) ? $context["siteSettingForm"] : (function () { throw new RuntimeError('Variable "siteSettingForm" does not exist.', 12, $this->source); })()), 'form_start');
        echo "

                <!-- Input item -->
                <div class=\"col-lg-4\">
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["siteSettingForm"]) || array_key_exists("siteSettingForm", $context) ? $context["siteSettingForm"] : (function () { throw new RuntimeError('Variable "siteSettingForm" does not exist.', 16, $this->source); })()), "siteName", [], "any", false, false, false, 16), 'row');
        echo "
                </div>

                <!-- Input item -->
                <div class=\"col-lg-4\">
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["siteSettingForm"]) || array_key_exists("siteSettingForm", $context) ? $context["siteSettingForm"] : (function () { throw new RuntimeError('Variable "siteSettingForm" does not exist.', 21, $this->source); })()), "siteCopyrights", [], "any", false, false, false, 21), 'row');
        echo "
                </div>

                <!-- Input item -->
                <div class=\"col-lg-4\">
                    ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["siteSettingForm"]) || array_key_exists("siteSettingForm", $context) ? $context["siteSettingForm"] : (function () { throw new RuntimeError('Variable "siteSettingForm" does not exist.', 26, $this->source); })()), "siteEmail", [], "any", false, false, false, 26), 'row');
        echo "
                </div>

                <!-- Textarea item -->
                <div class=\"col-12\">
                    ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["siteSettingForm"]) || array_key_exists("siteSettingForm", $context) ? $context["siteSettingForm"] : (function () { throw new RuntimeError('Variable "siteSettingForm" does not exist.', 31, $this->source); })()), "siteDescription", [], "any", false, false, false, 31), 'row');
        echo "
                </div>

                <!-- Input item -->
                <div class=\"col-lg-6\">
                    ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["siteSettingForm"]) || array_key_exists("siteSettingForm", $context) ? $context["siteSettingForm"] : (function () { throw new RuntimeError('Variable "siteSettingForm" does not exist.', 36, $this->source); })()), "contactPhone", [], "any", false, false, false, 36), 'row');
        echo "
                </div>

                <!-- Input item -->
                <div class=\"col-lg-6\">
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["siteSettingForm"]) || array_key_exists("siteSettingForm", $context) ? $context["siteSettingForm"] : (function () { throw new RuntimeError('Variable "siteSettingForm" does not exist.', 41, $this->source); })()), "supportEmail", [], "any", false, false, false, 41), 'row');
        echo "
                </div>

                <!-- Textarea item -->
                <div class=\"col-12\">
                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["siteSettingForm"]) || array_key_exists("siteSettingForm", $context) ? $context["siteSettingForm"] : (function () { throw new RuntimeError('Variable "siteSettingForm" does not exist.', 46, $this->source); })()), "contactAddress", [], "any", false, false, false, 46), 'row');
        echo "
                </div>

                <!-- Save button -->
                <div class=\"d-sm-flex justify-content-end\">
                    <button type=\"submit\" class=\"btn btn-primary mb-0\">Update</button>
                </div>
            ";
        // line 53
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["siteSettingForm"]) || array_key_exists("siteSettingForm", $context) ? $context["siteSettingForm"] : (function () { throw new RuntimeError('Variable "siteSettingForm" does not exist.', 53, $this->source); })()), 'form_end');
        echo "
        </div>
        <!-- Card body END -->

    </div>\t\t\t
</div>
<!-- Personal Information content END -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/setting/_website_setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 53,  111 => 46,  103 => 41,  95 => 36,  87 => 31,  79 => 26,  71 => 21,  63 => 16,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Personal Information content START -->
<div class=\"tab-pane show active\" id=\"tab-1\">
    <div class=\"card shadow\">

        <!-- Card header -->
        <div class=\"card-header border-bottom\">
            <h5 class=\"card-header-title\">Website Settings</h5>
        </div>

        <!-- Card body START -->
        <div class=\"card-body\">
            {{ form_start(siteSettingForm) }}

                <!-- Input item -->
                <div class=\"col-lg-4\">
                    {{ form_row(siteSettingForm.siteName) }}
                </div>

                <!-- Input item -->
                <div class=\"col-lg-4\">
                    {{ form_row(siteSettingForm.siteCopyrights) }}
                </div>

                <!-- Input item -->
                <div class=\"col-lg-4\">
                    {{ form_row(siteSettingForm.siteEmail) }}
                </div>

                <!-- Textarea item -->
                <div class=\"col-12\">
                    {{ form_row(siteSettingForm.siteDescription) }}
                </div>

                <!-- Input item -->
                <div class=\"col-lg-6\">
                    {{ form_row(siteSettingForm.contactPhone) }}
                </div>

                <!-- Input item -->
                <div class=\"col-lg-6\">
                    {{ form_row(siteSettingForm.supportEmail) }}
                </div>

                <!-- Textarea item -->
                <div class=\"col-12\">
                    {{ form_row(siteSettingForm.contactAddress) }}
                </div>

                <!-- Save button -->
                <div class=\"d-sm-flex justify-content-end\">
                    <button type=\"submit\" class=\"btn btn-primary mb-0\">Update</button>
                </div>
            {{ form_end(siteSettingForm) }}
        </div>
        <!-- Card body END -->

    </div>\t\t\t
</div>
<!-- Personal Information content END -->", "admin/setting/_website_setting.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\setting\\_website_setting.html.twig");
    }
}
