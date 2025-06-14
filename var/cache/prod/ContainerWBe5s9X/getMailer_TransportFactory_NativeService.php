<?php

namespace ContainerWBe5s9X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailer_TransportFactory_NativeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'mailer.transport_factory.native' shared service.
     *
     * @return \Symfony\Component\Mailer\Transport\NativeTransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        return new \Symfony\Component\Mailer\Transport\NativeTransportFactory(($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)), ($container->privates['http_client.uri_template'] ?? $container->load('getHttpClient_UriTemplateService')), ($container->privates['monolog.logger.mailer'] ?? $container->load('getMonolog_Logger_MailerService')));
    }
}
