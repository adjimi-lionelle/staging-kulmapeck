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

/* front/home/header/categories.html.twig */
class __TwigTemplate_f418373fd55288fdb5d925d45863f63e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home/header/categories.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home/header/categories.html.twig"));

        // line 1
        echo "<ul class=\"dropdown-menu\" aria-labelledby=\"categoryMenu\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 3
            echo "        <li class=\"";
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "subCategories", [], "any", false, false, false, 3)) > 0)) ? ("dropdown-submenu dropend") : (""));
            echo "\">
            <a class=\"dropdown-item ";
            // line 4
            echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "subCategories", [], "any", false, false, false, 4)) > 0)) ? ("dropdown-toggle") : (""));
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_category_courses", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 4)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 4), "html", null, true);
            echo "</a>
            ";
            // line 5
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "subCategories", [], "any", false, false, false, 5)) > 0)) {
                // line 6
                echo "                <ul class=\"dropdown-menu dropdown-menu-start\" data-bs-popper=\"none\">
                    ";
                // line 7
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category"], "subCategories", [], "any", false, false, false, 7));
                foreach ($context['_seq'] as $context["_key"] => $context["subCategory"]) {
                    // line 8
                    echo "                        <!-- dropdown submenu open right -->
                        <li class=\"";
                    // line 9
                    echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subCategory"], "subCategories", [], "any", false, false, false, 9)) > 0)) ? ("dropdown-submenu dropend") : (""));
                    echo "\">
                            <a class=\"dropdown-item ";
                    // line 10
                    echo (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subCategory"], "subCategories", [], "any", false, false, false, 10)) > 0)) ? ("dropdown-toggle") : (""));
                    echo "\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_category_courses", ["slug" => twig_get_attribute($this->env, $this->source, $context["subCategory"], "slug", [], "any", false, false, false, 10)]), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subCategory"], "name", [], "any", false, false, false, 10), "html", null, true);
                    echo "</a>
                            ";
                    // line 11
                    if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subCategory"], "subCategories", [], "any", false, false, false, 11)) > 0)) {
                        // line 12
                        echo "                                <ul class=\"dropdown-menu\" data-bs-popper=\"none\">
                                    ";
                        // line 13
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["subCategory"], "subCategories", [], "any", false, false, false, 13));
                        foreach ($context['_seq'] as $context["_key"] => $context["scat"]) {
                            // line 14
                            echo "                                        <li> <a class=\"dropdown-item\" href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_category_courses", ["slug" => twig_get_attribute($this->env, $this->source, $context["scat"], "slug", [], "any", false, false, false, 14)]), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["scat"], "name", [], "any", false, false, false, 14), "html", null, true);
                            echo "</a> </li>
                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['scat'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 16
                        echo "                                    <hr class=\"divider\">
                                    <li><a href=\"";
                        // line 17
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_category_courses", ["slug" => twig_get_attribute($this->env, $this->source, $context["subCategory"], "slug", [], "any", false, false, false, 17)]), "html", null, true);
                        echo "\" class=\"dropdown-item\">All ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subCategory"], "name", [], "any", false, false, false, 17), "html", null, true);
                        echo " Courses</a></li>
                                </ul>
                            ";
                    }
                    // line 20
                    echo "                        </li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "                    <hr class=\"divider\">
                    <li><a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_category_courses", ["slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 23)]), "html", null, true);
                echo "\" class=\"dropdown-item\">All ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 23), "html", null, true);
                echo " Courses</a></li>
                </ul>
            ";
            }
            // line 26
            echo "        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</ul>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/home/header/categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 28,  136 => 26,  128 => 23,  125 => 22,  118 => 20,  110 => 17,  107 => 16,  96 => 14,  92 => 13,  89 => 12,  87 => 11,  79 => 10,  75 => 9,  72 => 8,  68 => 7,  65 => 6,  63 => 5,  55 => 4,  50 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"dropdown-menu\" aria-labelledby=\"categoryMenu\">
    {% for category in categories %}
        <li class=\"{{ category.subCategories|length > 0 ? 'dropdown-submenu dropend' : '' }}\">
            <a class=\"dropdown-item {{ category.subCategories|length > 0 ? 'dropdown-toggle' : '' }}\" href=\"{{ url(\"app_front_category_courses\", {slug: category.slug}) }}\">{{ category.name }}</a>
            {% if category.subCategories|length > 0 %}
                <ul class=\"dropdown-menu dropdown-menu-start\" data-bs-popper=\"none\">
                    {% for subCategory in category.subCategories %}
                        <!-- dropdown submenu open right -->
                        <li class=\"{{ subCategory.subCategories|length > 0 ? 'dropdown-submenu dropend' : '' }}\">
                            <a class=\"dropdown-item {{ subCategory.subCategories|length > 0 ? 'dropdown-toggle' : '' }}\" href=\"{{ url(\"app_front_category_courses\", {slug: subCategory.slug}) }}\">{{ subCategory.name }}</a>
                            {% if subCategory.subCategories|length > 0 %}
                                <ul class=\"dropdown-menu\" data-bs-popper=\"none\">
                                    {% for scat in subCategory.subCategories %}
                                        <li> <a class=\"dropdown-item\" href=\"{{ url(\"app_front_category_courses\", {slug: scat.slug}) }}\">{{ scat.name }}</a> </li>
                                    {% endfor %}
                                    <hr class=\"divider\">
                                    <li><a href=\"{{ url(\"app_front_category_courses\", {slug: subCategory.slug}) }}\" class=\"dropdown-item\">All {{ subCategory.name }} Courses</a></li>
                                </ul>
                            {% endif %}
                        </li>
                    {% endfor %}
                    <hr class=\"divider\">
                    <li><a href=\"{{ url(\"app_front_category_courses\", {slug: category.slug}) }}\" class=\"dropdown-item\">All {{ category.name }} Courses</a></li>
                </ul>
            {% endif %}
        </li>
    {% endfor %}
</ul>", "front/home/header/categories.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\home\\header\\categories.html.twig");
    }
}
