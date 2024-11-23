<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents a bot command.
 */
interface BotCommandInterface extends TypeInterface
{
	/** @var string $command Text of the command; 1-32 characters. Can contain only lowercase English letters, digits and underscores. */
	public string $command { set; get; }

	/** @var string $description Description of the command; 1-256 characters. */
	public string $description { set; get; }
}
