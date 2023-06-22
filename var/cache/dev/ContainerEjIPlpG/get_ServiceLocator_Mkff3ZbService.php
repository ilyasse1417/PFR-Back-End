<?php

namespace ContainerEjIPlpG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Mkff3ZbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mkff3Zb' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mkff3Zb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cityRepository' => ['privates', 'App\\Repository\\CityRepository', 'getCityRepositoryService', true],
        ], [
            'cityRepository' => 'App\\Repository\\CityRepository',
        ]);
    }
}
