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

/* maintenance/index.html.twig */
class __TwigTemplate_204afbcf90751ef57acf6157b3965769 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maintenance/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "maintenance/index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from eduport.webestica.com/coming-soon.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Mar 2023 00:46:17 GMT -->
<head>
\t<title>Kulmapeck</title>

\t<!-- Meta Tags -->
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t<meta name=\"author\" content=\"Webestica.com\">
\t<meta name=\"description\" content=\"Eduport- LMS, Education and Course Theme\">

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
\t<link rel=\"shortcut icon\" href=\"assets/images/favicon.ico\">

\t<!-- Google Font -->
\t<link rel=\"preconnect\" href=\"../fonts.googleapis.com/index.html\">
\t<link rel=\"preconnect\" href=\"../fonts.gstatic.com/index.html\" crossorigin>
\t<link rel=\"stylesheet\" href=\"../fonts.googleapis.com/css23ab4.css?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap\">

\t<!-- Plugins CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/font-awesome/css/all.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css"), "html", null, true);
        echo "\">

\t<!-- Theme CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">

</head>

<body>

<!-- **************** MAIN CONTENT START **************** -->
<main>
<section class=\"pt-0 pt-lg-5 position-relative overflow-hidden my-auto\">

\t<!-- SVG decoration -->
\t<figure class=\"position-absolute bottom-0 start-0\">
\t\t<svg width=\"822.2px\" height=\"301.9px\" viewBox=\"0 0 822.2 301.9\">
\t\t\t<path class=\"fill-warning opacity-5\" d=\"M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z\"></path>
\t\t</svg>
\t</figure>
\t<!-- SVG decoration -->
\t<figure class=\"position-absolute top-0 end-0 d-none d-xl-block\">
\t\t<svg width=\"822.2px\" height=\"301.9px\" viewBox=\"0 0 822.2 301.9\">
\t\t\t<path class=\"fill-danger opacity-3\" d=\"M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z\"></path>
\t\t</svg>
\t</figure>

\t<div class=\"container position-relative\">
\t\t<div class=\"row g-5 align-items-center justify-content-center\">
\t\t\t<div class=\"col-lg-5\">
\t\t\t\t<!-- Title -->
\t\t\t\t<h1 class=\"mt-4 mt-lg-0\">We are building something awesome!</h1>
\t\t\t\t<!-- info -->
\t\t\t\t<p>Hey you! Eduport is coming. We are doing our best to launch our website and we will be back soon.</p>
\t\t\t\t<!-- Progress bar -->
\t\t\t\t<div class=\"overflow-hidden mt-4\">
\t\t\t\t\t<p class=\"mb-1 h6 fw-light text-start\">Launch progress</p>
\t\t\t\t\t<div class=\"progress progress-md progress-percent-bg bg-light\">
\t\t\t\t\t\t<div class=\"progress-bar progress-bar-striped bg-blue aos\" data-aos=\"slide-right\" data-aos-delay=\"200\" data-aos-duration=\"1000\" data-aos-easing=\"ease-in-out\" role=\"progressbar\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:85%\">
\t\t\t\t\t\t\t<span class=\"progress-percent text-white\">85%</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Newsletter -->
\t\t\t\t<form class=\"mt-4\">
\t\t\t\t\t<!-- Info -->
\t\t\t\t\t<h6>Notify me when website is launched</h6>
\t\t\t\t\t<div class=\"bg-body border rounded-2 p-2\">
\t\t\t\t\t\t<!-- Input subscribe -->
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input class=\"form-control border-0 me-1\" type=\"email\" placeholder=\"Enter your email\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-blue mb-0 rounded-2\">Notify Me!</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>

\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<!-- Image -->
\t\t\t\t<img src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/element/coming-soon.svg"), "html", null, true);
        echo "\" class=\"h-300px h-sm-400px h-md-500px h-xl-700px\" alt=\"\">
\t\t\t</div>
\t\t</div>
\t</div>
</section>
</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Back to top -->
<div class=\"back-top\"><i class=\"bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle\"></i></div>

<!-- Bootstrap JS -->
<script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

<!-- Vendors -->
<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>

<!-- Template Functions -->
<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/functions.js"), "html", null, true);
        echo "\"></script>

</body>

<!-- Mirrored from eduport.webestica.com/coming-soon.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Mar 2023 00:46:18 GMT -->
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "maintenance/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 162,  221 => 159,  215 => 156,  200 => 144,  141 => 88,  135 => 85,  131 => 84,  127 => 83,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<!-- Mirrored from eduport.webestica.com/coming-soon.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Mar 2023 00:46:17 GMT -->
<head>
\t<title>Kulmapeck</title>

\t<!-- Meta Tags -->
\t<meta charset=\"utf-8\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t<meta name=\"author\" content=\"Webestica.com\">
\t<meta name=\"description\" content=\"Eduport- LMS, Education and Course Theme\">

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
\t<link rel=\"shortcut icon\" href=\"assets/images/favicon.ico\">

\t<!-- Google Font -->
\t<link rel=\"preconnect\" href=\"../fonts.googleapis.com/index.html\">
\t<link rel=\"preconnect\" href=\"../fonts.gstatic.com/index.html\" crossorigin>
\t<link rel=\"stylesheet\" href=\"../fonts.googleapis.com/css23ab4.css?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap\">

\t<!-- Plugins CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/vendor/font-awesome/css/all.min.css')}}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/vendor/aos/aos.css')}}\">

\t<!-- Theme CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/css/style.css')}}\">

</head>

<body>

<!-- **************** MAIN CONTENT START **************** -->
<main>
<section class=\"pt-0 pt-lg-5 position-relative overflow-hidden my-auto\">

\t<!-- SVG decoration -->
\t<figure class=\"position-absolute bottom-0 start-0\">
\t\t<svg width=\"822.2px\" height=\"301.9px\" viewBox=\"0 0 822.2 301.9\">
\t\t\t<path class=\"fill-warning opacity-5\" d=\"M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z\"></path>
\t\t</svg>
\t</figure>
\t<!-- SVG decoration -->
\t<figure class=\"position-absolute top-0 end-0 d-none d-xl-block\">
\t\t<svg width=\"822.2px\" height=\"301.9px\" viewBox=\"0 0 822.2 301.9\">
\t\t\t<path class=\"fill-danger opacity-3\" d=\"M752.5,51.9c-4.5,3.9-8.9,7.8-13.4,11.8c-51.5,45.3-104.8,92.2-171.7,101.4c-39.9,5.5-80.2-3.4-119.2-12.1 c-32.3-7.2-65.6-14.6-98.9-13.9c-66.5,1.3-128.9,35.2-175.7,64.6c-11.9,7.5-23.9,15.3-35.5,22.8c-40.5,26.4-82.5,53.8-128.4,70.7 c-2.1,0.8-4.2,1.5-6.2,2.2L0,301.9c3.3-1.1,6.7-2.3,10.2-3.5c46.1-17,88.1-44.4,128.7-70.9c11.6-7.6,23.6-15.4,35.4-22.8 c46.7-29.3,108.9-63.1,175.1-64.4c33.1-0.6,66.4,6.8,98.6,13.9c39.1,8.7,79.6,17.7,119.7,12.1C634.8,157,688.3,110,740,64.6 c4.5-3.9,9-7.9,13.4-11.8C773.8,35,797,16.4,822.2,1l-0.7-1C796.2,15.4,773,34,752.5,51.9z\"></path>
\t\t</svg>
\t</figure>

\t<div class=\"container position-relative\">
\t\t<div class=\"row g-5 align-items-center justify-content-center\">
\t\t\t<div class=\"col-lg-5\">
\t\t\t\t<!-- Title -->
\t\t\t\t<h1 class=\"mt-4 mt-lg-0\">We are building something awesome!</h1>
\t\t\t\t<!-- info -->
\t\t\t\t<p>Hey you! Eduport is coming. We are doing our best to launch our website and we will be back soon.</p>
\t\t\t\t<!-- Progress bar -->
\t\t\t\t<div class=\"overflow-hidden mt-4\">
\t\t\t\t\t<p class=\"mb-1 h6 fw-light text-start\">Launch progress</p>
\t\t\t\t\t<div class=\"progress progress-md progress-percent-bg bg-light\">
\t\t\t\t\t\t<div class=\"progress-bar progress-bar-striped bg-blue aos\" data-aos=\"slide-right\" data-aos-delay=\"200\" data-aos-duration=\"1000\" data-aos-easing=\"ease-in-out\" role=\"progressbar\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:85%\">
\t\t\t\t\t\t\t<span class=\"progress-percent text-white\">85%</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<!-- Newsletter -->
\t\t\t\t<form class=\"mt-4\">
\t\t\t\t\t<!-- Info -->
\t\t\t\t\t<h6>Notify me when website is launched</h6>
\t\t\t\t\t<div class=\"bg-body border rounded-2 p-2\">
\t\t\t\t\t\t<!-- Input subscribe -->
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input class=\"form-control border-0 me-1\" type=\"email\" placeholder=\"Enter your email\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-blue mb-0 rounded-2\">Notify Me!</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>

\t\t\t<div class=\"col-lg-7 text-center\">
\t\t\t\t<!-- Image -->
\t\t\t\t<img src=\"{{asset(\"assets/images/element/coming-soon.svg\")}}\" class=\"h-300px h-sm-400px h-md-500px h-xl-700px\" alt=\"\">
\t\t\t</div>
\t\t</div>
\t</div>
</section>
</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Back to top -->
<div class=\"back-top\"><i class=\"bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle\"></i></div>

<!-- Bootstrap JS -->
<script src=\"{{asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}\"></script>

<!-- Vendors -->
<script src=\"{{asset('assets/vendor/aos/aos.js')}}\"></script>

<!-- Template Functions -->
<script src=\"{{asset('assets/js/functions.js')}}\"></script>

</body>

<!-- Mirrored from eduport.webestica.com/coming-soon.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Mar 2023 00:46:18 GMT -->
</html>
", "maintenance/index.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\maintenance\\index.html.twig");
    }
}
