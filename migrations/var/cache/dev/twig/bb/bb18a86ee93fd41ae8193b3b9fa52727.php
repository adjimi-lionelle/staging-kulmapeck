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

/* front/evaluation/_epreuve_unique.html.twig */
class __TwigTemplate_575f82c43273adfeb8d621d9391702f5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/evaluation/_epreuve_unique.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/evaluation/_epreuve_unique.html.twig"));

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
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 4
            echo "            <div class=\"mb-3 border-dashed p-3\">
                <input type=\"hidden\" value=\"";
            // line 5
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 5), "html", null, true);
            echo "\" name=\"quizzes[";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 5), "html", null, true);
            echo "][id]\">
                <div class=\"d-flex\">
                    <h5 class=\"m-2\">";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 7), "html", null, true);
            echo ".</h5>
                    <h5 class=\"m-2\">";
            // line 8
            echo twig_get_attribute($this->env, $this->source, $context["question"], "question", [], "any", false, false, false, 8);
            echo "</h5>
                </div>
                ";
            // line 10
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "propositionJuste", [], "any", false, false, false, 10)) > 1)) {
                // line 11
                echo "                    <div class=\"text-info alert alert-info\">";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("MANY_ANSWERS_POSSIBLE_KEY", [], "messages");
                echo "</div>
                ";
            }
            // line 13
            echo "                <div>
                    <div>
                        <input class=\"btn-check btn-quiz-check\" name=\"quizzes[";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 15), "html", null, true);
            echo "][reponses][]\" value=\"1\" id=\"propsition1-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 15), "html", null, true);
            echo "\" type=\"";
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "propositionJuste", [], "any", false, false, false, 15)) > 1)) ? ("checkbox") : ("radio"));
            echo "\">
                        <label style=\"white-space: normal\" class=\"btn btn-outline-primary w-100\" for=\"propsition1-";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 16), "html", null, true);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["question"], "proposition1", [], "any", false, false, false, 16);
            echo "</label>
                    </div>
                    <div>
                        <input class=\"btn-check btn-quiz-check\" name=\"quizzes[";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 19), "html", null, true);
            echo "][reponses][]\" value=\"2\" id=\"propsition2-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 19), "html", null, true);
            echo "\" type=\"";
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "propositionJuste", [], "any", false, false, false, 19)) > 1)) ? ("checkbox") : ("radio"));
            echo "\">
                        <label style=\"white-space: normal\" class=\"btn btn-outline-primary w-100\" for=\"propsition2-";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["question"], "proposition2", [], "any", false, false, false, 20);
            echo "</label>
                    </div>
                    <div>
                        <input class=\"btn-check btn-quiz-check\" name=\"quizzes[";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 23), "html", null, true);
            echo "][reponses][]\" value=\"3\" id=\"propsition3-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\" type=\"";
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "propositionJuste", [], "any", false, false, false, 23)) > 1)) ? ("checkbox") : ("radio"));
            echo "\">
                        <label style=\"white-space: normal\" class=\"btn btn-outline-primary w-100\" for=\"propsition3-";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["question"], "proposition3", [], "any", false, false, false, 24);
            echo "</label>
                    </div>
                    <div>
                        <input class=\"btn-check btn-quiz-check\" name=\"quizzes[";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 27), "html", null, true);
            echo "][reponses][]\" value=\"4\" id=\"propsition4-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\" type=\"";
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "propositionJuste", [], "any", false, false, false, 27)) > 1)) ? ("checkbox") : ("radio"));
            echo "\">
                        <label style=\"white-space: normal\" class=\"btn btn-outline-primary w-100\" for=\"propsition4-";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["question"], "proposition4", [], "any", false, false, false, 28);
            echo "</label>
                    </div>
                </div>
            </div>
            <hr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </div>
    <div>
        <label>
            <input type=\"checkbox\" required> 
            
            Je suis sûre de vouloir soumettre c'est réponses
        </label>
        <input type=\"hidden\" name=\"isSubmittedExamResponses\" value=\"true\">
    </div>
    <div class=\"mt-5\">
        <button type=\"submit\" class=\"btn btn-success-soft\">Envoyer les réponses</button>
    </div>
</form>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/evaluation/_epreuve_unique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 34,  151 => 28,  143 => 27,  135 => 24,  127 => 23,  119 => 20,  111 => 19,  103 => 16,  95 => 15,  91 => 13,  85 => 11,  83 => 10,  78 => 8,  74 => 7,  67 => 5,  64 => 4,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form action=\"\" method=\"POST\">
    <div>
        {% for question in epreuve %}
            <div class=\"mb-3 border-dashed p-3\">
                <input type=\"hidden\" value=\"{{ question.id }}\" name=\"quizzes[{{ loop.index }}][id]\">
                <div class=\"d-flex\">
                    <h5 class=\"m-2\">{{ loop.index }}.</h5>
                    <h5 class=\"m-2\">{{ question.question|raw }}</h5>
                </div>
                {% if question.propositionJuste|length > 1 %}
                    <div class=\"text-info alert alert-info\">{% trans %}MANY_ANSWERS_POSSIBLE_KEY{% endtrans %}</div>
                {% endif %}
                <div>
                    <div>
                        <input class=\"btn-check btn-quiz-check\" name=\"quizzes[{{ loop.index }}][reponses][]\" value=\"1\" id=\"propsition1-{{question.id}}\" type=\"{{ question.propositionJuste|length > 1 ? 'checkbox' : 'radio' }}\">
                        <label style=\"white-space: normal\" class=\"btn btn-outline-primary w-100\" for=\"propsition1-{{question.id}}\">{{ question.proposition1|raw }}</label>
                    </div>
                    <div>
                        <input class=\"btn-check btn-quiz-check\" name=\"quizzes[{{ loop.index }}][reponses][]\" value=\"2\" id=\"propsition2-{{question.id}}\" type=\"{{ question.propositionJuste|length > 1 ? 'checkbox' : 'radio' }}\">
                        <label style=\"white-space: normal\" class=\"btn btn-outline-primary w-100\" for=\"propsition2-{{question.id}}\">{{ question.proposition2|raw }}</label>
                    </div>
                    <div>
                        <input class=\"btn-check btn-quiz-check\" name=\"quizzes[{{ loop.index }}][reponses][]\" value=\"3\" id=\"propsition3-{{question.id}}\" type=\"{{ question.propositionJuste|length > 1 ? 'checkbox' : 'radio' }}\">
                        <label style=\"white-space: normal\" class=\"btn btn-outline-primary w-100\" for=\"propsition3-{{question.id}}\">{{ question.proposition3|raw }}</label>
                    </div>
                    <div>
                        <input class=\"btn-check btn-quiz-check\" name=\"quizzes[{{ loop.index }}][reponses][]\" value=\"4\" id=\"propsition4-{{question.id}}\" type=\"{{ question.propositionJuste|length > 1 ? 'checkbox' : 'radio' }}\">
                        <label style=\"white-space: normal\" class=\"btn btn-outline-primary w-100\" for=\"propsition4-{{question.id}}\">{{ question.proposition4|raw }}</label>
                    </div>
                </div>
            </div>
            <hr>
        {% endfor %}
    </div>
    <div>
        <label>
            <input type=\"checkbox\" required> 
            
            Je suis sûre de vouloir soumettre c'est réponses
        </label>
        <input type=\"hidden\" name=\"isSubmittedExamResponses\" value=\"true\">
    </div>
    <div class=\"mt-5\">
        <button type=\"submit\" class=\"btn btn-success-soft\">Envoyer les réponses</button>
    </div>
</form>", "front/evaluation/_epreuve_unique.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\evaluation\\_epreuve_unique.html.twig");
    }
}
