<?php

namespace Phenogram\Bindings\Types;

use Phenogram\Bindings\Types\Interfaces\LocationInterface;

/**
 * Represents a location to which a chat is connected.
 */
class ChatLocation implements Interfaces\ChatLocationInterface
{
    /**
     * @param LocationInterface $location The location to which the supergroup is connected. Can't be a live location.
     * @param string            $address  Location address; 1-64 characters, as defined by the chat owner
     */
    public function __construct(
        public LocationInterface $location,
        public string $address,
    ) {
    }
}
