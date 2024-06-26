<?php

namespace ContainerKQIw9X6;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUpdateUserKeysCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\UpdateUserKeysCommand' shared autowired service.
     *
     * @return \App\Command\UpdateUserKeysCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
        include_once \dirname(__DIR__, 4).'/src/Command/UpdateUserKeysCommand.php';

        $container->privates['App\\Command\\UpdateUserKeysCommand'] = $instance = new \App\Command\UpdateUserKeysCommand(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));

        $instance->setName('app:update-user-keys');

        return $instance;
    }
}
