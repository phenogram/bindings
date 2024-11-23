<?php

namespace Phenogram\Bindings\Types;

/**
 * This object represents the bot's description.
 */
class BotDescription implements Interfaces\BotDescriptionInterface
{
    /**
     * @param string $description The bot's description
     */
    public function __construct(
        public string $description,
    ) {
    }
}
