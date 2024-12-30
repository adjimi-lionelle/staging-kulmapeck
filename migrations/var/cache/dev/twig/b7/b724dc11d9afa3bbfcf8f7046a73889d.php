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

/* admin/registration/_form.html.twig */
class __TwigTemplate_e242127fd31f169bbb35494f5ff0efaf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/registration/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/registration/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
    ";
        // line 2
        if (twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "parentCode", [], "any", true, true, false, 2)) {
            // line 3
            echo "        <div class=\"mb-4\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">";
            // line 4
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 4, $this->source); })()), "parentCode", [], "any", false, false, false, 4), 'label');
            echo "</label>
            <div class=\"input-group input-group-lg\">
                <span class=\"input-group-text bg-light rounded-start border-0 text-secondary px-3\"><i class=\"fas fa-user\"></i></span>
                ";
            // line 7
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 7, $this->source); })()), "parentCode", [], "any", false, false, false, 7), 'widget');
            echo "
            </div>
        </div>
    ";
        }
        // line 11
        echo "    
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 12, $this->source); })()), "personne", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "        <div class=\"mb-4\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">";
            // line 14
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["item"], 'label');
            echo "</label>
            <div class=\"input-group input-group-lg\">
                ";
            // line 16
            if ( !($context["item"] === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 16, $this->source); })()), "personne", [], "any", false, false, false, 16), "imageFile", [], "any", false, false, false, 16))) {
                // line 17
                echo "                    <span class=\"input-group-text bg-light rounded-start border-0 text-secondary px-3\"><i class=\"fas fa-arrow-alt-circle-right\"></i></span>
                ";
            }
            // line 19
            echo "                
                ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["item"], 'widget');
            echo "
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    
    ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", true, true, false, 25)) {
            echo "   
        <div class=\"mb-4\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), "email", [], "any", false, false, false, 27), 'label');
            echo "*</label>
            <div class=\"input-group input-group-lg\">
                <span class=\"input-group-text bg-light rounded-start border-0 text-secondary px-3\"><i class=\"bi bi-envelope-fill\"></i></span>
                ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'widget');
            echo "
            </div>
        </div>
    ";
        }
        // line 34
        echo "    
    ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", true, true, false, 35)) {
            // line 36
            echo "        <div class=\"mb-4\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "plainPassword", [], "any", false, false, false, 37), 'label');
            echo "*</label>
            <div class=\"input-group input-group-lg\">
                <span class=\"input-group-text bg-light rounded-start border-0 text-secondary px-3\"><i class=\"fas fa-lock\"></i></span>
                ";
            // line 40
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "plainPassword", [], "any", false, false, false, 40), 'widget');
            echo "
            </div>
        </div>
    ";
        }
        // line 44
        echo "    

    ";
        // line 46
        if (twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "enseignant", [], "any", true, true, false, 46)) {
            // line 47
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "enseignant", [], "any", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 48
                echo "            <div class=\"mb-4\">
                <label for=\"exampleInputEmail1\" class=\"form-label\">";
                // line 49
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["item"], 'label');
                echo "</label>
                <div class=\"input-group input-group-lg\">
                    ";
                // line 51
                if (($context["item"] === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "enseignant", [], "any", false, false, false, 51), "etablissement", [], "any", false, false, false, 51))) {
                    // line 52
                    echo "                        <span class=\"input-group-text bg-light rounded-start border-0 text-secondary px-3\"><i class=\"fas fa-building\"></i></span>
                    ";
                }
                // line 54
                echo "                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["item"], 'widget');
                echo "
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "    ";
        }
        // line 59
        echo "
    ";
        // line 60
        if (twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "eleve", [], "any", true, true, false, 60)) {
            // line 61
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), "eleve", [], "any", false, false, false, 61));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 62
                echo "            <div class=\"mb-4\">
                <label for=\"exampleInputEmail1\" class=\"form-label\">";
                // line 63
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["item"], 'label');
                echo "</label>
                <div class=\"input-group input-group-lg\">
                    <span class=\"input-group-text bg-light rounded-start border-0 text-secondary px-3\"><i class=\"fas fa-arrow-alt-circle-right\"></i></span>
                    ";
                // line 66
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["item"], 'widget');
                echo "
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "    ";
        }
        // line 71
        echo "
    ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "filieres", [], "any", true, true, false, 72)) {
            // line 73
            echo "        <!-- Check box -->
        <div class=\"mb-4\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">";
            // line 75
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 75, $this->source); })()), "filieres", [], "any", false, false, false, 75), 'label');
            echo "</label>
            <div class=\"input-group input-group-lg\">
                ";
            // line 77
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 77, $this->source); })()), "filieres", [], "any", false, false, false, 77), 'widget');
            echo "
            </div>
        </div>
    ";
        }
        // line 81
        echo "    
    ";
        // line 82
        if (twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "roles", [], "any", true, true, false, 82)) {
            // line 83
            echo "        <div class=\"mb-4\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">";
            // line 84
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 84, $this->source); })()), "roles", [], "any", false, false, false, 84), 'label');
            echo "*</label>
            <div class=\"input-group input-group-lg\">
                <span class=\"input-group-text bg-light rounded-start border-0 text-secondary px-3\"><i class=\"fas fa-lock\"></i></span>
                ";
            // line 87
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 87, $this->source); })()), "roles", [], "any", false, false, false, 87), 'widget');
            echo "
            </div>
        </div>
    ";
        }
        // line 91
        echo "
    ";
        // line 92
        if (twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "agreeTerms", [], "any", true, true, false, 92)) {
            // line 93
            echo "        <!-- Check box -->
        <div class=\"mb-4\">
            <div class=\"form-check\">
                ";
            // line 96
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 96, $this->source); })()), "agreeTerms", [], "any", false, false, false, 96), 'widget');
            echo "
            </div>
        </div>
    ";
        }
        // line 100
        echo "
    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 101, $this->source); })()), 'rest');
        echo "
    
    <!-- Button -->
    <div class=\"align-items-center mt-0\">
        <div class=\"d-grid\">
            <button class=\"btn btn-primary mb-0\" type=\"submit\">Enregistrer</button>
        </div>
    </div>
";
        // line 109
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 109, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/registration/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 109,  274 => 101,  271 => 100,  264 => 96,  259 => 93,  257 => 92,  254 => 91,  247 => 87,  241 => 84,  238 => 83,  236 => 82,  233 => 81,  226 => 77,  221 => 75,  217 => 73,  215 => 72,  212 => 71,  209 => 70,  199 => 66,  193 => 63,  190 => 62,  185 => 61,  183 => 60,  180 => 59,  177 => 58,  166 => 54,  162 => 52,  160 => 51,  155 => 49,  152 => 48,  147 => 47,  145 => 46,  141 => 44,  134 => 40,  128 => 37,  125 => 36,  123 => 35,  120 => 34,  113 => 30,  107 => 27,  102 => 25,  99 => 24,  89 => 20,  86 => 19,  82 => 17,  80 => 16,  75 => 14,  72 => 13,  68 => 12,  65 => 11,  58 => 7,  52 => 4,  49 => 3,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(registrationForm) }}
    {% if registrationForm.parentCode is defined %}
        <div class=\"mb-4\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">{{ form_label(registrationForm.parentCode) }}</label>
            <div class=\"input-group input-group-lg\">
                <span class=\"input-group-text bg-light rounded-start border-0 text-secondary px-3\"><i class=\"fas fa-user\"></i></span>
                {{ form_widget(registrationForm.parentCode) }}
            </div>
        </div>
    {% endif %}
    
    {% for item in registrationForm.personne %}
        <div class=\"mb-4\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">{{ form_label(item) }}</label>
            <div class=\"input-group input-group-lg\">
                {% if item is not same as registrationForm.personne.imageFile %}
                    <span class=\"input-group-text bg-light rounded-start border-0 text-secondary px-3\"><i class=\"fas fa-arrow-alt-circle-right\"></i></span>
                {% endif %}
                
                {{ form_widget(item) }}
            </div>
        </div>
    {% endfor %}
    
    {% if registrationForm.email is defined %}   
        <div class=\"mb-4\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">{{ form_label(registrationForm.email) }}*</label>
            <div class=\"input-group input-group-lg\">
                <span class=\"input-group-text bg-light rounded-start border-0 text-secondary px-3\"><i class=\"bi bi-envelope-fill\"></i></span>
                {{ form_widget(registrationForm.email) }}
            </div>
        </div>
    {% endif %}
    
    {% if registrationForm.plainPassword is defined %}
        <div class=\"mb-4\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">{{ form_label(registrationForm.plainPassword) }}*</label>
            <div class=\"input-group input-group-lg\">
                <span class=\"input-group-text bg-light rounded-start border-0 text-secondary px-3\"><i class=\"fas fa-lock\"></i></span>
                {{ form_widget(registrationForm.plainPassword) }}
            </div>
        </div>
    {% endif %}
    

    {% if registrationForm.enseignant is defined %}
        {% for item in registrationForm.enseignant %}
            <div class=\"mb-4\">
                <label for=\"exampleInputEmail1\" class=\"form-label\">{{ form_label(item) }}</label>
                <div class=\"input-group input-group-lg\">
                    {% if item is same as registrationForm.enseignant.etablissement %}
                        <span class=\"input-group-text bg-light rounded-start border-0 text-secondary px-3\"><i class=\"fas fa-building\"></i></span>
                    {% endif %}
                    {{ form_widget(item) }}
                </div>
            </div>
        {% endfor %}
    {% endif %}

    {% if registrationForm.eleve is defined %}
        {% for item in registrationForm.eleve %}
            <div class=\"mb-4\">
                <label for=\"exampleInputEmail1\" class=\"form-label\">{{ form_label(item) }}</label>
                <div class=\"input-group input-group-lg\">
                    <span class=\"input-group-text bg-light rounded-start border-0 text-secondary px-3\"><i class=\"fas fa-arrow-alt-circle-right\"></i></span>
                    {{ form_widget(item) }}
                </div>
            </div>
        {% endfor %}
    {% endif %}

    {% if registrationForm.filieres is defined %}
        <!-- Check box -->
        <div class=\"mb-4\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">{{ form_label(registrationForm.filieres) }}</label>
            <div class=\"input-group input-group-lg\">
                {{ form_widget(registrationForm.filieres) }}
            </div>
        </div>
    {% endif %}
    
    {% if registrationForm.roles is defined %}
        <div class=\"mb-4\">
            <label for=\"exampleInputEmail1\" class=\"form-label\">{{ form_label(registrationForm.roles) }}*</label>
            <div class=\"input-group input-group-lg\">
                <span class=\"input-group-text bg-light rounded-start border-0 text-secondary px-3\"><i class=\"fas fa-lock\"></i></span>
                {{ form_widget(registrationForm.roles) }}
            </div>
        </div>
    {% endif %}

    {% if registrationForm.agreeTerms is defined %}
        <!-- Check box -->
        <div class=\"mb-4\">
            <div class=\"form-check\">
                {{ form_widget(registrationForm.agreeTerms) }}
            </div>
        </div>
    {% endif %}

    {{ form_rest(registrationForm) }}
    
    <!-- Button -->
    <div class=\"align-items-center mt-0\">
        <div class=\"d-grid\">
            <button class=\"btn btn-primary mb-0\" type=\"submit\">Enregistrer</button>
        </div>
    </div>
{{ form_end(registrationForm) }}", "admin/registration/_form.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\registration\\_form.html.twig");
    }
}
