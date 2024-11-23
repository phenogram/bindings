<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Represents a menu button, which opens the bot's list of commands.
 */
interface MenuButtonCommandsInterface extends TypeInterface
{
	/** @var string $type Type of the button, must be commands */
	public string $type { set; get; }
}
