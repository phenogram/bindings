<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * The boost was obtained by the creation of Telegram Premium gift codes to boost a chat. Each such code boosts the chat 4 times for the duration of the corresponding Telegram Premium subscription.
 */
interface ChatBoostSourceGiftCodeInterface extends TypeInterface
{
	/** @var string $source Source of the boost, always “gift_code” */
	public string $source { set; get; }

	/** @var UserInterface $user User for which the gift code was created */
	public UserInterface $user { set; get; }
}
