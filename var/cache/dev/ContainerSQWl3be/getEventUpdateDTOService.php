<?php

namespace ContainerSQWl3be;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEventUpdateDTOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\DTO\EventUpdateDTO' shared autowired service.
     *
     * @return \App\DTO\EventUpdateDTO
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'DTO'.\DIRECTORY_SEPARATOR.'EventUpdateDTO.php';

        return $container->privates['App\\DTO\\EventUpdateDTO'] = new \App\DTO\EventUpdateDTO();
    }
}
