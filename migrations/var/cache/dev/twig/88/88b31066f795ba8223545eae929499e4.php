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

/* admin/enseignant/request.html.twig */
class __TwigTemplate_ffca27526bcd902f16d420b4959ce937 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/enseignant/request.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/enseignant/request.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/enseignant/request.html.twig", 1);
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

        echo "Instructors request";
        
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

                <!-- Select option -->
                <div class=\"col-md-3\">
                    <!-- Short by filter -->
                    <form>
                        <select id=\"admin_filter_select_courses\" class=\"form-select js-choice border-0 z-index-9\" aria-label=\".form-select-sm\">
                            <option  value=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_enseignant_request");
        echo "\">All</option>
                            <option ";
        // line 38
        echo ((((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 38, $this->source); })()) === "accepted")) ? ("selected") : (""));
        echo " value=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_enseignant_request", ["filter" => "accepted"]);
        echo "\">Accepted</option>
                            <option ";
        // line 39
        echo ((((isset($context["filter"]) || array_key_exists("filter", $context) ? $context["filter"] : (function () { throw new RuntimeError('Variable "filter" does not exist.', 39, $this->source); })()) === "rejected")) ? ("selected") : (""));
        echo " value=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_enseignant_request", ["filter" => "rejected"]);
        echo "\">Rejected</option>
                        </select>
                    </form>
                </div>
            </div>
            <!-- Search and select END -->
        </div>
        <!-- Card header END -->

        <!-- Card body START -->
        <div class=\"card-body\">
            <!-- Course table START -->
            <div class=\"table-responsive border-0 rounded-3\">
                <!-- Table START -->
                <table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
                    <!-- Table head -->
                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"border-0 rounded-start\">Instructor Name</th>
                            <th scope=\"col\" class=\"border-0\">Birthday</th>
                            <th scope=\"col\" class=\"border-0\">Gender</th>
                            <th scope=\"col\" class=\"border-0\">Country</th>
                            <th scope=\"col\" class=\"border-0\">Phone</th>
                            <th scope=\"col\" class=\"border-0\">Email</th>
                            <th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
                        </tr>
                    </thead>
                    
                    <!-- Table body START -->
                    <tbody>
                        ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enseignants"]) || array_key_exists("enseignants", $context) ? $context["enseignants"] : (function () { throw new RuntimeError('Variable "enseignants" does not exist.', 69, $this->source); })()));
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
            // line 70
            echo "                            <tr>
                                <!-- Table data -->
                                <td>
                                    <div class=\"d-flex align-items-center position-relative\">
                                        <!-- Image -->
                                        <div class=\"w-60px\">
                                            <img src=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/enseignants/kyc/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "utilisateur", [], "any", false, false, false, 76), "personne", [], "any", false, false, false, 76), "avatar", [], "any", false, false, false, 76))), "html", null, true);
            echo "\" class=\"rounded\" alt=\"\">
                                        </div>
                                        <!-- Title -->
                                        <h6 class=\"table-responsive-title mb-0 ms-2\">\t
                                            <a href=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_enseignant_show", ["reference" => twig_get_attribute($this->env, $this->source, $context["e"], "reference", [], "any", false, false, false, 80)]), "html", null, true);
            echo "\" class=\"stretched-link\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "utilisateur", [], "any", false, false, false, 80), "personne", [], "any", false, false, false, 80), "nomComplet", [], "any", false, false, false, 80), "html", null, true);
            echo "</a>
                                        </h6>
                                    </div>
                                </td>

                                <!-- Table data -->
                                <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "utilisateur", [], "any", false, false, false, 86), "personne", [], "any", false, false, false, 86), "bornAt", [], "any", false, false, false, 86), "d/m/Y"), "html", null, true);
            echo "</td>

                                <!-- Table data -->
                                <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "utilisateur", [], "any", false, false, false, 89), "personne", [], "any", false, false, false, 89), "sexe", [], "any", false, false, false, 89), "html", null, true);
            echo "</td>

                                <!-- Table data -->
                                <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "utilisateur", [], "any", false, false, false, 92), "personne", [], "any", false, false, false, 92), "pays", [], "any", false, false, false, 92), "name", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>

                                <!-- Table data -->
                                <td>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "utilisateur", [], "any", false, false, false, 95), "personne", [], "any", false, false, false, 95), "telephone", [], "any", false, false, false, 95), "html", null, true);
            echo "</td>

                                <!-- Table data -->
                                <td> <span class=\"badge text-bg-primary\">";
            // line 98
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["e"], "utilisateur", [], "any", false, false, false, 98), "email", [], "any", false, false, false, 98), "html", null, true);
            echo "</span> </td>
                                <!-- Table data -->
                                <td>
                                    ";
            // line 101
            if (twig_get_attribute($this->env, $this->source, $context["e"], "isValidated", [], "any", false, false, false, 101)) {
                // line 102
                echo "                                        <a href=\"#\" class=\"btn btn-success me-1 mb-1 mb-md-0 disabled\">";
                echo ((twig_get_attribute($this->env, $this->source, $context["e"], "isCertified", [], "any", false, false, false, 102)) ? ("Certifié") : ("Junior"));
                echo "</a>
                                        ";
                // line 103
                if (twig_get_attribute($this->env, $this->source, $context["e"], "isCertified", [], "any", false, false, false, 103)) {
                    // line 104
                    echo "                                            <a title=\"Définir comme enseignant junior\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_enseignant_accept_request", ["reference" => twig_get_attribute($this->env, $this->source, $context["e"], "reference", [], "any", false, false, false, 104), "type" => "junior"]), "html", null, true);
                    echo "\" class=\"btn btn-success me-1 mb-1 mb-md-0 btn-sm\">Changer</a>
                                        ";
                } else {
                    // line 106
                    echo "                                            <a title=\"Définir comme enseignant certifié\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_enseignant_accept_request", ["reference" => twig_get_attribute($this->env, $this->source, $context["e"], "reference", [], "any", false, false, false, 106), "type" => "confirmed"]), "html", null, true);
                    echo "\" class=\"btn btn-success me-1 mb-1 mb-md-0 btn-sm\">Changer</a>
                                        ";
                }
                // line 108
                echo "                                    ";
            } elseif (twig_get_attribute($this->env, $this->source, $context["e"], "isRejected", [], "any", false, false, false, 108)) {
                // line 109
                echo "                                        
                                        ";
                // line 110
                echo twig_include($this->env, $context, "admin/enseignant/_accept.html.twig");
                echo "
                                        
                                        <a href=\"#\" class=\"btn btn-secondary btn-sm me-1 mb-1 mb-md-0 disabled\">Rejected</a>
                                    ";
            } else {
                // line 114
                echo "                                        ";
                echo twig_include($this->env, $context, "admin/enseignant/_accept.html.twig");
                echo "
                                        <a href=\"";
                // line 115
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_enseignant_reject_request", ["reference" => twig_get_attribute($this->env, $this->source, $context["e"], "reference", [], "any", false, false, false, 115)]), "html", null, true);
                echo "\" class=\"btn btn-secondary-soft btn-sm me-1 mb-1 mb-lg-0\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-reject-request-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["e"], "id", [], "any", false, false, false, 115), "html", null, true);
                echo "\">Reject</a>
                                    ";
            }
            // line 117
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_enseignant_show", ["reference" => twig_get_attribute($this->env, $this->source, $context["e"], "reference", [], "any", false, false, false, 117)]), "html", null, true);
            echo "\" class=\"btn btn-primary-soft btn-sm me-1 mb-0\">View App</a>
                                </td>
                            </tr>
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
            // line 121
            echo "                            <tr><td colspan=\"7\">No data found</td></tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "                    </tbody>
                    <!-- Table body END -->
                </table>
                <!-- Table END -->
            </div>
            <!-- Course table END -->
        </div>
        <!-- Card body END -->

        <!-- Card footer START -->
        <div class=\"card-footer bg-transparent pt-0\">
            <!-- Pagination START -->
            <div class=\"d-sm-flex justify-content-sm-between align-items-sm-center\">
                <p class=\"mb-0 text-center text-sm-start\"></p>
                ";
        // line 137
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["enseignants"]) || array_key_exists("enseignants", $context) ? $context["enseignants"] : (function () { throw new RuntimeError('Variable "enseignants" does not exist.', 137, $this->source); })()));
        echo "
            </div>
            <!-- Pagination END -->
        </div>
        <!-- Card footer END -->
    </div>
    <!-- Card END -->  
    
    
    ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["enseignants"]) || array_key_exists("enseignants", $context) ? $context["enseignants"] : (function () { throw new RuntimeError('Variable "enseignants" does not exist.', 146, $this->source); })()));
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
            // line 147
            echo "        ";
            echo twig_include($this->env, $context, "admin/enseignant/_reject_modal.html.twig");
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/enseignant/request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  394 => 149,  377 => 147,  360 => 146,  348 => 137,  332 => 123,  325 => 121,  307 => 117,  300 => 115,  295 => 114,  288 => 110,  285 => 109,  282 => 108,  276 => 106,  270 => 104,  268 => 103,  263 => 102,  261 => 101,  255 => 98,  249 => 95,  243 => 92,  237 => 89,  231 => 86,  220 => 80,  213 => 76,  205 => 70,  187 => 69,  152 => 39,  146 => 38,  142 => 37,  127 => 25,  114 => 14,  104 => 13,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block pageTitle %}Instructors request{% endblock %}

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

                <!-- Select option -->
                <div class=\"col-md-3\">
                    <!-- Short by filter -->
                    <form>
                        <select id=\"admin_filter_select_courses\" class=\"form-select js-choice border-0 z-index-9\" aria-label=\".form-select-sm\">
                            <option  value=\"{{ path('app_admin_enseignant_request') }}\">All</option>
                            <option {{ filter is same as 'accepted' ? 'selected' : '' }} value=\"{{ path('app_admin_enseignant_request', {filter: 'accepted'}) }}\">Accepted</option>
                            <option {{ filter is same as 'rejected' ? 'selected' : '' }} value=\"{{ path('app_admin_enseignant_request', {filter: 'rejected'}) }}\">Rejected</option>
                        </select>
                    </form>
                </div>
            </div>
            <!-- Search and select END -->
        </div>
        <!-- Card header END -->

        <!-- Card body START -->
        <div class=\"card-body\">
            <!-- Course table START -->
            <div class=\"table-responsive border-0 rounded-3\">
                <!-- Table START -->
                <table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
                    <!-- Table head -->
                    <thead>
                        <tr>
                            <th scope=\"col\" class=\"border-0 rounded-start\">Instructor Name</th>
                            <th scope=\"col\" class=\"border-0\">Birthday</th>
                            <th scope=\"col\" class=\"border-0\">Gender</th>
                            <th scope=\"col\" class=\"border-0\">Country</th>
                            <th scope=\"col\" class=\"border-0\">Phone</th>
                            <th scope=\"col\" class=\"border-0\">Email</th>
                            <th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
                        </tr>
                    </thead>
                    
                    <!-- Table body START -->
                    <tbody>
                        {% for e in enseignants %}
                            <tr>
                                <!-- Table data -->
                                <td>
                                    <div class=\"d-flex align-items-center position-relative\">
                                        <!-- Image -->
                                        <div class=\"w-60px\">
                                            <img src=\"{{ asset('uploads/images/enseignants/kyc/' ~ e.utilisateur.personne.avatar) }}\" class=\"rounded\" alt=\"\">
                                        </div>
                                        <!-- Title -->
                                        <h6 class=\"table-responsive-title mb-0 ms-2\">\t
                                            <a href=\"{{ path('app_admin_enseignant_show', {reference: e.reference}) }}\" class=\"stretched-link\">{{ e.utilisateur.personne.nomComplet }}</a>
                                        </h6>
                                    </div>
                                </td>

                                <!-- Table data -->
                                <td>{{ e.utilisateur.personne.bornAt|date('d/m/Y') }}</td>

                                <!-- Table data -->
                                <td>{{ e.utilisateur.personne.sexe }}</td>

                                <!-- Table data -->
                                <td>{{ e.utilisateur.personne.pays.name }}</td>

                                <!-- Table data -->
                                <td>{{ e.utilisateur.personne.telephone }}</td>

                                <!-- Table data -->
                                <td> <span class=\"badge text-bg-primary\">{{ e.utilisateur.email }}</span> </td>
                                <!-- Table data -->
                                <td>
                                    {% if e.isValidated %}
                                        <a href=\"#\" class=\"btn btn-success me-1 mb-1 mb-md-0 disabled\">{{e.isCertified ? \"Certifié\" : \"Junior\"}}</a>
                                        {% if e.isCertified %}
                                            <a title=\"Définir comme enseignant junior\" href=\"{{ path('app_admin_enseignant_accept_request', {reference: e.reference, type: 'junior'}) }}\" class=\"btn btn-success me-1 mb-1 mb-md-0 btn-sm\">Changer</a>
                                        {% else %}
                                            <a title=\"Définir comme enseignant certifié\" href=\"{{ path('app_admin_enseignant_accept_request', {reference: e.reference, type: 'confirmed'}) }}\" class=\"btn btn-success me-1 mb-1 mb-md-0 btn-sm\">Changer</a>
                                        {% endif %}
                                    {% elseif e.isRejected %}
                                        
                                        {{ include(\"admin/enseignant/_accept.html.twig\") }}
                                        
                                        <a href=\"#\" class=\"btn btn-secondary btn-sm me-1 mb-1 mb-md-0 disabled\">Rejected</a>
                                    {% else %}
                                        {{ include(\"admin/enseignant/_accept.html.twig\") }}
                                        <a href=\"{{ path('app_admin_enseignant_reject_request', {reference: e.reference}) }}\" class=\"btn btn-secondary-soft btn-sm me-1 mb-1 mb-lg-0\" data-bs-toggle=\"modal\" data-bs-target=\"#modal-reject-request-{{ e.id }}\">Reject</a>
                                    {% endif %}
                                    <a href=\"{{ path('app_admin_enseignant_show', {reference: e.reference}) }}\" class=\"btn btn-primary-soft btn-sm me-1 mb-0\">View App</a>
                                </td>
                            </tr>
                        {% else %}
                            <tr><td colspan=\"7\">No data found</td></tr>
                        {% endfor %}
                    </tbody>
                    <!-- Table body END -->
                </table>
                <!-- Table END -->
            </div>
            <!-- Course table END -->
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
    
    
    {% for e in enseignants %}
        {{ include(\"admin/enseignant/_reject_modal.html.twig\") }}
    {% endfor %}

{% endblock %}
", "admin/enseignant/request.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\enseignant\\request.html.twig");
    }
}
