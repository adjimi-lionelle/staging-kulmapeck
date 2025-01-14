<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Xw7Ms4BService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Xw7Ms4B' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Xw7Ms4B'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'chapitreRepository' => ['privates', 'App\\Repository\\ChapitreRepository', 'getChapitreRepositoryService', true],
            'cours' => ['privates', '.errored..service_locator.Xw7Ms4B.App\\Entity\\Cours', NULL, 'Cannot autowire service ".service_locator.Xw7Ms4B": it needs an instance of "App\\Entity\\Cours" but this type has been excluded in "config/services.yaml".'],
            'eleveRepository' => ['privates', 'App\\Repository\\EleveRepository', 'getEleveRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'lectureRepository' => ['privates', 'App\\Repository\\LectureRepository', 'getLectureRepositoryService', true],
            'paymentRepository' => ['privates', 'App\\Repository\\PaymentRepository', 'getPaymentRepositoryService', true],
            'quizLostRepository' => ['privates', 'App\\Repository\\QuizLostRepository', 'getQuizLostRepositoryService', true],
            'quizRepository' => ['privates', 'App\\Repository\\QuizRepository', 'getQuizRepositoryService', true],
            'quizResultRepository' => ['privates', 'App\\Repository\\QuizResultRepository', 'getQuizResultRepositoryService', true],
        ], [
            'chapitreRepository' => 'App\\Repository\\ChapitreRepository',
            'cours' => 'App\\Entity\\Cours',
            'eleveRepository' => 'App\\Repository\\EleveRepository',
            'entityManager' => '?',
            'lectureRepository' => 'App\\Repository\\LectureRepository',
            'paymentRepository' => 'App\\Repository\\PaymentRepository',
            'quizLostRepository' => 'App\\Repository\\QuizLostRepository',
            'quizRepository' => 'App\\Repository\\QuizRepository',
            'quizResultRepository' => 'App\\Repository\\QuizResultRepository',
        ]);
    }
}
