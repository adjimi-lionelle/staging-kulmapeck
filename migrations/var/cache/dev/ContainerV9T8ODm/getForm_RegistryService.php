<?php

namespace ContainerV9T8ODm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForm_RegistryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'form.registry' shared service.
     *
     * @return \Symfony\Component\Form\FormRegistry
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRegistryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormRegistry.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'DependencyInjectionExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ResolvedFormTypeFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'DataCollector'.\DIRECTORY_SEPARATOR.'Proxy'.\DIRECTORY_SEPARATOR.'ResolvedTypeFactoryDataCollectorProxy.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'ResolvedFormTypeFactory.php';

        return $container->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Form\\AbonnementItemType' => ['privates', 'App\\Form\\AbonnementItemType', 'getAbonnementItemTypeService', true],
            'App\\Form\\AbonnementType' => ['privates', 'App\\Form\\AbonnementType', 'getAbonnementTypeService', true],
            'App\\Form\\CategorieType' => ['privates', 'App\\Form\\CategorieType', 'getCategorieTypeService', true],
            'App\\Form\\ChangePasswordFormType' => ['privates', 'App\\Form\\ChangePasswordFormType', 'getChangePasswordFormTypeService', true],
            'App\\Form\\ChapitreType' => ['privates', 'App\\Form\\ChapitreType', 'getChapitreTypeService', true],
            'App\\Form\\ClasseType' => ['privates', 'App\\Form\\ClasseType', 'getClasseTypeService', true],
            'App\\Form\\ContactType' => ['privates', 'App\\Form\\ContactType', 'getContactTypeService', true],
            'App\\Form\\CoursType' => ['privates', 'App\\Form\\CoursType', 'getCoursTypeService', true],
            'App\\Form\\CourseQuizType' => ['privates', 'App\\Form\\CourseQuizType', 'getCourseQuizTypeService', true],
            'App\\Form\\CourseReviewType' => ['privates', 'App\\Form\\CourseReviewType', 'getCourseReviewTypeService', true],
            'App\\Form\\EditSocialSettingType' => ['privates', 'App\\Form\\EditSocialSettingType', 'getEditSocialSettingTypeService', true],
            'App\\Form\\EleveType' => ['privates', 'App\\Form\\EleveType', 'getEleveTypeService', true],
            'App\\Form\\EnseignantType' => ['privates', 'App\\Form\\EnseignantType', 'getEnseignantTypeService', true],
            'App\\Form\\EtablissementType' => ['privates', 'App\\Form\\EtablissementType', 'getEtablissementTypeService', true],
            'App\\Form\\EvaluationQuestionType' => ['privates', 'App\\Form\\EvaluationQuestionType', 'getEvaluationQuestionTypeService', true],
            'App\\Form\\EvaluationType' => ['privates', 'App\\Form\\EvaluationType', 'getEvaluationTypeService', true],
            'App\\Form\\ExamFormType' => ['privates', 'App\\Form\\ExamFormType', 'getExamFormTypeService', true],
            'App\\Form\\FAQType' => ['privates', 'App\\Form\\FAQType', 'getFAQTypeService', true],
            'App\\Form\\FiliereType' => ['privates', 'App\\Form\\FiliereType', 'getFiliereTypeService', true],
            'App\\Form\\FormationType' => ['privates', 'App\\Form\\FormationType', 'getFormationTypeService', true],
            'App\\Form\\ForumMessageType' => ['privates', 'App\\Form\\ForumMessageType', 'getForumMessageTypeService', true],
            'App\\Form\\ForumType' => ['privates', 'App\\Form\\ForumType', 'getForumTypeService', true],
            'App\\Form\\GeneralSettingsType' => ['privates', 'App\\Form\\GeneralSettingsType', 'getGeneralSettingsTypeService', true],
            'App\\Form\\Lesson1Type' => ['privates', 'App\\Form\\Lesson1Type', 'getLesson1TypeService', true],
            'App\\Form\\LessonFormType' => ['privates', 'App\\Form\\LessonFormType', 'getLessonFormTypeService', true],
            'App\\Form\\LessonType' => ['privates', 'App\\Form\\LessonType', 'getLessonTypeService', true],
            'App\\Form\\MediaType' => ['privates', 'App\\Form\\MediaType', 'getMediaTypeService', true],
            'App\\Form\\NetworkConfigType' => ['privates', 'App\\Form\\NetworkConfigType', 'getNetworkConfigTypeService', true],
            'App\\Form\\NotificationTemplateType' => ['privates', 'App\\Form\\NotificationTemplateType', 'getNotificationTemplateTypeService', true],
            'App\\Form\\PaysType' => ['privates', 'App\\Form\\PaysType', 'getPaysTypeService', true],
            'App\\Form\\PersonneFormType' => ['privates', 'App\\Form\\PersonneFormType', 'getPersonneFormTypeService', true],
            'App\\Form\\PersonneType' => ['privates', 'App\\Form\\PersonneType', 'getPersonneTypeService', true],
            'App\\Form\\PropositionType' => ['privates', 'App\\Form\\PropositionType', 'getPropositionTypeService', true],
            'App\\Form\\QuizType' => ['privates', 'App\\Form\\QuizType', 'getQuizTypeService', true],
            'App\\Form\\RegistrationFormType' => ['privates', 'App\\Form\\RegistrationFormType', 'getRegistrationFormTypeService', true],
            'App\\Form\\RegistrationStudentType' => ['privates', 'App\\Form\\RegistrationStudentType', 'getRegistrationStudentTypeService', true],
            'App\\Form\\RegistrationTeacherType' => ['privates', 'App\\Form\\RegistrationTeacherType', 'getRegistrationTeacherTypeService', true],
            'App\\Form\\ResetPasswordRequestFormType' => ['privates', 'App\\Form\\ResetPasswordRequestFormType', 'getResetPasswordRequestFormTypeService', true],
            'App\\Form\\ResetPasswordType' => ['privates', 'App\\Form\\ResetPasswordType', 'getResetPasswordTypeService', true],
            'App\\Form\\RetraitType' => ['privates', 'App\\Form\\RetraitType', 'getRetraitTypeService', true],
            'App\\Form\\SocialSettingsType' => ['privates', 'App\\Form\\SocialSettingsType', 'getSocialSettingsTypeService', true],
            'App\\Form\\SousSystemeType' => ['privates', 'App\\Form\\SousSystemeType', 'getSousSystemeTypeService', true],
            'App\\Form\\SpecialiteType' => ['privates', 'App\\Form\\SpecialiteType', 'getSpecialiteTypeService', true],
            'App\\Form\\SujetType' => ['privates', 'App\\Form\\SujetType', 'getSujetTypeService', true],
            'App\\Form\\TermType' => ['privates', 'App\\Form\\TermType', 'getTermTypeService', true],
            'App\\Form\\TypeEnseignementType' => ['privates', 'App\\Form\\TypeEnseignementType', 'getTypeEnseignementTypeService', true],
            'App\\Form\\WebSiteSettingsType' => ['privates', 'App\\Form\\WebSiteSettingsType', 'getWebSiteSettingsTypeService', true],
            'FM\\ElfinderBundle\\Form\\Type\\ElFinderType' => ['privates', 'fm_elfinder.form.type', 'getFmElfinder_Form_TypeService', true],
            'FOS\\CKEditorBundle\\Form\\Type\\CKEditorType' => ['privates', 'fos_ck_editor.form.type', 'getFosCkEditor_Form_TypeService', true],
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => ['privates', 'form.type.color', 'getForm_Type_ColorService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['privates', 'form.type.file', 'getForm_Type_FileService', true],
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService', true],
            'Vich\\UploaderBundle\\Form\\Type\\VichFileType' => ['services', 'vich_uploader.form.type.file', 'getVichUploader_Form_Type_FileService', true],
            'Vich\\UploaderBundle\\Form\\Type\\VichImageType' => ['services', 'vich_uploader.form.type.image', 'getVichUploader_Form_Type_ImageService', true],
        ], [
            'App\\Form\\AbonnementItemType' => '?',
            'App\\Form\\AbonnementType' => '?',
            'App\\Form\\CategorieType' => '?',
            'App\\Form\\ChangePasswordFormType' => '?',
            'App\\Form\\ChapitreType' => '?',
            'App\\Form\\ClasseType' => '?',
            'App\\Form\\ContactType' => '?',
            'App\\Form\\CoursType' => '?',
            'App\\Form\\CourseQuizType' => '?',
            'App\\Form\\CourseReviewType' => '?',
            'App\\Form\\EditSocialSettingType' => '?',
            'App\\Form\\EleveType' => '?',
            'App\\Form\\EnseignantType' => '?',
            'App\\Form\\EtablissementType' => '?',
            'App\\Form\\EvaluationQuestionType' => '?',
            'App\\Form\\EvaluationType' => '?',
            'App\\Form\\ExamFormType' => '?',
            'App\\Form\\FAQType' => '?',
            'App\\Form\\FiliereType' => '?',
            'App\\Form\\FormationType' => '?',
            'App\\Form\\ForumMessageType' => '?',
            'App\\Form\\ForumType' => '?',
            'App\\Form\\GeneralSettingsType' => '?',
            'App\\Form\\Lesson1Type' => '?',
            'App\\Form\\LessonFormType' => '?',
            'App\\Form\\LessonType' => '?',
            'App\\Form\\MediaType' => '?',
            'App\\Form\\NetworkConfigType' => '?',
            'App\\Form\\NotificationTemplateType' => '?',
            'App\\Form\\PaysType' => '?',
            'App\\Form\\PersonneFormType' => '?',
            'App\\Form\\PersonneType' => '?',
            'App\\Form\\PropositionType' => '?',
            'App\\Form\\QuizType' => '?',
            'App\\Form\\RegistrationFormType' => '?',
            'App\\Form\\RegistrationStudentType' => '?',
            'App\\Form\\RegistrationTeacherType' => '?',
            'App\\Form\\ResetPasswordRequestFormType' => '?',
            'App\\Form\\ResetPasswordType' => '?',
            'App\\Form\\RetraitType' => '?',
            'App\\Form\\SocialSettingsType' => '?',
            'App\\Form\\SousSystemeType' => '?',
            'App\\Form\\SpecialiteType' => '?',
            'App\\Form\\SujetType' => '?',
            'App\\Form\\TermType' => '?',
            'App\\Form\\TypeEnseignementType' => '?',
            'App\\Form\\WebSiteSettingsType' => '?',
            'FM\\ElfinderBundle\\Form\\Type\\ElFinderType' => '?',
            'FOS\\CKEditorBundle\\Form\\Type\\CKEditorType' => '?',
            'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\ColorType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
            'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
            'Vich\\UploaderBundle\\Form\\Type\\VichFileType' => '?',
            'Vich\\UploaderBundle\\Form\\Type\\VichImageType' => '?',
        ]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.form.transformation_failure_handling'] ?? $container->load('getForm_TypeExtension_Form_TransformationFailureHandlingService'));
            yield 1 => ($container->privates['form.type_extension.form.http_foundation'] ?? $container->load('getForm_TypeExtension_Form_HttpFoundationService'));
            yield 2 => ($container->privates['form.type_extension.form.validator'] ?? $container->load('getForm_TypeExtension_Form_ValidatorService'));
            yield 3 => ($container->privates['form.type_extension.upload.validator'] ?? $container->load('getForm_TypeExtension_Upload_ValidatorService'));
            yield 4 => ($container->privates['form.type_extension.csrf'] ?? $container->load('getForm_TypeExtension_CsrfService'));
            yield 5 => ($container->privates['form.type_extension.form.data_collector'] ?? $container->load('getForm_TypeExtension_Form_DataCollectorService'));
            yield 6 => ($container->privates['form.type_extension.form.password_hasher'] ?? $container->load('getForm_TypeExtension_Form_PasswordHasherService'));
        }, 7), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.repeated.validator'] ??= new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension());
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.submit.validator'] ??= new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension());
        }, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\PasswordType' => new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_extension.password.password_hasher'] ?? $container->load('getForm_TypeExtension_Password_PasswordHasherService'));
        }, 1)], new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['form.type_guesser.validator'] ?? $container->load('getForm_TypeGuesser_ValidatorService'));
            yield 1 => ($container->privates['form.type_guesser.doctrine'] ?? $container->load('getForm_TypeGuesser_DoctrineService'));
        }, 2))], new \Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy(new \Symfony\Component\Form\ResolvedFormTypeFactory(), ($container->privates['data_collector.form'] ?? $container->getDataCollector_FormService())));
    }
}
