<?php

namespace ContainerFofO2TT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJWSLoaderFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Jose\Bundle\JoseFramework\Services\JWSLoaderFactory' shared autowired service.
     *
     * @return \Jose\Bundle\JoseFramework\Services\JWSLoaderFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/web-token/jwt-bundle/Services/JWSLoaderFactory.php';

        return $container->services['Jose\\Bundle\\JoseFramework\\Services\\JWSLoaderFactory'] = new \Jose\Bundle\JoseFramework\Services\JWSLoaderFactory(($container->services['Jose\\Component\\Signature\\Serializer\\JWSSerializerManagerFactory'] ?? $container->getJWSSerializerManagerFactoryService()), ($container->services['Jose\\Bundle\\JoseFramework\\Services\\JWSVerifierFactory'] ?? $container->load('getJWSVerifierFactoryService')), ($container->services['Jose\\Bundle\\JoseFramework\\Services\\HeaderCheckerManagerFactory'] ?? $container->load('getHeaderCheckerManagerFactoryService')), ($container->services['event_dispatcher'] ?? $container->getEventDispatcherService()));
    }
}
