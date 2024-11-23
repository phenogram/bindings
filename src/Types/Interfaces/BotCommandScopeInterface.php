<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents the scope to which bot commands are applied. Currently, the following 7 scopes are supported:
 *
 * @see BotCommandScopeDefaultInterface
 * @see BotCommandScopeAllPrivateChatsInterface
 * @see BotCommandScopeAllGroupChatsInterface
 * @see BotCommandScopeAllChatAdministratorsInterface
 * @see BotCommandScopeChatInterface
 * @see BotCommandScopeChatAdministratorsInterface
 * @see BotCommandScopeChatMemberInterface
 */
interface BotCommandScopeInterface extends TypeInterface
{
}
