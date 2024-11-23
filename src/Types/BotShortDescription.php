<?php

namespace Phenogram\Bindings\Types;

/**
 * This object represents the bot's short description.
 */
class BotShortDescription implements Interfaces\BotShortDescriptionInterface
{
    /**
     * @param string $shortDescription The bot's short description
     */
    public function __construct(
        public string $shortDescription,
    ) {
    }
}
