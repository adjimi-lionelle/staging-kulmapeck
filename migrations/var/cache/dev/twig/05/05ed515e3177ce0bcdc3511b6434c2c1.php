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

/* profile/_profile_content.html.twig */
class __TwigTemplate_4948415f92546657d8282204faecef30 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/_profile_content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/_profile_content.html.twig"));

        // line 1
        echo "    <!-- Edit profile START -->
    <div class=\"card bg-transparent border rounded-3\">
        <!-- Card header -->
        <div class=\"card-header bg-transparent border-bottom\">
            <h3 class=\"card-header-title mb-0\">Edit Profile</h3>
        </div>
        <!-- Card body START -->
        <div class=\"card-body\">
            <!-- Form -->
            ";
        // line 11
        echo "            ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["personneForm"]) || array_key_exists("personneForm", $context) ? $context["personneForm"] : (function () { throw new RuntimeError('Variable "personneForm" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-4"]]);
        echo "
                ";
        // line 12
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["personneForm"]) || array_key_exists("personneForm", $context) ? $context["personneForm"] : (function () { throw new RuntimeError('Variable "personneForm" does not exist.', 12, $this->source); })()), 'errors')) {
            // line 13
            echo "                    <div class=\"alert alert-danger\">";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["personneForm"]) || array_key_exists("personneForm", $context) ? $context["personneForm"] : (function () { throw new RuntimeError('Variable "personneForm" does not exist.', 13, $this->source); })()), 'errors');
            echo "</div>
                ";
        }
        // line 15
        echo "                <!-- Profile picture -->
                <div class=\"col-12 justify-content-center align-items-center\">
                    <label class=\"form-label\">Profile picture</label>
                    <div class=\"d-flex align-items-center\">
                        <label class=\"position-relative me-4\" for=\"personne_form_imageFile\" title=\"Replace this picture\">
                            <!-- Avatar place holder -->
                            <span class=\"avatar avatar-xl\">
                                <img id=\"personne_form_imageFile-preview\" class=\"avatar-img rounded-circle border border-white border-3 shadow\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["personne"]) || array_key_exists("personne", $context) ? $context["personne"] : (function () { throw new RuntimeError('Variable "personne" does not exist.', 22, $this->source); })()), "avatarPath", [], "any", false, false, false, 22)), "html", null, true);
        echo "\" alt=\"\">
                            </span>
                            <!-- Remove btn -->
                            <button type=\"button\" class=\"uploadremove\"><i class=\"bi bi-x text-white\"></i></button>
                        </label>
                        <!-- Upload button -->
                        <label class=\"btn btn-primary-soft mb-0\" for=\"personne_form_imageFile\">Change</label>
                        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["personneForm"]) || array_key_exists("personneForm", $context) ? $context["personneForm"] : (function () { throw new RuntimeError('Variable "personneForm" does not exist.', 29, $this->source); })()), "imageFile", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "d-none"]]);
        echo "
                    </div>
                </div>

                <!-- Full name -->
                <div class=\"col-12\">
                    <label class=\"form-label\">Full name</label>
                    <div class=\"input-group\">
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["personneForm"]) || array_key_exists("personneForm", $context) ? $context["personneForm"] : (function () { throw new RuntimeError('Variable "personneForm" does not exist.', 37, $this->source); })()), "lastName", [], "any", false, false, false, 37), 'widget');
        echo "
                        ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["personneForm"]) || array_key_exists("personneForm", $context) ? $context["personneForm"] : (function () { throw new RuntimeError('Variable "personneForm" does not exist.', 38, $this->source); })()), "firstName", [], "any", false, false, false, 38), 'widget');
        echo "
                    </div>
                </div>

                <!-- Username -->
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Username</label>
                    <div class=\"input-group\">
                        <span class=\"input-group-text\">kulmapeck.com</span>
                        ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["personneForm"]) || array_key_exists("personneForm", $context) ? $context["personneForm"] : (function () { throw new RuntimeError('Variable "personneForm" does not exist.', 47, $this->source); })()), "pseudo", [], "any", false, false, false, 47), 'widget');
        echo "
                    </div>
                </div>

                <!-- Phone number -->
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Phone number</label>
                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["personneForm"]) || array_key_exists("personneForm", $context) ? $context["personneForm"] : (function () { throw new RuntimeError('Variable "personneForm" does not exist.', 54, $this->source); })()), "telephone", [], "any", false, false, false, 54), 'widget');
        echo "
                </div>

                <!-- Location -->
                <div class=\"col-md-12\">
                    <label class=\"form-label\">Location</label>
                    <div class=\"input-group\">
                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["personneForm"]) || array_key_exists("personneForm", $context) ? $context["personneForm"] : (function () { throw new RuntimeError('Variable "personneForm" does not exist.', 61, $this->source); })()), "adresse", [], "any", false, false, false, 61), 'widget');
        echo "
                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["personneForm"]) || array_key_exists("personneForm", $context) ? $context["personneForm"] : (function () { throw new RuntimeError('Variable "personneForm" does not exist.', 62, $this->source); })()), "pays", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "js-choice"]]);
        echo "
                    </div>
                </div>
                <div class=\"col-md-12\">
                    <label class=\"form-label\">Birthday</label>
                    <div class=\"input-group\">
                        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["personneForm"]) || array_key_exists("personneForm", $context) ? $context["personneForm"] : (function () { throw new RuntimeError('Variable "personneForm" does not exist.', 68, $this->source); })()), "bornAt", [], "any", false, false, false, 68), 'widget');
        echo "
                        ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["personneForm"]) || array_key_exists("personneForm", $context) ? $context["personneForm"] : (function () { throw new RuntimeError('Variable "personneForm" does not exist.', 69, $this->source); })()), "lieuNaissance", [], "any", false, false, false, 69), 'widget');
        echo "
                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["personneForm"]) || array_key_exists("personneForm", $context) ? $context["personneForm"] : (function () { throw new RuntimeError('Variable "personneForm" does not exist.', 70, $this->source); })()), "sexe", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "js-choice"]]);
        echo "
                    </div>
                </div>
                
                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["personneForm"]) || array_key_exists("personneForm", $context) ? $context["personneForm"] : (function () { throw new RuntimeError('Variable "personneForm" does not exist.', 74, $this->source); })()), 'rest');
        echo "
                <!-- Save button -->
                <div class=\"d-sm-flex justify-content-end\">
                    <button type=\"submit\" class=\"btn btn-primary mb-0\">Save changes</button>
                </div>
            ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["personneForm"]) || array_key_exists("personneForm", $context) ? $context["personneForm"] : (function () { throw new RuntimeError('Variable "personneForm" does not exist.', 79, $this->source); })()), 'form_end');
        echo "
        </div>
        <!-- Card body END -->
    </div>
    <!-- Edit profile END -->
\t\t\t\t
    <div class=\"row g-4 mt-3\">
        <!-- EMail change START -->
        <div class=\"col-lg-6\">
            <div class=\"card bg-transparent border rounded-3\">
                <!-- Card header -->
                <div class=\"card-header bg-transparent border-bottom\">
                    <h5 class=\"card-header-title mb-0\">Update email</h5>
                </div>
                <!-- Card body -->
                <div class=\"card-body\">
                    <p class=\"alert alert-danger\">Please note this action is irreversible.</span></p>
                    <!-- Email -->
                    ";
        // line 97
        $context["changeEmailUri"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_student_profile_change_email");
        // line 98
        echo "                    ";
        if (((isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 98, $this->source); })()) === null)) {
            // line 99
            echo "                        ";
            $context["changeEmailUri"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_instructor_profile_change_email");
            // line 100
            echo "                    ";
        } elseif ((((isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 100, $this->source); })()) === null) && ((isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 100, $this->source); })()) === null))) {
            // line 101
            echo "                        ";
            $context["changeEmailUri"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_profile_change_email");
            // line 102
            echo "                    ";
        }
        // line 103
        echo "                    <form onsubmit=\"return confirm('Etes-vous sure de vouloir poursuivre cette opération ?')\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["changeEmailUri"]) || array_key_exists("changeEmailUri", $context) ? $context["changeEmailUri"] : (function () { throw new RuntimeError('Variable "changeEmailUri" does not exist.', 103, $this->source); })()), "html", null, true);
        echo "\">
                        <div class=\"row g-4\">
                            <div class=\"col-12\">
                                <label class=\"form-label\">Enter your current email adresse</label>
                                <input class=\"form-control\" required name=\"current_email\" type=\"email\" placeholder=\"Enter current email\">
                            </div>
                            <div class=\"col-12\">
                                <label class=\"form-label\">Enter your new email adresse</label>
                                <input required class=\"form-control\" name=\"new_email\" type=\"email\" placeholder=\"Enter new email\">
                            </div>
                        </div>
                        
                        <div class=\"d-flex justify-content-end mt-4\">
                            <button type=\"submit\" class=\"btn btn-primary mb-0\">Update email</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- EMail change end -->

        <!-- Password change START -->
        <div class=\"col-lg-6\">
            <div class=\"card border bg-transparent rounded-3\">
                <!-- Card header -->
                <div class=\"card-header bg-transparent border-bottom\">
                    <h5 class=\"card-header-title mb-0\">Update password</h5>
                </div>
                
                <div class=\"d-flex justify-content-end mt-4\">
                    <a href=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_forgot_password_request");
        echo "\" class=\"btn btn-primary-soft\">Reset password</a>
                </div>
                <!-- Card body END -->
            </div>
        </div>
        <!-- Password change end -->
    </div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "profile/_profile_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 133,  207 => 103,  204 => 102,  201 => 101,  198 => 100,  195 => 99,  192 => 98,  190 => 97,  169 => 79,  161 => 74,  154 => 70,  150 => 69,  146 => 68,  137 => 62,  133 => 61,  123 => 54,  113 => 47,  101 => 38,  97 => 37,  86 => 29,  76 => 22,  67 => 15,  61 => 13,  59 => 12,  54 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <!-- Edit profile START -->
    <div class=\"card bg-transparent border rounded-3\">
        <!-- Card header -->
        <div class=\"card-header bg-transparent border-bottom\">
            <h3 class=\"card-header-title mb-0\">Edit Profile</h3>
        </div>
        <!-- Card body START -->
        <div class=\"card-body\">
            <!-- Form -->
            {# <form class=\"row g-4\"> #}
            {{ form_start(personneForm, {'attr': {'class': 'row g-4'}}) }}
                {% if form_errors(personneForm) %}
                    <div class=\"alert alert-danger\">{{ form_errors(personneForm) }}</div>
                {% endif %}
                <!-- Profile picture -->
                <div class=\"col-12 justify-content-center align-items-center\">
                    <label class=\"form-label\">Profile picture</label>
                    <div class=\"d-flex align-items-center\">
                        <label class=\"position-relative me-4\" for=\"personne_form_imageFile\" title=\"Replace this picture\">
                            <!-- Avatar place holder -->
                            <span class=\"avatar avatar-xl\">
                                <img id=\"personne_form_imageFile-preview\" class=\"avatar-img rounded-circle border border-white border-3 shadow\" src=\"{{ asset(personne.avatarPath) }}\" alt=\"\">
                            </span>
                            <!-- Remove btn -->
                            <button type=\"button\" class=\"uploadremove\"><i class=\"bi bi-x text-white\"></i></button>
                        </label>
                        <!-- Upload button -->
                        <label class=\"btn btn-primary-soft mb-0\" for=\"personne_form_imageFile\">Change</label>
                        {{ form_widget(personneForm.imageFile, {'attr': {'class': 'd-none'}}) }}
                    </div>
                </div>

                <!-- Full name -->
                <div class=\"col-12\">
                    <label class=\"form-label\">Full name</label>
                    <div class=\"input-group\">
                        {{ form_widget(personneForm.lastName) }}
                        {{ form_widget(personneForm.firstName) }}
                    </div>
                </div>

                <!-- Username -->
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Username</label>
                    <div class=\"input-group\">
                        <span class=\"input-group-text\">kulmapeck.com</span>
                        {{ form_widget(personneForm.pseudo) }}
                    </div>
                </div>

                <!-- Phone number -->
                <div class=\"col-md-6\">
                    <label class=\"form-label\">Phone number</label>
                    {{ form_widget(personneForm.telephone) }}
                </div>

                <!-- Location -->
                <div class=\"col-md-12\">
                    <label class=\"form-label\">Location</label>
                    <div class=\"input-group\">
                        {{ form_widget(personneForm.adresse) }}
                        {{ form_widget(personneForm.pays, {'attr': {'class': 'js-choice'}}) }}
                    </div>
                </div>
                <div class=\"col-md-12\">
                    <label class=\"form-label\">Birthday</label>
                    <div class=\"input-group\">
                        {{ form_widget(personneForm.bornAt) }}
                        {{ form_widget(personneForm.lieuNaissance) }}
                        {{ form_widget(personneForm.sexe, {'attr': {'class': 'js-choice'}}) }}
                    </div>
                </div>
                
                {{ form_rest(personneForm) }}
                <!-- Save button -->
                <div class=\"d-sm-flex justify-content-end\">
                    <button type=\"submit\" class=\"btn btn-primary mb-0\">Save changes</button>
                </div>
            {{ form_end(personneForm) }}
        </div>
        <!-- Card body END -->
    </div>
    <!-- Edit profile END -->
\t\t\t\t
    <div class=\"row g-4 mt-3\">
        <!-- EMail change START -->
        <div class=\"col-lg-6\">
            <div class=\"card bg-transparent border rounded-3\">
                <!-- Card header -->
                <div class=\"card-header bg-transparent border-bottom\">
                    <h5 class=\"card-header-title mb-0\">Update email</h5>
                </div>
                <!-- Card body -->
                <div class=\"card-body\">
                    <p class=\"alert alert-danger\">Please note this action is irreversible.</span></p>
                    <!-- Email -->
                    {% set changeEmailUri = url(\"app_student_profile_change_email\") %}
                    {% if enseignant is same as null %}
                        {% set changeEmailUri = url(\"app_instructor_profile_change_email\") %}
                    {% elseif enseignant is same as null and student is same as null %}
                        {% set changeEmailUri = url(\"app_profile_change_email\") %}
                    {% endif %}
                    <form onsubmit=\"return confirm('Etes-vous sure de vouloir poursuivre cette opération ?')\" method=\"post\" action=\"{{ changeEmailUri }}\">
                        <div class=\"row g-4\">
                            <div class=\"col-12\">
                                <label class=\"form-label\">Enter your current email adresse</label>
                                <input class=\"form-control\" required name=\"current_email\" type=\"email\" placeholder=\"Enter current email\">
                            </div>
                            <div class=\"col-12\">
                                <label class=\"form-label\">Enter your new email adresse</label>
                                <input required class=\"form-control\" name=\"new_email\" type=\"email\" placeholder=\"Enter new email\">
                            </div>
                        </div>
                        
                        <div class=\"d-flex justify-content-end mt-4\">
                            <button type=\"submit\" class=\"btn btn-primary mb-0\">Update email</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- EMail change end -->

        <!-- Password change START -->
        <div class=\"col-lg-6\">
            <div class=\"card border bg-transparent rounded-3\">
                <!-- Card header -->
                <div class=\"card-header bg-transparent border-bottom\">
                    <h5 class=\"card-header-title mb-0\">Update password</h5>
                </div>
                
                <div class=\"d-flex justify-content-end mt-4\">
                    <a href=\"{{ url(\"app_forgot_password_request\") }}\" class=\"btn btn-primary-soft\">Reset password</a>
                </div>
                <!-- Card body END -->
            </div>
        </div>
        <!-- Password change end -->
    </div>", "profile/_profile_content.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\profile\\_profile_content.html.twig");
    }
}
