<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents the bot's description.
 */
interface BotDescriptionInterface extends TypeInterface
{
    /** @var string $description The bot's description */
    public string $description { set; }
}
