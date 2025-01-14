<?php

namespace ContainerV9T8ODm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NeYTR3iService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.neYTR3i' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.neYTR3i'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'eleveRepository' => ['privates', 'App\\Repository\\EleveRepository', 'getEleveRepositoryService', true],
            'personneRepository' => ['privates', 'App\\Repository\\PersonneRepository', 'getPersonneRepositoryService', false],
        ], [
            'eleveRepository' => 'App\\Repository\\EleveRepository',
            'personneRepository' => 'App\\Repository\\PersonneRepository',
        ]);
    }
}
