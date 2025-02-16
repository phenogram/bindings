<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents the default scope of bot commands. Default commands are used if no commands with a narrower scope are specified for the user.
 */
interface BotCommandScopeDefaultInterface extends TypeInterface
{
    /** @var string $type Scope type, must be default */
    public string $type { set; }
}
