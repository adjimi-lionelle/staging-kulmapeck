<?php

namespace ContainerV9T8ODm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFmElfinder_Command_InstallerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'fm_elfinder.command.installer' shared service.
     *
     * @return \FM\ElfinderBundle\Command\ElFinderInstallerCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'helios-ag'.\DIRECTORY_SEPARATOR.'fm-elfinder-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'ElFinderInstallerCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'filesystem'.\DIRECTORY_SEPARATOR.'Filesystem.php';

        $container->privates['fm_elfinder.command.installer'] = $instance = new \FM\ElfinderBundle\Command\ElFinderInstallerCommand(($container->privates['filesystem'] ??= new \Symfony\Component\Filesystem\Filesystem()), ($container->privates['parameter_bag'] ??= new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($container)));

        $instance->setName('elfinder:install');

        return $instance;
    }
}
