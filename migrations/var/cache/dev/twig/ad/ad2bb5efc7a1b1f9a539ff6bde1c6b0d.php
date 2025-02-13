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

/* front/course_forum/_subjects.html.twig */
class __TwigTemplate_c3c208cec555d79ebfb9aa170ddda3b9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/course_forum/_subjects.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/course_forum/_subjects.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <!-- Main content START -->
    <div class=\"col-lg-12\">
        <div class=\"card shadow rounded-2 p-0\">

            <!-- Tab contents START -->
            <div class=\"card-body p-4\">
                <h5>";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("QUESTIONSASKED_KEY", [], "messages");
        echo "</h5>
                <hr>
                <div class=\"h-500px overflow-hidden custom-scroolbar\">
                    <ul class=\"list-unstyled\">
                        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 12, $this->source); })()), "forum", [], "any", false, false, false, 12), "sujets", [], "any", false, false, false, 12), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 12, $this->source); })()), "createdAt", [], "any", false, false, false, 12) <=> twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 12, $this->source); })()), "createdAt", [], "any", false, false, false, 12)); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sujet"]) {
            // line 13
            echo "                            ";
            if (array_key_exists("heIsInstructor", $context)) {
                // line 14
                echo "                                ";
                $context["viewCommentUri"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_instructor_course_forum_subject_message", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 14, $this->source); })()), "slug", [], "any", false, false, false, 14), "reference" => twig_get_attribute($this->env, $this->source, $context["sujet"], "reference", [], "any", false, false, false, 14)]);
                // line 15
                echo "                            ";
            }
            // line 16
            echo "                            <li>
                                <div  class=\"d-flex mb-4 mt-3\">
                                    <div class=\"avatar avatar-sm flex-shrink-0 me-2\">
                                        <a href=\"#\"> <img class=\"avatar-img rounded-circle\" src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["sujet"], "membre", [], "any", false, false, false, 19), "utilisateur", [], "any", false, false, false, 19), "personne", [], "any", false, false, false, 19), "avatarPath", [], "any", false, false, false, 19)), "html", null, true);
            echo "\" alt=\"\"> </a>
                                    </div>

                                    <div class=\"w-100 d-flex\">
                                        <p>
                                            ";
            // line 24
            echo twig_get_attribute($this->env, $this->source, $context["sujet"], "content", [], "any", false, false, false, 24);
            echo "
                                            <br>
                                            <span class=\"badge ";
            // line 26
            echo ((twig_get_attribute($this->env, $this->source, $context["sujet"], "isSolved", [], "any", false, false, false, 26)) ? ("btn-success-soft") : ("btn-danger-soft"));
            echo "\">";
            echo ((twig_get_attribute($this->env, $this->source, $context["sujet"], "isSolved", [], "any", false, false, false, 26)) ? ("Resolved") : ("Unresolved"));
            echo "</span> |
                                            <i class=\"badge btn-info-soft\">";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sujet"], "createdAt", [], "any", false, false, false, 27), "d M, Y - H:i:s"), "html", null, true);
            echo "</i>
                                            | <span class=\"badge btn-warning-soft\">";
            // line 28
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sujet"], "forumMessages", [], "any", false, false, false, 28)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("COMMENTS_KEY", [], "messages");
            echo "</span>
                                            | <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, ((array_key_exists("viewCommentUri", $context)) ? (_twig_default_filter((isset($context["viewCommentUri"]) || array_key_exists("viewCommentUri", $context) ? $context["viewCommentUri"] : (function () { throw new RuntimeError('Variable "viewCommentUri" does not exist.', 29, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_course_forum_subject_message", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 29, $this->source); })()), "slug", [], "any", false, false, false, 29), "reference" => twig_get_attribute($this->env, $this->source, $context["sujet"], "reference", [], "any", false, false, false, 29)]))) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_course_forum_subject_message", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 29, $this->source); })()), "slug", [], "any", false, false, false, 29), "reference" => twig_get_attribute($this->env, $this->source, $context["sujet"], "reference", [], "any", false, false, false, 29)]))), "html", null, true);
            echo "\" class=\"btn btn-primary-soft\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SHOWCOMMENT_KEY", [], "messages");
            echo "</a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <hr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "                            <h3 class=\"text-danger\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("NOTOPICSFOUND_KEY", [], "messages");
            echo "</h3>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sujet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                    </ul>
                </div>
            </div>
            <!-- Tab contents END -->

            <div class=\"card-footer p-4\">
                ";
        // line 44
        if ((isset($context["heIsMembre"]) || array_key_exists("heIsMembre", $context) ? $context["heIsMembre"] : (function () { throw new RuntimeError('Variable "heIsMembre" does not exist.', 44, $this->source); })())) {
            // line 45
            echo "                    <h5 class=\"mb-4\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ASKQUESTION_KEY", [], "messages");
            echo "</h5>
                    <!-- Comment box -->
                    <div class=\"d-flex mb-4\" id=\"newForumSubjectFormContainer\">
                        <!-- Avatar -->
                        <div class=\"avatar avatar-sm flex-shrink-0 me-2\">
                            <a href=\"#\"> <img class=\"avatar-img rounded-circle\" src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 50, $this->source); })()), "utilisateur", [], "any", false, false, false, 50), "personne", [], "any", false, false, false, 50), "avatarPath", [], "any", false, false, false, 50)), "html", null, true);
            echo "\" alt=\"\"> </a>
                        </div>

                        ";
            // line 53
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["sujetForm"]) || array_key_exists("sujetForm", $context) ? $context["sujetForm"] : (function () { throw new RuntimeError('Variable "sujetForm" does not exist.', 53, $this->source); })()), 'form_start');
            echo "
                            ";
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["sujetForm"]) || array_key_exists("sujetForm", $context) ? $context["sujetForm"] : (function () { throw new RuntimeError('Variable "sujetForm" does not exist.', 54, $this->source); })()), "content", [], "any", false, false, false, 54), 'widget');
            echo "
                            <button class=\"btn btn-primary ms-2 mb-0\" type=\"submit\">";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("POST_KEY", [], "messages");
            echo "</button>
                        ";
            // line 56
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["sujetForm"]) || array_key_exists("sujetForm", $context) ? $context["sujetForm"] : (function () { throw new RuntimeError('Variable "sujetForm" does not exist.', 56, $this->source); })()), 'form_end');
            echo "
                    </div>
                    ";
        }
        // line 59
        echo "            </div>
        </div>
    </div>
    <!-- Main content END -->

</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/course_forum/_subjects.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 59,  167 => 56,  163 => 55,  159 => 54,  155 => 53,  149 => 50,  140 => 45,  138 => 44,  130 => 38,  121 => 36,  107 => 29,  101 => 28,  97 => 27,  91 => 26,  86 => 24,  78 => 19,  73 => 16,  70 => 15,  67 => 14,  64 => 13,  59 => 12,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <!-- Main content START -->
    <div class=\"col-lg-12\">
        <div class=\"card shadow rounded-2 p-0\">

            <!-- Tab contents START -->
            <div class=\"card-body p-4\">
                <h5>{% trans %}QUESTIONSASKED_KEY{% endtrans %}</h5>
                <hr>
                <div class=\"h-500px overflow-hidden custom-scroolbar\">
                    <ul class=\"list-unstyled\">
                        {% for sujet in course.forum.sujets|sort((a, b) => b.createdAt <=> a.createdAt) %}
                            {% if heIsInstructor is defined %}
                                {% set viewCommentUri = url(\"app_instructor_course_forum_subject_message\", {slug: course.slug, reference: sujet.reference}) %}
                            {% endif %}
                            <li>
                                <div  class=\"d-flex mb-4 mt-3\">
                                    <div class=\"avatar avatar-sm flex-shrink-0 me-2\">
                                        <a href=\"#\"> <img class=\"avatar-img rounded-circle\" src=\"{{ asset(sujet.membre.utilisateur.personne.avatarPath) }}\" alt=\"\"> </a>
                                    </div>

                                    <div class=\"w-100 d-flex\">
                                        <p>
                                            {{ sujet.content|raw }}
                                            <br>
                                            <span class=\"badge {{ sujet.isSolved ? \"btn-success-soft\" : 'btn-danger-soft' }}\">{{ sujet.isSolved ? \"Resolved\" : \"Unresolved\" }}</span> |
                                            <i class=\"badge btn-info-soft\">{{ sujet.createdAt|date('d M, Y - H:i:s') }}</i>
                                            | <span class=\"badge btn-warning-soft\">{{ sujet.forumMessages|length }} {% trans %}COMMENTS_KEY{% endtrans %}</span>
                                            | <a href=\"{{ viewCommentUri|default(url(\"app_front_course_forum_subject_message\", {slug: course.slug, reference: sujet.reference})) }}\" class=\"btn btn-primary-soft\">{% trans %}SHOWCOMMENT_KEY{% endtrans %}</a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <hr>
                        {% else %}
                            <h3 class=\"text-danger\">{% trans %}NOTOPICSFOUND_KEY{% endtrans %}</h3>
                        {% endfor %}
                    </ul>
                </div>
            </div>
            <!-- Tab contents END -->

            <div class=\"card-footer p-4\">
                {% if heIsMembre %}
                    <h5 class=\"mb-4\">{% trans %}ASKQUESTION_KEY{% endtrans %}</h5>
                    <!-- Comment box -->
                    <div class=\"d-flex mb-4\" id=\"newForumSubjectFormContainer\">
                        <!-- Avatar -->
                        <div class=\"avatar avatar-sm flex-shrink-0 me-2\">
                            <a href=\"#\"> <img class=\"avatar-img rounded-circle\" src=\"{{ asset(membre.utilisateur.personne.avatarPath) }}\" alt=\"\"> </a>
                        </div>

                        {{ form_start(sujetForm) }}
                            {{ form_widget(sujetForm.content) }}
                            <button class=\"btn btn-primary ms-2 mb-0\" type=\"submit\">{% trans %}POST_KEY{% endtrans %}</button>
                        {{ form_end(sujetForm) }}
                    </div>
                    {% endif %}
            </div>
        </div>
    </div>
    <!-- Main content END -->

</div>", "front/course_forum/_subjects.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\course_forum\\_subjects.html.twig");
    }
}
