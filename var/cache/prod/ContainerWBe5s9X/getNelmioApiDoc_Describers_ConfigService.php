<?php

namespace ContainerWBe5s9X;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getNelmioApiDoc_Describers_ConfigService extends App_KernelProdContainer
{
    /*
     * Gets the private 'nelmio_api_doc.describers.config' shared service.
     *
     * @return \Nelmio\ApiDocBundle\Describer\ExternalDocDescriber
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['nelmio_api_doc.describers.config'] = new \Nelmio\ApiDocBundle\Describer\ExternalDocDescriber(['components' => ['securitySchemes' => ['JwtAuth' => ['type' => 'apiKey', 'in' => 'header', 'name' => 'jwt', 'description' => 'JWT токен для аутентификации']]], 'security' => [['BearerAuth' => []]], 'info' => ['title' => 'Meeting Management API', 'description' => 'Документация к API управление совещаниями', 'version' => '1.0'], 'paths' => ['/api/login_check' => ['post' => ['tags' => ['Authentication'], 'summary' => 'JWT Авторизация', 'description' => 'Выдает JWT токен при наличии пользователя с указанными данными', 'requestBody' => ['required' => true, 'content' => ['application/json' => ['schema' => ['type' => 'object', 'properties' => ['email' => ['type' => 'string', 'example' => 'user@example.com'], 'password' => ['type' => 'string', 'example' => 'mypassword']]]]]], 'responses' => [200 => ['description' => 'Успешный вход', 'content' => ['application/json' => ['schema' => ['type' => 'object', 'properties' => ['token' => ['type' => 'string', 'example' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9...']]]]]], 401 => ['description' => 'Ошибка авторизации']]]]]]);
    }
}
