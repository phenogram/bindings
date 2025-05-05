<?php

namespace Phenogram\Bindings\Factories;

use Phenogram\Bindings\Factories\LocationFactory as Location;
use Phenogram\Bindings\Types\ChatLocation;
use Phenogram\Bindings\Types\Interfaces\ChatLocationInterface;
use Phenogram\Bindings\Types\Interfaces\LocationInterface;

class ChatLocationFactory extends AbstractFactory
{
    /**
     * Creates a new ChatLocation instance with default fake data.
     *
     * @param LocationInterface|null $location Optional. The location to which the supergroup is connected. Can't be a live location.
     * @param string|null            $address  Optional. Location address; 1-64 characters, as defined by the chat owner
     */
    public static function make(?LocationInterface $location = null, ?string $address = null): ChatLocationInterface
    {
        return self::factory()->makeChatLocation(
            location: $location ?? Location::make(),
            address: $address ?? self::fake()->text(50),
        );
    }
}
