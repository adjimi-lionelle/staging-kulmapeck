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

/* front/home/index.html.twig */
class __TwigTemplate_c8db29780ce7f6230dea15017dde32f6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'mainBarnner' => [$this, 'block_mainBarnner'],
            'mainContent' => [$this, 'block_mainContent'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home/index.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/home/index.html.twig", 1);
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

        echo " - Accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_mainBarnner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainBarnner"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainBarnner"));

        // line 7
        echo "
    ";
        // line 8
        echo twig_include($this->env, $context, "front/home/_main_barnner.html.twig");
        echo "
    
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
    <!-- =======================
    Counter START -->
    <section class=\"py-0 py-xl-5\">
        <div class=\"container\">
            <div class=\"row g-4\">
                <!-- Counter item -->
                <div class=\"col-sm-6 col-xl-3\">
                    <div class=\"d-flex justify-content-center align-items-center p-4 bg-warning bg-opacity-15 rounded-3\">
                        <span class=\"display-6 lh-1 text-warning mb-0\"><i class=\"fas fa-tv\"></i></span>
                        <div class=\"ms-4 h6 fw-normal mb-0\">
                            <div class=\"d-flex\">
                                <h5 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"10\"\tdata-purecounter-delay=\"200\">0</h5>
                                <span class=\"mb-0 h5\">K</span>
                            </div>
                            <p class=\"mb-0\">";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("OONLINECOURSES_KEY", [], "messages");
        echo "</p>
                        </div>
                    </div>
                </div>
                <!-- Counter item -->
                <div class=\"col-sm-6 col-xl-3\">
                    <div class=\"d-flex justify-content-center align-items-center p-4 bg-blue bg-opacity-10 rounded-3\">
                        <span class=\"display-6 lh-1 text-blue mb-0\"><i class=\"fas fa-user-tie\"></i></span>
                        <div class=\"ms-4 h6 fw-normal mb-0\">
                            <div class=\"d-flex\">
                                <h5 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"200\" data-purecounter-delay=\"200\">0</h5>
                                <span class=\"mb-0 h5\">+</span>
                            </div>
                            <p class=\"mb-0\">";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("EXPERTSTUTORS_KEY", [], "messages");
        echo "</p>
                        </div>
                    </div>
                </div>
                <!-- Counter item -->
                <div class=\"col-sm-6 col-xl-3\">
                    <div class=\"d-flex justify-content-center align-items-center p-4 bg-purple bg-opacity-10 rounded-3\">
                        <span class=\"display-6 lh-1 text-purple mb-0\"><i class=\"fas fa-user-graduate\"></i></span>
                        <div class=\"ms-4 h6 fw-normal mb-0\">
                            <div class=\"d-flex\">
                                <h5 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"60\"\tdata-purecounter-delay=\"200\">0</h5>
                                <span class=\"mb-0 h5\">K+</span>
                            </div>
                            <p class=\"mb-0\">";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ONLINESTUDENTS_KEY", [], "messages");
        echo "</p>
                        </div>
                    </div>
                </div>
                <!-- Counter item -->
                <div class=\"col-sm-6 col-xl-3\">
                    <div class=\"d-flex justify-content-center align-items-center p-4 bg-info bg-opacity-10 rounded-3\">
                        <span class=\"display-6 lh-1 text-info mb-0\"><i class=\"bi bi-patch-check-fill\"></i></span>
                        <div class=\"ms-4 h6 fw-normal mb-0\">
                            <div class=\"d-flex\">
                                <h5 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"6\" data-purecounter-delay=\"300\">0</h5>
                                <span class=\"mb-0 h5\">K+</span>
                            </div>
                            <p class=\"mb-0\">";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CERTIFIEDCOURSES_KEY", [], "messages");
        echo "</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Counter END -->

    <!-- =======================
    Popular course START -->
    <section>
        <div class=\"container\">
            <!-- Title -->
            <div class=\"row mb-4\">
                <div class=\"col-lg-8 mx-auto text-center\">
                    <h2 class=\"fs-1\">";
        // line 85
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("MOSTPOPULAR_KEY", [], "messages");
        echo "</h2>
                    <p class=\"mb-0\">";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("MOSTPOPULARDESCRIPTION_KEY", [], "messages");
        echo "</p>
                </div>
            </div>

            <!-- Tabs START -->
            <ul class=\"nav nav-pills nav-pills-bg-soft justify-content-sm-center mb-4 px-3\" id=\"course-pills-tab\" role=\"tablist\">
    
                ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 93, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 94
            echo "                    <!-- Tab item -->
                    <li class=\"nav-item me-2 me-sm-5\">
                        <button class=\"nav-link mb-2 mb-md-0 ";
            // line 96
            echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 96) === 1)) ? ("active") : (""));
            echo "\" id=\"course-pills-tab-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 96), "html", null, true);
            echo "\" data-bs-toggle=\"pill\" data-bs-target=\"#course-pills-tabs-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 96), "html", null, true);
            echo "\" type=\"button\" role=\"tab\" aria-controls=\"course-pills-tabs-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 96), "html", null, true);
            echo "\" aria-selected=\"false\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "category", [], "any", false, false, false, 96), "name", [], "any", false, false, false, 96), "html", null, true);
            echo "</button>
                    </li>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "                <li class=\"nav-item me-2 me-sm-5\">
                    <a class=\"nav-link mb-2 mb-md-0\" href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_courses");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ALLCOURSES_KEY", [], "messages");
        echo "</a>
                </li>
            </ul>
            <!-- Tabs END -->

            <!-- Tabs content START -->
            <div class=\"tab-content\" id=\"course-pills-tabContent\">
                ";
        // line 107
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 107, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 108
            echo "                    
                    <!-- Content START -->
                    <div class=\"tab-pane fade show ";
            // line 110
            echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 110) === 1)) ? ("active") : (""));
            echo "\" id=\"course-pills-tabs-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 110), "html", null, true);
            echo "\" role=\"tabpanel\" aria-labelledby=\"course-pills-tab-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 110), "html", null, true);
            echo "\">
                        <div class=\"row g-4\">
                            ";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "courses", [], "any", false, false, false, 112));
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
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                echo " 
                                <div class=\"col-sm-6 col-lg-4 col-xl-3\">
                                    ";
                // line 114
                echo twig_include($this->env, $context, "front/includes/courses/_course_item.html.twig");
                echo "
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                        </div> <!-- Row END -->
                    </div>
                    <!-- Content END -->

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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "
            </div>
            <!-- Tabs content END -->
        </div>
    </section>
    <!-- =======================
    Popular course END -->

    <!-- =======================
    Action box START -->
    <section class=\"pt-0 pt-lg-5\">
        <div class=\"container position-relative\">
            <!-- SVG decoration START -->
            <figure class=\"position-absolute top-50 start-50 translate-middle ms-2\">
                <svg>
                    <path class=\"fill-white opacity-4\" d=\"m496 22.999c0 10.493-8.506 18.999-18.999 18.999s-19-8.506-19-18.999 8.507-18.999 19-18.999 18.999 8.506 18.999 18.999z\"/>
                    <path class=\"fill-white opacity-4\" d=\"m775 102.5c0 5.799-4.701 10.5-10.5 10.5-5.798 0-10.499-4.701-10.499-10.5 0-5.798 4.701-10.499 10.499-10.499 5.799 0 10.5 4.701 10.5 10.499z\"/>
                    <path class=\"fill-white opacity-4\" d=\"m192 102c0 6.626-5.373 11.999-12 11.999s-11.999-5.373-11.999-11.999c0-6.628 5.372-12 11.999-12s12 5.372 12 12z\"/>
                    <path class=\"fill-white opacity-4\" d=\"m20.499 10.25c0 5.66-4.589 10.249-10.25 10.249-5.66 0-10.249-4.589-10.249-10.249-0-5.661 4.589-10.25 10.249-10.25 5.661-0 10.25 4.589 10.25 10.25z\"/>
                </svg>
            </figure>
            <!-- SVG decoration END -->
            
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"bg-info p-4 p-sm-5 rounded-3\">
                        <div class=\"row position-relative\">
                            <!-- Svg decoration -->
                            <figure class=\"fill-white opacity-1 position-absolute top-50 start-0 translate-middle-y\">
                                <svg width=\"141px\" height=\"141px\">
                                    <path\td=\"M140.520,70.258 C140.520,109.064 109.062,140.519 70.258,140.519 C31.454,140.519 -0.004,109.064 -0.004,70.258 C-0.004,31.455 31.454,-0.003 70.258,-0.003 C109.062,-0.003 140.520,31.455 140.520,70.258 Z\"/>
                                </svg>
                            </figure>
                            <!-- Action box -->
                            <div class=\"col-11 mx-auto position-relative\">
                                <div class=\"row align-items-center\">
                                    <!-- Title -->
                                    <div class=\"col-lg-7\">
                                        <h3 class=\"text-white\">";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("BECOMEINSTRUCTOR_KEY", [], "messages");
        echo "</h3>
                                        <p class=\"text-white mb-3 mb-lg-0\">";
        // line 161
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("BECOMEINSTRUCTORDESCRIPTION_KEY", [], "messages");
        echo "</p>
                                    </div>
                                    <!-- Content and input -->
                                    <div class=\"col-lg-5 text-lg-end\">
                                        <a href=\"";
        // line 165
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_register", ["type" => "trainer"]);
        echo "\" class=\"btn btn-outline-warning mb-0\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("STARTTEACHINGTODAY_KEY", [], "messages");
        echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- Row END -->
                    </div>
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Action box END -->

    <!-- =======================
    Trending courses START -->
    <section class=\"pb-5 pt-0 pt-lg-5\">
        <div class=\"container\">
            <!-- Title -->
            <div class=\"row mb-4\">
                <div class=\"col-lg-8 mx-auto text-center\">
                    <h2 class=\"fs-1\">";
        // line 185
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("TRENDINGCOURSES_KEY", [], "messages");
        echo "</h2>
                    <p class=\"mb-0\">";
        // line 186
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("TRENDINGCOURSESDESCRIPTION_KEY", [], "messages");
        echo "</p>
                </div>
            </div>
            <div class=\"row\">
                <!-- Slider START -->
                <div class=\"tiny-slider arrow-round arrow-blur arrow-hover\">
                    <div class=\"tiny-slider-inner pb-1\" data-autoplay=\"true\" data-arrow=\"true\" data-edge=\"2\" data-dots=\"false\" data-items=\"3\" data-items-lg=\"2\" data-items-sm=\"1\">
                        ";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["trendingCourses"]) || array_key_exists("trendingCourses", $context) ? $context["trendingCourses"] : (function () { throw new RuntimeError('Variable "trendingCourses" does not exist.', 193, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 194
            echo "                        <!-- Card item START -->
                        ";
            // line 195
            echo twig_include($this->env, $context, "front/includes/courses/_trending_course.html.twig");
            echo "
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "                    </div>
                </div>
                <!-- Slider END -->
            </div>
        </div>
    </section>
    <!-- =======================
    Trending courses END -->

    <!-- =======================
    Reviews START -->
    <section class=\"bg-light\">
        <div class=\"container\">
            <div class=\"row g-4 g-lg-5 align-items-center\">
                <div class=\"col-xl-7 order-2 order-xl-1\">
                    <div class=\"row mt-0 mt-xl-5\">
                        <!-- Review -->
                        <div class=\"col-md-7 position-relative mb-0 mt-0 mt-md-5\">
                            <!-- SVG -->
                            <figure class=\"fill-danger opacity-2 position-absolute top-0 start-0 translate-middle mb-3\">
                                <svg width=\"211px\" height=\"211px\">
                                    <path d=\"M210.030,105.011 C210.030,163.014 163.010,210.029 105.012,210.029 C47.013,210.029 -0.005,163.014 -0.005,105.011 C-0.005,47.015 47.013,-0.004 105.012,-0.004 C163.010,-0.004 210.030,47.015 210.030,105.011 Z\"></path>
                                </svg>
                            </figure>
                            ";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topReviews"]) || array_key_exists("topReviews", $context) ? $context["topReviews"] : (function () { throw new RuntimeError('Variable "topReviews" does not exist.', 222, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["rev"]) {
            // line 223
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 223)) {
                // line 224
                echo "                                    <div class=\"bg-body shadow text-center p-4 rounded-3 position-relative mb-5 mb-md-0\">
                                        <!-- Avatar -->
                                        <div class=\"avatar avatar-xl mb-3\">
                                            <img class=\"avatar-img rounded-circle\" src=\"";
                // line 227
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rev"], "eleve", [], "any", false, false, false, 227), "utilisateur", [], "any", false, false, false, 227), "personne", [], "any", false, false, false, 227), "avatarPath", [], "any", false, false, false, 227)), "html", null, true);
                echo "\" alt=\"avatar\">
                                        </div>
                                        <!-- Content -->
                                        <blockquote>
                                            <p>
                                                <span class=\"me-1 small\"><i class=\"fas fa-quote-left\"></i></span>
                                                    ";
                // line 233
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rev"], "message", [], "any", false, false, false, 233), "html", null, true);
                echo "
                                                <span class=\"ms-1 small\"><i class=\"fas fa-quote-right\"></i></span>
                                            </p>
                                        </blockquote>
                                        <!-- Rating -->
                                        <ul class=\"list-inline mb-2\">
                                            ";
                // line 239
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["rev"], "rating", [], "any", false, false, false, 239)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 240
                    echo "                                                <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 242
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["rev"], "rating", [], "any", false, false, false, 242) < 5)) {
                    // line 243
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(twig_get_attribute($this->env, $this->source, $context["rev"], "rating", [], "any", false, false, false, 243), 4));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 244
                        echo "                                                    <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 246
                    echo "                                            ";
                }
                // line 247
                echo "                                        </ul>
                                        <!-- Info -->
                                        <h6 class=\"mb-0\">";
                // line 249
                echo twig_escape_filter($this->env, (( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rev"], "eleve", [], "any", false, false, false, 249), "utilisateur", [], "any", false, false, false, 249), "personne", [], "any", false, false, false, 249), "firstName", [], "any", false, false, false, 249) === null)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rev"], "eleve", [], "any", false, false, false, 249), "utilisateur", [], "any", false, false, false, 249), "personne", [], "any", false, false, false, 249), "firstName", [], "any", false, false, false, 249)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rev"], "eleve", [], "any", false, false, false, 249), "utilisateur", [], "any", false, false, false, 249), "personne", [], "any", false, false, false, 249), "lastName", [], "any", false, false, false, 249))), "html", null, true);
                echo "</h6>
                                    </div> 
                                ";
            }
            // line 252
            echo "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rev'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 253
        echo "                        </div>

                        <!-- Mentor list -->
                        <div class=\"col-md-5 mt-5 mt-md-0 d-none d-md-block\">
                            <div class=\"bg-body shadow p-4 rounded-3 d-inline-block position-relative\">
                                <!-- Icon -->
                                <div class=\"icon-lg bg-warning rounded-circle position-absolute top-0 start-100 translate-middle\">
                                    <i class=\"bi bi-shield-fill-check text-dark\"></i>
                                </div>
                                <!-- Title -->
                                <h6 class=\"mb-3\">100+ ";
        // line 263
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("VERIFIEDMENTOR_KEY", [], "messages");
        echo "</h6>
                                <!-- Mentor Item -->
                                <div class=\"d-flex align-items-center mb-3\">
                                    <!-- Avatar -->
                                    <div class=\"avatar avatar-sm\">
                                        <img class=\"avatar-img rounded-1\" src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/09.jpg"), "html", null, true);
        echo "\" alt=\"avatar\">
                                    </div>
                                    <!-- Info -->
                                    <div class=\"ms-2\">
                                        <h6 class=\"mb-0\">Lori Stevens</h6>
                                        <p class=\"mb-0 small\">Tutor of physic</p>
                                    </div>
                                </div>

                                <!-- Mentor Item -->
                                <div class=\"d-flex align-items-center mb-3\">
                                    <!-- Avatar -->
                                    <div class=\"avatar avatar-sm\">
                                        <img class=\"avatar-img rounded-1\" src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/04.jpg"), "html", null, true);
        echo "\" alt=\"avatar\">
                                    </div>
                                    <!-- Info -->
                                    <div class=\"ms-2\">
                                        <h6 class=\"mb-0\">Billy Vasquez</h6>
                                        <p class=\"mb-0 small\">Tutor of chemistry</p>
                                    </div>
                                </div>

                                <!-- Mentor Item -->
                                <div class=\"d-flex align-items-center\">
                                    <!-- Avatar -->
                                    <div class=\"avatar avatar-sm\">
                                        <img class=\"avatar-img rounded-1\" src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/02.jpg"), "html", null, true);
        echo "\" alt=\"avatar\">
                                    </div>
                                    <!-- Info -->
                                    <div class=\"ms-2\">
                                        <h6 class=\"mb-0\">Larry Lawson</h6>
                                        <p class=\"mb-0 small\">Tutor of technology</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row END -->

                    <div class=\"row mt-5 mt-xl-0\">
                        <!-- Rating -->
                        <div class=\"col-7 mt-0 mt-xl-5 text-end position-relative z-index-1 d-none d-md-block\">
                            <!-- SVG -->
                            <figure\tclass=\"fill-danger position-absolute top-0 start-50 mt-n7 ms-6 ps-3 pt-2 z-index-n1 d-none d-lg-block\">
                                <svg  vg enable-background=\"new 0 0 160.7 159.8\" height=\"180px\">
                                    <path d=\"m153.2 114.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m116.4 114.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m134.8 114.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m135.1 96.9c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m153.5 96.9c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m98.3 96.9c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z\" />
                                    <ellipse cx=\"116.7\" cy=\"99.1\" rx=\"2.1\" ry=\"2.2\" />
                                    <path d=\"m153.2 149.8c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.3 0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m135.1 132.2c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2 0-1.3 0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m153.5 132.2c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.3 0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m80.2 79.3c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2z\" />
                                    <path d=\"m117 79.3c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m98.6 79.3c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m135.4 79.3c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m153.8 79.3c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m80.6 61.7c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z\" />
                                    <ellipse cx=\"98.9\" cy=\"63.9\" rx=\"2.1\" ry=\"2.2\" />
                                    <path d=\"m117.3 61.7c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z\" />
                                    <ellipse cx=\"62.2\" cy=\"63.9\" rx=\"2.1\" ry=\"2.2\" />
                                    <ellipse cx=\"154.1\" cy=\"63.9\" rx=\"2.1\" ry=\"2.2\" />
                                    <path d=\"m135.7 61.7c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m154.4 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m80.9 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m44.1 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m99.2 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2z\" />
                                    <ellipse cx=\"117.6\" cy=\"46.3\" rx=\"2.1\" ry=\"2.2\" />
                                    <path d=\"m136 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m62.5 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m154.7 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m62.8 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z\" />
                                    <ellipse cx=\"136.3\" cy=\"28.6\" rx=\"2.1\" ry=\"2.2\" />
                                    <path d=\"m99.6 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m117.9 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2z\" />
                                    <path d=\"m81.2 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m26 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z\" />
                                    <ellipse cx=\"44.4\" cy=\"28.6\" rx=\"2.1\" ry=\"2.2\" />
                                    <path d=\"m136.6 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2 0.1 1.2-0.9 2.2-2.1 2.2z\" />
                                    <path d=\"m155 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2 0.1 1.2-0.9 2.2-2.1 2.2z\" />
                                    <path d=\"m26.3 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2s-0.9 2.2-2.1 2.2z\" />
                                    <path d=\"m81.5 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2s-0.9 2.2-2.1 2.2z\" />
                                    <path d=\"m63.1 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2s-0.9 2.2-2.1 2.2z\" />
                                    <path d=\"m44.7 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2s-0.9 2.2-2.1 2.2z\" />
                                    <path d=\"m118.2 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2 0.1 1.2-0.9 2.2-2.1 2.2z\" />
                                    <path d=\"m7.9 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2 0.1 1.2-0.9 2.2-2.1 2.2z\" />
                                    <path d=\"m99.9 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2z\" />
                                </svg>
                            </figure>

                            <div class=\"p-3 bg-primary d-inline-block rounded-4 shadow-lg text-center\" style=\"background:url(assets/images/pattern/02.png) no-repeat center center; background-size:cover;\">
                                <!-- Info -->
                                <h5 class=\"text-white mb-0\">4.5/5.0</h5>
                                <!-- Rating -->
                                <ul class=\"list-inline mb-2\">
                                    <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                    <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                    <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                    <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                    <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star-half-alt text-warning\"></i></li>
                                </ul>
                                <p class=\"text-white mb-0\">Based on 3265 ratings</p>
                            </div>
                        </div>

                        <!-- Review -->
                        <div class=\"col-md-5 mt-n6 mb-0 mb-md-5\">
                            ";
        // line 377
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topReviews"]) || array_key_exists("topReviews", $context) ? $context["topReviews"] : (function () { throw new RuntimeError('Variable "topReviews" does not exist.', 377, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["rev"]) {
            // line 378
            echo "                                ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 378)) {
                // line 379
                echo "                                    <div class=\"bg-body shadow text-center p-4 rounded-3\">
                                        <!-- Avatar -->
                                        <div class=\"avatar avatar-xl mb-3\">
                                            <img class=\"avatar-img rounded-circle\" src=\"";
                // line 382
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rev"], "eleve", [], "any", false, false, false, 382), "utilisateur", [], "any", false, false, false, 382), "personne", [], "any", false, false, false, 382), "avatarPath", [], "any", false, false, false, 382)), "html", null, true);
                echo "\" alt=\"avatar\">
                                        </div>
                                        <!-- Content -->
                                        <blockquote>
                                            <p>
                                                <span class=\"me-1 small\"><i class=\"fas fa-quote-left\"></i></span> 
                                                    ";
                // line 388
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rev"], "message", [], "any", false, false, false, 388), "html", null, true);
                echo "
                                                <span class=\"ms-1 small\"><i class=\"fas fa-quote-right\"></i></span>
                                            </p>
                                        </blockquote>
                                        <!-- Rating -->
                                        <ul class=\"list-inline mb-2\">
                                            ";
                // line 394
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["rev"], "rating", [], "any", false, false, false, 394)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 395
                    echo "                                                <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 397
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["rev"], "rating", [], "any", false, false, false, 397) < 5)) {
                    // line 398
                    echo "                                                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(twig_get_attribute($this->env, $this->source, $context["rev"], "rating", [], "any", false, false, false, 398), 4));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 399
                        echo "                                                    <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 401
                    echo "                                            ";
                }
                // line 402
                echo "                                        </ul>
                                        <!-- Info -->
                                        <h6 class=\"mb-0\">";
                // line 404
                echo twig_escape_filter($this->env, (( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rev"], "eleve", [], "any", false, false, false, 404), "utilisateur", [], "any", false, false, false, 404), "personne", [], "any", false, false, false, 404), "firstName", [], "any", false, false, false, 404) === null)) ? (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rev"], "eleve", [], "any", false, false, false, 404), "utilisateur", [], "any", false, false, false, 404), "personne", [], "any", false, false, false, 404), "firstName", [], "any", false, false, false, 404)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rev"], "eleve", [], "any", false, false, false, 404), "utilisateur", [], "any", false, false, false, 404), "personne", [], "any", false, false, false, 404), "lastName", [], "any", false, false, false, 404))), "html", null, true);
                echo "</h6>
                                    </div> 
                                ";
            }
            // line 407
            echo "                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rev'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 408
        echo "                        </div>
                    </div> <!-- Row END -->
                </div>
                <div class=\"col-xl-5 order-1 text-center text-xl-start\">
                    <!-- Title -->
                    <h2 class=\"fs-1\">";
        // line 413
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("FEEDBACK_KEY", [], "messages");
        echo "</h2>
                    <p>";
        // line 414
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("FEEDBACKDESCRIPTION_KEY", [], "messages");
        echo "</p>
                    ";
        // line 415
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 415, $this->source); })()), "user", [], "any", false, false, false, 415)) {
            // line 416
            echo "                        <a data-bs-toggle=\"modal\" data-bs-target=\"#coursePremium\" href=\"#\" class=\"btn btn-primary mb-0\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CREATEANACCOUNT_KEY", [], "messages");
            echo "</a>
                    ";
        }
        // line 418
        echo "                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Reviews END -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  866 => 418,  860 => 416,  858 => 415,  854 => 414,  850 => 413,  843 => 408,  829 => 407,  823 => 404,  819 => 402,  816 => 401,  809 => 399,  804 => 398,  801 => 397,  794 => 395,  790 => 394,  781 => 388,  772 => 382,  767 => 379,  764 => 378,  747 => 377,  661 => 294,  645 => 281,  629 => 268,  621 => 263,  609 => 253,  595 => 252,  589 => 249,  585 => 247,  582 => 246,  575 => 244,  570 => 243,  567 => 242,  560 => 240,  556 => 239,  547 => 233,  538 => 227,  533 => 224,  530 => 223,  513 => 222,  487 => 198,  470 => 195,  467 => 194,  450 => 193,  440 => 186,  436 => 185,  411 => 165,  404 => 161,  400 => 160,  360 => 122,  342 => 117,  325 => 114,  305 => 112,  296 => 110,  292 => 108,  275 => 107,  263 => 100,  260 => 99,  235 => 96,  231 => 94,  214 => 93,  204 => 86,  200 => 85,  180 => 68,  164 => 55,  148 => 42,  132 => 29,  115 => 14,  105 => 13,  92 => 8,  89 => 7,  79 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"front/base.html.twig\" %}

{% block title %} - Accueil{% endblock %}


{% block mainBarnner %}

    {{ include('front/home/_main_barnner.html.twig') }}
    
{% endblock %}


{% block mainContent %}
    
    <!-- =======================
    Counter START -->
    <section class=\"py-0 py-xl-5\">
        <div class=\"container\">
            <div class=\"row g-4\">
                <!-- Counter item -->
                <div class=\"col-sm-6 col-xl-3\">
                    <div class=\"d-flex justify-content-center align-items-center p-4 bg-warning bg-opacity-15 rounded-3\">
                        <span class=\"display-6 lh-1 text-warning mb-0\"><i class=\"fas fa-tv\"></i></span>
                        <div class=\"ms-4 h6 fw-normal mb-0\">
                            <div class=\"d-flex\">
                                <h5 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"10\"\tdata-purecounter-delay=\"200\">0</h5>
                                <span class=\"mb-0 h5\">K</span>
                            </div>
                            <p class=\"mb-0\">{% trans %}OONLINECOURSES_KEY{% endtrans %}</p>
                        </div>
                    </div>
                </div>
                <!-- Counter item -->
                <div class=\"col-sm-6 col-xl-3\">
                    <div class=\"d-flex justify-content-center align-items-center p-4 bg-blue bg-opacity-10 rounded-3\">
                        <span class=\"display-6 lh-1 text-blue mb-0\"><i class=\"fas fa-user-tie\"></i></span>
                        <div class=\"ms-4 h6 fw-normal mb-0\">
                            <div class=\"d-flex\">
                                <h5 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"200\" data-purecounter-delay=\"200\">0</h5>
                                <span class=\"mb-0 h5\">+</span>
                            </div>
                            <p class=\"mb-0\">{% trans %}EXPERTSTUTORS_KEY{% endtrans %}</p>
                        </div>
                    </div>
                </div>
                <!-- Counter item -->
                <div class=\"col-sm-6 col-xl-3\">
                    <div class=\"d-flex justify-content-center align-items-center p-4 bg-purple bg-opacity-10 rounded-3\">
                        <span class=\"display-6 lh-1 text-purple mb-0\"><i class=\"fas fa-user-graduate\"></i></span>
                        <div class=\"ms-4 h6 fw-normal mb-0\">
                            <div class=\"d-flex\">
                                <h5 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"60\"\tdata-purecounter-delay=\"200\">0</h5>
                                <span class=\"mb-0 h5\">K+</span>
                            </div>
                            <p class=\"mb-0\">{% trans %}ONLINESTUDENTS_KEY{% endtrans %}</p>
                        </div>
                    </div>
                </div>
                <!-- Counter item -->
                <div class=\"col-sm-6 col-xl-3\">
                    <div class=\"d-flex justify-content-center align-items-center p-4 bg-info bg-opacity-10 rounded-3\">
                        <span class=\"display-6 lh-1 text-info mb-0\"><i class=\"bi bi-patch-check-fill\"></i></span>
                        <div class=\"ms-4 h6 fw-normal mb-0\">
                            <div class=\"d-flex\">
                                <h5 class=\"purecounter mb-0 fw-bold\" data-purecounter-start=\"0\" data-purecounter-end=\"6\" data-purecounter-delay=\"300\">0</h5>
                                <span class=\"mb-0 h5\">K+</span>
                            </div>
                            <p class=\"mb-0\">{% trans %}CERTIFIEDCOURSES_KEY{% endtrans %}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Counter END -->

    <!-- =======================
    Popular course START -->
    <section>
        <div class=\"container\">
            <!-- Title -->
            <div class=\"row mb-4\">
                <div class=\"col-lg-8 mx-auto text-center\">
                    <h2 class=\"fs-1\">{% trans %}MOSTPOPULAR_KEY{% endtrans %}</h2>
                    <p class=\"mb-0\">{% trans %}MOSTPOPULARDESCRIPTION_KEY{% endtrans %}</p>
                </div>
            </div>

            <!-- Tabs START -->
            <ul class=\"nav nav-pills nav-pills-bg-soft justify-content-sm-center mb-4 px-3\" id=\"course-pills-tab\" role=\"tablist\">
    
                {% for category in categories %}
                    <!-- Tab item -->
                    <li class=\"nav-item me-2 me-sm-5\">
                        <button class=\"nav-link mb-2 mb-md-0 {{ loop.index is same as 1 ? 'active' : '' }}\" id=\"course-pills-tab-{{ loop.index }}\" data-bs-toggle=\"pill\" data-bs-target=\"#course-pills-tabs-{{ loop.index }}\" type=\"button\" role=\"tab\" aria-controls=\"course-pills-tabs-{{ loop.index }}\" aria-selected=\"false\">{{ category.category.name }}</button>
                    </li>
                {% endfor %}
                <li class=\"nav-item me-2 me-sm-5\">
                    <a class=\"nav-link mb-2 mb-md-0\" href=\"{{ url(\"app_front_courses\") }}\">{% trans %}ALLCOURSES_KEY{% endtrans %}</a>
                </li>
            </ul>
            <!-- Tabs END -->

            <!-- Tabs content START -->
            <div class=\"tab-content\" id=\"course-pills-tabContent\">
                {% for category in categories %}
                    
                    <!-- Content START -->
                    <div class=\"tab-pane fade show {{ loop.index is same as 1 ? 'active' : '' }}\" id=\"course-pills-tabs-{{ loop.index }}\" role=\"tabpanel\" aria-labelledby=\"course-pills-tab-{{ loop.index }}\">
                        <div class=\"row g-4\">
                            {% for course in category.courses %} 
                                <div class=\"col-sm-6 col-lg-4 col-xl-3\">
                                    {{ include('front/includes/courses/_course_item.html.twig') }}
                                </div>
                            {% endfor %}
                        </div> <!-- Row END -->
                    </div>
                    <!-- Content END -->

                    {% endfor %}

            </div>
            <!-- Tabs content END -->
        </div>
    </section>
    <!-- =======================
    Popular course END -->

    <!-- =======================
    Action box START -->
    <section class=\"pt-0 pt-lg-5\">
        <div class=\"container position-relative\">
            <!-- SVG decoration START -->
            <figure class=\"position-absolute top-50 start-50 translate-middle ms-2\">
                <svg>
                    <path class=\"fill-white opacity-4\" d=\"m496 22.999c0 10.493-8.506 18.999-18.999 18.999s-19-8.506-19-18.999 8.507-18.999 19-18.999 18.999 8.506 18.999 18.999z\"/>
                    <path class=\"fill-white opacity-4\" d=\"m775 102.5c0 5.799-4.701 10.5-10.5 10.5-5.798 0-10.499-4.701-10.499-10.5 0-5.798 4.701-10.499 10.499-10.499 5.799 0 10.5 4.701 10.5 10.499z\"/>
                    <path class=\"fill-white opacity-4\" d=\"m192 102c0 6.626-5.373 11.999-12 11.999s-11.999-5.373-11.999-11.999c0-6.628 5.372-12 11.999-12s12 5.372 12 12z\"/>
                    <path class=\"fill-white opacity-4\" d=\"m20.499 10.25c0 5.66-4.589 10.249-10.25 10.249-5.66 0-10.249-4.589-10.249-10.249-0-5.661 4.589-10.25 10.249-10.25 5.661-0 10.25 4.589 10.25 10.25z\"/>
                </svg>
            </figure>
            <!-- SVG decoration END -->
            
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"bg-info p-4 p-sm-5 rounded-3\">
                        <div class=\"row position-relative\">
                            <!-- Svg decoration -->
                            <figure class=\"fill-white opacity-1 position-absolute top-50 start-0 translate-middle-y\">
                                <svg width=\"141px\" height=\"141px\">
                                    <path\td=\"M140.520,70.258 C140.520,109.064 109.062,140.519 70.258,140.519 C31.454,140.519 -0.004,109.064 -0.004,70.258 C-0.004,31.455 31.454,-0.003 70.258,-0.003 C109.062,-0.003 140.520,31.455 140.520,70.258 Z\"/>
                                </svg>
                            </figure>
                            <!-- Action box -->
                            <div class=\"col-11 mx-auto position-relative\">
                                <div class=\"row align-items-center\">
                                    <!-- Title -->
                                    <div class=\"col-lg-7\">
                                        <h3 class=\"text-white\">{% trans %}BECOMEINSTRUCTOR_KEY{% endtrans %}</h3>
                                        <p class=\"text-white mb-3 mb-lg-0\">{% trans %}BECOMEINSTRUCTORDESCRIPTION_KEY{% endtrans %}</p>
                                    </div>
                                    <!-- Content and input -->
                                    <div class=\"col-lg-5 text-lg-end\">
                                        <a href=\"{{ url(\"app_front_register\", {type: 'trainer'}) }}\" class=\"btn btn-outline-warning mb-0\">{% trans %}STARTTEACHINGTODAY_KEY{% endtrans %}</a>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- Row END -->
                    </div>
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Action box END -->

    <!-- =======================
    Trending courses START -->
    <section class=\"pb-5 pt-0 pt-lg-5\">
        <div class=\"container\">
            <!-- Title -->
            <div class=\"row mb-4\">
                <div class=\"col-lg-8 mx-auto text-center\">
                    <h2 class=\"fs-1\">{% trans %}TRENDINGCOURSES_KEY{% endtrans %}</h2>
                    <p class=\"mb-0\">{% trans %}TRENDINGCOURSESDESCRIPTION_KEY{% endtrans %}</p>
                </div>
            </div>
            <div class=\"row\">
                <!-- Slider START -->
                <div class=\"tiny-slider arrow-round arrow-blur arrow-hover\">
                    <div class=\"tiny-slider-inner pb-1\" data-autoplay=\"true\" data-arrow=\"true\" data-edge=\"2\" data-dots=\"false\" data-items=\"3\" data-items-lg=\"2\" data-items-sm=\"1\">
                        {% for course in trendingCourses %}
                        <!-- Card item START -->
                        {{ include('front/includes/courses/_trending_course.html.twig') }}
                        <!-- Card item END -->
                        {% endfor %}
                    </div>
                </div>
                <!-- Slider END -->
            </div>
        </div>
    </section>
    <!-- =======================
    Trending courses END -->

    <!-- =======================
    Reviews START -->
    <section class=\"bg-light\">
        <div class=\"container\">
            <div class=\"row g-4 g-lg-5 align-items-center\">
                <div class=\"col-xl-7 order-2 order-xl-1\">
                    <div class=\"row mt-0 mt-xl-5\">
                        <!-- Review -->
                        <div class=\"col-md-7 position-relative mb-0 mt-0 mt-md-5\">
                            <!-- SVG -->
                            <figure class=\"fill-danger opacity-2 position-absolute top-0 start-0 translate-middle mb-3\">
                                <svg width=\"211px\" height=\"211px\">
                                    <path d=\"M210.030,105.011 C210.030,163.014 163.010,210.029 105.012,210.029 C47.013,210.029 -0.005,163.014 -0.005,105.011 C-0.005,47.015 47.013,-0.004 105.012,-0.004 C163.010,-0.004 210.030,47.015 210.030,105.011 Z\"></path>
                                </svg>
                            </figure>
                            {% for rev in topReviews %}
                                {% if loop.first %}
                                    <div class=\"bg-body shadow text-center p-4 rounded-3 position-relative mb-5 mb-md-0\">
                                        <!-- Avatar -->
                                        <div class=\"avatar avatar-xl mb-3\">
                                            <img class=\"avatar-img rounded-circle\" src=\"{{asset(rev.eleve.utilisateur.personne.avatarPath)}}\" alt=\"avatar\">
                                        </div>
                                        <!-- Content -->
                                        <blockquote>
                                            <p>
                                                <span class=\"me-1 small\"><i class=\"fas fa-quote-left\"></i></span>
                                                    {{ rev.message }}
                                                <span class=\"ms-1 small\"><i class=\"fas fa-quote-right\"></i></span>
                                            </p>
                                        </blockquote>
                                        <!-- Rating -->
                                        <ul class=\"list-inline mb-2\">
                                            {% for i in 1..rev.rating %}
                                                <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                            {% endfor %}
                                            {% if rev.rating < 5 %}
                                                {% for i in rev.rating..4 %}
                                                    <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                                                {% endfor %}
                                            {% endif %}
                                        </ul>
                                        <!-- Info -->
                                        <h6 class=\"mb-0\">{{ rev.eleve.utilisateur.personne.firstName is not same as null ? rev.eleve.utilisateur.personne.firstName : rev.eleve.utilisateur.personne.lastName }}</h6>
                                    </div> 
                                {% endif %}
                            {% endfor %}
                        </div>

                        <!-- Mentor list -->
                        <div class=\"col-md-5 mt-5 mt-md-0 d-none d-md-block\">
                            <div class=\"bg-body shadow p-4 rounded-3 d-inline-block position-relative\">
                                <!-- Icon -->
                                <div class=\"icon-lg bg-warning rounded-circle position-absolute top-0 start-100 translate-middle\">
                                    <i class=\"bi bi-shield-fill-check text-dark\"></i>
                                </div>
                                <!-- Title -->
                                <h6 class=\"mb-3\">100+ {% trans %}VERIFIEDMENTOR_KEY{% endtrans %}</h6>
                                <!-- Mentor Item -->
                                <div class=\"d-flex align-items-center mb-3\">
                                    <!-- Avatar -->
                                    <div class=\"avatar avatar-sm\">
                                        <img class=\"avatar-img rounded-1\" src=\"{{asset('assets/images/avatar/09.jpg')}}\" alt=\"avatar\">
                                    </div>
                                    <!-- Info -->
                                    <div class=\"ms-2\">
                                        <h6 class=\"mb-0\">Lori Stevens</h6>
                                        <p class=\"mb-0 small\">Tutor of physic</p>
                                    </div>
                                </div>

                                <!-- Mentor Item -->
                                <div class=\"d-flex align-items-center mb-3\">
                                    <!-- Avatar -->
                                    <div class=\"avatar avatar-sm\">
                                        <img class=\"avatar-img rounded-1\" src=\"{{ asset('assets/images/avatar/04.jpg') }}\" alt=\"avatar\">
                                    </div>
                                    <!-- Info -->
                                    <div class=\"ms-2\">
                                        <h6 class=\"mb-0\">Billy Vasquez</h6>
                                        <p class=\"mb-0 small\">Tutor of chemistry</p>
                                    </div>
                                </div>

                                <!-- Mentor Item -->
                                <div class=\"d-flex align-items-center\">
                                    <!-- Avatar -->
                                    <div class=\"avatar avatar-sm\">
                                        <img class=\"avatar-img rounded-1\" src=\"{{ asset('assets/images/avatar/02.jpg') }}\" alt=\"avatar\">
                                    </div>
                                    <!-- Info -->
                                    <div class=\"ms-2\">
                                        <h6 class=\"mb-0\">Larry Lawson</h6>
                                        <p class=\"mb-0 small\">Tutor of technology</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Row END -->

                    <div class=\"row mt-5 mt-xl-0\">
                        <!-- Rating -->
                        <div class=\"col-7 mt-0 mt-xl-5 text-end position-relative z-index-1 d-none d-md-block\">
                            <!-- SVG -->
                            <figure\tclass=\"fill-danger position-absolute top-0 start-50 mt-n7 ms-6 ps-3 pt-2 z-index-n1 d-none d-lg-block\">
                                <svg  vg enable-background=\"new 0 0 160.7 159.8\" height=\"180px\">
                                    <path d=\"m153.2 114.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m116.4 114.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m134.8 114.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m135.1 96.9c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m153.5 96.9c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m98.3 96.9c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z\" />
                                    <ellipse cx=\"116.7\" cy=\"99.1\" rx=\"2.1\" ry=\"2.2\" />
                                    <path d=\"m153.2 149.8c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.3 0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m135.1 132.2c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2 0-1.3 0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m153.5 132.2c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.3 0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m80.2 79.3c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2z\" />
                                    <path d=\"m117 79.3c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m98.6 79.3c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m135.4 79.3c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m153.8 79.3c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m80.6 61.7c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z\" />
                                    <ellipse cx=\"98.9\" cy=\"63.9\" rx=\"2.1\" ry=\"2.2\" />
                                    <path d=\"m117.3 61.7c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z\" />
                                    <ellipse cx=\"62.2\" cy=\"63.9\" rx=\"2.1\" ry=\"2.2\" />
                                    <ellipse cx=\"154.1\" cy=\"63.9\" rx=\"2.1\" ry=\"2.2\" />
                                    <path d=\"m135.7 61.7c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m154.4 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m80.9 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m44.1 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m99.2 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2z\" />
                                    <ellipse cx=\"117.6\" cy=\"46.3\" rx=\"2.1\" ry=\"2.2\" />
                                    <path d=\"m136 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m62.5 44.1c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m154.7 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m62.8 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z\" />
                                    <ellipse cx=\"136.3\" cy=\"28.6\" rx=\"2.1\" ry=\"2.2\" />
                                    <path d=\"m99.6 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m117.9 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2z\" />
                                    <path d=\"m81.2 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2-0.1-1.2 0.9-2.2 2.1-2.2z\" />
                                    <path d=\"m26 26.5c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2c-1.2 0-2.1-1-2.1-2.2s0.9-2.2 2.1-2.2z\" />
                                    <ellipse cx=\"44.4\" cy=\"28.6\" rx=\"2.1\" ry=\"2.2\" />
                                    <path d=\"m136.6 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2 0.1 1.2-0.9 2.2-2.1 2.2z\" />
                                    <path d=\"m155 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2 0.1 1.2-0.9 2.2-2.1 2.2z\" />
                                    <path d=\"m26.3 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2s-0.9 2.2-2.1 2.2z\" />
                                    <path d=\"m81.5 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2s-0.9 2.2-2.1 2.2z\" />
                                    <path d=\"m63.1 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2s-0.9 2.2-2.1 2.2z\" />
                                    <path d=\"m44.7 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2s-0.9 2.2-2.1 2.2z\" />
                                    <path d=\"m118.2 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2 0.1 1.2-0.9 2.2-2.1 2.2z\" />
                                    <path d=\"m7.9 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2 0.1 1.2-0.9 2.2-2.1 2.2z\" />
                                    <path d=\"m99.9 13.2c-1.2 0-2.1-1-2.1-2.2s1-2.2 2.1-2.2c1.2 0 2.1 1 2.1 2.2s-1 2.2-2.1 2.2z\" />
                                </svg>
                            </figure>

                            <div class=\"p-3 bg-primary d-inline-block rounded-4 shadow-lg text-center\" style=\"background:url(assets/images/pattern/02.png) no-repeat center center; background-size:cover;\">
                                <!-- Info -->
                                <h5 class=\"text-white mb-0\">4.5/5.0</h5>
                                <!-- Rating -->
                                <ul class=\"list-inline mb-2\">
                                    <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                    <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                    <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                    <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                    <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star-half-alt text-warning\"></i></li>
                                </ul>
                                <p class=\"text-white mb-0\">Based on 3265 ratings</p>
                            </div>
                        </div>

                        <!-- Review -->
                        <div class=\"col-md-5 mt-n6 mb-0 mb-md-5\">
                            {% for rev in topReviews %}
                                {% if loop.last %}
                                    <div class=\"bg-body shadow text-center p-4 rounded-3\">
                                        <!-- Avatar -->
                                        <div class=\"avatar avatar-xl mb-3\">
                                            <img class=\"avatar-img rounded-circle\" src=\"{{ asset(rev.eleve.utilisateur.personne.avatarPath) }}\" alt=\"avatar\">
                                        </div>
                                        <!-- Content -->
                                        <blockquote>
                                            <p>
                                                <span class=\"me-1 small\"><i class=\"fas fa-quote-left\"></i></span> 
                                                    {{ rev.message }}
                                                <span class=\"ms-1 small\"><i class=\"fas fa-quote-right\"></i></span>
                                            </p>
                                        </blockquote>
                                        <!-- Rating -->
                                        <ul class=\"list-inline mb-2\">
                                            {% for i in 1..rev.rating %}
                                                <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                            {% endfor %}
                                            {% if rev.rating < 5 %}
                                                {% for i in rev.rating..4 %}
                                                    <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                                                {% endfor %}
                                            {% endif %}
                                        </ul>
                                        <!-- Info -->
                                        <h6 class=\"mb-0\">{{ rev.eleve.utilisateur.personne.firstName is not same as null ? rev.eleve.utilisateur.personne.firstName : rev.eleve.utilisateur.personne.lastName }}</h6>
                                    </div> 
                                {% endif %}
                            {% endfor %}
                        </div>
                    </div> <!-- Row END -->
                </div>
                <div class=\"col-xl-5 order-1 text-center text-xl-start\">
                    <!-- Title -->
                    <h2 class=\"fs-1\">{% trans %}FEEDBACK_KEY{% endtrans %}</h2>
                    <p>{% trans %}FEEDBACKDESCRIPTION_KEY{% endtrans %}</p>
                    {% if not app.user %}
                        <a data-bs-toggle=\"modal\" data-bs-target=\"#coursePremium\" href=\"#\" class=\"btn btn-primary mb-0\">{% trans %}CREATEANACCOUNT_KEY{% endtrans %}</a>
                    {% endif %}
                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Reviews END -->

{% endblock %}", "front/home/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\home\\index.html.twig");
    }
}
