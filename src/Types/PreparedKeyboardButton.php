<?php

namespace Phenogram\Bindings\Types;

/**
 * Describes a keyboard button to be used by a user of a Mini App.
 */
class PreparedKeyboardButton implements Interfaces\PreparedKeyboardButtonInterface
{
    /**
     * @param string $id Unique identifier of the keyboard button
     */
    public function __construct(
        public string $id,
    ) {
    }
}
