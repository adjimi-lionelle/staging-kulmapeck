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

/* admin/setting/_notification_setting.html.twig */
class __TwigTemplate_d4828c9977589f9e800d1451cc3fff21 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/_notification_setting.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/setting/_notification_setting.html.twig"));

        // line 1
        echo "<!-- Notification setting content START -->
<div class=\"tab-pane\" id=\"tab-3\">
    <!-- Notification START -->
    <div class=\"card shadow\">
        <!-- Card header -->
        <div class=\"card-header border-bottom\">
            <h5 class=\"card-header-title\">Notifications Settings</h5>
        </div>

        <!-- Card body -->
        <div class=\"card-body\">
            <!-- General nofification -->
            <h6 class=\"mb-2\">Choose type of notifications you want to receive</h6>
            <div class=\"form-check form-switch form-check-md mb-3\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"checkPrivacy12\" checked=\"\">
                <label class=\"form-check-label\" for=\"checkPrivacy12\">Withdrawal activity</label>
            </div>
            <div class=\"form-check form-switch form-check-md mb-3\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"checkPrivacy2\">
                <label class=\"form-check-label\" for=\"checkPrivacy2\">Weekly report</label>
            </div>
            <div class=\"form-check form-switch form-check-md mb-3\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"checkPrivacy3\" checked=\"\">
                <label class=\"form-check-label\" for=\"checkPrivacy3\">Password change</label>
            </div>
            <div class=\"form-check form-switch form-check-md mb-0\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"checkPrivacy4\">
                <label class=\"form-check-label\" for=\"checkPrivacy4\">Play sound on a message</label>
            </div>

            <!-- Instructor notification -->
            <h6 class=\"mb-2 mt-4\">Instructor Related Notification</h6>
            <div class=\"form-check form-switch form-check-md mb-3\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"checkPrivacy11\" checked=\"\">
                <label class=\"form-check-label\" for=\"checkPrivacy5\">Joining new instructors</label>
            </div>
            <div class=\"form-check form-switch form-check-md mb-3\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"checkPrivacy5\">
                <label class=\"form-check-label\" for=\"checkPrivacy5\">Notify when the instructorss added new courses</label>
            </div>
            <div class=\"form-check form-switch form-check-md mb-3\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"checkPrivacy6\" checked=\"\">
                <label class=\"form-check-label\" for=\"checkPrivacy6\">Notify when instructors update courses</label>
            </div>
            <div class=\"form-check form-switch form-check-md mb-0\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"checkPrivacy7\">
                <label class=\"form-check-label\" for=\"checkPrivacy7\">Course weekly report</label>
            </div>

            <!-- Student notification -->
            <h6 class=\"mb-2 mt-4\">Student Related Notification</h6>
            <div class=\"form-check form-switch form-check-md mb-3\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"checkPrivacy8\" checked=\"\">
                <label class=\"form-check-label\" for=\"checkPrivacy8\">Joining new student</label>
            </div>
            <div class=\"form-check form-switch form-check-md mb-3\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"checkPrivacy9\">
                <label class=\"form-check-label\" for=\"checkPrivacy9\">Notify when students purchase new courses</label>
            </div>
            <div class=\"form-check form-switch form-check-md mb-0\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"checkPrivacy10\">
                <label class=\"form-check-label\" for=\"checkPrivacy10\">Course weekly report</label>
            </div>
        </div>
    </div>
    <!-- Notification START -->
</div>
<!-- Notification setting content END -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/setting/_notification_setting.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Notification setting content START -->
<div class=\"tab-pane\" id=\"tab-3\">
    <!-- Notification START -->
    <div class=\"card shadow\">
        <!-- Card header -->
        <div class=\"card-header border-bottom\">
            <h5 class=\"card-header-title\">Notifications Settings</h5>
        </div>

        <!-- Card body -->
        <div class=\"card-body\">
            <!-- General nofification -->
            <h6 class=\"mb-2\">Choose type of notifications you want to receive</h6>
            <div class=\"form-check form-switch form-check-md mb-3\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"checkPrivacy12\" checked=\"\">
                <label class=\"form-check-label\" for=\"checkPrivacy12\">Withdrawal activity</label>
            </div>
            <div class=\"form-check form-switch form-check-md mb-3\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"checkPrivacy2\">
                <label class=\"form-check-label\" for=\"checkPrivacy2\">Weekly report</label>
            </div>
            <div class=\"form-check form-switch form-check-md mb-3\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"checkPrivacy3\" checked=\"\">
                <label class=\"form-check-label\" for=\"checkPrivacy3\">Password change</label>
            </div>
            <div class=\"form-check form-switch form-check-md mb-0\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"checkPrivacy4\">
                <label class=\"form-check-label\" for=\"checkPrivacy4\">Play sound on a message</label>
            </div>

            <!-- Instructor notification -->
            <h6 class=\"mb-2 mt-4\">Instructor Related Notification</h6>
            <div class=\"form-check form-switch form-check-md mb-3\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"checkPrivacy11\" checked=\"\">
                <label class=\"form-check-label\" for=\"checkPrivacy5\">Joining new instructors</label>
            </div>
            <div class=\"form-check form-switch form-check-md mb-3\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"checkPrivacy5\">
                <label class=\"form-check-label\" for=\"checkPrivacy5\">Notify when the instructorss added new courses</label>
            </div>
            <div class=\"form-check form-switch form-check-md mb-3\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"checkPrivacy6\" checked=\"\">
                <label class=\"form-check-label\" for=\"checkPrivacy6\">Notify when instructors update courses</label>
            </div>
            <div class=\"form-check form-switch form-check-md mb-0\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"checkPrivacy7\">
                <label class=\"form-check-label\" for=\"checkPrivacy7\">Course weekly report</label>
            </div>

            <!-- Student notification -->
            <h6 class=\"mb-2 mt-4\">Student Related Notification</h6>
            <div class=\"form-check form-switch form-check-md mb-3\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"checkPrivacy8\" checked=\"\">
                <label class=\"form-check-label\" for=\"checkPrivacy8\">Joining new student</label>
            </div>
            <div class=\"form-check form-switch form-check-md mb-3\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"checkPrivacy9\">
                <label class=\"form-check-label\" for=\"checkPrivacy9\">Notify when students purchase new courses</label>
            </div>
            <div class=\"form-check form-switch form-check-md mb-0\">
                <input class=\"form-check-input\" type=\"checkbox\" id=\"checkPrivacy10\">
                <label class=\"form-check-label\" for=\"checkPrivacy10\">Course weekly report</label>
            </div>
        </div>
    </div>
    <!-- Notification START -->
</div>
<!-- Notification setting content END -->", "admin/setting/_notification_setting.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\setting\\_notification_setting.html.twig");
    }
}
