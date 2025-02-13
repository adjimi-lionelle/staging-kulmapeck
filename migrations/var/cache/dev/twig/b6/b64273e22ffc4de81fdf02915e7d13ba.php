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

/* student/base.html.twig */
class __TwigTemplate_ab7cb757d5b8a94d492428a3beb3a956 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'subTitle' => [$this, 'block_subTitle'],
            'footer' => [$this, 'block_footer'],
            'script' => [$this, 'block_script'],
            'mainContent' => [$this, 'block_mainContent'],
            'instructorBanner' => [$this, 'block_instructorBanner'],
            'profileBlock' => [$this, 'block_profileBlock'],
            'instructorSidebar' => [$this, 'block_instructorSidebar'],
            'pageContent' => [$this, 'block_pageContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "student/base.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "student/base.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " - Student ";
        $this->displayBlock('subTitle', $context, $blocks);
        echo " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_subTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subTitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subTitle"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 6
        echo "    
    <footer class=\"bg-dark p-3\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <!-- Widget -->
                <div class=\"col-md-4 text-center text-md-start mb-3 mb-md-0\">
                    <!-- Logo START -->
                    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        echo "\"> <img class=\"h-20px\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-light.svg"), "html", null, true);
        echo "\" alt=\"logo\"> </a>
                </div>
                
                <!-- Widget -->
                <div class=\"col-md-4 mb-3 mb-md-0\">
                    <div class=\"text-center text-white\">
                        Copyrights ©2023 kulmapeck</a>. All rights reserved.
                    </div>
                </div>
                <!-- Widget -->
                <div class=\"col-md-4\">
                    <!-- Rating -->
                    <ul class=\"list-inline mb-0 text-center text-md-end\">
                        <li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-facebook\"></i></a></li>
                        <li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-instagram\"></i></a></li>
                        <li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-linkedin-in\"></i></a></li>
                        <li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-twitter\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 39
        echo "    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 42
    public function block_mainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        // line 43
        echo "
    ";
        // line 44
        $this->displayBlock('instructorBanner', $context, $blocks);
        // line 108
        echo "    <!-- =======================
    Page content START -->
    <section class=\"pt-0\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 113
        $this->displayBlock('instructorSidebar', $context, $blocks);
        // line 144
        echo "                <!-- Main content START -->
                <div class=\"";
        // line 145
        echo twig_escape_filter($this->env, ((array_key_exists("mainContentClass", $context)) ? (_twig_default_filter((isset($context["mainContentClass"]) || array_key_exists("mainContentClass", $context) ? $context["mainContentClass"] : (function () { throw new RuntimeError('Variable "mainContentClass" does not exist.', 145, $this->source); })()), "col-xl-9")) : ("col-xl-9")), "html", null, true);
        echo "\">

                    ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "flashes", ["errors"], "method", false, false, false, 147));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 148
            echo "                        <div class=\"alert alert-danger alert-dismissible\">
                            <p>";
            // line 149
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 152
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 152, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 152));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 153
            echo "                        <div class=\"alert alert-danger alert-dismissible\">
                            <p>";
            // line 154
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 157
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 157, $this->source); })()), "flashes", ["success"], "method", false, false, false, 157));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 158
            echo "                        <div class=\"alert alert-success alert-dismissible\">
                            <p>";
            // line 159
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 162, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 162));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 163
            echo "                        <div class=\"alert alert-warning alert-dismissible\">
                            <p>";
            // line 164
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 167
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 167, $this->source); })()), "flashes", ["infos"], "method", false, false, false, 167));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 168
            echo "                        <div class=\"alert alert-info alert-dismissible\">
                            <p>";
            // line 169
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "
                    ";
        // line 173
        $this->displayBlock('pageContent', $context, $blocks);
        // line 174
        echo "                    
                </div>
                <!-- Main content END -->
            </div><!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Page content END -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 44
    public function block_instructorBanner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "instructorBanner"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "instructorBanner"));

        // line 45
        echo "        <!-- =======================
        Page Banner START -->
        <section class=\"pt-0\">
            <!-- Main banner background image -->
            <div class=\"container-fluid px-0\">
                <div class=\"bg-blue h-100px h-md-200px rounded-0\" style=\"background:url(";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pattern/04.png"), "html", null, true);
        echo ") no-repeat center center; background-size:cover;\">
                </div>
            </div>
            ";
        // line 53
        $this->displayBlock('profileBlock', $context, $blocks);
        // line 104
        echo "        </section>
        <!-- =======================
        Page Banner END -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 53
    public function block_profileBlock($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "profileBlock"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "profileBlock"));

        // line 54
        echo "                <div class=\"container mt-n4\">
                    <div class=\"row\">
                        <!-- Profile banner START -->
                        <div class=\"col-12\">
                            <div class=\"card bg-transparent card-body p-0\">
                                <div class=\"row d-flex justify-content-between\">
                                    <!-- Avatar -->
                                    <div class=\"col-auto mt-4 mt-md-0\">
                                        <div class=\"avatar avatar-xxl mt-n3\">
                                            <img class=\"avatar-img rounded-circle border border-white border-3 shadow\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/eleves/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "personne", [], "any", false, false, false, 63), "avatar", [], "any", false, false, false, 63))), "html", null, true);
        echo "\" alt=\"\">
                                        </div>
                                    </div>
                                    <!-- Profile info -->
                                    <div class=\"col d-md-flex justify-content-between align-items-center mt-4\">
                                        <div>
                                            <h1 class=\"my-1 fs-4\">";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "personne", [], "any", false, false, false, 69), "nomComplet", [], "any", false, false, false, 69), "html", null, true);
        echo " <i class=\"bi bi-patch-check-fill text-info small\"></i></h1>
                                            <ul class=\"list-inline mb-0\">
                                                <li class=\"list-inline-item me-3 mb-1 mb-sm-0\">
                                                    <span class=\"h6\">00</span>
                                                    <span class=\"text-body fw-light\">points</span>
                                                </li>
                                                <li class=\"list-inline-item me-3 mb-1 mb-sm-0\">
                                                    <span class=\"h6\">00</span>
                                                    <span class=\"text-body fw-light\">Completed courses</span>
                                                </li>
                                                <li class=\"list-inline-item me-3 mb-1 mb-sm-0\">
                                                    <span class=\"h6\">";
        // line 80
        echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 80, $this->source); })()), "lectures", [], "any", false, false, false, 80)) < 10)) ? (("0" . twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 80, $this->source); })()), "lectures", [], "any", false, false, false, 80)))) : (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["student"]) || array_key_exists("student", $context) ? $context["student"] : (function () { throw new RuntimeError('Variable "student" does not exist.', 80, $this->source); })()), "lectures", [], "any", false, false, false, 80)))), "html", null, true);
        echo "</span>
                                                    <span class=\"text-body fw-light\">Completed lessons</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Profile banner END -->

                            <!-- Advanced filter responsive toggler START -->
                            <!-- Divider -->
                            <hr class=\"d-xl-none\">
                            <div class=\"col-12 col-xl-3 d-flex justify-content-between align-items-center\">
                                <a class=\"h6 mb-0 fw-bold d-xl-none\" href=\"#\">Menu</a>
                                <button class=\"btn btn-primary d-xl-none\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasSidebar\" aria-controls=\"offcanvasSidebar\">
                                    <i class=\"fas fa-sliders-h\"></i>
                                </button>
                            </div>
                            <!-- Advanced filter responsive toggler END -->
                        </div>
                    </div>
                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 113
    public function block_instructorSidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "instructorSidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "instructorSidebar"));

        // line 114
        echo "                    <!-- Left sidebar START -->
                    <div class=\"col-xl-3\">
                        <!-- Responsive offcanvas body START -->
                        <div class=\"offcanvas-xl offcanvas-end\" tabindex=\"-1\" id=\"offcanvasSidebar\">
                            <!-- Offcanvas header -->
                            <div class=\"offcanvas-header bg-light\">
                                <h5 class=\"offcanvas-title\" id=\"offcanvasNavbarLabel\">My profile</h5>
                                <button  type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" data-bs-target=\"#offcanvasSidebar\" aria-label=\"Close\"></button>
                            </div>
                            <!-- Offcanvas body -->
                            <div class=\"offcanvas-body p-3 p-xl-0\">
                                <div class=\"bg-dark border rounded-3 pb-0 p-3 w-100\">
                                    <!-- Dashboard menu -->
                                    <div class=\"list-group list-group-dark list-group-borderless\">
                                        <a class=\"list-group-item ";
        // line 128
        echo ((array_key_exists("studentHome", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_home");
        echo "\"><i class=\"bi bi-ui-checks-grid fa-fw me-2\"></i>Dashboard</a>
                                        <a class=\"list-group-item ";
        // line 129
        echo ((array_key_exists("isSubscriptions", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_subscriptions");
        echo "\"><i class=\"bi bi-basket fa-fw me-2\"></i>My Subscriptions</a>
                                        <a class=\"list-group-item ";
        // line 130
        echo ((array_key_exists("studentCourses", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_courses");
        echo "\"><i class=\"bi bi-basket fa-fw me-2\"></i>My Courses</a>
                                        <a class=\"list-group-item ";
        // line 131
        echo ((array_key_exists("isEvaluations", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_student_evaluation");
        echo "\"><i class=\"bi bi-file fa-fw me-2\"></i>My Tests</a>
                                        <a class=\"list-group-item ";
        // line 132
        echo ((array_key_exists("isPayments", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_student_payments");
        echo "\"><i class=\"bi bi-credit-card-2-front fa-fw me-2\"></i>Payments</a>
                                        <a class=\"list-group-item ";
        // line 133
        echo ((array_key_exists("isNetWork", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_student_network");
        echo "\"><i class=\"bi bi-people fa-fw me-2\"></i>Network</a>
                                        <a class=\"list-group-item ";
        // line 134
        echo ((array_key_exists("isProfile", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_student_profile");
        echo "\"><i class=\"bi bi-pencil-square fa-fw me-2\"></i>My Profile</a>
                                        <a class=\"list-group-item text-danger bg-danger-soft-hover\" href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><i class=\"fas fa-sign-out-alt fa-fw me-2\"></i>Sign Out</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Responsive offcanvas body END -->
                    </div>
                    <!-- Left sidebar END -->
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 173
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "student/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  523 => 173,  504 => 135,  498 => 134,  492 => 133,  486 => 132,  480 => 131,  474 => 130,  468 => 129,  462 => 128,  446 => 114,  436 => 113,  402 => 80,  388 => 69,  379 => 63,  368 => 54,  358 => 53,  345 => 104,  343 => 53,  337 => 50,  330 => 45,  320 => 44,  301 => 174,  299 => 173,  296 => 172,  287 => 169,  284 => 168,  279 => 167,  270 => 164,  267 => 163,  262 => 162,  253 => 159,  250 => 158,  245 => 157,  236 => 154,  233 => 153,  228 => 152,  219 => 149,  216 => 148,  212 => 147,  207 => 145,  204 => 144,  202 => 113,  195 => 108,  193 => 44,  190 => 43,  180 => 42,  169 => 39,  159 => 38,  123 => 13,  114 => 6,  104 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"front/base.html.twig\" %}

{% block title %} - Student {% block subTitle %}{% endblock %} {% endblock %}

{% block footer %}
    
    <footer class=\"bg-dark p-3\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <!-- Widget -->
                <div class=\"col-md-4 text-center text-md-start mb-3 mb-md-0\">
                    <!-- Logo START -->
                    <a href=\"{{ path('app_front') }}\"> <img class=\"h-20px\" src=\"{{ asset('assets/images/logo-light.svg') }}\" alt=\"logo\"> </a>
                </div>
                
                <!-- Widget -->
                <div class=\"col-md-4 mb-3 mb-md-0\">
                    <div class=\"text-center text-white\">
                        Copyrights ©2023 kulmapeck</a>. All rights reserved.
                    </div>
                </div>
                <!-- Widget -->
                <div class=\"col-md-4\">
                    <!-- Rating -->
                    <ul class=\"list-inline mb-0 text-center text-md-end\">
                        <li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-facebook\"></i></a></li>
                        <li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-instagram\"></i></a></li>
                        <li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-linkedin-in\"></i></a></li>
                        <li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-twitter\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

{% endblock %}

{% block script %}
    
{% endblock %}

{% block mainContent %}

    {% block instructorBanner %}
        <!-- =======================
        Page Banner START -->
        <section class=\"pt-0\">
            <!-- Main banner background image -->
            <div class=\"container-fluid px-0\">
                <div class=\"bg-blue h-100px h-md-200px rounded-0\" style=\"background:url({{ asset('assets/images/pattern/04.png') }}) no-repeat center center; background-size:cover;\">
                </div>
            </div>
            {% block profileBlock %}
                <div class=\"container mt-n4\">
                    <div class=\"row\">
                        <!-- Profile banner START -->
                        <div class=\"col-12\">
                            <div class=\"card bg-transparent card-body p-0\">
                                <div class=\"row d-flex justify-content-between\">
                                    <!-- Avatar -->
                                    <div class=\"col-auto mt-4 mt-md-0\">
                                        <div class=\"avatar avatar-xxl mt-n3\">
                                            <img class=\"avatar-img rounded-circle border border-white border-3 shadow\" src=\"{{ asset('uploads/images/eleves/' ~ app.user.personne.avatar) }}\" alt=\"\">
                                        </div>
                                    </div>
                                    <!-- Profile info -->
                                    <div class=\"col d-md-flex justify-content-between align-items-center mt-4\">
                                        <div>
                                            <h1 class=\"my-1 fs-4\">{{ app.user.personne.nomComplet }} <i class=\"bi bi-patch-check-fill text-info small\"></i></h1>
                                            <ul class=\"list-inline mb-0\">
                                                <li class=\"list-inline-item me-3 mb-1 mb-sm-0\">
                                                    <span class=\"h6\">00</span>
                                                    <span class=\"text-body fw-light\">points</span>
                                                </li>
                                                <li class=\"list-inline-item me-3 mb-1 mb-sm-0\">
                                                    <span class=\"h6\">00</span>
                                                    <span class=\"text-body fw-light\">Completed courses</span>
                                                </li>
                                                <li class=\"list-inline-item me-3 mb-1 mb-sm-0\">
                                                    <span class=\"h6\">{{ student.lectures|length < 10 ?'0' ~ student.lectures|length : student.lectures|length }}</span>
                                                    <span class=\"text-body fw-light\">Completed lessons</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Profile banner END -->

                            <!-- Advanced filter responsive toggler START -->
                            <!-- Divider -->
                            <hr class=\"d-xl-none\">
                            <div class=\"col-12 col-xl-3 d-flex justify-content-between align-items-center\">
                                <a class=\"h6 mb-0 fw-bold d-xl-none\" href=\"#\">Menu</a>
                                <button class=\"btn btn-primary d-xl-none\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasSidebar\" aria-controls=\"offcanvasSidebar\">
                                    <i class=\"fas fa-sliders-h\"></i>
                                </button>
                            </div>
                            <!-- Advanced filter responsive toggler END -->
                        </div>
                    </div>
                </div>
            {% endblock %}
        </section>
        <!-- =======================
        Page Banner END -->
    {% endblock %}
    <!-- =======================
    Page content START -->
    <section class=\"pt-0\">
        <div class=\"container\">
            <div class=\"row\">
                {% block instructorSidebar %}
                    <!-- Left sidebar START -->
                    <div class=\"col-xl-3\">
                        <!-- Responsive offcanvas body START -->
                        <div class=\"offcanvas-xl offcanvas-end\" tabindex=\"-1\" id=\"offcanvasSidebar\">
                            <!-- Offcanvas header -->
                            <div class=\"offcanvas-header bg-light\">
                                <h5 class=\"offcanvas-title\" id=\"offcanvasNavbarLabel\">My profile</h5>
                                <button  type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" data-bs-target=\"#offcanvasSidebar\" aria-label=\"Close\"></button>
                            </div>
                            <!-- Offcanvas body -->
                            <div class=\"offcanvas-body p-3 p-xl-0\">
                                <div class=\"bg-dark border rounded-3 pb-0 p-3 w-100\">
                                    <!-- Dashboard menu -->
                                    <div class=\"list-group list-group-dark list-group-borderless\">
                                        <a class=\"list-group-item {{ studentHome is defined ? 'active' : '' }}\" href=\"{{ path('app_student_home') }}\"><i class=\"bi bi-ui-checks-grid fa-fw me-2\"></i>Dashboard</a>
                                        <a class=\"list-group-item {{ isSubscriptions is defined ? 'active' : '' }}\" href=\"{{ path('app_student_subscriptions') }}\"><i class=\"bi bi-basket fa-fw me-2\"></i>My Subscriptions</a>
                                        <a class=\"list-group-item {{ studentCourses is defined ? 'active' : '' }}\" href=\"{{ path('app_student_courses') }}\"><i class=\"bi bi-basket fa-fw me-2\"></i>My Courses</a>
                                        <a class=\"list-group-item {{ isEvaluations is defined ? 'active' : '' }}\" href=\"{{ path('app_student_evaluation') }}\"><i class=\"bi bi-file fa-fw me-2\"></i>My Tests</a>
                                        <a class=\"list-group-item {{ isPayments is defined ? 'active' : '' }}\" href=\"{{ url(\"app_student_payments\") }}\"><i class=\"bi bi-credit-card-2-front fa-fw me-2\"></i>Payments</a>
                                        <a class=\"list-group-item {{ isNetWork is defined ? 'active' : '' }}\" href=\"{{ url(\"app_student_network\") }}\"><i class=\"bi bi-people fa-fw me-2\"></i>Network</a>
                                        <a class=\"list-group-item {{ isProfile is defined ? 'active' : '' }}\" href=\"{{ url(\"app_student_profile\") }}\"><i class=\"bi bi-pencil-square fa-fw me-2\"></i>My Profile</a>
                                        <a class=\"list-group-item text-danger bg-danger-soft-hover\" href=\"{{ path('app_logout') }}\"><i class=\"fas fa-sign-out-alt fa-fw me-2\"></i>Sign Out</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Responsive offcanvas body END -->
                    </div>
                    <!-- Left sidebar END -->
                {% endblock %}
                <!-- Main content START -->
                <div class=\"{{ mainContentClass|default('col-xl-9') }}\">

                    {% for message in app.flashes('errors') %}
                        <div class=\"alert alert-danger alert-dismissible\">
                            <p>{{ message }}</p>
                        </div>
                    {% endfor %}
                    {% for message in app.flashes('danger') %}
                        <div class=\"alert alert-danger alert-dismissible\">
                            <p>{{ message }}</p>
                        </div>
                    {% endfor %}
                    {% for message in app.flashes('success') %}
                        <div class=\"alert alert-success alert-dismissible\">
                            <p>{{ message }}</p>
                        </div>
                    {% endfor %}
                    {% for message in app.flashes('warning') %}
                        <div class=\"alert alert-warning alert-dismissible\">
                            <p>{{ message }}</p>
                        </div>
                    {% endfor %}
                    {% for message in app.flashes('infos') %}
                        <div class=\"alert alert-info alert-dismissible\">
                            <p>{{ message }}</p>
                        </div>
                    {% endfor %}

                    {% block pageContent %}{% endblock %}
                    
                </div>
                <!-- Main content END -->
            </div><!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Page content END -->

{% endblock %}
", "student/base.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\student\\base.html.twig");
    }
}
