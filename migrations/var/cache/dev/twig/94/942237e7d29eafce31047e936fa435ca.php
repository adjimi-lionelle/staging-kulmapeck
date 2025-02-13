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

/* front/home/header/courses.html.twig */
class __TwigTemplate_b14152de1746e97f05c85d39e0840e59 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home/header/courses.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home/header/courses.html.twig"));

        // line 1
        echo "<div class=\"row p-4 g-4\">
    <!-- Dropdown column item -->
    <div class=\"col-xl-6 col-xxl-3\">
        <h6 class=\"mb-0\">";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("COURSESCATEGORY_KEY", [], "messages");
        echo "</h6>
        <hr>
        <ul class=\"list-unstyled\">
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 8
            echo "                <li> <a class=\"dropdown-item\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_category_courses", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 8)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 8), "html", null, true);
            echo "</a> </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "            <li> 
                <a class=\"dropdown-item bg-primary text-primary bg-opacity-10 rounded-2 mb-0\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_courses_category");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("VIEWALLCATEGORIES_KEY", [], "messages");
        echo "</a>
            </li>
        </ul>
    </div>
    
    <!-- Dropdown column item -->
    <div class=\"col-xl-6 col-xxl-3\">
        <h6 class=\"mb-0\">";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("LASTCOURSES_KEY", [], "messages");
        echo "</h6>
        <hr>
        <!-- Dropdown item -->
        ";
        // line 21
        $context["icons"] = ["fa-book text-google-icon", "fa-book text-linkedin", "fa-book text-facebook", "fa-book text-twitter", "fa-book text-dribbble", "fa-book-open text-linkedin", "fa-book text-facebook", "fa-book text-google-icon"];
        // line 22
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lastCourses"]) || array_key_exists("lastCourses", $context) ? $context["lastCourses"] : (function () { throw new RuntimeError('Variable "lastCourses" does not exist.', 22, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 23
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 23) <= 4)) {
                // line 24
                echo "            <div class=\"d-flex mb-4 position-relative\">
                <h2 class=\"mb-0\"><i class=\"fas fa-fw ";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 25, $this->source); })()), (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 25) - 1), [], "array", false, false, false, 25), "html", null, true);
                echo "\"></i></h2>
                <div class=\"ms-2\">
                    <a class=\"stretched-link h6 mb-0\" href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_course_details", ["slug" => twig_get_attribute($this->env, $this->source, $context["course"], "slug", [], "any", false, false, false, 27)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["course"], "intitule", [], "any", false, false, false, 27)), "truncate", [30, "..."], "method", false, false, false, 27), "html", null, true);
                echo "</a>
                    <p class=\"mb-0 small\">";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["course"], "description", [], "any", false, false, false, 28)), "truncate", [80, "..."], "method", false, false, false, 28), "html", null, true);
                echo "</p>
                </div>
            </div>
            ";
            }
            // line 32
            echo "            
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        <a class=\"dropdown-item bg-primary text-primary bg-opacity-10 rounded-2 mb-0\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_courses");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("VIEWMORECOURSES_KEY", [], "messages");
        echo "</a>
    </div>

    <!-- Dropdown column item -->
    <div class=\"col-xl-6 col-xxl-3\">
        <h6 class=\"mb-0\">";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("LASTCOURSES_KEY", [], "messages");
        echo "</h6>
        <hr>
        <!-- Dropdown item -->
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lastCourses"]) || array_key_exists("lastCourses", $context) ? $context["lastCourses"] : (function () { throw new RuntimeError('Variable "lastCourses" does not exist.', 42, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 43
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 43) > 4)) {
                // line 44
                echo "            <div class=\"d-flex mb-4 position-relative\">
                <h2 class=\"mb-0\"><i class=\"fas fa-fw ";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["icons"]) || array_key_exists("icons", $context) ? $context["icons"] : (function () { throw new RuntimeError('Variable "icons" does not exist.', 45, $this->source); })()), (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 45) - 1), [], "array", false, false, false, 45), "html", null, true);
                echo "\"></i></h2>
                <div class=\"ms-2\">
                    <a class=\"stretched-link h6 mb-0\" href=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_course_details", ["slug" => twig_get_attribute($this->env, $this->source, $context["course"], "slug", [], "any", false, false, false, 47)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["course"], "intitule", [], "any", false, false, false, 47)), "truncate", [30, "..."], "method", false, false, false, 47), "html", null, true);
                echo "</a>
                    <p class=\"mb-0 small\">";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["course"], "description", [], "any", false, false, false, 48)), "truncate", [80, "..."], "method", false, false, false, 48), "html", null, true);
                echo "</p>
                </div>
            </div>
            ";
            }
            // line 52
            echo "            
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "    </div>

    <!-- Dropdown column item -->
    <div class=\"col-xl-6 col-xxl-3\">
        <h6 class=\"mb-0\">";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("DOWNLOADKULMAPECK_KEY", [], "messages");
        echo "</h6>
        <hr>
        <!-- Image -->
        <img src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/element/14.svg"), "html", null, true);
        echo "\" alt=\"\">

        <!-- Download button -->
        <div class=\"row g-2 justify-content-center mt-3\">
        <!-- Google play store button -->
        <div class=\"col-6 col-sm-4 col-xxl-6\">
            <a href=\"#\"> <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/client/google-play.svg"), "html", null, true);
        echo "\" class=\"btn-transition\" alt=\"google-store\"> </a>
        </div>
        <!-- App store button -->
        <div class=\"col-6 col-sm-4 col-xxl-6\">
            <a href=\"#\"> <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/client/app-store.svg"), "html", null, true);
        echo "\" class=\"btn-transition\" alt=\"app-store\"> </a>
        </div>
        </div>
    </div>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/home/header/courses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 71,  243 => 67,  234 => 61,  228 => 58,  222 => 54,  207 => 52,  200 => 48,  194 => 47,  189 => 45,  186 => 44,  183 => 43,  166 => 42,  160 => 39,  149 => 34,  134 => 32,  127 => 28,  121 => 27,  116 => 25,  113 => 24,  110 => 23,  92 => 22,  90 => 21,  84 => 18,  72 => 11,  69 => 10,  58 => 8,  54 => 7,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row p-4 g-4\">
    <!-- Dropdown column item -->
    <div class=\"col-xl-6 col-xxl-3\">
        <h6 class=\"mb-0\">{% trans %}COURSESCATEGORY_KEY{% endtrans %}</h6>
        <hr>
        <ul class=\"list-unstyled\">
            {% for category in categories %}
                <li> <a class=\"dropdown-item\" href=\"{{ url(\"app_front_category_courses\", {slug: category.slug}) }}\">{{ category.name }}</a> </li>
            {% endfor %}
            <li> 
                <a class=\"dropdown-item bg-primary text-primary bg-opacity-10 rounded-2 mb-0\" href=\"{{ path('app_front_courses_category') }}\">{% trans %}VIEWALLCATEGORIES_KEY{% endtrans %}</a>
            </li>
        </ul>
    </div>
    
    <!-- Dropdown column item -->
    <div class=\"col-xl-6 col-xxl-3\">
        <h6 class=\"mb-0\">{% trans %}LASTCOURSES_KEY{% endtrans %}</h6>
        <hr>
        <!-- Dropdown item -->
        {% set icons = ['fa-book text-google-icon', 'fa-book text-linkedin', 'fa-book text-facebook', 'fa-book text-twitter', 'fa-book text-dribbble', 'fa-book-open text-linkedin', 'fa-book text-facebook', 'fa-book text-google-icon'] %}
        {% for course in lastCourses %}
            {% if loop.index <= 4 %}
            <div class=\"d-flex mb-4 position-relative\">
                <h2 class=\"mb-0\"><i class=\"fas fa-fw {{ icons[loop.index - 1] }}\"></i></h2>
                <div class=\"ms-2\">
                    <a class=\"stretched-link h6 mb-0\" href=\"{{ url(\"app_front_course_details\", {slug: course.slug}) }}\">{{ course.intitule|u.truncate(30, '...') }}</a>
                    <p class=\"mb-0 small\">{{ course.description|u.truncate(80, '...') }}</p>
                </div>
            </div>
            {% endif %}
            
        {% endfor %}
        <a class=\"dropdown-item bg-primary text-primary bg-opacity-10 rounded-2 mb-0\" href=\"{{ path('app_front_courses') }}\">{% trans %}VIEWMORECOURSES_KEY{% endtrans %}</a>
    </div>

    <!-- Dropdown column item -->
    <div class=\"col-xl-6 col-xxl-3\">
        <h6 class=\"mb-0\">{% trans %}LASTCOURSES_KEY{% endtrans %}</h6>
        <hr>
        <!-- Dropdown item -->
        {% for course in lastCourses %}
            {% if loop.index > 4 %}
            <div class=\"d-flex mb-4 position-relative\">
                <h2 class=\"mb-0\"><i class=\"fas fa-fw {{ icons[loop.index - 1] }}\"></i></h2>
                <div class=\"ms-2\">
                    <a class=\"stretched-link h6 mb-0\" href=\"{{ url(\"app_front_course_details\", {slug: course.slug}) }}\">{{ course.intitule|u.truncate(30, '...') }}</a>
                    <p class=\"mb-0 small\">{{ course.description|u.truncate(80, '...') }}</p>
                </div>
            </div>
            {% endif %}
            
        {% endfor %}
    </div>

    <!-- Dropdown column item -->
    <div class=\"col-xl-6 col-xxl-3\">
        <h6 class=\"mb-0\">{% trans %}DOWNLOADKULMAPECK_KEY{% endtrans %}</h6>
        <hr>
        <!-- Image -->
        <img src=\"{{ asset('assets/images/element/14.svg') }}\" alt=\"\">

        <!-- Download button -->
        <div class=\"row g-2 justify-content-center mt-3\">
        <!-- Google play store button -->
        <div class=\"col-6 col-sm-4 col-xxl-6\">
            <a href=\"#\"> <img src=\"{{ asset('assets/images/client/google-play.svg') }}\" class=\"btn-transition\" alt=\"google-store\"> </a>
        </div>
        <!-- App store button -->
        <div class=\"col-6 col-sm-4 col-xxl-6\">
            <a href=\"#\"> <img src=\"{{ asset('assets/images/client/app-store.svg') }}\" class=\"btn-transition\" alt=\"app-store\"> </a>
        </div>
        </div>
    </div>
</div>", "front/home/header/courses.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\home\\header\\courses.html.twig");
    }
}
