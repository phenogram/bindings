<?php

namespace Phenogram\Bindings\Types;

/**
 * This object represents the scope to which bot commands are applied. Currently, the following 7 scopes are supported:
 *
 * @see BotCommandScopeDefault
 * @see BotCommandScopeAllPrivateChats
 * @see BotCommandScopeAllGroupChats
 * @see BotCommandScopeAllChatAdministrators
 * @see BotCommandScopeChat
 * @see BotCommandScopeChatAdministrators
 * @see BotCommandScopeChatMember
 */
abstract class BotCommandScope implements Interfaces\BotCommandScopeInterface
{
}
