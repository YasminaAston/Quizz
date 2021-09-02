<?php

namespace ContainerWzxoV4v;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHeaderCheckerManagerFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Jose\Bundle\JoseFramework\Services\HeaderCheckerManagerFactory' shared autowired service.
     *
     * @return \Jose\Bundle\JoseFramework\Services\HeaderCheckerManagerFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/web-token/jwt-bundle/Services/HeaderCheckerManagerFactory.php';
        include_once \dirname(__DIR__, 4).'/vendor/web-token/jwt-checker/TokenTypeSupport.php';
        include_once \dirname(__DIR__, 4).'/vendor/web-token/jwt-signature/JWSTokenSupport.php';
        include_once \dirname(__DIR__, 4).'/vendor/web-token/jwt-encryption/JWETokenSupport.php';

        $container->services['Jose\\Bundle\\JoseFramework\\Services\\HeaderCheckerManagerFactory'] = $instance = new \Jose\Bundle\JoseFramework\Services\HeaderCheckerManagerFactory(($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));

        $instance->addTokenTypeSupport(new \Jose\Component\Signature\JWSTokenSupport());
        $instance->addTokenTypeSupport(new \Jose\Component\Encryption\JWETokenSupport());

        return $instance;
    }
}
