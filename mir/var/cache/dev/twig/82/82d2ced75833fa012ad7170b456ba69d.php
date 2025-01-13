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

/* front/courses/course_details.html.twig */
class __TwigTemplate_cc823b4d344eaae0f0413603524d9066 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/courses/course_details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/courses/course_details.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/courses/course_details.html.twig", 1);
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

        echo " - Course détails";
        
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
    <section class=\"py-0 pb-lg-5\">
        <div class=\"container\">
            <div class=\"row g-3\">
                <!-- Course video START -->
                <div class=\"col-12\">
                    <div class=\"video-player rounded-3\">
                        ";
        // line 13
        if (((( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 13, $this->source); })()), "media", [], "any", false, false, false, 13), "videoUrl", [], "any", false, false, false, 13) === null) ||  !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 13, $this->source); })()), "media", [], "any", false, false, false, 13), "mp4File", [], "any", false, false, false, 13) === null)) ||  !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 13, $this->source); })()), "media", [], "any", false, false, false, 13), "webMFile", [], "any", false, false, false, 13) === null)) ||  !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 13, $this->source); })()), "media", [], "any", false, false, false, 13), "oggFile", [], "any", false, false, false, 13) === null))) {
            // line 14
            echo "                            <video style=\"max-height: 600px;overflow: hidden;\" controls crossorigin=\"anonymous\" playsinline poster=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/courses/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 14, $this->source); })()), "media", [], "any", false, false, false, 14), "imageFile", [], "any", false, false, false, 14))), "html", null, true);
            echo "\">
                                ";
            // line 15
            if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 15, $this->source); })()), "media", [], "any", false, false, false, 15), "videoUrl", [], "any", false, false, false, 15) === null)) {
                // line 16
                echo "                                    <source src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 16, $this->source); })()), "media", [], "any", false, false, false, 16), "videoUrl", [], "any", false, false, false, 16), "html", null, true);
                echo "\" type=\"video/mp4\" size=\"720\">
                                ";
            }
            // line 18
            echo "                                ";
            if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 18, $this->source); })()), "media", [], "any", false, false, false, 18), "mp4File", [], "any", false, false, false, 18) === null)) {
                // line 19
                echo "                                    <source src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/courses/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 19, $this->source); })()), "media", [], "any", false, false, false, 19), "mp4File", [], "any", false, false, false, 19))), "html", null, true);
                echo "\" type=\"video/mp4\" size=\"720\">
                                ";
            }
            // line 21
            echo "                                ";
            if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 21, $this->source); })()), "media", [], "any", false, false, false, 21), "webMFile", [], "any", false, false, false, 21) === null)) {
                // line 22
                echo "                                    <source src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/courses/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 22, $this->source); })()), "media", [], "any", false, false, false, 22), "webMFile", [], "any", false, false, false, 22))), "html", null, true);
                echo "\" type=\"video/webm\" size=\"720\">
                                ";
            }
            // line 24
            echo "                                ";
            if ( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 24, $this->source); })()), "media", [], "any", false, false, false, 24), "oggFile", [], "any", false, false, false, 24) === null)) {
                // line 25
                echo "                                    <source src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/courses/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 25, $this->source); })()), "media", [], "any", false, false, false, 25), "oggFile", [], "any", false, false, false, 25))), "html", null, true);
                echo "\" type=\"video/ogg\" size=\"720\">
                                ";
            }
            // line 27
            echo "                            </video>
                        ";
        } else {
            // line 29
            echo "                            <img style=\"width: 100%;max-height: 400px;\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/courses/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 29, $this->source); })()), "media", [], "any", false, false, false, 29), "imageFile", [], "any", false, false, false, 29))), "html", null, true);
            echo "\" alt=\"\">
                        ";
        }
        // line 31
        echo "                    </div>
                </div>
                <!-- Course video END -->

                <!-- Playlist responsive toggler START -->
                <div class=\"col-12 d-lg-none\">
                    <button class=\"btn btn-primary mb-3\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasSidebar\" aria-controls=\"offcanvasSidebar\">
                        <i class=\"bi bi-camera-video me-1\"></i> ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PLAYLIST_KEY", [], "messages");
        // line 39
        echo "                    </button>
                </div>
                <!-- Playlist responsive toggler END -->
            </div>
        </div>
    </section>

    <section class=\"pt-0\">
        <div class=\"container\">
            <div class=\"row g-lg-5\">

                <!-- Main content START -->
                <div class=\"col-lg-8\">
                    <div class=\"row g-4\">
                                
                        <!-- Course title START -->
                        <div class=\"col-12\">
                            <!-- Title -->
                            <h1>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 57, $this->source); })()), "intitule", [], "any", false, false, false, 57), "html", null, true);
        echo "</h1>
                            <!-- Content -->
                            <ul class=\"list-inline mb-0\">
                                <li class=\"list-inline-item h6 me-3 mb-1 mb-sm-0\"><i class=\"fas fa-star text-warning me-2\"></i>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 60, $this->source); })()), "review", [], "any", false, false, false, 60), "html", null, true);
        echo "/5.0</li>
                                <li class=\"list-inline-item h6 me-3 mb-1 mb-sm-0\"><i class=\"fas fa-user-graduate text-orange me-2\"></i>";
        // line 61
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 61, $this->source); })()), "eleves", [], "any", false, false, false, 61)), "html", null, true);
        echo " Enrolled</li>
                                <li class=\"list-inline-item h6 me-3 mb-1 mb-sm-0\"><i class=\"fas fa-signal text-success me-2\"></i>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 62, $this->source); })()), "niveauDifficulte", [], "any", false, false, false, 62), "html", null, true);
        echo "</li>
                            </ul>
                        </div>
                        <!-- Course title END -->

                        <!-- Instructor detail START -->
                        <div class=\"col-12\">
                            <div class=\"d-sm-flex justify-content-sm-between align-items-center\">
                                <!-- Avatar detail -->
                                <div class=\"d-flex align-items-center\">
                                    <!-- Avatar image -->
                                    <div class=\"avatar avatar-lg\">
                                        <img class=\"avatar-img rounded-circle\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 74, $this->source); })()), "enseignant", [], "any", false, false, false, 74), "avatar", [], "any", false, false, false, 74)), "html", null, true);
        echo "\" alt=\"avatar\">
                                    </div>
                                    <div class=\"ms-3\">
                                        <h6 class=\"mb-0\"><a href=\"#\">";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("BY_KEY", [], "messages");
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 77, $this->source); })()), "enseignant", [], "any", false, false, false, 77), "utilisateur", [], "any", false, false, false, 77), "personne", [], "any", false, false, false, 77), "nomComplet", [], "any", false, false, false, 77), "html", null, true);
        echo "</a></h6>
                                        <p class=\"mb-0 small\">";
        // line 78
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("TRAINER_KEY", [], "messages");
        echo "</p>
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class=\"d-flex mt-2 mt-sm-0\">
                                    <a class=\"btn btn-danger-soft btn-sm mb-0\" href=\"#\">Follow</a>
                                    <!-- Share button with dropdown -->
                                    <div class=\"dropdown ms-2\">
                                        <a href=\"#\" class=\"btn btn-sm mb-0 btn-info-soft small\" role=\"button\" id=\"dropdownShare\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            ";
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SHARE_KEY", [], "messages");
        // line 89
        echo "                                        </a>
                                        <!-- dropdown button -->
                                        <ul class=\"dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded\" aria-labelledby=\"dropdownShare\">
                                            <li><a  class=\"dropdown-item\" href=\"#\"><i class=\"fab fa-twitter-square me-2\"></i>Twitter</a></li>
                                            <li><a class=\"dropdown-item\" href=\"#\"><i class=\"fab fa-facebook-square me-2\"></i>Facebook</a></li>
                                            <li><a class=\"dropdown-item\" href=\"#\"><i class=\"fab fa-linkedin me-2\"></i>LinkedIn</a></li>
                                            <li><a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-copy me-2\"></i>Copy link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Instructor detail END -->

                        <!-- Course detail START -->
                        <div class=\"col-12\">
                            <!-- Tabs START -->
                            <ul class=\"nav nav-pills nav-pills-bg-soft px-3\" id=\"course-pills-tab\" role=\"tablist\">
                                <!-- Tab item -->
                                <li class=\"nav-item me-2 me-sm-4\" role=\"presentation\">
                                    <button class=\"nav-link mb-0 active\" id=\"course-pills-tab-1\" data-bs-toggle=\"pill\" data-bs-target=\"#course-pills-1\" type=\"button\" role=\"tab\" aria-controls=\"course-pills-1\" aria-selected=\"true\">";
        // line 109
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("COURSEOVERVIEW_KEY", [], "messages");
        echo "</button>
                                </li>
                                <!-- Tab item -->
                                <li class=\"nav-item me-2 me-sm-4\" role=\"presentation\">
                                    <button class=\"nav-link mb-0\" id=\"course-pills-tab-2\" data-bs-toggle=\"pill\" data-bs-target=\"#course-pills-2\" type=\"button\" role=\"tab\" aria-controls=\"course-pills-2\" aria-selected=\"false\">";
        // line 113
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("COURSE_REVIEWS_KEY", [], "messages");
        echo "</button>
                                </li>
                                <!-- Tab item -->
                                <li class=\"nav-item me-2 me-sm-4\" role=\"presentation\">
                                    <button class=\"nav-link mb-0\" id=\"course-pills-tab-3\" data-bs-toggle=\"pill\" data-bs-target=\"#course-pills-3\" type=\"button\" role=\"tab\" aria-controls=\"course-pills-3\" aria-selected=\"false\">FAQs </button>
                                </li>
                                <!-- Tab item -->
                                <li class=\"nav-item me-2 me-sm-4\" role=\"presentation\">
                                    <button class=\"nav-link mb-0\" id=\"course-pills-tab-4\" data-bs-toggle=\"pill\" data-bs-target=\"#course-pills-4\" type=\"button\" role=\"tab\" aria-controls=\"course-pills-4\" aria-selected=\"false\">Forum</button>
                                </li>
                            </ul>
                            <!-- Tabs END -->

                            <!-- Tab contents START -->
                            <div class=\"tab-content pt-4 px-3\" id=\"course-pills-tabContent\">
                                <!-- Content START -->
                                <div class=\"tab-pane fade show active\" id=\"course-pills-1\" role=\"tabpanel\" aria-labelledby=\"course-pills-tab-1\">
                                    <!-- Course detail START -->
                                    <h5 class=\"mb-3\">Course Description</h5>
                                    ";
        // line 132
        echo twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 132, $this->source); })()), "content", [], "any", false, false, false, 132);
        echo "
                                </div>
                                <!-- Content END -->

                                <!-- Content START -->
                                <div class=\"tab-pane fade\" id=\"course-pills-2\" role=\"tabpanel\" aria-labelledby=\"course-pills-tab-2\">
                                    ";
        // line 138
        echo twig_include($this->env, $context, "front/includes/courses/_course_reviews.html.twig");
        echo "
                                </div>
                                <!-- Content END -->

                                <!-- Content START -->
                                <div class=\"tab-pane fade\" id=\"course-pills-3\" role=\"tabpanel\" aria-labelledby=\"course-pills-tab-3\">
                                    <!-- Title -->
                                    <h5 class=\"mb-3\">Frequently Asked Questions</h5>
                                    ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 146, $this->source); })()), "faqs", [], "any", false, false, false, 146));
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 147
            echo "                                        <!-- FAQ item -->
                                        <div class=\"mt-4\">
                                            <h6>";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["faq"], "question", [], "any", false, false, false, 149), "html", null, true);
            echo "</h6>
                                            <p class=\"mb-0\">";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["faq"], "answer", [], "any", false, false, false, 150), "html", null, true);
            echo "</p>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "                        
                                </div>
                                <!-- Content END -->

                                <!-- Content START -->
                                <div class=\"tab-pane fade\" id=\"course-pills-4\" role=\"tabpanel\" aria-labelledby=\"course-pills-tab-4\">
                                    ";
        // line 159
        echo twig_include($this->env, $context, "front/includes/courses/forum.html.twig");
        echo "
                                </div>

                                <div class=\"mt-5 text-right\">
                                    ";
        // line 163
        if ( !((isset($context["lastReadLesson"]) || array_key_exists("lastReadLesson", $context) ? $context["lastReadLesson"] : (function () { throw new RuntimeError('Variable "lastReadLesson" does not exist.', 163, $this->source); })()) === null)) {
            // line 164
            echo "                                        <a class=\"btn btn-success-soft\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_read_lesson", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["lastReadLesson"]) || array_key_exists("lastReadLesson", $context) ? $context["lastReadLesson"] : (function () { throw new RuntimeError('Variable "lastReadLesson" does not exist.', 164, $this->source); })()), "slug", [], "any", false, false, false, 164)]), "html", null, true);
            echo "\">Poursuivre la lecture</a>
                                    ";
        } else {
            // line 166
            echo "                                        <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_course_start", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 166, $this->source); })()), "slug", [], "any", false, false, false, 166)]), "html", null, true);
            echo "\" class=\"btn btn-primary-soft\">Commencer la lecture</a>
                                    ";
        }
        // line 168
        echo "                                    
                                    
                                </div>
                                <!-- Content END -->
                            </div>
                            <!-- Tab contents END -->
                        </div>
                        <!-- Course detail END -->
                    </div>
                </div>
                <!-- Main content END -->

                <!-- Right sidebar START -->
                <div class=\"col-lg-4\">
                    <!-- Responsive offcanvas body START -->
                    <div class=\"offcanvas-lg offcanvas-end\" tabindex=\"-1\" id=\"offcanvasSidebar\" aria-labelledby=\"offcanvasSidebarLabel\">
                        <div class=\"offcanvas-header bg-dark\">
                            <h5 class=\"offcanvas-title text-white\" id=\"offcanvasSidebarLabel\">Course playlist</h5>
                            <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"offcanvas\" data-bs-target=\"#offcanvasSidebar\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
                        </div>
                        <div class=\"offcanvas-body p-3 p-lg-0\">
                            <div class=\"col-12\">
                                <!-- Accordion START -->
                                <div class=\"accordion accordion-icon accordion-bg-light\" id=\"accordionExample2\">
                                    ";
        // line 192
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 192, $this->source); })()), "chapitres", [], "any", false, false, false, 192));
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
        foreach ($context['_seq'] as $context["_key"] => $context["chapter"]) {
            // line 193
            echo "                                        <!-- Item -->
                                        <div class=\"accordion-item mb-3\">
                                            <h6 class=\"accordion-header font-base\" id=\"heading-";
            // line 195
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "id", [], "any", false, false, false, 195), "html", null, true);
            echo "\">
                                                <a class=\"accordion-button fw-bold rounded ";
            // line 196
            echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 196) > 1)) ? ("collapsed") : (""));
            echo " d-block\" href=\"#collapse-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "id", [], "any", false, false, false, 196), "html", null, true);
            echo "\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "id", [], "any", false, false, false, 196), "html", null, true);
            echo "\" aria-expanded=\"";
            echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 196) > 1)) ? ("false") : ("true"));
            echo "\" aria-controls=\"collapse-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "id", [], "any", false, false, false, 196), "html", null, true);
            echo "\">
                                                    <span class=\"mb-0\">";
            // line 197
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "title", [], "any", false, false, false, 197), "html", null, true);
            echo "</span> 
                                                    <span class=\"small d-block mt-1\">(";
            // line 198
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "lessons", [], "any", false, false, false, 198)), "html", null, true);
            echo " Lectures)</span> 
                                                </a>
                                            </h6>
                                            <div id=\"collapse-";
            // line 201
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "id", [], "any", false, false, false, 201), "html", null, true);
            echo "\" class=\"accordion-collapse collapse ";
            echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 201) === 1)) ? ("show") : (""));
            echo "\" aria-labelledby=\"heading-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "id", [], "any", false, false, false, 201), "html", null, true);
            echo "\" data-bs-parent=\"#accordionExample2\">
                                                <div class=\"accordion-body mt-3\">
                                                    <div class=\"vstack gap-3\">

                                                        <!-- Progress bar -->
                                                        <div class=\"overflow-hidden\">
                                                            <div class=\"d-flex justify-content-between\">
                                                                <p class=\"mb-1 h6\">0/";
            // line 208
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "lessons", [], "any", false, false, false, 208)), "html", null, true);
            echo " Completed</p>
                                                                <h6 class=\"mb-1 text-end\">0%</h6>
                                                            </div>
                                                            <div class=\"progress progress-sm bg-primary bg-opacity-10\">
                                                                <div class=\"progress-bar bg-primary aos\" role=\"progressbar\" data-aos=\"slide-right\" data-aos-delay=\"200\" data-aos-duration=\"1000\" data-aos-easing=\"ease-in-out\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        ";
            // line 216
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["chapter"], "lessons", [], "any", false, false, false, 216));
            foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
                // line 217
                echo "                                                            <!-- Course lecture -->
                                                            <div class=\"d-flex justify-content-between align-items-center\">
                                                                <div class=\"position-relative d-flex align-items-center\">
                                                                    ";
                // line 220
                if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_INSTRUCTOR") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                    // line 221
                    echo "                                                                        <a href=\"";
                    echo twig_escape_filter($this->env, ( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 221, $this->source); })()), "user", [], "any", false, false, false, 221) &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_INSTRUCTOR")), "html", null, true);
                    echo "\" class=\"btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static\">
                                                                            <i class=\"fas fa-play me-0\"></i>
                                                                        </a>
                                                                    ";
                } else {
                    // line 225
                    echo "                                                                        <a href=\"#\" class=\"btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static\">
                                                                            <i class=\"fas fa-play me-0\"></i>
                                                                        </a>    
                                                                    ";
                }
                // line 229
                echo "                                                                    
                                                                    <span class=\"d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px\">";
                // line 230
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lesson"], "title", [], "any", false, false, false, 230), "html", null, true);
                echo "</span>
                                                                </div>
                                                                <p class=\"mb-0 text-truncate\">2m 10s</p>
                                                            </div>
                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            echo "
                                                    </div>
                                                </div>
                                            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chapter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 241
        echo "                                </div>
                                <!-- Accordion END -->
                            </div>
                        </div>
                    </div>
                    <!-- Responsive offcanvas body END -->

                    <!-- Tags START -->
                    <div class=\"mt-4\">
                        <h4 class=\"mb-3\">Tags</h4>
                        <ul class=\"list-inline mb-0\">
                            ";
        // line 252
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 252, $this->source); })()), "tags", [], "any", false, false, false, 252), ","));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 253
            echo "                                <li class=\"list-inline-item\"> <a class=\"btn btn-outline-light btn-sm\" href=\"#\">";
            echo twig_escape_filter($this->env, $context["tag"], "html", null, true);
            echo "</a> </li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 255
        echo "                        </ul>
                    </div>
                    <!-- Tags END -->
                </div>
                <!-- Right sidebar END -->

            </div><!-- Row END -->
        </div>
    </section>


    <!-- =======================
    Listed courses START -->
    <section class=\"pt-0\">
        <div class=\"container\">
            <!-- Title -->
            <div class=\"row mb-4\">
                <h2 class=\"mb-0\">Top Listed Courses</h2>
            </div>

            <div class=\"row\">
                <!-- Slider START -->
                <div class=\"tiny-slider arrow-round arrow-blur arrow-hover\">
                    <div class=\"tiny-slider-inner\" data-autoplay=\"false\" data-arrow=\"true\" data-edge=\"2\" data-dots=\"false\" data-items=\"3\" data-items-lg=\"2\" data-items-sm=\"1\">
                        ";
        // line 279
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topCourses"]) || array_key_exists("topCourses", $context) ? $context["topCourses"] : (function () { throw new RuntimeError('Variable "topCourses" does not exist.', 279, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
            // line 280
            echo "                            ";
            if ( !($context["cours"] === (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 280, $this->source); })()))) {
                // line 281
                echo "                                ";
                echo twig_include($this->env, $context, "front/includes/courses/_trending_course.html.twig", ["course" => $context["cours"]]);
                echo "
                            ";
            }
            // line 283
            echo "                        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cours'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        echo "
                    </div>
                </div>
                <!-- Slider END -->\t\t
            </div>
        </div>
    </section>
    <!-- =======================
    Listed courses END -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/courses/course_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  605 => 284,  591 => 283,  585 => 281,  582 => 280,  565 => 279,  539 => 255,  530 => 253,  526 => 252,  513 => 241,  494 => 235,  483 => 230,  480 => 229,  474 => 225,  466 => 221,  464 => 220,  459 => 217,  455 => 216,  444 => 208,  430 => 201,  424 => 198,  420 => 197,  408 => 196,  404 => 195,  400 => 193,  383 => 192,  357 => 168,  351 => 166,  345 => 164,  343 => 163,  336 => 159,  328 => 153,  319 => 150,  315 => 149,  311 => 147,  307 => 146,  296 => 138,  287 => 132,  265 => 113,  258 => 109,  236 => 89,  234 => 88,  221 => 78,  215 => 77,  209 => 74,  194 => 62,  190 => 61,  186 => 60,  180 => 57,  160 => 39,  158 => 38,  149 => 31,  143 => 29,  139 => 27,  133 => 25,  130 => 24,  124 => 22,  121 => 21,  115 => 19,  112 => 18,  106 => 16,  104 => 15,  99 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"front/base.html.twig\" %}

{% block title %} - Course détails{% endblock %}

{% block mainContent %}

    <section class=\"py-0 pb-lg-5\">
        <div class=\"container\">
            <div class=\"row g-3\">
                <!-- Course video START -->
                <div class=\"col-12\">
                    <div class=\"video-player rounded-3\">
                        {% if course.media.videoUrl is not same as null or course.media.mp4File is not same as null or course.media.webMFile is not same  as null or course.media.oggFile is not same as null %}
                            <video style=\"max-height: 600px;overflow: hidden;\" controls crossorigin=\"anonymous\" playsinline poster=\"{{ asset('uploads/media/courses/' ~ course.media.imageFile) }}\">
                                {% if course.media.videoUrl is not same as null %}
                                    <source src=\"{{ course.media.videoUrl }}\" type=\"video/mp4\" size=\"720\">
                                {% endif %}
                                {% if course.media.mp4File is not same as null %}
                                    <source src=\"{{ asset('uploads/media/courses/' ~ course.media.mp4File) }}\" type=\"video/mp4\" size=\"720\">
                                {% endif %}
                                {% if course.media.webMFile is not same as null %}
                                    <source src=\"{{ asset('uploads/media/courses/' ~ course.media.webMFile) }}\" type=\"video/webm\" size=\"720\">
                                {% endif %}
                                {% if course.media.oggFile is not same as null %}
                                    <source src=\"{{ asset('uploads/media/courses/' ~ course.media.oggFile) }}\" type=\"video/ogg\" size=\"720\">
                                {% endif %}
                            </video>
                        {% else %}
                            <img style=\"width: 100%;max-height: 400px;\" src=\"{{ asset('uploads/media/courses/' ~ course.media.imageFile) }}\" alt=\"\">
                        {% endif %}
                    </div>
                </div>
                <!-- Course video END -->

                <!-- Playlist responsive toggler START -->
                <div class=\"col-12 d-lg-none\">
                    <button class=\"btn btn-primary mb-3\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasSidebar\" aria-controls=\"offcanvasSidebar\">
                        <i class=\"bi bi-camera-video me-1\"></i> {% trans %}PLAYLIST_KEY{% endtrans %}
                    </button>
                </div>
                <!-- Playlist responsive toggler END -->
            </div>
        </div>
    </section>

    <section class=\"pt-0\">
        <div class=\"container\">
            <div class=\"row g-lg-5\">

                <!-- Main content START -->
                <div class=\"col-lg-8\">
                    <div class=\"row g-4\">
                                
                        <!-- Course title START -->
                        <div class=\"col-12\">
                            <!-- Title -->
                            <h1>{{ course.intitule }}</h1>
                            <!-- Content -->
                            <ul class=\"list-inline mb-0\">
                                <li class=\"list-inline-item h6 me-3 mb-1 mb-sm-0\"><i class=\"fas fa-star text-warning me-2\"></i>{{ course.review }}/5.0</li>
                                <li class=\"list-inline-item h6 me-3 mb-1 mb-sm-0\"><i class=\"fas fa-user-graduate text-orange me-2\"></i>{{ course.eleves|length }} Enrolled</li>
                                <li class=\"list-inline-item h6 me-3 mb-1 mb-sm-0\"><i class=\"fas fa-signal text-success me-2\"></i>{{ course.niveauDifficulte }}</li>
                            </ul>
                        </div>
                        <!-- Course title END -->

                        <!-- Instructor detail START -->
                        <div class=\"col-12\">
                            <div class=\"d-sm-flex justify-content-sm-between align-items-center\">
                                <!-- Avatar detail -->
                                <div class=\"d-flex align-items-center\">
                                    <!-- Avatar image -->
                                    <div class=\"avatar avatar-lg\">
                                        <img class=\"avatar-img rounded-circle\" src=\"{{ asset(course.enseignant.avatar) }}\" alt=\"avatar\">
                                    </div>
                                    <div class=\"ms-3\">
                                        <h6 class=\"mb-0\"><a href=\"#\">{% trans %}BY_KEY{% endtrans %} {{ course.enseignant.utilisateur.personne.nomComplet }}</a></h6>
                                        <p class=\"mb-0 small\">{% trans %}TRAINER_KEY{% endtrans %}</p>
                                    </div>
                                </div>

                                <!-- Button -->
                                <div class=\"d-flex mt-2 mt-sm-0\">
                                    <a class=\"btn btn-danger-soft btn-sm mb-0\" href=\"#\">Follow</a>
                                    <!-- Share button with dropdown -->
                                    <div class=\"dropdown ms-2\">
                                        <a href=\"#\" class=\"btn btn-sm mb-0 btn-info-soft small\" role=\"button\" id=\"dropdownShare\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            {% trans %}SHARE_KEY{% endtrans %}
                                        </a>
                                        <!-- dropdown button -->
                                        <ul class=\"dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded\" aria-labelledby=\"dropdownShare\">
                                            <li><a  class=\"dropdown-item\" href=\"#\"><i class=\"fab fa-twitter-square me-2\"></i>Twitter</a></li>
                                            <li><a class=\"dropdown-item\" href=\"#\"><i class=\"fab fa-facebook-square me-2\"></i>Facebook</a></li>
                                            <li><a class=\"dropdown-item\" href=\"#\"><i class=\"fab fa-linkedin me-2\"></i>LinkedIn</a></li>
                                            <li><a class=\"dropdown-item\" href=\"#\"><i class=\"fas fa-copy me-2\"></i>Copy link</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Instructor detail END -->

                        <!-- Course detail START -->
                        <div class=\"col-12\">
                            <!-- Tabs START -->
                            <ul class=\"nav nav-pills nav-pills-bg-soft px-3\" id=\"course-pills-tab\" role=\"tablist\">
                                <!-- Tab item -->
                                <li class=\"nav-item me-2 me-sm-4\" role=\"presentation\">
                                    <button class=\"nav-link mb-0 active\" id=\"course-pills-tab-1\" data-bs-toggle=\"pill\" data-bs-target=\"#course-pills-1\" type=\"button\" role=\"tab\" aria-controls=\"course-pills-1\" aria-selected=\"true\">{% trans %}COURSEOVERVIEW_KEY{% endtrans %}</button>
                                </li>
                                <!-- Tab item -->
                                <li class=\"nav-item me-2 me-sm-4\" role=\"presentation\">
                                    <button class=\"nav-link mb-0\" id=\"course-pills-tab-2\" data-bs-toggle=\"pill\" data-bs-target=\"#course-pills-2\" type=\"button\" role=\"tab\" aria-controls=\"course-pills-2\" aria-selected=\"false\">{% trans %}COURSE_REVIEWS_KEY{% endtrans %}</button>
                                </li>
                                <!-- Tab item -->
                                <li class=\"nav-item me-2 me-sm-4\" role=\"presentation\">
                                    <button class=\"nav-link mb-0\" id=\"course-pills-tab-3\" data-bs-toggle=\"pill\" data-bs-target=\"#course-pills-3\" type=\"button\" role=\"tab\" aria-controls=\"course-pills-3\" aria-selected=\"false\">FAQs </button>
                                </li>
                                <!-- Tab item -->
                                <li class=\"nav-item me-2 me-sm-4\" role=\"presentation\">
                                    <button class=\"nav-link mb-0\" id=\"course-pills-tab-4\" data-bs-toggle=\"pill\" data-bs-target=\"#course-pills-4\" type=\"button\" role=\"tab\" aria-controls=\"course-pills-4\" aria-selected=\"false\">Forum</button>
                                </li>
                            </ul>
                            <!-- Tabs END -->

                            <!-- Tab contents START -->
                            <div class=\"tab-content pt-4 px-3\" id=\"course-pills-tabContent\">
                                <!-- Content START -->
                                <div class=\"tab-pane fade show active\" id=\"course-pills-1\" role=\"tabpanel\" aria-labelledby=\"course-pills-tab-1\">
                                    <!-- Course detail START -->
                                    <h5 class=\"mb-3\">Course Description</h5>
                                    {{ course.content|raw }}
                                </div>
                                <!-- Content END -->

                                <!-- Content START -->
                                <div class=\"tab-pane fade\" id=\"course-pills-2\" role=\"tabpanel\" aria-labelledby=\"course-pills-tab-2\">
                                    {{ include('front/includes/courses/_course_reviews.html.twig') }}
                                </div>
                                <!-- Content END -->

                                <!-- Content START -->
                                <div class=\"tab-pane fade\" id=\"course-pills-3\" role=\"tabpanel\" aria-labelledby=\"course-pills-tab-3\">
                                    <!-- Title -->
                                    <h5 class=\"mb-3\">Frequently Asked Questions</h5>
                                    {% for faq in course.faqs %}
                                        <!-- FAQ item -->
                                        <div class=\"mt-4\">
                                            <h6>{{ faq.question }}</h6>
                                            <p class=\"mb-0\">{{ faq.answer }}</p>
                                        </div>
                                    {% endfor %}
                        
                                </div>
                                <!-- Content END -->

                                <!-- Content START -->
                                <div class=\"tab-pane fade\" id=\"course-pills-4\" role=\"tabpanel\" aria-labelledby=\"course-pills-tab-4\">
                                    {{ include('front/includes/courses/forum.html.twig') }}
                                </div>

                                <div class=\"mt-5 text-right\">
                                    {% if lastReadLesson is not same as null %}
                                        <a class=\"btn btn-success-soft\" href=\"{{ url(\"app_front_read_lesson\", {slug: lastReadLesson.slug}) }}\">Poursuivre la lecture</a>
                                    {% else %}
                                        <a href=\"{{ path('app_front_course_start', {slug: course.slug}) }}\" class=\"btn btn-primary-soft\">Commencer la lecture</a>
                                    {% endif %}
                                    
                                    
                                </div>
                                <!-- Content END -->
                            </div>
                            <!-- Tab contents END -->
                        </div>
                        <!-- Course detail END -->
                    </div>
                </div>
                <!-- Main content END -->

                <!-- Right sidebar START -->
                <div class=\"col-lg-4\">
                    <!-- Responsive offcanvas body START -->
                    <div class=\"offcanvas-lg offcanvas-end\" tabindex=\"-1\" id=\"offcanvasSidebar\" aria-labelledby=\"offcanvasSidebarLabel\">
                        <div class=\"offcanvas-header bg-dark\">
                            <h5 class=\"offcanvas-title text-white\" id=\"offcanvasSidebarLabel\">Course playlist</h5>
                            <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"offcanvas\" data-bs-target=\"#offcanvasSidebar\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
                        </div>
                        <div class=\"offcanvas-body p-3 p-lg-0\">
                            <div class=\"col-12\">
                                <!-- Accordion START -->
                                <div class=\"accordion accordion-icon accordion-bg-light\" id=\"accordionExample2\">
                                    {% for chapter in course.chapitres %}
                                        <!-- Item -->
                                        <div class=\"accordion-item mb-3\">
                                            <h6 class=\"accordion-header font-base\" id=\"heading-{{ chapter.id }}\">
                                                <a class=\"accordion-button fw-bold rounded {{ loop.index > 1 ? 'collapsed' : '' }} d-block\" href=\"#collapse-{{ chapter.id }}\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-{{ chapter.id }}\" aria-expanded=\"{{ loop.index > 1 ? 'false' : 'true' }}\" aria-controls=\"collapse-{{ chapter.id }}\">
                                                    <span class=\"mb-0\">{{ chapter.title }}</span> 
                                                    <span class=\"small d-block mt-1\">({{ chapter.lessons|length }} Lectures)</span> 
                                                </a>
                                            </h6>
                                            <div id=\"collapse-{{ chapter.id }}\" class=\"accordion-collapse collapse {{ loop.index is same as 1 ? 'show' : '' }}\" aria-labelledby=\"heading-{{ chapter.id }}\" data-bs-parent=\"#accordionExample2\">
                                                <div class=\"accordion-body mt-3\">
                                                    <div class=\"vstack gap-3\">

                                                        <!-- Progress bar -->
                                                        <div class=\"overflow-hidden\">
                                                            <div class=\"d-flex justify-content-between\">
                                                                <p class=\"mb-1 h6\">0/{{ chapter.lessons|length  }} Completed</p>
                                                                <h6 class=\"mb-1 text-end\">0%</h6>
                                                            </div>
                                                            <div class=\"progress progress-sm bg-primary bg-opacity-10\">
                                                                <div class=\"progress-bar bg-primary aos\" role=\"progressbar\" data-aos=\"slide-right\" data-aos-delay=\"200\" data-aos-duration=\"1000\" data-aos-easing=\"ease-in-out\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {% for lesson in chapter.lessons %}
                                                            <!-- Course lecture -->
                                                            <div class=\"d-flex justify-content-between align-items-center\">
                                                                <div class=\"position-relative d-flex align-items-center\">
                                                                    {% if is_granted('ROLE_INSTRUCTOR') or is_granted('ROLE_ADMIN') %}
                                                                        <a href=\"{{  not app.user and not is_granted('ROLE_INSTRUCTOR') }}\" class=\"btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static\">
                                                                            <i class=\"fas fa-play me-0\"></i>
                                                                        </a>
                                                                    {% else %}
                                                                        <a href=\"#\" class=\"btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static\">
                                                                            <i class=\"fas fa-play me-0\"></i>
                                                                        </a>    
                                                                    {% endif %}
                                                                    
                                                                    <span class=\"d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px\">{{ lesson.title }}</span>
                                                                </div>
                                                                <p class=\"mb-0 text-truncate\">2m 10s</p>
                                                            </div>
                                                        {% endfor %}

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    {% endfor %}
                                </div>
                                <!-- Accordion END -->
                            </div>
                        </div>
                    </div>
                    <!-- Responsive offcanvas body END -->

                    <!-- Tags START -->
                    <div class=\"mt-4\">
                        <h4 class=\"mb-3\">Tags</h4>
                        <ul class=\"list-inline mb-0\">
                            {% for tag in course.tags|split(',') %}
                                <li class=\"list-inline-item\"> <a class=\"btn btn-outline-light btn-sm\" href=\"#\">{{ tag }}</a> </li>
                            {% endfor %}
                        </ul>
                    </div>
                    <!-- Tags END -->
                </div>
                <!-- Right sidebar END -->

            </div><!-- Row END -->
        </div>
    </section>


    <!-- =======================
    Listed courses START -->
    <section class=\"pt-0\">
        <div class=\"container\">
            <!-- Title -->
            <div class=\"row mb-4\">
                <h2 class=\"mb-0\">Top Listed Courses</h2>
            </div>

            <div class=\"row\">
                <!-- Slider START -->
                <div class=\"tiny-slider arrow-round arrow-blur arrow-hover\">
                    <div class=\"tiny-slider-inner\" data-autoplay=\"false\" data-arrow=\"true\" data-edge=\"2\" data-dots=\"false\" data-items=\"3\" data-items-lg=\"2\" data-items-sm=\"1\">
                        {% for cours in topCourses %}
                            {% if cours is not same as course %}
                                {{ include('front/includes/courses/_trending_course.html.twig', {course: cours}) }}
                            {% endif %}
                        {% endfor %}

                    </div>
                </div>
                <!-- Slider END -->\t\t
            </div>
        </div>
    </section>
    <!-- =======================
    Listed courses END -->

{% endblock %}
", "front/courses/course_details.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\courses\\course_details.html.twig");
    }
}
