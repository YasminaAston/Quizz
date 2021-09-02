<?php

namespace ContainerFofO2TT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKeyEnvVarProcessorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'Jose\Bundle\JoseFramework\EnvVarProcessor\KeyEnvVarProcessor' shared autowired service.
     *
     * @return \Jose\Bundle\JoseFramework\EnvVarProcessor\KeyEnvVarProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/EnvVarProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/web-token/jwt-bundle/EnvVarProcessor/KeyEnvVarProcessor.php';

        return $container->privates['Jose\\Bundle\\JoseFramework\\EnvVarProcessor\\KeyEnvVarProcessor'] = new \Jose\Bundle\JoseFramework\EnvVarProcessor\KeyEnvVarProcessor();
    }
}
