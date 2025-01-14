<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPaymentRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\PaymentRepository' shared autowired service.
     *
     * @return \App\Repository\PaymentRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/PaymentRepository.php';

        return $container->privates['App\\Repository\\PaymentRepository'] = new \App\Repository\PaymentRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
