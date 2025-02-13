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

/* admin/base.html.twig */
class __TwigTemplate_8b08442a235a0ba492931b57c2bfa977 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'mainPageContent' => [$this, 'block_mainPageContent'],
            'pageTitle' => [$this, 'block_pageTitle'],
            'actionBtn' => [$this, 'block_actionBtn'],
            'mainContent' => [$this, 'block_mainContent'],
            'script' => [$this, 'block_script'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
\t<title>Kulmapeck - admin </title>
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
\t<link rel=\"shortcut icon\" href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/favicon.ico"), "html", null, true);
        echo "\">

\t<!-- Google Font -->
\t<link rel=\"preconnect\" href=\"../fonts.googleapis.com/index.html\">
\t<link rel=\"preconnect\" href=\"../fonts.gstatic.com/index.html\" crossorigin>
\t<link rel=\"stylesheet\" href=\"../fonts.googleapis.com/css23ab4.css?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap\">

\t<!-- Plugins CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/font-awesome/css/all.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/css/apexcharts.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/overlay-scrollbar/css/overlayscrollbars.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/tiny-slider/tiny-slider.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/css/glightbox.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/choices/css/choices.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/plyr/plyr.css"), "html", null, true);
        echo "\" />

\t<!-- Theme CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">

</head>

<body>


<!-- **************** MAIN CONTENT START **************** -->
<main>
\t
    ";
        // line 102
        echo twig_include($this->env, $context, "admin/_side_bar.html.twig");
        echo "

    <!-- Page content START -->
    <div class=\"page-content\">

        ";
        // line 107
        echo twig_include($this->env, $context, "admin/_navbar.html.twig");
        echo "

        <!-- Page main content START -->
\t\t";
        // line 110
        $this->displayBlock('mainPageContent', $context, $blocks);
        // line 148
        echo "    </div>
    <!-- Page content END -->

\t<div class=\"modal fade\" id=\"editModal\" tabindex=\"-1\" aria-labelledby=\"viewReviewLabel\" aria-hidden=\"true\"></div>

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Back to top -->
<div class=\"back-top\"><i class=\"bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle\"></i></div>

<script>
\tvar baseUrl = \"http://localhost:8000\";
</script>
<!-- Vendors -->
<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/jquery/jquery-3.6.4.min.js"), "html", null, true);
        echo "\"></script>

<!-- Bootstrap JS -->
<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

<!-- Vendors -->
<script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/tiny-slider/tiny-slider.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/js/glightbox.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/purecounterjs/dist/purecounter_vanilla.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/apexcharts/js/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/choices/js/choices.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>

<script>
\t\$('.pagination-container nav').addClass('d-flex justify-content-center mb-0')
\t\$('.pagination-container nav ul.pagination li').addClass('mb-0')
\t\$('.pagination-container nav ul.pagination').addClass('pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0')

\t\$('.delete-item').on('click', (e) => {
\t\treturn confirm('Are you sure you want to purchasse ?');
\t})
</script>

<script>
\tconst showEditModal = (e) => {
\t\tconst url = e.currentTarget.dataset.url;
\t\tconst elt = \$(e.currentTarget)
\t\t\$.ajax({
\t\t\turl: url,
\t\t\tsuccess: (response) => {
\t\t\t\t\$('#editModal').html(response)
\t\t\t\t\$('#editModal').modal('show')
\t\t\t}
\t\t})
\t}

\tdocument.querySelectorAll('.edit_with_modal_btn').forEach(btn => { btn.addEventListener(\"click\", showEditModal) });
\t
</script>

";
        // line 203
        $this->displayBlock('script', $context, $blocks);
        // line 204
        echo "
<!-- Template Functions -->
<script src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/functions.js"), "html", null, true);
        echo "\"></script>


</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 110
    public function block_mainPageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainPageContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainPageContent"));

        // line 111
        echo "        <div class=\"page-content-wrapper border\">
\t\t\t";
        // line 112
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "flashes", ["info"], "method", false, false, false, 112));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 113
            echo "\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"alert alert-info text-center\">
\t\t\t\t\t\t";
            // line 115
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 119));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 120
            echo "\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"alert alert-danger text-center\">
\t\t\t\t\t\t";
            // line 122
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 126));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 127
            echo "\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"alert alert-warning text-center\">
\t\t\t\t\t\t";
            // line 129
            echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "            <!-- Title -->
            <div class=\"row\">
                <div class=\"col-12 mb-3 d-sm-flex justify-content-between align-items-center\">
                    <h1 class=\"h3 mb-2 mb-sm-0\">";
        // line 136
        $this->displayBlock('pageTitle', $context, $blocks);
        echo "</h1>
\t\t\t\t\t";
        // line 137
        $this->displayBlock('actionBtn', $context, $blocks);
        // line 138
        echo "                </div>
            </div>

            ";
        // line 141
        $this->displayBlock('mainContent', $context, $blocks);
        // line 144
        echo "
        </div>
        <!-- Page main content END -->
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 136
    public function block_pageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 137
    public function block_actionBtn($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actionBtn"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actionBtn"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 141
    public function block_mainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        // line 142
        echo "\t\t\t\t
\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 203
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
        return "admin/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  461 => 203,  450 => 142,  440 => 141,  422 => 137,  403 => 136,  390 => 144,  388 => 141,  383 => 138,  381 => 137,  377 => 136,  372 => 133,  362 => 129,  358 => 127,  353 => 126,  343 => 122,  339 => 120,  334 => 119,  324 => 115,  320 => 113,  316 => 112,  313 => 111,  303 => 110,  287 => 206,  283 => 204,  281 => 203,  249 => 174,  245 => 173,  241 => 172,  237 => 171,  233 => 170,  229 => 169,  223 => 166,  217 => 163,  200 => 148,  198 => 110,  192 => 107,  184 => 102,  171 => 92,  165 => 89,  161 => 88,  157 => 87,  153 => 86,  149 => 85,  145 => 84,  141 => 83,  137 => 82,  133 => 81,  122 => 73,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
\t<title>Kulmapeck - admin </title>
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
\t<link rel=\"shortcut icon\" href=\"{{asset('assets/images/favicon.ico')}}\">

\t<!-- Google Font -->
\t<link rel=\"preconnect\" href=\"../fonts.googleapis.com/index.html\">
\t<link rel=\"preconnect\" href=\"../fonts.gstatic.com/index.html\" crossorigin>
\t<link rel=\"stylesheet\" href=\"../fonts.googleapis.com/css23ab4.css?family=Heebo:wght@400;500;700&amp;family=Roboto:wght@400;500;700&amp;display=swap\">

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

\t<!-- Theme CSS -->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/css/style.css') }}\">

</head>

<body>


<!-- **************** MAIN CONTENT START **************** -->
<main>
\t
    {{ include('admin/_side_bar.html.twig') }}

    <!-- Page content START -->
    <div class=\"page-content\">

        {{ include('admin/_navbar.html.twig') }}

        <!-- Page main content START -->
\t\t{% block mainPageContent %}
        <div class=\"page-content-wrapper border\">
\t\t\t{% for msg in app.flashes('info') %}
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"alert alert-info text-center\">
\t\t\t\t\t\t{{ msg }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t\t{% for msg in app.flashes('danger') %}
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"alert alert-danger text-center\">
\t\t\t\t\t\t{{ msg }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
\t\t\t{% for msg in app.flashes('warning') %}
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"alert alert-warning text-center\">
\t\t\t\t\t\t{{ msg }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t{% endfor %}
            <!-- Title -->
            <div class=\"row\">
                <div class=\"col-12 mb-3 d-sm-flex justify-content-between align-items-center\">
                    <h1 class=\"h3 mb-2 mb-sm-0\">{% block pageTitle %}Dashboard{% endblock %}</h1>
\t\t\t\t\t{% block actionBtn %}{% endblock %}
                </div>
            </div>

            {% block mainContent %}
\t\t\t\t
\t\t\t{% endblock %}

        </div>
        <!-- Page main content END -->
\t\t{% endblock %}
    </div>
    <!-- Page content END -->

\t<div class=\"modal fade\" id=\"editModal\" tabindex=\"-1\" aria-labelledby=\"viewReviewLabel\" aria-hidden=\"true\"></div>

</main>
<!-- **************** MAIN CONTENT END **************** -->

<!-- Back to top -->
<div class=\"back-top\"><i class=\"bi bi-arrow-up-short position-absolute top-50 start-50 translate-middle\"></i></div>

<script>
\tvar baseUrl = \"http://localhost:8000\";
</script>
<!-- Vendors -->
<script src=\"{{ asset('assets/vendor/jquery/jquery-3.6.4.min.js') }}\"></script>

<!-- Bootstrap JS -->
<script src=\"{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}\"></script>

<!-- Vendors -->
<script src=\"{{ asset('assets/vendor/tiny-slider/tiny-slider.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/glightbox/js/glightbox.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/purecounterjs/dist/purecounter_vanilla.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/apexcharts/js/apexcharts.min.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/choices/js/choices.min.js') }}\"></script>
<script src=\"{{ asset('assets/vendor/aos/aos.js') }}\"></script>

<script>
\t\$('.pagination-container nav').addClass('d-flex justify-content-center mb-0')
\t\$('.pagination-container nav ul.pagination li').addClass('mb-0')
\t\$('.pagination-container nav ul.pagination').addClass('pagination-sm pagination-primary-soft d-inline-block d-md-flex rounded mb-0')

\t\$('.delete-item').on('click', (e) => {
\t\treturn confirm('Are you sure you want to purchasse ?');
\t})
</script>

<script>
\tconst showEditModal = (e) => {
\t\tconst url = e.currentTarget.dataset.url;
\t\tconst elt = \$(e.currentTarget)
\t\t\$.ajax({
\t\t\turl: url,
\t\t\tsuccess: (response) => {
\t\t\t\t\$('#editModal').html(response)
\t\t\t\t\$('#editModal').modal('show')
\t\t\t}
\t\t})
\t}

\tdocument.querySelectorAll('.edit_with_modal_btn').forEach(btn => { btn.addEventListener(\"click\", showEditModal) });
\t
</script>

{% block script %}{% endblock %}

<!-- Template Functions -->
<script src=\"{{ asset('assets/js/functions.js') }}\"></script>


</body>

</html>", "admin/base.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\base.html.twig");
    }
}
