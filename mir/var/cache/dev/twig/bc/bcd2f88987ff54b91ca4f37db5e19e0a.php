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

/* front/evaluation/_epreuve_random.html.twig */
class __TwigTemplate_33d1e978a27ad1de5358e621b7b1cfeb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/evaluation/_epreuve_random.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/evaluation/_epreuve_random.html.twig"));

        // line 1
        echo "<form action=\"\" method=\"POST\">
    <div>
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["epreuve"]) || array_key_exists("epreuve", $context) ? $context["epreuve"] : (function () { throw new RuntimeError('Variable "epreuve" does not exist.', 3, $this->source); })()));
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
            // line 4
            echo "            <div class=\"mb-3 border-dashed p-3\">
                <!-- Title -->
                <h4>";
            // line 6
            echo twig_get_attribute($this->env, $this->source, $context["quiz"], "question", [], "any", false, false, false, 6);
            echo "</h4>
                ";
            // line 7
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "propositionJuste", [], "any", false, false, false, 7)) > 1)) {
                // line 8
                echo "                    <div class=\"text-info alert alert-info\"><i class=\"fas fa-info\" style=\"font-size: 2em;\"></i> ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("MANY_ANSWERS_POSSIBLE_KEY", [], "messages");
                echo "</div>
                ";
            }
            // line 10
            echo "                <input type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 10), "html", null, true);
            echo "\" name=\"quizzes[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 10), "html", null, true);
            echo "][id]\">
                <hr> <!-- Divider -->
                <div>
                    <!-- Feed ques item -->
                    <div>
                        <input required type=\"";
            // line 15
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "propositionJuste", [], "any", false, false, false, 15)) > 1)) ? ("checkbox") : ("radio"));
            echo "\" class=\"btn-check btn-quiz-check\" value=\"1\" name=\"quizzes[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 15), "html", null, true);
            echo "][reponses][]\" id=\"quiz";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 15), "html", null, true);
            echo "option1\">
                        <label style=\"white-space: normal\" class=\"btn btn-outline-primary w-100\" for=\"quiz";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "option1\">";
            echo twig_get_attribute($this->env, $this->source, $context["quiz"], "proposition1", [], "any", false, false, false, 16);
            echo "</label>
                    </div>
                    <!-- Feed ques item -->
                    <div>
                        <input required type=\"";
            // line 20
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "propositionJuste", [], "any", false, false, false, 20)) > 1)) ? ("checkbox") : ("radio"));
            echo "\" class=\"btn-check btn-quiz-check\" value=\"2\" name=\"quizzes[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 20), "html", null, true);
            echo "][reponses][]\" id=\"quiz";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "option2\">
                        <label style=\"white-space: normal\" class=\"btn btn-outline-primary w-100\" for=\"quiz";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "option2\">";
            echo twig_get_attribute($this->env, $this->source, $context["quiz"], "proposition2", [], "any", false, false, false, 21);
            echo "</label>
                    </div>
                    <!-- Feed ques item -->
                    <div>
                        <input required type=\"";
            // line 25
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "propositionJuste", [], "any", false, false, false, 25)) > 1)) ? ("checkbox") : ("radio"));
            echo "\" class=\"btn-check btn-quiz-check\" value=\"3\" name=\"quizzes[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 25), "html", null, true);
            echo "][reponses][]\" id=\"quiz";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 25), "html", null, true);
            echo "option3\">
                        <label style=\"white-space: normal\" class=\"btn btn-outline-primary w-100\" for=\"quiz";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "option3\">";
            echo twig_get_attribute($this->env, $this->source, $context["quiz"], "proposition3", [], "any", false, false, false, 26);
            echo "</label>
                    </div>
                    <!-- Feed ques item -->
                    <div>
                        <input required type=\"";
            // line 30
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "propositionJuste", [], "any", false, false, false, 30)) > 1)) ? ("checkbox") : ("radio"));
            echo "\" class=\"btn-check btn-quiz-check\" value=\"4\" name=\"quizzes[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 30), "html", null, true);
            echo "][reponses][]\" id=\"quiz";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo "option4\">
                        <label style=\"white-space: normal\" class=\"btn btn-outline-primary w-100\" for=\"quiz";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "option4\">";
            echo twig_get_attribute($this->env, $this->source, $context["quiz"], "proposition4", [], "any", false, false, false, 31);
            echo "</label>
                    </div>
                </div>
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
        // line 36
        echo "    </div>
</form>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/evaluation/_epreuve_random.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 36,  150 => 31,  142 => 30,  133 => 26,  125 => 25,  116 => 21,  108 => 20,  99 => 16,  91 => 15,  80 => 10,  74 => 8,  72 => 7,  68 => 6,  64 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form action=\"\" method=\"POST\">
    <div>
        {% for quiz in epreuve %}
            <div class=\"mb-3 border-dashed p-3\">
                <!-- Title -->
                <h4>{{ quiz.question|raw }}</h4>
                {% if quiz.propositionJuste|length > 1 %}
                    <div class=\"text-info alert alert-info\"><i class=\"fas fa-info\" style=\"font-size: 2em;\"></i> {% trans %}MANY_ANSWERS_POSSIBLE_KEY{% endtrans %}</div>
                {% endif %}
                <input type=\"hidden\" value=\"{{ quiz.id }}\" name=\"quizzes[{{ loop.index }}][id]\">
                <hr> <!-- Divider -->
                <div>
                    <!-- Feed ques item -->
                    <div>
                        <input required type=\"{{ quiz.propositionJuste|length > 1 ? 'checkbox' : 'radio'}}\" class=\"btn-check btn-quiz-check\" value=\"1\" name=\"quizzes[{{ loop.index }}][reponses][]\" id=\"quiz{{ quiz.id }}option1\">
                        <label style=\"white-space: normal\" class=\"btn btn-outline-primary w-100\" for=\"quiz{{ quiz.id }}option1\">{{ quiz.proposition1|raw }}</label>
                    </div>
                    <!-- Feed ques item -->
                    <div>
                        <input required type=\"{{ quiz.propositionJuste|length > 1 ? 'checkbox' : 'radio'}}\" class=\"btn-check btn-quiz-check\" value=\"2\" name=\"quizzes[{{ loop.index }}][reponses][]\" id=\"quiz{{ quiz.id }}option2\">
                        <label style=\"white-space: normal\" class=\"btn btn-outline-primary w-100\" for=\"quiz{{ quiz.id }}option2\">{{ quiz.proposition2|raw }}</label>
                    </div>
                    <!-- Feed ques item -->
                    <div>
                        <input required type=\"{{ quiz.propositionJuste|length > 1 ? 'checkbox' : 'radio'}}\" class=\"btn-check btn-quiz-check\" value=\"3\" name=\"quizzes[{{ loop.index }}][reponses][]\" id=\"quiz{{ quiz.id }}option3\">
                        <label style=\"white-space: normal\" class=\"btn btn-outline-primary w-100\" for=\"quiz{{ quiz.id }}option3\">{{ quiz.proposition3|raw }}</label>
                    </div>
                    <!-- Feed ques item -->
                    <div>
                        <input required type=\"{{ quiz.propositionJuste|length > 1 ? 'checkbox' : 'radio'}}\" class=\"btn-check btn-quiz-check\" value=\"4\" name=\"quizzes[{{ loop.index }}][reponses][]\" id=\"quiz{{ quiz.id }}option4\">
                        <label style=\"white-space: normal\" class=\"btn btn-outline-primary w-100\" for=\"quiz{{ quiz.id }}option4\">{{ quiz.proposition4|raw }}</label>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
</form>", "front/evaluation/_epreuve_random.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\evaluation\\_epreuve_random.html.twig");
    }
}
