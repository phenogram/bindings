<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents the scope of bot commands, covering a specific chat.
 */
interface BotCommandScopeChatInterface extends TypeInterface
{
    /** @var string $type Scope type, must be chat */
    public string $type { set; get; }

    /** @var int|string $chatId Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername) */
    public int|string $chatId { set; get; }
}
