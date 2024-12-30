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

/* front/exam/show.html.twig */
class __TwigTemplate_d66fac5bfb3893a578bfff6723f95508 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'script' => [$this, 'block_script'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/exam/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/exam/show.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/exam/show.html.twig", 1);
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

        echo " - Courses";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 6
        echo "\t
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
    <!-- Main Content START -->
    <section class=\"pb-0 pt-4 pb-md-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">

                    <!-- Title and Info START -->
                    <div class=\"row\">
                        <!-- Avatar and Share -->
                        <div class=\"col-lg-3 align-items-center mt-4 mt-lg-5 order-2 order-lg-1\">
                            <div class=\"text-lg-center\">
                                <!-- Author info -->
                                <div class=\"position-relative\">
                                    <!-- Avatar -->
                                    <div class=\"avatar avatar-xxl\">
                                        <img class=\"avatar-img rounded-circle\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["exam"]) || array_key_exists("exam", $context) ? $context["exam"] : (function () { throw new RuntimeError('Variable "exam" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "personne", [], "any", false, false, false, 26), "avatarPath", [], "any", false, false, false, 26)), "html", null, true);
        echo "\" alt=\"avatar\">
                                    </div>
                                    <a href=\"#\" class=\"h5 stretched-link mt-2 mb-0 d-block\">";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["exam"]) || array_key_exists("exam", $context) ? $context["exam"] : (function () { throw new RuntimeError('Variable "exam" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "personne", [], "any", false, false, false, 28), "nomComplet", [], "any", false, false, false, 28), "html", null, true);
        echo "</a>
                                    <p class=\"mb-2\">Editor at kulmapeck</p>
                                </div>
                                <!-- Info -->
                                <ul class=\"list-inline list-unstyled\">
                                    <li class=\"list-inline-item d-lg-block my-lg-2\">";
        // line 33
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exam"]) || array_key_exists("exam", $context) ? $context["exam"] : (function () { throw new RuntimeError('Variable "exam" does not exist.', 33, $this->source); })()), "publishedAt", [], "any", false, false, false, 33), "d/m/Y - H:i:s"), "html", null, true);
        echo "</li>
                                    ";
        // line 34
        if ( !((isset($context["display"]) || array_key_exists("display", $context) ? $context["display"] : (function () { throw new RuntimeError('Variable "display" does not exist.', 34, $this->source); })()) === "correction")) {
            // line 35
            echo "                                        <li class=\"list-inline-item d-lg-block my-lg-2\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_exam_show", ["reference" => twig_get_attribute($this->env, $this->source, (isset($context["exam"]) || array_key_exists("exam", $context) ? $context["exam"] : (function () { throw new RuntimeError('Variable "exam" does not exist.', 35, $this->source); })()), "reference", [], "any", false, false, false, 35), "display" => "correction"]), "html", null, true);
            echo "\" class=\"btn btn-success-soft\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SHOWANSWER_KEY", [], "messages");
            echo "</a></li>
                                    ";
        } else {
            // line 37
            echo "                                        <li class=\"list-inline-item d-lg-block my-lg-2\"><a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_exam_show", ["reference" => twig_get_attribute($this->env, $this->source, (isset($context["exam"]) || array_key_exists("exam", $context) ? $context["exam"] : (function () { throw new RuntimeError('Variable "exam" does not exist.', 37, $this->source); })()), "reference", [], "any", false, false, false, 37), "display" => "subject"]), "html", null, true);
            echo "\" class=\"btn btn-primary-soft\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("BACKTOSUBJECT_KEY", [], "messages");
            echo "</a></li>
                                    ";
        }
        // line 39
        echo "                                </ul>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class=\"col-lg-9 order-1\">
                            <!-- Pre title -->
                            <span class=\"badge text-bg-primary\">";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["exam"]) || array_key_exists("exam", $context) ? $context["exam"] : (function () { throw new RuntimeError('Variable "exam" does not exist.', 46, $this->source); })()), "classe", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46), "html", null, true);
        echo "</span><span class=\"mx-2\">|</span><div class=\"badge text-bg-success\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["exam"]) || array_key_exists("exam", $context) ? $context["exam"] : (function () { throw new RuntimeError('Variable "exam" does not exist.', 46, $this->source); })()), "category", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46), "html", null, true);
        echo "</div>
                            <!-- Title -->
                            <h1 class=\"mt-2 mb-0 display-5\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exam"]) || array_key_exists("exam", $context) ? $context["exam"] : (function () { throw new RuntimeError('Variable "exam" does not exist.', 48, $this->source); })()), "title", [], "any", false, false, false, 48), "html", null, true);
        echo "</h1>
                            <!-- Info -->
                            <p class=\"mt-2\">";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["exam"]) || array_key_exists("exam", $context) ? $context["exam"] : (function () { throw new RuntimeError('Variable "exam" does not exist.', 50, $this->source); })()), "description", [], "any", false, false, false, 50), "html", null, true);
        echo "</p>
                            
                        </div>
                    </div>
                    <!-- Title and Info END -->

                    <!-- Video START -->
                    <div class=\"row mt-4\">
                        <div class=\"col-xl-10 mx-auto\">
                            <!-- Card item START -->
                            <div class=\"card overflow-hidden h-700px rounded-3 text-center\" style=\"background-image:url(assets/images/event/10.jpg); background-position: center left; background-size: cover;\">
                                <!-- Card Image overlay -->
                                <div class=\"bg-overlay bg-dark opacity-4\"></div>
                                <div class=\"card-img-overlay d-flex align-items-center p-2 p-sm-4\"> 
                                    <div class=\"w-100 my-auto\">
                                        <div class=\"row justify-content-center\">
                                            <iframe src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/exams/files/" . (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 66, $this->source); })()))), "html", null, true);
        echo "\" height=\"800px\" frameborder=\"0\"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                        </div>
                    </div>
                    <!-- Video END -->

                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- Main Content END -->

    ";
        // line 82
        echo twig_include($this->env, $context, "front/includes/_newsletterorange.html.twig");
        echo "

    ";
        // line 84
        if ((array_key_exists("courses", $context) &&  !twig_test_empty((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 84, $this->source); })())))) {
            // line 85
            echo "        <!-- Related blog START -->
        <section class=\"pt-0\">
            <div class=\"container\">
            <!-- Title -->
                <div class=\"row mb-4\">
                    <div class=\"col-12\">
                    <h2 class=\"mb-0\">";
            // line 91
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("MOSTPOPULAR_KEY", [], "messages");
            echo "</h2>
                    </div>
                </div>
                
                <!-- Slider START -->
                <div class=\"tiny-slider arrow-round arrow-hover arrow-dark\">
                    <div class=\"tiny-slider-inner\" data-autoplay=\"false\" data-arrow=\"true\" data-edge=\"2\" data-dots=\"false\" data-items=\"3\" data-items-lg=\"2\" data-items-sm=\"1\">
                        ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) || array_key_exists("courses", $context) ? $context["courses"] : (function () { throw new RuntimeError('Variable "courses" does not exist.', 98, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 99
                echo "                            <!-- Slider item -->
                            <div class=\"card bg-transparent\">
                                <div class=\"row g-0\">
                                    <!-- Image -->
                                    <div class=\"col-md-4\">
                                        <img src=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/courses/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["course"], "media", [], "any", false, false, false, 104), "imageFile", [], "any", false, false, false, 104))), "html", null, true);
                echo "\" class=\"img-fluid rounded-start\" alt=\"...\">
                                    </div>
                                    <!-- Card body -->
                                    <div class=\"col-md-8\">
                                        <div class=\"card-body\">
                                            <!-- Title -->
                                            <h6 class=\"card-title\"><a href=\"";
                // line 110
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_course_details", ["slug" => twig_get_attribute($this->env, $this->source, $context["course"], "slug", [], "any", false, false, false, 110)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "intitule", [], "any", false, false, false, 110), "html", null, true);
                echo "</a></h6>
                                            <span class=\"small\">";
                // line 111
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "createdAt", [], "any", false, false, false, 111), "d/m/Y"), "html", null, true);
                echo "</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                    </div>
                </div>
                <!-- Slider END -->
            </div>
        </section>
        <!-- Related blog END -->
    ";
        }
        // line 124
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/exam/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 124,  285 => 117,  273 => 111,  267 => 110,  258 => 104,  251 => 99,  247 => 98,  237 => 91,  229 => 85,  227 => 84,  222 => 82,  203 => 66,  184 => 50,  179 => 48,  172 => 46,  163 => 39,  155 => 37,  147 => 35,  145 => 34,  141 => 33,  133 => 28,  128 => 26,  110 => 10,  100 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"front/base.html.twig\" %}

{% block title %} - Courses{% endblock %}

{% block script %}
\t
{% endblock %}

{% block mainContent %}

    <!-- Main Content START -->
    <section class=\"pb-0 pt-4 pb-md-5\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">

                    <!-- Title and Info START -->
                    <div class=\"row\">
                        <!-- Avatar and Share -->
                        <div class=\"col-lg-3 align-items-center mt-4 mt-lg-5 order-2 order-lg-1\">
                            <div class=\"text-lg-center\">
                                <!-- Author info -->
                                <div class=\"position-relative\">
                                    <!-- Avatar -->
                                    <div class=\"avatar avatar-xxl\">
                                        <img class=\"avatar-img rounded-circle\" src=\"{{ asset(exam.user.personne.avatarPath) }}\" alt=\"avatar\">
                                    </div>
                                    <a href=\"#\" class=\"h5 stretched-link mt-2 mb-0 d-block\">{{ exam.user.personne.nomComplet }}</a>
                                    <p class=\"mb-2\">Editor at kulmapeck</p>
                                </div>
                                <!-- Info -->
                                <ul class=\"list-inline list-unstyled\">
                                    <li class=\"list-inline-item d-lg-block my-lg-2\">{{ exam.publishedAt|date(\"d/m/Y - H:i:s\") }}</li>
                                    {% if display is not same as 'correction' %}
                                        <li class=\"list-inline-item d-lg-block my-lg-2\"><a href=\"{{ url(\"app_front_exam_show\", {reference: exam.reference, display: 'correction'}) }}\" class=\"btn btn-success-soft\">{% trans %}SHOWANSWER_KEY{% endtrans %}</a></li>
                                    {% else %}
                                        <li class=\"list-inline-item d-lg-block my-lg-2\"><a href=\"{{ url(\"app_front_exam_show\", {reference: exam.reference, display: 'subject'}) }}\" class=\"btn btn-primary-soft\">{% trans %}BACKTOSUBJECT_KEY{% endtrans %}</a></li>
                                    {% endif %}
                                </ul>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class=\"col-lg-9 order-1\">
                            <!-- Pre title -->
                            <span class=\"badge text-bg-primary\">{{ exam.classe.name }}</span><span class=\"mx-2\">|</span><div class=\"badge text-bg-success\">{{ exam.category.name }}</div>
                            <!-- Title -->
                            <h1 class=\"mt-2 mb-0 display-5\">{{ exam.title }}</h1>
                            <!-- Info -->
                            <p class=\"mt-2\">{{ exam.description }}</p>
                            
                        </div>
                    </div>
                    <!-- Title and Info END -->

                    <!-- Video START -->
                    <div class=\"row mt-4\">
                        <div class=\"col-xl-10 mx-auto\">
                            <!-- Card item START -->
                            <div class=\"card overflow-hidden h-700px rounded-3 text-center\" style=\"background-image:url(assets/images/event/10.jpg); background-position: center left; background-size: cover;\">
                                <!-- Card Image overlay -->
                                <div class=\"bg-overlay bg-dark opacity-4\"></div>
                                <div class=\"card-img-overlay d-flex align-items-center p-2 p-sm-4\"> 
                                    <div class=\"w-100 my-auto\">
                                        <div class=\"row justify-content-center\">
                                            <iframe src=\"{{ asset('uploads/media/exams/files/' ~ data) }}\" height=\"800px\" frameborder=\"0\"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card item END -->
                        </div>
                    </div>
                    <!-- Video END -->

                </div>
            </div> <!-- Row END -->
        </div>
    </section>
    <!-- Main Content END -->

    {{ include('front/includes/_newsletterorange.html.twig') }}

    {% if courses is defined and courses is not empty %}
        <!-- Related blog START -->
        <section class=\"pt-0\">
            <div class=\"container\">
            <!-- Title -->
                <div class=\"row mb-4\">
                    <div class=\"col-12\">
                    <h2 class=\"mb-0\">{% trans %}MOSTPOPULAR_KEY{% endtrans %}</h2>
                    </div>
                </div>
                
                <!-- Slider START -->
                <div class=\"tiny-slider arrow-round arrow-hover arrow-dark\">
                    <div class=\"tiny-slider-inner\" data-autoplay=\"false\" data-arrow=\"true\" data-edge=\"2\" data-dots=\"false\" data-items=\"3\" data-items-lg=\"2\" data-items-sm=\"1\">
                        {% for course in courses %}
                            <!-- Slider item -->
                            <div class=\"card bg-transparent\">
                                <div class=\"row g-0\">
                                    <!-- Image -->
                                    <div class=\"col-md-4\">
                                        <img src=\"{{ asset('uploads/media/courses/' ~ course.media.imageFile) }}\" class=\"img-fluid rounded-start\" alt=\"...\">
                                    </div>
                                    <!-- Card body -->
                                    <div class=\"col-md-8\">
                                        <div class=\"card-body\">
                                            <!-- Title -->
                                            <h6 class=\"card-title\"><a href=\"{{ url(\"app_front_course_details\", {slug: course.slug}) }}\">{{ course.intitule }}</a></h6>
                                            <span class=\"small\">{{ course.createdAt|date('d/m/Y') }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
                <!-- Slider END -->
            </div>
        </section>
        <!-- Related blog END -->
    {% endif %}

{% endblock %}", "front/exam/show.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\exam\\show.html.twig");
    }
}
