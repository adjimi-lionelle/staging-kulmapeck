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

/* admin/abonnement/_form.html.twig */
class __TwigTemplate_193c74dfb91a0abbdfbb5bb976484a73 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/abonnement/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/abonnement/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-4"]]);
        echo "
    <div class=\"col-md-6\">
        ";
        // line 3
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), "label", [], "any", false, false, false, 3), 'row');
        echo "
    </div>
    <div class=\"col-md-3\">
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "duree", [], "any", false, false, false, 6), 'row');
        echo "
    </div>
    <div class=\"col-md-3\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "montant", [], "any", false, false, false, 9), 'row');
        echo "
    </div>
    <div class=\"col-md-12\">
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "paymentMethods", [], "any", false, false, false, 12), 'row');
        echo "
    </div>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "items", [], "any", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 15
            echo "        <div class=\"col-md-4\">
        ";
            // line 16
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["item"], 'row');
            echo "
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    <div class=\"col-md-12\">
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "isRecommended", [], "any", false, false, false, 20), 'row');
        echo "
    </div>
    <div class=\"col-12\">
        <button class=\"btn btn-success\" type=\"submit\">";
        // line 23
        echo twig_escape_filter($this->env, ((array_key_exists("button_label", $context)) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 23, $this->source); })()), "created")) : ("created")), "html", null, true);
        echo "</button>
    </div>
";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_end');
        echo "

<!-- Modal START -->
\t<div class=\"modal fade\" id=\"itemAbonnementModal\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header border-0 bg-transparent\">
\t\t\t\t\t<!-- Close button -->
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<!-- Modal body -->
\t\t\t\t<div class=\"modal-body px-5 pb-5 position-relative overflow-hidden\">
                    <div class=\"d-flex mb-4 mt-3\">
                        ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["itemForm"]) || array_key_exists("itemForm", $context) ? $context["itemForm"] : (function () { throw new RuntimeError('Variable "itemForm" does not exist.', 38, $this->source); })()), 'form_start');
        echo "
                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["itemForm"]) || array_key_exists("itemForm", $context) ? $context["itemForm"] : (function () { throw new RuntimeError('Variable "itemForm" does not exist.', 39, $this->source); })()), 'widget');
        echo "
                            ";
        // line 40
        if (array_key_exists("redirectUri", $context)) {
            // line 41
            echo "                                <input type=\"hidden\" name=\"redirectUri\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["redirectUri"]) || array_key_exists("redirectUri", $context) ? $context["redirectUri"] : (function () { throw new RuntimeError('Variable "redirectUri" does not exist.', 41, $this->source); })()), "html", null, true);
            echo "\">
                            ";
        }
        // line 43
        echo "                            <button type=\"submit\" class=\"btn btn-primary mt-3\">Save</button>
                        ";
        // line 44
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["itemForm"]) || array_key_exists("itemForm", $context) ? $context["itemForm"] : (function () { throw new RuntimeError('Variable "itemForm" does not exist.', 44, $this->source); })()), 'form_end');
        echo "
                    </div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>  
\t<!-- Modal END -->
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/abonnement/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 44,  133 => 43,  127 => 41,  125 => 40,  121 => 39,  117 => 38,  101 => 25,  96 => 23,  90 => 20,  87 => 19,  78 => 16,  75 => 15,  71 => 14,  66 => 12,  60 => 9,  54 => 6,  48 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'class': 'row g-4'}}) }}
    <div class=\"col-md-6\">
        {{ form_row(form.label) }}
    </div>
    <div class=\"col-md-3\">
        {{ form_row(form.duree) }}
    </div>
    <div class=\"col-md-3\">
        {{ form_row(form.montant) }}
    </div>
    <div class=\"col-md-12\">
        {{ form_row(form.paymentMethods) }}
    </div>
    {% for item in form.items %}
        <div class=\"col-md-4\">
        {{ form_row(item) }}
    </div>
    {% endfor %}
    <div class=\"col-md-12\">
        {{ form_row(form.isRecommended) }}
    </div>
    <div class=\"col-12\">
        <button class=\"btn btn-success\" type=\"submit\">{{ button_label|default('created') }}</button>
    </div>
{{ form_end(form) }}

<!-- Modal START -->
\t<div class=\"modal fade\" id=\"itemAbonnementModal\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header border-0 bg-transparent\">
\t\t\t\t\t<!-- Close button -->
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<!-- Modal body -->
\t\t\t\t<div class=\"modal-body px-5 pb-5 position-relative overflow-hidden\">
                    <div class=\"d-flex mb-4 mt-3\">
                        {{ form_start(itemForm) }}
                            {{ form_widget(itemForm) }}
                            {% if redirectUri is defined %}
                                <input type=\"hidden\" name=\"redirectUri\" value=\"{{ redirectUri }}\">
                            {% endif %}
                            <button type=\"submit\" class=\"btn btn-primary mt-3\">Save</button>
                        {{ form_end(itemForm) }}
                    </div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>  
\t<!-- Modal END -->
", "admin/abonnement/_form.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\abonnement\\_form.html.twig");
    }
}
