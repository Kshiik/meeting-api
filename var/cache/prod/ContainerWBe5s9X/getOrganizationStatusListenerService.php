<?php

namespace ContainerWBe5s9X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrganizationStatusListenerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\EventListener\OrganizationStatusListener' shared autowired service.
     *
     * @return \App\EventListener\OrganizationStatusListener
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container));

        if (isset($container->privates['App\\EventListener\\OrganizationStatusListener'])) {
            return $container->privates['App\\EventListener\\OrganizationStatusListener'];
        }

        return $container->privates['App\\EventListener\\OrganizationStatusListener'] = new \App\EventListener\OrganizationStatusListener($a);
    }
}
