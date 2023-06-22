<?php

namespace ContainerKdnUcK1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_NPKxTRTService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.NPKxTRT' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.NPKxTRT'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'profession' => ['privates', '.errored..service_locator.NPKxTRT.App\\Entity\\Profession', NULL, 'Cannot autowire service ".service_locator.NPKxTRT": it needs an instance of "App\\Entity\\Profession" but this type has been excluded in "config/services.yaml".'],
            'professionRepository' => ['privates', 'App\\Repository\\ProfessionRepository', 'getProfessionRepositoryService', true],
        ], [
            'profession' => 'App\\Entity\\Profession',
            'professionRepository' => 'App\\Repository\\ProfessionRepository',
        ]);
    }
}
