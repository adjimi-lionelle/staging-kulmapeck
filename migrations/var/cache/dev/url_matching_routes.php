<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/schools' => [[['_route' => 'etablissements', '_controller' => 'App\\Controller\\Api\\Controller\\Etablissement\\AllController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Etablissement', '_api_operation_name' => 'etablissements'], null, ['GET' => 0], null, false, false, null]],
        '/api/me' => [[['_route' => '_api_/me_get', '_controller' => 'App\\Controller\\Api\\Controller\\User\\MeController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/me_get'], null, ['GET' => 0], null, false, false, null]],
        '/elfinder.main.js' => [[['_route' => 'ef_main_js', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::mainJS'], null, null, null, false, false, null]],
        '/api/token/refresh' => [
            [['_route' => 'gesdinet_jwt_refresh_token'], null, null, null, false, false, null],
            [['_route' => 'api_refresh_token'], null, null, null, false, false, null],
        ],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/abonnement' => [[['_route' => 'app_admin_abonnement_index', '_controller' => 'App\\Controller\\Admin\\AbonnementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/abonnement/new' => [[['_route' => 'app_admin_abonnement_new', '_controller' => 'App\\Controller\\Admin\\AbonnementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/abonnement/item/new' => [[['_route' => 'app_admin_abonnement_item_new', '_controller' => 'App\\Controller\\Admin\\AbonnementItemController::new'], null, ['POST' => 0], null, false, false, null]],
        '/admin/categorie' => [[['_route' => 'app_admin_categorie_index', '_controller' => 'App\\Controller\\Admin\\CategorieController::index'], null, ['GET' => 0, 'POST' => 1], null, true, false, null]],
        '/admin/categorie/new' => [[['_route' => 'app_admin_categorie_new', '_controller' => 'App\\Controller\\Admin\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/chapitre' => [[['_route' => 'app_chapitre_index', '_controller' => 'App\\Controller\\Admin\\ChapitreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/chapitre/new' => [[['_route' => 'app_chapitre_new', '_controller' => 'App\\Controller\\Admin\\ChapitreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/classe' => [[['_route' => 'app_admin_classe_index', '_controller' => 'App\\Controller\\Admin\\ClasseController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/classe/new' => [[['_route' => 'app_admin_classe_new', '_controller' => 'App\\Controller\\Admin\\ClasseController::new'], null, ['POST' => 0], null, false, false, null]],
        '/admin/cours' => [[['_route' => 'app_admin_cours_index', '_controller' => 'App\\Controller\\Admin\\CoursController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/cours/new' => [[['_route' => 'app_admin_cours_new', '_controller' => 'App\\Controller\\Admin\\CoursController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/dashboard' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/dashboardEarningsData' => [[['_route' => 'app_admin_earnings', '_controller' => 'App\\Controller\\Admin\\DashboardController::dashboardEarningsData'], null, ['GET' => 0], null, false, false, null]],
        '/traficSource' => [[['_route' => 'app_admin_trafic_sources', '_controller' => 'App\\Controller\\Admin\\DashboardController::traficSource'], null, ['GET' => 0], null, false, false, null]],
        '/admin/students' => [[['_route' => 'app_admin_eleve_index', '_controller' => 'App\\Controller\\Admin\\EleveController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/students/new' => [[['_route' => 'app_admin_eleve_new', '_controller' => 'App\\Controller\\Admin\\EleveController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/instructors' => [[['_route' => 'app_admin_enseignant_index', '_controller' => 'App\\Controller\\Admin\\EnseignantController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/instructors/requests' => [[['_route' => 'app_admin_enseignant_request', '_controller' => 'App\\Controller\\Admin\\EnseignantController::request'], null, ['GET' => 0], null, false, false, null]],
        '/admin/instructors/new' => [[['_route' => 'app_admin_enseignant_new', '_controller' => 'App\\Controller\\Admin\\EnseignantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/schools' => [[['_route' => 'app_admin_etablissement_index', '_controller' => 'App\\Controller\\Admin\\EtablissementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/schools/new' => [[['_route' => 'app_admin_etablissement_new', '_controller' => 'App\\Controller\\Admin\\EtablissementController::new'], null, ['POST' => 0], null, false, false, null]],
        '/admin/evaluation' => [[['_route' => 'app_admin_evaluation_index', '_controller' => 'App\\Controller\\Admin\\EvaluationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/evaluation/new' => [[['_route' => 'app_admin_evaluation_new', '_controller' => 'App\\Controller\\Admin\\EvaluationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/exam' => [[['_route' => 'app_admin_exam', '_controller' => 'App\\Controller\\Admin\\ExamController::index'], null, null, null, false, false, null]],
        '/admin/f/a/q' => [[['_route' => 'app_admin_f_a_q_index', '_controller' => 'App\\Controller\\Admin\\FAQController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/f/a/q/new' => [[['_route' => 'app_admin_f_a_q_new', '_controller' => 'App\\Controller\\Admin\\FAQController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/filiere' => [[['_route' => 'app_admin_filiere_index', '_controller' => 'App\\Controller\\Admin\\FiliereController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/filiere/new' => [[['_route' => 'app_admin_filiere_new', '_controller' => 'App\\Controller\\Admin\\FiliereController::new'], null, ['POST' => 0], null, false, false, null]],
        '/admin/formation' => [[['_route' => 'app_admin_formation_index', '_controller' => 'App\\Controller\\Admin\\FormationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/formation/new' => [[['_route' => 'app_admin_formation_new', '_controller' => 'App\\Controller\\Admin\\FormationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/forum' => [[['_route' => 'app_forum_index', '_controller' => 'App\\Controller\\Admin\\ForumController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/forum/new' => [[['_route' => 'app_forum_new', '_controller' => 'App\\Controller\\Admin\\ForumController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/media' => [[['_route' => 'app_media_index', '_controller' => 'App\\Controller\\Admin\\MediaController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/media/new' => [[['_route' => 'app_media_new', '_controller' => 'App\\Controller\\Admin\\MediaController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/network/config' => [[['_route' => 'app_admin_network_config_index', '_controller' => 'App\\Controller\\Admin\\NetworkConfigController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/network/config/new' => [[['_route' => 'app_admin_network_config_new', '_controller' => 'App\\Controller\\Admin\\NetworkConfigController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/notification/template' => [[['_route' => 'app_admin_notification_template_index', '_controller' => 'App\\Controller\\Admin\\NotificationTemplateController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/notification/template/new' => [[['_route' => 'app_admin_notification_template_new', '_controller' => 'App\\Controller\\Admin\\NotificationTemplateController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/pays' => [[['_route' => 'app_admin_pays_index', '_controller' => 'App\\Controller\\Admin\\PaysController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/pays/new' => [[['_route' => 'app_admin_pays_new', '_controller' => 'App\\Controller\\Admin\\PaysController::new'], null, ['POST' => 0], null, false, false, null]],
        '/admin/personne' => [[['_route' => 'app_personne_index', '_controller' => 'App\\Controller\\Admin\\PersonneController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/personne/new' => [[['_route' => 'app_personne_new', '_controller' => 'App\\Controller\\Admin\\PersonneController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/proposition' => [[['_route' => 'app_proposition_index', '_controller' => 'App\\Controller\\Admin\\PropositionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/proposition/new' => [[['_route' => 'app_proposition_new', '_controller' => 'App\\Controller\\Admin\\PropositionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/quiz' => [[['_route' => 'app_quiz_index', '_controller' => 'App\\Controller\\Admin\\QuizController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/quiz/new' => [[['_route' => 'app_quiz_new', '_controller' => 'App\\Controller\\Admin\\QuizController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/users' => [[['_route' => 'app_admin_registration', '_controller' => 'App\\Controller\\Admin\\RegistrationController::index'], null, null, null, true, false, null]],
        '/admin/users/register' => [[['_route' => 'app_admin_registration_register', '_controller' => 'App\\Controller\\Admin\\RegistrationController::register'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/admin/setting' => [[['_route' => 'app_admin_setting', '_controller' => 'App\\Controller\\Admin\\SettingController::index'], null, null, null, false, false, null]],
        '/admin/sous/systeme' => [[['_route' => 'app_admin_sous_systeme_index', '_controller' => 'App\\Controller\\Admin\\SousSystemeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/sous/systeme/new' => [[['_route' => 'app_admin_sous_systeme_new', '_controller' => 'App\\Controller\\Admin\\SousSystemeController::new'], null, ['POST' => 0], null, false, false, null]],
        '/admin/specialite' => [[['_route' => 'app_admin_specialite_index', '_controller' => 'App\\Controller\\Admin\\SpecialiteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/specialite/new' => [[['_route' => 'app_admin_specialite_new', '_controller' => 'App\\Controller\\Admin\\SpecialiteController::new'], null, ['POST' => 0], null, false, false, null]],
        '/admin/sujet' => [[['_route' => 'app_admin_sujet_index', '_controller' => 'App\\Controller\\Admin\\SujetController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/sujet/new' => [[['_route' => 'app_admin_sujet_new', '_controller' => 'App\\Controller\\Admin\\SujetController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/term' => [[['_route' => 'app_admin_term_index', '_controller' => 'App\\Controller\\Admin\\TermController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/term/new' => [[['_route' => 'app_admin_term_new', '_controller' => 'App\\Controller\\Admin\\TermController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/type/enseignement' => [[['_route' => 'app_admin_type_enseignement_index', '_controller' => 'App\\Controller\\Admin\\TypeEnseignementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/type/enseignement/new' => [[['_route' => 'app_admin_type_enseignement_new', '_controller' => 'App\\Controller\\Admin\\TypeEnseignementController::new'], null, ['POST' => 0], null, false, false, null]],
        '/api/login' => [[['_route' => 'api_login', '_controller' => 'App\\Controller\\Api\\Controller\\SecurityController::login'], null, ['POST' => 0], null, false, false, null]],
        '/courses' => [[['_route' => 'app_front_courses', '_controller' => 'App\\Controller\\Front\\CoursesController::index'], null, null, null, false, false, null]],
        '/course/reply-forum-message' => [[['_route' => 'app_course_reply_forum_message', '_controller' => 'App\\Controller\\Front\\CoursesController::replyForumMessage'], null, ['POST' => 0], null, false, false, null]],
        '/evaluations/evaluation' => [[['_route' => 'app_front_evaluation', '_controller' => 'App\\Controller\\Front\\EvaluationController::index'], null, null, null, false, false, null]],
        '/exams' => [[['_route' => 'app_front_exam_index', '_controller' => 'App\\Controller\\Front\\ExamController::index'], null, null, null, false, false, null]],
        '/frequenly-ask-questions' => [[['_route' => 'app_front_faq', '_controller' => 'App\\Controller\\Front\\FaqController::index'], null, null, null, true, false, null]],
        '/forum' => [[['_route' => 'app_front_forum_index', '_controller' => 'App\\Controller\\Front\\ForumController::index'], null, null, null, true, false, null]],
        '/payment' => [[['_route' => 'app_front_payment', '_controller' => 'App\\Controller\\Front\\PaymentController::index'], null, null, null, true, false, null]],
        '/courses-categories' => [[['_route' => 'app_front_courses_category', '_controller' => 'App\\Controller\\Front\\coursesCategoryController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_front', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/about-us' => [[['_route' => 'app_front_about', '_controller' => 'App\\Controller\\FrontController::about'], null, null, null, false, false, null]],
        '/contact-us' => [[['_route' => 'app_front_contact', '_controller' => 'App\\Controller\\FrontController::contact'], null, null, null, false, false, null]],
        '/header-categories' => [[['_route' => 'app_front_header_categories', '_controller' => 'App\\Controller\\FrontController::showHeaderCategories'], null, null, null, false, false, null]],
        '/header-courses' => [[['_route' => 'app_front_header_courses_and_formations', '_controller' => 'App\\Controller\\FrontController::showHeaderCourses'], null, null, null, false, false, null]],
        '/subscriptions-plans' => [[['_route' => 'app_plan', '_controller' => 'App\\Controller\\FrontController::plan'], null, null, null, false, false, null]],
        '/become-teacher' => [[['_route' => 'app_become_teacher', '_controller' => 'App\\Controller\\FrontController::becomeTeacher'], null, null, null, false, false, null]],
        '/i/instructor/orders' => [[['_route' => 'app_i_instructor_orders', '_controller' => 'App\\Controller\\IInstructor\\OrdersController::index'], null, null, null, false, false, null]],
        '/instructor/courses' => [[['_route' => 'app_instructor_courses', '_controller' => 'App\\Controller\\Instructor\\CoursesController::index'], null, null, null, true, false, null]],
        '/instructor/courses/new' => [[['_route' => 'app_instructor_courses_new', '_controller' => 'App\\Controller\\Instructor\\CoursesController::edit'], null, null, null, false, false, null]],
        '/instructor/courses/add-chap' => [[['_route' => 'app_instructor_add_chap', '_controller' => 'App\\Controller\\Instructor\\CoursesController::addChap'], null, ['POST' => 0], null, false, false, null]],
        '/instructor/courses/add-lesson' => [[['_route' => 'app_instructor_add_lesson', '_controller' => 'App\\Controller\\Instructor\\CoursesController::addLesson'], null, ['POST' => 0], null, false, false, null]],
        '/instructor/courses/add-faq' => [[['_route' => 'app_instructor_add_faq', '_controller' => 'App\\Controller\\Instructor\\CoursesController::addFAQ'], null, ['POST' => 0], null, false, false, null]],
        '/instructor/exam' => [[['_route' => 'app_instructor_exam_index', '_controller' => 'App\\Controller\\Instructor\\ExamController::index'], null, ['GET' => 0], null, true, false, null]],
        '/instructor/exam/new' => [[['_route' => 'app_instructor_exam_new', '_controller' => 'App\\Controller\\Instructor\\ExamController::edit'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/instructor' => [[['_route' => 'app_instructor_home', '_controller' => 'App\\Controller\\Instructor\\HomeController::index'], null, null, null, false, false, null]],
        '/lesson' => [[['_route' => 'app_lesson_index', '_controller' => 'App\\Controller\\Instructor\\LessonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/lesson/new' => [[['_route' => 'app_lesson_new', '_controller' => 'App\\Controller\\Instructor\\LessonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/instructor/network' => [[['_route' => 'app_instructor_network', '_controller' => 'App\\Controller\\Instructor\\NetworkController::index'], null, null, null, false, false, null]],
        '/instructor/retrait/new' => [[['_route' => 'app_instructor_network_retrait', '_controller' => 'App\\Controller\\Instructor\\NetworkController::retirer'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/instructor/retraits' => [[['_route' => 'app_instructor_network_retraits', '_controller' => 'App\\Controller\\Instructor\\NetworkController::retraits'], null, ['GET' => 0], null, false, false, null]],
        '/instructor/orders' => [[['_route' => 'app_instructor_orders_index', '_controller' => 'App\\Controller\\Instructor\\OrdersController::index'], null, null, null, true, false, null]],
        '/instructor/reviews' => [[['_route' => 'app_instructor_reviews', '_controller' => 'App\\Controller\\Instructor\\ReviewsController::index'], null, null, null, false, false, null]],
        '/maintenance' => [[['_route' => 'app_maintenance', '_controller' => 'App\\Controller\\MaintenanceController::index'], null, null, null, false, false, null]],
        '/api/pay/callback' => [[['_route' => 'app_payment_callback', '_controller' => 'App\\Controller\\PaymentControllers::handleCallback'], null, ['GET' => 0], null, false, false, null]],
        '/api/pay/email' => [[['_route' => 'balance', '_controller' => 'App\\Controller\\PaymentControllers::emailSender'], null, ['POST' => 0], null, false, false, null]],
        '/student/profile' => [[['_route' => 'app_student_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/instructor/profile' => [[['_route' => 'app_instructor_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/admin/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/student/profile/edit' => [[['_route' => 'app_student_profile_edit', '_controller' => 'App\\Controller\\ProfileController::editPersonnalInformations'], null, ['POST' => 0], null, false, false, null]],
        '/instructor/profile/edit' => [[['_route' => 'app_instructor_profile_edit', '_controller' => 'App\\Controller\\ProfileController::editPersonnalInformations'], null, ['POST' => 0], null, false, false, null]],
        '/admin/profile/edit' => [[['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\ProfileController::editPersonnalInformations'], null, ['POST' => 0], null, false, false, null]],
        '/student/profile/change-email' => [[['_route' => 'app_student_profile_change_email', '_controller' => 'App\\Controller\\ProfileController::changeEmail'], null, ['POST' => 0], null, false, false, null]],
        '/instructor/profile/change-email' => [[['_route' => 'app_instructor_profile_change_email', '_controller' => 'App\\Controller\\ProfileController::changeEmail'], null, ['POST' => 0], null, false, false, null]],
        '/admin/profile/change-email' => [[['_route' => 'app_profile_change_email', '_controller' => 'App\\Controller\\ProfileController::changeEmail'], null, ['POST' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_front_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/verify/email' => [[['_route' => 'app_verify_email', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmail'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/student/courses' => [[['_route' => 'app_student_courses', '_controller' => 'App\\Controller\\Student\\CourseController::index'], null, null, null, false, false, null]],
        '/student/evaluation' => [[['_route' => 'app_student_evaluation', '_controller' => 'App\\Controller\\Student\\EvaluationController::index'], null, null, null, false, false, null]],
        '/student/home' => [[['_route' => 'app_student_home', '_controller' => 'App\\Controller\\Student\\HomeController::index'], null, null, null, false, false, null]],
        '/student/network' => [[['_route' => 'app_student_network', '_controller' => 'App\\Controller\\Student\\NetworkController::index'], null, null, null, false, false, null]],
        '/student/payment-list' => [[['_route' => 'app_student_payments', '_controller' => 'App\\Controller\\Student\\PaymentController::index'], null, null, null, false, false, null]],
        '/student/subscriptions' => [[['_route' => 'app_student_subscriptions', '_controller' => 'App\\Controller\\Student\\PaymentController::subscriptions'], null, null, null, false, false, null]],
        '/home' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/add-defaul-courses' => [[['_route' => 'app_add_def_courses', '_controller' => 'App\\Controller\\HomeController::courses'], null, null, null, false, false, null]],
        '/send-mail' => [[['_route' => 'app_home_send_mail', '_controller' => 'App\\Controller\\HomeController::sendMail'], null, null, null, false, false, null]],
        '/terms-and-conditions' => [[['_route' => 'app_terms', '_controller' => 'App\\Controller\\TermsController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|pi(?'
                        .'|/\\.well\\-known/genid/([^/]++)(*:46)'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:81)'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:111)'
                            .'|c(?'
                                .'|o(?'
                                    .'|ntexts/([^.]+)(?:\\.(jsonld))?(*:156)'
                                    .'|urs(?'
                                        .'|(?:\\.([^/]++))?(*:185)'
                                        .'|/([^/]++)/(?'
                                            .'|details(*:213)'
                                            .'|start(*:226)'
                                            .'|quizzes(*:241)'
                                            .'|f(?'
                                                .'|aqs(*:256)'
                                                .'|orum(*:268)'
                                            .')'
                                            .'|paied(*:282)'
                                        .')'
                                    .')'
                                .')'
                                .'|ategories(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:331)'
                                    .'|(?:\\.([^/]++))?(*:354)'
                                .')'
                                .'|hapitre(?'
                                    .'|s/([^/\\.]++)(?:\\.([^/]++))?(*:400)'
                                    .'|/([^/]++)/(?'
                                        .'|quizzes(*:428)'
                                        .'|results(*:443)'
                                        .'|submit/quizzes\\-form(*:471)'
                                    .')'
                                .')'
                                .'|lasses(?'
                                    .'|(?:\\.([^/]++))?(*:505)'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:539)'
                                .')'
                            .')'
                            .'|abonnement(?'
                                .'|s(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:592)'
                                    .'|(?:\\.([^/]++))?(*:615)'
                                .')'
                                .'|/([^/]++)/subscribe(*:643)'
                            .')'
                            .'|s(?'
                                .'|tudent/([^/]++)/(?'
                                    .'|courses(*:682)'
                                    .'|lectures(*:698)'
                                    .'|finished\\-lectures(*:724)'
                                    .'|payments(*:740)'
                                .')'
                                .'|ujet(?'
                                    .'|/([^/]++)/(?'
                                        .'|m(?'
                                            .'|essages(*:780)'
                                            .'|ark\\-solved(*:799)'
                                        .')'
                                        .'|new(*:811)'
                                    .')'
                                    .'|s(?'
                                        .'|(?:\\.([^/]++))?(*:839)'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:873)'
                                    .')'
                                .')'
                                .'|kill_levels(?'
                                    .'|(?:\\.([^/]++))?(*:912)'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:946)'
                                .')'
                                .'|ous_systemes(?'
                                    .'|(?:\\.([^/]++))?(*:985)'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1019)'
                                .')'
                                .'|pecialites(?'
                                    .'|(?:\\.([^/]++))?(*:1057)'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1092)'
                                .')'
                            .')'
                            .'|e(?'
                                .'|tablissements(?'
                                    .'|(?:\\.([^/]++))?(*:1138)'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1173)'
                                .')'
                                .'|valuations/(?'
                                    .'|([^/]++)/list(*:1210)'
                                    .'|student/([^/]++)(*:1235)'
                                    .'|([^/]++)/(?'
                                        .'|inscription(*:1267)'
                                        .'|questionnaire(*:1289)'
                                        .'|corrige(*:1305)'
                                        .'|resultat(*:1322)'
                                    .')'
                                .')'
                                .'|xams(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1366)'
                                    .'|(?:\\.([^/]++))?(*:1390)'
                                .')'
                            .')'
                            .'|f(?'
                                .'|_a_qs/([^/\\.]++)(?:\\.([^/]++))?(*:1436)'
                                .'|ilieres(?'
                                    .'|(?:\\.([^/]++))?(*:1470)'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1505)'
                                .')'
                                .'|orum(?'
                                    .'|s/([^/\\.]++)(?:\\.([^/]++))?(*:1549)'
                                    .'|_message(?'
                                        .'|s/([^/\\.]++)(?:\\.([^/]++))?(*:1596)'
                                        .'|/([^/]++)/(?'
                                            .'|like(*:1622)'
                                            .'|repondre(*:1639)'
                                        .')'
                                    .')'
                                    .'|\\-message/([^/]++)/new\\-message(*:1681)'
                                    .'|/([^/]++)/subjects(*:1708)'
                                .')'
                            .')'
                            .'|le(?'
                                .'|cture(?'
                                    .'|s/([^/\\.]++)(?:\\.([^/]++))?(*:1759)'
                                    .'|/([^/]++)/finished(*:1786)'
                                .')'
                                .'|ssons(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1830)'
                                    .'|(?:\\.([^/]++))?(*:1854)'
                                .')'
                            .')'
                            .'|notifications(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1907)'
                                .'|(?:\\.([^/]++))?(*:1931)'
                            .')'
                            .'|p(?'
                                .'|ay(?'
                                    .'|ment(?'
                                        .'|s(?'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:1987)'
                                            .'|(?:\\.([^/]++))?(*:2011)'
                                        .')'
                                        .'|_methods(?'
                                            .'|(?:\\.([^/]++))?(*:2047)'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:2082)'
                                        .')'
                                    .')'
                                    .'|s(?'
                                        .'|(?:\\.([^/]++))?(*:2112)'
                                        .'|/([^/\\.]++)(?:\\.([^/]++))?(*:2147)'
                                    .')'
                                .')'
                                .'|ost/([^/]++)/avatar(*:2177)'
                                .'|ersonne(?'
                                    .'|s/([^/\\.]++)(?:\\.([^/]++))?(*:2223)'
                                    .'|/([^/]++)/network(*:2249)'
                                .')'
                            .')'
                            .'|quiz(?'
                                .'|zes(?'
                                    .'|(?:\\.([^/]++))?(*:2288)'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:2323)'
                                .')'
                                .'|_results(?'
                                    .'|(?:\\.([^/]++))?(*:2359)'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:2397)'
                                    .')'
                                .')'
                            .')'
                            .'|review(?'
                                .'|s(?'
                                    .'|(?:\\.([^/]++))?(*:2437)'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:2472)'
                                .')'
                                .'|/([^/]++)/(?'
                                    .'|course(*:2501)'
                                    .'|new(*:2513)'
                                .')'
                            .')'
                            .'|type_enseignements(?'
                                .'|(?:\\.([^/]++))?(*:2560)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:2595)'
                            .')'
                            .'|users(?'
                                .'|(?:\\.([^/]++))?(*:2628)'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:2666)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|dmin/(?'
                        .'|abonnement/(?'
                            .'|([^/]++)(?'
                                .'|(*:2712)'
                                .'|/edit(*:2726)'
                                .'|(*:2735)'
                            .')'
                            .'|item(?'
                                .'|(*:2752)'
                                .'|/([^/]++)(?'
                                    .'|(*:2773)'
                                    .'|/edit(*:2787)'
                                    .'|(*:2796)'
                                .')'
                            .')'
                        .')'
                        .'|c(?'
                            .'|ategorie/([^/]++)(?'
                                .'|(*:2832)'
                                .'|/edit(*:2846)'
                                .'|(*:2855)'
                            .')'
                            .'|hapitre/([^/]++)(?'
                                .'|(*:2884)'
                                .'|/edit(*:2898)'
                                .'|(*:2907)'
                            .')'
                            .'|lasse/([^/]++)(?'
                                .'|(*:2934)'
                                .'|/edit(*:2948)'
                                .'|(*:2957)'
                            .')'
                            .'|ours/([^/]++)(?'
                                .'|(*:2983)'
                                .'|/(?'
                                    .'|approve\\-course(*:3011)'
                                    .'|re(?'
                                        .'|jected\\-course(*:3039)'
                                        .'|move\\-review(*:3060)'
                                    .')'
                                    .'|edit(*:3074)'
                                .')'
                                .'|(*:3084)'
                            .')'
                        .')'
                        .'|s(?'
                            .'|tudents/([^/]++)(?'
                                .'|(*:3118)'
                                .'|/(?'
                                    .'|edit(*:3135)'
                                    .'|block(*:3149)'
                                .')'
                                .'|(*:3159)'
                            .')'
                            .'|chools/([^/]++)(?'
                                .'|(*:3187)'
                                .'|/edit(*:3201)'
                                .'|(*:3210)'
                            .')'
                            .'|ous/systeme/([^/]++)(?'
                                .'|(*:3243)'
                                .'|/(?'
                                    .'|edit(*:3260)'
                                    .'|delete(*:3275)'
                                .')'
                            .')'
                            .'|pecialite/([^/]++)/(?'
                                .'|show(*:3312)'
                                .'|edit(*:3325)'
                                .'|delete(*:3340)'
                            .')'
                            .'|ujet/([^/]++)(?'
                                .'|(*:3366)'
                                .'|/edit(*:3380)'
                                .'|(*:3389)'
                            .')'
                        .')'
                        .'|instructors/(?'
                            .'|request/([^/]++)/(?'
                                .'|accept(*:3441)'
                                .'|reject(*:3456)'
                            .')'
                            .'|([^/]++)(?'
                                .'|(*:3477)'
                                .'|/edit(*:3491)'
                                .'|(*:3500)'
                            .')'
                        .')'
                        .'|e(?'
                            .'|valuation/(?'
                                .'|([^/]++)(?'
                                    .'|(*:3539)'
                                    .'|/edit(*:3553)'
                                    .'|(*:3562)'
                                .')'
                                .'|questions/([^/]++)(?'
                                    .'|(*:3593)'
                                    .'|/(?'
                                        .'|new(*:3609)'
                                        .'|edit(*:3622)'
                                    .')'
                                    .'|(*:3632)'
                                .')'
                            .')'
                            .'|xam/([^/]++)/(?'
                                .'|remove(*:3665)'
                                .'|approve(*:3681)'
                            .')'
                        .')'
                        .'|f(?'
                            .'|/a/q/([^/]++)(?'
                                .'|(*:3712)'
                                .'|/edit(*:3726)'
                                .'|(*:3735)'
                            .')'
                            .'|iliere/([^/]++)/(?'
                                .'|show(*:3768)'
                                .'|edit(*:3781)'
                                .'|delete(*:3796)'
                            .')'
                            .'|or(?'
                                .'|mation/([^/]++)(?'
                                    .'|(*:3829)'
                                    .'|/edit(*:3843)'
                                    .'|(*:3852)'
                                .')'
                                .'|um/([^/]++)(?'
                                    .'|(*:3876)'
                                    .'|/(?'
                                        .'|edit(*:3893)'
                                        .'|messages(?'
                                            .'|(*:3913)'
                                            .'|/(?'
                                                .'|new(*:3929)'
                                                .'|([^/]++)(?'
                                                    .'|(*:3949)'
                                                    .'|/edit(*:3963)'
                                                    .'|(*:3972)'
                                                .')'
                                            .')'
                                        .')'
                                    .')'
                                    .'|(*:3985)'
                                .')'
                            .')'
                        .')'
                        .'|media/([^/]++)(?'
                            .'|(*:4014)'
                            .'|/edit(*:4028)'
                            .'|(*:4037)'
                        .')'
                        .'|n(?'
                            .'|etwork/config/([^/]++)(?'
                                .'|(*:4076)'
                                .'|/edit(*:4090)'
                                .'|(*:4099)'
                            .')'
                            .'|otification/template/([^/]++)(?'
                                .'|(*:4141)'
                                .'|/edit(*:4155)'
                                .'|(*:4164)'
                            .')'
                        .')'
                        .'|p(?'
                            .'|ays/([^/]++)(?'
                                .'|(*:4194)'
                                .'|/edit(*:4208)'
                                .'|(*:4217)'
                            .')'
                            .'|ersonne/([^/]++)(?'
                                .'|(*:4246)'
                                .'|/edit(*:4260)'
                                .'|(*:4269)'
                            .')'
                            .'|roposition/([^/]++)(?'
                                .'|(*:4301)'
                                .'|/edit(*:4315)'
                                .'|(*:4324)'
                            .')'
                        .')'
                        .'|quiz/([^/]++)(?'
                            .'|(*:4351)'
                            .'|/edit(*:4365)'
                            .'|(*:4374)'
                        .')'
                        .'|users/(?'
                            .'|register/([^/]++)(*:4410)'
                            .'|([^/]++)(?'
                                .'|(*:4430)'
                                .'|/(?'
                                    .'|block(*:4448)'
                                    .'|unblock(*:4464)'
                                    .'|activated(*:4482)'
                                .')'
                            .')'
                        .')'
                        .'|t(?'
                            .'|erm/([^/]++)(?'
                                .'|(*:4513)'
                                .'|/edit(*:4527)'
                                .'|(*:4536)'
                            .')'
                            .'|ype/enseignement/([^/]++)(?'
                                .'|(*:4574)'
                                .'|/edit(*:4588)'
                                .'|(*:4597)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/e(?'
                    .'|fconnect(?:/([^/]++)(?:/([^/]++))?)?(*:4651)'
                    .'|lfinder(?:/([^/]++)(?:/([^/]++))?)?(*:4695)'
                    .'|valuations/([^/]++)/(?'
                        .'|s\\-inscrire(*:4738)'
                        .'|hide\\-annonce(*:4760)'
                        .'|composer(*:4777)'
                        .'|resultats(*:4795)'
                    .')'
                    .'|xam/([^/]++)/show(*:4822)'
                .')'
                .'|/js/routing(?:\\.(js|json))?(*:4859)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:4899)'
                    .'|wdt/([^/]++)(*:4920)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:4967)'
                            .'|router(*:4982)'
                            .'|exception(?'
                                .'|(*:5003)'
                                .'|\\.css(*:5017)'
                            .')'
                        .')'
                        .'|(*:5028)'
                    .')'
                .')'
                .'|/c(?'
                    .'|ourse(?'
                        .'|\\-forum/([^/]++)(?'
                            .'|(*:5071)'
                            .'|/([^/]++)(*:5089)'
                        .')'
                        .'|s/([^/]++)(?'
                            .'|(*:5112)'
                            .'|/details(*:5129)'
                        .')'
                        .'|/([^/]++)/(?'
                            .'|review(*:5158)'
                            .'|([^/]++)/(?'
                                .'|forum(*:5184)'
                                .'|post\\-forum\\-message(*:5213)'
                            .')'
                            .'|l(?'
                                .'|ike\\-forum\\-message(*:5246)'
                                .'|e(?'
                                    .'|sson(*:5263)'
                                    .'|cture/finished(*:5286)'
                                .')'
                            .')'
                            .'|mark\\-solve(*:5308)'
                            .'|start(*:5322)'
                            .'|([^/]++)/quizzes(*:5347)'
                            .'|quizzes(*:5363)'
                        .')'
                    .')'
                    .'|hange\\-locale/([^/]++)(*:5396)'
                .')'
                .'|/forum/([^/]++)(*:5421)'
                .'|/payment/(?'
                    .'|course/([^/]++)/buy(*:5461)'
                    .'|abonnement/([^/]++)/subscribe(*:5499)'
                .')'
                .'|/instructor/(?'
                    .'|forum/([^/]++)(?'
                        .'|(*:5541)'
                        .'|/(?'
                            .'|([^/]++)/subject\\-messages(*:5580)'
                            .'|delete(?'
                                .'|(*:5598)'
                                .'|\\-message(*:5616)'
                            .')'
                        .')'
                    .')'
                    .'|courses(?'
                        .'|/([^/]++)/(?'
                            .'|preview(*:5658)'
                            .'|edit(?'
                                .'|(*:5674)'
                                .'|\\-quiz(*:5689)'
                            .')'
                            .'|quizzes(*:5706)'
                            .'|final\\-quizzes(*:5729)'
                            .'|delete(?'
                                .'|(*:5747)'
                                .'|\\-(?'
                                    .'|faq(*:5764)'
                                    .'|lesson(*:5779)'
                                    .'|chapitre(*:5796)'
                                .')'
                            .')'
                            .'|remove\\-quiz(*:5819)'
                        .')'
                        .'|([^/]++)/published(*:5847)'
                    .')'
                    .'|exam(?'
                        .'|([^/]++)/edit(*:5877)'
                        .'|/([^/]++)/(?'
                            .'|published(*:5908)'
                            .'|remove(*:5923)'
                        .')'
                    .')'
                    .'|([^/]++)/reply(*:5948)'
                .')'
                .'|/lesson/([^/]++)(?'
                    .'|(*:5977)'
                    .'|/edit(*:5991)'
                    .'|(*:6000)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:6046)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        46 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], null, null, false, true, null]],
        81 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        111 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        156 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        185 => [[['_route' => '_api_/cours{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Cours', '_api_operation_name' => '_api_/cours{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        213 => [[['_route' => 'course_details', '_controller' => 'App\\Controller\\Api\\Controller\\Course\\DetailsController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Cours', '_api_operation_name' => 'course_details'], ['id'], ['GET' => 0], null, false, false, null]],
        226 => [[['_route' => '_api_/cours/{id}/start_get', '_controller' => 'App\\Controller\\Api\\Controller\\Course\\StartCourseController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Cours', '_api_operation_name' => '_api_/cours/{id}/start_get'], ['id'], ['GET' => 0], null, false, false, null]],
        241 => [[['_route' => '_api_/cours/{id}/quizzes_get', '_controller' => 'App\\Controller\\Api\\Controller\\Course\\ShowQuizzesController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Cours', '_api_operation_name' => '_api_/cours/{id}/quizzes_get'], ['id'], ['GET' => 0], null, false, false, null]],
        256 => [[['_route' => 'course_faq', '_controller' => 'App\\Controller\\Api\\Controller\\Faq\\FaqCourseController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\FAQ', '_api_operation_name' => 'course_faq'], ['id'], ['GET' => 0], null, false, false, null]],
        268 => [[['_route' => '_api_/cours/{id}/forum_get', '_controller' => 'App\\Controller\\Api\\Controller\\Course\\Forum\\CourseForum', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Forum', '_api_operation_name' => '_api_/cours/{id}/forum_get'], ['id'], ['GET' => 0], null, false, false, null]],
        282 => [[['_route' => '_api_/cours/{id}/paied_post', '_controller' => 'App\\Controller\\Api\\Controller\\Payment\\PayerCoursController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment', '_api_operation_name' => '_api_/cours/{id}/paied_post'], ['id'], ['POST' => 0], null, false, false, null]],
        331 => [[['_route' => '_api_/categories/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Categorie', '_api_operation_name' => '_api_/categories/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        354 => [[['_route' => '_api_/categories{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Categorie', '_api_operation_name' => '_api_/categories{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        400 => [[['_route' => '_api_/chapitres/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Chapitre', '_api_operation_name' => '_api_/chapitres/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        428 => [[['_route' => '_api_/chapitre/{id}/quizzes_get', '_controller' => 'App\\Controller\\Api\\Controller\\Course\\Chapter\\ShowQuizzesController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Chapitre', '_api_operation_name' => '_api_/chapitre/{id}/quizzes_get'], ['id'], ['GET' => 0], null, false, false, null]],
        443 => [[['_route' => '_api_/chapitre/{id}/results_get_collection', '_controller' => 'App\\Controller\\Api\\Controller\\Course\\Chapter\\ShowQuizzesResultList', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\QuizResult', '_api_operation_name' => '_api_/chapitre/{id}/results_get_collection'], ['id'], ['GET' => 0], null, false, false, null]],
        471 => [[['_route' => '_api_/chapitre/{id}/submit/quizzes-form_post', '_controller' => 'App\\Controller\\Api\\Controller\\Course\\Quiz\\PostController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\QuizResult', '_api_operation_name' => '_api_/chapitre/{id}/submit/quizzes-form_post'], ['id'], ['POST' => 0], null, false, false, null]],
        505 => [[['_route' => '_api_/classes{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Classe', '_api_operation_name' => '_api_/classes{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        539 => [[['_route' => '_api_/classes/{id}{._format}_get', '_controller' => 'api_platform.action.not_exposed', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Classe', '_api_operation_name' => '_api_/classes/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        592 => [[['_route' => '_api_/abonnements/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Abonnement', '_api_operation_name' => '_api_/abonnements/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        615 => [[['_route' => '_api_/abonnements{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Abonnement', '_api_operation_name' => '_api_/abonnements{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        643 => [[['_route' => '_api_/abonnement/{id}/subscribe_post', '_controller' => 'App\\Controller\\Api\\Controller\\Payment\\PayerAbonnementController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment', '_api_operation_name' => '_api_/abonnement/{id}/subscribe_post'], ['id'], ['POST' => 0], null, false, false, null]],
        682 => [[['_route' => '_api_/student/{id}/courses_get_collection', '_controller' => 'App\\Controller\\Api\\Controller\\Course\\StudentCourseController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Cours', '_api_operation_name' => '_api_/student/{id}/courses_get_collection'], ['id'], ['GET' => 0], null, false, false, null]],
        698 => [[['_route' => '_api_/student/{id}/lectures_get_collection', '_controller' => 'App\\Controller\\Api\\Controller\\Course\\StudentLectureController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Lecture', '_api_operation_name' => '_api_/student/{id}/lectures_get_collection'], ['id'], ['GET' => 0], null, false, false, null]],
        724 => [[['_route' => '_api_/student/{id}/finished-lectures_get_collection', '_controller' => 'App\\Controller\\Api\\Controller\\Course\\Lesson\\FinishedLectures', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Lecture', '_api_operation_name' => '_api_/student/{id}/finished-lectures_get_collection'], ['id'], ['GET' => 0], null, false, false, null]],
        740 => [[['_route' => '_api_/student/{id}/payments_get_collection', '_controller' => 'App\\Controller\\Api\\Controller\\Payment\\StudentPaymentController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment', '_api_operation_name' => '_api_/student/{id}/payments_get_collection'], ['id'], ['GET' => 0], null, false, false, null]],
        780 => [[['_route' => '_api_/sujet/{id}/messages_get_collection', '_controller' => 'App\\Controller\\Api\\Controller\\Course\\Forum\\SubjectMessages', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\ForumMessage', '_api_operation_name' => '_api_/sujet/{id}/messages_get_collection'], ['id'], ['GET' => 0], null, false, false, null]],
        799 => [[['_route' => '_api_/sujet/{id}/mark-solved_put', '_controller' => 'App\\Controller\\Api\\Controller\\Course\\Forum\\SujetResoluController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Sujet', '_api_operation_name' => '_api_/sujet/{id}/mark-solved_put'], ['id'], ['PUT' => 0], null, false, false, null]],
        811 => [[['_route' => '_api_/sujet/{id}/new_post', '_controller' => 'App\\Controller\\Api\\Controller\\Course\\Forum\\PostSubjectController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Sujet', '_api_operation_name' => '_api_/sujet/{id}/new_post'], ['id'], ['POST' => 0], null, false, false, null]],
        839 => [[['_route' => '_api_/sujets{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Sujet', '_api_operation_name' => '_api_/sujets{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        873 => [[['_route' => '_api_/sujets/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Sujet', '_api_operation_name' => '_api_/sujets/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        912 => [[['_route' => '_api_/skill_levels{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\SkillLevel', '_api_operation_name' => '_api_/skill_levels{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        946 => [[['_route' => '_api_/skill_levels/{id}{._format}_get', '_controller' => 'api_platform.action.not_exposed', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\SkillLevel', '_api_operation_name' => '_api_/skill_levels/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        985 => [[['_route' => '_api_/sous_systemes{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\SousSysteme', '_api_operation_name' => '_api_/sous_systemes{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        1019 => [[['_route' => '_api_/sous_systemes/{id}{._format}_get', '_controller' => 'api_platform.action.not_exposed', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\SousSysteme', '_api_operation_name' => '_api_/sous_systemes/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1057 => [[['_route' => '_api_/specialites{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Specialite', '_api_operation_name' => '_api_/specialites{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        1092 => [[['_route' => '_api_/specialites/{id}{._format}_get', '_controller' => 'api_platform.action.not_exposed', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Specialite', '_api_operation_name' => '_api_/specialites/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1138 => [[['_route' => '_api_/etablissements{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Etablissement', '_api_operation_name' => '_api_/etablissements{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        1173 => [[['_route' => '_api_/etablissements/{id}{._format}_get', '_controller' => 'api_platform.action.not_exposed', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Etablissement', '_api_operation_name' => '_api_/etablissements/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1210 => [[['_route' => '_api_/evaluations/{id}/list_get_collection', '_controller' => 'App\\Controller\\Api\\Controller\\Evaluation\\ListController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Evaluation', '_api_operation_name' => '_api_/evaluations/{id}/list_get_collection'], ['id'], ['GET' => 0], null, false, false, null]],
        1235 => [[['_route' => '_api_/evaluations/student/{id}_get_collection', '_controller' => 'App\\Controller\\Api\\Controller\\Evaluation\\EvaluationsEleve', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Evaluation', '_api_operation_name' => '_api_/evaluations/student/{id}_get_collection'], ['id'], ['GET' => 0], null, false, true, null]],
        1267 => [[['_route' => '_api_/evaluations/{id}/inscription_post', '_controller' => 'App\\Controller\\Api\\Controller\\Evaluation\\InscriptionController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Evaluation', '_api_operation_name' => '_api_/evaluations/{id}/inscription_post'], ['id'], ['POST' => 0], null, false, false, null]],
        1289 => [[['_route' => '_api_/evaluations/{id}/questionnaire_get', '_controller' => 'App\\Controller\\Api\\Controller\\Evaluation\\QuestionnaireController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Evaluation', '_api_operation_name' => '_api_/evaluations/{id}/questionnaire_get'], ['id'], ['GET' => 0], null, false, false, null]],
        1305 => [[['_route' => '_api_/evaluations/{id}/corrige_post', '_controller' => 'App\\Controller\\Api\\Controller\\Evaluation\\PostCorrectionController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Evaluation', '_api_operation_name' => '_api_/evaluations/{id}/corrige_post'], ['id'], ['POST' => 0], null, false, false, null]],
        1322 => [[['_route' => '_api_/evaluations/{id}/resultat_get', '_controller' => 'App\\Controller\\Api\\Controller\\Evaluation\\ResultatController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Evaluation', '_api_operation_name' => '_api_/evaluations/{id}/resultat_get'], ['id'], ['GET' => 0], null, false, false, null]],
        1366 => [[['_route' => '_api_/exams/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Exam', '_api_operation_name' => '_api_/exams/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1390 => [[['_route' => '_api_/exams{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Exam', '_api_operation_name' => '_api_/exams{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        1436 => [[['_route' => '_api_/f_a_qs/{id}{._format}_get', '_controller' => 'api_platform.action.not_exposed', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\FAQ', '_api_operation_name' => '_api_/f_a_qs/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1470 => [[['_route' => '_api_/filieres{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Filiere', '_api_operation_name' => '_api_/filieres{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        1505 => [[['_route' => '_api_/filieres/{id}{._format}_get', '_controller' => 'api_platform.action.not_exposed', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Filiere', '_api_operation_name' => '_api_/filieres/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1549 => [[['_route' => '_api_/forums/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Forum', '_api_operation_name' => '_api_/forums/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1596 => [[['_route' => '_api_/forum_messages/{id}{._format}_get', '_controller' => 'api_platform.action.not_exposed', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\ForumMessage', '_api_operation_name' => '_api_/forum_messages/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1622 => [[['_route' => '_api_/forum_message/{id}/like_put', '_controller' => 'App\\Controller\\Api\\Controller\\Course\\Forum\\LikeForumMessageController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\ForumMessage', '_api_operation_name' => '_api_/forum_message/{id}/like_put'], ['id'], ['PUT' => 0], null, false, false, null]],
        1639 => [[['_route' => '_api_/forum_message/{id}/repondre_post', '_controller' => 'App\\Controller\\Api\\Controller\\Course\\Forum\\AnswerForumMessage', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\ForumMessage', '_api_operation_name' => '_api_/forum_message/{id}/repondre_post'], ['id'], ['POST' => 0], null, false, false, null]],
        1681 => [[['_route' => '_api_/forum-message/{id}/new-message_post', '_controller' => 'App\\Controller\\Api\\Controller\\Course\\Forum\\NewForumMessage', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\ForumMessage', '_api_operation_name' => '_api_/forum-message/{id}/new-message_post'], ['id'], ['POST' => 0], null, false, false, null]],
        1708 => [[['_route' => '_api_/forum/{id}/subjects_get_collection', '_controller' => 'App\\Controller\\Api\\Controller\\Course\\Forum\\ForumSubjects', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Sujet', '_api_operation_name' => '_api_/forum/{id}/subjects_get_collection'], ['id'], ['GET' => 0], null, false, false, null]],
        1759 => [[['_route' => '_api_/lectures/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Lecture', '_api_operation_name' => '_api_/lectures/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1786 => [[['_route' => '_api_/lecture/{id}/finished_get', '_controller' => 'App\\Controller\\Api\\Controller\\Course\\Lesson\\FinishedController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Lecture', '_api_operation_name' => '_api_/lecture/{id}/finished_get'], ['id'], ['GET' => 0], null, false, false, null]],
        1830 => [[['_route' => '_api_/lessons/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Lesson', '_api_operation_name' => '_api_/lessons/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1854 => [[['_route' => '_api_/lessons{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Lesson', '_api_operation_name' => '_api_/lessons{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        1907 => [[['_route' => '_api_/notifications/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Notification', '_api_operation_name' => '_api_/notifications/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        1931 => [[['_route' => '_api_/notifications{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Notification', '_api_operation_name' => '_api_/notifications{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        1987 => [[['_route' => '_api_/payments/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment', '_api_operation_name' => '_api_/payments/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2011 => [[['_route' => '_api_/payments{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Payment', '_api_operation_name' => '_api_/payments{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        2047 => [[['_route' => '_api_/payment_methods{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\PaymentMethod', '_api_operation_name' => '_api_/payment_methods{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        2082 => [[['_route' => '_api_/payment_methods/{id}{._format}_get', '_controller' => 'api_platform.action.not_exposed', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\PaymentMethod', '_api_operation_name' => '_api_/payment_methods/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2112 => [[['_route' => '_api_/pays{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Pays', '_api_operation_name' => '_api_/pays{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        2147 => [[['_route' => '_api_/pays/{id}{._format}_get', '_controller' => 'api_platform.action.not_exposed', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Pays', '_api_operation_name' => '_api_/pays/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2177 => [[['_route' => '_api_/post/{id}/avatar_post', '_controller' => 'App\\Controller\\Api\\Controller\\User\\ChangeAvatarController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Personne', '_api_operation_name' => '_api_/post/{id}/avatar_post'], ['id'], ['POST' => 0], null, false, false, null]],
        2223 => [[['_route' => '_api_/personnes/{id}{._format}_get', '_controller' => 'api_platform.action.not_exposed', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Personne', '_api_operation_name' => '_api_/personnes/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2249 => [[['_route' => '_api_/personne/{id}/network_get_collection', '_controller' => 'App\\Controller\\Api\\Controller\\User\\NetworkController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Personne', '_api_operation_name' => '_api_/personne/{id}/network_get_collection'], ['id'], ['GET' => 0], null, false, false, null]],
        2288 => [[['_route' => '_api_/quizzes{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Quiz', '_api_operation_name' => '_api_/quizzes{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        2323 => [[['_route' => '_api_/quizzes/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Quiz', '_api_operation_name' => '_api_/quizzes/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2359 => [[['_route' => '_api_/quiz_results{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\QuizResult', '_api_operation_name' => '_api_/quiz_results{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        2397 => [
            [['_route' => '_api_/quiz_results/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\QuizResult', '_api_operation_name' => '_api_/quiz_results/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/quiz_results/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\QuizResult', '_api_operation_name' => '_api_/quiz_results/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        2437 => [[['_route' => '_api_/reviews{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Review', '_api_operation_name' => '_api_/reviews{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        2472 => [[['_route' => '_api_/reviews/{id}{._format}_get', '_controller' => 'api_platform.action.not_exposed', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Review', '_api_operation_name' => '_api_/reviews/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2501 => [[['_route' => '_api_review/{id}/course_get_collection', '_controller' => 'App\\Controller\\Api\\Controller\\Course\\Review\\CourseReviewController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Review', '_api_operation_name' => '_api_review/{id}/course_get_collection'], ['id'], ['GET' => 0], null, false, false, null]],
        2513 => [[['_route' => '_api_review/{id}/new_post', '_controller' => 'App\\Controller\\Api\\Controller\\Course\\Review\\PostReviewController', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Review', '_api_operation_name' => '_api_review/{id}/new_post'], ['id'], ['POST' => 0], null, false, false, null]],
        2560 => [[['_route' => '_api_/type_enseignements{._format}_get_collection', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\TypeEnseignement', '_api_operation_name' => '_api_/type_enseignements{._format}_get_collection'], ['_format'], ['GET' => 0], null, false, true, null]],
        2595 => [[['_route' => '_api_/type_enseignements/{id}{._format}_get', '_controller' => 'api_platform.action.not_exposed', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\TypeEnseignement', '_api_operation_name' => '_api_/type_enseignements/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        2628 => [[['_route' => '_api_/users{._format}_post', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users{._format}_post'], ['_format'], ['POST' => 0], null, false, true, null]],
        2666 => [
            [['_route' => '_api_/users/{id}{._format}_get', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/users/{id}{._format}_put', '_controller' => 'api_platform.action.placeholder', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_operation_name' => '_api_/users/{id}{._format}_put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        2712 => [[['_route' => 'app_admin_abonnement_show', '_controller' => 'App\\Controller\\Admin\\AbonnementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2726 => [[['_route' => 'app_admin_abonnement_edit', '_controller' => 'App\\Controller\\Admin\\AbonnementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2735 => [[['_route' => 'app_admin_abonnement_delete', '_controller' => 'App\\Controller\\Admin\\AbonnementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2752 => [[['_route' => 'app_admin_abonnement_item_index', '_controller' => 'App\\Controller\\Admin\\AbonnementItemController::index'], [], ['GET' => 0], null, true, false, null]],
        2773 => [[['_route' => 'app_admin_abonnement_item_show', '_controller' => 'App\\Controller\\Admin\\AbonnementItemController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2787 => [[['_route' => 'app_admin_abonnement_item_edit', '_controller' => 'App\\Controller\\Admin\\AbonnementItemController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2796 => [[['_route' => 'app_admin_abonnement_item_delete', '_controller' => 'App\\Controller\\Admin\\AbonnementItemController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2832 => [[['_route' => 'app_admin_categorie_show', '_controller' => 'App\\Controller\\Admin\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2846 => [[['_route' => 'app_admin_categorie_edit', '_controller' => 'App\\Controller\\Admin\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2855 => [[['_route' => 'app_admin_categorie_delete', '_controller' => 'App\\Controller\\Admin\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2884 => [[['_route' => 'app_chapitre_show', '_controller' => 'App\\Controller\\Admin\\ChapitreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2898 => [[['_route' => 'app_chapitre_edit', '_controller' => 'App\\Controller\\Admin\\ChapitreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2907 => [[['_route' => 'app_chapitre_delete', '_controller' => 'App\\Controller\\Admin\\ChapitreController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2934 => [[['_route' => 'app_admin_classe_show', '_controller' => 'App\\Controller\\Admin\\ClasseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2948 => [[['_route' => 'app_admin_classe_edit', '_controller' => 'App\\Controller\\Admin\\ClasseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2957 => [[['_route' => 'app_admin_classe_delete', '_controller' => 'App\\Controller\\Admin\\ClasseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2983 => [[['_route' => 'app_admin_cours_show', '_controller' => 'App\\Controller\\Admin\\CoursController::show'], ['slug'], ['GET' => 0], null, false, true, null]],
        3011 => [[['_route' => 'app_admin_cours_approve', '_controller' => 'App\\Controller\\Admin\\CoursController::approveCourse'], ['slug'], ['GET' => 0], null, false, false, null]],
        3039 => [[['_route' => 'app_admin_cours_rejected', '_controller' => 'App\\Controller\\Admin\\CoursController::rejectedCourse'], ['slug'], ['POST' => 0], null, false, false, null]],
        3060 => [[['_route' => 'app_admin_cours_remove_review', '_controller' => 'App\\Controller\\Admin\\CoursController::deleteReview'], ['id'], ['POST' => 0], null, false, false, null]],
        3074 => [[['_route' => 'app_admin_cours_edit', '_controller' => 'App\\Controller\\Admin\\CoursController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3084 => [[['_route' => 'app_admin_cours_delete', '_controller' => 'App\\Controller\\Admin\\CoursController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        3118 => [[['_route' => 'app_admin_eleve_show', '_controller' => 'App\\Controller\\Admin\\EleveController::show'], ['reference'], ['GET' => 0], null, false, true, null]],
        3135 => [[['_route' => 'app_eleve_edit', '_controller' => 'App\\Controller\\Admin\\EleveController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3149 => [[['_route' => 'app_admin_eleve_block', '_controller' => 'App\\Controller\\Admin\\EleveController::block'], ['reference'], ['GET' => 0], null, false, false, null]],
        3159 => [[['_route' => 'app_admin_eleve_delete', '_controller' => 'App\\Controller\\Admin\\EleveController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        3187 => [[['_route' => 'app_admin_etablissement_show', '_controller' => 'App\\Controller\\Admin\\EtablissementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        3201 => [[['_route' => 'app_admin_etablissement_edit', '_controller' => 'App\\Controller\\Admin\\EtablissementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3210 => [[['_route' => 'app_admin_etablissement_delete', '_controller' => 'App\\Controller\\Admin\\EtablissementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        3243 => [[['_route' => 'app_admin_sous_systeme_show', '_controller' => 'App\\Controller\\Admin\\SousSystemeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        3260 => [[['_route' => 'app_admin_sous_systeme_edit', '_controller' => 'App\\Controller\\Admin\\SousSystemeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3275 => [[['_route' => 'app_admin_sous_systeme_delete', '_controller' => 'App\\Controller\\Admin\\SousSystemeController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        3312 => [[['_route' => 'app_admin_specialite_show', '_controller' => 'App\\Controller\\Admin\\SpecialiteController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        3325 => [[['_route' => 'app_admin_specialite_edit', '_controller' => 'App\\Controller\\Admin\\SpecialiteController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3340 => [[['_route' => 'app_admin_specialite_delete', '_controller' => 'App\\Controller\\Admin\\SpecialiteController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        3366 => [[['_route' => 'app_admin_sujet_show', '_controller' => 'App\\Controller\\Admin\\SujetController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        3380 => [[['_route' => 'app_admin_sujet_edit', '_controller' => 'App\\Controller\\Admin\\SujetController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3389 => [[['_route' => 'app_admin_sujet_delete', '_controller' => 'App\\Controller\\Admin\\SujetController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        3441 => [[['_route' => 'app_admin_enseignant_accept_request', '_controller' => 'App\\Controller\\Admin\\EnseignantController::accepted'], ['reference'], ['GET' => 0], null, false, false, null]],
        3456 => [[['_route' => 'app_admin_enseignant_reject_request', '_controller' => 'App\\Controller\\Admin\\EnseignantController::rejected'], ['reference'], ['POST' => 0], null, false, false, null]],
        3477 => [[['_route' => 'app_admin_enseignant_show', '_controller' => 'App\\Controller\\Admin\\EnseignantController::show'], ['reference'], ['GET' => 0], null, false, true, null]],
        3491 => [[['_route' => 'app_admin_enseignant_edit', '_controller' => 'App\\Controller\\Admin\\EnseignantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3500 => [[['_route' => 'app_admin_enseignant_delete', '_controller' => 'App\\Controller\\Admin\\EnseignantController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        3539 => [[['_route' => 'app_admin_evaluation_show', '_controller' => 'App\\Controller\\Admin\\EvaluationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        3553 => [[['_route' => 'app_admin_evaluation_edit', '_controller' => 'App\\Controller\\Admin\\EvaluationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3562 => [[['_route' => 'app_admin_evaluation_delete', '_controller' => 'App\\Controller\\Admin\\EvaluationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        3593 => [[['_route' => 'app_admin_evaluation_question_index', '_controller' => 'App\\Controller\\Admin\\EvaluationQuestionController::index'], ['slug'], ['GET' => 0], null, false, true, null]],
        3609 => [[['_route' => 'app_admin_evaluation_question_new', '_controller' => 'App\\Controller\\Admin\\EvaluationQuestionController::new'], ['slug'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        3622 => [[['_route' => 'app_admin_evaluation_question_edit', '_controller' => 'App\\Controller\\Admin\\EvaluationQuestionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3632 => [
            [['_route' => 'app_admin_evaluation_question_show', '_controller' => 'App\\Controller\\Admin\\EvaluationQuestionController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_admin_evaluation_question_delete', '_controller' => 'App\\Controller\\Admin\\EvaluationQuestionController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        3665 => [[['_route' => 'app_admin_exam_remove', '_controller' => 'App\\Controller\\Admin\\ExamController::remove'], ['reference'], null, null, false, false, null]],
        3681 => [[['_route' => 'app_admin_exam_approve', '_controller' => 'App\\Controller\\Admin\\ExamController::approved'], ['reference'], null, null, false, false, null]],
        3712 => [[['_route' => 'app_admin_f_a_q_show', '_controller' => 'App\\Controller\\Admin\\FAQController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        3726 => [[['_route' => 'app_admin_f_a_q_edit', '_controller' => 'App\\Controller\\Admin\\FAQController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3735 => [[['_route' => 'app_admin_f_a_q_delete', '_controller' => 'App\\Controller\\Admin\\FAQController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        3768 => [[['_route' => 'app_admin_filiere_show', '_controller' => 'App\\Controller\\Admin\\FiliereController::show'], ['id'], ['GET' => 0], null, false, false, null]],
        3781 => [[['_route' => 'app_admin_filiere_edit', '_controller' => 'App\\Controller\\Admin\\FiliereController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3796 => [[['_route' => 'app_admin_filiere_delete', '_controller' => 'App\\Controller\\Admin\\FiliereController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        3829 => [[['_route' => 'app_admin_formation_show', '_controller' => 'App\\Controller\\Admin\\FormationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        3843 => [[['_route' => 'app_admin_formation_edit', '_controller' => 'App\\Controller\\Admin\\FormationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3852 => [[['_route' => 'app_admin_formation_delete', '_controller' => 'App\\Controller\\Admin\\FormationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        3876 => [[['_route' => 'app_forum_show', '_controller' => 'App\\Controller\\Admin\\ForumController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        3893 => [[['_route' => 'app_forum_edit', '_controller' => 'App\\Controller\\Admin\\ForumController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3913 => [[['_route' => 'app_forum_message_index', '_controller' => 'App\\Controller\\Admin\\ForumMessageController::index'], ['reference'], ['GET' => 0], null, true, false, null]],
        3929 => [[['_route' => 'app_forum_message_new', '_controller' => 'App\\Controller\\Admin\\ForumMessageController::new'], ['reference'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3949 => [[['_route' => 'app_forum_message_show', '_controller' => 'App\\Controller\\Admin\\ForumMessageController::show'], ['reference', 'id'], ['GET' => 0], null, false, true, null]],
        3963 => [[['_route' => 'app_forum_message_edit', '_controller' => 'App\\Controller\\Admin\\ForumMessageController::edit'], ['reference', 'id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        3972 => [[['_route' => 'app_forum_message_delete', '_controller' => 'App\\Controller\\Admin\\ForumMessageController::delete'], ['reference', 'id'], ['POST' => 0], null, false, true, null]],
        3985 => [[['_route' => 'app_forum_delete', '_controller' => 'App\\Controller\\Admin\\ForumController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        4014 => [[['_route' => 'app_media_show', '_controller' => 'App\\Controller\\Admin\\MediaController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        4028 => [[['_route' => 'app_media_edit', '_controller' => 'App\\Controller\\Admin\\MediaController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4037 => [[['_route' => 'app_media_delete', '_controller' => 'App\\Controller\\Admin\\MediaController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        4076 => [[['_route' => 'app_admin_network_config_show', '_controller' => 'App\\Controller\\Admin\\NetworkConfigController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        4090 => [[['_route' => 'app_admin_network_config_edit', '_controller' => 'App\\Controller\\Admin\\NetworkConfigController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4099 => [[['_route' => 'app_admin_network_config_delete', '_controller' => 'App\\Controller\\Admin\\NetworkConfigController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        4141 => [[['_route' => 'app_admin_notification_template_show', '_controller' => 'App\\Controller\\Admin\\NotificationTemplateController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        4155 => [[['_route' => 'app_admin_notification_template_edit', '_controller' => 'App\\Controller\\Admin\\NotificationTemplateController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4164 => [[['_route' => 'app_admin_notification_template_delete', '_controller' => 'App\\Controller\\Admin\\NotificationTemplateController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        4194 => [[['_route' => 'app_admin_pays_show', '_controller' => 'App\\Controller\\Admin\\PaysController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        4208 => [[['_route' => 'app_admin_pays_edit', '_controller' => 'App\\Controller\\Admin\\PaysController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4217 => [[['_route' => 'app_admin_pays_delete', '_controller' => 'App\\Controller\\Admin\\PaysController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        4246 => [[['_route' => 'app_personne_show', '_controller' => 'App\\Controller\\Admin\\PersonneController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        4260 => [[['_route' => 'app_personne_edit', '_controller' => 'App\\Controller\\Admin\\PersonneController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4269 => [[['_route' => 'app_personne_delete', '_controller' => 'App\\Controller\\Admin\\PersonneController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        4301 => [[['_route' => 'app_proposition_show', '_controller' => 'App\\Controller\\Admin\\PropositionController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        4315 => [[['_route' => 'app_proposition_edit', '_controller' => 'App\\Controller\\Admin\\PropositionController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4324 => [[['_route' => 'app_proposition_delete', '_controller' => 'App\\Controller\\Admin\\PropositionController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        4351 => [[['_route' => 'app_quiz_show', '_controller' => 'App\\Controller\\Admin\\QuizController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        4365 => [[['_route' => 'app_quiz_edit', '_controller' => 'App\\Controller\\Admin\\QuizController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4374 => [[['_route' => 'app_quiz_delete', '_controller' => 'App\\Controller\\Admin\\QuizController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        4410 => [[['_route' => 'app_admin_registration_edit_register', '_controller' => 'App\\Controller\\Admin\\RegistrationController::register'], ['id'], ['POST' => 0, 'GET' => 1], null, false, true, null]],
        4430 => [[['_route' => 'app_admin_registration_delete', '_controller' => 'App\\Controller\\Admin\\RegistrationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        4448 => [[['_route' => 'app_admin_registration_block', '_controller' => 'App\\Controller\\Admin\\RegistrationController::block'], ['id'], ['GET' => 0], null, false, false, null]],
        4464 => [[['_route' => 'app_admin_registration_unblock', '_controller' => 'App\\Controller\\Admin\\RegistrationController::block'], ['id'], ['GET' => 0], null, false, false, null]],
        4482 => [[['_route' => 'app_admin_registration_active_user', '_controller' => 'App\\Controller\\Admin\\RegistrationController::activer'], ['id'], ['GET' => 0], null, false, false, null]],
        4513 => [[['_route' => 'app_admin_term_show', '_controller' => 'App\\Controller\\Admin\\TermController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        4527 => [[['_route' => 'app_admin_term_edit', '_controller' => 'App\\Controller\\Admin\\TermController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4536 => [[['_route' => 'app_admin_term_delete', '_controller' => 'App\\Controller\\Admin\\TermController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        4574 => [[['_route' => 'app_admin_type_enseignement_show', '_controller' => 'App\\Controller\\Admin\\TypeEnseignementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        4588 => [[['_route' => 'app_admin_type_enseignement_edit', '_controller' => 'App\\Controller\\Admin\\TypeEnseignementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4597 => [[['_route' => 'app_admin_type_enseignement_delete', '_controller' => 'App\\Controller\\Admin\\TypeEnseignementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        4651 => [[['_route' => 'ef_connect', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::load', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        4695 => [[['_route' => 'elfinder', '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::show', 'instance' => 'default', 'homeFolder' => ''], ['instance', 'homeFolder'], null, null, false, true, null]],
        4738 => [[['_route' => 'app_front_evaluation_inscription', '_controller' => 'App\\Controller\\Front\\EvaluationController::sinscrire'], ['slug'], null, null, false, false, null]],
        4760 => [[['_route' => 'app_front_evaluation_hide_annonce', '_controller' => 'App\\Controller\\Front\\EvaluationController::hideAnnonce'], ['slug'], null, null, false, false, null]],
        4777 => [[['_route' => 'app_front_evaluation_begin', '_controller' => 'App\\Controller\\Front\\EvaluationController::composer'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        4795 => [[['_route' => 'app_front_evaluation_result', '_controller' => 'App\\Controller\\Front\\EvaluationController::afficherResultats'], ['slug'], null, null, false, false, null]],
        4822 => [[['_route' => 'app_front_exam_show', '_controller' => 'App\\Controller\\Front\\ExamController::show'], ['reference'], null, null, false, false, null]],
        4859 => [[['_route' => 'fos_js_routing_js', '_controller' => 'fos_js_routing.controller::indexAction', '_format' => 'js'], ['_format'], ['GET' => 0], null, false, true, null]],
        4899 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        4920 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        4967 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        4982 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        5003 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        5017 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        5028 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        5071 => [[['_route' => 'app_front_course_forum_index', '_controller' => 'App\\Controller\\Front\\CourseForumController::index'], ['slug'], null, null, false, true, null]],
        5089 => [[['_route' => 'app_front_course_forum_subject_message', '_controller' => 'App\\Controller\\Front\\CourseForumController::subjectMessage'], ['slug', 'reference'], null, null, false, true, null]],
        5112 => [[['_route' => 'app_front_category_courses', '_controller' => 'App\\Controller\\Front\\CoursesController::index'], ['slug'], ['GET' => 0], null, false, true, null]],
        5129 => [[['_route' => 'app_front_course_details', '_controller' => 'App\\Controller\\Front\\CoursesController::courseDetails'], ['slug'], ['GET' => 0], null, false, false, null]],
        5158 => [[['_route' => 'app_front_course_add_review', '_controller' => 'App\\Controller\\Front\\CoursesController::newCourseReview'], ['slug'], ['POST' => 0], null, false, false, null]],
        5184 => [[['_route' => 'app_front_course_new_forum', '_controller' => 'App\\Controller\\Front\\CoursesController::newForumSubjet'], ['id', 'slug'], ['POST' => 0], null, false, false, null]],
        5213 => [[['_route' => 'app_front_course_new_forum_message', '_controller' => 'App\\Controller\\Front\\CoursesController::addNewforumMessage'], ['membreId', 'referenceSujet'], ['POST' => 0], null, false, false, null]],
        5246 => [[['_route' => 'app_course_like_forum_message', '_controller' => 'App\\Controller\\Front\\CoursesController::likeForumMessage'], ['id'], ['POST' => 0], null, false, false, null]],
        5263 => [[['_route' => 'app_front_read_lesson', '_controller' => 'App\\Controller\\Front\\CoursesController::readLesson'], ['slug'], ['GET' => 0], null, false, false, null]],
        5286 => [[['_route' => 'app_front_course_lecture_finished', '_controller' => 'App\\Controller\\Front\\CoursesController::lectureIsFinished'], ['reference'], ['GET' => 0], null, false, false, null]],
        5308 => [[['_route' => 'app_course_solve_forum_message', '_controller' => 'App\\Controller\\Front\\CoursesController::sujetResolu'], ['id'], ['GET' => 0], null, false, false, null]],
        5322 => [[['_route' => 'app_front_course_start', '_controller' => 'App\\Controller\\Front\\CoursesController::startCourse'], ['slug'], ['GET' => 0], null, false, false, null]],
        5347 => [[['_route' => 'app_front_course_chapitre_quizzes', '_controller' => 'App\\Controller\\Front\\CoursesController::showQuizzes'], ['slugCours', 'slugChapitre'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        5363 => [[['_route' => 'app_front_course_course_quizzes', '_controller' => 'App\\Controller\\Front\\CoursesController::showQuizzes'], ['slugCours'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        5396 => [[['_route' => 'app_security_change_language', '_controller' => 'App\\Controller\\SecurityController::changeLocale'], ['lang'], null, null, false, true, null]],
        5421 => [[['_route' => 'app_front_forum_index_category', '_controller' => 'App\\Controller\\Front\\ForumController::index'], ['slug'], null, null, false, true, null]],
        5461 => [[['_route' => 'app_front_payment_buy_course', '_controller' => 'App\\Controller\\Front\\PaymentController::devenirPremiumOrByCourse'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        5499 => [[['_route' => 'app_front_payment_buy_plan', '_controller' => 'App\\Controller\\Front\\PaymentController::subscribePlan'], ['slug'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        5541 => [[['_route' => 'app_instructor_course_forum_index', '_controller' => 'App\\Controller\\Instructor\\CourseForumController::index'], ['slug'], null, null, false, true, null]],
        5580 => [[['_route' => 'app_instructor_course_forum_subject_message', '_controller' => 'App\\Controller\\Instructor\\CourseForumController::subjectMessage'], ['slug', 'reference'], null, null, false, false, null]],
        5598 => [[['_route' => 'app_instructor_course_forum_subject_delete', '_controller' => 'App\\Controller\\Instructor\\CourseForumController::deleteSubjet'], ['id'], ['POST' => 0], null, false, false, null]],
        5616 => [[['_route' => 'app_instructor_course_forum_subject_delete_message', '_controller' => 'App\\Controller\\Instructor\\CourseForumController::removeForumMessage'], ['id'], ['GET' => 0], null, false, false, null]],
        5658 => [[['_route' => 'app_instructor_courses_preview', '_controller' => 'App\\Controller\\Instructor\\CoursesController::coursePreview'], ['slug'], null, null, false, false, null]],
        5674 => [[['_route' => 'app_instructor_courses_edit', '_controller' => 'App\\Controller\\Instructor\\CoursesController::edit'], ['slug'], null, null, false, false, null]],
        5689 => [[['_route' => 'app_instructor_courses_quiz_edit', '_controller' => 'App\\Controller\\Instructor\\CoursesController::editQuiz'], ['reference'], ['POST' => 0], null, false, false, null]],
        5706 => [[['_route' => 'app_instructor_courses_quizzes', '_controller' => 'App\\Controller\\Instructor\\CoursesController::newQuiz'], ['slug'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        5729 => [[['_route' => 'app_instructor_courses_quizzes_final', '_controller' => 'App\\Controller\\Instructor\\CoursesController::editQuizFinal'], ['slug'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        5747 => [[['_route' => 'app_instructor_courses_delete', '_controller' => 'App\\Controller\\Instructor\\CoursesController::deleteCourse'], ['slug'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        5764 => [[['_route' => 'app_instructor_delete_faq', '_controller' => 'App\\Controller\\Instructor\\CoursesController::deleteFAQ'], ['id'], ['GET' => 0], null, false, false, null]],
        5779 => [[['_route' => 'app_instructor_delete_lesson', '_controller' => 'App\\Controller\\Instructor\\CoursesController::deleteLesson'], ['id'], ['GET' => 0], null, false, false, null]],
        5796 => [[['_route' => 'app_instructor_delete_chapitre', '_controller' => 'App\\Controller\\Instructor\\CoursesController::deleteChapitre'], ['id'], ['GET' => 0], null, false, false, null]],
        5819 => [[['_route' => 'app_instructor_courses_quiz_remove', '_controller' => 'App\\Controller\\Instructor\\CoursesController::deleteQuiz'], ['reference'], null, null, false, false, null]],
        5847 => [[['_route' => 'app_instructor_courses_published', '_controller' => 'App\\Controller\\Instructor\\CoursesController::publishedCourse'], ['slug'], null, null, false, false, null]],
        5877 => [[['_route' => 'app_instructor_exam_edit', '_controller' => 'App\\Controller\\Instructor\\ExamController::edit'], ['reference'], ['POST' => 0, 'GET' => 1], null, false, false, null]],
        5908 => [[['_route' => 'app_instructor_exam_published', '_controller' => 'App\\Controller\\Instructor\\ExamController::published'], ['reference'], null, null, false, false, null]],
        5923 => [[['_route' => 'app_instructor_exam_delete', '_controller' => 'App\\Controller\\Instructor\\ExamController::delete'], ['reference'], null, null, false, false, null]],
        5948 => [[['_route' => 'app_instructor_reply_review', '_controller' => 'App\\Controller\\Instructor\\ReviewsController::reply'], ['id'], ['POST' => 0], null, false, false, null]],
        5977 => [[['_route' => 'app_lesson_show', '_controller' => 'App\\Controller\\Instructor\\LessonController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        5991 => [[['_route' => 'app_lesson_edit', '_controller' => 'App\\Controller\\Instructor\\LessonController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        6000 => [[['_route' => 'app_lesson_delete', '_controller' => 'App\\Controller\\Instructor\\LessonController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        6046 => [
            [['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
