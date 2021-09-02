<?php

namespace ContainerWzxoV4v;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9jKjuJ5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9jKjuJ5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9jKjuJ5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'serializer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', false],
            'validator' => ['services', '.container.private.validator', 'get_Container_Private_ValidatorService', false],
        ], [
            'serializer' => '?',
            'validator' => '?',
        ]);
    }
}
