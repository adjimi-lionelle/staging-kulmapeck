<?php

namespace ContainerV9T8ODm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFosJsRouting_SerializerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'fos_js_routing.serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'jsrouting-bundle'.\DIRECTORY_SEPARATOR.'Serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'RouteCollectionNormalizer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'jsrouting-bundle'.\DIRECTORY_SEPARATOR.'Serializer'.\DIRECTORY_SEPARATOR.'Normalizer'.\DIRECTORY_SEPARATOR.'RoutesResponseNormalizer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'friendsofsymfony'.\DIRECTORY_SEPARATOR.'jsrouting-bundle'.\DIRECTORY_SEPARATOR.'Serializer'.\DIRECTORY_SEPARATOR.'Denormalizer'.\DIRECTORY_SEPARATOR.'RouteCollectionDenormalizer.php';

        return $container->services['fos_js_routing.serializer'] = new \Symfony\Component\Serializer\Serializer([0 => new \FOS\JsRoutingBundle\Serializer\Normalizer\RouteCollectionNormalizer(), 1 => new \FOS\JsRoutingBundle\Serializer\Normalizer\RoutesResponseNormalizer(), 2 => new \FOS\JsRoutingBundle\Serializer\Denormalizer\RouteCollectionDenormalizer()], ['json' => new \Symfony\Component\Serializer\Encoder\JsonEncoder()]);
    }
}
