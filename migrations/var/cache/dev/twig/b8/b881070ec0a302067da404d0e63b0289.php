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

/* admin/enseignant/index.html.twig */
class __TwigTemplate_b78fea2c1a0c9aae5a223a79c6a34e38 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageTitle' => [$this, 'block_pageTitle'],
            'script' => [$this, 'block_script'],
            'mainContent' => [$this, 'block_mainContent'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/enseignant/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/enseignant/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/enseignant/index.html.twig", 1);
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

        echo "Instructors";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 6
        echo "    <script>
\t\t\$('#admin_filter_select_courses').on('change', (e) => {
\t\t\twindow.location.href = \$(e.currentTarget).val()
\t\t})
\t</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 13
    public function block_mainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        // line 14
        echo "
    <!-- Card START -->
    <div class=\"card bg-transparent border\">

        <!-- Card header START -->
        <div class=\"card-header bg-light border-bottom\">
            <!-- Search and select START -->
            <div class=\"row g-3 align-items-center justify-content-between\">
                <!-- Search bar -->
                <div class=\"col-md-8\">
                    <form class=\"rounded position-relative\" method=\"get\">
                        <input value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control bg-body\" type=\"search\" name=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                        <button class=\"bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset\" type=\"submit\">
                            <i class=\"fas fa-search fs-6 \"></i>
                        </button>
                    </form>
                </div>

                
            </div>
            <!-- Search and select END -->
        </div>
        <!-- Card header END -->

        <!-- Card body START -->
        <div class=\"card-body px-0\">
            <div class=\"row g-4\">

                ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enseignants"]) || array_key_exists("enseignants", $context) ? $context["enseignants"] : (function () { throw new RuntimeError('Variable "enseignants" does not exist.', 42, $this->source); })()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["e"]) {
            // line 43
            echo "                    
                    <!-- Card item START -->
                    <div class=\"col-md-6 col-xxl-4\">
                        <div class=\"card bg-transparent border h-100\"> 
                            <!-- Card header -->
                            <div class=\"card-header bg-transparent border-bottom d-flex align-items-sm-center justify-content-between\">
                                <div class=\"d-sm-flex align-items-center\">
                                    <!-- Avatar -->
                                    <div class=\"avatar avatar-md flex-shrink-0\">
                                        <img class=\"avatar-img rounded-circle\" src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "utilisateur", [], "any", false, false, false, 52), "personne", [], "any", false, false, false, 52), "avatarPath", [], "any", false, false, false, 52)), "html", null, true);
            echo "\" alt=\"avatar\">
                                    </div>
                                    <!-- Info -->
                                    <div class=\"ms-0 ms-sm-2 mt-2 mt-sm-0\">
                                        <h5 class=\"mb-0\"><a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_enseignant_show", ["reference" => twig_get_attribute($this->env, $this->source, $context["e"], "reference", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "utilisateur", [], "any", false, false, false, 56), "personne", [], "any", false, false, false, 56), "nomComplet", [], "any", false, false, false, 56), "html", null, true);
            echo "</a></h5>
                                        <p class=\"mb-0 small\">";
            // line 57
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "discipline", [], "any", false, true, false, 57), "name", [], "any", true, true, false, 57)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "discipline", [], "any", false, true, false, 57), "name", [], "any", false, false, false, 57), "")) : ("")), "html", null, true);
            echo "</p>
                                    </div>
                                </div>

                                <!-- Edit dropdown -->
                                <div class=\"dropdown\">
                                    <a href=\"#\" class=\"btn btn-sm btn-light btn-round small mb-0\" role=\"button\" id=\"dropdownShare1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <i class=\"bi bi-three-dots fa-fw\"></i>
                                    </a>
                                    <!-- dropdown button -->
                                    <ul class=\"dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded\" aria-labelledby=\"dropdownShare1\">
                                        <li><a class=\"dropdown-item\" href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_enseignant_show", ["reference" => twig_get_attribute($this->env, $this->source, $context["e"], "reference", [], "any", false, false, false, 68)]), "html", null, true);
            echo "\"><i class=\"bi bi-pencil-square fa-fw me-2\"></i>Show</a></li>
                                        <li>
                                            ";
            // line 70
            echo twig_include($this->env, $context, "admin/enseignant/_delete_form.html.twig", ["enseignant" => $context["e"], "classes" => "dropdown-item", "icon" => "<i class='fas fa-trash fa-fw'></i>"]);
            echo "
                                        </li>
                                        ";
            // line 72
            if ( !twig_get_attribute($this->env, $this->source, $context["e"], "isValidated", [], "any", false, false, false, 72)) {
                // line 73
                echo "                                            <li><a class=\"dropdown-item\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_enseignant_accept_request", ["reference" => twig_get_attribute($this->env, $this->source, $context["e"], "reference", [], "any", false, false, false, 73)]), "html", null, true);
                echo "\"><i class=\"bi bi-pencil-square fa-fw me-2\"></i>Accept</a></li>
                                        ";
            } elseif ( !twig_get_attribute($this->env, $this->source,             // line 74
$context["e"], "isRejected", [], "any", false, false, false, 74)) {
                // line 75
                echo "                                            <li><a class=\"dropdown-item\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_enseignant_reject_request", ["reference" => twig_get_attribute($this->env, $this->source, $context["e"], "reference", [], "any", false, false, false, 75)]), "html", null, true);
                echo "\"><i class=\"bi bi-pencil-square fa-fw me-2\"></i>Reject</a></li>
                                        ";
            }
            // line 77
            echo "                                    </ul>
                                </div>
                            </div>

                            <div class=\"card-body\">
                                <!-- Total students -->
                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"icon-md bg-orange bg-opacity-10 text-orange rounded-circle flex-shrink-0\"><i class=\"fas fa-users fa-fw\"></i></div>
                                        <h6 class=\"mb-0 ms-2 fw-light\">Networks</h6>
                                    </div>
                                    <span class=\"mb-0 fw-bold\">";
            // line 88
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "utilisateur", [], "any", false, false, false, 88), "personne", [], "any", false, false, false, 88), "invites", [], "any", false, false, false, 88)) > 10)) ? (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "utilisateur", [], "any", false, false, false, 88), "personne", [], "any", false, false, false, 88), "invites", [], "any", false, false, false, 88))) : (("0" . twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "utilisateur", [], "any", false, false, false, 88), "personne", [], "any", false, false, false, 88), "invites", [], "any", false, false, false, 88))))), "html", null, true);
            echo "</span>
                                </div>

                                <!-- Total courses -->
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"icon-md bg-purple bg-opacity-10 text-purple rounded-circle flex-shrink-0\"><i class=\"fas fa-book fa-fw\"></i></div>
                                        <h6 class=\"mb-0 ms-2 fw-light\">Total Courses</h6>
                                    </div>
                                    <span class=\"mb-0 fw-bold\">";
            // line 97
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "cours", [], "any", false, false, false, 97)) > 10)) ? (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "cours", [], "any", false, false, false, 97))) : (("0" . twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "cours", [], "any", false, false, false, 97))))), "html", null, true);
            echo "</span>
                                </div>
                            </div>

                            <!-- Card footer -->
                            <div class=\"card-footer bg-transparent border-top\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <!-- Rating star -->
                                    <ul class=\"list-inline mb-0\">
                                        ";
            // line 106
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["e"], "review", [], "any", false, false, false, 106)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 107
                echo "                                            <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo "                                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["e"], "review", [], "any", false, false, false, 109) < 5)) {
                // line 110
                echo "                                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(twig_get_attribute($this->env, $this->source, $context["e"], "review", [], "any", false, false, false, 110), 5));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 111
                    echo "                                                <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "                                        ";
            }
            // line 114
            echo "                                    </ul>
                                    <!-- Message button -->
                                    <a href=\"#\" class=\"btn btn-link text-body p-0 mb-0\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"\" data-bs-original-title=\"Message\" aria-label=\"Message\">
                                        <i class=\"bi bi-envelope-fill\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->
                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 125
            echo "                    <div class=\"text-center\">
                        <h3>Liste vide</h3>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "
            </div>
        </div>
        <!-- Card body END -->

        <!-- Card footer START -->
        <div class=\"card-footer bg-transparent pt-0\">
            <!-- Pagination START -->
            <div class=\"d-sm-flex justify-content-sm-between align-items-sm-center\">
                <p class=\"mb-0 text-center text-sm-start\"></p>
                ";
        // line 139
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["enseignants"]) || array_key_exists("enseignants", $context) ? $context["enseignants"] : (function () { throw new RuntimeError('Variable "enseignants" does not exist.', 139, $this->source); })()));
        echo "
            </div>
            <!-- Pagination END -->
        </div>
        <!-- Card footer END -->
    </div>
    <!-- Card END -->  
    
    
    <!-- Modal START -->
    <div class=\"modal fade\" id=\"appDetail\" tabindex=\"-1\" aria-labelledby=\"appDetaillabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered modal-lg\">
            <div class=\"modal-content\">
                
                <!-- Modal header -->
                <div class=\"modal-header bg-dark\">
                    <h5 class=\"modal-title text-white\" id=\"appDetaillabel\">Applicant details</h5>
                    <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
                </div>

                <!-- Modal body -->
                <div class=\"modal-body p-5\">
                    <!-- Name -->
                    <span class=\"small\">Applicant Name:</span>
                    <h6 class=\"mb-3 applicant-name\">Jacqueline Miller</h6>

                    <!-- Email -->
                    <span class=\"small\">Applicant Email id:</span>
                    <h6 class=\"mb-3 applicant-email\">example@gmail.com</h6>

                    <!-- Phone number -->
                    <span class=\"small\">Applicant Phone number:</span>
                    <h6 class=\"mb-3 applicant-phone\">+123 456 789 10</h6>

                    <!-- Summary -->
                    <span class=\"small\">Summary:</span>
                    <div class=\"applicant-detail\"></div>    
                </div>

                <!-- Modal footer -->
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
                </div>
            </div>
        </div>
    </div>   
    <!-- Modal END -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/enseignant/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 139,  326 => 129,  317 => 125,  294 => 114,  291 => 113,  284 => 111,  279 => 110,  276 => 109,  269 => 107,  265 => 106,  253 => 97,  241 => 88,  228 => 77,  222 => 75,  220 => 74,  215 => 73,  213 => 72,  208 => 70,  203 => 68,  189 => 57,  183 => 56,  176 => 52,  165 => 43,  147 => 42,  127 => 25,  114 => 14,  104 => 13,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block pageTitle %}Instructors{% endblock %}

{% block script %}
    <script>
\t\t\$('#admin_filter_select_courses').on('change', (e) => {
\t\t\twindow.location.href = \$(e.currentTarget).val()
\t\t})
\t</script>
{% endblock %}

{% block mainContent %}

    <!-- Card START -->
    <div class=\"card bg-transparent border\">

        <!-- Card header START -->
        <div class=\"card-header bg-light border-bottom\">
            <!-- Search and select START -->
            <div class=\"row g-3 align-items-center justify-content-between\">
                <!-- Search bar -->
                <div class=\"col-md-8\">
                    <form class=\"rounded position-relative\" method=\"get\">
                        <input value=\"{{ search }}\" class=\"form-control bg-body\" type=\"search\" name=\"search\" placeholder=\"Search\" aria-label=\"Search\">
                        <button class=\"bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset\" type=\"submit\">
                            <i class=\"fas fa-search fs-6 \"></i>
                        </button>
                    </form>
                </div>

                
            </div>
            <!-- Search and select END -->
        </div>
        <!-- Card header END -->

        <!-- Card body START -->
        <div class=\"card-body px-0\">
            <div class=\"row g-4\">

                {% for e in enseignants %}
                    
                    <!-- Card item START -->
                    <div class=\"col-md-6 col-xxl-4\">
                        <div class=\"card bg-transparent border h-100\"> 
                            <!-- Card header -->
                            <div class=\"card-header bg-transparent border-bottom d-flex align-items-sm-center justify-content-between\">
                                <div class=\"d-sm-flex align-items-center\">
                                    <!-- Avatar -->
                                    <div class=\"avatar avatar-md flex-shrink-0\">
                                        <img class=\"avatar-img rounded-circle\" src=\"{{asset(e.utilisateur.personne.avatarPath)}}\" alt=\"avatar\">
                                    </div>
                                    <!-- Info -->
                                    <div class=\"ms-0 ms-sm-2 mt-2 mt-sm-0\">
                                        <h5 class=\"mb-0\"><a href=\"{{ path('app_admin_enseignant_show', {reference: e.reference}) }}\">{{ e.utilisateur.personne.nomComplet }}</a></h5>
                                        <p class=\"mb-0 small\">{{ e.discipline.name|default('') }}</p>
                                    </div>
                                </div>

                                <!-- Edit dropdown -->
                                <div class=\"dropdown\">
                                    <a href=\"#\" class=\"btn btn-sm btn-light btn-round small mb-0\" role=\"button\" id=\"dropdownShare1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <i class=\"bi bi-three-dots fa-fw\"></i>
                                    </a>
                                    <!-- dropdown button -->
                                    <ul class=\"dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded\" aria-labelledby=\"dropdownShare1\">
                                        <li><a class=\"dropdown-item\" href=\"{{ path('app_admin_enseignant_show', {reference: e.reference}) }}\"><i class=\"bi bi-pencil-square fa-fw me-2\"></i>Show</a></li>
                                        <li>
                                            {{ include('admin/enseignant/_delete_form.html.twig', {enseignant: e, classes: 'dropdown-item', icon: \"<i class='fas fa-trash fa-fw'></i>\"}) }}
                                        </li>
                                        {% if not e.isValidated %}
                                            <li><a class=\"dropdown-item\" href=\"{{ path('app_admin_enseignant_accept_request', {reference: e.reference}) }}\"><i class=\"bi bi-pencil-square fa-fw me-2\"></i>Accept</a></li>
                                        {% elseif not e.isRejected %}
                                            <li><a class=\"dropdown-item\" href=\"{{ path('app_admin_enseignant_reject_request', {reference: e.reference}) }}\"><i class=\"bi bi-pencil-square fa-fw me-2\"></i>Reject</a></li>
                                        {% endif %}
                                    </ul>
                                </div>
                            </div>

                            <div class=\"card-body\">
                                <!-- Total students -->
                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"icon-md bg-orange bg-opacity-10 text-orange rounded-circle flex-shrink-0\"><i class=\"fas fa-users fa-fw\"></i></div>
                                        <h6 class=\"mb-0 ms-2 fw-light\">Networks</h6>
                                    </div>
                                    <span class=\"mb-0 fw-bold\">{{ e.utilisateur.personne.invites|length > 10 ? e.utilisateur.personne.invites|length : '0' ~ e.utilisateur.personne.invites|length }}</span>
                                </div>

                                <!-- Total courses -->
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"icon-md bg-purple bg-opacity-10 text-purple rounded-circle flex-shrink-0\"><i class=\"fas fa-book fa-fw\"></i></div>
                                        <h6 class=\"mb-0 ms-2 fw-light\">Total Courses</h6>
                                    </div>
                                    <span class=\"mb-0 fw-bold\">{{ e.cours|length > 10 ? e.cours|length : '0' ~ e.cours|length }}</span>
                                </div>
                            </div>

                            <!-- Card footer -->
                            <div class=\"card-footer bg-transparent border-top\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <!-- Rating star -->
                                    <ul class=\"list-inline mb-0\">
                                        {% for i in 1..e.review %}
                                            <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                        {% endfor %}
                                        {% if e.review < 5 %}
                                            {% for i in e.review..5 %}
                                                <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                                            {% endfor %}
                                        {% endif %}
                                    </ul>
                                    <!-- Message button -->
                                    <a href=\"#\" class=\"btn btn-link text-body p-0 mb-0\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"\" data-bs-original-title=\"Message\" aria-label=\"Message\">
                                        <i class=\"bi bi-envelope-fill\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->
                {% else %}
                    <div class=\"text-center\">
                        <h3>Liste vide</h3>
                    </div>
                {% endfor %}

            </div>
        </div>
        <!-- Card body END -->

        <!-- Card footer START -->
        <div class=\"card-footer bg-transparent pt-0\">
            <!-- Pagination START -->
            <div class=\"d-sm-flex justify-content-sm-between align-items-sm-center\">
                <p class=\"mb-0 text-center text-sm-start\"></p>
                {{ knp_pagination_render(enseignants) }}
            </div>
            <!-- Pagination END -->
        </div>
        <!-- Card footer END -->
    </div>
    <!-- Card END -->  
    
    
    <!-- Modal START -->
    <div class=\"modal fade\" id=\"appDetail\" tabindex=\"-1\" aria-labelledby=\"appDetaillabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered modal-lg\">
            <div class=\"modal-content\">
                
                <!-- Modal header -->
                <div class=\"modal-header bg-dark\">
                    <h5 class=\"modal-title text-white\" id=\"appDetaillabel\">Applicant details</h5>
                    <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
                </div>

                <!-- Modal body -->
                <div class=\"modal-body p-5\">
                    <!-- Name -->
                    <span class=\"small\">Applicant Name:</span>
                    <h6 class=\"mb-3 applicant-name\">Jacqueline Miller</h6>

                    <!-- Email -->
                    <span class=\"small\">Applicant Email id:</span>
                    <h6 class=\"mb-3 applicant-email\">example@gmail.com</h6>

                    <!-- Phone number -->
                    <span class=\"small\">Applicant Phone number:</span>
                    <h6 class=\"mb-3 applicant-phone\">+123 456 789 10</h6>

                    <!-- Summary -->
                    <span class=\"small\">Summary:</span>
                    <div class=\"applicant-detail\"></div>    
                </div>

                <!-- Modal footer -->
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
                </div>
            </div>
        </div>
    </div>   
    <!-- Modal END -->

{% endblock %}
", "admin/enseignant/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\enseignant\\index.html.twig");
    }
}
