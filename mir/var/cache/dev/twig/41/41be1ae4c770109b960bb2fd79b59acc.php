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

/* includes/_course_details.html.twig */
class __TwigTemplate_1ca50d4e3c60dc8e664ee05632d1e7a7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/_course_details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/_course_details.html.twig"));

        // line 1
        echo "<!-- Page main content START -->
<div class=\"page-content-wrapper border-0\">

    <!-- Title -->
    <div class=\"row mb-3\">
        <div class=\"col-12 d-sm-flex justify-content-between align-items-center\">
            <h1 class=\"h3 mb-2 mb-sm-0\">";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 7, $this->source); })()), "intitule", [], "any", false, false, false, 7), "html", null, true);
        echo "</h1>
            ";
        // line 8
        if ((array_key_exists("isTeacher", $context) &&  !twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 8, $this->source); })()), "isPublished", [], "any", false, false, false, 8))) {
            // line 9
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_instructor_courses_edit", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 9, $this->source); })()), "slug", [], "any", false, false, false, 9)]), "html", null, true);
            echo "\" class=\"btn btn-primary mb-0\">Edit Course</a>
            ";
        }
        // line 11
        echo "            <a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_instructor_course_forum_index", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 11, $this->source); })()), "slug", [], "any", false, false, false, 11)]), "html", null, true);
        echo "\" class=\"btn btn btn-secondary mb-0\">Course Forum</a>
        </div>
    </div>
            
    <div class=\"row g-4\">

        <!-- Course information START -->
        <div class=\"col-xxl-6\">
            <div class=\"card bg-transparent border rounded-3 h-100\">

                <!-- Catd header -->
                <div class=\"card-header bg-light border-bottom\">
                    <h5 class=\"card-header-title\">";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 23, $this->source); })()), "intitule", [], "any", false, false, false, 23), "html", null, true);
        echo "</h5>
                </div>

                <!-- Card body START -->
                <div class=\"card-body\">

                    <!-- Course image and info START -->
                    <div class=\"row g-4\">
                        <!-- Course image -->
                        <div class=\"col-md-6\">
                            <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/courses/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 33, $this->source); })()), "media", [], "any", false, false, false, 33), "imageFile", [], "any", false, false, false, 33))), "html", null, true);
        echo "\" class=\"rounded\" alt=\"\">
                        </div>
                        <!-- Course info and avatar -->
                        <div class=\"col-md-6\">
                            <!-- Info -->
                            <p class=\"mb-3\">";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 38, $this->source); })()), "description", [], "any", false, false, false, 38)), "truncate", [190, "..."], "method", false, false, false, 38), "html", null, true);
        echo "</p>

                            <!-- Price -->
                            <h5 class=\"mb-3\">";
        // line 41
        ((twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 41, $this->source); })()), "isFree", [], "any", false, false, false, 41)) ? (print ("Free")) : (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 41, $this->source); })()), "montantAbonnement", [], "any", false, false, false, 41) . " XAF"), "html", null, true))));
        echo "</h5>
                            
                            <!-- Avatar -->
                            <div class=\"d-sm-flex align-items-center\">
                                <!-- Avatar image -->
                                <div class=\"avatar avatar-md\">
                                    <img class=\"avatar-img rounded-circle\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 47, $this->source); })()), "enseignant", [], "any", false, false, false, 47), "utilisateur", [], "any", false, false, false, 47), "personne", [], "any", false, false, false, 47), "avatarPath", [], "any", false, false, false, 47)), "html", null, true);
        echo "\" alt=\"avatar\">
                                </div>
                                <div class=\"ms-sm-3 mt-2 mt-sm-0\">
                                    <h6 class=\"mb-0\"><a href=\"#\">By ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 50, $this->source); })()), "enseignant", [], "any", false, false, false, 50), "utilisateur", [], "any", false, false, false, 50), "personne", [], "any", false, false, false, 50), "nomComplet", [], "any", false, false, false, 50), "html", null, true);
        echo "</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Course image and info END -->

                    <!-- Information START -->
                    <div class=\"row mt-3\">

                        <!-- Information item -->
                        <div class=\"col-md-6\">
                            <ul class=\"list-group list-group-borderless\">
                                <li class=\"list-group-item\">
                                    <span>release date:</span>
                                    <span class=\"h6 mb-0\">";
        // line 65
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 65, $this->source); })()), "createdAt", [], "any", false, false, false, 65), "d/m/Y"), "html", null, true);
        echo "</span>
                                </li>

                                <li class=\"list-group-item\">
                                    <span>Category:</span>
                                    <span title=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 70, $this->source); })()), "categorie", [], "any", false, false, false, 70), "name", [], "any", false, false, false, 70), "html", null, true);
        echo "\" class=\"h6 mb-0\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 70, $this->source); })()), "categorie", [], "any", false, false, false, 70), "name", [], "any", false, false, false, 70)), "truncate", [13], "method", false, false, false, 70), "html", null, true);
        echo "</span>
                                </li>

                                <li class=\"list-group-item\">
                                    <span>Total Enrolled:</span>
                                    <span class=\"h6 mb-0\">";
        // line 75
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 75, $this->source); })()), "eleves", [], "any", false, false, false, 75)), "html", null, true);
        echo "</span>
                                </li>

                                <li class=\"list-group-item\">
                                    <span>Premium:</span>
                                    <span class=\"h6 mb-0\">";
        // line 80
        echo (( !twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 80, $this->source); })()), "isFree", [], "any", false, false, false, 80)) ? ("Yes") : ("No"));
        echo "</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Information item -->
                        <div class=\"col-md-6\">
                            <ul class=\"list-group list-group-borderless\">
                                <li class=\"list-group-item\">
                                    <span>Skills:</span>
                                    <span class=\"h6 mb-0\">";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 90, $this->source); })()), "niveauDifficulte", [], "any", false, false, false, 90), "html", null, true);
        echo "</span>
                                </li>

                                <li class=\"list-group-item\">
                                    <span>Total Lecture:</span>
                                    <span class=\"h6 mb-0\">";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 95, $this->source); })()), "numberOfLessons", [], "any", false, false, false, 95), "html", null, true);
        echo "</span>
                                </li>

                                <li class=\"list-group-item\">
                                    <span>Language:</span>
                                    <span class=\"h6 mb-0\">";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 100, $this->source); })()), "language", [], "any", false, false, false, 100), "html", null, true);
        echo "</span>
                                </li>

                                <li class=\"list-group-item\">
                                    <span>Review:</span>
                                    <span class=\"h6 mb-0\">";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 105, $this->source); })()), "review", [], "any", false, false, false, 105), "html", null, true);
        echo "<i class=\"fas fa-star text-warning ms-1\"></i></span>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- Information END -->
                </div>
                <!-- Card body END -->
            </div>
        </div>
        <!-- Course information END -->

        <!-- Chart START -->
        <div class=\"col-xxl-6\">
            <div class=\"row g-4\">

                <!-- Active student START -->
                <div class=\"col-md-6 col-xxl-12\">
                    <div class=\"card bg-transparent border overflow-hidden\">
                        <!-- Card header -->
                        <div class=\"card-header bg-light border-bottom\">
                            <h5 class=\"card-header-title mb-0\">Total course earning</h5>
                        </div>
                        <!-- Card body -->
                        <div class=\"card-body p-0\">
                            <div class=\"d-sm-flex justify-content-between p-4\">
                                <h4 class=\"text-blue mb-0\">\$12,586</h4>
                                <p class=\"mb-0\"><span class=\"text-success me-1\">0.20%<i class=\"bi bi-arrow-up\"></i></span>vs last Week</p>
                            </div>
                            <!-- Apex chart -->
                            <div id=\"activeChartstudent\"></div>
                        </div>
                    </div>
                </div>
                <!-- Active student END -->

                <!-- Enrolled START -->
                <div class=\"col-md-6 col-xxl-12\">
                    <div class=\"card bg-transparent border overflow-hidden\">
                        <!-- Card header -->
                        <div class=\"card-header bg-light border-bottom\">
                            <h5 class=\"card-header-title mb-0\">New Enrollment This Month</h5>
                        </div>
                        <!-- Card body -->
                        <div class=\"card-body p-0\">
                            <div class=\"d-sm-flex justify-content-between p-4\">
                                <h4 class=\"text-blue mb-0\">186</h4>
                                <p class=\"mb-0\"><span class=\"text-success me-1\">0.35%<i class=\"bi bi-arrow-up\"></i></span>vs last Week</p>
                            </div>
                            <!-- Apex chart -->
                            <div id=\"activeChartstudent2\"></div>
                        </div>
                    </div>
                </div>
                <!-- Enrolled END -->

            </div>
        </div>
        <!-- Chart END -->

        <!-- Student review START -->
        <div class=\"col-12\">
            <div class=\"card bg-transparent border\">

                <!-- Card header START -->
                <div class=\"card-header bg-light border-bottom\">
                    <h5 class=\"mb-0\">Students List</h5>
                </div>
                <!-- Card header END -->
    
                <!-- Card body START -->
                <div class=\"card-body pb-0\">
                    <!-- Table START -->
                    <div class=\"table-responsive border-0\">
                        <table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
                            <!-- Table head -->
                            <thead>
                                <tr>
                                    <th scope=\"col\" class=\"border-0 rounded-start\">Student Name</th>
                                    <th scope=\"col\" class=\"border-0\">Email</th>
                                    <th scope=\"col\" class=\"border-0\">Phone Number</th>
                                    <th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
                                </tr>
                            </thead>
    
                            <!-- Table body START -->
                            <tbody>
                                ";
        // line 193
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 193, $this->source); })()), "eleves", [], "any", false, false, false, 193));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 194
            echo "                                    <!-- Table row -->
                                    <tr>
                                        <!-- Table data -->
                                        <td>
                                            <div class=\"d-flex align-items-center position-relative\">
                                                <!-- Image -->
                                                <div class=\"avatar avatar-xs mb-2 mb-md-0\">
                                                    <img src=\"";
            // line 201
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "utilisateur", [], "any", false, false, false, 201), "personne", [], "any", false, false, false, 201), "avatarPath", [], "any", false, false, false, 201)), "html", null, true);
            echo "\" class=\"rounded-circle\" alt=\"\">
                                                </div>
                                                <div class=\"mb-0 ms-2\">
                                                    <!-- Title -->
                                                    <h6 class=\"mb-0\"><a href=\"#\" class=\"stretched-link\">";
            // line 205
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "utilisateur", [], "any", false, false, false, 205), "personne", [], "any", false, false, false, 205), "nomComplet", [], "any", false, false, false, 205)), "truncate", [30, "..."], "method", false, false, false, 205), "html", null, true);
            echo "</a></h6>
                                                </div>
                                            </div>
                                        </td>
        
                                        <!-- Table data -->
                                        <td class=\"text-center text-sm-start\">
                                            <h6 class=\"mb-0\">";
            // line 212
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "utilisateur", [], "any", false, false, false, 212), "email", [], "any", false, false, false, 212), "html", null, true);
            echo "</h6>
                                        </td>
        
                                        <!-- Table data -->
                                        <td>";
            // line 216
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "utilisateur", [], "any", false, false, false, 216), "personne", [], "any", false, false, false, 216), "telephone", [], "any", false, false, false, 216), "html", null, true);
            echo "</td>
        
                                        <!-- Table data -->
                                        <td>
                                            
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 224
            echo "                                    <tr><td colspan=\"4\">Empty</td></tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 226
        echo "                            </tbody>
                            <!-- Table body END -->
                        </table>
                    </div>
                    <!-- Table END -->
                </div>
                <!-- Card body END -->
            </div>
        </div>
        <!-- Student review END -->

        <!-- Student review START -->
        <div class=\"col-12\">
            <div class=\"card bg-transparent border\">

                <!-- Card header START -->
                <div class=\"card-header bg-light border-bottom\">
                    <h5 class=\"mb-0\">Students all Reviews</h5>
                </div>
                <!-- Card header END -->
    
                <!-- Card body START -->
                <div class=\"card-body pb-0\">
                    <!-- Table START -->
                    <div class=\"table-responsive border-0\">
                        <table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
                            <!-- Table head -->
                            <thead>
                                <tr>
                                    <th scope=\"col\" class=\"border-0 rounded-start\">Student Name</th>
                                    <th scope=\"col\" class=\"border-0\">Date</th>
                                    <th scope=\"col\" class=\"border-0\">Rating</th>
                                    <th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
                                </tr>
                            </thead>
    
                            <!-- Table body START -->
                            <tbody>
                                ";
        // line 264
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 264, $this->source); })()), "reviews", [], "any", false, false, false, 264));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 265
            echo "                                    <!-- Table row -->
                                    <tr>
                                        <!-- Table data -->
                                        <td>
                                            <div class=\"d-flex align-items-center position-relative\">
                                                <!-- Image -->
                                                <div class=\"avatar avatar-xs mb-2 mb-md-0\">
                                                    <img src=\"";
            // line 272
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["review"], "eleve", [], "any", false, false, false, 272), "utilisateur", [], "any", false, false, false, 272), "personne", [], "any", false, false, false, 272), "avatarPath", [], "any", false, false, false, 272)), "html", null, true);
            echo "\" class=\"rounded-circle\" alt=\"\">
                                                </div>
                                                <div class=\"mb-0 ms-2\">
                                                    <!-- Title -->
                                                    <h6 class=\"mb-0\"><a href=\"#\" class=\"stretched-link\">";
            // line 276
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["review"], "eleve", [], "any", false, false, false, 276), "utilisateur", [], "any", false, false, false, 276), "personne", [], "any", false, false, false, 276), "nomComplet", [], "any", false, false, false, 276)), "truncate", [30, "..."], "method", false, false, false, 276), "html", null, true);
            echo "</a></h6>
                                                </div>
                                            </div>
                                        </td>
        
                                        <!-- Table data -->
                                        <td class=\"text-center text-sm-start\">
                                            <h6 class=\"mb-0\">";
            // line 283
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "createdAt", [], "any", false, false, false, 283), "F jS \\a\\t g:ia"), "html", null, true);
            echo "</h6>
                                        </td>
        
                                        <!-- Table data -->
                                        <td>
                                            <ul class=\"list-inline mb-0\">
                                                ";
            // line 289
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 289)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 290
                echo "                                                    <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 292
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 292) < 5)) {
                // line 293
                echo "                                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 293), 4));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 294
                    echo "                                                        <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 296
                echo "                                                ";
            }
            // line 297
            echo "                                            </ul>
                                        </td>
        
                                        <!-- Table data -->
                                        <td>
                                            <a href=\"#\" class=\"btn btn-sm btn-info-soft mb-0\" data-bs-toggle=\"modal\" data-bs-target=\"#viewReview";
            // line 302
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 302), "html", null, true);
            echo "\">View</a>
                                            <a onclick=\"return confirm ('Are you sure you want to delete these review?')\" href=\"";
            // line 303
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_admin_cours_remove_review", ["id" => twig_get_attribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 303), "_token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 303)))]), "html", null, true);
            echo "\" class=\"btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0\">Delete</a>
                                        </td>
                                    </tr>
                                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 307
            echo "                                    <tr><td colspan=\"4\">Empty</td></tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 309
        echo "                            </tbody>
                            <!-- Table body END -->
                        </table>
                    </div>
                    <!-- Table END -->
                </div>
                <!-- Card body END -->
            </div>
        </div>
        <!-- Student review END -->

    </div> <!-- Row END -->
</div>
<!-- Page main content END -->

";
        // line 324
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 324, $this->source); })()), "reviews", [], "any", false, false, false, 324));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 325
            echo "    <!-- Popup modal for reviwe START -->
    <div class=\"modal fade\" id=\"viewReview";
            // line 326
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 326), "html", null, true);
            echo "\" tabindex=\"-1\" aria-labelledby=\"viewReviewLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <!-- Modal header -->
                <div class=\"modal-header bg-dark\">
                    <h5 class=\"modal-title text-white\" id=\"viewReviewLabel\">Review</h5>
                    <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
                </div>
                <!-- Modal body -->
                <div class=\"modal-body\">
                    <div class=\"d-md-flex\">
                        <!-- Avatar -->
                        <div class=\"avatar avatar-md me-4 flex-shrink-0\">
                            <img class=\"avatar-img rounded-circle\" src=\"";
            // line 339
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["review"], "eleve", [], "any", false, false, false, 339), "utilisateur", [], "any", false, false, false, 339), "personne", [], "any", false, false, false, 339), "avatarPath", [], "any", false, false, false, 339)), "html", null, true);
            echo "\" alt=\"avatar\">
                        </div>
                        <!-- Text -->
                        <div>
                            <div class=\"d-sm-flex mt-1 mt-md-0 align-items-center\">
                                <h5 class=\"me-3 mb-0\">";
            // line 344
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["review"], "eleve", [], "any", false, false, false, 344), "utilisateur", [], "any", false, false, false, 344), "personne", [], "any", false, false, false, 344), "nomComplet", [], "any", false, false, false, 344), "html", null, true);
            echo "</h5>
                                <!-- Review star -->
                                <ul class=\"list-inline mb-0\">
                                    ";
            // line 347
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 347)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 348
                echo "                                        <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 350
            echo "                                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 350) < 5)) {
                // line 351
                echo "                                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 351), 4));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 352
                    echo "                                            <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 354
                echo "                                    ";
            }
            // line 355
            echo "                                </ul>
                            </div>
                            <!-- Info -->
                            <p class=\"small mb-2\">";
            // line 358
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "createdAt", [], "any", false, false, false, 358), "F jS \\a\\t g:ia"), "html", null, true);
            echo "</p>
                            <p class=\"mb-2\">";
            // line 359
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "message", [], "any", false, false, false, 359), "html", null, true);
            echo "</p>
                        </div>\t
                    </div>
                </div>
                <!-- Modal footer -->
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Popup modal for reviwe END --> 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "includes/_course_details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  579 => 359,  575 => 358,  570 => 355,  567 => 354,  560 => 352,  555 => 351,  552 => 350,  545 => 348,  541 => 347,  535 => 344,  527 => 339,  511 => 326,  508 => 325,  504 => 324,  487 => 309,  480 => 307,  471 => 303,  467 => 302,  460 => 297,  457 => 296,  450 => 294,  445 => 293,  442 => 292,  435 => 290,  431 => 289,  422 => 283,  412 => 276,  405 => 272,  396 => 265,  391 => 264,  351 => 226,  344 => 224,  331 => 216,  324 => 212,  314 => 205,  307 => 201,  298 => 194,  293 => 193,  202 => 105,  194 => 100,  186 => 95,  178 => 90,  165 => 80,  157 => 75,  147 => 70,  139 => 65,  121 => 50,  115 => 47,  106 => 41,  100 => 38,  92 => 33,  79 => 23,  63 => 11,  57 => 9,  55 => 8,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Page main content START -->
<div class=\"page-content-wrapper border-0\">

    <!-- Title -->
    <div class=\"row mb-3\">
        <div class=\"col-12 d-sm-flex justify-content-between align-items-center\">
            <h1 class=\"h3 mb-2 mb-sm-0\">{{ course.intitule }}</h1>
            {% if isTeacher is defined and not course.isPublished %}
                <a href=\"{{ url(\"app_instructor_courses_edit\", {slug: course.slug}) }}\" class=\"btn btn-primary mb-0\">Edit Course</a>
            {% endif %}
            <a href=\"{{ url(\"app_instructor_course_forum_index\", {slug: course.slug}) }}\" class=\"btn btn btn-secondary mb-0\">Course Forum</a>
        </div>
    </div>
            
    <div class=\"row g-4\">

        <!-- Course information START -->
        <div class=\"col-xxl-6\">
            <div class=\"card bg-transparent border rounded-3 h-100\">

                <!-- Catd header -->
                <div class=\"card-header bg-light border-bottom\">
                    <h5 class=\"card-header-title\">{{ course.intitule }}</h5>
                </div>

                <!-- Card body START -->
                <div class=\"card-body\">

                    <!-- Course image and info START -->
                    <div class=\"row g-4\">
                        <!-- Course image -->
                        <div class=\"col-md-6\">
                            <img src=\"{{ asset('uploads/media/courses/' ~ course.media.imageFile) }}\" class=\"rounded\" alt=\"\">
                        </div>
                        <!-- Course info and avatar -->
                        <div class=\"col-md-6\">
                            <!-- Info -->
                            <p class=\"mb-3\">{{ course.description|u.truncate(190, '...') }}</p>

                            <!-- Price -->
                            <h5 class=\"mb-3\">{{ course.isFree ? 'Free' : course.montantAbonnement ~ ' XAF' }}</h5>
                            
                            <!-- Avatar -->
                            <div class=\"d-sm-flex align-items-center\">
                                <!-- Avatar image -->
                                <div class=\"avatar avatar-md\">
                                    <img class=\"avatar-img rounded-circle\" src=\"{{ asset(course.enseignant.utilisateur.personne.avatarPath) }}\" alt=\"avatar\">
                                </div>
                                <div class=\"ms-sm-3 mt-2 mt-sm-0\">
                                    <h6 class=\"mb-0\"><a href=\"#\">By {{ course.enseignant.utilisateur.personne.nomComplet }}</a></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Course image and info END -->

                    <!-- Information START -->
                    <div class=\"row mt-3\">

                        <!-- Information item -->
                        <div class=\"col-md-6\">
                            <ul class=\"list-group list-group-borderless\">
                                <li class=\"list-group-item\">
                                    <span>release date:</span>
                                    <span class=\"h6 mb-0\">{{ course.createdAt|date('d/m/Y') }}</span>
                                </li>

                                <li class=\"list-group-item\">
                                    <span>Category:</span>
                                    <span title=\"{{ course.categorie.name }}\" class=\"h6 mb-0\">{{ course.categorie.name|u.truncate(13) }}</span>
                                </li>

                                <li class=\"list-group-item\">
                                    <span>Total Enrolled:</span>
                                    <span class=\"h6 mb-0\">{{ course.eleves|length }}</span>
                                </li>

                                <li class=\"list-group-item\">
                                    <span>Premium:</span>
                                    <span class=\"h6 mb-0\">{{ not course.isFree ? 'Yes' : 'No' }}</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Information item -->
                        <div class=\"col-md-6\">
                            <ul class=\"list-group list-group-borderless\">
                                <li class=\"list-group-item\">
                                    <span>Skills:</span>
                                    <span class=\"h6 mb-0\">{{ course.niveauDifficulte }}</span>
                                </li>

                                <li class=\"list-group-item\">
                                    <span>Total Lecture:</span>
                                    <span class=\"h6 mb-0\">{{ course.numberOfLessons }}</span>
                                </li>

                                <li class=\"list-group-item\">
                                    <span>Language:</span>
                                    <span class=\"h6 mb-0\">{{ course.language }}</span>
                                </li>

                                <li class=\"list-group-item\">
                                    <span>Review:</span>
                                    <span class=\"h6 mb-0\">{{ course.review }}<i class=\"fas fa-star text-warning ms-1\"></i></span>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- Information END -->
                </div>
                <!-- Card body END -->
            </div>
        </div>
        <!-- Course information END -->

        <!-- Chart START -->
        <div class=\"col-xxl-6\">
            <div class=\"row g-4\">

                <!-- Active student START -->
                <div class=\"col-md-6 col-xxl-12\">
                    <div class=\"card bg-transparent border overflow-hidden\">
                        <!-- Card header -->
                        <div class=\"card-header bg-light border-bottom\">
                            <h5 class=\"card-header-title mb-0\">Total course earning</h5>
                        </div>
                        <!-- Card body -->
                        <div class=\"card-body p-0\">
                            <div class=\"d-sm-flex justify-content-between p-4\">
                                <h4 class=\"text-blue mb-0\">\$12,586</h4>
                                <p class=\"mb-0\"><span class=\"text-success me-1\">0.20%<i class=\"bi bi-arrow-up\"></i></span>vs last Week</p>
                            </div>
                            <!-- Apex chart -->
                            <div id=\"activeChartstudent\"></div>
                        </div>
                    </div>
                </div>
                <!-- Active student END -->

                <!-- Enrolled START -->
                <div class=\"col-md-6 col-xxl-12\">
                    <div class=\"card bg-transparent border overflow-hidden\">
                        <!-- Card header -->
                        <div class=\"card-header bg-light border-bottom\">
                            <h5 class=\"card-header-title mb-0\">New Enrollment This Month</h5>
                        </div>
                        <!-- Card body -->
                        <div class=\"card-body p-0\">
                            <div class=\"d-sm-flex justify-content-between p-4\">
                                <h4 class=\"text-blue mb-0\">186</h4>
                                <p class=\"mb-0\"><span class=\"text-success me-1\">0.35%<i class=\"bi bi-arrow-up\"></i></span>vs last Week</p>
                            </div>
                            <!-- Apex chart -->
                            <div id=\"activeChartstudent2\"></div>
                        </div>
                    </div>
                </div>
                <!-- Enrolled END -->

            </div>
        </div>
        <!-- Chart END -->

        <!-- Student review START -->
        <div class=\"col-12\">
            <div class=\"card bg-transparent border\">

                <!-- Card header START -->
                <div class=\"card-header bg-light border-bottom\">
                    <h5 class=\"mb-0\">Students List</h5>
                </div>
                <!-- Card header END -->
    
                <!-- Card body START -->
                <div class=\"card-body pb-0\">
                    <!-- Table START -->
                    <div class=\"table-responsive border-0\">
                        <table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
                            <!-- Table head -->
                            <thead>
                                <tr>
                                    <th scope=\"col\" class=\"border-0 rounded-start\">Student Name</th>
                                    <th scope=\"col\" class=\"border-0\">Email</th>
                                    <th scope=\"col\" class=\"border-0\">Phone Number</th>
                                    <th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
                                </tr>
                            </thead>
    
                            <!-- Table body START -->
                            <tbody>
                                {% for eleve in course.eleves %}
                                    <!-- Table row -->
                                    <tr>
                                        <!-- Table data -->
                                        <td>
                                            <div class=\"d-flex align-items-center position-relative\">
                                                <!-- Image -->
                                                <div class=\"avatar avatar-xs mb-2 mb-md-0\">
                                                    <img src=\"{{ asset(eleve.utilisateur.personne.avatarPath) }}\" class=\"rounded-circle\" alt=\"\">
                                                </div>
                                                <div class=\"mb-0 ms-2\">
                                                    <!-- Title -->
                                                    <h6 class=\"mb-0\"><a href=\"#\" class=\"stretched-link\">{{ eleve.utilisateur.personne.nomComplet|u.truncate(30, '...') }}</a></h6>
                                                </div>
                                            </div>
                                        </td>
        
                                        <!-- Table data -->
                                        <td class=\"text-center text-sm-start\">
                                            <h6 class=\"mb-0\">{{ eleve.utilisateur.email }}</h6>
                                        </td>
        
                                        <!-- Table data -->
                                        <td>{{ eleve.utilisateur.personne.telephone }}</td>
        
                                        <!-- Table data -->
                                        <td>
                                            
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr><td colspan=\"4\">Empty</td></tr>
                                {% endfor %}
                            </tbody>
                            <!-- Table body END -->
                        </table>
                    </div>
                    <!-- Table END -->
                </div>
                <!-- Card body END -->
            </div>
        </div>
        <!-- Student review END -->

        <!-- Student review START -->
        <div class=\"col-12\">
            <div class=\"card bg-transparent border\">

                <!-- Card header START -->
                <div class=\"card-header bg-light border-bottom\">
                    <h5 class=\"mb-0\">Students all Reviews</h5>
                </div>
                <!-- Card header END -->
    
                <!-- Card body START -->
                <div class=\"card-body pb-0\">
                    <!-- Table START -->
                    <div class=\"table-responsive border-0\">
                        <table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
                            <!-- Table head -->
                            <thead>
                                <tr>
                                    <th scope=\"col\" class=\"border-0 rounded-start\">Student Name</th>
                                    <th scope=\"col\" class=\"border-0\">Date</th>
                                    <th scope=\"col\" class=\"border-0\">Rating</th>
                                    <th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
                                </tr>
                            </thead>
    
                            <!-- Table body START -->
                            <tbody>
                                {% for review in course.reviews %}
                                    <!-- Table row -->
                                    <tr>
                                        <!-- Table data -->
                                        <td>
                                            <div class=\"d-flex align-items-center position-relative\">
                                                <!-- Image -->
                                                <div class=\"avatar avatar-xs mb-2 mb-md-0\">
                                                    <img src=\"{{ asset(review.eleve.utilisateur.personne.avatarPath) }}\" class=\"rounded-circle\" alt=\"\">
                                                </div>
                                                <div class=\"mb-0 ms-2\">
                                                    <!-- Title -->
                                                    <h6 class=\"mb-0\"><a href=\"#\" class=\"stretched-link\">{{ review.eleve.utilisateur.personne.nomComplet|u.truncate(30, '...') }}</a></h6>
                                                </div>
                                            </div>
                                        </td>
        
                                        <!-- Table data -->
                                        <td class=\"text-center text-sm-start\">
                                            <h6 class=\"mb-0\">{{ review.createdAt|date(\"F jS \\\\a\\\\t g:ia\") }}</h6>
                                        </td>
        
                                        <!-- Table data -->
                                        <td>
                                            <ul class=\"list-inline mb-0\">
                                                {% for i in 1..review.rating %}
                                                    <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                                {% endfor %}
                                                {% if review.rating < 5 %}
                                                    {% for i in review.rating..4 %}
                                                        <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                                                    {% endfor %}
                                                {% endif %}
                                            </ul>
                                        </td>
        
                                        <!-- Table data -->
                                        <td>
                                            <a href=\"#\" class=\"btn btn-sm btn-info-soft mb-0\" data-bs-toggle=\"modal\" data-bs-target=\"#viewReview{{ review.id }}\">View</a>
                                            <a onclick=\"return confirm ('Are you sure you want to delete these review?')\" href=\"{{ url(\"app_admin_cours_remove_review\", {id: review.id, '_token': csrf_token('delete' ~ review.id)}) }}\" class=\"btn btn-sm btn-danger-soft me-1 mb-1 mb-md-0\">Delete</a>
                                        </td>
                                    </tr>
                                {% else %}
                                    <tr><td colspan=\"4\">Empty</td></tr>
                                {% endfor %}
                            </tbody>
                            <!-- Table body END -->
                        </table>
                    </div>
                    <!-- Table END -->
                </div>
                <!-- Card body END -->
            </div>
        </div>
        <!-- Student review END -->

    </div> <!-- Row END -->
</div>
<!-- Page main content END -->

{% for review in course.reviews %}
    <!-- Popup modal for reviwe START -->
    <div class=\"modal fade\" id=\"viewReview{{ review.id }}\" tabindex=\"-1\" aria-labelledby=\"viewReviewLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-dialog-centered\">
            <div class=\"modal-content\">
                <!-- Modal header -->
                <div class=\"modal-header bg-dark\">
                    <h5 class=\"modal-title text-white\" id=\"viewReviewLabel\">Review</h5>
                    <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
                </div>
                <!-- Modal body -->
                <div class=\"modal-body\">
                    <div class=\"d-md-flex\">
                        <!-- Avatar -->
                        <div class=\"avatar avatar-md me-4 flex-shrink-0\">
                            <img class=\"avatar-img rounded-circle\" src=\"{{ asset(review.eleve.utilisateur.personne.avatarPath) }}\" alt=\"avatar\">
                        </div>
                        <!-- Text -->
                        <div>
                            <div class=\"d-sm-flex mt-1 mt-md-0 align-items-center\">
                                <h5 class=\"me-3 mb-0\">{{ review.eleve.utilisateur.personne.nomComplet }}</h5>
                                <!-- Review star -->
                                <ul class=\"list-inline mb-0\">
                                    {% for i in 1..review.rating %}
                                        <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                                    {% endfor %}
                                    {% if review.rating < 5 %}
                                        {% for i in review.rating..4 %}
                                            <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                                        {% endfor %}
                                    {% endif %}
                                </ul>
                            </div>
                            <!-- Info -->
                            <p class=\"small mb-2\">{{ review.createdAt|date(\"F jS \\\\a\\\\t g:ia\") }}</p>
                            <p class=\"mb-2\">{{ review.message }}</p>
                        </div>\t
                    </div>
                </div>
                <!-- Modal footer -->
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Popup modal for reviwe END --> 
{% endfor %}", "includes/_course_details.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\includes\\_course_details.html.twig");
    }
}
