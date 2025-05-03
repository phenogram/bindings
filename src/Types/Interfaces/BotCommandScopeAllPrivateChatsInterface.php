<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents the scope of bot commands, covering all private chats.
 */
interface BotCommandScopeAllPrivateChatsInterface extends TypeInterface
{
    /** @var string $type Scope type, must be all_private_chats */
    public string $type { set; get; }
}
