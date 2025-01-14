<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getForumMessageTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ForumMessageType' shared autowired service.
     *
     * @return \App\Form\ForumMessageType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ForumMessageType.php';

        return $container->privates['App\\Form\\ForumMessageType'] = new \App\Form\ForumMessageType();
    }
}
