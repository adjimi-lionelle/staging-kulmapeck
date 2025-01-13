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

/* front/courses/quiz.html.twig */
class __TwigTemplate_69f92edeabc64dc144d3d0f194fcac16 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'script1' => [$this, 'block_script1'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/courses/quiz.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/courses/quiz.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/courses/quiz.html.twig", 1);
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

        echo " - Quizzes";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/stepper/css/bs-stepper.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 9
    public function block_script1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script1"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script1"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 11
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 12
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/stepper/js/bs-stepper.min.js"), "html", null, true);
        echo "\"></script>
    
    <script>
        const toogleRequiredAttr = (e) => {
            if (\$(e.currentTarget).attr('type') == 'checkbox') {
                if (\$(e.currentTarget).is(':checked')) {
                    \$(e.currentTarget.dataset.parent + ' .btn-quiz-check').attr('required', false)
                } else {
                    let isChecked = false
                    \$(e.currentTarget.dataset.parent + ' .btn-quiz-check').each((index, item) => {
                        if (\$(item).is(':checked')) {
                            isChecked = true
                        }
                    })
                    if (isChecked) {
                        \$(e.currentTarget.dataset.parent + ' .btn-quiz-check').attr('required', false)
                    } else {
                        \$(e.currentTarget.dataset.parent + ' .btn-quiz-check').attr('required', true)
                    }
                }
            }
        }

        document.querySelectorAll('.btn-quiz-check').forEach(item => {
            item.addEventListener(\"change\", toogleRequiredAttr)
        })
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_mainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        // line 42
        echo "
    <!-- =======================
    Page content START -->
    <section class=\"pt-0\">
        <div class=\"container\">
            <div class=\"row\">

                <!-- Main content START -->
                <div class=\"col-xl-12\">
                    <!-- Course item START -->
                    <div class=\"card border\">
        
                            <div class=\"card-header border-bottom\">
                                <!-- Course list START -->
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"card\">
                                            <div class=\"row g-0\">
                                                <div class=\"col-md-2\">
                                                    <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/courses/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 61, $this->source); })()), "media", [], "any", false, false, false, 61), "imageFile", [], "any", false, false, false, 61))), "html", null, true);
        echo "\" class=\"rounded-2\" alt=\"Card image\">
                                                </div>
                                                <div class=\"col-md-10\">
                                                    <div class=\"card-body\">
                                                        <!-- Title -->
                                                        <h3 class=\"card-title\"><a href=\"#\">";
        // line 66
        echo twig_escape_filter($this->env, (( !((isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 66, $this->source); })()) === null)) ? (twig_get_attribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 66, $this->source); })()), "title", [], "any", false, false, false, 66)) : (twig_get_attribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 66, $this->source); })()), "intitule", [], "any", false, false, false, 66))), "html", null, true);
        echo "</a> / QUIZ</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Course list END -->
                            </div>

                            <div class=\"card-body\">
                                <!-- Step content START -->
                                <div class=\"card bg-transparent border rounded-3 mb-1\">
                                    <div id=\"stepper\" class=\"bs-stepper stepper-outline\">
                                        <!-- Card header -->
                                        <div class=\"card-header bg-light border-bottom px-lg-5\">
                                            <!-- Step Buttons START -->
                                            <div class=\"bs-stepper-header\" role=\"tablist\">
                                                ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["quizzes"]) || array_key_exists("quizzes", $context) ? $context["quizzes"] : (function () { throw new RuntimeError('Variable "quizzes" does not exist.', 84, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 85
            echo "                                                    <div class=\"step\" data-target=\"#step-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 85), "html", null, true);
            echo "\">
                                                        <div class=\"d-grid text-center align-items-center\">
                                                            <button type=\"button\" class=\"btn btn-link step-trigger mb-0\" role=\"tab\" id=\"steppertrigger";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 87), "html", null, true);
            echo "\" aria-controls=\"step-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 87), "html", null, true);
            echo "\">
                                                                <span class=\"bs-stepper-circle\">";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 88), "html", null, true);
            echo "</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    ";
            // line 92
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 92)) {
                // line 93
                echo "                                                        <div class=\"line\"></div>
                                                    ";
            }
            // line 95
            echo "                                                ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quiz'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "
                                            </div>
                                            <!-- Step Buttons END -->
                                        </div>
                        
                                        <!-- Card body START -->
                                        <div class=\"card-body\">
                                            ";
        // line 103
        if ( !(isset($context["isCorrectionMode"]) || array_key_exists("isCorrectionMode", $context) ? $context["isCorrectionMode"] : (function () { throw new RuntimeError('Variable "isCorrectionMode" does not exist.', 103, $this->source); })())) {
            // line 104
            echo "                                                <h6 class=\"text-danger text-end mb-0\"><i class=\"bi bi-clock-history me-2\"></i>Time Left: 00:01:30</h6>
                                            ";
        }
        // line 106
        echo "                                            ";
        if ( !((isset($context["lecture"]) || array_key_exists("lecture", $context) ? $context["lecture"] : (function () { throw new RuntimeError('Variable "lecture" does not exist.', 106, $this->source); })()) === null)) {
            // line 107
            echo "                                                <h2 class=\"text-danger text-end mb-0 rounded\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lecture"]) || array_key_exists("lecture", $context) ? $context["lecture"] : (function () { throw new RuntimeError('Variable "lecture" does not exist.', 107, $this->source); })()), "note", [], "any", false, false, false, 107), 2), "html", null, true);
            echo " / 20</h2>
                                            ";
        }
        // line 109
        echo "
                                            <!-- Step content START -->
                                            <div class=\"bs-stepper-content\">
                                                ";
        // line 112
        if ( !(isset($context["isCorrectionMode"]) || array_key_exists("isCorrectionMode", $context) ? $context["isCorrectionMode"] : (function () { throw new RuntimeError('Variable "isCorrectionMode" does not exist.', 112, $this->source); })())) {
            // line 113
            echo "                                                    <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, (isset($context["submitUri"]) || array_key_exists("submitUri", $context) ? $context["submitUri"] : (function () { throw new RuntimeError('Variable "submitUri" does not exist.', 113, $this->source); })()), "html", null, true);
            echo "\" onsubmit=\"return confirm('Confirmez-vous la soumission de ce quiz ?')\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("postquiz" . twig_get_attribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 114, $this->source); })()), "id", [], "any", false, false, false, 114))), "html", null, true);
            echo "\">
                                                        ";
            // line 115
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["quizzes"]) || array_key_exists("quizzes", $context) ? $context["quizzes"] : (function () { throw new RuntimeError('Variable "quizzes" does not exist.', 115, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
                // line 116
                echo "                                                            <div id=\"step-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 116), "html", null, true);
                echo "\" role=\"tabpanel\" class=\"content fade \" aria-labelledby=\"steppertrigger";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 116), "html", null, true);
                echo "\">
                                                                <!-- Title -->
                                                                <h4>";
                // line 118
                echo twig_get_attribute($this->env, $this->source, $context["quiz"], "question", [], "any", false, false, false, 118);
                echo "</h4>
                                                                ";
                // line 119
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "propositionJuste", [], "any", false, false, false, 119)) > 1)) {
                    // line 120
                    echo "                                                                    <div class=\"text-info alert alert-info\"><i class=\"fas fa-info\" style=\"font-size: 2em;\"></i> Plusieurs réponses sont possibles pour cette question</div>
                                                                ";
                }
                // line 122
                echo "                                                                <input type=\"hidden\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 122), "html", null, true);
                echo "\" name=\"quizzes[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 122), "html", null, true);
                echo "][id]\">
                                                                <hr> <!-- Divider -->
                                                                <div class=\"vstack gap-2 ";
                // line 124
                echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "propositionJuste", [], "any", false, false, false, 124)) > 1)) ? ("checkbox") : (""));
                echo "\">
                                                                    <!-- Feed ques item -->
                                                                    <div>
                                                                        <input data-parent=\"#step-";
                // line 127
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 127), "html", null, true);
                echo "\" required type=\"";
                echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "propositionJuste", [], "any", false, false, false, 127)) > 1)) ? ("checkbox") : ("radio"));
                echo "\" class=\"btn-check btn-quiz-check\" value=\"1\" name=\"quizzes[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 127), "html", null, true);
                echo "][reponses][]\" id=\"quiz";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 127), "html", null, true);
                echo "option1\">
                                                                        <label style=\"white-space: normal\" class=\"btn btn-outline-primary w-100\" for=\"quiz";
                // line 128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 128), "html", null, true);
                echo "option1\">";
                echo twig_get_attribute($this->env, $this->source, $context["quiz"], "proposition1", [], "any", false, false, false, 128);
                echo "</label>
                                                                    </div>
                                                                    <!-- Feed ques item -->
                                                                    <div>
                                                                        <input data-parent=\"#step-";
                // line 132
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 132), "html", null, true);
                echo "\" required type=\"";
                echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "propositionJuste", [], "any", false, false, false, 132)) > 1)) ? ("checkbox") : ("radio"));
                echo "\" class=\"btn-check btn-quiz-check\" value=\"2\" name=\"quizzes[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 132), "html", null, true);
                echo "][reponses][]\" id=\"quiz";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 132), "html", null, true);
                echo "option2\">
                                                                        <label style=\"white-space: normal\" class=\"btn btn-outline-primary w-100\" for=\"quiz";
                // line 133
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 133), "html", null, true);
                echo "option2\">";
                echo twig_get_attribute($this->env, $this->source, $context["quiz"], "proposition2", [], "any", false, false, false, 133);
                echo "</label>
                                                                    </div>
                                                                    <!-- Feed ques item -->
                                                                    <div>
                                                                        <input data-parent=\"#step-";
                // line 137
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 137), "html", null, true);
                echo "\" required type=\"";
                echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "propositionJuste", [], "any", false, false, false, 137)) > 1)) ? ("checkbox") : ("radio"));
                echo "\" class=\"btn-check btn-quiz-check\" value=\"3\" name=\"quizzes[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 137), "html", null, true);
                echo "][reponses][]\" id=\"quiz";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 137), "html", null, true);
                echo "option3\">
                                                                        <label style=\"white-space: normal\" class=\"btn btn-outline-primary w-100\" for=\"quiz";
                // line 138
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 138), "html", null, true);
                echo "option3\">";
                echo twig_get_attribute($this->env, $this->source, $context["quiz"], "proposition3", [], "any", false, false, false, 138);
                echo "</label>
                                                                    </div>
                                                                    <!-- Feed ques item -->
                                                                    <div>
                                                                        <input data-parent=\"#step-";
                // line 142
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 142), "html", null, true);
                echo "\" required type=\"";
                echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "propositionJuste", [], "any", false, false, false, 142)) > 1)) ? ("checkbox") : ("radio"));
                echo "\" class=\"btn-check btn-quiz-check\" value=\"4\" name=\"quizzes[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 142), "html", null, true);
                echo "][reponses][]\" id=\"quiz";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 142), "html", null, true);
                echo "option4\">
                                                                        <label style=\"white-space: normal\" class=\"btn btn-outline-primary w-100\" for=\"quiz";
                // line 143
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 143), "html", null, true);
                echo "option4\">";
                echo twig_get_attribute($this->env, $this->source, $context["quiz"], "proposition4", [], "any", false, false, false, 143);
                echo "</label>
                                                                    </div>
                                                                </div>

                                                                <!-- Step button -->
                                                                <div class=\"d-flex justify-content-center mt-3\">
                                                                    ";
                // line 149
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 149)) {
                    // line 150
                    echo "                                                                        <button type=\"button\" class=\"btn btn-danger-soft prev-btn mb-0 \" style=\"margin-right: 15px;\">Prev question</button>
                                                                    ";
                }
                // line 152
                echo "                                                                    ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 152)) {
                    // line 153
                    echo "                                                                        <button type=\"button\" class=\"btn btn-primary-soft next-btn mb-0\">Next question</button>
                                                                    ";
                }
                // line 155
                echo "                                                                    ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 155)) {
                    // line 156
                    echo "                                                                        <button type=\"submit\" name=\"submit\" class=\"btn btn-success-soft mb-0\" style=\"margin-left: 15px;\">Soumettre</button>
                                                                    ";
                }
                // line 158
                echo "                                                                </div>
                                                        
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quiz'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            echo "                                                    </form>
                                                ";
        } else {
            // line 164
            echo "                                                    <div>
                                                        ";
            // line 165
            if ( !((isset($context["nextQuizAt"]) || array_key_exists("nextQuizAt", $context) ? $context["nextQuizAt"] : (function () { throw new RuntimeError('Variable "nextQuizAt" does not exist.', 165, $this->source); })()) === null)) {
                // line 166
                echo "                                                            <div class=\"alert alert-info\">
                                                                <p>Vous pourrez repasser le test à partir de <strong>";
                // line 167
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["nextQuizAt"]) || array_key_exists("nextQuizAt", $context) ? $context["nextQuizAt"] : (function () { throw new RuntimeError('Variable "nextQuizAt" does not exist.', 167, $this->source); })()), "H:i:s"), "html", null, true);
                echo "</strong> le temps pour vous de reviser les parties du cours qui vous ont dérangé</p>
                                                            </div>
                                                        ";
            }
            // line 170
            echo "                                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["quizzesResults"]) || array_key_exists("quizzesResults", $context) ? $context["quizzesResults"] : (function () { throw new RuntimeError('Variable "quizzesResults" does not exist.', 170, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["qr"]) {
                // line 171
                echo "                                                            ";
                $context["quiz"] = twig_get_attribute($this->env, $this->source, $context["qr"], "quiz", [], "any", false, false, false, 171);
                // line 172
                echo "                                                            <div id=\"step-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 172), "html", null, true);
                echo "\" role=\"tabpanel\" class=\"content fade \" aria-labelledby=\"steppertrigger";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 172), "html", null, true);
                echo "\">
                                                                <!-- Title -->
                                                                <h4>";
                // line 174
                echo twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 174, $this->source); })()), "question", [], "any", false, false, false, 174);
                echo "</h4>
                                                                ";
                // line 175
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 175, $this->source); })()), "propositionJuste", [], "any", false, false, false, 175)) > 1)) {
                    // line 176
                    echo "                                                                    <div class=\"text-info alert alert-info\"><i class=\"fas fa-info\" style=\"font-size: 2em;\"></i>";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("MANY_ANSWERS_POSSIBLE_KEY", [], "messages");
                    echo "</div>
                                                                ";
                }
                // line 178
                echo "                                                                <hr> <!-- Divider -->
                                                                <div class=\"vstack gap-2\">
                                                                    <!-- Feed ques item -->
                                                                    <div>
                                                                        ";
                // line 182
                $context["className"] = "btn-outline-primary";
                // line 183
                echo "                                                                        ";
                $context["value"] = 1;
                // line 184
                echo "                                                                        ";
                if ((twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 184, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 184, $this->source); })()), "propositionJuste", [], "any", false, false, false, 184)) && twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 184, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["qr"], "result", [], "any", false, false, false, 184)))) {
                    // line 185
                    echo "                                                                            ";
                    $context["className"] = "btn-success";
                    // line 186
                    echo "                                                                        ";
                } elseif ((twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 186, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 186, $this->source); })()), "propositionJuste", [], "any", false, false, false, 186)) && !twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 186, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["qr"], "result", [], "any", false, false, false, 186)))) {
                    // line 187
                    echo "                                                                            ";
                    $context["className"] = "btn-secondary";
                    // line 188
                    echo "                                                                        ";
                } elseif ((!twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 188, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 188, $this->source); })()), "propositionJuste", [], "any", false, false, false, 188)) && twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 188, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["qr"], "result", [], "any", false, false, false, 188)))) {
                    // line 189
                    echo "                                                                            ";
                    $context["className"] = "btn-danger";
                    // line 190
                    echo "                                                                        ";
                }
                // line 191
                echo "                                                                        <input disabled ";
                echo ((twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 191, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 191, $this->source); })()), "propositionJuste", [], "any", false, false, false, 191))) ? ("checked") : (""));
                echo " required type=\"";
                echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 191, $this->source); })()), "propositionJuste", [], "any", false, false, false, 191)) > 1)) ? ("checkbox") : ("radio"));
                echo "\" class=\"btn-check\" id=\"quiz";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 191, $this->source); })()), "id", [], "any", false, false, false, 191), "html", null, true);
                echo "option1\">
                                                                        <label style=\"white-space: normal\" class=\"btn ";
                // line 192
                echo twig_escape_filter($this->env, (isset($context["className"]) || array_key_exists("className", $context) ? $context["className"] : (function () { throw new RuntimeError('Variable "className" does not exist.', 192, $this->source); })()), "html", null, true);
                echo " w-100\" for=\"quiz";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 192, $this->source); })()), "id", [], "any", false, false, false, 192), "html", null, true);
                echo "option1\">";
                echo twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 192, $this->source); })()), "proposition1", [], "any", false, false, false, 192);
                echo "</label>
                                                                    </div>
                                                                    <!-- Feed ques item -->
                                                                    <div>
                                                                        ";
                // line 196
                $context["value"] = 2;
                // line 197
                echo "                                                                        ";
                $context["className"] = "btn-outline-primary";
                // line 198
                echo "                                                                        ";
                if ((twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 198, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 198, $this->source); })()), "propositionJuste", [], "any", false, false, false, 198)) && twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 198, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["qr"], "result", [], "any", false, false, false, 198)))) {
                    // line 199
                    echo "                                                                            ";
                    $context["className"] = "btn-success";
                    // line 200
                    echo "                                                                        ";
                } elseif ((twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 200, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 200, $this->source); })()), "propositionJuste", [], "any", false, false, false, 200)) && !twig_in_filter( !(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 200, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["qr"], "result", [], "any", false, false, false, 200)))) {
                    // line 201
                    echo "                                                                            ";
                    $context["className"] = "btn-secondary";
                    // line 202
                    echo "                                                                        ";
                } elseif ((!twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 202, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 202, $this->source); })()), "propositionJuste", [], "any", false, false, false, 202)) && twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 202, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["qr"], "result", [], "any", false, false, false, 202)))) {
                    // line 203
                    echo "                                                                            ";
                    $context["className"] = "btn-danger";
                    // line 204
                    echo "                                                                        ";
                }
                // line 205
                echo "                                                                        <input disabled ";
                echo ((twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 205, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 205, $this->source); })()), "propositionJuste", [], "any", false, false, false, 205))) ? ("checked") : (""));
                echo " required type=\"";
                echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 205, $this->source); })()), "propositionJuste", [], "any", false, false, false, 205)) > 1)) ? ("checkbox") : ("radio"));
                echo "\" class=\"btn-check\" value=\"2\" name=\"quizzes[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 205), "html", null, true);
                echo "][reponses][]\" id=\"quiz";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 205, $this->source); })()), "id", [], "any", false, false, false, 205), "html", null, true);
                echo "option2\">
                                                                        <label style=\"white-space: normal\" class=\"btn ";
                // line 206
                echo twig_escape_filter($this->env, (isset($context["className"]) || array_key_exists("className", $context) ? $context["className"] : (function () { throw new RuntimeError('Variable "className" does not exist.', 206, $this->source); })()), "html", null, true);
                echo " w-100\" for=\"quiz";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 206, $this->source); })()), "id", [], "any", false, false, false, 206), "html", null, true);
                echo "option2\">";
                echo twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 206, $this->source); })()), "proposition2", [], "any", false, false, false, 206);
                echo "</label>
                                                                    </div>
                                                                    <!-- Feed ques item -->
                                                                    <div>
                                                                        ";
                // line 210
                $context["value"] = 3;
                // line 211
                echo "                                                                        ";
                $context["className"] = "btn-outline-primary";
                // line 212
                echo "                                                                        ";
                if ((twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 212, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 212, $this->source); })()), "propositionJuste", [], "any", false, false, false, 212)) && twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 212, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["qr"], "result", [], "any", false, false, false, 212)))) {
                    // line 213
                    echo "                                                                            ";
                    $context["className"] = "btn-success";
                    // line 214
                    echo "                                                                        ";
                } elseif ((twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 214, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 214, $this->source); })()), "propositionJuste", [], "any", false, false, false, 214)) && !twig_in_filter( !(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 214, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["qr"], "result", [], "any", false, false, false, 214)))) {
                    // line 215
                    echo "                                                                            ";
                    $context["className"] = "btn-secondary";
                    // line 216
                    echo "                                                                        ";
                } elseif ((!twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 216, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 216, $this->source); })()), "propositionJuste", [], "any", false, false, false, 216)) && twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 216, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["qr"], "result", [], "any", false, false, false, 216)))) {
                    // line 217
                    echo "                                                                            ";
                    $context["className"] = "btn-danger";
                    // line 218
                    echo "                                                                        ";
                }
                // line 219
                echo "                                                                        <input disabled ";
                echo ((twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 219, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 219, $this->source); })()), "propositionJuste", [], "any", false, false, false, 219))) ? ("checked") : (""));
                echo " required type=\"";
                echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 219, $this->source); })()), "propositionJuste", [], "any", false, false, false, 219)) > 1)) ? ("checkbox") : ("radio"));
                echo "\" class=\"btn-check\" value=\"3\" name=\"quizzes[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 219), "html", null, true);
                echo "][reponses][]\" id=\"quiz";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 219, $this->source); })()), "id", [], "any", false, false, false, 219), "html", null, true);
                echo "option3\">
                                                                        <label style=\"white-space: normal\" class=\"btn ";
                // line 220
                echo twig_escape_filter($this->env, (isset($context["className"]) || array_key_exists("className", $context) ? $context["className"] : (function () { throw new RuntimeError('Variable "className" does not exist.', 220, $this->source); })()), "html", null, true);
                echo " w-100\" for=\"quiz";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 220, $this->source); })()), "id", [], "any", false, false, false, 220), "html", null, true);
                echo "option3\">";
                echo twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 220, $this->source); })()), "proposition3", [], "any", false, false, false, 220);
                echo "</label>
                                                                    </div>
                                                                    <!-- Feed ques item -->
                                                                    <div>
                                                                        ";
                // line 224
                $context["value"] = 4;
                // line 225
                echo "                                                                        ";
                $context["className"] = "btn-outline-primary";
                // line 226
                echo "                                                                        ";
                if ((twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 226, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 226, $this->source); })()), "propositionJuste", [], "any", false, false, false, 226)) && twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 226, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["qr"], "result", [], "any", false, false, false, 226)))) {
                    // line 227
                    echo "                                                                            ";
                    $context["className"] = "btn-success";
                    // line 228
                    echo "                                                                        ";
                } elseif ((twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 228, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 228, $this->source); })()), "propositionJuste", [], "any", false, false, false, 228)) && !twig_in_filter( !(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 228, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["qr"], "result", [], "any", false, false, false, 228)))) {
                    // line 229
                    echo "                                                                            ";
                    $context["className"] = "btn-secondary";
                    // line 230
                    echo "                                                                        ";
                } elseif ((!twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 230, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 230, $this->source); })()), "propositionJuste", [], "any", false, false, false, 230)) && twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 230, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["qr"], "result", [], "any", false, false, false, 230)))) {
                    // line 231
                    echo "                                                                            ";
                    $context["className"] = "btn-danger";
                    // line 232
                    echo "                                                                        ";
                }
                // line 233
                echo "                                                                        <input disabled ";
                echo ((twig_in_filter((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 233, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 233, $this->source); })()), "propositionJuste", [], "any", false, false, false, 233))) ? ("checked") : (""));
                echo " required type=\"";
                echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 233, $this->source); })()), "propositionJuste", [], "any", false, false, false, 233)) > 1)) ? ("checkbox") : ("radio"));
                echo "\" class=\"btn-check\" value=\"4\" name=\"quizzes[";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 233), "html", null, true);
                echo "][reponses][]\" id=\"quiz";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 233, $this->source); })()), "id", [], "any", false, false, false, 233), "html", null, true);
                echo "option4\">
                                                                        <label style=\"white-space: normal\" class=\"btn ";
                // line 234
                echo twig_escape_filter($this->env, (isset($context["className"]) || array_key_exists("className", $context) ? $context["className"] : (function () { throw new RuntimeError('Variable "className" does not exist.', 234, $this->source); })()), "html", null, true);
                echo " w-100\" for=\"quiz";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 234, $this->source); })()), "id", [], "any", false, false, false, 234), "html", null, true);
                echo "option4\">";
                echo twig_get_attribute($this->env, $this->source, (isset($context["quiz"]) || array_key_exists("quiz", $context) ? $context["quiz"] : (function () { throw new RuntimeError('Variable "quiz" does not exist.', 234, $this->source); })()), "proposition4", [], "any", false, false, false, 234);
                echo "</label>
                                                                    </div>
                                                                </div>

                                                                <!-- Step button -->
                                                                <div class=\"d-flex justify-content-center mt-3\">
                                                                    ";
                // line 240
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 240)) {
                    // line 241
                    echo "                                                                        <button type=\"button\" class=\"btn btn-danger-soft prev-btn mb-0 \" style=\"margin-right: 15px;\">";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PREV_KEY", [], "messages");
                    echo "</button>
                                                                    ";
                }
                // line 243
                echo "                                                                    ";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 243)) {
                    // line 244
                    echo "                                                                        <button type=\"button\" class=\"btn btn-primary-soft next-btn mb-0\">";
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("NEXT_KEY", [], "messages");
                    echo "</button>
                                                                    ";
                }
                // line 246
                echo "                                                                </div>
                                                        
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 250
            echo "                                                    </div>
                                                ";
        }
        // line 252
        echo "                                            </div>
                                        </div>
                                        ";
        // line 254
        if ((isset($context["isCorrectionMode"]) || array_key_exists("isCorrectionMode", $context) ? $context["isCorrectionMode"] : (function () { throw new RuntimeError('Variable "isCorrectionMode" does not exist.', 254, $this->source); })())) {
            // line 255
            echo "                                            <div class=\"card-footer\">
                                                <a class=\"btn btn-primary-soft\" href=\"";
            // line 256
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_course_start", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 256, $this->source); })()), "slug", [], "any", false, false, false, 256)]), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("BACK_TO_COURSE_KEY", [], "messages");
            echo "Back to course</a>
                                            </div>
                                        ";
        }
        // line 259
        echo "                                        <!-- Card body END -->
                                    </div>
                                </div>\t\t
                            </div>
                        
                    </div>
                    <!-- Course item END -->

                </div>
                <!-- Main content END -->

            </div> <!-- Row END -->
        </div>\t
    </section>
    <!-- =======================
    Page content END -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/courses/quiz.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  803 => 259,  795 => 256,  792 => 255,  790 => 254,  786 => 252,  782 => 250,  765 => 246,  759 => 244,  756 => 243,  750 => 241,  748 => 240,  735 => 234,  724 => 233,  721 => 232,  718 => 231,  715 => 230,  712 => 229,  709 => 228,  706 => 227,  703 => 226,  700 => 225,  698 => 224,  687 => 220,  676 => 219,  673 => 218,  670 => 217,  667 => 216,  664 => 215,  661 => 214,  658 => 213,  655 => 212,  652 => 211,  650 => 210,  639 => 206,  628 => 205,  625 => 204,  622 => 203,  619 => 202,  616 => 201,  613 => 200,  610 => 199,  607 => 198,  604 => 197,  602 => 196,  591 => 192,  582 => 191,  579 => 190,  576 => 189,  573 => 188,  570 => 187,  567 => 186,  564 => 185,  561 => 184,  558 => 183,  556 => 182,  550 => 178,  544 => 176,  542 => 175,  538 => 174,  530 => 172,  527 => 171,  509 => 170,  503 => 167,  500 => 166,  498 => 165,  495 => 164,  491 => 162,  474 => 158,  470 => 156,  467 => 155,  463 => 153,  460 => 152,  456 => 150,  454 => 149,  443 => 143,  433 => 142,  424 => 138,  414 => 137,  405 => 133,  395 => 132,  386 => 128,  376 => 127,  370 => 124,  362 => 122,  358 => 120,  356 => 119,  352 => 118,  344 => 116,  327 => 115,  323 => 114,  318 => 113,  316 => 112,  311 => 109,  305 => 107,  302 => 106,  298 => 104,  296 => 103,  287 => 96,  273 => 95,  269 => 93,  267 => 92,  260 => 88,  254 => 87,  248 => 85,  231 => 84,  210 => 66,  202 => 61,  181 => 42,  171 => 41,  132 => 12,  122 => 11,  104 => 9,  91 => 6,  81 => 5,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"front/base.html.twig\" %}

{% block title %} - Quizzes{% endblock %}

{% block stylesheet %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/stepper/css/bs-stepper.min.css') }}\">
{% endblock %}

{% block script1 %}{% endblock %}

{% block script %}
    <script src=\"{{ asset('assets/vendor/stepper/js/bs-stepper.min.js') }}\"></script>
    
    <script>
        const toogleRequiredAttr = (e) => {
            if (\$(e.currentTarget).attr('type') == 'checkbox') {
                if (\$(e.currentTarget).is(':checked')) {
                    \$(e.currentTarget.dataset.parent + ' .btn-quiz-check').attr('required', false)
                } else {
                    let isChecked = false
                    \$(e.currentTarget.dataset.parent + ' .btn-quiz-check').each((index, item) => {
                        if (\$(item).is(':checked')) {
                            isChecked = true
                        }
                    })
                    if (isChecked) {
                        \$(e.currentTarget.dataset.parent + ' .btn-quiz-check').attr('required', false)
                    } else {
                        \$(e.currentTarget.dataset.parent + ' .btn-quiz-check').attr('required', true)
                    }
                }
            }
        }

        document.querySelectorAll('.btn-quiz-check').forEach(item => {
            item.addEventListener(\"change\", toogleRequiredAttr)
        })
    </script>
{% endblock %}

{% block mainContent %}

    <!-- =======================
    Page content START -->
    <section class=\"pt-0\">
        <div class=\"container\">
            <div class=\"row\">

                <!-- Main content START -->
                <div class=\"col-xl-12\">
                    <!-- Course item START -->
                    <div class=\"card border\">
        
                            <div class=\"card-header border-bottom\">
                                <!-- Course list START -->
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <div class=\"card\">
                                            <div class=\"row g-0\">
                                                <div class=\"col-md-2\">
                                                    <img src=\"{{ asset('uploads/media/courses/' ~ cours.media.imageFile) }}\" class=\"rounded-2\" alt=\"Card image\">
                                                </div>
                                                <div class=\"col-md-10\">
                                                    <div class=\"card-body\">
                                                        <!-- Title -->
                                                        <h3 class=\"card-title\"><a href=\"#\">{{ chapitre is not same as null ? chapitre.title : cours.intitule }}</a> / QUIZ</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Course list END -->
                            </div>

                            <div class=\"card-body\">
                                <!-- Step content START -->
                                <div class=\"card bg-transparent border rounded-3 mb-1\">
                                    <div id=\"stepper\" class=\"bs-stepper stepper-outline\">
                                        <!-- Card header -->
                                        <div class=\"card-header bg-light border-bottom px-lg-5\">
                                            <!-- Step Buttons START -->
                                            <div class=\"bs-stepper-header\" role=\"tablist\">
                                                {% for quiz in quizzes %}
                                                    <div class=\"step\" data-target=\"#step-{{ loop.index }}\">
                                                        <div class=\"d-grid text-center align-items-center\">
                                                            <button type=\"button\" class=\"btn btn-link step-trigger mb-0\" role=\"tab\" id=\"steppertrigger{{ loop.index }}\" aria-controls=\"step-{{ loop.index }}\">
                                                                <span class=\"bs-stepper-circle\">{{ loop.index }}</span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    {% if not loop.last %}
                                                        <div class=\"line\"></div>
                                                    {% endif %}
                                                {% endfor %}

                                            </div>
                                            <!-- Step Buttons END -->
                                        </div>
                        
                                        <!-- Card body START -->
                                        <div class=\"card-body\">
                                            {% if not isCorrectionMode %}
                                                <h6 class=\"text-danger text-end mb-0\"><i class=\"bi bi-clock-history me-2\"></i>Time Left: 00:01:30</h6>
                                            {% endif %}
                                            {% if lecture is not same as null %}
                                                <h2 class=\"text-danger text-end mb-0 rounded\">{{ lecture.note|number_format(2) }} / 20</h2>
                                            {% endif %}

                                            <!-- Step content START -->
                                            <div class=\"bs-stepper-content\">
                                                {% if not isCorrectionMode %}
                                                    <form method=\"post\" action=\"{{ submitUri }}\" onsubmit=\"return confirm('Confirmez-vous la soumission de ce quiz ?')\">
                                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('postquiz' ~ cours.id) }}\">
                                                        {% for quiz in quizzes %}
                                                            <div id=\"step-{{ loop.index }}\" role=\"tabpanel\" class=\"content fade \" aria-labelledby=\"steppertrigger{{ loop.index }}\">
                                                                <!-- Title -->
                                                                <h4>{{ quiz.question|raw }}</h4>
                                                                {% if quiz.propositionJuste|length > 1 %}
                                                                    <div class=\"text-info alert alert-info\"><i class=\"fas fa-info\" style=\"font-size: 2em;\"></i> Plusieurs réponses sont possibles pour cette question</div>
                                                                {% endif %}
                                                                <input type=\"hidden\" value=\"{{ quiz.id }}\" name=\"quizzes[{{ loop.index }}][id]\">
                                                                <hr> <!-- Divider -->
                                                                <div class=\"vstack gap-2 {{ quiz.propositionJuste|length > 1 ? 'checkbox' : ''}}\">
                                                                    <!-- Feed ques item -->
                                                                    <div>
                                                                        <input data-parent=\"#step-{{ loop.index }}\" required type=\"{{ quiz.propositionJuste|length > 1 ? 'checkbox' : 'radio'}}\" class=\"btn-check btn-quiz-check\" value=\"1\" name=\"quizzes[{{ loop.index }}][reponses][]\" id=\"quiz{{ quiz.id }}option1\">
                                                                        <label style=\"white-space: normal\" class=\"btn btn-outline-primary w-100\" for=\"quiz{{ quiz.id }}option1\">{{ quiz.proposition1|raw }}</label>
                                                                    </div>
                                                                    <!-- Feed ques item -->
                                                                    <div>
                                                                        <input data-parent=\"#step-{{ loop.index }}\" required type=\"{{ quiz.propositionJuste|length > 1 ? 'checkbox' : 'radio'}}\" class=\"btn-check btn-quiz-check\" value=\"2\" name=\"quizzes[{{ loop.index }}][reponses][]\" id=\"quiz{{ quiz.id }}option2\">
                                                                        <label style=\"white-space: normal\" class=\"btn btn-outline-primary w-100\" for=\"quiz{{ quiz.id }}option2\">{{ quiz.proposition2|raw }}</label>
                                                                    </div>
                                                                    <!-- Feed ques item -->
                                                                    <div>
                                                                        <input data-parent=\"#step-{{ loop.index }}\" required type=\"{{ quiz.propositionJuste|length > 1 ? 'checkbox' : 'radio'}}\" class=\"btn-check btn-quiz-check\" value=\"3\" name=\"quizzes[{{ loop.index }}][reponses][]\" id=\"quiz{{ quiz.id }}option3\">
                                                                        <label style=\"white-space: normal\" class=\"btn btn-outline-primary w-100\" for=\"quiz{{ quiz.id }}option3\">{{ quiz.proposition3|raw }}</label>
                                                                    </div>
                                                                    <!-- Feed ques item -->
                                                                    <div>
                                                                        <input data-parent=\"#step-{{ loop.index }}\" required type=\"{{ quiz.propositionJuste|length > 1 ? 'checkbox' : 'radio'}}\" class=\"btn-check btn-quiz-check\" value=\"4\" name=\"quizzes[{{ loop.index }}][reponses][]\" id=\"quiz{{ quiz.id }}option4\">
                                                                        <label style=\"white-space: normal\" class=\"btn btn-outline-primary w-100\" for=\"quiz{{ quiz.id }}option4\">{{ quiz.proposition4|raw }}</label>
                                                                    </div>
                                                                </div>

                                                                <!-- Step button -->
                                                                <div class=\"d-flex justify-content-center mt-3\">
                                                                    {% if not loop.first %}
                                                                        <button type=\"button\" class=\"btn btn-danger-soft prev-btn mb-0 \" style=\"margin-right: 15px;\">Prev question</button>
                                                                    {% endif %}
                                                                    {% if not loop.last %}
                                                                        <button type=\"button\" class=\"btn btn-primary-soft next-btn mb-0\">Next question</button>
                                                                    {% endif %}
                                                                    {% if loop.last %}
                                                                        <button type=\"submit\" name=\"submit\" class=\"btn btn-success-soft mb-0\" style=\"margin-left: 15px;\">Soumettre</button>
                                                                    {% endif %}
                                                                </div>
                                                        
                                                            </div>
                                                        {% endfor %}
                                                    </form>
                                                {% else %}
                                                    <div>
                                                        {% if nextQuizAt is not same as null %}
                                                            <div class=\"alert alert-info\">
                                                                <p>Vous pourrez repasser le test à partir de <strong>{{ nextQuizAt|date('H:i:s') }}</strong> le temps pour vous de reviser les parties du cours qui vous ont dérangé</p>
                                                            </div>
                                                        {% endif %}
                                                        {% for qr in quizzesResults %}
                                                            {% set quiz = qr.quiz %}
                                                            <div id=\"step-{{ loop.index }}\" role=\"tabpanel\" class=\"content fade \" aria-labelledby=\"steppertrigger{{ loop.index }}\">
                                                                <!-- Title -->
                                                                <h4>{{ quiz.question|raw }}</h4>
                                                                {% if quiz.propositionJuste|length > 1 %}
                                                                    <div class=\"text-info alert alert-info\"><i class=\"fas fa-info\" style=\"font-size: 2em;\"></i>{% trans %}MANY_ANSWERS_POSSIBLE_KEY{% endtrans %}</div>
                                                                {% endif %}
                                                                <hr> <!-- Divider -->
                                                                <div class=\"vstack gap-2\">
                                                                    <!-- Feed ques item -->
                                                                    <div>
                                                                        {% set className = 'btn-outline-primary' %}
                                                                        {% set value = 1 %}
                                                                        {% if value in quiz.propositionJuste and value in qr.result %}
                                                                            {% set className = 'btn-success' %}
                                                                        {% elseif value in quiz.propositionJuste and value not in qr.result %}
                                                                            {% set className = 'btn-secondary' %}
                                                                        {% elseif value not in quiz.propositionJuste and value in qr.result %}
                                                                            {% set className = 'btn-danger' %}
                                                                        {% endif %}
                                                                        <input disabled {{ value in quiz.propositionJuste ? 'checked' : '' }} required type=\"{{ quiz.propositionJuste|length > 1 ? 'checkbox' : 'radio'}}\" class=\"btn-check\" id=\"quiz{{ quiz.id }}option1\">
                                                                        <label style=\"white-space: normal\" class=\"btn {{ className }} w-100\" for=\"quiz{{ quiz.id }}option1\">{{ quiz.proposition1|raw }}</label>
                                                                    </div>
                                                                    <!-- Feed ques item -->
                                                                    <div>
                                                                        {% set value = 2 %}
                                                                        {% set className = 'btn-outline-primary' %}
                                                                        {% if value in quiz.propositionJuste and value in qr.result %}
                                                                            {% set className = 'btn-success' %}
                                                                        {% elseif value in quiz.propositionJuste and not value not in qr.result %}
                                                                            {% set className = 'btn-secondary' %}
                                                                        {% elseif value not in quiz.propositionJuste and value in qr.result %}
                                                                            {% set className = 'btn-danger' %}
                                                                        {% endif %}
                                                                        <input disabled {{ value in quiz.propositionJuste ? 'checked' : '' }} required type=\"{{ quiz.propositionJuste|length > 1 ? 'checkbox' : 'radio'}}\" class=\"btn-check\" value=\"2\" name=\"quizzes[{{ loop.index }}][reponses][]\" id=\"quiz{{ quiz.id }}option2\">
                                                                        <label style=\"white-space: normal\" class=\"btn {{ className }} w-100\" for=\"quiz{{ quiz.id }}option2\">{{ quiz.proposition2|raw }}</label>
                                                                    </div>
                                                                    <!-- Feed ques item -->
                                                                    <div>
                                                                        {% set value = 3 %}
                                                                        {% set className = 'btn-outline-primary' %}
                                                                        {% if value in quiz.propositionJuste and value in qr.result %}
                                                                            {% set className = 'btn-success' %}
                                                                        {% elseif value in quiz.propositionJuste and not value not in qr.result %}
                                                                            {% set className = 'btn-secondary' %}
                                                                        {% elseif value not in quiz.propositionJuste and value in qr.result %}
                                                                            {% set className = 'btn-danger' %}
                                                                        {% endif %}
                                                                        <input disabled {{ value in quiz.propositionJuste ? 'checked' : '' }} required type=\"{{ quiz.propositionJuste|length > 1 ? 'checkbox' : 'radio'}}\" class=\"btn-check\" value=\"3\" name=\"quizzes[{{ loop.index }}][reponses][]\" id=\"quiz{{ quiz.id }}option3\">
                                                                        <label style=\"white-space: normal\" class=\"btn {{ className }} w-100\" for=\"quiz{{ quiz.id }}option3\">{{ quiz.proposition3|raw }}</label>
                                                                    </div>
                                                                    <!-- Feed ques item -->
                                                                    <div>
                                                                        {% set value = 4 %}
                                                                        {% set className = 'btn-outline-primary' %}
                                                                        {% if value in quiz.propositionJuste and value in qr.result %}
                                                                            {% set className = 'btn-success' %}
                                                                        {% elseif value in quiz.propositionJuste and not value not in qr.result %}
                                                                            {% set className = 'btn-secondary' %}
                                                                        {% elseif  value not in quiz.propositionJuste and value in qr.result %}
                                                                            {% set className = 'btn-danger' %}
                                                                        {% endif %}
                                                                        <input disabled {{ value in quiz.propositionJuste ? 'checked' : '' }} required type=\"{{ quiz.propositionJuste|length > 1 ? 'checkbox' : 'radio'}}\" class=\"btn-check\" value=\"4\" name=\"quizzes[{{ loop.index }}][reponses][]\" id=\"quiz{{ quiz.id }}option4\">
                                                                        <label style=\"white-space: normal\" class=\"btn {{ className }} w-100\" for=\"quiz{{ quiz.id }}option4\">{{ quiz.proposition4|raw }}</label>
                                                                    </div>
                                                                </div>

                                                                <!-- Step button -->
                                                                <div class=\"d-flex justify-content-center mt-3\">
                                                                    {% if not loop.first %}
                                                                        <button type=\"button\" class=\"btn btn-danger-soft prev-btn mb-0 \" style=\"margin-right: 15px;\">{% trans %}PREV_KEY{% endtrans %}</button>
                                                                    {% endif %}
                                                                    {% if not loop.last %}
                                                                        <button type=\"button\" class=\"btn btn-primary-soft next-btn mb-0\">{% trans %}NEXT_KEY{% endtrans %}</button>
                                                                    {% endif %}
                                                                </div>
                                                        
                                                            </div>
                                                        {% endfor %}
                                                    </div>
                                                {% endif %}
                                            </div>
                                        </div>
                                        {% if isCorrectionMode %}
                                            <div class=\"card-footer\">
                                                <a class=\"btn btn-primary-soft\" href=\"{{ url(\"app_front_course_start\", {slug: cours.slug}) }}\">{% trans %}BACK_TO_COURSE_KEY{% endtrans %}Back to course</a>
                                            </div>
                                        {% endif %}
                                        <!-- Card body END -->
                                    </div>
                                </div>\t\t
                            </div>
                        
                    </div>
                    <!-- Course item END -->

                </div>
                <!-- Main content END -->

            </div> <!-- Row END -->
        </div>\t
    </section>
    <!-- =======================
    Page content END -->
{% endblock %}
", "front/courses/quiz.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\courses\\quiz.html.twig");
    }
}
