<?php

namespace ContainerSEJFBNx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJWKFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Jose\Component\KeyManagement\JWKFactory' shared autowired service.
     *
     * @return \Jose\Component\KeyManagement\JWKFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/web-token/jwt-key-mgmt/JWKFactory.php';

        return $container->services['Jose\\Component\\KeyManagement\\JWKFactory'] = new \Jose\Component\KeyManagement\JWKFactory();
    }
}
