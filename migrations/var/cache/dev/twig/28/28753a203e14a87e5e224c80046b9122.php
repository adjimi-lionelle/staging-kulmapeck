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

/* admin/_side_bar.html.twig */
class __TwigTemplate_83a4694c188ccfb0748c51bf795b97fd extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/_side_bar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/_side_bar.html.twig"));

        // line 1
        echo "<!-- Sidebar START -->
    <nav class=\"navbar sidebar navbar-expand-xl navbar-dark bg-dark\">

        <!-- Navbar brand for xl START -->
        <div class=\"d-flex align-items-center\">
            <a class=\"navbar-brand\" href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        echo "\">
                <img class=\"navbar-brand-item\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-light.svg"), "html", null, true);
        echo "\" alt=\"\">
            </a>
        </div>
        <!-- Navbar brand for xl END -->
        
        <div class=\"offcanvas offcanvas-start flex-row custom-scrollbar h-100\" data-bs-backdrop=\"true\" tabindex=\"-1\" id=\"offcanvasSidebar\">
            <div class=\"offcanvas-body sidebar-content d-flex flex-column bg-dark\">

                <!-- Sidebar menu START -->
                <ul class=\"navbar-nav flex-column\" id=\"navbar-sidebar\">
                    
                    <!-- Menu item 1 -->
                    <li class=\"nav-item\">
                        <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        echo "\" class=\"nav-link ";
        echo ((array_key_exists("isHome", $context)) ? ("active") : (""));
        echo "\"><i class=\"bi bi-house fa-fw me-2\"></i>Dashboard</a>
                    </li>
                    
                    <!-- menu item 2 -->
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#collapsepage\" role=\"button\" aria-expanded=\"";
        // line 25
        echo ((array_key_exists("isCourses", $context)) ? ("true") : ("false"));
        echo "\" aria-controls=\"collapsepage\">
                            <i class=\"bi bi-basket fa-fw me-2\"></i>Courses
                        </a>
                        <!-- Submenu -->
                        <ul class=\"nav collapse flex-column ";
        // line 29
        echo ((array_key_exists("isCourses", $context)) ? ("show") : (""));
        echo "\" id=\"collapsepage\" data-bs-parent=\"#navbar-sidebar\">
                            <li class=\"nav-item\"> <a class=\"nav-link ";
        // line 30
        echo ((array_key_exists("coc", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_cours_index");
        echo "\">All Courses</a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link ";
        // line 31
        echo ((array_key_exists("cac", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_categorie_index");
        echo "\">Course Category</a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link ";
        // line 32
        echo ((array_key_exists("exc", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_admin_exam");
        echo "\">Anciens sujets</a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link ";
        // line 33
        echo ((array_key_exists("evc", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_admin_evaluation_index");
        echo "\">Evaluations</a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link ";
        // line 34
        echo ((array_key_exists("isFormationController", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_admin_formation_index");
        echo "\">Formations</a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link ";
        // line 35
        echo ((array_key_exists("isForumController", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_forum_index");
        echo "\">Forum</a></li>
                        </ul>
                    </li>

                    <!-- Menu item 3 -->
                    <li class=\"nav-item\"> 
                        <a class=\"nav-link ";
        // line 41
        echo ((array_key_exists("elc", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_eleve_index");
        echo "\">
                            <i class=\"fas fa-user-graduate fa-fw me-2\"></i>Students
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#collapsepageIN\" role=\"button\" aria-expanded=\"";
        // line 47
        echo ((array_key_exists("isEnseignants", $context)) ? ("true") : ("false"));
        echo "\" aria-controls=\"collapsepageIN\">
                            <i class=\"bi bi-basket fa-fw me-2\"></i>Instructors
                        </a>
                        <!-- Submenu -->
                        <ul class=\"nav collapse flex-column ";
        // line 51
        echo ((array_key_exists("isEnseignants", $context)) ? ("show") : (""));
        echo "\" id=\"collapsepageIN\" data-bs-parent=\"#navbar-sidebar\">
                            <li class=\"nav-item\"> <a class=\"nav-link ";
        // line 52
        echo ((array_key_exists("eni", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_enseignant_index");
        echo "\">Instructors list</a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link ";
        // line 53
        echo ((array_key_exists("enr", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_enseignant_request");
        echo "\">Instructors request</a></li>
                        </ul>
                    </li>


                    <!-- Title -->
                    <li class=\"nav-item ms-2 my-2\">Settings</li>

                    <!-- Menu item 4 -->
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 63
        echo ((array_key_exists("isAbonnementController", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_abonnement_index");
        echo "\" role=\"button\" aria-expanded=\"false\">
                            <i class=\"fas fa-user-cog fa-fw me-2\"></i>Abonnements
                        </a>
                    </li> 

                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 69
        echo ((array_key_exists("isSettingController", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_setting");
        echo "\" role=\"button\" aria-expanded=\"false\">
                            <i class=\"fas fa-user-cog fa-fw me-2\"></i>Admin Settings
                        </a>
                    </li> 

                    <!-- menu item 2 -->
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#collapsepageI\" role=\"button\" aria-expanded=\"";
        // line 76
        echo ((array_key_exists("isInstitution", $context)) ? ("true") : ("false"));
        echo "\" aria-controls=\"collapsepageI\">
                            <i class=\"bi bi-basket fa-fw me-2\"></i>Institution
                        </a>
                        <!-- Submenu -->
                        <ul class=\"nav collapse flex-column ";
        // line 80
        echo ((array_key_exists("isInstitution", $context)) ? ("show") : (""));
        echo "\" id=\"collapsepageI\" data-bs-parent=\"#navbar-sidebar\">
                            <li class=\"nav-item\"> 
                                <a class=\"nav-link ";
        // line 82
        echo ((array_key_exists("sss", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_sous_systeme_index");
        echo "\">Sous-système</a>
                            </li>
                            <li class=\"nav-item\"> <a class=\"nav-link ";
        // line 84
        echo ((array_key_exists("tec", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_type_enseignement_index");
        echo "\">Type Enseignement</a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link ";
        // line 85
        echo ((array_key_exists("etc", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_etablissement_index");
        echo "\">Etablissements</a></li>
                        </ul>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#collapsepageCI\" role=\"button\" aria-expanded=\"";
        // line 90
        echo ((array_key_exists("isClasses", $context)) ? ("true") : ("false"));
        echo "\" aria-controls=\"collapsepageCI\">
                            <i class=\"bi bi-basket fa-fw me-2\"></i>Manage Classes
                        </a>
                        <!-- Submenu -->
                        <ul class=\"nav collapse flex-column ";
        // line 94
        echo ((array_key_exists("isClasses", $context)) ? ("show") : (""));
        echo "\" id=\"collapsepageCI\" data-bs-parent=\"#navbar-sidebar\">
                            <li class=\"nav-item\"> <a class=\"nav-link ";
        // line 95
        echo ((array_key_exists("fic", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_filiere_index");
        echo "\">Filières</a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link ";
        // line 96
        echo ((array_key_exists("spc", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_specialite_index");
        echo "\">Spécialités</a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link ";
        // line 97
        echo ((array_key_exists("clc", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_classe_index");
        echo "\">Classes</a></li>
                        </ul>
                    </li>

                    <!-- Title -->
                    <li class=\"nav-item ms-2 my-2\">Autres</li>

                    <!-- Menu item 4 -->
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 106
        echo ((array_key_exists("rec", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_registration");
        echo "\" role=\"button\" aria-expanded=\"false\">
                            <i class=\"fas fa-user-tie fa-fw me-2\"></i>Users
                        </a>
                    </li>                    

                    <!-- Menu item 4 -->
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 113
        echo ((array_key_exists("pac", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_pays_index");
        echo "\" role=\"button\" aria-expanded=\"false\">
                            <i class=\"fas fa-user-tie fa-fw me-2\"></i>Countries
                        </a>
                    </li>

                    <!-- Menu item 4 -->
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 120
        echo ((array_key_exists("tcc", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_term_index");
        echo "\" role=\"button\" aria-expanded=\"false\">
                            <i class=\"far fa-clipboard fa-fw me-2\"></i>Terms & Conditions
                        </a>
                    </li>

                </ul>
                <!-- Sidebar menu end -->

                <!-- Sidebar footer START -->
                <div class=\"px-3 mt-auto pt-3\">
                    <div class=\"d-flex align-items-center justify-content-between text-primary-hover\">
                        <a class=\"h5 mb-0 text-body\" href=\"admin-setting.html\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Settings\">
                            <i class=\"bi bi-gear-fill\"></i>
                        </a>
                        <a class=\"h5 mb-0 text-body\" href=\"";
        // line 134
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Home\">
                            <i class=\"bi bi-globe\"></i>
                        </a>
                        <a class=\"h5 mb-0 text-body\" href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Sign out\">
                            <i class=\"bi bi-power\"></i>
                        </a>
                    </div>
                </div>
                <!-- Sidebar footer END -->
                
            </div>
        </div>
    </nav>
    <!-- Sidebar END -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "admin/_side_bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  319 => 137,  313 => 134,  294 => 120,  282 => 113,  270 => 106,  256 => 97,  250 => 96,  244 => 95,  240 => 94,  233 => 90,  223 => 85,  217 => 84,  210 => 82,  205 => 80,  198 => 76,  186 => 69,  175 => 63,  160 => 53,  154 => 52,  150 => 51,  143 => 47,  132 => 41,  121 => 35,  115 => 34,  109 => 33,  103 => 32,  97 => 31,  91 => 30,  87 => 29,  80 => 25,  70 => 20,  54 => 7,  50 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Sidebar START -->
    <nav class=\"navbar sidebar navbar-expand-xl navbar-dark bg-dark\">

        <!-- Navbar brand for xl START -->
        <div class=\"d-flex align-items-center\">
            <a class=\"navbar-brand\" href=\"{{ path('app_front') }}\">
                <img class=\"navbar-brand-item\" src=\"{{ asset('assets/images/logo-light.svg') }}\" alt=\"\">
            </a>
        </div>
        <!-- Navbar brand for xl END -->
        
        <div class=\"offcanvas offcanvas-start flex-row custom-scrollbar h-100\" data-bs-backdrop=\"true\" tabindex=\"-1\" id=\"offcanvasSidebar\">
            <div class=\"offcanvas-body sidebar-content d-flex flex-column bg-dark\">

                <!-- Sidebar menu START -->
                <ul class=\"navbar-nav flex-column\" id=\"navbar-sidebar\">
                    
                    <!-- Menu item 1 -->
                    <li class=\"nav-item\">
                        <a href=\"{{ path('app_admin_dashboard') }}\" class=\"nav-link {{ isHome is defined ? 'active' : '' }}\"><i class=\"bi bi-house fa-fw me-2\"></i>Dashboard</a>
                    </li>
                    
                    <!-- menu item 2 -->
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#collapsepage\" role=\"button\" aria-expanded=\"{{ isCourses is defined ? 'true' : 'false' }}\" aria-controls=\"collapsepage\">
                            <i class=\"bi bi-basket fa-fw me-2\"></i>Courses
                        </a>
                        <!-- Submenu -->
                        <ul class=\"nav collapse flex-column {{ isCourses is defined ? 'show' : '' }}\" id=\"collapsepage\" data-bs-parent=\"#navbar-sidebar\">
                            <li class=\"nav-item\"> <a class=\"nav-link {{ coc is defined ? 'active' : '' }}\" href=\"{{ path('app_admin_cours_index') }}\">All Courses</a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link {{ cac is defined ? 'active' : '' }}\" href=\"{{ path('app_admin_categorie_index') }}\">Course Category</a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link {{ exc is defined ? 'active' : '' }}\" href=\"{{ url(\"app_admin_exam\") }}\">Anciens sujets</a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link {{ evc is defined ? 'active' : '' }}\" href=\"{{ url(\"app_admin_evaluation_index\") }}\">Evaluations</a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link {{ isFormationController is defined ? 'active' : '' }}\" href=\"{{ url(\"app_admin_formation_index\") }}\">Formations</a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link {{ isForumController is defined ? 'active' : '' }}\" href=\"{{ url(\"app_forum_index\") }}\">Forum</a></li>
                        </ul>
                    </li>

                    <!-- Menu item 3 -->
                    <li class=\"nav-item\"> 
                        <a class=\"nav-link {{ elc is defined ? 'active' : '' }}\" href=\"{{ path('app_admin_eleve_index') }}\">
                            <i class=\"fas fa-user-graduate fa-fw me-2\"></i>Students
                        </a>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#collapsepageIN\" role=\"button\" aria-expanded=\"{{ isEnseignants is defined ? 'true' : 'false' }}\" aria-controls=\"collapsepageIN\">
                            <i class=\"bi bi-basket fa-fw me-2\"></i>Instructors
                        </a>
                        <!-- Submenu -->
                        <ul class=\"nav collapse flex-column {{ isEnseignants is defined ? 'show' : '' }}\" id=\"collapsepageIN\" data-bs-parent=\"#navbar-sidebar\">
                            <li class=\"nav-item\"> <a class=\"nav-link {{ eni is defined ? 'active' : '' }}\" href=\"{{ path('app_admin_enseignant_index') }}\">Instructors list</a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link {{ enr is defined ? 'active' : '' }}\" href=\"{{ path('app_admin_enseignant_request') }}\">Instructors request</a></li>
                        </ul>
                    </li>


                    <!-- Title -->
                    <li class=\"nav-item ms-2 my-2\">Settings</li>

                    <!-- Menu item 4 -->
                    <li class=\"nav-item\">
                        <a class=\"nav-link {{ isAbonnementController is defined ? 'active' : '' }}\" href=\"{{ path('app_admin_abonnement_index') }}\" role=\"button\" aria-expanded=\"false\">
                            <i class=\"fas fa-user-cog fa-fw me-2\"></i>Abonnements
                        </a>
                    </li> 

                    <li class=\"nav-item\">
                        <a class=\"nav-link {{ isSettingController is defined ? 'active' : '' }}\" href=\"{{ path('app_admin_setting') }}\" role=\"button\" aria-expanded=\"false\">
                            <i class=\"fas fa-user-cog fa-fw me-2\"></i>Admin Settings
                        </a>
                    </li> 

                    <!-- menu item 2 -->
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#collapsepageI\" role=\"button\" aria-expanded=\"{{ isInstitution is defined ? 'true' : 'false' }}\" aria-controls=\"collapsepageI\">
                            <i class=\"bi bi-basket fa-fw me-2\"></i>Institution
                        </a>
                        <!-- Submenu -->
                        <ul class=\"nav collapse flex-column {{ isInstitution is defined ? 'show' : '' }}\" id=\"collapsepageI\" data-bs-parent=\"#navbar-sidebar\">
                            <li class=\"nav-item\"> 
                                <a class=\"nav-link {{ sss is defined ? 'active' : '' }}\" href=\"{{ path('app_admin_sous_systeme_index') }}\">Sous-système</a>
                            </li>
                            <li class=\"nav-item\"> <a class=\"nav-link {{ tec is defined ? 'active' : '' }}\" href=\"{{ path('app_admin_type_enseignement_index') }}\">Type Enseignement</a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link {{ etc is defined ? 'active' : '' }}\" href=\"{{ path('app_admin_etablissement_index') }}\">Etablissements</a></li>
                        </ul>
                    </li>

                    <li class=\"nav-item\">
                        <a class=\"nav-link\" data-bs-toggle=\"collapse\" href=\"#collapsepageCI\" role=\"button\" aria-expanded=\"{{ isClasses is defined ? 'true' : 'false' }}\" aria-controls=\"collapsepageCI\">
                            <i class=\"bi bi-basket fa-fw me-2\"></i>Manage Classes
                        </a>
                        <!-- Submenu -->
                        <ul class=\"nav collapse flex-column {{ isClasses is defined ? 'show' : '' }}\" id=\"collapsepageCI\" data-bs-parent=\"#navbar-sidebar\">
                            <li class=\"nav-item\"> <a class=\"nav-link {{ fic is defined ? 'active' : '' }}\" href=\"{{ path('app_admin_filiere_index') }}\">Filières</a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link {{ spc is defined ? 'active' : '' }}\" href=\"{{ path('app_admin_specialite_index') }}\">Spécialités</a></li>
                            <li class=\"nav-item\"> <a class=\"nav-link {{ clc is defined ? 'active' : '' }}\" href=\"{{ path('app_admin_classe_index') }}\">Classes</a></li>
                        </ul>
                    </li>

                    <!-- Title -->
                    <li class=\"nav-item ms-2 my-2\">Autres</li>

                    <!-- Menu item 4 -->
                    <li class=\"nav-item\">
                        <a class=\"nav-link {{ rec is defined ? 'active' : '' }}\" href=\"{{ path('app_admin_registration') }}\" role=\"button\" aria-expanded=\"false\">
                            <i class=\"fas fa-user-tie fa-fw me-2\"></i>Users
                        </a>
                    </li>                    

                    <!-- Menu item 4 -->
                    <li class=\"nav-item\">
                        <a class=\"nav-link {{ pac is defined ? 'active' : '' }}\" href=\"{{ path('app_admin_pays_index') }}\" role=\"button\" aria-expanded=\"false\">
                            <i class=\"fas fa-user-tie fa-fw me-2\"></i>Countries
                        </a>
                    </li>

                    <!-- Menu item 4 -->
                    <li class=\"nav-item\">
                        <a class=\"nav-link {{ tcc is defined ? 'active' : '' }}\" href=\"{{ path('app_admin_term_index') }}\" role=\"button\" aria-expanded=\"false\">
                            <i class=\"far fa-clipboard fa-fw me-2\"></i>Terms & Conditions
                        </a>
                    </li>

                </ul>
                <!-- Sidebar menu end -->

                <!-- Sidebar footer START -->
                <div class=\"px-3 mt-auto pt-3\">
                    <div class=\"d-flex align-items-center justify-content-between text-primary-hover\">
                        <a class=\"h5 mb-0 text-body\" href=\"admin-setting.html\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Settings\">
                            <i class=\"bi bi-gear-fill\"></i>
                        </a>
                        <a class=\"h5 mb-0 text-body\" href=\"{{ path('app_front') }}\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Home\">
                            <i class=\"bi bi-globe\"></i>
                        </a>
                        <a class=\"h5 mb-0 text-body\" href=\"{{ path('app_logout') }}\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" title=\"Sign out\">
                            <i class=\"bi bi-power\"></i>
                        </a>
                    </div>
                </div>
                <!-- Sidebar footer END -->
                
            </div>
        </div>
    </nav>
    <!-- Sidebar END -->", "admin/_side_bar.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\_side_bar.html.twig");
    }
}
