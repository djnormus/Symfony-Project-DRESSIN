<?php

namespace ContainerJUX7eJu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Phg3CKBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.phg3CKB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.phg3CKB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'panierService' => ['privates', 'App\\Service\\Panier\\PanierService', 'getPanierServiceService', true],
            'stockRepository' => ['privates', 'App\\Repository\\StockRepository', 'getStockRepositoryService', true],
        ], [
            'manager' => '?',
            'panierService' => 'App\\Service\\Panier\\PanierService',
            'stockRepository' => 'App\\Repository\\StockRepository',
        ]);
    }
}