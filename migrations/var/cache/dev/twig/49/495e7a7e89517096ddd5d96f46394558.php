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

/* admin/evaluation/show.html.twig */
class __TwigTemplate_46d08599918c68d4191879b3f95f2592 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'pageTitle' => [$this, 'block_pageTitle'],
            'actionBtn' => [$this, 'block_actionBtn'],
            'script' => [$this, 'block_script'],
            'mainContent' => [$this, 'block_mainContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/evaluation/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/evaluation/show.html.twig"));

        $this->parent = $this->loadTemplate("admin/base.html.twig", "admin/evaluation/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_pageTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitle"));

        echo "Evaluations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_actionBtn($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actionBtn"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "actionBtn"));

        // line 6
        echo "    <a class=\"btn btn-primary-soft\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_evaluation_index");
        echo "\">Retour</a>
\t<a class=\"btn btn-success-soft\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_evaluation_new");
        echo "\">Nouvelle Evaluation</a>
    ";
        // line 8
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 8, $this->source); })()), "isPassed", [], "any", false, false, false, 8)) {
            // line 9
            echo "        <a class=\"btn btn-warning-soft\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_evaluation_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
            echo "\">Modifier</a>
        <div class=\"d-inline\">";
            // line 10
            echo twig_include($this->env, $context, "admin/evaluation/_delete_form.html.twig");
            echo "</div>
    ";
        }
        // line 12
        echo "    
\t<a data-bs-toggle=\"modal\" data-bs-target=\"#modal-liste-candidats\" class=\"btn btn-secondary-soft\" href=\"#\">Liste de candidats</a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 16
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 17
        echo "    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 20
    public function block_mainContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "mainContent"));

        // line 21
        echo "
    <table class=\"table\">
        <tbody>
            <tr>
                <th>Titre</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 26, $this->source); })()), "titre", [], "any", false, false, false, 26), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Matière</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 34, $this->source); })()), "matiere", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Classes</th>
                <td>
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 39, $this->source); })()), "classes", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["classe"]) {
            // line 40
            echo "                        <span class=\"badge badge-info bg-success\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["classe"], "name", [], "any", false, false, false, 40), "html", null, true);
            echo "</span>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classe'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </td>
            </tr>
            <tr>
                <th>Début de l'évaluation</th>
                <td>";
        // line 46
        ((twig_get_attribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 46, $this->source); })()), "startAt", [], "any", false, false, false, 46)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 46, $this->source); })()), "startAt", [], "any", false, false, false, 46), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Fin de l'évaluation</th>
                <td>";
        // line 50
        ((twig_get_attribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 50, $this->source); })()), "endAt", [], "any", false, false, false, 50)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 50, $this->source); })()), "endAt", [], "any", false, false, false, 50), "Y-m-d H:i:s"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Durée</th>
                <td>";
        // line 54
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 54, $this->source); })()), "duree", [], "any", false, false, false, 54) . " Heures"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type de questionnaire</th>
                <td>";
        // line 58
        echo ((twig_get_attribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 58, $this->source); })()), "isGeneratedRandomQuestions", [], "any", false, false, false, 58)) ? ("Aléatoire") : ("Epreuve unique"));
        echo "</td>
            </tr>
        </tbody>
    </table>
    ";
        // line 62
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 62, $this->source); })()), "evaluationQuestions", [], "any", false, false, false, 62))) {
            // line 63
            echo "        ";
            echo twig_include($this->env, $context, "admin/evaluation_question/_questions.html.twig", ["evaluation_questions" => twig_get_attribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 63, $this->source); })()), "evaluationQuestions", [], "any", false, false, false, 63)]);
            echo "
    ";
        }
        // line 65
        echo "

    <!-- Popup modal for reviwe START -->
    <div class=\"modal fade\" id=\"modal-liste-candidats\" tabindex=\"-1\" aria-labelledby=\"viewReviewLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-xl\">
            <div class=\"modal-content\">
                <!-- Modal header -->
                <div class=\"modal-header bg-dark\">
                    <h5 class=\"modal-title text-white\" id=\"viewReviewLabel\">Candidats</h5>
                    <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
                </div>
                <!-- Modal body -->
                <div class=\"modal-body g-3\">
                    <div class=\"row g-4\">
                        <ul class=\"nav nav-pills nav-pills-bg-soft justify-content-sm-center mb-4 px-3\" id=\"course-pills-tab\" role=\"tablist\">
                            <!-- Tab item -->
                            <li class=\"nav-item me-2 me-sm-5\">
                                <button class=\"nav-link mb-2 mb-md-0 active\" id=\"candidats-list\" data-bs-toggle=\"pill\" data-bs-target=\"#candidats-list-tab\" type=\"button\" role=\"tab\" aria-controls=\"candidats-list-tab\" aria-selected=\"false\">Liste de candidats</button>
                            </li>
                            <li class=\"nav-item me-2 me-sm-5\">
                                <button class=\"nav-link mb-2 mb-md-0\" id=\"notes\" data-bs-toggle=\"pill\" data-bs-target=\"#notes-tab\" type=\"button\" role=\"tab\" aria-controls=\"notes-tab\" aria-selected=\"false\">Notes</button>
                            </li>
                        </ul>
                        <div class=\"tab-content\" id=\"course-pills-tabContent\">
                            <div class=\"tab-pane fade show active\" id=\"candidats-list-tab\" role=\"tabpanel\" aria-labelledby=\"candidats-list\">
                                <div class=\"row g-4\">
                                    <div class=\"table-responsive border-0\">
                                        <table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
                                            <!-- Table head -->
                                            <thead>
                                                <tr>
                                                    <th scope=\"col\" class=\"border-0 rounded-start\">#</th>
                                                    <th scope=\"col\" class=\"border-0\">Nom & Prénom</th>
                                                    <th scope=\"col\" class=\"border-0\">Date naissance</th>
                                                    <th scope=\"col\" class=\"border-0\">Lieu de naissance</th>
                                                    <th scope=\"col\" class=\"border-0\">Classe</th>
                                                    <th scope=\"col\" class=\"border-0\">Etablissement</th>
                                                    <th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
                                                </tr>
                                            </thead>

                                            <!-- Table body START -->
                                            <tbody>
                                                ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["evaluation"]) || array_key_exists("evaluation", $context) ? $context["evaluation"] : (function () { throw new RuntimeError('Variable "evaluation" does not exist.', 108, $this->source); })()), "eleves", [], "any", false, false, false, 108));
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
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 109
            echo "                                                    <tr>
                                                        <td>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 110), "html", null, true);
            echo "</td>
                                                        <td>
                                                            <div class=\"d-flex align-items-center position-relative\">
                                                                <!-- Image -->
                                                                <div class=\"w-60px\">
                                                                    <img src=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "utilisateur", [], "any", false, false, false, 115), "personne", [], "any", false, false, false, 115), "avatarPath", [], "any", false, false, false, 115)), "html", null, true);
            echo "\" class=\"rounded-circle\" alt=\"\">
                                                                </div>
                                                                <h6 class=\"table-responsive-title mb-0 ms-2\">\t
                                                                    <a href=\"\" class=\"stretched-link\">";
            // line 118
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "utilisateur", [], "any", false, false, false, 118), "personne", [], "any", false, false, false, 118), "nomComplet", [], "any", false, false, false, 118)), "truncate", [40, "."], "method", false, false, false, 118), "html", null, true);
            echo "</a>
                                                                </h6>
                                                            </div>
                                                        </td>
                                                        <td>";
            // line 122
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "utilisateur", [], "any", false, false, false, 122), "personne", [], "any", false, false, false, 122), "bornAt", [], "any", false, false, false, 122), "d/m/Y"), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 123
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "utilisateur", [], "any", false, false, false, 123), "personne", [], "any", false, false, false, 123), "lieuNaissance", [], "any", false, false, false, 123), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "classe", [], "any", false, false, false, 124), "name", [], "any", false, false, false, 124), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 125
            (( !(twig_get_attribute($this->env, $this->source, $context["eleve"], "etablissement", [], "any", false, false, false, 125) === null)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["eleve"], "etablissement", [], "any", false, false, false, 125), "name", [], "any", false, false, false, 125), "html", null, true))) : (print ("--------------")));
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
            // line 129
            echo "                                                    <tr>
                                                        <td colspan=\"7\">Aucun inscris pour le moment</td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>  
                            </div>
                            <div class=\"tab-pane fade show\" id=\"notes-tab\" role=\"tabpanel\" aria-labelledby=\"notes\">
                                <div class=\"row g-4\">
                                    <div class=\"table-responsive border-0\">
                                        <table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
                                            <!-- Table head -->
                                            <thead>
                                                <tr>
                                                    <th scope=\"col\" class=\"border-0 rounded-en\">Nom & Prénom</th>
                                                    <th scope=\"col\" class=\"border-0\">Date naissance</th>
                                                    <th scope=\"col\" class=\"border-0\">Classe</th>
                                                    <th scope=\"col\" class=\"border-0\">Etablissement</th>
                                                    <th scope=\"col\" class=\"border-0d\">Note Obtenue / 20</th>
                                                    <th scope=\"col\" class=\"border-0 rounded-end\">Rang</th>
                                                </tr>
                                            </thead>

                                            <!-- Table body START -->
                                            <tbody>
                                                ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resultats"]) || array_key_exists("resultats", $context) ? $context["resultats"] : (function () { throw new RuntimeError('Variable "resultats" does not exist.', 156, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 157
            echo "                                                    <tr>
                                                        <td>
                                                            <div class=\"d-flex align-items-center position-relative\">
                                                                <!-- Image -->
                                                                <div class=\"w-60px\">
                                                                    <img src=\"";
            // line 162
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "eleve", [], "any", false, false, false, 162), "utilisateur", [], "any", false, false, false, 162), "personne", [], "any", false, false, false, 162), "avatarPath", [], "any", false, false, false, 162)), "html", null, true);
            echo "\" class=\"rounded-circle\" alt=\"\">
                                                                </div>
                                                                <h6 class=\"table-responsive-title mb-0 ms-2\">\t
                                                                    <a href=\"\" class=\"stretched-link\">";
            // line 165
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "eleve", [], "any", false, false, false, 165), "utilisateur", [], "any", false, false, false, 165), "personne", [], "any", false, false, false, 165), "nomComplet", [], "any", false, false, false, 165)), "truncate", [40, "."], "method", false, false, false, 165), "html", null, true);
            echo "</a>
                                                                </h6>
                                                            </div>
                                                        </td>
                                                        <td>";
            // line 169
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "eleve", [], "any", false, false, false, 169), "utilisateur", [], "any", false, false, false, 169), "personne", [], "any", false, false, false, 169), "bornAt", [], "any", false, false, false, 169), "d/m/Y"), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 170
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "eleve", [], "any", false, false, false, 170), "classe", [], "any", false, false, false, 170), "name", [], "any", false, false, false, 170), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 171
            (( !(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "eleve", [], "any", false, false, false, 171), "etablissement", [], "any", false, false, false, 171) === null)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "eleve", [], "any", false, false, false, 171), "etablissement", [], "any", false, false, false, 171), "name", [], "any", false, false, false, 171), "html", null, true))) : (print ("--------------")));
            echo "</td>
                                                        <td>";
            // line 172
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "noteObtenue", [], "any", false, false, false, 172), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 173
            (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 173) === 1)) ? (print ("1er(e)")) : (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 173) . "ème"), "html", null, true))));
            echo "</td>
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
            // line 176
            echo "                                                    <tr>
                                                        <td colspan=\"6\">En attente...</td>
                                                    </tr>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 180
        echo "                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Popup modal for reviwe END -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/evaluation/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  467 => 180,  458 => 176,  442 => 173,  438 => 172,  434 => 171,  430 => 170,  426 => 169,  419 => 165,  413 => 162,  406 => 157,  388 => 156,  363 => 133,  354 => 129,  337 => 125,  333 => 124,  329 => 123,  325 => 122,  318 => 118,  312 => 115,  304 => 110,  301 => 109,  283 => 108,  238 => 65,  232 => 63,  230 => 62,  223 => 58,  216 => 54,  209 => 50,  202 => 46,  196 => 42,  187 => 40,  183 => 39,  175 => 34,  168 => 30,  161 => 26,  154 => 21,  144 => 20,  133 => 17,  123 => 16,  111 => 12,  106 => 10,  101 => 9,  99 => 8,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin/base.html.twig' %}

{% block pageTitle %}Evaluations{% endblock %}

{% block actionBtn %}
    <a class=\"btn btn-primary-soft\" href=\"{{ path('app_admin_evaluation_index') }}\">Retour</a>
\t<a class=\"btn btn-success-soft\" href=\"{{ path('app_admin_evaluation_new') }}\">Nouvelle Evaluation</a>
    {% if not evaluation.isPassed %}
        <a class=\"btn btn-warning-soft\" href=\"{{ path('app_admin_evaluation_edit', {'id': evaluation.id}) }}\">Modifier</a>
        <div class=\"d-inline\">{{ include('admin/evaluation/_delete_form.html.twig') }}</div>
    {% endif %}
    
\t<a data-bs-toggle=\"modal\" data-bs-target=\"#modal-liste-candidats\" class=\"btn btn-secondary-soft\" href=\"#\">Liste de candidats</a>
{% endblock %}

{% block script %}
    
{% endblock %}

{% block mainContent %}

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Titre</th>
                <td>{{ evaluation.titre }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ evaluation.description }}</td>
            </tr>
            <tr>
                <th>Matière</th>
                <td>{{ evaluation.matiere.name }}</td>
            </tr>
            <tr>
                <th>Classes</th>
                <td>
                    {% for classe in evaluation.classes %}
                        <span class=\"badge badge-info bg-success\">{{ classe.name }}</span>
                    {% endfor %}
                </td>
            </tr>
            <tr>
                <th>Début de l'évaluation</th>
                <td>{{ evaluation.startAt ? evaluation.startAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Fin de l'évaluation</th>
                <td>{{ evaluation.endAt ? evaluation.endAt|date('Y-m-d H:i:s') : '' }}</td>
            </tr>
            <tr>
                <th>Durée</th>
                <td>{{ evaluation.duree ~ ' Heures' }}</td>
            </tr>
            <tr>
                <th>Type de questionnaire</th>
                <td>{{ evaluation.isGeneratedRandomQuestions ? 'Aléatoire' : 'Epreuve unique' }}</td>
            </tr>
        </tbody>
    </table>
    {% if evaluation.evaluationQuestions is not empty %}
        {{ include(\"admin/evaluation_question/_questions.html.twig\", {'evaluation_questions': evaluation.evaluationQuestions}) }}
    {% endif %}


    <!-- Popup modal for reviwe START -->
    <div class=\"modal fade\" id=\"modal-liste-candidats\" tabindex=\"-1\" aria-labelledby=\"viewReviewLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-xl\">
            <div class=\"modal-content\">
                <!-- Modal header -->
                <div class=\"modal-header bg-dark\">
                    <h5 class=\"modal-title text-white\" id=\"viewReviewLabel\">Candidats</h5>
                    <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
                </div>
                <!-- Modal body -->
                <div class=\"modal-body g-3\">
                    <div class=\"row g-4\">
                        <ul class=\"nav nav-pills nav-pills-bg-soft justify-content-sm-center mb-4 px-3\" id=\"course-pills-tab\" role=\"tablist\">
                            <!-- Tab item -->
                            <li class=\"nav-item me-2 me-sm-5\">
                                <button class=\"nav-link mb-2 mb-md-0 active\" id=\"candidats-list\" data-bs-toggle=\"pill\" data-bs-target=\"#candidats-list-tab\" type=\"button\" role=\"tab\" aria-controls=\"candidats-list-tab\" aria-selected=\"false\">Liste de candidats</button>
                            </li>
                            <li class=\"nav-item me-2 me-sm-5\">
                                <button class=\"nav-link mb-2 mb-md-0\" id=\"notes\" data-bs-toggle=\"pill\" data-bs-target=\"#notes-tab\" type=\"button\" role=\"tab\" aria-controls=\"notes-tab\" aria-selected=\"false\">Notes</button>
                            </li>
                        </ul>
                        <div class=\"tab-content\" id=\"course-pills-tabContent\">
                            <div class=\"tab-pane fade show active\" id=\"candidats-list-tab\" role=\"tabpanel\" aria-labelledby=\"candidats-list\">
                                <div class=\"row g-4\">
                                    <div class=\"table-responsive border-0\">
                                        <table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
                                            <!-- Table head -->
                                            <thead>
                                                <tr>
                                                    <th scope=\"col\" class=\"border-0 rounded-start\">#</th>
                                                    <th scope=\"col\" class=\"border-0\">Nom & Prénom</th>
                                                    <th scope=\"col\" class=\"border-0\">Date naissance</th>
                                                    <th scope=\"col\" class=\"border-0\">Lieu de naissance</th>
                                                    <th scope=\"col\" class=\"border-0\">Classe</th>
                                                    <th scope=\"col\" class=\"border-0\">Etablissement</th>
                                                    <th scope=\"col\" class=\"border-0 rounded-end\">Action</th>
                                                </tr>
                                            </thead>

                                            <!-- Table body START -->
                                            <tbody>
                                                {% for eleve in evaluation.eleves %}
                                                    <tr>
                                                        <td>{{ loop.index }}</td>
                                                        <td>
                                                            <div class=\"d-flex align-items-center position-relative\">
                                                                <!-- Image -->
                                                                <div class=\"w-60px\">
                                                                    <img src=\"{{ asset(eleve.utilisateur.personne.avatarPath) }}\" class=\"rounded-circle\" alt=\"\">
                                                                </div>
                                                                <h6 class=\"table-responsive-title mb-0 ms-2\">\t
                                                                    <a href=\"\" class=\"stretched-link\">{{ eleve.utilisateur.personne.nomComplet|u.truncate(40, '.') }}</a>
                                                                </h6>
                                                            </div>
                                                        </td>
                                                        <td>{{ eleve.utilisateur.personne.bornAt|date(\"d/m/Y\") }}</td>
                                                        <td>{{ eleve.utilisateur.personne.lieuNaissance }}</td>
                                                        <td>{{ eleve.classe.name }}</td>
                                                        <td>{{ eleve.etablissement is not same as null ? eleve.etablissement.name : '--------------' }}</td>
                                                        <td></td>
                                                    </tr>
                                                {% else %}
                                                    <tr>
                                                        <td colspan=\"7\">Aucun inscris pour le moment</td>
                                                    </tr>
                                                {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>  
                            </div>
                            <div class=\"tab-pane fade show\" id=\"notes-tab\" role=\"tabpanel\" aria-labelledby=\"notes\">
                                <div class=\"row g-4\">
                                    <div class=\"table-responsive border-0\">
                                        <table class=\"table table-dark-gray align-middle p-4 mb-0 table-hover\">
                                            <!-- Table head -->
                                            <thead>
                                                <tr>
                                                    <th scope=\"col\" class=\"border-0 rounded-en\">Nom & Prénom</th>
                                                    <th scope=\"col\" class=\"border-0\">Date naissance</th>
                                                    <th scope=\"col\" class=\"border-0\">Classe</th>
                                                    <th scope=\"col\" class=\"border-0\">Etablissement</th>
                                                    <th scope=\"col\" class=\"border-0d\">Note Obtenue / 20</th>
                                                    <th scope=\"col\" class=\"border-0 rounded-end\">Rang</th>
                                                </tr>
                                            </thead>

                                            <!-- Table body START -->
                                            <tbody>
                                                {% for item in resultats %}
                                                    <tr>
                                                        <td>
                                                            <div class=\"d-flex align-items-center position-relative\">
                                                                <!-- Image -->
                                                                <div class=\"w-60px\">
                                                                    <img src=\"{{ asset(item.eleve.utilisateur.personne.avatarPath) }}\" class=\"rounded-circle\" alt=\"\">
                                                                </div>
                                                                <h6 class=\"table-responsive-title mb-0 ms-2\">\t
                                                                    <a href=\"\" class=\"stretched-link\">{{ item.eleve.utilisateur.personne.nomComplet|u.truncate(40, '.') }}</a>
                                                                </h6>
                                                            </div>
                                                        </td>
                                                        <td>{{ item.eleve.utilisateur.personne.bornAt|date(\"d/m/Y\") }}</td>
                                                        <td>{{ item.eleve.classe.name }}</td>
                                                        <td>{{ item.eleve.etablissement is not same as null ? item.eleve.etablissement.name : '--------------' }}</td>
                                                        <td>{{ item.noteObtenue }}</td>
                                                        <td>{{ loop.index is same as 1 ? '1er(e)' : loop.index ~ 'ème' }}</td>
                                                    </tr>
                                                {% else %}
                                                    <tr>
                                                        <td colspan=\"6\">En attente...</td>
                                                    </tr>
                                                {% endfor %}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Popup modal for reviwe END -->

{% endblock %}
", "admin/evaluation/show.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\admin\\evaluation\\show.html.twig");
    }
}
