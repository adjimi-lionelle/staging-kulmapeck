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

/* admin/setting/_email_setting.html.twig */
class __TwigTemplate_5e61e172fc407a69d064056bf9a4e354 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/_email_setting.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/_email_setting.html.twig"));

        // line 1
        echo "<!-- Email Settings content START -->
<div class=\"tab-pane\" id=\"tab-6\">
    <div class=\"card shadow\">
        <!-- Card header -->
        <div class=\"card-header border-bottom\">
            <h5 class=\"card-header-title mb-0\">Email Settings</h5>
        </div>
        <!-- Card body START -->
        <div class=\"card-body\">
            <!-- Email Template -->
            <p>En attente...</p>
        </div>
        <!-- Card body END -->
    </div>

    <div class=\"card shadow mt-5\">
        <!-- Card header -->
        <div class=\"card-header border-bottom\">
            <h5 class=\"card-header-title mb-0\">Notification Settings</h5>
        </div>
        <!-- Card body START -->
        <div class=\"card-body\">
            <!-- Email Template -->
            <div class=\"row g-4 mt-4\">
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notificationTypes"]) || array_key_exists("notificationTypes", $context) ? $context["notificationTypes"] : (function () { throw new RuntimeError('Variable "notificationTypes" does not exist.', 25, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["nt"]) {
            // line 26
            echo "                    <!-- Template Item -->
                    <div class=\"col-md-6 col-xxl-4\">
                        <div class=\"bg-light rounded-3 d-flex justify-content-between align-items-center p-2\">
                            <h6 class=\"mb-0\"><a href=\"#\">";
            // line 29
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["nt"], "label", [], "any", false, false, false, 29)), "html", null, true);
            echo "</a></h6>
                            <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-template-";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30), "html", null, true);
            echo "\" class=\"btn btn-sm btn-round btn-dark flex-shrink-0 mb-0\"><i class=\"far fa-edit fa-fw\"></i></a>
                        </div>
                    </div>
                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "            </div>
        </div>
        <!-- Card body END -->
    </div>
</div>
<!-- Email Settings content END -->

";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notificationTypeForms"]) || array_key_exists("notificationTypeForms", $context) ? $context["notificationTypeForms"] : (function () { throw new RuntimeError('Variable "notificationTypeForms" does not exist.', 41, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 42
            echo "    <!-- Popup modal for add faq START -->
    <div class=\"modal fade\" id=\"modal-template-";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 43), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"addQuestionLabel-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 43), "html", null, true);
            echo "\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            ";
            // line 45
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($context["form"], 'form_start');
            echo "
                <div class=\"modal-content\">
                    <div class=\"modal-header bg-dark\">
                        <h5 class=\"modal-title text-white\" id=\"addQuestionLabel-";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 48), "html", null, true);
            echo "\">Edit notification</h5>
                        <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
                    </div>
                    <div class=\"modal-body\">
                        ";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["form"], 'widget');
            echo "
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
                        <button type=\"submit\" class=\"btn btn-success my-0\">Save</button>
                    </div>
                </div>
            ";
            // line 59
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock($context["form"], 'form_end');
            echo "
        </div>
    </div>
    <!-- Popup modal for add faq END -->
";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/setting/_email_setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 59,  162 => 52,  155 => 48,  149 => 45,  142 => 43,  139 => 42,  122 => 41,  113 => 34,  95 => 30,  91 => 29,  86 => 26,  69 => 25,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Email Settings content START -->
<div class=\"tab-pane\" id=\"tab-6\">
    <div class=\"card shadow\">
        <!-- Card header -->
        <div class=\"card-header border-bottom\">
            <h5 class=\"card-header-title mb-0\">Email Settings</h5>
        </div>
        <!-- Card body START -->
        <div class=\"card-body\">
            <!-- Email Template -->
            <p>En attente...</p>
        </div>
        <!-- Card body END -->
    </div>

    <div class=\"card shadow mt-5\">
        <!-- Card header -->
        <div class=\"card-header border-bottom\">
            <h5 class=\"card-header-title mb-0\">Notification Settings</h5>
        </div>
        <!-- Card body START -->
        <div class=\"card-body\">
            <!-- Email Template -->
            <div class=\"row g-4 mt-4\">
                {% for nt in notificationTypes %}
                    <!-- Template Item -->
                    <div class=\"col-md-6 col-xxl-4\">
                        <div class=\"bg-light rounded-3 d-flex justify-content-between align-items-center p-2\">
                            <h6 class=\"mb-0\"><a href=\"#\">{{ nt.label|upper }}</a></h6>
                            <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-template-{{ loop.index }}\" class=\"btn btn-sm btn-round btn-dark flex-shrink-0 mb-0\"><i class=\"far fa-edit fa-fw\"></i></a>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
        <!-- Card body END -->
    </div>
</div>
<!-- Email Settings content END -->

{% for form in notificationTypeForms %}
    <!-- Popup modal for add faq START -->
    <div class=\"modal fade\" id=\"modal-template-{{ loop.index }}\" tabindex=\"-1\" aria-labelledby=\"addQuestionLabel-{{ loop.index }}\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            {{ form_start(form) }}
                <div class=\"modal-content\">
                    <div class=\"modal-header bg-dark\">
                        <h5 class=\"modal-title text-white\" id=\"addQuestionLabel-{{ loop.index }}\">Edit notification</h5>
                        <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
                    </div>
                    <div class=\"modal-body\">
                        {{ form_widget(form) }}
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
                        <button type=\"submit\" class=\"btn btn-success my-0\">Save</button>
                    </div>
                </div>
            {{ form_end(form) }}
        </div>
    </div>
    <!-- Popup modal for add faq END -->
{% endfor %}", "admin/setting/_email_setting.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\setting\\_email_setting.html.twig");
    }
}
