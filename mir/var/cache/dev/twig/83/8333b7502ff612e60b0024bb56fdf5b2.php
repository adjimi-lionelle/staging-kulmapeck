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

/* instructor/reviews/index.html.twig */
class __TwigTemplate_0b029aa2222a20a6b3ffbff5dd839576 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/reviews/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/reviews/index.html.twig"));

        $this->parent = $this->loadTemplate("instructor/base.html.twig", "instructor/reviews/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        // line 5
        echo "
    <div class=\"card bg-transparent border rounded-3\">
\t\t<!-- Card header START -->
\t\t<div class=\"card-header bg-transparent border-bottom\">
\t\t\t<h3 class=\"mb-0\">Students Reviews</h3>
\t\t</div>
\t\t<!-- Card header END -->

\t\t<!-- Card body START -->
\t\t<div class=\"card-body mt-2 mt-sm-4\">
\t\t\t
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 16, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 17
            echo "                <!-- Review item START -->
                <div class=\"d-sm-flex\">
                    <!-- Avatar image -->
                    <img class=\"avatar avatar-lg rounded-circle float-start me-3\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["review"], "eleve", [], "any", false, false, false, 20), "utilisateur", [], "any", false, false, false, 20), "personne", [], "any", false, false, false, 20), "avatarPath", [], "any", false, false, false, 20)), "html", null, true);
            echo "\" alt=\"avatar\">
                    <div>
                        <div class=\"mb-3 d-sm-flex justify-content-sm-between align-items-center\">
                            <!-- Title -->
                            <div>
                                <h5 class=\"m-0\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["review"], "eleve", [], "any", false, false, false, 25), "utilisateur", [], "any", false, false, false, 25), "personne", [], "any", false, false, false, 25), "nomComplet", [], "any", false, false, false, 25), "html", null, true);
            echo "</h5>
                                <span class=\"me-3 small\">";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "createdAt", [], "any", false, false, false, 26), "d/m/Y - H:i:s"), "html", null, true);
            echo "</span>
                            </div>
                            <!-- Review star -->
                            <ul class=\"list-inline mb-0\">
                                ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 30)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 31
                echo "                                    <li class=\"list-inline-item me-0\"><i class=\"fas fa-star text-warning\"></i></li>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 33) < 5)) {
                // line 34
                echo "                                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 34), 4));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 35
                    echo "                                        <li class=\"list-inline-item me-0\"><i class=\"far fa-star text-warning\"></i></li>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                echo "                                ";
            }
            // line 38
            echo "                            </ul>\t
                        </div>
                        <!-- Content -->
                        <h6><span class=\"text-body fw-light\">Review on:</span> ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["review"], "cours", [], "any", false, false, false, 41), "intitule", [], "any", false, false, false, 41), "html", null, true);
            echo "</h6>
                        <p>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "message", [], "any", false, false, false, 42), "html", null, true);
            echo "</p>
                        <!-- Button -->
                        <div class=\"text-end\">
                            <a class=\"btn btn-sm btn-light mb-0\" data-bs-toggle=\"collapse\" href=\"#collapseComment";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 45), "html", null, true);
            echo "\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseComment\">
                                Reply
                            </a>
                            <!-- collapse textarea -->
                            <div class=\"collapse ";
            // line 49
            echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 49)) ? ("show") : (""));
            echo "\" id=\"collapseComment";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 49), "html", null, true);
            echo "\">
                                <form method=\"POST\" action=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_instructor_reply_review", ["id" => twig_get_attribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" class=\"d-flex mt-3\" onsubmit=\"return confirm('Are you sure that you want to send this message ?')\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("reply" . twig_get_attribute($this->env, $this->source, $context["review"], "id", [], "any", false, false, false, 51))), "html", null, true);
            echo "\">
                                    <textarea required name=\"message\" class=\"form-control mb-0\" placeholder=\"Add a comment...\" rows=\"1\" spellcheck=\"false\"></textarea>
                                    <input type=\"hidden\" name=\"page\" value=\"";
            // line 53
            ((array_key_exists("currentPage", $context)) ? (print (twig_escape_filter($this->env, (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 53, $this->source); })()), "html", null, true))) : (print (1)));
            echo "\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-primary-soft ms-2 px-4 mb-0 flex-shrink-0\"><i class=\"fas fa-paper-plane fs-5\"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Divider -->
                <hr>
                <!-- Review item END -->
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
\t\t\t<!-- Pagination START -->
\t\t\t<div class=\"d-sm-flex justify-content-sm-between pagination-container align-items-sm-center mt-4 mt-sm-3\">
                <p class=\"mb-0 text-center text-sm-start\">Showing ";
        // line 67
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 67, $this->source); })()), "getCurrentPageNumber", [], "any", false, false, false, 67) - 1) * twig_get_attribute($this->env, $this->source, (isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 67, $this->source); })()), "getItemNumberPerPage", [], "any", false, false, false, 67)) + 1), "html", null, true);
        echo " to ";
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 67, $this->source); })()), "getItemNumberPerPage", [], "any", false, false, false, 67) * twig_get_attribute($this->env, $this->source, (isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 67, $this->source); })()), "getCurrentPageNumber", [], "any", false, false, false, 67)), "html", null, true);
        echo " of ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 67, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 67), "html", null, true);
        echo " entries</p>
\t\t\t\t";
        // line 68
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["reviews"]) || array_key_exists("reviews", $context) ? $context["reviews"] : (function () { throw new RuntimeError('Variable "reviews" does not exist.', 68, $this->source); })()));
        echo "
\t\t\t</div>
\t\t\t<!-- Pagination END -->
\t\t</div>
\t\t<!-- Card body START -->
\t</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "instructor/reviews/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 68,  218 => 67,  213 => 64,  188 => 53,  183 => 51,  179 => 50,  173 => 49,  166 => 45,  160 => 42,  156 => 41,  151 => 38,  148 => 37,  141 => 35,  136 => 34,  133 => 33,  126 => 31,  122 => 30,  115 => 26,  111 => 25,  103 => 20,  98 => 17,  81 => 16,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"instructor/base.html.twig\" %}


{% block pageContent %}

    <div class=\"card bg-transparent border rounded-3\">
\t\t<!-- Card header START -->
\t\t<div class=\"card-header bg-transparent border-bottom\">
\t\t\t<h3 class=\"mb-0\">Students Reviews</h3>
\t\t</div>
\t\t<!-- Card header END -->

\t\t<!-- Card body START -->
\t\t<div class=\"card-body mt-2 mt-sm-4\">
\t\t\t
            {% for review in reviews %}
                <!-- Review item START -->
                <div class=\"d-sm-flex\">
                    <!-- Avatar image -->
                    <img class=\"avatar avatar-lg rounded-circle float-start me-3\" src=\"{{ asset(review.eleve.utilisateur.personne.avatarPath) }}\" alt=\"avatar\">
                    <div>
                        <div class=\"mb-3 d-sm-flex justify-content-sm-between align-items-center\">
                            <!-- Title -->
                            <div>
                                <h5 class=\"m-0\">{{review.eleve.utilisateur.personne.nomComplet}}</h5>
                                <span class=\"me-3 small\">{{ review.createdAt|date('d/m/Y - H:i:s') }}</span>
                            </div>
                            <!-- Review star -->
                            <ul class=\"list-inline mb-0\">
                                {% for i in 1..review.rating %}
                                    <li class=\"list-inline-item me-0\"><i class=\"fas fa-star text-warning\"></i></li>
                                {% endfor %}
                                {% if review.rating < 5 %}
                                    {% for i in review.rating..4 %}
                                        <li class=\"list-inline-item me-0\"><i class=\"far fa-star text-warning\"></i></li>
                                    {% endfor %}
                                {% endif %}
                            </ul>\t
                        </div>
                        <!-- Content -->
                        <h6><span class=\"text-body fw-light\">Review on:</span> {{ review.cours.intitule }}</h6>
                        <p>{{ review.message }}</p>
                        <!-- Button -->
                        <div class=\"text-end\">
                            <a class=\"btn btn-sm btn-light mb-0\" data-bs-toggle=\"collapse\" href=\"#collapseComment{{ loop.index }}\" role=\"button\" aria-expanded=\"false\" aria-controls=\"collapseComment\">
                                Reply
                            </a>
                            <!-- collapse textarea -->
                            <div class=\"collapse {{ loop.first ? 'show' : '' }}\" id=\"collapseComment{{ loop.index }}\">
                                <form method=\"POST\" action=\"{{ url(\"app_instructor_reply_review\", {id: review.id}) }}\" class=\"d-flex mt-3\" onsubmit=\"return confirm('Are you sure that you want to send this message ?')\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('reply' ~ review.id) }}\">
                                    <textarea required name=\"message\" class=\"form-control mb-0\" placeholder=\"Add a comment...\" rows=\"1\" spellcheck=\"false\"></textarea>
                                    <input type=\"hidden\" name=\"page\" value=\"{{ currentPage is defined ? currentPage : 1 }}\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-primary-soft ms-2 px-4 mb-0 flex-shrink-0\"><i class=\"fas fa-paper-plane fs-5\"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Divider -->
                <hr>
                <!-- Review item END -->
            {% endfor %}

\t\t\t<!-- Pagination START -->
\t\t\t<div class=\"d-sm-flex justify-content-sm-between pagination-container align-items-sm-center mt-4 mt-sm-3\">
                <p class=\"mb-0 text-center text-sm-start\">Showing {{ ((reviews.getCurrentPageNumber - 1) * reviews.getItemNumberPerPage) + 1 }} to {{ reviews.getItemNumberPerPage * reviews.getCurrentPageNumber }} of {{reviews.getTotalItemCount}} entries</p>
\t\t\t\t{{ knp_pagination_render(reviews) }}
\t\t\t</div>
\t\t\t<!-- Pagination END -->
\t\t</div>
\t\t<!-- Card body START -->
\t</div>

{% endblock %}


", "instructor/reviews/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\instructor\\reviews\\index.html.twig");
    }
}
