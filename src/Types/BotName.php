<?php

namespace Phenogram\Bindings\Types;

/**
 * This object represents the bot's name.
 */
class BotName implements Interfaces\BotNameInterface
{
    /**
     * @param string $name The bot's name
     */
    public function __construct(
        public string $name,
    ) {
    }
}
