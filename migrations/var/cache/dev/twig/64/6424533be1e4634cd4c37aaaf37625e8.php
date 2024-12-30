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

/* admin/evaluation_question/_questions.html.twig */
class __TwigTemplate_c62e0886d5f7f5421b087f6b868f6dd0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/evaluation_question/_questions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/evaluation_question/_questions.html.twig"));

        // line 1
        echo "<div class=\"card border bg-transparent rounded-3\">
    <div class=\"card-body p-4\">
        <div class=\"accordion accordion-icon accordion-bg-light\" id=\"accordionExample\">
            ";
        // line 4
        $context["cmp"] = 1;
        // line 5
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["evaluation_questions"]) || array_key_exists("evaluation_questions", $context) ? $context["evaluation_questions"] : (function () { throw new RuntimeError('Variable "evaluation_questions" does not exist.', 5, $this->source); })()));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["evaluation_question"]) {
            // line 6
            echo "                <div class=\"accordion-item mb-3\">
                    <h6 class=\"accordion-header\" id=\"headingOne";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evaluation_question"], "id", [], "any", false, false, false, 7), "html", null, true);
            echo "\">
                        <button class=\"accordion-button rounded\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evaluation_question"], "id", [], "any", false, false, false, 8), "html", null, true);
            echo "\" aria-expanded=\"true\" aria-controls=\"collapseOne";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evaluation_question"], "id", [], "any", false, false, false, 8), "html", null, true);
            echo "\">
                            <span class=\"text-secondary fw-bold me-3\">";
            // line 9
            echo twig_escape_filter($this->env, ((((isset($context["cmp"]) || array_key_exists("cmp", $context) ? $context["cmp"] : (function () { throw new RuntimeError('Variable "cmp" does not exist.', 9, $this->source); })()) < 10)) ? (("0" . (isset($context["cmp"]) || array_key_exists("cmp", $context) ? $context["cmp"] : (function () { throw new RuntimeError('Variable "cmp" does not exist.', 9, $this->source); })()))) : ((isset($context["cmp"]) || array_key_exists("cmp", $context) ? $context["cmp"] : (function () { throw new RuntimeError('Variable "cmp" does not exist.', 9, $this->source); })()))), "html", null, true);
            echo "</span>  
                            <span class=\"fw-bold\">";
            // line 10
            echo twig_get_attribute($this->env, $this->source, $context["evaluation_question"], "question", [], "any", false, false, false, 10);
            echo "</span> 
                        </button>
                    </h6>
                    <div id=\"collapseOne";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evaluation_question"], "id", [], "any", false, false, false, 13), "html", null, true);
            echo "\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingOne";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["evaluation_question"], "id", [], "any", false, false, false, 13), "html", null, true);
            echo "\" data-bs-parent=\"#accordionExample\">
                        <div class=\"accordion-body mt-3\">
                            <!-- Answer options -->
                            <p class=\"mb-3\"><b class=\"text-dark\">A</b> ";
            // line 16
            echo twig_get_attribute($this->env, $this->source, $context["evaluation_question"], "proposition1", [], "any", false, false, false, 16);
            echo "</p>
                            <hr>
                            <p class=\"mb-3\"><b class=\"text-dark\">B</b> ";
            // line 18
            echo twig_get_attribute($this->env, $this->source, $context["evaluation_question"], "proposition2", [], "any", false, false, false, 18);
            echo "</p>
                            <hr>
                            <p class=\"mb-3\"><b class=\"text-dark\">C</b> ";
            // line 20
            echo twig_get_attribute($this->env, $this->source, $context["evaluation_question"], "proposition3", [], "any", false, false, false, 20);
            echo "</p>
                            <hr>
                            <p class=\"mb-3\"><b class=\"text-dark\">D</b> ";
            // line 22
            echo twig_get_attribute($this->env, $this->source, $context["evaluation_question"], "proposition4", [], "any", false, false, false, 22);
            echo "</p>
                            <!-- Button -->
                            ";
            // line 24
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["evaluation_question"], "evaluation", [], "any", false, false, false, 24), "isPassed", [], "any", false, false, false, 24)) {
                // line 25
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_admin_evaluation_question_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["evaluation_question"], "id", [], "any", false, false, false, 25)]), "html", null, true);
                echo "\" class=\"btn btn-sm btn-warning-soft mb-0\">modifier</a>
                                ";
                // line 26
                echo twig_include($this->env, $context, "admin/evaluation_question/_delete_form.html.twig");
                echo "
                            ";
            }
            // line 28
            echo "                        </div>
                    </div>
                </div>

                ";
            // line 32
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 32)) {
                // line 33
                echo "                    <hr>
                ";
            }
            // line 35
            echo "            ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 36
            echo "                <hr>
                <h1>Liste vide</h1>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evaluation_question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/evaluation_question/_questions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 39,  157 => 36,  144 => 35,  140 => 33,  138 => 32,  132 => 28,  127 => 26,  122 => 25,  120 => 24,  115 => 22,  110 => 20,  105 => 18,  100 => 16,  92 => 13,  86 => 10,  82 => 9,  76 => 8,  72 => 7,  69 => 6,  50 => 5,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card border bg-transparent rounded-3\">
    <div class=\"card-body p-4\">
        <div class=\"accordion accordion-icon accordion-bg-light\" id=\"accordionExample\">
            {% set cmp = 1 %}
            {% for evaluation_question in evaluation_questions %}
                <div class=\"accordion-item mb-3\">
                    <h6 class=\"accordion-header\" id=\"headingOne{{ evaluation_question.id }}\">
                        <button class=\"accordion-button rounded\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapseOne{{ evaluation_question.id }}\" aria-expanded=\"true\" aria-controls=\"collapseOne{{ evaluation_question.id }}\">
                            <span class=\"text-secondary fw-bold me-3\">{{ cmp < 10 ? '0' ~ cmp : cmp }}</span>  
                            <span class=\"fw-bold\">{{ evaluation_question.question|raw }}</span> 
                        </button>
                    </h6>
                    <div id=\"collapseOne{{ evaluation_question.id }}\" class=\"accordion-collapse collapse\" aria-labelledby=\"headingOne{{ evaluation_question.id }}\" data-bs-parent=\"#accordionExample\">
                        <div class=\"accordion-body mt-3\">
                            <!-- Answer options -->
                            <p class=\"mb-3\"><b class=\"text-dark\">A</b> {{ evaluation_question.proposition1|raw }}</p>
                            <hr>
                            <p class=\"mb-3\"><b class=\"text-dark\">B</b> {{ evaluation_question.proposition2|raw }}</p>
                            <hr>
                            <p class=\"mb-3\"><b class=\"text-dark\">C</b> {{ evaluation_question.proposition3|raw }}</p>
                            <hr>
                            <p class=\"mb-3\"><b class=\"text-dark\">D</b> {{ evaluation_question.proposition4|raw }}</p>
                            <!-- Button -->
                            {% if not evaluation_question.evaluation.isPassed %}
                                <a href=\"{{ url('app_admin_evaluation_question_edit', {'id': evaluation_question.id}) }}\" class=\"btn btn-sm btn-warning-soft mb-0\">modifier</a>
                                {{ include('admin/evaluation_question/_delete_form.html.twig') }}
                            {% endif %}
                        </div>
                    </div>
                </div>

                {% if not loop.last %}
                    <hr>
                {% endif %}
            {% else %}
                <hr>
                <h1>Liste vide</h1>
            {% endfor %}
        </div>
    </div>
</div>", "admin/evaluation_question/_questions.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\evaluation_question\\_questions.html.twig");
    }
}
