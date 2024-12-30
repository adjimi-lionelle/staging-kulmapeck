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

/* front/includes/courses/forum.html.twig */
class __TwigTemplate_aeb9038acecb9d6320a94943f171491d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/courses/forum.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/courses/forum.html.twig"));

        // line 1
        if ((isset($context["heIsMembre"]) || array_key_exists("heIsMembre", $context) ? $context["heIsMembre"] : (function () { throw new RuntimeError('Variable "heIsMembre" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "<h5 class=\"mb-4\">Ask Your Question</h5>
<!-- Comment box -->
<div class=\"d-flex mb-4\">
    <!-- Avatar -->
    <div class=\"avatar avatar-sm flex-shrink-0 me-2\">
        <a href=\"#\"> <img class=\"avatar-img rounded-circle\" src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 7, $this->source); })()), "utilisateur", [], "any", false, false, false, 7), "personne", [], "any", false, false, false, 7), "avatarPath", [], "any", false, false, false, 7)), "html", null, true);
            echo "\" alt=\"\"> </a>
    </div>

    ";
            // line 10
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["sujetForm"]) || array_key_exists("sujetForm", $context) ? $context["sujetForm"] : (function () { throw new RuntimeError('Variable "sujetForm" does not exist.', 10, $this->source); })()), 'form_start');
            echo "
        ";
            // line 11
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["sujetForm"]) || array_key_exists("sujetForm", $context) ? $context["sujetForm"] : (function () { throw new RuntimeError('Variable "sujetForm" does not exist.', 11, $this->source); })()), "content", [], "any", false, false, false, 11), 'widget');
            echo "
        <button class=\"btn btn-primary ms-2 mb-0\" type=\"submit\">Post</button>
    ";
            // line 13
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["sujetForm"]) || array_key_exists("sujetForm", $context) ? $context["sujetForm"] : (function () { throw new RuntimeError('Variable "sujetForm" does not exist.', 13, $this->source); })()), 'form_end');
            echo "
</div>
";
        }
        // line 15
        echo " 
 
<div class=\"accordion accordion-icon accordion-bg-light\" id=\"accordionExample3\">
    
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "forum", [], "any", false, true, false, 19), "sujets", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["course"] ?? null), "forum", [], "any", false, true, false, 19), "sujets", [], "any", false, false, false, 19), [])) : ([])));
        foreach ($context['_seq'] as $context["_key"] => $context["sujet"]) {
            // line 20
            echo "        
        <div class=\"accordion-item mb-3\">
            <h6 class=\"accordion-header font-base\" id=\"heading-forum-";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sujet"], "id", [], "any", false, false, false, 22), "html", null, true);
            echo "\">
                <a class=\"accordion-button fw-bold rounded d-block\" href=\"#collapse-forum-";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sujet"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-forum-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sujet"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\" aria-expanded=\"true\" aria-controls=\"collapse-forum-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sujet"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\">
                    <span class=\"mb-0\">";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["sujet"], "content", [], "any", false, false, false, 24);
            echo "</span> 
                    <hr>
                    <span class=\"d-block mt-1\">";
            // line 26
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sujet"], "forumMessages", [], "any", false, false, false, 26)), "html", null, true);
            echo " Messages</span> 
                    ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, $context["sujet"], "isSolved", [], "any", false, false, false, 27)) {
                // line 28
                echo "                        <span class=\"d-block badge badge-lg text-success\">SOLVED</span>
                    ";
            } else {
                // line 30
                echo "                        <span class=\"d-block badge badge-lg text-danger\">NOT SOLVED</span>
                    ";
            }
            // line 32
            echo "                </a>
            </h6>
            <div id=\"collapse-forum-";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sujet"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\" class=\"accordion-collapse collapse\" aria-labelledby=\"heading-forum-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sujet"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\" data-bs-parent=\"#accordionExample3\">
                <div class=\"accordion-body mt-0 p-0\">
                    <div class=\"vstack gap-0\">
                        <!-- Comment item START -->
                        <div class=\"border p-2 p-sm-4 rounded-3 mb-4\">
                            <div class=\"custom-scrollbar\" style=\"max-height: 300px;overflow: auto;\">
                                <ul class=\"list-unstyled mb-0\">
                                    ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["sujet"], "forumMessages", [], "any", false, false, false, 41));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 42
                echo "                                        ";
                if ( !twig_get_attribute($this->env, $this->source, $context["message"], "isAnswer", [], "any", false, false, false, 42)) {
                    // line 43
                    echo "                                            <li class=\"comment-item\" id=\"item-comment-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 43), "html", null, true);
                    echo "\">
                                                <div class=\"d-flex mb-3\">
                                                    <!-- Avatar -->
                                                    <div class=\"avatar avatar-sm flex-shrink-0\">
                                                        <a href=\"#\"><img class=\"avatar-img rounded-circle\" src=\"";
                    // line 47
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "membre", [], "any", false, false, false, 47), "utilisateur", [], "any", false, false, false, 47), "personne", [], "any", false, false, false, 47), "avatarPath", [], "any", false, false, false, 47)), "html", null, true);
                    echo "\" alt=\"\"></a>
                                                    </div>
                                                    <div class=\"ms-2\">
                                                        <!-- Comment by -->
                                                        <div class=\"bg-light p-3 rounded\">
                                                            <div class=\"d-flex justify-content-center\">
                                                                <div class=\"me-2\">
                                                                    <h6 class=\"mb-1 lead fw-bold\"> <a href=\"#!\"> ";
                    // line 54
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "membre", [], "any", false, false, false, 54), "utilisateur", [], "any", false, false, false, 54), "personne", [], "any", false, false, false, 54), "pseudo", [], "any", false, false, false, 54), "html", null, true);
                    echo "</a></h6>
                                                                    <p class=\"h6 mb-0\">";
                    // line 55
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "content", [], "any", false, false, false, 55), "html", null, true);
                    echo "</p>
                                                                </div>
                                                                <small>";
                    // line 57
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "createdAt", [], "any", false, false, false, 57), "d/m/Y - H:i:s"), "html", null, true);
                    echo "</small>
                                                            </div>
                                                        </div>
                                                        <!-- Comment react -->
                                                        <ul class=\"nav nav-divider py-2 small\">
                                                            <li class=\"nav-item\"> <a class=\"text-primary-hover ";
                    // line 62
                    echo ((((isset($context["heIsMembre"]) || array_key_exists("heIsMembre", $context) ? $context["heIsMembre"] : (function () { throw new RuntimeError('Variable "heIsMembre" does not exist.', 62, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, $context["sujet"], "isSolved", [], "any", false, false, false, 62))) ? ("like-forum-message") : (""));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, ((((isset($context["heIsMembre"]) || array_key_exists("heIsMembre", $context) ? $context["heIsMembre"] : (function () { throw new RuntimeError('Variable "heIsMembre" does not exist.', 62, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, $context["sujet"], "isSolved", [], "any", false, false, false, 62))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_course_like_forum_message", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 62)])) : (("#item-comment-" . twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 62)))), "html", null, true);
                    echo "\"><i class=\"fas fa-thumbs-up\"></i> Like (<span class=\"nb-likes\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "likes", [], "any", false, false, false, 62), "html", null, true);
                    echo "</span>)</a> </li>
                                                            ";
                    // line 63
                    if (( !twig_get_attribute($this->env, $this->source, $context["sujet"], "isSolved", [], "any", false, false, false, 63) &&  !((isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 63, $this->source); })()) === null))) {
                        // line 64
                        echo "                                                                <li class=\"nav-item\"> <a class=\"text-primary-hover ";
                        echo ((((isset($context["heIsMembre"]) || array_key_exists("heIsMembre", $context) ? $context["heIsMembre"] : (function () { throw new RuntimeError('Variable "heIsMembre" does not exist.', 64, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, $context["sujet"], "isSolved", [], "any", false, false, false, 64))) ? ("reply-forum-message") : (""));
                        echo "\" data-forum-message=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 64), "html", null, true);
                        echo "\" data-membre=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64), "html", null, true);
                        echo "\" data-append-response=\"#reply-forum-message-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 64), "html", null, true);
                        echo "\" ";
                        echo ((((isset($context["heIsMembre"]) || array_key_exists("heIsMembre", $context) ? $context["heIsMembre"] : (function () { throw new RuntimeError('Variable "heIsMembre" does not exist.', 64, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, $context["sujet"], "isSolved", [], "any", false, false, false, 64))) ? ("data-bs-toggle=\"modal\" data-bs-target=\"#replyForumMessage\"") : (""));
                        echo " href=\"#\"><i class=\"fas fa-reply\"></i> Reply</a> </li>
                                                                ";
                        // line 65
                        if (((isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 65, $this->source); })()) === twig_get_attribute($this->env, $this->source, $context["sujet"], "membre", [], "any", false, false, false, 65))) {
                            // line 66
                            echo "                                                                    <li class=\"nav-item\"> <a onclick=\"return confirm('Are you sure that you want to set these response as the top response that solved your problem ?')\" class=\"text-primary-hover text-success\" href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_course_solve_forum_message", ["id" => twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 66)]), "html", null, true);
                            echo "\"><i class=\"fas fa-check\"></i> Resolved by these post</a> </li>
                                                                ";
                        }
                        // line 68
                        echo "                                                            ";
                    }
                    // line 69
                    echo "                                                        </ul>
                                                    </div>
                                                </div>
                                                    <!-- Comment item nested START -->
                                                    <ul class=\"list-unstyled ms-4\" id=\"reply-forum-message-";
                    // line 73
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "id", [], "any", false, false, false, 73), "html", null, true);
                    echo "\">
                                                        ";
                    // line 74
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "forumMessages", [], "any", false, false, false, 74)) > 0)) {
                        // line 75
                        echo "                                                            <!-- Comment item START -->
                                                            ";
                        // line 76
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["message"], "forumMessages", [], "any", false, false, false, 76));
                        foreach ($context['_seq'] as $context["_key"] => $context["fm"]) {
                            // line 77
                            echo "                                                                <li class=\"comment-item\" id=\"item-comment-";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fm"], "id", [], "any", false, false, false, 77), "html", null, true);
                            echo "\">
                                                                    <div class=\"d-flex\">
                                                                        <!-- Avatar -->
                                                                        <div class=\"avatar avatar-xs flex-shrink-0\">
                                                                            <a href=\"#\"><img class=\"avatar-img rounded-circle\" src=\"";
                            // line 81
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fm"], "membre", [], "any", false, false, false, 81), "utilisateur", [], "any", false, false, false, 81), "personne", [], "any", false, false, false, 81), "avatarPath", [], "any", false, false, false, 81)), "html", null, true);
                            echo "\" alt=\"\"></a>
                                                                        </div>
                                                                        <!-- Comment by -->
                                                                        <div class=\"ms-2\">
                                                                            <div class=\"bg-light p-3 rounded\">
                                                                                <div class=\"d-flex justify-content-center\">
                                                                                    <div class=\"me-2\">
                                                                                        <h6 class=\"mb-1  lead fw-bold\"> <a href=\"#\"> ";
                            // line 88
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["fm"], "membre", [], "any", false, false, false, 88), "utilisateur", [], "any", false, false, false, 88), "personne", [], "any", false, false, false, 88), "pseudo", [], "any", false, false, false, 88), "html", null, true);
                            echo " </a> </h6>
                                                                                        <p class=\" mb-0\">";
                            // line 89
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fm"], "content", [], "any", false, false, false, 89), "html", null, true);
                            echo "</p>
                                                                                    </div>
                                                                                    <small>";
                            // line 91
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fm"], "createdAt", [], "any", false, false, false, 91), "d/m/Y - H:i:s"), "html", null, true);
                            echo "</small>
                                                                                </div>
                                                                            </div>
                                                                            <!-- Comment react -->
                                                                            <ul class=\"nav nav-divider py-2 small\">
                                                                                <li class=\"nav-item\"> <a class=\"text-primary-hover ";
                            // line 96
                            echo ((((isset($context["heIsMembre"]) || array_key_exists("heIsMembre", $context) ? $context["heIsMembre"] : (function () { throw new RuntimeError('Variable "heIsMembre" does not exist.', 96, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, $context["sujet"], "isSolved", [], "any", false, false, false, 96))) ? ("like-forum-message") : (""));
                            echo "\" href=\"";
                            echo twig_escape_filter($this->env, ((((isset($context["heIsMembre"]) || array_key_exists("heIsMembre", $context) ? $context["heIsMembre"] : (function () { throw new RuntimeError('Variable "heIsMembre" does not exist.', 96, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, $context["sujet"], "isSolved", [], "any", false, false, false, 96))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_course_like_forum_message", ["id" => twig_get_attribute($this->env, $this->source, $context["fm"], "id", [], "any", false, false, false, 96)])) : (("#item-comment-" . twig_get_attribute($this->env, $this->source, $context["fm"], "id", [], "any", false, false, false, 96)))), "html", null, true);
                            echo "\"><i class=\"fas fa-thumbs-up\"></i> Like (<span class=\"nb-likes\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fm"], "likes", [], "any", false, false, false, 96), "html", null, true);
                            echo "</span>)</a> </li>
                                                                                ";
                            // line 97
                            if (( !twig_get_attribute($this->env, $this->source, $context["sujet"], "isSolved", [], "any", false, false, false, 97) && ((isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 97, $this->source); })()) === twig_get_attribute($this->env, $this->source, $context["sujet"], "membre", [], "any", false, false, false, 97)))) {
                                // line 98
                                echo "                                                                                    <li class=\"nav-item\"> <a onclick=\"return confirm('Are you sure that you want to set these response as the top response that solved your problem ?')\" class=\"text-primary-hover text-success\" href=\"";
                                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_course_solve_forum_message", ["id" => twig_get_attribute($this->env, $this->source, $context["fm"], "id", [], "any", false, false, false, 98)]), "html", null, true);
                                echo "\"><i class=\"fas fa-check\"></i> Resolved by these post</a> </li>
                                                                                
                                                                                ";
                            }
                            // line 101
                            echo "                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fm'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 106
                        echo "                                                                <!-- Comment item END -->
                                                        ";
                    }
                    // line 108
                    echo "                                                    </ul>
                                            </li>
                                        ";
                }
                // line 111
                echo "                                    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 112
                echo "                                        <h5 class=\"mt-2 text-danger\">No answer found</h5>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "                                </ul>
                                <!-- Comment item nested END -->
                            </div>
                            <hr>
                            ";
            // line 118
            if (((isset($context["heIsMembre"]) || array_key_exists("heIsMembre", $context) ? $context["heIsMembre"] : (function () { throw new RuntimeError('Variable "heIsMembre" does not exist.', 118, $this->source); })()) &&  !twig_get_attribute($this->env, $this->source, $context["sujet"], "isSolved", [], "any", false, false, false, 118))) {
                // line 119
                echo "                                <div class=\"d-flex mb-4 mt-3\">
                                    <!-- Avatar -->
                                    <div class=\"avatar avatar-sm flex-shrink-0 me-2\">
                                        <a href=\"#\"> <img class=\"avatar-img rounded-circle\" src=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122), "personne", [], "any", false, false, false, 122), "avatarPath", [], "any", false, false, false, 122)), "html", null, true);
                echo "\" alt=\"\"> </a>
                                    </div>

                                    <form method=\"POST\" action=\"";
                // line 125
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_course_new_forum_message", ["referenceSujet" => twig_get_attribute($this->env, $this->source, $context["sujet"], "reference", [], "any", false, false, false, 125), "membreId" => twig_get_attribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 125, $this->source); })()), "id", [], "any", false, false, false, 125)]), "html", null, true);
                echo "\" class=\"w-100 d-flex\">
                                        <textarea name=\"message\" class=\"one form-control pe-4 bg-light\" placeholder=\"Add a comment...\" rows=\"1\"></textarea>
                                        <button class=\"btn btn-primary ms-2 mb-0\" type=\"submit\"><i class=\"fas fa-paper-plane\"></i></button>
                                    </form>
                                </div>
                            ";
            }
            // line 131
            echo "                        </div>
                        <!-- Comment item END -->
                        

                    </div>
                </div>
            </div>
        </div>
        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sujet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "
 </div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/includes/courses/forum.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 141,  341 => 131,  332 => 125,  326 => 122,  321 => 119,  319 => 118,  313 => 114,  306 => 112,  301 => 111,  296 => 108,  292 => 106,  282 => 101,  275 => 98,  273 => 97,  265 => 96,  257 => 91,  252 => 89,  248 => 88,  238 => 81,  230 => 77,  226 => 76,  223 => 75,  221 => 74,  217 => 73,  211 => 69,  208 => 68,  202 => 66,  200 => 65,  187 => 64,  185 => 63,  177 => 62,  169 => 57,  164 => 55,  160 => 54,  150 => 47,  142 => 43,  139 => 42,  134 => 41,  122 => 34,  118 => 32,  114 => 30,  110 => 28,  108 => 27,  104 => 26,  99 => 24,  91 => 23,  87 => 22,  83 => 20,  79 => 19,  73 => 15,  67 => 13,  62 => 11,  58 => 10,  52 => 7,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if heIsMembre %}
<h5 class=\"mb-4\">Ask Your Question</h5>
<!-- Comment box -->
<div class=\"d-flex mb-4\">
    <!-- Avatar -->
    <div class=\"avatar avatar-sm flex-shrink-0 me-2\">
        <a href=\"#\"> <img class=\"avatar-img rounded-circle\" src=\"{{ asset(membre.utilisateur.personne.avatarPath) }}\" alt=\"\"> </a>
    </div>

    {{ form_start(sujetForm) }}
        {{ form_widget(sujetForm.content) }}
        <button class=\"btn btn-primary ms-2 mb-0\" type=\"submit\">Post</button>
    {{ form_end(sujetForm) }}
</div>
{% endif %} 
 
<div class=\"accordion accordion-icon accordion-bg-light\" id=\"accordionExample3\">
    
    {% for sujet in course.forum.sujets|default([]) %}
        
        <div class=\"accordion-item mb-3\">
            <h6 class=\"accordion-header font-base\" id=\"heading-forum-{{ sujet.id }}\">
                <a class=\"accordion-button fw-bold rounded d-block\" href=\"#collapse-forum-{{ sujet.id }}\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-forum-{{ sujet.id }}\" aria-expanded=\"true\" aria-controls=\"collapse-forum-{{ sujet.id }}\">
                    <span class=\"mb-0\">{{ sujet.content|raw }}</span> 
                    <hr>
                    <span class=\"d-block mt-1\">{{ sujet.forumMessages|length }} Messages</span> 
                    {% if sujet.isSolved %}
                        <span class=\"d-block badge badge-lg text-success\">SOLVED</span>
                    {% else %}
                        <span class=\"d-block badge badge-lg text-danger\">NOT SOLVED</span>
                    {% endif %}
                </a>
            </h6>
            <div id=\"collapse-forum-{{ sujet.id }}\" class=\"accordion-collapse collapse\" aria-labelledby=\"heading-forum-{{ sujet.id }}\" data-bs-parent=\"#accordionExample3\">
                <div class=\"accordion-body mt-0 p-0\">
                    <div class=\"vstack gap-0\">
                        <!-- Comment item START -->
                        <div class=\"border p-2 p-sm-4 rounded-3 mb-4\">
                            <div class=\"custom-scrollbar\" style=\"max-height: 300px;overflow: auto;\">
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
                                                                    <li class=\"nav-item\"> <a onclick=\"return confirm('Are you sure that you want to set these response as the top response that solved your problem ?')\" class=\"text-primary-hover text-success\" href=\"{{ url(\"app_course_solve_forum_message\", {id: message.id}) }}\"><i class=\"fas fa-check\"></i> Resolved by these post</a> </li>
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
                                <!-- Comment item nested END -->
                            </div>
                            <hr>
                            {% if heIsMembre and not sujet.isSolved %}
                                <div class=\"d-flex mb-4 mt-3\">
                                    <!-- Avatar -->
                                    <div class=\"avatar avatar-sm flex-shrink-0 me-2\">
                                        <a href=\"#\"> <img class=\"avatar-img rounded-circle\" src=\"{{ asset(app.user.personne.avatarPath) }}\" alt=\"\"> </a>
                                    </div>

                                    <form method=\"POST\" action=\"{{ url(\"app_front_course_new_forum_message\", {referenceSujet: sujet.reference, membreId: membre.id}) }}\" class=\"w-100 d-flex\">
                                        <textarea name=\"message\" class=\"one form-control pe-4 bg-light\" placeholder=\"Add a comment...\" rows=\"1\"></textarea>
                                        <button class=\"btn btn-primary ms-2 mb-0\" type=\"submit\"><i class=\"fas fa-paper-plane\"></i></button>
                                    </form>
                                </div>
                            {% endif %}
                        </div>
                        <!-- Comment item END -->
                        

                    </div>
                </div>
            </div>
        </div>
        
    {% endfor %}

 </div>", "front/includes/courses/forum.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\includes\\courses\\forum.html.twig");
    }
}
