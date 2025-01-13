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

/* instructor/courses/edit.html.twig */
class __TwigTemplate_0c65f463bf7ef1d67947e5a333d3b80f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'subTitle' => [$this, 'block_subTitle'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'script' => [$this, 'block_script'],
            'profileBlock' => [$this, 'block_profileBlock'],
            'instructorSidebar' => [$this, 'block_instructorSidebar'],
            'instructorBanner' => [$this, 'block_instructorBanner'],
            'pageContent' => [$this, 'block_pageContent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "instructor/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/courses/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/courses/edit.html.twig"));

        // line 471
        $context["mainContentClass"] = "col-md-12";
        // line 1
        $this->parent = $this->loadTemplate("instructor/base.html.twig", "instructor/courses/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_subTitle($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subTitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "subTitle"));

        // line 4
        echo "\t- Courses
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 8
        echo "\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/css/glightbox.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/css/quill.snow.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/stepper/css/bs-stepper.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 14
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 15
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/js/glightbox.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/js/quill.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/stepper/js/bs-stepper.min.js"), "html", null, true);
        echo "\"></script>

\t<script>
\t\t\$(function (){ ";
        // line 21
        if ((isset($context["isEditionMode"]) || array_key_exists("isEditionMode", $context) ? $context["isEditionMode"] : (function () { throw new RuntimeError('Variable "isEditionMode" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "\$('#cours_media_imageFileUpload').attr('required', false)";
        }
        echo "let faq_question = document.getElementById('faq_question');
let faq_answer = document.getElementById('faq_answer')

const removeLesson = (e) => {
const chapIndex = e.currentTarget.dataset.chapIndex;
const lessonIndex = e.currentTarget.dataset.index;
const container = \$('#cours_chapitres_0_lessons_' + lessonIndex + '_');
const elt = \$(e.currentTarget)
if (confirm(\"Are you sure you want to delete this lesson?\")) {
if (e.currentTarget.dataset.id == '') {
container.parent().remove()
elt.parent().parent().parent().remove();
} else {
\$.ajax({
url: e.currentTarget.dataset.deleteUrl,
success: function (response) {
if (response.hasDone) {
container.parent().remove()
elt.parent().parent().parent().remove();
} else {
alert(\"Action impossible\")
}
},
error: function () {
alert(\"Action impossible\")
}
})
}
}

}

const showEditChapModal = (e) => {
const chapIndex = e.currentTarget.dataset.chapiter;
document.getElementById('chapiter_title').value = document.getElementById('cours_chapitres_' + chapIndex + '_title').value
document.getElementById('description_chapitre').value = document.getElementById('cours_chapitres_' + chapIndex + '_description').value
document.getElementById('chapiter_number').value = document.getElementById('cours_chapitres_' + chapIndex + '_numero').value
\$('#updateChap').prev().fadeOut();
\$('#updateChap').fadeIn();
\$('#updateChap').attr('data-chap-index', chapIndex);
}

const updateChap = (e) => {
const chapIndex = e.currentTarget.dataset.chapIndex;
document.getElementById('cours_chapitres_' + chapIndex + '_title').value = document.getElementById('chapiter_title').value
document.getElementById('cours_chapitres_' + chapIndex + '_description').value = document.getElementById('description_chapitre').value
document.getElementById('cours_chapitres_' + chapIndex + '_numero').value = document.getElementById('chapiter_number').value

\$('#heading-' + chapIndex + ' button').text('Chapter ' + document.getElementById('chapiter_number').value + ' : ' + document.getElementById('chapiter_title').value)
\$('#collapse-' + chapIndex + ' .description').text(document.getElementById('description_chapitre').value)

\$('#addLecture').modal('hide');
\$('#updateChap').prev().fadeIn();
\$('#updateChap').fadeOut();
document.getElementById('chapiter_title').value = ''
document.getElementById('description_chapitre').value = ''
document.getElementById('chapiter_number').value = ''

}

const showEditLessonModal = (e) => {
e.preventDefault()
\$('#uploadFilesDiv').removeClass('d-none').addClass('d-block')
const chapIndex = e.currentTarget.dataset.chapIndex;
const lessonIndex = e.currentTarget.dataset.index;
const lessonId = e.currentTarget.dataset.id;

\$('#lessonForm').attr('action', \"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lesson_edit", ["id" => "__ID__"]);
        echo "\".replace('__ID__', lessonId));

const lesson_form_title = document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_title').value;
const lesson_form_numero = document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_numero').value;
const lesson_form_content = document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_content').value;
const lesson_form_videoLink = document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_videoLink').value;
const isPremium = document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_isPremium').value;
\$(\"#addLessonVideoFileLabel\").attr('for', 'cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_videoFile')
\$(\"#addLessonPosterFileLabel\").attr('for', 'cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_posterFile')

document.getElementById('lessonId').value = lessonId;
document.getElementById('lesson_form_title').value = lesson_form_title;
document.getElementById('lesson_form_numero').value = lesson_form_numero;
document.getElementById('lesson_form_videoLink').value = lesson_form_videoLink;
\$('#cke_lesson_form_content iframe').contents().find(\"body\").html(lesson_form_content);
document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_isPremium').value = isPremium;

\$('#editLessonBtn').attr('data-index', lessonIndex);
\$('#editLessonBtn').attr('data-chapiter', chapIndex);
\$('#editLessonBtn').attr('data-title-reference', e.currentTarget.dataset.titleReference)
\$('#editLessonBtn').fadeIn();
\$('#saveLessonBtn').fadeOut()

\$('#addTopic').modal('show')
}

const editLesson = (e) => {
e.preventDefault();
const chapIndex = e.currentTarget.dataset.chapiter;
const lessonIndex = e.currentTarget.dataset.index;
const lesson_form_title = document.getElementById('lesson_form_title').value;
const lesson_form_videoLink = document.getElementById('lesson_form_videoLink').value;
const lesson_form_content = \$('#cke_lesson_form_content iframe').contents().find(\"body\").html();

const isPremium = \$('#isPremium1').is(':checked') ? 0 : 1;
const lesson_form_numero = document.getElementById('lesson_form_numero').value;
document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_title').value = lesson_form_title;
document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_numero').value = lesson_form_numero;
document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_content').value = lesson_form_content;
document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_videoLink').value = lesson_form_videoLink;
document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_isPremium').value = isPremium;


\$('#' + e.currentTarget.dataset.titleReference).text(lesson_form_title)

document.getElementById('lesson_form_title').value = '';
document.getElementById('lesson_form_numero').value = '';
document.getElementById('lesson_form_videoLink').value = ''
\$('#cke_lesson_form_content iframe').contents().find(\"body\").html('');
\$('#isPremium1').attr('checked', true);
\$('#isPremium1').attr('checked', false);

\$('#addTopic').modal('hide')
\$('#editLessonBtn').fadeOut();
\$('#saveLessonBtn').fadeIn()
}

const addLesson = (e) => {
const lessonCollectionHolder = document.getElementById(e.currentTarget.dataset.prototypeContainer)
if (lessonCollectionHolder.dataset.index == undefined) {
lessonCollectionHolder.setAttribute('data-index', e.currentTarget.dataset.index);
}

const chapIndex = e.currentTarget.dataset.chapiter;
const lessonIndex = lessonCollectionHolder.dataset.index;

const lesson = document.createElement('div');
lesson.style = 'display: none';
lesson.innerHTML = lessonCollectionHolder.dataset.prototype.replace(/__name__/g, lessonIndex);

lessonCollectionHolder.appendChild(lesson);

const lesson_form_title = document.getElementById('lesson_form_title').value;
const lesson_form_numero = document.getElementById('lesson_form_numero').value;
const lesson_form_videoLink = document.getElementById('lesson_form_videoLink').value
const lesson_form_content = \$('#cke_lesson_form_content iframe').contents().find(\"body\").html();

const isPremium = \$('#isPremium1').is(':checked') ? 0 : 1;

document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_title').value = lesson_form_title;
document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_numero').value = lesson_form_numero;
document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_content').value = lesson_form_content;
document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_videoLink').value = lesson_form_videoLink;
document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_isPremium').value = isPremium;

\$.ajax({
url: '";
        // line 175
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instructor_add_lesson");
        echo "',
type: 'POST',
data: {
'title': lesson_form_title,
'numero': lesson_form_numero,
'chapIndex': chapIndex,
'videoLink': lesson_form_videoLink,
'description': lesson_form_content,
'index': lessonIndex
},
success: function (response) {
\$('#lessons-container-' + chapIndex).append('<div>' + response + '</div>');
document.querySelectorAll('.delete-lesson-btn').forEach(btn => {
btn.addEventListener(\"click\", removeLesson)
});
document.querySelectorAll('.edit-lesson-btn').forEach(btn => {
btn.addEventListener(\"click\", showEditLessonModal)
});
}
})

lessonCollectionHolder.dataset.index ++;

\$('#addTopic').modal('hide');

document.getElementById('lesson_form_title').value = '';
document.getElementById('lesson_form_numero').value = '';
document.getElementById('lesson_form_videoLink').value = ''
\$('#cke_lesson_form_content iframe').contents().find(\"body\").html('');
\$('#isPremium1').attr('checked', true);
\$('#isPremium1').attr('checked', false);
}

const addChapiter = (e) => {
const collectionHolder = document.querySelector('.' + e.currentTarget.dataset.collectionHolderClass);

const item = document.createElement('div');
item.style = 'display: none'
// item.style = 'display: none';
item.innerHTML = collectionHolder.dataset.prototype.replace(/__name__/g, collectionHolder.dataset.index);

const chapiter_title = document.getElementById('chapiter_title').value;
const chapiter_description = document.getElementById('description_chapitre').value;
const chapterNumber = document.getElementById('chapiter_number').value

collectionHolder.appendChild(item);
var index = collectionHolder.dataset.index;

document.getElementById('cours_chapitres_' + index + '_title').value = chapiter_title
document.getElementById('cours_chapitres_' + index + '_description').value = chapiter_description
document.getElementById('cours_chapitres_' + index + '_numero').value = chapterNumber

const lessonHolder = document.getElementById('cours_chapitres_' + index + '_lessons')
\$('#cours_chapitres_' + index + '_lessons').attr('data-prototype', lessonHolder.dataset.prototype.replaceAll('[lessons][' + index + ']', '[lessons][__name__]').replaceAll('_lessons_' + index + '_', '_lessons___name___').replace('lessons_' + index, 'lessons___name___'))

collectionHolder.dataset.index ++;

\$.ajax({
url: '";
        // line 233
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instructor_add_chap");
        echo "',
type: 'POST',
data: {
'title': chapiter_title,
'description': chapiter_description,
'index': index,
'numero': chapterNumber
},
success: function (response) {
\$('#accordionExample2').append(response)
document.querySelectorAll('.add-lesson-btn').forEach(btn => {
btn.addEventListener(\"click\", updateSaveBtnAtr)
});
document.querySelectorAll('.edit-chapitre-btn').forEach(btn => {
btn.addEventListener(\"click\", showEditChapModal)
});

document.querySelectorAll('.delete-chapitre-btn').forEach(btn => {
btn.addEventListener('click', (e) => {
document.getElementById(e.currentTarget.dataset.container).remove();
\$(e.currentTarget).parent().parent().parent().remove()
return false;
})
})
},
error: function () {
alert('Error')
}
})

document.getElementById('chapiter_title').value = '';
document.getElementById('chapiter_number').value = '';
document.getElementById('description_chapitre').value = '';

\$('#addLecture').modal('hide');

};

const updateSaveBtnAtr = (e) => {
\$('#uploadFilesDiv').addClass('d-none').removeClass('d-block')
const btn = document.getElementById('saveLessonBtn')
btn.setAttribute('data-index', e.currentTarget.dataset.index);
btn.setAttribute('data-chapiter', e.currentTarget.dataset.chapiter);
btn.setAttribute('data-prototype-container', e.currentTarget.dataset.prototypeContainer)
\$('#editLessonBtn').fadeOut();
\$('#saveLessonBtn').fadeIn();
document.getElementById('lesson_form_title').value = '';
document.getElementById('lesson_form_numero').value = '';
document.getElementById('lesson_form_videoLink').value = ''
\$('#cke_lesson_form_content iframe').contents().find(\"body\").html('');
\$('#isPremium1').attr('checked', true);
\$('#isPremium1').attr('checked', false);
}

const showaddFAQForm = (e) => {
\$('.edit_faq_btn').fadeOut();
\$('.add_faq_btn').fadeIn();
faq_question.value = '';
faq_answer.value = '';
}

const addFAQ = (e) => {
const collectionHolder = document.getElementById(e.currentTarget.dataset.collectionHolderId);

const item = document.createElement('div');
item.style = 'display: none'
item.innerHTML = collectionHolder.dataset.prototype.replace(/__name__/g, collectionHolder.dataset.index);
collectionHolder.appendChild(item);

const index = collectionHolder.dataset.index
collectionHolder.dataset.index ++;

document.getElementById('cours_fAQs_' + index + '_question').value = faq_question.value;
document.getElementById('cours_fAQs_' + index + '_answer').value = faq_answer.value;

\$.ajax({
url: '";
        // line 309
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instructor_add_faq");
        echo "',
type: \"POST\",
data: {
'index': index,
'question': faq_question.value,
'answer': faq_answer.value
},
success: function (response) {
\$('#faqs').append(response);
document.querySelectorAll('.delete-faq').forEach(btn => {
btn.addEventListener(\"click\", deleteFAQ)
});
document.querySelectorAll('.edit-faq').forEach(btn => {
btn.addEventListener(\"click\", showEditFAQForm)
});

}
})

faq_answer.value = ''
faq_question.value = ''
\$('#addQuestion').modal('hide');
}

const showEditFAQForm = (e) => {
\$('.edit_faq_btn').fadeIn();
\$('.add_faq_btn').fadeOut();

faq_question.value = document.getElementById('cours_fAQs_' + e.currentTarget.dataset.index + '_question').value
faq_answer.value = document.getElementById('cours_fAQs_' + e.currentTarget.dataset.index + '_answer').value
\$('#edit_faq_btn').attr('data-index', e.currentTarget.dataset.index)
}

const deleteFAQ = (e) => {
const container = \$('#cours_fAQs_' + e.currentTarget.dataset.index)
const elt = \$('#faq-' + e.currentTarget.dataset.index)
if (e.currentTarget.dataset.id == '') {
container.parent().remove()
elt.remove();
} else {
\$.ajax({
url: e.currentTarget.dataset.deleteUrl,
success: function (response) {
if (response.hasDone) {
container.parent().remove()
elt.remove();
} else {
alert(\"Action impossible\")
}
},
error: function () {
alert(\"Action impossible\")
}
})
}
}

const editFAQ = (e) => {
const index = e.currentTarget.dataset.index
document.getElementById('cours_fAQs_' + index + '_question').value = faq_question.value;
document.getElementById('cours_fAQs_' + index + '_answer').value = faq_answer.value;

\$('#faq-' + index + ' .question').text(faq_question.value)
\$('#faq-' + index + ' .answer').text(faq_answer.value)

faq_answer.value = ''
faq_question.value = ''
\$('#addQuestion').modal('hide');
}

document.querySelectorAll('.add_chapiter_btn').forEach(btn => {
btn.addEventListener(\"click\", addChapiter)
});

document.querySelectorAll('.edit_chapiter_btn').forEach(btn => {
btn.addEventListener(\"click\", updateChap)
});

document.querySelectorAll('.add_lesson_btn').forEach(btn => {
btn.addEventListener(\"click\", addLesson)
});

document.querySelectorAll('.edit_lesson_btn').forEach(btn => {
btn.addEventListener(\"click\", editLesson)
});

document.querySelectorAll('.add_faq_btn').forEach(btn => {
btn.addEventListener(\"click\", addFAQ)
});

document.querySelectorAll('.edit_faq_btn').forEach(btn => {
btn.addEventListener(\"click\", editFAQ)
});

document.querySelectorAll('.new-chapitre').forEach(btn => {
btn.addEventListener('click', (e) => {
\$('#updateChap').prev().fadeIn();
\$('#updateChap').fadeOut();
\$('#chapiter_title').val('');
\$('#description_chapitre').val('')
})
})

document.querySelectorAll('.delete-faq').forEach(btn => {
btn.addEventListener(\"click\", deleteFAQ)
});
document.querySelectorAll('.edit-faq').forEach(btn => {
btn.addEventListener(\"click\", showEditFAQForm)
});

document.querySelectorAll('.add-lesson-btn').forEach(btn => {
btn.addEventListener(\"click\", updateSaveBtnAtr)
});
document.querySelectorAll('.edit-chapitre-btn').forEach(btn => {
btn.addEventListener(\"click\", showEditChapModal)
});


document.querySelectorAll('.delete-chapitre-btn').forEach(btn => {
btn.addEventListener('click', (e) => {
const elt = \$(e.currentTarget);
const container = document.getElementById(e.currentTarget.dataset.container)
if (confirm(\"Are sure you want to delete this chapter?\")) {
if (e.currentTarget.dataset.id == '') {
container.remove();
elt.parent().parent().parent().remove()
} else {
\$.ajax({
url: e.currentTarget.dataset.deleteUrl,
success: function (response) {
if (response.hasDone) {
container.remove();
elt.parent().parent().parent().remove()
} else {
alert(\"Action impossible\")
}
},
error: function () {
alert(\"Action impossible\")
}
})
}
}

return false;
})
})

document.querySelectorAll('.delete-lesson-btn').forEach(btn => {
btn.addEventListener(\"click\", removeLesson)
});
document.querySelectorAll('.edit-lesson-btn').forEach(btn => {
btn.addEventListener(\"click\", showEditLessonModal)
});
})
\t</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 467
    public function block_profileBlock($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "profileBlock"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "profileBlock"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 469
    public function block_instructorSidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "instructorSidebar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "instructorSidebar"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 473
    public function block_instructorBanner($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "instructorBanner"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "instructorBanner"));

        // line 474
        echo "
\t<!-- =======================
\t    Page Banner START -->
\t<section
\t\tclass=\"py-0 bg-blue h-100px align-items-center d-flex h-200px rounded-0\" style=\"background:url(";
        // line 478
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/pattern/04.png"), "html", null, true);
        echo ") no-repeat center center; background-size:cover;\">
\t\t<!-- Main banner background image -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div
\t\t\t\t\tclass=\"col-12 text-center\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<h1 class=\"text-white\">";
        // line 485
        echo ((array_key_exists("pageTitle", $context)) ? (_twig_default_filter((isset($context["pageTitle"]) || array_key_exists("pageTitle", $context) ? $context["pageTitle"] : (function () { throw new RuntimeError('Variable "pageTitle" does not exist.', 485, $this->source); })()), "Submit a new Course")) : ("Submit a new Course"));
        echo "</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- =======================
\t    Page Banner END -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 495
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        // line 496
        echo "
\t<!-- =======================
\t    Steps START -->
\t<section>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div
\t\t\t\t\tclass=\"col-md-8 mx-auto text-center\">
\t\t\t\t\t<!-- Content -->
\t\t\t\t\t<p class=\"text-center\">Use this interface to add a new Course to the portal. Once you are done adding the item it will be reviewed for quality. If approved, your course will appear for sale and you will be informed by email that your course has been accepted.</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"card bg-transparent border rounded-3 mb-5\">
\t\t\t\t<div
\t\t\t\t\tid=\"stepper\" class=\"bs-stepper stepper-outline\">
\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"card-header bg-light border-bottom px-lg-5\">
\t\t\t\t\t\t<!-- Step Buttons START -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"bs-stepper-header\" role=\"tablist\">
\t\t\t\t\t\t\t<!-- Step 1 -->
\t\t\t\t\t\t\t<div class=\"step\" data-target=\"#step-1\">
\t\t\t\t\t\t\t\t<div class=\"d-grid text-center align-items-center\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-link step-trigger mb-0\" role=\"tab\" id=\"steppertrigger1\" aria-controls=\"step-1\">
\t\t\t\t\t\t\t\t\t\t<span class=\"bs-stepper-circle\">1</span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<h6 class=\"bs-stepper-label d-none d-md-block\">Course details</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"line\"></div>

\t\t\t\t\t\t\t<!-- Step 2 -->
\t\t\t\t\t\t\t<div class=\"step\" data-target=\"#step-2\">
\t\t\t\t\t\t\t\t<div class=\"d-grid text-center align-items-center\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-link step-trigger mb-0\" role=\"tab\" id=\"steppertrigger2\" aria-controls=\"step-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"bs-stepper-circle\">2</span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<h6 class=\"bs-stepper-label d-none d-md-block\">Course media</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"line\"></div>

\t\t\t\t\t\t\t<!-- Step 3 -->
\t\t\t\t\t\t\t<div class=\"step\" data-target=\"#step-3\">
\t\t\t\t\t\t\t\t<div class=\"d-grid text-center align-items-center\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-link step-trigger mb-0\" role=\"tab\" id=\"steppertrigger3\" aria-controls=\"step-3\">
\t\t\t\t\t\t\t\t\t\t<span class=\"bs-stepper-circle\">3</span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<h6 class=\"bs-stepper-label d-none d-md-block\">Curriculum</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"line\"></div>

\t\t\t\t\t\t\t<!-- Step 4 -->
\t\t\t\t\t\t\t<div class=\"step\" data-target=\"#step-4\">
\t\t\t\t\t\t\t\t<div class=\"d-grid text-center align-items-center\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-link step-trigger mb-0\" role=\"tab\" id=\"steppertrigger4\" aria-controls=\"step-4\">
\t\t\t\t\t\t\t\t\t\t<span class=\"bs-stepper-circle\">4</span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<h6 class=\"bs-stepper-label d-none d-md-block\">Additional information</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Step Buttons END -->
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Card body START -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"card-body\">
\t\t\t\t\t\t<!-- Step content START -->
\t\t\t\t\t\t<div class=\"bs-stepper-content\">
\t\t\t\t\t\t\t";
        // line 569
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 569, $this->source); })()), 'form_start');
        echo "

\t\t\t\t\t\t\t<!-- Step 1 content START -->
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tid=\"step-1\" role=\"tabpanel\" class=\"content fade\" aria-labelledby=\"steppertrigger1\">
\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t<h4>Course details</h4>

\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<!-- Divider -->

\t\t\t\t\t\t\t\t<!-- Basic information START -->
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"row g-4\"> <!-- Course title -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t";
        // line 584
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 584, $this->source); })()), "intitule", [], "any", false, false, false, 584), 'row');
        echo "
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Short description -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t";
        // line 589
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 589, $this->source); })()), "description", [], "any", false, false, false, 589), 'row');
        echo "
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Course category -->
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t";
        // line 594
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 594, $this->source); })()), "categorie", [], "any", false, false, false, 594), 'row');
        echo "
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Course level -->
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t";
        // line 599
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 599, $this->source); })()), "niveauDifficulte", [], "any", false, false, false, 599), 'row');
        echo "
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Course skill level -->
\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t\t";
        // line 604
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 604, $this->source); })()), "skillLevel", [], "any", false, false, false, 604), 'row');
        echo "
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Course classes -->
\t\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t\t";
        // line 609
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 609, $this->source); })()), "classe", [], "any", false, false, false, 609), 'row');
        echo "
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Language -->
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t";
        // line 614
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 614, $this->source); })()), "language", [], "any", false, false, false, 614), 'row');
        echo "
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Switch -->
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 d-flex align-items-center justify-content-start mt-5\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-switch form-check-md\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 620
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 620, $this->source); })()), "isFree", [], "any", false, false, false, 620), 'row');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Course price -->
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t";
        // line 626
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 626, $this->source); })()), "montantAbonnement", [], "any", false, false, false, 626), 'row');
        echo "
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Course time -->
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t";
        // line 631
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 631, $this->source); })()), "dureeApprentissage", [], "any", false, false, false, 631), 'row');
        echo "
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Total lecture -->
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t";
        // line 636
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 636, $this->source); })()), "numberOfLessons", [], "any", false, false, false, 636), 'row');
        echo "
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Payment Metho -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t";
        // line 641
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 641, $this->source); })()), "paymentMethods", [], "any", false, false, false, 641), 'row');
        echo "
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Course description -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t";
        // line 646
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 646, $this->source); })()), "content", [], "any", false, false, false, 646), 'row');
        echo "
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Step 1 button -->
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end mt-3\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary next-btn mb-0\">Next</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Basic information START -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Step 1 content END -->

\t\t\t\t\t\t\t<!-- Step 2 content START -->
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tid=\"step-2\" role=\"tabpanel\" class=\"content fade\" aria-labelledby=\"steppertrigger2\">
\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t<h4>Course media</h4>

\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<!-- Divider -->

\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t\t\t\t<!-- Upload image START -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-dashed position-relative rounded-3\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Image -->
\t\t\t\t\t\t\t\t\t\t\t";
        // line 674
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 674, $this->source); })()), "media", [], "any", false, false, false, 674))) {
            // line 675
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/element/gallery.svg"), "html", null, true);
            echo "\" class=\"h-50px\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 677
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/media/courses/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 677, $this->source); })()), "media", [], "any", false, false, false, 677), "imageFile", [], "any", false, false, false, 677))), "html", null, true);
            echo "\" class=\"h-50px\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 679
        echo "
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"my-2\">Upload course image here, or<a href=\"#!\" class=\"text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tBrowse</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<label style=\"cursor:pointer;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 686
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 686, $this->source); })()), "media", [], "any", false, false, false, 686), "imageFileUpload", [], "any", false, false, false, 686), 'widget');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small mb-0 mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Note:</b>
\t\t\t\t\t\t\t\t\t\t\t\t\tOnly JPG, JPEG and PNG. Our suggested dimensions are 600px * 450px. Larger image will be cropped to 4:3 to fit our thumbnails/previews.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Upload image END -->

\t\t\t\t\t\t\t\t\t<!-- Upload video START -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t<h5>Upload video</h5>
\t\t\t\t\t\t\t\t\t\t<!-- Input -->
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 mt-4 mb-5\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 703
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 703, $this->source); })()), "media", [], "any", false, false, false, 703), "videoUrl", [], "any", false, false, false, 703), 'row');
        echo "
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative my-4\">
\t\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"small position-absolute top-50 start-50 translate-middle bg-body px-3 mb-0\">Or</p>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Upload video</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 713
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 713, $this->source); })()), "media", [], "any", false, false, false, 713), "mp4FileUpload", [], "any", false, false, false, 713), 'row');
        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 716
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 716, $this->source); })()), "media", [], "any", false, false, false, 716), "webMFileUpload", [], "any", false, false, false, 716), 'row');
        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 719
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 719, $this->source); })()), "media", [], "any", false, false, false, 719), "oggFileUpload", [], "any", false, false, false, 719), 'row');
        echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Upload video END -->

\t\t\t\t\t\t\t\t\t<!-- Step 2 button -->
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between mt-3\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary prev-btn mb-0\">Previous</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary next-btn mb-0\">Next</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Step 2 content END -->

\t\t\t\t\t\t\t<!-- Step 3 content START -->
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tid=\"step-3\" role=\"tabpanel\" class=\"content fade\" aria-labelledby=\"steppertrigger3\">
\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t<h4>Curriculum</h4>

\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<!-- Divider -->

\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t\t\t\t<!-- Add lecture Modal button -->
\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-sm-between align-items-center mb-3\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-2 mb-sm-0\">Upload Lecture</h5>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-primary-soft new-chapitre mb-0\" data-bs-toggle=\"modal\" data-bs-target=\"#addLecture\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-plus-circle me-2\"></i>Add Chapiter</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Edit lecture START -->
\t\t\t\t\t\t\t\t\t<div class=\"accordion accordion-icon accordion-bg-light chapiters\" id=\"accordionExample2\" data-index=\"";
        // line 754
        (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 754, $this->source); })()), "chapitres", [], "any", false, false, false, 754)) > 0)) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 754, $this->source); })()), "chapitres", [], "any", false, false, false, 754)), "vars", [], "any", false, false, false, 754), "name", [], "any", false, false, false, 754) + 1), "html", null, true))) : (print (0)));
        echo "\" data-prototype=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 754, $this->source); })()), "chapitres", [], "any", false, false, false, 754), "vars", [], "any", false, false, false, 754), "prototype", [], "any", false, false, false, 754), 'widget'), "html_attr");
        echo "\">

\t\t\t\t\t\t\t\t\t\t";
        // line 756
        $context["index"] = 0;
        // line 757
        echo "\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 757, $this->source); })()), "chapitres", [], "any", false, false, false, 757));
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
        foreach ($context['_seq'] as $context["_key"] => $context["chapitre"]) {
            // line 758
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            echo twig_include($this->env, $context, "instructor/courses/include/_chap_item.html.twig", ["index" => (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 758, $this->source); })()), "numero" => twig_get_attribute($this->env, $this->source, $context["chapitre"], "numero", [], "any", false, false, false, 758), "title" => twig_get_attribute($this->env, $this->source, $context["chapitre"], "title", [], "any", false, false, false, 758), "description" => twig_get_attribute($this->env, $this->source, $context["chapitre"], "description", [], "any", false, false, false, 758), "chapitre" => $context["chapitre"]]);
            echo "
\t\t\t\t\t\t\t\t\t\t\t";
            // line 759
            $context["index"] = ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 759, $this->source); })()) + 1);
            // line 760
            echo "\t\t\t\t\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chapitre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 761
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Edit lecture END -->

\t\t\t\t\t\t\t\t\t<!-- Step 3 button -->
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary prev-btn mb-0\">Previous</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary next-btn mb-0\">Next</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Step 3 content END -->

\t\t\t\t\t\t\t<!-- Step 4 content START -->
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tid=\"step-4\" role=\"tabpanel\" class=\"content fade\" aria-labelledby=\"steppertrigger4\">
\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t<h4>Additional information</h4>

\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<!-- Divider -->

\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"row g-4\">

\t\t\t\t\t\t\t\t\t<!-- Edit faq START -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-light border rounded p-2 p-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-sm-between align-items-center mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-2 mb-sm-0\">Upload FAQs</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-primary-soft mb-0\" data-bs-toggle=\"modal\" data-bs-target=\"#addQuestion\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-plus-circle me-2\"></i>Add Question</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row g-4\" id=\"faqs\" data-index=\"";
        // line 794
        (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 794, $this->source); })()), "fAQs", [], "any", false, false, false, 794)) > 0)) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 794, $this->source); })()), "fAQs", [], "any", false, false, false, 794)), "vars", [], "any", false, false, false, 794), "name", [], "any", false, false, false, 794) + 1), "html", null, true))) : (print (0)));
        echo "\" data-prototype=\"";
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 794, $this->source); })()), "fAQs", [], "any", false, false, false, 794), "vars", [], "any", false, false, false, 794), "prototype", [], "any", false, false, false, 794), 'widget'), "html_attr");
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 795
        $context["index"] = 0;
        // line 796
        echo "\t\t\t\t\t\t\t\t\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["cours"]) || array_key_exists("cours", $context) ? $context["cours"] : (function () { throw new RuntimeError('Variable "cours" does not exist.', 796, $this->source); })()), "fAQs", [], "any", false, false, false, 796));
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
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 797
            echo "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            echo twig_include($this->env, $context, "instructor/courses/include/_faq_item.html.twig", ["index" => (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 797, $this->source); })()), "question" => twig_get_attribute($this->env, $this->source, $context["faq"], "question", [], "any", false, false, false, 797), "answer" => twig_get_attribute($this->env, $this->source, $context["faq"], "answer", [], "any", false, false, false, 797)]);
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 798
            $context["index"] = ((isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 798, $this->source); })()) + 1);
            // line 799
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 800
        echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Edit faq END -->

\t\t\t\t\t\t\t\t\t<!-- Tags START -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-light border rounded p-4\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Tags</h5>
\t\t\t\t\t\t\t\t\t\t\t<!-- Comment -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 811
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 811, $this->source); })()), "tags", [], "any", false, false, false, 811), 'row');
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"small\">Maximum of 14 keywords. Keywords should all be in lowercase and separated by commas. e.g. javascript, react, marketing</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Tags START -->

\t\t\t\t\t\t\t\t\t<!-- Step 4 button -->
\t\t\t\t\t\t\t\t\t<div class=\"d-md-flex justify-content-between align-items-start mt-4\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary prev-btn mb-2 mb-md-0\">Previous</button>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-md-end\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success mb-2 mb-sm-0\">Submit a Course</button>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 small mt-1\">Once you click \"Submit a Course\", your course will be uploaded and marked as pending for review.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Step 4 content END -->
\t\t\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t\t\t";
        // line 830
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 830, $this->source); })()), 'rest');
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 832
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 832, $this->source); })()), 'form_end');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Card body END -->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- =======================
\t    Steps END -->


\t<div class=\"modal fade modal-lg\" id=\"addLecture\" tabindex=\"-1\" aria-labelledby=\"addLectureLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header bg-dark\">
\t\t\t\t\t<h5 class=\"modal-title text-white\" id=\"addLectureLabel\">Add Chapter</h5>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<i class=\"bi bi-x-lg\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<form
\t\t\t\t\t\tclass=\"row text-start g-3\">
\t\t\t\t\t\t<!-- Course name -->
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<label class=\"form-label\">Chapter title
\t\t\t\t\t\t\t\t<span class=\"text-danger\">*</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"chapiter_title\" class=\"form-control\" placeholder=\"Enter course title\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Course name -->
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<label class=\"form-label\">Chapter Number
\t\t\t\t\t\t\t\t<span class=\"text-danger\">*</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<input type=\"number\" min=\"1\" id=\"chapiter_number\" class=\"form-control\" placeholder=\"Enter chapter number\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Course name -->
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<label class=\"form-label\">Chapter description
\t\t\t\t\t\t\t\t<span class=\"text-danger\">*</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<textarea id=\"description_chapitre\" cols=\"30\" rows=\"3\" class=\"form-control\" placeholder=\"Enter course description\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t\t\t<button type=\"button\" id=\"createChap\" class=\"btn btn-success my-0 add_chapiter_btn\" data-collection-holder-class=\"chapiters\">Save Chapiter</button>
\t\t\t\t\t<button type=\"button\" id=\"updateChap\" data-chap-index=\"\" class=\"btn btn-success my-0 edit_chapiter_btn\" data-collection-holder-class=\"chapiters\" style=\"display: none;\">Update Chapiter</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Popup modal for add topic START -->
\t<div class=\"modal modal-lg fade\" id=\"addTopic\" tabindex=\"-1\" aria-labelledby=\"addTopicLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header bg-dark\">
\t\t\t\t\t<h5 class=\"modal-title text-white\" id=\"addTopicLabel\">Add Lesson</h5>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<i class=\"bi bi-x-lg\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<form id=\"lessonForm\" class=\"row text-start g-3\" method=\"post\" action=\"";
        // line 898
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_lesson_edit", ["id" => "__ID__"]);
        echo "\">

\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<input
\t\t\t\t\t\ttype=\"text\" id=\"lessonId\" name=\"id\" hidden>
\t\t\t\t\t\t<!-- Topic name -->
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t";
        // line 905
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["lessonForm"]) || array_key_exists("lessonForm", $context) ? $context["lessonForm"] : (function () { throw new RuntimeError('Variable "lessonForm" does not exist.', 905, $this->source); })()), "title", [], "any", false, false, false, 905), 'row');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t";
        // line 908
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["lessonForm"]) || array_key_exists("lessonForm", $context) ? $context["lessonForm"] : (function () { throw new RuntimeError('Variable "lessonForm" does not exist.', 908, $this->source); })()), "numero", [], "any", false, false, false, 908), 'row');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Video link -->
\t\t\t\t\t\t<div class=\"col-md-12 d-none\">
\t\t\t\t\t\t\t";
        // line 912
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["lessonForm"]) || array_key_exists("lessonForm", $context) ? $context["lessonForm"] : (function () { throw new RuntimeError('Variable "lessonForm" does not exist.', 912, $this->source); })()), "videoLink", [], "any", false, false, false, 912), 'row');
        echo "
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div id=\"uploadFilesDiv\" class=\"d-none\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Video File</label>
\t\t\t\t\t\t\t\t\t\t<div style=\"position: relative\">
\t\t\t\t\t\t\t\t\t\t\t<label style=\"cursor:pointer;\" for=\"\" id=\"addLessonVideoFileLabel\" class=\"d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"custom-file\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-control stretched-link custom-file-input\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"custom-file-label\">Upload video file</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Poster File</label>
\t\t\t\t\t\t\t\t\t\t<div style=\"position: relative\">
\t\t\t\t\t\t\t\t\t\t\t<label style=\"cursor:pointer;\" for=\"\" id=\"addLessonPosterFileLabel\" class=\"d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"custom-file\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-control stretched-link custom-file-input\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"custom-file-label\">Upload poster file</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Description -->
\t\t\t\t\t\t<div class=\"col-12 mt-3\">
\t\t\t\t\t\t\t";
        // line 951
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["lessonForm"]) || array_key_exists("lessonForm", $context) ? $context["lessonForm"] : (function () { throw new RuntimeError('Variable "lessonForm" does not exist.', 951, $this->source); })()), "content", [], "any", false, false, false, 951), 'row');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Buttons -->
\t\t\t\t\t\t<div class=\"col-6 mt-3\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"btn-group\" role=\"group\" aria-label=\"Basic radio toggle button group\">
\t\t\t\t\t\t\t\t<!-- Free button -->
\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"btn-check\" name=\"isPremium\" id=\"isPremium1\" checked=\"\">
\t\t\t\t\t\t\t\t<label class=\"btn btn-sm btn-light btn-primary-soft-check border-0 m-0\" for=\"isPremium1\">Free</label>
\t\t\t\t\t\t\t\t<!-- Premium button -->
\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"btn-check\" name=\"isPremium\" id=\"isPremium2\">
\t\t\t\t\t\t\t\t<label class=\"btn btn-sm btn-light btn-primary-soft-check border-0 m-0\" for=\"isPremium2\">Premium</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t\t\t\t<button type=\"button\" data-index=\"\" data-chapiter=\"\" data-prototype-container=\"\" class=\"btn btn-success my-0 add_lesson_btn\" id=\"saveLessonBtn\">Save lesson</button>
\t\t\t\t\t\t<button type=\"submit\" data-index=\"\" data-title-reference=\"\" data-chapiter=\"\" data-prototype-container=\"\" class=\"btn btn-success my-0 \" style=\"display: none;\" id=\"editLessonBtn\">Update lesson</button>
\t\t\t\t\t\t<!--  <button type=\"submit\" data-index=\"\" data-title-reference=\"\" data-chapiter=\"\" data-prototype-container=\"\" class=\"btn btn-success my-0 edit_lesson_btn\" style=\"display: none;\" id=\"editLessonBtn\">Update lesson</button>
\t\t\t\t\t\t        -->
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Popup modal for add topic END -->

\t<!-- Popup modal for add faq START -->
\t<div class=\"modal fade\" id=\"addQuestion\" tabindex=\"-1\" aria-labelledby=\"addQuestionLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header bg-dark\">
\t\t\t\t\t<h5 class=\"modal-title text-white\" id=\"addQuestionLabel\">Add FAQ</h5>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<i class=\"bi bi-x-lg\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<form
\t\t\t\t\t\tclass=\"row text-start g-3\">
\t\t\t\t\t\t<!-- Question -->
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<label class=\"form-label\">Question</label>
\t\t\t\t\t\t\t<input class=\"form-control\" id=\"faq_question\" type=\"text\" placeholder=\"Write a question\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Answer -->
\t\t\t\t\t\t<div class=\"col-12 mt-3\">
\t\t\t\t\t\t\t<label class=\"form-label\">Answer</label>
\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"faq_answer\" rows=\"4\" placeholder=\"Write a answer\" spellcheck=\"false\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-success my-0 add_faq_btn\" data-collection-holder-id=\"faqs\">Save topic</button>
\t\t\t\t\t<button type=\"button\" data-index=\"\" class=\"btn btn-success my-0 edit_faq_btn\" id=\"edit_faq_btn\" style=\"display: none;\">Update topic</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Popup modal for add faq END -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "instructor/courses/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1344 => 951,  1302 => 912,  1295 => 908,  1289 => 905,  1279 => 898,  1210 => 832,  1205 => 830,  1183 => 811,  1170 => 800,  1156 => 799,  1154 => 798,  1149 => 797,  1131 => 796,  1129 => 795,  1123 => 794,  1088 => 761,  1074 => 760,  1072 => 759,  1067 => 758,  1049 => 757,  1047 => 756,  1040 => 754,  1002 => 719,  996 => 716,  990 => 713,  977 => 703,  957 => 686,  948 => 679,  942 => 677,  936 => 675,  934 => 674,  903 => 646,  895 => 641,  887 => 636,  879 => 631,  871 => 626,  862 => 620,  853 => 614,  845 => 609,  837 => 604,  829 => 599,  821 => 594,  813 => 589,  805 => 584,  787 => 569,  712 => 496,  702 => 495,  683 => 485,  673 => 478,  667 => 474,  657 => 473,  639 => 469,  621 => 467,  454 => 309,  375 => 233,  314 => 175,  225 => 89,  154 => 22,  152 => 21,  146 => 18,  142 => 17,  138 => 16,  133 => 15,  123 => 14,  111 => 11,  107 => 10,  103 => 9,  98 => 8,  88 => 7,  77 => 4,  67 => 3,  56 => 1,  54 => 471,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"instructor/base.html.twig\" %}

{% block subTitle %}
\t- Courses
{% endblock %}

{% block stylesheet %}
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/aos/aos.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/glightbox/css/glightbox.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/quill/css/quill.snow.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/stepper/css/bs-stepper.min.css') }}\">
{% endblock %}

{% block script %}
\t<script src=\"{{ asset('assets/vendor/aos/aos.js') }}\"></script>
\t<script src=\"{{ asset('assets/vendor/glightbox/js/glightbox.js') }}\"></script>
\t<script src=\"{{ asset('assets/vendor/quill/js/quill.min.js') }}\"></script>
\t<script src=\"{{ asset('assets/vendor/stepper/js/bs-stepper.min.js') }}\"></script>

\t<script>
\t\t\$(function (){ {% if isEditionMode %}
\$('#cours_media_imageFileUpload').attr('required', false){% endif %}let faq_question = document.getElementById('faq_question');
let faq_answer = document.getElementById('faq_answer')

const removeLesson = (e) => {
const chapIndex = e.currentTarget.dataset.chapIndex;
const lessonIndex = e.currentTarget.dataset.index;
const container = \$('#cours_chapitres_0_lessons_' + lessonIndex + '_');
const elt = \$(e.currentTarget)
if (confirm(\"Are you sure you want to delete this lesson?\")) {
if (e.currentTarget.dataset.id == '') {
container.parent().remove()
elt.parent().parent().parent().remove();
} else {
\$.ajax({
url: e.currentTarget.dataset.deleteUrl,
success: function (response) {
if (response.hasDone) {
container.parent().remove()
elt.parent().parent().parent().remove();
} else {
alert(\"Action impossible\")
}
},
error: function () {
alert(\"Action impossible\")
}
})
}
}

}

const showEditChapModal = (e) => {
const chapIndex = e.currentTarget.dataset.chapiter;
document.getElementById('chapiter_title').value = document.getElementById('cours_chapitres_' + chapIndex + '_title').value
document.getElementById('description_chapitre').value = document.getElementById('cours_chapitres_' + chapIndex + '_description').value
document.getElementById('chapiter_number').value = document.getElementById('cours_chapitres_' + chapIndex + '_numero').value
\$('#updateChap').prev().fadeOut();
\$('#updateChap').fadeIn();
\$('#updateChap').attr('data-chap-index', chapIndex);
}

const updateChap = (e) => {
const chapIndex = e.currentTarget.dataset.chapIndex;
document.getElementById('cours_chapitres_' + chapIndex + '_title').value = document.getElementById('chapiter_title').value
document.getElementById('cours_chapitres_' + chapIndex + '_description').value = document.getElementById('description_chapitre').value
document.getElementById('cours_chapitres_' + chapIndex + '_numero').value = document.getElementById('chapiter_number').value

\$('#heading-' + chapIndex + ' button').text('Chapter ' + document.getElementById('chapiter_number').value + ' : ' + document.getElementById('chapiter_title').value)
\$('#collapse-' + chapIndex + ' .description').text(document.getElementById('description_chapitre').value)

\$('#addLecture').modal('hide');
\$('#updateChap').prev().fadeIn();
\$('#updateChap').fadeOut();
document.getElementById('chapiter_title').value = ''
document.getElementById('description_chapitre').value = ''
document.getElementById('chapiter_number').value = ''

}

const showEditLessonModal = (e) => {
e.preventDefault()
\$('#uploadFilesDiv').removeClass('d-none').addClass('d-block')
const chapIndex = e.currentTarget.dataset.chapIndex;
const lessonIndex = e.currentTarget.dataset.index;
const lessonId = e.currentTarget.dataset.id;

\$('#lessonForm').attr('action', \"{{ path('app_lesson_edit', {'id': '__ID__'}) }}\".replace('__ID__', lessonId));

const lesson_form_title = document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_title').value;
const lesson_form_numero = document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_numero').value;
const lesson_form_content = document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_content').value;
const lesson_form_videoLink = document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_videoLink').value;
const isPremium = document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_isPremium').value;
\$(\"#addLessonVideoFileLabel\").attr('for', 'cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_videoFile')
\$(\"#addLessonPosterFileLabel\").attr('for', 'cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_posterFile')

document.getElementById('lessonId').value = lessonId;
document.getElementById('lesson_form_title').value = lesson_form_title;
document.getElementById('lesson_form_numero').value = lesson_form_numero;
document.getElementById('lesson_form_videoLink').value = lesson_form_videoLink;
\$('#cke_lesson_form_content iframe').contents().find(\"body\").html(lesson_form_content);
document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_isPremium').value = isPremium;

\$('#editLessonBtn').attr('data-index', lessonIndex);
\$('#editLessonBtn').attr('data-chapiter', chapIndex);
\$('#editLessonBtn').attr('data-title-reference', e.currentTarget.dataset.titleReference)
\$('#editLessonBtn').fadeIn();
\$('#saveLessonBtn').fadeOut()

\$('#addTopic').modal('show')
}

const editLesson = (e) => {
e.preventDefault();
const chapIndex = e.currentTarget.dataset.chapiter;
const lessonIndex = e.currentTarget.dataset.index;
const lesson_form_title = document.getElementById('lesson_form_title').value;
const lesson_form_videoLink = document.getElementById('lesson_form_videoLink').value;
const lesson_form_content = \$('#cke_lesson_form_content iframe').contents().find(\"body\").html();

const isPremium = \$('#isPremium1').is(':checked') ? 0 : 1;
const lesson_form_numero = document.getElementById('lesson_form_numero').value;
document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_title').value = lesson_form_title;
document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_numero').value = lesson_form_numero;
document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_content').value = lesson_form_content;
document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_videoLink').value = lesson_form_videoLink;
document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_isPremium').value = isPremium;


\$('#' + e.currentTarget.dataset.titleReference).text(lesson_form_title)

document.getElementById('lesson_form_title').value = '';
document.getElementById('lesson_form_numero').value = '';
document.getElementById('lesson_form_videoLink').value = ''
\$('#cke_lesson_form_content iframe').contents().find(\"body\").html('');
\$('#isPremium1').attr('checked', true);
\$('#isPremium1').attr('checked', false);

\$('#addTopic').modal('hide')
\$('#editLessonBtn').fadeOut();
\$('#saveLessonBtn').fadeIn()
}

const addLesson = (e) => {
const lessonCollectionHolder = document.getElementById(e.currentTarget.dataset.prototypeContainer)
if (lessonCollectionHolder.dataset.index == undefined) {
lessonCollectionHolder.setAttribute('data-index', e.currentTarget.dataset.index);
}

const chapIndex = e.currentTarget.dataset.chapiter;
const lessonIndex = lessonCollectionHolder.dataset.index;

const lesson = document.createElement('div');
lesson.style = 'display: none';
lesson.innerHTML = lessonCollectionHolder.dataset.prototype.replace(/__name__/g, lessonIndex);

lessonCollectionHolder.appendChild(lesson);

const lesson_form_title = document.getElementById('lesson_form_title').value;
const lesson_form_numero = document.getElementById('lesson_form_numero').value;
const lesson_form_videoLink = document.getElementById('lesson_form_videoLink').value
const lesson_form_content = \$('#cke_lesson_form_content iframe').contents().find(\"body\").html();

const isPremium = \$('#isPremium1').is(':checked') ? 0 : 1;

document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_title').value = lesson_form_title;
document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_numero').value = lesson_form_numero;
document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_content').value = lesson_form_content;
document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_videoLink').value = lesson_form_videoLink;
document.getElementById('cours_chapitres_' + chapIndex + '_lessons_' + lessonIndex + '_isPremium').value = isPremium;

\$.ajax({
url: '{{ path(\"app_instructor_add_lesson\") }}',
type: 'POST',
data: {
'title': lesson_form_title,
'numero': lesson_form_numero,
'chapIndex': chapIndex,
'videoLink': lesson_form_videoLink,
'description': lesson_form_content,
'index': lessonIndex
},
success: function (response) {
\$('#lessons-container-' + chapIndex).append('<div>' + response + '</div>');
document.querySelectorAll('.delete-lesson-btn').forEach(btn => {
btn.addEventListener(\"click\", removeLesson)
});
document.querySelectorAll('.edit-lesson-btn').forEach(btn => {
btn.addEventListener(\"click\", showEditLessonModal)
});
}
})

lessonCollectionHolder.dataset.index ++;

\$('#addTopic').modal('hide');

document.getElementById('lesson_form_title').value = '';
document.getElementById('lesson_form_numero').value = '';
document.getElementById('lesson_form_videoLink').value = ''
\$('#cke_lesson_form_content iframe').contents().find(\"body\").html('');
\$('#isPremium1').attr('checked', true);
\$('#isPremium1').attr('checked', false);
}

const addChapiter = (e) => {
const collectionHolder = document.querySelector('.' + e.currentTarget.dataset.collectionHolderClass);

const item = document.createElement('div');
item.style = 'display: none'
// item.style = 'display: none';
item.innerHTML = collectionHolder.dataset.prototype.replace(/__name__/g, collectionHolder.dataset.index);

const chapiter_title = document.getElementById('chapiter_title').value;
const chapiter_description = document.getElementById('description_chapitre').value;
const chapterNumber = document.getElementById('chapiter_number').value

collectionHolder.appendChild(item);
var index = collectionHolder.dataset.index;

document.getElementById('cours_chapitres_' + index + '_title').value = chapiter_title
document.getElementById('cours_chapitres_' + index + '_description').value = chapiter_description
document.getElementById('cours_chapitres_' + index + '_numero').value = chapterNumber

const lessonHolder = document.getElementById('cours_chapitres_' + index + '_lessons')
\$('#cours_chapitres_' + index + '_lessons').attr('data-prototype', lessonHolder.dataset.prototype.replaceAll('[lessons][' + index + ']', '[lessons][__name__]').replaceAll('_lessons_' + index + '_', '_lessons___name___').replace('lessons_' + index, 'lessons___name___'))

collectionHolder.dataset.index ++;

\$.ajax({
url: '{{ path(\"app_instructor_add_chap\") }}',
type: 'POST',
data: {
'title': chapiter_title,
'description': chapiter_description,
'index': index,
'numero': chapterNumber
},
success: function (response) {
\$('#accordionExample2').append(response)
document.querySelectorAll('.add-lesson-btn').forEach(btn => {
btn.addEventListener(\"click\", updateSaveBtnAtr)
});
document.querySelectorAll('.edit-chapitre-btn').forEach(btn => {
btn.addEventListener(\"click\", showEditChapModal)
});

document.querySelectorAll('.delete-chapitre-btn').forEach(btn => {
btn.addEventListener('click', (e) => {
document.getElementById(e.currentTarget.dataset.container).remove();
\$(e.currentTarget).parent().parent().parent().remove()
return false;
})
})
},
error: function () {
alert('Error')
}
})

document.getElementById('chapiter_title').value = '';
document.getElementById('chapiter_number').value = '';
document.getElementById('description_chapitre').value = '';

\$('#addLecture').modal('hide');

};

const updateSaveBtnAtr = (e) => {
\$('#uploadFilesDiv').addClass('d-none').removeClass('d-block')
const btn = document.getElementById('saveLessonBtn')
btn.setAttribute('data-index', e.currentTarget.dataset.index);
btn.setAttribute('data-chapiter', e.currentTarget.dataset.chapiter);
btn.setAttribute('data-prototype-container', e.currentTarget.dataset.prototypeContainer)
\$('#editLessonBtn').fadeOut();
\$('#saveLessonBtn').fadeIn();
document.getElementById('lesson_form_title').value = '';
document.getElementById('lesson_form_numero').value = '';
document.getElementById('lesson_form_videoLink').value = ''
\$('#cke_lesson_form_content iframe').contents().find(\"body\").html('');
\$('#isPremium1').attr('checked', true);
\$('#isPremium1').attr('checked', false);
}

const showaddFAQForm = (e) => {
\$('.edit_faq_btn').fadeOut();
\$('.add_faq_btn').fadeIn();
faq_question.value = '';
faq_answer.value = '';
}

const addFAQ = (e) => {
const collectionHolder = document.getElementById(e.currentTarget.dataset.collectionHolderId);

const item = document.createElement('div');
item.style = 'display: none'
item.innerHTML = collectionHolder.dataset.prototype.replace(/__name__/g, collectionHolder.dataset.index);
collectionHolder.appendChild(item);

const index = collectionHolder.dataset.index
collectionHolder.dataset.index ++;

document.getElementById('cours_fAQs_' + index + '_question').value = faq_question.value;
document.getElementById('cours_fAQs_' + index + '_answer').value = faq_answer.value;

\$.ajax({
url: '{{ path(\"app_instructor_add_faq\") }}',
type: \"POST\",
data: {
'index': index,
'question': faq_question.value,
'answer': faq_answer.value
},
success: function (response) {
\$('#faqs').append(response);
document.querySelectorAll('.delete-faq').forEach(btn => {
btn.addEventListener(\"click\", deleteFAQ)
});
document.querySelectorAll('.edit-faq').forEach(btn => {
btn.addEventListener(\"click\", showEditFAQForm)
});

}
})

faq_answer.value = ''
faq_question.value = ''
\$('#addQuestion').modal('hide');
}

const showEditFAQForm = (e) => {
\$('.edit_faq_btn').fadeIn();
\$('.add_faq_btn').fadeOut();

faq_question.value = document.getElementById('cours_fAQs_' + e.currentTarget.dataset.index + '_question').value
faq_answer.value = document.getElementById('cours_fAQs_' + e.currentTarget.dataset.index + '_answer').value
\$('#edit_faq_btn').attr('data-index', e.currentTarget.dataset.index)
}

const deleteFAQ = (e) => {
const container = \$('#cours_fAQs_' + e.currentTarget.dataset.index)
const elt = \$('#faq-' + e.currentTarget.dataset.index)
if (e.currentTarget.dataset.id == '') {
container.parent().remove()
elt.remove();
} else {
\$.ajax({
url: e.currentTarget.dataset.deleteUrl,
success: function (response) {
if (response.hasDone) {
container.parent().remove()
elt.remove();
} else {
alert(\"Action impossible\")
}
},
error: function () {
alert(\"Action impossible\")
}
})
}
}

const editFAQ = (e) => {
const index = e.currentTarget.dataset.index
document.getElementById('cours_fAQs_' + index + '_question').value = faq_question.value;
document.getElementById('cours_fAQs_' + index + '_answer').value = faq_answer.value;

\$('#faq-' + index + ' .question').text(faq_question.value)
\$('#faq-' + index + ' .answer').text(faq_answer.value)

faq_answer.value = ''
faq_question.value = ''
\$('#addQuestion').modal('hide');
}

document.querySelectorAll('.add_chapiter_btn').forEach(btn => {
btn.addEventListener(\"click\", addChapiter)
});

document.querySelectorAll('.edit_chapiter_btn').forEach(btn => {
btn.addEventListener(\"click\", updateChap)
});

document.querySelectorAll('.add_lesson_btn').forEach(btn => {
btn.addEventListener(\"click\", addLesson)
});

document.querySelectorAll('.edit_lesson_btn').forEach(btn => {
btn.addEventListener(\"click\", editLesson)
});

document.querySelectorAll('.add_faq_btn').forEach(btn => {
btn.addEventListener(\"click\", addFAQ)
});

document.querySelectorAll('.edit_faq_btn').forEach(btn => {
btn.addEventListener(\"click\", editFAQ)
});

document.querySelectorAll('.new-chapitre').forEach(btn => {
btn.addEventListener('click', (e) => {
\$('#updateChap').prev().fadeIn();
\$('#updateChap').fadeOut();
\$('#chapiter_title').val('');
\$('#description_chapitre').val('')
})
})

document.querySelectorAll('.delete-faq').forEach(btn => {
btn.addEventListener(\"click\", deleteFAQ)
});
document.querySelectorAll('.edit-faq').forEach(btn => {
btn.addEventListener(\"click\", showEditFAQForm)
});

document.querySelectorAll('.add-lesson-btn').forEach(btn => {
btn.addEventListener(\"click\", updateSaveBtnAtr)
});
document.querySelectorAll('.edit-chapitre-btn').forEach(btn => {
btn.addEventListener(\"click\", showEditChapModal)
});


document.querySelectorAll('.delete-chapitre-btn').forEach(btn => {
btn.addEventListener('click', (e) => {
const elt = \$(e.currentTarget);
const container = document.getElementById(e.currentTarget.dataset.container)
if (confirm(\"Are sure you want to delete this chapter?\")) {
if (e.currentTarget.dataset.id == '') {
container.remove();
elt.parent().parent().parent().remove()
} else {
\$.ajax({
url: e.currentTarget.dataset.deleteUrl,
success: function (response) {
if (response.hasDone) {
container.remove();
elt.parent().parent().parent().remove()
} else {
alert(\"Action impossible\")
}
},
error: function () {
alert(\"Action impossible\")
}
})
}
}

return false;
})
})

document.querySelectorAll('.delete-lesson-btn').forEach(btn => {
btn.addEventListener(\"click\", removeLesson)
});
document.querySelectorAll('.edit-lesson-btn').forEach(btn => {
btn.addEventListener(\"click\", showEditLessonModal)
});
})
\t</script>
{% endblock %}

{% block profileBlock %}{% endblock %}

{% block instructorSidebar %}{% endblock %}

{% set mainContentClass = 'col-md-12' %}

{% block instructorBanner %}

\t<!-- =======================
\t    Page Banner START -->
\t<section
\t\tclass=\"py-0 bg-blue h-100px align-items-center d-flex h-200px rounded-0\" style=\"background:url({{ asset('assets/images/pattern/04.png') }}) no-repeat center center; background-size:cover;\">
\t\t<!-- Main banner background image -->
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div
\t\t\t\t\tclass=\"col-12 text-center\">
\t\t\t\t\t<!-- Title -->
\t\t\t\t\t<h1 class=\"text-white\">{{ pageTitle|default('Submit a new Course')|raw }}</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- =======================
\t    Page Banner END -->

{% endblock %}

{% block pageContent %}

\t<!-- =======================
\t    Steps START -->
\t<section>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div
\t\t\t\t\tclass=\"col-md-8 mx-auto text-center\">
\t\t\t\t\t<!-- Content -->
\t\t\t\t\t<p class=\"text-center\">Use this interface to add a new Course to the portal. Once you are done adding the item it will be reviewed for quality. If approved, your course will appear for sale and you will be informed by email that your course has been accepted.</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"card bg-transparent border rounded-3 mb-5\">
\t\t\t\t<div
\t\t\t\t\tid=\"stepper\" class=\"bs-stepper stepper-outline\">
\t\t\t\t\t<!-- Card header -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"card-header bg-light border-bottom px-lg-5\">
\t\t\t\t\t\t<!-- Step Buttons START -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"bs-stepper-header\" role=\"tablist\">
\t\t\t\t\t\t\t<!-- Step 1 -->
\t\t\t\t\t\t\t<div class=\"step\" data-target=\"#step-1\">
\t\t\t\t\t\t\t\t<div class=\"d-grid text-center align-items-center\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-link step-trigger mb-0\" role=\"tab\" id=\"steppertrigger1\" aria-controls=\"step-1\">
\t\t\t\t\t\t\t\t\t\t<span class=\"bs-stepper-circle\">1</span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<h6 class=\"bs-stepper-label d-none d-md-block\">Course details</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"line\"></div>

\t\t\t\t\t\t\t<!-- Step 2 -->
\t\t\t\t\t\t\t<div class=\"step\" data-target=\"#step-2\">
\t\t\t\t\t\t\t\t<div class=\"d-grid text-center align-items-center\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-link step-trigger mb-0\" role=\"tab\" id=\"steppertrigger2\" aria-controls=\"step-2\">
\t\t\t\t\t\t\t\t\t\t<span class=\"bs-stepper-circle\">2</span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<h6 class=\"bs-stepper-label d-none d-md-block\">Course media</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"line\"></div>

\t\t\t\t\t\t\t<!-- Step 3 -->
\t\t\t\t\t\t\t<div class=\"step\" data-target=\"#step-3\">
\t\t\t\t\t\t\t\t<div class=\"d-grid text-center align-items-center\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-link step-trigger mb-0\" role=\"tab\" id=\"steppertrigger3\" aria-controls=\"step-3\">
\t\t\t\t\t\t\t\t\t\t<span class=\"bs-stepper-circle\">3</span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<h6 class=\"bs-stepper-label d-none d-md-block\">Curriculum</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"line\"></div>

\t\t\t\t\t\t\t<!-- Step 4 -->
\t\t\t\t\t\t\t<div class=\"step\" data-target=\"#step-4\">
\t\t\t\t\t\t\t\t<div class=\"d-grid text-center align-items-center\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-link step-trigger mb-0\" role=\"tab\" id=\"steppertrigger4\" aria-controls=\"step-4\">
\t\t\t\t\t\t\t\t\t\t<span class=\"bs-stepper-circle\">4</span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<h6 class=\"bs-stepper-label d-none d-md-block\">Additional information</h6>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Step Buttons END -->
\t\t\t\t\t</div>

\t\t\t\t\t<!-- Card body START -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"card-body\">
\t\t\t\t\t\t<!-- Step content START -->
\t\t\t\t\t\t<div class=\"bs-stepper-content\">
\t\t\t\t\t\t\t{{ form_start(form) }}

\t\t\t\t\t\t\t<!-- Step 1 content START -->
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tid=\"step-1\" role=\"tabpanel\" class=\"content fade\" aria-labelledby=\"steppertrigger1\">
\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t<h4>Course details</h4>

\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<!-- Divider -->

\t\t\t\t\t\t\t\t<!-- Basic information START -->
\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"row g-4\"> <!-- Course title -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t{{ form_row(form.intitule) }}
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Short description -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t{{ form_row(form.description) }}
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Course category -->
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t{{ form_row(form.categorie) }}
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Course level -->
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t{{ form_row(form.niveauDifficulte) }}
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Course skill level -->
\t\t\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t\t\t{{ form_row(form.skillLevel) }}
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Course classes -->
\t\t\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t\t\t{{ form_row(form.classe) }}
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Language -->
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t{{ form_row(form.language) }}
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Switch -->
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 d-flex align-items-center justify-content-start mt-5\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-check form-switch form-check-md\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.isFree) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Course price -->
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t{{ form_row(form.montantAbonnement) }}
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Course time -->
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t{{ form_row(form.dureeApprentissage) }}
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Total lecture -->
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t{{ form_row(form.numberOfLessons) }}
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Payment Metho -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t{{ form_row(form.paymentMethods) }}
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Course description -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t{{ form_row(form.content) }}
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Step 1 button -->
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end mt-3\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary next-btn mb-0\">Next</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- Basic information START -->
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Step 1 content END -->

\t\t\t\t\t\t\t<!-- Step 2 content START -->
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tid=\"step-2\" role=\"tabpanel\" class=\"content fade\" aria-labelledby=\"steppertrigger2\">
\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t<h4>Course media</h4>

\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<!-- Divider -->

\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t\t\t\t<!-- Upload image START -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\t\t\tclass=\"text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-dashed position-relative rounded-3\">
\t\t\t\t\t\t\t\t\t\t\t<!-- Image -->
\t\t\t\t\t\t\t\t\t\t\t{% if cours.media is null %}
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('assets/images/element/gallery.svg') }}\" class=\"h-50px\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('uploads/media/courses/' ~ cours.media.imageFile) }}\" class=\"h-50px\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t{% endif %}

\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"my-2\">Upload course image here, or<a href=\"#!\" class=\"text-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\tBrowse</a>
\t\t\t\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t\t\t\t<label style=\"cursor:pointer;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(form.media.imageFileUpload) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"small mb-0 mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<b>Note:</b>
\t\t\t\t\t\t\t\t\t\t\t\t\tOnly JPG, JPEG and PNG. Our suggested dimensions are 600px * 450px. Larger image will be cropped to 4:3 to fit our thumbnails/previews.</p>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Upload image END -->

\t\t\t\t\t\t\t\t\t<!-- Upload video START -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t<h5>Upload video</h5>
\t\t\t\t\t\t\t\t\t\t<!-- Input -->
\t\t\t\t\t\t\t\t\t\t<div class=\"col-12 mt-4 mb-5\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.media.videoUrl) }}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"position-relative my-4\">
\t\t\t\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"small position-absolute top-50 start-50 translate-middle bg-body px-3 mb-0\">Or</p>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Upload video</label>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.media.mp4FileUpload) }}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.media.webMFileUpload) }}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.media.oggFileUpload) }}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Upload video END -->

\t\t\t\t\t\t\t\t\t<!-- Step 2 button -->
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between mt-3\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary prev-btn mb-0\">Previous</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary next-btn mb-0\">Next</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Step 2 content END -->

\t\t\t\t\t\t\t<!-- Step 3 content START -->
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tid=\"step-3\" role=\"tabpanel\" class=\"content fade\" aria-labelledby=\"steppertrigger3\">
\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t<h4>Curriculum</h4>

\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<!-- Divider -->

\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"row\">
\t\t\t\t\t\t\t\t\t<!-- Add lecture Modal button -->
\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-sm-between align-items-center mb-3\">
\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-2 mb-sm-0\">Upload Lecture</h5>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-primary-soft new-chapitre mb-0\" data-bs-toggle=\"modal\" data-bs-target=\"#addLecture\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-plus-circle me-2\"></i>Add Chapiter</a>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<!-- Edit lecture START -->
\t\t\t\t\t\t\t\t\t<div class=\"accordion accordion-icon accordion-bg-light chapiters\" id=\"accordionExample2\" data-index=\"{{ form.chapitres|length > 0 ? form.chapitres|last.vars.name + 1 : 0 }}\" data-prototype=\"{{ form_widget(form.chapitres.vars.prototype)|e('html_attr') }}\">

\t\t\t\t\t\t\t\t\t\t{% set index = 0 %}
\t\t\t\t\t\t\t\t\t\t{% for chapitre in cours.chapitres %}
\t\t\t\t\t\t\t\t\t\t\t{{ include('instructor/courses/include/_chap_item.html.twig', {index: index, numero: chapitre.numero, title: chapitre.title, description: chapitre.description, chapitre: chapitre}) }}
\t\t\t\t\t\t\t\t\t\t\t{% set index = index + 1 %}
\t\t\t\t\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Edit lecture END -->

\t\t\t\t\t\t\t\t\t<!-- Step 3 button -->
\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary prev-btn mb-0\">Previous</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary next-btn mb-0\">Next</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Step 3 content END -->

\t\t\t\t\t\t\t<!-- Step 4 content START -->
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tid=\"step-4\" role=\"tabpanel\" class=\"content fade\" aria-labelledby=\"steppertrigger4\">
\t\t\t\t\t\t\t\t<!-- Title -->
\t\t\t\t\t\t\t\t<h4>Additional information</h4>

\t\t\t\t\t\t\t\t<hr>
\t\t\t\t\t\t\t\t<!-- Divider -->

\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"row g-4\">

\t\t\t\t\t\t\t\t\t<!-- Edit faq START -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-light border rounded p-2 p-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex justify-content-sm-between align-items-center mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-2 mb-sm-0\">Upload FAQs</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-primary-soft mb-0\" data-bs-toggle=\"modal\" data-bs-target=\"#addQuestion\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-plus-circle me-2\"></i>Add Question</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row g-4\" id=\"faqs\" data-index=\"{{ form.fAQs|length > 0 ? form.fAQs|last.vars.name + 1 : 0 }}\" data-prototype=\"{{ form_widget(form.fAQs.vars.prototype)|e('html_attr') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t{% set index = 0 %}
\t\t\t\t\t\t\t\t\t\t\t\t{% for faq in cours.fAQs %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ include('instructor/courses/include/_faq_item.html.twig', {index: index, question: faq.question, answer: faq.answer}) }}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set index = index + 1 %}
\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Edit faq END -->

\t\t\t\t\t\t\t\t\t<!-- Tags START -->
\t\t\t\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t\t\t\t<div class=\"bg-light border rounded p-4\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Tags</h5>
\t\t\t\t\t\t\t\t\t\t\t<!-- Comment -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mt-3\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_row(form.tags) }}
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"small\">Maximum of 14 keywords. Keywords should all be in lowercase and separated by commas. e.g. javascript, react, marketing</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Tags START -->

\t\t\t\t\t\t\t\t\t<!-- Step 4 button -->
\t\t\t\t\t\t\t\t\t<div class=\"d-md-flex justify-content-between align-items-start mt-4\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary prev-btn mb-2 mb-md-0\">Previous</button>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-md-end\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success mb-2 mb-sm-0\">Submit a Course</button>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0 small mt-1\">Once you click \"Submit a Course\", your course will be uploaded and marked as pending for review.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- Step 4 content END -->
\t\t\t\t\t\t\t<div style=\"display: none;\">
\t\t\t\t\t\t\t\t{{ form_rest(form) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- Card body END -->
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- =======================
\t    Steps END -->


\t<div class=\"modal fade modal-lg\" id=\"addLecture\" tabindex=\"-1\" aria-labelledby=\"addLectureLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header bg-dark\">
\t\t\t\t\t<h5 class=\"modal-title text-white\" id=\"addLectureLabel\">Add Chapter</h5>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<i class=\"bi bi-x-lg\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<form
\t\t\t\t\t\tclass=\"row text-start g-3\">
\t\t\t\t\t\t<!-- Course name -->
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<label class=\"form-label\">Chapter title
\t\t\t\t\t\t\t\t<span class=\"text-danger\">*</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<input type=\"text\" id=\"chapiter_title\" class=\"form-control\" placeholder=\"Enter course title\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Course name -->
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<label class=\"form-label\">Chapter Number
\t\t\t\t\t\t\t\t<span class=\"text-danger\">*</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<input type=\"number\" min=\"1\" id=\"chapiter_number\" class=\"form-control\" placeholder=\"Enter chapter number\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Course name -->
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<label class=\"form-label\">Chapter description
\t\t\t\t\t\t\t\t<span class=\"text-danger\">*</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<textarea id=\"description_chapitre\" cols=\"30\" rows=\"3\" class=\"form-control\" placeholder=\"Enter course description\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t\t\t<button type=\"button\" id=\"createChap\" class=\"btn btn-success my-0 add_chapiter_btn\" data-collection-holder-class=\"chapiters\">Save Chapiter</button>
\t\t\t\t\t<button type=\"button\" id=\"updateChap\" data-chap-index=\"\" class=\"btn btn-success my-0 edit_chapiter_btn\" data-collection-holder-class=\"chapiters\" style=\"display: none;\">Update Chapiter</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<!-- Popup modal for add topic START -->
\t<div class=\"modal modal-lg fade\" id=\"addTopic\" tabindex=\"-1\" aria-labelledby=\"addTopicLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header bg-dark\">
\t\t\t\t\t<h5 class=\"modal-title text-white\" id=\"addTopicLabel\">Add Lesson</h5>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<i class=\"bi bi-x-lg\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<form id=\"lessonForm\" class=\"row text-start g-3\" method=\"post\" action=\"{{ path('app_lesson_edit', {'id': '__ID__'}) }}\">

\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<input
\t\t\t\t\t\ttype=\"text\" id=\"lessonId\" name=\"id\" hidden>
\t\t\t\t\t\t<!-- Topic name -->
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t{{ form_row(lessonForm.title) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t{{ form_row(lessonForm.numero) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Video link -->
\t\t\t\t\t\t<div class=\"col-md-12 d-none\">
\t\t\t\t\t\t\t{{ form_row(lessonForm.videoLink) }}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t<div id=\"uploadFilesDiv\" class=\"d-none\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Video File</label>
\t\t\t\t\t\t\t\t\t\t<div style=\"position: relative\">
\t\t\t\t\t\t\t\t\t\t\t<label style=\"cursor:pointer;\" for=\"\" id=\"addLessonVideoFileLabel\" class=\"d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"custom-file\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-control stretched-link custom-file-input\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"custom-file-label\">Upload video file</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Poster File</label>
\t\t\t\t\t\t\t\t\t\t<div style=\"position: relative\">
\t\t\t\t\t\t\t\t\t\t\t<label style=\"cursor:pointer;\" for=\"\" id=\"addLessonPosterFileLabel\" class=\"d-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"custom-file\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-control stretched-link custom-file-input\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"custom-file-label\">Upload poster file</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Description -->
\t\t\t\t\t\t<div class=\"col-12 mt-3\">
\t\t\t\t\t\t\t{{ form_row(lessonForm.content) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Buttons -->
\t\t\t\t\t\t<div class=\"col-6 mt-3\">
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"btn-group\" role=\"group\" aria-label=\"Basic radio toggle button group\">
\t\t\t\t\t\t\t\t<!-- Free button -->
\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"btn-check\" name=\"isPremium\" id=\"isPremium1\" checked=\"\">
\t\t\t\t\t\t\t\t<label class=\"btn btn-sm btn-light btn-primary-soft-check border-0 m-0\" for=\"isPremium1\">Free</label>
\t\t\t\t\t\t\t\t<!-- Premium button -->
\t\t\t\t\t\t\t\t<input type=\"radio\" class=\"btn-check\" name=\"isPremium\" id=\"isPremium2\">
\t\t\t\t\t\t\t\t<label class=\"btn btn-sm btn-light btn-primary-soft-check border-0 m-0\" for=\"isPremium2\">Premium</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t\t\t\t<button type=\"button\" data-index=\"\" data-chapiter=\"\" data-prototype-container=\"\" class=\"btn btn-success my-0 add_lesson_btn\" id=\"saveLessonBtn\">Save lesson</button>
\t\t\t\t\t\t<button type=\"submit\" data-index=\"\" data-title-reference=\"\" data-chapiter=\"\" data-prototype-container=\"\" class=\"btn btn-success my-0 \" style=\"display: none;\" id=\"editLessonBtn\">Update lesson</button>
\t\t\t\t\t\t<!--  <button type=\"submit\" data-index=\"\" data-title-reference=\"\" data-chapiter=\"\" data-prototype-container=\"\" class=\"btn btn-success my-0 edit_lesson_btn\" style=\"display: none;\" id=\"editLessonBtn\">Update lesson</button>
\t\t\t\t\t\t        -->
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Popup modal for add topic END -->

\t<!-- Popup modal for add faq START -->
\t<div class=\"modal fade\" id=\"addQuestion\" tabindex=\"-1\" aria-labelledby=\"addQuestionLabel\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header bg-dark\">
\t\t\t\t\t<h5 class=\"modal-title text-white\" id=\"addQuestionLabel\">Add FAQ</h5>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t<i class=\"bi bi-x-lg\"></i>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<form
\t\t\t\t\t\tclass=\"row text-start g-3\">
\t\t\t\t\t\t<!-- Question -->
\t\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t\t\t<label class=\"form-label\">Question</label>
\t\t\t\t\t\t\t<input class=\"form-control\" id=\"faq_question\" type=\"text\" placeholder=\"Write a question\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- Answer -->
\t\t\t\t\t\t<div class=\"col-12 mt-3\">
\t\t\t\t\t\t\t<label class=\"form-label\">Answer</label>
\t\t\t\t\t\t\t<textarea class=\"form-control\" id=\"faq_answer\" rows=\"4\" placeholder=\"Write a answer\" spellcheck=\"false\"></textarea>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-success my-0 add_faq_btn\" data-collection-holder-id=\"faqs\">Save topic</button>
\t\t\t\t\t<button type=\"button\" data-index=\"\" class=\"btn btn-success my-0 edit_faq_btn\" id=\"edit_faq_btn\" style=\"display: none;\">Update topic</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- Popup modal for add faq END -->

{% endblock %}
", "instructor/courses/edit.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\instructor\\courses\\edit.html.twig");
    }
}
