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

/* front/course_forum/subject_message.html.twig */
class __TwigTemplate_ee1fda1a3033c2a1694f22f9714cf0ad extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/course_forum/subject_message.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/course_forum/subject_message.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/course_forum/subject_message.html.twig", 1);
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

        echo " - Forum, ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 3, $this->source); })()), "intitule", [], "any", false, false, false, 3), "html", null, true);
        
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
    Page content START -->
    <section class=\"pb-0 py-lg-5\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Main content START -->
                <div class=\"col-lg-12\">
                    ";
        // line 15
        echo twig_include($this->env, $context, "front/course_forum/_messages.html.twig");
        echo "
                </div>

                <div class=\"col-lg-12 mt-5\">
                    <div class=\"card shadow rounded-2 p-0\">

                        <!-- Tab contents START -->
                        <div class=\"card-body p-4\">
                            <h3>";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("OTHERSTOPICS_KEY", [], "messages");
        echo "</h3>
                            <hr>

                            <div>
                                <ul class=\"list-unstyled\">
                                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 28, $this->source); })()), "forum", [], "any", false, false, false, 28), "sujets", [], "any", false, false, false, 28), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (twig_get_attribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 28, $this->source); })()), "createdAt", [], "any", false, false, false, 28) <=> twig_get_attribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 28, $this->source); })()), "createdAt", [], "any", false, false, false, 28)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["subject"]) {
            // line 29
            echo "                                        ";
            if ( !($context["subject"] === (isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 29, $this->source); })()))) {
                // line 30
                echo "                                            <li>
                                                <div  class=\"d-flex mb-4 mt-3\">
                                                    <div class=\"avatar avatar-sm flex-shrink-0 me-2\">
                                                        <a href=\"#\"> <img class=\"avatar-img rounded-circle\" src=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subject"], "membre", [], "any", false, false, false, 33), "utilisateur", [], "any", false, false, false, 33), "personne", [], "any", false, false, false, 33), "avatarPath", [], "any", false, false, false, 33)), "html", null, true);
                echo "\" alt=\"\"> </a>
                                                    </div>

                                                    <div class=\"w-100 d-flex\">
                                                        <p>
                                                            ";
                // line 38
                echo twig_get_attribute($this->env, $this->source, $context["subject"], "content", [], "any", false, false, false, 38);
                echo "
                                                            <br>
                                                            <span class=\"badge ";
                // line 40
                echo ((twig_get_attribute($this->env, $this->source, $context["subject"], "isSolved", [], "any", false, false, false, 40)) ? ("btn-success-soft") : ("btn-danger-soft"));
                echo "\">";
                echo ((twig_get_attribute($this->env, $this->source, $context["subject"], "isSolved", [], "any", false, false, false, 40)) ? ("{% trans %}RESOLVED_KEY{% endtrans %}") : ("{% trans %}UNRESOLVED_KEY{% endtrans %}"));
                echo "</span> |
                                                            <i class=\"badge btn-info-soft\">";
                // line 41
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "createdAt", [], "any", false, false, false, 41), "d/m/Y - H:i:s"), "html", null, true);
                echo "</i>
                                                            | <span class=\"badge btn-warning-soft\">";
                // line 42
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subject"], "forumMessages", [], "any", false, false, false, 42)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("COMMENTS_KEY", [], "messages");
                echo "</span>
                                                            | <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_course_forum_subject_message", ["slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["subject"], "forum", [], "any", false, false, false, 43), "cours", [], "any", false, false, false, 43), "slug", [], "any", false, false, false, 43), "reference" => twig_get_attribute($this->env, $this->source, $context["subject"], "reference", [], "any", false, false, false, 43)], "http", false), "html", null, true);
                echo "\" class=\"btn btn-primary-soft\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SHOWCOMMENT_KEY", [], "messages");
                echo "</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <hr>
                                        ";
            }
            // line 50
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                                </ul>
                            </div>

                        </div>
                        <!-- Tab contents END -->

                        <div class=\"card-footer p-4\">
                            
                        </div>
                    </div>
                </div>

                <!-- Main content END -->

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
        return "front/course_forum/subject_message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 51,  172 => 50,  160 => 43,  154 => 42,  150 => 41,  144 => 40,  139 => 38,  131 => 33,  126 => 30,  123 => 29,  119 => 28,  111 => 23,  100 => 15,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"front/base.html.twig\" %}

{% block title %} - Forum, {{ course.intitule }}{% endblock %}

{% block mainContent %}


    <!-- =======================
    Page content START -->
    <section class=\"pb-0 py-lg-5\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Main content START -->
                <div class=\"col-lg-12\">
                    {{ include('front/course_forum/_messages.html.twig') }}
                </div>

                <div class=\"col-lg-12 mt-5\">
                    <div class=\"card shadow rounded-2 p-0\">

                        <!-- Tab contents START -->
                        <div class=\"card-body p-4\">
                            <h3>{% trans %}OTHERSTOPICS_KEY{% endtrans %}</h3>
                            <hr>

                            <div>
                                <ul class=\"list-unstyled\">
                                    {% for subject in course.forum.sujets|sort((a, b) => b.createdAt <=> a.createdAt) %}
                                        {% if subject is not same as sujet %}
                                            <li>
                                                <div  class=\"d-flex mb-4 mt-3\">
                                                    <div class=\"avatar avatar-sm flex-shrink-0 me-2\">
                                                        <a href=\"#\"> <img class=\"avatar-img rounded-circle\" src=\"{{ asset(subject.membre.utilisateur.personne.avatarPath) }}\" alt=\"\"> </a>
                                                    </div>

                                                    <div class=\"w-100 d-flex\">
                                                        <p>
                                                            {{ subject.content|raw }}
                                                            <br>
                                                            <span class=\"badge {{ subject.isSolved ? \"btn-success-soft\" : 'btn-danger-soft' }}\">{{ subject.isSolved ? \"{% trans %}RESOLVED_KEY{% endtrans %}\" : \"{% trans %}UNRESOLVED_KEY{% endtrans %}\" }}</span> |
                                                            <i class=\"badge btn-info-soft\">{{ subject.createdAt|date('d/m/Y - H:i:s') }}</i>
                                                            | <span class=\"badge btn-warning-soft\">{{ subject.forumMessages|length }} {% trans %}COMMENTS_KEY{% endtrans %}</span>
                                                            | <a href=\"{{ url(\"app_front_course_forum_subject_message\", {slug: subject.forum.cours.slug, reference: subject.reference}, \"http\", false) }}\" class=\"btn btn-primary-soft\">{% trans %}SHOWCOMMENT_KEY{% endtrans %}</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                            <hr>
                                        {% endif %}
                                    {% endfor %}
                                </ul>
                            </div>

                        </div>
                        <!-- Tab contents END -->

                        <div class=\"card-footer p-4\">
                            
                        </div>
                    </div>
                </div>

                <!-- Main content END -->

            </div><!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Page content END -->

{% endblock %}
", "front/course_forum/subject_message.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\course_forum\\subject_message.html.twig");
    }
}
