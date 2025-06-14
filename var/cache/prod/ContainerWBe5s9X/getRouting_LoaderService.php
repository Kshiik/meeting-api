<?php

namespace ContainerWBe5s9X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRouting_LoaderService extends App_KernelProdContainer
{
    /*
     * Gets the public 'routing.loader' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = new \Symfony\Component\Config\Loader\LoaderResolver();

        $b = new \Symfony\Component\HttpKernel\Config\FileLocator(($container->services['kernel'] ?? $container->get('kernel', 1)));
        $c = new \Symfony\Bundle\FrameworkBundle\Routing\AttributeRouteControllerLoader('prod');

        $a->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($b, 'prod'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\YamlFileLoader($b, 'prod'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($b, 'prod'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($b, 'prod'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($b, 'prod'));
        $a->addLoader(new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel' => ['services', 'kernel', 'getKernelService', true],
            'security.route_loader.logout' => ['privates', 'security.route_loader.logout', 'getSecurity_RouteLoader_LogoutService', true],
        ], [
            'kernel' => 'App\\Kernel',
            'security.route_loader.logout' => 'Symfony\\Bundle\\SecurityBundle\\Routing\\LogoutRouteLoader',
        ]), 'prod'));
        $a->addLoader($c);
        $a->addLoader(new \Symfony\Component\Routing\Loader\AttributeDirectoryLoader($b, $c));
        $a->addLoader(new \Symfony\Component\Routing\Loader\AttributeFileLoader($b, $c));
        $a->addLoader(new \Symfony\Component\Routing\Loader\Psr4DirectoryLoader($b));

        return $container->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($a, ['utf8' => true], []);
    }
}
