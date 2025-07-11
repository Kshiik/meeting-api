<?php

namespace ContainerWBe5s9X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_JsonLogin_LoginService extends App_KernelProdContainer
{
    /*
     * Gets the private 'security.authenticator.json_login.login' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\JsonLoginAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['lexik_jwt_authentication.jwt_manager'] ?? $container->load('getLexikJwtAuthentication_JwtManagerService'));

        if (isset($container->privates['security.authenticator.json_login.login'])) {
            return $container->privates['security.authenticator.json_login.login'];
        }
        $b = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['security.authenticator.json_login.login'])) {
            return $container->privates['security.authenticator.json_login.login'];
        }
        $c = ($container->services['translator'] ?? self::getTranslatorService($container));

        $container->privates['security.authenticator.json_login.login'] = $instance = new \Symfony\Component\Security\Http\Authenticator\JsonLoginAuthenticator(($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')), ($container->privates['security.user.provider.concrete.app_user_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppUserProviderService')), new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler(new \Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationSuccessHandler($a, $b, [], true), [], 'login'), new \Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler(new \Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationFailureHandler($b, $c), []), ['check_path' => '/api/login_check', 'username_path' => 'email', 'password_path' => 'password', 'use_forward' => false, 'login_path' => '/login'], ($container->privates['property_accessor'] ?? self::getPropertyAccessorService($container)));

        if ($container->has('translator')) {
            $instance->setTranslator($c);
        }

        return $instance;
    }
}
