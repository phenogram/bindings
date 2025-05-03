<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a location to which a chat is connected.
 */
interface ChatLocationInterface extends TypeInterface
{
    /** @var LocationInterface $location The location to which the supergroup is connected. Can't be a live location. */
    public LocationInterface $location { set; get; }

    /** @var string $address Location address; 1-64 characters, as defined by the chat owner */
    public string $address { set; get; }
}
