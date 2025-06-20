<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Event extends \App\Entity\Event implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as private;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    public function __load(): void
    {
        $this->initializeLazyObject();
    }
    

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'author' => [parent::class, 'author', null],
        "\0".parent::class."\0".'date' => [parent::class, 'date', null],
        "\0".parent::class."\0".'description' => [parent::class, 'description', null],
        "\0".parent::class."\0".'employees' => [parent::class, 'employees', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'meeting_room' => [parent::class, 'meeting_room', null],
        "\0".parent::class."\0".'name' => [parent::class, 'name', null],
        "\0".parent::class."\0".'parentEvent' => [parent::class, 'parentEvent', null],
        "\0".parent::class."\0".'recurrenceEnd' => [parent::class, 'recurrenceEnd', null],
        "\0".parent::class."\0".'recurrenceInterval' => [parent::class, 'recurrenceInterval', null],
        "\0".parent::class."\0".'recurrenceType' => [parent::class, 'recurrenceType', null],
        "\0".parent::class."\0".'time_end' => [parent::class, 'time_end', null],
        "\0".parent::class."\0".'time_start' => [parent::class, 'time_start', null],
        'author' => [parent::class, 'author', null],
        'date' => [parent::class, 'date', null],
        'description' => [parent::class, 'description', null],
        'employees' => [parent::class, 'employees', null],
        'id' => [parent::class, 'id', null],
        'meeting_room' => [parent::class, 'meeting_room', null],
        'name' => [parent::class, 'name', null],
        'parentEvent' => [parent::class, 'parentEvent', null],
        'recurrenceEnd' => [parent::class, 'recurrenceEnd', null],
        'recurrenceInterval' => [parent::class, 'recurrenceInterval', null],
        'recurrenceType' => [parent::class, 'recurrenceType', null],
        'time_end' => [parent::class, 'time_end', null],
        'time_start' => [parent::class, 'time_start', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
