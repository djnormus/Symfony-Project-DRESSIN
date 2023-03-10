<?php

namespace ContainerJUX7eJu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QhFxE4DService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.qhFxE4D' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.qhFxE4D'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'panierService' => ['privates', 'App\\Service\\Panier\\PanierService', 'getPanierServiceService', true],
            'promoRepository' => ['privates', 'App\\Repository\\PromoRepository', 'getPromoRepositoryService', true],
        ], [
            'panierService' => 'App\\Service\\Panier\\PanierService',
            'promoRepository' => 'App\\Repository\\PromoRepository',
        ]);
    }
}
