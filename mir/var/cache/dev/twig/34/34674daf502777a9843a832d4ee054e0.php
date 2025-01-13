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

/* front/includes/courses/_course_reviews.html.twig */
class __TwigTemplate_56d145c3967b5b8c433eb1dece0292cf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/courses/_course_reviews.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/courses/_course_reviews.html.twig"));

        // line 1
        echo "<!-- Review START -->
<div class=\"row mb-4\">
    <h5 class=\"mb-4\">Our Student Reviews</h5>

    <!-- Rating info -->
    <div class=\"col-md-4 mb-3 mb-md-0\">
        <div class=\"text-center\">
            <!-- Info -->
            <h2 class=\"mb-0\">";
        // line 9
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 9, $this->source); })()), "review", [], "any", false, false, false, 9) / (isset($context["nbReviews"]) || array_key_exists("nbReviews", $context) ? $context["nbReviews"] : (function () { throw new RuntimeError('Variable "nbReviews" does not exist.', 9, $this->source); })())), "html", null, true);
        echo "</h2>
            <!-- Star -->
            <ul class=\"list-inline mb-0\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 12, $this->source); })()), "review", [], "any", false, false, false, 12) / (isset($context["nbReviews"]) || array_key_exists("nbReviews", $context) ? $context["nbReviews"] : (function () { throw new RuntimeError('Variable "nbReviews" does not exist.', 12, $this->source); })()))));
        foreach ($context['_seq'] as $context["_key"] => $context["cmp"]) {
            // line 13
            echo "                    <li class=\"list-inline-item me-0\"><i class=\"fas fa-star text-warning\"></i></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cmp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                ";
        if (((twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 15, $this->source); })()), "review", [], "any", false, false, false, 15) / (isset($context["nbReviews"]) || array_key_exists("nbReviews", $context) ? $context["nbReviews"] : (function () { throw new RuntimeError('Variable "nbReviews" does not exist.', 15, $this->source); })())) < 5)) {
            // line 16
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range((twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 16, $this->source); })()), "review", [], "any", false, false, false, 16) / (isset($context["nbReviews"]) || array_key_exists("nbReviews", $context) ? $context["nbReviews"] : (function () { throw new RuntimeError('Variable "nbReviews" does not exist.', 16, $this->source); })())), 4));
            foreach ($context['_seq'] as $context["_key"] => $context["cmp"]) {
                // line 17
                echo "                        <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cmp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "                ";
        }
        // line 20
        echo "            </ul>
            <p class=\"mb-0\">(Based on todays review)</p>
        </div>
    </div>

    <!-- Progress-bar and star -->
    <div class=\"col-md-8\">
        <div class=\"row align-items-center text-center\">
            <!-- Progress bar and Rating -->
            <div class=\"col-6 col-sm-8\">
                <!-- Progress item -->
                <div class=\"progress progress-sm bg-warning bg-opacity-15\">
                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: ";
        // line 32
        echo twig_escape_filter($this->env, ((twig_length_filter($this->env, (isset($context["fiveStarsReviews"]) || array_key_exists("fiveStarsReviews", $context) ? $context["fiveStarsReviews"] : (function () { throw new RuntimeError('Variable "fiveStarsReviews" does not exist.', 32, $this->source); })())) / (isset($context["nbReviews"]) || array_key_exists("nbReviews", $context) ? $context["nbReviews"] : (function () { throw new RuntimeError('Variable "nbReviews" does not exist.', 32, $this->source); })())) * 100), "html", null, true);
        echo "%\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                    </div>
                </div>
            </div>

            <div class=\"col-6 col-sm-4\">
                <!-- Star item -->
                <ul class=\"list-inline mb-0\">
                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 41
            echo "                        <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                </ul>
            </div>

            <!-- Progress bar and Rating -->
            <div class=\"col-6 col-sm-8\">
                <!-- Progress item -->
                <div class=\"progress progress-sm bg-warning bg-opacity-15\">
                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: ";
        // line 50
        echo twig_escape_filter($this->env, ((twig_length_filter($this->env, (isset($context["fourStarsReviews"]) || array_key_exists("fourStarsReviews", $context) ? $context["fourStarsReviews"] : (function () { throw new RuntimeError('Variable "fourStarsReviews" does not exist.', 50, $this->source); })())) / (isset($context["nbReviews"]) || array_key_exists("nbReviews", $context) ? $context["nbReviews"] : (function () { throw new RuntimeError('Variable "nbReviews" does not exist.', 50, $this->source); })())) * 100), "html", null, true);
        echo "%\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                    </div>
                </div>
            </div>

            <div class=\"col-6 col-sm-4\">
                <!-- Star item -->
                <ul class=\"list-inline mb-0\">
                    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 59
            echo "                        <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                    <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                </ul>
            </div>

            <!-- Progress bar and Rating -->
            <div class=\"col-6 col-sm-8\">
                <!-- Progress item -->
                <div class=\"progress progress-sm bg-warning bg-opacity-15\">
                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: ";
        // line 69
        echo twig_escape_filter($this->env, ((twig_length_filter($this->env, (isset($context["treeStarsReviews"]) || array_key_exists("treeStarsReviews", $context) ? $context["treeStarsReviews"] : (function () { throw new RuntimeError('Variable "treeStarsReviews" does not exist.', 69, $this->source); })())) / (isset($context["nbReviews"]) || array_key_exists("nbReviews", $context) ? $context["nbReviews"] : (function () { throw new RuntimeError('Variable "nbReviews" does not exist.', 69, $this->source); })())) * 100), "html", null, true);
        echo "%\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                    </div>
                </div>
            </div>

            <div class=\"col-6 col-sm-4\">
                <!-- Star item -->
                <ul class=\"list-inline mb-0\">
                    <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                    <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                    <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                    <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                    <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                </ul>
            </div>

            <!-- Progress bar and Rating -->
            <div class=\"col-6 col-sm-8\">
                <!-- Progress item -->
                <div class=\"progress progress-sm bg-warning bg-opacity-15\">
                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: ";
        // line 89
        echo twig_escape_filter($this->env, ((twig_length_filter($this->env, (isset($context["twoStarsReviews"]) || array_key_exists("twoStarsReviews", $context) ? $context["twoStarsReviews"] : (function () { throw new RuntimeError('Variable "twoStarsReviews" does not exist.', 89, $this->source); })())) / (isset($context["nbReviews"]) || array_key_exists("nbReviews", $context) ? $context["nbReviews"] : (function () { throw new RuntimeError('Variable "nbReviews" does not exist.', 89, $this->source); })())) * 100), "html", null, true);
        echo "%\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                    </div>
                </div>
            </div>

            <div class=\"col-6 col-sm-4\">
                <!-- Star item -->
                <ul class=\"list-inline mb-0\">
                    <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                    <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                    <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                    <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                    <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                </ul>
            </div>

            <!-- Progress bar and Rating -->
            <div class=\"col-6 col-sm-8\">
                <!-- Progress item -->
                <div class=\"progress progress-sm bg-warning bg-opacity-15\">
                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: ";
        // line 109
        echo twig_escape_filter($this->env, ((twig_length_filter($this->env, (isset($context["oneStarReviews"]) || array_key_exists("oneStarReviews", $context) ? $context["oneStarReviews"] : (function () { throw new RuntimeError('Variable "oneStarReviews" does not exist.', 109, $this->source); })())) / (isset($context["nbReviews"]) || array_key_exists("nbReviews", $context) ? $context["nbReviews"] : (function () { throw new RuntimeError('Variable "nbReviews" does not exist.', 109, $this->source); })())) * 100), "html", null, true);
        echo "%\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                    </div>
                </div>
            </div>

            <div class=\"col-6 col-sm-4\">
                <!-- Star item -->
                <ul class=\"list-inline mb-0\">
                    <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                    <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                    <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                    <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                    <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Review END -->

<!-- Student review START -->
<div class=\"row\">
    ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 131, $this->source); })()), "reviews", [], "any", false, false, false, 131));
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            echo " 
        <!-- Review item START -->
        <div class=\"d-md-flex my-4\">
            <!-- Avatar -->
            <div class=\"avatar avatar-xl me-4 flex-shrink-0\">   
                <img class=\"avatar-img rounded-circle\" src=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/eleves/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["review"], "eleve", [], "any", false, false, false, 136), "utilisateur", [], "any", false, false, false, 136), "personne", [], "any", false, false, false, 136), "avatar", [], "any", false, false, false, 136))), "html", null, true);
            echo "\" alt=\"avatar\">
            </div>
            <!-- Text -->
            <div>
                <div class=\"d-sm-flex mt-1 mt-md-0 align-items-center\">
                    <h5 class=\"me-3 mb-0\">";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["review"], "eleve", [], "any", false, false, false, 141), "utilisateur", [], "any", false, false, false, 141), "personne", [], "any", false, false, false, 141), "nomComplet", [], "any", false, false, false, 141), "html", null, true);
            echo "</h5>
                    <!-- Review star -->
                    <ul class=\"list-inline mb-0\">
                        ";
            // line 144
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 144)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 145
                echo "                            <li class=\"list-inline-item me-0\"><i class=\"fas fa-star text-warning\"></i></li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 147) < 5)) {
                // line 148
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(twig_get_attribute($this->env, $this->source, $context["review"], "rating", [], "any", false, false, false, 148), 4));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 149
                    echo "                                <li class=\"list-inline-item me-0\"><i class=\"far fa-star text-warning\"></i></li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 151
                echo "                        ";
            }
            // line 152
            echo "                        
                    </ul>
                </div>
                <!-- Info -->
                <p class=\"small mb-2\">";
            // line 156
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "createdAt", [], "any", false, false, false, 156), "d/m/Y - H:i:s"), "html", null, true);
            echo "</p>
                <p class=\"mb-2\">";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["review"], "message", [], "any", false, false, false, 157), "html", null, true);
            echo "</p>

            </div>
        </div>
        <!-- Divider -->
        <hr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "</div>
<!-- Student review END -->
";
        // line 166
        if (((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 166, $this->source); })()), "user", [], "any", false, false, false, 166) &&  !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 166, $this->source); })()), "user", [], "any", false, false, false, 166), "eleve", [], "any", false, false, false, 166) === null)) && twig_in_filter((isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 166, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 166, $this->source); })()), "user", [], "any", false, false, false, 166), "eleve", [], "any", false, false, false, 166), "cours", [], "any", false, false, false, 166)))) {
            // line 167
            echo "    <!-- Leave Review START -->
    <div class=\"mt-2\">
        <h5 class=\"mb-4\">Leave a Review</h5>
        ";
            // line 171
            echo "        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["fromReview"]) || array_key_exists("fromReview", $context) ? $context["fromReview"] : (function () { throw new RuntimeError('Variable "fromReview" does not exist.', 171, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-3"]]);
            echo "
            <!-- Rating -->
            <div class=\"col-12\">
                ";
            // line 174
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fromReview"]) || array_key_exists("fromReview", $context) ? $context["fromReview"] : (function () { throw new RuntimeError('Variable "fromReview" does not exist.', 174, $this->source); })()), "rating", [], "any", false, false, false, 174), 'widget');
            echo "
            </div>
            <!-- Message -->
            <div class=\"col-12\">
                ";
            // line 178
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["fromReview"]) || array_key_exists("fromReview", $context) ? $context["fromReview"] : (function () { throw new RuntimeError('Variable "fromReview" does not exist.', 178, $this->source); })()), "message", [], "any", false, false, false, 178), 'widget');
            echo "
            </div>
            <!-- Button -->
            <div class=\"col-12\">
                <button type=\"submit\" class=\"btn btn-primary mb-0\">Post Review</button>
            </div>
        ";
            // line 184
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["fromReview"]) || array_key_exists("fromReview", $context) ? $context["fromReview"] : (function () { throw new RuntimeError('Variable "fromReview" does not exist.', 184, $this->source); })()), 'form_end');
            echo "
    </div>
    <!-- Leave Review END -->
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/includes/courses/_course_reviews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  346 => 184,  337 => 178,  330 => 174,  323 => 171,  318 => 167,  316 => 166,  312 => 164,  299 => 157,  295 => 156,  289 => 152,  286 => 151,  279 => 149,  274 => 148,  271 => 147,  264 => 145,  260 => 144,  254 => 141,  246 => 136,  236 => 131,  211 => 109,  188 => 89,  165 => 69,  155 => 61,  148 => 59,  144 => 58,  133 => 50,  124 => 43,  117 => 41,  113 => 40,  102 => 32,  88 => 20,  85 => 19,  78 => 17,  73 => 16,  70 => 15,  63 => 13,  59 => 12,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Review START -->
<div class=\"row mb-4\">
    <h5 class=\"mb-4\">Our Student Reviews</h5>

    <!-- Rating info -->
    <div class=\"col-md-4 mb-3 mb-md-0\">
        <div class=\"text-center\">
            <!-- Info -->
            <h2 class=\"mb-0\">{{ course.review / nbReviews }}</h2>
            <!-- Star -->
            <ul class=\"list-inline mb-0\">
                {% for cmp in 1..(course.review / nbReviews) %}
                    <li class=\"list-inline-item me-0\"><i class=\"fas fa-star text-warning\"></i></li>
                {% endfor %}
                {% if course.review / nbReviews  < 5 %}
                    {% for cmp in (course.review / nbReviews)..4 %}
                        <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                    {% endfor %}
                {% endif %}
            </ul>
            <p class=\"mb-0\">(Based on todays review)</p>
        </div>
    </div>

    <!-- Progress-bar and star -->
    <div class=\"col-md-8\">
        <div class=\"row align-items-center text-center\">
            <!-- Progress bar and Rating -->
            <div class=\"col-6 col-sm-8\">
                <!-- Progress item -->
                <div class=\"progress progress-sm bg-warning bg-opacity-15\">
                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: {{ (fiveStarsReviews|length / nbReviews) * 100 }}%\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                    </div>
                </div>
            </div>

            <div class=\"col-6 col-sm-4\">
                <!-- Star item -->
                <ul class=\"list-inline mb-0\">
                    {% for i in 1..5 %}
                        <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                    {% endfor %}
                </ul>
            </div>

            <!-- Progress bar and Rating -->
            <div class=\"col-6 col-sm-8\">
                <!-- Progress item -->
                <div class=\"progress progress-sm bg-warning bg-opacity-15\">
                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: {{ (fourStarsReviews|length / nbReviews) * 100 }}%\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                    </div>
                </div>
            </div>

            <div class=\"col-6 col-sm-4\">
                <!-- Star item -->
                <ul class=\"list-inline mb-0\">
                    {% for i in 1..4 %}
                        <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                    {% endfor %}
                    <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                </ul>
            </div>

            <!-- Progress bar and Rating -->
            <div class=\"col-6 col-sm-8\">
                <!-- Progress item -->
                <div class=\"progress progress-sm bg-warning bg-opacity-15\">
                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: {{ (treeStarsReviews|length / nbReviews) * 100 }}%\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                    </div>
                </div>
            </div>

            <div class=\"col-6 col-sm-4\">
                <!-- Star item -->
                <ul class=\"list-inline mb-0\">
                    <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                    <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                    <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                    <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                    <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                </ul>
            </div>

            <!-- Progress bar and Rating -->
            <div class=\"col-6 col-sm-8\">
                <!-- Progress item -->
                <div class=\"progress progress-sm bg-warning bg-opacity-15\">
                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: {{ (twoStarsReviews|length / nbReviews) * 100 }}%\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                    </div>
                </div>
            </div>

            <div class=\"col-6 col-sm-4\">
                <!-- Star item -->
                <ul class=\"list-inline mb-0\">
                    <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                    <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                    <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                    <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                    <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                </ul>
            </div>

            <!-- Progress bar and Rating -->
            <div class=\"col-6 col-sm-8\">
                <!-- Progress item -->
                <div class=\"progress progress-sm bg-warning bg-opacity-15\">
                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: {{ (oneStarReviews|length / nbReviews) * 100 }}%\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\">
                    </div>
                </div>
            </div>

            <div class=\"col-6 col-sm-4\">
                <!-- Star item -->
                <ul class=\"list-inline mb-0\">
                    <li class=\"list-inline-item me-0 small\"><i class=\"fas fa-star text-warning\"></i></li>
                    <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                    <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                    <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                    <li class=\"list-inline-item me-0 small\"><i class=\"far fa-star text-warning\"></i></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Review END -->

<!-- Student review START -->
<div class=\"row\">
    {% for review in course.reviews %} 
        <!-- Review item START -->
        <div class=\"d-md-flex my-4\">
            <!-- Avatar -->
            <div class=\"avatar avatar-xl me-4 flex-shrink-0\">   
                <img class=\"avatar-img rounded-circle\" src=\"{{ asset('uploads/images/eleves/' ~ review.eleve.utilisateur.personne.avatar) }}\" alt=\"avatar\">
            </div>
            <!-- Text -->
            <div>
                <div class=\"d-sm-flex mt-1 mt-md-0 align-items-center\">
                    <h5 class=\"me-3 mb-0\">{{ review.eleve.utilisateur.personne.nomComplet }}</h5>
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
                        
                    </ul>
                </div>
                <!-- Info -->
                <p class=\"small mb-2\">{{ review.createdAt|date('d/m/Y - H:i:s') }}</p>
                <p class=\"mb-2\">{{ review.message }}</p>

            </div>
        </div>
        <!-- Divider -->
        <hr>
    {% endfor %}
</div>
<!-- Student review END -->
{% if app.user and app.user.eleve is not same as null and course in app.user.eleve.cours %}
    <!-- Leave Review START -->
    <div class=\"mt-2\">
        <h5 class=\"mb-4\">Leave a Review</h5>
        {# <form class=\"row g-3\"> #}
        {{ form_start(fromReview, {'attr': {'class': 'row g-3'}}) }}
            <!-- Rating -->
            <div class=\"col-12\">
                {{ form_widget(fromReview.rating) }}
            </div>
            <!-- Message -->
            <div class=\"col-12\">
                {{ form_widget(fromReview.message) }}
            </div>
            <!-- Button -->
            <div class=\"col-12\">
                <button type=\"submit\" class=\"btn btn-primary mb-0\">Post Review</button>
            </div>
        {{ form_end(fromReview) }}
    </div>
    <!-- Leave Review END -->
{% endif %}", "front/includes/courses/_course_reviews.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\includes\\courses\\_course_reviews.html.twig");
    }
}
