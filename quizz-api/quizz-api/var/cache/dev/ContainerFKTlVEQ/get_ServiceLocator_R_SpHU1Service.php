<?php

namespace ContainerFKTlVEQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_R_SpHU1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.R.spHU1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.R.spHU1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'roleRepository' => ['privates', 'App\\Repository\\RoleRepository', 'getRoleRepositoryService', true],
            'serializer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', false],
            'validator' => ['services', '.container.private.validator', 'get_Container_Private_ValidatorService', false],
        ], [
            'roleRepository' => 'App\\Repository\\RoleRepository',
            'serializer' => '?',
            'validator' => '?',
        ]);
    }
}
