<?php

namespace ContainerGsXPBM3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserGuard2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored..service_locator.seqIyFa.App\Entity\UserGuard' shared service.
     *
     * @return \App\Entity\UserGuard
     */
    public static function do($container, $lazyLoad = true)
    {
        throw new RuntimeException('Cannot autowire service ".service_locator.seqIyFa": it needs an instance of "App\\Entity\\UserGuard" but this type has been excluded in "config/services.yaml".');
    }
}