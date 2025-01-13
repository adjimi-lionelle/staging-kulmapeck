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

/* instructor/network/retrait.html.twig */
class __TwigTemplate_a4f682cfd848ae41415832357f5f24c6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/network/retrait.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/network/retrait.html.twig"));

        $this->parent = $this->loadTemplate("instructor/base.html.twig", "instructor/network/retrait.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        // line 4
        echo "
    <div class=\"card bg-transparent border rounded-3\">
        <div class=\"card-body\">
            ";
        // line 7
        if ( !array_key_exists("showHistorique", $context)) {
            // line 8
            echo "                <div class=\"alert alert-info\">
                    <p>
                        <label>Montant Disponible : </label>
                        <i>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 11, $this->source); })()), "utilisateur", [], "any", false, false, false, 11), "especes", [], "any", false, false, false, 11), "html", null, true);
            echo " XAF</i>
                    </p>
                    <p>
                        <label>Minimun retirable : </label>
                        <i> ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["networkConfig"]) || array_key_exists("networkConfig", $context) ? $context["networkConfig"] : (function () { throw new RuntimeError('Variable "networkConfig" does not exist.', 15, $this->source); })()), "minimumRetirable", [], "any", false, false, false, 15), "html", null, true);
            echo " XAF</i>
                    </p>
                    <p>
                        <a href=\"";
            // line 18
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_instructor_network_retraits");
            echo "\">Historique des retraits</a>
                    </p>
                </div>
                <div>
                    ";
            // line 22
            if ((twig_get_attribute($this->env, $this->source, (isset($context["networkConfig"]) || array_key_exists("networkConfig", $context) ? $context["networkConfig"] : (function () { throw new RuntimeError('Variable "networkConfig" does not exist.', 22, $this->source); })()), "minimumRetirable", [], "any", false, false, false, 22) < twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["enseignant"]) || array_key_exists("enseignant", $context) ? $context["enseignant"] : (function () { throw new RuntimeError('Variable "enseignant" does not exist.', 22, $this->source); })()), "utilisateur", [], "any", false, false, false, 22), "especes", [], "any", false, false, false, 22))) {
                // line 23
                echo "                        ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start');
                echo "
                            ";
                // line 24
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'widget');
                echo "
                            <hr>
                            <button type=\"submit\" class=\"btn btn-primary-soft\">Retirer</button>
                        ";
                // line 27
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_end');
                echo "
                    ";
            } else {
                // line 29
                echo "                        <div class=\"alert alert-danger\">
                            <p>Action impossible. Vous n'avez pas le minimun retirable</p>
                        </div>
                    ";
            }
            // line 33
            echo "                </div>
            ";
        } else {
            // line 35
            echo "                <div class=\"alert alert-info\">
                    <p>
                        <strong>Nombre total de retraits</strong> : 
                        <span> ";
            // line 38
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["retraits"]) || array_key_exists("retraits", $context) ? $context["retraits"] : (function () { throw new RuntimeError('Variable "retraits" does not exist.', 38, $this->source); })())), "html", null, true);
            echo " </span>
                    </p>
                    <p>
                        <strong>Montant total retiré : </strong>
                        <span> ";
            // line 42
            echo twig_escape_filter($this->env, (isset($context["montantTotal"]) || array_key_exists("montantTotal", $context) ? $context["montantTotal"] : (function () { throw new RuntimeError('Variable "montantTotal" does not exist.', 42, $this->source); })()), "html", null, true);
            echo " XAF</span>
                    </p>
                    <p>
                        <a href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_instructor_network_retrait");
            echo "\">Effectuer un retrait</a>
                    </p>
                </div>
                <div class=\"table-responsive border-0\">
                    <table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
                        <!-- Table head -->
                        <thead>
                            <tr>
                                <th scope=\"col\" class=\"border-0 rounded-start\">#</th>
                                <th scope=\"col\" class=\"border-0\">Date</th>
                                <th scope=\"col\" class=\"border-0\">Montant</th>
                                <th scope=\"col\" class=\"border-0\">Methode</th>
                                <th scope=\"col\" class=\"border-0\">Telephone</th>
                                <th scope=\"col\" class=\"border-0 rounded-end\">Statut</th>
                            </tr>
                        </thead>
                        <!-- Table body START -->
                        <tbody>
                            ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["retraits"]) || array_key_exists("retraits", $context) ? $context["retraits"] : (function () { throw new RuntimeError('Variable "retraits" does not exist.', 63, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["retrait"]) {
                // line 64
                echo "                                <tr>
                                    <td> ";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 65), "html", null, true);
                echo " </td>
                                    <td> ";
                // line 66
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["retrait"], "createdAt", [], "any", false, false, false, 66), "d/m/Y"), "html", null, true);
                echo " </td>
                                    <td>";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["retrait"], "montant", [], "any", false, false, false, 67), "html", null, true);
                echo " XAF</td>
                                    <td> ";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["retrait"], "paymentMethod", [], "any", false, false, false, 68), "code", [], "any", false, false, false, 68), "html", null, true);
                echo " </td>
                                    <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["retrait"], "numeroTelephone", [], "any", false, false, false, 69), "html", null, true);
                echo "</td>
                                    <td></td>
                                </tr>
                            ";
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
                // line 73
                echo "                                <tr>
                                    <td colspan=\"6\">Vous návez effectuer aucun retrait !</td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['retrait'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "                        </tbody>
                    </table>
                </div>
            ";
        }
        // line 81
        echo "        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "instructor/network/retrait.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 81,  230 => 77,  221 => 73,  204 => 69,  200 => 68,  196 => 67,  192 => 66,  188 => 65,  185 => 64,  167 => 63,  146 => 45,  140 => 42,  133 => 38,  128 => 35,  124 => 33,  118 => 29,  113 => 27,  107 => 24,  102 => 23,  100 => 22,  93 => 18,  87 => 15,  80 => 11,  75 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"instructor/base.html.twig\" %}

{% block pageContent %}

    <div class=\"card bg-transparent border rounded-3\">
        <div class=\"card-body\">
            {% if not showHistorique is defined %}
                <div class=\"alert alert-info\">
                    <p>
                        <label>Montant Disponible : </label>
                        <i>{{ enseignant.utilisateur.especes }} XAF</i>
                    </p>
                    <p>
                        <label>Minimun retirable : </label>
                        <i> {{ networkConfig.minimumRetirable }} XAF</i>
                    </p>
                    <p>
                        <a href=\"{{ url(\"app_instructor_network_retraits\") }}\">Historique des retraits</a>
                    </p>
                </div>
                <div>
                    {% if networkConfig.minimumRetirable < enseignant.utilisateur.especes %}
                        {{ form_start(form) }}
                            {{ form_widget(form) }}
                            <hr>
                            <button type=\"submit\" class=\"btn btn-primary-soft\">Retirer</button>
                        {{ form_end(form) }}
                    {% else %}
                        <div class=\"alert alert-danger\">
                            <p>Action impossible. Vous n'avez pas le minimun retirable</p>
                        </div>
                    {% endif %}
                </div>
            {% else %}
                <div class=\"alert alert-info\">
                    <p>
                        <strong>Nombre total de retraits</strong> : 
                        <span> {{ retraits|length }} </span>
                    </p>
                    <p>
                        <strong>Montant total retiré : </strong>
                        <span> {{ montantTotal }} XAF</span>
                    </p>
                    <p>
                        <a href=\"{{ url(\"app_instructor_network_retrait\") }}\">Effectuer un retrait</a>
                    </p>
                </div>
                <div class=\"table-responsive border-0\">
                    <table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
                        <!-- Table head -->
                        <thead>
                            <tr>
                                <th scope=\"col\" class=\"border-0 rounded-start\">#</th>
                                <th scope=\"col\" class=\"border-0\">Date</th>
                                <th scope=\"col\" class=\"border-0\">Montant</th>
                                <th scope=\"col\" class=\"border-0\">Methode</th>
                                <th scope=\"col\" class=\"border-0\">Telephone</th>
                                <th scope=\"col\" class=\"border-0 rounded-end\">Statut</th>
                            </tr>
                        </thead>
                        <!-- Table body START -->
                        <tbody>
                            {% for retrait in retraits %}
                                <tr>
                                    <td> {{ loop.index }} </td>
                                    <td> {{ retrait.createdAt|date(\"d/m/Y\") }} </td>
                                    <td>{{ retrait.montant }} XAF</td>
                                    <td> {{ retrait.paymentMethod.code }} </td>
                                    <td>{{ retrait.numeroTelephone }}</td>
                                    <td></td>
                                </tr>
                            {% else %}
                                <tr>
                                    <td colspan=\"6\">Vous návez effectuer aucun retrait !</td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            {% endif %}
        </div>
    </div>

{% endblock %}", "instructor/network/retrait.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\instructor\\network\\retrait.html.twig");
    }
}
