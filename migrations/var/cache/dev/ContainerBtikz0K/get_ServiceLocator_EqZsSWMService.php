<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EqZsSWMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.eqZsSWM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.eqZsSWM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'abonnement' => ['privates', '.errored..service_locator.eqZsSWM.App\\Entity\\Abonnement', NULL, 'Cannot autowire service ".service_locator.eqZsSWM": it needs an instance of "App\\Entity\\Abonnement" but this type has been excluded in "config/services.yaml".'],
            'abonnementRepository' => ['privates', 'App\\Repository\\AbonnementRepository', 'getAbonnementRepositoryService', true],
        ], [
            'abonnement' => 'App\\Entity\\Abonnement',
            'abonnementRepository' => 'App\\Repository\\AbonnementRepository',
        ]);
    }
}
