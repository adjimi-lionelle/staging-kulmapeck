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

/* front/courses/chapitre_details.html.twig */
class __TwigTemplate_ccbd5c8dcb0b015dabeb282d06bad366 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/courses/chapitre_details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/courses/chapitre_details.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/courses/chapitre_details.html.twig", 1);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 14, $this->source); })()), "cours", [], "any", false, false, false, 14), "categorie", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14), "html", null, true);
        echo "</h6>
                    <!-- Title -->
                    <h1>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        echo "</h1>
                    <p>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 17, $this->source); })()), "description", [], "any", false, false, false, 17), "html", null, true);
        echo "</p>
                    <!-- Content -->
                    <ul class=\"list-inline mb-0\">
                        <li class=\"list-inline-item h6 me-3 mb-1 mb-sm-0\"><i class=\"fas fa-star text-warning me-2\"></i>";
        // line 20
        echo twig_escape_filter($this->env, ("0" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 20, $this->source); })()), "cours", [], "any", false, false, false, 20), "review", [], "any", false, false, false, 20)), "html", null, true);
        echo "/5.0</li>
                        <li class=\"list-inline-item h6 me-3 mb-1 mb-sm-0\"><i class=\"fas fa-user-graduate text-orange me-2\"></i>";
        // line 21
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 21, $this->source); })()), "cours", [], "any", false, false, false, 21), "eleves", [], "any", false, false, false, 21)), "html", null, true);
        echo " Enrolled</li>
                        <li class=\"list-inline-item h6 me-3 mb-1 mb-sm-0\"><i class=\"fas fa-signal text-success me-2\"></i>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 22, $this->source); })()), "cours", [], "any", false, false, false, 22), "niveauDifficulte", [], "any", false, false, false, 22), "html", null, true);
        echo "</li>
                        <li class=\"list-inline-item h6 me-3 mb-1 mb-sm-0\"><i class=\"bi bi-patch-exclamation-fill text-danger me-2\"></i>Last updated ";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 23, $this->source); })()), "cours", [], "any", false, false, false, 23), "updatedAt", [], "any", false, false, false, 23), "d/m/Y"), "html", null, true);
        echo "</li>
                        <li class=\"list-inline-item h6 mb-0\"><i class=\"fas fa-globe text-info me-2\"></i>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 24, $this->source); })()), "cours", [], "any", false, false, false, 24), "language", [], "any", false, false, false, 24), "html", null, true);
        echo "</li>
                    </ul>
                    <hr>
                    <h1>";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 27, $this->source); })()), "title", [], "any", false, false, false, 27), "html", null, true);
        echo "</h1>
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
        // line 50
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 50, $this->source); })()), "videoLink", [], "any", false, false, false, 50) === null)) {
            // line 51
            echo "                                        <div class=\"row g-3 mb-5\">
                                                <!-- Course video START -->
                                                <div class=\"col-12\">
                                                    <div class=\"video-player rounded-3\">
                                                        <video style=\"max-height: 400px;width: 100%;\" controls crossorigin=\"anonymous\" playsinline poster=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/courses/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 55, $this->source); })()), "chapitre", [], "any", false, false, false, 55), "cours", [], "any", false, false, false, 55), "media", [], "any", false, false, false, 55), "imageFile", [], "any", false, false, false, 55))), "html", null, true);
            echo "\">
                                                            <source src=\"";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 56, $this->source); })()), "videoLink", [], "any", false, false, false, 56), "html", null, true);
            echo "\" type=\"video/mp4\" size=\"720\">
                                                        </video>
                                                    </div>
                                                </div>
                                                <!-- Course video END -->
                                            <!-- Playlist responsive toggler START -->
                                            <div class=\"col-12 d-lg-none\">
                                                <button class=\"btn btn-primary mb-3\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasSidebar\" aria-controls=\"offcanvasSidebar\">
                                                    <i class=\"bi bi-camera-video me-1\"></i> Playlist
                                                </button>
                                            </div>
                                            <!-- Playlist responsive toggler END -->
                                        </div>
                                    ";
        }
        // line 70
        echo "                                    <!-- Course detail START -->
                                    ";
        // line 71
        echo twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 71, $this->source); })()), "content", [], "any", false, false, false, 71);
        echo "

                                </div>
                                <!-- Content END -->

                            </div>
                        </div>
                        <!-- Tab contents END -->

                        <div class=\"card-footer p-4\">
                            <a href=\"\" class=\"btn btn-success\">";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("I_HAVE_FINISHED_KEY", [], "messages");
        echo "</a>
                        </div>
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
                                        <h5 class=\"offcanvas-title text-white\" id=\"offcanvasSidebarLabel\">";
        // line 96
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("COURSE_PLAYLIST_KEY", [], "messages");
        echo "</h5>
                                        <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"offcanvas\" data-bs-target=\"#offcanvasSidebar\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
                                    </div>
                                    <div class=\"offcanvas-body p-3 p-lg-0\">
                                        <div class=\"col-12\">
                                            <!-- Accordion START -->
                                            <div class=\"accordion accordion-icon accordion-bg-light\" id=\"accordionExample2\">
                                                ";
        // line 103
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lesson"]) || array_key_exists("lesson", $context) ? $context["lesson"] : (function () { throw new RuntimeError('Variable "lesson" does not exist.', 103, $this->source); })()), "chapitre", [], "any", false, false, false, 103), "cours", [], "any", false, false, false, 103), "chapitres", [], "any", false, false, false, 103));
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
            // line 104
            echo "                                                    <!-- Item -->
                                                    <div class=\"accordion-item mb-3\">
                                                        <h6 class=\"accordion-header font-base\" id=\"heading-";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 106), "html", null, true);
            echo "\">
                                                            <a class=\"accordion-button fw-bold rounded collapsed d-block\" href=\"#collapse-";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 107), "html", null, true);
            echo "\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 107), "html", null, true);
            echo "\" aria-expanded=\"";
            echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 107) === 1)) ? ("true") : ("false"));
            echo "\" aria-controls=\"collapse-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 107), "html", null, true);
            echo "\">
                                                                <span class=\"mb-0\">";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "title", [], "any", false, false, false, 108), "html", null, true);
            echo "</span> 
                                                                <span class=\"small d-block mt-1\">(3 Lectures)</span> 
                                                            </a>
                                                        </h6>
                                                        <div id=\"collapse-";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 112), "html", null, true);
            echo "\" class=\"accordion-collapse collapse ";
            echo (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 112) === 1)) ? ("show") : (""));
            echo "\" aria-labelledby=\"heading-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 112), "html", null, true);
            echo "\" data-bs-parent=\"#accordionExample2\">
                                                            <div class=\"accordion-body mt-3\">
                                                                <div class=\"vstack gap-3\">

                                                                    <!-- Progress bar -->
                                                                    <div class=\"overflow-hidden\">
                                                                        <div class=\"d-flex justify-content-between\">
                                                                            <p class=\"mb-1 h6\">0/";
            // line 119
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "lessons", [], "any", false, false, false, 119)), "html", null, true);
            echo " Completed</p>
                                                                            <h6 class=\"mb-1 text-end\">";
            // line 120
            echo twig_escape_filter($this->env, ((0 * 100) / twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["chapter"], "lessons", [], "any", false, false, false, 120))), "html", null, true);
            echo "</h6>
                                                                        </div>
                                                                        <div class=\"progress progress-sm bg-primary bg-opacity-10\">
                                                                            <div class=\"progress-bar bg-primary aos\" role=\"progressbar\" data-aos=\"slide-right\" data-aos-delay=\"200\" data-aos-duration=\"1000\" data-aos-easing=\"ease-in-out\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    ";
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["chapter"], "lessons", [], "any", false, false, false, 128));
            foreach ($context['_seq'] as $context["_key"] => $context["les"]) {
                // line 129
                echo "                                                                        <!-- Course lecture -->
                                                                        <div class=\"d-flex justify-content-between align-items-center\">
                                                                            <div class=\"position-relative d-flex align-items-center\">
                                                                                <a href=\"#\" class=\"btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static\">
                                                                                    <i class=\"fas fa-play me-0\"></i>
                                                                                </a>
                                                                                <span class=\"d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px\">";
                // line 135
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["les"], "title", [], "any", false, false, false, 135), "html", null, true);
                echo "</span>
                                                                            </div>
                                                                            <p class=\"mb-0 text-truncate\">2m 10s</p>
                                                                        </div>
                                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['les'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 140
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
        // line 147
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
        return "front/courses/chapitre_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  348 => 147,  328 => 140,  317 => 135,  309 => 129,  305 => 128,  294 => 120,  290 => 119,  276 => 112,  269 => 108,  259 => 107,  255 => 106,  251 => 104,  234 => 103,  224 => 96,  206 => 81,  193 => 71,  190 => 70,  173 => 56,  169 => 55,  163 => 51,  161 => 50,  135 => 27,  129 => 24,  125 => 23,  121 => 22,  117 => 21,  113 => 20,  107 => 17,  103 => 16,  98 => 14,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
                    <h6 class=\"mb-3 font-base bg-primary text-white py-2 px-4 rounded-2 d-inline-block\">{{ chapitre.cours.categorie.name }}</h6>
                    <!-- Title -->
                    <h1>{{ chapitre.title }}</h1>
                    <p>{{ chapitre.description }}</p>
                    <!-- Content -->
                    <ul class=\"list-inline mb-0\">
                        <li class=\"list-inline-item h6 me-3 mb-1 mb-sm-0\"><i class=\"fas fa-star text-warning me-2\"></i>{{ '0' ~ chapitre.cours.review }}/5.0</li>
                        <li class=\"list-inline-item h6 me-3 mb-1 mb-sm-0\"><i class=\"fas fa-user-graduate text-orange me-2\"></i>{{ chapitre.cours.eleves|length }} Enrolled</li>
                        <li class=\"list-inline-item h6 me-3 mb-1 mb-sm-0\"><i class=\"fas fa-signal text-success me-2\"></i>{{ chapitre.cours.niveauDifficulte }}</li>
                        <li class=\"list-inline-item h6 me-3 mb-1 mb-sm-0\"><i class=\"bi bi-patch-exclamation-fill text-danger me-2\"></i>Last updated {{ chapitre.cours.updatedAt|date('d/m/Y') }}</li>
                        <li class=\"list-inline-item h6 mb-0\"><i class=\"fas fa-globe text-info me-2\"></i>{{ chapitre.cours.language }}</li>
                    </ul>
                    <hr>
                    <h1>{{ chapitre.title }}</h1>
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
                                                        <video style=\"max-height: 400px;width: 100%;\" controls crossorigin=\"anonymous\" playsinline poster=\"{{ asset('uploads/media/courses/' ~ lesson.chapitre.cours.media.imageFile) }}\">
                                                            <source src=\"{{ lesson.videoLink }}\" type=\"video/mp4\" size=\"720\">
                                                        </video>
                                                    </div>
                                                </div>
                                                <!-- Course video END -->
                                            <!-- Playlist responsive toggler START -->
                                            <div class=\"col-12 d-lg-none\">
                                                <button class=\"btn btn-primary mb-3\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasSidebar\" aria-controls=\"offcanvasSidebar\">
                                                    <i class=\"bi bi-camera-video me-1\"></i> Playlist
                                                </button>
                                            </div>
                                            <!-- Playlist responsive toggler END -->
                                        </div>
                                    {% endif %}
                                    <!-- Course detail START -->
                                    {{ lesson.content|raw }}

                                </div>
                                <!-- Content END -->

                            </div>
                        </div>
                        <!-- Tab contents END -->

                        <div class=\"card-footer p-4\">
                            <a href=\"\" class=\"btn btn-success\">{% trans %}I_HAVE_FINISHED_KEY{% endtrans %}</a>
                        </div>
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
                                        <h5 class=\"offcanvas-title text-white\" id=\"offcanvasSidebarLabel\">{% trans %}COURSE_PLAYLIST_KEY{% endtrans %}</h5>
                                        <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"offcanvas\" data-bs-target=\"#offcanvasSidebar\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
                                    </div>
                                    <div class=\"offcanvas-body p-3 p-lg-0\">
                                        <div class=\"col-12\">
                                            <!-- Accordion START -->
                                            <div class=\"accordion accordion-icon accordion-bg-light\" id=\"accordionExample2\">
                                                {% for chapter in lesson.chapitre.cours.chapitres %}
                                                    <!-- Item -->
                                                    <div class=\"accordion-item mb-3\">
                                                        <h6 class=\"accordion-header font-base\" id=\"heading-{{ loop.index }}\">
                                                            <a class=\"accordion-button fw-bold rounded collapsed d-block\" href=\"#collapse-{{ loop.index }}\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-{{ loop.index }}\" aria-expanded=\"{{ loop.index is same as 1 ? 'true' : 'false'}}\" aria-controls=\"collapse-{{ loop.index }}\">
                                                                <span class=\"mb-0\">{{ chapter.title }}</span> 
                                                                <span class=\"small d-block mt-1\">(3 Lectures)</span> 
                                                            </a>
                                                        </h6>
                                                        <div id=\"collapse-{{ loop.index }}\" class=\"accordion-collapse collapse {{ loop.index is same as 1 ? 'show' : '' }}\" aria-labelledby=\"heading-{{ loop.index }}\" data-bs-parent=\"#accordionExample2\">
                                                            <div class=\"accordion-body mt-3\">
                                                                <div class=\"vstack gap-3\">

                                                                    <!-- Progress bar -->
                                                                    <div class=\"overflow-hidden\">
                                                                        <div class=\"d-flex justify-content-between\">
                                                                            <p class=\"mb-1 h6\">0/{{ chapter.lessons|length }} Completed</p>
                                                                            <h6 class=\"mb-1 text-end\">{{ 0 * 100 / chapter.lessons|length }}</h6>
                                                                        </div>
                                                                        <div class=\"progress progress-sm bg-primary bg-opacity-10\">
                                                                            <div class=\"progress-bar bg-primary aos\" role=\"progressbar\" data-aos=\"slide-right\" data-aos-delay=\"200\" data-aos-duration=\"1000\" data-aos-easing=\"ease-in-out\" style=\"width: 0%\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    {% for les in chapter.lessons %}
                                                                        <!-- Course lecture -->
                                                                        <div class=\"d-flex justify-content-between align-items-center\">
                                                                            <div class=\"position-relative d-flex align-items-center\">
                                                                                <a href=\"#\" class=\"btn btn-danger-soft btn-round btn-sm mb-0 stretched-link position-static\">
                                                                                    <i class=\"fas fa-play me-0\"></i>
                                                                                </a>
                                                                                <span class=\"d-inline-block text-truncate ms-2 mb-0 h6 fw-light w-200px\">{{ les.title }}</span>
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
", "front/courses/chapitre_details.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\courses\\chapitre_details.html.twig");
    }
}
