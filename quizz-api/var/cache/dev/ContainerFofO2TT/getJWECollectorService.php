<?php

namespace ContainerFofO2TT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJWECollectorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Jose\Bundle\JoseFramework\DataCollector\JWECollector' shared autowired service.
     *
     * @return \Jose\Bundle\JoseFramework\DataCollector\JWECollector
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/web-token/jwt-bundle/DataCollector/Collector.php';
        include_once \dirname(__DIR__, 4).'/vendor/web-token/jwt-bundle/DataCollector/JWECollector.php';

        return $container->privates['Jose\\Bundle\\JoseFramework\\DataCollector\\JWECollector'] = new \Jose\Bundle\JoseFramework\DataCollector\JWECollector(($container->services['Jose\\Component\\Encryption\\Compression\\CompressionMethodManagerFactory'] ?? $container->load('getCompressionMethodManagerFactoryService')), ($container->services['Jose\\Component\\Encryption\\Serializer\\JWESerializerManagerFactory'] ?? $container->getJWESerializerManagerFactoryService()));
    }
}
