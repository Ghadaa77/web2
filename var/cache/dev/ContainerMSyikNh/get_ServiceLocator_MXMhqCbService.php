<?php

namespace ContainerMSyikNh;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MXMhqCbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mXMhqCb' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mXMhqCb'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pointderelai' => ['privates', '.errored..service_locator.mXMhqCb.App\\Entity\\Pointderelais', NULL, 'Cannot autowire service ".service_locator.mXMhqCb": it references class "App\\Entity\\Pointderelais" but no such service exists.'],
            'pointderelaisRepository' => ['privates', 'App\\Repository\\PointderelaisRepository', 'getPointderelaisRepositoryService', true],
        ], [
            'pointderelai' => 'App\\Entity\\Pointderelais',
            'pointderelaisRepository' => 'App\\Repository\\PointderelaisRepository',
        ]);
    }
}
