<?php

namespace ContainerWBe5s9X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLexikJwtAuthentication_EnableEncryptionConfigCommandService extends App_KernelProdContainer
{
    /*
     * Gets the private 'lexik_jwt_authentication.enable_encryption_config_command' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Command\EnableEncryptionConfigCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['lexik_jwt_authentication.enable_encryption_config_command'] = $instance = new \Lexik\Bundle\JWTAuthenticationBundle\Command\EnableEncryptionConfigCommand(NULL);

        $instance->setName('lexik:jwt:enable-encryption');
        $instance->setDescription('Enable Web-Token encryption support.');

        return $instance;
    }
}
