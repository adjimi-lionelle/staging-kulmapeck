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

/* admin/forum_message/index.html.twig */
class __TwigTemplate_0447653254b9a22cea8f6ae9fb6bcaa9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/forum_message/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/forum_message/index.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/forum_message/index.html.twig", 1);
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

        echo "Forum";
        
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
    <div class=\"card shadow rounded-2 p-0\">
        <!-- Tab contents START -->
        <div class=\"card-body p-4\">
            <div  class=\"d-flex mb-4 mt-3\">
                <div class=\"avatar avatar-lg flex-shrink-0 me-2\">
                    <a href=\"#\"> <img class=\"avatar-img rounded-circle\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 12, $this->source); })()), "membre", [], "any", false, false, false, 12), "utilisateur", [], "any", false, false, false, 12), "personne", [], "any", false, false, false, 12), "avatarPath", [], "any", false, false, false, 12)), "html", null, true);
        echo "\" alt=\"\"> </a>
                </div>

                <div class=\"w-100 d-flex\">
                    <div>
                        <h6>
                            By ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 18, $this->source); })()), "membre", [], "any", false, false, false, 18), "utilisateur", [], "any", false, false, false, 18), "personne", [], "any", false, false, false, 18), "pseudo", [], "any", false, false, false, 18), "html", null, true);
        echo "
                            <span class=\"badge btn-info-soft\">";
        // line 19
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 19, $this->source); })()), "createdAt", [], "any", false, false, false, 19), "d/m/Y - H:i:s"), "html", null, true);
        echo "</span>
                            <span class=\"badge ";
        // line 20
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 20, $this->source); })()), "isSolved", [], "any", false, false, false, 20)) ? ("btn-success-soft") : ("btn-danger-soft"));
        echo "\">";
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 20, $this->source); })()), "isSolved", [], "any", false, false, false, 20)) ? ("Resolved") : ("Unresolved"));
        echo "</span> 

                        </h6>
                        ";
        // line 23
        echo twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 23, $this->source); })()), "content", [], "any", false, false, false, 23);
        echo "
                    </div>
                </div>
            </div>
            <hr>

            <div class=\"custom-scrollbar h-500px overflow-hidden\">

                <ul class=\"list-unstyled mb-0\">
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 32, $this->source); })()), "forumMessages", [], "any", false, false, false, 32));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 33
            echo "                        ";
            if ( !twig_get_attribute($this->env, $this->source, $context["message"], "isAnswer", [], "any", false, false, false, 33)) {
                // line 34
                echo "                            <li class=\"comment-item\" id=\"item-comment-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 34), "html", null, true);
                echo "\">
                                <div class=\"d-flex mb-3\">
                                    <!-- Avatar -->
                                    <div class=\"avatar avatar-sm flex-shrink-0\">
                                        <a href=\"#\"><img class=\"avatar-img rounded-circle\" src=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "membre", [], "any", false, false, false, 38), "utilisateur", [], "any", false, false, false, 38), "personne", [], "any", false, false, false, 38), "avatarPath", [], "any", false, false, false, 38)), "html", null, true);
                echo "\" alt=\"\"></a>
                                    </div>
                                    <div class=\"ms-2\">
                                        <!-- Comment by -->
                                        <div class=\"bg-light p-3 rounded\">
                                            <div class=\"d-flex justify-content-center\">
                                                <div class=\"me-2\">
                                                    <h6 class=\"mb-1 lead fw-bold\"> <a href=\"#!\"> ";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "membre", [], "any", false, false, false, 45), "utilisateur", [], "any", false, false, false, 45), "personne", [], "any", false, false, false, 45), "pseudo", [], "any", false, false, false, 45), "html", null, true);
                echo "</a></h6>
                                                    <p class=\"h6 mb-0\">";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 46), "html", null, true);
                echo "</p>
                                                </div>
                                                <small>";
                // line 48
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 48), "d/m/Y - H:i:s"), "html", null, true);
                echo "</small>
                                            </div>
                                        </div>
                                        <!-- Comment react -->
                                        <ul class=\"nav nav-divider py-2 small\">
                                            <li class=\"nav-item\"> <a class=\"text-primary-hover ";
                // line 53
                echo ((((isset($context["heIsMembre"]) || array_key_exists("heIsMembre", $context) ? $context["heIsMembre"] : (function () { throw new RuntimeError('Variable "heIsMembre" does not exist.', 53, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 53, $this->source); })()), "isSolved", [], "any", false, false, false, 53))) ? ("like-forum-message") : (""));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, ((((isset($context["heIsMembre"]) || array_key_exists("heIsMembre", $context) ? $context["heIsMembre"] : (function () { throw new RuntimeError('Variable "heIsMembre" does not exist.', 53, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 53, $this->source); })()), "isSolved", [], "any", false, false, false, 53))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_course_like_forum_message", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 53)])) : (("#item-comment-" . twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 53)))), "html", null, true);
                echo "\"><i class=\"fas fa-thumbs-up\"></i> Like (<span class=\"nb-likes\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "likes", [], "any", false, false, false, 53), "html", null, true);
                echo "</span>)</a> </li>
                                            ";
                // line 54
                if (( !twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 54, $this->source); })()), "isSolved", [], "any", false, false, false, 54) &&  !((isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 54, $this->source); })()) === null))) {
                    // line 55
                    echo "                                                <li class=\"nav-item\"> <a class=\"text-primary-hover ";
                    echo ((((isset($context["heIsMembre"]) || array_key_exists("heIsMembre", $context) ? $context["heIsMembre"] : (function () { throw new RuntimeError('Variable "heIsMembre" does not exist.', 55, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 55, $this->source); })()), "isSolved", [], "any", false, false, false, 55))) ? ("reply-forum-message") : (""));
                    echo "\" data-forum-message=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 55), "html", null, true);
                    echo "\" data-membre=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 55, $this->source); })()), "id", [], "any", false, false, false, 55), "html", null, true);
                    echo "\" data-append-response=\"#reply-forum-message-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 55), "html", null, true);
                    echo "\" ";
                    echo ((((isset($context["heIsMembre"]) || array_key_exists("heIsMembre", $context) ? $context["heIsMembre"] : (function () { throw new RuntimeError('Variable "heIsMembre" does not exist.', 55, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 55, $this->source); })()), "isSolved", [], "any", false, false, false, 55))) ? ("data-bs-toggle=\"modal\" data-bs-target=\"#replyForumMessage\"") : (""));
                    echo " href=\"#\"><i class=\"fas fa-reply\"></i> Reply</a> </li>
                                                ";
                    // line 56
                    if (((isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 56, $this->source); })()) === twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 56, $this->source); })()), "membre", [], "any", false, false, false, 56))) {
                        // line 57
                        echo "                                                    <li class=\"nav-item\"> <a onclick=\"return confirm('Are you sure that you want to set these response as the top response that solved your problem ?')\" data-bs-toggle=\"tooltip\" title=\"Resolved by these post\" class=\"text-primary-hover text-success\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_course_solve_forum_message", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                        echo "\"><i class=\"fas fa-check\"></i> Resolved</a> </li>
                                                ";
                    }
                    // line 59
                    echo "                                                ";
                    if ((((isset($context["heIsMembre"]) || array_key_exists("heIsMembre", $context) ? $context["heIsMembre"] : (function () { throw new RuntimeError('Variable "heIsMembre" does not exist.', 59, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 59, $this->source); })()), "isSolved", [], "any", false, false, false, 59)) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 59, $this->source); })()), "utilisateur", [], "any", false, false, false, 59), "eleve", [], "any", false, false, false, 59) === null) || (twig_get_attribute($this->env, $this->source, $context["message"], "membre", [], "any", false, false, false, 59) === (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 59, $this->source); })()))))) {
                        // line 60
                        echo "                                                    <li class=\"nav-item\"> 
                                                        <a onclick=\"return confirm('Are you sure you want to remov this item?')\" class=\"text-primary-hover text-danger\" href=\"";
                        // line 61
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_instructor_course_forum_subject_delete_message", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 61), "_token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 61)))]), "html", null, true);
                        echo "\"><i class=\"fas fa-trash\"></i> Remove</a> 
                                                    </li>
                                                ";
                    }
                    // line 64
                    echo "                                            ";
                }
                // line 65
                echo "                                        </ul>
                                    </div>
                                </div>
                                    <!-- Comment item nested START -->
                                    <ul class=\"list-unstyled ms-4\" id=\"reply-forum-message-";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 69), "html", null, true);
                echo "\">
                                        ";
                // line 70
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "forumMessages", [], "any", false, false, false, 70)) > 0)) {
                    // line 71
                    echo "                                            <!-- Comment item START -->
                                            ";
                    // line 72
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["message"], "forumMessages", [], "any", false, false, false, 72));
                    foreach ($context['_seq'] as $context["_key"] => $context["fm"]) {
                        // line 73
                        echo "                                                <li class=\"comment-item\" id=\"item-comment-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fm"], "id", [], "any", false, false, false, 73), "html", null, true);
                        echo "\">
                                                    <div class=\"d-flex\">
                                                        <!-- Avatar -->
                                                        <div class=\"avatar avatar-xs flex-shrink-0\">
                                                            <a href=\"#\"><img class=\"avatar-img rounded-circle\" src=\"";
                        // line 77
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fm"], "membre", [], "any", false, false, false, 77), "utilisateur", [], "any", false, false, false, 77), "personne", [], "any", false, false, false, 77), "avatarPath", [], "any", false, false, false, 77)), "html", null, true);
                        echo "\" alt=\"\"></a>
                                                        </div>
                                                        <!-- Comment by -->
                                                        <div class=\"ms-2\">
                                                            <div class=\"bg-light p-3 rounded\">
                                                                <div class=\"d-flex justify-content-center\">
                                                                    <div class=\"me-2\">
                                                                        <h6 class=\"mb-1  lead fw-bold\"> <a href=\"#\"> ";
                        // line 84
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fm"], "membre", [], "any", false, false, false, 84), "utilisateur", [], "any", false, false, false, 84), "personne", [], "any", false, false, false, 84), "pseudo", [], "any", false, false, false, 84), "html", null, true);
                        echo " </a> </h6>
                                                                        <p class=\" mb-0\">";
                        // line 85
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fm"], "content", [], "any", false, false, false, 85), "html", null, true);
                        echo "</p>
                                                                    </div>
                                                                    <small>";
                        // line 87
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fm"], "createdAt", [], "any", false, false, false, 87), "d/m/Y - H:i:s"), "html", null, true);
                        echo "</small>
                                                                </div>
                                                            </div>
                                                            <!-- Comment react -->
                                                            <ul class=\"nav nav-divider py-2 small\">
                                                                <li class=\"nav-item\"> <a class=\"text-primary-hover ";
                        // line 92
                        echo ((((isset($context["heIsMembre"]) || array_key_exists("heIsMembre", $context) ? $context["heIsMembre"] : (function () { throw new RuntimeError('Variable "heIsMembre" does not exist.', 92, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 92, $this->source); })()), "isSolved", [], "any", false, false, false, 92))) ? ("like-forum-message") : (""));
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, ((((isset($context["heIsMembre"]) || array_key_exists("heIsMembre", $context) ? $context["heIsMembre"] : (function () { throw new RuntimeError('Variable "heIsMembre" does not exist.', 92, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 92, $this->source); })()), "isSolved", [], "any", false, false, false, 92))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_course_like_forum_message", ["id" => twig_get_attribute($this->env, $this->source, $context["fm"], "id", [], "any", false, false, false, 92)])) : (("#item-comment-" . twig_get_attribute($this->env, $this->source, $context["fm"], "id", [], "any", false, false, false, 92)))), "html", null, true);
                        echo "\"><i class=\"fas fa-thumbs-up\"></i> Like (<span class=\"nb-likes\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fm"], "likes", [], "any", false, false, false, 92), "html", null, true);
                        echo "</span>)</a> </li>
                                                                ";
                        // line 93
                        if (( !twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 93, $this->source); })()), "isSolved", [], "any", false, false, false, 93) && ((isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 93, $this->source); })()) === twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 93, $this->source); })()), "membre", [], "any", false, false, false, 93)))) {
                            // line 94
                            echo "                                                                    <li class=\"nav-item\"> <a onclick=\"return confirm('Are you sure that you want to set these response as the top response that solved your problem ?')\" class=\"text-primary-hover text-success\" href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_course_solve_forum_message", ["id" => twig_get_attribute($this->env, $this->source, $context["fm"], "id", [], "any", false, false, false, 94)]), "html", null, true);
                            echo "\"><i class=\"fas fa-check\"></i> Resolved by these post</a> </li>
                                                                
                                                                ";
                        }
                        // line 97
                        echo "                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fm'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 102
                    echo "                                                <!-- Comment item END -->
                                        ";
                }
                // line 104
                echo "                                    </ul>
                            </li>
                        ";
            }
            // line 107
            echo "                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 108
            echo "                        <h5 class=\"mt-2 text-danger\">No answer found</h5>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                </ul>

            </div>

        </div>
        <!-- Tab contents END -->

        <div class=\"card-footer p-4\">
            ";
        // line 118
        if (((array_key_exists("heIsMembre", $context) && (isset($context["heIsMembre"]) || array_key_exists("heIsMembre", $context) ? $context["heIsMembre"] : (function () { throw new RuntimeError('Variable "heIsMembre" does not exist.', 118, $this->source); })())) &&  !twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 118, $this->source); })()), "isSolved", [], "any", false, false, false, 118))) {
            // line 119
            echo "                <div class=\"d-flex mb-4 mt-3\">
                    <!-- Avatar -->
                    <div class=\"avatar avatar-sm flex-shrink-0 me-2\">
                        <a href=\"#\"> <img class=\"avatar-img rounded-circle\" src=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122), "personne", [], "any", false, false, false, 122), "avatarPath", [], "any", false, false, false, 122)), "html", null, true);
            echo "\" alt=\"\"> </a>
                    </div>

                    <form id=\"newForumMessageForm\" method=\"POST\" action=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_course_new_forum_message", ["referenceSujet" => twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 125, $this->source); })()), "reference", [], "any", false, false, false, 125), "membreId" => twig_get_attribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 125, $this->source); })()), "id", [], "any", false, false, false, 125)]), "html", null, true);
            echo "\" class=\"w-100 d-flex\">
                        <textarea name=\"message\" class=\"one form-control pe-4 bg-light\" placeholder=\"Add a comment...\" rows=\"1\"></textarea>
                        <button class=\"btn btn-primary ms-2 mb-0\" type=\"submit\"><i class=\"fas fa-paper-plane\"></i></button>
                    </form>
                </div>
            ";
        }
        // line 131
        echo "        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/forum_message/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 131,  347 => 125,  341 => 122,  336 => 119,  334 => 118,  324 => 110,  317 => 108,  312 => 107,  307 => 104,  303 => 102,  293 => 97,  286 => 94,  284 => 93,  276 => 92,  268 => 87,  263 => 85,  259 => 84,  249 => 77,  241 => 73,  237 => 72,  234 => 71,  232 => 70,  228 => 69,  222 => 65,  219 => 64,  213 => 61,  210 => 60,  207 => 59,  201 => 57,  199 => 56,  186 => 55,  184 => 54,  176 => 53,  168 => 48,  163 => 46,  159 => 45,  149 => 38,  141 => 34,  138 => 33,  133 => 32,  121 => 23,  113 => 20,  109 => 19,  105 => 18,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block pageTitle %}Forum{% endblock %}

{% block mainContent %}

    <div class=\"card shadow rounded-2 p-0\">
        <!-- Tab contents START -->
        <div class=\"card-body p-4\">
            <div  class=\"d-flex mb-4 mt-3\">
                <div class=\"avatar avatar-lg flex-shrink-0 me-2\">
                    <a href=\"#\"> <img class=\"avatar-img rounded-circle\" src=\"{{ asset(sujet.membre.utilisateur.personne.avatarPath) }}\" alt=\"\"> </a>
                </div>

                <div class=\"w-100 d-flex\">
                    <div>
                        <h6>
                            By {{ sujet.membre.utilisateur.personne.pseudo }}
                            <span class=\"badge btn-info-soft\">{{ sujet.createdAt|date('d/m/Y - H:i:s') }}</span>
                            <span class=\"badge {{ sujet.isSolved ? \"btn-success-soft\" : 'btn-danger-soft' }}\">{{ sujet.isSolved ? \"Resolved\" : \"Unresolved\" }}</span> 

                        </h6>
                        {{ sujet.content|raw }}
                    </div>
                </div>
            </div>
            <hr>

            <div class=\"custom-scrollbar h-500px overflow-hidden\">

                <ul class=\"list-unstyled mb-0\">
                    {% for message in sujet.forumMessages %}
                        {% if not message.isAnswer %}
                            <li class=\"comment-item\" id=\"item-comment-{{ message.id }}\">
                                <div class=\"d-flex mb-3\">
                                    <!-- Avatar -->
                                    <div class=\"avatar avatar-sm flex-shrink-0\">
                                        <a href=\"#\"><img class=\"avatar-img rounded-circle\" src=\"{{ asset(message.membre.utilisateur.personne.avatarPath) }}\" alt=\"\"></a>
                                    </div>
                                    <div class=\"ms-2\">
                                        <!-- Comment by -->
                                        <div class=\"bg-light p-3 rounded\">
                                            <div class=\"d-flex justify-content-center\">
                                                <div class=\"me-2\">
                                                    <h6 class=\"mb-1 lead fw-bold\"> <a href=\"#!\"> {{ message.membre.utilisateur.personne.pseudo }}</a></h6>
                                                    <p class=\"h6 mb-0\">{{ message.content }}</p>
                                                </div>
                                                <small>{{ message.createdAt|date('d/m/Y - H:i:s') }}</small>
                                            </div>
                                        </div>
                                        <!-- Comment react -->
                                        <ul class=\"nav nav-divider py-2 small\">
                                            <li class=\"nav-item\"> <a class=\"text-primary-hover {{ heIsMembre and not sujet.isSolved ? 'like-forum-message' : ''}}\" href=\"{{ heIsMembre and not sujet.isSolved ? url(\"app_course_like_forum_message\", {id: message.id}) : '#item-comment-' ~ message.id }}\"><i class=\"fas fa-thumbs-up\"></i> Like (<span class=\"nb-likes\">{{ message.likes }}</span>)</a> </li>
                                            {% if not sujet.isSolved and membre is not same as null %}
                                                <li class=\"nav-item\"> <a class=\"text-primary-hover {{ heIsMembre and not sujet.isSolved ? 'reply-forum-message' : '' }}\" data-forum-message=\"{{ message.id }}\" data-membre=\"{{ membre.id }}\" data-append-response=\"#reply-forum-message-{{ message.id }}\" {{ heIsMembre and not sujet.isSolved ? 'data-bs-toggle=\"modal\" data-bs-target=\"#replyForumMessage\"' : '' }} href=\"#\"><i class=\"fas fa-reply\"></i> Reply</a> </li>
                                                {% if membre is same as sujet.membre %}
                                                    <li class=\"nav-item\"> <a onclick=\"return confirm('Are you sure that you want to set these response as the top response that solved your problem ?')\" data-bs-toggle=\"tooltip\" title=\"Resolved by these post\" class=\"text-primary-hover text-success\" href=\"{{ url(\"app_course_solve_forum_message\", {id: message.id}) }}\"><i class=\"fas fa-check\"></i> Resolved</a> </li>
                                                {% endif %}
                                                {% if heIsMembre and not sujet.isSolved and  (membre.utilisateur.eleve is same as null or message.membre is same as membre) %}
                                                    <li class=\"nav-item\"> 
                                                        <a onclick=\"return confirm('Are you sure you want to remov this item?')\" class=\"text-primary-hover text-danger\" href=\"{{ url(\"app_instructor_course_forum_subject_delete_message\", {id: message.id, _token: csrf_token('delete' ~ message.id)}) }}\"><i class=\"fas fa-trash\"></i> Remove</a> 
                                                    </li>
                                                {% endif %}
                                            {% endif %}
                                        </ul>
                                    </div>
                                </div>
                                    <!-- Comment item nested START -->
                                    <ul class=\"list-unstyled ms-4\" id=\"reply-forum-message-{{ message.id }}\">
                                        {% if message.forumMessages|length > 0 %}
                                            <!-- Comment item START -->
                                            {% for fm in message.forumMessages %}
                                                <li class=\"comment-item\" id=\"item-comment-{{ fm.id }}\">
                                                    <div class=\"d-flex\">
                                                        <!-- Avatar -->
                                                        <div class=\"avatar avatar-xs flex-shrink-0\">
                                                            <a href=\"#\"><img class=\"avatar-img rounded-circle\" src=\"{{ asset(fm.membre.utilisateur.personne.avatarPath) }}\" alt=\"\"></a>
                                                        </div>
                                                        <!-- Comment by -->
                                                        <div class=\"ms-2\">
                                                            <div class=\"bg-light p-3 rounded\">
                                                                <div class=\"d-flex justify-content-center\">
                                                                    <div class=\"me-2\">
                                                                        <h6 class=\"mb-1  lead fw-bold\"> <a href=\"#\"> {{ fm.membre.utilisateur.personne.pseudo }} </a> </h6>
                                                                        <p class=\" mb-0\">{{ fm.content }}</p>
                                                                    </div>
                                                                    <small>{{ fm.createdAt|date('d/m/Y - H:i:s') }}</small>
                                                                </div>
                                                            </div>
                                                            <!-- Comment react -->
                                                            <ul class=\"nav nav-divider py-2 small\">
                                                                <li class=\"nav-item\"> <a class=\"text-primary-hover {{ heIsMembre and not sujet.isSolved ? 'like-forum-message' : ''}}\" href=\"{{ heIsMembre and not sujet.isSolved ? url(\"app_course_like_forum_message\", {id: fm.id}) : '#item-comment-' ~ fm.id }}\"><i class=\"fas fa-thumbs-up\"></i> Like (<span class=\"nb-likes\">{{ fm.likes }}</span>)</a> </li>
                                                                {% if not sujet.isSolved and membre is same as sujet.membre %}
                                                                    <li class=\"nav-item\"> <a onclick=\"return confirm('Are you sure that you want to set these response as the top response that solved your problem ?')\" class=\"text-primary-hover text-success\" href=\"{{ url(\"app_course_solve_forum_message\", {id: fm.id}) }}\"><i class=\"fas fa-check\"></i> Resolved by these post</a> </li>
                                                                
                                                                {% endif %}
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            {% endfor %}
                                                <!-- Comment item END -->
                                        {% endif %}
                                    </ul>
                            </li>
                        {% endif %}
                    {% else %}
                        <h5 class=\"mt-2 text-danger\">No answer found</h5>
                    {% endfor %}
                </ul>

            </div>

        </div>
        <!-- Tab contents END -->

        <div class=\"card-footer p-4\">
            {% if heIsMembre is defined and heIsMembre and not sujet.isSolved %}
                <div class=\"d-flex mb-4 mt-3\">
                    <!-- Avatar -->
                    <div class=\"avatar avatar-sm flex-shrink-0 me-2\">
                        <a href=\"#\"> <img class=\"avatar-img rounded-circle\" src=\"{{ asset(app.user.personne.avatarPath) }}\" alt=\"\"> </a>
                    </div>

                    <form id=\"newForumMessageForm\" method=\"POST\" action=\"{{ path(\"app_front_course_new_forum_message\", {referenceSujet: sujet.reference, membreId: membre.id}) }}\" class=\"w-100 d-flex\">
                        <textarea name=\"message\" class=\"one form-control pe-4 bg-light\" placeholder=\"Add a comment...\" rows=\"1\"></textarea>
                        <button class=\"btn btn-primary ms-2 mb-0\" type=\"submit\"><i class=\"fas fa-paper-plane\"></i></button>
                    </form>
                </div>
            {% endif %}
        </div>
    </div>

{% endblock %}", "admin/forum_message/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\forum_message\\index.html.twig");
    }
}
