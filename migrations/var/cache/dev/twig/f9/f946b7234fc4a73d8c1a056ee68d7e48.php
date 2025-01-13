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

/* admin/enseignant/_accept.html.twig */
class __TwigTemplate_7d380c7cd9c542f16e89717eea81d777 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/enseignant/_accept.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/enseignant/_accept.html.twig"));

        // line 1
        echo "<div class=\"dropup d-inline\">
    <a href=\"#\" class=\"btn btn-success-soft btn-sm me-1 mb-1 mb-lg-0\" role=\"button\" id=\"dropdownShare";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 2, $this->source); })()), "id", [], "any", false, false, false, 2), "html", null, true);
        echo "\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
        Accept <i class=\"bi bi-three-dots fa-fw\"></i>
    </a>
    <!-- dropdown button -->
    <ul class=\"dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded\" aria-labelledby=\"dropdownShare";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
        <li><a onclick=\"return confirm('Etes-vous sure de vouloir poursuivre cette action ?')\" class=\"dropdown-item\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_enseignant_accept_request", ["reference" => twig_get_attribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 7, $this->source); })()), "reference", [], "any", false, false, false, 7), "type" => "confirmed"]), "html", null, true);
        echo "\"><i class=\"bi bi-pencil-square fa-fw me-2\"></i>Enseignant confirmé</a></li>
        
        <li><a onclick=\"return confirm('Etes-vous sure de vouloir poursuivre cette action ?')\" class=\"dropdown-item\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_enseignant_accept_request", ["reference" => twig_get_attribute($this->env, $this->source, (isset($context["e"]) || array_key_exists("e", $context) ? $context["e"] : (function () { throw new RuntimeError('Variable "e" does not exist.', 9, $this->source); })()), "reference", [], "any", false, false, false, 9), "type" => "junior"]), "html", null, true);
        echo "\"><i class=\"bi bi-pencil-square fa-fw me-2\"></i>Enseignant Junior</a></li>
        
    </ul>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/enseignant/_accept.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 9,  57 => 7,  53 => 6,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"dropup d-inline\">
    <a href=\"#\" class=\"btn btn-success-soft btn-sm me-1 mb-1 mb-lg-0\" role=\"button\" id=\"dropdownShare{{e.id}}\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
        Accept <i class=\"bi bi-three-dots fa-fw\"></i>
    </a>
    <!-- dropdown button -->
    <ul class=\"dropdown-menu dropdown-w-sm dropdown-menu-end min-w-auto shadow rounded\" aria-labelledby=\"dropdownShare{{e.id}}\">
        <li><a onclick=\"return confirm('Etes-vous sure de vouloir poursuivre cette action ?')\" class=\"dropdown-item\" href=\"{{ path('app_admin_enseignant_accept_request', {reference: e.reference, type: 'confirmed'}) }}\"><i class=\"bi bi-pencil-square fa-fw me-2\"></i>Enseignant confirmé</a></li>
        
        <li><a onclick=\"return confirm('Etes-vous sure de vouloir poursuivre cette action ?')\" class=\"dropdown-item\" href=\"{{ path('app_admin_enseignant_accept_request', {reference: e.reference, type: 'junior'}) }}\"><i class=\"bi bi-pencil-square fa-fw me-2\"></i>Enseignant Junior</a></li>
        
    </ul>
</div>", "admin/enseignant/_accept.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\enseignant\\_accept.html.twig");
    }
}
