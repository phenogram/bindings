<?php

namespace Phenogram\Bindings\Types;

/**
 * This object describes a message that can be inaccessible to the bot. It can be one of.
 *
 * @see Message
 * @see InaccessibleMessage
 */
abstract class MaybeInaccessibleMessage implements Interfaces\MaybeInaccessibleMessageInterface
{
    public function __construct()
    {
    }
}
