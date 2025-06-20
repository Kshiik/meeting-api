<?php

namespace ContainerWBe5s9X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrganizationControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\OrganizationController' shared autowired service.
     *
     * @return \App\Controller\OrganizationController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\OrganizationController'] = $instance = new \App\Controller\OrganizationController(new \App\Service\OrganizationService(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container))), ($container->privates['validator'] ?? self::getValidatorService($container)));

        $instance->setContainer(($container->privates['.service_locator.ZyP9f7K'] ?? $container->load('get_ServiceLocator_ZyP9f7KService'))->withContext('App\\Controller\\OrganizationController', $container));

        return $instance;
    }
}
