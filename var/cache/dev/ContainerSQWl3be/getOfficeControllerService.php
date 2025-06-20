<?php

namespace ContainerSQWl3be;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOfficeControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\OfficeController' shared autowired service.
     *
     * @return \App\Controller\OfficeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'OfficeController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Interface'.\DIRECTORY_SEPARATOR.'OfficeServiceInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'OfficeService.php';

        $container->services['App\\Controller\\OfficeController'] = $instance = new \App\Controller\OfficeController(($container->privates['debug.validator'] ?? self::getDebug_ValidatorService($container)), new \App\Service\OfficeService(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container))));

        $instance->setContainer(($container->privates['.service_locator.ZyP9f7K'] ?? $container->load('get_ServiceLocator_ZyP9f7KService'))->withContext('App\\Controller\\OfficeController', $container));

        return $instance;
    }
}
