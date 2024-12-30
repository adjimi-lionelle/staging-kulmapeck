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

/* front/courses/course_details_text.html.twig */
class __TwigTemplate_d1916ccf5a150da7a111d7b36b52eb84 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/courses/course_details_text.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/courses/course_details_text.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/courses/course_details_text.html.twig", 1);
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
    <section class=\"bg-blue py-7\">
        <div class=\"container\">
            <div class=\"row justify-content-lg-between\">

                <div class=\"col-lg-8\">
                    <!-- Title -->
                    <h1 class=\"text-white\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 13, $this->source); })()), "intitule", [], "any", false, false, false, 13), "html", null, true);
        echo "</h1>
                    <p class=\"text-white\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 14, $this->source); })()), "description", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>
                    <!-- Content -->
                    <ul class=\"list-inline mb-5\">
                        <li class=\"list-inline-item h6 me-4 mb-1 mb-sm-0 text-white\"><span class=\"fw-light\">";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("BY_KEY", [], "messages");
        echo "</span> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 17, $this->source); })()), "enseignant", [], "any", false, false, false, 17), "utilisateur", [], "any", false, false, false, 17), "personne", [], "any", false, false, false, 17), "nomComplet", [], "any", false, false, false, 17), "html", null, true);
        echo "</li>
                        <li class=\"list-inline-item me-4 mb-1 mb-sm-0\">
                            <ul class=\"list-inline mb-0\">
                                <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star-half-alt text-warning\"></i></li>
                                <li class=\"list-inline-item ms-2 h6 text-white\">4.5/5.0</li>
                                <li class=\"list-inline-item text-white\">(1,586 reviews)</li>
                            </ul>
                        </li>
                        <li class=\"list-inline-item h6 mb-0 text-white\"><i class=\"fas fa-globe text-info me-2\"></i>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 29, $this->source); })()), "language", [], "any", false, false, false, 29), "html", null, true);
        echo "</li>
                    </ul>
                </div>

                <div class=\"col-lg-3\">
                    <h6 class=\"text-white lead fw-light mb-3\"><i class=\"fas fa-user-graduate text-orange me-2\"></i>";
        // line 34
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 34, $this->source); })()), "eleves", [], "any", false, false, false, 34)), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ALLREADYENROLLED_KEY", [], "messages");
        echo "</h6>
                    
                    <!-- Button -->
                    <a href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_course_start", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 37, $this->source); })()), "slug", [], "any", false, false, false, 37)], "http", false), "html", null, true);
        echo "\" class=\"btn btn-warning mb-3 w-100\">
                        ";
        // line 38
        if ( !(isset($context["exist"]) || array_key_exists("exist", $context) ? $context["exist"] : (function () { throw new RuntimeError('Variable "exist" does not exist.', 38, $this->source); })())) {
            // line 39
            echo "                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ENROLLANDSTART_KEY", [], "messages");
            // line 40
            echo "                        ";
        } else {
            // line 41
            echo "                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CONTINUE_READING_KEY", [], "messages");
            echo " 
                        ";
        }
        // line 42
        echo " 
                    </a>
                    
                    <!-- Progress item -->
                    <div class=\"overflow-hidden mb-4\">
                        <h6 class=\"text-white\">";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("YOURPROGRESS_KEY", [], "messages");
        echo "</h6>
                        ";
        // line 48
        $context["percent"] = (((twig_length_filter($this->env, (isset($context["lessons"]) || array_key_exists("lessons", $context) ? $context["lessons"] : (function () { throw new RuntimeError('Variable "lessons" does not exist.', 48, $this->source); })())) > 0)) ? (((100 * twig_length_filter($this->env, (isset($context["lectures"]) || array_key_exists("lectures", $context) ? $context["lectures"] : (function () { throw new RuntimeError('Variable "lectures" does not exist.', 48, $this->source); })()))) / twig_length_filter($this->env, (isset($context["lessons"]) || array_key_exists("lessons", $context) ? $context["lessons"] : (function () { throw new RuntimeError('Variable "lessons" does not exist.', 48, $this->source); })())))) : (0));
        // line 49
        echo "                        <div class=\"progress progress-sm bg-white bg-opacity-10 mb-1\">
                            <div class=\"progress-bar bg-white aos\" role=\"progressbar\" data-aos=\"slide-right\" data-aos-delay=\"200\" data-aos-duration=\"1000\" data-aos-easing=\"ease-in-out\" style=\"width: ";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "%;\" aria-valuenow=\"";
        echo twig_escape_filter($this->env, (isset($context["percent"]) || array_key_exists("percent", $context) ? $context["percent"] : (function () { throw new RuntimeError('Variable "percent" does not exist.', 50, $this->source); })()), "html", null, true);
        echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                        </div>
                        <small class=\"text-white\">";
        // line 52
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["lectures"]) || array_key_exists("lectures", $context) ? $context["lectures"] : (function () { throw new RuntimeError('Variable "lectures" does not exist.', 52, $this->source); })())), "html", null, true);
        echo " of ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["lessons"]) || array_key_exists("lessons", $context) ? $context["lessons"] : (function () { throw new RuntimeError('Variable "lessons" does not exist.', 52, $this->source); })())), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("COMPLETED_KEY", [], "messages");
        echo "</small>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =======================
    Page content START -->
    <section class=\"pt-0\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Main content START -->
                <div class=\"col-12\">
                    <div class=\"card shadow rounded-2 p-0 mt-n5\">
                        <!-- Tabs START -->
                        <div class=\"card-header border-bottom px-4 pt-3 pb-0\">
                            <ul class=\"nav nav-bottom-line py-0\" id=\"course-pills-tab\" role=\"tablist\">
                                <!-- Tab item -->
                                <li class=\"nav-item me-2 me-sm-4\" role=\"presentation\">
                                    <button class=\"nav-link mb-2 mb-md-0 active\" id=\"course-pills-tab-1\" data-bs-toggle=\"pill\" data-bs-target=\"#course-pills-1\" type=\"button\" role=\"tab\" aria-controls=\"course-pills-1\" aria-selected=\"true\">";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("COURSEDESCRIPTION_KEY", [], "messages");
        echo "</button>
                                </li>
                                <!-- Tab item -->
                                <li class=\"nav-item me-2 me-sm-4\" role=\"presentation\">
                                    <button class=\"nav-link mb-2 mb-md-0\" id=\"course-pills-tab-2\" data-bs-toggle=\"pill\" data-bs-target=\"#course-pills-2\" type=\"button\" role=\"tab\" aria-controls=\"course-pills-2\" aria-selected=\"false\">";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CHAPTERS_KEY", [], "messages");
        echo "</button>
                                </li>
                                <!-- Tab item -->
                                <li class=\"nav-item me-2 me-sm-4\" role=\"presentation\">
                                    <button class=\"nav-link mb-2 mb-md-0\" id=\"course-pills-tab-4\" data-bs-toggle=\"pill\" data-bs-target=\"#course-pills-4\" type=\"button\" role=\"tab\" aria-controls=\"course-pills-4\" aria-selected=\"false\">Reviews</button>
                                </li>
                                <!-- Tab item -->
                                <li class=\"nav-item me-2 me-sm-4\" role=\"presentation\">
                                    <button class=\"nav-link mb-2 mb-md-0\" id=\"course-pills-tab-3\" data-bs-toggle=\"pill\" data-bs-target=\"#course-pills-3\" type=\"button\" role=\"tab\" aria-controls=\"course-pills-3\" aria-selected=\"false\">Discussions</button>
                                </li>
                            </ul>
                        </div>
                        <!-- Tabs END -->

                        <!-- Tab contents START -->
                        <div class=\"card-body p-sm-4\">
                            <div class=\"tab-content\" id=\"course-pills-tabContent\">
                                <!-- Content START -->
                                <div class=\"tab-pane fade show active\" id=\"course-pills-1\" role=\"tabpanel\" aria-labelledby=\"course-pills-tab-1\">
                                    <!-- Accordion START -->
                                    <div class=\"accordion accordion-icon accordion-border\" id=\"accordionExample2\">
                                        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 98, $this->source); })()), "chapitres", [], "any", false, false, false, 98), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 98, $this->source); })()), "numero", [], "any", false, false, false, 98) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 98, $this->source); })()), "numero", [], "any", false, false, false, 98)); }));
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
        foreach ($context['_seq'] as $context["_key"] => $context["chap"]) {
            // line 99
            echo "                                            <!-- Item -->
                                            <div class=\"accordion-item mb-3\">
                                                <h6 class=\"accordion-header font-base\" id=\"heading-";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 101), "html", null, true);
            echo "\">
                                                    <button class=\"accordion-button fw-bold rounded d-flex collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 102), "html", null, true);
            echo "\" aria-expanded=\"";
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 102)) ? ("true") : ("false"));
            echo "\" aria-controls=\"collapse-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 102), "html", null, true);
            echo "\">
                                                        ";
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CHAPTER_KEY", [], "messages");
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chap"], "numero", [], "any", false, false, false, 103), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chap"], "title", [], "any", false, false, false, 103), "html", null, true);
            echo "
                                                        <span class=\"small ms-0 ms-sm-2 d-none d-sm-block\">(";
            // line 104
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chap"], "lessons", [], "any", false, false, false, 104)), "html", null, true);
            echo " ";
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chap"], "lessons", [], "any", false, false, false, 104)) == 1)) ? ("lesson") : ("lessons"));
            echo ")</span> 

                                                        <!-- Mark button -->
                                                        <span class=\"";
            // line 107
            echo (((twig_length_filter($this->env, (isset($context["lectures"]) || array_key_exists("lectures", $context) ? $context["lectures"] : (function () { throw new RuntimeError('Variable "lectures" does not exist.', 107, $this->source); })())) === twig_length_filter($this->env, (isset($context["lessons"]) || array_key_exists("lessons", $context) ? $context["lessons"] : (function () { throw new RuntimeError('Variable "lessons" does not exist.', 107, $this->source); })())))) ? ("text-success") : ("text-secondary"));
            echo " ms-auto pe-4\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Mark as completed\">
                                                            <i class=\"bi bi-check-circle-fill\"></i>
                                                        </span>
                                                    </button>
                                                </h6>
                                                
                                                <div id=\"collapse-";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 113), "html", null, true);
            echo "\" class=\"accordion-collapse collapse ";
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 113)) ? ("show") : (""));
            echo "\" aria-labelledby=\"heading-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 113), "html", null, true);
            echo "\" data-bs-parent=\"#accordionExample2\">
                                                    <div class=\"accordion-body mt-3\">
                                                        ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chap"], "lessons", [], "any", false, false, false, 115), function ($__c__, $__d__) use ($context, $macros) { $context["c"] = $__c__; $context["d"] = $__d__; return (twig_get_attribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 115, $this->source); })()), "numero", [], "any", false, false, false, 115) <=> twig_get_attribute($this->env, $this->source, (isset($context["d"]) || array_key_exists("d", $context) ? $context["d"] : (function () { throw new RuntimeError('Variable "d" does not exist.', 115, $this->source); })()), "numero", [], "any", false, false, false, 115)); }));
            foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
                // line 116
                echo "                                                            
                                                            <!-- Course lecture -->
                                                            <div class=\"d-flex justify-content-between align-items-center\">
                                                                <div class=\"d-flex align-items-center\">
                                                                    ";
                // line 120
                if ( !(twig_get_attribute($this->env, $this->source, $context["lesson"], "videoLink", [], "any", false, false, false, 120) === null)) {
                    // line 121
                    echo "                                                                        <!-- Video button -->
                                                                        <a href=\"#\" class=\"btn btn-danger-soft btn-round btn-sm mb-0 position-static\">
                                                                                <i class=\"fas fa-play me-0\"></i>
                                                                        </a>
                                                                    ";
                } else {
                    // line 126
                    echo "                                                                        <a href=\"#\" class=\"icon-md mb-0 position-static flex-shrink-0 text-body\">
                                                                            <i class=\"fas fa-file-pdf fa-fw fs-5\"></i>
                                                                        </a>
                                                                    ";
                }
                // line 130
                echo "                                                                    
                                                                    <!-- Content -->
                                                                    <div class=\"ms-3\">
                                                                        <a href=\"#\" class=\"d-inline-block text-truncate mb-0 h6 fw-normal w-100px w-sm-200px w-md-400px\"> ";
                // line 133
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("LESSONS_KEY", [], "messages");
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lesson"], "numero", [], "any", false, false, false, 133), "html", null, true);
                echo " : ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lesson"], "title", [], "any", false, false, false, 133), "html", null, true);
                echo "</a>
                                                                    </div>
                                                                </div>
                                                                ";
                // line 136
                $context["isReaded"] = false;
                // line 137
                echo "                                                                ";
                if ( !((isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 137, $this->source); })()) === null)) {
                    // line 138
                    echo "                                                                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["eleve"]) || array_key_exists("eleve", $context) ? $context["eleve"] : (function () { throw new RuntimeError('Variable "eleve" does not exist.', 138, $this->source); })()), "lectures", [], "any", false, false, false, 138));
                    foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                        // line 139
                        echo "                                                                        ";
                        if (((twig_get_attribute($this->env, $this->source, $context["l"], "lesson", [], "any", false, false, false, 139) === $context["lesson"]) && twig_get_attribute($this->env, $this->source, $context["l"], "isFinished", [], "any", false, false, false, 139))) {
                            // line 140
                            echo "                                                                            ";
                            $context["isReaded"] = true;
                            // line 141
                            echo "                                                                        ";
                        }
                        // line 142
                        echo "                                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 143
                    echo "                                                                ";
                }
                // line 144
                echo "                                                                <!-- Actions Mark button -->
                                                                <a href=\"#\" class=\"p-2 mb-0 ";
                // line 145
                echo (((isset($context["isReaded"]) || array_key_exists("isReaded", $context) ? $context["isReaded"] : (function () { throw new RuntimeError('Variable "isReaded" does not exist.', 145, $this->source); })())) ? ("text-success") : ("text-secondary"));
                echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"";
                echo (((isset($context["isReaded"]) || array_key_exists("isReaded", $context) ? $context["isReaded"] : (function () { throw new RuntimeError('Variable "isReaded" does not exist.', 145, $this->source); })())) ? ("Completed") : ("Not Completed"));
                echo "\">
                                                                    <i class=\"bi bi-check-circle-fill\"></i>
                                                                </a>
                                                            </div>

                                                            <hr> <!-- Divider -->

                                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            echo "                                                        ";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chap"], "quizzes", [], "any", false, false, false, 153)) > 0)) {
                // line 154
                echo "                                                        <!-- Course slide -->
                                                        <div class=\"d-flex justify-content-between align-items-center\">
                                                            <div class=\"position-relative d-flex align-items-center\">
                                                                <div class=\"d-flex align-items-center\">
                                                                    <!-- Video button -->
                                                                    <a href=\"#\" class=\"icon-md mb-0 position-static flex-shrink-0 text-body\">
                                                                        <i class=\"fas fa-question-circle fa-fw fs-5\"></i>
                                                                    </a>
                                                                    <!-- Content -->
                                                                    <div class=\"ms-3\">
                                                                        <a href=\"#\" class=\"d-inline-block text-truncate mb-0 h6 fw-normal w-100px w-sm-200px w-md-400px\">Quiz (QCM)</a>
                                                                        <ul class=\"nav nav-divider small mb-0\">
                                                                            <li class=\"nav-item\">";
                // line 166
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chap"], "quizzes", [], "any", false, false, false, 166)), "html", null, true);
                echo " questions</li>
                                                                            <li class=\"nav-item\">20 pts</li>
                                                                        </ul>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                            <!-- Actions Mark button -->
                                                            <a href=\"#\" class=\"p-2 mb-0 text-secondary\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Mark as Complete\">
                                                                <i class=\"bi bi-check-circle-fill\"></i>
                                                            </a>
                                                        </div>
                                                        ";
            }
            // line 179
            echo "                                                    </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "
                                    </div>
                                    <!-- Accordion END -->
                                </div>
                                <!-- Content END -->

                                <!-- Content START -->
                                <div class=\"tab-pane fade\" id=\"course-pills-2\" role=\"tabpanel\" aria-labelledby=\"course-pills-tab-2\">
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header border-bottom p-0 pb-3\">
                                            <!-- Title and select -->
                                            <div class=\"d-sm-flex justify-content-between align-items-center\">
                                                <h4 class=\"mb-0\">";
        // line 196
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ALLCHAPTERS_KEY", [], "messages");
        echo "</h4>
                                            </div>
                                        </div>

                                        <!-- Card body -->
                                        <div class=\"card-body p-0 pt-3\">
                                            ";
        // line 202
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 202, $this->source); })()), "chapitres", [], "any", false, false, false, 202), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 202, $this->source); })()), "numero", [], "any", false, false, false, 202) <=> twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 202, $this->source); })()), "numero", [], "any", false, false, false, 202)); }));
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
        foreach ($context['_seq'] as $context["_key"] => $context["chap"]) {
            // line 203
            echo "                                                <!-- Note item -->
                                                <div class=\"row g-4\">
                                                    <!-- Content -->
                                                    <div class=\"col-sm-12 col-xl-12\">
                                                        <h5>";
            // line 207
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chap"], "title", [], "any", false, false, false, 207), "html", null, true);
            echo "</h5>
                                                        <p>";
            // line 208
            echo twig_get_attribute($this->env, $this->source, $context["chap"], "description", [], "any", false, false, false, 208);
            echo "</p>
                                                        <!-- Buttons -->
                                                        <div class=\"hstack gap-3 flex-wrap\">
                                                            <a href=\"";
            // line 211
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_course_start", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 211, $this->source); })()), "slug", [], "any", false, false, false, 211)], "http", false), "html", null, true);
            echo "\" class=\"btn btn-sm btn-primary mb-0\"><i class=\"bi bi-play-fill me-2\"></i> 
                                                            ";
            // line 212
            if ( !(isset($context["exist"]) || array_key_exists("exist", $context) ? $context["exist"] : (function () { throw new RuntimeError('Variable "exist" does not exist.', 212, $this->source); })())) {
                // line 213
                echo "                                                                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("STARTREADING_KEY", [], "messages");
                // line 214
                echo "                                                            ";
            } else {
                // line 215
                echo "                                                                ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CONTINUE_KEY", [], "messages");
                // line 216
                echo "                                                            ";
            }
            // line 217
            echo "                                                        </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                ";
            // line 222
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 222)) {
                // line 223
                echo "                                                    <hr> <!-- Divider -->
                                                ";
            }
            // line 225
            echo "                                            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chap'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        echo "                                        </div>
                                    </div>
                                </div>
                                <!-- Content END -->

                                <!-- Content START -->
                                <div class=\"tab-pane fade\" id=\"course-pills-3\" role=\"tabpanel\" aria-labelledby=\"course-pills-tab-3\">    
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header border-bottom p-0 pb-3\">
                                            <!-- Title -->
                                            <h4 class=\"mb-3\">Discussions</h4>
                                        </div>

                                        <!-- Card body -->
                                        <div class=\"card-body p-0 pt-3\">
                                            <div class=\"vstack gap-3\">
                                                ";
        // line 243
        echo twig_include($this->env, $context, "front/includes/courses/forum.html.twig");
        echo "
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- Content END -->

                                <!-- Content START -->
                                <div class=\"tab-pane fade\" id=\"course-pills-4\" role=\"tabpanel\" aria-labelledby=\"course-pills-tab-4\">    
                                    <div class=\"card\">
                                        <!-- Card body -->
                                        <div class=\"card-body p-0 pt-3\">
                                            <div class=\"vstack gap-3\">
                                                ";
        // line 257
        echo twig_include($this->env, $context, "front/includes/courses/_course_reviews.html.twig");
        echo "
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- Content END -->

                            </div>
                        </div>
                        <!-- Tab contents END -->
                    </div>
                </div>
                <!-- Main content END -->
            </div><!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Page content END -->


    <!-- =======================
    Listed courses START -->
    <section class=\"pt-0 mt-5 mb-3\">
        <div class=\"container\">
            <!-- Title -->
            <div class=\"row mb-4\">
                <h2 class=\"mb-0\">";
        // line 284
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("TOPLISTED_KEY", [], "messages");
        echo "</h2>
            </div>

            <div class=\"row\">
                <!-- Slider START -->
                <div class=\"tiny-slider arrow-round arrow-blur arrow-hover\">
                    <div class=\"tiny-slider-inner\" data-autoplay=\"false\" data-arrow=\"true\" data-edge=\"2\" data-dots=\"false\" data-items=\"3\" data-items-lg=\"2\" data-items-sm=\"1\">
                        ";
        // line 291
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["topCourses"]) || array_key_exists("topCourses", $context) ? $context["topCourses"] : (function () { throw new RuntimeError('Variable "topCourses" does not exist.', 291, $this->source); })()));
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
            // line 292
            echo "                            ";
            if ( !($context["cours"] === (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 292, $this->source); })()))) {
                // line 293
                echo "                                ";
                echo twig_include($this->env, $context, "front/includes/courses/_trending_course.html.twig", ["course" => $context["cours"]]);
                echo "
                            ";
            }
            // line 295
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
        // line 296
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
        return "front/courses/course_details_text.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  662 => 296,  648 => 295,  642 => 293,  639 => 292,  622 => 291,  612 => 284,  582 => 257,  565 => 243,  546 => 226,  532 => 225,  528 => 223,  526 => 222,  519 => 217,  516 => 216,  513 => 215,  510 => 214,  507 => 213,  505 => 212,  501 => 211,  495 => 208,  491 => 207,  485 => 203,  468 => 202,  459 => 196,  444 => 183,  427 => 179,  411 => 166,  397 => 154,  394 => 153,  378 => 145,  375 => 144,  372 => 143,  366 => 142,  363 => 141,  360 => 140,  357 => 139,  352 => 138,  349 => 137,  347 => 136,  337 => 133,  332 => 130,  326 => 126,  319 => 121,  317 => 120,  311 => 116,  307 => 115,  298 => 113,  289 => 107,  281 => 104,  273 => 103,  265 => 102,  261 => 101,  257 => 99,  240 => 98,  216 => 77,  209 => 73,  181 => 52,  174 => 50,  171 => 49,  169 => 48,  165 => 47,  158 => 42,  152 => 41,  149 => 40,  146 => 39,  144 => 38,  140 => 37,  132 => 34,  124 => 29,  107 => 17,  101 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"front/base.html.twig\" %}

{% block title %} - Course détails{% endblock %}

{% block mainContent %}

    <section class=\"bg-blue py-7\">
        <div class=\"container\">
            <div class=\"row justify-content-lg-between\">

                <div class=\"col-lg-8\">
                    <!-- Title -->
                    <h1 class=\"text-white\">{{ course.intitule }}</h1>
                    <p class=\"text-white\">{{ course.description }}</p>
                    <!-- Content -->
                    <ul class=\"list-inline mb-5\">
                        <li class=\"list-inline-item h6 me-4 mb-1 mb-sm-0 text-white\"><span class=\"fw-light\">{% trans %}BY_KEY{% endtrans %}</span> {{ course.enseignant.utilisateur.personne.nomComplet }}</li>
                        <li class=\"list-inline-item me-4 mb-1 mb-sm-0\">
                            <ul class=\"list-inline mb-0\">
                                <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star-half-alt text-warning\"></i></li>
                                <li class=\"list-inline-item ms-2 h6 text-white\">4.5/5.0</li>
                                <li class=\"list-inline-item text-white\">(1,586 reviews)</li>
                            </ul>
                        </li>
                        <li class=\"list-inline-item h6 mb-0 text-white\"><i class=\"fas fa-globe text-info me-2\"></i>{{ course.language }}</li>
                    </ul>
                </div>

                <div class=\"col-lg-3\">
                    <h6 class=\"text-white lead fw-light mb-3\"><i class=\"fas fa-user-graduate text-orange me-2\"></i>{{ course.eleves|length }} {% trans %}ALLREADYENROLLED_KEY{% endtrans %}</h6>
                    
                    <!-- Button -->
                    <a href=\"{{ url(\"app_front_course_start\", {slug: course.slug}, \"http\", false) }}\" class=\"btn btn-warning mb-3 w-100\">
                        {% if not exist %}
                            {% trans %}ENROLLANDSTART_KEY{% endtrans %}
                        {% else %}
                            {% trans %}CONTINUE_READING_KEY{% endtrans %} 
                        {% endif %} 
                    </a>
                    
                    <!-- Progress item -->
                    <div class=\"overflow-hidden mb-4\">
                        <h6 class=\"text-white\">{% trans %}YOURPROGRESS_KEY{% endtrans %}</h6>
                        {% set percent = lessons|length > 0 ? 100 * lectures|length / lessons|length : 0 %}
                        <div class=\"progress progress-sm bg-white bg-opacity-10 mb-1\">
                            <div class=\"progress-bar bg-white aos\" role=\"progressbar\" data-aos=\"slide-right\" data-aos-delay=\"200\" data-aos-duration=\"1000\" data-aos-easing=\"ease-in-out\" style=\"width: {{ percent }}%;\" aria-valuenow=\"{{ percent }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                        </div>
                        <small class=\"text-white\">{{ lectures|length }} of {{ lessons|length }} {% trans %}COMPLETED_KEY{% endtrans %}</small>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =======================
    Page content START -->
    <section class=\"pt-0\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Main content START -->
                <div class=\"col-12\">
                    <div class=\"card shadow rounded-2 p-0 mt-n5\">
                        <!-- Tabs START -->
                        <div class=\"card-header border-bottom px-4 pt-3 pb-0\">
                            <ul class=\"nav nav-bottom-line py-0\" id=\"course-pills-tab\" role=\"tablist\">
                                <!-- Tab item -->
                                <li class=\"nav-item me-2 me-sm-4\" role=\"presentation\">
                                    <button class=\"nav-link mb-2 mb-md-0 active\" id=\"course-pills-tab-1\" data-bs-toggle=\"pill\" data-bs-target=\"#course-pills-1\" type=\"button\" role=\"tab\" aria-controls=\"course-pills-1\" aria-selected=\"true\">{% trans %}COURSEDESCRIPTION_KEY{% endtrans %}</button>
                                </li>
                                <!-- Tab item -->
                                <li class=\"nav-item me-2 me-sm-4\" role=\"presentation\">
                                    <button class=\"nav-link mb-2 mb-md-0\" id=\"course-pills-tab-2\" data-bs-toggle=\"pill\" data-bs-target=\"#course-pills-2\" type=\"button\" role=\"tab\" aria-controls=\"course-pills-2\" aria-selected=\"false\">{% trans %}CHAPTERS_KEY{% endtrans %}</button>
                                </li>
                                <!-- Tab item -->
                                <li class=\"nav-item me-2 me-sm-4\" role=\"presentation\">
                                    <button class=\"nav-link mb-2 mb-md-0\" id=\"course-pills-tab-4\" data-bs-toggle=\"pill\" data-bs-target=\"#course-pills-4\" type=\"button\" role=\"tab\" aria-controls=\"course-pills-4\" aria-selected=\"false\">Reviews</button>
                                </li>
                                <!-- Tab item -->
                                <li class=\"nav-item me-2 me-sm-4\" role=\"presentation\">
                                    <button class=\"nav-link mb-2 mb-md-0\" id=\"course-pills-tab-3\" data-bs-toggle=\"pill\" data-bs-target=\"#course-pills-3\" type=\"button\" role=\"tab\" aria-controls=\"course-pills-3\" aria-selected=\"false\">Discussions</button>
                                </li>
                            </ul>
                        </div>
                        <!-- Tabs END -->

                        <!-- Tab contents START -->
                        <div class=\"card-body p-sm-4\">
                            <div class=\"tab-content\" id=\"course-pills-tabContent\">
                                <!-- Content START -->
                                <div class=\"tab-pane fade show active\" id=\"course-pills-1\" role=\"tabpanel\" aria-labelledby=\"course-pills-tab-1\">
                                    <!-- Accordion START -->
                                    <div class=\"accordion accordion-icon accordion-border\" id=\"accordionExample2\">
                                        {% for chap in course.chapitres|sort((a, b) => a.numero <=> b.numero) %}
                                            <!-- Item -->
                                            <div class=\"accordion-item mb-3\">
                                                <h6 class=\"accordion-header font-base\" id=\"heading-{{ loop.index }}\">
                                                    <button class=\"accordion-button fw-bold rounded d-flex collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-{{ loop.index }}\" aria-expanded=\"{{ loop.first ? 'true' : 'false' }}\" aria-controls=\"collapse-{{ loop.index }}\">
                                                        {% trans %}CHAPTER_KEY{% endtrans %} {{ chap.numero }} : {{ chap.title }}
                                                        <span class=\"small ms-0 ms-sm-2 d-none d-sm-block\">({{ chap.lessons|length }} {{ chap.lessons|length == 1 ? 'lesson' : 'lessons' }})</span> 

                                                        <!-- Mark button -->
                                                        <span class=\"{{ lectures|length is same as lessons|length ? 'text-success' : 'text-secondary' }} ms-auto pe-4\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Mark as completed\">
                                                            <i class=\"bi bi-check-circle-fill\"></i>
                                                        </span>
                                                    </button>
                                                </h6>
                                                
                                                <div id=\"collapse-{{ loop.index }}\" class=\"accordion-collapse collapse {{ loop.first ? 'show' : '' }}\" aria-labelledby=\"heading-{{ loop.index }}\" data-bs-parent=\"#accordionExample2\">
                                                    <div class=\"accordion-body mt-3\">
                                                        {% for lesson in chap.lessons|sort((c, d) => c.numero <=> d.numero) %}
                                                            
                                                            <!-- Course lecture -->
                                                            <div class=\"d-flex justify-content-between align-items-center\">
                                                                <div class=\"d-flex align-items-center\">
                                                                    {% if lesson.videoLink is not same as null %}
                                                                        <!-- Video button -->
                                                                        <a href=\"#\" class=\"btn btn-danger-soft btn-round btn-sm mb-0 position-static\">
                                                                                <i class=\"fas fa-play me-0\"></i>
                                                                        </a>
                                                                    {% else %}
                                                                        <a href=\"#\" class=\"icon-md mb-0 position-static flex-shrink-0 text-body\">
                                                                            <i class=\"fas fa-file-pdf fa-fw fs-5\"></i>
                                                                        </a>
                                                                    {% endif %}
                                                                    
                                                                    <!-- Content -->
                                                                    <div class=\"ms-3\">
                                                                        <a href=\"#\" class=\"d-inline-block text-truncate mb-0 h6 fw-normal w-100px w-sm-200px w-md-400px\"> {% trans %}LESSONS_KEY{% endtrans %} {{ lesson.numero }} : {{ lesson.title }}</a>
                                                                    </div>
                                                                </div>
                                                                {% set isReaded = false %}
                                                                {% if eleve is not same as null %}
                                                                    {% for l in eleve.lectures %}
                                                                        {% if l.lesson is same as lesson and l.isFinished %}
                                                                            {% set isReaded = true %}
                                                                        {% endif %}
                                                                    {% endfor %}
                                                                {% endif %}
                                                                <!-- Actions Mark button -->
                                                                <a href=\"#\" class=\"p-2 mb-0 {{ isReaded ? 'text-success' : 'text-secondary' }}\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"{{ isReaded ? 'Completed' : 'Not Completed' }}\">
                                                                    <i class=\"bi bi-check-circle-fill\"></i>
                                                                </a>
                                                            </div>

                                                            <hr> <!-- Divider -->

                                                        {% endfor %}
                                                        {% if chap.quizzes|length > 0 %}
                                                        <!-- Course slide -->
                                                        <div class=\"d-flex justify-content-between align-items-center\">
                                                            <div class=\"position-relative d-flex align-items-center\">
                                                                <div class=\"d-flex align-items-center\">
                                                                    <!-- Video button -->
                                                                    <a href=\"#\" class=\"icon-md mb-0 position-static flex-shrink-0 text-body\">
                                                                        <i class=\"fas fa-question-circle fa-fw fs-5\"></i>
                                                                    </a>
                                                                    <!-- Content -->
                                                                    <div class=\"ms-3\">
                                                                        <a href=\"#\" class=\"d-inline-block text-truncate mb-0 h6 fw-normal w-100px w-sm-200px w-md-400px\">Quiz (QCM)</a>
                                                                        <ul class=\"nav nav-divider small mb-0\">
                                                                            <li class=\"nav-item\">{{ chap.quizzes|length }} questions</li>
                                                                            <li class=\"nav-item\">20 pts</li>
                                                                        </ul>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>
                                                            <!-- Actions Mark button -->
                                                            <a href=\"#\" class=\"p-2 mb-0 text-secondary\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Mark as Complete\">
                                                                <i class=\"bi bi-check-circle-fill\"></i>
                                                            </a>
                                                        </div>
                                                        {% endif %}
                                                    </div>
                                                </div>
                                            </div>
                                        {% endfor %}

                                    </div>
                                    <!-- Accordion END -->
                                </div>
                                <!-- Content END -->

                                <!-- Content START -->
                                <div class=\"tab-pane fade\" id=\"course-pills-2\" role=\"tabpanel\" aria-labelledby=\"course-pills-tab-2\">
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header border-bottom p-0 pb-3\">
                                            <!-- Title and select -->
                                            <div class=\"d-sm-flex justify-content-between align-items-center\">
                                                <h4 class=\"mb-0\">{% trans %}ALLCHAPTERS_KEY{% endtrans %}</h4>
                                            </div>
                                        </div>

                                        <!-- Card body -->
                                        <div class=\"card-body p-0 pt-3\">
                                            {% for chap in course.chapitres|sort((a, b) => a.numero <=> b.numero) %}
                                                <!-- Note item -->
                                                <div class=\"row g-4\">
                                                    <!-- Content -->
                                                    <div class=\"col-sm-12 col-xl-12\">
                                                        <h5>{{ chap.title }}</h5>
                                                        <p>{{ chap.description|raw }}</p>
                                                        <!-- Buttons -->
                                                        <div class=\"hstack gap-3 flex-wrap\">
                                                            <a href=\"{{ url(\"app_front_course_start\", {slug: course.slug}, \"http\", false) }}\" class=\"btn btn-sm btn-primary mb-0\"><i class=\"bi bi-play-fill me-2\"></i> 
                                                            {% if not exist %}
                                                                {% trans %}STARTREADING_KEY{% endtrans %}
                                                            {% else %}
                                                                {% trans %}CONTINUE_KEY{% endtrans %}
                                                            {% endif %}
                                                        </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                {% if not loop.last %}
                                                    <hr> <!-- Divider -->
                                                {% endif %}
                                            {% endfor %}
                                        </div>
                                    </div>
                                </div>
                                <!-- Content END -->

                                <!-- Content START -->
                                <div class=\"tab-pane fade\" id=\"course-pills-3\" role=\"tabpanel\" aria-labelledby=\"course-pills-tab-3\">    
                                    <div class=\"card\">
                                        <!-- Card header -->
                                        <div class=\"card-header border-bottom p-0 pb-3\">
                                            <!-- Title -->
                                            <h4 class=\"mb-3\">Discussions</h4>
                                        </div>

                                        <!-- Card body -->
                                        <div class=\"card-body p-0 pt-3\">
                                            <div class=\"vstack gap-3\">
                                                {{ include('front/includes/courses/forum.html.twig') }}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- Content END -->

                                <!-- Content START -->
                                <div class=\"tab-pane fade\" id=\"course-pills-4\" role=\"tabpanel\" aria-labelledby=\"course-pills-tab-4\">    
                                    <div class=\"card\">
                                        <!-- Card body -->
                                        <div class=\"card-body p-0 pt-3\">
                                            <div class=\"vstack gap-3\">
                                                {{ include('front/includes/courses/_course_reviews.html.twig') }}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- Content END -->

                            </div>
                        </div>
                        <!-- Tab contents END -->
                    </div>
                </div>
                <!-- Main content END -->
            </div><!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Page content END -->


    <!-- =======================
    Listed courses START -->
    <section class=\"pt-0 mt-5 mb-3\">
        <div class=\"container\">
            <!-- Title -->
            <div class=\"row mb-4\">
                <h2 class=\"mb-0\">{% trans %}TOPLISTED_KEY{% endtrans %}</h2>
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

{% endblock %}", "front/courses/course_details_text.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\courses\\course_details_text.html.twig");
    }
}
