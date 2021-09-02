<?php

namespace ContainerFKTlVEQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YdOktIuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.YdOktIu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.YdOktIu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'questionRepository' => ['privates', 'App\\Repository\\QuestionRepository', 'getQuestionRepositoryService', true],
            'serializer' => ['services', '.container.private.serializer', 'get_Container_Private_SerializerService', false],
            'validator' => ['services', '.container.private.validator', 'get_Container_Private_ValidatorService', false],
        ], [
            'categoryRepository' => 'App\\Repository\\CategoryRepository',
            'questionRepository' => 'App\\Repository\\QuestionRepository',
            'serializer' => '?',
            'validator' => '?',
        ]);
    }
}
