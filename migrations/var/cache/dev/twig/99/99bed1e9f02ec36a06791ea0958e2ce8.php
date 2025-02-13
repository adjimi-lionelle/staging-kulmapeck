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

/* front/includes/teacher_item.html.twig */
class __TwigTemplate_2e5f44205eb827850291980c84a32192 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/teacher_item.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/includes/teacher_item.html.twig"));

        // line 1
        echo "<div class=\"member\">
        <img src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("front/img/trainers/trainer-1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
        <div class=\"member-content\">
            <h4>Walter White</h4>
            <span>Web Development</span>
            <p>
                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
            </p>
            <div class=\"social\">
                <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
            </div>
        </div>
    </div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "front/includes/teacher_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"member\">
        <img src=\"{{ asset('front/img/trainers/trainer-1.jpg') }}\" class=\"img-fluid\" alt=\"\">
        <div class=\"member-content\">
            <h4>Walter White</h4>
            <span>Web Development</span>
            <p>
                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut
            </p>
            <div class=\"social\">
                <a href=\"\"><i class=\"bi bi-twitter\"></i></a>
                <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
                <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
                <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
            </div>
        </div>
    </div>", "front/includes/teacher_item.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\includes\\teacher_item.html.twig");
    }
}
