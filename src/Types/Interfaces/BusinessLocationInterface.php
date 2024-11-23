<?php

namespace Phenogram\Bindings\Types\Interfaces;

/**
 * Contains information about the location of a Telegram Business account.
 */
interface BusinessLocationInterface extends TypeInterface
{
	/** @var string $address Address of the business */
	public string $address { set; get; }

	/** @var LocationInterface|null $location Optional. Location of the business */
	public ?LocationInterface $location { set; get; }
}
