<?php

namespace ContainerWBe5s9X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Authenticator_LoginService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.firewall.authenticator.login' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['security.authenticator.json_login.login'] ?? $container->load('getSecurity_Authenticator_JsonLogin_LoginService'));

        if (isset($container->privates['security.firewall.authenticator.login'])) {
            return $container->privates['security.firewall.authenticator.login'];
        }

        return $container->privates['security.firewall.authenticator.login'] = new \Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener(new \Symfony\Component\Security\Http\Authentication\AuthenticatorManager([$a], ($container->privates['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), ($container->privates['security.event_dispatcher.login'] ?? $container->load('getSecurity_EventDispatcher_LoginService')), 'login', ($container->privates['monolog.logger.security'] ?? $container->load('getMonolog_Logger_SecurityService')), true, true, []));
    }
}
