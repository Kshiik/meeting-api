<?php

use App\Kernel;
use Symfony\Component\Runtime\Runner\SymfonyApplicationRunner;
use Symfony\Component\Runtime\GenericRuntime;

require_once dirname(__DIR__) . '/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'] ?? 'prod', (bool) ($context['APP_DEBUG'] ?? false));
};