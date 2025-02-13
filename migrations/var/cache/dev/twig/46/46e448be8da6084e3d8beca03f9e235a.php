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

/* admin/enseignant/_reject_modal.html.twig */
class __TwigTemplate_1b67de5e534c6b32a4e2130b4df5df43 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/enseignant/_reject_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/enseignant/_reject_modal.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"modal-reject-request-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1), "html", null, true);
        echo "\">
    <form class=\"modal-dialog\" method=\"POST\" action=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_enseignant_reject_request", ["reference" => twig_get_attribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 2, $this->source); })()), "reference", [], "any", false, false, false, 2)]), "html", null, true);
        echo "\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-dark\">
                <h5 class=\"modal-title text-white\" id=\"viewReviewLabel\">Rejeter la demande</h5>
                <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
            </div>
            
            <div class=\"modal-body\">
                <div>
                    <label for=\"mofif-rejet-";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "\" class=\"form-label\">Entrer le motif du rejet</label>
                    <textarea name=\"motif\" id=\"\" cols=\"30\" rows=\"7\" class=\"form-control\"></textarea>
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("reject" . twig_get_attribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13))), "html", null, true);
        echo "\">
                </div>
            </div>

            <!-- Modal footer -->
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Fermer</button>
                <button type=\"submit\" class=\"btn btn-warning-soft my-0\">Rejeter</button>
            </div>
        </div>
    </form>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/enseignant/_reject_modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  60 => 11,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"modal fade\" id=\"modal-reject-request-{{ e.id }}\">
    <form class=\"modal-dialog\" method=\"POST\" action=\"{{ path('app_admin_enseignant_reject_request', {reference: e.reference}) }}\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-dark\">
                <h5 class=\"modal-title text-white\" id=\"viewReviewLabel\">Rejeter la demande</h5>
                <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
            </div>
            
            <div class=\"modal-body\">
                <div>
                    <label for=\"mofif-rejet-{{e.id}}\" class=\"form-label\">Entrer le motif du rejet</label>
                    <textarea name=\"motif\" id=\"\" cols=\"30\" rows=\"7\" class=\"form-control\"></textarea>
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('reject' ~ e.id) }}\">
                </div>
            </div>

            <!-- Modal footer -->
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Fermer</button>
                <button type=\"submit\" class=\"btn btn-warning-soft my-0\">Rejeter</button>
            </div>
        </div>
    </form>
</div>", "admin/enseignant/_reject_modal.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\enseignant\\_reject_modal.html.twig");
    }
}
