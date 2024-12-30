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

/* instructor/courses/new.html.twig */
class __TwigTemplate_7ff483a3e4fa2649e3e3dfb0a761929c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/courses/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "instructor/courses/new.html.twig"));

        $this->parent = $this->loadTemplate("instructor/base.html.twig", "instructor/courses/new.html.twig", 1);
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

        echo " - Courses ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 6
        echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/css/glightbox.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/css/quill.snow.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/stepper/css/bs-stepper.min.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 12
    public function block_script($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "script"));

        // line 13
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/glightbox/js/glightbox.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/quill/js/quill.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/stepper/js/bs-stepper.min.js"), "html", null, true);
        echo "\"></script>

    <script>

        let faq_question = document.getElementById('faq_question');
        let faq_answer = document.getElementById('faq_answer')

        const removeLesson = (e) => {
            const chapIndex = e.currentTarget.dataset.chapIndex;
            const lessonIndex = e.currentTarget.dataset.index;
            \$('#cours_chapitres_0_lessons_'+lessonIndex+'_').parent().remove()
            \$(e.currentTarget).parent().parent().parent().remove();
            
        }

        const showEditChapModal = (e) => {
            const chapIndex = e.currentTarget.dataset.chapiter;
            document.getElementById('chapiter_title').value = document.getElementById('cours_chapitres_'+chapIndex+'_title').value
            document.getElementById('description_chapitre').value = document.getElementById('cours_chapitres_'+chapIndex+'_description').value
            \$('#updateChap').prev().fadeOut();
            \$('#updateChap').fadeIn();
            \$('#updateChap').attr('data-chap-index', chapIndex);
        }

        const updateChap = (e) => {
            const chapIndex = e.currentTarget.dataset.chapIndex;
            document.getElementById('cours_chapitres_'+chapIndex+'_title').value = document.getElementById('chapiter_title').value
            document.getElementById('cours_chapitres_'+chapIndex+'_description').value = document.getElementById('description_chapitre').value
            
            \$('#heading-'+chapIndex+' button').text(document.getElementById('chapiter_title').value)
            \$('#collapse-'+chapIndex+' .description').text(document.getElementById('description_chapitre').value)

            \$('#addLecture').modal('hide');
            \$('#updateChap').prev().fadeIn();
            \$('#updateChap').fadeOut();
            document.getElementById('chapiter_title').value = ''
            document.getElementById('description_chapitre').value = ''
            
        }

        const showEditLessonModal = (e) => {
            const chapIndex = e.currentTarget.dataset.chapIndex;
            const lessonIndex = e.currentTarget.dataset.index;
            
            const lesson_form_title = document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_title').value;
            const lesson_form_content = document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_content').value;
            const lesson_form_videoLink = document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_videoLink').value;
            const isPremium = document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_isPremium').value;
          
            document.getElementById('lesson_form_title').value = lesson_form_title;
            document.getElementById('lesson_form_videoLink').value = lesson_form_videoLink;
            \$('#cke_lesson_form_content iframe').contents().find(\"body\").html(lesson_form_content);
            document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_isPremium').value = isPremium;

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
            //alert(document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_title').value)
            const lesson_form_title = document.getElementById('lesson_form_title').value;
            //alert(document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_videoLink').value)
            const lesson_form_videoLink = document.getElementById('lesson_form_videoLink').value;
            //alert(document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_content').value)
            const lesson_form_content = \$('#cke_lesson_form_content iframe').contents().find(\"body\").html();
            const isPremium = \$('#isPremium1').is(':checked') ? 0 : 1;
            //alert(document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_title').value)
            document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_title').value = lesson_form_title;
            document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_content').value = lesson_form_content;
            document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_videoLink').value = lesson_form_videoLink;
            document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_isPremium').value = isPremium;

            
            \$('#' + e.currentTarget.dataset.titleReference).text(lesson_form_title)

            document.getElementById('lesson_form_title').value = '';
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
                lessonCollectionHolder.setAttribute('data-index', 0);
            }

            const chapIndex = e.currentTarget.dataset.chapiter;
            const lessonIndex = lessonCollectionHolder.dataset.index;

            const lesson = document.createElement('div');
            lesson.style = 'display: none';
            lesson.innerHTML = lessonCollectionHolder
                .dataset
                .prototype
                .replace(
                    /__name__/g,
                    lessonIndex
                );
            
            lessonCollectionHolder.appendChild(lesson);

            const lesson_form_title = document.getElementById('lesson_form_title').value;
            const lesson_form_videoLink = document.getElementById('lesson_form_videoLink').value
            const lesson_form_content = \$('#cke_lesson_form_content iframe').contents().find(\"body\").html();

            const isPremium = \$('#isPremium1').is(':checked') ? 0 : 1;

            document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_title').value = lesson_form_title;
            document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_content').value = lesson_form_content;
            document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_videoLink').value = lesson_form_videoLink;
            document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_isPremium').value = isPremium;

            \$.ajax({
                url: '";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instructor_add_lesson");
        echo "',
                type: 'POST', 
                data: {'title': lesson_form_title, 'chapIndex': chapIndex, 'videoLink': lesson_form_videoLink, 'description': lesson_form_content, 'index': lessonIndex}, 
                success: function(response) {
                    \$('#lessons-container-'+chapIndex).append('<div>' + response + '</div>');
                    document.querySelectorAll('.delete-lesson-btn').forEach(btn => { btn.addEventListener(\"click\", removeLesson) });
                    document.querySelectorAll('.edit-lesson-btn').forEach(btn => { btn.addEventListener(\"click\", showEditLessonModal) });
                }
            })
            
            lessonCollectionHolder.dataset.index++;

            \$('#addTopic').modal('hide');

            document.getElementById('lesson_form_title').value = '';
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
            item.innerHTML = collectionHolder
                .dataset
                .prototype
                .replace(
                    /__name__/g,
                    collectionHolder.dataset.index
                );

            const chapiter_title = document.getElementById('chapiter_title').value;
            const chapiter_description = document.getElementById('description_chapitre').value;

            collectionHolder.appendChild(item);
            var index = collectionHolder.dataset.index;

            document.getElementById('cours_chapitres_' + index + '_title').value = chapiter_title
            document.getElementById('cours_chapitres_' + index + '_description').value = chapiter_description

            const lessonHolder = document.getElementById('cours_chapitres_' + index + '_lessons')
            \$('#cours_chapitres_' + index + '_lessons').attr('data-prototype', lessonHolder.dataset.prototype.replaceAll(
                '[lessons]['+index+']', 
                '[lessons][__name__]').replaceAll(
                    '_lessons_'+index+'_', 
                    '_lessons___name___'
                ).replace('lessons_'+index, 'lessons___name___')
            )

            collectionHolder.dataset.index++;

            \$.ajax({
                url: '";
        // line 199
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instructor_add_chap");
        echo "',
                type: 'POST',
                data: {'title': chapiter_title, 'description': chapiter_description, 'index': index},
                success: function(response) {
                    \$('#accordionExample2').append(response)
                    document
                    .querySelectorAll('.add-lesson-btn')
                    .forEach(btn => {
                        btn.addEventListener(\"click\", updateSaveBtnAtr)
                    });
                    document
                    .querySelectorAll('.edit-chapitre-btn')
                    .forEach(btn => {
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
                error: function() {
                    alert('Error')
                }
            })

            document.getElementById('chapiter_title').value = '';
            document.getElementById('description_chapitre').value = '';

            \$('#addLecture').modal('hide');

        };

        const updateSaveBtnAtr = (e) => {
            const btn = document.getElementById('saveLessonBtn')
            btn.setAttribute('data-index', e.currentTarget.dataset.index);
            btn.setAttribute('data-chapiter', e.currentTarget.dataset.chapiter);
            btn.setAttribute('data-prototype-container', e.currentTarget.dataset.prototypeContainer)
            \$('#editLessonBtn').fadeOut();
            \$('#saveLessonBtn').fadeIn()
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
            item.innerHTML = collectionHolder
                .dataset
                .prototype
                .replace(
                    /__name__/g,
                    collectionHolder.dataset.index
                );
            collectionHolder.appendChild(item);

            const index = collectionHolder.dataset.index
            collectionHolder.dataset.index++;

            document.getElementById('cours_fAQs_'+index+'_question').value = faq_question.value;
            document.getElementById('cours_fAQs_'+index+'_answer').value = faq_answer.value;

            \$.ajax({
                url: '";
        // line 274
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_instructor_add_faq");
        echo "',
                type: \"POST\", 
                data: {'index': index, 'question': faq_question.value, 'answer': faq_answer.value},
                success: function(response) {
                    \$('#faqs').append(response);
                    document.querySelectorAll('.delete-faq').forEach(btn => {btn.addEventListener(\"click\", deleteFAQ)});
                    document.querySelectorAll('.edit-faq').forEach(btn => {btn.addEventListener(\"click\", showEditFAQForm)});
                    
                }
            })

            faq_answer.value = ''
            faq_question.value = ''
            \$('#addQuestion').modal('hide');
        }

        const showEditFAQForm = (e) => {
            \$('.edit_faq_btn').fadeIn();
            \$('.add_faq_btn').fadeOut();

            faq_question.value = document.getElementById('cours_fAQs_'+e.currentTarget.dataset.index+'_question').value
            faq_answer.value = document.getElementById('cours_fAQs_'+e.currentTarget.dataset.index+'_answer').value
            \$('#edit_faq_btn').attr('data-index', e.currentTarget.dataset.index)
        }

        const deleteFAQ = (e) => {
            \$('#cours_fAQs_'+e.currentTarget.dataset.index).parent().remove()
            document.getElementById('faq-'+e.currentTarget.dataset.index).remove();
        }

        const editFAQ = (e) => {
            const index = e.currentTarget.dataset.index
            document.getElementById('cours_fAQs_'+index+'_question').value = faq_question.value;
            document.getElementById('cours_fAQs_'+index+'_answer').value = faq_answer.value;

            \$('#faq-'+index+' .question').text(faq_question.value)
            \$('#faq-'+index+' .answer').text(faq_answer.value)

            faq_answer.value = ''
            faq_question.value = ''
            \$('#addQuestion').modal('hide');
        }

        document
        .querySelectorAll('.add_chapiter_btn')
        .forEach(btn => {
            btn.addEventListener(\"click\", addChapiter)
        });

        document
        .querySelectorAll('.edit_chapiter_btn')
        .forEach(btn => {
            btn.addEventListener(\"click\", updateChap)
        });

        document
        .querySelectorAll('.add_lesson_btn')
        .forEach(btn => {
            btn.addEventListener(\"click\", addLesson)
        });

        document.querySelectorAll('.edit_lesson_btn').forEach(btn => {
                btn.addEventListener(\"click\", editLesson)
            }
        );

        document.querySelectorAll('.add_faq_btn').forEach(btn => {
                btn.addEventListener(\"click\", addFAQ)
            }
        );

        document.querySelectorAll('.edit_faq_btn').forEach(btn => {
                btn.addEventListener(\"click\", editFAQ)
            }
        );

        document.querySelectorAll('.new-chapitre').forEach(btn => {
            btn.addEventListener('click', (e) => {
                \$('#updateChap').prev().fadeIn();
                \$('#updateChap').fadeOut();
            })
        })

        

    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 362
    public function block_pageContent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageContent"));

        // line 363
        echo "
    <!-- =======================
    Steps START -->
    <section>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8 mx-auto text-center\">
                    <!-- Content -->
                    <p class=\"text-center\">Use this interface to add a new Course to the portal. Once you are done adding the item it will be reviewed for quality. If approved, your course will appear for sale and you will be informed by email that your course has been accepted.</p>
                </div>
            </div>

            <div class=\"card bg-transparent border rounded-3 mb-5\">
                <div id=\"stepper\" class=\"bs-stepper stepper-outline\">
                    <!-- Card header -->
                    <div class=\"card-header bg-light border-bottom px-lg-5\">
                        <!-- Step Buttons START -->
                        <div class=\"bs-stepper-header\" role=\"tablist\">
                            <!-- Step 1 -->
                            <div class=\"step\" data-target=\"#step-1\">
                                <div class=\"d-grid text-center align-items-center\">
                                    <button type=\"button\" class=\"btn btn-link step-trigger mb-0\" role=\"tab\" id=\"steppertrigger1\" aria-controls=\"step-1\">
                                        <span class=\"bs-stepper-circle\">1</span>
                                    </button>
                                    <h6 class=\"bs-stepper-label d-none d-md-block\">Course details</h6>
                                </div>
                            </div>
                            <div class=\"line\"></div>

                            <!-- Step 2 -->
                            <div class=\"step\" data-target=\"#step-2\">
                                <div class=\"d-grid text-center align-items-center\">
                                    <button type=\"button\" class=\"btn btn-link step-trigger mb-0\" role=\"tab\" id=\"steppertrigger2\" aria-controls=\"step-2\">
                                        <span class=\"bs-stepper-circle\">2</span>
                                    </button>
                                    <h6 class=\"bs-stepper-label d-none d-md-block\">Course media</h6>
                                </div>
                            </div>
                            <div class=\"line\"></div>

                            <!-- Step 3 -->
                            <div class=\"step\" data-target=\"#step-3\">
                                <div class=\"d-grid text-center align-items-center\">
                                    <button type=\"button\" class=\"btn btn-link step-trigger mb-0\" role=\"tab\" id=\"steppertrigger3\" aria-controls=\"step-3\">
                                        <span class=\"bs-stepper-circle\">3</span>
                                    </button>
                                    <h6 class=\"bs-stepper-label d-none d-md-block\">Curriculum</h6>
                                </div>
                            </div>
                            <div class=\"line\"></div>

                            <!-- Step 4 -->
                            <div class=\"step\" data-target=\"#step-4\">
                                <div class=\"d-grid text-center align-items-center\">
                                    <button type=\"button\" class=\"btn btn-link step-trigger mb-0\" role=\"tab\" id=\"steppertrigger4\" aria-controls=\"step-4\">
                                        <span class=\"bs-stepper-circle\">4</span>
                                    </button>
                                    <h6 class=\"bs-stepper-label d-none d-md-block\">Additional information</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Step Buttons END -->
                    </div>

                    <!-- Card body START -->
                    <div class=\"card-body\">
                        <!-- Step content START -->
                        <div class=\"bs-stepper-content\">
                            ";
        // line 431
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 431, $this->source); })()), 'form_start');
        echo "

                                <!-- Step 1 content START -->
                                <div id=\"step-1\" role=\"tabpanel\" class=\"content fade\" aria-labelledby=\"steppertrigger1\">
                                    <!-- Title -->
                                    <h4>Course details</h4>

                                    <hr> <!-- Divider -->

                                    <!-- Basic information START -->
                                    <div class=\"row g-4\">
                                        <!-- Course title -->
                                        <div class=\"col-12\">
                                            ";
        // line 444
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 444, $this->source); })()), "intitule", [], "any", false, false, false, 444), 'row');
        echo "
                                        </div>

                                        <!-- Short description -->
                                        <div class=\"col-12\">
                                            ";
        // line 449
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 449, $this->source); })()), "description", [], "any", false, false, false, 449), 'row');
        echo "
                                        </div>

                                        <!-- Course category -->
                                        <div class=\"col-md-6\">
                                            ";
        // line 454
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 454, $this->source); })()), "categorie", [], "any", false, false, false, 454), 'row');
        echo "
                                        </div>

                                        <!-- Course level -->
                                        <div class=\"col-md-6\">
                                            ";
        // line 459
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 459, $this->source); })()), "niveauDifficulte", [], "any", false, false, false, 459), 'row');
        echo "
                                        </div>

                                        <!-- Course category -->
                                        <div class=\"col-md-12\">
                                            ";
        // line 464
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 464, $this->source); })()), "classe", [], "any", false, false, false, 464), 'row');
        echo "
                                        </div>

                                        <!-- Language -->
                                        <div class=\"col-md-6\">
                                            ";
        // line 469
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 469, $this->source); })()), "language", [], "any", false, false, false, 469), 'row');
        echo "
                                        </div>

                                        <!-- Switch -->
                                        <div class=\"col-md-6 d-flex align-items-center justify-content-start mt-5\">
                                            <div class=\"form-check form-switch form-check-md\">
                                                ";
        // line 475
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 475, $this->source); })()), "isFree", [], "any", false, false, false, 475), 'row');
        echo "    
                                            </div>
                                        </div>

                                        <!-- Course price -->
                                        <div class=\"col-md-4\">
                                            ";
        // line 481
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 481, $this->source); })()), "montantAbonnement", [], "any", false, false, false, 481), 'row');
        echo "
                                        </div>

                                        <!-- Course time -->
                                        <div class=\"col-md-4\">
                                            ";
        // line 486
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 486, $this->source); })()), "dureeApprentissage", [], "any", false, false, false, 486), 'row');
        echo "
                                        </div>

                                        <!-- Total lecture -->
                                        <div class=\"col-md-4\">
                                            ";
        // line 491
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 491, $this->source); })()), "numberOfLessons", [], "any", false, false, false, 491), 'row');
        echo "
                                        </div>
                                        
                                        <!-- Course description -->
                                        <div class=\"col-12\">
                                            ";
        // line 496
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 496, $this->source); })()), "content", [], "any", false, false, false, 496), 'row');
        echo "
                                        </div>\t

                                        <!-- Step 1 button -->
                                        <div class=\"d-flex justify-content-end mt-3\">
                                            <button type=\"button\" class=\"btn btn-primary next-btn mb-0\">Next</button>
                                        </div>
                                    </div>
                                    <!-- Basic information START -->
                                </div>
                                <!-- Step 1 content END -->

                                <!-- Step 2 content START -->
                                <div id=\"step-2\" role=\"tabpanel\" class=\"content fade\" aria-labelledby=\"steppertrigger2\">
                                    <!-- Title -->
                                    <h4>Course media</h4>

                                    <hr> <!-- Divider -->

                                    <div class=\"row\">
                                        <!-- Upload image START -->
                                        <div class=\"col-12\">
                                            <div class=\"text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-dashed position-relative rounded-3\">
                                                <!-- Image -->
                                                <img src=\"";
        // line 520
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/element/gallery.svg"), "html", null, true);
        echo "\" class=\"h-50px\" alt=\"\">
                                                <div>
                                                    <h6 class=\"my-2\">Upload course image here, or<a href=\"#!\" class=\"text-primary\"> Browse</a></h6>
                                                    <label style=\"cursor:pointer;\">
                                                        <span> 
                                                            ";
        // line 525
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 525, $this->source); })()), "media", [], "any", false, false, false, 525), "imageFileUpload", [], "any", false, false, false, 525), 'widget');
        echo "
                                                        </span>
                                                    </label>
                                                        <p class=\"small mb-0 mt-2\"><b>Note:</b> Only JPG, JPEG and PNG. Our suggested dimensions are 600px * 450px. Larger image will be cropped to 4:3 to fit our thumbnails/previews.</p>
                                                </div>\t
                                            </div>

                                            <!-- Button -->
                                            <div class=\"d-sm-flex justify-content-end mt-2\">
                                                <button type=\"button\" class=\"btn btn-sm btn-danger-soft mb-3\">Remove image</button>
                                            </div>
                                        </div>
                                        <!-- Upload image END -->

                                        <!-- Upload video START -->
                                        <div class=\"col-12\">
                                            <h5>Upload video</h5>
                                            <!-- Input -->
                                            <div class=\"col-12 mt-4 mb-5\">
                                                ";
        // line 544
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 544, $this->source); })()), "media", [], "any", false, false, false, 544), "videoUrl", [], "any", false, false, false, 544), 'row');
        echo "
                                            </div>
                                            <div class=\"position-relative my-4\">
                                                <hr>
                                                <p class=\"small position-absolute top-50 start-50 translate-middle bg-body px-3 mb-0\">Or</p>
                                            </div>

                                            <div class=\"col-12\">
                                                <label class=\"form-label\">Upload video</label>
                                                <div class=\"input-group mb-3\">
                                                    ";
        // line 554
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 554, $this->source); })()), "media", [], "any", false, false, false, 554), "mp4FileUpload", [], "any", false, false, false, 554), 'row');
        echo "
                                                </div>
                                                <div class=\"input-group mb-3\">
                                                    ";
        // line 557
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 557, $this->source); })()), "media", [], "any", false, false, false, 557), "webMFileUpload", [], "any", false, false, false, 557), 'row');
        echo "
                                                </div>
                                                <div class=\"input-group mb-3\">
                                                    ";
        // line 560
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 560, $this->source); })()), "media", [], "any", false, false, false, 560), "oggFileUpload", [], "any", false, false, false, 560), 'row');
        echo "
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Upload video END -->

                                        <!-- Step 2 button -->
                                        <div class=\"d-flex justify-content-between mt-3\">
                                            <button type=\"button\" class=\"btn btn-secondary prev-btn mb-0\">Previous</button>
                                            <button type=\"button\" class=\"btn btn-primary next-btn mb-0\">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 2 content END -->

                                <!-- Step 3 content START -->
                                <div id=\"step-3\" role=\"tabpanel\" class=\"content fade\" aria-labelledby=\"steppertrigger3\">
                                    <!-- Title -->
                                    <h4>Curriculum</h4>

                                    <hr> <!-- Divider -->

                                    <div class=\"row\">
                                        <!-- Add lecture Modal button -->
                                        <div class=\"d-sm-flex justify-content-sm-between align-items-center mb-3\">
                                            <h5 class=\"mb-2 mb-sm-0\">Upload Lecture</h5>
                                            <a href=\"#\" class=\"btn btn-sm btn-primary-soft new-chapitre mb-0\" data-bs-toggle=\"modal\" data-bs-target=\"#addLecture\"><i class=\"bi bi-plus-circle me-2\"></i>Add Chapiter</a>
                                        </div>
                
                                        <!-- Edit lecture START -->
                                        <div class=\"accordion accordion-icon accordion-bg-light chapiters\" id=\"accordionExample2\" 
                                            data-index=\"";
        // line 592
        (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 592, $this->source); })()), "chapitres", [], "any", false, false, false, 592)) > 0)) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 592, $this->source); })()), "chapitres", [], "any", false, false, false, 592)), "vars", [], "any", false, false, false, 592), "name", [], "any", false, false, false, 592) + 1), "html", null, true))) : (print (0)));
        echo "\"
                                            data-prototype=\"";
        // line 593
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 593, $this->source); })()), "chapitres", [], "any", false, false, false, 593), "vars", [], "any", false, false, false, 593), "prototype", [], "any", false, false, false, 593), 'widget'), "html_attr");
        echo "\">
                                            
                
                                        </div>
                                        <!-- Edit lecture END -->

                                        <!-- Step 3 button -->
                                        <div class=\"d-flex justify-content-between\">
                                            <button type=\"button\" class=\"btn btn-secondary prev-btn mb-0\">Previous</button>
                                            <button type=\"button\" class=\"btn btn-primary next-btn mb-0\">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 3 content END -->

                                <!-- Step 4 content START -->
                                <div id=\"step-4\" role=\"tabpanel\" class=\"content fade\" aria-labelledby=\"steppertrigger4\">
                                    <!-- Title -->
                                    <h4>Additional information</h4>

                                    <hr> <!-- Divider -->

                                    <div class=\"row g-4\">
                                        
                                        <!-- Edit faq START -->
                                        <div class=\"col-12\">
                                            <div class=\"bg-light border rounded p-2 p-sm-4\">
                                                <div class=\"d-sm-flex justify-content-sm-between align-items-center mb-3\">
                                                    <h5 class=\"mb-2 mb-sm-0\">Upload FAQs</h5>
                                                    <a href=\"#\" class=\"btn btn-sm btn-primary-soft mb-0\" data-bs-toggle=\"modal\" data-bs-target=\"#addQuestion\"><i class=\"bi bi-plus-circle me-2\"></i>Add Question</a>
                                                </div>
                                                <div class=\"row g-4\" id=\"faqs\" 
                                                data-index=\"";
        // line 625
        (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 625, $this->source); })()), "fAQs", [], "any", false, false, false, 625)) > 0)) ? (print (twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 625, $this->source); })()), "fAQs", [], "any", false, false, false, 625)), "vars", [], "any", false, false, false, 625), "name", [], "any", false, false, false, 625) + 1), "html", null, true))) : (print (0)));
        echo "\"
                                                data-prototype=\"";
        // line 626
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 626, $this->source); })()), "fAQs", [], "any", false, false, false, 626), "vars", [], "any", false, false, false, 626), "prototype", [], "any", false, false, false, 626), 'widget'), "html_attr");
        echo "\"
                                                >
                                                    
                                                </div>
                                            </div>\t
                                        </div>
                                        <!-- Edit faq END -->

                                        <!-- Tags START -->
                                        <div class=\"col-12\">
                                            <div class=\"bg-light border rounded p-4\">
                                                <h5 class=\"mb-0\">Tags</h5>
                                                <!-- Comment -->
                                                <div class=\"mt-3\">
                                                    ";
        // line 640
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 640, $this->source); })()), "tags", [], "any", false, false, false, 640), 'row');
        echo "
                                                    <span class=\"small\">Maximum of 14 keywords. Keywords should all be in lowercase and separated by commas. e.g. javascript, react, marketing</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tags START -->

                                        <!-- Step 4 button -->
                                        <div class=\"d-md-flex justify-content-between align-items-start mt-4\">
                                            <button type=\"button\" class=\"btn btn-secondary prev-btn mb-2 mb-md-0\">Previous</button>
                                            <div class=\"text-md-end\">
                                                <button type=\"submit\" class=\"btn btn-success mb-2 mb-sm-0\">Submit a Course</button>
                                                <p class=\"mb-0 small mt-1\">Once you click \"Submit a Course\", your course will be uploaded and marked as pending for review.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 4 content END -->

                            ";
        // line 659
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 659, $this->source); })()), 'form_end');
        echo "
                        </div>
                    </div>
                    <!-- Card body END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Steps END -->

    
    <div class=\"modal fade modal-lg\" id=\"addLecture\" tabindex=\"-1\" aria-labelledby=\"addLectureLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-dark\">
                    <h5 class=\"modal-title text-white\" id=\"addLectureLabel\">Add Chapiter</h5>
                    <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
                </div>
                <div class=\"modal-body\">
                    <form class=\"row text-start g-3\">
                        <!-- Course name -->
                        <div class=\"col-12\">
                            <label class=\"form-label\">Chapiter title <span class=\"text-danger\">*</span></label>
                            <input type=\"text\" id=\"chapiter_title\" class=\"form-control\" placeholder=\"Enter course title\">
                        </div>
                        <!-- Course name -->
                        <div class=\"col-12\">
                            <label class=\"form-label\">Chapiter description <span class=\"text-danger\">*</span></label>
                            <textarea id=\"description_chapitre\" cols=\"30\" rows=\"3\" class=\"form-control\" placeholder=\"Enter course description\"></textarea>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
                    <button type=\"button\" id=\"createChap\" class=\"btn btn-success my-0 add_chapiter_btn\" data-collection-holder-class=\"chapiters\">Save Chapiter</button>
                    <button type=\"button\" id=\"updateChap\" data-chap-index=\"\" class=\"btn btn-success my-0 edit_chapiter_btn\" data-collection-holder-class=\"chapiters\" style=\"display: none;\">Update Chapiter</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Popup modal for add topic START -->
    <div class=\"modal modal-lg fade\" id=\"addTopic\" tabindex=\"-1\" aria-labelledby=\"addTopicLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-dark\">
                    <h5 class=\"modal-title text-white\" id=\"addTopicLabel\">Add topic</h5>
                    <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
                </div>
                <div class=\"modal-body\">
                    <form class=\"row text-start g-3\">
                        <!-- Topic name -->
                        <div class=\"col-md-6\">
                            ";
        // line 713
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["lessonForm"]) || array_key_exists("lessonForm", $context) ? $context["lessonForm"] : (function () { throw new RuntimeError('Variable "lessonForm" does not exist.', 713, $this->source); })()), "title", [], "any", false, false, false, 713), 'row');
        echo "
                        </div>
                        <!-- Video link -->
                        <div class=\"col-md-6\">
                            ";
        // line 717
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["lessonForm"]) || array_key_exists("lessonForm", $context) ? $context["lessonForm"] : (function () { throw new RuntimeError('Variable "lessonForm" does not exist.', 717, $this->source); })()), "videoLink", [], "any", false, false, false, 717), 'row');
        echo "
                        </div>
                        <!-- Description -->
                        <div class=\"col-12 mt-3\">
                            ";
        // line 721
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["lessonForm"]) || array_key_exists("lessonForm", $context) ? $context["lessonForm"] : (function () { throw new RuntimeError('Variable "lessonForm" does not exist.', 721, $this->source); })()), "content", [], "any", false, false, false, 721), 'row');
        echo "
                        </div>
                        <!-- Buttons -->
                        <div class=\"col-6 mt-3\">
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic radio toggle button group\">
                                <!-- Free button -->
                                <input type=\"radio\" class=\"btn-check\" name=\"isPremium\" id=\"isPremium1\" checked=\"\">
                                <label class=\"btn btn-sm btn-light btn-primary-soft-check border-0 m-0\" for=\"isPremium1\">Free</label>
                                <!-- Premium button -->
                                <input type=\"radio\" class=\"btn-check\" name=\"isPremium\" id=\"isPremium2\">
                                <label class=\"btn btn-sm btn-light btn-primary-soft-check border-0 m-0\" for=\"isPremium2\">Premium</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
                    <button type=\"button\" data-index=\"\" data-chapiter=\"\" data-prototype-container=\"\" class=\"btn btn-success my-0 add_lesson_btn\" id=\"saveLessonBtn\">Save lesson</button>
                    <button type=\"button\" data-index=\"\" data-title-reference=\"\" data-chapiter=\"\" data-prototype-container=\"\" class=\"btn btn-success my-0 edit_lesson_btn\" style=\"display: none;\" id=\"editLessonBtn\">Update lesson</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Popup modal for add topic END -->

    <!-- Popup modal for add faq START -->
    <div class=\"modal fade\" id=\"addQuestion\" tabindex=\"-1\" aria-labelledby=\"addQuestionLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-dark\">
                <h5 class=\"modal-title text-white\" id=\"addQuestionLabel\">Add FAQ</h5>
                <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
            </div>
            <div class=\"modal-body\">
                <form class=\"row text-start g-3\">
                            <!-- Question -->
                            <div class=\"col-12\">
                                <label class=\"form-label\">Question</label>
                                <input class=\"form-control\" id=\"faq_question\" type=\"text\" placeholder=\"Write a question\">
                            </div>
                            <!-- Answer -->
                            <div class=\"col-12 mt-3\">
                                <label class=\"form-label\">Answer</label>
                                <textarea class=\"form-control\" id=\"faq_answer\" rows=\"4\" placeholder=\"Write a answer\" spellcheck=\"false\"></textarea>
                            </div>
                        </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
                <button type=\"button\" class=\"btn btn-success my-0 add_faq_btn\" data-collection-holder-id=\"faqs\">Save topic</button>
                <button type=\"button\" data-index=\"\" class=\"btn btn-success my-0 edit_faq_btn\" id=\"edit_faq_btn\" style=\"display: none;\">Update topic</button>
            </div>
        </div>
    </div>
    </div>
    <!-- Popup modal for add faq END -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "instructor/courses/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  950 => 721,  943 => 717,  936 => 713,  879 => 659,  857 => 640,  840 => 626,  836 => 625,  801 => 593,  797 => 592,  762 => 560,  756 => 557,  750 => 554,  737 => 544,  715 => 525,  707 => 520,  680 => 496,  672 => 491,  664 => 486,  656 => 481,  647 => 475,  638 => 469,  630 => 464,  622 => 459,  614 => 454,  606 => 449,  598 => 444,  582 => 431,  512 => 363,  502 => 362,  405 => 274,  327 => 199,  268 => 143,  138 => 16,  134 => 15,  130 => 14,  125 => 13,  115 => 12,  103 => 9,  99 => 8,  95 => 7,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"instructor/base.html.twig\" %}

{% block subTitle %} - Courses {% endblock %}

{% block stylesheet %}
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/aos/aos.css') }}\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/glightbox/css/glightbox.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/quill/css/quill.snow.css') }}\">
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('assets/vendor/stepper/css/bs-stepper.min.css') }}\">
{% endblock %}

{% block script %}
    <script src=\"{{ asset('assets/vendor/aos/aos.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/glightbox/js/glightbox.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/quill/js/quill.min.js') }}\"></script>
    <script src=\"{{ asset('assets/vendor/stepper/js/bs-stepper.min.js') }}\"></script>

    <script>

        let faq_question = document.getElementById('faq_question');
        let faq_answer = document.getElementById('faq_answer')

        const removeLesson = (e) => {
            const chapIndex = e.currentTarget.dataset.chapIndex;
            const lessonIndex = e.currentTarget.dataset.index;
            \$('#cours_chapitres_0_lessons_'+lessonIndex+'_').parent().remove()
            \$(e.currentTarget).parent().parent().parent().remove();
            
        }

        const showEditChapModal = (e) => {
            const chapIndex = e.currentTarget.dataset.chapiter;
            document.getElementById('chapiter_title').value = document.getElementById('cours_chapitres_'+chapIndex+'_title').value
            document.getElementById('description_chapitre').value = document.getElementById('cours_chapitres_'+chapIndex+'_description').value
            \$('#updateChap').prev().fadeOut();
            \$('#updateChap').fadeIn();
            \$('#updateChap').attr('data-chap-index', chapIndex);
        }

        const updateChap = (e) => {
            const chapIndex = e.currentTarget.dataset.chapIndex;
            document.getElementById('cours_chapitres_'+chapIndex+'_title').value = document.getElementById('chapiter_title').value
            document.getElementById('cours_chapitres_'+chapIndex+'_description').value = document.getElementById('description_chapitre').value
            
            \$('#heading-'+chapIndex+' button').text(document.getElementById('chapiter_title').value)
            \$('#collapse-'+chapIndex+' .description').text(document.getElementById('description_chapitre').value)

            \$('#addLecture').modal('hide');
            \$('#updateChap').prev().fadeIn();
            \$('#updateChap').fadeOut();
            document.getElementById('chapiter_title').value = ''
            document.getElementById('description_chapitre').value = ''
            
        }

        const showEditLessonModal = (e) => {
            const chapIndex = e.currentTarget.dataset.chapIndex;
            const lessonIndex = e.currentTarget.dataset.index;
            
            const lesson_form_title = document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_title').value;
            const lesson_form_content = document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_content').value;
            const lesson_form_videoLink = document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_videoLink').value;
            const isPremium = document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_isPremium').value;
          
            document.getElementById('lesson_form_title').value = lesson_form_title;
            document.getElementById('lesson_form_videoLink').value = lesson_form_videoLink;
            \$('#cke_lesson_form_content iframe').contents().find(\"body\").html(lesson_form_content);
            document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_isPremium').value = isPremium;

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
            //alert(document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_title').value)
            const lesson_form_title = document.getElementById('lesson_form_title').value;
            //alert(document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_videoLink').value)
            const lesson_form_videoLink = document.getElementById('lesson_form_videoLink').value;
            //alert(document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_content').value)
            const lesson_form_content = \$('#cke_lesson_form_content iframe').contents().find(\"body\").html();
            const isPremium = \$('#isPremium1').is(':checked') ? 0 : 1;
            //alert(document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_title').value)
            document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_title').value = lesson_form_title;
            document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_content').value = lesson_form_content;
            document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_videoLink').value = lesson_form_videoLink;
            document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_isPremium').value = isPremium;

            
            \$('#' + e.currentTarget.dataset.titleReference).text(lesson_form_title)

            document.getElementById('lesson_form_title').value = '';
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
                lessonCollectionHolder.setAttribute('data-index', 0);
            }

            const chapIndex = e.currentTarget.dataset.chapiter;
            const lessonIndex = lessonCollectionHolder.dataset.index;

            const lesson = document.createElement('div');
            lesson.style = 'display: none';
            lesson.innerHTML = lessonCollectionHolder
                .dataset
                .prototype
                .replace(
                    /__name__/g,
                    lessonIndex
                );
            
            lessonCollectionHolder.appendChild(lesson);

            const lesson_form_title = document.getElementById('lesson_form_title').value;
            const lesson_form_videoLink = document.getElementById('lesson_form_videoLink').value
            const lesson_form_content = \$('#cke_lesson_form_content iframe').contents().find(\"body\").html();

            const isPremium = \$('#isPremium1').is(':checked') ? 0 : 1;

            document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_title').value = lesson_form_title;
            document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_content').value = lesson_form_content;
            document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_videoLink').value = lesson_form_videoLink;
            document.getElementById('cours_chapitres_'+chapIndex+'_lessons_'+lessonIndex+'_isPremium').value = isPremium;

            \$.ajax({
                url: '{{ path(\"app_instructor_add_lesson\") }}',
                type: 'POST', 
                data: {'title': lesson_form_title, 'chapIndex': chapIndex, 'videoLink': lesson_form_videoLink, 'description': lesson_form_content, 'index': lessonIndex}, 
                success: function(response) {
                    \$('#lessons-container-'+chapIndex).append('<div>' + response + '</div>');
                    document.querySelectorAll('.delete-lesson-btn').forEach(btn => { btn.addEventListener(\"click\", removeLesson) });
                    document.querySelectorAll('.edit-lesson-btn').forEach(btn => { btn.addEventListener(\"click\", showEditLessonModal) });
                }
            })
            
            lessonCollectionHolder.dataset.index++;

            \$('#addTopic').modal('hide');

            document.getElementById('lesson_form_title').value = '';
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
            item.innerHTML = collectionHolder
                .dataset
                .prototype
                .replace(
                    /__name__/g,
                    collectionHolder.dataset.index
                );

            const chapiter_title = document.getElementById('chapiter_title').value;
            const chapiter_description = document.getElementById('description_chapitre').value;

            collectionHolder.appendChild(item);
            var index = collectionHolder.dataset.index;

            document.getElementById('cours_chapitres_' + index + '_title').value = chapiter_title
            document.getElementById('cours_chapitres_' + index + '_description').value = chapiter_description

            const lessonHolder = document.getElementById('cours_chapitres_' + index + '_lessons')
            \$('#cours_chapitres_' + index + '_lessons').attr('data-prototype', lessonHolder.dataset.prototype.replaceAll(
                '[lessons]['+index+']', 
                '[lessons][__name__]').replaceAll(
                    '_lessons_'+index+'_', 
                    '_lessons___name___'
                ).replace('lessons_'+index, 'lessons___name___')
            )

            collectionHolder.dataset.index++;

            \$.ajax({
                url: '{{ path(\"app_instructor_add_chap\") }}',
                type: 'POST',
                data: {'title': chapiter_title, 'description': chapiter_description, 'index': index},
                success: function(response) {
                    \$('#accordionExample2').append(response)
                    document
                    .querySelectorAll('.add-lesson-btn')
                    .forEach(btn => {
                        btn.addEventListener(\"click\", updateSaveBtnAtr)
                    });
                    document
                    .querySelectorAll('.edit-chapitre-btn')
                    .forEach(btn => {
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
                error: function() {
                    alert('Error')
                }
            })

            document.getElementById('chapiter_title').value = '';
            document.getElementById('description_chapitre').value = '';

            \$('#addLecture').modal('hide');

        };

        const updateSaveBtnAtr = (e) => {
            const btn = document.getElementById('saveLessonBtn')
            btn.setAttribute('data-index', e.currentTarget.dataset.index);
            btn.setAttribute('data-chapiter', e.currentTarget.dataset.chapiter);
            btn.setAttribute('data-prototype-container', e.currentTarget.dataset.prototypeContainer)
            \$('#editLessonBtn').fadeOut();
            \$('#saveLessonBtn').fadeIn()
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
            item.innerHTML = collectionHolder
                .dataset
                .prototype
                .replace(
                    /__name__/g,
                    collectionHolder.dataset.index
                );
            collectionHolder.appendChild(item);

            const index = collectionHolder.dataset.index
            collectionHolder.dataset.index++;

            document.getElementById('cours_fAQs_'+index+'_question').value = faq_question.value;
            document.getElementById('cours_fAQs_'+index+'_answer').value = faq_answer.value;

            \$.ajax({
                url: '{{ path(\"app_instructor_add_faq\") }}',
                type: \"POST\", 
                data: {'index': index, 'question': faq_question.value, 'answer': faq_answer.value},
                success: function(response) {
                    \$('#faqs').append(response);
                    document.querySelectorAll('.delete-faq').forEach(btn => {btn.addEventListener(\"click\", deleteFAQ)});
                    document.querySelectorAll('.edit-faq').forEach(btn => {btn.addEventListener(\"click\", showEditFAQForm)});
                    
                }
            })

            faq_answer.value = ''
            faq_question.value = ''
            \$('#addQuestion').modal('hide');
        }

        const showEditFAQForm = (e) => {
            \$('.edit_faq_btn').fadeIn();
            \$('.add_faq_btn').fadeOut();

            faq_question.value = document.getElementById('cours_fAQs_'+e.currentTarget.dataset.index+'_question').value
            faq_answer.value = document.getElementById('cours_fAQs_'+e.currentTarget.dataset.index+'_answer').value
            \$('#edit_faq_btn').attr('data-index', e.currentTarget.dataset.index)
        }

        const deleteFAQ = (e) => {
            \$('#cours_fAQs_'+e.currentTarget.dataset.index).parent().remove()
            document.getElementById('faq-'+e.currentTarget.dataset.index).remove();
        }

        const editFAQ = (e) => {
            const index = e.currentTarget.dataset.index
            document.getElementById('cours_fAQs_'+index+'_question').value = faq_question.value;
            document.getElementById('cours_fAQs_'+index+'_answer').value = faq_answer.value;

            \$('#faq-'+index+' .question').text(faq_question.value)
            \$('#faq-'+index+' .answer').text(faq_answer.value)

            faq_answer.value = ''
            faq_question.value = ''
            \$('#addQuestion').modal('hide');
        }

        document
        .querySelectorAll('.add_chapiter_btn')
        .forEach(btn => {
            btn.addEventListener(\"click\", addChapiter)
        });

        document
        .querySelectorAll('.edit_chapiter_btn')
        .forEach(btn => {
            btn.addEventListener(\"click\", updateChap)
        });

        document
        .querySelectorAll('.add_lesson_btn')
        .forEach(btn => {
            btn.addEventListener(\"click\", addLesson)
        });

        document.querySelectorAll('.edit_lesson_btn').forEach(btn => {
                btn.addEventListener(\"click\", editLesson)
            }
        );

        document.querySelectorAll('.add_faq_btn').forEach(btn => {
                btn.addEventListener(\"click\", addFAQ)
            }
        );

        document.querySelectorAll('.edit_faq_btn').forEach(btn => {
                btn.addEventListener(\"click\", editFAQ)
            }
        );

        document.querySelectorAll('.new-chapitre').forEach(btn => {
            btn.addEventListener('click', (e) => {
                \$('#updateChap').prev().fadeIn();
                \$('#updateChap').fadeOut();
            })
        })

        

    </script>
{% endblock %}

{% block pageContent %}

    <!-- =======================
    Steps START -->
    <section>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8 mx-auto text-center\">
                    <!-- Content -->
                    <p class=\"text-center\">Use this interface to add a new Course to the portal. Once you are done adding the item it will be reviewed for quality. If approved, your course will appear for sale and you will be informed by email that your course has been accepted.</p>
                </div>
            </div>

            <div class=\"card bg-transparent border rounded-3 mb-5\">
                <div id=\"stepper\" class=\"bs-stepper stepper-outline\">
                    <!-- Card header -->
                    <div class=\"card-header bg-light border-bottom px-lg-5\">
                        <!-- Step Buttons START -->
                        <div class=\"bs-stepper-header\" role=\"tablist\">
                            <!-- Step 1 -->
                            <div class=\"step\" data-target=\"#step-1\">
                                <div class=\"d-grid text-center align-items-center\">
                                    <button type=\"button\" class=\"btn btn-link step-trigger mb-0\" role=\"tab\" id=\"steppertrigger1\" aria-controls=\"step-1\">
                                        <span class=\"bs-stepper-circle\">1</span>
                                    </button>
                                    <h6 class=\"bs-stepper-label d-none d-md-block\">Course details</h6>
                                </div>
                            </div>
                            <div class=\"line\"></div>

                            <!-- Step 2 -->
                            <div class=\"step\" data-target=\"#step-2\">
                                <div class=\"d-grid text-center align-items-center\">
                                    <button type=\"button\" class=\"btn btn-link step-trigger mb-0\" role=\"tab\" id=\"steppertrigger2\" aria-controls=\"step-2\">
                                        <span class=\"bs-stepper-circle\">2</span>
                                    </button>
                                    <h6 class=\"bs-stepper-label d-none d-md-block\">Course media</h6>
                                </div>
                            </div>
                            <div class=\"line\"></div>

                            <!-- Step 3 -->
                            <div class=\"step\" data-target=\"#step-3\">
                                <div class=\"d-grid text-center align-items-center\">
                                    <button type=\"button\" class=\"btn btn-link step-trigger mb-0\" role=\"tab\" id=\"steppertrigger3\" aria-controls=\"step-3\">
                                        <span class=\"bs-stepper-circle\">3</span>
                                    </button>
                                    <h6 class=\"bs-stepper-label d-none d-md-block\">Curriculum</h6>
                                </div>
                            </div>
                            <div class=\"line\"></div>

                            <!-- Step 4 -->
                            <div class=\"step\" data-target=\"#step-4\">
                                <div class=\"d-grid text-center align-items-center\">
                                    <button type=\"button\" class=\"btn btn-link step-trigger mb-0\" role=\"tab\" id=\"steppertrigger4\" aria-controls=\"step-4\">
                                        <span class=\"bs-stepper-circle\">4</span>
                                    </button>
                                    <h6 class=\"bs-stepper-label d-none d-md-block\">Additional information</h6>
                                </div>
                            </div>
                        </div>
                        <!-- Step Buttons END -->
                    </div>

                    <!-- Card body START -->
                    <div class=\"card-body\">
                        <!-- Step content START -->
                        <div class=\"bs-stepper-content\">
                            {{ form_start(form) }}

                                <!-- Step 1 content START -->
                                <div id=\"step-1\" role=\"tabpanel\" class=\"content fade\" aria-labelledby=\"steppertrigger1\">
                                    <!-- Title -->
                                    <h4>Course details</h4>

                                    <hr> <!-- Divider -->

                                    <!-- Basic information START -->
                                    <div class=\"row g-4\">
                                        <!-- Course title -->
                                        <div class=\"col-12\">
                                            {{ form_row(form.intitule) }}
                                        </div>

                                        <!-- Short description -->
                                        <div class=\"col-12\">
                                            {{ form_row(form.description) }}
                                        </div>

                                        <!-- Course category -->
                                        <div class=\"col-md-6\">
                                            {{ form_row(form.categorie) }}
                                        </div>

                                        <!-- Course level -->
                                        <div class=\"col-md-6\">
                                            {{ form_row(form.niveauDifficulte) }}
                                        </div>

                                        <!-- Course category -->
                                        <div class=\"col-md-12\">
                                            {{ form_row(form.classe) }}
                                        </div>

                                        <!-- Language -->
                                        <div class=\"col-md-6\">
                                            {{ form_row(form.language) }}
                                        </div>

                                        <!-- Switch -->
                                        <div class=\"col-md-6 d-flex align-items-center justify-content-start mt-5\">
                                            <div class=\"form-check form-switch form-check-md\">
                                                {{ form_row(form.isFree) }}    
                                            </div>
                                        </div>

                                        <!-- Course price -->
                                        <div class=\"col-md-4\">
                                            {{ form_row(form.montantAbonnement) }}
                                        </div>

                                        <!-- Course time -->
                                        <div class=\"col-md-4\">
                                            {{ form_row(form.dureeApprentissage) }}
                                        </div>

                                        <!-- Total lecture -->
                                        <div class=\"col-md-4\">
                                            {{ form_row(form.numberOfLessons) }}
                                        </div>
                                        
                                        <!-- Course description -->
                                        <div class=\"col-12\">
                                            {{ form_row(form.content) }}
                                        </div>\t

                                        <!-- Step 1 button -->
                                        <div class=\"d-flex justify-content-end mt-3\">
                                            <button type=\"button\" class=\"btn btn-primary next-btn mb-0\">Next</button>
                                        </div>
                                    </div>
                                    <!-- Basic information START -->
                                </div>
                                <!-- Step 1 content END -->

                                <!-- Step 2 content START -->
                                <div id=\"step-2\" role=\"tabpanel\" class=\"content fade\" aria-labelledby=\"steppertrigger2\">
                                    <!-- Title -->
                                    <h4>Course media</h4>

                                    <hr> <!-- Divider -->

                                    <div class=\"row\">
                                        <!-- Upload image START -->
                                        <div class=\"col-12\">
                                            <div class=\"text-center justify-content-center align-items-center p-4 p-sm-5 border border-2 border-dashed position-relative rounded-3\">
                                                <!-- Image -->
                                                <img src=\"{{ asset('assets/images/element/gallery.svg') }}\" class=\"h-50px\" alt=\"\">
                                                <div>
                                                    <h6 class=\"my-2\">Upload course image here, or<a href=\"#!\" class=\"text-primary\"> Browse</a></h6>
                                                    <label style=\"cursor:pointer;\">
                                                        <span> 
                                                            {{ form_widget(form.media.imageFileUpload) }}
                                                        </span>
                                                    </label>
                                                        <p class=\"small mb-0 mt-2\"><b>Note:</b> Only JPG, JPEG and PNG. Our suggested dimensions are 600px * 450px. Larger image will be cropped to 4:3 to fit our thumbnails/previews.</p>
                                                </div>\t
                                            </div>

                                            <!-- Button -->
                                            <div class=\"d-sm-flex justify-content-end mt-2\">
                                                <button type=\"button\" class=\"btn btn-sm btn-danger-soft mb-3\">Remove image</button>
                                            </div>
                                        </div>
                                        <!-- Upload image END -->

                                        <!-- Upload video START -->
                                        <div class=\"col-12\">
                                            <h5>Upload video</h5>
                                            <!-- Input -->
                                            <div class=\"col-12 mt-4 mb-5\">
                                                {{ form_row(form.media.videoUrl) }}
                                            </div>
                                            <div class=\"position-relative my-4\">
                                                <hr>
                                                <p class=\"small position-absolute top-50 start-50 translate-middle bg-body px-3 mb-0\">Or</p>
                                            </div>

                                            <div class=\"col-12\">
                                                <label class=\"form-label\">Upload video</label>
                                                <div class=\"input-group mb-3\">
                                                    {{ form_row(form.media.mp4FileUpload) }}
                                                </div>
                                                <div class=\"input-group mb-3\">
                                                    {{ form_row(form.media.webMFileUpload) }}
                                                </div>
                                                <div class=\"input-group mb-3\">
                                                    {{ form_row(form.media.oggFileUpload) }}
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Upload video END -->

                                        <!-- Step 2 button -->
                                        <div class=\"d-flex justify-content-between mt-3\">
                                            <button type=\"button\" class=\"btn btn-secondary prev-btn mb-0\">Previous</button>
                                            <button type=\"button\" class=\"btn btn-primary next-btn mb-0\">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 2 content END -->

                                <!-- Step 3 content START -->
                                <div id=\"step-3\" role=\"tabpanel\" class=\"content fade\" aria-labelledby=\"steppertrigger3\">
                                    <!-- Title -->
                                    <h4>Curriculum</h4>

                                    <hr> <!-- Divider -->

                                    <div class=\"row\">
                                        <!-- Add lecture Modal button -->
                                        <div class=\"d-sm-flex justify-content-sm-between align-items-center mb-3\">
                                            <h5 class=\"mb-2 mb-sm-0\">Upload Lecture</h5>
                                            <a href=\"#\" class=\"btn btn-sm btn-primary-soft new-chapitre mb-0\" data-bs-toggle=\"modal\" data-bs-target=\"#addLecture\"><i class=\"bi bi-plus-circle me-2\"></i>Add Chapiter</a>
                                        </div>
                
                                        <!-- Edit lecture START -->
                                        <div class=\"accordion accordion-icon accordion-bg-light chapiters\" id=\"accordionExample2\" 
                                            data-index=\"{{ form.chapitres|length > 0 ? form.chapitres|last.vars.name + 1 : 0 }}\"
                                            data-prototype=\"{{ form_widget(form.chapitres.vars.prototype)|e('html_attr') }}\">
                                            
                
                                        </div>
                                        <!-- Edit lecture END -->

                                        <!-- Step 3 button -->
                                        <div class=\"d-flex justify-content-between\">
                                            <button type=\"button\" class=\"btn btn-secondary prev-btn mb-0\">Previous</button>
                                            <button type=\"button\" class=\"btn btn-primary next-btn mb-0\">Next</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 3 content END -->

                                <!-- Step 4 content START -->
                                <div id=\"step-4\" role=\"tabpanel\" class=\"content fade\" aria-labelledby=\"steppertrigger4\">
                                    <!-- Title -->
                                    <h4>Additional information</h4>

                                    <hr> <!-- Divider -->

                                    <div class=\"row g-4\">
                                        
                                        <!-- Edit faq START -->
                                        <div class=\"col-12\">
                                            <div class=\"bg-light border rounded p-2 p-sm-4\">
                                                <div class=\"d-sm-flex justify-content-sm-between align-items-center mb-3\">
                                                    <h5 class=\"mb-2 mb-sm-0\">Upload FAQs</h5>
                                                    <a href=\"#\" class=\"btn btn-sm btn-primary-soft mb-0\" data-bs-toggle=\"modal\" data-bs-target=\"#addQuestion\"><i class=\"bi bi-plus-circle me-2\"></i>Add Question</a>
                                                </div>
                                                <div class=\"row g-4\" id=\"faqs\" 
                                                data-index=\"{{ form.fAQs|length > 0 ? form.fAQs|last.vars.name + 1 : 0 }}\"
                                                data-prototype=\"{{ form_widget(form.fAQs.vars.prototype)|e('html_attr') }}\"
                                                >
                                                    
                                                </div>
                                            </div>\t
                                        </div>
                                        <!-- Edit faq END -->

                                        <!-- Tags START -->
                                        <div class=\"col-12\">
                                            <div class=\"bg-light border rounded p-4\">
                                                <h5 class=\"mb-0\">Tags</h5>
                                                <!-- Comment -->
                                                <div class=\"mt-3\">
                                                    {{ form_row(form.tags) }}
                                                    <span class=\"small\">Maximum of 14 keywords. Keywords should all be in lowercase and separated by commas. e.g. javascript, react, marketing</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Tags START -->

                                        <!-- Step 4 button -->
                                        <div class=\"d-md-flex justify-content-between align-items-start mt-4\">
                                            <button type=\"button\" class=\"btn btn-secondary prev-btn mb-2 mb-md-0\">Previous</button>
                                            <div class=\"text-md-end\">
                                                <button type=\"submit\" class=\"btn btn-success mb-2 mb-sm-0\">Submit a Course</button>
                                                <p class=\"mb-0 small mt-1\">Once you click \"Submit a Course\", your course will be uploaded and marked as pending for review.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Step 4 content END -->

                            {{ form_end(form) }}
                        </div>
                    </div>
                    <!-- Card body END -->
                </div>
            </div>
        </div>
    </section>
    <!-- =======================
    Steps END -->

    
    <div class=\"modal fade modal-lg\" id=\"addLecture\" tabindex=\"-1\" aria-labelledby=\"addLectureLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-dark\">
                    <h5 class=\"modal-title text-white\" id=\"addLectureLabel\">Add Chapiter</h5>
                    <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
                </div>
                <div class=\"modal-body\">
                    <form class=\"row text-start g-3\">
                        <!-- Course name -->
                        <div class=\"col-12\">
                            <label class=\"form-label\">Chapiter title <span class=\"text-danger\">*</span></label>
                            <input type=\"text\" id=\"chapiter_title\" class=\"form-control\" placeholder=\"Enter course title\">
                        </div>
                        <!-- Course name -->
                        <div class=\"col-12\">
                            <label class=\"form-label\">Chapiter description <span class=\"text-danger\">*</span></label>
                            <textarea id=\"description_chapitre\" cols=\"30\" rows=\"3\" class=\"form-control\" placeholder=\"Enter course description\"></textarea>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
                    <button type=\"button\" id=\"createChap\" class=\"btn btn-success my-0 add_chapiter_btn\" data-collection-holder-class=\"chapiters\">Save Chapiter</button>
                    <button type=\"button\" id=\"updateChap\" data-chap-index=\"\" class=\"btn btn-success my-0 edit_chapiter_btn\" data-collection-holder-class=\"chapiters\" style=\"display: none;\">Update Chapiter</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Popup modal for add topic START -->
    <div class=\"modal modal-lg fade\" id=\"addTopic\" tabindex=\"-1\" aria-labelledby=\"addTopicLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header bg-dark\">
                    <h5 class=\"modal-title text-white\" id=\"addTopicLabel\">Add topic</h5>
                    <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
                </div>
                <div class=\"modal-body\">
                    <form class=\"row text-start g-3\">
                        <!-- Topic name -->
                        <div class=\"col-md-6\">
                            {{ form_row(lessonForm.title) }}
                        </div>
                        <!-- Video link -->
                        <div class=\"col-md-6\">
                            {{ form_row(lessonForm.videoLink) }}
                        </div>
                        <!-- Description -->
                        <div class=\"col-12 mt-3\">
                            {{ form_row(lessonForm.content) }}
                        </div>
                        <!-- Buttons -->
                        <div class=\"col-6 mt-3\">
                            <div class=\"btn-group\" role=\"group\" aria-label=\"Basic radio toggle button group\">
                                <!-- Free button -->
                                <input type=\"radio\" class=\"btn-check\" name=\"isPremium\" id=\"isPremium1\" checked=\"\">
                                <label class=\"btn btn-sm btn-light btn-primary-soft-check border-0 m-0\" for=\"isPremium1\">Free</label>
                                <!-- Premium button -->
                                <input type=\"radio\" class=\"btn-check\" name=\"isPremium\" id=\"isPremium2\">
                                <label class=\"btn btn-sm btn-light btn-primary-soft-check border-0 m-0\" for=\"isPremium2\">Premium</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
                    <button type=\"button\" data-index=\"\" data-chapiter=\"\" data-prototype-container=\"\" class=\"btn btn-success my-0 add_lesson_btn\" id=\"saveLessonBtn\">Save lesson</button>
                    <button type=\"button\" data-index=\"\" data-title-reference=\"\" data-chapiter=\"\" data-prototype-container=\"\" class=\"btn btn-success my-0 edit_lesson_btn\" style=\"display: none;\" id=\"editLessonBtn\">Update lesson</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Popup modal for add topic END -->

    <!-- Popup modal for add faq START -->
    <div class=\"modal fade\" id=\"addQuestion\" tabindex=\"-1\" aria-labelledby=\"addQuestionLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header bg-dark\">
                <h5 class=\"modal-title text-white\" id=\"addQuestionLabel\">Add FAQ</h5>
                <button type=\"button\" class=\"btn btn-sm btn-light mb-0\" data-bs-dismiss=\"modal\" aria-label=\"Close\"><i class=\"bi bi-x-lg\"></i></button>
            </div>
            <div class=\"modal-body\">
                <form class=\"row text-start g-3\">
                            <!-- Question -->
                            <div class=\"col-12\">
                                <label class=\"form-label\">Question</label>
                                <input class=\"form-control\" id=\"faq_question\" type=\"text\" placeholder=\"Write a question\">
                            </div>
                            <!-- Answer -->
                            <div class=\"col-12 mt-3\">
                                <label class=\"form-label\">Answer</label>
                                <textarea class=\"form-control\" id=\"faq_answer\" rows=\"4\" placeholder=\"Write a answer\" spellcheck=\"false\"></textarea>
                            </div>
                        </form>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-danger-soft my-0\" data-bs-dismiss=\"modal\">Close</button>
                <button type=\"button\" class=\"btn btn-success my-0 add_faq_btn\" data-collection-holder-id=\"faqs\">Save topic</button>
                <button type=\"button\" data-index=\"\" class=\"btn btn-success my-0 edit_faq_btn\" id=\"edit_faq_btn\" style=\"display: none;\">Update topic</button>
            </div>
        </div>
    </div>
    </div>
    <!-- Popup modal for add faq END -->

{% endblock %}
", "instructor/courses/new.html.twig", "V:\\PROJECT\\kulmapeck\\templates\\instructor\\courses\\new.html.twig");
    }
}
