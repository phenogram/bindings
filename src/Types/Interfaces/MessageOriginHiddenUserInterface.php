<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The message was originally sent by an unknown user.
 */
interface MessageOriginHiddenUserInterface extends TypeInterface
{
	/** @var string $type Type of the message origin, always “hidden_user” */
	public string $type { set; get; }

	/** @var int $date Date the message was sent originally in Unix time */
	public int $date { set; get; }

	/** @var string $senderUserName Name of the user that sent the message originally */
	public string $senderUserName { set; get; }
}
