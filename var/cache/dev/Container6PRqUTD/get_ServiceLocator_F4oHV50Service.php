<?php

namespace Container6PRqUTD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_F4oHV50Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.f4oHV50' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.f4oHV50'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'PointderelaisRepository' => ['privates', 'App\\Repository\\PointderelaisRepository', 'getPointderelaisRepositoryService', true],
        ], [
            'PointderelaisRepository' => 'App\\Repository\\PointderelaisRepository',
        ]);
    }
}