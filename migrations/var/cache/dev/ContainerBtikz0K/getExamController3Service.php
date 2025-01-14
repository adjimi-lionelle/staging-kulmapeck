<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExamController3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Instructor\ExamController' shared autowired service.
     *
     * @return \App\Controller\Instructor\ExamController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Instructor/ExamController.php';

        $container->services['App\\Controller\\Instructor\\ExamController'] = $instance = new \App\Controller\Instructor\ExamController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\Instructor\\ExamController', $container));

        return $instance;
    }
}
