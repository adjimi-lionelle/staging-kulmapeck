<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNetworkController2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Instructor\NetworkController' shared autowired service.
     *
     * @return \App\Controller\Instructor\NetworkController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Instructor/NetworkController.php';

        $container->services['App\\Controller\\Instructor\\NetworkController'] = $instance = new \App\Controller\Instructor\NetworkController(($container->privates['App\\Utils\\Keys'] ?? $container->load('getKeysService')));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\Instructor\\NetworkController', $container));

        return $instance;
    }
}
