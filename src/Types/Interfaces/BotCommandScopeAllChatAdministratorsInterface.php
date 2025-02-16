<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents the scope of bot commands, covering all group and supergroup chat administrators.
 */
interface BotCommandScopeAllChatAdministratorsInterface extends TypeInterface
{
    /** @var string $type Scope type, must be all_chat_administrators */
    public string $type { set; }
}
