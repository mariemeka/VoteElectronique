<?php

namespace ContainerKQIw9X6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVoteMachineControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\VoteMachineController' shared autowired service.
     *
     * @return \App\Controller\VoteMachineController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/VoteMachineController.php';

        $container->services['App\\Controller\\VoteMachineController'] = $instance = new \App\Controller\VoteMachineController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['monolog.logger'] ?? $container->load('getMonolog_LoggerService')));

        $instance->setContainer(($container->privates['.service_locator.WJzRlgB'] ?? $container->load('get_ServiceLocator_WJzRlgBService'))->withContext('App\\Controller\\VoteMachineController', $container));

        return $instance;
    }
}
