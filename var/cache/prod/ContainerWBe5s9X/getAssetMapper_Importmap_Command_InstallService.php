<?php

namespace ContainerWBe5s9X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssetMapper_Importmap_Command_InstallService extends App_KernelProdContainer
{
    /*
     * Gets the private 'asset_mapper.importmap.command.install' shared service.
     *
     * @return \Symfony\Component\AssetMapper\Command\ImportMapInstallCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['asset_mapper.importmap.command.install'] = $instance = new \Symfony\Component\AssetMapper\Command\ImportMapInstallCommand(($container->privates['asset_mapper.importmap.remote_package_downloader'] ?? $container->load('getAssetMapper_Importmap_RemotePackageDownloaderService')), \dirname(__DIR__, 4));

        $instance->setName('importmap:install');
        $instance->setDescription('Download all assets that should be downloaded');

        return $instance;
    }
}
