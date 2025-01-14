<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnnotatedAppEntityCoursApiPlatformDoctrineOrmFilterOrderFilterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'annotated_app_entity_cours_api_platform_doctrine_orm_filter_order_filter' shared autowired service.
     *
     * @return \ApiPlatform\Doctrine\Orm\Filter\OrderFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Metadata/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/PropertyHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Common/PropertyHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/Filter/AbstractFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Common/Filter/OrderFilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Common/Filter/OrderFilterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Doctrine/Orm/Filter/OrderFilter.php';

        return $container->privates['annotated_app_entity_cours_api_platform_doctrine_orm_filter_order_filter'] = new \ApiPlatform\Doctrine\Orm\Filter\OrderFilter(($container->services['doctrine'] ?? $container->getDoctrineService()), 'order', ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), ['id' => NULL, 'intitule' => NULL], ($container->privates['serializer.name_converter.metadata_aware'] ?? $container->getSerializer_NameConverter_MetadataAwareService()), NULL);
    }
}
