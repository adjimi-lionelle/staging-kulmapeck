<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ODD2JWxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oDD2JWx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oDD2JWx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'specialite' => ['privates', '.errored..service_locator.oDD2JWx.App\\Entity\\Specialite', NULL, 'Cannot autowire service ".service_locator.oDD2JWx": it needs an instance of "App\\Entity\\Specialite" but this type has been excluded in "config/services.yaml".'],
        ], [
            'specialite' => 'App\\Entity\\Specialite',
        ]);
    }
}
