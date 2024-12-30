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

/* instructor/courses/quiz/index.html.twig */
class __TwigTemplate_265683021ddeffeacc15459b95fe260e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'subTitle' => [$this, 'block_subTitle'],
            'btnAction' => [$this, 'block_btnAction'],
            'pageContent' => [$this, 'block_pageContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "instructor/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/courses/quiz/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/courses/quiz/index.html.twig"));

        $this->parent = $this->loadTemplate("instructor/base.html.twig", "instructor/courses/quiz/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_subTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subTitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subTitle"));

        echo " - Courses ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_btnAction($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btnAction"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btnAction"));

        // line 6
        echo "    <a href=\"#\" class=\"btn btn-sm btn-primary mb-0\" data-bs-toggle=\"modal\" data-bs-target=\"#addQuiz\">Add New Quiz</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        // line 10
        echo "
    <!-- Card START -->
    <div class=\"card border bg-transparent rounded-3\">
        <!-- Card header START -->
        <div class=\"card-header bg-transparent border-bottom px-3\">
            <div class=\"row g-4 align-items-center\">
                <div class=\"col-md-2\">
                    <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/courses/" . (isset($context["imageFile"]) || array_key_exists("imageFile", $context) ? $context["imageFile"] : (function () { throw new RuntimeError('Variable "imageFile" does not exist.', 17, $this->source); })()))), "html", null, true);
        echo "\" class=\"rounded-2\" alt=\"Card image\">
                </div>
                <div class=\"col-md-10\">
                    <!-- Title -->
                    <h3 class=\"card-title mb-0\"><a href=\"#\">";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "</a></h3>
                </div>
            </div>
        </div>
        <!-- Card header END -->

        <!-- Card body START -->
        <div class=\"card-body p-4\">
            <!-- Accordion START -->
            <div class=\"accordion accordion-icon accordion-bg-light\" id=\"accordionExample\">
                ";
        // line 31
        $context["cmp"] = 1;
        // line 32
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quizzes"]) || array_key_exists("quizzes", $context) ? $context["quizzes"] : (function () { throw new RuntimeError('Variable "quizzes" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 33
            echo "                    <!-- Item -->
                    <div class=\"accordion-item mb-3\">
                        <h6 class=\"accordion-header\" id=\"headingOne";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "\">
                            <button class=\"accordion-button rounded\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "\" aria-expanded=\"true\" aria-controls=\"collapseOne";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "\">
                                <span class=\"text-secondary fw-bold me-3\">";
            // line 37
            echo twig_escape_filter($this->env, ((((isset($context["cmp"]) || array_key_exists("cmp", $context) ? $context["cmp"] : (function () { throw new RuntimeError('Variable "cmp" does not exist.', 37, $this->source); })()) < 10)) ? (("0" . (isset($context["cmp"]) || array_key_exists("cmp", $context) ? $context["cmp"] : (function () { throw new RuntimeError('Variable "cmp" does not exist.', 37, $this->source); })()))) : ((isset($context["cmp"]) || array_key_exists("cmp", $context) ? $context["cmp"] : (function () { throw new RuntimeError('Variable "cmp" does not exist.', 37, $this->source); })()))), "html", null, true);
            echo "</span>  
                                <span class=\"fw-bold\">";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["quiz"], "question", [], "any", false, false, false, 38);
            echo "</span> 
                            </button>
                        </h6>
                        <div id=\"collapseOne";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingOne";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "\" data-bs-parent=\"#accordionExample\">
                            <div class=\"accordion-body mt-3\">
                                <!-- Answer options -->
                                <p class=\"mb-3\"><b class=\"text-dark\">A</b> ";
            // line 44
            echo twig_get_attribute($this->env, $this->source, $context["quiz"], "proposition1", [], "any", false, false, false, 44);
            echo "</p>
                                <p class=\"mb-3\"><b class=\"text-dark\">B</b> ";
            // line 45
            echo twig_get_attribute($this->env, $this->source, $context["quiz"], "proposition2", [], "any", false, false, false, 45);
            echo "</p>
                                <p class=\"mb-3\"><b class=\"text-dark\">C</b> ";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["quiz"], "proposition3", [], "any", false, false, false, 46);
            echo "</p>
                                <p class=\"mb-3\"><b class=\"text-dark\">D</b> ";
            // line 47
            echo twig_get_attribute($this->env, $this->source, $context["quiz"], "proposition4", [], "any", false, false, false, 47);
            echo "</p>
                                <!-- Button -->
                                ";
            // line 50
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_instructor_courses_quiz_remove", ["reference" => twig_get_attribute($this->env, $this->source, $context["quiz"], "reference", [], "any", false, false, false, 50), "_token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("deletequiz" . twig_get_attribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 50))), "redirect_uri" => (isset($context["deleteRedirectUri"]) || array_key_exists("deleteRedirectUri", $context) ? $context["deleteRedirectUri"] : (function () { throw new RuntimeError('Variable "deleteRedirectUri" does not exist.', 50, $this->source); })())]), "html", null, true);
            echo "\" class=\"btn btn-danger-soft btn-sm mb-0\">Delete</a>
                            </div>
                        </div>
                    </div>
                    ";
            // line 54
            $context["cmp"] = ((isset($context["cmp"]) || array_key_exists("cmp", $context) ? $context["cmp"] : (function () { throw new RuntimeError('Variable "cmp" does not exist.', 54, $this->source); })()) + 1);
            // line 55
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quiz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
            </div>
            <!-- Accordion END -->
            
        </div>
        <!-- Card body START -->
    </div>
    <!-- Card END -->


    <!-- Add course modal START -->
    <div class=\"modal fade\" id=\"addQuiz\" tabindex=\"-1\" aria-labelledby=\"addQuizLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-xl\">
            ";
        // line 69
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), 'form_start');
        echo "
                <div class=\"modal-content\">
                    <div class=\"modal-header bg-dark\">
                        <h5 class=\"modal-title text-white\" id=\"addQuizLabel\">Add New Quiz</h5>
                        <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"row text-start g-3\">

                            <!-- Question -->
                            <div class=\"col-12\">
                                ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "question", [], "any", false, false, false, 80), 'row');
        echo "
                            </div>

                            <!-- Answer options START -->
                            <div class=\"col-12\">
                                ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "proposition1", [], "any", false, false, false, 85), 'row');
        echo "
                            </div>

                            <div class=\"col-12\">
                                ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "proposition2", [], "any", false, false, false, 89), 'row');
        echo "
                            </div>

                            <div class=\"col-12\">
                                ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "proposition3", [], "any", false, false, false, 93), 'row');
        echo "
                            </div>

                            <div class=\"col-12\">
                                ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "proposition4", [], "any", false, false, false, 97), 'row');
        echo "
                            </div>

                            <div class=\"col-md-12\">
                                ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "propositionJuste", [], "any", false, false, false, 101), 'row');
        echo "
                            </div>
                            <!-- Answer options END -->
                        </div>
                    </div>
                    ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), 'rest');
        echo "
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
                        <button type=\"submit\" class=\"btn btn-success my-0\">Add Quiz</button>
                    </div>
                </div>
            ";
        // line 112
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), 'form_end');
        echo "
        </div>
    </div>
    <!-- Add course modal START -->

    ";
        // line 120
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "instructor/courses/quiz/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 120,  293 => 112,  284 => 106,  276 => 101,  269 => 97,  262 => 93,  255 => 89,  248 => 85,  240 => 80,  226 => 69,  211 => 56,  205 => 55,  203 => 54,  195 => 50,  190 => 47,  186 => 46,  182 => 45,  178 => 44,  170 => 41,  164 => 38,  160 => 37,  154 => 36,  150 => 35,  146 => 33,  141 => 32,  139 => 31,  126 => 21,  119 => 17,  110 => 10,  100 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"instructor/base.html.twig\" %}

{% block subTitle %} - Courses {% endblock %}

{% block btnAction %}
    <a href=\"#\" class=\"btn btn-sm btn-primary mb-0\" data-bs-toggle=\"modal\" data-bs-target=\"#addQuiz\">Add New Quiz</a>
{% endblock %}

{% block pageContent %}

    <!-- Card START -->
    <div class=\"card border bg-transparent rounded-3\">
        <!-- Card header START -->
        <div class=\"card-header bg-transparent border-bottom px-3\">
            <div class=\"row g-4 align-items-center\">
                <div class=\"col-md-2\">
                    <img src=\"{{ asset('uploads/media/courses/' ~ imageFile) }}\" class=\"rounded-2\" alt=\"Card image\">
                </div>
                <div class=\"col-md-10\">
                    <!-- Title -->
                    <h3 class=\"card-title mb-0\"><a href=\"#\">{{ title }}</a></h3>
                </div>
            </div>
        </div>
        <!-- Card header END -->

        <!-- Card body START -->
        <div class=\"card-body p-4\">
            <!-- Accordion START -->
            <div class=\"accordion accordion-icon accordion-bg-light\" id=\"accordionExample\">
                {% set cmp = 1 %}
                {% for quiz in quizzes %}
                    <!-- Item -->
                    <div class=\"accordion-item mb-3\">
                        <h6 class=\"accordion-header\" id=\"headingOne{{ quiz.id }}\">
                            <button class=\"accordion-button rounded\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne{{ quiz.id }}\" aria-expanded=\"true\" aria-controls=\"collapseOne{{ quiz.id }}\">
                                <span class=\"text-secondary fw-bold me-3\">{{ cmp < 10 ? '0' ~ cmp : cmp }}</span>  
                                <span class=\"fw-bold\">{{ quiz.question|raw }}</span> 
                            </button>
                        </h6>
                        <div id=\"collapseOne{{ quiz.id }}\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingOne{{ quiz.id }}\" data-bs-parent=\"#accordionExample\">
                            <div class=\"accordion-body mt-3\">
                                <!-- Answer options -->
                                <p class=\"mb-3\"><b class=\"text-dark\">A</b> {{ quiz.proposition1|raw }}</p>
                                <p class=\"mb-3\"><b class=\"text-dark\">B</b> {{ quiz.proposition2|raw }}</p>
                                <p class=\"mb-3\"><b class=\"text-dark\">C</b> {{ quiz.proposition3|raw }}</p>
                                <p class=\"mb-3\"><b class=\"text-dark\">D</b> {{ quiz.proposition4|raw }}</p>
                                <!-- Button -->
                                {# <a href=\"#\" class=\"btn btn-sm btn-success-soft mb-0\" data-bs-toggle=\"modal\" data-bs-target=\"#editQuestion{{ quiz.id }}\">Edit</a> #}
                                <a href=\"{{ url(\"app_instructor_courses_quiz_remove\", {reference: quiz.reference, _token: csrf_token('deletequiz' ~ quiz.id), redirect_uri: deleteRedirectUri}) }}\" class=\"btn btn-danger-soft btn-sm mb-0\">Delete</a>
                            </div>
                        </div>
                    </div>
                    {% set cmp = cmp + 1 %}
                {% endfor %}

            </div>
            <!-- Accordion END -->
            
        </div>
        <!-- Card body START -->
    </div>
    <!-- Card END -->


    <!-- Add course modal START -->
    <div class=\"modal fade\" id=\"addQuiz\" tabindex=\"-1\" aria-labelledby=\"addQuizLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-xl\">
            {{ form_start(form) }}
                <div class=\"modal-content\">
                    <div class=\"modal-header bg-dark\">
                        <h5 class=\"modal-title text-white\" id=\"addQuizLabel\">Add New Quiz</h5>
                        <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"row text-start g-3\">

                            <!-- Question -->
                            <div class=\"col-12\">
                                {{ form_row(form.question) }}
                            </div>

                            <!-- Answer options START -->
                            <div class=\"col-12\">
                                {{ form_row(form.proposition1) }}
                            </div>

                            <div class=\"col-12\">
                                {{ form_row(form.proposition2) }}
                            </div>

                            <div class=\"col-12\">
                                {{ form_row(form.proposition3) }}
                            </div>

                            <div class=\"col-12\">
                                {{ form_row(form.proposition4) }}
                            </div>

                            <div class=\"col-md-12\">
                                {{ form_row(form.propositionJuste) }}
                            </div>
                            <!-- Answer options END -->
                        </div>
                    </div>
                    {{ form_rest(form) }}
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
                        <button type=\"submit\" class=\"btn btn-success my-0\">Add Quiz</button>
                    </div>
                </div>
            {{ form_end(form) }}
        </div>
    </div>
    <!-- Add course modal START -->

    {# {% for quiz in quizzes %}
        {{ include('instructor/courses/quiz/_edit_quiz_modal.html.twig') }}
    {% endfor %} #}

{% endblock %}", "instructor/courses/quiz/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\instructor\\courses\\quiz\\index.html.twig");
    }
}
