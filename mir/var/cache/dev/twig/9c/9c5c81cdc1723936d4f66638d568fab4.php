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

/* front/course_forum/_messages.html.twig */
class __TwigTemplate_e65efdc426226a5e135ed53f5c511266 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/course_forum/_messages.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/course_forum/_messages.html.twig"));

        // line 1
        echo "<div class=\"card shadow rounded-2 p-0\">
    <!-- Tab contents START -->
    <div class=\"card-body p-4\">
        <div  class=\"d-flex mb-4 mt-3\">
            <div class=\"avatar avatar-lg flex-shrink-0 me-2\">
                <a href=\"#\"> <img class=\"avatar-img rounded-circle\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 6, $this->source); })()), "membre", [], "any", false, false, false, 6), "utilisateur", [], "any", false, false, false, 6), "personne", [], "any", false, false, false, 6), "avatarPath", [], "any", false, false, false, 6)), "html", null, true);
        echo "\" alt=\"\"> </a>
            </div>

            <div class=\"w-100 d-flex\">
                <div>
                    <h6>
                        By ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 12, $this->source); })()), "membre", [], "any", false, false, false, 12), "utilisateur", [], "any", false, false, false, 12), "personne", [], "any", false, false, false, 12), "pseudo", [], "any", false, false, false, 12), "html", null, true);
        echo "
                        <span class=\"badge btn-info-soft\">";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 13, $this->source); })()), "createdAt", [], "any", false, false, false, 13), "d/m/Y - H:i:s"), "html", null, true);
        echo "</span>
                        <span class=\"badge ";
        // line 14
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 14, $this->source); })()), "isSolved", [], "any", false, false, false, 14)) ? ("btn-success-soft") : ("btn-danger-soft"));
        echo "\">";
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 14, $this->source); })()), "isSolved", [], "any", false, false, false, 14)) ? ("Resolved") : ("Unresolved"));
        echo "</span> 

                    </h6>
                    ";
        // line 17
        echo twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 17, $this->source); })()), "content", [], "any", false, false, false, 17);
        echo "
                </div>
            </div>
        </div>
        <hr>

        <div class=\"custom-scrollbar h-600px overflow-hidden\">

            <ul class=\"list-unstyled mb-0\">
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 26, $this->source); })()), "forumMessages", [], "any", false, false, false, 26));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 27
            echo "                    ";
            if ( !twig_get_attribute($this->env, $this->source, $context["message"], "isAnswer", [], "any", false, false, false, 27)) {
                // line 28
                echo "                        <li class=\"comment-item\" id=\"item-comment-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 28), "html", null, true);
                echo "\">
                            <div class=\"d-flex mb-3\">
                                <!-- Avatar -->
                                <div class=\"avatar avatar-sm flex-shrink-0\">
                                    <a href=\"#\"><img class=\"avatar-img rounded-circle\" src=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "membre", [], "any", false, false, false, 32), "utilisateur", [], "any", false, false, false, 32), "personne", [], "any", false, false, false, 32), "avatarPath", [], "any", false, false, false, 32)), "html", null, true);
                echo "\" alt=\"\"></a>
                                </div>
                                <div class=\"ms-2\">
                                    <!-- Comment by -->
                                    <div class=\"bg-light p-3 rounded\">
                                        <div class=\"d-flex justify-content-center\">
                                            <div class=\"me-2\">
                                                <h6 class=\"mb-1 lead fw-bold\"> <a href=\"#!\"> ";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "membre", [], "any", false, false, false, 39), "utilisateur", [], "any", false, false, false, 39), "personne", [], "any", false, false, false, 39), "pseudo", [], "any", false, false, false, 39), "html", null, true);
                echo "</a></h6>
                                                <p class=\"h6 mb-0\">";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 40), "html", null, true);
                echo "</p>
                                            </div>
                                            <small>";
                // line 42
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 42), "d/m/Y - H:i:s"), "html", null, true);
                echo "</small>
                                        </div>
                                    </div>
                                    <!-- Comment react -->
                                    <ul class=\"nav nav-divider py-2 small\">
                                        <li class=\"nav-item\"> <a class=\"text-primary-hover ";
                // line 47
                echo ((((isset($context["heIsMembre"]) || array_key_exists("heIsMembre", $context) ? $context["heIsMembre"] : (function () { throw new RuntimeError('Variable "heIsMembre" does not exist.', 47, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 47, $this->source); })()), "isSolved", [], "any", false, false, false, 47))) ? ("like-forum-message") : (""));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, ((((isset($context["heIsMembre"]) || array_key_exists("heIsMembre", $context) ? $context["heIsMembre"] : (function () { throw new RuntimeError('Variable "heIsMembre" does not exist.', 47, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 47, $this->source); })()), "isSolved", [], "any", false, false, false, 47))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_course_like_forum_message", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 47)])) : (("#item-comment-" . twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 47)))), "html", null, true);
                echo "\"><i class=\"fas fa-thumbs-up\"></i> Like (<span class=\"nb-likes\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "likes", [], "any", false, false, false, 47), "html", null, true);
                echo "</span>)</a> </li>
                                        ";
                // line 48
                if (( !twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 48, $this->source); })()), "isSolved", [], "any", false, false, false, 48) &&  !((isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 48, $this->source); })()) === null))) {
                    // line 49
                    echo "                                            <li class=\"nav-item\"> <a class=\"text-primary-hover ";
                    echo ((((isset($context["heIsMembre"]) || array_key_exists("heIsMembre", $context) ? $context["heIsMembre"] : (function () { throw new RuntimeError('Variable "heIsMembre" does not exist.', 49, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 49, $this->source); })()), "isSolved", [], "any", false, false, false, 49))) ? ("reply-forum-message") : (""));
                    echo "\" data-forum-message=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 49), "html", null, true);
                    echo "\" data-membre=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49), "html", null, true);
                    echo "\" data-append-response=\"#reply-forum-message-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 49), "html", null, true);
                    echo "\" ";
                    echo ((((isset($context["heIsMembre"]) || array_key_exists("heIsMembre", $context) ? $context["heIsMembre"] : (function () { throw new RuntimeError('Variable "heIsMembre" does not exist.', 49, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 49, $this->source); })()), "isSolved", [], "any", false, false, false, 49))) ? ("data-bs-toggle=\"modal\" data-bs-target=\"#replyForumMessage\"") : (""));
                    echo " href=\"#\"><i class=\"fas fa-reply\"></i> ";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("REPLY_KEY", [], "messages");
                    echo "</a> </li>
                                            ";
                    // line 50
                    if (((isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 50, $this->source); })()) === twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 50, $this->source); })()), "membre", [], "any", false, false, false, 50))) {
                        // line 51
                        echo "                                                <li class=\"nav-item\"> <a onclick=\"return confirm('";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("RESOVEDCONFIRM_KEY", [], "messages");
                        echo "')\" data-bs-toggle=\"tooltip\" title=\"";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("RESOLVEDBY_KEY", [], "messages");
                        echo "\" class=\"text-primary-hover text-success\" href=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_course_solve_forum_message", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                        echo "\"><i class=\"fas fa-check\"></i> ";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("RESOLVED_KEY", [], "messages");
                        echo "</a> </li>
                                            ";
                    }
                    // line 53
                    echo "                                            ";
                    if ((((isset($context["heIsMembre"]) || array_key_exists("heIsMembre", $context) ? $context["heIsMembre"] : (function () { throw new RuntimeError('Variable "heIsMembre" does not exist.', 53, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 53, $this->source); })()), "isSolved", [], "any", false, false, false, 53)) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 53, $this->source); })()), "utilisateur", [], "any", false, false, false, 53), "eleve", [], "any", false, false, false, 53) === null) || (twig_get_attribute($this->env, $this->source, $context["message"], "membre", [], "any", false, false, false, 53) === (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 53, $this->source); })()))))) {
                        // line 54
                        echo "                                                <li class=\"nav-item\"> 
                                                    <a onclick=\"return confirm('Are you sure you want to remov this item?')\" class=\"text-primary-hover text-danger\" href=\"";
                        // line 55
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_instructor_course_forum_subject_delete_message", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 55), "_token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 55)))]), "html", null, true);
                        echo "\"><i class=\"fas fa-trash\"></i> ";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("REMOVE_KEY", [], "messages");
                        echo "</a> 
                                                </li>
                                            ";
                    }
                    // line 58
                    echo "                                        ";
                }
                // line 59
                echo "                                    </ul>
                                </div>
                            </div>
                                <!-- Comment item nested START -->
                                <ul class=\"list-unstyled ms-4\" id=\"reply-forum-message-";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 63), "html", null, true);
                echo "\">
                                    ";
                // line 64
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "forumMessages", [], "any", false, false, false, 64)) > 0)) {
                    // line 65
                    echo "                                        <!-- Comment item START -->
                                        ";
                    // line 66
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["message"], "forumMessages", [], "any", false, false, false, 66));
                    foreach ($context['_seq'] as $context["_key"] => $context["fm"]) {
                        // line 67
                        echo "                                            <li class=\"comment-item\" id=\"item-comment-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fm"], "id", [], "any", false, false, false, 67), "html", null, true);
                        echo "\">
                                                <div class=\"d-flex\">
                                                    <!-- Avatar -->
                                                    <div class=\"avatar avatar-xs flex-shrink-0\">
                                                        <a href=\"#\"><img class=\"avatar-img rounded-circle\" src=\"";
                        // line 71
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fm"], "membre", [], "any", false, false, false, 71), "utilisateur", [], "any", false, false, false, 71), "personne", [], "any", false, false, false, 71), "avatarPath", [], "any", false, false, false, 71)), "html", null, true);
                        echo "\" alt=\"\"></a>
                                                    </div>
                                                    <!-- Comment by -->
                                                    <div class=\"ms-2\">
                                                        <div class=\"bg-light p-3 rounded\">
                                                            <div class=\"d-flex justify-content-center\">
                                                                <div class=\"me-2\">
                                                                    <h6 class=\"mb-1  lead fw-bold\"> <a href=\"#\"> ";
                        // line 78
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fm"], "membre", [], "any", false, false, false, 78), "utilisateur", [], "any", false, false, false, 78), "personne", [], "any", false, false, false, 78), "pseudo", [], "any", false, false, false, 78), "html", null, true);
                        echo " </a> </h6>
                                                                    <p class=\" mb-0\">";
                        // line 79
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fm"], "content", [], "any", false, false, false, 79), "html", null, true);
                        echo "</p>
                                                                </div>
                                                                <small>";
                        // line 81
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fm"], "createdAt", [], "any", false, false, false, 81), "d/m/Y - H:i:s"), "html", null, true);
                        echo "</small>
                                                            </div>
                                                        </div>
                                                        <!-- Comment react -->
                                                        <ul class=\"nav nav-divider py-2 small\">
                                                            <li class=\"nav-item\"> <a class=\"text-primary-hover ";
                        // line 86
                        echo ((((isset($context["heIsMembre"]) || array_key_exists("heIsMembre", $context) ? $context["heIsMembre"] : (function () { throw new RuntimeError('Variable "heIsMembre" does not exist.', 86, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 86, $this->source); })()), "isSolved", [], "any", false, false, false, 86))) ? ("like-forum-message") : (""));
                        echo "\" href=\"";
                        echo twig_escape_filter($this->env, ((((isset($context["heIsMembre"]) || array_key_exists("heIsMembre", $context) ? $context["heIsMembre"] : (function () { throw new RuntimeError('Variable "heIsMembre" does not exist.', 86, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 86, $this->source); })()), "isSolved", [], "any", false, false, false, 86))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_course_like_forum_message", ["id" => twig_get_attribute($this->env, $this->source, $context["fm"], "id", [], "any", false, false, false, 86)])) : (("#item-comment-" . twig_get_attribute($this->env, $this->source, $context["fm"], "id", [], "any", false, false, false, 86)))), "html", null, true);
                        echo "\"><i class=\"fas fa-thumbs-up\"></i> Like (<span class=\"nb-likes\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fm"], "likes", [], "any", false, false, false, 86), "html", null, true);
                        echo "</span>)</a> </li>
                                                            ";
                        // line 87
                        if (( !twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 87, $this->source); })()), "isSolved", [], "any", false, false, false, 87) && ((isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 87, $this->source); })()) === twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 87, $this->source); })()), "membre", [], "any", false, false, false, 87)))) {
                            // line 88
                            echo "                                                                <li class=\"nav-item\"> <a onclick=\"return confirm('Are you sure that you want to set these response as the top response that solved your problem ?')\" class=\"text-primary-hover text-success\" href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_course_solve_forum_message", ["id" => twig_get_attribute($this->env, $this->source, $context["fm"], "id", [], "any", false, false, false, 88)]), "html", null, true);
                            echo "\"><i class=\"fas fa-check\"></i> ";
                            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("RESOLVEDBY_KEY", [], "messages");
                            echo "</a> </li>
                                                            
                                                            ";
                        }
                        // line 91
                        echo "                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fm'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 96
                    echo "                                            <!-- Comment item END -->
                                    ";
                }
                // line 98
                echo "                                </ul>
                        </li>
                    ";
            }
            // line 101
            echo "                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 102
            echo "                    <h5 class=\"mt-2 text-danger\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("NOANSWERFOUND_KEY", [], "messages");
            echo "</h5>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "            </ul>

        </div>

    </div>
    <!-- Tab contents END -->

    <div class=\"card-footer p-4\">
        ";
        // line 112
        if (((isset($context["heIsMembre"]) || array_key_exists("heIsMembre", $context) ? $context["heIsMembre"] : (function () { throw new RuntimeError('Variable "heIsMembre" does not exist.', 112, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 112, $this->source); })()), "isSolved", [], "any", false, false, false, 112))) {
            // line 113
            echo "            <div class=\"d-flex mb-4 mt-3\">
                <!-- Avatar -->
                <div class=\"avatar avatar-sm flex-shrink-0 me-2\">
                    <a href=\"#\"> <img class=\"avatar-img rounded-circle\" src=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116), "personne", [], "any", false, false, false, 116), "avatarPath", [], "any", false, false, false, 116)), "html", null, true);
            echo "\" alt=\"\"> </a>
                </div>

                <form id=\"newForumMessageForm\" method=\"POST\" action=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_course_new_forum_message", ["referenceSujet" => twig_get_attribute($this->env, $this->source, (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 119, $this->source); })()), "reference", [], "any", false, false, false, 119), "membreId" => twig_get_attribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 119, $this->source); })()), "id", [], "any", false, false, false, 119)]), "html", null, true);
            echo "\" class=\"w-100 d-flex\">
                    <textarea name=\"message\" class=\"one form-control pe-4 bg-light\" placeholder=\"";
            // line 120
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ADDCOMMENT_KEY", [], "messages");
            echo "\" rows=\"1\"></textarea>
                    <button class=\"btn btn-primary ms-2 mb-0\" type=\"submit\"><i class=\"fas fa-paper-plane\"></i></button>
                </form>
            </div>
        ";
        }
        // line 125
        echo "    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/course_forum/_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 125,  319 => 120,  315 => 119,  309 => 116,  304 => 113,  302 => 112,  292 => 104,  283 => 102,  278 => 101,  273 => 98,  269 => 96,  259 => 91,  250 => 88,  248 => 87,  240 => 86,  232 => 81,  227 => 79,  223 => 78,  213 => 71,  205 => 67,  201 => 66,  198 => 65,  196 => 64,  192 => 63,  186 => 59,  183 => 58,  175 => 55,  172 => 54,  169 => 53,  157 => 51,  155 => 50,  140 => 49,  138 => 48,  130 => 47,  122 => 42,  117 => 40,  113 => 39,  103 => 32,  95 => 28,  92 => 27,  87 => 26,  75 => 17,  67 => 14,  63 => 13,  59 => 12,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card shadow rounded-2 p-0\">
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

        <div class=\"custom-scrollbar h-600px overflow-hidden\">

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
                                            <li class=\"nav-item\"> <a class=\"text-primary-hover {{ heIsMembre and not sujet.isSolved ? 'reply-forum-message' : '' }}\" data-forum-message=\"{{ message.id }}\" data-membre=\"{{ membre.id }}\" data-append-response=\"#reply-forum-message-{{ message.id }}\" {{ heIsMembre and not sujet.isSolved ? 'data-bs-toggle=\"modal\" data-bs-target=\"#replyForumMessage\"' : '' }} href=\"#\"><i class=\"fas fa-reply\"></i> {% trans %}REPLY_KEY{% endtrans %}</a> </li>
                                            {% if membre is same as sujet.membre %}
                                                <li class=\"nav-item\"> <a onclick=\"return confirm('{% trans %}RESOVEDCONFIRM_KEY{% endtrans %}')\" data-bs-toggle=\"tooltip\" title=\"{% trans %}RESOLVEDBY_KEY{% endtrans %}\" class=\"text-primary-hover text-success\" href=\"{{ url(\"app_course_solve_forum_message\", {id: message.id}) }}\"><i class=\"fas fa-check\"></i> {% trans %}RESOLVED_KEY{% endtrans %}</a> </li>
                                            {% endif %}
                                            {% if heIsMembre and not sujet.isSolved and  (membre.utilisateur.eleve is same as null or message.membre is same as membre) %}
                                                <li class=\"nav-item\"> 
                                                    <a onclick=\"return confirm('Are you sure you want to remov this item?')\" class=\"text-primary-hover text-danger\" href=\"{{ url(\"app_instructor_course_forum_subject_delete_message\", {id: message.id, _token: csrf_token('delete' ~ message.id)}) }}\"><i class=\"fas fa-trash\"></i> {% trans %}REMOVE_KEY{% endtrans %}</a> 
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
                                                                <li class=\"nav-item\"> <a onclick=\"return confirm('Are you sure that you want to set these response as the top response that solved your problem ?')\" class=\"text-primary-hover text-success\" href=\"{{ url(\"app_course_solve_forum_message\", {id: fm.id}) }}\"><i class=\"fas fa-check\"></i> {% trans %}RESOLVEDBY_KEY{% endtrans %}</a> </li>
                                                            
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
                    <h5 class=\"mt-2 text-danger\">{% trans %}NOANSWERFOUND_KEY{% endtrans %}</h5>
                {% endfor %}
            </ul>

        </div>

    </div>
    <!-- Tab contents END -->

    <div class=\"card-footer p-4\">
        {% if heIsMembre and not sujet.isSolved %}
            <div class=\"d-flex mb-4 mt-3\">
                <!-- Avatar -->
                <div class=\"avatar avatar-sm flex-shrink-0 me-2\">
                    <a href=\"#\"> <img class=\"avatar-img rounded-circle\" src=\"{{ asset(app.user.personne.avatarPath) }}\" alt=\"\"> </a>
                </div>

                <form id=\"newForumMessageForm\" method=\"POST\" action=\"{{ path(\"app_front_course_new_forum_message\", {referenceSujet: sujet.reference, membreId: membre.id}) }}\" class=\"w-100 d-flex\">
                    <textarea name=\"message\" class=\"one form-control pe-4 bg-light\" placeholder=\"{% trans %}ADDCOMMENT_KEY{% endtrans %}\" rows=\"1\"></textarea>
                    <button class=\"btn btn-primary ms-2 mb-0\" type=\"submit\"><i class=\"fas fa-paper-plane\"></i></button>
                </form>
            </div>
        {% endif %}
    </div>
</div>", "front/course_forum/_messages.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\course_forum\\_messages.html.twig");
    }
}
