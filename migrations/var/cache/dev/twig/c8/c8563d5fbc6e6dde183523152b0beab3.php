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

/* front/courses/read.html.twig */
class __TwigTemplate_fe72e35933c56680b29b82464a1704d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/courses/read.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/courses/read.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/courses/read.html.twig", 1);
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
    <!-- =======================
    Page intro START -->
    <section class=\"bg-light py-0 py-sm-5\">
        <div class=\"container\">
            <div class=\"row py-5\">
                <div class=\"col-lg-8\">
                    <!-- Badge -->
                    <h6 class=\"mb-3 font-base bg-primary text-white py-2 px-4 rounded-2 d-inline-block\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 14, $this->source); })()), "chapitre", [], "any", false, false, false, 14), "cours", [], "any", false, false, false, 14), "intitule", [], "any", false, false, false, 14), "html", null, true);
        echo "</h6>
                    <!-- Title -->
                    <h1>";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CHAPTER_KEY", [], "messages");
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 16, $this->source); })()), "chapitre", [], "any", false, false, false, 16), "numero", [], "any", false, false, false, 16), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 16, $this->source); })()), "chapitre", [], "any", false, false, false, 16), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</h1>
                    <p>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 17, $this->source); })()), "chapitre", [], "any", false, false, false, 17), "description", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
                    <!-- Content -->
                    <ul class=\"list-inline mb-0\">
                        <li class=\"list-inline-item h6 me-3 mb-1 mb-sm-0\"><i class=\"fas fa-star text-warning me-2\"></i>";
        // line 20
        echo twig_escape_filter($this->env, ("0" . (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 20, $this->source); })()), "chapitre", [], "any", false, false, false, 20), "cours", [], "any", false, false, false, 20), "review", [], "any", false, false, false, 20) / (isset($context["nbReviews"]) || array_key_exists("nbReviews", $context) ? $context["nbReviews"] : (function () { throw new RuntimeError('Variable "nbReviews" does not exist.', 20, $this->source); })()))), "html", null, true);
        echo "/5.0</li>
                        <li class=\"list-inline-item h6 me-3 mb-1 mb-sm-0\"><i class=\"fas fa-user-graduate text-orange me-2\"></i>";
        // line 21
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 21, $this->source); })()), "chapitre", [], "any", false, false, false, 21), "cours", [], "any", false, false, false, 21), "eleves", [], "any", false, false, false, 21)), "html", null, true);
        echo " Enrolled</li>
                        <li class=\"list-inline-item h6 me-3 mb-1 mb-sm-0\"><i class=\"fas fa-signal text-success me-2\"></i>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 22, $this->source); })()), "chapitre", [], "any", false, false, false, 22), "cours", [], "any", false, false, false, 22), "niveauDifficulte", [], "any", false, false, false, 22), "html", null, true);
        echo "</li>
                        <li class=\"list-inline-item h6 me-3 mb-1 mb-sm-0\"><i class=\"bi bi-patch-exclamation-fill text-danger me-2\"></i>Last updated ";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 23, $this->source); })()), "chapitre", [], "any", false, false, false, 23), "cours", [], "any", false, false, false, 23), "updatedAt", [], "any", false, false, false, 23), "d/m/Y"), "html", null, true);
        echo "</li>
                        <li class=\"list-inline-item h6 mb-0\"><i class=\"fas fa-globe text-info me-2\"></i>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 24, $this->source); })()), "chapitre", [], "any", false, false, false, 24), "cours", [], "any", false, false, false, 24), "language", [], "any", false, false, false, 24), "html", null, true);
        echo "</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Page intro END -->

    <!-- =======================
    Page content START -->
    <section class=\"pb-0 py-lg-5\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Main content START -->
                <div class=\"col-lg-8\">
                    <div class=\"card shadow rounded-2 p-0\">

                        <!-- Tab contents START -->
                        <div class=\"card-body p-4\">
                            <div class=\"tab-content pt-2\" id=\"course-pills-tabContent\">
                                <!-- Content START -->
                                <div class=\"tab-pane fade show active\" id=\"course-pills-1\" role=\"tabpanel\" aria-labelledby=\"course-pills-tab-1\">
                                    
                                    ";
        // line 48
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 48, $this->source); })()), "videoLink", [], "any", false, false, false, 48) === null)) {
            // line 49
            echo "                                        <div class=\"row g-3 mb-5\">
                                                <!-- Course video START -->
                                                <div class=\"col-12\">
                                                    <div class=\"video-player rounded-3\">
                                                        <video style=\"max-height: 400px;width: 100%;\" controls crossorigin=\"anonymous\" playsinline poster=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 53, $this->source); })()), "poster", [], "any", false, false, false, 53)), "html", null, true);
            echo "\">
                                                            <source src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/courses/lessons/videos/" . twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 54, $this->source); })()), "videoLink", [], "any", false, false, false, 54))), "html", null, true);
            echo "\" type=\"video/mp4\">
                                                            <!-- Caption files -->
                                                            <track kind=\"captions\" label=\"English\" srclang=\"en\" src=\"assets/images/videos/en.vtt\" default>
                                                            <track kind=\"captions\" label=\"French\" srclang=\"fr\" src=\"assets/images/videos/fr.vtt\">
                                                        </video>
                                                    </div>
                                                </div>
                                                <!-- Course video END -->
                                            <!-- Playlist responsive toggler START -->
                                            <div class=\"col-12 d-lg-none\">
                                                <button class=\"btn btn-primary mb-3\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasSidebar\" aria-controls=\"offcanvasSidebar\">
                                                    <i class=\"bi bi-camera-video me-1\"></i> ";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PLAYLIST_KEY", [], "messages");
            // line 66
            echo "                                                </button>
                                            </div>
                                            <!-- Playlist responsive toggler END -->
                                        </div>
                                    ";
        }
        // line 71
        echo "                                    <h3>";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("LESSON_KEY", [], "messages");
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 71, $this->source); })()), "numero", [], "any", false, false, false, 71), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 71, $this->source); })()), "title", [], "any", false, false, false, 71), "html", null, true);
        echo "</h3>
                                    <hr>
                                    <!-- Course detail START -->
                                    ";
        // line 74
        echo twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 74, $this->source); })()), "content", [], "any", false, false, false, 74);
        echo "

                                </div>
                                <!-- Content END -->

                            </div>
                        </div>
                        <!-- Tab contents END -->
                        ";
        // line 82
        if (((isset($context["lecture"]) || array_key_exists("lecture", $context) ? $context["lecture"] : (function () { throw new RuntimeError('Variable "lecture" does not exist.', 82, $this->source); })()) &&  !(twig_get_attribute($this->env, $this->source, (isset($context["lecture"]) || array_key_exists("lecture", $context) ? $context["lecture"] : (function () { throw new RuntimeError('Variable "lecture" does not exist.', 82, $this->source); })()), "lesson", [], "any", false, false, false, 82) === null))) {
            // line 83
            echo "                            <div class=\"card-footer p-4\">
                                ";
            // line 85
            echo "                                    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_course_lecture_finished", ["reference" => twig_get_attribute($this->env, $this->source, (isset($context["lecture"]) || array_key_exists("lecture", $context) ? $context["lecture"] : (function () { throw new RuntimeError('Variable "lecture" does not exist.', 85, $this->source); })()), "reference", [], "any", false, false, false, 85)]), "html", null, true);
            echo "\" class=\"btn btn-success\">J'ai fini cette leçon, je passe à la leçon suivante !</a>
                                ";
            // line 89
            echo "                            </div>
                        ";
        }
        // line 91
        echo "                        
                    </div>
                </div>
                <!-- Main content END -->

                <!-- Right sidebar START -->
                <div class=\"col-lg-4 pt-5 pt-lg-0\">
                    <div class=\"row mb-5 mb-lg-0\">
                        <div class=\"col-md-6 col-lg-12\">
                            <!-- Video START -->
                            <div class=\"card shadow p-2 mb-4 z-index-9\">
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
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 112, $this->source); })()), "chapitre", [], "any", false, false, false, 112), "cours", [], "any", false, false, false, 112), "chapitres", [], "any", false, false, false, 112), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 112, $this->source); })()), "numero", [], "any", false, false, false, 112) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 112, $this->source); })()), "numero", [], "any", false, false, false, 112)); }));
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
            // line 113
            echo "                                                    <!-- Item -->
                                                    <div class=\"accordion-item mb-3\">
                                                        <h6 class=\"accordion-header font-base\" id=\"heading-";
            // line 115
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 115), "html", null, true);
            echo "\">
                                                            <a class=\"accordion-button fw-bold rounded collapsed d-block\" href=\"#collapse-";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 116), "html", null, true);
            echo "\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 116), "html", null, true);
            echo "\" aria-expanded=\"";
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 116, $this->source); })()), "chapitre", [], "any", false, false, false, 116) === $context["chapter"])) ? ("true") : ("false"));
            echo "\" aria-controls=\"collapse-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 116), "html", null, true);
            echo "\">
                                                                <span class=\"mb-0\">";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "title", [], "any", false, false, false, 117), "html", null, true);
            echo "</span> 
                                                                <span class=\"small d-block mt-1\">(";
            // line 118
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "lessons", [], "any", false, false, false, 118)), "html", null, true);
            echo " Lectures)</span>
                                                            </a>
                                                        </h6>
                                                        <div id=\"collapse-";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 121), "html", null, true);
            echo "\" class=\"accordion-collapse collapse ";
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 121, $this->source); })()), "chapitre", [], "any", false, false, false, 121) === $context["chapter"])) ? ("show") : (""));
            echo "\" aria-labelledby=\"heading-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 121), "html", null, true);
            echo "\" data-bs-parent=\"#accordionExample2\">
                                                            <div class=\"accordion-body mt-3\">
                                                                <div class=\"vstack gap-3\">
                                                                    ";
            // line 124
            $context["finishedLessons"] = 0;
            // line 125
            echo "                                                                    ";
            if ((isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 125, $this->source); })())) {
                // line 126
                echo "                                                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 126, $this->source); })()), "lectures", [], "any", false, false, false, 126));
                foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                    // line 127
                    echo "                                                                            ";
                    if ((( !(twig_get_attribute($this->env, $this->source, $context["l"], "lesson", [], "any", false, false, false, 127) === null) && twig_in_filter(twig_get_attribute($this->env, $this->source, $context["l"], "lesson", [], "any", false, false, false, 127), twig_get_attribute($this->env, $this->source, $context["chapter"], "lessons", [], "any", false, false, false, 127))) && twig_get_attribute($this->env, $this->source, $context["l"], "isFinished", [], "any", false, false, false, 127))) {
                        // line 128
                        echo "                                                                                ";
                        $context["finishedLessons"] = ((isset($context["finishedLessons"]) || array_key_exists("finishedLessons", $context) ? $context["finishedLessons"] : (function () { throw new RuntimeError('Variable "finishedLessons" does not exist.', 128, $this->source); })()) + 1);
                        // line 129
                        echo "                                                                            ";
                    }
                    // line 130
                    echo "                                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 131
                echo "                                                                    ";
            }
            // line 132
            echo "                                                                    <!-- Progress bar -->
                                                                    <div class=\"overflow-hidden\">
                                                                        <div class=\"d-flex justify-content-between\">
                                                                            <p class=\"mb-1 h6\">";
            // line 135
            echo twig_escape_filter($this->env, (isset($context["finishedLessons"]) || array_key_exists("finishedLessons", $context) ? $context["finishedLessons"] : (function () { throw new RuntimeError('Variable "finishedLessons" does not exist.', 135, $this->source); })()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "lessons", [], "any", false, false, false, 135)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("COMPLETED_KEY", [], "messages");
            echo "</p>
                                                                            ";
            // line 136
            $context["percent"] = (((isset($context["finishedLessons"]) || array_key_exists("finishedLessons", $context) ? $context["finishedLessons"] : (function () { throw new RuntimeError('Variable "finishedLessons" does not exist.', 136, $this->source); })()) * 100) / twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "lessons", [], "any", false, false, false, 136)));
            // line 137
            echo "                                                                            <h6 class=\"mb-1 text-end\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 137, $this->source); })()), 0), "html", null, true);
            echo "</h6>
                                                                        </div>
                                                                        <div class=\"progress progress-sm bg-primary bg-opacity-10\">
                                                                            <div class=\"progress-bar bg-primary aos\" role=\"progressbar\" data-aos=\"slide-right\" data-aos-delay=\"200\" data-aos-duration=\"1000\" data-aos-easing=\"ease-in-out\" style=\"width: ";
            // line 140
            echo twig_escape_filter($this->env, (isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 140, $this->source); })()), "html", null, true);
            echo "%\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, (isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 140, $this->source); })()), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    ";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "lessons", [], "any", false, false, false, 145), function ($__c__, $__d__) use ($context, $macros) { $context["c"] = $__c__; $context["d"] = $__d__; return (twig_get_attribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 145, $this->source); })()), "numero", [], "any", false, false, false, 145) <=> twig_get_attribute($this->env, $this->source, (isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 145, $this->source); })()), "numero", [], "any", false, false, false, 145)); }));
            foreach ($context['_seq'] as $context["_key"] => $context["les"]) {
                // line 146
                echo "                                                                        <!-- Course lecture -->
                                                                        ";
                // line 147
                $context["exist"] = false;
                // line 148
                echo "                                                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["finishedLectures"]) || array_key_exists("finishedLectures", $context) ? $context["finishedLectures"] : (function () { throw new RuntimeError('Variable "finishedLectures" does not exist.', 148, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                    // line 149
                    echo "                                                                            ";
                    if (( !(null === twig_get_attribute($this->env, $this->source, $context["l"], "lesson", [], "any", false, false, false, 149)) && (twig_get_attribute($this->env, $this->source, $context["l"], "lesson", [], "any", false, false, false, 149) === $context["les"]))) {
                        // line 150
                        echo "                                                                                ";
                        $context["exist"] = true;
                        // line 151
                        echo "                                                                            ";
                    }
                    // line 152
                    echo "                                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 153
                echo "                                                                        <div class=\"d-flex justify-content-between align-items-center\">
                                                                            <div class=\"position-relative d-flex align-items-center\">
                                                                                <a href=\"";
                // line 155
                ((((isset($context["lecture"]) || array_key_exists("lecture", $context) ? $context["lecture"] : (function () { throw new RuntimeError('Variable "lecture" does not exist.', 155, $this->source); })()) &&  !(isset($context["exist"]) || array_key_exists("exist", $context) ? $context["exist"] : (function () { throw new RuntimeError('Variable "exist" does not exist.', 155, $this->source); })()))) ? (print ("#")) : (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_read_lesson", ["slug" => twig_get_attribute($this->env, $this->source, $context["les"], "slug", [], "any", false, false, false, 155)]), "html", null, true))));
                echo "\" class=\"btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static\">
                                                                                    <i class=\"fas fa-play me-0\"></i>
                                                                                </a>
                                                                                <span class=\"d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px\">";
                // line 158
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["les"], "title", [], "any", false, false, false, 158), "html", null, true);
                echo "</span>
                                                                            </div>
                                                                            <p class=\"mb-0 text-truncate\"></p>
                                                                        </div>
                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['les'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "
                                                                    ";
            // line 164
            $context["exist"] = false;
            // line 165
            echo "                                                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["finishedLectures"]) || array_key_exists("finishedLectures", $context) ? $context["finishedLectures"] : (function () { throw new RuntimeError('Variable "finishedLectures" does not exist.', 165, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 166
                echo "                                                                        ";
                if (( !(null === twig_get_attribute($this->env, $this->source, $context["l"], "chapitre", [], "any", false, false, false, 166)) && (twig_get_attribute($this->env, $this->source, $context["l"], "chapitre", [], "any", false, false, false, 166) === $context["chapter"]))) {
                    // line 167
                    echo "                                                                            ";
                    $context["exist"] = true;
                    // line 168
                    echo "                                                                        ";
                }
                // line 169
                echo "                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 170
            echo "
                                                                    <div class=\"d-flex justify-content-between align-items-center\">
                                                                        <div class=\"position-relative d-flex align-items-center\">
                                                                            <a href=\"";
            // line 173
            ((((isset($context["lecture"]) || array_key_exists("lecture", $context) ? $context["lecture"] : (function () { throw new RuntimeError('Variable "lecture" does not exist.', 173, $this->source); })()) && (isset($context["exist"]) || array_key_exists("exist", $context) ? $context["exist"] : (function () { throw new RuntimeError('Variable "exist" does not exist.', 173, $this->source); })()))) ? (print ("#")) : (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_course_chapitre_quizzes", ["slugChapitre" => twig_get_attribute($this->env, $this->source, $context["chapter"], "slug", [], "any", false, false, false, 173), "slugCours" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["chapter"], "cours", [], "any", false, false, false, 173), "slug", [], "any", false, false, false, 173)]), "html", null, true))));
            echo "\" class=\"btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static\">
                                                                                <i class=\"fas fa-play me-0\"></i>
                                                                            </a>
                                                                            <span class=\"d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px\">Quiz</span>
                                                                        </div>
                                                                        <p class=\"mb-0 text-truncate\"></p>
                                                                    </div>


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
        // line 187
        echo "
                                            </div>
                                            <!-- Accordion END -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Responsive offcanvas body END -->
                            </div>
                            
                        </div>

                    </div><!-- Row End -->
                </div>
                <!-- Right sidebar END -->

            </div><!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Page content END -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/courses/read.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  477 => 187,  449 => 173,  444 => 170,  438 => 169,  435 => 168,  432 => 167,  429 => 166,  424 => 165,  422 => 164,  419 => 163,  408 => 158,  402 => 155,  398 => 153,  392 => 152,  389 => 151,  386 => 150,  383 => 149,  378 => 148,  376 => 147,  373 => 146,  369 => 145,  359 => 140,  352 => 137,  350 => 136,  342 => 135,  337 => 132,  334 => 131,  328 => 130,  325 => 129,  322 => 128,  319 => 127,  314 => 126,  311 => 125,  309 => 124,  299 => 121,  293 => 118,  289 => 117,  279 => 116,  275 => 115,  271 => 113,  254 => 112,  231 => 91,  227 => 89,  222 => 85,  219 => 83,  217 => 82,  206 => 74,  195 => 71,  188 => 66,  186 => 65,  172 => 54,  168 => 53,  162 => 49,  160 => 48,  133 => 24,  129 => 23,  125 => 22,  121 => 21,  117 => 20,  111 => 17,  103 => 16,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"front/base.html.twig\" %}

{% block title %} - Course détails{% endblock %}

{% block mainContent %}

    <!-- =======================
    Page intro START -->
    <section class=\"bg-light py-0 py-sm-5\">
        <div class=\"container\">
            <div class=\"row py-5\">
                <div class=\"col-lg-8\">
                    <!-- Badge -->
                    <h6 class=\"mb-3 font-base bg-primary text-white py-2 px-4 rounded-2 d-inline-block\">{{ lesson.chapitre.cours.intitule }}</h6>
                    <!-- Title -->
                    <h1>{% trans %}CHAPTER_KEY{% endtrans %} {{ lesson.chapitre.numero }} - {{ lesson.chapitre.title }}</h1>
                    <p>{{ lesson.chapitre.description }}</p>
                    <!-- Content -->
                    <ul class=\"list-inline mb-0\">
                        <li class=\"list-inline-item h6 me-3 mb-1 mb-sm-0\"><i class=\"fas fa-star text-warning me-2\"></i>{{ '0' ~ lesson.chapitre.cours.review / nbReviews }}/5.0</li>
                        <li class=\"list-inline-item h6 me-3 mb-1 mb-sm-0\"><i class=\"fas fa-user-graduate text-orange me-2\"></i>{{ lesson.chapitre.cours.eleves|length }} Enrolled</li>
                        <li class=\"list-inline-item h6 me-3 mb-1 mb-sm-0\"><i class=\"fas fa-signal text-success me-2\"></i>{{ lesson.chapitre.cours.niveauDifficulte }}</li>
                        <li class=\"list-inline-item h6 me-3 mb-1 mb-sm-0\"><i class=\"bi bi-patch-exclamation-fill text-danger me-2\"></i>Last updated {{ lesson.chapitre.cours.updatedAt|date('d/m/Y') }}</li>
                        <li class=\"list-inline-item h6 mb-0\"><i class=\"fas fa-globe text-info me-2\"></i>{{ lesson.chapitre.cours.language }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Page intro END -->

    <!-- =======================
    Page content START -->
    <section class=\"pb-0 py-lg-5\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Main content START -->
                <div class=\"col-lg-8\">
                    <div class=\"card shadow rounded-2 p-0\">

                        <!-- Tab contents START -->
                        <div class=\"card-body p-4\">
                            <div class=\"tab-content pt-2\" id=\"course-pills-tabContent\">
                                <!-- Content START -->
                                <div class=\"tab-pane fade show active\" id=\"course-pills-1\" role=\"tabpanel\" aria-labelledby=\"course-pills-tab-1\">
                                    
                                    {% if lesson.videoLink is not same as null %}
                                        <div class=\"row g-3 mb-5\">
                                                <!-- Course video START -->
                                                <div class=\"col-12\">
                                                    <div class=\"video-player rounded-3\">
                                                        <video style=\"max-height: 400px;width: 100%;\" controls crossorigin=\"anonymous\" playsinline poster=\"{{ asset(lesson.poster) }}\">
                                                            <source src=\"{{ asset('uploads/media/courses/lessons/videos/' ~ lesson.videoLink)}}\" type=\"video/mp4\">
                                                            <!-- Caption files -->
                                                            <track kind=\"captions\" label=\"English\" srclang=\"en\" src=\"assets/images/videos/en.vtt\" default>
                                                            <track kind=\"captions\" label=\"French\" srclang=\"fr\" src=\"assets/images/videos/fr.vtt\">
                                                        </video>
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
                                    {% endif %}
                                    <h3>{% trans %}LESSON_KEY{% endtrans %} {{ lesson.numero }} : {{ lesson.title }}</h3>
                                    <hr>
                                    <!-- Course detail START -->
                                    {{ lesson.content|raw }}

                                </div>
                                <!-- Content END -->

                            </div>
                        </div>
                        <!-- Tab contents END -->
                        {% if lecture and lecture.lesson is not same as null %}
                            <div class=\"card-footer p-4\">
                                {# {% if not lecture.isFinished %} #}
                                    <a href=\"{{ url(\"app_front_course_lecture_finished\", {reference: lecture.reference}) }}\" class=\"btn btn-success\">J'ai fini cette leçon, je passe à la leçon suivante !</a>
                                {# {% else %}
                                    #<a href=\"{{ url(\"app_front_course_start\", {'slug': lecture.lesson.chapitre.cours.slug}) }}\" class=\"btn btn-success\">Poursuivre la lecture !</a>
                                {% endif %} #}
                            </div>
                        {% endif %}
                        
                    </div>
                </div>
                <!-- Main content END -->

                <!-- Right sidebar START -->
                <div class=\"col-lg-4 pt-5 pt-lg-0\">
                    <div class=\"row mb-5 mb-lg-0\">
                        <div class=\"col-md-6 col-lg-12\">
                            <!-- Video START -->
                            <div class=\"card shadow p-2 mb-4 z-index-9\">
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
                                                {% for chapter in lesson.chapitre.cours.chapitres|sort((a, b) => a.numero <=> b.numero) %}
                                                    <!-- Item -->
                                                    <div class=\"accordion-item mb-3\">
                                                        <h6 class=\"accordion-header font-base\" id=\"heading-{{ loop.index }}\">
                                                            <a class=\"accordion-button fw-bold rounded collapsed d-block\" href=\"#collapse-{{ loop.index }}\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-{{ loop.index }}\" aria-expanded=\"{{ lesson.chapitre is same as chapter ? 'true' : 'false'}}\" aria-controls=\"collapse-{{ loop.index }}\">
                                                                <span class=\"mb-0\">{{ chapter.title }}</span> 
                                                                <span class=\"small d-block mt-1\">({{chapter.lessons|length}} Lectures)</span>
                                                            </a>
                                                        </h6>
                                                        <div id=\"collapse-{{ loop.index }}\" class=\"accordion-collapse collapse {{ lesson.chapitre is same as chapter ? 'show' : '' }}\" aria-labelledby=\"heading-{{ loop.index }}\" data-bs-parent=\"#accordionExample2\">
                                                            <div class=\"accordion-body mt-3\">
                                                                <div class=\"vstack gap-3\">
                                                                    {% set finishedLessons = 0 %}
                                                                    {% if eleve %}
                                                                        {% for l in eleve.lectures %}
                                                                            {% if l.lesson is not same as null and l.lesson in chapter.lessons and l.isFinished %}
                                                                                {% set finishedLessons = finishedLessons + 1 %}
                                                                            {% endif %}
                                                                        {% endfor %}
                                                                    {% endif %}
                                                                    <!-- Progress bar -->
                                                                    <div class=\"overflow-hidden\">
                                                                        <div class=\"d-flex justify-content-between\">
                                                                            <p class=\"mb-1 h6\">{{ finishedLessons }}/{{ chapter.lessons|length }} {% trans %}COMPLETED_KEY{% endtrans %}</p>
                                                                            {% set percent = finishedLessons * 100 / chapter.lessons|length %}
                                                                            <h6 class=\"mb-1 text-end\">{{ percent|number_format(0) }}</h6>
                                                                        </div>
                                                                        <div class=\"progress progress-sm bg-primary bg-opacity-10\">
                                                                            <div class=\"progress-bar bg-primary aos\" role=\"progressbar\" data-aos=\"slide-right\" data-aos-delay=\"200\" data-aos-duration=\"1000\" data-aos-easing=\"ease-in-out\" style=\"width: {{ percent }}%\" aria-valuenow=\"{{ percent }}\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    {% for les in chapter.lessons|sort((c, d) => c.numero <=> d.numero) %}
                                                                        <!-- Course lecture -->
                                                                        {% set exist = false %}
                                                                        {% for l in finishedLectures %}
                                                                            {% if l.lesson is not null and l.lesson is same as les %}
                                                                                {% set exist = true %}
                                                                            {% endif %}
                                                                        {% endfor %}
                                                                        <div class=\"d-flex justify-content-between align-items-center\">
                                                                            <div class=\"position-relative d-flex align-items-center\">
                                                                                <a href=\"{{ lecture and not exist ? '#' : url(\"app_front_read_lesson\", {slug: les.slug})  }}\" class=\"btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static\">
                                                                                    <i class=\"fas fa-play me-0\"></i>
                                                                                </a>
                                                                                <span class=\"d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px\">{{ les.title }}</span>
                                                                            </div>
                                                                            <p class=\"mb-0 text-truncate\"></p>
                                                                        </div>
                                                                    {% endfor %}

                                                                    {% set exist = false %}
                                                                    {% for l in finishedLectures %}
                                                                        {% if l.chapitre is not null and l.chapitre is same as chapter %}
                                                                            {% set exist = true %}
                                                                        {% endif %}
                                                                    {% endfor %}

                                                                    <div class=\"d-flex justify-content-between align-items-center\">
                                                                        <div class=\"position-relative d-flex align-items-center\">
                                                                            <a href=\"{{ lecture and exist ? '#' : url(\"app_front_course_chapitre_quizzes\", {slugChapitre: chapter.slug, slugCours: chapter.cours.slug})  }}\" class=\"btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static\">
                                                                                <i class=\"fas fa-play me-0\"></i>
                                                                            </a>
                                                                            <span class=\"d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px\">Quiz</span>
                                                                        </div>
                                                                        <p class=\"mb-0 text-truncate\"></p>
                                                                    </div>


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
                            </div>
                            
                        </div>

                    </div><!-- Row End -->
                </div>
                <!-- Right sidebar END -->

            </div><!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Page content END -->

{% endblock %}
", "front/courses/read.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\courses\\read.html.twig");
    }
}
