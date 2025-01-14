<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAbonnementRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\AbonnementRepository' shared autowired service.
     *
     * @return \App\Repository\AbonnementRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/AbonnementRepository.php';

        return $container->privates['App\\Repository\\AbonnementRepository'] = new \App\Repository\AbonnementRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
