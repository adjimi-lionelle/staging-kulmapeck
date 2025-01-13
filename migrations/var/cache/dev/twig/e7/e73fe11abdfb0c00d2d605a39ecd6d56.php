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

/* front/base.html.twig */
class __TwigTemplate_a05564165482e898d5bf47bb1f2ffcec extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'headJS' => [$this, 'block_headJS'],
            'header' => [$this, 'block_header'],
            'mainBarnner' => [$this, 'block_mainBarnner'],
            'mainContent' => [$this, 'block_mainContent'],
            'footer' => [$this, 'block_footer'],
            'jquery' => [$this, 'block_jquery'],
            'script1' => [$this, 'block_script1'],
            'custumJS' => [$this, 'block_custumJS'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    ";
        // line 5
        $context["siteSettings"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "session", [], "any", false, false, false, 5), "get", ["siteSettings"], "method", false, false, false, 5);
        // line 6
        echo "    ";
        $context["socialsSettings"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "session", [], "any", false, false, false, 6), "get", ["socialsSettings"], "method", false, false, false, 6);
        // line 7
        echo "\t<title>";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["siteSettings"] ?? null), "siteName", [], "any", true, true, false, 7)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["siteSettings"] ?? null), "siteName", [], "any", false, false, false, 7), "Kulmapeck.com")) : ("Kulmapeck.com")), "html", null, true);
        echo " ";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

\t<!-- Meta Tags -->
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t<meta name=\"author\" content=\"Webestica.com\">
\t<meta name=\"description\" content=\"Kulmapeck - The Best E-learning platform\">

\t<!-- Dark mode -->
\t<script>
\t\tconst storedTheme = localStorage.getItem('theme')
 
\t\tconst getPreferredTheme = () => {
\t\t\tif (storedTheme) {
\t\t\t\treturn storedTheme
\t\t\t}
\t\t\treturn window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
\t\t}

\t\tconst setTheme = function (theme) {
\t\t\tif (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
\t\t\t\tdocument.documentElement.setAttribute('data-bs-theme', 'dark')
\t\t\t} else {
\t\t\t\tdocument.documentElement.setAttribute('data-bs-theme', theme)
\t\t\t}
\t\t}

\t\tsetTheme(getPreferredTheme())

\t\twindow.addEventListener('DOMContentLoaded', () => {
\t\t    var el = document.querySelector('.theme-icon-active');
\t\t\tif(el != 'undefined' && el != null) {
\t\t\t\tconst showActiveTheme = theme => {
\t\t\t\tconst activeThemeIcon = document.querySelector('.theme-icon-active use')
\t\t\t\tconst btnToActive = document.querySelector(`[data-bs-theme-value=\"\${theme}\"]`)
\t\t\t\tconst svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

\t\t\t\tdocument.querySelectorAll('[data-bs-theme-value]').forEach(element => {
\t\t\t\t\telement.classList.remove('active')
\t\t\t\t})

\t\t\t\tbtnToActive.classList.add('active')
\t\t\t\tactiveThemeIcon.setAttribute('href', svgOfActiveBtn)
\t\t\t}

\t\t\twindow.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
\t\t\t\tif (storedTheme !== 'light' || storedTheme !== 'dark') {
\t\t\t\t\tsetTheme(getPreferredTheme())
\t\t\t\t}
\t\t\t})

\t\t\tshowActiveTheme(getPreferredTheme())

\t\t\tdocument.querySelectorAll('[data-bs-theme-value]')
\t\t\t\t.forEach(toggle => {
\t\t\t\t\ttoggle.addEventListener('click', () => {
\t\t\t\t\t\tconst theme = toggle.getAttribute('data-bs-theme-value')
\t\t\t\t\t\tlocalStorage.setItem('theme', theme)
\t\t\t\t\t\tsetTheme(theme)
\t\t\t\t\t\tshowActiveTheme(theme)
\t\t\t\t\t})
\t\t\t\t})

\t\t\t}
\t\t})
\t\t
\t</script>

\t<!-- Favicon -->
\t<link rel=\"shortcut icon\" href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        echo "\">

\t<!-- Google Font -->
\t<link rel=\"preconnect\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts.googleapis.com/index.html"), "html", null, true);
        echo "\">
\t<link rel=\"preconnect\" href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts.gstatic.com/index.html"), "html", null, true);
        echo "\" crossorigin>
\t<link rel=\"stylesheet\" href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("fonts.googleapis.com/css23ab4.css?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap"), "html", null, true);
        echo "\">

\t<!-- Plugins CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/font-awesome/css/all.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/css/apexcharts.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/overlay-scrollbar/css/overlayscrollbars.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/tiny-slider/tiny-slider.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/css/glightbox.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/choices/css/choices.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/plyr/plyr.css"), "html", null, true);
        echo "\" />

    ";
        // line 94
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 95
        echo "
\t<!-- Theme CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">

\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-7N7LGGGWT1\"></script>
\t<script>
\t\twindow.dataLayer = window.dataLayer || [];
\t\tfunction gtag(){dataLayer.push(arguments);}
\t\tgtag('js', new Date());

\t\tgtag('config', 'G-7N7LGGGWT1');
\t</script>
    ";
        // line 108
        $this->displayBlock('headJS', $context, $blocks);
        // line 109
        echo "
</head>

<body class=\"\">
    ";
        // line 113
        $this->displayBlock('header', $context, $blocks);
        // line 307
        echo "
    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        
        <!-- =======================
        Main Banner START -->
        ";
        // line 313
        $this->displayBlock('mainBarnner', $context, $blocks);
        // line 314
        echo "        <!-- =======================
        Main Banner END -->

        ";
        // line 317
        $this->displayBlock('mainContent', $context, $blocks);
        // line 318
        echo "
    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    ";
        // line 322
        $this->displayBlock('footer', $context, $blocks);
        // line 489
        echo "
    ";
        // line 490
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 490, $this->source); })()), "session", [], "any", false, false, false, 490), "get", ["annonce"], "method", false, false, false, 490) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 490, $this->source); })()), "session", [], "any", false, false, false, 490), "get", ["showAnnonces"], "method", false, false, false, 490)) &&  !array_key_exists("dontShowAnnonces", $context))) {
            // line 491
            echo "        ";
            echo twig_include($this->env, $context, "front/evaluation/_annonces.html.twig", ["annonce" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 491, $this->source); })()), "session", [], "any", false, false, false, 491), "get", ["annonce"], "method", false, false, false, 491), "isForPrommedTest" => true]);
            echo "
    ";
        }
        // line 493
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 493, $this->source); })()), "session", [], "any", false, false, false, 493), "get", ["currentEvaluation"], "method", false, false, false, 493) &&  !array_key_exists("dontShowAnnonces", $context))) {
            // line 494
            echo "        ";
            echo twig_include($this->env, $context, "front/evaluation/_annonces.html.twig", ["annonce" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 494, $this->source); })()), "session", [], "any", false, false, false, 494), "get", ["currentEvaluation"], "method", false, false, false, 494), "isForCurrentTest" => true]);
            echo "
    ";
        }
        // line 496
        echo "    
    ";
        // line 497
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 497, $this->source); })()), "flashes", ["notification"], "method", false, false, false, 497)) {
            // line 498
            echo "        <div id=\"bottom-notification\" style=\"position: fixed;bottom: 5px;right: 15px; min-height: 0px;z-index: 200;min-width: 400px;\">
            <div class=\"card\">
                <div class=\"card-header\">

                </div>
                <div class=\"card-body\">
                    ";
            // line 504
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 504, $this->source); })()), "flashes", ["notification"], "method", false, false, false, 504));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 505
                echo "                        <div class=\"alert alert-danger alert-dismissible\">
                            <p>";
                // line 506
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</p>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 509
            echo "                </div>
            </div>
        </div>
    ";
        }
        // line 513
        echo "    
<!-- Back to top -->
<div class=\"back-top\"><i class=\"bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle\"></i></div>

";
        // line 517
        if ((array_key_exists("isReadLessonPage", $context) && (isset($context["isReadLessonPage"]) || array_key_exists("isReadLessonPage", $context) ? $context["isReadLessonPage"] : (function () { throw new RuntimeError('Variable "isReadLessonPage" does not exist.', 517, $this->source); })()))) {
            // line 518
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_course_forum_index", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 518, $this->source); })()), "slug", [], "any", false, false, false, 518)]), "html", null, true);
            echo "\" class=\"text-primary-hover\" title=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("GOTOFORUM_KEY", [], "messages");
            echo "\" data-bs-toggle=\"tooltip\" style=\"color: var(--bs-danger);position: fixed;bottom: 50%; left: 40px;z-index: 100;width: 52px;height: 52px;line-height: 52px;text-align: center;display: block;cursor: pointer;visibility: visible; transition: all 0.3s ease-in-out;background: rgba(var(--bs-danger-rgb), 0.1);\">
        <i class=\"bi bi-chat-right-text-fill position-absolute top-50 start-50 translate-middle\"></i>
    </a>
";
        }
        // line 522
        echo "
";
        // line 523
        if ((array_key_exists("isForumPage", $context) && (isset($context["isForumPage"]) || array_key_exists("isForumPage", $context) ? $context["isForumPage"] : (function () { throw new RuntimeError('Variable "isForumPage" does not exist.', 523, $this->source); })()))) {
            // line 524
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_course_details", ["slug" => twig_get_attribute($this->env, $this->source, (isset($context["course"]) || array_key_exists("course", $context) ? $context["course"] : (function () { throw new RuntimeError('Variable "course" does not exist.', 524, $this->source); })()), "slug", [], "any", false, false, false, 524)]), "html", null, true);
            echo "\" class=\"text-primary-hover\" title=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("BACKTOCOURSEDETAILS_KEY", [], "messages");
            echo "\" data-bs-toggle=\"tooltip\" style=\"color: var(--bs-danger);position: fixed;bottom: 50%; left: 40px;z-index: 100;width: 52px;height: 52px;line-height: 52px;text-align: center;display: block;cursor: pointer;visibility: visible; transition: all 0.3s ease-in-out;background: rgba(var(--bs-danger-rgb), 0.1);\">
        <i class=\"bi bi-arrow-left-square-fill position-absolute top-50 start-50 translate-middle\"></i>
    </a>
";
        }
        // line 528
        echo "
    <!-- Modal START -->
\t<div class=\"modal fade\" id=\"coursePremium\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog modal-dialog-centered modal-lg\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header border-0 bg-transparent\">
\t\t\t\t\t<!-- Close button -->
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<!-- Modal body -->
\t\t\t\t<div class=\"modal-body px-5 pb-5 position-relative overflow-hidden\">

\t\t\t\t\t<!-- Element -->
\t\t\t\t\t<figure class=\"position-absolute bottom-0 end-0 mb-n4 me-n4 d-none d-sm-block\">
\t\t\t\t\t\t<img src=\"assets/images/element/01.svg\" alt=\"element\">
\t\t\t\t\t</figure>
\t\t\t\t\t<figure class=\"position-absolute top-0 end-0 z-index-n1 opacity-2\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"818.6px\" height=\"235.1px\" viewBox=\"0 0 818.6 235.1\">
\t\t\t\t\t\t\t<path class=\"fill-info\" d=\"M735,226.3c-5.7,0.6-11.5,1.1-17.2,1.7c-66.2,6.8-134.7,13.7-192.6-16.6c-34.6-18.1-61.4-47.9-87.3-76.7 c-21.4-23.8-43.6-48.5-70.2-66.7c-53.2-36.4-121.6-44.8-175.1-48c-13.6-0.8-27.5-1.4-40.9-1.9c-46.9-1.9-95.4-3.9-141.2-16.5 C8.3,1.2,6.2,0.6,4.2,0H0c3.3,1,6.6,2,10,3c46,12.5,94.5,14.6,141.5,16.5c13.4,0.6,27.3,1.1,40.8,1.9 c53.4,3.2,121.5,11.5,174.5,47.7c26.5,18.1,48.6,42.7,70,66.5c26,28.9,52.9,58.8,87.7,76.9c58.3,30.5,127,23.5,193.3,16.7 c5.8-0.6,11.5-1.2,17.2-1.7c26.2-2.6,55-4.2,83.5-2.2v-1.2C790,222,761.2,223.7,735,226.3z\"></path>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</figure>
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<h2>";
        // line 550
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CHOOSETYPEUSERACCOUNT_KEY", [], "messages");
        echo "</span></h2>
\t\t\t\t\t<p>";
        // line 551
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ACCOUNTMODALDESCRIPTION_KEY", [], "messages");
        echo "</p>
\t\t\t\t\t<!-- Content -->
\t\t\t\t\t<div class=\"row mb-3 item-collapse\">
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<a href=\"";
        // line 555
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_register", ["type" => "trainer"]);
        echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 556
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/prof-avatar.jpg"), "html", null, true);
        echo "\" class=\"rounded-3 mb-3\" alt=\"...\">
\t\t\t\t\t\t\t\t<caption class=\"text-center mt-3\">";
        // line 557
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("TEACHER_KEY", [], "messages");
        echo "</caption>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<a href=\"";
        // line 561
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_register", ["type" => "student"]);
        echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 562
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/avatar/eleve-avatar.jpg"), "html", null, true);
        echo "\" class=\"rounded-3 mb-3\" alt=\"...\">
\t\t\t\t\t\t\t\t<caption class=\"text-center mt-3\">";
        // line 563
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("STUDENT_KEY", [], "messages");
        echo "</caption>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>  
\t<!-- Modal END -->

    ";
        // line 574
        if (((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 574, $this->source); })()), "user", [], "any", false, false, false, 574) && array_key_exists("membre", $context)) &&  !(null === (isset($context["membre"]) || array_key_exists("membre", $context) ? $context["membre"] : (function () { throw new RuntimeError('Variable "membre" does not exist.', 574, $this->source); })())))) {
            // line 575
            echo "    <!-- Modal START -->
\t<div class=\"modal fade\" id=\"replyForumMessage\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog modal-lg\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header border-0 bg-transparent\">
\t\t\t\t\t<!-- Close button -->
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<!-- Modal body -->
\t\t\t\t<div class=\"modal-body px-5 pb-5 position-relative overflow-hidden\">
                    <div class=\"d-flex mb-4 mt-3\">
                        <!-- Avatar -->
                        <div class=\"avatar avatar-sm flex-shrink-0 me-2\">
                            <a href=\"#\"> <img class=\"avatar-img rounded-circle\" src=\"";
            // line 588
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 588, $this->source); })()), "user", [], "any", false, false, false, 588), "personne", [], "any", false, false, false, 588), "avatarPath", [], "any", false, false, false, 588)), "html", null, true);
            echo "\" alt=\"\"> </a>
                        </div>

                        <form class=\"w-100 d-flex\" method=\"POST\" action=\"";
            // line 591
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_course_reply_forum_message");
            echo "\">
                            <input type=\"hidden\" name=\"reply\" id=\"reply\">
                            <input type=\"hidden\" name=\"membre\" id=\"membre\">
                            <input type=\"hidden\" name=\"response_container\" id=\"response_container\">
                            <textarea name=\"replyMessage\" required id=\"replyTexarea\" class=\"one form-control pe-4 bg-light\" placeholder=\"";
            // line 595
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ADDCOMMENT_KEY", [], "messages");
            echo "\" rows=\"1\"></textarea>
                            <button class=\"btn btn-primary ms-2 mb-0\" type=\"submit\"><i class=\"fas fa-paper-plane\"></i></button>
                        </form>
                    </div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>  
\t<!-- Modal END -->
    ";
        }
        // line 606
        echo "
<!-- Vendors -->
";
        // line 608
        $this->displayBlock('jquery', $context, $blocks);
        // line 611
        echo "<!-- Bootstrap JS -->
<script src=\"";
        // line 612
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
";
        // line 613
        $this->displayBlock('script1', $context, $blocks);
        // line 698
        $this->displayBlock('script', $context, $blocks);
        // line 699
        echo "
<!-- Template Functions -->
<script src=\"";
        // line 701
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/functions.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 94
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 108
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

    // line 113
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 114
        echo "    <!-- Header START -->
    <header class=\"navbar-light navbar-sticky header-static\">
        <nav class=\"navbar navbar-expand\">
            <div class=\"container-fluid px-3 px-xl-5\">
                <p class=\"pt-3 text-center d-block text-primary\" style=\"width: 100%; margin-bottom: 0;\">
                    <span>
                        <span>";
        // line 120
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("NUMERO_REGISTRE_COMMERCE_KEY", [], "messages");
        echo " : </span> <i>RC/DLA/2022/B/5105</i>
                    </span>
                    <b style=\"margin: 0px 15px;\">|</b>
                    <span>
                        <span>";
        // line 124
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("LOCALISATION_KEY", [], "messages");
        echo " : </span> <i>DOUALA-Akwa/ Carrefour Équinox Tv face Beneficial Assurance</i>
                    </span>
                </p>
            </div>
        </nav>
        <!-- Nav START -->
        <nav class=\"navbar navbar-expand-xl\">
            <div class=\"container-fluid px-3 px-xl-5\">
                <!-- Logo START -->
                <a class=\"navbar-brand\" href=\"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        echo "\">
                    <img class=\"light-mode-item navbar-brand-item\" src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        echo "\" alt=\"logo\">
                    <img class=\"dark-mode-item navbar-brand-item\" src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-light.svg"), "html", null, true);
        echo "\" alt=\"logo\">
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class=\"navbar-toggler ms-auto\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-animation\">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- Main navbar START -->
                <div class=\"navbar-collapse w-100 collapse\" id=\"navbarCollapse\">

                    <!-- Nav category menu START -->
                    <ul class=\"navbar-nav navbar-nav-scroll me-auto\">
                        <!-- Nav item 1 Demos -->
                        <li class=\"nav-item dropdown dropdown-menu-shadow-stacked\">
                            <a class=\"nav-link bg-primary bg-opacity-10 rounded-3 text-primary px-3 py-3 py-xl-0\" href=\"#\" id=\"categoryMenu\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"bi bi-ui-radios-grid me-2\"></i><span>Categories</span></a>
                            ";
        // line 156
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_header_categories"));
        echo "
                        </li>
                    </ul>
                    <!-- Nav category menu END -->

                    <!-- Nav Main menu START -->
                    <ul class=\"navbar-nav navbar-nav-scroll me-auto\">
                        <!-- Nav item 1 Demos -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
        // line 165
        echo ((array_key_exists("isHomePage", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front");
        echo "\" id=\"demoMenu\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                ";
        // line 166
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("HOME_KEY", [], "messages");
        // line 167
        echo "                            </a>
                        </li>

                        <!-- Nav item 2 Pages -->
                        ";
        // line 174
        echo "
                        <!-- Nav item 4 Megamenu-->
                        <li class=\"nav-item dropdown dropdown-fullwidth\">
                            <a class=\"nav-link dropdown-toggle ";
        // line 177
        echo ((array_key_exists("isCoursePage", $context)) ? ("active") : (""));
        echo "\" href=\"#\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("COURSESFORMATION_KEY", [], "messages");
        echo "</a>
                            <div class=\"dropdown-menu dropdown-menu-end\" data-bs-popper=\"none\">
                                ";
        // line 179
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_header_courses_and_formations"));
        echo "
                            </div>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
        // line 184
        echo ((array_key_exists("isExamPage", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_exam_index");
        echo "\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("EXAM_KEY", [], "messages");
        echo "</a>
                        </li>


                        <!-- Nav item 3 Account -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link ";
        // line 190
        echo ((array_key_exists("isForumMainPage", $context)) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_forum_index");
        echo "\" aria-haspopup=\"true\" aria-expanded=\"false\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("FORUM_KEY", [], "messages");
        echo "</a>
                        </li>

                        <!-- Nav item 3 Account -->
                        ";
        // line 194
        if (( !twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 194, $this->source); })()), "user", [], "any", false, false, false, 194) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 194, $this->source); })()), "user", [], "any", false, false, false, 194), "eleve", [], "any", false, false, false, 194) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 194, $this->source); })()), "user", [], "any", false, false, false, 194), "eleve", [], "any", false, false, false, 194), "isPremium", [], "any", false, false, false, 194)))) {
            // line 195
            echo "                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"";
            // line 196
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_plan");
            echo "\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <b class=\"badge bg-success\">";
            // line 197
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("BECOME_PREMIUM_KEY", [], "messages");
            echo "</b>
                                </a>
                            </li>
                        ";
        }
        // line 201
        echo "
                    </ul>
                    <!-- Nav Main menu END -->

                    <!-- Nav Search START -->
                    <div class=\"nav my-3 my-xl-0 px-4 flex-nowrap align-items-center\">
                        <div class=\"nav-item w-100\">
                            <form class=\"position-relative\" action=\"";
        // line 208
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_courses");
        echo "\">
                                <input class=\"form-control pe-5 bg-transparent\" type=\"search\" placeholder=\"";
        // line 209
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SEARCH_KEY", [], "messages");
        echo "\" name=\"search\" required aria-label=\"Search\">
                                <button class=\"bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset\" type=\"submit\">
                                <i class=\"fas fa-search fs-6 \"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- Nav Search END -->
                </div>
                <!-- Main navbar END -->

                <div class=\"dropdown mt-0 text-center text-sm-end\">
                    <a class=\"dropdown-toggle nav-link\" style=\"padding-right: 15px\" href=\"#\" role=\"button\" id=\"languageSwitcher\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <i class=\"fas fa-globe me-2\"></i>
                        ";
        // line 223
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 223, $this->source); })()), "session", [], "any", false, false, false, 223), "get", ["_locale"], "method", false, false, false, 223) == "en")) {
            // line 224
            echo "                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ENGLISH_KEY", [], "messages");
            // line 225
            echo "                        ";
        } else {
            // line 226
            echo "                            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("FRENCH_KEY", [], "messages");
            // line 227
            echo "                        ";
        }
        // line 228
        echo "                    </a>
                    <ul class=\"dropdown-menu min-w-auto\" aria-labelledby=\"languageSwitcher\">
                        <li><a class=\"dropdown-item me-4 ";
        // line 230
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 230, $this->source); })()), "session", [], "any", false, false, false, 230), "get", ["_locale"], "method", false, false, false, 230) === "en")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_security_change_language", ["lang" => "en"]);
        echo "\"><img class=\"fa-fw me-2\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/uk.svg"), "html", null, true);
        echo "\" alt=\"\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ENGLISH_KEY", [], "messages");
        echo "</a></li>
                        <li><a class=\"dropdown-item me-4 ";
        // line 231
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 231, $this->source); })()), "session", [], "any", false, false, false, 231), "get", ["_locale"], "method", false, false, false, 231) === "fr")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_security_change_language", ["lang" => "fr"]);
        echo "\"><img class=\"fa-fw me-2\" src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/sp.svg"), "html", null, true);
        echo "\" alt=\"\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("FRENCH_KEY", [], "messages");
        echo "</a></li>
                    </ul>
                </div>

                <!-- Profile START -->
                ";
        // line 236
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 236, $this->source); })()), "user", [], "any", false, false, false, 236)) {
            echo " 
                    <div class=\"dropdown ms-1 ms-lg-0\">     
                        <a class=\"avatar avatar-sm p-0\" href=\"#\" id=\"profileDropdown\" role=\"button\" data-bs-auto-close=\"outside\" data-bs-display=\"static\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <img class=\"avatar-img rounded-circle\" src=\"";
            // line 239
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 239, $this->source); })()), "user", [], "any", false, false, false, 239), "personne", [], "any", false, false, false, 239), "avatarPath", [], "any", false, false, false, 239)), "html", null, true);
            echo "\" alt=\"avatar\">
                        </a>
                        <ul class=\"dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3\" aria-labelledby=\"profileDropdown\">
                            <!-- Profile info -->
                            <li class=\"px-3 mb-3\">
                                <div class=\"d-flex align-items-center\">
                                    <!-- Avatar -->
                                    <div class=\"avatar me-3\">
                                        <img class=\"avatar-img rounded-circle shadow\" src=\"";
            // line 247
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 247, $this->source); })()), "user", [], "any", false, false, false, 247), "personne", [], "any", false, false, false, 247), "avatarPath", [], "any", false, false, false, 247)), "html", null, true);
            echo "\" alt=\"avatar\">
                                    </div>
                                    <div>
                                    <a class=\"h6\" href=\"#\">";
            // line 250
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 250, $this->source); })()), "user", [], "any", false, false, false, 250), "personne", [], "any", false, false, false, 250), "pseudo", [], "any", false, false, false, 250), "html", null, true);
            echo "</a>
                                    <p class=\"small m-0\">";
            // line 251
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 251, $this->source); })()), "user", [], "any", false, false, false, 251), "userIdentifier", [], "any", false, false, false, 251), "html", null, true);
            echo "</p>
                                    </div>
                                </div>
                            </li>
                            <li> <hr class=\"dropdown-divider\"></li>
                            <!-- Links -->
                            <li><a class=\"dropdown-item\" href=\"";
            // line 257
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_home");
            echo "\"><i class=\"bi bi-person fa-fw me-2\"></i>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("DASHBOARD_KEY", [], "messages");
            echo "</a></li>
                            ";
            // line 258
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_INSTRUCTOR")) {
                // line 259
                echo "                                <li><a class=\"dropdown-item\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_instructor_profile");
                echo "\"><i class=\"bi bi-gear fa-fw me-2\"></i>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("EDIT_PROFILE_KEY", [], "messages");
                echo "</a></li>
                            ";
            } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_STUDENT")) {
                // line 261
                echo "                                <li><a class=\"dropdown-item\" href=\"\"><i class=\"bi bi-gear fa-fw me-2\"></i>";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("EDIT_PROFILE_KEY", [], "messages");
                echo "</a></li>
                            ";
            }
            // line 263
            echo "                            
                            <li><a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-info-circle fa-fw me-2\"></i>";
            // line 264
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("HELP_KEY", [], "messages");
            echo "</a></li>
                            <li><a class=\"dropdown-item bg-danger-soft-hover\" href=\"";
            // line 265
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_logout");
            echo "\"><i class=\"bi bi-power fa-fw me-2\"></i>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SIGNOUT_KEY", [], "messages");
            echo "</a></li>
                            <li> <hr class=\"dropdown-divider\"></li>
                            <!-- Dark mode options START -->
                            <li>
                                <div class=\"bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded mt-2\">
                                    <button type=\"button\" class=\"btn btn-sm mb-0\" data-bs-theme-value=\"light\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-sun fa-fw mode-switch\" viewBox=\"0 0 16 16\">
                                            <path d=\"M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z\"/>
                                            <use href=\"#\"></use>
                                        </svg> ";
            // line 274
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("LIGHT_KEY", [], "messages");
            // line 275
            echo "                                    </button>
                                    <button type=\"button\" class=\"btn btn-sm mb-0\" data-bs-theme-value=\"dark\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-moon-stars fa-fw mode-switch\" viewBox=\"0 0 16 16\">
                                            <path d=\"M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z\"/>
                                            <path d=\"M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z\"/>
                                            <use href=\"#\"></use>
                                        </svg> ";
            // line 281
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("DARK_KEY", [], "messages");
            // line 282
            echo "                                    </button>
                                    <button type=\"button\" class=\"btn btn-sm mb-0 active\" data-bs-theme-value=\"auto\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-circle-half fa-fw mode-switch\" viewBox=\"0 0 16 16\">
                                            <path d=\"M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z\"/>
                                            <use href=\"#\"></use>
                                        </svg> ";
            // line 287
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("AUTO_KEY", [], "messages");
            // line 288
            echo "                                    </button>
                                </div>
                            </li> 
                            <!-- Dark mode options END-->
                        </ul>
                    </div>
                ";
        } else {
            // line 295
            echo "                    <div class=\"navbar-nav\">
                        <a href=\"";
            // line 296
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-sm btn-dark mb-0\"><i class=\"bi bi-power me-2\"></i>";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SIGNIN_KEY", [], "messages");
            echo "</a>
                    </div>
                ";
        }
        // line 299
        echo "                
                <!-- Profile START -->
            </div>
        </nav>
        <!-- Nav END -->
    </header>
    <!-- Header END -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 313
    public function block_mainBarnner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainBarnner"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainBarnner"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 317
    public function block_mainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 322
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 323
        echo "    <!-- =======================
    Footer START -->
    <footer class=\"pt-5\">
        <div class=\"container\">
            <!-- Row START -->
            <div class=\"row g-4\">

                <!-- Widget 1 START -->
                <div class=\"col-lg-3\">
                    <!-- logo -->
                    <a class=\"me-0\" href=\"";
        // line 333
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\">
                        <img class=\"light-mode-item h-40px\" src=\"";
        // line 334
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo.svg"), "html", null, true);
        echo "\" alt=\"logo\">
                        <img class=\"dark-mode-item h-40px\" src=\"";
        // line 335
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo-light.svg"), "html", null, true);
        echo "\" alt=\"logo\">
                    </a>
                    <p class=\"my-3\">";
        // line 337
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["siteSettings"] ?? null), "siteDescription", [], "any", true, true, false, 337)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["siteSettings"] ?? null), "siteDescription", [], "any", false, false, false, 337), "")) : ("")), "html", null, true);
        echo "</p>
                    <!-- Social media icon -->
                    <ul class=\"list-inline mb-0 mt-3\">
                        ";
        // line 340
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["socialsSettings"]) || array_key_exists("socialsSettings", $context) ? $context["socialsSettings"] : (function () { throw new RuntimeError('Variable "socialsSettings" does not exist.', 340, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 341
            echo "                            ";
            if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 341)) === "fa-facebook-f")) {
                // line 342
                echo "                                <li class=\"list-inline-item\"> <a target=\"_blank\" class=\"btn btn-white btn-sm shadow px-2 text-facebook\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 342), "html", null, true);
                echo "\"><i class=\"fab fa-fw fa-facebook-f\"></i></a> </li>
                            ";
            } elseif ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 343
$context["item"], "icon", [], "any", false, false, false, 343)) === "fa-instagram")) {
                // line 344
                echo "                                <li class=\"list-inline-item\"> <a target=\"_blank\" class=\"btn btn-white btn-sm shadow px-2 text-instagram\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 344), "html", null, true);
                echo "\"><i class=\"fab fa-fw fa-instagram\"></i></a> </li>
                            ";
            } elseif ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 345
$context["item"], "icon", [], "any", false, false, false, 345)) === "fa-fw fa-twitter")) {
                // line 346
                echo "                                <li class=\"list-inline-item\"> <a target=\"_blank\" class=\"btn btn-white btn-sm shadow px-2 text-twitter\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 346), "html", null, true);
                echo "\"><i class=\"fab fa-fw fa-twitter\"></i></a> </li>
                            ";
            } elseif ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 347
$context["item"], "icon", [], "any", false, false, false, 347)) === "fa-linkedin-in")) {
                // line 348
                echo "                                <li class=\"list-inline-item\"> <a target=\"_blank\" class=\"btn btn-white btn-sm shadow px-2 text-linkedin\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 348), "html", null, true);
                echo "\"><i class=\"fab fa-fw fa-linkedin-in\"></i></a> </li>
                            ";
            } elseif ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source,             // line 349
$context["item"], "icon", [], "any", false, false, false, 349)) === "fa-youtube")) {
                // line 350
                echo "                                <li class=\"list-inline-item\"> <a target=\"_blank\" class=\"btn btn-white btn-sm shadow px-2 text-danger\" href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 350), "html", null, true);
                echo "\"><i class=\"fab fa-fw fa-youtube\"></i></a> </li>
                            ";
            }
            // line 352
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 353
        echo "                    </ul>
                </div>
                <!-- Widget 1 END -->

                <!-- Widget 2 START -->
                <div class=\"col-lg-6\">
                    <div class=\"row g-4\">
                        <!-- Link block -->
                        <div class=\"col-6 col-md-4\">
                            <h5 class=\"mb-2 mb-md-4\">";
        // line 362
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("COMPANY_KEY", [], "messages");
        echo "</h5>
                            <ul class=\"nav flex-column\">
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 364
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_courses");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("COURSES_KEY", [], "messages");
        echo "</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 365
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_exam_index");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("EXAM_KEY", [], "messages");
        echo "</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 366
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_about");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ABOUTUS_KEY", [], "messages");
        echo "</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 367
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_front_contact");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CONTACTUS_KEY", [], "messages");
        echo "</a></li>
                            </ul>
                        </div>
                                        
                        <!-- Link block -->
                        <div class=\"col-6 col-md-4\">
                            <h5 class=\"mb-2 mb-md-4\">";
        // line 373
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("COMMUNITY_KEY", [], "messages");
        echo "</h5>
                            <ul class=\"nav flex-column\">
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 375
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_faq");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("FAQ_KEY", [], "messages");
        echo "</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 376
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_front_forum_index");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("FORUM_KEY", [], "messages");
        echo "</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">";
        // line 377
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SITEMAP_KEY", [], "messages");
        echo "</a></li>
                            </ul>
                        </div>

                        <!-- Link block -->
                        <div class=\"col-6 col-md-4\">
                            <h5 class=\"mb-2 mb-md-4\">";
        // line 383
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("TEACHING_KEY", [], "messages");
        echo "</h5>
                            <ul class=\"nav flex-column\">
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 385
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_become_teacher");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("BECOMEATEACKER_KEY", [], "messages");
        echo "</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 386
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_become_teacher");
        echo "#contactTitle\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("HOWTOGUIDE_KEY", [], "messages");
        echo "</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 387
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_terms");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("TERMSANDCONDITIONS_KEY", [], "messages");
        echo "</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Widget 2 END -->

                <!-- Widget 3 START -->
                <div class=\"col-lg-3\">
                    <h5 class=\"mb-2 mb-md-4\">";
        // line 396
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("CONTACT_KEY", [], "messages");
        echo "</h5>
                    <!-- Time -->
                    <p class=\"mb-2\">
                        ";
        // line 399
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("TOLLFREE_KEY", [], "messages");
        echo ":<span class=\"h6 fw-light ms-2\">";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["siteSettings"] ?? null), "contactPhone", [], "any", true, true, false, 399)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["siteSettings"] ?? null), "contactPhone", [], "any", false, false, false, 399), "+237656967064")) : ("+237656967064")), "html", null, true);
        echo "</span>
                        <span class=\"d-block small\">(9:AM to 8:PM IST)</span>
                    </p>

                    <p class=\"mb-0\">";
        // line 403
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("EMAIL_KEY", [], "messages");
        echo ":<span class=\"h6 fw-light ms-2\">";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["siteSettings"] ?? null), "supportEmail", [], "any", true, true, false, 403)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["siteSettings"] ?? null), "supportEmail", [], "any", false, false, false, 403), "emmaberanger2@gmail.com")) : ("emmaberanger2@gmail.com")), "html", null, true);
        echo "</span></p>

                    <div class=\"row g-2 mt-2\">
                        <!-- Google play store button -->
                        <div class=\"col-6 col-sm-4 col-md-3 col-lg-6\">
                            <a href=\"#\"> <img src=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/client/google-play.svg"), "html", null, true);
        echo "\" alt=\"\"> </a>
                        </div>
                        <!-- App store button -->
                        <div class=\"col-6 col-sm-4 col-md-3 col-lg-6\">
                            <a href=\"#\"> <img src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/client/app-store.svg"), "html", null, true);
        echo "\" alt=\"app-store\"> </a>
                        </div>
                    </div> <!-- Row END -->
                </div> 
                <!-- Widget 3 END -->
            </div><!-- Row END -->

            <!-- Divider -->
            <hr class=\"mt-4 mb-0\">

            <!-- Bottom footer -->
            <div class=\"py-3\">
                <div class=\"container px-0\">
                    <div class=\"d-lg-flex justify-content-between align-items-center py-3 text-center text-md-left\">
                        <!-- copyright text -->
                        <div class=\"text-primary-hover\">";
        // line 427
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["siteSettings"] ?? null), "siteCopyrights", [], "any", true, true, false, 427)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["siteSettings"] ?? null), "siteCopyrights", [], "any", false, false, false, 427), "Copyrights ©2023 Sensei237. All rights reserved")) : ("Copyrights ©2023 Sensei237. All rights reserved")), "html", null, true);
        echo "</div>
                        <!-- copyright links-->
                        <div class=\"justify-content-center mt-3 mt-lg-0\">
                            <ul class=\"nav list-inline justify-content-center mb-0\">
                                <li class=\"list-inline-item\">
                                    <!-- Language selector -->
                                    <div class=\"dropup mt-0 text-center text-sm-end\">
                                        <a class=\"dropdown-toggle nav-link\" href=\"#\" role=\"button\" id=\"languageSwitcher\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            <i class=\"fas fa-globe me-2\"></i>";
        // line 435
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("LANGUAGE_KEY", [], "messages");
        // line 436
        echo "                                        </a>
                                        <ul class=\"dropdown-menu min-w-auto\" aria-labelledby=\"languageSwitcher\">
                                            <li><a class=\"dropdown-item me-4\" href=\"#\"><img class=\"fa-fw me-2\" src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/uk.svg"), "html", null, true);
        echo "\" alt=\"\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ENGLISH_KEY", [], "messages");
        echo "</a></li>
                                            <li><a class=\"dropdown-item me-4\" href=\"#\"><img class=\"fa-fw me-2\" src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/flags/sp.svg"), "html", null, true);
        echo "\" alt=\"\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("FRENCH_KEY", [], "messages");
        echo "</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"list-inline-item\">
                                    <div class=\"dropup mt-0 text-center text-sm-end\">
                                        <a class=\"dropdown-toggle nav-link\" href=\"#\" role=\"button\" id=\"languageSwitcher\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            <i class=\"fas fa-globe me-2\"></i>";
        // line 446
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("APPARANCE_KEY", [], "messages");
        // line 447
        echo "                                        </a>
                                        <ul class=\"dropdown-menu min-w-auto bg-light dark-mode-switch theme-icon-active\">
                                            <li>
                                                <a href=\"#\" class=\"dropdown-item me-4\" data-bs-theme-value=\"light\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-sun fa-fw mode-switch\" viewBox=\"0 0 16 16\">
                                                        <path d=\"M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z\"/>
                                                        <use href=\"#\"></use>
                                                    </svg> ";
        // line 454
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("LIGHT_KEY", [], "messages");
        // line 455
        echo "                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"dropdown-item me-4\" data-bs-theme-value=\"dark\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-moon-stars fa-fw mode-switch\" viewBox=\"0 0 16 16\">
                                                        <path d=\"M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z\"/>
                                                        <path d=\"M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z\"/>
                                                        <use href=\"#\"></use>
                                                    </svg> ";
        // line 463
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("DARK_KEY", [], "messages");
        // line 464
        echo "                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"dropdown-item me-4 active\" data-bs-theme-value=\"auto\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-circle-half fa-fw mode-switch\" viewBox=\"0 0 16 16\">
                                                        <path d=\"M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z\"/>
                                                        <use href=\"#\"></use>
                                                    </svg> ";
        // line 471
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("AUTO_KEY", [], "messages");
        // line 472
        echo "                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li> 
                                <li class=\"list-inline-item\"><a class=\"nav-link\" href=\"";
        // line 477
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_terms");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("TERMSOFUSE_KEY", [], "messages");
        echo "</a></li>
                                <li class=\"list-inline-item\"><a class=\"nav-link pe-0\" href=\"";
        // line 478
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_terms");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("PRIVACYPOLICY_KEY", [], "messages");
        echo "</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- =======================
    Footer END -->
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 608
    public function block_jquery($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jquery"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "jquery"));

        // line 609
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/jquery/jquery-3.6.4.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 613
    public function block_script1($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script1"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script1"));

        // line 614
        echo "    <!-- Vendors -->
    <script src=\"";
        // line 615
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/tiny-slider/tiny-slider.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 616
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/js/glightbox.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 617
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/purecounterjs/dist/purecounter_vanilla.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 618
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/js/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 619
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/overlay-scrollbar/js/overlayscrollbars.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 620
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/choices/js/choices.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 621
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$('.pagination-container nav').addClass('mt-4 d-flex justify-content-center')
        \$('.pagination-container nav ul.pagination li').addClass('mb-0')
        \$('.pagination-container nav ul.pagination').addClass('pagination-primary-soft d-inline-block d-md-flex rounded mb-0')

        \$('.delete-item').on('click', (e) => {
            return confirm('Are you sure you want to purchasse ?');
        })
    </script>

    ";
        // line 632
        $this->displayBlock('custumJS', $context, $blocks);
        // line 697
        echo "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 632
    public function block_custumJS($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custumJS"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custumJS"));

        // line 633
        echo "            
        <script>
            setTimeout(function() {
                \$(\"#bottom-notification\").addClass('d-none');
            }, 10000)
        </script>

        <script>
            const likeForumMessage = (e) => {
                e.preventDefault();
                const elt = \$(e.currentTarget)
                if (confirm(\"Confirm that you like these answer ?\")){
                    \$.ajax({
                        url: elt.attr('href'),
                        type: \"POST\",
                        dataType: \"JSON\",
                        success: (response) => {
                            if (response.hasDone) {
                                elt.find('.nb-likes').text(response.likes)
                            }
                        }
                    })
                }
                return false;
            }
            
            const showReplyMessageForumModal = (e) => {
                e.preventDefault();
                \$('#replyForumMessage #reply').val(e.currentTarget.dataset.forumMessage)
                \$('#replyForumMessage #membre').val(e.currentTarget.dataset.membre)
                \$('#replyForumMessage #response_container').val(e.currentTarget.dataset.appendResponse)

            }

            \$('#replyForumMessage for').on('submit', (e) => {
                e.preventDefault();
                const form = \$(this);
                const replyMessage = \$('#replyTexarea').val()
                const reply = \$('#replyForumMessage #reply').val()
                const membre = \$('#replyForumMessage #membre').val()
                \$.ajax({
                    url: \$(form).attr('action'),
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {'replyMessage': replyMessage, 'membre': membre, 'reply': reply},
                    success: (response) => {
                        if (respone.hasDone) {
                            \$('#replyForumMessage').modal('hide')
                        }
                    }
                })
            })

            \$('.delete-item').on('click', (e) => {
                return confirm('Are you sure you want to delete this item?');
            })
            document.querySelectorAll('.reply-forum-message').forEach(btn => {
                btn.addEventListener(\"click\", showReplyMessageForumModal)
            })
            document.querySelectorAll('.like-forum-message').forEach(btn => {
                btn.addEventListener(\"click\", likeForumMessage)
            })
        </script>
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 698
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "front/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1461 => 698,  1388 => 633,  1378 => 632,  1368 => 697,  1366 => 632,  1352 => 621,  1348 => 620,  1344 => 619,  1340 => 618,  1336 => 617,  1332 => 616,  1328 => 615,  1325 => 614,  1315 => 613,  1302 => 609,  1292 => 608,  1269 => 478,  1263 => 477,  1256 => 472,  1254 => 471,  1245 => 464,  1243 => 463,  1233 => 455,  1231 => 454,  1222 => 447,  1220 => 446,  1208 => 439,  1202 => 438,  1198 => 436,  1196 => 435,  1185 => 427,  1167 => 412,  1160 => 408,  1150 => 403,  1141 => 399,  1135 => 396,  1121 => 387,  1115 => 386,  1109 => 385,  1104 => 383,  1095 => 377,  1089 => 376,  1083 => 375,  1078 => 373,  1067 => 367,  1061 => 366,  1055 => 365,  1049 => 364,  1044 => 362,  1033 => 353,  1027 => 352,  1021 => 350,  1019 => 349,  1014 => 348,  1012 => 347,  1007 => 346,  1005 => 345,  1000 => 344,  998 => 343,  993 => 342,  990 => 341,  986 => 340,  980 => 337,  975 => 335,  971 => 334,  967 => 333,  955 => 323,  945 => 322,  927 => 317,  909 => 313,  892 => 299,  884 => 296,  881 => 295,  872 => 288,  870 => 287,  863 => 282,  861 => 281,  853 => 275,  851 => 274,  837 => 265,  833 => 264,  830 => 263,  824 => 261,  816 => 259,  814 => 258,  808 => 257,  799 => 251,  795 => 250,  789 => 247,  778 => 239,  772 => 236,  758 => 231,  748 => 230,  744 => 228,  741 => 227,  738 => 226,  735 => 225,  732 => 224,  730 => 223,  713 => 209,  709 => 208,  700 => 201,  693 => 197,  689 => 196,  686 => 195,  684 => 194,  673 => 190,  660 => 184,  652 => 179,  645 => 177,  640 => 174,  634 => 167,  632 => 166,  626 => 165,  614 => 156,  590 => 135,  586 => 134,  582 => 133,  570 => 124,  563 => 120,  555 => 114,  545 => 113,  527 => 108,  509 => 94,  491 => 7,  477 => 701,  473 => 699,  471 => 698,  469 => 613,  465 => 612,  462 => 611,  460 => 608,  456 => 606,  442 => 595,  435 => 591,  429 => 588,  414 => 575,  412 => 574,  398 => 563,  394 => 562,  390 => 561,  383 => 557,  379 => 556,  375 => 555,  368 => 551,  364 => 550,  340 => 528,  330 => 524,  328 => 523,  325 => 522,  315 => 518,  313 => 517,  307 => 513,  301 => 509,  292 => 506,  289 => 505,  285 => 504,  277 => 498,  275 => 497,  272 => 496,  266 => 494,  263 => 493,  257 => 491,  255 => 490,  252 => 489,  250 => 322,  244 => 318,  242 => 317,  237 => 314,  235 => 313,  227 => 307,  225 => 113,  219 => 109,  217 => 108,  203 => 97,  199 => 95,  197 => 94,  192 => 92,  188 => 91,  184 => 90,  180 => 89,  176 => 88,  172 => 87,  168 => 86,  164 => 85,  160 => 84,  154 => 81,  150 => 80,  146 => 79,  140 => 76,  65 => 7,  62 => 6,  60 => 5,  54 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    {% set siteSettings = app.session.get('siteSettings') %}
    {% set socialsSettings = app.session.get('socialsSettings') %}
\t<title>{{ siteSettings.siteName|default(\"Kulmapeck.com\") }} {% block title %}{% endblock %}</title>

\t<!-- Meta Tags -->
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t<meta name=\"author\" content=\"Webestica.com\">
\t<meta name=\"description\" content=\"Kulmapeck - The Best E-learning platform\">

\t<!-- Dark mode -->
\t<script>
\t\tconst storedTheme = localStorage.getItem('theme')
 
\t\tconst getPreferredTheme = () => {
\t\t\tif (storedTheme) {
\t\t\t\treturn storedTheme
\t\t\t}
\t\t\treturn window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
\t\t}

\t\tconst setTheme = function (theme) {
\t\t\tif (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
\t\t\t\tdocument.documentElement.setAttribute('data-bs-theme', 'dark')
\t\t\t} else {
\t\t\t\tdocument.documentElement.setAttribute('data-bs-theme', theme)
\t\t\t}
\t\t}

\t\tsetTheme(getPreferredTheme())

\t\twindow.addEventListener('DOMContentLoaded', () => {
\t\t    var el = document.querySelector('.theme-icon-active');
\t\t\tif(el != 'undefined' && el != null) {
\t\t\t\tconst showActiveTheme = theme => {
\t\t\t\tconst activeThemeIcon = document.querySelector('.theme-icon-active use')
\t\t\t\tconst btnToActive = document.querySelector(`[data-bs-theme-value=\"\${theme}\"]`)
\t\t\t\tconst svgOfActiveBtn = btnToActive.querySelector('.mode-switch use').getAttribute('href')

\t\t\t\tdocument.querySelectorAll('[data-bs-theme-value]').forEach(element => {
\t\t\t\t\telement.classList.remove('active')
\t\t\t\t})

\t\t\t\tbtnToActive.classList.add('active')
\t\t\t\tactiveThemeIcon.setAttribute('href', svgOfActiveBtn)
\t\t\t}

\t\t\twindow.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
\t\t\t\tif (storedTheme !== 'light' || storedTheme !== 'dark') {
\t\t\t\t\tsetTheme(getPreferredTheme())
\t\t\t\t}
\t\t\t})

\t\t\tshowActiveTheme(getPreferredTheme())

\t\t\tdocument.querySelectorAll('[data-bs-theme-value]')
\t\t\t\t.forEach(toggle => {
\t\t\t\t\ttoggle.addEventListener('click', () => {
\t\t\t\t\t\tconst theme = toggle.getAttribute('data-bs-theme-value')
\t\t\t\t\t\tlocalStorage.setItem('theme', theme)
\t\t\t\t\t\tsetTheme(theme)
\t\t\t\t\t\tshowActiveTheme(theme)
\t\t\t\t\t})
\t\t\t\t})

\t\t\t}
\t\t})
\t\t
\t</script>

\t<!-- Favicon -->
\t<link rel=\"shortcut icon\" href=\"{{ asset('assets/images/favicon.ico') }}\">

\t<!-- Google Font -->
\t<link rel=\"preconnect\" href=\"{{ asset('fonts.googleapis.com/index.html') }}\">
\t<link rel=\"preconnect\" href=\"{{ asset('fonts.gstatic.com/index.html') }}\" crossorigin>
\t<link rel=\"stylesheet\" href=\"{{ asset('fonts.googleapis.com/css23ab4.css?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap') }}\">

\t<!-- Plugins CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/font-awesome/css/all.min.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/vendor/apexcharts/css/apexcharts.css')}}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/vendor/overlay-scrollbar/css/overlayscrollbars.min.css')}}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/tiny-slider/tiny-slider.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/glightbox/css/glightbox.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/choices/css/choices.min.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/aos/aos.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/plyr/plyr.css') }}\" />

    {% block stylesheet %}{% endblock %}

\t<!-- Theme CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/style.css') }}\">

\t<!-- Global site tag (gtag.js) - Google Analytics -->
\t<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-7N7LGGGWT1\"></script>
\t<script>
\t\twindow.dataLayer = window.dataLayer || [];
\t\tfunction gtag(){dataLayer.push(arguments);}
\t\tgtag('js', new Date());

\t\tgtag('config', 'G-7N7LGGGWT1');
\t</script>
    {% block headJS %}{% endblock %}

</head>

<body class=\"\">
    {% block header %}
    <!-- Header START -->
    <header class=\"navbar-light navbar-sticky header-static\">
        <nav class=\"navbar navbar-expand\">
            <div class=\"container-fluid px-3 px-xl-5\">
                <p class=\"pt-3 text-center d-block text-primary\" style=\"width: 100%; margin-bottom: 0;\">
                    <span>
                        <span>{% trans %}NUMERO_REGISTRE_COMMERCE_KEY{% endtrans %} : </span> <i>RC/DLA/2022/B/5105</i>
                    </span>
                    <b style=\"margin: 0px 15px;\">|</b>
                    <span>
                        <span>{% trans %}LOCALISATION_KEY{% endtrans %} : </span> <i>DOUALA-Akwa/ Carrefour Équinox Tv face Beneficial Assurance</i>
                    </span>
                </p>
            </div>
        </nav>
        <!-- Nav START -->
        <nav class=\"navbar navbar-expand-xl\">
            <div class=\"container-fluid px-3 px-xl-5\">
                <!-- Logo START -->
                <a class=\"navbar-brand\" href=\"{{ path('app_front') }}\">
                    <img class=\"light-mode-item navbar-brand-item\" src=\"{{ asset('assets/images/logo.svg') }}\" alt=\"logo\">
                    <img class=\"dark-mode-item navbar-brand-item\" src=\"{{ asset('assets/images/logo-light.svg') }}\" alt=\"logo\">
                </a>
                <!-- Logo END -->

                <!-- Responsive navbar toggler -->
                <button class=\"navbar-toggler ms-auto\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                    <span class=\"navbar-toggler-animation\">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

                <!-- Main navbar START -->
                <div class=\"navbar-collapse w-100 collapse\" id=\"navbarCollapse\">

                    <!-- Nav category menu START -->
                    <ul class=\"navbar-nav navbar-nav-scroll me-auto\">
                        <!-- Nav item 1 Demos -->
                        <li class=\"nav-item dropdown dropdown-menu-shadow-stacked\">
                            <a class=\"nav-link bg-primary bg-opacity-10 rounded-3 text-primary px-3 py-3 py-xl-0\" href=\"#\" id=\"categoryMenu\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"><i class=\"bi bi-ui-radios-grid me-2\"></i><span>Categories</span></a>
                            {{ render(url(\"app_front_header_categories\")) }}
                        </li>
                    </ul>
                    <!-- Nav category menu END -->

                    <!-- Nav Main menu START -->
                    <ul class=\"navbar-nav navbar-nav-scroll me-auto\">
                        <!-- Nav item 1 Demos -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link {{ isHomePage is defined ? 'active' : '' }}\" href=\"{{ path('app_front') }}\" id=\"demoMenu\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                {% trans %}HOME_KEY{% endtrans %}
                            </a>
                        </li>

                        <!-- Nav item 2 Pages -->
                        {# <li class=\"nav-item dropdown\">
                            <a class=\"nav-link\" href=\"\" id=\"pagesMenu\" aria-haspopup=\"true\" aria-expanded=\"false\">Courses</a>
                        </li> #}

                        <!-- Nav item 4 Megamenu-->
                        <li class=\"nav-item dropdown dropdown-fullwidth\">
                            <a class=\"nav-link dropdown-toggle {{ isCoursePage is defined ? 'active' : '' }}\" href=\"#\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">{% trans %}COURSESFORMATION_KEY{% endtrans %}</a>
                            <div class=\"dropdown-menu dropdown-menu-end\" data-bs-popper=\"none\">
                                {{ render(url(\"app_front_header_courses_and_formations\")) }}
                            </div>
                        </li>

                        <li class=\"nav-item\">
                            <a class=\"nav-link {{ isExamPage is defined ? 'active' : '' }}\" href=\"{{ path('app_front_exam_index') }}\" aria-haspopup=\"true\" aria-expanded=\"false\">{% trans %}EXAM_KEY{% endtrans %}</a>
                        </li>


                        <!-- Nav item 3 Account -->
                        <li class=\"nav-item\">
                            <a class=\"nav-link {{ isForumMainPage is defined ? 'active' : '' }}\" href=\"{{ url('app_front_forum_index') }}\" aria-haspopup=\"true\" aria-expanded=\"false\">{% trans %}FORUM_KEY{% endtrans %}</a>
                        </li>

                        <!-- Nav item 3 Account -->
                        {% if not app.user or (app.user.eleve and not app.user.eleve.isPremium) %}
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"{{ path('app_plan') }}\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                    <b class=\"badge bg-success\">{% trans %}BECOME_PREMIUM_KEY{% endtrans %}</b>
                                </a>
                            </li>
                        {% endif %}

                    </ul>
                    <!-- Nav Main menu END -->

                    <!-- Nav Search START -->
                    <div class=\"nav my-3 my-xl-0 px-4 flex-nowrap align-items-center\">
                        <div class=\"nav-item w-100\">
                            <form class=\"position-relative\" action=\"{{ url(\"app_front_courses\") }}\">
                                <input class=\"form-control pe-5 bg-transparent\" type=\"search\" placeholder=\"{% trans %}SEARCH_KEY{% endtrans %}\" name=\"search\" required aria-label=\"Search\">
                                <button class=\"bg-transparent p-2 position-absolute top-50 end-0 translate-middle-y border-0 text-primary-hover text-reset\" type=\"submit\">
                                <i class=\"fas fa-search fs-6 \"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!-- Nav Search END -->
                </div>
                <!-- Main navbar END -->

                <div class=\"dropdown mt-0 text-center text-sm-end\">
                    <a class=\"dropdown-toggle nav-link\" style=\"padding-right: 15px\" href=\"#\" role=\"button\" id=\"languageSwitcher\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                        <i class=\"fas fa-globe me-2\"></i>
                        {% if app.session.get('_locale') == 'en'  %}
                            {% trans %}ENGLISH_KEY{% endtrans %}
                        {% else %}
                            {% trans %}FRENCH_KEY{% endtrans %}
                        {% endif %}
                    </a>
                    <ul class=\"dropdown-menu min-w-auto\" aria-labelledby=\"languageSwitcher\">
                        <li><a class=\"dropdown-item me-4 {{ app.session.get('_locale') is same as 'en' ? 'active' : '' }}\" href=\"{{ url('app_security_change_language', {lang: 'en'}) }}\"><img class=\"fa-fw me-2\" src=\"{{ asset('assets/images/flags/uk.svg') }}\" alt=\"\">{% trans %}ENGLISH_KEY{% endtrans %}</a></li>
                        <li><a class=\"dropdown-item me-4 {{ app.session.get('_locale') is same as 'fr' ? 'active' : '' }}\" href=\"{{ url('app_security_change_language', {lang: 'fr'}) }}\"><img class=\"fa-fw me-2\" src=\"{{ asset('assets/images/flags/sp.svg') }}\" alt=\"\">{% trans %}FRENCH_KEY{% endtrans %}</a></li>
                    </ul>
                </div>

                <!-- Profile START -->
                {% if app.user %} 
                    <div class=\"dropdown ms-1 ms-lg-0\">     
                        <a class=\"avatar avatar-sm p-0\" href=\"#\" id=\"profileDropdown\" role=\"button\" data-bs-auto-close=\"outside\" data-bs-display=\"static\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                            <img class=\"avatar-img rounded-circle\" src=\"{{ asset(app.user.personne.avatarPath) }}\" alt=\"avatar\">
                        </a>
                        <ul class=\"dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3\" aria-labelledby=\"profileDropdown\">
                            <!-- Profile info -->
                            <li class=\"px-3 mb-3\">
                                <div class=\"d-flex align-items-center\">
                                    <!-- Avatar -->
                                    <div class=\"avatar me-3\">
                                        <img class=\"avatar-img rounded-circle shadow\" src=\"{{ asset(app.user.personne.avatarPath) }}\" alt=\"avatar\">
                                    </div>
                                    <div>
                                    <a class=\"h6\" href=\"#\">{{ app.user.personne.pseudo }}</a>
                                    <p class=\"small m-0\">{{ app.user.userIdentifier }}</p>
                                    </div>
                                </div>
                            </li>
                            <li> <hr class=\"dropdown-divider\"></li>
                            <!-- Links -->
                            <li><a class=\"dropdown-item\" href=\"{{ url(\"app_home\") }}\"><i class=\"bi bi-person fa-fw me-2\"></i>{% trans %}DASHBOARD_KEY{% endtrans %}</a></li>
                            {% if is_granted('ROLE_INSTRUCTOR') %}
                                <li><a class=\"dropdown-item\" href=\"{{ url(\"app_instructor_profile\") }}\"><i class=\"bi bi-gear fa-fw me-2\"></i>{% trans %}EDIT_PROFILE_KEY{% endtrans %}</a></li>
                            {% elseif is_granted('ROLE_STUDENT') %}
                                <li><a class=\"dropdown-item\" href=\"\"><i class=\"bi bi-gear fa-fw me-2\"></i>{% trans %}EDIT_PROFILE_KEY{% endtrans %}</a></li>
                            {% endif %}
                            
                            <li><a class=\"dropdown-item\" href=\"#\"><i class=\"bi bi-info-circle fa-fw me-2\"></i>{% trans %}HELP_KEY{% endtrans %}</a></li>
                            <li><a class=\"dropdown-item bg-danger-soft-hover\" href=\"{{ url(\"app_logout\") }}\"><i class=\"bi bi-power fa-fw me-2\"></i>{% trans %}SIGNOUT_KEY{% endtrans %}</a></li>
                            <li> <hr class=\"dropdown-divider\"></li>
                            <!-- Dark mode options START -->
                            <li>
                                <div class=\"bg-light dark-mode-switch theme-icon-active d-flex align-items-center p-1 rounded mt-2\">
                                    <button type=\"button\" class=\"btn btn-sm mb-0\" data-bs-theme-value=\"light\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-sun fa-fw mode-switch\" viewBox=\"0 0 16 16\">
                                            <path d=\"M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z\"/>
                                            <use href=\"#\"></use>
                                        </svg> {% trans %}LIGHT_KEY{% endtrans %}
                                    </button>
                                    <button type=\"button\" class=\"btn btn-sm mb-0\" data-bs-theme-value=\"dark\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-moon-stars fa-fw mode-switch\" viewBox=\"0 0 16 16\">
                                            <path d=\"M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z\"/>
                                            <path d=\"M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z\"/>
                                            <use href=\"#\"></use>
                                        </svg> {% trans %}DARK_KEY{% endtrans %}
                                    </button>
                                    <button type=\"button\" class=\"btn btn-sm mb-0 active\" data-bs-theme-value=\"auto\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-circle-half fa-fw mode-switch\" viewBox=\"0 0 16 16\">
                                            <path d=\"M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z\"/>
                                            <use href=\"#\"></use>
                                        </svg> {% trans %}AUTO_KEY{% endtrans %}
                                    </button>
                                </div>
                            </li> 
                            <!-- Dark mode options END-->
                        </ul>
                    </div>
                {% else %}
                    <div class=\"navbar-nav\">
                        <a href=\"{{ path('app_login') }}\" class=\"btn btn-sm btn-dark mb-0\"><i class=\"bi bi-power me-2\"></i>{% trans %}SIGNIN_KEY{% endtrans %}</a>
                    </div>
                {% endif %}
                
                <!-- Profile START -->
            </div>
        </nav>
        <!-- Nav END -->
    </header>
    <!-- Header END -->
    {% endblock %}

    <!-- **************** MAIN CONTENT START **************** -->
    <main>
        
        <!-- =======================
        Main Banner START -->
        {% block mainBarnner %}{% endblock %}
        <!-- =======================
        Main Banner END -->

        {% block mainContent %}{% endblock %}

    </main>
    <!-- **************** MAIN CONTENT END **************** -->

    {% block footer %}
    <!-- =======================
    Footer START -->
    <footer class=\"pt-5\">
        <div class=\"container\">
            <!-- Row START -->
            <div class=\"row g-4\">

                <!-- Widget 1 START -->
                <div class=\"col-lg-3\">
                    <!-- logo -->
                    <a class=\"me-0\" href=\"{{ path('app_home') }}\">
                        <img class=\"light-mode-item h-40px\" src=\"{{ asset('assets/images/logo.svg') }}\" alt=\"logo\">
                        <img class=\"dark-mode-item h-40px\" src=\"{{ asset('assets/images/logo-light.svg') }}\" alt=\"logo\">
                    </a>
                    <p class=\"my-3\">{{ siteSettings.siteDescription|default('') }}</p>
                    <!-- Social media icon -->
                    <ul class=\"list-inline mb-0 mt-3\">
                        {% for item in socialsSettings %}
                            {% if item.icon|lower is same as 'fa-facebook-f' %}
                                <li class=\"list-inline-item\"> <a target=\"_blank\" class=\"btn btn-white btn-sm shadow px-2 text-facebook\" href=\"{{ item.link }}\"><i class=\"fab fa-fw fa-facebook-f\"></i></a> </li>
                            {% elseif item.icon|lower is same as 'fa-instagram' %}
                                <li class=\"list-inline-item\"> <a target=\"_blank\" class=\"btn btn-white btn-sm shadow px-2 text-instagram\" href=\"{{ item.link }}\"><i class=\"fab fa-fw fa-instagram\"></i></a> </li>
                            {% elseif item.icon|lower is same as 'fa-fw fa-twitter' %}
                                <li class=\"list-inline-item\"> <a target=\"_blank\" class=\"btn btn-white btn-sm shadow px-2 text-twitter\" href=\"{{ item.link }}\"><i class=\"fab fa-fw fa-twitter\"></i></a> </li>
                            {% elseif item.icon|lower is same as 'fa-linkedin-in' %}
                                <li class=\"list-inline-item\"> <a target=\"_blank\" class=\"btn btn-white btn-sm shadow px-2 text-linkedin\" href=\"{{ item.link }}\"><i class=\"fab fa-fw fa-linkedin-in\"></i></a> </li>
                            {% elseif item.icon|lower is same as 'fa-youtube' %}
                                <li class=\"list-inline-item\"> <a target=\"_blank\" class=\"btn btn-white btn-sm shadow px-2 text-danger\" href=\"{{ item.link }}\"><i class=\"fab fa-fw fa-youtube\"></i></a> </li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                </div>
                <!-- Widget 1 END -->

                <!-- Widget 2 START -->
                <div class=\"col-lg-6\">
                    <div class=\"row g-4\">
                        <!-- Link block -->
                        <div class=\"col-6 col-md-4\">
                            <h5 class=\"mb-2 mb-md-4\">{% trans %}COMPANY_KEY{% endtrans %}</h5>
                            <ul class=\"nav flex-column\">
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('app_front_courses') }}\">{% trans %}COURSES_KEY{% endtrans %}</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('app_front_exam_index') }}\">{% trans %}EXAM_KEY{% endtrans %}</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('app_front_about') }}\">{% trans %}ABOUTUS_KEY{% endtrans %}</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ path('app_front_contact') }}\">{% trans %}CONTACTUS_KEY{% endtrans %}</a></li>
                            </ul>
                        </div>
                                        
                        <!-- Link block -->
                        <div class=\"col-6 col-md-4\">
                            <h5 class=\"mb-2 mb-md-4\">{% trans %}COMMUNITY_KEY{% endtrans %}</h5>
                            <ul class=\"nav flex-column\">
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ url('app_front_faq') }}\">{% trans %}FAQ_KEY{% endtrans %}</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ url('app_front_forum_index') }}\">{% trans %}FORUM_KEY{% endtrans %}</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"#\">{% trans %}SITEMAP_KEY{% endtrans %}</a></li>
                            </ul>
                        </div>

                        <!-- Link block -->
                        <div class=\"col-6 col-md-4\">
                            <h5 class=\"mb-2 mb-md-4\">{% trans %}TEACHING_KEY{% endtrans %}</h5>
                            <ul class=\"nav flex-column\">
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ url('app_become_teacher') }}\">{% trans %}BECOMEATEACKER_KEY{% endtrans %}</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ url('app_become_teacher') }}#contactTitle\">{% trans %}HOWTOGUIDE_KEY{% endtrans %}</a></li>
                                <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{ url('app_terms') }}\">{% trans %}TERMSANDCONDITIONS_KEY{% endtrans %}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Widget 2 END -->

                <!-- Widget 3 START -->
                <div class=\"col-lg-3\">
                    <h5 class=\"mb-2 mb-md-4\">{% trans %}CONTACT_KEY{% endtrans %}</h5>
                    <!-- Time -->
                    <p class=\"mb-2\">
                        {% trans %}TOLLFREE_KEY{% endtrans %}:<span class=\"h6 fw-light ms-2\">{{ siteSettings.contactPhone|default('+237656967064') }}</span>
                        <span class=\"d-block small\">(9:AM to 8:PM IST)</span>
                    </p>

                    <p class=\"mb-0\">{% trans %}EMAIL_KEY{% endtrans %}:<span class=\"h6 fw-light ms-2\">{{ siteSettings.supportEmail|default('emmaberanger2@gmail.com') }}</span></p>

                    <div class=\"row g-2 mt-2\">
                        <!-- Google play store button -->
                        <div class=\"col-6 col-sm-4 col-md-3 col-lg-6\">
                            <a href=\"#\"> <img src=\"{{ asset('assets/images/client/google-play.svg') }}\" alt=\"\"> </a>
                        </div>
                        <!-- App store button -->
                        <div class=\"col-6 col-sm-4 col-md-3 col-lg-6\">
                            <a href=\"#\"> <img src=\"{{ asset('assets/images/client/app-store.svg') }}\" alt=\"app-store\"> </a>
                        </div>
                    </div> <!-- Row END -->
                </div> 
                <!-- Widget 3 END -->
            </div><!-- Row END -->

            <!-- Divider -->
            <hr class=\"mt-4 mb-0\">

            <!-- Bottom footer -->
            <div class=\"py-3\">
                <div class=\"container px-0\">
                    <div class=\"d-lg-flex justify-content-between align-items-center py-3 text-center text-md-left\">
                        <!-- copyright text -->
                        <div class=\"text-primary-hover\">{{ siteSettings.siteCopyrights|default('Copyrights ©2023 Sensei237. All rights reserved') }}</div>
                        <!-- copyright links-->
                        <div class=\"justify-content-center mt-3 mt-lg-0\">
                            <ul class=\"nav list-inline justify-content-center mb-0\">
                                <li class=\"list-inline-item\">
                                    <!-- Language selector -->
                                    <div class=\"dropup mt-0 text-center text-sm-end\">
                                        <a class=\"dropdown-toggle nav-link\" href=\"#\" role=\"button\" id=\"languageSwitcher\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            <i class=\"fas fa-globe me-2\"></i>{% trans %}LANGUAGE_KEY{% endtrans %}
                                        </a>
                                        <ul class=\"dropdown-menu min-w-auto\" aria-labelledby=\"languageSwitcher\">
                                            <li><a class=\"dropdown-item me-4\" href=\"#\"><img class=\"fa-fw me-2\" src=\"{{ asset('assets/images/flags/uk.svg') }}\" alt=\"\">{% trans %}ENGLISH_KEY{% endtrans %}</a></li>
                                            <li><a class=\"dropdown-item me-4\" href=\"#\"><img class=\"fa-fw me-2\" src=\"{{ asset('assets/images/flags/sp.svg') }}\" alt=\"\">{% trans %}FRENCH_KEY{% endtrans %}</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class=\"list-inline-item\">
                                    <div class=\"dropup mt-0 text-center text-sm-end\">
                                        <a class=\"dropdown-toggle nav-link\" href=\"#\" role=\"button\" id=\"languageSwitcher\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
                                            <i class=\"fas fa-globe me-2\"></i>{% trans %}APPARANCE_KEY{% endtrans %}
                                        </a>
                                        <ul class=\"dropdown-menu min-w-auto bg-light dark-mode-switch theme-icon-active\">
                                            <li>
                                                <a href=\"#\" class=\"dropdown-item me-4\" data-bs-theme-value=\"light\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-sun fa-fw mode-switch\" viewBox=\"0 0 16 16\">
                                                        <path d=\"M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z\"/>
                                                        <use href=\"#\"></use>
                                                    </svg> {% trans %}LIGHT_KEY{% endtrans %}
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"dropdown-item me-4\" data-bs-theme-value=\"dark\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-moon-stars fa-fw mode-switch\" viewBox=\"0 0 16 16\">
                                                        <path d=\"M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z\"/>
                                                        <path d=\"M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z\"/>
                                                        <use href=\"#\"></use>
                                                    </svg> {% trans %}DARK_KEY{% endtrans %}
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#\" class=\"dropdown-item me-4 active\" data-bs-theme-value=\"auto\">
                                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-circle-half fa-fw mode-switch\" viewBox=\"0 0 16 16\">
                                                        <path d=\"M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z\"/>
                                                        <use href=\"#\"></use>
                                                    </svg> {% trans %}AUTO_KEY{% endtrans %}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li> 
                                <li class=\"list-inline-item\"><a class=\"nav-link\" href=\"{{ url('app_terms') }}\">{% trans %}TERMSOFUSE_KEY{% endtrans %}</a></li>
                                <li class=\"list-inline-item\"><a class=\"nav-link pe-0\" href=\"{{ url('app_terms') }}\">{% trans %}PRIVACYPOLICY_KEY{% endtrans %}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- =======================
    Footer END -->
    {% endblock %}

    {% if app.session.get('annonce') and app.session.get('showAnnonces') and dontShowAnnonces is not defined %}
        {{ include('front/evaluation/_annonces.html.twig', {'annonce': app.session.get('annonce'), 'isForPrommedTest': true}) }}
    {% endif %}
    {% if app.session.get('currentEvaluation') and dontShowAnnonces is not defined %}
        {{ include('front/evaluation/_annonces.html.twig', {'annonce': app.session.get('currentEvaluation'), 'isForCurrentTest': true}) }}
    {% endif %}
    
    {% if app.flashes('notification') %}
        <div id=\"bottom-notification\" style=\"position: fixed;bottom: 5px;right: 15px; min-height: 0px;z-index: 200;min-width: 400px;\">
            <div class=\"card\">
                <div class=\"card-header\">

                </div>
                <div class=\"card-body\">
                    {% for message in app.flashes('notification') %}
                        <div class=\"alert alert-danger alert-dismissible\">
                            <p>{{ message }}</p>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    {% endif %}
    
<!-- Back to top -->
<div class=\"back-top\"><i class=\"bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle\"></i></div>

{% if isReadLessonPage is defined and isReadLessonPage %}
    <a href=\"{{ url(\"app_front_course_forum_index\", {slug: course.slug}) }}\" class=\"text-primary-hover\" title=\"{% trans %}GOTOFORUM_KEY{% endtrans %}\" data-bs-toggle=\"tooltip\" style=\"color: var(--bs-danger);position: fixed;bottom: 50%; left: 40px;z-index: 100;width: 52px;height: 52px;line-height: 52px;text-align: center;display: block;cursor: pointer;visibility: visible; transition: all 0.3s ease-in-out;background: rgba(var(--bs-danger-rgb), 0.1);\">
        <i class=\"bi bi-chat-right-text-fill position-absolute top-50 start-50 translate-middle\"></i>
    </a>
{% endif %}

{% if isForumPage is defined and isForumPage %}
    <a href=\"{{ url(\"app_front_course_details\", {slug: course.slug}) }}\" class=\"text-primary-hover\" title=\"{% trans %}BACKTOCOURSEDETAILS_KEY{% endtrans %}\" data-bs-toggle=\"tooltip\" style=\"color: var(--bs-danger);position: fixed;bottom: 50%; left: 40px;z-index: 100;width: 52px;height: 52px;line-height: 52px;text-align: center;display: block;cursor: pointer;visibility: visible; transition: all 0.3s ease-in-out;background: rgba(var(--bs-danger-rgb), 0.1);\">
        <i class=\"bi bi-arrow-left-square-fill position-absolute top-50 start-50 translate-middle\"></i>
    </a>
{% endif %}

    <!-- Modal START -->
\t<div class=\"modal fade\" id=\"coursePremium\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog modal-dialog-centered modal-lg\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header border-0 bg-transparent\">
\t\t\t\t\t<!-- Close button -->
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<!-- Modal body -->
\t\t\t\t<div class=\"modal-body px-5 pb-5 position-relative overflow-hidden\">

\t\t\t\t\t<!-- Element -->
\t\t\t\t\t<figure class=\"position-absolute bottom-0 end-0 mb-n4 me-n4 d-none d-sm-block\">
\t\t\t\t\t\t<img src=\"assets/images/element/01.svg\" alt=\"element\">
\t\t\t\t\t</figure>
\t\t\t\t\t<figure class=\"position-absolute top-0 end-0 z-index-n1 opacity-2\">
\t\t\t\t\t\t<svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" width=\"818.6px\" height=\"235.1px\" viewBox=\"0 0 818.6 235.1\">
\t\t\t\t\t\t\t<path class=\"fill-info\" d=\"M735,226.3c-5.7,0.6-11.5,1.1-17.2,1.7c-66.2,6.8-134.7,13.7-192.6-16.6c-34.6-18.1-61.4-47.9-87.3-76.7 c-21.4-23.8-43.6-48.5-70.2-66.7c-53.2-36.4-121.6-44.8-175.1-48c-13.6-0.8-27.5-1.4-40.9-1.9c-46.9-1.9-95.4-3.9-141.2-16.5 C8.3,1.2,6.2,0.6,4.2,0H0c3.3,1,6.6,2,10,3c46,12.5,94.5,14.6,141.5,16.5c13.4,0.6,27.3,1.1,40.8,1.9 c53.4,3.2,121.5,11.5,174.5,47.7c26.5,18.1,48.6,42.7,70,66.5c26,28.9,52.9,58.8,87.7,76.9c58.3,30.5,127,23.5,193.3,16.7 c5.8-0.6,11.5-1.2,17.2-1.7c26.2-2.6,55-4.2,83.5-2.2v-1.2C790,222,761.2,223.7,735,226.3z\"></path>
\t\t\t\t\t\t</svg>
\t\t\t\t\t</figure>
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<h2>{% trans %}CHOOSETYPEUSERACCOUNT_KEY{% endtrans %}</span></h2>
\t\t\t\t\t<p>{% trans %}ACCOUNTMODALDESCRIPTION_KEY{% endtrans %}</p>
\t\t\t\t\t<!-- Content -->
\t\t\t\t\t<div class=\"row mb-3 item-collapse\">
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_front_register', {type: 'trainer'}) }}\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/images/avatar/prof-avatar.jpg') }}\" class=\"rounded-3 mb-3\" alt=\"...\">
\t\t\t\t\t\t\t\t<caption class=\"text-center mt-3\">{% trans %}TEACHER_KEY{% endtrans %}</caption>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-6\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_front_register', {type: 'student'}) }}\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/images/avatar/eleve-avatar.jpg') }}\" class=\"rounded-3 mb-3\" alt=\"...\">
\t\t\t\t\t\t\t\t<caption class=\"text-center mt-3\">{% trans %}STUDENT_KEY{% endtrans %}</caption>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>  
\t<!-- Modal END -->

    {% if app.user and membre is defined and membre is not null %}
    <!-- Modal START -->
\t<div class=\"modal fade\" id=\"replyForumMessage\" tabindex=\"-1\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog modal-lg\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header border-0 bg-transparent\">
\t\t\t\t\t<!-- Close button -->
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<!-- Modal body -->
\t\t\t\t<div class=\"modal-body px-5 pb-5 position-relative overflow-hidden\">
                    <div class=\"d-flex mb-4 mt-3\">
                        <!-- Avatar -->
                        <div class=\"avatar avatar-sm flex-shrink-0 me-2\">
                            <a href=\"#\"> <img class=\"avatar-img rounded-circle\" src=\"{{ asset(app.user.personne.avatarPath) }}\" alt=\"\"> </a>
                        </div>

                        <form class=\"w-100 d-flex\" method=\"POST\" action=\"{{ path(\"app_course_reply_forum_message\") }}\">
                            <input type=\"hidden\" name=\"reply\" id=\"reply\">
                            <input type=\"hidden\" name=\"membre\" id=\"membre\">
                            <input type=\"hidden\" name=\"response_container\" id=\"response_container\">
                            <textarea name=\"replyMessage\" required id=\"replyTexarea\" class=\"one form-control pe-4 bg-light\" placeholder=\"{% trans %}ADDCOMMENT_KEY{% endtrans %}\" rows=\"1\"></textarea>
                            <button class=\"btn btn-primary ms-2 mb-0\" type=\"submit\"><i class=\"fas fa-paper-plane\"></i></button>
                        </form>
                    </div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</div>  
\t<!-- Modal END -->
    {% endif %}

<!-- Vendors -->
{% block jquery %}
    <script src=\"{{ asset('assets/vendor/jquery/jquery-3.6.4.min.js') }}\"></script>
{% endblock %}
<!-- Bootstrap JS -->
<script src=\"{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}\"></script>
{% block script1 %}
    <!-- Vendors -->
    <script src=\"{{ asset('assets/vendor/tiny-slider/tiny-slider.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/glightbox/js/glightbox.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/purecounterjs/dist/purecounter_vanilla.js') }}\"></script>
    <script src=\"{{asset('assets/vendor/apexcharts/js/apexcharts.min.js')}}\"></script>
    <script src=\"{{asset('assets/vendor/overlay-scrollbar/js/overlayscrollbars.min.js')}}\"></script>
    <script src=\"{{ asset('assets/vendor/choices/js/choices.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/aos/aos.js') }}\"></script>
    <script>
        \$('.pagination-container nav').addClass('mt-4 d-flex justify-content-center')
        \$('.pagination-container nav ul.pagination li').addClass('mb-0')
        \$('.pagination-container nav ul.pagination').addClass('pagination-primary-soft d-inline-block d-md-flex rounded mb-0')

        \$('.delete-item').on('click', (e) => {
            return confirm('Are you sure you want to purchasse ?');
        })
    </script>

    {% block custumJS %}
            
        <script>
            setTimeout(function() {
                \$(\"#bottom-notification\").addClass('d-none');
            }, 10000)
        </script>

        <script>
            const likeForumMessage = (e) => {
                e.preventDefault();
                const elt = \$(e.currentTarget)
                if (confirm(\"Confirm that you like these answer ?\")){
                    \$.ajax({
                        url: elt.attr('href'),
                        type: \"POST\",
                        dataType: \"JSON\",
                        success: (response) => {
                            if (response.hasDone) {
                                elt.find('.nb-likes').text(response.likes)
                            }
                        }
                    })
                }
                return false;
            }
            
            const showReplyMessageForumModal = (e) => {
                e.preventDefault();
                \$('#replyForumMessage #reply').val(e.currentTarget.dataset.forumMessage)
                \$('#replyForumMessage #membre').val(e.currentTarget.dataset.membre)
                \$('#replyForumMessage #response_container').val(e.currentTarget.dataset.appendResponse)

            }

            \$('#replyForumMessage for').on('submit', (e) => {
                e.preventDefault();
                const form = \$(this);
                const replyMessage = \$('#replyTexarea').val()
                const reply = \$('#replyForumMessage #reply').val()
                const membre = \$('#replyForumMessage #membre').val()
                \$.ajax({
                    url: \$(form).attr('action'),
                    type: \"POST\",
                    dataType: \"JSON\",
                    data: {'replyMessage': replyMessage, 'membre': membre, 'reply': reply},
                    success: (response) => {
                        if (respone.hasDone) {
                            \$('#replyForumMessage').modal('hide')
                        }
                    }
                })
            })

            \$('.delete-item').on('click', (e) => {
                return confirm('Are you sure you want to delete this item?');
            })
            document.querySelectorAll('.reply-forum-message').forEach(btn => {
                btn.addEventListener(\"click\", showReplyMessageForumModal)
            })
            document.querySelectorAll('.like-forum-message').forEach(btn => {
                btn.addEventListener(\"click\", likeForumMessage)
            })
        </script>
        {% endblock %}
    {% endblock %}
{% block script %}{% endblock %}

<!-- Template Functions -->
<script src=\"{{ asset('assets/js/functions.js') }}\"></script>

</body>
</html>", "front/base.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\front\\base.html.twig");
    }
}
