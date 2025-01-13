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

/* admin/eleve/index.html.twig */
class __TwigTemplate_798c80d7c781ed4fdea5e7f7a94dab39 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageTitle' => [$this, 'block_pageTitle'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/eleve/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/eleve/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/eleve/index.html.twig", 1);
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

        echo "Students ";
        echo (((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 3, $this->source); })())) ? ((("<br><small>Search Results for key : <b>" . (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 3, $this->source); })())) . "</b></small>")) : (""));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_mainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        // line 6
        echo "
    <div class=\"card bg-transparent\">
        <!-- Card header START -->
        <div class=\"card-header bg-transparent border-bottom px-0\">
            <!-- Search and select START -->
            <div class=\"row g-3 align-items-center justify-content-between\">

                <!-- Search bar -->
                <div class=\"col-md-8\">
                    <form method=\"get\" action=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_admin_eleve_index");
        echo "\" class=\"rounded position-relative\">
                        <input value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control bg-transparent\" name=\"search\" required type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
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
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["eleves"]) || array_key_exists("eleves", $context) ? $context["eleves"] : (function () { throw new RuntimeError('Variable "eleves" does not exist.', 30, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 31
            echo "                    
                    <!-- Card item START -->
                    <div class=\"col-md-6 col-xxl-4\">
                        <div class=\"card bg-transparent border h-100\"> 
                            <!-- Card header -->
                            <div class=\"card-header bg-transparent border-bottom d-flex justify-content-between\">
                                <div class=\"d-sm-flex align-items-center\">
                                    <!-- Avatar -->
                                    <div class=\"avatar avatar-md flex-shrink-0\">
                                        <img class=\"avatar-img rounded-circle\" src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/eleves/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "utilisateur", [], "any", false, false, false, 40), "personne", [], "any", false, false, false, 40), "avatar", [], "any", false, false, false, 40))), "html", null, true);
            echo "\" alt=\"avatar\">
                                    </div>
                                    <!-- Info -->
                                    <div class=\"ms-0 ms-sm-2 mt-2 mt-sm-0\">
                                        <h5 class=\"mb-0\"><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_eleve_show", ["reference" => twig_get_attribute($this->env, $this->source, $context["eleve"], "reference", [], "any", false, false, false, 44)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "utilisateur", [], "any", false, false, false, 44), "personne", [], "any", false, false, false, 44), "nomComplet", [], "any", false, false, false, 44)), "truncate", [15], "method", false, false, false, 44), "html", null, true);
            echo "</a></h5>
                                        <span class=\"text-body small\"><i class=\"fas fa-fw fa-map-marker-alt me-1 mt-1\"></i>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "utilisateur", [], "any", false, false, false, 45), "personne", [], "any", false, false, false, 45), "adresse", [], "any", false, false, false, 45), "html", null, true);
            echo "</span>
                                    </div>
                                </div>

                                <!-- Edit dropdown -->
                                <div class=\"dropdown text-end\">
                                    <a href=\"#\" class=\"btn btn-sm btn-light btn-round small mb-0\" role=\"button\" id=\"dropdownShare2\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <i class=\"bi bi-three-dots fa-fw\"></i>
                                    </a>
                                    <!-- dropdown button -->
                                    <ul class=\"dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded\" aria-labelledby=\"dropdownShare2\">
                                        <li><a class=\"dropdown-item\" href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_eleve_show", ["reference" => twig_get_attribute($this->env, $this->source, $context["eleve"], "reference", [], "any", false, false, false, 56)]), "html", null, true);
            echo "\"><i class=\"bi bi-eye fa-fw me-2\"></i>Profile</a></li>
                                        <li>
                                            ";
            // line 58
            echo twig_include($this->env, $context, "admin/eleve/_delete_form.html.twig");
            echo "
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class=\"card-body\">
                                <!-- Payments -->
                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"icon-md bg-success bg-opacity-10 text-success rounded-circle flex-shrink-0\"><i class=\"bi bi-currency-dollar fa-fw\"></i></div>
                                        <h6 class=\"mb-0 ms-2 fw-light\">Payments</h6>
                                    </div>
                                    ";
            // line 71
            $context["totalAmount"] = 0;
            // line 72
            echo "\t\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["eleve"], "payments", [], "any", false, false, false, 72));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 73
                echo "\t\t\t\t\t\t\t\t\t\t";
                $context["totalAmount"] = ((isset($context["totalAmount"]) || array_key_exists("totalAmount", $context) ? $context["totalAmount"] : (function () { throw new RuntimeError('Variable "totalAmount" does not exist.', 73, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["p"], "amount", [], "any", false, false, false, 73));
                // line 74
                echo "\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                                    <span class=\"mb-0 fw-bold\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["totalAmount"]) || array_key_exists("totalAmount", $context) ? $context["totalAmount"] : (function () { throw new RuntimeError('Variable "totalAmount" does not exist.', 75, $this->source); })()), 2), "html", null, true);
            echo " XAF</span>
                                </div>

                                <!-- Total courses -->
                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"icon-md bg-purple bg-opacity-10 text-purple rounded-circle flex-shrink-0\"><i class=\"fas fa-book fa-fw\"></i></div>
                                        <h6 class=\"mb-0 ms-2 fw-light\">Total Course</h6>
                                    </div>
                                    <span class=\"mb-0 fw-bold\">";
            // line 84
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eleve"], "cours", [], "any", false, false, false, 84)), "html", null, true);
            echo "</span>
                                </div>

                                <!-- Total courses -->
                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"icon-md bg-purple bg-opacity-10 text-primary rounded-circle flex-shrink-0\"><i class=\"fas fa-book-open fa-fw\"></i></div>
                                        <h6 class=\"mb-0 ms-2 fw-light\">Total Formations</h6>
                                    </div>
                                    <span class=\"mb-0 fw-bold\">";
            // line 93
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eleve"], "formations", [], "any", false, false, false, 93)), "html", null, true);
            echo "</span>
                                </div>
                                
                                <!-- Progress -->
                                <div class=\"overflow-hidden\">
                                    ";
            // line 98
            $context["nbCourses"] = (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eleve"], "cours", [], "any", false, false, false, 98)) > 0)) ? (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eleve"], "cours", [], "any", false, false, false, 98))) : (1));
            // line 99
            echo "                                    ";
            $context["nbCoursesFinished"] = 0;
            // line 100
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["eleve"], "lectures", [], "any", false, false, false, 100));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 101
                echo "                                        ";
                if ((twig_get_attribute($this->env, $this->source, $context["l"], "cours", [], "any", false, false, false, 101) && twig_get_attribute($this->env, $this->source, $context["l"], "isFinished", [], "any", false, false, false, 101))) {
                    // line 102
                    echo "                                            ";
                    $context["nbCoursesFinished"] = ((isset($context["nbCoursesFinished"]) || array_key_exists("nbCoursesFinished", $context) ? $context["nbCoursesFinished"] : (function () { throw new RuntimeError('Variable "nbCoursesFinished" does not exist.', 102, $this->source); })()) + 1);
                    // line 103
                    echo "                                        ";
                }
                // line 104
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "                                    ";
            $context["percent"] = (((isset($context["nbCoursesFinished"]) || array_key_exists("nbCoursesFinished", $context) ? $context["nbCoursesFinished"] : (function () { throw new RuntimeError('Variable "nbCoursesFinished" does not exist.', 105, $this->source); })()) * 100) / (isset($context["nbCourses"]) || array_key_exists("nbCourses", $context) ? $context["nbCourses"] : (function () { throw new RuntimeError('Variable "nbCourses" does not exist.', 105, $this->source); })()));
            // line 106
            echo "                                    <h6 class=\"mb-0\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 106, $this->source); })()), 2), "html", null, true);
            echo "%</h6>
                                    <div class=\"progress progress-sm bg-primary bg-opacity-10\">
                                        <div class=\"progress-bar bg-primary aos\" role=\"progressbar\" data-aos=\"slide-right\" data-aos-delay=\"200\" data-aos-duration=\"1000\" data-aos-easing=\"ease-in-out\" style=\"width: ";
            // line 108
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 108, $this->source); })()), 2), "html", null, true);
            echo "%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card footer -->
                            <div class=\"card-footer bg-transparent border-top\">
                                <div class=\"d-sm-flex justify-content-between align-items-center\">
                                    <!-- Rating star -->
                                    <h6 class=\"mb-2 mb-sm-0\">
                                        <i class=\"bi bi-calendar fa-fw text-orange me-2\"></i><span class=\"text-body\">Join at:</span> ";
            // line 119
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eleve"], "joinAt", [], "any", false, false, false, 119), "d/m/Y"), "html", null, true);
            echo "
                                    </h6>
                                    <!-- Buttons -->
                                    <div class=\"text-end text-primary-hover\">
                                        <a href=\"#\" class=\"btn btn-link text-body p-0 mb-0 me-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"\" data-bs-original-title=\"Message\" aria-label=\"Message\">
                                            <i class=\"bi bi-bell\"></i>
                                        </a>
                                        <a href=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_eleve_block", ["reference" => twig_get_attribute($this->env, $this->source, $context["eleve"], "reference", [], "any", false, false, false, 126)]), "html", null, true);
            echo "\" onclick=\"return confirm('Are you sure ?')\" class=\"btn btn-link ";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "utilisateur", [], "any", false, false, false, 126), "isBlocked", [], "any", false, false, false, 126)) ? ("text-danger") : ("text-success"));
            echo " p-0 mb-0\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"\" data-bs-original-title=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "utilisateur", [], "any", false, false, false, 126), "isBlocked", [], "any", false, false, false, 126)) ? ("UnBlock") : ("Block"));
            echo "\" aria-label=\"";
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "utilisateur", [], "any", false, false, false, 126), "isBlocked", [], "any", false, false, false, 126)) ? ("UnBlock") : ("Block"));
            echo "\">
                                            <i class=\"fas ";
            // line 127
            echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "utilisateur", [], "any", false, false, false, 127), "isBlocked", [], "any", false, false, false, 127)) ? ("fa-lock") : ("fa-unlock"));
            echo "\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "            </div>
        </div>
        <!-- Card footer START -->
        <div class=\"card-footer bg-transparent pt-0 px-0\">
            <!-- Pagination START -->
            <div class=\"d-sm-flex justify-content-sm-between align-items-sm-center\">
                <p class=\"mb-0 text-center text-sm-start\"></p>
                ";
        // line 144
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["eleves"]) || array_key_exists("eleves", $context) ? $context["eleves"] : (function () { throw new RuntimeError('Variable "eleves" does not exist.', 144, $this->source); })()));
        echo "
            </div>
            <!-- Pagination END -->
        </div>
        <!-- Card footer END -->
    </div>
    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/eleve/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 144,  338 => 137,  314 => 127,  304 => 126,  294 => 119,  280 => 108,  274 => 106,  271 => 105,  265 => 104,  262 => 103,  259 => 102,  256 => 101,  251 => 100,  248 => 99,  246 => 98,  238 => 93,  226 => 84,  213 => 75,  207 => 74,  204 => 73,  199 => 72,  197 => 71,  181 => 58,  176 => 56,  162 => 45,  156 => 44,  149 => 40,  138 => 31,  121 => 30,  104 => 16,  100 => 15,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block pageTitle %}Students {{ search ? (\"<br><small>Search Results for key : <b>\" ~ search ~ \"</b></small>\")|raw : '' }}{% endblock %}

{% block mainContent %}

    <div class=\"card bg-transparent\">
        <!-- Card header START -->
        <div class=\"card-header bg-transparent border-bottom px-0\">
            <!-- Search and select START -->
            <div class=\"row g-3 align-items-center justify-content-between\">

                <!-- Search bar -->
                <div class=\"col-md-8\">
                    <form method=\"get\" action=\"{{ url(\"app_admin_eleve_index\")}}\" class=\"rounded position-relative\">
                        <input value=\"{{ search }}\" class=\"form-control bg-transparent\" name=\"search\" required type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
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
                {% for eleve in eleves %}
                    
                    <!-- Card item START -->
                    <div class=\"col-md-6 col-xxl-4\">
                        <div class=\"card bg-transparent border h-100\"> 
                            <!-- Card header -->
                            <div class=\"card-header bg-transparent border-bottom d-flex justify-content-between\">
                                <div class=\"d-sm-flex align-items-center\">
                                    <!-- Avatar -->
                                    <div class=\"avatar avatar-md flex-shrink-0\">
                                        <img class=\"avatar-img rounded-circle\" src=\"{{ asset('uploads/images/eleves/' ~ eleve.utilisateur.personne.avatar) }}\" alt=\"avatar\">
                                    </div>
                                    <!-- Info -->
                                    <div class=\"ms-0 ms-sm-2 mt-2 mt-sm-0\">
                                        <h5 class=\"mb-0\"><a href=\"{{ path('app_admin_eleve_show', {reference: eleve.reference}) }}\">{{ eleve.utilisateur.personne.nomComplet|u.truncate(15) }}</a></h5>
                                        <span class=\"text-body small\"><i class=\"fas fa-fw fa-map-marker-alt me-1 mt-1\"></i>{{ eleve.utilisateur.personne.adresse }}</span>
                                    </div>
                                </div>

                                <!-- Edit dropdown -->
                                <div class=\"dropdown text-end\">
                                    <a href=\"#\" class=\"btn btn-sm btn-light btn-round small mb-0\" role=\"button\" id=\"dropdownShare2\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                        <i class=\"bi bi-three-dots fa-fw\"></i>
                                    </a>
                                    <!-- dropdown button -->
                                    <ul class=\"dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded\" aria-labelledby=\"dropdownShare2\">
                                        <li><a class=\"dropdown-item\" href=\"{{ path('app_admin_eleve_show', {reference: eleve.reference}) }}\"><i class=\"bi bi-eye fa-fw me-2\"></i>Profile</a></li>
                                        <li>
                                            {{ include('admin/eleve/_delete_form.html.twig') }}
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class=\"card-body\">
                                <!-- Payments -->
                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"icon-md bg-success bg-opacity-10 text-success rounded-circle flex-shrink-0\"><i class=\"bi bi-currency-dollar fa-fw\"></i></div>
                                        <h6 class=\"mb-0 ms-2 fw-light\">Payments</h6>
                                    </div>
                                    {% set totalAmount = 0 %}
\t\t\t\t\t\t\t\t\t{% for p in eleve.payments %}
\t\t\t\t\t\t\t\t\t\t{% set totalAmount = totalAmount + p.amount %}
\t\t\t\t\t\t\t\t\t{% endfor %}
                                    <span class=\"mb-0 fw-bold\">{{ totalAmount|number_format(2) }} XAF</span>
                                </div>

                                <!-- Total courses -->
                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"icon-md bg-purple bg-opacity-10 text-purple rounded-circle flex-shrink-0\"><i class=\"fas fa-book fa-fw\"></i></div>
                                        <h6 class=\"mb-0 ms-2 fw-light\">Total Course</h6>
                                    </div>
                                    <span class=\"mb-0 fw-bold\">{{ eleve.cours|length }}</span>
                                </div>

                                <!-- Total courses -->
                                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"icon-md bg-purple bg-opacity-10 text-primary rounded-circle flex-shrink-0\"><i class=\"fas fa-book-open fa-fw\"></i></div>
                                        <h6 class=\"mb-0 ms-2 fw-light\">Total Formations</h6>
                                    </div>
                                    <span class=\"mb-0 fw-bold\">{{ eleve.formations|length }}</span>
                                </div>
                                
                                <!-- Progress -->
                                <div class=\"overflow-hidden\">
                                    {% set nbCourses = eleve.cours|length > 0 ? eleve.cours|length : 1 %}
                                    {% set nbCoursesFinished = 0 %}
                                    {% for l in eleve.lectures %}
                                        {% if l.cours and l.isFinished %}
                                            {% set nbCoursesFinished = nbCoursesFinished + 1 %}
                                        {% endif %}
                                    {% endfor %}
                                    {% set percent = (nbCoursesFinished * 100) / nbCourses %}
                                    <h6 class=\"mb-0\">{{ percent|number_format(2) }}%</h6>
                                    <div class=\"progress progress-sm bg-primary bg-opacity-10\">
                                        <div class=\"progress-bar bg-primary aos\" role=\"progressbar\" data-aos=\"slide-right\" data-aos-delay=\"200\" data-aos-duration=\"1000\" data-aos-easing=\"ease-in-out\" style=\"width: {{ percent|number_format(2) }}%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Card footer -->
                            <div class=\"card-footer bg-transparent border-top\">
                                <div class=\"d-sm-flex justify-content-between align-items-center\">
                                    <!-- Rating star -->
                                    <h6 class=\"mb-2 mb-sm-0\">
                                        <i class=\"bi bi-calendar fa-fw text-orange me-2\"></i><span class=\"text-body\">Join at:</span> {{ eleve.joinAt|date('d/m/Y') }}
                                    </h6>
                                    <!-- Buttons -->
                                    <div class=\"text-end text-primary-hover\">
                                        <a href=\"#\" class=\"btn btn-link text-body p-0 mb-0 me-2\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"\" data-bs-original-title=\"Message\" aria-label=\"Message\">
                                            <i class=\"bi bi-bell\"></i>
                                        </a>
                                        <a href=\"{{ path('app_admin_eleve_block', {reference: eleve.reference}) }}\" onclick=\"return confirm('Are you sure ?')\" class=\"btn btn-link {{eleve.utilisateur.isBlocked ? 'text-danger' : 'text-success'}} p-0 mb-0\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"\" data-bs-original-title=\"{{ eleve.utilisateur.isBlocked ? 'UnBlock' : 'Block' }}\" aria-label=\"{{ eleve.utilisateur.isBlocked ? 'UnBlock' : 'Block' }}\">
                                            <i class=\"fas {{ eleve.utilisateur.isBlocked ? 'fa-lock' : 'fa-unlock' }}\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card item END -->

                {% endfor %}
            </div>
        </div>
        <!-- Card footer START -->
        <div class=\"card-footer bg-transparent pt-0 px-0\">
            <!-- Pagination START -->
            <div class=\"d-sm-flex justify-content-sm-between align-items-sm-center\">
                <p class=\"mb-0 text-center text-sm-start\"></p>
                {{ knp_pagination_render(eleves) }}
            </div>
            <!-- Pagination END -->
        </div>
        <!-- Card footer END -->
    </div>
    
{% endblock %}
", "admin/eleve/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\eleve\\index.html.twig");
    }
}
