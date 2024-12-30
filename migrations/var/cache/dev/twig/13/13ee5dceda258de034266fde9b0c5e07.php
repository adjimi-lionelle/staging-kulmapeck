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

/* admin/setting/_social_setting.html.twig */
class __TwigTemplate_315c0890ef856716b180303135af5273 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/_social_setting.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/_social_setting.html.twig"));

        // line 1
        echo "<!-- Social Settings content START -->
<div class=\"tab-pane\" id=\"tab-5\">
    <div class=\"card shadow\">
        <!-- Card header -->
        <div class=\"card-header border-bottom d-sm-flex justify-content-between align-items-center\">
            <h5 class=\"card-header-title mb-0\">Social Media Settings</h5>
            <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#newSocialMediaFormModal\" class=\"btn btn-sm btn-primary mb-0\">Add new</a>
        </div>
        <!-- Card body START -->
        <div class=\"card-body\">
            <form class=\"row g-4\" method=\"post\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["socials"]) || array_key_exists("socials", $context) ? $context["socials"] : (function () { throw new RuntimeError('Variable "socials" does not exist.', 12, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["social"]) {
            // line 13
            echo "                    <!-- Input item -->
                    <div class=\"col-sm-6\">
                        <label class=\"form-label\">
                            <i class=\"fab ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["social"], "icon", [], "any", false, false, false, 16), "html", null, true);
            echo " text-facebook me-2\"></i>
                            ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["social"], "name", [], "any", false, false, false, 17), "html", null, true);
            echo "
                        </label>
                        <input type=\"hidden\" name=\"socials[";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 19), "html", null, true);
            echo "][id]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["social"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "\">
                        <input class=\"form-control\" name=\"socials[";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 20), "html", null, true);
            echo "][link]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["social"], "link", [], "any", false, false, false, 20), "html", null, true);
            echo "\" required type=\"text\">
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['social'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                <input type=\"hidden\" name=\"socialSettings\" value=\"true\">
                <input type=\"hidden\" name=\"_token\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("socialsettings"), "html", null, true);
        echo "\">
                <!-- Button -->
                <div class=\"d-flex justify-content-end\">
                    <button type=\"submit\" class=\"btn btn-primary mb-0\">Update</button>
                </div>
            </form>
        </div>
        <!-- Card body END -->
    </div>
</div>
<!-- Social Settings content END -->

<!-- Modal START -->
\t<div class=\"modal fade\" id=\"newSocialMediaFormModal\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog modal-md\">
\t\t\t<div class=\"modal-content\">
                <div class=\"modal-header bg-dark\">
                    <h5 class=\"modal-title text-white\" id=\"viewReviewLabel\">Add Social Media</h5>
                    <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
                </div>
\t\t\t\t<!-- Modal body -->
\t\t\t\t<div class=\"modal-body px-5 pb-5 position-relative overflow-hidden\">

\t\t\t\t\t<!-- Element -->
\t\t\t\t\t<figure class=\"position-absolute bottom-0 end-0 mb-n4 me-n4 d-none d-sm-block\">
\t\t\t\t\t\t<img src=\"assets/images/element/01.svg\" alt=\"element\">
\t\t\t\t\t</figure>
\t\t\t\t\t<figure class=\"position-absolute top-0 end-0 z-index-n1 opacity-2\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"818.6px\" height=\"235.1px\" viewBox=\"0 0 818.6 235.1\">
\t\t\t\t\t\t\t<path class=\"fill-info\" d=\"M735,226.3c-5.7,0.6-11.5,1.1-17.2,1.7c-66.2,6.8-134.7,13.7-192.6-16.6c-34.6-18.1-61.4-47.9-87.3-76.7 c-21.4-23.8-43.6-48.5-70.2-66.7c-53.2-36.4-121.6-44.8-175.1-48c-13.6-0.8-27.5-1.4-40.9-1.9c-46.9-1.9-95.4-3.9-141.2-16.5 C8.3,1.2,6.2,0.6,4.2,0H0c3.3,1,6.6,2,10,3c46,12.5,94.5,14.6,141.5,16.5c13.4,0.6,27.3,1.1,40.8,1.9 c53.4,3.2,121.5,11.5,174.5,47.7c26.5,18.1,48.6,42.7,70,66.5c26,28.9,52.9,58.8,87.7,76.9c58.3,30.5,127,23.5,193.3,16.7 c5.8-0.6,11.5-1.2,17.2-1.7c26.2-2.6,55-4.2,83.5-2.2v-1.2C790,222,761.2,223.7,735,226.3z\"></path>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</figure>
\t\t\t\t\t
\t\t\t\t\t<div class=\"row mb-3 item-collapse\">
                       ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["socialSettingForm"]) || array_key_exists("socialSettingForm", $context) ? $context["socialSettingForm"] : (function () { throw new RuntimeError('Variable "socialSettingForm" does not exist.', 58, $this->source); })()), 'form_start');
        echo "
                             <!-- Input item -->
                            <div class=\"col-sm-12\">
                                ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["socialSettingForm"]) || array_key_exists("socialSettingForm", $context) ? $context["socialSettingForm"] : (function () { throw new RuntimeError('Variable "socialSettingForm" does not exist.', 61, $this->source); })()), "icon", [], "any", false, false, false, 61), 'row');
        echo "
                            </div>

                            <!-- Input item -->
                            <div class=\"col-sm-12\">
                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["socialSettingForm"]) || array_key_exists("socialSettingForm", $context) ? $context["socialSettingForm"] : (function () { throw new RuntimeError('Variable "socialSettingForm" does not exist.', 66, $this->source); })()), "name", [], "any", false, false, false, 66), 'row');
        echo "
                            </div>

                            <!-- Input item -->
                            <div class=\"col-sm-12\">
                                ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["socialSettingForm"]) || array_key_exists("socialSettingForm", $context) ? $context["socialSettingForm"] : (function () { throw new RuntimeError('Variable "socialSettingForm" does not exist.', 71, $this->source); })()), "link", [], "any", false, false, false, 71), 'row');
        echo "
                            </div>
                            <hr>
                            <!-- Button -->
                            <div class=\"col-12 d-flex justify-content-end\">
                                <button type=\"submit\" class=\"btn btn-primary mb-0\">Update</button>
                            </div>
                        ";
        // line 78
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["socialSettingForm"]) || array_key_exists("socialSettingForm", $context) ? $context["socialSettingForm"] : (function () { throw new RuntimeError('Variable "socialSettingForm" does not exist.', 78, $this->source); })()), 'form_end');
        echo "

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>  
\t<!-- Modal END -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/setting/_social_setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 78,  174 => 71,  166 => 66,  158 => 61,  152 => 58,  115 => 24,  112 => 23,  93 => 20,  87 => 19,  82 => 17,  78 => 16,  73 => 13,  56 => 12,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Social Settings content START -->
<div class=\"tab-pane\" id=\"tab-5\">
    <div class=\"card shadow\">
        <!-- Card header -->
        <div class=\"card-header border-bottom d-sm-flex justify-content-between align-items-center\">
            <h5 class=\"card-header-title mb-0\">Social Media Settings</h5>
            <a href=\"#\" data-bs-toggle=\"modal\" data-bs-target=\"#newSocialMediaFormModal\" class=\"btn btn-sm btn-primary mb-0\">Add new</a>
        </div>
        <!-- Card body START -->
        <div class=\"card-body\">
            <form class=\"row g-4\" method=\"post\">
                {% for social in socials %}
                    <!-- Input item -->
                    <div class=\"col-sm-6\">
                        <label class=\"form-label\">
                            <i class=\"fab {{ social.icon }} text-facebook me-2\"></i>
                            {{ social.name }}
                        </label>
                        <input type=\"hidden\" name=\"socials[{{ loop.index }}][id]\" value=\"{{ social.id }}\">
                        <input class=\"form-control\" name=\"socials[{{ loop.index }}][link]\" value=\"{{ social.link }}\" required type=\"text\">
                    </div>
                {% endfor %}
                <input type=\"hidden\" name=\"socialSettings\" value=\"true\">
                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('socialsettings') }}\">
                <!-- Button -->
                <div class=\"d-flex justify-content-end\">
                    <button type=\"submit\" class=\"btn btn-primary mb-0\">Update</button>
                </div>
            </form>
        </div>
        <!-- Card body END -->
    </div>
</div>
<!-- Social Settings content END -->

<!-- Modal START -->
\t<div class=\"modal fade\" id=\"newSocialMediaFormModal\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog modal-md\">
\t\t\t<div class=\"modal-content\">
                <div class=\"modal-header bg-dark\">
                    <h5 class=\"modal-title text-white\" id=\"viewReviewLabel\">Add Social Media</h5>
                    <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
                </div>
\t\t\t\t<!-- Modal body -->
\t\t\t\t<div class=\"modal-body px-5 pb-5 position-relative overflow-hidden\">

\t\t\t\t\t<!-- Element -->
\t\t\t\t\t<figure class=\"position-absolute bottom-0 end-0 mb-n4 me-n4 d-none d-sm-block\">
\t\t\t\t\t\t<img src=\"assets/images/element/01.svg\" alt=\"element\">
\t\t\t\t\t</figure>
\t\t\t\t\t<figure class=\"position-absolute top-0 end-0 z-index-n1 opacity-2\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"818.6px\" height=\"235.1px\" viewBox=\"0 0 818.6 235.1\">
\t\t\t\t\t\t\t<path class=\"fill-info\" d=\"M735,226.3c-5.7,0.6-11.5,1.1-17.2,1.7c-66.2,6.8-134.7,13.7-192.6-16.6c-34.6-18.1-61.4-47.9-87.3-76.7 c-21.4-23.8-43.6-48.5-70.2-66.7c-53.2-36.4-121.6-44.8-175.1-48c-13.6-0.8-27.5-1.4-40.9-1.9c-46.9-1.9-95.4-3.9-141.2-16.5 C8.3,1.2,6.2,0.6,4.2,0H0c3.3,1,6.6,2,10,3c46,12.5,94.5,14.6,141.5,16.5c13.4,0.6,27.3,1.1,40.8,1.9 c53.4,3.2,121.5,11.5,174.5,47.7c26.5,18.1,48.6,42.7,70,66.5c26,28.9,52.9,58.8,87.7,76.9c58.3,30.5,127,23.5,193.3,16.7 c5.8-0.6,11.5-1.2,17.2-1.7c26.2-2.6,55-4.2,83.5-2.2v-1.2C790,222,761.2,223.7,735,226.3z\"></path>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</figure>
\t\t\t\t\t
\t\t\t\t\t<div class=\"row mb-3 item-collapse\">
                       {{ form_start(socialSettingForm) }}
                             <!-- Input item -->
                            <div class=\"col-sm-12\">
                                {{ form_row(socialSettingForm.icon) }}
                            </div>

                            <!-- Input item -->
                            <div class=\"col-sm-12\">
                                {{ form_row(socialSettingForm.name) }}
                            </div>

                            <!-- Input item -->
                            <div class=\"col-sm-12\">
                                {{ form_row(socialSettingForm.link) }}
                            </div>
                            <hr>
                            <!-- Button -->
                            <div class=\"col-12 d-flex justify-content-end\">
                                <button type=\"submit\" class=\"btn btn-primary mb-0\">Update</button>
                            </div>
                        {{ form_end(socialSettingForm) }}

\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>  
\t<!-- Modal END -->", "admin/setting/_social_setting.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\setting\\_social_setting.html.twig");
    }
}
