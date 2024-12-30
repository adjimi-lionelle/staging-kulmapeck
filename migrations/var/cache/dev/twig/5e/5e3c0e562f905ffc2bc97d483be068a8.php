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

/* instructor/courses/include/_chap_item.html.twig */
class __TwigTemplate_c57d4f4f6044a29a27e053ea66da37b3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/courses/include/_chap_item.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/courses/include/_chap_item.html.twig"));

        // line 1
        echo "<div class=\"accordion-item mb-3\">
    <h6 class=\"accordion-header font-base\" id=\"heading-";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 2, $this->source); })()), "html", null, true);
        echo "\">
        <button  class=\"accordion-button fw-bold rounded d-inline-block d-block pe-5\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\" aria-expanded=\"false\" aria-controls=\"collapse-";
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 3, $this->source); })()), "html", null, true);
        echo "\">
            Chapter ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["numero"]) || array_key_exists("numero", $context) ? $context["numero"] : (function () { throw new RuntimeError('Variable "numero" does not exist.', 4, $this->source); })()), "html", null, true);
        echo " : ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "
        </button>
    </h6>

    <div id=\"collapse-";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "\" class=\"accordion-collapse collapse show\" aria-labelledby=\"heading-1\" data-bs-parent=\"#accordionExample2\">
        <!-- Topic START -->
        <div class=\"accordion-body mt-3\">
            <p class=\"description\">";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</p>
            <div id=\"lessons-container-";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\">
                ";
        // line 13
        $context["cmp"] = 0;
        // line 14
        echo "                ";
        if (array_key_exists("chapitre", $context)) {
            // line 15
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 15, $this->source); })()), "lessons", [], "any", false, false, false, 15));
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
            foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
                // line 16
                echo "                        ";
                echo twig_include($this->env, $context, "instructor/courses/include/_lesson_item.html.twig", ["index" => (isset($context["cmp"]) || array_key_exists("cmp", $context) ? $context["cmp"] : (function () { throw new RuntimeError('Variable "cmp" does not exist.', 16, $this->source); })()), "title" => twig_get_attribute($this->env, $this->source, $context["lesson"], "title", [], "any", false, false, false, 16), "chapIndex" => (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 16, $this->source); })()), "videoLink" => twig_get_attribute($this->env, $this->source, $context["lesson"], "videoLink", [], "any", false, false, false, 16), "numero" => twig_get_attribute($this->env, $this->source, $context["lesson"], "numero", [], "any", false, false, false, 16)]);
                echo "
                        ";
                // line 17
                $context["cmp"] = ((isset($context["cmp"]) || array_key_exists("cmp", $context) ? $context["cmp"] : (function () { throw new RuntimeError('Variable "cmp" does not exist.', 17, $this->source); })()) + 1);
                // line 18
                echo "                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                ";
        }
        // line 20
        echo "            </div>

            <!-- Add topic -->
            <a href=\"#\" data-index=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["cmp"]) || array_key_exists("cmp", $context) ? $context["cmp"] : (function () { throw new RuntimeError('Variable "cmp" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\" data-chapiter=\"";
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\" data-prototype-container=\"cours_chapitres_";
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "_lessons\" class=\"btn btn-sm btn-dark mb-0 add-lesson-btn\" data-bs-toggle=\"modal\" data-bs-target=\"#addTopic\"><i class=\"bi bi-plus-circle me-2\"></i>Add lesson</a>
            <a href=\"#\" data-index=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["cmp"]) || array_key_exists("cmp", $context) ? $context["cmp"] : (function () { throw new RuntimeError('Variable "cmp" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\" data-chapiter=\"";
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\" data-prototype-container=\"cours_chapitres_";
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "_lessons\" class=\"btn btn-sm btn-success mb-0 edit-chapitre-btn\" data-bs-toggle=\"modal\" data-bs-target=\"#addLecture\"><i class=\"far fa-fw fa-edit me-2\"></i>Edit chap</a>
            <buton data-delete-url=\"";
        // line 25
        ((twig_get_attribute($this->env, $this->source, ($context["chapitre"] ?? null), "id", [], "any", true, true, false, 25)) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instructor_delete_chapitre", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["chapitre"]) || array_key_exists("chapitre", $context) ? $context["chapitre"] : (function () { throw new RuntimeError('Variable "chapitre" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true))) : (print ("")));
        echo "\" type=\"button\" data-index=\"";
        echo twig_escape_filter($this->env, (isset($context["cmp"]) || array_key_exists("cmp", $context) ? $context["cmp"] : (function () { throw new RuntimeError('Variable "cmp" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\" data-id=\"";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["chapitre"] ?? null), "id", [], "any", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["chapitre"] ?? null), "id", [], "any", false, false, false, 25), "")) : ("")), "html", null, true);
        echo "\" data-chapiter=\"";
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\" data-container=\"cours_chapitres_";
        echo twig_escape_filter($this->env, (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-sm btn-danger mb-0 delete-chapitre-btn\"><i class=\"fas fa-fw fa-trash\"></i></buton>
        </div>
        <!-- Topic END -->
    </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "instructor/courses/include/_chap_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 25,  139 => 24,  131 => 23,  126 => 20,  123 => 19,  109 => 18,  107 => 17,  102 => 16,  84 => 15,  81 => 14,  79 => 13,  75 => 12,  71 => 11,  65 => 8,  56 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"accordion-item mb-3\">
    <h6 class=\"accordion-header font-base\" id=\"heading-{{ index }}\">
        <button  class=\"accordion-button fw-bold rounded d-inline-block d-block pe-5\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#collapse-{{ index }}\" aria-expanded=\"false\" aria-controls=\"collapse-{{ index }}\">
            Chapter {{ numero }} : {{ title }}
        </button>
    </h6>

    <div id=\"collapse-{{ index }}\" class=\"accordion-collapse collapse show\" aria-labelledby=\"heading-1\" data-bs-parent=\"#accordionExample2\">
        <!-- Topic START -->
        <div class=\"accordion-body mt-3\">
            <p class=\"description\">{{ description }}</p>
            <div id=\"lessons-container-{{ index }}\">
                {% set cmp = 0 %}
                {% if chapitre is defined %}
                    {% for lesson in chapitre.lessons %}
                        {{ include('instructor/courses/include/_lesson_item.html.twig', {index: cmp, title: lesson.title, chapIndex: index, videoLink: lesson.videoLink, numero: lesson.numero}) }}
                        {% set cmp = cmp + 1 %}
                    {% endfor %}
                {% endif %}
            </div>

            <!-- Add topic -->
            <a href=\"#\" data-index=\"{{ cmp }}\" data-chapiter=\"{{ index }}\" data-prototype-container=\"cours_chapitres_{{ index }}_lessons\" class=\"btn btn-sm btn-dark mb-0 add-lesson-btn\" data-bs-toggle=\"modal\" data-bs-target=\"#addTopic\"><i class=\"bi bi-plus-circle me-2\"></i>Add lesson</a>
            <a href=\"#\" data-index=\"{{ cmp }}\" data-chapiter=\"{{ index }}\" data-prototype-container=\"cours_chapitres_{{ index }}_lessons\" class=\"btn btn-sm btn-success mb-0 edit-chapitre-btn\" data-bs-toggle=\"modal\" data-bs-target=\"#addLecture\"><i class=\"far fa-fw fa-edit me-2\"></i>Edit chap</a>
            <buton data-delete-url=\"{{ chapitre.id is defined ? path('app_instructor_delete_chapitre', {id: chapitre.id}) : '' }}\" type=\"button\" data-index=\"{{ cmp }}\" data-id=\"{{ chapitre.id|default('') }}\" data-chapiter=\"{{ index }}\" data-container=\"cours_chapitres_{{ index }}\" class=\"btn btn-sm btn-danger mb-0 delete-chapitre-btn\"><i class=\"fas fa-fw fa-trash\"></i></buton>
        </div>
        <!-- Topic END -->
    </div>
</div>
", "instructor/courses/include/_chap_item.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\instructor\\courses\\include\\_chap_item.html.twig");
    }
}
