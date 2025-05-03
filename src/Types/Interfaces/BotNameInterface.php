<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents the bot's name.
 */
interface BotNameInterface extends TypeInterface
{
    /** @var string $name The bot's name */
    public string $name { set; get; }
}
