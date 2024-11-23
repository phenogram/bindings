<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object contains information about the users whose identifiers were shared with the bot using a KeyboardButtonRequestUsers button.
 */
interface UsersSharedInterface extends TypeInterface
{
	/** @var int $requestId Identifier of the request */
	public int $requestId { set; get; }

	/** @var array<SharedUserInterface> $users Information about users shared with the bot. */
	public array $users { set; get; }
}
