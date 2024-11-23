<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Describes that no specific value for the menu button was set.
 */
interface MenuButtonDefaultInterface extends TypeInterface
{
	/** @var string $type Type of the button, must be default */
	public string $type { set; get; }
}
