<?php

namespace ContainerSQWl3be;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEventControlleraddService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.o.yXwmU.App\Controller\EventController::add()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.o.yXwmU.App\\Controller\\EventController::add()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'eventCreateDTO' => ['privates', 'App\\DTO\\EventCreateDTO', NULL, 'Cannot autowire service "App\\DTO\\EventCreateDTO": argument "$name" of method "__construct()" is type-hinted "string", you should configure its value explicitly.'],
        ], [
            'eventCreateDTO' => 'App\\DTO\\EventCreateDTO',
        ]))->withContext('App\\Controller\\EventController::add()', $container);
    }
}
