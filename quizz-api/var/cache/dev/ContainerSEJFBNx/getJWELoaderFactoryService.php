<?php

namespace ContainerSEJFBNx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJWELoaderFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Jose\Bundle\JoseFramework\Services\JWELoaderFactory' shared autowired service.
     *
     * @return \Jose\Bundle\JoseFramework\Services\JWELoaderFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/web-token/jwt-bundle/Services/JWELoaderFactory.php';

        return $container->services['Jose\\Bundle\\JoseFramework\\Services\\JWELoaderFactory'] = new \Jose\Bundle\JoseFramework\Services\JWELoaderFactory(($container->services['Jose\\Component\\Encryption\\Serializer\\JWESerializerManagerFactory'] ?? $container->getJWESerializerManagerFactoryService()), ($container->services['Jose\\Bundle\\JoseFramework\\Services\\JWEDecrypterFactory'] ?? $container->load('getJWEDecrypterFactoryService')), ($container->services['Jose\\Bundle\\JoseFramework\\Services\\HeaderCheckerManagerFactory'] ?? $container->load('getHeaderCheckerManagerFactoryService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
