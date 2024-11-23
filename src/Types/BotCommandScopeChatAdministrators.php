<?php

namespace Phenogram\Bindings\Types;

/**
 * Represents the scope of bot commands, covering all administrators of a specific group or supergroup chat.
 */
class BotCommandScopeChatAdministrators extends BotCommandScope implements Interfaces\BotCommandScopeChatAdministratorsInterface
{
    /**
     * @param int|string $chatId Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername)
     * @param string     $type   Scope type, must be chat_administrators
     */
    public function __construct(
        public int|string $chatId,
        public string $type = 'chat_administrators',
    ) {
    }
}
