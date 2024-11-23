<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents the scope of bot commands, covering a specific member of a group or supergroup chat.
 */
interface BotCommandScopeChatMemberInterface extends TypeInterface
{
	/** @var string $type Scope type, must be chat_member */
	public string $type { set; get; }

	/** @var int|string $chatId Unique identifier for the target chat or username of the target supergroup (in the format @supergroupusername) */
	public int|string $chatId { set; get; }

	/** @var int $userId Unique identifier of the target user */
	public int $userId { set; get; }
}
