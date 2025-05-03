<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents the scope of bot commands, covering all group and supergroup chats.
 */
interface BotCommandScopeAllGroupChatsInterface extends TypeInterface
{
    /** @var string $type Scope type, must be all_group_chats */
    public string $type { set; get; }
}
