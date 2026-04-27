<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes a keyboard button to be used by a user of a Mini App.
 */
interface PreparedKeyboardButtonInterface extends TypeInterface
{
    /** @var string $id Unique identifier of the keyboard button */
    public string $id { set; get; }
}
