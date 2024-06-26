<?php

namespace ContainerKQIw9X6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCandidateControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CandidateController' shared autowired service.
     *
     * @return \App\Controller\CandidateController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CandidateController.php';

        $container->services['App\\Controller\\CandidateController'] = $instance = new \App\Controller\CandidateController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setContainer(($container->privates['.service_locator.WJzRlgB'] ?? $container->load('get_ServiceLocator_WJzRlgBService'))->withContext('App\\Controller\\CandidateController', $container));

        return $instance;
    }
}
