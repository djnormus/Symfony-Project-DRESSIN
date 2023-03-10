<?php

namespace ContainerJUX7eJu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DY4_KUxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dY4.KUx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dY4.KUx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'category' => ['privates', '.errored..service_locator.dY4.KUx.App\\Entity\\Category', NULL, 'Cannot autowire service ".service_locator.dY4.KUx": it references class "App\\Entity\\Category" but no such service exists.'],
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'category' => 'App\\Entity\\Category',
            'manager' => '?',
        ]);
    }
}
