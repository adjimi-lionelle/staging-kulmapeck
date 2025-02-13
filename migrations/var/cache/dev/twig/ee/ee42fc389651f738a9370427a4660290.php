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

/* registration/_form.html.twig */
class __TwigTemplate_b144f94d79fa7a78f45c52910af6e79c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/_form.html.twig"));

        // line 1
        $context["classNames"] = (((array_key_exists("userType", $context) && ((isset($context["userType"]) || array_key_exists("userType", $context) ? $context["userType"] : (function () { throw new RuntimeError('Variable "userType" does not exist.', 1, $this->source); })()) === "trainer"))) ? ("row g-3") : (""));
        // line 2
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["class" => (isset($context["classNames"]) || array_key_exists("classNames", $context) ? $context["classNames"] : (function () { throw new RuntimeError('Variable "classNames" does not exist.', 2, $this->source); })())]]);
        echo "
    ";
        // line 3
        if (twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "parentCode", [], "any", true, true, false, 3)) {
            // line 4
            echo "        ";
            if ((array_key_exists("userType", $context) && ((isset($context["userType"]) || array_key_exists("userType", $context) ? $context["userType"] : (function () { throw new RuntimeError('Variable "userType" does not exist.', 4, $this->source); })()) === "trainer"))) {
                // line 5
                echo "        <!-- Divider -->
        <hr class=\"my-5\">
        <h5 class=\"mt-0\">Invitation code</h5>
    ";
            }
            // line 9
            echo "        ";
            if ((array_key_exists("userType", $context) && ((isset($context["userType"]) || array_key_exists("userType", $context) ? $context["userType"] : (function () { throw new RuntimeError('Variable "userType" does not exist.', 9, $this->source); })()) === "trainer"))) {
                // line 10
                echo "            <div class=\"col-12\">
                <div class=\"row g-xl-0 align-items-center\">
                    <div class=\"col-lg-4\">
                        <h6 class=\"mb-lg-0\">";
                // line 13
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 13, $this->source); })()), "parentCode", [], "any", false, false, false, 13), 'label');
                echo "</h6>
                    </div>
                    <div class=\"col-lg-8\">
                        ";
                // line 16
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 16, $this->source); })()), "parentCode", [], "any", false, false, false, 16), 'widget', ["attr" => ["value" => (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 16, $this->source); })()), "class" => ""]]);
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 21
                echo "            <div class=\"mb-4\">
                <label for=\"\" class=\"form-label\">";
                // line 22
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 22, $this->source); })()), "parentCode", [], "any", false, false, false, 22), 'label');
                echo "</label>
                <div class=\"input-group input-group-lg\">
                    <span class=\"input-group-text bg-light rounded-start border-0 text-secondary px-3\"><i class=\"fas fa-user\"></i></span>
                    ";
                // line 25
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), "parentCode", [], "any", false, false, false, 25), 'widget', ["attr" => ["value" => (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 25, $this->source); })())]]);
                echo "
                </div>
            </div>
        ";
            }
            // line 29
            echo "        
    ";
        }
        // line 31
        echo "    
    ";
        // line 32
        if ((array_key_exists("userType", $context) && ((isset($context["userType"]) || array_key_exists("userType", $context) ? $context["userType"] : (function () { throw new RuntimeError('Variable "userType" does not exist.', 32, $this->source); })()) === "trainer"))) {
            // line 33
            echo "        <!-- Divider -->
        <hr class=\"my-5\">
        <h5 class=\"mt-0\">Personal information</h5>
    ";
        }
        // line 37
        echo "
    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 38, $this->source); })()), "personne", [], "any", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 39
            echo "        ";
            if ((array_key_exists("userType", $context) && ((isset($context["userType"]) || array_key_exists("userType", $context) ? $context["userType"] : (function () { throw new RuntimeError('Variable "userType" does not exist.', 39, $this->source); })()) === "trainer"))) {
                // line 40
                echo "            <div class=\"col-12\">
                <div class=\"row g-xl-0 align-items-center\">
                    <div class=\"col-lg-4\">
                        <h6 class=\"mb-lg-0\">";
                // line 43
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["item"], 'label');
                echo "</h6>
                    </div>
                    <div class=\"col-lg-8\">
                        ";
                // line 46
                $context["classNames"] = "";
                // line 47
                echo "                        ";
                if ((($context["item"] === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "personne", [], "any", false, false, false, 47), "sexe", [], "any", false, false, false, 47)) || ($context["item"] === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "personne", [], "any", false, false, false, 47), "pays", [], "any", false, false, false, 47)))) {
                    // line 48
                    echo "                            ";
                    $context["classNames"] = "form-select js-choice z-index-9 rounded-3 border-0 bg-light";
                    // line 49
                    echo "                        ";
                }
                // line 50
                echo "                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["item"], 'widget', ["attr" => ["class" => (isset($context["classNames"]) || array_key_exists("classNames", $context) ? $context["classNames"] : (function () { throw new RuntimeError('Variable "classNames" does not exist.', 50, $this->source); })())]]);
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 55
                echo "            <div class=\"mb-4\">
                <label for=\"\" class=\"form-label\">";
                // line 56
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["item"], 'label');
                echo "</label>
                <div class=\"";
                // line 57
                echo (((( !($context["item"] === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "personne", [], "any", false, false, false, 57), "imageFile", [], "any", false, false, false, 57)) &&  !($context["item"] === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "personne", [], "any", false, false, false, 57), "sexe", [], "any", false, false, false, 57))) &&  !($context["item"] === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "personne", [], "any", false, false, false, 57), "pays", [], "any", false, false, false, 57)))) ? ("input-group input-group-lg") : (""));
                echo "\">
                    ";
                // line 58
                if ((( !($context["item"] === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "personne", [], "any", false, false, false, 58), "imageFile", [], "any", false, false, false, 58)) &&  !($context["item"] === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "personne", [], "any", false, false, false, 58), "sexe", [], "any", false, false, false, 58))) &&  !($context["item"] === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "personne", [], "any", false, false, false, 58), "pays", [], "any", false, false, false, 58)))) {
                    // line 59
                    echo "                        <span class=\"input-group-text bg-light rounded-start border-0 text-secondary px-3\"><i class=\"fas fa-arrow-alt-circle-right\"></i></span>
                    ";
                }
                // line 61
                echo "                    ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["item"], 'widget');
                echo "
                </div>
            </div>
        ";
            }
            // line 65
            echo "        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
    ";
        // line 68
        if ((array_key_exists("userType", $context) && ((isset($context["userType"]) || array_key_exists("userType", $context) ? $context["userType"] : (function () { throw new RuntimeError('Variable "userType" does not exist.', 68, $this->source); })()) === "trainer"))) {
            // line 69
            echo "        <!-- Divider -->
        <hr class=\"my-5\">
        <h5 class=\"mt-0\">Login information</h5>
    ";
        }
        // line 73
        echo "    
    ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "email", [], "any", true, true, false, 74)) {
            echo "   
        ";
            // line 75
            if ((array_key_exists("userType", $context) && ((isset($context["userType"]) || array_key_exists("userType", $context) ? $context["userType"] : (function () { throw new RuntimeError('Variable "userType" does not exist.', 75, $this->source); })()) === "trainer"))) {
                // line 76
                echo "            <div class=\"col-12\">
                <div class=\"row g-xl-0 align-items-center\">
                    <div class=\"col-lg-4\">
                        <h6 class=\"mb-lg-0\">";
                // line 79
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 79, $this->source); })()), "email", [], "any", false, false, false, 79), 'label');
                echo "</h6>
                    </div>
                    <div class=\"col-lg-8\">
                        ";
                // line 82
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 82, $this->source); })()), "email", [], "any", false, false, false, 82), 'widget', ["attr" => ["class" => ""]]);
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 87
                echo "            <div class=\"mb-4\">
            <label for=\"\" class=\"form-label\">";
                // line 88
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 88, $this->source); })()), "email", [], "any", false, false, false, 88), 'label');
                echo "*</label>
            <div class=\"input-group input-group-lg\">
                <span class=\"input-group-text bg-light rounded-start border-0 text-secondary px-3\"><i class=\"bi bi-envelope-fill\"></i></span>
                ";
                // line 91
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 91, $this->source); })()), "email", [], "any", false, false, false, 91), 'widget');
                echo "
            </div>
        </div>
        ";
            }
            // line 95
            echo "    ";
        }
        // line 96
        echo "    
    ";
        // line 97
        if (twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "plainPassword", [], "any", true, true, false, 97)) {
            // line 98
            echo "        ";
            if ((array_key_exists("userType", $context) && ((isset($context["userType"]) || array_key_exists("userType", $context) ? $context["userType"] : (function () { throw new RuntimeError('Variable "userType" does not exist.', 98, $this->source); })()) === "trainer"))) {
                // line 99
                echo "            <div class=\"col-12\">
                <div class=\"row g-xl-0 align-items-center\">
                    <div class=\"col-lg-4\">
                        <h6 class=\"mb-lg-0\">";
                // line 102
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 102, $this->source); })()), "plainPassword", [], "any", false, false, false, 102), "first", [], "any", false, false, false, 102), 'label');
                echo "</h6>
                    </div>
                    <div class=\"col-lg-8\">
                        ";
                // line 105
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 105, $this->source); })()), "plainPassword", [], "any", false, false, false, 105), "first", [], "any", false, false, false, 105), 'widget', ["attr" => ["class" => ""]]);
                echo "
                    </div>
                </div>
            </div>
            <div class=\"col-12\">
                <div class=\"row g-xl-0 align-items-center\">
                    <div class=\"col-lg-4\">
                        <h6 class=\"mb-lg-0\">";
                // line 112
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 112, $this->source); })()), "plainPassword", [], "any", false, false, false, 112), "second", [], "any", false, false, false, 112), 'label');
                echo "</h6>
                    </div>
                    <div class=\"col-lg-8\">
                        ";
                // line 115
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 115, $this->source); })()), "plainPassword", [], "any", false, false, false, 115), "second", [], "any", false, false, false, 115), 'widget', ["attr" => ["class" => ""]]);
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 120
                echo "            <div class=\"mb-4\">
                <label for=\"\" class=\"form-label\">";
                // line 121
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 121, $this->source); })()), "plainPassword", [], "any", false, false, false, 121), "first", [], "any", false, false, false, 121), 'label');
                echo "*</label>
                <div class=\"input-group input-group-lg\">
                    <span class=\"input-group-text bg-light rounded-start border-0 text-secondary px-3\"><i class=\"fas fa-lock\"></i></span>
                    ";
                // line 124
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 124, $this->source); })()), "plainPassword", [], "any", false, false, false, 124), "first", [], "any", false, false, false, 124), 'widget');
                echo "
                </div>
            </div>
            <div class=\"mb-4\">
                <label for=\"\" class=\"form-label\">";
                // line 128
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 128, $this->source); })()), "plainPassword", [], "any", false, false, false, 128), "second", [], "any", false, false, false, 128), 'label');
                echo "*</label>
                <div class=\"input-group input-group-lg\">
                    <span class=\"input-group-text bg-light rounded-start border-0 text-secondary px-3\"><i class=\"fas fa-lock\"></i></span>
                    ";
                // line 131
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 131, $this->source); })()), "plainPassword", [], "any", false, false, false, 131), "second", [], "any", false, false, false, 131), 'widget');
                echo "
                </div>
            </div>
        ";
            }
            // line 135
            echo "        
    ";
        }
        // line 137
        echo "    
    ";
        // line 138
        if ((array_key_exists("userType", $context) && ((isset($context["userType"]) || array_key_exists("userType", $context) ? $context["userType"] : (function () { throw new RuntimeError('Variable "userType" does not exist.', 138, $this->source); })()) === "trainer"))) {
            // line 139
            echo "        <!-- Divider -->
        <hr class=\"my-5\">
        <h5 class=\"mt-0\">KYC</h5>
    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "enseignant", [], "any", true, true, false, 144)) {
            // line 145
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 145, $this->source); })()), "enseignant", [], "any", false, false, false, 145));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 146
                echo "            ";
                if ((array_key_exists("userType", $context) && ((isset($context["userType"]) || array_key_exists("userType", $context) ? $context["userType"] : (function () { throw new RuntimeError('Variable "userType" does not exist.', 146, $this->source); })()) === "trainer"))) {
                    // line 147
                    echo "                ";
                    $context["classNames"] = "";
                    // line 148
                    echo "                        ";
                    if ((($context["item"] === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 148, $this->source); })()), "enseignant", [], "any", false, false, false, 148), "discipline", [], "any", false, false, false, 148)) || ($context["item"] === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 148, $this->source); })()), "enseignant", [], "any", false, false, false, 148), "etablissement", [], "any", false, false, false, 148)))) {
                        // line 149
                        echo "                            ";
                        $context["classNames"] = "form-select js-choice z-index-9 rounded-3 border-0 bg-light";
                        // line 150
                        echo "                        ";
                    }
                    // line 151
                    echo "                <div class=\"col-12\">
                    <div class=\"row g-xl-0 align-items-center\">
                        <div class=\"col-lg-4\">
                            <h6 class=\"mb-lg-0\">";
                    // line 154
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["item"], 'label');
                    echo "</h6>
                        </div>
                        <div class=\"col-lg-8\">
                            ";
                    // line 157
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["item"], 'widget', ["attr" => ["class" => (isset($context["classNames"]) || array_key_exists("classNames", $context) ? $context["classNames"] : (function () { throw new RuntimeError('Variable "classNames" does not exist.', 157, $this->source); })())]]);
                    echo "
                        </div>
                    </div>
                </div>
            ";
                } else {
                    // line 162
                    echo "                <div class=\"mb-4\">
                    <label for=\"registration_teacher_enseignant_discipline\" class=\"form-label\">";
                    // line 163
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["item"], 'label');
                    echo "</label>
                    <div class=\"\">
                        ";
                    // line 165
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["item"], 'widget');
                    echo "
                    </div>
                </div>
            ";
                }
                // line 169
                echo "            
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "    ";
        }
        // line 172
        echo "
    ";
        // line 173
        if (twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "eleve", [], "any", true, true, false, 173)) {
            // line 174
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 174, $this->source); })()), "eleve", [], "any", false, false, false, 174));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 175
                echo "            ";
                if ((array_key_exists("userType", $context) && ((isset($context["userType"]) || array_key_exists("userType", $context) ? $context["userType"] : (function () { throw new RuntimeError('Variable "userType" does not exist.', 175, $this->source); })()) === "trainer"))) {
                    // line 176
                    echo "                <div class=\"col-12\">
                    <div class=\"row g-xl-0 align-items-center\">
                        <div class=\"col-lg-4\">
                            <h6 class=\"mb-lg-0\">";
                    // line 179
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["item"], 'label');
                    echo "</h6>
                        </div>
                        <div class=\"col-lg-8\">
                            ";
                    // line 182
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["item"], 'widget', ["attr" => ["class" => ""]]);
                    echo "
                        </div>
                    </div>
                </div>
            ";
                } else {
                    // line 187
                    echo "                <div class=\"mb-4\">
                    <label for=\"\" class=\"form-label\">";
                    // line 188
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["item"], 'label');
                    echo "</label>
                    <div class=\"";
                    // line 189
                    echo ((((( !($context["item"] === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 189, $this->source); })()), "eleve", [], "any", false, false, false, 189), "etablissement", [], "any", false, false, false, 189)) &&  !($context["item"] === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 189, $this->source); })()), "eleve", [], "any", false, false, false, 189), "filiere", [], "any", false, false, false, 189))) &&  !($context["item"] === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 189, $this->source); })()), "eleve", [], "any", false, false, false, 189), "specialite", [], "any", false, false, false, 189))) &&  !($context["item"] === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 189, $this->source); })()), "eleve", [], "any", false, false, false, 189), "classe", [], "any", false, false, false, 189)))) ? ("input-group input-group-lg") : (""));
                    echo "\">
                        ";
                    // line 190
                    if (((( !($context["item"] === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 190, $this->source); })()), "eleve", [], "any", false, false, false, 190), "etablissement", [], "any", false, false, false, 190)) &&  !($context["item"] === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 190, $this->source); })()), "eleve", [], "any", false, false, false, 190), "filiere", [], "any", false, false, false, 190))) &&  !($context["item"] === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 190, $this->source); })()), "eleve", [], "any", false, false, false, 190), "specialite", [], "any", false, false, false, 190))) &&  !($context["item"] === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 190, $this->source); })()), "eleve", [], "any", false, false, false, 190), "classe", [], "any", false, false, false, 190)))) {
                        // line 191
                        echo "                            <span class=\"input-group-text bg-light rounded-start border-0 text-secondary px-3\"><i class=\"fas fa-arrow-alt-circle-right\"></i></span>
                        ";
                    }
                    // line 193
                    echo "                        ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["item"], 'widget');
                    echo "
                    </div>
                </div>
            ";
                }
                // line 197
                echo "            
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            echo "    ";
        }
        // line 200
        echo "    <hr class=\"mt-5\">
    ";
        // line 201
        if (twig_get_attribute($this->env, $this->source, ($context["registrationForm"] ?? null), "agreeTerms", [], "any", true, true, false, 201)) {
            // line 202
            echo "        <!-- Check box -->
        <div class=\"mb-4\">
            <div class=\"form-check\">
                ";
            // line 205
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 205, $this->source); })()), "agreeTerms", [], "any", false, false, false, 205), 'widget');
            echo "
            </div>
        </div>
    ";
        }
        // line 209
        echo "    
    <!-- Button -->
    ";
        // line 211
        if ((array_key_exists("userType", $context) && ((isset($context["userType"]) || array_key_exists("userType", $context) ? $context["userType"] : (function () { throw new RuntimeError('Variable "userType" does not exist.', 211, $this->source); })()) === "trainer"))) {
            // line 212
            echo "        <div class=\"col-12 text-sm-end\">
            <button class=\"btn btn-primary mb-0\">Submit</button>
        </div>
    ";
        } else {
            // line 216
            echo "        <div class=\"align-items-center mt-0\">
            <div class=\"d-grid\">
                <button class=\"btn btn-primary mb-0\" type=\"submit\">Sign Up</button>
            </div>
        </div>
    ";
        }
        // line 222
        echo "
    
";
        // line 224
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 224, $this->source); })()), 'form_end');
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "registration/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  508 => 224,  504 => 222,  496 => 216,  490 => 212,  488 => 211,  484 => 209,  477 => 205,  472 => 202,  470 => 201,  467 => 200,  464 => 199,  457 => 197,  449 => 193,  445 => 191,  443 => 190,  439 => 189,  435 => 188,  432 => 187,  424 => 182,  418 => 179,  413 => 176,  410 => 175,  405 => 174,  403 => 173,  400 => 172,  397 => 171,  390 => 169,  383 => 165,  378 => 163,  375 => 162,  367 => 157,  361 => 154,  356 => 151,  353 => 150,  350 => 149,  347 => 148,  344 => 147,  341 => 146,  336 => 145,  334 => 144,  331 => 143,  325 => 139,  323 => 138,  320 => 137,  316 => 135,  309 => 131,  303 => 128,  296 => 124,  290 => 121,  287 => 120,  279 => 115,  273 => 112,  263 => 105,  257 => 102,  252 => 99,  249 => 98,  247 => 97,  244 => 96,  241 => 95,  234 => 91,  228 => 88,  225 => 87,  217 => 82,  211 => 79,  206 => 76,  204 => 75,  200 => 74,  197 => 73,  191 => 69,  189 => 68,  186 => 67,  179 => 65,  171 => 61,  167 => 59,  165 => 58,  161 => 57,  157 => 56,  154 => 55,  145 => 50,  142 => 49,  139 => 48,  136 => 47,  134 => 46,  128 => 43,  123 => 40,  120 => 39,  116 => 38,  113 => 37,  107 => 33,  105 => 32,  102 => 31,  98 => 29,  91 => 25,  85 => 22,  82 => 21,  74 => 16,  68 => 13,  63 => 10,  60 => 9,  54 => 5,  51 => 4,  49 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set classNames = userType is defined and userType is same as 'trainer' ? 'row g-3' : '' %}
{{ form_start(registrationForm, {'attr': {'class': classNames}}) }}
    {% if registrationForm.parentCode is defined %}
        {% if  userType is defined and userType is same as 'trainer' %}
        <!-- Divider -->
        <hr class=\"my-5\">
        <h5 class=\"mt-0\">Invitation code</h5>
    {% endif %}
        {% if  userType is defined and userType is same as 'trainer' %}
            <div class=\"col-12\">
                <div class=\"row g-xl-0 align-items-center\">
                    <div class=\"col-lg-4\">
                        <h6 class=\"mb-lg-0\">{{ form_label(registrationForm.parentCode) }}</h6>
                    </div>
                    <div class=\"col-lg-8\">
                        {{ form_widget(registrationForm.parentCode, {'attr': {'value': invitation, 'class': ''}}) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"mb-4\">
                <label for=\"\" class=\"form-label\">{{ form_label(registrationForm.parentCode) }}</label>
                <div class=\"input-group input-group-lg\">
                    <span class=\"input-group-text bg-light rounded-start border-0 text-secondary px-3\"><i class=\"fas fa-user\"></i></span>
                    {{ form_widget(registrationForm.parentCode, {'attr': {'value': invitation}}) }}
                </div>
            </div>
        {% endif %}
        
    {% endif %}
    
    {% if  userType is defined and userType is same as 'trainer' %}
        <!-- Divider -->
        <hr class=\"my-5\">
        <h5 class=\"mt-0\">Personal information</h5>
    {% endif %}

    {% for item in registrationForm.personne %}
        {% if  userType is defined and userType is same as 'trainer' %}
            <div class=\"col-12\">
                <div class=\"row g-xl-0 align-items-center\">
                    <div class=\"col-lg-4\">
                        <h6 class=\"mb-lg-0\">{{ form_label(item) }}</h6>
                    </div>
                    <div class=\"col-lg-8\">
                        {% set classNames = '' %}
                        {% if item is same as registrationForm.personne.sexe or item is same as registrationForm.personne.pays %}
                            {% set classNames = 'form-select js-choice z-index-9 rounded-3 border-0 bg-light' %}
                        {% endif %}
                        {{ form_widget(item, {'attr': {'class': classNames}}) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"mb-4\">
                <label for=\"\" class=\"form-label\">{{ form_label(item) }}</label>
                <div class=\"{{  item is not same as registrationForm.personne.imageFile and item is not same as registrationForm.personne.sexe and item is not same as registrationForm.personne.pays ? 'input-group input-group-lg' : '' }}\">
                    {% if item is not same as registrationForm.personne.imageFile and item is not same as registrationForm.personne.sexe and item is not same as registrationForm.personne.pays %}
                        <span class=\"input-group-text bg-light rounded-start border-0 text-secondary px-3\"><i class=\"fas fa-arrow-alt-circle-right\"></i></span>
                    {% endif %}
                    {{ form_widget(item) }}
                </div>
            </div>
        {% endif %}
        
    {% endfor %}

    {% if  userType is defined and userType is same as 'trainer' %}
        <!-- Divider -->
        <hr class=\"my-5\">
        <h5 class=\"mt-0\">Login information</h5>
    {% endif %}
    
    {% if registrationForm.email is defined %}   
        {% if userType is defined and userType is same as 'trainer' %}
            <div class=\"col-12\">
                <div class=\"row g-xl-0 align-items-center\">
                    <div class=\"col-lg-4\">
                        <h6 class=\"mb-lg-0\">{{ form_label(registrationForm.email) }}</h6>
                    </div>
                    <div class=\"col-lg-8\">
                        {{ form_widget(registrationForm.email, {'attr': {'class': ''}}) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"mb-4\">
            <label for=\"\" class=\"form-label\">{{ form_label(registrationForm.email) }}*</label>
            <div class=\"input-group input-group-lg\">
                <span class=\"input-group-text bg-light rounded-start border-0 text-secondary px-3\"><i class=\"bi bi-envelope-fill\"></i></span>
                {{ form_widget(registrationForm.email) }}
            </div>
        </div>
        {% endif %}
    {% endif %}
    
    {% if registrationForm.plainPassword is defined %}
        {% if userType is defined and userType is same as 'trainer' %}
            <div class=\"col-12\">
                <div class=\"row g-xl-0 align-items-center\">
                    <div class=\"col-lg-4\">
                        <h6 class=\"mb-lg-0\">{{ form_label(registrationForm.plainPassword.first) }}</h6>
                    </div>
                    <div class=\"col-lg-8\">
                        {{ form_widget(registrationForm.plainPassword.first, {'attr': {'class': ''}}) }}
                    </div>
                </div>
            </div>
            <div class=\"col-12\">
                <div class=\"row g-xl-0 align-items-center\">
                    <div class=\"col-lg-4\">
                        <h6 class=\"mb-lg-0\">{{ form_label(registrationForm.plainPassword.second) }}</h6>
                    </div>
                    <div class=\"col-lg-8\">
                        {{ form_widget(registrationForm.plainPassword.second, {'attr': {'class': ''}}) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"mb-4\">
                <label for=\"\" class=\"form-label\">{{ form_label(registrationForm.plainPassword.first) }}*</label>
                <div class=\"input-group input-group-lg\">
                    <span class=\"input-group-text bg-light rounded-start border-0 text-secondary px-3\"><i class=\"fas fa-lock\"></i></span>
                    {{ form_widget(registrationForm.plainPassword.first) }}
                </div>
            </div>
            <div class=\"mb-4\">
                <label for=\"\" class=\"form-label\">{{ form_label(registrationForm.plainPassword.second) }}*</label>
                <div class=\"input-group input-group-lg\">
                    <span class=\"input-group-text bg-light rounded-start border-0 text-secondary px-3\"><i class=\"fas fa-lock\"></i></span>
                    {{ form_widget(registrationForm.plainPassword.second) }}
                </div>
            </div>
        {% endif %}
        
    {% endif %}
    
    {% if  userType is defined and userType is same as 'trainer' %}
        <!-- Divider -->
        <hr class=\"my-5\">
        <h5 class=\"mt-0\">KYC</h5>
    {% endif %}

    {% if registrationForm.enseignant is defined %}
        {% for item in registrationForm.enseignant %}
            {% if userType is defined and userType is same as 'trainer' %}
                {% set classNames = '' %}
                        {% if item is same as registrationForm.enseignant.discipline or item is same as registrationForm.enseignant.etablissement %}
                            {% set classNames = 'form-select js-choice z-index-9 rounded-3 border-0 bg-light' %}
                        {% endif %}
                <div class=\"col-12\">
                    <div class=\"row g-xl-0 align-items-center\">
                        <div class=\"col-lg-4\">
                            <h6 class=\"mb-lg-0\">{{ form_label(item) }}</h6>
                        </div>
                        <div class=\"col-lg-8\">
                            {{ form_widget(item, {'attr': {'class': classNames}}) }}
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"mb-4\">
                    <label for=\"registration_teacher_enseignant_discipline\" class=\"form-label\">{{ form_label(item) }}</label>
                    <div class=\"\">
                        {{ form_widget(item) }}
                    </div>
                </div>
            {% endif %}
            
        {% endfor %}
    {% endif %}

    {% if registrationForm.eleve is defined %}
        {% for item in registrationForm.eleve %}
            {% if userType is defined and userType is same as 'trainer' %}
                <div class=\"col-12\">
                    <div class=\"row g-xl-0 align-items-center\">
                        <div class=\"col-lg-4\">
                            <h6 class=\"mb-lg-0\">{{ form_label(item) }}</h6>
                        </div>
                        <div class=\"col-lg-8\">
                            {{ form_widget(item, {'attr': {'class': ''}}) }}
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"mb-4\">
                    <label for=\"\" class=\"form-label\">{{ form_label(item) }}</label>
                    <div class=\"{{ item is not same as registrationForm.eleve.etablissement and item is not same as registrationForm.eleve.filiere and item is not same as registrationForm.eleve.specialite and item is not same as registrationForm.eleve.classe ? 'input-group input-group-lg' : '' }}\">
                        {% if item is not same as registrationForm.eleve.etablissement and item is not same as registrationForm.eleve.filiere and item is not same as registrationForm.eleve.specialite and item is not same as registrationForm.eleve.classe %}
                            <span class=\"input-group-text bg-light rounded-start border-0 text-secondary px-3\"><i class=\"fas fa-arrow-alt-circle-right\"></i></span>
                        {% endif %}
                        {{ form_widget(item) }}
                    </div>
                </div>
            {% endif %}
            
        {% endfor %}
    {% endif %}
    <hr class=\"mt-5\">
    {% if registrationForm.agreeTerms is defined %}
        <!-- Check box -->
        <div class=\"mb-4\">
            <div class=\"form-check\">
                {{ form_widget(registrationForm.agreeTerms) }}
            </div>
        </div>
    {% endif %}
    
    <!-- Button -->
    {% if userType is defined and userType is same as 'trainer' %}
        <div class=\"col-12 text-sm-end\">
            <button class=\"btn btn-primary mb-0\">Submit</button>
        </div>
    {% else %}
        <div class=\"align-items-center mt-0\">
            <div class=\"d-grid\">
                <button class=\"btn btn-primary mb-0\" type=\"submit\">Sign Up</button>
            </div>
        </div>
    {% endif %}

    
{{ form_end(registrationForm) }}", "registration/_form.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\registration\\_form.html.twig");
    }
}
