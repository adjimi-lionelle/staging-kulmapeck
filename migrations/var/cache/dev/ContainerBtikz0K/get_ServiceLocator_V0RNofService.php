<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_V0RNofService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._V0RNof' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._V0RNof'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'coursRepository' => ['privates', 'App\\Repository\\CoursRepository', 'getCoursRepositoryService', true],
            'enseignantRepository' => ['privates', 'App\\Repository\\EnseignantRepository', 'getEnseignantRepositoryService', true],
            'fileUploader' => ['privates', 'App\\Service\\FileUploader', 'getFileUploaderService', true],
            'forumRepository' => ['privates', 'App\\Repository\\ForumRepository', 'getForumRepositoryService', true],
            'lessonRepository' => ['privates', 'App\\Repository\\LessonRepository', 'getLessonRepositoryService', true],
            'notificationTypeRepository' => ['privates', 'App\\Repository\\NotificationTypeRepository', 'getNotificationTypeRepositoryService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
            'userRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', false],
        ], [
            'coursRepository' => 'App\\Repository\\CoursRepository',
            'enseignantRepository' => 'App\\Repository\\EnseignantRepository',
            'fileUploader' => 'App\\Service\\FileUploader',
            'forumRepository' => 'App\\Repository\\ForumRepository',
            'lessonRepository' => 'App\\Repository\\LessonRepository',
            'notificationTypeRepository' => 'App\\Repository\\NotificationTypeRepository',
            'slugger' => '?',
            'userRepository' => 'App\\Repository\\UserRepository',
        ]);
    }
}
