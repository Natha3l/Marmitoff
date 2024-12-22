<?php

namespace ContainerOwrfUBY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SMQnfqMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SMQnfqM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SMQnfqM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'ingredient' => ['privates', '.errored..service_locator.SMQnfqM.App\\Entity\\Ingredient', NULL, 'Cannot autowire service ".service_locator.SMQnfqM": it needs an instance of "App\\Entity\\Ingredient" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
        ], [
            'ingredient' => 'App\\Entity\\Ingredient',
            'entityManager' => '?',
        ]);
    }
}