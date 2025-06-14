<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Office extends \App\Entity\Office implements \Doctrine\ORM\Proxy\InternalProxy
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
        "\0".parent::class."\0".'city' => [parent::class, 'city', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'meetingRooms' => [parent::class, 'meetingRooms', null],
        "\0".parent::class."\0".'name' => [parent::class, 'name', null],
        "\0".parent::class."\0".'organization' => [parent::class, 'organization', null],
        "\0".parent::class."\0".'time_zone' => [parent::class, 'time_zone', null],
        'city' => [parent::class, 'city', null],
        'id' => [parent::class, 'id', null],
        'meetingRooms' => [parent::class, 'meetingRooms', null],
        'name' => [parent::class, 'name', null],
        'organization' => [parent::class, 'organization', null],
        'time_zone' => [parent::class, 'time_zone', null],
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
