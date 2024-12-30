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

/* front/forum/index.html.twig */
class __TwigTemplate_3ac15503eebb477306872d4049cb23be extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/forum/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/forum/index.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/forum/index.html.twig", 1);
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

        echo " - Forum";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_mainBarnner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainBarnner"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainBarnner"));

        // line 6
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_mainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        // line 10
        echo "
    <section class=\"bg-light py-5\">
        <div class=\"container\">
            <div class=\"row g-4 g-md-5 position-relative\">
                <!-- SVG decoration -->
                <figure class=\"position-absolute top-0 start-0 d-none d-sm-block\">
                    <svg width=\"22px\" height=\"22px\" viewBox=\"0 0 22 22\">
                        <polygon class=\"fill-purple\" points=\"22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 \"></polygon>
                    </svg>
                </figure>

                <!-- Title and Search -->
                <div class=\"col-lg-10 mx-auto text-center position-relative\">
                    <!-- SVG decoration -->
                    <figure class=\"position-absolute top-50 end-0 translate-middle-y\">
                        <svg width=\"27px\" height=\"27px\">
                            <path class=\"fill-orange\" d=\"M13.122,5.946 L17.679,-0.001 L17.404,7.528 L24.661,5.946 L19.683,11.533 L26.244,15.056 L18.891,16.089 L21.686,23.068 L15.400,19.062 L13.122,26.232 L10.843,19.062 L4.557,23.068 L7.352,16.089 L-0.000,15.056 L6.561,11.533 L1.582,5.946 L8.839,7.528 L8.565,-0.001 L13.122,5.946 Z\"></path>
                        </svg>
                    </figure>
                    <!-- Title -->
                    <h1 class=\"display-6\">";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("HELLOHELP_KEY", [], "messages");
        echo "</h1>
                    <!-- Search bar -->
                    <div class=\"col-lg-8 mx-auto text-center mt-4\">
                        <form action=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_forum_index");
        echo "\" method=\"get\" class=\"bg-body shadow rounded p-2\">
                            <div class=\"input-group\">
                                <input class=\"form-control border-0 me-1\" type=\"text\" name=\"search\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, ((array_key_exists("search", $context)) ? (_twig_default_filter((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 35, $this->source); })()), "")) : ("")), "html", null, true);
        echo "\" placeholder=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SEARCH_KEY", [], "messages");
        echo "...\">
                                <button type=\"submit\" class=\"btn btn-blue mb-0 rounded\">";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SUBMIT_KEY", [], "messages");
        echo "</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Category START -->
                <div class=\"col-12\">
                    <div class=\"row g-4 text-center\">
                        <p class=\"mb-0\">";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CHOOSECATEGORYHELP_KEY", [], "messages");
        echo "</p>
                        <!-- Category item -->
                        <div class=\"col-sm-6 col-md-3\">
                            <div class=\"card card-body card-border-hover p-0\">
                                <a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_terms");
        echo "\" class=\"p-3\">
                                    <h2><i class=\"fas fa-street-view transition-base\"></i></h2>
                                    <h6 class=\"mb-0\">";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("TERMSANDCONDITIONS_KEY", [], "messages");
        echo "</h6>
                                </a>
                            </div>
                        </div>

                        <!-- Category item -->
                        <div class=\"col-sm-6 col-md-3\">
                            <div class=\"card card-body card-border-hover p-0\">
                                <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_contact");
        echo "\" class=\"p-3\">
                                    <h2><i class=\"fas fa-hands-helping transition-base\"></i></h2>
                                    <h6 class=\"mb-0\">";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ASSISTANCE_KEY", [], "messages");
        echo "</h6>
                                </a>
                            </div>
                        </div>

                        <!-- Category item -->
                        <div class=\"col-sm-6 col-md-3\">
                            <div class=\"card card-body card-border-hover p-0\">
                                <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_terms");
        echo "\" class=\"p-3\">
                                    <h2><i class=\"fas fa-exclamation-circle transition-base\"></i></h2>
                                    <h6 class=\"mb-0\">";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("GENERAL_GUIDE_KEY", [], "messages");
        echo "</h6>
                                </a>
                            </div>
                        </div>

                        <!-- Category item -->
                        <div class=\"col-sm-6 col-md-3\">
                            <div class=\"card card-body card-border-hover p-0\">
                                <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_courses");
        echo "\" class=\"p-3\">
                                    <h2><i class=\"fas fa-flag transition-base\"></i></h2>
                                    <h6 class=\"mb-0\">";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("GETINGSTARTED_KEY", [], "messages");
        echo "</h6>
                                </a>
                            </div>
                        </div>
                    </div> <!-- Row END -->
                </div>
                <!-- Category END -->
            </div>
        </div>
    </section>

    <!-- =======================
    Page content START -->
    <section class=\"pt-5 pb-0 pb-lg-5\">
        <div class=\"container\">

            <div class=\"row g-4 g-md-5\">
                <!-- Main content START -->
                <div class=\"col-lg-8\">
                    <!-- Title -->
                    <h3 class=\"mb-4\">";
        // line 101
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("TOPICSLIST_KEY", [], "messages");
        echo "</h3>

                    <!-- FAQ START -->
                    <ul class=\"list-unstyled\">
                        ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 105, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sujet"]) {
            // line 106
            echo "                            <li>
                                <a href=\"";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_course_forum_subject_message", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sujet"], "forum", [], "any", false, false, false, 107), "cours", [], "any", false, false, false, 107), "slug", [], "any", false, false, false, 107), "reference" => twig_get_attribute($this->env, $this->source, $context["sujet"], "reference", [], "any", false, false, false, 107)]), "html", null, true);
            echo "\" class=\"d-flex mb-4 mt-3\">
                                    <div class=\"avatar avatar-xl flex-shrink-0 me-2\">
                                        <img class=\"avatar-img rounded-circle\" src=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sujet"], "membre", [], "any", false, false, false, 109), "utilisateur", [], "any", false, false, false, 109), "personne", [], "any", false, false, false, 109), "avatarPath", [], "any", false, false, false, 109)), "html", null, true);
            echo "\" alt=\"\">
                                    </div>

                                    <div class=\"w-100 d-flex\">
                                        <p>
                                            ";
            // line 114
            echo twig_get_attribute($this->env, $this->source, $context["sujet"], "content", [], "any", false, false, false, 114);
            echo "
                                            <br>
                                            <span class=\"badge ";
            // line 116
            echo ((twig_get_attribute($this->env, $this->source, $context["sujet"], "isSolved", [], "any", false, false, false, 116)) ? ("btn-success-soft") : ("btn-danger-soft"));
            echo "\">";
            echo ((twig_get_attribute($this->env, $this->source, $context["sujet"], "isSolved", [], "any", false, false, false, 116)) ? ("Resolved") : ("Unresolved"));
            echo "</span> |
                                            <i class=\"badge btn-info-soft\">";
            // line 117
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sujet"], "createdAt", [], "any", false, false, false, 117), "d M, Y - H:i:s"), "html", null, true);
            echo "</i>
                                            | <span class=\"badge btn-warning-soft\">";
            // line 118
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sujet"], "forumMessages", [], "any", false, false, false, 118)), "html", null, true);
            echo " comments</span>
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <hr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 125
            echo "                            <li>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("NOTOPICFOUND_KEY", [], "messages");
            echo "</li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sujet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "
                    </ul>
                    <!-- FAQ END -->
                    <div class=\"col-12\">
                        <div class=\"pagination-container\">
                            ";
        // line 132
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["subjects"]) || array_key_exists("subjects", $context) ? $context["subjects"] : (function () { throw new RuntimeError('Variable "subjects" does not exist.', 132, $this->source); })()));
        echo "
                        </div>
                    </div>
                </div>
                <!-- Main content END -->

                <!-- Right sidebar START -->
                <div class=\"col-lg-4\">
                    <div class=\"row mb-5 mb-lg-0\">
                        <div class=\"col-12 col-sm-6 col-lg-12\">

                            <!-- Related Topic START -->
                            <div class=\"card card-body shadow p-4 mb-4\">
                                <!-- Title -->
                                <h4 class=\"mb-3\">";
        // line 146
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("RELATEDTOPIC_KEY", [], "messages");
        echo "</h4>
                                ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 147, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 148
            echo "                                    <!-- Item -->
                                    <div class=\"d-flex justify-content-between align-items-center mb-2\">
                                        <a href=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_forum_index_category", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 150)]), "html", null, true);
            echo "\" class=\"h6 fw-light\"><i class=\"fas fa-caret-right text-orange me-2\"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 150), "html", null, true);
            echo "</a>
                                        ";
            // line 151
            $context["nb"] = 0;
            // line 152
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "cours", [], "any", false, false, false, 152));
            foreach ($context['_seq'] as $context["_key"] => $context["cours"]) {
                // line 153
                echo "                                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["cours"], "isValidated", [], "any", false, false, false, 153) &&  !(twig_get_attribute($this->env, $this->source, $context["cours"], "forum", [], "any", false, false, false, 153) === null))) {
                    // line 154
                    echo "                                                ";
                    $context["nb"] = ((isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 154, $this->source); })()) + twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["cours"], "forum", [], "any", false, false, false, 154), "sujets", [], "any", false, false, false, 154)));
                    // line 155
                    echo "                                            ";
                }
                // line 156
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cours'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            echo "                                        <span class=\"small\">(";
            echo twig_escape_filter($this->env, (isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 157, $this->source); })()), "html", null, true);
            echo ")</span>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 160
        echo "                            </div>
                            <!-- Related Topic END -->
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
        return "front/forum/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 160,  372 => 157,  366 => 156,  363 => 155,  360 => 154,  357 => 153,  352 => 152,  350 => 151,  344 => 150,  340 => 148,  336 => 147,  332 => 146,  315 => 132,  308 => 127,  299 => 125,  287 => 118,  283 => 117,  277 => 116,  272 => 114,  264 => 109,  259 => 107,  256 => 106,  251 => 105,  244 => 101,  221 => 81,  216 => 79,  205 => 71,  200 => 69,  189 => 61,  184 => 59,  173 => 51,  168 => 49,  161 => 45,  149 => 36,  143 => 35,  138 => 33,  132 => 30,  110 => 10,  100 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"front/base.html.twig\" %}

{% block title %} - Forum{% endblock %}

{% block mainBarnner %}

{% endblock %}

{% block mainContent %}

    <section class=\"bg-light py-5\">
        <div class=\"container\">
            <div class=\"row g-4 g-md-5 position-relative\">
                <!-- SVG decoration -->
                <figure class=\"position-absolute top-0 start-0 d-none d-sm-block\">
                    <svg width=\"22px\" height=\"22px\" viewBox=\"0 0 22 22\">
                        <polygon class=\"fill-purple\" points=\"22,8.3 13.7,8.3 13.7,0 8.3,0 8.3,8.3 0,8.3 0,13.7 8.3,13.7 8.3,22 13.7,22 13.7,13.7 22,13.7 \"></polygon>
                    </svg>
                </figure>

                <!-- Title and Search -->
                <div class=\"col-lg-10 mx-auto text-center position-relative\">
                    <!-- SVG decoration -->
                    <figure class=\"position-absolute top-50 end-0 translate-middle-y\">
                        <svg width=\"27px\" height=\"27px\">
                            <path class=\"fill-orange\" d=\"M13.122,5.946 L17.679,-0.001 L17.404,7.528 L24.661,5.946 L19.683,11.533 L26.244,15.056 L18.891,16.089 L21.686,23.068 L15.400,19.062 L13.122,26.232 L10.843,19.062 L4.557,23.068 L7.352,16.089 L-0.000,15.056 L6.561,11.533 L1.582,5.946 L8.839,7.528 L8.565,-0.001 L13.122,5.946 Z\"></path>
                        </svg>
                    </figure>
                    <!-- Title -->
                    <h1 class=\"display-6\">{% trans %}HELLOHELP_KEY{% endtrans %}</h1>
                    <!-- Search bar -->
                    <div class=\"col-lg-8 mx-auto text-center mt-4\">
                        <form action=\"{{ url('app_front_forum_index') }}\" method=\"get\" class=\"bg-body shadow rounded p-2\">
                            <div class=\"input-group\">
                                <input class=\"form-control border-0 me-1\" type=\"text\" name=\"search\" value=\"{{ search|default('') }}\" placeholder=\"{% trans %}SEARCH_KEY{% endtrans %}...\">
                                <button type=\"submit\" class=\"btn btn-blue mb-0 rounded\">{% trans %}SUBMIT_KEY{% endtrans %}</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Category START -->
                <div class=\"col-12\">
                    <div class=\"row g-4 text-center\">
                        <p class=\"mb-0\">{% trans %}CHOOSECATEGORYHELP_KEY{% endtrans %}</p>
                        <!-- Category item -->
                        <div class=\"col-sm-6 col-md-3\">
                            <div class=\"card card-body card-border-hover p-0\">
                                <a href=\"{{ url('app_terms') }}\" class=\"p-3\">
                                    <h2><i class=\"fas fa-street-view transition-base\"></i></h2>
                                    <h6 class=\"mb-0\">{% trans %}TERMSANDCONDITIONS_KEY{% endtrans %}</h6>
                                </a>
                            </div>
                        </div>

                        <!-- Category item -->
                        <div class=\"col-sm-6 col-md-3\">
                            <div class=\"card card-body card-border-hover p-0\">
                                <a href=\"{{ url('app_front_contact') }}\" class=\"p-3\">
                                    <h2><i class=\"fas fa-hands-helping transition-base\"></i></h2>
                                    <h6 class=\"mb-0\">{% trans %}ASSISTANCE_KEY{% endtrans %}</h6>
                                </a>
                            </div>
                        </div>

                        <!-- Category item -->
                        <div class=\"col-sm-6 col-md-3\">
                            <div class=\"card card-body card-border-hover p-0\">
                                <a href=\"{{ url('app_terms') }}\" class=\"p-3\">
                                    <h2><i class=\"fas fa-exclamation-circle transition-base\"></i></h2>
                                    <h6 class=\"mb-0\">{% trans %}GENERAL_GUIDE_KEY{% endtrans %}</h6>
                                </a>
                            </div>
                        </div>

                        <!-- Category item -->
                        <div class=\"col-sm-6 col-md-3\">
                            <div class=\"card card-body card-border-hover p-0\">
                                <a href=\"{{ url('app_front_courses') }}\" class=\"p-3\">
                                    <h2><i class=\"fas fa-flag transition-base\"></i></h2>
                                    <h6 class=\"mb-0\">{% trans %}GETINGSTARTED_KEY{% endtrans %}</h6>
                                </a>
                            </div>
                        </div>
                    </div> <!-- Row END -->
                </div>
                <!-- Category END -->
            </div>
        </div>
    </section>

    <!-- =======================
    Page content START -->
    <section class=\"pt-5 pb-0 pb-lg-5\">
        <div class=\"container\">

            <div class=\"row g-4 g-md-5\">
                <!-- Main content START -->
                <div class=\"col-lg-8\">
                    <!-- Title -->
                    <h3 class=\"mb-4\">{% trans %}TOPICSLIST_KEY{% endtrans %}</h3>

                    <!-- FAQ START -->
                    <ul class=\"list-unstyled\">
                        {% for sujet in subjects%}
                            <li>
                                <a href=\"{{ url(\"app_front_course_forum_subject_message\", {slug: sujet.forum.cours.slug, reference: sujet.reference}) }}\" class=\"d-flex mb-4 mt-3\">
                                    <div class=\"avatar avatar-xl flex-shrink-0 me-2\">
                                        <img class=\"avatar-img rounded-circle\" src=\"{{ asset(sujet.membre.utilisateur.personne.avatarPath) }}\" alt=\"\">
                                    </div>

                                    <div class=\"w-100 d-flex\">
                                        <p>
                                            {{ sujet.content|raw }}
                                            <br>
                                            <span class=\"badge {{ sujet.isSolved ? \"btn-success-soft\" : 'btn-danger-soft' }}\">{{ sujet.isSolved ? \"Resolved\" : \"Unresolved\" }}</span> |
                                            <i class=\"badge btn-info-soft\">{{ sujet.createdAt|date('d M, Y - H:i:s') }}</i>
                                            | <span class=\"badge btn-warning-soft\">{{ sujet.forumMessages|length }} comments</span>
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <hr>
                        {% else %}
                            <li>{% trans %}NOTOPICFOUND_KEY{% endtrans %}</li>
                        {% endfor %}

                    </ul>
                    <!-- FAQ END -->
                    <div class=\"col-12\">
                        <div class=\"pagination-container\">
                            {{ knp_pagination_render(subjects) }}
                        </div>
                    </div>
                </div>
                <!-- Main content END -->

                <!-- Right sidebar START -->
                <div class=\"col-lg-4\">
                    <div class=\"row mb-5 mb-lg-0\">
                        <div class=\"col-12 col-sm-6 col-lg-12\">

                            <!-- Related Topic START -->
                            <div class=\"card card-body shadow p-4 mb-4\">
                                <!-- Title -->
                                <h4 class=\"mb-3\">{% trans %}RELATEDTOPIC_KEY{% endtrans %}</h4>
                                {% for category in categories %}
                                    <!-- Item -->
                                    <div class=\"d-flex justify-content-between align-items-center mb-2\">
                                        <a href=\"{{ url('app_front_forum_index_category', {slug: category.slug}) }}\" class=\"h6 fw-light\"><i class=\"fas fa-caret-right text-orange me-2\"></i>{{ category.name }}</a>
                                        {% set nb = 0 %}
                                        {% for cours in category.cours %}
                                            {% if cours.isValidated and cours.forum is not same as null %}
                                                {% set nb = nb + cours.forum.sujets|length %}
                                            {% endif %}
                                        {% endfor %}
                                        <span class=\"small\">({{ nb }})</span>
                                    </div>
                                {% endfor %}
                            </div>
                            <!-- Related Topic END -->
                        </div>
                    </div><!-- Row End -->
                </div>
                <!-- Right sidebar END -->
            </div><!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Page content END -->

{% endblock %}", "front/forum/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\forum\\index.html.twig");
    }
}
