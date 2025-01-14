<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_G_OnyyTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.g.onyyT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.g.onyyT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categorieRepository' => ['privates', 'App\\Repository\\CategorieRepository', 'getCategorieRepositoryService', true],
            'fileUploader' => ['privates', 'App\\Service\\FileUploader', 'getFileUploaderService', true],
            'slugger' => ['privates', 'slugger', 'getSluggerService', true],
        ], [
            'categorieRepository' => 'App\\Repository\\CategorieRepository',
            'fileUploader' => 'App\\Service\\FileUploader',
            'slugger' => '?',
        ]);
    }
}
