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

/* admin/dashboard/index.html.twig */
class __TwigTemplate_1acfec9be9d3bee8c07b6d7a83f4bd94 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/dashboard/index.html.twig", 1);
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

        echo "Dashboard";
        
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
    <!-- Counter boxes START -->
    <div class=\"row g-4 mb-4\">
        <!-- Counter item -->
        <div class=\"col-md-6 col-xxl-3\">
            <div class=\"card card-body bg-warning bg-opacity-15 p-4 h-100\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <!-- Digit -->
                    <div>
                        <h2 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["completedCourses"]) || array_key_exists("completedCourses", $context) ? $context["completedCourses"] : (function () { throw new RuntimeError('Variable "completedCourses" does not exist.', 15, $this->source); })())), "html", null, true);
        echo "\" data-purecounter-delay=\"200\">0</h2>
                        <span class=\"mb-0 h6 fw-light\">Completed Courses</span>
                    </div>
                    <!-- Icon -->
                    <div class=\"icon-lg rounded-circle bg-warning text-white mb-0\"><i class=\"fas fa-tv fa-fw\"></i></div>
                </div>
            </div>
        </div>

        <!-- Counter item -->
        <div class=\"col-md-6 col-xxl-3\">
            <div class=\"card card-body bg-purple bg-opacity-10 p-4 h-100\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <!-- Digit -->
                    <div>
                        <h2 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"";
        // line 30
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["courseInProgress"]) || array_key_exists("courseInProgress", $context) ? $context["courseInProgress"] : (function () { throw new RuntimeError('Variable "courseInProgress" does not exist.', 30, $this->source); })())), "html", null, true);
        echo "\"\tdata-purecounter-delay=\"200\">0</h2>
                        <span class=\"mb-0 h6 fw-light\">Courses In Progress</span>
                    </div>
                    <!-- Icon -->
                    <div class=\"icon-lg rounded-circle bg-purple text-white mb-0\"><i class=\"fas fa-book-open fa-fw\"></i></div>
                </div>
            </div>
        </div>

        <!-- Counter item -->
        <div class=\"col-md-6 col-xxl-3\">
            <div class=\"card card-body bg-primary bg-opacity-10 p-4 h-100\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <!-- Digit -->
                    <div>
                        <h2 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"";
        // line 45
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["eleves"]) || array_key_exists("eleves", $context) ? $context["eleves"] : (function () { throw new RuntimeError('Variable "eleves" does not exist.', 45, $this->source); })())), "html", null, true);
        echo "\"\tdata-purecounter-delay=\"200\">0</h2>
                        <span class=\"mb-0 h6 fw-light\">Students</span>
                    </div>
                    <!-- Icon -->
                    <div class=\"icon-lg rounded-circle bg-primary text-white mb-0\"><i class=\"fas fa-user-graduate fa-fw\"></i></div>
                </div>
            </div>
        </div>

        <!-- Counter item -->
        <div class=\"col-md-6 col-xxl-3\">
            <div class=\"card card-body bg-success bg-opacity-10 p-4 h-100\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <!-- Digit -->
                    <div>
                        <div class=\"d-flex\">
                            <h2 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"";
        // line 61
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["enseignants"]) || array_key_exists("enseignants", $context) ? $context["enseignants"] : (function () { throw new RuntimeError('Variable "enseignants" does not exist.', 61, $this->source); })())), "html", null, true);
        echo "\"\tdata-purecounter-delay=\"200\">0</h2>
                            
                        </div>
                        <span class=\"mb-0 h6 fw-light\">Instructors</span>
                    </div>
                    <!-- Icon -->
                    <div class=\"icon-lg rounded-circle bg-success text-white mb-0\"><i class=\"bi bi-stopwatch-fill fa-fw\"></i></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter boxes END -->

    <!-- Chart and Ticket START -->
    <div class=\"row g-4 mb-4\">

        <!-- Chart START -->
        <div class=\"col-xxl-12\">
            <div class=\"card shadow h-100\">

                <!-- Card header -->
                <div class=\"card-header p-4 border-bottom\">
                    <h5 class=\"card-header-title\">Earnings</h5>
                </div>

                <!-- Card body -->
                <div class=\"card-body\">
                    <!-- Apex chart -->
                    <div id=\"ChartPayout\" data-earnings-uri=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_admin_earnings");
        echo "\"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Chart and Ticket END -->

    <!-- Top listed Cards START -->
    <div class=\"row g-4\">

        <!-- Top instructors START -->
        <div class=\"col-lg-6 col-xxl-4\">
            <div class=\"card shadow h-100\">

                <!-- Card header -->
                <div class=\"card-header border-bottom d-flex justify-content-between align-items-center p-4\">
                    <h5 class=\"card-header-title\">Top Instructors</h5>
                    <a href=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_enseignant_index");
        echo "\" class=\"btn btn-link p-0 mb-0\">View all</a>
                </div>

                <!-- Card body START -->
                <div class=\"card-body p-4\">

                    ";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topInstructors"]) || array_key_exists("topInstructors", $context) ? $context["topInstructors"] : (function () { throw new RuntimeError('Variable "topInstructors" does not exist.', 112, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["enseignant"]) {
            // line 113
            echo "                        <!-- Instructor item START -->
                        <div class=\"d-sm-flex justify-content-between align-items-center\">
                            <!-- Avatar and info -->
                            <div class=\"d-sm-flex align-items-center mb-1 mb-sm-0\">
                                <!-- Avatar -->
                                <div class=\"avatar avatar-md flex-shrink-0\">
                                    <img class=\"avatar-img rounded-circle\" src=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["enseignant"], "utilisateur", [], "any", false, false, false, 119), "personne", [], "any", false, false, false, 119), "avatarPath", [], "any", false, false, false, 119)), "html", null, true);
            echo "\" alt=\"avatar\">
                                </div>
                                <!-- Info -->
                                <div class=\"ms-0 ms-sm-2 mt-2 mt-sm-0\">
                                    <h6 class=\"mb-1\">";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["enseignant"], "utilisateur", [], "any", false, false, false, 123), "personne", [], "any", false, false, false, 123), "nomComplet", [], "any", false, false, false, 123), "html", null, true);
            echo "<i class=\"bi bi-patch-check-fill text-info small ms-1\"></i></h6>
                                    <ul class=\"list-inline mb-0 small\">
                                        <li class=\"list-inline-item fw-light me-2 mb-1 mb-sm-0\"><i class=\"fas fa-book text-purple me-1\"></i>";
            // line 125
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["enseignant"], "cours", [], "any", false, false, false, 125)) < 10)) ? (("0" . twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["enseignant"], "cours", [], "any", false, false, false, 125)))) : (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["enseignant"], "cours", [], "any", false, false, false, 125)))), "html", null, true);
            echo " Courses</li>
                                        <li class=\"list-inline-item fw-light me-2 mb-1 mb-sm-0\"><i class=\"fas fa-star text-warning me-1\"></i>";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["enseignant"], "review", [], "any", false, false, false, 126), "html", null, true);
            echo "/5.0</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Button -->
                            <a href=\"";
            // line 131
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_enseignant_show", ["reference" => twig_get_attribute($this->env, $this->source, $context["enseignant"], "reference", [], "any", false, false, false, 131)]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-light mb-0\">View</a>
                        </div>
                        <!-- Instructor item END -->

                        ";
            // line 135
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 135)) {
                // line 136
                echo "                            <hr><!-- Divider -->
                        ";
            }
            // line 138
            echo "                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['enseignant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 139
        echo "                    
                </div>
                <!-- Card body END -->
            </div>
        </div>
        <!-- Top instructors END -->

        <!-- Notice Board START -->
        <div class=\"col-lg-6 col-xxl-4\">
            <div class=\"card shadow h-100\">
                <!-- Card header -->
                <div class=\"card-header border-bottom p-4\">
                    <h5 class=\"card-header-title\">Notice board</h5>
                </div>

                <!-- Card body START -->
                <div class=\"card-body p-4\">
                    <div class=\"custom-scrollbar h-300px\">
                        ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 157, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
            // line 158
            echo "                            <!-- Notice Board item START -->
                            <div class=\"d-flex justify-content-between position-relative\">
                                <div class=\"d-sm-flex\">
                                    ";
            // line 161
            if ((twig_get_attribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 161) === 1)) {
                // line 162
                echo "                                        ";
                $context["text"] = "text-orange bg-orange";
                // line 163
                echo "                                        ";
                $context["icon"] = "fa-book-open";
                // line 164
                echo "                                    ";
            } elseif ((twig_get_attribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 164) === 2)) {
                // line 165
                echo "                                        ";
                $context["text"] = "text-purple bg-purple ";
                // line 166
                echo "                                        ";
                $context["icon"] = "fa-user-tie";
                // line 167
                echo "                                    ";
            } else {
                // line 168
                echo "                                        ";
                $context["text"] = "text-danger bg-danger";
                // line 169
                echo "                                        ";
                $context["icon"] = "fa-globe";
                // line 170
                echo "                                    ";
            }
            // line 171
            echo "                                    <div class=\"icon-lg bg-opacity-10 ";
            echo twig_escape_filter($this->env, (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 171, $this->source); })()), "html", null, true);
            echo "rounded-2 flex-shrink-0\">
                                        <i class=\"fas ";
            // line 172
            echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 172, $this->source); })()), "html", null, true);
            echo " fs-5\"></i>
                                    </div>
                                    <!-- Info -->
                                    <div class=\"ms-0 ms-sm-3 mt-2 mt-sm-0\">
                                        <h6 class=\"mb-0\"><a href=\"#\" class=\"stretched-link\">";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notification"], "title", [], "any", false, false, false, 176), "html", null, true);
            echo "</a></h6>
                                        <p class=\"mb-0\">";
            // line 177
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notification"], "message", [], "any", false, false, false, 177), "html", null, true);
            echo "</p>
                                        <span class=\"small\">";
            // line 178
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notification"], "createdAt", [], "any", false, false, false, 178), "d/m/Y at H:i:s"), "html", null, true);
            echo "</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Notice Board item END -->

                            ";
            // line 184
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 184)) {
                // line 185
                echo "                                <hr><!-- Divider -->
                            ";
            }
            // line 187
            echo "                        ";
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
            // line 188
            echo "                            <h6>Empty</h6>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notification'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 190
        echo "                        
                    </div>
                </div>
                <!-- Card body END -->

                <!-- Card footer START -->
                <div class=\"card-footer border-top\">
                    ";
        // line 197
        if ((twig_length_filter($this->env, (isset($context["allNotifications"]) || array_key_exists("allNotifications", $context) ? $context["allNotifications"] : (function () { throw new RuntimeError('Variable "allNotifications" does not exist.', 197, $this->source); })())) > 0)) {
            // line 198
            echo "                        <div class=\"alert alert-success d-flex align-items-center mb-0 py-2\">
                            <div>
                                <small class=\"mb-0\">45 more notices listed</small>
                            </div>
                            <div class=\"ms-auto\">
                                <a class=\"btn btn-sm btn-success-soft mb-0\" href=\"\"> View all </a>
                            </div>
                        </div>
                    ";
        }
        // line 207
        echo "                </div>
                <!-- Card footer START -->
            </div>
        </div>
        <!-- Notice Board END -->

        <!-- Traffic sources START -->
        <div class=\"col-lg-6 col-xxl-4\">
            <div class=\"card shadow h-100\">

                <!-- Card header -->
                <div class=\"card-header border-bottom d-flex justify-content-between align-items-center p-4\">
                    <h5 class=\"card-header-title\">Most View Courses</h5>
                </div>

                <!-- Card body START -->
                <div class=\"card-body p-4\">
                    <!-- Chart -->
                    <div class=\"col-sm-6 mx-auto\">
                        <div id=\"ChartTrafficViews\"></div>
                    </div>

                </div>
            </div>
            <!-- Card body END -->
        </div>
        <!-- Traffic sources END -->

    </div>
    <!-- Top listed Cards END -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/dashboard/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  439 => 207,  428 => 198,  426 => 197,  417 => 190,  410 => 188,  397 => 187,  393 => 185,  391 => 184,  382 => 178,  378 => 177,  374 => 176,  367 => 172,  362 => 171,  359 => 170,  356 => 169,  353 => 168,  350 => 167,  347 => 166,  344 => 165,  341 => 164,  338 => 163,  335 => 162,  333 => 161,  328 => 158,  310 => 157,  290 => 139,  276 => 138,  272 => 136,  270 => 135,  263 => 131,  255 => 126,  251 => 125,  246 => 123,  239 => 119,  231 => 113,  214 => 112,  205 => 106,  185 => 89,  154 => 61,  135 => 45,  117 => 30,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"admin/base.html.twig\" %}

{% block pageTitle %}Dashboard{% endblock %}

{% block mainContent %}
    
    <!-- Counter boxes START -->
    <div class=\"row g-4 mb-4\">
        <!-- Counter item -->
        <div class=\"col-md-6 col-xxl-3\">
            <div class=\"card card-body bg-warning bg-opacity-15 p-4 h-100\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <!-- Digit -->
                    <div>
                        <h2 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"{{ completedCourses|length }}\" data-purecounter-delay=\"200\">0</h2>
                        <span class=\"mb-0 h6 fw-light\">Completed Courses</span>
                    </div>
                    <!-- Icon -->
                    <div class=\"icon-lg rounded-circle bg-warning text-white mb-0\"><i class=\"fas fa-tv fa-fw\"></i></div>
                </div>
            </div>
        </div>

        <!-- Counter item -->
        <div class=\"col-md-6 col-xxl-3\">
            <div class=\"card card-body bg-purple bg-opacity-10 p-4 h-100\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <!-- Digit -->
                    <div>
                        <h2 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"{{ courseInProgress|length }}\"\tdata-purecounter-delay=\"200\">0</h2>
                        <span class=\"mb-0 h6 fw-light\">Courses In Progress</span>
                    </div>
                    <!-- Icon -->
                    <div class=\"icon-lg rounded-circle bg-purple text-white mb-0\"><i class=\"fas fa-book-open fa-fw\"></i></div>
                </div>
            </div>
        </div>

        <!-- Counter item -->
        <div class=\"col-md-6 col-xxl-3\">
            <div class=\"card card-body bg-primary bg-opacity-10 p-4 h-100\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <!-- Digit -->
                    <div>
                        <h2 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"{{ eleves|length }}\"\tdata-purecounter-delay=\"200\">0</h2>
                        <span class=\"mb-0 h6 fw-light\">Students</span>
                    </div>
                    <!-- Icon -->
                    <div class=\"icon-lg rounded-circle bg-primary text-white mb-0\"><i class=\"fas fa-user-graduate fa-fw\"></i></div>
                </div>
            </div>
        </div>

        <!-- Counter item -->
        <div class=\"col-md-6 col-xxl-3\">
            <div class=\"card card-body bg-success bg-opacity-10 p-4 h-100\">
                <div class=\"d-flex justify-content-between align-items-center\">
                    <!-- Digit -->
                    <div>
                        <div class=\"d-flex\">
                            <h2 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"{{ enseignants|length }}\"\tdata-purecounter-delay=\"200\">0</h2>
                            
                        </div>
                        <span class=\"mb-0 h6 fw-light\">Instructors</span>
                    </div>
                    <!-- Icon -->
                    <div class=\"icon-lg rounded-circle bg-success text-white mb-0\"><i class=\"bi bi-stopwatch-fill fa-fw\"></i></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Counter boxes END -->

    <!-- Chart and Ticket START -->
    <div class=\"row g-4 mb-4\">

        <!-- Chart START -->
        <div class=\"col-xxl-12\">
            <div class=\"card shadow h-100\">

                <!-- Card header -->
                <div class=\"card-header p-4 border-bottom\">
                    <h5 class=\"card-header-title\">Earnings</h5>
                </div>

                <!-- Card body -->
                <div class=\"card-body\">
                    <!-- Apex chart -->
                    <div id=\"ChartPayout\" data-earnings-uri=\"{{ url('app_admin_earnings') }}\"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Chart and Ticket END -->

    <!-- Top listed Cards START -->
    <div class=\"row g-4\">

        <!-- Top instructors START -->
        <div class=\"col-lg-6 col-xxl-4\">
            <div class=\"card shadow h-100\">

                <!-- Card header -->
                <div class=\"card-header border-bottom d-flex justify-content-between align-items-center p-4\">
                    <h5 class=\"card-header-title\">Top Instructors</h5>
                    <a href=\"{{ path('app_admin_enseignant_index') }}\" class=\"btn btn-link p-0 mb-0\">View all</a>
                </div>

                <!-- Card body START -->
                <div class=\"card-body p-4\">

                    {% for enseignant in topInstructors %}
                        <!-- Instructor item START -->
                        <div class=\"d-sm-flex justify-content-between align-items-center\">
                            <!-- Avatar and info -->
                            <div class=\"d-sm-flex align-items-center mb-1 mb-sm-0\">
                                <!-- Avatar -->
                                <div class=\"avatar avatar-md flex-shrink-0\">
                                    <img class=\"avatar-img rounded-circle\" src=\"{{ asset(enseignant.utilisateur.personne.avatarPath) }}\" alt=\"avatar\">
                                </div>
                                <!-- Info -->
                                <div class=\"ms-0 ms-sm-2 mt-2 mt-sm-0\">
                                    <h6 class=\"mb-1\">{{ enseignant.utilisateur.personne.nomComplet }}<i class=\"bi bi-patch-check-fill text-info small ms-1\"></i></h6>
                                    <ul class=\"list-inline mb-0 small\">
                                        <li class=\"list-inline-item fw-light me-2 mb-1 mb-sm-0\"><i class=\"fas fa-book text-purple me-1\"></i>{{ enseignant.cours|length < 10 ? '0' ~ enseignant.cours|length : enseignant.cours|length }} Courses</li>
                                        <li class=\"list-inline-item fw-light me-2 mb-1 mb-sm-0\"><i class=\"fas fa-star text-warning me-1\"></i>{{ enseignant.review }}/5.0</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Button -->
                            <a href=\"{{ path('app_admin_enseignant_show', {reference: enseignant.reference}) }}\" class=\"btn btn-sm btn-light mb-0\">View</a>
                        </div>
                        <!-- Instructor item END -->

                        {% if not loop.last %}
                            <hr><!-- Divider -->
                        {% endif %}
                    {% endfor %}
                    
                </div>
                <!-- Card body END -->
            </div>
        </div>
        <!-- Top instructors END -->

        <!-- Notice Board START -->
        <div class=\"col-lg-6 col-xxl-4\">
            <div class=\"card shadow h-100\">
                <!-- Card header -->
                <div class=\"card-header border-bottom p-4\">
                    <h5 class=\"card-header-title\">Notice board</h5>
                </div>

                <!-- Card body START -->
                <div class=\"card-body p-4\">
                    <div class=\"custom-scrollbar h-300px\">
                        {% for notification in notifications %}
                            <!-- Notice Board item START -->
                            <div class=\"d-flex justify-content-between position-relative\">
                                <div class=\"d-sm-flex\">
                                    {% if notification.type is same as 1 %}
                                        {% set text = 'text-orange bg-orange'  %}
                                        {% set icon = 'fa-book-open' %}
                                    {% elseif notification.type is same as 2 %}
                                        {% set text = 'text-purple bg-purple ' %}
                                        {% set icon = 'fa-user-tie' %}
                                    {% else %}
                                        {% set text = 'text-danger bg-danger' %}
                                        {% set icon = 'fa-globe' %}
                                    {% endif %}
                                    <div class=\"icon-lg bg-opacity-10 {{ text }}rounded-2 flex-shrink-0\">
                                        <i class=\"fas {{ icon }} fs-5\"></i>
                                    </div>
                                    <!-- Info -->
                                    <div class=\"ms-0 ms-sm-3 mt-2 mt-sm-0\">
                                        <h6 class=\"mb-0\"><a href=\"#\" class=\"stretched-link\">{{ notification.title }}</a></h6>
                                        <p class=\"mb-0\">{{ notification.message }}</p>
                                        <span class=\"small\">{{ notification.createdAt|date('d/m/Y at H:i:s') }}</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Notice Board item END -->

                            {% if not loop.last %}
                                <hr><!-- Divider -->
                            {% endif %}
                        {% else %}
                            <h6>Empty</h6>
                        {% endfor %}
                        
                    </div>
                </div>
                <!-- Card body END -->

                <!-- Card footer START -->
                <div class=\"card-footer border-top\">
                    {% if allNotifications|length > 0 %}
                        <div class=\"alert alert-success d-flex align-items-center mb-0 py-2\">
                            <div>
                                <small class=\"mb-0\">45 more notices listed</small>
                            </div>
                            <div class=\"ms-auto\">
                                <a class=\"btn btn-sm btn-success-soft mb-0\" href=\"\"> View all </a>
                            </div>
                        </div>
                    {% endif %}
                </div>
                <!-- Card footer START -->
            </div>
        </div>
        <!-- Notice Board END -->

        <!-- Traffic sources START -->
        <div class=\"col-lg-6 col-xxl-4\">
            <div class=\"card shadow h-100\">

                <!-- Card header -->
                <div class=\"card-header border-bottom d-flex justify-content-between align-items-center p-4\">
                    <h5 class=\"card-header-title\">Most View Courses</h5>
                </div>

                <!-- Card body START -->
                <div class=\"card-body p-4\">
                    <!-- Chart -->
                    <div class=\"col-sm-6 mx-auto\">
                        <div id=\"ChartTrafficViews\"></div>
                    </div>

                </div>
            </div>
            <!-- Card body END -->
        </div>
        <!-- Traffic sources END -->

    </div>
    <!-- Top listed Cards END -->

{% endblock %}
", "admin/dashboard/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\dashboard\\index.html.twig");
    }
}
