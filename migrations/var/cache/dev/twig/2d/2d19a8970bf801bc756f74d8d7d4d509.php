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

/* instructor/base.html.twig */
class __TwigTemplate_d60e9cd915b6ab73214637c45195096e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'subTitle' => [$this, 'block_subTitle'],
            'footer' => [$this, 'block_footer'],
            'headJS' => [$this, 'block_headJS'],
            'script' => [$this, 'block_script'],
            'mainContent' => [$this, 'block_mainContent'],
            'instructorBanner' => [$this, 'block_instructorBanner'],
            'profileBlock' => [$this, 'block_profileBlock'],
            'btnAction' => [$this, 'block_btnAction'],
            'instructorSidebar' => [$this, 'block_instructorSidebar'],
            'pageContent' => [$this, 'block_pageContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/base.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "instructor/base.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " - Instructor ";
        $this->displayBlock('subTitle', $context, $blocks);
        echo "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function block_subTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subTitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subTitle"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 6
        echo "    
    <footer class=\"bg-dark p-3\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <!-- Widget -->
                <div class=\"col-md-4 text-center text-md-start mb-3 mb-md-0\">
                    <!-- Logo START -->
                    <a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        echo "\"> <img class=\"h-20px\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-light.svg"), "html", null, true);
        echo "\" alt=\"logo\"> </a>
                </div>
                
                <!-- Widget -->
                <div class=\"col-md-4 mb-3 mb-md-0\">
                    <div class=\"text-center text-white\">
                        Copyrights ©2023 <a href=\"\" target=\"_blank\" class=\"text-reset btn-link\">kulmapeck.com</a>. All rights reserved.
                    </div>
                </div>
                <!-- Widget -->
                <div class=\"col-md-4\">
                    <!-- Rating -->
                    <ul class=\"list-inline mb-0 text-center text-md-end\">
                        <li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-facebook\"></i></a></li>
                        <li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-instagram\"></i></a></li>
                        <li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-linkedin-in\"></i></a></li>
                        <li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-twitter\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 38
    public function block_headJS($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headJS"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "headJS"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 41
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 42
        echo "    <script>
        \$('#newForumMessageForm, #replyForumMessage form, #newForumSubjectFormContainer form').on('submit', function(e){
            e.preventDefault();
            const form = \$(this);
            \$.ajax({
                url: \$(form).attr('action'),
                type: \$(form).attr('method'),
                data: \$(form).serialize(),
                success: (response) => {
                    window.location.reload();
                }
            })
        })

    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 59
    public function block_mainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        // line 60
        echo "
    ";
        // line 61
        $this->displayBlock('instructorBanner', $context, $blocks);
        // line 126
        echo "    <!-- =======================
    Page content START -->
    <section class=\"pt-0\">
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 131
        $this->displayBlock('instructorSidebar', $context, $blocks);
        // line 162
        echo "                <!-- Main content START -->
                <div class=\"";
        // line 163
        echo twig_escape_filter($this->env, ((array_key_exists("mainContentClass", $context)) ? (_twig_default_filter((isset($context["mainContentClass"]) || array_key_exists("mainContentClass", $context) ? $context["mainContentClass"] : (function () { throw new RuntimeError('Variable "mainContentClass" does not exist.', 163, $this->source); })()), "col-xl-9")) : ("col-xl-9")), "html", null, true);
        echo "\">
                    ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 164, $this->source); })()), "flashes", ["errors"], "method", false, false, false, 164));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 165
            echo "                        <div class=\"alert alert-danger alert-dismissible\">
                            <p>";
            // line 166
            echo $context["message"];
            echo "</p>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 169, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 169));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 170
            echo "                        <div class=\"alert alert-danger alert-dismissible\">
                            <p>";
            // line 171
            echo $context["message"];
            echo "</p>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 174, $this->source); })()), "flashes", ["success"], "method", false, false, false, 174));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 175
            echo "                        <div class=\"alert alert-success alert-dismissible\">
                            <p>";
            // line 176
            echo $context["message"];
            echo "</p>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 179, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 179));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 180
            echo "                        <div class=\"alert alert-warning alert-dismissible\">
                            <p>";
            // line 181
            echo $context["message"];
            echo "</p>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 184, $this->source); })()), "flashes", ["infos"], "method", false, false, false, 184));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 185
            echo "                        <div class=\"alert alert-info alert-dismissible\">
                            <p>";
            // line 186
            echo $context["message"];
            echo "</p>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo "                    ";
        $this->displayBlock('pageContent', $context, $blocks);
        // line 190
        echo "                    
                </div>
                <!-- Main content END -->
            </div><!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Page content END -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 61
    public function block_instructorBanner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "instructorBanner"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "instructorBanner"));

        // line 62
        echo "        <!-- =======================
        Page Banner START -->
        <section class=\"pt-0\">
            <!-- Main banner background image -->
            <div class=\"container-fluid px-0\">
                <div class=\"bg-blue h-100px h-md-200px rounded-0\" style=\"background:url(";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pattern/04.png"), "html", null, true);
        echo ") no-repeat center center; background-size:cover;\">
                </div>
            </div>
            ";
        // line 70
        $this->displayBlock('profileBlock', $context, $blocks);
        // line 122
        echo "        </section>
        <!-- =======================
        Page Banner END -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 70
    public function block_profileBlock($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "profileBlock"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "profileBlock"));

        // line 71
        echo "                <div class=\"container mt-n4\">
                    <div class=\"row\">
                        <!-- Profile banner START -->
                        <div class=\"col-12\">
                            <div class=\"card bg-transparent card-body p-0\">
                                <div class=\"row d-flex justify-content-between\">
                                    <!-- Avatar -->
                                    <div class=\"col-auto mt-4 mt-md-0\">
                                        <div class=\"avatar avatar-xxl mt-n3\">
                                            <img class=\"avatar-img rounded-circle border border-white border-3 shadow\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80), "personne", [], "any", false, false, false, 80), "avatarPath", [], "any", false, false, false, 80)), "html", null, true);
        echo "\" alt=\"\">
                                        </div>
                                    </div>
                                    <!-- Profile info -->
                                    <div class=\"col d-md-flex justify-content-between align-items-center mt-4\">
                                        <div>
                                            <h1 class=\"my-1 fs-4\">";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86), "personne", [], "any", false, false, false, 86), "pseudo", [], "any", false, false, false, 86), "html", null, true);
        echo " <i class=\"bi bi-patch-check-fill text-info small\"></i></h1>
                                            <ul class=\"list-inline mb-0\">
                                                <li class=\"list-inline-item h6 fw-light me-3 mb-1 mb-sm-0\"><i class=\"fas fa-star text-warning me-2\"></i>";
        // line 88
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), "enseignant", [], "any", false, false, false, 88), "review", [], "any", false, false, false, 88), "html", null, true);
        echo "/5.0</li>
                                                ";
        // line 89
        $context["nbStudents"] = 0;
        // line 90
        echo "                                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, false, 90), "enseignant", [], "any", false, false, false, 90), "cours", [], "any", false, false, false, 90));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 91
            echo "                                                    ";
            $context["nbStudents"] = ((isset($context["nbStudents"]) || array_key_exists("nbStudents", $context) ? $context["nbStudents"] : (function () { throw new RuntimeError('Variable "nbStudents" does not exist.', 91, $this->source); })()) + twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["course"], "eleves", [], "any", false, false, false, 91)));
            // line 92
            echo "                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "                                                <li class=\"list-inline-item h6 fw-light me-3 mb-1 mb-sm-0\"><i class=\"fas fa-user-graduate text-orange me-2\"></i>";
        echo twig_escape_filter($this->env, (isset($context["nbStudents"]) || array_key_exists("nbStudents", $context) ? $context["nbStudents"] : (function () { throw new RuntimeError('Variable "nbStudents" does not exist.', 93, $this->source); })()), "html", null, true);
        echo " Enrolled Students</li>
                                                <li class=\"list-inline-item h6 fw-light me-3 mb-1 mb-sm-0\"><i class=\"fas fa-book text-purple me-2\"></i>";
        // line 94
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 94, $this->source); })()), "user", [], "any", false, false, false, 94), "enseignant", [], "any", false, false, false, 94), "cours", [], "any", false, false, false, 94)), "html", null, true);
        echo " Courses</li>
                                            </ul>
                                        </div>
                                        <!-- Button -->
                                        <div class=\"d-flex align-items-center mt-2 mt-md-0\">
                                            ";
        // line 99
        $this->displayBlock('btnAction', $context, $blocks);
        // line 102
        echo "                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Profile banner END -->

                            <!-- Advanced filter responsive toggler START -->
                            <!-- Divider -->
                            <hr class=\"d-xl-none\">
                            <div class=\"col-12 col-xl-3 d-flex justify-content-between align-items-center\">
                                <a class=\"h6 mb-0 fw-bold d-xl-none\" href=\"#\">Menu</a>
                                <button class=\"btn btn-primary d-xl-none\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasSidebar\" aria-controls=\"offcanvasSidebar\">
                                    <i class=\"fas fa-sliders-h\"></i>
                                </button>
                            </div>
                            <!-- Advanced filter responsive toggler END -->
                        </div>
                    </div>
                </div>
            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 99
    public function block_btnAction($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btnAction"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "btnAction"));

        // line 100
        echo "                                                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instructor_courses_new");
        echo "\" target=\"_blank\" class=\"btn btn-success mb-0\">Create a course</a>
                                            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 131
    public function block_instructorSidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "instructorSidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "instructorSidebar"));

        // line 132
        echo "                    <!-- Left sidebar START -->
                    <div class=\"col-xl-3\">
                        <!-- Responsive offcanvas body START -->
                        <div class=\"offcanvas-xl offcanvas-end\" tabindex=\"-1\" id=\"offcanvasSidebar\">
                            <!-- Offcanvas header -->
                            <div class=\"offcanvas-header bg-light\">
                                <h5 class=\"offcanvas-title\" id=\"offcanvasNavbarLabel\">My profile</h5>
                                <button  type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" data-bs-target=\"#offcanvasSidebar\" aria-label=\"Close\"></button>
                            </div>
                            <!-- Offcanvas body -->
                            <div class=\"offcanvas-body p-3 p-xl-0\">
                                <div class=\"bg-dark border rounded-3 pb-0 p-3 w-100\">
                                    <!-- Dashboard menu -->
                                    <div class=\"list-group list-group-dark list-group-borderless\">
                                        <a class=\"list-group-item ";
        // line 146
        echo ((array_key_exists("instructorHome", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instructor_home");
        echo "\"><i class=\"bi bi-ui-checks-grid fa-fw me-2\"></i>Dashboard</a>
                                        <a class=\"list-group-item ";
        // line 147
        echo ((array_key_exists("instructorCourses", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instructor_courses");
        echo "\"><i class=\"bi bi-basket fa-fw me-2\"></i>My Courses</a>
                                        <a class=\"list-group-item ";
        // line 148
        echo ((array_key_exists("isNetwork", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_instructor_network");
        echo "\"><i class=\"bi bi-people fa-fw me-2\"></i>My Network</a>
                                        <a class=\"list-group-item ";
        // line 149
        echo ((array_key_exists("isOrders", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_instructor_orders_index");
        echo "\"><i class=\"bi bi-folder-check fa-fw me-2\"></i>Orders</a>
                                        <a class=\"list-group-item ";
        // line 150
        echo ((array_key_exists("isExam", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_instructor_exam_index");
        echo "\"><i class=\"bi bi-pencil-square fa-fw me-2\"></i>Exam</a>
                                        <a class=\"list-group-item ";
        // line 151
        echo ((array_key_exists("isReview", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_instructor_reviews");
        echo "\"><i class=\"bi bi-star fa-fw me-2\"></i>Reviews</a>
                                        <a class=\"list-group-item ";
        // line 152
        echo ((array_key_exists("isProfile", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_instructor_profile");
        echo "\"><i class=\"far fa-user fa-fw me-2\"></i>Profile</a>
                                        <a class=\"list-group-item text-danger bg-danger-soft-hover\" href=\"";
        // line 153
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><i class=\"fas fa-sign-out-alt fa-fw me-2\"></i>Sign Out</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Responsive offcanvas body END -->
                    </div>
                    <!-- Left sidebar END -->
                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 189
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "instructor/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  598 => 189,  579 => 153,  573 => 152,  567 => 151,  561 => 150,  555 => 149,  549 => 148,  543 => 147,  537 => 146,  521 => 132,  511 => 131,  498 => 100,  488 => 99,  459 => 102,  457 => 99,  449 => 94,  444 => 93,  438 => 92,  435 => 91,  430 => 90,  428 => 89,  424 => 88,  419 => 86,  410 => 80,  399 => 71,  389 => 70,  376 => 122,  374 => 70,  368 => 67,  361 => 62,  351 => 61,  332 => 190,  329 => 189,  320 => 186,  317 => 185,  312 => 184,  303 => 181,  300 => 180,  295 => 179,  286 => 176,  283 => 175,  278 => 174,  269 => 171,  266 => 170,  261 => 169,  252 => 166,  249 => 165,  245 => 164,  241 => 163,  238 => 162,  236 => 131,  229 => 126,  227 => 61,  224 => 60,  214 => 59,  189 => 42,  179 => 41,  161 => 38,  125 => 13,  116 => 6,  106 => 5,  68 => 3,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"front/base.html.twig\" %}

{% block title %} - Instructor {% block subTitle %}{% endblock %}  {% endblock %}

{% block footer %}
    
    <footer class=\"bg-dark p-3\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <!-- Widget -->
                <div class=\"col-md-4 text-center text-md-start mb-3 mb-md-0\">
                    <!-- Logo START -->
                    <a href=\"{{ path('app_front') }}\"> <img class=\"h-20px\" src=\"{{ asset('assets/images/logo-light.svg') }}\" alt=\"logo\"> </a>
                </div>
                
                <!-- Widget -->
                <div class=\"col-md-4 mb-3 mb-md-0\">
                    <div class=\"text-center text-white\">
                        Copyrights ©2023 <a href=\"\" target=\"_blank\" class=\"text-reset btn-link\">kulmapeck.com</a>. All rights reserved.
                    </div>
                </div>
                <!-- Widget -->
                <div class=\"col-md-4\">
                    <!-- Rating -->
                    <ul class=\"list-inline mb-0 text-center text-md-end\">
                        <li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-facebook\"></i></a></li>
                        <li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-instagram\"></i></a></li>
                        <li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-linkedin-in\"></i></a></li>
                        <li class=\"list-inline-item ms-2\"><a href=\"#\"><i class=\"text-white fab fa-twitter\"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

{% endblock %}

{% block headJS %}
{% endblock %}

{% block script %}
    <script>
        \$('#newForumMessageForm, #replyForumMessage form, #newForumSubjectFormContainer form').on('submit', function(e){
            e.preventDefault();
            const form = \$(this);
            \$.ajax({
                url: \$(form).attr('action'),
                type: \$(form).attr('method'),
                data: \$(form).serialize(),
                success: (response) => {
                    window.location.reload();
                }
            })
        })

    </script>
{% endblock %}

{% block mainContent %}

    {% block instructorBanner %}
        <!-- =======================
        Page Banner START -->
        <section class=\"pt-0\">
            <!-- Main banner background image -->
            <div class=\"container-fluid px-0\">
                <div class=\"bg-blue h-100px h-md-200px rounded-0\" style=\"background:url({{ asset('assets/images/pattern/04.png') }}) no-repeat center center; background-size:cover;\">
                </div>
            </div>
            {% block profileBlock %}
                <div class=\"container mt-n4\">
                    <div class=\"row\">
                        <!-- Profile banner START -->
                        <div class=\"col-12\">
                            <div class=\"card bg-transparent card-body p-0\">
                                <div class=\"row d-flex justify-content-between\">
                                    <!-- Avatar -->
                                    <div class=\"col-auto mt-4 mt-md-0\">
                                        <div class=\"avatar avatar-xxl mt-n3\">
                                            <img class=\"avatar-img rounded-circle border border-white border-3 shadow\" src=\"{{ asset(app.user.personne.avatarPath) }}\" alt=\"\">
                                        </div>
                                    </div>
                                    <!-- Profile info -->
                                    <div class=\"col d-md-flex justify-content-between align-items-center mt-4\">
                                        <div>
                                            <h1 class=\"my-1 fs-4\">{{ app.user.personne.pseudo }} <i class=\"bi bi-patch-check-fill text-info small\"></i></h1>
                                            <ul class=\"list-inline mb-0\">
                                                <li class=\"list-inline-item h6 fw-light me-3 mb-1 mb-sm-0\"><i class=\"fas fa-star text-warning me-2\"></i>{{ app.user.enseignant.review }}/5.0</li>
                                                {% set nbStudents = 0 %}
                                                {% for course in app.user.enseignant.cours %}
                                                    {% set nbStudents = nbStudents + course.eleves|length %}
                                                {% endfor %}
                                                <li class=\"list-inline-item h6 fw-light me-3 mb-1 mb-sm-0\"><i class=\"fas fa-user-graduate text-orange me-2\"></i>{{ nbStudents }} Enrolled Students</li>
                                                <li class=\"list-inline-item h6 fw-light me-3 mb-1 mb-sm-0\"><i class=\"fas fa-book text-purple me-2\"></i>{{ app.user.enseignant.cours|length }} Courses</li>
                                            </ul>
                                        </div>
                                        <!-- Button -->
                                        <div class=\"d-flex align-items-center mt-2 mt-md-0\">
                                            {% block btnAction %}
                                                <a href=\"{{ path('app_instructor_courses_new') }}\" target=\"_blank\" class=\"btn btn-success mb-0\">Create a course</a>
                                            {% endblock %}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Profile banner END -->

                            <!-- Advanced filter responsive toggler START -->
                            <!-- Divider -->
                            <hr class=\"d-xl-none\">
                            <div class=\"col-12 col-xl-3 d-flex justify-content-between align-items-center\">
                                <a class=\"h6 mb-0 fw-bold d-xl-none\" href=\"#\">Menu</a>
                                <button class=\"btn btn-primary d-xl-none\" type=\"button\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#offcanvasSidebar\" aria-controls=\"offcanvasSidebar\">
                                    <i class=\"fas fa-sliders-h\"></i>
                                </button>
                            </div>
                            <!-- Advanced filter responsive toggler END -->
                        </div>
                    </div>
                </div>
            {% endblock %}
        </section>
        <!-- =======================
        Page Banner END -->
    {% endblock %}
    <!-- =======================
    Page content START -->
    <section class=\"pt-0\">
        <div class=\"container\">
            <div class=\"row\">
                {% block instructorSidebar %}
                    <!-- Left sidebar START -->
                    <div class=\"col-xl-3\">
                        <!-- Responsive offcanvas body START -->
                        <div class=\"offcanvas-xl offcanvas-end\" tabindex=\"-1\" id=\"offcanvasSidebar\">
                            <!-- Offcanvas header -->
                            <div class=\"offcanvas-header bg-light\">
                                <h5 class=\"offcanvas-title\" id=\"offcanvasNavbarLabel\">My profile</h5>
                                <button  type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\" data-bs-target=\"#offcanvasSidebar\" aria-label=\"Close\"></button>
                            </div>
                            <!-- Offcanvas body -->
                            <div class=\"offcanvas-body p-3 p-xl-0\">
                                <div class=\"bg-dark border rounded-3 pb-0 p-3 w-100\">
                                    <!-- Dashboard menu -->
                                    <div class=\"list-group list-group-dark list-group-borderless\">
                                        <a class=\"list-group-item {{ instructorHome is defined ? 'active' : '' }}\" href=\"{{ path('app_instructor_home') }}\"><i class=\"bi bi-ui-checks-grid fa-fw me-2\"></i>Dashboard</a>
                                        <a class=\"list-group-item {{ instructorCourses is defined ? 'active' : '' }}\" href=\"{{ path('app_instructor_courses') }}\"><i class=\"bi bi-basket fa-fw me-2\"></i>My Courses</a>
                                        <a class=\"list-group-item {{ isNetwork is defined ? 'active' : '' }}\" href=\"{{ url(\"app_instructor_network\") }}\"><i class=\"bi bi-people fa-fw me-2\"></i>My Network</a>
                                        <a class=\"list-group-item {{ isOrders is defined ? 'active' : '' }}\" href=\"{{ url(\"app_instructor_orders_index\") }}\"><i class=\"bi bi-folder-check fa-fw me-2\"></i>Orders</a>
                                        <a class=\"list-group-item {{ isExam is defined ? 'active' : '' }}\" href=\"{{ url(\"app_instructor_exam_index\") }}\"><i class=\"bi bi-pencil-square fa-fw me-2\"></i>Exam</a>
                                        <a class=\"list-group-item {{ isReview is defined ? 'active' : '' }}\" href=\"{{ url(\"app_instructor_reviews\") }}\"><i class=\"bi bi-star fa-fw me-2\"></i>Reviews</a>
                                        <a class=\"list-group-item {{ isProfile is defined ? 'active' : '' }}\" href=\"{{ url(\"app_instructor_profile\") }}\"><i class=\"far fa-user fa-fw me-2\"></i>Profile</a>
                                        <a class=\"list-group-item text-danger bg-danger-soft-hover\" href=\"{{ path('app_logout') }}\"><i class=\"fas fa-sign-out-alt fa-fw me-2\"></i>Sign Out</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Responsive offcanvas body END -->
                    </div>
                    <!-- Left sidebar END -->
                {% endblock %}
                <!-- Main content START -->
                <div class=\"{{ mainContentClass|default('col-xl-9') }}\">
                    {% for message in app.flashes('errors') %}
                        <div class=\"alert alert-danger alert-dismissible\">
                            <p>{{ message|raw }}</p>
                        </div>
                    {% endfor %}
                    {% for message in app.flashes('danger') %}
                        <div class=\"alert alert-danger alert-dismissible\">
                            <p>{{ message|raw }}</p>
                        </div>
                    {% endfor %}
                    {% for message in app.flashes('success') %}
                        <div class=\"alert alert-success alert-dismissible\">
                            <p>{{ message|raw }}</p>
                        </div>
                    {% endfor %}
                    {% for message in app.flashes('warning') %}
                        <div class=\"alert alert-warning alert-dismissible\">
                            <p>{{ message|raw }}</p>
                        </div>
                    {% endfor %}
                    {% for message in app.flashes('infos') %}
                        <div class=\"alert alert-info alert-dismissible\">
                            <p>{{ message|raw }}</p>
                        </div>
                    {% endfor %}
                    {% block pageContent %}{% endblock %}
                    
                </div>
                <!-- Main content END -->
            </div><!-- Row END -->
        </div>
    </section>
    <!-- =======================
    Page content END -->

{% endblock %}", "instructor/base.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\instructor\\base.html.twig");
    }
}
