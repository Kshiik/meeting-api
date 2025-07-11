<?php

namespace ContainerSQWl3be;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_LexikJwtAuthentication_GenerateKeypairCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.lexik_jwt_authentication.generate_keypair_command.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.lexik_jwt_authentication.generate_keypair_command.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('lexik:jwt:generate-keypair', [], 'Generate public/private keys for use in your application.', false, #[\Closure(name: 'lexik_jwt_authentication.generate_keypair_command', class: 'Lexik\\Bundle\\JWTAuthenticationBundle\\Command\\GenerateKeyPairCommand')] fn (): \Lexik\Bundle\JWTAuthenticationBundle\Command\GenerateKeyPairCommand => ($container->privates['lexik_jwt_authentication.generate_keypair_command'] ?? $container->load('getLexikJwtAuthentication_GenerateKeypairCommandService')));
    }
}
