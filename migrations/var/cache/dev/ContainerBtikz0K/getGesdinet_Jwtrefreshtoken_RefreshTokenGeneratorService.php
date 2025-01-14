<?php

namespace ContainerBtikz0K;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGesdinet_Jwtrefreshtoken_RefreshTokenGeneratorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'gesdinet.jwtrefreshtoken.refresh_token_generator' shared service.
     *
     * @return \Gesdinet\JWTRefreshTokenBundle\Generator\RefreshTokenGenerator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/gesdinet/jwt-refresh-token-bundle/Generator/RefreshTokenGeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/gesdinet/jwt-refresh-token-bundle/Generator/RefreshTokenGenerator.php';

        return $container->services['gesdinet.jwtrefreshtoken.refresh_token_generator'] = new \Gesdinet\JWTRefreshTokenBundle\Generator\RefreshTokenGenerator(($container->services['gesdinet.jwtrefreshtoken.refresh_token_manager'] ?? $container->load('getGesdinet_Jwtrefreshtoken_RefreshTokenManagerService')));
    }
}
