<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents the scope of bot commands, covering all administrators of a specific group or supergroup chat.
 */
interface BotCommandScopeChatAdministratorsInterface extends TypeInterface
{
    /** @var string $type Scope type, must be chat_administrators */
    public string $type { set; get; }

    /** @var int|string $chatId Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername) */
    public int|string $chatId { set; get; }
}
