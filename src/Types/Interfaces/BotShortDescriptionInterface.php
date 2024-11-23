<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * This object represents the bot's short description.
 */
interface BotShortDescriptionInterface extends TypeInterface
{
	/** @var string $shortDescription The bot's short description */
	public string $shortDescription { set; get; }
}
